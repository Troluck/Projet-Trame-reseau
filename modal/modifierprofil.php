
<?php
session_start();

include('connexion.php');

if (!isset($_SESSION['id'])) {
    header('Location: homePage.php');
    exit;
}

// On récupère les informations de l'users connecté
$afficher_profil = $DB->query(
    "SELECT * 
FROM users 
WHERE id = ?",
    array($_SESSION['id'])
);

$afficher_profil = $afficher_profil->fetch();

if (!empty($_POST)) {
    extract($_POST);
    $valid = true;

    if (isset($_POST['modification'])) {

        $name = htmlentities(trim($name));
        $email = htmlentities(strtolower(trim($email)));

        if (empty($nom)) {
            $valid = false;
            $er_nom = "Il faut mettre un nom";
        }


        if (empty($email)) {
            $valid = false;
            $er_mail = "Il faut mettre un mail";
        } elseif (!preg_match("/^[a-z0-9\-_.]+@[a-z]+\.[a-z]{2,3}$/i", $email)) {
            $valid = false;
            $er_mail = "Le mail n'est pas valide";
        } else {
            // On vérifit que le mail est disponible
            $req_mail = $DB->query(
                "SELECT email FROM users WHERE email = ?",
                array($email)
            );

            $resultat = $req_mail->fetch();

            if ($resultat) {
                $valid = false;
                $er_mail = "Ce mail existe déjà";
            }
        }

        if ($valid) {

            $DB->insert(
                "UPDATE users SET  name = ?, email = ? 
WHERE id = ?",
                array($name, $email, $_SESSION['id'])
            );

            $_SESSION['name'] = $name;
            $_SESSION['email'] = $email;

            header('Location:  homePage.php');
            exit;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
       
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="css/style.css">
    <title>Modifier votre profil</title>
</head>

<body>
            <h1 
            >MODIFICATION</h1>
            <form method="post">
                <?php
                if (isset($er_nom)) {
                ?>
                    <div><?= $er_nom ?></div>
                <?php
                }
                ?>
                <input class="input" type="text" placeholder="Votre nom" name="name" value="<?php if (isset($name)) {
                                                                                                echo $name;
                                                                                            } else {
                                                                                                echo $afficher_profil['name'];
                                                                                            } ?>" required>
                

                <?php
                if (isset($er_mail)) {
                ?>
                    <div><?= $er_mail ?></div>
                <?php
                }
                ?>
                <input class="input" type="email" placeholder="Adresse mail" name="email" value="<?php if (isset($email)) {
                                                                                                    echo $email;
                                                                                                } else {
                                                                                                    echo $afficher_profil['email'];
                                                                                                } ?>" required>


                <button type="submit" name="modification">Modifier</button>
                
                  <a class="link" href="homePage.php">Accueil</a>
                </button>
               
            </form>
        </div>
    </div>
</body>
</html>

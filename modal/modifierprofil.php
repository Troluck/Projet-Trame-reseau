<?php
session_start();
include('connexion.php');
if (!isset($_SESSION['id'])) {
    exit;
}

// On récupère les informations de l'users connecté
$afficher_profil = $smartframes->query(
    "SELECT * 
        FROM user
        WHERE id = ?",
    array($_SESSION['id'])
);
$afficher_profil = $afficher_profil->fetch();

if (!empty($_POST)) {
    extract($_POST);
    $valid = true;

    if (isset($_POST['modification'])) {
        //empecher l'users de mettre un nom incorrect et code pour mettre en mini pour mai
        $nom = htmlentities(trim($nom));
        $mail = htmlentities(strtolower(trim($mail)));

        if (empty($name)) {
            $valid = false;
            $er_nom = "Il faut mettre un nom";
        }
        if (empty($mail)) {
            $valid = false;
            $er_mail = "Il faut mettre un mail";
            // code pour que l'email soit correct
        } elseif (!preg_match("/^[a-z0-9\-_.]+@[a-z]+\.[a-z]{2,3}$/i", $mail)) {
            $valid = false;
            $er_mail = "Le mail n'est pas valide";
        } else {
            $req_mail = $smartframes->query(
                "SELECT mail 
                    FROM users 
                    WHERE mail = ?",
                array($mail)
            );
            $req_mail = $req_mail->fetch();

            if ($req_mail['mail'] <> "" && $_SESSION['mail'] != $req_mail['mail']) {
                $valid = false;
                $er_mail = "Ce mail existe déjà";
            }
        }

        if ($valid) {

            $smartframes->insert(
                "UPDATE users SET  nom = ?, mail = ? 
                    WHERE id = ?",
                array($nom, $mail, $_SESSION['id'])
            );

            $_SESSION['nom'] = $nom;
            $_SESSION['mail'] = $mail;

            header('Location:  profil.php');
            exit;
        }
    }
}
?>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Modifier votre profil</title>
</head>

<body>
    <div>Modification</div>

    <form method="post">
        <?php
        if (isset($er_nom))

        ?>
        <div><?= $er_nom ?></div>

        <input type="text" name="nom" value="<?php if (isset($nom)) {
                                                    echo $nom;
                                                } else {
                                                    echo $afficher_profil['nom'];
                                                } ?>" required>


        <?php

        if (isset($er_mail)) {
        ?>
            <div><?= $er_mail ?></div>
        <?php
        }
        ?>
        <input type="email" placeholder="Adresse mail" name="mail" value="<?php if (isset($mail)) {
                                                                                echo $mail;
                                                                            } else {
                                                                                echo $afficher_profil['mail'];
                                                                            } ?>" required>
        <button type="submit" name="modification">Modifier</button>
    </form>
</body>

</html>
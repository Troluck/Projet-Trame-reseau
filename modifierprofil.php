
<?php
//session_start();
//include("modal/connexion.php");


//if (!isset($_SESSION['id'])) {
  //  header('Location: modifierprofil.php');
  //  exit;
//}

//exitIfNotConnected();

//if (!empty($_GET["id"])) {
   // $id = $_GET["id"];

    //$requestAnnonces = $pdo->prepare(
       // "SELECT * FROM users WHERE id = $id;"
    //);
   // $requestAnnonces->execute();
    //$annonce = $requestAnnonces->fetch();
//}

if (!empty($_POST)) {
    if (
        empty($_POST["email"]) || empty($_POST["name"])
       
    ) {
        $error = true;
    } else {
        $requestCreation = $pdo->prepare(
            "UPDATE `smartframes` SET `users`='" . $_POST["name"] . "',`name`='" . $_POST["email"] . " WHERE id = $id"
        );
        if ($requestCreation->execute()) {
            header('Location:modifierprofil.php');
        } else {
            echo "Erreur Execution Requête";
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
<header><?php include("includes/header.php"); ?></header>

<?php
        if ($error) {
            echo "<h1 class='error'>Le formulaire n'est pas valide</h1>";
        }
        ?>
<body>
            <h1 
            >MODIFICATION</h1>
            <form method="post">
               
                <input value="<?php echo $users["name"]; ?>" type="text" placeholder="Votre nom" name="name">
                
                
                <input value="<?php echo $users["name"]; ?>"  type="email" placeholder="Adresse mail" name="email">


                <button type="submit" name="modification">Modifier</button>
                
                  <a class="link" href="homePage.php">Accueil</a>
                </button>
               
            </form>
        </div>
    </div>
</body>
</html>

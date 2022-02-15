<?php
include("partials/connexion.php");

exitIfNotConnected();

if (!empty($_GET["id"])) {
    $id = $_GET["id"];

    $afficher_profil = $pdo->prepare(
        "SELECT * FROM annonces WHERE id = $id;"
    );
    $afficher_profil->execute();
    $annonce = $afficher_profil->fetch();
}

if (!empty($_POST)) {
    if (
        empty($_POST["titre"]) || empty($_POST["description"])
        || empty($_POST["etat"]) || empty($_POST["ville"])
        || empty($_POST["prix"]) || empty($_POST["codePostal"])
    ) {
        $error = true;
    } else {
        $requestCreation = $pdo->prepare(
            "UPDATE `users` SET `name`='" . $_POST["name"] . "',`email`='" . $_POST["email"]  . " WHERE id = $id"
        );
        if ($requestCreation->execute()) {
            header('Location: index.php');
        } else {
            echo "Erreur Execution Requête";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/creation.css" rel="stylesheet">
    <title>Modifier une Annonce</title>
</head>

<body>
    <header><?php include("partials/header.php"); ?></header>

    <main id="main-form">
        <?php
        if ($error) {
            echo "<h1 class='error'>Le formulaire n'est pas valide</h1>";
        }
        ?>
        <h2>Modifier une annonce</h2><br>
        <form method="post" action="#">
            <div class="form-group">
                <label for="titre">Le titre de votre annonce</label>
                <input value="<?php echo $annonce["titre"]; ?>" name="titre" type="text" class="form-control" id="titre" placeholder="Votre titre">
            </div>
            <div class="form-group">
                <label for="prix">Prix</label>
                <input step="any" value="<?php echo $annonce["prix"]; ?>" name="prix" type="number" class="form-control" id="prix" placeholder="Prix">
            </div>

            <?php
            ?>
            <div class="form-group">
                <label for="etat">État du produit</label>
                <select name="etat" id="etat" class="custom-select">
                    <option <?php
                            if ($annonce["etat"] == "neuf") {
                                echo " selected";
                            }
                            ?> value="neuf">
                        neuf
                    </option>
                    <option <?php
                            if ($annonce["etat"] == "occasion") {
                                echo " selected";
                            }
                            ?> value="occasion">occasion
                    </option>
                    <option <?php
                            if ($annonce["etat"] == "correct") {
                                echo " selected";
                            }
                            ?> value="correct">correct
                    </option>
                    <option <?php
                            if ($annonce["etat"] == "abime") {
                                echo " selected";
                            }
                            ?> value="abime">abimé
                    </option>
                </select>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" class="form-control" id="description"><?php echo $annonce["description"]; ?></textarea>
            </div>
            <div class="form-group">
                <label for="ville">Ville</label>
                <input value="<?php echo $annonce["ville"]; ?>" name="ville" type="text" class="form-control" id="ville" placeholder="Votre ville">
            </div>
            <div class="form-group">
                <label for="codePostal">Code Postal</label>
                <input value="<?php echo $annonce["codePostal"]; ?>" name="codePostal" type="number" class="form-control" id="codePostal" placeholder="Code Postal">
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-warning">Modifier l'annonce</button>
            </div>
        </form>
    </main>

    <?php include("partials/footer.php"); ?>
</body>

</html>
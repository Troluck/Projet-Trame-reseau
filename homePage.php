<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="homePage.css">
    <link rel="stylesheet" href="modal/modal.css">
    <title>Smart Frames</title>
</head>

<body>
    <?php include("includes/header.php") ?>
    <?php session_start() ?>
    <?php session_destroy() ?>
    <?php include("modal/ModalErreur.php") ?>
    <?php include("modal/ModalConnexion.php") ?>
    <?php include("modal/ModalInscription.php") ?>

    <main>
        <div class="text">
            <h2>Bienvenue sur<br>Smart Frames</h2>
            <h3>Le site qui permet de décoder votre réseau d'entreprise</h3>
        </div>
        <img class="imghome" src="img/network1.gif">

        <div class="button">
            <span id="connexion">Connexion</span>
            <span id="inscription">Inscription</span>
        </div>
        <script src="modal/homePageModal.js"></script>
    </main>
    <?php include("includes/footer.php") ?>
</body>

</html>
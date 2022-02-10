<?php
$pdo = new PDO('mysql:host=localhost;dbname=smartframes',  "root", "root");
session_start();


if (!empty($_POST["email"]) && !empty($_POST["password"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];


    $requestUtilisateur = $pdo->prepare("SELECT * FROM users WHERE email = '$email' AND password ='$password'");
    $requestUtilisateur->execute();
    $users = $requestUtilisateur->fetch();

    if (!empty($users)) {
        echo "ça marche";
    }
}
?>



<div id="modalConnexion" class="modal">
    <div class="modal-content connect-content">
        <span class="close">&times;</span>
        <h1>Connexion</h1>
        <form action="" method="post" class="form-input">

            <div class="input">
                <label for="mail">E-Mail: </label><br>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="input">
                <label for="password">Mot de passe : </label><br>
                <input type="password" id="password" name="password" required>
            </div>


            <div class="input">
                <input type="submit" value="Valider" class="submit connect-submit" id="submit-connexion">
            </div>

        </form>
    </div>
</div>
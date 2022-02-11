<?php
if (isset($_POST["Id2"])) {
    $pdo = new PDO('mysql:host=localhost;dbname=smartframes',  "root", "root");
    session_start();


    if (!empty($_POST["email-connect"]) && !empty($_POST["password-connect"])) {
        $email = $_POST["email-connect"];
        $password = $_POST["password-connect"];

        $requestUtilisateur = $pdo->prepare("SELECT * FROM users WHERE email = '$email'");
        $requestUtilisateur->execute();
        $users = $requestUtilisateur->fetch();



        if ((!empty($users)) && (password_verify($password, $users["password"]))) {
            $erreur = false;
            echo ("ça marche");
            $_SESSION["id"] = $users["id"];
            header('location:dashboard.php');
        } else {
            $erreur = true;
            echo ("ça marche pas");
        }
    }
}

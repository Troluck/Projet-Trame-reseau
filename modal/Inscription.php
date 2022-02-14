<?php
if (isset($_POST["Id1"])) {
    $pdo = new PDO('mysql:host=localhost;dbname=smartframes',  "root", "root");
    if (empty($_POST["name"]) || empty($_POST["email"]) || empty($_POST["phone"]) || empty($_POST["password"]) || empty($_POST["password-verif"])) {
        echo ("les champs ne sont pas remplis");
    } else {
        $nom = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $password = $_POST['password'];
        $passwordverif = $_POST['password-verif'];
        $passwordhash = password_hash($password, PASSWORD_DEFAULT);
        if ($password != $passwordverif) {
            echo ("Les mots de passes sont différents");
        } else {
            $requestUtilisateur = $pdo->prepare("SELECT * FROM users WHERE email = '$email'");
            $requestUtilisateur->execute();
            $users = $requestUtilisateur->fetch();

            if ($users) {
                echo ("mail deja utilisé");
            } else {

                $req = $pdo->prepare("INSERT INTO users (name, email,tel,password) VALUES ('$nom', '$email', '$phone', '$passwordhash')");
                $req->execute();

                echo ("mot de passe valide");
            }
        }
    }
}

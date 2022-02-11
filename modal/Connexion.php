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
        $erreur = false;
    } else {
        $erreur = true;
    }
    echo json_encode($erreur);
}

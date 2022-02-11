<?php
echo ("test");
$pdo = new PDO('mysql:host=localhost;dbname=smartframes',  "root", "root");


if (!empty($_POST)) {
    if (empty($_POST["name"]) || empty($_POST["email"]) || empty($_POST["phone"]) || empty($_POST["password"]) || empty($_POST["password-verif"])) {
        echo "<p>Tous les champs ne sont pas remplis!!!</p>";
    } else {
        $nom = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $passwordverif = $_POST['password-verif'];



        $req = $pdo->prepare("INSERT INTO users (name, email,tel,password) VALUES ('$nom', '$email', '$phone', '$password')");
        $req->execute();
    }
}

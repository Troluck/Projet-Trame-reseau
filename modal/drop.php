<?php
$pdo = new PDO('mysql:host=localhost;dbname=smartframes',  "root", "root");
$id = $_SESSION['id'];

if (isset($_POST["Id4"])) {

    $drop = $pdo->prepare("DELETE FROM users WHERE id = $id");
    $drop->execute();

    header('location:homePage.php');
}

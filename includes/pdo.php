<?php
$pdo = new PDO('mysql:host=localhost;dbname=smartframes', "root", "root");
session_start();

$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if ($conn === false) {
    die("ERREUR : Impossible de se connecter. " . mysqli_connect_error());
}

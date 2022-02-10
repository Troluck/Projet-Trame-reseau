<?php
session_start();
$pdo = new PDO('mysql:host=localhost;dbname=smartframes', "root", "");
ini_set('SMTP', 'Smtp.gmail.com');
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'smartframes');

$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if ($conn === false) {
    die("ERREUR : Impossible de se connecter. " . mysqli_connect_error());
}

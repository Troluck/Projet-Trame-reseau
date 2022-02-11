<?php
$pdo = new PDO('mysql:host=localhost;dbname=smartframes',  "root", "root");
session_start();
$id = $_SESSION['id'];
$reqprofil = $pdo->prepare("SELECT * FROM users WHERE `id` = '$id'"); //Préparer
$reqprofil->execute(); //Executer 
$affprofil = $reqprofil->fetchAll();
echo $affprofil[0]["name"] ?>

<header>
    <div class="header-left">
        <a href="homePage.php" class=lienLogo>
            <img src="img/logo sf.png" id="logo-img" alt="logo Smart Frames">
        </a>
        <span class="lienLogo">Smart Frames</span>

    </div>
    <div class="header-right">
        <a href="about.php"> Qui sommes nous ?
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </a>
    </div>
    <script src="includes/header.js"></script>
</header>
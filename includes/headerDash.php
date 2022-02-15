<?php
$pdo = new PDO('mysql:host=localhost;dbname=smartframes',  "root", "root");
session_start();

?>

<header>
    <div class="header-left">
        <a href="homePage.php" class=lienLogo>
            <img src="img/logosf.png" id="logo-img" alt="logo Smart Frames">
        </a>
        <span class="lienLogo">Smart Frames</span>

    </div>
    <div class="header-right">

        <?php if (!empty($_SESSION['id'])) {

            $pdo = new PDO('mysql:host=localhost;dbname=smartframes',  "root", "root");
            $id = $_SESSION['id'];
            $reqprofil = $pdo->prepare("SELECT * FROM users WHERE `id` = '$id'"); //Préparer
            $reqprofil->execute(); //Executer 
            $affprofil = $reqprofil->fetchAll();
            date_default_timezone_set('Europe/Paris');
            $date = date('H');
            if ($date < 18 && $date > 6) {
                echo '<p class=afficheName> Bonjour ' . $affprofil[0]["name"] . '</p>';
            } else {
                echo '<p class=afficheName> Bonsoir ' . $affprofil[0]["name"] . '</p>';
            }
        }
        ?>
        <?php if (!empty($_SESSION['id'])) {
            echo '<a href="dashboard.php"> Dashboard
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </a>';
        } ?>
        <!-- <a href="dashboard.php"> Dashboard
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </a> -->
    </div>
    <script src="includes/header.js"></script>
</header>
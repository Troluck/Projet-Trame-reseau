<?php
include("inc/pdo.php");
if (isset($_SESSION['username'])) {
  $username = ($_SESSION['username']);
}

if (isset($_SESSION['id'])) {
  
}
if (isset($_SESSION['prenom'])) {

  $name = ($_SESSION['name']);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title>smart frames</title>

</head>

<body>

  

    <header>
      <?php include("inc/header.php");
      ?>
    </header>
    <main>
    <img src="images/logo.png">
          
      </main>
    </div>

    <footer>
      <?php include("inc/footer.php"); ?>
    </footer>

  </div>
</body>

</html>
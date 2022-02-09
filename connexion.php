<?php
include("inc/pdo.php");

if (isset($_POST['email'])) {
    $name = stripslashes($_REQUEST['email']);
    $name = mysqli_real_escape_string($conn, $name);
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($conn, $password);
    $query = "SELECT * FROM user WHERE email='$name' and password='$password'";
    $result = mysqli_query($conn, $query);
    $rows = mysqli_num_rows($result);


    $requestrole = $pdo->prepare(
        "SELECT `role` FROM user WHERE email='$name'"
    );
    $requestrole->execute();
    $role = $requestrole->fetchAll();

    $requestid = $pdo->prepare(
        "SELECT `id` FROM user WHERE email='$name'"
    );
    $requestid->execute();
    $id_user = $requestid->fetchAll();

    $requestprenom = $pdo->prepare(
        "SELECT `prenom` FROM user WHERE email='$name'"
    );
    $requestprenom->execute();
    $prenom_user = $requestprenom->fetchAll();

    if ($rows == 1) {
        $_SESSION['name'] = $name;
        $_SESSION['id'] = $id_user[0][0];
        $_SESSION['prenom'] = $prenom_user[0][0];
        print_r($_SESSION['name']);
        header("location: index.php");
    } else {
        $erreurFormulaireInvalide = "<p class='message_erreur'>Le formulaire n'est pas valide<p>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>smart frames</title>

</head>

<body>
    <header><?php include("inc/header.php") ?></header>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="enregistrez">inscription</button>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
    <form action="" method="POST" class="conn">
        <h1>Connexion</h1>
        <div class="entry">
            <div class="label">
                <label>email :</label><br>
            </div>
            <input name="email" type="email">
        </div>
        <div class="entry">
            <div class="label">
                <label>mot de passe :</label><br>
            </div>
            <input name="password" type="password">
        </div>
        <div class="entry">
            <?php
            // message erreur erreurFormulaireInvalide
            if (isset($erreurFormulaireInvalide)) {
                echo $erreurFormulaireInvalide;
            } ?>
            <input type="submit" class="submit">
        </div>
    </form>

    <footer><?php include("inc/footer.php") ?></footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script src="modal.js"></script>

</body>

</html>
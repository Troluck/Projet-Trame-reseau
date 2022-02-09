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
    <title>smart frame</title>

</head>

<body>
    <header><?php include("inc/header.php") ?></header>
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
</body>

</html>
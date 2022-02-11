<?php
date_default_timezone_set('Europe/Paris');

include("inc/pdo.php");
$error = false;
if (!empty($_POST)) {
    if (
        empty($_POST["ip"]) || empty($_POST["name"])
        || empty($_POST["email"]) || empty($_POST["password"])
    ) {
        // message erreurFormulaireInvalide
        $erreurFormulaireInvalide = "<p class='message_erreur'>Le formulaire n'est pas valide<p>";
    } else {
        $email = ($_POST["email"]);
        $query = "SELECT * FROM user WHERE email='$email'";
        $result = mysqli_query($conn, $query);
        $rows = mysqli_num_rows($result);
        if ($rows > 0) {
            // erreur errCompteDejaExistant
            $errCompteDejaExistant = "<p class='message_erreur'>Email déja utilisé <p>";
        } else {
            $requestinscription = $pdo->prepare("INSERT INTO `users`( `email`,`name`, `ip`,  `password`,)
                                        VALUES ('" . $_POST["email"] . "',
                                        '" . $_POST["name"] . "',
                                        '" . $_POST["tel"] . "',
                                        '" . $_POST["password"] . "',
                                        '" . 0 . "',
                                        '" . NULL . "')");
            if ($requestinscription->execute()) {
                header('Location: index.php');
            } else {
                var_dump($requestinscription->errorInfo());
            }
        }
    }
}
function verifEmail($email)
{
    if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
        return false;
    } else {
        return true;
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

    <title>smart frame</title>
    <html>

    <body>




        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="enregistrez">inscription</button>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <label for="name">nom:</label>

                    <input type="text" id="name" name="name">
                    <label for="name">prénom</label>

                    <input type="text" id="name" name="name">
                    <label for="phone">entrez votre numéro de téléphone</label>

                    <input type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required>

                    <div>
                        <label for="pass">mot de passe:</label>
                        <input type="password" id="pass" name="password" minlength="8" required>
                    </div>

                    <div class="modal-body">
                        <form>

                            <input type="submit" value="Sign in">

                        </form>
                    </div>

                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

        <script src="modal.js"></script>

    </body>
</head>
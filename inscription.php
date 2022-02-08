$error = false; if (!empty($_POST)) { if ( empty($_POST["prenom"]) || empty($_POST["nom"]) || empty($_POST["email"]) || empty($_POST["password"]) || empty($_POST["birth_date"]) ) { // message erreurFormulaireInvalide $erreurFormulaireInvalide = "
<p class='message_erreur'>Le formulaire n'est pas valide
    <p>"; } else { $email = ($_POST["email"]); $query = "SELECT * FROM vac_users WHERE email='$email'"; $result = mysqli_query($conn, $query); $rows = mysqli_num_rows($result); if ($rows > 0) { // erreur errCompteDejaExistant $errCompteDejaExistant = "
        <p
            class='message_erreur'>Email déja utilisé
            <p>"; } else { $requestinscription = $pdo->prepare("INSERT INTO `vac_users`( `email`,`nom`, `prenom`, `password`,`birth_date` , `role`, `created_at`, `token`) VALUES ('" . $_POST["email"] . "', '" . $_POST["nom"] . "', '" . $_POST["prenom"] .
                "', '" . $_POST["password"] . "', '" . $_POST["birth_date"] . "', '" . 0 . "', '" . date("Ymd") . "', '" . NULL . "')"); if ($requestinscription->execute()) { header('Location: index.php'); } else { var_dump($requestinscription->errorInfo());
                } } } } function verifEmail($email) { if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) { return false; } else { return true; } } ?>
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




                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">inscription</button>
                        <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"
        data-bs-whatever="@fat">Open modal for @fat</button>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"
        data-bs-whatever="@getbootstrap">Open modal for @getbootstrap</button> -->

                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <div class="mb-3">
                                                <label for="recipient-name" class="col-form-label">Recipient:</label>
                                                <input type="text" class="form-control" id="recipient-name">
                                            </div>
                                            <div class="mb-3">
                                                <label for="message-text" class="col-form-label">Message:</label>
                                                <textarea class="form-control" id="message-text"></textarea>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Send message</button>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

                        <script src="modal.js"></script>

                    </body>
                </head>
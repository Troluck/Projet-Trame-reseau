<script>
    const textErreur = document.querySelector('#erreur-text');
    const modalErreur = document.getElementById('modalErreur');
</script>

<?php
if (isset($_POST["Id3"])) {

    $pdo = new PDO('mysql:host=localhost;dbname=smartframes',  "root", "root");

    $select = $pdo->prepare("SELECT `password` FROM users WHERE id = $_SESSION[id]");
    $select->execute();
    $mdp = $select->fetch();
    var_dump($mdp);
    if (empty($_POST["name"]) || empty($_POST["email"]) || empty($_POST["phone"]) || empty($_POST["password"])) {
?>
        <script>
            modalErreur.style.display = 'flex';
            textErreur.innerHTML = "<p>Tout les champs ne sont pas remplies</p>";
        </script>
    <?php
    } else {
        $nom = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $password = $_POST['password'];
        $passwordhash = password_hash($mdp, PASSWORD_DEFAULT);
    }
    if ($passwordhash != $password) {
    ?>
        <script>
            modalErreur.style.display = "flex";
            textErreur.innerHTML = "<p>Mots de passe invalide</p>"
        </script>
        <?php
    } else {
        $requestUtilisateur = $pdo->prepare("SELECT email FROM users WHERE email = $email, id != $_SESSION[id] ");
        $requestUtilisateur->execute();
        $users = $requestUtilisateur->fetch();

        if ($users) {
        ?>
            <script>
                modalErreur.style.display = "flex";
                textErreur.innerHTML = "<p>Mail déja utilisé par un autre utilisateur</p>"
            </script>
<?php
        } else {
            $update = $pdo->prepare("UPDATE users ('name', 'email', 'tel') VALUES ('$nom', '$email', '$phone')");
            $update->execute();
        }
    }
}

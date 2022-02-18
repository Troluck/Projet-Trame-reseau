<?php
if (isset($_POST["Id1"])) {
    $pdo = new PDO('mysql:host=localhost;dbname=smartframes',  "root", "root");
    if (empty($_POST["name"]) || empty($_POST["email"]) || empty($_POST["phone"]) || empty($_POST["password"]) || empty($_POST["password-verif"])) {
?>
        <script>
            const modalErreur = document.querySelector("#modalErreur");
            const textErreur = document.querySelector("#erreur-text");
            modalErreur.style.display = "flex";
            textErreur.innerHTML = "<p>Tout les champs ne sont pas remplies</p>"
        </script>
    <?php
    } else {
        $nom = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $password = $_POST['password'];
        $passwordverif = $_POST['password-verif'];
        $passwordhash = password_hash($password, PASSWORD_DEFAULT);
    }

    if ($password != $passwordverif) {
    ?>
        <script>
            const modalErreur = document.querySelector("#modalErreur");
            const textErreur = document.querySelector("#erreur-text");
            modalErreur.style.display = "flex";
            textErreur.innerHTML = "<p>Mots de passe différents</p>"
        </script>
        <?php
    } else {

        $requestUtilisateur = $pdo->prepare("SELECT * FROM users WHERE email = $email");
        $requestUtilisateur->execute();
        $users = $requestUtilisateur->fetch();

        if ($users) {
        ?>
            <script>
                const modalErreur = document.querySelector("#modalErreur");
                const textErreur = document.querySelector("#erreur-text");
                modalErreur.style.display = "flex";
                textErreur.innerHTML = "<p>Mail déja utilisé</p>"
            </script>

<?php
        } else if ((strlen($password) >= 8) && ((preg_match('#^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W)#', $password)))) {


            $req = $pdo->prepare("INSERT INTO users (name, email,tel,password) VALUES ('$nom', '$email', '$phone', '$passwordhash')");
            $req->execute();
        }
    }
}

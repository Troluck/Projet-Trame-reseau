<? include("Inscription.php") ?>
<div id="modalInscription" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <h1>Inscription</h1>
        <form action="" method="post" class="form-input">
            <div class="input">
                <label for="name">Prenom/Nom: </label><br>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="input">
                <label for="email">E-mail : </label><br>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="input">
                <label for="phone">Téléphone : </label><br>
                <input type="tel" id="phone" name="phone" required>
            </div>
            <div class="input">
                <label for="password">Mot de passe : </label><br>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="input">
                <label for="password-verif">Vérification Mot de passe : </label><br>
                <input type="password" id="password-verif" name="password-verif" required>
            </div>

            <div class="input">
                <input type="submit" value="Valider" class="submit" id="submit-inscription">
            </div>
        </form>
    </div>
</div>
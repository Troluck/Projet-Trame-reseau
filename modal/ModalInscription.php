<?php include("modal/Inscription.php") ?>
<div id="modalInscription" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <h1>Inscription</h1>
        <form action="" method="post" class="form-input">
            <div class="input">
                <label for="name">Prenom/Nom: </label><br>
                <input type="text" id="name" name="name">
            </div>
            <div class="input">
                <label for="email">E-mail : </label><br>
                <input type="text" id="email" name="email">
            </div>
            <div class="input">
                <label for="phone">Téléphone : </label><br>
                <input type="tel" id="phone" name="phone">
            </div>
            <div class="input">
                <label for="password">Mot de passe : </label><br>
                <input type="password" id="password" name="password">
            </div>
            <div class="input">
                <label for="password-verif">Vérification Mot de passe : </label><br>
                <input type="password" id="password-verif" name="password-verif">
            </div>
            <input id="Id1" name="Id1" type="hidden" value="">

            <div class="input">
                <input type="submit" value="Valider" class="submit" id="submit-inscription" name="submit-inscription">
            </div>
        </form>
    </div>
</div>
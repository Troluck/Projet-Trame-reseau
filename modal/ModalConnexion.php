<?php include("modal/Connexion.php") ?>


<div id="modalConnexion" class="modal">
    <div class="modal-content connect-content">
        <span class="close">&times;</span>
        <h1>Connexion</h1>
        <form action="" method="post" class="form-input">

            <div class="input">
                <label for="email-connect">E-Mail: </label><br>
                <input type="text" id="email-connect" name="email-connect">
            </div>

            <div class="input">
                <label for="email-connect">Mot de passe : </label><br>
                <input type="password" id="password-connect" name="password-connect">
            </div>
            <input id="Id2" name="Id2" type="hidden" value="">

            <div class="input">
                <input type="submit" value="Valider" class="submit connect-submit" id="submit-connexion" name="submit-connexion">
            </div>

        </form>

    </div>
</div>
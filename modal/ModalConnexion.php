<? include("modal/Connexion.php") ?>


<div id="modalConnexion" class="modal">
    <div class="modal-content connect-content">
        <span class="close">&times;</span>
        <h1>Connexion</h1>
        <form action="" method="post" class="form-input">

            <div class="input">
                <label for="mail">E-Mail: </label><br>
                <input type="text" id="email" name="email">
            </div>

            <div class="input">
                <label for="password">Mot de passe : </label><br>
                <input type="password" id="password" name="password">
            </div>


            <div class="input">
                <input type="submit" value="Valider" class="submit connect-submit" id="submit-connexion">
            </div>

        </form>

    </div>
</div>
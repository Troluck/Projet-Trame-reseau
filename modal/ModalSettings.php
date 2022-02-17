<?php include("modal/settings.php") ?>
<div id="modalSettings" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <h1>Modifier mes informations</h1>
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
            <div class="input password">
                <label for="password">Mot de passe : </label><br>
                <input type="password" id="password" name="password">
            </div>
            <input id="Id3" name="Id3" type="hidden" value="">

            <div class="input">
                <input type="submit" value="Modifier" class="submit" id="submit-change" name="submit-change">
            </div>
        </form>
    </div>
</div>
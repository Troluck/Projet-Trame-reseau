<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="about.css">
    <link rel="stylesheet" href="modal/modal.css">

    <title>Smart Frames- Qui sommes nous ?</title>
</head>

<body>
    <?php
    include("includes/headerDash.php");
    ?>
    <h1> Qui sommes nous ?</h1>
    <main>
        <div class="carrousel-presentation">

            <div class="container containerpresentation">

                <div class="carrousel1 active">

                    <div class="imgcarrousel">
                        <img class="img" src="img/security.gif" alt="gif security">
                    </div>

                    <div class="textcarrousel textpresentation">
                        <div class="description">
                            <p>La sécurité de vos données de votre réseau d'entreprise est notre priorité.</p>
                            <p>Nous avons tout mis en oeuvre pour éviter le piratage de vos données personnelles et d'entreprise</p>

                        </div>
                    </div>
                </div>
                <div class="carrousel1">

                    <div class="imgcarrousel">
                        <img class="img" src="img/responsive.gif" alt="responsive gif">
                    </div>

                    <div class="textcarrousel textpresentation">
                        <div class="description">

                            <p>Accéder à vos données où vous le voulez.</p>
                            <p> Le site est accessible dans tout les formats :
                                ordinateur, tablette, smartphone...</p>

                        </div>
                    </div>
                </div>
                <div class="carrousel1">

                    <div class="imgcarrousel">
                        <img class="img" src="img/graphics.gif" alt="graphics gif">
                    </div>

                    <div class="textcarrousel textpresentation">
                        <div class="description">
                            <p>Analyser simplement votre réseau d'entreprise</p>
                            <p>Votre espace client vous propose de comprendre comment marche votre réseau grâce aux graphiques et aux statistiques gérés par nos soins</p>

                        </div>
                    </div>
                </div>
            </div>
            <div class="navigation nav1">

                <ul id="list">
                    <li>
                        <figure class="button activebutton 1">
                            <div class="buttonimgboxstaff imgluc">
                                <div class="buttonsecurity"></div>
                            </div>
                        </figure>
                    </li>

                    <li>
                        <figure class="button 2">
                            <div class="buttonimgboxstaff">
                                <div class="buttonresponsive"></div>
                            </div>
                        </figure>
                    </li>

                    <li>
                        <figure class="button 3">
                            <div class="buttonimgboxstaff">
                                <div class="buttongraphics"></div>
                            </div>
                        </figure>
                    </li>

                </ul>
            </div>
        </div>
        <hr>
        <div class="carrousel-staff">
            <div class="navigation navstaff">

                <ul id="liststaff">
                    <li>
                        <figure class="buttonstaff activebutton 1">
                            <div class="buttonimgbox imgluc">
                                <div class="buttonimgluc"></div>
                            </div>
                            <figcaption>
                                <h2>Luc</h2>
                                <p>Developpeur front end</p>
                            </figcaption>
                        </figure>
                    </li>

                    <li>
                        <figure class="buttonstaff 2">
                            <div class="buttonimgbox">
                                <div class="buttonimglukas"></div>
                            </div>
                            <figcaption>
                                <h2>Lukas</h2>
                                <p>Developpeur back end</p>
                            </figcaption>
                        </figure>
                    </li>

                    <li>
                        <figure class="buttonstaff 3">
                            <div class="buttonimgbox">
                                <div class="buttonimgtheo"></div>
                            </div>
                            <figcaption>
                                <h2>Theo</h2>
                                <p>Developpeur Full Stack</p>
                            </figcaption>
                        </figure>
                    </li>

                </ul>
            </div>

            <div class="container containerstaff">

                <div class="carrousel2 active">

                    <div class="imgcarrousel2">
                        <img class="img2" src="img/Luc Boulanger.png" alt="Luc Boulanger Photo">
                    </div>

                    <div class="textcarrousel2">
                        <div class="description2">
                            <h2>Luc <span>Boulanger<span></h2>
                            <p>Etudiant en développement web chez NeedForSchool et co-fondateur de SmartFrames</p>
                            <p>C'est lui qui s'occupe du design du site et de la sécurité de votre compte</p>
                            <h3>luc.boulanger@sframes.fr</h3>
                        </div>
                    </div>
                </div>
                <div class="carrousel2">

                    <div class="imgcarrousel2">
                        <img class="img2" src="img/Lukas Vuylsteke.png" alt="Lukas Vuylsteke Photo">
                    </div>

                    <div class="textcarrousel2">
                        <div class="description2">
                            <h2>Lukas <span>Vuylsteke<span></h2>
                            <p>Etudiant en développement web chez NeedForSchool et co-fondateur de SmartFrames</p>
                            <p>C'est lui qui analyse vos données réseaux</p>
                            <h3>lukas.vuylsteke@sframes.fr</h3>
                        </div>
                    </div>
                </div>
                <div class="carrousel2">

                    <div class="imgcarrousel2">
                        <img class="img2" src="img/Theo Lemettais-Petrel.png" alt="Theo Lemettais Photo">
                    </div>

                    <div class="textcarrousel2">
                        <div class="description2">
                            <h2>Theo <span>Lemettais<span></h2>
                            <p>Etudiant en développement web chez NeedForSchool et co-fondateur de SmartFrames</p>
                            <p>C'est lui qui gère le Règlement général sur la protection des données du site</p>
                            <h3>theo.lemettais@sframes.fr</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="about.js"></script>

    </main>
    <?php include("includes/footer.php") ?>

</body>
<script src="modal/headerModal.js"></script>

</html>
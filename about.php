<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="about.css">
    <title>Smart Frames- Qui sommes nous ?</title>
</head>

<body>
    <?php include("includes/header.php") ?>
    <main>
        <h1> Qui sommes nous ?</h1>

        <div class="button">
            <div class="left">←</div>
            <div class="right">→</div>
            <ul id="list">
                <li>
                    <figure class="buttonactive">
                        <div class="buttonimgbox">
                            <div class="buttonimg"></div>
                        </div>
                        <figcaption>
                            <h2>Luc</h2>
                            <p>Developpeur front end</p>
                        </figcaption>
                    </figure>
                </li>

                <li>
                    <figure>
                        <div class="buttonimgbox">
                            <div class="buttonimg"></div>
                        </div>
                        <figcaption>
                            <h2>Lukas</h2>
                            <p>Developpeur front end</p>
                        </figcaption>
                    </figure>
                </li>

                <li>
                    <figure>
                        <div class="buttonimgbox">
                            <div class="buttonimg"></div>
                        </div>
                        <figcaption>
                            <h2>Theo</h2>
                            <p>Developpeur front end</p>
                        </figcaption>
                    </figure>
                </li>

            </ul>
        </div>

        <div class="container">

            <div class="carrousel1 active">

                <div class="imgcarrousel">
                    <img class="imgluc" src="img/Luc Boulanger.png" alt="Luc Boulanger Photo">
                </div>

                <div class="textcarrousel">
                    <div class="description">
                        <h2>Luc <span>Boulanger<span></h2>
                        <p>Etudiant en développement web chez NeedForSchool et co-cofondateur de SmartFrames</p>
                        <p>C'est lui qui s'occupe du design du site</p>
                        <h3>luc.boulanger@sframes.fr</h3>
                    </div>
                </div>
            </div>
            <div class="carrousel1">

                <div class="imgcarrousel">
                    <img class="imgluc" src="img/Lukas Vuylsteke.png" alt="Luc Boulanger Photo">
                </div>

                <div class="textcarrousel">
                    <div class="description">
                        <h2>Lukas <span>Vuylsteke<span></h2>
                        <p>Etudiant en développement web chez NeedForSchool et co-cofondateur de SmartFrames</p>
                        <p>C'est lui de l'analyse de vos données réseaux</p>
                        <h3>lukas.vuylsteke@sframes.fr</h3>
                    </div>
                </div>
            </div>
            <div class="carrousel1">

                <div class="imgcarrousel">
                    <img class="imgluc" src="img/Theo Lemettais-Petrel.png" alt="Luc Boulanger Photo">
                </div>

                <div class="textcarrousel">
                    <div class="description">
                        <h2>Theo <span>Lemettais<span></h2>
                        <p>Etudiant en développement web chez NeedForSchool et co-cofondateur de SmartFrames</p>
                        <p>C'est lui qui s'occupe du design du site</p>
                        <h3>theo.lemettais@sframes.fr</h3>
                    </div>
                </div>
            </div>
        </div>

        <script src="about.js"></script>
    </main>
    <?php include("includes/footer.php") ?>

</body>

</html>
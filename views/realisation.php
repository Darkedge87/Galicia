<?php

session_start();

?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Réalisations</title>
</head>

    <body>

        <?php require_once 'header.php'; ?>

            <main class="main">

                <div class="realisation">

                    <div class="title">
                        <h2>Nos réalisations</h2>
                    </div>

                    <ul>
                        <li>
                            <a href="realisation/facade.php">Façade</a>
                            <a href="realisation/peinture.php">Peinture</a>
                            <a href="realisation/grosoeuvre.php">Gros oeuvre</a>
                            <a href="realisation/dalle.php">Dalle et Terrassement</a>
                            <a href="realisation/carrelage.php">Carrelage</a>
                            <a href="realisation/pave.php">Pavé et granulat de marbre</a>
                        </li>
                    </ul>

                </div>

                <!-- <figure>
                    <img src="img/"
                </figure> -->

            </main>

    <?php require_once 'footer.php'; ?>
    
    </body>

</html>

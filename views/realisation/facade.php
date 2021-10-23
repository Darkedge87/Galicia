<?php
    require ('../../models/Image.php');
    require ('../../config.php');

    $image = new Image();
    $facades = $image->getImages(FACADE_DIR_PATH);

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <title>Réalisation Façade</title>
</head>

    <body>
        
        <?php require_once 'header.php'; ?>

        <main class="main">

            <div class="realisation">

                <div class="title">
                    <h2>Réalisation Façade</h2>
                </div>

                <ul>
                    <li>
                        <a href="facade.php">Façade</a>
                        <a href="peinture.php">Peinture</a>
                        <a href="grosoeuvre.php">Gros oeuvre</a>
                        <a href="dalle.php">Dalle et Terrassement</a>
                        <a href="carrelage.php">Carrelage</a>
                        <a href="pave.php">Pavé et granulat de marbre</a>
                    </li>
                </ul>

            </div>

            <div class="row">
                <div class="column">
                    <?php
                        if (is_array($facades) || is_object($facades))
                        {
                            foreach($facades as $facade) { 
                                
                                echo "<img src='".FACADE_DIR_URL."$facade'/>"; 
                            }
                        } else {
                            echo 'Il n\'y a pas de photo pour le moment.';
                        }
                    ?>
                </div>
            </div>

        </main>

        <?php require_once 'footer.php'; ?>

    </body>

</html>
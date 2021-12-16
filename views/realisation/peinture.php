<?php
    require_once ('../../models/Image.php');
    require_once ('../../config.php');
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/footer.css">
    <link rel="stylesheet" href="../../css/formulaire.css">
    <link rel="stylesheet" href="../../css/responsive.css">
    <title>Réalisation Peinture</title>
</head>

    <body>
        
        <?php require_once 'header.php'; ?>

        <main class="main">

            <div class="realisation">

                <div class="title">
                    <h2>Réalisation Peinture</h2>
                </div>

                <nav class="navbar2" role="navigation">
                    <ul class="navbar2-links">
                        <li class="navbar2-link"><a href="facade.php">Façade</a></li>
                        <li class="navbar2-link"><a href="peinture.php">Peinture</a></li>
                        <li class="navbar2-link"><a href="grosoeuvre.php">Gros oeuvre</a></li>  
                        <li class="navbar2-link"><a href="dalle.php">Dalle et Terrassement</a></li>
                        <li class="navbar2-link"><a href="carrelage.php">Carrelage</a></li>
                        <li class="navbar2-link"><a href="pave.php">Pavé et granulat de marbre</a></li>
                    </ul>
                </nav>

            </div>

            <div class="row">
                <div class="column">
                    <?php
                        $image = new Image();
                        $peintures = $image->getImages(PEINTURE_DIR_PATH);
                    ?>
                </div>
            </div>

        </main>

        <?php require_once 'footer.php'; ?>

    </body>

</html>
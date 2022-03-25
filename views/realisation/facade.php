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
    <link rel="canonical" href="https://www.galicia37.com/realisation/facade.html">
    <link rel="icon" type="image/x-icon" href="../../img/logo.jpg">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/footer.css">
    <link rel="stylesheet" href="../../css/formulaire.css">
    <link rel="stylesheet" href="../../css/responsive.css">
    <title>Réalisation Façade</title>
    <meta name="Réalisation Façade" content="Spécialiste en travaux de ravalement de façades.Nous réalisons tous types d'enduits, crépi traditionnel, 
        crépi grésé et crépi gratté. Demandez un devis"/>
</head>

    <body>
        
        <?php require_once 'header.php'; ?>

        <main class="main">

            <div class="realisation">

                <div class="title">
                    <h2>Réalisation Façade</h2>
                </div>

                <nav class="navbar2" role="navigation">
                    <ul class="navbar2-links">
                        <li class="navbar2-link col1"><a href="facade">Façade</a></li>
                        <li class="navbar2-link col1"><a href="peinture">Peinture</a></li>
                        <li class="navbar2-link col1"><a href="grosoeuvre">Gros oeuvre</a></li>  
                        <li class="navbar2-link col2"><a href="dalle">Dalle et Terrassement</a></li>
                        <li class="navbar2-link col2"><a href="carrelage">Carrelage</a></li>
                        <li class="navbar2-link col2"><a href="pave">Pavé et granulat de marbre</a></li>
                    </ul>
                </nav>

            </div>

            <div class="row">
                <div class="column">
                    <?php
                        $image = new Image();
                        $facades = $image->getImages(FACADE_DIR_PATH);
                    ?>
                </div>
            </div>

        </main>

        <?php require_once 'footer.php'; ?>

    </body>

</html>
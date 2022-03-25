<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../img/logo.jpg">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/formulaire.css">
    <link rel="stylesheet" href="../css/responsive.css">
    <title>Nos Réalisations</title>
</head>

    <body>

        <?php require_once 'header.php'; ?>

            <main class="main">

                <div class="realisation">

                    <div class="title">
                        <h2>Nos réalisations</h2>
                    </div>

                    <nav class="navbar2" role="navigation">
                        <ul class="navbar2-links">
                            <li class="navbar2-link"><a href="realisation/facade">Façade</a></li>
                            <li class="navbar2-link"><a href="realisation/peinture">Peinture</a></li>
                            <li class="navbar2-link"><a href="realisation/grosoeuvre">Gros oeuvre</a></li>  
                            <li class="navbar2-link"><a href="realisation/dalle">Dalle et Terrassement</a></li>
                            <li class="navbar2-link"><a href="realisation/carrelage">Carrelage</a></li>
                            <li class="navbar2-link"><a href="realisation/pave">Pavé et granulat de marbre</a></li>
                        </ul>
                    </nav>

                </div>

            </main>

    <?php require_once 'footer.php'; ?>
    
    </body>

</html>

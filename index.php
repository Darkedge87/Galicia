<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/formulaire.css">
    <link rel="stylesheet" href="css/responsive.css">
    <title>Galicia</title>
</head>

<body>

    <!-- Début wrapper -->

	<div id="wrapper">

        <header class="header" role="banner">

            <div class="slogan">

                <figure class="logo">
                    <img src="img/logo.jpg">
                </figure>
                <div class="first-title">
                    <h1>Galicia</h1>
                </div>

            </div>
            <nav class="navbar" role="navigation">
                <ul class="navbar-links">    
                    <li class="navbar-link first"><a href="index.php">Accueil</a></li>
                    <li class="navbar-link second"><a href="views/realisation.php">Réalisations</a></li>
                    <li class="navbar-link third"><a href="views/contact.php">Contact</a></li>
                </ul>
                <button class="burger">
                    <span class="bar"></span>  
                </button> 
            </nav>

        </header>

        <main class="main" role="main">

            <div class="head">
                <h2>Entreprise Galicia : Coordination de travaux tout corps d'état</h2>
            </div>

            <div class="profil">
                <figure class="photo">
                    <img src="img/emilio.jpg" alt="photo">
                    <figcaption>Emilio Gonzalez <br>Coordinateur de travaux</figcaption>
                </figure>
            </div>

            <div class="description">
                <h3>Coordonnées</h3>
                <div class="vcard">
                    <h2 class="fn org">Galicia</h2>
                    <adress class="adr">
                        <span class="street-adress">Adresse: 13, rue du Général de Gaulle</span>
                        <span class="locality">Nilvange</span>
                        <span class="postal-code">57240</span><br>
                    </adress>
                    <a href="mailto:emilio.gonzalez0312@gmail.com" class="mail">Email: emilio.gonzalez0312@gmail.com</a><br>
                    <a href="tel:06-34-31-77-38" class="tel">Téléphone: 06 34 31 77 38</a>
                </div>

                <div class="devis">
                    <a href="views/contact.php">Demander un devis</a>
                </div>
                <?php
                    
                ?>
            </div>
            
        </main>

    </div>

    <!-- fin wrapper -->


    <!-- Début du footer -->
    
    <div class="footer" role="contentinfo">

        <div class="sociaux">
            <h3>Nous suivre</h3>
            <div class="content">
                <a href="https://www.facebook.com/profile.php?id=100073105672394" target="_blank">
                    <img src="img/facebook.jpg" alt="facebook">
                </a>
                <p class="icon">Facebook</p>
            </div>
            <div class="content">
                <a href="https://www.instagram.com/galicia.0312/" target="_blank">
                    <img src="img/instagram.jpg" alt="instagram">
                </a>
                <p class="icon">Instagram</p>
            </div>
        </div>

        <div class="partenariats">
            <h3>Partenaires</h3>
            <div class="groupe">
                <div class="stem">
                    <h4>STEM</h4>
                    <p>Climatisation - rampe <br> clôture</p>
                    <img src="img/stem_logo.jpg" alt="logo stem">
                </div>
                <div class="gh">
                    <h4>GH Terrassement</h4>
                    <p>Terrassement - macadam - gros oeuvre</p>
                    <img src="img/gh_logo.jpg" alt="logo stem">
                </div>
                <div class="ultimarts">
                    <h4>Ultim'Arts</h4>
                    <p>Fresque mural - Graffiti</p>
                    <img src="img/ultim_arts_logo.jpg" alt="logo">
                </div>
            </div>
        </div>

        <div class="info">
            <ul class="lienfooter">
                <li><a href="views/mention.php">Mentions légales</a></li>
                <li><a href="views/faq.php">FAQ</a></li>
            </ul>
        </div>
    </div>

    <!-- Fin du footer --> 

</body>
    <script src="js/script.js" type="text/javascript"></script>  
</html>
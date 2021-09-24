<?php

session_start();
if(isset($_SESSION['user_id']));
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">  -->
    <title>Galicia</title>
</head>

<body>

    <!-- Début wrapper -->

	<div id="wrapper">

        <header class="header">

            <h1>Galicia</h1>

            <figure>
                <img src="img/logo.jpg" class="logo">
            </figure>

            <nav class="nav">
                <ul>
    
                    <?php if(!isset($_SESSION['user_id'])): ?>
                            
                        <li><a href="index.php">Accueil</a></li>
                        <li><a href="views/realisation.php">Réalisations</a></li>
                        <li><a href="views/connexion.php">Connexion</a></li>
                        <li><a href="views/inscription.php">Inscription</a></li>
                        <li><a href="views/contact.php">Contact</a></li>

                    <?php else: ?>
                            
                        <li><a href="index.php">Accueil</a></li>
                        <li><a href="views/realisation.php">Réalisations</a></li>
                        <li><a href="views/espace_membre.php">Espace membre</a></li>
                        <li><a href="views/contact.php">Contact</a></li>
                        <li><a href="views/logout.php">Déconnexion</a></li>

                    <?php endif; ?>
                        
                </ul>

            </nav>

            <?php 
                if(isset($_SESSION['user_id'])) {
                    echo '<p class="connect">Bonjour '.$_SESSION['user_name'].' '.$_SESSION['user_lastname'].'</p>';
                }
            ?>

        </header>

        <main class="main">

            <div class="head">
                <h2>Entreprise Galicia : <span class="category">Toiture - Carrelage - Peinture - Dalle</span></h2>
            </div>

            <div class="profil">
                <figure class="photo">
                    <img src="img/emilio.jpg" alt="photo">
                    <figcaption>Emilio Gonzalez </br>Coordinateur de travaux</figcaption>
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
                    <p><a href="#" class="mail">Email: emilio.gonzalez0312@gmail.com</a></p>
                    <a href="#" class="tel">Téléphone: 06 34 31 77 38</a>
                </div>
            </div>



        </main>


    <?php require_once 'views/footer.php'; ?>

    </div>

    </body>



</html>
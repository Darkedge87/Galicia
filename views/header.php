<?php

// session_start();
if(isset($_SESSION['user_id']));

                if(isset($_SESSION['user_id'])) {
                    echo '<p class="connect">Bonjour '.$_SESSION['user_name'].' '.$_SESSION['user_lastname'].'</p>';
                }

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous"> -->
    <title>Galicia</title>
</head>

    <body>

    
    <!-- Début wrapper -->

	<div id="wrapper">

        <header class="header">

            <h1>Galicia</h1>

            <figure>
                <img src="../img/logo.jpg" class="logo">
            </figure>

            <nav class="nav">
                <ul>
            
                    <?php if(!isset($_SESSION['user_id'])): ?>
                            
                        <li><a href="../index.php">Accueil</a></li>
                        <li><a href="realisation.php">Réalisations</a></li>
                        <li><a href="connexion.php">Connexion</a></li>
                        <li><a href="inscription.php">Inscription</a></li>
                        <li><a href="contact.php">Contact</a></li>

                    <?php else: ?>
                            
                        <li><a href="../index.php">Accueil</a></li>
                        <li><a href="realisation.php">Réalisations</a></li>
                        <li><a href="espace_membre.php">Espace membre</a></li>
                        <li><a href="contact.php">Contact</a></li>
                        <li><a href="logout.php">Déconnexion</a></li>

                    <?php endif; ?>
                        
                </ul>

            </nav>

            
            
        </header>
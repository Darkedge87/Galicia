    
    <!-- Début wrapper -->

	<div id="wrapper">

        <header class="header">

            <h1>Galicia</h1>

            <figure>
                <img src="../../img/logo.jpg" class="logo">
            </figure>

            <nav class="nav">
                <ul>
            
                    <?php if(!isset($_SESSION['user_id'])): ?>
                            
                        <li><a href="../../index.php">Accueil</a></li>
                        <li><a href="../realisation.php">Réalisations</a></li>
                        <li><a href="../connexion.php">Connexion</a></li>
                        <li><a href="../register.php">Inscription</a></li>
                        <li><a href="../contact.php">Contact</a></li>

                    <?php else: ?>
                            
                        <li><a href="../../index.php">Accueil</a></li>
                        <li><a href="../realisation.php">Réalisations</a></li>
                        <li><a href="../espace_membre.php">Espace membre</a></li>
                        <li><a href="../contact.php">Contact</a></li>
                        <li><a href="../logout.php">Déconnexion</a></li>

                    <?php endif; ?>
                        
                </ul>

            </nav>

            <?php 
                if(isset($_SESSION['user_id'])) {
                    echo '<p class="connect">Bonjour '.$_SESSION['user_name'].' '.$_SESSION['user_lastname'].'</p>';
                }
            ?>
            
        </header>
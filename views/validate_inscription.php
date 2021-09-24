<?php
    require_once '../Db/Db.php';
    require_once '../controllers/UserManager.php';

    $db = Db::getInstance();
    $user = new UserManager($db);
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta http-equiv= »Content-Type » content= »text/html; charset=utf-8″ />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Validation</title>
</head>

    <body>

        <!-- Début du wrapper -->

        <div id="wrapper">

            <main class="main"> 

                <?php 

                    if (isset($_POST['submit_inscription'])) {

                        $user_name = $_POST['name'];
                        $user_lastname = $_POST['lastname'];
                        $user_email = $_POST['email1'];
                        $mdp1 = $_POST['mdp1'];
                        $mdp2 = $_POST['mdp2'];

                        $user->createUser($user_name, $user_lastname, $user_email, $mdp1, $mdp2);             

                        // echo '<p>Votre réservation a bien été effectuée</p>';
                    }
                    else {
                        echo '<p>Erreur lors de votre inscription</p>';

                    }
                ?>
            
            </main>

        </div>


    </body>

</html>
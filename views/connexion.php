<?php
    require_once '../Db/Db.php';
    require_once '../controllers/UserManager.php';

    $db = Db::getInstance();
    $logUser = new UserManager($db);
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Connexion-</title>
</head>

    <body>

        <?php require_once 'header.php'; 

            if (isset($_POST['submit_connexion'])) {

                $user_email = $_POST['email'];
                $mdp1 = $_POST['mdp1'];

                $logUser->logUser($user_email, $mdp1);             

            }
        ?>

        <?php  if (isset($message)) { echo $message; }?>

        <form action="connexion.php" method="POST" class="form_01">

            <h2>Connexion à l'espace membre</h2>

            <div class="row">
            
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="inputemail">Votre email</label>
                        <input required type="email" name="email" id="inputemail" class="form-control" value="<?= isset($_SESSION['inputs']['email']) ? $_SESSION['inputs']['email'] : '' ?>">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="inputmdp">Votre mot de passe</label>
                        <input required type="password" name="mdp1" id="inputmdp" class="form-control" value="<?= isset($_SESSION['inputs']['mdp']) ? $_SESSION['inputs']['mdp'] : '' ?>">
                    </div>
                </div>
                <a href="#" class="forgot_pswd">Mot de passe oublié ?</a>
                <button type="submit" name="submit_connexion" class="btn btn-primary">Se connecter</button>
                
            </div>
            
        </form>


        <?php require_once 'footer.php'; ?>
        
    </body>

</html>
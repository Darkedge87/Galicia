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

        <?php require_once 'header.php'; ?>

        <form action="login.php" method="POST" class="form_01">

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
                        <input required type="password" name="mdp" id="inputmdp" class="form-control" value="<?= isset($_SESSION['inputs']['mdp']) ? $_SESSION['inputs']['mdp'] : '' ?>">
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Connexion</button>

            </div>
        </form>

        <?php require_once 'footer.php'; ?>
        
    </body>

</html>
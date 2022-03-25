<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="canonical" href="https://www.galicia37.com/contact.html">
    <link rel="icon" type="image/x-icon" href="../img/logo.jpg">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/formulaire.css">
    <link rel="stylesheet" href="../css/responsive.css">
    <title>Contact</title>
</head>

    <body>
    
        <?php require_once 'header.php'; ?>

            <?php if(array_key_exists('errors', $_SESSION)): ?>
                <div class="alert alert-danger">
                    <?= implode('<br>', $_SESSION['errors']); ?>
                    <p>Erreur lors de l'envoie du message</p>
                </div>
            <?php endif; ?>

            <?php if(array_key_exists('success', $_SESSION)): ?>
                    <div class="alert alert-success">
                        <p>Votre email a bien été envoyé</p>
                    </div>
                <?php endif; ?>


            <form action="validation" method="POST" class="form_01">
                
                <h2>Nous Contacter</h2>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="inputname">Votre nom</label>
                            <input required type="text" name="name" id="inputname" class="form-control" value="<?= isset($_SESSION['inputs']['name']) ? $_SESSION['inputs']['name'] : '' ?>">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="inputlastname">Votre prénom</label>
                            <input required type="text" name="lastname" id="inputlastname" class="form-control" value="<?= isset($_SESSION['inputs']['lastname']) ? $_SESSION['inputs']['lastname'] : '' ?>">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="inputemail">Votre email</label>
                            <input required type="email" name="email" id="inputemail" class="form-control" value="<?= isset($_SESSION['inputs']['email']) ? $_SESSION['inputs']['email'] : '' ?>">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="inputservice">Service</label>
                            <select name="service" id="inputservice" class="form-control">
                                <option value="Devis">Devis</option>
                                <option value="Rendez-vous">Rendez-vous</option>
                                <option value="Renseignement">Renseignement</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="inputmessage">Votre message</label>
                            <textarea required id="inputmessage" name="message" class="form-control"><?= isset($_SESSION['inputs']['message']) ? $_SESSION['inputs']['message'] : '' ?></textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Envoyer</button>
                </div>
            </form>

        </div>

        <?php require_once 'footer.php'; ?>

    </body>

</html>

<?php
    unset($_SESSION['inputs']);
    unset($_SESSION['success']);
    unset($_SESSION['errors']);
?>
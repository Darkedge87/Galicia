<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Récupération mot de passe</title>
</head>

    <body>

    <?php require_once 'header.php'; ?>

    <main class="main">

        <div class="recover-password">

            <div class="title">
                <h2>Récupération de mot de passe</h2>
            </div>

            <form method="POST" class="default-form">
                <label for="inputemail">Votre email</label>
                <input type="email" name="recover_mail"/>
                <button type="submit" name="recover_submit" class="btn btn-primary">Valider</button>
            </form>

        </div>

    </main>

    </body>

</head>

</html>
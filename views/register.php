<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/style.css">
	<title>Inscription</title>
</head>

	<body>
		<?php
			require_once 'header.php';
		?>

		<form action="validate_inscription.php" method="POST" class="form_01">

			<h2>Inscription</h2>

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
						<input required type="email" name="email1" id="inputemail" class="form-control email" value="<?= isset($_SESSION['inputs']['email']) ? $_SESSION['inputs']['email'] : '' ?>">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label for="inputemail">Confirmer votre email</label>
						<input required type="email" name="email2" id="inputemail" class="form-control email" value="<?= isset($_SESSION['inputs']['email']) ? $_SESSION['inputs']['email'] : '' ?>">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label for="inputmdp1">Votre mot de passe</label>
						<input required type="password" name="mdp1" id="inputmdp1" class="form-control"/>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label for="inputmdp2">Confirmation du mot de passe</label>
						<input required type="password" name="mdp2" id="inputmdp2" class="form-control"/>
					</div>
				</div>

				<button type="submit" class="btn btn-primary" name="submit_inscription">S'inscrire</button>

			</div>
		</form>


	</div>

	<?php require 'footer.php'; ?>

	</body>

</html>

	
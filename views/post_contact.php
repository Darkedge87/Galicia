<?php


$errors = [];

if(!array_key_exists('name', $_POST) || $_POST['name'] == '') {
    $errors['name'] = "Vous n'avez pas renseigné votre nom";
}
if(!array_key_exists('lastname', $_POST) || $_POST['lastname'] == '') {
    $errors['lastname'] = "Vous n'avez pas renseigné votre prénom";
}
if(!array_key_exists('email', $_POST) || $_POST['email'] == '' || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = "Vous n'avez pas renseigné un email valide";
}
if(!array_key_exists('message', $_POST) || $_POST['message'] == '') {
    $errors['message'] = "Vous n'avez pas renseigné votre message";
}
if(!array_key_exists('service', $_POST) || $_POST['service'] == '') {
    $errors['service'] = "Le service que vous demandez n'existe pas";
}

session_start();

if(!empty($errors)) {

    $_SESSION['errors'] = $errors;
    $_SESSION['inputs'] = $_POST;
    header('Location: contact');

}else{

    $_SESSION['success'] = 1;

    $to = 'emilio.gonzalez0312@gmail.com';
    $name = htmlentities($_POST['name']);
    $lastname = htmlentities($_POST['lastname']);
    $subject = htmlentities($_POST['service']);
    $message = htmlentities($_POST['message']); 
    $from = htmlentities($_POST['email']);

    $header="MIME-Version: 1.0\r\n";
	$header.='From:"Galicia37.com"<emiliogonzalez@galicia37.com>'."\n";
	$header.='Content-Type:text/html; charset="uft-8"'."\n";
	$header.='Content-Transfer-Encoding: 8bit';

	$text='
	<html>
		<body>
			<div class="test" align="center">
                <p>
                    Formulaire de : <br />
                    Nom: '.$name.' <br />
                    Prénom: '.$lastname.' <br/>
                    Email: '.$from.' <br/
                </p>
				<br />
				'.$message.'
				<br />
				<img src="https://www.galicia37.com/img/logo.jpg"/>
			</div>
		</body>
	</html>
	';

	mail($to, $subject, $text, $header);
    header('Location: contact');
}

    
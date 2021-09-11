<?php


$errors = [];
$emails = ['merger.nicolas@yahoo.com', 'merger.nicolas@yahoo.com', 'merger.nicolas@yahoo.com',];

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
if(!array_key_exists('service', $_POST) || !isset($emails[$_POST['service']])) {
    $errors['service'] = "Le service que vous demandez n'existe pas";
}



session_start();

if(!empty($errors)) {

    $_SESSION['errors'] = $errors;
    $_SESSION['inputs'] = $_POST;
    header('Location: contact.php');

}else{

    $_SESSION['success'] = 1;
    $headers = 'FROM: ' . $_POST['email'];
    mail($emails[$_POST['service']], 'Formulaire de contact de' . $_POST['name'], $_POST['message'], $headers);
    header('Location: contact.php');

}
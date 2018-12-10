<?php
    session_start();



$errors = [];


if (!array_key_exists(('nom', $_POST) or $_POST['nom'] == '') {
    $errors['name'] = "Vous n'avez pas renseigné votre nom";
}

if (!array_key_exists('email', $_POST) or $_POST['email'] == '' or !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
    $errors['email'] = "Vous n'avez pas renseigné un email valide";
}

if (!array_key_exists('message', $_POST) or $_POST['message'] == ''){
    $errors['message'] = "Vous n'avez pas renseigné votre message";
}

if(!empty($errors)){
    session_start();
    $_SESSION['errors'] = $errors;
    header('location: index.php');
}else {
    $message = $_POST['message'];
    $headers = 'FROM: site@local.dev';  
    mail('rubn04@gmail.com','formulaire de contact', $message, $headers);
}


?>
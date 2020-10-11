
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactez-nous</title>
</head>
<body>
<?php

$errors = [];
$lastNameError = $_POST['lastname'];
$firstnameError = $_POST['firstname'];
$emailError = $_POST['email'];
$phoneError = $_POST['phone'];
$subjectError = $_POST['subject-select'];
$messageError = $_POST['user_message'];


if (empty($lastNameError)) {
    $errors ['lastname'] = "Veuillez renseigner votre nom" ;
    echo $errors ['lastname'] . "<br>";
}
if (empty($firstnameError)) {
    $errors ['firstname'] = " Veuillez renseigner votre prénom" ;
    echo $errors ['firstname'] . "<br>";
}
if (!filter_var($emailError, FILTER_VALIDATE_EMAIL)) {
    $errors ['email'] = "email invalide ou non renseigné";
    echo $errors ['email'] . "<br>";
}
if (empty($phoneError)) {
    $errors ['phone'] = "Veuillez renseigner votre téléphone" ;
    echo $errors ['phone'] . "<br>";
}
if (empty($subjectError)) {
    $errors ['subject-select'] = "Veuillez renseigner votre sujet" ;
    echo $errors ['subject-select'] . "<br>";
}
if (empty($messageError)) {
    $errors ['user_message'] = "Veuillez renseigner votre message" ;
    echo $errors ['user_message'] . "<br>";
}
if (count($errors) === 0) {
    echo  "Merci " . $_POST["firstname"] . " " . $_POST["lastname"] . " de nous avoir contacté à propos de " .  $_POST["subject-select"] .
        ". Un de nos conseiller vous contactera soit à l’adresse " . $_POST["email"] . " ou par téléphone au " . $_POST["phone"] . " dans les plus brefs délais pour traiter votre demande : " . $_POST["user_message"] ;
}

?>
</body>
</html>

<?php

$name = $_POST["name"];
$first_name = $_POST["first-name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$message = $_POST["message"];
$substr_message = substr($message, 0, 500);
$format_phone = "/^(0|\+33)[1-9]([-. ]?[0-9]{2}){4}$/";
$email_to = "ME";
$email_subject = "Prise de contact par lmpwybb.alwaysdata.net.";
$email_message = "Quelqu'un vous a contacté:\n\n";
$email_message .= "Nom: " . $name . "\n";
$email_message .= "Prénom: " . $first_name . "\n";
$email_message .= "Email: " . $email . "\n";
$email_message .= "Telephone: " . $phone . "\n";
$email_message .= "Message: " . $substr_message . "\n";
$headers = 'From: ' . $email . "\r\n".
    'Reply-To: ' . $email . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

if (isset($_POST['send']) && (empty($name) || empty($first_name) || empty($email) || empty($message))) {
    header('Location: index.php?error=notfilled#contact');
    die();
}

if (isset($_POST['send']) && !empty($phone) && !preg_match($format_phone, $phone)) {
    header('Location: index.php?error=notanphone#contact');
    die();
}

if (isset($_POST['send']) && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header('Location: index.php?error=notanemail#contact');
    die();
}

if (isset($_POST['send']) && strlen($message) <= 15) {
    header('Location: index.php?error=message#contact');
    die();
}

if (isset($_POST['send'])) {
    mail($email_to, $email_subject, $email_message, $headers);
    header('Location: index.php?success=send#contact');
    die();
}

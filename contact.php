<?php

require "config.php";

function checkFirstName(array $form): string {
    if (isset($form['first_name']) === false) {
        throw new Exception("Le tableau doit contenir une clé first_name.");
    }

    if (empty($form['first_name'])) {
        return  "Vous n'avez pas saisi de prénom.";
    }

    return "";
}

function checkLastName(array $form): string {
    if (isset($form['last_name']) === false) {
        throw new Exception("Le tableau doit contenir une clé last_name.");
    }

    if (empty($form['last_name'])) {
        return  "Vous n'avez pas saisi de nom.";
    }

    return "";
}

function checkEmail(array $form): string {
    if (isset($form['email']) === false) {
        throw new Exception("Le tableau doit contenir une clé email.");
    }

    if (empty($form['email'])) {
        return  "Vous n'avez pas saisi d'adresse email.";
    }

    if (filter_var($form['email'], FILTER_VALIDATE_EMAIL) === false) {
        return "Vous n'avez pas saisi une adresse email valide.";
    }

    return "";
}

function checkPhone(array $form): string {
    if (isset($form['phone']) === false) {
        throw new Exception("Le tableau doit contenir une clé phone.");
    }

    if (empty($form['phone'])) {
        return "Vous n'avez pas saisi de numéro de téléphone.";
    }

    if (preg_match("/^(0|\+33)[1-9]([-. ]?[0-9]{2}){4}$/", $form['phone']) !== 1) {
        return "Vous n'avez pas saisi un numéro de téléphone valide.";
    }

    return "";
}

function checkMessage(array $form): string {
    if (isset($form['message']) === false) {
        throw new Exception("Le tableau doit contenir une clé message.");
    }

    if (empty($form['message'])) {
        return "Vous n'avez pas saisi de message.";
    }

    return "";
}

function checkAll(array $form): bool {
    if (checkFirstName($form) !== "") {
        return false;
    }

    if (checkLastName($form) !== "") {
        return false;
    }

    if (checkEmail($form) !== "") {
        return false;
    }

    if (checkPhone($form) !== "") {
        return false;
    }

    if (checkMessage($form) !== "") {
        return false;
    }

    return true;
}

function checkToken(string $userToken, string $serverToken): bool {
    return ($userToken === $serverToken);
}

function sendEmail(array $form): bool {
    global $config;

    if (checkAll($form) === false) {
        return false;
    }

    $substr_message = substr($form['message'], 0, 500);

    $email_to = $config["email"];
    $email_subject = "Prise de contact.";
    $email_message = "On vous a contacté de votre site lmpwybb.alwaysdata.net:\n\n";
    $email_message .= "Nom: " . $form['last_name'] . "\n";
    $email_message .= "Prénom: " . $form['first_name'] . "\n";
    $email_message .= "Email: " . $form['email'] . "\n";
    $email_message .= "Téléphone: " . $form['phone'] . "\n";
    $email_message .= "Message: " . $substr_message . "\n";

    $headers = 'From: ' . $form['email'] . "\r\n" .
        'Reply-To: ' . $form['email'] . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    mail($email_to, $email_subject, $email_message, $headers);

    return true;
}

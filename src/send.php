<?php

function validateLastName(array $form): ?string {
    if (isset($form['last_name']) === false) {
        return _('The form must contain a last_name key.');
    }

    if (empty($form['last_name'])) {
        return  _('Please enter a name.');
    }

    return null;
}

function validateFirstName(array $form): ?string {
    if (isset($form['first_name']) === false) {
        return _('The form must contain a first_name key.');
    }

    if (empty($form['first_name'])) {
        return _('Please enter a first name.');
    }

    return null;
}

function validateEmail(array $form): ?string {
    if (isset($form['email']) === false) {
        return _('The form must contain an email key.');
    }

    if (empty($form['email'])) {
        return _('Please enter an email address.');
    }

    if (filter_var($form['email'], FILTER_VALIDATE_EMAIL) === false) {
        return _('Please enter a valid email address.');
    }

    return null;
}

function validatePhone(array $form): ?string {
    if (isset($form['phone']) === false) {
        return _('The form must contain a phone key.');
    }

    if (empty($form['phone'])) {
        return _('Please enter a phone number.');
    }

    if (preg_match("/^(0|\+33)[1-9]([-. ]?[0-9]{2}){4}$/", $form['phone']) !== 1) {
        return _('You have not entered a valid phone number.');
    }

    return null;
}

function validateMessage(array $form): ?string {
    if (isset($form['message']) === false) {
        return _('The array must contain a message key.');
    }

    if (empty($form['message'])) {
        return _('Please entered a message.');
    }

    return null;
}

function validateForm(array $form): bool {
    if (validateFirstName($form) !== null) {
        return false;
    }

    if (validateLastName($form) !== null) {
        return false;
    }

    if (validateEmail($form) !== null) {
        return false;
    }

    if (validateForm($form) !== null) {
        return false;
    }

    if (validateMessage($form) !== null) {
        return false;
    }

    return true;
}

function checkToken(string $userToken, string $serverToken): bool {
    return ($userToken === $serverToken);
}

function sendEmail(array $form, array $config = []): bool {
    if (validateForm($form) === false) {
        return false;
    }

    $substr_message = substr($form['message'], 0, 500);

    $email_to = $config["email"];
    $email_subject = "Prise de contact";
    $email_message = "On vous a contacté de votre site " . $config['host'] . ":" . "\n\n";
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

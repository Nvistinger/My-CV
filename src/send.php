<?php

require "config.php";

/**
 * @throws Exception
 */
function checkFirstName(array $form): string {
    if (isset($form['first_name']) === false) {
        throw new Exception("The array must contain a first_name key.");
    }

    if (empty($form['first_name'])) {
        return  "You did not enter a first name.";
    }

    return "";
}

/**
 * @throws Exception
 */
function checkLastName(array $form): string {
    if (isset($form['last_name']) === false) {
        throw new Exception("The array must contain a last_name key.");
    }

    if (empty($form['last_name'])) {
        return  "You did not enter a name.";
    }

    return "";
}

/**
 * @throws Exception
 */
function checkEmail(array $form): string {
    if (isset($form['email']) === false) {
        throw new Exception("The table must contain an email key.");
    }

    if (empty($form['email'])) {
        return  "You did not enter an email address.";
    }

    if (filter_var($form['email'], FILTER_VALIDATE_EMAIL) === false) {
        return "You have not entered a valid email address.";
    }

    return "";
}

/**
 * @throws Exception
 */
function checkPhone(array $form): string {
    if (isset($form['phone']) === false) {
        throw new Exception("The array must contain a phone key.");
    }

    if (empty($form['phone'])) {
        return "You did not enter a phone number.";
    }

    if (preg_match("/^(0|\+33)[1-9]([-. ]?[0-9]{2}){4}$/", $form['phone']) !== 1) {
        return "You have not entered a valid phone number.";
    }

    return "";
}

/**
 * @throws Exception
 */
function checkMessage(array $form): string {
    if (isset($form['message']) === false) {
        throw new Exception("The array must contain a message key.");
    }

    if (empty($form['message'])) {
        return "You have not entered a message.";
    }

    return "";
}

function checkAll(array $form): bool {
    try {
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

    } catch (Exception $error) {
        die($error->getMessage());
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
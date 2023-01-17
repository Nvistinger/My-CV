<?php

session_start();

$savedToken = "";
if (isset($_POST['send'])) {
    $savedToken = $_SESSION['token'];
}
try {
    $_SESSION['token'] = bin2hex(random_bytes(16));
} catch (Exception $error) {
    die($error->getMessage());
}

require '../src/translate.php';
require "../src/send.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Personnal and responsive curriculum vitae of Sébastien Cartoux">
    <meta name="keywords" content="curriculum vitae web developper native responsive HTML CSS Bulma PHP JavaScript">
    <meta name="author" content="Sebastien Cartoux">
    <meta name="HandheldFriendly" content="true">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sebastien Cartoux</title>
    <link rel="stylesheet" href="../design/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron&family=Roboto+Mono&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="../pictures/favicon.ico" type="image/x-icon">
</head>
<body>
<header>
    <nav id="navbar" class="navbar is-info has-text-centered" aria-label="main navigation">
        <div class="navbar-brand">
            <input id="portrait-navbar" class="js-modal-trigger" type="image" data-target="picture-modal" src="../pictures/portrait-navbar.png" alt="<?php echo _('picture of me'); ?>" />

            <div id="picture-modal" class="modal">
                <div class="modal-background"></div>
                <div class="modal-content">
                    <p class="image">
                        <img src="../pictures/portrait-modal.png" alt="<?php echo _('picture of me'); ?>">
                    </p>
                </div>
                <button class="modal-close is-large" aria-label="close"></button>
            </div>

            <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>

        <div id="navbarBasicExample" class="navbar-menu">
            <div class="navbar-start">
                <a href="../index.php" class="navbar-item">
                    <?php echo _('About'); ?>
                </a>

                <a href="skills.php" class="navbar-item">
                    <?php echo _('Skills'); ?>
                </a>

                <a href="experience.php" class="navbar-item">
                    <?php echo _('Experience'); ?>
                </a>

                <a href="portfolio.php" class="navbar-item">
                    <?php echo _('Portfolio'); ?>
                </a>

                <a href="training.php" class="navbar-item">
                    <?php echo _('Training'); ?>
                </a>

                <a href="contact.php" class="navbar-item">
                    <?php echo _('Contact'); ?>
                </a>
            </div>

            <div class="navbar-end">
                <div class="navbar-item">
                    <div class="buttons is-centered">

                        <a id="flag-fr" href="../index.php?locale=fr_FR" class="button is-white is-rounded">
                            🇫🇷
                        </a>

                        <a id="flag-en" href="../index.php?locale=en_GB" class="button is-white is-rounded">
                            🇬🇧
                        </a>

                    </div>
                </div>

                <div class="navbar-item">
                    <div class="buttons is-centered">

                        <a href="../download/CV-dev-web-seb-cartoux.pdf" class="button is-danger is-rounded" target="_blank">
                            <strong>
                                <?php echo _('Download CV'); ?>
                            </strong>
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>

<section class="section has-text-centered">
    <div class="card">
        <div class="card-content">
            <div class="box has-background-info">
                <h1 class="title has-text-white">Contact</h1>
            </div>

            <form method="POST" action="contact.php">
                <div class="field">
                    <div class="control">
                        <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['token']; ?>">
                        <?php
                        if (isset($_POST['send'])) {
                            if (checkToken($_POST['csrf_token'], $savedToken)) {

                                $status = sendEmail($_POST);
                                if ($status) {

                                    $_POST = [];
                                    echo '<article class="message is-success"><h2 class="message-body">'
                                        . _('Your message has been sent, I will get back to you as soon as possible.')
                                        . '</h2></article>';
                                }
                            } else {

                                echo '<article class="message is-danger"><h2 class="message-body">'
                                    . _('The CSRF token has expired, your message has not been transmitted.')
                                    . '</h2></article>';
                            }
                        }
                        ?>
                    </div>
                </div>

                <div class="field">
                    <label for="last_name" class="label"></label>
                    <div class="control">
                        <input class="input" type="text" name="last_name" id="last_name" placeholder="<?php echo _('Last Name'); ?>"
                               value="<?php echo $_POST['last_name'] ?? ''; ?>">
                        <?php
                        if (isset($_POST['send'])) {

                            try {

                                echo '<p class="help is-danger">' . checkLastName($_POST) . '</p>';

                            } catch (Exception $error) {

                                die($error->getMessage());
                            }
                        }
                        ?>
                    </div>
                </div>

                <div class="field">
                    <label for="first_name" class="label"></label>
                    <div class="control">
                        <input class="input" type="text" name="first_name" id="first_name" placeholder="<?php echo _('First Name'); ?>"
                               value="<?php echo $_POST['first_name'] ?? ''; ?>">
                        <?php
                        if (isset($_POST['send'])) {
                            try {

                                echo '<p class="help is-danger">' . checkFirstName($_POST) . '</p>';

                            } catch (Exception $error) {

                                die($error->getMessage());
                            }
                        }
                        ?>
                    </div>
                </div>

                <div class="field">
                    <label for="email" class="label"></label>
                    <div class="control">
                        <input class="input box-margin-middle" type="text" name="email" id="email" placeholder="<?php echo _('Email'); ?>"
                               value="<?php echo $_POST['email'] ?? ''; ?>">
                        <?php
                        if (isset($_POST['send'])) {
                            try {

                                echo '<p class="help is-danger">' . checkEmail($_POST) . '</p>';

                            } catch (Exception $error) {

                                die($error->getMessage());
                            }
                        }
                        ?>
                    </div>
                </div>

                <div class="field">
                    <label for="phone" class="label"></label>
                    <div class="control">
                        <label for="phone"></label>
                        <input class="input box-margin-middle" type="text" name="phone" id="phone" placeholder="<?php echo _('Phone'); ?>"
                               value="<?php echo $_POST['phone'] ?? ''; ?>">
                        <?php
                        if (isset($_POST['send'])) {
                            try {

                                echo '<p class="help is-danger">' . checkPhone($_POST) . '</p>';

                            } catch (Exception $error) {

                                die($error->getMessage());
                            }
                        }
                        ?>
                    </div>
                </div>

                <div class="field">
                    <label for="message" class="label"></label>
                    <div class="control">
                        <textarea class="textarea" name="message" id="message"
                                  placeholder="<?php echo ('Message: (automatically reduced to 500 characters)'); ?>"
                                  maxlength="500"><?php echo $_POST['message'] ?? ''; ?></textarea>
                        <?php
                        if (isset($_POST['send'])) {
                            try {

                                echo '<p class="help is-danger">' . checkMessage($_POST) . '</p>';

                            } catch (Exception $error) {

                                die($error->getMessage());
                            }
                        }
                        ?>
                    </div>
                </div>

                <div class="field">
                    <div class="control">
                        <input id="submit-button" class="button is-danger is-rounded" name="send" type="submit" value="<?php echo _('Send') ?>">
                    </div>
                </div>
            </form>
        </div>
</section>

<script src="../script/navbar.js"></script>
<script src="../script/modal.js"></script>
</body>
</html>
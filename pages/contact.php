<?php

session_start();

$savedToken = '';
if (isset($_POST['send'])) {
    $savedToken = $_SESSION['token'];
}
try {
    $_SESSION['token'] = bin2hex(random_bytes(16));
} catch (Exception $error) {
    die($error->getMessage());
}

require __DIR__ . '/../src/config.php';
require __DIR__ . '/../src/send.php';
require __DIR__ . '/header.php';
?>

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
                                $status = sendEmail($_POST, $config);
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
                            echo '<p class="help is-danger">' . validateLastName($_POST) . '</p>';
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
                            echo '<p class="help is-danger">' . validateFirstName($_POST) . '</p>';
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
                            echo '<p class="help is-danger">' . validateEmail($_POST) . '</p>';
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
                            echo '<p class="help is-danger">' . validatePhone($_POST) . '</p>';
                        }
                        ?>
                    </div>
                </div>

                <div class="field">
                    <label for="message" class="label"></label>
                    <div class="control">
                        <textarea class="textarea" name="message" id="message"
                                  placeholder="<?php echo _('Message: (automatically reduced to 500 characters)'); ?>"
                                  maxlength="500"><?php echo $_POST['message'] ?? ''; ?></textarea>
                        <?php
                        if (isset($_POST['send'])) {
                            echo '<p class="help is-danger">' . validateMessage($_POST) . '</p>';
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

<?php require __DIR__ . '/footer.php'; ?>
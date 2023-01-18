<?php
if (isset($_GET['locale'])) {
    setcookie('locale', $_GET['locale'], time() + 60 * 60 * 24 * 30, '/');
    $_COOKIE['locale'] = $_GET['locale'];
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    die();
}

require __DIR__ . '/pages/header.php';
?>

<section class="section has-text-centered">
    <div class="card">
        <div class="card-content">
            <div class="box has-background-info">
                <h1 class="title has-text-white">
                    <?php echo _('About'); ?>
                </h1>
            </div>

            <h2 class="subtitle">
                <?php echo _('I am Sebastien Cartoux student at Epitech Marseille in web and mobile development.'); ?>
            </h2>

            <article class="message is-success">
                <h2 class="message-body">
                    <?php echo _('Alternation until August 31, 2024, as part of the MSc Pro Epitech Marseille training.'); ?>
                </h2>
            </article>
        </div>
    </div>
</section>

<section class="section has-text-centered">
    <div class="columns is-mobile is-centered">
        <div class="columns is-multiline">

            <div class="column">
                <a href="https://github.com/Lmpwybb" target="_blank">
                    <div class="card">
                        <div class="card-content">
                            <div class="box has-background-info">
                                <h2 class="subtitle has-text-white">
                                    <?php echo _('My Github'); ?>
                                </h2>
                            </div>

                            <figure class="image">
                                <img src="pictures/about/qrcode_github.png" alt="<?php echo _('link to github profile'); ?>">
                            </figure>
                        </div>
                    </div>
                </a>
            </div>

            <div class="column">
                <a href="https://www.linkedin.com/in/seb-cartoux/" target="_blank">
                    <div class="card">
                        <div class="card-content">
                            <div class="box has-background-info">
                                <h2 class="subtitle has-text-white">
                                    <?php echo _('My Linkedin'); ?>
                                </h2>
                            </div>

                            <figure class="image">
                                <img src="pictures/about/qrcode_linkedin.png" alt="<?php echo _('link to linkedin profile'); ?>">
                            </figure>
                        </div>
                    </div>
                </a>
            </div>

            <div class="column">
                <a href="https://my.indeed.com/p/nivi-opcv1kc" target="_blank">
                    <div class="card">
                        <div class="card-content">
                            <div class="box has-background-info">
                                <h2 class="subtitle has-text-white">
                                    <?php echo _('My Indeed'); ?>
                                </h2>
                            </div>

                            <figure class="image">
                                <img src="pictures/about/qrcode_indeed.png" alt="<?php echo _('link to indeed profile'); ?>">
                            </figure>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<?php require __DIR__ . '/pages/footer.php'; ?>

<?php
if (isset($_GET['locale'])) {
    setcookie('locale', $_GET['locale'], time() + 60 * 60 * 24 * 30, '/');
    $_COOKIE['locale'] = $_GET['locale'];
    if (isset($_SERVER['HTTP_REFERER'])) {
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    } else {
        header('Location: index.php');
    }
    die();
}

@header('Content-Type: text/html; charset=utf-8');
mb_internal_encoding('UTF-8');

require __DIR__ . '/src/translate.php';
?>
<!DOCTYPE html>
<html lang="en" class="has-navbar-fixed-top">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Personal and responsive curriculum vitae of Sébastien Cartoux">
    <meta name="keywords" content="curriculum vitae web developer native responsive HTML CSS Bulma PHP JavaScript">
    <meta name="author" content="Sebastien Cartoux">
    <meta name="HandheldFriendly" content="true">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sebastien Cartoux</title>
    <link rel="stylesheet" href="/design/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.0/css/bulma.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="/pictures/favicon.ico" type="image/x-icon">
</head>
<body>
<header>
    <nav id="navbar" class="navbar is-fixed-top has-text-centered" aria-label="main navigation">
        <div class="navbar-brand">
            <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>

        <div id="navbarBasicExample" class="navbar-menu">
            <div class="navbar-start">
                <a href="#about" class="navbar-item">
                    <?php echo _('About'); ?>
                </a>

                <a href="#experience" class="navbar-item">
                    <?php echo _('Experience'); ?>
                </a>

                <a href="#training" class="navbar-item">
                    <?php echo _('Training'); ?>
                </a>

                <a href="#skills" class="navbar-item">
                    <?php echo _('Skills'); ?>
                </a>

                <a href="#portfolio" class="navbar-item">
                    <?php echo _('Portfolio'); ?>
                </a>

                <a href="#contact" class="navbar-item">
                    <?php echo _('Contact'); ?>
                </a>
            </div>

            <div class="navbar-end">
                <div class="navbar-item">
                    <div class="buttons is-centered">

                        <a id="flag-fr" href="/index.php?locale=fr_FR" class="button is-light">
                            🇫🇷
                        </a>

                        <a id="flag-en" href="/index.php?locale=en_GB" class="button is-light">
                            🇬🇧
                        </a>

                    </div>
                </div>

                <div class="navbar-item">
                    <div class="buttons is-centered">

                        <a href="/download/CV-dev-web-seb-cartoux.pdf" class="button is-primary" target="_blank">
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

<section id="about" class="section">
    <div class="card">

        <header class="card-header">
            <p class="card-header-title"><?php echo _('About'); ?></p>
        </header>

        <div class="card-content">
            <div class="media">
                <div class="media-left">
                    <figure class="image">
                        <img id="portrait" src="/pictures/portrait.png" alt="<?php echo _('picture of me'); ?>" />
                    </figure>
                </div>
                <div class="media-content">
                    <p class="title is-4">Sebastien Cartoux</p>
                    <p class="subtitle is-6 has-text-danger">
                        <?php echo _('Alternation until July 31, 2024, as part of the MSc Pro Epitech Marseille training.'); ?>
                    </p>
                </div>
            </div>

            <div class="content">
                <?php echo _('I am Sebastien Cartoux student at Epitech Marseille in web and mobile development.'); ?>
            </div>

            <div class="content">
                <div class="columns">

                    <div class="column is-6">
                        <p class="title is-6">
                            <?php echo _('Soft skills:'); ?>
                        </p>

                        <ul>
                            <li><?php echo _('Adaptability'); ?></li>
                            <li><?php echo _('Force of proposal'); ?></li>
                            <li><?php echo _('Perseverance'); ?></li>
                            <li><?php echo _('Reactivity'); ?></li>
                            <li><?php echo _('Rigor'); ?></li>
                            <li><?php echo _('Sense of organisation'); ?></li>
                            <li><?php echo _('Team work'); ?></li>
                        </ul>

                    </div>

                    <div class="column is-6">
                        <p class="title is-6">
                            <?php echo _('Mad skills:'); ?>
                        </p>

                        <ul>
                            <li><?php echo _('Computer hardware'); ?></li>
                            <li><?php echo _('Internet Of Things'); ?></li>
                            <li><?php echo _('Video games'); ?></li>
                            <li><?php echo _('Scientific documentaries'); ?></li>
                            <li><?php echo _('Sport'); ?></li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="experience" class="section has-text-centered">
    <div class="card">

        <header class="card-header">
            <p class="card-header-title"><?php echo _('Experience'); ?></p>
        </header>

        <div class="card-content">
            <div class="columns">

                <div class="column is-6">
                    <div class="card">

                        <div class="card-content">
                            <div class="media">
                                <div class="media-left">
                                    <figure class="image">
                                        <img src="/pictures/experience/je_donne_mon_avis.png" alt="<?php echo _('speech icon') ?>">
                                    </figure>
                                </div>
                                <div class="media-content">
                                    <p class="title is-4"><?php echo _('FullStack Web Developer (Alternation)'); ?></p>
                                    <p class="subtitle is-6">Digifast Interactive</p>
                                    <p class="subtitle is-6">01/2022 - 08/2024</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="column is-6">
                    <div class="card">

                        <div class="card-content">
                            <div class="media">
                                <div class="media-left">
                                    <figure class="image">
                                        <img src="/pictures/experience/mooglepost.png" alt="<?php echo _('mail icon') ?>">
                                    </figure>
                                </div>
                                <div class="media-content">
                                    <p class="title is-4"><?php echo _('FullStack Web Developer (Traineeship)'); ?></p>
                                    <p class="subtitle is-6">Mooglepost</p>
                                    <p class="subtitle is-6">02/2020 - 03/2020</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

            <div class="columns">

                <div class="column is-6">
                    <div class="card">

                        <div class="card-content">
                            <div class="media">
                                <div class="media-left">
                                    <figure class="image">
                                        <img src="/pictures/experience/sartorius_stedim.png" alt="<?php echo _('pils icon') ?>">
                                    </figure>
                                </div>
                                <div class="media-content">
                                    <p class="title is-4"><?php echo _('Cleanroom Tutor Operator'); ?></p>
                                    <p class="subtitle is-6">Sartorius Stedim Biotech FMT</p>
                                    <p class="subtitle is-6">11/2014 - 03/2019</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="column is-6">
                    <div class="card">

                        <div class="card-content">
                            <div class="media">
                                <div class="media-left">
                                    <figure class="image">
                                        <img src="/pictures/experience/alazard_&_roux.png" alt="<?php echo _('tools icon') ?>">
                                    </figure>
                                </div>
                                <div class="media-content">
                                    <p class="title is-4"><?php echo _('Industrial Maintenance Agent'); ?></p>
                                    <p class="subtitle is-6">Alazard & Roux</p>
                                    <p class="subtitle is-6">07/2007 - 06/2012</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </div>
</section>

<section id="training" class="section has-text-centered">
    <div class="card">

        <header class="card-header">
            <p class="card-header-title"><?php echo _('Training'); ?></p>
        </header>

        <div class="card-content">
            <div class="columns">

                <div class="column is-6">
                    <div class="card">

                        <div class="card-content">
                            <div class="media">
                                <div class="media-left">
                                    <figure class="image">
                                        <img src="/pictures/training/epitech.png" alt="<?php echo ('learning icon') ?>">
                                    </figure>
                                </div>
                                <div class="media-content">
                                    <p class="title is-4"><?php echo _('Software architect, application developer | BAC +5'); ?></p>
                                    <p class="subtitle is-6">Epitech</p>
                                    <p class="subtitle is-6">10/2022 - 08/2024</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="column is-6">
                    <div class="card">

                        <div class="card-content">
                            <div class="media">
                                <div class="media-left">
                                    <figure class="image">
                                        <img src="/pictures/training/graduate.png" alt="<?php echo _('graduate icon') ?>">
                                    </figure>
                                </div>
                                <div class="media-content">
                                    <p class="title is-4"><?php echo _('Web and mobile project manager | BAC +3'); ?></p>
                                    <p class="subtitle is-6">Epitech</p>
                                    <p class="subtitle is-6">09/2021 - 08/2022</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

            <div class="columns">

                <div class="column is-6">
                    <a href="https://freecodecamp.org/certification/lmpwybb/javascript-algorithms-and-data-structures" target="_blank">
                        <div class="card">

                            <div class="card-content">
                                <div class="media">
                                    <div class="media-left">
                                        <figure class="image">
                                            <img src="/pictures/training/certificate.png" alt="<?php echo _('certificate icon') ?>">
                                        </figure>
                                    </div>
                                    <div class="media-content">
                                        <p class="title is-4">Javascript Algorithms And Data Structures</p>
                                        <p class="subtitle is-6">FreeCodeCamp</p>
                                        <p class="subtitle is-6">10/2020</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </a>
                </div>

                <div class="column is-6">
                    <a href="https://freecodecamp.org/certification/lmpwybb/responsive-web-design" target="_blank">
                        <div class="card">

                            <div class="card-content">
                                <div class="media">
                                    <div class="media-left">
                                        <figure class="image">
                                            <img src="/pictures/training/certificate.png" alt="<?php echo _('certificate icon') ?>">
                                        </figure>
                                    </div>
                                    <div class="media-content">
                                        <p class="title is-4">Responsive Web Design</p>
                                        <p class="subtitle is-6">FreeCodeCamp</p>
                                        <p class="subtitle is-6">06/2020</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </a>
                </div>
            </div>

            <div class="columns">

                <div class="column is-6">
                    <div class="card">

                        <div class="card-content">
                            <div class="media">
                                <div class="media-left">
                                    <figure class="image">
                                        <img src="/pictures/training/graduate.png" alt="<?php echo _('graduation icon') ?>">
                                    </figure>
                                </div>
                                <div class="media-content">
                                    <p class="title is-4"><?php echo _('Web And Mobile Developer | BAC +2'); ?></p>
                                    <p class="subtitle is-6">Utoplab / Simplon / <?php echo _('Great School Of Digital') ?></p>
                                    <p class="subtitle is-6">07/2019 - 05/2020</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="column is-6">
                    <div class="card">

                        <div class="card-content">
                            <div class="media">
                                <div class="media-left">
                                    <figure class="image">
                                        <img src="/pictures/training/graduate.png" alt="<?php echo _('graduate icon') ?>">
                                    </figure>
                                </div>
                                <div class="media-content">
                                    <p class="title is-4"><?php echo _('Electrotechnics | Profesional BAC'); ?></p>
                                    <p class="subtitle is-6"><?php echo _('Charles Privat High School'); ?></p>
                                    <p class="subtitle is-6">2004 - 2006</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<section id="skills" class="section has-text-centered">
    <div class="card">

        <header class="card-header">
            <p class="card-header-title"><?php echo _('Skills'); ?></p>
        </header>

        <div class="card-content">
            <div class="columns">

                <div class="column is-4">
                    <div class="card">

                        <div class="card-content">
                            <div class="media">
                                <div class="media-left">
                                    <figure class="image is-32x32">
                                        <img src="/pictures/skills/html.png" alt="html logo">
                                    </figure>
                                </div>
                                <div class="media-content">
                                    <p class="title is-4">HTML</p>
                                </div>
                            </div>
                        </div>

                        <div class="card-content">
                            <div class="media">
                                <div class="media-left">
                                    <figure class="image is-32x32">
                                        <img src="/pictures/skills/css.png" alt="css logo">
                                    </figure>
                                </div>
                                <div class="media-content">
                                    <p class="title is-4">CSS</p>
                                </div>
                            </div>
                        </div>

                        <div class="card-content">
                            <div class="media">
                                <div class="media-left">
                                    <figure class="image is-32x32">
                                        <img src="/pictures/skills/javascript.png" alt="javascript logo">
                                    </figure>
                                </div>
                                <div class="media-content">
                                    <p class="title is-4">Javascript</p>
                                </div>
                            </div>
                        </div>

                        <div class="card-content">
                            <div class="media">
                                <div class="media-left">
                                    <figure class="image is-32x32">
                                        <img src="/pictures/skills/bootstrap.png" alt="bootstrap logo">
                                    </figure>
                                </div>
                                <div class="media-content">
                                    <p class="title is-4">Bootstrap</p>
                                </div>
                            </div>
                        </div>

                        <div class="card-content">
                            <div class="media">
                                <div class="media-left">
                                    <figure class="image is-32x32">
                                        <img src="/pictures/skills/bulma.png" alt="bulma logo">
                                    </figure>
                                </div>
                                <div class="media-content">
                                    <p class="title is-4">Bulma</p>
                                </div>
                            </div>
                        </div>

                        <div class="card-content">
                            <div class="media">
                                <div class="media-left">
                                    <figure class="image is-32x32">
                                        <img src="/pictures/skills/react.png" alt="react logo">
                                    </figure>
                                </div>
                                <div class="media-content">
                                    <p class="title is-4">React</p>
                                </div>
                            </div>
                        </div>

                        <div class="card-content">
                            <div class="media">
                                <div class="media-left">
                                    <figure class="image is-32x32">
                                        <img src="/pictures/skills/jquery.png" alt="jquery logo">
                                    </figure>
                                </div>
                                <div class="media-content">
                                    <p class="title is-4">jQuery</p>
                                </div>
                            </div>
                        </div>

                        <div class="card-content">
                            <div class="media">
                                <div class="media-left">
                                    <figure class="image is-32x32">
                                        <img src="/pictures/skills/vuejs.png" alt="vuejs logo">
                                    </figure>
                                </div>
                                <div class="media-content">
                                    <p class="title is-4">Vue.js</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="column is-4">
                    <div class="card">

                        <div class="card-content">
                            <div class="media">
                                <div class="media-left">
                                    <figure class="image is-32x32">
                                        <img src="/pictures/skills/php.png" alt="php logo">
                                    </figure>
                                </div>
                                <div class="media-content">
                                    <p class="title is-4">PHP</p>
                                </div>
                            </div>
                        </div>

                        <div class="card-content">
                            <div class="media">
                                <div class="media-left">
                                    <figure class="image is-32x32">
                                        <img src="/pictures/skills/mysql.png" alt="mysql logo">
                                    </figure>
                                </div>
                                <div class="media-content">
                                    <p class="title is-4">MySQL</p>
                                </div>
                            </div>
                        </div>

                        <div class="card-content">
                            <div class="media">
                                <div class="media-left">
                                    <figure class="image is-32x32">
                                        <img src="/pictures/skills/symfony.png" alt="symfony logo">
                                    </figure>
                                </div>
                                <div class="media-content">
                                    <p class="title is-4">Symfony</p>
                                </div>
                            </div>
                        </div>

                        <div class="card-content">
                            <div class="media">
                                <div class="media-left">
                                    <figure class="image is-32x32">
                                        <img src="/pictures/skills/nodejs.png" alt="nodejs logo">
                                    </figure>
                                </div>
                                <div class="media-content">
                                    <p class="title is-4">NodeJS</p>
                                </div>
                            </div>
                        </div>

                        <div class="card-content">
                            <div class="media">
                                <div class="media-left">
                                    <figure class="image is-32x32">
                                        <img src="/pictures/skills/java.png" alt="java logo">
                                    </figure>
                                </div>
                                <div class="media-content">
                                    <p class="title is-4">Java</p>
                                </div>
                            </div>
                        </div>

                        <div class="card-content">
                            <div class="media">
                                <div class="media-left">
                                    <figure class="image is-32x32">
                                        <img src="/pictures/skills/c++.png" alt="c++ logo">
                                    </figure>
                                </div>
                                <div class="media-content">
                                    <p class="title is-4">C++</p>
                                </div>
                            </div>
                        </div>

                        <div class="card-content">
                            <div class="media">
                                <div class="media-left">
                                    <figure class="image is-32x32">
                                        <img src="/pictures/skills/csharp.png" alt="c# logo">
                                    </figure>
                                </div>
                                <div class="media-content">
                                    <p class="title is-4">C#</p>
                                </div>
                            </div>
                        </div>

                        <div class="card-content">
                            <div class="media">
                                <div class="media-left">
                                    <figure class="image is-32x32">
                                        <img src="/pictures/skills/docker.png" alt="docker logo">
                                    </figure>
                                </div>
                                <div class="media-content">
                                    <p class="title is-4">Docker</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="column is-4">
                    <div class="card">

                        <div class="card-content">
                            <div class="media">
                                <div class="media-left">
                                    <figure class="image is-32x32">
                                        <img src="/pictures/skills/linux.png" alt="linux logo">
                                    </figure>
                                </div>
                                <div class="media-content">
                                    <p class="title is-4">Linux</p>
                                </div>
                            </div>
                        </div>

                        <div class="card-content">
                            <div class="media">
                                <div class="media-left">
                                    <figure class="image is-32x32">
                                        <img src="/pictures/skills/git.png" alt="git logo">
                                    </figure>
                                </div>
                                <div class="media-content">
                                    <p class="title is-4">Git</p>
                                </div>
                            </div>
                        </div>

                        <div class="card-content">
                            <div class="media">
                                <div class="media-left">
                                    <figure class="image is-32x32">
                                        <img src="/pictures/skills/wordpress.png" alt="wordpress logo">
                                    </figure>
                                </div>
                                <div class="media-content">
                                    <p class="title is-4">WordPress</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<section id="portfolio" class="section has-text-centered">
    <div class="card">

        <header class="card-header">
            <p class="card-header-title"><?php echo _('Portfolio'); ?></p>
        </header>

        <div class="card-content">

            <div class="columns">

                <div class="column is-6">
                    <a href="https://manys.alwaysdata.net/" target="_blank">
                        <div class="card">

                            <div class="card-content">
                                <p class="title is-4">Manys</p>
                                <p class="subtitle is-6"><?php echo _('Real estate agency'); ?></p>

                                <img src="/pictures/portfolio/manys.png" alt="<?php echo _('link to manys') ?>">
                            </div>

                        </div>
                    </a>
                </div>

                <div class="column is-6">
                    <a href="https://choupis.alwaysdata.net/" target="_blank">
                        <div class="card">

                            <div class="card-content">
                                <p class="title is-4">Choupis</p>
                                <p class="subtitle is-6"><?php echo _('Url Shortener'); ?></p>

                                <img src="/pictures/portfolio/choupisV.png" alt="<?php echo _('link to choupis') ?>">
                            </div>

                        </div>
                    </a>
                </div>

            </div>
        </div>
    </div>
</section>

<section id="contact" class="section has-text-centered">
    <div class="card">

        <header class="card-header">
            <p class="card-header-title"><?php echo _('Contact'); ?></p>
        </header>

        <div class="card-content">

            <div class="columns">

                <div class="column is-6">
                    <a href="mailto:cartoux.sebastien@orange.fr">
                        <div class="card">

                            <div class="card-content">
                                <p class="title is-4"><?php echo _('Email me'); ?></p>

                                <img src="/pictures/contact/email.png" alt="<?php echo _('email icon'); ?>" />
                            </div>

                        </div>
                    </a>
                </div>

                <div class="column is-6">
                    <a href="https://github.com/Lmpwybb" target="_blank">
                        <div class="card">

                            <div class="card-content">
                                <p class="title is-4"><?php echo _('My Github'); ?></p>

                                <img src="/pictures/contact/github.png" alt="<?php echo _('github icon'); ?>" />
                            </div>

                        </div>
                    </a>
                </div>

            </div>

            <div class="columns">

                <div class="column is-6">
                    <a href="https://www.linkedin.com/in/seb-cartoux/" target="_blank">
                        <div class="card">

                            <div class="card-content">
                                <p class="title is-4"><?php echo _('My Linkedin'); ?></p>

                                <img src="/pictures/contact/linkedin.png" alt="<?php echo _('linkedin icon'); ?>" />
                            </div>

                        </div>
                    </a>
                </div>

                <div class="column is-6">
                    <a href="https://my.indeed.com/p/nivi-opcv1kc" target="_blank">
                        <div class="card">

                            <div class="card-content">
                                <p class="title is-4"><?php echo _('My Indeed'); ?></p>

                                <img src="/pictures/contact/indeed.png" alt="<?php echo _('indeed icon'); ?>" />
                            </div>

                        </div>
                    </a>
                </div>

            </div>

        </div>
    </div>
</section>

<script src="/script/navbar.js"></script>

</body>
</html>

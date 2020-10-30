<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="description" content="Free Web tutorials">
    <meta name="keywords" content="CV Personal Reponsive">
    <meta name="author" content="Sébastien Cartoux">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sébastien Cartoux</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker|Rajdhani|Ubuntu&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="pictures/favicon.ico" type="image/x-icon">
</head>
<body>
    <header class="banner flex-horz-space">
        <div class="flex-vert-center">
            <img id="laptop" src="pictures/laptop.png" alt="laptop icon">
        </div>
        <div class="text-center">
            <h1 id="me" class="permanent">SÉBASTIEN CARTOUX</h1>
            <h2 id="function">DÉVELOPPEUR WEB</h2>
        </div>
        <div class="flex-vert-center">
            <form action="download/CV-dev-web-seb-cartoux.pdf">
                <input class="button permanent" type="submit" value="Télécharger CV">
            </form>
        </div>
    </header>
    <nav id="menu-nav" class="flex-center">
        <div><a id="active" class="flex-horz-space" href="#about">A propos</a></div>
        <div><a href="#skills" class="flex-horz-space">Compétences</a></div>
        <div><a href="#portfolio" class="flex-horz-space">Portfolio</a></div>
        <div><a href="#education" class="flex-horz-space">Formations</a></div>
        <div><a href="#experience" class="flex-horz-space">Expérience</a></div>
        <div><a href="#contact" class="flex-horz-space">Contact</a></div>
    </nav>
    <section id="about" class="section font-content text-center">
        <div class="flex-center">
            <h2 class="titles permanent">A PROPOS</h2>
        </div>
        <div class="box-size box-margin flex-center">
            <h3 class="sentence">"Disponible pour travailler dans la région de Marseille et ses environs.<br> Certification
                de Développeur Web et Web Mobile (niveau 5) obtenue et d'autres supplémentaires sur freeCodeCamp."
            </h3>
        </div>
        <div class="box-size-alt box-margin flex-horz-space">
            <div class="flex-vert-center">
                <img id="portrait" src="pictures/portrait.png" alt="portrait icon">
            </div>
            <div id="flex-center">
                <h3 class="sentence">Détenteur du Permis B</h3>
                <h4>Capacité d'adaptation</h4>
                <h4>Force de proposition</h4>
                <h4>Persévérance</h4>
                <h4>Réactivité</h4>
                <h4>Rigueur</h4>
                <h4>Sens de l'organisation</h4>
                <h4>Travail en équipe</h4>
            </div>
        </div>
    </section>
    <section id="skills" class="section font-content text-center">
        <div class="flex-center">
            <h2 class="titles permanent">COMPÉTENCES</h2>
        </div>
        <div class="flex-horz-space box-size box-margin-top text-center">
            <div class="logo-responsive">
                <h3 class="langage-responsive">UBUNTU</h3>
                <div id="ubuntu" class="box-margin-auto logo logo-circle flex-horz-space flex-vert-center">U</div>
            </div>
            <div class="logo-responsive">
                <h3 class="langage-responsive">GIT</h3>
                <div id="git" class="box-margin-auto logo logo-circle flex-horz-space flex-vert-center">Git</div>
            </div>
        </div>
        <div class="flex-horz-space box-size box-margin-middle text-center">
            <div class="logo-responsive">
                <h3 class="langage-responsive">HTML</h3>
                <div id="html" class="box-margin-auto logo logo-pentagon flex-horz-space flex-vert-center">5</div>
                <h3 class="langage-responsive">CSS</h3>
                <div id="css" class="box-margin-auto logo logo-pentagon flex-horz-space flex-vert-center">3</div>
            </div>
            <div class="logo-responsive">
                <h3 class="langage-responsive">JS</h3>
                <div id="javascript" class="box-margin-auto logo logo-pentagon flex-horz-space flex-vert-center">8</div>
                <h3 class="langage-responsive">MYSQL</h3>
                <div id="mysql" class="box-margin-auto logo logo-pentagon flex-horz-space flex-vert-center">8</div>
            </div>
            <div class="logo-responsive">
                <h3 class="langage-responsive">PHP</h3>
                <div id="php" class="box-margin-auto logo logo-pentagon flex-horz-space flex-vert-center">7</div>
                <h3 class="langage-responsive">SYMFONY</h3>
                <div id="symfony" class="box-margin-auto logo logo-circle flex-horz-space flex-vert-center">5</div>
            </div>
        </div>
        <div class="flex-horz-space box-size box-margin-bottom text-center">
            <div class="logo-responsive">
                <h3 class="langage-responsive">BSTRAP</h3>
                <div id="bootstrap" class="box-margin-auto logo logo-bootstrap flex-horz-space flex-vert-center">B</div>
            </div>
            <div class="logo-responsive">
                <h3 class="langage-responsive">DOCKER</h3>
                <div id="docker" class="box-margin-auto logo logo-docker flex-horz-space flex-vert-center">d</div>
            </div>
        </div>
    </section>
    <section id="portfolio" class="section text-center">
        <div class="flex-center">
            <h2 class="titles permanent">PORTFOLIO</h2>
        </div>
        <div class="flex-horz-space box-margin-top">
            <div class="box-size-alt box-margin-auto box-transform">
                <a href="https://github.com/Lmpwybb/My-CV" target="_blank">
                    <div class="font-content">
                        <h3>Comment a été réalisé ce site</h3>
                        <img src="pictures/github.png" alt="github my cv link">
                    </div>
                </a>
            </div>
            <div class="box-size-alt box-margin-auto box-transform">
                <a href="https://manys.alwaysdata.net" target="_blank">
                    <div class="font-content">
                        <h3>Manys agence immobilière</h3>
                        <img src="pictures/manys.png" alt="manys link">
                    </div>
                </a>
            </div>
        </div>
        <div class="flex-horz-space box-margin-middle">
            <div class="box-size-alt box-margin-auto box-transform">
                <a href="https://github.com/Lmpwybb/Utoplab" target="_blank">
                    <div class="font-content">
                        <h3>Quelques projets</h3>
                        <img src="pictures/github.png" alt="github utoplab link">
                    </div>
                </a>
            </div>
            <div class="box-size-alt box-margin-auto box-transform">
                <a href="https://lmpwybb.alwaysdata.net/wpcms/" target="_blank">
                    <div class="font-content">
                        <h3>CMS Wordpress</h3>
                        <img src="pictures/wordpress.png" alt="wordpress">
                    </div>
                </a>
            </div>
        </div>
        <div class="flex-horz-space box-margin-bottom">
            <div class="box-size-alt box-margin-auto box-transform">
                <a href="https://www.linkedin.com/in/seb-cartoux/" target="_blank">
                    <div class="font-content">
                        <h3>Mon LinkedIn</h3>
                        <img src="pictures/linkedin.png" alt="linkedin">
                    </div>
                </a>
            </div>
            <div class="box-size-alt box-margin-auto box-transform">
                <a href="https://www.youtube.com/channel/UCZsJpXPuepI4J-vIknwv_bQ" target="_blank">
                    <div class="font-content">
                        <h3>Youtubeur à mes heures</h3>
                        <img src="pictures/youtube.png" alt="youtube">
                    </div>
                </a>
            </div>
        </div>
    </section>
    <section id="education" class="section font-content text-center">
        <div class="flex-center">
            <h2 class="titles permanent">FORMATIONS</h2>
        </div>
        <div class="box-size box-margin-top">
            <h3>JAVASCRIPT ALGORITHMS AND DATA STRUCTURES</h3>
            <h4>FREECODECAMP</h4>
            <h5>09/2020</h5>
            <a href="https://freecodecamp.org/certification/lmpwybb/javascript-algorithms-and-data-structures" target="_blank">
                <h6 id="bigger" class="button-certification box-margin-auto button permanent sentence">Voir la certification</h6>
            </a>
        </div>
        <div class="box-size box-margin-top">
            <h3>RESPONSIVE WEB DESIGN</h3>
            <h4>FREECODECAMP</h4>
            <h5>06/2020</h5>
            <a href="https://freecodecamp.org/certification/lmpwybb/responsive-web-design" target="_blank">
                <h6 id="bigger" class="button-certification box-margin-auto button permanent sentence">Voir la certification</h6>
            </a>
        </div>
        <div class="box-size box-margin">
            <h3>BAC +2 DÉVELOPPEUR WEB / WEB MOBILE</h3>
            <h4>UTOPLAB / SIMPLON / GRANDE ÉCOLE DU NUMERIQUE</h4>
            <h5>07/2019 - 05/2020</h5>
            <h6 id="bigger" class="sentence">Gestion de projets (méthodologies Agile et Scrum, Kanban).<br> Acquisition des
                bases HTML, CSS, JavaScript, PHP, MySQL, WordPress, POO, Symfony 5, AJAX, JSON, node.js, Docker, JQuery
                et Bootstrap.
            </h6>
        </div>
        <div class="box-size-alt box-margin">
            <h3>BAC PROFESSIONNEL EN ÉLECTROTECHNIQUE</h3>
            <h4>LYCÉE CHARLES PRIVAT</h4>
            <h5>2004 - 2006</h5>
        </div>
        <div class="box-size-alt box-margin-bottom">
            <h3>CAP + BEP EN ÉLECTROTECHNIQUE</h3>
            <h4>LYCÉE CHARLES PRIVAT</h4>
            <h5>2002 - 2004</h5>
        </div>
    </section>
    <section id="experience" class="section font-content text-center">
        <div class="flex-center">
            <h2 class="titles permanent">EXPÉRIENCE</h2>
        </div>
        <div class="box-size-alt box-margin-top">
            <h3>STAGIAIRE DÉVELOPPEUR JUNIOR</h3>
            <h4>MOOGLEPOST</h4>
            <h5>02/2020 - 03/2020</h5>
            <h6 id="bigger" class="sentence">Intervention sur la plate-forme d’email transactionnel et marketing
                MooglePost,<br> incluant développement backend PHP/Symfony 4, front-end HTML5/CSS3/Twig/Bootstrap.<br><br>
                La mission inclue aussi une initiation DevOps et CI/CD (GitLab + Docker),<br> et l’écriture de tests
                unitaires/intégration.<br><br>
                La plate-forme ayant deux bugs connus et référencés, le contexte de résolution de bug<br> et mise à jour
                d’une application en production (sans downtime) a était abordé.
            </h6>
        </div>
        <div class="box-size-alt box-margin">
            <h3>OPÉRATEUR TUTEUR EN SALLE BLANCHE</h3>
            <h4>SARTORIUS STEDIM BIOTECH FMT</h4>
            <h5>11/2014 - 03/2019</h5>
        </div>
        <div class="box-size-alt box-margin-bottom">
            <h3>AGENT DE MAINTENANCE INDUSTRIELLE</h3>
            <h4>ALAZARD ET ROUX</h4>
            <h5>07/2007 - 06/2012</h5>
        </div>
    </section>
    <section id="contact" class="section font-content text-center">
        <div class="flex-center">
            <h2 class="titles permanent">CONTACT</h2>
        </div>
        <form method="POST" class="box-size box-margin" action="contact.php">
            <div class="success">
                <?php
                    if (isset ($_GET['success']) && $_GET['success'] == 'send') {
                        echo "Votre message a bien été transmis, merci de m'avoir contacté.";
                    }
                ?>
            </div>
            <label for="name">*Nom:</label><br>
            <input class="input contact-space" type="text" name="name" id="name"><br>

            <label class="contact-space" for="first-name">*Prénom:</label><br>
            <input class="input contact-space" type="text" name="first-name" id="first-name"><br>

            <label class="contact-space" for="email">*Courriel:</label><br>
            <input class="input contact-space" type="text" name="email" id="email"><br>
            <div class="error">
                <?php
                    if (isset($_GET['error']) && $_GET['error'] == 'notanemail') {
                        echo "Vous n'avez pas rentré une adresse email valide.";
                    }
                ?>
            </div>
            <label class="contact-space" for="phone">Téléphone:</label><br>
            <input class="input contact-space" type="text" name="phone" id="phone"><br>
            <div class="error">
                <?php
                    if (isset($_GET['error']) && $_GET['error'] == 'notanphone') {
                        echo "Vous n'avez pas rentré un numéro de téléphone valide.";
                    }
                ?>
            </div>
            <label class="contact-space" for="message">*Message:</label><br>
            <textarea name="message" id="message" rows="10" cols="33" maxlength="500"></textarea><br>
            <div class="error">
                <?php
                    if (isset($_GET['error']) && $_GET['error'] == 'message') {
                        echo "Votre message est invalide car trop court.";
                    }
                ?>
            </div>
            <p class="contact-space">* Ces informations sont requises.</p>
            <div class="error">
                <?php
                    if (isset($_GET['error']) && $_GET['error'] == 'notfilled') {
                        echo "Un des champs n'est pas correctement remplie.";
                    }
                ?>
            </div>
            <input id="submit-button" class="button permanent contact-space" name="send" type="submit" value="Envoyer">
        </form>
    </section>
    <section id="footer" class="flex-horz-space font-content text-center">
        <footer class="flex-vert-center">
            <h3>&copy lmpwybb.alwaysdata.net</h3>
        </footer>
    </section>
    <script src="script.js"></script>
</body>
</html>
<?php

session_start();

$savedToken = "";
if (isset($_POST['send'])) {
    $savedToken = $_SESSION['token'];
}
try {
    $_SESSION['token'] = bin2hex(random_bytes(16));
} catch (Exception $e) {
}

require "contact.php";
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="robots" content="index, follow, noodp">
        <meta name="description" content="Personnal and responsive curriculum vitae of Sébastien Cartoux">
        <meta name="keywords" content="curriculum vitae web developper native responsive HTML CSS PHP JavaScript">
        <meta name="author" content="Sébastien Cartoux">
        <meta name="HandheldFriendly" content="true">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sébastien Cartoux</title>
        <link rel="stylesheet" href="style.css">
        <link href="https://fonts.googleapis.com/css?family=Permanent+Marker|Rajdhani|Ubuntu&display=swap" rel="stylesheet">
        <link rel="shortcut icon" href="pictures/favicon.ico" type="image/x-icon">
    </head>
    <body>
        <header class="grid grid-tc3 grid-align grid-responsive">
            <div class="text-change">
                <img id="laptop" src="pictures/laptop.png" alt="laptop icon">
            </div>
            <div class="text-change">
                <h1 id="me" class="permanent">SÉBASTIEN CARTOUX</h1>
                <h2 id="function">DÉVELOPPEUR WEB</h2>
            </div>
            <div class="text-change">
                <input type="button" class="button permanent" value="Télécharger le CV"
                       onclick="window.open('download/CV-dev-web-seb-cartoux.pdf', '_blank')">
            </div>
        </header>
        <nav id="menu-nav" class="grid grid-menu-nav text-change">
            <div><a id="active" class="grid-items-spacing" href="#about">A propos</a></div>
            <div><a href="#skills" class="grid-items-spacing">Compétences</a></div>
            <div><a href="#experience" class="grid-items-spacing">Expérience</a></div>
            <div><a href="#portfolio" class="grid-items-spacing">Portfolio</a></div>
            <div><a href="#education" class="grid-items-spacing">Formations</a></div>
            <div><a href="#contact" class="grid-items-spacing">Contact</a></div>
        </nav>
        <section id="about" class="section font-content text-change">
            <div class="flex-titles">
                <h2 class="titles permanent">A PROPOS</h2>
            </div>
            <div class="box-size box-margin">
                <h3 class="italic-sentence">"En recherche d'une entreprise pouvant m'accueillir en alternance à partir
                    de Janvier 2022 pour une formation BAC+5 (MSc Pro) à Epitech Marseille débutant en septembre 2021."
                </h3>
            </div>
            <div class="box-size-alt grid grid-tc2-align grid-responsive box-margin">
                <div class="grid-items-spacing">
                    <img id="portrait" src="pictures/portrait.png" alt="portrait icon">
                </div>
                <div class="grid-items-spacing">
                    <h3 class="italic-sentence">Détenteur du Permis B</h3>
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
        <section id="skills" class="section font-content text-change">
            <div class="flex-titles">
                <h2 class="titles permanent">COMPÉTENCES</h2>
            </div>
            <div class="box-size grid grid-tc3 box-margin">
                <div class="grid-items-spacing">
                    <h3 class="grid-items-spacing langage-responsive">UBUNTU</h3>
                    <div id="ubuntu" class="logo logo-circle">U</div>
                </div>
                <div class="grid-items-spacing">
                    <h3 class="langage-responsive">GITHUB</h3>
                    <div id="git" class="logo logo-circle">H</div>
                </div>
                <div class="grid-items-spacing">
                    <h3 class="langage-responsive">GITLAB</h3>
                    <div id="lab" class="logo logo-fox">L</div>
                </div>
                <div class="grid-items-spacing">
                    <h3 class="langage-responsive">HTML</h3>
                    <div id="html" class="logo logo-pentagon">5</div>
                </div>
                <div class="grid-items-spacing">
                    <h3 class="langage-responsive">MYSQL</h3>
                    <div id="mysql" class="logo logo-circle">8</div>
                </div>
                <div class="grid-items-spacing">
                    <h3 class="langage-responsive">CSS</h3>
                    <div id="css" class="logo logo-pentagon">3</div>
                </div>
                <div class="grid-items-spacing">
                    <h3 class="langage-responsive">PHP</h3>
                    <div id="php" class="logo logo-oval">8</div>
                </div>
                <div class="grid-items-spacing">
                    <h3 class="langage-responsive">JS</h3>
                    <div id="javascript" class="logo logo-pentagon">8</div>
                </div>
                <div class="grid-items-spacing">
                    <h3 class="langage-responsive">SYMFONY</h3>
                    <div id="symfony" class="logo logo-circle">5</div>
                </div>
                <div class="grid-items-spacing">
                    <h3 class="langage-responsive">JQUERY</h3>
                    <div id="jquery" class="logo">Q</div>
                </div>
                <div class="grid-items-spacing">
                    <h3 class="langage-responsive">BSTRAP</h3>
                    <div id="bootstrap" class="logo logo-bootstrap">B</div>
                </div>
                <div class="grid-items-spacing">
                    <h3 class="langage-responsive">BULMA</h3>
                    <div id="bulma" class="logo logo-bulma"></div>
                </div>
                <div class="grid-items-spacing">
                    <h3 class="langage-responsive">DOCKER</h3>
                    <div id="docker" class="logo logo-docker"></div>
                </div>
                <div class="grid-items-spacing">
                    <h3 class="langage-responsive">AJAX</h3>
                    <div id="ajax" class="logo logo-arrow"></div>
                </div>
                <div class="grid-items-spacing">
                    <h3 class="langage-responsive">JSON</h3>
                    <div id="json" class="logo logo-circle">{}</div>
                </div>
                <div class="grid-items-spacing">
                    <h3 class="langage-responsive">NODE.JS</h3>
                    <div id="node" class="logo logo-node"></div>
                </div>
                <div class="grid-items-spacing">
                    <h3 class="langage-responsive">WPRESS</h3>
                    <div id="wordpress" class="logo logo-circle">W</div>
                </div>
            </div>
        </section>
        <section id="experience" class="section font-content text-change">
            <div class="flex-titles">
                <h2 class="titles permanent">EXPÉRIENCE</h2>
            </div>
            <div class="grid grid-tc2-align grid-responsive box-margin">
                <div class="box-size box-margin-middle grid-special">
                    <h3>DÉVELOPPEUR WEB FULLSTACK (STAGE)</h3>
                    <h4>MOOGLEPOST</h4>
                    <h5>02/2020 - 03/2020</h5>
                    <h6 id="bigger" class="italic-sentence">Intervention sur la plate-forme d’email transactionnel et
                        marketing MooglePost, incluant développement backend PHP/Symfony 4, front-end
                        HTML5/CSS3/Twig/Bootstrap.<br><br>
                        La mission inclue aussi une initiation DevOps et CI/CD (GitLab + Docker), et l’écriture de
                        tests unitaires/intégration.<br><br>
                        La plate-forme ayant deux bugs connus et référencés, le contexte de résolution de bug et mise
                        à jour d’une application en production (sans downtime) a été abordé.
                    </h6>
                </div>
                <div class="box-size box-margin-middle">
                    <h3>OPÉRATEUR TUTEUR EN SALLE BLANCHE</h3>
                    <h4>SARTORIUS STEDIM BIOTECH FMT</h4>
                    <h5>11/2014 - 03/2019</h5>
                </div>
                <div class="box-size box-margin-middle">
                    <h3>AGENT DE MAINTENANCE INDUSTRIELLE</h3>
                    <h4>ALAZARD ET ROUX</h4>
                    <h5>07/2007 - 06/2012</h5>
                </div>
            </div>
        </section>
        <section id="portfolio" class="section font-content text-change">
            <div class="flex-titles">
                <h2 class="titles permanent">PORTFOLIO</h2>
            </div>
            <div class="grid grid-tc2-align grid-responsive box-margin">
                <div class="box-size-alt box-margin-middle box-transform">
                    <a href="https://github.com/Lmpwybb/My-CV" target="_blank">
                        <div class="font-content">
                            <h3>Comment a été réalisé ce site</h3>
                            <img src="pictures/github.png" alt="github my cv link">
                        </div>
                    </a>
                </div>
                <div class="box-size-alt box-margin-middle box-transform">
                    <a href="https://manys.alwaysdata.net" target="_blank">
                        <div class="font-content">
                            <h3>Manys agence immobilière</h3>
                            <img src="pictures/manys.png" alt="manys link">
                        </div>
                    </a>
                </div>
                <div class="box-size-alt box-margin-middle box-transform">
                    <a href="https://github.com/Lmpwybb" target="_blank">
                        <div class="font-content">
                            <h3>Mes projets</h3>
                            <img src="pictures/github.png" alt="github link">
                        </div>
                    </a>
                </div>
                <div class="box-size-alt box-margin-middle box-transform">
                    <a href="https://lmpwybb.alwaysdata.net/wpcms/" target="_blank">
                        <div class="font-content">
                            <h3>CMS Wordpress</h3>
                            <img src="pictures/wordpress.png" alt="wordpress">
                        </div>
                    </a>
                </div>
                <div class="box-size-alt box-margin-middle box-transform">
                    <a href="https://www.linkedin.com/in/seb-cartoux/" target="_blank">
                        <div class="font-content">
                            <h3>Mon LinkedIn</h3>
                            <img src="pictures/linkedin.png" alt="linkedin">
                        </div>
                    </a>
                </div>
                <div class="box-size-alt box-margin-middle box-transform">
                    <a href="https://www.youtube.com/channel/UCZsJpXPuepI4J-vIknwv_bQ" target="_blank">
                        <div class="font-content">
                            <h3>Youtubeur à mes heures</h3>
                            <img src="pictures/youtube.png" alt="youtube">
                        </div>
                    </a>
                </div>
            </div>
        </section>
        <section id="education" class="section font-content text-change">
            <div class="flex-titles">
                <h2 class="titles permanent">FORMATIONS</h2>
            </div>
            <div class="grid grid-tc2-align grid-responsive box-margin">
                <div class="box-size box-margin-middle">
                    <h3>JAVASCRIPT ALGORITHMS AND DATA STRUCTURES</h3>
                    <h4>FREECODECAMP</h4>
                    <h5>10/2020</h5>
                    <input type="button" class="button permanent" value="Voir la certification"
                           onclick="window.open('https://freecodecamp.org/certification/lmpwybb/javascript-algorithms-and-data-structures',
                           '_blank')">
                </div>
                <div class="box-size box-margin-middle">
                    <h3>RESPONSIVE WEB DESIGN</h3>
                    <h4>FREECODECAMP</h4>
                    <h5>06/2020</h5>
                    <input type="button" class="button permanent" value="Voir la certification"
                           onclick="window.open('https://freecodecamp.org/certification/lmpwybb/responsive-web-design',
                           '_blank')">
                </div>
                <div class="box-size box-margin-middle grid-special">
                    <h3>BAC +2 DÉVELOPPEUR WEB ET WEB MOBILE</h3>
                    <h4>UTOPLAB / SIMPLON / GRANDE ÉCOLE DU NUMERIQUE</h4>
                    <h5>07/2019 - 05/2020</h5>
                    <h6 id="bigger" class="italic-sentence">Cette formation m'a appris à travailler et gérer des
                        projets en équipe (méthodologies Agile et Scrum, Kanban). Et de développer ces compétences :<br><br>
                        - Maquetter une application.<br>
                        - Réaliser une interface utilisateur web statique et adaptable.<br>
                        - Développer une interface utilisateur web dynamique.<br>
                        - Réaliser une interface utilisateur avec une solution de gestion de contenu e-commerce (CMS).<br>
                        - Créer une base de données.<br>
                        - Développer les composants d'accès aux données.<br>
                        - Développer la partie back-end d'une application web ou web mobile.<br>
                        - Elaborer et mettre en œuvre des composants dans une application de gestion de contenu ou
                        e-commerce.
                    </h6>
                </div>
                <div class="box-size box-margin-middle">
                    <h3>BAC PROFESSIONNEL EN ÉLECTROTECHNIQUE</h3>
                    <h4>LYCÉE CHARLES PRIVAT</h4>
                    <h5>2004 - 2006</h5>
                </div>
                <div class="box-size box-margin-middle">
                    <h3>CAP + BEP EN ÉLECTROTECHNIQUE</h3>
                    <h4>LYCÉE CHARLES PRIVAT</h4>
                    <h5>2002 - 2004</h5>
                </div>
            </div>
        </section>
        <section id="contact" class="section font-content text-change">
            <div class="flex-titles">
                <h2 class="titles permanent">CONTACT</h2>
            </div>
            <div class="box-size box-margin">
                <form method="POST" action="index.php#contact">
                    <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['token']; ?>">
                    <div class="success form-margin-middle">
                        <?php
                            if (isset($_POST['send'])) {
                                if (checkToken($_POST['csrf_token'], $savedToken)) {
                                    $status = sendEmail($_POST);
                                    if ($status) {
                                        $_POST = [];
                                        echo "Votre message a bien été transmis, je vous répondrais dans les plus brefs délais.";
                                    }
                                } else {
                                    echo '<span class="error form-margin-middle">' . "Le token CSRF a expiré, votre message n'a pas été transmis." . '</span>';
                                }
                            }
                        ?>
                    </div>
                    <label for="last_name"></label>
                    <input class="input box-margin-middle" type="text" name="last_name" id="last_name" placeholder="* Nom:"
                           value="<?php echo isset($_POST['last_name']) ? $_POST['last_name'] : ''; ?>"><br>
                    <div class="error form-margin-middle">
                        <?php
                            if (isset($_POST['send'])) {
                                try {
                                    echo checkLastName($_POST);
                                } catch (Exception $e) {
                                }
                            }
                        ?>
                    </div>
                    <label for="first_name"></label>
                    <input class="input box-margin-middle" type="text" name="first_name" id="first_name" placeholder="* Prénom"
                           value="<?php echo isset($_POST['first_name']) ? $_POST['first_name'] : ''; ?>"><br>
                    <div class="error form-margin-middle">
                        <?php
                            if (isset($_POST['send'])) {
                                try {
                                    echo checkFirstName($_POST);
                                } catch (Exception $e) {
                                }
                            }
                        ?>
                    </div>
                    <label for="email"></label>
                    <input class="input box-margin-middle" type="text" name="email" id="email" placeholder="* Courriel"
                           value="<?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?>"><br>
                    <div class="error form-margin-middle">
                        <?php
                            if (isset($_POST['send'])) {
                                try {
                                    echo checkEmail($_POST);
                                } catch (Exception $e) {
                                }
                            }
                        ?>
                    </div>
                    <label for="phone"></label>
                    <input class="input box-margin-middle" type="text" name="phone" id="phone" placeholder="Téléphone"
                           value="<?php echo isset($_POST['phone']) ? $_POST['phone'] : ''; ?>"><br>
                    <div class="error form-margin-middle">
                        <?php
                            if (isset($_POST['send'])) {
                                try {
                                    echo checkPhone($_POST);
                                } catch (Exception $e) {
                                }
                            }
                        ?>
                    </div>
                    <label for="message"></label>
                    <textarea class="box-margin-middle" name="message" id="message" placeholder="* Message:" rows="10"
                              maxlength="500"><?php echo isset($_POST['message']) ? $_POST['message'] : ''; ?></textarea><br>
                    <div class="error form-margin-middle">
                        <?php
                            if (isset($_POST['send'])) {
                                try {
                                    echo checkMessage($_POST);
                                } catch (Exception $e) {
                                }
                            }
                        ?>
                    </div>
                    <p class="box-margin-middle">* Ces informations sont requises.</p>
                    <input id="submit-button" class="button permanent box-margin-middle" name="send" type="submit" value="Envoyer">
                </form>
            </div>
        </section>
        <footer id="footer" class="font-content text-change flex-titles">
            <h3>&copy lmpwybb.alwaysdata.net</h3>
        </footer>
        <script src="script.js"></script>
    </body>
</html>

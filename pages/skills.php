<?php require __DIR__ . '/header.php'; ?>

<section class="section has-text-centered">
    <div class="card">
        <div class="card-content">
            <div class="box has-background-info">
                <h1 class="title has-text-white	">
                    <?php echo _('Hard skills'); ?>
                </h1>
            </div>

            <div class="columns">
                <div class="column">
                    <img src="../pictures/skills/hard_skills/html.png" alt="html logo">
                    <img src="../pictures/skills/hard_skills/css.png" alt="css logo">
                    <img src="../pictures/skills/hard_skills/php.png" alt="php logo">
                    <img src="../pictures/skills/hard_skills/javascript.png" alt="javascript logo">
                    <img src="../pictures/skills/hard_skills/mysql.png" alt="mysql logo">
                </div>
            </div>

            <div class="columns">
                <div class="column">
                    <img src="../pictures/skills/hard_skills/bootstrap.png" alt="bootstrap logo">
                    <img src="../pictures/skills/hard_skills/bulma.png" alt="bulma logo">
                    <img src="../pictures/skills/hard_skills/react.png" alt="react logo">
                    <img src="../pictures/skills/hard_skills/symfony.png" alt="symfony logo">
                    <img src="../pictures/skills/hard_skills/nodejs.png" alt="nodejs logo">
                    <img src="../pictures/skills/hard_skills/jquery.png" alt="jquery logo">
                    <img src="../pictures/skills/hard_skills/java.png" alt="java logo">
                </div>
            </div>

            <div class="columns">
                <div class="column">
                    <img src="../pictures/skills/hard_skills/ubuntu.png" alt="ubuntu logo">
                    <img src="../pictures/skills/hard_skills/git.png" alt="git logo">
                    <img src="../pictures/skills/hard_skills/wordpress.png" alt="wordpress logo">
                    <img src="../pictures/skills/hard_skills/webdriverio.png" alt="webdriverio logo">
                    <img src="../pictures/skills/hard_skills/docker.png" alt="docker logo">
                </div>
            </div>
        </div>
    </div>
</section>

<div class="tabs is-centered is-boxed">
    <ul>
        <li>
            <a href="#moreSkills">
                <span class="icon"><img src="../pictures/skills/hard_skills/arrow-down.png" alt="<?php echo _('down arrow picture') ?>"></span>
                <span>
                    <?php echo _('More skills'); ?>
                </span>
            </a>
        </li>
    </ul>
</div>

<section class="section is-medium has-text-centered">
    <div class="card">
        <div class="card-content">
            <div class="box has-background-info">
                <h1 class="title has-text-white">
                    <?php echo _('Soft skills'); ?>
                </h1>
            </div>

            <div class="columns is-vcentered">
                <div class="column">
                    <img src="../pictures/skills/soft_skills/adaptability.png" alt="<?php echo _('adaptability icon') ?>">
                    <h2 class="subtitle">
                        <?php echo _('Adaptability'); ?>
                    </h2>
                </div>

                <div class="column">
                    <img src="../pictures/skills/soft_skills/force_of_proposal.png" alt="<?php echo _('force of proposal icon') ?>">
                    <h2 class="subtitle">
                        <?php echo _('Force of proposal'); ?>
                    </h2>
                </div>

                <div class="column">
                    <img src="../pictures/skills/soft_skills/perseverance.png" alt="<?php echo _('perseverance icon') ?>">
                    <h2 class="subtitle">
                        <?php echo _('Perseverance'); ?>
                    </h2>
                </div>

                <div class="column">
                    <img src="../pictures/skills/soft_skills/reactivity.png" alt="<?php echo _('reactivity icon') ?>">
                    <h2 class="subtitle">
                        <?php echo _('Reactivity'); ?>
                    </h2>
                </div>

                <div class="column">
                    <img src="../pictures/skills/soft_skills/rigor.png" alt="<?php echo _('rigor icon') ?>">
                    <h2 class="subtitle">
                        <?php echo _('Rigor'); ?>
                    </h2>
                </div>

                <div class="column">
                    <img src="../pictures/skills/soft_skills/sense_of_organisation.png" alt="<?php echo _('sense of organisation icon') ?>">
                    <h2 class="subtitle">
                        <?php echo _('Sense of organisation'); ?>
                    </h2>
                </div>

                <div class="column">
                    <img src="../pictures/skills/soft_skills/team_work.png" alt="<?php echo _('team work icon') ?>">
                    <h2 class="subtitle">
                        <?php echo _('Team work'); ?>
                    </h2>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="moreSkills" class="section is-medium has-text-centered">
    <div class="card">
        <div class="card-content">
            <div class="box has-background-info">
                <h1 class="title has-text-white">
                    <?php echo _('Mad skills'); ?>
                </h1>
            </div>

            <div class="columns is-vcentered">
                <div class="column">
                    <img src="../pictures/skills/mad_skills/computer_hardware.png" alt="<?php echo _('hardware icon') ?>">
                    <h2 class="subtitle">
                        <?php echo _('Computer hardware'); ?>
                    </h2>
                </div>

                <div class="column">
                    <img src="../pictures/skills/mad_skills/video_games.png" alt="<?php echo _('video games icon') ?>">
                    <h2 class="subtitle">
                        <?php echo _('Video games'); ?>
                    </h2>
                </div>

                <div class="column">
                    <img src="../pictures/skills/mad_skills/scientific_documentaries.png" alt="<?php echo _('scientific documentaries icon') ?>">
                    <h2 class="subtitle">
                        <?php echo _('Scientific documentaries'); ?>
                    </h2>
                </div>

                <div class="column">
                    <img src="../pictures/skills/mad_skills/sport.png" alt="<?php echo _('sport icon') ?>">
                    <h2 class="subtitle">
                        <?php echo _('Sport'); ?>
                    </h2>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require __DIR__ . '/footer.php'; ?>

<?php require __DIR__ . '/header.php'; ?>

<section class="section is-medium has-text-centered">
    <div class="card">
        <div class="card-content">
            <div class="box has-background-info">
                <h1 class="title has-text-white">
                    <?php echo _('Portfolio'); ?>
                </h1>
            </div>

            <div class="columns">

                <div class="column">
                    <a href="https://manys.alwaysdata.net/" target="_blank">
                        <div class="card">
                            <div class="card-content">
                                <div class="box has-background-info">
                                    <h2 class="subtitle has-text-white">Manys</h2>
                                </div>

                                <h3 class="subtitle">
                                    <?php echo _('Real estate agency'); ?>
                                </h3>

                                <img src="../pictures/portfolio/manys.png" alt="<?php echo _('link to manys') ?>">
                            </div>
                        </div>
                    </a>
                </div>

                <div class="column">
                    <a href="https://choupis.alwaysdata.net/" target="_blank">
                        <div class="card">
                            <div class="card-content">
                                <div class="box has-background-info">
                                    <h2 class="subtitle has-text-white">Choupis</h2>
                                </div>

                                <h3 class="subtitle">
                                    <?php echo _('Url Shortener'); ?>
                                </h3>

                                <img src="../pictures/portfolio/choupisV.png" alt="<?php echo _('link to choupis') ?>">
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require __DIR__ . '/footer.php'; ?>

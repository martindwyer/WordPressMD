<?php

function page_banner($args = NULL)
{
    if (!isset($args['title'])) {
        $args['title'] = get_the_title();
    }

    if (!isset($args['subtitle'])) {
        $args['subtitle'] = '';
    }

    if (!isset($args['photo'])) {

        $args['photo'] = get_theme_file_uri('/assets/css/images/page-banner-background.jpg');
    }

?>
    <div class="page-banner">
        <div class="page-banner__bg-image" style="background-image: url(<?php echo $args['photo']; ?>"></div>
        <div class="page-banner__content container container--narrow">
            <h1 class="page-banner__title"><?php echo $args['title']; ?></h1>
            <div class="page-banner__intro">
                <?php echo $args['subtitle']; ?>
            </div>
        </div>
    </div>

<?php
}

<?php

function page_banner($args)
{
    if (isset($args['title'])) {

?>
        <div class="page-banner row text-center">
            <h1><?php echo $args['title'] ?></h1>
            <?php if (isset($args['subtitle'])) { ?>
                <h3><?php echo $args['subtitle'] ?></h3>
            <?php } ?>
        </div>
    <?php
    } else {
    ?>
        <div class="page-banner row text-center">
            <h1>Posts</h1>
        </div>
<?php
    }
}

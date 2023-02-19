<nav class="navbar navbar-dark bg-dark navbar-expand-lg fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="/"><img src="<?php echo THEME_URI . '/assets/images/favicon_io/android-chrome-192x192.png' ?>" alt="site-icon" height="35" /></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <?php wp_nav_menu(array(
                'menu' => 'header-menu-location',
                'container' => '',
                'menu_class' => 'navbar-nav mb-2 mb-lg-0'
            )) ?>

            <?php if (is_user_logged_in()) {
            ?>
                <<?php if (is_admin_user()) {
                    ?> <a href="<?php echo site_url('/wp-admin'); ?>" class="admin">Admin</a>

                <?php
                    }
                ?>
                <a href="<?php echo wp_logout_url(); ?>" class="logout">Logout</a>

            <?php
            } else {
            ?>
                <!-- <a href="<?php echo wp_login_url(); ?>" class="login">Login</a> -->
                <a href="<?php echo wp_registration_url(); ?>" class="register">Subscribe</a>
            <?php } ?>


            <form class="d-flex navbar-right" role="search" action="<?php echo esc_url(home_url('/')); ?>" method="get">

                <?php if (is_user_logged_in()) {
                ?>
                    <<?php if (is_admin_user()) {
                        ?> <a href="<?php echo site_url('/wp-admin'); ?>" class="btn btn-warning admin">Admin</a>

                    <?php
                        }
                    ?>
                    <a href="<?php echo wp_logout_url(); ?>" class="btn btn-primary logout">Logout</a>

                <?php
                } else {
                ?>
                    <a href="<?php echo wp_login_url(); ?>" class="btn btn-secondary login">Login</a>
                    <a href="<?php echo wp_registration_url(); ?>" class="btn btn-secondary register">Subscribe</a>
                <?php } ?>

                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="s">
                <button class="btn btn-outline-success btn-search" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>

            </form>
        </div>
    </div>
</nav>
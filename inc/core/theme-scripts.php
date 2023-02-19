<?php

function theme_scripts()
{
    wp_enqueue_script('bootstrap-js', THEME_URI . '/assets/bootstrap/dist/js/bootstrap.bundle.min.js', NULL, '1.0', true);
    wp_enqueue_script('main-theme-js', THEME_URI . '/assets/build/index.js', NULL, '1.0', true);
    wp_enqueue_style('google-font-one', '//fonts.googleapis.com/css2?family=MuseoModerno:wght@600;700;800&display=swap');
    wp_enqueue_style('google-font-two', '//fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@400;700;900&display=swap');
    wp_enqueue_style('google-font-three', '//fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&family=Nunito:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    wp_enqueue_style('animate-css', THEME_URI . '/assets/node_modules/animate.css/animate.min.css');
    wp_enqueue_style('glightbox-css', THEME_URI . '/assets/node_modules/glightbox/dist/css/glightbox.min.css');
    wp_enqueue_style('font-awesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css');
    wp_enqueue_style('theme_main_styles', THEME_URI . '/assets/build/index.css');
    wp_localize_script('main-theme-js', 'mainDataJs', array(
        'root_url' => get_site_url()
    ));
}

add_action('wp_enqueue_scripts', 'theme_scripts');

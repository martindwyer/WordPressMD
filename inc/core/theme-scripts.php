<?php

function theme_scripts()
{
    wp_enqueue_script('main-theme-js', THEME_URI . '/assets/build/index.js', array('jquery'), '1.0', true);
    wp_enqueue_script('materialize-js', THEME_URI . '/assets/js/materialize.js', NULL, '1.0', true);
    wp_enqueue_script('materialize-js-init', THEME_URI . '/assets/js/init.js', NULL, '1.0', true);
    wp_enqueue_script('aos-js', THEME_URI . '/assets/js/aos.js', NULL, '1.0', true);
    wp_enqueue_style('materialize-icons', '//fonts.googleapis.com/icon?family=Material+Icons');
    wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_style('aos_styles', THEME_URI . '/assets/css/aos.css');
    wp_enqueue_style('animate_css_styles', THEME_URI . '/assets/css/animate.min.css');
    wp_enqueue_style('theme_main_styles', THEME_URI . '/assets/build/style-index.css');
    wp_localize_script('main-theme-js', 'mainDataJs', array(
        'root_url' => get_site_url(),
        'nonce' => wp_create_nonce('wp_rest')
    ));
}

add_action('wp_enqueue_scripts', 'theme_scripts');

<?php

function theme_features()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    register_nav_menu('header-menu-location', 'Header Menu Location');
    register_nav_menu('footer-location-1', 'Footer location 1');
    register_nav_menu('footer-location-2', 'Footer location 2');
}

add_action('after_setup_theme', 'theme_features');

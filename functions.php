<?php

/**
 * Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package NorthParkMD
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define('THEME_DIR', get_template_directory());
define('THEME_URI', esc_url(get_template_directory_uri()));

/**
 * Theme core elements
 */
require_once THEME_DIR . '/inc/core/theme-features.php';        // Theme features
require_once THEME_DIR . '/inc/core/theme-scripts.php';         // Site-wide CSS and JavaScript
require_once THEME_DIR . "/inc/core/head-section-setup.php";    // Head section setup
require_once THEME_DIR . "/inc/page/page_banner.php";           // Page banner
require_once THEME_DIR . "/inc/home/home-posts.php";            // Query and present recent posts
require_once THEME_DIR . "/inc/core/admin-bar.php";             // Admin bar for admin users only
require_once THEME_DIR . "/inc/core/search-results.php";        // All search results on one page
require_once THEME_DIR . "/inc/core/login-page.php";                 // Customize login page
require_once THEME_DIR . "/inc/core/login-logout-redirect.php"; // Redirect after login or logout
require_once THEME_DIR . "/inc/core/all-in-one-excludes.php";   // All in one transfer plugin excludes

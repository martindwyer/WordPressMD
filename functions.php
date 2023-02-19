<?php

/**
 * Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package CollegePressMD
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define('THEME_DIR', get_template_directory());
define('THEME_URI', esc_url(get_template_directory_uri()));

/**
 * Theme features
 */
require THEME_DIR . '/inc/core/theme-features.php';

/**
 * Theme scripts
 */
require_once THEME_DIR . '/inc/core/theme-scripts.php';

/**
 * Theme nav menu locations
 */
require_once THEME_DIR . '/inc/core/nav-menu.php';

/**
 * Home page featured posts
 */
require_once "inc/home/home-posts.php";

/**
 * Page banner functionality
 */
require_once "inc/page/page_banner.php";

add_filter('show_admin_bar', '__return_false');

function is_admin_user()
{
    return current_user_can('manage_options');
}

/**
 * Change posts per page by post type
 */
function bb_change_posts_per_page($query)
{

    if (is_search()) {
        $query->set('posts_per_page', -1);
    }
}
add_filter('pre_get_posts', 'bb_change_posts_per_page');


function wpb_login_logo()
{
    wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_style('google-font-for-logo', '//fonts.googleapis.com/css2?family=MuseoModerno:ital,wght@0,400;0,500;0,600;0,700;0,800;1,500&display=swap');
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('theme_main_styles', THEME_URI . '/assets/build/style-index.css');
    wp_enqueue_style('theme_extra_styles', THEME_URI . '/assets/build/index.css');
    wp_enqueue_script('main-theme-js', THEME_URI . '/assets/build/index.js', NULL, '1.0', true);

?>
    <style type="text/css">
        body.login {
            background: url(<?php echo THEME_URI . '/assets/images/site-background.jpeg' ?>) top center;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }

        #login h1 a {
            background-image: url(<?php echo THEME_URI . '/assets/images/north-park.jpg' ?>);
            width: 100%;
            background-size: cover;
        }

        .login #backtoblog a,
        .login #nav a {
            color: #fff !important;
        }
    </style>
<?php }
add_action('login_enqueue_scripts', 'wpb_login_logo');



function auto_redirect_after_logout()
{
    wp_safe_redirect(home_url());
    exit;
}

add_action('wp_logout', 'auto_redirect_after_logout');


function auto_redirect_after_login()
{
    wp_safe_redirect(home_url());
    exit;
}

add_action('wp_login', 'auto_redirect_after_login');


function setup_head_section()
{
?>
    <meta property="og:title" content=<?php echo get_the_title(); ?> | Primal Strength and Conditioning - Living Strong and Staying Positive key="title" />
    <meta name="description" content="Primal Strength Training and Conditioning, a website dedicated to strength, conditioning and longevity." />
    <meta name="keywords" content="power lifting conditioning weight lifting fitness longevity" />
    <meta property="og:title" content="<?php echo get_the_title(); ?> | Primal Strength and Conditioning - Living Strong and Staying Positive" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://goprimalstrength.com/" />
    <meta property="og:image" content="<?php echo get_the_post_thumbnail_url(); ?>" />

    <meta name="twitter:title" content="<?php echo get_the_title(); ?> | Primal Strength and Conditioning - Living Strong and Staying Positive" />
    <meta name="twitter:description" content="Primal Strength Training and Conditioning, a website dedicated to strength, conditioning and longevity." />
    <meta name="twitter:image" content="<?php echo get_the_post_thumbnail_url(); ?>" />
    <meta name="twitter:card" content="summary_large_image" />
<?php
}

add_action('wp_head', 'setup_head_section');

function custom_title($title_parts)
{
    if (!is_front_page() && is_home()) {
        $title_parts['title'] = 'Posts | Primal Strength and Conditioning - Living Strong and Staying Positive';
    } else if (is_category()) {
        $title_parts['title'] = get_the_category()[0]->name . ' | Primal Strength and Conditioning - Living Strong and Staying Positive';
    } else {
        $title_parts['title'] = get_the_title() . ' | Primal Strength and Conditioning - Living Strong and Staying Positive';
    }


    return $title_parts;
}
add_filter('document_title_parts', 'custom_title');

function ai1wm_exclude_filters($exclude_filters)
{
    $exclude_filters[] = 'themes/PrimalPressMD/assets/node_modules';
    return $exclude_filters;
}

add_filter('ai1wm_exclude_content_from_export', 'ai1wm_exclude_filters');

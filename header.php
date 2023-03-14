<?php

/**
 * The template for the site header, including:
 *
 * 1.  The beginnings of a head section.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package NorthParkMD
 * @since 1.0.0
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="<?php echo THEME_URI . "/assets/images/favicon_io/favicon.ico" ?>">
    <?php wp_head() ?>
</head>

<body <?php body_class() ?>>
    <?php get_template_part("template-parts/core/search-display"); ?>
    <?php get_template_part("template-parts/core/navbar"); ?>

    <?php get_template_part("template-parts/terms/notification"); ?>
    <?php get_template_part("template-parts/core/back-to-top"); ?>
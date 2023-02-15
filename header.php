<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo get_the_title() ?> | North Park Colorado | American Wilderness</title>
    <link rel="icon" type="image/x-icon" href="<?php echo THEME_URI . "/assets/images/favicon_io/favicon.ico" ?>">
    <?php wp_head() ?>
</head>

<body <?php body_class() ?>>
    <?php get_template_part("template-parts/core/search-display"); ?>
    <?php get_template_part("template-parts/core/navbar"); ?>

    <?php get_template_part("template-parts/terms/notification"); ?>
    <?php get_template_part("template-parts/core/back-to-top"); ?>
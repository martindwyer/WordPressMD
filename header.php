<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head() ?>
</head>

<body <?php body_class() ?>>
    <header class="header">
        <nav class="teal white-text lighten-1" role="navigation">
            <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo white-text">Logo</a>
                <ul class="right hide-on-med-and-down">
                    <li><a class="white-text" href="#">Navbar Link</a></li>
                    <li><a class="white-text" href="#">Navbar Link</a></li>
                    <li><a class="white-text" href="#">Navbar Link</a></li>
                    <li><a class="white-text" href="#">Navbar Link</a></li>
                    <li><a class="white-text" href="#">Navbar Link</a></li>
                </ul>

                <ul id="nav-mobile" class="sidenav">
                    <li><a href="#">Navbar Link</a></li>
                    <li><a href="#">Navbar Link</a></li>
                    <li><a href="#">Navbar Link</a></li>
                    <li><a href="#">Navbar Link</a></li>
                </ul>
                <a href="#" data-target="nav-mobile" class="sidenav-trigger white-text"><i class="material-icons">menu</i></a>
            </div>
        </nav>
    </header>
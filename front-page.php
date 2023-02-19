<!-- Get site header -->
<?php get_header() ?>

<div class="container-fluid px-0 py-6">

    <!-- Bring in landing page banner and welcome together with carousel -->
    <?php get_template_part("template-parts/home/carousel-one"); ?>

    <!-- An overview of what the website is about -->
    <?php get_template_part("template-parts/home/about-overview") ?>

    <!-- Query and retrieve posts for front page -->
    <div id="featured-posts" class="featured-posts row">
        <hr>
        <h2 class="text-center">Featured Galleries</h2>
        <?php home_posts(); ?>
    </div>

    <!-- A second carousel to feature more information -->
    <?php get_template_part("template-parts/home/carousel-two"); ?>

    <!-- Introducing leaders of the charge -->
    <?php get_template_part("template-parts/home/about-leaders") ?>

</div>

<!-- Get site footer -->
<?php get_footer() ?>
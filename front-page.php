<?php get_header() ?>

<div class="container-fluid px-0 py-6">
    <?php get_template_part("template-parts/home/jumbotron"); ?>



    <div id="featured-posts" class="featured-posts row">
        <h2 class="text-center">Featured Galleries</h2>

        <?php home_posts(); ?>
    </div>

    <?php get_template_part("template-parts/home/carousel-one"); ?>

    <?php get_template_part("template-parts/home/approach") ?>

    <?php get_template_part("template-parts/home/carousel-two"); ?>

    <?php get_template_part("template-parts/home/about-martin") ?>

</div>

<?php get_footer() ?>
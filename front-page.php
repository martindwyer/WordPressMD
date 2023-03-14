<!-- Get site header -->
<?php get_header();
/**
 * The template for the site landing page containing each of the following:
 *
 * 1.  A carousel landing page with site title and tagline.
 * 2.  An overview of the site.
 * 3.  Three featured posts with the thumbnails of each.
 * 4.  An overview of the site creators.
 *
 * @package NorthParkMD
 */
?>

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
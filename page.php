<?php

/**
 * The template for displaying all pages
 *
 */

get_header(); ?>

<div class="page container-fluid">
    <main id="main" class="site-main">

        <?php
        while (have_posts()) :
            the_post();

            page_banner(array(
                'title' => get_the_title(),
                'subtitle' => get_field('subtitle')
            ));

            $slug = get_post_field('post_name', get_post());
            if ($slug == 'contact') {
                get_template_part("template-parts/contact/contact-page-content");
            } else {


        ?>
                <div class="content">
                    <div class="container">
                        <?php get_template_part('template-parts/page/content', 'page'); ?>
                    </div>
                </div>

        <?php
                // If comments are open or we have at least one comment, load up the comment template.
                if (comments_open() || get_comments_number()) :
                    comments_template();
                endif;
            }
        endwhile; // End the loop.
        ?>

    </main><!-- #main -->

</div><!-- .wrap -->

<?php
get_footer();

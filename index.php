<?php
get_header();
?>

<div class="page container-fluid">

    <div class="content">

        <?php
        page_banner(array(
            'title' => "Galleries",
            'subtitle' => "Collections from personal encounters"
        ));

        ?>
        <div class="container">



            <?php

            $num_posts = 0;

            while (have_posts()) {
                the_post();
            ?>
                <div class="post-item row">
                    <div class="col-md-3">
                        <a href="<?php the_permalink(); ?>">
                            <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title() . ' image' ?>" class="feature-image img-fluid" />
                        </a>
                    </div>
                    <div class="col-md-9">
                        <h2 class="headline headline--medium headline--post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <div class="metabox">
                            <p>Author: <?php the_author_posts_link() ?> on <?php the_time('n.j.y'); ?> in <?php echo get_the_category_list(', '); ?></p>
                        </div>
                        <div class="excerpt">
                            <p>
                                <?php if (has_excerpt()) {
                                    echo get_the_excerpt();
                                } else {
                                    echo wp_trim_words(get_the_content(), 100);
                                } ?> <a href="<?php the_permalink(); ?>" class="nu gray"> read more</a></p>
                        </div>
                    </div>
                </div>
                <hr class="post-break">


            <?php
                $num_posts++;
            }

            if ($num_posts >= 10) {
                echo "<div class='pagination'>";
                echo "<h4 class='text-center'>Page Links</h4>";
                echo "<div class='page-links'>";
                echo paginate_links();
                echo "</div>";
                echo "</div>";
            }

            ?>
        </div>
    </div>
</div>

<?php get_footer() ?>
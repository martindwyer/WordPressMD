<?php
get_header();
?>
<div class="page container-fluid">
    <?php
    page_banner(array(
        'title' => 'Search Results',
        'subtitle' => $wp_query->found_posts . ' results for &ldquo;' . esc_html(get_search_query(false)) . '&rdquo;'
    )) ?>

    <div class="content">
        <div class="container" style="min-height:30vh;">

            <?php

            if (have_posts()) {
                while (have_posts()) {
                    the_post();
                    $count++;
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
                }
            } else {
                echo '<h2 class="headline headline--small-plus">No results match that search</h2>';
            }
            wp_reset_postdata();
            ?>
        </div>
    </div>
</div>
<?php get_footer() ?>
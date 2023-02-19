<?php
function home_posts()
{
    $home_page_posts = new WP_Query(array(
        'posts_per_page' => 3
    ));

    while ($home_page_posts->have_posts()) {
        $home_page_posts->the_post(); ?>
        <div class="card col-lg-4">
            <h5 class="card-title text-center"><a href="<?php the_permalink(); ?>" class="no-decoration"><?php the_title(); ?></a></h5>
            <div class="card-img-holder">

                <img src="<?php the_post_thumbnail_url() ?>" class="" alt="<?php the_title() . ' image' ?> " height="300">
            </div>
            <div class="card-body">


                <p class="card-text"><?php if (has_excerpt()) {
                                            echo get_the_excerpt();
                                        } else {
                                            echo wp_trim_words(get_the_content(), 25);
                                        } ?> <a href="<?php the_permalink(); ?>" class="nu gray"> read more</a></p>
            </div>
        </div>

<?php
    }
    wp_reset_postdata();
}


?>
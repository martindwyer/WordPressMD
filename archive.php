<?php
get_header();

page_banner(array(
    'title' => get_the_archive_title(),
    'subtitle' => get_the_archive_description()
))
?>

<div class="container container--narrow page-section">

    <?php
    $num_posts = 0;
    while (have_posts()) {
        the_post();
    ?>
        <div class="post-item">
            <h2 class="headline headline--medium headline--post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <div class="metabox">
                <p>Author: <?php the_author_posts_link() ?> on <?php the_time('n.j.y'); ?> in <?php echo get_the_category_list(', '); ?></p>
            </div>
            <div class="generic-content">
                <?php the_excerpt(); ?>
                <p><a class="btn btn--blue" href="<?php the_permalink() ?>">continue reading &raquo</a></p>
            </div>
        </div>
    <?php
        $num_posts++;
    }
    echo $num_posts;

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

get_footer();
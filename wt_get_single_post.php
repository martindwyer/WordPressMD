<?php
 while ( have_posts() ) : the_post(); 
    $image = wp_get_attachment_image_src( get_post_thumbnail_id(),'single_post_thumbnail'); 
    echo '<div>';
    echo '<img src="'.$image[0].'" alt="image">';
    echo '</div><br>';
    echo '<h2><br>'.get_the_title().'</h2>';
    echo '<p>'.get_the_date().'</p>';
            
    /* This section for categories and tags */
    echo "<section>";
    echo "Categories: ";
    the_category(', ');
    echo "<br>Tags: ";
    the_tags(', ');
    echo "<br></section><br>";
    the_content();
    comments_template();
endwhile;
            
?>


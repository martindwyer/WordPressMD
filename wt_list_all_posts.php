<?php

$args = array(
                'posts_per_page' => 20,
                'post_type' => 'post'
            );
            $post_data = get_posts($args);
            echo '<h1>Articles</h1><br>';
            foreach($post_data as $post) {
                $image = wp_get_attachment_image_src( get_post_thumbnail_id(),'single_post_thumbnail'); 
                $post_excerpt = strip_tags(substr($post->post_content,0,500));
                $link = get_permalink();
                echo '<div class="row" style="margin-bottom: 1.5em;">';
                echo '<div class="col" style="width:50%;min-width:300px;">';
                echo '<h3><a href='.$link.'>'.get_the_title().'</a></h3>';
                echo '<div class="blog_post_thumbnail" style="width:100%; height: auto;">';
                echo '<img src="'.$image[0].'" alt="image">';
                echo '</div>';
                
                echo '<p style="font-size:85%;font-weight:bold;margin-left:5%;"><br>Posted '.get_the_date().'</p>';
                echo "</div>";
                echo '<div class="col" style="width:45%;min-width: 300px;padding-top:1.5em;float: left;">';
                echo "<section>";
                echo "Categories: ";
                the_category(', ');
                echo "<br>Tags: ";
                the_tags(', ');
                echo "</section>";
                echo '<br><p>'.$post_excerpt.'<a href="'.$link.'">&nbsp;&nbsp;....  Read More</a></p>';
                echo '</div>';
                echo '<hr>';
                echo '</div>';
                
                
            }
?>

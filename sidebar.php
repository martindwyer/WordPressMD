<?php

get_search_form();
?>
<br><br>
<p class="p-center-image"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/profile_after_machines-300x300.jpg" alt="about us image" width="250"></p>

<h5 style="text-align: center;">Categories:</h5>
<ul>

	<?php
            $categories = get_categories();
            $cats_stuff = array();
              foreach($categories as $cat)
              {
                  $val = $cat->category_nicename;
                  $name = $cat->cat_name;
                  $cat_id = get_cat_ID($name);
                  $link = get_category_link(($cat_id));
                  $count = $cat->category_count;
                  $cat_stuff = [$count,$link,$name];
                  array_push($cats_stuff, $cat_stuff);
              }

            array_multisort($cats_stuff,SORT_DESC);
            $num_cats = count($cats_stuff);
            for ($i=0;$i<=$num_cats-1;$i++) {
                echo '<li><a href="'.$cats_stuff[$i][1].'">'.$cats_stuff[$i][2].' ('.$cats_stuff[$i][0].')</a></li>';
            }
    
    
	 ?>
</ul>

<br><br>

<p class="p-center-image"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/exercise_600x600.png" alt="about us image" width="250"></p>

<h5 style="text-align: center;">Tags:</h5>
<ul>

	<?php
        $tags = get_tags();
        $tags_stuff = array();
        foreach($tags as $tag)
        {
            $val = $tag->slug;
            $name = $tag->name;
            $tag_id = $tag->term_id;
            $link = get_category_link(($tag_id));
            $count = $tag ->count;
            $tag_stuff = [$count,$link,$name];
            array_push($tags_stuff, $tag_stuff);
        }
        
        array_multisort($tags_stuff,SORT_DESC);
        $num_tags = count($tags_stuff);
        for ($i=0;$i<=$num_tags-1;$i++) {
            echo '<li><a href="'.$tags_stuff[$i][1].'">'.$tags_stuff[$i][2].' ('.$tags_stuff[$i][0].')</a></li>';
        }
		
	 ?>
</ul>

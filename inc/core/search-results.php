<?php
function bb_change_posts_per_page($query)
{

  if (is_search()) {
    $query->set('posts_per_page', -1);
  }
}
add_filter('pre_get_posts', 'bb_change_posts_per_page');

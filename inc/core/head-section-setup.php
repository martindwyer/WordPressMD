<?php

function setup_head_section()
{
?>
  <meta property="og:title" content="<?php echo get_the_title(); ?> | North Park Colorado - Natural treasure in the Colorado Basin" key="title" />
  <meta name="description" content="North Park Colorado - Natural treasure in the Colorado Basin. Galleries of wildlife in its native habitat." />
  <meta name="keywords" content="mountains high plains peaks trails mountain lakes trails parks moose mountain lion bobcat coyotes wolves birds deer" />
  <meta property="og:title" content="<?php echo get_the_title(); ?> | North Park Colorado - Natural treasure in the Colorado Basin" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://goprimalstrength.com/" />
  <meta property="og:image" content="<?php echo get_the_post_thumbnail_url(); ?>" />

  <meta name="twitter:title" content="<?php echo get_the_title(); ?> | North Park Colorado - Natural treasure in the Colorado Basin" />
  <meta name="twitter:description" content="North Park Colorado - Natural treasure in the Colorado Basin. Galleries of wildlife in its native habitat." />
  <meta name="twitter:image" content="<?php echo get_the_post_thumbnail_url(); ?>" />
  <meta name="twitter:card" content="summary_large_image" />
<?php
}

add_action('wp_head', 'setup_head_section');

function custom_title($title_parts)
{
  if (!is_front_page() && is_home()) {
    $title_parts['title'] = 'Posts | North Park Colorado - Natural treasure in the Colorado Basin';
  } else if (is_category()) {
    $title_parts['title'] = get_the_category()[0]->name . ' | North Park Colorado - Natural treasure in the Colorado Basin';
  } else if (is_archive()) {
    $title_parts['title'] = get_the_archive_title() . ' | North Park Colorado - Natural treasure in the Colorado Basin';
  } else {
    $title_parts['title'] = get_the_title() . ' | North Park Colorado - Natural treasure in the Colorado Basin';
  }


  return $title_parts;
}
add_filter('document_title_parts', 'custom_title');

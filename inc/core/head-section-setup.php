<?php

function setup_head_section()
{
?>
  <meta property="og:title" content=<?php echo get_the_title(); ?> | Primal Strength and Conditioning - Living Strong and Staying Positive key="title" />
  <meta name="description" content="Primal Strength Training and Conditioning, a website dedicated to strength, conditioning and longevity." />
  <meta name="keywords" content="power lifting conditioning weight lifting fitness longevity" />
  <meta property="og:title" content="<?php echo get_the_title(); ?> | Primal Strength and Conditioning - Living Strong and Staying Positive" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://goprimalstrength.com/" />
  <meta property="og:image" content="<?php echo get_the_post_thumbnail_url(); ?>" />

  <meta name="twitter:title" content="<?php echo get_the_title(); ?> | Primal Strength and Conditioning - Living Strong and Staying Positive" />
  <meta name="twitter:description" content="Primal Strength Training and Conditioning, a website dedicated to strength, conditioning and longevity." />
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

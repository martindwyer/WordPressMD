<?php
function wpb_login_logo()
{
  wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
  wp_enqueue_style('google-font-for-logo', '//fonts.googleapis.com/css2?family=MuseoModerno:ital,wght@0,400;0,500;0,600;0,700;0,800;1,500&display=swap');
  wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
  wp_enqueue_style('theme_main_styles', THEME_URI . '/assets/build/style-index.css');
  wp_enqueue_style('theme_extra_styles', THEME_URI . '/assets/build/index.css');
  wp_enqueue_script('main-theme-js', THEME_URI . '/assets/build/index.js', NULL, '1.0', true);

?>
  <style type="text/css">
    body.login {
      background: url(<?php echo THEME_URI . '/assets/images/site-background.jpeg' ?>) top center;
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
    }

    #login h1 a {
      background-image: url(<?php echo THEME_URI . '/assets/images/north-park.jpg' ?>);
      width: 100%;
      background-size: cover;
    }

    .login #backtoblog a,
    .login #nav a {
      color: #fff !important;
    }
  </style>
<?php }
add_action('login_enqueue_scripts', 'wpb_login_logo');

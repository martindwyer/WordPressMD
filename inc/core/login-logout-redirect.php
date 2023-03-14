<?php

function auto_redirect_after_logout()
{
  wp_safe_redirect(home_url());
  exit;
}

add_action('wp_logout', 'auto_redirect_after_logout');


function auto_redirect_after_login()
{
  wp_safe_redirect(home_url());
  exit;
}

add_action('wp_login', 'auto_redirect_after_login');

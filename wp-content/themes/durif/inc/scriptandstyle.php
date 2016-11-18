<?php
/**
 * Add script & css
**/

function add_script() {
  // Add main script
  wp_register_script('materialize', get_template_directory_uri() . '/scripts/materialize.min.js', array('jquery'), '1.1', true);
  wp_enqueue_script('materialize');

  // Add main script
  wp_register_script('main-script', get_template_directory_uri() . '/scripts/main.js', array('jquery'), '1.1', true);
  wp_enqueue_script('main-script');

  // Ajax url init
  wp_localize_script('main-script', 'ajaxurl', admin_url( 'admin-ajax.php' ) );

  // Add main css
  wp_register_style('main-style', get_template_directory_uri() . '/styles/main.css');
  wp_enqueue_style('main-style');

  // Add main css
  wp_register_style('materialize', get_template_directory_uri() . '/styles/materialize.min.css');
  wp_enqueue_style('materialize');
}

add_action('wp_enqueue_scripts', 'add_script');

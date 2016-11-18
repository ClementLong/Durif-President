<?php

add_action('wp_ajax_filter-category', 'filtre_category_function');
add_action('wp_ajax_nopriv_filter-category', 'filtre_category_function');

function filtre_category_function()
{
  global $wpdb, $_POST;
  $term_id = $_POST['term_id'];
  require get_template_directory().'/views/ajax-post.php';

  die();
}

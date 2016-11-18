<?php
/**
 * Create a new taxonomy
**/
add_action('init', 'create_taxonomy');

function create_taxonomy() {
  $taxonomy = 'event-type';
  $object_type = 'event';
  $args = [
    'label' => 'Catégorie de l\'event',
    'rewrite' => ['slug' => 'event-type'],
    'hierarchical' => 'false',
  ];
  register_taxonomy($taxonomy, $object_type, $args);
}

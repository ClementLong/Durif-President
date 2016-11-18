<?php
/**
 * Create a new custom post type
**/

add_action('init', 'create_custom_post_type_annonce');

function create_custom_post_type_annonce() {

  $labels = array(
    'name'               => 'Promesses',
    'singular_name'      => 'Promesse',
    'all_items'          => 'Toutes les promesses',
    'add_new'            => 'Ajouter une promesse',
    'add_new_item'       => 'Ajouter une promesse',
    'edit_item'          => "Modifier la promesse",
    'new_item'           => 'Nouvelle promesse',
    'view_item'          => "Voir la promesse",
    'search_items'       => 'Trouver une promesse',
    'not_found'          => 'Pas de résultat',
    'not_found_in_trash' => 'Pas de résultat',
    'parent_item_colon'  => 'Promesses parentes:',
    'menu_name'          => 'Promesse',
  );

  $args = array(
    'labels'              => $labels,
    'hierarchical'        => false,
    'supports'            => array( 'title','thumbnail','editor', 'comments' ),
    'public'              => true,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'menu_position'       => 5,
    'menu_icon'           => 'dashicons-format-aside',
    'show_in_nav_menus'   => true,
    'publicly_queryable'  => true,
    'exclude_from_search' => false,
    'has_archive'         => false,
    'query_var'           => true,
    'can_export'          => true,
    'rewrite'             => array(
      'slug'                => 'promesse'
    ),
  );
  register_post_type('Promesse', $args );
}

/**
 * Create a new custom post type
**/

add_action('init', 'create_custom_post_type_meeting');

function create_custom_post_type_meeting() {

  $labels = array(
    'name'               => 'Events',
    'singular_name'      => 'Event',
    'all_items'          => 'Toutes les events',
    'add_new'            => 'Ajouter un event',
    'add_new_item'       => 'Ajouter un event',
    'edit_item'          => "Modifier le event",
    'new_item'           => 'Nouveau event',
    'view_item'          => "Voir le event",
    'search_items'       => 'Trouver un event',
    'not_found'          => 'Pas de résultat',
    'not_found_in_trash' => 'Pas de résultat',
    'parent_item_colon'  => 'Event parents:',
    'menu_name'          => 'Event',
  );

  $args = array(
    'labels'              => $labels,
    'hierarchical'        => false,
    'supports'            => array( 'title','thumbnail','editor', 'comments' ),
    'public'              => true,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'menu_position'       => 5,
    'menu_icon'           => 'dashicons-megaphone',
    'show_in_nav_menus'   => true,
    'publicly_queryable'  => true,
    'exclude_from_search' => false,
    'has_archive'         => false,
    'query_var'           => true,
    'can_export'          => true,
    'rewrite'             => array(
      'slug'                => 'event'
    ),
  );
  register_post_type('event', $args );
}

<?php
/**
 * Create a new role
**/
add_action('after_switch_theme', 'create_new_role');

function create_new_role() {
  add_role(
    'internaute',
    'Internaute',
    [
        'edit_annonce'    => true,
        'read_annonce'    => true,
        'create_annonces' => true,
    ]
  );

  $role = get_role('administrator');
  $role->add_cap('create_annonces');
  $role->add_cap('edit_annonce');
  $role->add_cap('read_annonce');
}

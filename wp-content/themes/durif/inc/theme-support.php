<?php
/**
 * Add thumbnails
**/
add_action('after_setup_theme', 'thumbnails_theme_support');
function thumbnails_theme_support() {
  add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'images_sizes');
function images_sizes() {
  add_image_size('thumbnail_annonce_small', 100, 100, true);
  add_image_size('thumbnail_home', 400, 300, true);
  add_image_size('thumbnail_annonce_full', 1600, 600, false);
  add_image_size('thumbnail_slide', 1600, 800, true);
}

/**
 * Menu
**/
add_action('after_setup_theme', 'menu_du_themes_header');
function menu_du_themes_header() {
  register_nav_menu('header', 'Menu entête');
}

add_action('after_setup_theme', 'menu_du_themes_footer');
function menu_du_themes_footer() {
  register_nav_menu('footer', 'Menu de pied de page');
}

/**
 * Language
**/
add_action('after_setup_theme', 'traduction_site');
function traduction_site() {
  load_theme_textdomain('durif', get_template_directory() . '/languages');
}

/**
 * Admin bar
**/
add_filter('show_admin_bar' , 'wpc_show_admin_bar');
function wpc_show_admin_bar() {
	return false;
}

/**
 * Search bar
**/
// function add_search_box($items, $args) {
//
//         ob_start();
//         get_search_form();
//         $searchform = ob_get_contents();
//         ob_end_clean();
//         //
//         // <ul class="right nav-wrapper">
//         //   <form>
//         //     <div class="input-field">
//         //       <input id="search" type="search" required>
//         //       <label for="search"><i class="material-icons">search</i></label>
//         //       <i class="material-icons">close</i>
//         //     </div>
//         //   </form>
//         // </ul>
//
//         $items .= '<li>' . $searchform . '</li>';
//         return $items;
// }
// add_filter('wp_nav_menu_items','add_search_box', 10, 2);

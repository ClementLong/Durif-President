<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <!-- Appel du fichier style.css de notre thème -->
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- Execution de la fonction wp_head() obligatoire ! -->
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <header id="header">
          <nav class="blue-grey lighten-1">
            <div class="nav-wrapper">
              <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
              <ul class="right">
                <li>
                <?php pll_the_languages(array('show_flags'=>1,'show_names'=>0)); ?>
                </li>
              </ul>
              <ul class="right nav-wrapper">
                <form role="search" method="get" id="searchform" class="searchform" action="http://localhost:8888/Hetic/Wordpress/durif/">
          				<div class="input-field">
                    <input value="" name="s" id="search" required type="search">
                    <label for="search"><i class="material-icons">search</i></label>
                    <i class="material-icons">close</i>
          				</div>
          			</form>
              </ul>
                <?php
                $args=array(
                    'theme_location' => 'header', // nom du slug
                    'menu' => 'header_fr', // nom à donner cette occurence du menu
                    'menu_class' => 'hide-on-med-and-down', // class à attribuer au menu
                    'container' => 'ul',
                );
                wp_nav_menu($args);
                ?>
                <?php
                $args=array(
                    'theme_location' => 'header', // nom du slug
                    'menu' => 'header_fr', // nom à donner cette occurence du menu
                    'menu_id' => 'mobile-demo', // class à attribuer au menu
                    'menu_class' => 'side-nav', // class à attribuer au menu
                    'container' => 'ul',
                );
                wp_nav_menu($args);
                ?>
            </div>
          </nav>
        </header>

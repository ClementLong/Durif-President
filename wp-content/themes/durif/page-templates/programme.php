<?php

/*
Template Name: Progamme
*/

get_header(); //appel du template header.php  ?>

<div class="container programme">
  <h3><?php _e('Electoral program', 'durif'); ?></h3>
  <section class="row meeting">
    <article class="col s12 m12 l12">
      <ul class="collapsible popout" data-collapsible="accordion">
      <?php
      $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
      $args=array(
        'post_type' => 'promesse',
        'posts_per_page' => 20,
        );
      $the_query = new WP_Query( $args );

      // The Loop
      if ( $the_query->have_posts() ) {
        while ( $the_query->have_posts() )
        {
          $the_query->the_post();
      ?>
        <li>
          <div class="collapsible-header"><?php the_title(); ?></div>
          <div class="collapsible-body">
            <p>
              <?php the_field('slogan'); ?> <br>
              <?php the_field('description'); ?>
            </p>
          </div>
        </li>
        <?php
        }
        /* Restore original Post Data */
        wp_reset_postdata();
        } else {
          echo 'Pas de meeting prévus';
        }
        ?>
      </ul>
    </article>
  </section>
</div>

<?php get_footer(); ?>

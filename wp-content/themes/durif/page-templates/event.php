<?php
/*
Template Name: Event
*/

get_header(); ?>

<section class="container event">
  <h3><?php _e('Next event', 'durif'); ?></h3>
  <div class="row meeting">
      <?php
      $args=array(
        'post_type' => 'event',
        'posts_per_page' => 6,
      );
      $the_query = new WP_Query( $args );

      // The Loop
      if ( $the_query->have_posts() ) {
        while ( $the_query->have_posts() )
        {
          $the_query->the_post();
          $date = new DateTime(get_field('date'));

          if(get_field('category') == 'meeting') {
          ?>
            <article class="col s12 m6 l6">
              <div class="card blue-grey lighten-1">
                <div class="card-content white-text">
                  <span class="card-title"><?php the_title(); ?></span>
                  <div class="date">Date : <?= $date->format('d/m/Y'); ?></div>
                  <div class="lieu">Lieu : <?php the_field('lieu'); ?></div>
                  <p class="apercus"><?php the_field('description'); ?></p>
                </div>
              </div>
            </article>
            <?php
          } else {
            ?>
            <article class="col s12 m6 l6">
              <div class="card blue-grey lighten-1">
                <div class="card-content white-text">
                  <span class="card-title"><?php the_title(); ?></span>
                  <div class="date">Date : <?= $date->format('d/m/Y h:m'); ?></div>
                  <p class="apercus"><?php the_field('description'); ?></p>
                </div>
                <div class="card-action">
                  <a href="<?php the_field('url'); ?>">Voir le direct</a>
                </div>
              </div>
            </article>
            <?php
          }
        }
        /* Restore original Post Data */
        wp_reset_postdata();
        } else {
          echo 'Pas d\'event prévus';
        }
        ?>
  </div>
</section>

<?php get_footer(); ?>

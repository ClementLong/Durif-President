<?php

get_header(); //appel du template header.php  ?>

<div class="parallax-container">
  <div class="parallax">
    <img src="<?= get_template_directory_uri(); ?>/images/background.jpg">
    <h1 class="center intro">Sylvain Durif</h1>
  </div>
</div>
<div class="container front-page">
  <section class="row article">
    <h4><?php _e('Last article', 'durif'); ?></h4>
      <?php
      $args=array(
        'post_type' => 'post',
        'posts_per_page' => 3,
        'paged' => $paged
        );
      $the_query = new WP_Query( $args );
      // The Loop
      if ( $the_query->have_posts() ) {
        while ( $the_query->have_posts() )
        {
            $the_query->the_post();
            $date = new DateTime(get_field('date'));
      ?>
        <article class="col s12 m6 l4">
          <div class="card blue-grey lighten-1">
            <div class="card-image">
              <img src="<?php the_field('images_den_tête'); ?>">
              <span class="card-title"><?php the_title(); ?></span>
            </div>
            <div class="card-content white-text">
              <p class="apercus"><?php the_field('aperçus'); ?></p>
            </div>
            <div class="card-action">
              <a href="<?= get_permalink(); ?>"><?php _e('More information', 'durif'); ?></a>
            </div>
          </div>
        </article>
        <?php
        }
        /* Restore original Post Data */
        wp_reset_postdata();
        } else {
          echo 'Aucun article';
        }
        ?>
  </section>
  <section class="row meeting">
    <div class="col s12 m12 l12 center">
      
    </div>
  </section>
  <section class="row meeting">
    <h4><?php _e('Next event', 'durif'); ?></h4>
    <?php
    $args=array(
      'post_type' => 'event',
      'posts_per_page' => 2,
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
  </section>
</div>

<?php get_footer(); ?>

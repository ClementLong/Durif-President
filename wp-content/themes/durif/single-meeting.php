<?php

get_header(); //appel du template header.php  ?>

<div class="container front-page">
  <section class="row meeting">
    <h4>Prochain meeting</h4>
      <?php
      $args=array(
        'post_type' => 'meeting',
        'posts_per_page' => 1,
        );
      $the_query = new WP_Query( $args );

      // The Loop
      if ( $the_query->have_posts() ) {
        while ( $the_query->have_posts() )
        {
            $the_query->the_post();
            {
              echo '<div class="responsiveImage">';
              the_post_thumbnail("thumbnail_annonce");
              echo '</div>';
            }
      ?>
        <article class="col s12 m6 l6 center-align">
          <span class="card-title"><?php the_title(); ?></span>
          <div class="date">Date : <?php the_field('date'); ?></div>
          <div class="lieu">Lieu : <?php the_field('lieu'); ?></div>
          <p class="apercus"><?php the_field('description'); ?></p>
        </article>
        <?php
        }
        /* Restore original Post Data */
        wp_reset_postdata();
        } else {
          echo 'Pas de meeting prévus';
        }
        ?>
  </section>
</div>

<?php get_footer(); ?>

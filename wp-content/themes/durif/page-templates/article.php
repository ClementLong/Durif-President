<?php
/*
Template Name: Article
*/

get_header(); //appel du template header.php  ?>

<div class="container article-main">
  <h3><?php _e('Post', 'durif'); ?></h3>
  <section class="row selection">
    <div class="col s12 m12 l12">
      <a class="selection-button waves-effect waves-light btn blue-grey lighten-1" data-attr="article"><?php _e('Post', 'durif'); ?></a>
      <a class="selection-button waves-effect waves-light btn blue-grey lighten-1" data-attr="video"><?php _e('Video', 'durif'); ?></a>
      <a class="selection-button waves-effect waves-light btn blue-grey lighten-1" data-attr="interview"><?php _e('Interview', 'durif'); ?></a>
    </div>
  </section>
  <section class="row article">
      <?php
      $args=array(
        'post_type' => 'post',
        'posts_per_page' => 6,
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
          echo 'Pas de meeting prévus';
        }
        ?>
        <div class="col s12 m12 l12">
          <?php wp_pagenavi(['query' => $the_query]); ?>
        </div>
  </section>
</div>


<?php get_footer(); ?>

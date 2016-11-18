<?php
$args=array(
  'post_type' => 'post',
  'posts_per_page' => 6,
  'category_name' => $term_id,
  'paged' => $paged
  );
$the_query = new WP_Query( $args );

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
        <a href="<?= get_permalink(); ?>">Plus d'information</a>
      </div>
    </div>
  </article>
  <?php
  }

  wp_reset_postdata();
  } else {
    echo 'Pas de meeting prévus';
  }

  ?>
  <div class="col s12 m12 l12">
    <?php wp_pagenavi(['query' => $the_query]); ?>
  </div>

<?php
/*
Template Name: Article
*/

get_header(); //appel du template header.php  ?>

<div class="container article-read">
  <h2 class="center"><?php the_title(); ?></h2>
  <section class="row">
    <?php
		while ( have_posts() ) : the_post();
    ?>
      <div class="col s0 m1 l2"></div>
      <div class="col s12 m10 l8">
        <?php the_content(); ?>
      </div>
      <div class="col s0 m1 l2"></div>
      <?php
		endwhile;
    ?>
  </section>
  <!-- <section class="row">
    <div class="col s12 m6 l6">
      <div class="card blue-grey darken-1">
        <a href="#"><?php _e('Previous post', 'durif'); ?></a>
      </div>
    </div>
    <div class="col s12 m6 l6">
      <div class="card blue-grey darken-1">
        <a href="#"><?php _e('Next post', 'durif'); ?></a>
      </div>
    </div>
  </section> -->
</div>


<?php get_footer(); ?>

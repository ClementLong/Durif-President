<?php
/*
Template Name: Dons
*/

get_header(); //appel du template header.php  ?>

<div class="container dons">
  <h3><?php _e('Donations', 'durif'); ?></h3>
  <section class="form">
      <div class="row">
        <div class="col s12 m12 l4">
          <div class="card blue-grey lighten-1">
            <?php the_field('formulaire'); ?>
          </div>
        </div>
        <div class="col s12 m12 l8">
          <div class="center">
            <h4><?php the_field('sous_titre'); ?></h4>
            <p><?php the_field('information'); ?></p>
          </div>
        </div>
      </div>
  </section>
</div>

<?php get_footer(); ?>

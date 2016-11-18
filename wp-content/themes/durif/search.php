<?php

get_header(); ?>

<div class="container front-page">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'twentyfifteen' ), get_search_query() ); ?></h1>
			</header>
			<ul class="collection">

			<?php
			while ( have_posts() ) : the_post(); ?>

					<li class="collection-item"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
      <?php
			endwhile;

		else :
			_e('No result', 'durif');
		endif;
		?>
	</ul>

</div>
<?php get_footer(); ?>

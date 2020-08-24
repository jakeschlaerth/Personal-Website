<?php
/**
 * Single Template
 */
get_header(); ?>

	<section class="page">
		<div class="wrap">

			<div class="event-container">
			
				<?php while ( have_posts() ) : the_post(); ?>
					<div class="event">
					  	<h1><?php the_title(); ?></h1>
					  	<?php the_content(); ?>
					</div>
				<?php endwhile; ?>
				<?php wp_reset_query(); ?>

			</div>

		</div> <!-- end of .wrap -->
	</section> <!-- end of #homepage -->

<?php get_footer();
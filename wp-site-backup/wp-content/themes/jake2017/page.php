<?php
/**
 * Front Page Template
 */
get_header(); ?>

	<section class="page">
		<div class="wrap">

			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; ?>

		</div> <!-- end of .wrap -->
	</section> <!-- end of #homepage -->

<?php get_footer();
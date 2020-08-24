<?php
/**
 * Template Name: About Page
 */
get_header(); ?>

	<section class="page">
		<div class="wrap">

			<?php while ( have_posts() ) : the_post(); ?>
				<div class="featured-img"><?php the_post_thumbnail(); ?></div>
				<?php the_content(); ?>
			<?php endwhile; ?>

		</div> <!-- end of .wrap -->
	</section> <!-- end of #homepage -->

<?php get_footer();
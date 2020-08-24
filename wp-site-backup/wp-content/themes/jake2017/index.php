<?php
/**
 * The main template file
 */

get_header(); ?>

	<section class="page" id="content">
		<div class="wrap">

			<section class="music">

			<?php while ( have_posts() ) : the_post(); ?>
				<div class="music-piece">
				  	<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
				  	<?php the_content(); ?>
				</div>

			<?php endwhile; ?>
			<?php wp_reset_query(); ?>

			</section>

		</div> <!-- end of .wrap -->
	</section> <!-- end of #homepage -->

<?php get_footer();
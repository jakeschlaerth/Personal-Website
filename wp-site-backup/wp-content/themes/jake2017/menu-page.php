<?php
/**
 * Template Name: Page with Menu
 */
get_header(); ?>

	<section class="page with-menu">
		<div class="wrap">

			<div class="main-content">
				<?php while ( have_posts() ) : the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; ?>
			</div>

			<div class="side-menu">

				<?php
				if ( is_page('performance-groups') || '112' == $post->post_parent ) :
					dynamic_sidebar( 'groups_sidebar' );
				endif;
				?>

			</div> <!-- end of .side-menu -->

		</div> <!-- end of .wrap -->
	</section> <!-- end of #homepage -->

<?php get_footer();
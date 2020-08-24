<?php
/**
 * Single Template
 */
get_header(); ?>
<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
$image = $image[0]; ?>

	<section class="page" id="content">

		<div class="page-header">
			<?php the_post_thumbnail(); ?>
		</div>

		<div class="wrap main-content">
			
				<?php while ( have_posts() ) : the_post(); ?>
					<div class="event">
					  	<h1><?php the_title(); ?></h1>
					  	<?php the_content(); ?>

					  	<div class="extra">
					  		<?php the_field('extra_content'); ?>
					  	</div>
					</div>
				<?php endwhile; ?>
				<?php wp_reset_query(); ?>

		</div> <!-- end of .wrap -->
	</section> <!-- end of #homepage -->

<?php get_footer();
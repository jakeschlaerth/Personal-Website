<?php
/**
 * Front Page Template
 */
get_header(); ?>
<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
$image = $image[0]; ?>

	<section class="page" id="home">

		<div class="page-header" style="background: url(<?php echo $image;?>) #16161d no-repeat center center; background-size: cover">
		</div>

		<div class="wrap" id="content">

			<?php while ( have_posts() ) : the_post(); ?>

				<div class="main-content">
					<?php the_content(); ?>
				</div>

			<?php endwhile; ?>

			<div class="clear"></div>

		</div> <!-- end of .wrap -->
	</section> <!-- end of #homepage -->

<?php get_footer();
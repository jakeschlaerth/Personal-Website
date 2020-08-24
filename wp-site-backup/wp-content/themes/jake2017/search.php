<?php
/**
 * Search Results
 */
get_header(); ?>

	<section class="page">
		<div class="wrap">

			<div class="filter">

				<?php dynamic_sidebar( 'music_type_filter' ); ?>

			</div> <!-- end of .filter -->

			<section class="music js-masonry"
  						data-masonry-options='{ "itemSelector": ".music-piece" }'>
			<?php
			$args = array( 'post_type' => 'music-pieces', 'posts_per_page' => 10 );
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post(); ?>
					<div class="music-piece wow fadeIn" data-wow-delay="0.4s">
				  		<h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
				  		<?php the_content(); ?>
				  	</div>
				<?php endwhile;
			?>
			</section>

		</div> <!-- end of .wrap -->
	</section> <!-- end of #homepage -->

<?php get_footer();
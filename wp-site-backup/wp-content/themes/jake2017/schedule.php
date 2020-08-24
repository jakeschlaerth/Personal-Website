<?php
/**
 * Template Name: Schedule Page
 */
get_header(); ?>

	<section class="page">
		<div class="wrap">

			<div class="event-container">
			
				<?php
					$temp = $wp_query; 
					$wp_query = null; 
					$wp_query = new WP_Query(); 
					$wp_query->query('showposts=5&post_type=events'.'&paged='.$paged); 

					while ($wp_query->have_posts()) : $wp_query->the_post(); 
				?>
					<div class="event">
					  	<h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
					  	<h2><?php echo types_render_field("event-date", array()); ?></h2>
					  	<h3><?php echo types_render_field("event-location", array()); ?></h3>
					  	<?php the_excerpt(); ?>
					</div>
				<?php endwhile; ?>
				<?php wp_reset_query(); ?>

			<div class="nav-previous alignleft"><?php next_posts_link( 'Previous Events' ); ?></div>
			<div class="nav-next alignright"><?php previous_posts_link( 'Newer Events' ); ?></div>

			</div>

			<div class="side-menu">

				<h2>Schedule</h2>

				<?php
				$args = array( 'post_type' => 'events', 'posts_per_page' => 5 );
					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post(); ?>
					<div class="event">
					  	<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
					  	<h4><?php echo types_render_field("event-date", array()); ?></h4>
					  	<h4><?php echo types_render_field("event-location", array()); ?></h4>
					</div>
				<?php endwhile; ?>
				<?php wp_reset_query(); ?>

			</div> <!-- end of .side-menu -->

		</div> <!-- end of .wrap -->
	</section> <!-- end of #homepage -->

<?php get_footer();
<?php
/**
 * Template Name: Page project 
 
 */
?>

<!-- OnGoing Projects -->
<div class="page__projects">
	<h3>Projects</h3>
	<div class="page__projects__list">
			<?php 
				$args = array( 'post_type' => 'Ongoing Projects' );
				$the_query = new WP_Query( $args ); 
				?>
				<?php if ( $the_query->have_posts() ) : ?>
					<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
					<a class="col" href="<?php echo esc_url( get_permalink() ) ?>"><?php the_title(); ?></a>
					
					<?php endwhile; else:  ?>
				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
				<?php  endif; ?>
	</div>
			
		</div>
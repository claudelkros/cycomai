<?php
/**
 * Template Name: Published Articles
 
 */
?>

<!-- Published Articles -->
<div class="page__published__articles">
	<h3>Published articles</h3>
			<?php 
				$args = array( 'post_type' => 'Published Articles' );
				$the_query = new WP_Query( $args ); ?>
				<?php if ( $the_query->have_posts() ) : ?>
					<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
					<a class="col" href="<?php echo esc_url( get_permalink() ) ?>"><?php the_title(); ?></a>
					<h5 class="summary"><?php the_excerpt(); ?></h5>
					
					<?php endwhile; else:  ?>
				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
				<?php  endif; ?>
		</div>
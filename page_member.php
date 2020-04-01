<?php
/**
 * Template Name: Page members
 
 */
?>

<!-- Members -->

<div class="members-area">
	<h3>Teachers</h3>

<div class="page__enseignant">
	<?php 
		$args = array( 'post_type' => 'Enseignant' );
		$the_query = new WP_Query( $args );
		?>
		<?php if ( $the_query->have_posts() ) : ?>
			<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			<div class="wrapper">
				<div class="profile">
					<?php the_post_thumbnail(); ?>
				</div>
				<a class="col" href="<?php echo esc_url( get_permalink() ) ?>"><?php the_title(); ?></a>
			</div>
			<?php endwhile; else:  ?>
		<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php  endif; ?>
</div>

<h3>PhD Students</h3>
<div class="page__phd">
	<?php 
		$args = array( 'post_type' => 'Phd_Student' );
		$the_query = new WP_Query( $args ); 
		?>
		<?php if ( $the_query->have_posts() ) : ?>
			<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			<div class="wrapper">
				<div class="profile">
					<?php the_post_thumbnail(); ?>
				</div>
				<a class="col" href="<?php echo esc_url( get_permalink() ) ?>"><?php the_title(); ?></a>
			</div>
			<?php endwhile; else:  ?>
		<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php  endif; ?>
</div>

<h3>Master's students</h3>

<div class="page__masters">
	<?php 
		$args = array( 'post_type' => 'Masters_Student' );
		$the_query = new WP_Query( $args ); 
		?>
		<?php if ( $the_query->have_posts() ) : ?>
			<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			<div class="wrapper">
				<div class="profile">
					<?php the_post_thumbnail(); ?>
				</div>
				<a class="col" href="<?php echo esc_url( get_permalink() ) ?>"><?php the_title(); ?></a>
			</div>
			<?php endwhile; else:  ?>
		<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php  endif; ?>
</div>
</div>

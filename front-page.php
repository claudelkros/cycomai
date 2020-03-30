<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Genese
 * @since 1.0
 */

?>
<div class="about_front--page">
	<?php $value = get_field('front')?>
	<div class="title">
		<p><?php echo $value['title']?></p>
	</div>
	<div class="sub__title">

		<div class="sub__title--primary">
			<h3><?php echo $value['sub_title']?></h3>
			<p><?php echo $value['description']?></p>
		</div>

		<img src="<?php echo $value['image']['url']?>" alt="">
	</div>
</div>

<div class="research_front--page">
	<?php $value = get_field('research')?>

	<div class="sub__title">
		<img src="<?php echo $value['image']['url']?>" alt="">

		<div class="sub__title--primary">
			
			<ul>
				<p><?php echo $value['title']?></p>
				<li><?php echo $value['list_1']?></li>
				<li><?php echo $value['list_2']?></li>
				<li><?php echo $value['list_3']?></li>
				<li><?php echo $value['list_4']?></li>
				<li><?php echo $value['list_5']?></li>
				<li><?php echo $value['list_6']?></li>
			</ul>
		</div>

	</div>
</div>
<div class="title--posts">
	<p>Recent news</p>
</div>
<div class="front__page--post">
	<?php $the_query = new WP_Query( 'posts_per_page=3' ); ?>
	<?php if (have_posts() ) : ?>

		<?php if ( is_home() && ! is_front_page() ) : ?>
			<header>
				<h1 class="page-title screen-reader-text">
					<?php single_post_title(); ?>
				</h1>
			</header>
		<?php endif; ?>

		
			<?php
			// Start the loop.
			while ( $the_query->have_posts() ) :
				$the_query->the_post(); ?>
				<div class="front__page--post--list">
					<?php
					/*
					* Include the Post-Format-specific template for the content if it's a post, otherwise include the Post-Type-specific template.
					*/
					// get_template_part(
					// 	'template-parts/post/item',
					// 	get_post_type() !== 'post' ? get_post_type() : get_post_format()
					// );
					the_title(
						sprintf(
							'<h2 class="entry-title" itemprop="headline"><a href="%s" rel="bookmark" itemprop="url">',
							esc_url( get_permalink() )
						),
						'</a></h2>'
					);
					?>
					<div class="entry-content" itemprop="description">
						<?php the_post_thumbnail(); ?>
					</div><!-- .entry-content -->
				</div>
				<?php
				// End the loop.
			endwhile;
			
			?>
		</div>
		
		<div class="title--posts">
			<p>Ongoing Porjects</p>
		</div>

		<!-- OnGoing Projects -->
		<div class="front__page__projects flex-grid">
			<?php 
				$args = array( 'post_type' => 'Ongoing Projects', 'posts_per_page' => 6 );
				$the_query = new WP_Query( $args ); 
				?>
				<?php if ( $the_query->have_posts() ) : ?>
					<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
					<a class="col" href="<?php echo esc_url( get_permalink() ) ?>"><?php the_title(); ?></a>
					
					<?php endwhile; else:  ?>
				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
				<?php  endif; ?>
		</div>

		<?php
		// Previous/next page navigation.
		the_posts_pagination(
			array(
				'prev_text'          => __( 'Previous page', 'genese' ),
				'next_text'          => __( 'Next page', 'genese' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'genese' ) . ' </span>',
			)
		);

		// If no content, include the "No posts found" template.
	else :
		get_template_part( 'content', 'none' );

	endif;
	?>
</div>

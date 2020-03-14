<?php
/**
 * The header template file
 *
 * This is the content displayed on top of your content.
 * It is included on all the template files.
 *
 * @package WordPress
 * @subpackage Genese
 * @since 1.0
 */

?>
	<header id="header" class="site__header" role="banner" itemscope itemtype="http://schema.org/WPHeader" style='background:url("<?php echo get_template_directory_uri()?>./resources/assets/src/sass/layouts/header.jpg");background-position: center;background-size: cover;background-repeat: no-repeat;'>
		<div class="site-header--primary">
			<hgroup class="header__title">
				<h1 itemprop="name">
					<?php the_custom_logo() ?>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
				</h1>
				<p itemprop="description">
					<?php bloginfo( 'description' ); ?>
				</p>
			</hgroup>
			<div class="header__link">
				<?php
				wp_nav_menu ( array (
					'theme_location' => 'primary' ,
					'menu_class' => 'my_primary_class',
					'menu_id' => 'my_primary_class',
				) );
				?>
			</div>
		</div>

		<!-- Add Animation here -->

		
	</header><!-- .site__header -->
<div class="space__site">

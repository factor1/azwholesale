<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Arizona
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'arizona' ); ?></a>

	<header id="masthead" class="site-header">
	    <div class="navfull">
	    <div class="header-inner">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$arizona_description = get_bloginfo( 'description', 'display' );
			if ( $arizona_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $arizona_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->
		<div class="header-right">

			<div class="search-container">
                    <form action="/search.php">
                      <input type="text" placeholder="Search.." name="search">
                      <button type="submit">Submit</button>
                    </form>
                  </div>
		<nav id="site-navigation" class="main-navigation">
				<a class="search-box"><img src="/wp-content/uploads/2022/07/search-icon.svg"></a>
			
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><img src="/wp-content/uploads/2022/07/toggle.svg"></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
		<?php //echo do_shortcode('[google-translator]'); ?>
		</div>
		</div></div>
	</header><!-- #masthead -->

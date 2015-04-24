<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Duunissa WP Theme
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">


<script src='<?php bloginfo("template_url"); ?>/js/fastclick.js'></script>
<script>
	if ('addEventListener' in document) {
    document.addEventListener('DOMContentLoaded', function() {
        FastClick.attach(document.body);
    }, false);
}
</script>
</script>
<script src="//use.typekit.net/xhz0hcz.js"></script>
<script>try{Typekit.load();}catch(e){}</script>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	
	<header id="masthead" class="site-header" role="banner">
		<a class="brand-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
			<div class="site-branding">
				<h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
			</div><!-- .site-branding -->
		</a>
		<a href="#" class="nav-button">Info</a>
		<div class="clearfix"></div>
	</header><!-- #masthead -->

	<div class="nav-panel hidden">
	<p class="site-description"><?php bloginfo( 'description' ); ?></p>
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
	</div>

	<div id="content" class="site-content">

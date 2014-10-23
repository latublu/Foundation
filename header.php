<?php
/**
 * Header
 *
 * Setup the header for our theme
 *
 * @package WordPress
 * @subpackage Foundation, for WordPress
 * @since Foundation, for WordPress 5.0
 */
?>

<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->

<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<!-- Set the viewport width to device width for mobile -->
<meta name="viewport" content="width=device-width" />

<title><?php wp_title(); ?></title>

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
					
	<?php
	include get_template_directory().'/snippets/top-banner.php';
	?>

	<header class="site-header" <?php $header_image = get_header_image(); if ( ! empty( $header_image ) ) : ?> style="background:url('<?php echo esc_url( $header_image ); ?>');" <?php endif; ?>>
		
		<div class="row">
			
			<div class="small-12 medium-8 columns small-text-center medium-text-left">
				
				<h1>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo('name'); ?></a>
				</h1>
				
			</div>
			
			<div class="small-12 medium-4 columns">
				
				<?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'menu_class' => 'menu header', 'container' => 'div', 'container_class' => 'container header clearfix', 'fallback_cb' => 'foundation_page_menu', 'walker' => new foundation_navigation() ) ); ?>
			
			</div>
			
		</div>
		
	</header>
	
	<nav class="top-bar" data-topbar role="navigation">
		<ul class="title-area">
			<li class="name">
				&nbsp;
			</li>
			<li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
		</ul>
		<section class="top-bar-section">
			<?php wp_nav_menu( array( 'theme_location' => 'top-nav-menu', 'menu_class' => 'left', 'container' => '', 'fallback_cb' => 'foundation_page_menu', 'walker' => new foundation_navigation() ) ); ?>
		</section>
	</nav>

	<div id="breadcrumbs" class="row">
		<div class="medium-12 columns">
			
			<ul class="breadcrumbs">
			
				<li>
					&nbsp;
				</li>
			
			</ul><!-- breadcrumbs -->
			
		</div>
	</div><!-- breadcrumbs row -->

<!-- Begin Page -->

<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package piebco
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<!-- Basic Page Needs -->
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<title>PIEB | Primera Iglesia Evangelica Bautista</title>
  <!-- Mobile Specific Metas -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Primera Iglesia Evangelica Bautista">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_url'); ?>/images/favicon.png" />
	<link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_url'); ?>/images/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_url'); ?>/images/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_url'); ?>/images/favicon-16x16.png">
	<link rel="mask-icon" href="<?php bloginfo('template_url'); ?>/images/safari-pinned-tab.svg" color="#745bd5">
	<meta name="msapplication-TileColor" content="#603cba">
	<meta name="theme-color" content="#fbfbfb">

	<?php wp_head(); ?>
</head>

<body id="home">
<?php wp_body_open(); ?>

<div id="page" class="site">
	<!--
	Start Preloader -->
	<div class="preloader">
		<div class="sk-cube-grid">
			<div class="sk-cube sk-cube1"></div>
			<div class="sk-cube sk-cube2"></div>
			<div class="sk-cube sk-cube3"></div>
			<div class="sk-cube sk-cube4"></div>
			<div class="sk-cube sk-cube5"></div>
			<div class="sk-cube sk-cube6"></div>
			<div class="sk-cube sk-cube7"></div>
			<div class="sk-cube sk-cube8"></div>
			<div class="sk-cube sk-cube9"></div>
		</div>
	</div>
	<!-- End Preloader -->

	<!-- <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'piebco' ); ?></a> -->

	<!--
	Hero
	==================================== -->	
	<?php 

		if ( is_front_page() ) : ?>
		<section class="hero-area">
			<div class="block">
				<p>¡Bienvenidos a la PIEB Coatza!</p>
				<h1>Una Iglesia, una familia, una misión</h1>
				<!-- <div class="hero"> -->
					<a href="#schedule" class="btn-hero smooth-scroll">
						<!-- Horario de reuniones  -->
						<i class="bi bi-arrow-down"></i>
					</a>
					
				<!-- </div> -->
			</div>
		</section>
	<?php endif; ?>

	<!-- 
	Sticky Navigation
	==================================== -->
	<header id="navigation" class="navigation shadow-sm site-header">
	<div class="container">
		<div class="w-100">

			<nav class="navbar navbar-expand-lg navbar-light px-0">
				<div class="container-fluid">

					<a class="navbar-brand logo" href="<?php echo esc_url( home_url( '/' ) ); ?>"><span class="color">PIEB</span>Coatza</a>

					<button class="navbar-toggler mobile-nav-toggle" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					
					<?php
					wp_nav_menu( array(
						'theme_location'  => 'primary',
						'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
						'container'       => 'div',
						'container_class' => 'collapse navbar-collapse justify-content-lg-end justify-content-md-center',
						'container_id'    => 'navbarToggler',
						'menu_class'      => 'navbar-nav navigation-menu align-items-center ml-auto',
						'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
						'walker'          => new WP_Bootstrap_Navwalker(),
				) );
					?>

				</div>
			</nav>

		</div>
	</div>

	</header> <!--End Sticky Navigation -->
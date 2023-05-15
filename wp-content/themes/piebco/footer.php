<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package piebco
 */

?>
	<!-- <footer id="colophon" class="site-footer"> -->
<!-- start Footer
========================================== -->
		<footer id="footer">
			<div class="container">
				<div class="row wow fadeInUp" data-wow-duration="500ms">
					<div class="col-lg-12">
						<!-- Footer Social Links -->
						<div class="social-icon">
							<ul class="list-inline">
								<li class="list-inline-item"><a href="https://facebook.com/iglesiabautistacoatza"><i class="bi bi-facebook"></i></a></li>
								<li class="list-inline-item"><a href="https://www.youtube.com/channel/UCxR_40_lFr1TMIdnNYnpmVA"><i class="bi bi-youtube"></i></a></li>
								<li class="list-inline-item"><a href="mailto:iglesiabautistacoatza@gmail.com"><i class="bi bi-envelope-at"></i></a></li>
							</ul>
						</div>
						<!--/. End Footer Social Links -->
						<!-- copyright -->
						<div class="copyright text-center">
							<!-- logo -->
							<a class="navbar-brand logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-white.png" alt="<?php esc_attr_e( 'Home Page', 'textdmomain' );?>" />
							</a>
							<!-- /logo -->
							<p class="mt-3">Designed &amp; Developed by <a href="https://vianydev.github.io/">vianydev ☕️</a></p>
						</div>
					</div> 
				</div> 
			</div> 
		</footer> 

	<?php wp_footer(); ?>
	</body>
</html>


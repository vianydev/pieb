<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package piebco
 */

get_header();
?>

	<main id="primary" class="site-main">

		<section class="error-404 not-found container">
			<header class="page-header">
				<h1 class="page-title text-center pt-5"><?php esc_html_e( '¡Ups! No pudimos encontrar esta pagina.', 'piebco' ); ?></h1>
			</header><!-- .page-header -->

			<div class="error-emoji">
				<i class="bi bi-emoji-frown"></i>
			</div>

			<div class="page-content text-center my-5">

				<?php

				the_widget( 'WP_Widget_Recent_Posts' );
				?>

			</div><!-- .page-content -->
		</section><!-- .error-404 -->

	</main><!-- #main -->

<?php
get_footer();

<?php
/**
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @package piebco
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php
			get_template_part( 'template-parts/content', 'page' );
		
		?>
	</main>

<?php
// get_sidebar();
get_footer(); ?>

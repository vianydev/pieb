<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package piebco
 */

get_header();
?>

<main id="primary" class="site-main">
	<!-- Start Blog Section
	=========================================== -->
	<section id="blog" class="section">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<!-- section title -->
					<div class="title text-left wow fadeInDown">
						<h2> Nuestro <span class="color">Blog</span></h2>
					</div>
					<!-- /section title -->
				</div>
					<?php
						if ( have_posts() ) :
							
						/* Start the Loop */
						while ( have_posts() ) : 
							the_post(); ?>	

							<article id="post-<?php the_ID(); ?>" class="wow fadeInUp shadow-sm" data-wow-duration="500ms">
								<div class="post-block row">
									<div class="post-img media-wrapper col-lg-6 col-md-12 order-lg-2 order-sm-1 px-0" >
										<img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), array( 500 , 200 )); ?>" class="card-img-top" alt="...">
									</div>	

									<div class="col-lg-6 col-md-12 order-lg-1 order-sm-2 p-4">
										<div class="entry-header">
											<?php the_title( '<h3 class="entry-title">', '</h3>' ); ?>
										</div>
										<div class="entry-content">
											<?php the_excerpt(); ?>
										</div>
										<a class="btn btn-transparent" href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark">Read more</a>
									</div>
									
								</div>
							</article>
							<?php ; endwhile; endif; ?>

			</div> <!-- end row -->
		</div> <!-- end container -->
	</section> <!-- end section -->

</main>
<?php
// get_sidebar();
get_footer();

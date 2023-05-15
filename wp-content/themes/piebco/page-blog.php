<?php
/**
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @package Piebco
 */
get_header();
?>

<main id="primary" class="site-main">
	<section id="blog" class="section">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<!-- section title -->
					<div class="title text-center wow fadeInDown">
						<h2> Mensajes y <span class="color">avisos</span></h2>
						<div class="border"></div>
					</div>
					<!-- /section title -->
				</div>
					<?php 
						if ( have_posts() ) :
							

						/* Start the Loop */
						// get_template_part( 'template-parts/content', get_post_type() );
						while ( have_posts() ) : 
							the_post(); ?>

							<article id="post-<?php the_ID(); ?>" class="col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="500ms">
								<div class="post-block">
									<div class="post-img media-wrapper" style="
										background: url('<?php echo get_the_post_thumbnail_url(get_the_ID(),'medium'); ?>');
										background-size: cover; ">
									</div>	
									<div class="content">
										<div class="entry-header">
											<?php the_title( '<h3 class="entry-title">', '</h3>' ); ?>
										</div>
										<div class="entry-content">
											<?php the_excerpt(); ?>
										</div>
										<a class="btn btn-blog" href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark">Read more</a>
									</div>
								</div>
							</article>
							<?php endwhile; endif; ?>

					<div class="col-12">
						<div class="all-post text-center">
							<a class="btn btn-secondary" href="<?php echo esc_url( home_url( '/blog' ) ); ?>">Ver más</a>
						</div>
					</div>
				</div> <!-- end row -->
			</div> <!-- end container -->
		</section> <!-- end section -->

</main><!-- #main -->

<?php
// get_sidebar();
get_footer();

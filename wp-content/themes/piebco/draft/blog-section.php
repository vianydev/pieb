
	<!-- Start Blog Section
	=========================================== -->
	<section id="blog" class="section">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<!-- section title -->
					<div class="title text-center wow fadeInDown">
						<h2>Últimas <span class="color">noticias</span></h2>
					</div>
					<!-- /section title -->
				</div>

				<?php
					$args = array( 'numberposts' => '3' );
					$recent_posts = wp_get_recent_posts( $args );
					foreach( $recent_posts as $recent ){
						the_post_thumbnail($recent['ID']);

						printf( '<div><a href="%1$s">%2$s</a></div>',
							esc_url( get_permalink( $recent['ID'] ) ),
							apply_filters( 'the_title', $recent['post_title'], $recent['ID'] )
						);
					}
				?>
</ul>
					<article id="post-<?php the_ID(); ?>" class="col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="500ms">
					<div class="post-block">
						<div class="post-img media-wrapper" style="
							background: url('<?php echo get_the_post_thumbnail_url(get_the_ID(),'medium'); ?>');
							background-size: cover; ">
						</div>	
						<div class="content">
							<div class="entry-header">
								<?php the_title(
									sprintf( '<h3 class="card-title"><a href="%s" rel="bookmark">', esc_attr( esc_url( get_permalink() ) ) ), '</a></h3>'
								); ?>
							</div>
							<div class="entry-content">
								<?php echo the_excerpt('10'); ?>
							</div>
							<a class="" href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark">Ver más</a>
						</div>
					</div>
				</article>

				<?php 
						$i= 0;
						if ( have_posts() ) :

						while ( have_posts() && $i < 3 ) : 
							the_post(); ?>

							<article id="post-<?php the_ID(); ?>" class="col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="500ms">
								<div class="post-block">
									<div class="post-img media-wrapper" style="
										background: url('<?php echo get_the_post_thumbnail_url(get_the_ID(),'medium'); ?>');
										background-size: cover; ">
									</div>	
									<div class="content">
										<div class="entry-header">
											<?php the_title(
												sprintf( '<h3 class="card-title"><a href="%s" rel="bookmark">', esc_attr( esc_url( get_permalink() ) ) ), '</a></h3>'
											); ?>
										</div>
										<div class="entry-content">
											<?php echo the_excerpt('10'); ?>
										</div>
										<a class="" href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark">Ver más</a>
									</div>
								</div>
							</article>
							<?php $i++; endwhile; endif; ?>


					<div class="col-12">
						<div class="all-post text-center">
							<a class="btn btn-secondary" href="<?php echo esc_url( home_url( '/blog' ) ); ?>">Ver más</a>
						</div>
					</div>
				</div> <!-- end row -->
			</div> <!-- end container -->
		</section> <!-- end section -->

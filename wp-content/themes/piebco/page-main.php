<?php
/**
 * Main template file
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @package piebco
 */

get_header();
?>
<main id="primary" class="site-main">
	<!--
	Start About Section
	==================================== -->
	<section id="about" class="about section">
		<div class="container">
			<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-6 text-center wow fadeInUp" data-wow-duration="500ms">
					<div class="title py-0">
						<h3>Somos una <span class="color">familia</span> con una <span class="color">misión</span></h3>
					</div>
					<h4>En la PIEB existimos para glorificar a Dios en todas las áreas de nuestra vida; anunciando la Buena Noticia, haciendo discípulos en nuestra familia, ciudad, y hasta lo último de la tierra. Así como sirviendo a nuestra comunidad.</h4>
				</div>
				<div class="col-md-3"></div>
			</div> 
		</div> 
	</section> 
	<!-- End section -->
	
	<!-- 
	Start Schedule Section
	==================================== -->
	<section id="schedule" class="bg-one section">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<!-- section title -->
					<div class="title text-center wow fadeIn" data-wow-duration="500ms">
						<h2>Nuestras <span class="color">Reuniones</span></h2>
					</div>
					<!-- /section title -->
				</div>
				<!-- Time Item -->
				<article class="col-xl-4 col-lg-12 wow fadeInUp schedule-zoom" data-wow-duration="500ms">
					<div class="schedule-block text-left">
						<div class="schedule-icon">
							<i class="bi bi-house-heart"></i>
						</div>
						<h3>Reunión General</h3>
						<div class="schedule-info-container">
							<div class="schedule-info">
								<i class="bi bi-calendar2"></i>
								<p>Domingo</p>
							</div>
							<div class="schedule-info">
								<i class="bi bi-clock"></i>
								<p>09:00 am</p>
								<i class="bi bi-geo-alt"></i>
								<p>Presencial</p>
							</div>
							<div class="schedule-info">
								<i class="bi bi-clock"></i>
								<p>12:00 pm</p>
								<i class="bi bi-geo-alt"></i>
								<p>Presencial y Virtual</p>
							</div>
						</div>
					</div>
				</article>

				<!-- Time Item -->
				<article class="col-xl-4 col-lg-12 wow fadeInUp schedule-zoom" data-wow-duration="500ms">
					<div class="schedule-block text-left">
						<div class="schedule-icon">
							<i class="bi bi-heart"></i>
						</div>
						<h3>Oración</h3>
						<div class="schedule-info-container">
							<div class="schedule-info">
								<i class="bi bi-calendar2"></i>
								<p>Miércoles</p>
							</div>
							<div class="schedule-info">
								<i class="bi bi-clock"></i>
								<p>06:00 pm</p>
								<i class="bi bi-geo-alt"></i>
								<p>Presencial y Virtual</p>
							</div>
						</div>
					</div>
				</article>

				<!-- Time Item -->
				<article class="col-xl-4 col-lg-12 wow fadeInUp schedule-zoom" data-wow-duration="500ms">
					<div class="schedule-block text-left">
						<div class="schedule-icon">
							<i class="bi bi-globe-europe-africa"></i>
						</div>
						<h3>Noches de reflexión</h3>
						<div class="schedule-info-container">
							<div class="schedule-info">
								<i class="bi bi-calendar2"></i>
								<p>Martes, Jueves y Viernes</p>
							</div>
							<div class="schedule-info">
								<i class="bi bi-clock"></i>
								<p>08:00 pm</p>
								<i class="bi bi-geo-alt"></i>
								<p>Virtual</p>
							</div>
						</div>
					</div>
				</article>
			</div>
		</div> 
	</section> <!-- End section -->

		<!--
	Start Call To VIDEO
	==================================== -->
	<section class="call-to-action section-sm bg-church">
		<div class="container block church-box">
			<div class="row">
				<div class="col-md-12 text-center">
					<div class="video-button">
						<a class="popup-video" href="https://www.youtube.com/watch?v=z1sDbX5nN84">
							<i class="bi bi-play-fill"></i>
						</a> 
					</div>
				</div>
			</div> <!-- End row -->
		</div> <!-- End container -->
	</section> 
	<!-- End section -->
	
	<!-- 
	Start Our Church 
	==================================== -->
	<section id="our-team" class="our-church bg-light section">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<!-- section title -->
					<div class="title text-center wow fadeInUp" data-wow-duration="500ms">
						<h2>Conoce nuestra <span class="color">Iglesia</span></h2>
					</div>
				</div>
				<!-- TRAINING -->
				<div class="col-md-4 text-center wow fadeInUp" data-wow-duration="500ms" data-wow-delay="250ms">
					<div class="our-church-box card surface">
						<!-- Start slider -->
						<div id="carousel-training" class="carousel slide">
							<div class="carousel-indicators">
								<button type="button" data-bs-target="#carousel-training" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
								<button type="button" data-bs-target="#carousel-training" data-bs-slide-to="1" aria-label="Slide 2"></button>
								<button type="button" data-bs-target="#carousel-training" data-bs-slide-to="2" aria-label="Slide 3"></button>
								<button type="button" data-bs-target="#carousel-training" data-bs-slide-to="3" aria-label="Slide 4"></button>
							</div>
							<div class="carousel-inner">
								<div class="carousel-item active">
									<img src="<?php bloginfo('template_url'); ?>/images/team/training/training.jpeg" class="d-block w-100" alt="curso Xplore">
								</div>
								<div class="carousel-item">
									<img src="<?php bloginfo('template_url'); ?>/images/team/training/training3.jpeg" class="d-block w-100" alt="curso Xplore">
								</div>
								<div class="carousel-item">
									<img src="<?php bloginfo('template_url'); ?>/images/team/training/training2.jpeg" class="d-block w-100" alt="cursos">
								</div>
								<div class="carousel-item">
									<img src="<?php bloginfo('template_url'); ?>/images/team/training/kids/kids2.jpeg" class="d-block w-100" alt="clases">
								</div>
							</div>
							<a class="carousel-control-prev" type="button" data-bs-target="#carousel-training" data-bs-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="visually-hidden">Previous</span>
							</a>
							<a class="carousel-control-next" type="button" data-bs-target="#carousel-training" data-bs-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="visually-hidden">Next</span>
							</a>
						</div>
						<!-- text -->
						<div class="content card-body text-center">
							<h3>Crezcamos juntos</h3>
							<p>Conoce los distintos cursos que tenemos para crecer como discipulo, desarrollar tu carácter y dones para servir. </p>
							<div>
								<a href="<?php echo esc_url( home_url( '/grupos' ) ); ?>" class="btn btn-transparent">Ver más</a>
							</div>
						</div>
						<!-- end text -->
					</div>
				</div>
				<!-- our church item -->
				
				<!-- GRUPOS PEQUEÑOS -->
				<div class="col-md-4 text-center wow fadeInUp" data-wow-duration="500ms" data-wow-delay="250ms">
					<div class="our-church-box card surface">
						<!-- Start slider -->
						<div id="carousel-grupos" class="carousel slide">
							<div class="carousel-indicators">
								<button type="button" data-bs-target="#carousel-grupos" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
								<button type="button" data-bs-target="#carousel-grupos" data-bs-slide-to="1" aria-label="Slide 2"></button>
								<button type="button" data-bs-target="#carousel-grupos" data-bs-slide-to="2" aria-label="Slide 3"></button>
								<button type="button" data-bs-target="#carousel-grupos" data-bs-slide-to="3" aria-label="Slide 4"></button>
							</div>
							<div class="carousel-inner">
								<div class="carousel-item active">
									<img src="<?php bloginfo('template_url'); ?>/images/team/grupos/grupos.jpeg" class="d-block w-100" alt="grupos de estudio">
								</div>
								<div class="carousel-item">
									<img src="<?php bloginfo('template_url'); ?>/images/team/grupos/grupos1.jpeg" class="d-block w-100" alt="grupos de estudio">
								</div>
								<div class="carousel-item">
									<img src="<?php bloginfo('template_url'); ?>/images/team/grupos/grupos2.jpeg" class="d-block w-100" alt="grupos de estudio">
								</div>
								<div class="carousel-item">
									<img src="<?php bloginfo('template_url'); ?>/images/team/grupos/grupos3.jpeg" class="d-block w-100" alt="grupos de estudio">
								</div>
							</div>
							<a class="carousel-control-prev" type="button" data-bs-target="#carousel-grupos" data-bs-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="visually-hidden">Previous</span>
							</a>
							<a class="carousel-control-next" type="button" data-bs-target="#carousel-grupos" data-bs-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="visually-hidden">Next</span>
							</a>
						</div>
						<!-- End slider -->
						<div class="content card-body text-center">
							<h3>Grupos Pequeños</h3>
							<p>Te invitamos a integrarte a alguno de nuestro grupos de estudio, donde convivimos y aprendemos juntos.</p>
							<div>
								<a href="<?php echo esc_url( home_url( '/grupos' ) ); ?>" class="btn btn-transparent">Ver grupos</a>
							</div>
						</div>
					</div>
				</div>
				<!-- PASTOR  -->
				<div class="col-md-4 text-center wow fadeInUp" data-wow-duration="500ms" data-wow-delay="500ms">
					<div class="our-church-box card surface kill-margin-bottom ">
						<!-- Start slider -->
						<div id="carousel-pastor" class="carousel slide">
							<div class="carousel-indicators">
								<button type="button" data-bs-target="#carousel-pastor" data-bs-slide-to="0" class="active" aria-current="true"
									aria-label="Slide 1"></button>
								<button type="button" data-bs-target="#carousel-pastor" data-bs-slide-to="1" aria-label="Slide 2"></button>
								<button type="button" data-bs-target="#carousel-pastor" data-bs-slide-to="2" aria-label="Slide 3"></button>
							</div>
							<div class="carousel-inner">
								<div class="carousel-item active">
									<img src="<?php bloginfo('template_url'); ?>/images/team/pastor/pastor.jpeg" class="d-block w-100" alt="...">
								</div>
								<div class="carousel-item">
									<img src="<?php bloginfo('template_url'); ?>/images/team/pastor/pastor1.jpeg" class="d-block w-100" alt="...">
								</div>
								<div class="carousel-item">
									<img src="<?php bloginfo('template_url'); ?>/images/team/pastor/pastor2.jpeg" class="d-block w-100" alt="...">
								</div>
							</div>
							<a class="carousel-control-prev" type="button" data-bs-target="#carousel-pastor" data-bs-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="visually-hidden">Previous</span>
							</a>
							<a class="carousel-control-next" type="button" data-bs-target="#carousel-pastor" data-bs-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="visually-hidden">Next</span>
							</a>
						</div>
						<!-- End slider -->
						<div class="content card-body text-center">
							<h3>Pastor</h3>
							<p>Nacido en el Estado de México, egresado del Instituto Bíblico en la ciudad de Huajuapan de León, Oaxaca.</p>
							<div>
								<a class="btn btn-transparent popup-pastor-info" href="#details-lightbox">Ver más</a>
							</div>
						</div>
					</div>
				</div>

				<!-- ***** Pastor info Lightbox ***** -->
				<div id="details-lightbox" class="lightbox-basic mfp-hide white-popup">
					<div class="container">
						<button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
						<div class="row pastor-box">
							<div class="col-lg-6">
								<div class="image-container">
									<img class="img-fluid" src="<?php bloginfo('template_url'); ?>/images/team/pastor/pastor-fam1.png" alt="pastor">
								</div> 
							</div> 
							<div class="col-lg-6">
								<h3>Sobre el pastor</h3>
								<hr>
								<h5>Pastor Luis Marcelo García</h5>
								<p>Nacido en el Estado de México, egresado del Instituto Bíblico en la ciudad de Huajuapan de León, Oaxaca. Cuenta con la Licenciatura en Ministerio Pastoral y diplomado en consejería familiar.
								<br>
								<br/>
								Comenzó su servicio al Señor en diferentes ministerios como maestro de niños, líder de jóvenes, líder del grupo de alabanza y líder de un grupo celular en la iglesia Bautista Getsemaní de Huajuapan de León.
								<br/>
								<br/>Ha sido pastor de la Primera Iglesia Evangélica Bautista de Coatzacoalcos desde el año 2013 y actualmente desarrolla su ministerio junto a su esposa Milca y su Hijo Gael.</p>
							</div> <!-- end of col -->
						</div> <!-- end of row -->
					</div> <!-- end of container -->
				</div> <!-- end of details lightbox -->
				
			</div> <!-- End row -->
		</div> <!-- End container -->
	</section> 
	<!-- End section -->



	<!--
	Start Call To Action --- Servir
	==================================== -->
	<section class="call-to-action section-sm bg-service">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<h2>Encuentra tu lugar</h2>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis tenetur odio impedit incidunt? <br> Omnis accusantium ea reiciendis, fugit commodi nostrum.</p>
					<a href="contact.html" class="btn btn-primary">Unete al servicio</a>
				</div>
			</div> <!-- End row -->
		</div> <!-- End container -->
	</section> <!-- End section -->
	<!--
	Start Contact Us
	==================================== -->
	<section id="contact-us" class="contact-us">
		<div class="container">
			<div class="row">

				<div class="col-12">
					<!-- section title -->
					<div class="title text-center wow fadeIn" data-wow-duration="500ms">
						<h2>Queremos <span class="color">saber de ti</span></h2>
					</div>
					<!-- /section title -->
				</div>
				<!-- Contact Details -->
				<div class="contact-info col-lg-6 wow fadeInUp" data-wow-duration="500ms">
					<h3>Contáctanos</h3>
					<p>Nos gustaría conocerte, estamos para servirte.</p>
					<div class="contact-details">
						<div class="con-info clearfix">
							<i class="bi bi-geo-alt"></i>
							<span>Av. Ignacio de la Llave #600 
							</br>Coatzacoalcos, Veracruz, México.</span>
						</div>

						<div class="con-info clearfix">
							<i class="bi bi-telephone"></i>
							<span>Teléfono: 01 (921) 212 8715</span>
						</div>

						<div class="con-info clearfix">
							<i class="bi bi-envelope-at"></i>
							<span>Email: iglesiabautistacoatza@gmail.com</span>
						</div>
					</div>
				</div>
				<!-- End Contact Details -->

				<!-- Contact Form -->
				<div class="contact-form col-lg-6 mt-4 mt-lg-0 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">
					<form id="contact-form" method="post" action="sendmail.php" role="form">

						<div class="form-group">
							<input type="text" placeholder="Tu nombre" class="form-control" name="name" id="name">
						</div>

						<div class="form-group">
							<input type="email" placeholder="Tu email" class="form-control" name="email" id="email">
						</div>

						<div class="form-group">
							<textarea rows="6" placeholder="Escribe tu mensaje" class="form-control" name="message" id="message"></textarea>
						</div>

						<div id="cf-submit">
							<input type="submit" id="contact-submit" class="btn btn-primary" value="Enviar">
						</div>
						
					</form>
				</div>
				<!-- ./End Contact Form -->

			</div> <!-- end row -->
		</div> <!-- end container -->
	</section> <!-- end Contact Area-->
</main><!-- #main -->

<?php
get_footer(); ?>
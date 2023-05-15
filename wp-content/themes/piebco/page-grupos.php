<?php
  get_header();
  ?>
<main> 
  <!-- 
	Start Schedule Section
	==================================== -->
	<section id="schedule" class="bg-one section">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<!-- section title -->
					<div class="title text-left wow fadeIn" data-wow-duration="500ms">
            <h1>ÚNETE A LA FAMILIA</h1>
						<!-- <h>Únete a la<span class="color">familia</span></h> -->
            <p>No importa cual sea tu historia o de donde vengas, eres bienvenido. Nos encantaría conocerte y juntos crecer como discipulos de Jesús. No importar si nunca haz asistido a una reunión o es la primera vez que nos visitas; los grupos pequeños son la mejor forma de conectar contigo.</p>
					</div>
					<!-- /section title -->
				</div>
				<!-- Church groups -->
				<article class="wow fadeInUp schedule-zoom" data-wow-duration="500ms">
          <?php
            $gpo1 = 'background-image: url(\'' . get_stylesheet_directory_uri() . '/images/team/grupos/grupos1.jpeg\');
            background-size: cover;';
          ?>
          <div class="row p-0 bg-light grupos">
            <div class="col-lg-6 col-md-12 order-lg-2 order-sm-1 p-0 d-flex"
						style="<?php echo esc_attr($gpo1); ?>"></div> 
            <div class="grupos-block text-left col-lg-6 col-md-12 order-lg-1 order-sm-2 p-4 m-0">
							<div class="grupos-icon">
								<i class="bi bi-house-heart"></i>
							</div>
							<h3>Conversaciones para crecer</h3>
							<p>Estudio bíblico para jóvenes de 18 a 30 años.</p>
							<div class="schedule-info-container mb-">
								<div class="schedule-info">
									<i class="bi bi-calendar2"></i>
									<p>Viernes</p>
								</div>
								<div class="schedule-info">
									<i class="bi bi-clock"></i>
									<p>18:00 pm</p>
									<i class="bi bi-geo-alt"></i>
									<p>Presencial</p>
								</div>
							</div>
							<a href="https://chat.whatsapp.com/JqeBXM83agG4ov0PWVODEA" class="btn btn-primary">Únete a nuestro grupo de whatsapp</a>

            </div>
          </div>
				</article>
				
			</div>
		</div> 
	</section> <!-- End section -->
</main>

<?php
  get_footer();
  ?>
<?php
/* Template Name: About */

get_header();
?>

<?php
if ( have_posts() ) :
	/* Start the Loop */
	while ( have_posts() ) : the_post();
		get_template_part("template-parts/single/breadcrumb");
		?>
		<div class="section pt-3 section-muted">
			<div class="section-content">
				<div class="container">

					<h1 class="text-primary text-left"  data-aos="fade-right"  >
						<?php the_title(); ?>
					</h1>

					<div class="row pt-md-3 pt-2" >
						<div class="col-12 col-lg-6">
							<div class="embed-responsive embed-responsive-16by9 shadow" >
								<iframe class="embed-responsive-item" src="<?php echo get_field("url_video"); ?>" allowfullscreen></iframe>
							</div>
						</div>
						<div class="col-12 col-lg-6 px-2 px-lg-5 pt-3 pt-lg-0">
							<h2 class="text-primary"  data-aos="fade-left" ><?php echo get_field("titolo_sezione_video"); ?></h2>
							<?php echo get_field("testo_sezione_video"); ?>
						</div>
					</div>
				</div>
			</div>
		</div>










		<section class="section py-5 my-0 section-gradient">
			<div class="section-content">
				<div class="container">
					<h1 class="text-white text-left mb-5" data-aos="fade-left">
						<?php echo get_field("titolo_sezione_team"); ?>
					</h1>
            <div class="row pt-md-3 pt-2" >
	            <?php
	            $team = get_field("team");
	            ?>
        <?php foreach ( $team as $item ) { ?>
	        <div class="col-md-4 col-sm-6">


		        <div class="card-container">
			        <div class="movable-card">
				        <div class="front">
		        <!--start card-->
		        <div class="card-wrapper">
			        <div class="card rounded">
				        <div class="card-body pb-0 text-center" >
					        <h3 class="card-title"><?php echo $item["nome"]; ?></h3>

					        <div class="avatar size-xxl">
						        <img src="<?php echo $item["immagine"]["sizes"]["thumbnail"]; ?>" alt="<?php echo esc_attr($item["nome"]); ?>">
					        </div>
					        <h4 class="mt-1"><?php echo $item["ruolo"]; ?></h4>

				        </div>
			        </div>
		        </div>
		        <!--end card-->


				        </div> <!-- end front panel -->
				        <div class="back">

					        <div class="content">
						        <div class="main mt-5">
							        <h4 class="text-center"><?php _e("Bio"); ?></h4>
							        <p class="text-center"><?php echo $item["bio"]; ?></p>

						        </div>
					        </div>
				        </div> <!-- end back panel -->
			        </div> <!-- end card -->
		        </div> <!-- end card-container -->
	        </div> <!-- end col sm 3 -->

	        <?php
        } ?>


            </div>
        </div>
        </div>
        </section>









		<section class="section py-5 my-0 section-muted">
			<div class="section-content">
				<div class="container">
					<h1 class="text-primary text-left mb-5" data-aos="fade-left">
						<?php echo get_field("titolo_sezione_partner_istituzionali"); ?>
					</h1>
					<div class="it-grid-list-wrapper">
						<div class="grid-row">
							<?php
							$partner_istituzionali = get_field("partner_istituzionali");
							foreach ($partner_istituzionali as $partner){
								?>
								<div class="col-6 col-lg-2" data-aos="fade-up">
									<div class="it-grid-item-wrapper">
										<?php if($partner["link"]){ ?>
										<a href="<?php echo $partner["link"]; ?>">
										<?php } ?>
											<div class="img-responsive-wrapper zoom m-1">
												<div class="img-responsive">
													<div class="img-wrapper"><img class="" src="<?php echo $partner["immagine"]["url"]; ?>" ></div>
												</div>
											</div>
											<?php if($partner["link"]){ ?>
										</a>
												<?php } ?>
									</div>
								</div>

								<?php

							}
							?>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="section py-5 my-0 section-primary">
			<div class="section-content">
				<div class="container">
					<h1 class="text-white text-left mb-5" data-aos="fade-left">
						<?php echo get_field("titolo_sezione_partner_aziendali"); ?>
					</h1>
					<div class="it-grid-list-wrapper">
						<div class="grid-row">
							<?php
							$partner_aziendali = get_field("partner_aziendali");
							foreach ($partner_aziendali as $partner){
								?>
								<div class="col-6 col-lg-2" data-aos="fade-up">
									<div class="it-grid-item-wrapper">
										<?php if($partner["link"]){ ?>
										<a href="<?php echo $partner["link"]; ?>">
											<?php } ?>
											<div class="img-responsive-wrapper zoom m-1">
												<div class="img-responsive">
													<div class="img-wrapper"><img class="" src="<?php echo $partner["immagine"]["url"]; ?>" ></div>
												</div>
											</div>
											<?php if($partner["link"]){ ?>
										</a>
									<?php } ?>
									</div>
								</div>

								<?php

							}
							?>
						</div>
					</div>
				</div>
			</div>
		</section>


	<?php
	endwhile;
endif;
?>

<?php
get_footer();
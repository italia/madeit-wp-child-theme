<?php
/* Template Name: MadeIt */

get_header();
?>

<?php
if ( have_posts() ) :
	/* Start the Loop */
	while ( have_posts() ) : the_post();
		get_template_part("template-parts/single/breadcrumb");

		get_template_part("template-parts/home/manifesto");


		?>

		<div class="section section-muted pt-5 pb-0">
			<div class="section-content">
				<div class="container">
					<div class="row">
						<h1 class="text-primary" data-aos="fade-left"><?php _e("Requisiti", "madeit"); ?></h1>
						<div class="it-list-wrapper w-100 mt-3">
							<ul class="list-group list-group-flush">
								<?php
								$requisiti = get_field("requisiti");
								foreach ($requisiti as $requisito){
									?>
									<li class="list-group-item"><?php echo $requisito["punto_elenco"]; ?></li>
									<?php } ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>


		<div class="section section-muted pt-5 pb-5">
			<div class="section-content">
				<div class="container">
					<div class="row">
						<?php
						$approfondimenti = get_field("approfondimenti");
						foreach ($approfondimenti as $approfondimento){
							?>
							<div class="col-12 col-lg-6">

								<div class="it-hero-wrapper madeit-wrapper-card it-primary it-overlay shadow mb-2">
									<!-- - img-->
									<div class="img-responsive-wrapper rounded">
										<div class="img-responsive">
											<div class="img-wrapper"><img src="<?php echo $approfondimento["immagine"]["url"]; ?>" ></div>
										</div>
									</div>
									<!-- - texts-->
									<div class="container">
										<div class="row">
											<div class="col-12 text-center">
												<h3 class="text-white"><?php echo $approfondimento["titolo"]; ?></h3>
												<p class="d-none d-lg-block text-white"><?php echo $approfondimento["testo"]; ?></p>
												<div class="it-btn-container"><a class="btn btn-sm btn-outline-secondary" href="<?php echo $approfondimento["link_bottone"]; ?>"><?php echo $approfondimento["label_bottone"]; ?></a></div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<?php }  ?>
					</div>
				</div>
			</div>
		</div>





		<section class="section py-5 my-0 section-primary">
			<div class="section-content">
				<div class="container">
						<h1 class="text-white text-left mb-5" data-aos="fade-left">
						<?php _e("Partner", "madeit"); ?>
					</h1>
					<div class="it-grid-list-wrapper">
						<div class="grid-row">
							<?php
							$partners  = get_field("partners");
							foreach ($partners as $partner){
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
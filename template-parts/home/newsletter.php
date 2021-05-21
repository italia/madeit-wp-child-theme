<section class="container-fluid section section-newsletter">
		<div class="container py-5">
			<div class="row justify-content-md-center py-3">
				<div class="col col-md-7">
					<div class="col text-center mb-4">
						<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/icon-newsletter.svg" alt="Iscriviti alla newsletter">
					</div>
					<div>
						<h2 class="mb-2 mb-md-4 text-center text-white">Resta aggiornato, iscriviti alla newsletter!</h2>

						<form method="GET" class="px-md-5 newsletter-form">
							<div class="form-group mt-4 mb-0 bg-white rounded">
								<div class="input-group">
									<div class="input-group-prepend">
										<div class="input-group-text"><svg class="icon icon-sm icon-primary"><use xlink:href="/assets/svg/sprite.svg#it-mail"></use></svg></div>
									</div>
									<input type="email" name="email" class="js-newsletter-email form-control bg-white input-email" placeholder="Indirizzo e-mail">
								</div>
							</div>

							<input type="hidden" name="list" value="4">
							<input id="group" name="group" type="hidden" value="">
							<div class="text-center my-4">
								<button type="submit" class="js-newsletter-submit btn bg-white text-primary px-5 text-uppercase" disabled>Iscriviti</button>
							</div>
						</form>
						<p class="text-center text-white">
							<small>
								Inserendo il tuo indirizzo email stai accettando la nostra <a class="text-white text-hover-green" href="<?php echo home_url("informativa-newsletter"); ?>"><u>informativa sul trattamento dei dati personali per la newsletter</u></a>.
							</small>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php

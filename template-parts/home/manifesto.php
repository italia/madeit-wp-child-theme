<?php
$titolo_manifesto = get_field("titolo_manifesto", "option");
$testo_manifesto = get_field("testo_manifesto", "option");
$link_manifesto = get_field("link_manifesto", "option");

// dal setup tema padre
$immagine_logo = get_field('immagine_logo', 'option');
?>
<div class="section section-neutral">
	<div class="section-content">
		<div class="container white-color">
			<div class="row">
				<div class="col-12 col-lg-6 col-xl-4 pr-0 pr-md-5 mb-3">
					<img data-aos="fade-down" data-aos-duration="500" data-aos-delay="200"  src="<?php echo $immagine_logo; ?>" alt="<?php bloginfo("name"); ?>">
				</div>
				<div class="col-12 col-lg-6 col-xl-8 pr-0 pr-md-5 mb-3" data-aos="fade-left" data-aos-duration="500" data-aos-delay="200">
					<h4><?php echo $titolo_manifesto; ?></h4>
					<?php echo $testo_manifesto; ?>
                    <p><a class="btn btn-white text-primary " href="<?php echo $link_manifesto; ?>"><?php _e("Read more"); ?></a> </p>
				</div>
			</div>
		</div>
		<!-- contenuto di esempio END -->
	</div>
</div>

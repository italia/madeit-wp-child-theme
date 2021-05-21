<?php
$url_video = get_field("url_video", "option");
$titolo_apertura_video = get_field("titolo_apertura_video", "option");
$sottotitolo_apertura_video = get_field("sottotitolo_apertura_video", "option");

// dal setup tema padre
$immagine_logo = get_field('immagine_logo', 'option');
?>
<header class="video-hero">
	<div class="overlay"></div>
	<video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
		<source src="<?php echo $url_video; ?>" type="video/mp4">
	</video>
	<div class="row">
		<div class="col-6 p-5">

		</div>
		<div class="col-6 p-5 text-right">
			<!-- outputs a list of languages names -->
			<ul class="lang d-none d-lg-block">
				<?php
				if(function_exists("pll_the_languages")) pll_the_languages(array( 'display_names_as' => 'slug' ) );
				?>
			</ul>

		</div>
	</div>

	<div class="container h-100">
		<div class="d-flex h-50 text-center text-md-left align-items-center" >
			<div class="w-100 text-white">
				<img class="d-none d-lg-block mb-4" data-aos="fade-right" data-aos-duration="500" data-aos-delay="200" width="200"  src="<?php echo $immagine_logo; ?>" alt="<?php bloginfo("name"); ?>">

				<h1 class="mb-5" data-aos="flip-right"><?php echo $titolo_apertura_video; ?></h1>
				<h3  data-aos="fade-zoom-in"><?php echo $sottotitolo_apertura_video; ?></h3>
			</div>
		</div>
	</div>

</header>

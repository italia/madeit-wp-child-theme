<?php get_template_part("template-parts/single/breadcrumb"); ?>

<div class="it-hero-wrapper it-overlay it-dark it-bottom-overlapping-content">
	<?php

	?>
	<!-- - img-->
	<div class="img-responsive-wrapper">
		<div class="img-responsive">
			<div class="img-wrapper primary-bg">
				<?php
				if ( has_post_thumbnail()) {
					$image = get_the_post_thumbnail( $post, "full" );
					echo $image;
				}
				?>
			</div>
		</div>
	</div>
	<?php

	?>
	<!-- - texts-->
	<div class="container">
		<div class="row">


			<div class="col-12">
				<div class="it-hero-text-wrapper it-overlay it-dark  pt-lg-5 mt-lg-5 mt-0 pt-0">
					<h1><span class="badge badge-primary text-white">CONTEST</span></span>
					<h1 class="text-white"><?php the_title(); ?></h1>
					<p class="text-white d-lg-block">
						<?php echo get_the_excerpt(); ?>
					</p>

				</div>
			</div>
		</div>
	</div>


</div>

<article class="container my-1">

	<div class="row">
		<div class="col-12 col-lg-2"></div>
		<div class="col-12 col-lg-8">
			<!--start card-->
			<div class="card-wrapper card-space">
				<div class="card card-bg card-big border-bottom-card">
					<div class="p-4 p-lg-5 mt-0">
						<div class="text-primary">
							<?php the_content(); ?>
						</div>

					</div>
				</div>
			</div>
			<!--end card-->
		</div>
		<div class="col-12 col-lg-2"></div>
	</div>
</article>

<?php
/* Template Name: Ecosistema  */

get_header(); ?>

<?php
if ( have_posts() ) :

	/* Start the Loop */
	while ( have_posts() ) : the_post();

		?>

		<div class="container my-4">
			<div class="row">
				<div class="col col-12">
					<div class="mx-md-3">
						<h1 class="text-primary mb-4"><?php the_title(); ?></h1>

						<div class="embed-container"><iframe style="border: 1px solid lightgrey; border-radius: 2px;" src="https://viewer.mapme.com/57befcb6-121e-42a1-b62a-9d63fe3f4bfa" width="100%" height="635" frameborder="0" scrolling="no" allowfullscreen="allowfullscreen"></iframe></div>

						<?php the_content(); ?>
					</div>
				</div>
			</div>
		</div>
	<?php
	endwhile;
endif; ?>

<?php
get_footer();

<?php
/* Template Name: MadeIt 4 Target */

get_header();
?>

<?php
if ( have_posts() ) :
	/* Start the Loop */
	while ( have_posts() ) : the_post();
		get_template_part("template-parts/single/breadcrumb");

?>
		<div class="container my-4">
			<div class="row">
				<div class="col col-12">
					<div class="mx-md-3">
						<h1><?php the_title(); ?></h1>
						<?php the_content(); ?>
					</div>
				</div>
			</div>
		</div>

		<section class="section section-muted container-fluid py-0 mb-5">

		<div class="row">
		<?php
		$programmi = get_field("programmi", "option");

		$c=0;
		foreach ($programmi as $post){
			setup_postdata($post);
			if($c == 0)
				$aos = "fade-right";
			else if($c == 1)
				$aos = "fade-up";
			else
				$aos = "fade-left";

			$img = get_the_post_thumbnail_url($post, "square");
			?>
			<div  data-aos="<?php echo $aos; ?>" class="d-flex col-12 col-lg-4 my-3">
				<?php get_template_part("template-parts/card/post", "small"); ?>
			</div>
			<?php
			$c++;
		}
		wp_reset_postdata();
		?>
		</div>
		</section>
	<?php


	endwhile;
endif;
?>

<?php
get_footer();
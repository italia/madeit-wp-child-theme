<?php
$titolo_contest = get_field("titolo_contest", "option");

?>
<div data-aos="zoom-out-down"  class="section p-0 py-5">
	<div class="container mb-4">
		<div class="row">
			<div class="col-12">
				<h2 class="max-w-40 text-primary" data-aos="fade-left"><?php echo $titolo_contest; ?></h2>
			</div>
		</div>
	</div>

	<div class="container">

		<div class="it-carousel-wrapper it-carousel-landscape-abstract-three-cols">
	<div class="it-carousel-all owl-carousel it-card-bg madeit-carousel madeit-carousel-contest">
		<?php
		$contests = get_posts("post_type=contest&posts_per_page=6");
		foreach ($contests as $post){
			setup_postdata($post);
			?>
        <div class="it-single-slide-wrapper">
            <?php get_template_part("template-parts/card/post", get_post_type()); ?>
        </div>
            <?php
		}
		?>
	</div>
</div>

		<div class="col-12 text-center mt-5">
			<a href="<?php echo get_post_type_archive_link("contest"); ?>" class="btn btn-primary text-white"><?php _e("Vedi tutti i contest", "madeit"); ?></a>
		</div>

		</div>
	</div>
<?php

<?php
$titolo_news = get_field("titolo_news", "option");

?>
<div data-aos="zoom-out-down"  class="section section-muted  p-0 py-5">
	<div class="container mb-4">
		<div class="row">
			<div class="col-12">
				<h2 class="max-w-40 text-primary" data-aos="fade-left"><?php echo $titolo_news; ?></h2>
			</div>
		</div>
	</div>

	<div class="container">

		<div class="it-carousel-wrapper it-carousel-landscape-abstract-three-cols">
	<div class="it-carousel-all owl-carousel it-card-bg madeit-carousel madeit-carousel-news">
		<?php
		$news = get_posts("post_type=post&posts_per_page=6");
		foreach ($news as $post){
			setup_postdata($post);
			?>
			<div class="it-single-slide-wrapper d-flex flex-column">
				<?php get_template_part("template-parts/card/post", get_post_type()); ?>
			</div>
			<?php
		}
		?>

	</div>
</div>


		<div class="col-12 text-center mt-5">
			<a href="<?php echo get_post_type_archive_link("post"); ?>" class="btn btn-primary text-white"><?php _e("Vedi tutte le news", "madeit"); ?></a>
		</div>

		</div>
	</div>
<?php

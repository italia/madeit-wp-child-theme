<?php
$titolo_programmi = get_field("titolo_programmi", "option");
$programmi = get_field("programmi", "option");

?>
<section class="section primary-bg container-fluid">

<div class="row">

	<div class="col-12 text-center text-white mb-5 "><h2><?php echo $titolo_programmi; ?></h2></div>

	<?php
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
		<div  data-aos="<?php echo $aos; ?>" class="d-flex col-12 col-lg-4 mb-3">
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

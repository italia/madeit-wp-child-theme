<?php
/* Template Name: News */

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package gutenberg-starter-theme
 */

get_header(); ?>

	<div class="container">
		<div class="row">
			<?php
			$args = array(
				'ignore_sticky_posts' => 1
			);

			query_posts($args);
			if ( have_posts() ) {

				// Load posts loop.
				while ( have_posts() ) {
					the_post();
					echo '<div class="col-12 col-md-4 d-flex mt-5">';
					get_template_part( 'template-parts/card/post' , get_post_format());
					echo "</div>";
				}
			} ?>


		</div>

		<div class="row">
			<?php mid_bootstrap_pagination(); ?>
		</div>

	</div>


<?php get_footer();

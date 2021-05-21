<?php
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

<?php
if ( have_posts() ) :

	/* Start the Loop */
	while ( have_posts() ) : the_post();
		$logo = get_field("logo");
		?>

        <div class="section section-muted project-intro">
            <div class="section-content">
                <div class="container my-4">
                    <div class="row">
                        <div class="col-12">
                            <div class="d-flex justify-content-between">
                                <div class="project-intro--logo mw-100">

                                    <img  src="<?php echo $logo["url"]; ?>" class="rounded img-fluid max-h-80 mb-4">

                                    <h1 class="max-w-40 text-600"><?php the_title(); ?></h1>
                                    <p class="lead max-w-40 text-muted"><?php echo get_the_excerpt(); ?></p>
									<?php
									$url_programma   = get_field("url_programma");
									$sigla_programma = get_field("sigla_programma");

									if($url_programma) {
										?>
                                        <br><a class="btn btn-primary btn-lg btn-icon"
                                               href="<?php echo $url_programma; ?>" title="<?php echo esc_attr(get_the_title()); ?>" target="_blank"
                                               rel="noopener noreferrer"><?php echo get_field("testo_apply_cta"); ?></a>
										<?php
									}
									?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <span class="project-intro--print"><?php echo $sigla_programma; ?></span>
                </div>
            </div>
        </div>
        <div class="container my-4">

			<?php
			get_template_part("template-parts/single/breadcrumb");
			?>
            <div class="row">
                <div class="col-12 my-4 content">
					<?php the_content(); ?>
                </div>
            </div>
        </div>


        <?php
		if($url_programma) {

			?>

            <div class="row">
                <div class="col-12">

                    <div class="it-hero-wrapper madeit-wrapper-card it-primary it-overlay shadow ">
                        <!-- - img-->
                        <div class="img-responsive-wrapper rounded">
                            <div class="img-responsive">
                                <div class="img-wrapper">
                                    <?php
                                    the_post_thumbnail("large");
                                    ?>
                                </div>
                            </div>
                        </div>
                        <!-- - texts-->
                        <div class="container">
                            <div class="row">
                                <div class="col-12 text-center">
                                    <h3 class="text-white h1"><?php echo get_field("titolo_apply_programma"); ?></h3>
                                    <p class="d-none d-lg-block text-white"><?php echo get_field("testo_apply_programma"); ?></p>
                                    <div class="it-btn-container">
                                        <a class="btn btn-lg btn-outline-secondary" href="<?php echo $url_programma; ?>"><?php echo get_field("testo_apply_cta"); ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
			<?php
		}
            ?>


		<?php

		$timeline = get_field("timeline");
		if($timeline) {
			?>

            <div class="section section-muted pt-5">
                <div class="section-content">
                    <div class="container my-0">


                        <h2 class="w-100 text-primary text-center mb-3"><?php _e( "Timeline", "madeit" ); ?></h2>
                        <div class="it-timeline-wrapper">
                            <div class="row">
								<?php
								foreach ($timeline as $time){
									?>
                                    <div class="col-12">
                                        <div class="timeline-element">
                                            <div class="it-pin-wrapper it-evidence">
                                                <div class="pin-icon">
                                                    <svg class="icon">
                                                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/bootstrap-italia/svg/sprite.svg#it-code-circle"></use>
                                                    </svg>
                                                </div>
                                                <div class="pin-text"><span><?php echo $time["data"]; ?></span></div>
                                            </div>
                                            <div class="card-wrapper">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h5 class="card-title big-heading"><?php echo $time["titolo"]; ?></h5>
                                                        <p class="card-text"><?php echo $time["descrizione"]; ?></p>
														<?php
														if($time["link"]) {
															?>
                                                            <a class="read-more" href="<?php echo $time["link"]; ?>" target="_blank">
                                                                <span class="text"><?php _e("Read more"); ?></span>
                                                                <svg class="icon">
                                                                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/bootstrap-italia/svg/sprite.svg#it-arrow-right"></use>
                                                                </svg>
                                                            </a>
															<?php
														}
														?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

									<?php
								}
								?>

                            </div>
                        </div>


                    </div>
                </div>
            </div>


			<?php
		}
		?>






		<?php
		$showcase = get_field("showcase");
		if($showcase) {
			?>

            <section class="section py-5 my-0 section-primary">
                <div class="section-content">
                    <div class="container">
                        <h1 class="text-white text-left mb-5" data-aos="fade-left">
							<?php _e( "Showcase", "madeit" ); ?>
                        </h1>
                        <div class="it-grid-list-wrapper">
                            <div class="grid-row">
								<?php

								foreach ( $showcase as $partner ) {
									?>
                                    <div class="col-6 col-lg-2" data-aos="fade-up">
                                        <div class="it-grid-item-wrapper">
											<?php if ( $partner["link"] ){ ?>
                                            <a href="<?php echo $partner["link"]; ?>">
												<?php } ?>
                                                <div class="img-responsive-wrapper zoom m-1">
                                                    <div class="img-responsive">
                                                        <div class="img-wrapper"><img class=""
                                                                                      src="<?php echo $partner["immagine"]["url"]; ?>">
                                                        </div>
                                                    </div>
                                                </div>
												<?php if ( $partner["link"] ){ ?>
                                            </a>
										<?php } ?>
                                        </div>
                                    </div>

									<?php

								}
								?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
			<?php
		}
		?>

	<?php
	endwhile;

else :

	get_template_part( 'template-parts/content', 'none' );

endif; ?>

<?php
get_footer();

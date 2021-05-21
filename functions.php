<?php

/**
 * Custom Post Type
 */
require get_theme_file_path() . '/inc/cpt.php';

/**
 * acf
 */
require get_theme_file_path() . '/inc/acf.php';


// aggiungo css child dopo quello del parent
add_action( 'wp_enqueue_scripts', 'innovazione_enqueue_styles', 99 );

function innovazione_enqueue_styles() {

	wp_enqueue_style( 'aos', get_theme_file_uri().'/css/aos.css' );

	wp_enqueue_style( 'parent-style', get_theme_file_uri().'/style.css' );

	wp_enqueue_script("aos",get_theme_file_uri().'/js/aos.js');
}


function madeit_aos_script() {
	?>
	<script type="text/javascript">
        document.addEventListener("DOMContentLoaded", function() {
            AOS.init({
                disable: 'mobile',
                offset: 100,
                duration: 600,
                delay: 300,
            });
        });
	</script>
	<?php
}
add_action('wp_footer', 'madeit_aos_script');



<?php
/**
 * MeineMarie functions and definitions.
 *
 * @package MeineMarie
 */

/**
 * Enqueues the theme and parent theme styles.
 */
function meinemarie_enqueue_styles() {

	$parent_style = 'twentysixteen-style';

	wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'meinemarie-style',
		get_stylesheet_directory_uri() . '/style.css',
		array( $parent_style ),
		wp_get_theme()->get( 'Version' )
	);
}

add_action( 'wp_enqueue_scripts', 'meinemarie_enqueue_styles' );

require get_stylesheet_directory() . '/inc/customizer.php';

add_filter( 'wp_head', function() { ?>
	<style type="text/css" id="meinemarie-customizer-api-css">
		<?php require get_stylesheet_directory() . '/inc/customizable-styles.php.css'; ?>
	</style>
	<?php
});

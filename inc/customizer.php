<?php
/**
 * MeineMarie Customizer functionality.
 *
 * @package MeineMarie
 * @since MeineMarie 1.0
 */

/**
 * Function adding Customizer settings and controls.
 * Is called on the customize_register action hook.
 *
 * @param WP_Customize_Manager $wp_customize The WP_Cusomize_Manager object.
 * @since MeineMarie 1.0
 */
function meinemarie_customize_register( $wp_customize ) {
	$wp_customize->add_setting( 'title_hover_color', array(
		'default' => '#e32831',
	) );
	$wp_customize->add_setting( 'accent_color', array(
		'default' => '#d21720',
	) );
	$wp_customize->add_setting( 'accent_color_n1', array(
		'default' => '#e32831',
	) );
	$wp_customize->add_setting( 'accent_color_n2', array(
		'default' => '#f43940',
	) );
	$wp_customize->add_setting( 'accent_text_color', array(
		'default' => '#ffffff',
	) );
}
add_action( 'customize_register', 'meinemarie_customize_register' );

/**
 * Removes some (coloring) customization settings of twentysixteen made obsolete
 * by the customization settings defined in this theme.
 *
 * @param WP_Cusomize_Manager $wp_customize The WP_Customize_Manager object.
 * @since MeineMarie 1.0
 */
function meinemarie_remove_twentysixteen_unnecessary_customizers( $wp_customize ) {
	$wp_customize->remove_setting( 'color-scheme' );
	$wp_customize->remove_control( 'color-scheme' );
}
add_action( 'customize_register', 'meinemarie_remove_twentysixteen_unnecessary_customizers', 1000 );

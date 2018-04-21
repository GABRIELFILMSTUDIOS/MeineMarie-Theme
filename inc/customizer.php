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
	$wp_customize->get_control( 'background_color' )->description = __( 'Nur auf großen Bildschirmen sichtbar', 'meinemarie' );
	$wp_customize->get_control( 'main_text_color' )->priority = 30;
	$wp_customize->get_control( 'secondary_text_color' )->priority = 40;

	$wp_customize->add_setting( 'header_textcolor', array(
		'default' => '#d21720',
	) );
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'header_textcolor',
			array(
				'label' => __( 'Farbe Website-Titel', 'meinemarie' ),
				'priority' => 10,
				'section' => 'colors',
			)
		)
	);

	$wp_customize->add_setting( 'header_hover_textcolor', array(
		'default' => '#e32831',
	) );
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'header_hover_textcolor',
			array(
				'label' => __( 'Farbe Website-Titel (Hover)', 'meinemarie' ),
				'description' => __( 'Wird verwendet, wenn sich die Maus über dem Titel befindet (hover).', 'meinemarie' ),
				'priority' => 20,
				'section' => 'colors',
			)
		)
	);

	$wp_customize->add_setting( 'frame_color', array(
		'default' => '#d3cece',
	) );
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'frame_color',
			array(
				'label' => __( 'Rahmenfarbe', 'meinemarie' ),
				'priority' => 25,
				'section' => 'colors',
			)
		)
	);

	$wp_customize->add_setting( 'accent_color', array(
		'default' => '#d21720',
	) );
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'accent_color',
			array(
				'label' => __( 'Akzentfarbe', 'meinemarie' ),
				'priority' => 50,
				'section' => 'colors',
			)
		)
	);

	$wp_customize->add_setting( 'accent_color_n1', array(
		'default' => '#e32831',
	) );
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'accent_color_n1',
			array(
				'label' => __( 'Akzentfarbe Nuance 1', 'meinemarie' ),
				'description' => __( 'Wird als Text- bzw. Hintergrundfarbe für anklickbare Elemente verwendet, wenn sich über ihnen die Maus befindet (hover), für Links auch wenn sie grade angeklickt werden (active).' ),
				'priority' => 60,
				'section' => 'colors',
			)
		)
	);

	$wp_customize->add_setting( 'accent_color_n2', array(
		'default' => '#f43940',
	) );
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'accent_color_n2',
			array(
				'label' => __( 'Akzentfarbe Nuance 2', 'meinemarie' ),
				'description' => __( 'Wird als Text- bzw. Hintergrundfarbe für anklickbare Elemente außer Links verwendet, wenn sie angeklickt werden (active).', 'meinemarie' ),
				'priority' => 70,
				'section' => 'colors',
			)
		)
	);

	$wp_customize->add_setting( 'accent_text_color', array(
		'default' => '#ffffff',
	) );
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'accent_text_color',
			array(
				'label' => __( 'Textfarbe auf Akzentfarbe', 'meinemarie' ),
				'description' => __( 'Wird als Textfarbe bei Elementen verwendet, deren Hintergrundfarbe eine Akzentfarbe ist', 'meinemarie' ),
				'priority' => 80,
				'section' => 'colors',
			)
		)
	);

	// Remove customization settings made obsolete by this theme.
	meinemarie_remove_twentysixteen_unnecessary_customizers( $wp_customize );
}
add_action( 'customize_register', 'meinemarie_customize_register', 1000 );

/**
 * Removes some (coloring) customization settings of twentysixteen made obsolete
 * by the customization settings defined in this theme.
 *
 * @param WP_Cusomize_Manager $wp_customize The WP_Customize_Manager object.
 * @since MeineMarie 1.0
 */
function meinemarie_remove_twentysixteen_unnecessary_customizers( $wp_customize ) {
	$wp_customize->remove_setting( 'color_scheme' );
	$wp_customize->remove_control( 'color_scheme' );

	// Replaced by accent color.
	$wp_customize->remove_setting( 'link_color' );
	$wp_customize->remove_control( 'link_color' );
}

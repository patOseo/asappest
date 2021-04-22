<?php

function wpdc_add_custom_gutenberg_color_palette() {
	add_theme_support(
		'editor-color-palette',
		[
			[
				'name'  => esc_html__( 'White', 'wpdc' ),
				'slug'  => 'white',
				'color' => '#ffffff',
			],
			[
				'name'  => esc_html__( 'Black', 'wpdc' ),
				'slug'  => 'black',
				'color' => '#212529',
			],
			[
				'name'  => esc_html__( 'Green', 'wpdc' ),
				'slug'  => 'green',
				'color' => '#00a950',
			],
			[
				'name'  => esc_html__( 'Purple', 'wpdc' ),
				'slug'  => 'purple',
				'color' => '#47357c',
			],
			[
				'name'  => esc_html__( 'Light Gray', 'wpdc' ),
				'slug'  => 'light-gray',
				'color' => '#dedede',
			],
			[
				'name'  => esc_html__( 'Dark Gray', 'wpdc' ),
				'slug'  => 'dark-gray',
				'color' => '#333333',
			],

		]
	);
}
add_action( 'after_setup_theme', 'wpdc_add_custom_gutenberg_color_palette' );
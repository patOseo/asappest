<?php

// Enqueue block CSS for the editor
function custom_blocks_editor_scripts() {
	// Enqueue block editor styles
    wp_enqueue_style(
        'custom-blocks-editor-css',
        get_stylesheet_directory_uri() . '/css/custom-blocks.css',
        [ 'wp-edit-blocks' ]
    );
}


// Create custom Gutenberg block category for ACF Blocks
function acf_block_category( $categories, $post ) {
	return array_merge(
		$categories,
		array(
			array(
				'slug' => 'acf-blocks',
				'title' => __( 'Custom Blocks', 'acf-blocks' ),
			),
		)
	);
}
add_filter( 'block_categories', 'acf_block_category', 1, 2);


// Hook the enqueue functions into the editor
add_action( 'enqueue_block_editor_assets', 'custom_blocks_editor_scripts' );


function acf_custom_blocks() {
	
	// check function exists
	if( function_exists('acf_register_block') ) {
		
		// register call-to-action block
		acf_register_block(array(
			'name'				=> 'call-to-action',
			'title'				=> __('CTA Button'),
			'description'		=> __('A custom block for call-to-action'),
			'mode'				=> 'edit',
			'render_template'	=> 'global-templates/blocks/block-cta.php',
			'category'			=> 'acf-blocks',
			'icon'				=> 'slides',
			'keywords'			=> array( 'call to action', 'button' ),
		));

		// register card block
		acf_register_block(array(
			'name'				=> 'card',
			'title'				=> __('Card'),
			'description'		=> __('A custom block for content card.'),
			'render_template'	=> 'global-templates/blocks/block-card.php',
			'category'			=> 'acf-blocks',
			'icon'				=> 'tablet',
			'keywords'			=> array( 'card', 'box' ),
		));

		// accordion block
		acf_register_block(array(
			'name'				=> 'accordion',
			'title'				=> __('Accordion'),
			'description'		=> __('A custom block to display a FAQ-style accordion.'),
			'mode'				=> 'edit',
			'render_template'	=> 'global-templates/blocks/block-accordion.php',
			'category'			=> 'acf-blocks',
			'icon'				=> 'excerpt-view',
			'keywords'			=> array( 'faq', 'accordion' ),
		));
	}
}

add_action('acf/init', 'acf_custom_blocks');
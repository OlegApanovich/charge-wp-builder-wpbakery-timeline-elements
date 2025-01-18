<?php
/**
 * Configuration file for [wpb-plus-vertical-timeline-item] shortcode of 'Vertical Timeline' element.
 *
 * @since 1.0
 */

use WpbPlusTimeline\CustomHeadingIntegration;

defined( 'ABSPATH' ) || exit;

$custom_heading_integration = new CustomHeadingIntegration();

$params = array_merge(
	[
		[
			'type'        => 'dropdown',
			'value'       => [
				esc_html__( 'Right', 'charge-wp-builder-wpbakery-timeline-elements' ) => 'right',
				esc_html__( 'Left', 'charge-wp-builder-wpbakery-timeline-elements' ) => 'left',
			],
			'heading'     => esc_html__( 'Position', 'charge-wp-builder-wpbakery-timeline-elements' ),
			'param_name'  => 'position',
			'description' => esc_html__( 'Choose right or left item position for timeline item.', 'charge-wp-builder-wpbakery-timeline-elements' ),
		],
		[
			'type'        => 'colorpicker',
			'value'       => '#00c4f3',
			'heading'     => esc_html__( 'Marker color', 'charge-wp-builder-wpbakery-timeline-elements' ),
			'param_name'  => 'marker_color',
			'description' => esc_html__( 'Select custom color for timeline item marker.', 'charge-wp-builder-wpbakery-timeline-elements' ),
		],
		[
			'type'        => 'colorpicker',
			'value'       => '#FEFEFE',
			'heading'     => esc_html__( 'Title Background', 'charge-wp-builder-wpbakery-timeline-elements' ),
			'param_name'  => 'title_color',
			'description' => esc_html__( 'Select background for title.', 'charge-wp-builder-wpbakery-timeline-elements' ),
		],
		[
			'type'             => 'textfield',
			'value'            => 'Lorem ipsum.',
			'heading'          => esc_html__( 'Title', 'charge-wp-builder-wpbakery-timeline-elements' ),
			'admin_label'      => true,
			'param_name'       => 'title',
			'description'      => esc_html__( 'Enter text for title line.', 'charge-wp-builder-wpbakery-timeline-elements' ),
			'edit_field_class' => 'vc_col-sm-9',
		],
		[
			'type'             => 'checkbox',
			'heading'          => esc_html__( 'Use custom font?', 'charge-wp-builder-wpbakery-timeline-elements' ),
			'param_name'       => 'use_custom_fonts_title',
			'description'      => esc_html__( 'Enable custom font option.', 'charge-wp-builder-wpbakery-timeline-elements' ),
			'edit_field_class' => 'vc_col-sm-3',
		],
	],
	$custom_heading_integration->add_custom_font_to_field( 'title', 'Title', [ 'exclude' => [ 'source', 'text', 'css' ] ], [ 'tag', 'text_align' ] ),
	[
		[
			'type'             => 'textfield',
			'value'            => 'Feb 2016',
			'heading'          => esc_html__( 'Date', 'charge-wp-builder-wpbakery-timeline-elements' ),
			'admin_label'      => true,
			'param_name'       => 'date',
			'description'      => esc_html__( 'Initially, it was designed as a date field, but you can use it as a regular text as well. ', 'charge-wp-builder-wpbakery-timeline-elements' ),
			'edit_field_class' => 'vc_col-sm-9',
		],
		[
			'type'             => 'checkbox',
			'heading'          => esc_html__( 'Use custom font?', 'charge-wp-builder-wpbakery-timeline-elements' ),
			'param_name'       => 'use_custom_fonts_date',
			'description'      => esc_html__( 'Enable custom font option.', 'charge-wp-builder-wpbakery-timeline-elements' ),
			'edit_field_class' => 'vc_col-sm-3',
		],
	],
	$custom_heading_integration->add_custom_font_to_field( 'date', 'Date', [ 'exclude' => [ 'source', 'text', 'css' ] ], [ 'tag', 'text_align' ] ),
	[
		[
			'type'        => 'colorpicker',
			'value'       => '#00c4f3',
			'heading'     => esc_html__( 'Date background', 'charge-wp-builder-wpbakery-timeline-elements' ),
			'param_name'  => 'date_background',
			'description' => esc_html__( 'Select custom color for your date field.', 'charge-wp-builder-wpbakery-timeline-elements' ),
		],
		[
			'type'       => 'textarea_html',
			'heading'    => esc_html__( 'Text', 'charge-wp-builder-wpbakery-timeline-elements' ),
			'param_name' => 'content',
			'value'      => 'Lorem ipsum Nisi labore aute do aute culpa magna nulla voluptate exercitation deserunt proident.',
		],
		[
			'type'        => 'colorpicker',
			'value'       => '#FEFEFE',
			'heading'     => esc_html__( 'Text Background', 'charge-wp-builder-wpbakery-timeline-elements' ),
			'param_name'  => 'text_color',
			'description' => esc_html__( 'Select background for text.', 'charge-wp-builder-wpbakery-timeline-elements' ),
		],
	]
);

return [
	'name'                    => __( 'Vertical Timeline Item', 'charge-wp-builder-wpbakery-timeline-elements' ),
	'base'                    => 'wpbakery-plus-vertical-timeline-item',
	'class'                   => 'wpbakery-plus-vertical-timeline-item',
	'description'             => __( 'Timeline item for vertical timeline element.', 'charge-wp-builder-wpbakery-timeline-elements' ),
	'as_child'                => [ 'only' => 'wpbakery-plus-vertical-timeline' ],
	'content_element'         => true,
	'show_settings_on_create' => true,
	'js_view'                 => 'VcColumnView',
	'params'                  => array_merge(
		$params,
		[ vc_map_add_css_animation() ],
		wpbplustimeline_config( 'shortcode-container-config' )
	),
];

<?php

if (!defined('ABSPATH')) {exit;}
/*
 * Add-on Name: Heading
 */

class WPBakeryShortCode_Dfd_Heading extends WPBakeryShortCode {}

$tooltips = array(
	'style_01' => esc_attr__('Classic', 'dfd-native'),
	'style_02' => esc_attr__('Classic Title bottom', 'dfd-native'),
	'style_03' => esc_attr__('Classic Title bottom top delimeter', 'dfd-native'),
	'style_04' => esc_attr__('Classic top delimeter', 'dfd-native'),
	'style_05' => esc_attr__('Title top', 'dfd-native'),
	'style_06' => esc_attr__('Title bottom', 'dfd-native'),
	'style_07' => esc_attr__('Left delimiter', 'dfd-native'),
	'style_09' => esc_attr__('Right delimiter', 'dfd-native'),
	'style_11' => esc_attr__('Sides delimiter', 'dfd-native'),
	'style_13' => esc_attr__('Bottom delimiter back title', 'dfd-native'),
	'style_14' => esc_attr__('Top delimiter back title', 'dfd-native'),
);

vc_map(
	array(
		'name'			=> esc_html__('Heading', 'dfd-native'),
		'base'			=> 'dfd_heading',
		'icon'			=> 'dfd_heading dfd_shortcode',
		'class'			=> 'dfd_heading dfd_shortcode',
		'category'		=> esc_html__('Native', 'dfd-native'),
		'description'	=> esc_html__('Allows to add headings on your site', 'dfd-native'),
		'params'		=> array(
			array(
				'type'				=> 'radio_image_select',
				'heading'			=> esc_html__('Style', 'dfd-native'),
				'param_name'		=> 'style',
				'simple_mode'		=> false,
				'options'			=> Dfd_Theme_Helpers::dfd_build_shortcode_style_param(DFD_EXTENSIONS_PLUGIN_PATH, DFD_EXTENSIONS_PLUGIN_URL, 'heading/', 'heading/', false, $tooltips),
				'value'				=> 'style_01'
			),
			array(
				'type'				=> 'textarea_html',
				'heading'			=> esc_html__('Title', 'dfd-native'),
				'param_name'		=> 'content',
				'value'				=> esc_html__('Title','dfd-native'),
				'admin_label'		=> true,
			),
			array(
				'type'				=> 'textfield',
				'heading'			=> esc_html__('Subtitle', 'dfd-native'),
				'param_name'		=> 'subtitle',
				'value'				=> esc_html__('Subtitle','dfd-native'),
				'admin_label'		=> true,
			),
			array(
				'type'				=> 'dfd_radio_advanced',
				'heading'			=> '<span class="dfd-vc-toolip"><i class="dfd-socicon-question-sign"></i><span class="dfd-vc-tooltip-text">'.esc_html__('This option allows you to align the heading content horizontally','dfd-native').'</span></span>'.esc_html__('Content alignment', 'dfd-native'),
				'param_name'		=> 'content_alignment',
				'value'				=> 'text-center',
				'options'			=> array(
					esc_html__('Left', 'dfd-native')	=> 'text-left',
					esc_html__('Center', 'dfd-native') => 'text-center',
					esc_html__('Right', 'dfd-native')	=> 'text-right'
				),
				'edit_field_class'	=> 'vc_column vc_col-sm-12 no-border-bottom',
			),
			array(
				'type'				=> 'dfd_heading_param',
				'text'				=> esc_html__('Title margins', 'dfd-native'),
				'param_name'		=> 'title_margin_heading',
				'edit_field_class'	=> 'dfd-heading-param-wrapper vc_column vc_col-sm-12 no-top-margin',
			),
			array(
				'type'				=> 'dfd_margin_param',
				'heading'			=> '',
				'param_name'		=> 'heading_margin',
				'positions'			=> array(
					'top'				=> esc_html__('Top', 'dfd-native'),
					'bottom'			=> esc_html__('Bottom', 'dfd-native'),
				),
				'edit_field_class'	=> 'vc_column vc_col-sm-12 no-border-bottom',
			),
			array(
				'type'				=> 'dfd_heading_param',
				'text'				=> esc_html__('Subtitle margins', 'dfd-native'),
				'param_name'		=> 'subtitle_margin_heading',
				'edit_field_class'	=> 'dfd-heading-param-wrapper vc_column vc_col-sm-12 no-top-margin',
			),
			array(
				'type'				=> 'dfd_margin_param',
				'heading'			=> '',
				'param_name'		=> 'subheading_margin',
				'positions'			=> array(
					'top'				=> esc_html__('Top', 'dfd-native'),
					'bottom'			=> esc_html__('Bottom', 'dfd-native'),
				),
				'edit_field_class'	=> 'vc_column vc_col-sm-12 no-border-bottom',
				'dependency'		=> array('element' => 'subtitle', 'not_empty' => true),
			),
			array(
				'type'				=> 'dfd_heading_param',
				'text'				=> esc_html__('Extra features', 'dfd-native'),
				'param_name'		=> 'extra_heading',
				'edit_field_class'	=> 'dfd-heading-param-wrapper vc_column vc_col-sm-12 no-top-margin',
			),
			array(
				'type'				=> 'dropdown',
				'heading'			=> '<span class="dfd-vc-toolip"><i class="dfd-socicon-question-sign"></i><span class="dfd-vc-tooltip-text">'.esc_html__('Choose the appear effect for the element','dfd-native').'</span></span>'.esc_html__('Animation', 'dfd-native'),
				'param_name'		=> 'module_animation',
				'value'				=> Dfd_Theme_Helpers::dfd_module_animation_styles(),
			),
			array(
				'type'				=> 'textfield',
				'heading'			=> '<span class="dfd-vc-toolip"><i class="dfd-socicon-question-sign"></i><span class="dfd-vc-tooltip-text">'.esc_html__('Add the unique class name for the element which can be used for custom CSS codes','dfd-native').'</span></span>'.esc_html__('Custom CSS Class', 'dfd-native'),
				'param_name'		=> 'el_class',
			),
			array(
				'type'				=> 'dfd_video_link_param',
				'heading'			=> '<span class="dfd-vc-toolip"><i class="dfd-socicon-question-sign"></i><span class="dfd-vc-tooltip-text">'.esc_html__('Video tutorial and theme documentation article','dfd-native').'</span></span>'.esc_html__('Tutorials','dfd-native'),
				'param_name'		=> 'tutorials',
				'doc_link'			=> '//nativewptheme.net/support/visual-composer/heading',
				'video_link'		=> 'https://www.youtube.com/watch?v=xFBHEjwmT94&feature=youtu.be',
			),
			array(
				'type'				=> 'dfd_single_checkbox',
				'heading'			=> '<span class="dfd-vc-toolip tooltip-bottom"><i class="dfd-socicon-question-sign"></i><span class="dfd-vc-tooltip-text">'.esc_html__('This option allows you to enable or disable the delimiter for the heading','dfd-native').'</span></span>'.esc_html__('Delimiter', 'dfd-native'),
				'param_name'		=> 'enable_delimiter',
				'value'				=> 'yes',
				'options'			=> array(
					'yes'				=> array(
						'on'				=> 'Yes',
						'off'				=> 'No',
					),
				),
				'group'				=> esc_html__('Delimiter', 'dfd-native'),
			),
			array(
				'type'				=> 'dfd_radio_advanced',
				'heading'			=> '<span class="dfd-vc-toolip tooltip-bottom"><i class="dfd-socicon-question-sign"></i><span class="dfd-vc-tooltip-text">'.esc_html__('Choose one of the delimiter\'s styles','dfd-native').'</span></span>'.esc_html__('Delimiter style', 'dfd-native'),
				'param_name'		=> 'delimiter_style',
				'value'				=> 'line',
				'options'			=> array(
					esc_html__('Line', 'dfd-native')	=> 'line',
					esc_html__('Icon', 'dfd-native')	=> 'icon',
					esc_html__('Image', 'dfd-native')	=> 'image',
				),
				'dependency'		=> array('element' => 'enable_delimiter', 'value' => 'yes'),
				'group'				=> esc_html__('Delimiter', 'dfd-native'),
			),
			array(
				'type'				=> 'dfd_delimiter',
				'heading'			=> esc_html__('Delimiter settings', 'dfd-native'),
				'param_name'		=> 'delimiter_settings',
				'edit_field_class'	=> 'dfd_vc_heading_delimiter vc_col-xs-12 vc_column',
				'unit'				=> 'px',
				'positions'			=> array(
					esc_attr__('Height', 'dfd-native') => 'border-bottom-width',
					esc_attr__('Width', 'dfd-native')	=> 'width',
				),
				'enable_radius'		=> false,
				'label_color'		=> esc_html__('Delimiter Color', 'dfd-native'),
				'label_width'		=> esc_html__('Delimiter height/width', 'dfd-native'),
				'label_border'		=> esc_html__('Delimiter style', 'dfd-native'),
				'dependency'		=> array('element' => 'delimiter_style', 'value' => 'line'),
				'value'				=> 'delimiter_style:solid|delimiter_height:1|delimiter_width:80',
				'group'				=> esc_html__('Delimiter', 'dfd-native'),
			),
			/* icon delimiter */
			array(
				'type'				=> 'dfd_radio_advanced',
				'heading'			=> '<span class="dfd-vc-toolip"><i class="dfd-socicon-question-sign"></i><span class="dfd-vc-tooltip-text">'.esc_html__('Choose the icon or custom image to be displayed in delimiter','dfd-native').'</span></span>'.esc_html__('Icon to display', 'dfd-native'),
				'param_name'		=> 'icon_type',
				'value'				=> 'selector',
				'options'			=> array(
					esc_html__('Icon', 'dfd-native') => 'selector',
					esc_html__('Image', 'dfd-native') => 'custom',
				),
				'dependency'		=> array('element' => 'delimiter_style', 'value' => array('icon')),
				'group'				=> esc_html__('Delimiter', 'dfd-native'),
			),
			array(
				'type'				=> 'dfd_radio_advanced',
				'heading'			=> '<span class="dfd-vc-toolip"><i class="dfd-socicon-question-sign"></i><span class="dfd-vc-tooltip-text">'.esc_html__('Choose the icon library','dfd-native').'</span></span>'.esc_html__('Icon library', 'dfd-native'),
				'param_name'		=> 'select_icon',
				'value'				=> 'dfd_icons',
				'options'			=> Dfd_Theme_Helpers::build_vc_icons_fonts_list(false),
				'dependency'		=> array('element' => 'icon_type', 'value' => array('selector')),
				'group'				=> esc_html__('Delimiter', 'dfd-native'),
			),
			array(
				'type'				=> 'iconpicker',
				'heading'			=> esc_html__('Select Icon ', 'dfd-native'),
				'param_name'		=> 'ic_dfd_icons',
				'settings'			=> array(
					'emptyIcon'			=> false,
					'type'				=> 'dfd_icons',
					'iconsPerPage'		=> 400,
				),
				'dependency'		=> array('element' => 'select_icon', 'value' => 'dfd_icons',),
				'group'				=> esc_html__('Delimiter', 'dfd-native'),
			),
			Dfd_Theme_Helpers::build_vc_icons_param('fontawesome', esc_html__('Delimiter', 'dfd-native'), array()),
			Dfd_Theme_Helpers::build_vc_icons_param('openiconic', esc_html__('Delimiter', 'dfd-native'), array()),
			Dfd_Theme_Helpers::build_vc_icons_param('typicons', esc_html__('Delimiter', 'dfd-native'), array()),
			Dfd_Theme_Helpers::build_vc_icons_param('entypo', esc_html__('Delimiter', 'dfd-native'), array()),
			Dfd_Theme_Helpers::build_vc_icons_param('linecons', esc_html__('Delimiter', 'dfd-native'), array()),
			array(
				'type'				=> 'number',
				'heading'			=> esc_html__('Icon size', 'dfd-native'),
				'param_name'		=> 'icon_size',
				'value'				=> 32,
				'min'				=> 12,
				'max'				=> 72,
				'edit_field_class'	=> 'vc_column vc_col-sm-6 crum_vc dfd-number-wrap',
				'dependency'		=> array('element' => 'icon_type', 'value' => array('selector')),
				'group'				=> esc_html__('Delimiter', 'dfd-native'),
			),
			array(
				'type'				=> 'colorpicker',
				'heading'			=> esc_html__('Color', 'dfd-native'),
				'param_name'		=> 'icon_color',
				'edit_field_class'	=> 'vc_column vc_col-sm-6',
				'dependency'		=> array('element' => 'icon_type', 'value' => array('selector')),
				'group'				=> esc_html__('Delimiter', 'dfd-native'),
			),
			array(
				'type'				=> 'dfd_radio_advanced',
				'heading'			=> '<span class="dfd-vc-toolip"><i class="dfd-socicon-question-sign"></i><span class="dfd-vc-tooltip-text">'.esc_html__('Choose the existing icon style or design your own','dfd-native').'</span></span>'.esc_html__('Icon Style', 'dfd-native'),
				'param_name'		=> 'icon_style',
				'value'				=> 'none',
				'options'			=> array(
					esc_html__('Simple', 'dfd-native')				=> 'none',
					esc_html__('Circle Background', 'dfd-native')	=> 'circle',
					esc_html__('Square Background', 'dfd-native')	=> 'square',
					esc_html__('Design your own', 'dfd-native')	=> 'advanced',
				),
				'dependency'		=> array('element' => 'icon_type', 'value' => array('selector')),
				'group'				=> esc_html__('Delimiter', 'dfd-native'),
			),
			array(
				'type'				=> 'colorpicker',
				'heading'			=> esc_html__('Background Color', 'dfd-native'),
				'param_name'		=> 'icon_color_bg',
				'dependency'		=> array('element' => 'icon_style', 'value' => array('circle', 'square', 'advanced')),
				'group'				=> esc_html__('Delimiter', 'dfd-native'),
			),
			array(
				'type'				=> 'number',
				'heading'			=> esc_html__('Background Size', 'dfd-native'),
				'param_name'		=> 'icon_border_spacing',
				'value'				=> 50,
				'min'				=> 30,
				'max'				=> 500,
				'edit_field_class'	=> 'vc_column vc_col-sm-12 crum_vc dfd-number-wrap',
				'dependency'		=> array('element' => 'icon_style', 'value' => array('advanced')),
				'group'				=> esc_html__('Delimiter', 'dfd-native'),
			),
			array(
				'type'				=> 'dfd_radio_advanced',
				'heading'			=> esc_html__('Icon Border Style', 'dfd-native'),
				'param_name'		=> 'icon_border_style',
				'value'				=> '',
				'options'			=> array(
					esc_html__('None', 'dfd-native') => '',
					esc_html__('Solid', 'dfd-native') => 'solid',
					esc_html__('Dashed', 'dfd-native') => 'dashed',
					esc_html__('Dotted', 'dfd-native') => 'dotted',
					esc_html__('Double', 'dfd-native') => 'double',
					esc_html__('Inset', 'dfd-native') => 'inset',
					esc_html__('Outset', 'dfd-native') => 'outset',
				),
				'dependency'		=> array('element' => 'icon_style', 'value' => array('advanced')),
				'group'				=> esc_html__('Delimiter', 'dfd-native'),
			),
			array(
				'type'				=> 'number',
				'heading'			=> esc_html__('Border Width', 'dfd-native'),
				'param_name'		=> 'icon_border_size',
				'value'				=> 1,
				'min'				=> 1,
				'max'				=> 10,
				'edit_field_class'	=> 'vc_column vc_col-sm-4 crum_vc dfd-number-wrap',
				'dependency'		=> array('element' => 'icon_border_style', 'not_empty' => true),
				'group'				=> esc_html__('Delimiter', 'dfd-native'),
			),
			array(
				'type'				=> 'number',
				'heading'			=> esc_html__('Border Radius', 'dfd-native'),
				'param_name'		=> 'icon_border_radius',
				'min'				=> 1,
				'max'				=> 500,
				'edit_field_class'	=> 'vc_column vc_col-sm-4 crum_vc dfd-number-wrap',
				'dependency'		=> array('element' => 'icon_border_style', 'not_empty' => true),
				'group'				=> esc_html__('Delimiter', 'dfd-native'),
			),
			array(
				'type'				=> 'colorpicker',
				'heading'			=> esc_html__('Border Color', 'dfd-native'),
				'param_name'		=> 'icon_color_border',
				'edit_field_class'	=> 'vc_column vc_col-sm-4',
				'dependency'		=> array('element' => 'icon_border_style', 'not_empty' => true),
				'group'				=> esc_html__('Delimiter', 'dfd-native'),
			),
			array(
				'type'				=> 'attach_image',
				'heading'			=> esc_html__('Upload Image', 'dfd-native'),
				'param_name'		=> 'icon_img',
				'edit_field_class'	=> 'vc_column vc_col-sm-6',
				'dependency'		=> array('element' => 'icon_type', 'value' => array('custom')),
				'group'				=> esc_html__('Delimiter', 'dfd-native'),
			),
			array(
				'type'				=> 'number',
				'heading'			=> esc_html__('Image Width', 'dfd-native'),
				'param_name'		=> 'img_width',
				'value'				=> 48,
				'min'				=> 16,
				'max'				=> 512,
				'edit_field_class'	=> 'vc_column vc_col-sm-6 crum_vc dfd-number-wrap',
				'dependency'		=> array('element' => 'icon_type', 'value' => array('custom')),
				'group'				=> esc_html__('Delimiter', 'dfd-native'),
			),
			/* image delimiter */
			array(
				'type'				=> 'attach_image',
				'heading'			=> '<span class="dfd-vc-toolip"><i class="dfd-socicon-question-sign"></i><span class="dfd-vc-tooltip-text">'.esc_html__('Upload the image from the media library. The image will be set as the delimiter pattern','dfd-native').'</span></span>'.esc_html__('Delimiter Image', 'dfd-native'),
				'param_name'		=> 'delimiter_image',
				'dependency'		=> array('element' => 'delimiter_style', 'value' => array('image')),
				'group'				=> esc_html__('Delimiter', 'dfd-native'),
			),
			array(
				'type'				=> 'dfd_margin_param',
				'heading'			=> esc_html__('Delimiter Margins', 'dfd-native'),
				'param_name'		=> 'delimiter_margin',
				'positions'			=> array(
					'top'				=> esc_html__('Top', 'dfd-native'),
					'bottom'			=> esc_html__('Bottom', 'dfd-native'),
				),
				'value'				=> 'margin-top:10|margin-bottom:10',
				'dependency'		=> array('element' => 'enable_delimiter', 'value' => 'yes'),
				'group'				=> esc_html__('Delimiter', 'dfd-native'),
			),
			array(
				'type'				=> 'dfd_heading_param',
				'text'				=> esc_html__('Title', 'dfd-native') . ' ' . esc_attr__('Typography', 'dfd-native'),
				'param_name'		=> 'title_t_heading',
				'edit_field_class'	=> 'dfd-heading-param-wrapper vc_column vc_col-sm-12 no-top-margin',
				'group'				=> esc_html__('Typography', 'dfd-native'),
			),
			array(
				'type'				=> 'dfd_font_container',
				'heading'			=> '',
				'param_name'		=> 'title_font_options',
				'settings'				=> array(
					'fields'				=> array(
						'tag' => 'h2',
						'font_size',
						'letter_spacing',
						'line_height',
						'color',
						'font_style'
					),
				),
				'group'				=> esc_html__('Typography', 'dfd-native'),
			),
			array(
				'type'				=> 'dfd_single_checkbox',
				'heading'			=> '<span class="dfd-vc-toolip"><i class="dfd-socicon-question-sign"></i><span class="dfd-vc-tooltip-text">'.esc_html__('Allows you to use custom Google font','dfd-native').'</span></span>'.esc_html__('Custom font family', 'dfd-native'),
				'param_name'		=> 'title_google_fonts',
				'options'			=> array(
					'yes'				=> array(
						'on'	=> 'Yes',
						'off'	=> 'No',
					),
				),
				'group'				=> esc_html__('Typography', 'dfd-native'),
			),
			array(
				'type'				=> 'google_fonts',
				'param_name'		=> 'title_custom_fonts',
				'settings'			=> array(
					'fields'			=> array(
						'font_family_description'	=> esc_html__('Select font family.', 'dfd-native'),
						'font_style_description'	=> esc_html__('Select font style.', 'dfd-native'),
					),
				),
				'edit_field_class'	=> 'vc_column vc_col-sm-12 no-border-bottom',
				'dependency'		=> array('element' => 'title_google_fonts', 'value' => 'yes'),
				'group'				=> esc_html__('Typography', 'dfd-native'),
			),
			array(
				'type'				=> 'dfd_heading_param',
				'text'				=> esc_html__('Subtitle', 'dfd-native') . ' ' . esc_attr__('Typography', 'dfd-native'),
				'param_name'		=> 'subtitle_t_heading',
				'class'				=> 'ult-param-heading',
				'edit_field_class'	=> 'dfd-heading-param-wrapper vc_column vc_col-sm-12',
				'group'				=> esc_html__('Typography', 'dfd-native'),
			),
			array(
				'type'				=> 'dfd_font_container',
				'heading'			=> '',
				'param_name'		=> 'subtitle_font_options',
				'settings'			=> array(
					'fields'			=> array(
						'tag' => 'div',
						'font_size',
						'letter_spacing',
						'line_height',
						'color',
						'font_style'
					),
				),
				'group'				=> esc_html__('Typography', 'dfd-native'),
			),
			array(
				'type'				=> 'dfd_single_checkbox',
				'heading'			=> '<span class="dfd-vc-toolip"><i class="dfd-socicon-question-sign"></i><span class="dfd-vc-tooltip-text">'.esc_html__('Allows you to use custom Google font','dfd-native').'</span></span>'.esc_html__('Custom font family', 'dfd-native'),
				'param_name'		=> 'subtitle_google_fonts',
				'options'			=> array(
					'yes'				=> array(
						'on'	=> 'Yes',
						'off'	=> 'No',
					),
				),
				'group'				=> esc_html__('Typography', 'dfd-native'),
			),
			array(
				'type'				=> 'google_fonts',
				'param_name'		=> 'subtitle_custom_fonts',
				'settings'			=> array(
					'fields'		=> array(
						'font_family_description'	=> esc_html__('Select font family.', 'dfd-native'),
						'font_style_description'	=> esc_html__('Select font style.', 'dfd-native'),
					),
				),
				'dependency'		=> array('element' => 'subtitle_google_fonts', 'value' => 'yes'),
				'group'				=> esc_html__('Typography', 'dfd-native'),
			),
			array(
				'type'				=> 'dfd_param_responsive_text',
				'heading'			=> esc_html__('Title responsive settings', 'dfd-native'),
				'param_name'		=> 'title_responsive',
				'edit_field_class'	=> 'vc_column vc_col-sm-12 no-bottom-padding no-border-bottom',
				'group'				=> esc_html__('Responsive', 'dfd-native'),
			),
			array(
				'type'				=> 'dfd_param_responsive_text',
				'heading'			=> esc_html__('Subtitle responsive settings', 'dfd-native'),
				'param_name'		=> 'subtitle_responsive',
				'edit_field_class'	=> 'vc_column vc_col-sm-12 no-bottom-padding no-border-bottom',
				'group'				=> esc_html__('Responsive', 'dfd-native'),
			),
		)
	)
);

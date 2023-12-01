<?php

/* Unique options for every EP theme */

$admin_url = EPCL_PLUGIN_URL.'/functions/admin';

$red = '#FF3152';
$yellow = '#FFD012';
$black1= '#111111';
$black = '#222222';
$text_color = '#494949';
$white = '#ffffff';

/* Blog */

Redux::setSection( $opt_name, array(
	'title' => esc_html__('Styling', 'epcl_framework'),
	'icon' => 'el-icon-pencil',
) );

/* Background */

Redux::setSection( $opt_name, array(
	'title' => esc_html__('Body Background', 'epcl_framework'),
    // 'icon' => 'el-icon-pencil',
    'subsection' => true,
	'fields' => array(
        array(
			'id' => 'background_type',
			'type' => 'button_set',
			'title' => esc_html__('Background Type', 'epcl_framework'),
			'subtitle' => '',
            'options' => array(
                '1' => 'Image Pattern',
                '2' => 'Solid Color',
                '3' => 'Fullscreen Image',
                '4' => 'Gradient',
            ),
			'default' => '2'
		),
		array(
			'id' => 'bg_body_color',
			'type' => 'color',
			'required' => array('background_type', '=', '2'),
			'title' => esc_html__('Body Background Color', 'epcl_framework'),
			'desc' => esc_html__('Pick a background color for the theme.', 'epcl_framework'),
			'default' => '#2C45A3',
			//'validate' => 'color',
			'transparent' => false
		),
		array(
			'id' => 'bg_body_pattern',
			'type' => 'media',
			'required' => array('background_type', '=', '1'),
			'url' => true,
			'preview'=> true,
			'title' => esc_html__('Pattern Uploader', 'epcl_framework'),
			'desc' => esc_html__('You can get a lot of free patterns on http://subtlepatterns.com', 'epcl_framework'),
		),
		array(
			'id' => 'bg_body_full',
			'type' => 'media',
			'required' => array('background_type', '=', '3'),
			'url' => true,
			'preview'=> true,
			'title' => esc_html__('Fullscreen Image', 'epcl_framework'),
			'desc' => esc_html__('Recommended size: 1920x1080 pixels', 'epcl_framework'),
        ),
        array(
			'id' => 'bg_body_gradient',
			'type' => 'color_gradient',
			'required' => array('background_type', '=', '4'),
			'title' => esc_html__('Gradient Color', 'epcl_framework'),
			'desc' => esc_html__('Pick 2 different colors for the gradient.', 'epcl_framework'),
			'default' => '#2C45A3',
			//'validate' => 'color',
            'transparent' => false,
            'default'  => array(
                'from' => '#2C45A3',
                'to'   => '#355BC5', 
            ),
        ),	
	)
) );

/* Basic Styling */

Redux::setSection( $opt_name, array(
	'title' => esc_html__('Basic Styling', 'epcl_framework'),
    // 'icon' => 'el-icon-pencil',
    'subsection' => true,
	'fields' => array(
        array(
			'id' => 'primary_color',
			'type' => 'color',
			'title' => esc_html__('Primary color ', 'epcl_framework'),
			'default' => $red,
			'subtitle' =>  esc_html__('Default: '.$red, 'epcl_framework'),
			//'validate' => 'color',
			'transparent' => false
		),
		array(
			'id' => 'secondary_color',
			'type' => 'color',
			'title' => esc_html__('Secondary color ', 'epcl_framework'),
			'default' => $yellow,
			'subtitle' =>  esc_html__('Default: '.$yellow, 'epcl_framework'),
			//'validate' => 'color',
			'transparent' => false
		),
		array(
			'id' => 'third_color',
			'type' => 'color',
			'title' => esc_html__('Third color (complementary) ', 'epcl_framework'),
			'default' => $black1,
			'subtitle' =>  esc_html__('Default: '.$black1, 'epcl_framework'),
			//'validate' => 'color',
			'transparent' => false
		),
		array(
			'id' => 'text_color',
			'type' => 'color',
			'title' => esc_html__('Text Color ', 'epcl_framework'),
			'default' => $text_color,
			'subtitle' =>  esc_html__('Default: '.$text_color, 'epcl_framework'),
			//'validate' => 'color',
			'transparent' => false
		),

	)
) );

/* Header */

Redux::setSection( $opt_name, array(
	'title' => esc_html__('Header', 'epcl_framework'),
    // 'icon' => 'el-icon-edit',
    'subsection' => true,
	'fields' => array(
        array(
			'id' => 'header_bg_color',
			'type' => 'color',
			'title' => esc_html__('Header Background color', 'epcl_framework'),
			'default' => 'transparent',
			'subtitle' =>  esc_html__('Default: transparent', 'epcl_framework'),
			//'validate' => 'color',
			'transparent' => true
        ),
        array(
			'id' => 'header_menu_link_color',
			'type' => 'link_color',
			'title' => esc_html__('Menu links color', 'epcl_framework'),
			'desc' => '',
			//'validate' => 'color',
			'active' => true,
			'default' => array(
				'regular' => $white,
                'hover' => $yellow,
                'active' => $yellow,
			),
        ),
        array(
			'id' => 'header_submenu_link_color',
			'type' => 'link_color',
			'title' => esc_html__('Submenu links color', 'epcl_framework'),
			'desc' => '',
			//'validate' => 'color',
			'active' => true,
			'default' => array(
				'regular' => $text_color,
                'hover' => $text_color,
                'active' => $yellow,
			),
        ),
        array(
			'id' => 'header_submenu_bg_color',
			'type' => 'color',
			'title' => esc_html__('Header Submenu Background color', 'epcl_framework'),
			'default' => $white,
			'subtitle' =>  esc_html__('Default: '.$white, 'epcl_framework'),
			//'validate' => 'color',
			'transparent' => false
        ),
        array(
			'id' => 'header_sticky_bg_color',
			'type' => 'color',
			'title' => esc_html__('Header Sticky Background color', 'epcl_framework'),
			'default' => $black1,
			'subtitle' =>  esc_html__('Default: '.$black1, 'epcl_framework'),
			//'validate' => 'color',
			'transparent' => false
		),
		array(
			'id' => 'header_mobile_icon_color',
			'type' => 'color',
			'title' => esc_html__('Header Mobile Icon color', 'epcl_framework'),
			'default' => $white,
			'subtitle' =>  esc_html__('Default: '.$white, 'epcl_framework'),
			'desc' =>  esc_html__('This is the menu bar icon, only appears on mobile to show/hide the main menu.', 'epcl_framework'),
			//'validate' => 'color',
			'transparent' => false
		),
	)
) );

/* Content */

Redux::setSection( $opt_name, array(
	'title' => esc_html__('Content', 'epcl_framework'),
    // 'icon' => 'el-icon-edit',
    'subsection' => true,
	'fields' => array(
        array(
			'id' => 'selection_bg_color',
			'type' => 'color',
			'title' => esc_html__('Selection background color', 'epcl_framework'),
			'default' => $red,
            'subtitle' =>  esc_html__('Default: '.$red, 'epcl_framework'),
            'desc' => esc_html__('You will see this event whenever a user make a text a selection.', 'epcl_framework'),
			//'validate' => 'color',
			'transparent' => false
        ),
        array(
			'id' => 'selection_text_color',
			'type' => 'color',
			'title' => esc_html__('Selection text color', 'epcl_framework'),
			'default' => $white,
            'subtitle' =>  esc_html__('Default: '.$white, 'epcl_framework'),
            'desc' => esc_html__('You will see this event whenever a user make a text a selection.', 'epcl_framework'),
			//'validate' => 'color',
			'transparent' => false
        ),
        array(
			'id' => 'main_content_bg_color',
			'type' => 'color',
			'title' => esc_html__('Main container background color', 'epcl_framework'),
			'default' => $white,
            'subtitle' =>  esc_html__('Default: '.$white, 'epcl_framework'),
            'desc' => esc_html__('This is the main container below filters, is used for post list and single post content.', 'epcl_framework'),
			//'validate' => 'color',
			'transparent' => false
        ),
        array(
			'id' => 'content_border_color',
			'type' => 'color',
			'title' => esc_html__('Content border color', 'epcl_framework'),
			'default' => '#e5e5e5',
            'subtitle' =>  esc_html__('Default: #e5e5e5', 'epcl_framework'),
            'desc' => esc_html__('Border between articles and used on the main sidebar.', 'epcl_framework'),
			//'validate' => 'color',
			'transparent' => false
        ),        
        array(
			'id' => 'main_link_gradient',
			'type' => 'color_gradient',
			'title' => esc_html__('Main gradient effect color', 'epcl_framework'),
			'desc' => esc_html__('Hover color for post titles.', 'epcl_framework'),
			//'validate' => 'color',
            'transparent' => false,
            'default'  => array(
                'from' => $red,
                'to'   => $yellow, 
            ),
        ),
        array(
			'id' => 'main_title_color',
			'type' => 'color',
			'title' => esc_html__('Main titles color', 'epcl_framework'),
			'default' => $black,
			'subtitle' =>  esc_html__('Default: '.$black, 'epcl_framework'),
			//'validate' => 'color',
			'transparent' => false
        ),
        array(
			'id' => 'main_title_decoration_color',
			'type' => 'color',
			'title' => esc_html__('Main titles decoration color', 'epcl_framework'),
			'default' => $yellow,
			'subtitle' =>  esc_html__('Default: '.$yellow, 'epcl_framework'),
			//'validate' => 'color',
			'transparent' => false
        ),
        array(
			'id' => 'counter_text_color',
			'type' => 'color',
			'title' => esc_html__('Global counter text color', 'epcl_framework'),
			'default' => $white,
            'subtitle' =>  esc_html__('Default: '.$white, 'epcl_framework'),
            'desc' => esc_html__('This is the global resources counter.', 'epcl_framework'),
			//'validate' => 'color',
			'transparent' => false
        ),
        array(
			'id' => 'counter_number_color',
			'type' => 'color',
			'title' => esc_html__('Global counter number color', 'epcl_framework'),
			'default' => $yellow,
            'subtitle' =>  esc_html__('Default: '.$yellow, 'epcl_framework'),
            'desc' => esc_html__('The animated number.', 'epcl_framework'),
			//'validate' => 'color',
			'transparent' => false
        ),
	)
) );

/* Buttons */

Redux::setSection( $opt_name, array(
	'title' => esc_html__('Buttons/Links', 'epcl_framework'),
    // 'icon' => 'el-icon-edit',
    'subsection' => true,
	'fields' => array(
        array(
			'id' => 'content_link_color',
			'type' => 'link_color',
			'title' => esc_html__('General link color', 'epcl_framework'),
			'subtitle' => esc_html__('Default: #222222, hover: #FF3152', 'epcl_framework'),
			//'validate' => 'color',
			'active' => false,
			'default' => array(
				'regular' => $black,
                'hover' => $red,
			),
        ),
        array(
			'id' => 'button_bg_color',
			'type' => 'color',
			'title' => esc_html__('Main button background color', 'epcl_framework'),
			'default' => $red,
            'subtitle' =>  esc_html__('Default: '.$red, 'epcl_framework'),
			//'validate' => 'color',
			'transparent' => false
        ),
        array(
			'id' => 'button_text_color',
			'type' => 'color',
			'title' => esc_html__('Main button text color', 'epcl_framework'),
			'default' => $white,
			'subtitle' =>  esc_html__('Default: '.$white, 'epcl_framework'),
			//'validate' => 'color',
			'transparent' => false
        ),
        array(
			'id' => 'tag_text_color',
			'type' => 'link_color',
			'title' => esc_html__('Tag button text color', 'epcl_framework'),
			'subtitle' => esc_html__('Default: #222222, hover: #ffffff', 'epcl_framework'),
			//'validate' => 'color',
			'active' => false,
			'default' => array(
				'regular' => $black,
                'hover' => $white,
			),
        ),
        array(
			'id' => 'tag_bg_color',
			'type' => 'link_color',
			'title' => esc_html__('Tag button background color', 'epcl_framework'),
			'subtitle' => esc_html__('Default: #FFD012, hover: #222222', 'epcl_framework'),
			//'validate' => 'color',
			'active' => false,
			'default' => array(
				'regular' => $yellow,
                'hover' => $black,
			),
        ),
        
	)
) );

/* Sidebar */

Redux::setSection( $opt_name, array(
	'title' => esc_html__('Sidebar', 'epcl_framework'),
    // 'icon' => 'el-icon-edit',
    'subsection' => true,
	'fields' => array(
        array(
			'id' => 'sidebar_bg_color',
			'type' => 'color',
			'title' => esc_html__('Sidebar background color', 'epcl_framework'),
			'default' => $white,
            'subtitle' =>  esc_html__('Default: '.$white, 'epcl_framework'),
			//'validate' => 'color',
			'transparent' => false
        ),
        array(
			'id' => 'sidebar_border_color',
			'type' => 'color',
			'title' => esc_html__('Sidebar border color', 'epcl_framework'),
			'default' => '#e5e5e5',
            'subtitle' =>  esc_html__('Default: #e5e5e5', 'epcl_framework'),
            'desc' => esc_html__('Border between articles and used on the main sidebar.', 'epcl_framework'),
			//'validate' => 'color',
			'transparent' => false
        ),
        array(
			'id' => 'sidebar_text_color',
			'type' => 'color',
			'title' => esc_html__('Sidebar text color', 'epcl_framework'),
			'default' => $text_color,
			'subtitle' =>  esc_html__('Default: '.$text_color, 'epcl_framework'),
			//'validate' => 'color',
			'transparent' => false
		),
        array(
			'id' => 'sidebar_link_color',
			'type' => 'link_color',
			'title' => esc_html__('Sidebar links color', 'epcl_framework'),
			'subtitle' => esc_html__('Default: '.$black, 'epcl_framework'),
			//'validate' => 'color',
			'active' => false,
			'default' => array(
				'regular' => $black,
                'hover' => $red,
			),
        ),
        array(
			'id' => 'sidebar_title_color',
			'type' => 'color',
			'title' => esc_html__('Sidebar titles color', 'epcl_framework'),
			'default' => $black,
			'subtitle' =>  esc_html__('Default: '.$black, 'epcl_framework'),
			//'validate' => 'color',
			'transparent' => false
        ),
        array(
			'id' => 'sidebar_title_decoration_color',
			'type' => 'color',
			'title' => esc_html__('Sidebar title decoration color', 'epcl_framework'),
			'default' => $yellow,
			'subtitle' =>  esc_html__('Default: '.$yellow, 'epcl_framework'),
			//'validate' => 'color',
			'transparent' => false
		),
	)
) );

/* Forms */

Redux::setSection( $opt_name, array(
	'title' => esc_html__('Forms', 'epcl_framework'),
    // 'icon' => 'el-icon-edit',
    'subsection' => true,
	'fields' => array(
        array(
            'id'   => 'info_forms',
            'type' => 'info',
            'style' => 'info',
            'icon' => 'el el-info-circle',
            'title' => esc_html__('Important:', 'epcl_framework'),
            'desc' => esc_html__('All these options affects contact and comments form.', 'epcl_framework')
        ),
        array(
			'id' => 'input_bg_color',
			'type' => 'color',
			'title' => esc_html__('Input box background color', 'epcl_framework'),
			'default' => '#f2f2f2',
            'subtitle' =>  esc_html__('Default: #f2f2f2', 'epcl_framework'),
			//'validate' => 'color',
			'transparent' => false
        ),
        array(
			'id' => 'input_text_color',
			'type' => 'color',
			'title' => esc_html__('Input box text color', 'epcl_framework'),
			'default' => $text_color,
            'subtitle' =>  esc_html__('Default: '.$text_color, 'epcl_framework'),
			//'validate' => 'color',
			'transparent' => false
        ),
        array(
			'id' => 'label_text_color',
			'type' => 'color',
			'title' => esc_html__('Label text color', 'epcl_framework'),
			'default' => $text_color,
            'subtitle' =>  esc_html__('Default: '.$text_color, 'epcl_framework'),
			//'validate' => 'color',
			'transparent' => false
        ),
        array(
			'id' => 'custom_select_bg_color',
			'type' => 'color',
			'title' => esc_html__('Custom select box background color', 'epcl_framework'),
			'default' => $red,
            'subtitle' =>  esc_html__('Default: '.$red, 'epcl_framework'),
			//'validate' => 'color',
			'transparent' => false
        ),
        array(
			'id' => 'custom_select_text_color',
			'type' => 'color',
			'title' => esc_html__('Custom select box text color', 'epcl_framework'),
			'default' => $white,
            'subtitle' =>  esc_html__('Default: '.$white, 'epcl_framework'),
			//'validate' => 'color',
			'transparent' => false
        ),
        array(
			'id' => 'submit_bg_color',
			'type' => 'color',
			'title' => esc_html__('Submit button background color', 'epcl_framework'),
			'default' => $red,
            'subtitle' =>  esc_html__('Default: '.$red, 'epcl_framework'),
			//'validate' => 'color',
			'transparent' => false
        ),
        array(
			'id' => 'submit_text_color',
			'type' => 'color',
			'title' => esc_html__('Submit button text color', 'epcl_framework'),
			'default' => $white,
            'subtitle' =>  esc_html__('Default: '.$white, 'epcl_framework'),
			//'validate' => 'color',
			'transparent' => false
        ),
	)
) );

/* Footer */

Redux::setSection( $opt_name, array(
	'title' => esc_html__('Footer', 'epcl_framework'),
    // 'icon' => 'el-icon-edit',
    'subsection' => true,
	'fields' => array(
        array(
			'id' => 'footer_bg_color',
			'type' => 'color',
			'title' => esc_html__('Footer background color', 'epcl_framework'),
			'default' => $red,
            'subtitle' =>  esc_html__('Default: '.$red, 'epcl_framework'),
			//'validate' => 'color',
			'transparent' => false
        ),
        array(
			'id' => 'footer_text_color',
			'type' => 'color',
			'title' => esc_html__('Footer text color', 'epcl_framework'),
			'default' => '#ffffff',
			'subtitle' =>  esc_html__('Default: '.$white, 'epcl_framework'),
			//'validate' => 'color',
			'transparent' => false
		),
        array(
			'id' => 'footer_link_color',
			'type' => 'link_color',
			'title' => esc_html__('Footer links color', 'epcl_framework'),
			'subtitle' => esc_html__('Default: '.$white, 'epcl_framework'),
			//'validate' => 'color',
			'active' => false,
			'default' => array(
				'regular' => '#ffffff',
                'hover' => '#ffffff',
			),
        ),
        array(
			'id' => 'footer_title_color',
			'type' => 'color',
			'title' => esc_html__('Footer titles color', 'epcl_framework'),
			'default' => '#ffffff',
			'subtitle' =>  esc_html__('Default: '.$white, 'epcl_framework'),
			//'validate' => 'color',
			'transparent' => false
        ),
        array(
			'id' => 'footer_title_decoration_color',
			'type' => 'color',
			'title' => esc_html__('Footer title decoration color', 'epcl_framework'),
			'default' => $yellow,
			'subtitle' =>  esc_html__('Default: '.$yellow, 'epcl_framework'),
			//'validate' => 'color',
			'transparent' => false
        ),
        array(
			'id' => 'footer_logo_text_color',
			'type' => 'color',
			'title' => esc_html__('Footer Logo text color', 'epcl_framework'),
			'default' => $white,
			'subtitle' =>  esc_html__('Default: '.$white, 'epcl_framework'),
			//'validate' => 'color',
			'transparent' => false
        ),
        array(
			'id' => 'footer_copyright_color',
			'type' => 'color',
			'title' => esc_html__('Footer copyright text color', 'epcl_framework'),
			'default' => '#ffffff',
			'subtitle' =>  esc_html__('Default: '.$white, 'epcl_framework'),
			//'validate' => 'color',
			'transparent' => false
        ),
        array(
			'id' => 'footer_copyright_link_color',
			'type' => 'color',
			'title' => esc_html__('Footer copyright links color', 'epcl_framework'),
			'subtitle' => esc_html__('Default: '.$white, 'epcl_framework'),
			//'validate' => 'color',
			'transparent' => false,
			'default' => '#ffffff'
        ),
	)
) );

?>
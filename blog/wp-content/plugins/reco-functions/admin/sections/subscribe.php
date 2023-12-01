<?php

/* Unique options for every EP theme */

$admin_url = EPCL_PLUGIN_URL.'/functions/admin';

/* General Settings */

Redux::setSection( $opt_name, array(
	'title' => esc_html__('Subscribe Settings', 'epcl_framework'),
	'icon' => ' el-icon-envelope',
	'fields' => array(
        array(
			'id' => 'enable_subscribe',
			'type' => 'switch',
			'title' => esc_html__('Display subscribe section before footer', 'epcl_framework'),
			'desc' => esc_html__('You must enter a valid Mailchimp url to use this section.', 'epcl_framework'),
			'default' => 1
        ),
		array(
			'id' => 'mailchimp_url',
			'type' => 'text',
			'validate' => 'url',
			'title' => esc_html__('MailChimp Subscribe FULL URL', 'epcl_framework'),
			'subtitle' => esc_html__('This will enable subscribers form on footer', 'epcl_framework'),
			'fullwidth' => true,
			'desc' => esc_html__('e.g. https://estudiopatagon.us16.list-manage.com/subscribe?u=99eb5e3929c5a528d8b08961f&id=2143723b69', 'epcl_framework')
        ),
        array(
			'id' => 'bg_subscribe',
			'type' => 'media',
			'url' => true,
			'preview'=> true,
			'title' => esc_html__('Subscribe Background Image', 'epcl_framework'),
			'desc' => esc_html__('Recommended size: 1650x600 pixels', 'epcl_framework'),
        ),
        array(
			'id' => 'title_subscribe',
			'type' => 'text',
			'title' => esc_html__('Title of subscribe section (Optional)', 'epcl_framework'),
			'desc' => esc_html__('e.g. Subscribe to Reco', 'epcl_framework'),
        ),
        array(
			'id' => 'description_subscribe',
			'type' => 'text',
			'title' => esc_html__('Description of subscribe section (Optional)', 'epcl_framework'),
			'desc' => esc_html__('e.g. Get the latest posts delivered right to your email.', 'epcl_framework'),
        ),
        array(
			'id' => 'footer_subscribe_parameters',
            'type' => 'ace_editor',
            'mode' => 'html',
            'title' => esc_html__('Extra Parameters', 'epcl_framework'),
            'subtitle' =>  esc_html__('(Optional)', 'epcl_framework'),
            'desc' => __('You can add Custom HTML like input fields, to send extra parameters to Mailchimp, example: <a href="https://prnt.sc/rshj91" target="_blank">https://prnt.sc/rshj91</a> <a href="https://prnt.sc/t86h5a" target="_blank">https://prnt.sc/t86h5a</a>, so you can bypass the mailchimp redirection and your visitor will be subscribed inmediatly.', 'epcl_framework'),
        ),
	)
) );

?>
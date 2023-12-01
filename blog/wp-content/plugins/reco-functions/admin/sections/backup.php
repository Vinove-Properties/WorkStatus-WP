<?php

/* Unique options for every EP theme */

$admin_url = EPCL_PLUGIN_URL.'/functions/admin';

/* Header */

Redux::setSection( $opt_name, array(
	'title' => esc_html__('Backup', 'epcl_framework'),
	'icon' => ' el el-refresh',
	'fields' => array(
        array(
            'id'            => 'export',
            'type'          => 'import_export',
            'title'         => 'Backup and Restore Theme Options',
            'subtitle'      => 'Save and restore your Redux options. (Recommended if you are going to update or migrate your website).',
            'full_width'    => true,
        )

	)
) );


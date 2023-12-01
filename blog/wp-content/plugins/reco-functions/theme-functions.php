<?php

// Customs fonts to match Gutenberg with Front-End, only enabled by theme options
add_action('admin_head', 'epcl_admin_fix_css', 20);
function epcl_admin_fix_css() {
    echo '<style id="epcl-admin-fix-css">.edit-post-layout__content{ display: block; }</style>';
}

function epcl_render_breadcrumbs(){

    if ( function_exists('yoast_breadcrumb') && epcl_get_option('breadcrumbs_type') == 'yoast' ) {
        yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
    } elseif( function_exists('bcn_display') && epcl_get_option('breadcrumbs_type') == 'navxt' ){
        bcn_display();
    }

}

?>
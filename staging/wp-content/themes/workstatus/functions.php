<?php
require_once get_template_directory() .'/common/inc/global-config.php';
function isBetaVersion(){
	if( isset( $_SERVER['HTTP_HOST'] ) && ( $_SERVER['HTTP_HOST'] == "localhost" ) ) return true;

    return ( isset( $_SERVER['PHP_SELF'] ) && (strpos( $_SERVER['PHP_SELF'], 'staging' ) !== false) )  ?  true : false;
}


add_filter('upload_mimes', function($mime_types){
    $mime_types = [];
    $mime_types['webp'] = 'image/webp';
    $mime_types['pdf'] = 'application/pdf';
    return $mime_types;
});

if( ! defined( '_S_VERSION' ) ){
    if( isBetaVersion() ){
        define( '_S_VERSION', '1.9.'.time() );
    }else{
        define( '_S_VERSION', '1.45.45' );
    }	
}
function workstatus_setup() {
	load_theme_textdomain( 'workstatus', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );

	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'workstatus' ),
		)
	);
	
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	add_theme_support(
		'custom-background',
		apply_filters(
			'workstatus_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);
	add_theme_support( 'customize-selective-refresh-widgets' );
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
	show_admin_bar(false);
	add_image_size('webp_thumb', 356, 215, true);
}
add_action( 'after_setup_theme', 'workstatus_setup' );

function workstatus_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'workstatus_content_width', 640 );
}
add_action( 'after_setup_theme', 'workstatus_content_width', 0 );

function workstatus_widgets_init(){
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'workstatus' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'workstatus' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
        array(
            'name'          => esc_html__( 'Single Page - Table of content', 'reco' ),
            'id'            => 'ws-toc',
            'description'   => esc_html__( 'Add widgets here.', 'reco' ),
            'before_widget' => '<div class="toc-widget-con">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2 class="toc-widget-title">',
            'after_title'   => '</h2>',
        )
    );
}
add_action( 'widgets_init', 'workstatus_widgets_init' );

add_action('wp_footer', function(){ 
	wp_dequeue_style('core-block-supports'); 
});

function ws_siteurl( $url ){
	if( $url == "#" ) return $url;

	if (filter_var($url, FILTER_VALIDATE_URL) === true) {
    	return $url;
	}else{
		return site_url( $url );
	}
}

function workstatus_scripts() {
	wp_dequeue_style( 'wp-block-library' );
    wp_dequeue_style( 'wp-block-library-theme' );
    wp_enqueue_script( 'ws-glidermin', get_stylesheet_directory_uri() .'/assests/js/glider.min.js', array(), _S_VERSION, 
    true );
    wp_enqueue_script( 'ws-script', get_stylesheet_directory_uri() . '/assests/js/script.js', array(), _S_VERSION, true );
    global $post;
	if( 
	is_page_template([
	'page-templates/time-tracking.php',
	'page-templates/tpl-industries.php',
	'page-templates/products.php', 
	'page-templates/field-service-management-software.php',
	'page-templates/tpl-field-service-management-software.php',	
	'page-templates/tpl-geofence-time-clock-software-online.php',
	'page-templates/tpl-usecase.php',
	'page-templates/tpl-usecase-block.php',
	'page-templates/tpl-time.php',
	'page-templates/tpl-task.php',
	'page-templates/tpl-features.php',
	'page-templates/tpl-best-employee.php'
	])
	){
	wp_enqueue_style('features', get_stylesheet_directory_uri().'/version-2.0/assests/css/featureDetail-new.css', array(), 
	_S_VERSION );
	wp_enqueue_style('ws-pricing-fltr', get_stylesheet_directory_uri().'/pricing-filter.css', array(), _S_VERSION);
	wp_enqueue_script('ws-pricing', get_stylesheet_directory_uri().'/js/pricing-v4.0.js', ['ws-script'], _S_VERSION, true);
	//wp_enqueue_script('ws-pricing', get_stylesheet_directory_uri().'/js/ws-pricing.js', ['ws-script'], _S_VERSION, true);		
	}elseif(
	is_page_template(['page-templates/tpl-platform.php','page-templates/tpl-ebook.php']) 
	){
	wp_enqueue_style('plateform', get_stylesheet_directory_uri().'/version-2.0/assests/css/platform.css', array(), _S_VERSION);
	}elseif( 
	is_page_template(['page-templates/tpl-support.php','page-templates/tpl-careers.php']) 
	){
	wp_enqueue_style('support', get_stylesheet_directory_uri().'/version-2.0/assests/css/downloads.css', array(), _S_VERSION);
	}elseif( 
		is_page_template(
			['page-templates/tpl-faqs.php']) 
		){
		wp_enqueue_style('faqs', get_stylesheet_directory_uri().'/version-2.0/assests/css/faq.css', array(), _S_VERSION );
	}elseif( 
		is_page_template(
			['page-templates/tpl-about.php']) 
		){
		wp_enqueue_style('about-us', get_stylesheet_directory_uri().'/version-2.0/assests/css/about.css', array(), _S_VERSION );
	}elseif( 
		is_page_template(
			['page-templates/tpl-press.php']) 
		){
		wp_enqueue_style('press', get_stylesheet_directory_uri().'/version-2.0/assests/css/press.css', array(), _S_VERSION );
	}
	elseif( 
		is_page_template(['page-templates/tpl-reviews.php']) 
		){
		wp_enqueue_style('reviews', get_stylesheet_directory_uri().'/version-2.0/assests/css/reviews.css', array(), _S_VERSION );
	}
	elseif( is_page_template(['page-templates/tpl-pricing.php']) ){
		wp_enqueue_style('pricingnew', get_stylesheet_directory_uri().'/version-2.0/assests/css/pricing-new.css', array(), _S_VERSION );
		wp_enqueue_style('ws-pricing', get_stylesheet_directory_uri().'/version-2.0/assests/css/pricing.css', array(), _S_VERSION );
	}
	elseif( is_page_template(['page-templates/tpl-static-pricing.php']) ){
		wp_enqueue_style('ws-pricing', get_stylesheet_directory_uri().'/version-2.0/assests/css/ws-pricing.css', array(), _S_VERSION );
		wp_enqueue_style('ws-pricing-fltr', get_stylesheet_directory_uri().'/pricing-filter.css', array(), _S_VERSION );
		//wp_enqueue_script('ws-pricing', get_stylesheet_directory_uri().'/js/ws-pricing.js', ['ws-script'], _S_VERSION, true);
		wp_enqueue_script('ws-pricing', get_stylesheet_directory_uri().'/js/pricing-v4.0.js', ['ws-script'], _S_VERSION, true);
	}
	elseif( is_page_template(['page-templates/tpl-pricing-v4.0.php']) ){
		wp_enqueue_style('ws-pricingv4.0', get_stylesheet_directory_uri().'/version-2.0/assests/css/pricing-page.css', array(), _S_VERSION );
		wp_enqueue_style('ws-pricing-fltr', get_stylesheet_directory_uri().'/pricing-filter.css', array(), _S_VERSION );
		wp_enqueue_script('ws-pricing', get_stylesheet_directory_uri().'/js/pricing-v4.0.js', ['ws-script'], _S_VERSION, true);
	}
	elseif( is_page_template(['page-templates/tpl-pricing-v5.0.php']) ){
		wp_enqueue_style('ws-pricingv4.0', get_stylesheet_directory_uri().'/version-2.0/assests/css/pricing-page-v2.css', array(), _S_VERSION );
		wp_enqueue_style('ws-pricing-fltr', get_stylesheet_directory_uri().'/pricing-filter.css', array(), _S_VERSION );
		wp_enqueue_script('ws-pricing', get_stylesheet_directory_uri().'/js/pricing-v5.0.js', ['ws-script'], _S_VERSION, true);
	}
	
	
	elseif(is_page_template([
		'page-templates/tpl-timecard.php',
		'page-templates/tpl-ts-template.php'
		])){
		//wp_enqueue_style('ws-timecard', get_stylesheet_directory_uri().'/assests/css/time-calculator.css', array(), _S_VERSION );
		wp_enqueue_style('ws-timecard', get_stylesheet_directory_uri().'/version-2.0/assests/css/time-calculator.css', array(), time() );
		if( !is_page_template('page-templates/tpl-ts-template.php') ){
		wp_enqueue_script('ws-timecalculate', get_stylesheet_directory_uri() . '/assests/js/time-calculate.js', array('ws-script'), _S_VERSION, true);
		}		
	}
	elseif( 
		is_page_template(
			['page-templates/tpl-how-tracking-works.php']) 
		){
		wp_enqueue_style('features', get_stylesheet_directory_uri().'/version-2.0/assests/css/featureDetail-new.css', array(), _S_VERSION );
		wp_enqueue_style('tracking', get_stylesheet_directory_uri().'/version-2.0/assests/css/tracking.css', array(), _S_VERSION );
	}
	elseif( 
		is_page_template(
			['page-templates/tpl-compare.php']) 
		){
		wp_enqueue_style('reviews', get_stylesheet_directory_uri().'/version-2.0/assests/css/alternative.css', array(), _S_VERSION );
	}
	elseif( is_page_template(['page-templates/tpl-alternatives.php'])){
		wp_enqueue_style('ws-alternatives', get_bloginfo('template_url').'/version-2.0/assests/css/alternative-page.css', 
		array(), _S_VERSION );
	}
    elseif( 
		is_page_template(
			['page-templates/tpl-home.php']) 
		){
		wp_enqueue_style('home', get_stylesheet_directory_uri().'/version-2.0/assests/css/index.css', array(), _S_VERSION );
	}
	elseif( 
		is_page_template(
			['page-templates/tpl-home-v2.php']) 
		){
		wp_enqueue_style('home-v2', get_stylesheet_directory_uri().'/version-2.0/assests/css/index-new.css', array(), _S_VERSION );
	}
	elseif( is_page_template(['page-templates/tpl-home-v4.0.php']) ){
		wp_enqueue_style('ws-pricing-fltr', get_stylesheet_directory_uri().'/pricing-filter.css', array(), _S_VERSION);
		wp_enqueue_script('ws-pricing', get_stylesheet_directory_uri().'/js/pricing-v4.0.js', ['ws-script'], _S_VERSION, true);
		wp_enqueue_style('home-v4', get_stylesheet_directory_uri().'/version-2.0/assests/css/index-min.css', array(), _S_VERSION );
	}
	elseif( 
		is_page_template( ['page-templates/tpl-privacy.php']) ){
		wp_enqueue_style('privacy', get_stylesheet_directory_uri().'/version-2.0/assests/css/legal-documents.css', array(), _S_VERSION );
	}
	elseif( is_page_template(['page-templates/tpl-thankyou.php']) ){
		wp_enqueue_style('thankyou', get_stylesheet_directory_uri().'/version-2.0/assests/css/thanks.css', array(), _S_VERSION );
	}
	elseif( is_page_template(['page-templates/tpl-changelogs.php']) ){
		wp_enqueue_style('thankyou', get_stylesheet_directory_uri().'/version-2.0/assests/css/changelog.css', array(), _S_VERSION );
	}
	elseif( is_404() ){
		wp_enqueue_style('font-awesome', get_stylesheet_directory_uri().'/version-2.0/assests/css/font-awesome.min.css', array(), _S_VERSION );
		wp_enqueue_style('404', get_stylesheet_directory_uri().'/version-2.0/assests/css/404.css', array(), _S_VERSION );
	}
	elseif( is_page_template(['page-templates/tpl-demo.php']) ){
		wp_enqueue_style('sdemo', get_stylesheet_directory_uri().'/version-2.0/assests/css/demo-video.css', array(), _S_VERSION );
	}
	elseif( is_page_template(['page-templates/tpl-resources.php']) ){
		wp_enqueue_style('ws-resource', get_stylesheet_directory_uri().'/version-2.0/assests/css/resource.css', array(), _S_VERSION );
	}
	elseif( is_page_template(['page-templates/tpl-cmn-pillarpage.php']) ){
	$pageMode = get_post_meta( $post->ID, 'ws-pagemode', true );
	if( $pageMode && ($pageMode == "app") ){
	wp_enqueue_style('ws-cmn-pillar', get_stylesheet_directory_uri().'/version-2.0/assests/css/platform.css', array(), _S_VERSION );
	}else{
	wp_enqueue_style('ws-cmn-pillar', get_stylesheet_directory_uri().'/version-2.0/assests/css/featureDetail-new.css', array(), _S_VERSION );	
	}
	
	wp_enqueue_style('ws-pricing-fltr', get_stylesheet_directory_uri().'/pricing-filter.css', array(), _S_VERSION );
	wp_enqueue_script('ws-pricing', get_stylesheet_directory_uri().'/js/pricing-v4.0.js', ['ws-script'], _S_VERSION, true);	
	
	}elseif( is_page_template(['page-templates/tpl-integrations-details.php']) ){
		wp_enqueue_style('ws-cmn-pillar', get_stylesheet_directory_uri().'/version-2.0/assests/css/integration-detail.css', array(), _S_VERSION);
	}
	elseif( is_page_template(['page-templates/tpl-roadmap.php']) ){
		wp_enqueue_style('ws-roadmap', get_stylesheet_directory_uri().'/version-2.0/assests/css/roadmap.css', array(), _S_VERSION);
	}
  	elseif( is_page_template(['page-templates/tpl-solution.php']) ){
		wp_enqueue_style('ws-solution', get_stylesheet_directory_uri().'/version-2.0/assests/css/solution.css', array(), _S_VERSION);
		wp_enqueue_style('ws-pricing-fltr', get_stylesheet_directory_uri().'/pricing-filter.css', array(), _S_VERSION );
		//wp_enqueue_script('ws-pricing', get_stylesheet_directory_uri().'/js/ws-pricing.js', ['ws-script'], _S_VERSION, true);
		wp_enqueue_script('ws-pricing', get_stylesheet_directory_uri().'/js/pricing-v4.0.js', ['ws-script'], _S_VERSION, true);
	}
	elseif( is_page_template(['page-templates/tpl-data-retention.php']) ){
		wp_enqueue_style('ws-retention', get_stylesheet_directory_uri().'/version-2.0/assests/css/data-retention.css', array(), _S_VERSION);
	}	
  	elseif( is_page_template(['page-templates/tpl-affiliates.php']) ){
		wp_enqueue_style('ws-affiliates', get_stylesheet_directory_uri().'/version-2.0/assests/css/affiliates.css', array(), _S_VERSION);
	}
	elseif( is_page_template(['page-templates/tpl-tools-comparison.php']) ){
		wp_enqueue_style('ws-affiliates', get_stylesheet_directory_uri().'/version-2.0/assests/css/alternative-new.css', array(), _S_VERSION);
	}
	elseif(is_page_template(['page-templates/tpl-feature-v2.php'])){
		wp_enqueue_style('cmn-features', get_bloginfo('template_url').'/assests/css/feature-detail.css', array(), _S_VERSION);
		wp_enqueue_style('ws-pricing-fltr', get_stylesheet_directory_uri().'/pricing-filter.css', array(), _S_VERSION);
		wp_enqueue_script('ws-pricing', get_stylesheet_directory_uri().'/js/pricing-v4.0.js', ['ws-script'], _S_VERSION, true);
	}
	elseif(is_page_template(['page-templates/tpl-feature-v2.0.php'])){
		wp_enqueue_style( 'cmn-features', get_bloginfo('template_url').'/version-2.0/assests/css/feature-detail-min.css', [], 
		_S_VERSION );
		wp_enqueue_style('ws-pricing-fltr', get_stylesheet_directory_uri().'/pricing-filter.css', array(), _S_VERSION);
		wp_enqueue_script('ws-pricing', get_stylesheet_directory_uri().'/js/pricing-v4.0.js', ['ws-script'], _S_VERSION, true);
	}

	elseif( is_single() ){ 
		if( is_singular('survey') ){
		wp_enqueue_style('ws-survey', get_stylesheet_directory_uri().'/version-2.0/survey-style.css', array(), _S_VERSION );	
		}else{
		wp_enqueue_style('resource-details', get_stylesheet_directory_uri().'/version-2.0/assests/css/resources-detail.css', array(), _S_VERSION );
		
		wp_enqueue_script('ws-calc', get_stylesheet_directory_uri() . '/js/ws-calculations.js', array(), _S_VERSION, true );
		
		$calcType = get_post_meta( $post->ID, 'calc-type', true );
		if( $calcType === "pc" ){
		wp_enqueue_style('prod-calc', get_stylesheet_directory_uri().'/calculator-style.css', array(), _S_VERSION );	
		}
		}
		
	}

	if( !is_singular('survey') ){
	wp_enqueue_style( 'ws-glider', get_stylesheet_directory_uri().'/version-2.0/assests/css/glider.css');
	}
	//wp_enqueue_script( 'ws-intlTelInput', get_stylesheet_directory_uri() . '/assests/js/intlTelInput.min.js', array(), _S_VERSION, true );		
	
	wp_localize_script('ws-script', 'wsObj', [
	'ipinfo' => (isset($_GET['ip']) && !empty($_GET['ip'])) ? site_url('/wp-json/ws-api/v1/ipinfo?ip='.$_GET['ip']) 
	: site_url('/wp-json/ws-api/v1/ipinfo'),
	'app_url' 		=> ( isBetaVersion() ) ? 'app.staging.workstatus.io' : 'app.workstatus.io',
	'admin_ajax' 	=> admin_url( 'admin-ajax.php' ),
	'_env' 			=> ( isBetaVersion() ) ? 'staging' : 'production'
	]);	
	wp_enqueue_script( 'nice-select2','https://bluzky.github.io/nice-select2/dist/js/nice-select2.js', array(), 
	_S_VERSION, true );
	wp_enqueue_style( 'nice-select2', 'https://bluzky.github.io/nice-select2/dist/css/nice-select2.css');


	wp_enqueue_script('cookie-consent', get_bloginfo('template_url').'/cookie-consent/silktide-consent-manager.js', array(), _S_VERSION, true );
	wp_enqueue_style('cookie-consent', get_bloginfo('template_url').'/cookie-consent/silktide-consent-manager.css', [], _S_VERSION);
	$inline_script = <<<JS
	(function(){
	silktideCookieBannerManager.updateCookieBannerConfig({
	  background:{showBackground: true},
	  cookieIcon:{position: "bottomLeft"},	 
	  text: {
	    banner: {
	      description: "<p>We use cookies on our site to enhance your user experience, provide personalized content, and analyze our traffic. <a href=\"https://www.workstatus.io/privacy-policy\" target=\"_blank\">Cookie Policy.</a></p>",
	      acceptAllButtonText: "Accept all",
	      acceptAllButtonAccessibleLabel: "Accept all cookies",
	      rejectNonEssentialButtonText: "Reject non-essential",
	      rejectNonEssentialButtonAccessibleLabel: "Reject non-essential",
	      preferencesButtonText: "Preferences",
	      preferencesButtonAccessibleLabel: "Toggle preferences"
	    },
	    preferences: {
	      title: "Customize your cookie preferences",
	      description: "<p>We respect your right to privacy. You can choose not to allow some types of cookies. Your cookie preferences will apply across our website.</p>",
	      creditLinkText: "",
	      creditLinkAccessibleLabel: ""
	    }
	  },
	  position: {
	    banner: "bottomLeft"
	  }
	});
	silktideCookieBannerManager.initCookieBanner();
	});
	JS;
	wp_add_inline_script('cookie-consent', $inline_script);	
}
add_action( 'wp_enqueue_scripts', 'workstatus_scripts' );

//require get_template_directory() . '/inc/custom-header.php';
require get_template_directory() . '/inc/template-tags.php';
require get_template_directory() . '/inc/template-functions.php';
require get_template_directory() . '/inc/admin-functions.php';
require get_template_directory() . '/inc/customizer.php';
if( defined( 'JETPACK__VERSION' ) ){
	require get_template_directory() . '/inc/jetpack.php';
}

function wpse15850_body_class( $wp_classes, $extra_classes ){
    $blacklist 	= array('page');
    $wp_classes = array_diff( $wp_classes, $blacklist );
    return array_merge( $wp_classes, (array) $extra_classes );
}
add_filter( 'body_class', 'wpse15850_body_class', 10, 2 );

add_filter( 'body_class', function( $classes ){
	if( is_page_template('page-templates/tpl-ebook.php') ){
		$classes[] = 'ebookhead';
	}
	$prPlans    = ['productivity','project','time','attendance'];
	$activePlan = ( isset($_GET['plan']) && !empty($_GET['plan']) ) ? $_GET['plan'] : 'productivity';
	if( !in_array($activePlan, $prPlans) ){
		$activePlan =  'productivity';
	}
	$classes[] = "wsp-".$activePlan;

	if( is_single() ){
	global $post;
	$bannerType = get_post_meta( $post->ID, 'pbanner-type', true );	
	if( $bannerType && ($bannerType === "image") ){
		$classes[] = 'feature-banner';
	}
	}
	return $classes;
});

function getPxlWebpURL( $mid ){ return;
	$webpDir 	= WP_CONTENT_DIR.'/uploads-webpc/uploads/';
	$webpUrl 	= content_url().'/uploads-webpc/uploads/';
	$icMeta 	= get_post_meta( $mid, '_wp_attached_file', true );
	//$icWebp 	= false;
	$webpimg 	= '';
	
	if( $icMeta ){
		$icwebpDir 	= $webpDir.$icMeta.".webp";
		if( file_exists( $icwebpDir ) ){
		$icWebp 	= $webpUrl.$icMeta.".webp";
		$webpimg 	= '<source type="image/webp" srcset="'.$icWebp.'">';
		}
	}
	return $webpimg;
}

function pxlGetPtag( $marray, $title = "", $class = "", $id = "" ){
	if( !is_array( $marray ) ) return;
	$altText 	= (isset($marray['alt']) && !empty($marray['alt'])) ? $marray['alt'] : $marray['title'];
	$hasClass 	= ( !empty( $class ) ) ? 'class="'.$class.'"' : '';
	$hasID 		= ( !empty( $id ) ) ? 'id="'.$id.'"' : '';
	return '<picture '.$hasID.' '.$hasClass.'>
	'.getPxlWebpURL($marray['ID']).'
	<source type="'.$marray['mime_type'].'" srcset="'.$marray['url'].'">
	<img loading="lazy" src="'.$marray['url'].'" title="'.$marray['title'].'" alt="'.$altText.'" 
	width="'.$marray['width'].'" height="'.$marray['height'].'">
	</picture>';
}

function wsGetWebpSrcUrl( $mid ){
	$webpDir 	= WP_CONTENT_DIR.'/uploads-webpc/uploads/';
	$webpUrl 	= content_url().'/uploads-webpc/uploads/';
	$icMeta 	= get_post_meta( $mid, '_wp_attached_file', true );
	$src 		= '';

	if( $icMeta ){
		$icwebpDir 	= $webpDir.$icMeta.".webp";
		if( file_exists( $icwebpDir ) ){
			$src 	= $webpUrl.$icMeta.".webp";
		}else{
			$src = wp_get_attachment_url( $mid );	
		}
	}else{
		$src = wp_get_attachment_url( $mid );	
	}
	return $src;
}


function getDOMpictureTag( $id ){
$postMeta 	= get_post_meta( $id, '_wp_attachment_metadata', true );
$upload_dir = wp_upload_dir();
$url 		= $upload_dir['baseurl'].'/'.$postMeta['file'];
return '<picture>'.getPxlWebpURL($id).'
  <source type="'.$postMeta['sizes']['thumbnail']['mime-type'].'" srcset="'.$url.'">
  <img loading="lazy" src="'.$url.'" alt="WorkStatu" width="'.$postMeta['width'].'" height="'.$postMeta['height'].'">
  </picture>';
}

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Business Reviews',
		'menu_title'	=> 'Business Reviews',
		'parent_slug'	=> 'theme-general-settings',
	));

	// acf_add_options_sub_page(array(
	// 	'page_title' 	=> 'Theme Footer Settings',
	// 	'menu_title'	=> 'Footer',
	// 	'parent_slug'	=> 'theme-general-settings',
	// ));
	
}



function pixelShowLatestPosts( $bposts, $pslug = "", $elmClass = ''){
 	if( empty($pslug) ) return; 

 	$rPosts = $wsBposts = [];
 	if( $pslug ){
 	$ar 		= explode('|',$pslug);
	$postOne 	= (isset($ar[0]) && !empty($ar[0])) ? $ar[0] : 'null';
	$postTwo 	= (isset($ar[1]) && !empty($ar[1])) ? $ar[1] : 'null';
	$postThree 	= (isset($ar[2]) && !empty($ar[2])) ? $ar[2] : 'null';
	$response 	= wp_remote_get('https://www.workstatus.io/blog/wp-json/wsposts/v1/blogposts/'.$postOne.'/'.$postTwo.'/'.$postThree);	
	if( is_array( $response ) && ! is_wp_error( $response ) ){
	$wsBposts   = json_decode( $response['body'] );
	}	
 	}

	if( isset( $bposts['rurl'] ) && is_array( $bposts['rurl'] ) && ( !empty($bposts['rurl']) ) ){
	$resources = get_posts(['post_type'=>'post', 'numberposts' => 3, 'post__in' => $bposts['rurl'], 'orderby' => 'post__in']);
	if( $resources ){
		foreach( $resources as $row ){
		$postThumbnail = get_the_post_thumbnail_url( $row->ID, 'webp_thumb' );
		$rPosts[] = (object)['title' => $row->post_title, 'permalink' => get_permalink($row->ID), 
		'thumbnail' => $postThumbnail, 'thumbnail_m' => $postThumbnail];
		}
	}	
	}
	$loop = array_merge( $wsBposts, $rPosts );
	//$loop = false;
	if( $loop ){
	?>
 	<section class="useful-resources-blog-section bglight for-heading-center <?php echo $elmClass; ?>">
		<div class="container">
		 <div class="top-section">
		   <h6><span class="bg-purple"><?php echo $bposts['headings']; ?></span></h6>
		   <h2><?php echo $bposts['sub_headings']; ?></h2>
		 </div>
		 <div class="for-link-blue flex_row justify-center">
		 <?php 
		 $pcount = 0;
		 foreach( $loop as $row ) :
		 $pcount++;	
		 ?>
		 <div class="blog-box column-three">
			 <a href="<?php echo $row->permalink; ?>" class="blog-link">
			   <div class="thumb">
				 <picture>
				   <source type="image/webp" srcset="<?php echo  $row->thumbnail_m; ?>">
				   <img loading="lazy" src="<?php echo  $row->thumbnail_m;?>" alt="<?php echo $row->title; ?>" width="400" height="242">
				 </picture>
			   </div>
			   <div class="blog-title">
				 <h3><?php echo $row->title; ?></h3>
				 <span class="small_anchor is-arrow">Read more</span>
			   </div>
			 </a>
		   </div>		 		 
		 <?php 
		 if( $pcount === 6 ) break;
		 endforeach; 
		 ?>
		</div>
		</div>
	</section>	
	<?php } 		 
}

// Ebook Pdf Function
function Postpdf(){ 
global $post;
$haspostPdf     = get_post_meta( $post->ID, 'post_pdf', true );
$haspostPdflink = get_post_meta( $post->ID, 'vc-post-pdf', true );
?>
<div class="post-pdf-row" style="width:100%; text-align:right; padding:20px 0;">
<button class="pluginPdfTrigger">Download Post</button>

<?php
if( $haspostPdf || $haspostPdflink){
?>
<button class="trigger">Download E-guide</button>
	
<?php 
}else{
?>
	<button class="trigger" style="display:none"></button>
<?php
}
?>
</div>
<?php
}

function wsFeaturedHeader(){
	//if( is_404() ){
		//return false;
	//}elseif( is_page_template([
		//'page-templates/tpl-thankyou.php',
		//'page-templates/tpl-changelogs.php'
	//]) ){
	//	return false;
	//}
	return true;
	/*
	if( is_page_template([
		'page-templates/time-tracking.php',
		'page-templates/tpl-industries.php',
		'page-templates/products.php', 
		'page-templates/field-service-management-software.php',
		'page-templates/tpl-geofence-time-clock-software-online.php',
		'page-templates/tpl-usecase.php',
		'page-templates/tpl-usecase-block.php',
		'page-templates/tpl-time.php',
		'page-templates/tpl-task.php',
    'page-templates/tpl-thankyou.php',
		'page-templates/tpl-how-tracking-works.php',
		'page-templates/tpl-home.php'

	]) ){
		return true;
	}else{
		return false;
	}	
*/
}

add_action('init', function(){
if( isset($_GET['tcheck']) && !empty($_GET['tcheck']) ){
	$url = null;
    $pages = get_pages(array(
        'meta_key' => '_wp_page_template',
        'meta_value' => 'page-templates/tpl-task.php'
    ));
    // echo '<pre>'; print_r($pages); 
    // die;

	/*
	if( isset( $pages[0] ) ){
	$url = get_page_link($pages[0]->ID);
	}
	return $url;
	*/
}
});

add_action( 'wp_head', function(){
	global $post;
	if( is_page() ){
		$keyMeta = get_post_meta( $post->ID, 'ws-keywords', true );
		if( $keyMeta ){
			echo '<meta name="keywords" content="'.$keyMeta.'"/>';
		} 
	}	
}, 2 );

/*Page Optimisation : Scripts*/
add_filter('style_loader_tag',  'stylePreloadFilter', 10, 2);
function stylePreloadFilter( $html, $handle ){
	$html = str_replace("rel='stylesheet'", "rel='preload stylesheet' as='style' ", $html);
    return $html;
}
//Preload large image to page speed optimisation
// add_action( 'wp_head', function(){
// 	global $post;	
// 	$nr = "\r\n";
// 	if(is_front_page()){
// 	echo '<link rel="preload" href="'.get_bloginfo('template_url').'/version-2.0/assests/images/home-poster-new.png" as="image">';
// 	}else{
// 		if (is_object($post) && isset($post->ID)) {
// 			$top_section = get_field('top_section', $post->ID);
// 			if( 
// 			isset( $top_section['video_background_image'] ) && 
// 			!empty($top_section['video_background_image']) 
// 		    ){
// 				$cScreenSrc   = wsGetWebpSrcUrl($top_section['video_background_image']['id']);
// 				echo '<link rel="preload" href="'.$cScreenSrc.'" as="image">';	
// 			}	
// 		}	
			
// 	}
// });

function wsDemoCta(){
	//global $RegLink;
	global $ws_ctas, $RegLink;
	$cta_lbl = ( isset( $ws_ctas['cta_text'] ) && !empty( $ws_ctas['cta_text'] ) ) ? $ws_ctas['cta_text'] : 'Start Free Trial';
	return '<div class="cmn-democta ctasec cta-var4">	
	<div><a href="javascript:void(0)" class="ctbtn" onclick="call_demows();" target="_self">Book A Demo</a></div>
	
	<span class="devide">OR</span>
	<div>
	<a data-href="'.$RegLink.'" href="javascript:void(0);" class="ctbtn nobg" onclick="return get_ws_signupform(this);">'.$cta_lbl.'</a>
	<span class="nccr">No credit card required</span>
	</div>
	</div>';
}

function wsDemoCtaCP(){
	//global $RegLink;
	global $ws_ctas, $RegLink, $post;
	if( $post->ID == 7306 ){
	return '<div class="cmn-democta ctasec cta-var4"><div><a href="javascript:void();" onclick="call_demoEnt();" class="ctbtn">Talk to Sales</a>
	<span class="nccr">Let\'s connect for a quick call</span>
	</div></div>';
	}else{
		
	$cta_lbl = ( isset( $ws_ctas['cta_text'] ) && !empty( $ws_ctas['cta_text'] ) ) ? $ws_ctas['cta_text'] : 'Start Free Trial';
	return '<div class="cmn-democta ctasec cta-var4">	
	<div><a href="javascript:void(0)" class="ctbtn" onclick="call_demows();" target="_self">Book A Demo</a></div>	
	<span class="devide">OR</span>
	<div><a data-href="'.$RegLink.'" href="javascript:void(0);" class="ctbtn nobg" onclick="return get_ws_signupform(this);">'.$cta_lbl.'</a>
	<span class="nccr">No credit card required</span>
	</div></div>';	
	}	
}


function cmnBannerCta(){
	global $ws_ctas, $RegLink;
	return '<div><a href="javascript:void(0)" onclick="call_demows();" class="primary_btn1">Book A Demo</a>
	<small>Get queries answered from experts</small></div>
	<div><a data-href="'.$RegLink.'" href="javascript:void(0);" class="primary_btn2" 
	onclick="return get_ws_signupform(this);">Start Free Trial</a><small>No credit card required</small></div>';
}


function getCTAblock( $class = "button-common margin-t-80" ){
	global $ws_ctas, $RegLink;
	$cta_lbl = (isset( $ws_ctas['cta_text']) && !empty($ws_ctas['cta_text'])) ? $ws_ctas['cta_text'] : 'Start Free Trial';
	return '<div class="'.$class.'">
	<div class="cmn-democta">	
	<div><a href="javascript:void(0)" class="ctbtn" onclick="call_demows();" target="_self">Book A Demo</a></div>	
	<span class="devide">OR</span>
	<div><a data-href="'.$RegLink.'" href="javascript:void(0);" class="ctbtn bgtrans" onclick="return get_ws_signupform(this);">'.$cta_lbl.'</a>
	<span class="nccr">No credit card required</span>
	</div></div>
	</div>';
}

function _getDemoCTA( $class = "button-common margin-t-80", $ccText = true ){
	global $ws_ctas, $RegLink;
	$cta_lbl 	= (isset( $ws_ctas['cta_text']) && !empty($ws_ctas['cta_text'])) ? $ws_ctas['cta_text'] : 'Start Free Trial';
	$ccText 	= ( $ccText === true ) ? '<span class="nccr">No credit card required</span>' : '';
	return '<div class="'.$class.'">
	<div class="cmn-democta">	
	<div class="ct-demo"><a href="javascript:void(0)" class="ctbtn" onclick="call_demows();" target="_self">Book A Demo</a></div>	
	<span class="devide">OR</span>
	<div class="ct-trial"><a data-href="'.$RegLink.'" href="javascript:void(0);" class="ctbtn bgtrans" onclick="return get_ws_signupform(this);">'.$cta_lbl.'</a>
	'.$ccText.'
	</div></div>
	</div>';
}

function _getDemoCTA_BC( $class = "button-common margin-t-80", $ccText = true ){
	global $ws_ctas, $RegLink;
	$cta_lbl 	= (isset( $ws_ctas['cta_text']) && !empty($ws_ctas['cta_text'])) ? $ws_ctas['cta_text'] : 'Start Free Trial';
	$ccText 	= ( $ccText === true ) ? '<span class="nccr">Get queries answered from experts</span>' : '';
	return '<div class="'.$class.'">
	<div class="cmn-democta">	
	<div><a href="javascript:void(0)" class="ctbtn" onclick="call_demows();" target="_self">Book A Demo</a>'.$ccText.'</div>	
	<span class="devide">OR</span>
	<div><a data-href="'.$RegLink.'" href="javascript:void(0);" class="ctbtn bgtrans" onclick="return get_ws_signupform(this);">'.$cta_lbl.'</a>	
	</div></div>
	</div>';
}


function _wraplsContent($html) {
    $pattern = '/(<h3>.*?<\/h3>(?:\s*.*?)*?(?=(<h3>|$)))/is';
    $replacement = '<div class="text-column listing">$1</div>';
    return preg_replace($pattern, $replacement, $html);
}


add_action( 'wp_ajax_nopriv_rateus', 'rateus_cb' );
add_action( 'wp_ajax_rateus', 'rateus_cb' );
function rateus_cb(){
	global $wpdb; 
	$data 	= $_POST;
	$ip 	= ws_get_userIPaddr();
	$purl 	= $data['rating_page_url'];
	$total_query = "SELECT COUNT(*) FROM post_rating where user_ip='".$ip."' and rating_page_url='".$purl."'";
	$total 	= $wpdb->get_var( $total_query );
	if($total>0){
		wp_send_json_success( 'Already Rated' );
	}else{
		$res = $wpdb->insert('post_rating', array(
		'total_points' => $data['total_points'],
		'user_ip' => $ip,
		'rating_page_url' => $data['rating_page_url'], 
		));
		if($res){
			wp_send_json_success( 'Rated Successfully' );
		}else{
			wp_send_json_error( 'Error' );
		}
	}
}


function ws_get_userIPaddr(){
    if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
        $_SERVER['REMOTE_ADDR']       = $_SERVER["HTTP_CF_CONNECTING_IP"];
        $_SERVER['HTTP_CLIENT_IP']    = $_SERVER["HTTP_CF_CONNECTING_IP"];
    }
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];

    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }

    return $ip;
}

add_action( 'wp_ajax_nopriv_ws_signup_api', 'ws_signup_api_cb' );
function ws_signup_api_cb(){
	$data 		= (array) json_decode( file_get_contents("php://input") );
	//print_r($data); die;
	$userIP 	= (isset($_SERVER['HTTP_HOST']) && ($_SERVER['HTTP_HOST'] == "localhost")) ? '47.31.154.223' : ws_get_userIPaddr();
	$reqData 	= array(
	'name' 			=> $data['uname'],
	'email' 		=> $data['uemail'],
	'password' 		=> $data['password'],
	'phone' 		=> (isset($data['phone']) && !empty($data['phone'])) ? $data['phone'] : '',
	'phone_country_code_id' => (isset($data['pcode']) && !empty($data['pcode'])) ? tempWsPhoneCode($data['pcode']) : '',
	'ip_address' 	=> $userIP,
	'mode_of_communication' => (isset($data['com-mode']) && !empty($data['com-mode'])) ? $data['com-mode'] : '',
	'pid' 			=> $data['pid'],
	'type' 			=> $data['type'],
	'source_url' 	=> $data['src_page'],
	'referral_token' => (isset($_COOKIE['ws_reftoken']) && !empty($_COOKIE['ws_reftoken'])) ? $_COOKIE['ws_reftoken'] : '',
	'utm_source' 	=> (isset($_COOKIE['utm_source']) && !empty($_COOKIE['utm_source'])) ? $_COOKIE['utm_source'] : '',
    'utm_medium' 	=> (isset($_COOKIE['utm_medium']) && !empty($_COOKIE['utm_medium'])) ? $_COOKIE['utm_medium'] : '',
    'utm_campaign' 	=> (isset($_COOKIE['utm_campaign']) && !empty($_COOKIE['utm_campaign'])) ? $_COOKIE['utm_campaign'] : ''
	);
	
	$apiCall = "https://api.staging.workstatus.io/api/v3/signUp";
	if( !isBetaVersion() ){
		$apiCall = "https://api.workstatus.io/api/v3/signUp";
	}
	//print_r( $reqData );
	$response 	= wp_remote_post( $apiCall, ['method' => 'POST', 'timeout' => 60, 'body' => $reqData] );
	if ( is_wp_error( $response ) ) {
		$error_message = $response->get_error_message();
		echo "Something went wrong: $error_message";
	}else{
		$resData = json_decode($response['body']);
		if( $resData->response->code === 200 ){
			$parts = explode(" ", $data['uname']);    
		    if(count($parts) > 1) {
		        $lastn 	= array_pop($parts);
		        $firstn = implode(" ", $parts);
		    }else{
		    	$firstn = $data['uname'];
		        $lastn 	= '';
		    }
		    $data['fname'] = $firstn;
		    $data['lname'] = $lastn;
		    $data['email'] = $data['uemail'];
		    $data['countrycode'] =  $data['pcode'];
			//postZohoLead( $data );	
		}
		echo $response['body'];
	}
	die;
}


/*Blog Related Shortcode*/
add_shortcode( 'ws_banner', 'wsBannerShortcode_cb' );
function wsBannerShortcode_cb( $atts ){
    global $RegLink;
    $atts = shortcode_atts( array(
    'title'      => 'Want to save time & money?', 
    'body'       => 'Automate Workforce Management',
    'cta_title'  => 'Sign Up for Now, Its Totally Free!',
    'cta1_text'  => 'Start Free trial',
    'cta1_link'  => 'https://app.workstatus.io/auth/register/?pid=1&amp;type=monthly',
    'cta2_text'  => 'Book a Demo',
    'cta2_link'  => 'https://www.workstatus.io/?book-demo'
    ), $atts, 'bartag' );


    $FreeTrialCta = '';
    $hasLogin = getCTAstatus();
    if( $hasLogin !== false ){
    $FreeTrialCta = '<a href="javascript:void(0);" data-href="'.$RegLink.'" class="primary_btn1" onclick="return get_ws_signupform(this);">'.$hasLogin['cta_text'].'</a>';
    }
    $div = '<div class="upd-cusbanner">
    <div class="cta-title">'.$atts['title'].'</div>
    <p>'.$atts['body'].'</p>
    <div class="ctasec">
    '.$FreeTrialCta.'
    <a class="bkdemo" onclick="call_demows();" href="javascript:void(0);">'.$atts['cta2_text'].'</a>
    </div>
    </div>';
    return $div;
}

add_shortcode( 'ws_imgcta', 'ws_imgctaCB' );
function ws_imgctaCB( $atts ){
    global $RegLink;
    $atts = shortcode_atts( array(
    'title' => 'Automatic Time Tracking', 
    'text'  => '', 
    'isrc'  => get_stylesheet_directory_uri().'/images/blog-ctaimage.png',    
    ), $atts, 'bartag' );

    $stext = '';
    if( isset( $atts['text'] ) && !empty( $atts['text'] ) ){
        $stext = '<p>'.$atts['text'].'</p>';
    }
    $FreeTrialCta = '';
    $hasLogin = getCTAstatus();
    if( $hasLogin !== false ){
    $FreeTrialCta = '<a href="javascript:void(0);" data-href="'.$RegLink.'" class="primary_btn1" onclick="return get_ws_signupform(this);">'.$hasLogin['cta_text'].'</a>';
    }
    $div = '<div class="upd-cusbanner cusbanner-up">
    <div class="colleft">
    <p class="heading">'.$atts['title'].'</p>
    '.$stext.'
    <div class="ctasec">'.$FreeTrialCta.'</div>
    </div>
    <div class="colright">
    <img loading="lazy" src="'.$atts['isrc'].'" alt="'.$atts['title'].'" width="445" height="199">
    </div>
    </div>';
    return $div;
}

add_action( 'wp_print_scripts', 'wra_filter_scripts', 100000 );
add_action( 'wp_print_footer_scripts', 'wra_filter_scripts', 100000 );
function wra_filter_scripts(){
	if(!is_single() && !is_admin()){
		wp_dequeue_script('jquery');
    	wp_deregister_script('jquery');
	}
}

add_action( 'wp_print_styles', 'wra_filter_styles', 100000 );
add_action( 'wp_print_footer_scripts', 'wra_filter_styles', 100000 );
function wra_filter_styles(){
	if( !is_single() ){
		wp_dequeue_style( 'ez-toc' );
	}
}
add_filter( 'rocket_preload_fonts', 'rocket_mobile_preload_fonts');
function rocket_mobile_preload_fonts( $fonts ){
    $fonts = [];
    if( !wp_is_mobile() ) {
    $fonts[] = '/wp-content/themes/workstatus/version-2.0/assests/fonts/LexendDeca-Regular.woff2';
    $fonts[] = '/wp-content/themes/workstatus/version-2.0/assests/fonts/LexendDeca-Medium.woff2';
    $fonts[] = '/wp-content/themes/workstatus/version-2.0/assests/fonts/LexendDeca-Bold.woff2';
    }
    return $fonts;
}

function getRmFeatures( $str ){
  $fetures = explode(',', $str);
  $ft = '';
  if( count($fetures) > 1 ){
    $ft .= '<ul>';
    foreach( $fetures as $row ){
      $ft .= '<li class="ft-'.$row.'">'.$row.'</li>';
    }
    $ft .= '</ul>';
  }else{
    $ft .=  '<ul><li class="ft-'.$str.'">'.$str.'</li></ul>';
  }
  return $ft;
}

function getRmFeaturesClasses( $str ){
  $ft = '';
  $fetures = explode(',', $str);  
  if( count($fetures) > 1 ){
    foreach( $fetures as $row ){
      $ft .= ' sel-'.$row;
    }
  }else{
    $ft .= ' sel-'.$str;
  }
  return $ft;
}

function getRmBlock( $title, $desc, $plateform ){
	$elm = '<div class="box-wrap'.getRmFeaturesClasses($plateform).'">
	<h4>'.$title.'</h4>
	<p>'.$desc.'</p>
	'.getRmFeatures($plateform).'
	</div>'; 
	return $elm;
}

add_action( 'wp_ajax_nopriv_loadmore_rm', 'loadMoreRM_cb' );
add_action( 'wp_ajax_loadmore_rm', 'loadMoreRM_cb' );
function loadMoreRM_cb(){	
	$page = (isset( $_GET['page'] ) && !empty( $_GET['page'] )) ? (int)$_GET['page'] : 1;
	$ch   = curl_init();
	curl_setopt($ch, CURLOPT_URL, "https://superadmin.workstatus.io/api/v1/get-project-roadmap?page=".$page);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$server_output  = curl_exec($ch);
	$data           = json_decode( $server_output );
	curl_close($ch);
	$inProgress = $abtLaunch = $recLaunch = [];
	if( $data->data->data ){
	    $planData   = $data->data->data;	    
	    foreach( $planData as $row  ){
	      if( isset( $row->inprogress ) ){
	      $inProgress[] = $row->inprogress;
	      }

	      if( isset( $row->about_to_launch )  ){
	      $abtLaunch[] = $row->about_to_launch;
	      }

	      if( isset( $row->recently_launched ) ){
	      $recLaunch[] = $row->recently_launched;
	      }
	    }	    
	    if( $inProgress ){
	      foreach( $inProgress as $row ){
	      $ipData .= getRmBlock($row->feature_title,$row->feature_description, $row->platform );              
	      }
	    }

	    if( $abtLaunch ){
	      foreach( $abtLaunch as $row ){
	      $ipAbout .= getRmBlock($row->feature_title,$row->feature_description, $row->platform );              
	      }
	    }

	    if( $recLaunch ){
	      foreach( $recLaunch as $row ){
	      $ipRecent .= getRmBlock($row->feature_title,$row->feature_description, $row->platform );              
	      }
	    }
		wp_send_json(['success'=>true, 'inprogress' => $ipData, 'about' => $ipAbout, 'recent' => $ipRecent]);
	}else{
		wp_send_json(['success'=>false, 'msg'=> 'No More Data']);
	}
	
}

function leadMgtBlock( $id ){
	$dwnloadSection = get_field( 'download_section', $id );
	if( isset($dwnloadSection['is_enabled']) && ($dwnloadSection['is_enabled'] == "yes") ){
		$ctaText = (isset($dwnloadSection['link-text']) && !empty($dwnloadSection['link-text'])) ? $dwnloadSection['link-text'] : 'Download eBook';

		echo '<section class="dwnload post-animation">
	    <div class="container">
	    <div class="dis-flex">
	    <div class="dwnleft">
	    <h2>'.$dwnloadSection['heading'].'</h2>
	    <p>'.$dwnloadSection['content'].'</p>
	    </div>
	    <div class="dwnright">
	    <a href="'.site_url($dwnloadSection['link']).'" rel="nofollow" class="primary_btn1">'.$ctaText.'</a>
	    </div>
	    </div>
	    </div>
	    </section>';
	}
}

add_action( 'init', 'registerSurvey_post_type', 0 );
function registerSurvey_post_type(){
	$sy_labels = array(
        'name'                  => _x( 'Survey', 'Post Type General Name', 'workstatus' ),
        'singular_name'         => _x( 'Survey', 'Post Type Singular Name', 'workstatus' ),
        'menu_name'             => __( 'Survey', 'workstatus' ),
        'name_admin_bar'        => __( 'Survey', 'workstatus' ),
        'archives'              => __( 'Survey Archives', 'workstatus' ),
        'attributes'            => __( 'Survey Attributes', 'workstatus' ),
        'parent_item_colon'     => __( 'Parent Survey:', 'workstatus' ),
        'all_items'             => __( 'All Survey', 'workstatus' ),
        'add_new_item'          => __( 'Add New Survey', 'workstatus' ),
        'add_new'               => __( 'Add New', 'workstatus' ),
        'new_item'              => __( 'New Survey', 'workstatus' ),
        'edit_item'             => __( 'Edit Survey', 'workstatus' ),
        'update_item'           => __( 'Update Survey', 'workstatus' ),
        'view_item'             => __( 'View Survey', 'workstatus' ),
        'view_items'            => __( 'View Survey', 'workstatus' ),
        'search_items'          => __( 'Search Survey', 'workstatus' ),
        'not_found'             => __( 'Survey Not found', 'workstatus' ),
        'not_found_in_trash'    => __( 'Survey Not found in Trash', 'workstatus' ),
        'featured_image'        => __( 'Featured Image', 'workstatus' ),
        'set_featured_image'    => __( 'Set featured image', 'workstatus' ),
        'remove_featured_image' => __( 'Remove featured image', 'workstatus' ),
        'use_featured_image'    => __( 'Use as featured image', 'workstatus' ),
        'insert_into_item'      => __( 'Insert into Survey', 'workstatus' ),
        'uploaded_to_this_item' => __( 'Uploaded to this Survey', 'workstatus' ),
        'items_list'            => __( 'Survey list', 'workstatus' ),
        'items_list_navigation' => __( 'Survey list navigation', 'workstatus' ),
        'filter_items_list'     => __( 'Filter Survey list', 'workstatus' ),
    );
    $sr_args = array(
        'label'                 => __( 'Survey', 'workstatus' ),
        'description'           => __( 'Post Type Description', 'workstatus' ),
        'labels'                => $sy_labels,
        'supports'              => array( 'title', 'custom-fields' ),
        //'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => true,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type( 'survey', $sr_args );
}


function _hanldeSurveyRequest( $data ){
	if( isset($_POST['su-nonce']) && !empty($_POST['su-nonce']) ){
		$nonce = $_POST['su-nonce'];
		if ( ! wp_verify_nonce( $nonce, 'post_survey-'.$_POST['post_id'] ) ) {
			die( __( 'Security check', 'textdomain' ) ); 
		}
		global $wpdb;
	    $dbObj = $wpdb;
	    if( isset( $_SERVER['HTTP_HOST'] ) && ($_SERVER['HTTP_HOST'] != "localhost") ){
	    $dbObj = new wpdb( 'workstatus-io-crm-prod-db-user', '7DsEMIA5ppFAAyK', 'workstatus-io-crm-prod-db', 'localhost' );
	    }

		$post_id 	= $data['post_id'];
		$email 		= (isset($data['email_addr']) && !empty($data['email_addr'])) ? $data['email_addr'] : 'nitin.baluni@mail.vinove.com';
		$emailVal 	= decryptEmailData( $email );
		
		unset($data['post_id']);
		unset($data['email_addr']);
		unset($data['su-nonce']);
		
		$inserted = $dbObj->insert('ws_survey_data',[
			'survey_id' => $post_id,
			'email' 	=> $emailVal,
			'data' 		=> json_encode($data),
			'created_at' => date('Y-m-d H:i:s')
		],
		['%d', '%s', '%s', '%s']);
		if( $inserted ){
			return true;
		}else{
			return false;
		}
	}else{
		return false;
	}
}

function decryptEmailData($input){
    $result = "";
    for ($i = 0; $i < strlen($input); $i++) {
        $charCode = ord($input[$i]);
        $result .= chr($charCode - 1); // Inverse of encryption (substitution cipher)
    }
    return $result;
}

function _compTableValue($str){
	if( $str == "yes" ){
		return '<i class="check-icon"></i>';
	}elseif ($str == "no") {
		return '<i class="cross-icon"></i>';
	}else{
		return $str;
	}
}

function _containsLiTags($string) {
    $pattern = '/<(ul|li)\b[^>]*>/i';
    if( preg_match($pattern, $string) ){
        return true;
    }
    return false;
}


function _getComparePricing( $usd, $inr, $pricing = true, $link = "#" ){
	if( $pricing === true )	{
	return '<span class="spn-intr">$'.$usd.'</span><span class="spn-ind">₹'.$inr.'</span>';
	}else{
		return '<span class="btn"><span class="spn-intr">$'.$usd.'</span><span class="spn-ind">₹'.$inr.'</span></span>
		<span class="small-font">(Per user / Month)</span>';
		/*<a onclick="call_demows();" href="javascript:void(0);"  class="knowmre">Know More</a>*/
	}
}

function update_image_metadata_to_webp_correctly(){
    set_time_limit(0);
    global $wpdb;
    $attachments = $wpdb->get_results("SELECT post_id, meta_value FROM {$wpdb->postmeta} WHERE meta_key = '_wp_attachment_metadata' AND (meta_value LIKE '%.png%' OR meta_value LIKE '%.jpg%')");    
    foreach ($attachments as $attachment) {
        $meta = maybe_unserialize($attachment->meta_value);
        if (is_array($meta) && isset($meta['file'])) {
            if (strpos($meta['file'], '.webp') === false) {
                $meta['file'] = str_replace(['.png', '.jpg'], ['.png.webp', '.jpg.webp'], $meta['file']);
            }
        }
        if (isset($meta['sizes']) && is_array($meta['sizes'])) {
            foreach ($meta['sizes'] as $size => $data) {
                if (isset($data['file'])) {
                    if (strpos($data['file'], '.webp') === false) {
                        $meta['sizes'][$size]['file'] = str_replace(['.png', '.jpg'], ['.png.webp', '.jpg.webp'], $data['file']);
                    }
                }
            }
        }        
        $wpdb->update(
        $wpdb->postmeta,
        ['meta_value' => maybe_serialize($meta)],
        ['post_id' => $attachment->post_id, 'meta_key' => '_wp_attachment_metadata']
        );
    }
    echo "All attachment metadata updated to use WebP paths!";
}

//add_action('init', function(){
//if( isset( $_GET['generate_webpmeta'] ) && ($_GET['generate_webpmeta'] == "bingooooo") ){
//update_image_metadata_to_webp_correctly(); die;
//}
//});

function locatePricing( $str ){
  $exp  = explode("|", $str);
  return ( is_array( $exp ) && (count($exp) > 1)  ) ? '<span class="spn-int">'.$exp[0].'</span><span class="spn-local">'.$exp[1].'</span>' : $str;
}

function getAlternateData( $tbl, $category = "time" ){
	$elm = "";	
	if( $tbl ){
        $lCounr = count($tbl);         
        foreach( $tbl as $data ){			
			if( $data['category'] == $category ){
				$lstPricing = $data['name'];
				
				$colWs  = _compTableValue($data['ws']);
				$colOne = _compTableValue($data['tl-1']);
				$colTwo = _compTableValue($data['tl-2']);
				$colThr = _compTableValue($data['tl-3']);
				$colFor = _compTableValue($data['tl-4']);

				$elm .= '<div class="table-row">
				<div class="ws-column ws-lftcolumn"><p>'.$lstPricing.'</p></div>
				<div class="ws-column">'.$colWs.$postFix.'</div>
				<div class="ws-column">'.$colOne.$postFix.'</div>
				<div class="ws-column">'.$colTwo.$postFix.'</div>
				<div class="ws-column">'.$colThr.$postFix.'</div>
				<div class="ws-column">'.$colFor.$postFix.'</div>				
				</div>';	
			}
			
        }
    }
    return $elm;
}

function replaceCrSymbols($string) {
    $symbols = ["$", "₹"];
    return str_replace($symbols, "", $string);
}

function getAlternatePricing( $col ){
	$postFix    = '<span class="small-font">(Per user / Month)</span>';
	$lstPricing = '<strong>Pricing</strong>';

	$colWs  = '<strong id="ws-price-elm" class="prloc">'.locatePricing($col['ws-pricing']).'</strong>';

	$colOne = '<strong class="prloc">'.locatePricing($col['t1-pricing']).'</strong>';
	$colTwo = '<strong class="prloc">'.locatePricing($col['t2-pricing']).'</strong>';
	$colThr = '<strong class="prloc">'.locatePricing($col['t3-pricing']).'</strong>';
	$colFor = '<strong class="prloc">'.locatePricing($col['t4-pricing']).'</strong>';
	
	$elm = '<div class="ws-column ws-lftcolumn"><p>'.$lstPricing.'</p></div>	
	<div class="ws-column" id="wspriceelm" data-amt="'.replaceCrSymbols($col['ws-pricing']).'">'.$colWs.$postFix.'</div>
	<div class="ws-column" data-amt="'.replaceCrSymbols($col['t1-pricing']).'">'.$colOne.$postFix.'</div>
	<div class="ws-column" data-amt="'.replaceCrSymbols($col['t2-pricing']).'">'.$colTwo.$postFix.'</div>
	<div class="ws-column" data-amt="'.replaceCrSymbols($col['t3-pricing']).'">'.$colThr.$postFix.'</div>
	<div class="ws-column" data-amt="'.replaceCrSymbols($col['t4-pricing']).'">'.$colFor.$postFix.'</div>';	
    return $elm;
}

function _priceFormat($number) {
    if (!is_numeric($number)) {
        return "0.00";
    }
    return number_format((float)$number, 2, '.', '');
}

function _locatePricing( $str ){
  $str 	= replaceCrSymbols( $str );
  $exp  = explode("|", $str);
  return ( is_array( $exp ) && (count($exp) > 1)  ) ? '<span class="spn-int">$'._priceFormat($exp[0]*10).'</span><span class="spn-local">₹'._priceFormat($exp[1]*10).'</span>' : $str;
}

function getAltPricingCalc( $col ){
	$elm = '<div class="ws-column active"><strong class="price-setter">'._locatePricing($col['ws-pricing']).'</strong><span class="small-font">(Per user)</span></div>
    <div class="ws-column"><strong class="price-setter">'._locatePricing($col['t1-pricing']).'</strong><span class="small-font">(Per user)</span></div>
    <div class="ws-column"><strong class="price-setter">'._locatePricing($col['t2-pricing']).'</strong><span class="small-font">(Per user)</span></div>
    <div class="ws-column"><strong class="price-setter">'._locatePricing($col['t3-pricing']).'</strong><span class="small-font">(Per user)</span></div>
    <div class="ws-column"><strong class="price-setter">'._locatePricing($col['t4-pricing']).'</strong><span class="small-font">(Per user)</span></div>';
    return $elm;
}


function comprTpl_Literals($content){
    return preg_replace_callback('/\{\{(\$[^|]*)\|([^}]*)\}\}/', function($matches){
    $usd = trim($matches[1]);
    $inr = trim($matches[2]);

    return '<span class="text-column no-evt tpl-litr"><a href="javascript:void(0);" class="prplan">'
	. '<span class="spn-ind">Pricing plans start from '.htmlspecialchars($inr).'</span>'
	. '<span class="spn-intr">Pricing plans start from '.htmlspecialchars($usd).'</span>'
	. '</a></span>';
    }, $content);
}

add_action( 'wp_ajax_nopriv_pc_postrequest', 'pcAjaxRequestCB' );
add_action( 'wp_ajax_pc_postrequest', 'pcAjaxRequestCB' );
function pcAjaxRequestCB(){
	global $wpdb;
	$email 			= sanitize_email($_POST['email'] ?? '');
	$known_keys 	= ['email'];
	$custom_data 	= array_diff_key($_POST, array_flip($known_keys));
	$serialized_data = maybe_serialize($custom_data);
	$wpdb->insert( 'wp_wfleadsdata', ['email' => $email, 'data' => $serialized_data],['%s','%s']);
	if($wpdb->insert_id ) {$_POST['insert_id']	= $wpdb->insert_id;}
	wp_send_json(['data' => $_POST]);	
	die;
}
<?php
require_once get_template_directory() .'/common/inc/global-config.php';
function isBetaVersion(){
	if( isset( $_SERVER['HTTP_HOST'] ) && ( $_SERVER['HTTP_HOST'] == "localhost" ) ) return true;

    return ( isset( $_SERVER['PHP_SELF'] ) && (strpos( $_SERVER['PHP_SELF'], 'staging' ) !== false) )  ?  true : false;
}

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


function workstatus_scripts() {
	wp_dequeue_style( 'wp-block-library' );
    wp_dequeue_style( 'wp-block-library-theme' );
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
	wp_enqueue_style('features', get_stylesheet_directory_uri().'/assests/css/featureDetail-new.css', array(), 
	_S_VERSION );
	wp_enqueue_style('ws-pricing-fltr', get_stylesheet_directory_uri().'/pricing-filter.css', array(), _S_VERSION);
	wp_enqueue_script('ws-pricing', get_stylesheet_directory_uri().'/js/ws-pricing.js', ['ws-script'], _S_VERSION, true);	
	}elseif(
	is_page_template(['page-templates/tpl-platform.php','page-templates/tpl-ebook.php']) 
	){
	wp_enqueue_style('plateform', get_stylesheet_directory_uri().'/assests/css/platform.css', array(), _S_VERSION);
	}elseif( 
	is_page_template(['page-templates/tpl-support.php','page-templates/tpl-careers.php']) 
	){
	wp_enqueue_style('support', get_stylesheet_directory_uri().'/assests/css/downloads.css', array(), _S_VERSION);
	}elseif( 
		is_page_template(
			['page-templates/tpl-faqs.php']) 
		){
		wp_enqueue_style('faqs', get_stylesheet_directory_uri().'/assests/css/faq.css', array(), _S_VERSION );
	}elseif( 
		is_page_template(
			['page-templates/tpl-about.php']) 
		){
		wp_enqueue_style('about-us', get_stylesheet_directory_uri().'/assests/css/about.css', array(), _S_VERSION );
	}elseif( 
		is_page_template(
			['page-templates/tpl-press.php']) 
		){
		wp_enqueue_style('press', get_stylesheet_directory_uri().'/assests/css/press.css', array(), _S_VERSION );
	}
	elseif( 
		is_page_template(['page-templates/tpl-reviews.php']) 
		){
		wp_enqueue_style('reviews', get_stylesheet_directory_uri().'/assests/css/reviews.css', array(), _S_VERSION );
	}
	elseif( is_page_template(['page-templates/tpl-pricing.php']) ){
		wp_enqueue_style('pricingnew', get_stylesheet_directory_uri().'/assests/css/pricing-new.css', array(), _S_VERSION );
		wp_enqueue_style('ws-pricing', get_stylesheet_directory_uri().'/assests/css/pricing.css', array(), _S_VERSION );
	}
	elseif( is_page_template(['page-templates/tpl-static-pricing.php']) ){
		wp_enqueue_style('ws-pricing', get_stylesheet_directory_uri().'/assests/css/ws-pricing.css', array(), _S_VERSION );
		wp_enqueue_style('ws-pricing-fltr', get_stylesheet_directory_uri().'/pricing-filter.css', array(), _S_VERSION );
		wp_enqueue_script('ws-pricing', get_stylesheet_directory_uri().'/js/ws-pricing.js', ['ws-script'], _S_VERSION, true);
	}
	elseif( is_page_template(['page-templates/tpl-pricing-v4.0.php']) ){
		wp_enqueue_style('ws-pricingv4.0', get_stylesheet_directory_uri().'/assests/css/pricing-page.css', array(), _S_VERSION );
		wp_enqueue_style('ws-pricing-fltr', get_stylesheet_directory_uri().'/pricing-filter.css', array(), _S_VERSION );
		wp_enqueue_script('ws-pricing', get_stylesheet_directory_uri().'/js/pricing-v4.0.js', ['ws-script'], _S_VERSION, true);
	}
	
	elseif(is_page_template([
		'page-templates/tpl-timecard.php',
		'page-templates/tpl-ts-template.php'
		])){
		//wp_enqueue_style('ws-timecard', get_stylesheet_directory_uri().'/assests/css/time-calculator.css', array(), _S_VERSION );
		wp_enqueue_style('ws-timecard', get_stylesheet_directory_uri().'/assests/css/time-calculator.css', array(), time() );
		if( !is_page_template('page-templates/tpl-ts-template.php') ){
		wp_enqueue_script('ws-timecalculate', get_stylesheet_directory_uri() . '/assests/js/time-calculate.js', array('ws-script'), _S_VERSION, true);
		}		
	}
	elseif( 
		is_page_template(
			['page-templates/tpl-how-tracking-works.php']) 
		){
		wp_enqueue_style('features', get_stylesheet_directory_uri().'/assests/css/featureDetail-new.css', array(), _S_VERSION );
		wp_enqueue_style('tracking', get_stylesheet_directory_uri().'/assests/css/tracking.css', array(), _S_VERSION );
	}
	elseif( 
		is_page_template(
			['page-templates/tpl-compare.php']) 
		){
		wp_enqueue_style('reviews', get_stylesheet_directory_uri().'/assests/css/alternative.css', array(), _S_VERSION );
	}
    elseif( 
		is_page_template(
			['page-templates/tpl-home.php']) 
		){
		wp_enqueue_style('home', get_stylesheet_directory_uri().'/assests/css/index.css', array(), _S_VERSION );
	}
	elseif( 
		is_page_template(
			['page-templates/tpl-home-v2.php']) 
		){
		wp_enqueue_style('home-v2', get_stylesheet_directory_uri().'/assests/css/index-new.css', array(), _S_VERSION );
	}
	elseif( 
		is_page_template(
			['page-templates/tpl-privacy.php']) 
		){
		wp_enqueue_style('privacy', get_stylesheet_directory_uri().'/assests/css/legal-documents.css', array(), _S_VERSION );
	}
	elseif( is_page_template(['page-templates/tpl-thankyou.php']) ){
		wp_enqueue_style('thankyou', get_stylesheet_directory_uri().'/assests/css/thanks.css', array(), _S_VERSION );
	}
	elseif( is_page_template(['page-templates/tpl-changelogs.php']) ){
		wp_enqueue_style('thankyou', get_stylesheet_directory_uri().'/assests/css/changelog.css', array(), _S_VERSION );
	}
	elseif( is_404() ){
		wp_enqueue_style('font-awesome', get_stylesheet_directory_uri().'/assests/css/font-awesome.min.css', array(), _S_VERSION );
		wp_enqueue_style('404', get_stylesheet_directory_uri().'/assests/css/404.css', array(), _S_VERSION );
	}
	elseif( is_page_template(['page-templates/tpl-demo.php']) ){
		wp_enqueue_style('sdemo', get_stylesheet_directory_uri().'/assests/css/demo-video.css', array(), _S_VERSION );
	}
	elseif( is_page_template(['page-templates/tpl-resources.php']) ){
		wp_enqueue_style('ws-resource', get_stylesheet_directory_uri().'/assests/css/resource.css', array(), _S_VERSION );
	}
	elseif( is_page_template(['page-templates/tpl-cmn-pillarpage.php']) ){
	$pageMode = get_post_meta( $post->ID, 'ws-pagemode', true );
	if( $pageMode && ($pageMode == "app") ){
	wp_enqueue_style('ws-cmn-pillar', get_stylesheet_directory_uri().'/assests/css/platform.css', array(), _S_VERSION );
	}else{
	wp_enqueue_style('ws-cmn-pillar', get_stylesheet_directory_uri().'/assests/css/featureDetail-new.css', array(), _S_VERSION );
	wp_enqueue_style('ws-pricing-fltr', get_stylesheet_directory_uri().'/pricing-filter.css', array(), _S_VERSION );
	wp_enqueue_script('ws-pricing', get_stylesheet_directory_uri().'/js/ws-pricing.js', ['ws-script'], _S_VERSION, true);	
	}
		
	}elseif( is_page_template(['page-templates/tpl-integrations-details.php']) ){
		wp_enqueue_style('ws-cmn-pillar', get_stylesheet_directory_uri().'/assests/css/integration-detail.css', array(), _S_VERSION);
	}
	elseif( is_page_template(['page-templates/tpl-roadmap.php']) ){
		wp_enqueue_style('ws-roadmap', get_stylesheet_directory_uri().'/assests/css/roadmap.css', array(), _S_VERSION);
	}
  	elseif( is_page_template(['page-templates/tpl-solution.php']) ){
		wp_enqueue_style('ws-solution', get_stylesheet_directory_uri().'/assests/css/solution.css', array(), _S_VERSION);
		wp_enqueue_style('ws-pricing-fltr', get_stylesheet_directory_uri().'/pricing-filter.css', array(), _S_VERSION );
		wp_enqueue_script('ws-pricing', get_stylesheet_directory_uri().'/js/ws-pricing.js', ['ws-script'], _S_VERSION, true);
	}
	elseif( is_page_template(['page-templates/tpl-data-retention.php']) ){
		wp_enqueue_style('ws-retention', get_stylesheet_directory_uri().'/assests/css/data-retention.css', array(), _S_VERSION);
	}	
  	elseif( is_page_template(['page-templates/tpl-affiliates.php']) ){
		wp_enqueue_style('ws-affiliates', get_stylesheet_directory_uri().'/assests/css/affiliates.css', array(), _S_VERSION);
	}
	elseif( is_page_template(['page-templates/tpl-tools-comparison.php']) ){
		wp_enqueue_style('ws-affiliates', get_stylesheet_directory_uri().'/assests/css/alternative-new.css', array(), _S_VERSION);
	}

	elseif( is_single() ){ 
		if( is_singular('survey') ){
		wp_enqueue_style('ws-survey', get_stylesheet_directory_uri().'/survey-style.css', array(), _S_VERSION );	
		}else{
		wp_enqueue_style('resource-details', get_stylesheet_directory_uri().'/assests/css/resources-detail.css', array(), _S_VERSION );
		wp_enqueue_script('ws-calc', get_stylesheet_directory_uri() . '/js/ws-calculations.js', array(), _S_VERSION, true );
		}
		
	}

	if( !is_singular('survey') ){
		wp_enqueue_style( 'ws-glider', get_stylesheet_directory_uri().'/assests/css/glider.css');
	}
	wp_enqueue_script( 'ws-intlTelInput', get_stylesheet_directory_uri() . '/assests/js/intlTelInput.min.js', array(), _S_VERSION, true );		
	wp_enqueue_script( 'ws-glider-script', get_stylesheet_directory_uri() .'/assests/js/glider.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'ws-script', get_stylesheet_directory_uri() . '/assests/js/script.js', array(), _S_VERSION, true );
	wp_localize_script('ws-script', 'wsObj', [
	'ipinfo' => (isset($_GET['ip']) && !empty($_GET['ip'])) ? site_url('/wp-json/ws-api/v1/ipinfo?ip='.$_GET['ip']) 
	: site_url('/wp-json/ws-api/v1/ipinfo'),
	'app_url' 		=> ( isBetaVersion() ) ? 'app.staging.workstatus.io' : 'app.workstatus.io',
	'admin_ajax' 	=> admin_url( 'admin-ajax.php' ),
	]);	
	/*
	wp_enqueue_script('workstatus-navigation', get_stylesheet_directory_uri() . '/js/navigation.js', array(), 
	_S_VERSION, true);
	*/
	wp_enqueue_script( 'ws-signup','https://bluzky.github.io/nice-select2/dist/js/nice-select2.js', array(), 
	_S_VERSION, true );
	wp_enqueue_style( 'ws-glider', 'https://bluzky.github.io/nice-select2/dist/css/nice-select2.css');
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

	if( is_single() ){
	global $post;
	$bannerType = get_post_meta( $post->ID, 'pbanner-type', true );	
	if( $bannerType && ($bannerType === "image") ){
		$classes[] = 'feature-banner';
	}
	}
	return $classes;
});

function getPxlWebpURL( $mid ){
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

	$hasClass 	= ( !empty( $class ) ) ? 'class="'.$class.'"' : '';
	$hasID 		= ( !empty( $id ) ) ? 'id="'.$id.'"' : '';
	return '<picture '.$hasID.' '.$hasClass.'>
	'.getPxlWebpURL($marray['ID']).'
	<source type="'.$marray['mime_type'].'" srcset="'.$marray['url'].'">
	<img loading="lazy" src="'.$marray['url'].'" title="'.$marray['title'].'" alt="'.$marray['title'].'" width="'.$marray['width'].'" 
	height="'.$marray['height'].'">
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



function pixelShowLatestPosts( $bposts, $pslug = ""){
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
 	<section class="useful-resources-blog-section bglight for-heading-center">
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
				   <source type="image/png" srcset="<?php echo  $row->thumbnail_m; ?>">
				   <img loading="lazy" src="<?php echo  $row->thumbnail_m;?>" alt="<?php echo $row->title; ?>" 
				   width="400" height="242">
				 </picture>
			   </div>
			   <div class="blog-title">
				 <h3><?php echo $row->title; ?></h3>
				 <span class="small_anchor">Read more</span>
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
add_action( 'wp_head', function(){
	global $post;	
	$nr = "\r\n";
	if(is_front_page()){
	echo '<link rel="preload" href="'.get_bloginfo('template_url').'/dev-images/home-bannerthumb.svg" as="image">';
	}else{
		if (is_object($post) && isset($post->ID)) {
			$top_section = get_field('top_section', $post->ID);
			if( 
			isset( $top_section['video_background_image'] ) && 
			!empty($top_section['video_background_image']) 
		    ){
				$cScreenSrc   = wsGetWebpSrcUrl($top_section['video_background_image']['id']);
				echo '<link rel="preload" href="'.$cScreenSrc.'" as="image">';	
			}	
		}	
			
	}
});

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

function tempWsPhoneCode( $pcode ){ 
$pcode = str_replace(" ","", $pcode);
$array = [
  [
    "id"=> 1,
    "name"=> "Afghanistan",
    "dial_code"=> "+93",
    "code"=> "AF"
  ],
  [
    "id"=> 2,
    "name"=> "Albania",
    "dial_code"=> "+355",
    "code"=> "AL"
  ],
  [
    "id"=> 3,
    "name"=> "Algeria",
    "dial_code"=> "+213",
    "code"=> "DZ"
  ],
  [
    "id"=> 4,
    "name"=> "AmericanSamoa",
    "dial_code"=> "+1684",
    "code"=> "AS"
  ],
  [
    "id"=> 5,
    "name"=> "Andorra",
    "dial_code"=> "+376",
    "code"=> "AD"
  ],
  [
    "id"=> 6,
    "name"=> "Angola",
    "dial_code"=> "+244",
    "code"=> "AO"
  ],
  [
    "id"=> 7,
    "name"=> "Anguilla",
    "dial_code"=> "+1264",
    "code"=> "AI"
  ],
  [
    "id"=> 8,
    "name"=> "Antarctica",
    "dial_code"=> "+672",
    "code"=> "AQ"
  ],
  [
    "id"=> 9,
    "name"=> "Antigua and Barbuda",
    "dial_code"=> "+1268",
    "code"=> "AG"
  ],
  [
    "id"=> 10,
    "name"=> "Argentina",
    "dial_code"=> "+54",
    "code"=> "AR"
  ],
  [
    "id"=> 11,
    "name"=> "Armenia",
    "dial_code"=> "+374",
    "code"=> "AM"
  ],
  [
    "id"=> 12,
    "name"=> "Aruba",
    "dial_code"=> "+297",
    "code"=> "AW"
  ],
  [
    "id"=> 13,
    "name"=> "Australia",
    "dial_code"=> "+61",
    "code"=> "AU"
  ],
  [
    "id"=> 14,
    "name"=> "Austria",
    "dial_code"=> "+43",
    "code"=> "AT"
  ],
  [
    "id"=> 15,
    "name"=> "Azerbaijan",
    "dial_code"=> "+994",
    "code"=> "AZ"
  ],
  [
    "id"=> 16,
    "name"=> "Bahamas",
    "dial_code"=> "+1242",
    "code"=> "BS"
  ],
  [
    "id"=> 17,
    "name"=> "Bahrain",
    "dial_code"=> "+973",
    "code"=> "BH"
  ],
  [
    "id"=> 18,
    "name"=> "Bangladesh",
    "dial_code"=> "+880",
    "code"=> "BD"
  ],
  [
    "id"=> 19,
    "name"=> "Barbados",
    "dial_code"=> "+1246",
    "code"=> "BB"
  ],
  [
    "id"=> 20,
    "name"=> "Belarus",
    "dial_code"=> "+375",
    "code"=> "BY"
  ],
  [
    "id"=> 21,
    "name"=> "Belgium",
    "dial_code"=> "+32",
    "code"=> "BE"
  ],
  [
    "id"=> 22,
    "name"=> "Belize",
    "dial_code"=> "+501",
    "code"=> "BZ"
  ],
  [
    "id"=> 23,
    "name"=> "Benin",
    "dial_code"=> "+229",
    "code"=> "BJ"
  ],
  [
    "id"=> 24,
    "name"=> "Bermuda",
    "dial_code"=> "+1441",
    "code"=> "BM"
  ],
  [
    "id"=> 25,
    "name"=> "Bhutan",
    "dial_code"=> "+975",
    "code"=> "BT"
  ],
  [
    "id"=> 26,
    "name"=> "Bolivia, Plurinational State of",
    "dial_code"=> "+591",
    "code"=> "BO"
  ],
  [
    "id"=> 27,
    "name"=> "Bosnia and Herzegovina",
    "dial_code"=> "+387",
    "code"=> "BA"
  ],
  [
    "id"=> 28,
    "name"=> "Botswana",
    "dial_code"=> "+267",
    "code"=> "BW"
  ],
  [
    "id"=> 29,
    "name"=> "Brazil",
    "dial_code"=> "+55",
    "code"=> "BR"
  ],
  [
    "id"=> 30,
    "name"=> "British Indian Ocean Territory",
    "dial_code"=> "+246",
    "code"=> "IO"
  ],
  [
    "id"=> 31,
    "name"=> "Brunei Darussalam",
    "dial_code"=> "+673",
    "code"=> "BN"
  ],
  [
    "id"=> 32,
    "name"=> "Bulgaria",
    "dial_code"=> "+359",
    "code"=> "BG"
  ],
  [
    "id"=> 33,
    "name"=> "Burkina Faso",
    "dial_code"=> "+226",
    "code"=> "BF"
  ],
  [
    "id"=> 34,
    "name"=> "Burundi",
    "dial_code"=> "+257",
    "code"=> "BI"
  ],
  [
    "id"=> 35,
    "name"=> "Cambodia",
    "dial_code"=> "+855",
    "code"=> "KH"
  ],
  [
    "id"=> 36,
    "name"=> "Cameroon",
    "dial_code"=> "+237",
    "code"=> "CM"
  ],
  [
    "id"=> 37,
    "name"=> "Canada",
    "dial_code"=> "+1",
    "code"=> "CA"
  ],
  [
    "id"=> 38,
    "name"=> "Cape Verde",
    "dial_code"=> "+238",
    "code"=> "CV"
  ],
  [
    "id"=> 39,
    "name"=> "Cayman Islands",
    "dial_code"=> "+ 345",
    "code"=> "KY"
  ],
  [
    "id"=> 40,
    "name"=> "Central African Republic",
    "dial_code"=> "+236",
    "code"=> "CF"
  ],
  [
    "id"=> 41,
    "name"=> "Chad",
    "dial_code"=> "+235",
    "code"=> "TD"
  ],
  [
    "id"=> 42,
    "name"=> "Chile",
    "dial_code"=> "+56",
    "code"=> "CL"
  ],
  [
    "id"=> 43,
    "name"=> "China",
    "dial_code"=> "+86",
    "code"=> "CN"
  ],
  [
    "id"=> 44,
    "name"=> "Christmas Island",
    "dial_code"=> "+61",
    "code"=> "CX"
  ],
  [
    "id"=> 45,
    "name"=> "Cocos (Keeling) Islands",
    "dial_code"=> "+61",
    "code"=> "CC"
  ],
  [
    "id"=> 46,
    "name"=> "Colombia",
    "dial_code"=> "+57",
    "code"=> "CO"
  ],
  [
    "id"=> 47,
    "name"=> "Comoros",
    "dial_code"=> "+269",
    "code"=> "KM"
  ],
  [
    "id"=> 48,
    "name"=> "Congo",
    "dial_code"=> "+242",
    "code"=> "CG"
  ],
  [
    "id"=> 49,
    "name"=> "Congo, The Democratic Republic of the Congo",
    "dial_code"=> "+243",
    "code"=> "CD"
  ],
  [
    "id"=> 50,
    "name"=> "Cook Islands",
    "dial_code"=> "+682",
    "code"=> "CK"
  ],
  [
    "id"=> 51,
    "name"=> "Costa Rica",
    "dial_code"=> "+506",
    "code"=> "CR"
  ],
  [
    "id"=> 52,
    "name"=> "Croatia",
    "dial_code"=> "+385",
    "code"=> "HR"
  ],
  [
    "id"=> 53,
    "name"=> "Cuba",
    "dial_code"=> "+53",
    "code"=> "CU"
  ],
  [
    "id"=> 54,
    "name"=> "Cyprus",
    "dial_code"=> "+357",
    "code"=> "CY"
  ],
  [
    "id"=> 55,
    "name"=> "Czech Republic",
    "dial_code"=> "+420",
    "code"=> "CZ"
  ],
  [
    "id"=> 56,
    "name"=> "Denmark",
    "dial_code"=> "+45",
    "code"=> "DK"
  ],
  [
    "id"=> 57,
    "name"=> "Djibouti",
    "dial_code"=> "+253",
    "code"=> "DJ"
  ],
  [
    "id"=> 58,
    "name"=> "Dominica",
    "dial_code"=> "+1767",
    "code"=> "DM"
  ],
  [
    "id"=> 59,
    "name"=> "Dominican Republic",
    "dial_code"=> "+1849",
    "code"=> "DO"
  ],
  [
    "id"=> 60,
    "name"=> "Ecuador",
    "dial_code"=> "+593",
    "code"=> "EC"
  ],
  [
    "id"=> 61,
    "name"=> "Egypt",
    "dial_code"=> "+20",
    "code"=> "EG"
  ],
  [
    "id"=> 62,
    "name"=> "El Salvador",
    "dial_code"=> "+503",
    "code"=> "SV"
  ],
  [
    "id"=> 63,
    "name"=> "Equatorial Guinea",
    "dial_code"=> "+240",
    "code"=> "GQ"
  ],
  [
    "id"=> 64,
    "name"=> "Eritrea",
    "dial_code"=> "+291",
    "code"=> "ER"
  ],
  [
    "id"=> 65,
    "name"=> "Estonia",
    "dial_code"=> "+372",
    "code"=> "EE"
  ],
  [
    "id"=> 66,
    "name"=> "Ethiopia",
    "dial_code"=> "+251",
    "code"=> "ET"
  ],
  [
    "id"=> 67,
    "name"=> "Falkland Islands (Malvinas)",
    "dial_code"=> "+500",
    "code"=> "FK"
  ],
  [
    "id"=> 68,
    "name"=> "Faroe Islands",
    "dial_code"=> "+298",
    "code"=> "FO"
  ],
  [
    "id"=> 69,
    "name"=> "Fiji",
    "dial_code"=> "+679",
    "code"=> "FJ"
  ],
  [
    "id"=> 70,
    "name"=> "Finland",
    "dial_code"=> "+358",
    "code"=> "FI"
  ],
  [
    "id"=> 71,
    "name"=> "France",
    "dial_code"=> "+33",
    "code"=> "FR"
  ],
  [
    "id"=> 72,
    "name"=> "French Guiana",
    "dial_code"=> "+594",
    "code"=> "GF"
  ],
  [
    "id"=> 73,
    "name"=> "French Polynesia",
    "dial_code"=> "+689",
    "code"=> "PF"
  ],
  [
    "id"=> 74,
    "name"=> "Gabon",
    "dial_code"=> "+241",
    "code"=> "GA"
  ],
  [
    "id"=> 75,
    "name"=> "Gambia",
    "dial_code"=> "+220",
    "code"=> "GM"
  ],
  [
    "id"=> 76,
    "name"=> "Georgia",
    "dial_code"=> "+995",
    "code"=> "GE"
  ],
  [
    "id"=> 77,
    "name"=> "Germany",
    "dial_code"=> "+49",
    "code"=> "DE"
  ],
  [
    "id"=> 78,
    "name"=> "Ghana",
    "dial_code"=> "+233",
    "code"=> "GH"
  ],
  [
    "id"=> 79,
    "name"=> "Gibraltar",
    "dial_code"=> "+350",
    "code"=> "GI"
  ],
  [
    "id"=> 80,
    "name"=> "Greece",
    "dial_code"=> "+30",
    "code"=> "GR"
  ],
  [
    "id"=> 81,
    "name"=> "Greenland",
    "dial_code"=> "+299",
    "code"=> "GL"
  ],
  [
    "id"=> 82,
    "name"=> "Grenada",
    "dial_code"=> "+1473",
    "code"=> "GD"
  ],
  [
    "id"=> 83,
    "name"=> "Guadeloupe",
    "dial_code"=> "+590",
    "code"=> "GP"
  ],
  [
    "id"=> 84,
    "name"=> "Guam",
    "dial_code"=> "+1671",
    "code"=> "GU"
  ],
  [
    "id"=> 85,
    "name"=> "Guatemala",
    "dial_code"=> "+502",
    "code"=> "GT"
  ],
  [
    "id"=> 86,
    "name"=> "Guernsey",
    "dial_code"=> "+44",
    "code"=> "GG"
  ],
  [
    "id"=> 87,
    "name"=> "Guinea",
    "dial_code"=> "+224",
    "code"=> "GN"
  ],
  [
    "id"=> 88,
    "name"=> "Guinea-Bissau",
    "dial_code"=> "+245",
    "code"=> "GW"
  ],
  [
    "id"=> 89,
    "name"=> "Guyana",
    "dial_code"=> "+595",
    "code"=> "GY"
  ],
  [
    "id"=> 90,
    "name"=> "Haiti",
    "dial_code"=> "+509",
    "code"=> "HT"
  ],
  [
    "id"=> 91,
    "name"=> "Holy See (Vatican City State)",
    "dial_code"=> "+379",
    "code"=> "VA"
  ],
  [
    "id"=> 92,
    "name"=> "Honduras",
    "dial_code"=> "+504",
    "code"=> "HN"
  ],
  [
    "id"=> 93,
    "name"=> "Hong Kong",
    "dial_code"=> "+852",
    "code"=> "HK"
  ],
  [
    "id"=> 94,
    "name"=> "Hungary",
    "dial_code"=> "+36",
    "code"=> "HU"
  ],
  [
    "id"=> 95,
    "name"=> "Iceland",
    "dial_code"=> "+354",
    "code"=> "IS"
  ],
  [
    "id"=> 96,
    "name"=> "India",
    "dial_code"=> "+91",
    "code"=> "IN"
  ],
  [
    "id"=> 97,
    "name"=> "Indonesia",
    "dial_code"=> "+62",
    "code"=> "ID"
  ],
  [
    "id"=> 98,
    "name"=> "Iran, Islamic Republic of Persian Gulf",
    "dial_code"=> "+98",
    "code"=> "IR"
  ],
  [
    "id"=> 99,
    "name"=> "Iraq",
    "dial_code"=> "+964",
    "code"=> "IQ"
  ],
  [
    "id"=> 100,
    "name"=> "Ireland",
    "dial_code"=> "+353",
    "code"=> "IE"
  ],
  [
    "id"=> 101,
    "name"=> "Isle of Man",
    "dial_code"=> "+44",
    "code"=> "IM"
  ],
  [
    "id"=> 102,
    "name"=> "Israel",
    "dial_code"=> "+972",
    "code"=> "IL"
  ],
  [
    "id"=> 103,
    "name"=> "Italy",
    "dial_code"=> "+39",
    "code"=> "IT"
  ],
  [
    "id"=> 104,
    "name"=> "Jamaica",
    "dial_code"=> "+1876",
    "code"=> "JM"
  ],
  [
    "id"=> 105,
    "name"=> "Japan",
    "dial_code"=> "+81",
    "code"=> "JP"
  ],
  [
    "id"=> 106,
    "name"=> "Jersey",
    "dial_code"=> "+44",
    "code"=> "JE"
  ],
  [
    "id"=> 107,
    "name"=> "Jordan",
    "dial_code"=> "+962",
    "code"=> "JO"
  ],
  [
    "id"=> 108,
    "name"=> "Kazakhstan",
    "dial_code"=> "+77",
    "code"=> "KZ"
  ],
  [
    "id"=> 109,
    "name"=> "Kenya",
    "dial_code"=> "+254",
    "code"=> "KE"
  ],
  [
    "id"=> 110,
    "name"=> "Kiribati",
    "dial_code"=> "+686",
    "code"=> "KI"
  ],
  [
    "id"=> 111,
    "name"=> "Kuwait",
    "dial_code"=> "+965",
    "code"=> "KW"
  ],
  [
    "id"=> 112,
    "name"=> "Kyrgyzstan",
    "dial_code"=> "+996",
    "code"=> "KG"
  ],
  [
    "id"=> 113,
    "name"=> "Laos",
    "dial_code"=> "+856",
    "code"=> "LA"
  ],
  [
    "id"=> 114,
    "name"=> "Latvia",
    "dial_code"=> "+371",
    "code"=> "LV"
  ],
  [
    "id"=> 115,
    "name"=> "Lebanon",
    "dial_code"=> "+961",
    "code"=> "LB"
  ],
  [
    "id"=> 116,
    "name"=> "Lesotho",
    "dial_code"=> "+266",
    "code"=> "LS"
  ],
  [
    "id"=> 117,
    "name"=> "Liberia",
    "dial_code"=> "+231",
    "code"=> "LR"
  ],
  [
    "id"=> 118,
    "name"=> "Libyan Arab Jamahiriya",
    "dial_code"=> "+218",
    "code"=> "LY"
  ],
  [
    "id"=> 119,
    "name"=> "Liechtenstein",
    "dial_code"=> "+423",
    "code"=> "LI"
  ],
  [
    "id"=> 120,
    "name"=> "Lithuania",
    "dial_code"=> "+370",
    "code"=> "LT"
  ],
  [
    "id"=> 121,
    "name"=> "Luxembourg",
    "dial_code"=> "+352",
    "code"=> "LU"
  ],
  [
    "id"=> 122,
    "name"=> "Macao",
    "dial_code"=> "+853",
    "code"=> "MO"
  ],
  [
    "id"=> 123,
    "name"=> "Macedonia",
    "dial_code"=> "+389",
    "code"=> "MK"
  ],
  [
    "id"=> 124,
    "name"=> "Madagascar",
    "dial_code"=> "+261",
    "code"=> "MG"
  ],
  [
    "id"=> 125,
    "name"=> "Malawi",
    "dial_code"=> "+265",
    "code"=> "MW"
  ],
  [
    "id"=> 126,
    "name"=> "Malaysia",
    "dial_code"=> "+60",
    "code"=> "MY"
  ],
  [
    "id"=> 127,
    "name"=> "Maldives",
    "dial_code"=> "+960",
    "code"=> "MV"
  ],
  [
    "id"=> 128,
    "name"=> "Mali",
    "dial_code"=> "+223",
    "code"=> "ML"
  ],
  [
    "id"=> 129,
    "name"=> "Malta",
    "dial_code"=> "+356",
    "code"=> "MT"
  ],
  [
    "id"=> 130,
    "name"=> "Marshall Islands",
    "dial_code"=> "+692",
    "code"=> "MH"
  ],
  [
    "id"=> 131,
    "name"=> "Martinique",
    "dial_code"=> "+596",
    "code"=> "MQ"
  ],
  [
    "id"=> 132,
    "name"=> "Mauritania",
    "dial_code"=> "+222",
    "code"=> "MR"
  ],
  [
    "id"=> 133,
    "name"=> "Mauritius",
    "dial_code"=> "+230",
    "code"=> "MU"
  ],
  [
    "id"=> 134,
    "name"=> "Mayotte",
    "dial_code"=> "+262",
    "code"=> "YT"
  ],
  [
    "id"=> 135,
    "name"=> "Mexico",
    "dial_code"=> "+52",
    "code"=> "MX"
  ],
  [
    "id"=> 136,
    "name"=> "Micronesia, Federated States of Micronesia",
    "dial_code"=> "+691",
    "code"=> "FM"
  ],
  [
    "id"=> 137,
    "name"=> "Moldova",
    "dial_code"=> "+373",
    "code"=> "MD"
  ],
  [
    "id"=> 138,
    "name"=> "Monaco",
    "dial_code"=> "+377",
    "code"=> "MC"
  ],
  [
    "id"=> 139,
    "name"=> "Mongolia",
    "dial_code"=> "+976",
    "code"=> "MN"
  ],
  [
    "id"=> 140,
    "name"=> "Montenegro",
    "dial_code"=> "+382",
    "code"=> "ME"
  ],
  [
    "id"=> 141,
    "name"=> "Montserrat",
    "dial_code"=> "+1664",
    "code"=> "MS"
  ],
  [
    "id"=> 142,
    "name"=> "Morocco",
    "dial_code"=> "+212",
    "code"=> "MA"
  ],
  [
    "id"=> 143,
    "name"=> "Mozambique",
    "dial_code"=> "+258",
    "code"=> "MZ"
  ],
  [
    "id"=> 144,
    "name"=> "Myanmar",
    "dial_code"=> "+95",
    "code"=> "MM"
  ],
  [
    "id"=> 145,
    "name"=> "Namibia",
    "dial_code"=> "+264",
    "code"=> "NA"
  ],
  [
    "id"=> 146,
    "name"=> "Nauru",
    "dial_code"=> "+674",
    "code"=> "NR"
  ],
  [
    "id"=> 147,
    "name"=> "Nepal",
    "dial_code"=> "+977",
    "code"=> "NP"
  ],
  [
    "id"=> 148,
    "name"=> "Netherlands",
    "dial_code"=> "+31",
    "code"=> "NL"
  ],
  [
    "id"=> 149,
    "name"=> "Netherlands Antilles",
    "dial_code"=> "+599",
    "code"=> "AN"
  ],
  [
    "id"=> 150,
    "name"=> "New Caledonia",
    "dial_code"=> "+687",
    "code"=> "NC"
  ],
  [
    "id"=> 151,
    "name"=> "New Zealand",
    "dial_code"=> "+64",
    "code"=> "NZ"
  ],
  [
    "id"=> 152,
    "name"=> "Nicaragua",
    "dial_code"=> "+505",
    "code"=> "NI"
  ],
  [
    "id"=> 153,
    "name"=> "Niger",
    "dial_code"=> "+227",
    "code"=> "NE"
  ],
  [
    "id"=> 154,
    "name"=> "Nigeria",
    "dial_code"=> "+234",
    "code"=> "NG"
  ],
  [
    "id"=> 155,
    "name"=> "Niue",
    "dial_code"=> "+683",
    "code"=> "NU"
  ],
  [
    "id"=> 156,
    "name"=> "Norfolk Island",
    "dial_code"=> "+672",
    "code"=> "NF"
  ],
  [
    "id"=> 157,
    "name"=> "Northern Mariana Islands",
    "dial_code"=> "+1670",
    "code"=> "MP"
  ],
  [
    "id"=> 158,
    "name"=> "Norway",
    "dial_code"=> "+47",
    "code"=> "NO"
  ],
  [
    "id"=> 159,
    "name"=> "Oman",
    "dial_code"=> "+968",
    "code"=> "OM"
  ],
  [
    "id"=> 160,
    "name"=> "Pakistan",
    "dial_code"=> "+92",
    "code"=> "PK"
  ],
  [
    "id"=> 161,
    "name"=> "Palau",
    "dial_code"=> "+680",
    "code"=> "PW"
  ],
  [
    "id"=> 162,
    "name"=> "Palestinian Territory, Occupied",
    "dial_code"=> "+970",
    "code"=> "PS"
  ],
  [
    "id"=> 163,
    "name"=> "Panama",
    "dial_code"=> "+507",
    "code"=> "PA"
  ],
  [
    "id"=> 164,
    "name"=> "Papua New Guinea",
    "dial_code"=> "+675",
    "code"=> "PG"
  ],
  [
    "id"=> 165,
    "name"=> "Paraguay",
    "dial_code"=> "+595",
    "code"=> "PY"
  ],
  [
    "id"=> 166,
    "name"=> "Peru",
    "dial_code"=> "+51",
    "code"=> "PE"
  ],
  [
    "id"=> 167,
    "name"=> "Philippines",
    "dial_code"=> "+63",
    "code"=> "PH"
  ],
  [
    "id"=> 168,
    "name"=> "Pitcairn",
    "dial_code"=> "+872",
    "code"=> "PN"
  ],
  [
    "id"=> 169,
    "name"=> "Poland",
    "dial_code"=> "+48",
    "code"=> "PL"
  ],
  [
    "id"=> 170,
    "name"=> "Portugal",
    "dial_code"=> "+351",
    "code"=> "PT"
  ],
  [
    "id"=> 171,
    "name"=> "Puerto Rico",
    "dial_code"=> "+1939",
    "code"=> "PR"
  ],
  [
    "id"=> 172,
    "name"=> "Qatar",
    "dial_code"=> "+974",
    "code"=> "QA"
  ],
  [
    "id"=> 173,
    "name"=> "Romania",
    "dial_code"=> "+40",
    "code"=> "RO"
  ],
  [
    "id"=> 174,
    "name"=> "Russia",
    "dial_code"=> "+7",
    "code"=> "RU"
  ],
  [
    "id"=> 175,
    "name"=> "Rwanda",
    "dial_code"=> "+250",
    "code"=> "RW"
  ],
  [
    "id"=> 176,
    "name"=> "Reunion",
    "dial_code"=> "+262",
    "code"=> "RE"
  ],
  [
    "id"=> 177,
    "name"=> "Saint Barthelemy",
    "dial_code"=> "+590",
    "code"=> "BL"
  ],
  [
    "id"=> 178,
    "name"=> "Saint Helena, Ascension and Tristan Da Cunha",
    "dial_code"=> "+290",
    "code"=> "SH"
  ],
  [
    "id"=> 179,
    "name"=> "Saint Kitts and Nevis",
    "dial_code"=> "+1869",
    "code"=> "KN"
  ],
  [
    "id"=> 180,
    "name"=> "Saint Lucia",
    "dial_code"=> "+1758",
    "code"=> "LC"
  ],
  [
    "id"=> 181,
    "name"=> "Saint Martin",
    "dial_code"=> "+590",
    "code"=> "MF"
  ],
  [
    "id"=> 182,
    "name"=> "Saint Pierre and Miquelon",
    "dial_code"=> "+508",
    "code"=> "PM"
  ],
  [
    "id"=> 183,
    "name"=> "Saint Vincent and the Grenadines",
    "dial_code"=> "+1784",
    "code"=> "VC"
  ],
  [
    "id"=> 184,
    "name"=> "Samoa",
    "dial_code"=> "+685",
    "code"=> "WS"
  ],
  [
    "id"=> 185,
    "name"=> "San Marino",
    "dial_code"=> "+378",
    "code"=> "SM"
  ],
  [
    "id"=> 186,
    "name"=> "Sao Tome and Principe",
    "dial_code"=> "+239",
    "code"=> "ST"
  ],
  [
    "id"=> 187,
    "name"=> "Saudi Arabia",
    "dial_code"=> "+966",
    "code"=> "SA"
  ],
  [
    "id"=> 188,
    "name"=> "Senegal",
    "dial_code"=> "+221",
    "code"=> "SN"
  ],
  [
    "id"=> 189,
    "name"=> "Serbia",
    "dial_code"=> "+381",
    "code"=> "RS"
  ],
  [
    "id"=> 190,
    "name"=> "Seychelles",
    "dial_code"=> "+248",
    "code"=> "SC"
  ],
  [
    "id"=> 191,
    "name"=> "Sierra Leone",
    "dial_code"=> "+232",
    "code"=> "SL"
  ],
  [
    "id"=> 192,
    "name"=> "Singapore",
    "dial_code"=> "+65",
    "code"=> "SG"
  ],
  [
    "id"=> 193,
    "name"=> "Slovakia",
    "dial_code"=> "+421",
    "code"=> "SK"
  ],
  [
    "id"=> 194,
    "name"=> "Solomon Islands",
    "dial_code"=> "+677",
    "code"=> "SB"
  ],
  [
    "id"=> 195,
    "name"=> "South Africa",
    "dial_code"=> "+27",
    "code"=> "ZA"
  ],
  [
    "id"=> 196,
    "name"=> "Sri Lanka",
    "dial_code"=> "+94",
    "code"=> "LK"
  ],
  [
    "id"=> 197,
    "name"=> "Switzerland",
    "dial_code"=> "+41",
    "code"=> "CH"
  ],
  [
    "id"=> 198,
    "name"=> "United Kingdom",
    "dial_code"=> "+44",
    "code"=> "GB"
  ],
  [
    "id"=> 199,
    "name"=> "United States",
    "dial_code"=> "+1",
    "code"=> "US"
  ]
];
	$key = array_search( $pcode, array_column( $array, 'dial_code' ) );	
	return ( $key ) ? $array[$key]['id'] : false;
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
    $fonts[] = '/wp-content/themes/workstatus/assests/fonts/NotoSans-Regular.woff2';
    $fonts[] = '/wp-content/themes/workstatus/assests/fonts/NotoSans-Bold.woff2';
    $fonts[] = '/wp-content/themes/workstatus/assests/fonts/NotoSans-Medium.woff2';
    $fonts[] = '/wp-content/themes/workstatus/assests/fonts/NotoSans-SemiBold.woff2';
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
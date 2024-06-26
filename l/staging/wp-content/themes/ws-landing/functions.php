<?php
if ( ! defined( '_S_VERSION' ) ) {
	//define( '_S_VERSION', '16.11.0' );
	define( '_S_VERSION', time() );
}

function ws_landing_setup() {
	load_theme_textdomain( 'ws-landing', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5',
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

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'ws_landing_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'ws_landing_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function ws_landing_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'ws_landing_content_width', 640 );
}
add_action( 'after_setup_theme', 'ws_landing_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function ws_landing_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'We believe in numbers', 'ws-landing' ),
			'id'            => 'we-belive',
			'description'   => esc_html__( 'Add widgets here.', 'ws-landing' ),
			'before_widget' => '<section id="%1$s" class="container d-grid-sm text-center-lg stats animate">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Widget', 'ws-landing' ),
			'id'            => 'footer-widget',
			'description'   => esc_html__( 'Add widgets here.', 'ws-landing' ),
			'before_widget' => '<footer class="container main-footer animate">',
			'after_widget'  => '</footer>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'ws_landing_widgets_init' );

function issglFldForm(){
	//return true;
	global $post;
	$ranMeta = get_post_meta( $post->ID, 'page-eforms', true );
	if( isset( $ranMeta ) && ( $ranMeta == "no" ) ){
		return true;
	}else{
		return false;
	}
}

function sixTwoTpl(){
	global $post;	
	$tplversion = get_post_meta( $post->ID, 'tpl-stype', true );
	if( $tplversion && ($tplversion == "6.2") ){
		return true;
	}else{
		return false;
	}
}

/*
Enqueue scripts and styles.
*/
function ws_landing_scripts(){
	global $post;
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	wp_dequeue_style( 'wp-block-library' );
    wp_dequeue_style( 'wp-block-library-theme' );
	if( wp_is_mobile() ){
		wp_deregister_script( 'wp-embed' );
	}

	wp_enqueue_script( 'wsglobal', get_stylesheet_directory_uri() . '/js/ws-global.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'ws-glider', get_stylesheet_directory_uri() . '/js/glider.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'ws-intel', get_stylesheet_directory_uri() . '/js/intlTelInput.js', array(), _S_VERSION, true );
	
	if( is_page_template( 'page-templates/tpl-version2.php' ) ){
	wp_enqueue_script('ws-script', get_stylesheet_directory_uri().'/js/script-version1.js', array(), _S_VERSION, true);
	wp_enqueue_script('wssignup-script', get_stylesheet_directory_uri().'/js/signupjs.js', array(), _S_VERSION, true);
	wp_localize_script('wssignup-script', 'wsObj', ['ajaxurl' => admin_url( 'admin-ajax.php' )] );
	}

	if( is_page_template( 'page-templates/tpl-version3.php' ) ){
	wp_enqueue_script('ws-script', get_stylesheet_directory_uri() . '/js/script-version1.js', array(), _S_VERSION, true);
	}

	if( is_page_template( 'page-templates/tpl-version1.php' ) ){
	wp_enqueue_script( 'ws-script', get_stylesheet_directory_uri() . '/js/script-version1.js', array(), _S_VERSION, true );
	}
	if( is_page_template( 'page-templates/tpl-thanks-signup.php' ) ){
	wp_enqueue_style('ws-thanks', get_bloginfo('template_url').'/assets/css/thank-you.css', [], _S_VERSION);	  	
	}
	else{
	    if( !is_page_template( 
	    	[
	    	'page-templates/tpl-version2.php', 
	    	'page-templates/tpl-version5.0.php',
	    	'page-templates/tpl-version5.1.php',
	    	'page-templates/tpl-version6.0.php'
	    	] ) ){
			wp_enqueue_script( 'ws-script', get_stylesheet_directory_uri() . '/js/script.js', array(), _S_VERSION, true );
		}
	}

	if( 
	is_page_template([
	'page-templates/tpl-version5.0.php', 
	'page-templates/tpl-version5.1.php'
	])){
	$styleFive = (is_page_template('page-templates/tpl-version5.0.php')) ? 'version-5.0-min.css' : 'version-5.1-min.css';
	wp_enqueue_style('ws-style', get_stylesheet_directory_uri().'/assets/css/'.$styleFive, [], _S_VERSION);	  	
  	wp_enqueue_script('app_signup', get_bloginfo('template_url').'/js/signupform-validation.js', [], _S_VERSION, true);
  	wp_localize_script('app_signup', 'suObj', [	
	'ajaxurl' => admin_url( 'admin-ajax.php'),
	'siteurl' => get_bloginfo('url'),
	]);		


	/*Pricing Table Stuff : Starts*/
	$reqPricingTable = get_post_meta($post->ID, 'ws-pctable', true);
	if( $reqPricingTable === "yes" ){	
	wp_enqueue_style('ws-pricing-fltr', get_stylesheet_directory_uri().'/pricing-filter.css', array(), _S_VERSION );	
	wp_enqueue_script('ws-pricing', get_bloginfo('template_url').'/js/ws-pricing.js', [], time(), true);
	wp_localize_script('ws-pricing', 'prObj', [	
	'ipinfo' => (isset($_GET['ip']) && !empty($_GET['ip'])) ? 
	'https://www.workstatus.io/wp-json/ws-api/v1/ipinfo?ip='.$_GET['ip'] : 
	'https://www.workstatus.io/wp-json/ws-api/v1/ipinfo',
	'app_url' => 'app.workstatus.io'
	]);		
	}
	/*Pricing Table Stuff : Ends*/

	if( is_page_template('page-templates/tpl-version5.1.php') ){
	wp_enqueue_script( 'ws-script', get_stylesheet_directory_uri() . '/js/script-ver5.1.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'ws-ldform', get_stylesheet_directory_uri() . '/js/cmn-leadform.js', array(), _S_VERSION, true );
	}else{
	wp_enqueue_script('ws-script', get_stylesheet_directory_uri() . '/js/script-version1.js', array(), _S_VERSION, true);
	}
	wp_enqueue_script( 'ws-ns-script', get_stylesheet_directory_uri() . '/assets/js/script.js', array(), _S_VERSION, 
	true );
	wp_enqueue_script( 'wssignup-script', get_stylesheet_directory_uri().'/js/validation5.0.js', array(), _S_VERSION, 
	true);
	wp_localize_script( 'wssignup-script', 'wsObj', ['ajaxurl' => admin_url( 'admin-ajax.php' )] );
	}
	elseif( is_page_template( 'page-templates/tpl-version6.0.php' ) ){
	if( sixTwoTpl() === true ){
		wp_enqueue_style( 'ws-style', get_stylesheet_directory_uri().'/assets/css/version-6.2-min.css' );
	}else{
		wp_enqueue_style( 'ws-style', get_stylesheet_directory_uri().'/assets/css/version-6.0-min.css' );
	}
	wp_enqueue_script( 'ws-script', get_stylesheet_directory_uri() . '/js/script-version1.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'ws-ns-script', get_stylesheet_directory_uri() . '/assets/js/script.js', array(), _S_VERSION, true );	
	wp_enqueue_script( 'wssignup-script', get_stylesheet_directory_uri().'/js/validation6.0.js', array(), time(), true);
	wp_localize_script( 'wssignup-script', 'wsObj', ['ajaxurl' => admin_url( 'admin-ajax.php' )] );
	}else{
		//wp_enqueue_style( 'ws-style', get_stylesheet_directory_uri().'/css/style.css' );	
	}	





}
add_action( 'wp_enqueue_scripts', 'ws_landing_scripts' );

require get_template_directory() . '/inc/custom-header.php';
require get_template_directory() . '/inc/template-tags.php';
require get_template_directory() . '/inc/template-functions.php';
require get_template_directory() . '/inc/customizer.php';
require get_template_directory() . '/inc/signup-functions.php';

if ( defined( 'JETPACK__VERSION' ) ){
	require get_template_directory() . '/inc/jetpack.php';
}



/*Optoins Page Optoins Here*/
if( function_exists('acf_add_options_page') ) { 
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Options',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts	',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Testimonials',
		'menu_title'	=> 'Testimonials',
		'parent_slug'	=> 'theme-general-settings',
	));

	/*
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Testimonials v5.0',
		'menu_title'	=> 'Testimonials v5.0',
		'parent_slug'	=> 'theme-general-settings',
	));
	*/
}

function wpgetUserIP(){
    if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
              $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
              $_SERVER['HTTP_CLIENT_IP'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
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

function wpgetDemoLink(){
	return "javascript:void(0);";
	
	/*
	global $wp;	
	$formLink 	= "https://calendly.com/workstatus/product-demo?utm_source=";
	$pageURL 	= home_url( $wp->request );
	//$pageURL 	= str_replace(".php", "", $pageURL);
	return $formLink.$pageURL.'!!'.getUserIP();
	*/
}

add_action( 'wp_head', function(){
	global $post;
	if ( is_page() ) {
		$keyMeta = get_post_meta( $post->ID, 'wsmeta_keywords', true );
		if( $keyMeta ){
			echo '<meta name="keywords" content="'.$keyMeta.'"/>';
		} 
	}	
}, 2 );

function getCountryPcodeFun(){
$pcodes = [
	'44' => 'UK (+44)',
	'1' => 'USA (+1)',
	'213' => 'Algeria (+213)',
	'376' => 'Andorra (+376)',
	'244' => 'Angola (+244)',
	'1264' => 'Anguilla (+1264)',
	'1268' => 'Antigua & Barbuda (+1268)',
	'54' => 'Argentina (+54)',
	'374' => 'Armenia (+374)',
	'297' => 'Aruba (+297)',
	'61' => 'Australia (+61)',
	'43' => 'Austria (+43)',
	'994' => 'Azerbaijan (+994)',
	'1242' => 'Bahamas (+1242)',
	'973' => 'Bahrain (+973)',
	'880' => 'Bangladesh (+880)',
	'1246' => 'Barbados (+1246)',
	'375' => 'Belarus (+375)',
	'32' => 'Belgium (+32)',
	'501' => 'Belize (+501)',
	'229' => 'Benin (+229)',
	'1441' => 'Bermuda (+1441)',
	'975' => 'Bhutan (+975)',
	'591' => 'Bolivia (+591)',
	'387' => 'Bosnia Herzegovina (+387)',
	'267' => 'Botswana (+267)',
	'55' => 'Brazil (+55)',
	'673' => 'Brunei (+673)',
	'359' => 'Bulgaria (+359)',
	'226' => 'Burkina Faso (+226)',
	'257' => 'Burundi (+257)',
	'855' => 'Cambodia (+855)',
	'237' => 'Cameroon (+237)',
	'1' => 'Canada (+1)',
	'238' => 'Cape Verde Islands (+238)',
	'1345' => 'Cayman Islands (+1345)',
	'236' => 'Central African Republic (+236)',
	'56' => 'Chile (+56)',
	'86' => 'China (+86)',
	'57' => 'Colombia (+57)',
	'269' => 'Comoros (+269)',
	'242' => 'Congo (+242)',
	'682' => 'Cook Islands (+682)',
	'506' => 'Costa Rica (+506)',
	'385' => 'Croatia (+385)',
	'53' => 'Cuba (+53)',
	'90392' => 'Cyprus North (+90392)',
	'357' => 'Cyprus South (+357)',
	'42' => 'Czech Republic (+42)',
	'45' => 'Denmark (+45)',
	'253' => 'Djibouti (+253)',
	'1809' => 'Dominica (+1809)',
	'1809' => 'Dominican Republic (+1809)',
	'593' => 'Ecuador (+593)',
	'20' => 'Egypt (+20)',
	'503' => 'El Salvador (+503)',
	'240' => 'Equatorial Guinea (+240)',
	'291' => 'Eritrea (+291)',
	'372' => 'Estonia (+372)',
	'251' => 'Ethiopia (+251)',
	'500' => 'Falkland Islands (+500)',
	'298' => 'Faroe Islands (+298)',
	'679' => 'Fiji (+679)',
	'358' => 'Finland (+358)',
	'33' => 'France (+33)',
	'594' => 'French Guiana (+594)',
	'689' => 'French Polynesia (+689)',
	'241' => 'Gabon (+241)',
	'220' => 'Gambia (+220)',
	'7880' => 'Georgia (+7880)',
	'49' => 'Germany (+49)',
	'233' => 'Ghana (+233)',
	'350' => 'Gibraltar (+350)',
	'30' => 'Greece (+30)',
	'299' => 'Greenland (+299)',
	'1473' => 'Grenada (+1473)',
	'590' => 'Guadeloupe (+590)',
	'671' => 'Guam (+671)',
	'502' => 'Guatemala (+502)',
	'224' => 'Guinea (+224)',
	'245' => 'Guinea - Bissau (+245)',
	'592' => 'Guyana (+592)',
	'509' => 'Haiti (+509)',
	'504' => 'Honduras (+504)',
	'852' => 'Hong Kong (+852)',
	'36' => 'Hungary (+36)',
	'354' => 'Iceland (+354)',
	'91' => 'India (+91)',
	'62' => 'Indonesia (+62)',
	'98' => 'Iran (+98)',
	'964' => 'Iraq (+964)',
	'353' => 'Ireland (+353)',
	'972' => 'Israel (+972)',
	'39' => 'Italy (+39)',
	'1876' => 'Jamaica (+1876)',
	'81' => 'Japan (+81)',
	'962' => 'Jordan (+962)',
	'7' => 'Kazakhstan (+7)',
	'254' => 'Kenya (+254)',
	'686' => 'Kiribati (+686)',
	'850' => 'Korea North (+850)',
	'82' => 'Korea South (+82)',
	'965' => 'Kuwait (+965)',
	'996' => 'Kyrgyzstan (+996)',
	'856' => 'Laos (+856)',
	'371' => 'Latvia (+371)',
	'961' => 'Lebanon (+961)',
	'266' => 'Lesotho (+266)',
	'231' => 'Liberia (+231)',
	'218' => 'Libya (+218)',
	'417' => 'Liechtenstein (+417)',
	'370' => 'Lithuania (+370)',
	'352' => 'Luxembourg (+352)',
	'853' => 'Macao (+853)',
	'389' => 'Macedonia (+389)',
	'261' => 'Madagascar (+261)',
	'265' => 'Malawi (+265)',
	'60' => 'Malaysia (+60)',
	'960' => 'Maldives (+960)',
	'223' => 'Mali (+223)',
	'356' => 'Malta (+356)',
	'692' => 'Marshall Islands (+692)',
	'596' => 'Martinique (+596)',
	'222' => 'Mauritania (+222)',
	'269' => 'Mayotte (+269)',
	'52' => 'Mexico (+52)',
	'691' => 'Micronesia (+691)',
	'373' => 'Moldova (+373)',
	'377' => 'Monaco (+377)',
	'976' => 'Mongolia (+976)',
	'1664' => 'Montserrat (+1664)',
	'212' => 'Morocco (+212)',
	'258' => 'Mozambique (+258)',
	'95' => 'Myanmar (+95)',
	'264' => 'Namibia (+264)',
	'674' => 'Nauru (+674)',
	'977' => 'Nepal (+977)',
	'31' => 'Netherlands (+31)',
	'687' => 'New Caledonia (+687)',
	'64' => 'New Zealand (+64)',
	'505' => 'Nicaragua (+505)',
	'227' => 'Niger (+227)',
	'234' => 'Nigeria (+234)',
	'683' => 'Niue (+683)',
	'672' => 'Norfolk Islands (+672)',
	'670' => 'Northern Marianas (+670)',
	'47' => 'Norway (+47)',
	'968' => 'Oman (+968)',
	'680' => 'Palau (+680)',
	'507' => 'Panama (+507)',
	'675' => 'Papua New Guinea (+675)',
	'595' => 'Paraguay (+595)',
	'51' => 'Peru (+51)',
	'63' => 'Philippines (+63)',
	'48' => 'Poland (+48)',
	'351' => 'Portugal (+351)',
	'1787' => 'Puerto Rico (+1787)',
	'974' => 'Qatar (+974)',
	'262' => 'Reunion (+262)',
	'40' => 'Romania (+40)',
	'7' => 'Russia (+7)',
	'250' => 'Rwanda (+250)',
	'378' => 'San Marino (+378)',
	'239' => 'Sao Tome & Principe (+239)',
	'966' => 'Saudi Arabia (+966)',
	'221' => 'Senegal (+221)',
	'381' => 'Serbia (+381)',
	'248' => 'Seychelles (+248)',
	'232' => 'Sierra Leone (+232)',
	'65' => 'Singapore (+65)',
	'421' => 'Slovak Republic (+421)',
	'386' => 'Slovenia (+386)',
	'677' => 'Solomon Islands (+677)',
	'252' => 'Somalia (+252)',
	'27' => 'South Africa (+27)',
	'34' => 'Spain (+34)',
	'94' => 'Sri Lanka (+94)',
	'290' => 'St. Helena (+290)',
	'1869' => 'St. Kitts (+1869)',
	'1758' => 'St. Lucia (+1758)',
	'249' => 'Sudan (+249)',
	'597' => 'Suriname (+597)',
	'268' => 'Swaziland (+268)',
	'46' => 'Sweden (+46)',
	'41' => 'Switzerland (+41)',
	'963' => 'Syria (+963)',
	'886' => 'Taiwan (+886)',
	'7' => 'Tajikstan (+7)',
	'66' => 'Thailand (+66)',
	'228' => 'Togo (+228)',
	'676' => 'Tonga (+676)',
	'1868' => 'Trinidad & Tobago (+1868)',
	'216' => 'Tunisia (+216)',
	'90' => 'Turkey (+90)',
	'7' => 'Turkmenistan (+7)',
	'993' => 'Turkmenistan (+993)',
	'1649' => 'Turks & Caicos Islands (+1649)',
	'688' => 'Tuvalu (+688)',
	'256' => 'Uganda (+256)',
	'380' => 'Ukraine (+380)',
	'971' => 'United Arab Emirates (+971)',
	'598' => 'Uruguay (+598)',
	'7' => 'Uzbekistan (+7)',
	'678' => 'Vanuatu (+678)',
	'379' => 'Vatican City (+379)',
	'58' => 'Venezuela (+58)',
	'84' => 'Vietnam (+84)',
	'84' => 'Virgin Islands - British (+1284)',
	'84' => 'Virgin Islands - US (+1340)',
	'681' => 'Wallis & Futuna (+681)',
	'969' => 'Yemen (North)(+969)',
	'967' => 'Yemen (South)(+967)',
	'260' => 'Zambia (+260)',
	'263' => 'Zimbabwe (+263)',
];
return $pcodes;
}

add_filter( 'body_class', function( $classes ){
	global $post;
    if( issglFldForm() === true ){
		$classes[] 	= 'free-tiral-ctemplate';
	}
	if( is_page_template( 'page-templates/tpl-version5.0.php' ) ){
		$classes[] 	= 'free-tiral-ctemplate';
	}
	if( is_page_template( ['page-templates/tpl-thanks.php', 'page-templates/tpl-calendly.php'] ) ){
		$classes[] 	= 'thankyou';
	}
	if( is_page_template( ['page-templates/tpl-version5.1.php'] ) ){
		$localGeo 	= wsGetGEOInfo();
		if( $localGeo == "geo-international" ){
			$classes[] 	= 'nr-phone';
		}
		$classes[] 	= $localGeo;
	}

	if( !is_page_template( ['page-templates/tpl-version5.1.php'] ) ){
		$ranMeta = get_post_meta( $post->ID, 'opt-pfld', true );
		if( $ranMeta == "yes" ){
			$classes[] 	= 'nr-phone';
		}
	}

	if( is_page_template(['page-templates/tpl-version6.0.php']) && (sixTwoTpl() === true) ){
		$classes[] 	= 'employee-monitoring-page';		
	}
	
	$hasOfferElm = get_post_meta( $post->ID, 'offer-strip', true );
	if( $hasOfferElm == "yes" ){
		$classes[] 	= 'clock-stripe';
	}

	return $classes;
});

function getFullPageURL() {
  global $wp;
  return add_query_arg( $_SERVER['QUERY_STRING'], '', home_url( $wp->request ) );
}

add_action( 'init', function(){
	session_start();
	global $ws_utm;
	//?utm_source=googleads&utm_medium=search&utm_campaign=WS-Employee_Monitoring-India
	if( isset( $_GET['utm_source'] ) && !empty( $_GET['utm_source'] ) ){
		unset( $_SESSION['ws_qstring'] );
		$parseUrl = [];
		parse_str($_SERVER['QUERY_STRING'], $parseUrl);
		$_SESSION['ws_qstring'] = $parseUrl;
	}
	$ws_utm = ( isset( $_SESSION['ws_qstring'] ) )	? $_SESSION['ws_qstring'] : '';
});



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

function wsVarCheck( $array, $key ){
	return ( isset($array[$key]) && !empty($array[$key]) ) ? $array[$key] : '';
}


function ws_globalCountryListArray( $dcode ){
    $country_list = array(
        array("name" => "Afghanistan","code" => "AF","phone" => 93),
        array("name" => "Aland Islands","code" => "AX","phone" => 358),
        array("name" => "Albania","code" => "AL","phone" => 355),
        array("name" => "Algeria","code" => "DZ","phone" => 213),
        array("name" => "American Samoa","code" => "AS","phone" => 1684),
        array("name" => "Andorra","code" => "AD","phone" => 376),
        array("name" => "Angola","code" => "AO","phone" => 244),
        array("name" => "Anguilla","code" => "AI","phone" => 1264),
        array("name" => "Antarctica","code" => "AQ","phone" => 672),
        array("name" => "Antigua and Barbuda","code" => "AG","phone" => 1268),
        array("name" => "Argentina","code" => "AR","phone" => 54),
        array("name" => "Armenia","code" => "AM","phone" => 374),
        array("name" => "Aruba","code" => "AW","phone" => 297),
        array("name" => "Australia","code" => "AU","phone" => 61),
        array("name" => "Austria","code" => "AT","phone" => 43),
        array("name" => "Azerbaijan","code" => "AZ","phone" => 994),
        array("name" => "Bahamas","code" => "BS","phone" => 1242),
        array("name" => "Bahrain","code" => "BH","phone" => 973),
        array("name" => "Bangladesh","code" => "BD","phone" => 880),
        array("name" => "Barbados","code" => "BB","phone" => 1246),
        array("name" => "Belarus","code" => "BY","phone" => 375),
        array("name" => "Belgium","code" => "BE","phone" => 32),
        array("name" => "Belize","code" => "BZ","phone" => 501),
        array("name" => "Benin","code" => "BJ","phone" => 229),
        array("name" => "Bermuda","code" => "BM","phone" => 1441),
        array("name" => "Bhutan","code" => "BT","phone" => 975),
        array("name" => "Bolivia","code" => "BO","phone" => 591),
        array("name" => "Bonaire, Sint Eustatius and Saba","code" => "BQ","phone" => 599),
        array("name" => "Bosnia and Herzegovina","code" => "BA","phone" => 387),
        array("name" => "Botswana","code" => "BW","phone" => 267),
        array("name" => "Bouvet Island","code" => "BV","phone" => 55),
        array("name" => "Brazil","code" => "BR","phone" => 55),
        array("name" => "British Indian Ocean Territory","code" => "IO","phone" => 246),
        array("name" => "Brunei Darussalam","code" => "BN","phone" => 673),
        array("name" => "Bulgaria","code" => "BG","phone" => 359),
        array("name" => "Burkina Faso","code" => "BF","phone" => 226),
        array("name" => "Burundi","code" => "BI","phone" => 257),
        array("name" => "Cambodia","code" => "KH","phone" => 855),
        array("name" => "Cameroon","code" => "CM","phone" => 237),
        array("name" => "Canada","code" => "CA","phone" => 1),
        array("name" => "Cape Verde","code" => "CV","phone" => 238),
        array("name" => "Cayman Islands","code" => "KY","phone" => 1345),
        array("name" => "Central African Republic","code" => "CF","phone" => 236),
        array("name" => "Chad","code" => "TD","phone" => 235),
        array("name" => "Chile","code" => "CL","phone" => 56),
        array("name" => "China","code" => "CN","phone" => 86),
        array("name" => "Christmas Island","code" => "CX","phone" => 61),
        array("name" => "Cocos (Keeling) Islands","code" => "CC","phone" => 672),
        array("name" => "Colombia","code" => "CO","phone" => 57),
        array("name" => "Comoros","code" => "KM","phone" => 269),
        array("name" => "Congo","code" => "CG","phone" => 242),
        array("name" => "Congo, Democratic Republic of the Congo","code" => "CD","phone" => 242),
        array("name" => "Cook Islands","code" => "CK","phone" => 682),
        array("name" => "Costa Rica","code" => "CR","phone" => 506),
        array("name" => "Cote D'Ivoire","code" => "CI","phone" => 225),
        array("name" => "Croatia","code" => "HR","phone" => 385),
        array("name" => "Cuba","code" => "CU","phone" => 53),
        array("name" => "Curacao","code" => "CW","phone" => 599),
        array("name" => "Cyprus","code" => "CY","phone" => 357),
        array("name" => "Czech Republic","code" => "CZ","phone" => 420),
        array("name" => "Denmark","code" => "DK","phone" => 45),
        array("name" => "Djibouti","code" => "DJ","phone" => 253),
        array("name" => "Dominica","code" => "DM","phone" => 1767),
        array("name" => "Dominican Republic","code" => "DO","phone" => 1809),
        array("name" => "Ecuador","code" => "EC","phone" => 593),
        array("name" => "Egypt","code" => "EG","phone" => 20),
        array("name" => "El Salvador","code" => "SV","phone" => 503),
        array("name" => "Equatorial Guinea","code" => "GQ","phone" => 240),
        array("name" => "Eritrea","code" => "ER","phone" => 291),
        array("name" => "Estonia","code" => "EE","phone" => 372),
        array("name" => "Ethiopia","code" => "ET","phone" => 251),
        array("name" => "Falkland Islands (Malvinas)","code" => "FK","phone" => 500),
        array("name" => "Faroe Islands","code" => "FO","phone" => 298),
        array("name" => "Fiji","code" => "FJ","phone" => 679),
        array("name" => "Finland","code" => "FI","phone" => 358),
        array("name" => "France","code" => "FR","phone" => 33),
        array("name" => "French Guiana","code" => "GF","phone" => 594),
        array("name" => "French Polynesia","code" => "PF","phone" => 689),
        array("name" => "French Southern Territories","code" => "TF","phone" => 262),
        array("name" => "Gabon","code" => "GA","phone" => 241),
        array("name" => "Gambia","code" => "GM","phone" => 220),
        array("name" => "Georgia","code" => "GE","phone" => 995),
        array("name" => "Germany","code" => "DE","phone" => 49),
        array("name" => "Ghana","code" => "GH","phone" => 233),
        array("name" => "Gibraltar","code" => "GI","phone" => 350),
        array("name" => "Greece","code" => "GR","phone" => 30),
        array("name" => "Greenland","code" => "GL","phone" => 299),
        array("name" => "Grenada","code" => "GD","phone" => 1473),
        array("name" => "Guadeloupe","code" => "GP","phone" => 590),
        array("name" => "Guam","code" => "GU","phone" => 1671),
        array("name" => "Guatemala","code" => "GT","phone" => 502),
        array("name" => "Guernsey","code" => "GG","phone" => 44),
        array("name" => "Guinea","code" => "GN","phone" => 224),
        array("name" => "Guinea-Bissau","code" => "GW","phone" => 245),
        array("name" => "Guyana","code" => "GY","phone" => 592),
        array("name" => "Haiti","code" => "HT","phone" => 509),
        array("name" => "Heard Island and McDonald Islands","code" => "HM","phone" => 0),
        array("name" => "Holy See (Vatican City State)","code" => "VA","phone" => 39),
        array("name" => "Honduras","code" => "HN","phone" => 504),
        array("name" => "Hong Kong","code" => "HK","phone" => 852),
        array("name" => "Hungary","code" => "HU","phone" => 36),
        array("name" => "Iceland","code" => "IS","phone" => 354),
        array("name" => "India","code" => "IN","phone" => 91),
        array("name" => "Indonesia","code" => "ID","phone" => 62),
        array("name" => "Iran, Islamic Republic of","code" => "IR","phone" => 98),
        array("name" => "Iraq","code" => "IQ","phone" => 964),
        array("name" => "Ireland","code" => "IE","phone" => 353),
        array("name" => "Isle of Man","code" => "IM","phone" => 44),
        array("name" => "Israel","code" => "IL","phone" => 972),
        array("name" => "Italy","code" => "IT","phone" => 39),
        array("name" => "Jamaica","code" => "JM","phone" => 1876),
        array("name" => "Japan","code" => "JP","phone" => 81),
        array("name" => "Jersey","code" => "JE","phone" => 44),
        array("name" => "Jordan","code" => "JO","phone" => 962),
        array("name" => "Kazakhstan","code" => "KZ","phone" => 7),
        array("name" => "Kenya","code" => "KE","phone" => 254),
        array("name" => "Kiribati","code" => "KI","phone" => 686),
        array("name" => "Korea, Democratic People's Republic of","code" => "KP","phone" => 850),
        array("name" => "Korea, Republic of","code" => "KR","phone" => 82),
        array("name" => "Kosovo","code" => "XK","phone" => 383),
        array("name" => "Kuwait","code" => "KW","phone" => 965),
        array("name" => "Kyrgyzstan","code" => "KG","phone" => 996),
        array("name" => "Lao People's Democratic Republic","code" => "LA","phone" => 856),
        array("name" => "Latvia","code" => "LV","phone" => 371),
        array("name" => "Lebanon","code" => "LB","phone" => 961),
        array("name" => "Lesotho","code" => "LS","phone" => 266),
        array("name" => "Liberia","code" => "LR","phone" => 231),
        array("name" => "Libyan Arab Jamahiriya","code" => "LY","phone" => 218),
        array("name" => "Liechtenstein","code" => "LI","phone" => 423),
        array("name" => "Lithuania","code" => "LT","phone" => 370),
        array("name" => "Luxembourg","code" => "LU","phone" => 352),
        array("name" => "Macao","code" => "MO","phone" => 853),
        array("name" => "Macedonia, the Former Yugoslav Republic of","code" => "MK","phone" => 389),
        array("name" => "Madagascar","code" => "MG","phone" => 261),
        array("name" => "Malawi","code" => "MW","phone" => 265),
        array("name" => "Malaysia","code" => "MY","phone" => 60),
        array("name" => "Maldives","code" => "MV","phone" => 960),
        array("name" => "Mali","code" => "ML","phone" => 223),
        array("name" => "Malta","code" => "MT","phone" => 356),
        array("name" => "Marshall Islands","code" => "MH","phone" => 692),
        array("name" => "Martinique","code" => "MQ","phone" => 596),
        array("name" => "Mauritania","code" => "MR","phone" => 222),
        array("name" => "Mauritius","code" => "MU","phone" => 230),
        array("name" => "Mayotte","code" => "YT","phone" => 262),
        array("name" => "Mexico","code" => "MX","phone" => 52),
        array("name" => "Micronesia, Federated States of","code" => "FM","phone" => 691),
        array("name" => "Moldova, Republic of","code" => "MD","phone" => 373),
        array("name" => "Monaco","code" => "MC","phone" => 377),
        array("name" => "Mongolia","code" => "MN","phone" => 976),
        array("name" => "Montenegro","code" => "ME","phone" => 382),
        array("name" => "Montserrat","code" => "MS","phone" => 1664),
        array("name" => "Morocco","code" => "MA","phone" => 212),
        array("name" => "Mozambique","code" => "MZ","phone" => 258),
        array("name" => "Myanmar","code" => "MM","phone" => 95),
        array("name" => "Namibia","code" => "NA","phone" => 264),
        array("name" => "Nauru","code" => "NR","phone" => 674),
        array("name" => "Nepal","code" => "NP","phone" => 977),
        array("name" => "Netherlands","code" => "NL","phone" => 31),
        array("name" => "Netherlands Antilles","code" => "AN","phone" => 599),
        array("name" => "New Caledonia","code" => "NC","phone" => 687),
        array("name" => "New Zealand","code" => "NZ","phone" => 64),
        array("name" => "Nicaragua","code" => "NI","phone" => 505),
        array("name" => "Niger","code" => "NE","phone" => 227),
        array("name" => "Nigeria","code" => "NG","phone" => 234),
        array("name" => "Niue","code" => "NU","phone" => 683),
        array("name" => "Norfolk Island","code" => "NF","phone" => 672),
        array("name" => "Northern Mariana Islands","code" => "MP","phone" => 1670),
        array("name" => "Norway","code" => "NO","phone" => 47),
        array("name" => "Oman","code" => "OM","phone" => 968),
        array("name" => "Pakistan","code" => "PK","phone" => 92),
        array("name" => "Palau","code" => "PW","phone" => 680),
        array("name" => "Palestinian Territory, Occupied","code" => "PS","phone" => 970),
        array("name" => "Panama","code" => "PA","phone" => 507),
        array("name" => "Papua New Guinea","code" => "PG","phone" => 675),
        array("name" => "Paraguay","code" => "PY","phone" => 595),
        array("name" => "Peru","code" => "PE","phone" => 51),
        array("name" => "Philippines","code" => "PH","phone" => 63),
        array("name" => "Pitcairn","code" => "PN","phone" => 64),
        array("name" => "Poland","code" => "PL","phone" => 48),
        array("name" => "Portugal","code" => "PT","phone" => 351),
        array("name" => "Puerto Rico","code" => "PR","phone" => 1787),
        array("name" => "Qatar","code" => "QA","phone" => 974),
        array("name" => "Reunion","code" => "RE","phone" => 262),
        array("name" => "Romania","code" => "RO","phone" => 40),
        array("name" => "Russian Federation","code" => "RU","phone" => 7),
        array("name" => "Rwanda","code" => "RW","phone" => 250),
        array("name" => "Saint Barthelemy","code" => "BL","phone" => 590),
        array("name" => "Saint Helena","code" => "SH","phone" => 290),
        array("name" => "Saint Kitts and Nevis","code" => "KN","phone" => 1869),
        array("name" => "Saint Lucia","code" => "LC","phone" => 1758),
        array("name" => "Saint Martin","code" => "MF","phone" => 590),
        array("name" => "Saint Pierre and Miquelon","code" => "PM","phone" => 508),
        array("name" => "Saint Vincent and the Grenadines","code" => "VC","phone" => 1784),
        array("name" => "Samoa","code" => "WS","phone" => 684),
        array("name" => "San Marino","code" => "SM","phone" => 378),
        array("name" => "Sao Tome and Principe","code" => "ST","phone" => 239),
        array("name" => "Saudi Arabia","code" => "SA","phone" => 966),
        array("name" => "Senegal","code" => "SN","phone" => 221),
        array("name" => "Serbia","code" => "RS","phone" => 381),
        array("name" => "Serbia and Montenegro","code" => "CS","phone" => 381),
        array("name" => "Seychelles","code" => "SC","phone" => 248),
        array("name" => "Sierra Leone","code" => "SL","phone" => 232),
        array("name" => "Singapore","code" => "SG","phone" => 65),
        array("name" => "St Martin","code" => "SX","phone" => 721),
        array("name" => "Slovakia","code" => "SK","phone" => 421),
        array("name" => "Slovenia","code" => "SI","phone" => 386),
        array("name" => "Solomon Islands","code" => "SB","phone" => 677),
        array("name" => "Somalia","code" => "SO","phone" => 252),
        array("name" => "South Africa","code" => "ZA","phone" => 27),
        array("name" => "South Georgia and the South Sandwich Islands","code" => "GS","phone" => 500),
        array("name" => "South Sudan","code" => "SS","phone" => 211),
        array("name" => "Spain","code" => "ES","phone" => 34),
        array("name" => "Sri Lanka","code" => "LK","phone" => 94),
        array("name" => "Sudan","code" => "SD","phone" => 249),
        array("name" => "Suriname","code" => "SR","phone" => 597),
        array("name" => "Svalbard and Jan Mayen","code" => "SJ","phone" => 47),
        array("name" => "Swaziland","code" => "SZ","phone" => 268),
        array("name" => "Sweden","code" => "SE","phone" => 46),
        array("name" => "Switzerland","code" => "CH","phone" => 41),
        array("name" => "Syrian Arab Republic","code" => "SY","phone" => 963),
        array("name" => "Taiwan, Province of China","code" => "TW","phone" => 886),
        array("name" => "Tajikistan","code" => "TJ","phone" => 992),
        array("name" => "Tanzania, United Republic of","code" => "TZ","phone" => 255),
        array("name" => "Thailand","code" => "TH","phone" => 66),
        array("name" => "Timor-Leste","code" => "TL","phone" => 670),
        array("name" => "Togo","code" => "TG","phone" => 228),
        array("name" => "Tokelau","code" => "TK","phone" => 690),
        array("name" => "Tonga","code" => "TO","phone" => 676),
        array("name" => "Trinidad and Tobago","code" => "TT","phone" => 1868),
        array("name" => "Tunisia","code" => "TN","phone" => 216),
        array("name" => "Turkey","code" => "TR","phone" => 90),
        array("name" => "Turkmenistan","code" => "TM","phone" => 7370),
        array("name" => "Turks and Caicos Islands","code" => "TC","phone" => 1649),
        array("name" => "Tuvalu","code" => "TV","phone" => 688),
        array("name" => "Uganda","code" => "UG","phone" => 256),
        array("name" => "Ukraine","code" => "UA","phone" => 380),
        array("name" => "United Arab Emirates","code" => "AE","phone" => 971),
        array("name" => "United Kingdom","code" => "GB","phone" => 44),
        array("name" => "United States","code" => "US","phone" => 1),
        array("name" => "United States Minor Outlying Islands","code" => "UM","phone" => 1),
        array("name" => "Uruguay","code" => "UY","phone" => 598),
        array("name" => "Uzbekistan","code" => "UZ","phone" => 998),
        array("name" => "Vanuatu","code" => "VU","phone" => 678),
        array("name" => "Venezuela","code" => "VE","phone" => 58),
        array("name" => "Viet Nam","code" => "VN","phone" => 84),
        array("name" => "Virgin Islands, British","code" => "VG","phone" => 1284),
        array("name" => "Virgin Islands, U.s.","code" => "VI","phone" => 1340),
        array("name" => "Wallis and Futuna","code" => "WF","phone" => 681),
        array("name" => "Western Sahara","code" => "EH","phone" => 212),
        array("name" => "Yemen","code" => "YE","phone" => 967),
        array("name" => "Zambia","code" => "ZM","phone" => 260),
        array("name" => "Zimbabwe","code" => "ZW","phone" => 263)
    );
    $dialCode = str_replace("+", "", $dcode);
    $key = array_search( $dialCode, array_column($country_list, 'phone') );    
    if( $key ){
        return $country_list[$key]['name'];
    }else{
        return false;
    }    
}

/*
//unComment it for email debugging.
add_action('wp_mail_failed', 'log_mailer_errors', 10, 1);
function log_mailer_errors( $wp_error ){
	$wp_error->get_error_message(); die;  
}
*/

add_action( 'phpmailer_init', 'ws_smtp_phpemailer' );
function ws_smtp_phpemailer( $phpmailer ){
	$phpmailer->isSMTP();  
	/*
	//Working sendgrid SMTP, Works well on localhost
	$phpmailer->Host         	= "smtp.sendgrid.net"; // SMTP server
	$phpmailer->SMTPSecure   	= 'TLS';
	$phpmailer->Port         	= 587;
	$phpmailer->SMTPAuth     	= true;
	$phpmailer->Username     	= 'apikey';
	$phpmailer->Password     	= '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';
	$phpmailer->From    		= "no-reply@workstatus.io";
	$phpmailer->FromName 		= "Workstatus";
	*/
	/*
	$phpmailer->Host         	= "smtp.gmail.com";
	$phpmailer->SMTPSecure   	= 'TLS';
	$phpmailer->Port         	= 587;
	$phpmailer->SMTPAuth     	= true;
	$phpmailer->Username     	= 'workstatus.developer@gmail.com';
	$phpmailer->Password     	= 'qgczciaahacohokx';
	$phpmailer->From    		= "no-reply@workstatus.io";
	$phpmailer->FromName 		= "Workstatus";
	*/
	$phpmailer->Host         	= 'smtp.gmail.com';
	$phpmailer->SMTPSecure   	= 'ssl';
	$phpmailer->Port         	= 465;
	$phpmailer->SMTPAuth     	= true;
	$phpmailer->Username     	= 'do-not-reply@workstatus.io';
	$phpmailer->Password     	= 'qqmwjodicsevwikm';
	$phpmailer->From    		= "donotreply@workstatus.io";
	$phpmailer->FromName 		= "Workstatus";
}

add_action( 'wp_ajax_ws-dosignup', 'ws_dosignupcb' );
add_action( 'wp_ajax_nopriv_ws-dosignup', 'ws_dosignupcb' );
function ws_dosignupcb(){
	$data = (array) json_decode(file_get_contents("php://input"));
	if( !isset( $data['ws-email'] ) ) die("Go Boat");

	$params = '';
	$idx 	= 0;
	foreach( $data as $key => $value ){
		if( $idx === 0 ){
			$params .= '?'.$key.'='.$value;
		}else{
			$params .= '&'.$key.'='.$value;
		}	
		$idx++;
	}
	$appUrl = 'https://app.workstatus.io/auth/register/'.$params;

	$inputPhone 	= (isset($data['phone']) && !empty($data['phone'])) ? $data['cprefix'].$data['phone'] : '+919999999999';
	$hasPlan 		= (isset($data['plan-type']) && !empty($data['plan-type'])) ? $data['plan-type'] : false;
	$ws_dataCode 	= tempWsPhoneCode( $data['cprefix'] );
	$planStr 		= '';
	if( $hasPlan !== false ){
		$pln = explode("-", $hasPlan);
		if( $pln[1] == "free" ){
			$planStr = "&pid=137&type=".$pln[0];
		}else{
			$planStr = "&pid=139&type=".$pln[0];
		}
	}
	$user_country   = '';
	if( 
		isset( $data['cprefix'] ) && 
		!empty( $data['cprefix'] ) 
	){
	$user_country 	= ws_globalCountryListArray($data['cprefix']);	
	}

	$leadStatus = "Not Contacted";
	$emailTo 	= wsVarCheck($data, 'ws-email');
	$subject 	= "Workstatus - We've received your request";
	$body 		= "Dear Workstatus Enthusiast,<br><br>
	Greetings for the day!<br><br>
    Thank you for showing your interest in Workstatus! Our workforce management platform is designed to simplify and streamline the way you manage your team.<br><br>
    Whether you are a freelancer, small business owner, or large enterprise, Workstatus is designed to provide you with the flexibility and functionality you need to run your operations more efficiently.<br><br>
    If not done yet - <a href='https://calendly.com/workstatus/product-demo/'>Schedule a Demo</a> at your convenience!<br><br>
    Explore more with our <a href='https://support.workstatus.io/en/'>Product Guide</a>.<br><br>
    If you have any questions about how to get started or how to make the most of our platform, please don't hesitate to reach out to our support team. Please find the contact details below:<br><br>
    Name: Prachi Kala<br>
    Email: prachi@workstatus.io<br>
    Contact: +918595620285<br><br>

    We look forward to helping you achieve your goals and grow your business.<br><br>    
    Best Regards,<br>
    Team Workstatus";
	$headers = array('Content-Type: text/html; charset=UTF-8','From: Workstatus<no-reply@workstatus.io>');
	if( wp_mail( $emailTo, $subject, $body, $headers ) ){
	$leadStatus = "Attempted to Contact";
	}
	//print_r( $ws_dataCode );
	//print_r( $data ); die;

	define('lpCLIENT_ID','1000.ED227T6HEN6WAZRH1O48BU5VI96MVR');
	define('lpCLIENT_SECRET','c0fe2e3c254b4d2d7851267acf6b62bce66deead0d');
	define('lpREFRESH_TOKEN','1000.4a964cbd2983c2dd57da83472dd0e96d.c0c7a5b9cb27092b71e2d6687c140dda');

	$fname 			= 'FNameLP';
	$lname 			= 'LNameLP';
	$name  			= $fname." ".$lname;
	$email 			= wsVarCheck($data, 'ws-email');
	$company 		= '';
	$teamSize 		= '';
	$requirement    = 'Landing Page Only Email Data';


	$pageurl 		= wsVarCheck($data, 'pageurl');
	$tracking_ip 	= wsVarCheck($data, 'tracking_ip');
	$referalurl 	= wsVarCheck($data, 'referalurl');
	$phoneNo 		= $inputPhone;
	$varLeadSource 	= 'Website';

	$utm_src 		= wsVarCheck($data, 'utm_source');
	$utm_mdm 		= wsVarCheck($data, 'utm_medium');
	$utm_cmp 		= wsVarCheck($data, 'utm_campaign');

	$zohoDesc = "";
	if( $pageurl ){
	$zohoDesc .= "Url: ".$pageurl;
	}
	if( $utm_src ){
	$zohoDesc .= "utm_source: ".$utm_src;
	}
	if( $utm_mdm ){
	$zohoDesc .= "utm_medium: ".$utm_mdm;
	}
	if( $utm_cmp ){
	$zohoDesc .= "utm_campaign: ".$utm_cmp;
	}

	if(strstr($utm_src,"adwords"))  {
	    $lead_source = "Advertisement: Adwords";
	}else if(strstr($utm_src,"googleads"))  {
	    $lead_source = "Advertisement: Google";
	}else if(strstr($utm_src,"gglads"))  {
	    $lead_source = "Advertisement: Google";
	}else if(strstr($utm_src,"fbads"))  {
	    $lead_source = "Advertisement: Facebook";
	}else if(strstr($utm_src,"Bngads"))  {
	    $lead_source = "Advertisement: Bing";
	}else if(strstr($utm_src,"bngads"))  {
	    $lead_source = "Advertisement: Bing";
	}else if(strstr($utm_src,"Bingads"))  {
	    $lead_source = "Advertisement: Bing ";
	}else if(strstr($utm_src,"sendinblue"))  {
	    $lead_source = "Email Marketing: Targeted";
	}else if(strstr($utm_src,"email"))  {
	    $lead_source = "Email Marketing: Targeted";
	}else if(strstr($utm_src,"social"))  {
	    $lead_source = "Social Media: Organic";
	}else{
	    $lead_source = "Advertisement: Adroll";
	}

if( !empty( $referalurl ) && empty( $utm_src ) ){
    if( strstr($referalurl,"google") ){
    $lead_source = "SEO: Organic";    
    }
}
$lead_id 	= 0;
$owner_id 	= 681646179; //809367812
$postData 	= 'refresh_token='.lpREFRESH_TOKEN.'&client_id='.lpCLIENT_ID.'&client_secret='.lpCLIENT_SECRET.'&grant_type='.'refresh_token';
    $curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://accounts.zoho.com/oauth/v2/token",//US DC .com, IN DC .in
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => $postData
    ));
    $response = curl_exec($curl);
    $arrRefreshTokResponse =json_decode($response,true);
    $varAccessToken = $arrRefreshTokResponse['access_token'];
    $err = curl_error($curl);
    curl_close( $curl );
    if( !$err ){
        $curl = curl_init();        
        $sJSON = json_encode(array(
        'First_Name'    => $fname,
        'Last_Name'     => $lname,
        'Email'         => $email,
        'Company'       => $company,
        'Country_1'     => $user_country,
        'Phone'         => $phoneNo,
        'Lead_Source'   => $lead_source,
        'Lead_Status'   => $leadStatus,
        'Owner'         => $owner_id,
        'SQL'           => "Yes",
        'Description'   => $requirement,
        'IP_Address1'   => $tracking_ip,
        'IP_Address'    => $tracking_ip,
        'UTM_Source'    => $utm_src,
        'UTM_Medium'    => $utm_mdm,
        'UTM_Campaign'  => $utm_cmp,
        'Website_URL'   => $pageurl,
        'Ref_Url'       => $referalurl,
        'Company_Headcount' => $teamSize
        ));
        
        $sJSON = str_replace('{','[{',$sJSON);
        $sJSON = str_replace('}','}]',$sJSON);
        $postLeadData = '{"data":' . $sJSON . '}';

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://www.zohoapis.com/crm/v2/Leads",//US DC .com, IN DC .in
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => $postLeadData,
            CURLOPT_HTTPHEADER => array(
                "authorization: Zoho-oauthtoken $varAccessToken",
                "cache-control: no-cache",
                "content-type: application/json"
            ),
        ));
        $response 	= curl_exec($curl);        
        $err 		= curl_error($curl);
        curl_close($curl);
        if(!$err){
	        $response 	= json_decode( $response );
	        $lead_id 	= ( isset( $response->data[0] ) ) ? $response->data[0]->details->id : 0;

	        //$file       = fopen("/home/workforestc/calendly-log/temp-lp.txt","a");

            //$zlead      = PHP_EOL.$appUrl.$email.":".$postLeadData.print_r($response,1);
            //fwrite( $file, $zlead );
            //fclose( $file );
        }
    }
    echo $appUrl.'&lead_id='.$lead_id.'&lead_phone='.$inputPhone.'&ws-rowid='.$ws_dataCode.$planStr.'&dev-check'.$leadStatus;
	die;
}


function getPxlWebpURL( $mid ){
	$webpDir 	= WP_CONTENT_DIR.'/uploads-webpc/uploads/';
	$webpUrl 	= content_url().'/uploads-webpc/uploads/';
	$icMeta 	= get_post_meta( $mid, '_wp_attached_file', true );
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

function wsgetwebMediaSrc(array $marray, $title = "" ){
	if( !is_array( $marray ) ) return;

	$webpDir 	= WP_CONTENT_DIR.'/uploads-webpc/uploads/';
	$webpUrl 	= content_url().'/uploads-webpc/uploads/';
	
	$icMeta 	= get_post_meta( $marray['ID'], '_wp_attached_file', true );
	$webpimg 	= '';
	if( $icMeta ){
		$icwebpDir 	= $webpDir.$icMeta.".webp";
		if( file_exists( $icwebpDir ) ){
			$webpimg 	= $webpUrl.$icMeta.".webp";
		}	
	}
	return $webpimg;
}

function pxlGetPtag(array $marray, $title = "" ){
	if( !is_array( $marray ) ) return;

	return '<picture>
	'.getPxlWebpURL($marray['ID']).'
	<source type="'.$marray['mime_type'].'" srcset="'.$marray['url'].'">
	<img loading="lazy" src="'.$marray['url'].'" alt="'.$marray['title'].'" width="'.$marray['width'].'" height="'.$marray['height'].'">
	</picture>';
}

function wslGetUserIP(){
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

if( ! function_exists( 'get_current_page_url_cb' ) ) {
	function get_current_page_url_cb() {
	  global $wp;
	  return add_query_arg( $_SERVER['QUERY_STRING'], '', home_url( $wp->request ) );
	}
}

if( ! function_exists( 'ws_current_page_url' ) ) {
	function ws_current_page_url() {
	  echo get_current_page_url_cb();
	}
}

function wsGetGEOInfo(){
	try {
		$reqURL = 'https://www.workstatus.io/wp-json/ws-api/v1/getipinfo/?ip='.wpgetUserIP();
		$response = wp_remote_get( $reqURL, array(
		'headers' => array(
			'Accept' => 'application/json',
		)
		) );
		if( (!is_wp_error($response)) && (200 === wp_remote_retrieve_response_code($response)) ){
		$responseBody = json_decode($response['body']);
		if( json_last_error() === JSON_ERROR_NONE ) {
		return (isset($responseBody->country) && ($responseBody->country == "IN") ) ?  "geo-local" : "geo-international";	
		}
		}
	}
	catch( Exception $ex ) {
		return 'geo-local';
	}
}

add_action('init', function(){
	if( isset($_GET['ipcheck']) && ($_GET['ipcheck'] == "true") ){
		try {
		$reqURL = 'https://www.workstatus.io/wp-json/ws-api/v1/getipinfo/?ip='.wpgetUserIP();
		$response = wp_remote_get( $reqURL, array(
		'headers' => array(
			'Accept' => 'application/json',
		)
		) );
		if( (!is_wp_error($response)) && (200 === wp_remote_retrieve_response_code($response)) ){
		$responseBody = json_decode($response['body']);
		if( json_last_error() === JSON_ERROR_NONE ) {
		print_r($responseBody);
		}
		}
	}
	catch( Exception $ex ) {
		print_r($ex);
	}
		echo wsGetGEOInfo();
		die;
	}
});


function getLmOffierStrip(){
	global $post;
	$hasOfferElm = get_post_meta( $post->ID, 'offer-strip', true );
	if( $hasOfferElm === "yes" ){
	$text 		= get_field('st-text', $post->ID);	
	$textone 	= (isset($text['lt-text'])) ? $text['lt-text'] : 'Limited Time Offer';
	$texttwo 	= (isset($text['cc-text'])) ? $text['cc-text'] : 'Get 30% Off! Use Code';
	$coupon 	= (isset($text['code'])) ? $text['code'] : 'WELCOME30';
	$lText 		= (isset($text['ch-text'])) ? $text['ch-text'] : 'at CHECKOUT or TAKE A DEMO';
	return '<div class="top-stripe">
      <div class="container">
        '.$textone.'  
        <div class="timer"><img src="'.get_bloginfo('template_url').'/assets/images/clock.svg" alt="clock" 
        width="20" height="20"> 
        <span class="tm">00</span>:<span class="tm" id="of-min">45</span>:<span class="tm" id="of-sec">00</span>
        </div>
        '.$texttwo.' <span class="bgbl">'.$coupon.'</span> <span class="no-f">'.$lText.'</span>
      </div>
    </div>';	
	}else{
		return false;
	}
	
}
<?php
if( ! defined( '_S_VERSION' ) ){
    if( _pro_env == "dev" ){
    define( '_S_VERSION', time() );    
    }else{
    define( '_S_VERSION', '17.01.25' );    
    }
}

add_filter('upload_mimes', function($mime_types){
    $mime_types = [];
    $mime_types['webp'] = 'image/webp';
    $mime_types['pdf'] = 'application/pdf';
    return $mime_types;
});

/*
add_filter( 'wp_authenticate_user', function( $user ){
    if(is_wp_error($user)){return $user;}
    if( is_object( $user ) && isset( $user->ID ) && ($user->user_email !== "nitin.baluni@mail.vinove.com") ){
        return new WP_Error( 'locked', 'Your account is locked!' );
    }else{
        return $user;
    }
});
add_action( 'init', function(){
    if (is_admin() && is_user_logged_in()) {
        $current_user = wp_get_current_user();
        if ($current_user->user_email !== "nitin.baluni@mail.vinove.com") {
            wp_die('Your account is locked!');
        }
    }
});
*/

// add_filter('upload_mimes', function($mime_types){
//     $mime_types = [];
//     $mime_types['webp'] = 'image/webp';
//     $mime_types['pdf'] = 'application/pdf';
//     return $mime_types;
// });

if( isset($_SERVER['HTTP_HOST']) && ( $_SERVER['HTTP_HOST']  !== "localhost" ) ){
    require_once '/home/workstatus-io/public_html/envloader.php';
    loadEnv();
    add_action( 'phpmailer_init', 'ws_smtp_phpemailer' );
    function ws_smtp_phpemailer( $phpmailer ){
        $phpmailer->isSMTP();
        $phpmailer->Host         = getenv('SMTP_HOST');
        $phpmailer->SMTPSecure   = getenv('SMTP_SECURE');
        $phpmailer->Port         = getenv('SMTP_PORT');
        $phpmailer->SMTPAuth     = getenv('SMTP_AUTH');
        $phpmailer->Username     = getenv('SMTP_USERNAME');
        $phpmailer->Password     = getenv('SMTP_PASSWORD');
        $phpmailer->From          = "do-not-reply@workstatus.io";
        $phpmailer->FromName      = "Workstatus";
        
        $phpmailer->setFrom('do-not-reply@workstatus.io', 'Workstatus');
        $phpmailer->addReplyTo('do-not-reply@workstatus.io', 'Workstatus');
        
    }    
}

add_action('init', function(){
if( isset($_GET['mt']) && ($_GET['mt'] == "yes") ){
    $to = 'nitin.baluni@mail.vinove.com';
    $subject = 'The subject';
    $body = 'The email body content';
    $headers = array('Content-Type: text/html; charset=UTF-8');
    if( wp_mail( $to, $subject, $body, $headers ) ){
        die("mail sent");
    }else{
        die("error! mail sent");
    }
}
});


function ws_blog_setup() {
    load_theme_textdomain( 'ws-blog', get_template_directory() . '/languages' );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    register_nav_menus(
        array(
            'menu-1' => esc_html__( 'Primary', 'ws-blog' ),
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
            'ws_blog_custom_background_args',
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
    add_image_size('webp_thumb', 356, 215, true);
    show_admin_bar(false);
}
add_action( 'after_setup_theme', 'ws_blog_setup' );

function ws_site_url(){
    return 'https://www.workstatus.io';
}

function isBetaVersion(){
    if( isset( $_SERVER['HTTP_HOST'] ) && ( $_SERVER['HTTP_HOST'] == "localhost" ) ) return true;

    return ( isset( $_SERVER['PHP_SELF'] ) && (strpos( $_SERVER['PHP_SELF'], 'staging' ) !== false) )  ?  true : false;
}

add_action( 'wp_enqueue_scripts', 'workstatus_scripts', 100 );
function workstatus_scripts(){
    wp_dequeue_style( 'wp-block-library' );
    wp_dequeue_style( 'wp-block-library-theme' );
        
    wp_enqueue_style( 'wsblog', get_stylesheet_directory_uri() .'/style.css', array(),_S_VERSION );
    wp_enqueue_script( 'blog-script', get_stylesheet_directory_uri() . '/js/script.js', array(), _S_VERSION, true);
    wp_localize_script( 'blog-script', 'wsObj', 
        array(
        'tpl_url'       => get_bloginfo( 'template_url' ),
        'web_url'       => get_bloginfo( 'url' ),
        'admin_ajax'    => admin_url( 'admin-ajax.php' ),
        'ipinfo'        => 'https://www.workstatus.io/wp-json/ws-api/v1/ipinfo',
        'es_api_url'    => ( _pro_env == "dev" ) ? 'https://www.workstatus.io/blog/wp-json/es_apicb/v1/addsubs' : 'https://www.workstatus.io/blog/wp-json/es_apicb/v1/addsubs' 
        )
    );
    wp_enqueue_style('ws-header', get_stylesheet_directory_uri() .'/assets/css/ws-menu.css', array(), _S_VERSION);
    wp_enqueue_style('ws-home-style', get_stylesheet_directory_uri() . '/blog-home.css', array(), _S_VERSION);
    wp_enqueue_style('ws-epopup', get_stylesheet_directory_uri() .'/assets/css/ebook.css', array(), _S_VERSION);
    wp_enqueue_style('ws-blogdetail', get_stylesheet_directory_uri() .'/assets/css/blog-detail.css', array(), _S_VERSION);  
    wp_enqueue_style('ws-footer', get_stylesheet_directory_uri() .'/assets/css/ws-footer.css',  array(), _S_VERSION); 
    wp_enqueue_style('ws-all-forms', get_stylesheet_directory_uri() .'/forms-style.css',  array(), _S_VERSION);

    
    if( is_author() ){
    wp_enqueue_style( 'author-archive', get_stylesheet_directory_uri().'/assets/css/author-style.css', array(), _S_VERSION );
    }

    
    wp_enqueue_script( 'su-validation', get_stylesheet_directory_uri() . '/js/signupform-validation.js', array(), _S_VERSION, true);
    wp_enqueue_script( 'ebook-handler', get_stylesheet_directory_uri() . '/js/ebook.js', array(), _S_VERSION, true);
}

add_filter( 'style_loader_tag',  'ws_preload_filter', 10, 2 );
function ws_preload_filter( $html, $handle ){
    $html = str_replace("rel='stylesheet'", "rel='preload stylesheet' as='style' onload=\"this.onload=null;this.rel='stylesheet'\"", $html);
    return $html;
}

function ws_blog_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'ws_blog_content_width', 640 );
}
add_action( 'after_setup_theme', 'ws_blog_content_width', 0 );

require get_template_directory() . '/inc/custom-header.php';
require get_template_directory() . '/inc/template-tags.php';
require get_template_directory() . '/inc/template-functions.php';
require get_template_directory() . '/inc/customizer.php';

if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

function workstatus_widgets_init(){
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

/* You can add your custom functions just below */
add_action('init', function(){
    global $wsloginlink, $wsreglink;
    $wsloginlink    = "https://app.workstatus.io/auth/login/";
    $wsreglink      = "https://app.workstatus.io/auth/register/";

    // $wsloginlink = $wsloginlink."?utm_source=".$_SESSION['_utmsource']."&utm_medium=".$_SESSION['_utmmedium']."&utm_campaign=".$_SESSION['_utmcampaign'];
    // $wsreglink = $wsreglink."?utm_source=".$_SESSION['_utmsource']."&utm_medium=".$_SESSION['_utmmedium']."&utm_campaign=".$_SESSION['_utmcampaign'];

    /*
    session_start();
    //?utm_source=news4&utm_medium=email&utm_campaign=spring-summer
    if( isset($_REQUEST['utm_source']) && !empty($_REQUEST['utm_source']) ){
        $utmSource      = (isset($_REQUEST['utm_source']) && !empty( $_REQUEST['utm_source'] )) ? $_REQUEST['utm_source'] : '';
        $utmMedium      = (isset($_REQUEST['utm_medium']) && !empty( $_REQUEST['utm_medium'] )) ? $_REQUEST['utm_medium'] : '';
        $utmCampaign    = (isset($_REQUEST['utm_campaign']) && !empty( $_REQUEST['utm_campaign'] )) ? $_REQUEST['utm_campaign'] : '';
        $_SESSION['_utmsource']     = $utmSource;
        $_SESSION['_utmmedium']     = $utmMedium;
        $_SESSION['_utmcampaign']   = $utmCampaign;
    }

    global $wsloginlink, $wsreglink;
    $wsloginlink    = "https://app.workstatus.io/auth/login/";
    $wsreglink      = "https://app.workstatus.io/auth/register/";
    if( isset($_SESSION['_utmsource']) ){
    $wsloginlink = $wsloginlink."?utm_source=".$_SESSION['_utmsource']."&utm_medium=".$_SESSION['_utmmedium']."&utm_campaign=".$_SESSION['_utmcampaign'];
    $wsreglink = $wsreglink."?utm_source=".$_SESSION['_utmsource']."&utm_medium=".$_SESSION['_utmmedium']."&utm_campaign=".$_SESSION['_utmcampaign'];
    }
    */
}, 1);

add_action( 'rest_api_init', function(){
    register_rest_route( 'bposts/v1', '/posts/', array(
        'methods' => 'GET',
        'callback' => 'getRequiredPosts',
    ));
});

function getRequiredPosts(){
    $loop = new WP_Query( 
        array(
            'post_type' => 'post', 
            'posts_per_page' => 3,
            'ignore_sticky_posts' => 1,
            'meta_query' => array( array( 'key' => '_thumbnail_id', 'compare' => 'EXISTS' ) )  
        ) 
    );
    $data = [];
    if( $loop->have_posts() ){
        while( $loop->have_posts() ) : $loop->the_post();
        global $post;
        $author_id = $post->post_author;
        $data[] = array(
            'thumbnail'     => get_the_post_thumbnail_url( get_the_ID() ),
            'title'         => get_the_title( get_the_ID() ),
            'permalink'     => get_permalink( get_the_ID() ),
            'comments'      => ( get_comments_number() > 1 ) ? get_comments_number() .' comments': get_comments_number() .' comment',
            'created_at'    => get_the_date(),
            'author'        => get_the_author_meta( 'display_name' , $author_id ),
            'author_image'  => get_the_author_meta( 'avatar' , $author_id ),
            'experpt'       => get_the_excerpt( get_the_ID() )
        );
        endwhile;
    }
    wp_send_json( $data );
    wp_reset_postdata();
}

add_action( 'init', 'wsCustomTaxonomyFun', 0 );
function wsCustomTaxonomyFun() {
  $labels_inds = array(
    'name' => _x( 'Industries', 'Industry' ),
    'singular_name' => _x( 'Industry', 'Industry' ),
    'search_items' =>  __( 'Search Industry' ),
    'all_items' => __( 'All Industries' ),
    'parent_item' => __( 'Parent Industry' ),
    'parent_item_colon' => __( 'Parent Industry:' ),
    'edit_item' => __( 'Edit Industry' ), 
    'update_item' => __( 'Update Industry' ),
    'add_new_item' => __( 'Add New Industry' ),
    'new_item_name' => __( 'New Industry Name' ),
    'menu_name' => __( 'Industries' ),
  );    
  register_taxonomy('industrie',array('post'), array(
    'hierarchical' => true,
    'labels' => $labels_inds,
    'show_ui' => true,
    'show_in_rest' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'industry' ),
  ));

  $labels_ft = array(
    'name' => _x( 'Features', 'Feature' ),
    'singular_name' => _x( 'Feature', 'Feature' ),
    'search_items' =>  __( 'Search Feature' ),
    'all_items' => __( 'All Features' ),
    'parent_item' => __( 'Parent Feature' ),
    'parent_item_colon' => __( 'Parent Feature:' ),
    'edit_item' => __( 'Edit Feature' ), 
    'update_item' => __( 'Update Feature' ),
    'add_new_item' => __( 'Add New Feature' ),
    'new_item_name' => __( 'New Feature Name' ),
    'menu_name' => __( 'Features' ),
  );    
  register_taxonomy('feature',array('post'), array(
    'hierarchical' => true,
    'labels' => $labels_ft,
    'show_ui' => true,
    'show_in_rest' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'feature' ),
  ));
}

add_action( 'wp_ajax_ws_tax_filter', 'ws_filter_cb' );
add_action( 'wp_ajax_nopriv_ws_tax_filter', 'ws_filter_cb' );
function ws_filter_cb(){
$feature    = $_REQUEST['feature'];
$industry   = $_REQUEST['industry'];

if( ($feature != 0) && ($industry != 0) ){
    $tax_array = array(
    'relation' => 'AND',
     array( 'taxonomy' => 'feature', 'field' => 'term_id', 'terms' => $feature ),
     array( 'taxonomy' => 'industrie', 'field' => 'term_id', 'terms' => $industry )
    );    
}else{
    if( $feature == 0 ){
        $tax_array = array( array( 'taxonomy' => 'industrie', 'field' => 'term_id', 'terms' => $industry ) );
    }else{
        $tax_array = array( array( 'taxonomy' => 'feature', 'field' => 'term_id', 'terms' => $feature ) );
    }
    
}

$args = array(
	'post_type'     => 'post',
    'post_status'   => 'publish',
    'tax_query'     => $tax_array
);
/*
echo '<pre>';
print_r( $args ); die;
*/
$query = new WP_Query( $args );
if( $query->have_posts() ){
while( $query->have_posts() ) : $query->the_post(); 
$thumb_url      = get_the_post_thumbnail_url(get_the_ID());
$author_name    = get_the_author();  
$views = (get_field('views_counter', get_the_ID()) ) ? get_field('views_counter', get_the_ID()) : 0;
?>
<article class="grid-3">
 
    <div class="blog-thumb">
      <a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1" data-wpel-link="internal" 
        rel="follow"><?php the_post_thumbnail('full'); ?></a>
    </div>

    <div class="blog-outer">

    <div class="blog-content">
    <div class="author-mid-row">
      <span class="auth-date"><?php the_time( get_option('date_format') ); ?></span>
      <span class="view-comment">
      <a href="#"><i class="postview"></i> <?php echo absint( $views ); ?></a>    
      </span>
    </div>
    <?php if( is_archive() ): ?>
    <h2 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php else: ?>
    <h1 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
    <?php endif; ?>  
 
  <div class="post-excerpt">
    <?php the_excerpt ();  ?>
    <a href="<?php the_permalink(); ?>" class="rdmore">Read More</a>
  </div>

    </div>

  <div class="category-row">
    <?php the_category(', '); ?>
  </div>

    </div>
</article>
<?php 
endwhile;
}else{
	echo "<h3>No POst Found</h3>";
}
wp_reset_postdata();
die;
}

//define('CLIENT_ID','1000.T83TEYWHZDWOQRL8JUXBD4XT8UWI5U');
//define('CLIENT_SECRET','74d994015f78e8efbebe00f3ce5bb00fe3f35a0c97');
//define('REFRESH_TOKEN','1000.a9b9e2c14490efa501b74a5bd12c8867.d029cc4c0e9f00477074b4c0963adefa');
function createZohoLeads($argArrData){
$fname = ( isset( $argArrData['fname'] ) && !empty( $argArrData['fname'] ) ) ? $argArrData['fname'] : 'WS Blog';
$lname = ( isset( $argArrData['lname'] ) && !empty( $argArrData['lname'] ) ) ? $argArrData['lname'] : 'Subscription';
$name  = $fname." ".$lname;
$email = ( isset( $argArrData['esfpx_email'] ) && !empty( $argArrData['esfpx_email'] ) ) ? $argArrData['esfpx_email'] : '';
$company = ( isset( $argArrData['company'] ) && !empty( $argArrData['company'] ) ) ? $argArrData['company'] : 'N/A';
$pcode = ( isset( $argArrData['countrycode'] ) && !empty( $argArrData['countrycode'] ) ) ? $argArrData['countrycode'] : 'N/A';
$phone = ( isset( $argArrData['phone'] ) && !empty( $argArrData['phone'] ) ) ? $argArrData['phone'] : '0000000000';
$teamSize = ( isset( $argArrData['team-size'] ) && !empty( $argArrData['team-size'] ) ) ? $argArrData['team-size'] : '';
$requirement    = ( isset( $_POST['requirement'] ) && !empty( $_POST['requirement'] ) ) ? $_POST['requirement'] : 'N/A';
$user_country   = (isset($_POST['user-country']) && !empty($_POST['user-country'])) ? $_POST['user-country'] : 'N/A';
$pageurl = ( isset( $argArrData['esfpx_es_email_page_url'] ) && !empty( $argArrData['esfpx_es_email_page_url'] ) ) ? $argArrData['esfpx_es_email_page_url'] : '';
$tracking_ip = ( isset( $argArrData['tracking_ip'] ) && !empty( $argArrData['tracking_ip'] ) ) ? $argArrData['tracking_ip'] : '';
$referalurl = ( isset( $argArrData['referalurl'] ) && !empty( $argArrData['referalurl'] ) ) ? $argArrData['referalurl'] : '';
$phoneNo = '+'.$pcode.$phone;
$phoneNo = str_replace("+","",$phoneNo);
$varLeadSource = 'Blog';

$utm_src = (isset( $argArrData['utm_source']) && !empty( $argArrData['utm_source'] ) ) ? $argArrData['utm_source'] : '';
$utm_mdm = (isset( $argArrData['utm_medium']) && !empty( $argArrData['utm_medium'] ) ) ? $argArrData['utm_medium'] : '';
$utm_cmp = (isset( $argArrData['utm_campaign']) && !empty( $argArrData['utm_campaign'] ) ) ? $argArrData['utm_campaign'] : '';

$zohoDesc = "";
$lead_source = "Blog";
if( !empty( $referalurl ) && empty( $utm_src ) ){
    if( strstr($referalurl,"google") ){
    $lead_source = "SEO: Organic";    
    }
}

$owner_id = 767861418;
$postData = 'refresh_token='.REFRESH_TOKEN.'&client_id='.CLIENT_ID.'&client_secret='.CLIENT_SECRET.'&grant_type='.'refresh_token';
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
    //print_r( $arrRefreshTokResponse ); die;
    $varAccessToken = $arrRefreshTokResponse['access_token'];
    $err = curl_error($curl);
    curl_close( $curl );
    if ($err) {
    } else {
        $curl = curl_init();
        $sJSON = json_encode(array(
        'First_Name'    => $fname,
        'Last_Name'     => $lname,
        'Email'         => $email,
        'Company'       => $company,
        'Country_1'     => $user_country,
        'Phone'         => '+91 9999999990',
        'Lead_Source'   => $lead_source,
        'Lead_Status'   => "Not Contacted",
        'Owner'         => $owner_id,
        'Description'   => $zohoDesc,
        'IP_Address1'   => $tracking_ip,
        'IP_Address'    => $tracking_ip,
        'UTM_Source'    => $utm_src,
        'Description'   => $requirement,
        'UTM_Medium'    => $utm_mdm,
        'UTM_Campaign'  => $utm_cmp,
        'Website_URL'   => $pageurl,
        'Ref_Url'       => $referalurl,
        'Company_Headcount' => $teamSize
        ));
        
        $sJSON          = str_replace('{','[{',$sJSON);
        $sJSON          = str_replace('}','}]',$sJSON);
        $postLeadData   = '{"data":' . $sJSON . '}';
        //echo $postLeadData; die;
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
        $response = curl_exec($curl);
        $response = json_decode( $response );
        $err = curl_error($curl);
        curl_close($curl);
        if($err){
            echo "cURL Error #:" . $err;
        }
    }
}
// add_action('ig_es_contact_subscribe', function($data){
//    createZohoLeads($_POST);
// });

function ws_featues_cb( $atts ) {
	$a = shortcode_atts( array('title' => 'Taxonomy Title','tax' => 'Taxonomy Name'), $atts );
	$terms = get_terms(['taxonomy' => $a['tax'],'hide_empty' => false]);
	$data = '';
	if( $terms ){
		$data .= '<h3>'.$a['title'].'</h3>';
		$data .= '<ul class="wp-block-categories-list wp-block-categories">';
		foreach ($terms as $term){
		$data .= '<li class="cat-item cat-item-"><a href="'.get_term_link( $term->slug, $a['tax'] ).'">'.$term->name.'</a></li>';		
		}
		$data .= '</ul><div class="clear"></div>';
	}
	return $data;
}
add_shortcode( 'wsct', 'ws_featues_cb' );

add_shortcode( 'inbanner_cta', function( $atts ){
    global $RegLink;
    $atts = shortcode_atts([
    'title'      => 'Want to save time & money?', 
    'body'       => 'Automate Workforce Management'
    ], $atts, 'bartag' );
    $hasLogin = getCTAstatus();
    $FreeTrialCta = '<a href="javascript:void(0);" data-href="'.$RegLink.'" class="bkdemo" 
    onclick="return get_ws_signupform(this);">'.$hasLogin['cta_text'].'</a>';

    $div = '<div class="upd-cusbanner sc-col">
    <p class="heading">'.esc_html($atts['title']).'</p>
    <div class="cta-title">'.esc_html($atts['body']).'</div>    
    <div class="ctasec">
    <a class="primary_btn1" onclick="call_demows();" href="javascript:void(0);">Book a Demo</a>
    '.$FreeTrialCta.'    
    </div>
    </div>';
    return $div;
});

/*add_filter('comment_form_default_fields', 'ws_website_remove');
function ws_website_remove( $fields ){
if(isset($fields['url']))
unset($fields['url']);
return $fields;
}*/

add_shortcode( 'ws_banner', 'wsBannerShortcode_cb' );
function wsBannerShortcode_cb( $atts ){
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
    $FreeTrialCta = '<a href="javascript:void(0);" class="bkdemo" onclick="return get_ws_signupform('.$hasLogin['pid'].', \''.$hasLogin['type'].'\');">'.$hasLogin['cta_text'].'</a>';
    }
    $div = '<div class="upd-cusbanner sc-col">
    <div class="cta-title">'.esc_html($atts['title']).'</div>
    <p class="heading">'.esc_html($atts['body']).'</p>
    <div class="ctasec">
    <a class="primary_btn1" onclick="call_demows();" href="javascript:void(0);">'.esc_html($atts['cta2_text']).'</a>
    '.$FreeTrialCta.'    
    </div>
    </div>';
    return $div;
}

add_shortcode( 'cta_block', 'ctaBlock_cb' );
function ctaBlock_cb( $atts ){
    $atts = shortcode_atts( array(
    'title'      => 'Want to save time & money?', 
    'cta2_text'  => 'Book a Demo'    
    ), $atts, 'bartag' );

    $FreeTrialCta = '';
    $hasLogin = getCTAstatus();
    if( $hasLogin !== false ){
    $FreeTrialCta = '<a href="javascript:void(0);" class="bkdemo" onclick="return get_ws_signupform('.$hasLogin['pid'].', \''.$hasLogin['type'].'\');">'.$hasLogin['cta_text'].'</a>';
    }
    $div = '<div class="upd-cusbanner sc-col">
    <div class="heading">'.esc_html($atts['title']).'</div>
    <div class="ctasec">
    <a class="primary_btn1" onclick="call_demows();" href="javascript:void(0);">'.esc_html($atts['cta2_text']).'</a>
    '.$FreeTrialCta.'    
    </div>
    </div>';
    return $div;
}

add_shortcode( 'ws_imgcta', 'ws_imgctaCB' );
function ws_imgctaCB( $atts ){
    $atts = shortcode_atts( array(
    'title' => 'Automatic Time Tracking', 
    'text'  => '',
    'ebook' => false, 
    'isrc'  => get_stylesheet_directory_uri().'/images/blog-ctaimage.png',    
    ), $atts, 'bartag' );

    $stext = '';
    if( isset( $atts['text'] ) && !empty( $atts['text'] ) ){
        $stext = '<p>'.$atts['text'].'</p>';
    }
    $FreeTrialCta = '';
    $hasLogin = getCTAstatus();
    if( $hasLogin !== false ){
    $FreeTrialCta = '<a href="javascript:void(0);" class="primary_btn1" onclick="return get_ws_signupform('.$hasLogin['pid'].', \''.$hasLogin['type'].'\');">'.$hasLogin['cta_text'].'</a>';
    }

    if( isset($atts['ebook']) && $atts['ebook'] == true ){
        $FreeTrialCta = '<a href="javascript:void(0);" class="primary_btn1" onclick="geteBook_popup()">Download Now</a>';
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

// Ebook Pdf Function
function Postpdf(){ 
global $post;
$haspostPdf     = get_post_meta( $post->ID, 'post_pdf', true );
$haspostPdflink = get_post_meta( $post->ID, 'vc-post-pdf', true );
?>
<div class="post-pdf-row" style="width:100%; text-align:right; padding:20px 0;">
<button class="pluginPdfTrigger">Download Post</button>
<?php if( $haspostPdf || $haspostPdflink){ ?>
<button class="trigger">Download E-guide</button>
<?php }else{ ?>
<button class="trigger" style="display:none"></button>
<?php } ?>
</div>
<?php
}

/*
Code to display related posts on single post.
*/
/*
add_filter( 'the_content', function( $content ){
  if ( is_singular() ){
        $data = '<div class="upd-cusbanner cmn-vbanner">
        <div class="cta-title">Finding it hard to maintain team efficiency in today’s dynamic work environment?</div>
        <p class="heading">Learn how to adapt and thrive with our actionable tips in this insightful video.</p>
        <div class="ctasec">
        <a class="bkdemo" onclick="showIntoVideo();" href="javascript:void(0);">Watch the Video</a>
        </div>
        </div>';
      global $post;
      $thisPost = $post->ID;
      $cats = wp_get_post_categories( $thisPost );
      if( $cats ){
      $args = array( 'category__in' => $cats, 'post__not_in' => array( $thisPost ), 'posts_per_page' => 3 );
      $loop = new WP_Query($args);
      
      if( $loop->have_posts() ) {
        $data .= '<div class="nv-tags-list"><span>Tags:</span>';
        $tags = get_the_tags($post->ID);
        if( $tags ){
        foreach ( $tags as $tag ) {
        $data .= '<a href="'.get_tag_link($tag->term_id).'">'.$tag->name.'</a>';
        }     
        }

        $data .= '</div>';
        $data .= '<div class="row"><div class="post-rel-sec">';
        $data .= '<h2>Related Stories</h2>';
        $data .= '<div class="row">';
        while($loop->have_posts()) : $loop->the_post();
          $pid = get_the_ID();
          $data .= '<div id="post-'.$pid.'" class="col-md-4 col-sm-12 col-12 reBox">
          <a href="'.esc_url(get_permalink($pid)).'" rel="bookmark follow noopener" title="" data-wpel-link="internal" target="_self">'.get_the_post_thumbnail($pid).'</a>
          <h5 class="blog-entry-title entry-title"><a href="'.esc_url(get_permalink($pid)).'" rel="bookmark follow noopener" data-wpel-link="internal" target="_self">'.get_the_title($pid).'</a></h5>
          </div>';
        endwhile;
        wp_reset_postdata();    
        $data .= '</div></div></div>';
      }
      return $content.$data;
      }
  }
  return $content;
});
*/

add_action('ws_sgl_condata', function(){
    $data = '<div class="upd-cusbanner cmn-vbanner">
    <p class="heading" style="z-index:9; position:relative;">Finding it Difficult to Manage Teams, Workflows, and Projects?</p>
    <div class="cta-title" style="margin-top:20px; line-height:1.5;">Workstatus can help you adapt and thrive in demanding, challenging, and dynamic work environments.</div>
    <div class="ctasec">
    <a class="bkdemo" onclick="showIntoVideo();" href="javascript:void(0);">Watch the Video</a>
    </div>
    </div>';
    if ( is_singular() ){        
      global $post;
      $thisPost = $post->ID;
      $cats = wp_get_post_categories( $thisPost );
      if( $cats ){
      $args = array( 'category__in' => $cats, 'post__not_in' => array( $thisPost ), 'posts_per_page' => 3, 
      'post_status' => 'publish' );
      $loop = new WP_Query($args);
      
      if( $loop->have_posts() ) {
        $data .= '<div class="nv-tags-list"><span>Tags:</span>';
        $tags = get_the_tags($post->ID);
        if( $tags ){
        foreach ( $tags as $tag ) {
        $data .= '<a href="'.get_tag_link($tag->term_id).'">'.$tag->name.'</a>';
        }     
        }

        $data .= '</div>';
        $data .= '<div class="row"><div class="post-rel-sec">';
        $data .= '<h2>Related Stories</h2>';
        $data .= '<div class="row">';
        while($loop->have_posts()) : $loop->the_post();
          $pid = get_the_ID();
          $data .= '<div id="post-'.$pid.'" class="col-md-4 col-sm-12 col-12 reBox">
          <a href="'.esc_url(get_permalink($pid)).'" rel="bookmark follow noopener" title="" data-wpel-link="internal" target="_self">'.get_the_post_thumbnail($pid).'</a>
          <h5 class="blog-entry-title entry-title"><a href="'.esc_url(get_permalink($pid)).'" rel="bookmark follow noopener" data-wpel-link="internal" target="_self">'.get_the_title($pid).'</a></h5>
          </div>';
        endwhile;
        wp_reset_postdata();    
        $data .= '</div></div></div>';
      }
      }
  }
  echo $data;
});

function wsBlogUserIP(){
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

add_action( 'rest_api_init', function(){
    register_rest_route( 'wsposts/v1', '/blogposts/(?P<slug1>[a-zA-Z0-9-]+)/(?P<slug2>[a-zA-Z0-9-]+)/(?P<slug3>[a-zA-Z0-9-]+)', array(
        'methods' => 'GET',
        'callback' => 'WPgetRequiredPosts',
    ));
});

function WPgetRequiredPosts( $data ){
   $tag1   	= $data->get_param( 'slug1' );
   $tag2  	= $data->get_param( 'slug2' );
   $tag3   	= $data->get_param( 'slug3' );
   
    $args = array( 'post_type' => 'post', 'posts_per_page' => -1, 
    'post_name__in' => [ $tag1, $tag2, $tag3], 'ignore_sticky_posts' => 1 );
    $loop = new WP_Query( $args );
    $data = [];
    if( $loop->have_posts() ){
        while( $loop->have_posts() ) : $loop->the_post();
        global $post;
        $author_id = $post->post_author;
        $categories = get_the_category($post->ID);//$post->ID

        foreach($categories as $category){
        $cat = $category->name;
         }
        $data[] = array(
            'thumbnail'     => get_the_post_thumbnail_url( get_the_ID() ),
            'thumbnail_m'   => get_the_post_thumbnail_url( get_the_ID(), 'epcl_single_related' ),
            'title'         => get_the_title( get_the_ID() ),
            'permalink'     => get_permalink( get_the_ID() )         
        );
        endwhile;
    }
    wp_send_json( $data );
    wp_reset_postdata();
}

add_action( 'rest_api_init', function(){
    register_rest_route( 'es_apicb/v1', 'addsubs', array(
        'methods'   => 'POST',
        'callback'  => 'es_addsubscriber_cb',
    ));
});

function es_addsubscriber_cb( \WP_REST_Request $req ){
    $data = $req->get_params();
    if( isset( $data['email'] ) && !empty( $data['email'] ) ){
        if(filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            if( class_exists('Email_Subscribers_Public') ){
                $eobj = new Email_Subscribers_Public('4.0', '4.0');
                $contact_data['first_name'] = $data['first_name'];
                $contact_data['last_name']  = $data['last_name'];
                $contact_data['email']      = $data['email'];
                $eobj->add_contact($contact_data, 2);
                wp_send_json(['success'=> true, 'message'=> 'Data added..', 'form_data'=> $data]);
            }
        }    
    }    
}
function getCTAstatus(){
    return array( 'show_this' => true, 'country' => 'default', 'cta_text' => "Start Free Trial", 'pid' => 42, 'type' => 'monthly' );
    
    $jsonDir = "/home/workstatus-io/public_html/data-json/results.json";
    if( isset( $_SERVER['HTTP_HOST'] ) && ($_SERVER['HTTP_HOST'] == "localhost") ){
        $jsonDir = "/var/www/html/workstatus/data-json/results.json"; 
    }
    try{
        $response = wp_remote_get( 'https://www.workstatus.io/betablog/wp-json/ws-api/v1/ipinfo', array(
            'headers' => array(
                'Accept' => 'application/json',
            )
        ) );
    if ( ( !is_wp_error($response)) && (200 === wp_remote_retrieve_response_code( $response ) ) ) {
        $isLocation = json_decode($response['body']);
        $conCode = (isset($isLocation->country) && !empty($isLocation->country)) ? $isLocation->country : 'DEFAULT';
        $jsonData   = file_get_contents( $jsonDir );        
        $jsonData   = json_decode( $jsonData );
        echo '<pre>';
        print_r($jsonData); die;
        foreach( $jsonData as $data ){
            if( $data->country_code == $conCode ){
                if( $data->button_type == 0 ){
                    return array( 'show_this' => true, 'country' => $conCode, 'cta_text' => "Start Free Trial", 
                    'pid' => $data->plan_id, 'type' => $data->type );
                }elseif( $data->button_type == 1 ){
                    return array( 'show_this' => true, 'country' => $conCode, 'cta_text' => "Free Signup", 
                    'pid' => $data->plan_id, 'type' => $data->type );
                }elseif( $data->button_type == 2 ){
                    return array( 'show_this' => false, 'country' => $conCode, 'cta_text' => "" );
                }
            }    
        }        
    }
    }catch( Exception $ex ) {
        return array( 'show_this' => true, 'cta_text' => "Start Free Trial", 'pid' => 1, 'type' => 'monthly' );
    }
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
    $data       = (array) json_decode( file_get_contents("php://input") );
    $userIP     = (isset($_SERVER['HTTP_HOST']) && ($_SERVER['HTTP_HOST'] == "localhost")) ? '47.31.154.223' : 
    wsBlogUserIP();
    
    $reqData    = array(
    'name'          => $data['uname'],
    'email'         => $data['uemail'],
    'password'      => $data['password'],
    'phone'         => (isset($data['phone']) && !empty($data['phone'])) ? $data['phone'] : '',
    'phone_country_code_id' => (isset($data['pcode']) && !empty($data['pcode'])) ? tempWsPhoneCode($data['pcode']) : '',
    'ip_address'    => $userIP,
    'mode_of_communication' => (isset($data['com-mode']) && !empty($data['com-mode'])) ? $data['com-mode'] : '',
    'pid'           => $data['pid'],
    'type'          => $data['type'],
    'source_url'    => $data['src_page'],
    'referral_token' => (isset($_COOKIE['ws_reftoken']) && !empty($_COOKIE['ws_reftoken'])) ? $_COOKIE['ws_reftoken'] : '',
    'utm_source'    => (isset($_COOKIE['utm_source']) && !empty($_COOKIE['utm_source'])) ? $_COOKIE['utm_source'] : '',
    'utm_medium'    => (isset($_COOKIE['utm_medium']) && !empty($_COOKIE['utm_medium'])) ? $_COOKIE['utm_medium'] : '',
    'utm_campaign'  => (isset($_COOKIE['utm_campaign']) && !empty($_COOKIE['utm_campaign'])) ? $_COOKIE['utm_campaign'] : ''
    );
    
    $apiCall = "https://api.staging.workstatus.io/api/v3/signUp";
    if( !isBetaVersion() ){
    $apiCall = "https://api.workstatus.io/api/v3/signUp";
    }
    
    $response   = wp_remote_post( $apiCall, array(
    'method'    => 'POST',
    'timeout'   => 60,
    'body'      => $reqData
    ));
    if( is_wp_error( $response ) ){
        $error_message = $response->get_error_message();
        echo "Something went wrong: $error_message";
    }else{
        $resData = json_decode($response['body']);
        if( $resData->response->code === 200 ){
            $parts = explode(" ", $data['uname']);    
            if(count($parts) > 1) {
                $lastn  = array_pop($parts);
                $firstn = implode(" ", $parts);
            }else{
                $firstn = $data['uname'];
                $lastn  = '';
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

function getUserIP(){
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

function getWSipinfo( $ipAddr ){ 
    global $wpdb;
    $ipdb = $wpdb;
    if( isset( $_SERVER['HTTP_HOST'] ) && ($_SERVER['HTTP_HOST'] != "localhost") ){
    $ipdb = new wpdb( 'workstatus-io-crm-prod-db-user', '7DsEMIA5ppFAAyK', 'workstatus-io-crm-prod-db', 'localhost' ); 
    }
    $hasIP  = $ipdb->get_row( "SELECT * FROM ipinfo_logs WHERE ip = '".$ipAddr."' ", OBJECT );
    if( $hasIP ){
        return json_decode($hasIP->data);
    }else{
        $isLocation     = file_get_contents( 'https://ipinfo.io/'.$ipAddr.'?token=58f4668796ee68' );
        $ws_userip      = json_decode( $isLocation ); 
        if( $ws_userip ){
            $ipdb->insert( 'ipinfo_logs', array( 'ip' => $ipAddr, 'data' => $isLocation, 'created_at' => date('Y-m-d H:i:s')));
            return $isLocation;
        }else{
            return false;    
        }       
    }
}

add_action( 'rest_api_init', function () {
    register_rest_route( 'ws-api/v1', '/ipinfo', array(
        'methods' => 'GET',
        'callback' => function(){
        $ipaddr = (isset( $_SERVER['HTTP_HOST'] ) && ($_SERVER['HTTP_HOST'] != "localhost")) ? getUserIP() : '61.247.235.03';
        $ipinfo = getWSipinfo( $ipaddr );
        wp_send_json( $ipinfo );
        }
    ));
});

add_filter('get_the_archive_title', function ($title) {
    if (is_category()) {
        $title = single_cat_title('', false);
    } elseif (is_tag()) {
        $title = single_tag_title('', false);
    } elseif (is_author()) {
        $title = '<span class="vcard">' . get_the_author() . '</span>';
    } elseif (is_tax()) { //for custom post types
        $title = sprintf(__('%1$s'), single_term_title('', false));
    } elseif (is_post_type_archive()) {
        $title = post_type_archive_title('', false);
    }
    return $title;
});

add_filter( 'wpseo_title', function($title){
    if(is_single()){
    $month = get_post_meta( get_the_ID(), 'wms-post', true );
    $inMonth = '';
    if( $month && ($month == "yes") ){
        $inMonth = " in ".date("F, Y");
        $title = $title.$inMonth;
    }
    }
    return $title;
}, 10, 1 );


add_filter( 'wpseo_robots', function( $robotsstr ){
    if( is_paged() ){
        return 'noindex,follow';
    }
    return $robotsstr;
});

function getMcAuthorThumb( $author_id ){
  $authThumbnail    = get_template_directory_uri().'/dev-images/author-profile.jpg';
  $authorThumbnail  = get_field( 'auth-thumb', 'user_'.$author_id );
  if( $authorThumbnail && isset( $authorThumbnail['url'] ) ){
    $authThumbnail = $authorThumbnail['url'];
  }else{  
    $user_avtar   = get_user_meta( $author_id, 'wp_user_avatars', true );
    if( $user_avtar ){
      $authThumbnail = isset( $user_avtar['full'] ) ? $user_avtar['full'] : 
      get_bloginfo('template_url').'/dev-images/author-profile.jpg';
    }
  }
  return $authThumbnail;
}

function getMcAutor( $post_id ){
$author_id  = get_post_field('post_author', $post_id);
$authorName = get_the_author_meta('display_name', $author_id);
return '<div class="auth-wrap">
  <div class="author-img">
  <img loading="lazy" src="'.getMcAuthorThumb($author_id).'" width="36" height="36" alt="'.$authorName.'">
  </div>
  <div class="entry-meta">by <a href="'.get_author_posts_url($author_id).'" title="Posts by '.$authorName.'">'.$authorName.'</a></div>
  </div>';
}


function getAuthorBlogCategories( $author_id ){
  $args       = array( 'author' => $author_id, 'posts_per_page' => -1 );
  $auth_posts = get_posts( $args );
  $authCats   = '';
  $cat_array  = [];

  if( $auth_posts ){
      foreach( $auth_posts as $bpost ){
          foreach(get_the_category($bpost->ID) as $cat){
              //if( $cat->term_id !== 1 ){
                  $cat_array[$cat->term_id] =  ['slug' => get_category_link( $cat->term_id ), 'cat' => $cat->name ];    
              //}                 
          }
      }
  }
  
  if( $cat_array ){
      foreach( $cat_array as $key => $value) {
      $authCats .= '<a href="'.$value['slug'].'">'.$value['cat'].'</a>';
      }
  }
  return $authCats;
}


/*Optoins Page Optoins Here*/
if( function_exists('acf_add_options_page') ){ 
    acf_add_options_page(array(
        'page_title'  => 'Theme General Settings',
        'menu_title'  => 'Blog Options',
        'menu_slug'   => 'theme-general-settings',
        'capability'  => 'edit_posts  ',
        'redirect'    => false
    ));

    acf_add_options_sub_page(array(
        'page_title'  => 'Common Settings',
        'menu_title'  => 'Common Settings',
        'parent_slug' => 'theme-general-settings'
    ));  
}


add_action( 'pre_get_posts', 'custom_post_archive_changes' );
function custom_post_archive_changes( $query ) {
    if ( is_home() && $query->is_main_query() ) {
        $stickies = get_option("sticky_posts");
        $query->set( 'post__not_in', $stickies );
    }
}

function bigBlockPost( $post_id ){
//$thumb = wp_get_attachment_url( get_post_thumbnail_id( $post_id ), 'single-post-thumbnail' );  
$postThumbID  = get_post_thumbnail_id( $post_id );  
$image_path   = wp_get_original_image_path($postThumbID);
if( file_exists( $image_path ) ){
  $thumb  = wp_get_attachment_url(get_post_thumbnail_id( $post_id ), 'medium');    
}else{
  $thumb  = get_bloginfo('template_url').'/dev-img/default-image.jpg';
}
return '<div class="blog-image">
    <a href="'.get_permalink($post_id).'"><img width="1024" height="462" src="'.$thumb.'" alt="pixel" loading="lazy"></a>
    </div>
    <div class="blog-content">
    <span class="category">'.getPostPrimeCategory($post_id).'</span>
    <div class="title two-line"><a href="'.get_permalink($post_id).'">'.get_the_title($post_id).'</a></div>
    '.getMcAutor($post_id).'
    </div>';
}

function smallBlockPost($post_id){
$postThumbID  = get_post_thumbnail_id( $post_id );  
$image_path   = wp_get_original_image_path($postThumbID);
if( file_exists( $image_path ) ){
  $thumb  = wp_get_attachment_url( get_post_thumbnail_id( $post_id ), 'medium' );    
}else{
  $thumb  = get_bloginfo('template_url').'/dev-img/default-image.jpg';
}


return '<div class="devs-col">
  <div class="blog-image">
  <a href="'.get_permalink($post_id).'" target="_blank">
    <picture><img src="'.$thumb.'" alt="pixel" loading="lazy"></picture>
    </a>
  </div>
  <div class="blog-content">
    <span class="category">'.getPostPrimeCategory($post_id).'</span>
    <div class="title three-line">
      <a href="'.get_permalink($post_id).'">'.get_the_title($post_id).'</a>
    </div>
    '.getMcAutor($post_id).'
  </div>
  </div>';
}

function getPostPrimeCategory( $postid ){
  $categories = get_the_category($postid);
  if( $categories ){
    return '<a href="'.esc_url(get_category_link($categories[0]->cat_ID)).'">'.$categories[0]->name.'</a>';
  }  
}

function pxlGetTopThreePosts($id, $taxType = 'tag' ){
    if( $taxType == "tag" ){
    $args   = ['tag_id' => $id, 'posts_per_page' => 3, 'orderby' => 'date', 'order' => 'DESC', 
    'fields' => 'ids'];      
    }else{
    $args   = ['cat' => $id, 'posts_per_page' => 3, 'orderby' => 'date', 'order' => 'DESC', 'fields' => 'ids'];
    }
        
    $query      = new WP_Query( $args );
    $post_ids   = $query->posts;
    wp_reset_postdata();
    return $post_ids;
}

function pxlCardThumbnail() {
    if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
    return;
    }

    if ( is_singular() ) : ?>
    <div class="post-thumbnail">
    <?php the_post_thumbnail(); ?>              
    </div><!-- .post-thumbnail -->
    <?php 
    else : 
    $post_id = get_the_ID();
    $thePostImage = get_the_post_thumbnail( $post_id, 'medium', array( 'alt' => the_title_attribute( array( 'echo' => false ) ) ) );    

    if( function_exists('get_field') ){
        $listThubnail = get_field( 'pl-thumbnail', $post_id );
        if( $listThubnail && is_array( $listThubnail ) ){
            if( isset( $listThubnail['sizes']['plist-thumbnail'] ) && 
            !empty( $listThubnail['sizes']['plist-thumbnail'] ) ){
            $thePostImage = '<img loading="lazy" src="'.$listThubnail['sizes']['plist-thumbnail'].'" 
            alt="'.$listThubnail['title'].'" width="'.$listThubnail['sizes']['plist-thumbnail-width'].'" 
            height="'.$listThubnail['sizes']['plist-thumbnail-height'].'">';    
            }else{
            $thePostImage = '<img loading="lazy" src="'.$listThubnail['url'].'" alt="'.$listThubnail['title'].'" width="'.$listThubnail['width'].'" height="'.$listThubnail['height'].'">'; 
            }               
        }
    }
    ?>

    <a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
    <?php echo $thePostImage; ?>            
    </a>
    <?php
    endif; // End is_singular().
}
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5">
    <?php wp_head(); ?>
    <link rel="shortcut icon" href="https://www.workstatus.io/wp-content/themes/workstatus/assests/images/favicon.png" 
    type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <style type="text/css">
    
      @media (max-width: 979px) {
      .reviews{padding:50px 0 0;}      
      }
      @media only screen and (min-device-width: 768px){
      #elm-toc .sw-hd {z-index: 9; position:relative;}
      }

      @media (max-width: 767px) {
      .inner-banner-bg .bannerwrap{background-size: 0 !important; background-image: none !important;}
      .inner-banner-bg::after, .hero-banner:after, .inner-banner:after {display:none;} 
      .inner-banner-bg .inner-wrap{margin:0;}
      .inner-banner-bg{padding: 100px 0 50px;}
      .inner-banner-bg .bannerwrap {padding:0;}
      .inner-banner-bg{height:initial;}
      .hero-banner {padding:100px 0 50px;}
      body.single .blog-thumb,.desk-only{ display:none; }    
      
      }
      body.single-post .row-key-takeaway{background: #f7f6fe; padding:30px; border-radius: 10px; border-left: 5px solid #624DE3; 
      color: #414141; margin: 30px 0;}
      body.single-post .row-key-takeaway ul li{ line-height: 20px; margin: 0 0 10px; list-style-position: inside; padding-left: 25px;
      position: relative; list-style: none ;}
      body.single-post .row-key-takeaway ul li:before{content: ''; width: 13px; height: 14px; 
      background:url(<?php bloginfo('template_url') ?>/images/keyli.png); position: absolute; left: 0; top: 4px;}
      
      #elm-toc .sw-hd{text-transform: capitalize;}    
      #elm-toc.active .sw-hd span.hide,
      #elm-toc .sw-hd span.show{display: inline-block;}

      #elm-toc.active .tocsec{display:block;}
      #elm-toc .tocsec,
      #elm-toc .sw-hd span.hide,
      #elm-toc.active .sw-hd span.show,
      #elm-toc .tocsec{display:none;}
      .cnd-phone{display: none;}
      .locate-in .cnd-phone{display: block;}

    </style>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
      new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
      j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
      'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
      })(window,document,'script','dataLayer','GTM-NPPMGZH');
    </script>
    <!-- End Google Tag Manager -->	

  </head>
  <body <?php body_class(); ?>>
    <?php global $wsloginlink, $wsreglink; ?>
    
    <div class="feature-header">
      <header class="site__header" id="masthead">
      <div class="container">
        <?php //echo '<pre>'.get_page_template().'</pre>'; ?>
        <div id="topnav" class="top_nav">
          <div class="logo ws-blogo">
            <a href="https://www.workstatus.io" title="Workstatus">
              <picture>
                <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assests/images/logo.svg" alt="Workstatus" width="230" height="31"> 
              </picture>              
            </a>
            <a href="<?php bloginfo('url'); ?>" class="lnk-blog"><span> / </span> Blog</a>
          </div>
          <div class="logo-white ws-blogo">
            <a href="https://www.workstatus.io" title="Workstatus">
              <picture>
                <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assests/images/logo-white.svg" width="230"
                  height="31" alt="Workstatus">
              </picture>
            </a>
            <a href="<?php bloginfo('url'); ?>" class="lnk-blog"><span> / </span> Blog</a>
          </div>

          <div class="head-wrap">
          <div class="banner-section">
            <div class="btn-section dis-flex">
            <button  class="searchsubmit" value="search" id="myBtn"></button>
              <div id="contentPopup" class="popup-wrapper">
                <div class="popWrap">
                  <div class="popup-content">
                    <span class="close"></span>
                    <?php $site_url = trailingslashit( get_bloginfo('url') ); ?>   
                    <form action="<?php echo $site_url; ?>" method="get" class="search_box">
                      <input type="search" placeholder="Type to start your search..." class="search" name="s" id="search" 
                      value="<?php the_search_query(); ?>" />
                      <button  class="searchsubmit" value="search"></button>
                    </form>
                  </div>
                </div>
              </div>
              <div id="newsletter-col">
              <button class="newsletter" value="search" id="myBtn2"></button>
                <div id="newsletterPopup" class="popup-wrapper">
                  <div class="popWrap">
                    <div class="popup-content">
                      <span class="closeicon-nw" onclick="closeNewsLetter('newsletterPopup');"></span>
                      <h3>Like What You’re Reading?</h3>
                      <?php echo do_shortcode('[email-subscribers-form id="1"]'); ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <button  class="nav_btn" onclick="navFunction();"> <span>&#9776;</span> <span>&#10005;</span> </button>       
          <nav class="site_nav">
           <div class="logindiv">
           <a href="https://app.Workstatus.io/auth/login/" class="primary_btn1 signin">Sign-In</a>
           <a href="javascript:void(0);" onclick="callSalesWs();" class="primary_btn1 wsfree">Contact Sales</a>
           <a href="javascript:void(0);" class="primary_btn1 ctsales" onclick="return get_ws_signupform(1, 'monthly');">Try Workstatus Free</a>
            </div> 
          </nav>
        </div>
      </div>
            </div>


    </header>  
    
    </div>    
<?php 
if( !is_single() ){
  get_template_part('inc/cmn', 'filter'); 
}
?>
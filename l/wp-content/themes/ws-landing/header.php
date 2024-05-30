<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/favicon.png" type="image/x-icon">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
    <style type="text/css">
      body.geo-international .form-group.sg-pcode,
      .flag-logo, 
      h2.ct-demo,
      h2.ct-call,
      body.geo-international .txt-local,
      body.geo-local .txt-int{display:none;}
      body.geo-local .flag-logo, 
      body.rq-call h2.ct-call,
      body.rq-demo h2.ct-demo{display:block;}
      body.page-template-tpl-version5-1 .ws-journey .content-section{padding: 100px 0;}
      .banner-section .two-box .content-box .sigupform form .credcard:before,
      .banner-section .two-box .content-box .sigupform form .credcard:after{width: 150px;}
      .page-id-1422 .review-sec{display:none;}
      .page-id-1422 .badges{display:none;}
      .pricing-tabs #pricing-contents .price-cards .column h3{text-transform: uppercase;}
      /*Top Stripe CSS start from here*/
    
      .top-stripe{background:#000; padding: 6px 0; text-align:center; font-size:16px; text-transform:uppercase; color:#fff;
      font-weight: 700; display: flex; align-items: center; justify-content: center; line-height: 20px; padding: 10px 0; display:none;}
      .top-stripe .timer{display:inline-block; border:0.5px solid #FFFFFF; border-radius:4px; padding: 10px 5px 10px 10px; margin: 0 14px; position: relative;}
      .top-stripe .timer img{vertical-align:middle;}
      .top-stripe .timer .tm{background:#624DE3; padding: 3px 6px; margin: 0 5px; border-radius:1px;}
      .top-stripe .bgbl   {background:#624DE3; padding: 3px 6px; margin: 0 5px; margin: 0 14px; border-radius:1px;}
      .clock-stripe .main-header .top-nav{padding:18px 0 0;}
      .clock-stripe .main-header{padding:0 0 18px;}
      .top-stripe .small{text-transform:lowercase;}
      .clock-stripe .top-stripe{display:flex;}
      span.no-f{text-transform: initial !important;}
      .clock-stripe .banner-section{padding: 180px 0 40px;}
      .clock-stripe header{z-index: 9999;}
      @media (max-width: 979px) {
      .top-stripe{font-size: 13px; padding: 10px 0;}
      .top-stripe .timer{padding: 8px 5px 8px 10px; margin: 0 5px;}
      .top-stripe .bgbl{margin: 0 5px;}
      }

      @media (max-width: 1440px) {
        .clock-stripe .banner-section{padding: 150px 0 40px;}
      }
      
      @media (max-width: 1320px){
        .clock-stripe .banner-section .bannerboy{bottom:0;}
      }
      @media (max-width: 1160px) {
        .clock-stripe .banner-section .bannerboy{bottom: -70px;}
      }

      @media (max-width: 767px) {
    
     .clock-stripe .banner-section{padding: 180px 0 40px;}
      }

      @media (max-width: 479px) {
      .top-stripe{font-size: 12px; line-height: 26px;} 
      .top-stripe .timer{padding: 4px 5px 4px 7px; margin: 0 5px 6px;}
      .top-stripe .timer .tm{padding: 3px 4px; margin: 0 4px;}
       
      }

      /*Top Stripe CSS ends here*/
    </style>
    <?php 
      if( isset($_SERVER['HTTP_HOST']) && ($_SERVER['HTTP_HOST'] != "localhost") ) :
      ?>   
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
      new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
      j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
      'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
      })(window,document,'script','dataLayer','GTM-NPPMGZH');
    </script>
    <?php endif; ?>
  </head>
<body <?php body_class('mobile'); ?> 
data-utm="<?php echo (isset($_SERVER['QUERY_STRING']) && !empty($_SERVER['QUERY_STRING'])) ? $_SERVER['QUERY_STRING'] : ''; ?>">
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NPPMGZH" height="0" width="0" 
      style="display:none;visibility:hidden"></iframe></noscript>
    <?php wp_body_open(); ?>
    <?php 
      if(
        !is_page_template([
          'page-templates/tpl-thanks.php',
          'page-templates/tpl-calendly.php',
          'page-templates/tpl-version5.0.php',
          'page-templates/tpl-version5.1.php',
          'page-templates/tpl-version6.0.php'
        ])
        ){
      ?>
   
    <header class="main-header" id="mainHeader">
      <?php echo getLmOffierStrip(); ?>
      <div class="container">
        <div id="topnav" class="top_nav">
          <a href="javascript:void(0);" class="logo-a">
            <picture>
              <img src="<?php bloginfo('template_url'); ?>/img/logo-white.svg" alt="Workstatus" width="230" height="31"> 
            </picture>
          </a>
          <a href="javascript:void(0);" class="logo-b">
            <picture>
              <img src="<?php bloginfo('template_url'); ?>/img/logo.svg" alt="Workstatus" width="230" height="31"> 
            </picture>
          </a>
          <?php 
            if(issglFldForm()){
            echo '<div class="twbtn"><a class="btn btn-big nov btn-secondary" href="javascript:void(0)" onclick="popup();">Book A Demo</a>
            <a href="#starttrail" class="btn btn-big btn-secondary">Try for Free</a>';
            } 
            ?>          
          <button id="has-navbtn" class="nav_btn" style="display:none"> <span class="nav-icon">&#9776;</span> <span class="nav-icon-close">&#10005;</span>
          </button>
        </div>
      </div>
    </header>
    <?php 
      }elseif( is_page_template(['page-templates/tpl-version5.0.php']) ){
      ?>
    <header class="main-header" id="mainHeader">
    <?php echo getLmOffierStrip(); ?>
      <div class="container">
        <div class="top-nav">
          <div class="header-item-left">
            <a href="javascript:void(0);" class="logo-b">
              <picture>
                <img src="<?php bloginfo('template_url'); ?>/img/logo.svg" alt="Workstatus" width="230" height="31"> 
              </picture>
            </a>
            <?php 
              $noFlagTpl = get_field('no-flag-tpl');
              if( $noFlagTpl !== "yes" ){
              ?>  
            <div class="flag-logo">
              <picture>
                <img loading="lazy" src="<?php bloginfo('template_url'); ?>/img/flag-logo.svg" alt="workstatus logo" 
                  width="98" height="30">
              </picture>
            </div>
            <?php } ?>
          </div>
          <div class="header-item-right">
            <ul>
              <?php
                $helps = get_field('hw-help');
                if( isset($helps['is_enabled']) && ($helps['is_enabled'] == "yes") ){
                  echo '<li><a href="#has-ws-timetrack">How it Works</a></li>';  
                }
                ?>        
              <li><a href="#feature">Features</a></li>
              <li><a href="#pricing">Pricing</a></li>
              <?php 
                $hasPhone = get_field('phone-opt', get_the_ID());
                if( isset($hasPhone['enable']) && ($hasPhone['enable'] == "yes") ){
                if( isset($hasPhone['ws-phone']) && !empty($hasPhone['ws-phone']) ){
                $showOn = (isset($hasPhone['ws-phone']) && !empty($hasPhone['show-on'])) ? $hasPhone['show-on'] : '';
                echo '<li class="phone '.$showOn.'"><a href="tel:'.$hasPhone['ws-phone'].'">'.$hasPhone['ws-phone'].'</a></li>';
                }            
                }
                ?>
              <li class="bookdemo"><a class="btn" href="javascript:void(0)" onclick="popup();">Book A Demo</a></li>
              <li class="freetrail"><a href="#btm-form" class="btn">Free 7-Days Trial</a></li>
            </ul>
          </div>
        </div>
      </div>
    </header>
    <?php 
      $hasPhone = get_field('phone-opt', get_the_ID());
      if( isset($hasPhone['enable']) && ($hasPhone['enable'] == "yes") ){
        if( isset($hasPhone['ws-phone']) && !empty($hasPhone['ws-phone']) ){
          $showOn = (isset($hasPhone['ws-phone']) && !empty($hasPhone['show-on'])) ? $hasPhone['show-on'] : '';
          echo '<div class="phonemobile '.$showOn.'"><a href="tel:'.$hasPhone['ws-phone'].'">'.$hasPhone['ws-phone'].'</a></div>';
        }            
      }
      
      }elseif( is_page_template(['page-templates/tpl-version6.0.php']) ){ 
      ?>
    <header class="main-header" id="mainHeader">
    <?php echo getLmOffierStrip(); ?>
      <div class="container">
        <div class="top-nav">
          <div class="header-item-left">
            <span class="logo-a">
              <picture>
                <?php 
                  if( sixTwoTpl() ){
                  echo '<img loading="lazy" src="'.get_bloginfo('template_url').'/img/logo.svg" alt="workstatus logo" width="230" height="31">';
                  }else{
                  echo '<img loading="lazy" src="'.get_bloginfo('template_url').'/img/logo-white.svg" alt="workstatus logo" width="230" height="31">';  
                  }
                  ?>
              </picture>
            </span>
            <span class="logo-b">
              <picture>
                <img loading="lazy" src="<?php bloginfo('template_url'); ?>/img/logo.svg" alt="workstatus logo" width="230" height="31">
              </picture>
            </span>
          </div>
          <div class="header-item-right">
            <ul>
              <?php 
                if(sixTwoTpl()){
                  echo '<li><a href="#feature">How it Works</a></li>
                  <li><a href="#feature">Features</a></li>
                  <li><a href="#pricing">Pricing</a></li>
                  <li class="bookdemo getqutmob"><a href="javascript:void(0);" onclick="six_popup();" 
                  class="btn roundbtn getqut">Get a Quote </a></li>
                  <li class="bookdemo bkdemomob"><a href="#bookdemo" class="btn roundbtn roundbtnclr bkdemo">Book A Demo</a></li>';
                }else{
                  echo '<li><a href="#feature">Features</a></li>
                  <li><a href="#pricing">Pricing</a></li>
                  <li class="bookdemo"><a href="#bookdemo" class="btn">Book A Demo</a></li>';  
                }
                ?>        
            </ul>
          </div>
        </div>
      </div>
    </header>
    <?php }elseif( is_page_template(['page-templates/tpl-version5.1.php']) ){ ?>
    <header class="main-header" id="mainHeader">
    <?php echo getLmOffierStrip(); ?>
      <div class="container">
        <div class="top-nav">
          <div class="header-item-left">
            <a href="javascript:void(0);" class="logo-b">
              <picture>
                <img loading="lazy" src="<?php bloginfo('template_url'); ?>/img/logo.svg" alt="workstatus logo" width="230" 
                  height="31">
              </picture>
            </a>
            <div class="flag-logo">
              <picture>
                <img loading="lazy" src="<?php bloginfo('template_url'); ?>/img/flag-logo.svg" alt="workstatus logo" width="98" 
                  height="30">
              </picture>
            </div>
          </div>
          <div class="header-item-right">
            <ul>
              <li><a href="#howitworks">How it Works</a></li>
              <li><a href="#feature">Features</a></li>
              <li><a href="#pricing">Pricing</a></li>
              <li class="bookdemo"><a href="javascript:void(0)" class="btn btn1" onclick="popup('rq-call');">Book A Call</a></li>
              <li class="freetrail"><a href="javascript:void(0)" onclick="planpopup('annually-paid');" class="btn btn2">Free 7 days Trial</a></li>
            </ul>
          </div>
        </div>
      </div>
    </header>
    <?php } ?>
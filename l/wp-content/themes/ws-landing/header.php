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
  </style>
  <?php 
  if( isset($_SERVER['HTTP_HOST']) && ($_SERVER['HTTP_HOST'] != "localhost") ) :
  ?>   
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-NPPMGZH');</script>
  <?php endif; ?>
</head>
<body <?php body_class('mobile'); ?> >
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

}elseif( is_page_template(['page-templates/tpl-version6.0.php']) ){ ?>
<header class="main-header" id="mainHeader">
<div class="container">
  <div class="top-nav">
    <div class="header-item-left">
      <span class="logo-a">
        <picture>
          <img loading="lazy" src="<?php bloginfo('template_url'); ?>/img/logo-white.svg" alt="workstatus logo" width="230" height="31">
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
        <li><a href="#feature">Features</a></li>
        <li><a href="#pricing">Pricing</a></li>
        <li class="bookdemo"><a href="#bookdemo" class="btn">Book A Demo</a></li>
      </ul>
    </div>
  </div>
</div>
</header>
<?php }elseif( is_page_template(['page-templates/tpl-version5.1.php']) ){ ?>
<header class="main-header" id="mainHeader">
<div class="container">
  <div class="top-nav">
    <div class="header-item-left">
      <a href="index.html" class="logo-b">
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
<style>
.page-id-1422 .review-sec{display:none;}
.page-id-1422 .badges{display:none;}
.pricing-tabs #pricing-contents .price-cards .column h3{text-transform: uppercase;}
</style>
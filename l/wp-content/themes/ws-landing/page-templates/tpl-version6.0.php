<?php
/*
Template Name: Template Version 6.0
*/
$userIP = wslGetUserIP();
$data   = wp_remote_post('https://superadmin.workstatus.io/api/v1/sa/getplan/list', 
array('body'    => ['ip' => $userIP]));
$currency = "&#8377;";
$wsApiResponse = [];
if( !is_wp_error( $data ) ){
  function getPricingFeatureData( $array, $value ){
    return array_search( $value, array_column($array, 'id') );
  }

  $data           = json_decode( wp_remote_retrieve_body( $data ) );  
  $wsApiResponse  = $data->response->data->values;
  
  $dataPremiumPlan = $wsApiResponse[1]->new_plan_feature_value;  
  //echo '<pre>'; print_r($dataPremiumPlan); die;
  if( $wsApiResponse[1]->price_type == "INR Pricing" ){
    $users_id       = getPricingFeatureData( $dataPremiumPlan, 51 );
    $projects_id    = getPricingFeatureData( $dataPremiumPlan, 52 );
    $tracking       = getPricingFeatureData( $dataPremiumPlan, 54 );
    $timesheet      = getPricingFeatureData( $dataPremiumPlan, 55 );
    $screenshots    = getPricingFeatureData( $dataPremiumPlan, 59 );
    $reports        = getPricingFeatureData( $dataPremiumPlan, 57 );
    $trackapp       = getPricingFeatureData( $dataPremiumPlan, 60 );
    $weburl         = getPricingFeatureData( $dataPremiumPlan, 61 );
    $vipsupport     = getPricingFeatureData( $dataPremiumPlan, 153 );
    $dedicatedam    = getPricingFeatureData( $dataPremiumPlan, 159 );
    $customisation  = getPricingFeatureData( $dataPremiumPlan, 75 );  
  }else{
    $users_id       = getPricingFeatureData( $dataPremiumPlan, 76 );
    $projects_id    = getPricingFeatureData( $dataPremiumPlan, 77 );
    $tracking       = getPricingFeatureData( $dataPremiumPlan, 79 );
    $timesheet      = getPricingFeatureData( $dataPremiumPlan, 80 );
    $screenshots    = getPricingFeatureData( $dataPremiumPlan, 84 );
    $reports        = getPricingFeatureData( $dataPremiumPlan, 82 );
    $trackapp       = getPricingFeatureData( $dataPremiumPlan, 85 );
    $weburl         = getPricingFeatureData( $dataPremiumPlan, 86 );
    $vipsupport     = getPricingFeatureData( $dataPremiumPlan, 154 );
    $dedicatedam    = getPricingFeatureData( $dataPremiumPlan, 160 );
    $customisation  = getPricingFeatureData( $dataPremiumPlan, 100 );  
  }  

  
  
  $tt = '';
  if( $dataPremiumPlan[$tracking]->values == 'tick' ){
    $tt = "Time Tracking";
  }

  if( $dataPremiumPlan[$timesheet]->values == 'tick' ){    
    $tt =  ( !empty( $tt ) ) ? $tt ." & Timesheets" : "Timesheets"; 
  }

  $premium_plan = [
  'users'     => "Number of User (".$dataPremiumPlan[$users_id]->values.")",
  'projects'  => "Number of Projects (".$dataPremiumPlan[$projects_id]->values.")",
  'tracking'  => $tt,
  'screenshots'  => "Screenshots (".$dataPremiumPlan[$screenshots]->values.")",
  'Reports'  => "Reports (".$dataPremiumPlan[$reports]->values.")",
  'Track Apps' => ( $dataPremiumPlan[$trackapp]->values == "tick" ) ? true : false,
  'Track Website URLs' => ( $dataPremiumPlan[$weburl]->values == "tick" ) ? true : false,
  'VIP Support' => ( $dataPremiumPlan[$vipsupport]->values == "tick" ) ? true : false,
  'Dedicated Account Manager' => ( $dataPremiumPlan[$dedicatedam]->values == "tick" ) ? true : false,
  'Customization Options' => ( $dataPremiumPlan[$customisation]->values == "tick" ) ? true : false,
  ];

  $dataPremiumPlan = $wsApiResponse[2]->new_plan_feature_value;

  if( $wsApiResponse[2]->price_type == "INR Pricing" ){
    $users_id       = getPricingFeatureData( $dataPremiumPlan, 101 );
    $projects_id    = getPricingFeatureData( $dataPremiumPlan, 102 );
    $tracking       = getPricingFeatureData( $dataPremiumPlan, 104 );
    $timesheet      = getPricingFeatureData( $dataPremiumPlan, 105 );
    $screenshots    = getPricingFeatureData( $dataPremiumPlan, 109 );
    $reports        = getPricingFeatureData( $dataPremiumPlan, 107 );
    $trackapp       = getPricingFeatureData( $dataPremiumPlan, 110 );
    $weburl         = getPricingFeatureData( $dataPremiumPlan, 111 );
    $vipsupport     = getPricingFeatureData( $dataPremiumPlan, 155 );
    $dedicatedam    = getPricingFeatureData( $dataPremiumPlan, 161 );
    $customisation  = getPricingFeatureData( $dataPremiumPlan, 125 ); 
  }else{
    $users_id       = getPricingFeatureData( $dataPremiumPlan, 126 );
    $projects_id    = getPricingFeatureData( $dataPremiumPlan, 127 );
    $tracking       = getPricingFeatureData( $dataPremiumPlan, 129 );
    $timesheet      = getPricingFeatureData( $dataPremiumPlan, 130 );
    $screenshots    = getPricingFeatureData( $dataPremiumPlan, 134 );
    $reports        = getPricingFeatureData( $dataPremiumPlan, 132 );
    $trackapp       = getPricingFeatureData( $dataPremiumPlan, 135 );
    $weburl         = getPricingFeatureData( $dataPremiumPlan, 136 );
    $vipsupport     = getPricingFeatureData( $dataPremiumPlan, 156 );
    $dedicatedam    = getPricingFeatureData( $dataPremiumPlan, 162 );
    $customisation  = getPricingFeatureData( $dataPremiumPlan, 150 );  
  }
  
  
  $tt = '';
  if( $dataPremiumPlan[$tracking]->values == 'tick' ){
    $tt = "Time Tracking";
  }

  if( $dataPremiumPlan[$timesheet]->values == 'tick' ){    
    $tt =  ( !empty( $tt ) ) ? $tt ." & Timesheets" : "Timesheets"; 
  }

  $enterprise_plan = [
  'users'     => "Number of User (".$dataPremiumPlan[$users_id]->values.")",
  'projects'  => "Number of Projects (".$dataPremiumPlan[$projects_id]->values.")",
  'tracking'  => $tt,
  'screenshots'  => "Screenshots (".$dataPremiumPlan[$screenshots]->values.")",
  'Reports'  => "Reports (".$dataPremiumPlan[$reports]->values.")",
  'Track Apps' => ( $dataPremiumPlan[$trackapp]->values == "tick" ) ? true : false,
  'Track Website URLs' => ( $dataPremiumPlan[$weburl]->values == "tick" ) ? true : false,
  'VIP Support' => ( $dataPremiumPlan[$vipsupport]->values == "tick" ) ? true : false,
  'Dedicated Account Manager' => ( $dataPremiumPlan[$dedicatedam]->values == "tick" ) ? true : false,
  'Customization Options' => ( $dataPremiumPlan[$customisation]->values == "tick" ) ? true : false,
  ];
  //print_r($enterprise_plan);
  //die;
  $currency       = ( isset( $wsApiResponse[0]->price_type ) && ($wsApiResponse[0]->price_type == "USD Pricing") ) ? "$" : "&#8377;";
}
$appUrl = 'https://app.workstatus.io/auth/register';
get_header();

$tplversion       = get_field('tpl-stype');
$isBannerFormTpl  = ($tplversion && (($tplversion == "6.1") || ($tplversion == "6.2"))) ? true : false;
//$isBannerFormTpl = true;
?>

<!-- Banner Section -->
<section class="banner-section <?php echo ( $isBannerFormTpl === true ) ? 'banner-div' : ''; ?>">
  <div class="container">
    <div class="two-box">
      <div class="flex-2 <?php echo ( sixTwoTpl() ) ? 'content-section' : '';  ?>">
        <?php 
        the_content(); 
        if( $isBannerFormTpl === true ){ 
        ?>
        <div class="badge-wrap desktop">
        <h3>Trusted by 100,000+ companies to across the Globe</h3>
        <div class="badges">
        <div class="col">        
        <div class="badgebar">
        <picture>
          <img loading="lazy" src="<?php echo get_bloginfo('template_url').'/assets/images/bd-logo01.svg'; ?>" alt="badge" width="125" height="43">
        </picture>
        4.5/5
        <i class="icon1"></i>
        </div>
        </div>
        <div class="col">
        <div class="badgebar">
        <picture>
          <img loading="lazy" src="<?php 
          echo get_bloginfo('template_url').'/assets/images/'; echo ( sixTwoTpl() ) ? 'logo-02.png' : 'bd-logo01.svg'; 
          ?>" alt="badge" width="125" height="43">
        </picture>
        5/5
        <i class="icon2"></i>
        </div>
        </div>
        <div class="col">
        <div class="badgebar">
        <picture>
          <img loading="lazy" src="<?php 
          echo get_bloginfo('template_url').'/assets/images/'; echo ( sixTwoTpl() ) ? 'logo-03.png' : 'bd-logo03.svg'; 
          ?>" alt="badge" width="125" height="43">
        </picture>
        4.8/5
        <i class="icon3"></i>
        </div>
        </div>
        <div class="col">
        <div class="badgebar">
        <picture>
          <img loading="lazy" src="<?php 
          echo get_bloginfo('template_url').'/assets/images/'; echo ( sixTwoTpl() ) ? 'logo-04.png' : 'bd-logo04.svg'; 
          ?>" alt="badge" width="125" height="43">
        </picture>
        4.9/5
        <i class="icon4"></i>
        </div>
        </div>
        <div class="col">
        <div class="badgebar">
        <picture>
          <img loading="lazy" src="<?php 
          echo get_bloginfo('template_url').'/assets/images/'; echo ( sixTwoTpl() ) ? 'Services-Categories.png' : 'bd-logo05.svg'; 
          ?>" alt="badge" width="125" height="43">
        </picture>
        4.9/5
        <i class="icon5"></i>
        </div>
        </div>
        </div>
        </div>
        <?php }else{
          echo '<a class="btn" href="#bookdemo">Book A Demo</a>';
        } 
        ?>        
      </div>
      <div class="flex-2 <?php echo ( $isBannerFormTpl === true ) ? 'banner-form' : 'image-sec'; ?>">
        <?php 
        if( $isBannerFormTpl === true ){
          $bfCta = get_field('bf-cta');
          echo ( sixTwoTpl() === true ) ? '<div class="banner-form-bg">' : '';
          echo ( sixTwoTpl() === true ) ? '<div class="form-box">' : '<div class="col">';
          echo '<h3>';
          echo (isset($bfCta['title']) && !empty($bfCta['title'])) ? $bfCta['title'] : 'Request a Demo';
          echo '</h3>';
          $btnCta = (isset($bfCta['cta-button']) && !empty($bfCta['cta-button'])) ? $bfCta['cta-button'] : 'Book A Demo';
          get_template_part('inc/form', 'version6', ['cta-text' => $btnCta ]);
          echo ( sixTwoTpl() === true ) ? '</div>' : '';
          echo '</div>';
        }else{
          $bannerImage = get_field('top-banner');
          if( $bannerImage && is_array( $bannerImage ) ){
            echo pxlGetPtag($bannerImage);
          }  
        }        
        ?>
      </div>
    </div>
  </div>
</section>

<?php if( $isBannerFormTpl === true ){  ?>
<section class="banner-img">
  <div class="container">
    <?php 
    $bannerImage = get_field('top-banner');
    if( $bannerImage && is_array( $bannerImage ) ){
      echo pxlGetPtag($bannerImage);
    }else{
    ?>
    <picture>
      <source type="image/webp" srcset="<?php bloginfo('template_url'); ?>/assets/images/banner-image.webp">
      <source type="image/png" srcset="<?php bloginfo('template_url'); ?>/assets/images/banner-image.png">
      <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/images/banner-image.png" alt="banner image" width="" height="">
    </picture>
    <?php } ?>
  </div>
</section>
<?php } ?>

<?php if( $isBannerFormTpl === false ){  ?>
<!-- Trusted Companies Section -->
<section class="trusted-comp padding-t-40 padding-b-100">
  <div class="container">
    <div class="head-txt text-center">
      <h3>Trusted by <span class="black">100,000+</span> companies to <span class="black">across the Globe</span></h3>
    </div>
    <div class="dis-flex col-box-outer">
      <div class="flex-4">
        <div class="comp-logo">
          <picture>
            <source type="image/webp" srcset="<?php bloginfo('template_url'); ?>/assets/images/logo-01.webp">
            <source type="image/png" srcset="<?php bloginfo('template_url'); ?>/assets/images/logo-01.png">
            <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/images/logo-01.png" alt="Dashboard Image" width="179" height="60">
          </picture>
        </div>
        <p><strong>4.5</strong>/5</p>
        <i class="rating-star"></i>
      </div>
      <div class="flex-4">
        <div class="comp-logo">
          <picture>
            <source type="image/webp" srcset="<?php bloginfo('template_url'); ?>/assets/images/logo-02.webp">
            <source type="image/png" srcset="<?php bloginfo('template_url'); ?>/assets/images/logo-02.png">
            <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/images/logo-02.png" alt="Dashboard Image" width="132" height="34">
          </picture>
        </div>
        <p><strong>5</strong>/5</p>
        <i class="rating-star"></i>
      </div>
      <div class="flex-4">
        <div class="comp-logo">
          <picture>
            <source type="image/webp" srcset="<?php bloginfo('template_url'); ?>/assets/images/logo-03.webp">
            <source type="image/png" srcset="<?php bloginfo('template_url'); ?>/assets/images/logo-03.png">
            <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/images/logo-03.png" alt="Dashboard Image" width="179" height="60">
          </picture>
        </div>
        <p><strong>4.8</strong>/5</p>
        <i class="rating-star"></i>
      </div>
      <div class="flex-4">
        <div class="comp-logo">
          <picture>
            <source type="image/webp" srcset="<?php bloginfo('template_url'); ?>/assets/images/logo-04.webp">
            <source type="image/png" srcset="<?php bloginfo('template_url'); ?>/assets/images/logo-04.png">
            <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/images/logo-04.png" alt="Dashboard Image" width="185" height="62">
          </picture>
        </div>
        <p><strong>4.9</strong>/5</p>
        <i class="rating-star"></i>
      </div>
    </div>
  </div>
</section>
<?php } ?>

<div class="count-box-section">
  <div class="container bg-light">
    <div class="head-txt text-center">
      <h3>What Makes Workstatus Differrent</h3>
    </div>
    <div class="count-box-outer dis-flex margin-t-70">
      <div class="count-box flex-4">
        <span class="count-box-big"><span class="scroll-counter" data-counter-time="1000">5</span>M+</span>
        <span class="count-box-small">Active Users and Counting</span>
      </div>
      <div class="count-box flex-4">
        <span class="count-box-big">+<span class="scroll-counter" data-counter-time="1000">37</span>%</span>
        <span class="count-box-small">Increased Productivity</span>
      </div>
      <div class="count-box flex-4">
        <span class="count-box-big">+<span class="scroll-counter" data-counter-time="1000">15</span>%</span>
        <span class="count-box-small">Improved Attendance</span>
      </div>
      <div class="count-box flex-4">
        <span class="count-box-big"><span class="scroll-counter" data-counter-time="1000">67</span>+</span>
        <span class="count-box-small">Countries using Workstatus</span>
      </div>
    </div>
  </div>
</div>
<!--Counter Section Start From Here-->

<!--Customer Reviews Start From Here-->
<section class="customer-testimonial-section padding-t-120 padding-b-120">
  <div class="container">
    <div class="head-txt text-center">
    <?php echo get_field('cr-heading'); ?>
    </div>
    <?php 
    $customerReviews = get_field('ws-creviews');
    if( $customerReviews ) :
    ?>
    <div class="glider-contain customer-testimonial-slider">
      <div class="glider" id="glider">
        <?php foreach( $customerReviews as $row ){ ?>        
        <div class="slide-item">
          <div class="content-box-outer">
            <div class="content-box">
              <?php echo $row['comment']; ?>
            </div>
            <div class="cust-img-box dis-flex">
              <div class="profile">
                <?php 
                $rPick = $row['image'];
                if( $rPick ){
                  echo pxlGetPtag( $rPick );
                }
                ?>
              </div>
              <div class="profile-text">
                <h5><?php echo $row['client_name']; ?></h5>
                <h6><?php echo $row['client_organisation']; ?></h6>
              </div>
            </div>
          </div>
        </div>
        <?php } ?>        
      </div>
      <div role="tablist" class="dots"></div>
    </div>
    <?php 
    $cr_cta = get_field('cr-cta');
    if( $cr_cta ){
    echo '<div class="ctasec text-center margin-t-80">';    
    
    echo '<h2>';
    echo (isset($cr_cta['title']) && !empty($cr_cta['title'])) ? $cr_cta['title'] : 'Still have questions?';
    echo  '</h2>';    

    echo '<a href="#bookdemo" class="btn">';
    echo (isset($cr_cta['cta-button']) && !empty($cr_cta['cta-button'])) ? $cr_cta['cta-button'] : 'Book A Demo';
    echo '</a>';

    echo '</div>';
    }
    ?>
    
    <?php endif; ?>
    <!--Customer Reviews Ends Here-->    
  </div>
</section>

<?php 
$appTabs = get_field('abt-app');
if( isset( $appTabs['is_enabled'] ) && ($appTabs['is_enabled'] == "yes") ) :
?>
<section class="learn-app bg-light padding-t-120 padding-b-120" id="feature">
  <div class="container">
    <div class="head-txt text-center">
      <?php echo $appTabs['top_text']; ?>
    </div>
    <?php 
    $inTab = $appTabs['tabs'];
    if( $inTab ) :
    ?>
    <div class="prod-tabs margin-t-70">
      <nav id="tabs">
      <ul>
      <?php 
      $t = 0;
      foreach( $inTab as $tab ){
      $t++;
      ?>
      <li class="<?php echo ($t === 1) ? " active" : ""; ?>"><a href="#tab<?php echo $t; ?>">
      <img class="icon" loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/images/tab-icon-0<?php echo $t; ?>.svg" 
      alt="<?php echo $tab['title'] ?>" width="19" height="21"><?php echo $tab['title'] ?></a></li>
      <?php } ?>
      </ul>
      </nav>
      <div id="tab-contents" class="margin-t-50">
        <?php 
        $c = 0;
        foreach( $inTab as $tab ){ $c++; ?>
        <div id="tab<?php echo $c; ?>" class="tab-contents <?php echo ($c === 1) ? " active" : ""; ?>">
          <div class="dis-flex">
            <div class="flex-2">
              <?php 
              if( isset($tab['img']) && is_array( $tab['img'] ) ){
                echo pxlGetPtag($tab['img']);
              } 
              ?>
            </div>
            <div class="flex-2 content-box">
              <?php echo $tab['content']; ?>
            </div>
          </div>
        </div>
        <?php } ?>        
      </div>
    </div>
    
  <?php endif; ?>      
    <div class="ctasec text-center margin-t-80">
      <h2><?php echo $appTabs['cta-title']; ?></h2>
      <a href="#bookdemo" class="btn"><?php echo $appTabs['cta-btn']; ?></a>
    </div>
  </div>
</section>
<?php endif; ?>

<?php 
$featureRow = get_field('abt-app-row');
if( isset( $featureRow['is_enabled'] ) && ($featureRow['is_enabled'] == "yes") ) :
?>
<section class="feature-section bg-light padding-t-100 padding-b-70" id="feature">
   <div class="container">
      <div class="head-txt text-center">
         <?php echo $featureRow['top_text']; ?>
      </div>
      <div class="feature-outer">
        <?php 
        $ftRow = $featureRow['rows'];
        if( $ftRow ){
        foreach( $ftRow as $row ){ ?>
        <div class="dis-flex flex-row">
            <div class="flex-2">
              <?php 
              if( isset($row['img']) && is_array( $row['img'] ) ){
              echo pxlGetPtag($row['img']);
              } 
              ?>
            </div>
            <div class="flex-2 content-box"><?php echo $row['content']; ?></div>
         </div>     
        <?php 
        }
        }
        ?> 
      </div>
   </div>
</section>
<?php endif; ?>

<?php 
$helps = get_field('hw-help');
if( isset($helps['is_enabled']) && ($helps['is_enabled'] == "yes") ) :
?>
<section class="ws-help padding-t-120 padding-b-120" id="feature">
  <div class="container">
    <div class="head-txt text-center"><?php echo $helps['top_text']; ?></div>
    <?php 
    $inCards = $helps['cards'];
    if( $helps['cards'] ){
    echo '<div class="dis-flex help-row margin-t-60">';
    foreach( $helps['cards'] as $card ){
      echo '<div class="flex-3 help-col"><div class="box">';
      if( isset($card['img']) && is_array($card['img']) ){
        echo pxlGetPtag($card['img']);
      }
      echo $card['content'];
      echo '</div></div>';
    }
    echo '</div>';  
    }
    ?>
  </div>
</section>
<?php endif; ?>

<div class="pricing-tabs padding-t-150 padding-b-150" id="pricing">
  <div class="container">
    <div class="head-txt text-center">
      <h2>Choose the plan that's right for your team</h2>
    </div>
    <nav id="pricetabs" class="margin-t-50">
      <ul>
        <li class="active"><a href="#pricetab1">Annual<span class="toggle"></span></a></li>
        <li><a href="#pricetab2">Monthly</a></li>
      </ul>
    </nav>
    <div id="pricing-contents">
      <div id="pricetab1" class="pricing-contents active">
        <!--<h5><strong>Get two months free</strong> when you pay annually.</h5>-->
        <div class="price-cards padding-t-70">          
          <div class="column">
            <div class="toptext">
              <h3><?php echo ( isset($wsApiResponse[1]->name) ) ? $wsApiResponse[1]->name : 'Premium'; ?></h3>
              <div class="amount"><strong><?php echo $currency; ?><?php echo ( isset($wsApiResponse[1]->annual_price) ) ? round($wsApiResponse[1]->annual_price/12) : '199'; ?></strong></div>
              <small>user / month</small>
              <a href="javascript:void(0);" onclick="planpopup('annually-paid');" class="price_btn">Signup</a>
            </div>
            <div class="bottomtext">
              <?php 
              echo '<ul>';
              foreach( $premium_plan as $key => $value ){
                if( gettype( $value ) === "boolean" ){
                  $isCloss = ( $value === false ) ? 'icon-cross' : 'icon-tick';
                  echo '<li class="'.$isCloss.'">'.$key.'</li>';
                }else{
                  echo '<li>'.$value.'</li>';  
                }
                
              }
              echo '</ul>';
              ?>
            </div>
          </div>
          <div class="column">
            <div class="toptext">
              <h3><?php echo ( isset($wsApiResponse[2]->name) ) ? $wsApiResponse[2]->name : 'Enterprise'; ?></h3>
              <p><?php echo ( isset($wsApiResponse[2]->description) ) ? $wsApiResponse[2]->description : ''; ?></p>
              <a href="#bookdemo" class="price_btn">Request A Demo</a>
            </div>
            <div class="bottomtext">
              <?php 
              echo '<ul>';
              foreach( $enterprise_plan as $key => $value ){
                if( gettype( $value ) === "boolean" ){
                  $isCloss = ( $value === false ) ? 'icon-cross' : 'icon-tick';
                  echo '<li class="'.$isCloss.'">'.$key.'</li>';
                }else{
                  echo '<li>'.$value.'</li>';  
                }
                
              }
              echo '</ul>';
              ?>
            </div>
          </div>
        </div>
      </div>
      <div id="pricetab2" class="pricing-contents">
        <!--<h5><strong>Get two months free</strong> when you pay annually.</h5>-->
        <div class="price-cards padding-t-70">          
          <div class="column">
            <div class="toptext">
              <h3><?php echo ( isset($wsApiResponse[1]->name) ) ? $wsApiResponse[1]->name : 'Premium'; ?></h3>
              <div class="amount"><strong><?php echo $currency; ?><?php echo ( isset($wsApiResponse[1]->price) ) ? $wsApiResponse[1]->price : '299'; ?></strong></div>
              <small>user / month</small>
              <a href="javascript:void(0);" class="price_btn" onclick="planpopup('monthly-paid');">Signup</a>
            </div>
            <div class="bottomtext">
              <?php 
              echo '<ul>';
              foreach( $premium_plan as $key => $value ){
                if( gettype( $value ) === "boolean" ){
                  $isCloss = ( $value === false ) ? 'icon-cross' : 'icon-tick';
                  echo '<li class="'.$isCloss.'">'.$key.'</li>';
                }else{
                  echo '<li>'.$value.'</li>';  
                }
                
              }
              echo '</ul>';
              ?>
            </div>
          </div>
          <div class="column">
            <div class="toptext">
              <h3><?php echo ( isset($wsApiResponse[2]->name) ) ? $wsApiResponse[2]->name : 'Enterprise'; ?></h3>
              <p><?php echo ( isset($wsApiResponse[2]->description) ) ? $wsApiResponse[2]->description : ''; ?></p>
              <a href="#bookdemo" class="price_btn">Request A Demo</a>
            </div>
            <div class="bottomtext">
              <?php 
              echo '<ul>';
              foreach( $enterprise_plan as $key => $value ){
                if( gettype( $value ) === "boolean" ){
                  $isCloss = ( $value === false ) ? 'icon-cross' : 'icon-tick';
                  echo '<li class="'.$isCloss.'">'.$key.'</li>';
                }else{
                  echo '<li>'.$value.'</li>';  
                }                
              }
              echo '</ul>';
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Pricing Table Section Start Ends Here-->

<?php 
$sup_devices = get_field('ws-devices');
if( isset( $sup_devices['is_enable'] ) && ($sup_devices['is_enable'] == "yes") ) :
?>
<!--Supported Device Start From Here-->
<section class="supported-device bg-light padding-t-100 padding-b-100">
<div class="container">
  <div class="head-txt text-center">
    <h2>
    <?php 
    echo (isset($sup_devices['title']) && !empty($sup_devices['title'])) ? $sup_devices['title'] : 'Workstatus Supports All Platforms/Devices';
    ?>  
    
    </h2>
  </div>
  <div class="dis-flex margin-t-70">
    <div class="flex-2 text-center">
      <h4>Operating System</h4>
      <div class="dis-flex margin-t-50">
        <div class="flex-6">
          <picture class="device-img">
            <source type="image/webp" srcset="<?php bloginfo('template_url'); ?>/assets/images/windows.webp">
            <source type="image/png" srcset="<?php bloginfo('template_url'); ?>/assets/images/windows.png">
            <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/images/windows.png" alt="Windows" width="42" height="42">
          </picture>
          <p>Windows</p>
        </div>
        <div class="flex-6">
          <picture class="device-img">
            <source type="image/webp" srcset="<?php bloginfo('template_url'); ?>/assets/images/mac.webp">
            <source type="image/png" srcset="<?php bloginfo('template_url'); ?>/assets/images/mac.png">
            <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/images/mac.png" alt="Windows" width="34" height="42">
          </picture>
          <p>Mac</p>
        </div>
        <div class="flex-6">
          <picture class="device-img">
            <source type="image/webp" srcset="<?php bloginfo('template_url'); ?>/assets/images/android.webp">
            <source type="image/png" srcset="<?php bloginfo('template_url'); ?>/assets/images/android.png">
            <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/images/android.png" alt="Android" width="38" height="44">
          </picture>
          <p>Android</p>
        </div>
        <div class="flex-6">
          <picture class="device-img">
            <source type="image/webp" srcset="<?php bloginfo('template_url'); ?>/assets/images/ios.webp">
            <source type="image/png" srcset="<?php bloginfo('template_url'); ?>/assets/images/ios.png">
            <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/images/ios.png" alt="iOs" width="52" height="33">
          </picture>
          <p>iOS</p>
        </div>
        <div class="flex-6">
          <picture class="device-img">
            <source type="image/webp" srcset="<?php bloginfo('template_url'); ?>/assets/images/linux.webp">
            <source type="image/png" srcset="<?php bloginfo('template_url'); ?>/assets/images/linux.png">
            <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/images/linux.png" alt="linux" width="42" height="42">
          </picture>
          <p>Linux</p>
        </div><div class="flex-6">
          <picture class="device-img">
            <source type="image/webp" srcset="<?php bloginfo('template_url'); ?>/assets/images/chrome.webp">
            <source type="image/png" srcset="<?php bloginfo('template_url'); ?>/assets/images/chrome.png">
            <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/images/chrome.png" alt="iOs" width="35" height="35">
          </picture>
          <p>ChromeOS</p>
        </div>
      </div>
    </div>
    <div class="flex-2 text-center">
      <h4>Device</h4>
      <div class="dis-flex margin-t-50">
        <div class="flex-4">
          <picture class="device-img">
            <source type="image/webp" srcset="<?php bloginfo('template_url'); ?>/assets/images/device-01.webp">
            <source type="image/png" srcset="<?php bloginfo('template_url'); ?>/assets/images/device-01.png">
            <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/images/device-01.png" alt="Device" width="62" height="36">
          </picture>
          <p>Desktop</p>
        </div>
        <div class="flex-4">
          <picture class="device-img">
            <source type="image/webp" srcset="<?php bloginfo('template_url'); ?>/assets/images/device-02.webp">
            <source type="image/png" srcset="<?php bloginfo('template_url'); ?>/assets/images/device-02.png">
            <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/images/device-02.png" alt="Device" width="62" height="36">
          </picture>
          <p>Laptop</p>
        </div>
        <div class="flex-4">
          <picture class="device-img">
            <source type="image/webp" srcset="<?php bloginfo('template_url'); ?>/assets/images/device-03.webp">
            <source type="image/png" srcset="<?php bloginfo('template_url'); ?>/assets/images/device-03.png">
            <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/images/device-03.png" alt="Device" width="20" height="34">
          </picture>
          <p>Mobile</p>
        </div>
        <div class="flex-4">
          <picture class="device-img">
            <source type="image/webp" srcset="<?php bloginfo('template_url'); ?>/assets/images/device-03.webp">
            <source type="image/png" srcset="<?php bloginfo('template_url'); ?>/assets/images/device-03.png">
            <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/images/device-03.png" alt="Device" width="30" height="35">
          </picture>
          <p>Tablet</p>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
<!--Supported Device Ends From Here-->
<?php endif; ?>

<div class="popup-form demo-footer-form free-demopop" id="bookdemo">
  <div class="container"> 
    <div id="formPopup" class="popup-wrapper">
      <div class="popWrap">
      <div class="popup-content p-0">
        <span class="cross-btn" onclick="sixPclose();"></span>
        <div class="left-section">
              <picture>
                <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/images/logo-white.svg" alt="Logo" width="179" height="24">
              </picture>
              <div class="content">
                <h2><span class="lt-blue">Schedule A Free Demo</span> <br>At 
                  Your Convenience
                </h2>
                <p>Get answers to all your queries. Learn about all features in Workstatus 
                  that can <span class="lt-blue">make your team 37% more productive.</span>
                </p>
              </div>
              <div class="performer-box">
                <div class="list-box">
                  <ul>
                    <li>Top Rated Solution</li>
                    <li>Best-in-Class Support</li>
                    <li>Enterprise Grade Security</li>
                  </ul>
                </div>
                <div class="second_box">
                  <img src="<?php bloginfo('template_url'); ?>/assets/images/g2-main-image.svg" alt="">
                </div>
              </div>
              <div class="badges">
                <div class="col">
                  <div class="leftbar">
                    <picture>
                      <source type="image/webp" srcset="<?php bloginfo('template_url'); ?>/assets/images/badge-logo1.webp">
                      <source type="image/png" srcset="<?php bloginfo('template_url'); ?>/assets/images/badge-logo1.png">
                      <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/images/badge-logo1.png" alt="Partner Logo" width="67" height="17">
                    </picture>
                    <i class="icon1"></i>
                  </div>
                  <div class="ritbar">
                    4.9
                  </div>
                </div>
                <div class="col">
                  <div class="leftbar">
                    <picture>
                      <source type="image/webp" srcset="<?php bloginfo('template_url'); ?>/assets/images/badge-logo2.webp">
                      <source type="image/png" srcset="<?php bloginfo('template_url'); ?>/assets/images/badge-logo2.png">
                      <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/images/badge-logo2.png" alt="Partner Logo" width="70" height="17">
                    </picture>
                    <i class="icon2"></i>
                  </div>
                  <div class="ritbar">
                    5.0
                  </div>
                </div>
                <div class="col">
                  <div class="leftbar">
                    <picture>
                      <source type="image/webp" srcset="<?php bloginfo('template_url'); ?>/assets/images/badge-logo3.webp">
                      <source type="image/png" srcset="<?php bloginfo('template_url'); ?>/assets/images/badge-logo3.png">
                      <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/images/badge-logo3.png" alt="Partner Logo" width="72" height="15">
                    </picture>
                    <i class="icon3"></i>
                  </div>
                  <div class="ritbar">
                    4.8
                  </div>
                </div>
                <div class="col">
                  <div class="leftbar">
                    <picture>
                      <source type="image/webp" srcset="<?php bloginfo('template_url'); ?>/assets/images/badge-logo4.webp">
                      <source type="image/png" srcset="<?php bloginfo('template_url'); ?>/assets/images/badge-logo4.png">
                      <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/images/badge-logo4.png" alt="Partner Logo" width="20" height="20">
                    </picture>
                    <i class="icon4"></i>
                  </div>
                  <div class="ritbar">
                    4.9
                  </div>
                </div>
              </div>
            </div>
            <div class="right-section">
            <div class="col">
              <div class="top-section">
                <?php 
                $bfCta = get_field('bf-cta');
                echo '<h2>';
                echo (isset($bfCta['title']) && !empty($bfCta['title'])) ? $bfCta['title'] : 'Request a Demo';
                echo '</h2>';
                $fbtnCta = (isset($bfCta['cta-button']) && !empty($bfCta['cta-button'])) ? $bfCta['cta-button'] : 'Book A Demo';
                ?>
              </div>
              <?php get_template_part('inc/form', 'version1', ['cta-text' => $fbtnCta]); ?>
            </div><!--//.col-->
            </div>
      </div>
    </div>
    </div>
  </div>
  </div><!-- //#bookdemo-->
<section class="footer-sec">
<div class="footer-top">
  <div class="container">
    <?php if( sixTwoTpl() ){ ?>  
    <div class="dis-flex" style="display:none;">
      <div class="flex-4"><p>Our Offices:</p></div>
      <div class="flex-4"><p>UAE : 541, 8W, Level 5, Dubai Airport Free Zone, Dubai, United Arab Emirates</p></div>
      <div class="flex-4"><p>Gurugram : 10th Floor, Tower-B, Unitech Cyber Park, Sector - 39, Gurugram, Haryana, India- 122001</p></div>
      <div class="flex-4"><p>Noida : 3rd Floor, Fusion Square, 5A & 5B, Sector 126, Noida 201303</p></div>
    </div>  
    <?php }else{ ?>
    <div class="dis-flex">
      <div class="flex-4"><p>Our Offices:</p></div>
      <div class="flex-4"><p>UAE : 541, 8W, Level 5, Dubai Airport Free Zone, Dubai, United Arab Emirates</p></div>
      <div class="flex-4"><p>Gurugram : 10th Floor, Tower-B, Unitech Cyber Park, Sector - 39, Gurugram, Haryana, India- 122001</p></div>
      <div class="flex-4"><p>Noida : 3rd Floor, Fusion Square, 5A & 5B, Sector 126, Noida 201303</p></div>
    </div>  
    <?php } ?>
  </div>
</div>
<div class="footer-bottom text-center">&copy; workstatus.io All rights reserved.</div>
</section>
<div class="popup-form">
<div id="signupformPopup" class="popup-wrapper">
<div class="popWrap">
  <div class="popup-content">
    <span class="closeicon-sg"></span>
    <div class="col">
      <div class="top-section">
      <?php 
      $bfCta = get_field('ca-form');
      echo '<h2>';
      echo (isset($bfCta['title']) && !empty($bfCta['title'])) ? $bfCta['title'] : 'Create Your Account';
      echo '</h2>';
      $btnCta = (isset($bfCta['cta-button']) && !empty($bfCta['cta-button'])) ? $bfCta['cta-button'] : 
      'Create free trial account';
      ?>  
      </div>
      <div class="sigupform">
      <?php get_template_part('inc/form', 'v5.0', ['slot' => 3, 'cta-text' => $btnCta]); ?>
      </div>
    </div>
  </div>
</div>
</div>
</div>
<input type="hidden" value="0" id="myhiddenid">
<?php get_footer();?>
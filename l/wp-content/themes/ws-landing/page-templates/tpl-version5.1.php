<?php
/*
Template Name: Page Template v 5.1
*/
$userIP   = wslGetUserIP();
$data     = wp_remote_post('https://superadmin.workstatus.io/api/v1/sa/getplan/list', array('body' => ['ip'=>$userIP]));
$currency = "&#8377;";
$wsApiResponse = [];
if( !is_wp_error( $data ) ){
  $data           = json_decode( wp_remote_retrieve_body($data) );
  $wsApiResponse  = $data->response->data->values;
  $currency       = (isset($wsApiResponse[0]->price_type) && ($wsApiResponse[0]->price_type == "USD Pricing")) ? "$" : "&#8377;";
  //echo '<pre>';print_r( $_SERVER ); print_r( $wsApiResponse ); die;
}
$appUrl = 'https://app.workstatus.io/auth/register';
get_header(); ?>
<!-- Banner Section -->
<section class="banner-section">
  <img class="bannerboy local" loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/images/banner-boy.png" alt="Workstatus">
  <img class="bannerboy internat" loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/images/banner-v4intern.png" alt=" Workstatus">
  <div class="container">
    <div class="two-box">
      <div class="flex-2 content-box">
        <?php the_content();?>
        <div class="sigupform">
        <?php get_template_part('inc/bannerform', 'v5.1', ['slot' => 1]); ?>
        </div>
      </div>
      <div class="flex-2 image-sec">
        <?php  
          /*
          $bannerImage = get_field('top-banner');
          if( $bannerImage && is_array( $bannerImage ) ){
          echo pxlGetPtag($bannerImage);
          }
          */
          ?>        
      </div>
    </div>
  </div>
</section>
<!-- Trusted Companies Section -->
<section class="trusted-comp padding-t-100 padding-b-100">
  <div class="container">
    <div class="head-txt text-center">
      <h3>Trusted by <span class="black">5000+</span> companies to <span class="black">across the Globe</span></h3>
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
<?php 
  $appTabs = get_field('abt-app');
  if( isset( $appTabs['is_enabled'] ) && ($appTabs['is_enabled'] == "yes") ) :
  ?>
<section class="learn-app bg-light padding-t-100 padding-b-70" id="feature">
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
              alt="<?php echo $tab['title'] ?>" width="19" height="21"><?php echo $tab['title'] ?></a>
          </li>
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
  </div>
</section>
<?php endif; ?>


<?php 
$featureRow = get_field('abt-app-row');
if( isset( $featureRow['is_enabled'] ) && ($featureRow['is_enabled'] == "yes") ) :
?>
<section class="feature-section bg-light padding-t-100 padding-b-100" id="feature">
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
   <div class="ctasec margin-t-70">
      <a href="javascript:void(0);" class="btn" onclick="planpopup('annually-paid');">Start Free Trial</a> 
      <span class="devide">OR</span> 
      <a href="javascript:void(0)" class="btn nobg" onclick="popup('rq-demo');">Request Free Demo</a>
    </div>
  </div>
</section>
<?php endif; ?>


<?php 
$videoSection = get_field('video-col');
if( isset($videoSection['is_enabled']) && ($videoSection['is_enabled'] == "yes") ) :
$videoPoster  = get_bloginfo('template_url').'/assets/images/video-banner.jpg';
$videoURL     = 'https://media.geeksforgeeks.org/wp-content/uploads/20200409094356/Placement100-_-GeeksforGeeks2.mp4';

if( isset( $videoSection['image'] ) && is_array( $videoSection['image'] ) ){
  //print_r( $videoSection['image'] );
  //$videoPoster  = getwebMediaSrc( $videoSection['image'] );
  $videoPoster  = $videoSection['image']['url'];
  if( empty($videoPoster) ){
  $videoPoster  = get_bloginfo('template_url').'/assets/images/video-banner.jpg';
  }
}

if( isset( $videoSection['video_url'] ) && !empty( $videoSection['video_url'] ) ){
$videoURL = $videoSection['video_url'];
}
?>
<section class="customer-testimonial-section tranform-data padding-t-70 padding-b-100">
  <div class="container">
    <div class="head-txt text-center">
      <?php echo $videoSection['top_text']; ?>
    </div>
    <div class="image-wrap margin-t-70">
      <video autoplay playsinline controls poster="<?php echo $videoPoster; ; ?>">
        <source src="<?php echo $videoURL; ?>" type="video/mp4">
      </video>
    </div>
    <div class="ctasec margin-t-70">
      <a href="javascript:void(0);" class="btn" onclick="planpopup('annually-paid');">Start Free Trial</a> 
      <span class="devide">OR</span> 
      <a href="javascript:void(0)" class="btn nobg" onclick="popup('rq-demo');">Request Free Demo</a>
    </div>
  </div>
</section>
<?php endif; ?>

<!--Counter Section Start From Here-->
<div class="count-box-section padding-t-100 padding-b-100">
  <div class="container bg-light">
    <div class="head-txt text-center">
      <h3>What Makes Workstatus Different</h3>
    </div>
    <div class="count-box-outer dis-flex margin-t-70">
      <div class="count-box flex-4">
        <span class="count-box-big"><div class="txt-local">5K+</div><div class="txt-int">5M+</div></span>
        <span class="count-box-small">Companies using worldwide</span>
      </div>
      <div class="count-box flex-4">
        <span class="count-box-big"><div class="txt-local">+37%</div><div class="txt-int">+34%</div></span>
        <span class="count-box-small">Increased Productivity</span>
      </div>
      <div class="count-box flex-4">
        <span class="count-box-big">+15%</span>
        <span class="count-box-small">Improved Attendance</span>
      </div>
      <div class="count-box flex-4">
        <span class="count-box-big">67+</span>
        <span class="count-box-small">Countries using Workstatus</span>
      </div>
    </div>
  </div>
</div>

<?php 
$benefitsRow = get_field('ws-benefits');
if( isset( $benefitsRow['is_enabled'] ) && ($benefitsRow['is_enabled'] == "yes") ) :
?>
<section class="benefits-section bg-light padding-t-100 padding-b-100">
 <div class="container">
    <div class="head-txt text-center">
       <?php echo $benefitsRow['top_text']; ?>
    </div>

    <div class="dis-flex feature-outer margin-t-100">
       <div class="flex-2 content-box">
        <?php 
        if( $benefitsRow['rows'] ){
          foreach( $benefitsRow['rows'] as $row ){
          echo '<div class="box">'.$row['content'].'</div>';
          }
        }
        ?>
       </div>
       <div class="flex-2 image-box">
          <?php 
          if( isset($benefitsRow['image']) && is_array($benefitsRow['image']) ){
            echo pxlGetPtag($benefitsRow['image']);
          } 
          ?>          
       </div>
    </div>
 </div>
</section>
<?php endif; ?>

<!--Customer Reviews Start From Here-->
<section class="customer-testimonial-section padding-t-100 padding-b-100">
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
    <?php endif; ?>
    <!--Customer Reviews Ends Here-->
    <div class="ctasec margin-t-70">
      <a href="javascript:void(0);" class="btn" onclick="planpopup('annually-paid');">Start Free Trial</a> 
      <span class="devide">OR</span> 
      <a href="javascript:void(0)" class="btn nobg" onclick="popup('rq-demo');">Request Free Demo</a>
    </div>
  </div>
</section>
<?php 
  $helps = get_field('hw-help');
  if( isset($helps['is_enabled']) && ($helps['is_enabled'] == "yes") ) :
  ?>  
<section class="how-ws padding-t-100 padding-b-100" id="howitworks">
  <div class="container">
    <div class="head-txt text-center">
      <?php echo $helps['top_text']; ?>
    </div>
    <?php 
      $inCards = $helps['cards'];
      if( $helps['cards'] ){ ?>
    <div class="dis-flex col-box-outer margin-t-60">
      <?php foreach( $helps['cards'] as $card ) : ?>
      <div class="flex-3 box-3">
        <div class="box">
          <?php 
            if( isset($card['img']) && is_array($card['img']) ){
            echo pxlGetPtag($card['img']);
            } 
            ?>
          <?php echo $card['content']; ?>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
    <?php } ?>
  </div>
</section>
<?php endif; ?>
<!--How to use Workstatus time tracking software section start from here--> 
<?php
  $hwUse = get_field('hw-use');
  if( isset($hwUse['is_enabled']) && ($hwUse['is_enabled'] == "yes") ) :
  ?>
<section id="has-ws-timetrack" class="ws-timetrack bg-light padding-t-100 padding-b-100">
  <div class="container">
    <div class="dis-flex justify-sb">
      <div class="image-section">
        <?php 
          if( $hwUse['image'] ){
            echo pxlGetPtag( $hwUse['image'] );
          }
          ?>      
      </div>
      <div class="content-sec">
        <h2><?php echo $hwUse['title']; ?></h2>
        <div class="track-outer">
          <?php 
            if( $hwUse['title'] ){
              $i;
              foreach( $hwUse['listings'] as $row ){ $i++;
              $isActive = ( $i === 1 ) ? " active" : "";  
              echo '<div class="track-accordion-item-outer '.$isActive.'">
              <div class="nocount"></div>
              <h3 class="track-accordion-toggle">'.$row['title'].'</h3>
              <div class="faq-accordion-content">
                <p>'.$row['text'].'</p>
              </div>
            </div>';    
              }
            }
            ?>      
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>
<div class="pricing-tabs padding-t-100 padding-b-100" id="pricing">
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
              <h3><?php 
                //echo ( isset($wsApiResponse[0]->name) ) ? $wsApiResponse[0]->name : 'FREE FOREVER'; 
                echo '7 days Free Trial';
                ?></h3>
              <div class="amount"><strong><?php echo $currency; ?>0</strong></div>
              <br>
              <a href="javascript:void(0);" class="price_btn" onclick="planpopup('annually-free');">Start Free Trial</a>
            </div>
            <div class="bottomtext">
              <div class="f-right">
                <?php the_field('finc-p1'); ?>  
              </div>
              <div class="f-cross">
                <?php the_field('finc-p1n'); ?>  
              </div>
            </div>
          </div>
          <div class="column">
            <div class="toptext">
              <h3><?php echo ( isset($wsApiResponse[1]->name) ) ? $wsApiResponse[1]->name : 'Premium'; ?></h3>
              <div class="amount"><strong><?php echo $currency; ?><?php echo ( isset($wsApiResponse[1]->annual_price) ) ? round($wsApiResponse[1]->annual_price/12) : '199'; ?></strong></div>
              <small>user / month</small>
              <a href="javascript:void(0);" onclick="planpopup('annually-paid');" class="price_btn">Signup</a>
            </div>
            <div class="bottomtext">
              <div class="f-right">
                <?php the_field('finc-p2'); ?>  
              </div>
              <div class="f-cross">
                <?php the_field('finc-p2n'); ?>  
              </div>
            </div>
          </div>
          <div class="column">
            <div class="toptext">
              <h3><?php echo ( isset($wsApiResponse[2]->name) ) ? $wsApiResponse[2]->name : 'Enterprise'; ?></h3>
              <p><?php echo ( isset($wsApiResponse[2]->description) ) ? $wsApiResponse[2]->description : ''; ?></p>
              <a href="javascript:void(0);" onclick="popup('rq-demo');" class="price_btn">Request A Demo</a>
            </div>
            <div class="bottomtext">
              <div class="f-right">
                <?php the_field('finc-p3'); ?>  
              </div>
              <div class="f-cross">
                <?php the_field('finc-p3n'); ?>  
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="pricetab2" class="pricing-contents">
        <!--<h5><strong>Get two months free</strong> when you pay annually.</h5>-->
        <div class="price-cards padding-t-70">
          <div class="column">
            <div class="toptext">
              <h3><?php 
                //echo ( isset($wsApiResponse[0]->name) ) ? $wsApiResponse[0]->name : 'FREE FOREVER'; 
                echo '7 days Free Trial';
                ?></h3>
              <div class="amount"><strong><?php echo $currency; ?>0</strong></div>
              <br>
              <a href="javascript:void(0);" class="price_btn" onclick="planpopup('monthly-free');">Start Free Trial</a>
            </div>
            <div class="bottomtext">
              <div class="f-right">
                <?php the_field('finc-p1'); ?>  
              </div>
              <div class="f-cross">
                <?php the_field('finc-p1n'); ?>  
              </div>
            </div>
          </div>
          <div class="column">
            <div class="toptext">
              <h3><?php echo ( isset($wsApiResponse[1]->name) ) ? $wsApiResponse[1]->name : 'Premium'; ?></h3>
              <div class="amount"><strong><?php echo $currency; ?><?php echo ( isset($wsApiResponse[1]->price) ) ? $wsApiResponse[1]->price : '299'; ?></strong></div>
              <small>user / month</small>
              <a href="javascript:void(0);" class="price_btn" onclick="planpopup('monthly-paid');">Signup</a>
            </div>
            <div class="bottomtext">
              <div class="f-right">
                <?php the_field('finc-p2'); ?>  
              </div>
              <div class="f-cross">
                <?php the_field('finc-p2n'); ?>  
              </div>
            </div>
          </div>
          <div class="column">
            <div class="toptext">
              <h3><?php echo ( isset($wsApiResponse[2]->name) ) ? $wsApiResponse[2]->name : 'Enterprise'; ?></h3>
              <p><?php echo ( isset($wsApiResponse[2]->description) ) ? $wsApiResponse[2]->description : ''; ?></p>
              <a href="javascript:void(0);" onclick="popup('rq-demo');" class="price_btn">Request A Demo</a>
            </div>
            <div class="bottomtext">
              <div class="f-right">
                <?php the_field('finc-p3'); ?>  
              </div>
              <div class="f-cross">
                <?php the_field('finc-p3n'); ?>  
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Pricing Table Section Start Ends Here-->
<!--Supported Device Start From Here-->
<section class="supported-device padding-t-100 padding-b-100">
  <div class="container">
    <div class="head-txt text-center">
      <h2>Workstatus Supports All Platforms/Devices</h2>
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
          </div>
          <div class="flex-6">
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
<section class="ws-journey" id="starttrail">
<div class="container">
  <div class="dis-flex">
    <div class="flex-2 content-section">
      <?php 
      $fctaText = get_field('fcta-text');
      if( $fctaText ){
        echo $fctaText;
      }else{
        echo '<h2>Start your Workstatus journey today!</h2>
      <p>Get detailed and clean activity reports of your team. Track time efficiently. </p>';  
      }
      ?>
      
      <div class="ctasec margin-t-70">
      <a href="javascript:void(0)" class="btn" onclick="planpopup('annually-paid');">Start Free Trial</a> <span class="devide">OR</span> 
      <a href="javascript:void(0)" class="btn nobg" onclick="popup('rq-demo');">Request Free Demo</a></div>
    </div>
    <div class="flex-2 img-section">
      <picture>
        <source type="image/webp" srcset="<?php bloginfo('template_url'); ?>/assets/images/footer-boy.png">
        <source type="image/png" srcset="<?php bloginfo('template_url'); ?>/assets/images/footer-boy.png">
        <img class="local" loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/images/footer-boy.png" alt="Invoicera" width="547" height="631">
      </picture>
      <picture>
         <source type="image/webp" srcset="<?php bloginfo('template_url'); ?>/assets/images/fotintern-boy.png">
         <source type="image/png" srcset="<?php bloginfo('template_url'); ?>/assets/images/fotintern-boy.png">
         <img class="internat" loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/images/fotintern-boy.png" alt="Invoicera" width="450" height="494">
       </picture>
    </div>
  </div>
</div>
</section>
<!--Supported Device Ends From Here-->
<section style="display:none;" class="ws-journey padding-t-80 padding-b-80" id="btm-form">
  <div class="container">
    <div class="dis-flex">
      <div class="flex-2">
        <?php the_field('ws-journey'); ?>
      </div>
      <div class="flex-2 form-sec">
        <div class="sigupform footer-form">
          <?php get_template_part( 'inc/form', 'v5.0', ['slot' => 2] ); ?>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="footer-sec">
<div class="container">
  <div class="footer-top">
    <div class="dis-flex other-con">
      <div class="flex-4">
        <p><strong>Our Offices:</strong></p>
      </div>
      <div class="flex-4">
        <div class="addwrap">
          <img loading="lazy" src="https://www.workstatus.io/l/wp-content/themes/ws-landing/assets/images/us-flag.svg" alt="flag" width="30" height="22">
          <p>5900 Balcones Drive, STE 100, Austin, TX 78731, USA</p>
        </div>
      </div>
      <div class="flex-4">
        <div class="addwrap">
          <img loading="lazy" src="https://www.workstatus.io/l/wp-content/themes/ws-landing/assets/images/uk-flag.svg" alt="flag" width="30" height="22">
          <p>167-169 Great Portland Street, 5th Floor, London W1W 5PF, UK</p>
        </div>
      </div>
      <div class="flex-4">
        <div class="addwrap">
          <img loading="lazy" src="https://www.workstatus.io/l/wp-content/themes/ws-landing/assets/images/flag-icon01.svg" alt="flag" width="30" height="22">
          <p>Central One District, C1 Building, Level 1, Dubai World
            Trade Centre, Level 1 P.O.Box 114142, Dubai, United Arab Emirates
          </p>
        </div>
      </div>
      <div class="flex-4">
        <div class="addwrap">
          <img loading="lazy" src="https://www.workstatus.io/l/wp-content/themes/ws-landing/assets/images/flag-icon02.svg" alt="flag" width="30" height="22">
          <p>10th Floor, Tower-B, Unitech Cyber Park, Sector - 39, Gurugram, Haryana-122001</p>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="footer-bottom text-center">© workstatus.io All rights reserved.</div>
</section>

<div class="popup-form free-demopop">
  <div id="formPopup" class="popup-wrapper" style="display:none">
    <div class="popWrap">
      <div class="popup-content p-0">
        <span class="closeicon"></span>
        <div class="left-section">
          <picture>
            <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/images/logo-white.svg" alt="Logo" width="179" height="24">
          </picture>
          <div class="content">
            <h2 class="ct-demo"><span class="lt-blue">Schedule A Free Demo</span> <br>At Your Convenience</h2>
            <h2 class="ct-call"><span class="lt-blue">Schedule A Free Call</span> <br>At Your Convenience</h2>
            <p>Get answers to all your queries. Learn about all features in Workstatus that can <span class="lt-blue">make your team 37% more productive.</span>
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
              //$formHeading = get_field('form_heading', get_the_ID());
              //echo ($formHeading) ? $formHeading : "Request A Demo" ; 
              ?>
              <h2 class="ct-demo">Let Us Take You on a Personalized Virtual Tour Of Workstatus</h2>
              <h2 class="ct-call">Enter your Details</h2>
            </div>
            <?php get_template_part('inc/form', 'v5.1'); ?>
          </div>
          <!--//.col-->
        </div>
      </div>
    </div>
  </div>
  <div id="signupformPopup" class="popup-wrapper nanovar5">
    <div class="popWrap">
      <div class="popup-content">
        <span class="closeicon-sg"></span>
        <div class="col">
          <div class="top-section">
            <h2>Create Your Account</h2>
          </div>
          <div class="sigupform">
            <?php get_template_part('inc/form', 'v5.0', ['slot' => 3]); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<input type="hidden" value="0" id="myhiddenid">
<?php get_footer();?>
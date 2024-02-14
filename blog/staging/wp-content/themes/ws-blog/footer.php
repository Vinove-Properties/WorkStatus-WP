<?php //global $wsloginlink, $wsreglink; 
?>
<footer class="site__footer">
  <div class="container">
    <div class="flex_row">
      <div class="column fcol1">
        <h6>Workstatus</h6>
        <ul>
          <li><a href="<?php echo site_url(); ?>/about">About us</a></li>
          <li><a href="<?php echo site_url(); ?>/reviews">Reviews</a></li>
          <li><a href="<?php echo site_url(); ?>/press">Press</a></li>
          <li><a href="<?php echo site_url(); ?>/resources">Resources</a></li>
          <li><a href="https://www.workstatus.io/blog/">Blog</a></li>
          <li><a href="<?php echo site_url(); ?>/how-tracking-works">How Workstatus Works</a></li>
        </ul>
      </div>
      <div class="column fcol2">
        <h6>Tools</h6>
        <ul>
          <li><a href="<?php echo site_url(); ?>/tools/free-timecard-calculator">Free Time Card Calculator</a></li>
          <li><a href="<?php echo site_url(); ?>/tools/free-timesheet-templates">Free timesheet templates</a></li>          
        </ul>
      </div>
      <div  class="column fcol3">
        <h6>Platforms</h6>
        <ul>
          <li><a href="<?php echo site_url(); ?>/mac">Mac</a></li>
          <li><a href="<?php echo site_url(); ?>/windows">Windows</a></li>
          <li><a href="<?php echo site_url(); ?>/linux">Linux</a></li>
          <li><a href="<?php echo site_url(); ?>/iphone">iOS</a></li>
          <li><a href="<?php echo site_url(); ?>/android">Android</a></li>
        </ul>
      </div>
      <div  class="column fcol4">
        <h6>Compare</h6>
        <ul>          
          <li><a href="<?php echo site_url(); ?>/hubstaff-alternative">Hubstaff Alternative</a></li>
          <li><a href="<?php echo site_url(); ?>/desktime-alternative">Desktime Alternative</a></li>
          <li><a href="<?php echo site_url(); ?>/timedoctor-alternative">Time Doctor Alternative</a></li>
          <li><a href="<?php echo site_url(); ?>/insightful-alternative">Insightful Alternative</a></li>
          <li><a href="<?php echo site_url(); ?>/we360ai-alternative">We360.ai Alternative</a></li>
          <li><a href="<?php echo site_url(); ?>/activtrak-alternative">ActivTrak Alternative</a></li>
          <li><a href="<?php echo site_url(); ?>/teramind-alternative">Teramind Alternative</a></li>
          <li><a href="<?php echo site_url(); ?>/monitask-alternative">Monitask Alternative</a></li>
        </ul>
      </div>
      <div  class="column fcol5">
        <h6>Support</h6>
        <ul>
          <li><a href="https://support.Workstatus.io/en/">Help Center</a></li>
          <li><a href="<?php echo site_url(); ?>/downloads">Downloads</a></li>
          <li><a href="<?php echo site_url(); ?>/affiliates">Affiliates</a></li>
          <li><a href="<?php echo site_url(); ?>/faq">FAQs</a></li>
        </ul>
      </div>
      <div  class="column fcol6">
        <div class="footer-logo">
          <a href="<?php echo site_url(); ?>/" title="Workstatus">
            <picture>
              <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assests/images/logo-white.svg" width="150"
                height="25" alt="Workstatus">
            </picture>
          </a>
        </div>
        <ul>
          <li><a class="phone" href="tel:+91-9582957066">+91-9582957066</a></li>
          <li><a href="mailto:hello@workstatus.io">hello@workstatus.io</a></li>
        </ul>
        <?php
        /*
        echo require_once get_template_directory() .'/common/inc/config.inc.php';  
        print_r($ws_ctas); die;
        */
        // if( ($ws_ctas !== false) && ($ws_ctas['show_this'] === true) ){
        // echo '<div class="regBtn"><a data-href="'.$RegLink.'" href="javascript:void(0);" class="primary_btn1" onclick="return get_ws_signupform(this);">'.$ws_ctas['cta_text'].'</a></div>';  
        // }

        ?>
        <div class="regBtn">
          <a href="javascript:void(0);" onclick="return get_ws_signupform(1, 'monthly');"  class="primary_btn1">Start Free Trial</a>
        </div>
        <div class="social_icons">
          <a href="https://twitter.com/Workstatusapp" target="blank" rel="nofollow"><i class="icon1"></i></a>
          <a href="https://www.facebook.com/Workstatussoftware/" target="blank" rel="nofollow"><i class="icon2"></i></a>
          <a href="https://www.linkedin.com/company/Workstatusapp/" target="blank" rel="nofollow">
          <i class="icon3"></i></a>
          <a href="https://www.youtube.com/channel/UC9asR7eiptbMZq12EJhTPNw" target="blank" rel="nofollow"><i class="icon4"></i></a>
          <a href="https://www.instagram.com/Workstatusapp/" target="blank" rel="nofollow">
          <i class="icon5"></i></a>
        </div>
      </div>
    </div>
    <div class="footer-sec">
    <div class="footer-top">
        <div class="dis-flex">
          <div class="flex-4">
            <p><strong>Our Offices:</strong></p>
          </div>
          <div class="flex-4"> 
            <div class="addwrap">
            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assests/images/flag-icon01.svg" 
            alt="flag" width="35" height="35">
            <p>541, 8W, Level 5, Dubai Airport Free Zone, Dubai, United Arab Emirates</p>
        </div>
          </div>
          <div class="flex-4">
          <div class="addwrap">
          <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assests/images/flag-icon02.svg"
                  alt="flag" width="35" height="35">
            <p>2nd Floor, 55P, Sector 44, Gurugram 122003, Haryana
            </p>
        </div>
          </div>
          <div class="flex-4">
          <div class="addwrap">
          <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assests/images/flag-icon02.svg"
                  alt="flag" width="35" height="35">
            <p>3rd Floor, Fusion Square, 5A & 5B, Sector 126, Noida 201303
            </p>
        </div>
          </div>
        </div>
      </div>
      </div>
    <div class="bottom-links">
    <div class="ftwrap">
      <?php
      $copyRight  = "&copy;";
      $suPopup    = "Copyright";
      $is_staging = (isset( $_SERVER['PHP_SELF']) && (strpos( $_SERVER['PHP_SELF'],'w2wp') !== false)) ? true : false;
      if( is_user_logged_in() ){
        if( $is_staging === true ){
          $copyRight = "<a href='".get_edit_post_link()."'>&copy;</a>";    
        }
      }

      if( $is_staging === true ){
        $suPopup = "<a href='javascript:void(0);' onclick='showSuPopup();'>Copyright</a>";    
      }
      ?>
      <p class="copyright">
      <?php echo $suPopup; ?> <?php echo $copyRight; ?> 2021 - <?php echo date("Y"); ?>. All Rights Reserved. A Vinove Company.
      </p>
      <ul class="privacy-links">
        <li class="hide">|</li>
        <li><a href="<?php echo site_url(); ?>/privacy-policy" class="para_extrasmall">Privacy Policy </a></li>
        <li class="hide1">|</li>
        <li><a href="<?php echo site_url(); ?>/terms-of-service" class="para_extrasmall">Terms of Service</a></li>
      </ul> 
    </div>     
      <!-- <div class="gpw"></div> -->
      <!-- 
      <div class="app-store">
      <a href="https://apps.apple.com/us/app/Workstatus-tm/id1570416295"><img width="136" height="38" src="https://www.workstatus.io/assests/images/apple.png" alt="apple"  loading="lazy"></a>
      <a href="https://play.google.com/store/apps/details?id=com.vinove.workstatus&pcampaignid=pcampaignidMKT-Other-global-all-co-prtnr-py-PartBadge-Mar2515-1"><img  width="136" height="38" src="https://www.workstatus.io/assests/images/googleplay.png" alt="google play"  loading="lazy"></a>
      </div> 
      -->
    </div>
  </div>
</footer>
<?php 


if( is_single() ){
echo '<div class="banner-form inv-pop">
<div id="sgl-vpop" class="popup-wrapper">
<div class="popWrap">
<div class="popup-content">
<span onclick="gblClosePopup(\'sgl-vpop\')" class="closeicon-vc"></span>
<iframe id="sgl-video" class="videoIframe js-videoIframe" allowfullscreen data-src="https://www.youtube.com/embed/UId2lnLDJ20?enablejsapi=1&html5=1&mute=1"></iframe>
</div></div></div></div>';
}

get_template_part('inc/demo', 'form'); 
get_template_part('inc/signup', 'form');
?>
<div class="banner-form super-form">
<div id="ws-intent-popup" class="popup-wrapper exit-intent-popup">
<div class="popWrap">
<div class="popup-content">
<span class="cross-icon" onclick="close_intform();" style="z-index: 100;">
<img src="<?php bloginfo('template_url'); ?>/assets/images/signup/cross.png" alt="">
</span>
<img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/images/pop-image.svg" alt="workstatus"  width="189" height="172">

  <h2>Supercharge Your Team's Productivity!</h2>
  <p>Get a 7-day free FULL FEATURE trial of Workstatus now. Boost efficiency, accountability, and results – anytime, anywhere. </p>
  <div class="ctasec">
    <?php 
    $hasLogin = getCTAstatus();
    if($hasLogin !== false ){
    echo '<a href="javascript:void(0);" class="primary_btn1" onclick="return get_ws_signupform('.$hasLogin['pid'].', \''.$hasLogin['type'].'\');">'.$hasLogin['cta_text'].'</a>';
    } 
    ?>
    <a class="bkdemo" onclick="call_demows();" href="javascript:void(0);">Book a Demo</a>
  </div>
</div>
</div>
</div>
</div>
<?php wp_footer(); ?>
</body>
</html>
<?php $site_url = "https://www.workstatus.io"; ?>
<footer class="site__footer">
  <div class="container">
    <div class="flex_row">
      <div class="column fcol1">
        <h6>Workstatus</h6>
        <ul>
          <li><a href="<?php echo $site_url; ?>/about">About us</a></li>
          <li><a href="<?php echo $site_url; ?>/reviews">Reviews</a></li>
          <li><a href="<?php echo $site_url; ?>/press">Press</a></li>
          <li><a href="<?php echo $site_url; ?>/resources">Resources</a></li>
          <li><a href="<?php echo trailingslashit( get_bloginfo('url') ); ?>">Blog</a></li>
          <li><a href="<?php echo $site_url; ?>/how-tracking-works">How Workstatus Works</a></li>
          <li><a href="<?php echo $site_url; ?>/customization">Customization</a></li>
          <li><a href="<?php echo $site_url; ?>/demo">Product Tour</a></li>
        </ul>
      </div>
      <div class="column fcol2">
        <h6>Tools</h6>
        <ul>
          <li><a href="https://www.workstatus.io/tools/free-timecard-calculator">Free Time Card Calculator</a></li>
          <li><a href="https://www.workstatus.io/tools/free-timesheet-templates">Free Timesheet Templates</a></li>
        </ul>
        <h6>Platforms</h6>
        <ul>
          <li><a href="<?php echo $site_url; ?>/apps/mac">Mac</a></li>
          <li><a href="<?php echo $site_url; ?>/apps/windows">Windows</a></li>
          <li><a href="<?php echo $site_url; ?>/apps/linux">Linux</a></li>
          <li><a href="<?php echo $site_url; ?>/apps/iphone">iOS</a></li>
          <li><a href="<?php echo $site_url; ?>/apps/android">Android</a></li>
        </ul>
      </div>
      <div class="column fcol4">
        <h6>Alternatives</h6>
        <ul>
          <li><a href="<?php echo $site_url; ?>/hubstaff-alternative">Hubstaff Alternative</a></li>
          <li><a href="<?php echo $site_url; ?>/desktime-alternative">Desktime Alternative</a></li>
          <li><a href="<?php echo $site_url; ?>/timedoctor-alternative">Time Doctor Alternative</a></li>
          <li><a href="<?php echo $site_url; ?>/insightful-alternative">Insightful Alternative</a></li>
          <li><a href="<?php echo $site_url; ?>/we360ai-alternative">We360.ai Alternative</a></li>
          <li><a href="<?php echo $site_url; ?>/activtrak-alternative">ActivTrak Alternative</a></li>
          <li><a href="<?php echo $site_url; ?>/teramind-alternative">Teramind Alternative</a></li>
          <li><a href="<?php echo $site_url; ?>/monitask-alternative">Monitask Alternative</a></li>
        </ul>
      </div>
      <div class="column fcol7">
        <h6>Workstatus Comparison</h6>
        <ul>
          <li><a href="<?php echo $site_url; ?>/teramind-vs-interguard-vs-workstatus">Teramind vs Interguard</a></li>
          <li><a href="<?php echo $site_url; ?>/hubstaff-vs-clockify-vs-workstatus">Hubstaff vs Clockify</a></li>
          <li><a href="<?php echo $site_url; ?>/hubstaff-vs-insightful-vs-workstatus">Hubstaff vs Insightful</a></li>
          <li><a href="<?php echo $site_url; ?>/activtrak-vs-desktime-vs-workstatus">ActivTrak vs DeskTime</a></li>
          <li><a href="<?php echo $site_url; ?>/clockify-vs-monitask-vs-workstatus">Clockify vs MoniTask</a></li>
          <li><a href="<?php echo $site_url; ?>/insightful-vs-timedoctor-vs-workstatus">Insightful vs Timedoctor</a></li>
          <li><a href="<?php echo $site_url; ?>/activtrak-vs-timedoctor-vs-workstatus">Activtrak vs Timedoctor</a></li>
        </ul>
      </div>
      <div class="column fcol6">
        <h6>Support</h6>
        <ul>
          <li><a href="https://support.Workstatus.io/en/">Help Center</a></li>
          <li><a href="<?php echo $site_url; ?>/downloads">Downloads</a></li>
          <li><a href="<?php echo $site_url; ?>/partners">Partners</a></li>
          <li><a href="<?php echo $site_url; ?>/faq">FAQs</a></li>
          <li><a href="<?php echo $site_url; ?>/data-retention">Data Retention</a></li>
        </ul>
        <div class="footer-logo">
          <a href="https://www.workstatus.io/" title="Workstatus">
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
          if( ($ws_ctas !== false) && ($ws_ctas['show_this'] === true) ){
          echo '<div class="regBtn"><a data-href="'.$RegLink.'" href="javascript:void(0);" class="primary_btn1" onclick="return get_ws_signupform(this);">'.$ws_ctas['cta_text'].'</a></div>';  
          }
          
          ?>
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
              <p>10th Floor, Tower-B, Unitech Cyber Park, Sector - 39, Gurugram, Haryana-122001</p>
            </div>
          </div>
          <div class="flex-4">
            <div class="addwrap">
              <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assests/images/flag-icon02.svg"
                alt="flag" width="35" height="35">
              <p>11th Floor, Max Square, Noida-Greater Noida Expy, Sector 129, Noida, Uttar Pradesh 201304</p>
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
          $is_staging = (isset( $_SERVER['PHP_SELF']) && (strpos( $_SERVER['PHP_SELF'],'staging') !== false)) ? true : false;
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
          <li><a href="https://www.workstatus.io/privacy-policy" class="para_extrasmall">Privacy Policy </a></li>
          <li class="hide1">|</li>
          <li><a href="https://www.workstatus.io/terms-of-service" class="para_extrasmall">Terms of Service</a></li>
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
  <iframe id="sgl-video" class="videoIframe js-videoIframe" allowfullscreen data-src="https://www.youtube.com/embed/UId2lnLDJ20?enablejsapi=1&html5=1&mute=0"></iframe>
  </div></div></div></div>';
  }
  
  //get_template_part('inc/demo', 'form'); 
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

<div class="ebook-popup">
  <div id="cmnebook-popup" class="popup-wrapper" style="display:none;">
    <div class="popflex">
      <div class="popup-content">
      <span class="ebclose" onclick="_close_ebook_model();"></span>
        <div class="pdf-top">
          <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/ebook-img.svg" alt="workstatus"  width="337" height="241">
          <div class="text-box">
            <h3>The Founder's guide to share option schemes</h3>
            <p>Why, How and when to incentivise your employee with Etiquity</p>
          </div>
        </div>
        <div class="pdf-bottom">          
          <div id="_ebresponse" style="display:none;">
            <h2>Thank You!</h2>
            <p>Thank you for downloading our eBook. We hope you find it informative and helpful</p>
          </div>
          <form id="ebookFormElm" onsubmit="return _handleEbookSubmission(this);">
          <h2>Download Free <strong>E-Book</strong> Now</h2>
          <p>Lorem Ipsum is simply dummy text of the printing .</p>  
          <div class="form-wrap">            
            <div class="form-field">
              <label>Name*</label>
              <input name="name" class="input-fld" id="eb-name" type="text"  placeholder="Name">
              <small class="error-msg-section"></small>
            </div>
            <div class="form-field half">
              <label>Email Address*</label>
              <input name="email" class="input-fld" id="eb-email" type="email"  placeholder="Enter email Address">
              <small class="error-msg-section"></small>
            </div>
            <div class="form-field half">
              <label>phone No.</label>
              <input name="phone" class="input-fld" id="eb-phone" type="text"  placeholder="Enter phone No.">
              <small class="error-msg-section"></small>
            </div>
            <div class="form-field">
              <input type="hidden" id="elm_eb_pdf" name="_eb_pdf" value="">
              <input type="submit" id="post_ebook" class="downbtn" value="Download Free Ebook">
            </div>            
          </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<?php wp_footer(); ?>
</body>
</html>
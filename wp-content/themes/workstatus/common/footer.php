<footer class="site__footer">
  <div class="container">
    <div class="flex_row">
      <div class="column fcol1">
        <h6>Workstatus</h6>
        <ul>
          <li><a href="<?php echo SITE_URL; ?>/about">About us</a></li>
          <li><a href="<?php echo SITE_URL; ?>/reviews">Reviews</a></li>
          <li><a href="<?php echo SITE_URL; ?>/press">Press</a></li>
          <li><a href="https://www.workstatus.io/blog/">Our Blog</a></li>
          <li><a href="<?php echo SITE_URL; ?>/how-tracking-works">How Workstatus Works</a></li>
        </ul>
      </div>
      <div class="column fcol2">
        <h6>Products</h6>
        <ul>
          <li> <a href="<?php echo SITE_URL; ?>/time">Workstatus Time</a></li>
          <li><a href="<?php echo SITE_URL; ?>/tasks">Workstatus Tasks</a></li>
          <li><a href="<?php echo SITE_URL; ?>/desk">Workstatus Desk</a></li>
          <li><a href="<?php echo SITE_URL; ?>/field-service-management-software">Workstatus Field</a></li>
        </ul>
      </div>
      <div  class="column fcol3">
        <h6>Platforms</h6>
        <ul>
          <li><a href="<?php echo SITE_URL; ?>/mac">Mac</a></li>
          <li><a href="<?php echo SITE_URL; ?>/windows">Windows</a></li>
          <li><a href="<?php echo SITE_URL; ?>/iphone">iOS</a></li>
          <li><a href="<?php echo SITE_URL; ?>/android">Android</a></li>
        </ul>
      </div>
      <div  class="column fcol4">
        <h6>Compare</h6>
        <ul>
          <li><a href="<?php echo SITE_URL; ?>/we360ai-alternative">We360.ai Alternative</a></li>
          <li><a href="<?php echo SITE_URL; ?>/hubstaff-alternative">Hubstaff Alternative</a></li>
          <li><a href="<?php echo SITE_URL; ?>/desktime-alternative">Desktime Alternative</a></li>
          <li><a href="<?php echo SITE_URL; ?>/timedoctor-alternative">Time Doctor Alternative</a></li>
          <li><a href="<?php echo SITE_URL; ?>/insightful-alternative">Insightful Alternative</a></li>
        </ul>
      </div>
      <div  class="column fcol5">
        <h6>Support</h6>
        <ul>
          <li><a href="https://support.Workstatus.io/en/">Help Center</a></li>
          <li><a href="<?php echo SITE_URL; ?>/downloads">Downloads</a></li>
          <li><a href="<?php echo SITE_URL; ?>/affiliates">Affiliates</a></li>
          <li><a href="<?php echo SITE_URL; ?>/faq">FAQs</a></li>
        </ul>
      </div>
      <div  class="column fcol6">
        <div class="footer-logo">
          <a href="<?php echo SITE_URL; ?>/" title="Workstatus">
            <picture>
              <source type="image/webp" srcset="<?php echo SITE_URL; ?>/assests/images/footer-logo.webp">
              <source type="image/png" srcset="<?php echo SITE_URL; ?>/assests/images/footer-logo.png">
              <img loading="lazy" src="<?php echo SITE_URL; ?>/assests/images/footer-logo.png" width="150"
                height="19" alt="Workstatus">
            </picture>
          </a>
        </div>
        <ul>
          <li><a class="phone" href="tel:+91-9582957066">+91-9582957066</a></li>
          <li><a href="mailto:hello@workstatus.io">hello@workstatus.io</a></li>
        </ul>
        <?php 
          if( ($ws_ctas !== false) && ($ws_ctas['show_this'] === true) ){
          echo '<div class="regBtn"><a href="'.$RegLink.'" class="primary_btn1">'.$ws_ctas['cta_text'].'</a></div>';  
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
              <p><strong>UAE:</strong> Central One District, C1 Building, Level 1, Dubai World <br>
                Trade Centre, Level 1 P.O.Box 114142, Dubai, United Arab Emirates
              </p>
            </div>
            <div class="flex-4">
              <p><strong>India (Gurugram):</strong> 2nd Floor, 55P, Sector 44, 
                Gurugram 122003, Haryana
              </p>
            </div>
            <div class="flex-4">
              <p><strong>India (Noida):</strong> 3rd Floor, Fusion Square, 5A & 
                5B, Sector 126, Noida 201303
              </p>
            </div>
          </div>
        </div>
      </div>
    <div class="bottom-links">
      <p class="copyright">Copyright @ <?php echo date("Y"); ?></p>
      <ul class="privacy-links">
        <li class="hide">|</li>
        <li><a href="<?php echo SITE_URL; ?>/privacy-policy" class="para_extrasmall">Privacy Policy </a></li>
        <li class="hide1">|</li>
        <li><a href="<?php echo SITE_URL; ?>/terms-of-service" class="para_extrasmall">Terms of Service</a></li>
      </ul>
      <div class="app-store">
        <a href="https://apps.apple.com/us/app/Workstatus-tm/id1570416295"><img width="136" height="38" src="https://www.workstatus.io/assests/images/apple.png" alt="apple"  loading="lazy"></a>
        <a href="https://play.google.com/store/apps/details?id=com.vinove.workstatus&pcampaignid=pcampaignidMKT-Other-global-all-co-prtnr-py-PartBadge-Mar2515-1"><img  width="136" height="38" src="https://www.workstatus.io/assests/images/googleplay.png" alt="google play"  loading="lazy"></a>
      </div>
    </div>
  </div>
</footer>
<div class="banner-form">
  <div id="formPopup" class="popup-wrapper <?php echo ( isset( $_GET['book-demo'] ) ) ? ' is-active' : ''; ?>">
    <div class="popWrap">
      <div class="popup-content">
        <span class="closeicon"></span>
        <div class="top-section">
          <div class="top-section">
            <h2>Let us take you on a personalized <span class="purple">virtual<br class="linebrk"> tour of Workstatus</span></h2>
          </div>
        </div>
        <form method="post" id="ws-lead-form" action="<?php echo SITE_URL; ?>/thanks-demo-submission.php" 
          onsubmit="return vcCmnFormValidation();">
          <div class="form-wrap">
            <div class="form-group">
              <label>First Name*</label>
              <input type="text"  id="first_name" placeholder="Enter your first name" name="fname" maxlength="30">
              <span class="error"></span>
            </div>
            <div class="form-group">
              <label>Last Name*</label>
              <input  type="text"  id="last_name" placeholder="Enter your last name" name="lname" maxlength="30">
              <span class="error"></span>
            </div>
            <div class="form-group">
              <label>Email address*</label>
              <input  type="text"  id="cont_email" placeholder="Enter your email address" name="email" maxlength="50">
              <span class="error"></span>
            </div>
            <div class="form-group">
              <label>Phone no*</label>
              <div class="user-input">
                <input id="pcode" type="tel" name="cprefix" maxlength="5" class="pcode-prefix"
                  onkeydown="javascript:if(event.keyCode != 9) return false;" onmousedown="return false;">
                <input id="cont_phpne" type="tel" name="phone" maxlength="12" class="input-field">
                <span class="errors" id="phone-error"></span>
              </div>
            </div>
            <div class="form-group companygroup">
              <label>Company Name*</label>
              <input type="text" name="company"  maxlength="100" class="form-control" id="company_name" placeholder="Enter company name">
              <span class="error"></span>
            </div>
            <div class="form-group">
              <div id="help-ul" class="form-text-cont width-full">
                <label>Select company headcount*</label>
                <div class="select-box active input-field" onclick="apnSelect('help-ul');">
                  <input type="hidden" id="team-size" name="team-size" value="">
                  <span class="error"></span>
                  <a href="javascript:void(0);" class="select-first" id="label-wehelp">Select company headcount</a> 
                  <span class="arrow-btn"></span>
                </div>
                <div class="select-list">
                  <ul class="in-options">
                    <li onclick="setoptValue('Self-employed', 'label-wehelp', 'team-size', 'help-ul');">Self-employed</li>
                    <li onclick="setoptValue('1-10', 'label-wehelp', 'team-size', 'help-ul');">1-10</li>
                    <li onclick="setoptValue('11-50', 'label-wehelp', 'team-size', 'help-ul');">11-50</li>
                    <li onclick="setoptValue('51-200', 'label-wehelp', 'team-size', 'help-ul');">51-200</li>
                    <li onclick="setoptValue('201-500', 'label-wehelp', 'team-size', 'help-ul');">201-500</li>
                    <li onclick="setoptValue('501-1000', 'label-wehelp', 'team-size', 'help-ul');">501-1000</li>
                    <li onclick="setoptValue('1001-5000', 'label-wehelp', 'team-size', 'help-ul');">1001-5000</li>
                    <li onclick="setoptValue('5001-10000', 'label-wehelp', 'team-size', 'help-ul');">5001-10000</li>
                    <li onclick="setoptValue('10000+', 'label-wehelp', 'team-size', 'help-ul');">10000+</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="form-group width-full">
              <label>Please tell us about your requirements*</label>
              <textarea class="input-field" name="requirement" id="ws-requirement" 
                placeholder="Enter your requirement"></textarea>
              <span class="error"></span>
            </div>
            <div class="padd">
              <p><input class="mcheck" name="checkbox" type="checkbox" value="1" checked="">By filling this form, you agree to our&nbsp;<a href="https://www.workstatus.io/privacy-policy" rel=" noopener">Privacy Policy</a></p>
            </div>
            <div class="captForm">
              <div class="form-group">
                <div class="quizQ">
                  <span id="j-quiz">7 + 7</span>
                  <a href="javascript:void(0)" class="refreshbtn" onclick="generateWsQuiz()"></a>
                </div>
                <div class="quizAns">
                  <input type="text" name="captcha" placeholder="??" id="j-quiz-ans" onkeypress="ws_numcheck(event,this);">
                  <span class="error" id="captchaerror"></span>
                </div>
              </div>
              <div class="form-group justify">
                <input type="hidden" name="pageurl" value="<?php echo ws_permalink();?>">
                <input type="hidden" name="tracking_ip" value="<?php echo getUserIP();?>">
                <input type="hidden" name="referalurl" 
                  value="<?php echo (isset($_SESSION['referer']) && !empty($_SESSION['referer'])) ? 
                    $_SESSION['referer'] : ''; ?>">
                <input type="hidden" name="utm_source" 
                  value="<?php echo isset( $_SESSION['_utmsource'] ) ? $_SESSION['_utmsource'] : ''; ?>">
                <input type="hidden" name="utm_medium" 
                  value="<?php echo isset( $_SESSION['_utmmedium'] ) ? $_SESSION['_utmmedium'] : ''; ?>">
                <input type="hidden" name="utm_campaign" 
                  value="<?php echo isset( $_SESSION['_utmcampaign'] ) ? $_SESSION['_utmcampaign'] : ''; ?>">
                <input type="hidden" name="is-submitted" value="true">
                <input type="hidden" name="user-country" id="cont_country" value="">
                <button type="submit" class="btn" id="submitButton" name="submit">Book My Demo Now</button>
              </div>
            </div>
            <span class="note">Note : We Respect Your Privacy! Your details will never be shared with anyone for marketing purposes.</span>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- 
<div class="stickysec">
  <a id="shareDiv" class="searchBtn" onclick="myChat()"></a>
  <div id="myContacts">
    <div class="headTxt"><span>Support</span> <button class="closeBtn" onclick="myChat()"></button></div>
    <ul>
      <li id="cws-button" class="chat"><a onclick="$crisp.push(['do', 'chat:open'])"><i class="icon3"></i>Chat with us</a></li>
      <li><a href="mailto:hello@workstatus.io"><i class="icon2"></i>Email Us</a></li>
      <li class="mob-cont"><a class="phone" href="tel:+91-9582957066"><i class="icon1"></i> +91-9582957066</a></li>
      <li><a href="javascript:void(0)" onclick="feature_demows();"><i class="icon4"></i> Suggest a Feature</a></li>
      <li><a href="https://www.workstatus.io/report-bugs"><i class="icon5"></i>Report a bug</a></li>
    </ul>
  </div>
</div> 
-->
<?php 
  $thisFile = basename($_SERVER['PHP_SELF']); 
  if( $thisFile !== "pricing.php" ){ ?>
<script src="assests/js/intlTelInput.js"></script>
<?php }
  ?>
<script type="application/ld+json">
  {
  "@context": "https://schema.org",
  "@type": "LocalBusiness",
  "priceRange": "$15-$99",
  "image": "https://www.workstatus.io/assests/images/ws-ogimage.png",
  "@id": "",
  "name": " Workstatus| Employee Management Software",
  "address": {
  "@type": "PostalAddress",
  "streetAddress": "2nd Floor, 55P, Sector 44,",
  "addressLocality": "Gurugram",
  "addressRegion": "IN",
  "postalCode": "122003",
  "addressCountry": "IN"
  },
  "review": {
  "@type": "Review",
  "reviewRating": {
  "@type": "Rating",
  "ratingValue": "4.9",
  "bestRating": "5"
  },
  "author": {
  "@type": "Person",
  "name": "Workstatus"
  }
  },
  "url": "",
  "telephone": "+917042020782"
  }
</script>
<script type="application/ld+json">
  {
  "@context" : "http://schema.org",
  "@type" : "Review",
  "name" : "Workstatus - ",
  "url" : "",
  "image" : "https://www.workstatus.io/assests/images/ws-ogimage.png",
  "author" : "Workstatus",
  "reviewBody" : "Workstatus is one of the leading Employee , Staff, Team Productivity Management, Schduling, Attendance & Time Tracking Software.",
  "reviewRating" : {
  "@type" : "Rating",
  "ratingValue" : "5"
  },
  "itemReviewed" : {
  "@type" : "LocalBusiness",
  "name" : "Workstatus | Employee , Staff, Team Productivity Management, Schduling, Attendance & Time Tracking Software",
  "priceRange" : "$15 - $99",
  "image" : "https://www.workstatus.io/assests/images/ws-ogimage.png",
  "address" : {
  "@type" : "PostalAddress",
  "streetAddress" : "2nd Floor, 55P, Sector 44,",
  "addressLocality" : "Gurugram",
  "addressRegion" : "IN",
  "postalCode" : "122003",
  "telephone" : "+917042020782",
  "addressCountry" : {
  "@type" : "Country",
  "name" : "India"
  }
  }
  }
  }
</script>
<script type="application/ld+json">
  {
  "@context": "http://schema.org",
  "@type": "ProfessionalService",
  "priceRange" : "$15 - $99",
  "name": "Workstatus:Employee , Staff, Team Productivity Management, Schduling, Attendance & Time Tracking Software Company",
  "url": "",
  "image": "https://www.workstatus.io/assests/images/ws-ogimage.png",
  "description": "Workstatus is one of the leading Employee , Staff, Team Productivity Management, Schduling, Attendance & Time Tracking Software.",
  "telephone": "+917042020782",
  "address": {
  "@type": "PostalAddress",
  "streetAddress": "2nd Floor, 55P, Sector 44,",
  "addressLocality": "Gurugram",
  "addressRegion": "IN",
  "postalCode":"122003"
  }
  }
</script>
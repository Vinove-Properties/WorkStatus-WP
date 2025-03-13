<footer class="site__footer">
  <div class="container">
    <div class="flex_row">
      <div class="column fcol1">
        <h6>Workstatus</h6>
        <ul>
          <li><a href="<?php echo SITE_URL; ?>/about">About us</a></li>
          <li><a href="<?php echo SITE_URL; ?>/faq">FAQs</a></li>
          <li><a href="<?php echo SITE_URL; ?>/press">Press</a></li>
          <li><a href="https://www.workstatus.io/blog/">Our Blog</a></li>
        </ul>
      </div>
      <div  class="column fcol2">
        <h6>Why Workstatus</h6>
        <ul>
          <li><a href="<?php echo SITE_URL; ?>/how-tracking-works">How Workstatus Works</a></li>
          <!--<li><a href="#">Customer Stories</a></li>-->
          <li><a href="<?php echo SITE_URL; ?>/reviews">Reviews</a></li>
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
        </ul>
      </div>
      <div  class="column fcol6">
        <div class="footer-logo">
          <a href="<?php echo SITE_URL; ?>/" title="Workstatus">
            <picture>
              <source type="image/webp" srcset="<?php echo SITE_URL; ?>/assests/images/footer-logo.webp">
              <source type="image/png" srcset="<?php echo SITE_URL; ?>/assests/images/footer-logo.png">
              <img loading="lazy" src="<?php echo SITE_URL; ?>/assests/images/footer-logo.png" width="150"
                height="19" alt="site logo">
            </picture>
          </a>
        </div>
        <ul>
          <li><a class="phone" href="tel:+91-9582957066">+91-9582957066</a></li>
          <li><a href="mailto:hello@workstatus.io">hello@workstatus.io</a></li>
        </ul>
        <div class="regBtn"><a href="<?php echo $RegLink; ?>" class="primary_btn1">Free 14 Days Trial</a></div>
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
  <div id="formPopup" class="popup-wrapper">
    <div class="popWrap">
      <div class="popup-content">
        <span class="closeicon"></span>
        <div class="top-section">
          <h2>Request a live demo of <span class="purple">Workstatus</span></h2>
          <p>Get a full tour that's tailored to your business. From a 100% real human.</p>
        </div>
        <form name="theForm" method="post" id="ws-lead-form" action="<?php echo SITE_URL; ?>/tpl-thanks.php" onsubmit="return vcCmnFormValidation();">
          <div class="form-wrap">
            <div class="form-group">
              <input type="text"  id="first_name" placeholder="First Name*" name="fname"/>
              <span class="error"></span>
            </div>
            <div class="form-group">
              <input  type="text"  id="last_name" placeholder="Last Name*" name="lname">
              <span class="error"></span>
            </div>
            <div class="form-group">
              <input  type="text"  id="cont_email" placeholder="Email*" name="email">
              <span class="error"></span>
            </div>
            <div class="form-group-d">
              <div class="phone-wrap">
                <select name="countrycode" class="field">
                <?php 
                  $pcodes = getCountryPcode();
                  if( $pcodes ){
                     foreach ($pcodes as $code => $country){
                        if( $code === 91 ){
                           echo '<option value="'.$code.'" selected>+'.$code.'</option>';
                        }else{
                           echo '<option value="'.$code.'">+'.$code.'</option>';   
                        }
                        
                     }
                  }
                  ?>   
                </select>
                <div class="form-group">
                  <input  type="text"  id="cont_phpne" placeholder="Phone Number" name="phone">
                  <span class="error"></span>
                </div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" name="company" class="form-control" id="company_name" placeholder="Company Name" />
              <span class="error"></span>
            </div>
            <div class="form-group">
              <select id="team-size" name="team-size" class="field">
                <option value="">Select team size</option>
                <option value="Self-employed">Self-employed</option>
                <option value="1-10">1-10</option>
                <option value="11-50">11-50</option>
                <option value="51-200">51-200</option>
                <option value="201-500">201-500</option>
                <option value="501-1000">501-1000</option>
                <option value="1001-5000">1001-5000</option>
                <option value="5001-10000">5001-10000</option>
                <option value="10000+">10000+</option>
              </select>
              <span class="error"></span>
            </div>
            <div class="captForm">
              <div class="form-group">
                <div class="quizQ">
                  <span id="j-quiz"></span>
                  <a href="javascript:void(0)" class="refreshbtn" onclick="generateWsQuiz()"></a>
                </div>
                <div class="quizAns">
                  <input type="text" name="captcha" placeholder="??" id="j-quiz-ans" onkeypress="ws_numcheck(event,this);" />
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
                <button type="submit" class="btn" id="submitButton" name="submit">Submit</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<div class="stickysec">
    <a id="shareDiv" class="searchBtn" onclick="myFunction()"></a>
    <div id="myContacts">
        <div class="headTxt"><span>Support</span> <btn class="closeBtn" onclick="myFunction()"></button></div>
        <ul>
            <li><a class="phone" href="tel:+91-9582957066"><i class="icon1"></i> +91-9582957066</a></li>
            <li><a href="mailto:hello@workstatus.io"><i class="icon2"></i>hello@workstatus.io</a></li>
        </ul>
    </div>
</div>
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
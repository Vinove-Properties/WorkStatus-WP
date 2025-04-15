<script type="text/javascript">
  function changerate(starno){
      var starthover = document.getElementById("starthover");
      starthover.classList.remove("one");
      starthover.classList.remove("two");
      starthover.classList.remove("three");
      starthover.classList.remove("four");
      starthover.classList.remove("five");
      starthover.classList.add(starno);
  }
  function ratenow(){
      var x = document.getElementById("star");
      var y = document.getElementById("rated");
  
      if (x.style.display === "block") {
      x.style.display = "none";
      y.style.display = "block";
      document.getElementById('ratebtn').innerHTML = 'Rate Us';
      } else {
      document.getElementById('ratebtn').innerHTML = 'Click to rate';
  
      x.style.display = "block";
      y.style.display = "none";
      }
  }
  let stars = [] //array to hold stars
  function star(event) {
    let icons = document.querySelectorAll('.star') // grab all icons
    let idx = Array.from(icons).indexOf(event.target) // get index of selected icon
    if (stars.includes(event.target.id)) { // if selected icon is in array of stars
      stars.splice(idx, stars.length ) // remove that icon and all following icons fro array
      for (let i = idx; i <= icons.length - 1; i++) { // loop thru all icons and set class and color
        icons[i].className = "fa fa-star-o star";
        icons[i].style.color = "black";
      }
    } else { // if selected icon is not in array of stars
      stars = [] // clear array
      for (let i = 0; i <= idx; i++) { // loop thru all icons and set class and color
        stars.push(icons[i].id) // add icon to array of stars
        icons[i].className = "fa fa-star star";
        icons[i].style.color = "#60B741";
      }
    }
    var total_points = stars.length.toString();
     var user_ip = '2a01:4f8:1c1c:aaef::1';
     var rating_page_url = "https://www.valuecoders.com/";
         
  var data = "total_points=" + total_points + "&user_ip=" + user_ip + "&rating_page_url=" + rating_page_url;
     var xhttp = new XMLHttpRequest();
     
     xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
         resobj = JSON.parse(this.responseText);
          document.getElementById("rate_msg").innerHTML = resobj.data;
         }
       };
       
     xhttp.open("POST", "https://www.valuecoders.com/wp-admin/admin-ajax.php?action=rateus", true);
     xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  
     xhttp.send(data);
   // document.getElementById("demo").innerHTML = stars.length.toString(); // set number of stars as length of array of stars
  }
</script>
<footer class="footer">
  <div class="container">
    <div class="dis-flex footer-top">
      <div class="dis-flex">
        <div class="flex-4">
          <a href="https://www.workstatus.io/"><img loading="lazy" src="./assests/footer-images/ws.svg" alt="flag" width="199" height="26">
          </a>
        </div>
        <div class="flex-4">
          <div class="addwrap">
            <img loading="lazy" src="./assests/footer-images/flag-icon01.svg" alt="flag" width="35" height="35">
            <p>541, 8W, Level 5, Dubai Airport Free Zone, Dubai, United Arab Emirates
            </p>
          </div>
        </div>
        <div class="flex-4">
          <div class="addwrap">
            <img loading="lazy" src="./assests/footer-images/flag-icon02.svg" alt="flag" width="35" height="35">
            <p>10th Floor, Tower-B, Unitech Cyber Park, Sector - 39, Gurugram, Haryana-122001
            </p>
          </div>
        </div>
        <div class="flex-4">
          <div class="addwrap">
            <img loading="lazy" src="./assests/footer-images/flag-icon02.svg" alt="flag" width="35" height="35">
            <p>11th Floor, Max Square, Noida-Greater Noida Expy, Sector 129, Noida, Uttar Pradesh 201304
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="dis-flex footer-middle">
      <div class="flex-5">
        <h4>Workstatus</h4>
        <ul class="spc">
          <li><a href="https://www.workstatus.io/about">About us</a></li>
          <li><a href="https://www.workstatus.io/reviews">Reviews</a></li>
          <li><a href="https://www.workstatus.io/press">Press</a></li>
          <li><a href="https://www.workstatus.io/blog/">Blog</a></li>
          <li><a href="https://www.workstatus.io/how-tracking-works">How Workstatus Works</a></li>
          <li><a href="https://www.workstatus.io/customization">Customization</a></li>
          <li><a href="https://www.workstatus.io/demo">Product Tour</a></li>
          <li><a href="https://www.workstatus.io/change-log">Revision History</a></li>
        </ul>
        <h4>Tools</h4>
        <ul>
          <li><a href="https://www.workstatus.io/tools/free-timecard-calculator">Free Time Card Calculator</a></li>
          <li><a href="https://www.workstatus.io/tools/free-timesheet-templates">Free Timesheet Templates</a></li>
        </ul>
      </div>
      <div class="flex-5">
        <h4>Workstatus Comparison
        </h4>
        <ul>
          <li><a href="#">Teramind vs Interguard</a></li>
          <li><a href="#">Hubstaff vs Clockify</a></li>
          <li><a href="#">Hubstaff vs Insightful</a></li>
          <li><a href="#">ActivTrak vs DeskTime</a></li>
          <li><a href="#">Clockify vs MoniTask</a></li>
          <li><a href="#">Insightful vs Timedoctor</a></li>
          <li><a href="#">Activtrak vs Timedoctor</a></li>
          <li><a href="#">Activtrak vs Timedoctor</a></li>
          <li><a href="#">Activtrak vs Timedoctor</a></li>
          <li><a href="#">Activtrak vs Timedoctor</a></li>
          <li><a href="#">Activtrak vs Timedoctor</a></li>
          <li><a href="#">Activtrak vs Timedoctor</a></li>
        </ul>
      </div>
      <div class="flex-5">
        <h4>Alternatives</h4>
        <ul>
          <li><a href="https://www.workstatus.io/hubstaff-alternative">Hubstaff Alternative</a></li>
          <li><a href="https://www.workstatus.io/desktime-alternative">Desktime Alternative</a></li>
          <li><a href="https://www.workstatus.io/timedoctor-alternative">Time Doctor Alternative</a></li>
          <li><a href="https://www.workstatus.io/insightful-alternative">Insightful Alternative</a></li>
          <li><a href="https://www.workstatus.io/we360ai-alternative">We360.ai Alternative</a></li>
          <li><a href="https://www.workstatus.io/activtrak-alternative">ActivTrak Alternative</a></li>
          <li><a href="https://www.workstatus.io/teramind-alternative">Teramind Alternative</a></li>
          <li><a href="https://www.workstatus.io/monitask-alternative">Monitask Alternative</a></li>
          <li><a href="https://www.workstatus.io/monitask-alternative">Monitask Alternative</a></li>
          <li><a href="https://www.workstatus.io/monitask-alternative">Monitask Alternative</a></li>
          <li><a href="https://www.workstatus.io/monitask-alternative">Monitask Alternative</a></li>
          <li><a href="https://www.workstatus.io/monitask-alternative">Monitask Alternative</a></li>
        </ul>
        
      </div>
      <div class="flex-5">
        <h4 style="opacity:0;">Alternatives
        </h4>
        <ul>
          <li><a href="https://www.workstatus.io/hubstaff-alternative">Hubstaff Alternative</a></li>
          <li><a href="https://www.workstatus.io/desktime-alternative">Desktime Alternative</a></li>
          <li><a href="https://www.workstatus.io/timedoctor-alternative">Time Doctor Alternative</a></li>
          <li><a href="https://www.workstatus.io/insightful-alternative">Insightful Alternative</a></li>
          <li><a href="https://www.workstatus.io/we360ai-alternative">We360.ai Alternative</a></li>
          <li><a href="https://www.workstatus.io/activtrak-alternative">ActivTrak Alternative</a></li>
        </ul>
        <div class="social-box social-m">
          <h3>Platforms</h3>
          <div class="dis-flex">
            <a href="https://www.facebook.com/workstatussoftware/">
              <picture>
                <img loading="lazy" src="./assests/footer-images/plate-01.svg" width="29" height="29" alt="facebook">
              </picture>
            </a>
            <a href="https://x.com/Workstatusapp">
              <picture>
                <img loading="lazy" src="./assests/footer-images/plate-02.svg" width="29" height="29" alt="twitter">
              </picture>
            </a>
            <a href="https://www.linkedin.com/company/Workstatusapp/">
              <picture>
                <img loading="lazy" src="./assests/footer-images/plate-03.svg" width="29" height="29" alt="linkedin">
              </picture>
            </a>
            <a href="https://www.instagram.com/Workstatusapp/">
              <picture>
                <img loading="lazy" src="./assests/footer-images/plate-04.svg" width="29" height="29" alt="instagram">
              </picture>
            </a>
            <a href="https://www.youtube.com/channel/UC9asR7eiptbMZq12EJhTPNw">
              <picture>
                <img loading="lazy" src="./assests/footer-images/plate-05.svg" width="29" height="29" alt="youtube">
              </picture>
            </a>
          </div>
        </div>
      </div>
      <div class="flex-5">
        <div>
        <h4>Support
        </h4>
        <ul>
          <li><a href="https://support.Workstatus.io/en/">Help Center</a></li>
          <li><a href="https://www.workstatus.io/downloads">Downloads</a></li>
          <li><a href="https://www.workstatus.io/partners">Partners</a></li>
          <li><a href="https://www.workstatus.io/faq">FAQs</a></li>
          <li><a href="https://www.workstatus.io/data-retention">Data Retention</a></li>
        </ul>
     </div>
     <div>
        <ul class="info">
          <li><a class="phone" href="tel:+91-9582957066">+91-9582957066</a></li>
          <li><a href="mailto:hello@workstatus.io">hello@workstatus.io</a></li>
        </ul>
        <div class="social-box">
          <h3>Follow Us</h3>
          <div class="dis-flex">
            <a href="https://www.facebook.com/workstatussoftware/" target="_blank">
              <picture>
                <img loading="lazy" src="./assests/footer-images/soc-01.svg" width="29" height="29" alt="facebook">
              </picture>
            </a>
            <a href="https://x.com/Workstatusapp" target="_blank">
              <picture>
                <img loading="lazy" src="./assests/footer-images/soc-02.svg" width="29" height="29" alt="twitter">
              </picture>
            </a>
            <a href="https://www.linkedin.com/company/Workstatusapp/" target="_blank">
              <picture>
                <img loading="lazy" src="./assests/footer-images//soc-03.svg" width="29" height="29" alt="linkedin">
              </picture>
            </a>
            <a href="https://www.instagram.com/Workstatusapp/" target="_blank">
              <picture>
                <img loading="lazy" src="./assests/footer-images/soc-04.svg" width="29" height="29" alt="instagram">
              </picture>
            </a>
            <a href="https://www.youtube.com/channel/UC9asR7eiptbMZq12EJhTPNw" target="_blank">
              <picture>
                <img loading="lazy" src="./assests/footer-images/soc-05.svg" width="29" height="29" alt="youtube">
              </picture>
            </a>
          </div>
        </div>
</div>
      </div>
    </div>
    <div class="dis-flex footer-bottom">
      <div class="flex-3 logo-box">
        <h3>DEVELOPED & MARKETED BY</h3>
        <div class="dis-flex">
          <a href="https://www.valuecoders.com/" data-wpel-link="external" target="_blank" rel="nofollow external noopener noreferrer">
            <picture>
              <img loading="lazy" src="./assests/footer-images/vc-logo.svg" width="180" height="33" alt="Invoicera">
            </picture>
          </a>
          <a href="https://www.pixelcrayons.com/" data-wpel-link="external" target="_blank" rel="nofollow external noopener noreferrer">
            <picture>
              <img loading="lazy" src="./assests/footer-images/pc-logo.svg" width="180" height="44" alt="Workstatus"> 
            </picture>
          </a>
        </div>
      </div>
      <div class="flex-3  footer-rating">
        <span class="star-outer" id="star" style="display:none">
        <span class="star-inner star-hover" id="starthover">
        <i class="star-icon vlazy" onclick="star(event)" onmouseover="changerate('one')"></i> 
        <i class="star-icon vlazy" onclick="star(event)" onmouseover="changerate('two')"></i> 
        <i class="star-icon vlazy" onclick="star(event)" onmouseover="changerate('three')"></i> 
        <i class="star-icon vlazy" onclick="star(event)" onmouseover="changerate('four')"></i> 
        <i class="star-icon vlazy" onclick="star(event)" onmouseover="changerate('five')"></i> 
        </span>
        <span id="rate_msg"></span>
        </span>   
        <div class="star-outer" id="rated">
          <span class="star-inner">
          <i class="star-icon"></i> 
          <i class="star-icon"></i> 
          <i class="star-icon"></i> 
          <i class="star-icon"></i> 
          <i class="star-icon"></i> 
          </span>
          4.9 out of 5.0 by
        </div>
        <div class="client-outer">
          <a href="javascript:void(0);" class="rate-us" onclick="ratenow()" id="ratebtn">Rate us</a> 1218 Businesses for Workforce Management
        </div>
      </div>
      <div class="flex-3 copyright">
        <a href="//www.dmca.com/Protection/Status.aspx?ID=9f4af2d1-a5c5-4031-903c-b6dfb2c56625" title="DMCA.com Protection Status" style="margin-left:0;margin-top: 20px; display:block" class="dmca-badge">
        <img src ="https://images.dmca.com/Badges/dmca-badge-w200-5x1-06.png?ID=9f4af2d1-a5c5-4031-903c-b6dfb2c56625"  alt="DMCA.com Protection Status" /></a>  <script src="https://images.dmca.com/Badges/DMCABadgeHelper.min.js"> </script>
      </div>
    </div>
  </div>
  <div class="footer-copyright">
    <div class="container">
      <div class="cop">
        <p class="copyright">
          Copyright © 2021 - 2025. All Rights Reserved. A Vinove Company.
        </p>
        <ul class="privacy-links">
          <li class="hide">|</li>
          <li><a href="http://localhost/WorkStatus-WP/staging/privacy-policy">Privacy Policy </a></li>
          <li class="hide">|</li>
          <li><a href="http://localhost/WorkStatus-WP/staging/terms-of-service">Terms of Service</a></li>
        </ul>
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
<div class="banner-form chat-popup">
  <div id="ws-intent-popup" class="popup-wrapper" style="display:none;">
    <div class="popWrap">
      <div class="popup-content">
        <div class="head-top">
          <span class="chat-logo"><img src="<?php echo SITE_URL; ?>/assests/images/logo-white.svg" alt="Workstatus" width="133" height="18">
          </span>
          <span class="cross-icon" onclick="if (!window.__cfRLUnblockHandlers) return false; close_intform();" style="z-index: 100;">
          <img src="<?php echo SITE_URL; ?>/assests/images/chat-cross.png" alt="">
          </span>
        </div>
        <div class="btmdiv">
          <span class="dt">Today, 3:33pm</span>
          <div class="bgwrap">
            <h2>Employee Timesheet Tracking Software</h2>
            <img loading="lazy" src="./assests/images/chat-image.svg" alt="workstatus" width="262" height="162">
            <p><strong>Tired of juggling multiple spreadsheets to track your team's work hours?</strong></p>
            <p>Simplify your life with Workstatus's Employee Timesheet Tracking Software today!</p>
          </div>
          <div class="ctasec">
            <a href="javascript:void(0);" class="primary_btn1">Yes, I want to start free trial</a>
            <a href="javascript:void(0);" class="primary_btn1 chatbtn">I want to Chat</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="banner-form wsf-signup">
  <div id="formPopup-su" class="popup-wrapper">
    <div class="popWrap">
      <div class="popup-content p-0">
        <span class="cross-icon" onclick="close_suform();" style="z-index: 100;">
        <img src="https://www.workstatus.io/staging/wp-content/themes/workstatus/assests/images/signup/cross.png" alt="">
        </span>
        <div class="left-section">
          <picture>
            <img loading="lazy" src="https://www.workstatus.io/staging/wp-content/themes/workstatus/assests/images/logo-white.svg" alt="Logo" width="179" height="24">
          </picture>
          <div class="content">
            <h2>Experience the <span class="lt-blue">Power of Productivity </span></h2>
            <p>Make your team 40% more efficient. Set up your account in just 2 minutes!</p>
            <h3>Top 3 reasons to trust <span class="lt-blue">Workstatus</span></h3>
          </div>
          <div class="performer-box">
            <div class="list-box">
              <ul>
                <li>AI-powered Insights</li>
                <li>Stealth or Visible Tracking</li>
                <li>Automated Timesheet</li>
              </ul>
            </div>
            <div class="second_box">
              <img loading="lazy" src="https://www.workstatus.io/staging/wp-content/themes/workstatus/assests/images/g2-main-image.svg" alt="">
            </div>
          </div>
          <div class="badges">
            <div class="col">
              <div class="leftbar">
                <picture>
                  <source type="image/webp" srcset="https://www.workstatus.io/staging/wp-content/themes/workstatus/assests/images/badge-logo1.webp">
                  <source type="image/png" srcset="https://www.workstatus.io/staging/wp-content/themes/workstatus/assests/images/badge-logo1.png">
                  <img loading="lazy" src="https://www.workstatus.io/staging/wp-content/themes/workstatus/assests/images/badge-logo1.png" alt="Partner Logo" width="67" height="17">
                </picture>
                <i class="icon1"></i>
              </div>
              <div class="ritbar">
                5.0
              </div>
            </div>
            <div class="col">
              <div class="leftbar">
                <picture>
                  <source type="image/webp" srcset="https://www.workstatus.io/staging/wp-content/themes/workstatus/assests/images/badge-logo2.webp">
                  <source type="image/png" srcset="assests/images/badge-logo2.png">
                  <img loading="lazy" src="https://www.workstatus.io/staging/wp-content/themes/workstatus/assests/images/badge-logo2.png" alt="Partner Logo" width="70" height="17">
                </picture>
                <i class="icon2"></i>
              </div>
              <div class="ritbar">
                4.3
              </div>
            </div>
            <div class="col">
              <div class="leftbar">
                <picture>
                  <source type="image/webp" srcset="https://www.workstatus.io/staging/wp-content/themes/workstatus/assests/images/badge-logo3.webp">
                  <source type="image/png" srcset="https://www.workstatus.io/staging/wp-content/themes/workstatus/assests/images/badge-logo3.png">
                  <img loading="lazy" src="https://www.workstatus.io/staging/wp-content/themes/workstatus/assests/images/badge-logo3.png" alt="Partner Logo" width="72" height="15">
                </picture>
                <i class="icon3"></i>
              </div>
              <div class="ritbar">
                4.5
              </div>
            </div>
            <div class="col">
              <div class="leftbar">
                <picture>
                  <source type="image/webp" srcset="https://www.workstatus.io/staging/wp-content/themes/workstatus/assests/images/badge-logo4.webp">
                  <source type="image/png" srcset="https://www.workstatus.io/staging/wp-content/themes/workstatus/assests/images/badge-logo4.png">
                  <img loading="lazy" src="https://www.workstatus.io/staging/wp-content/themes/workstatus/assests/images/badge-logo4.png" alt="Partner Logo" width="20" height="20">
                </picture>
                <i class="icon4"></i>
              </div>
              <div class="ritbar">
                4.7
              </div>
            </div>
          </div>
        </div>
        <div id="xd-form" class="right-section">
          <div class="sucmsg">
            <h3>THANK YOU!</h3>
            <p>Your registration was successful. As a next step, we've sent you an email to confirm your email address. Once confirmed, you will be good to login &amp; use the system.</p>
          </div>
          <h2>Start Your 7-Day Free Trial</h2>
          <form onsubmit="return signupFrmValidation(this)" method="post">
            <div class="form-wrap">
              <div class="form-group">
                <input type="text" class="infiled" id="su-name" placeholder="Full Name" name="uname" maxlength="30">
                <label>Full Name*</label>
                <span class="error"></span>
              </div>
              <div class="form-group" style="margin-bottom:17px;">
                <input type="text" class="infiled" id="su-email" placeholder="Email Address" name="uemail" maxlength="50" autocomplete="off">
                <label>Email Address*</label>
                <span class="error"></span>
              </div>
              <div class="form-group w-45 cnd-phone-na">
                <select name="pcode" id="su-pcode" class="infiled">
                  <option value="">Select Country Code</option>
                  <option data-con="AF" value="+93">Afghanistan +93</option>
                  <option data-con="AX" value="+358">Aland Islands +358</option>
                  <option data-con="AL" value="+355">Albania +355</option>
                  <option data-con="DZ" value="+213">Algeria +213</option>
                  <option data-con="AS" value="+1684">AmericanSamoa +1684</option>
                  <option data-con="AD" value="+376">Andorra +376</option>
                  <option data-con="AO" value="+244">Angola +244</option>
                  <option data-con="AI" value="+1264">Anguilla +1264</option>
                  <option data-con="AQ" value="+672">Antarctica +672</option>
                  <option data-con="AG" value="+1268">Antigua and Barbuda +1268</option>
                  <option data-con="AR" value="+54">Argentina +54</option>
                  <option data-con="AM" value="+374">Armenia +374</option>
                  <option data-con="AW" value="+297">Aruba +297</option>
                  <option data-con="AU" value="+61">Australia +61</option>
                  <option data-con="AT" value="+43">Austria +43</option>
                  <option data-con="AZ" value="+994">Azerbaijan +994</option>
                  <option data-con="BS" value="+1242">Bahamas +1242</option>
                  <option data-con="BH" value="+973">Bahrain +973</option>
                  <option data-con="BD" value="+880">Bangladesh +880</option>
                  <option data-con="BB" value="+1246">Barbados +1246</option>
                  <option data-con="BY" value="+375">Belarus +375</option>
                  <option data-con="BE" value="+32">Belgium +32</option>
                  <option data-con="BZ" value="+501">Belize +501</option>
                  <option data-con="BJ" value="+229">Benin +229</option>
                  <option data-con="BM" value="+1441">Bermuda +1441</option>
                  <option data-con="BT" value="+975">Bhutan +975</option>
                  <option data-con="BO" value="+591">Bolivia, Plurinational State of +591</option>
                  <option data-con="BA" value="+387">Bosnia and Herzegovina +387</option>
                  <option data-con="BW" value="+267">Botswana +267</option>
                  <option data-con="BR" value="+55">Brazil +55</option>
                  <option data-con="IO" value="+246">British Indian Ocean Territory +246</option>
                  <option data-con="VI" value="+1">British Virgin Islands +1</option>
                  <option data-con="BN" value="+673">Brunei Darussalam +673</option>
                  <option data-con="BG" value="+359">Bulgaria +359</option>
                  <option data-con="BF" value="+226">Burkina Faso +226</option>
                  <option data-con="BI" value="+257">Burundi +257</option>
                  <option data-con="KH" value="+855">Cambodia +855</option>
                  <option data-con="CM" value="+237">Cameroon +237</option>
                  <option data-con="CA" value="+1">Canada +1</option>
                  <option data-con="CV" value="+238">Cape Verde +238</option>
                  <option data-con="KY" value="+ 345">Cayman Islands + 345</option>
                  <option data-con="CF" value="+236">Central African Republic +236</option>
                  <option data-con="TD" value="+235">Chad +235</option>
                  <option data-con="CL" value="+56">Chile +56</option>
                  <option data-con="CN" value="+86">China +86</option>
                  <option data-con="CX" value="+61">Christmas Island +61</option>
                  <option data-con="CC" value="+61">Cocos (Keeling) Islands +61</option>
                  <option data-con="CO" value="+57">Colombia +57</option>
                  <option data-con="KM" value="+269">Comoros +269</option>
                  <option data-con="CG" value="+242">Congo +242</option>
                  <option data-con="CD" value="+243">Congo +243</option>
                  <option data-con="CK" value="+682">Cook Islands +682</option>
                  <option data-con="CR" value="+506">Costa Rica +506</option>
                  <option data-con="HR" value="+385">Croatia +385</option>
                  <option data-con="CU" value="+53">Cuba +53</option>
                  <option data-con="CW" value="+599">Curacao +599</option>
                  <option data-con="CY" value="+357">Cyprus +357</option>
                  <option data-con="CZ" value="+420">Czech Republic +420</option>
                  <option data-con="CD" value="+243">Democratic Republic of the Congo +243</option>
                  <option data-con="DK" value="+45">Denmark +45</option>
                  <option data-con="DJ" value="+253">Djibouti +253</option>
                  <option data-con="DM" value="+1767">Dominica +1767</option>
                  <option data-con="DO" value="+1849">Dominican Republic +1849</option>
                  <option data-con="EC" value="+593">Ecuador +593</option>
                  <option data-con="EG" value="+20">Egypt +20</option>
                  <option data-con="SV" value="+503">El Salvador +503</option>
                  <option data-con="GQ" value="+240">Equatorial Guinea +240</option>
                  <option data-con="ER" value="+291">Eritrea +291</option>
                  <option data-con="EE" value="+372">Estonia +372</option>
                  <option data-con="ET" value="+251">Ethiopia +251</option>
                  <option data-con="FK" value="+500">Falkland Islands (Malvinas) +500</option>
                  <option data-con="FO" value="+298">Faroe Islands +298</option>
                  <option data-con="FJ" value="+679">Fiji +679</option>
                  <option data-con="FI" value="+358">Finland +358</option>
                  <option data-con="FR" value="+33">France +33</option>
                  <option data-con="GF" value="+594">French Guiana +594</option>
                  <option data-con="PF" value="+689">French Polynesia +689</option>
                  <option data-con="GA" value="+241">Gabon +241</option>
                  <option data-con="GM" value="+220">Gambia +220</option>
                  <option data-con="GE" value="+995">Georgia +995</option>
                  <option data-con="DE" value="+49">Germany +49</option>
                  <option data-con="GH" value="+233">Ghana +233</option>
                  <option data-con="GI" value="+350">Gibraltar +350</option>
                  <option data-con="GR" value="+30">Greece +30</option>
                  <option data-con="GL" value="+299">Greenland +299</option>
                  <option data-con="GD" value="+1473">Grenada +1473</option>
                  <option data-con="GP" value="+590">Guadeloupe +590</option>
                  <option data-con="GU" value="+1671">Guam +1671</option>
                  <option data-con="GT" value="+502">Guatemala +502</option>
                  <option data-con="GG" value="+44">Guernsey +44</option>
                  <option data-con="GN" value="+224">Guinea +224</option>
                  <option data-con="GW" value="+245">Guinea-Bissau +245</option>
                  <option data-con="GY" value="+595">Guyana +595</option>
                  <option data-con="HT" value="+509">Haiti +509</option>
                  <option data-con="VA" value="+379">Holy See (Vatican City State) +379</option>
                  <option data-con="HN" value="+504">Honduras +504</option>
                  <option data-con="HK" value="+852">Hong Kong +852</option>
                  <option data-con="HU" value="+36">Hungary +36</option>
                  <option data-con="IS" value="+354">Iceland +354</option>
                  <option data-con="IN" value="+91">India +91</option>
                  <option data-con="ID" value="+62">Indonesia +62</option>
                  <option data-con="IR" value="+98">Iran +98</option>
                  <option data-con="IQ" value="+964">Iraq +964</option>
                  <option data-con="IE" value="+353">Ireland +353</option>
                  <option data-con="IM" value="+44">Isle of Man +44</option>
                  <option data-con="IL" value="+972">Israel +972</option>
                  <option data-con="IT" value="+39">Italy +39</option>
                  <option data-con="JM" value="+1876">Jamaica +1876</option>
                  <option data-con="JP" value="+81">Japan +81</option>
                  <option data-con="JE" value="+44">Jersey +44</option>
                  <option data-con="JO" value="+962">Jordan +962</option>
                  <option data-con="KZ" value="+77">Kazakhstan +77</option>
                  <option data-con="KE" value="+254">Kenya +254</option>
                  <option data-con="KI" value="+686">Kiribati +686</option>
                  <option data-con="XK" value="+383">Kosovo +383</option>
                  <option data-con="KW" value="+965">Kuwait +965</option>
                  <option data-con="KG" value="+996">Kyrgyzstan +996</option>
                  <option data-con="LA" value="+856">Laos +856</option>
                  <option data-con="LV" value="+371">Latvia +371</option>
                  <option data-con="LB" value="+961">Lebanon +961</option>
                  <option data-con="LS" value="+266">Lesotho +266</option>
                  <option data-con="LR" value="+231">Liberia +231</option>
                  <option data-con="LBY" value="+218">Libya +218</option>
                  <option data-con="LY" value="+218">Libyan Arab Jamahiriya +218</option>
                  <option data-con="LI" value="+423">Liechtenstein +423</option>
                  <option data-con="LT" value="+370">Lithuania +370</option>
                  <option data-con="LU" value="+352">Luxembourg +352</option>
                  <option data-con="MO" value="+853">Macao +853</option>
                  <option data-con="MK" value="+389">Macedonia +389</option>
                  <option data-con="MG" value="+261">Madagascar +261</option>
                  <option data-con="MW" value="+265">Malawi +265</option>
                  <option data-con="MY" value="+60">Malaysia +60</option>
                  <option data-con="MV" value="+960">Maldives +960</option>
                  <option data-con="ML" value="+223">Mali +223</option>
                  <option data-con="MT" value="+356">Malta +356</option>
                  <option data-con="MH" value="+692">Marshall Islands +692</option>
                  <option data-con="MQ" value="+596">Martinique +596</option>
                  <option data-con="MR" value="+222">Mauritania +222</option>
                  <option data-con="MU" value="+230">Mauritius +230</option>
                  <option data-con="YT" value="+262">Mayotte +262</option>
                  <option data-con="MX" value="+52">Mexico +52</option>
                  <option data-con="FM" value="+691">Micronesia +691</option>
                  <option data-con="MD" value="+373">Moldova +373</option>
                  <option data-con="MC" value="+377">Monaco +377</option>
                  <option data-con="MN" value="+976">Mongolia +976</option>
                  <option data-con="ME" value="+382">Montenegro +382</option>
                  <option data-con="MS" value="+1664">Montserrat +1664</option>
                  <option data-con="MA" value="+212">Morocco +212</option>
                  <option data-con="MZ" value="+258">Mozambique +258</option>
                  <option data-con="MM" value="+95">Myanmar +95</option>
                  <option data-con="NA" value="+264">Namibia +264</option>
                  <option data-con="NR" value="+674">Nauru +674</option>
                  <option data-con="NP" value="+977">Nepal +977</option>
                  <option data-con="NL" value="+31">Netherlands +31</option>
                  <option data-con="AN" value="+599">Netherlands Antilles +599</option>
                  <option data-con="NC" value="+687">New Caledonia +687</option>
                  <option data-con="NZ" value="+64">New Zealand +64</option>
                  <option data-con="NI" value="+505">Nicaragua +505</option>
                  <option data-con="NE" value="+227">Niger +227</option>
                  <option data-con="NG" value="+234">Nigeria +234</option>
                  <option data-con="NU" value="+683">Niue +683</option>
                  <option data-con="NF" value="+672">Norfolk Island +672</option>
                  <option data-con="PRK" value="+850">North Korea +850</option>
                  <option data-con="MP" value="+1670">Northern Mariana Islands +1670</option>
                  <option data-con="NO" value="+47">Norway +47</option>
                  <option data-con="OM" value="+968">Oman +968</option>
                  <option data-con="PK" value="+92">Pakistan +92</option>
                  <option data-con="PW" value="+680">Palau +680</option>
                  <option data-con="PS" value="+970">Palestinian Territory, Occupied +970</option>
                  <option data-con="PA" value="+507">Panama +507</option>
                  <option data-con="PG" value="+675">Papua New Guinea +675</option>
                  <option data-con="PY" value="+595">Paraguay +595</option>
                  <option data-con="PE" value="+51">Peru +51</option>
                  <option data-con="PH" value="+63">Philippines +63</option>
                  <option data-con="PN" value="+872">Pitcairn +872</option>
                  <option data-con="PL" value="+48">Poland +48</option>
                  <option data-con="PT" value="+351">Portugal +351</option>
                  <option data-con="PR" value="+1939">Puerto Rico +1939</option>
                  <option data-con="QA" value="+974">Qatar +974</option>
                  <option data-con="RE" value="+262">Reunion +262</option>
                  <option data-con="RO" value="+40">Romania +40</option>
                  <option data-con="RU" value="+7">Russia +7</option>
                  <option data-con="RW" value="+250">Rwanda +250</option>
                  <option data-con="BL" value="+590">Saint Barthelemy +590</option>
                  <option data-con="SH" value="+290">Saint Helena +290</option>
                  <option data-con="KN" value="+1869">Saint Kitts and Nevis +1869</option>
                  <option data-con="LC" value="+1758">Saint Lucia +1758</option>
                  <option data-con="MF" value="+590">Saint Martin +590</option>
                  <option data-con="PM" value="+508">Saint Pierre and Miquelon +508</option>
                  <option data-con="VC" value="+1784">Saint Vincent and the Grenadines +1784</option>
                  <option data-con="WS" value="+685">Samoa +685</option>
                  <option data-con="SM" value="+378">San Marino +378</option>
                  <option data-con="ST" value="+239">Sao Tome and Principe +239</option>
                  <option data-con="SA" value="+966">Saudi Arabia +966</option>
                  <option data-con="SN" value="+221">Senegal +221</option>
                  <option data-con="RS" value="+381">Serbia +381</option>
                  <option data-con="SC" value="+248">Seychelles +248</option>
                  <option data-con="SL" value="+232">Sierra Leone +232</option>
                  <option data-con="SG" value="+65">Singapore +65</option>
                  <option data-con="SXM" value="+721">Sint Maarten +721</option>
                  <option data-con="SK" value="+421">Slovakia +421</option>
                  <option data-con="SVN" value="+386">Slovenia +386</option>
                  <option data-con="SB" value="+677">Solomon Islands +677</option>
                  <option data-con="SOM" value="+252">Somalia +252</option>
                  <option data-con="ZA" value="+27">South Africa +27</option>
                  <option data-con="KOR" value="+82">South Korea +82</option>
                  <option data-con="SSD" value="+211">South Sudan +211</option>
                  <option data-con="ESP" value="+34">Spain +34</option>
                  <option data-con="LK" value="+94">Sri Lanka +94</option>
                  <option data-con="SDN" value="+249">Sudan +249</option>
                  <option data-con="SUR" value="+597">Suriname +597</option>
                  <option data-con="SJM" value="+47">Svalbard and Jan Mayen +47</option>
                  <option data-con="SWZ" value="+268">Swaziland +268</option>
                  <option data-con="SWE" value="+46">Sweden +46</option>
                  <option data-con="CH" value="+41">Switzerland +41</option>
                  <option data-con="SYR" value="+963">Syria +963</option>
                  <option data-con="TWN" value="+886">Taiwan +886</option>
                  <option data-con="TJK" value="+992">Tajikistan +992</option>
                  <option data-con="TZA" value="+255">Tanzania +255</option>
                  <option data-con="THA" value="+66">Thailand +66</option>
                  <option data-con="TGO" value="+228">Togo +228</option>
                  <option data-con="TKL" value="+690">Tokelau +690</option>
                  <option data-con="TON" value="+676">Tonga +676</option>
                  <option data-con="TTO" value="+1-868">Trinidad and Tobago +1-868</option>
                  <option data-con="TUN" value="+216">Tunisia +216</option>
                  <option data-con="TUR" value="+90">Turkey +90</option>
                  <option data-con="YKM" value="+993">Turkmenistan +993</option>
                  <option data-con="TCA" value="+1-649">Turks and Caicos Islands +1-649</option>
                  <option data-con="TUV" value="+688">Tuvalu +688</option>
                  <option data-con="VIR" value="+1-340">U.S. Virgin Islands +1-340</option>
                  <option data-con="UGA" value="+256">Uganda +256</option>
                  <option data-con="UA" value="+380">Ukraine +380</option>
                  <option data-con="UAE" value="+971">United Arab Emirates +971</option>
                  <option data-con="GB" value="+44">United Kingdom +44</option>
                  <option data-con="US" value="+1">United States +1</option>
                  <option data-con="URY" value="+598">Uruguay +598</option>
                  <option data-con="UZB" value="+998">Uzbekistan +998</option>
                  <option data-con="VUT" value="+678">Vanuatu +678</option>
                  <option data-con="VAT" value="+379">Vatican +379</option>
                  <option data-con="VEN" value="+58">Venezuela +58</option>
                  <option data-con="VNM" value="+84">Vietnam +84</option>
                  <option data-con="WLF" value="+681">Wallis and Futuna +681</option>
                  <option data-con="ESH" value="+212">Western Sahara +212</option>
                  <option data-con="YEM" value="+967">Yemen +967</option>
                  <option data-con="ZMB" value="+260">Zambia +260</option>
                  <option data-con="ZWE" value="+263">Zimbabwe +263</option>
                </select>
                <label>Country Code*</label>
                <span class="error"></span>
              </div>
              <div class="form-group w-55 cnd-phone-na">
                <input type="tel" id="su-phone" class="infiled su-phone" placeholder="Phone No" name="phone" maxlength="50">
                <label>Phone No*</label>
                <span class="error" id="su-phone-err"></span>
              </div>
              <div class="form-group">
                <select name="com-mode" class="infiled">
                  <option value="0" selected="">Phone or Email</option>
                  <option value="1">Phone</option>
                  <option value="2">Email</option>
                  <option value="3">Please Do Not Contact</option>
                </select>
                <label>Mode of communication</label>
              </div>
              <div class="form-group">
                <input type="password" class="infiled" name="password" placeholder="Password*" autocomplete="current-password" id="su-password">
                <i onclick="togglewsPassword(this, 'su-password')" style="margin-left: -30px; cursor: pointer;">
                <img loading="lazy" class="eye-slash" src="https://www.workstatus.io/staging/wp-content/themes/workstatus/assests/images/signup/eye-slash.png" alt="">
                <img loading="lazy" class="eye" src="https://www.workstatus.io/staging/wp-content/themes/workstatus/assests/images/signup/eye.png" alt="">
                </i>
                <label class="info-lbl">Password* 
                <span class="tool-tip-wrap"><img src="https://www.workstatus.io/staging/wp-content/themes/workstatus/assests/images/info_icon.svg" alt="" class="info-img" style="cursor: pointer;">
                <span class="tolltip">Your Password must contain :<br>
                1- Minimum 6 characters are required<br>
                2- At least 1 number<br>
                3- At least 1 of the following special characters ( !, #, $, %, &amp;, *, -, @ )
                </span>
                </span>
                </label>
                <span class="error"></span>
              </div>
              <div class="form-group ws-error">
                <input type="password" class="infiled" name="cnf_password" placeholder="Confirm Password*" autocomplete="current-password" id="su-cpassword">
                <i onclick="togglewsPassword(this, 'su-cpassword')" style="margin-left: -30px; cursor: pointer;">
                <img loading="lazy" class="eye-slash" src="https://www.workstatus.io/staging/wp-content/themes/workstatus/assests/images/signup/eye-slash.png" alt="">
                <img loading="lazy" class="eye" src="https://www.workstatus.io/staging/wp-content/themes/workstatus/assests/images/signup/eye.png" alt="">
                </i>
                <label>Confirm Password*</label>
                <span class="error">Both passwords must match</span>
              </div>
              <!--
                <div class="form-group">
                   <select class="infiled" name="team-size" id="ws-emp">
                      <option value="">Team Size</option>
                      <option value="">Self-employed</option>
                      <option value="1-10">1-10</option>
                      <option value="11-50">11-50</option>
                      <option value="51-200">51-200</option>
                   </select>
                   <span class="error"></span>
                </div>
                <div class="form-group">
                   <textarea class="infiled comment-input" name="requirement" id="ws-requirement" placeholder="Let us know what sparked our interest"></textarea>
                   <label>Let us know what sparked our interest</label>
                   <span class="error"></span>
                </div> 
                -->
              <div class="form-group">
                <div class="padd">
                  <p>
                    <input class="mcheck" id="su-accept" name="checkbox" type="checkbox" value="1" checked="">
                    I've read and accept <a href="https://www.workstatus.io/terms-of-service" rel="noopener" target="_blank">terms and conditions</a>
                  </p>
                  <span id="supolicy" class="error" style="text-align:left; display: none;">Please tick this box if you want to proceed.</span>
                </div>
              </div>
              <div class="form-group">
                <input type="hidden" id="ws_pid" name="pid" value="42">
                <input type="hidden" id="ws_stype" name="type" value="monthly">
                <input type="hidden" name="src_page" value="https://www.workstatus.io/staging/">
                <button type="submit" class="submtbtn btn-disable" id="su-submitButton" name="submit">Create My Account</button>
                <span id="ws-apimsg"></span>
              </div>
            </div>
          </form>
        </div>
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
<div class="banner-form chlog-popup">
  <div id="chlog-popup" class="popup-wrapper">
    <div class="popWrap">
      <div class="popup-content">
        <span class="closeicon"></span>
        <div class="head-top">
          <h3>Release Notes </h3>
          <div class="phase-sec">
            <div class="flex-2">
              <h4>Phase #7.3</h4>
              <p>Published on 4th Dec'2023</p>
            </div>
            <div class="flex-2">
              <h4>Web Platform</h4>
              <p>Version 3.1</p>
            </div>
          </div>
        </div>
        <div class="change-content">
          <div class="content-wrap">
            <p>New Projects & Todo modules: You will find new interface for Projects & Tasks (Todos) management. This will make life easier for all organizations who is looking for PM tool with detailed features. Specific features which can be accessed now:</p>
            <ul>
              <li>Supported on latest version of Chrome, Firefox & Safari browsers</li>
              <li>New Projects & Todo modules: You will find new interface for Projects & Tasks (Todos) management. This will make life easier for all organizations who is looking for PM tool with detailed features. Specific features which can be accessed now:</li>
              <li>New improved UI for project listing screen</li>
              <li>Added project status, that can be changed in project listing screen.</li>
              <li>Added project detail page where you can see overview of project's happening and can access all associated todo's with the project easily.</li>
              <li>Todo groups are introduced</li>
              <li>Todo listing layout changed with additional details</li>
              <li>Sub Todo creation up to level 5</li>
              <li>Todo category can be defined either todo is Enhancement or Bug</li>
              <li>Tags in Todo can be added to search faster</li>
              <li>Filters and Search in Todos added</li>
              <li>Can define Project and Todo ID for their identification</li>
              <li>Customized Todo status can be defined</li>
              <li>HRIS (beta): We're adding various sub-sections for managing the employees better such as Employee ID, Personal, Professional, Emergency & Medical details of any employee within organization. Specific features which can be accessed now:</li>
              <li>Added member card with member's basic details</li>
            </ul>
          </div>
          <div class="ctasec">
            <a href="javascript:void(0);" class="primary_btn1">Hide Release Notes</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php 
  $thisFile = basename($_SERVER['PHP_SELF']); 
  $exSfile = ['pricing.php', 'free-timecard-calculator.php', 'free-timesheet-templates.php'];
  if( !in_array( $thisFile, $exSfile ) ){ ?>
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
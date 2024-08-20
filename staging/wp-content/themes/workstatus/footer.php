<?php 
global $ws_ctas, $RegLink, $LogLink;
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
          <li><a href="<?php echo site_url(); ?>/customization">Customization</a></li>
          <li><a href="<?php echo site_url(); ?>/demo">Product Tour</a></li>
        </ul>
      </div>
      <div class="column fcol2">
        <h6>Tools</h6>
        <ul>
          <li><a href="<?php echo site_url(); ?>/tools/free-timecard-calculator">Free Time Card Calculator</a></li>
          <li><a href="<?php echo site_url(); ?>/tools/free-timesheet-templates">Free timesheet templates</a></li>          
        </ul>
        <h6>Platforms</h6>
        <ul>
          <li><a href="<?php echo site_url(); ?>/apps/mac">Mac</a></li>
          <li><a href="<?php echo site_url(); ?>/apps/windows">Windows</a></li>
          <li><a href="<?php echo site_url(); ?>/apps/linux">Linux</a></li>
          <li><a href="<?php echo site_url(); ?>/apps/iphone">iOS</a></li>
          <li><a href="<?php echo site_url(); ?>/app/android">Android</a></li>
        </ul>
      </div>
      <div  class="column fcol4">
        <h6>Alternatives</h6>
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
      <div  class="column fcol7">
        <h6>Workstatus Comparison</h6>
        <ul>
          <li><a href="<?php echo site_url('/teramind-vs-interguard-vs-workstatus'); ?>">Teramind vs Interguard</a></li>
          <li><a href="<?php echo site_url('/hubstaff-vs-clockify-vs-workstatus'); ?>">Hubstaff vs Clockify</a></li>
          <li><a href="<?php echo site_url('/hubstaff-vs-insightful-vs-workstatus'); ?>">Hubstaff vs Insightful</a></li>
          <li><a href="<?php echo site_url('/activtrak-vs-desktime-vs-workstatus'); ?>">ActivTrak vs DeskTime</a></li>
          <li><a href="<?php echo site_url('/clockify-vs-monitask-vs-workstatus'); ?>">Clockify vs MoniTask</a></li>
          <li><a href="<?php echo site_url('/insightful-vs-timedoctor-vs-workstatus'); ?>">Insightful vs Timedoctor</a></li>
          <li><a href="<?php echo site_url('/timedoctor-vs-activtrak-vs-workstatus'); ?>">Timedoctor vs Activtrak</a></li>
        </ul>
      </div>
      <!-- <div  class="column fcol5"></div> -->

      <div  class="column fcol6">
        <h6>Support</h6>
        <ul>
          <li><a href="https://support.Workstatus.io/en/">Help Center</a></li>
          <li><a href="<?php echo site_url(); ?>/downloads">Downloads</a></li>
          <li><a href="<?php echo site_url(); ?>/affiliates">Affiliates</a></li>
          <li><a href="<?php echo site_url(); ?>/faq">FAQs</a></li>
          <li><a href="<?php echo site_url('/data-retention'); ?>">Data Retention</a></li>
        </ul>
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
        <li><a href="<?php echo site_url(); ?>/privacy-policy" class="para_extrasmall">Privacy Policy </a></li>
        <li class="hide1">|</li>
        <li><a href="<?php echo site_url(); ?>/terms-of-service" class="para_extrasmall">Terms of Service</a></li>
      </ul>
      <div class="rate-us-section">
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
      <div class="gpw"></div>
      <!-- 
      <div class="app-store">
        <a href="https://apps.apple.com/us/app/Workstatus-tm/id1570416295"><img width="136" height="38" src="https://www.workstatus.io/assests/images/apple.png" alt="apple"  loading="lazy"></a>
        <a href="https://play.google.com/store/apps/details?id=com.vinove.workstatus&pcampaignid=pcampaignidMKT-Other-global-all-co-prtnr-py-PartBadge-Mar2515-1"><img  width="136" height="38" src="https://www.workstatus.io/assests/images/googleplay.png" alt="google play"  loading="lazy"></a>
      </div> 
    -->
    </div>
  </div>
</footer>
<?php get_template_part('common/demo', 'form'); ?>
<?php get_template_part('common/signup', 'form'); ?>
<?php 
//if( is_single() || is_page_template(['page-templates/tpl-best-employee.php']) ){ 
if( is_single() ){
?>
<div class="banner-form super-form">
  <div id="ws-intent-popup" class="popup-wrapper exit-intent-popup in-resource">
    <div class="popWrap">
      <div class="popup-content">
      <span class="cross-icon" onclick="close_intform('');" style="z-index: 100;">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assests/images/signup/cross.png" alt="">
      </span>
      <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/assests/images/pop-image.svg" alt="workstatus" width="189" height="172">
        <h2>Supercharge Your Team's Productivity!</h2>
        <p>Get a 7-day free FULL FEATURE trial of Workstatus now. Boost efficiency, accountability, and results – anytime, anywhere. </p>
        <div class="ctasec">
          <?php 
          $hasLogin = getCTAstatus();
          if($hasLogin !== false ){
          echo '<a data-href="'.$RegLink.'" href="javascript:void(0);" class="primary_btn1" 
          onclick="return get_ws_signupform(this);">'.$hasLogin['cta_text'].'</a>';
          } 
          ?>
          <a class="bkdemo" onclick="call_demows();" href="javascript:void(0);">Book a Demo</a>
        </div>
      </div>
    </div>
  </div>
</div>
<?php 
}else{ 
$ftIntent_popup = get_field('wsintent-popup');
if( isset( $ftIntent_popup['is_enable'] ) && ($ftIntent_popup['is_enable'] == "yes") ) :
?>
<div class="banner-form chat-popup">
  <div id="ws-intent-popup" class="popup-wrapper exit-intent-popup in-feature">
    <div class="popWrap">
      <div class="popup-content">
        <div class="head-top">
          <span class="chat-logo">
            <img src="<?php bloginfo('template_url'); ?>/assests/images/logo-white.svg" alt="Workstatus" 
            width="133" height="18">
          </span>
          <span class="cross-icon" onclick="close_intform();" style="z-index: 100;">
          <img src="<?php bloginfo('template_url'); ?>/assests/images/chat-cross.png" alt="">
          </span>
        </div>
        <div class="btmdiv">
          <div class="bgwrap">
            <h2><?php echo $ftIntent_popup['title']; ?></h2>
            <?php 
            if( $ftIntent_popup['image'] ){
              echo pxlGetPtag( $ftIntent_popup['image'] );
            }
            ?>
            <?php echo $ftIntent_popup['content']; ?>            
          </div>
          <div class="ctasec">
            <a href="javascript:void(0);" data-href="<?php echo $RegLink; ?>" onclick="return get_ws_signupform(this);" class="primary_btn1">Yes, I want to start free trial</a>
            <a href="javascript:void(0);" id="ip-crisp-cta" style="display:none;" class="primary_btn1 chatbtn" 
            onclick="$crisp.push(['do', 'chat:open']); document.getElementById('ws-intent-popup').classList.remove('visible');">I want to Chat</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php 
endif;
} 
?>
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
  }else{ // if selected icon is not in array of stars
    stars = [] // clear array
    for (let i = 0; i <= idx; i++) { // loop thru all icons and set class and color
      stars.push(icons[i].id) // add icon to array of stars
      icons[i].className = "fa fa-star star";
      icons[i].style.color = "#60B741";
    }
  }
  var total_points = stars.length.toString();
  var user_ip = '<?php echo getUserIP(); ?>';
  var rating_page_url = "<?php the_permalink() ?>";
     
  var data = "total_points=" + total_points + "&user_ip=" + user_ip + "&rating_page_url=" + rating_page_url;
  var xhttp = new XMLHttpRequest();

  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     resobj = JSON.parse(this.responseText);
      document.getElementById("rate_msg").innerHTML = resobj.data;
     }
   };
   
  xhttp.open("POST", "<?php bloginfo('url'); ?>/wp-admin/admin-ajax.php?action=rateus", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

  xhttp.send(data);
  // document.getElementById("demo").innerHTML = stars.length.toString(); // set number of stars as length of array of stars
}  
</script>
<?php wp_footer(); ?>
<script type="text/javascript">
/*Lazy Loading BG Image*/
document.addEventListener("DOMContentLoaded", 
function(){
    var lazyloadImages;    
    if("IntersectionObserver" in window){
    lazyloadImages = document.querySelectorAll(".vlazy");
    var imageObserver = new IntersectionObserver(function(entries, observer) {
      entries.forEach(function(entry) {
        if (entry.isIntersecting) {
          var image = entry.target;
          image.classList.remove("vlazy");
          imageObserver.unobserve(image);
        }
      });
    });

    lazyloadImages.forEach(function(image) {
      imageObserver.observe(image);
    });
    }else{
    var lazyloadThrottleTimeout;
    lazyloadImages = document.querySelectorAll(".vlazy");
    function lazyload(){
        if(lazyloadThrottleTimeout) {
            clearTimeout(lazyloadThrottleTimeout);
        }    

        lazyloadThrottleTimeout = setTimeout(function() {
        var scrollTop = window.pageYOffset;
        lazyloadImages.forEach(function(img) {
            if(img.offsetTop < (window.innerHeight + scrollTop)) {
              img.src = img.dataset.src;
              img.classList.remove('vlazy');
            }
        });
        if(lazyloadImages.length == 0) { 
          document.removeEventListener("scroll", lazyload);
          window.removeEventListener("resize", lazyload);
          window.removeEventListener("orientationChange", lazyload);
        }
        }, 20);
    }
    document.addEventListener("scroll", lazyload);
    window.addEventListener("resize", lazyload);
    window.addEventListener("orientationChange", lazyload);
    }
})
</script>
</body>
</html>
<?php 
  global $ws_ctas, $RegLink, $LogLink;
  ?>
<footer class="footer">
  <div class="container">
    <div class="dis-flex footer-top">
      <div class="dis-flex">
        <div class="flex-4">
          <a href="<?php echo site_url(); ?>/" title="Workstatus"><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assests/footer-images/ws.svg" alt="flag" width="199" height="26">
          </a>
        </div>
        <div class="flex-4">
          <div class="addwrap">
            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assests/footer-images/flag-icon01.svg" alt="flag" width="35" height="35">
            <p>541, 8W, Level 5, Dubai Airport Free Zone, Dubai, United Arab Emirates
            </p>
          </div>
        </div>
        <div class="flex-4">
          <div class="addwrap">
            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assests/footer-images/flag-icon02.svg" alt="flag" width="35" height="35">
            <p>10th Floor, Tower-B, Unitech Cyber Park, Sector - 39, Gurugram, Haryana-122001
            </p>
          </div>
        </div>
        <div class="flex-4">
          <div class="addwrap">
            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assests/footer-images/flag-icon02.svg" alt="flag" width="35" height="35">
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
          <li><a href="<?php echo site_url(); ?>/about">About us</a></li>
          <li><a href="<?php echo site_url(); ?>/reviews">Reviews</a></li>
          <li><a href="<?php echo site_url(); ?>/press">Press</a></li>
          <!-- <li><a href="<?php echo site_url(); ?>/resources">Resources</a></li> -->
          <li><a href="https://www.workstatus.io/blog/">Blog</a></li>
          <li><a href="<?php echo site_url(); ?>/how-tracking-works">How Workstatus Works</a></li>
          <li><a href="<?php echo site_url(); ?>/customization">Customization</a></li>
          <li><a href="<?php echo site_url(); ?>/demo">Product Tour</a></li>
          <li><a href="<?php echo site_url('/change-log'); ?>">Revision History</a></li>
        </ul>
        <h4>Tools</h4>
        <ul>
          <li><a href="<?php echo site_url(); ?>/tools/free-timecard-calculator">Free Time Card Calculator</a></li>
          <li><a href="<?php echo site_url(); ?>/tools/free-timesheet-templates">Free Timesheet Templates</a></li>
        </ul>
      </div>
      <div class="flex-5">
        <h4>Workstatus Comparison
        </h4>
        <ul>
          <li><a href="<?php echo site_url('/teramind-vs-interguard-vs-workstatus'); ?>">Teramind vs Interguard</a></li>
          <li><a href="<?php echo site_url('/hubstaff-vs-clockify-vs-workstatus'); ?>">Hubstaff vs Clockify</a></li>
          <li><a href="<?php echo site_url('/hubstaff-vs-insightful-vs-workstatus'); ?>">Hubstaff vs Insightful</a></li>
          <li><a href="<?php echo site_url('/activtrak-vs-desktime-vs-workstatus'); ?>">ActivTrak vs DeskTime</a></li>
          <li><a href="<?php echo site_url('/clockify-vs-monitask-vs-workstatus'); ?>">Clockify vs MoniTask</a></li>
          <li><a href="<?php echo site_url('/insightful-vs-timedoctor-vs-workstatus'); ?>">Insightful vs Timedoctor</a></li>
          <li><a href="<?php echo site_url('/activtrak-vs-timedoctor-vs-workstatus'); ?>">Activtrak vs Timedoctor</a></li>
        </ul>
      </div>
      <div class="flex-5">
        <h4>Alternatives</h4>
        <ul>
          <li><a href="<?php echo site_url(); ?>/hubstaff-alternative">Hubstaff Alternative</a></li>
          <li><a href="<?php echo site_url(); ?>/desktime-alternative">Desktime Alternative</a></li>
          <li><a href="<?php echo site_url(); ?>/timedoctor-alternative">Time Doctor Alternative</a></li>
          <li><a href="<?php echo site_url(); ?>/insightful-alternative">Insightful Alternative</a></li>
          <li><a href="<?php echo site_url(); ?>/we360ai-alternative">We360.ai Alternative</a></li>
          <li><a href="<?php echo site_url(); ?>/activtrak-alternative">ActivTrak Alternative</a></li>
          <li><a href="<?php echo site_url(); ?>/teramind-alternative">Teramind Alternative</a></li>
          <li><a href="<?php echo site_url(); ?>/monitask-alternative">Monitask Alternative</a></li>
          <li><a href="<?php echo site_url(); ?>/clickup-alternative">ClickUp Alternative</a></li>
          <li><a href="<?php echo site_url(); ?>/teamwork-alternative">Teamwork.com Alternative</a></li>
          <li><a href="<?php echo site_url(); ?>/basecamp-alternative">Basecamp Alternative</a></li>
          <li><a href="<?php echo site_url(); ?>/wrike-alternative">Wrike Alternative</a></li>
        </ul>
      </div>
      <div class="flex-5">
        <h4 style="opacity:0;">Alternatives
        </h4>
        <ul>
          <li><a href="<?php echo site_url(); ?>/microsoft-project-alternative">Microsoft Project Alternative</a></li>
          <li><a href="<?php echo site_url(); ?>/trello-alternative">Trello Alternative</a></li>
          <li><a href="<?php echo site_url(); ?>/smartsheet-alternative">Smartsheet Alternative</a></li>
          <li><a href="<?php echo site_url(); ?>/asana-alternative">Asana Alternative</a></li>
          <li><a href="<?php echo site_url(); ?>/jira-alternative">Jira Alternative</a></li>
          <li><a href="<?php echo site_url(); ?>/microsoft-planner-alternative">Microsoft Planner Alternative</a></li>
          <li><a href="<?php echo site_url(); ?>/zoho-project-alternative">Zoho Projects Alternative</a></li>
          <li><a href="<?php echo site_url(); ?>/monday-alternative">Monday.com Alternative</a></li>
        </ul>
        <div class="social-box social-m">
          <h3>Platforms</h3>
          <div class="dis-flex">
            <a href="<?php echo site_url(); ?>/apps/mac">
              <picture>
                <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assests/footer-images/plate-01.svg" width="29" height="29" alt="facebook">
              </picture>
            </a>
            <a href="<?php echo site_url(); ?>/apps/windows">
              <picture>
                <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assests/footer-images/plate-02.svg" width="29" height="29" alt="twitter">
              </picture>
            </a>
            <a href="<?php echo site_url(); ?>/apps/iphone">
              <picture>
                <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assests/footer-images/plate-03.svg" width="29" height="29" alt="linkedin">
              </picture>
            </a>
            <a href="<?php echo site_url(); ?>/apps/android">
              <picture>
                <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assests/footer-images/plate-04.svg" width="29" height="29" alt="instagram">
              </picture>
            </a>
            <a href="<?php echo site_url(); ?>/apps/linux">
              <picture>
                <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assests/footer-images/plate-05.svg" width="29" height="29" alt="youtube">
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
            <li><a href="<?php echo site_url(); ?>/downloads">Downloads</a></li>
            <li><a href="<?php echo site_url(); ?>/partners">Partners</a></li>
            <li><a href="<?php echo site_url(); ?>/faq">FAQs</a></li>
            <li><a href="<?php echo site_url('/data-retention'); ?>">Data Retention</a></li>
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
                  <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assests/footer-images/soc-01.svg" width="29" height="29" alt="facebook">
                </picture>
              </a>
              <a href="https://x.com/Workstatusapp" target="_blank">
                <picture>
                  <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assests/footer-images/soc-02.svg" width="29" height="29" alt="twitter">
                </picture>
              </a>
              <a href="https://www.linkedin.com/company/Workstatusapp/" target="_blank">
                <picture>
                  <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assests/footer-images/soc-03.svg" width="29" height="29" alt="linkedin">
                </picture>
              </a>
              <a href="https://www.instagram.com/Workstatusapp/" target="_blank">
                <picture>
                  <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assests/footer-images/soc-04.svg" width="29" height="29" alt="instagram">
                </picture>
              </a>
              <a href="https://www.youtube.com/channel/UC9asR7eiptbMZq12EJhTPNw" target="_blank">
                <picture>
                  <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assests/footer-images/soc-05.svg" width="29" height="29" alt="youtube">
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
          <a href="https://www.valuecoders.com/" data-wpel-link="external" target="_blank" rel="dofollow">
            <picture>
              <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assests/footer-images/vc-logo.svg" 
              width="180" height="33" alt="Invoicera">
            </picture>
          </a>
          <a href="https://www.pixelcrayons.com/" data-wpel-link="external" target="_blank" rel="dofollow">
            <picture>
              <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assests/footer-images/pc-logo.svg" 
              width="180" height="44" alt="Workstatus"> 
            </picture>
          </a>
        </div>
      </div>
      <div class="flex-3  footer-rating">
        <span class="star-outer" id="star" style="display:none">
        <span class="star-inner star-hover" id="starthover">
        <i class="star-icon wslazy" onclick="star(event)" onmouseover="changerate('one')"></i> 
        <i class="star-icon wslazy" onclick="star(event)" onmouseover="changerate('two')"></i> 
        <i class="star-icon wslazy" onclick="star(event)" onmouseover="changerate('three')"></i> 
        <i class="star-icon wslazy" onclick="star(event)" onmouseover="changerate('four')"></i> 
        <i class="star-icon wslazy" onclick="star(event)" onmouseover="changerate('five')"></i> 
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
          <a href="javascript:void(0);" class="rate-us" onclick="ratenow()" id="ratebtn">Rate us</a> 
          Trusted by 1000+ Businesses
        </div>
      </div>
      <div class="flex-3 copyright">
        <a href="//www.dmca.com/Protection/Status.aspx?ID=033f5497-a539-424f-88e5-b7aebd427e03" title="DMCA.com Protection Status" class="dmca-badge" target="_blank"> <img src ="https://images.dmca.com/Badges/dmca-badge-w200-5x1-06.png?ID=033f5497-a539-424f-88e5-b7aebd427e03" alt="DMCA.com Protection Status" /></a>  <script src="https://images.dmca.com/Badges/DMCABadgeHelper.min.js"> </script>
      </div>
    </div>
  </div>
  <div class="footer-copyright">
    <div class="container">
      <div class="cop">
        <p class="copyright">
          <?php
            $copyRight = "&copy;"; 
            if( is_user_logged_in() && ( isBetaVersion() === true ) ){
            $copyRight = "<a href='".get_edit_post_link()."'>&copy;</a>";
            }
            ?>  
          Copyright <?php echo $copyRight; ?> 2021 - <?php echo date("Y"); ?>. All Rights Reserved. A Vinove Company.
        </p>
        <ul class="privacy-links">
          <li class="hide">|</li>
          <li><a href="<?php echo site_url(); ?>/privacy-policy">Privacy Policy </a></li>
          <li class="hide">|</li>
          <li><a href="<?php echo site_url(); ?>/terms-of-service">Terms of Service</a></li>
        </ul>
      </div>
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
          <a href="javascript:void(0);" onclick="call_demows();" id="ip-crisp-cta" class="primary_btn1">I want to request a demo</a>
          <a href="javascript:void(0);" data-href="<?php echo $RegLink; ?>" onclick="return get_ws_signupform(this);" 
            class="primary_btn1 chatbtn">Yes, I want to start free trial</a>
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
            <a href="javascript:void(0);" onclick="call_demows();" id="ip-crisp-cta" class="primary_btn1">I want to request a demo</a>
            <a href="javascript:void(0);" data-href="<?php echo $RegLink; ?>" onclick="return get_ws_signupform(this);" 
              class="primary_btn1 chatbtn">Yes, I want to start free trial</a>
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
  "priceRange": "₹48-₹4600",
  "image": "https://www.workstatus.io/wp-content/themes/workstatus/assests/header-images/logo-dark.svg",
  "@id": "https://www.workstatus.io/",
  "name": "Workstatus | Workforce Management Software",
  "address": [
  {
  "@type": "PostalAddress",
  "streetAddress": "10th Floor, Tower-B, Unitech Cyber Park, Sector - 39",
  "addressLocality": "Gurugram",
  "addressRegion": "Haryana",
  "postalCode": "122001",
  "addressCountry": "IN"
  },
  {
  "@type": "PostalAddress",
  "streetAddress": "11th Floor, Max Square, Noida-Greater Noida Expy, Sector 129",
  "addressLocality": "Noida",
  "addressRegion": "Uttar Pradesh",
  "postalCode": "201304",
  "addressCountry": "IN"
  }
  ],
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
  "telephone": "+91-9582957066"
  }
</script>
<script type="application/ld+json">
  {
  "@context" : "http://schema.org",
  "@type" : "Review",
  "name" : "Workstatus",
  "url" : "https://www.workstatus.io/",
  "image" : "https://www.workstatus.io/wp-content/themes/workstatus/assests/header-images/logo-dark.svg",
  "author" : "Workstatus",
  "reviewBody" : "Workstatus is one of the leading Employee , Staff, Team Productivity Management, Scheduling, Attendance & Time Tracking Software.",
  "reviewRating" : {
  "@type" : "Rating",
  "ratingValue" : "5"
  },
  "itemReviewed" : {
  "@type" : "LocalBusiness",
  "name" : "Workstatus | Employee , Staff, Team Productivity Management, Scheduling, Attendance & Time Tracking Software",
  "priceRange" : "₹48-₹4600",
  "image" : "https://www.workstatus.io/wp-content/themes/workstatus/assests/header-images/logo-dark.svg",
  "address" : [
  {
  "@type" : "PostalAddress",
  "streetAddress" : "10th Floor, Tower-B, Unitech Cyber Park, Sector - 39",
  "addressLocality" : "Gurugram",
  "addressRegion" : "IN",
  "postalCode" : "122003",
  "telephone" : "+91-9582957066",
  "addressCountry" : {
  "@type" : "Country",
  "name" : "India"
  }
  },
  {
  "@type" : "PostalAddress",
  "streetAddress" : "11th Floor, Max Square, Noida-Greater Noida Expy, Sector 129",
  "addressLocality" : "Noida",
  "addressRegion" : "Uttar Pradesh",
  "postalCode" : "201304",
  "addressCountry" : {
  "@type" : "Country",
  "name" : "India"
  }
  }
  ]
  }
  }
</script>
<script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Organization",
    "name": "Workstatus",
    "url": "https://www.workstatus.io/",
    "logo": "https://www.workstatus.io/wp-content/themes/workstatus/assests/images/logo.svg",
    "contactPoint": {
      "@type": "ContactPoint",
      "telephone": "9582957066",
      "contactType": "customer service",
      "areaServed": "IN",
      "availableLanguage": "en"
    },
    "sameAs": [
      "https://www.facebook.com/Workstatussoftware/",
      "https://twitter.com/Workstatusapp",
      "https://www.youtube.com/channel/UC9asR7eiptbMZq12EJhTPNw",
      "https://www.linkedin.com/company/Workstatusapp/"
    ]
  }
</script>
<script type="application/ld+json">
  {
  "@context": "https://schema.org/",
  "@type": "SoftwareApplication",
  "name": "Workstatus",
  "operatingSystem": "Windows, Mac, Android, iOS",
  "applicationCategory": "BusinessApplication",
  "description": "Workstatus is a workforce management software designed to streamline employee monitoring, time tracking, and productivity management for businesses.",
  "offers": {
  "@type": "Offer",
  "priceCurrency": "INR",
  "price": "48-4600",
  "category": "SaaS",
  "url": "https://www.workstatus.io/pricing"
  },
  "aggregateRating": {
  "@type": "AggregateRating",
  "ratingValue": "4.8",
  "reviewCount": "550"
  }
  }
</script>
<script type="application/ld+json">
  {
    "@context": "https://schema.org/", 
    "@type": "HowTo", 
    "name": "How to Set Up Time Tracking with Workstatus",
    "step": [{
      "@type": "HowToStep",
      "text": "Sign in to your Workstatus account",
      "url": "https://app.workstatus.io/auth/login/"
    },{
      "@type": "HowToStep",
      "text": "Navigate to the Time Tracking section"
    },{
      "@type": "HowToStep",
      "text": "Start tracking your work hours"
    }]    
  }
</script>
<?php /* ?>
<script type="application/ld+json">
  {
    "@context": "https://schema.org/", 
    "@type": "BreadcrumbList", 
    "itemListElement": [{
      "@type": "ListItem", 
      "position": 1, 
      "name": "Home",
      "item": "https://www.workstatus.io/"  
    },{
      "@type": "ListItem", 
      "position": 2, 
      "name": "Product",
      "item": "https://www.workstatus.io/product"  
    },{
      "@type": "ListItem", 
      "position": 3, 
      "name": "Solutions",
      "item": "https://www.workstatus.io/solution"  
    },{
      "@type": "ListItem", 
      "position": 4, 
      "name": "Industries",
      "item": "https://www.workstatus.io/industry"  
    },{
      "@type": "ListItem", 
      "position": 5, 
      "name": "Pricing",
      "item": "https://www.workstatus.io/pricing"  
    }]
  }
</script>

<script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
      {
        "@type": "Question",
        "name": "What is Workstatus?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Workstatus is a workforce management software that provides tools for time tracking, employee monitoring, productivity analysis, and more."
        }
      },
      {
        "@type": "Question",
        "name": "What platforms does Workstatus support?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Workstatus supports Windows, Mac, Android, and iOS."
        }
      },
      {
        "@type": "Question",
        "name": "Is there a free trial available?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes, Workstatus offers a 14-day free trial with no credit card required."
        }
      }
    ]
  }
</script>
<?php */ ?>
<script type="application/ld+json">
  {
    "@context": "https://schema.org/", 
    "@type": "Product", 
    "name": "Workstatus",
    "image": "https://www.workstatus.io/wp-content/themes/workstatus/assests/header-images/logo-dark.svg",
    "description": "Workstatus is a workforce management software designed to streamline employee monitoring, time tracking, and productivity management for businesses.",
    "aggregateRating": {"@type": "AggregateRating","ratingValue": "4.8","ratingCount": "50"}
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
      lazyloadImages = document.querySelectorAll(".wslazy");
      var imageObserver = new IntersectionObserver(function(entries, observer) {
        entries.forEach(function(entry) {
          if (entry.isIntersecting) {
            var image = entry.target;
            image.classList.remove("wslazy");
            imageObserver.unobserve(image);
          }
        });
      });
  
      lazyloadImages.forEach(function(image) {
        imageObserver.observe(image);
      });
      }else{
      var lazyloadThrottleTimeout;
      lazyloadImages = document.querySelectorAll(".wslazy");
      function lazyload(){
          if(lazyloadThrottleTimeout) {
              clearTimeout(lazyloadThrottleTimeout);
          }    
  
          lazyloadThrottleTimeout = setTimeout(function() {
          var scrollTop = window.pageYOffset;
          lazyloadImages.forEach(function(img) {
              if(img.offsetTop < (window.innerHeight + scrollTop)) {
                img.src = img.dataset.src;
                img.classList.remove('wslazy');
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
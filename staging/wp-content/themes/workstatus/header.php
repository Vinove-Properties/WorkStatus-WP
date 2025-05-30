<?php 
  global $ws_ctas, $RegLink, $LogLink;
  ?>
<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name='dmca-site-verification' content='QVF1Ym5QVXFtK1VMRTJ6RXloRUxnQnpvSTFPcUZ3OFhlWjgxVmdKWHZHYz01' />
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assests/images/favicon.png" type="image/x-icon">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head();?>
    <script type="text/javascript">
      var ws_site_url = "<?php echo trailingslashit(get_bloginfo('url')); ?>";
    </script>
    <style type="text/css">
      /*Core Web Vital Starts*/
      .xd-dump-img,
      .wslazy{background-image:none !important; background-color:#F1F1FA !important; background:none !important;}
      .inner-banner .videoSc .videoPoster,
      .wsbg-cover{background-size:contain; background-repeat:no-repeat; background-position:center;} 
      .inner-banner .videoSc .srp-1 .videoPoster.wsbg-img,
      .inner-banner .videoSc .srp-30 .videoPoster.wsbg-img{background-image:none;}
      .inner-banner .videoSc .videoPoster.bg-trans{background-color:transparent; background-repeat:no-repeat; background-position:center;}
      /*Core Web Vital Ends*/
      #ws-apimsg.success{margin-top: 10px; display:inline-block; color:#007600;}
      #ws-apimsg.error{margin-top: 10px; display:inline-block; color:#ed1010;}
      .popup-wrapper.is-active{display:block;}
      .wsf-signup .popup-wrapper.is-active{display:block !important;}
      .latest-offer img{width:100%; height: 80px;}
      .latest-offer .mobile{display:none;}
      .page-template-tpl-static-pricing .hero-banner .inner-wrap{display:flex; justify-content:space-between; align-items:center;}
      .page-template-tpl-static-pricing .hero-banner .inner-wrap .left{flex-basis:80%; text-align: left;}
      .page-template-tpl-static-pricing .hero-banner .inner-wrap .right{flex-basis:20%;}
      @media (max-width: 979px) {
      .reviews{padding:50px 0 0;}
      }
      @media (max-width: 767px) {
      .inner-banner-bg .bannerwrap{background-size: 0 !important; background-image: none !important;}
      .inner-banner-bg::after, .hero-banner:after, .inner-banner:after {display:none;} 
      .inner-banner-bg .inner-wrap{margin:0;}
      .inner-banner-bg{padding: 100px 0 50px;}
      .inner-banner-bg .bannerwrap {padding:0;}
      .inner-banner-bg{height:initial;}
      .hero-banner {padding:100px 0 50px;}
      body.single .blog-thumb,
      .desk-only{ display:none; }
      .page-template-tpl-static-pricing .hero-banner .inner-wrap{flex-wrap:wrap;}
      .page-template-tpl-static-pricing .hero-banner .inner-wrap .left{flex-basis:100%; text-align: center;}
      .page-template-tpl-static-pricing .hero-banner .inner-wrap .right{flex-basis:100%; text-align:center;}
      .career_row .row{flex-wrap:wrap; justify-content: center !important;}
      .career_row .row .job-row, .career_row .row .apply-row{width: 100% !important; text-align: center !important;}
      .career_row .row .apply-row{margin-top: 20px; }
      }
      .tool-tip-wrap{position: relative;}
      .wsf-signup .popup-content .right-section .form-wrap .form-group label.info-lbl{pointer-events: inherit;}
      .info-lbl span.tolltip{display: none; font-size: 12px; position: absolute; top: 0; left: 18px; 
      width:250px; background:#333; color: #ffffff !important; padding: 8px;}
      img.info-img:hover + span.tolltip{display:block; cursor: pointer;}
      .form-group.ws-error .info-lbl span.tolltip{color:#525f7f;}
      #elm-maps.sel-desktop .box-wrap.sel-web,
      #elm-maps.sel-desktop .box-wrap.sel-mobile{display:none;}
      #elm-maps.sel-desktop .box-wrap.sel-desktop{display:block;}
      #elm-maps.sel-web .box-wrap.sel-desktop,
      #elm-maps.sel-web .box-wrap.sel-mobile{display:none;}
      #elm-maps.sel-web .box-wrap.sel-web{display:block;}
      #elm-maps.sel-mobile .box-wrap.sel-desktop,
      #elm-maps.sel-mobile .box-wrap.sel-web{display:none;}
      #elm-maps.sel-mobile .box-wrap.sel-mobile{display:block;}
      body.modal-open{overflow:hidden;}
      .hero-banner .inner-wrap #wsroi-calculator .calculator{margin-bottom: 20px;}
      .hero-banner .inner-wrap #wsroi-calculator .salary{top:-75px; left: 0; font-size:12px;}
      .wsf-signup .popup-content .right-section.signup-success .sucmsg h3{color: #110302 !important; }
      .wsf-signup .popup-content .right-section.signup-success .sucmsg p{color: #737b7d !important; }
      body.page-id-7306 .feature_section,
      body.page-id-7306 .actionBtn.ws-journey div,
      body.page-id-6785 .actionBtn.ws-journey div{display: none;}
      body.page-id-7306 .actionBtn.ws-journey div:last-child,
      body.page-id-6785 .actionBtn.ws-journey div:last-child{display: block;}
      body.page-id-7306 #ws-comprehensive_dashboard_section .btnSc,
      body.page-id-7306 #ws-boost_profitability .btnSc,
      body.page-id-7306 .wsMobile{display: none;}
      .option.hrd:before{background: none !important;}
      .option.hrd{padding-left: 0 !important;}
      .option.hrd strong{font-size: 20px;}
      body.geo-india .int-only{display: none !important;} 
      .int-local{display: none;}
      body.geo-india .int-local{display: inline-block;}
      .career_row .row{display: flex; justify-content: space-between; background:#f6f4ff; margin-bottom: 20px; padding: 30px; border-radius: 10px; border: 1px solid #aea4e7;}
      .career_row .row .job-row{ width:70%; }
      .career_row .row .apply-row{width:30%; text-align: right;}
      .career_row .row .apply-row .primary_btn1{border-radius: 30px; height: 50px; line-height: 16px;}
      .tt-inherit{text-transform: initial;}
      @media screen and (max-width: 1023px) {
      .site_nav > ul > li#howitworksitem{position: relative;}
      .feature-header .site__header .site_nav > ul > li#howitworksitem > a::before {display:none;}
   
      }

      @media (max-width:1023px) {
        .cop{width: 100%; justify-content: center;}
        .fbedge{margin:20px 0 0; text-align:center; width: 100%;}
      }
    
      .cnd-phone{display: none;}
      .locate-in .cnd-phone{display: block;}
      body.show-wsaddon .this-block{display: none !important;}
      body.show-wsaddon #ws-addon-data,body.show-wsaddon .support-options{display:block!important;}
      .prio.monthly, body.ps-monthly .prio.annual{ display:none !important; }
      body.ps-monthly .prio.monthly{ display:block !important; }
      /*
      .top-plateform .flex_row .column-right.con-alf h3:before{content:none;}
      .top-plateform .flex_row .column-right.con-alf h3{padding-left: 0;}
      */
      .works-journey .ws-flex .jour-col .actionBtn a.primary_btn1:after,
      .banner-section .home-section .flex_row .column-content .actionBtn a.primary_btn1:after{
      background-image:url(<?php bloginfo('template_url'); ?>/assests/images/clock-icon-black.svg) !important;}
      .works-journey .ws-flex .jour-col .actionBtn a.primary_btn1:hover:after,
      .banner-section .home-section .flex_row .column-content .actionBtn a.primary_btn1:hover:after{
      background-image:url(<?php bloginfo('template_url'); ?>/assests/images/clock-icon.png) !important;  
      }
      .works-journey .ws-flex .jour-col .actionBtn a.primary_btn1.tts:after{
      background-image:url(<?php bloginfo('template_url'); ?>/assests/images/button-arw.png) !important;
      }
      .works-journey .ws-flex .jour-col .actionBtn a.primary_btn1.tts:hover:after,
      .works-journey .ws-flex .jour-col .actionBtn a.primary_btn2:after,
      .banner-section .home-section .flex_row .column-content .actionBtn a.primary_btn2:after{
      background-image:url(<?php bloginfo('template_url'); ?>/assests/images/button-arwhover.png) !important;
      }
      .ctbtn.nobg{border:1px solid #5D2BFF !important; border-radius: 30px !important; min-width: 213px !important; 
      padding:15px 30px !important; color: #5D2BFF !important; text-decoration: none !important;}
      .ctbtn.nobg:hover{border-color:#000 !important; color:#000 !important;}
      .ws-ctav4 .btnSc .ctasec .ctbtn{border:1px solid #5D2BFF;}
      .ws-ctav4 .btnSc .ctasec .ctbtn:hover{border-color:#fff;}
      @media (max-width: 767px) {
        .ctbtn.nobg{padding:12px 18px !important; font-size:15px !important;}
        .ctbtn.nobg{padding:12px 18px !important;}
        body.page-template-tpl-tools-comparison .benifits-section .column-three{text-align:center;}
      }
      .usecase-tabs .tab-nav ul.ucase li a{font-size: 14px; padding:15px 8px}
      .usecase-tabs .tab-nav ul.ucase li a span.icon{display: none;}
      
      body.page-template-page-templatestpl-tools-comparison-php .price span,
      body.page-template-page-templatestpl-tools-comparison-php .prloc span{display: none;}
      
      body.locate-ind span.spn-local,
      body.locate-ind .price span.spn-local,
      body.locate-int span.spn-int,
      body.locate-int .price span.spn-int{display:block;}      
      
      body.locate-int span.spn-ind, 
      body.locate-int span.spn-local,
      body.locate-ind span.spn-int{display:none;}

      
      body.locate-ind .spn-intr,  body.locate-int .spn-ind {display:none;}

    
     
      body.page-template-tpl-tools-comparison .benifits-section .column-three{flex-basis: 32%; border-radius: 10px; 
      background: #faf8fe; padding: 25px; margin:0 0 25px;}
   
      @media screen and (max-width:575px){
      body.page-template-tpl-tools-comparison .benifits-section .column-three{flex-basis: 100%;margin: 15px 0 0;}
      }
      #inv-price-fltr .country-select{display:none!important;}
      
      .header-two .header-item-right .menu ul li .menu-mega{top:135%;}
    
      .business-growth-section .content-wrapper .column.with-workstatus ul li a{color:#00234b;}
      .compare-projects .features-container .compare-column .tool-col.comp-logo .price.active{margin-top: 20px;}
      
      .ws-pricing .price-contents span.prio{position: relative;}
      body.ps-monthly span.prio span.billed{display:none !important;}
      .ws-pricing .price-contents span.prio.cw span.billed{width:150%;}
      .ws-pricing .price-contents span.prio span.billed{font-size: 10px; position:absolute; bottom:-20px; width:100%; right: -6px;}
      
      body.wsp-productivity .addond-col.elm-tracking-atn,
      body.wsp-everything .addond-col.elm-tracking-atn,
      body.wsp-attendance .addond-col.elm-tracking{display: none;}
    </style>
    
    <?php if( isBetaVersion() === false ) : ?>
    <script>
    // Initialize the dataLayer
    window.dataLayer = window.dataLayer || [];
    function gtag() {
    dataLayer.push(arguments);
    }

    gtag('consent', 'default', {
    analytics_storage: localStorage.getItem('silktideCookieChoice_analytics') === 'true' ? 'granted' : 'denied',
    ad_storage: localStorage.getItem('silktideCookieChoice_marketing') === 'true' ? 'granted' : 'denied',
    ad_user_data: localStorage.getItem('silktideCookieChoice_marketing') === 'true' ? 'granted' : 'denied',
    ad_personalization: localStorage.getItem('silktideCookieChoice_marketing') === 'true' ? 'granted' : 'denied',
    functionality_storage: localStorage.getItem('silktideCookieChoice_necessary') === 'true' ? 'granted' : 'denied',
    security_storage: localStorage.getItem('silktideCookieChoice_necessary') === 'true' ? 'granted' : 'denied'
    });
    </script>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-NPPMGZH');
    </script>
    <!-- End Google Tag Manager --> 

    <!-- Crisp Chat Integration -->
    <script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="79fd82c4-ae99-43a9-81bb-9cecb2b4d54a";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script> 
    <!-- End here -->
    <?php endif; ?>
  </head>
  <body <?php body_class(); ?> 
    data-ptemplate="<?php echo basename( get_page_template() ); ?>"
    data-utm="<?php echo (isset($_SERVER['QUERY_STRING']) && !empty($_SERVER['QUERY_STRING'])) ? 
      $_SERVER['QUERY_STRING'] : ''; ?>"
    data-url="<?php the_permalink(); ?>">
    <?php if(isBetaVersion() === false) : ?>
    <!-- Google Tag Manager (noscript) -->
    <noscript>
      <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NPPMGZH" height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->
    <?php endif; ?>  
    <?php //wp_body_open(); ?>
    <?php  echo ( wsFeaturedHeader() ) ? '<div class="feature-header">' : ''; ?>
    <header class="header-two" id="masthead">
      <div class="container">
        <div class="wrapper">
          <div class="header-item-left">
            <a href="<?php echo site_url(); ?>/" class="brand">
              <div class="large">
                <img class="light" loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/header-images/logo-white.svg" alt="Workstatus" width="400" height="75">
                <img class="dark" loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/header-images/logo-dark.svg" alt="Workstatus" width="400" height="75">
              </div>
              <div class="small">
            <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/header-images/logo-small.svg" alt="Workstatus" width="80" height="80">
          </div>
            </a>
            <div class="hamberger-menu">
              <div class="bar1"></div>
              <div class="bar2"></div>
              <div class="bar3"></div>
            </div>
          </div>
          <div class="header-item-right">
            <nav class="menu mob-nav" id="menu">
              <ul>
                <li class="menu-item-has-children">
                  <a class="mst-link" href="<?php echo site_url(); ?>/product">Product</a> <span class="arrow-btn"></span>
                  <div class="menu-mega bg-purple">
                    <div class="container">
                      <div class="dis-flex tab-menu">
                        <div id="menu-serv" class="dis-flex tab-contents">
                          <div class="left-tabs">
                            <ul class="tab-nav">
                              <li class="tab-link is-active"><a href="<?php echo site_url(); ?>/time-attendance/time-tracking-software">Time Tracking</a></li>
                              <li class="tab-link"><a href="<?php echo site_url(); ?>/productivity-management">Productivity Management</a></li>
                              <li class="tab-link"><a href="<?php echo site_url(); ?>/project-management">Project & Task Management</a></li>
                              <li class="tab-link"><a href="<?php echo site_url(); ?>/attendance-tracking">Attendance Tracking</a></li>
                              <li class="tab-link"><a href="<?php echo site_url(); ?>/reporting-analytics">Reporting & Analytics</a></li>
                              <li class="tab-link"><a href="<?php echo site_url(); ?>/workforce-management/enterprise"> Enterprise Solutions</a></li>
                              <li class="tab-link"><a href="<?php echo site_url(); ?>/resource-management">Resource Management</a></li>
                            </ul>
                          </div>
                          <div class="right-tabs">
                            <div class="tab-content is-active">
                              <div class="three-column width-full" style="width:100%">
                                <div class="tab-title"><a href="<?php echo site_url(); ?>/time-attendance/time-tracking-software"><img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/header-images/product-01.svg" class="menuicon" alt="menuicon"><span class="title">Time Tracking</span>
                                  Track Time, Boost Productivity
                                  </a><span class="ser-arrow-btn"></span>
                                </div>
                                <div class="dis-flex menu-column sub-service">
                                  <div class="flex-3">
                                    <a href="<?php echo site_url(); ?>/time-attendance/timesheet-software"><span class="title">Online Timesheets</span>
                                    Accurate timesheet, effortless tracking</a>
                                    <a href="<?php echo site_url(); ?>/time-attendance/online-time-reporting"><span class="title">Online Time Reporting</span>
                                    Stay informed with real-time reporting</a>
                                    <a href="<?php echo site_url(); ?>/time-attendance/web-based-time-tracker"><span class="title">Web Based Time Tracker</span>
                                    Track time, anytime, anywhere</a>
                                    <a href="<?php echo site_url(); ?>/time-attendance/shift-management"><span class="title">Shift Management</span>
                                    Manage shifts, empower team</a>
                                    <a href="<?php echo site_url(); ?>/time-attendance/live-location-tracking"><span class="title">Live Location Tracking</span>
                                    Enhanced visibility, increased security</a>
                                  </div>
                                  <div class="flex-3">
                                    <a href="<?php echo site_url(); ?>/time-attendance/time-off-management"><span class="title">Time Off Management</span>
                                    Manage time for work-life balance</a>
                                    <a href="<?php echo site_url(); ?>/time-attendance/geofencing-software"><span class="title">Geofence Time Tracking</span>
                                    Secure, accurate time tracking</a>
                                    <a href="<?php echo site_url(); ?>/time-attendance/time-clock-app"><span class="title">Time Clock App</span>
                                    Simplify HR workflow</a>
                                    <a href="<?php echo site_url(); ?>/time-attendance/automatic-time-mapping"><span class="title">Automatic Time Mapping</span>
                                    Track time spent on tasks
                                    </a>
                                    <a href="<?php echo site_url(); ?>/workforce-management/habit-tracker-app "><span class="title">Habit Tracker App</span>
                                    Track habits, achieve goals
                                    </a>
                                  </div>
                                  <div class="flex-3">
                                    <a href="<?php echo site_url(); ?>/time-attendance/screen-monitoring"><span class="title">Screen Monitoring</span>
                                    Real-time Screen Insights</a>
                                    <a href="<?php echo site_url(); ?>/time-attendance/work-timer"><span class="title">Work Timer</span>
                                    Time Your Tasks</a>
                                    <a href="<?php echo site_url(); ?>/time-attendance/timesheet-approval"><span class="title">Timesheet Approval</span>
                                    Quick Timesheet Reviews</a>
                                    <a href="<?php echo site_url(); ?>/time-attendance/idle-detection-reminders"><span class="title">Idle detection & reminders</span>
                                    Detect Idle Activity</a>                                    
                                  </div>
                                </div>
                              </div>                              
                            </div>
                            <div class="tab-content">
                              <div class="three-column">
                                <div class="tab-title"><a href="<?php echo site_url(); ?>/productivity-management"><img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/header-images/product-02.svg" class="menuicon" alt="menuicon"><span class="title">Productivity Management</span>
                                  Boost productivity, drive results</a><span class="ser-arrow-btn"></span>
                                </div>
                                <div class="dis-flex menu-column sub-service">
                                  <div class="flex-2">
                                    <a href="<?php echo site_url(); ?>/workforce-management/employee-productivity-tracking"><span class="title">Employee Productivity</span>
                                    Boost productivity, drive results</a>
                                    <a href="<?php echo site_url(); ?>/workforce-management/habit-tracker-app"><span class="title">Habit Tracker App</span>
                                    Track habits, achieve goals</a>
                                    <a href="<?php echo site_url(); ?>/workforce-management/employee-monitoring-software">
                                    <span class="title">Employee Monitoring</span>Insights that empower teams</a>
                                    <a href="<?php echo site_url(); ?>/productivity-management/smart-break">
                                    <span class="title">Smart Break Scheduling</span>Smart Break Management</a>
                                  </div>
                                  <div class="flex-2">
                                    <a href="<?php echo site_url(); ?>/reporting-analytics/workload-management"><span class="title">Workload Management</span>
                                    Balance workloads, avoid burnout
                                    </a>
                                    <a href="<?php echo site_url(); ?>/workforce-management/employee-burnout"><span class="title">Employee Burnout</span>
                                    Prevent burnout, promote well-being</a>
                                    <a href="<?php echo site_url(); ?>/workforce-management/user-activity-monitoring">
                                    <span class="title">User Activity Monitoring (UAM)</span>Track activity, ensure focus</a>
                                  </div>
                                </div>
                              </div>
                              <div class="other-menu mob-hide">
                                <div class="tab-title"><a href="<?php echo site_url('/workplace-mode'); ?>"><span class="title">Workplace Modes</span>
                                  Work Seamlessly, Stay Connected </a><span class="ser-arrow-btn"></span>
                                </div>
                                <div class="flex-1 menu-column sub-service">
                                  <a href="<?php echo site_url(); ?>/workplace-mode/remote-work-management"><img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/header-images/mode-01.svg" class="menuicon" alt="menuicon"><span class="title">Remote Work</span>Track remote employees
                                  </a>
                                  <a href="<?php echo site_url(); ?>/workplace-mode/hybrid-work-management"><img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/header-images/mode-02.svg" class="menuicon" alt="menuicon"><span class="title">Hybrid Work</span>Optimize work-life balance
                                  </a>
                                  <a href="<?php echo site_url(); ?>/workforce-management/field-service-management"><img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/header-images/mode-03.svg" class="menuicon" alt="menuicon"><span class="title">Field Work</span>Track work, on-the-go
                                  </a>
                                  <a href="<?php echo site_url(); ?>/workplace-mode/office-work"><img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/header-images/mode-04.svg" class="menuicon" alt="menuicon"><span class="title">Office Work</span>Manage in-office employees
                                  </a>
                                </div>
                              </div>
                            </div>
                            <div class="tab-content">
                              <div class="three-column">
                                <div class="tab-title"><a href="<?php echo site_url(); ?>/project-management"><img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/header-images/product-03.svg" class="menuicon" alt="menuicon"><span class="title">Project & Task Management</span>
                                  Manage Teams, Boost Productivity
                                  </a><span class="ser-arrow-btn"></span>
                                </div>
                                <div class="dis-flex menu-column sub-service">
                                  <div class="flex-2">
                                    <a href="<?php echo site_url(); ?>/project-management/project-budgeting-software"><span class="title">Project Budgeting</span>
                                    Track costs, maximize ROI</a>
                                    <a href="<?php echo site_url(); ?>/project-management/online-invoicing-software"><span class="title">Online Invoicing</span>
                                    Manage invoices, track payments</a>
                                    <a href="<?php echo site_url(); ?>/project-management/daily-standup"><span class="title">Daily StandUp Meetings</span>
                                    Track project status, every day</a>
                                    <a href="<?php echo site_url(); ?>/project-management/agile-workflows"><span class="title">Agile Project Management</span>
                                    Flexible workflows, faster results</a>
                                    <a href="<?php echo site_url(); ?>/project-management/kanban-board"><span class="title">Kanban Board</span>Streamline Your Workflow</a>
                                  </div>
                                  <div class="flex-2">
                                    <a href="<?php echo site_url(); ?>/project-management/agile-sprint"><span class="title">Agile Sprint Planning</span>
                                    Deliver value, iterate fast</a>
                                    <a href="<?php echo site_url(); ?>/project-management/epics"><span class="title">Epics & Story Management</span>
                                    Focus on key initiatives</a>
                                    <a href="<?php echo site_url(); ?>/project-management/task-management"><span class="title">Task Management</span>
                                    Prioritize, track, & collaborate</a>
                                    <a href="<?php echo site_url(); ?>/project-management/gantt-charts"><span class="title">Gantt Chart</span>Visualize timelines, achieve goals</a>
                                    <!-- <a href="<?php echo site_url(); ?>/project-management/online-invoicing-software"><span class="title">Online Invoicing</span>Simplify invoicing, get paid faster</a> -->
                                  </div>
                                </div>
                              </div>
                              <div class="other-menu mob-hide">
                                <div class="tab-title"><a href="<?php echo site_url('/workplace-mode'); ?>"><span class="title">Workplace Modes
                                  </span>
                                  Work Seamlessly, Stay Connected </a><span class="ser-arrow-btn"></span>
                                </div>
                                <div class="flex-1 menu-column sub-service">
                                  <a href="<?php echo site_url(); ?>/workplace-mode/remote-work-management"><img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/header-images/mode-01.svg" class="menuicon" alt="menuicon"><span class="title">Remote Work</span>Track remote employees
                                  </a>
                                  <a href="<?php echo site_url(); ?>/workplace-mode/hybrid-work-management"><img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/header-images/mode-02.svg" class="menuicon" alt="menuicon"><span class="title">Hybrid Work</span>Optimize work-life balance
                                  </a>
                                  <a href="<?php echo site_url(); ?>/workforce-management/field-service-management"><img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/header-images/mode-03.svg" class="menuicon" alt="menuicon"><span class="title">Field Work</span>Track work, on-the-go
                                  </a>
                                  <a href="<?php echo site_url(); ?>/workplace-mode/office-work"><img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/header-images/mode-04.svg" class="menuicon" alt="menuicon"><span class="title">Office Work</span>Manage in-office employees
                                  </a>
                                </div>
                              </div>
                            </div>
                            <div class="tab-content">
                              <div class="three-column">
                                <div class="tab-title"><a href="<?php echo site_url(); ?>/attendance-tracking"><img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/header-images/product-04.svg" class="menuicon" alt="menuicon"><span class="title">Attendance Tracking</span>
                                  Accurate attendance, every day
                                  </a><span class="ser-arrow-btn"></span>
                                </div>
                                <div class="dis-flex menu-column sub-service">
                                  <div class="flex-2">
                                    <a href="<?php echo site_url(); ?>/time-attendance/attendance-management"><span class="title">Attendance Management</span>
                                    Track attendance, optimize workforce</a>
                                    <a href="<?php echo site_url(); ?>/time-attendance/shift-management"><span class="title">Shift Management</span>
                                    Manage shifts, empower team</a>
                                    <a href="<?php echo site_url(); ?>/time-attendance/time-off-management"><span class="title">Time-Off Management</span>
                                    Manage time for work-life balance</a>
                                    <a href="<?php echo site_url(); ?>/time-attendance/geofencing-software"><span class="title">Geofence Time Tracking</span>
                                    Secure, accurate time tracking</a>
                                  </div>
                                  <div class="flex-2">
                                    <a href="<?php echo site_url(); ?>/time-attendance/facial-recognition-software"><span class="title">Face Recognition</span>
                                    Verify time and attendance</a>
                                    <a href="<?php echo site_url(); ?>/time-attendance/live-location-tracking"><span class="title">GPS-based Attendance Tracking</span>Location-based, real-time attendance</a>
                                    <a href="<?php echo site_url(); ?>/workforce-management/employee-scheduling-software"><span class="title">Employee Scheduling</span>
                                    Flexible, seamless scheduling</a>
                                  </div>
                                </div>
                              </div>
                              <div class="other-menu mob-hide">
                                <div class="tab-title"><a href="<?php echo site_url('/workplace-mode'); ?>"><span class="title">Workplace Modes
                                  </span>
                                  Work Seamlessly, Stay Connected </a><span class="ser-arrow-btn"></span>
                                </div>
                                <div class="flex-1 menu-column sub-service">
                                  <a href="<?php echo site_url(); ?>/workplace-mode/remote-work-management"><img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/header-images/mode-01.svg" class="menuicon" alt="menuicon"><span class="title">Remote Work</span>Track remote employees
                                  </a>
                                  <a href="<?php echo site_url(); ?>/workplace-mode/hybrid-work-management"><img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/header-images/mode-02.svg" class="menuicon" alt="menuicon"><span class="title">Hybrid Work</span>Optimize work-life balance
                                  </a>
                                  <a href="<?php echo site_url(); ?>/workforce-management/field-service-management"><img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/header-images/mode-03.svg" class="menuicon" alt="menuicon"><span class="title">Field Work</span>Track work, on-the-go
                                  </a>
                                  <a href="<?php echo site_url(); ?>/workplace-mode/office-work"><img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/header-images/mode-04.svg" class="menuicon" alt="menuicon"><span class="title">Office Work</span>Manage in-office employees
                                  </a>
                                </div>
                              </div>
                            </div>
                            <div class="tab-content">
                              <div class="three-column">
                                <div class="tab-title"><a href="<?php echo site_url(); ?>/reporting-analytics"><img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/header-images/product-05.svg" class="menuicon" alt="menuicon"><span class="title">Reporting & Analytics</span>
                                  Data-driven Insights, Informed Decisions
                                  </a><span class="ser-arrow-btn"></span>
                                </div>
                                <div class="dis-flex menu-column sub-service">
                                  <div class="flex-2">
                                    <a href="<?php echo site_url(); ?>/reporting-analytics/productivity-reports"><span class="title">Productivity Reports</span>
                                    Get actionable insights with data</a>
                                    <a href="<?php echo site_url(); ?>/reporting-analytics/application-website-usage"><span class="title">Application & Website Usage</span>
                                    Optimize digital workflows</a>
                                    <a href="<?php echo site_url(); ?>/reporting-analytics/location-analytics"><span class="title">Location Analytics</span>
                                    Real-time location insights</a>
                                    <a href="<?php echo site_url(); ?>/reporting-analytics/impact-analysis"><span class="title">Impact Analysis</span>
                                    Track impact, drive results</a>
                                    <a href="<?php echo site_url(); ?>/reporting-analytics/workload-management"><span class="title">Workload Management</span>
                                    Manage tasks, prioritize goals</a>
                                  </div>
                                  <div class="flex-2">
                                    <a href="<?php echo site_url(); ?>/reporting-analytics/benchmark-goals"><span class="title">Benchmark & Goals</span>Set new goals, track progress</a>
                                    <a href="<?php echo site_url(); ?>/reporting-analytics/workforce-analytics-software"><span class="title">Workforce Analytics</span>
                                    Gain insights, make better decisions</a>
                                    <a href="<?php echo site_url(); ?>/reporting-analytics/overtime-tracker"><span class="title">Overtime Tracker</span>
                                    Track extra hours, easily</a>
                                    <a href="<?php echo site_url(); ?>/reporting-analytics/compliance-reporting"><span class="title">Compliance Reporting</span>
                                    Stay compliant, avoid risks</a>
                                    <a href="<?php echo site_url(); ?>/reporting-analytics/meeting-insights"><span class="title">Meeting Insights</span>
                                    Make meetings more productive</a>
                                  </div>
                                </div>
                              </div>
                              <div class="other-menu mob-hide">
                                <div class="tab-title"><a href="<?php echo site_url('/workplace-mode'); ?>"><span class="title">Workplace Modes
                                  </span>
                                  Work Seamlessly, Stay Connected </a><span class="ser-arrow-btn"></span>
                                </div>
                                <div class="flex-1 menu-column sub-service">
                                  <a href="<?php echo site_url(); ?>/workplace-mode/remote-work-management"><img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/header-images/mode-01.svg" class="menuicon" alt="menuicon"><span class="title">Remote Work</span>Track remote employees
                                  </a>
                                  <a href="<?php echo site_url(); ?>/workplace-mode/hybrid-work-management"><img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/header-images/mode-02.svg" class="menuicon" alt="menuicon"><span class="title">Hybrid Work</span>Optimize work-life balance
                                  </a>
                                  <a href="<?php echo site_url(); ?>/workforce-management/field-service-management"><img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/header-images/mode-03.svg" class="menuicon" alt="menuicon"><span class="title">Field Work</span>Track work, on-the-go
                                  </a>
                                  <a href="<?php echo site_url(); ?>/workplace-mode/office-work"><img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/header-images/mode-04.svg" class="menuicon" alt="menuicon"><span class="title">Office Work</span>Manage in-office employees
                                  </a>
                                </div>
                              </div>
                            </div>
                            <div class="tab-content">
                              <div class="three-column">
                                <div class="tab-title"><a href="<?php echo site_url(); ?>/workforce-management/enterprise"><img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/header-images/product-06.svg" class="menuicon" alt="menuicon"><span class="title">Enterprise Solutions</span>
                                  Scalable solutions for enterprises
                                  </a><span class="ser-arrow-btn"></span>
                                </div>
                                <div class="dis-flex menu-column sub-service">
                                  <div class="flex-2">
                                    <a href="<?php echo site_url(); ?>/workforce-management"><span class="title">Workforce Management</span>
                                    Manage Teams, Boost Productivity</a>
                                    <a href="<?php echo site_url(); ?>/workforce-management/workforce-optimization"><span class="title">Workforce Optimization</span>
                                    Optimize workforce, achieve excellence</a>
                                    <a href="<?php echo site_url(); ?>/workforce-management/data-loss-prevention"><span class="title">Data Loss Prevention (DLP)</span>
                                    Data protection you can trust</a>
                                    <a href="<?php echo site_url(); ?>/workforce-management/license-management"><span class="title">License Management</span>
                                    Manage Licenses Easily</a>
                                  </div>
                                  <div class="flex-2">
                                    <a href="<?php echo site_url(); ?>/workforce-management/user-activity-monitoring"><span class="title">User Activity Monitoring</span>Enhanced insights, optimized workflow</a>
                                    <a href="<?php echo site_url(); ?>/workforce-management/payroll"><span class="title">Payroll</span>
                                    Streamlined payroll, easy management</a>
                                    <a href="<?php echo site_url(); ?>/customization"><span class="title">Custom Solutions & Integrations</span>Tailored workforce management</a>
                                  </div>
                                </div>
                              </div>
                              <div class="other-menu mob-hide">
                                <div class="tab-title"><a href="<?php echo site_url('/workplace-mode'); ?>"><span class="title">Workplace Modes
                                  </span>
                                  Work Seamlessly, Stay Connected </a><span class="ser-arrow-btn"></span>
                                </div>
                                <div class="flex-1 menu-column sub-service">
                                  <a href="<?php echo site_url(); ?>/workplace-mode/remote-work-management"><img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/header-images/mode-01.svg" class="menuicon" alt="menuicon"><span class="title">Remote Work</span>Track remote employees
                                  </a>
                                  <a href="<?php echo site_url(); ?>/workplace-mode/hybrid-work-management"><img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/header-images/mode-02.svg" class="menuicon" alt="menuicon"><span class="title">Hybrid Work</span>Optimize work-life balance
                                  </a>
                                  <a href="<?php echo site_url(); ?>/workforce-management/field-service-management"><img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/header-images/mode-03.svg" class="menuicon" alt="menuicon"><span class="title">Field Work</span>Track work, on-the-go
                                  </a>
                                  <a href="<?php echo site_url(); ?>/workplace-mode/office-work"><img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/header-images/mode-04.svg" class="menuicon" alt="menuicon"><span class="title">Office Work</span>Manage in-office employees
                                  </a>
                                </div>
                              </div>
                            </div>
                            <div class="tab-content">
                              <div class="three-column">
                                <div class="tab-title"><a href="<?php echo site_url(); ?>/resource-management"><img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/header-images/product-07.svg" class="menuicon" alt="menuicon"><span class="title">Resource Management</span>
                                  Optimize resources, maximize impact
                                  </a><span class="ser-arrow-btn"></span>
                                </div>
                                <div class="dis-flex menu-column sub-service">
                                  <div class="flex-2">
                                    <a href="<?php echo site_url(); ?>/reporting-analytics/resource-allocation-software "><span class="title">Dynamic Resource Allocation</span>Smart resource allocation</a>
                                    <a href="<?php echo site_url(); ?>/reporting-analytics/workload-management"><span class="title">Workload Management</span>Robust server/client expertise</a>
                                    <a href="<?php echo site_url(); ?>/time-attendance/time-off-management"><span class="title">Time-off Management</span>Manage time-off, avoid disruptions</a>
                                  </div>
                                  <div class="flex-2">
                                    <a href="<?php echo site_url(); ?>/workforce-management/employee-scheduling-software "><span class="title">Employee Scheduling </span>
                                    Flexible, seamless scheduling</a>
                                    <a href="<?php echo site_url(); ?>/resource-management/budget-tracking-software"><span class="title">Budget Tracking</span>Budget Tracking Simplified</a>
                                    
                                  </div>
                                </div>
                              </div>
                              <div class="other-menu mob-hide">
                                <div class="tab-title"><a href="<?php echo site_url('/workplace-mode'); ?>"><span class="title">Workplace Modes
                                  </span>
                                  Work Seamlessly, Stay Connected </a><span class="ser-arrow-btn"></span>
                                </div>
                                <div class="flex-1 menu-column sub-service">
                                  <a href="<?php echo site_url(); ?>/workplace-mode/remote-work-management"><img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/header-images/mode-01.svg" class="menuicon" alt="menuicon"><span class="title">Remote Work</span>Track remote employees
                                  </a>
                                  <a href="<?php echo site_url(); ?>/workplace-mode/hybrid-work-management"><img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/header-images/mode-02.svg" class="menuicon" alt="menuicon"><span class="title">Hybrid Work</span>Optimize work-life balance
                                  </a>
                                  <a href="<?php echo site_url(); ?>/workforce-management/field-service-management"><img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/header-images/mode-03.svg" class="menuicon" alt="menuicon"><span class="title">Field Work</span>Track work, on-the-go
                                  </a>
                                  <a href="<?php echo site_url(); ?>/workplace-mode/office-work"><img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/header-images/mode-04.svg" class="menuicon" alt="menuicon"><span class="title">Office Work</span>Manage in-office employees
                                  </a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="menu-item-has-children">
                  <a class="mst-link" href="<?php echo site_url(); ?>/solution">Solutions</a> <span class="arrow-btn"></span>
                  <div class="menu-mega bg-purple">
                    <div class="container">
                      <div class="dis-flex tab-menu">
                        <div id="mnu-sol" class="dis-flex tab-contents">
                          <div class="right-tabs solution-menu">
                            <div class="tab-content is-active solution-tab">
                              <div class="three-column">
                                <div class="dis-flex menu-column">
                                  <div class="flex-2">
                                    <div class="tab-title"><a href="<?php echo site_url(); ?>/time-attendance/time-tracking-software"><span class="title">Time Tracking</span>
                                      </a><span class="hr-arrow-btn"></span>
                                    </div>
                                    <div class="hr-submenu">
                                      <div class="bor-line">
                                        <a href="<?php echo site_url(); ?>/time-attendance/gps-workforce-management">
                                        Remote Workforce Time Management & Monitoring
                                        </a>
                                        <a href="<?php echo site_url(); ?>/time-attendance/streamline-billing">
                                        Accurate Time Tracking for Precise Project Costing
                                        </a>
                                        <a href="<?php echo site_url(); ?>/time-attendance/automate-timesheet">
                                        Automated Client Billing & Accurate Timesheets</a>
                                      </div>
                                      <a href="<?php echo site_url(); ?>/use-cases?filter=time#uc-filter" class="view-more">View More</a>
                                    </div>
                                  </div>
                                  <div class="flex-2">
                                    <div class="tab-title">
                                    <a href="<?php echo site_url('/productivity-management'); ?>">
                                      <span class="title">Productivity Management</span>
                                      </a><span class="hr-arrow-btn"></span>
                                    </div>
                                    <div class="hr-submenu">
                                      <div class="bor-line">
                                        <a href="<?php echo site_url(); ?>/project-management/ai-productivity-tracking">
                                        AI-Driven Productivity Insights & Analytics</a>
                                        <a href="<?php echo site_url(); ?>/workforce-management/work-from-home-monitoring">
                                        WFH Employee Monitoring & Efficiency Tracking</a>
                                        <a href="<?php echo site_url(); ?>/workforce-management/employee-burnout">
                                        Preventing Employee Burnout via Workload Management</a>
                                      </div>
                                      <a href="<?php echo site_url(); ?>/use-cases?filter=productivity#uc-filter" class="view-more">View More</a>
                                    </div>
                                  </div>
                                 
                                </div>
                                <div class="dis-flex menu-column">
                                <div class="flex-2">
                                    <div class="tab-title"><a href="<?php echo site_url(); ?>/project-management"><span class="title">Project & Task Management</span>
                                      </a><span class="hr-arrow-btn"></span>
                                    </div>
                                    <div class="hr-submenu">
                                      <div class="bor-line">
                                        <a href="<?php echo site_url(); ?>/project-management/agile-workflows">
                                        Agile Project Management & Sprint Planning</a>
                                        <a href="<?php echo site_url(); ?>/workforce-management/cross-functional-collaboration">
                                        Cross-functional Team Coordination & Task Allocation</a>
                                        <a href="<?php echo site_url(); ?>/workforce-management/agile-resource-allocation">
                                        Centralized Resource Management and Allocation</a>
                                      </div>
                                      <a href="<?php echo site_url(); ?>/use-cases?filter=project#uc-filter" class="view-more">View More</a>
                                    </div>
                                  </div>
                                  <div class="flex-2">
                                    <div class="tab-title">
                                      <a href="<?php echo site_url('/attendance-tracking'); ?>"><span class="title">Attendance Tracking</span>
                                      </a>
                                      <span class="hr-arrow-btn"></span>
                                    </div>
                                    <div class="hr-submenu">
                                      <div class="bor-line">
                                        <a href="<?php echo site_url(); ?>/time-attendance/gps-workforce-management">
                                        Geofencing & GPS Attendance for Field Teams</a>
                                        <a href="<?php echo site_url(); ?>/reporting-analytics/overtime-tracker">
                                        Automated Overtime Tracking and Calculation</a>
                                        <a href="<?php echo site_url(); ?>/workforce-management/selfie-validation-for-compliance">
                                        Facial Recognition Attendance & Time Fraud Elimination</a>
                                      </div>
                                      <a href="<?php echo site_url(); ?>/use-cases?filter=attendance#uc-filter" class="view-more">View More</a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="other-menu mob-hide">
                                <div class="tab-title"><a href="<?php echo site_url(); ?>/workforce-management/enterprise"><span class="title">Enterprises</span>
                                  Innovative, future-proof software solutions </a><span class="ser-arrow-btn"></span>
                                </div>
                                <div class="flex-1 menu-column sub-service">
                                  <a href="<?php echo site_url(); ?>/workforce-management"><img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/header-images/enter-01.svg" class="menuicon" alt="menuicon"><span class="title">Workforce Management</span>Comprehensive support solutions
                                  </a>
                                  <a href="<?php echo site_url(); ?>/workforce-management/workforce-optimization"><img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/header-images/enter-01.svg" class="menuicon" alt="menuicon"><span class="title">Workforce Optimization</span>Update your applications
                                  </a>
                                  <a href="<?php echo site_url(); ?>/workforce-management/data-loss-prevention"><img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/header-images/enter-01.svg" class="menuicon" alt="menuicon"><span class="title">Data Loss Prevention (DLP)</span>Monetize your content
                                  </a>
                                  <a href="<?php echo site_url(); ?>/workforce-management/user-activity-monitoring"><img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/header-images/enter-01.svg" class="menuicon" alt="menuicon"><span class="title">User Activity Monitoring</span>Cloud-based software solutions
                                  </a>
                                  <a href="<?php echo site_url(); ?>/use-cases?filter=enterprises#uc-filter" class="view-more" style="padding-left: 0;">View More</a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="menu-item-has-children">
                  <a class="mst-link" href="<?php echo site_url(); ?>/industry">Who We Serve</a> <span class="arrow-btn"></span>
                  <div class="menu-mega">
                    <div class="container">
                      <div class="dis-flex tab-menu">
                        <div id="menu-inds" class="dis-flex tab-contents">
                          <div class="left-tabs">
                            <ul class="tab-nav">
                              <li class="tab-link is-active"><a href="<?php echo site_url(); ?>/industry">Industries</a></li>
                              <li class="tab-link"><a href="javascript:void(0);">By Role</a></li>
                              <li class="tab-link"><a href="<?php echo site_url(); ?>/workforce-management/enterprise">Enterprises</a></li>
                            </ul>
                          </div>
                          <div class="right-tabs">
                            <div class="tab-content is-active">
                              <div class="four-column">
                                <div class="tab-title"><a href="<?php echo site_url(); ?>/industry"><img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/header-images/ind-icon.svg" class="menuicon" alt="menuicon"><span class="title">Industries</span>
                                  Leading the Way in Every Sector</a><span class="ind-arrow-btn"></span>
                                </div>
                                <div class="dis-flex menu-column sub-ind">
                                  <div class="flex-4">
                                    <a href="<?php echo site_url(); ?>/industry/technology-companies"><span class="title">IT Companies</span>
                                    Streamline workflows</a>
                                    <a href="<?php echo site_url(); ?>/industry/digital-agencies"><span class="title">Digital Agencies</span>
                                    Manage multiple projects</a>
                                    <a href="<?php echo site_url(); ?>/industry/staffing"><span class="title">Staffing & Recruiting</span>
                                    Track employee hours
                                    </a>
                                    <a href="<?php echo site_url(); ?>/industry/bpo"><span class="title">BPO & KPO
                                    </span>
                                    Manage large teams
                                    </a>
                                    <a href="<?php echo site_url(); ?>/industry/contact-centers"><span class="title">CX & Contact Center
                                    </span>
                                    Analyze data for efficiency</a>
                                  </div>
                                  <div class="flex-4">
                                    <a href="<?php echo site_url(); ?>/industry/real-estate"><span class="title">Real Estate</span>
                                    Compliance monitoring</a>
                                    <a href="<?php echo site_url(); ?>/industry/accounting"><span class="title">Accounting</span>
                                    Easy billing & payments</a>
                                    <a href="<?php echo site_url(); ?>/industry/architects-and-interior-designers"><span class="title">Interior Designs</span>
                                    Manage project timelines</a>
                                    <a href="<?php echo site_url(); ?>/industry/healthcare"><span class="title">Healthcare</span>
                                    Manage staff schedules
                                    </a>
                                    <a href="<?php echo site_url(); ?>/industry/attorney"><span class="title">Legal
                                    </span>
                                    Track billable hours
                                    </a>
                                  </div>
                                  <div class="flex-4">
                                    <a href="<?php echo site_url(); ?>/industry/consulting-firms"><span class="title">Consulting Firms</span>
                                    Handle projects efficiently</a>
                                    <a href="<?php echo site_url(); ?>/industry/landscaping"><span class="title">Landscaping
                                    </span>
                                    Easy client management</a>
                                    <a href="<?php echo site_url(); ?>/industry/construction"><span class="title">Construction</span>
                                    Manage projects better</a>
                                    <a href="<?php echo site_url(); ?>/industry/e-commerce"><span class="title">eCommerce</span>
                                    Improve team operations
                                    </a>
                                    <a href="<?php echo site_url(); ?>/industry/time-tracking-app-for-janitorial-services"><span class="title">Janitorial
                                    </span>
                                    Manage staff schedules
                                    </a>
                                  </div>
                                  <div class="flex-4">
                                    <a href="<?php echo site_url(); ?>/industry/manufacturing"><span class="title">Manufacturing</span>
                                    Track productivity easily</a>
                                    <a href="<?php echo site_url(); ?>/industry/startups"><span class="title">Startups</span>
                                    Real-time progress update</a>
                                    <a href="<?php echo site_url(); ?>/industry/sme"><span class="title">SME</span>
                                    Improve operations
                                    </a>
                                    <a href="<?php echo site_url(); ?>/industry/educational-institutions"><span class="title">Educational Institutes
                                    </span>
                                    Manage staff effortlessly
                                    </a>
                                    <a href="<?php echo site_url(); ?>/industry/government"><span class="title">Government
                                    </span>
                                    Improve govt. operations
                                    </a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="tab-content">
                              <div class="three-column">
                                <div class="tab-title"><a href="javascript:void(0);"><img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/header-images/prod-01.svg" class="menuicon" alt="menuicon"><span class="title">By Role</span>
                                  Empowering Every Role</a><span class="ind-arrow-btn"></span>
                                </div>
                                <div class="dis-flex menu-column sub-ind">
                                  <div class="flex-2">
                                    <a href="<?php echo site_url(); ?>/by-role/hr-managers"><span class="title">HR Managers</span>Simplify HR processes</a>
                                    <a href="<?php echo site_url(); ?>/by-role/it-managers"><span class="title">IT Managers</span>
                                    Streamline IT projects delivery</a>
                                    <a href="<?php echo site_url(); ?>/by-role/operations-manager"><span class="title">Operations Managers</span>Streamline ops, maximize output</a>
                                  </div>
                                  <div class="flex-2">
                                    <a href="<?php echo site_url(); ?>/by-role/business-owners"><span class="title">Business Owners & Founders</span>Empower teams, boost productivity</a>
                                    <a href="<?php echo site_url(); ?>/by-role/project-managers"><span class="title">Project Managers
                                    </span>Track progress, ensure success</a>
                                    <a href="<?php echo site_url(); ?>/by-role/executive-leadership"><span class="title">Executives & Directors
                                    </span>Data-Driven Leadership</a>
                                  </div>
                                </div>
                              </div>
                              <div class="other-menu mob-hide">
                                <div class="tab-title"><a href="<?php echo site_url('/workplace-mode'); ?>"><span class="title">Workplace Modes
                                  </span>
                                  Work Seamlessly, Stay Connected </a><span class="ser-arrow-btn"></span>
                                </div>
                                <div class="flex-1 menu-column sub-service">
                                  <a href="<?php echo site_url(); ?>/workplace-mode/remote-work-management"><img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/header-images/mode-01.svg" class="menuicon" alt="menuicon"><span class="title">Remote Work</span>Track remote employees
                                  </a>
                                  <a href="<?php echo site_url(); ?>/workplace-mode/hybrid-work-management"><img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/header-images/mode-02.svg" class="menuicon" alt="menuicon"><span class="title">Hybrid Work</span>Optimize work-life balance
                                  </a>
                                  <a href="<?php echo site_url(); ?>/workforce-management/field-service-management"><img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/header-images/mode-03.svg" class="menuicon" alt="menuicon"><span class="title">Field Work</span>Track work, on-the-go
                                  </a>
                                  <a href="<?php echo site_url(); ?>/workplace-mode/office-work"><img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/header-images/mode-04.svg" class="menuicon" alt="menuicon"><span class="title">Office Work</span>Manage in-office employees
                                  </a>
                                </div>
                              </div>
                            </div>
                            <div class="tab-content">
                              <div class="three-column">
                                <div class="tab-title"><a href="<?php echo site_url(); ?>/workforce-management/enterprise"><img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/header-images/product-06.svg" class="menuicon" alt="menuicon"><span class="title">Enterprises</span>
                                  Scalable solutions for enterprises</a><span class="ind-arrow-btn"></span>
                                </div>
                                <div class="dis-flex menu-column sub-ind">
                                  <div class="flex-2">
                                    <a href="<?php echo site_url(); ?>/workforce-management"><span class="title">Workforce Management</span>Manage Teams, Boost Productivity</a>
                                    <a href="<?php echo site_url(); ?>/workforce-management/workforce-optimization"><span class="title">Workforce Optimization</span>
                                    Optimize workforce, achieve excellence</a>
                                    <a href="<?php echo site_url(); ?>/workforce-management/data-loss-prevention"><span class="title">Data Loss Prevention (DLP)</span>
                                    Data protection you can trust
                                    </a>
                                  </div>
                                  <div class="flex-2">
                                    <a href="<?php echo site_url(); ?>/workforce-management/user-activity-monitoring"><span class="title">User Activity Monitoring
                                    </span>
                                    Enhanced insights, optimized workflow</a>
                                    <a href="<?php echo site_url(); ?>/workforce-management/payroll"><span class="title">Payroll</span>
                                    Streamlined payroll, easy management
                                    </a>
                                    <a href="<?php echo site_url(); ?>/customization"><span class="title">Custom Solutions & Integrations</span>Tailored workforce management</a>
                                  </div>
                                </div>
                              </div>
                              <div class="other-menu mob-hide">
                                <div class="tab-title"><a href="<?php echo site_url('/workplace-mode'); ?>"><span class="title">Workplace Modes
                                  </span>
                                  Work Seamlessly, Stay Connected </a><span class="ser-arrow-btn"></span>
                                </div>
                                <div class="flex-1 menu-column sub-service">
                                  <a href="<?php echo site_url(); ?>/workplace-mode/remote-work-management"><img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/header-images/mode-01.svg" class="menuicon" alt="menuicon"><span class="title">Remote Work</span>Track remote employees
                                  </a>
                                  <a href="<?php echo site_url(); ?>/workplace-mode/hybrid-work-management"><img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/header-images/mode-02.svg" class="menuicon" alt="menuicon"><span class="title">Hybrid Work</span>Optimize work-life balance
                                  </a>
                                  <a href="<?php echo site_url(); ?>/workforce-management/field-service-management"><img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/header-images/mode-03.svg" class="menuicon" alt="menuicon"><span class="title">Field Work</span>Track work, on-the-go
                                  </a>
                                  <a href="<?php echo site_url(); ?>/workplace-mode/office-work"><img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/header-images/mode-04.svg" class="menuicon" alt="menuicon"><span class="title">Office Work</span>Manage in-office employees
                                  </a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="menu-item-has-children">
                  <a class="mst-link price" href="<?php echo site_url(); ?>/pricing">Pricing</a>
                </li>
                <li class="cta-wrap small-reso">
                  <div class="login">
                    <a class="bg-none" href="javascript:void(0)" onclick="_getAppLoginUrl();">Log In</a>
                    <a href="javascript:void(0)" onclick="call_demows();">Book a Demo</a>
                    <a class="for-free" data-href="https://app.workstatus.io/auth/register/?pid=42&amp;type=monthly" href="javascript:void(0);"  onclick="return get_ws_signupform(this);">Free Trial</a>  
                  </div>
                </li>
              </ul>
            </nav>
            <div class="cta-wrap large-reso">
              <div class="login">
                <a class="bg-none" href="javascript:void(0)" onclick="_getAppLoginUrl();">Log In</a>
                <a href="javascript:void(0)" onclick="call_demows();">Book a Demo</a>
                <a class="for-free" data-href="https://app.workstatus.io/auth/register/?pid=42&amp;type=monthly" href="javascript:void(0);"  onclick="return get_ws_signupform(this);">Free Trial</a>  
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <?php  echo ( wsFeaturedHeader() ) ? '</div>' : ''; ?>
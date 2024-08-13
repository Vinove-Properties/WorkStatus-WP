<?php 
  global $ws_ctas, $RegLink, $LogLink;
  ?>
<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assests/images/favicon.png" type="image/x-icon">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php /* if( !wp_is_mobile() ) : ?>
    <link rel="preload" as="font" href="<?php bloginfo('template_url'); ?>/assests/fonts/NotoSans-Regular.woff2" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" as="font" href="<?php bloginfo('template_url'); ?>/assests/fonts/NotoSans-Bold.woff2" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" as="font" href="<?php bloginfo('template_url'); ?>/assests/fonts/NotoSans-Medium.woff2" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" as="font" href="<?php bloginfo('template_url'); ?>/assests/fonts/NotoSans-SemiBold.woff2" type="font/woff2" crossorigin="anonymous">
    <?php endif; */ ?>
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
      .cnd-phone{display: none;}
      .locate-in .cnd-phone{display: block;}
      body.show-wsaddon .this-block{display: none !important;}
      body.show-wsaddon #ws-addon-data,body.show-wsaddon .support-options{display:block!important;}
    </style>
    <?php if( isBetaVersion() === false ) : ?>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
      new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
      j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
      'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
      })(window,document,'script','dataLayer','GTM-NPPMGZH');
    </script>
    <!-- End Google Tag Manager -->  
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
    <header class="site__header" id="masthead">
      <div class="container">
        <?php //echo '<pre>'.get_page_template().'</pre>'; ?>
        <div id="topnav" class="top_nav">
          <div class="logo">
            <a href="<?php echo site_url(); ?>/" title="Workstatus">
              <picture>
                <img src="<?php echo get_template_directory_uri(); ?>/assests/images/logo.svg" alt="Workstatus" width="230" height="31"> 
              </picture>
            </a>
          </div>
          <div class="logo-white">
            <a href="<?php echo site_url(); ?>/" title="Workstatus">
              <picture>
                <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assests/images/logo-white.svg" width="230"
                  height="31" alt="Workstatus">
              </picture>
            </a>
          </div>
          <button  class="nav_btn" onclick="navFunction();"> <span>&#9776;</span> <span>&#10005;</span> </button>
          <nav class="site_nav">
            <ul>
              <?php /* ?>
              <li id="productsitem" class="dropdown dropdown-2">
                <a href="#" onclick="showProductItem();">Products</a>
                <div class="small-menu">
                  <div class="flex_row">
                    <div class="col-menu">
                      <h3>OVERVIEW</h3>
                      <div class="menu-box">
                        <a href="<?php echo site_url(); ?>/workstatus-platform">
                        <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/menu-images/prod-01.svg" width="20"
                          height="20" alt="Menu Icon">Workstatus Platform
                        </a>
                        <a href="<?php echo site_url(); ?>/how-it-works">
                        <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/menu-images/prod-02.svg" width="20"
                          height="20" alt="Menu Icon">How It Works
                        </a>
                        <a href="<?php echo site_url(); ?>/integrations">
                        <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/menu-images/prod-03.svg" width="20"
                          height="20" alt="Menu Icon">Integrations
                        </a>
                        <a href="<?php echo site_url(); ?>/data-security">
                        <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/menu-images/prod-04.svg" width="20"
                          height="20" alt="Menu Icon">Data Privacy & Security
                        </a>
                        <a href="<?php echo site_url(); ?>/pricing">
                        <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/menu-images/prod-05.svg" width="20"
                          height="20" alt="Menu Icon">Pricing
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <?php */ ?>
              <li id="featuresitem" class="dropdown">
                <a href="<?php echo site_url(); ?>/product">Product</a><span class="trigger" onclick="showFeatureItem();"></span>
                <div class="full-menu">
                  <div class="container">
                    <div class="flex_row">
                      <div class="col-menu">
                        <h3><a href="<?php echo site_url(); ?>/time-attendance">Time & Attendance</a></h3>
                        <div class="menu-box">
                          <a href="<?php echo site_url(); ?>/time-attendance/time-tracking-software">
                          <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/menu-images/ft-icon01.svg" width="20"
                            height="20" alt="Menu Icon">Time Tracking
                          </a>
                          <a href="<?php echo site_url(); ?>/time-attendance/timesheet-software">
                          <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/menu-images/ft-icon02.svg" width="20"
                            height="20" alt="Menu Icon">Online Timesheets
                          </a>
                          <a href="<?php echo site_url(); ?>/time-attendance/attendance-management">
                          <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/menu-images/ft-icon03.svg" width="20"
                            height="20" alt="Menu Icon">Attendance Management
                          </a>
                          <a href="<?php echo site_url(); ?>/time-attendance/shift-management">
                          <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/menu-images/ft-icon04.svg" width="20"
                            height="20" alt="Menu Icon">Shift Management
                          </a>
                          <a href="<?php echo site_url(); ?>/time-attendance/time-off-management">
                          <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/menu-images/ft-icon05.svg" width="20" height="20" alt="Menu Icon">Time Off Management</a>
                          <a href="<?php echo site_url(); ?>/time-attendance/geofencing-software">
                          <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/menu-images/ft-icon06.svg" width="20"
                            height="20" alt="Menu Icon">Geofence Time Tracking
                          </a>
                          <a href="<?php echo site_url(); ?>/time-attendance/online-time-reporting">
                          <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/menu-images/ft-icon21.svg" width="20"
                            height="20" alt="Menu Icon">Online Time Reporting
                          </a>
                          <a href="<?php echo site_url(); ?>/time-attendance/automatic-time-mapping">
                          <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/menu-images/ft-icon08.svg" width="20"
                            height="20" alt="Menu Icon">Automatic Time Mapping
                          </a>
                          <a href="<?php echo site_url(); ?>/time-attendance/web-based-time-tracker">
                          <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/menu-images/new-03.svg" width="20" height="20" alt="Menu Icon">Web Based Time Tracker</a>
                          <a href="<?php echo site_url(); ?>/time-attendance/live-location-tracking">
                          <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/menu-images/new-04.svg" width="20"
                            height="20" alt="Menu Icon">Live Location Tracking
                          </a>
                        </div>
                      </div>
                      <div class="col-menu">
                        <h3><a href="<?php echo site_url(); ?>/workforce-management">WorkForce  Management</a></h3>
                        <div class="menu-box">
                          <a href="<?php echo site_url(); ?>/workforce-management/employee-scheduling">
                          <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/menu-images/ft-icon09.svg" width="20"
                            height="20" alt="Menu Icon">Employee Scheduling
                          </a>
                          <a href="<?php echo site_url(); ?>/workforce-management/employee-productivity-monitoring">
                          <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/menu-images/ft-icon10.svg" width="20"
                            height="20" alt="Menu Icon">Employee Productivity
                          </a>
                          <a href="<?php echo site_url(); ?>/workforce-management/employee-monitoring-software">
                          <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/menu-images/ft-icon11.svg" width="20"
                            height="20" alt="Menu Icon">Employee Monitoring
                          </a>
                          <a href="<?php echo site_url(); ?>/workforce-management/workforce-optimization">
                          <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/menu-images/ft-icon12.svg" width="20"
                            height="20" alt="Menu Icon">WorkForce Optimization
                          </a>
                          <a href="<?php echo site_url(); ?>/workforce-management/employee-burnout">
                          <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/menu-images/ft-icon13.svg" width="20"
                            height="20" alt="Menu Icon">Employee Burnout
                          </a>
                          <a href="<?php echo site_url(); ?>/workforce-management/habit-tracker-app">
                          <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/menu-images/ft-icon14.svg" width="20"
                            height="20" alt="Menu Icon">Habit Tracker App
                          </a>
                          <a href="<?php echo site_url(); ?>/workforce-management/enterprise">
                          <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/menu-images/ft-icon16.svg" width="20"
                            height="20" alt="Menu Icon">Enterprise
                          </a>
                          <a href="<?php echo site_url(); ?>/workforce-management/data-loss-prevention">
                          <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/menu-images/dlp.svg" 
                            width="20" height="20" alt="Menu Icon">Data Loss Prevention (DLP)
                          </a>
                          <a href="<?php echo site_url(); ?>/workforce-management/user-activity-monitoring">
                          <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/menu-images/uam.svg" width="20"
                            height="20" alt="Menu Icon">User Activity Monitoring (UAM)
                          </a>
                          <a href="javascript:void(0)">
                          <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/menu-images/ft-icon15.svg" width="20"
                            height="20" alt="Menu Icon">Payroll<span class="comsoon">Coming Soon</span>
                          </a> 
                        </div>
                      </div>
                      <div class="col-menu">
                        <h3><a href="<?php echo site_url(); ?>/reporting-analytics">Reporting & Analytics</a></h3>
                        <div class="menu-box">
                          <a href="<?php echo site_url(); ?>/reporting-analytics/productivity-reports">
                          <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/menu-images/ra-01.svg" width="20"
                            height="20" alt="Menu Icon">Productivity Reports
                          </a>
                          <a href="<?php echo site_url(); ?>/reporting-analytics/application-website-usage">
                          <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/menu-images/ra-02.svg" width="20"
                            height="20" alt="Menu Icon">Application & Website Usage
                          </a>
                          <a href="<?php echo site_url(); ?>/reporting-analytics/location-analytics">
                          <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/menu-images/ra-03.svg" width="20"
                            height="20" alt="Menu Icon">Location Analytics
                          </a>
                          <a href="<?php echo site_url(); ?>/reporting-analytics/impact-analysis">
                          <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/menu-images/impact.svg" 
                            width="20" height="20" alt="Menu Icon">Impact Analysis
                          </a>
                          <a href="<?php echo site_url(); ?>/reporting-analytics/workload-management">
                          <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/menu-images/ra-05.svg" width="20"
                            height="20" alt="Menu Icon">Workload Management
                          </a>
                          <a href="<?php echo site_url(); ?>/reporting-analytics/benchmark-goals">
                          <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/menu-images/ra-06.svg" width="20"
                            height="20" alt="Menu Icon">Benchmark & Goals
                          </a>
                          <a href="<?php echo site_url(); ?>/reporting-analytics/workforce-analytics-software">
                          <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/menu-images/ra-07.svg" width="20"
                            height="20" alt="Menu Icon">Workforce Analytics
                          </a>
                          <a href="<?php echo site_url(); ?>/reporting-analytics/overtime-tracker">
                          <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/menu-images/ra-08.svg" width="20"
                            height="20" alt="Menu Icon">OverTime Tracker
                          </a>
                          <a href="<?php echo site_url(); ?>/reporting-analytics/compliance-reporting">
                          <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/menu-images/comp-r.svg" width="20"
                            height="20" alt="Menu Icon">Compliance Reporting
                          </a>
                        </div>
                      </div>
                      <div class="col-menu">
                        <h3><a href="<?php echo site_url(); ?>/project-management">Project & Task Management</a></h3>
                        <div class="menu-box">
                          <a href="<?php echo site_url(); ?>/project-management/task-management">
                          <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/menu-images/ft-icon28.svg" width="20"
                            height="20" alt="Menu Icon">Task Management
                          </a>
                          
                          <a href="<?php echo site_url(); ?>/project-management/project-budgeting-software">
                          <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/menu-images/ft-icon22.svg" width="20" height="20" alt="Menu Icon">Project Budgeting
                          </a>
                          <a href="<?php echo site_url(); ?>/project-management/online-invoicing-software">
                          <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/menu-images/ft-icon23.svg" width="20"
                            height="20" alt="Menu Icon">Online Invoicing
                          </a>
                          <a href="<?php echo site_url(); ?>/project-management/daily-standup">
                          <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/menu-images/ft-icon24.svg" width="20"
                            height="20" alt="Menu Icon">Daily StandUp
                          </a>
                          <a href="<?php echo site_url(); ?>/project-management/agile-workflows">
                          <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/menu-images/ft-icon25.svg" width="20"
                            height="20" alt="Menu Icon">Agile WorkFlows
                          </a>
                          <a href="<?php echo site_url(); ?>/project-management/agile-sprint">
                          <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/menu-images/ft-icon26.svg" width="20"
                            height="20" alt="Menu Icon">Agile Sprint
                          </a>
                          <a href="<?php echo site_url(); ?>/project-management/epics">
                          <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/menu-images/ft-icon27.svg" width="20"
                            height="20" alt="Menu Icon">Epics
                          </a>
                          
                          <a href="<?php echo site_url(); ?>/project-management/gantt-charts">
                          <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/menu-images/new-02.svg" width="20" height="20" alt="Menu Icon">Gantt Chart
                          </a>
                          <!-- 
                            <a href="<?php echo site_url(); ?>/project-management/project-timeline">
                            <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/menu-images/new-01.svg" width="20" height="20" alt="Menu Icon"> project Timeline
                            </a>
                            -->
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li id="howitworksitem" class="dropdown how-works">
                <a href="<?php echo site_url(); ?>/solution">Solutions</a><span class="trigger" onclick="showHowitworkItem();"></span>
                <div class="full-menu">
                  <div class="container">
                    <div class="menu-small menu-column">
                      <div class="flex_row">
                        <div class="menu-wrap">
                          <h3><a href="<?php echo site_url(); ?>/use-cases">Use Cases</a></h3>
                          <div class="menu-lside">
                            <div class="col-menu">
                              <div class="menu-box">
                                <a href="<?php echo site_url(); ?>/workforce-management/employee-productivity-tracking">
                                <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/menu-images/sdm.svg" width="20"
                                  height="20" alt="Menu Icon">Employee Productivity Tracking</a>
                                <!--
                                  <a href="<?php echo site_url(); ?>/time-attendance/freelance-time-management">
                                  <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/menu-images/sol-icon05.svg" width="20"
                                    height="20" alt="Menu Icon">Freelancers Time Management
                                  </a> 
                                  -->
                                <a href="<?php echo site_url(); ?>/time-attendance/shift-scheduling">
                                <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/menu-images/ft-icon03.svg" width="20"
                                  height="20" alt="Menu Icon">Attendance & Shift Scheduling</a>
                                <a href="<?php echo site_url(); ?>/time-attendance/gps-workforce-management">
                                <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/menu-images/location.svg" width="20"
                                  height="20" alt="Menu Icon">Location & Impact Insights</a>  
                                <a href="<?php echo site_url(); ?>/workforce-management/on-premise-teams">
                                <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/menu-images/premise.svg" width="20"
                                  height="20" alt="Menu Icon">On-Premise Teams Management
                                </a>
                                <a href="<?php echo site_url(); ?>/reporting-analytics/insights-for-business">
                                <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/menu-images/sol-icon08.svg" width="20"
                                  height="20" alt="Menu Icon">Insights For Business Analytics
                                </a>
                              </div>
                              <a href="<?php echo site_url(); ?>/use-cases" class="view-more desktop">View More</a>
                            </div>
                            <div class="col-menu">
                              <div class="menu-box">
                                <a href="<?php echo site_url(); ?>/workforce-management/proprietary-information-protection">
                                <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/menu-images/use-01.svg" width="20" height="20" alt="Menu Icon">Data Theft Prevention
                                </a>
                                <a href="<?php echo site_url(); ?>/time-attendance/automated-tracking ">
                                <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/menu-images/use-02.svg" width="20" height="20" alt="Menu Icon">Payroll Management
                                </a>
                                <a href="<?php echo site_url(); ?>/time-attendance/integrate-geofencing">
                                <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/menu-images/use-03.svg" width="20"
                                  height="20" alt="Menu Icon">Geofencing
                                </a>
                                <a href="<?php echo site_url(); ?>/reporting-analytics/project-health-tracking">
                                <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/menu-images/use-04.svg" width="20"
                                  height="20" alt="Menu Icon">Project Management
                                </a>
                                <a href="<?php echo site_url(); ?>/project-management/billing-automation ">
                                <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/menu-images/use-05.svg" width="20"
                                  height="20" alt="Menu Icon">Automated Billing
                                </a>
                              </div>
                              <a href="<?php echo site_url(); ?>/use-cases" class="view-more mobile">View More</a>
                            </div>
                          </div>
                        </div>
                        <div class="menu-rside">
                          <div class="col-menu">
                            <h3><a href="<?php echo site_url(); ?>/workforce-management/workplace-mode">WorkPlace Mode</a></h3>
                            <div class="menu-box">
                              <a href="<?php echo site_url(); ?>/workplace-mode/remote-work-management">
                              <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/menu-images/sol-icon01.svg" width="20"
                                height="20" alt="Menu Icon">Remote Work
                              </a>
                              <a href="<?php echo site_url(); ?>/workplace-mode/hybrid-work-management">
                              <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/menu-images/sol-icon02.svg" width="20"
                                height="20" alt="Menu Icon">Hybrid Work
                              </a>
                              <a href="<?php echo site_url(); ?>/workforce-management/field-service">
                              <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/menu-images/sol-icon07.svg" width="20"
                                height="20" alt="Menu Icon">Field Work
                              </a>
                              <a href="<?php echo site_url(); ?>/workplace-mode/office-work">
                              <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/menu-images/sol-icon03.svg" width="20"
                                height="20" alt="Menu Icon">Office Work
                              </a>
                            </div>
                          </div>
                          <div class="col-menu">
                            <h3>By ROLE</h3>
                            <div class="menu-box">
                              <a href="<?php echo site_url(); ?>/by-role/hr-managers">
                              <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/menu-images/role-01.svg" width="20"
                                height="20" alt="Menu Icon">HR Managers
                              </a>
                              <a href="<?php echo site_url(); ?>/by-role/it-managers">
                              <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/menu-images/role-02.svg" width="20"
                                height="20" alt="Menu Icon">IT Managers
                              </a>
                              <a href="<?php echo site_url(); ?>/by-role/business-owners">
                              <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/menu-images/role-03.svg" width="20"
                                height="20" alt="Menu Icon">Business Owners
                              </a>
                              <a href="<?php echo site_url(); ?>/by-role/project-managers">
                              <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/menu-images/role-04.svg" width="20"
                                height="20" alt="Menu Icon">Project Managers
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>


              <li id="industryitem" class="dropdown how-works">
                <a href="<?php echo site_url(); ?>/industry">Industries</a><span class="trigger" onclick="showindustryItem();"></span>
                <div class="full-menu">
                  <div class="container">
                    <div class="menu-small indmenu">
                    <h3><a href="<?php echo site_url(); ?>/industry">Industries</a></h3>
                      <div class="flex_row">
                          <div class="menu-lside">
                            <div class="col-menu">
                              <div class="menu-box">
                                <a href="<?php echo site_url(); ?>/industry/technology-companies">
                                <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/menu-images/ind-01.svg" width="20"
                                  height="20" alt="Menu Icon">IT Companies</a>
                                
                                <a href="<?php echo site_url(); ?>/industry/digital-agencies ">
                                <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/menu-images/ind-02.svg" width="20"
                                  height="20" alt="Menu Icon">Digital Agencies</a>
                                <a href="<?php echo site_url(); ?>/industry/staffing">
                                <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/menu-images/ind-03.svg" width="20"
                                  height="20" alt="Menu Icon">Staffing & Recuriting</a>  
                                <a href="<?php echo site_url(); ?>/industry/bpo">
                                <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/menu-images/ind-04.svg" width="20"
                                  height="20" alt="Menu Icon">BPO & KPO
                                </a>
                                <a href="<?php echo site_url(); ?>/industry/contact-centers">
                                <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/menu-images/ind-05.svg" width="20"
                                  height="20" alt="Menu Icon">CX & Contact Center
                                </a>
                              </div>
                              <a href="<?php echo site_url(); ?>/industry" class="view-more desktop">View More</a>

                            </div>
                            <div class="col-menu">
                              <div class="menu-box">
                                <a href="<?php echo site_url(); ?>/industry/real-estate">
                                <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/menu-images/ind-06.svg" width="20"
                                  height="20" alt="Menu Icon">Real Estate</a>
                                
                                <a href="<?php echo site_url(); ?>/industry/accounting ">
                                <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/menu-images/ind-07.svg" width="20"
                                  height="20" alt="Menu Icon">Accounting</a>
                                <a href="<?php echo site_url(); ?>/industry/architects-and-interior-designers">
                                <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/menu-images/ind-08.svg" width="20"
                                  height="20" alt="Menu Icon">Interior Designers</a>  
                                <a href="<?php echo site_url(); ?>/industry/healthcare">
                                <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/menu-images/ind-09.svg" width="20"
                                  height="20" alt="Menu Icon">Healthcare
                                </a>
                                <a href="<?php echo site_url(); ?>/industry/attorney">
                                <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/menu-images/ind-10.svg" width="20"
                                  height="20" alt="Menu Icon">Legal
                                </a>
                              </div>
                            </div>
                            <div class="col-menu">
                              <div class="menu-box">
                                <a href="<?php echo site_url(); ?>/industry/consulting-firms">
                                <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/menu-images/ind-11.svg" width="20"
                                  height="20" alt="Menu Icon">Consulting Firms</a>
                                
                                <a href="<?php echo site_url(); ?>/industry/landscaping">
                                <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/menu-images/ind-12.svg" width="20"
                                  height="20" alt="Menu Icon">Landscaping</a>
                                <a href="<?php echo site_url(); ?>/industry/construction">
                                <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/menu-images/ind-13.svg" width="20"
                                  height="20" alt="Menu Icon">Construction</a>  
                                <a href="<?php echo site_url(); ?>/industry/e-commerce">
                                <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/menu-images/ind-14.svg" width="20"
                                  height="20" alt="Menu Icon">eCommerce
                                </a>
                                <a href="<?php echo site_url(); ?>/industry/time-tracking-app-for-janitorial-services">
                                <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/menu-images/ind-15.svg" width="20"
                                  height="20" alt="Menu Icon">Janitorial
                                </a>
                              </div>
                            </div>
                            <div class="col-menu">
                              <div class="menu-box">
                                <a href="<?php echo site_url(); ?>/industry/manufacturing">
                                <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/menu-images/ind-16.svg" width="20"
                                  height="20" alt="Menu Icon">Manufacturing</a> 
                                
                                <a href="<?php echo site_url(); ?>/industry/startups">
                                <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/menu-images/ind-17.svg" width="20"
                                  height="20" alt="Menu Icon">Startups</a>
                                <a href="<?php echo site_url(); ?>/industry/sme">
                                <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/menu-images/ind-18.svg" width="20"
                                  height="20" alt="Menu Icon">SME</a>  
                                <a href="<?php echo site_url(); ?>/industry/educational-institutions">
                                <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/menu-images/ind-19.svg" width="20"
                                  height="20" alt="Menu Icon">Educational Institutes
                                </a>
                                <a href="<?php echo site_url(); ?>/industry/government">
                                <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/menu-images/ind-20.svg" width="20"
                                  height="20" alt="Menu Icon">Government
                                </a>
                              </div>
                              <a href="<?php echo site_url(); ?>/industry" class="view-more mobile">View More</a>

                            </div>
                          </div>
                      
                        
                      </div>
                    </div>
                  </div>
                </div>
              </li>


              <li id="apps" class="dropdown">
                <a href="<?php echo site_url(); ?>/apps" onclick="showAppsItem();">Apps</a><span class="trigger" onclick="showAppsItem();"></span>
                <div class="full-menu">
                  <div class="container">
                    <div class="flex_row">
                      <div class="col-menu">
                        <h3><a href="<?php echo site_url(); ?>/apps">Desktop</a></h3>
                        <div class="menu-box">
                          <a href="<?php echo site_url(); ?>/apps/mac">
                          <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/menu-images/app-icon03.svg" width="20"
                            height="20" alt="Menu Icon">Mac
                          </a>
                          <a href="<?php echo site_url(); ?>/apps/windows">
                          <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/menu-images/app-icon04.svg" width="20"
                            height="20" alt="Menu Icon">Windows
                          </a>
                          <a href="<?php echo site_url(); ?>/apps/linux">
                          <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/menu-images/app-icon05.svg" width="20"
                            height="20" alt="Menu Icon">Linux
                          </a>
                        </div>
                      </div>
                      <div class="col-menu">
                        <h3><a href="<?php echo site_url(); ?>/apps">Mobile</a></h3>
                        <div class="menu-box">
                          <a href="<?php echo site_url(); ?>/apps/iphone">
                          <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/menu-images/app-icon06.svg" width="20"
                            height="20" alt="Menu Icon">iOS
                          </a>
                          <a href="<?php echo site_url(); ?>/apps/android">
                          <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/menu-images/app-icon07.svg" width="20"
                            height="20" alt="Menu Icon">Android
                          </a>
                        </div>
                      </div>
                      <div class="col-menu">
                        <h3>Web</h3>
                        <div class="menu-box">
                          <a href="<?php echo site_url(); ?>/browser-extension">
                          <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/menu-images/app-icon01.svg" width="20"
                            height="20" alt="Menu Icon">Browser Extension
                          </a>
                          <a href="<?php echo site_url(); ?>/chromebook-devices">
                          <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/menu-images/app-icon02.svg" width="20"
                            height="20" alt="Menu Icon">Chromebook
                          </a>
                        </div>
                      </div>
                      <div class="col-menu">
                        <h3><a href="<?php echo site_url(); ?>/integrations">Integrations</a></h3>
                        <div class="menu-box">
                          <a href="<?php echo site_url(); ?>/integrations/zoho">
                          <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/menu-images/app-icon08.svg" width="20"
                            height="20" alt="Menu Icon">Zoho
                          </a>
                          <a href="<?php echo site_url(); ?>/integrations/trello">
                          <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/menu-images/app-icon09.svg" width="20"
                            height="20" alt="Menu Icon">Trello
                          </a>
                          <a href="<?php echo site_url(); ?>/integrations/aws">
                          <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/menu-images/app-icon10.svg" width="20"
                            height="20" alt="Menu Icon">AWS
                          </a>
                          <a href="<?php echo site_url(); ?>/integrations/smtp">
                          <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/menu-images/app-icon11.svg" width="20"
                            height="20" alt="Menu Icon">SMTP
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li><a href="<?php echo site_url(); ?>/pricing">Pricing</a></li>
              <li><a href="<?php echo ( isBetaVersion() ) ? 'https://app.staging.workstatus.io/' : $LogLink; ?>"><i></i>Sign-In</a></li>
            </ul>
            <?php  
              if( geoCTAcheck() === true ){
               echo '<div class="login"><a data-href="'.$RegLink.'" href="javascript:void(0);" class="primary_btn1" onclick="return get_ws_signupform(this);">'.$ws_ctas['cta_text'].'</a></div>';
              }  
              ?>        
          </nav>
        </div>
      </div>
    </header>
    <?php  echo ( wsFeaturedHeader() ) ? '</div>' : ''; ?>
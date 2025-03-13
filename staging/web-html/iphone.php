<?php require_once 'common/inc/config.inc.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="alternate" href="<?php echo SITE_URL; ?>/iphone" hreflang="en-us" />
    <link type="text/css" href="./assests/css/platform.css" rel="preload stylesheet" as="style" />
    <?php require_once 'common/inc/header-files.php';?>
  </head>
  <body>
    <?php require_once 'common/inc/after-body-tag.php'; ?>
    <div class="body__wrapper">
      <div class="feature-header">
        <?php require_once 'common/header.php';?>
      </div>
      <main class="site__content">
        <section class="hero-banner inner-banner-bg">
          <div class="bannerwrap iphone-banner">
            <div class="container">
              <div class="inner-wrap">
                <h1 class="inherit">Productivity Tracking Application For iOS</h1>
                <p>Workstatus is packed with features to help you keep track of how you and your team are spending time,<br class="linebrk">
                  and it makes it easy to see where you can bring the improvement to maximise the efficiency.
                </p>
                <div class="actionBtn">
                  <?php if( geoCTAcheck() === true ) : ?>
                  <div><a href="<?php echo $RegLink; ?>"
                    class="primary_btn1"><?php echo $ws_ctas['cta_text']; ?></a>
                    <small>No credit card required</small>
                  </div>
                  <?php endif; ?>
                  <div><a href="javascript:void(0)" onclick="call_demows();" class="primary_btn2">Book A Demo</a>
                    <small>Get queries answered from experts</small>
                  </div>
                </div>
                <?php require_once 'common/available-device.php';?>
              </div>
            </div>
          </div>
        </section>
        <section class="trackEm post-animation">
          <div class="container">
            <div class="top-section">
              <h6 class="inherit"><span class="bg-purple inherit">SMART iOS TIME TRACKER</span></h6>
              <h2 class="inherit">Best Time And Productivity Tracking App For iOS</h2>
            </div>
            <div class="trackRow align-center">
              <div class="trackImg">
                <picture>
                  <source type="image/webp" srcset="./assests/images/tracking-app.webp">
                  <source type="image/png" srcset="./assests/images/tracking-app.png">
                  <img loading="lazy" src="./assests/images/tracking-app.png" alt="Tracking" width="541" height="496">
                </picture>
              </div>
              <div class="trackContent">
                <div class="row">
                  <h3><i></i>One-Click Time Tracking App for iPhone</h3>
                  <p>Workstatus’s employee time tracking app enables you to track hours spent on a particular project/task accurately. The configurations with iOS allow time tracking directly through the iPhone.
                  </p>
                </div>
                <div class="row">
                  <h3><i></i>A Smart Productivity Tracker</h3>
                  <p>Workstatus helps you track your productivity, projects, teams, and many more things at a single time to give you an overview of your progress for projects.
                  </p>
                </div>
                <div class="row">
                  <h3><i></i> Never Miss Reports Even While Moving </h3>
                  <p>Seamlessly use the GPS tracking feature right from your mobile device and stay informed of your team’s work even when your team is on the go
                  </p>
                </div>
              </div>
            </div>
            <?php if( geoCTAcheck() === true ) : ?>
            <div class="mt40 btnSc">
              <p>Try It Out!</p>
              <a href="<?php echo $RegLink; ?>" class="primary_btn1"><?php echo $ws_ctas['cta_text']; ?></a></a>
              <small> It's Worth It!</small>
            </div>
            <?php endif; ?>
          </div>
        </section>
        <section class="feature_section for-heading-center whitetxt">
          <div class="container">
            <div class="top-section">
              <h6 class="inherit"><span class="bg-white">ALL IN ONE iOS APP</span></h6>
              <h2>Effortlessly Track Your Time And Productivity With Workstatus </h2>
            </div>
            <div class="flex_row mt70">
              <div class="column">
                <a href="<?php echo SITE_URL; ?>/best-time-tracking-software-online">
                  <span class="iconImg">
                    <svg aria-hidden="true">
                      <use xlink:href="./assests/images/icons/featuresicon.svg#time-tracking">
                      </use>
                    </svg>
                  </span>
                  <h3>Time Tracking</h3>
                  <p>Keep track of the time you've spent on each task</p>
                  <span class="small_anchor">Explore</span>
                </a>
              </div>
              <div class="column">
                <a href="<?php echo SITE_URL; ?>/geofence-time-clock-software-online">
                  <span class="iconImg">
                    <svg aria-hidden="true">
                      <use xlink:href="./assests/images/icons/featuresicon.svg#geofencing"></use>
                    </svg>
                  </span>
                  <h3>Geofencing</h3>
                  <p>Geofenced work-sites for auto clock-ins & clock-outs</p>
                  <span class="small_anchor">Explore</span>
                </a>
              </div>
              <div class="column">
                <a href="<?php echo SITE_URL; ?>/best-online-invoicing-software">
                  <span class="iconImg">
                    <svg aria-hidden="true">
                      <use xlink:href="./assests/images/icons/featuresicon.svg#online-invoicing"></use>
                    </svg>
                  </span>
                  <h3>Faster Invoicing</h3>
                  <p>One-click invoice generation </p>
                  <span class="small_anchor">Explore</span>
                </a>
              </div>
            </div>
            <div class="flex_row mt80">
              <div class="column">
                <a href="<?php echo SITE_URL; ?>/best-gps-time-tracking-software-online">
                  <span class="iconImg">
                    <svg aria-hidden="true">
                      <use xlink:href="./assests/images/icons/featuresicon.svg#gps-tracking">
                      </use>
                    </svg>
                  </span>
                  <h3>GPS Tracking</h3>
                  <p>Track team members who are on the go</p>
                  <span class="small_anchor">Explore</span>
                </a>
              </div>
              <div class="column">
                <a href="<?php echo SITE_URL; ?>/best-employee-timesheets-cloud-software">
                  <span class="iconImg">
                    <svg aria-hidden="true">
                      <use xlink:href="./assests/images/icons/featuresicon.svg#manage-timesheets"></use>
                    </svg>
                  </span>
                  <h3>Automated Timesheets</h3>
                  <p>Create timesheets, track progress, and manage them with ease</p>
                  <span class="small_anchor">Explore</span>
                </a>
              </div>
              <div class="column">
                <a href="<?php echo SITE_URL; ?>/best-time-report-software-online">
                  <span class="iconImg">
                    <svg aria-hidden="true">
                      <use xlink:href="./assests/images/icons/featuresicon.svg#detailed-reporting"></use>
                    </svg>
                  </span>
                  <h3>Filtered Reporting</h3>
                  <p>Analyze your progress with customizable, extensive reports</p>
                  <span class="small_anchor">Explore</span>
                </a>
              </div>
            </div>
            <div class="text_center mt70 for-link-white link-text">
              <a href="<?php echo SITE_URL; ?>/features" class="small_anchor">View All Features </a>
            </div>
            <div class="mt40 text_center for-link-white btnSc">
              <p>Activate your Productivity Monitoring Tracker</p>
              <a href="javascript:void(0)" onclick="call_demows();" class="primary_btn1 bgwhite">Book A Demo</a>
              <small>Get queries answered from experts</small>
            </div>
          </div>
        </section>
        <section class="timeline">
          <div class="container">
            <div class="top-section">
              <h6><span class="bg-purple">Simple To Use</span></h6>
              <h2 class="inherit"> How Workstatus’ iOS Time Tracker Works </h2>
              <p>Workstatus iOS time tracker app helps teams keep track of their time and activity levels. Let’s get quickly started with Workstatus.
              </p>
            </div>
            <div class="trackRow align-center">
              <div class="trackImg">
                <picture>
                  <source type="image/webp" srcset="./assests/images/mac-track.webp">
                  <source type="image/png" srcset="./assests/images/mac-track.png">
                  <img loading="lazy" src="./assests/images/mac-track.png" alt="Tracking Software"
                    width="475" height="379">
                </picture>
              </div>
              <div class="trackContent">
                <div class="row">
                  <h5>STEP 1</h5>
                  <h3>Create an account</h3>
                  <p>Sign up for Workstatus free & get started.</p>
                </div>
                <div class="row">
                  <h5>STEP 2</h5>
                  <h3>Download Our Mac time tracking app</h3>
                  <p>Download the latest version of the Workstatus app on iOS. It will hardly take any time.</p>
                </div>
                <div class="row">
                  <h5>STEP 3</h5>
                  <h3>Start the timer</h3>
                  <p>When you start working, start the timer with one click.
                  </p>
                </div>
                <div class="row">
                  <h5>STEP 4</h5>
                  <h3>Stop the timer and enter the details</h3>
                  <p>You can add details and notes of your tasks, projects, productivity, and billable hours.
                  </p>
                </div>
                <div class="row">
                  <h5>STEP 5</h5>
                  <h3>Extract Reports for Analysis</h3>
                  <p>Log in to your online dashboard to extract data saved in reports. Get daily reports from timesheets, screenshots, activity, and URL tracking.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="how-download">
          <div class="container">
            <div class="top-section">
              <picture class="techImage">
                <source type="image/webp" srcset="./assests/images/apple-image.webp">
                <source type="image/png" srcset="./assests/images/apple-image.png">
                <img loading="lazy" src="./assests/images/apple-image.png" alt="Tracking Software" width="26" height="30">
              </picture>
              <h6><span class="bg-white">Workstatus</span></h6>
              <h2>Incredibly Easy to Download</h2>
              <p>Time Tracking App for iOS</p>
              <a href="<?php echo SITE_URL; ?>/downloads" class="primary_btn"> Download </a>
            </div>
          </div>
        </section>
        <section class="middle-section feature-section">
          <div class="item">
            <div class="container">
              <div class="top-section">
                <h6><span class="bg-purple">AI-based Intuitive Reporting System</span></h6>
                <h2>Streamline Your Day-To-Day Tasks With Workstatus</h2>
              </div>
              <div id="active_Current_Tabs1">
                <div class="flex_row">
                  <div class="column-right">
                    <picture class="page active" id="p1">
                      <source type="image/webp" srcset="./assests/images/iphone-01.webp">
                      <source type="image/png" srcset="./assests/images/iphone-01.png">
                      <img loading="lazy" src="./assests/images/iphone-01.png"
                        alt="Iphone" width="432" height="567">
                    </picture>
                    <picture class="page" id="p2">
                      <source type="image/webp" srcset="./assests/images/iphone-02.webp">
                      <source type="image/png" srcset="./assests/images/iphone-02.png">
                      <img loading="lazy" src="./assests/images/iphone-02.png"
                        alt="Iphone" width="432" height="567">
                    </picture>
                    <picture class="page" id="p3">
                      <source type="image/webp" srcset="./assests/images/iphone-03.webp">
                      <source type="image/png" srcset="./assests/images/iphone-03.png">
                      <img loading="lazy" src="./assests/images/iphone-03.png"
                        alt="Iphone" width="432" height="567">
                    </picture>
                    <picture class="page" id="p4">
                      <source type="image/webp" srcset="./assests/images/iphone-04.webp">
                      <source type="image/png" srcset="./assests/images/iphone-04.png">
                      <img loading="lazy" src="./assests/images/iphone-04.png"
                        alt="Iphone" width="432" height="567">
                    </picture>
                  </div>
                  <div class="column-left">
                    <div class="all-content">
                      <div class="text-column active" id="t1" data-section="active_Current_Tabs1">
                        <h3><i></i>Automatically Mark Attendance With Geofences
                        </h3>
                        <p>With Workstatus, set up multiple geofences and monitor them all from one central location.
                          Workstatus sends notifications if an employee arrives late or leaves early that helps you
                          to streamline your attendance process. 
                        </p>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="./assests/images/iphone-01.webp">
                          <source type="image/png" srcset="./assests/images/iphone-01.png">
                          <img loading="lazy" src="./assests/images/iphone-01.png"
                            alt="Iphone" width="432" height="567">
                        </picture>
                      </div>
                    </div>
                    <div class="all-content">
                      <div class="text-column" id="t2" data-section="active_Current_Tabs1">
                        <h3><i></i> Get Accurate Insight From The AI Intuitive Dashboard
                        </h3>
                        <p>Workstatus provides a comprehensive view of your work and breaks down all the data into easily digestible bits of information. You can see exactly how much progress you've made on a project,and where you can improve to accomplish your goals.
                        </p>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="./assests/images/iphone-02.webp">
                          <source type="image/png" srcset="./assests/images/iphone-02.png">
                          <img loading="lazy" src="./assests/images/iphone-02.png"
                            alt="Iphone" width="432" height="567">
                        </picture>
                      </div>
                    </div>
                    <div class="all-content">
                      <div class="text-column" id="t3" data-section="active_Current_Tabs1">
                        <h3><i></i> With Workstatus, Keep Track Of Your Work Hours More Efficiently</h3>
                        <p>Workstatus allows you to optimize your time and become more productive by tracking your work hours. The app is easy to use and helps employers ensure that employees accurately spend their time on tasks.
                        </p>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="./assests/images/iphone-03.webp">
                          <source type="image/png" srcset="./assests/images/iphone-03.png">
                          <img loading="lazy" src="./assests/images/iphone-03.png"
                            alt="Iphone" width="432" height="567">
                        </picture>
                      </div>
                    </div>
                    <div class="all-content">
                      <div class="text-column" id="t4" data-section="active_Current_Tabs1">
                        <h3><i></i>Ensure Complete Transparency With Selfie Validation</h3>
                        <p>Workstatus offers selfie validation, allowing employees to take a picture of themselves at
                          their current worksite and share it with their managers. This ensures that employees are
                          where they say they are and they are actually working.
                        </p>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="./assests/images/iphone-03.webp">
                          <source type="image/png" srcset="./assests/images/iphone-03.png">
                          <img loading="lazy" src="./assests/images/iphone-03.png"
                            alt="Iphone" width="432" height="567">
                        </picture>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="mt40 btnSc">
                <p>Ask your queries from experts</p>
                <a href="javascript:void(0)" onclick="call_demows();" class="primary_btn1">Book A Demo</a>
                <small>Get queries answered from experts</small>
              </div>
            </div>
          </div>
        </section>
        <section class="middle-section feature-section post-animation">
<div class="item">
<div class="container">
<div class="top-section">
<h6><span class="bg-purple">AI-BASED INTUITIVE REPORTING SYSTEM</span></h6>
<h2>Streamline Your Day-To-Day Tasks With Workstatus</h2>
<p></p>
</div>
<div id="active_Current_Tabs1">
<div class="flex_row">
<div class="column-right">
<picture id="p1" class="page">
<source type="image/webp" data-lazy-srcset="https://www.workstatus.io/wp-content/uploads-webpc/uploads/2023/02/ios-scn1.png.webp" srcset="https://www.workstatus.io/wp-content/uploads-webpc/uploads/2023/02/ios-scn1.png.webp">
<source type="image/png" data-lazy-srcset="https://www.workstatus.io/wp-content/uploads/2023/02/ios-scn1.png" srcset="https://www.workstatus.io/wp-content/uploads/2023/02/ios-scn1.png">
<img loading="lazy" src="https://www.workstatus.io/wp-content/uploads/2023/02/ios-scn1.png" alt="ios-scn1" width="407" height="505" data-lazy-src="https://www.workstatus.io/wp-content/uploads/2023/02/ios-scn1.png" data-ll-status="loaded" class="entered lazyloaded"><noscript><img loading="lazy" src="https://www.workstatus.io/wp-content/uploads/2023/02/ios-scn1.png" alt="ios-scn1" width="407" 
	height="505"></noscript>
</picture>
<picture id="p2" class="page active">
<source type="image/webp" data-lazy-srcset="https://www.workstatus.io/wp-content/uploads-webpc/uploads/2023/02/ios-scn2.png.webp" srcset="https://www.workstatus.io/wp-content/uploads-webpc/uploads/2023/02/ios-scn2.png.webp">
<source type="image/png" data-lazy-srcset="https://www.workstatus.io/wp-content/uploads/2023/02/ios-scn2.png" srcset="https://www.workstatus.io/wp-content/uploads/2023/02/ios-scn2.png">
<img loading="lazy" alt="ios-scn2" width="436" height="505" data-lazy-src="https://www.workstatus.io/wp-content/uploads/2023/02/ios-scn2.png" class="entered lazyloaded" src="https://www.workstatus.io/wp-content/uploads/2023/02/ios-scn2.png" data-ll-status="loaded"><noscript><img loading="lazy" src="https://www.workstatus.io/wp-content/uploads/2023/02/ios-scn2.png" alt="ios-scn2" width="436" 
	height="505"></noscript>
</picture>
<picture id="p3" class="page">
<source type="image/webp" data-lazy-srcset="https://www.workstatus.io/wp-content/uploads-webpc/uploads/2023/02/ios-scn3.png.webp">
<source type="image/png" data-lazy-srcset="https://www.workstatus.io/wp-content/uploads/2023/02/ios-scn3.png">
<img loading="lazy" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20305%20505'%3E%3C/svg%3E" alt="ios-scn3" width="305" height="505" data-lazy-src="https://www.workstatus.io/wp-content/uploads/2023/02/ios-scn3.png"><noscript><img loading="lazy" src="https://www.workstatus.io/wp-content/uploads/2023/02/ios-scn3.png" alt="ios-scn3" width="305" 
	height="505"></noscript>
</picture>
<picture id="p4" class="page">
<source type="image/webp" data-lazy-srcset="https://www.workstatus.io/wp-content/uploads-webpc/uploads/2023/02/ios-scn4.png.webp">
<source type="image/png" data-lazy-srcset="https://www.workstatus.io/wp-content/uploads/2023/02/ios-scn4.png">
<img loading="lazy" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20437%20475'%3E%3C/svg%3E" alt="ios-scn4" width="437" height="475" data-lazy-src="https://www.workstatus.io/wp-content/uploads/2023/02/ios-scn4.png"><noscript><img loading="lazy" src="https://www.workstatus.io/wp-content/uploads/2023/02/ios-scn4.png" alt="ios-scn4" width="437" 
	height="475"></noscript>
</picture>
</div>
<div class="column-left">
<div class="all-content">
<div class="text-column" id="t1" data-section="active_Current_Tabs1">
<h3><i></i>Automatically Mark Attendance With Geofences</h3>
<p>With Workstatus, set up multiple geofences and monitor them all from one central location. Workstatus sends notifications if an employee arrives late or leaves early that helps you to streamline your attendance process.
</p>
</div>
<div class="mob-image">
<picture>
<source type="image/webp" srcset="https://www.workstatus.io/wp-content/uploads-webpc/uploads/2023/02/ios-scn1.png.webp">
<source type="image/png" srcset="https://www.workstatus.io/wp-content/uploads/2023/02/ios-scn1.png">
<img loading="lazy" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20407%20505'%3E%3C/svg%3E" alt="ios-scn1" width="407" height="505" data-lazy-src="https://www.workstatus.io/wp-content/uploads/2023/02/ios-scn1.png"><noscript><img loading="lazy" src="https://www.workstatus.io/wp-content/uploads/2023/02/ios-scn1.png" alt="ios-scn1" width="407" 
	height="505"></noscript>
</picture> </div>
</div>
<div class="all-content">
<div class="text-column active" id="t2" data-section="active_Current_Tabs1">
<h3><i></i>Get Accurate Insight From The AI Intuitive Dashboard</h3>
<p>Workstatus provides a comprehensive view of your work and breaks down all the data into easily digestible bits of information. You can see exactly how much progress you've made on a project, and where you can improve to accomplish your goals.
</p>
</div>
<div class="mob-image">
<picture>
<source type="image/webp" srcset="https://www.workstatus.io/wp-content/uploads-webpc/uploads/2023/02/ios-scn2.png.webp">
<source type="image/png" srcset="https://www.workstatus.io/wp-content/uploads/2023/02/ios-scn2.png">
<img loading="lazy" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20436%20505'%3E%3C/svg%3E" alt="ios-scn2" width="436" height="505" data-lazy-src="https://www.workstatus.io/wp-content/uploads/2023/02/ios-scn2.png"><noscript><img loading="lazy" src="https://www.workstatus.io/wp-content/uploads/2023/02/ios-scn2.png" alt="ios-scn2" width="436" 
	height="505"></noscript>
</picture> </div>
</div>
<div class="all-content">
<div class="text-column" id="t3" data-section="active_Current_Tabs1">
<h3><i></i>With Workstatus, Keep Track Of Your Work Hours More Efficiently</h3>
<p>Workstatus allows you to optimize your time and become more productive by tracking your work hours. The app is easy to use and helps employers ensure that employees accurately spend their time on tasks.
</p>
</div>
<div class="mob-image">
<picture>
<source type="image/webp" srcset="https://www.workstatus.io/wp-content/uploads-webpc/uploads/2023/02/ios-scn3.png.webp">
<source type="image/png" srcset="https://www.workstatus.io/wp-content/uploads/2023/02/ios-scn3.png">
<img loading="lazy" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20305%20505'%3E%3C/svg%3E" alt="ios-scn3" width="305" height="505" data-lazy-src="https://www.workstatus.io/wp-content/uploads/2023/02/ios-scn3.png"><noscript><img loading="lazy" src="https://www.workstatus.io/wp-content/uploads/2023/02/ios-scn3.png" alt="ios-scn3" width="305" 
	height="505"></noscript>
</picture> </div>
</div>
<div class="all-content">
<div class="text-column" id="t4" data-section="active_Current_Tabs1">
<h3><i></i>Ensure Complete Transparency With Selfie Validation</h3>
<p>Workstatus offers selfie validation, allowing employees to take a picture of themselves at their current worksite and share it with their managers. This ensures that employees are where they say they are and they are actually working.
</p>
</div>
<div class="mob-image">
<picture>
<source type="image/webp" srcset="https://www.workstatus.io/wp-content/uploads-webpc/uploads/2023/02/ios-scn4.png.webp">
<source type="image/png" srcset="https://www.workstatus.io/wp-content/uploads/2023/02/ios-scn4.png">
<img loading="lazy" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20437%20475'%3E%3C/svg%3E" alt="ios-scn4" width="437" height="475" data-lazy-src="https://www.workstatus.io/wp-content/uploads/2023/02/ios-scn4.png"><noscript><img loading="lazy" src="https://www.workstatus.io/wp-content/uploads/2023/02/ios-scn4.png" alt="ios-scn4" width="437" 
	height="475"></noscript>
</picture> </div>
</div>
</div>
</div>
</div>
<div class="mt40 btnSc">

<div class="cmn-democta ctasec">
<div>
<a data-href="https://app.workstatus.io/auth/register/?pid=42&amp;type=monthly" href="javascript:void(0);" class="ctbtn" onclick="return get_ws_signupform(this);">Start Free Trial</a>
<span class="nccr">No credit card required</span>
</div>
<span class="devide">OR</span>
<div><a href="javascript:void(0)" class="ctbtn nobg" onclick="call_demows();" target="_self">Book A Demo</a></div>
</div> </div>
</div>
</div>
</section>
        <section class="wsMobile whitetxt">
          <?php require_once 'common/workstatus-device.php';?>
        </section>
        <section class="faqsRow wfull for-heading-center">
          <div class="container">
            <div class="top-section">
              <h6><span class="bg-purple">Get Answers For</span></h6>
              <h2>Frequently Asked Questions</h2>
            </div>
            <div class="flex_row">
              <div itemscope itemtype="https://schema.org/FAQPage">
                <div class="column">
                  <div class="faq-accordion-item-outer open" itemscope itemprop="mainEntity"
                    itemtype="https://schema.org/Question">
                    <h3 itemprop="name">Do iOS phones have an inbuilt time tracking app?
                    </h3>
                    <div class="faq-accordion-content">
                      <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div itemprop="text">
                          <p>No, iOS platform does not include its own time tracking software, but it does support Workstatus, which is a popular time recording program for iOS. You can easily download and use Workstatus on your iOS device from the app store to keep track of your activities, and productivity.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="faq-accordion-item-outer" itemscope itemprop="mainEntity"
                    itemtype="https://schema.org/Question">
                    <h3 itemprop="name">How can I keep track of my time on iOS?</h3>
                    <div class="faq-accordion-content">
                      <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div itemprop="text">
                          <p>To use Workstatus online, join up first and download the iOS time tracker from the Apple Store for your iPhone. Set the time by giving required permissions. And there you have it! You're ready to keep track of your activity, productivity, and projects now that you've set up everything.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <?php require_once 'common/workstatus-journey.php';?>
      </main>
      <?php require_once 'common/footer.php';?>
    </div>
    <?php if( !isMobile() ) : ?>
    <script src="./assests/js/glider.min.js"></script>
    <?php endif; ?>
    <script src="./assests/js/script.js"></script>
  </body>
</html>
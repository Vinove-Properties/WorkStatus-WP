<?php require_once 'common/inc/config.inc.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="alternate" href="<?php echo SITE_URL; ?>/features" hreflang="en-us" />
    <link type="text/css" href="./assests/css/featureDetail-new.css" rel="preload stylesheet" as="style" />
    <?php require_once 'common/inc/header-files.php';?>
  </head>
  <body>
    <?php require_once 'common/inc/after-body-tag.php'; ?>
    <div class="body__wrapper">
    <div class="feature-header">
      <?php require_once 'common/header.php';?>
    </div>
    <main class="site__content">
      <section class="inner-banner-bg">
        <div class="bannerwrap">
          <div class="container">
            <div class="inner-wrap">
              <h1>Features Of Workstatus
              </h1>
              <p>Automate employee time-tracking, payroll, invoicing, and more while maintaining the required transparency at workplace, with just one click.
              </p>
              <div class="actionBtn">
                <div><a data-href="https://app.workstatus.io/auth/register/?pid=1&amp;type=monthly" href="javascript:void(0);" class="primary_btn1" onclick="return get_ws_signupform(this);">Start Free Trial</a>
                  <small>No credit card required</small>
                </div>
                <div><a href="javascript:void(0)" onclick="call_demows();" class="primary_btn2">Book A
                  Demo</a>
                  <small>Get queries answered from experts</small>
                </div>
              </div>
              <?php require_once 'common/available-device.php';?>
              <?php require_once 'common/partners.php';?>
            </div>
          </div>
      </section>
      <section class="data-drive p50">
     <div class="item">
    <div class="container">
      <div class="top-section">
        <h6><span class="bg-purple">Data Driving Results</span></h6>
        <h2>Smart Decisions for Business Growth: Plan, Analyze, and Execute</h2>
        <p>Stay one step ahead always, manage & track your workforce & workload, analyze data and ensure business growth.
        </p>
      </div>
      <div class="data-flow">
        <picture>
          <img loading="lazy" src="./assests/images/data-flow.svg" alt="Data Driving"
            width="1354" height="652">
        </picture>
      </div>
    </div>
  </div>
</section>
<section class="feature">
  <div class="item">
    <div class="container">
      <div class="flex_row">
        <div class="column-left">
          <picture>
            <source type="image/webp" srcset="./assests/images/ftm-image.png">
            <source type="image/png" srcset="./assests/images/ftm-image.png">
            <img loading="lazy" src="./assests/images/ftm-image.png" alt="Feature"
              width="526" height="564">
          </picture>
        </div>
        <div class="column-right">
          <div class="top-section">
            <h6><span class="bg-purple">SIMPLE TO USE</span></h6>
            <h2>Time & Attendance</h2>
            <p>Efficiently track employee work hours, ensuring accuracy and eliminating manual processes. Our system offers online timesheets, attendance management, shift planning, and geofence time tracking, enabling seamless workforce scheduling and real-time insights. </p>
            <p><strong>Explore Time & Attendance Features:</strong></p>
            <div class="ft-list">
              <div class="ftcol">
                <a href="#">
                  <picture>
                    <source type="image/webp" srcset="./assests/images/ftr-icon01.png">
                    <source type="image/png" srcset="./assests/images/ftr-icon01.png">
                    <img loading="lazy" src="./assests/images/ftr-icon01.png" alt="Geofence"
                      width="36" height="34">
                  </picture>
                  Time Tracking
                </a>
              </div>
              <div class="ftcol">
                <a href="#">
                  <picture>
                    <source type="image/webp" srcset="./assests/images/ftr-icon01.png">
                    <source type="image/png" srcset="./assests/images/ftr-icon01.png">
                    <img loading="lazy" src="./assests/images/ftr-icon01.png" alt="Geofence"
                      width="36" height="34">
                  </picture>
                  Online Timesheets 
                </a>
              </div>
              <div class="ftcol">
                <a href="#">
                  <picture>
                    <source type="image/webp" srcset="./assests/images/ftr-icon01.png">
                    <source type="image/png" srcset="./assests/images/ftr-icon01.png">
                    <img loading="lazy" src="./assests/images/ftr-icon01.png" alt="Geofence"
                      width="36" height="34">
                  </picture>
                  Attendance Management
                </a>
              </div>
              <div class="ftcol">
                <a href="#">
                  <picture>
                    <source type="image/webp" srcset="./assests/images/ftr-icon01.png">
                    <source type="image/png" srcset="./assests/images/ftr-icon01.png">
                    <img loading="lazy" src="./assests/images/ftr-icon01.png" alt="Geofence"
                      width="36" height="34">
                  </picture>
                  Shift Management
                </a>
              </div>
              <div class="ftcol">
                <a href="#">
                  <picture>
                    <source type="image/webp" srcset="./assests/images/ftr-icon01.png">
                    <source type="image/png" srcset="./assests/images/ftr-icon01.png">
                    <img loading="lazy" src="./assests/images/ftr-icon01.png" alt="Geofence"
                      width="36" height="34">
                  </picture>
                  Time off management
                </a>
              </div>
              <div class="ftcol">
                <a href="#">
                  <picture>
                    <source type="image/webp" srcset="./assests/images/ftr-icon01.png">
                    <source type="image/png" srcset="./assests/images/ftr-icon01.png">
                    <img loading="lazy" src="./assests/images/ftr-icon01.png" alt="Geofence"
                      width="36" height="34">
                  </picture>
                  Geofence Time Tracking
                </a>
              </div>
              <div class="ftcol">
                <a href="#">
                  <picture>
                    <source type="image/webp" srcset="./assests/images/ftr-icon01.png">
                    <source type="image/png" srcset="./assests/images/ftr-icon01.png">
                    <img loading="lazy" src="./assests/images/ftr-icon01.png" alt="Geofence"
                      width="36" height="34">
                  </picture>
                  Time Clock App
                </a>
              </div>
              <div class="ftcol">
                <a href="#">
                  <picture>
                    <source type="image/webp" srcset="./assests/images/ftr-icon01.png">
                    <source type="image/png" srcset="./assests/images/ftr-icon01.png">
                    <img loading="lazy" src="./assests/images/ftr-icon01.png" alt="Geofence"
                      width="36" height="34">
                  </picture>
                  Online Time Reporting 
                </a>
              </div>
              <div class="ftcol">
                <a href="#">
                  <picture>
                    <source type="image/webp" srcset="./assests/images/ftr-icon01.png">
                    <source type="image/png" srcset="./assests/images/ftr-icon01.png">
                    <img loading="lazy" src="./assests/images/ftr-icon01.png" alt="Geofence"
                      width="36" height="34">
                  </picture>
                  Automatic Time Mapping
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="item">
    <div class="container">
      <div class="flex_row">
        <div class="column-left">
          <picture>
            <source type="image/webp" srcset="./assests/images/ftm-image01.png">
            <source type="image/png" srcset="./assests/images/ftm-image01.png">
            <img loading="lazy" src="./assests/images/ftm-image01png" alt="Feature"
              width="526" height="564">
          </picture>
        </div>
        <div class="column-right">
          <div class="top-section">
            <h6><span class="bg-purple">SIMPLE TO USE</span></h6>
            <h2>Time & Attendance</h2>
            <p>Efficiently track employee work hours, ensuring accuracy and eliminating manual processes. Our system offers online timesheets, attendance management, shift planning, and geofence time tracking, enabling seamless workforce scheduling and real-time insights. </p>
            <p><strong>Explore Time & Attendance Features:</strong></p>
            <div class="ft-list">
              <div class="ftcol">
                <a href="#">
                  <picture>
                    <source type="image/webp" srcset="./assests/images/ftr-icon01.png">
                    <source type="image/png" srcset="./assests/images/ftr-icon01.png">
                    <img loading="lazy" src="./assests/images/ftr-icon01.png" alt="Geofence"
                      width="36" height="34">
                  </picture>
                  Time Tracking
                </a>
              </div>
              <div class="ftcol">
                <a href="#">
                  <picture>
                    <source type="image/webp" srcset="./assests/images/ftr-icon01.png">
                    <source type="image/png" srcset="./assests/images/ftr-icon01.png">
                    <img loading="lazy" src="./assests/images/ftr-icon01.png" alt="Geofence"
                      width="36" height="34">
                  </picture>
                  Online Timesheets 
                </a>
              </div>
              <div class="ftcol">
                <a href="#">
                  <picture>
                    <source type="image/webp" srcset="./assests/images/ftr-icon01.png">
                    <source type="image/png" srcset="./assests/images/ftr-icon01.png">
                    <img loading="lazy" src="./assests/images/ftr-icon01.png" alt="Geofence"
                      width="36" height="34">
                  </picture>
                  Attendance Management
                </a>
              </div>
              <div class="ftcol">
                <a href="#">
                  <picture>
                    <source type="image/webp" srcset="./assests/images/ftr-icon01.png">
                    <source type="image/png" srcset="./assests/images/ftr-icon01.png">
                    <img loading="lazy" src="./assests/images/ftr-icon01.png" alt="Geofence"
                      width="36" height="34">
                  </picture>
                  Shift Management
                </a>
              </div>
              <div class="ftcol">
                <a href="#">
                  <picture>
                    <source type="image/webp" srcset="./assests/images/ftr-icon01.png">
                    <source type="image/png" srcset="./assests/images/ftr-icon01.png">
                    <img loading="lazy" src="./assests/images/ftr-icon01.png" alt="Geofence"
                      width="36" height="34">
                  </picture>
                  Time off management
                </a>
              </div>
              <div class="ftcol">
                <a href="#">
                  <picture>
                    <source type="image/webp" srcset="./assests/images/ftr-icon01.png">
                    <source type="image/png" srcset="./assests/images/ftr-icon01.png">
                    <img loading="lazy" src="./assests/images/ftr-icon01.png" alt="Geofence"
                      width="36" height="34">
                  </picture>
                  Geofence Time Tracking
                </a>
              </div>
              <div class="ftcol">
                <a href="#">
                  <picture>
                    <source type="image/webp" srcset="./assests/images/ftr-icon01.png">
                    <source type="image/png" srcset="./assests/images/ftr-icon01.png">
                    <img loading="lazy" src="./assests/images/ftr-icon01.png" alt="Geofence"
                      width="36" height="34">
                  </picture>
                  Time Clock App
                </a>
              </div>
              <div class="ftcol">
                <a href="#">
                  <picture>
                    <source type="image/webp" srcset="./assests/images/ftr-icon01.png">
                    <source type="image/png" srcset="./assests/images/ftr-icon01.png">
                    <img loading="lazy" src="./assests/images/ftr-icon01.png" alt="Geofence"
                      width="36" height="34">
                  </picture>
                  Online Time Reporting 
                </a>
              </div>
              <div class="ftcol">
                <a href="#">
                  <picture>
                    <source type="image/webp" srcset="./assests/images/ftr-icon01.png">
                    <source type="image/png" srcset="./assests/images/ftr-icon01.png">
                    <img loading="lazy" src="./assests/images/ftr-icon01.png" alt="Geofence"
                      width="36" height="34">
                  </picture>
                  Automatic Time Mapping
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="item">
    <div class="container">
      <div class="flex_row">
        <div class="column-left">
          <picture>
            <source type="image/webp" srcset="./assests/images/ftm-image.png">
            <source type="image/png" srcset="./assests/images/ftm-image.png">
            <img loading="lazy" src="./assests/images/ftm-image.png" alt="Geofence"
              width="526" height="564">
          </picture>
        </div>
        <div class="column-right">
          <div class="top-section">
            <h6><span class="bg-purple">SIMPLE TO USE</span></h6>
            <h2>Time & Attendance</h2>
            <p>Efficiently track employee work hours, ensuring accuracy and eliminating manual processes. Our system offers online timesheets, attendance management, shift planning, and geofence time tracking, enabling seamless workforce scheduling and real-time insights. </p>
            <p><strong>Explore Time & Attendance Features:</strong></p>
            <div class="ft-list">
              <div class="ftcol">
                <a href="#">
                  <picture>
                    <source type="image/webp" srcset="./assests/images/ftr-icon01.png">
                    <source type="image/png" srcset="./assests/images/ftr-icon01.png">
                    <img loading="lazy" src="./assests/images/ftr-icon01.png" alt="Geofence"
                      width="36" height="34">
                  </picture>
                  Time Tracking
                </a>
              </div>
              <div class="ftcol">
                <a href="#">
                  <picture>
                    <source type="image/webp" srcset="./assests/images/ftr-icon01.png">
                    <source type="image/png" srcset="./assests/images/ftr-icon01.png">
                    <img loading="lazy" src="./assests/images/ftr-icon01.png" alt="Geofence"
                      width="36" height="34">
                  </picture>
                  Online Timesheets 
                </a>
              </div>
              <div class="ftcol">
                <a href="#">
                  <picture>
                    <source type="image/webp" srcset="./assests/images/ftr-icon01.png">
                    <source type="image/png" srcset="./assests/images/ftr-icon01.png">
                    <img loading="lazy" src="./assests/images/ftr-icon01.png" alt="Geofence"
                      width="36" height="34">
                  </picture>
                  Attendance Management
                </a>
              </div>
              <div class="ftcol">
                <a href="#">
                  <picture>
                    <source type="image/webp" srcset="./assests/images/ftr-icon01.png">
                    <source type="image/png" srcset="./assests/images/ftr-icon01.png">
                    <img loading="lazy" src="./assests/images/ftr-icon01.png" alt="Geofence"
                      width="36" height="34">
                  </picture>
                  Shift Management
                </a>
              </div>
              <div class="ftcol">
                <a href="#">
                  <picture>
                    <source type="image/webp" srcset="./assests/images/ftr-icon01.png">
                    <source type="image/png" srcset="./assests/images/ftr-icon01.png">
                    <img loading="lazy" src="./assests/images/ftr-icon01.png" alt="Geofence"
                      width="36" height="34">
                  </picture>
                  Time off management
                </a>
              </div>
              <div class="ftcol">
                <a href="#">
                  <picture>
                    <source type="image/webp" srcset="./assests/images/ftr-icon01.png">
                    <source type="image/png" srcset="./assests/images/ftr-icon01.png">
                    <img loading="lazy" src="./assests/images/ftr-icon01.png" alt="Geofence"
                      width="36" height="34">
                  </picture>
                  Geofence Time Tracking
                </a>
              </div>
              <div class="ftcol">
                <a href="#">
                  <picture>
                    <source type="image/webp" srcset="./assests/images/ftr-icon01.png">
                    <source type="image/png" srcset="./assests/images/ftr-icon01.png">
                    <img loading="lazy" src="./assests/images/ftr-icon01.png" alt="Geofence"
                      width="36" height="34">
                  </picture>
                  Time Clock App
                </a>
              </div>
              <div class="ftcol">
                <a href="#">
                  <picture>
                    <source type="image/webp" srcset="./assests/images/ftr-icon01.png">
                    <source type="image/png" srcset="./assests/images/ftr-icon01.png">
                    <img loading="lazy" src="./assests/images/ftr-icon01.png" alt="Geofence"
                      width="36" height="34">
                  </picture>
                  Online Time Reporting 
                </a>
              </div>
              <div class="ftcol">
                <a href="#">
                  <picture>
                    <source type="image/webp" srcset="./assests/images/ftr-icon01.png">
                    <source type="image/png" srcset="./assests/images/ftr-icon01.png">
                    <img loading="lazy" src="./assests/images/ftr-icon01.png" alt="Geofence"
                      width="36" height="34">
                  </picture>
                  Automatic Time Mapping
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="item">
    <div class="container">
      <div class="flex_row">
        <div class="column-left">
          <picture>
            <source type="image/webp" srcset="./assests/images/ftm-image.png">
            <source type="image/png" srcset="./assests/images/ftm-image.png">
            <img loading="lazy" src="./assests/images/ftm-image.png" alt="Feature"
              width="526" height="564">
          </picture>
        </div>
        <div class="column-right">
          <div class="top-section">
            <h6><span class="bg-purple">SIMPLE TO USE</span></h6>
            <h2>Time & Attendance</h2>
            <p>Efficiently track employee work hours, ensuring accuracy and eliminating manual processes. Our system offers online timesheets, attendance management, shift planning, and geofence time tracking, enabling seamless workforce scheduling and real-time insights. </p>
            <p><strong>Explore Time & Attendance Features:</strong></p>
            <div class="ft-list">
              <div class="ftcol">
                <a href="#">
                  <picture>
                    <source type="image/webp" srcset="./assests/images/ftr-icon01.png">
                    <source type="image/png" srcset="./assests/images/ftr-icon01.png">
                    <img loading="lazy" src="./assests/images/ftr-icon01.png" alt="Geofence"
                      width="36" height="34">
                  </picture>
                  Time Tracking
                </a>
              </div>
              <div class="ftcol">
                <a href="#">
                  <picture>
                    <source type="image/webp" srcset="./assests/images/ftr-icon01.png">
                    <source type="image/png" srcset="./assests/images/ftr-icon01.png">
                    <img loading="lazy" src="./assests/images/ftr-icon01.png" alt="Geofence"
                      width="36" height="34">
                  </picture>
                  Online Timesheets 
                </a>
              </div>
              <div class="ftcol">
                <a href="#">
                  <picture>
                    <source type="image/webp" srcset="./assests/images/ftr-icon01.png">
                    <source type="image/png" srcset="./assests/images/ftr-icon01.png">
                    <img loading="lazy" src="./assests/images/ftr-icon01.png" alt="Geofence"
                      width="36" height="34">
                  </picture>
                  Attendance Management
                </a>
              </div>
              <div class="ftcol">
                <a href="#">
                  <picture>
                    <source type="image/webp" srcset="./assests/images/ftr-icon01.png">
                    <source type="image/png" srcset="./assests/images/ftr-icon01.png">
                    <img loading="lazy" src="./assests/images/ftr-icon01.png" alt="Geofence"
                      width="36" height="34">
                  </picture>
                  Shift Management
                </a>
              </div>
              <div class="ftcol">
                <a href="#">
                  <picture>
                    <source type="image/webp" srcset="./assests/images/ftr-icon01.png">
                    <source type="image/png" srcset="./assests/images/ftr-icon01.png">
                    <img loading="lazy" src="./assests/images/ftr-icon01.png" alt="Geofence"
                      width="36" height="34">
                  </picture>
                  Time off management
                </a>
              </div>
              <div class="ftcol">
                <a href="#">
                  <picture>
                    <source type="image/webp" srcset="./assests/images/ftr-icon01.png">
                    <source type="image/png" srcset="./assests/images/ftr-icon01.png">
                    <img loading="lazy" src="./assests/images/ftr-icon01.png" alt="Geofence"
                      width="36" height="34">
                  </picture>
                  Geofence Time Tracking
                </a>
              </div>
              <div class="ftcol">
                <a href="#">
                  <picture>
                    <source type="image/webp" srcset="./assests/images/ftr-icon01.png">
                    <source type="image/png" srcset="./assests/images/ftr-icon01.png">
                    <img loading="lazy" src="./assests/images/ftr-icon01.png" alt="Geofence"
                      width="36" height="34">
                  </picture>
                  Time Clock App
                </a>
              </div>
              <div class="ftcol">
                <a href="#">
                  <picture>
                    <source type="image/webp" srcset="./assests/images/ftr-icon01.png">
                    <source type="image/png" srcset="./assests/images/ftr-icon01.png">
                    <img loading="lazy" src="./assests/images/ftr-icon01.png" alt="Geofence"
                      width="36" height="34">
                  </picture>
                  Online Time Reporting 
                </a>
              </div>
              <div class="ftcol">
                <a href="#">
                  <picture>
                    <source type="image/webp" srcset="./assests/images/ftr-icon01.png">
                    <source type="image/png" srcset="./assests/images/ftr-icon01.png">
                    <img loading="lazy" src="./assests/images/ftr-icon01.png" alt="Geofence"
                      width="36" height="34">
                  </picture>
                  Automatic Time Mapping
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="four-columns bglight">
  <div class="container">
    <div class="top-section">
      <h6><span class="bg-purple">Work Models</span></h6>
      <h2>Choose From Different Workplace Modes</h2>
      <p>Create a flexible workplace to adapt to changing workforce needs and to provide a better work culture.</p>
    </div>
    <div class="flex_row">
      <div class="column">
        <div class="box">
          <div class="bx-content">
            <picture>
              <source type="image/webp" srcset="https://www.workstatus.io/wp-content/uploads-webpc/uploads/2023/10/wm-01.png.webp">
              <source type="image/png" srcset="https://www.workstatus.io/wp-content/uploads/2023/10/wm-01.png">
              <img loading="lazy" src="https://www.workstatus.io/wp-content/uploads/2023/10/wm-01.png" alt="wm-01" width="72" height="48">
            </picture>
            <h3>Remote Work</h3>
            <p>Foster unity and connectivity. Elevate remote efficiency with tailored tracking and instant collaboration tools.</p>
          </div>
          <a href="https://www.workstatus.io/workplace-mode/remote-work-management" class="view-more">Explore</a>
        </div>
      </div>
      <div class="column">
        <div class="box">
          <div class="bx-content">
            <picture>
              <source type="image/webp" srcset="https://www.workstatus.io/wp-content/uploads-webpc/uploads/2023/10/wm-02.png.webp">
              <source type="image/png" srcset="https://www.workstatus.io/wp-content/uploads/2023/10/wm-02.png">
              <img loading="lazy" src="https://www.workstatus.io/wp-content/uploads/2023/10/wm-02.png" alt="wm-02" width="73" height="48">
            </picture>
            <h3>Hybrid Work</h3>
            <p>Harmonize in-office and remote schedules. Facilitate flexibility while ensuring consistent productivity and communication.</p>
          </div>
          <a href="https://www.workstatus.io/workplace-mode/hybrid-work-management" class="view-more">Explore</a>
        </div>
      </div>
      <div class="column">
        <div class="box">
          <div class="bx-content">
            <picture>
              <source type="image/webp" srcset="https://www.workstatus.io/wp-content/uploads-webpc/uploads/2023/10/wm-03.png.webp">
              <source type="image/png" srcset="https://www.workstatus.io/wp-content/uploads/2023/10/wm-03.png">
              <img loading="lazy" src="https://www.workstatus.io/wp-content/uploads/2023/10/wm-03.png" alt="wm-03" width="73" height="48">
            </picture>
            <h3>Office Work</h3>
            <p>Drive in-house performance to its peak. Benefit from real-time insights, streamline tasks, and enhance team collaboration.</p>
          </div>
          <a href="https://www.workstatus.io/workplace-mode/office-work" class="view-more">Explore</a>
        </div>
      </div>
      <div class="column">
        <div class="box">
          <div class="bx-content">
            <picture>
              <source type="image/webp" srcset="https://www.workstatus.io/wp-content/uploads-webpc/uploads/2023/10/wm-04.png.webp">
              <source type="image/png" srcset="https://www.workstatus.io/wp-content/uploads/2023/10/wm-04.png">
              <img loading="lazy" src="https://www.workstatus.io/wp-content/uploads/2023/10/wm-04.png" alt="wm-04" width="72" height="48">
            </picture>
            <h3>Field Work</h3>
            <p>Optimize the allocation of resources, schedule and manage field service personnel, track route &amp; deliveries and more.</p>
          </div>
          <a href="https://www.workstatus.io/workforce-management/field-service-management" class="view-more">Explore</a>
        </div>
      </div>
    </div>
  </div>
</section>



<section class="four-columns  price-col">
  <div class="container">
    <div class="top-section">
      <h6><span class="bg-purple">PRICING</span></h6>
      <h2>Tailored Pricing for Advanced Workforce Management & Analytics</h2>
      <p>Choose the plan that suits your organization's goals. Large organizations seeking a customized<br> solution to boost productivity can explore enterprise pricing options.</p>
    </div>
    <div class="flex_row">
      <div class="column">
        <div class="box">
          <div class="bx-content">
            <h3>BASIC</h3>
            <div class="card-plan">
            $4 <span>/ user / month</span></div>
            <span class="total">$7,140 monthly total</span>
            <a  href="javascript:void(0);" class="ctbtn">Choose Plan</a>
          </div>
          
        </div>
      </div>

      <div class="column">
        <div class="box">
          <div class="bx-content">
            <h3>PROFESSIONAL</h3>
            <div class="card-plan">
            $4 <span>/ user / month</span></div>
            <span class="total">$7,140 monthly total</span>
            <a  href="javascript:void(0);" class="ctbtn">Choose Plan</a>
          </div>
          
        </div>
      </div>

      <div class="column">
        <div class="box">
          <div class="bx-content">
            <h3>BUSINESS</h3>
            <div class="card-plan">
            $8 <span>/ user / month</span></div>
            <span class="total">$7,140 monthly total</span>
            <a  href="javascript:void(0);" class="ctbtn">Choose Plan</a>
          </div>
          
        </div>
      </div>

      <div class="column">
        <div class="box">
          <div class="bx-content">
            <h3>ENTERPRISE</h3>
            <div class="card-plan">
            $179,000</div>
            <span class="total">$7,140 monthly total</span>
            <a  href="javascript:void(0);" class="ctbtn">Let’s Talk</a>
          </div>
          
        </div>
      </div>
    
    </div>
    <div class="mt80 btnSc">
    <a href="#">Check Details</a>  
</div>     
</section>  

<section class="faqsRow wfull for-heading-center bglight">
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
            <h3 itemprop="name"> Why do you need remote team management software?
            </h3>
            <div class="faq-accordion-content">
              <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                <div itemprop="text">
                  <p>Companies are now recruiting employees from various cities and countries in order to acquire different experiences and expertise for the betterment of their business. Due to such factors, companies have started opting for remote team management software to manage all their employees from a single place.</p>
                  <p>This is a great way to keep track of all your employees and help them work more efficiently with each other while they work remotely. Remote Team Management Software provides you with an easy way to manage your employees without any hassle. It helps you keep track of your employees via its dashboard interface, allowing you to access real-time reports about their performance and productivity. </p>
                  <p>Remote team management software also enables you to assign different tasks to your employees from anywhere in the world, thus helping increase productivity within no time. All in all, remote team management software has become an essential component for companies that have recruited employees from various places to work remotely for them.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="faq-accordion-item-outer" itemscope itemprop="mainEntity"
            itemtype="https://schema.org/Question">
            <h3 itemprop="name">Which software is best for remote team management?</h3>
            <div class="faq-accordion-content">
              <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                <div itemprop="text">
                  <p>The best remote team management software is one that meets specific requirements for your team. You’ll want to look for features like time tracking, file sharing, task management, and communication functions. Workstatus has all of these features, along with a selfie validation function that’s built right into each employee profile.</p>
                  <p>With Workstatus, you can manage your remote team from anywhere. Our GPS tracking and live location features allow you to see where each employee is and what they’re working on in real-time. This gives you a better idea of how your employees use their time, which helps you make more informed decisions about projects and schedules.</p>
                  <p>Also, you can monitor your team’s productivity with our time tracking feature. This feature allows you to see how much time each employee spends on different tasks, which gives you a better idea of how to schedule your employees for maximum efficiency. </p>
                  <p>Workstatus has been built with a specific goal in mind, and that is to manage a remote team as easily as possible. With all of these features, it’s easy to see why Workstatus has become one of the most popular remote workforce management software in the market today.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="faq-accordion-item-outer" itemscope itemprop="mainEntity"
            itemtype="https://schema.org/Question">
            <h3 itemprop="name">How does Workstatus help in maintaining productivity for remote teams?</h3>
            <div class="faq-accordion-content">
              <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                <div itemprop="text">
                  <p>Workstatus helps maintain productivity for remote teams by assisting you in creating tasks and managing your deadlines. This makes it simple to track your work and stay on schedule. </p>
                  <p>Workstatus helps you build transparency into who is working on what and where progress is being made with status updates, updates directly to project management systems. You can also set reminders for individuals or groups of people to help them stay focused on their projects and deadlines.</p>
                  <p>Workstatus helps you keep on top of tasks and maintain a high level of productivity by allowing you to track the working hours of your team members. This makes it easy to identify who is working hard and who might need some motivation.</p>
                  <p>All in all, Workstatus helps you stay on top of your projects and tasks. It makes it easy to manage your team and monitor their progress so that everyone works productively towards a common goal.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="faq-accordion-item-outer" itemscope itemprop="mainEntity"
            itemtype="https://schema.org/Question">
            <h3 itemprop="name">Does Workstatus help in end to end management of remote teams?</h3>
            <div class="faq-accordion-content">
              <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                <div itemprop="text">
                  <p>Yes, Workstatus is all you need to manage and monitor remote teams. It offers end-to-end management of remote teams with a centralized dashboard that gives complete visibility into your team’s work. You can easily see what they are working on, how much time they have spent on it and when they will be done. You can assign tasks to them and track their progress in real-time.</p>
                  <p>Managing remote teams is challenging and requires a lot of time and effort. Workstatus makes it easy for you to manage your team with its simple yet powerful features. It helps you to set goals, monitor progress, assign tasks, track time spent on tasks and view reports for better decision making.</p>
                  <p>With Workstatus, you can also get work done anywhere by accessing your team’s dashboards anytime and anywhere using our mobile app or any web browser.</p>
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
<?php require_once '../common/inc/config.inc.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="alternate" href="<?php echo SITE_URL; ?>/industry/agency" hreflang="en-us" />
    <link rel="shortcut icon" href="../assests/images/favicon.png" type="image/x-icon" />
    <link type="text/css" href="../assests/css/featureDetail-new.css" rel="preload stylesheet" as="style" />
    <?php if( !isMobile() ) : ?>
    <link type="text/css" rel="preload stylesheet" href="../assests/css/glider.css" as="style" />
    <?php endif; ?>
    <?php require_once '../common/inc/meta.php'; ?>
  </head>
  <body>
    <?php require_once '../common/inc/after-body-tag.php'; ?>
    <div class="body__wrapper">
      <div class="feature-header">
        <?php require_once '../common/header.php';?>
      </div>
      <main class="site__content">
        <section class="inner-banner">
          <div class="container">
            <div class="inner-wrap">
              <h1>Smartly Monitor Billable Hours, Budgets, & Productivity </h1>
              <p>A simplified way to track billable hours and project budgets, helping agencies to stay profitable and on budget. Get a clear view of the time spent on every project.
              </p>
              <!-- <ul class="list">
                <li>Easily generate invoices and reports</li>
                <li>Automatic time tracking for more accuracy</li>
                <li>Mobile app for on-the-go tracking</li>
              </ul> -->
              <div class="actionBtn">
                <?php if( geoCTAcheck() === true ) : ?>
                <div><a href="<?php echo $RegLink; ?>"
                  class="primary_btn1"><?php echo $ws_ctas['cta_text']; ?></a>
                  <small>No credit card required</small>
                </div>
                <?php endif; ?>
                <div><a href="javascript:void(0)" onclick="call_demows();" class="primary_btn2 formbtn">Book A Demo</a>
                  <small>Get queries answered from experts</small>
                </div>
              </div>
              <?php require_once '../common/available-device.php';?>
              <div class="video-wrap">
                <div class="videoSc" id="has-yt-video">
                  <div class="inner">
                    <div class="topVideo srp-21">
                      <div id="myDIV" class="contbox2">
                        <div class="videoWrapper">
                          <iframe id="video" class="videoIframe" allowfullscreen
                            data-src="https://www.youtube.com/embed/4CcdBw4Gs9s?enablejsapi=1&html5=1&mute=1">
                          </iframe>
                          <button class="videoPoster lazy-background" id="play-button">
                          Play video
                          <span class="playicon"></span>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="middle-section feature-section">
          <div class="item">
            <div class="container">
              <div class="top-section">
                <h6><span class="bg-purple">End Time Log Conflicts</span></h6>
                <h2>No More Timesheet Discrepancy For Agencies</h2>
                <p>Automate time tracking & management to save administrative cost and manual hassle, and there is no room for errors with online timesheets. </p>
              </div>
              <div id="active_Current_Tabs1">
                <div class="flex_row">
                  <div class="column-right">
                    <picture class="page active" id="p1">
                      <source type="image/webp" srcset="../assests/images/agency-01.webp" />
                      <source type="image/png" srcset="../assests/images/agency-01.png" />
                      <img loading="lazy" src="../assests/images/agency-01.png" alt="Agency" width="618" height="482"/>
                    </picture>
                    <picture class="page" id="p2">
                      <source type="image/webp" srcset="../assests/images/agency-02.webp" />
                      <source type="image/png" srcset="../assests/images/agency-02.png" />
                      <img loading="lazy" src="../assests/images/agency-02.png" alt="Agency" width="625" height="546"/>
                    </picture>
                    <picture class="page" id="p3">
                      <source type="image/webp" srcset="../assests/images/agency-03.webp" />
                      <source type="image/png" srcset="../assests/images/agency-03.png" />
                      <img loading="lazy" src="../assests/images/agency-03.png" alt="Agency" width="630" height="512"/>
                    </picture>
                  </div>
                  <div class="column-left">
                    <div class="all-content">
                      <div class="text-column active" id="t1" data-section="active_Current_Tabs1">
                        <h3><i></i>Accurate Timekeeping</h3>
                        <p>Track the hours your team members spend on each task and project to avoid confusion and ensure accuracy. Generate reports to get an overview of employees’ productivity, and make data-driven smart decisions to enhance overall team efficiency.
                        </p>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="../assests/images/agency-01.webp" />
                          <source type="image/png" srcset="../assests/images/agency-01.png" />
                          <img loading="lazy" src="../assests/images/agency-01.png" alt="Agency" width="618" height="482"/>
                        </picture>
                      </div>
                    </div>
                    <div class="all-content">
                      <div class="text-column" id="t2" data-section="active_Current_Tabs1">
                        <h3><i></i>Track Billable Hours</h3>
                        <p>Keep a tab on billable hours to ensure that you are billing clients for the correct number of hours worked. It improves cash flow and keeps your agency profitable.
                        </p>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="../assests/images/agency-02.webp" />
                          <source type="image/png" srcset="../assests/images/agency-02.png" />
                          <img loading="lazy" src="../assests/images/agency-02.png" alt="Agency" width="625" height="546"/>
                        </picture>
                      </div>
                    </div>
                    <div class="all-content">
                      <div class="text-column" id="t3" data-section="active_Current_Tabs1">
                        <h3><i></i>Manage Timesheets From Anywhere</h3>
                        <p>You can easily use Workstatus on iOS/Android mobile devices and Windows/Mac systems to manage your team from anywhere.
                        </p>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="../assests/images/agency-03.webp" />
                          <source type="image/png" srcset="../assests/images/agency-03.png" />
                          <img loading="lazy" src="../assests/images/agency-03.png" alt="Agency" width="630" height="512"/>
                        </picture>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?php if( geoCTAcheck() === true ) : ?>
              <div class="mt40 btnSc">
                <p>With our hassle-free agency time tracking software, you'll <br>never have to worry about time management
                </p>
                <a href="<?php echo $RegLink; ?>" class="primary_btn1"><?php echo $ws_ctas['cta_text']; ?></a>
                <small>Get started now!</small>
              </div>
              <?php endif; ?>
            </div>
          </div>
          <div class="item">
            <div class="container">
              <div class="top-section">
                <h6><span class="bg-purple">Focus on Growth and Productivity</span></h6>
                <h2>One Solution To Optimize Productivity &<br class="linebrk"> Resource Management </h2>
                <p>Workstatus comes with an intuitive and user-friendly interface, making it easy for agency teams to track time and manage their work efficiently to achieve desired results.
                </p>
              </div>
              <div id="active_Current_Tabs2">
                <div class="flex_row">
                  <div class="column-right">
                    <picture class="page active" id="p4">
                      <source type="image/webp" srcset="../assests/images/agency-04.webp" />
                      <source type="image/png" srcset="../assests/images/agency-04.png" />
                      <img loading="lazy" src="../assests/images/agency-04.png" alt="Agency" width="613" height="479" />
                    </picture>
                    <picture class="page" id="p5">
                      <source type="image/webp" srcset="../assests/images/agency-05.webp" />
                      <source type="image/png" srcset="../assests/images/agency-05.png" />
                      <img loading="lazy" src="../assests/images/agency-05.png" alt="Agency" width="641" height="506" />
                    </picture>
                  </div>
                  <div class="column-left">
                    <div class="all-content">
                      <div class="text-column active" id="t4" data-section="active_Current_Tabs2">
                        <h3>Better Resource Management</h3>
                        <p> Allocate resources in a way that allows for the most efficient use of time. It leads to increased productivity as agency members can see where their time is being wasted and make changes accordingly.</p>
                        <ul class="checkList">
                          <li>Avoid shift conflicts</li>
                          <li>Simplified workload management</li>
                        </ul>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="../assests/images/agency-04.webp" />
                          <source type="image/png" srcset="../assests/images/agency-04.png" />
                          <img loading="lazy" src="../assests/images/agency-04.png" alt="Agency" width="613" height="479" />
                        </picture>
                      </div>
                    </div>
                    <div class="all-content">
                      <div class="text-column" id="t5" data-section="active_Current_Tabs2">
                        <h3>Productivity Tracker</h3>
                        <p>Get a built-in productivity calculator to view the productivity levels of your teams. Identify performance issues to avoid missing deadlines and delays in the later stages of your projects.</p>
                        <ul class="checkList">
                          <li>Track productivity patterns</li>
                          <li>Improve client retention rate</li>
                        </ul>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="../assests/images/agency-05.webp" />
                          <source type="image/png" srcset="../assests/images/agency-05.png" />
                          <img loading="lazy" src="../assests/images/agency-05.png" alt="Agency" width="641" height="506" />
                        </picture>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="mt40 btnSc">
                <p>
                  Workstatus™ is a great way to stay organised.<br> Check out this demo to know more
                </p>
                <a href="javascript:void(0)" onclick="call_demows();" rel="nofollow" class="primary_btn1">Book A Demo </a>
                <small>
                Get all your queries answered from our experts<br />
                on a secure online meeting
                </small>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="container">
              <div class="top-section">
                <h6><span class="bg-purple">Monitor Everything in Real-Time</span></h6>
                <h2>Reliable Time Tracking Analytics For Agencies </h2>
                <p>Monitor your team’s performance in real-time to make required adjustments for better ROI. Whether you are an ad agency, a recruitment agency, an IT agency, or a marketing agency, you can easily monitor the results of your tasks more accurately. This data can help you improve future projects and optimize your strategies.
                </p>
              </div>
              <div id="active_Current_Tabs3">
                <div class="flex_row">
                  <div class="column-right">
                    <picture class="page active" id="p6">
                      <source type="image/webp" srcset="../assests/images/agency-06.webp" />
                      <source type="image/png" srcset="../assests/images/agency-06.png" />
                      <img loading="lazy" src="../assests/images/agency-06.png" alt="Agency" width="619" height="490" />
                    </picture>
                    <picture class="page" id="p7">
                      <source type="image/webp" srcset="../assests/images/agency-07.webp" />
                      <source type="image/png" srcset="../assests/images/agency-07.png" />
                      <img loading="lazy" src="../assests/images/agency-07.png" alt="Agency" width="609" height="490" />
                    </picture>
                    <picture class="page" id="p8">
                      <source type="image/webp" srcset="../assests/images/agency-08.webp" />
                      <source type="image/png" srcset="../assests/images/agency-08.png" />
                      <img loading="lazy" src="../assests/images/agency-08.png" alt="Agency" width="637" height="539" />
                    </picture>
                  </div>
                  <div class="column-left">
                    <div class="all-content">
                      <div class="text-column active" id="t6" data-section="active_Current_Tabs3">
                        <h3><i></i>Real-Time Updates</h3>
                        <p>Always get up-to-date and real-time information on how well your teams are performing. Such information can help agencies make changes to their processes & operations in real-time to improve their performance.
                        </p>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="../assests/images/agency-06.webp" />
                          <source type="image/png" srcset="../assests/images/agency-06.png" />
                          <img loading="lazy" src="../assests/images/agency-06.png" alt="Agency" width="619" height="490" />
                        </picture>
                      </div>
                    </div>
                    <div class="all-content">
                      <div class="text-column" id="t7" data-section="active_Current_Tabs3">
                        <h3><i></i>Automated Reports</h3>
                        <p> Download detailed reports and graphs that illustrate how time is being spent to help your agency optimize workflows across departments. Easily identify what works and what needs improvement to make timely and smart decisions, and stay ahead of the competition. 
                        </p>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="../assests/images/agency-07.webp" />
                          <source type="image/png" srcset="../assests/images/agency-07.png" />
                          <img loading="lazy" src="../assests/images/agency-07.png" alt="Agency" width="609" height="490" />
                        </picture>
                      </div>
                    </div>
                    <div class="all-content">
                      <div class="text-column" id="t8" data-section="active_Current_Tabs3">
                        <h3><i></i>Proof Of Work</h3>
                        <p>Workstatus automatically captures screenshots at pre-scheduled or random time intervals. This data can be used as proof of work in case of any disputes.
                        </p>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="../assests/images/agency-08.webp" />
                          <source type="image/png" srcset="../assests/images/agency-08.png" />
                          <img loading="lazy" src="../assests/images/agency-08.png" alt="Agency" width="637" height="539" />
                        </picture>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?php if( geoCTAcheck() === true ) : ?>
              <div class="mt40 btnSc">
                <p>Start Using Workstatus™ Agency Time <br>Tracking Software Right Away!</p>
                <a href="<?php echo $RegLink; ?>" class="primary_btn1"><?php echo $ws_ctas['cta_text']; ?></a>
                <small>It’s Worth</small>
              </div>
              <?php endif; ?>
            </div>
          </div>
          <div class="item">
            <div class="container">
              <div class="top-section">
                <h6><span class="bg-purple">Managing Attendance is Easier Than Ever</span></h6>
                <h2>Powerful Attendance Tracking For Agencies</h2>
                <p>With Workstatus, managers can create shift schedules, keep track of employees’ hours, and see who is working and who is absent. Also, get a mobile app to monitor the attendance of agency workers from anywhere.</p>
              </div>
              <div id="active_Current_Tabs4">
                <div class="flex_row">
                  <div class="column-right">
                    <picture class="page active" id="p9">
                      <source type="image/webp" srcset="../assests/images/agency-09.webp" />
                      <source type="image/png" srcset="../assests/images/agency-09.png" />
                      <img loading="lazy" src="../assests/images/agency-09.png" alt="Agency" width="570" height="461" />
                    </picture>
                    <picture class="page" id="p10">
                      <source type="image/webp" srcset="../assests/images/agency-10.webp" />
                      <source type="image/png" srcset="../assests/images/agency-10.png" />
                      <img loading="lazy" src="../assests/images/agency-10.png" alt="Agency" width="638" height="515" />
                    </picture>
                    <picture class="page" id="p11">
                      <source type="image/webp" srcset="../assests/images/agency-11.webp" />
                      <source type="image/png" srcset="../assests/images/agency-11.png" />
                      <img loading="lazy" src="../assests/images/agency-11.png" alt="Agency" width="570" height="466" />
                    </picture>
                  </div>
                  <div class="column-left">
                    <div class="all-content">
                      <div class="text-column active" id="t9" data-section="active_Current_Tabs4">
                        <h3><i></i>Geofenced Job Sites</h3>
                        <p> Make use of advanced geofencing technology to create a virtual perimeter around a work location. It means monitoring starts and stops as soon as an employee walks into or leaves the geofenced location.</p>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="../assests/images/agency-09.webp" />
                          <source type="image/png" srcset="../assests/images/agency-09.png" />
                          <img loading="lazy" src="../assests/images/agency-09.png" alt="Agency" width="570" height="461" />
                        </picture>
                      </div>
                    </div>
                    <div class="all-content">
                      <div class="text-column" id="t10" data-section="active_Current_Tabs4">
                        <h3><i></i>GPS Tracking</h3>
                        <p> GPS tracking feature provides employers with a timestamp and location info for each activity an employee performs, helping ensure that work is being done productively. Get all the real-time GPS data at your fingertips.
                        </p>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="../assests/images/agency-10.webp" />
                          <source type="image/png" srcset="../assests/images/agency-10.png" />
                          <img loading="lazy" src="../assests/images/agency-10.png" alt="Agency" width="638" height="515" />
                        </picture>
                      </div>
                    </div>
                    <div class="all-content">
                      <div class="text-column" id="t11" data-section="active_Current_Tabs4">
                        <h3><i></i>Set Weekly Limits</h3>
                        <p>With Workstatus, you can easily define weekly limits for each of your employees to avoid any issues of unexpected overtime. It will increase transparency and accountability within your workforce.
                        </p>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="../assests/images/agency-11.webp" />
                          <source type="image/png" srcset="../assests/images/agency-11.png" />
                          <img loading="lazy" src="../assests/images/agency-11.png" alt="Agency" width="570" height="466" />
                        </picture>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?php if( geoCTAcheck() === true ) : ?>
              <div class="mt40 btnSc">
                <p>
                  Workstatus™ is the simplest way to manage<br> and track your agency business
                </p>
                <a href="<?php echo $RegLink; ?>" class="primary_btn1"><?php echo $ws_ctas['cta_text']; ?></a>
                <small>Sign up now!</small>
              </div>
              <?php endif; ?>
            </div>
          </div>
        </section>
        <section class="trackEm">
          <div class="container">
            <div class="top-section">
              <h6><span class="bg-purple">Deliver Unparalleled Services</span></h6>
              <h2>Get More Power and Features To Manage Agency Teams</h2>
            </div>
            <div class="trackRow">
              <div class="trackImg">
                <picture>
                  <source type="image/webp" srcset="../assests/images/agency-demo.webp" />
                  <source type="image/png" srcset="../assests/images/agency-demo.png" />
                  <img loading="lazy" src="../assests/images/agency-demo.png" alt="Designed to Track" width="541" height="661" />
                </picture>
              </div>
              <div class="trackContent">
                <div class="row">
                  <h3><i></i>Employee Scheduling</h3>
                  <p>Easily create and manage employees’ shifts with just a few clicks.</p>
                </div>
                <div class="row">
                  <h3><i></i>Leave Management</h3>
                  <p>Time off requests raised by employees can be instantly approved or rejected from the dashboard.</p>
                </div>
                <div class="row">
                  <h3><i></i>Easy Project Budgeting</h3>
                  <p>Get a healthy bottom line by tracking the budget for each of your clients.</p>
                </div>
                <div class="row">
                  <h3><i></i>Payroll Management</h3>
                  <p>Automate payroll by accurately tracking billable hours for your workers.</p>
                </div>
                <div class="row">
                  <h3><i></i>Online Invoice Management</h3>
                  <p>Simplify invoicing by accurate monitoring of working hours. </p>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="timeline">
          <div class="container">
            <div class="top-section">
              <h6><span class="bg-purple">Effortless Time Tracking</span></h6>
              <h2>A User-Friendly Workforce Management Software For Agency</h2>
            </div>
            <div class="trackRow">
              <div class="trackImg">
                <picture>
                  <source type="image/webp" srcset="../assests/images/getpaid_image.webp" />
                  <source type="image/png" srcset="../assests/images/getpaid_image.png" />
                  <img loading="lazy" src="../assests/images/getpaid_image.png" alt="Tracking Software" width="604" height="602" />
                </picture>
              </div>
              <div class="trackContent">
                <div class="row">
                  <h3>Have Your Employees Install Workstatus™</h3>
                  <p>All employees can download and install the Workstatus app on their desktops/laptops (Windows and Mac) and/or mobile phones (Android/iOS).</p>
                </div>
                <div class="row">
                  <h3>Start Tracking</h3>
                  <p>Click and start the time tracker to monitor your agency workforce while they are working. Sit back and relax as Workstatus silently records your employees’ clock-in and out timings, working hours, location, and a lot more.
                  </p>
                </div>
                <div class="row">
                  <h3>Generate Detailed Reports</h3>
                  <p>Workstatus provides you with insightful reports and data on time and productivity. You can evaluate if your employees are using their work hours productively. 
                  </p>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="wsMobile whitetxt">
          <?php require_once '../common/workstatus-device.php';?>
        </section>
        <?php if( !isMobile() ) : ?>
        <section class="testimonial testmHome">
          <div class="container">
            <div class="top-section">
              <h6><span class="bg-white">Testimonials</span></h6>
              <h2>Why do agencies love Workstatus™?</h2>
            </div>
            <div class="glider-testimonial">
              <div class="glider-contain">
                <div class="glider2">
                  <div>
                    <p class="white">
                      “ Workstatus is an excellent time tracking software for agencies. The intuitive interface makes it easy to input time data, and the reports are very helpful in monitoring billing and project progress. I highly recommend Workstatus to anyone looking for an easy way to track time and bill clients. ”
                    </p>
                    <div class="border">
                      <div class="triangle"></div>
                    </div>
                    <div class="author-box">
                      <picture>
                        <source type="image/webp" srcset="../assests/images/avatar.webp" />
                        <source type="image/png" srcset="../assests/images/avatar.png" />
                        <img loading="lazy" src="../assests/images/avatar.png" alt="Peter" width="54" height="54" />
                      </picture>
                      <div class="author-content">
                        <p class="para_extrasmall white">Rony Edward, London</p>
                      </div>
                    </div>
                  </div>
                  <div>
                    <p class="white">
                      “ Workstatus is a productivity tracking software that has been designed specifically for advertising agencies. It has helped us to track the time spent on each project, and it has provided detailed reports to measure the team's productivity. ”
                    </p>
                    <div class="border"><span class="element-triangle"></span></div>
                    <div class="author-box">
                      <picture>
                        <source type="image/webp" srcset="../assests/images/avatar.webp" />
                        <source type="image/png" srcset="../assests/images/avatar.png" />
                        <img loading="lazy" src="../assests/images/avatar.png" alt="Alex" width="54" height="54" />
                      </picture>
                      <div class="author-content">
                        <p class="para_extrasmall white">Brad Stephen, Singapore</p>
                      </div>
                    </div>
                  </div>
                  <div>
                    <p class="white">
                      “ I have been delighted with Workstatus. It is easy to use, and it has helped me track the time spent on each project more accurately. The reports help identify areas where I can improve my productivity. The customer service is excellent, and the software is very user-friendly. ”
                    </p>
                    <div class="border"><span class="element-triangle"></span></div>
                    <div class="author-box">
                      <picture>
                        <source type="image/webp" srcset="../assests/images/avatar.webp" />
                        <source type="image/png" srcset="../assests/images/avatar.png" />
                        <img loading="lazy" src="../assests/images/avatar.png" alt="Larry" width="54" height="54" />
                      </picture>
                      <div class="author-content">
                        <p class="para_extrasmall white">Henry, Malaysia</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div role="tablist" class="dots2"></div>
              </div>
            </div>
          </div>
        </section>
        <?php endif; ?>
        <section class="faqsRow wfull for-heading-center">
          <div class="container">
            <div class="top-section">
              <h6><span class="bg-purple">Get Answers For</span></h6>
              <h2>FAQs</h2>
            </div>
            <div class="flex_row">
              <div itemscope itemtype="https://schema.org/FAQPage">
                <div class="column">
                  <div class="faq-accordion-item-outer open" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <h3 itemprop="name">Why do agencies need Workstatus?</h3>
                    <div class="faq-accordion-content">
                      <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div itemprop="text">
                          <p>Workstatus is an online agency management system that helps all agencies (advertising agencies, digital agencies, recruitment agencies or marketing agencies) to manage their workflow, invoicing, and client communications. By having a system that can track employee hours and absences, the agency can more accurately plan for staffing needs and ensure that all employees are given the appropriate shifts.</p>
                          <p>Additionally, Workstatus can help with payroll by calculating hours worked and generating reports. Overall, Workstatus is an essential tool for any agency looking to manage its staff effectively.</p>
                          <p>Workstatus is also a secure system that protects client data. All data stored in the system is encrypted, and only authorized users have access to it. With Workstatus, agencies can rest assured that their data is safe and secure.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="faq-accordion-item-outer" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <h3 itemprop="name">How does agency time tracking software work?</h3>
                    <div class="faq-accordion-content">
                      <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div itemprop="text">
                          <p>Agency time tracking software is used to track an employee's time on a project for a client. The software logs the start and end time of the project and what task was being worked on. This information can then be exported to a report which shows how much time was spent on each task and project.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="faq-accordion-item-outer" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <h3 itemprop="name">What direct benefits does my agency get from Workstatus?</h3>
                    <div class="faq-accordion-content">
                      <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div itemprop="text">
                          <p>The following are the direct benefits your agency can get from Workstatus-</p>
                          <ul>
                            <li><strong>Increased efficiency</strong> - Employees can easily see what tasks they need to work on and which ones are already completed, allowing them to start their work quickly.</li>
                            <li><strong>Reduced wasted time and energy</strong> - By knowing who is available at all times, coworkers can avoid spending time waiting for someone else to become available.</li>
                            <li><strong>Easier management of absences</strong> - Managers can easily see who is out sick or on vacation so that they can plan around those absences.</li>
                            <li><strong>Increased team morale</strong> - When employees see that their work is making a difference, it encourages them to continue working hard.</li>
                            <li><strong>Improved client satisfaction</strong> - With a clear view of who is working on what, clients can better understand how long tasks will take and when they can expect to see results. This improved communication leads to happier clients and a better reputation.</li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="faq-accordion-item-outer" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <h3 itemprop="name">Is time tracking software safe for agencies?</h3>
                    <div class="faq-accordion-content">
                      <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div itemprop="text">
                          <p>It depends on the specific software and agency. However, most time tracking software is safe to use provided that the agency takes steps to protect employees' data.</p>
                          <p>For example, a few time tracking software tools allow employees to track their hours and then submit them directly to the agency. In this case, the software would only store employee data on the employee's own device, and it would not be shared with the agency. Other time tracking software stores employee data on a secure server that authorised personnel can only access.</p>
                          <p>In general, agencies should ensure that any time tracking software they use meets industry security standards and that employees' data is protected accordingly.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="faq-accordion-item-outer" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <h3 itemprop="name"> How much does Workstatus agency time tracking software cost?</h3>
                    <div class="faq-accordion-content">
                      <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div itemprop="text">
                          <p>Workstatus agency time tracking software is an affordable and effective way to manage employee time tracking. The cost of Workstatus agency time tracking software depends on the size of your business.</p>
                          <p>The pricing of Workstatus agency time tracking software is given below-</p>
                          <ul>
                            <li>Free Forever Package: $0 forever</li>
                            <li>Starter Package: $4.99 /user/month</li>
                            <li>Scale Package: $9.99 /user/month</li>
                            <li>Enterprise Package: $18 /user/month</li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="useful-resources-blog-section bglight for-heading-center">
          <div class="container">
            <div class="top-section">
              <h6><span class="bg-purple">Blog</span></h6>
              <h2>Useful Resources</h2>
            </div>
            <div class="for-link-blue flex_row justify-center">
              <div class="blog-box column-three">
                <a href="https://www.workstatus.io/blog/how-to-adopt-a-flexitime-arrangement-for-your-company/" class="blog-link">
                  <div class="thumb">
                    <picture>
                      <source type="image/webp" srcset="../assests/images/useful-resources-blog-1.jpg" />
                      <source type="image/png" srcset="../assests/images/useful-resources-blog-1.jpg" />
                      <img loading="lazy" src="../assests/images/useful-resources-blog-1.jpg" alt="Workstatus Time" width="400" height="242" />
                    </picture>
                  </div>
                  <div class="blog-title">
                    <h3>How To Adopt A Flexitime Arrangement For Your Company</h3>
                    <span class="small_anchor">Read more</span>
                  </div>
                </a>
              </div>
              <div class="blog-box column-three">
                <a href="https://www.workstatus.io/blog/how-to-prioritize-work-with-a-scheduling-software/" class="blog-link">
                  <div class="thumb">
                    <picture>
                      <source type="image/webp" srcset="../assests/images/useful-resources-blog-2.jpg" />
                      <source type="image/png" srcset="../assests/images/useful-resources-blog-2.jpg" />
                      <img loading="lazy" src="../assests/images/useful-resources-blog-2.jpg" alt="Workstatus Time" width="400" height="242" />
                    </picture>
                  </div>
                  <div class="blog-title">
                    <h3>How to Prioritize Work with a Scheduling Software?</h3>
                    <span class="small_anchor">Read more</span>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </section>
        <?php require_once '../common/workstatus-journey.php';?>
      </main>
      <?php require_once '../common/footer.php';?>
      <script src="../assests/js/intlTelInput.js"></script>
    </div>
    <?php if( !isMobile() ) : ?>
    <script src="../assests/js/glider.min.js"></script>
    <?php endif; ?>
    <script src="../assests/js/script.js"></script>
    <script src="../assests/js/footer-validation.js"></script>
  </body>
</html>
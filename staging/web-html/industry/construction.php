<?php require_once '../common/inc/config.inc.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="alternate" href="<?php echo SITE_URL; ?>/industry/construction" hreflang="en-us" />
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
              <h1>Manage Your Construction Workforce &<br class="linebrk"> Workflow From One Dashboard</h1>
              <p>Assign projects to the workforce, track the time spent on construction sites, monitor real-time whereabouts,<br class="linebrk"> view weekly reports, and manage your payroll through a single platform.
              </p>
              <!-- <ul class="list">
                <li>Geofence the construction sites for automated attendance management </li>
                <li>Automated invoicing process</li>
                <li>Time and Project management</li>
                <li>AI intuitive reports</li>
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
                    <div class="topVideo srp-23">
                      <div id="myDIV" class="contbox2">
                        <div class="videoWrapper">
                          <iframe id="video" class="videoIframe" allowfullscreen
                            data-src="https://www.youtube.com/embed/YXwdA618wpE?enablejsapi=1&html5=1&mute=1">
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
                <h6><span class="bg-purple">Workforce-Workflow Management made easy</span></h6>
                <h2>Efficiently Manage Schedules & Billable Hours</h2>
                <p>Assign shifts & tasks, track progress, track the time spent on different construction sites, and calculate billable hours with just a few clicks. </p>
              </div>
              <div id="active_Current_Tabs1">
                <div class="flex_row">
                  <div class="column-right">
                    <picture class="page active" id="p1">
                      <source type="image/webp" srcset="../assests/images/construction-01.webp"/>
                      <source type="image/png" srcset="../assests/images/construction-01.png"/>
                      <img loading="lazy" src="../assests/images/construction-01.png" alt="Construction" width="618" height="479"/>
                    </picture>
                    <picture class="page" id="p2">
                      <source type="image/webp" srcset="../assests/images/construction-02.webp" />
                      <source type="image/png" srcset="../assests/images/construction-02.png" />
                      <img loading="lazy" src="../assests/images/construction-02.png" alt="Construction" width="625" height="546" />
                    </picture>
                  </div>
                  <div class="column-left">
                    <div class="all-content">
                      <div class="text-column active" id="t1" data-section="active_Current_Tabs1">
                        <h3><i></i>Set Schedules</h3>
                        <p>Create a weekly or monthly schedule, automate shift rotation, assign tasks to team members, send reminders about the deadlines, and update the task list anytime you want, making managing your team easier than ever before. 
                        </p>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="../assests/images/construction-01.webp"/>
                          <source type="image/png" srcset="../assests/images/construction-01.png"/>
                          <img loading="lazy" src="../assests/images/construction-01.png" alt="Construction" width="618" height="479"/>
                        </picture>
                      </div>
                    </div>
                    <div class="all-content">
                      <div class="text-column" id="t2" data-section="active_Current_Tabs1">
                        <h3><i></i>Track Billable Hours</h3>
                        <p>No more manual billing errors. Our app automatically tracks your employees' billable hours and accurately calculates their paychecks in no time.
                        </p>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="../assests/images/construction-02.webp" />
                          <source type="image/png" srcset="../assests/images/construction-02.png" />
                          <img loading="lazy" src="../assests/images/construction-02.png" alt="Construction" width="625" height="546" />
                        </picture>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="mt40 btnSc">
                <p>Start Keeping Track Of  Construction Teams Today 
                </p>
                <a href="javascript:void(0)" onclick="call_demows();" rel="nofollow" class="primary_btn1">Book A Demo </a>
                <small>
                Check Out This Demo To Know More
                </small>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="container">
              <div class="top-section">
                <h6><span class="bg-purple">Get real-time updates</span></h6>
                <h2>Monitor Workers’ Whereabout Using GPS & Geofencing Technology</h2>
                <p>WIth GPS tracking, know live locations, real-time activity, and work progress on specific job-site without hassle. Geofence the sites to automatically mark attendance as workers enter-exit assigned locations. Know exactly what is going on without having to be there all the time.
                </p>
              </div>
              <div id="active_Current_Tabs2">
                <div class="flex_row">
                  <div class="column-right">
                    <picture class="page active" id="p3">
                      <source type="image/webp" srcset="../assests/images/construction-03.webp" />
                      <source type="image/png" srcset="../assests/images/construction-03.png" />
                      <img loading="lazy" src="../assests/images/construction-03.png" alt="Construction" width="638" height="533" />
                    </picture>
                    <picture class="page" id="p4">
                      <source type="image/webp" srcset="../assests/images/construction-04.webp" />
                      <source type="image/png" srcset="../assests/images/construction-04.png" />
                      <img loading="lazy" src="../assests/images/construction-04.png" alt="Construction" width="610" height="451" />
                    </picture>
                  </div>
                  <div class="column-left">
                    <div class="all-content">
                      <div class="text-column active" id="t3" data-section="active_Current_Tabs2">
                        <h3><i></i>Monitor Real-Time Location</h3>
                        <p>Keep an eye on every worker's location as they work at the site. Know when they start working, how long they work, and how frequently they move from one location to another with a GPS tracking feature integrated with our app. </p>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="../assests/images/construction-03.webp" />
                          <source type="image/png" srcset="../assests/images/construction-03.png" />
                          <img loading="lazy" src="../assests/images/construction-03.png" alt="Construction" width="638" height="533" />
                        </picture>
                      </div>
                    </div>
                    <div class="all-content">
                      <div class="text-column" id="t4" data-section="active_Current_Tabs2">
                        <h3><i></i>Set Geofence Around The Site</h3>
                        <p>Maintain complete transparency over all workers' movement by setting geofences around the site. Receive real-time alerts the moment someone enters or leaves the area and have accurate data about the amount of time each worker spends at the site. </p>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="../assests/images/construction-04.webp" />
                          <source type="image/png" srcset="../assests/images/construction-04.png" />
                          <img loading="lazy" src="../assests/images/construction-04.png" alt="Construction" width="610" height="451" />
                        </picture>
                        </picture>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="mt40 btnSc">
                <p>
                  Adopt Modern Monitoring Solutions To Improve<br> Your Employee Productivity
                </p>
                <a href="javascript:void(0)" onclick="call_demows();" rel="nofollow" class="primary_btn1">Book A Demo </a>
                <small>
                Get A Free Demo Now
                </small>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="container">
              <div class="top-section">
                <h6><span class="bg-purple">Stay alert, informed, and updated with automation</span></h6>
                <h2>Stay Up-To-Date With Automated Timesheets & Insightful reports</h2>
                <p>Let us keep you up-to-date with weekly reports, timesheets, and detailed analytics reports about your workers’ productivity and help you manage your workforce with complete accuracy and better understanding. 
                </p>
              </div>
              <div id="active_Current_Tabs3">
                <div class="flex_row">
                  <div class="column-right">
                    <picture class="page active" id="p5">
                      <source type="image/webp" srcset="../assests/images/construction-05.webp" />
                      <source type="image/png" srcset="../assests/images/construction-05.png" />
                      <img loading="lazy" src="../assests/images/construction-05.png" alt="Construction" width="610" height="451" />
                    </picture>
                    <picture class="page" id="p6">
                      <source type="image/webp" srcset="../assests/images/construction-06.webp" />
                      <source type="image/png" srcset="../assests/images/construction-06.png" />
                      <img loading="lazy" src="../assests/images/construction-06.png" alt="Construction" width="633" height="462" />
                    </picture>
                  </div>
                  <div class="column-left">
                    <div class="all-content">
                      <div class="text-column active" id="t5" data-section="active_Current_Tabs3">
                        <h3><i></i> Accurate Timesheets</h3>
                        <p>An automatic timesheet entry system eliminates manual mistakes. Our time tracking automatically records the arrival and departure of your employees, records the time spent on different tasks, and calculates their wages based on the pre-defined rates. 
                        </p>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="../assests/images/construction-05.webp" />
                          <source type="image/png" srcset="../assests/images/construction-05.png" />
                          <img loading="lazy" src="../assests/images/construction-05.png" alt="Construction" width="610" height="451" />
                        </picture>
                      </div>
                    </div>
                    <div class="all-content">
                      <div class="text-column" id="t6" data-section="active_Current_Tabs3">
                        <h3><i></i>Regular Reports</h3>
                        <p>Receive clear insights into your company's performance with regular reports generated by AI algorithms that are available 24/7 and stay up-to-date with actionable insights that help you make an informed decision for the betterment of your company. 
                        </p>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="../assests/images/construction-06.webp" />
                          <source type="image/png" srcset="../assests/images/construction-06.png" />
                          <img loading="lazy" src="../assests/images/construction-06.png" alt="Construction" width="633" height="462" />
                        </picture>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?php if( geoCTAcheck() === true ) : ?>
              <div class="mt40 btnSc">
                <p>Try It Out! It's Worth It!</p>
                <a href="<?php echo $RegLink; ?>" class="primary_btn1"><?php echo $ws_ctas['cta_text']; ?></a>
                <small>No credit card required</small>
              </div>
              <?php endif; ?>
            </div>
          </div>
          <div class="item">
            <div class="container">
              <div class="top-section">
                <h6><span class="bg-purple">Quick invoicing and streamlined payroll processing </span></h6>
                <h2>Just sit back while we do all the calculations and financial analysis for you</h2>
                <p>You won't need to worry about the tedious admin part because we will handle it for you. With our automated payroll processing, you can save the hassle of data entry or calculations and help you focus on growing your business for increased profit and serving your customers with utmost efficiency. </p>
              </div>
              <div id="active_Current_Tabs4">
                <div class="flex_row">
                  <div class="column-right">
                    <picture class="page active" id="p7">
                      <source type="image/webp" srcset="../assests/images/construction-07.webp" />
                      <source type="image/png" srcset="../assests/images/construction-07.png" />
                      <img loading="lazy" src="../assests/images/construction-07.png" alt="Construction" width="463" height="453" />
                    </picture>
                    <picture class="page" id="p8">
                      <source type="image/webp" srcset="../assests/images/construction-08.webp" />
                      <source type="image/png" srcset="../assests/images/construction-08.png" />
                      <img loading="lazy" src="../assests/images/construction-08.png" alt="Construction" width="463" height="453" />
                    </picture>
                  </div>
                  <div class="column-left">
                    <div class="all-content">
                      <div class="text-column active" id="t7" data-section="active_Current_Tabs4">
                        <h3><i></i>Automated Payroll Processing</h3>
                        <p>Calculate taxes, analyze earnings, calculate net wages, generate pay stubs, and run reports with ease. All you need to do is enter your employees' information, and we will handle the rest. </p>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="../assests/images/construction-07.webp" />
                          <source type="image/png" srcset="../assests/images/construction-07.png" />
                          <img loading="lazy" src="../assests/images/construction-07.png" alt="Construction" width="463" height="453" />
                        </picture>
                      </div>
                    </div>
                    <div class="all-content">
                      <div class="text-column" id="t8" data-section="active_Current_Tabs4">
                        <h3><i></i>Automatic Invoice</h3>
                        <p>As soon as you finish the project, our software will automatically generate an invoice and send it to your clients. We also notify your client of pending invoices and send reminder messages with payment due dates, ensuring you don't miss out on any payments.
                        </p>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="../assests/images/construction-08.webp" />
                          <source type="image/png" srcset="../assests/images/construction-08.png" />
                          <img loading="lazy" src="../assests/images/construction-08.png" alt="Construction" width="463" height="453" />
                        </picture>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?php if( geoCTAcheck() === true ) : ?>
              <div class="mt40 btnSc">
                <p>Want To Know More!</p>
                <a href="<?php echo $RegLink; ?>" class="primary_btn1"><?php echo $ws_ctas['cta_text']; ?></a>
                <small>Sign Up For A Free Demo</small>
              </div>
              <?php endif; ?>
            </div>
          </div>
        </section>
        <section class="trackEm">
          <div class="container">
            <div class="top-section">
              <h6><span class="bg-purple">A one-stop platform that has everything</span></h6>
              <h2>Boost your teams' productivity with features that are quick and intuitive</h2>
            </div>
            <div class="trackRow">
              <div class="trackImg">
                <picture>
                  <source type="image/webp" srcset="../assests/images/construction-demo.webp" />
                  <source type="image/png" srcset="../assests/images/construction-demo.png" />
                  <img loading="lazy" src="../assests/images/construction-demo.png" alt="Construction Sites" width="541" height="661" />
                </picture>
              </div>
              <div class="trackContent">
                <div class="row">
                  <h3><i></i>Geofencing Sites</h3>
                  <p>Easily clock-in & clock-out workers by geofencing their allocated sites.</p>
                </div>
                <div class="row">
                  <h3><i></i>Productivity Measurement</h3>
                  <p>Get real-time updates on how productively your employees are working.</p>
                </div>
                <div class="row">
                  <h3><i></i>GPS Tracking</h3>
                  <p>Track the location of your employees with a GPS tracker in real-time and ensure that they are on-site.
                    e
                  </p>
                </div>
                <div class="row">
                  <h3><i></i>Payroll Processing </h3>
                  <p>Simple payroll processing for hourly and salaried employees.</p>
                </div>
                <div class="row">
                  <h3><i></i>Timesheet Management</h3>
                  <p>Manage your team's timesheet with ease from anywhere and anytime</p>
                </div>
                <div class="row">
                  <h3><i></i>Seamless Invoicing</h3>
                  <p>Generate and send Invoices within seconds and with just one click</p>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="timeline">
          <div class="container">
            <div class="top-section">
              <h6><span class="bg-purple">Construction tasks and team management made easy</span></h6>
              <h2>A User-Friendly Workforce Management Software For Construction</h2>
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
                  <h3>Have Your Workers & Engineers Install Workstatus™</h3>
                  <p>All members can download and install the app on their mobile phones (Android/iOS) and/or on their systems (Windows/Mac).</p>
                </div>
                <div class="row">
                  <h3>Start Tracking</h3>
                  <p>Click and start the time tracker to monitor your team while they are busy working on construction sites. Sit back and relax as Workstatus will record their clock-in and out timings, working hours, location, and much more.
                  </p>
                </div>
                <div class="row">
                  <h3>Generate Detailed Reports</h3>
                  <p>The app provides in-depth information that helps you assess if your construction team is spending their working hours productively or not. You can also use this information to better manage your workforce and workflow.
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
              <h2>Here's why! We are considered one of the best workforce management software for our clients</h2>
            </div>
            <div class="glider-testimonial">
              <div class="glider-contain">
                <div class="glider2">
                  <div>
                    <p class="white">
                      “ What I love about the app is that my team's tasks, time, and billing are all in one place, which saves me time and money. Now, all the data is instantly accessible, so I can understand the whole picture of our construction process. The software has made my life much easier and helped us grow our business.
                      ”
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
                        <p class="para_extrasmall white">Anna Blanc</p>
                      </div>
                    </div>
                  </div>
                  <div>
                    <p class="white">
                      “  I have tried several time tracking solutions, but none are user-friendly, like this app.. Our admins like how simple it is to use. We tried using other software, but they were too complex to operate. This software has enabled us to focus on our business while ensuring we're always up-to-date regarding our work progress and finances.
                      ”
                    </p>
                    <div class="border"><span class="element-triangle"></span></div>
                    <div class="author-box">
                      <picture>
                        <source type="image/webp" srcset="../assests/images/avatar.webp" />
                        <source type="image/png" srcset="../assests/images/avatar.png" />
                        <img loading="lazy" src="../assests/images/avatar.png" alt="Alex" width="54" height="54" />
                      </picture>
                      <div class="author-content">
                        <p class="para_extrasmall white">Rick Johnson</p>
                      </div>
                    </div>
                  </div>
                  <div>
                    <p class="white">
                      “ The software has helped my construction business grow through the user-friendly and intuitive interface. Its AI-powered dashboard allows me to schedule workers, assign tasks, track attendance, and monitor locations and everything at once, helping me to get the most out of my team's time.
                      ”
                    </p>
                    <div class="border"><span class="element-triangle"></span></div>
                    <div class="author-box">
                      <picture>
                        <source type="image/webp" srcset="../assests/images/avatar.webp" />
                        <source type="image/png" srcset="../assests/images/avatar.png" />
                        <img loading="lazy" src="../assests/images/avatar.png" alt="Larry" width="54" height="54" />
                      </picture>
                      <div class="author-content">
                        <p class="para_extrasmall white">Mat Martin</p>
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
                    <h3 itemprop="name">How Do Construction Workers Clock In And Out?</h3>
                    <div class="faq-accordion-content">
                      <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div itemprop="text">
                          <p>It is essential to keep track of employee hours in real-time and allow workers to check-in and out at their convenience. That's why most construction projects use Workstatus that tracks when employees arrive and leave.</p>
                          <p>Workstatus offers several ways to clock in and out from wherever you are. From your smartphone, tablet, computer, or even a virtual assistant, you can easily clock in and out.</p>
                          <p>No matter where you are, Workstatus can send time data directly into payroll for accurate real-time timekeeping on construction sites and help improve productivity by saving companies time and money.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="faq-accordion-item-outer" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <h3 itemprop="name">How Do You Keep Track Of Construction Employee’s Hours?</h3>
                    <div class="faq-accordion-content">
                      <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div itemprop="text">
                          <p>Construction sites have unique challenges when it comes to timekeeping. To combat these, construction managers should look for real-time employee tracking software like workstatus.</p>
                          <p>With web-based technology and a smartphone app, managers can track employee status in real-time no matter where they are in relation to site resources. </p>
                          <p>This is particularly useful in areas where cellular service is low or nonexistent. Managers will be able to see an employee's location on a map and view their hours worked and scheduled shifts for that day, which will allow them to easily identify how many hours each employee has worked and how many they are still slated to work. </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="faq-accordion-item-outer" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <h3 itemprop="name">What Is The Best Time Clock App For Construction Sites?</h3>
                    <div class="faq-accordion-content">
                      <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div itemprop="text">
                          <p>Workstatus is the best app for managing your employees in real-time on construction sites. With Workstatus, you can manage your employee's breaks, accept or deny clocking in or out, view GPS tracking and much more right from your phone.</p>
                          <p>You can even see everyone's activity by location and allow managers to assign tasks to workers to oversee their projects and keep their jobs running smoothly.</p>
                          <p>Also, you can always receive a real-time update on how your workers are doing with notifications which will help you to take action before any problems arise. </p>
                          <p>All in all, Workstatus is one of those tools that everyone should have because they make it easy for employees to clock in and out and allow managers to be more productive by getting better insight into their team's activities and workflow. </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="faq-accordion-item-outer" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <h3 itemprop="name">What Features Of Construction Time Tracking App Are Useful?</h3>
                    <div class="faq-accordion-content">
                      <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div itemprop="text">
                          <p>Two features useful in construction time tracking apps are Time Tracking and Automatic Clocking. These two features allow employees to track their employee's productivity in real-time.</p>
                          <p>By using Workstatus, you don't only just get these two features but also things like dashboard reports, client dashboard & task/project level permissions etc.</p>
                          <p>The timesheet also auto-generates payroll documents like leave registers and payslips so that companies don't have to bother about unnecessary issues like data-entry work. </p>
                          <p>This allows managers to efficiently manage everything from smooth running of all tasks to real-time reporting on the company's projects for a comprehensive insight into the progress made throughout projects.
                          </p>
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
                <a href="https://www.workstatus.io/blog/8-tips-to-combat-employee-absenteeism-in-your-workforce/" class="blog-link">
                  <div class="thumb">
                    <picture>
                      <source type="image/webp" srcset="../assests/images/useful-resources-blog-1.jpg" />
                      <source type="image/png" srcset="../assests/images/useful-resources-blog-1.jpg" />
                      <img loading="lazy" src="../assests/images/useful-resources-blog-1.jpg" alt="Workstatus Time" width="400" height="242" />
                    </picture>
                  </div>
                  <div class="blog-title">
                    <h3>8 Tips To Combat Employee Absenteeism In Your Workforce</h3>
                    <span class="small_anchor">Read more</span>
                  </div>
                </a>
              </div>
              <div class="blog-box column-three">
                <a href="https://www.workstatus.io/blog/predictions-for-the-future-of-work-and-security/" class="blog-link">
                  <div class="thumb">
                    <picture>
                      <source type="image/webp" srcset="../assests/images/useful-resources-blog-2.jpg" />
                      <source type="image/png" srcset="../assests/images/useful-resources-blog-2.jpg" />
                      <img loading="lazy" src="../assests/images/useful-resources-blog-2.jpg" alt="Workstatus Time" width="400" height="242" />
                    </picture>
                  </div>
                  <div class="blog-title">
                    <h3>Predictions For The Future Of Work & Security</h3>
                    <span class="small_anchor">Read more</span>
                  </div>
                </a>
              </div>
              <div class="blog-box column-three">
                <a href="https://www.workstatus.io/blog/the-pros-and-cons-of-voice-assistants-in-the-workplace/" class="blog-link">
                  <div class="thumb">
                    <picture>
                      <source type="image/webp" srcset="../assests/images/useful-resources-blog-2.jpg" />
                      <source type="image/png" srcset="../assests/images/useful-resources-blog-2.jpg" />
                      <img loading="lazy" src="../assests/images/useful-resources-blog-2.jpg" alt="Workstatus Time" width="400" height="242" />
                    </picture>
                  </div>
                  <div class="blog-title">
                    <h3>Pros & Cons Of Voice Assistants In Workplace</h3>
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
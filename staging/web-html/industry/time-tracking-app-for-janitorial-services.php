<?php require_once '../common/inc/config.inc.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="alternate" href="<?php echo SITE_URL; ?>/industry/time-tracking-app-for-janitorial-services" hreflang="en-us" />
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
              <h1>Powerful Dashboard To Manage Your<br class="linebrk"> Janitorial Operations</h1>
              <p>Streamline workforce planning, monitor crew attendance, and improve janitorial service<br class="linebrk"> standards with Workstatus™- An all-in-one tracking and management software.
              </p>
              <!-- <ul class="list">
                <li>Swift, Efficient Scheduling</li>
                <li>Online time-off and Leave Management</li>
                <li>Real-Time Report Generation</li>
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
                    <div class="topVideo srp-33">
                      <div id="myDIV" class="contbox2">
                        <div class="videoWrapper">
                          <iframe id="video" class="videoIframe" allowfullscreen
                            data-src="https://www.youtube.com/embed/4lBdoj02YYA?enablejsapi=1&html5=1&mute=1">
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
                <h6><span class="bg-purple">Effortless Crew Scheduling</span></h6>
                <h2>Always Have the Right People, in the Right Place,<br class="linebrk"> at the Right time</h2>
                <p>Simplify crew scheduling by creating effective shift schedules in minutes</p>
              </div>
              <div id="active_Current_Tabs1">
                <div class="flex_row">
                  <div class="column-right">
                    <picture class="page active" id="p1">
                      <source type="image/webp" srcset="../assests/images/janitorial-01.webp" />
                      <source type="image/png" srcset="../assests/images/janitorial-01.png" />
                      <img loading="lazy" src="../assests/images/janitorial-01.png" alt="Janitorial" width="638" height="480"/>
                    </picture>
                    <picture class="page" id="p2">
                      <source type="image/webp" srcset="../assests/images/janitorial-02.webp" />
                      <source type="image/png" srcset="../assests/images/janitorial-02.png" />
                      <img loading="lazy" src="../assests/images/janitorial-02.png" alt="Janitorial" width="638" height="456"/>
                    </picture>
                    <picture class="page" id="p3">
                      <source type="image/webp" srcset="../assests/images/janitorial-03.webp" />
                      <source type="image/png" srcset="../assests/images/janitorial-03.png" />
                      <img loading="lazy" src="../assests/images/janitorial-03.png" alt="Janitorial" width="613" height="482"/>
                    </picture>
                  </div>
                  <div class="column-left">
                    <div class="all-content">
                      <div class="text-column active" id="t1" data-section="active_Current_Tabs1">
                        <h3><i></i>Crew Availability</h3>
                        <p> Get complete visibility into which crew member is available and when. This means no surprises or communication gaps -Workstatus takes care of everything.
                        </p>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="../assests/images/janitorial-01.webp" />
                          <source type="image/png" srcset="../assests/images/janitorial-01.png" />
                          <img loading="lazy" src="../assests/images/janitorial-01.png" alt="Janitorial" width="638" height="480"/>
                        </picture>
                      </div>
                    </div>
                    <div class="all-content">
                      <div class="text-column" id="t2" data-section="active_Current_Tabs1">
                        <h3><i></i>Time-off Management</h3>
                        <p>Crew members can request time off through the app. All approved time-offs are instantly reflected on the dashboard, so there are no last-minute scheduling headaches.
                        </p>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="../assests/images/janitorial-02.webp" />
                          <source type="image/png" srcset="../assests/images/janitorial-02.png" />
                          <img loading="lazy" src="../assests/images/janitorial-02.png" alt="Janitorial" width="638" height="456"/>
                        </picture>
                      </div>
                    </div>
                    <div class="all-content">
                      <div class="text-column" id="t3" data-section="active_Current_Tabs1">
                        <h3><i></i>Instant Notifications</h3>
                        <p>Workstatus lets you send shift reminders and details to your crew members through SMS, push notifications, or emails. This ensures they do not miss out on any shifts.
                        </p>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="../assests/images/janitorial-03.webp" />
                          <source type="image/png" srcset="../assests/images/janitorial-03.png" />
                          <img loading="lazy" src="../assests/images/janitorial-03.png" alt="Janitorial" width="613" height="482"/>
                        </picture>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?php if( geoCTAcheck() === true ) : ?>
              <div class="mt40 btnSc">
                <p>With our hassle-free scheduling software, you'll<br> never have to worry about your workforce<br> time management
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
                <h6><span class="bg-purple">Better Employee Retention</span></h6>
                <h2>Your Staff’s Happiness Is Key To Successful Business</h2>
                <p>Don’t let your cleaners’ hard work go in vain. Track and promote your deserving cleaners to keep them motivated and inspired
                </p>
              </div>
              <div id="active_Current_Tabs2">
                <div class="flex_row">
                  <div class="column-right">
                    <picture class="page active" id="p4">
                      <source type="image/webp" srcset="../assests/images/janitorial-04.webp" />
                      <source type="image/png" srcset="../assests/images/janitorial-04.png" />
                      <img loading="lazy" src="../assests/images/janitorial-04.png" alt="Janitorial" width="463" height="453"/>
                    </picture>
                    <picture class="page" id="p5">
                      <source type="image/webp" srcset="../assests/images/janitorial-05.webp" />
                      <source type="image/png" srcset="../assests/images/janitorial-05.png" />
                      <img loading="lazy" src="../assests/images/janitorial-05.png" alt="Janitorial" width="463" height="453"/>
                    </picture>
                    <picture class="page" id="p6">
                      <source type="image/webp" srcset="../assests/images/janitorial-06.webp" />
                      <source type="image/png" srcset="../assests/images/janitorial-06.png" />
                      <img loading="lazy" src="../assests/images/janitorial-06.png" alt="Janitorial" width="463" height="453"/>
                    </picture>
                  </div>
                  <div class="column-left">
                    <div class="all-content">
                      <div class="text-column active" id="t4" data-section="active_Current_Tabs2">
                        <h3><i></i>Track Time per Location</h3>
                        <p>Easy for your janitorial members to clock in and out via geo-location to confirm their presence at the location. They will always have proof of work for the activities done. </p>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="../assests/images/janitorial-04.webp" />
                          <source type="image/png" srcset="../assests/images/janitorial-04.png" />
                          <img loading="lazy" src="../assests/images/janitorial-04.png" alt="Janitorial" width="463" height="453"/>
                        </picture>
                      </div>
                    </div>
                    <div class="all-content">
                      <div class="text-column" id="t5" data-section="active_Current_Tabs2">
                        <h3><i></i>Reward the Best Cleaner</h3>
                        <p>Monitor your crew's cleaning activities and use the timesheet reports to offer rewards, bonuses, and appraisals for the job well done.</p>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="../assests/images/janitorial-05.webp" />
                          <source type="image/png" srcset="../assests/images/janitorial-05.png" />
                          <img loading="lazy" src="../assests/images/janitorial-05.png" alt="Janitorial" width="463" height="453"/>
                        </picture>
                      </div>
                    </div>
                    <div class="all-content">
                      <div class="text-column" id="t6" data-section="active_Current_Tabs2">
                        <h3><i></i>Promote Teamwork</h3>
                        <p>Always stay connected with your janitorial crew and make them feel like they are a part of your team and organization.</p>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="../assests/images/janitorial-06.webp" />
                          <source type="image/png" srcset="../assests/images/janitorial-06.png" />
                          <img loading="lazy" src="../assests/images/janitorial-06.png" alt="Janitorial" width="463" height="453"/>
                        </picture>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="mt40 btnSc">
                <p>
                  Workstatus™ is a great way to stay organised
                </p>
                <a href="javascript:void(0)" onclick="call_demows();" rel="nofollow" class="primary_btn1">Book A Demo </a>
                <small>
                Check out this demo to know more
                </small>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="container">
              <div class="top-section">
                <h6><span class="bg-purple">Attendance Management</span></h6>
                <h2>Are You Looking for a Way to Optimize Routes For Your Cleaning Staff?</h2>
                <p>Define the radius for job locations. Assign weekly limits related to work hours and tasks to be completed.
                </p>
              </div>
              <div id="active_Current_Tabs3">
                <div class="flex_row">
                  <div class="column-right">
                    <picture class="page active" id="p7">
                      <source type="image/webp" srcset="../assests/images/janitorial-07.webp" />
                      <source type="image/png" srcset="../assests/images/janitorial-07.png" />
                      <img loading="lazy" src="../assests/images/janitorial-07.png" alt="Janitorial" width="570" height="461"/>
                    </picture>
                    <picture class="page" id="p8">
                      <source type="image/webp" srcset="../assests/images/janitorial-08.webp" />
                      <source type="image/png" srcset="../assests/images/janitorial-08.png" />
                      <img loading="lazy" src="../assests/images/janitorial-08.png" alt="Janitorial" width="570" height="466"/>
                    </picture>
                  </div>
                  <div class="column-left">
                    <div class="all-content">
                      <div class="text-column active" id="t7" data-section="active_Current_Tabs3">
                        <h3><i></i>Geofenced Job Sites</h3>
                        <p>Workstatus has advanced geofencing capabilities that let you set up a virtual perimeter around a job site. This means tracking starts/stops the moment a janitorial staff member enters/leaves the client site.
                        </p>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="../assests/images/janitorial-07.webp" />
                          <source type="image/png" srcset="../assests/images/janitorial-07.png" />
                          <img loading="lazy" src="../assests/images/janitorial-07.png" alt="Janitorial" width="570" height="461"/>
                        </picture>
                      </div>
                    </div>
                    <div class="all-content">
                      <div class="text-column" id="t8" data-section="active_Current_Tabs3">
                        <h3><i></i>Weekly Limits</h3>
                        <p>You can quickly set up weekly limits for each of your crew members. This way, you can avoid issues of unexpected overtime.
                        </p>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="../assests/images/janitorial-08.webp" />
                          <source type="image/png" srcset="../assests/images/janitorial-08.png" />
                          <img loading="lazy" src="../assests/images/janitorial-08.png" alt="Janitorial" width="570" height="466"/>
                        </picture>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?php if( geoCTAcheck() === true ) : ?>
              <div class="mt40 btnSc">
                <p>Start Using Workstatus™ Janitorial Management <br>Software Right Away!</p>
                <a href="<?php echo $RegLink; ?>" class="primary_btn1"><?php echo $ws_ctas['cta_text']; ?></a>
                <small>It’s Worth</small>
              </div>
              <?php endif; ?>
            </div>
          </div>
          <div class="item">
            <div class="container">
              <div class="top-section">
                <h6><span class="bg-purple"> Automate Payroll & Invoicing</span></h6>
                <h2>Accurate And Powerful Cost Tracking Of<br class="linebrk"> Janitorial Services</h2>
                <p>Keeping track of where your money is going and from where what revenue is to be claimed can be difficult when running a cleaning business. Automate payroll and invoicing to streamline your finances.</p>
              </div>
              <div id="active_Current_Tabs4">
                <div class="flex_row">
                  <div class="column-right">
                    <picture class="page active" id="p9">
                      <source type="image/webp" srcset="../assests/images/janitorial-09.webp" />
                      <source type="image/png" srcset="../assests/images/janitorial-09.png" />
                      <img loading="lazy" src="../assests/images/janitorial-09.png" alt="Janitorial" width="463" height="453"/>
                    </picture>
                    <picture class="page" id="p10">
                      <source type="image/webp" srcset="../assests/images/janitorial-10.webp" />
                      <source type="image/png" srcset="../assests/images/janitorial-10.png" />
                      <img loading="lazy" src="../assests/images/janitorial-10.png" alt="Janitorial" width="463" height="453"/>
                    </picture>
                  </div>
                  <div class="column-left">
                    <div class="all-content">
                      <div class="text-column active" id="t9" data-section="active_Current_Tabs4">
                        <h3><i></i>Automated Payroll</h3>
                        <p>Online timesheets capture the actual worked hours of your crew members that can be synced with payroll. This ensures accuracy in payroll calculation as everyone is paid based on how much they actually worked.</p>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="../assests/images/janitorial-09.webp" />
                          <source type="image/png" srcset="../assests/images/janitorial-09.png" />
                          <img loading="lazy" src="../assests/images/janitorial-09.png" alt="Janitorial" width="463" height="453"/>
                        </picture>
                      </div>
                    </div>
                    <div class="all-content">
                      <div class="text-column" id="t10" data-section="active_Current_Tabs4">
                        <h3><i></i>Easy Invoicing</h3>
                        <p>Stop spending countless hours preparing your clients’ invoices. Just check the actual worked hours of your crew and bill your clients accordingly.
                        </p>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="../assests/images/janitorial-10.webp" />
                          <source type="image/png" srcset="../assests/images/janitorial-10.png" />
                          <img loading="lazy" src="../assests/images/janitorial-10.png" alt="Janitorial" width="463" height="453"/>
                        </picture>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?php if( geoCTAcheck() === true ) : ?>
              <div class="mt40 btnSc">
                <p>Workstatus™ is the simplest way to manage <br> and track your cleaning business</p>
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
              <h6><span class="bg-purple">Happy Crew - Happier Clients</span></h6>
              <h2>Get More Power And Features To Deliver<br class="linebrk"> Impeccable Services</h2>
            </div>
            <div class="trackRow">
              <div class="trackImg">
                <picture>
                  <source type="image/webp" srcset="../assests/images/janitorial-demo.webp" />
                  <source type="image/png" srcset="../assests/images/janitorial-demo.png" />
                  <img loading="lazy" src="../assests/images/janitorial-demo.png" alt="Designed to Track" width="541" height="661" />
                </picture>
              </div>
              <div class="trackContent">
                <div class="row">
                  <h3><i></i>GPS Tracking</h3>
                  <p> Track workers in real-time while they are working on client sites.</p>
                </div>
                <div class="row">
                  <h3><i></i>Shift Scheduling</h3>
                  <p> Create and manage crew shifts with just a few clicks.</p>
                </div>
                <div class="row">
                  <h3><i></i>Time-off Management</h3>
                  <p>Time-off requests raised by crew members can be instantly approved or rejected from the dashboard.</p>
                </div>
                <div class="row">
                  <h3><i></i>Easy Budgeting</h3>
                  <p>Stay on top of your finances by tracking the budget for each of your clients.</p>
                </div>
                <div class="row">
                  <h3><i></i>Payroll Processing</h3>
                  <p>Automate payroll by precisely tracking the billable hours of your workers.</p>
                </div>
                <div class="row">
                  <h3><i></i>Invoice Management</h3>
                  <p>Simplify & automate invoicing by accurate monitoring of worked hours.</p>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="timeline">
          <div class="container">
            <div class="top-section">
              <h6><span class="bg-purple">Managing Your Cleaning Crew Couldn’t Be Easier</span></h6>
              <h2>A User-Friendly Workforce Management Software For Janitorial Service</h2>
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
                  <h3>Have Your Workers Install Workstatus™</h3>
                  <p>All crew members can download and install the Workstatus janitorial cleaning software on their mobile phones (Android/iOS).</p>
                </div>
                <div class="row">
                  <h3>Start Tracking</h3>
                  <p>Click and start the time tracker to monitor your crew members while they are working at client sites. Sit back and relax as Workstatus silently records your crew’s clock-in and out timings, working hours, location, and a lot more.
                  </p>
                </div>
                <div class="row">
                  <h3>Generate Detailed Reports</h3>
                  <p>Workstatus provides you with a wealth of information that helps you assess if your crew members are using their work hours productively. You can also use this information to pinpoint factors that negatively affect workflows.  
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
              <h2>Why do business owners love Workstatus™?</h2>
            </div>
            <div class="glider-testimonial">
              <div class="glider-contain">
                <div class="glider2">
                  <div>
                    <p class="white">
                      “ Since implementing Workstatus, we have realized the value that comes from our work and can measure it with real data. We can also better optimize our time spent on certain task resources for other projects. ”
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
                        <p class="para_extrasmall white">Joseph M.</p>
                      </div>
                    </div>
                  </div>
                  <div>
                    <p class="white">
                      “ Workstatus allows me to take automation of administrative tasks to the next level, and has been critical to ensuring my virtual staff is taken care of. I don’t have to worry about manually managing payments or vacation days. ”
                    </p>
                    <div class="border"><span class="element-triangle"></span></div>
                    <div class="author-box">
                      <picture>
                        <source type="image/webp" srcset="../assests/images/avatar.webp" />
                        <source type="image/png" srcset="../assests/images/avatar.png" />
                        <img loading="lazy" src="../assests/images/avatar.png" alt="Alex" width="54" height="54" />
                      </picture>
                      <div class="author-content">
                        <p class="para_extrasmall white">Brad Edward</p>
                      </div>
                    </div>
                  </div>
                  <div>
                    <p class="white">
                      “ I am now managing my time like a pro and getting billed for all my work hours exactly. It’s insane to know how one software can help me make more money. ”
                    </p>
                    <div class="border"><span class="element-triangle"></span></div>
                    <div class="author-box">
                      <picture>
                        <source type="image/webp" srcset="../assests/images/avatar.webp" />
                        <source type="image/png" srcset="../assests/images/avatar.png" />
                        <img loading="lazy" src="../assests/images/avatar.png" alt="Larry" width="54" height="54" />
                      </picture>
                      <div class="author-content">
                        <p class="para_extrasmall white">Rajat Malhan</p>
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
                    <h3 itemprop="name">What does janitorial service management software do?</h3>
                    <div class="faq-accordion-content">
                      <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div itemprop="text">
                          <p>Janitorial service management software helps you manage your cleaning staff and their work hours. The software keeps track of your cleaning employees' hours and shifts, as well as their assigned duties. With janitorial scheduling software, you can also create work orders for your employees and monitor their progress. </p>
                          <p>Additionally, it can help you create invoices and estimates for your customers. All in all, janitorial cleaning software enables you to run your cleaning business more efficiently.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="faq-accordion-item-outer" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <h3 itemprop="name">How can Workstatus improve my janitorial service business?</h3>
                    <div class="faq-accordion-content">
                      <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div itemprop="text">
                          <p>Workstatus is an advanced scheduling and route optimization software for housekeeping that enables you to manage your janitorial workforce from a centralised dashboard.</p>
                          <p>With Workstatus, you can easily create custom cleaning schedules for each of your crew members, and assign those schedules to specific days of the week. You can also optimize your staffing by viewing employee availability on a calendar display.</p>
                          <p>Workstatus scheduling software for cleaning business also streamlines invoicing and payment processing. You can create invoices for services rendered and track payments received. You can also generate detailed reports on your crew’s performance. </p>
                          <p>Plus, you can send notifications to staff members notifying them of their upcoming shifts - or of any changes made to these shifts. </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="faq-accordion-item-outer" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <h3 itemprop="name">Is the Workstatus mobile app easy to use for cleaning staff?</h3>
                    <div class="faq-accordion-content">
                      <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div itemprop="text">
                          <p>Yes, the Workstatus mobile app is easy to use for cleaning staff. In fact, it's designed specifically for janitorial service management. The app makes it easy to track and manage your staff’s schedules and tasks. It also provides real-time updates on job progress, so you can ensure that your cleaning crews are consistently delivering high-quality service. </p>
                          <p>Workstatus mobile app is the perfect tool for managing your janitorial service. Give it a try today!</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="faq-accordion-item-outer" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <h3 itemprop="name">Can Workstatus cleaning service software integrate with my existing software?</h3>
                    <div class="faq-accordion-content">
                      <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div itemprop="text">
                          <p>Yes, Workstatus can easily integrate with your existing CRM, accounting, and email systems. The cleaning business software has a number of pre-built integrations as well as APIs that allow for seamless integrations. Our team can work with you to get Workstatus up and running quickly and easily.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="faq-accordion-item-outer" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <h3 itemprop="name">Can I set up recurring maid & cleaning service jobs reminders with Workstatus?</h3>
                    <div class="faq-accordion-content">
                      <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div itemprop="text">
                          <p>Of course, you can. Workstatus cleaning service scheduling software lets you use recurring job schedules as templates, so you don’t need to create shifts from scratch every time. Besides, you can set up reminders for these shifts, so you can ensure that all of your jobs are completed on time.</p>
                          <p>If you're looking for a housekeeping scheduling software tool, Workstatus is a great option to consider.
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="faq-accordion-item-outer" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <h3 itemprop="name">What to look for in a cleaning business software to grow janitorial business?</h3>
                    <div class="faq-accordion-content">
                      <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div itemprop="text">
                          <p>There are several factors to consider when looking for cleaning business software. One of the most important is whether or not the software is customizable to meet the specific needs of your business. 
                          </p>
                          <p>It is also essential to find if the software is easy to use and provides all the features you need to manage your business efficiently. This might include features such as time tracking, GPS, geofencing, invoicing, scheduling, reporting, and so on. </p>
                          <p>Additionally, it's important to find a provider that offers excellent customer support in case you have any questions or need help using the software. And finally, consider the price and check if the cleaning business software falls within your budget. </p>
                          <p>Workstatus janitorial business software offers all the aforementioned features (plus many more) to help you run your business in the best possible manner. Start with a 14-day free trial today.</p>
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
                <a href="https://www.workstatus.io/blog/predictions-for-the-future-of-work-and-security/" class="blog-link">
                  <div class="thumb">
                    <picture>
                      <source type="image/webp" srcset="../assests/images/useful-resources-blog-1.jpg" />
                      <source type="image/png" srcset="../assests/images/useful-resources-blog-1.jpg" />
                      <img loading="lazy" src="../assests/images/useful-resources-blog-1.jpg" alt="Workstatus Time" width="400" height="242" />
                    </picture>
                  </div>
                  <div class="blog-title">
                    <h3>5 Predictions For The Future of Work & Security in 2022</h3>
                    <span class="small_anchor">Read more</span>
                  </div>
                </a>
              </div>
              <div class="blog-box column-three">
                <a href="https://www.workstatus.io/blog/4-ways-to-monitor-patterns-from-employee-attendance/" class="blog-link">
                  <div class="thumb">
                    <picture>
                      <source type="image/webp" srcset="../assests/images/useful-resources-blog-2.jpg" />
                      <source type="image/png" srcset="../assests/images/useful-resources-blog-2.jpg" />
                      <img loading="lazy" src="../assests/images/useful-resources-blog-2.jpg" alt="Workstatus Time" width="400" height="242" />
                    </picture>
                  </div>
                  <div class="blog-title">
                    <h3>4 Ways to Monitor Patterns from Employee Attendance</h3>
                    <span class="small_anchor">Read more</span>
                  </div>
                </a>
              </div>
              <div class="blog-box column-three">
                <a href="https://www.workstatus.io/blog/top-ways-to-turn-your-remote-teams-productive-and-efficient/" class="blog-link">
                  <div class="thumb">
                    <picture>
                      <source type="image/webp" srcset="../assests/images/useful-resources-blog-2.jpg" />
                      <source type="image/png" srcset="../assests/images/useful-resources-blog-2.jpg" />
                      <img loading="lazy" src="../assests/images/useful-resources-blog-2.jpg" alt="Workstatus Time" width="400" height="242" />
                    </picture>
                  </div>
                  <div class="blog-title">
                    <h3>Top 10 Ways to Turn Your Remote Teams Highly Productive and Efficient</h3>
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
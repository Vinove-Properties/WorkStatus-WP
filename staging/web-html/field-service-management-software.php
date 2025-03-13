<?php require_once 'common/inc/config.inc.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="alternate" href="<?php echo SITE_URL; ?>/field-service-management-software" hreflang="en-us" />
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
        <section class="inner-banner">
          <div class="container">
            <div class="inner-wrap">
              <h1>Manage Field Crew With Field Service<br class="linebrk"> Management Software</h1>
              <p>Workstatus allows businesses to optimize the allocation of resources, schedule and manage
                field service personnel, track route &<br class="linebrk"> deliveries and more. By
                automating these processes, you can save time & money while improving customer service.
              </p>
              <!-- <ul class="list">
                <li>Minimize Expensive Downtime</li>
                <li>Improve Customer Satisfaction</li>
                <li>Track Service Operations & Performance</li>
              </ul> -->
              <div class="actionBtn">
                <?php if( geoCTAcheck() === true ) : ?>
                <div><a href="<?php echo $RegLink; ?>"
                  class="primary_btn1"><?php echo $ws_ctas['cta_text']; ?></a>
                  <small>No credit card required</small>
                </div>
                <?php endif; ?>
                <div><a href="javascript:void(0)" onclick="call_demows();" class="primary_btn2">Book A Demo
                  </a>
                  <small>Get queries answered from experts</small>
                </div>
              </div>
              <?php require_once 'common/available-device.php';?>
              <div class="video-wrap">
                <div class="videoSc" id="has-yt-video">
                  <div class="inner">
                    <div class="topVideo srp-13">
                      <div id="myDIV" class="contbox2">
                        <div class="videoWrapper">
                          <!--<iframe id="video" class="videoIframe" allowfullscreen
                            data-src="https://www.youtube.com/embed/QOE35F45MI8?enablejsapi=1&html5=1&mute=1">
                            </iframe>-->
                          <button class="videoPoster lazy-background" id="play-button">
                            Play video
                            <!--<span class="playicon"></span>-->
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
        <section class="boxDiv">
          <div class="container">
            <div class="top-section">
              <h2> All-in-One Field Service Tracker and Management Tool</h2>
              <p>Workstatus integrates reporting, task management, leave management and project budgeting in
                one dashboard for a wider and closer view into different perspectives
              </p>
            </div>
            <div class="boxRow">
              <div class="boxCol">
                <i class="icon1"></i>
                <h3>Task Management</h3>
                <p>Easy to create and manage crew members’ tasks with just a few clicks.</p>
              </div>
              <div class="boxCol">
                <i class="icon2"></i>
                <h3>Leave Management</h3>
                <p>Time off requests raised by field workers can be instantly approved or rejected from the
                  dashboard.
                </p>
              </div>
              <div class="boxCol">
                <i class="icon3"></i>
                <h3>Easy Attendance Tracking</h3>
                <p>Make attendance management easy for in-field crew members, by single click on mobile-app.
                </p>
              </div>
              <div class="boxCol">
                <i class="icon4"></i>
                <h3>Payroll Management</h3>
                <p>Automate payroll by accurately tracking billable hours for your field teams.</p>
              </div>
              <div class="boxCol">
                <i class="icon5"></i>
                <h3>Online Shift Scheduling</h3>
                <p>Simplify shift scheduling with timely notifications & delay alerts</p>
              </div>
            </div>
          </div>
        </section>
        <section class="middle-section feature-section">
          <div class="item">
            <div class="container">
              <div class="top-section">
                <h6><span class="bg-purple">Smooth Time Tracking</span></h6>
                <h2>Field Service Management Software Makes Everything Simpler</h2>
                <p>Workstatus tracks every aspect of field service management, from dispatching and
                  scheduling to invoicing and payments. This means that you'll spend less time on
                  paperwork and administrative tasks, and more time servicing your clients.
                </p>
              </div>
              <div id="active_Current_Tabs1">
                <div class="flex_row">
                  <div class="column-right">
                    <picture class="page active" id="p1">
                      <source type="image/webp" srcset="./assests/images/fldservice-01.webp">
                      <source type="image/png" srcset="./assests/images/fldservice-01.png">
                      <img loading="lazy" src="./assests/images/fldservice-01.png" alt="Field Service"
                        width="613" height="503">
                    </picture>
                    <picture class="page" id="p2">
                      <source type="image/webp" srcset="./assests/images/fldservice-02.webp">
                      <source type="image/png" srcset="./assests/images/fldservice-02.png">
                      <img loading="lazy" src="./assests/images/fldservice-02.png" alt="Field Service"
                        width="613" height="503">
                    </picture>
                    <picture class="page" id="p3">
                      <source type="image/webp" srcset="./assests/images/fldservice-03.webp">
                      <source type="image/png" srcset="./assests/images/fldservice-03.png">
                      <img loading="lazy" src="./assests/images/fldservice-03.png" alt="Field Service"
                        width="613" height="503">
                    </picture>
                  </div>
                  <div class="column-left">
                    <div class="all-content">
                      <div class="text-column active" id="t1" data-section="active_Current_Tabs1">
                        <h3>Get Granular Data</h3>
                        <p>Get detailed data points that can be used to analyze employee
                          productivity. This data can be used to identify areas where employees
                          may need more training or support.
                        </p>
                        <ul>
                          <li>Increased accountability</li>
                          <li>Better understanding of team performance</li>
                        </ul>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="./assests/images/fldservice-01.webp">
                          <source type="image/png" srcset="./assests/images/fldservice-01.png">
                          <img loading="lazy" src="./assests/images/fldservice-01.png"
                            alt="Field Service" width="613" height="503">
                        </picture>
                      </div>
                    </div>
                    <div class="all-content">
                      <div class="text-column" id="t2" data-section="active_Current_Tabs1">
                        <h3>Generates Reports In Seconds</h3>
                        <p>Reports can be generated in seconds with Workstatus, meaning you can get
                          an accurate overview of your field service work in no time at all.
                        </p>
                        <ul class="checkList">
                          <li>Identify productivity trends and patterns</li>
                          <li>Improved decision making</li>
                        </ul>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="./assests/images/fldservice-02.webp">
                          <source type="image/png" srcset="./assests/images/fldservice-02.png">
                          <img loading="lazy" src="./assests/images/fldservice-02.png"
                            alt="Field Service" width="613" height="503">
                        </picture>
                      </div>
                    </div>
                    <div class="all-content">
                      <div class="text-column" id="t3" data-section="active_Current_Tabs1">
                        <h3>No More Manual Timesheets</h3>
                        <p>With Workstatus, your field workers can enter their time directly into
                          the system ensuring greater accuracy in recording hours worked.
                        </p>
                        <ul class="checkList">
                          <li>Avoid over-or under-reporting hours</li>
                          <li>Accurate Timesheets</li>
                        </ul>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="./assests/images/fldservice-03.webp">
                          <source type="image/png" srcset="./assests/images/fldservice-03.png">
                          <img loading="lazy" src="./assests/images/fldservice-03.png"
                            alt="Field Service" width="613" height="503">
                        </picture>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?php if( geoCTAcheck() === true ) : ?>
              <div class="mt40 btnSc">
                <p>With our AI-powered field service time tracking software,<br> you'll never have to worry
                  about timesheets
                </p>
                <a href="<?php echo $RegLink; ?>"
                  class="primary_btn1"><?php echo $ws_ctas['cta_text']; ?></a>
                <small>Get started now!</small>
              </div>
              <?php endif; ?>
            </div>
          </div>
          <div class="item">
            <div class="container">
              <div class="top-section">
                <h6><span class="bg-purple">Convenient Scheduling</span></h6>
                <h2>Manage Shifts With Workstatus Field Crew Scheduling Software</h2>
                <p>Workstatus can help to optimize the crew scheduling process by creating a schedule that
                  takes into account the availability of workers, equipment, and other resources.
                </p>
              </div>
              <div id="active_Current_Tabs2">
                <div class="flex_row">
                  <div class="column-right">
                    <picture class="page active" id="p4">
                      <source type="image/webp" srcset="./assests/images/fldservice-04.webp">
                      <source type="image/png" srcset="./assests/images/fldservice-04.png">
                      <img loading="lazy" src="./assests/images/fldservice-04.png" alt="Field Service"
                        width="463" height="453">
                    </picture>
                    <picture class="page" id="p5">
                      <source type="image/webp" srcset="./assests/images/fldservice-05.webp">
                      <source type="image/png" srcset="./assests/images/fldservice-05.png">
                      <img loading="lazy" src="./assests/images/fldservice-05.png" alt="Field Service"
                        width="463" height="453">
                    </picture>
                    <picture class="page" id="p6">
                      <source type="image/webp" srcset="./assests/images/fldservice-06.webp">
                      <source type="image/png" srcset="./assests/images/fldservice-06.png">
                      <img loading="lazy" src="./assests/images/fldservice-06.png" alt="Field Service"
                        width="463" height="453">
                    </picture>
                  </div>
                  <div class="column-left">
                    <div class="all-content">
                      <div class="text-column active" id="t4" data-section="active_Current_Tabs2">
                        <h3><i></i> Shift Management</h3>
                        <p>Set up teams’ schedules with Workstatus to help field workers know where
                          they have to be by what time. Track if a crew member is late, on leave
                          or abandons the shift.
                        </p>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="./assests/images/fldservice-04.webp">
                          <source type="image/png" srcset="./assests/images/fldservice-04.png">
                          <img loading="lazy" src="./assests/images/fldservice-04.png"
                            alt="Field Service" width="463" height="453">
                        </picture>
                      </div>
                    </div>
                    <div class="all-content">
                      <div class="text-column" id="t5" data-section="active_Current_Tabs2">
                        <h3><i></i> Easier Communication</h3>
                        <p>With Workstatus, managers can easily communicate schedule changes. Crew
                          members no longer have to rely on handwritten notes or emails which may
                          get missed or misinterpreted. 
                        </p>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="./assests/images/fldservice-05.webp">
                          <source type="image/png" srcset="./assests/images/fldservice-05.png">
                          <img loading="lazy" src="./assests/images/fldservice-05.png"
                            alt="Field Service" width="463" height="453">
                        </picture>
                      </div>
                    </div>
                    <div class="all-content">
                      <div class="text-column" id="t6" data-section="active_Current_Tabs2">
                        <h3><i></i> Reduced Stress</h3>
                        <p>Having a clear idea of when you are working helps reduce stress levels.
                          You know what days and hours you will be working and can make
                          arrangements accordingly. This leads to a more relaxed work environment
                          and happier employees. 
                        </p>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="./assests/images/fldservice-06.webp">
                          <source type="image/png" srcset="./assests/images/fldservice-06.png">
                          <img loading="lazy" src="./assests/images/fldservice-06.png"
                            alt="Field Service" width="463" height="453">
                        </picture>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="mt40 btnSc">
                <p>Workstatus™ is the best Field Service Scheduling Software</p>
                <a href="javascript:void(0)" onclick="call_demows();" class="primary_btn1">Book A Demo</a>
                <small>Check out this demo to know more</small>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="container">
              <div class="top-section">
                <h6><span class="bg-purple">Hassle-Free Tracking</span></h6>
                <h2>Optimize Route Tracking With The Field Service Management Software</h2>
                <p>Workstatus’ location tracking software for field workers enables employers to optimize
                  workflows and ensure workers’ productivity. You can also improve safety in the workplace
                  by ensuring that employees are not working in areas that are hazardous or potentially
                  dangerous.
                </p>
              </div>
              <div id="active_Current_Tabs3">
                <div class="flex_row">
                  <div class="column-right">
                    <picture class="page active" id="p7">
                      <source type="image/webp" srcset="./assests/images/fldservice-07.webp">
                      <source type="image/png" srcset="./assests/images/fldservice-07.png">
                      <img loading="lazy" src="./assests/images/fldservice-07.png" alt="Field Service"
                        width="618" height="563">
                    </picture>
                    <picture class="page" id="p8">
                      <source type="image/webp" srcset="./assests/images/fldservice-08.webp">
                      <source type="image/png" srcset="./assests/images/fldservice-08.png">
                      <img loading="lazy" src="./assests/images/fldservice-08.png" alt="Field Service"
                        width="618" height="563">
                    </picture>
                    <picture class="page" id="p9">
                      <source type="image/webp" srcset="./assests/images/fldservice-09.webp">
                      <source type="image/png" srcset="./assests/images/fldservice-09.png">
                      <img loading="lazy" src="./assests/images/fldservice-09.png" alt="Field Service"
                        width="432" height="563">
                    </picture>
                  </div>
                  <div class="column-left">
                    <div class="all-content">
                      <div class="text-column active" id="t7" data-section="active_Current_Tabs3">
                        <h3><i></i>Automate Time Tracking with Geofences</h3>
                        <p>The geofencing with Workstatus enables automation of clock in and out
                          time as soon as crew members enter job sites. No more hassled time
                          recording of each member’s presence.
                        </p>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="./assests/images/fldservice-07.webp">
                          <source type="image/png" srcset="./assests/images/fldservice-07.png">
                          <img loading="lazy" src="./assests/images/fldservice-07.png"
                            alt="Field Service" width="618" height="563">
                        </picture>
                      </div>
                    </div>
                    <div class="all-content">
                      <div class="text-column" id="t8" data-section="active_Current_Tabs3">
                        <h3><i></i>GPS Tracking</h3>
                        <p>By tracking the real-time location of employees, employers can see where
                          employees are working, how long they spend at each job site, and whether
                          they are taking the most efficient routes.
                        </p>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="./assests/images/fldservice-08.webp">
                          <source type="image/png" srcset="./assests/images/fldservice-08.png">
                          <img loading="lazy" src="./assests/images/fldservice-08.png"
                            alt="Field Service" width="618" height="563">
                        </picture>
                      </div>
                    </div>
                    <div class="all-content">
                      <div class="text-column" id="t9" data-section="active_Current_Tabs3">
                        <h3><i></i>Download on Mobile</h3>
                        <p>Download Workstatus on iOS and Android devices so that you can automate
                          time tracking for field workers. Don’t worry the extremely lightweight
                          app of Workstatus will not slow down your mobile devices. Get the app.
                        </p>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="./assests/images/fldservice-09.webp">
                          <source type="image/png" srcset="./assests/images/fldservice-09.png">
                          <img loading="lazy" src="./assests/images/fldservice-09.png"
                            alt="Field Service" width="432" height="563">
                        </picture>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="mt40 btnSc">
                <p>Start Using Workstatus™ Field Service Management<br> Software Right Away!</p>
                <a href="javascript:void(0)" onclick="call_demows();" rel="nofollow"
                  class="primary_btn1">Book A Demo</a>
                <small> It’s Worth</small>
              </div>
            </div>
          </div>
        </section>
        <section class="wsMobile whitetxt">
          <?php require_once 'common/workstatus-device.php';?>
        </section>
        <?php if( !isMobile() ) : ?>
        <section class="testimonial testmHome ">
          <div class="container">
            <div class="top-section">
              <h6><span class="bg-white">Testimonials</span></h6>
              <h2>Our Users Have Great Things To Say About Us</h2>
            </div>
            <div class="glider-testimonial">
              <div class="glider-contain">
                <div class="glider2">
                  <div>
                    <p class="white">“ We've been using Workstatus Field Service Management Software for
                      about a year now, and it has been a great help to our business. It's really easy
                      to use and helps us keep track of all our jobs and tasks in the field. The
                      customer support is also great, and they are always quick to help us with any
                      issues we have. I would definitely recommend Workstatus to any field service
                      business. ”
                    </p>
                    <div class="border">
                      <div class="triangle"> </div>
                    </div>
                    <div class="author-box">
                      <picture>
                        <source type="image/webp" srcset="./assests/images/avatar.webp">
                        <source type="image/png" srcset="./assests/images/avatar.png">
                        <img loading="lazy" src="./assests/images/avatar.png" alt="Peter" width="54"
                          height="54">
                      </picture>
                      <div class="author-content">
                        <p class="para_extrasmall white">Andrew James, Switzerland</p>
                      </div>
                    </div>
                  </div>
                  <div>
                    <p class="white">“ We started using Workstatus Field Service Management Software
                      about six months ago, and it has been a total lifesaver for our business. We
                      struggled to keep track of all our jobs and tasks manually, but now with
                      Workstatus, everything is much more organised and streamlined. The software is
                      really easy to use and has allowed us to improve our customer service and
                      efficiency. ”
                    </p>
                    <div class="border"><span class="element-triangle"></span></div>
                    <div class="author-box">
                      <picture>
                        <source type="image/webp" srcset="./assests/images/avatar.webp">
                        <source type="image/png" srcset="./assests/images/avatar.png">
                        <img loading="lazy" src="./assests/images/avatar.png" alt="Alex" width="54"
                          height="54">
                      </picture>
                      <div class="author-content">
                        <p class="para_extrasmall white">Johny Adam, USA</p>
                      </div>
                    </div>
                  </div>
                  <div>
                    <p class="white">“ I can't explain how much this software has helped me manage my
                      fieldwork. It's made everything so much easier and more organized. The customer
                      service is great - I had a question, and they got back to me right away with an
                      answer. ”
                    </p>
                    <p>Thank you, Workstatus!</p>
                    <div class="border"><span class="element-triangle"></span></div>
                    <div class="author-box">
                      <picture>
                        <source type="image/webp" srcset="./assests/images/avatar.webp">
                        <source type="image/png" srcset="./assests/images/avatar.png">
                        <img loading="lazy" src="./assests/images/avatar.png" alt="Larry" width="54"
                          height="54">
                      </picture>
                      <div class="author-content">
                        <p class="para_extrasmall white">Sam Nicole, Australia</p>
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
              <h2>Frequently Asked Questions</h2>
            </div>
            <div class="flex_row">
              <div itemscope itemtype="https://schema.org/FAQPage">
                <div class="column">
                  <div class="faq-accordion-item-outer open" itemscope itemprop="mainEntity"
                    itemtype="https://schema.org/Question">
                    <h3 itemprop="name">How do field workers track their time?
                    </h3>
                    <div class="faq-accordion-content">
                      <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div itemprop="text">
                          <p>Field workers can track their time using field service management
                            software. Such software tools typically include a mobile app that
                            field workers can use to clock in and out, track their progress on
                            tasks, and submit expenses. Some field service management solutions
                            also offer GPS tracking, so supervisors can see where their
                            employees are at all times. 
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="faq-accordion-item-outer" itemscope itemprop="mainEntity"
                    itemtype="https://schema.org/Question">
                    <h3 itemprop="name">What is the best field team management software?</h3>
                    <div class="faq-accordion-content">
                      <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div itemprop="text">
                          <p>Workstatus is an excellent tool for managing field teams, as it helps
                            to organize and optimize tasks and schedules. This can be incredibly
                            helpful in keeping your team on track and ensuring that everyone is
                            completing their work in a timely manner. In addition, Workstatus
                            also provides reporting capabilities to see how your team is
                            performing and identify any areas where improvements may be needed.
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="faq-accordion-item-outer" itemscope itemprop="mainEntity"
                    itemtype="https://schema.org/Question">
                    <h3 itemprop="name">How does Workstatus Field’s workforce management software work?
                    </h3>
                    <div class="faq-accordion-content">
                      <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div itemprop="text">
                          <p>Workstatus is available as a desktop application or a mobile app. The
                            desktop application can be installed on Windows or Mac computers,
                            while the mobile app is available for Android and iOS devices. Both
                            applications are free to download and use.
                          </p>
                          <p>Workstatus allows users to create customizable work schedules, track
                            time-off requests and absences, and generate real-time reports on
                            employee productivity. Additionally, the software can be used to
                            manage payroll and expenses.
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="faq-accordion-item-outer" itemscope itemprop="mainEntity"
                    itemtype="https://schema.org/Question">
                    <h3 itemprop="name">Does Workstatus help optimize the field team's routes too?</h3>
                    <div class="faq-accordion-content">
                      <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div itemprop="text">
                          <p>Workstatus helps optimize the field team's routes too. By providing a
                            platform for workers to communicate and collaborate in real-time,
                            Workstatus can help create more efficient routes for teams.
                          </p>
                          <p>Workstatus is always up-to-date with the most recent changes and
                            updates, team members can rely on the app to provide accurate
                            information about their current location and next destination. This
                            helps field teams avoid wasteful detours and better plan their time
                            on the road. 
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="faq-accordion-item-outer" itemscope itemprop="mainEntity"
                    itemtype="https://schema.org/Question">
                    <h3 itemprop="name">How accurate field service management software is?</h3>
                    <div class="faq-accordion-content">
                      <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div itemprop="text">
                          <p>Field service management software is very accurate. This is because
                            it relies on GPS tracking to provide real-time updates on the
                            location of field service personnel and their assigned jobs. In
                            addition, field service management software can automatically
                            generate work orders and invoices, which helps to ensure that
                            billing is accurate. 
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
                <a href="https://www.workstatus.io/blog/10-habits-you-need-to-know-of-remote-workers-how-to-deal-with-it/"
                  class="blog-link">
                  <div class="thumb">
                    <picture>
                      <source type="image/webp" srcset="./assests/images/useful-resources-blog-1.jpg">
                      <source type="image/png" srcset="./assests/images/useful-resources-blog-1.jpg">
                      <img loading="lazy" src="./assests/images/useful-resources-blog-1.jpg"
                        alt="Workstatus Time" width="400" height="242">
                    </picture>
                  </div>
                  <div class="blog-title">
                    <h3>10 Habits You Need to Know of Remote Workers. How to Deal with It?</h3>
                    <span class="small_anchor">Read more</span>
                  </div>
                </a>
              </div>
              <div class="blog-box column-three">
                <a href="https://www.workstatus.io/blog/what-is-geofencing/" class="blog-link">
                  <div class="thumb">
                    <picture>
                      <source type="image/webp" srcset="./assests/images/useful-resources-blog-2.jpg">
                      <source type="image/png" srcset="./assests/images/useful-resources-blog-2.jpg">
                      <img loading="lazy" src="./assests/images/useful-resources-blog-2.jpg"
                        alt="Workstatus Time" width="400" height="242">
                    </picture>
                  </div>
                  <div class="blog-title">
                    <h3>What is Geofencing? Will Geofence Software Ever Rule the World?</h3>
                    <span class="small_anchor">Read more</span>
                  </div>
                </a>
              </div>
              <div class="blog-box column-three">
                <a href="https://www.workstatus.io/blog/how-can-regular-monitoring-in-remote-work-bring-impeccable-changes/"
                  class="blog-link">
                  <div class="thumb">
                    <picture>
                      <source type="image/webp" srcset="./assests/images/useful-resources-blog-3.jpg">
                      <source type="image/png" srcset="./assests/images/useful-resources-blog-3.jpg">
                      <img loading="lazy" src="./assests/images/useful-resources-blog-3.jpg"
                        alt="Workstatus Time" width="400" height="242">
                    </picture>
                  </div>
                  <div class="blog-title">
                    <h3>How Can Regular Monitoring in Remote Work Bring Impeccable Changes?</h3>
                    <span class="small_anchor">Read more</span>
                  </div>
                </a>
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
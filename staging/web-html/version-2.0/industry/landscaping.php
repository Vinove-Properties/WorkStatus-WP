<?php require_once '../common/inc/config.inc.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="alternate" href="<?php echo SITE_URL; ?>/industry/landscaping" hreflang="en-us" />
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
              <h1>Powerful Tool To Streamline Scheduling,<br class="linebrk"> Attendance, & Productivity</h1>
              <p>
                Schedule your employees’ shifts and assign tasks on the go, see who’s clocked in/out of their shift, and have an<br class="linebrk"> accurate picture of everything with one-stop solution software. 
              </p>
              <!-- <ul class="list">
                <li>Automated clock-in and clock-out</li>
                <li>Real-Time GPS location monitoring</li>
                <li>Plan & Track shifts for employees </li>
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
                    <div class="topVideo srp-19">
                      <div id="myDIV" class="contbox2">
                        <div class="videoWrapper">
                          <iframe id="video" class="videoIframe" allowfullscreen
                            data-src="https://www.youtube.com/embed/1304RhuJ65M?enablejsapi=1&html5=1&mute=1">
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
                <h6><span class="bg-purple">Efficient Task Management</span></h6>
                <h2>One Centralized Platform For Everything</h2>
                <p>From scheduling shifts, appointments, and managing invoices to tracking employee time and real-time location, we have everything you need to run your lawn care & landscape business smoothly.</p>
              </div>
              <div id="active_Current_Tabs1">
                <div class="flex_row">
                  <div class="column-right">
                    <picture class="page active" id="p1">
                      <source type="image/webp" srcset="../assests/images/landscape-01.webp" />
                      <source type="image/png" srcset="../assests/images/landscape-01.png" />
                      <img loading="lazy" src="../assests/images/landscape-01.png" alt="Landscape" width="618" height="479" />
                    </picture>
                    <picture class="page" id="p2">
                      <source type="image/webp" srcset="../assests/images/landscape-02.webp" />
                      <source type="image/png" srcset="../assests/images/landscape-02.png" />
                      <img loading="lazy" src="../assests/images/landscape-02.png" alt="Landscape" width="617" height="523" />
                    </picture>
                    <picture class="page" id="p3">
                      <source type="image/webp" srcset="../assests/images/landscape-03.webp" />
                      <source type="image/png" srcset="../assests/images/landscape-03.png" />
                      <img loading="lazy" src="../assests/images/landscape-03.png" alt="Landscape" width="617" height="523" />
                    </picture>
                  </div>
                  <div class="column-left">
                    <div class="all-content">
                      <div class="text-column active" id="t1" data-section="active_Current_Tabs1">
                        <h3><i></i>Shift Planning</h3>
                        <p>Create custom schedules for each employee; plan and organize everyone's shift according to the specific task needed on the day or week for better management. 
                        </p>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="../assests/images/landscape-01.webp" />
                          <source type="image/png" srcset="../assests/images/landscape-01.png" />
                          <img loading="lazy" src="../assests/images/landscape-01.png" alt="Landscape" width="618" height="479" />
                        </picture>
                      </div>
                    </div>
                    <div class="all-content">
                      <div class="text-column" id="t2" data-section="active_Current_Tabs1">
                        <h3><i></i>Time And Location Tracking</h3>
                        <p>Track who is at what location and what task they are performing. View detailed reports on time spent on a task or project and stay informed with complete transparency. 
                        </p>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="../assests/images/landscape-02.webp" />
                          <source type="image/png" srcset="../assests/images/landscape-02.png" />
                          <img loading="lazy" src="../assests/images/landscape-02.png" alt="Landscape" width="617" height="523" />
                        </picture>
                      </div>
                    </div>
                    <div class="all-content">
                      <div class="text-column" id="t3" data-section="active_Current_Tabs1">
                        <h3><i></i>Easy Budgeting & Invoicing</h3>
                        <p>Forget about using multiple applications. Let Workstatus do it all. Invoice customers efficiently from your dashboard; keep track of expenses, create every invoice within seconds, and generate payment reminders all in one place.
                        </p>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="../assests/images/landscape-03.webp" />
                          <source type="image/png" srcset="../assests/images/landscape-03.png" />
                          <img loading="lazy" src="../assests/images/landscape-03.png" alt="Landscape" width="617" height="523" />
                        </picture>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="mt40 btnSc">
                <p>With our hassle-free time management software, you'll never<br> have to worry about your landscape workforce scheduling
                </p>
                <a href="<?php echo $RegLink; ?>" class="primary_btn1">Start Free Trial</a>
                <small>
                Get started now!
                </small>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="container">
              <div class="top-section">
                <h6><span class="bg-purple">No More Manual Tracking for On-Field Workers</span></h6>
                <h2>Monitor Attendance, Productivity, And Tasks Using AI Reports</h2>
                <p>Have complete transparency over your workers' whereabouts, work performance, time off requests, tasks, and activities. With Workstatus, stay on top of everything with complete transparency. 
                </p>
              </div>
              <div id="active_Current_Tabs2">
                <div class="flex_row">
                  <div class="column-right">
                    <picture class="page active" id="p4">
                      <source type="image/webp" srcset="../assests/images/landscape-04.webp" />
                      <source type="image/png" srcset="../assests/images/landscape-04.png" />
                      <img loading="lazy" src="../assests/images/landscape-04.png" alt="Landscape" width="618" height="478" />
                    </picture>
                    <picture class="page" id="p5">
                      <source type="image/webp" srcset="../assests/images/landscape-05.webp" />
                      <source type="image/png" srcset="../assests/images/landscape-05.png" />
                      <img loading="lazy" src="../assests/images/llandscape-05.png" alt="Landscape" width="613" height="503" />
                    </picture>
                  </div>
                  <div class="column-left">
                    <div class="all-content">
                      <div class="text-column active" id="t4" data-section="active_Current_Tabs2">
                        <h3><i></i> Geofencing Time Clock</h3>
                        <p>Accurately track employees’ attendance using the geofencing clock in and out software. Know how much time employees spend at the office or project site through the selfie-validated attendance feature.</p>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="../assests/images/landscape-04.webp" />
                          <source type="image/png" srcset="../assests/images/landscape-04.png" />
                          <img loading="lazy" src="../assests/images/landscape-04.png" alt="Landscape" width="618" height="478" />
                        </picture>
                      </div>
                    </div>
                    <div class="all-content">
                      <div class="text-column" id="t5" data-section="active_Current_Tabs2">
                        <h3><i></i>Employee performance reports</h3>
                        <p> Track & monitor each of your employee's performance statistics over time to identify trends and improve productivity. Get a detailed activity log with screenshots to ensure that every minute counts for what you are paying them. </p>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="../assests/images/landscape-05.webp" />
                          <source type="image/png" srcset="../assests/images/landscape-05.png" />
                          <img loading="lazy" src="../assests/images/landscape-05.png" alt="Landscape" width="613" height="503" />
                        </picture>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="mt40 btnSc">
                <p>Workstatus™ is a great way to stay organised
                </p>
                <a href="javascript:void(0)" onclick="call_demows();" class="primary_btn1">Book A Demo</a>
                <small>Check out this demo to know more</small>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="container">
              <div class="top-section">
                <h6><span class="bg-purple">Hassle-Free Invoice Management</span></h6>
                <h2>Track & Manage Budgets, Billable Hours, And Clients</h2>
                <p>Seamlessly automate your finances by leveraging a system that works with your specific needs. Whether you're trying to create a budget, cut down on expenses, or make more money, we got you covered. 
                </p>
              </div>
              <div id="active_Current_Tabs3">
                <div class="flex_row">
                  <div class="column-right">
                    <picture class="page active" id="p6">
                      <source type="image/webp" srcset="../assests/images/landscape-06.webp" />
                      <source type="image/png" srcset="../assests/images/landscape-06.png" />
                      <img loading="lazy" src="../assests/images/landscape-06.png" alt="Landscape" width="618" height="453" />
                    </picture>
                    <picture class="page" id="p7">
                      <source type="image/webp" srcset="../assests/images/landscape-07.webp" />
                      <source type="image/png" srcset="../assests/images/landscape-07.png" />
                      <img loading="lazy" src="../assests/images/landscape-07.png" alt="Landscape" width="618" height="499" />
                    </picture>
                    <picture class="page" id="p8">
                      <source type="image/webp" srcset="../assests/images/landscape-08.webp" />
                      <source type="image/png" srcset="../assests/images/landscape-08.png" />
                      <img loading="lazy" src="../assests/images/landscape-08.png" alt="Landscape" width="618" height="490" />
                    </picture>
                  </div>
                  <div class="column-left">
                    <div class="all-content">
                      <div class="text-column active" id="t6" data-section="active_Current_Tabs3">
                        <h3><i></i> Calculate Billable Hours Automatically</h3>
                        <p> Automatically calculate the billable hours and avoid wasting time entering & calculating hours manually. Simply add the timesheet when it's finished, and our system will calculate the time accordingly.
                        </p>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="../assests/images/landscape-06.webp" />
                          <source type="image/png" srcset="../assests/images/landscape-06.png" />
                          <img loading="lazy" src="../assests/images/landscape-06.png" alt="Landscape" width="618" height="453" />
                        </picture>
                      </div>
                    </div>
                    <div class="all-content">
                      <div class="text-column" id="t7" data-section="active_Current_Tabs3">
                        <h3><i></i>Track Multiple Clients at Once</h3>
                        <p>Need to manage multiple clients? 
                          Not a problem! Workstatus lets you monitor different projects at once and invoice them as per their due date, so they never miss a payment. 
                        </p>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="../assests/images/landscape-07.webp" />
                          <source type="image/png" srcset="../assests/images/landscape-07.png" />
                          <img loading="lazy" src="../assests/images/landscape-07.png" alt="Landscape" width="618" height="499" />
                        </picture>
                      </div>
                    </div>
                    <div class="all-content">
                      <div class="text-column" id="t8" data-section="active_Current_Tabs3">
                        <h3><i></i> Create Budgets Easily</h3>
                        <p>What's better than working hard? Working smart! With Workstatus, create budgets and track your spending easily. Set & monitor budget limits to avoid overspending. 
                        </p>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="../assests/images/landscape-08.webp" />
                          <source type="image/png" srcset="../assests/images/landscape-08.png" />
                          <img loading="lazy" src="../assests/images/landscape-08.png" alt="Landscape" width="618" height="490" />
                        </picture>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?php if( geoCTAcheck() === true ) : ?>
              <div class="mt40 btnSc">
                <p>Workstatus™ is the simplest way to manage and<br> track your landscape business</p>
                <a href="<?php echo $RegLink; ?>" class="primary_btn1"><?php echo $ws_ctas['cta_text']; ?></a>
                <small>
                Sign up now!
                </small>
              </div>
              <?php endif; ?>
            </div>
          </div>
        </section>
        <section class="trackEm">
          <div class="container">
            <div class="top-section">
              <h6><span class="bg-purple">Deliver Quality</span></h6>
              <h2>Powerful Features To Manage Your Crew Efficiently</h2>
            </div>
            <div class="trackRow">
              <div class="trackImg">
                <picture>
                  <source type="image/webp" srcset="../assests/images/landscape-demo.webp" />
                  <source type="image/png" srcset="../assests/images/landscape-demo.png" />
                  <img loading="lazy" src="../assests/images/landscape-demo.png" alt="Designed to Track" width="541" height="660" />
                </picture>
              </div>
              <div class="trackContent">
                <div class="row">
                  <h3><i></i>GPS Tracking</h3>
                  <p>Track the real-time location of your employees and stay updated with their whereabouts.</p>
                </div>
                <div class="row">
                  <h3><i></i>Online Timesheets</h3>
                  <p>Make more informed staffing decisions with real-time visibility into crew members’ work patterns.</p>
                </div>
                <div class="row">
                  <h3><i></i>Time-off Management</h3>
                  <p>Time off requests raised by crew members can be instantly approved or rejected from the dashboard.</p>
                </div>
                <div class="row">
                  <h3><i></i>Automate  Payroll Process</h3>
                  <p>Automate payroll by tracking the billable hours of your workers. Result? Time is saved, and accurate payments are made on time. </p>
                </div>
                <div class="row">
                  <h3><i></i>Cost Estimation</h3>
                  <p>Boost your sales by quickly estimating how much a project will cost based on hourly rates, materials cost, and other expenses, etc. 
                  </p>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="timeline">
          <div class="container">
            <div class="top-section">
              <h6><span class="bg-purple">Managing Your Workforce Couldn’t Be Easier</span></h6>
              <h2>A User-Friendly Workforce Management Software For Landscaping</h2>
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
                  <h3>Have Your Team Install Workstatus™</h3>
                  <p>All lawn care workers can download and install the Workstatus app on their desktops/laptops (Windows, Mac, Linux) and/or mobile phones (Android/iOS).</p>
                </div>
                <div class="row">
                  <h3>Start Tracking</h3>
                  <p>Click and start the time tracker to monitor your landscape workforce while they are working. Sit back and relax as Workstatus silently records your workers’ clock-in and out timings, working hours, location, and a lot more.
                  </p>
                </div>
                <div class="row">
                  <h3>Generate Detailed Reports</h3>
                  <p>
                    Workstatus provides you with a wealth of information that helps you assess if your workers are using their work hours productively. You can also use this information to pinpoint factors that negatively affect workflows. 
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
              <h2>Why Do Lawn Care Workers Prefer Workstatus™?</h2>
            </div>
            <div class="glider-testimonial">
              <div class="glider-contain">
                <div class="glider2">
                  <div>
                    <p class="white">
                      “ Workstatus is a well-rounded tool that could help streamline my business's landscaping operations. It's easy to use and has all the features I needed to get my business organized. Plus, excellent customer support is possible with this software being used in my business. I definitely recommend it for all! ”
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
                        <p class="para_extrasmall white">Adam, London</p>
                      </div>
                    </div>
                  </div>
                  <div>
                    <p class="white">
                      “ If you're looking for landscape scheduling software, Workstatus is a recommended option. It allowed us to create and manage schedules for our landscaping business quickly and efficiently. ”
                    </p>
                    <div class="border"><span class="element-triangle"></span></div>
                    <div class="author-box">
                      <picture>
                        <source type="image/webp" srcset="../assests/images/avatar.webp" />
                        <source type="image/png" srcset="../assests/images/avatar.png" />
                        <img loading="lazy" src="../assests/images/avatar.png" alt="Alex" width="54" height="54" />
                      </picture>
                      <div class="author-content">
                        <p class="para_extrasmall white">Chris James, Singapore</p>
                      </div>
                    </div>
                  </div>
                  <div>
                    <p class="white">
                      “ Workstatus is a great tool for landscape professionals! This scheduling software allows us to easily create and manage work orders, tasks, shifts and employees. I found the program easy to use and very efficient in working. I would definitely recommend it to anyone in the landscaping business! ”
                    </p>
                    <div class="border"><span class="element-triangle"></span></div>
                    <div class="author-box">
                      <picture>
                        <source type="image/webp" srcset="../assests/images/avatar.webp" />
                        <source type="image/png" srcset="../assests/images/avatar.png" />
                        <img loading="lazy" src="../assests/images/avatar.png" alt="Larry" width="54" height="54" />
                      </picture>
                      <div class="author-content">
                        <p class="para_extrasmall white">Michael Roy, Malaysia</p>
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
                  <div class="faq-accordion-item-outer open" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <h3 itemprop="name">Which is the best scheduling app for landscaping business?</h3>
                    <div class="faq-accordion-content">
                      <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div itemprop="text">
                          <p>Workstatus is the best app for landscaping businesses because it allows lawn care managers to create shift schedules, assign employees to shifts and keep track of employee availability for effective communication among team members.
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="faq-accordion-item-outer" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <h3 itemprop="name">How to schedule landscaping work in Workstatus?</h3>
                    <div class="faq-accordion-content">
                      <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div itemprop="text">
                          <p>To schedule landscaping work in Workstatus, simply create a project and add the relevant tasks. Then, assign each task to the appropriate team member and set due dates. Finally, use the project calendar to keep track of everyone's progress.
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="faq-accordion-item-outer" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <h3 itemprop="name">Does Workstatus track billable hours?</h3>
                    <div class="faq-accordion-content">
                      <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div itemprop="text">
                          <p>Yes. Workstatus does track billable hours to help you in a number of ways, such as keeping track of how much time you're spending on billable projects and making sure that you're billing your clients correctly.
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="faq-accordion-item-outer" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <h3 itemprop="name">How do you implement landscaping time tracking software?</h3>
                    <div class="faq-accordion-content">
                      <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div itemprop="text">
                          <p>To implement landscaping time tracking software, you will need first to install the software onto your computer. Once the software is installed, you will need to create an account and log in.</p>
                          <p>After you are logged in, you will create a new project. In the project, you will need to enter the client's details. You will also need to enter the project start date, end date, and budget.</p>
                          <p>Once all of this information is entered, you will add tasks to the project. Each task will have a start time and end time. You can also add notes to each task. Once all of the tasks are completed, you can generate a report that shows how much time was spent on the project. This report can be used to bill the client.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="faq-accordion-item-outer" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <h3 itemprop="name">How can I keep track of lawn maintenance customers using Workstatus?</h3>
                    <div class="faq-accordion-content">
                      <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div itemprop="text">
                          <p>Workstatus is an excellent way to keep track of your Lawn Maintenance customers. You can create a project for each customer and then add tasks and subtasks as needed.</p>
                          <p>You can also use the Notes feature to keep track of specific customer information, such as contact information, payment information, and job specifications. And if you need to share project information with other team members, you can easily export the project to PDF or Excel.</p>
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
                <a href="https://www.workstatus.io/blog/how-to-manage-remote-work-schedules/" class="blog-link">
                  <div class="thumb">
                    <picture>
                      <source type="image/webp" srcset="../assests/images/useful-resources-blog-1.jpg" />
                      <source type="image/png" srcset="../assests/images/useful-resources-blog-1.jpg" />
                      <img loading="lazy" src="../assests/images/useful-resources-blog-1.jpg" alt="Workstatus Time" width="400" height="242" />
                    </picture>
                  </div>
                  <div class="blog-title">
                    <h3>How To Manage Remote Work Schedules</h3>
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
                    <h3>How To Prioritize Work With A Scheduling Software</h3>
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
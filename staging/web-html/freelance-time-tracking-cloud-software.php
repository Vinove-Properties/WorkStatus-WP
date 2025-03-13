<?php require_once 'common/inc/config.inc.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="alternate" href="<?php echo SITE_URL; ?>/freelance-time-tracking-cloud-software" hreflang="en-us" />
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
              <h1>Invoicing & Time Tracking For Freelancers</h1>
              <p>Workstatus™ is a great way for freelancers to stay organized with their work. Having all of your work hours logged in one place makes it much <br class="linebrk">easier to keep track of time you're spending on each project and helps you to budget & allocate your time more effectively.
              </p>
              <!-- <ul class="list">
                <li>Greater Financial Control</li>
                <li>Improved Client Communication</li>
                <li>Enhanced Productivity and Efficiency</li>
              </ul> -->
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
              <div class="video-wrap">
                <div class="videoSc" id="has-yt-video">
                  <div class="inner">
                    <div class="topVideo srp-12">
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
              <h2>Packaged Freelance Time Tracking And Invoicing Tool</h2>
              <p>Get an all-in-one best freelance time tracking, reporting, invoicing, and task management tool packaged together to automate and manage your activities in one place.</p>
            </div>
            <div class="boxRow">
              <div class="boxCol">
                <i class="icon6"></i>
                <h3>Employee Scheduling</h3>
                <p>Easy to create and manage freelancers’ shifts with just a few clicks.</p>
              </div>
              <div class="boxCol">
                <i class="icon2"></i>
                <h3>Leave Management</h3>
                <p>Time off requests raised by freelancers can be instantly approved or rejected from the dashboard.</p>
              </div>
              <div class="boxCol">
                <i class="icon7"></i>
                <h3>Easy Project Budgeting</h3>
                <p>Get a healthy bottom line by tracking the budget for each of your freelancers.</p>
              </div>
              <div class="boxCol">
                <i class="icon4"></i>
                <h3>Payroll Management</h3>
                <p>Automate payroll by accurately tracking billable hours for your freelancing teams.</p>
              </div>
              <div class="boxCol">
                <i class="icon5"></i>
                <h3>Online Invoice Management</h3>
                <p>Simplify invoicing by accurate monitoring of working hours.</p>
              </div>
            </div>
          </div>
        </section>
        <section class="middle-section feature-section">
          <div class="item">
            <div class="container">
              <div class="top-section">
                <h6><span class="bg-purple">Simplified Tracking</span></h6>
                <h2>Time Tracking For Freelancers Made Easier</h2>
                <p>Workstatus allows freelancers to keep track of the time they are spending on each project. This can help them to be more efficient and to make sure that they are charging their clients the correct amount for the work that they are doing.</p>
              </div>
              <div id="active_Current_Tabs1">
                <div class="flex_row">
                  <div class="column-right">
                    <picture class="page active" id="p1">
                      <source type="image/webp" srcset="./assests/images/freelance-01.webp">
                      <source type="image/png" srcset="./assests/images/freelance-01.png">
                      <img loading="lazy" src="./assests/images/freelance-01.png"
                        alt="Freelance Time Tracking" width="620" height="500">
                    </picture>
                    <picture class="page" id="p2">
                      <source type="image/webp" srcset="./assests/images/freelance-02.webp">
                      <source type="image/png" srcset="./assests/images/freelance-02.png">
                      <img loading="lazy" src="./assests/images/freelance-02.png"
                        alt="Freelance Time Tracking" width="620" height="500">
                    </picture>
                    <picture class="page" id="p3">
                      <source type="image/webp" srcset="./assests/images/freelance-03.webp">
                      <source type="image/png" srcset="./assests/images/freelance-03.png">
                      <img loading="lazy" src="./assests/images/freelance-03.png"
                        alt="Freelance Time Tracking" width="620" height="500">
                    </picture>
                  </div>
                  <div class="column-left">
                    <div class="all-content">
                      <div class="text-column active" id="t1" data-section="active_Current_Tabs1">
                        <h3><i></i>Easier Invoicing</h3>
                        <p>Easily generate invoices from tracked time data, as well as keep track of job progress to make working with other freelancers much simpler and more efficient.
                        </p>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="./assests/images/freelance-01.webp">
                          <source type="image/png" srcset="./assests/images/freelance-01.png">
                          <img loading="lazy" src="./assests/images/freelance-01.png"
                            alt="Freelance Time Tracking" width="620" height="500">
                        </picture>
                      </div>
                    </div>
                    <div class="all-content">
                      <div class="text-column" id="t2" data-section="active_Current_Tabs1">
                        <h3><i></i>Timely Payments</h3>
                        <p>Workstatus will automate your payment system and send payment reminders that can help all freelancers get paid on time for the work they do. 
                        </p>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="./assests/images/freelance-02.webp">
                          <source type="image/png" srcset="./assests/images/freelance-02.png">
                          <img loading="lazy" src="./assests/images/freelance-02.png"
                            alt="Freelance Time Tracking" width="620" height="500">
                        </picture>
                      </div>
                    </div>
                    <div class="all-content">
                      <div class="text-column" id="t3" data-section="active_Current_Tabs1">
                        <h3><i></i>Organized Records</h3>
                        <p>Having all time and expense data neatly organized in the shareable reports can make it much easier to find information and establish facts when needed, helping for both bookkeeping and general planning.
                        </p>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="./assests/images/freelance-03.webp">
                          <source type="image/png" srcset="./assests/images/freelance-03.png">
                          <img loading="lazy" src="./assests/images/freelance-03.png"
                            alt="Freelance Time Tracking" width="620" height="500">
                        </picture>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?php if( geoCTAcheck() === true ) : ?>
              <div class="mt40 btnSc">
                <p>With our AI-powered freelance time tracking software, you'll<br> never have to worry about the accuracy of timesheets</p>
                <a href="<?php echo $RegLink; ?>" class="primary_btn1"><?php echo $ws_ctas['cta_text']; ?></a>
                <small>Get started now!</small>
              </div>
              <?php endif; ?>
            </div>
          </div>
          <div class="item">
            <div class="container">
              <div class="top-section">
                <h6><span class="bg-purple">Work In Collaboration</span></h6>
                <h2>Hassle-Free Time Tracking Of Freelancers With Workstatus™</h2>
                <p>With Workstatus, teams of freelancers can easily keep track of the time they are spending on specific tasks. Plus, they can measure the productivity of other freelancers to make better decisions about how to allocate tasks amongst themselves in order to maximize the output.</p>
              </div>
              <div id="active_Current_Tabs2">
                <div class="flex_row">
                  <div class="column-right">
                    <picture class="page active" id="p4">
                      <source type="image/webp" srcset="./assests/images/freelance-04.webp">
                      <source type="image/png" srcset="./assests/images/freelance-04.png">
                      <img loading="lazy" src="./assests/images/freelance-04.png"
                        alt="Freelance Time Tracking" width="628" height="563">
                    </picture>
                    <picture class="page" id="p5">
                      <source type="image/webp" srcset="./assests/images/freelance-05.webp">
                      <source type="image/png" srcset="./assests/images/freelance-05.png">
                      <img loading="lazy" src="./assests/images/freelance-05.png"
                        alt="Freelance Time Tracking" width="628" height="563">
                    </picture>
                    <picture class="page" id="p6">
                      <source type="image/webp" srcset="./assests/images/freelance-06.webp">
                      <source type="image/png" srcset="./assests/images/freelance-06.png">
                      <img loading="lazy" src="./assests/images/freelance-06.png"
                        alt="Freelance Time Tracking" width="432" height="563">
                    </picture>
                  </div>
                  <div class="column-left">
                    <div class="all-content">
                      <div class="text-column active" id="t4" data-section="active_Current_Tabs2">
                        <h3>Accurate Time Reporting</h3>
                        <p>With Workstatus freelance time tracking app, you can exactly track who is working on what, how many hours, and for how long.</p>
                        <ul class="checkList">
                          <li>Better billing and financial reporting</li>
                          <li>Optimize resources and staff allocation</li>
                        </ul>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="./assests/images/freelance-04.webp">
                          <source type="image/png" srcset="./assests/images/freelance-04.png">
                          <img loading="lazy" src="./assests/images/freelance-04.png"
                            alt="Freelance Time Tracking" width="628" height="563">
                        </picture>
                      </div>
                    </div>
                    <div class="all-content">
                      <div class="text-column" id="t5" data-section="active_Current_Tabs2">
                        <h3>Smart Activity Tracking App </h3>
                        <p>Workstatus is an agile time tracking tool for a freelancer. Visual work progress and activity tracking make way for the right direction and forecasting for future projects.</p>
                        <ul class="checkList">
                          <li>Easy to monitor progress</li>
                          <li>Identify issues with productivity</li>
                        </ul>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="./assests/images/freelance-05.webp">
                          <source type="image/png" srcset="./assests/images/freelance-05.png">
                          <img loading="lazy" src="./assests/images/freelance-05.png"
                            alt="Freelance Time Tracking" width="628" height="563">
                        </picture>
                      </div>
                    </div>
                    <div class="all-content">
                      <div class="text-column" id="t6" data-section="active_Current_Tabs2">
                        <h3>Time Tracking App for Mobile</h3>
                        <p>Access reports of hours, tasks, projects from your mobile even when you’re on the go with the Workstatus app for Android and iOS. </p>
                        <ul class="checkList">
                          <li>Manage freelancers from anywhere</li>
                          <li>Easy to handle deadlines, milestones, and payments</li>
                        </ul>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="./assests/images/freelance-06.webp">
                          <source type="image/png" srcset="./assests/images/freelance-06.png">
                          <img loading="lazy" src="./assests/images/freelance-06.png"
                            alt="Freelance Time Tracking" width="432" height="563">
                        </picture>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="mt40 btnSc">
                <p>Workstatus™ is a great way to manage Freelancers</p>
                <a href="javascript:void(0)" onclick="call_demows();" class="primary_btn1">Book A Demo</a>
                <small>Check out this demo to know more</small>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="container">
              <div class="top-section">
                <h6><span class="bg-purple">Stay Ahead of Competition</span></h6>
                <h2>Get The Edge Over Your Competing Freelancers With Workstatus™</h2>
                <p>Workstatus helps to identify opportunities for process improvement so that your freelancing teams can work more efficiently and get more work done in the same amount of time. 
                </p>
              </div>
              <div id="active_Current_Tabs3">
                <div class="flex_row">
                  <div class="column-right">
                    <picture class="page active" id="p7">
                      <source type="image/webp" srcset="./assests/images/freelance-07.webp">
                      <source type="image/png" srcset="./assests/images/freelance-07.png">
                      <img loading="lazy" src="./assests/images/freelance-07.png"
                        alt="Freelance Time Tracking" width="618" height="490">
                    </picture>
                    <picture class="page" id="p8">
                      <source type="image/webp" srcset="./assests/images/freelance-08.webp">
                      <source type="image/png" srcset="./assests/images/freelance-08.png">
                      <img loading="lazy" src="./assests/images/freelance-08.png"
                        alt="Freelance Time Tracking" width="618" height="490">
                    </picture>
                    <picture class="page" id="p9">
                      <source type="image/webp" srcset="./assests/images/freelance-09.webp">
                      <source type="image/png" srcset="./assests/images/freelance-09.png">
                      <img loading="lazy" src="./assests/images/freelance-09.png"
                        alt="Freelance Time Tracking" width="618" height="490">
                    </picture>
                  </div>
                  <div class="column-left">
                    <div class="all-content">
                      <div class="text-column active" id="t7" data-section="active_Current_Tabs3">
                        <h3><i></i>Maximize Transparency </h3>
                        <p>With precise activity monitoring and screenshot capturing you’ll be able to track what your freelance teams are doing during work hours. The increased transparency will help you better manage the payment cycle and rates. </p>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="./assests/images/freelance-07.webp">
                          <source type="image/png" srcset="./assests/images/freelance-07.png">
                          <img loading="lazy" src="./assests/images/freelance-07.png"
                            alt="Freelance Time Tracking" width="618" height="490">
                        </picture>
                      </div>
                    </div>
                    <div class="all-content">
                      <div class="text-column" id="t8" data-section="active_Current_Tabs3">
                        <h3><i></i>In-built Task Sheet</h3>
                        <p>Manage tasks of your freelancing teams by assigning them in the Workstatus dashboard. Your team members can track their activities, productivity percentage, and hours spent in their dashboard as well.</p>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="./assests/images/freelance-08.webp">
                          <source type="image/png" srcset="./assests/images/freelance-08.png">
                          <img loading="lazy" src="./assests/images/freelance-08.png"
                            alt="Freelance Time Tracking" width="618" height="490">
                        </picture>
                      </div>
                    </div>
                    <div class="all-content">
                      <div class="text-column" id="t9" data-section="active_Current_Tabs3">
                        <h3><i></i>Easy Project Management</h3>
                        <p>Manage your projects effortlessly within other freelancers, keeping proof of work and accurate timesheets for client reference.</p>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="./assests/images/freelance-09.webp">
                          <source type="image/png" srcset="./assests/images/freelance-09.png">
                          <img loading="lazy" src="./assests/images/freelance-09.png"
                            alt="Freelance Time Tracking" width="618" height="490">
                        </picture>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?php if( geoCTAcheck() === true ) : ?>
              <div class="mt40 btnSc">
                <p>Start Using Workstatus™ Freelancers’ Time Tracking<br> Software Right Away!</p>
                <a href="<?php echo $RegLink; ?>" class="primary_btn1"><?php echo $ws_ctas['cta_text']; ?></a>
                <small>It’s Worth</small>
              </div>
              <?php endif; ?>
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
              <h2>Know How Freelancers Appreciate Workstatus™?</h2>
            </div>
            <div class="glider-testimonial">
              <div class="glider-contain">
                <div class="glider2">
                  <div>
                    <p class="white">“ Workstatus is a time tracking software that is designed specifically for freelancers. It's easy to use and helps you stay organized by tracking billable hours, deadlines, and project progress. ”</p>
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
                        <p class="para_extrasmall white">Laura Hayden, Australia</p>
                      </div>
                    </div>
                  </div>
                  <div>
                    <p class="white">“ Since I started using Workstatus, my productivity has increased because I no longer have to worry about lost or forgotten work tasks. The invoicing feature is also beneficial because it creates professional invoices with just a few clicks. Overall, I'm really happy with this software and would recommend it to anyone who freelances regularly. ”</p>
                    <div class="border"><span class="element-triangle"></span></div>
                    <div class="author-box">
                      <picture>
                        <source type="image/webp" srcset="./assests/images/avatar.webp">
                        <source type="image/png" srcset="./assests/images/avatar.png">
                        <img loading="lazy" src="./assests/images/avatar.png" alt="Alex" width="54"
                          height="54">
                      </picture>
                      <div class="author-content">
                        <p class="para_extrasmall white">Adam Hopkins, USA</p>
                      </div>
                    </div>
                  </div>
                  <div>
                    <p class="white">“ Workstatus is easy to use and helps you track your time spent on each task. You can also create reports to help you understand where you are spending the most time. The software also integrates with invoicing to easily invoice your clients for the work you have done.</p>
                    <div class="border"><span class="element-triangle"></span></div>
                    <div class="author-box">
                      <picture>
                        <source type="image/webp" srcset="./assests/images/avatar.webp">
                        <source type="image/png" srcset="./assests/images/avatar.png">
                        <img loading="lazy" src="./assests/images/avatar.png" alt="Larry" width="54"
                          height="54">
                      </picture>
                      <div class="author-content">
                        <p class="para_extrasmall white">Chris Williams, South Africa</p>
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
                    <h3 itemprop="name">How can time-tracking benefit freelancers?
                    </h3>
                    <div class="faq-accordion-content">
                      <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div itemprop="text">
                          <p>Time-tracking can benefit freelancers in a few ways. First, it can help you stay organized and on track with your work. It can also help you better measure how long tasks take you to complete so that you can invoice clients more accurately. Additionally, time-tracking can help you identify which tasks are taking up the most time so that you can focus on streamlining those processes. Finally, time-tracking can help build a better case for raises or promotions, as it provides concrete evidence of your productivity and impact.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="faq-accordion-item-outer" itemscope itemprop="mainEntity"
                    itemtype="https://schema.org/Question">
                    <h3 itemprop="name">How do freelancers use time tracking data to improve performance?</h3>
                    <div class="faq-accordion-content">
                      <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div itemprop="text">
                          <p>Time tracking data can help freelancers improve their performance by identifying what tasks are taking up the most time and helping to identify areas that could be streamlined or eliminated.</p>
                          <p>Similarly, time tracking data can also help freelancers identify where they might be able to speed up their work process without sacrificing quality. This can result in increased productivity and a higher hourly rate.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="faq-accordion-item-outer" itemscope itemprop="mainEntity"
                    itemtype="https://schema.org/Question">
                    <h3 itemprop="name">Which is the best time tracking software for freelancers?</h3>
                    <div class="faq-accordion-content">
                      <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div itemprop="text">
                          <p>Workstatus is an excellent time tracking software for freelancers because it's easy to use and helps you stay on top of your work.</p>
                          <p>With Workstatus, you can easily track your time by project and see how much time you've spent on each project. You can also track your expenses, invoices, and payments to have a clear overview of your business finances. Plus, you can create reports to help you make better decisions about where to focus your time and energy.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="faq-accordion-item-outer" itemscope itemprop="mainEntity"
                    itemtype="https://schema.org/Question">
                    <h3 itemprop="name">How is the Workstatus freelance time tracker different from other time trackers?</h3>
                    <div class="faq-accordion-content">
                      <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div itemprop="text">
                          <p>WThe Workstatus freelance time tracker is different from other time trackers in the following ways:</p>
                          <ul>
                            <li>It allows you to see how much time you've spent on a project at a glance, so you can easily invoice your clients.</li>
                            <li>You can add notes to each entry to keep track of what you did during that time and communicate it to your client later.</li>
                            <li>It has a built-in timer to break up your work into manageable chunks and stay productive throughout the day.</li>
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
                <a href="https://www.workstatus.io/blog/attention-find-top-9-unheard-secrets-behind-the-most-productive-people/" class="blog-link">
                  <div class="thumb">
                    <picture>
                      <source type="image/webp" srcset="./assests/images/useful-resources-blog-1.jpg">
                      <source type="image/png" srcset="./assests/images/useful-resources-blog-1.jpg">
                      <img loading="lazy" src="./assests/images/useful-resources-blog-1.jpg" alt="Workstatus Time" width="400" height="242"> 
                    </picture>
                  </div>
                  <div class="blog-title">
                    <h3>Top 9 Unheard Secrets  Behind The Most Productive People</h3>
                    <span class="small_anchor">Read more</span>
                  </div>
                </a>
              </div>
              <div class="blog-box column-three">
                <a href="https://www.workstatus.io/blog/tips-for-perfecting-the-art-of-workload-management/" class="blog-link">
                  <div class="thumb">
                    <picture>
                      <source type="image/webp" srcset="./assests/images/useful-resources-blog-2.jpg">
                      <source type="image/png" srcset="./assests/images/useful-resources-blog-2.jpg">
                      <img loading="lazy" src="./assests/images/useful-resources-blog-2.jpg" alt="Workstatus Time" width="400" height="242"> 
                    </picture>
                  </div>
                  <div class="blog-title">
                    <h3>Perfecting The Art Of Workload Management</h3>
                    <span class="small_anchor">Read more</span>
                  </div>
                </a>
              </div>
              <div class="blog-box column-three">
                <a href="https://www.workstatus.io/blog/why-your-business-needs-online-timesheets-benefits-user-manual/" class="blog-link">
                  <div class="thumb">
                    <picture>
                      <source type="image/webp" srcset="./assests/images/useful-resources-blog-3.jpg">
                      <source type="image/png" srcset="./assests/images/useful-resources-blog-3.jpg">
                      <img loading="lazy" src="./assests/images/useful-resources-blog-3.jpg" alt="Workstatus Time" width="400" height="242"> 
                    </picture>
                  </div>
                  <div class="blog-title">
                    <h3>Know Why Your Business Needs Online Timesheets, Their Benefits & User Manual</h3>
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
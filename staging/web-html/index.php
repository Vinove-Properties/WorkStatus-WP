<?php require_once 'common/inc/config.inc.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="alternate" href="https://www.workstatus.io/" hreflang="en-us" />
    <link type="text/css" href="assests/css/index.css" rel="preload stylesheet" as="style" />
    <?php require_once 'common/inc/header-files.php';?>
  </head>
  <body>
    <?php require_once 'common/inc/after-body-tag.php'; ?>
    <div class="body__wrapper page__home">
      <div class="feature-header"><?php require_once 'common/menu-v4.php';?></div>
      <main class="site__content">
        <section class="banner-section">
          <div class="home-section">
            <div class="container">
              <div class="flex_row">
                <div class="column column-content">
                  <!--<h6><span class="bg-purple">With Integrated Workforce Analytics</span></h6>-->
                  <h1>Empower Your Organization with Boosted Productivity </strong>
                  </h1>
                  <p>Empower Efficiency, Enhance Communication, and Drive Growth! 
                  </p>
                  <ul>
                    <li>Optimize Operations with Time Tracking</li>
                    <li>Monitor Employee Performance</li>
                    <li>Data-Driven Decisions with Analytics</li>
                  </ul>
                  <div class="actionBtn">
                    <?php if( geoCTAcheck() === true ) : ?>
                    <div><a href="<?php echo $RegLink; ?>" class="primary_btn1"><?php echo $ws_ctas['cta_text']; ?></a>
                      <small>No credit card required</small>
                    </div>
                    <?php endif; ?>
                    <div><a href="javascript:void(0)" onclick="call_demows();" class="primary_btn2 formbtn">Book A Demo</a>
                      <small>Get queries answered from experts</small>
                    </div>
                  </div>
                </div>
                <div class="column videoSc" id="has-yt-video">
                  <div class="award-badges">
                    <picture>
                      <img loading="lazy" src="./assests/images/award-01.svg" alt="award" width="72" height="94">
                    </picture>
                    <picture>
                      <img loading="lazy" src="./assests/images/award-02.svg" alt="award" width="72" height="94">
                    </picture>
                    <picture>
                      <img loading="lazy" src="./assests/images/award-03.svg" alt="award" width="72" height="94">
                    </picture>
                    <picture>
                      <img loading="lazy" src="./assests/images/award-04.svg" alt="award" width="72" height="94">
                    </picture>
                    <picture>
                      <img loading="lazy" src="./assests/images/award-05.svg" alt="award" width="72" height="94">
                    </picture>
                    <picture>
                      <img loading="lazy" src="./assests/images/award-06.svg" alt="award" width="72" height="94">
                    </picture>
                  </div>
                  <div class="inner">
                    <button id="myBtn">
                      Open Modal  
                      <div class="playsc"><span class="playicon"></span></div>
                    </button>
                    <div class="topVideo srp-1">
                      <div id="myDIV" class="contbox2">
                        <div class="videoWrapper js-videoWrapper">
                          <div class="videoPopup">
                            <div id="contentPopup" class="popup-wrapper">
                              <div class="popWrap">
                                <div class="popup-content">
                                  <span class="close"></span>
                                  <iframe id="video" class="videoIframe js-videoIframe" allowfullscreen
                                    data-src="https://www.youtube.com/embed/zMtAs7s3CmU?enablejsapi=1&html5=1&mute=1">
                                  </iframe>
                                </div>
                              </div>
                            </div>
                          </div>
                          <button class="videoPoster lazy-background" id="play-button">
                          Play video
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="trustedpartner">
                  <!-- <h6>Trusted by 40,000+ businesses</h6>
                    <div class="brands_row">
                      <picture>
                        <source type="image/webp" srcset="./assests/images/trustedpartner-image.webp">
                        <source type="image/png" srcset="./assests/images/trustedpartner-image.png">
                        <img loading="lazy" src="./assests/images/trustedpartner-image.png" width="1238"
                          height="43" alt="businesses">
                      </picture>
                    </div> -->
                </div>
              </div>
            </div>
          </div>
        </section>
        <div class="partwrap">
          <div class="container">
            <div class="partner-div">
              <div class="part-col">
                <i class="part-logo part-logo1"></i>
                <p><strong>5</strong>/5</p>
                <i class="star-icon"><img loading="lazy" src="./assests/images/star-icon1.svg"
                  alt="star" width="112" height="17"></i>
              </div>
              <div class="part-col">
                <i class="part-logo part-logo2"></i>
                <p><strong>4.3</strong>/5</p>
                <i class="star-icon"><img loading="lazy" src="./assests/images/star-icon2.svg"
                  alt="star" width="112" height="17"></i>
              </div>
              <div class="part-col">
                <i class="part-logo part-logo3"></i>
                <p><strong>4.4</strong>/5</p>
                <i class="star-icon"><img loading="lazy" src="./assests/images/star-icon3.svg"
                  alt="star" width="112" height="17"></i>
              </div>
              <div class="part-col">
                <i class="part-logo part-logo4"></i>
                <p><strong>4.7</strong>/5</p>
                <i class="star-icon"><img loading="lazy" src="./assests/images/star-icon4.svg"
                  alt="star" width="112" height="17"></i>
              </div>
              <div class="part-col">
                <i class="part-logo part-logo5"></i>
                <p><strong>4.5</strong>/5</p>
                <i class="star-icon"><img loading="lazy" src="./assests/images/star-icon3.svg"
                  alt="star" width="112" height="17"></i>
              </div>
            </div>
          </div>
        </div>
        <section class="workplace-section">
          <div class="container">
            <div class="top-section">
              <h6><span class="bg-purple">WORK SMARTER WITH ONE-STOP-SOLUTION</span></h6>
              <h2>Enhance Productivity & Profitability</h2>
              <p>Streamline your processes, automate tasks, and get the most out of your existing resources for improved efficiency and bottom line.
              </p>
            </div>
            <div class="flex_row">
              <div class="column-three">
                <h3>Productive workforce</h3>
                <p>With Workstatus, you will see an increase in productivity by 30 percent. This highly-advanced solution lets you:</p>
                <ul>
                  <li>Manage time with the help of time-usage reports</li>
                  <li>Improve system usage habits and track visited URLs</li>
                  <li>Identify and clear bottlenecks</li>
                </ul>
              </div>
              <div class="column-three">
                <h3>Improved ROI</h3>
                <p>Attain an ROI of 40 percent on your projects with the help of workforce analytics. You can also:</p>
                <ul>
                  <li>Assign projects to right resources</li>
                  <li>Get insights on time, projects, and resources</li>
                  <li>Take data-driven, informed decisions</li>
                  <li>Track & bill employee hours accurately</li>
                </ul>
              </div>
              <div class="column-three">
                <h3>Stay Organized</h3>
                <p>Stay more organized and achieve up to 25 percent enhanced efficiency with the automated tracking feature of Workstatus. You can:</p>
                <ul>
                  <li>Track your tasks and projects</li>
                  <li>Monitor progress of your team in real-time</li>
                  <li>Automate reports and save time</li>
                  <li>Manage schedules and shifts</li>
                </ul>
              </div>
            </div>
          </div>
        </section>
        <section class="middle-section">
          <div class="item">
            <div class="container">
              <div class="top-section">
                <h6><span class="bg-purple">AMPLIFY GROWTH</span></h6>
                <h2>Monitor Employees To Improve Overall Efficiency</h2>
                <p>Get real-time updates on employee performance and increase efficiency by using a combination of workforce management features. With automated tracking and reporting, stay updated on the progress of projects, evaluate performance trends and create forecasts to plan more effectively. 
                </p>
              </div>
              <div id="active_Current_Tabs1">
                <div class="flex_row">
                  <div class="column-left">
                    <div class="all-content">
                      <div class="text-column active" id="t1" data-section="active_Current_Tabs1">
                        <h3><i class="icon1"></i>Time Tracking</h3>
                        <p>Track the time of your employees, like time spent on each task, project, and client. Get detailed reports to analyze productivity and automate timesheets for complete transparency on assigned tasks.
                        </p>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="./assests/images/tab-image-01.webp">
                          <source type="image/png" srcset="./assests/images/tab-image-01.png">
                          <img loading="lazy" src="./assests/images/tab-image-01.png"
                            alt="employee management system" width="633" height="645">
                        </picture>
                      </div>
                    </div>
                    <div class="all-content">
                      <div class="text-column" id="t2" data-section="active_Current_Tabs1">
                        <h3><i class="icon2"></i>Productivity Measurement</h3>
                        <p>Track the daily productivity percentage of your employees. Analyze productivity trends, explore the scope of improvement and streamline your operations. It is key to enhancing your ROI and customer satisfaction.
                        </p>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="./assests/images/tab-image-02.webp">
                          <source type="image/png" srcset="./assests/images/tab-image-02.png">
                          <img loading="lazy" src="./assests/images/tab-image-01.png"
                            alt="Productivity Measurement" width="659" height="552">
                        </picture>
                      </div>
                    </div>
                    <div class="all-content">
                      <div class="text-column" id="t3" data-section="active_Current_Tabs1">
                        <h3><i class="icon3"></i>Mobile/App Activity Tracking</h3>
                        <p>Now, you can track websites visited and apps used by your employees during work hours. Check internet usage to prevent data theft and misuse of resources.
                        </p>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="./assests/images/tab-image-03.webp">
                          <source type="image/png" srcset="./assests/images/tab-image-03.png">
                          <img loading="lazy" src="./assests/images/tab-image-03.png"
                            alt="workforce tracking" width="664" height="492">
                        </picture>
                      </div>
                    </div>
                    <div class="all-content">
                      <div class="text-column" id="t4" data-section="active_Current_Tabs1">
                        <h3><i class="icon4"></i>Regular Screenshots</h3>
                        <p>Monitor the system activities of your employees with the regular screenshots feature of the solution. Keep tabs on progress, compliance with regulations, and quality assurance, all while staying one step ahead of potential security issues or policy violations.
                        </p>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="./assests/images/tab-image-04.webp">
                          <source type="image/png" srcset="./assests/images/tab-image-04.png">
                          <img loading="lazy" src="./assests/images/tab-image-04.png"
                            alt="workforce tracking software" width="663" height="638">
                        </picture>
                      </div>
                    </div>
                  </div>
                  <div class="column-right">
                    <picture class="page active" id="p1">
                      <source type="image/webp" srcset="./assests/images/tab-image-01.webp">
                      <source type="image/png" srcset="./assests/images/tab-image-01.png">
                      <img loading="lazy" src="./assests/images/tab-image-01.png" alt="employee management system"
                        width="633" height="645">
                    </picture>
                    <picture class="page" id="p2">
                      <source type="image/webp" srcset="./assests/images/tab-image-02.webp">
                      <source type="image/png" srcset="./assests/images/tab-image-02.png">
                      <img loading="lazy" src="./assests/images/tab-image-01.png"
                        alt="Productivity Measurement" width="659" height="552">
                    </picture>
                    <picture class="page" id="p3">
                      <source type="image/webp" srcset="./assests/images/tab-image-03.webp">
                      <source type="image/png" srcset="./assests/images/tab-image-03.png">
                      <img loading="lazy" src="./assests/images/tab-image-03.png"
                        alt="workforce tracking" width="664" height="492">
                    </picture>
                    <picture class="page" id="p4">
                      <source type="image/webp" srcset="./assests/images/tab-image-04.webp">
                      <source type="image/png" srcset="./assests/images/tab-image-04.png">
                      <img loading="lazy" src="./assests/images/tab-image-04.png"
                        alt="workforce tracking software" width="663" height="638">
                    </picture>
                  </div>
                </div>
              </div>
              <div class="ctasec mt80">
                <div><a href="https://app.workstatus.io/auth/register/?pid=1&type=monthly" class="ctbtn">Start Free Trial</a>
                  <span class="nccr">No credit card required</span>
                </div>
                <span class="devide">OR</span>
                <div><a href="javascript:void(0)" class="ctbtn nobg" href="#contactus" onclick="call_demows();" target="_self">Book A Demo</a></div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="container">
              <div class="top-section">
                <h6><span class="bg-purple">GET MORE OUT OF YOUR PROJECTS</span></h6>
                <h2>Smart Insights To Make Smart Decisions</h2>
                <p>With detailed project management analytics by Workstatus, make data-driven decisions that help you get the most out of your team and projects. Get access to smart insights to ensure the success of your projects.
                </p>
              </div>
              <div id="active_Current_Tabs2">
                <div class="flex_row">
                  <div class="column-left">
                    <div class="all-content">
                      <div class="text-column active" id="t5" data-section="active_Current_Tabs2">
                        <h3><i class="icon5"></i>Fix Revenue Leaks</h3>
                        <p>Keep track of all billable hours and ensure these are utilized well towards committed deliveries. Note how the billable hours are best utilized and raise invoices for every second spent for clients.
                        </p>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="./assests/images/tab-image-05.webp">
                          <source type="image/png" srcset="./assests/images/tab-image-05.png">
                          <img loading="lazy" src="./assests/images/tab-image-05.png"
                            alt="workforce time management software" width="463" height="453">
                        </picture>
                      </div>
                    </div>
                    <div class="all-content">
                      <div class="text-column" id="t6" data-section="active_Current_Tabs2">
                        <h3><i class="icon6"></i>Reduced Employee Distractions</h3>
                        <p>By tracking employee activities, you can identify distractions and address them before they start hampering the efficiency of your employees. You can also identify and block sites posing a threat to your data security. 
                        </p>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="./assests/images/tab-image-06.webp">
                          <source type="image/png" srcset="./assests/images/tab-image-06.png">
                          <img loading="lazy" src="./assests/images/tab-image-06.png"
                            alt="online workforce management software" width="463" height="453">
                        </picture>
                      </div>
                    </div>
                    <div class="all-content">
                      <div class="text-column" id="t7" data-section="active_Current_Tabs2">
                        <h3><i class="icon7"></i>Controlled Project Budgets</h3>
                        <p>With Workstatus, easily keep track of the budget and make sure expenses don't get out of hand. Set upper limits and budgets for each project and efficiently control the spending.
                        </p>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="./assests/images/tab-image-07.webp">
                          <source type="image/png" srcset="./assests/images/tab-image-07.png">
                          <img loading="lazy" src="./assests/images/tab-image-07.png"
                            alt="workforce time tracking" width="463" height="453">
                        </picture>
                      </div>
                    </div>
                    <div class="all-content">
                      <div class="text-column" id="t8" data-section="active_Current_Tabs2">
                        <h3><i class="icon8"></i>Improved Project Deliveries</h3>
                        <p>Allocate tasks and keep a tab on progress & deadlines in real-time. Identify discrepancies in progress and make informed decisions to ensure timely deliveries and subsequent invoicing.
                        </p>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="./assests/images/tab-image-08.webp">
                          <source type="image/png" srcset="./assests/images/tab-image-08.png">
                          <img loading="lazy" src="./assests/images/tab-image-08.png"
                            alt="workforce monitoring software" width="463" height="453">
                        </picture>
                      </div>
                    </div>
                  </div>
                  <div class="column-right">
                    <picture class="page active" id="p5">
                      <source type="image/webp" srcset="./assests/images/tab-image-05.webp">
                      <source type="image/png" srcset="./assests/images/tab-image-05.png">
                      <img loading="lazy" src="./assests/images/tab-image-05.png"
                        alt="workforce time management software" width="463" height="453">
                    </picture>
                    <picture class="page" id="p6">
                      <source type="image/webp" srcset="./assests/images/tab-image-06.webp">
                      <source type="image/png" srcset="./assests/images/tab-image-06.png">
                      <img loading="lazy" src="./assests/images/tab-image-06.png"
                        alt="online workforce management software" width="463" height="453">
                    </picture>
                    <picture class="page" id="p7">
                      <source type="image/webp" srcset="./assests/images/tab-image-07.webp">
                      <source type="image/png" srcset="./assests/images/tab-image-07.png">
                      <img loading="lazy" src="./assests/images/tab-image-07.png"
                        alt="workforce time tracking" width="463" height="453">
                    </picture>
                    <picture class="page" id="p8">
                      <source type="image/webp" srcset="./assests/images/tab-image-08.webp">
                      <source type="image/png" srcset="./assests/images/tab-image-08.png">
                      <img loading="lazy" src="./assests/images/tab-image-08.png"
                        alt="Improved Project Deliveries" width="463" height="453">
                    </picture>
                  </div>
                </div>
              </div>
              <div class="mt40 btnSc">
                <p>Run More Profitably!</p>
                <a href="javascript:void(0)" onclick="call_demows();" class="primary_btn1">Book A Demo</a>
                <small>Get queries answered from experts</small>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="container">
              <div class="top-section">
                <h6><span class="bg-purple">EMPOWERING WORKFLOW & WORKFORCE </span></h6>
                <h2>Build A Self-Starter Work Culture</h2>
                <p>To succeed, your business needs to be equipped with the right and timely insights. 
                </p>
              </div>
              <div id="active_Current_Tabs3">
                <div class="flex_row">
                  <div class="column-left">
                    <div class="all-content">
                      <div class="text-column active" id="t9" data-section="active_Current_Tabs3">
                        <h3><i class="icon9"></i>Performance Driven Workforce</h3>
                        <p>Build a self-starter culture where employees are empowered by their tracking and reporting system. It will enable them to see how their working pattern looks and where they can increase productivity.
                        </p>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="./assests/images/tab-image-09.webp">
                          <source type="image/png" srcset="./assests/images/tab-image-09.png">
                          <img loading="lazy" src="./assests/images/tab-image-09.png"
                            alt="workforce time management software" width="664" height="613">
                        </picture>
                      </div>
                    </div>
                    <div class="all-content">
                      <div class="text-column" id="t10" data-section="active_Current_Tabs3">
                        <h3><i class="icon10"></i>Technology Driven Workplace</h3>
                        <p>Workstatus automates the entire Workforce Management (WFM) system for quick tracking, intelligent dashboard, and accurate reports. The entire system, which was otherwise time-taking, now becomes easy to manage.
                        </p>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="./assests/images/tab-image-10.webp">
                          <source type="image/png" srcset="./assests/images/tab-image-10.png">
                          <img loading="lazy" src="./assests/images/tab-image-10.png"
                            alt="employee management system" width="652" height="585">
                        </picture>
                      </div>
                    </div>
                    <div class="all-content">
                      <div class="text-column" id="t11" data-section="active_Current_Tabs3">
                        <h3><i class="icon11"></i>Optimized Processes - Maximized Profits</h3>
                        <p>Identify which tasks and projects are most profitable. Put the right people for the right tasks to maximize profits.
                        </p>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="./assests/images/tab-image-11.webp">
                          <source type="image/png" srcset="./assests/images/tab-image-11.png">
                          <img loading="lazy" src="./assests/images/tab-image-11.png"
                            alt="best workforce management software" width="706" height="531">
                        </picture>
                      </div>
                    </div>
                  </div>
                  <div class="column-right">
                    <picture class="page active" id="p9">
                      <source type="image/webp" srcset="./assests/images/tab-image-09.webp">
                      <source type="image/png" srcset="./assests/images/tab-image-09.png">
                      <img loading="lazy" src="./assests/images/tab-image-09.png"
                        alt="workforce time management software" width="664" height="613">
                    </picture>
                    <picture class="page" id="p10">
                      <source type="image/webp" srcset="./assests/images/tab-image-10.webp">
                      <source type="image/png" srcset="./assests/images/tab-image-10.png">
                      <img loading="lazy" src="./assests/images/tab-image-10.png"
                        alt="employee management system" width="652" height="585">
                    </picture>
                    <picture class="page" id="p11">
                      <source type="image/webp" srcset="./assests/images/tab-image-11.webp">
                      <source type="image/png" srcset="./assests/images/tab-image-11.png">
                      <img loading="lazy" src="./assests/images/tab-image-11.png"
                        alt="best workforce management software" width="706" height="531">
                    </picture>
                  </div>
                </div>
              </div>
              <?php if( geoCTAcheck() === true ) : ?>
              <div class="mt40 btnSc">
                <p>Sooner the Better!</p>
                <a href="<?php echo $RegLink; ?>" class="primary_btn1"><?php echo $ws_ctas['cta_text']; ?></a>
                <small>Quickly get your team on-board!</small>
              </div>
              <?php endif; ?>
            </div>
          </div>
          <div class="item">
            <div class="container">
              <div class="top-section">
                <h6><span class="bg-purple">AN ALL-IN-ONE SOLUTION</span></h6>
                <h2>Reliable Employee Management Software For Every Team</h2>
                <p>Workstatus is a suite of tracking and monitoring tools to manage your workforce
                  effectively and work in
                  an informed manner for every team working in different roles and conditions.
                </p>
              </div>
              <div id="active_Current_Tabs4">
                <div class="flex_row">
                  <div class="column-left">
                    <div class="all-content">
                      <div class="text-column active" id="t12" data-section="active_Current_Tabs4">
                        <h3><i class="icon12"></i>In-house Employees</h3>
                        <p>With Workstatus, track and monitor in-house/office teams by automating the entire process from one central platform.
                        </p>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="./assests/images/tab-image-12.webp">
                          <source type="image/png" srcset="./assests/images/tab-image-12.png">
                          <img loading="lazy" src="./assests/images/tab-image-12.png"
                            alt="In-house Employees" width="683" height="502">
                        </picture>
                      </div>
                      <div class="all-content">
                        <div class="text-column" id="t13" data-section="active_Current_Tabs4">
                          <h3><i class="icon13"></i>Hybrid/Work From Home Employees</h3>
                          <p>The time-tracking and monitoring features of Workstatus let you efficiently manage teams working in WFH or hybrid arrangements. 
                          </p>
                        </div>
                        <div class="mob-image">
                          <picture>
                            <source type="image/webp"
                              srcset="./assests/images/tab-image-13.webp">
                            <source type="image/png" srcset="./assests/images/tab-image-13.png">
                            <img loading="lazy" src="./assests/images/tab-image-13.png"
                              alt="Hybrid/Work From Home Employees" width="683" height="493">
                          </picture>
                        </div>
                      </div>
                      <div class="all-content">
                        <div class="text-column" id="t14" data-section="active_Current_Tabs4">
                          <h3><i class="icon14"></i>Remote Employees</h3>
                          <p>The geofencing feature ensures that remote employees are at their designated workspaces for their shifts and working as per their scheduled hours.
                          </p>
                        </div>
                        <div class="mob-image">
                          <picture>
                            <source type="image/webp"
                              srcset="./assests/images/tab-image-14.webp">
                            <source type="image/png" srcset="./assests/images/tab-image-14.png">
                            <img loading="lazy" src="./assests/images/tab-image-14.png"
                              alt="Remote Employees" width="641" height="568">
                          </picture>
                        </div>
                      </div>
                      <div class="all-content">
                        <div class="text-column" id="t15" data-section="active_Current_Tabs4">
                          <h3><i class="icon15"></i>Field Employees</h3>
                          <p>Track your field employees without interrupting them. Track their location with GPS and ensure they are where they are supposed to be and working productively.
                          </p>
                        </div>
                        <div class="mob-image">
                          <picture>
                            <source type="image/webp"
                              srcset="./assests/images/tab-image-15.webp">
                            <source type="image/png" srcset="./assests/images/tab-image-15.png">
                            <img loading="lazy" src="./assests/images/tab-image-15.png"
                              alt="Field Employees" width="656" height="567">
                          </picture>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="column-right">
                    <picture class="page active" id="p12">
                      <source type="image/webp" srcset="./assests/images/tab-image-12.webp">
                      <source type="image/png" srcset="./assests/images/tab-image-12.png">
                      <img loading="lazy" src="./assests/images/tab-image-12.png"
                        alt="In-house Employees" width="683" height="502">
                    </picture>
                    <picture class="page" id="p13">
                      <source type="image/webp" srcset="./assests/images/tab-image-13.webp">
                      <source type="image/png" srcset="./assests/images/tab-image-13.png">
                      <img loading="lazy" src="./assests/images/tab-image-13.png"
                        alt="Hybrid/Work From Home Employees" width="683" height="493">
                    </picture>
                    <picture class="page" id="p14">
                      <source type="image/webp" srcset="./assests/images/tab-image-14.webp">
                      <source type="image/png" srcset="./assests/images/tab-image-14.png">
                      <img loading="lazy" src="./assests/images/tab-image-14.png"
                        alt="Remote Employees" width="641" height="568">
                    </picture>
                    <picture class="page" id="p15">
                      <source type="image/webp" srcset="./assests/images/tab-image-15.webp">
                      <source type="image/png" srcset="./assests/images/tab-image-15.png">
                      <img loading="lazy" src="./assests/images/tab-image-15.png"
                        alt="Field Employees" width="656" height="567">
                    </picture>
                  </div>
                </div>
              </div>
              <?php if( geoCTAcheck() === true ) : ?>
              <div class="mt40 btnSc">
                <p>Whatever size, whatever type your workforce<br> is, Workstatus™ manages it for you</p>
                <a href="<?php echo $RegLink; ?>" class="primary_btn1"><?php echo $ws_ctas['cta_text']; ?></a>
                <small>No credit card required</small>
              </div>
              <?php endif; ?>
            </div>
          </div>
        </section>
        <section class="number-speak-section text_center">
          <div class="container">
            <div class="top-section">
              <h6><span class="bg-purple">For Efficient Workplace</span></h6>
              <h2>Let Numbers Speak for Workstatus</h2>
            </div>
            <div class="flex_row">
              <div class="column-three">
                <i class="icon1"></i>
                <div class="number-content">
                  <h3>+28%</h3>
                  <p>Efficient Processes</p>
                </div>
              </div>
              <div class="column-three">
                <i class="icon2"></i>
                <div class="number-content">
                  <h3>+15%</h3>
                  <p>Improved Attendance</p>
                </div>
              </div>
              <div class="column-three">
                <i class="icon3"></i>
                <div class="number-content">
                  <h3>+34%</h3>
                  <p>Increased Productivity</p>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="management-software bglight">
          <div class="container">
            <div class="top-section">
              <h6><span class="bg-purple">Managers’ Choice</span></h6>
              <h2>Find Out How Workstatus™ Can Help You</h2>
              <p>More than 15 industries have shown their trust and love for Workstatus,as they have proof by
                the way of<br>
                improving numbers
              </p>
            </div>
            <div class="flex_row align-center">
              <div class="column-left">
                <ul>
                  <li><a href="<?php echo SITE_URL; ?>/industry/accounting"><i class="icon1"></i>Accounting</a>
                  </li>
                  <li><a href="<?php echo SITE_URL; ?>/industry/real-estate"><i class="icon2"></i>Real State</a></li>
                  <li><a href="<?php echo SITE_URL; ?>/industry/consultant"><i class="icon3"></i>Consultant</a></li>
                  <li><a href="<?php echo SITE_URL; ?>/industry/architects-and-engineers"><i class="icon4"></i>Architects &amp;
                    Engineer</a>
                  </li>
                  <li><a href="<?php echo SITE_URL; ?>/industry/healthcare"><i class="icon5"></i>Healthcare</a></li>
                  <li><a href="<?php echo SITE_URL; ?>/industry/design"><i class="icon6"></i>Design</a></li>
                  <li><a href="<?php echo SITE_URL; ?>/industry/agency"><i class="icon7"></i>Agency</a></li>
                  <li><a href="<?php echo SITE_URL; ?>/industry/landscaping"><i class="icon8"></i>Landscaping</a></li>
                  <li> <a href="<?php echo SITE_URL; ?>/industry/construction"><i class="icon9"></i>Construction</a> </li>
                  <li><a href="<?php echo SITE_URL; ?>/industry/software-development"><i class="icon10"></i>Software
                    Development</a>
                  </li>
                  <li> <a href="<?php echo SITE_URL; ?>/industry/time-tracking-app-for-janitorial-services"> <i
                    class="icon11"></i>Janitorial
                    Services</a> 
                  </li>
                  <li><a href="<?php echo SITE_URL; ?>/industry/attorney"><i class="icon12"></i>Attorney</a></li>
                  <li><a href="<?php echo SITE_URL; ?>/industry/manufacturing"><i class="icon13"></i>Manufacturing</a></li>
                  <li><a href="<?php echo SITE_URL; ?>/industry/e-commerce"><i class="icon14"></i>E-Commerce</a></li>
                  <li><a href="<?php echo SITE_URL; ?>/industry/e-commerce"><i class="icon15"></i>Staffing & Recruiting</a></li>
                  <li><a href="<?php echo SITE_URL; ?>/industry/e-commerce"><i class="icon16"></i>CX & Contact Center</a></li>
                  <li><a href="<?php echo SITE_URL; ?>/industry/e-commerce"><i class="icon17"></i>BPO & KPO</a></li>
                </ul>
              </div>
              <div class="column-right">
                <picture>
                  <source type="image/webp" srcset="./assests/images/management-image.webp">
                  <source type="image/png" srcset="./assests/images/management-image.png">
                  <img loading="lazy" src="./assests/images/management-image.png" width="408" height="404"
                    alt="Employee management system">
                </picture>
              </div>
            </div>
            <div class="mt40 btnSc text_center">
              <a href="javascript:void(0)" onclick="call_demows();" class="primary_btn1">Book A Demo</a>
              <small>Get queries answered from experts</small>
            </div>
          </div>
        </section>
        <section class="productivity">
          <div class="container">
            <div class="top-section">
              <h6><span class="bg-white">Workstatus Offers</span></h6>
              <h2>The Productivity Suites</h2>
              <p>A complete suite for time tracking, workforce, and project management.</p>
            </div>
            <div class="ws_products">
              <div class="ws_product">
                <a href="/time">
                  <div class="thumb">
                    <picture>
                      <source type="image/webp" srcset="./assests/images/home-product-image-1.webp">
                      <source type="image/png" srcset="./assests/images/home-product-image-1.png">
                      <img loading="lazy" src="./assests/images/home-product-image-1.png"
                        alt="Workstatus Time" width="274" height="183">
                    </picture>
                  </div>
                  <div class="product_title">
                    <h4><strong>Workstatus</strong> Time</h4>
                    <p>Simple time tracking and reporting</p>
                  </div>
                </a>
              </div>
              <div class="ws_product">
                <a href="/desk">
                  <div class="thumb">
                    <picture>
                      <source type="image/webp" srcset="./assests/images/home-product-image-2.webp">
                      <source type="image/png" srcset="./assests/images/home-product-image-2.png">
                      <img loading="lazy" src="./assests/images/home-product-image-2.png"
                        alt="Workstatus Desk" width="274" height="183">
                    </picture>
                  </div>
                  <div class="product_title">
                    <h4><strong>Workstatus</strong> Desk</h4>
                    <p>Proof of work, time tracking, and team management</p>
                  </div>
                </a>
              </div>
              <div class="ws_product">
                <a href="/tasks">
                  <div class="thumb">
                    <picture>
                      <source type="image/webp" srcset="./assests/images/home-product-image-3.webp">
                      <source type="image/png" srcset="./assests/images/home-product-image-3.png">
                      <img loading="lazy" src="./assests/images/home-product-image-3.png"
                        alt="Workstatus Tasks" width="274" height="183">
                    </picture>
                  </div>
                  <div class="product_title">
                    <h4><strong>Workstatus</strong> Tasks</h4>
                    <p>Simple, Agile project management for productive teams of all sizes </p>
                  </div>
                </a>
              </div>
              <div class="ws_product">
                <a href="/field-service-management-software">
                  <div class="thumb">
                    <picture>
                      <source type="image/webp" srcset="./assests/images/home-product-image-4.webp">
                      <source type="image/png" srcset="./assests/images/home-product-image-4.png">
                      <img loading="lazy" src="./assests/images/home-product-image-4.png"
                        alt="Workstatus Field" width="274" height="183">
                    </picture>
                  </div>
                  <div class="product_title">
                    <h4><strong>Workstatus</strong> Field</h4>
                    <p>GPS location tracking and team management</p>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </section>
        <section class="one-solution list-icon">
          <div class="container">
            <div class="top-section">
              <h6><span class="bg-purple">WHY WORKSTATUS™?</span></h6>
              <h2>Top Reasons To Trust Workstatus</h2>
            </div>
            <div class="flex_row">
              <div class="column-three">
                <div class="box">
                  <div class="bx-content">
                    <picture>
                      <source type="image/webp" srcset="./assests/images/one-sol01.webp">
                      <source type="image/png" srcset="./assests/images/one-sol01.png">
                      <img loading="lazy" src="./assests/images/one-sol01.png" alt="One Solution" width="92" height="59">
                    </picture>
                    <h3>Work From Home Monitoring</h3>
                    <p>Workstatus offers a comprehensive solution for monitoring employees working from home, fostering a positive remote work environment.</p>
                  </div>
                  <a href="/work-from-home-monitoring" class="view-more">Explore</a>
                </div>
              </div>
              <div class="column-three">
                <div class="box">
                  <div class="bx-content">
                    <picture>
                      <source type="image/webp" srcset="./assests/images/one-sol01.webp">
                      <source type="image/png" srcset="./assests/images/one-sol01.png">
                      <img loading="lazy" src="./assests/images/one-sol01.png" alt="One Solution" width="92" height="59">
                    </picture>
                    <h3>Remote Work Tracking</h3>
                    <p>Effectively manage remote teams with Workstatus, enabling seamless communication and task visibility for enhanced productivity.</p>
                  </div>
                  <a href="/work-from-home-monitoring" class="view-more">Explore</a>
                </div>
              </div>
              <div class="column-three">
                <div class="box">
                  <div class="bx-content">
                    <picture>
                      <source type="image/webp" srcset="./assests/images/one-sol01.webp">
                      <source type="image/png" srcset="./assests/images/one-sol01.png">
                      <img loading="lazy" src="./assests/images/one-sol01.png" alt="One Solution" width="92" height="59">
                    </picture>
                    <h3>On-Premise Teams Management</h3>
                    <p>Workstatus integration provides large enterprises with robust features and capabilities to streamline operations.</p>
                  </div>
                  <a href="/work-from-home-monitoring" class="view-more">Explore</a>
                </div>
              </div>
              <div class="column-three">
                <div class="box">
                  <div class="bx-content">
                    <picture>
                      <source type="image/webp" srcset="./assests/images/one-sol01.webp">
                      <source type="image/png" srcset="./assests/images/one-sol01.png">
                      <img loading="lazy" src="./assests/images/one-sol01.png" alt="One Solution" width="92" height="59">
                    </picture>
                    <h3>Field Service Management</h3>
                    <p>Efficiently manage field service operations with Workstatus, offering location-based tracking and streamlined task allocation.</p>
                  </div>
                  <a href="/work-from-home-monitoring" class="view-more">Explore</a>
                </div>
              </div>
              <div class="column-three">
                <div class="box">
                  <div class="bx-content">
                    <picture>
                      <source type="image/webp" srcset="./assests/images/one-sol01.webp">
                      <source type="image/png" srcset="./assests/images/one-sol01.png">
                      <img loading="lazy" src="./assests/images/one-sol01.png" alt="One Solution" width="92" height="59">
                    </picture>
                    <h3>Freelancers Time Management</h3>
                    <p>Workstatus aids freelancers in tracking time accurately and managing projects efficiently to maintain productivity and meet deadlines.</p>
                  </div>
                  <a href="/work-from-home-monitoring" class="view-more">Explore</a>
                </div>
              </div>
              <div class="column-three">
                <div class="box">
                  <div class="bx-content">
                    <picture>
                      <source type="image/webp" srcset="./assests/images/one-sol01.webp">
                      <source type="image/png" srcset="./assests/images/one-sol01.png">
                      <img loading="lazy" src="./assests/images/one-sol01.png" alt="One Solution" width="92" height="59">
                    </picture>
                    <h3>Hybrid Workforce Management</h3>
                    <p>Workstatus facilitates seamless management of hybrid workforces, combining in-office and remote employees.</p>
                  </div>
                  <a href="/work-from-home-monitoring" class="view-more">Explore</a>
                </div>
              </div>
            </div>
            <div class="text_center mt80  link-text">
              <a href="/use-cases" class="small_anchor">Explore all Use Cases</a>
            </div>
            <?php if( geoCTAcheck() === true ) : ?>
            <div class="mt40 btnSc">
              <div class="cmn-democta ctasec">
                <div>
                  <a data-href="https://app.workstatus.io/auth/register/?pid=1&amp;type=monthly" href="javascript:void(0);" class="ctbtn" onclick="if (!window.__cfRLUnblockHandlers) return false; return get_ws_signupform(this);">Start Free Trial</a>
                  <span class="nccr">No credit card required</span>
                </div>
                <span class="devide">OR</span>
                <div><a href="javascript:void(0)" class="ctbtn nobg" onclick="if (!window.__cfRLUnblockHandlers) return false; call_demows();" target="_self">Book A Demo</a></div>
              </div>
            </div>
            <?php endif; ?>
            <div class="reviews-logo-section">
              <div class="flex_row justify-center">
                <div class="column">
                  <div class="flex_row align-center justify-center">
                    <a href="https://www.sitejabber.com/reviews/workstatus.io" rel="nofollow">
                    <span class="logo-icon">
                    <i class="reviews-logo review-logo1"></i>
                    <i class="star-icon"></i>
                    </span>
                    </a>
                  </div>
                </div>
                <div class="column">
                  <div class="flex_row align-center justify-center">
                    <a href="https://sourceforge.net/software/product/Workstatus/" rel="nofollow">
                    <span class="logo-icon">
                    <i class="reviews-logo review-logo2"></i>
                    <i class="star-icon"></i>
                    </span>
                    </a>
                  </div>
                </div>
                <div class="column">
                  <div class="flex_row align-center justify-center">
                    <a href="https://www.goodfirms.co/software/workstatus" rel="nofollow">
                    <span class="logo-icon">
                    <i class="reviews-logo review-logo3"></i>
                    <i class="star-icon"></i>
                    </span>
                    </a>
                  </div>
                </div>
                <div class="column">
                  <div class="flex_row align-center justify-center">
                    <a href="https://www.g2.com/products/valuecoders-workstatus/reviews" rel="nofollow">
                    <span class="logo-icon">
                    <i class="reviews-logo review-logo4"></i>
                    <i class="star-icon"></i>
                    </span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="feature_section for-heading-center whitetxt">
          <div class="container">
            <div class="top-section">
              <h6><span class="bg-white">Workstatus Features</span></h6>
              <h2>Powerful Features To Make Workforce Management Easy</h2>
              <p>Transforming Workforce Productivity and Project Excellence</p>
            </div>
            <div class="flex_row">
              <div class="column">
                <div class="content">
                  <a href="<?php echo SITE_URL; ?>/time-attendance">
                    <img loading="lazy" src="./assests/images/time-icon.svg"
                      alt="feature" width="52" height="60">
                    <h3>Time & Attendance</h3>
                    <p>Keep track of employee work hours and attendance with precision and ease.</p>
                    <span class="small_anchor">Explore</span>
                  </a>
                </div>
              </div>
              <div class="column">
                <div class="content">
                  <a href="<?php echo SITE_URL; ?>/workforce-management">
                    <img loading="lazy" src="./assests/images/wm-icon.svg"
                      alt="feature" width="60" height="60">
                    <h3>Workforce Management</h3>
                    <p>Optimize team efficiency through smart scheduling and performance monitoring.
                    </p>
                    <span class="small_anchor">Explore</span>
                  </a>
                </div>
              </div>
              <div class="column">
                <div class="content">
                  <a href="<?php echo SITE_URL; ?>/reporting-analytics">
                    <img loading="lazy" src="./assests/images/ra-icon.svg"
                      alt="feature" width="50" height="60">
                    <h3>Reporting & Analytics</h3>
                    <p>GPS tracking tool to manage the time & attendance of field employees
                    </p>
                    <span class="small_anchor">Explore</span>
                  </a>
                </div>
              </div>
              <div class="column">
                <div class="content">
                  <a href="<?php echo SITE_URL; ?>/project-management">
                    <img loading="lazy" src="./assests/images/pm-icon.svg"
                      alt="feature" width="60" height="60">
                    <h3>Project Management</h3>
                    <p>Efficiently plan, execute, and monitor projects to meet goals and deadlines.
                    </p>
                    <span class="small_anchor">Explore</span>
                  </a>
                </div>
              </div>
            </div>
            <div class="text_center mt80 for-link-white link-text">
              <a href="features" class="small_anchor">Explore all Features</a>
            </div>
            <div class="mt40 text_center for-link-white btnSc">
              <p>Check How Workstatus™ Benefits Your Business</p>
              <a href="javascript:void(0)" onclick="call_demows();" class="primary_btn1 bgwhite">Book A Demo</a>
              <small>Get queries answered from experts</small>
            </div>
          </div>
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
                    <h3 itemprop="name">What is Workforce management (WFM) software, and how much does
                      it cost?
                    </h3>
                    <div class="faq-accordion-content">
                      <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div itemprop="text">
                          <p>Workforce management software is a suite of applications designed to
                            provide a
                            centralized, automated tool for managing human resources operations
                            at the workplace. There is no
                            fixed price for workforce management software as it largely depends
                            upon the offered features and
                            functions. Workstatus comes with a free version for personal work
                            management and a paid version
                            starts at just $4.16.
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="faq-accordion-item-outer" itemscope itemprop="mainEntity"
                    itemtype="https://schema.org/Question">
                    <h3 itemprop="name">How does the Workforce Management System (WMS) work?</h3>
                    <div class="faq-accordion-content">
                      <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div itemprop="text">
                          <p> Workforce management software manages employees’ schedules, time
                            tracking and
                            timely project deliveries. It allows managers to create shift
                            schedules, track employee hours, and
                            calculate billable hours for any project. It can also be used with
                            other HR software, project
                            management software, applicant tracking systems or learning
                            management systems.
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="faq-accordion-item-outer" itemscope itemprop="mainEntity"
                    itemtype="https://schema.org/Question">
                    <h3 itemprop="name">What should I look for in workforce management software?</h3>
                    <div class="faq-accordion-content">
                      <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div itemprop="text">
                          <p>When looking for a suitable workforce management software, you should
                            consider the
                            features that are important to you and your business. The most
                            important features include time
                            tracking, attendance tracking, task scheduling and project cost
                            management. You should also consider
                            the software's ease of use at all levels - for employees as well as
                            managers. Customer support is
                            also an important consideration, which can come handy if you have
                            questions or need help using the
                            software.
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="faq-accordion-item-outer" itemscope itemprop="mainEntity"
                    itemtype="https://schema.org/Question">
                    <h3 itemprop="name">Why is WFM important?</h3>
                    <div class="faq-accordion-content">
                      <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div itemprop="text">
                          <p>Workforce management (WFM) plays an important role for any
                            organization because it ensures that an organization has the right
                            number of employees with the appropriate skills and
                            experience to meet its strategic objectives. When workforce
                            management is done well, it can help
                            organizations control costs, optimize resources and improve employee
                            productivity.
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="faq-accordion-item-outer" itemscope itemprop="mainEntity"
                    itemtype="https://schema.org/Question">
                    <h3 itemprop="name">What is workforce analytics? Can you explain with examples?</h3>
                    <div class="faq-accordion-content">
                      <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div itemprop="text">
                          <p>Workforce analytics means collecting and analyzing data to understand
                            how an organization's
                            workforce performs. It helps employers make more informed decisions
                            about hiring, training and
                            organizational restructuring.
                          </p>
                          <p>Some examples of what workforce analytics can be used for include:
                          </p>
                          <ul>
                            <li>Forecasting future headcount needs</li>
                            <li>Identifying staffing gaps and surpluses</li>
                            <li>Assessing employee skills and capabilities</li>
                            <li>Predicting turnover or attrition rates</li>
                            <li>Measuring the impact of training and development programs</li>
                            <li>Benchmarking employee performance against industry peers</li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="faq-accordion-item-outer" itemscope itemprop="mainEntity"
                    itemtype="https://schema.org/Question">
                    <h3 itemprop="name"> Is my organization's tracked data secured with a WFM software
                      like Workstatus™?
                    </h3>
                    <div class="faq-accordion-content">
                      <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div itemprop="text">
                          <p>Yes, your organization's tracked data is completely secured with a
                            WFM software like
                            Workstatus. Workstatus is a secure, cloud-based solution that meets
                            the most stringent security
                            requirements too. Workstatus, a trusted WFM software, employs
                            multiple layers of security, including
                            firewalls, intrusion detection & prevention systems that don't allow
                            data breaches even among the
                            teams.
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="faq-accordion-item-outer" itemscope itemprop="mainEntity"
                    itemtype="https://schema.org/Question">
                    <h3 itemprop="name">Can the workforce management system work without the internet?
                    </h3>
                    <div class="faq-accordion-content">
                      <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div itemprop="text">
                          <p>Yes, workforce management software like Workstatus allows users to
                            record time
                            without the internet. This is a valuable feature when there are any
                            internet connectivity issues.
                            The activity is kept locally until the tools are operational again,
                            and then it is uploaded to
                            Workstatus' cloud-based timekeeping solution.
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
                <a href="https://www.workstatus.io/blog/how-to-develop-and-maintain-productivity-guide-for-small-businesses/"
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
                    <h3>How to Develop and Maintain Productivity Guide for Small Businesses</h3>
                    <span class="small_anchor">Read more</span>
                  </div>
                </a>
              </div>
              <div class="blog-box column-three">
                <a href="https://www.workstatus.io/blog/why-is-workplace-analytics-critical-no-matter-where-people-work/"
                  class="blog-link">
                  <div class="thumb">
                    <picture>
                      <source type="image/webp" srcset="./assests/images/useful-resources-blog-2.jpg">
                      <source type="image/png" srcset="./assests/images/useful-resources-blog-2.jpg">
                      <img loading="lazy" src="./assests/images/useful-resources-blog-2.jpg"
                        alt="Workstatus Time" width="400" height="242">
                    </picture>
                  </div>
                  <div class="blog-title">
                    <h3>Why is Workplace Analytics Critical No Matter Where People Work</h3>
                    <span class="small_anchor">Read more</span>
                  </div>
                </a>
              </div>
              <div class="blog-box column-three">
                <a href="https://www.workstatus.io/blog/10-features-of-workstatus-that-make-it-a-perfect-workforce-management-system/"
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
                    <h3>10 Features of Workstatus : Perfect Workforce Management System</h3>
                    <span class="small_anchor">Read more</span>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </section>
        <?php if( !isMobile() ) : ?>
        <section class="testimonial testmHome ">
          <div class="container">
            <div class="top-section">
              <h6><span class="bg-white">Testimonials</span></h6>
              <h2>Businesses Love Using Workstatus™</h2>
            </div>
            <div class="glider-testimonial">
              <div class="glider-contain">
                <div class="glider2">
                  <div>
                    <p>“ We were looking for an ease for our employees and in-depth
                      analytics for our managers.
                      We explored many options available in the market but zeroed in on Workstatus
                      because of a clean crisp
                      interface, single click start and many useful insights we get to feed my
                      managers’ needs. Happy that we
                      decided on this tool, we have noted a rise in productivity and are able to meet
                      our deadlines and
                      budgets better. ”
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
                        <p class="para_extrasmall white">Bob Simmons, USA</p>
                      </div>
                    </div>
                  </div>
                  <div>
                    <p>“ Workstatus has given a significant boost to our business growth
                      as our people are
                      consciously productive, being aware that their time is tracked and activities
                      are being monitored.
                      Thanks to Workstatus, this boost was very much needed! ”
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
                        <p class="para_extrasmall white">Elijah Blake, USA</p>
                      </div>
                    </div>
                  </div>
                  <div>
                    <p>“ We have been working in very complex geographies with hybrid
                      teams for a few years now.
                      Multiple offices, flexible shifts, client sites, and much more had earlier made
                      it difficult for us to
                      track our employees location and time devoted to their assigned work
                      responsibilities. Our new workforce
                      management app, Workstatus, has made life easy for our managers. Now, we get a
                      centralized view of what
                      our workforce is upto. We are now able to increase team head counts and
                      retaining clients better. ”
                    </p>
                    <div class="border"><span class="element-triangle"></span></div>
                    <div class="author-box">
                      <picture>
                        <source type="image/webp" srcset="./assests/images/avatar.webp">
                        <source type="image/png" srcset="./assests/images/avatar.png">
                        <img loading="lazy" src="./assests/images/avatar.png" alt="Larry" width="54"
                          height="54">
                      </picture>
                      <div class="author-content">
                        <p class="para_extrasmall white">Chris Lawrence, UK</p>
                      </div>
                    </div>
                  </div>
                  <div>
                    <p>“ Workstatus has given us an edge by helping us in managing our
                      projects better. We are
                      able to forecast our project budgets and expected delivery timelines based on
                      previous employees’
                      performance. Overall, we can now quantify the work done, with higher
                      productivity rates. Best part is,
                      this is a simple switch on-off timer for employees which works silently in the
                      background. No hassle! ”
                    </p>
                    <div class="border"><span class="element-triangle"></span></div>
                    <div class="author-box">
                      <picture>
                        <source type="image/webp" srcset="./assests/images/avatar.webp">
                        <source type="image/png" srcset="./assests/images/avatar.png">
                        <img loading="lazy" src="./assests/images/avatar.png" alt="John" width="54"
                          height="54">
                      </picture>
                      <div class="author-content">
                        <p class="para_extrasmall white">Patrick Kieren, Germany</p>
                      </div>
                    </div>
                  </div>
                  <div>
                    <p>“ Since we have started using Workstatus, we can optimize our time
                      spent on specific
                      activities or projects. We can provide the best service to each of our clients
                      while still having enough
                      workforce for other projects. Workforce has almost doubled our profits with
                      useful insights on various
                      areas. ”
                    </p>
                    <div class="border"><span class="element-triangle"></span></div>
                    <div class="author-box">
                      <picture>
                        <source type="image/webp" srcset="./assests/images/avatar.webp">
                        <source type="image/png" srcset="./assests/images/avatar.png">
                        <img loading="lazy" src="./assests/images/avatar.png" alt="Jessica"
                          width="54" height="54">
                      </picture>
                      <div class="author-content">
                        <p class="para_extrasmall white">R K Jain, India</p>
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
        <?php require_once 'common/workstatus-journey-straight.php';?>
      </main>
      <?php require_once 'common/footer.php';?>
    </div>
    <?php if( !isMobile() ) : ?>
    <script src="assests/js/glider.min.js"></script>
    <?php endif; ?>
    <script src="assests/js/script.js?var=<?php echo time(); ?>"></script>
  </body>
</html>
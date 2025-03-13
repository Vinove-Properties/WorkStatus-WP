<?php require_once '../common/inc/config.inc.php'; ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <link rel="alternate" href="<?php echo SITE_URL; ?>/solutions/user-activity-attendance-monitoring" 
         hreflang="en-us"/>
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
                        <h1>User Activity Monitoring Software</h1>
                        <p>A versatile and customizable activity monitoring software, Workstatus™, tracks any system activities undertaken by employees,<br class="linebrk"> including website visits, program usage, chat conversations, time spent on each app/webpage, and overall time utilization.
                        </p>
                        <!-- <ul class="list">
                           <li>Get Accurate & Detailed Reports</li>
                           <li>Improve on Inefficiencies Identified</li>
                           <li>Optimize Overall Productivity</li>
                        </ul> -->
                        <div class="actionBtn">
                           <div><a href="<?php echo $RegLink; ?>" class="primary_btn1">Start Free Trial</a>
                              <small>No credit card required</small>
                           </div>
                           <div><a href="javascript:void(0)" onclick="call_demows();" class="primary_btn2">Book A Demo</a>
                              <small>Get queries answered from experts</small>
                           </div>
                        </div>
                        <?php require_once '../common/available-device.php';?>
                        <div class="video-wrap">
                        <div class="videoSc" id="has-yt-video">
                           <div class="inner">
                              <div class="topVideo srp-4">
                                 <div id="myDIV" class="contbox2">
                                    <div class="videoWrapper">
                                        <!--<iframe id="video" class="videoIframe" allowfullscreen
                                       data-src="https://www.youtube.com/embed/DThRrn0eicw?enablejsapi=1&html5=1&mute=1">
                                       </iframe>-->
                                       <button class="videoPoster lazy-background" id="play-button">Play video
                                       <!--<span class="playicon"></span>--></button>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     </div>
                  </div>
             
            </section>
            <section class="trackEm">
               <div class="container">
                  <div class="top-section">
                     <h6><span class="bg-purple">Stay in Control</span></h6>
                     <h2> Optimize With Workstatus™ User Activity Monitoring Software</h2>
                  </div>
                  <div class="trackRow align-center">
                     <div class="trackImg">
                        <picture>
                           <source type="image/webp" srcset="../assests/images/solution-demo3.webp" />
                           <source type="image/png" srcset="../assests/images/solution-demo3.png" />
                           <img loading="lazy" src="../assests/images/solution-demo3.png" alt="Solution" width="510" height="545" />
                        </picture>
                     </div>
                     <div class="trackContent">
                        <div class="row">
                           <h3><i></i>Employee Monitoring</h3>
                           <p>Monitor employee's activities on day-to-day basis with detailed reports to identify any areas of improvement and make necessary changes.</p>
                        </div>
                        <div class="row">
                           <h3><i></i>User Behaviour Analytics</h3>
                           <p>Get In-depth analytics to identify potential bottlenecks and behavior anomalies in real-time to improve the overall performance & data security of your organization.</p>
                        </div>
                        <div class="row">
                           <h3><i></i>Productivity Monitoring</h3>
                           <p>Identify trends to enhance employees' productivity. See where your employees are stuck and need to improve. Plan resources and training accordingly. </p>
                        </div>
                     </div>
                     <div class="mt70 btnSc">
                        <p>
                           Workstatus™ is a great way to monitor <br> any system user activity
                        </p>
                        <a href="javascript:void(0)" onclick="call_demows();" rel="nofollow" class="primary_btn1">Book A Demo </a>
                        <small>Check out this demo to know more</small>
                     </div>
                  </div>
               </div>
            </section>
            <section class="timeline">
               <div class="container">
                  <div class="top-section">
                     <h6><span class="bg-purple">A Few Industry Statistics</span></h6>
                     <h2>Why You Need Activity Monitoring?</h2>
                  </div>
                  <div class="trackRow">
                     <div class="trackImg">
                        <picture>
                           <source type="image/webp" srcset="../assests/images/solution-track3.webp" />
                           <source type="image/png" srcset="../assests/images/solution-track3.png" />
                           <img loading="lazy" src="../assests/images/solution-track3.png" alt="Tracking Software" width="619" height="931" />
                        </picture>
                     </div>
                     <div class="trackContent">
                        <div class="row">
                           <h3>Colluding Employees are the Sources of Insider Threats</h3>
                           <p>Colluding workers are causes of insider threats. As per the Community Emergency Response Team, the core cause of insider-produced events is the plot from third parties and employees.</p>
                           <ul>
                              <li>48.3%- Insider-insider collusion</li>
                              <li>16.75%- Insider-Outsider Collusion</li>
                           </ul>
                        </div>
                        <div class="row">
                           <h3>Employee Authority Sets Delicate Data at Danger</h3>
                           <p>
                              As per 400,000 members online through Cybersecurity Insiders issued on The Insider Threat 2018 statement:
                           </p>
                           <ul>
                              <li>37%-Excess Privilege</li>
                              <li>34%- Extended Expense of Crucial Data</li>
                           </ul>
                        </div>
                        <div class="row">
                           <h3>Employees are a Chief Security Reason</h3>
                           <p>
                              Organizations acknowledge employees are their most significant vulnerability in IT protection -as per B2B International and Kaspersky Lab of more than 5,000 businesses.
                           </p>
                           <ul>
                              <li>52% of organizations agree employees are a huge risk</li>
                           </ul>
                        </div>
                        <div class="row">
                           <h3>Several Employees Give Unproductive Time at Job</h3>
                           <p>
                              As per FinancesOnline, 64% of workers utilize non-work associated worksites daily and 85% of workers utilize their email for individual reasons.
                           </p>
                           <ul>
                              <li>64%Browse Unproductive Websites</li>
                              <li>85% Use Email for Personal Work</li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <section class="middle-section feature-section">
               <div class="item">
                  <div class="container">
                     <div class="top-section">
                        <h6><span class="bg-purple">Power Packed</span></h6>
                        <h2>Detailed Analytics With Workstatus Employee Activity Monitoring Software</h2>
                        <p>With Workstatus, you can almost review everything on how an employee's day looks like and what they have been doing on minute to minute basis. This becomes useful for troubleshooting issues or providing help and training.</p>
                     </div>
                     <div id="active_Current_Tabs1">
                        <div class="flex_row">
                           <div class="column-right">
                              <picture class="page active" id="p1">
                                 <source type="image/webp" srcset="../assests/images/user-activity-01.webp" />
                                 <source type="image/png" srcset="../assests/images/user-activity-01.png" />
                                 <img loading="lazy" src="../assests/images/user-activity-01.png" alt="User Activity" width="613" height="503" />
                              </picture>
                              <picture class="page" id="p2">
                                 <source type="image/webp" srcset="../assests/images/user-activity-02.webp" />
                                 <source type="image/png" srcset="../assests/images/user-activity-02.png" />
                                 <img loading="lazy" src="../assests/images/user-activity-02.png" alt="User Activity" width="613" height="503" />
                              </picture>
                              <picture class="page" id="p3">
                                 <source type="image/webp" srcset="../assests/images/user-activity-03.webp" />
                                 <source type="image/png" srcset="../assests/images/user-activity-03.png" />
                                 <img loading="lazy" src="../assests/images/user-activity-03.png" alt="User Activity" width="613" height="503" />
                              </picture>
                           </div>
                           <div class="column-left">
                              <div class="all-content">
                                 <div class="text-column active" id="t1" data-section="active_Current_Tabs1">
                                    <h3><i></i> Session Recording</h3>
                                    <p>
                                       Workstatus records on-screen user activity for every session to provide you with crucial details regarding user behavior and productivity. Use this data to improve your processes, train your employees, or simply hold them accountable for their actions.
                                    </p>
                                 </div>
                                 <div class="mob-image">
                                    <picture>
                                       <source type="image/webp" srcset="../assests/images/user-activity-01.webp" />
                                       <source type="image/png" srcset="../assests/images/user-activity-01.png" />
                                       <img loading="lazy" src="../assests/images/user-activity-01.png" alt="User Activity" width="613" height="503" />
                                    </picture>
                                 </div>
                              </div>
                              <div class="all-content">
                                 <div class="text-column" id="t2" data-section="active_Current_Tabs1">
                                    <h3><i></i>Advanced Monitoring</h3>
                                    <p>
                                       Get detailed, granular activity monitoring so you can see everything your users are doing on their computers. Easy to keep track of productivity and ensure that nobody is slacking off or spending too much time on personal tasks.
                                    </p>
                                 </div>
                                 <div class="mob-image">
                                    <picture>
                                       <source type="image/webp" srcset="../assests/images/user-activity-02.webp" />
                                       <source type="image/png" srcset="../assests/images/user-activity-02.png" />
                                       <img loading="lazy" src="../assests/images/user-activity-02.png" alt="User Activity" width="613" height="503" />
                                    </picture>
                                 </div>
                              </div>
                              <div class="all-content">
                                 <div class="text-column" id="t3" data-section="active_Current_Tabs1">
                                    <h3><i></i>Accountability Logs</h3>
                                    <p>
                                       With Workstatus, it is easy to keep logs of everything employees do on their computers. This provides a clear paper trail that can be used for disciplinary action if needed.
                                    </p>
                                 </div>
                                 <div class="mob-image">
                                    <picture>
                                       <source type="image/webp" srcset="../assests/images/user-activity-03.webp" />
                                       <source type="image/png" srcset="../assests/images/user-activity-03.png" />
                                       <img loading="lazy" src="../assests/images/user-activity-03.png" alt="User Activity" width="613" height="503" />
                                    </picture>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="mt40 btnSc">
                        <p>
                           Workstatus™ is the best employee activity monitoring software
                        </p>
                        <a href="<?php echo $RegLink; ?>" class="primary_btn1">Start Free Trial</a>
                        <small>
                        Check out this demo to know more
                        </small>
                     </div>
                  </div>
               </div>
               <div class="item">
                  <div class="container">
                     <div class="top-section">
                        <h6><span class="bg-purple">Remain Alert</span></h6>
                        <h2>Stay Informed About Potential Threats With User Activity Monitoring Software</h2>
                        <p>
                           The Workstatus goes one step ahead of fundamental user activity monitoring, as well as tracking functionality and augments intellectual behavior-based examination to give automated responses or actionable insights for any user-created threats.
                        </p>
                     </div>
                     <div id="active_Current_Tabs2">
                        <div class="flex_row">
                           <div class="column-right">
                              <picture class="page active" id="p4">
                                 <source type="image/webp" srcset="../assests/images/user-activity-04.webp" />
                                 <source type="image/png" srcset="../assests/images/user-activity-04.png" />
                                 <img loading="lazy" src="../assests/images/user-activity-04.png" alt="User Activity" width="463" height="453" />
                              </picture>
                              <picture class="page" id="p5">
                                 <source type="image/webp" srcset="../assests/images/user-activity-05.webp" />
                                 <source type="image/png" srcset="../assests/images/user-activity-05.png" />
                                 <img loading="lazy" src="../assests/images/user-activity-05.png" alt="User Activity" width="463" height="453" />
                              </picture>
                              <picture class="page" id="p6">
                                 <source type="image/webp" srcset="../assests/images/user-activity-06.webp" />
                                 <source type="image/png" srcset="../assests/images/user-activity-06.png" />
                                 <img loading="lazy" src="../assests/images/user-activity-06.png" alt="User Activity" width="463" height="453" />
                              </picture>
                           </div>
                           <div class="column-left">
                              <div class="all-content">
                                 <div class="text-column active" id="t4" data-section="active_Current_Tabs2">
                                    <h3>Identify Insider Threats & Vulnerabilities</h3>
                                    <p>Workstatus observes employees, contractors, remote & privileged users, and third-party vendors and conducts risk examinations, measures employee efficiency, and maintains track of how third-party vendors access the organization's resources at work.</p>
                                    <ul class="checkList">
                                       <li>Identify malicious or unauthorized behavior</li>
                                       <li>Easy to flag risky activities</li>
                                    </ul>
                                 </div>
                                 <div class="mob-image">
                                    <picture>
                                       <source type="image/webp" srcset="../assests/images/user-activity-04.webp" />
                                       <source type="image/png" srcset="../assests/images/user-activity-04.png" />
                                       <img loading="lazy" src="../assests/images/user-activity-04.png" alt="User Activity" width="463" height="453" />
                                    </picture>
                                 </div>
                              </div>
                              <div class="all-content">
                                 <div class="text-column" id="t5" data-section="active_Current_Tabs2">
                                    <h3>Safeguard Delicate Data and Resources</h3>
                                    <p> Identify any threats and get an instant alert to prevent data thefts.</p>
                                    <ul class="checkList">
                                       <li>Minimize data exfiltration</li>
                                       <li>No information leaks</li>
                                    </ul>
                                 </div>
                                 <div class="mob-image">
                                    <picture>
                                       <source type="image/webp" srcset="../assests/images/user-activity-05.webp" />
                                       <source type="image/png" srcset="../assests/images/user-activity-05.png" />
                                       <img loading="lazy" src="../assests/images/user-activity-05.png" alt="User Activity" width="463" height="453" />
                                    </picture>
                                 </div>
                              </div>
                              <div class="all-content">
                                 <div class="text-column" id="t6" data-section="active_Current_Tabs2">
                                    <h3><i></i>Incident Alerts</h3>
                                    <p>Whenever any data breach or security incident occurs, Workstatus provides complete forensic conference recordings for quick investigation. In case of any critical alert, you can easily automate blocking and warning actions.</p>
                                 </div>
                                 <div class="mob-image">
                                    <picture>
                                       <source type="image/webp" srcset="../assests/images/user-activity-06.webp" />
                                       <source type="image/png" srcset="../assests/images/user-activity-06.png" />
                                       <img loading="lazy" src="../assests/images/user-activity-06.png" alt="User Activity" width="463" height="453" />
                                    </picture>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="mt40 btnSc">
                        <p>
                           With our AI-powered user activity monitoring software,<br> you'll never have to worry about data breaches
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
                        <h6><span class="bg-purple">Ultimate Business Benefits</span></h6>
                        <h2>Optimize Workflow To Align With Your Goals </h2>
                        <p>
                           Workstatus can monitor employees’ activity and ensure that they are not visiting inappropriate websites or downloading unauthorized files. Protect your networks and data from security threats while also ensuring that employees are staying productive.
                        </p>
                     </div>
                     <div id="active_Current_Tabs3">
                        <div class="flex_row">
                           <div class="column-right">
                              <picture class="page active" id="p7">
                                 <source type="image/webp" srcset="../assests/images/user-activity-07.webp" />
                                 <source type="image/png" srcset="../assests/images/user-activity-07.png" />
                                 <img loading="lazy" src="../assests/images/user-activity-07.png" alt="User Activity" width="620" height="475" />
                              </picture>
                              <picture class="page" id="p8">
                                 <source type="image/webp" srcset="../assests/images/user-activity-08.webp" />
                                 <source type="image/png" srcset="../assests/images/user-activity-08.png" />
                                 <img loading="lazy" src="../assests/images/user-activity-08.png" alt="User Activity" width="648" height="455" />
                              </picture>
                              <picture class="page" id="p9">
                                 <source type="image/webp" srcset="../assests/images/user-activity-09.webp" />
                                 <source type="image/png" srcset="../assests/images/user-activity-09.png" />
                                 <img loading="lazy" src="../assests/images/user-activity-09.png" alt="User Activity" width="619" height="490" />
                              </picture>
                           </div>
                           <div class="column-left">
                              <div class="all-content">
                                 <div class="text-column active" id="t7" data-section="active_Current_Tabs3">
                                    <h3>Improve Employee Performance and Productivity</h3>
                                    <p>
                                       Calculate active vs. inactive time, long breaks, late shifts, and more. Design etiquette protocols to restrict unproductive behavior.
                                    </p>
                                    <ul class="checkList">
                                       <li>Never miss any deadline</li>
                                       <li>Improve Client Retention Rate</li>
                                    </ul>
                                 </div>
                                 <div class="mob-image">
                                    <picture>
                                       <source type="image/webp" srcset="../assests/images/user-activity-07.webp" />
                                       <source type="image/png" srcset="../assests/images/user-activity-07.png" />
                                       <img loading="lazy" src="../assests/images/user-activity-07.png" alt="User Activity" width="620" height="475" />
                                    </picture>
                                 </div>
                              </div>
                              <div class="all-content">
                                 <div class="text-column" id="t8" data-section="active_Current_Tabs3">
                                    <h3>Shield Yourself with Evidence</h3>
                                    <p>
                                       Use real-time snapshots to see employees' systems for evidence gathering and audit purposes.
                                    </p>
                                    <ul class="checkList">
                                       <li>Build organization’s security</li>
                                       <li>Detailed reporting system</li>
                                    </ul>
                                 </div>
                                 <div class="mob-image">
                                    <picture>
                                       <source type="image/webp" srcset="../assests/images/user-activity-08.webp" />
                                       <source type="image/png" srcset="../assests/images/user-activity-08.png" />
                                       <img loading="lazy" src="../assests/images/user-activity-08.png" alt="User Activity" width="648" height="455" />
                                    </picture>
                                 </div>
                              </div>
                              <div class="all-content">
                                 <div class="text-column" id="t9" data-section="active_Current_Tabs3">
                                    <h3>Remote Desktop User Activity Monitoring</h3>
                                    <p>
                                       Many times it either becomes difficult to manage remote employees or demands continuous discussions and requests for updates to stay updated. Workstatus solves the concern.
                                    </p>
                                    <ul class="checkList">
                                       <li>Stay connected with remote employees</li>
                                       <li>Centralized management for all</li>
                                    </ul>
                                 </div>
                                 <div class="mob-image">
                                    <picture>
                                       <source type="image/webp" srcset="../assests/images/user-activity-09.webp" />
                                       <source type="image/png" srcset="../assests/images/user-activity-09.png" />
                                       <img loading="lazy" src="../assests/images/user-activity-09.png" alt="User Activity" width="619" height="490" />
                                    </picture>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="mt40 btnSc">
                        <p>Start Using Workstatus™ For Monitoring User Activities!</p>
                        <a href="<?php echo $RegLink; ?>" class="primary_btn1">Start Free Trial</a>
                        <small> It’s Worth</small>
                     </div>
                  </div>
               </div>
            </section>
            <section class="wsMobile whitetxt">
               <?php require_once '../common/workstatus-device.php';?>
            </section>
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
                              <h3 itemprop="name">Why is user activity monitoring important?</h3>
                              <div class="faq-accordion-content">
                                 <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                    <div itemprop="text">
                                       <p>User activity monitoring is essential for several reasons, but five key reasons are as follows:</p>
                                       <ul>
                                          <li>It helps to ensure compliance with corporate policies and procedures.</li>
                                          <li>It can help identify malicious or unauthorized activity.</li>
                                          <li>It can help optimize system resources and improve performance.</li>
                                          <li>It can help identify security vulnerabilities.</li>
                                          <li>It can provide insights into user behavior that can be used to improve user experience and workforce strategies.
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="faq-accordion-item-outer" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                              <h3 itemprop="name">Why Workstatus is the best software for monitoring user activity?</h3>
                              <div class="faq-accordion-content">
                                 <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                    <div itemprop="text">
                                       <p>Workstatus is the best software for monitoring user activity because it provides an accurate and up-to-date overview of what employees are working on in real-time. Additionally, Workstatus helps managers and team leaders identify potential bottlenecks and optimize their team's workflow.
                                       </p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="faq-accordion-item-outer" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                              <h3 itemprop="name">What is a user activity log?
                              </h3>
                              <div class="faq-accordion-content">
                                 <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                    <div itemprop="text">
                                       <p>
                                          A user activity log is a record of the activities a user has carried out on a computer system. This can include website visits, files accessed or edited, and any keystrokes or mouse movements.
                                       </p>
                                       <p>
                                          The purpose of a user activity log is to allow an administrator or other authorized individual to review what actions have been carried out on the system. This can be useful for troubleshooting problems, identifying unauthorized activity, or simply reviewing what tasks have been carried out on the system.
                                       </p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="faq-accordion-item-outer" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                              <h3 itemprop="name">How is user activity monitoring software, Workstatus used?</h3>
                              <div class="faq-accordion-content">
                                 <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                    <div itemprop="text">
                                       <p>User activity monitoring software is great for managing employee productivity and ensuring that sensitive company data is protected. With Workstatus, you can see which employees are active and inactive in real-time, get timely alerts when sensitive files are accessed, etc. Plus, our granular user activity reports give you the insights you need to identify issues and take action to improve organizational performance.
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
                        <a href="https://www.workstatus.io/blog/seven-ways-to-apply-the-pareto-principle-for-tracking-employee-productivity/" class="blog-link">
                           <div class="thumb">
                              <picture>
                                 <source type="image/webp" srcset="../assests/images/useful-resources-blog-1.jpg" />
                                 <source type="image/png" srcset="../assests/images/useful-resources-blog-1.jpg" />
                                 <img loading="lazy" src="../assests/images/useful-resources-blog-1.jpg" alt="Workstatus Time" width="400" height="242" />
                              </picture>
                           </div>
                           <div class="blog-title">
                              <h3>7 Ways to Apply the 80/20 Rule for Tracking Employee Productivity</h3>
                              <span class="small_anchor">Read more</span>
                           </div>
                        </a>
                     </div>
                     <div class="blog-box column-three">
                        <a href="https://www.workstatus.io/blog/dealing-with-employee-moonlighting-in-remote-working/" class="blog-link">
                           <div class="thumb">
                              <picture>
                                 <source type="image/webp" srcset="../assests/images/useful-resources-blog-2.jpg" />
                                 <source type="image/png" srcset="../assests/images/useful-resources-blog-2.jpg" />
                                 <img loading="lazy" src="../assests/images/useful-resources-blog-2.jpg" alt="Workstatus Time" width="400" height="242" />
                              </picture>
                           </div>
                           <div class="blog-title">
                              <h3>Dealing with Employee Moonlighting in Remote Working Arrangements</h3>
                              <span class="small_anchor">Read more</span>
                           </div>
                        </a>
                     </div>
                     <div class="blog-box column-three">
                        <a href="https://www.workstatus.io/blog/monitor-employee-effectively-while-respecting-their-privacy/" class="blog-link">
                           <div class="thumb">
                              <picture>
                                 <source type="image/webp" srcset="../assests/images/useful-resources-blog-3.jpg" />
                                 <source type="image/png" srcset="../assests/images/useful-resources-blog-3.jpg" />
                                 <img loading="lazy" src="../assests/images/useful-resources-blog-3.jpg" alt="Workstatus Time" width="400" height="242" />
                              </picture>
                           </div>
                           <div class="blog-title">
                              <h3>How to Effectively Monitor Employees While Respecting Their Privacy?</h3>
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
      </div>
      <?php if( !isMobile() ) : ?>
      <script src="../assests/js/glider.min.js"></script>
      <?php endif; ?>
      <script src="../assests/js/script.js"></script>
      <script src="../assests/js/footer-validation.js"></script>
   </body>
</html>
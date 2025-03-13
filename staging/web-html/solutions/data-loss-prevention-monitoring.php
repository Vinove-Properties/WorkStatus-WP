<?php require_once '../common/inc/config.inc.php'; ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <link rel="alternate" href="<?php echo SITE_URL; ?>/solutions/data-loss-prevention-monitoring" hreflang="en-us" />
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
                        <h1>Best Data Loss Prevention Software</h1>
                        <p>Protect your sensitive data by keeping a close vigil on your data. Workstatus keeps your information protected while ensuring smooth<br class="linebrk"> business operations. Ensure that the confidentiality is abidden by all employees by providing you detailed reports on their activities.
                        </p>
                        <!-- <ul class="list">
                           <li>Stay alert for non-conformance</li>
                           <li>Keep vigil on how data is used</li>
                           <li>Ensure complete transparency with detailed reports</li>
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
                              <div class="topVideo srp-2">
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
            </section>
            <section class="trackEm">
               <div class="container">
                  <div class="top-section">
                     <h6><span class="bg-purple">Rest Assured With Workstatus</span></h6>
                     <h2>DLP Software To Secure Your Company’s Sensitive Data</h2>
                  </div>
                  <div class="trackRow align-center">
                     <div class="trackImg">
                        <picture>
                           <source type="image/webp" srcset="../assests/images/solution-demo2.webp" />
                           <source type="image/png" srcset="../assests/images/solution-demo2.png" />
                           <img loading="lazy" src="../assests/images/solution-demo2.png" alt="Solution" width="510" height="545"/>
                        </picture>
                     </div>
                     <div class="trackContent">
                        <div class="row">
                           <h3><i></i>Threat Management</h3>
                           <p>The AI intiuitive dashboard provides views of all threats impacting your business </p>
                        </div>
                        <div class="row">
                           <h3><i></i>Advanced Monitoring</h3>
                           <p>Monitor, record and analyze employees' activities in real time</p>
                        </div>
                        <div class="row">
                           <h3><i></i>Identification and Analysis</h3>
                           <p>Get a detailed analysis of employees activity over the system and protect your data with Workstatus</p>
                        </div>
                     </div>
                     <div class="mt70 btnSc">
                        <p>
                           Activate Your Data Loss Prevention Software Today
                        </p>
                        <a href="<?php echo $RegLink; ?>" class="primary_btn1">Start Free Trial</a>
                        <small>No credit card required</small>
                     </div>
                  </div>
               </div>
            </section>
            <section class="timeline">
               <div class="container">
                  <div class="top-section">
                     <h6><span class="bg-purple">Why Is DLP Crucial?</span></h6>
                     <h2>Statistics Showing How Businesses Have Suffered From Loss Or Theft Of Data</h2>
                  </div>
                  <div class="trackRow align-center">
                     <div class="trackImg">
                        <picture>
                           <source type="image/webp" srcset="../assests/images/solution-track2.webp" />
                           <source type="image/png" srcset="../assests/images/solution-track2.png" />
                           <img loading="lazy" src="../assests/images/solution-track2.png" alt="Tracking Software" width="618" height="498"/>
                        </picture>
                     </div>
                     <div class="trackContent">
                        <div class="row">
                           <p>According to <a href="https://www.verizon.com/business/resources/reports/dbir/" rel="nofollow" target="blank">Verizon’s Data Breach Investigations</a> Report, The number of records exposed in breaches has increased by 56% since 2020. </p>
                        </div>
                        <div class="row">
                           <p>
                              According to <a href="https://www.ibm.com/security/data-breach/threat-intelligence/" rel="nofollow" target="blank">IBM’s Cyber Security Intelligence Index</a>, 91% of organizations surveyed reported a security breach in 2021. 
                           </p>
                        </div>
                        <div class="row">
                           <p>
                              According to <a href="https://privacyrights.org/" rel="nofollow" target="blank">The Privacy Rights Clearinghouse</a>, there are more than 1,000 data breaches in a year.
                           </p>
                        </div>
                        <div class="row">
                           <p>
                              According to <a href="https://www.ponemon.org/" rel="nofollow" target="blank">Ponemon Institute’s Cost of Data</a> Breach Study, it costs an average of $214 per lost or stolen record containing sensitive and confidential information.
                           </p>
                        </div>
                        <div class="row">
                           <p>
                              More than half (52%) of all breached records came from four industries: financial services, healthcare, retail, and education.
                           </p>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <section class="middle-section feature-section">
               <div class="item">
                  <div class="container">
                     <div class="top-section">
                        <h6><span class="bg-purple">Real-Time Monitoring</span></h6>
                        <h2>Monitor Data Transfer With Data Loss Prevention Software</h2>
                        <p>Ensure safety of your data by closely monitoring every employee activities on the system. Workstatus gives you a complete overview of what's happening with your data across multiple devices.</p>
                     </div>
                     <div id="active_Current_Tabs1">
                        <div class="flex_row">
                           <div class="column-right">
                              <picture class="page active" id="p1">
                                 <source type="image/webp" srcset="../assests/images/data-loss-01.webp" />
                                 <source type="image/png" srcset="../assests/images/data-loss-01.png" />
                                 <img loading="lazy" src="../assests/images/data-loss-01.png" alt="Data Loss Prevention Monitoring" width="613" height="482" />
                              </picture>
                              <picture class="page" id="p2">
                                 <source type="image/webp" srcset="../assests/images/data-loss-02.webp" />
                                 <source type="image/png" srcset="../assests/images/data-loss-02.png" />
                                 <img loading="lazy" src="../assests/images/data-loss-02.png" alt="Data Loss Prevention Monitoring" width="613" height="482" />
                              </picture>
                           </div>
                           <div class="column-left">
                              <div class="all-content">
                                 <div class="text-column active" id="t1" data-section="active_Current_Tabs1">
                                    <h3><i></i> Get Real Time Notifications</h3>
                                    <p>
                                       Workstatus is a powerful solution to manage your employees in real-time. It helps you track your employees’ activities and notify you to ensure that no wrong doings are happening on the company network.
                                    </p>
                                 </div>
                                 <div class="mob-image">
                                    <picture>
                                       <source type="image/webp" srcset="../assests/images/data-loss-01.webp" />
                                       <source type="image/png" srcset="../assests/images/data-loss-01.png" />
                                       <img loading="lazy" src="../assests/images/data-loss-01.png" alt="Data Loss Prevention Monitoring" width="613" height="482" />
                                    </picture>
                                 </div>
                              </div>
                              <div class="all-content">
                                 <div class="text-column" id="t2" data-section="active_Current_Tabs1">
                                    <h3><i></i>Get Complete Control </h3>
                                    <p>
                                       Real-time monitoring with Workstatus gives you complete control over all the activities on your network and stops employees from sending sensitive information outside of your company.
                                    </p>
                                 </div>
                                 <div class="mob-image">
                                    <picture>
                                       <source type="image/webp" srcset="../assests/images/data-loss-02.webp" />
                                       <source type="image/png" srcset="../assests/images/data-loss-02.png" />
                                       <img loading="lazy" src="../assests/images/data-loss-02.png" alt="Data Loss Prevention Monitoring" width="613" height="482" />
                                    </picture>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="mt40 btnSc">
                        <p>
                           Try It Out!
                        </p>
                        <a href="<?php echo $RegLink; ?>" class="primary_btn1">Start Free Trial</a>
                        <small>
                        It's Worth It
                        </small>
                     </div>
                  </div>
               </div>
               <div class="item">
                  <div class="container">
                     <div class="top-section">
                        <h6><span class="bg-purple">Zero Data Theft</span></h6>
                        <h2>Stay Secured With Data Leakage Prevention Software </h2>
                        <p>
                           Workstatus is a cloud-based solution which detects employee actions that could indicate a security breach. It monitors emails, web browsing behaviour, apps used, URL accessed and notifies admins when it finds suspicious activity.
                        </p>
                     </div>
                     <div id="active_Current_Tabs2">
                        <div class="flex_row">
                           <div class="column-right">
                              <picture class="page active" id="p3">
                                 <source type="image/webp" srcset="../assests/images/data-loss-03.webp" />
                                 <source type="image/png" srcset="../assests/images/data-loss-03.png" />
                                 <img loading="lazy" src="../assests/images/data-loss-03.png" alt="Data Loss Prevention Monitoring" width="613" height="503" />
                              </picture>
                              <picture class="page" id="p4">
                                 <source type="image/webp" srcset="../assests/images/data-loss-04.webp" />
                                 <source type="image/png" srcset="../assests/images/data-loss-04.png" />
                                 <img loading="lazy" src="../assests/images/data-loss-04.png" alt="Data Loss Prevention Monitoring" width="613" height="503" />
                              </picture>
                           </div>
                           <div class="column-left">
                              <div class="all-content">
                                 <div class="text-column active" id="t3" data-section="active_Current_Tabs2">
                                    <h3><i></i>Ensure Complete Safety </h3>
                                    <p>Workstatus's data theft prevention mechanism provides you with direct insight into every aspect of your company’s operations, helping you to ensure total safety of your data.</p>
                                 </div>
                                 <div class="mob-image">
                                    <picture>
                                       <source type="image/webp" srcset="../assests/images/data-loss-03.webp" />
                                       <source type="image/png" srcset="../assests/images/data-loss-03.png" />
                                       <img loading="lazy" src="../assests/images/data-loss-03.png" alt="Data Loss Prevention Monitoring" width="613" height="503" />
                                    </picture>
                                 </div>
                              </div>
                              <div class="all-content">
                                 <div class="text-column" id="t4" data-section="active_Current_Tabs2">
                                    <h3><i></i>Get Real-Time Reports</h3>
                                    <p>Monitor who has been accessing what data and how it is used, with real-time reports. Workstatus helps your business to prevent leaks of sensitive information.</p>
                                 </div>
                                 <div class="mob-image">
                                    <picture>
                                       <source type="image/webp" srcset="../assests/images/data-loss-04.webp" />
                                       <source type="image/png" srcset="../assests/images/data-loss-04.png" />
                                       <img loading="lazy" src="../assests/images/data-loss-04.png" alt="Data Loss Prevention Monitoring" width="613" height="503" />
                                    </picture>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="mt40 btnSc">
                        <p>
                           Start Tracking Your Remote Employees Today
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
                        <h6><span class="bg-purple">Secured Channels And Devices </span></h6>
                        <h2>One Of The Preferred DLP Tools</h2>
                        <p>
                           DLP Software Workstatus prevents data loss or theft in an organization by tracking, monitoring, and alerting about unauthorized access to resources.
                        </p>
                     </div>
                     <div id="active_Current_Tabs3">
                        <div class="flex_row">
                           <div class="column-right">
                              <picture class="page active" id="p5">
                                 <source type="image/webp" srcset="../assests/images/data-loss-05.webp" />
                                 <source type="image/png" srcset="../assests/images/data-loss-05.png" />
                                 <img loading="lazy" src="../assests/images/data-loss-05.png" alt="Data Loss Prevention Monitoring" width="463" height="436" />
                              </picture>
                              <picture class="page" id="p6">
                                 <source type="image/webp" srcset="../assests/images/data-loss-06.webp" />
                                 <source type="image/png" srcset="../assests/images/data-loss-06.png" />
                                 <img loading="lazy" src="../assests/images/data-loss-06.png" alt="Data Loss Prevention Monitoring" width="463" height="436" />
                              </picture>
                           </div>
                           <div class="column-left">
                              <div class="all-content">
                                 <div class="text-column active" id="t5" data-section="active_Current_Tabs3">
                                    <h3><i></i>Keep User Access And Permissions Intact</h3>
                                    <p>
                                       Easily track and maintain access and permissions for all users, including those who have left your organization. There's no need to worry about other employees' revoked or modified permissions. We keep everything in check, so you don't have to.
                                    </p>
                                 </div>
                                 <div class="mob-image">
                                    <picture>
                                       <source type="image/webp" srcset="../assests/images/data-loss-05.webp" />
                                       <source type="image/png" srcset="../assests/images/data-loss-05.png" />
                                       <img loading="lazy" src="../assests/images/data-loss-05.png" alt="Data Loss Prevention Monitoring" width="463" height="436" />
                                    </picture>
                                 </div>
                              </div>
                              <div class="all-content">
                                 <div class="text-column" id="t6" data-section="active_Current_Tabs3">
                                    <h3><i></i>Minimizing Disruption</h3>
                                    <p>
                                       The workstatus platform minimizes disruption while transmitting your data, making it easier to transfer your data securely. We keep a copy of your data on our servers so that even if an outage occurs, we can quickly restore access to users.
                                    </p>
                                 </div>
                                 <div class="mob-image">
                                    <picture>
                                       <source type="image/webp" srcset="../assests/images/data-loss-06.webp" />
                                       <source type="image/png" srcset="../assests/images/data-loss-06.png" />
                                       <img loading="lazy" src="../assests/images/data-loss-06.png" alt="Data Loss Prevention Monitoring" width="463" height="436" />
                                    </picture>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="mt40 btnSc">
                        <p>Have Total Control Of Your Data With Workstatus</p>
                        <a href="<?php echo $RegLink; ?>" class="primary_btn1">Start Free Trial</a>
                        <small>No credit card required</small>
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
                              <h3 itemprop="name">What do you mean by data leakage?</h3>
                              <div class="faq-accordion-content">
                                 <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                    <div itemprop="text">
                                       <p>Data leakage is an occurrence in which any company’s confidential and important information is made available to anyone other than those authorized to see it. Data leakage can have severe consequences for your business, especially if you are dealing with sensitive information that could be used against you by competitors.</p>
                                       <p>
                                          Data leakage can be caused by many different factors, including: 
                                       </p>
                                       <ul>
                                          <li>Unauthorized access to your company’s computer systems. </li>
                                          <li>Employees who are careless with sensitive information.</li>
                                       </ul>
                                       <p>Data leakage is a serious problem that requires immediate attention. If you don’t take steps to prevent data leakage, your company could suffer devastating consequences. Moreover, if your business is found to be at fault for data leakage, you could face legal repercussions and hefty fines. </p>
                                       <p>Data leakage is a severe problem that can have devastating consequences for your business and its reputation. </p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="faq-accordion-item-outer" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                              <h3 itemprop="name">What is data loss prevention software?</h3>
                              <div class="faq-accordion-content">
                                 <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                    <div itemprop="text">
                                       <p>Data loss prevention (DLP) is a security system that records all the activities performed by employees on the internet to ensure that no important information is being shared with any unknown person. 
                                       </p>
                                       <p>
                                          DLP software can help companies protect personally identifiable information, proprietary business data, and other digital assets from loss or theft by tracking the activity of employees on company networks.
                                       </p>
                                       <p>Moreover, DLP is an essential tool for preventing sensitive information from being accidentally leaked. They are capable of monitoring traditional data like emails and social media sites such as Facebook and Twitter.</p>
                                       <p>
                                          Once installed on a network, DLP software monitors all activities that occur on it. It then compares these activities against a predefined set of rules in order to identify any potential security threats or policy violations.
                                       </p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="faq-accordion-item-outer" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                              <h3 itemprop="name">Why a business must care for a Data Loss Prevention (DLP) solution?
                              </h3>
                              <div class="faq-accordion-content">
                                 <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                    <div itemprop="text">
                                       <p>
                                          A DLP solution gives you one centralized place to track everything. It will help you protect your company data by preventing employees from sending sensitive information outside your company network. 
                                       </p>
                                       <p>
                                          Businesses can't afford to lose any data, and that's why the DLP solution helps them prevent unauthorized access to company data and keeps their business information safe from internal threats. 
                                       </p>
                                       <p>With a DLP solution, business owners can also track user activity across their network and keep track of what employees are doing on their computers to prevent data loss. </p>
                                       <p>DLP solutions help businesses prevent unauthorized access to company data by monitoring all activities on employees' systems and alerting managers when any suspicious activity is found.</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="faq-accordion-item-outer" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                              <h3 itemprop="name">How can Workstatus detect data theft or data leakage?</h3>
                              <div class="faq-accordion-content">
                                 <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                    <div itemprop="text">
                                       <p>Workstatus detects data theft or data leakage by keeping track of every application, URL, capturing the screenshots and user activity. Workstatus has a history section that shows a complete record of all applications and activities used on the device. </p>
                                       <p>The records are made for future use so that if there is a need to know about some particular event, you can quickly get it from there. Workstatus also sends alerts when the user accesses any specific application or URL that is not allowed in company policy. It sends an alert message to the admin and logs all user activities on that application or URL to protect your important data.
                                       </p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="faq-accordion-item-outer" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                              <h3 itemprop="name">Does Workstatus DLP software protect data when employee is offline?</h3>
                              <div class="faq-accordion-content">
                                 <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                    <div itemprop="text">
                                       <p>
                                          The simple answer is yes. It does protect data when the employee is offline. In fact, Workstatus is a cloud-based service, which means there are no limits on online or offline employees. Employees can work from home or in remote locations while still having access to their work information and supervisor-set goals. 
                                       </p>
                                       <p>The use of software on employee devices ensures that all activities are tracked. Screenshots are taken, and user activity captured allows managers to know exactly what their employee is doing at any given time.</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="faq-accordion-item-outer" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                              <h3 itemprop="name">How to implement and introduce Workstatus DLP solution to employees?</h3>
                              <div class="faq-accordion-content">
                                 <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                    <div itemprop="text">
                                       <p>
                                          It is pretty simple to implement and introduce Workstatus to employees. All you need to do is follow these steps :
                                       </p>
                                       <ul>
                                       <li>First of all, you need to go for a demo session in which you will be presented with all features and functionalities of Workstatus</li>
                                       <li> Later, along with your executives and employees, you will be introduced to its application</li>
                                       <li> You should also develop a plan for how frequently it would be required to track activities on your employees' workstations (like daily, weekly, etc.).
                                       </li>
                                       <li> Finally, you need to introduce Workstatus to your employees and make them aware of all features and functionalities. Once everything is set up, you can start using Workstatus to track the activities of your employees in an effortless way</li>
                                       <li> Now, you can enjoy real-time access to all activities of your employees from anywhere and anytime. In addition to that, you can easily track down screenshots capturing their activities on workstations. You can also see user activity through the Workstatus dashboard.</li>
                                    </ul>
                                       <p>Thus, Workstatus is undoubtedly one of the best employee activity tracking software available in the market, enabling businesses to monitor and manage employee operations on the system efficiently to prevent data from loss or misuse.</p>
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
                              <h3>How to Manage Remote Work Schedules</h3>
                              <span class="small_anchor">Read more</span>
                           </div>
                        </a>
                     </div>
                     <div class="blog-box column-three">
                        <a href="https://www.workstatus.io/blog/how-to-deal-with-your-anxiety-to-become-more-productive/" class="blog-link">
                           <div class="thumb">
                              <picture>
                                 <source type="image/webp" srcset="../assests/images/useful-resources-blog-2.jpg" />
                                 <source type="image/png" srcset="../assests/images/useful-resources-blog-2.jpg" />
                                 <img loading="lazy" src="../assests/images/useful-resources-blog-2.jpg" alt="Workstatus Time" width="400" height="242" />
                              </picture>
                           </div>
                           <div class="blog-title">
                              <h3>How to Deal With Your Anxiety to Become More Productive?</h3>
                              <span class="small_anchor">Read more</span>
                           </div>
                        </a>
                     </div>
                     <div class="blog-box column-three">
                        <a href="https://www.workstatus.io/blog/useful-strategies-for-avoiding-toxic-productivity/" class="blog-link">
                           <div class="thumb">
                              <picture>
                                 <source type="image/webp" srcset="../assests/images/useful-resources-blog-3.jpg" />
                                 <source type="image/png" srcset="../assests/images/useful-resources-blog-3.jpg" />
                                 <img loading="lazy" src="../assests/images/useful-resources-blog-3.jpg" alt="Workstatus Time" width="400" height="242" />
                              </picture>
                           </div>
                           <div class="blog-title">
                              <h3>10 Useful & Tested Strategies for Avoiding Toxic Productivity</h3>
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
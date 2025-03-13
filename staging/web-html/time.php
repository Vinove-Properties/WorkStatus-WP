<?php require_once 'common/inc/config.inc.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="alternate" href="<?php echo SITE_URL; ?>/time" hreflang="en-us" />
    <link type="text/css" href="./assests/css/featureDetail-new.css" rel="preload stylesheet"
      as="style" />
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
              <h1>Workstatus™ Time - Work Hours Calculator</h1>
              <p>Accurate time keeping to understand how employees are spending their time, identify inefficiencies or mismanagement,<br class="linebrk"> to bring changes that will help workforce to be more efficient.
              </p>
              <!-- <ul class="list">
                <li>Calculate Billable Hours</li>
                <li>Get Smart Reports</li>
                <li>Ensure Greater Productivity</li>
              </ul> -->
              <div class="actionBtn">
                <?php if( geoCTAcheck() === true ) : ?>
                <div><a href="<?php echo $RegLink; ?>" class="primary_btn1"><?php echo $ws_ctas['cta_text']; ?></a>
                  <small>No credit card required</small>
                </div>
                <?php endif; ?>
                <div><a href="javascript:void(0)" onclick="call_demows();" class="primary_btn2">Book A Demo
                  </a>
                  <small>Get queries answered from experts</small>
                </div>
              </div>
              <?php require_once 'common/available-device.php';?>
              <?php require_once 'common/partners.php';?>
              <div class="video-wrap">
                <div class="videoSc" id="has-yt-video">
                  <div class="inner">
                    <div class="topVideo srp-27">
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
        <section class="middle-section feature-section">
          <div class="item">
            <div class="container">
              <div class="top-section">
                <h6><span class="bg-purple">Power Packed</span></h6>
                <h2>Get More Than Just Work Calculator</h2>
              </div>
              <div id="active_Current_Tabs1">
                <div class="flex_row">
                  <div class="column-right">
                    <picture class="page active" id="p1">
                      <source type="image/webp" srcset="./assests/images/time-01.webp">
                      <source type="image/png" srcset="./assests/images/time-01.png">
                      <img loading="lazy" src="./assests/images/time-01.png"
                        alt="Time" width="618" height="490">
                    </picture>
                    <picture class="page" id="p2">
                      <source type="image/webp" srcset="./assests/images/time-02.webp">
                      <source type="image/png" srcset="./assests/images/time-02.png">
                      <img loading="lazy" src="./assests/images/time-02.png"
                        alt="Time" width="618" height="490">
                    </picture>
                    <picture class="page" id="p3">
                      <source type="image/webp" srcset="./assests/images/time-03.webp">
                      <source type="image/png" srcset="./assests/images/time-03.png">
                      <img loading="lazy" src="./assests/images/time-03.png"
                        alt="Time" width="618" height="490">
                    </picture>
                  </div>
                  <div class="column-left">
                    <div class="all-content">
                      <div class="text-column active" id="t1" data-section="active_Current_Tabs1">
                        <h3><i></i>Online Timesheets</h3>
                        <p>Get greater visibility into employees' work patterns and eliminate the need for time-consuming manual calculations.
                        </p>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="./assests/images/time-01.webp">
                          <source type="image/png" srcset="./assests/images/time-01.png">
                          <img loading="lazy" src="./assests/images/time-01.png"
                            alt="Time" width="618" height="490">
                        </picture>
                      </div>
                    </div>
                    <div class="all-content">
                      <div class="text-column" id="t2" data-section="active_Current_Tabs1">
                        <h3><i></i>Work Hours Calculator</h3>
                        <p>Calculate the number of hours you worked and the wage based on your hourly rate.
                        </p>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="./assests/images/time-02.webp">
                          <source type="image/png" srcset="./assests/images/time-02.png">
                          <img loading="lazy" src="./assests/images/time-02.png"
                            alt="Time" width="618" height="490">
                        </picture>
                      </div>
                    </div>
                    <div class="all-content">
                      <div class="text-column" id="t3" data-section="active_Current_Tabs1">
                        <h3><i></i>Productivity Booster</h3>
                        <p>Identify distractions, see where your time is going, and become more efficient.                       
                        </p>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="./assests/images/time-03.webp">
                          <source type="image/png" srcset="./assests/images/time-03.png">
                          <img loading="lazy" src="./assests/images/time-03.png"
                            alt="Time" width="618" height="490">
                        </picture>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="mt40 btnSc">
                <p>Know More About Time Reporting Here</p>
                <a href="javascript:void(0)" onclick="call_demows();" class="primary_btn1">Book A Demo</a>
                <small>Check it out!</small>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="container">
              <div class="top-section">
                <h6><span class="bg-purple">Stay Focussed</span></h6>
                <h2>Manage Better With Time Sheet Calculator</h2>
                <p>Workstatus™ Time can help you stay focused by giving you a clear picture of how you're spending your time. By tracking your time, you can see where you're wasting time and make adjustments accordingly.</p>
              </div>
              <div id="active_Current_Tabs2">
                <div class="flex_row">
                  <div class="column-right">
                    <picture class="page active" id="p4">
                      <source type="image/webp" srcset="./assests/images/time-04.webp">
                      <source type="image/png" srcset="./assests/images/time-04.png">
                      <img loading="lazy" src="./assests/images/time-04.png"
                        alt="Time" width="619" height="490">
                    </picture>
                    <picture class="page" id="p5">
                      <source type="image/webp" srcset="./assests/images/time-05.webp">
                      <source type="image/png" srcset="./assests/images/time-05.png">
                      <img loading="lazy" src="./assests/images/time-05.png"
                        alt="Time" width="628" height="490">
                    </picture>
                  </div>
                  <div class="column-left">
                    <div class="all-content">
                      <div class="text-column active" id="t4" data-section="active_Current_Tabs2">
                        <h3>Productivity Reports</h3>
                        <p>Employees can get the complete view of their productivity with in-depth reports. Identify areas where their productivity is lower than others and focus better on their work for top-notch performance.
                        </p>
                        <ul class="checkList">
                          <li>Better time management</li>
                          <li>Always meet your targets</li>
                        </ul>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="./assests/images/time-04.webp">
                          <source type="image/png" srcset="./assests/images/time-04.png">
                          <img loading="lazy" src="./assests/images/time-04.png"
                            alt="Time" width="619" height="490">
                        </picture>
                      </div>
                    </div>
                    <div class="all-content">
                      <div class="text-column" id="t5" data-section="active_Current_Tabs2">
                        <h3>Track Goals</h3>
                        <p>With Workstatus, you can see how you're spending your time and how much time you're spending on different activities. Use this information to make changes in your behavior so that you can achieve your goals more effectively.
                        </p>
                        <ul class="checkList">
                          <li>Effective planning</li>
                          <li>Easy to achieve goals</li>
                        </ul>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="./assests/images/time-05.webp">
                          <source type="image/png" srcset="./assests/images/time-05.png">
                          <img loading="lazy" src="./assests/images/time-05.png"
                            alt="Time" width="628" height="490">
                        </picture>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="mt40 btnSc">
                <p>Never Lose Sight Of Your Goals</p>
                <a href="javascript:void(0)" onclick="call_demows();" class="primary_btn1">Book A Demo</a>
                <small>Check it Now!</small>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="container">
              <div class="top-section">
                <h6><span class="bg-purple">Bring Efficiencies</span></h6>
                <h2>Work Calculator To Optimize Team Performance</h2>
                <p>Workstatus™ Time can help managers identify which employees are putting in extra effort and going above and beyond their normal job duties. This information can be used to create targeted recognition programs that truly reflect an organization's values.</p>
              </div>
              <div id="active_Current_Tabs3">
                <div class="flex_row">
                  <div class="column-right">
                    <picture class="page active" id="p6">
                      <source type="image/webp" srcset="./assests/images/time-06.webp">
                      <source type="image/png" srcset="./assests/images/time-06.png">
                      <img loading="lazy" src="./assests/images/time-06.png"
                        alt="Time" width="618" height="490">
                    </picture>
                    <picture class="page" id="p7">
                      <source type="image/webp" srcset="./assests/images/time-07.webp">
                      <source type="image/png" srcset="./assests/images/time-07.png">
                      <img loading="lazy" src="./assests/images/time-07.png"
                        alt="Time" width="618" height="490">
                    </picture>
                  </div>
                  <div class="column-left">
                    <div class="all-content">
                      <div class="text-column active" id="t6" data-section="active_Current_Tabs3">
                        <h3>Performance Management </h3>
                        <p>Performance management can help employees improve their skills and achieve their goals. Easy for them to track their progress over time for desired results.
                        </p>
                        <ul class="checkList">
                          <li>Clarity of expectations</li>
                          <li>Increased motivation and accountability</li>
                        </ul>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="./assests/images/time-06.webp">
                          <source type="image/png" srcset="./assests/images/time-06.png">
                          <img loading="lazy" src="./assests/images/time-06.png"
                            alt="Time" width="618" height="490">
                        </picture>
                      </div>
                    </div>
                    <div class="all-content">
                      <div class="text-column" id="t7" data-section="active_Current_Tabs3">
                        <h3>Proof of Work</h3>
                        <p>A valuable tool for employees to reap the benefits of their hard work. Employees can easily show that they have done their job honestly.</p>
                        <ul class="checkList">
                          <li>Reward the top performer</li>
                          <li>Keep work record</li>
                        </ul>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="./assests/images/time-07.webp">
                          <source type="image/png" srcset="./assests/images/time-07.png">
                          <img loading="lazy" src="./assests/images/time-07.png"
                            alt="Time" width="618" height="490">
                        </picture>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?php if( geoCTAcheck() === true ) : ?>
              <div class="mt40 btnSc">
                <p>Get Recognized For Your Work Accomplishments</p>
                <a href="<?php echo $RegLink; ?>" class="primary_btn1"><?php echo $ws_ctas['cta_text']; ?></a>
                <small>Sign Up!</small>
              </div>
              <?php endif; ?>
            </div>
          </div>
          <div class="item">
            <div class="container">
              <div class="top-section">
                <h6><span class="bg-purple">Simplified Technology</span></h6>
                <h2>Automate Attendance With Work Hours Calculator</h2>
                <p>Workstatus™ Time can help in employee attendance management by recording when employees start and stop working, and keeping track of hours worked. This information can also be used for scheduling shifts, monitoring breaks, and managing overtime.</p>
              </div>
              <div id="active_Current_Tabs4">
                <div class="flex_row">
                  <div class="column-right">
                    <picture class="page active" id="p8">
                      <source type="image/webp" srcset="./assests/images/time-08.webp">
                      <source type="image/png" srcset="./assests/images/time-08.png">
                      <img loading="lazy" src="./assests/images/time-08.png"
                        alt="Time" width="638" height="481">
                    </picture>
                    <picture class="page" id="p9">
                      <source type="image/webp" srcset="./assests/images/time-09.webp">
                      <source type="image/png" srcset="./assests/images/time-09.png">
                      <img loading="lazy" src="./assests/images/time-09.png"
                        alt="Time" width="638" height="481">
                    </picture>
                  </div>
                  <div class="column-left">
                    <div class="all-content">
                      <div class="text-column active" id="t8" data-section="active_Current_Tabs4">
                        <h3><i></i>Automated Clock in and Clock out</h3>
                        <p>With Workstatus Time, employees are required to clock in and clock out using an automated system to ensure that employees are tracking their hours correctly and are not working too many or too few hours.</p>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="./assests/images/time-08.webp">
                          <source type="image/png" srcset="./assests/images/time-08.png">
                          <img loading="lazy" src="./assests/images/time-08.png"
                            alt="Time" width="638" height="481">
                        </picture>
                      </div>
                    </div>
                    <div class="all-content">
                      <div class="text-column" id="t9" data-section="active_Current_Tabs4">
                        <h3><i></i>Manage Leaves</h3>
                        <p>Workstatus Time will improve communication and transparency between employees and management about leaves and absences by managing everything in one place.</p>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="./assests/images/time-09.webp">
                          <source type="image/png" srcset="./assests/images/time-09.png">
                          <img loading="lazy" src="./assests/images/time-09.png"
                            alt="Time" width="638" height="481">
                        </picture>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="mt40 btnSc">
                <p>Check How Automated Attendance Tracking<br> With Workstatus Time Works!</p>
                <a href="javascript:void(0)" onclick="call_demows();" rel="nofollow" class="primary_btn1">Book A Demo</a>
                <small>Don’t wait!</small>
              </div>
            </div>
          </div>
        </section>
        <section class="feature_section for-heading-center whitetxt">
          <div class="container">
            <div class="top-section">
              <h6><span class="bg-white">A Bundle Deal</span></h6>
              <h2>Workstatus Is Not Just A Smart Work Hours Calculator</h2>
              <p>Workstatus is an advanced workforce management software that gives deep insight into productivity. It allows managers to see which employees are productive and how they are spending their time. Get the most out of Workstatus’ advanced features to improve your team’s time usage - </p>
            </div>
            <div class="flex_row mt70">
              <div class="column">
                <a href="<?php echo SITE_URL; ?>/best-gps-time-tracking-software-online">
                  <span class="iconImg">
                    <svg aria-hidden="true">
                      <use xlink:href="./assests/images/icons/featuresicon.svg#gps-tracking">
                      </use>
                    </svg>
                  </span>
                  <h3>GPS Tracking</h3>
                  <p>Track Employees’ Location</p>
                  <span class="small_anchor">Explore</span>
                </a>
              </div>
              <div class="column">
                <a href="<?php echo SITE_URL; ?>/best-employee-task-scheduling-software">
                  <span class="iconImg">
                    <svg aria-hidden="true">
                      <use xlink:href="./assests/images/icons/featuresicon.svg#employscheduling">
                      </use>
                    </svg>
                  </span>
                  <h3>Employee Scheduling</h3>
                  <p>Shift Scheduling and Management</p>
                  <span class="small_anchor">Explore</span>
                </a>
              </div>
              <div class="column">
                <a href="<?php echo SITE_URL; ?>/best-employee-monitoring-software-online">
                  <span class="iconImg">
                    <svg aria-hidden="true">
                      <use xlink:href="./assests/images/icons/featuresicon.svg#employmonitoring">
                      </use>
                    </svg>
                  </span>
                  <h3>Employee Monitoring</h3>
                  <p>Conveniently track and monitor employee activities</p>
                  <span class="small_anchor">Explore</span>
                </a>
              </div>
            </div>
            <div class="flex_row mt80">
              <div class="column">
                <a href="<?php echo SITE_URL; ?>/best-project-cost-management-software-online">
                  <span class="iconImg">
                    <svg aria-hidden="true">
                      <use xlink:href="./assests/images/icons/featuresicon.svg#project-budgeting"></use>
                    </svg>
                  </span>
                  <h3>Project Budgeting</h3>
                  <p>Planning and budgeting for profitable projects</p>
                  <span class="small_anchor">Explore</span>
                </a>
              </div>
              <div class="column">
                <a href="<?php echo SITE_URL; ?>/best-online-invoicing-software">
                  <span class="iconImg">
                    <svg aria-hidden="true">
                      <use xlink:href="./assests/images/icons/featuresicon.svg#online-invoicing"></use>
                    </svg>
                  </span>
                  <h3>Online Invoicing</h3>
                  <p>Integrated online invoicing tool with tracking</p>
                  <span class="small_anchor">Explore</span>
                </a>
              </div>
              <div class="column">
                <a href="<?php echo SITE_URL; ?>/best-time-report-software-online">
                  <span class="iconImg">
                    <svg aria-hidden="true">
                      <use xlink:href="./assests/images/icons/featuresicon.svg#detailed-reporting"></use>
                    </svg>
                  </span>
                  <h3>Detailed Reporting</h3>
                  <p>Robust real-time reporting for faster actions</p>
                  <span class="small_anchor">Explore</span>
                </a>
              </div>
            </div>
            <div class="text_center mt70 for-link-white link-text">
              <a href="<?php echo SITE_URL; ?>/features" class="small_anchor">Try More Features</a>
            </div>
            <div class="mt40 text_center for-link-white btnSc">
              <p>Activate your Productivity Monitoring Tracker</p>
              <a href="javascript:void(0)" onclick="call_demows();" class="primary_btn1 bgwhite">Book A Demo</a>
              <small>Get queries answered from experts</small>
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
              <h2>Why Should You Use WorkStatus™ Time?</h2>
            </div>
            <div class="glider-testimonial">
              <div class="glider-contain">
                <div class="glider2">
                  <div>
                    <p class="white">“ Workstatus is my favorite time tracking software because it's very user-friendly. It's very easy to input the time you've worked on a task and it gives you an accurate picture of how much time you've spent on specific projects. ”</p>
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
                        <p class="para_extrasmall white">Justin Henry, USA</p>
                      </div>
                    </div>
                  </div>
                  <div>
                    <p class="white">“ The reports generated by Workstatus are very helpful in demonstrating the value of your work to your boss or client. I highly recommend this software to anyone looking for an efficient and accurate way to track their time. ”</p>
                    <div class="border"><span class="element-triangle"></span></div>
                    <div class="author-box">
                      <picture>
                        <source type="image/webp" srcset="./assests/images/avatar.webp">
                        <source type="image/png" srcset="./assests/images/avatar.png">
                        <img loading="lazy" src="./assests/images/avatar.png" alt="Alex" width="54"
                          height="54">
                      </picture>
                      <div class="author-content">
                        <p class="para_extrasmall white">John Wright, Norway</p>
                      </div>
                    </div>
                  </div>
                  <div>
                    <p class="white">“ Workstatus is a great time tracking tool! It's very easy to use and the reports it generates are extremely helpful in demonstrating the value of your work. I highly recommend this software to anyone looking for an efficient and accurate way to track their time. ”</p>
                    <div class="border"><span class="element-triangle"></span></div>
                    <div class="author-box">
                      <picture>
                        <source type="image/webp" srcset="./assests/images/avatar.webp">
                        <source type="image/png" srcset="./assests/images/avatar.png">
                        <img loading="lazy" src="./assests/images/avatar.png" alt="Larry" width="54"
                          height="54">
                      </picture>
                      <div class="author-content">
                        <p class="para_extrasmall white">Chris Perry, Australia</p>
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
                    <h3 itemprop="name">How does Workstatus Time calculate work hours?
                    </h3>
                    <div class="faq-accordion-content">
                      <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div itemprop="text">
                          <p>Workstatus calculates work hours by counting the hours during which you are logged into the Workstatus app. If you are logged in for 8 hours but only work for 4 of those hours, then Workstatus will count 4 hours as working hours. If you take a break for 2 hours, then Workstatus will not count any of those 2 hours as working hours. </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="faq-accordion-item-outer" itemscope itemprop="mainEntity"
                    itemtype="https://schema.org/Question">
                    <h3 itemprop="name">Can I generate invoices also based on worked hours calculated?</h3>
                    <div class="faq-accordion-content">
                      <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div itemprop="text">
                          <p>Yes. You can generate invoices based on worked hours using time tracking software like Workstatus. Simply enter the time spent on each project and the generator will create an invoice for you.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="faq-accordion-item-outer" itemscope itemprop="mainEntity"
                    itemtype="https://schema.org/Question">
                    <h3 itemprop="name"> Does Workstatus allow a freelancer to calculate work hours?</h3>
                    <div class="faq-accordion-content">
                      <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div itemprop="text">
                          <p>Yes, Workstatus does allow a freelancer to calculate work hours. In order to do so, you will need to create a project and then add time entries for the hours you worked on that project. You can also add notes to your time entries in order to track what you were working on during those hours.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="faq-accordion-item-outer" itemscope itemprop="mainEntity"
                    itemtype="https://schema.org/Question">
                    <h3 itemprop="name">What kind of reports do managers get in Workstatus?</h3>
                    <div class="faq-accordion-content">
                      <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div itemprop="text">
                          <p>Workstatus is an app that provides real-time updates on the progress of your projects. Managers receive a variety of reports, including:</p>
                          <p><strong>a. Project Overview Report:</strong> It shows the project name, start and end dates, team members assigned to the project, and status (active or completed).</p>
                          <p><strong>b. Activity Report:</strong> It shows all activity for a given date range - including when tasks were started and completed, comments added, files uploaded/downloaded, and more.</p>
                          <p><strong>c.Task Report:</strong> It shows all tasks for a given date range - including start and end dates, status (active or completed), assigned team member, comments added, and file attachments/uploads.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="faq-accordion-item-outer" itemscope itemprop="mainEntity"
                    itemtype="https://schema.org/Question">
                    <h3 itemprop="name">What are the important features of a timesheet calculator?</h3>
                    <div class="faq-accordion-content">
                      <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div itemprop="text">
                          <p>The following are the important features of a timesheet calculator:</p>
                          <p><strong>Ease of Use:</strong> It should be easy to input your time and track your hours. The interface should be clean and user-friendly. </p>
                          <p><strong>Flexibility:</strong> It should be flexible enough to accommodate different billing rates and job codes. </p>
                          <p><strong>Accuracy:</strong> The software should automatically calculate the correct totals based on the entered times, eliminating the need for manual calculations. </p>
                          <p><strong>Customizable:</strong> The software should allow you to customize it to match your specific needs and preferences. This might include things like color schemes, logo placement, or which fields appear on the screen.</p>
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
                <a href="https://www.workstatus.io/blog/witty-timesheet-memes-that-will-crack-you-up/" class="blog-link">
                  <div class="thumb">
                    <picture>
                      <source type="image/webp" srcset="./assests/images/useful-resources-blog-1.jpg">
                      <source type="image/png" srcset="./assests/images/useful-resources-blog-1.jpg">
                      <img loading="lazy" src="./assests/images/useful-resources-blog-1.jpg" alt="Workstatus Time" width="400" height="242"> 
                    </picture>
                  </div>
                  <div class="blog-title">
                    <h3>Witty Timesheet Memes That Will Crack You Up</h3>
                    <span class="small_anchor">Read more</span>
                  </div>
                </a>
              </div>
              <div class="blog-box column-three">
                <a href="https://www.workstatus.io/blog/why-time-tracking-is-a-game-changer-for-enterprises/" class="blog-link">
                  <div class="thumb">
                    <picture>
                      <source type="image/webp" srcset="./assests/images/useful-resources-blog-2.jpg">
                      <source type="image/png" srcset="./assests/images/useful-resources-blog-2.jpg">
                      <img loading="lazy" src="./assests/images/useful-resources-blog-2.jpg" alt="Workstatus Time" width="400" height="242"> 
                    </picture>
                  </div>
                  <div class="blog-title">
                    <h3>Here’s Why Time Tracking Is a Game Changer for Enterprises in 2022</h3>
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
                    <h3>Why Your Business Needs Online Timesheets | Benefits & User Manual</h3>
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
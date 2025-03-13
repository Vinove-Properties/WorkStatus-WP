<?php require_once 'common/inc/config.inc.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="alternate" href="<?php echo SITE_URL; ?>/desk" hreflang="en-us" />
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
              <h1>Workstatus™ Desk: Manage Your Workforce</h1>
              <p>Workstatus™ helps you efficiently improve workforce productivity by tracking their activities in real-time and<br class="linebrk"> ensuring that each employee best utilizes their time at work.
              </p>
              <!-- <ul class="list">
                <li>Monitor Team Performance</li>
                <li>Discover Productivity Trends</li>
                <li>Generate Work Proof With Screenshots</li>
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
              <div class="video-wrap">
                <div class="videoSc" id="has-yt-video">
                  <div class="inner">
                    <div class="topVideo srp-26">
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
                <h6><span class="bg-purple">SILENT VIGILANCE</span></h6>
                <h2>Manage Your Teams With Ease</h2>
              </div>
              <div id="active_Current_Tabs1">
                <div class="flex_row">
                  <div class="column-right">
                    <picture class="page active" id="p1">
                      <source type="image/webp" srcset="./assests/images/desk-01.webp">
                      <source type="image/png" srcset="./assests/images/desk-01.png">
                      <img loading="lazy" src="./assests/images/desk-01.png"
                        alt="Desk" width="613" height="503">
                    </picture>
                    <picture class="page" id="p2">
                      <source type="image/webp" srcset="./assests/images/desk-02.webp">
                      <source type="image/png" srcset="./assests/images/desk-02.png">
                      <img loading="lazy" src="./assests/images/desk-02.png"
                        alt="Desk" width="613" height="503">
                    </picture>
                    <picture class="page" id="p3">
                      <source type="image/webp" srcset="./assests/images/desk-03.webp">
                      <source type="image/png" srcset="./assests/images/desk-03.png">
                      <img loading="lazy" src="./assests/images/desk-03.png"
                        alt="Desk" width="613" height="503">
                    </picture>
                  </div>
                  <div class="column-left">
                    <div class="all-content">
                      <div class="text-column active" id="t1" data-section="active_Current_Tabs1">
                        <h3><i></i>Website And App Usage</h3>
                        <p>Track websites visited and apps used by employees and the time spent on each activity.
                        </p>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="./assests/images/desk-01.webp">
                          <source type="image/png" srcset="./assests/images/desk-01.png">
                          <img loading="lazy" src="./assests/images/desk-01.png"
                            alt="Desk" width="613" height="503">
                        </picture>
                      </div>
                    </div>
                    <div class="all-content">
                      <div class="text-column" id="t2" data-section="active_Current_Tabs1">
                        <h3><i></i>Online Timesheets</h3>
                        <p>Calculate employees working hours and pay them accordingly.
                        </p>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="./assests/images/desk-02.webp">
                          <source type="image/png" srcset="./assests/images/desk-02.png">
                          <img loading="lazy" src="./assests/images/desk-02.png"
                            alt="Desk" width="613" height="503">
                        </picture>
                      </div>
                    </div>
                    <div class="all-content">
                      <div class="text-column" id="t3" data-section="active_Current_Tabs1">
                        <h3><i></i>Detailed Insights</h3>
                        <p>Set up custom reports to get detailed information about your team.
                        </p>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="./assests/images/desk-03.webp">
                          <source type="image/png" srcset="./assests/images/desk-03.png">
                          <img loading="lazy" src="./assests/images/desk-03.png"
                            alt="Desk" width="613" height="503">
                        </picture>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="mt40 btnSc">
                <p>Know More About Team Management here</p>
                <a href="javascript:void(0)" onclick="call_demows();" class="primary_btn1">Book A Demo</a>
                <small>Get queries answered by experts</small>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="container">
              <div class="top-section">
                <h6><span class="bg-purple">Boost Productivity</span></h6>
                <h2>Optimize Your Team Performance</h2>
                <p>Stay informed about your team's performance and track their desk activities to ensure they perform their duties efficiently. With Workstatus, set goals for your team, monitor their daily progress and optimize their performance to get more done.</p>
              </div>
              <div id="active_Current_Tabs2">
                <div class="flex_row">
                  <div class="column-right">
                    <picture class="page active" id="p4">
                      <source type="image/webp" srcset="./assests/images/desk-04.webp">
                      <source type="image/png" srcset="./assests/images/desk-04.png">
                      <img loading="lazy" src="./assests/images/desk-04.png"
                        alt="Desk" width="609" height="490">
                    </picture>
                    <picture class="page" id="p5">
                      <source type="image/webp" srcset="./assests/images/desk-05.webp">
                      <source type="image/png" srcset="./assests/images/desk-05.png">
                      <img loading="lazy" src="./assests/images/desk-05.png"
                        alt="Desk" width="609" height="490">
                    </picture>
                  </div>
                  <div class="column-left">
                    <div class="all-content">
                      <div class="text-column active" id="t4" data-section="active_Current_Tabs2">
                        <h3><i></i>Productivity Monitoring</h3>
                        <p>Enhance the performance of your employees by monitoring their productivity in real-time and ensuring they are on track to achieve their goals.
                        </p>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="./assests/images/desk-04.webp">
                          <source type="image/png" srcset="./assests/images/desk-04.png">
                          <img loading="lazy" src="./assests/images/desk-04.png"
                            alt="Desk" width="609" height="490">
                        </picture>
                      </div>
                    </div>
                    <div class="all-content">
                      <div class="text-column" id="t5" data-section="active_Current_Tabs2">
                        <h3><i></i>Comprehensive Insights</h3>
                        <p>Get an in-depth analysis of your organization’s overall productivity with the detailed reports generated by Workstatus. Make data-driven decisions accordingly to improve your business performance and profitability.
                        </p>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="./assests/images/desk-05.webp">
                          <source type="image/png" srcset="./assests/images/desk-05.png">
                          <img loading="lazy" src="./assests/images/desk-05.png"
                            alt="Desk" width="609" height="490">
                        </picture>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="mt40 btnSc">
                <p>Try It Out!</p>
                <a href="javascript:void(0)" onclick="call_demows();" class="primary_btn1">Book A Demo</a>
                <small>It's Worth It!</small>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="container">
              <div class="top-section">
                <h6><span class="bg-purple">Centralized Dashboard</span></h6>
                <h2>An All-Inclusive Dashboard</h2>
                <p>View reports, user activity, and access logs all in one place. Whether you want to check if your employees are working productively or want a clear overview of everything happening at work - Workstatus is there for you to monitor everything.</p>
              </div>
              <div id="active_Current_Tabs3">
                <div class="flex_row">
                  <div class="column-right">
                    <picture class="page active" id="p6">
                      <source type="image/webp" srcset="./assests/images/desk-06.webp">
                      <source type="image/png" srcset="./assests/images/desk-06.png">
                      <img loading="lazy" src="./assests/images/desk-06.png"
                        alt="Desk" width="613" height="503">
                    </picture>
                    <picture class="page" id="p7">
                      <source type="image/webp" srcset="./assests/images/desk-07.webp">
                      <source type="image/png" srcset="./assests/images/desk-07.png">
                      <img loading="lazy" src="./assests/images/desk-07.png"
                        alt="Desk" width="613" height="503">
                    </picture>
                  </div>
                  <div class="column-left">
                    <div class="all-content">
                      <div class="text-column active" id="t6" data-section="active_Current_Tabs3">
                        <h3><i></i>AI Powered Dashboard </h3>
                        <p>With the AI-powered Dashboard of Workstatus, automatically monitor all activities of your employees. Including websites visited, applications used, keystrokes typed, keypad used, emails sent and received, and much more through a single platform.
                        </p>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="./assests/images/desk-06.webp">
                          <source type="image/png" srcset="./assests/images/desk-06.png">
                          <img loading="lazy" src="./assests/images/desk-06.png"
                            alt="Desk" width="613" height="503">
                        </picture>
                      </div>
                    </div>
                    <div class="all-content">
                      <div class="text-column" id="t7" data-section="active_Current_Tabs3">
                        <h3><i></i>Detailed Reports To Smart Decisions</h3>
                        <p>Gain insights into how your team performs every day and how much time they spend away from their desks. Make better decisions with detailed reports about who is working efficiently and who is slacking off. Identify employees who deserve a promotion or need training.</p>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="./assests/images/desk-07.webp">
                          <source type="image/png" srcset="./assests/images/desk-07.png">
                          <img loading="lazy" src="./assests/images/desk-07.png"
                            alt="Desk" width="613" height="503">
                        </picture>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?php if( geoCTAcheck() === true ) : ?>
              <div class="mt40 btnSc">
                <p>Get Started Now, With Your Free Trial Today!</p>
                <a href="<?php echo $RegLink; ?>" class="primary_btn1"><?php echo $ws_ctas['cta_text']; ?></a>
                <small>No credit card required</small>
              </div>
              <?php endif; ?>
            </div>
          </div>
          <div class="item">
            <div class="container">
              <div class="top-section">
                <h6><span class="bg-purple">Proven By Record </span></h6>
                <h2>Ensure Employee Accountability</h2>
                <p>Stay updated on how your team is doing. Keep track of each person's performance in detail and ensure everyone is accountable for their work with real-time updates and notifications.</p>
              </div>
              <div id="active_Current_Tabs4">
                <div class="flex_row">
                  <div class="column-right">
                    <picture class="page active" id="p8">
                      <source type="image/webp" srcset="./assests/images/desk-08.webp">
                      <source type="image/png" srcset="./assests/images/desk-08.png">
                      <img loading="lazy" src="./assests/images/desk-08.png"
                        alt="Desk" width="651" height="520">
                    </picture>
                    <picture class="page" id="p9">
                      <source type="image/webp" srcset="./assests/images/desk-09.webp">
                      <source type="image/png" srcset="./assests/images/desk-09.png">
                      <img loading="lazy" src="./assests/images/desk-09.png"
                        alt="Desk" width="651" height="520">
                    </picture>
                  </div>
                  <div class="column-left">
                    <div class="all-content">
                      <div class="text-column active" id="t8" data-section="active_Current_Tabs4">
                        <h3><i></i> Real Time Screen Captures</h3>
                        <p>Managers receive screenshots from employees’ active screens regularly to keep tabs on what their employees are up to. These screenshots also act as proof of work for employees.</p>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="./assests/images/desk-08.webp">
                          <source type="image/png" srcset="./assests/images/desk-08.png">
                          <img loading="lazy" src="./assests/images/desk-08.png"
                            alt="Desk" width="651" height="520">
                        </picture>
                      </div>
                    </div>
                    <div class="all-content">
                      <div class="text-column" id="t9" data-section="active_Current_Tabs4">
                        <h3><i></i>Online Timesheets</h3>
                        <p>Automated & secure online timesheets make Workstatus an ideal tool for both employers and employees. Employees can track their work hours, while employers can charge clients as per hours worked</p>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="./assests/images/desk-09.webp">
                          <source type="image/png" srcset="./assests/images/desk-09.png">
                          <img loading="lazy" src="./assests/images/desk-09.png"
                            alt="Desk" width="651" height="520">
                        </picture>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="mt40 btnSc">
                <p>Want to Explore?</p>
                <a href="javascript:void(0)" onclick="call_demows();" rel="nofollow" class="primary_btn1">Book A Demo</a>
                <small>Check How You Can Get the Most Out<br> of Your Employees</small>
              </div>
            </div>
          </div>
        </section>
        <section class="feature_section for-heading-center whitetxt">
          <div class="container">
            <div class="top-section">
              <h6><span class="bg-white">Power Packed</span></h6>
              <h2>Powerful Features To Optimize Business Operations</h2>
              <p>Besides being reliable workforce management software, Workstatus helps leaders to make smart decisions based on detailed insights. You can view overall productivity, manage budgets and address security concerns from one system. Stay in charge of all your operations from anywhere, anytime.</p>
              <br>
              <p>Get the most out of Workstatus’s advanced features to enhance productivity and profitability.</p>
            </div>
            <div class="flex_row mt70">
              <div class="column">
                <a href="<?php echo SITE_URL; ?>/best-employee-productivity-cloud-software">
                  <span class="iconImg">
                    <svg aria-hidden="true">
                      <use xlink:href="./assests/images/icons/featuresicon.svg#productivity-management"></use>
                    </svg>
                  </span>
                  <h3>Productivity Management</h3>
                  <p>Enhanced employees’ productivity</p>
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
                      <use
                        xlink:href="./assests/images/icons/featuresicon.svg#employmonitoring">
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
                      <use xlink:href="./assests/images/icons/featuresicon.svg#online-invoicing">
                      </use>
                    </svg>
                  </span>
                  <h3>Online Invoicing</h3>
                  <p>Integrated online invoicing tool with tracking</p>
                  <span class="small_anchor">Explore</span>
                </a>
              </div>
              <div class="column">
                <a href="<?php echo SITE_URL; ?>/best-attendance-tracking-software">
                  <span class="iconImg">
                    <svg aria-hidden="true">
                      <use xlink:href="./assests/images/icons/featuresicon.svg#attendance-management"></use>
                    </svg>
                  </span>
                  <h3>Attendance Management</h3>
                  <p>Manage attendance with ease</p>
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
              <small>Get queries answered by experts</small>
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
              <h2>Feedback From Workstatus Users</h2>
            </div>
            <div class="glider-testimonial">
              <div class="glider-contain">
                <div class="glider2">
                  <div>
                    <p class="white">“ We have been using WorkStatus for the last year, and it has saved us thousands of dollars in lost productivity. We no longer have to worry about our employees wasting time on social media or watching YouTube videos during work hours. Now we can track their activity and be confident that they are working as hard as possible. Thank you, Workstatus, for helping us increase our profits. ”</p>
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
                        <p class="para_extrasmall white">Linda C.</p>
                      </div>
                    </div>
                  </div>
                  <div>
                    <p class="white">“  I have been using WorkStatus for the last few months, and I can see a huge difference in my employees. They are much more productive and efficient now. WorkStatus is really helping me keep track of my employees’ activities throughout their day. And it provides me with important insights into how my team works. I highly recommend WorkStatus to anyone who wants to increase their business productivity.  ”</p>
                    <div class="border"><span class="element-triangle"></span></div>
                    <div class="author-box">
                      <picture>
                        <source type="image/webp" srcset="./assests/images/avatar.webp">
                        <source type="image/png" srcset="./assests/images/avatar.png">
                        <img loading="lazy" src="./assests/images/avatar.png" alt="Alex" width="54"
                          height="54">
                      </picture>
                      <div class="author-content">
                        <p class="para_extrasmall white">Michael Lawn.</p>
                      </div>
                    </div>
                  </div>
                  <div>
                    <p class="white">“  We are a small company, and we were having trouble keeping track of how much time our employees were spending on different projects. WorkStatus has been great for us because it allows us to check in on our employees’ work without having to bug them about it all day long. It also keeps track of their hours so we can pay them correctly. I would recommend WorkStatus to any business owner who wants to keep tabs on their staff activity without being too intrusive. ”</p>
                    <div class="border"><span class="element-triangle"></span></div>
                    <div class="author-box">
                      <picture>
                        <source type="image/webp" srcset="./assests/images/avatar.webp">
                        <source type="image/png" srcset="./assests/images/avatar.png">
                        <img loading="lazy" src="./assests/images/avatar.png" alt="Larry" width="54"
                          height="54">
                      </picture>
                      <div class="author-content">
                        <p class="para_extrasmall white">Jimmy V.</p>
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
                    <h3 itemprop="name">Can I use Workstatus-Desk for WFH or hybrid teams?
                    </h3>
                    <div class="faq-accordion-content">
                      <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div itemprop="text">
                          <p>Yes! Workstatus-Desk is a flexible option for companies looking to monitor employees regardless of where and how they work. It can be used in virtual offices, outside home offices, and on-site. </p>
                          <p>With Remote Access Mode, companies can monitor employees or hybrid teams outside of traditional business hours. This allows businesses to get more done with less resources spent on office space and equipment. In addition, remote access mode also gives users peace of mind that their team members are working productively without having to check up on them throughout the day physically.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="faq-accordion-item-outer" itemscope itemprop="mainEntity"
                    itemtype="https://schema.org/Question">
                    <h3 itemprop="name">What all does the tool track for managers?</h3>
                    <div class="faq-accordion-content">
                      <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div itemprop="text">
                          <p>Workstatus helps managers to track employees and their work in real-time. It is able to track when their team is working, for how long, and on what projects. Workstatus give you a view into your employees' productivity so that you may see if they're truly being productive during work hours or not. </p>
                          <p>With Workstatus, managers can find out exactly where each of their employees spends their time. Workstatus allow managers to take screenshots of their employees' computer screens with just one click. Managers can also record all keystrokes typed by their employees. This allows them to keep an eye on everything happening within their company network even they are away from it. </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="faq-accordion-item-outer" itemscope itemprop="mainEntity"
                    itemtype="https://schema.org/Question">
                    <h3 itemprop="name">How can employees find Workstatus-desk useful?</h3>
                    <div class="faq-accordion-content">
                      <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div itemprop="text">
                          <p>Employees can use Workstatus-desk to enhance their productivity by tracking time spent on projects, tasks, and activities. By using the Workstatus-desk, employees will be able to stay up to date with what steps they can take to boost their productivity. </p>
                          <p>This information is valuable for all employees as it helps them understand where they should focus their efforts and energy based on current priorities set by managers and other leaders within an organization. The visibility that Workstatus-desk provides into project timelines and task assignments also enables employees to manage their workloads and schedules better. </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="faq-accordion-item-outer" itemscope itemprop="mainEntity"
                    itemtype="https://schema.org/Question">
                    <h3 itemprop="name">For testing purpose, can you provide me full rights?</h3>
                    <div class="faq-accordion-content">
                      <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div itemprop="text">
                          <p>Absolutely Workstatus will provide you with full rights to its software for testing purposes. You can use it in your office and monitor all employees. You can also check their computer usage, websites visited, keystrokes typed, and much more. It is one of the most powerful employee monitoring tools available in the market today. </p>
                          <p> It is one of those excellent and completely hidden spy that helps you monitor your employees' activities at the office from a remote location. It supports almost all major operating systems, including Windows, Mac, Android, and iOS devices.</p>
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
                <a href="https://www.workstatus.io/blog/leadership-tips-for-digital-workforce-management/" class="blog-link">
                  <div class="thumb">
                    <picture>
                      <source type="image/webp" srcset="./assests/images/useful-resources-blog-1.jpg">
                      <source type="image/png" srcset="./assests/images/useful-resources-blog-1.jpg">
                      <img loading="lazy" src="./assests/images/useful-resources-blog-1.jpg" alt="Workstatus Time" width="400" height="242"> 
                    </picture>
                  </div>
                  <div class="blog-title">
                    <h3>7 Leadership Tips for Digital Workforce Management</h3>
                    <span class="small_anchor">Read more</span>
                  </div>
                </a>
              </div>
              <div class="blog-box column-three">
                <a href="https://www.workstatus.io/blog/why-is-workplace-analytics-critical-no-matter-where-people-work/" class="blog-link">
                  <div class="thumb">
                    <picture>
                      <source type="image/webp" srcset="./assests/images/useful-resources-blog-2.jpg">
                      <source type="image/png" srcset="./assests/images/useful-resources-blog-2.jpg">
                      <img loading="lazy" src="./assests/images/useful-resources-blog-2.jpg" alt="Workstatus Time" width="400" height="242"> 
                    </picture>
                  </div>
                  <div class="blog-title">
                    <h3>Why is Workplace Analytics Critical No Matter Where People Work?</h3>
                    <span class="small_anchor">Read more</span>
                  </div>
                </a>
              </div>
              <div class="blog-box column-three">
                <a href="https://www.workstatus.io/blog/distributed-workforce-how-to-manage-a-distributed-workforce/" class="blog-link">
                  <div class="thumb">
                    <picture>
                      <source type="image/webp" srcset="./assests/images/useful-resources-blog-3.jpg">
                      <source type="image/png" srcset="./assests/images/useful-resources-blog-3.jpg">
                      <img loading="lazy" src="./assests/images/useful-resources-blog-3.jpg" alt="Workstatus Time" width="400" height="242"> 
                    </picture>
                  </div>
                  <div class="blog-title">
                    <h3>Distributed Workforce- How to Manage a Distributed Workforce?</h3>
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
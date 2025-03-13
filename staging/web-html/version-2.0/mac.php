<?php require_once 'common/inc/config.inc.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="alternate" href="<?php echo SITE_URL; ?>/mac" hreflang="en-us" />
    <link type="text/css" href="./assests/css/platform.css" rel="preload stylesheet" as="style" />
    <?php require_once 'common/inc/header-files.php';?>
  </head>
  <body>
    <?php require_once 'common/inc/after-body-tag.php'; ?>
    <div class="body__wrapper">
      <div class="feature-header">
        <?php require_once 'common/header.php';?>
      </div>
      <main class="site__content">
        <section class="hero-banner inner-banner-bg">
          <div class="bannerwrap mac-banner">
            <div class="container">
              <div class="inner-wrap">
                <h1>Mac Time Tracking App</h1>
                <p>Workstatus is a fully automatic Mac time tracker that lets you track the time of your team down to the second, to easily see how
                  <br class="linebrk"> much time your people are  spending on each task. Download and run it in the background for seamless tracking.
                </p>
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
                <?php require_once 'common/partners.php';?>
              </div>
            </div>
          </div>
        </section>
        <section class="top-plateform">
          <div class="container">
            <div class="flex_row">
              <div class="column-left">
                <picture>
                  <source type="image/webp" srcset="./assests/images/track-mack.webp">
                  <source type="image/png" srcset="./assests/images/track-mack.png">
                  <img loading="lazy" src="./assests/images/track-mack.png" alt="Mac" width="463" height="436">
                </picture>
              </div>
              <div class="column-right">
                <h6><span class="bg-purple">Easy To Operate</span></h6>
                <h2>Powerful Mac Time Tracking Software</h2>
                <p>Explore the full functionality of the time tracker on all Mac OS distributions released in 2010 and later.
                </p>
                <ul class="checkList">
                  <li>MAC OS 10.14: "Mojave"</li>
                  <li>MAC 10.15: "Catalina"</li>
                  <li>MAC 11: "Big Sur"</li>
                  <li>MAC 12: "Monterey"</li>
                </ul>
              </div>
            </div>
          </div>
        </section>
        <section class="boxDiv">
          <div class="container">
            <div class="boxRow">
              <div class="boxCol">
                <i class="icon1"></i>
                <h3>Superior quality of work</h3>
              </div>
              <div class="boxCol">
                <i class="icon2"></i>
                <h3>Boost profits for your business</h3>
              </div>
              <div class="boxCol">
                <i class="icon3"></i>
                <h3>Better ROI and Accountability</h3>
              </div>
            </div>
          </div>
        </section>
        <section class="feature_section for-heading-center whitetxt">
          <div class="container">
            <div class="top-section">
              <h6><span class="bg-white">Core Features</span></h6>
              <h2>A Full-Fledged Mac Desktop App Designed To Master Time Management</h2>
              <p>Workstatus is a powerful AI-enabled workforce management software that allows multiple teams to work together more effectively. Get the most out
                of Workstatus from its variety of features to build a more productive workplace.
              </p>
            </div>
            <div class="flex_row mt70">
              <div class="column">
                <a href="<?php echo SITE_URL; ?>/best-time-tracking-software-online">
                  <span class="iconImg">
                    <svg aria-hidden="true">
                      <use xlink:href="./assests/images/icons/featuresicon.svg#time-tracking">
                      </use>
                    </svg>
                  </span>
                  <h3>Time Tracking</h3>
                  <p>Track working time spent on various activities</p>
                  <span class="small_anchor">Explore</span>
                </a>
              </div>
              <div class="column">
                <a href="<?php echo SITE_URL; ?>/best-employee-productivity-cloud-software">
                  <span class="iconImg">
                    <svg aria-hidden="true">
                      <use xlink:href="./assests/images/icons/featuresicon.svg#productivity-monitoring"></use>
                    </svg>
                  </span>
                  <h3>Productivity Calculator</h3>
                  <p>Quick updates and filtered reports</p>
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
                  <h3>Faster Invoicing</h3>
                  <p>One-click invoice conversion</p>
                  <span class="small_anchor">Explore</span>
                </a>
              </div>
            </div>
            <div class="flex_row mt80">
              <div class="column">
                <a href="<?php echo SITE_URL; ?>/best-employee-timesheets-cloud-software">
                  <span class="iconImg">
                    <svg aria-hidden="true">
                      <use xlink:href="./assests/images/icons/featuresicon.svg#manage-timesheets"></use>
                    </svg>
                  </span>
                  <h3>Automated Timesheets</h3>
                  <p>Track, review and manage timesheets</p>
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
                  <h3>Filtered Reporting</h3>
                  <p>Robust and detailed reports for analysis</p>
                  <span class="small_anchor">Explore</span>
                </a>
              </div>
              <div class="column">
                <a href="<?php echo SITE_URL; ?>/best-gps-time-tracking-software-online">
                  <span class="iconImg">
                    <svg aria-hidden="true">
                      <use xlink:href="./assests/images/icons/featuresicon.svg#gps-tracking">
                      </use>
                    </svg>
                  </span>
                  <h3>GPS Tracking</h3>
                  <p>Track on-field team members</p>
                  <span class="small_anchor">Explore</span>
                </a>
              </div>
            </div>
            <div class="text_center mt70 for-link-white link-text">
              <a href="<?php echo SITE_URL; ?>/features" class="small_anchor">View All Features </a>
            </div>
            <div class="mt40 text_center for-link-white btnSc">
              <p>Activate your Productivity Monitoring Tracker</p>
              <a href="javascript:void(0)" onclick="call_demows();" class="primary_btn1 bgwhite">Book A Demo</a>
              <small>Get queries answered from experts</small>
            </div>
          </div>
        </section>
        <section class="timeline">
          <div class="container">
            <div class="top-section">
              <h6><span class="bg-purple">Simple To Use</span></h6>
              <h2>How Workstatus’ Mac Time Tracker Works</h2>
              <p>Workstatus Mac time tracker app helps teams keep track of their time and activity levels. Let’s
                get quickly started with Workstatus.
              </p>
            </div>
            <div class="trackRow align-center">
              <div class="trackImg">
                <picture>
                  <source type="image/webp" srcset="./assests/images/mac-track.webp">
                  <source type="image/png" srcset="./assests/images/mac-track.png">
                  <img loading="lazy" src="./assests/images/mac-track.png" alt="Tracking Software"
                    width="475" height="379">
                </picture>
              </div>
              <div class="trackContent">
                <div class="row">
                  <h5>STEP 1</h5>
                  <h3>Create an account</h3>
                  <p>Sign up for Workstatus free & get started.</p>
                </div>
                <div class="row">
                  <h5>STEP 2</h5>
                  <h3>Download Our Mac time tracking app</h3>
                  <p>Download the latest version Workstatus app on Mac. It will hardly take any time.</p>
                </div>
                <div class="row">
                  <h5>STEP 3</h5>
                  <h3>Start the timer</h3>
                  <p>When you start working, start the timer with one click.
                  </p>
                </div>
                <div class="row">
                  <h5>STEP 4</h5>
                  <h3>Stop the timer and enter the details</h3>
                  <p>You can add details and notes of your tasks, projects, productivity, and billable hours.
                  </p>
                </div>
                <div class="row">
                  <h5>STEP 5</h5>
                  <h3>Extract Reports for Analysis</h3>
                  <p>Log in to your online dashboard to extract data saved in reports. Get daily reports from timesheets, screenshots, activity, and URL tracking.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="how-download">
          <div class="container">
            <div class="top-section">
              <picture class="techImage">
                <source type="image/webp" srcset="./assests/images/apple-image.webp">
                <source type="image/png" srcset="./assests/images/apple-image.png">
                <img loading="lazy" src="./assests/images/apple-image.png" alt="Tracking Software"
                  width="26" height="30">
              </picture>
              <h6><span class="bg-white">Workstatus</span></h6>
              <h2>Incredibly Easy to Download</h2>
              <p>Time Tracking App for Mac</p>
              <a href="<?php echo SITE_URL; ?>/downloads" class="primary_btn"> Download </a>
            </div>
          </div>
        </section>
        <section class="middle-section feature-section">
          <div class="item">
            <div class="container">
              <div class="top-section">
                <h6><span class="bg-purple">Manage Smoothly</span></h6>
                <h2>Get Instant Access to Time Tracking Reports</h2>
                <p>Keeping accurate records of time spent on various projects is key to being effective.
                  Workstatus' time reports are a great tool to help you do just that. 
                </p>
              </div>
              <div id="active_Current_Tabs1">
                <div class="flex_row">
                  <div class="column-right">
                    <picture class="page active" id="p1">
                      <source type="image/webp" srcset="./assests/images/mac-01.webp">
                      <source type="image/png" srcset="./assests/images/mac-01.png">
                      <img loading="lazy" src="./assests/images/mac-01.png"
                        alt="Mac" width="632" height="472">
                    </picture>
                    <picture class="page" id="p2">
                      <source type="image/webp" srcset="./assests/images/mac-02.webp">
                      <source type="image/png" srcset="./assests/images/mac-02.png">
                      <img loading="lazy" src="./assests/images/mac-02.png"
                        alt="Mac" width="632" height="472">
                    </picture>
                    <picture class="page" id="p3">
                      <source type="image/webp" srcset="./assests/images/mac-03.webp">
                      <source type="image/png" srcset="./assests/images/mac-03.png">
                      <img loading="lazy" src="./assests/images/mac-03.png"
                        alt="Mac" width="632" height="472">
                    </picture>
                  </div>
                  <div class="column-left">
                    <div class="all-content">
                      <div class="text-column active" id="t1" data-section="active_Current_Tabs1">
                        <h3><i></i>Online Timesheets</h3>
                        <p>Track employees' work, daily productivity, bottlenecks, and project ROI. Customize view filters for projects, weeks, members, and clients.
                        </p>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="./assests/images/mac-01.webp">
                          <source type="image/png" srcset="./assests/images/mac-01.png">
                          <img loading="lazy" src="./assests/images/mac-01.png"
                            alt="Mac" width="632" height="472">
                        </picture>
                      </div>
                    </div>
                    <div class="all-content">
                      <div class="text-column" id="t2" data-section="active_Current_Tabs1">
                        <h3><i></i>Manual Timesheet Edits</h3>
                        <p>Edit or let your team edit timesheets in case of any forgotten entries. Workstatus lets you manually
                          edit sheets with notes for seamless collaboration and coordination.
                        </p>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="./assests/images/mac-02.webp">
                          <source type="image/png" srcset="./assests/images/mac-02.png">
                          <img loading="lazy" src="./assests/images/mac-02.png"
                            alt="Mac" width="632" height="632">
                        </picture>
                      </div>
                    </div>
                    <div class="all-content">
                      <div class="text-column" id="t3" data-section="active_Current_Tabs1">
                        <h3><i></i>Proof of Work </h3>
                        <p>With Workstatus, get proof of work features like Screenshots capturing, App & URL
                          tracking, Activity rates, and more to reward the performing employees.
                        </p>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="./assests/images/mac-03.webp">
                          <source type="image/png" srcset="./assests/images/mac-03.png">
                          <img loading="lazy" src="./assests/images/mac-03.png"
                            alt="Mac" width="632" height="472">
                        </picture>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="mt40 btnSc">
                <p>Ask your queries from experts</p>
                <a href="javascript:void(0)" onclick="call_demows();" class="primary_btn1">Book A Demo</a>
                <small>Get queries answered from experts</small>
              </div>
            </div>
          </div>
        </section>
        <section class="wsMobile whitetxt">
          <?php require_once 'common/workstatus-device.php';?>
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
                    <h3 itemprop="name">Does Apple have a time tracking app?
                    </h3>
                    <div class="faq-accordion-content">
                      <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div itemprop="text">
                          <p>No, Apple doesn’t have an in-built time tracking app, but it does support a time tracking app for Mac like Workstatus. You can easily download Workstatus on your Mac device from the app store and run it to track your time, activities, productivity, and projects.
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="faq-accordion-item-outer" itemscope itemprop="mainEntity"
                    itemtype="https://schema.org/Question">
                    <h3 itemprop="name">How do I track my time on Mac?</h3>
                    <div class="faq-accordion-content">
                      <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div itemprop="text">
                          <p>Signup to Workstatus online and then download the Mac time tracker on your Mac from
                            the apple store. Set up the time by giving necessary permissions.
                            And voila! You’re ready to track your time, productivity and projects.
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
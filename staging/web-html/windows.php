<?php require_once 'common/inc/config.inc.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="alternate" href="<?php echo SITE_URL; ?>/windows" hreflang="en-us" />
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
          <div class="bannerwrap windows-banner">
            <div class="container">
              <div class="inner-wrap">
                <h1>A Windows Time Tracker App Designed<br class="linebrk"> For Productive Teams</h1>
                <p>Download and run the Workstatus- Windows time tracker to manage your workforce better. Workstatus app is compatible<br class="linebrk"> with all available features on all Windows workstations.
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
              </div>
            </div>
          </div>
        </section>
        <section class="top-plateform">
          <div class="container">
            <div class="flex_row">
              <div class="column-left">
                <picture>
                  <source type="image/webp" srcset="./assests/images/mac-image.webp">
                  <source type="image/png" srcset="./assests/images/mac-image.png">
                  <img loading="lazy" src="./assests/images/mac-image.png" alt="Automated Time" width="463" height="436">
                </picture>
              </div>
              <div class="column-right">
                <h6><span class="bg-purple">Compatible Across</span></h6>
                <h2>Automatic And Simple Time Tracker For Windows</h2>
                <p>Explore Full functionality of the time tracking app for Windows. Run this powerful desktop app built to run on any Windows version 2000/XP or newer.
                </p>
                <ul class="checkList">
                  <li>Windows 8</li>
                  <li>Windows 8.1</li>
                  <li>Windows 10</li>
                  <li>Windows 11</li>
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
                <h3>Track time on specific projects</h3>
              </div>
              <div class="boxCol">
                <i class="icon2"></i>
                <h3>Proof of work features to view productivity</h3>
              </div>
              <div class="boxCol">
                <i class="icon3"></i>
                <h3>Granular control over working hours</h3>
              </div>
            </div>
          </div>
        </section>
        <section class="feature_section for-heading-center whitetxt">
          <div class="container">
            <div class="top-section">
              <h6><span class="bg-white">Core Features</span></h6>
              <h2>A Comprehensive Windows Desktop App Designed To Ace Time Management</h2>
              <p>Workstatus is the most advanced AI-enabled workforce analytics software that enables multiple teams to work together more efficiently. Get the most out of Workstatus from its powerful features to create a more productive workplace.
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
              <h6><span class="bg-purple">Get-Set-Go</span></h6>
              <h2> How Workstatus’ Microsoft Time Tracker Works </h2>
              <p>Workstatus windows time tracker app helps teams keep track of their time and activity levels. Let’s get quickly started with Workstatus.
              </p>
            </div>
            <div class="trackRow align-center">
              <div class="trackImg">
                <picture>
                  <source type="image/webp" srcset="./assests/images/windows-track.webp">
                  <source type="image/png" srcset="./assests/images/windows-track.png">
                  <img loading="lazy" src="./assests/images/windows-track.png" alt="Tracking Software"
                    width="578" height="353">
                </picture>
              </div>
              <div class="trackContent">
                <div class="row">
                  <h5>STEP 1</h5>
                  <h3>Create an account</h3>
                  <p>Sign up for Workstatus with your credentials</p>
                </div>
                <div class="row">
                  <h5>STEP 2</h5>
                  <h3>Download Our Windows Time Tracking App</h3>
                  <p>Download Workstatus windows time tracker on your system</p>
                </div>
                <div class="row">
                  <h5>STEP 3</h5>
                  <h3>Start The Timer</h3>
                  <p>When you start working, start the timer with a single click.
                  </p>
                </div>
                <div class="row">
                  <h5>STEP 4</h5>
                  <h3>Stop The Timer And Enter Details</h3>
                  <p>You can add details and notes of your tasks, projects, productivity, and billable hours.
                  </p>
                </div>
                <div class="row">
                  <h5>STEP 5</h5>
                  <h3>Extract Reports For Analysis</h3>
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
                <source type="image/webp" srcset="./assests/images/windows-image.webp">
                <source type="image/png" srcset="./assests/images/windows-image.png">
                <img loading="lazy" src="./assests/images/windows-image.png" alt="Tracking Software"
                  width="30" height="30">
              </picture>
              <h6><span class="bg-white">Workstatus</span></h6>
              <h2>Incredibly Easy to Download</h2>
              <p>Time Tracking App for Windows</p>
              <a href="<?php echo SITE_URL; ?>/downloads" class="primary_btn"> Download </a>
            </div>
          </div>
        </section>
        <section class="middle-section feature-section">
          <div class="item">
            <div class="container">
              <div class="top-section">
                <h6><span class="bg-purple">Powerful Reporting System</span></h6>
                <h2>Explore More From Online Time Reports</h2>
                <p>Online time reports are a great way to help you keep accurate records of time spent on multiple projects for higher productivity and profit.
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
                        <h3><i></i>Detailed Reports</h3>
                        <p>
                          View automatically tracked reports in the dashboard or download in any format you like
                          to share across the team members. Ensure a more streamlined admin job for you by scheduling reports you want.
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
                        <h3><i></i>Accurate Analysis</h3>
                        <p>Track how much time, efforts, and money your team has invested in the project from the budget. View, track, and share report quickly across the teams. Filter and customize your reports how you want to view them with multiple filters.
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
                        <h3><i></i>Customization with Ease</h3>
                        <p>In a single report of time tracking, you can check hours worked, productivity levels, and billable hours of your teams. Now, customize your reports on different aspects to avoid manual tracking.
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
                    <h3 itemprop="name">Does Workstatus for Windows have a screen time tracker?
                    </h3>
                    <div class="faq-accordion-content">
                      <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div itemprop="text">
                          <p>Yes, Workstatus for windows has a screen time tracker feature. This feature allows you to see how much time you're spending on your computer each day, and can help you improve your productivity.
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="faq-accordion-item-outer" itemscope itemprop="mainEntity"
                    itemtype="https://schema.org/Question">
                    <h3 itemprop="name">Is Workstatus really free for Windows?</h3>
                    <div class="faq-accordion-content">
                      <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div itemprop="text">
                          <p>Yes, Workstatus is a free time tracking app that gets installed in your windows desktop and works seamlessly in the background.
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="faq-accordion-item-outer" itemscope itemprop="mainEntity"
                    itemtype="https://schema.org/Question">
                    <h3 itemprop="name">How do I see how much time I spent on apps on Windows?</h3>
                    <div class="faq-accordion-content">
                      <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div itemprop="text">
                          <p>Download windows time tracker from Workstatus and switch it on as the first thing when you start working. The app will seamlessly work in the background and track your every activity and hour spent on screen.
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
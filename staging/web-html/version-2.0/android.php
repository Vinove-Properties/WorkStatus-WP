<?php require_once 'common/inc/config.inc.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="alternate" href="<?php echo SITE_URL; ?>/android" hreflang="en-us" />
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
          <div class="bannerwrap android-banner">
            <div class="container">
              <div class="inner-wrap">
                <h1>Workstatus For Android Devices</h1>
                <p>Take advantage of a full-featured and lightweight android app for workforce management. Now, track time & productivity<br class="linebrk"> of your employees with powerful AI analytics, while you are on the go.
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
        <section class="trackEm post-animation">
          <div class="container">
            <div class="top-section">
              <h6><span class="bg-purple">ON THE GO WORKFORCE MANAGEMENT ANDROID APP</span></h6>
              <h2>Smart Android App To Track Productivity & Time</h2>
            </div>
            <div class="trackRow align-center">
              <div class="trackImg">
                <picture>
                  <source type="image/webp" srcset="./assests/images/android-track.webp">
                  <source type="image/png" srcset="./assests/images/android-track.png">
                  <img loading="lazy" src="./assests/images/android-track.png" alt="Tracking" width="541" height="496">
                </picture>
              </div>
              <div class="trackContent">
                <div class="row">
                  <h3><i></i> Track time & productivity </h3>
                  <p>Track your time and productivity on each task throughout the day via your mobile phone. Get all the data & reports to know the time your team is spending on projects and how productive they are overall.</p>
                </div>
                <div class="row">
                  <h3><i></i> Access timesheet from anywhere</h3>
                  <p>View online timesheets from anywhere. Edit timesheets manually in case of wrong entries or when someone forgets to log their hours. Also, you can view, accept or reject timesheets submitted by your employees.</p>
                </div>
                <div class="row">
                  <h3><i></i> Stay updated while on the move</h3>
                  <p>View location, movement and task progress of your employees. With real-time screenshot capture, view what your employees are doing. Analyze the data collected with the help of AI-powered reports.</p>
                </div>
              </div> 
            </div>
            <?php if( geoCTAcheck() === true ) : ?>
            <div class="mt40 btnSc">
              <p>Try It Out!</p>
              <a href="<?php echo $RegLink; ?>" class="primary_btn1"><?php echo $ws_ctas['cta_text']; ?></a>
              <small> It's Worth It!</small>
            </div>
            <?php endif; ?>
          </div>
        </section>
        <section class="feature_section for-heading-center whitetxt">
          <div class="container">
            <div class="top-section">
              <h6><span class="bg-white">TOP FEATURES OF WORKSTATUS ANDROID APP</span></h6>
              <h2>Stay Updated Always</h2>
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
                  <p>Keep track of how much time your employees spend on each project</p>
                  <span class="small_anchor">Explore</span>
                </a>
              </div>
              <div class="column">
                <a href="<?php echo SITE_URL; ?>/geofence-time-clock-software-online">
                  <span class="iconImg">
                    <svg aria-hidden="true">
                      <use xlink:href="./assests/images/icons/featuresicon.svg#geofencing"></use>
                    </svg>
                  </span>
                  <h3>Geofencing</h3>
                  <p>Auto-track attendance by creating virtual boundaries</p>
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
                  <p>Accurate and instant invoicing </p>
                  <span class="small_anchor">Explore</span>
                </a>
              </div>
            </div>
            <div class="flex_row mt80">
              <div class="column">
                <a href="<?php echo SITE_URL; ?>/best-gps-time-tracking-software-online">
                  <span class="iconImg">
                    <svg aria-hidden="true">
                      <use xlink:href="./assests/images/icons/featuresicon.svg#gps-tracking">
                      </use>
                    </svg>
                  </span>
                  <h3>GPS Tracking</h3>
                  <p>Keep track of your employees while they're on the go</p>
                  <span class="small_anchor">Explore</span>
                </a>
              </div>
              <div class="column">
                <a href="<?php echo SITE_URL; ?>/best-employee-timesheets-cloud-software">
                  <span class="iconImg">
                    <svg aria-hidden="true">
                      <use xlink:href="./assests/images/icons/featuresicon.svg#manage-timesheets"></use>
                    </svg>
                  </span>
                  <h3>Automated Timesheets</h3>
                  <p>Keep track of progress & time spent on projects </p>
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
                  <p>Make growth-oriented & smart decisions </p>
                  <span class="small_anchor">Explore</span>
                </a>
              </div>
            </div>
            <div class="text_center mt70 for-link-white link-text">
              <a href="<?php echo SITE_URL; ?>/features" class="small_anchor">View All Features </a>
            </div>
            <div class="mt40 text_center for-link-white btnSc">
              <p>Let’s connect to take it further</p>
              <a href="javascript:void(0)" onclick="call_demows();" class="primary_btn1 bgwhite">Book A Demo</a>
              <small>Get queries answered from experts</small>
            </div>
          </div>
        </section>
        <section class="timeline">
          <div class="container">
            <div class="top-section">
              <h6><span class="bg-purple">USER-FRIENDLY & SMART </span></h6>
              <h2>How Workstatus Android App Works </h2>
              <p>You need just one app to keep everything under control. Let’s get started quickly with Workstatus.</p>
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
                  <h3>Download our android app</h3>
                  <p>Download the latest version of the Workstatus app on your android devices.</p>
                </div>
                <div class="row">
                  <h5>STEP 3</h5>
                  <h3>Start the timer</h3>
                  <p>When you start working, start the timer with one click. It is that simple.
                  </p>
                </div>
                <div class="row">
                  <h5>STEP 4</h5>
                  <h3>Add required details</h3>
                  <p>You can add details and notes of your tasks, projects, productivity, and billable hours.
                  </p>
                </div>
                <div class="row">
                  <h5>STEP 5</h5>
                  <h3>Extract reports for analysis</h3>
                  <p>Log in to your online dashboard to extract data saved in reports. Get daily reports based on attendance, projects & tasks, jobsite visits, weekly activity reports and customized reports. 
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
                <source type="image/webp" srcset="./assests/images/android-image.webp">
                <source type="image/png" srcset="./assests/images/android-image.png">
                <img loading="lazy" src="./assests/images/android-image.png" alt="Tracking Software"
                  width="30" height="30">
              </picture>
              <h6><span class="bg-white">Workstatus</span></h6>
              <h2>An All-In-One Android App</h2>
              <p>Start your workforce management journey</p>
              <a href="<?php echo SITE_URL; ?>/downloads" class="primary_btn"> Download </a>
            </div>
          </div>
        </section>
        <section class="middle-section feature-section">
          <div class="item">
            <div class="container">
              <div class="top-section">
                <h6><span class="bg-purple">BOOST PRODUCTIVITY BY 3X TIMES</span></h6>
                <h2>Streamline Your Business Operations With Workstatus</h2>
              </div>
              <div id="active_Current_Tabs1">
                <div class="flex_row">
                  <div class="column-right">
                    <picture class="page active" id="p1">
                      <source type="image/webp" srcset="./assests/images/iphone-01.webp">
                      <source type="image/png" srcset="./assests/images/iphone-01.png">
                      <img loading="lazy" src="./assests/images/iphone-01.png"
                        alt="Iphone" width="432" height="567">
                    </picture>
                    <picture class="page" id="p2">
                      <source type="image/webp" srcset="./assests/images/iphone-02.webp">
                      <source type="image/png" srcset="./assests/images/iphone-02.png">
                      <img loading="lazy" src="./assests/images/iphone-02.png"
                        alt="Iphone" width="432" height="567">
                    </picture>
                    <picture class="page" id="p3">
                      <source type="image/webp" srcset="./assests/images/iphone-03.webp">
                      <source type="image/png" srcset="./assests/images/iphone-03.png">
                      <img loading="lazy" src="./assests/images/iphone-03.png"
                        alt="Iphone" width="432" height="567">
                    </picture>
                    <picture class="page" id="p4">
                      <source type="image/webp" srcset="./assests/images/iphone-04.webp">
                      <source type="image/png" srcset="./assests/images/iphone-04.png">
                      <img loading="lazy" src="./assests/images/iphone-04.png"
                        alt="Iphone" width="432" height="567">
                    </picture>
                  </div>
                  <div class="column-left">
                    <div class="all-content">
                      <div class="text-column active" id="t1" data-section="active_Current_Tabs1">
                        <h3><i></i> AI intuitive dashboard  
                        </h3>
                        <p>Get accurate analysis with the AI-powered dashboard. Identify improvement areas and make necessary changes to enhance performance.</p>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="./assests/images/iphone-01.webp">
                          <source type="image/png" srcset="./assests/images/iphone-01.png">
                          <img loading="lazy" src="./assests/images/iphone-01.png"
                            alt="Iphone" width="432" height="567">
                        </picture>
                      </div>
                    </div>
                    <div class="all-content">
                      <div class="text-column" id="t2" data-section="active_Current_Tabs1">
                        <h3><i></i>Keep your work hours organized 
                        </h3>
                        <p>Accurately track the amount of time spent on each task, identify which projects are taking up more time than anticipated, and make adjustments as needed.</p>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="./assests/images/iphone-02.webp">
                          <source type="image/png" srcset="./assests/images/iphone-02.png">
                          <img loading="lazy" src="./assests/images/iphone-02.png"
                            alt="Iphone" width="432" height="567">
                        </picture>
                      </div>
                    </div>
                    <div class="all-content">
                      <div class="text-column" id="t3" data-section="active_Current_Tabs1">
                        <h3><i></i>Set up multiple geofences locations</h3>
                        <p>Use geofencing technology to monitor locations of your employees, ensure they are on time and working on assigned jobs. </p>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="./assests/images/iphone-03.webp">
                          <source type="image/png" srcset="./assests/images/iphone-03.png">
                          <img loading="lazy" src="./assests/images/iphone-03.png"
                            alt="Iphone" width="432" height="567">
                        </picture>
                      </div>
                    </div>
                    <div class="all-content">
                      <div class="text-column" id="t4" data-section="active_Current_Tabs1">
                        <h3><i></i>Selfie validation: transforming attendance</h3>
                        <p>Selfie validation feature brings transparency to attendance management. Prevent buddy punching and time theft, also, ensure your employees are reporting for work from the assigned jobsite.</p>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="./assests/images/iphone-04.webp">
                          <source type="image/png" srcset="./assests/images/iphone-04.png">
                          <img loading="lazy" src="./assests/images/iphone-04.png"
                            alt="Iphone" width="432" height="567">
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
                    <h3 itemprop="name">How Much Does Workstatus Time Tracking App Cost?
                    </h3>
                    <div class="faq-accordion-content">
                      <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div itemprop="text">
                          <p>The Workstatus time tracking app for Android costs can be checked on our pricing page. There is a 7-day free trial available, so you can try it out before committing to anything. You can add ten projects together and tasks and get detailed reports on your team's progress.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="faq-accordion-item-outer" itemscope itemprop="mainEntity"
                    itemtype="https://schema.org/Question">
                    <h3 itemprop="name"> Is Workstatus Time Tracking App Safe For My Android Phone?</h3>
                    <div class="faq-accordion-content">
                      <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div itemprop="text">
                          <p>Workstatus is completely safe to use on Android devices. The app does not require any permissions that would put your device at risk, and it does not collect or store any personal information.
                          </p>
                          <p> It is simple to use and can be customized to meet the specific needs of your business. The app runs in the background of your device, so you can continue working while it tracks your time.
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
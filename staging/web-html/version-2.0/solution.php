<?php require_once 'common/inc/config.inc.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="alternate" href="<?php echo SITE_URL; ?>/android" hreflang="en-us" />
    <link type="text/css" href="./assests/css/solution.css" rel="preload stylesheet" as="style" />
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
          <div class="bannerwrap">
            <div class="container">
              <div class="inner-wrap">
                <h1>Workstatus App for Every Device</h1>
                <p>Get user-friendly and feature-rich apps for seamless integration and synchronization. Experience a unified and efficient <br>
                  experience across all your devices.
                </p>
                <div class="actionBtn">
                  <?php if( geoCTAcheck() === true ) : ?>
                  <div><a href="<?php echo $RegLink; ?>"
                    class="primary_btn1"><?php echo $ws_ctas['cta_text']; ?></a>
                    <small>No credit card required</small>
                  </div>
                  <?php endif; ?>
                  <div><a href="javascript:void(0)" onclick="call_demows();" class="primary_btn2">Talk To Sales</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="step-sec post-animation">
          <div class="container">
            <div class="step-row flex_row" id="acf-ind-section">
              <div class="content-col">
                <div class="top-section">
                  <h6><span class="bg-purple">More reliable system</span></h6>
                  <h2>Why do you need attendance management?</h2>
                  <p>Attendance management is essential to ensure <a href="https://www.workstatus.io/blog/culture-of-accountability/">workforce accountability</a>, optimize resource allocation, and maintain a productive work environment. It helps track employee attendance, identify patterns, and address <a href="https://www.workstatus.io/blog/8-tips-to-combat-employee-absenteeism-in-your-workforce/">absenteeism</a>, leading to better operational efficiency and effective workforce management.</p>
                  <a class="read-more" href="https://www.workstatus.io/w2wp/time-attendance">Find out Why Workstatus toolkit is a must-have</a>
                </div>
              </div>
              <div class="image-col">
                <picture>
                  <source type="image/webp" srcset="https://www.workstatus.io/w2wp/wp-content/uploads-webpc/uploads/2023/08/manage.png.webp">
                  <source type="image/png" srcset="https://www.workstatus.io/w2wp/wp-content/uploads/2023/08/manage.png">
                  <img loading="lazy" src="https://www.workstatus.io/w2wp/wp-content/uploads/2023/08/manage.png" alt="manage" width="608" height="482">
                </picture>
              </div>
            </div>
          </div>
        </section>
        <section class="trackEm bglight">
          <div class="container">
            <div class="top-section">
              <h6><span class="bg-purple">Enjoy multi-benefits</span></h6>
              <h2>Why Choose Workstatus's Multi-Platform Apps?</h2>
              <p>Discover the convenience of tracking time, monitoring activity, and collaborating with your team from anywhere, anytime.</p>
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
                  <h3>Flexibility and Convenience </h3>
                  <p>Track time, manage tasks, and collaborate with your team effortlessly, no matter where you are or which device you use.</p>
                </div>
                <div class="row">
                  <h3>Flexibility and Convenience </h3>
                  <p>Track time, manage tasks, and collaborate with your team effortlessly, no matter where you are or which device you use.</p>
                </div>
                <div class="row">
                  <h3>Flexibility and Convenience </h3>
                  <p>Track time, manage tasks, and collaborate with your team effortlessly, no matter where you are or which device you use.</p>
                </div>
                <div class="row">
                  <h3>Flexibility and Convenience </h3>
                  <p>Track time, manage tasks, and collaborate with your team effortlessly, no matter where you are or which device you use.</p>
                </div>
                <div class="vmore"><a href="https://www.workstatus.io/w2wp/workforce-management/on-premise-teams" class="view-more">View More</a></div>
              </div>
            </div>
          </div>
        </section>
        <section class="trackEm">
          <div class="container">
            <div class="top-section">
              <h6><span class="bg-purple">Enjoy multi-benefits</span></h6>
              <h2>Why Choose Workstatus's Multi-Platform Apps?</h2>
              <p>Discover the convenience of tracking time, monitoring activity, and collaborating with your team from anywhere, anytime.</p>
            </div>
            <div class="trackRow align-center">
              <div class="trackContent">
                <div class="row">
                  <h3>Flexibility and Convenience </h3>
                  <p>Track time, manage tasks, and collaborate with your team effortlessly, no matter where you are or which device you use.</p>
                </div>
                <div class="row">
                  <h3>Flexibility and Convenience </h3>
                  <p>Track time, manage tasks, and collaborate with your team effortlessly, no matter where you are or which device you use.</p>
                </div>
                <div class="row">
                  <h3>Flexibility and Convenience </h3>
                  <p>Track time, manage tasks, and collaborate with your team effortlessly, no matter where you are or which device you use.</p>
                </div>
                <div class="row">
                  <h3>Flexibility and Convenience </h3>
                  <p>Track time, manage tasks, and collaborate with your team effortlessly, no matter where you are or which device you use.</p>
                </div>
                <div class="vmore"><a href="https://www.workstatus.io/w2wp/workforce-management/on-premise-teams" class="view-more">View More</a></div>
              </div>
              <div class="trackImg align-right">
                <picture>
                  <source type="image/webp" srcset="./assests/images/android-track.webp">
                  <source type="image/png" srcset="./assests/images/android-track.png">
                  <img loading="lazy" src="./assests/images/android-track.png" alt="Tracking" width="541" height="496">
                </picture>
              </div>
            </div>
          </div>
        </section>
        <section class="four-columns bglight">
          <div class="container">
            <div class="top-section">
              <h6><span class="bg-purple">Enjoy multi-benefits</span></h6>
              <h2>Why Choose Workstatus's Multi-Platform Apps?</h2>
              <p>Discover the convenience of tracking time, monitoring activity, and collaborating with your team from anywhere, anytime.</p>
            </div>
            <div class="flex_row">
              <div class="column">
                <div class="bx-content">
                  <picture>
                    <source type="image/webp" srcset="./assests/images/wrkicon-01.webp">
                    <source type="image/png" srcset="./assests/images/wrkicon-01.png">
                    <img loading="lazy" src="./assests/images/wrkicon-01.png" alt="Workplace" width="42" height="42">
                  </picture>
                  <h3>Zoho</h3>
                  <p>Integrate Zoho with Workstatus for seamless data flow, no more manual entry. Enjoy unified workflows, saving time and effort with:</p>
                  <ul>
                    <li>Automated Data Sync</li>
                    <li>Productivity meters</li>
                    <li>Real-time Analytics</li>
                  </ul>
                </div>
                </a>
                <a href="/remote-team-management" class="view-more">Explore</a>
              </div>
              <div class="column">
                <picture>
                  <source type="image/webp" srcset="./assests/images/wrkicon-02.webp">
                  <source type="image/png" srcset="./assests/images/wrkicon-02.png">
                  <img loading="lazy" src="./assests/images/wrkicon-02.png" alt="Workplace" width="42" height="42">
                </picture>
                <h3>Trello</h3>
                <p>Integrate Zoho with Workstatus for seamless data flow, no more manual entry. Enjoy unified workflows, saving time and effort with:</p>
                <ul>
                  <li>Automated Data Sync</li>
                  <li>Productivity meters</li>
                  <li>Real-time Analytics</li>
                </ul>
              </div>
              <div class="column">
                <picture>
                  <source type="image/webp" srcset="./assests/images/wrkicon-03.webp">
                  <source type="image/png" srcset="./assests/images/wrkicon-03.png">
                  <img loading="lazy" src="./assests/images/wrkicon-03.png" alt="Workplace" width="42" height="42">
                </picture>
                <h3>AWS</h3>
                <p>Integrate Zoho with Workstatus for seamless data flow, no more manual entry. Enjoy unified workflows, saving time and effort with:</p>
                <ul>
                  <li>Automated Data Sync</li>
                  <li>Productivity meters</li>
                  <li>Real-time Analytics</li>
                </ul>
              </div>
              <div class="column">
                <picture>
                  <source type="image/webp" srcset="./assests/images/wrkicon-04.webp">
                  <source type="image/png" srcset="./assests/images/wrkicon-04.png">
                  <img loading="lazy" src="./assests/images/wrkicon-04.png" alt="Workplace" width="42" height="42">
                </picture>
                <h3>SMTP</h3>
                <p>Integrate Zoho with Workstatus for seamless data flow, no more manual entry. Enjoy unified workflows, saving time and effort with:</p>
                <ul>
                  <li>Automated Data Sync</li>
                  <li>Productivity meters</li>
                  <li>Real-time Analytics</li>
                </ul>
              </div>
            </div>
          </div>
        </section>
        <section class="timeline">
          <div class="container">
            <div class="top-section">
              <h6><span class="bg-purple">As simple as 1-2-3</span></h6>
              <h2>A Powerful workforce management app for you</h2>
              <p>Get a better understanding of your large workforce with Workstatus Insights & Analytics. It lets managers, HR professionals, and executives gain valuable insights into working hours, make better staffing decisions, and stay informed about the workforce.</p>
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
                  <h3>Sign Up</h3>
                  <p>Visit the Workstatus website, create an account, and complete the registration process.</p>
                </div>
                <div class="row">
                  <h3>Download our android app</h3>
                  <p>Click and start the Workstatus tracker. Sit back and relax as Workstatus silently records their clock-in and out timings, working hours, location, and more.</p>
                </div>
                <div class="row">
                  <h3>Explore Analytics and Insights</h3>
                  <p>Analyze workforce productivity, track project progress, and identify areas for optimization to make data-driven decisions for better workforce management.
                  </p>
                </div>
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
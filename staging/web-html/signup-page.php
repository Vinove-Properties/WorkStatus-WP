<?php require_once 'common/inc/config.inc.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="alternate" href="https://www.workstatus.io/" hreflang="en-us" />
    <link type="text/css" href="assests/css/demo-video.css" rel="preload stylesheet" as="style" />
    <?php require_once 'common/inc/header-files.php';?>
  </head>
  <body>
    <?php require_once 'common/inc/after-body-tag.php'; ?>
    <div class="body__wrapper page__home">
      <div class="feature-header"><?php require_once 'common/header.php';?></div>
      <main class="site__content">
        <section class="demo-section">
          <div class="home-section">
            <div class="container">
              <div class="flex_row">
                <div class="column column-content">
                  <h1>Sign up For a Workstatus Demo
                  </h1>
                  <p>Experience the power of Workstatus in a short, live demo. Check out how our all-in-one workforce management tool helps you master time, boost productivity, streamline payroll, and beyond.
                  </p>
                  <p>Then, sign up for a free trial. Workstatus features include:</p>
                  <ul>
                    <li>Time Tracking</li>
                    <li>Employee Monitoring</li>
                    <li>Workforce Management</li>
                    <li>Agile Project Management</li>
                  </ul>
                  <div class="actionBtn">
                    <div><a href="javascript:void(0)" onclick="call_demows();" class="primary_btn1 formbtn">Request Demo here</a>
                    </div>
                  </div>
                </div>
                <div class="column videoSc" id="has-yt-video">
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
                                    data-src="https://www.youtube.com/embed/sDgI0iP6jNk?enablejsapi=1&html5=1&mute=1">
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
              </div>
            </div>
          </div>
        </section>
        <section class="time-data post-animation">
          <div class="container">
            <div class="top-section">
              <h6><span class="bg-purple">A QUICK LOOK</span></h6>
              <h2>Powerful Features You Get In Workstatus</h2>
              <p>Get a complete productivity management solution with real-time analytics, giving you detailed insights on improvement areas and productivity enhancement possibilities. Here is the list of powerful features to optimize your team’s performance.</p>
            </div>
            <div class="flex_row">
              <div class="column-three">
                <div class="box-wrap">
                  <picture>
                    <source type="image/webp" srcset="./assests/images/ft-01.webp">
                    <source type="image/png" srcset="./assests/images/ft-01.png">
                    <img loading="lazy" src="./assests/images/ft-01.png"
                      alt="demo icon" width="89" height="86">
                  </picture>
                  <h3>Selfie Validation</h3>
                  <p>It eliminates time theft, buddy punching, and other discrepancies.</p>
                  <a class="explore" href="#">Explore</a>
                </div>
              </div>
              <div class="column-three">
                <div class="box-wrap">
                  <picture>
                    <source type="image/webp" srcset="./assests/images/ft-02.webp">
                    <source type="image/png" srcset="./assests/images/ft-02.png">
                    <img loading="lazy" src="./assests/images/ft-02.png"
                      alt="demo icon" width="89" height="86">
                  </picture>
                  <h3>GPS Tracking</h3>
                  <p>Location tracking for mobile and on-field employees</p>
                  <a class="explore" href="#">Explore</a>
                </div>
              </div>
              <div class="column-three">
                <div class="box-wrap">
                  <picture>
                    <source type="image/webp" srcset="./assests/images/ft-03.webp">
                    <source type="image/png" srcset="./assests/images/ft-03.png">
                    <img loading="lazy" src="./assests/images/ft-03.png"
                      alt="demo icon" width="89" height="86">
                  </picture>
                  <h3>Employee Monitoring</h3>
                  <p>App & URL tracking and Screenshots</p>
                  <a class="explore" href="#">Explore</a>
                </div>
              </div>
              <div class="column-three">
                <div class="box-wrap">
                  <picture>
                    <source type="image/webp" srcset="./assests/images/ft-04.webp">
                    <source type="image/png" srcset="./assests/images/ft-04.png">
                    <img loading="lazy" src="./assests/images/ft-04.png"
                      alt="demo icon" width="89" height="86">
                  </picture>
                  <h3>Time Tracking</h3>
                  <p>Analyze, edit, and approve timesheets for convenient time tracking</p>
                  <a class="explore" href="#">Explore</a>
                </div>
              </div>
              <div class="column-three">
                <div class="box-wrap">
                  <picture>
                    <source type="image/webp" srcset="./assests/images/ft-05.webp">
                    <source type="image/png" srcset="./assests/images/ft-05.png">
                    <img loading="lazy" src="./assests/images/ft-05.png"
                      alt="demo icon" width="89" height="86">
                  </picture>
                  <h3>Online Invoicing</h3>
                  <p>Integrated online invoicing tool based on hours worked</p>
                  <a class="explore" href="#">Explore</a>
                </div>
              </div>
              <div class="column-three">
                <div class="box-wrap">
                  <picture>
                    <source type="image/webp" srcset="./assests/images/ft-06.webp">
                    <source type="image/png" srcset="./assests/images/ft-06.png">
                    <img loading="lazy" src="./assests/images/ft-06.png"
                      alt="demo icon" width="89" height="86">
                  </picture>
                  <h3>Geofencing</h3>
                  <p>Create virtual job sites to automate attendance management</p>
                  <a class="explore" href="#">Explore</a>
                </div>
              </div>
            </div>
            <div class="text_center mt70 for-link-white link-text">
              <a href="https://www.workstatus.io/features" class="small_anchor">Explore all Features</a>
            </div>
            <div class="mt80  text_center for-link-white btnSc">
              <div class="cmn-democta ctasec">
                <div>
                  <a data-href="https://app.workstatus.io/auth/register/?pid=138&amp;type=monthly" href="javascript:void(0);" class="ctbtn" onclick="if (!window.__cfRLUnblockHandlers) return false; return get_ws_signupform(this);">Free Signup</a>
                  <span class="nccr">No credit card required</span>
                </div>
                <span class="devide">OR</span>
                <div>
                  <a href="javascript:void(0)" class="ctbtn nobg" onclick="if (!window.__cfRLUnblockHandlers) return false; call_demows();" target="_self">Book A Demo</a>
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
    <script src="assests/js/glider.min.js"></script>
    <?php endif; ?>
    <script src="assests/js/script.js?var=<?php echo time(); ?>"></script>
  </body>
</html>
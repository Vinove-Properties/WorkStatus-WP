<?php
/* 
Template Name: Demo Page Template 
Author : Nitin Baluni.
*/
get_header();
global $ws_ctas, $RegLink, $LogLink;
?>
<main class="site__content">
    <section class="demo-section">
      <div class="home-section">
        <div class="container">
          <div class="flex_row">
            <div class="column column-content">
              <?php the_content(); ?>
              <div class="actionBtn">
                <div><a href="javascript:void(0)" onclick="call_demows();" class="primary_btn1 formbtn">Request Demo here</a>
                </div>
              </div>
            </div>
            <div class="column videoSc" id="has-yt-video">
              <div class="inner">
                <button id="myBtn" data-isrc="https://www.youtube.com/embed/y1rUzGA3A2E?enablejsapi=1&html5=1&mute=1">
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
                                data-src="https://www.youtube.com/embed/y1rUzGA3A2E?enablejsapi=1&html5=1&mute=1">
                              </iframe>
                            </div>
                          </div>
                        </div>
                      </div>
                      <button class="videoPoster lazy-background wslazy" id="play-button">
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
                <source type="image/webp" srcset="<?php bloginfo('template_url'); ?>/assests/images/ft-01.webp">
                <source type="image/png" srcset="<?php bloginfo('template_url'); ?>/assests/images/ft-01.png">
                <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/images/ft-01.png"
                  alt="demo icon" width="89" height="86">
              </picture>
              <h3>Selfie Validation</h3>
              <p>It eliminates time theft, buddy punching, and other discrepancies.</p>
              <a class="explore" href="<?php echo site_url('/best-facial-recognition-software'); ?>">Explore</a>
            </div>
          </div>
          <div class="column-three">
            <div class="box-wrap">
              <picture>
                <source type="image/webp" srcset="<?php bloginfo('template_url'); ?>/assests/images/ft-02.webp">
                <source type="image/png" srcset="<?php bloginfo('template_url'); ?>/assests/images/ft-02.png">
                <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/images/ft-02.png"
                  alt="demo icon" width="89" height="86">
              </picture>
              <h3>GPS Tracking</h3>
              <p>Location tracking for mobile and on-field employees</p>
              <a class="explore" href="<?php echo site_url('/best-gps-time-tracking-software-online'); ?>">Explore</a>
            </div>
          </div>
          <div class="column-three">
            <div class="box-wrap">
              <picture>
                <source type="image/webp" srcset="<?php bloginfo('template_url'); ?>/assests/images/ft-03.webp">
                <source type="image/png" srcset="<?php bloginfo('template_url'); ?>/assests/images/ft-03.png">
                <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/images/ft-03.png"
                  alt="demo icon" width="89" height="86">
              </picture>
              <h3>Employee Monitoring</h3>
              <p>App & URL tracking and Screenshots</p>
              <a class="explore" href="<?php echo site_url('/best-employee-monitoring-software-online'); ?>">Explore</a>
            </div>
          </div>
          <div class="column-three">
            <div class="box-wrap">
              <picture>
                <source type="image/webp" srcset="<?php bloginfo('template_url'); ?>/assests/images/ft-04.webp">
                <source type="image/png" srcset="<?php bloginfo('template_url'); ?>/assests/images/ft-04.png">
                <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/images/ft-04.png"
                  alt="demo icon" width="89" height="86">
              </picture>
              <h3>Time Tracking</h3>
              <p>Analyze, edit, and approve timesheets for convenient time tracking</p>
              <a class="explore" href="<?php echo site_url('/best-time-tracking-software-online'); ?>">Explore</a>
            </div>
          </div>
          <div class="column-three">
            <div class="box-wrap">
              <picture>
                <source type="image/webp" srcset="<?php bloginfo('template_url'); ?>/assests/images/ft-05.webp">
                <source type="image/png" srcset="<?php bloginfo('template_url'); ?>/assests/images/ft-05.png">
                <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/images/ft-05.png"
                  alt="demo icon" width="89" height="86">
              </picture>
              <h3>Online Invoicing</h3>
              <p>Integrated online invoicing tool based on hours worked</p>
              <a class="explore" href="<?php echo site_url('/best-online-invoicing-software'); ?>">Explore</a>
            </div>
          </div>
          <div class="column-three">
            <div class="box-wrap">
              <picture>
                <source type="image/webp" srcset="<?php bloginfo('template_url'); ?>/assests/images/ft-06.webp">
                <source type="image/png" srcset="<?php bloginfo('template_url'); ?>/assests/images/ft-06.png">
                <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/images/ft-06.png"
                  alt="demo icon" width="89" height="86">
              </picture>
              <h3>Geofencing</h3>
              <p>Create virtual job sites to automate attendance management</p>
              <a class="explore" href="<?php echo site_url('/geofence-time-clock-software-online'); ?>">Explore</a>
            </div>
          </div>
        </div>
        <div class="text_center mt70 for-link-white link-text">
          <a href="<?php echo site_url('/features'); ?>" class="small_anchor">Explore all Features</a>
        </div>
        <div class="mt80  text_center for-link-white btnSc">
          <div class="cmn-democta ctasec">                
            <?php echo wsDemoCta(); ?>
          </div>
        </div>
      </div>
    </section>
    <?php require_once get_template_directory() . '/common/workstatus-journey.php'; ?>
</main>
<?php get_footer(); ?>
<?php require_once 'common/inc/config.inc.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="alternate" href="<?php echo SITE_URL; ?>/best-gps-time-tracking-software-online" hreflang="en-us" />
    <link type="text/css" href="./assests/css/resource.css" rel="preload stylesheet" as="style" />
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
          <div class="bannerwrap resource-banner">
            <div class="container">
              <div class="inner-wrap">
                <h1>Workstatus Insights: Make the most out of your workforce management software</h1>
                <p>Welcome to the Resource Hub of Workstatus! Here you will find valuable information, tools, and insights to help you unlock the full potential of your workforce and achieve exceptional & sustainable productivity.
                </p>
              </div>
            </div>
          </div>
        </section>
        <div class="partwrap">
          <div class="container">
            <div class="partner-div">
              <div class="part-col">
                <i class="part-logo part-logo1"></i>
                <p><strong>5</strong>/5</p>
                <i class="star-icon"><img loading="lazy" src="./assests/images/star-icon1.svg"
                  alt="star" width="112" height="17"></i>
              </div>
              <div class="part-col">
                <i class="part-logo part-logo2"></i>
                <p><strong>4.3</strong>/5</p>
                <i class="star-icon"><img loading="lazy" src="./assests/images/star-icon2.svg"
                  alt="star" width="112" height="17"></i>
              </div>
              <div class="part-col">
                <i class="part-logo part-logo3"></i>
                <p><strong>4.4</strong>/5</p>
                <i class="star-icon"><img loading="lazy" src="./assests/images/star-icon3.svg"
                  alt="star" width="112" height="17"></i>
              </div>
              <div class="part-col">
                <i class="part-logo part-logo4"></i>
                <p><strong>4.7</strong>/5</p>
                <i class="star-icon"><img loading="lazy" src="./assests/images/star-icon4.svg"
                  alt="star" width="112" height="17"></i>
              </div>
              <div class="part-col">
                <i class="part-logo part-logo5"></i>
                <p><strong>4.5</strong>/5</p>
                <i class="star-icon"><img loading="lazy" src="./assests/images/star-icon3.svg"
                  alt="star" width="112" height="17"></i>
              </div>
            </div>
          </div>
        </div>
        <section class="userguide">
          <div class="container">
            <div class="buyers-guide-section" id="div-buyer-guide">
              <div class="buyers-guide">
                <div class="buyers-guide-question" id="buyers-guide-question">
                  <h3>Categories</h3>
                  <ul class="question-list">
                    <li><a href="#ans_1" class="active">Employee Performance & Monitoring</a>
                    </li>
                    <li><a href="#ans_2" class="">Time Tracking</a>
                    </li>
                    <li><a href="#ans_3" class="">Workforce Management</a>
                    </li>
                    <li><a href="#ans_4" class="">Human Resource Management</a></li>
                    <li><a href="#ans_5" class="">Project Management</a>
                    </li>
                  </ul>
                </div>
                <div class="buyers-guide-answer-part" id="buyers-guide-answer-part">
                  <div class="buyers-guide-answer ans_1" id="ans_1">
                    <h3 class="guide-question">Employee Performance & Monitoring
                    </h3>
                    <div class="guide-answer">
                      <p>Gain insights into optimizing employee performance, fostering growth, and implementing effective & employee-friendly monitoring strategies.
                      </p>
                      <picture>
                        <source type="image/webp" srcset="./assests/images/resource-image01.webp">
                        <source type="image/png" srcset="./assests/images/resource-image01.png">
                        <img loading="lazy" src="./assests/images/resource-image01.png"
                          alt="resource" width="760" height="560">
                      </picture>
                      <div class="rerow">
                        <div class="recol">
                          <h5>Guide</h5>
                          <h4>Protect Your Business Data with Effective Employee Monitoring Solutions</h4>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</p>
                        </div>
                        <div class="recol">
                          <h5>Guide</h5>
                          <h4>Protect Your Business Data with Effective Employee Monitoring Solutions</h4>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</p>
                        </div>
                        <div class="recol">
                          <h5>Guide</h5>
                          <h4>Protect Your Business Data with Effective Employee Monitoring Solutions</h4>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</p>
                        </div>
                        <div class="recol">
                          <h5>Guide</h5>
                          <h4>Protect Your Business Data with Effective Employee Monitoring Solutions</h4>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</p>
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
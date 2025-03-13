<?php require_once 'common/inc/config.inc.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="alternate" href="<?php echo SITE_URL; ?>/about" hreflang="en-us" />
    <link type="text/css" href="./assests/css/about.css" rel="preload stylesheet" as="style" />
    <?php require_once 'common/inc/header-files.php';?>
  </head>
  <body>
    <?php require_once 'common/inc/after-body-tag.php'; ?>
    <div class="body__wrapper">
      <div class="feature-header">
        <?php require_once 'common/header.php';?>
      </div>
      <main class="site__content">
        <section class="hero-banner banner-image">
          <div class="container">
            <div class="inner-wrap">
              <h1>The New Age Workforce Management Software</h1>
              <p>
                We help businesses develop modern workplaces with more productive employees contributing towards organizational growth.
              </p>
              <!-- <ul class="list">
                <li>Analyze employee performance</li>
                <li>Get insights on projects, budget, and client invoices</li>
                <li>Track timesheets, absences, and leaves</li>
                <li>Track employees with GPS & geofencing technology</li>
              </ul> -->

              <div class="actionBtn">
                <?php if( geoCTAcheck() === true ) : ?>
                <div><a href="<?php echo $RegLink; ?>"
                  class="primary_btn1"><?php echo $ws_ctas['cta_text']; ?></a>
                  <small>No credit card required</small>
                </div>
                <?php endif; ?>
                <div><a href="javascript:void(0)" onclick="call_demows();" class="primary_btn2">Book A
                  Demo</a>
                  <small>Get queries answered from experts</small>
                </div>
              </div>
              <?php require_once 'common/available-device.php';?>
              <?php require_once 'common/partners.php';?>

              <div class="bnrimg">
                <picture>
                  <source type="image/webp" srcset="./assests/images/about-banner.webp">
                  <source type="image/png" srcset="./assests/images/about-banner.png">
                  <img loading="lazy" src="./assests/images/about-banner.png"
                    alt="About Banner" width="1219" height="613">
                </picture>
              </div>
            </div>
          </div>
        </section>
        <section class="aproach">
          <div class="container">
            <div class="flex_row">
              <div class="column-left">
                <picture>
                  <source type="image/webp" srcset="./assests/images/approach-image.webp">
                  <source type="image/png" srcset="./assests/images/approach-image.png">
                  <img loading="lazy" src="./assests/images/approach-image.png" alt="Websites &amp; Apps Usage Tracking" width="513" height="527">
                </picture>
              </div>
              <div class="column-right">
                <div class="top-section">
                  <h6><span class="bg-purple">OUR COMMITMENT</span></h6>
                  <h2>To Create Highly Efficient Worforce</h2>
                  <p>With advanced features, let Workstatus take care of all the workplace issues so that your employees can focus on what really matters: their work. Time tracking, productivity measurement, and other workforce management features of Workstatus will increase the efficiency of employees by 25 percent, resulting in up to 40 percent ROI on projects. Join us, and we'll always keep you one step ahead with strategies that align with your organizational needs and goals for the future.</p>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="connection">
          <div class="container">
            <div class="top-section">
              <h6><span class="bg-purple">Footprints Across The Globe</span></h6>
              <h2>Empowering Businesses Everywhere</h2>
              <p>Workstatus is the ultimate workforce management tool for ambitious companies around the world. Stay organized with our time tracker and project management app. Segregate projects, collaborate with multiple teams working from different locations, integrate the entire workflow, and stay organized. </p>
            </div>
            <div class="flex_row">
              <div class="column">
                <i class="icon1"></i>
                <h3>2018</h3>
                <p>Year we were born to ensure a transparent workflow </p>
              </div>
              <div class="column">
                <i class="icon2"></i>
                <h3>100+</h3>
                <p>Members in our remote work team</p>
              </div>
              <div class="column">
                <i class="icon3"></i>
                <h3>18+</h3>
                <p>Countries trust Workstatus</p>
              </div>
              <div class="column">
                <i class="icon4"></i>
                <h3>50K+</h3>
                <p>Monthly active users and still growing</p>
              </div>
            </div>
          </div>
        </section>
        <section class="trackEm">
          <div class="container">
            <div class="top-section">
              <h6><span class="bg-purple">OUR DNA</span></h6>
              <h2>Client First Approach</h2>
              <p>We value our clients and are committed to delivering them a system that grows with them and keeps them ahead of their competition. A high client retention percentage is a testament to our client-centric services and superior product quality.</p>
            </div>
            <div class="trackRow">
              <div class="trackImg">
                <picture>
                  <source type="image/webp" srcset="./assests/images/demo2.webp">
                  <source type="image/png" srcset="./assests/images/demo2.png">
                  <img loading="lazy" src="./assests/images/demo2.png" alt="Employee Hours" width="541" height="661">
                </picture>
              </div>
              <div class="trackContent">
                <div class="row">
                  <h3><i></i>Diversity and inclusion</h3>
                  <p>We work towards building a more diverse and inclusive work culture, which has a positive impact on our services. This diversification helps us in providing unique solutions to clients. </p>
                </div>
                <div class="row">
                  <h3><i></i> Mutual Respect</h3>
                  <p>We believe that mutual respect is the most important aspect of strong relationships. It helps build an atmosphere of trust and open communication leading to greater satisfaction and commitment from both sides.
                  </p>
                </div>
                <div class="row">
                  <h3><i></i>Trust</h3>
                  <p>We always stay sincere to our clients. Trust is essential in any business relationship, so cultivating it from the start is our priority. You are in safe hands with us.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="wsMobile whitetxt">
          <?php require_once 'common/workstatus-device.php';?>
        </section>
        <section class="trackEm">
          <div class="container">
            <div class="top-section">
              <h6><span class="bg-purple">OUR SECRET</span></h6>
              <h2>Our Core Values Make Us Who We Are</h2>
              <p>Our Pillars: Respect, trust & care for each other. Our greatest strength is our team spirit & dedication to attain client satisfaction.</p>
            </div>
            <div class="trackRow">
              <div class="trackImg">
                <picture>
                  <source type="image/webp" srcset="./assests/images/about-demo.webp">
                  <source type="image/png" srcset="./assests/images/about-demo.png">
                  <img loading="lazy" src="./assests/images/about-demo.png" alt="About Us" width="541"
                    height="661">
                </picture>
              </div>
              <div class="trackContent">
                <div class="row">
                  <h3><i></i>Authenticity</h3>
                  <p>We believe in delivering a rightful, inspiring, and motivating medium to help you grow.</p>
                </div>
                <div class="row">
                  <h3><i></i>Togetherness</h3>
                  <p>We believe in bringing togetherness among your teams, just like we collaborated to bring this smart software to you.</p>
                </div>
                <div class="row">
                  <h3><i></i> Gratitude</h3>
                  <p>We are thankful to our teams, partners, clients, and management.
                  </p>
                </div>
                <div class="row">
                  <h3><i></i>Transparency</h3>
                  <p>Workstatus is built to increase transparency in the workflow of your organization.
                  </p>
                </div>
                <div class="row">
                  <h3><i></i>Inspiration</h3>
                  <p>We strive to bring revolution to the working culture of every organization.
                  </p>
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
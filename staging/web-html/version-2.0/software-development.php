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
    <div class="body__wrapper ebookhead">
    <div class="feature-header">
      <?php require_once 'common/header.php';?>
    </div>
    <main class="site__content">
      <section class="hero-banner inner-banner-bg sd-banner post-animation">
        <div class="bannerwrap">
          <div class="container">
            <div class="inner-wrap">
              <h1>Business Profit & Your Employees’ Productivity By 3X</h1>
              <p>A step-by-step roadmap on how to increase profits and productivity in your company.</p>
            </div>
          </div>
        </div>
      </section>
      <section class="overview">
        <div class="container">
          <div class="dis-flex">
            <div class="colleft">
              <h2>Overview</h2>
              <p><strong>Tired of missed deadlines? Get your development teams back on track and deliver projects on time and budget.

Fact check:</strong>
              </p>
              <div class="box">
                <ul>
               <li> Employees are productive for just 2.5 hours daily.</li>
               <li>Meetings cost up to $56,448 per manager yearly.</li>
               <li>Employees spend 13 hours weekly on social media.</li>
               <li>20% of every dollar lost to employee theft in the U.S.</li>
                </ul>
              </div>
            </div>
            <div class="colRit" id="ebook-pdf" data-edoc="Boost Your Employees' Productivity.pdf">
              <?php require_once 'common/ebook-form.php'; ?>
            </div>
          </div>
      </section>
      <section class="top-plateform p50 post-animation ebook">
  <div class="container">
    <div class="flex_row">
      <div class="column-left">
        <picture>
          <source type="image/webp" srcset="./assests/images/ebook.png">
          <source type="image/png" srcset="./assests/images/ebook.png">
          <img loading="lazy" src="./assests/images/ebook.png"
            alt="Ebook" width="602" height="457">
        </picture>
      </div>
      <div class="column-right">
        <h2>Lorem ipusm sit</h2>
        <ul>
          <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore </li>
          <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore </li>
          <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore </li>
          <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore </li>
        </ul>
      </div>
    </div>
  </div>
</section>
      <section class="wsMobile whitetxt">
      <?php require_once 'common/workstatus-device.php';?>
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
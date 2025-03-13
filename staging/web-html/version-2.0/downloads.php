<?php require_once 'common/inc/config.inc.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="alternate" href="<?php echo SITE_URL; ?>/downloads" hreflang="en-us" />
    <link type="text/css" href="./assests/css/downloads.css" rel="preload stylesheet" as="style" />
    <?php require_once 'common/inc/header-files.php';?>
  </head>
  <body>
    <?php require_once 'common/inc/after-body-tag.php'; ?>
    <div class="body__wrapper">
      <div class="feature-header">
        <?php require_once 'common/header.php';?>
      </div>
      <main class="site__content">
        <section class="hero-banner">
          <div class="container">
            <div class="inner-wrap">
              <h1>Download the Workstatus App</h1>
              <p>Accurately track time with a simple, lightweight app built to help you boost productivity.
              </p>
          </div>
        </section>
        <section class="downloads">
          <div class="container">
            <div class="top-section">
              <h6><span class="bg-purple">EFFICIENCY OPTIMIZATION</span></h6>
              <h2>Build Performance-Oriented Work Culture</h2>
              <p>Get accurate and reliable data-driven insights about your workforce. These insights can help you improve communication, identify issues, and make better client/project management decisions. Workstatus account required to use apps.</p>
            </div>
            <div class="flex_row">
              <div class="column active">
                <h3>Workstatus For Desktop</h3>
                <p>Workstatus app for desktop works great on all major browsers, so you shouldn’t have any trouble getting up and running.It’s super easy to set up and use – all you have to do is download the app and start the timer whenever you start working on something. You can stop the timer whenever you end your day or pause it in between if you need to take a break. In ‘Stealth Mode’ for Windows, Workstatus starts automatically.</p>
                <div class="wsdevice">
                  <a href="https://app.workstatus.io/downloads/windows/workstatus.exe" download><img loading="lazy" src="./assests/images/dwindow.png" alt="window" width="149" height="44"> 
                  <small>(Windows 8.x & above)<br>
                   Version 2.4(3)</small>
                  </a> 
                  <a href="https://app.Workstatus.io/downloads/mac/workstatus.dmg" download><img loading="lazy" src="./assests/images/dmac.png" alt="mac" width="149" height="44">
                  <small>(Mac OS 10.14.x & above)<br>
                  Version 2.1(10)</small>
                  </a>
                  <a href="https://app.Workstatus.io/downloads/mac/workstatus.dmg" download><img loading="lazy" src="./assests/images/dlinux.png" alt="linux" width="149" height="44">
                  <small>(Ubuntu 22.04 LTS, 20.04 LTS<br>
                   & 18.04 LTS) Version 4.2.3</small>
                  </a>
                </div>
                <picture class="dImg">
                  <img loading="lazy" src="./assests/images/desktop-image.svg"
                    alt="Track Attendance" width="439" height="258">
                </picture>
              </div>
              <div class="column">
                <h3>Workstatus for Mobile</h3>
                <p>Workstatus for mobile allows your remote or mobile workforce to keep track of their time from anywhere. The app runs in the background of the device and maintains accurate timesheets.This can be helpful when billing clients or tracking productivity. With GPS tracking and geofences, anyone can clock in automatically when they enter a job site or get reminders based on location.</p>
                <div class="wsdevice">
                  <a href="https://play.google.com/store/apps/details?id=com.vinove.workstatus&pcampaignid=pcampaignidMKT-Other-global-all-co-prtnr-py-PartBadge-Mar2515-1"><img loading="lazy" src="./assests/images/dgoogleplay.png" alt="google play" width="149" height="44">
                  <small>(Android 8.x & above)<br>Version 2.4(3)</small>
                  </a> 
                  <a href="https://apps.apple.com/us/app/Workstatus-tm/id1570416295"><img loading="lazy" src="./assests/images/dappstore.png" alt="apple" width="133" height="44">
                  <small>(iOS 12.x & above)<br>Version 2.12(18)</small>
                  </a> 
                </div>
                <picture class="dImg">
                  <img loading="lazy" src="./assests/images/mobile-image.svg"
                    alt="Track Attendance" width="409" height="258">
                </picture>
              </div>
            </div>
          </div>
        </section>
        <section class="extension">
     <div class="container">
     <div class="flex_row">
      <div class="column-left">
        <h3>Automatic And Simple Time Tracker</h3>
        <p>Explore the full functionality of the time tracking solution for Browsers. Add ‘Workstatus Browser Extension’ to your browser and start tracking. It is compatible with: </p>
        <ul>
          <li>Google Chrome</li>
          <li>Microsoft Edge</li>
          <li>Safari</li>
        </ul>
        <div class="dimage">
          <source type="image/webp" srcset="./assests/images/dcromebook.webp">
          <source type="image/png" srcset="./assests/images/dcromebook.png">
          <img loading="lazy" src="./assests/images/dcromebook.png" alt="chromebook" width="229" height="44">
          <small>(Google Chrome 110 & above, Microsoft<br> Edge V. 112.0.1722.58, Safari V. 16.1)</small>
        </div>
      </div>
      <div class="column-right">
        <picture class="" id="">
          <source type="image/webp" srcset="./assests/images/extension-image.webp">
          <source type="image/png" srcset="./assests/images/extension-image.png">
          <img loading="lazy" src="./assests/images/extension-image.png" alt="browser-01" width="439" height="258">
        </picture>
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
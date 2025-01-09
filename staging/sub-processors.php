<?php require_once 'common/inc/config.inc.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="alternate" href="<?php echo SITE_URL; ?>/sub-processors" hreflang="en-us" />
    <link type="text/css" href="assests/css/legal-documents.css" rel="preload stylesheet" as="style"/>
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
              <h1>Sub-processors</h1>
            </div>
          </div>
        </section>
        <section class="legal-section">
          <div class="container">
            <div class="legal_row">
            <div class="tab">
                <h2>Legal Documents</h2>
                <ul>
                  <li class="tablinks">
                    <a href="terms-of-service">Terms of Service</a>
                  </li>
                  <li class="tablinks">
                    <a href="privacy-policy">Privacy Policy</a>
                  </li>
                  <li class="tablinks">
                    <a href="gdpr">GDPR Compliance</a>
                  </li>
                  <li class="tablinks">
                    <a href="data-processing-agreement">Data Processing Agreement</a>
                  </li>
                  <li class="tablinks">
                    <a href="privacy-shield-compliance">Privacy Shield Compliance</a>
                  </li>
                  <li class="tablinks active">
                    <a href="sub-processors">Sub-processors</a>
                  </li>
                  <li class="tablinks">
                    <a href="security-reliability">Security & Reliability</a>
                  </li>
                  <li class="tablinks">
                    <a href="refund-policy">Refund Policy</a>
                  </li>
                  <li class="tablinks">
                    <a href="spam-guidelines">Spam Guidelines</a>
                  </li>
                </ul>
              </div>
              <div id="Sub-processors" class="tabcontent">
                <div class="tabcontent-header">
                  <h2>Sub-processors</h2>
                  <h6>Last updated: 16/08/2021</h6>
                </div>
                <div class="tabcontent-content">
                  <h3>Services</h3>
                  <p>We use third party vendors to provide services necessary to run and improve the services we offer customers. We enter into GDPR-compliant data processing agreements with each vendor that is processing personal data.</p>
                  <h3>Third party vendors we share personal or sensitive data with:</h3>
                  <ul>
                    <li>Stripe - Billing</li>
                    <li>Segment - Analytics</li>
                    <li>Google Analytics - Analytics</li>
                    <li> Facebook - Ads</li>
                    <li>Google AdWords - Ads</li>
                    <li>Crisp - Communication & Support</li>
                    <li>gigenet.com - For Servers</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="wsMobile whitetxt">
          <?php require_once 'common/workstatus-device.php';?>
        </section>
        <?php require_once 'common/workstatus-journey-straight.php';?>
      </main>
      <?php require_once 'common/footer.php';?>
    </div>
    <script src="assests/js/script.js"></script>
  </body>
</html>
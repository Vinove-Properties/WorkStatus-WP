<?php require_once 'common/inc/config.inc.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="alternate" href="<?php echo SITE_URL; ?>/spam-guidelines" hreflang="en-us" />
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
              <h1>Workstatus Spam Guidelines</h1>
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
                  <li class="tablinks">
                    <a href="sub-processors">Sub-processors</a>
                  </li>
                  <li class="tablinks">
                    <a href="security-reliability">Security & Reliability</a>
                  </li>
                  <li class="tablinks">
                    <a href="refund-policy">Refund Policy</a>
                  </li>
                  <li class="tablinks active">
                    <a href="spam-guidelines">Spam Guidelines</a>
                  </li>
                </ul>
              </div>
              <div id="spam-guidelines" class="tabcontent">
                <div class="tabcontent-header">
                  <h2>Workstatus Spam Guidelines</h2>
                  <h6>Last updated: 16/08/2021</h6>
                </div>
                <div class="tabcontent-content">
                  <h3>By using Workstatus you agree to the below guidelines.</h3>
                  <h3>Spam policy</h3>
                  <p>Workstatus has zero tolerance for spam. You may not use Workstatus’s tools for sending bulk or unsolicited messages. We monitor all activity very closely for violations and will remove any accounts if violations are detected.</p>
                  <p>We also take spam complaints from our users seriously. This includes, but is not limited to, sending unwanted or unsolicited messages through Workstatus’s Invoicing, Reporting, or Inviting tools. We investigate all spam reports and will immediately remove accounts reported for spam when we see fit.</p>
                  <h3>Content policy</h3>
                  <p>You are responsible for the messages that you send through Workstatus. Our support team performs manual checks and Workstatus reserves the right to remove any account for the below reasons:</p>
                  <ul>
                    <li>Sending content that contains profane language</li>
                    <li>Sending content that violates the law in any way</li>
                    <li>Sending content that includes pornography</li>
                    <li>Sending content that infringes on any copyright or intellectual property</li>
                    <li>Sending content that is knowingly false regarding yourself or others</li>
                    <li>Sending content that is defamatory to others</li>
                    <li>Sending content that contains confidential information</li>
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
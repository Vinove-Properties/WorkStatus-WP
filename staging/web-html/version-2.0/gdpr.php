<?php require_once 'common/inc/config.inc.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="alternate" href="<?php echo SITE_URL; ?>/gdpr" hreflang="en-us" />
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
              <h1>GDPR Compliance</h1>
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
                  <li class="tablinks active">
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
                  <li class="tablinks">
                    <a href="spam-guidelines">Spam Guidelines</a>
                  </li>
                </ul>
              </div>
              <div id="GDPR-compliance" class="tabcontent">
              <div class="tabcontent-header">
                <h2>GDPR Compliance</h2>
                <h6>Last updated: 16/08/2021</h6>
              </div>
              <div class="tabcontent-content">
                <h3>Workstatus is GDPR compliant</h3>
                <p>At Workstatus we understand how important privacy is for your business and its customers. We comply with the EU's General Data Protection Regulation (GDPR) law that went into effect on May 25, 2018. Our team works hard
                  every day to ensure that data subjects are protected. Among the steps we've taken to meet GDPR requirements and be transparent about what we do with your data we became Privacy Shield certified, updated our Privacy
                  Policy, and list all of our subprocessors.
                </p>
                <p>If you have any questions, comments, or concerns related to the GDPR, please feel free to contact us.</p>
                <h3>Sign our data processing agreement</h3>
                <p>We have made a data processing agreement available for easy signing.</p>
                <a href="assests/files/PDF-for-DPA.pdf" target="_blank" class="primary_btn">Download the DPA (PDF)</a>
                <h3>How do I file a request to delete my data?</h3>
                <p>If you are an owner of a Workstatus organization, and/or owner of a Workstatus Talent Agency, and/or an owner of a Workstatus Tasks organization. Please, send a personal data deletion request to <a href="mailto:hello@workstatus.io">hello@workstatus.io</a> .</p>
                <p>If you are a member of a Workstatus organization, and/or a member of a Workstatus Talent Agency, and/or a member of Workstatus Tasks organization, you have to contact the owner of your organization or agency and ask them
                  to contact Workstatus’s Support Team with the permission to delete your data.
                </p>
                <p>Workstatus’s Support Team will check your case and act accordingly.</p>
                <p>You will be informed if your request will be processed or you will get an explanation about why it is declined. Once your request is accepted for the deletion, it will take around 5-7 business days to complete. You will
                  receive a confirmation when the deletion is processed.
                </p>
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
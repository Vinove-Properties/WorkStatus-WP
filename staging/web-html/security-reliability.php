<?php require_once 'common/inc/config.inc.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="alternate" href="<?php echo SITE_URL; ?>/security-reliability" hreflang="en-us" />
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
              <h1>Security & Reliability</h1>
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
                  <li class="tablinks active">
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
              <div id="Security-reliability" class="tabcontent">
                <div class="tabcontent-header">
                  <h2>Security & Reliability</h2>
                  <h6>Last updated: 16/08/2021</h6>
                </div>
                <div class="tabcontent-content">
                  <h3>Workstatus protects your data</h3>
                  <p>We take security very seriously at Workstatus. Protecting your data is our mission. To that end we follow today's security best practices, including the following:</p>
                  <ul>
                    <li>Data encryption in transit (https)</li>
                    <li>Data encryption at rest</li>
                    <li>Email confirmation</li>
                    <li>Strong passwords</li>
                    <li>Access controls</li>
                    <li> Detailed audit and system logs</li>
                    <li>Network security</li>
                    <li>Physical security</li>
                    <li>Workstatus personnel policies and procedures</li>
                  </ul>
                  <h3>Backups & reliability</h3>
                  <p>Through our internal invigilation program, our applications are constantly being probed for vulnerabilities. This creates an environment of continuous testing by us.</p>
                  <p>We run redundant systems across multiple locations, with automatic failover to provide the maximum fault tolerance.</p>
                  <h3>Frequently update code libraries</h3>
                  <p>We use an automated system to monitor known security vulnerabilities in the open source libraries we depend on and respond quickly by updating them.</p>
                  <h3>Incident response</h3>
                  <p>In case of a data breach we have a procedure that dictates how and when to make a timely responsible disclosure to the affected parties with a first communication within 72 hours of us becoming aware of the incident.</p>
                  <h3>Retention</h3>
                  <p>Workstatus does not retain data longer than is necessary to provide the service. Data retention is governed by our <a href="https://support.Workstatus.io/en/article/data-retention-comparison-grvz75/#1-data-retention-comparison" target="_blank">data retention policy</a>.</p>
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
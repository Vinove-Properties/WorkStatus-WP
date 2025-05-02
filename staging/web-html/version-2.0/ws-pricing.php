<?php require_once 'common/inc/config.inc.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="alternate" href="<?php echo SITE_URL; ?>/pricing" hreflang="en-us" />
    <link type="text/css" href="./assests/css/pricing-page-v2.css" rel="preload stylesheet" as="style" />
    <link type="text/css" href="./assests/css/pricing-filter.css" rel="preload stylesheet" as="style" />
    <link rel="preload stylesheet" as="style" id="ws-glider-css" href="https://www.workstatus.io/wp-content/themes/workstatus/assests/css/glider.css?ver=6.6.2" media="all" />
    <?php require_once 'common/inc/header-files.php'; ?>
  </head>
  <body class="page-template-tpl-pricing">
    <?php require_once 'common/inc/after-body-tag.php'; ?>
    <div class="feature-header"><?php require_once 'common/menu-v4.php';?></div>
    <div id="wsio-preloader" style="margin-top: 100px; display: none;">
      <div class="container" id="pre-loader">Please wait, while we load the pricing plans for you.</div>
    </div>
    <section class="hero-banner no-af-bg post-animation">
      <div class="container">
        <div class="inner-wrap">
          <div class="left">
            <h1>Simple, Flexible Pricing for Every Business</h1>
            <p>  <span class="no-hidden">No hidden fees</span>—just simple, affordable pricing for teams of all sizes. Can't find what you are looking for? </p>
            <p> Can't find what you are looking for?  <span class="conbtn" onclick="_playYTmedia()"><span>Setup a consulting call</span></span></p>
          </div>
        </div>
      </div>
    </section>
    <section class="ws-pricing">
      <div class="container">
      <nav id="pricing-Tabs" class="tab-nav">
        <ul>
          <li class="active" data-tab="#tab01"><a href="#tab01">Productivity</a></li>
          <li class="" data-tab="#tab02"><a href="#tab02">Project</a></li>
          <li class="" data-tab="#tab03"><a href="#tab03">Time</a></li>
          <li class="" data-tab="#tab04"><a href="#tab04">Attendance</a></li>
          <li class="" data-tab="#tab05"><a href="#tab04">Everything
            <img  alt="info" class="tooltip-icon" src="./assests/images/info-icon.svg"  width="12" height="12"> 
            <span class="info-text">This is the tooltip info about Everything.</span>
            </a>
          </li>
        </ul>
      </nav>
      <div id="inv-price-fltr" class="plan-section post-animation">
        <div class="switcher-sec">
          <div class="switch-btn-box">
            <span class="monthly">Monthly</span>
            <label class="switch">
            <input id="current-geo" value="IN" type="hidden">
            <input id="ps-switcher" type="checkbox">
            <span class="slider"></span>
            </label>
            <span class="annualy">Annual </span>
          </div>
          <div class="country-select">
            <span class="chose int-only"></span>
            <div class="select-list int-only">
              <div id="elm-selectBtn" class="pcselectBtn">
                <img class="flgicon" loading="lazy" id="pflag-icon" src="https://www.workstatus.io/wp-content/themes/workstatus/dev-images/flags/eur.svg" alt="Workstatus" width="13" height="13"><span id="pc-country">EUR (Europe)<br></span>
              </div>
              <div class="selectDropdown" style="z-index: 2;">
                <div class="pc-option" data-cod="AU" data-country="AUD (Aus &amp; NZ)">
                  <img class="flgicon" loading="lazy" src="https://www.workstatus.io/wp-content/themes/workstatus/dev-images/flags/au.svg" alt="Workstatus" width="13" height="13">AUD (Aus &amp; NZ)
                </div>
                <div class="pc-option" data-cod="AE" data-country="AED (United Arab Emirates)">
                  <img class="flgicon" loading="lazy" src="https://www.workstatus.io/wp-content/themes/workstatus/dev-images/flags/aed.svg" alt="Workstatus" width="13" height="13">AED (United Arab Emirates)
                </div>
                <div class="pc-option" data-cod="CA" data-country="CAD (Canada)">
                  <img class="flgicon" loading="lazy" src="https://www.workstatus.io/wp-content/themes/workstatus/dev-images/flags/cad.svg" alt="Workstatus" width="13" height="13">CAD (Canada)
                </div>
                <div class="pc-option" data-cod="EUR" data-country="EUR (Europe)">
                  <img class="flgicon" loading="lazy" src="https://www.workstatus.io/wp-content/themes/workstatus/dev-images/flags/eur.svg" alt="Workstatus" width="13" height="13">EUR (Europe)
                </div>
                <div class="pc-option" data-cod="GB" data-country="GBP (United Kingdom)">
                  <img class="flgicon" loading="lazy" src="https://www.workstatus.io/wp-content/themes/workstatus/dev-images/flags/gbp.svg" alt="Workstatus" width="13" height="13">GBP (United Kingdom)
                </div>
                <div class="pc-option" data-cod="US" data-country="USD (United States)">
                  <img loading="lazy" class="flgicon" src="https://www.workstatus.io/wp-content/themes/workstatus/dev-images/flags/usa.svg" alt="Workstatus" width="13" height="13">USD (United States)
                </div>
                <div class="pc-option" data-cod="LA" data-country="USD (Latin America)">
                  <img loading="lazy" class="flgicon" src="https://www.workstatus.io/wp-content/themes/workstatus/dev-images/flags/usa.svg" alt="Workstatus" width="13" height="13">USD (Latin America)
                </div>
                <div class="pc-option" data-cod="ZA" data-country="ZAR (African Region)">
                  <img loading="lazy" class="flgicon" src="https://www.workstatus.io/wp-content/themes/workstatus/dev-images/flags/zar.svg" alt="Workstatus" width="13" height="13">ZAR (African Region)
                </div>
                <div class="pc-option" data-cod="SA" data-country="SAR (Saudi Arab)">
                  <img loading="lazy" class="flgicon" src="https://www.workstatus.io/wp-content/themes/workstatus/dev-images/flags/sar.svg" alt="Workstatus" width="13" height="13">SAR (Saudi Arab)
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="price-contents">
        <div id="tab01" class="tab-contents active">
          <div class="pricing-card price-wrapper">
            <div class="card-left">
              <div class="pr-plan">
                <h3>Productivity Management</h3>
                <div class="total">NO USER MINIMUM</div>
                <p>Maximize team output with time tracking, app usage analysis &amp; productivity reports.</p>
              </div>
              <div class="card-plan">
                <span class="wph" class="pl-basic">USD 4 <span class="max-price">$5</span></span>
                <span class="prio">/ user / month</span>
              </div>
              <a class="price_btn" href="#">Buy Now</a>
              <span class="tryit">or <a href="https://app.workstatus.io/auth/register">Try It Free</a></span>
              <button onclick="togglePrice()" class="price-accordion" type="button" aria-expanded="false">Features</button>
            </div>
            <div class="card-right">
              <h3>Included in Plan:</h3>
              <div class="plan-include">
                <ul>
                  <li>Time Tracking</li>
                  <li>Timesheets</li>
                  <li>Unlimited screenshots</li>
                  <li>Activity Levels</li>
                  <li>App & URL tracking</li>
                  <li>Auto discard idle time</li>
                  <li>Teams</li>
                  <li>Time off & holidays</li>
                  <li>Scheduling & attendance</li>
                  <li>Timesheet approvals</li>
                </ul>
                <ul>
                  <li>Daily & weekly limits</li>
                  <li>Reports</li>
                  <li>Quiet (Stealth) Mode</li>
                  <li>Client Portal</li>
                  <li>Gamification</li>
                  <li>HRIS Integrations</li>
                  <li>Free on-boarding support</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div id="tab02" class="tab-contents">
          <div class="price-flex">
            <div class="price-column flex-3">
              <div class="price-box">
                <div class="pr-plan">
                  <h3>Project Management</h3>
                  <div class="total">NO USER MINIMUM</div>
                  <p>Maximize team output with time tracking, app usage analysis & productivity reports.</p>
                </div>
                <div class="card-plan">
                  <span class="wph" class="pl-basic">USD 4</span>
                  <span class="prio">/ user / month</span>
                </div>
                <a class="price_btn" href="#">Buy Now</a>
                <span class="tryit">or <a href="https://app.workstatus.io/auth/register">Try It Free</a></span>
              </div>
            </div>
            <div class="price-column flex-2">
              <div class="price-box">
                <div class="pr-plan">
                  <h3>Pro Unlimited<br><span class="op0">Pro Unlimited</span></h3>
                  <div class="total">NO USER MINIMUM</div>
                  <p>Stay on top of projects with seamless time tracking, task management, and budgeting.
                  </p>
                </div>
                <div class="card-plan">
                  <span class="wph" class="pl-basic">USD 5.5</span>
                  <span class="prio">/ user / month</span>
                </div>
                <a class="price_btn" href="#">Buy Now</a>
                <span class="tryit">or <a href="https://app.workstatus.io/auth/register">Try It Free</a></span>
              </div>
            </div>
          </div>
          <div class="plan-include">
            <h3>Included in Every Plan:</h3>
            <ul>
              <li>Unlimited Projects & Tasks</li>
              <li>Gantt Chart</li>
              <li>Budgeting</li>
              <li>Kanban Board</li>
              <li>Invoicing</li>
              <li>Invoicing Integrations</li>
              <li>Project & Task Time Tracking</li>
              <li>Customer Service Integrations</li>
              <li>Project Management Integrations</li>
              <li>1:1 onboarding tour with our team</li>
              <li>Multiple Filters & Custom Views </li>
              <li>First-in-line 24/5 priority support</li>
            </ul>
          </div>
        </div>
        <div id="tab03" class="tab-contents">
          <div class="pricing-card price-wrapper">
            <div class="card-left">
              <div class="pr-plan">
                <h3>Time Tracking</h3>
                <div class="total">2 Users Minimum</div>
                <p>Unlimited time tracking for all teams, suitable for businesses of any size.</p>
                <h4>Fit your needs</h4>
              </div>
              <div class="card-plan">
              </div>
              <div class="price-slider margin-0">
                <label for="pricingRange">Users: <span class="userCount">50</span></label>
                <input type="range" class="pricingRange" min="0" max="5" value="0" step="1" />
                <div class="slider-labels">
                  <div class="label" data-users="50">50<span class="tooltip">50 Users</span></div>
                  <div class="label" data-users="100">100<span class="tooltip">100 Users</span></div>
                  <div class="label" data-users="250">250<span class="tooltip">250 Users</span></div>
                  <div class="label" data-users="500">500<span class="tooltip">500 Users</span></div>
                  <div class="label" data-users="1000">1000<span class="tooltip">1000 Users</span></div>
                  <div class="label" data-users="custom">Custom<span class="tooltip">Custom Plan</span></div>
                </div>
              </div>
              <a class="price_btn" href="#">Request Quote</a>
              <span class="tryit">or <a href="https://app.workstatus.io/auth/register">Try It Free</a></span>
              <button onclick="togglePrice()" class="price-accordion" type="button" aria-expanded="false">Features</button>
            </div>
            <div class="card-right">
              <h3>Included in Plan:</h3>
              <div class="plan-include">
                <ul>
                  <li>Unlimited tracking</li>
                  <li>Mobile & desktop App</li>
                  <li>Time tracker</li>
                  <li>Idle detection & reminders</li>
                  <li>Timesheet</li>
                  <li>Reports</li>
                  <li>Auto tracker</li>
                  <li>Export & share data</li>
                  <li>Manual Timesheet</li>
                </ul>
                <ul>
                  <li>1:1 onboarding tour</li>
                  <li>Bulk Timesheet</li>
                  <li>24x5 Customer support</li>
                  <li>Team activity</li>
                  <li></li>
                  <li>Timesheet Approval</li>
                  <li></li>
                  <li>Breaks</li>
                  <li></li>
                  <li>Web Tracker App</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div id="tab04" class="tab-contents">
          <div class="pricing-card att-pricing price-wrapper">
            <div class="card-left">
              <div class="pr-plan">
                <h3>Time Tracking</h3>
                <div class="total">2 Users Minimum</div>
                <p>Unlimited time tracking for all teams, suitable for businesses of any size.</p>
              </div>
              <div class="card-plan">
                <span class="wph" class="pl-basic">USD 4 <span class="max-price">$5</span></span>
                <span class="prio">/yearly</span>
              </div>
              <div class="price-slider">
                <label for="pricingRange">Users: <span class="userCount">50</span></label>
                <input type="range" class="pricingRange" min="0" max="5" value="0" step="1" />
                <div class="slider-labels">
                  <div class="label" data-users="50">50<span class="tooltip">50 Users</span></div>
                  <div class="label" data-users="100">100<span class="tooltip">100 Users</span></div>
                  <div class="label" data-users="250">250<span class="tooltip">250 Users</span></div>
                  <div class="label" data-users="500">500<span class="tooltip">500 Users</span></div>
                  <div class="label" data-users="1000">1000<span class="tooltip">1000 Users</span></div>
                  <div class="label" data-users="custom">Custom<span class="tooltip">Custom Plan</span></div>
                </div>
              </div>
              <a class="price_btn" href="#">Buy Now</a>
              <span class="tryit">or <a href="https://app.workstatus.io/auth/register">Try It Free</a></span>
              <button onclick="togglePrice()" class="price-accordion" type="button" aria-expanded="false">Features</button>
            </div>
            <div class="card-right">
              <h3>Included in Plan:</h3>
              <div class="plan-include">
                <ul class="features">
                  <li>Mobile Check-in/Check-out</li>
                  <li>GPS-based Attendance Tracking</li>
                  <li>Selfie based Attendance Tracking</li>
                  <li>Geo-fenced Jobsites </li>
                  <li>Attendance Reports & Analytics</li>
                  <li>Shift Management & Scheduling</li>
                  <li>Late Coming Management & Alerts</li>
                  <li>Leave & Overtime Management </li>
                  <li>1:1 onboarding tour</li>
                  <li>24x5 Customer support</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div id="tab05" class="tab-contents">
          <div class="pricing-card every-card price-wrapper">
            <div class="card-left">
              <div class="pr-plan">
                <h3>Everything</h3>
                <div class="total">2 Users Minimum</div>
                <p>Unlimited time tracking for all teams, suitable for businesses of any size.</p>
              </div>
              <div class="card-plan">
                <span class="wph" class="pl-basic">USD 4 <span class="max-price">$5</span></span>
                <span class="prio">/yearly</span>
              </div>
              <a class="price_btn" href="#">Buy Now</a>
              <span class="tryit">or <a href="https://app.workstatus.io/auth/register">Try It Free</a></span>
              <button onclick="togglePrice()" class="price-accordion" type="button" aria-expanded="false">Features</button>
            </div>
            <div class="card-right price-wrapper">
              <h3>Included in Plan:</h3>
              <div class="plan-include">
                <ul>
                  <li>Time Tracking</li>
                  <li>Timesheets</li>
                  <li>Activity Levels</li>
                  <li>Daily & Weekly Limits</li>
                  <li>Unlimited Screenshots</li>
                  <li>Time Off & Holidays</li>
                  <li>Auto Discard Idle Time</li>
                  <li>Scheduling & Attendance</li>
                  <li>Gantt Charts</li>
                  <li>Timesheet Approvals</li>
                </ul>
                <ul>
                  <li>Teams</li>
                  <li>Invoicing</li>
                  <li>Integrations</li>
                  <li>Kanban</li>
                  <li>Stealth Mode</li>
                  <li>Client Portal</li>
                  <li>Gamification</li>
                  <li>Milestones</li>
                  <li>Budgeting</li>
                  <li>Reports</li>
                </ul>
                <ul>
                  <li>HRIS Integrations</li>
                  <li>PM Integrations</li>
                  <li>1:1 Onboarding Tour</li>
                  <li>24x5 Customer Support</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="right-plan-section">
      <div class="container">
        <div class="plan-wrap">
          <div class="left-column">
            <h2>Can’t Find the Right Plan?</h2>
            <p>Let’s Tailor One for You.</p>
            <div class="button-common">
              <div class="cmn-democta">
                <div class="ct-demo"><a href="javascript:void(0)" class="ctbtn"> Set Up a Free Consultation</a></div>
                <div class="ct-trial"><a  href="javascript:void(0);" class="ctbtn ctbtn2"> Request Enterprise Pricing</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="container">
      <div class="comparison-outer"><span class="plan-btn">View Full plan comparison</span></div>
    </div>
    <section class="comparison-panel" id="div-comparison">
      <div class="container">
        <div class="comp-table-sticky" id="comp-table-sticky">
          <table class="comp-table">
            <thead>
              <tr>
                <th></th>
                <th><span class="plan-label">FREE</span><a class="button" href="#">Choose plan</a></th>
                <th><span class="plan-label">BASIC</span><a class="button" href="#">Choose plan</a></th>
                <th><span class="plan-label">PROFESSIONAL</span><a class="button" href="#">Choose plan</a></th>
                <th><span class="plan-label">BUSINESS</span><a class="button" href="#">Choose plan</a></th>
                <th><span class="plan-label">ENTERPRISE</span><a class="button" href="#">Choose plan</a></th>
              </tr>
            </thead>
          </table>
        </div>
        <div class="comp-row" id="comp-row">
          <div class="comp-row">
            <h5>Time Tracking</h5>
            <table class="comp-tablerow">
              <tbody>
                <tr>
                  <td>Multi platform timer app</td>
                  <td><i class="chkicon"></i></td>
                  <td><i class="chkicon"></i></td>
                  <td><i class="chkicon"></i></td>
                  <td><i class="chkicon"></i></td>
                  <td><i class="chkicon"></i></td>
                </tr>
                <tr>
                  <td>Timesheets</td>
                  <td><i class="chkicon"></i></td>
                  <td><i class="chkicon"></i></td>
                  <td><i class="chkicon"></i></td>
                  <td><i class="chkicon"></i></td>
                  <td><i class="chkicon"></i></td>
                </tr>
                <tr>
                  <td>Timesheet approvals</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td><i class="chkicon"></i></td>
                  <td><i class="chkicon"></i></td>
                </tr>
                <tr>
                  <td>Idle time out</td>
                  <td>-</td>
                  <td>-</td>
                  <td><i class="chkicon"></i></td>
                  <td><i class="chkicon"></i></td>
                  <td><i class="chkicon"></i></td>
                </tr>
                <tr>
                  <td>Custom Idle time out</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td><i class="chkicon"></i></td>
                  <td><i class="chkicon"></i></td>
                </tr>
                <tr>
                  <td>Auto discard idle time</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td><i class="chkicon"></i></td>
                  <td><i class="chkicon"></i></td>
                </tr>
                <tr>
                  <td>Background timer *</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td><i class="chkicon"></i></td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="comp-row">
            <h5>Productivity monitoring</h5>
            <table class="comp-tablerow">
              <tbody>
                <tr>
                  <td>Screenshots</td>
                  <td>100/user/mo</td>
                  <td>500/user/mo</td>
                  <td>1,500/user/mo</td>
                  <td><i class="chkicon"></i></td>
                  <td><i class="chkicon"></i></td>
                </tr>
                <tr>
                  <td>Activity levels</td>
                  <td><i class="chkicon"></i></td>
                  <td><i class="chkicon"></i></td>
                  <td><i class="chkicon"></i></td>
                  <td><i class="chkicon"></i></td>
                  <td><i class="chkicon"></i></td>
                </tr>
                <tr>
                  <td>Apps & URLs tracking</td>
                  <td>-</td>
                  <td>500/user/mo</td>
                  <td>1,500/user/mo</td>
                  <td><i class="chkicon"></i></td>
                  <td><i class="chkicon"></i></td>
                </tr>
                <tr>
                  <td>Achievement badges</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td><i class="chkicon"></i></td>
                  <td><i class="chkicon"></i></td>
                </tr>
                <tr>
                  <td>Overtime</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td><i class="chkicon"></i></td>
                  <td><i class="chkicon"></i></td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="comp-row">
            <h5>Workforce Management</h5>
            <table class="comp-tablerow">
              <tbody>
                <tr>
                  <td>Dashboard</td>
                  <td><i class="chkicon"></i></td>
                  <td><i class="chkicon"></i></td>
                  <td><i class="chkicon"></i></td>
                  <td><i class="chkicon"></i></td>
                  <td><i class="chkicon"></i></td>
                </tr>
                <tr>
                  <td>Scheduling & attendance</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td><i class="chkicon"></i></td>
                  <td><i class="chkicon"></i></td>
                </tr>
                <tr>
                  <td>Daily & weekly limits</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td><i class="chkicon"></i></td>
                  <td><i class="chkicon"></i></td>
                </tr>
                <tr>
                  <td>Time off & holidays</td>
                  <td>-</td>
                  <td>-</td>
                  <td><i class="chkicon"></i></td>
                  <td><i class="chkicon"></i></td>
                  <td><i class="chkicon"></i></td>
                </tr>
                <tr>
                  <td>Overtime</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td><i class="chkicon"></i></td>
                  <td><i class="chkicon"></i></td>
                </tr>
                <tr>
                  <td>Work breaks</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td><i class="chkicon"></i></td>
                  <td><i class="chkicon"></i></td>
                </tr>
                <tr>
                  <td>Teams</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td><i class="chkicon"></i></td>
                  <td><i class="chkicon"></i></td>
                </tr>
                <tr>
                  <td>Clients</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td><i class="chkicon"></i></td>
                  <td><i class="chkicon"></i></td>
                </tr>
                <tr>
                  <td>Client invoices</td>
                  <td>3</td>
                  <td>5</td>
                  <td><i class="chkicon"></i></td>
                  <td><i class="chkicon"></i></td>
                  <td><i class="chkicon"></i></td>
                </tr>
                <tr>
                  <td>Team invoices</td>
                  <td><i class="chkicon"></i></td>
                  <td><i class="chkicon"></i></td>
                  <td><i class="chkicon"></i></td>
                  <td><i class="chkicon"></i></td>
                  <td><i class="chkicon"></i></td>
                </tr>
                <tr>
                  <td>Expense tracking</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td><i class="chkicon"></i></td>
                  <td><i class="chkicon"></i></td>
                </tr>
                <tr>
                  <td>Per user settings</td>
                  <td></td>
                  <td>-</td>
                  <td><i class="chkicon"></i></td>
                  <td><i class="chkicon"></i></td>
                  <td><i class="chkicon"></i></td>
                </tr>
                <tr>
                  <td>Payments & payroll</td>
                  <td>Limited</td>
                  <td>Limited</td>
                  <td></td>
                  <td><i class="chkicon"></i></td>
                  <td><i class="chkicon"></i></td>
                </tr>
                <tr>
                  <td>Pay by bank debit (ACH)</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td><i class="chkicon"></i></td>
                </tr>
                <tr>
                  <td>Account provisioning *</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td><i class="chkicon"></i></td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="comp-row">
            <h5>Security & Privacy</h5>
            <table class="comp-tablerow">
              <tbody>
                <tr>
                  <td>HIPAA compliance</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td><i class="chkicon"></i></td>
                </tr>
                <tr>
                  <td>SOC-2 Type II Compliance</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td><i class="chkicon"></i></td>
                </tr>
                <tr>
                  <td>Single sign-on</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td><i class="chkicon"></i></td>
                </tr>
                <tr>
                  <td>Two-factor authentication</td>
                  <td><i class="chkicon"></i></td>
                  <td><i class="chkicon"></i></td>
                  <td><i class="chkicon"></i></td>
                  <td><i class="chkicon"></i></td>
                  <td><i class="chkicon"></i></td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="comp-row">
            <h5>Data & Compliance</h5>
            <table class="comp-tablerow">
              <tbody>
                <tr>
                  <td>Public API</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>Limited</td>
                  <td><i class="chkicon"></i></td>
                </tr>
                <tr>
                  <td>Scheduled reports</td>
                  <td>-</td>
                  <td>-</td>
                  <td>3</td>
                  <td><i class="chkicon"></i></td>
                  <td><i class="chkicon"></i></td>
                </tr>
                <tr>
                  <td>Custom fields *</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td><i class="chkicon"></i></td>
                </tr>
                <tr>
                  <td>Historical bill/pay rates *</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td><i class="chkicon"></i></td>
                </tr>
                <tr>
                  <td>Departments/cost centers *</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td><i class="chkicon"></i></td>
                </tr>
                <tr>
                  <td>Private Cloud*</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td><i class="chkicon"></i></td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="comp-row">
            <h5>Support</h5>
            <table class="comp-tablerow">
              <tbody>
                <tr>
                  <td>Help center</td>
                  <td><i class="chkicon"></i></td>
                  <td><i class="chkicon"></i></td>
                  <td><i class="chkicon"></i></td>
                  <td><i class="chkicon"></i></td>
                  <td><i class="chkicon"></i></td>
                </tr>
                <tr>
                  <td>Learning center</td>
                  <td><i class="chkicon"></i></td>
                  <td><i class="chkicon"></i></td>
                  <td><i class="chkicon"></i></td>
                  <td><i class="chkicon"></i></td>
                  <td><i class="chkicon"></i></td>
                </tr>
                <tr>
                  <td>Chat support</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td><i class="chkicon"></i></td>
                  <td><i class="chkicon"></i></td>
                </tr>
                <tr>
                  <td>Email support SLA (24x5)</td>
                  <td>Limited support</td>
                  <td>2 days</td>
                  <td>1 day</td>
                  <td>1 day</td>
                  <td>2 hours</td>
                </tr>
                <tr>
                  <td>Assigned account representative</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td><i class="chkicon"></i></td>
                </tr>
                <tr>
                  <td>Concierge set up</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td><i class="chkicon"></i></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>
    <section class="option-data padding-t-120  padding-b-120">
      <div class="container">
        <div class="top-section">
          <h2>Optional add-ons</h2>
          <p>Choose your plan above, and then select the add-ons that are right for you.<br>
            Features marked with * can be added via add-ons below.
          </p>
        </div>
        <div class="addons-row">
          <div class="addond-col">
            <div class="add-box">
              <div class="topDiv">
                <div class="icon"><img loading="lazy" src="./assests/images/addon-01.svg"
                  alt="ws" width="45" height="45">
                </div>
                <div class="tcon">
                  <h4>Insights</h4>
                  <span class="price">Starts at $2</span>
                  <span class="unit">/ user / mo</span>
                </div>
              </div>
              <div class="bottomDiv">
                <ul>
                  <li>Categorized work time</li>
                  <li>Smart notifications</li>
                  <li>Focus & meeting time</li>
                  <li>Suspicious activity detection</li>
                  <li>Behavioral highlights</li>
                  <li>Work time classification</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="addond-col">
            <div class="add-box">
              <div class="topDiv">
                <div class="icon"><img loading="lazy" src="./assests/images/addon-02.svg"
                  alt="ws" width="45" height="45">
                </div>
                <div class="tcon">
                  <h4>More screenshots</h4>
                  <span class="price">Starts at $3</span>
                  <span class="unit">/ user / mo</span>
                </div>
              </div>
              <div class="bottomDiv">
                <ul>
                  <li>Allow up to 10 screenshots team members</li>
                  <li>Includes all secondary monitors in use</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="addond-col">
            <div class="add-box">
              <div class="topDiv">
                <div class="icon"><img loading="lazy" src="./assests/images/addon-03.svg"
                  alt="ws" width="45" height="45">
                </div>
                <div class="tcon">
                  <h4>Tasks</h4>
                  <span class="price">Starts at $3</span>
                  <span class="unit">/ user / mo</span>
                </div>
              </div>
              <div class="bottomDiv">
                <ul>
                  <li>Kanban view</li>
                  <li>Timeline view</li>
                  <li>Task comments</li>
                  <li>Start / Due dates</li>
                  <li>Labels and attachments</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="addond-col">
            <div class="add-box">
              <div class="topDiv">
                <div class="icon"><img loading="lazy" src="./assests/images/adon-04.svg"
                  alt="ws" width="45" height="45">
                </div>
                <div class="tcon">
                  <h4>Data retention</h4>
                  <span class="price">Starts at $2 </span>
                  <span class="unit">/ user / mo</span>
                </div>
              </div>
              <div class="bottomDiv">
                <ul>
                  <li>Data retention extended to 6 years for</li>
                  <ul>
                    <li>Time & activity data</li>
                    <li>Calendar & limits</li>
                    <li>Finances</li>
                  </ul>
                </ul>
              </div>
            </div>
          </div>
          <div class="addond-col">
            <div class="add-box">
              <div class="topDiv">
                <div class="icon"><img loading="lazy" src="./assests/images/adon-05.svg"
                  alt="ws" width="45" height="45">
                </div>
                <div class="tcon">
                  <h4>Locations</h4>
                  <span class="price">Starts at $4</span>
                  <span class="unit">/ user / mo</span>
                </div>
              </div>
              <div class="bottomDiv">
                <ul>
                  <li>Location tracking on mobile</li>
                  <li>Job sites with geofences</li>
                  <li>Work orders</li>
                  <li>Jobs</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="addond-col">
            <div class="add-box">
              <div class="topDiv">
                <div class="icon"><img loading="lazy" src="./assests/images/adon-06.svg"
                  alt="ws" width="45" height="45">
                </div>
                <div class="tcon">
                  <h4>Corporate app</h4>
                  <span class="price">Starts at $3</span>
                  <span class="unit">/ user / mo</span>
                </div>
              </div>
              <div class="bottomDiv">
                <ul>
                  <li>Track time and activity in the background on company</li>
                  <li>Add new members through provisioning & manage email</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="addond-col">
            <div class="add-box">
              <div class="topDiv">
                <div class="icon"><img loading="lazy" src="./assests/images/addon-07.svg"
                  alt="ws" width="45" height="45">
                </div>
                <div class="tcon">
                  <h4>Private Cloud</h4>
                  <span class="price">Starts at $3</span>
                  <span class="unit">/ user / mo</span>
                </div>
              </div>
              <div class="bottomDiv">
                <ul>
                  <li>Location tracking on mobile</li>
                  <li>Job sites with geofences</li>
                  <li>Work orders</li>
                  <li>Jobs</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="faqsRow wfull for-heading-center padding-t-120 padding-b-120">
      <div class="container">
        <div class="top-section text-center">
          <h6><span class="bg-purple">Get Answers For</span></h6>
          <h2>Frequently Asked Questions</h2>
          <p>Managing your workforce, projects, and reports gets simple & effective.</p>
        </div>
        <div class="flex_row">
          <div itemscope itemtype="https://schema.org/FAQPage">
            <div class="column">
              <div class="faq-accordion-item-outer open" itemscope itemprop="mainEntity"
                itemtype="https://schema.org/Question">
                <h3 itemprop="name"> What Makes Workstatus™ The Best Online Invoice Software?
                </h3>
                <div class="faq-accordion-content">
                  <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                    <div itemprop="text">
                      <p>Workstatus online time tracking & invoicing is a simple yet powerful tool that provides you with everything you need to run your own business, without any additional feature overload. </p>
                      <p>As your business grows, so does Workstatus. We provide full accounting integration through our open API allowing you to sync your projects and tasks anytime. </p>
                      <p>With Workstatus <strong>invoice and estimate software</strong>, it’s easier than ever before to manage all of your operations in one central location while automating repetitive tasks such as sending estimates, accepting payments, and following up on outstanding balances.
                      </p>
                      <p>It works great for creating individual or recurring invoices including estimated projects, recurring clients, or worker's compensation information. Workstatus keeps track of time spent on each task, allows you to add costs, and create automatic invoices from completed tasks. You can also export data directly. </p>
                      <p>Best of all, we're available around the clock to help answer questions and solve your problems.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="faq-accordion-item-outer" itemscope itemprop="mainEntity"
                itemtype="https://schema.org/Question">
                <h3 itemprop="name">Can I Manage Timesheets And Bills Together At Workstatus™?</h3>
                <div class="faq-accordion-content">
                  <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                    <div itemprop="text">
                      <p>Yes, Absolutely! You can manage timesheets and bills together with Workstatus.  This is what most of our customers are doing. </p>
                      <p>For example- Instead of billing by the hour or day, you will be able to bill your customer based on time spent on tasks or milestones which happen during a specific period (monthly, weekly or daily). Time management reporting in combination with billing is a very common model that many of our customers use at their businesses. </p>
                      <p>In addition, Workstatus is built specifically to combine both features since there were no affordable solutions out there providing these features combined. No matter how you set up your business, whether it’s based on hourly/daily billing or milestone /project-based pricing. We recommend using Workstatus to manage timesheets and invoicing to get insights into how much time was spent on different projects while tracking each activity online. </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="faq-accordion-item-outer" itemscope itemprop="mainEntity"
                itemtype="https://schema.org/Question">
                <h3 itemprop="name">Will My Confidential Data Remain Safe While Using The Online Invoice Maker At Workstatus™?</h3>
                <div class="faq-accordion-content">
                  <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                    <div itemprop="text">
                      <p>Your confidential data is safe while using our <strong>online billing software.</strong> This means none of your financial information stored within Workstatus will ever reach an unsecured page, no matter how many levels deep it goes into our system.</p>
                      <p>In addition, all pages that allow for a credit card or payment entry are protected by double encryption to ensure all sensitive account data remains private between your company and us. </p>
                      <p>Furthermore,  we won’t access any of your financial information either. The only time we would touch a client’s bank details would be if you specifically asked us to make a change on behalf of you, such as making a deposit in an escrow account, adding/removing another bank account as part of a wire transfer, or filing fraudulent charge-backs on a customer who refuses to pay its outstanding balance on time. </p>
                      <p>Otherwise, at no point in time during our relationship with your business will anyone from Workstatus have access to or see any of your company’s financial data. We have strict security policies that prohibit anyone from viewing customer bank accounts without express permission given by specific people within each account administrator hierarchy. </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="faq-accordion-item-outer" itemscope itemprop="mainEntity"
                itemtype="https://schema.org/Question">
                <h3 itemprop="name">Is It Possible To Create Online Invoices In Different Languages And Currencies?</h3>
                <div class="faq-accordion-content">
                  <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                    <div itemprop="text">
                      <p>Yes, it is possible to create an invoice in different languages. The language of your invoices will be based on your settings in Workstatus. </p>
                      <p>To change your settings please go to Settings > Languages and select which ones you want available or add a new one if needed. Additionally, it is also possible to have different currencies on invoices based on the client. To change it, just navigate to Settings > Billing and there you can customise some default options for billing clients like currency, VAT, etc. From there you can manage all your transactions as well as modify clients (add/remove), get reports & much more! </p>
                      <p>It's all very simple but powerful to manage projects from start till end. If still having any problems with implementation, feel free to contact us!</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="faq-accordion-item-outer" itemscope itemprop="mainEntity"
                itemtype="https://schema.org/Question">
                <h3 itemprop="name">Can The Invoice Number Be Changed?</h3>
                <div class="faq-accordion-content">
                  <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                    <div itemprop="text">
                      <p>Yes, you can change your invoice number before you submit an invoice but not after it has been submitted.</p>
                      <p>To change the invoice number edit a previously submitted invoice number go to My Activities>View Invoices>Select Invoice>View Details>Edit Billing Address/Invoice Number/Shipping Method>Update Details. And it will be updated</p>
                      <p>Workstatus also helps your business owner track and manage projects in every stage of development from proposal through completion with our unique time-tracking system, contract management capabilities, and invoicing tools. Plus our integrated functionality allows you to combine deadlines related to multiple projects, so you don’t miss any deadlines on those all important bids.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="faq-accordion-item-outer" itemscope itemprop="mainEntity"
                itemtype="https://schema.org/Question">
                <h3 itemprop="name">Can I Manage Account Receivables And Account Payables Together With Workstatus™?
                </h3>
                <div class="faq-accordion-content">
                  <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                    <div itemprop="text">
                      <p>Yes, you can manage Account Receivables and Account Payables together with Workstatus.</p>
                      <p>The best part of both is you don’t need to buy two different pieces of software for each of them, just purchase Workstatus and all your business needs will be met under one umbrella. You would be able to generate professional invoices and estimates, track payment due dates, keep an eye on open projects, and more! </p>
                      <p>Workstatus helps your business by managing your account receivables and account payables details in an easy-to-use online system. It provides automation software that is easy to set up, install and maintain.</p>
                      <p>With its auto categorization feature, it creates a detailed report of each invoice and estimate within a few clicks while keeping track of all credits and advances made towards projects. With Workstatus software, your company will be able to create professional invoices/estimates in just minutes.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="blogvideo-popup">
      <div id="gen-vpopup" class="popup-wrapper">
        <div class="popWrap">
          <div class="popup-content">
            <span class="closeicon" onclick="closeGenVideo()">Close</span> 
            <iframe id="gen-video" class="videoIframe js-videoIframe" allowfullscreen="" src="https://calendly.com/workstatus/demo" allow="autoplay"></iframe>
          </div>
        </div>
      </div>
    </div>
    <section class="top-rated bg-light padding-t-120 padding-b-120">
      <div class="container">
        <div class="top-section text-center">
          <h6><span class="bg-purple">TOP RATED GLOBALLY</span></h6>
          <h2>The <strong>#1</strong> Productivity Software</h2>
          <p>Managing your workforce, projects, and reports gets simple & effective.</p>
        </div>
        <div class="award-grid">
          <div class="award-column">
            <div class="rate-desp">
              <div class="rate-box">
                <picture>
                  <img loading="lazy" src="./assests/images/sitebaz.svg" alt="Workstatus" width="155" height="36">
                </picture>
                <p>Workstatus is a Leader in the 2024 Gartner® Magic Quadrant™ for DevOps Platforms</p>
                <a href="#" class="is-arrow">Explore More</a>
              </div>
              <div class="rate-box">
                <picture>
                  <img loading="lazy" src="./assests/images/trustpiolet.svg" alt="Workstatus" width="127" height="31">
                </picture>
                <p>Workstatus is a Leader in the 2024 Gartner® Magic Quadrant™ for DevOps Platforms</p>
                <a href="#" class="is-arrow">Explore More</a>
              </div>
            </div>
          </div>
          <div class="award-column">
            <div class="award-logo">
              <h3><strong>Workstatus</strong> ranks as a G2 Leader across DevSecOps categories</h3>
              <div class="award-row">
                <div class="award-col">
                  <div class="img-wrap">
                    <picture>
                      <img loading="lazy" src="./assests/images/award-logo01.svg" alt="Award" width="119" height="19">
                    </picture>
                  </div>
                  <i class="star"></i>
                </div>
                <div class="award-col">
                  <div class="img-wrap">
                    <picture>
                      <img loading="lazy" src="./assests/images/award-logo02.svg" alt="Award" width="113" height="17">
                    </picture>
                  </div>
                  <i class="star"></i>
                </div>
                <div class="award-col">
                  <div class="img-wrap">
                    <picture>
                      <img loading="lazy" src="./assests/images/award-logo03.svg" alt="Award" width="26" height="26">
                    </picture>
                  </div>
                  <i class="star"></i>
                </div>
                <div class="award-col">
                  <div class="img-wrap">
                    <picture>
                      <img loading="lazy" src="./assests/images/award-logo04.svg" alt="Award" width="117" height="41">
                    </picture>
                  </div>
                  <i class="star"></i>
                </div>
                <div class="award-col">
                  <div class="img-wrap">
                    <picture>
                      <img loading="lazy" src="./assests/images/award-logo05.svg" alt="Award" width="117" height="41">
                    </picture>
                  </div>
                  <i class="star"></i>
                </div>
                <div class="award-col">
                  <div class="img-wrap">
                    <picture>
                      <img loading="lazy" src="./assests/images/award-logo06.svg" alt="Award" width="136" height="21">
                    </picture>
                  </div>
                  <i class="star"></i>
                </div>
                <div class="award-col">
                  <div class="img-wrap">
                    <picture>
                      <img loading="lazy" src="./assests/images/award-logo07.svg" alt="Award" width="124" height="23">
                    </picture>
                  </div>
                  <i class="star"></i>
                </div>
                <div class="award-col">
                  <div class="img-wrap">
                    <picture>
                      <img loading="lazy" src="./assests/images/award-logo08.svg" alt="Award" width="134" height="21">
                    </picture>
                  </div>
                  <i class="star"></i>
                </div>
              </div>
              <a href="https://www.trustpilot.com/review/www.workstatus.io" class="is-arrow" style="opacity:0;">What industry analysts are saying </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="start-journey bg-blue padding-t-100 padding-b-100">
      <div class="container">
        <div class="ws-flex">
          <div class="jour-col">
            <div class="top-section">
              <h6><span class="bg-purple">DON’T WAIT</span></h6>
              <h2>Start Your <span><img loading="lazy" src="./assests/images/head-logo.svg" alt="Workstatus" width="263" height="15"></span>
                Journey Today!
              </h2>
              <p>Get detailed and clean activity reports of your team.</p>
            </div>
            <div class="actionBtn">
              <div><a href="javascript:void(0)" onclick="call_demows();" class="primary_btn1">Book A Demo</a>
                <small>Get queries answered from experts</small>
              </div>
              <div><a data-href="https://app.workstatus.io/auth/register/?pid=42&amp;type=monthly" href="javascript:void(0);" class="primary_btn2 formbtn" onclick="return get_ws_signupform(this);">Start Free Trial</a>
                <small>No credit card required</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <?php require_once 'common/footer.php';?>
    <script>
      //Script for pricing slider
      
      document.addEventListener("DOMContentLoaded", function () {
      function updateSlider(tabContent) {
      const rangeInput = tabContent.querySelector(".pricingRange");
      const userCountDisplay = tabContent.querySelector(".userCount");
      const sliderLabels = tabContent.querySelectorAll(".slider-labels .label");
      
      if (!rangeInput || !userCountDisplay || !sliderLabels.length) return;
      
      const userValues = Array.from(sliderLabels).map(label =>
      label.dataset.users
      );
      
      function setUserCount(index) {
      const value = userValues[index];
      userCountDisplay.textContent = value;
      }
      
      // Initial load
      setUserCount(parseInt(rangeInput.value, 10));
      
      // Range input update
      rangeInput.addEventListener("input", function () {
      setUserCount(parseInt(this.value, 10));
      });
      
      // Label click update
      sliderLabels.forEach((label, index) => {
      label.addEventListener("click", function () {
        rangeInput.value = index;
        setUserCount(index);
      });
      });
      }
      
      function initAllVisibleSliders() {
      const activeTabs = document.querySelectorAll(".tab-contents.active");
      activeTabs.forEach(tab => updateSlider(tab));
      }
      
      // Initial load
      initAllVisibleSliders();
      
      // Re-initialize on tab switch
      const tabs = document.querySelectorAll("#pricing-Tabs li");
      tabs.forEach(tab => {
      tab.addEventListener("click", function (e) {
      e.preventDefault();
      // Remove active class from all
      tabs.forEach(t => t.classList.remove("active"));
      document.querySelectorAll(".tab-contents").forEach(c => c.classList.remove("active"));
      
      // Add active class to clicked
      this.classList.add("active");
      const tabId = this.dataset.tab;
      const activeContent = document.querySelector(tabId);
      if (activeContent) {
        activeContent.classList.add("active");
        initAllVisibleSliders(); // reinitialize
      }
      });
      });
      });
      
      
      
      
      
      
      
      
      
            function _playYTmedia(video){
                let iframe = document.getElementById("gen-video");
                let ipopup = document.getElementById("gen-vpopup");
                iframe.setAttribute('src', video+"?autoplay=1");
                setTimeout(function(){        
                    ipopup.style.display = "block";    
                }, 200);
            }
            
            function closeGenVideo(){
                let iframe = document.getElementById("gen-video");
                let ipopup = document.getElementById("gen-vpopup");
                iframe.setAttribute('src', "");    
                ipopup.style.display = "none";
            }
          
    </script>
    <script data-cfasync="false" src="assests/js/script.js?version=<?php echo time(); ?>"></script>
    <script>
      var pricingTabs = document.querySelectorAll("#pricing-Tabs li");
      var tabPanesPc = document.getElementsByClassName("tab-contents");
      function activateTabFx(e) {
          e.preventDefault();
          pricingTabs.forEach(function(label) {
              label.classList.remove("active");
          });
      
          Array.prototype.forEach.call(tabPanesPc, function(pane) {
              pane.classList.remove("active");
          });
      
          if (e.target === this || this.contains(e.target)) {
              var clickedTab = this.getAttribute("data-tab");
              this.classList.add("active");
              var activePane = document.querySelector(clickedTab);
              
              if (activePane) {
                  activePane.classList.add("active");
              } else {
                  console.error("No element found for the selector: " + clickedTab);
              }
          }
      }
      pricingTabs.forEach(function(tab) {
          tab.addEventListener("click", activateTabFx);
      });
        
    </script>
    <script>
      if( document.body.classList.contains('page-template-tpl-pricing') ){
          let planBtn = document.querySelector('.comparison-outer .plan-btn');
          let columnBox = document.querySelector('.comparison-panel');
          planBtn.addEventListener('click', ()=>{
              planBtn.classList.toggle('rotate');
              columnBox.classList.toggle('toggle');
          });
      
        }
      
      
      
            var $window = window,
                compTable = document.getElementById("div-comparison");
            if (compTable) {
                var stickytable = document.getElementById("comp-table-sticky"),
                    tableRow = document.getElementById("comp-row");
                window.addEventListener("scroll", function () {
                    if (screen.width > 991) {
                        var e = tableRow.getBoundingClientRect().top + window.scrollY;
                        document.documentElement.scrollTop > e - 10 ? stickytable.classList.add("sticky") : stickytable.classList.remove("sticky");
                        var t = tableRow.offsetHeight;
                        t += parseInt(window.getComputedStyle(tableRow).getPropertyValue("margin-top"));
                        var n = e + (t += parseInt(window.getComputedStyle(tableRow).getPropertyValue("margin-bottom")));
                        document.documentElement.scrollTop + (stickytable.offsetHeight + 200) > n ? stickytable.classList.add("btomfixed") : stickytable.classList.remove("btomfixed");
                    } else stickytable.classList.remove("sticky"), stickytable.classList.remove("btomfixed");
                });
            }
            
            
            
                 
      const showDivButtons = document.querySelectorAll('.price-accordion');
      const hiddenDivs = document.querySelectorAll('.price-wrapper');
      
      showDivButtons.forEach((button, index) => {
          button.addEventListener('click', () => {
          
              hiddenDivs[index].classList.toggle('is-visible');
          });
      });
      
      
      
            
            
                
          
    </script>
  </body>
</html>
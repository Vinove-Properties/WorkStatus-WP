<?php require_once 'common/inc/config.inc.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="alternate" href="<?php echo SITE_URL; ?>/pricing" hreflang="en-us" />
    <link type="text/css" href="./assests/css/ws-pricing.css" rel="preload stylesheet" as="style" />
    <?php require_once 'common/inc/header-files.php'; ?>
  </head>
  <body class="page-template-tpl-pricing">
    <?php require_once 'common/inc/after-body-tag.php'; ?>
    <div class="feature-header">
      <?php require_once 'common/header.php';?>
    </div>
    <section class="ws-pricing">
      <div class="container">
      <div class="price-flex">
        <div class="price-column">
          <div class="price-box">
            <div class="pr-plan">
              <h3>BASIC</h3>
              <div class="card-plan"><span>$4</span><span class="prio">/ user / month</span></div>
              <div class="total">$7,140 monthly total</div>
            </div>
            <a class="price_btn" href="#">Choose Plan</a>
            <div class="price-wrapper">
              <div class="price-options">
                <h4>Includes:</h4>
                <div class="option-list">
                  <div class="option">
                    Time tracking
                  </div>
                  <div class="option">
                    Timesheets
                  </div>
                  <div class="option">
                    Activity Levels
                  </div>
                  <div class="option">
                    Limited screenshots
                  </div>
                  <div class="option">
                    Limited app & URL tracking
                  </div>
                  <div class="option">
                    Limited reports
                  </div>
                  <div class="option">
                    Limited payments
                  </div>
                  <div class="option">
                    Clients & Invoices
                  </div>
                  <div class="support-options">
                    <h4>Support:</h4>
                    <p>Limited SLA</p>
                  </div>
                </div>
              </div>
              <button onclick="togglePrice()"  class="price-accordion" type="button" aria-expanded="false">
              Features
              </button>
            </div>
          </div>
        </div>
        <div class="price-column">
          <div class="price-box">
            <div class="pr-plan">
              <h3>PROFESSIONAL</h3>
              <div class="card-plan"><span>$6</span><span class="prio">/ user / month</span></div>
              <div class="total">$7,140 monthly total</div>
            </div>
            <a class="price_btn" href="#">Choose Plan</a>
            <div class="price-wrapper">
              <div class="price-options">
                <h4>Everything in Basic +</h4>
                <div class="option-list">
                  <div class="option">
                    Tasks (Add-on)
                  </div>
                  <div class="option">
                    Reports
                  </div>
                  <div class="option">
                    1 integration
                  </div>
                  <div class="option">
                    Idle timeout
                  </div>
                  <div class="option">
                    Project budgets
                  </div>
                  <div class="option">
                    Work breaks
                  </div>
                  <div class="option">
                    Expenses
                  </div>
                  <div class="option">
                    Clients & Invoices
                  </div>
                  <div class="support-options">
                    <h4>Support:</h4>
                    <p>Two-day email support SLA</p>
                  </div>
                </div>
              </div>
              <button onclick="togglePrice()"   class="price-accordion" type="button" aria-expanded="false">
              Features
              </button>
            </div>
          </div>
        </div>
        <div class="price-column">
          <div class="price-box">
            <div class="pr-plan">
              <h3>BUSINESS</h3>
              <div class="card-plan"><span>$8</span><span class="prio">/ user / month</span></div>
              <div class="total">$10,820 monthly total</div>
            </div>
            <a class="price_btn" href="#">Choose Plan</a>
            <div class="price-wrapper">
              <div class="price-options">
                <h4>Everything in Professional +</h4>
                <div class="option-list">
                  <div class="option">
                    Insights (Add-on)
                  </div>
                  <div class="option">
                    Tasks (Add-on)
                  </div>
                  <div class="option">
                    Unlimited screenshots
                  </div>
                  <div class="option">
                    Unlimited app & URL tracking
                  </div>
                  <div class="option">
                    Aduto discard idle time
                  </div>
                  <div class="option">
                    Teams
                  </div>
                  <div class="option">
                    Payments & payroll
                  </div>
                  <div class="option">
                    Unlimited integrations
                  </div>
                  <div class="option">
                    Overtime
                  </div>
                  <div class="option">
                    Time off & holidays
                  </div>
                  <div class="option">
                    Scheduling & attendance
                  </div>
                  <div class="option">
                    Client budgets
                  </div>
                  <div class="option">
                    Timesheet approvals
                  </div>
                  <div class="option">
                    Daily & weekly limits
                  </div>
                  <div class="support-options">
                    <h4>Support:</h4>
                    <p>Chat support</p>
                    <p>One-day email support SLA</p>
                  </div>
                </div>
              </div>
              <button onclick="togglePrice()" class="price-accordion" type="button" aria-expanded="false">
              Features
              </button>
            </div>
          </div>
        </div>
        <div class="price-column">
          <div class="price-box">
            <div class="pr-plan">
              <h3>ENTERPRISE</h3>
              <div class="card-plan">Custom</div>
              <div class="b-anu"><strong>Billed annually.</strong> Switch the Billing cycle to Annual to view Enterprise.</div>
            </div>
            <a class="price_btn" href="#">Let’s Talk</a>
            <div class="price-wrapper">
              <div class="price-options">
                <h4>Everything in Business +</h4>
                <div class="option-list">
                  <div class="option">
                    Locations (Add-on)
                  </div>
                  <div class="option">
                    Insights (Add-on)
                  </div>
                  <div class="option">
                    Tasks (Add-on)
                  </div>
                  <div class="option">
                    Corporate App (Add-on)
                  </div>
                  <div class="option">
                    Private Cloud (Add-on)
                  </div>
                  <div class="option">
                    Higher limit on public API
                  </div>
                  <div class="option">
                    HIPAA compliance
                  </div>
                  <div class="option">
                    SOC-2 Type II Compliance
                  </div>
                  <div class="option">
                    Enterprise deployments
                  </div>
                  <div class="option">
                    Account provisioning
                  </div>
                  <div class="option">
                    Single sign-on
                  </div>
                  <div class="support-options">
                    <h4>Support:</h4>
                    <p>Concierge setup</p>
                    <p>Assigned Account Representative</p>
                    <p>Two-hour email support SLA</p>
                  </div>
                </div>
              </div>
              <button onclick="togglePrice()" class="price-accordion" type="button" aria-expanded="false">
              Features
              </button>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="free-price">
      <div class="container">
        <div class="fdflex">
          <div class="colLeft">
            <div class="pr-plan">
              <h3>FREE</h3>
              <div class="card-plan"><span>$0</span><span class="prio">For single user only</span></div>
              <div class="total">$0 monthly total</div>
            </div>
          </div>
          <div class="colRit">
            <div class="cont">
              <ul>
                <li>Time Tracking</li>
                <li>Limited screenshots</li>
                <li>Timesheets</li>
                <li>Limited reports</li>
                <li>Activity Levels</li>
                <li>Limited payments</li>
                <li>Clients & Invoices</li>
              </ul>
            </div>
            <div class="btn"><a class="price_btn" href="#">Choose Plan</a></div>
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
    <section class="option-data">
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
    <section class="faqsRow wfull for-heading-center">
      <div class="container">
        <div class="top-section">
          <h6><span class="bg-purple">Get Answers For</span></h6>
          <h2>Frequently Asked Questions</h2>
        </div>
        <div class="flex_row">
          <div itemscope itemtype="https://schema.org/FAQPage">
            <div class="column">
              <div class="faq-accordion-item-outer open" itemscope itemprop="mainEntity"
                itemtype="https://schema.org/Question">
                <h3 itemprop="name">Can I cancel at any time?
                </h3>
                <div class="faq-accordion-content">
                  <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                    <div itemprop="text">
                      <p>Yes, you can cancel and upgrade or downgrade your plan at any time.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="faq-accordion-item-outer" itemscope itemprop="mainEntity"
                itemtype="https://schema.org/Question">
                <h3 itemprop="name">Are there larger plans?</h3>
                <div class="faq-accordion-content">
                  <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                    <div itemprop="text">
                      <p>Yes there are. We can serve any size team. We have plans for up to 350 users.
                        If that's not big enough please contact us and we will set up a plan that is
                        right for you.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="faq-accordion-item-outer" itemscope itemprop="mainEntity"
                itemtype="https://schema.org/Question">
                <h3 itemprop="name">How are users counted?</h3>
                <div class="faq-accordion-content">
                  <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                    <div itemprop="text">
                      <p>Users, managers, and organization owners are considered members and count
                        toward the
                        total price of your subscription. Client viewers do not count as members.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="faq-accordion-item-outer" itemscope itemprop="mainEntity"
                itemtype="https://schema.org/Question">
                <h3 itemprop="name">Can I export my data?</h3>
                <div class="faq-accordion-content">
                  <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                    <div itemprop="text">
                      <p>Yes. Your data is just that, yours. We provide several export options.
                        We make it easy for you to get your data.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="faq-accordion-item-outer" itemscope itemprop="mainEntity"
                itemtype="https://schema.org/Question">
                <h3 itemprop="name"> Can I invite clients?</h3>
                <div class="faq-accordion-content">
                  <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                    <div itemprop="text">
                      <p>Yes, you can invite as many clients as you want, and you will not be charged
                        for them.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="faq-accordion-item-outer" itemscope itemprop="mainEntity"
                itemtype="https://schema.org/Question">
                <h3 itemprop="name">Do you track keystrokes?
                </h3>
                <div class="faq-accordion-content">
                  <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                    <div itemprop="text">
                      <p>We only assign true and false values to record activity. We do not track the
                        keys
                        being hit.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="faq-accordion-item-outer" itemscope itemprop="mainEntity"
                itemtype="https://schema.org/Question">
                <h3 itemprop="name">How can I contact Workstatus support?
                </h3>
                <div class="faq-accordion-content">
                  <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                    <div itemprop="text">
                      <p>Please email us at support@Workstatus.com and we will get back to you as soon
                        as possible.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="faq-accordion-item-outer" itemscope itemprop="mainEntity"
                itemtype="https://schema.org/Question">
                <h3 itemprop="name">Can I watch a demo?
                </h3>
                <div class="faq-accordion-content">
                  <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                    <div itemprop="text">
                      <p>Sure! Check out our demo page right here.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="all-partners bglight">
      <div class="container">
        <div class="top-section">
          <h6><span class="bg-purple">TOP RATED GLOBALLY</span></h6>
          <h2>TThe #1 Productivity Software</h2>
          <p>Workstatus: Transforming work data into success. Trusted for top-notch security, celebrated support, and loved worldwide.</p>
        </div>
        <div class="part-row">
          <div class="part-col">
            <div class="img-wrap">
              <picture>
                <source type="image/webp" srcset="./assests/images/tie-01.png">
                <source type="image/png" srcset="./assests/images/tie-01.png">
                <img loading="lazy" src="./assests/images/tie-01.png"
                  alt="Testimonials" width="133" height="31">
              </picture>
            </div>
            <i class="star"></i>
          </div>
          <div class="part-col">
            <div class="img-wrap">
              <picture>
                <source type="image/webp" srcset="./assests/images/tie-02.png">
                <source type="image/png" srcset="./assests/images/tie-02.png">
                <img loading="lazy" src="./assests/images/tie-02.png"
                  alt="Testimonials" width="" height="">
              </picture>
            </div>
            <i class="star"></i>
          </div>
          <div class="part-col">
            <div class="img-wrap">
              <picture>
                <source type="image/webp" srcset="./assests/images/tie-03.png">
                <source type="image/png" srcset="./assests/images/tie-03.png">
                <img loading="lazy" src="./assests/images/tie-03.png"
                  alt="Testimonials" width="" height="">
              </picture>
            </div>
            <i class="star"></i>
          </div>
          <div class="part-col">
            <div class="img-wrap">
              <picture>
                <source type="image/webp" srcset="./assests/images/tie-04.png">
                <source type="image/png" srcset="./assests/images/tie-04.png">
                <img loading="lazy" src="./assests/images/tie-04.png"
                  alt="Testimonials" width="" height="">
              </picture>
            </div>
            <i class="star"></i>
          </div>
          <div class="part-col">
            <div class="img-wrap">
              <picture>
                <source type="image/webp" srcset="./assests/images/tie-05.png">
                <source type="image/png" srcset="./assests/images/tie-05.png">
                <img loading="lazy" src="./assests/images/tie-05.png"
                  alt="Testimonials" width="" height="">
              </picture>
            </div>
            <i class="star"></i>
          </div>
          <div class="part-col">
            <div class="img-wrap">
              <picture>
                <source type="image/webp" srcset="./assests/images/tie-06.png">
                <source type="image/png" srcset="./assests/images/tie-06.png">
                <img loading="lazy" src="./assests/images/tie-06.png"
                  alt="Testimonials" width="" height="">
              </picture>
            </div>
            <i class="star"></i>
          </div>
          <div class="part-col">
            <div class="img-wrap">
              <picture>
                <source type="image/webp" srcset="./assests/images/tie-07.png">
                <source type="image/png" srcset="./assests/images/tie-07.png">
                <img loading="lazy" src="./assests/images/tie-07.png"
                  alt="Testimonials" width="" height="">
              </picture>
            </div>
            <i class="star"></i>
          </div>
          <div class="part-col">
            <div class="img-wrap">
              <picture>
                <source type="image/webp" srcset="./assests/images/tie-08.png">
                <source type="image/png" srcset="./assests/images/tie-08.png">
                <img loading="lazy" src="./assests/images/tie-08.png"
                  alt="Testimonials" width="" height="">
              </picture>
            </div>
            <i class="star"></i>
          </div>
          <div class="part-col">
            <div class="img-wrap">
              <picture>
                <source type="image/webp" srcset="./assests/images/tie-09.png">
                <source type="image/png" srcset="./assests/images/tie-09.png">
                <img loading="lazy" src="./assests/images/tie-09.png"
                  alt="Testimonials" width="" height="">
              </picture>
            </div>
            <i class="star"></i>
          </div>
          <div class="part-col">
            <div class="img-wrap">
              <picture>
                <source type="image/webp" srcset="./assests/images/tie-10.png">
                <source type="image/png" srcset="./assests/images/tie-10.png">
                <img loading="lazy" src="./assests/images/tie-10.png"
                  alt="Testimonials" width="" height="">
              </picture>
            </div>
            <i class="star"></i>
          </div>
          <div class="part-col">
            <div class="img-wrap">
              <picture>
                <source type="image/webp" srcset="./assests/images/tie-11.png">
                <source type="image/png" srcset="./assests/images/tie-11.png">
                <img loading="lazy" src="./assests/images/tie-11.png"
                  alt="Testimonials" width="" height="">
              </picture>
            </div>
            <i class="star"></i>
          </div>
          <div class="part-col">
            <div class="img-wrap">
              <picture>
                <source type="image/webp" srcset="./assests/images/tie-12.png">
                <source type="image/png" srcset="./assests/images/tie-12.png">
                <img loading="lazy" src="./assests/images/tie-12.png"
                  alt="Testimonials" width="" height="">
              </picture>
            </div>
            <i class="star"></i>
          </div>
        </div>
      </div>
    </section>
    <?php require_once 'common/workstatus-journey.php';?>
    <?php require_once 'common/footer.php';?>
    <script data-cfasync="false" src="assests/js/script.js?version=<?php echo time(); ?>"></script>
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
const hiddenDivs = document.querySelectorAll('.price-options');

showDivButtons.forEach((button, index) => {
    button.addEventListener('click', () => {
    
        hiddenDivs[index].classList.toggle('is-visible');
    });
});
      
      
          
    </script>
  </body>
</html>
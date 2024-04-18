<?php
  /* 
  Template Name: Pricing - Static Template 
  Author : Nitin Baluni.
  */
  get_header();
  global $ws_ctas, $RegLink, $LogLink;
  ?>
<div id="dummytest">
  <div v-if="loading" id="pre-loader">
    Please wait, while we load the pricing plans for you.
    <span id="pricing-loading-issue" style="display:none; margin-top: 10px;"> 
    Not able to see pricing, <a href="https://www.workstatus.io/pricing-noapi">Click here</a>
    </span>
  </div>
</div>
<section class="ws-pricing">
  <div class="container">
    <div class="price-flex">
      <div class="price-column">
        <div class="price-box">
          <div class="pr-plan">
            <h3>BASIC</h3>
            <div class="card-plan">
              <span class="wph" id="pl-basic">$4</span>
              <span class="prio">/ user / month</span>
            </div>
            <div class="total">
              <div class="wph" id="pl-basic-total">$7,140</div>
              monthly total
            </div>
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
            <div class="card-plan">              
              <span class="wph" id="pl-pro">$4</span>  
              <span class="prio">/ user / month</span>
            </div>
            <div class="total">
              <div class="wph" id="pl-pro-total">$7,140</div>
              monthly total
            </div>
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
            <div class="card-plan">
              <span class="wph" id="pl-buss">$4</span>  
              <span class="prio">/ user / month</span>
            </div>
            <div class="total">
              <div class="wph" id="pl-buss-total">$10,820</div>
              monthly total
            </div>
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
              <h4>Everything in Basic +</h4>
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
                <div class="icon"><img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/images/addon-01.svg"
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
                <div class="icon"><img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/images/addon-02.svg"
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
                <div class="icon"><img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/images/addon-03.svg"
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
                <div class="icon"><img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/images/adon-04.svg"
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
                <div class="icon"><img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/images/adon-05.svg"
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
                <div class="icon"><img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/images/adon-06.svg"
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
                <div class="icon"><img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/images/addon-07.svg"
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
      <div itemscope="" itemtype="https://schema.org/FAQPage">
        <div class="column">
          <div class="faq-accordion-item-outer open" itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
            <h3 itemprop="name">Can I cancel at any time?</h3>
            <div class="faq-accordion-content">
              <div itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                <div itemprop="text">
                  <p>Yes, you can cancel and upgrade or downgrade your plan at any time.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="faq-accordion-item-outer" itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
            <h3 itemprop="name">Are there larger plans?</h3>
            <div class="faq-accordion-content">
              <div itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                <div itemprop="text">
                  <p>Yes there are. We can serve any size team. We have plans for up to 350 users.
                    If that's not big enough please contact us and we will set up a plan that is
                    right for you.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="faq-accordion-item-outer" itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
            <h3 itemprop="name">How are users counted?</h3>
            <div class="faq-accordion-content">
              <div itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                <div itemprop="text">
                  <p>Users, managers, and organization owners are considered members and count
                    toward the
                    total price of your subscription. Client viewers do not count as members.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="faq-accordion-item-outer" itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
            <h3 itemprop="name">Can I export my data?</h3>
            <div class="faq-accordion-content">
              <div itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                <div itemprop="text">
                  <p>Yes. Your data is just that, yours. We provide several export options.
                    We make it easy for you to get your data.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="faq-accordion-item-outer" itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
            <h3 itemprop="name"> Can I invite clients?</h3>
            <div class="faq-accordion-content">
              <div itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                <div itemprop="text">
                  <p>Yes, you can invite as many clients as you want, and you will not be charged
                    for them.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="faq-accordion-item-outer" itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
            <h3 itemprop="name">Do you track keystrokes?</h3>
            <div class="faq-accordion-content">
              <div itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                <div itemprop="text">
                  <p>We only assign true and false values to record activity. We do not track the
                    keys
                    being hit.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="faq-accordion-item-outer" itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
            <h3 itemprop="name">How can I contact Workstatus support?</h3>
            <div class="faq-accordion-content">
              <div itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                <div itemprop="text">
                  <p>Please email us at <a href="mailto:hello@workstatus.io">hello@workstatus.io</a> and we will get back to you as soon
                    as possible.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="faq-accordion-item-outer" itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
            <h3 itemprop="name">Can I watch a demo?</h3>
            <div class="faq-accordion-content">
              <div itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                <div itemprop="text">
                  <p class="dmo-lnk">Sure! Check out our <a href="https://www.workstatus.io/demo">demo</a> right here.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="faq-accordion-item-outer" itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
            <h3 itemprop="name">How Workstatus ensures data security?</h3>
            <div class="faq-accordion-content">
              <div itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                <div itemprop="text">
                  <p>These certifications assure clients that Workstatus has the expertise to handle their data center needs effectively and securely.</p>
                  <p>Some common data center certifications of Workstatus include:</p>
                  <ul>
                    <li>ISO 9001 Quality management</li>
                    <li>ISO 14001 Environmental management</li>
                    <li>ISO 22301 Security and resilience</li>
                    <li>ISO 27001 Information security management</li>
                    <li>ISO 50001 Energy management</li>
                    <li>SOC 2 Type II Data Security and Privacy</li>
                    <li>PCI-DSS Information security</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="faq-accordion-item-outer" itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
            <h3 itemprop="name">What are the company certifications of Workstatus?</h3>
            <div class="faq-accordion-content">
              <div itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                <div itemprop="text">
                  <p>The company certifications of Workstatus include:</p>
                  <ul>
                    <li>ISO 27001 Information security management</li>
                    <li>ISO 9001:2015 Quality Management System</li>
                  </ul>
                  <p>These certifications demonstrate our commitment to data security and delivering high-quality services to our clients.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="faq-accordion-item-outer" itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
            <h3 itemprop="name">How does Workstatus address privacy concerns?</h3>
            <div class="faq-accordion-content">
              <div itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                <div itemprop="text">
                  <p>Protecting employee privacy is one of Workstatus’ core principles. Employees have complete control over when they want to track time, and they receive notifications when time tracking starts and when Workstatus takes screenshots.</p>
                  <p>Furthermore, employees have full access to their tracked data. If there is any accidental tracking of non-work-related tasks, employees can delete the data, including screenshots, directly from their activity dashboard without requiring admin permissions.</p>
                  <p>Transparency, access, and control over personal data are fundamental values at Workstatus. To learn more about how tracking works with Workstatus, we invite you to explore our detailed documentation.</p>
                  <p><strong>Employee monitoring laws in India:</strong></p>
                  <p>In India, employee monitoring is generally allowed, but it is important to comply with applicable laws and regulations. Employers should ensure they have a clear monitoring policy in place and obtain consent from employees. Employees should have access to their collected data, and monitoring should be done for appropriate purposes.</p>
                  <p><strong>Employee monitoring laws in the Middle East:</strong></p>
                  <p>Employee monitoring laws in the Middle East can vary by country. It is important for employers to familiarize themselves with local labor laws and regulations. Generally, employers should establish clear monitoring policies, obtain employee consent, and ensure that monitoring is done for appropriate purposes. Employees should have access to their collected data.</p>
                  <p><strong>Employee monitoring laws in the United States</strong></p>
                  <p>Employee monitoring is generally legal in the United States, but it requires employee consent. The Electronic Communications Privacy Act of 1986 cover monitoring in the workplace under 18 U.S. Code § 2511:</p>
                  <p>“(iv) such use or endeavor to use (A) takes place on the premises of any business or other commercial establishment, the operations of which affect interstate or foreign commerce; or (B) obtains or is for the purpose of obtaining information relating to the operations of any business or other commercial establishment the operations of which affect interstate or foreign commerce.”</p>
                  <p>While federal laws do not require businesses to obtain permission to monitor employees, the specific regulations depend on the state in which you operate.</p>
                  <p>For example, in New York, businesses are required to provide written notice to employees upon hiring and annually stating that monitoring will take place (NY A1920A). The method of monitoring should also be clearly specified.</p>
                  <p>Workstatus does not violate any laws in this scenario or in other states with similar guidelines to New York. Only team members have control over when they track their work, and they must provide consent and grant permissions when downloading the app.</p>
                  <p>However, we advise consulting with legal counsel for any specific questions or concerns you may have.</p>
                  <p><strong>Monitoring laws in the European Union (EU)</strong></p>
                  <p>Monitoring laws in the EU are primarily governed by the General Data Protection Regulation (GDPR). Monitoring is permitted as long as employee consent is obtained and users have full access to their data. Workstatus never tracks activity without your knowledge, and you have complete control over your data. To learn more, please refer to our GDPR compliance details.</p>
                  <p><strong>Monitoring laws in Canada</strong></p>
                  <p>In Canada, businesses are allowed to record their employees’ work as long as they establish a clear monitoring policy and obtain consent. Employees have the right to refuse to monitor and should have full access to their collected data, including tracked time, screenshots, and activity reports. According to section 5(3) of the Personal Information Protection and Electronic Documents Act (PIPEDA):</p>
                  <p>“An organization may collect, use or disclose personal information only for purposes that a reasonable person would consider appropriate in the circumstances.”</p>
                  <p>Workstatus complies with all applicable laws and guidelines in this regard.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

    <?php require_once get_template_directory() .'/common/all-brands.php';?>


<?php require_once get_template_directory() . '/common/workstatus-journey.php'; ?>
</main>
</div>    
<script data-cfasync="false">
  window.addEventListener("load", function (){
    const pricingData = {
    "IN": {
    "basic":{"amount":4, "total":4, "link":"#", "insight":2, "screenshot":3, "tasks":3, "data":2, "location":4, "app":3, "cloud": 3},
    "pro":{"amount":4, "total":4, "link":"#", "insight":2, "screenshot":3, "tasks":3, "data":2, "location":4, "app":3, "cloud": 3},
    "buss":{"amount":4, "total":4, "link":"#", "insight":2, "screenshot":3, "tasks":3, "data":2, "location":4, "app":3, "cloud": 3},
    "ent":{"amount":4, "total":4, "link":"#", "insight":2, "screenshot":3, "tasks":3, "data":2, "location":4, "app":3, "cloud": 3}
    },
    "default":{
    "basic":{"amount":4, "total":4, "link":"#", "insight":2, "screenshot":3, "tasks":3, "data":2, "location":4, "app":3, "cloud": 3},
    "pro":{"amount":4, "total":4, "link":"#", "insight":2, "screenshot":3, "tasks":3, "data":2, "location":4, "app":3, "cloud": 3},
    "buss":{"amount":4, "total":4, "link":"#", "insight":2, "screenshot":3, "tasks":3, "data":2, "location":4, "app":3, "cloud": 3},
    "ent":{"amount":4, "total":4, "link":"#", "insight":2, "screenshot":3, "tasks":3, "data":2, "location":4, "app":3, "cloud": 3}
    }
    };
    var xhttp = new XMLHttpRequest();
    xhttp.open("GET", wsObj.ipinfo, true); 
    xhttp.setRequestHeader("Content-Type", "application/json");
    xhttp.onreadystatechange = function() {
        /*if (this.readyState === XMLHttpRequest.LOADING) {
          console.log("Request is in progress...");
        }else */
        if( (this.readyState == 4) && (this.status == 200) ){
          let response = JSON.parse(this.responseText);
          if( pricingData.hasOwnProperty( response.country ) ){
            let plans = pricingData[response.country];
            for (const key in plans){
                if( plans.hasOwnProperty(key) ){
                  const value = plans[key];
                  let elmPricing  = document.getElementById("pl-"+key);
                  let elmTotal    = document.getElementById("pl-"+key+"-total");
                  elmPricing.innerHTML = value.amount;
                  elmTotal.innerHTML = value.total;
                    //console.log(key);
                    //console.log(value);
                }
            }
            /*
            plans.forEach(function(idx){
              console.log(idx);
            })
            */
            console.log( pricingData[response.country] );
          }
        }
    }
    xhttp.send();
  });
  
  if( document.body.classList.contains('page-template-tpl-static-pricing') ){
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
                  document.documentElement.scrollTop + (stickytable.offsetHeight + 20) > n ? stickytable.classList.add("btomfixed") : stickytable.classList.remove("btomfixed");
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
<?php get_footer(); ?>
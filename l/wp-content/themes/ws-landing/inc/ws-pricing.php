<section id="pricing" class="plan-section padding-t-100">
  <div class="container">
    <div class="switcher-sec">
      <div class="country-select">
        <span class="chose int-only">Choose currency:</span>
        <div class="select-list int-only">
          <div id="elm-selectBtn" class="pcselectBtn">
            <img class="flgicon" id="pflag-icon" src="<?php bloginfo('template_url'); ?>/dev-images/flags/eur.svg" alt="Workstatus" width="13" height="13"><span id="pc-country">EUR (Europe)<br></span>
          </div>
          <div class="selectDropdown" style="z-index: 2;">
            <div class="pc-option" data-cod="AU" data-country="AUD (Aus &amp; NZ)">
              <img class="flgicon" src="<?php bloginfo('template_url'); ?>/dev-images/flags/au.svg" alt="Workstatus" width="13" height="13">AUD (Aus &amp; NZ)
            </div>
            <div class="pc-option" data-cod="AE" data-country="AED (United Arab Emirates)">
              <img class="flgicon" src="<?php bloginfo('template_url'); ?>/dev-images/flags/aed.svg" alt="Workstatus" width="13" height="13">AED (United Arab Emirates)
            </div>
            <div class="pc-option" data-cod="CA" data-country="CAD (Canada)">
              <img class="flgicon" src="<?php bloginfo('template_url'); ?>/dev-images/flags/cad.svg" alt="Workstatus" width="13" height="13">CAD (Canada)
            </div>
            <div class="pc-option" data-cod="EUR" data-country="EUR (Europe)">
              <img class="flgicon" src="<?php bloginfo('template_url'); ?>/dev-images/flags/eur.svg" alt="Workstatus" width="13" height="13">EUR (Europe)
            </div>
            <div class="pc-option" data-cod="GB" data-country="GBP (United Kingdom)">
              <img class="flgicon" src="<?php bloginfo('template_url'); ?>/dev-images/flags/gbp.svg" alt="Workstatus" width="13" height="13">GBP (United Kingdom)
            </div>
            <div class="pc-option" data-cod="US" data-country="USD (United States)">
              <img class="flgicon" src="<?php bloginfo('template_url'); ?>/dev-images/flags/usa.svg" alt="Workstatus" width="13" height="13">USD (United States)
            </div>
            <div class="pc-option" data-cod="LA" data-country="USD (Latin America)">
              <img class="flgicon" src="<?php bloginfo('template_url'); ?>/dev-images/flags/usa.svg" alt="Workstatus" width="13" height="13">USD (Latin America)
            </div>
            <div class="pc-option" data-cod="ZA" data-country="ZAR (African Region)">
              <img class="flgicon" src="<?php bloginfo('template_url'); ?>/dev-images/flags/zar.svg" alt="Workstatus" width="13" height="13">ZAR (African Region)
            </div>
            <div class="pc-option" data-cod="SA" data-country="SAR (Saudi Arab)">
              <img class="flgicon" src="<?php bloginfo('template_url'); ?>/dev-images/flags/sar.svg" alt="Workstatus" width="13" height="13">SAR (Saudi Arab)
            </div>
          </div>
        </div>
      </div>
      <div class="switch-btn-box">
        <span class="monthly">Monthly</span>
        <label class="switch">
        <input id="current-geo" value="IN" type="hidden">
        <input id="ps-switcher" type="checkbox">
        <span class="slider"></span>
        </label>
        <span class="annualy">Annual <span class="int-only">(20% Discount)</span><span class="int-local">(25% Discount)</span></span>
      </div>
    </div>
  </div>
</section>
<section class="ws-pricing">
  <div class="container">
  <div class="head-txt text-center">
    <h2>Enhance Workforce Efficiency & Productivity</h2>
    <p>From startups to global enterprises, our scalable plans meet your unique needs. Join the thousands of teams already boosting their productivity with us. Start your 7-day free trial today!</p>
  </div>
  <div class="price-flex margin-t-70">
    <div class="price-column">
      <div class="price-box">
        <div class="pr-plan">
          <span class="pr-icon">
            <picture>
              <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/images/wsp-01.svg"
                alt="workstatus" width="25" height="25">
            </picture>
          </span>
          <h3>7 Days Free<br> Trial</h3>
          <div class="total">1 USER MINIMUM</div>
          <p>Avail free trial & get full access to all features & streamline your team's productivity and efficiency </p>
        </div>
        <div class="card-plan">
          <span class="wph free-zero">USD 4</span>
          <span class="prio">/ user / month</span>
        </div>
        <a class="price_btn" id="ws-plan-free" href="#">Start Free Trial</a>
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
                Clients & Invoices
              </div>
              <div class="option">
                Limited app & URL tracking
              </div>
              <div class="option">
                Limited Screenshots
              </div>
              <div class="option">
                Limited Reports
              </div>
              <div class="option">
                Limited Payments
              </div>
              <!--<div class="support-options">
                <h4>Support:</h4>
                <p>Limited SLA</p>
                </div>-->
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
          <span class="pr-icon">
            <picture>
              <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/images/wsp-02.svg"
                alt="workstatus" width="29" height="29">
            </picture>
          </span>
          <h3>Productivity<br> Management</h3>
          <div class="total">2 USER MINIMUM</div>
          <p>For small teams to increase productivity & accountability with proof-of-work based worksheets.</p>
        </div>
        <div class="card-plan">
          <span class="wph" id="pl-product">USD 5.5</span>
          <span class="prio">/ user / month</span>
        </div>
        <a class="price_btn" id="ws-plan-product" href="#">Choose Plan</a>
        <div class="price-wrapper">
          <div class="price-options">
            <h4>Includes:</h4>
            <div class="option-list">
              <div class="option">Time Tracking</div>
              <div class="option">Timesheets</div>
              <div class="option">Apps &amp; Web Activity Analysis</div>
              <div class="option">Attendance &amp; Scheduling</div>
              <div class="option">Activities Analysis</div>
              <div class="option">Screenshots</div>
              <div class="option">Productivity Reports</div>
              <div class="option">Work Type Reports</div>
              <div class="option">HRIS</div>
              <div class="option">HRIS Integrations</div>
              <div class="option">Stealth mode</div>
              <div class="option">Clients Portal</div>
              <div class="option">Gamification</div>
              <div class="option m0">Free on-boarding support</div>
              <div class="support-options">
                <h4>Support:</h4>
                <p>Email / Chat / Phone / Whatsapp Support</p>
                <p><strong>SLA:</strong> 8 Business Hours</p>
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
          <span class="pr-icon">
            <picture>
              <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/images/wsp-03.svg"
                alt="workstatus" width="29" height="29">
            </picture>
          </span>
          <h3>Project<br> Management</h3>
          <div class="total">2 USER MINIMUM</div>
          <p>For growing businesses to analyze workflows, automate time tracking, and manage multiple projects.</p>
        </div>
        <div class="card-plan">
          <span class="wph" id="pl-project">USD 5.5</span>
          <span class="prio">/ user / month</span>
        </div>
        <a class="price_btn" id="ws-plan-project" href="#">Choose Plan</a>
        <div class="price-wrapper">
          <div class="price-options">
            <h4>Everything <span class="perp">in</span> Productivity +</h4>
            <div class="option-list">
              <div class="option">Project Management</div>
              <div class="option">Project &amp; Task Time Tracking</div>
              <div class="option">Budgeting</div>
              <div class="option">Invoicing</div>
              <div class="option">Project Management Integrations</div>
              <div class="option">Customer Service Integrations </div>
              <div class="option m0">Invoicing Integrations</div>
              <div class="support-options">
                <h4>Support:</h4>
                <p>Email / Chat / Phone / Whatsapp Support</p>
                <p><strong>SLA:</strong> 4 Business Hours</p>
              </div>
            </div>
          </div>
          <button class="price-accordion" type="button" aria-expanded="false">Features</button>
        </div>
      </div>
    </div>
    <div class="price-column">
      <div class="price-box">
        <div class="pr-plan">
          <span class="pr-icon">
            <picture>
              <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/images/wsp-04.svg"
                alt="workstatus" width="24" height="24">
            </picture>
          </span>
          <h3>Enterprise<br>Solution</h3>
          <div class="total">OVER 100 USERS</div>
          <p>For large organizations who need secure workforce analytics and time & productivity tracking platform.</p>
        </div>
        <div class="card-plan">
          <span class="wph" id="pl-basic">Custom</span>
          <span class="prio smtext"><strong>Billed annually.</strong> Switch the Billing cycle to Annual</span>
        </div>
        <a class="price_btn" href="#">Choose Plan</a>
        <div class="price-wrapper">
          <div class="price-options">
            <h4>Everything <span class="perp">in</span> Project +</h4>
            <div class="option-list">
              <div class="option">License Management</div>
              <div class="option">Capacity Analysis</div>
              <div class="option">Insider Threat Detection</div>
              <div class="option">Advanced Reporting</div>
              <div class="option">Data Warehouse Integrations</div>
              <div class="option">SSO</div>
              <div class="option">Audit Logs</div>
              <div class="option">Customized Onboarding &amp; Support</div>
              <div class="option">On-Premise Deployment</div>
              <div class="option">2FA</div>
              <div class="option m0">Dedicated Account Manager</div>
              <div class="support-options">
                <h4>Support:</h4>
                <p>Email / Chat / Phone / Whatsapp Support</p>
                <p><strong>SLA:</strong> 2 Business Hours</p>
              </div>
            </div>
          </div>
          <button class="price-accordion" type="button" aria-expanded="false">Features</button>
        </div>
      </div>
    </div>
  </div>
</section>
<div class="container">
  <div class="comparison-outer margin-t-100"><span class="plan-btn">View Full plan comparison</span></div>
</div>

<section class="comparison-panel padding-b-100" id="div-comparison">
  <div class="container">
    <div class="comp-table-sticky" id="comp-table-sticky">
      <table class="comp-table">
        <thead>
          <tr>
            <th></th>
            <th><span class="plan-label">Free</span>
              <a class="button" id="ws-coplan-free" href="javascript:void(0);">Choose plan</a>
            </th>
            <th><span class="plan-label">Productivity Management</span><a class="button higlit" id="ws-coplan-product" href="#">Choose plan</a></th>
            <th><span class="plan-label">Project Management</span><a class="button" id="ws-coplan-project" href="#">Choose plan</a></th>
            <th>
              <span class="plan-label">Enterprise</span>
             

              <a class="button" onclick="call_demoEnt('<h2>Get a Tailored Quote for Enterprise Solutions</h2>');" id="ws-plan-ent" href="javascript:void(0);">Request a Quote</a>

            </th>
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
            </tr>
            <tr>
              <td>Timesheets</td>
              <td><i class="chkicon"></i></td>
              <td><i class="chkicon"></i></td>
              <td><i class="chkicon"></i></td>
              <td><i class="chkicon"></i></td>
            </tr>
            <tr>
              <td>Timesheet Approvals</td>
              <td>-</td>
              <td><i class="chkicon"></i></td>
              <td><i class="chkicon"></i></td>
              <td><i class="chkicon"></i></td>
            </tr>
            <tr>
              <td>Idle Time Out</td>
              <td>-</td>
              <td><i class="chkicon"></i></td>
              <td><i class="chkicon"></i></td>
              <td><i class="chkicon"></i></td>
            </tr>
            <tr>
              <td>Custom Idle time out</td>
              <td>-</td>
              <td>-</td>
              <td><i class="chkicon"></i></td>
              <td><i class="chkicon"></i></td>
            </tr>
            <tr>
              <td>Auto discard idle time</td>
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
              <td><i class="chkicon"></i></td>
            </tr>
            <tr>
              <td>Automatic Time Tracking</td>
              <td>-</td>
              <td><i class="chkicon"></i></td>
              <td><i class="chkicon"></i></td>
              <td><i class="chkicon"></i></td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="comp-row">
        <h5>Attendance</h5>
        <table class="comp-tablerow">
          <tbody>
            <tr>
              <td>Manual Clock In/Out</td>
              <td><i class="chkicon"></i></td>
              <td><i class="chkicon"></i></td>
              <td><i class="chkicon"></i></td>
              <td><i class="chkicon"></i></td>
            </tr>
            <tr>
              <td>Automatic Clock In/Out</td>
              <td>-</td>
              <td><i class="chkicon"></i></td>
              <td><i class="chkicon"></i></td>
              <td><i class="chkicon"></i></td>
            </tr>
            <tr>
              <td>Break Time Capture</td>
              <td>-</td>
              <td><i class="chkicon"></i></td>
              <td><i class="chkicon"></i></td>
              <td><i class="chkicon"></i></td>
            </tr>
            <tr>
              <td>Manual/Offline Time Capture</td>
              <td>-</td>
              <td><i class="chkicon"></i></td>
              <td><i class="chkicon"></i></td>
              <td><i class="chkicon"></i></td>
            </tr>
            <tr>
              <td>Shift Scheduling</td>
              <td>-</td>
              <td>-</td>
              <td><i class="chkicon"></i></td>
              <td><i class="chkicon"></i></td>
            </tr>
            <tr>
              <td>Automatic Timesheets</td>
              <td>-</td>
              <td>-</td>
              <td><i class="chkicon"></i></td>
              <td><i class="chkicon"></i></td>
            </tr>
            <tr>
              <td>Absence Alerts</td>
              <td>-</td>
              <td>-</td>
              <td><i class="chkicon"></i></td>
              <td><i class="chkicon"></i></td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="comp-row">
        <h5>Productivity Monitoring</h5>
        <table class="comp-tablerow">
          <tbody>
            <tr>
              <td>Screenshots</td>
              <td>100/user/mo</td>
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
            </tr>
            <tr>
              <td>Apps & URLs tracking</td>
              <td>-</td>
              <td><i class="chkicon"></i></td>
              <td><i class="chkicon"></i></td>
              <td><i class="chkicon"></i></td>
            </tr>
            <tr>
              <td>Achievement Badges</td>
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
            </tr>
            <tr>
              <td>Scheduling & attendance</td>
              <td>-</td>
              <td>-</td>
              <td><i class="chkicon"></i></td>
              <td><i class="chkicon"></i></td>
            </tr>
            <tr>
              <td>Daily & Weekly Limits</td>
              <td>-</td>
              <td>-</td>
              <td><i class="chkicon"></i></td>
              <td><i class="chkicon"></i></td>
            </tr>
            <tr>
              <td>Time Off & Holidays</td>
              <td>-</td>
              <td><i class="chkicon"></i></td>
              <td><i class="chkicon"></i></td>
              <td><i class="chkicon"></i></td>
            </tr>
            <tr>
              <td>Overtime</td>
              <td>-</td>
              <td>-</td>
              <td><i class="chkicon"></i></td>
              <td><i class="chkicon"></i></td>
            </tr>
            <tr>
              <td>Work Breaks</td>
              <td>-</td>
              <td>-</td>
              <td><i class="chkicon"></i></td>
              <td><i class="chkicon"></i></td>
            </tr>
            <tr>
              <td>Teams</td>
              <td>-</td>
              <td>-</td>
              <td><i class="chkicon"></i></td>
              <td><i class="chkicon"></i></td>
            </tr>
            <tr>
              <td>Clients</td>
              <td>-</td>
              <td>-</td>
              <td><i class="chkicon"></i></td>
              <td><i class="chkicon"></i></td>
            </tr>
            <tr>
              <td>Client Invoices</td>
              <td>-</td>
              <td>5</td>
              <td><i class="chkicon"></i></td>
              <td><i class="chkicon"></i></td>
            </tr>
            <tr>
              <td>Team Invoices</td>
              <td>-</td>
              <td><i class="chkicon"></i></td>
              <td><i class="chkicon"></i></td>
              <td><i class="chkicon"></i></td>
            </tr>
            <tr>
              <td>Expense Tracking</td>
              <td>-</td>
              <td>-</td>
              <td><i class="chkicon"></i></td>
              <td><i class="chkicon"></i></td>
            </tr>
            <tr>
              <td>Per User Settings</td>
              <td>-</td>
              <td><i class="chkicon"></i></td>
              <td><i class="chkicon"></i></td>
              <td><i class="chkicon"></i></td>
            </tr>
            <tr>
              <td>Payments & Payroll</td>
              <td>-</td>
              <td>-</td>
              <td><i class="chkicon"></i></td>
              <td><i class="chkicon"></i></td>
            </tr>
            <tr>
              <td>Pay by bank debit (ACH)</td>
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
              <td><i class="chkicon"></i></td>
            </tr>
            <tr>
              <td>Employee Burnout</td>
              <td>-</td>
              <td><i class="chkicon"></i></td>
              <td><i class="chkicon"></i></td>
              <td><i class="chkicon"></i></td>
            </tr>
            <tr>
              <td>Habit Tracker</td>
              <td>-</td>
              <td>-</td>
              <td><i class="chkicon"></i></td>
              <td><i class="chkicon"></i></td>
            </tr>
            <tr>
              <td>User Activity Monitoring (UAM)</td>
              <td>-</td>
              <td>-</td>
              <td>-</td>
              <td><i class="chkicon"></i></td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="comp-row">
        <h5>Workforce Analytics</h5>
        <table class="comp-tablerow">
          <tbody>
            <tr>
              <td>Categorized work time *</td>
              <td>-</td>
              <td>-</td>
              <td><i class="chkicon"></i></td>
              <td><i class="chkicon"></i></td>
            </tr>
            <tr>
              <td>Smart notifications *</td>
              <td>-</td>
              <td>-</td>
              <td><i class="chkicon"></i></td>
              <td><i class="chkicon"></i></td>
            </tr>
            <tr>
              <td>Benchmarks & trends *</td>
              <td>-</td>
              <td>-</td>
              <td><i class="chkicon"></i></td>
              <td><i class="chkicon"></i></td>
            </tr>
            <tr>
              <td>Employee utilization *</td>
              <td>-</td>
              <td>-</td>
              <td><i class="chkicon"></i></td>
              <td><i class="chkicon"></i></td>
            </tr>
            <tr>
              <td>Focus time *</td>
              <td>-</td>
              <td>-</td>
              <td><i class="chkicon"></i></td>
              <td><i class="chkicon"></i></td>
            </tr>
            <tr>
              <td>Meeting time *</td>
              <td>-</td>
              <td>-</td>
              <td><i class="chkicon"></i></td>
              <td><i class="chkicon"></i></td>
            </tr>
            <tr>
              <td>Behavioral highlights *</td>
              <td>-</td>
              <td>-</td>
              <td><i class="chkicon"></i></td>
              <td><i class="chkicon"></i></td>
            </tr>
            <tr>
              <td>Suspicious activity detection *</td>
              <td>-</td>
              <td>-</td>
              <td><i class="chkicon"></i></td>
              <td><i class="chkicon"></i></td>
            </tr>
            <tr>
              <td>Work time classification *</td>
              <td>-</td>
              <td>-</td>
              <td><i class="chkicon"></i></td>
              <td><i class="chkicon"></i></td>
            </tr>
            <tr>
              <td>Team leaderboard *</td>
              <td>-</td>
              <td>-</td>
              <td><i class="chkicon"></i></td>
              <td><i class="chkicon"></i></td>
            </tr>
            <tr>
              <td>Daily timeline *</td>
              <td>-</td>
              <td>-</td>
              <td><i class="chkicon"></i></td>
              <td><i class="chkicon"></i></td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="comp-row">
        <h5>Project Management</h5>
        <table class="comp-tablerow">
          <tbody>
            <tr>
              <td>Project budgets</td>
              <td>-</td>
              <td><i class="chkicon"></i></td>
              <td><i class="chkicon"></i></td>
              <td><i class="chkicon"></i></td>
            </tr>
            <tr>
              <td>Client Budgets</td>
              <td>-</td>
              <td>-</td>
              <td><i class="chkicon"></i></td>
              <td><i class="chkicon"></i></td>
            </tr>
            <tr>
              <td>Tasks / To-dos</td>
              <td>100</td>
              <td>1,500</td>
              <td><i class="chkicon"></i></td>
              <td><i class="chkicon"></i></td>
            </tr>
            <tr>
              <td>Work orders & jobs *</td>
              <td>-</td>
              <td>-</td>
              <td><i class="chkicon"></i></td>
              <td><i class="chkicon"></i></td>
            </tr>
            <tr>
              <td>Integrations</td>
              <td>-</td>
              <td>1 integration</td>
              <td><i class="chkicon"></i></td>
              <td><i class="chkicon"></i></td>
            </tr>
            <tr>
              <td>Daily StandUp</td>
              <td>-</td>
              <td>-</td>
              <td><i class="chkicon"></i></td>
              <td><i class="chkicon"></i></td>
            </tr>
           
              <!-- <tr>
              <td>Agile WorkFlows</td>
              <td>100</td>
              <td>1,500</td>
              <td><i class="chkicon"></i></td>
              <td><i class="chkicon"></i></td>
              </tr> -->
              <tr>
              <td>Agile Sprint</td>
              <td>-</td>
              <td>-</td>
              <td></td>
              <td><i class="chkicon"></i></td>
              </tr>
              <tr>
              <td>Epics</td>
              <td>-</td>
              <td>-</td>
              <td><i class="chkicon"></i></td>
              <td><i class="chkicon"></i></td>
              </tr> 
          </tbody>
        </table>
      </div>
      <div class="comp-row">
        <h5>Reports</h5>
        <table class="comp-tablerow">
          <tbody>
            <tr>
              <td>Productivity Time</td>
              <td>-</td>
              <td><i class="chkicon"></i></td>
              <td><i class="chkicon"></i></td>
              <td><i class="chkicon"></i></td>
            </tr>
            <tr>
              <td>App <span class="perp">and</span> Website Usage</td>
              <td>-</td>
              <td><i class="chkicon"></i></td>
              <td><i class="chkicon"></i></td>
              <td><i class="chkicon"></i></td>
            </tr>
            <tr>
              <td>Location Analytics</td>
              <td>-</td>
              <td>-</td>
              <td>-</td>
              <td><i class="chkicon"></i></td>
            </tr>
            <!-- <tr>
              <td>Impact Analysis</td>
              <td><i class="chkicon"></i></td>
              <td><i class="chkicon"></i></td>
              <td><i class="chkicon"></i></td>
              <td><i class="chkicon"></i></td>
            </tr> -->
            <tr>
              <td>Hybrid Work Insights</td>
              <td>-</td>
              <td>-</td>
              <td>-</td>
              <td><i class="chkicon"></i></td>
            </tr>
            <tr>
              <td>Workload Management</td>
              <td>-</td>
              <td>-</td>
              <td>-</td>
              <td><i class="chkicon"></i></td>
            </tr>
            <tr>
              <td>Benchmark & Goals</td>
              <td>-</td>
              <td>-</td>
              <td>-</td>
              <td><i class="chkicon"></i></td>
            </tr>
            
              <tr>
                <td>Software Utilization</td>
                <td><i class="chkicon"></i></td>
                <td><i class="chkicon"></i></td>
                <td><i class="chkicon"></i></td>
                <td><i class="chkicon"></i></td>
              </tr>
              <tr>
                <td>Workforce Analytics</td>
                <td>-</td>
                <td><i class="chkicon"></i></td>
                <td><i class="chkicon"></i></td>
                <td><i class="chkicon"></i></td>
              </tr>
              <tr>
                <td>Compliance Reporting</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td><i class="chkicon"></i></td>

              </tr>
              
              <tr>
                <td>OverTime Tracker</td>
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
              <td><i class="chkicon"></i></td>
              </tr>
              <tr>
              <td>SOC-2 Type II Compliance</td>
              <td>-</td>
              <td>-</td>
              <td>-</td>
              <td><i class="chkicon"></i></td>
              </tr>
            <tr>
              <td>Single Sign-on</td>
              <td>-</td>
              <td>-</td>
              <td>-</td>
              <td><i class="chkicon"></i></td>
            </tr>
            <tr>
              <td>Two-factor Authentication</td>
              <td>-</td>
              <td>-</td>
              <td>-</td>
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
              <td>Limited</td>
              <td><i class="chkicon"></i></td>
            </tr>
            <tr>
              <td>Scheduled Reports</td>
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
              <td><i class="chkicon"></i></td>
              </tr>
            <tr>
              <td>Historical bill/pay rates *</td>
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
              <td><i class="chkicon"></i></td>
            </tr>
            <tr>
              <td>Private Cloud*</td>
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
              <td>Help Center</td>
              <td><i class="chkicon"></i></td>
              <td><i class="chkicon"></i></td>
              <td><i class="chkicon"></i></td>
              <td><i class="chkicon"></i></td>
              </tr>
            <tr>
              <td>Learning Center</td>
              <td><i class="chkicon"></i></td>
              <td><i class="chkicon"></i></td>
              <td><i class="chkicon"></i></td>
              <td><i class="chkicon"></i></td>
            </tr>
            <tr>
              <td>Chat Support</td>
              <td>-</td>
              <td>-</td>
              <td><i class="chkicon"></i></td>
              <td><i class="chkicon"></i></td>
            </tr>
            <tr>
              <td>Email Support SLA (24x5)</td>
              <td>Limited support</td>
              <td>8 Business Hours</td>
              <td>4 Business Hours</td>
              <td>2 Business Hours</td>
            </tr>
            <tr>
              <td>Assigned Account Representative</td>
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
              <td><i class="chkicon"></i></td>
              </tr> 
          </tbody>
        </table>
      </div>
    </div>
  </div>
</section>
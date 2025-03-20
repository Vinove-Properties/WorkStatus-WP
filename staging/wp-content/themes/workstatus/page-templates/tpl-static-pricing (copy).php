<?php
/* 
Template Name: Pricing - Static Template 
Author : Nitin Baluni.
*/
get_header();
global $ws_ctas, $RegLink, $LogLink;
?>
<div id="wsio-preloader" style="margin-top:100px;">
  <div class="container" id="pre-loader">Please wait, while we load the pricing plans for you.</div>
</div>
<div id="wsio-pricing" class="pricing-wrapper" style="display:none;">
  <section class="hero-banner no-af-bg">
    <div class="container">
      <div class="inner-wrap">
        <div class="left">
          <h1>Enhance Workforce Efficiency & Productivity</h1>
          <p>From startups to global enterprises, our scalable plans meet your unique needs. Join the thousands of teams already boosting their productivity with us. Start your 7-day free trial today!</p>
        </div>
        <div class="right">
          <img loading="lazy" class="int-only" src="<?php bloginfo('template_url'); ?>/dev-images/opr.svg" alt="Workstatus" width="156" height="156">
        </div>
      </div>
    </div>
  </section>
  <section id="inv-price-fltr" class="plan-section post-animation">
    <div class="container">
      <div class="switcher-sec">
        <div class="country-select">
          <span class="chose int-only">Choose currency:</span>
          <div class="select-list int-only">
            <div id="elm-selectBtn" class="pcselectBtn">
              <img class="flgicon" loading="lazy" id="pflag-icon" src="<?php bloginfo('template_url'); ?>/dev-images/flags/eur.svg" alt="Workstatus" width="13" height="13"><span id="pc-country">EUR (Europe)<br></span>
            </div>
            <div class="selectDropdown" style="z-index: 2;">
              <div class="pc-option" data-cod="AU" data-country="AUD (Aus & NZ)">
                <img class="flgicon" loading="lazy" src="<?php bloginfo('template_url'); ?>/dev-images/flags/au.svg" alt="Workstatus" width="13" height="13">AUD (Aus & NZ)
              </div>
              <div class="pc-option" data-cod="AE" data-country="AED (United Arab Emirates)">
                <img class="flgicon" loading="lazy" src="<?php bloginfo('template_url'); ?>/dev-images/flags/aed.svg" alt="Workstatus" width="13" height="13">AED (United Arab Emirates)
              </div>
              <div class="pc-option" data-cod="CA" data-country="CAD (Canada)">
                <img class="flgicon" loading="lazy" src="<?php bloginfo('template_url'); ?>/dev-images/flags/cad.svg" alt="Workstatus" width="13" height="13">CAD (Canada)
              </div>
              <div class="pc-option" data-cod="EUR" data-country="EUR (Europe)">
                <img class="flgicon" loading="lazy" src="<?php bloginfo('template_url'); ?>/dev-images/flags/eur.svg" alt="Workstatus" width="13" height="13">EUR (Europe)
              </div>
              <div class="pc-option" data-cod="GB" data-country="GBP (United Kingdom)">
                <img class="flgicon" loading="lazy" src="<?php bloginfo('template_url'); ?>/dev-images/flags/gbp.svg" alt="Workstatus" width="13" height="13">GBP (United Kingdom)
              </div>
              <!-- 
                <div class="pc-option" data-cod="IN" data-country="INR (India)">
                  <img class="flgicon" src="<?php bloginfo('template_url'); ?>/dev-images/flags/ind.svg" alt="Workstatus" width="13" height="13">INR (India)
                </div> 
                -->
              <div class="pc-option" data-cod="US" data-country="USD (United States)">
                <img loading="lazy" class="flgicon" src="<?php bloginfo('template_url'); ?>/dev-images/flags/usa.svg" alt="Workstatus" width="13" height="13">USD (United States)
              </div>
              <div class="pc-option" data-cod="LA" data-country="USD (Latin America)">
                <img loading="lazy" class="flgicon" src="<?php bloginfo('template_url'); ?>/dev-images/flags/usa.svg" alt="Workstatus" width="13" height="13">USD (Latin America)
              </div>
              <div class="pc-option" data-cod="ZA" data-country="ZAR (African Region)">
                <img loading="lazy" class="flgicon" src="<?php bloginfo('template_url'); ?>/dev-images/flags/zar.svg" alt="Workstatus" width="13" height="13">ZAR (African Region)
              </div>
              <div class="pc-option" data-cod="SA" data-country="SAR (Saudi Arab)">
                <img loading="lazy" class="flgicon" src="<?php bloginfo('template_url'); ?>/dev-images/flags/sar.svg" alt="Workstatus" width="13" height="13">SAR (Saudi Arab)
              </div>
            </div>
          </div>
        </div>
        <div class="switch-btn-box">
          <!-- <h2>How often would you like to billed?</h2> -->
          <span class="monthly">Monthly</span>
          <label class="switch">
          <input id="current-geo" value="US" type="hidden">
          <input id="ps-switcher" type="checkbox">
          <span class="slider"></span>
          </label>
          <span class="annualy">Annual <span class="int-only">(20% Discount)</span><span class="int-local">(25% Discount)</span></span>
        </div>
      </div>
    </div>
  </section>
  <section class="ws-pricing" style="padding-top:0px;">
    <div class="container">
      <div class="price-flex">
        <div class="price-column">
          <div class="price-box">
            <div class="pr-plan">
              <span class="pr-icon">
                <picture>
                  <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/images/wsp-01.svg"
                    alt="workstatus" width="29" height="29">
                </picture>
              </span>
              <h3>Productivity <br>Management</h3>
              <div class="total">2 USER MINIMUM</div>
              <p class="tt-inherit">Ideal for firms seeking to boost accountability with proof-of-work-based timesheets.</p>
            </div>
            <div class="card-plan">
              <span class="wph" id="pl-product">$4</span>
              <span class="prio monthly">/ user / month</span>
              <span class="prio annual">/ user / month / Billed Annually</span>
            </div>
            <a class="price_btn" id="ws-plan-product" href="#">Buy Now</a>
            <span class="tryit">or <a href="https://app.workstatus.io/auth/register">Try It Free</a></span>
            <div class="price-wrapper">
              <div class="price-options">
                <h4>Includes:</h4>
                <div class="option-list">
                  <div class="option">Time Tracking</div>
                  <div class="option">Timesheets</div>
                  <div class="option">Apps & Web Activity Analysis</div>
                  <div class="option">Attendance & Scheduling</div>
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
              <button class="price-accordion" type="button" aria-expanded="false">Features</button>
            </div>
          </div>
        </div>
        <div class="price-column">
          <div class="price-box">
            <div class="pr-plan">
              <span class="pr-icon">
                <picture>
                  <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/images/wsp-02.svg"
                    alt="workstatus" width="29" height="29">
                </picture>
              </span>
              <h3>Project <br>Management</h3>
              <div class="total">2 USER MINIMUM</div>
              <p class="tt-inherit">For companies looking to enhance resource management with automatic tracking, and productivity analytics.</p>
            </div>
            <div class="card-plan">              
              <span class="wph" id="pl-project">$4</span>  
              <span class="prio monthly">/ user / month</span>
              <span class="prio annual">/ user / month / Billed Annually</span>
            </div>
            <a class="price_btn" id="ws-plan-project" href="#">Buy Now</a>
            <span class="tryit">or <a href="https://app.workstatus.io/auth/register">Try It Free</a></span>
            <div class="price-wrapper">
              <div class="price-options">
                <h4>Everything <span class="perp">in</span> Productivity +</h4>
                <div class="option-list">
                  <div class="option">Project Management</div>
                  <div class="option">Project & Task Time Tracking</div>
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
                  <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/images/wsp-03.svg"
                    alt="workstatus" width="24" height="24">
                </picture>
              </span>
              <h3>Enterprise<br>Solution</h3>
              <div class="total">OVER 100 USERS</div>
              <p class="tt-inherit">For organizations that seeking complete control with customizable workforce management, scalability, and productivity enhancements.</p>
            </div>
            <div class="card-plan">
              <span class="wph" id="pl-ent-blank">Custom</span>  
              <!-- <p><strong>Billed anually</strong>. Switch the billing cycle to annual</p> -->
              <span class="prio smtext"><strong>Billed annually.</strong> Tailor-made offer</span>
            </div>
            <a class="price_btn green-btn" onclick="call_demoEnt('<h2>Get a Tailored Quote for Enterprise Solutions</h2>');" id="ws-plan-ent" href="javascript:void(0);">Request a Quote</a>
            <span class="tryit" style="opacity:0">or <a href="https://app.workstatus.io/auth/register">Try It Free</a></span>
            <div class="price-wrapper">
              <div class="price-options">
                <h4>Everything <span class="perp">in</span> Project +</h4>
                <div class="option-list">
                  <div class="option">
                  Custom Integration & Development
                  <div class="tooltipp">
                  <span class="info-box"></span>
                  <span class="tooltiptext tooltip-right">With our Custom Integration & Development Services, we extend beyond our standard API capabilities to meet your specific business needs. Whether it's a seamless integration with third-party or legacy systems for enhanced workforce automation, or the development of particular features to facilitate data import and other operational efficiencies, our dedicated team is here to tailor solutions precisely to your requirements. Opt for our expertise to ensure a smooth, hassle-free integration, or leverage our comprehensive API if you prefer to handle the integration in-house. Whatever your choice, we're here to ensure that Workstatus adapts perfectly to your business ecosystem.</span>
                  </div>

                  </div>                  
                  <div class="option">License Management</div>
                  <div class="option">Capacity Analysis</div>
                  <div class="option">Insider Threat Detection</div>
                  <div class="option">Advanced Reporting</div>
                  <div class="option">Data Warehouse Integrations</div>
                  <div class="option">SSO</div>
                  <div class="option">Audit Logs</div>
                  <div class="option">Customized Onboarding & Support</div>
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
    </div>    
  </section>
  <section class="free-price">
  <div class="container">
    <div class="fdflex">
      <div class="colLeft">
        <div class="pr-plan">
          <h3>FREE</h3>
          <div class="card-plan"><span class="free-zero">$0</span><span class="prio"> For single user only</span></div>
          <!--<div class="total"><span class="free-zero">$0</span> monthly total</div>-->
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
            <!-- <li>Clients & Invoices</li> -->
          </ul>
        </div>
        <div class="btn"><a id="ws-plan-free" href="#" class="price_btn">Choose Plan</a></div>
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
            <th><span class="plan-label">Free</span>
              <a class="button" id="ws-coplan-free" href="javascript:void(0);">Choose plan</a>
            </th>
            <th><span class="plan-label">Productivity Management</span><a class="button higlit" id="ws-coplan-product" href="#">Try For Free</a></th>
            <th><span class="plan-label">Project Management</span><a class="button" id="ws-coplan-project" href="#">Try For Free</a></th>
            <th>
              <span class="plan-label">Enterprise</span>
             

              <a class="button" onclick="call_demoEnt('<h2>Get a Tailored Quote for Enterprise Solutions</h2>');" id="ws-plan-ent-temp" href="javascript:void(0);">Request a Quote</a>

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
              <td><i class="chkicon"></i></td>
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
              <td><i class="chkicon"></i></td>
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
              <td><i class="chkicon"></i></td>
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
              <td><i class="chkicon"></i></td>
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
            <div class="icon"><img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/images/add-01.svg"
              alt="ws" width="45" height="45">
            </div>
            <div class="tcon">
              <h4>Locations</h4>
              <span class="price">Starts at <span id="pl-location">$1</span></span>
              <span class="unit">/ user / mo</span>
            </div>
          </div>
          <div class="bottomDiv">
            <ul>
              <li>Geo-fenced Jobsites</li>
              <li>Selfie Based Attendance</li>
              <li>Work Orders</li>
              <li>Jobs</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="addond-col">
        <div class="add-box">
          <div class="topDiv">
            <div class="icon"><img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/images/add-02.svg"
              alt="ws" width="45" height="45">
            </div>
            <div class="tcon">
              <h4>Field Force Tracking</h4>
              <span class="price">Starts at <span id="pl-pm">$2</span></span>
              <span class="unit">/ user / mo</span>
            </div>
          </div>
          <div class="bottomDiv">
            <ul>
              <li>Live Location tracking</li>
              <li>Route Tracking</li>
              <li>Mileage Tracking</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="addond-col">
        <div class="add-box">
          <div class="topDiv">
            <div class="icon"><img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/images/add-03.svg"
              alt="ws" width="45" height="45">
            </div>
            <div class="tcon">
              <h4>Insights</h4>
              <span class="price">Starts at <span id="pl-insights">$2</span> </span>
              <span class="unit">/ user / mo</span>
            </div>
          </div>
          <div class="bottomDiv">
            <ul>
              <li>Categorized Work Time</li>
              <li>Smart Notifications</li>
              <li>Focus & Meeting Time</li>
              <li>Suspicious Activity Detection</li>
              <li>Behavioral Highlights</li>
              <li>Work Time Classification</li>
            </ul>
            <!--<a href="<?php echo site_url('/data-retention#ans_3'); ?>">View More </a>-->
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</div>

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
              <h3 itemprop="name">Does Workstatus offer a free plan?</h3>
              <div class="faq-accordion-content">
                <div itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                  <div itemprop="text">
                    <p>Yes, Workstatus provides a complimentary plan featuring essential time and activity tracking tools, ideal for individual users exploring our service.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="faq-accordion-item-outer" itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
              <h3 itemprop="name">How can I cancel my Workstatus subscription?</h3>
              <div class="faq-accordion-content">
                <div itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                  <div itemprop="text">
                    <p>You can effortlessly cancel your subscription by either reaching out to hello@workstatus.io with a cancellation request or archiving the organization linked to your subscription, which will automatically terminate it.
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="faq-accordion-item-outer" itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
              <h3 itemprop="name">Can I redistribute or rent Workstatus products or services?</h3>
              <div class="faq-accordion-content">
                <div itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                  <div itemprop="text">
                    <p>No, redistributing, renting, or subleasing of our services and products is strictly prohibited as per our terms of service to ensure the integrity and security of our solutions.
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="faq-accordion-item-outer" itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
              <h3 itemprop="name">Does Workstatus offer any discounts or special pricing plans?</h3>
              <div class="faq-accordion-content">
                <div itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                  <div itemprop="text">
                    <p>Absolutely, we provide competitive pricing plans tailored to various team sizes and requirements, along with annual payment options to maximize the value you receive from our services.
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="faq-accordion-item-outer" itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
              <h3 itemprop="name">Is there an affiliate program available with Workstatus?</h3>
              <div class="faq-accordion-content">
                <div itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                  <div itemprop="text">
                    <p>Yes, we have a lucrative affiliate program where partners can earn a significant percentage of revenue from referrals who opt for a paid plan. Registration is quick, easy, and free. For more details, visit 
                      <a href="https://www.workstatus.io/affiliates">Workstatus Affiliates</a>.
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="faq-accordion-item-outer" itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
              <h3 itemprop="name">What is the policy on adding or removing users during an annual plan?</h3>
              <div class="faq-accordion-content">
                <div itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                  <div itemprop="text">
                    <p>Workstatus has a clear pro-ration policy for adding or removing users during an annual plan, ensuring fair billing and flexibility for your evolving team needs.
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="faq-accordion-item-outer" itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
              <h3 itemprop="name">Are there any roles available for users who only want to view reports?</h3>
              <div class="faq-accordion-content">
                <div itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                  <div itemprop="text">
                    <p>Yes, users who prefer not to track time but wish to view reports can be assigned a specific role, allowing them access to necessary information without additional costs.
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="faq-accordion-item-outer" itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
              <h3 itemprop="name">Is Workstatus compliant with data protection regulations?</h3>
              <div class="faq-accordion-content">
                <div itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                  <div itemprop="text">
                    <p>Yes, Workstatus adheres to stringent data protection laws and employs robust security measures to safeguard user data and ensure privacy.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="faq-accordion-item-outer" itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
              <h3 itemprop="name">How does Workstatus handle data security?</h3>
              <div class="faq-accordion-content">
                <div itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                  <div itemprop="text">
                    <p>We prioritize data security, utilizing advanced encryption and security protocols to protect user information and prevent unauthorized access.
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="faq-accordion-item-outer" itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
              <h3 itemprop="name">Can Workstatus integrate with other software and tools?</h3>
              <div class="faq-accordion-content">
                <div itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                  <div itemprop="text">
                    <p>Absolutely, Workstatus offers seamless integration with a variety of software and tools, enhancing productivity and workflow efficiency.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="faq-accordion-item-outer" itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
              <h3 itemprop="name">Is there customer support available for Workstatus users?</h3>
              <div class="faq-accordion-content">
                <div itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                  <div itemprop="text">
                    <p>Yes, our dedicated customer support team is available to assist you with any inquiries or issues, ensuring a smooth and hassle-free experience with Workstatus.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="faq-accordion-item-outer" itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
              <h3 itemprop="name">How can I access Workstatus on mobile devices?</h3>
              <div class="faq-accordion-content">
                <div itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                  <div itemprop="text">
                    <p>Workstatus offers a user-friendly mobile application, allowing you to manage and track time and activities conveniently from your mobile devices.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="faq-accordion-item-outer" itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
              <h3 itemprop="name">Can Workstatus handle payroll and invoicing?</h3>
              <div class="faq-accordion-content">
                <div itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                  <div itemprop="text">
                    <p>Yes, Workstatus is equipped with advanced features to manage payroll and create invoices efficiently, streamlining your financial processes.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="faq-accordion-item-outer" itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
              <h3 itemprop="name">Does Workstatus offer customizable reports?</h3>
              <div class="faq-accordion-content">
                <div itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                  <div itemprop="text">
                    <p>Absolutely, Workstatus allows you to customize reports to suit your needs, providing insights and analytics that are most relevant to your organization.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="faq-accordion-item-outer" itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
              <h3 itemprop="name">How can I give feedback or suggest new features for Workstatus?</h3>
              <div class="faq-accordion-content">
                <div itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                  <div itemprop="text">
                    <p>We welcome feedback and suggestions at feedback@workstatus.io. Your input is valuable in helping us enhance our services and cater to your needs effectively.</p>
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
<?php get_footer(); ?>
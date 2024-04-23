<?php
/* 
Template Name: Pricing - Static Template 
Author : Nitin Baluni.
*/
get_header();
global $ws_ctas, $RegLink, $LogLink;
?>
<section class="hero-banner no-af-bg">
  <div class="container">
    <div class="inner-wrap">
      <h1>Choose the plan that's right for your team</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
    </div>
  </div>
</section>
<div id="wsio-preloader">
  <div class="container" id="pre-loader">Please wait, while we load the pricing plans for you.</div>
</div>

<div id="wsio-pricing" class="pricing-wrapper" style="display:none;">
<section id="inv-price-fltr" class="plan-section post-animation">
  <div class="container">
    <div class="switcher-sec">
      <div class="country-select">
        <span class="chose">Choose currency:</span>
        <div class="select-list">
          
          <div class="pcselectBtn">
            <img class="flgicon" id="pflag-icon" src="https://www.invoicera.com/staging/wp-content/themes/invoicera/assests/images/eur.svg" alt="Workstatus" width="13" height="13"><span id="pc-country">EUR (Europe)<br></span>
          </div>

          <div class="selectDropdown" style="z-index: 2;">
            <div class="pc-option" data-cod="AU" data-country="AUD (Aus & NZ)">
              <img class="flgicon" src="<?php bloginfo('template_url'); ?>/dev-images/flags/au.svg" alt="Workstatus" width="13" height="13">AUD (Aus & NZ)
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
            <div class="pc-option" data-cod="IN" data-country="INR (India)">
              <img class="flgicon" src="<?php bloginfo('template_url'); ?>/dev-images/flags/ind.svg" alt="Workstatus" width="13" height="13">INR (India)
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
        <!-- <h2>How often would you like to billed?</h2> -->
        <span class="monthly">Monthly</span>
        <label class="switch">
          <input id="current-geo" value="US" type="hidden">
          <input id="ps-switcher" type="checkbox">
          <span class="slider"></span>
        </label>
        <span class="annualy">Annual (2 Months Free)</span>
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
          <a class="price_btn" id="ws-plan-basic" href="#">Choose Plan</a>
          <div class="price-wrapper">
            <div class="price-options">
              <h4>Includes:</h4>
              <div class="option-list">
                <div class="option">Time Tracking</div>
                <div class="option">Timesheets</div>
                <div class="option">Activity Levels</div>
                <div class="option">Limited screenshots</div>
                <div class="option">Limited app & URL tracking</div>
                <div class="option">Limited reports</div>
                <div class="option">Productivity Analysis</div>
                <div class="option">HRIS Integrations</div>
                <div class="option">User Management</div>
                <div class="option">Online Support</div>
                <div class="option">Attendance</div>
                <div class="option">Idle timeout</div>
                <div class="option">Limited payments <span class="cs">Coming Soon</span></div>
                <div class="option">Clients & Invoices <span class="cs">Coming Soon</span></div>
                <div class="option">2FA <span class="cs">Coming Soon</span></div>                

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
          <a class="price_btn" id="ws-plan-pro" href="#">Choose Plan</a>
          <div class="price-wrapper">
            <div class="price-options">
              <h4>Everything in Basic +</h4>
              <div class="option-list">
                <div class="option">Project Management</div>
                <div class="option">Reports</div>
                <div class="option">2 integration</div>
                <div class="option">Idle timeout</div>                
                <div class="option">Work breaks</div>
                <div class="option">Project budgets <span class="cs">Coming Soon</span></div>
                <div class="option">Expenses <span class="cs">Coming Soon</span></div>
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
          <a class="price_btn" id="ws-plan-buss" href="#">Choose Plan</a>
          <div class="price-wrapper">
            <div class="price-options">
              <h4>Everything in Professional +</h4>
              <div class="option-list">                 
                <div class="option">Project Management</div>
                <div class="option">Unlimited screenshots</div>
                <div class="option">Unlimited app & URL tracking</div>
                <div class="option">Auto discard idle time</div>
                <div class="option">Teams</div>
                <div class="option">Unlimited integrations</div>
                <div class="option">Time off & holidays</div>
                <div class="option">Scheduling & attendance</div>
                <div class="option">Timesheet approvals</div>
                <div class="option">Insights <span class="cs">Coming Soon</span></div>
                <div class="option">Payments & payroll <span class="cs">Coming Soon</span></div>
                <div class="option">Overtime <span class="cs">Coming Soon</span></div> 
                <div class="option">Client budgets <span class="cs">Coming Soon</span></div>
                <div class="option">Daily & weekly limits <span class="cs">Coming Soon</span></div> 
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
            <div class="card-plan">
            <span class="wph" id="pl-ent">$4</span>  
            <span class="prio">/ user / month</span>
            </div>
            <div class="b-anu"><strong>Billed annually.</strong> Switch the Billing cycle to Annual to view Enterprise.</div>
          </div>
          <a class="price_btn" id="ws-plan-ent" href="#">Let’s Talk</a>
          <div class="price-wrapper">
            <div class="price-options">
              <h4>Everything in Basic +</h4>
              <div class="option-list">                
                <div class="option">Projey Management</div>
                <div class="option">Private Cloud</div> 
                <div class="option">Enterprise deployments</div>
                <div class="option">Account provisioning</div>
                <div class="option">Locations <span class="cs">Coming Soon</span></div> 
                <div class="option">Insights <span class="cs">Coming Soon</span></div> 
                <div class="option">Corporate App <span class="cs">Coming Soon</span></div>
                <div class="option">HIPAA compliance <span class="cs">Coming Soon</span></div> 
                <div class="option">SOC-2 Type II Compliance <span class="cs">Coming Soon</span></div> 
                <div class="option">Single sign-on <span class="cs">Coming Soon</span></div>
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
              <div class="card-plan"><span class="free-zero">$0</span><span class="prio">For single user only</span></div>
              <div class="total"><span class="free-zero">$0</span> monthly total</div>
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
                <th><span class="plan-label">BASIC</span><a class="button" id="ws-coplan-basic" href="#">Choose plan</a></th>
                <th><span class="plan-label">PROFESSIONAL</span><a class="button" id="ws-coplan-pro" href="#">Choose plan</a></th>
                <th><span class="plan-label">BUSINESS</span><a class="button" id="ws-coplan-buss" href="#">Choose plan</a></th>
                <th><span class="plan-label">ENTERPRISE</span><a class="button" id="ws-coplan-ent" href="#">Choose plan</a></th>
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
                <tr>
                  <td>Automatic Time Tracking</td>
                  <td>-</td>
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
                  <td><i class="chkicon"></i></td>
                </tr>
                <tr>
                  <td>Automatic Clock In/Out</td>
                  <td><i class="chkicon"></i></td>
                  <td><i class="chkicon"></i></td>
                  <td><i class="chkicon"></i></td>
                  <td><i class="chkicon"></i></td>
                  <td><i class="chkicon"></i></td>
                </tr>
                <tr>
                  <td>Break Time Capture</td>
                  <td><i class="chkicon"></i></td>
                  <td><i class="chkicon"></i></td>
                  <td><i class="chkicon"></i></td>
                  <td><i class="chkicon"></i></td>
                  <td><i class="chkicon"></i></td>
                </tr>
                <tr>
                  <td>Manual/Offline Time Capture</td>
                  <td><i class="chkicon"></i></td>
                  <td><i class="chkicon"></i></td>
                  <td><i class="chkicon"></i></td>
                  <td><i class="chkicon"></i></td>
                  <td><i class="chkicon"></i></td>
                </tr>
                <tr>
                  <td>Shift Scheduling</td>
                  <td><i class="chkicon"></i></td>
                  <td><i class="chkicon"></i></td>
                  <td><i class="chkicon"></i></td>
                  <td><i class="chkicon"></i></td>
                  <td><i class="chkicon"></i></td>
                </tr>
                <tr>
                  <td>Automatic Timesheets</td>
                  <td><i class="chkicon"></i></td>
                  <td><i class="chkicon"></i></td>
                  <td><i class="chkicon"></i></td>
                  <td><i class="chkicon"></i></td>
                  <td><i class="chkicon"></i></td>
                </tr>
                <tr>
                  <td>Absence Alerts</td>
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
                <!-- 
                <tr>
                  <td>Overtime</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td><i class="chkicon"></i></td>
                  <td><i class="chkicon"></i></td>
                </tr> 
                -->
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
                <!-- 
                <tr>
                  <td>Scheduling & attendance</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td><i class="chkicon"></i></td>
                  <td><i class="chkicon"></i></td>
                </tr> 
                -->
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
                  <td>5</td>
                  <td><i class="chkicon"></i></td>
                  <td><i class="chkicon"></i></td>
                  <td><i class="chkicon"></i></td>
                </tr>
                <tr>
                  <td>Client invoices</td>
                  <td>-</td>
                  <td><i class="chkicon"></i></td>
                  <td><i class="chkicon"></i></td>
                  <td><i class="chkicon"></i></td>
                  <td><i class="chkicon"></i></td>
                </tr>
                <tr>
                  <td>Team invoices</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
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
                  <td><i class="chkicon"></i></td>
                  <td><i class="chkicon"></i></td>
                  <td><i class="chkicon"></i></td>
                  <td><i class="chkicon"></i></td>
                </tr>
                <tr>
                  <td>Payments & payroll</td>
                  <td>Limited</td>
                  <td>Limited</td>
                  <td>Limited</td>
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

                <tr>
                  <td>Employee Burnout</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td><i class="chkicon"></i></td>
                  <td><i class="chkicon"></i></td>
                </tr>
                <tr>
                  <td>Habit Tracker</td>
                  <td>-</td>
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
                  <td><i class="chkicon"></i></td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="comp-row">
            <h5>Workforce analytics</h5>
            <table class="comp-tablerow">
              <tbody>
              <tr>
                <td>Categorized work time *</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td><i class="chkicon"></i></td>
                <td><i class="chkicon"></i></td>
              </tr>
              <tr>
                <td>Smart notifications *</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td><i class="chkicon"></i></td>
                <td><i class="chkicon"></i></td>
              </tr>  
              <tr>
                <td>Benchmarks & trends *</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td><i class="chkicon"></i></td>
                <td><i class="chkicon"></i></td>
              </tr>
              <tr>
                <td>Employee utilization *</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td><i class="chkicon"></i></td>
                <td><i class="chkicon"></i></td>
              </tr>
              <tr>
                <td>Focus time *</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td><i class="chkicon"></i></td>
                <td><i class="chkicon"></i></td>
              </tr>
              <tr>
                <td>Meeting time *</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td><i class="chkicon"></i></td>
                <td><i class="chkicon"></i></td>
              </tr>
              <tr>
                <td>Behavioral highlights *</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td><i class="chkicon"></i></td>
                <td><i class="chkicon"></i></td>
              </tr>
              <tr>
                <td>Suspicious activity detection *</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td><i class="chkicon"></i></td>
                <td><i class="chkicon"></i></td>
              </tr>
              <tr>
                <td>Work time classification *</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td><i class="chkicon"></i></td>
                <td><i class="chkicon"></i></td>
              </tr>
              <tr>
                <td>Team leaderboard *</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td><i class="chkicon"></i></td>
                <td><i class="chkicon"></i></td>
              </tr>
              <tr>
                <td>Daily timeline *</td>
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
            <h5>Project management</h5>
            <table class="comp-tablerow">
              <tbody>
              <tr>
                <td>Project budgets</td>
                <td>-</td>
                <td>-</td>
                <td><i class="chkicon"></i></td>
                <td><i class="chkicon"></i></td>
                <td><i class="chkicon"></i></td>
              </tr>

              <tr>
                <td>Client budgets</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td><i class="chkicon"></i></td>
                <td><i class="chkicon"></i></td>
              </tr>  
              <tr>
                <td>Tasks / To-dos</td>
                <td>-</td>
                <td>500</td>
                <td>1,500</td>
                <td><i class="chkicon"></i></td>
                <td><i class="chkicon"></i></td>
              </tr>  
              <tr>
                <td>Time on Projects & Tasks</td>
                <td>-</td>
                <td>-</td>
                <td><i class="chkicon"></i></td>
                <td><i class="chkicon"></i></td>
                <td><i class="chkicon"></i></td>
              </tr>  
              <tr>
                <td>Work orders & jobs *</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td><i class="chkicon"></i></td>
              </tr>  
              <tr>
                <td>Integrations</td>
                <td>-</td>
                <td>-</td>
                <td>1</td>
                <td><i class="chkicon"></i></td>
                <td><i class="chkicon"></i></td>
              </tr>  
              <tr>
                <td>Daily StandUp</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td><i class="chkicon"></i></td>
                <td><i class="chkicon"></i></td>
              </tr>  
              <tr>
                <td>Agile WorkFlows</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td><i class="chkicon"></i></td>
                <td><i class="chkicon"></i></td>
              </tr>
              <tr>
                <td>Agile Sprint</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td><i class="chkicon"></i></td>
                <td><i class="chkicon"></i></td>
              </tr>
              <tr>
                <td>Epics</td>
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
            <h5>Reports</h5>
            <table class="comp-tablerow">
              <tbody>
                <tr>
                  <td>Productivity Time</td>
                  <td><i class="chkicon"></i></td>
                  <td><i class="chkicon"></i></td>
                  <td><i class="chkicon"></i></td>
                  <td><i class="chkicon"></i></td>
                  <td><i class="chkicon"></i></td>
                </tr>
                <tr>
                  <td>App and Website Usage</td>
                  <td><i class="chkicon"></i></td>
                  <td><i class="chkicon"></i></td>
                  <td><i class="chkicon"></i></td>
                  <td><i class="chkicon"></i></td>
                  <td><i class="chkicon"></i></td>
                </tr>
                <tr>
                  <td>Location Analytics</td>
                  <td><i class="chkicon"></i></td>
                  <td><i class="chkicon"></i></td>
                  <td><i class="chkicon"></i></td>
                  <td><i class="chkicon"></i></td>
                  <td><i class="chkicon"></i></td>
                </tr>
                <tr>
                  <td>Impact Analysis</td>
                  <td><i class="chkicon"></i></td>
                  <td><i class="chkicon"></i></td>
                  <td><i class="chkicon"></i></td>
                  <td><i class="chkicon"></i></td>
                  <td><i class="chkicon"></i></td>
                </tr>
                <tr>
                  <td>Hybrid Work Insights</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td><i class="chkicon"></i></td>
                  <td><i class="chkicon"></i></td>
                </tr>
                <tr>
                  <td>Workload Management / Capacity Analysis</td>
                  <td>-</td>
                  <td>-</td>
                  <td><i class="chkicon"></i></td>
                  <td><i class="chkicon"></i></td>
                  <td><i class="chkicon"></i></td>
                </tr>

                <tr>
                  <td>Benchmark & Goals</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td><i class="chkicon"></i></td>
                  <td><i class="chkicon"></i></td>
                </tr>
                <tr>
                  <td>Software Utilization</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td><i class="chkicon"></i></td>
                  <td><i class="chkicon"></i></td>
                </tr>
                <tr>
                  <td>Workforce Analytics</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td><i class="chkicon"></i></td>
                  <td><i class="chkicon"></i></td>
                </tr>
                <tr>
                  <td>Compliance Reporting</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td><i class="chkicon"></i></td>
                  <td><i class="chkicon"></i></td>
                </tr>
                <tr>
                  <td>OverTime Tracker</td>
                  <td>-</td>
                  <td>-</td>
                  <td><i class="chkicon"></i></td>
                  <td><i class="chkicon"></i></td>
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
                  <span class="price">Starts at <span id="pl-insight">$2</span></span>
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
                  <span class="price">Starts at <span id="pl-screenshot">$2</span></span>
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
                  <h4>Project management</h4>
                  <span class="price">Starts at <span id="pl-task">$2</span></span>
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
                  <span class="price">Starts at <span id="pl-data">$2</span> </span>
                  <span class="unit">/ user / mo</span>
                </div>
              </div>
              <div class="bottomDiv">

                  <ul>
                    <li>Data retention extended to 6 years for:</li>
                    <li>Time & activity data</li>
                    <li>Calendar & limits</li>
                    <li>Finances</li>
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
                  <span class="price">Starts at <span id="pl-location">$2</span></span>
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
                  <h4>Corporate app (Stealth Mode)</h4>
                  <span class="price">Starts at <span id="pl-corapp">$2</span></span>
                  <span class="unit">/ user / mo</span>
                </div>
              </div>
              <div class="bottomDiv">
                <ul>
                  <li>Track time and activity in the background on company-owned devices</li>
                  <li>Add new members through account provisioning and manage email notifications</li>
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
                  <span class="price">Starts at <span id="pl-cloud">$2</span></span>
                  <span class="unit">/ user / mo</span>
                </div>
              </div>
              <div class="bottomDiv">
                <ul>
                  <li>Host the sensitive employee data e.g. screenshots in your private cloud (supported AWS or S3 compliant data storage)</li>
                  
                </ul>
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
                  <p>You can effortlessly cancel your subscription by either:\na. Reaching out to hello@workstatus.io with a cancellation request.\nb. Archiving the organization linked to your subscription, which will automatically terminate it.
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
                  <p>Yes, we have a lucrative affiliate program where partners can earn a significant percentage of revenue from referrals who opt for a paid plan. Registration is quick, easy, and free. For more details, visit [Workstatus Affiliates](https://www.workstatus.io/affiliates).
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
</main>
</div>
<?php get_footer(); ?>
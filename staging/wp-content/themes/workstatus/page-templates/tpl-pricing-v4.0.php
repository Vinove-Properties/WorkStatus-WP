<?php
/* 
Template Name: Pricing - Template V4.0
Author : Nitin Baluni.
*/
get_header();
$prPlans    = ['productivity','project','time','attendance'];
$activePlan = ( isset($_GET['plan']) && !empty($_GET['plan']) ) ? $_GET['plan'] : 'productivity';
if( !in_array($activePlan, $prPlans) ){
$activePlan =  'productivity';
}
?>
<div id="wsio-preloader" style="margin-top:100px; min-height: 800px;">
  <div class="container" id="pre-loader">Please wait, while we load the pricing plans for you.</div>
</div>
<div id="wsio-pricing" class="pricing-wrapper" style="display:none;">
  <section class="hero-banner no-af-bg post-animation">
    <div class="container">
      <div class="inner-wrap">
        <div class="left">
          <h1>Simple, Flexible Pricing for Every Business</h1>
          <p><span class="no-hidden">No hidden fees</span>—just simple, affordable pricing for teams of all sizes.</p>
          <p> Can't find what you are looking for?  <span class="conbtn" onclick="getCalendlyiFrame();"><span>Setup a consulting call</span></span></p>
        </div>
      </div>
    </div>
  </section>
  <section class="ws-pricing">
      <div class="container">
      <nav id="pricing-Tabs" class="tab-nav">
        <ul>
          <li class="<?php echo ($activePlan == "productivity") ? 'active' : ''; ?>" 
          data-tab="#tab01">
            <a data-plan="wsp-productivity" href="#tab01">Productivity Management</a>
          </li>
          <li class="<?php echo ($activePlan == "project") ? 'active' : ''; ?>" data-tab="#tab02">
            <a data-plan="wsp-project" href="#tab02">Project Management</a>
          </li>
          <li class="<?php echo ($activePlan == "time") ? 'active' : ''; ?>" data-tab="#tab03">
            <a data-plan="wsp-time" href="#tab03">Time Tracking</a>
          </li>
          <li class="<?php echo ($activePlan == "attendance") ? 'active' : ''; ?>" data-tab="#tab04">
            <a data-plan="wsp-attendance" href="#tab04">Attendance Management</a>
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
                <img class="flgicon" loading="lazy" id="pflag-icon" src="<?php bloginfo('template_url'); ?>/dev-images/flags/eur.svg" alt="Workstatus" width="13" height="13"><span id="pc-country">EUR (Europe)<br></span>
              </div>
              <div class="selectDropdown" style="z-index: 2;">
                <div class="pc-option" data-cod="AU" data-country="AUD (Aus &amp; NZ)">
                  <img class="flgicon" loading="lazy" src="<?php bloginfo('template_url'); ?>/dev-images/flags/au.svg" alt="Workstatus" width="13" height="13">AUD (Aus &amp; NZ)
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
                <div class="pc-option" data-cod="US" data-country="USD (United States)">
                  <img loading="lazy" class="flgicon" src="<?php bloginfo('template_url'); ?>/dev-images/flags/usa.svg" alt="Workstatus" width="13" height="13">USD (United States)
                </div>
                <div class="pc-option" data-cod="LA" data-country="USD (Latin America)">
                  <img loading="lazy" class="flgicon" src="<?php bloginfo('template_url'); ?>/dev-images/flags/usa.svg" alt="Workstatus" width="13" height="13">USD (Latin America)
                </div>
                <div class="pc-option" data-cod="ZA" data-country="ZAR (African Region)">
                  <img loading="lazy" class="flgicon" src="<?php bloginfo('template_url'); ?>/dev-images/flags/zar.svg" alt="Workstatus" width="13" height="13">ZAR (African Region)
                </div>
                <div class="pc-option" data-cod="SA" data-country="SAR (Saudi Arabia)">
                  <img loading="lazy" class="flgicon" src="<?php bloginfo('template_url'); ?>/dev-images/flags/sar.svg" alt="Workstatus" width="13" height="13">SAR (Saudi Arabia)
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="price-contents">
        <div id="tab01" class="tab-contents <?php echo ($activePlan == "productivity") ? 'active' : ''; ?>">
          <div class="price-flex">
            <div class="price-column flex-3">
              <div class="price-box">
                <div class="pr-plan">
                  <h3>Productivity Management</h3>
                  <div class="total">2 USER MINIMUM</div>
                  <p>Maximize team output with time tracking, app usage analysis & productivity reports.</p>
                </div>
                <div class="card-plan">
                  <span class="wph" id="pl-productivity-basic"></span>
                  <span class="prio">/ user / month</span>
                </div>
                <a class="price_btn" id="cta-productivity-basic" href="#">Buy Now</a>
                <span class="tryit">or <a data-href="https://app.workstatus.io/auth/register/?pid=42&type=monthly" href="javascript:void(0);" onclick="return get_ws_signupform(this);">Try It Free</a></span>
                <div class="price-wrapper">
                  <div class="price-options">
                    <h4>Includes:</h4>
                    <div class="option-list">
                      <div class="option">Time Tracking</div>
                      <div class="option">Timesheets</div>
                      <div class="option">Unlimited screenshots</div>
                      <div class="option">Activity Levels</div>
                      <div class="option">Auto discard idle time</div>
                      <div class="option">Teams</div>
                      <div class="option">Time off & holidays</div>
                      <div class="option">Scheduling & attendance</div>   
                      <div class="option">Timesheet approvals</div>  
                      <div class="option">Daily & weekly limits</div>    
                      <div class="option">Reports</div>  
                      <div class="option">Quiet (Stealth) Mode</div>  
                      <div class="option">Client Portal</div>   
                      <div class="option">Gamification</div>      
                      <div class="option">HRIS Integrations</div>  
                      <div class="option">Free on-boarding support</div>                        
                      <div class="support-options">
                        <h4>Support:</h4>
                        <p>Email / Chat / Phone / Whatsapp Support</p>
                        <p>SLA: 8 Business Hours</p>
                      </div>
                    </div>
                  </div>
                  <button onclick="togglePrice()"  class="price-accordion" type="button" aria-expanded="false">Features</button>
                </div>
              </div>
            </div>
            <div class="price-column flex-3">
              <div class="price-box">
                <div class="pr-plan">
                  <h3>Productivity + Project <br>Management</h3>
                  <div class="total">2 USER MINIMUM</div>
                  <p>Stay on top of projects with seamless time tracking, task management, and budgeting.
                  </p>
                </div>
                <div class="card-plan">
                  <span class="wph" id="pl-productivity-pro"></span>
                  <span class="prio">/ user / month</span>
                </div>
                <a class="price_btn" id="cta-productivity-pro" href="#">Buy Now</a>
                <span class="tryit">or <a data-href="https://app.workstatus.io/auth/register/?pid=42&type=monthly" href="javascript:void(0);" onclick="return get_ws_signupform(this);">Try It Free</a></span>
                <div class="price-wrapper">
                  <div class="price-options">
                    <h4>Everything <span class="perp">in</span> Productivity  +</h4>
                    <div class="option-list">
                      <div class="option">Project Management (Limited Projects)</div>
                      <div class="option">Project & Task Time Tracking</div>
                      <div class="option">Milestones</div>
                      <div class="option">Budgeting</div>
                      <div class="option">Invoicing</div>
                      <div class="option">Gantt Charts</div>
                      <div class="option">Kanban</div>
                      <div class="option">Project Management Integrations</div>
                      <div class="option">Customer Service Integrations</div>
                      <div class="option">Invoicing Integrations</div>
                      <div class="option">1:1 on boarding tour with our team</div>
                      <div class="option"><strong>PLUS</strong> First in-line 24x5 priority support</div>
                      <div class="support-options">
                        <h4>Support:</h4>
                        <p>Email / Chat / Phone / Whatsapp Support</p>
                        <p>SLA: 4 Business Hours</p> 
                      </div>
                    </div>
                  </div>
                  <button onclick="togglePrice()"  class="price-accordion" type="button" aria-expanded="false">Features</button>
                </div>
              </div>
            </div>
            <div class="price-column flex-3">
              <div class="price-box">
                <div class="pr-plan">
                  <h3>Enterprise Solution</h3>
                  <div class="total">100 USERS Minimum</div>
                  <p>Customize workforce solutions with advanced integrations, reporting & dedicated support.
                  </p>
                </div>     
                <div class="card-plan">
                  <span class="wph" id="pl-basic">Custom</span>
                  <span class="prio smtext">Tailor-made offer</span>
                </div>
                <a class="price_btn green-btn" onclick="call_demoEnt('<h2>Get a Tailored Quote for Enterprise Solutions</h2>');" id="ws-plan-ent" href="javascript:void(0);">Request a Quote</a>
                <span class="tryit op0">or <a data-href="https://app.workstatus.io/auth/register/?pid=42&type=monthly" href="javascript:void(0);" onclick="return get_ws_signupform(this);">Try It Free</a></span>
                <div class="price-wrapper">
                  <div class="price-options">
                    <h4>Everything <span class="perp">in</span> Project  +</h4>
                    <div class="option-list">
                      <div class="option">
                        Custom Integration & Development
                        <div class="tooltipp">
                          <span class="info-box"></span>
                          <span class="tooltiptext tooltip-right">With our Custom Integration &amp; Development Services, we extend beyond our standard API capabilities to meet your specific business needs. Whether it's a seamless integration with third-party or legacy systems for enhanced workforce automation, or the development of particular features to facilitate data import and other operational efficiencies, our dedicated team is here to tailor solutions precisely to your requirements. Opt for our expertise to ensure a smooth, hassle-free integration, or leverage our comprehensive API if you prefer to handle the integration in-house. Whatever your choice, we're here to ensure that Workstatus adapts perfectly to your business ecosystem.</span>
                        </div>
                      </div>
                      <div class="option">License Management</div>
                      <div class="option">Capacity Analysis</div>
                      <div class="option">Insider Threat Detection</div>
                      <div class="option">Advanced Reporting</div>
                      <div class="option">Data Warehouse Integrations</div>
                      <div class="option">Limited payments</div>
                      <div class="option">SSO</div>   
                      <div class="option">Audit Logs</div>  
                      <div class="option">Customized Onboarding & Support</div>  
                      <div class="option">On-Premise Deployment</div>  
                      <div class="option">2FA</div> 
                       <div class="option">Dedicated Account Manager</div>                    
                      <div class="support-options">
                        <h4>Support:</h4>
                        <p>Email / Chat / Phone / Whatsapp Support</p>
                        <p>SLA: 2 Business Hours</p>
                      </div>
                    </div>
                  </div>
                  <button onclick="togglePrice()"  class="price-accordion" type="button" aria-expanded="false">Features</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="tab02" class="tab-contents <?php echo ($activePlan == "project") ? 'active' : ''; ?>">
          <div class="price-flex">
            <div class="price-column flex-3">
              <div class="price-box">
                <div class="pr-plan">
                  <h3>Project Management</h3>
                  <div class="total">2 USER MINIMUM</div>
                  <p>Ideal for small teams, pay only for the users you need and scale effortlessly.</p>
                </div>
                <div class="card-plan">
                  <span class="wph" id="pl-project-basic"></span>
                  <span class="prio">/ user / month</span>
                </div>
                <a class="price_btn" id="cta-project-basic" href="#">Buy Now</a>
                <span class="tryit">or <a data-href="https://app.workstatus.io/auth/register/?pid=42&type=monthly" href="javascript:void(0);" onclick="return get_ws_signupform(this);">Try It Free</a></span>
              </div>
            </div>
            <div class="price-column flex-2">
              <div class="price-box">
                <div class="pr-plan">
                  <h3><span class="op0">Pro Unlimited</span>Pro Unlimited</h3>
                  <div class="total">unlimited Users & Projects</div>
                  <p>Manage unlimited users and projects with no restrictions, perfect for small to mid-sized enterprises.
                  </p>
                </div>
                <div class="card-plan">
                  <span class="wph" id="pl-project-pro">USD 5.5</span>
                  <span class="prio">/ month</span>
                </div>
                <a class="price_btn" id="cta-project-pro" href="#">Buy Now</a>
                <span class="tryit">or <a data-href="https://app.workstatus.io/auth/register/?pid=42&type=monthly" href="javascript:void(0);" onclick="return get_ws_signupform(this);">Try It Free</a></span>
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
              <li>First-in-line 24x5 priority support</li>
            </ul>
          </div>
        </div>
        <div id="tab03" class="tab-contents <?php echo ($activePlan == "time") ? 'active' : ''; ?>">
          <div class="price-flex">
            <div class="price-column flex-3">
              <div class="price-box">
                <div class="pr-plan ini-height">
                  <h3>Time Tracking</h3>
                  <div class="total">2 USER MINIMUM</div>
                  <p>Track time per user, perfect for small teams with flexible scaling.</p>
                </div>
                <div class="card-plan">
                  <span class="wph" id="pl-time-basic"></span>
                  <span class="prio">/ user / month</span>
                </div>
                <a class="price_btn" id="cta-time-basic" href="#">Buy Now</a>
                <span class="tryit">or <a data-href="https://app.workstatus.io/auth/register/?pid=42&type=monthly" href="javascript:void(0);" onclick="return get_ws_signupform(this);">Try It Free</a></span>
              </div>
            </div>
            <div class="price-column flex-2">
              <div class="price-box">
                <div class="pr-plan ini-height">
                  <h3><span class="op0">Pro Unlimited</span>Pro Unlimited<br></h3>
                  <div class="total">Unlimited Users</div>
                  <p>Unlimited time tracking for all teams, suitable for businesses of any size.
                  </p>
                </div>
                <div class="card-plan">
                  <span class="wph" id="pl-time-pro"></span>
                  <span class="prio">/ month</span>
                </div>
                <a class="price_btn" id="cta-time-pro" href="#">Buy Now</a>
                <span class="tryit">or <a data-href="https://app.workstatus.io/auth/register/?pid=42&type=monthly" href="javascript:void(0);" onclick="return get_ws_signupform(this);">Try It Free</a></span>
              </div>
            </div>
          </div>
          <div class="plan-include">
            <h3>Included in Every Plan:</h3>
            <ul>
              <li>Unlimited tracking</li>
              <li>Breaks</li>
              <li>Time tracker</li>
              <li>Web Tracker App</li>
              <li>Timesheet</li>
              <li>Mobile & desktop App</li>
              <li>Auto tracker</li>
              <li>Idle detection & reminders</li>
              <li>Manual Timesheet</li>
              <li>Reports</li>
              <li>Bulk Timesheet</li>
              <li>Export & share data</li>
              <li>Team activity</li>
              <li>1:1 onboarding tour with our team</li>
              <li>Timesheet Approval</li>
              <li><strong>PLUS</strong> First-in-line 24x5 priority support</li>
            </ul>
          </div>
        </div>
        <div id="tab04" class="tab-contents <?php echo ($activePlan == "attendance") ? 'active' : ''; ?>">
          <div class="price-flex">
            <div class="price-column flex-3">
              <div class="price-box">
                <div class="pr-plan ini-height">
                  <h3>Attendance Management</h3>
                  <div class="total">2 USER MINIMUM</div>
                  <p>Track attendance on a per-user basis, perfect for small teams with scalability.</p>
                </div>
                <div class="card-plan">
                  <span class="wph" id="pl-attendance-basic"></span>
                  <span class="prio">/ user / month</span>
                </div>
                <a class="price_btn" id="cta-attendance-basic" href="#">Buy Now</a>
                <span class="tryit">or <a data-href="https://app.workstatus.io/auth/register/?pid=42&type=monthly" href="javascript:void(0);" onclick="return get_ws_signupform(this);">Try It Free</a></span>
              </div>
            </div>
            <div class="price-column flex-2">
              <div class="price-box">
                <div class="pr-plan ini-height">
                  <h3><span class="op0">Pro Unlimited</span>Pro Unlimited</h3>
                  <div class="total">Unlimited users</div>
                  <p>Unlimited attendance tracking for all employees, perfect for businesses of any size.
                  </p>
                </div>
                <div class="card-plan">
                  <span class="wph" id="pl-attendance-pro"></span>
                  <span class="prio">/ month</span>
                </div>
                <a class="price_btn" id="cta-attendance-pro" href="#">Buy Now</a>
                <span class="tryit">or <a data-href="https://app.workstatus.io/auth/register/?pid=42&type=monthly" href="javascript:void(0);" onclick="return get_ws_signupform(this);">Try It Free</a></span>
              </div>
            </div>
          </div>
          <div class="plan-include">
            <h3>Included in Every Plan:</h3>
            <ul>
              <li>Mobile Check-in/Check-out</li>
              <li>Shift Management & Scheduling</li>
              <li>GPS-based Attendance Tracking</li>
              <li>Late Coming Management & Alerts</li>
              <li>Selfie Based Attendance</li>
              <li>Leave & Overtime Management</li>
              <li>Geo-fenced Jobsites</li>
              <li>1:1 onboarding tour with our team</li>
              <li>Attendance Reports & Analytics</li>
              <li><strong>PLUS</strong> First-in-line 24x5 priority support</li>
            </ul>
          </div>
        </div>
      </div>
   </div>
  </section>
  <?php /* ?>
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
  <?php */ ?>
  <div id="comp-plan-cont">
  <div class="container">
    <div class="comparison-outer"><span class="plan-btn">View Full plan comparison</span></div>
  </div>
  <div class="comparison-panel" id="div-comparison">
    <div class="container">
      <div class="comp-table-sticky" id="comp-table-sticky">
        <table class="comp-table">
          <thead>
            <tr>
              <th></th>
              <th><span class="plan-label">Free</span>
                <a class="button" id="ws-coplan-free" href="javascript:void(0);">Choose plan</a>
              </th>
              
              <th><span class="plan-label">Productivity Management</span><a class="button" id="ws-coplan-productivity-basic" href="#">Try For Free</a></th>
              <th><span class="plan-label">Productivity + Project Management</span><a class="button higlit" id="ws-coplan-productivity-pro" href="#">Try For Free</a></th>
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
                <td>Timesheet Approvals</td>
                <td>-</td>
                <td>-</td>
                <td><i class="chkicon"></i></td>
                <td><i class="chkicon"></i></td>
                <td><i class="chkicon"></i></td>
              </tr>
              <tr>
                <td>Idle Time Out</td>
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
                <td><i class="chkicon"></i></td>
                <td><i class="chkicon"></i></td>
                <td><i class="chkicon"></i></td>
              </tr>
              <tr>
                <td>Auto discard idle time</td>
                <td>-</td>
                <td>-</td>
                <td><i class="chkicon"></i></td>
                <td><i class="chkicon"></i></td>
                <td><i class="chkicon"></i></td>
              </tr>
              <tr>
                <td>Background timer *</td>
                <td>-</td>
                <td>-</td>
                <td><i class="chkicon"></i></td>
                <td><i class="chkicon"></i></td>
                <td><i class="chkicon"></i></td>
              </tr>
              <tr>
                <td>Automatic Time Tracking</td>
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
                <td>-</td>
                <td><i class="chkicon"></i></td>
                <td><i class="chkicon"></i></td>
                <td><i class="chkicon"></i></td>
                <td><i class="chkicon"></i></td>
              </tr>
              <tr>
                <td>Break Time Capture</td>
                <td>-</td>
                <td>-</td>
                <td><i class="chkicon"></i></td>
                <td><i class="chkicon"></i></td>
                <td><i class="chkicon"></i></td>
              </tr>
              <tr>
                <td>Manual/Offline Time Capture</td>
                <td>-</td>
                <td>-</td>
                <td><i class="chkicon"></i></td>
                <td><i class="chkicon"></i></td>
                <td><i class="chkicon"></i></td>
              </tr>
              <tr>
                <td>Shift Scheduling</td>
                <td>-</td>
                <td><i class="chkicon"></i></td>
                <td><i class="chkicon"></i></td>
                <td><i class="chkicon"></i></td>
                <td><i class="chkicon"></i></td>
              </tr>
              <tr>
                <td>Automatic Timesheets</td>
                <td>-</td>
                <td><i class="chkicon"></i></td>                
                <td><i class="chkicon"></i></td>
                <td><i class="chkicon"></i></td>
                <td><i class="chkicon"></i></td>
              </tr>
              <tr>
              <td>Absence Alerts</td>
                <td>-</td>
                <td><i class="chkicon"></i></td>
                <td><i class="chkicon"></i></td>
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
                <td>-</td>
                <td><i class="chkicon"></i></td>
                <td><i class="chkicon"></i></td>
                <td><i class="chkicon"></i></td>
              </tr>
              <tr>
              <td>Activity levels</td>
                <td><i class="chkicon"></i></td>
                <td>-</td>
                <td><i class="chkicon"></i></td>
                <td><i class="chkicon"></i></td>
                <td><i class="chkicon"></i></td>
              </tr>
              <tr>
                <td>Apps & URLs tracking</td>
                <td>-</td>
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
                <td><i class="chkicon"></i></td>
                <td><i class="chkicon"></i></td>
                <td><i class="chkicon"></i></td>
                <td><i class="chkicon"></i></td>
                <td><i class="chkicon"></i></td>
              </tr>
              <tr>
                <td>Daily & Weekly Limits</td>
                <td>-</td>
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
                <td><i class="chkicon"></i></td>
              </tr>
              <tr>
                <td>Overtime</td>
                <td>-</td>
                <td><i class="chkicon"></i></td>
                <td><i class="chkicon"></i></td>
                <td><i class="chkicon"></i></td>
                <td><i class="chkicon"></i></td>
              </tr>
              <tr>
                <td>Work Breaks</td>
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
                <td>Client Invoices</td>
                <td>-</td>
                <td>-</td>
                <td>5</td>
                <td><i class="chkicon"></i></td>
                <td><i class="chkicon"></i></td>
              </tr>
              <tr>
                <td>Team Invoices</td>
                <td>-</td>
                <td>-</td>
                <td><i class="chkicon"></i></td>
                <td><i class="chkicon"></i></td>
                <td><i class="chkicon"></i></td>
              </tr>
              <tr>
                <td>Expense Tracking</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td><i class="chkicon"></i></td>
                <td><i class="chkicon"></i></td>
              </tr>
              <tr>
                <td>Per User Settings</td>
                <td>-</td>
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
                <td><i class="chkicon"></i></td>
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
          <h5>Project Management</h5>
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
                <td>Client Budgets</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td><i class="chkicon"></i></td>
                <td><i class="chkicon"></i></td>
              </tr>
              <tr>
                <td>Tasks / To-dos</td>
                <td>-</td>
                <td>-</td>
                <td>1,500</td>
                <td><i class="chkicon"></i></td>
                <td><i class="chkicon"></i></td>
              </tr>
              <tr>
                <td>Work orders & jobs *</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td><i class="chkicon"></i></td>
                <td><i class="chkicon"></i></td>
              </tr>
              <tr>
                <td>Integrations</td>
                <td>-</td>
                <td>-</td>
                <td>1 integration</td>
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
                <td>-</td>
                <td></td>
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
                <td>-</td>
                <td><i class="chkicon"></i></td>
                <td><i class="chkicon"></i></td>
                <td><i class="chkicon"></i></td>
                <td><i class="chkicon"></i></td>
              </tr>
              <tr>
                <td>App <span class="perp">and</span> Website Usage</td>
                <td>-</td>
                <td>-</td>
                <td><i class="chkicon"></i></td>
                <td><i class="chkicon"></i></td>
                <td><i class="chkicon"></i></td>
              </tr>
              <tr>
                <td>Location Analytics</td>
                <td>-</td>
                <td><i class="chkicon"></i></td>
                <td><i class="chkicon"></i></td>
                <td><i class="chkicon"></i></td>
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
                <td>-</td>
                <td><i class="chkicon"></i></td>
              </tr>
              <tr>
                <td>Workload Management</td>
                <td>-</td>
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
                <td>-</td>
                <td><i class="chkicon"></i></td>
              </tr>
              <tr>
                <td>Software Utilization</td>
                <td>-</td>
                <td>-</td>
                <td><i class="chkicon"></i></td>
                <td><i class="chkicon"></i></td>
                <td><i class="chkicon"></i></td>
              </tr>
              <tr>
                <td>Workforce Analytics</td>
                <td>-</td>
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
                <td>-</td>
                <td><i class="chkicon"></i></td>
              </tr>
              <tr>
                <td>OverTime Tracker</td>
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
                <td>Single Sign-on</td>
                <td>-</td>
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
                <td>-</td>
                <td>Limited</td>
                <td><i class="chkicon"></i></td>
              </tr>
              <tr>
                <td>Scheduled Reports</td>
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
                <td>Help Center</td>
                <td>-</td>
                <td><i class="chkicon"></i></td>
                <td><i class="chkicon"></i></td>
                <td><i class="chkicon"></i></td>
                <td><i class="chkicon"></i></td>
              </tr>
              <tr>
                <td>Learning Center</td>
                <td>-</td>
                <td><i class="chkicon"></i></td>
                <td><i class="chkicon"></i></td>
                <td><i class="chkicon"></i></td>
                <td><i class="chkicon"></i></td>
              </tr>
              <tr>
                <td>Chat Support</td>
                <td>-</td>
                <td><i class="chkicon"></i></td>
                <td><i class="chkicon"></i></td>
                <td><i class="chkicon"></i></td>
                <td><i class="chkicon"></i></td>
              </tr>
              <tr>
                <td>Email Support SLA (24x5)</td>
                <td>-</td>
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
  </div>
</div>
<section id="ws-pr-addon" class="option-data" <?php echo ( $activePlan !== "productivity" ) ? 'style="display: none;"' : ''; ?> >
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
      <div class="addond-col" style="display:none;">
        <div class="add-box">
          <div class="topDiv">
            <div class="icon"><img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/images/add-01.svg"
              alt="ws" width="45" height="45">
            </div>
            <div class="tcon">
              <h4>Invoicing</h4>
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
                  <p>We use advanced encryption and security protocols to protect user information and prevent unauthorized access.</p>
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
                  <p>Workstatus is available on App Store and Google Play Store. You can download the Workstatus app and access all the features. Here's a <a target="_blank" href="https://support.workstatus.io/en/article/does-workstatus-have-a-mobile-app-175qopu/">support document</a> to help you access Workstatus.</p>
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

<?php get_template_part('common/home', 'testimonials'); ?>

<div class="blogvideo-popup">
  <div id="calendly-popup" class="popup-wrapper" style="display:none;">
    <div class="popWrap">
      <div class="popup-content">
      <span class="cl-iframe-closeicon" onclick="closeCalendlyiFrame()">Close</span>
      <iframe id="calendly-iframe" class="videoIframe js-videoIframe" allow="autoplay"></iframe>
      </div>
    </div>
  </div>
</div>
<?php require_once get_template_directory() .'/common/all-brands.php';?>
<?php require_once get_template_directory() . '/common/workstatus-journey.php'; ?>
<?php get_footer(); ?>
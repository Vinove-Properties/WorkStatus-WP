<?php
/* 
Template Name: Pricing - Template V5.0
Author : Nitin Baluni.
*/
get_header();
$prPlans    = ['productivity','project','time','attendance', 'everything'];
$activePlan = ( isset($_GET['plan']) && !empty($_GET['plan']) ) ? $_GET['plan'] : 'productivity';
if( !in_array($activePlan, $prPlans) ){
$activePlan =  'productivity';
}
?>
<div id="wsio-preloader" style="margin-top:100px;">
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
          <li class="<?php echo ($activePlan == "productivity") ? 'active' : ''; ?>"  data-tab="#tab01"><a data-plan="wsp-productivity" href="#tab01">Productivity</a></li>
          <li class="<?php echo ($activePlan == "project") ? 'active' : ''; ?>" data-tab="#tab02"><a data-plan="wsp-project" href="#tab02">Project</a></li>
          <li class="<?php echo ($activePlan == "time") ? 'active' : ''; ?>" data-tab="#tab03"><a data-plan="wsp-time" href="#tab03">Time</a></li>
          <li class="<?php echo ($activePlan == "attendance") ? 'active' : ''; ?>" data-tab="#tab04"><a data-plan="wsp-attendance" href="#tab04">Attendance</a></li>
          <li class="<?php echo ($activePlan == "everything") ? 'active' : ''; ?>" data-tab="#tab05"><a href="#tab04">Everything<img  alt="info" class="tooltip-icon" src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/info-icon.svg"  width="12" height="12">
            <span class="info-text">This is the tooltip info about Everything.</span></a></li>
        </ul>
      </nav>
      <div id="inv-price-fltr" class="plan-section" style="display:block;">
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
        </div>
      </div>
      <div class="price-contents">
        <div id="tab01" class="tab-contents <?php echo ($activePlan == "productivity") ? 'active' : ''; ?>">
        <div class="pricing-card">
          <div class="card-left">
            <div class="pr-plan">
              <h3>Productivity Management</h3>
              <div class="total">NO USER MINIMUM</div>
              <p>Maximize team output with time tracking, app usage analysis &amp; productivity reports.</p>
            </div>
            <div class="card-plan">
              <span class="wph" id="cst-productivity-one"></span>
              <span class="prio">/ user / month</span>
            </div>
            <a class="price_btn" id="bn-productivity-one" href="#">Buy Now</a>
            <span class="tryit">or <a href="https://app.workstatus.io/auth/register">Try It Free</a></span>
          </div>
          <div class="card-right">
            <h3>Included in Plan:</h3>
            <div class="plan-include column-two">
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

        <div id="tab02" class="tab-contents <?php echo ($activePlan == "project") ? 'active' : ''; ?>">
          <div class="price-flex">
            <div class="price-column flex-3">
              <div class="price-box">
                <div class="pr-plan">
                  <h3>Project Management</h3>
                  <div class="total">NO USER MINIMUM</div>
                  <p>Maximize team output with time tracking, app usage analysis & productivity reports.</p>
                </div>
                <div class="card-plan">
                  <span class="wph" id="cst-project-basic"></span>
                  <span class="prio">/ user / month</span>
                </div>
                <a class="price_btn" id="bn-project-basic" href="#">Buy Now</a>
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
                  <span class="wph" id="cst-project-pro"></span>
                  <span class="prio">/ user / month</span>
                </div>
                <a class="price_btn" id="bn-project-pro" href="#">Buy Now</a>
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

        <div id="tab03" data-plan="time" class="tab-contents <?php echo ($activePlan == "time") ? 'active' : ''; ?>">
        <div class="pricing-card">
            <div class="card-left">
              <div class="pr-plan">
                <h3>Time Tracking</h3>
                <div class="total">2 Users Minimum</div>
                <p>Unlimited time tracking for all teams, suitable for businesses of any size.</p>
                <h4>Fit your needs</h4>
              </div>
              <div class="card-plan"><span class="wph" id="cst-time-three"></span></div>
              <div class="price-slider">
                <label for="pricingRange">Users: <span class="userCount">50</span></label>
                <input type="hidden" id="elm-time-hd" value="50" />
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
              <a class="price_btn" id="bn-time-three" href="#">Buy Now</a>
              <span class="tryit">or <a href="https://app.workstatus.io/auth/register">Try It Free</a></span>
            </div>
            <div class="card-right">
              <h3>Included in Plan:</h3>
              <div class="plan-include column-two">
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
        <div id="tab04" data-plan="attendance" class="tab-contents <?php echo ($activePlan == "attendance") ? 'active' : ''; ?>">
          <div class="pricing-card att-pricing">
            <div class="card-left">
              <div class="pr-plan">
                <h3>Attendance Tracking</h3>
                <div class="total">2 Users Minimum</div>
                <p>Unlimited time tracking for all teams, suitable for businesses of any size.</p>
              </div>
              <div class="card-plan">
                <div class="card-plan"><span class="wph" id="cst-attendance-four"></span></div>
              </div>
              <div class="price-slider">
                <label for="pricingRange">Users: <span class="userCount">50</span></label>
                <input type="hidden" id="elm-attendance-hd" value="50" />
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
              <a class="price_btn" id="bn-attendance-four" href="#">Buy Now</a>
              <span class="tryit">or <a href="https://app.workstatus.io/auth/register">Try It Free</a></span>
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
        <div id="tab05" class="tab-contents <?php echo ($activePlan == "everything") ? 'active' : ''; ?>">
          <div class="pricing-card every-card">
            <div class="card-left">
              <div class="pr-plan">
                <h3>Everything</h3>
                <div class="total">2 Users Minimum</div>
                <p>Unlimited time tracking for all teams, suitable for businesses of any size.</p>
              </div>
              <div class="card-plan"><span class="wph" id="cst-everything-five"></span></div>
              <a class="price_btn" id="bn-everything-five" href="#">Buy Now</a>
              <span class="tryit">or <a href="https://app.workstatus.io/auth/register">Try It Free</a></span>
            </div>
            <div class="card-right">
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
   </div>
  </section>
  <section class="right-plan-section post-animation">
  <div class="container">
  <div class="plan-wrap">
    <div class="left-column">
      <h2>Can't Find the Right Plan?</h2>
      <p>Let's Tailor One for You.</p>
      <div class="button-common">
        <div class="cmn-democta">
          <div class="ct-demo"><a href="javascript:void(0)" class="ctbtn"> Set Up a Free Consultation</a></div>
          <div class="ct-trial"><a href="javascript:void(0);" class="ctbtn ctbtn2"> Request Enterprise Pricing</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  </section>
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
<section id="ws-pr-addon" class="option-data padding-t-120  padding-b-120" <?php echo ( $activePlan !== "productivity" ) ? 'style="display: none;"' : ''; ?> >
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
<section class="faqsRow wfull for-heading-center padding-t-120 padding-b-120">
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
<?php //require_once get_template_directory() .'/common/all-brands.php';?>
<?php //require_once get_template_directory() . '/common/workstatus-journey.php'; ?>
<?php get_template_part('common/cmn', 'globalrating'); ?>
<?php get_template_part('common/cmn', 'journey'); ?>
<?php get_footer(); ?>
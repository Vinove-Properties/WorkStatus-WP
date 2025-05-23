<?php 
$prPlans    = ['productivity','project','time','attendance', 'everything'];
$activePlan = (isset($args['plan']) && !empty($args['plan'])) ? $args['plan'] : "productivity";
$elmClass   = (isset($args['elm-class']) && !empty($args['elm-class'])) ? $args['elm-class'] : "";
if( !in_array($activePlan, $prPlans) ){
$activePlan =  'productivity';
}
?>
<div id="wsio-preloader" style="margin-top:100px;"><div class="container" id="pre-loader">Please wait, while we load the pricing plans for you.</div></div>
<div id="wsio-pricing" class="pricing-wrapper padding-t-120 bg-light padding-b-120" style="display:none;">
  <section class="cmn-pricing no-af-bg post-animation">
    <div class="container">
      <div class="inner-wrap">
        <div class="left" style="text-align:center;">
          <h1>Simple, Flexible Pricing for Every Business</h1>
          <p><span class="no-hidden">No hidden fees</span>—just simple, affordable pricing for teams of all sizes.</p>
          <!-- <p> Can't find what you are looking for?  <span class="conbtn" onclick="getCalendlyiFrame();"><span>Setup a consulting call</span></span></p>-->
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
            <span class="info-text">Our most powerful plan - Includes all Workstatus features</span></a>
          </li>
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
            <span class="annualy">Annual</span>
          </div>
        </div>
      </div>
      <div class="price-contents">
        <div id="tab01" class="tab-contents <?php echo ($activePlan == "productivity") ? 'active' : ''; ?>">
          <div class="pricing-card price-wrapper">
            <div class="card-left">
              <div class="pr-plan">
                <h3>Productivity Management</h3>
                <div class="total">2 USER MINIMUM</div>
                <p>Maximize team output with time tracking, app usage analysis & productivity reports.</p>
              </div>
              <div class="card-plan">
                <span class="wph" id="cst-productivity-one"></span>
              </div>
              <a class="price_btn" id="bn-productivity-one" href="#">Buy Now</a>
              <span class="tryit">or <a data-href="https://app.workstatus.io/auth/register/?pid=42&type=monthly" href="javascript:void(0);" onclick="return get_ws_signupform(this);">Try It Free</a></span>
              <button onclick="togglePrice()" class="price-accordion" type="button" aria-expanded="false">Features</button>
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
                </ul>
                <ul>
                  <li>Timesheet approvals</li>
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
                  <div class="total">2 Users Minimum</div>
                  <p>Ideal for small teams, pay only for the users you need and scale effortlessly.</p>
                </div>
                <div class="card-plan">
                  <span class="wph" id="cst-project-basic"></span><span class="prio"></span>
                </div>
                <a class="price_btn" id="bn-project-basic" href="#">Buy Now</a>
                <span class="tryit">or <a data-href="https://app.workstatus.io/auth/register/?pid=42&type=monthly" href="javascript:void(0);" onclick="return get_ws_signupform(this);">Try It Free</a></span>
              </div>
            </div>
            <div class="price-column flex-2">
              <div class="price-box">
                <div class="pr-plan">
                  <h3>Pro Unlimited</h3>
                  <div class="total">unlimited Users & Projects</div>
                  <p>Manage unlimited users and projects with no restrictions, perfect for small to mid-sized enterprises.</p>
                </div>
                <div class="card-plan">
                  <span class="wph" id="cst-project-pro"></span><span class="prio cw"></span>
                </div>
                <a class="price_btn" id="bn-project-pro" href="#">Buy Now</a>
                <span class="tryit">or <a data-href="https://app.workstatus.io/auth/register/?pid=42&type=monthly" href="javascript:void(0);" onclick="return get_ws_signupform(this);">Try It Free</a></span>
              </div>
            </div>
          </div>
          <div class="plan-include">
            <h3>Included in Every Plan:</h3>
            <ul>
              <li>Unlimited Projects & Tasks</li>
              <li>Budgeting</li>
              <li>Invoicing</li>
              <li>Project & Task Time Tracking</li>
              <li>Project Management Integrations</li>
              <li>Multiple Filters & Custom Views </li>
              <li>Gantt Chart</li>
              <li>Kanban Board</li>
              <li>Invoicing Integrations</li>
              <li>1:1 onboarding tour with our team</li>
              <li>24x5 Customer support</li>
            </ul>
          </div>
        </div>
        <div id="tab03" data-plan="time" class="tab-contents <?php echo ($activePlan == "time") ? 'active' : ''; ?>">
          <div class="pricing-card time-pricing price-wrapper">
            <div class="card-left">
              <div class="pr-plan">
                <h3>Time Tracking</h3>
                <div class="total">50 Users Minimum</div>
                <p>Unlimited time tracking for all teams, suitable for businesses of any size.</p>
                <h4 class="for-custom">Fit your needs</h4>
                <div class="card-plan"><span class="wph" id="cst-time-three"></span></div>
              </div>
              <div class="price-slider">
                <label for="pricingRange">Users: <span class="userCount">50</span></label>
                <input type="hidden" id="elm-time-hd" value="50" />
                <input type="range" class="pricingRange" min="0" max="5" value="0" step="1" id="slider"/>
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
              <span class="tryit">or <a data-href="https://app.workstatus.io/auth/register/?pid=42&type=monthly" href="javascript:void(0);" onclick="return get_ws_signupform(this);">Try It Free</a></span>
              <button onclick="togglePrice()" class="price-accordion" type="button" aria-expanded="false">Features</button>
            </div>
            <div class="card-right">
              <h3>Included in Plan:</h3>
              <div class="plan-include column-two">
                <ul>
                  <li>Unlimited tracking</li>
                  <li>Time tracker</li>
                  <li>Timesheet</li>
                  <li>Auto tracker</li>
                  <li>Attendance</li>
                  <li>Manual Timesheet</li>
                  <li>Bulk Timesheet</li>
                  <li>Team activity</li>
                  <li>Timesheet Approval</li>
                  <li>Breaks</li>
                  <li>Web Tracker App</li>
                </ul>
                <ul>
                  <li>Mobile & desktop App</li>
                  <li>Idle detection & reminders</li>
                  <li>Reports</li>
                  <li>Export & share data</li>
                  <li>1:1 onboarding tour</li>
                  <li>24x5 Customer support</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div id="tab04" data-plan="attendance" class="tab-contents <?php echo ($activePlan == "attendance") ? 'active' : ''; ?>">
          <div class="pricing-card att-pricing price-wrapper">
            <div class="card-left">
              <div class="pr-plan">
                <h3>Attendance Management</h3>
                <div class="total">50 Users Minimum</div>
                <p>Unlimited attendance tracking for all employees, perfect for businesses of any size.</p>
                <h4 class="for-custom">Fit your needs</h4>
                <div class="card-plan"><span class="wph" id="cst-attendance-four"></span></div>
              </div>
              <div class="price-slider">
                <label for="pricingRange">Users: <span class="userCount">50</span></label>
                <input type="hidden" id="elm-attendance-hd" value="50" />
                <input type="range" class="pricingRange" min="0" max="5" value="0" step="1" id="slider"/>
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
              <span class="tryit">or <a data-href="https://app.workstatus.io/auth/register/?pid=42&type=monthly" href="javascript:void(0);" onclick="return get_ws_signupform(this);">Try It Free</a></span>
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
                  <li>Leave & Overtime Management</li>
                  <li>1:1 onboarding tour</li>
                  <li>24x5 Customer support</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div id="tab05" class="tab-contents <?php echo ($activePlan == "everything") ? 'active' : ''; ?>">
          <div class="pricing-card every-card price-wrapper">
            <div class="card-left">
              <div class="pr-plan">
                <h3>Everything</h3>
                <div class="total">2 Users Minimum</div>
                <p>Stay on top of projects with seamless time tracking, task management, and budgeting.</p>
              </div>
              <div class="card-plan"><span class="wph" id="cst-everything-five"></span></div>
              <a class="price_btn" id="bn-everything-five" href="#">Buy Now</a>
              <span class="tryit">or <a data-href="https://app.workstatus.io/auth/register/?pid=42&type=monthly" href="javascript:void(0);" onclick="return get_ws_signupform(this);">Try It Free</a></span>
              <button onclick="togglePrice()" class="price-accordion" type="button" aria-expanded="false">Features</button>
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
</div>  
<!--#wsio-pricing -->

<div class="blogvideo-popup">
  <div id="calendly-popup" class="popup-wrapper" style="display:none;">
    <div class="popWrap">
      <div class="popup-content">
      <span class="cl-iframe-closeicon" onclick="closeCalendlyiFrame()">Close</span>
      <iframe id="calendly-iframe" class="videoIframe js-videoIframe" src="#" allow="autoplay"></iframe>
      </div>
    </div>
  </div>
</div>

<?php 
$prPlans    = ['productivity','project','time','attendance'];
$activePlan = (isset($args['plan']) && !empty($args['plan'])) ? $args['plan'] : "productivity";
if( !in_array($activePlan, $prPlans) ){
$activePlan =  'productivity';
}
?>
<div id="wsio-preloader" style="margin-top:100px;">
<div class="container" id="pre-loader">Please wait, while we load the pricing plans for you.</div>
</div>
<div id="wsio-pricing" class="pricing-wrapper" style="display:none;">
<section class="cmn-pricing no-af-bg post-animation">
  <div class="container">
    <div class="inner-wrap">
      <div class="left" style="text-align:center;">
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
              <div class="pc-option" data-cod="SA" data-country="SAR (Saudi Arab)">
                <img loading="lazy" class="flgicon" src="<?php bloginfo('template_url'); ?>/dev-images/flags/sar.svg" alt="Workstatus" width="13" height="13">SAR (Saudi Arab)
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
              <span class="tryit">or <a href="https://app.workstatus.io/auth/register">Try It Free</a></span>
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
              <span class="tryit">or <a href="https://app.workstatus.io/auth/register">Try It Free</a></span>
              <div class="price-wrapper">
                <div class="price-options">
                  <h4>Everything <span class="perp">in</span> Productivity  +</h4>
                  <div class="option-list">
                    <div class="option">Project Management</div>
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
              <span class="tryit op0">or <a href="https://app.workstatus.io/auth/register">Try It Free</a></span>
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
              <span class="tryit">or <a href="https://app.workstatus.io/auth/register">Try It Free</a></span>
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
              <span class="tryit">or <a href="https://app.workstatus.io/auth/register">Try It Free</a></span>
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
              <span class="tryit">or <a href="https://app.workstatus.io/auth/register">Try It Free</a></span>
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
            <li><strong>PLUS</strong> First-in-line 24/5 priority support</li>
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
              <span class="tryit">or <a href="https://app.workstatus.io/auth/register">Try It Free</a></span>
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
              <span class="tryit">or <a href="https://app.workstatus.io/auth/register">Try It Free</a></span>
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
            <li><strong>PLUS</strong> First-in-line 24/5 priority support</li>
          </ul>
        </div>
      </div>
    </div>
</section>

<div class="blogvideo-popup">
  <div id="calendly-popup" class="popup-wrapper" style="display:none;">
    <div class="popWrap">
      <div class="popup-content">
      <span class="cl-iframe-closeicon" onclick="closeCalendlyiFrame()">Close</span>
      <iframe id="calendly-iframe" class="videoIframe js-videoIframe" src="" allow="autoplay"></iframe>
      </div>
    </div>
  </div>
</div>
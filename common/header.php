<header class="site__header" id="masthead">
  <div class="container">
    <div id="topnav" class="top_nav">
      <div class="logo">
        <a href="<?php echo SITE_URL; ?>/" title="Workstatus">
          <picture>
            <source type="image/webp" srcset="https://www.workstatus.io/assests/images/logo.webp">
            <source type="image/png" srcset="https://www.workstatus.io/assests/images/logo.png">
            <img src="https://www.workstatus.io/assests/images/logo.png" alt="Workstatus" width="180" height="36"> 
          </picture>
        </a>
      </div>
      <div class="logo-white">
        <a href="<?php echo SITE_URL; ?>/" title="Workstatus">
          <picture>
            <source type="image/webp" srcset="<?php echo SITE_URL; ?>/assests/images/logo-white.webp">
            <source type="image/png" srcset="<?php echo SITE_URL; ?>/assests/images/logo-white.png">
            <img loading="lazy" src="<?php echo SITE_URL; ?>/assests/images/logo-white.png" width="180"
              height="36" alt="Workstatus">
          </picture>
        </a>
      </div>
      <button  class="nav_btn" onclick="navFunction();"> <span>&#9776;</span> <span>&#10005;</span> </button>
      <nav class="site_nav">
        <ul>
          <!--<li id="productsitem" class="dropdown dropdown-2">
            <a href="#" onclick="showProductItem();">Products</a>
            <div class="small-menu">
              <div class="flex_row">
                <div class="col-menu">
                  <div class="menu-box">
                    <a href="<?php echo SITE_URL; ?>/time">
                      Workstatus Time
                      <p>Time Tracking & Reporting With Timesheets</p>
                    </a>
                  </div>
                </div>
                <div class="col-menu">
                  <div class="menu-box">
                    <a href="<?php echo SITE_URL; ?>/tasks">
                      Workstatus Tasks
                      <p>Agile Project & Task Management</p>
                    </a>
                  </div>
                </div>
                <div class="col-menu">
                  <div class="menu-box">
                    <a href="<?php echo SITE_URL; ?>/desk">
                      Workstatus Desk
                      <p>Time Tracking, Proof of Work, Team & Productivity Management</p>
                    </a>
                  </div>
                </div>
                <div class="col-menu">
                  <div class="menu-box">
                    <a href="<?php echo SITE_URL; ?>/field-service-management-software">
                      Workstatus Field
                      <p>In-field Team Management With GPS Location Tracking
                      </p>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </li>-->
          <li id="featuresitem" class="dropdown">
            <a href="<?php echo SITE_URL; ?>/features">Features</a><span class="trigger" onclick="showFeatureItem();"></span>
            <div class="full-menu">
              <div class="container">
                <div class="flex_row">
                  <div class="col-menu">
                    <h3>Time Tracking</h3>
                    <div class="menu-box">
                      <a href="<?php echo SITE_URL; ?>/best-time-tracking-software-online">
                        Time Tracking
                        <p>Track Employees Time & Get Detailed Insights On Time Usage</p>
                      </a>
                    </div>
                    <div class="menu-box">
                      <a href="<?php echo SITE_URL; ?>/best-employee-timesheets-cloud-software">
                        Online Timesheets
                        <p>Easy To Read & Export,  Detailed & Accurate Timesheets</p>
                      </a>
                    </div>
                    <div class="menu-box">
                      <a href="<?php echo SITE_URL; ?>/geofence-time-clock-software-online">
                        Geofencing
                        <p>Geofence Custom Locations To Track On-site Employees</p>
                      </a>
                    </div>
                    <div class="menu-box">
                      <a href="<?php echo SITE_URL; ?>/best-attendance-tracking-software">
                        Attendance Management
                        <p>Track Clock-in & Clock-Out With Active Working Hours</p>
                      </a>
                    </div>
                  </div>
                  <div class="col-menu">
                    <h3>Monitoring</h3>
                    <div class="menu-box">
                      <a href="<?php echo SITE_URL; ?>/best-employee-monitoring-software-online">
                        Employee Monitoring Software
                        <p>App & URL Tracking and Screenshots</p>
                      </a>
                    </div>
                    <div class="menu-box">
                      <a href="<?php echo SITE_URL; ?>/best-employee-task-scheduling-software">
                        Employee Scheduling
                        <p>Smooth shift planning and work Schedules</p>
                      </a>
                    </div>
                    <div class="menu-box">
                      <a href="<?php echo SITE_URL; ?>/best-employee-productivity-cloud-software">
                        Productivity Measurement
                       <p>Built-in Productivity & Efficiency Measurement Tool</p>
                      </a>
                    </div>
                    <div class="menu-box">
                      <a href="<?php echo SITE_URL; ?>/best-facial-recognition-software">
                        Selfie Validation
                        <p>Validate Attendance with Face Recognition & Validation App</p>
                       </a>
                    </div>
                  </div>
                  <div class="col-menu">
                  <h3>Workforce Management</h3>
                  <div class="menu-box">
                  <a href="<?php echo SITE_URL; ?>/best-gps-time-tracking-software-online">GPS Tracking
                  <p>Location Tracking For On The Go Teams</p>
                  </a>
                  </div>
                  <div class="menu-box">
                  <a href="<?php echo SITE_URL; ?>/best-time-report-software-online">Detailed Reporting
                  <p>In-depth Reports & Insights To Remain Informed</p>
                  </a>
                  </div>
                  </div>
                  <div class="col-menu">
                    <h3>Agile Project Management</h3>
                    <div class="menu-box">
                      <a href="<?php echo SITE_URL; ?>/best-project-cost-management-software-online">
                        Project Budgeting
                        <p>Estimate Project Budget, Create Limits & Generate Alerts </p>
                      </a>
                    </div>
                    <div class="menu-box">
                      <a href="<?php echo SITE_URL; ?>/best-online-invoicing-software">
                        Online Invoicing
                        <p>Automated & Accurate Invoices With Timed Alerts & Notifications</p>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li id="howitworksitem" class="dropdown how-works">
            <a href="#" onclick="showHowitworkItem();">How it Works</a>
            <div class="full-menu">
              <div class="container">
                <div class="flex_row">
                  <div class="menu-left">
                    <h3>Industries</h3>
                    <div class="manuwrap">
                      <div class="menu-box">
                        <a href="<?php echo SITE_URL; ?>/industry/accounting">
                          Accounting
                          <p>Track Timesheets & Billable Hours For Invoicing</p>
                        </a>
                      </div>
                      <div class="menu-box">
                        <a href="<?php echo SITE_URL; ?>/industry/landscaping">
                          Landscaping
                          <p>Automate Time & Attendance Tracking, Schedule Jobs Easily</p>
                        </a>
                      </div>
                      <div class="menu-box">
                        <a href="<?php echo SITE_URL; ?>/industry/e-commerce">
                          Ecommerce
                           <p>Accurate Timesheets & Productivity Status For Teams</p>
                        </a>
                      </div>
                      <div class="menu-box">
                        <a href="<?php echo SITE_URL; ?>/industry/architects-and-engineers">
                          Architects & Engineer
                           <p>Control Project Costs, Automate Attendance & Invoicing</p>
                        </a>
                      </div>
                      <div class="menu-box">
                        <a href="<?php echo SITE_URL; ?>/industry/real-estate">
                          Real Estate
                           <p>Get Real Time Updates On Sales & On-Site Teams </p>
                        </a>
                      </div>
                      <div class="menu-box">
                        <a href="<?php echo SITE_URL; ?>/industry/time-tracking-app-for-janitorial-services">
                          Janitorial Services
                           <p>Automated Attendance, Location Tracking & Easy Scheduling</p>
                        </a>
                      </div>
                      <div class="menu-box">
                        <a href="<?php echo SITE_URL; ?>/industry/consultant">
                          Consultant
                           <p>Manage Projects, Timesheets, Attendance & Invoices</p>
                        </a>
                      </div>
                      <div class="menu-box">
                        <a href="<?php echo SITE_URL; ?>/industry/agency">
                          Agency
                           <p>Manage & Control Project Budgets & Bill Clients Accurately</p>
                        </a>
                      </div>
                      <div class="menu-box">
                        <a href="<?php echo SITE_URL; ?>/industry/manufacturing">
                          Manufacturing
                           <p>Facility Tracking, Shift Management & Alerts</p>
                        </a>
                      </div>
                      <div class="menu-box">
                        <a href="<?php echo SITE_URL; ?>/industry/design">
                          Design
                           <p>Manage Project Budgets, Attendance & Productivity</p>
                        </a>
                      </div>
                      <div class="menu-box">
                        <a href="<?php echo SITE_URL; ?>/industry/attorney">
                          Attorney
                           <p>Manage Billable Hours Based On Accurate Timesheets & Cost Reports</p>
                        </a>
                      </div>
                      <div class="menu-box">
                        <a href="<?php echo SITE_URL; ?>/industry/software-development">
                          Software Development
                           <p>Track Billable Hours & Automate Invoicing</p>
                        </a>
                      </div>
                      <div class="menu-box">
                        <a href="<?php echo SITE_URL; ?>/industry/healthcare">
                          Healthcare
                           <p>Track Home Healthcare Staff Attendance, Location & Timesheets</p>
                        </a>
                      </div>
                      <div class="menu-box">
                        <a href="<?php echo SITE_URL; ?>/industry/construction">
                          Construction
                           <p>Geofenced Job-Sites, Automated Timesheets, Easy Scheduling & More</p>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="menu-right">
                    <h3>Use Cases</h3>
                    <a href="<?php echo SITE_URL; ?>/work-from-home-monitoring">Work From Home Monitoring</a>
                    <a href="<?php echo SITE_URL; ?>/remote-team-management">Remote Employees Tracking</a>
                    <a href="<?php echo SITE_URL; ?>/on-premise-teams-management">On-Premise Teams Management</a>
                    <a href="<?php echo SITE_URL; ?>/field-service-management-software">Field Service Management</a>
                    <a href="<?php echo SITE_URL; ?>/freelance-time-tracking-cloud-software">Freelancers Time Management</a>
                    <a href="<?php echo SITE_URL; ?>/hybrid-workforce-management">Hybrid Workforce Management</a>
                    <a href="<?php echo SITE_URL; ?>/insights-for-business-analytics">Insights For Business Analytics</a>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li id="apps" class="dropdown dropdown-2">
            <a href="#" onclick="showAppsItem();">Apps</a>
            <div class="small-menu">
              <div class="flex_row">
                <div class="col-menu">
                  <h3>Desktop</h3>
                  <div class="menu-box">
                    <a href="<?php echo SITE_URL; ?>/mac">
                      Mac
                      <p>Workforce Management Suite For OS X Mavericks or Newer</p>
                    </a>
                  </div>
                  <div class="menu-box">
                    <a href="<?php echo SITE_URL; ?>/windows">
                      Windows
                      <p>Workforce Management Suite For Windows 8 or Newer</p>
                    </a>
                  </div>
                </div>
                <div class="col-menu">
                  <h3>Mobile</h3>
                  <div class="menu-box">
                    <a href="<?php echo SITE_URL; ?>/iphone">iOS
                      <p>Track Time And Gps Location From The iOS App</p>
                    </a>
                  </div>
                  <div class="menu-box">
                    <a href="<?php echo SITE_URL; ?>/android">
                      Android
                      <p>Track Time And Gps Location From The Android App</p>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li><a href="<?php echo SITE_URL; ?>/pricing">Pricing</a></li>
          <li><a href="<?php echo $LogLink; ?>"><i></i>Sign-In</a></li>
        </ul>
        <?php  
        if( geoCTAcheck() === true ){
          echo '<div class="login"><a href="'.$RegLink.'" class="primary_btn1">'.$ws_ctas['cta_text'].'</a></div>';
        } 
        ?>        
      </nav>
    </div>
  </div>
</header>

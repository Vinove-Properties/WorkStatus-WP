<header class="site__header" id="masthead">
  <div class="container">
  <div id="topnav" class="top_nav">
    <div class="logo">
      <a href="<?php echo SITE_URL; ?>/" title="Workstatus">
        <picture>
          <img src="<?php echo SITE_URL; ?>/assests/images/logo.svg" alt="Workstatus" width="230" height="31"> 
        </picture>
      </a>
    </div>
    <div class="logo-white">
      <a href="<?php echo SITE_URL; ?>/" title="Workstatus">
        <picture>
          <img loading="lazy" src="<?php echo SITE_URL; ?>/assests/images/logo-white.svg" width="230"
            height="31" alt="Workstatus">
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
                  <h3><a href="<?php echo SITE_URL; ?>/time-attendance">Time & Attendance</a></h3>
                  <div class="menu-box">
                    <a href="<?php echo SITE_URL; ?>/best-time-tracking-software-online">
                    <img loading="lazy" src="<?php echo SITE_URL; ?>/assests/menu-images/ft-icon01.svg" width="20"
                      height="20" alt="Menu Icon">Time Tracking
                    </a>
                    <a href="<?php echo SITE_URL; ?>/best-employee-timesheets-cloud-software">
                    <img loading="lazy" src="<?php echo SITE_URL; ?>/assests/menu-images/ft-icon02.svg" width="20"
                      height="20" alt="Menu Icon">Online Timesheets
                    </a>
                    <a href="<?php echo SITE_URL; ?>/best-attendance-tracking-software">
                    <img loading="lazy" src="<?php echo SITE_URL; ?>/assests/menu-images/ft-icon03.svg" width="20"
                      height="20" alt="Menu Icon">Attendance Management
                    </a>
                   <!-- <a href="<?php echo SITE_URL; ?>/time-attendance/shift-management">
                    <img loading="lazy" src="<?php echo SITE_URL; ?>/assests/menu-images/ft-icon04.svg" width="20"
                      height="20" alt="Menu Icon">Shift Management
                    </a>-->
                    <!--<a href="<?php echo SITE_URL; ?>/time-attendance/time-off-management">
                    <img loading="lazy" src="<?php echo SITE_URL; ?>/assests/menu-images/ft-icon05.svg" width="20"
                      height="20" alt="Menu Icon">Time off management
                    </a>-->
                    <a href="<?php echo SITE_URL; ?>/geofence-time-clock-software-online">
                    <img loading="lazy" src="<?php echo SITE_URL; ?>/assests/menu-images/ft-icon06.svg" width="20"
                      height="20" alt="Menu Icon">Geofence Time Tracking
                    </a>
                    <!--<a href="<?php echo SITE_URL; ?>/time-clock-app">
                    <img loading="lazy" src="<?php echo SITE_URL; ?>/assests/menu-images/ft-icon07.svg" width="20"
                      height="20" alt="Menu Icon">Time Clock App
                    </a>-->
                    <a href="<?php echo SITE_URL; ?>/time-attendance/automatic-time-mapping">
                    <img loading="lazy" src="<?php echo SITE_URL; ?>/assests/menu-images/ft-icon08.svg" width="20"
                      height="20" alt="Menu Icon">Automatic Time Mapping
                    </a>
                  </div>
                </div>
                <div class="col-menu">
                  <h3><a href="<?php echo SITE_URL; ?>/workforce-management">WorkForce  Management</a></h3>
                  <div class="menu-box">
                    <a href="<?php echo SITE_URL; ?>/best-employee-task-scheduling-software">
                    <img loading="lazy" src="<?php echo SITE_URL; ?>/assests/menu-images/ft-icon09.svg" width="20"
                      height="20" alt="Menu Icon">Employee Scheduling
                    </a>
                    <a href="<?php echo SITE_URL; ?>/best-employee-productivity-cloud-software">
                    <img loading="lazy" src="<?php echo SITE_URL; ?>/assests/menu-images/ft-icon10.svg" width="20"
                      height="20" alt="Menu Icon">Employee Productivity
                    </a>
                    <a href="<?php echo SITE_URL; ?>/best-employee-monitoring-software-online">
                    <img loading="lazy" src="<?php echo SITE_URL; ?>/assests/menu-images/ft-icon11.svg" width="20"
                      height="20" alt="Menu Icon">Employee Monitoring
                    </a>
                    <a href="<?php echo SITE_URL; ?>/workforce-management/workforce-optimization">
                    <img loading="lazy" src="<?php echo SITE_URL; ?>/assests/menu-images/ft-icon12.svg" width="20"
                      height="20" alt="Menu Icon">WorkForce Optimization
                    </a>
                    <a href="<?php echo SITE_URL; ?>/workforce-management/employee-burnout">
                    <img loading="lazy" src="<?php echo SITE_URL; ?>/assests/menu-images/ft-icon13.svg" width="20"
                      height="20" alt="Menu Icon">Employee Burnout
                    </a>
                    <a href="<?php echo SITE_URL; ?>/workforce-management/habit-tracker-app">
                    <img loading="lazy" src="<?php echo SITE_URL; ?>/assests/menu-images/ft-icon14.svg" width="20"
                      height="20" alt="Menu Icon">Habit Tracker App
                    </a>
                    <!--<a href="<?php echo SITE_URL; ?>/online_payroll">
                    <img loading="lazy" src="<?php echo SITE_URL; ?>/assests/menu-images/ft-icon15.svg" width="20"
                      height="20" alt="Menu Icon">Payroll
                    </a>-->
                    <!--<a href="<?php echo SITE_URL; ?>/enterprise">
                    <img loading="lazy" src="<?php echo SITE_URL; ?>/assests/menu-images/ft-icon16.svg" width="20"
                      height="20" alt="Menu Icon">Enterprise
                    </a>-->
                  </div>
                </div>
                <div class="col-menu">
                  <h3><a href="<?php echo SITE_URL; ?>/reporting-analytics">Reporting & Analytics</a></h3>
                  <div class="menu-box">
                    <a href="<?php echo SITE_URL; ?>/best-gps-time-tracking-software-online">
                    <img loading="lazy" src="<?php echo SITE_URL; ?>/assests/menu-images/ft-icon17.svg" width="20"
                      height="20" alt="Menu Icon">GPS Tracking
                    </a>
                    <a href="<?php echo SITE_URL; ?>/best-time-report-software-online">
                    <img loading="lazy" src="<?php echo SITE_URL; ?>/assests/menu-images/ft-icon18.svg" width="20"
                      height="20" alt="Menu Icon">Detailed Reporting
                    </a>
                    <a href="<?php echo SITE_URL; ?>/reporting-analytics/workforce-analytics-software">
                    <img loading="lazy" src="<?php echo SITE_URL; ?>/assests/menu-images/ft-icon19.svg" width="20"
                      height="20" alt="Menu Icon">Workforce Analytics Software
                    </a>
                    <a href="<?php echo SITE_URL; ?>/reporting-analytics/overtime-tracker">
                    <img loading="lazy" src="<?php echo SITE_URL; ?>/assests/menu-images/ft-icon20.svg" width="20"
                      height="20" alt="Menu Icon">OverTime Tracker
                    </a>
                    <!--<a href="<?php echo SITE_URL; ?>/time-reporting">
                    <img loading="lazy" src="<?php echo SITE_URL; ?>/assests/menu-images/ft-icon21.svg" width="20"
                      height="20" alt="Menu Icon">Online Time Reporting
                    </a>-->
                  </div>
                </div>
                <div class="col-menu">
                  <h3><a href="<?php echo SITE_URL; ?>/project-management">Project Management</a></h3>
                  <div class="menu-box">
                    <a href="<?php echo SITE_URL; ?>/best-project-cost-management-software-online">
                    <img loading="lazy" src="<?php echo SITE_URL; ?>/assests/menu-images/ft-icon22.svg" width="20"
                      height="20" alt="Menu Icon">Project Budgeting
                    </a>
                    <a href="<?php echo SITE_URL; ?>/best-online-invoicing-software">
                    <img loading="lazy" src="<?php echo SITE_URL; ?>/assests/menu-images/ft-icon23.svg" width="20"
                      height="20" alt="Menu Icon">Online Invoicing
                    </a>
                    <!--<a href="<?php echo SITE_URL; ?>/automated-standups">
                    <img loading="lazy" src="<?php echo SITE_URL; ?>/assests/menu-images/ft-icon24.svg" width="20"
                      height="20" alt="Menu Icon">Daily StandUp
                    </a>
                    <a href="<?php echo SITE_URL; ?>/agile-workflow">
                    <img loading="lazy" src="<?php echo SITE_URL; ?>/assests/menu-images/ft-icon25.svg" width="20"
                      height="20" alt="Menu Icon">Agile WorkFlows
                    </a>
                    <a href="<?php echo SITE_URL; ?>/agile-sprints">
                    <img loading="lazy" src="<?php echo SITE_URL; ?>/assests/menu-images/ft-icon26.svg" width="20"
                      height="20" alt="Menu Icon">Agile Sprint
                    </a>
                    <a href="<?php echo SITE_URL; ?>/agile-epics">
                    <img loading="lazy" src="<?php echo SITE_URL; ?>/assests/menu-images/ft-icon27.svg" width="20"
                      height="20" alt="Menu Icon">Epics
                    </a>
                    <a href="<?php echo SITE_URL; ?>/to-do-list">
                    <img loading="lazy" src="<?php echo SITE_URL; ?>/assests/menu-images/ft-icon28.svg" width="20"
                      height="20" alt="Menu Icon">To Do List
                    </a>-->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </li>
        <li id="howitworksitem" class="dropdown how-works">
          <a href="#" onclick="showHowitworkItem();">Solutions</a>
          <div class="full-menu">
            <div class="container">
              <div class="menu-small">
                <div class="flex_row">
                  <div class="col-menu">
                    <h3><a href="/workplace-mode">WorkPlace Mode</a></h3>
                    <div class="menu-box">
                      <a href="<?php echo SITE_URL; ?>/remote-team-management">
                      <img loading="lazy" src="<?php echo SITE_URL; ?>/assests/menu-images/sol-icon01.svg" width="20"
                        height="20" alt="Menu Icon">Remote Work
                      </a>
                      <a href="<?php echo SITE_URL; ?>/hybrid-workforce-management">
                      <img loading="lazy" src="<?php echo SITE_URL; ?>/assests/menu-images/sol-icon02.svg" width="20"
                        height="20" alt="Menu Icon">Hybrid Work
                      </a>
                      <!--<a href="<?php echo SITE_URL; ?>/workplace-mode/office-work">
                      <img loading="lazy" src="<?php echo SITE_URL; ?>/assests/menu-images/sol-icon03.svg" width="20"
                        height="20" alt="Menu Icon">Office Work
                      </a>-->
                    </div>
                  </div>
                  <div class="col-menu">
                    <h3><a href="/use-case">Use Case</a></h3>
                    <div class="menu-box">
                      <a href="reporting-analytics/workforce-analytics">
                      <img loading="lazy" src="<?php echo SITE_URL; ?>/assests/menu-images/sol-icon04.svg" width="20"
                        height="20" alt="Menu Icon">Workforce Analytics
                      </a>
                      <!--<a href="<?php echo SITE_URL; ?>/operational-efficiency">
                      <img loading="lazy" src="<?php echo SITE_URL; ?>/assests/menu-images/sol-icon05.svg" width="20"
                        height="20" alt="Menu Icon">Operational Efficiency
                      </a>-->
                      <a href="<?php echo SITE_URL; ?>/on-premise-teams-management">
                      <img loading="lazy" src="<?php echo SITE_URL; ?>/assests/menu-images/sol-icon06.svg" width="20"
                        height="20" alt="Menu Icon">On-Premise Teams Management
                      </a>
                      <a href="<?php echo SITE_URL; ?>/field-service-management-software">
                      <img loading="lazy" src="<?php echo SITE_URL; ?>/assests/menu-images/sol-icon07.svg" width="20"
                        height="20" alt="Menu Icon">Field Service Management
                      </a>
                      <a href="<?php echo SITE_URL; ?>/insights-for-business-analytics">
                      <img loading="lazy" src="<?php echo SITE_URL; ?>/assests/menu-images/sol-icon08.svg" width="20"
                        height="20" alt="Menu Icon">Insights For Business Analytics
                      </a>
                      <a href="/use-case" class="view-more">View More</a>
                    </div>
                  </div>
                  <div class="col-menu">
                    <h3><a href="/industry">Industries</a></h3>
                    <div class="menu-box">
                      <a href="<?php echo SITE_URL; ?>/industry/software-development">
                      <img loading="lazy" src="<?php echo SITE_URL; ?>/assests/menu-images/sol-icon09.svg" width="20"
                        height="20" alt="Menu Icon">Software Development
                      </a>
                      <a href="<?php echo SITE_URL; ?>/industry/agency">
                      <img loading="lazy" src="<?php echo SITE_URL; ?>/assests/menu-images/sol-icon10.svg" width="20"
                        height="20" alt="Menu Icon">Agency
                      </a>
                      <a href="<?php echo SITE_URL; ?>/industry/staffing">
                      <img loading="lazy" src="<?php echo SITE_URL; ?>/assests/menu-images/sol-icon11.svg" width="20"
                        height="20" alt="Menu Icon">Staffing & Recuriting
                      </a>
                      <a href="<?php echo SITE_URL; ?>/industry/bpo">
                      <img loading="lazy" src="<?php echo SITE_URL; ?>/assests/menu-images/sol-icon12.svg" width="20"
                        height="20" alt="Menu Icon">BPO & KPO
                      </a>
                      <a href="<?php echo SITE_URL; ?>/contact-centers">
                      <img loading="lazy" src="<?php echo SITE_URL; ?>/assests/menu-images/sol-icon13.svg" width="20"
                        height="20" alt="Menu Icon">CX & Contact Center
                      </a>
                      <a href="/industry" class="view-more">View More</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </li>
        <li id="apps" class="dropdown">
        <a href="#" onclick="showAppsItem();">Apps & Integrations</a>
        <div class="full-menu">
        <div class="container">
        <div class="flex_row">
        <div class="col-menu">
        <h3>Web</h3>
        <div class="menu-box">
        <a href="<?php echo SITE_URL; ?>/browser-extension">
        <img loading="lazy" src="<?php echo SITE_URL; ?>/assests/menu-images/app-icon01.svg" width="20"
          height="20" alt="Menu Icon">Browser Extension
        </a>
        <a href="<?php echo SITE_URL; ?>/chromebook-devices">
        <img loading="lazy" src="<?php echo SITE_URL; ?>/assests/menu-images/app-icon02.svg" width="20"
          height="20" alt="Menu Icon">Chromebook
        </a>
        </div>
        </div>
        <div class="col-menu">
        <h3>Desktop</h3>
        <div class="menu-box">
        <a href="<?php echo SITE_URL; ?>/mac">
        <img loading="lazy" src="<?php echo SITE_URL; ?>/assests/menu-images/app-icon03.svg" width="20"
          height="20" alt="Menu Icon">Mac
        </a>
        <a href="<?php echo SITE_URL; ?>/windows">
        <img loading="lazy" src="<?php echo SITE_URL; ?>/assests/menu-images/app-icon04.svg" width="20"
          height="20" alt="Menu Icon">Windows
        </a>
        <a href="<?php echo SITE_URL; ?>/linux">
        <img loading="lazy" src="<?php echo SITE_URL; ?>/assests/menu-images/app-icon05.svg" width="20"
          height="20" alt="Menu Icon">Linux
        </a>
        </div>
        </div>
        <div class="col-menu">
        <h3>Mobile</h3>
        <div class="menu-box">
        <a href="<?php echo SITE_URL; ?>/iphone">
        <img loading="lazy" src="<?php echo SITE_URL; ?>/assests/menu-images/app-icon06.svg" width="20"
          height="20" alt="Menu Icon">iOS
        </a>
        <a href="<?php echo SITE_URL; ?>/android">
        <img loading="lazy" src="<?php echo SITE_URL; ?>/assests/menu-images/app-icon07.svg" width="20"
          height="20" alt="Menu Icon">Android
        </a>
        </div>
        </div>
        <div class="col-menu">
        <h3>Integrations</h3>
        <div class="menu-box">
        <a href="<?php echo SITE_URL; ?>/iphone">
        <img loading="lazy" src="<?php echo SITE_URL; ?>/assests/menu-images/app-icon08.svg" width="20"
          height="20" alt="Menu Icon">Zoho
        </a>
        <a href="<?php echo SITE_URL; ?>/android">
        <img loading="lazy" src="<?php echo SITE_URL; ?>/assests/menu-images/app-icon09.svg" width="20"
          height="20" alt="Menu Icon">Trello
        </a>
        <a href="<?php echo SITE_URL; ?>/android">
        <img loading="lazy" src="<?php echo SITE_URL; ?>/assests/menu-images/app-icon10.svg" width="20"
          height="20" alt="Menu Icon">AWS
        </a>
        <a href="<?php echo SITE_URL; ?>/android">
        <img loading="lazy" src="<?php echo SITE_URL; ?>/assests/menu-images/app-icon11.svg" width="20"
          height="20" alt="Menu Icon">SMTP
        </a>
        </div>
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
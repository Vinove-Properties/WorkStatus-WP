<header class="site__header" id="masthead">
  <div class="container">
    <div id="topnav" class="top_nav">
      <div class="logo"> <a href="/" title="Workstatus">
        <picture>
          <source type="image/webp" srcset="https://www.Workstatus.io/assests/images/logo.webp">
          <source type="image/png" srcset="https://www.Workstatus.io/assests/images/logo.png">
          <img src="https://www.Workstatus.io/assests/images/logo.png" alt="site logo" width="180" height="36"> </picture>
        </a> </div>
      <button  class="nav_btn" onclick="navFunction();"> <span>&#9776;</span> <span>&#10005;</span> </button>
      <nav class="site_nav">
        <ul>
          <li id="productsitem" class="dropdown dropdown-2">
            <a href="#" onclick="showProductItem();">Products</a>
            <ul>
              <li><a href="/time">Workstatus Time</a></li>
              <li><a href="/desk">Workstatus Desk</a></li>
              <li><a href="/tasks">Workstatus Tasks</a></li>
              <li><a href="/field-service-management-software">Workstatus Field</a></li>
            </ul>
          </li>
          <li id="featuresitem" class="dropdown dropdown-2">
            <a href="/features">Features</a><span class="trigger" onclick="showFeatureItem();"></span>
            <ul>
              <li><a href="/best-time-tracking-software-online">Time Tracking</a></li>
              <li><a href="/geofence-time-clock-software-online">Geofencing</a></li>
              <li><a href="/best-employee-monitoring-software-online">Employee Monitoring</a></li>
              <li><a href="/best-gps-time-tracking-software-online">GPS Tracking</a></li>
              <li><a href="/best-project-cost-management-software-online">Project Budgeting</a></li>
              <li><a href="/best-time-report-software-online">Detailed Reporting</a></li>
              <li><a href="/best-employee-productivity-cloud-software">Productivity Measurement</a></li>
              <li><a href="/best-employee-timesheets-cloud-software">Online Timesheets</a></li>
              <li><a href="/best-attendance-tracking-software">Attendance Management</a></li>
              <li><a href="/best-facial-recognition-software">Selfie Validation</a></li>
              <li><a href="/best-employee-task-scheduling-software">Employee Scheduling</a></li>
              <li><a href="/best-online-invoicing-software">Online Invoicing</a></li>
            </ul>
          </li>
          <li id="howitworksitem" class="dropdown mega-menu"><a href="#" onclick="showHowitworkItem();">How it works</a>
              <div class="mega-menu-box">
                <div class="solution-menu-items">
                  <h4>Solutions</h4>
                  <ul>
                    <li><a href="/solutions/data-loss-prevention-monitoring">Data Loss Prevention</a></li>
                    <li><a href="/solutions/employee-productivity-attendance-monitoring">Employee Monitoring</a></li>
                    <li><a href="/solutions/business-productivity-monitoring">Business Intelligence Dashboard </a></li>
                    <li><a href="/solutions/remote-employee-actvity-monitoring-attendance">Remote Employee Monitoring</a></li>
                    <li><a href="/solutions/user-activity-attendance-monitoring">User Activity Monitoring</a></li>
                    <li><a href="/solutions/workforce-attendance-activity-monitoring">Privileged User Monitoring</a></li>
                    <li><a href="/solutions/kids-students-activity-monitoring">Students Time Tracking & Monitoring</a></li>
                    <li><a href="/solutions/productivity-attendance-monitoring">Employee Productivity Tracking</a></li>
                    <li><a href="/solutions/workforce-management-software">Workforce Management Software</a></li>
                    <li><a href="/solutions/time-attendance-tracking-software">Time and Attendance Management</a></li>
                  </ul>
                </div>
                  <div class="industry-menu-items">
                  <h4>For Industry</h4>
                  <ul id="industryitem">
                    <li><a href="/industry/accounting">Accounting</a></li>
                    <li><a href="/industry/agency">Agency</a></li>
                    <li><a href="/industry/architects-and-engineers">Architects & Engineer</a></li>
                    <li><a href="/industry/attorney">Attorney</a></li>
                    <li><a href="/industry/consultant">Consultant</a></li>
                    <li><a href="/industry/construction">Construction</a></li>
                    <li><a href="/industry/design">Design</a></li>
                    <li><a href="/industry/e-commerce">E-Commerce</a></li>
                    <li><a href="/industry/healthcare">Healthcare</a></li>
                    <li><a href="/industry/time-tracking-app-for-janitorial-services">Janitorial Services</a></li>
                    <li><a href="/industry/landscaping">Landscaping</a></li>
                    <li><a href="/industry/manufacturing">Manufacturing</a></li>
                    <li><a href="/industry/real-estate">Real Estate</a></li>
                    <li><a href="/industry/software-development">Software Development</a></li>
                  </ul>
                </div>
                <div class="team-menu-items">
                   <h4>For Teams</h4>
                  <ul>
                    <li><a href="/freelance-time-tracking-cloud-software">Freelancer</a></li>
                    <li><a href="/field-service-management-software">Field Services</a></li>
                    <li><a href="/remote-team-management">Remote Work</a></li>
                  </ul>
                </div>
              </div>
          </li>
          <li id="whyWorkstatus" class="dropdown dropdown-2"><a href="#" onclick="showWorkstatusItem();">Why Workstatus</a>
            <ul>
              <li><a href="/how-tracking-works">What Workstatus Tracks</a></li>
              <li><a href="/reviews">Reviews</a></li>
              <li><a href="#">Customer Stories</a></li>
              <li><a href="https://support.Workstatus.io/en/">Support</a></li>
              <li><a href="/blog">Our Blog</a></li>
              <li><a href="/about">About Workstatus</a></li>
            </ul>
          </li>
          <li><a href="/pricing">Pricing</a></li>
          <li class="btn"><a href="<?php echo $RegLink; ?>">Free 14 Day Trial</a></li>
          <li class="login"><a href="<?php echo $LogLink; ?>">Log in</a></li>
        </ul>
      </nav>
    </div>
  </div>
</header>

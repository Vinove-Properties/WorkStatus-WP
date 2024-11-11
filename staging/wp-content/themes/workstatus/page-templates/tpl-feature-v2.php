<?php 
/* 
Template Name: Feature v2.0 Template
Author : Nitin Baluni
*/ 
get_header();
global $ws_ctas, $RegLink, $LogLink, $post;
?>
<main class="site__content">
<section class="featuredt-banner">
  <div class="container">
    <div class="inner-wrap">
      <?php the_content(); ?>
      <div class="actionBtn"><?php echo cmnBannerCta(); ?></div>
      <?php require_once get_template_directory().'/common/available-device.php'; ?>
      <?php //get_template_part('common/banner', 'reviews'); ?>
      <?php require_once get_template_directory(). '/common/partners.php'; ?>              
      <div class="video-wrap">
        <div class="videoSc" id="has-yt-video">
          <div class="inner">
            <div class="topVideo srp-1">
              <div id="myDIV" class="contbox2">
                <div class="videoWrapper">
                  <iframe id="video" class="videoIframe" allowfullscreen="" data-src="https://www.youtube.com/embed/HKKWmXb17zo?enablejsapi=1&amp;html5=1&amp;mute=1">
                  </iframe>
                  <button class="videoPoster lazy-background wsbg-cover wsbg-img" data-src="https://www.workstatus.io/wp-content/uploads/2024/07/tm-banner.png" id="play-button" data-loaded="true" style="background-image: url(&quot;https://www.workstatus.io/wp-content/uploads/2024/07/tm-banner.png&quot;);">Play video
                  <span class="playicon"></span></button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="datadrive-section">
  <div class="container">
    <div class="top-section">
      <h6><span class="bg-purple">Data Driving Results</span></h6>
      <h2>Smart Decisions for Business Growth: Plan, Analyze, and Execute</h2>
      <p>Stay one step ahead always, manage & track your workforce & workload, analyze data and ensure business growth.</p>
    </div>
    <div class="data-row">
      <div class="flex-2">
        <div class="box">
          <h3>Without Workstatus</h3>
          <ul>
            <li>Inefficient Time Tracking</li>
            <li>Real-Time Project / Task Monitoring</li>
            <li>Difficulties in Managing Remote Teams</li>
            <li>Poor Resource Allocation Impacting Outcomes</li>
          </ul>
        </div>
      </div>
      <div class="flex-2">
        <div class="box cross">
          <h3>With Workstatus</h3>
          <ul>
            <li>Automated timekeeping reduces manual errors</li>
            <li>Smart dashboards provide instant project</li>
            <li>Tools track and analyze remote employee activities </li>
            <li>Optimize workforce deployment based on insights</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="client-img-section padding-t0">
  <div class="container">
    <div class="dis-flex why-ws">
      <div class="flex-2 left-box">
        <h2>Why Workstatus</h2>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum </p>
        <ul>
          <li>Fast-Track IT Professional Transformation</li>
          <li>Time Optimization for Success</li>
          <li>One Hour Daily for Future Success</li>
          <li>Resource and workload optimization</li>
        </ul>
        <div class="button-common margin-t-40">
          <?php echo wsDemoCta(); ?>
        </div>
      </div>
      <div class="flex-2 right-box">
        <div class="client-section">
          <div class="client-row">
            <div class="client-stack award-animate-slide-to-left hover:pause">
              <ul>
                <li>
                  <picture class="awimg">
                    <img src="<?php bloginfo('template_url'); ?>/assests/images/awlogo-01.svg" alt="" width="130" height="29">
                  </picture>
                  <div class="star-rt">4.6 Excellent <img src="<?php bloginfo('template_url'); ?>/assests/images/4.6rate.svg" alt="Award" width="100" height="17"></div>
                  <p>Invoicera is a lifesaver! I always know who's paid and who owes me. It keeps my finances organized, saving me time and stress, especially at tax time.</p>
                </li>
                
                <li>
                  <picture class="awimg">
                    <img src="<?php bloginfo('template_url'); ?>/assests/images/awlogo-01.svg" alt="" width="130" height="29">
                  </picture>
                  <div class="star-rt">4.6 Excellent <img src="<?php bloginfo('template_url'); ?>/assests/images/4.6rate.svg" alt="Award" width="100" height="17"></div>
                  <p>Invoicera is a lifesaver! I always know who's paid and who owes me. It keeps my finances organized, saving me time and stress, especially at tax time.</p>
                </li>
                <li>
                  <picture class="awimg">
                    <img src="<?php bloginfo('template_url'); ?>/assests/images/awlogo-01.svg" alt="" width="130" height="29">
                  </picture>
                  <div class="star-rt">4.6 Excellent <img src="<?php bloginfo('template_url'); ?>/assests/images/4.6rate.svg" alt="Award" width="100" height="17"></div>
                  <p>Invoicera is a lifesaver! I always know who's paid and who owes me. It keeps my finances organized, saving me time and stress, especially at tax time.</p>
                </li>
                <li>
                  <picture class="awimg">
                    <img src="<?php bloginfo('template_url'); ?>/assests/images/awlogo-01.svg" alt="" width="130" height="29">
                  </picture>
                  <div class="star-rt">4.6 Excellent <img src="<?php bloginfo('template_url'); ?>/assests/images/4.6rate.svg" alt="Award" width="100" height="17"></div>
                  <p>Invoicera is a lifesaver! I always know who's paid and who owes me. It keeps my finances organized, saving me time and stress, especially at tax time.</p>
                </li>
                <li>
                  <picture class="awimg">
                    <img src="<?php bloginfo('template_url'); ?>/assests/images/awlogo-01.svg" alt="" width="130" height="29">
                  </picture>
                  <div class="star-rt">4.6 Excellent <img src="<?php bloginfo('template_url'); ?>/assests/images/4.6rate.svg" alt="Award" width="100" height="17"></div>
                  <p>Invoicera is a lifesaver! I always know who's paid and who owes me. It keeps my finances organized, saving me time and stress, especially at tax time.</p>
                </li>
                <li>
                  <picture class="awimg">
                    <img src="<?php bloginfo('template_url'); ?>/assests/images/awlogo-01.svg" alt="" width="130" height="29">
                  </picture>
                  <div class="star-rt">4.6 Excellent <img src="<?php bloginfo('template_url'); ?>/assests/images/4.6rate.svg" alt="Award" width="100" height="17"></div>
                  <p>Invoicera is a lifesaver! I always know who's paid and who owes me. It keeps my finances organized, saving me time and stress, especially at tax time.</p>
                </li>
                <li>
                  <picture class="awimg">
                    <img src="<?php bloginfo('template_url'); ?>/assests/images/awlogo-01.svg" alt="" width="130" height="29">
                  </picture>
                  <div class="star-rt">4.6 Excellent <img src="<?php bloginfo('template_url'); ?>/assests/images/4.6rate.svg" alt="Award" width="100" height="17"></div>
                  <p>Invoicera is a lifesaver! I always know who's paid and who owes me. It keeps my finances organized, saving me time and stress, especially at tax time.</p>
                </li>
                <li>
                  <picture class="awimg">
                    <img src="<?php bloginfo('template_url'); ?>/assests/images/awlogo-01.svg" alt="" width="130" height="29">
                  </picture>
                  <div class="star-rt">4.6 Excellent <img src="<?php bloginfo('template_url'); ?>/assests/images/4.6rate.svg" alt="Award" width="100" height="17"></div>
                  <p>Invoicera is a lifesaver! I always know who's paid and who owes me. It keeps my finances organized, saving me time and stress, especially at tax time.</p>
                </li>
                <li>
                  <picture class="awimg">
                    <img src="<?php bloginfo('template_url'); ?>/assests/images/awlogo-01.svg" alt="" width="130" height="29">
                  </picture>
                  <div class="star-rt">4.6 Excellent <img src="<?php bloginfo('template_url'); ?>/assests/images/4.6rate.svg" alt="Award" width="100" height="17"></div>
                  <p>Invoicera is a lifesaver! I always know who's paid and who owes me. It keeps my finances organized, saving me time and stress, especially at tax time.</p>
                </li>
                <li>
                  <picture class="awimg">
                    <img src="<?php bloginfo('template_url'); ?>/assests/images/awlogo-01.svg" alt="" width="130" height="29">
                  </picture>
                  <div class="star-rt">4.6 Excellent <img src="<?php bloginfo('template_url'); ?>/assests/images/4.6rate.svg" alt="Award" width="100" height="17"></div>
                  <p>Invoicera is a lifesaver! I always know who's paid and who owes me. It keeps my finances organized, saving me time and stress, especially at tax time.</p>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="award-sc margin-t-50">
          <ul>
            <li>
              <span class="aw-icon">
                <picture>
                  <img  loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/images/aw-01.svg" alt="Workstatus" width="111" height="70">
                </picture>
              </span>
              <span class="star"></span>
            </li>
            <li>
              <span class="aw-icon">
                <picture>
                  <img  loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/images/aw-02.svg" alt="Workstatus" width="20" height="20">
                </picture>
              </span>
              <span class="star"></span>
            </li>
            <li>
              <span class="aw-icon">
                <picture>
                  <img  loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/images/aw-03.svg" alt="Workstatus" width="92" height="32">
                </picture>
              </span>
              <span class="star"></span>
            </li>
            <li>
              <span class="aw-icon">
                <picture>
                  <img  loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/images/aw-04.svg" alt="Workstatus" width="111" height="70">
                </picture>
              </span>
              <span class="star"></span>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="feature-wrapper post-animation">
          <div class="item">
            <div class="container">
              <div class="top-section">
                <h6><span class="bg-purple">ENHANCED RELIABILITY</span></h6>
                <h2>Upscale Team Productivity with Automated Time Tracking</h2>
                <p>Automate your time-tracking processes to eliminate manual entries, significantly reduce errors, and reclaim valuable hours.</p>
              </div>
              <div class="feature-row">
                <div class="column-left">
                  <div class="text-column listing">
                    <h3>Automated Timesheets</h3>
                    <p>No more timesheet inaccuracies. Easily manage &amp; bill employee working hours with time tracking software.</p>
                    <ul>
                      <li>Accurate, effortless&nbsp; records</li>
                      <li>Pay employees correctly without hassle</li>
                    </ul>
                    <h3>Automated Timesheets</h3>
                    <p>No more timesheet inaccuracies. Easily manage &amp; bill employee working hours with time tracking software.</p>
                    <ul>
                      <li>Accurate, effortless&nbsp; records</li>
                      <li>Pay employees correctly without hassle</li>
                    </ul>
                    <h3>Automated Timesheets</h3>
                    <p>No more timesheet inaccuracies. Easily manage &amp; bill employee working hours with time tracking software.</p>
                    <ul>
                      <li>Accurate, effortless&nbsp; records</li>
                      <li>Pay employees correctly without hassle</li>
                    </ul>
                  </div>
                </div>
                <div class="column-right">
                  <picture>
                    <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/images/timetrack.png" alt="Workstatus" width="642" height="622">
                  </picture>
                </div>
              </div>
              <div class="button-common margin-t-80">
                <div class="cmn-democta">
                  <div><a href="javascript:void(0)" class="ctbtn" onclick="call_demows();" target="_self">Book A Demo</a></div>
                  <span class="devide">OR</span>
                  <div><a data-href="https://app.workstatus.io/auth/register/?pid=42&amp;type=monthly" href="javascript:void(0);" class="ctbtn nobg" onclick="return get_ws_signupform(this);">Start Free Trial</a>
                    <span class="nccr">No credit card required</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="container">
              <div class="top-section">
                <h6><span class="bg-purple">ENHANCED RELIABILITY</span></h6>
                <h2>Upscale Team Productivity with Automated Time Tracking</h2>
                <p>Automate your time-tracking processes to eliminate manual entries, significantly reduce errors, and reclaim valuable hours.</p>
              </div>
              <div class="feature-row">
                <div class="column-left">
                  <div class="text-column listing">
                    <h3>Automated Timesheets</h3>
                    <p>No more timesheet inaccuracies. Easily manage &amp; bill employee working hours with time tracking software.</p>
                    <ul>
                      <li>Accurate, effortless&nbsp; records</li>
                      <li>Pay employees correctly without hassle</li>
                    </ul>
                    <h3>Automated Timesheets</h3>
                    <p>No more timesheet inaccuracies. Easily manage &amp; bill employee working hours with time tracking software.</p>
                    <ul>
                      <li>Accurate, effortless&nbsp; records</li>
                      <li>Pay employees correctly without hassle</li>
                    </ul>
                    <h3>Automated Timesheets</h3>
                    <p>No more timesheet inaccuracies. Easily manage &amp; bill employee working hours with time tracking software.</p>
                    <ul>
                      <li>Accurate, effortless&nbsp; records</li>
                      <li>Pay employees correctly without hassle</li>
                    </ul>
                  </div>
                </div>
                <div class="column-right">
                  <picture>
                    <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/images/timetrack.png" alt="Workstatus" width="642" height="622">
                  </picture>
                </div>
              </div>
              <div class="button-common margin-t-80">
                <div class="cmn-democta">
                  <div><a href="javascript:void(0)" class="ctbtn" onclick="call_demows();" target="_self">Book A Demo</a></div>
                  <span class="devide">OR</span>
                  <div><a data-href="https://app.workstatus.io/auth/register/?pid=42&amp;type=monthly" href="javascript:void(0);" class="ctbtn nobg" onclick="return get_ws_signupform(this);">Start Free Trial</a>
                    <span class="nccr">No credit card required</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        
        <?php get_template_part('common/cmn', 'usps'); ?>

        <section class="feature-wrapper post-animation">
          <div class="item">
            <div class="container">
              <div class="top-section">
                <h6><span class="bg-purple">ENHANCED RELIABILITY</span></h6>
                <h2>Upscale Team Productivity with Automated Time Tracking</h2>
                <p>Automate your time-tracking processes to eliminate manual entries, significantly reduce errors, and reclaim valuable hours.</p>
              </div>
              <div class="feature-row">
                <div class="column-left">
                  <div class="text-column listing">
                    <h3>Automated Timesheets</h3>
                    <p>No more timesheet inaccuracies. Easily manage &amp; bill employee working hours with time tracking software.</p>
                    <ul>
                      <li>Accurate, effortless&nbsp; records</li>
                      <li>Pay employees correctly without hassle</li>
                    </ul>
                    <h3>Automated Timesheets</h3>
                    <p>No more timesheet inaccuracies. Easily manage &amp; bill employee working hours with time tracking software.</p>
                    <ul>
                      <li>Accurate, effortless&nbsp; records</li>
                      <li>Pay employees correctly without hassle</li>
                    </ul>
                    <h3>Automated Timesheets</h3>
                    <p>No more timesheet inaccuracies. Easily manage &amp; bill employee working hours with time tracking software.</p>
                    <ul>
                      <li>Accurate, effortless&nbsp; records</li>
                      <li>Pay employees correctly without hassle</li>
                    </ul>
                  </div>
                </div>
                <div class="column-right">
                  <picture>
                    <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/images/timetrack.png" alt="Workstatus" width="642" height="622">
                  </picture>
                </div>
              </div>
              <div class="button-common margin-t-80">
                <div class="cmn-democta">
                  <div><a href="javascript:void(0)" class="ctbtn" onclick="call_demows();" target="_self">Book A Demo</a></div>
                  <span class="devide">OR</span>
                  <div><a data-href="https://app.workstatus.io/auth/register/?pid=42&amp;type=monthly" href="javascript:void(0);" class="ctbtn nobg" onclick="return get_ws_signupform(this);">Start Free Trial</a>
                    <span class="nccr">No credit card required</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="container">
              <div class="top-section">
                <h6><span class="bg-purple">ENHANCED RELIABILITY</span></h6>
                <h2>Upscale Team Productivity with Automated Time Tracking</h2>
                <p>Automate your time-tracking processes to eliminate manual entries, significantly reduce errors, and reclaim valuable hours.</p>
              </div>
              <div class="feature-row">
                <div class="column-left">
                  <div class="text-column listing">
                    <h3>Automated Timesheets</h3>
                    <p>No more timesheet inaccuracies. Easily manage &amp; bill employee working hours with time tracking software.</p>
                    <ul>
                      <li>Accurate, effortless&nbsp; records</li>
                      <li>Pay employees correctly without hassle</li>
                    </ul>
                    <h3>Automated Timesheets</h3>
                    <p>No more timesheet inaccuracies. Easily manage &amp; bill employee working hours with time tracking software.</p>
                    <ul>
                      <li>Accurate, effortless&nbsp; records</li>
                      <li>Pay employees correctly without hassle</li>
                    </ul>
                    <h3>Automated Timesheets</h3>
                    <p>No more timesheet inaccuracies. Easily manage &amp; bill employee working hours with time tracking software.</p>
                    <ul>
                      <li>Accurate, effortless&nbsp; records</li>
                      <li>Pay employees correctly without hassle</li>
                    </ul>
                  </div>
                </div>
                <div class="column-right">
                  <picture>
                    <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/images/timetrack.png" alt="Workstatus" width="642" height="622">
                  </picture>
                </div>
              </div>
              <div class="button-common margin-t-80">
                <div class="cmn-democta">
                  <div><a href="javascript:void(0)" class="ctbtn" onclick="call_demows();" target="_self">Book A Demo</a></div>
                  <span class="devide">OR</span>
                  <div><a data-href="https://app.workstatus.io/auth/register/?pid=42&amp;type=monthly" href="javascript:void(0);" class="ctbtn nobg" onclick="return get_ws_signupform(this);">Start Free Trial</a>
                    <span class="nccr">No credit card required</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
<section class="stay-control bg-light post-animation">
          <div class="container">
            <div class="top-section">
              <h6><span class="bg-purple">STAY IN CONTROL</span></h6>
              <h2>Who uses Workstatus employee time tracking software?</h2>
              <p>Effectively oversee the time and contributions of remote and hybrid teams, ensuring balanced workloads, seamless collaboration, and enhanced coordination across various locations.</p>
            </div>
            <div class="cards-container">
              <div class="card-content">
                <div class="card">
                  <a class="card-wrap" href="#">
                    <div class="icon">
                      <picture>
                        <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/images/con-01.svg" alt="Workstatus" width="46" height="46">
                      </picture>
                    </div>
                    <div class="title">Accounting</div>
                  </a>
                </div>
                <div class="card">
                  <a class="card-wrap" href="#">
                    <div class="icon">
                      <picture>
                        <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/images/con-02.svg" alt="Workstatus" width="46" height="46">
                      </picture>
                    </div>
                    <div class="title">Legal</div>
                  </a>
                </div>
                <div class="card">
                  <a class="card-wrap" href="#">
                    <div class="icon">
                      <picture>
                        <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/images/con-03.svg" alt="Workstatus" width="46" height="46">
                      </picture>
                    </div>
                    <div class="title">Manufacturing</div>
                  </a>
                </div>
                <div class="card">
                  <a class="card-wrap" href="#">
                    <div class="icon">
                      <picture>
                        <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/images/con-04.svg" alt="Workstatus" width="46" height="46">
                      </picture>
                    </div>
                    <div class="title">Janitorial Services</div>
                  </a>
                </div>
                <div class="card">
                  <a class="card-wrap" href="#">
                    <div class="icon">
                      <picture>
                        <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/images/con-05.svg" alt="Workstatus" width="46" height="46">
                      </picture>
                    </div>
                    <div class="title">Construction</div>
                  </a>
                </div>
                <div class="card">
                  <a class="card-wrap" href="#">
                    <div class="title">Check all <br>industries</div>
                    <div class="icon">
                    </div>
                  </a>
                </div>
              </div>
              <div class="card-image">
                <picture class="page active" id="p1">
                  <source type="image/webp" srcset="<?php bloginfo('template_url'); ?>/assests/images/stay-image.png">
                  <source type="image/png" srcset="<?php bloginfo('template_url'); ?>/assests/images/stay-image.png">
                  <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/images/stay-image.png" alt="Stay Control" width="546" height="268">
                </picture>
              </div>
            </div>
          </div>
        </section>
        <section class="trackEm post-animation">
  <div class="container">
    <div class="top-section">
      <h6><span class="bg-purple">ALL-IN-ONE TIME TRACKER</span></h6>
      <h2>A Powerful Time Tracker For All Your Tracking Needs</h2>
    </div>
    <div class="trackRow align-center">
      <div class="trackImg">
        <picture>
          <source type="image/webp" srcset="<?php bloginfo('template_url'); ?>/assests/images/demo.webp">
          <source type="image/png" srcset="<?php bloginfo('template_url'); ?>/assests/images/demo.png">
          <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/images/demo.png" alt="Employee Hours" width="600" height="732">
        </picture>
      </div>
      <div class="trackContent">
        <div class="row">
          <h3><i></i>Timesheet Approvals</h3>
          <p>Managers can review and approve timesheets of employees. Better team management leads to better outputs.</p>
        </div>
        <div class="row">
          <h3><i></i>Reminders To Track Time</h3>
          <p>Set automated reminders to ensure you track time throughout the day, including breaks and idle time.</p>
        </div>
        <div class="row">
          <h3><i></i>Idle Time-out</h3>
          <p>Workstatus automatically tracks employees’ idle time on the machine and sends them a personal reminder to either let it remain off or add an idle time entry with a note.
          </p>
        </div>
        <div class="row">
          <h3><i></i>Tracks Time-offs, Holidays &amp; Breaks</h3>
          <p>Employees can request time off, leave, or plan a vacation. Managers can view, accept or reject the requests. Using this data streamline your shift planning &amp; assigning projects for on-time deliveries
          </p>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="column-section bg-light post-animation">
<div class="container">
  <div class="top-section">
    <h6><span class="bg-purple">For All Workplaces</span></h6>
    <h2>Collaborate Seamlessly Wherever You Work</h2>
  </div>
  <div class="ws-row">
    <div class="flex-4">
      <div class="box">
        <picture>
          <source type="image/webp" srcset="<?php bloginfo('template_url'); ?>/assests/images/remote-work.png">
          <source type="image/png" srcset="<?php bloginfo('template_url'); ?>/assests/images/remote-work.png">
          <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/images/remote-work.png" alt="Workstatus" width="46" height="46">
        </picture>
        <div class="content-area">
          <h3>Remote Work</h3>
          <ul>
            <li>Monitor employee activity &amp; ensure accountability</li>
            <li>Foster a connected team culture regardless of location</li>
            <li>Foster a connected team culture regardless of location</li>
          </ul>
        </div>
        <a href="#" class="is-arrow">Explore More</a>
      </div>
    </div>
    <div class="flex-4">
      <div class="box">
        <picture>
          <source type="image/webp" srcset="<?php bloginfo('template_url'); ?>/assests/images/remote-work.png">
          <source type="image/png" srcset="<?php bloginfo('template_url'); ?>/assests/images/remote-work.png">
          <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/images/remote-work.png" alt="Workstatus" width="46" height="46">
        </picture>
        <div class="content-area">
          <h3>Remote Work</h3>
          <ul>
            <li>Monitor employee activity &amp; ensure accountability</li>
            <li>Foster a connected team culture regardless of location</li>
            <li>Foster a connected team culture regardless of location</li>
          </ul>
        </div>
        <a href="#" class="is-arrow">Explore More</a>
      </div>
    </div>
    <div class="flex-4">
      <div class="box">
        <picture>
          <source type="image/webp" srcset="<?php bloginfo('template_url'); ?>/assests/images/remote-work.png">
          <source type="image/png" srcset="<?php bloginfo('template_url'); ?>/assests/images/remote-work.png">
          <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/images/remote-work.png" alt="Workstatus" width="46" height="46">
        </picture>
        <div class="content-area">
          <h3>Remote Work</h3>
          <ul>
            <li>Monitor employee activity &amp; ensure accountability</li>
            <li>Foster a connected team culture regardless of location</li>
            <li>Foster a connected team culture regardless of location</li>
          </ul>
        </div>
        <a href="#" class="is-arrow">Explore More</a>
      </div>
    </div>
    <div class="flex-4">
      <div class="box">
        <picture>
          <source type="image/webp" srcset="<?php bloginfo('template_url'); ?>/assests/images/remote-work.png">
          <source type="image/png" srcset="<?php bloginfo('template_url'); ?>/assests/images/remote-work.png">
          <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/images/remote-work.png" alt="Workstatus" width="46" height="46">
        </picture>
        <div class="content-area">
          <h3>Remote Work</h3>
          <ul>
            <li>Monitor employee activity &amp; ensure accountability</li>
            <li>Track <a href="#">employee location,</a> monitor task progress, and ensure safety protocols are followed</li>
            <li>Streamline communication and optimize field operations </li>
          </ul>
        </div>
        <a href="#" class="is-arrow">Explore More</a>
      </div>
    </div>
  </div>
  <div class="button-common margin-t-80">
    <div class="cmn-democta">
      <div><a href="javascript:void(0)" class="ctbtn" onclick="call_demows();" target="_self">Book A Demo</a></div>
      <span class="devide">OR</span>
      <div><a data-href="https://app.workstatus.io/auth/register/?pid=42&amp;type=monthly" href="javascript:void(0);" class="ctbtn nobg" onclick="return get_ws_signupform(this);">Start Free Trial</a>
        <span class="nccr">No credit card required</span>
      </div>
    </div>
  </div>
</div>
</section>
<section class="compare-projects post-animation">
          <div class="container">
            <div class="top-section">
              <h6><span class="bg-purple">STAY IN CONTROL</span></h6>
              <h2>Compare Projects</h2>
              <p>Say goodbye to scattered tasks and documents. With Projecto, you'll be able to focus on what matters most - getting things done.</p>
            </div>
            <div class="compare-tabs">
              <div class="tbbtn">Hubstaff</div>
              <div class="tbbtn">Desktime</div>
              <div class="tbbtn">Time Doctor</div>
              <div class="tbbtn">Insightful</div>
              <div class="tbbtn">we360</div>
              <div class="tbbtn">Activ Trak</div>
              <div class="tbbtn">Teramind</div>
              <div class="tbbtn">Monitask</div>
              <div class="tbbtn">TimeChamp</div>
              <div class="tbbtn">Everhour</div>
              <div class="tbbtn">Clockify</div>
              <div class="tbbtn">Toggl</div>
              <div class="tbbtn">Truein</div>
              <div class="tbbtn">Zoho People</div>
              <div class="tbbtn">Apploye</div>
              <div class="tbbtn">Harvest</div>
              <div class="tbbtn">Trackolap</div>
              <div class="tbbtn">Myhours</div>
              <div class="tbbtn">Handdy</div>
              <div class="tbbtn">Empmonitor</div>
            </div>
            <div class="features-container">
              <div class="compare-column">
                <div class="tool-col comp-logo comphead">Compare features</div>
                <div class="tool-col">Task Management</div>
                <div class="tool-col">Issue / Bug Management</div>
                <div class="tool-col">Selfie validation with geofence</div>
                <div class="tool-col">Live Location Tracking</div>
                <div class="tool-col">Shift Scheduling</div>
                <div class="tool-col">Leave Management</div>
                <div class="tool-col">Set Office Locations</div>
                <div class="tool-col">Time Tracking</div>
                <div class="tool-col">Productivity Monitoring</div>
                <div class="tool-col">Team Screenshots</div>
                <div class="tool-col comprice">Pricing</div>
              </div>
              <div class="compare-column">
                <div class="tool-col comp-logo">
                  <picture><img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/images/complogo-01.svg" alt="" width="125" height="17"></picture>
                  <span class="price active">$13 </span>
                </div>
                <div class="tool-col"><i class="check-icon"></i></div>
                <div class="tool-col"><i class="check-icon"></i></div>
                <div class="tool-col"><i class="check-icon"></i></div>
                <div class="tool-col"><i class="check-icon"></i></div>
                <div class="tool-col"><i class="check-icon"></i></div>
                <div class="tool-col"><i class="check-icon"></i></div>
                <div class="tool-col"><i class="check-icon"></i></div>
                <div class="tool-col"><i class="check-icon"></i></div>
                <div class="tool-col"><i class="check-icon"></i></div>
                <div class="tool-col"><i class="check-icon"></i></div>
                <div class="tool-col comprice"><span class="btn active">$15</span><span class="small-font">(Per user / Month)</span>
                  <a href="#" class="knowmre">Know More</a>
                </div>
              </div>
              <div class="compare-column">
                <div class="tool-col comp-logo">
                  <picture><img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/images/complogo-02.svg" alt="" width="68" height="22"></picture>
                  <span class="price">$13 </span>
                </div>
                <div class="tool-col"><i class="check-icon"></i></div>
                <div class="tool-col"><i class="check-icon"></i></div>
                <div class="tool-col"><i class="check-icon"></i></div>
                <div class="tool-col"><i class="cross-icon"></i></div>
                <div class="tool-col"><i class="check-icon"></i></div>
                <div class="tool-col"><i class="check-icon"></i></div>
                <div class="tool-col"><i class="check-icon"></i></div>
                <div class="tool-col"><i class="cross-icon"></i></div>
                <div class="tool-col"><i class="check-icon"></i></div>
                <div class="tool-col"><i class="check-icon"></i></div>
                <div class="tool-col comprice"><span class="btn">$15</span><span class="small-font">(Per user / Month)</span>
                  <a href="#" class="knowmre">Know More</a>
                </div>
              </div>
              <div class="compare-column">
                <div class="tool-col comp-logo">
                  <picture><img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/images/complogo-03.svg" alt="" width="50" height="22"></picture>
                  <span class="price">$13 </span>
                </div>
                <div class="tool-col"><i class="check-icon"></i></div>
                <div class="tool-col"><i class="check-icon"></i></div>
                <div class="tool-col"><i class="check-icon"></i></div>
                <div class="tool-col"><i class="cross-icon"></i></div>
                <div class="tool-col"><i class="check-icon"></i></div>
                <div class="tool-col"><i class="check-icon"></i></div>
                <div class="tool-col"><i class="check-icon"></i></div>
                <div class="tool-col"><i class="cross-icon"></i></div>
                <div class="tool-col"><i class="check-icon"></i></div>
                <div class="tool-col"><i class="check-icon"></i></div>
                <div class="tool-col comprice"><span class="btn">$15</span><span class="small-font">(Per user / Month)</span>
                  <a href="#" class="knowmre">Know More</a>
                </div>
              </div>
              <div class="compare-column">
                <div class="tool-col comp-logo">
                  <picture><img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/images/complogo-04.svg" alt="" width="96" height="22"></picture>
                  <span class="price">$13 </span>
                </div>
                <div class="tool-col"><i class="check-icon"></i></div>
                <div class="tool-col"><i class="check-icon"></i></div>
                <div class="tool-col"><i class="check-icon"></i></div>
                <div class="tool-col"><i class="cross-icon"></i></div>
                <div class="tool-col"><i class="check-icon"></i></div>
                <div class="tool-col"><i class="check-icon"></i></div>
                <div class="tool-col"><i class="check-icon"></i></div>
                <div class="tool-col"><i class="cross-icon"></i></div>
                <div class="tool-col"><i class="check-icon"></i></div>
                <div class="tool-col"><i class="check-icon"></i></div>
                <div class="tool-col comprice"><span class="btn">$15</span><span class="small-font">(Per user / Month)</span>
                  <a href="#" class="knowmre">Know More</a>
                </div>
              </div>
              <div class="compare-column">
                <div class="tool-col comp-logo">
                  <picture><img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/images/complogo-06.svg" alt="" width="77" height="22"></picture>
                  <span class="price">$13 </span>
                </div>
                <div class="tool-col"><i class="check-icon"></i></div>
                <div class="tool-col"><i class="check-icon"></i></div>
                <div class="tool-col"><i class="check-icon"></i></div>
                <div class="tool-col"><i class="cross-icon"></i></div>
                <div class="tool-col"><i class="check-icon"></i></div>
                <div class="tool-col"><i class="check-icon"></i></div>
                <div class="tool-col"><i class="check-icon"></i></div>
                <div class="tool-col"><i class="cross-icon"></i></div>
                <div class="tool-col"><i class="check-icon"></i></div>
                <div class="tool-col"><i class="check-icon"></i></div>
                <div class="tool-col comprice"><span class="btn">$15</span><span class="small-font">(Per user / Month)</span>
                  <a href="#" class="knowmre">Know More</a>
                </div>
              </div>
              <div class="compare-column">
                <div class="tool-col comp-logo">
                  <picture><img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/images/complogo-07.svg" alt="" width="77" height="22"></picture>
                  <span class="price">$13 </span>
                </div>
                <div class="tool-col"><i class="check-icon"></i></div>
                <div class="tool-col"><i class="check-icon"></i></div>
                <div class="tool-col"><i class="check-icon"></i></div>
                <div class="tool-col"><i class="cross-icon"></i></div>
                <div class="tool-col"><i class="check-icon"></i></div>
                <div class="tool-col"><i class="check-icon"></i></div>
                <div class="tool-col"><i class="check-icon"></i></div>
                <div class="tool-col"><i class="cross-icon"></i></div>
                <div class="tool-col"><i class="check-icon"></i></div>
                <div class="tool-col"><i class="check-icon"></i></div>
                <div class="tool-col comprice"><span class="btn">$15</span><span class="small-font">(Per user / Month)</span>
                  <a href="#" class="knowmre">Know More</a>
                </div>
              </div>
              <div class="compare-column">
                <div class="tool-col comp-logo">
                  <picture><img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/images/complogo-08.svg" alt="" width="77" height="22"></picture>
                  <span class="price">$13 </span>
                </div>
                <div class="tool-col"><i class="check-icon"></i></div>
                <div class="tool-col"><i class="check-icon"></i></div>
                <div class="tool-col"><i class="check-icon"></i></div>
                <div class="tool-col"><i class="cross-icon"></i></div>
                <div class="tool-col"><i class="check-icon"></i></div>
                <div class="tool-col"><i class="check-icon"></i></div>
                <div class="tool-col"><i class="check-icon"></i></div>
                <div class="tool-col"><i class="cross-icon"></i></div>
                <div class="tool-col"><i class="check-icon"></i></div>
                <div class="tool-col"><i class="check-icon"></i></div>
                <div class="tool-col comprice"><span class="btn">$15</span><span class="small-font">(Per user / Month)</span>
                  <a href="#" class="knowmre">Know More</a>
                </div>
              </div>
            </div>
          </div>
        </section>
    <?php  
    //get_template_part('common/ws', 'pricing');
    $planCategory = get_post_meta( $post->ID, 'ws-pcat', true );
    get_template_part('common/pricing', 'v4.0', ['plan' => $planCategory]);
		$use_cases_section = get_field('use_cases_section');
		
		if( $use_cases_section ) :
		$isEnable = $use_cases_section['is_enabled'];
		if( $isEnable == "yes" ){ 
		?>
        <section class="case-section">
          <div class="container">
            <div class="top-section">
              <h6><span class="bg-white"><?php echo $use_cases_section['heading']; ?></span></h6>
              <h2><?php echo $use_cases_section['sub_heading']; ?></h2>
            </div>
            <div class="flex_row justify-center">
            <?php 
            if( $use_cases_section['content_repeater'] ){  $i = 7;
            foreach( $use_cases_section['content_repeater'] as $row ) {
            $image      = $row['image'];
            $active = ($i==7) ? "active" : "";
            ?> 
            <div class="column-three">
            <div class="thumb">
            <?php if( $image ){
                echo '<picture>
                '.getPxlWebpURL($image['ID']).'
                <source type="'.$image['mime_type'].'" srcset="'.$image['url'].'">
                <img loading="lazy" src="'.$image['url'].'" alt="'.$image['title'].'" width="'.$image['width'].'" 
                height="'.$image['height'].'"> 
                </picture>';
                } ?>
            </div>
            <div class="blog-title">
            <?php 
            if(isset($row['link']) && !empty($row['link'])){
              echo '<h3><a href="'.$row['link'].'">'.$row['heading'].'</a></h3>';
            }else{
              echo '<h3>'.$row['heading'].'</h3>';
            }
            ?>  
            <?php echo $row['content'];?>            
            </div>
            </div>
            <?php $i++; } } ?>			
            </div>

            <?php if( geoCTAcheck() === true ) : ?>
            <div class="mt70 text_center for-link-blue link-text">
              <div class="mt70 text_center btnSc">
                <!-- <p>Check How Workstatus™ Can Help<br> Your Business</p>
                <a href="<?php echo $RegLink; ?>"
                  class="primary_btn1 btnbg2"><?php echo $ws_ctas['cta_text']; ?></a>
                <small>No credit card required</small> -->
                <?php echo wsDemoCtaCP(); ?>
              </div>
            </div>
            <?php endif; ?>
          </div>
        </section>
		<?php } endif; ?>
    
    <section class="wsMobile whitetxt">
      <?php require_once get_template_directory() .'/common/workstatus-device.php';?>
    </section>
            
		<?php  
		$user_guide_section = get_field('user_guide_section');		
		if( $user_guide_section ) :
		$isEnable = $user_guide_section['is_enabled'];
		if( $isEnable == "yes" ){ 
		?>
        <section class="userguide">
          <div class="container">
            <div class="top-section">
              <h6><span class="bg-purple"><?php echo $user_guide_section['heading']; ?></span></h6>
              <h2><?php echo $user_guide_section['sub_heading']; ?></h2>
            </div>
            <div class="buyers-guide-section" id="div-buyer-guide">
              <div class="buyers-guide">
                <div class="buyers-guide-question" id="buyers-guide-question">
                  <ul class="question-list">
				  <?php 
					if( $user_guide_section['question_answer_repeater'] ){  $i = 1;
					foreach( $user_guide_section['question_answer_repeater'] as $row ) {
						$image      = (isset($row['image_'])) ? $row['image_'] : false;
						$active = ($i==1) ? "active" : "";
					?>
                    <li><a href="#ans_<?php echo $i; ?>" class="<?php echo $active; ?>"><?php echo $row['question']; ?></a>
                    </li>
                    <?php $i++; } } ?>
                  </ul>
                </div>
                <div class="buyers-guide-answer-part" id="buyers-guide-answer-part">

				<?php 
					if( $user_guide_section['question_answer_repeater'] ){  $i = 1;
					foreach( $user_guide_section['question_answer_repeater'] as $row ) {
						$image      = (isset($row['image_'])) ? $row['image_'] : false;
						$active = ($i==1) ? "active" : "";
					?>

                  <div class="buyers-guide-answer ans_<?php echo $i; ?>" id="ans_<?php echo $i; ?>">
                    <h3 class="guide-question"><?php echo $row['question']; ?>
                    </h3>
                    <div class="guide-answer">
					<?php echo $row['answer']; ?>
                    </div>
                  </div>
				  <?php $i++; } } ?>
                  
                </div>
              </div>
            </div>
          </div>
        </section>
		<?php } endif; ?>
            <?php if( !isMobile() ) : ?>
              <?php  
		$testimonials = get_field('testimonials', 'option');
		//echo '<pre>';
		//print_r($testimonials);
		if( $testimonials ) :
		$isEnable = $testimonials['is_enabled'];
		if( $isEnable == "yes" ){ 
		?>	
        <section class="testimonial testmHome ">
          <div class="container">
            <div class="top-section">
              <h6><span class="bg-white"><?php echo $testimonials['heading']; ?></span></h6>
              <h2><?php echo $testimonials['sub_headings']; ?></h2>
            </div>
            <div class="glider-testimonial">
              <div class="glider-contain">
                <div class="glider2">

				<?php 
					if( $testimonials['content_repeaters'] ){  $i = 7;
					foreach( $testimonials['content_repeaters'] as $row ) {
						$image      = $row['image'];
						$active = ($i==7) ? "active" : "";
					?>
				
                  <div>
                    <?php echo $row['content'];?>
                    
                    <div class="border">
                      <div class="triangle"> </div>
                    </div>
                    <div class="author-box">

					<?php if( $image ){
                            echo '<picture>
                            '.getPxlWebpURL($image['ID']).'
                            <source type="'.$image['mime_type'].'" srcset="'.$image['url'].'">
                            <img loading="lazy" src="'.$image['url'].'" alt="'.$image['title'].'" width="'.$image['width'].'" 
                            height="'.$image['height'].'"> 
                            </picture>';
                            } ?>

                      
                      <div class="author-content">
                        <p class="para_extrasmall white"><?php echo $row['name'];?></p>
                      </div>
                    </div>
                  </div>

                 
				  <?php $i++; } } ?>
                </div>
                <div role="tablist" class="dots2"></div>
              </div>
            </div>
          </div>
        </section>
		<?php } endif; ?>
            <?php endif; ?>

           <?php  
		$faq = get_field('faq');
		
		if( $faq ) :
		$isEnable = $faq['is_enabled'];
		if( $isEnable == "yes" ){ 
		?>
        <section class="faqsRow wfull for-heading-center">
          <div class="container">
            <div class="top-section">
              <h6><span class="bg-purple"><?php echo $faq['heading']; ?></span></h6>
              <h2><?php echo $faq['sub_heading']; ?></h2>
            </div>
            <div class="flex_row">
              <div itemscope itemtype="https://schema.org/FAQPage">
                <div class="column">

				<?php 
					if( $faq['question_answer_repeater'] ){  $i = 1;
					foreach( $faq['question_answer_repeater'] as $row ) {
						$image      = (isset($row['image_'])) ? $row['image_'] : false;
						$active = ($i <= 3) ? "open" : "";
						//echo $i;
					?>
                  <div class="faq-accordion-item-outer <?php echo $active; ?>" itemscope itemprop="mainEntity"
                    itemtype="https://schema.org/Question">
                    <h3 itemprop="name"><?php echo $row['question'];?>
                    </h3>
                    <div class="faq-accordion-content">
                      <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div itemprop="text">
						<?php echo $row['answer'];?>
                        </div>
                      </div>
                    </div>
                  </div>
				  <?php $i++; } } ?>
                  
                </div>
              </div>
            </div>
          </div>
        </section>
		<?php } endif; ?>

            
        <?php require_once get_template_directory() .'/common/blog.php'; ?>
        <?php get_template_part('common/home', 'testimonials'); ?>
        <?php require_once get_template_directory() .'/common/workstatus-journey.php';?>
        </main>
<?php get_footer(); ?>
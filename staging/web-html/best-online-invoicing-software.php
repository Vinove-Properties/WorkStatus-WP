<?php require_once 'common/inc/config.inc.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="alternate" href="<?php echo SITE_URL; ?>/best-online-invoicing-software" hreflang="en-us" />
    <link type="text/css" href="./assests/css/featureDetail-new.css" rel="preload stylesheet" as="style" />
    <?php require_once 'common/inc/header-files.php';?>
  </head>
  <body>
    <?php require_once 'common/inc/after-body-tag.php'; ?>
    <div class="body__wrapper">
    <div class="feature-header"><?php require_once 'common/menu-v4.php';?></div>
      <main class="site__content">
        <section class="inner-banner">
          <div class="container">
            <div class="inner-wrap">
              <h1> Online Invoicing And Billing Software </h1>
              <p>Manage all of your clients, projects, and invoices at a centralised location. With Workstatus online invoicing software, <br class="linebrk">spend less time managing your invoices and more time growing your business.</p>
              <!-- <ul class="list">
                <li>View Invoice Statuses On A Single Dashboard</li>
                <li>Generate Accurate Invoices In An Instant</li>
                <li>Manage Billable Hours With A Time Tracker</li>
              </ul> -->
              <div class="actionBtn">
                <?php if( geoCTAcheck() === true ) : ?>
                <div><a href="<?php echo $RegLink; ?>"
                  class="primary_btn1"><?php echo $ws_ctas['cta_text']; ?></a>
                  <small>No credit card required</small>
                </div>
                <?php endif; ?>
                <div><a href="javascript:void(0)" onclick="call_demows();" class="primary_btn2">Book A Demo</a>
                  <small>Get queries answered from experts</small>
                </div>
              </div>
              <?php require_once 'common/available-device.php';?>
              <?php require_once 'common/partners.php';?>
              <div class="video-wrap">
                <div class="videoSc" id="has-yt-video">
                  <div class="inner">
                    <div class="topVideo srp-12">
                      <div id="myDIV" class="contbox2">
                        <div class="videoWrapper">
                          <iframe id="video" class="videoIframe" allowfullscreen
                            data-src="https://www.youtube.com/embed/zsG3JljM0g4?enablejsapi=1&html5=1&mute=1">
                            </iframe>
                          <button class="videoPoster lazy-background" id="play-button">
                            Play video
                            <span class="playicon"></span>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="benifits-section">
          <div class="container">
            <div class="top-section">
              <h6><span class="bg-purple">All-In-One Tool</span></h6>
              <h2>Benefits of Online Invoicing & Billing Software</h2>
            </div>
            <div class="flex_row">
              <div class="column-three">
                <i class="icon34"></i>
                <h3>Accurate Invoicing</h3>
                <p>Bill your clients directly from the timesheets based on billable hours tracked</p>
              </div>
              <div class="column-three">
                <i class="icon35"></i>
                <h3>Track & Follow</h3>
                <p>Set payment alerts along with follow-ups and reminders in the case of non-payment</p>
              </div>
              <div class="column-three">
                <i class="icon36"></i>
                <h3>Proof of Work</h3>
                <p>Have proof of work of billable hours handy and available for clients to support the bills</p>
              </div>
            </div>
          </div>
        </section>
        <section class="middle-section feature-section">
          <div class="item">
            <div class="container">
              <div class="top-section">
                <h6><span class="bg-purple">Everything In One Place</span></h6>
                <h2>
                  Optimise Operational Costs With Online Invoice Generator 
                </h2>
                <p>Workstatus makes it easy to keep track of your expenses, reduce errors and improve the cash flow of your company. With a complete overview from a single platform, make informed decisions based on daily insights and help your company run more smoothly and effectively.</p>
              </div>
              <div id="active_Current_Tabs1">
                <div class="flex_row">
                  <div class="column-right">
                    <picture class="page active" id="p1">
                      <source type="image/webp" srcset="./assests/images/best-online-tab-01.webp">
                      <source type="image/png" srcset="./assests/images/best-online-tab-01.png">
                      <img loading="lazy" src="./assests/images/best-online-tab-01.png"
                        alt="Online Invoicing" width="620" height="520">
                    </picture>
                    <picture class="page" id="p2">
                      <source type="image/webp" srcset="./assests/images/best-online-tab-02.webp">
                      <source type="image/png" srcset="./assests/images/best-online-tab-02.png">
                      <img loading="lazy" src="./assests/images/best-online-tab-02.png"
                        alt="Online Invoicing" width="641" height="523">
                    </picture>
                    <picture class="page" id="p3">
                      <source type="image/webp" srcset="./assests/images/best-online-tab-03.webp">
                      <source type="image/png" srcset="./assests/images/best-online-tab-03.png">
                      <img loading="lazy" src="./assests/images/best-online-tab-03.png"
                        alt="Online Invoicing" width="618" height="535">
                    </picture>
                  </div>
                  <div class="column-left">
                    <div class="all-content">
                      <div class="text-column active" id="t1" data-section="active_Current_Tabs1">
                        <h3><i></i>Track Billable Time</h3>
                        <p>Track every minute and every client with advanced invoicing software. With our easy-to-use interface, stay on top of your billing, while keeping a close watch on all your clients, their details, case histories, and companies in one place. 
                        </p>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="./assests/images/best-online-tab-01.webp">
                          <source type="image/png" srcset="./assests/images/best-online-tab-01.png">
                          <img loading="lazy" src="./assests/images/best-online-tab-01.png"
                            alt="Online Invoicing" width="620" height="520">
                        </picture>
                      </div>
                    </div>
                    <div class="all-content">
                      <div class="text-column" id="t2" data-section="active_Current_Tabs1">
                        <h3><i></i>Quick Payments</h3>
                        <p>Make quicker invoice payments with <strong>online invoicing and billing software</strong>. By using a cloud-based invoicing and billing system save your hours by making quick payments and spend your precious time in being more productive. 
                        </p>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="./assests/images/best-online-tab-02.webp">
                          <source type="image/png" srcset="./assests/images/best-online-tab-02.png">
                          <img loading="lazy" src="./assests/images/best-online-tab-02.png"
                            alt="Online Invoicing" width="641" height="523">
                        </picture>
                      </div>
                    </div>
                    <div class="all-content">
                      <div class="text-column" id="t3" data-section="active_Current_Tabs1">
                        <h3><i></i>Manage Records</h3>
                        <p>Automatically update your payments records with a few clicks on your dashboard. Use online invoices as client contracts and allow your clients to pay online without spending more time to manage payments.
                        </p>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="./assests/images/best-online-tab-03.webp">
                          <source type="image/png" srcset="./assests/images/best-online-tab-03.png">
                          <img loading="lazy" src="./assests/images/best-online-tab-03.png"
                            alt="Online Invoicing" width="618" height="535">
                        </picture>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="mt40 btnSc">
                <p>Ask your queries from experts</p>
                <a href="javascript:void(0)" onclick="call_demows();" class="primary_btn1">Book A Demo</a>
                <small>Get queries answered from experts</small>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="container">
              <div class="top-section">
                <h6><span class="bg-purple">Stay Organised</span></h6>
                <h2>Track Time Easily And Accurately With Timesheets</h2>
                <p>Reduce administration overheads while increasing the visibility on the total time spent on projects by employees. Manage employee timesheets accurately with a cloud-based time tracking solution. </p>
              </div>
              <div id="active_Current_Tabs2">
                <div class="flex_row">
                  <div class="column-right">
                    <picture class="page active" id="p4">
                      <source type="image/webp" srcset="./assests/images/best-online-tab-04.webp">
                      <source type="image/png" srcset="./assests/images/best-online-tab-06.png">
                      <img loading="lazy" src="./assests/images/best-online-tab-06.png"
                        alt="Online Invoicing" width="508" height="454">
                    </picture>
                    <picture class="page" id="p5">
                      <source type="image/webp" srcset="./assests/images/best-online-tab-05.webp">
                      <source type="image/png" srcset="./assests/images/best-online-tab-07.png">
                      <img loading="lazy" src="./assests/images/best-online-tab-07.png"
                        alt="Online Invoicing" width="634" height="514">
                    </picture>
                    <picture class="page" id="p6">
                      <source type="image/webp" srcset="./assests/images/best-online-tab-06.webp">
                      <source type="image/png" srcset="./assests/images/best-online-tab-06.png">
                      <img loading="lazy" src="./assests/images/best-online-tab-06.png"
                        alt="Online Invoicing" width="633" height="560">
                    </picture>
                    <picture class="page" id="p7">
                      <source type="image/webp" srcset="./assests/images/best-online-tab-07.webp">
                      <source type="image/png" srcset="./assests/images/best-online-tab-07.png">
                      <img loading="lazy" src="./assests/images/best-online-tab-07.png"
                        alt="Online Invoicing" width="683" height="511">
                    </picture>
                  </div>
                  <div class="column-left">
                    <div class="all-content">
                      <div class="text-column active" id="t4" data-section="active_Current_Tabs2">
                        <h3><i></i>Set Hourly Prices</h3>
                        <p>Analyze how much time is being spent on each task and set hourly prices accordingly. Easily keep track of hours and manage employee payment as per their hours worked. </p>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="./assests/images/best-online-tab-04.webp">
                          <source type="image/png" srcset="./assests/images/best-online-tab-06.png">
                          <img loading="lazy" src="./assests/images/best-online-tab-06.png"
                            alt="Online Invoicing" width="508" height="454">
                        </picture>
                      </div>
                    </div>
                    <div class="all-content">
                      <div class="text-column" id="t5" data-section="active_Current_Tabs2">
                        <h3><i></i>Set Tasks For Your Team</h3>
                        <p>Assign tasks and deadlines to your team members and track them with ease. Monitor everything that needs to be done as per each guideline to make your business run smoothly. </p>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="./assests/images/best-online-tab-05.webp">
                          <source type="image/png" srcset="./assests/images/best-online-tab-07.png">
                          <img loading="lazy" src="./assests/images/best-online-tab-07.png"
                            alt="Online Invoicing" width="634" height="514">
                        </picture>
                      </div>
                    </div>
                    <div class="all-content">
                      <div class="text-column" id="t6" data-section="active_Current_Tabs2">
                        <h3><i></i>Track Expenses</h3>
                        <p>Know exactly where you stand financially at all times. Manage your reports in real-time and make sure you are always up-to-date on how your precious resources are being used.</p>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="./assests/images/best-online-tab-06.webp">
                          <source type="image/png" srcset="./assests/images/best-online-tab-06.png">
                          <img loading="lazy" src="./assests/images/best-online-tab-06.png"
                            alt="Online Invoicing" width="633" height="560">
                        </picture>
                      </div>
                    </div>
                    <div class="all-content">
                      <div class="text-column" id="t7" data-section="active_Current_Tabs2">
                        <h3><i></i>Save Time With Automated Invoices</h3>
                        <p>Set up automatic recurring invoices. Schedule it to go out on a certain day, time, and year with only a few clicks. It's fast and easy! You can set it in such a manner that it goes out every week, month, or quarter.</p>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="./assests/images/best-online-tab-07.webp">
                          <source type="image/png" srcset="./assests/images/best-online-tab-07.png">
                          <img loading="lazy" src="./assests/images/best-online-tab-07.png"
                            alt="Online Invoicing" width="683" height="511">
                        </picture>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="mt40 btnSc">
                <p>Give It A Try! It’s Worth</p>
                <a href="javascript:void(0)" onclick="call_demows();" class="primary_btn1">Book A Demo</a>
                <small>Get queries answered from experts</small>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="container">
              <div class="top-section">
                <h6><span class="bg-purple">Avoid Delays & Denials</span></h6>
                <h2> No More Tedious Manual Invoicing And Chasing Down Payments With An Online Billing Software</h2>
                <p>Just click to generate an invoice for your clients and get paid right away. Also, don’t worry about losing track of who owes you money or when it’s due-Workstatus keeps track of everything for you.</p>
              </div>
              <div id="active_Current_Tabs3">
                <div class="flex_row">
                  <div class="column-right">
                    <picture class="page active" id="p8">
                      <source type="image/webp" srcset="./assests/images/best-online-tab-08.webp">
                      <source type="image/png" srcset="./assests/images/best-online-tab-08.png">
                      <img loading="lazy" src="./assests/images/best-online-tab-08.png"
                        alt="Online Invoicing" width="463" height="453">
                    </picture>
                    <picture class="page" id="p9">
                      <source type="image/webp" srcset="./assests/images/best-online-tab-09.webp">
                      <source type="image/png" srcset="./assests/images/best-online-tab-09.png">
                      <img loading="lazy" src="./assests/images/best-online-tab-09.png"
                        alt="Online Invoicing" width="463" height="453">
                    </picture>
                    <picture class="page" id="p10">
                      <source type="image/webp" srcset="./assests/images/best-online-tab-10.webp">
                      <source type="image/png" srcset="./assests/images/best-online-tab-10.png">
                      <img loading="lazy" src="./assests/images/best-online-tab-10.png"
                        alt="Online Invoicing" width="463" height="453">
                    </picture>
                  </div>
                  <div class="column-left">
                    <div class="all-content">
                      <div class="text-column active" id="t8" data-section="active_Current_Tabs3">
                        <h3><i></i>Track Billable Hours</h3>
                        <p>Track exactly how many hours are going to each project. Figure out how much time and effort your company has invested in tasks and projects to bill every hour. </p>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="./assests/images/best-online-tab-08.webp">
                          <source type="image/png" srcset="./assests/images/best-online-tab-08.png">
                          <img loading="lazy" src="./assests/images/best-online-tab-08.png"
                            alt="Online Invoicing" width="463" height="453">
                        </picture>
                      </div>
                    </div>
                    <div class="all-content">
                      <div class="text-column" id="t9" data-section="active_Current_Tabs3">
                        <h3><i></i>Remove Obstacles</h3>
                        <p>Streamline your business by managing your tasks feasibly. With the visual overview of your employee's performance in real-time, ensure everyone is working efficiently. </p>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="./assests/images/best-online-tab-09.webp">
                          <source type="image/png" srcset="./assests/images/best-online-tab-09.png">
                          <img loading="lazy" src="./assests/images/best-online-tab-09.png"
                            alt="Online Invoicing" width="463" height="453">
                        </picture>
                      </div>
                    </div>
                    <div class="all-content">
                      <div class="text-column" id="t10" data-section="active_Current_Tabs3">
                        <h3><i></i>Real-Time Insights</h3>
                        <p>Get insight into what is making you money and what is costing you money with just a few clicks on your dashboard.</p>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="./assests/images/best-online-tab-10.webp">
                          <source type="image/png" srcset="./assests/images/best-online-tab-10.png">
                          <img loading="lazy" src="./assests/images/best-online-tab-10.png"
                            alt="Online Invoicing" width="463" height="453">
                        </picture>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="mt40 btnSc">
                <p>Want to know more!</p>
                <a href="javascript:void(0)" onclick="call_demows();" rel="nofollow" class="primary_btn1">Book A Demo</a>
                <small>Get queries answered from experts</small>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="container">
              <div class="top-section">
                <h6><span class="bg-purple">Get Technology Edge</span></h6>
                <h2> With Automation, Get Faster Than Ever Before</h2>
                <p>With Workstatus, automate your payment process to increase your business efficiency and save time and money. Send invoices, capture payments, and manage customers quickly, all in one place.</p>
              </div>
              <div id="active_Current_Tabs4">
                <div class="flex_row">
                  <div class="column-right">
                    <picture class="page active" id="p11">
                      <source type="image/webp" srcset="./assests/images/best-online-tab-11.webp">
                      <source type="image/png" srcset="./assests/images/best-online-tab-11.png">
                      <img loading="lazy" src="./assests/images/best-online-tab-11.png"
                        alt="Online Invoicing" width="618" height="558">
                    </picture>
                    <picture class="page" id="p12">
                      <source type="image/webp" srcset="./assests/images/best-online-tab-12.webp">
                      <source type="image/png" srcset="./assests/images/best-online-tab-12.png">
                      <img loading="lazy" src="./assests/images/best-online-tab-12.png"
                        alt="Online Invoicing" width="625" height="486">
                    </picture>
                    <picture class="page" id="p13">
                      <source type="image/webp" srcset="./assests/images/best-online-tab-13.webp">
                      <source type="image/png" srcset="./assests/images/best-online-tab-13.png">
                      <img loading="lazy" src="./assests/images/best-online-tab-13.png"
                        alt="Online Invoicing" width="669" height="490">
                    </picture>
                    <picture class="page" id="p14">
                      <source type="image/webp" srcset="./assests/images/best-online-tab-14.webp">
                      <source type="image/png" srcset="./assests/images/best-online-tab-14.png">
                      <img loading="lazy" src="./assests/images/best-online-tab-14.png"
                        alt="Online Invoicing" width="620" height="557">
                    </picture>
                  </div>
                  <div class="column-left">
                    <div class="all-content">
                      <div class="text-column active" id="t11" data-section="active_Current_Tabs4">
                        <h3><i></i>Single-Click Invoice Generation</h3>
                        <p>Start automating your invoices in minutes. All that’s required is for you to set up single-click automation for routine billing tasks such as sending out bills, collecting payments, keeping track of who has paid what, and much more.</p>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="./assests/images/best-online-tab-11.webp">
                          <source type="image/png" srcset="./assests/images/best-online-tab-11.png">
                          <img loading="lazy" src="./assests/images/best-online-tab-11.png"
                            alt="Online Invoicing" width="618" height="558">
                        </picture>
                      </div>
                    </div>
                    <div class="all-content">
                      <div class="text-column" id="t12" data-section="active_Current_Tabs4">
                        <h3><i></i>Filtered Reports</h3>
                        <p>Get insights from all your invoices and filter them by project, client, employee, or invoice amount. With an aggregated view at a glance, quickly see what work is in progress, who is working on it, when they’ll be done with it, and also know your cash flow status.</p>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="./assests/images/best-online-tab-12.webp">
                          <source type="image/png" srcset="./assests/images/best-online-tab-12.png">
                          <img loading="lazy" src="./assests/images/best-online-tab-12.png"
                            alt="Online Invoicing" width="625" height="486">
                        </picture>
                      </div>
                    </div>
                    <div class="all-content">
                      <div class="text-column" id="t13" data-section="active_Current_Tabs4">
                        <h3><i></i>Set Reminders</h3>
                        <p>Prevent late payments by setting up an automatic reminder in invoicing software. Setting up a reminder and sending out a notification will ensure that your clients remain honest when it comes to paying their bills. 
                        </p>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="./assests/images/best-online-tab-13.webp">
                          <source type="image/png" srcset="./assests/images/best-online-tab-13.png">
                          <img loading="lazy" src="./assests/images/best-online-tab-13.png"
                            alt="Online Invoicing" width="669" height="490">
                        </picture>
                      </div>
                    </div>
                    <div class="all-content">
                      <div class="text-column" id="t14" data-section="active_Current_Tabs4">
                        <h3><i></i>AI Dashboard</h3>
                        <p>Manage all your tasks, invoices, and expenses with one intuitive platform.  Through our AI-powered dashboard get a comprehensive view of your entire business in real-time, whenever you need it.
                        </p>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="./assests/images/best-online-tab-14.webp">
                          <source type="image/png" srcset="./assests/images/best-online-tab-14.png">
                          <img loading="lazy" src="./assests/images/best-online-tab-14.png"
                            alt="Online Invoicing" width="620" height="557">
                        </picture>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?php if( geoCTAcheck() === true ) : ?>
              <div class="mt40 btnSc">
                <p>Streamline your invoicing by signing up today!</p>
                <a href="<?php echo $RegLink; ?>" class="primary_btn1"><?php echo $ws_ctas['cta_text']; ?></a>
                <small>Quickly get your team on-board!</small>
              </div>
              <?php endif; ?>
            </div>
          </div>
        </section>
        <section class="trackEm">
          <div class="container">
            <div class="top-section">
              <h6><span class="bg-purple">Simplified Invoicing</span></h6>
              <h2>Manage Your Online Invoices With Ease And Convenience</h2>
            </div>
            <div class="trackRow">
              <div class="trackImg">
                <picture>
                  <source type="image/webp" srcset="./assests/images/demo12.webp">
                  <source type="image/png" srcset="./assests/images/demo12.png">
                  <img loading="lazy" src="./assests/images/demo12.png" alt="Designed to Track" width="541" height="661">
                </picture>
              </div>
              <div class="trackContent">
                <div class="row">
                  <h3><i></i>Customizable Payment Terms</h3>
                  <p>Create customized invoices with ease, set up your pay periods, late fees, payment terms and much more.</p>
                </div>
                <div class="row">
                  <h3><i></i>Add Logos to Your Invoice Template</h3>
                  <p>Simply click the logo box and select one of your logos from your computer or create a new one for your invoice.</p>
                </div>
                <div class="row">
                  <h3><i></i>One-Click Email Invoices</h3>
                  <p>Automatically create invoices and send them directly to your clients via email.</p>
                </div>
                <div class="row">
                  <h3><i></i>Real-Time Billing Reports</h3>
                  <p>With real-time billing, reports view your payment history and see who pays on time and who doesn’t.</p>
                </div>
                <div class="row">
                  <h3><i></i>Advanced Recurring Billing</h3>
                  <p>Handle different payment amounts, frequencies and schedules for each customer’s account with advanced recurring billing.</p>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="timeline">
          <div class="container">
            <div class="top-section">
              <h6><span class="bg-purple">Easy For Non-Technical Professionals Too</span></h6>
              <h2>Use WorkStatus™ Invoicing And Billing Software Effortlessly</h2>
            </div>
            <div class="trackRow">
              <div class="trackImg">
                <picture>
                  <source type="image/webp" srcset="./assests/images/getpaid_image.webp">
                  <source type="image/png" srcset="./assests/images/getpaid_image.png">
                  <img loading="lazy" src="./assests/images/getpaid_image.png" alt="Tracking Software" width="604" height="602">
                </picture>
              </div>
              <div class="trackContent">
                <div class="row">
                  <h3> Download & Install Workstatus™</h3>
                  <p>Simply download and install Workstatus invoicing software on any computer or mobile and sign up for an account. It’s as easy as that. Once you have installed Workstatus, your system is ready to generate invoices right away.</p>
                </div>
                <div class="row">
                  <h3> Start Generating Invoices and Bills </h3>
                  <p>With Workstatus, it is easier than ever to start billing and generating invoices for the clients. Whether you work on hourly rates or fixed prices, Workstatus is a great way to streamline your operations and get paid quickly. </p>
                </div>
                <div class="row">
                  <h3>Auto-Generate Reports</h3>
                  <p>Create as many as customized reports you want. Track the total time spending on the projects, hourly rates, and much more. Workstatus makes reporting extremely simple and cost-effective, saving a lot of time down the road.</p>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="feature_section for-heading-center whitetxt">
          <div class="container">
            <div class="top-section">
              <h6><span class="bg-white">Our Features</span></h6>
              <h2>What Workstatus™ Offers Apart From Automating Invoices And Bills</h2>
              <p>With our advanced features and functionality, you can easily send bills to your clients quickly. Additionally, Workstatus offers a variety of automations that are fully customizable to your company's needs and concerns.</p>
            </div>
            <div class="flex_row mt70">
              <div class="column">
                <a href="<?php echo SITE_URL; ?>/best-employee-productivity-cloud-software">
                  <span class="iconImg">
                    <svg aria-hidden="true">
                      <use xlink:href="./assests/images/icons/featuresicon.svg#productivity-monitoring"></use>
                    </svg>
                  </span>
                  <h3>Productivity Measurement</h3>
                  <p>Monitor and improve employees productivity</p>
                  <span class="small_anchor">Explore</span>
                </a>
              </div>
              <div class="column">
                <a href="<?php echo SITE_URL; ?>/best-employee-task-scheduling-software">
                  <span class="iconImg">
                    <svg aria-hidden="true">
                      <use xlink:href="./assests/images/icons/featuresicon.svg#employscheduling">
                      </use>
                    </svg>
                  </span>
                  <h3>Employee Scheduling</h3>
                  <p>Automated managing & scheduling of employee shifts</p>
                  <span class="small_anchor">Explore</span>
                </a>
              </div>
              <div class="column">
                <a href="<?php echo SITE_URL; ?>/best-employee-monitoring-software-online">
                  <span class="iconImg">
                    <svg aria-hidden="true">
                      <use xlink:href="./assests/images/icons/featuresicon.svg#employmonitoring">
                      </use>
                    </svg>
                  </span>
                  <h3>Employee Monitoring</h3>
                  <p>Get better visibility into your team activities and tasks</p>
                  <span class="small_anchor">Explore</span>
                </a>
              </div>
            </div>
            <div class="flex_row mt80">
              <div class="column">
                <a href="<?php echo SITE_URL; ?>/best-project-cost-management-software-online">
                  <span class="iconImg">
                    <svg aria-hidden="true">
                      <use xlink:href="./assests/images/icons/featuresicon.svg#project-budgeting"></use>
                    </svg>
                  </span>
                  <h3>Project Budgeting</h3>
                  <p>Budget your projects and ensure cost controls</p>
                  <span class="small_anchor">Explore</span>
                </a>
              </div>
              <div class="column">
                <a href="<?php echo SITE_URL; ?>/geofence-time-clock-software-online">
                  <span class="iconImg">
                    <svg aria-hidden="true">
                      <use xlink:href="./assests/images/icons/featuresicon.svg#geofencing">
                      </use>
                    </svg>
                  </span>
                  <h3>Geofencing</h3>
                  <p>Geofence client locations to mark auto-attendance of on-site employees</p>
                  <span class="small_anchor">Explore</span>
                </a>
              </div>
              <div class="column">
                <a href="<?php echo SITE_URL; ?>/best-time-report-software-online">
                  <span class="iconImg">
                    <svg aria-hidden="true">
                      <use xlink:href="./assests/images/icons/featuresicon.svg#dashboard"></use>
                    </svg>
                  </span>
                  <h3>AI-Dashboard</h3>
                  <p>Get detailed analytics and intelligent reports on time, productivity & more</p>
                  <span class="small_anchor">Explore</span>
                </a>
              </div>
            </div>
            <div class="text_center mt70 for-link-white link-text">
              <a href="<?php echo SITE_URL; ?>/features" class="small_anchor">View All Features</a>
            </div>
            <div class="mt40 text_center for-link-white btnSc">
              <p>Generate your First Invoice with Workstatus</p>
              <a href="javascript:void(0)" onclick="call_demows();" class="primary_btn1 bgwhite">Book A Demo</a>
              <small>Get queries answered from experts</small>
            </div>
          </div>
        </section>
        <section class="time-data">
          <div class="container">
            <div class="top-section">
              <h6><span class="bg-purple">Decide How You Want It</span></h6>
              <h2>Get & Use Estimates And Invoicing Data As You Need</h2>
            </div>
            <div class="flex_row">
              <div class="column-three">
                <i class="icon4"></i>
                <h3>Login Based Data Access</h3>
                <p>Login as an employee or manager and start customising your invoices and bills online in your respective dashboards.</p>
              </div>
              <div class="column-three">
                <i class="icon5"></i>
                <h3>APIs Access</h3>
                <p>Get access to APIs and integrate Workstatus data with any other tool/software your team uses for a single user interface.</p>
              </div>
              <div class="column-three">
                <i class="icon6"></i>
                <h3>Raw Data Access</h3>
                <p>Use raw data to generate custom reports with invoices and bills software that gives you more insight into your business performance.</p>
              </div>
            </div>
          </div>
        </section>
        <section class="case-section">
          <div class="container">
            <div class="top-section">
              <h6><span class="bg-white">Use Cases</span></h6>
              <h2>Why Workstatus™ Online Invoicing and Billing Software is Apt For Your Business</h2>
            </div>
            <div class="flex_row justify-center">
              <div class="column-three">
                <div class="thumb">
                  <picture>
                    <source type="image/webp" srcset="./assests/images/case-study-34.webp">
                    <source type="image/png" srcset="./assests/images/case-study-34.png">
                    <img loading="lazy" src="./assests/images/case-study-34.png" alt="case study" width="353" height="208"> 
                  </picture>
                </div>
                <div class="blog-title">
                  <h3>Boost  Efficiency</h3>
                  <p>By using Workstatus invoicing software you can save time because everything is in one place from billing, invoicing, work logs, notes on project milestones to organisational goals, and a business owner can use invoice templates and make custom invoices when needed in order to accelerate the growth and efficiency of their business.</p>
                </div>
              </div>
              <div class="column-three">
                <div class="thumb">
                  <picture>
                    <source type="image/webp" srcset="./assests/images/case-study-35.webp">
                    <source type="image/png" srcset="./assests/images/case-study-35.png">
                    <img loading="lazy" src="./assests/images/case-study-35.png" alt="case study" width="353" height="208"> 
                  </picture>
                </div>
                <div class="blog-title">
                  <h3>Flexible Pricing</h3>
                  <p>You can charge different hourly rates from different clients, allowing you to adjust your prices depending on your client’s flexibility in paying invoices. If they’re quick with payments, you can charge more. If they take their time settling your invoices, you can charge less. It gives both parties a great deal of flexibility that can be beneficial for both sides. </p>
                  <p>Also, Workstatus allows you to automatically create multiple invoices per job so you can charge multiple times a day as needed. This saves an incredible amount of time and effort so there’s no need to spend precious hours every month issuing new bills and tracking down payment details!</p>
                </div>
              </div>
              <div class="column-three">
                <div class="thumb">
                  <picture>
                    <source type="image/webp" srcset="./assests/images/case-study-36.webp">
                    <source type="image/png" srcset="./assests/images/case-study-36.png">
                    <img loading="lazy" src="./assests/images/case-study-36.png" alt="case study" width="353" height="208"> 
                  </picture>
                </div>
                <div class="blog-title">
                  <h3>Better Insights For Informed Decisions</h3>
                  <p>As a business owner, your time is precious. There’s plenty to do and very little time to get it done. This is why you must be making informed decisions with relevant data at hand. From invoicing and billing to payroll tracking and timesheets, there are several ways Workstatus can help you increase efficiency, save money and provide greater insight into operations on a day-to-day basis. Plus, with all these insights you can take better control over finances which means fewer worries and less stress in general.</p>
                </div>
              </div>
            </div>
            <?php if( geoCTAcheck() === true ) : ?>
            <div class="mt70 text_center for-link-blue link-text">
              <div class="mt70 text_center btnSc">
                <p>Check How Workstatus™ Can Help<br> Your Business</p>
                <a href="<?php echo $RegLink; ?>"
                  class="primary_btn1 btnbg2"><?php echo $ws_ctas['cta_text']; ?></a>
                <small>No credit card required</small>
              </div>
            </div>
            <?php endif; ?>
          </div>
        </section>
        <section class="wsMobile whitetxt">
          <?php require_once 'common/workstatus-device.php';?>
        </section>
        <section class="userguide">
          <div class="container">
            <div class="top-section">
              <h6><span class="bg-purple">User Guide</span></h6>
              <h2>Find answers to all of your questions here.</h2>
            </div>
            <div class="buyers-guide-section" id="div-buyer-guide">
              <div class="buyers-guide">
                <div class="buyers-guide-question" id="buyers-guide-question">
                  <ul class="question-list">
                    <li><a href="#ans_1" class="active">1. What Is Online Invoicing Software?</a></li>
                    <li><a href="#ans_2" class="">2. What Are The Benefits Of Online Invoicing?</a></li>
                    <li><a href="#ans_3" class="">3. How To Create An Invoice Using Workstatus™?</a></li>
                    <li><a href="#ans_4" class="">4. How Can I Keep Track Of The Invoices On The Go?</a></li>
                    <li><a href="#ans_5" class="">5. How Do I Implement The Invoice And Project Estimate Software For My Company?</a></li>
                    <li><a href="#ans_6" class="">6. For Which Businesses, Auto Invoicing Software Is Useful?</a></li>
                    <li><a href="#ans_7" class="">7. What Are The Advantages And Disadvantages Of Online Invoicing Software Workstatus™?
                      </a>
                    </li>
                    <li><a href="#ans_8" class="">8. How To Create A Copy/Duplicate Of The Invoice?</a></li>
                    <li><a href="#ans_9" class="">9. How To Create A Recurring Invoice?</a></li>
                    <li><a href="#ans_10" class="">10. How To Set A Payment Reminder For An Invoice?</a></li>
                  </ul>
                </div>
                <div class="buyers-guide-answer-part" id="buyers-guide-answer-part">
                  <div class="buyers-guide-answer ans_1" id="ans_1">
                    <h3 class="guide-question">1. What Is Online Invoicing Software?</h3>
                    <div class="guide-answer">
                      <p>An online invoicing tool is software that allows businesses to create and send professional invoices digitally. They often connect with other business management tools, such as accounting software, so you can integrate all your information together.  </p>
                      <p>These systems make it easy for clients to pay their invoices online which improves efficiency in many ways such as faster access to data and quicker payments from customers mean more cash flow for you. It also saves time by sending and receiving electronic records instead of paper documents. You can also schedule payments as per your requirement using advanced features like payment reminders and auto renewal features.</p>
                      <p>Modern invoicing software supports recurring billing, automated payment reminders, customizable templates, and much more. All designed to make your working life easier. Best of all, online invoicing software helps your business to look more professional to potential clients, streamlining your workflow while saving you time and money. </p>
                    </div>
                  </div>
                  <div class="buyers-guide-answer ans_2" id="ans_2">
                    <h3 class="guide-question">2. What Are The Benefits Of Online Invoicing?</h3>
                    <div class="guide-answer">
                      <p>The benefits of online invoicing go far beyond saving time by sending and receiving your documents in one place. In fact, with a cloud-based platform, you can take advantage of many other valuable features that help you to streamline your business process, better manage your cash flow, and ensure that all your payments are correct and on time. Here are the top five benefits of online invoicing software</p>
                      <ul class="listype">
                        <li><strong>Accessibility</strong><br>
                          Keeping your documents in digital form means you can access them from any internet-connected device. Gone are the days of late payments or lost invoices. With an online invoicing service, you’ll always have a record of all invoices and bills. And if a client loses their invoice? No problem, just send it again.
                        </li>
                        <li><strong>Collaboration</strong><br>
                          It’s easier to discuss invoice details with clients if you both have access to a unified record of all invoice-related documents and conversations. An online invoicing solution can help you avoid misunderstandings and miscommunications which overall lead to a smoother project workflow.
                        </li>
                        <li><strong>Payments Alerts</strong><br>
                          With online invoicing software, you can save time by sending and managing your bills from anywhere. Rather than scheduling time out of your day to collect payments from customers, invoice software will automatically send payment reminders until payment is made. You can easily view all outstanding invoices at once with online billing software, allowing you to stay on top of client accounts and avoid costly late payments.
                        </li>
                        <li><strong>Reduces Paperwork</strong><br>
                          One of the main benefits of using an <strong>online invoice generator</strong> is that it removes a lot of paperwork from your desk. Gone are all those piles and stacks and binders with paper invoices. With a simple mouse click, you can send an invoice to your client, thus reducing your workload considerably. Apart from cutting down on clutter, there is also less chance for you to make mistakes as well. This can save you time and money!
                        </li>
                        <li><strong>Automation</strong><br>
                          With automated invoicing software, there is less room for errors. Your clients won’t need to worry about misplaced invoices or missing checks.<br><br>
                          Automation saves you time and makes your job easier. You can concentrate on other aspects of your business and know that your invoice is taken care of, which frees up time in your schedule to do more essential things like meet with clients and take on new projects.
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="buyers-guide-answer ans_3" id="ans_3">
                    <h3 class="guide-question">3. How To Create An Invoice Using Workstatus™?</h3>
                    <div class="guide-answer">
                      <p>With Workstatus creating invoices is as easy as going to your dashboard. 
                      </p>
                      <ul>
                        <li>Select Inbox from your menu on top of your screen,</li>
                        <li>Select an incoming message, 
                          Then click on Create Invoice. 
                        </li>
                        <li> On a saved request you can click on create an invoice and set a reminder to get an alert on your smartphone, 
                          Then add all relevant information about your customer in invoice settings and your description of services rendered (date, hours, etc.)
                        </li>
                        <li>When done click Save Invoice.</li>
                      </ul>
                      <p>Workstatus also has several options that allow you to customise your invoices logo, name/company details, terms & conditions, or terms of sale. Your invoices will be saved in different currencies depending on your needs. </p>
                      <p>We have also set up two payment methods which are direct debit using a bank account and credit card payments using an encrypted system. You can control these settings by going into Settings > Billing anytime you want.</p>
                      <p>Workstatus is a one-stop solution for all your business requirements.</p>
                    </div>
                  </div>
                  <div class="buyers-guide-answer ans_4" id="ans_4">
                    <h3 class="guide-question">4. How Can I Keep Track Of The Invoices On The Go?</h3>
                    <div class="guide-answer">
                      <p>Workstatus is a mobile invoicing app that allows you to create and send invoices while you’re on the go. Our simple and straightforward app allows you to create invoices with just a few tapes and it’s super intuitive.</p>
                      <p>It tracks the invoices on the go and it will send you a notification when an invoice is completed, so no more waiting around to get paid! Be vigilant! </p>
                      <p>With workStatus, you can easily send an invoice for your services via email or text message. As soon as your client pays their bill, Workstatus automatically sends you an email notification letting you know exactly when your money will be deposited into your bank account. It even updates across all of your devices so there's no need to worry about missing payments in any capacity. </p>
                      <p>Workstatus got your back in keeping the track of your invoices and finances. We make it easy for you to manage your cash flow, stay organized and keep track of payments. </p>
                    </div>
                  </div>
                  <div class="buyers-guide-answer ans_5" id="ans_5">
                    <h3 class="guide-question">5. How Do I Implement The Invoice And Project Estimate Software For My Company?</h3>
                    <div class="guide-answer">
                      <p>This can be confusing because it seems there are a number of choices, but you'll want to consider your company’s business model as you select which program is best.  There are a few steps you can consider essential while selecting and implementing your next invoicing software</p>
                      <ul class="listype">
                        <li><strong>Choose Something That Fits Your Business Model:</strong> Depending on how your sales team operates, you will likely use either an in-house service or a tool integrated with existing systems like Salesforce. The benefit of using an established sales platform is increased integration with other areas of your company.</li>
                        <li><strong>Choose Something That Meets Your Needs:</strong> Choosing a program based on your needs will help streamline your processes. Not sure what you need? Take a look at your current system and determine what will work best for you.
                        </li>
                        <li><strong>Choose Something That Works With Your Existing Systems:</strong> Look at the software that integrates well with your existing systems and will help eliminate double data entry. Integration saves time, especially when you have multiple users working on your sales process. </li>
                        <li><strong>Choose Something That Fits With Your Budget:</strong> Be realistic about what you can afford to spend each month on invoicing, as well as ongoing support costs. If you're starting a business, consider investing in an all-inclusive plan if possible so you're not wasting time researching services separately or paying more than you need to manage projects and track progress over time.<br><br>
                          Luckily Workstatus has it all invoicing, timesheets, and project management. Workstatus gives you control over your business operations so you can focus on what matters most to you: your clients.<br><br>
                          With Workstatus <strong>estimate and invoice software</strong> you have a single easy-to-use system to manage estimated projects, billing, timesheets, and expenses in one place. You will never have trouble staying organized or wondering where something is.<br><br>
                          Also, it is simple to implement it in your company. You just have to sign up and start using it right away. Workstatus puts you in charge of every aspect of running your business, allowing you to easily adapt to any industry or client while making sure everything is done properly.
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="buyers-guide-answer ans_6" id="ans_6">
                    <h3 class="guide-question">6. For Which Businesses, Auto Invoicing Software Is Useful?
                    </h3>
                    <div class="guide-answer">
                      <p><strong>Auto Invoicing software</strong> offers a lot of benefits to different kinds of businesses.</p>
                      <p>With invoicing software, you can eliminate the need for tedious manual calculations when it comes to running your business's finances by letting it do most of the work for you.</p>
                      <p>From small-scale companies that want to save some time and effort in their financial operations to large companies that want to automate many of their daily tasks invoicing software has its place at every level.</p>
                      <p>Let's look at the different kinds of businesses where invoicing software has bought immeasurable benefits.</p>
                      <ul class="listype">
                        <li><strong>Small Businesses For Time Management</strong><br>
                          Auto-invoicing helped small businesses in saving time and avoiding errors while billing their customers. It has particularly helped the businesses that have to repeatedly generate bills for their customers such as membership fees. Instead of re-entering data from previous bills, businesses can configure the invoice template once, then use it to generate future bills quickly and accurately.<br><br>
                          Doing this has helped them to reduce the potential errors by preventing typos or accidentally entering incorrect data which leads them in saving their time and money.
                        </li>
                        <li><strong>Freelancers</strong><br>
                          <strong>Invoice software</strong> is a major time saver for freelancers. Its ability to create professional invoices in just a few minutes and have them sent automatically to clients is invaluable for any freelancer.  Through this freelancers have saved hours of their time and have spent it in more productive ways such as finding new customers or developing new products.<br><br>
                          Moreover, auto-billing software eliminates manual errors on invoices that freelancers commonly make while preparing invoices manually. With auto invoice service freelancers can entirely focus on growing their business without worrying about tedious billing tasks.
                        </li>
                        <li><strong>Accounting Firms</strong><br>
                          The productivity of accounting firms has been improved by 25% after using invoicing software. The main advantage for accounting firms on software like this is in their capacity to track time which involves starting and ending times for projects so that they can bill the clients accordingly. This feature has helped them to increase their revenue and profitability in a short period of time.
                        </li>
                        <li><strong>Marketing  Firm</strong><br>
                          <strong>Invoice software</strong> helped the marketing firms to create attractive and professional-looking invoices for their customers that appear more appealing than paper invoices. This has resulted in higher sales and improved relationships with existing clients who are impressed by the business’s professionalism.
                          <br>
                          Moreover, using invoicing software helps the marketing agencies to collect payments from their customers easily and quickly because it allows them to customize invoice templates as per their customer requirements.
                        </li>
                        <li><strong>B2B Companies</strong><br>
                          The main advantage of invoicing software for business-to-business (B2B) companies is that it allows them to perform operations in real-time. Through invoice generation, these businesses can create statements of accounts automatically and send them to their customers instantly. <br><br>
                          This way, the customers can view their accounts online at any time and make payments through credit cards or online banking systems easily which creates a massive growth in their profits and sales.<br><br>
                          Plus, with Invoicing software you can save considerable amounts of money on office administration costs by reducing human error.
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="buyers-guide-answer ans_7" id="ans_7">
                    <h3 class="guide-question">7. What Are The Advantages And Disadvantages Of Online Invoicing Software Workstatus™?
                    </h3>
                    <div class="guide-answer">
                      <p>Online invoicing software has become an essential tool for business owners that want to be more concise about their work, want to enhance employee productivity, and make it easier to send and receive payments throughout the day.</p>
                      <p>But what are the best advantages and some disadvantages of Online invoicing software in business? </p>
                      <p>Come let's take a look</p>
                      <ul class="listype">
                        <li><strong>Save Time</strong><br>
                          One reason to opt for invoicing software is for saving time. It’s easier to bill clients and get paid faster when you don’t have to mail things by hand. There’s less room for miscommunication too because everything is stored digitally rather than relying on memory or paper copies which eventually saves time and minimizes errors.
                        </li>
                        <li><strong>Save Money</strong><br>
                          The primary benefit that online invoicing software offers business owners is cost savings. Many small businesses spend a lot of money on paper and ink for printing, envelopes, postage, and other office supplies associated with physical invoices. Online invoices eliminate these expenses and save you money over time.
                        </li>
                        <li><strong>Stay Organized</strong><br>
                          Invoicing software provides detailed reports on unpaid receipts and corresponding payments so that you can follow up accordingly with customers. It also allows you to view a client's entire history with your company and schedule recurring tasks such as invoice mailing or payment reminders that will help you to stay organized throughout your entire day.
                        </li>
                        <li><strong>Interaction With Clients</strong><br>
                          Online invoicing software provides easy interaction with clients. Unlike paper-based systems, online invoicing software allows you to send them emails, share documents and even work remotely with your clients. This makes it easier for you to deliver projects on time and create a better relationship with your clients.
                        </li>
                        <li><strong>Monitoring Expenses</strong><br>
                          It’s crucial for all business owners to keep track of expenses and see where they are going. An online invoicing system like Workstatus gives you an easy way to do that. Now you can keep a running list of your expenses and start to see patterns in your spending habits; after a few months, you’ll be able to spot unnecessary expenditures and make adjustments accordingly. 
                        </li>
                      </ul>
                      <p><strong>Disadvantages of Online Invoicing Software</strong></p>
                      <ul class="listype">
                        <li><strong>Not all companies offer online invoice capabilities</strong><br>
                          If you work with small businesses, start-ups, or local companies, you might not have clients that accept online invoices. If they don’t use online <strong>invoice software</strong>, they can still send you their information via email but it might slow down your workflow. For larger companies and corporations, online invoicing is much more likely to be part of their operations.
                        </li>
                        <li><strong>Not all companies accept online payment options</strong><br>
                          Sure, online invoicing software is convenient, but it doesn’t solve all your billing problems. Some clients don’t accept electronic payments. Instead, they want you to send them a paper invoice by mail. <br><br>
                          On top of that, some customers will only pay by check or other traditional payment methods and never make any online transactions at all. This makes it difficult for companies to generate business with customers who prefer traditional forms of payment over online options.
                        </li>
                        <li><strong>Longer payment cycles can be a downside</strong><br>
                          While it’s true that online invoicing can allow you to send invoices faster, when it comes time to collect payments, you might find yourself waiting longer than you’re used to. There are a number of reasons for this.
                          Your customers may take more time to review their bills and look for errors or mistakes.<br><br>
                          They may have trouble downloading your invoice or be delayed in paying because they need approval from their accounting department before payment is made.<br><br>
                          All these reasons lead to a delay in payment which makes cash flow management more difficult.
                        </li>
                        <li><strong>Poor customer service can pose problems</strong><br>
                          Poor customer service can be a big problem for many online invoicing services. When you’re relying on your online invoicing software to meet your business needs, having problems with customer service is detrimental. Some companies don’t have support phone numbers listed at all or may rely solely on email support, making it hard to find answers quickly if something goes wrong.
                        </li>
                        <li><strong>Security issues may arise with online invoices</strong><br>
                          As you go through invoices and make payments, hackers could be also monitoring your computer. If they catch a glimpse of your online invoices and payment information, they can steal all your sensitive data in a matter of seconds. Cybercrime is on the rise, so it’s important to be proactive in protecting yourself from it.
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="buyers-guide-answer ans_8" id="ans_8">
                    <h3 class="guide-question">8. How To Create A Copy/Duplicate Of The Invoice?
                    </h3>
                    <div class="guide-answer">
                      <p>Workstatus allows you to duplicate an existing invoice, thereby making it easier to add additional information, set up recurring invoices, and get paid faster. To create a copy of an existing invoice in Workstatus: </p>
                      <ul>
                        <li>Open your list of current invoices or tap on New Invoice if you haven’t already opened one up.</li>
                        <li>Tap on Invoice History at the top of your screen.</li>
                        <li>Once on Invoice History, you will see all past invoices along with several options listed below them. Select Duplicate.</li>
                        <li>This will prompt you to confirm that you want to duplicate the invoice tap Duplicate once more to confirm your selection.</li>
                        <li>Now that you have created a copy of your invoice, click Edit and complete any missing details (such as line items) before sending it off! </li>
                        <li>Once all changes are made select send invoice from your actions menu and send it off to your customer! You can even send invoices via text message!</li>
                      </ul>
                      <p>That's how simple it is with Workstatus.</p>
                    </div>
                  </div>
                  <div class="buyers-guide-answer ans_9" id="ans_9">
                    <h3 class="guide-question">9. How To Create A Recurring Invoice?
                    </h3>
                    <div class="guide-answer">
                      <p>First, navigate to your project details page in Workstatus by clicking on projects on your main menu. 
                      </p>
                      <ul>
                        <li>Then click into a specific project, where you'll see all of its information listed. </li>
                        <li>Click on Recurring Invoices, then choose to create the recurring invoice. </li>
                        <li>You'll be taken to a new page where you can customize your recurring invoice settings. </li>
                        <li>Change when it's due, add any notes about payment terms or anything else you might want.</li>
                        <li>When ready, click Create at the bottom-right to generate your invoice, enable automatic payments, and that's it You've just created a recurring invoice. </li>
                      </ul>
                      <p>For more information on using recurring invoices, check out our help center. </p>
                    </div>
                  </div>
                  <div class="buyers-guide-answer ans_10" id="ans_10">
                    <h3 class="guide-question">10. How To Set A Payment Reminder For An Invoice?
                    </h3>
                    <div class="guide-answer">
                      <p>Invoices are scheduled based on their due date, which is when they’re expected to be paid. Once an invoice is past its due date, you can set a payment reminder. This reminder gives you a chance to follow up with your client before it goes into collections. You can set reminders any time of an invoiced payment being due.</p>
                      <p>Here are the steps you need to follow with Workstatus for creating a payment reminder </p>
                      <ul>
                        <li>Firstly, login into your Workstatus account. </li>
                        <li>On the homepage, find the Manage My Inbox menu and click on it. </li>
                        <li>In the new page that opens up, search for your unpaid invoice for which you want to set a payment reminder. </li>
                        <li>Click on any unpaid invoice from the list of unpaid invoices that appear.</li>
                        <li>On its details page, click on the Set Payment Reminder button present in the top right corner. </li>
                        <li>Now the following confirmation message is displayed: Do you want to set a payment reminder for {name}? Just click the Yes option to confirm your desire to set a payment reminder.</li>
                      </ul>
                      <p>Once done, now below details of each unpaid invoice appear. Here you will see both the Reminder Message field and the Reminder Due Date field that can be used for setting a Payment Reminder effectively with a Workstatus account. </p>
                      <p>You may change both fields as per your requirement but make sure that the reminder due date should be earlier than the current date. Once done then click on the save button and you are all set to go</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <?php if( !isMobile() ) : ?>
        <section class="testimonial testmHome ">
          <div class="container">
            <div class="top-section">
              <h6><span class="bg-white">Testimonials</span></h6>
              <h2>Why Does Every User Want To Invest In Workstatus™?</h2>
            </div>
            <div class="glider-testimonial">
              <div class="glider-contain">
                <div class="glider2">
                  <div>
                    <p class="white">“ Before being collaborated with Workstatus, we had no easy way to compile our invoices. Now, it’s automatic and incredibly easy to use. I love that I can send out statements weekly, rather than having one go out at year end every December. After using Workstatus for about six months now, I could not imagine running my business without it anymore. It has saved me a lot of time and energy and that means greater profits! Needless to say, I would definitely recommend Workstatus! ”</p>
                    <div class="border">
                      <div class="triangle"> </div>
                    </div>
                    <div class="author-box">
                      <picture>
                        <source type="image/webp" srcset="./assests/images/avatar.webp">
                        <source type="image/png" srcset="./assests/images/avatar.png">
                        <img loading="lazy" src="./assests/images/avatar.png" alt="Peter" width="54"
                          height="54">
                      </picture>
                      <div class="author-content">
                        <p class="para_extrasmall white">Monica Roy- UK</p>
                      </div>
                    </div>
                  </div>
                  <div>
                    <p class="white">“Workstatus is designed to save you time, money, and effort while simplifying your accounting processes. As a Sr Accountant, I have been using  Workstatus for 3 years now and can testify that it has become part of my daily workflow. It tracks hours in real-time, giving me complete visibility into our payroll trends with very little work on my end. The interface is super user friendly which makes it easy for even new employees to understand quickly. For other accountants who have not started using Workstatus yet, do yourself a favour and give it a try! You won't regret it! ”</p>
                    <div class="border"><span class="element-triangle"></span></div>
                    <div class="author-box">
                      <picture>
                        <source type="image/webp" srcset="./assests/images/avatar.webp">
                        <source type="image/png" srcset="./assests/images/avatar.png">
                        <img loading="lazy" src="./assests/images/avatar.png" alt="Alex" width="54"
                          height="54">
                      </picture>
                      <div class="author-content">
                        <p class="para_extrasmall white">Jessica Ruth- Canada </p>
                      </div>
                    </div>
                  </div>
                  <div>
                    <p class="white">“  As a freelance writer, I value my time. It’s an absolute must that my invoicing system is simple and efficient. This is exactly what I get with Workstatus. With Workstatus I can quickly send invoices and I love that they are linked to timesheets so my clients can see how much time was spent on their every task. This helps me upsell my services, especially when it comes to hourly rates! So far I've saved hours each month from not having to manually track invoicing. Thank you Workstatus!! I could not be happier. ”</p>
                    <div class="border"><span class="element-triangle"></span></div>
                    <div class="author-box">
                      <picture>
                        <source type="image/webp" srcset="./assests/images/avatar.webp">
                        <source type="image/png" srcset="./assests/images/avatar.png">
                        <img loading="lazy" src="./assests/images/avatar.png" alt="Larry" width="54"
                          height="54">
                      </picture>
                      <div class="author-content">
                        <p class="para_extrasmall white">Laura Green, Germany</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div role="tablist" class="dots2"></div>
              </div>
            </div>
          </div>
        </section>
        <?php endif; ?>
        <section class="faqsRow wfull for-heading-center">
          <div class="container">
            <div class="top-section">
              <h6><span class="bg-purple">Get Answers For</span></h6>
              <h2>Frequently Asked Questions</h2>
            </div>
            <div class="flex_row">
              <div itemscope itemtype="https://schema.org/FAQPage">
                <div class="column">
                  <div class="faq-accordion-item-outer open" itemscope itemprop="mainEntity"
                    itemtype="https://schema.org/Question">
                    <h3 itemprop="name"> What Makes Workstatus™ The Best Online Invoice Software?
                    </h3>
                    <div class="faq-accordion-content">
                      <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div itemprop="text">
                          <p>Workstatus online time tracking & invoicing is a simple yet powerful tool that provides you with everything you need to run your own business, without any additional feature overload. </p>
                          <p>As your business grows, so does Workstatus. We provide full accounting integration through our open API allowing you to sync your projects and tasks anytime. </p>
                          <p>With Workstatus <strong>invoice and estimate software</strong>, it’s easier than ever before to manage all of your operations in one central location while automating repetitive tasks such as sending estimates, accepting payments, and following up on outstanding balances.
                          </p>
                          <p>It works great for creating individual or recurring invoices including estimated projects, recurring clients, or worker's compensation information. Workstatus keeps track of time spent on each task, allows you to add costs, and create automatic invoices from completed tasks. You can also export data directly. </p>
                          <p>Best of all, we're available around the clock to help answer questions and solve your problems.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="faq-accordion-item-outer" itemscope itemprop="mainEntity"
                    itemtype="https://schema.org/Question">
                    <h3 itemprop="name">Can I Manage Timesheets And Bills Together At Workstatus™?</h3>
                    <div class="faq-accordion-content">
                      <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div itemprop="text">
                          <p>Yes, Absolutely! You can manage timesheets and bills together with Workstatus.  This is what most of our customers are doing. </p>
                          <p>For example- Instead of billing by the hour or day, you will be able to bill your customer based on time spent on tasks or milestones which happen during a specific period (monthly, weekly or daily). Time management reporting in combination with billing is a very common model that many of our customers use at their businesses. </p>
                          <p>In addition, Workstatus is built specifically to combine both features since there were no affordable solutions out there providing these features combined. No matter how you set up your business, whether it’s based on hourly/daily billing or milestone /project-based pricing. We recommend using Workstatus to manage timesheets and invoicing to get insights into how much time was spent on different projects while tracking each activity online. </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="faq-accordion-item-outer" itemscope itemprop="mainEntity"
                    itemtype="https://schema.org/Question">
                    <h3 itemprop="name">Will My Confidential Data Remain Safe While Using The Online Invoice Maker At Workstatus™?</h3>
                    <div class="faq-accordion-content">
                      <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div itemprop="text">
                          <p>Your confidential data is safe while using our <strong>online billing software.</strong> This means none of your financial information stored within Workstatus will ever reach an unsecured page, no matter how many levels deep it goes into our system.</p>
                          <p>In addition, all pages that allow for a credit card or payment entry are protected by double encryption to ensure all sensitive account data remains private between your company and us. </p>
                          <p>Furthermore,  we won’t access any of your financial information either. The only time we would touch a client’s bank details would be if you specifically asked us to make a change on behalf of you, such as making a deposit in an escrow account, adding/removing another bank account as part of a wire transfer, or filing fraudulent charge-backs on a customer who refuses to pay its outstanding balance on time. </p>
                          <p>Otherwise, at no point in time during our relationship with your business will anyone from Workstatus have access to or see any of your company’s financial data. We have strict security policies that prohibit anyone from viewing customer bank accounts without express permission given by specific people within each account administrator hierarchy. </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="faq-accordion-item-outer" itemscope itemprop="mainEntity"
                    itemtype="https://schema.org/Question">
                    <h3 itemprop="name">Is It Possible To Create Online Invoices In Different Languages And Currencies?</h3>
                    <div class="faq-accordion-content">
                      <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div itemprop="text">
                          <p>Yes, it is possible to create an invoice in different languages. The language of your invoices will be based on your settings in Workstatus. </p>
                          <p>To change your settings please go to Settings > Languages and select which ones you want available or add a new one if needed. Additionally, it is also possible to have different currencies on invoices based on the client. To change it, just navigate to Settings > Billing and there you can customise some default options for billing clients like currency, VAT, etc. From there you can manage all your transactions as well as modify clients (add/remove), get reports & much more! </p>
                          <p>It's all very simple but powerful to manage projects from start till end. If still having any problems with implementation, feel free to contact us!</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="faq-accordion-item-outer" itemscope itemprop="mainEntity"
                    itemtype="https://schema.org/Question">
                    <h3 itemprop="name">Can The Invoice Number Be Changed?</h3>
                    <div class="faq-accordion-content">
                      <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div itemprop="text">
                          <p>Yes, you can change your invoice number before you submit an invoice but not after it has been submitted.</p>
                          <p>To change the invoice number edit a previously submitted invoice number go to My Activities>View Invoices>Select Invoice>View Details>Edit Billing Address/Invoice Number/Shipping Method>Update Details. And it will be updated</p>
                          <p>Workstatus also helps your business owner track and manage projects in every stage of development from proposal through completion with our unique time-tracking system, contract management capabilities, and invoicing tools. Plus our integrated functionality allows you to combine deadlines related to multiple projects, so you don’t miss any deadlines on those all important bids.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="faq-accordion-item-outer" itemscope itemprop="mainEntity"
                    itemtype="https://schema.org/Question">
                    <h3 itemprop="name">Can I Manage Account Receivables And Account Payables Together With Workstatus™?
                    </h3>
                    <div class="faq-accordion-content">
                      <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div itemprop="text">
                          <p>Yes, you can manage Account Receivables and Account Payables together with Workstatus.</p>
                          <p>The best part of both is you don’t need to buy two different pieces of software for each of them, just purchase Workstatus and all your business needs will be met under one umbrella. You would be able to generate professional invoices and estimates, track payment due dates, keep an eye on open projects, and more! </p>
                          <p>Workstatus helps your business by managing your account receivables and account payables details in an easy-to-use online system. It provides automation software that is easy to set up, install and maintain.</p>
                          <p>With its auto categorization feature, it creates a detailed report of each invoice and estimate within a few clicks while keeping track of all credits and advances made towards projects. With Workstatus software, your company will be able to create professional invoices/estimates in just minutes.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="useful-resources-blog-section bglight for-heading-center">
          <div class="container">
            <div class="top-section">
              <h6><span class="bg-purple">Blog</span></h6>
              <h2>Useful Resources</h2>
            </div>
            <div class="for-link-blue flex_row justify-center">
              <div class="blog-box column-three">
                <a href="https://www.workstatus.io/blog/5-reasons-to-always-keep-an-eye-on-privileged-business-accounts/" class="blog-link">
                  <div class="thumb">
                    <picture>
                      <source type="image/webp" srcset="./assests/images/useful-resources-blog-1.jpg">
                      <source type="image/png" srcset="./assests/images/useful-resources-blog-1.jpg">
                      <img loading="lazy" src="./assests/images/useful-resources-blog-1.jpg" alt="Workstatus Time" width="400" height="242"> 
                    </picture>
                  </div>
                  <div class="blog-title">
                    <h3>5 Reasons To Always Keep An Eye on Privileged Business Accounts</h3>
                    <span class="small_anchor">Read more</span>
                  </div>
                </a>
              </div>
              <div class="blog-box column-three">
                <a href="https://www.workstatus.io/blog/tips-for-perfecting-the-art-of-workload-management/" class="blog-link">
                  <div class="thumb">
                    <picture>
                      <source type="image/webp" srcset="./assests/images/useful-resources-blog-2.jpg">
                      <source type="image/png" srcset="./assests/images/useful-resources-blog-2.jpg">
                      <img loading="lazy" src="./assests/images/useful-resources-blog-2.jpg" alt="Workstatus Time" width="400" height="242"> 
                    </picture>
                  </div>
                  <div class="blog-title">
                    <h3>Tips For Perfecting The Art Of Workload Management</h3>
                    <span class="small_anchor">Read more</span>
                  </div>
                </a>
              </div>
              <div class="blog-box column-three">
                <a href="https://www.workstatus.io/blog/attention-find-top-9-unheard-secrets-behind-the-most-productive-people/
                  " class="blog-link">
                  <div class="thumb">
                    <picture>
                      <source type="image/webp" srcset="./assests/images/useful-resources-blog-3.jpg">
                      <source type="image/png" srcset="./assests/images/useful-resources-blog-3.jpg">
                      <img loading="lazy" src="./assests/images/useful-resources-blog-3.jpg" alt="Workstatus Time" width="400" height="242"> 
                    </picture>
                  </div>
                  <div class="blog-title">
                    <h3>9 Secrets of Most Productive People</h3>
                    <span class="small_anchor">Read more</span>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </section>
        <?php require_once 'common/workstatus-journey.php';?>
      </main>
      <?php require_once 'common/footer.php';?>
    </div>
    <?php if( !isMobile() ) : ?>
    <script src="./assests/js/glider.min.js"></script> 
    <?php endif; ?>
    <script src="./assests/js/script.js"></script>
  </body>
</html>
<?php require_once '../common/inc/config.inc.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="alternate" href="<?php echo SITE_URL; ?>/industry/attorney" hreflang="en-us" />
    <link rel="shortcut icon" href="../assests/images/favicon.png" type="image/x-icon" />
    <link type="text/css" href="../assests/css/featureDetail-new.css" rel="preload stylesheet" as="style" />
    <?php if( !isMobile() ) : ?>
    <link type="text/css" rel="preload stylesheet" href="../assests/css/glider.css" as="style" />
    <?php endif; ?>
    <?php require_once '../common/inc/meta.php'; ?>
  </head>
  <body>
    <?php require_once '../common/inc/after-body-tag.php'; ?>
    <div class="body__wrapper">
      <div class="feature-header">
        <?php require_once '../common/header.php';?>
      </div>
      <main class="site__content">
        <section class="inner-banner">
          <div class="container">
            <div class="inner-wrap">
              <h1>Powerful Time Tracking Software For Legal Teams</h1>
              <p>Get modern and intuitive time tracking software for your legal teams to improve speed,accuracy, and efficiency. Choose Workstatus<br class="linebrk"> to bill accurately, boost profit, and precisely measure firm’s productivity rates.
              </p>
              <!-- <ul class="list">
                <li>Billable hours calculator</li>
                <li>Quick invoice generation</li>
                <li>Minimize scheduling tasks</li>
              </ul> -->
              <div class="actionBtn">
                <?php if( geoCTAcheck() === true ) : ?>
                <div><a href="<?php echo $RegLink; ?>"
                  class="primary_btn1"><?php echo $ws_ctas['cta_text']; ?></a>
                  <small>No credit card required</small>
                </div>
                <?php endif; ?>
                <div><a href="javascript:void(0)" onclick="call_demows();" class="primary_btn2 formbtn">Book A Demo</a>
                  <small>Get queries answered from experts</small>
                </div>
              </div>
              <?php require_once '../common/available-device.php';?>
              <div class="video-wrap">
                <div class="videoSc" id="has-yt-video">
                  <div class="inner">
                    <div class="topVideo srp-22">
                      <div id="myDIV" class="contbox2">
                        <div class="videoWrapper">
                          <iframe id="video" class="videoIframe" allowfullscreen
                            data-src="https://www.youtube.com/embed/vwez_EXU-gY?enablejsapi=1&html5=1&mute=1">
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
        <section class="middle-section feature-section">
          <div class="item">
            <div class="container">
              <div class="top-section">
                <h6><span class="bg-purple">Win On Accuracy</span></h6>
                <h2>
                  Get Accurate Details With Modern And Effortless Time Tracking
                </h2>
                <p>Always be sure of the numbers - due dates, billable hours, invoices, payments, all with accuracy & transparency.</p>
              </div>
              <div id="active_Current_Tabs1">
                <div class="flex_row">
                  <div class="column-right">
                    <picture class="page active" id="p1">
                      <source type="image/webp" srcset="../assests/images/attorney-01.webp" />
                      <source type="image/png" srcset="../assests/images/attorney-01.png" />
                      <img loading="lazy" src="../assests/images/attorney-01.png" alt="Attorney" width="463" height="453"/>
                    </picture>
                    <picture class="page" id="p2">
                      <source type="image/webp" srcset="../assests/images/attorney-02.webp" />
                      <source type="image/png" srcset="../assests/images/attorney-02.png" />
                      <img loading="lazy" src="../assests/images/attorney-02.png" alt="Attorney" width="463" height="453"/>
                    </picture>
                  </div>
                  <div class="column-left">
                    <div class="all-content">
                      <div class="text-column active" id="t1" data-section="active_Current_Tabs1">
                        <h3><i></i>Accurate Insights</h3>
                        <p>View time spent by lawyers on each case and understand which cases have been worked or are in process. See which cases, tasks and clients are most profitable – and where your lawyers’ time is best spent.
                        </p>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="../assests/images/attorney-01.webp" />
                          <source type="image/png" srcset="../assests/images/attorney-01.png" />
                          <img loading="lazy" src="../assests/images/attorney-01.png" alt="Attorney" width="463" height="453"/>
                        </picture>
                      </div>
                    </div>
                    <div class="all-content">
                      <div class="text-column" id="t2" data-section="active_Current_Tabs1">
                        <h3><i></i>Accurate Charges</h3>
                        <p>Keep track of how much you will charge your clients as per your working hours. Analyze billing period data by team, case, individual and task for complete oversight.
                        </p>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="../assests/images/attorney-02.webp" />
                          <source type="image/png" srcset="../assests/images/attorney-02.png" />
                          <img loading="lazy" src="../assests/images/attorney-02.png" alt="Attorney" width="463" height="453"/>
                        </picture>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="mt40 btnSc">
                <p>Get Paid By Charging Your Clients<br> In Real-Time Now
                </p>
                <a href="javascript:void(0)" onclick="call_demows();" rel="nofollow" class="primary_btn1">Book A Demo </a>
                <small>
                Check Out This Demo To Find Out More
                </small>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="container">
              <div class="top-section">
                <h6><span class="bg-purple">Efficient Management</span></h6>
                <h2>Capture Every Billable Minute of Your Lawyers</h2>
                <p>Spend less time managing administrative tasks like creating timesheets, tracking billable hours and expenses. Instead focus on running your legal practices more efficiently.
                </p>
              </div>
              <div id="active_Current_Tabs2">
                <div class="flex_row">
                  <div class="column-right">
                    <picture class="page active" id="p3">
                      <source type="image/webp" srcset="../assests/images/attorney-03.webp" />
                      <source type="image/png" srcset="../assests/images/attorney-03.png" />
                      <img loading="lazy" src="../assests/images/attorney-03.png" alt="Attorney" width="618" height="490"/>
                    </picture>
                    <picture class="page" id="p4">
                      <source type="image/webp" srcset="../assests/images/attorney-04.webp" />
                      <source type="image/png" srcset="../assests/images/attorney-04.png" />
                      <img loading="lazy" src="../assests/images/attorney-04.png" alt="Attorney" width="618" height="490"/>
                    </picture>
                  </div>
                  <div class="column-left">
                    <div class="all-content">
                      <div class="text-column active" id="t3" data-section="active_Current_Tabs2">
                        <h3><i></i>Automatic Billing</h3>
                        <p>Automatically bill your clients according to your billing preferences and easily manage different billing rates and time entry rules in just a few clicks.</p>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="../assests/images/attorney-03.webp" />
                          <source type="image/png" srcset="../assests/images/attorney-03.png" />
                          <img loading="lazy" src="../assests/images/attorney-03.png" alt="Attorney" width="618" height="490"/>
                        </picture>
                      </div>
                    </div>
                    <div class="all-content">
                      <div class="text-column" id="t4" data-section="active_Current_Tabs2">
                        <h3><i></i>Professional Invoices</h3>
                        <p>Insert your data into professional invoice templates and instantly send it to your clients, partners, vendors and more.</p>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="../assests/images/attorney-04.webp" />
                          <source type="image/png" srcset="../assests/images/attorney-04.png" />
                          <img loading="lazy" src="../assests/images/attorney-04.png" alt="Attorney" width="618" height="490"/>
                        </picture>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?php if( geoCTAcheck() === true ) : ?>
              <div class="mt40 btnSc">
                <p>
                  Want To Know More!
                </p>
                <a href="<?php echo $RegLink; ?>" class="primary_btn1"><?php echo $ws_ctas['cta_text']; ?></a>
                <small>
                Sign Up For A Free Demo
                </small>
              </div>
              <?php endif; ?>
            </div>
          </div>
          <div class="item">
            <div class="container">
              <div class="top-section">
                <h6><span class="bg-purple">Enhance Your Profitability</span></h6>
                <h2>Streamline Lawyers Workflow with Automatic Scheduling</h2>
                <p>No more hassle while creating schedules for your attorney staff. Automate shift scheduling and get alerts for late, missed, or abandoned shifts.
                </p>
              </div>
              <div id="active_Current_Tabs3">
                <div class="flex_row">
                  <div class="column-right">
                    <picture class="page active" id="p5">
                      <source type="image/webp" srcset="../assests/images/landscape-01.webp">
                      <source type="image/png" srcset="../assests/images/landscape-01.png">
                      <img loading="lazy" src="../assests/images/landscape-01.png" alt="Landscape" width="618" height="479">
                    </picture>
                    <picture class="page" id="p6">
                      <source type="image/webp" srcset="../assests/images/acnt-03.webp">
                      <source type="image/png" srcset="../assests/images/acnt-03.png">
                      <img loading="lazy" src="../assests/images/acnt-03.png" alt="Landscape" width="618" height="479">
                    </picture>
                  </div>
                  <div class="column-left">
                    <div class="all-content">
                      <div class="text-column active" id="t5" data-section="active_Current_Tabs3">
                        <h3><i></i>Easy Shift Planning</h3>
                        <p>Use schedule templates to avoid wasting long hours in planning shifts manually. Build lawyers’ schedules within seconds with its intuitive interface.
                        </p>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="../assests/images/landscape-01.webp">
                          <source type="image/png" srcset="../assests/images/landscape-01.png">
                          <img loading="lazy" src="../assests/images/landscape-01.png" alt="Landscape" width="618" height="479">
                        </picture>
                      </div>
                    </div>
                    <div class="all-content">
                      <div class="text-column" id="t6" data-section="active_Current_Tabs3">
                        <h3><i></i>Resource Management</h3>
                        <p>Get access to real-time availability of any lawyer and accurately allocate resources using historical hard data.
                        </p>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="../assests/images/acnt-03.webp">
                          <source type="image/png" srcset="../assests/images/acnt-03.png">
                          <img loading="lazy" src="../assests/images/acnt-03.png" alt="Landscape" width="618" height="479">
                        </picture>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?php if( geoCTAcheck() === true ) : ?>
              <div class="mt40 btnSc">
                <p>Get Started Today</p>
                <a href="<?php echo $RegLink; ?>" class="primary_btn1"><?php echo $ws_ctas['cta_text']; ?></a>
                <small>Sign Up Now</small>
              </div>
              <?php endif; ?>
            </div>
          </div>
          <div class="item">
            <div class="container">
              <div class="top-section">
                <h6><span class="bg-purple">Stay Organized & Focused</span></h6>
                <h2>Get A Holistic View of Productivity With Automated Reporting</h2>
                <p>Easy to measure, analyze, and boost the productivity of your lawyers with the most powerful and advanced productivity tracker.</p>
              </div>
              <div id="active_Current_Tabs4">
                <div class="flex_row">
                  <div class="column-right">
                    <picture class="page active" id="p7">
                      <source type="image/webp" srcset="../assests/images/acnt-04.webp" />
                      <source type="image/png" srcset="../assests/images/acnt-04.png" />
                      <img loading="lazy" src="../assests/images/acnt-04.png" alt="Attorney" width="625" height="490"/>
                    </picture>
                    <picture class="page" id="p8">
                      <source type="image/webp" srcset="../assests/images/acnt-05.webp" />
                      <source type="image/png" srcset="../assests/images/acnt-05.png" />
                      <img loading="lazy" src="../assests/images/acnt-05.png" alt="Attorney" width="625" height="490"/>
                    </picture>
                  </div>
                  <div class="column-left">
                    <div class="all-content">
                      <div class="text-column active" id="t7" data-section="active_Current_Tabs4">
                        <h3><i></i>Built-in Productivity Calculator</h3>
                        <p>Measure productivity rate of each lawyer based on mouse and keyboard usage. A perfect way to ensure 100% transparency among team members.</p>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="../assests/images/acnt-04.webp" />
                          <source type="image/png" srcset="../assests/images/acnt-04.png" />
                          <img loading="lazy" src="../assests/images/acnt-04.png" alt="Attorney" width="625" height="490"/>
                        </picture>
                      </div>
                    </div>
                    <div class="all-content">
                      <div class="text-column" id="t8" data-section="active_Current_Tabs4">
                        <h3><i></i>Productivity Reports</h3>
                        <p>Get auto generated reports to dig into operations to review team performance. See every data in the form of charts or graphs. Identify any productivity issues within teams and resolve them quickly.
                        </p>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="../assests/images/acnt-05.webp" />
                          <source type="image/png" srcset="../assests/images/acnt-05.png" />
                          <img loading="lazy" src="../assests/images/acnt-05.png" alt="Attorney" width="625" height="490"/>
                        </picture>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?php if( geoCTAcheck() === true ) : ?>
              <div class="mt40 btnSc">
                <p>Give It A Try! It’s Worth</p>
                <a href="<?php echo $RegLink; ?>" class="primary_btn1"><?php echo $ws_ctas['cta_text']; ?></a>
                <small>No credit card required</small>
              </div>
              <?php endif; ?>
            </div>
          </div>
        </section>
        <section class="trackEm">
          <div class="container">
            <div class="top-section">
              <h6><span class="bg-purple">Best Billing Software For Large/Small Law Firms</span></h6>
              <h2>Get More Power and Features To Manage Your Lawyers Smoothly</h2>
            </div>
            <div class="trackRow">
              <div class="trackImg">
                <picture>
                  <source type="image/webp" srcset="../assests/images/attorney-demo.webp" />
                  <source type="image/png" srcset="../assests/images/attorney-demo.png" />
                  <img loading="lazy" src="../assests/images/attorney-demo.png" alt="Designed to Track" width="541" height="661" />
                </picture>
              </div>
              <div class="trackContent">
                <div class="row">
                  <h3><i></i>Time Tracking</h3>
                  <p>Track your hours spent on every particular case.</p>
                </div>
                <div class="row">
                  <h3><i></i>Payroll Processing</h3>
                  <p>With automated payroll processing, receive payments instantly.</p>
                </div>
                <div class="row">
                  <h3><i></i>GPS Tracking</h3>
                  <p>Constantly track the location of your team with a GPS tracker.</p>
                </div>
                <div class="row">
                  <h3><i></i>Timesheet Management</h3>
                  <p>Manage timesheets, expenses as well as your billable hours with a single software.</p>
                </div>
                <div class="row">
                  <h3><i></i>Budget Management</h3>
                  <p>Organize your budgets, manage your finances and track payments in real-time.</p>
                </div>
                <div class="row">
                  <h3><i></i>Constant Reporting</h3>
                  <p>Receive reports on a constant basis and ensure proper flow of work.</p>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="timeline">
          <div class="container">
            <div class="top-section">
              <h6><span class="bg-purple">It’s Simple Too</span></h6>
              <h2>A User-Friendly Workforce Management Software For Attorneys</h2>
            </div>
            <div class="trackRow">
              <div class="trackImg">
                <picture>
                  <source type="image/webp" srcset="../assests/images/getpaid_image.webp" />
                  <source type="image/png" srcset="../assests/images/getpaid_image.png" />
                  <img loading="lazy" src="../assests/images/getpaid_image.png" alt="Tracking Software" width="604" height="602" />
                </picture>
              </div>
              <div class="trackContent">
                <div class="row">
                  <h3>Have Your Legal Team Install Workstatus™</h3>
                  <p>All your members can download and install the Workstatus time billing software for lawyers on their mobile phones (Android/iOS).</p>
                </div>
                <div class="row">
                  <h3>Start Tracking</h3>
                  <p>Click and start the time tracker to monitor your team while they are busy working on the cases of clients. Sit back and relax as Workstatus silently records their timings, working hours, location, and much more.
                  </p>
                </div>
                <div class="row">
                  <h3>Generate Detailed Reports</h3>
                  <p>Workstatus provides you with a wealth of information that helps you assess if your legal team is spending their working hours productively. You can also use this information to pinpoint factors that negatively affect workflows. 
                  </p>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="wsMobile whitetxt">
          <?php require_once '../common/workstatus-device.php';?>
        </section>
        <?php if( !isMobile() ) : ?>
        <section class="testimonial testmHome">
          <div class="container">
            <div class="top-section">
              <h6><span class="bg-white">Testimonials</span></h6>
              <h2>Why Is Workstatus™ Considered The Best Time & Billing Software</h2>
            </div>
            <div class="glider-testimonial">
              <div class="glider-contain">
                <div class="glider2">
                  <div>
                    <p class="white">
                      “ As a lawyer for the past three years, I had difficulty with managing my work. It’s hard to track payments received through different channels without hiring more staff. When I started using Workstatus, I realized that it is probably one of the best time tracking software available in the legal field. It helps me manage my practice by keeping everything organized & by enabling me to do proper forecasting of cash flow and profit loss so that I can manage my expenses better, with greater accuracy. Great Software! ”
                    </p>
                    <div class="border">
                      <div class="triangle"></div>
                    </div>
                    <div class="author-box">
                      <picture>
                        <source type="image/webp" srcset="../assests/images/avatar.webp" />
                        <source type="image/png" srcset="../assests/images/avatar.png" />
                        <img loading="lazy" src="../assests/images/avatar.png" alt="Peter" width="54" height="54" />
                      </picture>
                      <div class="author-content">
                        <p class="para_extrasmall white">Karren Walter</p>
                      </div>
                    </div>
                  </div>
                  <div>
                    <p class="white">
                      “ When I started using Workstatus for my business, I was impressed with reports generated by that tool. It is an exceptional program that makes work easier. Whenever I start receiving payments from different clients, I just need to enter those details & it generates an instant report within minutes. I have found it very useful in monitoring cash flow, which helps me a lot in predicting upcoming cases as well as dealing with them accordingly. ”
                    </p>
                    <div class="border"><span class="element-triangle"></span></div>
                    <div class="author-box">
                      <picture>
                        <source type="image/webp" srcset="../assests/images/avatar.webp" />
                        <source type="image/png" srcset="../assests/images/avatar.png" />
                        <img loading="lazy" src="../assests/images/avatar.png" alt="Alex" width="54" height="54" />
                      </picture>
                      <div class="author-content">
                        <p class="para_extrasmall white">Billy Smith</p>
                      </div>
                    </div>
                  </div>
                  <div>
                    <p class="white">
                      “ I am a solo lawyer, and when I started to use workstatus for managing my practice, I felt totally satisfied with its features. Now billing is done within minutes. It is one of the most productive apps I have used till date. I would highly recommend it to all other attorneys who are looking for a quick & effective way to track their payments from clients. ”
                    </p>
                    <div class="border"><span class="element-triangle"></span></div>
                    <div class="author-box">
                      <picture>
                        <source type="image/webp" srcset="../assests/images/avatar.webp" />
                        <source type="image/png" srcset="../assests/images/avatar.png" />
                        <img loading="lazy" src="../assests/images/avatar.png" alt="Larry" width="54" height="54" />
                      </picture>
                      <div class="author-content">
                        <p class="para_extrasmall white">Richard M.</p>
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
              <h2>FAQs</h2>
            </div>
            <div class="flex_row">
              <div itemscope itemtype="https://schema.org/FAQPage">
                <div class="column">
                  <div class="faq-accordion-item-outer open" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <h3 itemprop="name">What is the best time tracking software for lawyers?</h3>
                    <div class="faq-accordion-content">
                      <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div itemprop="text">
                          <p>Workstatus is the best time tracking software for lawyers. As a lawyer, it’s vital to stay on top of your billable hours because many lawyers don’t get paid unless they do. </p>
                          <p>This is why attorneys must track their work, maintain records, assign tasks, check off items completed and more while staying organized throughout their day. And this is what Workstatus delivers to lawyers so you can stop wasting valuable time fumbling with multiple software applications just to keep up with your tasks.</p>
                          <p>All in all, workstatus has everything that one law firm needs.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="faq-accordion-item-outer" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <h3 itemprop="name">How do lawyers keep track of billable hours?</h3>
                    <div class="faq-accordion-content">
                      <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div itemprop="text">
                          <p>With Workstatus, it’s easier than ever to keep track of billable hours and stay on top of your business. Workstatus has several features that make tracking billable hours simple.</p>
                          <p>A lawyer can enter all of their client data into a single place, export it to an invoice, track payments and receive notifications when a client makes a payment. This information is available through either mobile or web apps. </p>
                          <p>With Workstatus, lawyers can also create invoices, export financial reports and add due dates for billable hours directly from their calendar.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="faq-accordion-item-outer" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <h3 itemprop="name">How Workstatus help lawyers to easily manage their work?</h3>
                    <div class="faq-accordion-content">
                      <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div itemprop="text">
                          <p>Workstatus is a cloud-based, easy-to-use, time and billing software developed specifically to cater to lawyers. With Workstatus, lawyers can systematically manage their work and easily track received or paid payments.</p>
                          <p>It helps them view their schedule in an aggregated form, enabling them to stay updated about their current cases and future tasks assigned or due dates.</p>
                          <p>Moreover, lawyers using Workstatus can know their exact payment collection status at any point of time for each case. They receive instant alerts on nearing expiry of the invoice, thus enabling them to follow up with clients & charge late fees if required. </p>
                          <p>This is how lawyers can be more productive with their time while managing finances effectively using Workstatus.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="faq-accordion-item-outer" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <h3 itemprop="name">What time management software do law firms use?</h3>
                    <div class="faq-accordion-content">
                      <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div itemprop="text">
                          <p>If you’re interested in time management, you may have noticed that a lot of attorneys use Workstatus. There are multiple reasons for that. It’s cross-platform by which you can access it on your desktop, laptop, tablet or mobile phone. It is simple to use and user friendly. </p>
                          <p>But what really sets us apart is our functionality which allows the law firm to track expenses and payments received while making billing seamless. </p>
                          <p>Many other solutions seem to make billing their top priority, but at Workstatus, we believe our users need solutions that help them manage their workflow as a whole and help them to improve their working efficiency and in that, what Workstatus is best known for. </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="faq-accordion-item-outer" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <h3 itemprop="name">Is attorney time tracking software safe for law firms?</h3>
                    <div class="faq-accordion-content">
                      <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div itemprop="text">
                          <p>Attorneys are often required to keep accurate records of how they spend their time. As a busy practice owner, it’s completely safe and also essential to have an efficient time management system that allows you to bill your clients on an hourly basis, accurately track payments coming in from customers, and easily pay your staff on a weekly or monthly basis. </p>
                          <p>And based on safety and complete transparency, many attorneys recommend business management software like Workstatus. </p>
                          <p>Workstatus is a time and billing software for small law firms that allow you to keep track of your client information, staff, payments, accounting records, and much more. </p>
                          <p>Features like Time Tracking, Billing & Invoicing, Payments & Expenses, and Accounting built into a single system like Workstatus makes it easy to manage your practice’s critical data without switching between multiple tools.</p>
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
                <a href="https://www.workstatus.io/blog/predictions-for-the-future-of-work-and-security/" class="blog-link">
                  <div class="thumb">
                    <picture>
                      <source type="image/webp" srcset="../assests/images/useful-resources-blog-1.jpg" />
                      <source type="image/png" srcset="../assests/images/useful-resources-blog-1.jpg" />
                      <img loading="lazy" src="../assests/images/useful-resources-blog-1.jpg" alt="Workstatus Time" width="400" height="242" />
                    </picture>
                  </div>
                  <div class="blog-title">
                    <h3>Predictions For The Future Of Work & Security</h3>
                    <span class="small_anchor">Read more</span>
                  </div>
                </a>
              </div>
              <div class="blog-box column-three">
                <a href="https://www.workstatus.io/blog/4-ways-to-monitor-patterns-from-employee-attendance/" class="blog-link">
                  <div class="thumb">
                    <picture>
                      <source type="image/webp" srcset="../assests/images/useful-resources-blog-2.jpg" />
                      <source type="image/png" srcset="../assests/images/useful-resources-blog-2.jpg" />
                      <img loading="lazy" src="../assests/images/useful-resources-blog-2.jpg" alt="Workstatus Time" width="400" height="242" />
                    </picture>
                  </div>
                  <div class="blog-title">
                    <h3>4 Ways To Monitor Patterns From Employees’ Attendance</h3>
                    <span class="small_anchor">Read more</span>
                  </div>
                </a>
              </div>
              <div class="blog-box column-three">
                <a href="https://www.workstatus.io/blog/top-ways-to-turn-your-remote-teams-productive-and-efficient/" class="blog-link">
                  <div class="thumb">
                    <picture>
                      <source type="image/webp" srcset="../assests/images/useful-resources-blog-2.jpg" />
                      <source type="image/png" srcset="../assests/images/useful-resources-blog-2.jpg" />
                      <img loading="lazy" src="../assests/images/useful-resources-blog-2.jpg" alt="Workstatus Time" width="400" height="242" />
                    </picture>
                  </div>
                  <div class="blog-title">
                    <h3>Top Ways To Turn Your Remote Employees Productive & Efficient</h3>
                    <span class="small_anchor">Read more</span>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </section>
        <?php require_once '../common/workstatus-journey.php';?>
      </main>
      <?php require_once '../common/footer.php';?>
      <script src="../assests/js/intlTelInput.js"></script>
    </div>
    <?php if( !isMobile() ) : ?>
    <script src="../assests/js/glider.min.js"></script>
    <?php endif; ?>
    <script src="../assests/js/script.js"></script>
    <script src="../assests/js/footer-validation.js"></script>
  </body>
</html>
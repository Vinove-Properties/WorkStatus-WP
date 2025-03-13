<?php require_once 'common/inc/config.inc.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="alternate" href="https://www.workstatus.io/" hreflang="en-us" />
    <link type="text/css" href="assests/css/integration-detail.css" rel="preload stylesheet" as="style" />
    <?php require_once 'common/inc/header-files.php';?>
  </head>
  <body>
    <?php require_once 'common/inc/after-body-tag.php'; ?>
    <div class="body__wrapper page__home">
      <div class="feature-header"><?php require_once 'common/header.php';?></div>
      <main class="site__content">
        <section class="hero-banner post-animation">
          <div class="container">
            <div class="inner-wrap">
              <picture class="alter-image">
                <img loading="lazy" src="./assests/images/zoho-image.svg" alt="Alternative" width="271" height="100">
              </picture>
              <h1>Achieve More with our Zoho Project <br>
                Tracking Integration
              </h1>
              <p>Keep track of the time spent on Zoho projects with Workstatus.</p>
              <div class="actionBtn">
                <?php if( geoCTAcheck() === true ) : ?>
                <div><a href="<?php echo $RegLink; ?>"
                  class="primary_btn1"><?php echo $ws_ctas['cta_text']; ?></a>
                  <small>No credit card required</small>
                </div>
                <?php endif; ?>
                <div><a href="javascript:void(0)" onclick="call_demows();" class="primary_btn2 formbtn">Book
                  A Demo</a>
                  <small>Get queries answered from experts</small>
                </div>
              </div>
              <?php require_once 'common/available-device.php';?>
              <?php require_once 'common/partners.php';?>
            </div>
          </div>
        </section>
        <section class="step-sec padd-0">
          <div class="container">
            <div class="step-row flex_row">
              <div class="image-col">
                <picture>
                  <source type="image/webp" srcset="./assests/images/zoho-image01.png">
                  <source type="image/png" srcset="./assests/images/zoho-image01.png">
                  <img loading="lazy" src="./assests/images/zoho-image01.png" alt="WS" width="602" height="475">
                </picture>
              </div>
              <div class="content-col">
                <div class="top-section">
                  <h6><span class="bg-purple">Online Timesheets</span></h6>
                  <h2>Automated Time Entry</h2>
                  <p>Say goodbye to manual time tracking. Automatically populate timesheets in Zoho using Workstatus data. Allocate more time to meaningful work and less to administrative tasks.</p>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="middle-section feature-section bglight">
          <div class="item">
            <div class="container">
              <div class="top-section">
                <h6><span class="bg-purple">As simple as 1-2-3</span></h6>
                <h2>A three-step integration setup</h2>
                <p>Link your accounts for easier project tracking.
                </p>
              </div>
              <div id="active_Current_Tabs1">
                <div class="flex_row">
                  <div class="column-left">
                    <div class="all-content">
                      <div class="text-column active" id="t1" data-section="active_Current_Tabs1">
                        <h5>Step 1</h5>
                        <h3>Add the Zoho integration in Workstatus</h3>
                        <p>Log into Zoho and Workstatus accounts. Select integrations from the sidebar and click Zoho from the list.
                        </p>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="./assests/images/tab-image-01.webp">
                          <source type="image/png" srcset="./assests/images/tab-image-01.png">
                          <img loading="lazy" src="./assests/images/tab-image-01.png"
                            alt="employee management system" width="633" height="645">
                        </picture>
                      </div>
                    </div>
                    <div class="all-content">
                      <div class="text-column" id="t2" data-section="active_Current_Tabs1">
                        <h5>Step 2</h5>
                        <h3>Add the Zoho integration in Workstatus</h3>
                        <p>Log into Zoho and Workstatus accounts. Select integrations from the sidebar and click Zoho from the list.
                        </p>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="./assests/images/tab-image-02.webp">
                          <source type="image/png" srcset="./assests/images/tab-image-02.png">
                          <img loading="lazy" src="./assests/images/tab-image-01.png"
                            alt="Productivity Measurement" width="659" height="552">
                        </picture>
                      </div>
                    </div>
                    <div class="all-content">
                      <div class="text-column" id="t3" data-section="active_Current_Tabs1">
                        <h5>Step 3</h5>
                        <h3>Add the Zoho integration in Workstatus</h3>
                        <p>Log into Zoho and Workstatus accounts. Select integrations from the sidebar and click Zoho from the list.
                        </p>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="./assests/images/tab-image-03.webp">
                          <source type="image/png" srcset="./assests/images/tab-image-03.png">
                          <img loading="lazy" src="./assests/images/tab-image-03.png"
                            alt="workforce tracking" width="664" height="492">
                        </picture>
                      </div>
                    </div>
                  </div>
                  <div class="column-right">
                    <picture class="page active" id="p1">
                      <source type="image/webp" srcset="./assests/images/tab-image-01.webp">
                      <source type="image/png" srcset="./assests/images/tab-image-01.png">
                      <img loading="lazy" src="./assests/images/tab-image-01.png" alt="employee management system"
                        width="633" height="645">
                    </picture>
                    <picture class="page" id="p2">
                      <source type="image/webp" srcset="./assests/images/tab-image-02.webp">
                      <source type="image/png" srcset="./assests/images/tab-image-02.png">
                      <img loading="lazy" src="./assests/images/tab-image-01.png"
                        alt="Productivity Measurement" width="659" height="552">
                    </picture>
                    <picture class="page" id="p3">
                      <source type="image/webp" srcset="./assests/images/tab-image-03.webp">
                      <source type="image/png" srcset="./assests/images/tab-image-03.png">
                      <img loading="lazy" src="./assests/images/tab-image-03.png"
                        alt="workforce tracking" width="664" height="492">
                    </picture>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="step-sec">
          <div class="container">
            <div class="step-row flex_row">
              <div class="image-col">
                <picture>
                  <source type="image/webp" srcset="./assests/images/zoho-image01.png">
                  <source type="image/png" srcset="./assests/images/zoho-image01.png">
                  <img loading="lazy" src="./assests/images/zoho-image01.png" alt="WS" width="602" height="475">
                </picture>
              </div>
              <div class="content-col">
                <div class="top-section">
                  <h6><span class="bg-purple">Online Timesheets</span></h6>
                  <h2>Automated Time Entry</h2>
                  <p>Say goodbye to manual time tracking. Automatically populate timesheets in Zoho using Workstatus data. Allocate more time to meaningful work and less to administrative tasks.</p>
                </div>
              </div>
            </div>
            <div class="step-row flex_row">
              <div class="image-col">
                <picture>
                  <source type="image/webp" srcset="./assests/images/zoho-image01.png">
                  <source type="image/png" srcset="./assests/images/zoho-image01.png">
                  <img loading="lazy" src="./assests/images/zoho-image01.png" alt="WS" width="602" height="475">
                </picture>
              </div>
              <div class="content-col">
                <div class="top-section">
                  <h6><span class="bg-purple">Online Timesheets</span></h6>
                  <h2>Automated Time Entry</h2>
                  <p>Say goodbye to manual time tracking. Automatically populate timesheets in Zoho using Workstatus data. Allocate more time to meaningful work and less to administrative tasks.</p>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="one-solution list-icon bglight">
          <div class="container">
            <div class="top-section">
              <h6><span class="bg-purple">DUMMY TEXT</span></h6>
              <h2>More Than AWS Time Tracker App</h2>
            </div>
            <div class="flex_row">
              <div class="column-three">
                <div class="box">
                  <div class="bx-content">
                    <picture>
                      <source type="image/webp" srcset="./assests/images/one-sol01.webp">
                      <source type="image/png" srcset="./assests/images/one-sol01.png">
                      <img loading="lazy" src="./assests/images/one-sol01.png" alt="One Solution" width="92" height="59">
                    </picture>
                    <h3>Data Synchronization</h3>
                    <p>Instantly transfer time-tracking data to Zoho for accurate reporting.</p>
                  </div>
                </div>
              </div>
              <div class="column-three">
                <div class="box">
                  <div class="bx-content">
                    <picture>
                      <source type="image/webp" srcset="./assests/images/one-sol01.webp">
                      <source type="image/png" srcset="./assests/images/one-sol01.png">
                      <img loading="lazy" src="./assests/images/one-sol01.png" alt="One Solution" width="92" height="59">
                    </picture>
                    <h3>Centralized Project Management</h3>
                    <p>Instantly transfer time-tracking data to Zoho for accurate reporting.</p>
                  </div>
                </div>
              </div>
              <div class="column-three">
                <div class="box">
                  <div class="bx-content">
                    <picture>
                      <source type="image/webp" srcset="./assests/images/one-sol01.webp">
                      <source type="image/png" srcset="./assests/images/one-sol01.png">
                      <img loading="lazy" src="./assests/images/one-sol01.png" alt="One Solution" width="92" height="59">
                    </picture>
                    <h3>On-Premise Teams Management</h3>
                    <p>Instantly transfer time-tracking data to Zoho for accurate reporting.</p>
                  </div>
                </div>
              </div>
              <div class="column-three">
                <div class="box">
                  <div class="bx-content">
                    <picture>
                      <source type="image/webp" srcset="./assests/images/one-sol01.webp">
                      <source type="image/png" srcset="./assests/images/one-sol01.png">
                      <img loading="lazy" src="./assests/images/one-sol01.png" alt="One Solution" width="92" height="59">
                    </picture>
                    <h3>Field Service Management</h3>
                    <p>Instantly transfer time-tracking data to Zoho for accurate reporting.</p>
                  </div>
                </div>
              </div>
              <div class="column-three">
                <div class="box">
                  <div class="bx-content">
                    <picture>
                      <source type="image/webp" srcset="./assests/images/one-sol01.webp">
                      <source type="image/png" srcset="./assests/images/one-sol01.png">
                      <img loading="lazy" src="./assests/images/one-sol01.png" alt="One Solution" width="92" height="59">
                    </picture>
                    <h3>Freelancers Time Management</h3>
                    <p>Instantly transfer time-tracking data to Zoho for accurate reporting.</p>
                  </div>
                </div>
              </div>
              <div class="column-three">
                <div class="box">
                  <div class="bx-content">
                    <picture>
                      <source type="image/webp" srcset="./assests/images/one-sol01.webp">
                      <source type="image/png" srcset="./assests/images/one-sol01.png">
                      <img loading="lazy" src="./assests/images/one-sol01.png" alt="One Solution" width="92" height="59">
                    </picture>
                    <h3>Hybrid Workforce Management</h3>
                    <p>Instantly transfer time-tracking data to Zoho for accurate reporting.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="reviews-logo-section">
              <div class="flex_row justify-center">
                <div class="column">
                  <div class="flex_row align-center justify-center">
                    <a href="https://www.sitejabber.com/reviews/workstatus.io" rel="nofollow">
                    <span class="logo-icon">
                    <i class="reviews-logo review-logo1"></i>
                    <i class="star-icon"></i>
                    </span>
                    </a>
                  </div>
                </div>
                <div class="column">
                  <div class="flex_row align-center justify-center">
                    <a href="https://sourceforge.net/software/product/Workstatus/" rel="nofollow">
                    <span class="logo-icon">
                    <i class="reviews-logo review-logo2"></i>
                    <i class="star-icon"></i>
                    </span>
                    </a>
                  </div>
                </div>
                <div class="column">
                  <div class="flex_row align-center justify-center">
                    <a href="https://www.goodfirms.co/software/workstatus" rel="nofollow">
                    <span class="logo-icon">
                    <i class="reviews-logo review-logo3"></i>
                    <i class="star-icon"></i>
                    </span>
                    </a>
                  </div>
                </div>
                <div class="column">
                  <div class="flex_row align-center justify-center">
                    <a href="https://www.g2.com/products/valuecoders-workstatus/reviews" rel="nofollow">
                    <span class="logo-icon">
                    <i class="reviews-logo review-logo4"></i>
                    <i class="star-icon"></i>
                    </span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="support-team">
          <div class="container">
            <div class="support-row flex_row">
              <div class="sup-image">
                <picture>
                  <source type="image/webp" srcset="./assests/images/zoho-start.png">
                  <source type="image/png" srcset="./assests/images/zoho-start.png">
                  <img loading="lazy" src="./assests/images/zoho-start.png" alt="WS" width="504" height="387">
                </picture>
              </div>
              <div class="sup-content">
                <h5>Don’t know how to start?</h5>
                <h2>Let our support team walk 
                  you through the setup.
                </h2>
                <div class="mt40 btnSc">
                  <a href="javascript:void(0)" onclick="call_demows();" rel="nofollow" class="primary_btn1">Book A Demo</a>
                  <small>No credit card required</small>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="step-sec">
          <div class="container">
            <div class="step-row flex_row">
              <div class="image-col">
                <picture>
                  <source type="image/webp" srcset="./assests/images/zoho-image01.png">
                  <source type="image/png" srcset="./assests/images/zoho-image01.png">
                  <img loading="lazy" src="./assests/images/zoho-image01.png" alt="WS" width="602" height="475">
                </picture>
              </div>
              <div class="content-col">
                <div class="top-section">
                  <h6><span class="bg-purple">Online Timesheets</span></h6>
                  <h2>Automated Time Entry</h2>
                  <p>Say goodbye to manual time tracking. Automatically populate timesheets in Zoho using Workstatus data. Allocate more time to meaningful work and less to administrative tasks.</p>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="faqsRow wfull for-heading-center bglight">
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
                    <h3 itemprop="name">What is Workforce management (WFM) software, and how much does
                      it cost?
                    </h3>
                    <div class="faq-accordion-content">
                      <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div itemprop="text">
                          <p>Workforce management software is a suite of applications designed to
                            provide a
                            centralized, automated tool for managing human resources operations
                            at the workplace. There is no
                            fixed price for workforce management software as it largely depends
                            upon the offered features and
                            functions. Workstatus comes with a free version for personal work
                            management and a paid version
                            starts at just $4.16.
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="faq-accordion-item-outer" itemscope itemprop="mainEntity"
                    itemtype="https://schema.org/Question">
                    <h3 itemprop="name">How does the Workforce Management System (WMS) work?</h3>
                    <div class="faq-accordion-content">
                      <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div itemprop="text">
                          <p> Workforce management software manages employees’ schedules, time
                            tracking and
                            timely project deliveries. It allows managers to create shift
                            schedules, track employee hours, and
                            calculate billable hours for any project. It can also be used with
                            other HR software, project
                            management software, applicant tracking systems or learning
                            management systems.
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="faq-accordion-item-outer" itemscope itemprop="mainEntity"
                    itemtype="https://schema.org/Question">
                    <h3 itemprop="name">What should I look for in workforce management software?</h3>
                    <div class="faq-accordion-content">
                      <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div itemprop="text">
                          <p>When looking for a suitable workforce management software, you should
                            consider the
                            features that are important to you and your business. The most
                            important features include time
                            tracking, attendance tracking, task scheduling and project cost
                            management. You should also consider
                            the software's ease of use at all levels - for employees as well as
                            managers. Customer support is
                            also an important consideration, which can come handy if you have
                            questions or need help using the
                            software.
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="faq-accordion-item-outer" itemscope itemprop="mainEntity"
                    itemtype="https://schema.org/Question">
                    <h3 itemprop="name">Why is WFM important?</h3>
                    <div class="faq-accordion-content">
                      <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div itemprop="text">
                          <p>Workforce management (WFM) plays an important role for any
                            organization because it ensures that an organization has the right
                            number of employees with the appropriate skills and
                            experience to meet its strategic objectives. When workforce
                            management is done well, it can help
                            organizations control costs, optimize resources and improve employee
                            productivity.
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="faq-accordion-item-outer" itemscope itemprop="mainEntity"
                    itemtype="https://schema.org/Question">
                    <h3 itemprop="name">What is workforce analytics? Can you explain with examples?</h3>
                    <div class="faq-accordion-content">
                      <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div itemprop="text">
                          <p>Workforce analytics means collecting and analyzing data to understand
                            how an organization's
                            workforce performs. It helps employers make more informed decisions
                            about hiring, training and
                            organizational restructuring.
                          </p>
                          <p>Some examples of what workforce analytics can be used for include:
                          </p>
                          <ul>
                            <li>Forecasting future headcount needs</li>
                            <li>Identifying staffing gaps and surpluses</li>
                            <li>Assessing employee skills and capabilities</li>
                            <li>Predicting turnover or attrition rates</li>
                            <li>Measuring the impact of training and development programs</li>
                            <li>Benchmarking employee performance against industry peers</li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="faq-accordion-item-outer" itemscope itemprop="mainEntity"
                    itemtype="https://schema.org/Question">
                    <h3 itemprop="name"> Is my organization's tracked data secured with a WFM software
                      like Workstatus™?
                    </h3>
                    <div class="faq-accordion-content">
                      <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div itemprop="text">
                          <p>Yes, your organization's tracked data is completely secured with a
                            WFM software like
                            Workstatus. Workstatus is a secure, cloud-based solution that meets
                            the most stringent security
                            requirements too. Workstatus, a trusted WFM software, employs
                            multiple layers of security, including
                            firewalls, intrusion detection & prevention systems that don't allow
                            data breaches even among the
                            teams.
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="faq-accordion-item-outer" itemscope itemprop="mainEntity"
                    itemtype="https://schema.org/Question">
                    <h3 itemprop="name">Can the workforce management system work without the internet?
                    </h3>
                    <div class="faq-accordion-content">
                      <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div itemprop="text">
                          <p>Yes, workforce management software like Workstatus allows users to
                            record time
                            without the internet. This is a valuable feature when there are any
                            internet connectivity issues.
                            The activity is kept locally until the tools are operational again,
                            and then it is uploaded to
                            Workstatus' cloud-based timekeeping solution.
                          </p>
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
                <a href="https://www.workstatus.io/blog/how-to-develop-and-maintain-productivity-guide-for-small-businesses/"
                  class="blog-link">
                  <div class="thumb">
                    <picture>
                      <source type="image/webp" srcset="./assests/images/useful-resources-blog-1.jpg">
                      <source type="image/png" srcset="./assests/images/useful-resources-blog-1.jpg">
                      <img loading="lazy" src="./assests/images/useful-resources-blog-1.jpg"
                        alt="Workstatus Time" width="400" height="242">
                    </picture>
                  </div>
                  <div class="blog-title">
                    <h3>How to Develop and Maintain Productivity Guide for Small Businesses</h3>
                    <span class="small_anchor">Read more</span>
                  </div>
                </a>
              </div>
              <div class="blog-box column-three">
                <a href="https://www.workstatus.io/blog/why-is-workplace-analytics-critical-no-matter-where-people-work/"
                  class="blog-link">
                  <div class="thumb">
                    <picture>
                      <source type="image/webp" srcset="./assests/images/useful-resources-blog-2.jpg">
                      <source type="image/png" srcset="./assests/images/useful-resources-blog-2.jpg">
                      <img loading="lazy" src="./assests/images/useful-resources-blog-2.jpg"
                        alt="Workstatus Time" width="400" height="242">
                    </picture>
                  </div>
                  <div class="blog-title">
                    <h3>Why is Workplace Analytics Critical No Matter Where People Work</h3>
                    <span class="small_anchor">Read more</span>
                  </div>
                </a>
              </div>
              <div class="blog-box column-three">
                <a href="https://www.workstatus.io/blog/10-features-of-workstatus-that-make-it-a-perfect-workforce-management-system/"
                  class="blog-link">
                  <div class="thumb">
                    <picture>
                      <source type="image/webp" srcset="./assests/images/useful-resources-blog-3.jpg">
                      <source type="image/png" srcset="./assests/images/useful-resources-blog-3.jpg">
                      <img loading="lazy" src="./assests/images/useful-resources-blog-3.jpg"
                        alt="Workstatus Time" width="400" height="242">
                    </picture>
                  </div>
                  <div class="blog-title">
                    <h3>10 Features of Workstatus : Perfect Workforce Management System</h3>
                    <span class="small_anchor">Read more</span>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </section>
        <?php if( !isMobile() ) : ?>
        <section class="testimonial testmHome ">
          <div class="container">
            <div class="top-section">
              <h6><span class="bg-white">Testimonials</span></h6>
              <h2>Businesses Love Using Workstatus™</h2>
            </div>
            <div class="glider-testimonial">
              <div class="glider-contain">
                <div class="glider2">
                  <div>
                    <p>“ We were looking for an ease for our employees and in-depth
                      analytics for our managers.
                      We explored many options available in the market but zeroed in on Workstatus
                      because of a clean crisp
                      interface, single click start and many useful insights we get to feed my
                      managers’ needs. Happy that we
                      decided on this tool, we have noted a rise in productivity and are able to meet
                      our deadlines and
                      budgets better. ”
                    </p>
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
                        <p class="para_extrasmall white">Bob Simmons, USA</p>
                      </div>
                    </div>
                  </div>
                  <div>
                    <p>“ Workstatus has given a significant boost to our business growth
                      as our people are
                      consciously productive, being aware that their time is tracked and activities
                      are being monitored.
                      Thanks to Workstatus, this boost was very much needed! ”
                    </p>
                    <div class="border"><span class="element-triangle"></span></div>
                    <div class="author-box">
                      <picture>
                        <source type="image/webp" srcset="./assests/images/avatar.webp">
                        <source type="image/png" srcset="./assests/images/avatar.png">
                        <img loading="lazy" src="./assests/images/avatar.png" alt="Alex" width="54"
                          height="54">
                      </picture>
                      <div class="author-content">
                        <p class="para_extrasmall white">Elijah Blake, USA</p>
                      </div>
                    </div>
                  </div>
                  <div>
                    <p>“ We have been working in very complex geographies with hybrid
                      teams for a few years now.
                      Multiple offices, flexible shifts, client sites, and much more had earlier made
                      it difficult for us to
                      track our employees location and time devoted to their assigned work
                      responsibilities. Our new workforce
                      management app, Workstatus, has made life easy for our managers. Now, we get a
                      centralized view of what
                      our workforce is upto. We are now able to increase team head counts and
                      retaining clients better. ”
                    </p>
                    <div class="border"><span class="element-triangle"></span></div>
                    <div class="author-box">
                      <picture>
                        <source type="image/webp" srcset="./assests/images/avatar.webp">
                        <source type="image/png" srcset="./assests/images/avatar.png">
                        <img loading="lazy" src="./assests/images/avatar.png" alt="Larry" width="54"
                          height="54">
                      </picture>
                      <div class="author-content">
                        <p class="para_extrasmall white">Chris Lawrence, UK</p>
                      </div>
                    </div>
                  </div>
                  <div>
                    <p>“ Workstatus has given us an edge by helping us in managing our
                      projects better. We are
                      able to forecast our project budgets and expected delivery timelines based on
                      previous employees’
                      performance. Overall, we can now quantify the work done, with higher
                      productivity rates. Best part is,
                      this is a simple switch on-off timer for employees which works silently in the
                      background. No hassle! ”
                    </p>
                    <div class="border"><span class="element-triangle"></span></div>
                    <div class="author-box">
                      <picture>
                        <source type="image/webp" srcset="./assests/images/avatar.webp">
                        <source type="image/png" srcset="./assests/images/avatar.png">
                        <img loading="lazy" src="./assests/images/avatar.png" alt="John" width="54"
                          height="54">
                      </picture>
                      <div class="author-content">
                        <p class="para_extrasmall white">Patrick Kieren, Germany</p>
                      </div>
                    </div>
                  </div>
                  <div>
                    <p>“ Since we have started using Workstatus, we can optimize our time
                      spent on specific
                      activities or projects. We can provide the best service to each of our clients
                      while still having enough
                      workforce for other projects. Workforce has almost doubled our profits with
                      useful insights on various
                      areas. ”
                    </p>
                    <div class="border"><span class="element-triangle"></span></div>
                    <div class="author-box">
                      <picture>
                        <source type="image/webp" srcset="./assests/images/avatar.webp">
                        <source type="image/png" srcset="./assests/images/avatar.png">
                        <img loading="lazy" src="./assests/images/avatar.png" alt="Jessica"
                          width="54" height="54">
                      </picture>
                      <div class="author-content">
                        <p class="para_extrasmall white">R K Jain, India</p>
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
        <?php require_once 'common/workstatus-journey-straight.php';?>
      </main>
      <?php require_once 'common/footer.php';?>
    </div>
    <?php if( !isMobile() ) : ?>
    <script src="assests/js/glider.min.js"></script>
    <?php endif; ?>
    <script src="assests/js/script.js?var=<?php echo time(); ?>"></script>
  </body>
</html>
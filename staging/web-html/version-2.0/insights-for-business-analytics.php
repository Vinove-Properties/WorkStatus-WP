<?php require_once 'common/inc/config.inc.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="alternate" href="<?php echo SITE_URL; ?>/insights-for-business-analytics" hreflang="en-us" />
    <link type="text/css" href="./assests/css/featureDetail-new.css" rel="preload stylesheet" as="style" />
    <?php require_once 'common/inc/header-files.php';?>
  </head>
  <body>
    <?php require_once 'common/inc/after-body-tag.php'; ?>
    <div class="body__wrapper">
      <div class="feature-header">
        <?php require_once 'common/header.php';?>
      </div>
      <main class="site__content">
        <section class="inner-banner">
          <div class="container">
            <div class="inner-wrap">
              <h1>Workforce Analytics Software For<br class="linebrk"> Workplace Efficiency</h1>
              <p>Workstatus™ provides AI driven data analytics for the workforce, helping employers make data-backed informed decisions about their businesses.<br class="linebrk"> Get top-notch data visualizations to spot trends and outliers helpful in making decisions about where to focus.
              </p>
              <!-- <ul class="list">
                <li>Extensive data tracking and analysis capabilities</li>
                <li>Actionable insights</li>
                <li>Detailed & intuitive reports</li>
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
              <div class="video-wrap">
                <div class="videoSc" id="has-yt-video">
                  <div class="inner">
                    <div class="topVideo srp-2">
                      <div id="myDIV" class="contbox2">
                        <div class="videoWrapper">
                          <!--<iframe id="video" class="videoIframe" allowfullscreen
                            data-src="https://www.youtube.com/embed/QOE35F45MI8?enablejsapi=1&html5=1&mute=1">
                            </iframe>-->
                          <button class="videoPoster lazy-background" id="play-button">
                            Play video
                            <!--<span class="playicon"></span>-->
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
        <section class="boxDiv">
          <div class="container">
            <div class="top-section">
              <h6><span class="bg-purple">Comprehensive Dashboard</span></h6>
              <h2>AI-Powered Workforce Data Analytics Software</h2>
              <p>Get complete analytics & insights software for Business Intelligence with sophisticated capabilities like invoicing, time tracking, reporting, project management, and more to handle and organize your tasks in one location.</p>
            </div>
            <div class="boxRow premise-row">
              <div class="boxCol">
                <i class="icon1"></i>
                <h3>Project Budgeting</h3>
                <p>Get a strong bottom line by tracking & controlling the budget for each of your projects. 
                </p>
              </div>
              <div class="boxCol">
                <i class="icon2"></i>
                <h3>Project Management</h3>
                <p>Easy to monitor how much time your team is spending on each task, thus pooling in the right resources for timely completion.
                </p>
              </div>
              <div class="boxCol">
                <i class="icon3"></i>
                <h3>Leave Management</h3>
                <p>Instantly approve or reject the time-off requests raised by on-premise/remote employees or freelancers from the dashboard.</p>
              </div>
              <div class="boxCol">
                <i class="icon4"></i>
                <h3>Time Tracking</h3>
                <p>Accurately track time worked by team members, down to the seconds, so you know the pattern of how the working time is utilized.</p>
              </div>
              <div class="boxCol">
                <i class="icon5"></i>
                <h3>Productivity Tracker</h3>
                <p>Easily monitor the productivity of your workforce at employee as team level on each task and project.
                </p>
              </div>
              <div class="boxCol">
                <i class="icon6"></i>
                <h3>Selfie Validation</h3>
                <p>When employees start a new time tracking session, it will prompt them to take a selfie to ensure that only they are working and billed for that time.
                </p>
              </div>
            </div>
          </div>
        </section>
        <section class="middle-section feature-section">
          <div class="item">
            <div class="container">
              <div class="top-section">
                <h6><span class="bg-purple">Unleash The Power Of Data</span></h6>
                <h2>AI-Powered Insights For Workforce Analytics - Workstatus™</h2>
                <p>With Workstatus, you can quickly analyze how your team performs and where they need to improve. This helps you manage your team more effectively and proactively avoid potential problems or risks.
                </p>
              </div>
              <div id="active_Current_Tabs1">
                <div class="flex_row">
                  <div class="column-right">
                    <picture class="page active" id="p1">
                      <source type="image/webp" srcset="./assests/images/insight-01.webp">
                      <source type="image/png" srcset="./assests/images/insight-01.png">
                      <img loading="lazy" src="./assests/images/insight-01.png"
                        alt="Insight" width="463" height="453">
                    </picture>
                    <picture class="page" id="p2">
                      <source type="image/webp" srcset="./assests/images/insight-02.webp">
                      <source type="image/png" srcset="./assests/images/insight-02.png">
                      <img loading="lazy" src="./assests/images/insight-02.png"
                        alt="Insight" width="463" height="453">
                    </picture>
                    <picture class="page" id="p3">
                      <source type="image/webp" srcset="./assests/images/insight-03.webp">
                      <source type="image/png" srcset="./assests/images/insight-03.png">
                      <img loading="lazy" src="./assests/images/insight-03.png"
                        alt="Insight" width="463" height="453">
                    </picture>
                  </div>
                  <div class="column-left">
                    <div class="all-content">
                      <div class="text-column active" id="t1" data-section="active_Current_Tabs1">
                        <h3><i></i>Powerful Insights</h3>
                        <p>Workstatus provides insights to help businesses improve their performance. From real-time analytics to detailed reports, Workstatus gives users the information to focus on marketing efforts and increase ROI.
                        </p>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="./assests/images/insight-01.webp">
                          <source type="image/png" srcset="./assests/images/insight-01.png">
                          <img loading="lazy" src="./assests/images/insight-01.png"
                            alt="Insight" width="463" height="453">
                        </picture>
                      </div>
                    </div>
                    <div class="all-content">
                      <div class="text-column" id="t2" data-section="active_Current_Tabs1">
                        <h3><i></i>Data-Driven Workflows</h3>
                        <p>Get fresh, reliable, and relevant data to improve your workflow to drive fruitful outcomes. Workstatus helps managers track progress and spot trends‌.</p>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="./assests/images/insight-02.webp">
                          <source type="image/png" srcset="./assests/images/insight-02.png">
                          <img loading="lazy" src="./assests/images/insight-02.png"
                            alt="Insight" width="463" height="453">
                        </picture>
                      </div>
                    </div>
                    <div class="all-content">
                      <div class="text-column" id="t3" data-section="active_Current_Tabs1">
                        <h3><i></i>In-Depth Analysis with BI</h3>
                        <p>Our smart AI assistant makes it easy to set up smart alerts and generate automated analytics with a single click to create a more efficient workplace.</p>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="./assests/images/insight-03.webp">
                          <source type="image/png" srcset="./assests/images/insight-03.png">
                          <img loading="lazy" src="./assests/images/insight-03.png"
                            alt="Insight" width="463" height="453">
                        </picture>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?php if( geoCTAcheck() === true ) : ?>
              <div class="mt40 btnSc">
                <p>Get Started With Data Visualization Today!</p>
                <a href="<?php echo $RegLink; ?>" class="primary_btn1"><?php echo $ws_ctas['cta_text']; ?></a>
                <small>Quickly Get Your Team On Board</small>
              </div>
              <?php endif; ?>
            </div>
          </div>
          <div class="item">
            <div class="container">
              <div class="top-section">
                <h6><span class="bg-purple">Let Your Data Speak</span></h6>
                <h2>Business Intelligence With Workplace Analytics Software</h2>
                <p>Workstatus automates data analysis to help businesses make sense of the vast amounts of data and identify patterns that are difficult to detect. This can help companies improve their decision-making, strategic planning, and operations.</p>
              </div>
              <div id="active_Current_Tabs2">
                <div class="flex_row">
                  <div class="column-right">
                    <picture class="page active" id="p4">
                      <source type="image/webp" srcset="./assests/images/insight-04.webp">
                      <source type="image/png" srcset="./assests/images/insight-04.png">
                      <img loading="lazy" src="./assests/images/insight-04.png"
                        alt="Insight" width="463" height="453">
                    </picture>
                    <picture class="page" id="p5">
                      <source type="image/webp" srcset="./assests/images/insight-05.webp">
                      <source type="image/png" srcset="./assests/images/insight-05.png">
                      <img loading="lazy" src="./assests/images/insight-05.png"
                        alt="Insight" width="463" height="453">
                    </picture>
                    <picture class="page" id="p6">
                      <source type="image/webp" srcset="./assests/images/insight-06.webp">
                      <source type="image/png" srcset="./assests/images/insight-06.png">
                      <img loading="lazy" src="./assests/images/insight-06.png"
                        alt="Insight" width="463" height="453">
                    </picture>
                    <picture class="page" id="p7">
                      <source type="image/webp" srcset="./assests/images/insight-07.webp">
                      <source type="image/png" srcset="./assests/images/insight-07.png">
                      <img loading="lazy" src="./assests/images/insight-07.png"
                        alt="Insight" width="463" height="453">
                    </picture>
                  </div>
                  <div class="column-left">
                    <div class="all-content">
                      <div class="text-column active" id="t4" data-section="active_Current_Tabs2">
                        <h3>Predictive Analytics</h3>
                        <p>Workstatus uses predictive analytics to identify trends and patterns in data, helping businesses make better decisions and future ‌plans.
                        </p>
                        <ul class="checkList">
                          <li>Easy to optimize strategies</li>
                          <li>Analyze large data sets quickly and easily</li>
                        </ul>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="./assests/images/insight-04.webp">
                          <source type="image/png" srcset="./assests/images/insight-04.png">
                          <img loading="lazy" src="./assests/images/insight-04.png"
                            alt="Insight" width="463" height="453">
                        </picture>
                      </div>
                    </div>
                    <div class="all-content">
                      <div class="text-column" id="t5" data-section="active_Current_Tabs2">
                        <h3>Self-Learning Capabilities</h3>
                        <p>Workstatus learns over time. It becomes increasingly efficient and accurate in its predictions as it accumulates more data.
                        </p>
                        <ul class="checkList">
                          <li>Handle large amounts of data</li>
                          <li>Get more accurate predictions</li>
                        </ul>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="./assests/images/insight-05.webp">
                          <source type="image/png" srcset="./assests/images/insight-05.png">
                          <img loading="lazy" src="./assests/images/insight-05.png"
                            alt="Insight" width="463" height="453">
                        </picture>
                      </div>
                    </div>
                    <div class="all-content">
                      <div class="text-column" id="t6" data-section="active_Current_Tabs2">
                        <h3>Visualization And Reporting Tools</h3>
                        <p>Workstatus also provides tools for visualizing data in various formats, making it easy for business users to quickly access the information they need.
                        </p>
                        <ul class="checkList">
                          <li>Increased clarity and understanding of data</li>
                          <li>Greater insights from exploratory analysis</li>
                        </ul>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="./assests/images/insight-06.webp">
                          <source type="image/png" srcset="./assests/images/insight-06.png">
                          <img loading="lazy" src="./assests/images/insight-06.png"
                            alt="Insight" width="463" height="453">
                        </picture>
                      </div>
                    </div>
                    <div class="all-content">
                      <div class="text-column" id="t7" data-section="active_Current_Tabs2">
                        <h3>Scalability & Performance</h3>
                        <p>Workstatus can scale up as needed, making it versatile and allowing businesses of all sizes and industries to benefit from its functionality.
                        </p>
                        <ul class="checkList">
                          <li>Reduced operating costs</li>
                          <li>Improved customer experience</li>
                        </ul>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="./assests/images/insight-07.webp">
                          <source type="image/png" srcset="./assests/images/insight-07.png">
                          <img loading="lazy" src="./assests/images/insight-07.png"
                            alt="Insight" width="463" height="453">
                        </picture>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="mt40 btnSc">
                <p>Transform Your Data Into Insights Now!</p>
                <a href="javascript:void(0)" onclick="call_demows();" class="primary_btn1">Book A Demo</a>
                <small>Use The Power Of Data</small>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="container">
              <div class="top-section">
                <h6><span class="bg-purple">Employee Tracking & Retention</span></h6>
                <h2>Reliable Employee Analytics Software For Improved Workforce</h2>
                <p>Workstatus helps organizations identify and track top talent. By identifying high-performing employees, managers can take measures to retain these workers.
                </p>
              </div>
              <div id="active_Current_Tabs3">
                <div class="flex_row">
                  <div class="column-right">
                    <picture class="page active" id="p8">
                      <source type="image/webp" srcset="./assests/images/insight-08.webp">
                      <source type="image/png" srcset="./assests/images/insight-08.png">
                      <img loading="lazy" src="./assests/images/insight-08.png"
                        alt="Insight" width="463" height="453">
                    </picture>
                    <picture class="page" id="p9">
                      <source type="image/webp" srcset="./assests/images/insight-09.webp">
                      <source type="image/png" srcset="./assests/images/insight-09.png">
                      <img loading="lazy" src="./assests/images/insight-09.png"
                        alt="Insight" width="463" height="453">
                    </picture>
                    <picture class="page" id="p10">
                      <source type="image/webp" srcset="./assests/images/insight-10.webp">
                      <source type="image/png" srcset="./assests/images/insight-10.png">
                      <img loading="lazy" src="./assests/images/insight-10.png"
                        alt="Insight" width="463" height="453">
                    </picture>
                  </div>
                  <div class="column-left">
                    <div class="all-content">
                      <div class="text-column active" id="t8" data-section="active_Current_Tabs3">
                        <h3><i></i> Improved Work Environment </h3>
                        <p>Track employee engagement and satisfaction levels to identify areas where employees struggle or feel disengaged. Use this information to target interventions and improve the work environment for all employees.
                        </p>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="./assests/images/insight-08.webp">
                          <source type="image/png" srcset="./assests/images/insight-08.png">
                          <img loading="lazy" src="./assests/images/insight-08.png"
                            alt="Insight" width="463" height="453">
                        </picture>
                      </div>
                    </div>
                    <div class="all-content">
                      <div class="text-column" id="t9" data-section="active_Current_Tabs3">
                        <h3><i></i>Keep Employees Motivated</h3>
                        <p>Identify high-performing employees and understand what makes them successful. Companies can then share this information with other employees to inspire and motivate them.</p>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="./assests/images/insight-09.webp">
                          <source type="image/png" srcset="./assests/images/insight-09.png">
                          <img loading="lazy" src="./assests/images/insight-09.png"
                            alt="Insight" width="463" height="453">
                        </picture>
                      </div>
                    </div>
                    <div class="all-content">
                      <div class="text-column" id="t10" data-section="active_Current_Tabs3">
                        <h3><i></i>Better Decision Making</h3>
                        <p>Employers can see how their workforce is changing over time and identify trends that may need to be addressed. This information can help them ‌make better decisions about hiring, firing, and promoting employees.</p>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="./assests/images/insight-10.webp">
                          <source type="image/png" srcset="./assests/images/insight-10.png">
                          <img loading="lazy" src="./assests/images/insight-10.png"
                            alt="Insight" width="463" height="453">
                        </picture>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?php if( geoCTAcheck() === true ) : ?>
              <div class="mt40 btnSc">
                <p>Get Started With Workforce Analytics Software</p>
                <a href="<?php echo $RegLink; ?>" class="primary_btn1"><?php echo $ws_ctas['cta_text']; ?></a>
                <small>Explore Now!!</small>
              </div>
              <?php endif; ?>
            </div>
          </div>
        </section>
        <section class="wsMobile whitetxt">
          <?php require_once 'common/workstatus-device.php';?>
        </section>
        <?php if( !isMobile() ) : ?>
        <section class="testimonial testmHome ">
          <div class="container">
            <div class="top-section">
              <h6><span class="bg-white">Testimonials</span></h6>
              <h2>Listen To Our Customers</h2>
            </div>
            <div class="glider-testimonial">
              <div class="glider-contain">
                <div class="glider2">
                  <div>
                    <p class="white">“ Workstatus has completely changed the way we manage our team's productivity. The reports and data it provides have been invaluable in helping us identify problem areas and take corrective action. ”</p>
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
                        <p class="para_extrasmall white">John, Business Owner</p>
                      </div>
                    </div>
                  </div>
                  <div>
                    <p class="white">“ We've tried several workforce analytics tools over the years, but Workstatus is by far the best. It's easy to use and provides a wealth of data that is really helpful in understanding how our employees are performing. ”</p>
                    <div class="border"><span class="element-triangle"></span></div>
                    <div class="author-box">
                      <picture>
                        <source type="image/webp" srcset="./assests/images/avatar.webp">
                        <source type="image/png" srcset="./assests/images/avatar.png">
                        <img loading="lazy" src="./assests/images/avatar.png" alt="Alex" width="54"
                          height="54">
                      </picture>
                      <div class="author-content">
                        <p class="para_extrasmall white">Sarah, HR Manager</p>
                      </div>
                    </div>
                  </div>
                  <div>
                    <p class="white">“ Since using Workstatus, we've seen a marked improvement in our team's productivity. I couldn't imagine managing without it now. The graphs and data are very insightful and easy to interpret.  ”</p>
                    <div class="border"><span class="element-triangle"></span></div>
                    <div class="author-box">
                      <picture>
                        <source type="image/webp" srcset="./assests/images/avatar.webp">
                        <source type="image/png" srcset="./assests/images/avatar.png">
                        <img loading="lazy" src="./assests/images/avatar.png" alt="Larry" width="54"
                          height="54">
                      </picture>
                      <div class="author-content">
                        <p class="para_extrasmall white">Jim, Project Manager</p>
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
                    <h3 itemprop="name">What is Business Intelligence and Analytics?
                    </h3>
                    <div class="faq-accordion-content">
                      <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div itemprop="text">
                          <p>Business Intelligence (BI) and Analytics are often used interchangeably. However, there is a distinction between the two disciplines. BI means collecting, organizing, and analyzing business data to understand past performance and improve future outcomes. Analytics uses data analysis techniques to identify patterns and trends in business data to forecast future outcomes.
                          </p>
                          <p>
                            Both BI and Analytics are essential for businesses today as they help make accurate data-driven decisions. Collecting and analyzing data allows companies to understand what is working well and needs improvement. Forecasting future outcomes will enable businesses to make informed decisions about allocating resources to achieve desired results.
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="faq-accordion-item-outer" itemscope itemprop="mainEntity"
                    itemtype="https://schema.org/Question">
                    <h3 itemprop="name">How do BI And BA apply to a business?</h3>
                    <div class="faq-accordion-content">
                      <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div itemprop="text">
                          <p>Businesses use BI and Analytics to understand their customers, business processes, and monitor employees' performance. </p>
                          <p>BI and analytics help businesses make data-driven decisions by providing insights into past performance and predicting future outcomes. By analyzing data, businesses can identify trends and patterns that would otherwise be invisible. Such information can then improve business operations, marketing efforts, product development, and more.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="faq-accordion-item-outer" itemscope itemprop="mainEntity"
                    itemtype="https://schema.org/Question">
                    <h3 itemprop="name">How does on-premise team management software work?</h3>
                    <div class="faq-accordion-content">
                      <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div itemprop="text">
                          <p>On-premise team management software is installed on a company's servers and operated by in-house IT staff. Such software is ideal for companies that want to manage their team communication and collaboration within their firewall. It also allows companies to control and monitor employees' access to information and files.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="faq-accordion-item-outer" itemscope itemprop="mainEntity"
                    itemtype="https://schema.org/Question">
                    <h3 itemprop="name">Which business intelligence tool is the best?</h3>
                    <div class="faq-accordion-content">
                      <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div itemprop="text">
                          <p>Workstatus is the best business intelligence tool in the market. First and foremost, Workstatus provides accurate, up-to-date data used to make informed decisions about your business. This data is made available in an easy-to-use interface that makes it simple to understand and act on.</p>
                          <p>Besides providing accurate data, Workstatus also offers several features that make it the most user-friendly business intelligence tool in the market. For example, Workstatus’ “Notes” feature allows you to keep track of important information about your clients and projects without remembering specific details. These notes feature shines when multiple team members are working on a project—info can be easily shared, and there’s no chance of anything getting lost or misinterpreted.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="faq-accordion-item-outer" itemscope itemprop="mainEntity"
                    itemtype="https://schema.org/Question">
                    <h3 itemprop="name">Who uses Business Intelligence tools?</h3>
                    <div class="faq-accordion-content">
                      <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div itemprop="text">
                          <p>Any organization that seeks to use data to drive business decisions can benefit from a Business Intelligence (BI) solution. </p>
                          <p>The advantages of using BI tools are many, but some ‌benefits include making informed and holistic decisions, increased efficiency and productivity through automation, and improved customer satisfaction due to better decision-making.</p>
                          <p>Organizations that embraced business intelligence have found that it enables them to make better decisions and allows them to automate repetitive tasks and processes. This frees up employees' time to focus on more strategic tasks and adds value to the organization. BI solutions improve organizational efficiency by making it easier for employees to access the information they need when they need it.</p>
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
                <a href="workstatus.io/blog/improving-workforce-performance-through-digital-transformation/" class="blog-link">
                  <div class="thumb">
                    <picture>
                      <source type="image/webp" srcset="./assests/images/useful-resources-blog-1.jpg">
                      <source type="image/png" srcset="./assests/images/useful-resources-blog-1.jpg">
                      <img loading="lazy" src="./assests/images/useful-resources-blog-1.jpg" alt="Workstatus Time" width="400" height="242"> 
                    </picture>
                  </div>
                  <div class="blog-title">
                    <h3>Improving Workforce Performance Through Digital Transformation</h3>
                    <span class="small_anchor">Read more</span>
                  </div>
                </a>
              </div>
              <div class="blog-box column-three">
                <a href="workstatus.io/blog/how-can-ai-change-the-face-of-workforce-management/
                  " class="blog-link">
                  <div class="thumb">
                    <picture>
                      <source type="image/webp" srcset="./assests/images/useful-resources-blog-2.jpg">
                      <source type="image/png" srcset="./assests/images/useful-resources-blog-2.jpg">
                      <img loading="lazy" src="./assests/images/useful-resources-blog-2.jpg" alt="Workstatus Time" width="400" height="242"> 
                    </picture>
                  </div>
                  <div class="blog-title">
                    <h3>How Can AI change the Face of Workforce Management in 2022?</h3>
                    <span class="small_anchor">Read more</span>
                  </div>
                </a>
              </div>
              <div class="blog-box column-three">
                <a href="workstatus.io/blog/why-is-workplace-analytics-critical-no-matter-where-people-work/
                  " class="blog-link">
                  <div class="thumb">
                    <picture>
                      <source type="image/webp" srcset="./assests/images/useful-resources-blog-3.jpg">
                      <source type="image/png" srcset="./assests/images/useful-resources-blog-3.jpg">
                      <img loading="lazy" src="./assests/images/useful-resources-blog-3.jpg" alt="Workstatus Time" width="400" height="242"> 
                    </picture>
                  </div>
                  <div class="blog-title">
                    <h3>Why is Workplace Analytics Critical No Matter Where People Work?</h3>
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
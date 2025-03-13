<?php require_once 'common/inc/config.inc.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="alternate" href="<?php echo SITE_URL; ?>/remote-team-management" hreflang="en-us" />
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
              <h1>Best Remote Workforce Management Software</h1>
              <p>With Workstatus, manage your remote workforce by monitoring their time, scheduling their shifts, and tracking their working hours & productivity<br class="linebrk"> in one place with just one click.
              </p>
              <!-- <ul class="list">
                <li>Track the working hours of your remote teams</li>
                <li>Track the location of your remote team in real-time</li>
                <li>Monitor their productivity via daily reports</li>
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
                    <div class="topVideo srp-13">
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
        <section class="trackEm">
          <div class="container">
            <div class="top-section">
              <h6><span class="bg-purple">Smart Management</span></h6>
              <h2>Manage Your Remote Teams Effectively With Workstatus</h2>
            </div>
            <div class="trackRow">
              <div class="trackImg">
                <picture>
                  <source type="image/webp" srcset="./assests/images/demo-remote.webp">
                  <source type="image/png" srcset="./assests/images/demo-remote.png">
                  <img loading="lazy" src="./assests/images/demo-remote.png" alt="Designed to Track" width="559" height="789">
                </picture>
              </div>
              <div class="trackContent">
                <div class="row">
                  <h3><i></i>Time Tracking</h3>
                  <p>Do more in less time by managing your remote team's time wisely and by keeping track of it.</p>
                </div>
                <div class="row">
                  <h3><i></i>GPS Tracking</h3>
                  <p>Maintain a constant trace of the location of your employees through GPS tracking.</p>
                </div>
                <div class="row">
                  <h3><i></i>Activity monitoring</h3>
                  <p>Monitor remote employees as good as in-premise employees with a centralized management tool.</p>
                </div>
                <div class="row">
                  <h3><i></i>Automatic Reports</h3>
                  <p>Stay updated with the automatically generated reports sent straight to your system.</p>
                </div>
                <div class="row">
                  <h3><i></i>Productivity Monitoring</h3>
                  <p>Monitor your remote employees’ as well as team's productivity and boost their performance.</p>
                </div>
                <div class="row">
                  <h3><i></i>Team Management</h3>
                  <p>Get all your employees' information in one place and manage your remote team more effectively.</p>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="middle-section feature-section">
          <div class="item">
            <div class="container">
              <div class="top-section">
                <h6><span class="bg-purple">Stay Updated</span></h6>
                <H2>Monitor With Remote Workforce Management Software</H2>
                <p>Never lose touch with any of your employees, no matter how far they are located. With Workstatus, you can always be sure that you're in contact with all of your remote workers.</p>
              </div>
              <div id="active_Current_Tabs1">
                <div class="flex_row">
                  <div class="column-right">
                    <picture class="page active" id="p1">
                      <source type="image/webp" srcset="./assests/images/remote-01.webp">
                      <source type="image/png" srcset="./assests/images/remote-01.png">
                      <img loading="lazy" src="./assests/images/remote-01.png"
                        alt="Remote Team" width="632" height="518">
                    </picture>
                    <picture class="page" id="p2">
                      <source type="image/webp" srcset="./assests/images/remote-02.webp">
                      <source type="image/png" srcset="./assests/images/remote-02.png">
                      <img loading="lazy" src="./assests/images/remote-02.png"
                        alt="Remote Team" width="632" height="518">
                    </picture>
                  </div>
                  <div class="column-left">
                    <div class="all-content">
                      <div class="text-column active" id="t1" data-section="active_Current_Tabs1">
                        <h3><i></i>Know When And Where Your Employees Are Working</h3>
                        <p>Get real-time information about your employees' work schedules, live updates of what they are doing, from where they are working and much more. With Workstatus, keep track of all remote workers and ensure that everything goes smoothly.
                        </p>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="./assests/images/remote-01.webp">
                          <source type="image/png" srcset="./assests/images/remote-01.png">
                          <img loading="lazy" src="./assests/images/remote-01.png"
                            alt="Remote Team" width="632" height="518">
                        </picture>
                      </div>
                    </div>
                    <div class="all-content">
                      <div class="text-column" id="t2" data-section="active_Current_Tabs1">
                        <h3><i></i> Automated Check-In And Check-Out System</h3>
                        <p>Workstatus automatically logs your remote employees in and out of their virtual office, so you can keep track of who's working remotely and how much time they're spending on work tasks.
                        </p>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="./assests/images/remote-02.webp">
                          <source type="image/png" srcset="./assests/images/remote-02.png">
                          <img loading="lazy" src="./assests/images/remote-02.png"
                            alt="Remote Team" width="632" height="518">
                        </picture>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?php if( geoCTAcheck() === true ) : ?>
              <div class="mt40 btnSc">
                <p>Try It Out!</p>
                <a href="<?php echo $RegLink; ?>" class="primary_btn1"><?php echo $ws_ctas['cta_text']; ?></a>
                <small>It's Worth It!</small>
              </div>
              <?php endif; ?>
            </div>
          </div>
          <div class="item">
            <div class="container">
              <div class="top-section">
                <h6><span class="bg-purple">Highly Accurate</span></h6>
                <h2>Track Working Hours With Remote Team Management Software</h2>
                <p>Workstatus helps you to keep track of your employees' working hours. Workstatus allows you to monitor & record their time in timesheets and reports how long they have worked on a particular project.</p>
              </div>
              <div id="active_Current_Tabs2">
                <div class="flex_row">
                  <div class="column-right">
                    <picture class="page active" id="p3">
                      <source type="image/webp" srcset="./assests/images/remote-03.webp">
                      <source type="image/png" srcset="./assests/images/remote-03.png">
                      <img loading="lazy" src="./assests/images/remote-03.png"
                        alt="Remote Team" width="619" height="490">
                    </picture>
                    <picture class="page" id="p4">
                      <source type="image/webp" srcset="./assests/images/remote-04.webp">
                      <source type="image/png" srcset="./assests/images/remote-04.png">
                      <img loading="lazy" src="./assests/images/remote-04.png"
                        alt="Remote Team" width="619" height="490">
                    </picture>
                  </div>
                  <div class="column-left">
                    <div class="all-content">
                      <div class="text-column active" id="t3" data-section="active_Current_Tabs2">
                        <h3><i></i>Monitor Employee Activities</h3>
                        <p>Workstatus helps you to streamline your business and helps you grow faster by letting you monitor employee activity levels through a simple dashboard.</p>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="./assests/images/remote-03.webp">
                          <source type="image/png" srcset="./assests/images/remote-03.png">
                          <img loading="lazy" src="./assests/images/remote-03.png"
                            alt="Remote Team" width="619" height="490">
                        </picture>
                      </div>
                    </div>
                    <div class="all-content">
                      <div class="text-column" id="t4" data-section="active_Current_Tabs2">
                        <h3><i></i> Track Employee Efficiency</h3>
                        <p>Get a complete insight into your employees' performance and optimize their efficiency using WorkStatus. With Workstatus, monitor your employee's working hours, productivity, activity, and much more.</p>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="./assests/images/remote-04.webp">
                          <source type="image/png" srcset="./assests/images/remote-04.png">
                          <img loading="lazy" src="./assests/images/remote-04.png"
                            alt="Remote Team" width="619" height="490">
                        </picture>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="mt40 btnSc">
                <p>Start Tracking Your Remote Employees Today</p>
                <a href="javascript:void(0)" onclick="call_demows();" class="primary_btn1">Book A Demo</a>
                <small>Check Out This Demo To Know More</small>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="container">
              <div class="top-section">
                <h6><span class="bg-purple">Leverage Technology</span></h6>
                <h2>Automate Remote Team Management</h2>
                <p>With Workstatus, invoices are created automatically. With our built-in invoice manager, invoices are created in an instant. All it takes is one click, and your invoice for your remote employees will be sent to them via email within seconds.</p>
              </div>
              <div id="active_Current_Tabs3">
                <div class="flex_row">
                  <div class="column-right">
                    <picture class="page active" id="p5">
                      <source type="image/webp" srcset="./assests/images/remote-05.webp">
                      <source type="image/png" srcset="./assests/images/remote-05.png">
                      <img loading="lazy" src="./assests/images/remote-05.png"
                        alt="Remote Team" width="463" height="453">
                    </picture>
                    <picture class="page" id="p6">
                      <source type="image/webp" srcset="./assests/images/remote-06.webp">
                      <source type="image/png" srcset="./assests/images/remote-06.png">
                      <img loading="lazy" src="./assests/images/remote-06.png"
                        alt="Remote Team" width="463" height="453">
                    </picture>
                  </div>
                  <div class="column-left">
                    <div class="all-content">
                      <div class="text-column active" id="t5" data-section="active_Current_Tabs3">
                        <h3><i></i>Automated Payroll</h3>
                        <p>Manage everything from employee paychecks to other payroll-related tasks with workstatus. By simplifying payroll management, Workstatus makes it easy for you to pay your employees timely without being late.</p>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="./assests/images/remote-05.webp">
                          <source type="image/png" srcset="./assests/images/remote-05.png">
                          <img loading="lazy" src="./assests/images/remote-05.png"
                            alt="Remote Team" width="463" height="436">
                        </picture>
                      </div>
                    </div>
                    <div class="all-content">
                      <div class="text-column" id="t6" data-section="active_Current_Tabs3">
                        <h3><i></i>Auto-calculate Billable Hours</h3>
                        <p>Pay your employees accurately by monitoring their time, attendance and productivity. Pay your remote team accordingly with Workstatus, real-time reports and informative insights.</p>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="./assests/images/remote-06.webp">
                          <source type="image/png" srcset="./assests/images/remote-06.png">
                          <img loading="lazy" src="./assests/images/remote-06.png"
                            alt="Remote Team" width="463" height="436">
                        </picture>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="mt40 btnSc">
                <p>Check How Workstatus Makes Remote Team<br> Management Easy For You!</p>
                <a href="javascript:void(0)" onclick="call_demows();" rel="nofollow" class="primary_btn1">Book A Demo</a>
                <small>Ask For Demo </small>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="container">
              <div class="top-section">
                <h6><span class="bg-purple">Detailed Insights</span></h6>
                <h2>Comprehensive Reports For Easy Remote Workforce Management</h2>
                <p>With Workstatus, you can view real-time reports and manage your remote teams with complete transparency. Reports generated by Workstatus will help you make more informed decisions about your remote workforce to increase efficiency.</p>
              </div>
              <div id="active_Current_Tabs4">
                <div class="flex_row">
                  <div class="column-right">
                    <picture class="page active" id="p7">
                      <source type="image/webp" srcset="./assests/images/remote-07.webp">
                      <source type="image/png" srcset="./assests/images/remote-07.png">
                      <img loading="lazy" src="./assests/images/remote-07.png"
                        alt="Remote Team" width="649" height="522">
                    </picture>
                    <picture class="page" id="p8">
                      <source type="image/webp" srcset="./assests/images/remote-08.webp">
                      <source type="image/png" srcset="./assests/images/remote-08.png">
                      <img loading="lazy" src="./assests/images/remote-08.png"
                        alt="Remote Team" width="649" height="522">
                    </picture>
                  </div>
                  <div class="column-left">
                    <div class="all-content">
                      <div class="text-column active" id="t7" data-section="active_Current_Tabs4">
                        <h3><i></i>Productivity Measurement Reports</h3>
                        <p>Measuring the productivity of your remote teams based on tasks and projects WorkStatus is a remote team management software that provides you with the detailed reports on productivity that you need to manage your remote teams.</p>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="./assests/images/remote-07.webp">
                          <source type="image/png" srcset="./assests/images/remote-07.png">
                          <img loading="lazy" src="./assests/images/remote-07.png"
                            alt="Remote Team" width="649" height="522">
                        </picture>
                      </div>
                    </div>
                    <div class="all-content">
                      <div class="text-column" id="t8" data-section="active_Current_Tabs4">
                        <h3><i></i>AI Intuitive Dashboard</h3>
                        <p>Workstatus intuitive platform provides companies and businesses with a holistic view of their remote teams, allowing them to manage remote team members in one place.</p>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="./assests/images/remote-08.webp">
                          <source type="image/png" srcset="./assests/images/remote-08.png">
                          <img loading="lazy" src="./assests/images/remote-08.png"
                            alt="Remote Team" width="649" height="522">
                        </picture>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?php if( geoCTAcheck() === true ) : ?>
              <div class="mt40 btnSc">
                <p>Get Started With Your Free Trial Today!</p>
                <a href="<?php echo $RegLink; ?>" class="primary_btn1"><?php echo $ws_ctas['cta_text']; ?></a>
                <small>No credit card required</small>
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
              <h2>Listen To What Our Customers Say</h2>
            </div>
            <div class="glider-testimonial">
              <div class="glider-contain">
                <div class="glider2">
                  <div>
                    <p class="white">“ Workstatus has been an excellent tool for us. We have a global team, and it helped us keep track of all our employees without having to rely on outside sources. It's also easy to use, so our company doesn't need to spend hours training new employees how to use it, which is especially helpful when we hire new employees. Their customer service is top-notch. I always get quick responses from their support staff, and they are very helpful. Great product !! ”</p>
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
                        <p class="para_extrasmall white">Daniel Daisy</p>
                      </div>
                    </div>
                  </div>
                  <div>
                    <p class="white">“ WorkStatus is an excellent tool for any company that has employees working remotely. It allows you to manage your team and their time very easily. WorkStatus makes it easy to know who is working, what they are working on, and how much time they have left on each task. This has helped us increase our productivity because we can see where our employees are spending their time and if there is anything we can do to help them work more efficiently. Overall, I would highly recommend WorkStatus to all those hustling to manage their remote teams. ”</p>
                    <div class="border"><span class="element-triangle"></span></div>
                    <div class="author-box">
                      <picture>
                        <source type="image/webp" srcset="./assests/images/avatar.webp">
                        <source type="image/png" srcset="./assests/images/avatar.png">
                        <img loading="lazy" src="./assests/images/avatar.png" alt="Alex" width="54"
                          height="54">
                      </picture>
                      <div class="author-content">
                        <p class="para_extrasmall white">Lena Green</p>
                      </div>
                    </div>
                  </div>
                  <div>
                    <p class="white">“ We've been using Workstatus for over two years now. It's an excellent product, and their customer service is fantastic. They respond quickly when you need something and always go above and beyond to make their clients happy with everything. Also, I love that they have a great app that makes it super easy to track time from your phone. I have tried many different apps and services to help me manage my remote team, but nothing has worked as WorkStatus did. ”</p>
                    <div class="border"><span class="element-triangle"></span></div>
                    <div class="author-box">
                      <picture>
                        <source type="image/webp" srcset="./assests/images/avatar.webp">
                        <source type="image/png" srcset="./assests/images/avatar.png">
                        <img loading="lazy" src="./assests/images/avatar.png" alt="Larry" width="54"
                          height="54">
                      </picture>
                      <div class="author-content">
                        <p class="para_extrasmall white">Jone Wood</p>
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
                    <h3 itemprop="name"> Why do you need remote team management software?
                    </h3>
                    <div class="faq-accordion-content">
                      <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div itemprop="text">
                          <p>Companies are now recruiting employees from various cities and countries in order to acquire different experiences and expertise for the betterment of their business. Due to such factors, companies have started opting for remote team management software to manage all their employees from a single place.</p>
                          <p>This is a great way to keep track of all your employees and help them work more efficiently with each other while they work remotely. Remote Team Management Software provides you with an easy way to manage your employees without any hassle. It helps you keep track of your employees via its dashboard interface, allowing you to access real-time reports about their performance and productivity. </p>
                          <p>Remote team management software also enables you to assign different tasks to your employees from anywhere in the world, thus helping increase productivity within no time. All in all, remote team management software has become an essential component for companies that have recruited employees from various places to work remotely for them.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="faq-accordion-item-outer" itemscope itemprop="mainEntity"
                    itemtype="https://schema.org/Question">
                    <h3 itemprop="name">Which software is best for remote team management?</h3>
                    <div class="faq-accordion-content">
                      <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div itemprop="text">
                          <p>The best remote team management software is one that meets specific requirements for your team. You’ll want to look for features like time tracking, file sharing, task management, and communication functions. Workstatus has all of these features, along with a selfie validation function that’s built right into each employee profile.</p>
                          <p>With Workstatus, you can manage your remote team from anywhere. Our GPS tracking and live location features allow you to see where each employee is and what they’re working on in real-time. This gives you a better idea of how your employees use their time, which helps you make more informed decisions about projects and schedules.</p>
                          <p>Also, you can monitor your team’s productivity with our time tracking feature. This feature allows you to see how much time each employee spends on different tasks, which gives you a better idea of how to schedule your employees for maximum efficiency. </p>
                          <p>Workstatus has been built with a specific goal in mind, and that is to manage a remote team as easily as possible. With all of these features, it’s easy to see why Workstatus has become one of the most popular remote workforce management software in the market today.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="faq-accordion-item-outer" itemscope itemprop="mainEntity"
                    itemtype="https://schema.org/Question">
                    <h3 itemprop="name">How does Workstatus help in maintaining productivity for remote teams?</h3>
                    <div class="faq-accordion-content">
                      <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div itemprop="text">
                          <p>Workstatus helps maintain productivity for remote teams by assisting you in creating tasks and managing your deadlines. This makes it simple to track your work and stay on schedule. </p>
                          <p>Workstatus helps you build transparency into who is working on what and where progress is being made with status updates, updates directly to project management systems. You can also set reminders for individuals or groups of people to help them stay focused on their projects and deadlines.</p>
                          <p>Workstatus helps you keep on top of tasks and maintain a high level of productivity by allowing you to track the working hours of your team members. This makes it easy to identify who is working hard and who might need some motivation.</p>
                          <p>All in all, Workstatus helps you stay on top of your projects and tasks. It makes it easy to manage your team and monitor their progress so that everyone works productively towards a common goal.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="faq-accordion-item-outer" itemscope itemprop="mainEntity"
                    itemtype="https://schema.org/Question">
                    <h3 itemprop="name">Does Workstatus help in end to end management of remote teams?</h3>
                    <div class="faq-accordion-content">
                      <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div itemprop="text">
                          <p>Yes, Workstatus is all you need to manage and monitor remote teams. It offers end-to-end management of remote teams with a centralized dashboard that gives complete visibility into your team’s work. You can easily see what they are working on, how much time they have spent on it and when they will be done. You can assign tasks to them and track their progress in real-time.</p>
                          <p>Managing remote teams is challenging and requires a lot of time and effort. Workstatus makes it easy for you to manage your team with its simple yet powerful features. It helps you to set goals, monitor progress, assign tasks, track time spent on tasks and view reports for better decision making.</p>
                          <p>With Workstatus, you can also get work done anywhere by accessing your team’s dashboards anytime and anywhere using our mobile app or any web browser.</p>
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
                <a href="https://www.workstatus.io/blog/how-to-manage-remote-work-schedules/" class="blog-link">
                  <div class="thumb">
                    <picture>
                      <source type="image/webp" srcset="./assests/images/useful-resources-blog-1.jpg">
                      <source type="image/png" srcset="./assests/images/useful-resources-blog-1.jpg">
                      <img loading="lazy" src="./assests/images/useful-resources-blog-1.jpg" alt="Workstatus Time" width="400" height="242"> 
                    </picture>
                  </div>
                  <div class="blog-title">
                    <h3>How to Manage Remote Work Schedules</h3>
                    <span class="small_anchor">Read more</span>
                  </div>
                </a>
              </div>
              <div class="blog-box column-three">
                <a href="https://www.workstatus.io/blog/how-to-deal-with-your-anxiety-to-become-more-productive/" class="blog-link">
                  <div class="thumb">
                    <picture>
                      <source type="image/webp" srcset="./assests/images/useful-resources-blog-2.jpg">
                      <source type="image/png" srcset="./assests/images/useful-resources-blog-2.jpg">
                      <img loading="lazy" src="./assests/images/useful-resources-blog-2.jpg" alt="Workstatus Time" width="400" height="242"> 
                    </picture>
                  </div>
                  <div class="blog-title">
                    <h3>How to Deal With Your Anxiety to Become More Productive?</h3>
                    <span class="small_anchor">Read more</span>
                  </div>
                </a>
              </div>
              <div class="blog-box column-three">
                <a href="https://www.workstatus.io/blog/useful-strategies-for-avoiding-toxic-productivity/" class="blog-link">
                  <div class="thumb">
                    <picture>
                      <source type="image/webp" srcset="./assests/images/useful-resources-blog-3.jpg">
                      <source type="image/png" srcset="./assests/images/useful-resources-blog-3.jpg">
                      <img loading="lazy" src="./assests/images/useful-resources-blog-3.jpg" alt="Workstatus Time" width="400" height="242"> 
                    </picture>
                  </div>
                  <div class="blog-title">
                    <h3>10 Useful & Tested Strategies for Avoiding Toxic Productivity</h3>
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
<?php require_once 'common/inc/config.inc.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="alternate" href="<?php echo SITE_URL; ?>/best-attendance-tracking-software" hreflang="en-us" />
    <link type="text/css" href="./assests/css/featureDetail-new.css" rel="preload stylesheet" as="style" />
    <link rel="preload stylesheet" as="style" id="ws-pricing-fltr-css" href="https://www.workstatus.io/wp-content/themes/workstatus/pricing-filter.css?ver=1.45.45" media="all" />
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
            <h1>Best Attendance Management Software</h1>
            <p>Let Workstatus automate managing and maintaining attendance records of your employees. Save time otherwise spent on<br class="linebrk"> manually tracking attendance records, and spend it wisely on growing your business.</p>
            <!-- <ul class="list">
              <li>Online attendance with selfie validation</li>
              <li>Accurate attendance recording and notifications</li>
              <li>Overtime & absenteeism tracking</li>
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
            <div class="banner-award">
              <div class="award-box">
                <div class="client-section">
                  <div class="client-row">
                    <div class="client-stack award-animate-slide-to-left hover:pause">
                      <ul>
                        <li>
                          <div class="star-rt">4.6 Excellent <img loading="lazy" src="./assests/images/4.6star.svg"
                            alt="Award" width="100" height="17"></div>
                          <p>Invoicera is a lifesaver! I always know who's paid and who owes me. It keeps my finances organized, saving me time and stress, especially at tax time.</p>
                          <picture class="awimg">
                            <img loading="lazy" src="./assests/images/bnr-aw01.svg"
                              alt="Award" width="130" height="29">
                          </picture>
                        </li>
                        <li>
                          <div class="star-rt">4.5 Excellent <img loading="lazy" src="./assests/images/4.5star.svg"
                            alt="Award" width="100" height="17"></div>
                          <p>Invoicera is a lifesaver! I always know who's paid and who owes me. It keeps my finances organized, saving me time and stress, especially at tax time.</p>
                          <picture class="awimg">
                            <img loading="lazy" src="./assests/images/bnr-aw02.svg"
                              alt="Award" width="130" height="29">
                          </picture>
                        </li>
                        <li>
                          <div class="star-rt">4.6 Excellent <img loading="lazy" src="./assests/images/4.6star.svg"
                            alt="Award" width="100" height="17"></div>
                          <p>Invoicera is a lifesaver! I always know who's paid and who owes me. It keeps my finances organized, saving me time and stress, especially at tax time.</p>
                          <picture class="awimg">
                            <img loading="lazy" src="./assests/images/bnr-aw03.svg"
                              alt="Award" width="130" height="29">
                          </picture>
                        </li>
                        <li>
                          <div class="star-rt">4.6 Excellent <img loading="lazy" src="./assests/images/4.6star.svg"
                            alt="Award" width="100" height="17"></div>
                          <p>Invoicera is a lifesaver! I always know who's paid and who owes me. It keeps my finances organized, saving me time and stress, especially at tax time.</p>
                          <picture class="awimg">
                            <img loading="lazy" src="./assests/images/bnr-aw04.svg"
                              alt="Award" width="130" height="29">
                          </picture>
                        </li>
                        <li>
                          <div class="star-rt">4.6 Excellent <img loading="lazy" src="./assests/images/4.5star.svg"
                            alt="Award" width="100" height="17"></div>
                          <p>Invoicera is a lifesaver! I always know who's paid and who owes me. It keeps my finances organized, saving me time and stress, especially at tax time.</p>
                          <picture class="awimg">
                            <img loading="lazy" src="./assests/images/bnr-aw05.svg" 
                              alt="Award" width="130" height="29">
                          </picture>
                        </li>
                        <li>
                          <div class="star-rt">4.6 Excellent <img loading="lazy" src="./assests/images/4.6star.svg"
                            alt="Award" width="100" height="17"></div>
                          <p>Invoicera is a lifesaver! I always know who's paid and who owes me. It keeps my finances organized, saving me time and stress, especially at tax time.</p>
                          <picture class="awimg">
                            <img loading="lazy" src="./assests/images/bnr-aw01.svg"
                              alt="Award" width="130" height="29">
                          </picture>
                        </li>
                        <li>
                          <div class="star-rt">4.5 Excellent <img loading="lazy" src="./assests/images/4.5star.svg"
                            alt="Award" width="100" height="17"></div>
                          <p>Invoicera is a lifesaver! I always know who's paid and who owes me. It keeps my finances organized, saving me time and stress, especially at tax time.</p>
                          <picture class="awimg">
                            <img loading="lazy" src="./assests/images/bnr-aw02.svg"
                              alt="Award" width="130" height="29">
                          </picture>
                        </li>
                        <li>
                          <div class="star-rt">4.6 Excellent <img loading="lazy" src="./assests/images/4.6star.svg"
                            alt="Award" width="100" height="17"></div>
                          <p>Invoicera is a lifesaver! I always know who's paid and who owes me. It keeps my finances organized, saving me time and stress, especially at tax time.</p>
                          <picture class="awimg">
                            <img loading="lazy" src="./assests/images/bnr-aw03.svg"
                              alt="Award" width="130" height="29">
                          </picture>
                        </li>
                        <li>
                          <div class="star-rt">4.6 Excellent <img loading="lazy" src="./assests/images/4.6star.svg"
                            alt="Award" width="100" height="17"></div>
                          <p>Invoicera is a lifesaver! I always know who's paid and who owes me. It keeps my finances organized, saving me time and stress, especially at tax time.</p>
                          <picture class="awimg">
                            <img loading="lazy" src="./assests/images/bnr-aw04.svg"
                              alt="Award" width="130" height="29">
                          </picture>
                        </li>
                        <li>
                          <div class="star-rt">4.6 Excellent <img loading="lazy" src="./assests/images/4.5star.svg"
                            alt="Award" width="100" height="17"></div>
                          <p>Invoicera is a lifesaver! I always know who's paid and who owes me. It keeps my finances organized, saving me time and stress, especially at tax time.</p>
                          <picture class="awimg">
                            <img loading="lazy" src="./assests/images/bnr-aw05.svg" 
                              alt="Award" width="130" height="29">
                          </picture>
                        </li>
                        <li>
                          <div class="star-rt">4.6 Excellent <img loading="lazy" src="./assests/images/4.6star.svg"
                            alt="Award" width="100" height="17"></div>
                          <p>Invoicera is a lifesaver! I always know who's paid and who owes me. It keeps my finances organized, saving me time and stress, especially at tax time.</p>
                          <picture class="awimg">
                            <img loading="lazy" src="./assests/images/bnr-aw01.svg"
                              alt="Award" width="130" height="29">
                          </picture>
                        </li>
                        <li>
                          <div class="star-rt">4.5 Excellent <img loading="lazy" src="./assests/images/4.5star.svg"
                            alt="Award" width="100" height="17"></div>
                          <p>Invoicera is a lifesaver! I always know who's paid and who owes me. It keeps my finances organized, saving me time and stress, especially at tax time.</p>
                          <picture class="awimg">
                            <img loading="lazy" src="./assests/images/bnr-aw02.svg"
                              alt="Award" width="130" height="29">
                          </picture>
                        </li>
                        <li>
                          <div class="star-rt">4.6 Excellent <img loading="lazy" src="./assests/images/4.6star.svg"
                            alt="Award" width="100" height="17"></div>
                          <p>Invoicera is a lifesaver! I always know who's paid and who owes me. It keeps my finances organized, saving me time and stress, especially at tax time.</p>
                          <picture class="awimg">
                            <img loading="lazy" src="./assests/images/bnr-aw03.svg"
                              alt="Award" width="130" height="29">
                          </picture>
                        </li>
                        <li>
                          <div class="star-rt">4.6 Excellent <img loading="lazy" src="./assests/images/4.6star.svg"
                            alt="Award" width="100" height="17"></div>
                          <p>Invoicera is a lifesaver! I always know who's paid and who owes me. It keeps my finances organized, saving me time and stress, especially at tax time.</p>
                          <picture class="awimg">
                            <img loading="lazy" src="./assests/images/bnr-aw04.svg"
                              alt="Award" width="130" height="29">
                          </picture>
                        </li>
                        <li>
                          <div class="star-rt">4.6 Excellent <img loading="lazy" src="./assests/images/4.5star.svg"
                            alt="Award" width="100" height="17"></div>
                          <p>Invoicera is a lifesaver! I always know who's paid and who owes me. It keeps my finances organized, saving me time and stress, especially at tax time.</p>
                          <picture class="awimg">
                            <img loading="lazy" src="./assests/images/bnr-aw05.svg" 
                              alt="Award" width="130" height="29">
                          </picture>
                        </li>
                        <li>
                          <div class="star-rt">4.6 Excellent <img loading="lazy" src="./assests/images/4.6star.svg"
                            alt="Award" width="100" height="17"></div>
                          <p>Invoicera is a lifesaver! I always know who's paid and who owes me. It keeps my finances organized, saving me time and stress, especially at tax time.</p>
                          <picture class="awimg">
                            <img loading="lazy" src="./assests/images/bnr-aw01.svg"
                              alt="Award" width="130" height="29">
                          </picture>
                        </li>
                        <li>
                          <div class="star-rt">4.5 Excellent <img loading="lazy" src="./assests/images/4.5star.svg"
                            alt="Award" width="100" height="17"></div>
                          <p>Invoicera is a lifesaver! I always know who's paid and who owes me. It keeps my finances organized, saving me time and stress, especially at tax time.</p>
                          <picture class="awimg">
                            <img loading="lazy" src="./assests/images/bnr-aw02.svg"
                              alt="Award" width="130" height="29">
                          </picture>
                        </li>
                        <li>
                          <div class="star-rt">4.6 Excellent <img loading="lazy" src="./assests/images/4.6star.svg"
                            alt="Award" width="100" height="17"></div>
                          <p>Invoicera is a lifesaver! I always know who's paid and who owes me. It keeps my finances organized, saving me time and stress, especially at tax time.</p>
                          <picture class="awimg">
                            <img loading="lazy" src="./assests/images/bnr-aw03.svg"
                              alt="Award" width="130" height="29">
                          </picture>
                        </li>
                        <li>
                          <div class="star-rt">4.6 Excellent <img loading="lazy" src="./assests/images/4.6star.svg"
                            alt="Award" width="100" height="17"></div>
                          <p>Invoicera is a lifesaver! I always know who's paid and who owes me. It keeps my finances organized, saving me time and stress, especially at tax time.</p>
                          <picture class="awimg">
                            <img loading="lazy" src="./assests/images/bnr-aw04.svg"
                              alt="Award" width="130" height="29">
                          </picture>
                        </li>
                        <li>
                          <div class="star-rt">4.6 Excellent <img loading="lazy" src="./assests/images/4.5star.svg"
                            alt="Award" width="100" height="17"></div>
                          <p>Invoicera is a lifesaver! I always know who's paid and who owes me. It keeps my finances organized, saving me time and stress, especially at tax time.</p>
                          <picture class="awimg">
                            <img loading="lazy" src="./assests/images/bnr-aw05.svg" 
                              alt="Award" width="130" height="29">
                          </picture>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="video-wrap">
              <div class="videoSc" id="has-yt-video">
                <div class="inner">
                  <div class="topVideo srp-29">
                    <div id="myDIV" class="contbox2">
                      <div class="videoWrapper">
                        <iframe id="video" class="videoIframe" allowfullscreen
                          data-src="https://www.youtube.com/embed/QOE35F45MI8?enablejsapi=1&html5=1&mute=1">
                        </iframe>
                        <button class="videoPoster lazy-background" id="play-button">Play video
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
      <section class="benifits-section">
        <div class="container">
          <div class="top-section">
            <h6><span class="bg-purple">Automation That Leads To Smart Management</span></h6>
            <h2>Benefits Of Online Attendance Management Software</h2>
          </div>
          <div class="flex_row">
            <div class="column-three">
              <i class="icon13"></i>
              <h3>Clock-in and Clock-out easily</h3>
              <p>Allow employees to mark their attendance with an easy single-click, clock-in, and clock-out facility.</p>
            </div>
            <div class="column-three">
              <i class="icon14"></i>
              <h3>Stay Updated In Real Time</h3>
              <p>Get real-time notifications on clock-ins & clock-outs, absenteeisms, or latecomers with the help of a digital attendance system.</p>
            </div>
            <div class="column-three">
              <i class="icon15"></i>
              <h3>Easy Payroll Management</h3>
              <p>Streamline the payroll processes with accurate attendance data. Automatically generate salary slips. View detailed reports on attendance to make smart decisions.</p>
            </div>
          </div>
        </div>
      </section>
      <section class="middle-section feature-section">
        <div class="item">
          <div class="container">
            <div class="top-section">
              <h6><span class="bg-purple">Track Attendance Anytime, Anywhere</span></h6>
              <h2>Attendance Tracking Software for Every Team</h2>
              <p>Get a comprehensive and real-time report on when your team is actively working. Track employees working from home, office, or from a remote client location.</p>
            </div>
            <div id="active_Current_Tabs1">
              <div class="flex_row">
                <div class="column-right">
                  <picture class="page active" id="p1">
                    <source type="image/webp" srcset="./assests/images/attendance-01.webp">
                    <source type="image/png" srcset="./assests/images/attendance-01.png">
                    <img loading="lazy" src="./assests/images/attendance-01.png"
                      alt="Track Attendance" width="654" height="495">
                  </picture>
                  <picture class="page" id="p2">
                    <source type="image/webp" srcset="./assests/images/attendance-02.webp">
                    <source type="image/png" srcset="./assests/images/attendance-02.png">
                    <img loading="lazy" src="./assests/images/attendance-02.png"
                      alt="Track Attendance" width="664" height="520">
                  </picture>
                  <picture class="page" id="p3">
                    <source type="image/webp" srcset="./assests/images/attendance-03.webp">
                    <source type="image/png" srcset="./assests/images/attendance-03.png">
                    <img loading="lazy" src="./assests/images/attendance-03.png"
                      alt="Track Attendance" width="649" height="645">
                  </picture>
                  <picture class="page" id="p4">
                    <source type="image/webp" srcset="./assests/images/attendance-04.webp">
                    <source type="image/png" srcset="./assests/images/attendance-04.png">
                    <img loading="lazy" src="./assests/images/attendance-04.png"
                      alt="Track Attendance" width="644" height="568">
                  </picture>
                  <picture class="page" id="p5">
                    <source type="image/webp" srcset="./assests/images/attendance-05.webp">
                    <source type="image/png" srcset="./assests/images/attendance-05.png">
                    <img loading="lazy" src="./assests/images/attendance-05.png"
                      alt="Track Attendance" width="646" height="568">
                  </picture>
                </div>
                <div class="column-left">
                  <div class="all-content">
                    <div class="text-column active" id="t1" data-section="active_Current_Tabs1">
                      <h3><i></i>Access Timesheets</h3>
                      <p>With Workstatus, employees can use the project they are working on and start the timer to accurately track hours worked on each project. Raise invoices based on hours worked.
                      </p>
                    </div>
                    <div class="mob-image">
                      <picture>
                        <source type="image/webp" srcset="./assests/images/attendance-01.webp">
                        <source type="image/png" srcset="./assests/images/attendance-01.png">
                        <img loading="lazy" src="./assests/images/attendance-01.png"
                          alt="Track Attendance" width="654" height="495">
                      </picture>
                    </div>
                  </div>
                  <div class="all-content">
                    <div class="text-column" id="t2" data-section="active_Current_Tabs1">
                      <h3><i></i>Selfie Validation</h3>
                      <p>Face recognition-based attendance system for delivering complete transparency and accuracy. Employees can easily clock in with a selfie, preventing buddy punching and time theft.
                      </p>
                    </div>
                    <div class="mob-image">
                      <picture>
                        <source type="image/webp" srcset="./assests/images/attendance-02.webp">
                        <source type="image/png" srcset="./assests/images/attendance-02.png">
                        <img loading="lazy" src="./assests/images/attendance-02.png"
                          alt="Track Attendance" width="664" height="520">
                      </picture>
                    </div>
                  </div>
                  <div class="all-content">
                    <div class="text-column" id="t3" data-section="active_Current_Tabs1">
                      <h3><i></i>Manage Team Shifts</h3>
                      <p>Through Workstatus, employers can assign & manage shifts of employees. The system gives managers real-time visibility into who is working and when making shift management easier.
                      </p>
                    </div>
                    <div class="mob-image">
                      <picture>
                        <source type="image/webp" srcset="./assests/images/attendance-03.webp">
                        <source type="image/png" srcset="./assests/images/attendance-03.png">
                        <img loading="lazy" src="./assests/images/attendance-03.png"
                          alt="Track Attendance" width="649" height="645">
                      </picture>
                    </div>
                  </div>
                  <div class="all-content">
                    <div class="text-column" id="t4" data-section="active_Current_Tabs1">
                      <h3><i></i>Location-Based Attendance Tracking</h3>
                      <p>Access your data even when employees are away from the office with Workstatus's GPS tracking and geofencing system. Get alerts and updates when employees arrive or leave the work site, ensuring you never miss a beat.</p>
                    </div>
                    <div class="mob-image">
                      <picture>
                        <source type="image/webp" srcset="./assests/images/attendance-04.webp">
                        <source type="image/png" srcset="./assests/images/attendance-04.png">
                        <img loading="lazy" src="./assests/images/attendance-04.png"
                          alt="Track Attendance" width="644" height="568">
                      </picture>
                    </div>
                  </div>
                  <div class="all-content">
                    <div class="text-column" id="t5" data-section="active_Current_Tabs1">
                      <h3><i></i>Manage Attendance On Any Platform</h3>
                      <p>Workstatus works on both web and mobile apps; you can easily track & view your employee attendance from anywhere. The user-friendly interface makes it easy to stay connected with all your team members, regardless of location.</p>
                    </div>
                    <div class="mob-image">
                      <picture>
                        <source type="image/webp" srcset="./assests/images/attendance-05.webp">
                        <source type="image/png" srcset="./assests/images/attendance-05.png">
                        <img loading="lazy" src="./assests/images/attendance-05.png"
                          alt="Track Attendance" width="646" height="568">
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
              <h6><span class="bg-purple">Reliable & Accurate</span></h6>
              <h2>An Online Attendance System That Tracks Every Second</h2>
              <p>Track attendance of your workforce with Workstatus without constantly being on the lookout. Get notified about late arrivals, missed shifts, overtime, and more.
              </p>
            </div>
            <div id="active_Current_Tabs2">
              <div class="flex_row">
                <div class="column-right">
                  <picture class="page active" id="p6">
                    <source type="image/webp" srcset="./assests/images/attendance-06.webp">
                    <source type="image/png" srcset="./assests/images/attendance-06.png">
                    <img loading="lazy" src="./assests/images/attendance-06.png"
                      alt="Track Attendance" width="633" height="645">
                  </picture>
                  <picture class="page" id="p7">
                    <source type="image/webp" srcset="./assests/images/attendance-07.webp">
                    <source type="image/png" srcset="./assests/images/attendance-07.png">
                    <img loading="lazy" src="./assests/images/attendance-07.png"
                      alt="Track Attendance" width="683" height="511">
                  </picture>
                  <picture class="page" id="p8">
                    <source type="image/webp" srcset="./assests/images/attendance-08.webp">
                    <source type="image/png" srcset="./assests/images/attendance-08.png">
                    <img loading="lazy" src="./assests/images/attendance-08.png"
                      alt="Track Attendance" width="683" height="493">
                  </picture>
                </div>
                <div class="column-left">
                  <div class="all-content">
                    <div class="text-column active" id="t6" data-section="active_Current_Tabs2">
                      <h3>Built-in Timesheets</h3>
                      <p>Automatically generate timesheets for each employee or team to track when and how long they are working. The system provides detailed reports on hours worked, total time spent, per-project timesheets, and more.</p>
                      <ul class="checkList">
                        <li>No manual errors with automated and accurate records </li>
                        <li>Real-time data collection</li>
                      </ul>
                    </div>
                    <div class="mob-image">
                      <picture>
                        <source type="image/webp" srcset="./assests/images/attendance-06.webp">
                        <source type="image/png" srcset="./assests/images/attendance-06.png">
                        <img loading="lazy" src="./assests/images/attendance-06.png"
                          alt="Track Attendance" width="633" height="645">
                      </picture>
                    </div>
                  </div>
                  <div class="all-content">
                    <div class="text-column" id="t7" data-section="active_Current_Tabs2">
                      <h3>Automated Calculation</h3>
                      <p>All the calculations are automated, eliminating time-consuming manual interference. Simply enter the number of hours your employees are supposed to work, and the software takes care of the rest, including the calculation of payroll, overtime, and much more.</p>
                      <ul class="checkList">
                        <li>Single click start</li>
                        <li>Accurate and automated calculations</li>
                      </ul>
                    </div>
                    <div class="mob-image">
                      <picture>
                        <source type="image/webp" srcset="./assests/images/attendance-07.webp">
                        <source type="image/png" srcset="./assests/images/attendance-07.png">
                        <img loading="lazy" src="./assests/images/attendance-07.png"
                          alt="Track Attendance" width="683" height="511">
                      </picture>
                    </div>
                  </div>
                  <div class="all-content">
                    <div class="text-column" id="t8" data-section="active_Current_Tabs2">
                      <h3>Get Timely Alert</h3>
                      <p>Get notifications when an employee is clocking in and out or if they are working remotely or are late and have complete visibility into their activities.</p>
                      <ul class="checkList">
                        <li>Always stay updated with shift alerts</li>
                        <li>Get notified in case of any irregularities</li>
                      </ul>
                    </div>
                    <div class="mob-image">
                      <picture>
                        <source type="image/webp" srcset="./assests/images/attendance-08.webp">
                        <source type="image/png" srcset="./assests/images/attendance-08.png">
                        <img loading="lazy" src="./assests/images/attendance-08.png"
                          alt="Track Attendance" width="683" height="493">
                      </picture>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="mt40 btnSc">
              <p>Take a Demo Now!</p>
              <a href="javascript:void(0)" onclick="call_demows();" class="primary_btn1">Book A Demo</a>
              <small>Get queries answered from experts</small>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="container">
            <div class="top-section">
              <h6><span class="bg-purple">Higher Transparency, Better Accountability</span></h6>
              <h2>Manage & Track Employee Performance </h2>
              <p>By providing real-time information on real-time whereabouts of employees, timesheets, attendance reports, and other relevant data, Workstatus is committed to transparency.  It allows employers to better manage and track the performance of their employees.</p>
            </div>
            <div id="active_Current_Tabs3">
              <div class="flex_row">
                <div class="column-right">
                  <picture class="page active" id="p9">
                    <source type="image/webp" srcset="./assests/images/attendance-09.webp">
                    <source type="image/png" srcset="./assests/images/attendance-09.png">
                    <img loading="lazy" src="./assests/images/attendance-09.png"
                      alt="Track Attendance" width="713" height="572">
                  </picture>
                  <picture class="page" id="p10">
                    <source type="image/webp" srcset="./assests/images/attendance-10.webp">
                    <source type="image/png" srcset="./assests/images/attendance-10.png">
                    <img loading="lazy" src="./assests/images/attendance-10.png"
                      alt="Track Attendance" width="659" height="546">
                  </picture>
                  <picture class="page" id="p11">
                    <source type="image/webp" srcset="./assests/images/attendance-11.webp">
                    <source type="image/png" srcset="./assests/images/attendance-11.png">
                    <img loading="lazy" src="./assests/images/attendance-11.png"
                      alt="Track Attendance" width="681" height="657">
                  </picture>
                </div>
                <div class="column-left">
                  <div class="all-content">
                    <div class="text-column active" id="t9" data-section="active_Current_Tabs3">
                      <h3>GPS Attendance Tracking</h3>
                      <p> Use GPS to track the whereabouts of employees. See where they are, how long they've been on the job, and how frequently they move among different workspaces. With a GPS-enabled attendance system, you can track the real-time locations of your employees. 
                      </p>
                      <ul class="checkList">
                        <li>Location tracker</li>
                        <li>Location-based clock-in</li>
                        <li>Real-Time Updates</li>
                      </ul>
                    </div>
                    <div class="mob-image">
                      <picture>
                        <source type="image/webp" srcset="./assests/images/attendance-09.webp">
                        <source type="image/png" srcset="./assests/images/attendance-09.png">
                        <img loading="lazy" src="./assests/images/attendance-09.png"
                          alt="Track Attendance" width="713" height="572">
                      </picture>
                    </div>
                  </div>
                  <div class="all-content">
                    <div class="text-column" id="t10" data-section="active_Current_Tabs3">
                      <h3>Online Time And Attendance Reports</h3>
                      <p>Stay up-to-date on everything your employees are doing with our online access to detailed timesheets and activity reports. Access summary reports, daily attendance logs, overtime data, and more.</p>
                      <ul class="checkList">
                        <li>Save time with automated tracking</li>
                        <li>Customized reports</li>
                        <li>Integrate with your existing system</li>
                      </ul>
                    </div>
                    <div class="mob-image">
                      <picture>
                        <source type="image/webp" srcset="./assests/images/attendance-10.webp">
                        <source type="image/png" srcset="./assests/images/attendance-10.png">
                        <img loading="lazy" src="./assests/images/attendance-10.png"
                          alt="Track Attendance" width="659" height="546">
                      </picture>
                    </div>
                  </div>
                  <div class="all-content">
                    <div class="text-column" id="t11" data-section="active_Current_Tabs3">
                      <h3>Smart Management</h3>
                      <p>Comprehensive and easy-to-use management features allow you to easily manage your workforce. Track and manage hours, vacations, sick days, break time, and more with simple online tools.</p>
                      <ul class="checkList">
                        <li>Better transparency</li>
                        <li>Improve accuracy</li>
                        <li>Streamline workflow</li>
                      </ul>
                    </div>
                    <div class="mob-image">
                      <picture>
                        <source type="image/webp" srcset="./assests/images/attendance-11.webp">
                        <source type="image/png" srcset="./assests/images/attendance-11.png">
                        <img loading="lazy" src="./assests/images/attendance-11.png"
                          alt="Track Attendance" width="681" height="657">
                      </picture>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="mt40 btnSc">
              <p>Check How Attendance Tracking Software Works!</p>
              <a href="javascript:void(0)" onclick="call_demows();" rel="nofollow" class="primary_btn1">Book A Demo</a>
              <small>Get queries answered from experts</small>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="container">
            <div class="top-section">
              <h6><span class="bg-purple">Central Dashboard With Integrated Analytics</span></h6>
              <h2>Optimize Your Business With AI-Powered Dashboard</h2>
              <p>With a centralized analytics dashboard of Workstatus, you can easily analyze your business operations. Our AI-powered insights give you a detailed view of your business, helping you to optimize your workforce & workflow for better ROI</p>
            </div>
            <div id="active_Current_Tabs4">
              <div class="flex_row">
                <div class="column-right">
                  <picture class="page active" id="p12">
                    <source type="image/webp" srcset="./assests/images/attendance-12.webp">
                    <source type="image/png" srcset="./assests/images/attendance-12.png">
                    <img loading="lazy" src="./assests/images/attendance-12.png"
                      alt="Track Attendance" width="656" height="685">
                  </picture>
                  <picture class="page" id="p13">
                    <source type="image/webp" srcset="./assests/images/attendance-13.webp">
                    <source type="image/png" srcset="./assests/images/attendance-13.png">
                    <img loading="lazy" src="./assests/images/attendance-13.png"
                      alt="Track Attendance" width="630" height="645">
                  </picture>
                  <picture class="page" id="p14">
                    <source type="image/webp" srcset="./assests/images/attendance-14.webp">
                    <source type="image/png" srcset="./assests/images/attendance-14.png">
                    <img loading="lazy" src="./assests/images/attendance-14.png"
                      alt="Track Attendance" width="655" height="647">
                  </picture>
                </div>
                <div class="column-left">
                  <div class="all-content">
                    <div class="text-column active" id="t12" data-section="active_Current_Tabs4">
                      <h3><i></i>AI-Powered Dashboard</h3>
                      <p>Our AI-powered dashboard gives you actionable insights into your business. It provides a holistic view of your employees and operations so that you can make informed decisions about optimizing your resources & workflow for greater efficiency and productivity.</p>
                    </div>
                    <div class="mob-image">
                      <picture>
                        <source type="image/webp" srcset="./assests/images/attendance-12.webp">
                        <source type="image/png" srcset="./assests/images/attendance-12.png">
                        <img loading="lazy" src="./assests/images/attendance-12.png"
                          alt="Track Attendance" width="656" height="685">
                      </picture>
                    </div>
                  </div>
                  <div class="all-content">
                    <div class="text-column" id="t13" data-section="active_Current_Tabs4">
                      <h3><i></i>Real-Time Reports</h3>
                      <p>Make informed decisions about your workforce and operations using real-time reports. Keep an eye on everything that goes around, with access to all the data. Receive reports in desired formats in your email.</p>
                    </div>
                    <div class="mob-image">
                      <picture>
                        <source type="image/webp" srcset="./assests/images/attendance-13.webp">
                        <source type="image/png" srcset="./assests/images/attendance-13.png">
                        <img loading="lazy" src="./assests/images/attendance-13.png"
                          alt="Track Attendance" width="630" height="645">
                      </picture>
                    </div>
                  </div>
                  <div class="all-content">
                    <div class="text-column" id="t14" data-section="active_Current_Tabs4">
                      <h3><i></i>Customizable Dashboard</h3>
                      <p>Take control of your business using an AI-powered and customizable dashboard. Create custom views, filters, and visualizations to help you understand how different parts of your business are performing</p>
                    </div>
                    <div class="mob-image">
                      <picture>
                        <source type="image/webp" srcset="./assests/images/attendance-14.webp">
                        <source type="image/png" srcset="./assests/images/attendance-14.png">
                        <img loading="lazy" src="./assests/images/attendance-14.png"
                          alt="Track Attendance" width="655" height="647">
                      </picture>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="mt40 btnSc">
              <p>Curious to know more!</p>
              <a href="javascript:void(0)" onclick="call_demows();" rel="nofollow" class="primary_btn1">Book A Demo</a>
              <small>Get all your queries answered from our experts<br> on a secure online meeting
              </small>
            </div>
          </div>
        </div>
      </section>
      <section class="trackEm">
        <div class="container">
          <div class="top-section">
            <h6><span class="bg-purple">Higher Transparency, Better Accountability</span></h6>
            <h2>Manage & Track Employee Performance </h2>
            <p>Access real-time information on the whereabouts of employees through timesheets, attendance reports, and other relevant data. Data-backed transparency allows employers to better manage and track the performance of their employees.</p>
          </div>
          <div class="trackRow align-center">
            <div class="trackImg">
              <picture>
                <source type="image/webp" srcset="./assests/images/demo3.webp">
                <source type="image/png" srcset="./assests/images/demo3.png">
                <img loading="lazy" src="./assests/images/demo3.png" alt="Designed to Track" width="541" height="661">
              </picture>
            </div>
            <div class="trackContent">
              <div class="row">
                <h3><i></i>Approval Of Timesheets</h3>
                <p>Team leaders and managers can quickly review and approve online timesheets for effective time management.</p>
              </div>
              <div class="row">
                <h3><i></i>Idle-time Notification</h3>
                <p>Get an email notification when employees are idle for more than a certain amount of time, allowing you to address any issues before they become major.</p>
              </div>
              <div class="row">
                <h3><i></i>Mobile & Desktop Accessibility</h3>
                <p>Employees can conveniently log their time and other data via mobile or desktop devices.</p>
              </div>
              <div class="row">
                <h3><i></i>Detailed Reports</h3>
                <p>Easily generate detailed reports to track and analyze the performance of individual employees or teams, giving you a better understanding of their work.</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="timeline">
        <div class="container">
          <div class="top-section">
            <h6><span class="bg-purple">Get Started with Workstatus</span></h6>
            <h2>Use Workstatus Employee Attendance Management System Effortlessly</h2>
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
                <h3>Download & Install Workstatus</h3>
                <p>All employees can download Workstatus app on their desktops/laptops (Windows, Mac, Linux) and/or mobile phones (Android/iOS) as per their requirements to start the real-time time tracking.</p>
              </div>
              <div class="row">
                <h3>Clock-In and Clock-Out</h3>
                <p>Take a selfie while clocking in and out. Start your work and leave rest to the fully automated attendance tracker which silently tracks your attendance in the background.</p>
              </div>
              <div class="row">
                <h3>Track and generate attendance reports</h3>
                <p>Every employee can self-monitor their timesheets and productivity charts generated in real-time. Managers can generate online attendance reports to analyse how employees’ attendance pattern is and can use this information to optimise their team’s time planning.</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="feature_section for-heading-center whitetxt post-animation ws-ctav4">
<div class="container">
<div class="top-section">
<h6><span class="bg-white">For All Workplaces</span></h6>
<h2>Collaborate Seamlessly Wherever You Work</h2>
</div>
<div class="flex_row"><div class="column"><div class="content"><h3><a href="https://www.workstatus.io/workplace-mode/remote-work-management"><strong>Remote Work</strong></a></h3>
<ul>
<li>Monitor employee activity &amp; ensure accountability</li>
<li>Foster a connected team culture regardless of location</li>
<li>Enable effective <a href="https://www.workstatus.io/staging/workforce-management/remote-automation">remote team management</a></li>
</ul>
<a href="https://www.workstatus.io/staging"><span class="small_anchor">Explore</span></a></div></div><div class="column"><div class="content"><h3><a href="https://www.workstatus.io/workplace-mode/hybrid-work-management"><strong>Hybrid Work</strong></a></h3>
<ul>
<li>Track resource availability &amp; monitor <a href="https://www.workstatus.io/workforce-management/employee-productivity-monitoring">employee productivity</a> across locations</li>
<li>Optimize resource allocation</li>
<li>Foster a cohesive work environment</li>
</ul>
<a href="https://www.workstatus.io/staging"><span class="small_anchor">Explore</span></a></div></div><div class="column"><div class="content"><h3><a href="https://www.workstatus.io/workforce-management/field-service-management"><strong>Field Work</strong></a></h3>
<ul>
<li>Keep your field teams connected and productive</li>
<li>Track <a href="https://www.workstatus.io/workforce-management/employee-monitoring-software">employee location</a>, monitor task progress, and ensure safety protocols are followed</li>
<li>Streamline communication and optimize field operations with real-time data and insights</li>
</ul>
<a href="https://www.workstatus.io/staging"><span class="small_anchor">Explore</span></a></div></div><div class="column"><div class="content"><h3><a href="https://www.workstatus.io/workplace-mode/office-work">Office Work</a></h3>
<ul>
<li>Refine office operations by tracking <a href="https://www.workstatus.io/workforce-management/employee-monitoring-software">employee attendance</a></li>
<li>Simplify managing schedules and provide real-time insights into productivity</li>
<li>Boost efficiency and transparency within your office environment</li>
</ul>
<a href="https://www.workstatus.io/staging"><span class="small_anchor">Explore</span></a></div></div></div> <div class="text_center mt80 for-link-white link-text">
<a href="https://www.workstatus.io/staging/features" class="small_anchor">Explore all Features</a>
</div>
<div class="mt40 text_center for-link-white btnSc">
<div class="cmn-democta ctasec cta-var4">
<div><a href="javascript:void(0)" class="ctbtn" onclick="call_demows();" target="_self">Book A Demo</a></div>
<span class="devide">OR</span>
<div>
<a data-href="https://app.workstatus.io/auth/register/?pid=42&amp;type=monthly" href="javascript:void(0);" class="ctbtn nobg" onclick="return get_ws_signupform(this);">Start Free Trial</a>
<span class="nccr">No credit card required</span>
</div>
</div> </div>
</div>
</section>
      <section class="time-data">
        <div class="container">
          <div class="top-section">
            <h6><span class="bg-purple">Ease of Data</span></h6>
            <h2>Get & Use Employees Attendance Data As You Need</h2>
          </div>
          <div class="flex_row">
            <div class="column-three">
              <i class="icon4"></i>
              <h3>Login Based Data Access</h3>
              <p>Login as an employee or Manager and start populating reports in your respective dashboards based on relevant time tracking done.</p>
            </div>
            <div class="column-three">
              <i class="icon5"></i>
              <h3>APIs Access</h3>
              <p>Get access to APIs and integrate Workstatus data with any other tool/software your team is using for a single user interface.</p>
            </div>
            <div class="column-three">
              <i class="icon6"></i>
              <h3>Raw Data Access</h3>
              <p>Use raw data to generate custom reports on minutest details on second-by-second tracking of your team’s time.</p>
            </div>
          </div>
        </div>
      </section>


<section class="data-driving">
   <div class="container">
      <div class="top-section">
         <h6><span class="bg-purple">Data Driving Results</span></h6>
         <h2>Smart Decisions for Business Growth: Plan, Analyze, and Execute</h2>
         <p>Stay one step ahead always, manage & track your workforce & workload, analyze data and ensure business growth.</p>
      </div>
      <div class="data-flex">
         <div class="column challenges">
            <div class="head-data">
               <div class="step-number">1</div>
               <h3>Challenges</h3>
            </div>
            <ul>
               <li>Inefficient Time Tracking</li>
               <li>Real-Time Project / Task Monitoring</li>
               <li>Difficulties in Managing Remote Teams</li>
               <li>Poor Resource Allocation Impacting Outcomes</li>
            </ul>
         </div>
         <div class="column analyze">
            <div class="head-data">
               <div class="step-number">2</div>
               <h3>Analyze</h3>
            </div>
            <div class="analyze-button">
               <div class="play-icon"> <img loading="lazy" src="./assests/images/data-circle2.svg" alt="play" width="270" height="270">
               </div>
               <div class="playsc" onclick="return callinVideo();">
                  <span class="playicon">Play</span>
               </div>
               <p>Play to watch</p>
            </div>
         </div>
         <div class="column solutions">
            <div class="head-data">
               <div class="step-number">3</div>
               <h3>Solutions</h3>
            </div>
            <ul>
               <li>Automated, accurate timekeeping reduces manual errors</li>
               <li>Smart dashboards provide instant project and productivity insights</li>
               <li>Tools track and analyze remote employee activities for better management</li>
               <li>Optimize workforce deployment based on data-driven insights</li>
            </ul>
         </div>
      </div>
   </div>
</section>


<div class="video-popup">
   <div id="gen-vpopup" class="popup-wrapper" style="display:none;">
      <div class="popWrap">
         <div class="popup-content">
            <span class="closeicon" onclick="closeGenVideo('gen-vpopup', false)">Close</span>
            <iframe id="gen-video" class="videoIframe js-videoIframe" allowfullscreen="" src="https://www.youtube.com/embed/UId2lnLDJ20" allow="autoplay"></iframe>
         </div>
      </div>
   </div>
</div>



      <section class="feature-pricing">
        <div class="container">
          <div class="inner-wrap">
            <div class="left">
              <h1>Enhance Workforce Efficiency &amp; Productivity</h1>
              <p>From startups to global enterprises, our scalable plans meet your unique needs. Join the thousands of teams already boosting their productivity with us. Start your 7-day free trial today!</p>
            </div>
            <div class="right">
              <img class="int-only" src="https://www.workstatus.io/wp-content/themes/workstatus/dev-images/opr.svg" alt="Workstatus" width="156" height="156">
            </div>
          </div>
        </div>
      </section>
      <section id="inv-price-fltr" class="plan-section post-animation">
        <div class="container">
          <div class="switcher-sec">
            <div class="country-select">
              <span class="chose int-only">Choose currency:</span>
              <div class="select-list int-only">
                <div id="elm-selectBtn" class="pcselectBtn">
                  <img class="flgicon" id="pflag-icon" src="https://www.workstatus.io/wp-content/themes/workstatus/dev-images/flags/eur.svg" alt="Workstatus" width="13" height="13"><span id="pc-country">EUR (Europe)<br></span>
                </div>
                <div class="selectDropdown" style="z-index: 2;">
                  <div class="pc-option" data-cod="AU" data-country="AUD (Aus &amp; NZ)">
                    <img class="flgicon" src="https://www.workstatus.io/wp-content/themes/workstatus/dev-images/flags/au.svg" alt="Workstatus" width="13" height="13">AUD (Aus &amp; NZ)
                  </div>
                  <div class="pc-option" data-cod="AE" data-country="AED (United Arab Emirates)">
                    <img class="flgicon" src="https://www.workstatus.io/wp-content/themes/workstatus/dev-images/flags/aed.svg" alt="Workstatus" width="13" height="13">AED (United Arab Emirates)
                  </div>
                  <div class="pc-option" data-cod="CA" data-country="CAD (Canada)">
                    <img class="flgicon" src="https://www.workstatus.io/wp-content/themes/workstatus/dev-images/flags/cad.svg" alt="Workstatus" width="13" height="13">CAD (Canada)
                  </div>
                  <div class="pc-option" data-cod="EUR" data-country="EUR (Europe)">
                    <img class="flgicon" src="https://www.workstatus.io/wp-content/themes/workstatus/dev-images/flags/eur.svg" alt="Workstatus" width="13" height="13">EUR (Europe)
                  </div>
                  <div class="pc-option" data-cod="GB" data-country="GBP (United Kingdom)">
                    <img class="flgicon" src="https://www.workstatus.io/wp-content/themes/workstatus/dev-images/flags/gbp.svg" alt="Workstatus" width="13" height="13">GBP (United Kingdom)
                  </div>
                  <div class="pc-option" data-cod="US" data-country="USD (United States)">
                    <img class="flgicon" src="https://www.workstatus.io/wp-content/themes/workstatus/dev-images/flags/usa.svg" alt="Workstatus" width="13" height="13">USD (United States)
                  </div>
                  <div class="pc-option" data-cod="LA" data-country="USD (Latin America)">
                    <img class="flgicon" src="https://www.workstatus.io/wp-content/themes/workstatus/dev-images/flags/usa.svg" alt="Workstatus" width="13" height="13">USD (Latin America)
                  </div>
                  <div class="pc-option" data-cod="ZA" data-country="ZAR (African Region)">
                    <img class="flgicon" src="https://www.workstatus.io/wp-content/themes/workstatus/dev-images/flags/zar.svg" alt="Workstatus" width="13" height="13">ZAR (African Region)
                  </div>
                  <div class="pc-option" data-cod="SA" data-country="SAR (Saudi Arab)">
                    <img class="flgicon" src="https://www.workstatus.io/wp-content/themes/workstatus/dev-images/flags/sar.svg" alt="Workstatus" width="13" height="13">SAR (Saudi Arab)
                  </div>
                </div>
              </div>
            </div>
            <div class="switch-btn-box">
              <span class="monthly">Monthly</span>
              <label class="switch">
              <input id="current-geo" value="IN" type="hidden">
              <input id="ps-switcher" type="checkbox">
              <span class="slider"></span>
              </label>
              <span class="annualy">Annual <span class="int-only">(20% Discount)</span><span class="int-local">(25% Discount)</span></span>
            </div>
          </div>
        </div>
      </section>
      <section class="ws-pricing">
        <div class="container">
          <div class="price-flex">
            <div class="price-column">
              <div class="price-box">
                <div class="pr-plan">
                  <span class="pr-icon">
                    <picture>
                      <img loading="lazy" src="./assests/images/wsp-01.svg"
                        alt="workstatus" width="29" height="29">
                    </picture>
                  </span>
                  <h3>Productivity<br> Management</h3>
                  <div class="total">NO USER MINIMUM</div>
                  <p>For teams who want to improve productivity and accountability via increased visibility.</p>
                </div>
                <div class="card-plan">
                  <span class="wph" id="pl-basic">USD 4</span>
                  <span class="prio">/ user / month</span>
                </div>
                <a class="price_btn" href="#">Choose Plan</a>
                <div class="price-wrapper">
                  <div class="price-options">
                    <h4>Includes:</h4>
                    <div class="option-list">
                      <div class="option">
                        Time tracking
                      </div>
                      <div class="option">
                        Timesheets
                      </div>
                      <div class="option">
                        Activity Levels
                      </div>
                      <div class="option">
                        Limited screenshots
                      </div>
                      <div class="option">
                        Limited app & URL tracking
                      </div>
                      <div class="option">
                        Limited reports
                      </div>
                      <div class="option">
                        Limited payments
                      </div>
                      <div class="option">
                        Clients & Invoices
                      </div>
                      <div class="support-options">
                        <h4>Support:</h4>
                        <p>Limited SLA</p>
                      </div>
                    </div>
                  </div>
                  <button onclick="togglePrice()"  class="price-accordion" type="button" aria-expanded="false">
                  Features
                  </button>
                </div>
              </div>
            </div>
            <div class="price-column">
              <div class="price-box">
                <div class="pr-plan">
                  <span class="pr-icon">
                    <picture>
                      <img loading="lazy" src="./assests/images/wsp-02.svg"
                        alt="workstatus" width="29" height="29">
                    </picture>
                  </span>
                  <h3>Project<br> Management</h3>
                  <div class="total">NO USER MINIMUM</div>
                  <p>For teams who want to improve productivity and accountability via increased visibility.</p>
                </div>
                <div class="card-plan">
                  <span class="wph" id="pl-basic">USD 5.5</span>
                  <span class="prio">/ user / month</span>
                </div>
                <a class="price_btn" href="#">Choose Plan</a>
                <div class="price-wrapper">
                  <div class="price-options">
                    <h4>Everything <span class="perp">in</span> Productivity  +</h4>
                    <div class="option-list">
                      <div class="option">
                        Time tracking
                      </div>
                      <div class="option">
                        Timesheets
                      </div>
                      <div class="option">
                        Activity Levels
                      </div>
                      <div class="option">
                        Limited screenshots
                      </div>
                      <div class="option">
                        Limited app & URL tracking
                      </div>
                      <div class="option">
                        Limited reports
                      </div>
                      <div class="option">
                        Limited payments
                      </div>
                      <div class="option">
                        Clients & Invoices
                      </div>
                      <div class="support-options">
                        <h4>Support:</h4>
                        <p>Limited SLA</p>
                      </div>
                    </div>
                  </div>
                  <button onclick="togglePrice()"  class="price-accordion" type="button" aria-expanded="false">
                  Features
                  </button>
                </div>
              </div>
            </div>
            <div class="price-column">
              <div class="price-box">
                <div class="pr-plan">
                  <span class="pr-icon">
                    <picture>
                      <img loading="lazy" src="./assests/images/wsp-03.svg"
                        alt="workstatus" width="24" height="24">
                    </picture>
                  </span>
                  <h3>Enterprise<br>Solution</h3>
                  <div class="total">NO USER MINIMUM</div>
                  <p>For teams who want to improve productivity and accountability via increased visibility.</p>
                </div>
                <div class="card-plan">
                  <span class="wph" id="pl-basic">Custom</span>
                  <span class="prio smtext"><strong>Billed annually.</strong> Switch the Billing cycle to Annual</span>
                </div>
                <a class="price_btn" href="#">Choose Plan</a>
                <div class="price-wrapper">
                  <div class="price-options">
                    <h4>Everything <span class="perp">in</span> Project  +</h4>
                    <div class="option-list">
                      <div class="option">
                        Time tracking
                      </div>
                      <div class="option">
                        Timesheets
                      </div>
                      <div class="option">
                        Activity Levels
                      </div>
                      <div class="option">
                        Limited screenshots
                      </div>
                      <div class="option">
                        Limited app & URL tracking
                      </div>
                      <div class="option">
                        Limited reports
                      </div>
                      <div class="option">
                        Limited payments
                      </div>
                      <div class="option">
                        Clients & Invoices
                      </div>
                      <div class="support-options">
                        <h4>Support:</h4>
                        <p>Limited SLA</p>
                      </div>
                    </div>
                  </div>
                  <button onclick="togglePrice()"  class="price-accordion" type="button" aria-expanded="false">
                  Features
                  </button>
                </div>
              </div>
            </div>
          </div>
      </section>


     



      <div class="container">
         <div class="comparison-outer"><span class="plan-btn">View Full plan comparison</span></div>
      </div>






      <section class="free-price">
      <div class="container">
      <div class="fdflex">
      <div class="colLeft">
      <div class="pr-plan">
      <h3>FREE</h3>
      <div class="card-plan"><span>$0</span><span class="prio">For single user only</span></div>
      <div class="total">$0 monthly total</div>
      </div>
      </div>
      <div class="colRit">
      <div class="cont">
      <ul>
      <li>Time Tracking</li>
      <li>Limited screenshots</li>
      <li>Timesheets</li>
      <li>Limited reports</li>
      <li>Activity Levels</li>
      <li>Limited payments</li>
      <li>Clients & Invoices</li>
      </ul>
      </div>
      <div class="btn"><a class="price_btn" href="#">Choose Plan</a></div>
      </div>
      </div>
      </div>
      </section>
      <section class="option-data">
      <div class="container">
      <div class="top-section">
      <h2>Optional add-ons</h2>
      <p>Choose your plan above, and then select the add-ons that are right for you.<br>
      Features marked with * can be added via add-ons below.
      </p>
      </div>
      <div class="addons-row">
      <div class="addond-col">
      <div class="add-box">
      <div class="topDiv">
      <div class="icon"><img loading="lazy" src="./assests/images/addon-01.svg"
        alt="ws" width="45" height="45">
      </div>
      <div class="tcon">
      <h4>Insights</h4>
      <span class="price">Starts at $2</span>
      <span class="unit">/ user / mo</span>
      </div>
      </div>
      <div class="bottomDiv">
      <ul>
      <li>Categorized work time</li>
      <li>Smart notifications</li>
      <li>Focus & meeting time</li>
      <li>Suspicious activity detection</li>
      <li>Behavioral highlights</li>
      <li>Work time classification</li>
      </ul>
      </div>
      </div>
      </div>
      <div class="addond-col">
      <div class="add-box">
      <div class="topDiv">
      <div class="icon"><img loading="lazy" src="./assests/images/addon-02.svg"
        alt="ws" width="45" height="45">
      </div>
      <div class="tcon">
      <h4>More screenshots</h4>
      <span class="price">Starts at $3</span>
      <span class="unit">/ user / mo</span>
      </div>
      </div>
      <div class="bottomDiv">
      <ul>
      <li>Allow up to 10 screenshots team members</li>
      <li>Includes all secondary monitors in use</li>
      </ul>
      </div>
      </div>
      </div>
      <div class="addond-col">
      <div class="add-box">
      <div class="topDiv">
      <div class="icon"><img loading="lazy" src="./assests/images/addon-03.svg"
        alt="ws" width="45" height="45">
      </div>
      <div class="tcon">
      <h4>Tasks</h4>
      <span class="price">Starts at $3</span>
      <span class="unit">/ user / mo</span>
      </div>
      </div>
      <div class="bottomDiv">
      <ul>
      <li>Kanban view</li>
      <li>Timeline view</li>
      <li>Task comments</li>
      <li>Start / Due dates</li>
      <li>Labels and attachments</li>
      </ul>
      </div>
      </div>
      </div>
      <div class="addond-col">
      <div class="add-box">
      <div class="topDiv">
      <div class="icon"><img loading="lazy" src="./assests/images/adon-04.svg"
        alt="ws" width="45" height="45">
      </div>
      <div class="tcon">
      <h4>Data retention</h4>
      <span class="price">Starts at $2 </span>
      <span class="unit">/ user / mo</span>
      </div>
      </div>
      <div class="bottomDiv">
      <ul>
      <li>Data retention extended to 6 years for</li>
      <ul>
      <li>Time & activity data</li>
      <li>Calendar & limits</li>
      <li>Finances</li>
      </ul>
      </ul>
      </div>
      </div>
      </div>
      <div class="addond-col">
      <div class="add-box">
      <div class="topDiv">
      <div class="icon"><img loading="lazy" src="./assests/images/adon-05.svg"
        alt="ws" width="45" height="45">
      </div>
      <div class="tcon">
      <h4>Locations</h4>
      <span class="price">Starts at $4</span>
      <span class="unit">/ user / mo</span>
      </div>
      </div>
      <div class="bottomDiv">
      <ul>
      <li>Location tracking on mobile</li>
      <li>Job sites with geofences</li>
      <li>Work orders</li>
      <li>Jobs</li>
      </ul>
      </div>
      </div>
      </div>
      <div class="addond-col">
      <div class="add-box">
      <div class="topDiv">
      <div class="icon"><img loading="lazy" src="./assests/images/adon-06.svg"
        alt="ws" width="45" height="45">
      </div>
      <div class="tcon">
      <h4>Corporate app</h4>
      <span class="price">Starts at $3</span>
      <span class="unit">/ user / mo</span>
      </div>
      </div>
      <div class="bottomDiv">
      <ul>
      <li>Track time and activity in the background on company</li>
      <li>Add new members through provisioning & manage email</li>
      </ul>
      </div>
      </div>
      </div>
      <div class="addond-col">
      <div class="add-box">
      <div class="topDiv">
      <div class="icon"><img loading="lazy" src="./assests/images/addon-07.svg"
        alt="ws" width="45" height="45">
      </div>
      <div class="tcon">
      <h4>Private Cloud</h4>
      <span class="price">Starts at $3</span>
      <span class="unit">/ user / mo</span>
      </div>
      </div>
      <div class="bottomDiv">
      <ul>
      <li>Location tracking on mobile</li>
      <li>Job sites with geofences</li>
      <li>Work orders</li>
      <li>Jobs</li>
      </ul>
      </div>
      </div>
      </div>
      </div>
      </div>
      </section>
      <section class="case-section">
      <div class="container">
      <div class="top-section">
      <h6><span class="bg-white">Use Cases</span></h6>
      <h2>Why Should You Use Workstatus™?</h2>
      </div>
      <div class="flex_row justify-center">
      <div class="column-three">
      <div class="thumb">
      <picture>
      <source type="image/webp" srcset="./assests/images/case-study-13.webp">
      <source type="image/png" srcset="./assests/images/case-study-13.png">
      <img loading="lazy" src="./assests/images/case-study-13.png" alt="case study" width="353" height="208"> 
      </picture>
      </div>
      <div class="blog-title">
      <h3>Improve Attendance of WFH Teams</h3>
      <p>Workstatus is an online attendance management system that helps managers keep an automated track of work from home teams from a centralized location without needing any direct intervention on a day to day basis. Workstatus significantly reduces the amount of time managers spend tracking employee hours. This, in turn, allows managers to focus on more important tasks.</p>
      </div>
      </div>
      <div class="column-three">
      <div class="thumb">
      <picture>
      <source type="image/webp" srcset="./assests/images/case-study-14.webp">
      <source type="image/png" srcset="./assests/images/case-study-14.png">
      <img loading="lazy" src="./assests/images/case-study-14.png" alt="case study" width="353" height="208"> 
      </picture>
      </div>
      <div class="blog-title">
      <h3>Manage Attendance of Remote Teams from Anywhere</h3>
      <p>Workstatus' geofencing feature makes it easy to verify remote employees' attendance by ensuring that your remote staff is clocking in and out from their designated work locations. Its automated notifications system ensures that employees are kept up-to-date on their attendance status and any changes to their schedule.</p>
      </div>
      </div>
      <div class="column-three">
      <div class="thumb">
      <picture>
      <source type="image/webp" srcset="./assests/images/case-study-15.webp">
      <source type="image/png" srcset="./assests/images/case-study-15.png">
      <img loading="lazy" src="./assests/images/case-study-15.png" alt="case study" width="353" height="208"> 
      </picture>
      </div>
      <div class="blog-title">
      <h3>Hassle-Free Workflow</h3>
      <p>Workstatus is a cloud-based attendance management software that can help organisations reduce the cost of managing employee absents. It helps managers track employee absents, lates and sick days. It eliminates the need for manual sheets and ensures that employees are held accountable for their attendance. Workstatus also offers GPS and Geofence tracking for field staff, which can help organisations reduce the cost of travelling to meetings or appointments. Thus, giving you complete hassle-free workflow management.</p>
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
      <h2>Have Queries? We Have Answers</h2>
      </div>
      <div class="buyers-guide-section" id="div-buyer-guide">
      <div class="buyers-guide">
      <div class="buyers-guide-question" id="buyers-guide-question">
      <ul class="question-list">
      <li><a href="#ans_1" class="active">1. Why should a business opt for online employee attendance?</a></li>
      <li><a href="#ans_2" class="">2. How do I choose the best attendance management software for my company?</a></li>
      <li><a href="#ans_3" class="">3. How much does reliable attendance management software cost my business?</a></li>
      <li><a href="#ans_4" class="">4. Is your attendance monitoring system useful for my business?</a></li>
      <li><a href="#ans_5" class="">5. How can an online attendance management system benefit the employees?</a></li>
      <li><a href="#ans_6" class="">6. What all data points and insights does Workstatus provide from employees' attendance?</a></li>
      <li><a href="#ans_7" class="">7. Can I try Workstatus before I roll it out for business?</a></li>
      </ul>
      </div>
      <div class="buyers-guide-answer-part" id="buyers-guide-answer-part">
      <div class="buyers-guide-answer ans_1" id="ans_1">
      <h3 class="guide-question">1. Why should a business opt for online employee attendance?</h3>
      <div class="guide-answer">
      <p>There are numerous reasons any business should go for online employee attendance. The most obvious reason is that it's more efficient and eliminates the need for time-consuming paperwork. With online employee attendance, managers have easier access to real-time data and can identify trends and patterns that would otherwise be hidden in manual attendance records.</p>
      <p>Online employee attendance also helps businesses reduce costs by automating payroll processing. And finally, online employee attendance helps companies protect their employees' privacy by allowing them to clock in and out from any location with internet access.</p>
      </div>
      </div>
      <div class="buyers-guide-answer ans_2" id="ans_2">
      <h3 class="guide-question">2. How do I choose the best attendance management software for my company?</h3>
      <div class="guide-answer">
      <p>It depends on what your company needs. Here are some factors to consider:</p>
      <ul>
      <li>How many employees do you have?</li>
      <li>Do you need a system to track employee time off and sick days?</li>
      <li>Do you need a system that can generate reports on employee attendance?</li>
      <li>What features are important to you? For example, does the software allow for online or mobile access? Is it customizable?</li>
      <li>What is your budget?</li>
      </ul>
      <p>After knowing these factors, you should narrow down your choices and find the best attendance management software for your company.</p>
      <p>Workstatus is also an excellent attendance management software for companies. It offers many features, such as </p>
      <ul>
      <li> Tracking employee time off</li>
      <li> Leaves and Absences, </li>
      <li> Shift patterns, and more</li>
      </ul>
      <p>Workstatus also has a user-friendly interface that makes it easy to use for both employees and managers.</p>
      </div>
      </div>
      <div class="buyers-guide-answer ans_3" id="ans_3">
      <h3 class="guide-question">3. How much does reliable attendance management software cost my business?</h3>
      <div class="guide-answer">
      <p>Any reliable attendance management software typically costs around $10-15 per month per user. However, pricing can vary depending on the software's features and functionality.</p>
      <p>Additionally, many attendance management software like Workstatus offers free trials or demo versions of their products so that businesses can test out the software before making a purchase. This is an excellent option for companies that are unsure whether attendance management software is right for them or not.</p>
      <p>Here is Workstatus pricing for you-</p>
      <ul>
      <li>Free Forever Package: $0 forever </li>
      <li>Starter Package: $4.99 /user/month</li>
      <li>Scale Package: $9.99 /user/month</li>
      <li>Enterprise Package: $18 /user/month</li>
      </ul>
      </div>
      </div>
      <div class="buyers-guide-answer ans_4" id="ans_4">
      <h3 class="guide-question">4. Is your attendance monitoring system useful for my business?</h3>
      <div class="guide-answer">
      <p>Yes, attendance monitoring systems can be quite useful for businesses. For example, our Workstatus can help you keep track of who's in the office and who's not, which can be helpful for both tracking employee productivity and ensuring that your workplace is adequately staffed.</p>
      <p>Workstatus is an AI-powered cloud-based attendance monitoring system that enables businesses to track employees' working hours, absences, and lateness. The system has a number of features, including-</p>
      <ul>
      <li>GPS tracking of employees</li>
      <li>Time-stamped punches</li>
      <li>Interactive dashboard </li>
      <li>Clock-in and Clock-out with Selfie</li>
      </ul>
      <p>The software is helpful for businesses because it enables them to monitor employees' working hours and absences, which can help them to make sure that employees are staying on track and meeting their deadlines. The also enables businesses to identify patterns in employee absences, which can help them to address any potential issues.</p>
      </div>
      </div>
      <div class="buyers-guide-answer ans_5" id="ans_5">
      <h3 class="guide-question">5. How can an online attendance management system benefit the employees?</h3>
      <div class="guide-answer">
      <p> Online attendance management systems can benefit employees in several ways. First, it can help them keep track of their hours and attendance. This is especially helpful for hourly employees who need to track their time worked to be paid correctly.</p>
      <p>It can also help team leaders keep track of employee attendance and hours worked. This can help with scheduling and ensuring that the right employees are working the appropriate shifts.</p>
      <p> Additionally, online attendance management systems generate reports on employee attendance, which can help evaluate employee productivity and track trends. It allows employees with low productivity to get the necessary training and become more efficient at work.</p>
      <p>Finally, online attendance management systems can often provide employees with detailed records of their attendance history, which may be helpful when applying for future jobs or promotions.</p>
      </div>
      </div>
      <div class="buyers-guide-answer ans_6" id="ans_6">
      <h3 class="guide-question">6. What all data points and insights does Workstatus provide from employees' attendance?
      </h3>
      <div class="guide-answer">
      <p> Workstatus provides data points and insights from employees' attendance by tracking when they clock in and out, their breaks, and lunch breaks. This allows employers to see how long employees are working each day, how long they're taking for breaks, and how long they're taking for lunch. Additionally, employers can see which employees are coming in late or leaving early and which employees are clocking in but not working. </p>
      <p> The platform considers factors such as typical hours worked per day, days of the week worked, and average hours worked per week to generate insights.</p>
      <p>Workstatus can help businesses track employee absences and understand why they are occurring. For example, if any team member has been absent multiple times in a row, Workstatus can show you what days of the week they were absent and how many hours they missed. This information can help managers identify potential issues early on and address them before they become more significant problems.</p>
      </div>
      </div>
      <div class="buyers-guide-answer ans_7" id="ans_7">
      <h3 class="guide-question">7. Can I try Workstatus before I roll it out for business?</h3>
      <div class="guide-answer">
      <p>Yes, definitely. Workstatus is a great tool for businesses of all sizes, and there's no harm in giving it a try before introducing it to your team. You can sign up for a free trial on our website and see how it works for you.</p>
      <p>Workstatus is an online tool that helps businesses manage their projects, tasks, and deadlines. It's great to keep everyone on track and ensure that projects are completed on time. The interface is quite simple, and the reports help track progress.</p>
      <p>If you have any questions or need help getting started, please don't hesitate to contact us. We're glad to answer any queries you may have. Thanks!</p>
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
      <h2>What Workstatus Users Tell Us</h2>
      </div>
      <div class="glider-testimonial">
      <div class="glider-contain">
      <div class="glider2">
      <div>
      <p class="white">“ As an IT team, we've been using Workstatus to track and monitor the attendance of employees. It has a dashboard with online timesheets that have been useful and easy to use. It takes screenshots of employees' activities and adds notes to tracked time. It is a comprehensive tool that allows adding multiple projects and monitoring an employee's time on each project. ”</p>
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
      <p class="para_extrasmall white">Joseph George, UK</p>
      </div>
      </div>
      </div>
      <div>
      <p class="white">“ Workstatus is one of the excellent attendance management platforms. With Workstatus, it has become simple for us to monitor employees' time on a project while working remotely. We love the way Workstatus monitors productivity and time tracking, even if there is no internet connection. ”</p>
      <div class="border"><span class="element-triangle"></span></div>
      <div class="author-box">
      <picture>
      <source type="image/webp" srcset="./assests/images/avatar.webp">
      <source type="image/png" srcset="./assests/images/avatar.png">
      <img loading="lazy" src="./assests/images/avatar.png" alt="Alex" width="54"
        height="54">
      </picture>
      <div class="author-content">
      <p class="para_extrasmall white">WS Smith, Switzerland</p>
      </div>
      </div>
      </div>
      <div>
      <p class="white">“ With the help of Workstatus, I can quickly monitor my team in real-time and be sure that my team is working. It is light and works perfectly in the background. Not only that, I can calculate the productivity and time of my staff for any specific tasks. ”</p>
      <div class="border"><span class="element-triangle"></span></div>
      <div class="author-box">
      <picture>
      <source type="image/webp" srcset="./assests/images/avatar.webp">
      <source type="image/png" srcset="./assests/images/avatar.png">
      <img loading="lazy" src="./assests/images/avatar.png" alt="Larry" width="54"
        height="54">
      </picture>
      <div class="author-content">
      <p class="para_extrasmall white">Andy Clarke, UK</p>
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
      <h3 itemprop="name">What is an online attendance management system?
      </h3>
      <div class="faq-accordion-content">
      <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
      <div itemprop="text">
      <p>The online attendance management system allows employees to clock in and out from their computers or smartphone. It also notifies employers of late arrivals, early departures, and absences. It enables employers to see who is at work and who is not. It also helps with payroll administration and compliance with labor laws.
      </p>
      </div>
      </div>
      </div>
      </div>
      <div class="faq-accordion-item-outer" itemscope itemprop="mainEntity"
        itemtype="https://schema.org/Question">
      <h3 itemprop="name">Why do we need an online attendance system?</h3>
      <div class="faq-accordion-content">
      <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
      <div itemprop="text">
      <p>You need an online attendance management system because it can provide a number of benefits to your business. For example, it can help ensure that work is being done and that employees are not taking advantage of the company's time and resources. It can also help prevent missed days or hours, leading to lost productivity. Thus, an online attendance system can boost the overall productivity of the business.
      </p>
      </div>
      </div>
      </div>
      </div>
      <div class="faq-accordion-item-outer" itemscope itemprop="mainEntity"
        itemtype="https://schema.org/Question">
      <h3 itemprop="name">What are the features of attendance management software?</h3>
      <div class="faq-accordion-content">
      <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
      <div itemprop="text">
      <p>There are many features of attendance management software, but some of the most important ones include:
      </p>
      <ul>
      <li>Tracking employee hours and overtime</li>
      <li>Generating reports to help managers stay compliant with labor laws</li>
      <li>Allowing employees to clock in and out from their phones or computers</li>
      <li>Automatically importing time cards from payroll systems</li>
      <li>Alerting managers when employees are late or absent</li>
      </ul>
      <p>Businesses that want to manage their attendance more efficiently should consider investing in software that can automate these tasks. It can save time and money in the long run.</p>
      </div>
      </div>
      </div>
      </div>
      <div class="faq-accordion-item-outer" itemscope itemprop="mainEntity"
        itemtype="https://schema.org/Question">
      <h3 itemprop="name">What is a face recognition/selfie validation attendance system? Why is it being popular?</h3>
      <div class="faq-accordion-content">
      <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
      <div itemprop="text">
      <p>A face recognition/selfie validation attendance system is a system that uses facial recognition software to identify individuals and log them in or out of premises. The reason businesses are using these systems is because they are a more secure way to track employees' attendance than traditional methods such as time cards or ID badges.
      </p>
      </div>
      </div>
      </div>
      </div>
      <div class="faq-accordion-item-outer" itemscope itemprop="mainEntity"
        itemtype="https://schema.org/Question">
      <h3 itemprop="name">What is the best attendance management system?</h3>
      <div class="faq-accordion-content">
      <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
      <div itemprop="text">
      <p>Workstatus is the best attendance management system because it is simple to use, efficient, and affordable.
      </p>
      <p>Workstatus is a cloud-based system that allows employees to clock in and out from their phone or computer. This system eliminates the need for time cards or punch clocks, automatically generating attendance reports. Workstatus also offers a free mobile app that makes clocking in and out even more effortless.</p>
      </div>
      </div>
      </div>
      </div>
      <div class="faq-accordion-item-outer" itemscope itemprop="mainEntity"
        itemtype="https://schema.org/Question">
      <h3 itemprop="name">How do you automate attendance tracking?
      </h3>
      <div class="faq-accordion-content">
      <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
      <div itemprop="text">
      <p> Workstatus is a web-based application that enables employers to automate the process of tracking employee attendance. By using Workstatus, employers can save time and money by reducing the amount of paperwork associated with attendance tracking.
      </p>
      </div>
      </div>
      </div>
      </div>
      <div class="faq-accordion-item-outer" itemscope itemprop="mainEntity"
        itemtype="https://schema.org/Question">
      <h3 itemprop="name">How can I track my attendance if I work from home?
      </h3>
      <div class="faq-accordion-content">
      <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
      <div itemprop="text">
      <p>Workstatus can help you track your attendance if you work from home. It includes a function that notifies employees when they have missed a workday, allowing them to stay on top of their attendance record. Additionally, the app can generate reports on employee hours and absences for managers or supervisors.
      </p>
      </div>
      </div>
      </div>
      </div>
      <div class="faq-accordion-item-outer" itemscope itemprop="mainEntity"
        itemtype="https://schema.org/Question">
      <h3 itemprop="name">How do you track employee absences?
      </h3>
      <div class="faq-accordion-content">
      <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
      <div itemprop="text">
      <p>Workstatus is a cloud-based attendance tracking system that helps businesses track employee absences. With Workstatus, companies can easily see which employees are absent and why and generate reports to help them identify patterns in absences.
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
      <a href="https://www.Workstatus.io/blog/is-overtime-worth-it-a-study-of-8-hour-workdays/" class="blog-link">
      <div class="thumb">
      <picture>
      <source type="image/webp" srcset="./assests/images/useful-resources-blog-1.jpg">
      <source type="image/png" srcset="./assests/images/useful-resources-blog-1.jpg">
      <img loading="lazy" src="./assests/images/useful-resources-blog-1.jpg" alt="Workstatus Time" width="400" height="242"> 
      </picture>
      </div>
      <div class="blog-title">
      <h3>Is Overtime Worth It : A Study of 8 Hours Workday</h3>
      <span class="small_anchor">Read more</span>
      </div>
      </a>
      </div>
      <div class="blog-box column-three">
      <a href="https://www.Workstatus.io/blog/the-impact-of-working-4-days-a-week-a-productivity-hack/" class="blog-link">
      <div class="thumb">
      <picture>
      <source type="image/webp" srcset="./assests/images/useful-resources-blog-2.jpg">
      <source type="image/png" srcset="./assests/images/useful-resources-blog-2.jpg">
      <img loading="lazy" src="./assests/images/useful-resources-blog-2.jpg" alt="Workstatus Time" width="400" height="242"> 
      </picture>
      </div>
      <div class="blog-title">
      <h3>The Impact of Working 4 Hours a Day : A Productivity Hack</h3>
      <span class="small_anchor">Read more</span>
      </div>
      </a>
      </div>
      <div class="blog-box column-three">
      <a href="https://www.Workstatus.io/blog/the-impact-of-working-4-days-a-week-a-productivity-hack/" class="blog-link">
      <div class="thumb">
      <picture>
      <source type="image/webp" srcset="./assests/images/useful-resources-blog-3.jpg">
      <source type="image/png" srcset="./assests/images/useful-resources-blog-3.jpg">
      <img loading="lazy" src="./assests/images/useful-resources-blog-3.jpg" alt="Workstatus Time" width="400" height="242"> 
      </picture>
      </div>
      <div class="blog-title">
      <h3>Location Based Attendance Tracking</h3>
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
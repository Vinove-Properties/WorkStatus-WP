<?php require_once 'common/inc/config.inc.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="alternate" href="<?php echo SITE_URL; ?>/tasks" hreflang="en-us" />
    <link type="text/css" href="./assests/css/featureDetail-new.css" rel="preload stylesheet"
      as="style" />
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
              <h1>Agile Project Management Tool -<br class="linebrk"> Workstatus™ Tasks</h1>
              <p>Effective project management to complete your projects on time and within budget. An excellent way to improve<br class="linebrk"> communication and coordination between different departments and team members.
              </p>
              <!-- <ul class="list">
                <li>Effective Planning and Scheduling</li>
                <li>On-Time Project Deliveries</li>
                <li>Efficient Risk Management</li>
              </ul> -->
              <div class="actionBtn">
                <?php if( geoCTAcheck() === true ) : ?>
                <div><a href="<?php echo $RegLink; ?>" class="primary_btn1"><?php echo $ws_ctas['cta_text']; ?></a>
                  <small>No credit card required</small>
                </div>
                <?php endif; ?>
                <div><a href="javascript:void(0)" onclick="call_demows();" class="primary_btn2">Book A Demo
                  </a>
                  <small>Get queries answered from experts</small>
                </div>
              </div>
              <?php require_once 'common/available-device.php';?>
              <div class="video-wrap">
                <div class="videoSc" id="has-yt-video">
                  <div class="inner">
                    <div class="topVideo srp-15">
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
        <section class="middle-section feature-section">
          <div class="item">
            <div class="container">
              <div class="top-section">
                <h6><span class="bg-purple">Optimize Performance</span></h6>
                <h2>A Must Have Project Management Tool - Workstatus™ Tasks</h2>
              </div>
              <div id="active_Current_Tabs1">
                <div class="flex_row">
                  <div class="column-right">
                    <picture class="page active" id="p1">
                      <source type="image/webp" srcset="./assests/images/tasks-01.webp">
                      <source type="image/png" srcset="./assests/images/tasks-01.png">
                      <img loading="lazy" src="./assests/images/tasks-01.png"
                        alt="tasks" width="771" height="511">
                    </picture>
                    <picture class="page" id="p2">
                      <source type="image/webp" srcset="./assests/images/tasks-02.webp">
                      <source type="image/png" srcset="./assests/images/tasks-02.png">
                      <img loading="lazy" src="./assests/images/tasks-02.png"
                        alt="tasks" width="771" height="511">
                    </picture>
                    <picture class="page" id="p3">
                      <source type="image/webp" srcset="./assests/images/tasks-03.webp">
                      <source type="image/png" srcset="./assests/images/tasks-03.png">
                      <img loading="lazy" src="./assests/images/tasks-03.png"
                        alt="tasks" width="771" height="511">
                    </picture>
                  </div>
                  <div class="column-left">
                    <div class="all-content">
                      <div class="text-column active" id="t1" data-section="active_Current_Tabs1">
                        <h3><i></i>Sprint Planning</h3>
                        <p>Break down your work into manageable tasks that can be completed in a short time frame to stay on track and meet deadlines. Plus,  track progress and ensure that all tasks are completed on time. 
                        </p>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="./assests/images/tasks-01.webp">
                          <source type="image/png" srcset="./assests/images/tasks-01.png">
                          <img loading="lazy" src="./assests/images/tasks-01.png"
                            alt="tasks" width="771" height="511">
                        </picture>
                      </div>
                    </div>
                    <div class="all-content">
                      <div class="text-column" id="t2" data-section="active_Current_Tabs1">
                        <h3><i></i>Kanban Board</h3>
                        <p>Visualize your workflow and improve communication and collaboration among team members.This can help you better plan your resources ensuring that tasks are not queued up indefinitely.
                        </p>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="./assests/images/tasks-02.webp">
                          <source type="image/png" srcset="./assests/images/tasks-02.png">
                          <img loading="lazy" src="./assests/images/tasks-02.png"
                            alt="tasks" width="771" height="511">
                        </picture>
                      </div>
                    </div>
                    <div class="all-content">
                      <div class="text-column" id="t3" data-section="active_Current_Tabs1">
                        <h3><i></i>Task & Time Management</h3>
                        <p>See how much time was spent on each task at a glance. Add tasks in one click and start time tracking instantly. Track your team's working hours from anywhere with our apps.
                        </p>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="./assests/images/tasks-03.webp">
                          <source type="image/png" srcset="./assests/images/tasks-03.png">
                          <img loading="lazy" src="./assests/images/tasks-03.png"
                            alt="tasks" width="771" height="511">
                        </picture>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="mt40 btnSc">
                <p>Know More About Project Management Here</p>
                <a href="javascript:void(0)" onclick="call_demows();" class="primary_btn1">Book A Demo</a>
                <small>And Get started!</small>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="container">
              <div class="top-section">
                <h6><span class="bg-purple">Achieve More in Less Time</span></h6>
                <h2>Stay On Time With Online Project Management Tool</h2>
              </div>
              <div id="active_Current_Tabs2">
                <div class="flex_row">
                  <div class="column-right">
                    <picture class="page active" id="p4">
                      <source type="image/webp" srcset="./assests/images/tasks-04.webp">
                      <source type="image/png" srcset="./assests/images/tasks-04.png">
                      <img loading="lazy" src="./assests/images/tasks-04.png"
                        alt="tasks" width="463" height="453">
                    </picture>
                    <picture class="page" id="p5">
                      <source type="image/webp" srcset="./assests/images/tasks-05.webp">
                      <source type="image/png" srcset="./assests/images/tasks-05.png">
                      <img loading="lazy" src="./assests/images/tasks-05.png"
                        alt="tasks" width="463" height="453">
                    </picture>
                    <picture class="page" id="p6">
                      <source type="image/webp" srcset="./assests/images/tasks-06.webp">
                      <source type="image/png" srcset="./assests/images/tasks-06.png">
                      <img loading="lazy" src="./assests/images/tasks-06.png"
                        alt="tasks" width="463" height="453">
                    </picture>
                  </div>
                  <div class="column-left">
                    <div class="all-content">
                      <div class="text-column active" id="t4" data-section="active_Current_Tabs2">
                        <h3>Faster Completion of Bigger Projects</h3>
                        <p>Save 30% of your working hours with workstatus. Break big projects into manageable milestones. Get real-time updates and reports on the performance.
                        </p>
                        <ul class="checkList">
                          <li>Receive recognition and appreciation</li>
                          <li>Reduce stress levels</li>
                        </ul>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="./assests/images/tasks-04.webp">
                          <source type="image/png" srcset="./assests/images/tasks-04.png">
                          <img loading="lazy" src="./assests/images/tasks-04.png"
                            alt="tasks" width="463" height="453">
                        </picture>
                      </div>
                    </div>
                    <div class="all-content">
                      <div class="text-column" id="t5" data-section="active_Current_Tabs2">
                        <h3>Avoid Failures</h3>
                        <p>Never miss an issue again. Get notified when something goes wrong. Prevent mistakes and increase productivity.
                        </p>
                        <ul class="checkList">
                          <li>No more frustration and anger</li>
                          <li>Save time and money</li>
                        </ul>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="./assests/images/tasks-05.webp">
                          <source type="image/png" srcset="./assests/images/tasks-05.png">
                          <img loading="lazy" src="./assests/images/tasks-05.png"
                            alt="tasks" width="463" height="453">
                        </picture>
                      </div>
                    </div>
                    <div class="all-content">
                      <div class="text-column" id="t6" data-section="active_Current_Tabs2">
                        <h3>Foster teamwork Through Agile Tools</h3>
                        <p>Get the latest insights from your team in real-time. See what’s being worked on in a single glance. Improve the way you work with our tools for teams.
                        </p>
                        <ul class="checkList">
                          <li>Live reports</li>
                          <li>Actionable insights</li>
                        </ul>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="./assests/images/tasks-06.webp">
                          <source type="image/png" srcset="./assests/images/tasks-06.png">
                          <img loading="lazy" src="./assests/images/tasks-06.png"
                            alt="tasks" width="463" height="453">
                        </picture>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="mt40 btnSc">
                <p>Excited to know more!</p>
                <a href="javascript:void(0)" onclick="call_demows();" class="primary_btn1">Book A Demo</a>
                <small>And Explore..</small>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="container">
              <div class="top-section">
                <h6><span class="bg-purple">Automate Your Sprints</span></h6>
                <h2>Instantly Plan Your Sprints With Sprint Management Tool</h2>
                <p>Workstatus™ Tasks helps in sprint planning for scrum teams to identify and track the specific tasks that need to be completed in order to reach their desired goal. By dividing up work into manageable sprints, teams can more easily assess progress and make necessary adjustments along the way.</p>
              </div>
              <div id="active_Current_Tabs3">
                <div class="flex_row">
                  <div class="column-right">
                    <picture class="page active" id="p7">
                      <source type="image/webp" srcset="./assests/images/tasks-07.webp">
                      <source type="image/png" srcset="./assests/images/tasks-07.png">
                      <img loading="lazy" src="./assests/images/tasks-07.png"
                        alt="tasks" width="684" height="560">
                    </picture>
                    <picture class="page" id="p8">
                      <source type="image/webp" srcset="./assests/images/tasks-08.webp">
                      <source type="image/png" srcset="./assests/images/tasks-08.png">
                      <img loading="lazy" src="./assests/images/tasks-08.png"
                        alt="tasks" width="684" height="560">
                    </picture>
                  </div>
                  <div class="column-left">
                    <div class="all-content">
                      <div class="text-column active" id="t7" data-section="active_Current_Tabs3">
                        <h3><i></i>Create Visible Sprint Plans</h3>
                        <p>Sprint planning that’s simple and visual. With a little help from your team members, you can create plans for the whole sprint in an instant! Plus it's easy to switch between different views so everyone knows what needs to be done at each moment of time-saving convenience.
                        </p>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="./assests/images/tasks-07.webp">
                          <source type="image/png" srcset="./assests/images/tasks-07.png">
                          <img loading="lazy" src="./assests/images/tasks-07.png"
                            alt="tasks" width="684" height="560">
                        </picture>
                      </div>
                    </div>
                    <div class="all-content">
                      <div class="text-column" id="t8" data-section="active_Current_Tabs3">
                        <h3><i></i>Collaboration and Teamwork</h3>
                        <p>Easy to manage different people with different backgrounds and experiences together to work on a project. Share ideas and come up with better solutions than if they were working separately.</p>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="./assests/images/tasks-08.webp">
                          <source type="image/png" srcset="./assests/images/tasks-08.png">
                          <img loading="lazy" src="./assests/images/tasks-08.png"
                            alt="tasks" width="684" height="560">
                        </picture>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="mt40 btnSc">
                <p>Ask All Your Queries</p>
                <a href="javascript:void(0)" onclick="call_demows();" class="primary_btn1">Book A Demo</a>
                <small>And Take A Free Tour!</small>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="container">
              <div class="top-section">
                <h6><span class="bg-purple">Try Kanban Style</span></h6>
                <h2>Powerful Kanban Project Management Tool</h2>
                <p>Workstatus™ Tasks can help team members visualize the workflow and progress of a project. This can be helpful in clarifying roles and responsibilities, and ensuring that everyone is on the same page regarding the project plan.</p>
              </div>
              <div id="active_Current_Tabs4">
                <div class="flex_row">
                  <div class="column-right">
                    <picture class="page active" id="p9">
                      <source type="image/webp" srcset="./assests/images/tasks-09.webp">
                      <source type="image/png" srcset="./assests/images/tasks-09.png">
                      <img loading="lazy" src="./assests/images/tasks-09.png"
                        alt="tasks" width="726" height="557">
                    </picture>
                    <picture class="page" id="p10">
                      <source type="image/webp" srcset="./assests/images/tasks-10.webp">
                      <source type="image/png" srcset="./assests/images/tasks-10.png">
                      <img loading="lazy" src="./assests/images/tasks-10.png"
                        alt="tasks" width="726" height="557">
                    </picture>
                  </div>
                  <div class="column-left">
                    <div class="all-content">
                      <div class="text-column active" id="t9" data-section="active_Current_Tabs4">
                        <h3><i></i> Kanban Board Online</h3>
                        <p>Automate your workflow so you can move tasks forward with a click. No more assigning the same people to the same tasks over and over again! See how kanban becomes better in this way.</p>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="./assests/images/tasks-09.webp">
                          <source type="image/png" srcset="./assests/images/tasks-09.png">
                          <img loading="lazy" src="./assests/images/tasks-09.png"
                            alt="tasks" width="726" height="557">
                        </picture>
                      </div>
                    </div>
                    <div class="all-content">
                      <div class="text-column" id="t10" data-section="active_Current_Tabs4">
                        <h3><i></i>Slide from Kanban to Timeline</h3>
                        <p>With the Kanban board, you can see what each team member is working on in their respective columns. It also helps to avoid bottlenecks because it keeps projects on track and transparent for everyone involved.</p>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="./assests/images/tasks-10.webp">
                          <source type="image/png" srcset="./assests/images/tasks-10.png">
                          <img loading="lazy" src="./assests/images/tasks-10.png"
                            alt="tasks" width="726" height="557">
                        </picture>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="mt40 btnSc">
                <p>Want To Try Kanban For Your Team?</p>
                <a href="javascript:void(0)" onclick="call_demows();" rel="nofollow" class="primary_btn1">Book A Demo</a>
                <small>Check it now!!</small>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="container">
              <div class="top-section">
                <h6><span class="bg-purple">Self- Improvement</span></h6>
                <h2>Create Personal To-Do Lists</h2>
                <p>With Workstatus™ Tasks, create to-do lists to prioritize your tasks which can be helpful in ensuring that you focus on the most important things first. Additionally, seeing everything that you need to do in one place can give you a better sense of control over your projects.</p>
              </div>
              <div id="active_Current_Tabs5">
                <div class="flex_row">
                  <div class="column-right">
                    <picture class="page active" id="p11">
                      <source type="image/webp" srcset="./assests/images/tasks-11.webp">
                      <source type="image/png" srcset="./assests/images/tasks-11.png">
                      <img loading="lazy" src="./assests/images/tasks-11.png"
                        alt="tasks" width="463" height="453">
                    </picture>
                    <picture class="page" id="p12">
                      <source type="image/webp" srcset="./assests/images/tasks-12.webp">
                      <source type="image/png" srcset="./assests/images/tasks-12.png">
                      <img loading="lazy" src="./assests/images/tasks-12.png"
                        alt="tasks" width="463" height="453">
                    </picture>
                  </div>
                  <div class="column-left">
                    <div class="all-content">
                      <div class="text-column active" id="t11" data-section="active_Current_Tabs5">
                        <h3><i></i>Stay on Track</h3>
                        <p>Get things done with a personal to-do list that's just for you! You can keep track of what needs to get accomplished today, tomorrow, and the week after. Personalize your tasks using checklists.</p>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="./assests/images/tasks-11.webp">
                          <source type="image/png" srcset="./assests/images/tasks-11.png">
                          <img loading="lazy" src="./assests/images/tasks-11.png"
                            alt="tasks" width="463" height="453">
                        </picture>
                      </div>
                    </div>
                    <div class="all-content">
                      <div class="text-column" id="t12" data-section="active_Current_Tabs5">
                        <h3><i></i>Improve Time Management and Productivity</h3>
                        <p>Break down larger tasks into smaller, more manageable steps so that you don't feel overwhelmed. By having a list of tasks that need to be completed, you can better plan your day and make sure that you're using your time as efficiently as possible.</p>
                      </div>
                      <div class="mob-image">
                        <picture>
                          <source type="image/webp" srcset="./assests/images/tasks-12.webp">
                          <source type="image/png" srcset="./assests/images/tasks-12.png">
                          <img loading="lazy" src="./assests/images/tasks-12.png"
                            alt="tasks" width="463" height="453">
                        </picture>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="mt40 btnSc">
                <p>Want To Check How Agile Project<br> Management Software Works?</p>
                <a href="javascript:void(0)" onclick="call_demows();" rel="nofollow" class="primary_btn1">Book A Demo</a>
                <small>Go for it!</small>
              </div>
            </div>
          </div>
        </section>
        <section class="feature_section for-heading-center whitetxt">
          <div class="container">
            <div class="top-section">
              <h6><span class="bg-white">Get Powerful Features</span></h6>
              <h2>Workstatus Is Not Just A Task Management Tool</h2>
              <p>Workstatus is an AI-powered workforce management software to help manage and optimize the performance of an organization's workforce. It allows organizations to more effectively plan, schedule, and monitor the work of their employees. Learn more about Workstatus’ Tasks powerful features to improve overall performance-</p>
            </div>
            <div class="flex_row mt70">
              <div class="column">
                <a href="<?php echo SITE_URL; ?>/best-employee-productivity-cloud-software">
                  <span class="iconImg">
                    <svg aria-hidden="true">
                      <use xlink:href="./assests/images/icons/featuresicon.svg#productivity-management"></use>
                    </svg>
                  </span>
                  <h3>Productivity Management</h3>
                  <p>Enhanced employees’ productivity</p>
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
                  <p>Shift Scheduling and Management</p>
                  <span class="small_anchor">Explore</span>
                </a>
              </div>
              <div class="column">
                <a href="<?php echo SITE_URL; ?>/best-employee-monitoring-software-online">
                  <span class="iconImg">
                    <svg aria-hidden="true">
                      <use
                        xlink:href="./assests/images/icons/featuresicon.svg#employmonitoring">
                      </use>
                    </svg>
                  </span>
                  <h3>Employee Monitoring</h3>
                  <p>Conveniently track and monitor employee activities</p>
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
                  <p>Planning and budgeting for profitable projects</p>
                  <span class="small_anchor">Explore</span>
                </a>
              </div>
              <div class="column">
                <a href="<?php echo SITE_URL; ?>/best-online-invoicing-software">
                  <span class="iconImg">
                    <svg aria-hidden="true">
                      <use xlink:href="./assests/images/icons/featuresicon.svg#online-invoicing">
                      </use>
                    </svg>
                  </span>
                  <h3>Online Invoicing</h3>
                  <p>Integrated online invoicing tool with tracking</p>
                  <span class="small_anchor">Explore</span>
                </a>
              </div>
              <div class="column">
                <a href="<?php echo SITE_URL; ?>/best-time-report-software-online">
                  <span class="iconImg">
                    <svg aria-hidden="true">
                      <use xlink:href="./assests/images/icons/featuresicon.svg#detailed-reporting"></use>
                    </svg>
                  </span>
                  <h3>Detailed Reporting</h3>
                  <p>Robust real-time reporting for faster actions</p>
                  <span class="small_anchor">Explore</span>
                </a>
              </div>
            </div>
            <div class="text_center mt70 for-link-white link-text">
              <a href="<?php echo SITE_URL; ?>/features" class="small_anchor">Try More Features</a>
            </div>
            <div class="mt40 text_center for-link-white btnSc">
              <p>Activate your Productivity Monitoring Tracker</p>
              <a href="javascript:void(0)" onclick="call_demows();" class="primary_btn1 bgwhite">Book A Demo</a>
              <small>Get queries answered from experts</small>
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
              <h2>Why Should You Use WorkStatus™ Tasks?</h2>
            </div>
            <div class="glider-testimonial">
              <div class="glider-contain">
                <div class="glider2">
                  <div>
                    <p class="white">“ I've been using Workstatus for about six months now, and I can't imagine managing my projects without it! The time tracking feature is really helpful, and the invoicing system is top-notch. ”</p>
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
                        <p class="para_extrasmall white">Adam Henry, USA</p>
                      </div>
                    </div>
                  </div>
                  <div>
                    <p class="white">“ I've been using Workstatus for about a year now, and it has made project management so much easier! The interface is very user-friendly, and I love the reporting feature. It's so easy to use and helps me keep track of all my tasks. ”</p>
                    <div class="border"><span class="element-triangle"></span></div>
                    <div class="author-box">
                      <picture>
                        <source type="image/webp" srcset="./assests/images/avatar.webp">
                        <source type="image/png" srcset="./assests/images/avatar.png">
                        <img loading="lazy" src="./assests/images/avatar.png" alt="Alex" width="54"
                          height="54">
                      </picture>
                      <div class="author-content">
                        <p class="para_extrasmall white">John Fleming, Singapore</p>
                      </div>
                    </div>
                  </div>
                  <div>
                    <p class="white">“ Workstatus is an excellent project management tool that has helped me streamline my workflow and stay organized. The customer support is impressive, and the team is always available to help with any questions. Highly recommend! ”</p>
                    <div class="border"><span class="element-triangle"></span></div>
                    <div class="author-box">
                      <picture>
                        <source type="image/webp" srcset="./assests/images/avatar.webp">
                        <source type="image/png" srcset="./assests/images/avatar.png">
                        <img loading="lazy" src="./assests/images/avatar.png" alt="Larry" width="54"
                          height="54">
                      </picture>
                      <div class="author-content">
                        <p class="para_extrasmall white">Alex Johnson, UK</p>
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
                    <h3 itemprop="name">How do I create a task in Workstatus?
                    </h3>
                    <div class="faq-accordion-content">
                      <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div itemprop="text">
                          <p>Workstatus is a task management tool that helps you organize and keep track of your work. To create a task in Workstatus, simply click on the "Add Task" button and enter the relevant information. You can then assign the task to yourself or someone else. Set a due date, add files, and add tags if necessary. Once you're done, click "Save," and the task will be added to your Workstatus account.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="faq-accordion-item-outer" itemscope itemprop="mainEntity"
                    itemtype="https://schema.org/Question">
                    <h3 itemprop="name"> What all Workstatus tasks offers to project managers?</h3>
                    <div class="faq-accordion-content">
                      <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div itemprop="text">
                          <p>Workstatus Tasks offers a variety of features that are beneficial to project managers. First and foremost, WorkStatus provides a centralized location for all project files and communications. This allows team members to collaborate on projects quickly and makes it easy to keep track of changes. Overall, Workstatus is an excellent tool for project management and provides many features that are helpful for both team collaboration and client communication.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="faq-accordion-item-outer" itemscope itemprop="mainEntity"
                    itemtype="https://schema.org/Question">
                    <h3 itemprop="name">Can I track my/my team's everyday tasks?</h3>
                    <div class="faq-accordion-content">
                      <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div itemprop="text">
                          <p>Yes. You can track your everyday tasks using a task management tool like Workstatus. Workstatus is an online task management tool that helps you and your team stay organized and on track. With Workstatus, you can create to-do lists, assign tasks to team members, and track project progress. Plus, you can access your data from anywhere in the world.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="faq-accordion-item-outer" itemscope itemprop="mainEntity"
                    itemtype="https://schema.org/Question">
                    <h3 itemprop="name">Is Workstatus-Task a complete project management software?</h3>
                    <div class="faq-accordion-content">
                      <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div itemprop="text">
                          <p>Workstatus-Task is a complete project management software that enables users to collaborate and communicate for better project management. The software provides features such as task management, a drag-and-drop interface, file sharing, and real-time updates. Overall, Workstatus-Task seems like a decent project management tool that could be worth exploring, particularly if you are already using other productivity tools with which it can integrate easily.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="faq-accordion-item-outer" itemscope itemprop="mainEntity"
                    itemtype="https://schema.org/Question">
                    <h3 itemprop="name">Can I take a tour of Workstatus and re-assure myself of its usability?</h3>
                    <div class="faq-accordion-content">
                      <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div itemprop="text">
                          <p>Yes, definitely. Workstatus is an extremely user-friendly and intuitive platform. In fact, one of our primary goals when designing the platform was to make it as easy to use as possible. We think you'll find that it's a really valuable tool for managing your work life.</p>
                          <p>The best way to get a sense of how Workstatus works is to take the tour on our website. The tour will walk you through all the features of the platform and show you how to use them. If you have any questions or feedback, don't hesitate to get in touch with us. We'd love to hear from you!</p>
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
                <a href="https://www.workstatus.io/blog/productivity-hack-alert-follow-the-getting-things-done-gtd-method-to-streamline-your-tasks/" class="blog-link">
                  <div class="thumb">
                    <picture>
                      <source type="image/webp" srcset="./assests/images/useful-resources-blog-1.jpg">
                      <source type="image/png" srcset="./assests/images/useful-resources-blog-1.jpg">
                      <img loading="lazy" src="./assests/images/useful-resources-blog-1.jpg" alt="Workstatus Time" width="400" height="242"> 
                    </picture>
                  </div>
                  <div class="blog-title">
                    <h3>Productivity Hack Alert! Follow the Getting Things Done (GTD) Method to Streamline Your Tasks</h3>
                    <span class="small_anchor">Read more</span>
                  </div>
                </a>
              </div>
              <div class="blog-box column-three">
                <a href="https://www.workstatus.io/blog/9-effective-task-management-strategies-for-higher-productivity/" class="blog-link">
                  <div class="thumb">
                    <picture>
                      <source type="image/webp" srcset="./assests/images/useful-resources-blog-2.jpg">
                      <source type="image/png" srcset="./assests/images/useful-resources-blog-2.jpg">
                      <img loading="lazy" src="./assests/images/useful-resources-blog-2.jpg" alt="Workstatus Time" width="400" height="242"> 
                    </picture>
                  </div>
                  <div class="blog-title">
                    <h3>9 Effective Task Management Strategies For Higher Productivity</h3>
                    <span class="small_anchor">Read more</span>
                  </div>
                </a>
              </div>
              <div class="blog-box column-three">
                <a href="https://www.workstatus.io/blog/10-features-of-workstatus-that-make-it-a-perfect-workforce-management-system/" class="blog-link">
                  <div class="thumb">
                    <picture>
                      <source type="image/webp" srcset="./assests/images/useful-resources-blog-3.jpg">
                      <source type="image/png" srcset="./assests/images/useful-resources-blog-3.jpg">
                      <img loading="lazy" src="./assests/images/useful-resources-blog-3.jpg" alt="Workstatus Time" width="400" height="242"> 
                    </picture>
                  </div>
                  <div class="blog-title">
                    <h3>10 Features of Workstatus That Make It a Perfect Workforce Management System</h3>
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
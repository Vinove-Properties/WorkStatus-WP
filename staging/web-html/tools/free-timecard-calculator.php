<?php require_once '../common/inc/config.inc.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="alternate" href="<?php echo SITE_URL; ?>/free-timecard-calculator" hreflang="en-us" />
    <link rel="shortcut icon" href="../assests/images/favicon.png" type="image/x-icon" />
    <link type="text/css" href="../assests/css/time-calculator.css" rel="preload stylesheet" as="style" />
    <?php if( !isMobile() ) : ?>
    <link type="text/css" rel="preload stylesheet" href="../assests/css/glider.css" as="style" />
    <?php endif; ?>
    <?php require_once '../common/inc/meta.php'; ?>
    <style>
    .disabl{
    pointer-events:none; 
    cursor:not-allowed;
    }
    </style>
  </head>
  <body>
    <?php require_once '../common/inc/after-body-tag.php'; ?>
    <div class="body__wrapper">
      <div class="feature-header">
        <?php require_once '../common/header.php';?>
      </div>
      <main class="site__content">
        <section class="timecalcuator" id="printid">
          <form method="post" name="formtime" id="formtime" class="formtime">
            <div class="container">
              <div class="top-content">
                <h1>Free Time Card Calculator</h1>
                <p>A great way to create your personal time card. Just enter your work hours and breaks to get your total hours worked.</p>                
              </div>
              <div class="form-wrapper">
                  <div class="frm-input">
                    <div class="form-group ws-error">
                        <label>Name*</label>
                        <input type="text" id="ft-name" placeholder="Enter your name" name="uname" maxlength="30">
                        <span class="error">Please Fill Name.</span>
                    </div>
                    <div class="form-group ws-error">
                        <label>Email*</label>
                        <input type="text" id="ft-email" placeholder="Enter your email" name="uemail" maxlength="30">
                        <span class="error">Please Fill Email.</span>
                       </div>
                        
                    </div>
              </div>
              
              <div class="table-wrap">
                <table class="time-table">
                  <tr>
                    <th class="align-left">Day</th>
                    <th>Start Time</th>
                    <th>Stop Time</th>
                    <th>Breaks (hh/mm)</th>
                    <th>Total Hours</th>
                  </tr>
                  <?php 
                    $dayarr = array('Monday','Tuesday','Wednesday','Thrusday','Friday','Saturday','Sunday');
                    foreach($dayarr as $key => $day){
                    ?>
                  <tr>
                    <td class="align-left"><?=$day?></td>
                    <td>
                      <div class="input-group">
                        <span>
                          <div class="calcfield"  tabindex="0"  onclick="myFunction('select-sec1<?=$key?>')" id="maindiv<?=$key?>">
                            <input type="hidden" id="starthh-<?php echo $key; ?>" name="starthh[]" value="">
                            <span id="changevalue1<?=$key?>">00</span>
                            <div tabindex="-1" class="select-sec" id="select-sec1<?=$key?>" >
                              <ul class="in-options">
                                <li class="hint">HH</li>
                                <?php for($hours=0; $hours<13; $hours++){
                                  $time = str_pad($hours,2,'0',STR_PAD_LEFT);
                                              ?>
                                <li data-key="<?php echo $time;?>" class="" onclick="startsetValue(<?php echo $time; ?>,'changevalue1<?=$key?>','starthh-<?=$key?>',<?php echo $key;?>)"><?php echo $time;?></li>
                                <?php } ?>
                              </ul>
                            </div>
                          </div>
                        </span>
                        :
                        <span>
                          <div class="calcfield"  tabindex="0"  onclick="myFunction('select-sec2<?=$key?>')" id="maindiv<?=$key?>">
                            <input type="hidden" id="startmm-<?php echo $key; ?>" name="startmm[]" value="">
                            <span id="changevalue2<?=$key?>">00</span>
                            <div tabindex="-1" class="select-sec" id="select-sec2<?=$key?>" >
                              <ul class="in-options">
                                <li class="hint">MM</li>
                                <?php 
                                  for($mins=0; $mins<60; $mins+=15)
                                  { 
                                  $time = str_pad($mins,2,'0',STR_PAD_LEFT);
                                   ?>
                                <li data-key="<?php echo $time;?>" class="" onclick="startsetValue(<?php echo $time;?>,'changevalue2<?=$key?>','startmm-<?=$key?>',<?php echo $key;?>)"><?=sprintf("%02d", $time);?></li>
                                <?php
                                  }
                                  ?>
                              </ul>
                            </div>
                          </div>
                        </span>
                        :
                        <span>
                        <input type="hidden" id="startzone-<?php echo $key; ?>" name="startzone[]" value="AM">
                        <select name="hourly_rate" id="hourly_rate1<?=$key?>" class="calcfield slctfld" onchange="startsetzoneValue('hourly_rate1<?=$key?>','startzone-<?=$key?>',<?php echo $key;?>)">
                          <option value="AM">AM</option>
                          <option value="PM">PM</option>
                        </select>
                      </div>
                    </td>
                    <td>
                      <div class="input-group">
                        <span>
                          <div class="calcfield"  tabindex="0"  onclick="myFunction('select-sec3<?=$key?>')" id="maindiv<?=$key?>">
                            <input type="hidden" id="stophh-<?php echo $key; ?>" name="stophh[]" value="">
                            <span id="changevalue3<?=$key?>">00</span>
                            <div tabindex="-1" class="select-sec" id="select-sec3<?=$key?>" >
                              <ul class="in-options">
                                <li class="hint">HH</li>
                                <?php for($hours=0; $hours<13; $hours++){
                                  $time = str_pad($hours,2,'0',STR_PAD_LEFT);
                                                    ?>
                                <li data-key="<?php echo $time;?>" class=""  onclick="stopsetValue(<?php echo $time; ?>,'changevalue3<?=$key?>','stophh-<?=$key?>',<?php echo $key;?>)"><?php echo $time;?></li>
                                <?php } ?>
                              </ul>
                            </div>
                          </div>
                        </span>
                        :
                        <span>
                          <div class="calcfield"  tabindex="0"  onclick="myFunction('select-sec4<?=$key?>')" id="maindiv">
                            <input type="hidden" id="stopmm-<?php echo $key; ?>" name="stopmm[]" value="">
                            <span id="changevalue4<?=$key?>">00</span>
                            <div tabindex="-1" class="select-sec" id="select-sec4<?=$key?>" >
                              <ul class="in-options">
                                <li class="hint">MM</li>
                                <?php 
                                  for($mins=0; $mins<60; $mins+=15)
                                  { 
                                  $time = str_pad($mins,2,'0',STR_PAD_LEFT);
                                   ?>
                                <li data-key="<?php echo $time;?>" class=""  onclick="stopsetValue(<?php echo $time;?>,'changevalue4<?=$key?>','stopmm-<?=$key?>',<?php echo $key;?>)"><?=sprintf("%02d", $time);?></li>
                                <?php
                                  }
                                  ?>
                              </ul>
                            </div>
                          </div>
                        </span>
                        :
                        <span>
                        <input type="hidden" id="stopzone-<?php echo $key; ?>" name="stopzone[]" value="AM">
                        <select name="hourly_rate" id="hourly_rate2<?=$key?>" class="calcfield slctfld" onchange="startsetzoneValue('hourly_rate2<?=$key?>','stopzone-<?=$key?>',<?php echo $key;?>)">
                          <option value="AM">AM</option>
                          <option value="PM">PM</option>
                        </select>
                      </div>
                    </td>
                    <td>
                      <div class="input-group">
                        <span>
                          <div class="calcfield"  tabindex="0"  onclick="myFunction('select-sec5<?=$key?>')" id="maindiv">
                            <input type="hidden" id="breakhh-<?php echo $key; ?>" name="breakhh[]" value="">
                            <span id="changevalue5<?=$key?>">00</span>
                            <div tabindex="-1" class="select-sec" id="select-sec5<?=$key?>" >
                              <ul class="in-options">
                                <li class="hint">HH</li>
                                <?php for($hours=0; $hours<13; $hours++){
                                  $time = str_pad($hours,2,'0',STR_PAD_LEFT);
                                                    ?>
                                <li data-key="<?php echo $time;?>" class="" onclick="breaksetValue(<?php echo $time; ?>,'changevalue5<?=$key?>','breakhh-<?=$key?>',<?php echo $key; ?>)"><?php echo $time;?></li>
                                <?php } ?>
                              </ul>
                            </div>
                          </div>
                        </span>
                        :
                        <span>
                          <div class="calcfield"  tabindex="0" onclick="myFunction('select-sec6<?=$key?>')" id="maindiv">
                            <input type="hidden" id="breakmm-<?php echo $key; ?>" name="breakmm[]" value="">
                            <span id="changevalue6<?=$key?>">00</span>
                            <div tabindex="-1" class="select-sec" id="select-sec6<?=$key?>" >
                              <ul class="in-options">
                                <li class="hint">MM</li>
                                <?php 
                                  for($mins=0; $mins<60; $mins+=15)
                                  { 
                                  $time = str_pad($mins,2,'0',STR_PAD_LEFT);
                                   ?>
                                <li data-key="<?php echo $time;?>" class="" onclick="breaksetValue(<?php echo $time;?>,'changevalue6<?=$key?>','breakmm-<?=$key?>', <?php echo $key; ?>)"><?=sprintf("%02d", $time);?></li>
                                <?php
                                  }
                                  ?>
                              </ul>
                            </div>
                          </div>
                        </span>
                        <span>
                      </div>
                    </td>
                    <td>
                      <input type="hidden" id="totalval<?=$key?>" name="totalval[]" value="">
                      <span id="total<?=$key?>">00:00
                    </td>
                  </tr>
                  <?php } ?>
                  <tr>
                    <td class="align-left space">
                      Total Hours Worked
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                      <input type="hidden" name="uniqval" id="uniqval" value="<?php echo rand();?>">
                      <input type="hidden" name="totalvalue" id="totvaltime"><span id="totalvalue">00:00</span>
                    </td>
                  </tr>
                </table>
              </div>
              <div class="tbBtn">
                <div class="allbtn">
                  <input type="button" id="export-btn" class="btn disabl" onclick="getTechData(this.id)" value="Export CSV" disabled>
                  <input type="button" id="email-btn" class="btn" onclick="getTechDataemail(this.id)" value="Email">
                  <input type="button" id="print-btn" class="btn" onclick="window.print();" value="Print">
                  <input type="button" id="clearall-btn" class="btn" onclick="history.go(0)" value="Clear All">
                </div>
                <div class="social-share">
                  <div><span class="share"><span class="sharediv">Share<span></span></div>
                  <div class="social-icons">
                  <a href="https://twitter.com/intent/tweet?text=Free timesheet templates&amp;url=<?php echo SITE_URL; ?>/free-timesheet-templates/&amp;via=Vinove" target="_blank"><i class="icon1"></i></a>
                  <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo SITE_URL; ?>/free-timesheet-templates/" target="_blank"><i class="icon2"></i></a>
                  <a href="https://www.linkedin.com/shareArticle?mini=true&amp;url=<?php echo SITE_URL; ?>/free-timesheet-templates/&amp;title=Free timesheet templates" target="_blank" rel="noopener noreferrer">
                  <i class="icon3"></i></a>
                  </div>
                </div>
              </div>
            </div>
    </div>
    </form>
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
    <li><a href="#ans_1" class="active">1.   What do you mean by time cards?</a>
    </li>
    <li><a href="#ans_2" class="">2. How will you define time card calculators?</a>
    </li>
    <li><a href="#ans_3" class="">3. How do time card calculators work?</a>
    </li>
    <li><a href="#ans_4" class="">4. What are the benefits of using time card calculators?</a>
    </li>
    <li><a href="#ans_5" class="">5. Who uses time card calculators?</a>
    </li>
    <li><a href="#ans_6" class="">6. What should I consider before investing in any time card calculator?</a>
    </li>
    </ul>
    </div>
    <div class="buyers-guide-answer-part" id="buyers-guide-answer-part">
    <div class="buyers-guide-answer ans_1" id="ans_1">
    <h3 class="guide-question">1.  What do you mean by time cards?
    </h3>
    <div class="guide-answer">
    <p>It's a system that lets you keep track of how much time you've spent working on different projects or tasks throughout the day or week. It helps ensure that everyone is fairly compensated for their work based on how much time they've put in!
    </p>
    <p>The time logs are typically kept in Excel spreadsheets or other databases, but they might also be kept on paper if your company doesn't have any computerized system for tracking this kind of information yet.</p>
    </div>
    </div>
    <div class="buyers-guide-answer ans_2" id="ans_2">
    <h3 class="guide-question">2. How will you define time card calculators?
    </h3>
    <div class="guide-answer">
    <p> A time card calculator automates the process of tracking employee hours based on their time logs. It provides the simplest way to keep track of how many hours each employee has worked so that you can accurately calculate their wages at the end of each week.
    </p>
    </div>
    </div>
    <div class="buyers-guide-answer ans_3" id="ans_3">
    <h3 class="guide-question">3. How do time card calculators work?
    </h3>
    <div class="guide-answer">
    <p>You just have to enter the number of hours you've worked for a given date range, and you will get the total hours worked automatically—including how much money you should be getting paid based on those hours! 
    </p>
    <p>All you need to enter is how many hours per day or week you worked; after that, the calculator does all the heavy lifting for you!</p>
    </div>
    </div>
    <div class="buyers-guide-answer ans_4" id="ans_4">
    <h3 class="guide-question">4. What are the benefits of using time card calculators?
    </h3>
    <div class="guide-answer">
    <p>Some of the notable benefits of using time card calculators are given below-
    </p>
    <ul class="listype">
    <li>They ensure you're being paid fairly by tracking how much time you spend on each project.
    </li>
    <li>They help ensure that everyone gets the right amount of attention from their manager based on their performance.
    </li>
    <li>They make sure managers spend enough time on important/priority projects. 
    </li>
    <li>They ensure managers don't waste time doing administrative work, like entering data into spreadsheets or emailing employees about shift schedules.
    </li>
    <li>They ensure managers aren't discriminating against certain employees based on factors like race or gender—they provide objective numbers that everyone can see at a glance!
    </li>
    </ul>
    </div>
    </div>
    <div class="buyers-guide-answer ans_5" id="ans_5">
    <h3 class="guide-question">5. Who uses time card calculators?
    </h3>
    <div class="guide-answer">
    <p>Anyone can use time card calculators who want to know-
    </p>
    <ul class="listype">
    <li>How much they're being paid per hour.
    </li>
    <li>See how many hours they've worked in a day or week to track their progress toward a goal.
    </li>
    <li>Ensure they're being paid correctly for their work; some companies try to cheat their employees by keeping track of their hours to themselves and not giving them the correct information.
    </li>
    </ul>
    </div>
    </div>
    <div class="buyers-guide-answer ans_6" id="ans_6">
    <h3 class="guide-question">6. What should I consider before investing in any time card calculator?</h3>
    <div class="guide-answer">
    <p>If you are an employer you must check if it integrates with your payroll system so that all of your employees' timesheets can be easily uploaded and processed by HR. Also, ensure it has an easy user interface so that everyone on your team can use it without any training or help from IT or other departments.
    </p>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </section>
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
    <h3 itemprop="name">How do you calculate timesheet hours?
    </h3>
    <div class="faq-accordion-content">
    <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
    <div itemprop="text">
    <p>Workstatus will automatically calculate timesheet hours based on your time entries for every task or project.
    </p>
    </div>
    </div>
    </div>
    </div>
    <div class="faq-accordion-item-outer" itemscope itemprop="mainEntity"
      itemtype="https://schema.org/Question">
    <h3 itemprop="name">How can I add hours to my timesheet calculator?</h3>
    <div class="faq-accordion-content">
    <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
    <div itemprop="text">
    <p>An advanced <strong>time tracking software</strong> like Workstatus can automatically fetch employees’ time to give them a pre-filled timesheet for review.
    </p>
    </div>
    </div>
    </div>
    </div>
    <div class="faq-accordion-item-outer" itemscope itemprop="mainEntity"
      itemtype="https://schema.org/Question">
    <h3 itemprop="name">How can I calculate time card hours?</h3>
    <div class="faq-accordion-content">
    <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
    <div itemprop="text">
    <ul>
    <li>First, select the timesheet.</li>
    <li>Enter your start time, break duration, and end time in the time card.</li>
    <li>Get your total hours worked automatically.</li>
    <li>You can easily export CSV, email, or print your timesheet hours.</li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    <div class="faq-accordion-item-outer" itemscope itemprop="mainEntity"
      itemtype="https://schema.org/Question">
    <h3 itemprop="name">Can I generate an invoice from Workstatus?</h3>
    <div class="faq-accordion-content">
    <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
    <div itemprop="text">
    <p>Yes. Using its timesheet calculator, you can quickly generate and download invoices based on the total billable hours calculated by Workstatus.
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
    <source type="image/webp" srcset="../assests/images/useful-resources-blog-1.jpg">
    <source type="image/png" srcset="../assests/images/useful-resources-blog-1.jpg">
    <img loading="lazy" src="../assests/images/useful-resources-blog-1.jpg"
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
    <source type="image/webp" srcset="../assests/images/useful-resources-blog-2.jpg">
    <source type="image/png" srcset="../assests/images/useful-resources-blog-2.jpg">
    <img loading="lazy" src="../assests/images/useful-resources-blog-2.jpg"
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
    <source type="image/webp" srcset="../assests/images/useful-resources-blog-3.jpg">
    <source type="image/png" srcset="../assests/images/useful-resources-blog-3.jpg">
    <img loading="lazy" src="../assests/images/useful-resources-blog-3.jpg"
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
    <?php require_once '../common/workstatus-journey.php';?>
    </main>
    <?php require_once '../common/footer.php';?>
    </div>
    <?php if( !isMobile() ) : ?>
    <script src="../assests/js/glider.min.js"></script>
    <?php endif; ?>
    <script src="../assests/js/intlTelInput.js"></script>
    <script src="../assests/js/script.js"></script>
    <script src="../assests/js/time-calculate.js"></script>
  </body>
</html>
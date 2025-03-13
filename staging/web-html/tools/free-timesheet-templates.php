<?php 
  require_once '../common/inc/config.inc.php'; 
  $rpath = SITE_URL."/uploads/reports/";
  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="alternate" href="<?php echo SITE_URL; ?>/free-timesheet-templates" hreflang="en-us" />
    <link rel="shortcut icon" href="../assests/images/favicon.png" type="image/x-icon" />
    <link type="text/css" href="../assests/css/time-calculator.css" rel="preload stylesheet" as="style" />
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
        <section class="freetemp">
          <div class="container">
            <div class="top-content">
              <h1>Free timesheet templates</h1>
              <p>Get timesheet templates that report hours by week, month, or year. With Workstatus, choose, customize, and implement<br class="linebrk"> the perfect time card templates as per your business needs.</p>
              <picture class="temp-image">
                <source type="image/webp" srcset="../assests/images/timesheet-image.webp">
                <source type="image/png" srcset="../assests/images/timesheet-image.png">
                <img loading="lazy" src="../assests/images/timesheet-image.png" alt="monthly timesheet template" width="598" height="418">
              </picture>
            </div>
          </div>
        </section>
        <section class="tempRow">
          <div class="temp-content">
            <div class="container">
              <p>Logging your work hours can be a tedious process. With so many things to keep track of — from when your team worked to how much was spent — teams end up consuming too much time on preparing their timesheets.</p>
              <p>We’ve created daily, weekly, bi-weekly and monthly timesheet templates in PDF, Excel, Word and online Google formats that you can easily fill out as you work</p>
              <p>There is also a bonus project timesheet template.</p>
              <div class="timecalcuator p-0">
                <div class="tbBtn">
                <div class="social-share">
                  <div><span class="share"><span class="sharediv">Share<span></span></div>
                  <div class="social-icons">
                  <a href="https://twitter.com/intent/tweet?text=Free timesheet templates&amp;url=<?php echo SITE_URL; ?>/tools/free-timesheet-templates/&amp;via=Vinove" target="_blank"><i class="icon1"></i></a>
                  <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo SITE_URL; ?>/tools/free-timesheet-templates/" target="_blank"><i class="icon2"></i></a>
                    <a href="https://www.linkedin.com/shareArticle?mini=true&amp;url=<?php echo SITE_URL; ?>/tools/free-timesheet-templates/&amp;title=Free timesheet templates" target="_blank" rel="noopener noreferrer">
                    <i class="icon3"></i></a>
                  </div>
                </div>
                </div>
              </div>
            </div>
            <div class="temp-content">
              <div class="container">
                <h2>Free online timesheets for employees</h2>
                <div class="timerow">
                  <h3>1. Weekly timesheet</h3>
                  <p>Weekly timesheets are ideal for teams who are paid every week. This template is for when you are paying by the hour or require your team to meet a specific number of hours per week.</p>
                  <div class="dwnbtn">
                    <h4>Download</h4>
                    <a href="<?php echo $rpath; ?>Weekly Timesheet.pdf" class="btn">PDF</a>
                    <a href="<?php echo $rpath; ?>Weekly timesheet template - Workstatus.xlsx" class="btn">Excel</a>
                  </div>
                </div>
                <div class="timerow">
                  <h3>2. Monthly timesheet</h3>
                  <p>Use this template for team members who are working full-time. Monthly timesheets can give you a more detailed view of how your team uses their time over the course of a month. You can use these to understand their habits better and delegate tasks more effectively.</p>
                  <div class="dwnbtn">
                    <h4>Download</h4>
                    <a href="<?php echo $rpath; ?>Monthly timesheet.pdf" class="btn">PDF</a><a href="<?php echo $rpath; ?>Monthly timesheet - WS.xlsx" class="btn">Excel</a>
                  </div>
                </div>
                <div class="timerow">
                  <h3>3. Bi-weekly timesheet</h3>
                  <p>Bi-weekly timesheets are used if you’re paying your team on a specific day of the week every other week. This is different from bi-monthly pay periods, which are typically on the 15th and 30th of every month. If you’re paying bi-weekly, there are 26 pay periods in a year.</p>
                  <div class="dwnbtn">
                    <h4>Download</h4>
                    <a href="<?php echo $rpath; ?>Bi-weekly timesheet.pdf" class="btn">PDF</a><a href="<?php echo $rpath; ?>Bi-weekly timesheet template - Workstatus.xlsx" class="btn">Excel</a>
                  </div>
                </div>
                <div class="timerow">
                  <h3>4. Daily hourly timesheet</h3>
                  <p>Daily hourly timesheet templates give you a more detailed look into your team’s workflow. Use this template if you want to track how your team spends their time on different tasks as well as recurring items on their schedule that consume the most time.</p>
                  <div class="dwnbtn">
                    <h4>Download</h4>
                    <a href="<?php echo $rpath; ?>Daily hourly timesheet.pdf" class="btn">PDF</a><a href="<?php echo $rpath; ?>Daily hourly timesheet template -Workstatus.xlsx" class="btn">Excel</a>
                  </div>
                </div>
                <div class="timerow">
                  <h3>5. Project timesheet template</h3>
                  <p>Project timesheet templates should be used in line with your project management method for maximum effect. These timesheets can serve as a project dashboard where you can see the projects your team is working on, clients, and bill rates.</p>
                  <div class="dwnbtn">
                    <h4>Download</h4>
                    <a href="<?php echo $rpath; ?>Project timesheets.pdf" class="btn">PDF</a><a href="<?php echo $rpath; ?>Project timesheet template - Workstatus.xlsx" class="btn">Excel</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="temp-content">
            <div class="container">
              <h2>The challenges of using paper timesheets</h2>
              <div class="timerow2">
                <p>Using timesheet templates saves you time but they aren’t perfect. Here are some of the limitations you might have to accept if you go with this route.</p>
                <h3>1. Time reported isn’t always accurate</h3>
                <p>Timesheets involve a lot of estimating and rounding in terms of hours worked, which means that there’s always a possibility of discrepancies. Minutes that aren’t recorded properly on a daily basis can accumulate into hundreds of wasted hours (and lost revenue) every year.</p>
              </div>
              <div class="timerow2">
                <h3>2. Productivity is difficult to track</h3>
                <p>It’s hard to determine your team’s productivity based on the number of hours alone. You will need to cross-reference their timesheets with the status of each task they worked on to get an idea of how efficient they were. This is a waste of time in itself.</p>
              </div>
              <div class="timerow2">
                <h3>3. Organizing timesheets gets harder over time</h3>
                <p>Keeping your team’s timesheets organized is easy at first, but they can quickly pile up. If you ever need to revisit a timesheet, you will either need to do a lot of digging through computer files or a sea of papers.</p>
              </div>
              <div class="timerow2">
                <h3>4. There is still a lot of manual work involved</h3>
                <p>Reporting time isn’t the only purpose of timesheets. They also determine how much to pay your hourly team. Once your team has submitted their timesheets, you still have to manually check if the hours and calculations are correct. Then there’s the matter of processing the payments, which takes up additional time.</p>
              </div>
              <div class="timerow2">
                <h3>5. Mistakes will happen</h3>
                <p>Writing down hours after the fact will always involve inaccuracies to a degree, whether or not they are intentional. With that said, it’s better to automate the process using a timesheet software with time and productivity tracking capabilities.</p>
              </div>
            </div>
          </div>
          <div class="temp-content">
            <div class="container">
              <h2>There’s a better way to track your team’s timesheets</h2>
              <div class="timerow3">
                <p>When it comes down to it, there’s no easier and more accurate way to track your hours than using <a href="#">Workstatus”s timesheet app.</a></p>
                <p>This app helps you automate the timesheet process in a number of ways:</p>
                <ul>
                  <li>The desktop, web, and mobile timers are easy to start and stop for better accuracy</li>
                  <li>Project- and task-level tracking, with the option to add notes, create more detailed timesheets</li>
                  <li>Timesheet summaries with productivity stats are emailed out daily</li>
                  <li>Team members submit their timesheets at the end of each pay period with just one click</li>
                  <li>Built-in timesheet approvals streamline the review process so you’re confident time cards are correct</li>
                </ul>
                <picture class="temp-image">
                  <source type="image/webp" srcset="../assests/images/timeimage-1.webp">
                  <source type="image/png" srcset="../assests/images/timeimage-1.png">
                  <img loading="lazy" src="../assests/images/timeimage-1.png" alt="online timesheet template" width="806" height="524">
                </picture>
                <p>As you’re generating reports, you can save filters so the data you need the most is readily available.</p>
                <h3>3. Organizing timesheets gets harder over time</h3>
                <p>Once time is tracked, detailed timesheets are created and easy to review. You can dig into a detailed time report that looks at time and activity, time off requests, budgets, payroll, and more. Reports can be starred for easy access, and emailed to you on a regular basis so you’re always in the loop.</p>
                <p>As you’re generating reports, you can save filters so the data you need the most is readily available.</p>
                <picture class="temp-image">
                  <source type="image/webp" srcset="../assests/images/timeimage-2.webp">
                  <source type="image/png" srcset="../assests/images/timeimage-2.png">
                  <img loading="lazy" src="../assests/images/timeimage-2.png" alt="timesheet template printable" width="835" height="566">
                </picture>
                <h3>More than just a timesheet app</h3>
                <p>However, Workstatus is about more than just accurate, detailed timesheets. You can also automate payroll and send invoices to clients all from one easy-to-use app.Simply add bill and pay rates for each team member, and amounts will be automatically generated based on time tracked.</p>
              </div>
            </div>
          </div>
        </section>
        <section class="userguide post-animation">
          <div class="container">
            <div class="top-section">
              <h6><span class="bg-purple">User Guide</span></h6>
              <h2>Have you got questions? Here are the answers</h2>
            </div>
            <div class="buyers-guide-section" id="div-buyer-guide">
              <div class="buyers-guide">
                <div class="buyers-guide-question" id="buyers-guide-question">
                  <ul class="question-list">
                    <li><a href="#ans_1" class="active">1. What are timesheets?</a>
                    </li>
                    <li><a href="#ans_2" class="">2. How are the time sheets supposed to be used?</a>
                    </li>
                    <li><a href="#ans_3" class="">3. What are the Benefits of Timesheets?</a>
                    </li>
                    <li><a href="#ans_4" class="">4. How can I design my Timesheets with Workstatus?</a>
                    </li>
                    <li><a href="#ans_5" class="">5. Does Workstatus deliver something different in premium?</a>
                    </li>
                  </ul>
                </div>
                <div class="buyers-guide-answer-part" id="buyers-guide-answer-part">
                  <div class="buyers-guide-answer ans_1" id="ans_1">
                    <h3 class="guide-question">1. What are timesheets?
                    </h3>
                    <div class="guide-answer">
                      <p>Timesheets are a record of your work hours. You can use timesheets to keep track of how many hours you've been working each day and how much time you spent on each task. Both employers and employees use them, but they have different purposes in each case. 
                      </p>
                      <p>Employers create timesheets to track how many hours their employees work so that they can accurately calculate wages and make sure that payroll calculations are c+rrect and employees are being productive.</p>
                      <p>Employees use timesheets to accurately record the hours they've worked and keep themselves organized for every task.</p>
                    </div>
                  </div>
                  <div class="buyers-guide-answer ans_2" id="ans_2">
                    <h3 class="guide-question">2. How are the time sheets supposed to be used?
                    </h3>
                    <div class="guide-answer">
                      <p>The time sheets are meant to be used to track the time you spend on tasks. You can create a separate timesheet for each task and then enter the start and stop time and the break time. This will help you monitor how much productive time has been spent on each task and ensure that there is enough time left in your day to complete all of them. 
                      </p>
                    </div>
                  </div>
                  <div class="buyers-guide-answer ans_3" id="ans_3">
                    <h3 class="guide-question">3. What are the Benefits of Timesheets?
                    </h3>
                    <div class="guide-answer">
                      <p>Benefits of using timesheets include 
                      </p>
                      <ul class="listype">
                        <li>You can plan out your work schedule in advance,</li>
                        <li>Track time on projects with precision,</li>
                        <li>Estimate how much time is needed for tasks</li>
                        <li>Identify areas where you are spending too much time or too little,</li>
                        <li>Know which days of the week you're busiest.</li>
                      </ul>
                      <p>With such a comprehensive list of benefits, it's no wonder so many companies have switched to using timesheets instead of traditional time management systems for increased productivity, accuracy, and ease of use.</p>
                    </div>
                  </div>
                  <div class="buyers-guide-answer ans_4" id="ans_4">
                    <h3 class="guide-question">4. How can I design my Timesheets with Workstatus?
                    </h3>
                    <div class="guide-answer">
                      <ul class="listype">
                        <li> Start by going to your homepage and clicking on Timesheets in the left-hand navigation bar.
                        </li>
                        <li>Click Edit next to the team member you wish to create a timesheet for, and then click start time entry. </li>
                        <li> When you're done entering their hours for the day, click save. </li>
                        <li>Repeat this process until you have entered all schedules for your team member. </li>
                        <li>To complete the timesheet, just enter closed as the status at the top of the page, and then add comments if necessary. </li>
                        <li>Click publish when finished so others can view it. </li>
                        <li>Share it with your dedicated superior so they can approve it</li>
                      </ul>
                    </div>
                  </div>
                  <div class="buyers-guide-answer ans_5" id="ans_5">
                    <h3 class="guide-question">5. Does Workstatus deliver something different in premium?
                    </h3>
                    <div class="guide-answer">
                      <p>Workstatus's premium timesheet package includes unlimited employee time tracking, AI-powered payroll, multi-user accounts, and advanced reporting, whereas the free timesheet package is limited to 10 hours per week of tracked time. All of the features in the premium package offer significant advantages to help you get a more accurate overview of your company.
                      </p>
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
              <h2>What Workstatus™ Users Tell Us</h2>
            </div>
            <div class="glider-testimonial">
              <div class="glider-contain">
                <div class="glider2">
                  <div>
                    <p class="white">“ Workstatus employee time tracking tool tells us the moments our
                      people are being productive and uses that data to help us create productive
                      schedules, deadlines, and tasks. With a simple to use tool, we are able to make
                      our employees more productive while saving time we used to spend earlier. ”
                    </p>
                    <p class="white">“ We have further noticed that as a byproduct, our employees are
                      also motivated to work harder and smarter by taking control of their time by
                      having this app on their devices. ”
                    </p>
                    <div class="border">
                      <div class="triangle"> </div>
                    </div>
                    <div class="author-box">
                      <picture>
                        <source type="image/webp" srcset="../assests/images/avatar.webp">
                        <source type="image/png" srcset="../assests/images/avatar.png">
                        <img loading="lazy" src="../assests/images/avatar.png" alt="Peter" width="54"
                          height="54">
                      </picture>
                      <div class="author-content">
                        <p class="para_extrasmall white">Eric Genge, UK</p>
                      </div>
                    </div>
                  </div>
                  <div>
                    <p class="white">“ Glad that we moved to Workstatus and cut down on wasted time. We
                      are now clutter-free, more managed and relaxed. Our people have reported a
                      better work-life balance since we made the move. ”
                    </p>
                    <div class="border"><span class="element-triangle"></span></div>
                    <div class="author-box">
                      <picture>
                        <source type="image/webp" srcset="../assests/images/avatar.webp">
                        <source type="image/png" srcset="../assests/images/avatar.png">
                        <img loading="lazy" src="../assests/images/avatar.png" alt="Alex" width="54"
                          height="54">
                      </picture>
                      <div class="author-content">
                        <p class="para_extrasmall white">Berry Jonas, USA</p>
                      </div>
                    </div>
                  </div>
                  <div>
                    <p class="white">“ I was exhausted after working full days. I used to spend my
                      entire day running around like crazy trying to finish everything. But things
                      have changed since I made a shift to Workstatus time tracker. Coming home after
                      work with time to spend with family is great. And picture not dreading the next
                      day at work because I am less stressed and don't feel like there's too much on
                      my plate. ”
                    </p>
                    <div class="border"><span class="element-triangle"></span></div>
                    <div class="author-box">
                      <picture>
                        <source type="image/webp" srcset="../assests/images/avatar.webp">
                        <source type="image/png" srcset="../assests/images/avatar.png">
                        <img loading="lazy" src="../assests/images/avatar.png" alt="Larry" width="54"
                          height="54">
                      </picture>
                      <div class="author-content">
                        <p class="para_extrasmall white">Alaxandra Naogaokar, Israel</p>
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
                    <h3 itemprop="name">Can I edit my time entries?
                    </h3>
                    <div class="faq-accordion-content">
                      <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div itemprop="text">
                          <p>Yes, you can edit your time entries. If you need to update a time entry for any reason, simply click on the edit button. This will open up the details section for that particular time entry, where you can make changes as needed. 
                          </p>
                          <p>You can also change between day and hourly settings from this screen. Once done, save these edits before exiting, or your changes won't be saved. </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="faq-accordion-item-outer" itemscope itemprop="mainEntity"
                    itemtype="https://schema.org/Question">
                    <h3 itemprop="name">Can I use these templates on various platforms like google doc and so on </h3>
                    <div class="faq-accordion-content">
                      <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div itemprop="text">
                          <p>Yes, these templates can be used on Google Docs. You can also copy and paste them into a spreadsheet program like Excel or Numbers. 
                          </p>
                          <p>You can download these templates as PDFs or Word documents to use them on any platform (Mac, PC, tablet).</p>
                          <p>With the templates, you can create weekly timesheets for your employees to fill out with their work hours. Once you've collected all the data from your team members, you'll have everything you need to generate accurate reports in real-time. </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="faq-accordion-item-outer" itemscope itemprop="mainEntity"
                    itemtype="https://schema.org/Question">
                    <h3 itemprop="name">What information does the timesheet require?</h3>
                    <div class="faq-accordion-content">
                      <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div itemprop="text">
                          <p>Here are a few details you should add to timesheets 
                          </p>
                          <ul>
                            <li>An employee's name and login details</li>
                            <li>The project they are working on</li>
                            <li>The tasks they are doing or have done</li>
                            <li>How long it takes them to do it (duration)</li>
                            <li>When they did it (start and finish time) </li>
                            <li>What rate do you pay them per hour, per day, or week</li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="faq-accordion-item-outer" itemscope itemprop="mainEntity"
                    itemtype="https://schema.org/Question">
                    <h3 itemprop="name">How can you start using Workstatus timesheet templates?</h3>
                    <div class="faq-accordion-content">
                      <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div itemprop="text">
                          <p>Simply download one, and then you can customize it to suit your needs. To save time, use a pre-designed template. Alternatively, if you want to personalize your template, feel free to create your own by clicking the blank option at the top of the page. Our template editor is easy to use and has plenty of options that allow you to have exactly what you need. Creating a well-functioning timesheet is just a cakewalk..
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
        <?php require_once '../common/workstatus-journey.php';?>
      </main>
      <?php require_once '../common/footer.php';?>
    </div>
    <?php if( !isMobile() ) : ?>
    <script src="../assests/js/glider.min.js"></script>
    <?php endif; ?>
    <script src="../assests/js/intlTelInput.js"></script>
    <script src="../assests/js/script.js"></script>
    <script>
      function myFunction(id) {
      var element = document.getElementById(id);
      element.classList.toggle("open");
      }
    </script>
    <script>
      function setValue(data,id){
      // console.log(data);
      
      document.getElementById(id).innerHTML = data;
       
       setTotalValue(555,id)
      
      
      }
      function setTotalValue(data,totid){
        var lastChar = totid.substr(totid.length - 1); 
      // console.log(lastChar);
      var fid = "total"+lastChar;
      var f1 = document.getElementById('changevalue1'+lastChar).innerHTML;
      var f2 = document.getElementById('changevalue2'+lastChar).innerHTML;
      var f3 = document.getElementById('changevalue3'+lastChar).innerHTML;
      var f4 = document.getElementById('changevalue4'+lastChar).innerHTML;
      
      var f5 = document.getElementById('changevalue5'+lastChar).innerHTML;
      var f6 = document.getElementById('changevalue6'+lastChar).innerHTML;
      console.log(f2);
      var totalbreaks = f5+":"+f6+":00";
      var valuestart = f1+":"+f2+":00";
      var valuestop = f3+":"+f4+":00";
      ///////////////////////////////////////
      var hminute = parseInt(f1 * 60) + parseInt(f2);
      var hminuteend = parseInt(f3 * 60) + parseInt(f4);
      var breakhminute = parseInt(f5 * 60) + parseInt(f6);
      
      // alert(hminuteend);
      var hmdiff = (hminuteend - hminute) - breakhminute; 
      var diffmh = hmdiff/60;
      var diffmhminute = hmdiff%60;
      // alert(Math.floor(diffmh));
      //alert(diffmhminute);
      if(hmdiff<0){
      return false;
      }
      if(hmdiff<0 && hminuteend>0){
      alert('End Time should be greater than start date');
      return false;
      }
      document.getElementById('totalval'+lastChar).value = hmdiff;
      ///////////////////////////////////
      //create date format          
      var timeStart = new Date("01/01/2007 " + valuestart).getHours();
      var timeEnd = new Date("01/01/2007 " + valuestop).getHours();
      var mStart = new Date("01/01/2007 " + valuestart).getMinutes();
      var mEnd = new Date("01/01/2007 " + valuestop).getMinutes();
      var bm = new Date("01/01/2007 " + totalbreaks).getMinutes();
      var bh = new Date("01/01/2007 " + totalbreaks).getHours();
      
      var minutes = mEnd - mStart; 
      var hourDiff = timeEnd - timeStart;
      var fh = hourDiff - bh;
      var fm = minutes - bm;
      //var diff = hourDiff+":"+minutes;
      ////////
      
      ///////////////////////////////////
      // var diff = fh+":"+fm;
      var diff = Math.floor(diffmh)+":"+Math.floor(diffmhminute);
      
      //console.log(hourDiff);
      
      document.getElementById(fid).innerHTML = diff;
      var tot = 0;
      for(var j = 0; j<7; j++){
       
        tot = tot + parseInt(document.getElementById('totalval'+j).value);
        //alert(tot);
      }
      var diffmh1 = tot/60;
      var diffmhminute1 = tot%60;
      document.getElementById('totalvalue').innerHTML = Math.floor(diffmh1)+":"+Math.floor(diffmhminute1);
      
      }
    </script>
  </body>
</html>
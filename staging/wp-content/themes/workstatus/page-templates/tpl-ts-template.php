<?php 
/* 
Template Name: Free Timesheet Templates
Author : Nitin Baluni
*/ 
get_header();
global $ws_ctas, $RegLink, $LogLink;
$rpath = "https://workstatus.io/uploads/reports/";
?>
<main class="site__content">
        <section class="freetemp">
          <div class="container">
            <div class="top-content">
                <?php 
                    while(have_posts()) : the_post(); 
                        the_content();
                    endwhile;
                    $bannerThumb = get_field('tbanner-thumb');
                    if( $bannerThumb ){
                        echo pxlGetPtag($bannerThumb, 'Free Timesheet Templates', 'temp-image');
                    }
                ?>
            </div>
          </div>
        </section>
        <section class="tempRow">
          <div class="temp-content">
            <div class="container">              
              <?php the_field('ts-description'); ?>
              <div class="timecalcuator p-0">
                <div class="tbBtn">
                <div class="social-share">
                  <div><span class="share"><span class="sharediv">Share<span></span></div>
                  <div class="social-icons">
                  <a href="https://twitter.com/intent/tweet?text=Free timesheet templates&url=<?php the_permalink(); ?>&via=Vinove" target="_blank"><i class="icon1"></i></a>
                  <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" target="_blank"><i class="icon2"></i></a>
                  <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>&title=Free timesheet templates" target="_blank" rel="noopener noreferrer">
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
                    <a href="<?php echo $rpath; ?>Monthly timesheet.pdf" class="btn">PDF</a>
                    <a href="<?php echo $rpath; ?>Monthly timesheet - WS.xlsx" class="btn">Excel</a>
                  </div>
                </div>
                <div class="timerow">
                  <h3>3. Bi-weekly timesheet</h3>
                  <p>Bi-weekly timesheets are used if you’re paying your team on a specific day of the week every other week. This is different from bi-monthly pay periods, which are typically on the 15th and 30th of every month. If you’re paying bi-weekly, there are 26 pay periods in a year.</p>
                  <div class="dwnbtn">
                    <h4>Download</h4>
                    <a href="<?php echo $rpath; ?>Bi-weekly timesheet.pdf" class="btn">PDF</a>
                    <a href="<?php echo $rpath; ?>Bi-weekly timesheet template - Workstatus.xlsx" class="btn">Excel</a>
                  </div>
                </div>
                <div class="timerow">
                  <h3>4. Daily hourly timesheet</h3>
                  <p>Daily hourly timesheet templates give you a more detailed look into your team’s workflow. Use this template if you want to track how your team spends their time on different tasks as well as recurring items on their schedule that consume the most time.</p>
                  <div class="dwnbtn">
                    <h4>Download</h4>
                    <a href="<?php echo $rpath; ?>Daily hourly timesheet.pdf" class="btn">PDF</a>
                    <a href="<?php echo $rpath; ?>Daily hourly timesheet template -Workstatus.xlsx" class="btn">Excel</a>
                  </div>
                </div>
                <div class="timerow">
                  <h3>5. Project timesheet template</h3>
                  <p>Project timesheet templates should be used in line with your project management method for maximum effect. These timesheets can serve as a project dashboard where you can see the projects your team is working on, clients, and bill rates.</p>
                  <div class="dwnbtn">
                    <h4>Download</h4>
                    <a href="<?php echo $rpath; ?>Project timesheets.pdf" class="btn">PDF</a>
                    <a href="<?php echo $rpath; ?>Project timesheet template - Workstatus.xlsx" class="btn">Excel</a>
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
                  <source type="image/webp" srcset="<?php bloginfo('template_url'); ?>/assests/images/timeimage-1.webp">
                  <source type="image/png" srcset="<?php bloginfo('template_url'); ?>/assests/images/timeimage-1.png">
                  <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/images/timeimage-1.png" alt="online timesheet template" width="806" height="524">
                </picture>
                <p>As you’re generating reports, you can save filters so the data you need the most is readily available.</p>
                <h3>3. Organizing timesheets gets harder over time</h3>
                <p>Once time is tracked, detailed timesheets are created and easy to review. You can dig into a detailed time report that looks at time and activity, time off requests, budgets, payroll, and more. Reports can be starred for easy access, and emailed to you on a regular basis so you’re always in the loop.</p>
                <p>As you’re generating reports, you can save filters so the data you need the most is readily available.</p>
                <picture class="temp-image">
                  <source type="image/webp" srcset="<?php bloginfo('template_url'); ?>/assests/images/timeimage-2.webp">
                  <source type="image/png" srcset="<?php bloginfo('template_url'); ?>/assests/images/timeimage-2.png">
                  <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/images/timeimage-2.png" alt="timesheet template printable" width="835" height="566">
                </picture>
                <h3>More than just a timesheet app</h3>
                <p>However, Workstatus is about more than just accurate, detailed timesheets. You can also automate payroll and send invoices to clients all from one easy-to-use app.Simply add bill and pay rates for each team member, and amounts will be automatically generated based on time tracked.</p>
              </div>
            </div>
          </div>
        </section>

        <?php  
		$user_guide_section = get_field('user_guide_section');		
		if( $user_guide_section ) :
		$isEnable = $user_guide_section['is_enabled'];
		if( $isEnable == "yes" ){ 
		?>
        <section class="userguide post-animation">
          <div class="container">
            <div class="top-section">
              <h6><span class="bg-purple">User Guide</span></h6>
              <h2>Have Queries? We Have Answers</h2>
            </div>
            <div class="buyers-guide-section" id="div-buyer-guide">
              <div class="buyers-guide">
                <div class="buyers-guide-question" id="buyers-guide-question">
                  <ul class="question-list">
				  <?php 
					if( $user_guide_section['question_answer_repeater'] ){  $i = 1;
					foreach( $user_guide_section['question_answer_repeater'] as $row ) {

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
					foreach( $user_guide_section['question_answer_repeater'] as $row ){
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
		<?php } 
        endif;
        
        if( !isMobile() ) : ?>
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
                        <source type="image/webp" srcset="<?php bloginfo('template_url'); ?>/assests/images/avatar.webp">
                        <source type="image/png" srcset="<?php bloginfo('template_url'); ?>/assests/images/avatar.png">
                        <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/images/avatar.png" alt="Peter" width="54"
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
                        <source type="image/webp" srcset="<?php bloginfo('template_url'); ?>/assests/images/avatar.webp">
                        <source type="image/png" srcset="<?php bloginfo('template_url'); ?>/assests/images/avatar.png">
                        <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/images/avatar.png" alt="Alex" width="54"
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
                        <source type="image/webp" srcset="<?php bloginfo('template_url'); ?>/assests/images/avatar.webp">
                        <source type="image/png" srcset="<?php bloginfo('template_url'); ?>/assests/images/avatar.png">
                        <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/images/avatar.png" alt="Larry" width="54"
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
        <?php 
        endif;
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
        <?php require_once get_template_directory() .'/common/workstatus-journey.php'; ?>
      </main>
<?php get_footer(); ?>      
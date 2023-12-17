<?php 
/* 
Template Name: Time Card Calculator
Author : Nitin Baluni
*/ 
get_header();
global $ws_ctas, $RegLink, $LogLink;
?>
<main class="site__content">
<section class="timecalcuator" id="printid">
          <form method="post" name="formtime" id="formtime" class="formtime">
            <div class="container">
              <div class="top-content">
                <?php 
                while(have_posts()) : the_post(); 
                the_content();
                endwhile;
                ?>                
              </div>
              <div class="form-wrapper">
                  <div class="frm-input">
                    <div class="form-group">
                        <label>Name*</label>
                        <input type="text" id="ft-name" class="tc-name" placeholder="Enter your name" name="fname" maxlength="30">
                        <span class="error"></span>
                    </div>
                    <div class="form-group">
                        <label>Email*</label>
                        <input type="text" id="ft-email" placeholder="Enter your email" name="email" maxlength="60">
                        <span class="error"></span>
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
                  <input type="button" id="export-btn" class="btn disabl" onclick="getTechData(this.id)" value="Export CSV">
                  <input type="button" id="email-btn" class="btn" onclick="getTechDataemail(this.id)" value="Email">
                  <input type="button" id="print-btn" class="btn" onclick="ws_printp()" value="Print">
                  <input type="button" id="clearall-btn" class="btn" onclick="history.go(0)" value="Clear All">
                </div>
                <div class="social-share">
                  <div><span class="share"><span class="sharediv">Share<span></span></div>
                  <div class="social-icons">
                  <a href="https://twitter.com/intent/tweet?text=Free timesheet templates&amp;url=<?php the_permalink(); ?>&via=Vinove" target="_blank"><i class="icon1"></i></a>
                  <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" target="_blank"><i class="icon2"></i></a>
                  <a href="https://www.linkedin.com/shareArticle?mini=true&amp;url=<?php the_permalink(); ?>&title=Free timesheet templates" target="_blank" rel="noopener noreferrer">
                  <i class="icon3"></i></a>
                  </div>
                </div>
              </div>
            </div>
    </div>
    </form>
    </section>
    
        <?php  
		$user_guide_section = get_field('user_guide_section');		
		if( $user_guide_section ) :
		$isEnable = $user_guide_section['is_enabled'];
		if( $isEnable == "yes" ){ 
		?>
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
				  <?php 
					if( $user_guide_section['question_answer_repeater'] ){  $i = 1;
					foreach( $user_guide_section['question_answer_repeater'] as $row ) {
						$image      = $row['image_'];
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
					foreach( $user_guide_section['question_answer_repeater'] as $row ) {
						$image      = $row['image_'];
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
						$image      = $row['image_'];
						//$active = ($i==1) ? "open" : "";
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

    <?php 
    require_once get_template_directory() .'/common/blog.php';
    ?>
    <?php require_once get_template_directory() .'/common/workstatus-journey.php'; ?>
</main>
<?php get_footer(); ?>      
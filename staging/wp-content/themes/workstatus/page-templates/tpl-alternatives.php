<?php 
/* 
Template Name: Alternatives Template
Author : Nitin Baluni
*/ 
get_header();
?>
<main class="site__content">
<section class="hero-banner">
<div class="container">
<div class="inner-wrap">
  <?php the_content(); ?>
  <div class="alter-image">
  	<?php 
  	$inbanner = get_field('ws-banner');
  	if( isset($inbanner['comp-logo']) && !empty($inbanner['comp-logo']) ){
  	echo pxlGetPtag($inbanner['comp-logo']);	
  	}
  	?>    
  </div>
</div>
</div>
</section>
<!-- Place For Table only -->
<?php 
$compCol = get_field('Comp-table');
if( isset($compCol['required']) && ($compCol['required'] == "yes") ) :
$tbl = $compCol['cards'];  
?>
<section class="table-tab padding-b-120">
<div class="container">
<div class="top-section"><?php echo $compCol['content'] ?></div>
<div class="tab-wrap">
  <div class="tab-row">
		<nav id="tabs" class="tab-nav">
			<ul>
				<li class="active"><a href="#tb-time" title="Time Tracking">
				<span class="icon">
				<img class="show" loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/tb01.svg" alt="Icon" width="16" height="18">
				<img class="hide" loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/tb01-hover.svg" alt="Icon" width="16" height="18">
				</span>Time Tracking</a>
				</li>
				<li><a href="#tb-productivity" title="Productivity Management">
				<span class="icon">
				<img class="show" loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/tb02.svg" alt="Icon" width="16" height="18">
				<img class="hide" loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/tb02-hover.svg" alt="Icon" width="16" height="18">
				</span>Productivity Management</a>
				</li>
				<li><a href="#tb-project" title="Project Management">
				<span class="icon">
				<img class="show" loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/tb05.svg" alt="Icon" width="16" height="18">
				<img class="hide" loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/tb05-hover.svg" alt="Icon" width="16" height="18">
				</span>Project  Management</a>
				</li>
				<li><a href="#tb-attendance" title="Attendance Management">
				<span class="icon">
				<img class="show" loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/tb04.svg" alt="Icon" width="16" height="18">
				<img class="hide" loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/tb04-hover.svg" alt="Icon" width="16" height="18">
				</span>Attendance Management</a>
				</li>
			</ul>
		</nav>
    <div id="tab-contents" class="tcontents">
        <div class="numeric-table show-all" id="compare-table">
          <div class="scroll-compare">
            <div class="table-block">
              <div class="div-block-top">
                <div class="logo-ws logovs" >
                  <h2 id="comp-cat-title">Time Tracking</h2>
                </div>
                <div class="logo-tb logovs">
                  <picture>
                    <img class="desktop" loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/numlogo-01.svg"
                      alt="logo" width="194" height="36">
                  </picture>
                </div>
								<div class="logo-tb logovs">
								<?php 
								if( isset($compCol['t1-logo']) && !empty($compCol['t1-logo']) ){
								echo '<picture><img class="desktop" loading="lazy" src="'.$compCol['t1-logo']['url'].'" 
								alt="'.$compCol['t1-logo']['alt'].'" 
								width="'.$compCol['t1-logo']['width'].'" height="'.$compCol['t1-logo']['height'].'"></picture>';
								}
								?>	                  
								</div>
								<div class="logo-tb logovs">
								<?php 
								if( isset($compCol['t2-logo']) && !empty($compCol['t2-logo']) ){
								echo '<picture><img class="desktop" loading="lazy" src="'.$compCol['t2-logo']['url'].'" 
								alt="'.$compCol['t2-logo']['alt'].'" 
								width="'.$compCol['t2-logo']['width'].'" height="'.$compCol['t2-logo']['height'].'"></picture>';
								}
								?>
								</div>
								<div class="logo-tb logovs">
								<?php 
								if( isset($compCol['t3-logo']) && !empty($compCol['t3-logo']) ){
								echo '<picture><img class="desktop" loading="lazy" src="'.$compCol['t3-logo']['url'].'" 
								alt="'.$compCol['t3-logo']['alt'].'" 
								width="'.$compCol['t3-logo']['width'].'" height="'.$compCol['t3-logo']['height'].'"></picture>';
								}
								?>                  
								</div>
								<div class="logo-tb logovs">
								<?php 
								if( isset($compCol['t4-logo']) && !empty($compCol['t4-logo']) ){
								echo '<picture><img class="desktop" loading="lazy" src="'.$compCol['t4-logo']['url'].'" 
								alt="'.$compCol['t4-logo']['alt'].'" 
								width="'.$compCol['t4-logo']['width'].'" height="'.$compCol['t4-logo']['height'].'"></picture>';
								}
								?>
								</div>                
              </div>
              <div class="tab-contents active" id="tb-time"><?php echo getAlternateData($tbl, 'time'); ?></div>
              <div class="tab-contents" id="tb-productivity"><?php echo getAlternateData($tbl, 'productivity'); ?></div>
              <div class="tab-contents" id="tb-project"><?php echo getAlternateData($tbl, 'project'); ?></div>
              <div class="tab-contents" id="tb-attendance"><?php echo getAlternateData($tbl, 'attendance'); ?></div>

              <div class="table-row price-table-row" id="ws-pricing-row"><?php echo getAlternatePricing( $compCol ); ?></div>

              <div class="table-row numeric-row">
                <div class="ws-column ws-lftcolumn">
                  <p><strong>Calculative Comparison</strong></p>
                  <div class="custom-input">
                    <input type="number" id="alt-qty" value="10" min="1">
                    <div class="custom-buttons">
                      <button class="up" onclick="document.getElementById('alt-qty').stepUp();updateCalcEvt(document.getElementById('alt-qty').value);"><img loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/ar01.svg" alt="Workstatus" width="13" height="8"></button>
                      <button class="down" onclick="document.getElementById('alt-qty').stepDown();updateCalcEvt(document.getElementById('alt-qty').value);"><img loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/ar02.svg" alt="Workstatus" width="13" height="8"></button>
                    </div>
                  </div>
                </div>
                <?php echo getAltPricingCalc($compCol); ?>
              </div>
            </div>
            <div class="view-more margin-t-50 text-center">
              <a href="javascript:void(0);" onclick="_morecompTable();" class="active">
              <img loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/scroll-img2.svg" alt="Workstatus" width="50" height="50">
              </a>
            </div>
          </div>
        </div>
    </div>
  </div>
</div>

<div class="actionBtn">
  <div><a data-href="https://app.workstatus.io/auth/register/?pid=42&amp;type=monthly" href="javascript:void(0);" class="primary_btn1" onclick="return get_ws_signupform(this);">Start Free Trial</a>
    <small>No credit card required</small>
  </div>
  <div><a href="javascript:void(0)" onclick="call_demows();" class="primary_btn2 formbtn">Book A Demo</a>
    <small>Get queries answered from experts</small>
  </div>
</div>
</div>
</section>
<?php endif; ?>

<?php 
$driv = get_field('data-driven');
if( isset($driv['required']) && ($driv['required'] == "yes") ){
	echo '<section class="alter-section padding-0">
	<div class="container">
	<div class="top-section">
	  <h6><span class="bg-purple">'.$driv['title'].'</span></h6>
	  '.$driv['content'].'
	</div>
	<div class="data-flow">'.pxlGetPtag($driv['image']).'</div>
	</div>
	</section>';
}

$compFt = get_field('comp-ft');
if( isset($compFt['is_enabled']) && $compFt['is_enabled'] == "yes" ){
echo '<section class="alternative-section">';
if( $compFt['cards'] ){
	foreach ($compFt['cards'] as $row){
		echo ' <div class="alternative-wrapper  padding-t-120 padding-b-120">
		<div class="container">
		<div class="top-section text-center">
		<h6><span class="bg-purple">'.$row['title'].'</span></h6>
		'.$row['content'].'
		</div>
		<div class="feature-loop">
		<div class="feature-row">
		  <div class="column-left">'.pxlGetPtag($row['image']).'</div>
		  <div class="column-right">
		    <div class="text-column no-evt listing">'.$row['pros'].'</div>
		    <div class="text-column no-evt listing">'.$row['cons'].'</div>		    
		    <div class="text-column no-evt ">
		      <a href="#" class="prplan">
		      <span class="spn-ind">'.$row['pr-inr'].'</span>
		      <span class="spn-intr">'.$row['pr-int'].'</span>
		      </a>
		    </div>
		  </div>
		</div>
		</div>
		</div>
		</div>';
	}
}
echo '</section>';
}
?>
<?php 
$whyWs = get_field('why-ws');
if( isset($whyWs['required']) && ($whyWs['required'] == "yes") ){
	get_template_part('common/cmn', 'whyws', ['title' => $whyWs['title'], 'body' => $whyWs['content'], 'pointers' => $whyWs['pointers']  ]); 	
}
?>
<?php get_template_part('common/cmn', 'workplaces', ['elm-class' => 'workplace-section bg-blue padding-t-120 padding-b-120' ]); ?>

<?php  
$user_guide_section = get_field('user_guide_section');
if( isset( $user_guide_section['is_enabled'] ) && ($user_guide_section['is_enabled'] == "yes") ){ 
?>
<section class="userguide">
  <div class="container">
    <div class="top-section">
      <h6><span class="bg-purple"><?php echo $user_guide_section['heading']; ?></span></h6>
      <?php echo $user_guide_section['sub_heading']; ?>
    </div>
    <div class="buyers-guide-section" id="div-buyer-guide">
      <div class="buyers-guide">
        <div class="buyers-guide-question" id="buyers-guide-question">
          <ul class="question-list">
            <?php 
            if( $user_guide_section['qna'] ){  $i = 1;
            foreach( $user_guide_section['qna'] as $row ) {
            $active = ($i==1) ? "active" : "";
            ?>
            <li><a href="#ans_<?php echo $i; ?>" class="<?php echo $active; ?>"><?php echo $row['question']; ?></a>
            </li>
            <?php $i++; } } ?>
          </ul>
        </div>
        <div class="buyers-guide-answer-part" id="buyers-guide-answer-part">
        <?php 
        if( $user_guide_section['qna'] ){  $i = 1;
        foreach( $user_guide_section['qna'] as $row ) {
        $active = ($i==1) ? "active" : "";
        ?>
        <div class="buyers-guide-answer ans_<?php echo $i; ?>" id="ans_<?php echo $i; ?>">
        <h3 class="guide-question"><?php echo $row['question']; ?></h3>
        <div class="guide-answer"><?php echo $row['answer']; ?></div>
        </div>
        <?php $i++; } } ?>                  
        </div>
      </div>
    </div>
  </div>
</section>
<?php } ?>

<?php  
$faq = get_field('faq');
if( isset($faq['is_enabled']) && ($faq['is_enabled'] == "yes") ) :
?>
<section class="faqsRow wfull for-heading-center padding-t-120 padding-b-120">
   <div class="container">
      <div class="top-section">
         <h6><span class="bg-purple"><?php echo $faq['heading']; ?></span></h6>
         <h2><?php echo $faq['sub_heading']; ?></h2>
      </div>
      <div class="flex_row">
         <div itemscope itemtype="https://schema.org/FAQPage">
            <div class="column">
              <?php 
              if( $faq['question_answer_repeater'] ){  
              $i = 1;
              foreach( $faq['question_answer_repeater'] as $row ) {
              $active = ($i <= 3) ? "open" : "";
              ?>
              <div class="faq-accordion-item-outer <?php echo $active; ?>" itemscope itemprop="mainEntity"
              itemtype="https://schema.org/Question">
              <h3 itemprop="name"><?php echo $row['question'];?></h3>
              <div class="faq-accordion-content">
              <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
              <div itemprop="text"><?php echo $row['answer'];?></div>
              </div>
              </div>
              </div>
               <?php $i++; } } ?>
            </div>
         </div>
      </div>
   </div>
</section>
<?php endif; ?>
<?php get_template_part('common/cmn', 'testimonial'); ?>
  <?php get_template_part('common/cmn', 'globalrating'); ?>
  <?php get_template_part('common/cmn', 'journey'); ?>
</main>
<?php get_footer(); ?>
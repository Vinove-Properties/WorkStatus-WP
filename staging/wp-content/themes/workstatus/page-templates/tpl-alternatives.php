<?php 
/* 
Template Name: Alternatives Template
Author : Nitin Baluni
*/ 
$tplType    = get_field('tpl-type');
$isCompTpl  = ( $tplType && ($tplType === "comp") ) ? true : false;
get_header();
?>
<main class="site__content <?php echo ( $isCompTpl === true ) ? "ws-comp-template" : ""; ?>">
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
if (isset($compCol['required']) && ($compCol['required'] == "yes")) :
    $tbl = $compCol['cards'];  
?>
<section class="table-tab padding-b-120">
    <div class="container">
        <div class="top-section">
            <?php echo $compCol['content']; ?>
        </div>
        <div class="tab-wrap">
            <div class="tab-row">
                <nav id="tabs" class="tab-nav">
                    <ul>
                        <li class="active">
                            <a href="#tb-time" title="Time Tracking">
                                <span class="icon">
                                    <img class="show" loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/tb01.svg" alt="Icon" width="16" height="18">
                                    <img class="hide" loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/tb01-hover.svg" alt="Icon" width="16" height="18">
                                </span>Time Tracking
                            </a>
                        </li>
                        <li>
                            <a href="#tb-productivity" title="Productivity Management">
                                <span class="icon">
                                    <img class="show" loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/tb02.svg" alt="Icon" width="16" height="18">
                                    <img class="hide" loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/tb02-hover.svg" alt="Icon" width="16" height="18">
                                </span>Productivity Management
                            </a>
                        </li>
                        <li>
                            <a href="#tb-project" title="Project Management">
                                <span class="icon">
                                    <img class="show" loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/tb05.svg" alt="Icon" width="16" height="18">
                                    <img class="hide" loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/tb05-hover.svg" alt="Icon" width="16" height="18">
                                </span>Project Management
                            </a>
                        </li>
                        <li>
                            <a href="#tb-attendance" title="Attendance Management">
                                <span class="icon">
                                    <img class="show" loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/tb04.svg" alt="Icon" width="16" height="18">
                                    <img class="hide" loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/tb04-hover.svg" alt="Icon" width="16" height="18">
                                </span>Attendance Management
                            </a>
                        </li>
                    </ul>
                </nav>
                <div id="tab-contents" class="tcontents">
                    <div class="numeric-table show-all" id="compare-table">
                        <div class="scroll-compare">
                            <div class="table-block">
                                <div class="div-block-top">
                                    <div class="logo-ws logovs">
                                        <h2 id="comp-cat-title">Time Tracking</h2>
                                    </div>
                                    <div class="logo-tb logovs">
                                        <picture>
                                            <img class="desktop" loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/numlogo-01.svg" alt="logo" width="194" height="36">
                                        </picture>
                                    </div>
                                    <?php 
                                    for ($i = 1; $i <= 4; $i++) {
                                        if (isset($compCol['t' . $i . '-logo']) && !empty($compCol['t' . $i . '-logo'])) {
                                            echo '<div class="logo-tb logovs">';
                                            echo '<picture><img class="desktop" loading="lazy" src="' . $compCol['t' . $i . '-logo']['url'] . '" 
                                                alt="' . $compCol['t' . $i . '-logo']['alt'] . '" 
                                                width="' . $compCol['t' . $i . '-logo']['width'] . '" 
                                                height="' . $compCol['t' . $i . '-logo']['height'] . '"></picture>';
                                            echo '</div>';
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="tab-contents active" id="tb-time"><?php echo getAlternateData($tbl, 'time'); ?></div>
                                <div class="tab-contents" id="tb-productivity"><?php echo getAlternateData($tbl, 'productivity'); ?></div>
                                <div class="tab-contents" id="tb-project"><?php echo getAlternateData($tbl, 'project'); ?></div>
                                <div class="tab-contents" id="tb-attendance"><?php echo getAlternateData($tbl, 'attendance'); ?></div>
                                <div class="table-row price-table-row" id="ws-pricing-row">
                                    <?php echo getAlternatePricing($compCol); ?>
                                </div>
                                <div class="table-row numeric-row">
                                    <div class="ws-column ws-lftcolumn">
                                        <p><strong>Calculative Comparison</strong></p>
                                        <div class="custom-input">
                                            <input type="number" id="alt-qty" value="10" min="1">
                                            <div class="custom-buttons">
                                                <button class="up" onclick="document.getElementById('alt-qty').stepUp();updateCalcEvt(document.getElementById('alt-qty').value);">
                                                    <img loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/ar01.svg" alt="Workstatus" width="13" height="8">
                                                </button>
                                                <button class="down" onclick="document.getElementById('alt-qty').stepDown();updateCalcEvt(document.getElementById('alt-qty').value);">
                                                    <img loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/ar02.svg" alt="Workstatus" width="13" height="8">
                                                </button>
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
        <div style="text-align: center; margin-top: 80px;">
            <?php echo isset($compCol['cta']) && !empty($compCol['cta']) ? $compCol['cta'] : '<h2>See Why 1000+ Businesses Switched to Workstatus!</h2><p>Project visibility, Organized Tasks, More Profit</p>'; ?>
        </div>
        <div class="actionBtn" style="margin-top: 40px;">
            <?php echo cmnBannerCta(); ?>
        </div>
    </div>
</section>
<?php endif; ?>


<?php 
$dataDrive = get_field('data-driven');
if( isset( $dataDrive['required'] ) && ($dataDrive['required'] == "yes") ) :
?>
<section class="data-driving">
<div class="container">
  <div class="top-section">
    <h6><span class="bg-purple"><?php echo $dataDrive['title']; ?></span></h6>
    <?php echo $dataDrive['content']; ?>
  </div>
  <div class="data-flex">
    <div class="column challenges">
      <div class="head-data">       
        <h3><?php echo $dataDrive['lt-title']; ?></h3>
      </div>
      <?php echo $dataDrive['lt-content']; ?>
    </div>
    <div class="column analyze">
      <div class="analyze-button">
        <div class="play-icon">
        	<img loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/center-image.svg" alt="play" width="270" height="270">
        </div>
      </div>
    </div>
    <div class="column solutions">
      <div class="head-data">
        <h3><?php echo $dataDrive['rt-title']; ?></h3>
      </div>
      <?php echo $dataDrive['rt-content']; ?>
    </div>
  </div>
</div>
</section>
<?php endif; ?>

<?php 
$compFt = get_field('comp-ft');
if( isset($compFt['is_enabled']) && $compFt['is_enabled'] == "yes" ){
echo '<section class="alternative-section">';
if( $compFt['cards'] ){
    $ft = 0;
	foreach ($compFt['cards'] as $row){ $ft++;
        $elmClass = ( $ft == 1 ) ? "alt-blue" : "";
        $strPricing = "";
        if( $isCompTpl === false ){
        $strPricing = '<div class="text-column no-evt ">
        <a href="javascript:void(0);" class="prplan">
        <span class="spn-ind">'.$row['pr-inr'].'</span>
        <span class="spn-intr">'.$row['pr-int'].'</span>
        </a>
        </div>';
        }
		echo '<div class="alternative-wrapper padding-t-120 padding-b-120 '.$elmClass.'" id="alter-elm-'.$ft.'">
		<div class="container">
		<div class="top-section text-center">'.$row['content'].'</div>
		<div class="feature-loop">
		<div class="feature-row">
		  <div class="column-left">'.pxlGetPtag($row['image']).'</div>
		  <div class="column-right">
		    <div class="text-column no-evt listing">'.comprTpl_Literals($row['pros']).'</div>
		    <div class="text-column no-evt listing">'.comprTpl_Literals($row['cons']).'</div>		    
		    '.$strPricing.'
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
<section class="userguide padding-t-120">
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
            <li><a href="#ans_<?php echo $i; ?>" class="<?php echo $active; ?>">
              <?php echo $row['question']; ?></a>
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
        <?php /*<h3 class="guide-question"><?php echo $row['question']; ?></h3>*/ ?>
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
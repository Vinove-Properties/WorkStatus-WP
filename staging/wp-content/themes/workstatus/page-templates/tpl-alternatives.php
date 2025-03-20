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
<section class="table-tab padding-b-120">
<div class="container">
<div class="top-section">
  <h2>Comparison Table</h2>
  <p>Achieve valuable insights with AI dashboards, productivity reports, and location analytics.</p>
</div>
<div class="tab-wrap">
  <div class="tab-row">
    <nav id="tabs" class="tab-nav">
      <ul>
		<li class="active"><a href="#tb-time">
		<span class="icon">
		<img class="show" loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/tb01.svg" alt="Icon" width="16" height="18">
		<img class="hide"  loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/tb01-hover.svg" alt="Icon" width="16" height="18">
		</span>
		Time Tracking</a>
		</li>

		<li><a href="#tb-productivity">
		<span class="icon">
		<img class="show"  loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/tb02.svg" alt="Icon" width="16" height="18">
		<img class="hide"  loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/tb02-hover.svg" alt="Icon" width="16" height="18">
		</span>Productivity Management</a>
		</li>
		<li><a href="#tb-project">
		<span class="icon">
		<img class="show" loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/tb05.svg" alt="Icon" width="16" height="18">
		<img class="hide"  loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/tb05-hover.svg" alt="Icon" width="16" height="18">
		</span>Project  Management</a>
		</li>
		<li><a href="#tb-attendance">
		<span class="icon">
		<img class="show"  loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/tb04.svg" alt="Icon" width="16" height="18">
		<img class="hide"  loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/tb04-hover.svg" alt="Icon" width="16" height="18">
		</span>
		Attendance Management</a>
		</li>
      </ul>
    </nav>
    <div id="tab-contents" class="tcontents">
        <div class="numeric-table show-all" id="compare-table">
          <div class="scroll-compare">
            <div class="table-block">
              <div class="div-block-top">
                <div class="logo-ws logovs" >
                  <h2>Productivity Features</h2>
                </div>
                <div class="logo-tb logovs">
                  <picture>
                    <img class="desktop" loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/numlogo-01.svg"
                      alt="logo" width="200" height="35">
                  </picture>
                </div>
                <div class="logo-tb logovs">
                  <picture>
                    <img class="desktop" loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/numlogo-02.svg"
                      alt="logo" width="117" height="35">
                  </picture>
                </div>
                <div class="logo-tb logovs">
                  <picture>
                    <img class="desktop" loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/numlogo-03.svg"
                      alt="logo" width="122" height="35">
                  </picture>
                </div>
                <div class="logo-tb logovs">
                  <picture>
                    <img class="desktop" loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/numlogo-04.svg"
                      alt="logo" width="116" height="35">
                  </picture>
                </div>
                <div class="logo-tb logovs">
                  <picture>
                    <img class="desktop" loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/numlogo-05.svg"
                      alt="logo" width="116" height="35">
                  </picture>
                </div>
              </div>
              <div class="tab-contents active" id="tb-time">
	              <div class="table-row">
	                <div class="ws-column ws-lftcolumn">
	                  <p>Screenshot Capturing (Individual)</p>
	                </div>
	                <div class="ws-column"><i class="check-icon"></i></div>
	                <div class="ws-column"><i class="cross-icon"></i></div>
	                <div class="ws-column"><i class="check-icon"></i></div>
	                <div class="ws-column"><i class="check-icon"></i></div>
	                <div class="ws-column"><i class="check-icon"></i></div>
	              </div>
	              <div class="table-row">
	                <div class="ws-column ws-lftcolumn">
	                  <p>Apps & URL Tracking</p>
	                </div>
	                <div class="ws-column"><i class="check-icon"></i></div>
	                <div class="ws-column"><i class="check-icon"></i></div>
	                <div class="ws-column"><i class="check-icon"></i></div>
	                <div class="ws-column"><i class="cross-icon"></i></div>
	                <div class="ws-column">Limited</div>
	              </div>
	              <div class="table-row">
	                <div class="ws-column ws-lftcolumn">
	                  <p>Productive & Unproductive</p>
	                </div>
	                <div class="ws-column"><i class="check-icon"></i></div>
	                <div class="ws-column"><i class="cross-icon"></i></div>
	                <div class="ws-column"><i class="check-icon"></i></div>
	                <div class="ws-column"><i class="check-icon"></i></div>
	                <div class="ws-column"><i class="check-icon"></i></div>
	              </div>
	              <div class="table-row">
	                <div class="ws-column ws-lftcolumn">
	                  <p>Stealth Mode</p>
	                </div>
	                <div class="ws-column"><i class="check-icon"></i></div>
	                <div class="ws-column">Limited</div>
	                <div class="ws-column"><i class="check-icon"></i></div>
	                <div class="ws-column"><i class="check-icon"></i></div>
	                <div class="ws-column"><i class="check-icon"></i></div>
	              </div>
	              <div class="table-row">
	                <div class="ws-column ws-lftcolumn">
	                  <p>Screenshot delete</p>
	                </div>
	                <div class="ws-column"><i class="cross-icon"></i></div>
	                <div class="ws-column"><i class="cross-icon"></i></div>
	                <div class="ws-column"><i class="check-icon"></i></div>
	                <div class="ws-column"><i class="check-icon"></i></div>
	                <div class="ws-column"><i class="check-icon"></i></div>
	              </div>
              </div>
              <div class="tab-contents" id="tb-productivity">
	              <div class="table-row">
	                <div class="ws-column ws-lftcolumn">
	                  <p>Task Management</p>
	                </div>
	                <div class="ws-column"><i class="cross-icon"></i></div>
	                <div class="ws-column"><i class="cross-icon"></i></div>
	                <div class="ws-column"><i class="check-icon"></i></div>
	                <div class="ws-column"><i class="check-icon"></i></div>
	                <div class="ws-column"><i class="check-icon"></i></div>
	              </div>
	              <div class="table-row">
	                <div class="ws-column ws-lftcolumn">
	                  <p>Task Management</p>
	                </div>
	                <div class="ws-column"><i class="cross-icon"></i></div>
	                <div class="ws-column"><i class="cross-icon"></i></div>
	                <div class="ws-column"><i class="check-icon"></i></div>
	                <div class="ws-column"><i class="check-icon"></i></div>
	                <div class="ws-column"><i class="check-icon"></i></div>
	              </div>
	              <div class="table-row">
	                <div class="ws-column ws-lftcolumn">
	                  <p>Task Management</p>
	                </div>
	                <div class="ws-column"><i class="cross-icon"></i></div>
	                <div class="ws-column"><i class="cross-icon"></i></div>
	                <div class="ws-column"><i class="check-icon"></i></div>
	                <div class="ws-column"><i class="check-icon"></i></div>
	                <div class="ws-column"><i class="check-icon"></i></div>
	              </div>
	              <div class="table-row">
	                <div class="ws-column ws-lftcolumn">
	                  <p>Task Management</p>
	                </div>
	                <div class="ws-column"><i class="cross-icon"></i></div>
	                <div class="ws-column"><i class="cross-icon"></i></div>
	                <div class="ws-column"><i class="check-icon"></i></div>
	                <div class="ws-column"><i class="check-icon"></i></div>
	                <div class="ws-column"><i class="check-icon"></i></div>
	              </div>
	              <div class="table-row">
	                <div class="ws-column ws-lftcolumn">
	                  <p>Task Management</p>
	                </div>
	                <div class="ws-column"><i class="cross-icon"></i></div>
	                <div class="ws-column"><i class="cross-icon"></i></div>
	                <div class="ws-column"><i class="check-icon"></i></div>
	                <div class="ws-column"><i class="check-icon"></i></div>
	                <div class="ws-column"><i class="check-icon"></i></div>
	              </div>
              </div>
              <div class="tab-contents" id="tb-project">
	              <div class="table-row">
	                <div class="ws-column ws-lftcolumn">
	                  <p>Task Management</p>
	                </div>
	                <div class="ws-column"><i class="cross-icon"></i></div>
	                <div class="ws-column"><i class="cross-icon"></i></div>
	                <div class="ws-column"><i class="check-icon"></i></div>
	                <div class="ws-column"><i class="check-icon"></i></div>
	                <div class="ws-column"><i class="check-icon"></i></div>
	              </div>
	              <div class="table-row">
	                <div class="ws-column ws-lftcolumn">
	                  <p>Task Management</p>
	                </div>
	                <div class="ws-column"><i class="cross-icon"></i></div>
	                <div class="ws-column"><i class="cross-icon"></i></div>
	                <div class="ws-column"><i class="check-icon"></i></div>
	                <div class="ws-column"><i class="check-icon"></i></div>
	                <div class="ws-column"><i class="check-icon"></i></div>
	              </div>
	              <div class="table-row">
	                <div class="ws-column ws-lftcolumn">
	                  <p>Task Management</p>
	                </div>
	                <div class="ws-column"><i class="cross-icon"></i></div>
	                <div class="ws-column"><i class="cross-icon"></i></div>
	                <div class="ws-column"><i class="check-icon"></i></div>
	                <div class="ws-column"><i class="check-icon"></i></div>
	                <div class="ws-column"><i class="check-icon"></i></div>
	              </div>
	              <div class="table-row">
	                <div class="ws-column ws-lftcolumn">
	                  <p>Task Management</p>
	                </div>
	                <div class="ws-column"><i class="cross-icon"></i></div>
	                <div class="ws-column"><i class="cross-icon"></i></div>
	                <div class="ws-column"><i class="check-icon"></i></div>
	                <div class="ws-column"><i class="check-icon"></i></div>
	                <div class="ws-column"><i class="check-icon"></i></div>
	              </div>
	              <div class="table-row">
	                <div class="ws-column ws-lftcolumn">
	                  <p>Task Management</p>
	                </div>
	                <div class="ws-column"><i class="cross-icon"></i></div>
	                <div class="ws-column"><i class="cross-icon"></i></div>
	                <div class="ws-column"><i class="check-icon"></i></div>
	                <div class="ws-column"><i class="check-icon"></i></div>
	                <div class="ws-column"><i class="check-icon"></i></div>
	              </div>
              </div>
              <div class="tab-contents" id="tb-attendance">
	              <div class="table-row">
	                <div class="ws-column ws-lftcolumn">
	                  <p>Task Management</p>
	                </div>
	                <div class="ws-column"><i class="cross-icon"></i></div>
	                <div class="ws-column"><i class="cross-icon"></i></div>
	                <div class="ws-column"><i class="check-icon"></i></div>
	                <div class="ws-column"><i class="check-icon"></i></div>
	                <div class="ws-column"><i class="check-icon"></i></div>
	              </div>
	              <div class="table-row">
	                <div class="ws-column ws-lftcolumn">
	                  <p>Task Management</p>
	                </div>
	                <div class="ws-column"><i class="cross-icon"></i></div>
	                <div class="ws-column"><i class="cross-icon"></i></div>
	                <div class="ws-column"><i class="check-icon"></i></div>
	                <div class="ws-column"><i class="check-icon"></i></div>
	                <div class="ws-column"><i class="check-icon"></i></div>
	              </div>
	              <div class="table-row">
	                <div class="ws-column ws-lftcolumn">
	                  <p>Task Management</p>
	                </div>
	                <div class="ws-column"><i class="cross-icon"></i></div>
	                <div class="ws-column"><i class="cross-icon"></i></div>
	                <div class="ws-column"><i class="check-icon"></i></div>
	                <div class="ws-column"><i class="check-icon"></i></div>
	                <div class="ws-column"><i class="check-icon"></i></div>
	              </div>
	              <div class="table-row">
	                <div class="ws-column ws-lftcolumn">
	                  <p>Task Management</p>
	                </div>
	                <div class="ws-column"><i class="cross-icon"></i></div>
	                <div class="ws-column"><i class="cross-icon"></i></div>
	                <div class="ws-column"><i class="check-icon"></i></div>
	                <div class="ws-column"><i class="check-icon"></i></div>
	                <div class="ws-column"><i class="check-icon"></i></div>
	              </div>
	              <div class="table-row">
	                <div class="ws-column ws-lftcolumn">
	                  <p>Task Management</p>
	                </div>
	                <div class="ws-column"><i class="cross-icon"></i></div>
	                <div class="ws-column"><i class="cross-icon"></i></div>
	                <div class="ws-column"><i class="check-icon"></i></div>
	                <div class="ws-column"><i class="check-icon"></i></div>
	                <div class="ws-column"><i class="check-icon"></i></div>
	              </div>
              </div>
              <div class="table-row price-table-row">
                <div class="ws-column ws-lftcolumn">
                  <p><strong>Pricing</strong></p>
                </div>
                <div class="ws-column"><strong>$345</strong>
                  <span class="small-font">(Per user)</span>
                </div>
                <div class="ws-column"><strong>$345</strong>
                <span class="small-font">(Per user)</span>
                </div>
                <div class="ws-column"><strong>$345</strong>
                <span class="small-font">(Per user)</span>
                </div>
                <div class="ws-column"><strong>$345</strong><span class="small-font">(Per user)</span></div>
                <div class="ws-column"><strong>$345</strong><span class="small-font">(Per user)</span></div>
              </div>
              <div class="table-row numeric-row">
                <div class="ws-column ws-lftcolumn">
                  <p><strong>Calculative Comparison</strong></p>
                  <div class="custom-input">
                    <input type="number" id="quantity" value="10" min="1">
                    <div class="custom-buttons">
                      <button class="up" onclick="increaseValue()"><img loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/ar01.svg" alt="Workstatus" width="13" height="8"></button>
                      <button class="down" onclick="decreaseValue()"><img loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/ar02.svg" alt="Workstatus" width="13" height="8"></button>
                    </div>
                  </div>
                </div>
                <div class="ws-column active"><strong>$55</strong>
                  <span class="small-font">(Per user)</span>
                </div>
                <div class="ws-column"><strong>$55</strong>
                  <span class="small-font">(Per user)</span>
                </div>
                <div class="ws-column"><strong>$55</strong>
                  <span class="small-font">(Per user)</span>
                </div>
                <div class="ws-column"><strong>$55</strong>    <span class="small-font">(Per user)</span></div>
                <div class="ws-column"><strong>$55</strong>    <span class="small-font">(Per user)</span></div>
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
<?php //get_template_part('common/home', 'testimonials', ['bg' => 'none']); ?>
<?php //require_once get_template_directory() .'/common/all-brands.php';?>
<?php //require_once get_template_directory() .'/common/workstatus-journey-straight.php';?>
</main>
<?php get_footer(); ?>
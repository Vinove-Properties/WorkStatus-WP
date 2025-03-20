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
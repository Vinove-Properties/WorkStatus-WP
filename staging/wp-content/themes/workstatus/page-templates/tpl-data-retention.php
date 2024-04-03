<?php
/* 
Template Name: Data Retention Template 
Author : Nitin Baluni
*/
get_header();
global $ws_ctas, $RegLink, $LogLink, $post;

$rowBlocks = get_field('blocks');
?>
<main class="site__content">
<section class="hero-banner post-animation">
<div class="bannerwrap">
<div class="container">
<div class="inner-wrap">
<?php the_content(); ?>
<div class="mt40"></div>
<div class="actionBtn">
<div>
  <a href="javascript:void(0)" onclick="call_demows();" class="primary_btn2">Talk To Sales</a>
</div>
</div>
</div>
</div>
</div>
</section>
<section class="userguide">
<div class="container">
<div class="buyers-guide-section" id="div-buyer-guide">
<div class="buyers-guide">
<div class="buyers-guide-question" id="buyers-guide-question">
<h3>Table of Content</h3>

<ul class="question-list">
<?php 
if( $rowBlocks ){
   $i = 0;
   foreach( $rowBlocks as $clm ){ $i++;
   $isActive = ( $i === 1 ) ? 'active' : '';
      echo '<li><a href="#ans_'.$i.'" class="'.$isActive.'">'.$clm['title'].'</a></li>';
   }
}
?>
<li><a href="#ans_faq" class="">FAQs</a></li>
</ul>
</div>
<div class="buyers-guide-answer-part" id="buyers-guide-answer-part">
<?php 
$r = 0;
foreach( $rowBlocks as $row ){ $r++;   
   $pointer = '';
   if( $row['pointers'] ){
      $pointer .= '<div class="process-step">';
      $p = 0;
      foreach( $row['pointers'] as $rw){ $p++;
      $pointer .= '<div class="step-sec dis-flex">
         <div class="step-num">0'.$p.'</div>
         <div class="step-desc">'.$rw['cblock'].'</div>
      </div>';
      }
      $pointer .= '</div>';
   }
   echo '<div class="buyers-guide-answer ans_1" id="ans_'.$r.'">'.$row['content'].$pointer.'</div>';
}
?> 

<?php
$faq = get_field("faq");
if (isset($faq["is_enabled"]) && $faq["is_enabled"] == "yes"): ?>
   <div class="buyers-guide-answer ans_5" id="ans_faq">
   <h3 class="guide-question">FAQs</h3>
      <div class="guide-answer">
         <?php echo $faq['heading']; ?>
         <div class="faqsRow wfull for-heading-center">
         <div class="flex_row">
         <div class="column">
            <?php 
            if( $faq['qna'] ){
               $f = 0;
               foreach( $faq['qna'] as $fq ){ $f++;
               $isopen = ( $f === 1 ) ? ' open' : '';
               echo '<div class="faq-accordion-item-outer '.$isopen.'">
                  <h3 itemprop="name">'.$fq['question'].'</h3>
                  <div class="faq-accordion-content">'.$fq['answer'].'</div>
               </div>';
               }   
            }
            ?>            
         </div>
         </div>
         </div>
      </div>
   </div>
<?php endif; ?>
</div>
</div>
</div>
</div>
</section>
<?php require_once get_template_directory() . '/common/workstatus-journey-straight.php'; ?>
</main>
<?php get_footer(); ?>
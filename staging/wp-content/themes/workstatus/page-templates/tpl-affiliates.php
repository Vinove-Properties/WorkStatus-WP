<?php
/* 
Template Name: Affiliate Template 
Author : Nitin Baluni
*/
get_header();
global $ws_ctas, $RegLink, $LogLink;
?>
<main class="site__content">
<section class="hero-banner">
    <div class="bannerwrap">
        <div class="container">
            <div class="inner-wrap">
                <?php the_content(); ?>
                <div class="mt40"></div>
                <div class="actionBtn">                
                    <div>
                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSeXKtuF9Xv4Mp2F7Q7cME2zMG6v1RO9E1eMCHz_x1xKzMbjfg/viewform" class="primary_btn2" target="_blank">Apply Now</a>
                    <small>Start earning 30% commission today!</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
$bpSection = get_field('bp-section');
if( isset( $bpSection['is_enabled'] ) && ($bpSection['is_enabled'] == 'yes')) :
?>
<section class="top-plateform padd-0 affliate-section">
  <?php 
  $programs = $bpSection['programs'];
  if( $programs ){
  echo '<div class="item">';
  foreach( $programs as $row ){
    $image = ( $row['image'] ) ? pxlGetPtag( $row['image'] ) : '';
    $headingContent = ( $row['hcontent'] ) ? '<div class="top-section">'.$row['hcontent'].'</div>' : '';
    echo '<div class="flex_row align-center"><div class="container">';
    echo $headingContent;
    echo '<div class="column-left align-right">'.$image.'</div>';
    echo '<div class="column-right con-alf">'.$row['content'].'</div>
      </div></div>';
  }
  echo '</div>';
  }
  ?>
</section>
<?php endif; ?>

<section class="ready-earn" style="margin-top:80px;">
  <div class="container">
    <div class="dis-flex">
      <div class="earnleft"><h2>Ready to Earn? Join Us and Start Your Journey</h2></div>
      <div class="earnrit">
        <a href="https://docs.google.com/forms/d/e/1FAIpQLSeXKtuF9Xv4Mp2F7Q7cME2zMG6v1RO9E1eMCHz_x1xKzMbjfg/viewform" 
        rel="nofollow" class="primary_btn1">Become Workstatus Partner</a>
       </div>
    </div>
  </div>
</section>


<?php
$afPartner = get_field('affiliate-partner');
if( isset( $afPartner['is_enabled'] ) && ($afPartner['is_enabled'] == 'yes')) :
?>

<section class="trackEm post-animation" id="acf-affiliate-partner">
  <div class="container">
    <div class="top-section">
      <?php 
      if( $afPartner['heading'] ){
        echo '<h6><span class="bg-purple">'.$afPartner['heading'].'</span></h6>';
      }
      echo $afPartner['head-content'];
      ?>
    </div>
    <div class="trackRow align-center">
      <div class="trackImg">
        <?php 
        if( $afPartner['image'] ){
        echo pxlGetPtag( $afPartner['image'] );
        }
        ?>        
      </div>
      <?php 
      if( $afPartner['cols'] ) :
      echo '<div class="trackContent">';
      foreach( $afPartner['cols'] as $row ){
        echo '<div class="row">'.$row['text'].'</div>';
      }       
      echo '</div>';
      endif; 
      ?>      
    </div>
  </div>
</section>
<?php endif; ?>

<?php  
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
        if( $faq['faq-row'] ){  
        $i = 1;
        foreach( $faq['faq-row'] as $row ) {
        //$image  = $row['image_'];
        //$active = ($i==1) ? "open" : "";
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
<?php } endif; ?>
<?php //require_once get_template_directory() . '/common/workstatus-journey.php'; ?>
<section class="ready-earn">
  <div class="container">
    <div class="dis-flex">
      <div class="earnleft" style="flex-basis:100%; text-align: center;">
        <h2>Partner with Workstatus</h2>
        <p style="color:#ffffff; margin-top:10px;">Unlock new revenue streams and drive growth by joining our partner program.</p>
        <div class="earnrit" style="flex-basis:100%; text-align: center; margin-top: 30px;">
        <a href="https://docs.google.com/forms/d/e/1FAIpQLSeXKtuF9Xv4Mp2F7Q7cME2zMG6v1RO9E1eMCHz_x1xKzMbjfg/viewform" 
        rel="nofollow" class="primary_btn1">Become a Partner</a>
       </div>
      </div>      
    </div>
  </div>
</section>
</main>
<?php get_footer(); ?>
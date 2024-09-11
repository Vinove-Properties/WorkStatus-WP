<?php
  /* 
  Template Name: Press Template 
  Author : Nandani S.
  */
  get_header();
  global $ws_ctas, $RegLink, $LogLink;
  ?>
<main class="site__content">
  <?php
    $inner_banner = get_field('inner_banner');
    $ibEnabled         = $inner_banner['is_enabled'];
    if ($ibEnabled == 'yes') :
    ?>
  <section class="hero-banner">
    <div class="bannerwrap wslazy">
      <div class="container">
        <div class="inner-wrap">
          <h1><?php echo $inner_banner['title']; ?></h1>
          <?php echo $inner_banner['content']; ?>
          <div class="actionBtn">
            <?php if ($inner_banner['demo_button_text']) { ?>
            <div>
              <a href="javascript:void(0)" onclick="call_demows();" class="primary_btn2"><?php echo $inner_banner['demo_button_text']; ?></a>
              <small><?php echo $inner_banner['demo_button_bottom_text']; ?></small>
            </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php endif; ?>
  <section class="award-section">
    <div class="container">
      <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assests/images/press-award-new.svg" alt="award-image" width="1006" height="90">
    </div>
  </section>
  <?php require_once get_template_directory() .'/common/all-awards.php';?>
  <?php 
    $wsMedia = get_field('ws-media');
    if( isset( $wsMedia['is_enabled'] ) && $wsMedia['is_enabled'] == "yes" ) :
    ?>
  <section class="three-column-media-section">
    <div class="container">
      <div class="top-section">
        <h6><span class="bg-purple"><?php echo $wsMedia['top_heading']; ?></span></h6>
        <?php echo $wsMedia['content']; ?>              
      </div>
      <div class="dis-flex justify-sb col-box-outer margin-t-60">
        <?php 
          if( $wsMedia['media_testimonials'] ){
          foreach( $wsMedia['media_testimonials'] as $row ){
               echo '<div class="flex-3"><div class="media-box">';
               echo '<div class="icon-box"><picture>
               '.getPxlWebpURL($row['image']['ID']).'
               <source type="'.$row['image']['mime_type'].'" srcset="'.$row['image']['url'].'">
               <img loading="lazy" src="'.$row['image']['url'].'" alt="'.$row['image']['title'].'" 
               width="'.$row['image']['width'].'" height="'.$row['image']['height'].'"> 
               </picture></div>';
                 echo '<div class="content-box">'.$row['content'].'</div>';
                 echo '<div class="text-date-box">';
                 if( $row['link'] ){
                 echo '<span class="logo-name"><a href="'.$row['link'].'">'.$row['firm_name'].'</a></span>';    
                 }else{
                 echo '<span class="logo-name">'.$row['firm_name'].'</span>';    
                 }
                 echo '<span class="date">'.$row['date'].'</span>';
                 echo '</div>';
                 echo '</div></div>';
                
          }
          }
          ?>
      </div>
    </div>
  </section>
  <?php endif; ?>
  <section class="wsMobile whitetxt">
    <?php require_once get_template_directory() . '/common/workstatus-device.php'; ?>
  </section>

  
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
          if( $faq['question_answer_repeater'] ){  $i = 1;
          foreach( $faq['question_answer_repeater'] as $row ) {
          //$image      = $row['image_'];
          $active = ($i<=3) ? "open" : "";
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
  <?php require_once get_template_directory() . '/common/workstatus-journey.php'; ?>
</main>
<?php get_footer(); ?>
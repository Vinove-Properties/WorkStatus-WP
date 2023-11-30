<?php 
   /* 
   Template Name: Compare Page Template 
   Author : Neearj Rai
   */ 
   get_header();
   global $ws_ctas, $RegLink, $LogLink;	
   ?>
<?php  
   global $post;
   					   $post_slug = $post->post_name;
   					   
   					   
   							$srpclass = '';
   							switch ($post_slug) {
   							  case "time":
   								$srpclass = 'srp-27';
   								break;
   							  case "task":
   								$srpclass = 'srp-15';
   								break;
   							  case "desk":
   								$srpclass = 'srp-26';
   								break;
   							  default:
   								$srpclass = 'srp-15';
   							}
   					   
   					?>
<main class="site__content">
   <?php  
      $top_section = get_field('top_section');
      //echo '<pre>';
          //print_r($top_section['image']['ID']);
          
      if( $top_section ) :
      $isEnable = $top_section['is_enabled'];
      if( $isEnable == "yes" ){ 
      ?>
   <section class="hero-banner">
      <div class="container">
         <div class="inner-wrap">
            <?php  //if( $top_section['image'] ){ echo $top_section['url'];
               echo '<picture class="alter-image">
               '.getPxlWebpURL($top_section['image']['ID']).'
               <source type="'.$top_section['image']['mime_type'].'" srcset="'.$top_section['image']['url'].'">
               <img loading="lazy" src="'.$top_section['image']['url'].'" alt="'.$top_section['image']['title'].'" width="'.$top_section['image']['width'].'" 
               height="'.$top_section['image']['height'].'"> 
               </picture>';
               //} ?>
            <h1><?php echo $top_section['heading']; ?></h1>
            <p><?php echo $top_section['content']; ?>
            </p>
         </div>
      </div>
   </section>
   <?php } endif; ?>
   <?php  
      $recognition_section = get_field('recognition_section');
      //echo '<pre>';
          //print_r($top_section['image']['ID']);
          
      if( $recognition_section ) :
      $isEnable = $recognition_section['is_enabled'];
      if( $isEnable == "yes" ){ 
      ?>
   <section class="reviews">
      <div class="container">
         <div class="top-section">
            <h2><?php echo $recognition_section['heading']; ?></h2>
         </div>
         <div class="flex_row justify-center">
            <?php 
               if( $recognition_section['content_repeater'] ){  $i = 1;
                               foreach( $recognition_section['content_repeater'] as $row ) {
                                 
                               ?>
            <div class="column">
               <div class="flex_row align-center justify-center">
                  <a href="<?php echo $row['url']; ?>" rel="nofollow">
                  <span class="logo-icon">
                  <i class="reviews-logo review-logo<?php echo $i; ?>"></i>
                  <i class="star-icon"></i>
                  </span>
                  </a>
               </div>
            </div>
            <?php $i++; } } ?>    
         </div>
      </div>
   </section>
   <?php } endif; ?>
   
   <?php  
      $comparisan_section = get_field('comparisan_section');
      //	echo '<pre>';
       //print_r($recognition_section);
          
      if( $comparisan_section ) :
             $isEnable = $comparisan_section['is_enabled'];
      if( $isEnable == "yes" ){ 
      ?>
   <section class="ws-tabtop">
      <div class="container">
         <div class="top-section">
            <h2><?php echo $comparisan_section['heading']; ?></h2>
         </div>
      </div>
   </section>
   <section class="ws-table">
      <div class="container">
         <div class="table-block">
            <div class="div-block-top">
               <div class="logo-ws logovs" >
                  <?php  //if( $top_section['image'] ){ echo $top_section['url'];
                     echo '<picture>
                     '.getPxlWebpURL($comparisan_section['logo_left']['ID']).'
                     <source type="'.$comparisan_section['logo_left']['mime_type'].'" srcset="'.$comparisan_section['logo_left']['url'].'">
                     <img loading="lazy" src="'.$comparisan_section['logo_left']['url'].'" alt="'.$comparisan_section['logo_left']['title'].'" width="'.$comparisan_section['logo_left']['width'].'" 
                     height="'.$comparisan_section['logo_left']['height'].'"> 
                     </picture>';
                     //} ?>
               </div>
               <div class="logo-360 logovs">
                  <?php  //if( $top_section['image'] ){ echo $top_section['url'];
                     echo '<picture>
                     '.getPxlWebpURL($comparisan_section['logo_right']['ID']).'
                     <source type="'.$comparisan_section['logo_right']['mime_type'].'" srcset="'.$comparisan_section['logo_right']['url'].'">
                     <img loading="lazy" src="'.$comparisan_section['logo_right']['url'].'" alt="'.$comparisan_section['logo_right']['title'].'" width="'.$comparisan_section['logo_right']['width'].'" 
                     height="'.$comparisan_section['logo_right']['height'].'"> 
                     </picture>';
                     //} ?>
               </div>
            </div>
            <?php 
               if( $comparisan_section['content_repeate'] ){  $i = 1;
                               foreach( $comparisan_section['content_repeate'] as $row ) { //echo '<pre>'; print_r($row);
                                 
                                  $checkleft = ($row['left_truefalse']=='True') ? "check-icon" : 'cross-icon';
                                  $checkright = ($row['right_truefalse']=='True') ? "check-icon" : 'cross-icon';
                               ?>
            <div class="table-row">
               <div class="wsleft-column"><i class="<?php echo $checkleft; ?>"></i></div>
               <div class="wscen-column">
                  <p><?php echo $row['feature']; ?></p>
               </div>
               <div class="wsright-column"><i class="<?php echo $checkright; ?>"></i></div>
            </div>
            <?php $i++; } } ?> 
         </div>
         <div class="center-align">
            <h3><?php echo $comparisan_section['bottom_content']; ?></h3>
            <?php if( geoCTAcheck() === true ) : ?>
            <div class="mt40 btnSc">
               <!-- <p><?php echo $comparisan_section['button_top_content']; ?></p>
                  <a href="https://app.workstatus.io/auth/register/" class="primary_btn1"><?php echo $ws_ctas['cta_text']; ?></a>
                  <small><?php echo $comparisan_section['button_bottom_content']; ?></small> -->
               <?php echo wsDemoCta(); ?>
            </div>
            <?php endif; ?>
         </div>
      </div>
   </section>
   <?php } endif; ?>
   <section class="middle-section feature-section vs-sec">
      <?php  
         $competitors_section = get_field('competitors_section_');
         //echo '<pre>';
             //print_r($competitors_section);
         if( $competitors_section ) :
         $isEnable = $competitors_section['is_enabled'];
         if( $isEnable == "yes" ){ 
         ?>
      <div class="item">
         <div class="container">
            <div class="top-section">
               <h2><?php echo $competitors_section['heading']; ?></h2>
            </div>
            <div>
               <div class="flex_row">
                  <div class="column-right">
                     <?php  //if( $top_section['image'] ){ echo $top_section['url'];
                        echo '<picture class="page active" id="p1">
                        '.getPxlWebpURL($competitors_section['image']['ID']).'
                        <source type="'.$competitors_section['image']['mime_type'].'" srcset="'.$competitors_section['image']['url'].'">
                        <img loading="lazy" src="'.$competitors_section['image']['url'].'" alt="'.$competitors_section['image']['title'].'" width="'.$competitors_section['image']['width'].'" 
                        height="'.$competitors_section['image']['height'].'"> 
                        </picture>';
                        //} ?>
                  </div>
                  <div class="column-left">
                     <div class="all-content">
                        <div class="text-column">
                           <?php echo $competitors_section['content']; ?>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <?php } endif; ?>
      <?php  
         $powerful_features_section = get_field('powerful_features_section');
         //echo '<pre>';
             //print_r($competitors_section);
         if( $powerful_features_section ) :
         $isEnable = $powerful_features_section['is_enabled'];
         if( $isEnable == "yes" ){ 
         ?>
      <div class="item">
         <div class="container">
            <div>
               <div class="flex_row">
                  <div class="column-right">
                     <?php  //if( $top_section['image'] ){ echo $top_section['url'];
                        echo '<picture>
                        '.getPxlWebpURL($powerful_features_section['image']['ID']).'
                        <source type="'.$powerful_features_section['image']['mime_type'].'" srcset="'.$powerful_features_section['image']['url'].'">
                        <img loading="lazy" src="'.$powerful_features_section['image']['url'].'" alt="'.$powerful_features_section['image']['title'].'" width="'.$powerful_features_section['image']['width'].'" 
                        height="'.$powerful_features_section['image']['height'].'"> 
                        </picture>';
                        //} ?>
                  </div>
                  <div class="column-left">
                     <div class="all-content">
                        <div class="text-column">
                           <?php echo $powerful_features_section['content']; ?>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <?php } endif; ?>
   </section>


   <?php  
      $testimonial_section = get_field('testimonial_section');
      //echo '<pre>';
          //print_r($top_section['image']['ID']);
          
      if( $testimonial_section ) :
      $isEnable = $testimonial_section['is_enabled'];
      if( $isEnable == "yes" ){ 
      ?>
   <section class="testm-sec">
      <div class="container">
         <div class="top-section">
            <h2><?php echo $testimonial_section['heading']; ?></h2>
            <p><?php echo $testimonial_section['sub_heading']; ?></p>
         </div>
         <div class="flex_row">
            <?php 
               if( $testimonial_section['content_repeater'] ){  $i = 15;
               foreach( $testimonial_section['content_repeater'] as $row ) {
               	$image      = $row['image'];
               	$active = ($i==15) ? "active" : "";
               ?>
            <div class="column-three">
               <h3><?php echo $row['heading'];?></h3>
               <p><?php echo $row['content'];?></p>
               <div class="w-auth">
                  <?php if( $image ){
                     echo '<picture class="auth-image">
                     '.getPxlWebpURL($image['ID']).'
                     <source type="'.$image['mime_type'].'" srcset="'.$image['url'].'">
                     <img loading="lazy" src="'.$image['url'].'" alt="'.$image['title'].'" width="'.$image['width'].'" 
                     height="'.$image['height'].'"> 
                     </picture>';
                     } ?>
                  <div class="auth-name">
                     <h6><?php echo $row['name'];?></h6>
                     <p><?php echo $row['country'];?></p>
                  </div>
               </div>
            </div>
            <?php $i++; } } ?>
         </div>
      </div>
   </section>
   <?php } endif; ?>



   <?php  
      $businesses_return = get_field('businesses_return');
      //	echo '<pre>';
       //print_r($recognition_section);
          
      if( $businesses_return ) :
      $isEnable = $businesses_return['is_enabled'];
      if( $isEnable == "yes" ){ 
      ?>
   <section class="returnSec">
      <div class="container">
         <div class="top-section">
            <h2><?php echo $businesses_return['heading']; ?></h2>
         </div>
         <div class="flex_row">
            <?php 
               if( $businesses_return['content_repeater'] ){  $i = 1;
                               foreach( $businesses_return['content_repeater'] as $row ) {
                                 
                               ?>
            <div class="column-three">
               <h3><?php echo $row['heading']; ?></h3>
               <p><?php echo $row['content']; ?></p>
            </div>
            <?php $i++; } } ?> 
         </div>
      </div>
   </section>
   <?php } endif; ?>
   <?php  
      $glance_section = get_field('glance_section');
      //	echo '<pre>';
       //print_r($recognition_section);
          
      if( $glance_section ) :
      $isEnable = $glance_section['is_enabled'];
      if( $isEnable == "yes" ){ 
      ?>
   <section class="glance">
      <div class="container">
         <div class="flex_row">
            <div class="column-left">
               <h2><?php echo $glance_section['heading']; ?></h2>
               <p><?php echo $glance_section['sub_heading']; ?></p>
               <ul class="checkList">
                  <?php echo $glance_section['content']; ?>
               </ul>
               <div class="btnSc">
                  <!-- <p><?php echo $glance_section['button_top_text']; ?></p>
                     <a href="javascript:void(0)" onclick="call_demows();" class="primary_btn1">Book A Demo
                     </a>
                     <small><?php echo $glance_section['button_bottom_text']; ?></small> -->
                  <?php echo wsDemoCta(); ?>
               </div>
            </div>
            <div class="column-right">
               <?php 
                  if( $glance_section['content_repeaters'] ){  $i = 1;
                                  foreach( $glance_section['content_repeaters'] as $row ) {
                                    
                                  ?>
               <div class="text-column">
                  <div class="icon"><i class="icon<?php echo $i; ?>"></i></div>
                  <div class="textbox">
                     <h3><?php echo $row['heading']; ?></h3>
                     <p><?php echo $row['content']; ?></p>
                  </div>
               </div>
               <?php $i++; } } ?> 
            </div>
         </div>
      </div>
   </section>
   <?php } endif; ?>
   <section class="wsMobile whitetxt">
      <?php require_once get_template_directory() .'/common/workstatus-device.php';?>
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
                     if( $faq['faq-row'] ){  $i = 1;
                     foreach( $faq['faq-row'] as $row ) {
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
   <?php require_once get_template_directory() .'/common/workstatus-journey.php';?>
</main>
<?php get_footer(); ?>
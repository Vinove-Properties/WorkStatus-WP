<?php 
/* 
Template Name: Resource Page Template 
Author : Nitin Baluni
*/ 
get_header();
global $ws_ctas, $RegLink, $LogLink;	
?>
<main class="site__content">
   <section class="hero-banner inner-banner-bg">
          <div class="bannerwrap resource-banner wslazy">
            <div class="container">
              <div class="inner-wrap">
                  <?php 
                  while( have_posts() ) : the_post();
                  the_content();
                  endwhile;   
                  ?>
              </div>
            </div>
          </div>
   </section>
   <div class="partwrap">
   <div class="container">
    <div class="partner-div">
      <div class="part-col">
        <i class="part-logo part-logo1"></i>
        <p><strong>5</strong>/5</p>
        <i class="star-icon"><img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/images/star-icon1.svg"
          alt="star" width="112" height="17"></i>
      </div>
      <div class="part-col">
        <i class="part-logo part-logo2"></i>
        <p><strong>4.3</strong>/5</p>
        <i class="star-icon"><img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/images/star-icon2.svg"
          alt="star" width="112" height="17"></i>
      </div>
      <div class="part-col">
        <i class="part-logo part-logo3"></i>
        <p><strong>4.4</strong>/5</p>
        <i class="star-icon"><img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/images/star-icon3.svg"
          alt="star" width="112" height="17"></i>
      </div>
      <div class="part-col">
        <i class="part-logo part-logo4"></i>
        <p><strong>4.7</strong>/5</p>
        <i class="star-icon"><img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/images/star-icon4.svg"
          alt="star" width="112" height="17"></i>
      </div>
      <div class="part-col">
        <i class="part-logo part-logo5"></i>
        <p><strong>4.5</strong>/5</p>
        <i class="star-icon"><img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/images/star-icon3.svg"
          alt="star" width="112" height="17"></i>
      </div>
    </div>
   </div>
   </div>   
   <section class="userguide">
     <div class="container">    
       <div class="buyers-guide-section" id="div-buyer-guide">
         <div class="buyers-guide">
           <div class="buyers-guide-question" id="buyers-guide-question">
               <h3>Categories</h3>
               <?php 
               $ws_categories = get_categories( array(
               'hide_empty' => true,   
               'orderby' => 'name',
               'order'   => 'DESC'
               ) );
               if( $ws_categories ){
               echo '<ul class="question-list">';
               $i = 0;
               foreach( $ws_categories as $row ){ $i++;
                  $is_active = ( $i === 1 ) ? 'active' : '';
                  echo '<li><a href="#ans_'.$i.'" class="'.$is_active.'">'.$row->name.'</a></li>';
               }
               echo '</ul>';
               }
               ?>               
           </div>
           <div class="buyers-guide-answer-part" id="buyers-guide-answer-part">
            <?php 
            if( $ws_categories ) : 
            $ic = 0;
            foreach( $ws_categories as $row ) : 
            $ic++;
            $thumbnail_id  = get_field( 'category_image', 'term_'.$row->term_id ); 
            ?>  
             <div class="buyers-guide-answer ans_<?php echo $ic; ?>" id="ans_<?php echo $ic; ?>">
               <h3 class="guide-question"><?php echo $row->name; ?></h3>
               <div class="guide-answer">
                  <?php
                  if( $row->description ){
                     echo '<p>'.$row->description.'</p>';
                  }
                  if( $thumbnail_id && is_array($thumbnail_id) ){
                  echo pxlGetPtag($thumbnail_id);
                  }
                  ?>
               <div class="rerow">
                  <?php 
                  $posts = get_posts(['numberposts' => 999, 'category' => $row->term_id]);
                  if( $posts ){
                     foreach( $posts as $wpost ) {
                        echo '<div class="recol">
                        <h5>'.get_field('rpost-type', $wpost->ID ).'</h5>
                        <h4><a href="'.get_permalink($wpost->ID).'">'.$wpost->post_title.'</a></h4>
                        <p>'.get_field('listing-text', $wpost->ID).'</p>
                        </div>';
                     }
                  }
                  ?>                
               </div>
               </div>
             </div>
            <?php endforeach; endif; ?>
           </div>
         </div>
       </div>
     </div>
   </section>
   <?php require_once get_template_directory() .'/common/workstatus-journey.php';?>
</main>
<?php get_footer(); ?>
<?php
/* 
Template Name: Integration Details
Author : Nitin Baluni
*/
get_header();
global $ws_ctas, $RegLink, $LogLink, $post;
?>
<main class="site__content">
        <section class="hero-banner post-animation">
          <div class="container">
            <div class="inner-wrap">
              <?php 
              $bannerImage = get_field('banner-image');
              if( $bannerImage ){
              echo '<picture class="alter-image">
              <img loading="lazy" src="'.$bannerImage['url'].'" alt="Alternative" width="'.$bannerImage['width'].'" height="'.$bannerImage['height'].'">
              </picture>';
              }
              ?>
              <?php the_content(); ?>              
              
              
              <div class="actionBtn"><?php echo cmnBannerCta(); ?></div>
              
              <?php //require_once get_template_directory() . '/common/available-device.php'; ?>
              <?php //require_once get_template_directory() . '/common/partners.php'; ?>               
              
            </div>
          </div>
        </section>
        <?php 
        $colOne = get_field('ws-cone');
        if( isset( $colOne['is_enabled'] ) && ($colOne['is_enabled'] == "yes") ) :
        ?>
        <section class="step-sec padd-0">
          <div class="container">
            <div class="step-row flex_row">
              <div class="image-col">
                <?php 
                if( $colOne['image'] ){
                echo pxlGetPtag( $colOne['image'] );
                }
                ?>                
              </div>
              <div class="content-col">
                <div class="top-section">
                  <?php 
                  if( $colOne['top-heading'] ){
                    echo '<h6><span class="bg-purple">'.$colOne['top-heading'].'</span></h6>';
                  }
                  echo $colOne['content'];
                  ?>
                </div>
              </div>
            </div>
          </div>
        </section>
        <?php endif; ?>

        <?php 
        $colSteps = get_field( 'ws-steps' );
        if( isset( $colSteps['is_enabled'] ) && ($colSteps['is_enabled'] == "yes") ) :
        ?>
        <section class="middle-section feature-section bglight">
          <div class="item">
            <div class="container">
              <div class="top-section">
                <?php 
                  if( $colSteps['top_title'] ){
                  echo '<h6><span class="bg-purple">'.$colSteps['top_title'].'</span></h6>';
                  }
                  echo $colSteps['top_content'];
                  ?>                
              </div>
              <?php 
              $steps = $colSteps['cards'];
              if( $steps ){
              ?>
              <div id="active_Current_Tabs1">
                <div class="flex_row">
                  <div class="column-left">
                    <?php 
                    $cl = 0 ;
                    foreach( $steps as $step ){ $cl++; ?>
                    
                    <div class="all-content">
                      <div class="text-column active" id="t<?php echo $cl; ?>" data-section="active_Current_Tabs1">
                        <h5>Step <?php echo $cl; ?></h5>
                        <?php echo $step['content']; ?>
                      </div>
                      <div class="mob-image">
                        <?php 
                        if( $step['image'] ){
                          echo pxlGetPtag( $step['image'] );
                        }
                        ?>                        
                      </div>
                    </div>
                    <?php } ?>
                  </div>
                  <div class="column-right">
                    <?php 
                    $rl = 0 ;
                    foreach( $steps as $step ){ 
                    $rl++; 
                    if( $step['image'] ){
                      $isActive = ( $rl == 1 ) ? 'active' : '';
                      echo pxlGetPtag( $step['image'], "", "page ".$isActive, "p".$rl );
                    }
                    }
                    ?>                    
                  </div>
                </div>
              </div>
              <?php } ?>
            </div>
          </div>
        </section>
        <?php endif; ?>

        <?php 
        $colRow = get_field('tw-colrow');
        if( isset( $colRow['is_enabled'] ) && ($colRow['is_enabled'] == "yes") ) :
        ?>
        <section class="step-sec">
          <div class="container">
            <?php foreach( $colRow['row'] as $row ){ ?>
              <div class="step-row flex_row">
              <div class="image-col">
                <?php 
                if($row){
                  echo pxlGetPtag( $row['image'] );
                }
                ?>                
              </div>
              <div class="content-col">
                <div class="top-section">
                  <?php 
                  if( $row['top_title'] ){
                    echo '<h6><span class="bg-purple">'.$row['top_title'].'</span></h6>';
                  }
                  echo $row['content'];
                  ?>
                </div>
              </div>
            </div>            
            <?php } ?>
          </div>
        </section>
        <?php endif; ?>

        <?php 
        $solutions = get_field('ws-onesolution');
        if( isset( $solutions['is_enabled'] ) && ($solutions['is_enabled'] == "yes") ) :
        ?>
        <section class="one-solution list-icon bglight">
          <div class="container">
            <div class="top-section">
              <?php 
              if( $solutions['heading'] ){
              echo '<h6><span class="bg-purple">'.$solutions['heading'].'</span></h6>';
              }

              if( $solutions['sub_heading'] ){
              echo '<h2>'.$solutions['sub_heading'].'</h2>';
              }
              ?>
            </div>
            <?php 
            if( $solutions['cols'] ){
            echo '<div class="flex_row">';
            foreach( $solutions['cols'] as $col ){
            echo '<div class="column-three"><div class="box"><div class="bx-content">';
            if( $col['icon'] ){
              echo pxlGetPtag( $col['icon'] );
            }
            echo $col['text'];
            echo '</div></div></div>';
            }
            echo '</div>';  
            }
            ?>
          </div>
        </section>
        <?php endif; ?>

        <?php
        $ctaBanner = get_field( 'cta-banner' );
        if( isset( $ctaBanner['is_enabled'] ) && ($ctaBanner['is_enabled'] == "yes") ) :
        ?>
        <section class="support-team">
          <div class="container">
            <div class="support-row flex_row">
              <div class="sup-image">
                <?php 
                if( $ctaBanner['image'] ){
                  echo pxlGetPtag( $ctaBanner['image'] );
                }
                ?>                
              </div>
              <div class="sup-content">
                <?php echo $ctaBanner['content']; ?>
                <div class="mt40 btnSc">
                  <a href="javascript:void(0)" onclick="call_demows();" rel="nofollow" class="primary_btn1">Book A Demo</a>
                  <small>No credit card required</small>
                </div>
              </div>
            </div>
          </div>
        </section>
        <?php endif; ?>

        <?php 
        $colLast = get_field('ws-clast');
        if( isset( $colLast['is_enabled'] ) && ($colLast['is_enabled'] == "yes") ) :
        ?>
        <section class="step-sec">
          <div class="container">
            <div class="step-row flex_row">
              <div class="image-col">
                <?php 
                if( $colLast['image'] ){
                echo pxlGetPtag( $colLast['image'] );
                }
                ?>                
              </div>
              <div class="content-col">
                <div class="top-section">
                  <?php 
                  if( $colLast['top-heading'] ){
                    echo '<h6><span class="bg-purple">'.$colLast['top-heading'].'</span></h6>';
                  }
                  echo $colLast['content'];
                  ?>
                </div>
              </div>
            </div>
          </div>
        </section>
        <?php endif; ?>

        <?php  
        $faq = get_field('faq');
        if( isset( $faq['is_enabled'] ) && ($faq['is_enabled'] == "yes") ) :
        ?>
        <section class="faqsRow wfull for-heading-center bglight">
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
        <?php endif; ?>        
        <?php require_once get_template_directory() . '/common/blog.php'; ?>
        <?php require_once get_template_directory() . '/common/workstatus-journey.php'; ?>
      </main>
<?php get_footer(); ?>
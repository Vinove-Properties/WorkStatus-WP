<?php 
/* 
Template Name: Feature V2.0 - Updated Template
Author : Nitin Baluni
*/ 
get_header();
global $ws_ctas, $RegLink, $LogLink, $post;
?>
<main class="site__content">
  <section class="banner-section">
    <div class="home-section">
      <div class="container">
        <div class="flex_row">
          <div class="column column-content">
            <?php the_content(); ?>
            <div class="cont-wrap">
              <div class="actionBtn"><?php echo cmnBannerCta(); ?></div>
              <div class="av-device"><span>Available for:</span><i class="icon1"></i><i class="icon2"></i><i class="icon3"></i><i class="icon4"></i><i class="icon5"></i></div>
              <div class="partwrap">
                <div class="part-col">
                  <i class="part-logo part-logo1"></i>
                  <i class="star-icon"><img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/images/ftstar.svg" alt="star" width="60" height="9"></i>
                </div>
                <div class="part-col">
                  <i class="part-logo part-logo2"></i>
                  <i class="star-icon"><img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/images/ftstar.svg" alt="star" width="60" height="9"></i>
                </div>
                <div class="part-col">
                  <i class="part-logo part-logo3"></i>
                  <i class="star-icon"><img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/images/ftstar.svg" alt="star" width="60" height="9"></i>
                </div>
                <div class="part-col">
                  <i class="part-logo part-logo4"></i>
                  <i class="star-icon"><img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/images/ftstar.svg" alt="star" width="60" height="9"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php 
      $inBanner = get_field('inner_banner');
      if( isset($inBanner['is_enabled']) && ($inBanner['is_enabled'] == "yes") ) :
      $bannerThumb = ($inBanner['video_bg_image']) ? wsGetWebpSrcUrl($inBanner['video_bg_image']['id']) : get_bloginfo('template_url').'/dev-images/ftmain-banner.webp';
      ?>
      <div class="column videoSc" id="<?php echo (isset($inBanner['video']) && !empty($inBanner['video'])) ? 'has-yt-video' : '_noElm'; ?>">
        <div class="inner">
          <?php 
          if( isset($inBanner['video']) && !empty($inBanner['video']) ){
          echo '<div id="myBtn" class="vbtn">Open Modal<div class="playsc"><span class="playicon"></span></div></div>';
          } 
          ?>          
          <div class="topVideo srp-1">
            <div id="myDIV" class="contbox2">
              <div class="videoWrapper js-videoWrapper">
                <div class="videoPopup">
                  <div id="contentPopup" class="popup-wrapper">
                    <div class="popWrap">
                      <div class="popup-content">
                        <span class="close"></span>
                        <?php
                        if( isset($inBanner['video']) && !empty($inBanner['video']) ){
                        echo '<iframe id="video" class="videoIframe js-videoIframe" data-src="'.$inBanner['video'].'" allowfullscreen></iframe>';  
                        }
                        ?>                        
                      </div>
                    </div>
                  </div>
                </div>
                <button style="background-image: url(<?php echo $bannerThumb; ?>)" class="videoPoster lazy-background nb-bg" id="play-button">Play video</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php endif; ?>
    </div>
  </section>
  <?php 
  $dataDriv = get_field('dd-resul'); 
  if( isset($dataDriv['is_enabled']) && ($dataDriv['is_enabled'] == "yes") ){
  ?>
  <div class="business-growth-section padding-t-50 padding-b-120">
  <div class="container">
    <div class="top-section text-center">
      <h6><span class="bg-purple"><?php echo $dataDriv['heading']; ?></span></h6>
      <?php echo $dataDriv['sub_heading']; ?>      
    </div>
    <div class="content-wrapper">
      <div class="column without-workstatus">
        <h3>Without Workstatus</h3>
        <?php echo $dataDriv['con-left']; ?>        
      </div>
      <div class="mobile-image">
        <img src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/ft-mobile.png" alt="Workstatus App">
      </div>
      <div class="column with-workstatus">
        <h3>With <a href="<?php bloginfo('url'); ?>" class="brand">
          <img class="dark" loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/assests/header-images/logo-dark.svg" 
          alt="Workstatus" width="166" height="23">
          </a>
        </h3>
        <?php echo $dataDriv['con-right']; ?>        
      </div>
    </div>
  </div>
  </div>
  <?php } ?>

  <?php 
  $whyUs = get_field('why-ws');
  if( isset($whyUs['is_enabled']) && ($whyUs['is_enabled'] == "yes") ):
  ?>
  <section class="client-img-section bg-light padding-t-120 padding-b-120">
  <div class="container">
  <div class="dis-flex why-ws">
  <div class="flex-2 left-box">
  <div class="top-section">
    <h6><span class="bg-purple"><?php echo $whyUs['heading']; ?></span></h6>
    <?php echo $whyUs['content']; ?>    
  </div>
  <?php echo _getDemoCTA("button-common margin-t-40", false); ?>  
  </div>
  <div class="flex-2 right-box">
  <div class="dis-flex">
    <div class="flex-2 why-left">
      <div class="award-sc">
        <ul>
          <li>
            <span class="aw-icon">
              <picture>
                <img  loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/awrd-01.svg" alt="Workstatus" width="27" height="28">
              </picture>
            </span>
            <span class="star"></span>
          </li>
          <li>
            <span class="aw-icon">
              <picture>
                <img  loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/awrd-02.svg" alt="Workstatus" width="78" height="18">
              </picture>
            </span>
            <span class="star"></span>
          </li>
          <li>
            <span class="aw-icon">
              <picture>
                <img  loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/awrd-03.svg" alt="Workstatus" width="40" height="34">
              </picture>
            </span>
            <span class="star"></span>
          </li>
        </ul>
      </div>
      <div class="plateform"><?php echo $whyUs['ls-content']; ?></div>
    </div>
    <div class="flex-2 why-right">
      <div class="client-section">
        <div class="client-row">
          <div class="client-stack award-animate-slide-to-left hover:pause">
            <ul>
              <li>
                <picture class="awimg">
                  <img src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/ex-01.svg" alt="" width="130" height="29">
                </picture>
                <a class="move" href="#"></a>
                <div class="star-rt">4.6 Excellent <img src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/4.6rate.svg" alt="Award" width="100" height="17"></div>
                <p>Invoicera is a lifesaver! I always know who's paid and who owes me. It keeps my finances organized, saving me time and stress, especially at tax time.</p>
              </li>
              <li>
                <picture class="awimg">
                  <img src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/ex-01.svg" alt="" width="130" height="29">
                </picture>
                <a class="move" href="#"></a>
                <div class="star-rt">4.6 Excellent <img src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/4.6rate.svg" alt="Award" width="100" height="17"></div>
                <p>Invoicera is a lifesaver! I always know who's paid and who owes me. It keeps my finances organized, saving me time and stress, especially at tax time.</p>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="counter">
        <div class="count-col"><h3>500K+</h3><p>Active users</p></div>
        <div class="count-col"><h3>21M+</h3><p>Hours Tracked</p></div>
      </div>
    </div>
  </div>
  </div>
  </div>
  </div>
  </section>
  <?php endif; ?>
  <?php 
    $fBlocks = get_field('ftblocks');
    //echo '<pre>'; print_r($fBlocks); die;
    if( isset( $fBlocks['is_enabled'] ) && ($fBlocks['is_enabled'] == "yes") ){
      //echo '<section class="feature-wrapper">';
      $pos = $fBlocks['usp-pos'];
      if( $fBlocks['blocks'] ){
        $i = 0;
        foreach ( $fBlocks['blocks'] as $block ){
        $i++;
        $wrpsClass = ( $i % 2 == 0 ) ? "feature-wrapper feature-bluebg padding-t-120 padding-b-120" : "feature-wrapper right-shape padding-t-120 padding-b-120";
        echo '<section class="'.$wrpsClass.'">';

        echo '<div class="container"><div class="top-section text-center">
        <h6><span class="bg-purple">'.$block['title'].'</span></h6>'.$block['top-content'].'</div></div>';

        if( $i % 2 == 0 ){
        echo '<div class="feature-loop">
            <div class="container">
              <div class="feature-row">
                <div class="column-left">'.pxlGetPtag($block['image']).'</div>
                <div class="column-right">'._wraplsContent($block['con']).'</div>
              </div>
              '._getDemoCTA('button-common margin-t-50', false).'
            </div>
          </div>';  
        }else{
          echo '<div class="feature-loop right-shape"><div class="container"><div class="feature-row">
          <div class="column-left">'.pxlGetPtag($block['image']).'</div>
          <div class="column-right">
          <div class="text-column listing">'.$block['con'].'</div>
          '._getDemoCTA('button-common margin-t-50', false).'
          </div>';
          echo '</div></div></div>';
        }
        echo '</section>';
        if( $i == $pos ){
          get_template_part('common/cmn', 'usps', ['cta' => _getDemoCTA('button-common margin-t-80', false)]);
        }
        }
          
      }        
    }


    $sicBlock = get_field('sic-block');
    if( isset( $sicBlock['is_enabled'] ) && ($sicBlock['is_enabled'] == "yes") ) :
    
    $topHeading = '';
    if( isset( $sicBlock['heading'] ) && !empty($sicBlock['heading']) ){
    $topHeading = '<h6><span class="bg-purple">'.$sicBlock['heading'].'</span></h6>';
    }

    echo '<section class="feature-scroller"><div class="container"><div class="feature-wrap bg-light padding-t-120 padding-b-120">';
    echo '<div class="left-panel">
          <div class="top-section">            
            '.$topHeading.$sicBlock['sub_heading'].'
            '._getDemoCTA('button-common margin-t-50', false).'
          </div>
          </div>';

    echo '<div class="right-panel">';
    if( $sicBlock['block'] ){
    foreach( $sicBlock['block'] as $row ){
        echo '<div class="content-box">
        <div class="img-sec">'.pxlGetPtag($row['img']).'</div>
        <div class="text-box">'.$row['content'].'</div>
        </div>';
      }  
    }
    echo '</div><!--//.right-panel-->';

    echo '</div></div></section>';  
    endif;  

    $proBlock = get_field('pro-block');
    if( isset($proBlock['is_enabled']) && ($proBlock['is_enabled'] == "yes") ){
    echo '<section class="feature-wrapper padding-t-120 padding-b-100 post-animation">
          <div class="container">
            <div class="top-section text-center">
            <h6><span class="bg-purple">'.$proBlock['heading'].'</span></h6>'
            .$proBlock['sub_heading'].'</div>
          </div>
          <div class="feature-loop">
            <div class="container">
              <div class="feature-row">
                <div class="column-left">'.pxlGetPtag($proBlock['image']).'</div>
                <div class="column-right">
                  <div class="text-column listing">'.$proBlock['content'].'</div>
                </div>
              </div>
            </div>
          </div>
        </section>';
    }
    // 
    $otherFeatures = get_field('ot-features');
    if( isset( $otherFeatures['is_enabled'] ) && ($otherFeatures['is_enabled'] == "yes") ){
    echo '<section class="three-column-section padding-b-120 margin-t-120">
    <div class="container">
    <div class="top-section text-center">
    <h6><span class="bg-purple">'.$otherFeatures['heading'].'</span></h6>'.$otherFeatures['sub_heading'].'</div>';
    if( $otherFeatures['cards'] ){
      $link = (isset($row['link']) && !empty($row['link'])) ? '<a href="'.$row['link'].'" class="is-arrow">'.$row['lk-text'].'</a>' : '';
      echo '<div class="ws-row">';
      foreach( $otherFeatures['cards'] as $row ){
        echo '<div class="flex-3"><div class="box">
        '.pxlGetPtag($row['icon']).'
        <div class="content-area">'.$row['content'].'</div>'.$link.'
        </div>
        </div>';
      }
      echo '</div>';  
    }
    echo _getDemoCTA('button-common margin-t-80', false);
    echo '</div></div></section>';
    }

    get_template_part('common/cmn', 'workplaces');
    $wsIndustry = get_field("ws-industries");
    if( isset( $wsIndustry['required'] ) && ($wsIndustry['required'] == "yes") ){
    $sec_content = $wsIndustry['content'];
    $sec_content .= '<a href="'.$wsIndustry['cta-link'].'" class="is-arrow">'.$wsIndustry['cta-title'].'</a>';
    $elmImage = '<picture class="card-img">
        <source type="image/webp" srcset="'.get_bloginfo('template_url').'/version-2.0/assests/images/dashboard-img.png">
        <source type="image/png" srcset="'.get_bloginfo('template_url').'/version-2.0/assests/images/ dashboard-img.png">
        <img loading="lazy" src="'.get_bloginfo('template_url').'/version-2.0/assests/images/ dashboard-img.png" alt="Workstatus" width="404" height="217">
      </picture>';
    if( isset($wsIndustry['image']) && !empty( $wsIndustry['image'] ) ){
    $elmImage = pxlGetPtag( $wsIndustry['image'], "WS Industries", "card-img" );
    }
    get_template_part('common/cmn', 'industries', ['elm-image' => $elmImage, 'elm-content' => $sec_content ]);  
    }    
    ?>

    <?php     
    $allOne = get_field('allone');
    if( isset($allOne['is_enabled']) && ($allOne['is_enabled'] == "yes") ){
    echo '<section class="time-tracker bg-light padding-t-120 padding-b-120 post-animation"><div class="container">';
    echo '<div class="top-section text-center"><h6><span class="bg-purple">'.$allOne['heading'].'</span></h6>'.$allOne['sub_heading'].'</div>';    
    echo '<div class="trackRow dis-flex align-center">
    <div class="trackImg">'.pxlGetPtag($allOne['left_image']).'</div>';
    if( $allOne['cblock'] ){
        echo '<div class="trackContent">';
          foreach( $allOne['cblock'] as $row ){
            $hasListing = _containsLiTags( $row['content'] ) ? ' listing' : '';
            echo '<div class="row'.$hasListing.'">'.$row['content'].'</div>';
          }
        echo '</div>';
    }
    echo '</div>';

    echo '</div></section>';
    }      
    ?>
  
  <?php 
  /*
  1. Time : Done
  2. Reporting
  3. Project
  3. attendance
  */
  $proComp = get_field('project-comp');
  if( isset($proComp['required']) && ($proComp['required'] == "yes") ){
  echo '<section id="ws-compititors-tbl" class="compare-projects padding-t-120 padding-b-100">';  
  get_template_part( 'inc/features', $proComp['type'], ['title' => $proComp['heading'], 'body' => $proComp['content']] );
  echo '</section>';
  }  
  ?>

  <?php  
  //get_template_part('common/ws', 'pricing');
  $planCategory = get_post_meta( $post->ID, 'ws-pcat', true );    
  get_template_part('common/pricing', 'v4.0', ['plan' => $planCategory, 'elm-class' => "padding-t-120 bg-light padding-b-120"]);
  ?>

  <?php  
  $user_guide_section = get_field('user_guide_section');		
  if( isset( $user_guide_section['is_enabled'] ) && ($user_guide_section['is_enabled'] == "yes") ){ 
  ?>
  <section class="userguide padding-t-120">
    <div class="container">
      <div class="top-section">
        <h6><span class="bg-purple"><?php echo $user_guide_section['heading']; ?></span></h6>
        <h2><?php echo $user_guide_section['sub_heading']; ?></h2>
      </div>
      <div class="buyers-guide-section" id="div-buyer-guide">
        <div class="buyers-guide">
          <div class="buyers-guide-question" id="buyers-guide-question">
            <ul class="question-list">
              <?php 
                if( $user_guide_section['question_answer_repeater'] ){  $i = 1;
                foreach( $user_guide_section['question_answer_repeater'] as $row ) {
                	$image      = (isset($row['image_'])) ? $row['image_'] : false;
                	$active = ($i==1) ? "active" : "";
                ?>
              <li><a href="#ans_<?php echo $i; ?>" class="<?php echo $active; ?>"><?php echo $row['question']; ?></a>
              </li>
              <?php $i++; } } ?>
            </ul>
          </div>
          <div class="buyers-guide-answer-part" id="buyers-guide-answer-part">
            <?php 
              if( $user_guide_section['question_answer_repeater'] ){  $i = 1;
              foreach( $user_guide_section['question_answer_repeater'] as $row ) {
              	$image      = (isset($row['image_'])) ? $row['image_'] : false;
              	$active = ($i==1) ? "active" : "";
              ?>
            <div class="buyers-guide-answer ans_<?php echo $i; ?>" id="ans_<?php echo $i; ?>"> 
            <h3 class="guide-question"><?php echo $row['question']; ?>
                    </h3>      
              <div class="guide-answer">
                <?php echo $row['answer']; ?>
              </div>
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
if( isset( $faq['is_enabled'] ) && ($faq['is_enabled'] == "yes") ) :
?>  
<section class="faqsRow wfull for-heading-center padding-t-120 padding-b-120 post-animation">
  <div class="container">
    <div class="top-section text-center">
      <h6><span class="bg-purple "><?php echo $faq['heading']; ?></span></h6>
      <h2><?php echo $faq['sub_heading']; ?></h2>
    </div>
    <div class="flex_row">
      <div itemscope="" itemtype="https://schema.org/FAQPage">
        <div class="column">
          <?php 
          if( $faq['question_answer_repeater'] ){  $i = 1;
          foreach( $faq['question_answer_repeater'] as $row ) {
          $active = ($i <= 3) ? "open" : "";
          // 
          ?>
          <div class="faq-accordion-item-outer" itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
            <h3 itemprop="name"><?php echo $row['question'];?></h3>
            <div class="faq-accordion-content">
              <div itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                <div itemprop="text"><?php echo $row['answer'];?></div>
              </div>
            </div>
          </div>
          <?php $i++; }} ?>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>
<?php require_once get_template_directory() .'/common/blog.php'; ?>
<?php //get_template_part('common/home', 'testimonials'); ?>
<?php //require_once get_template_directory() .'/common/workstatus-journey.php';?>
<?php get_template_part('common/cmn', 'testimonial'); ?>
<?php get_template_part('common/cmn', 'globalrating'); ?>
<?php get_template_part('common/cmn', 'journey'); ?>
</main>
<?php get_footer(); ?>
<?php
/* 
Template Name: Common Pillar Page
Author : Nitin Baluni
*/
get_header();
global $ws_ctas, $RegLink, $LogLink, $post;
$thisPostID = $post->ID;
$pageMode = get_post_meta( $post->ID, 'ws-pagemode', true );
$app_page = ( $pageMode && ($pageMode == "app") ) ? true : false;

$bannerClass = 'hero-banner inner-banner-bg';
if( $app_page === false ){
$hasbannerThumb = get_field('banner-image');
if( $hasbannerThumb && !empty( $hasbannerThumb ) ){
  $bannerClass = 'inner-banner';
}
}
?>
<main class="site__content">
<?php //echo ($app_page) ? 'hero-banner inner-banner-bg' : 'inner-banner'; ?>  
<section class="<?php echo $bannerClass;  ?>">
    <?php //echo ($app_page) ? '<div class="bannerwrap">' : ''; ?>
    <div class="bannerwrap">
    <div class="container">
        <div class="inner-wrap">
            <?php the_content(); ?>
            
            
            <div class="actionBtn">
            <?php if( geoCTAcheck() === true ) : ?>
            <div>
            <a data-href="<?php echo $RegLink; ?>" href="javascript:void(0);" class="primary_btn1" 
            onclick="return get_ws_signupform(this);"><?php echo $ws_ctas['cta_text']; ?></a>
            <small>No credit card required</small>
            </div>
            <?php endif; ?>
            
            <div><a href="javascript:void(0)" onclick="call_demows();" class="primary_btn2">Book A Demo</a>
            <small>Get queries answered from experts</small>
            </div>                
            </div>
                         
            <?php if( !is_page( [4295, 4250] ) ) : ?>
            <?php require_once get_template_directory() . '/common/available-device.php'; ?>
            <?php require_once get_template_directory() . '/common/partners.php'; ?>            
            <?php endif; ?>

            <?php
            if( $app_page === false ) :
            $bannerThumb = get_field('banner-image');
            if( $bannerThumb ){
            if( $bannerThumb ){
                $bthumb = wsGetWebpSrcUrl( $bannerThumb['id'] );
            }else{
                $bthumb = get_bloginfo('template_url').'/assests/images/video-poster13.webp';
            }
            $cScreenSrc   = $bthumb;            
            $vdScreenshot = ' style="background: url('.$bthumb.'); 
            background-size: contain; background-repeat: no-repeat; background-position: center;"';            
            ?>
            <div class="video-wrap">
            <div class="videoSc" id="has-yt-video">
            <div class="inner">
                <div class="topVideo">
                <div id="myDIV" class="contbox2">
                <div class="videoWrapper">
                <?php 
                $bannerVideo = get_field('banner-video');
                if( $bannerVideo ){
                echo '<iframe id="video" class="videoIframe" allowfullscreen data-src="'.$bannerVideo.'"></iframe>';
                }
                ?>                
                <button class="videoPoster lazy-background wsbg-cover wsbg-img bg-trans" data-src="<?php echo $cScreenSrc; ?>" id="play-button">  
                Play video</button>
                </div>
                </div>
                </div>
            </div>
            </div>
            </div>
            <?php 
            }
            endif; 
            ?>
        </div>
    </div>
    <?php //echo ($app_page) ? '</div>' : ''; ?>
    </div>
</section>

<?php 
if( is_page(4295) ){
$productsInt = get_field('pro-int');
if( isset( $productsInt['is_enabled'] ) && ($productsInt['is_enabled'] == "yes") ) : 
$cardCount  = ( $productsInt['cards'] ) ? count( $productsInt['cards'] ) : 0; 
$cardColumn = ( $cardCount === 4 ) ? 'column' : 'column-three';
?>
<section class="<?php echo ( $cardCount === 4 ) ? 'four-columns p50' : 'one-solution list-icon p50'; ?>" id="acf-pro-int">
  <div class="container">
    <div class="top-section">
    <?php 
    if( !empty($productsInt['top_heading']) ){
      echo '<h6><span class="bg-purple">'.$productsInt['top_heading'].'</span></h6>';
    }
    ?>      
    <?php echo $productsInt['top_content']; ?>
    </div>
    <div class="flex_row">
    <?php 
    if( $productsInt['cards'] ){
        foreach( $productsInt['cards'] as $row ){
            echo '<div class="'.$cardColumn.'"><div class="box">';
            echo '<div class="bx-content">';
            if( $row['icon'] ){
                echo pxlGetPtag( $row['icon'] );
            }
            echo $row['content'];
            echo '</div>';
            if( $row['link'] ){
              echo '<a href="'.vc_siteurl($row['link']).'" class="view-more">Explore</a>';
            }
            echo '</div></div>';
        }
    }
    ?>        
    </div>
    <?php if( geoCTAcheck() === true ) : ?>
    <div class="mt80 btnSc">
    <?php echo wsDemoCta(); ?>
    </div>
    <?php endif; ?>
  </div>
</section>
<?php endif; 
}
?>

<?php 
$plApp = get_field( 'platform-apps' );
if( 
isset( $plApp['is_enabled'] ) && ($plApp['is_enabled'] == "yes") ){ 
?>
<section class="trackEm post-animation" id="acf-platform-apps">
  <div class="container">
    <div class="top-section">
      <?php 
      if( $plApp['heading'] ){
        echo '<h6><span class="bg-purple">'.$plApp['heading'].'</span></h6>';
      }
      echo $plApp['top-content'];
      ?>
    </div>
    <div class="trackRow align-center">
      <div class="trackImg">
        <?php 
        if( $plApp['image'] ){
        echo pxlGetPtag( $plApp['image'] );
        }
        ?>        
      </div>
      <?php 
      if( $plApp['cols'] ) :
      echo '<div class="trackContent">';
      foreach( $plApp['cols'] as $row ){
        echo '<div class="row">'.$row['text'].'</div>';
      }       
      echo '</div>';
      endif; 
      ?>      
    </div>
  </div>
</section>
<?php } ?>


<?php 
$worksInt = get_field('work_tools');
if( isset( $worksInt['is_enabled'] ) && ($worksInt['is_enabled'] == "yes") ) : 
$cardCount  = ( $worksInt['cards'] ) ? count( $worksInt['cards'] ) : 0; 
$cardColumn = ( $cardCount === 4 ) ? 'column bgwhite' : 'column-three';
?>
<section class="<?php echo ( $cardCount === 4 ) ? 'four-columns  bglight' : 'one-solution list-icon'; ?>" id="worksInts">
  <div class="container">
    <div class="top-section">
    <?php 
    if( !empty($worksInt['top_heading']) ){
      echo '<h6><span class="bg-purple">'.$worksInt['top_heading'].'</span></h6>';
    }
    ?>      
    <?php echo $worksInt['top_content']; ?>
    </div>
    <div class="flex_row">
    <?php 
    if( $worksInt['cards'] ){
        foreach( $worksInt['cards'] as $row ){
            echo '<div class="'.$cardColumn.'"><div class="box">';
            echo '<div class="bx-content">';
            if( $row['icon'] ){
                echo pxlGetPtag( $row['icon'] );
            }
            echo $row['content'];
            echo '</div>';
            if( $row['link'] ){
              echo '<a href="'.vc_siteurl($row['link']).'" class="view-more">Explore</a>';
            }
            echo '</div></div>';
        }
    }
    ?>        
    </div>
  </div>
</section>
<?php endif; 
?>


<?php 
$smrtMgt          = get_field('smart-management');
$industrySection  = get_field( 'ind-section' );
$teamEmp          = get_field('team-emp');
if( 
  (isset($smrtMgt['is_enabled']) && ($smrtMgt['is_enabled'] == "yes")) ||
  (isset($industrySection['is_enabled']) && ($industrySection['is_enabled'] == "yes")) ||
  (isset($teamEmp['is_enabled']) && ($teamEmp['is_enabled'] == "yes"))
) : 
?>
<section class="step-sec">
  <div class="container">
    <?php 
    if( isset( $smrtMgt['is_enabled'] ) &&  ($smrtMgt['is_enabled'] == "yes") ) : 
    ?>
    <div class="step-row flex_row" id="acf-smart-management">
      <div class="image-col">
        <?php 
        if( $smrtMgt['image'] ){
            echo pxlGetPtag( $smrtMgt['image'] );
        }else{ ?>
        <picture>
          <source type="image/webp" srcset="<?php bloginfo('template_url'); ?>/assests/images/step-img01.webp">
          <source type="image/png" srcset="<?php bloginfo('template_url'); ?>/assests/images/step-img01.png">
          <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/images/step-img01.png" alt="WS" width="549"
            height="523">
        </picture>
        <?php } ?>
      </div>
      <div class="content-col">
        <div class="top-section">
          <h6><span class="bg-purple"><?php echo $smrtMgt['top-heading']; ?></span></h6>
          <?php echo $smrtMgt['content']; ?>
        </div>
      </div>
    </div>
    <?php endif; ?>

    <?php 
    if( isset( $industrySection['is_enabled'] ) && ($industrySection['is_enabled'] == "yes") ) : 
    $hasStepCon = $industrySection['content'];
    if( !empty($hasStepCon) ) :
    ?>
    <div class="step-row flex_row" id="acf-ind-section">
    <div class="content-col">
        <div class="top-section">
          <?php 
          if( !empty( $industrySection['top-heading'] ) ){
            echo '<h6><span class="bg-purple">'.$industrySection['top-heading'].'</span></h6>';
          }
          ?>
          <?php 
          echo $industrySection['content']; 
          $linkText = ( isset($industrySection['link_text']) && !empty( $industrySection['link_text'] ) ) ? 
          $industrySection['link_text'] : false;
          $alink    = (isset($industrySection['link']) && !empty($industrySection['link'])) ? $industrySection['link'] : false;
          if( $linkText && $alink ){
            echo '<p><a class="read-more" href="'.$alink.'">'.$linkText.'</a></p>';
          }
          ?>          
        </div>
        </div>
        <div class="image-col">
        <?php 
        if( $industrySection['image'] ){
            echo pxlGetPtag( $industrySection['image'] );
        }
        ?>
        </div>
    </div>
    <?php endif; endif; ?>

    <?php 
    if( isset( $teamEmp['is_enabled'] ) && ($teamEmp['is_enabled'] == "yes") ) : 
    ?>
    <div class="step-row flex_row" id="acf-team-emp">
      <div class="image-col">
        <?php 
        if( $teamEmp['image'] ){
            echo pxlGetPtag( $teamEmp['image'] );
        }else{ ?>
            <picture>
            <source type="image/webp" srcset="<?php bloginfo('template_url'); ?>/assests/images/step-img02.webp">
            <source type="image/png" srcset="<?php bloginfo('template_url'); ?>/assests/images/step-img02.png">
            <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/images/step-img02.png" alt="WS" width="550"
            height="478">
            </picture>
        <?php } ?>
        
      </div>
      <div class="content-col">
        <div class="top-section">
          <h6><span class="bg-purple"><?php echo $teamEmp['top-heading']; ?></span></h6>
          <?php echo $teamEmp['content']; ?>
        </div>
      </div>
    </div>
    <?php endif; ?>
  </div>
</section>
<?php endif; ?>

<?php 
$features = get_field('features-col');
if( isset( $features['is_enabled'] ) &&  $features['is_enabled'] == "yes" ) :
?>
<!-- Feature Page Section Starts -->
<section class="middle-section feature-section">
<div class="item" id="ws-silent_tracking_section">
<div class="container">
  <div class="top-section">
    <h6><span class="bg-purple"><?php echo $features['top-heading']; ?></span></h6>
    <?php echo $features['content']; ?>
  </div>
  <div class="feature-section-col">
  <?php 
  $ftSections = $features['sections'];
  if( $ftSections ) {
  $randIndx = [0,20,40,60,80,90];
  $ft = 0;  
  foreach( $ftSections as $section ) :
  $ft++;
  ?>
  <div class="accr-row <?php echo ($ft > 1) ? 'mt80' : ''; ?>" id="active_Current_Tabs<?php echo $ft ?>">
    <div class="flex_row">
      <div class="column-left">
      <?php 
      $iRow = $randIndx[$ft];
      foreach( $section['row-section'] as $row ){
        $image    = $row['image'];
        $active   = ( $iRow == $randIndx[$ft] ) ? "active" : "";
        ?>
        <div class="all-content">
        <div class="text-column <?php echo $active; ?> <?php echo (strpos($row['text'], '<ul') !== false) ? ' listing ' : ''; ?>" 
        id="t<?php echo $iRow; ?>" data-section="active_Current_Tabs<?php echo $ft ?>">
        <?php echo $row['text'];?>
        </div>


        <div class="mob-image">
        <?php 
        if( $image ){
        echo '<picture>
        '.getPxlWebpURL($image['ID']).'
        <source type="'.$image['mime_type'].'" srcset="'.$image['url'].'">
        <img loading="lazy" src="'.$image['url'].'" alt="'.$image['title'].'" width="'.$image['width'].'" 
        height="'.$image['height'].'"> 
        </picture>';
        } ?>
        </div>
        </div>  
        <?php 
        $iRow++;
      } 
      ?>
      </div>

      <?php 
      if( $section['row-section'] ){
        echo '<div class="column-right">';
        $iRow = $randIndx[$ft];
        foreach( $section['row-section'] as $row ){ 
          $active = ( $iRow == $randIndx[$ft] ) ? "active" : "";
          if( $row['image'] ){
          echo '<picture class="page '.$active.'" id="p'.$iRow.'" >
          '.getPxlWebpURL($row['image']['ID']).'
          <source type="'.$row['image']['mime_type'].'" srcset="'.$row['image']['url'].'">
          <img loading="lazy" src="'.$row['image']['url'].'" alt="'.$row['image']['title'].'" 
          width="'.$row['image']['width'].'" height="'.$row['image']['height'].'"> 
          </picture>';
          }
          $iRow++;
        }
        echo '</div>';  
      } 
      ?>
    </div>
  </div>  
  <?php 
  endforeach; 
  }
  ?>
  </div>
  <?php if( geoCTAcheck() === true ) : ?>
  <div class="mt40 btnSc">
    <?php echo wsDemoCta(); ?>
  </div>
  <?php endif; ?>
</div>
</div>
</section>
<!-- Feature Page Section End -->          
<?php endif; ?>

<?php 
$industrySection = get_field( 'ind-section' );
if( isset( $industrySection['is_enabled'] ) && ($industrySection['is_enabled'] == "yes") ) : 
$in_industries  = $industrySection['serv-industries'];
$cards          = $in_industries['cards'];
if( $cards && count( $cards ) > 0 ) :
?>
<section class="one-solution list-icon p50" id="acf-serv-industries">
    <div class="container">
    <div class="top-section">
    <?php 
    if( !empty( $in_industries['top_text'] ) ){
      echo '<h6><span class="bg-purple">'.$in_industries['top_text'].'</span></h6>';
    }
    ?>      
    <?php echo $in_industries['top-content']; ?>
    </div>
    <?php
    if( $cards ){
    echo '<div class="flex_row">';
    foreach( $cards as $row ){
    echo '<div class="column-three"><div class="box">';
    echo '<div class="bx-content">';
    if( $row['icon'] ){
        echo pxlGetPtag( $row['icon'] );
    }
    echo $row['text'];
    echo '</div>';

    if( $row['link'] ){
        echo '<a href="'.$row['link'].'" class="view-more">Explore</a>';
    }    
    echo '</div></div>';
    }
    echo '</div>';    
    }
    ?>
    <div class="mt80 btnSc"><?php echo wsDemoCta(); ?></div>
    </div>
</section>
<?php endif; endif; ?>

<?php 
if( is_page(4285) ){
$productsInt = get_field('pro-int');
if( isset( $productsInt['is_enabled'] ) && ($productsInt['is_enabled'] == "yes") ) :   
  echo '<section class="one-solution p50 list-icon">';
  echo '<div class="container">';
    echo '<div class="top-section">';
    if( !empty($productsInt['top_heading']) ){
      echo '<h6><span class="bg-purple">'.$productsInt['top_heading'].'</span></h6>';
    }
    echo $productsInt['top_content'];        
    echo '</div>';
    echo '<div class="usecase-tabs"><div class="tab-row">';
    echo '<nav id="tabs" class="tab-nav">
    <ul>
    <li class="active">
    <a href="#tab01">
    <span class="icon">
    <img class="show" loading="lazy" src="'.get_bloginfo('template_url').'/assests/images/tab-h01.svg" alt="Icon" width="30" height="30"></span>Time & Attendance</a>
    </li>
    <li><a href="#tab02">
    <span class="icon active"><img class="show" loading="lazy" src="'.get_bloginfo('template_url').'/assests/images/tab-h02.svg" alt="Icon" width="30" height="30">
    </span>Workforce Management</a>
    </li>
    <li class=""><a href="#tab03">  <span class="icon"><img class="show" loading="lazy" src="'.get_bloginfo('template_url').'/assests/images/tab-h03.svg" alt="Icon" width="30" height="30"></span>Project and Task Management</a>
    </li>
    <li class=""><a href="#tab04">  <span class="icon"><img class="show" loading="lazy" src="'.get_bloginfo('template_url').'/assests/images/tab-h04.svg" alt="Icon" width="30" height="30"></span>Reporting & Analytics</a>
    </li>
    </ul>
    </nav>';
    echo '<div id="tab-contents" class="bcontents">';
    $cat  = ['cat-1', 'cat-2', 'cat-3', 'cat-4'];
    $c    = 0;
    foreach ($cat as $ca){ $c++;
      $activeTb = ( $c == 1 ) ? 'active' : '';
      echo '<div id="tab0'.$c.'" class="tab-contents '.$activeTb.'"><div class="flex_row">';      
      if( $productsInt['cards'] ){
          foreach( $productsInt['cards'] as $row ){
              if( $row['cat'] == $ca ){
                echo '<div class="column-three"><div class="box">';
                echo '<div class="bx-content">';
                if( $row['icon'] ){
                    echo pxlGetPtag( $row['icon'] );
                }
                echo $row['content'];
                echo '</div>';
                if( $row['link'] ){
                  echo '<a href="'.vc_siteurl($row['link']).'" class="view-more">Explore</a>';
                }
                echo '</div></div>';  
              }
              
          }
      }
      echo '</div></div>';    
    }
    echo '</div>';
    echo '</div></div>';
    if( geoCTAcheck() === true ){
      echo '<div class="mt80 btnSc">'.wsDemoCta().'</div>';
    }
  echo '</div>';
  echo '</section>';
endif;
}else{
if( !is_page(4295) ) :
$productsInt = get_field('pro-int');
if( isset( $productsInt['is_enabled'] ) && ($productsInt['is_enabled'] == "yes") ) : 
$cardCount  = ( $productsInt['cards'] ) ? count( $productsInt['cards'] ) : 0; 
$cardColumn = ( $cardCount === 4 ) ? 'column' : 'column-three';
?>
<section class="<?php echo ( $cardCount === 4 ) ? 'four-columns' : 'one-solution list-icon p50'; ?>" id="acf-pro-int">
  <div class="container">
    <div class="top-section">
    <?php 
    if( !empty($productsInt['top_heading']) ){
      echo '<h6><span class="bg-purple">'.$productsInt['top_heading'].'</span></h6>';
    }
    ?>      
    <?php echo $productsInt['top_content']; ?>
    </div>
    <div class="flex_row">
    <?php 
    if( $productsInt['cards'] ){
        foreach( $productsInt['cards'] as $row ){
            echo '<div class="'.$cardColumn.'"><div class="box">';
            echo '<div class="bx-content">';
            if( $row['icon'] ){
                echo pxlGetPtag( $row['icon'] );
            }
            echo $row['content'];
            echo '</div>';
            if( $row['link'] ){
              echo '<a href="'.vc_siteurl($row['link']).'" class="view-more">Explore</a>';
            }
            echo '</div></div>';
        }
    }
    ?>        
    </div>
    <?php if( geoCTAcheck() === true ) : ?>
    <div class="mt80 btnSc">
    <?php echo wsDemoCta(); ?>
    </div>
    <?php endif; ?>
  </div>
</section>
<?php 
endif;
endif;
}
?>


<?php 
$getStart = get_field('get-started');
if( isset( $getStart['is_enabled'] ) && ($getStart['is_enabled'] == "yes") ) : 
//print_r($getStart);  
?>
<section class="timeline" id="ws-get-started">
  <div class="container">
    <div class="top-section">
      <h6><span class="bg-purple"><?php echo $getStart['heading-top']; ?></span></h6>
      <h2><?php echo $getStart['heading']; ?></h2>
      <?php 
      $hContent = $getStart['heading-content'];
      if( $hContent ){
        echo '<p>'.$hContent.'</p>';
      }      
      ?>
    </div>
    <div class="trackRow">
      <div class="trackImg">
        <?php 
        if( $getStart['image'] ){
            echo pxlGetPtag( $getStart['image'] );
        }
        ?>        
      </div>
      <div class="trackContent">
        <?php 
        $steps = $getStart['steps'];
        if( $steps ){
            foreach( $steps as $step ) {
            echo '<div class="row">';
            echo $step['content'];
            echo '</div>';
            }
        }
        ?>        
      </div>
    </div>
  </div>
</section>
<?php endif; ?>

<?php echo getCommonSolutions( $thisPostID, 'list-icon ws-cmn-sol', false ); ?>
<?php echo getEmpLeadership( $thisPostID, '', false ); ?>

<?php 
$wsDevices = get_field('ws-cmn-devices');
if( $wsDevices === 'yes' ) :
?>
<section class="wsMobile whitetxt">
  <?php require_once get_template_directory() . '/common/workstatus-device.php'; ?>
</section>
<?php endif; ?>

<?php  
$faq = get_field('faq');
if( isset( $faq['is_enabled'] ) && ($faq['is_enabled'] == "yes") ) :
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
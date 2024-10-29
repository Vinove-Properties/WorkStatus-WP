<?php 
/* 
Template Name: Tools Comparison - Template 
Author : Nitin Baluni
*/
get_header();
$bannerCol = get_field('ws-banner');
?>
<main class="site__content">
<section class="hero-banner">
 <div class="container">
   <div class="inner-wrap">
      <?php 
      if( isset($bannerCol['comp-logo']) && !empty($bannerCol['comp-logo']) ){
      echo '<div class="alter-image">';
      echo '<picture class="desktop"><img loading="lazy" src="'.$bannerCol['comp-logo']['url'].'" alt="Alternative" width="'.$bannerCol['comp-logo']['width'].'" height="'.$bannerCol['comp-logo']['height'].'"></picture>
      <picture class="mobile"><img loading="lazy" src="'.$bannerCol['comp-logo']['url'].'" alt="Alternative" width="'.$bannerCol['comp-logo']['width'].'" height="'.$bannerCol['comp-logo']['height'].'"></picture>';
      echo '</div>'; 
      }else{ ?>
      <div class="alter-image">
      <?php 
      if( isset($bannerCol['cl-one']) && !empty($bannerCol['cl-one']) ){
      echo '<picture><img loading="lazy" src="'.$bannerCol['cl-one']['url'].'" alt="'.$bannerCol['cl-one']['alt'].'" 
      width="'.$bannerCol['cl-one']['width'].'" height="'.$bannerCol['cl-one']['height'].'"></picture>';
      }
      ?>
      <picture>
       <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/images/verse.svg" alt="Alternative" 
       width="50" height="50">
      </picture>
      <?php 
      if( isset($bannerCol['cl-two']) && !empty($bannerCol['cl-two']) ){
      echo '<picture><img loading="lazy" src="'.$bannerCol['cl-two']['url'].'" alt="'.$bannerCol['cl-two']['alt'].'" 
      width="'.$bannerCol['cl-two']['width'].'" height="'.$bannerCol['cl-two']['height'].'"></picture>';
      }
      ?>
      <picture>
       <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/images/verse.svg" alt="Alternative" width="50" 
       height="50">
      </picture>
      <picture>
       <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/images/compare-03.svg" alt="Alternative" 
       width="200" height="27">
      </picture>
      </div>
      <?php } ?> 

     <?php the_content(); ?>
   </div>
 </div>
</section>

<?php 
$wsOffer = get_field('ws-offers');
if( isset($wsOffer['is_enabled']) && ($wsOffer['is_enabled'] == "yes") ) :
?>
<section class="benifits-section tools-section">
    <div class="container">
     <div class="top-section"><?php echo $wsOffer['content']; ?></div>
     <?php 
     if( $wsOffer['cards'] ){
       echo '<div class="flex_row">';
       foreach ( $wsOffer['cards'] as $card ){
       echo '<div class="column-three">
         '.pxlGetPtag($card['image']).'
         '.$card['content'].'       
       </div>';   
       }
     echo '</div>'; 
     }
     ?>
    </div>
</section>   
<?php endif; ?>

<?php 
$compCol = get_field('Comp-table');
if( isset($compCol['required']) && ($compCol['required'] == "yes") ) :
$tbl = $compCol['cards'];  
?>
<section class="ws-tabtop">
  <div class="container"><div class="top-section"><?php echo $compCol['content'] ?></div></div>
</section>

<section class="ws-table show-all" id="compare-table">
  <div class="container">
    <div class="scroll-compare">
    <div class="table-block">
      <div class="div-block-top">
        <div class="logo-ws logovs"><h2>Features</h2></div>
        <div class="logo-tb logovs">
          <?php 
          if( isset($compCol['t1-logo']) && !empty($compCol['t1-logo']) ){
          echo '<picture><img class="desktop" loading="lazy" src="'.$compCol['t1-logo']['url'].'" 
          alt="'.$compCol['t1-logo']['alt'].'" 
          width="'.$compCol['t1-logo']['width'].'" height="'.$compCol['t1-logo']['height'].'"></picture>';
          }

          // if( isset($compCol['t1-logom']) && !empty($compCol['t1-logom']) ){
          // echo '<picture><img class="mobile" loading="lazy" src="'.$compCol['t1-logom']['url'].'" 
          // alt="'.$compCol['t1-logom']['alt'].'" 
          // width="25" height="25"></picture>';
          // }

          echo '<div class="price">'.$compCol['t1-pricing'].'</div>';
          ?>          
        </div>
        <div class="logo-tb logovs">
          <?php 
          if( isset($compCol['t2-logo']) && !empty($compCol['t2-logo']) ){
          echo '<picture><img class="desktop" loading="lazy" src="'.$compCol['t2-logo']['url'].'" 
          alt="'.$compCol['t2-logo']['alt'].'" 
          width="'.$compCol['t2-logo']['width'].'" height="'.$compCol['t2-logo']['height'].'"></picture>';
          }

          // if( isset($compCol['t2-logom']) && !empty($compCol['t2-logom']) ){
          // echo '<picture><img class="mobile" loading="lazy" src="'.$compCol['t2-logom']['url'].'" 
          // alt="'.$compCol['t2-logom']['alt'].'" 
          // width="25" height="25"></picture>';
          // }
          echo '<div class="price">'.$compCol['t2-pricing'].'</div>';
          ?>
        </div>
        <div class="logo-tb logovs">
          <?php 
          if( isset($compCol['t3-logo']) && !empty($compCol['t3-logo']) ){
          echo '<picture><img class="desktop" loading="lazy" src="'.$compCol['t3-logo']['url'].'" 
          alt="'.$compCol['t3-logo']['alt'].'" 
          width="'.$compCol['t3-logo']['width'].'" height="'.$compCol['t3-logo']['height'].'"></picture>';
          }
          echo '<div class="price">'.$compCol['t3-pricing'].'</div>';
          ?>
        </div>
        <div class="logo-tb logovs">
          <?php 
          if( isset($compCol['t4-logo']) && !empty($compCol['t4-logo']) ){
          echo '<picture><img class="desktop" loading="lazy" src="'.$compCol['t4-logo']['url'].'" 
          alt="'.$compCol['t4-logo']['alt'].'" 
          width="'.$compCol['t4-logo']['width'].'" height="'.$compCol['t4-logo']['height'].'"></picture>';
          }
          echo '<div class="price">'.$compCol['t4-pricing'].'</div>';
          ?>
        </div>
        <div class="logo-tb logovs">
          <picture>
            <img class="desktop" loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/images/tablelogo-03.svg" 
            alt="WorkStatus" width="160" height="20">
          </picture>
          <?php echo '<div class="price">'.$compCol['ws-pricing'].'</div>'; ?>
        </div>
      </div>
      <?php 
      if( $tbl ){
        //echo count( $tbl );
        $lCounr = count($tbl);
        $c = 0;
        foreach( $tbl as $data ){ $c++;
          $postFix    = ($lCounr == $c) ? '<span class="small-font">(Per user / Month)</span>' : '';
          $lstPricing = ($lCounr == $c) ? '<strong>Pricing</strong>' : $data['name'];
          $lstClass   = ($lCounr == $c) ? 'lst-elm' : '';
          
          $colOne = ($lCounr == $c) ? '<strong>'._compTableValue($data['tl-1']).'</strong>' : _compTableValue($data['tl-1']);
          $colTwo = ($lCounr == $c) ? '<strong>'._compTableValue($data['tl-2']).'</strong>' : _compTableValue($data['tl-2']);
          $colThr = ($lCounr == $c) ? '<strong>'._compTableValue($data['tl-3']).'</strong>' : _compTableValue($data['tl-3']);
          $colFor = ($lCounr == $c) ? '<strong>'._compTableValue($data['tl-4']).'</strong>' : _compTableValue($data['tl-4']);
          $colWs  = ($lCounr == $c) ? '<strong>'._compTableValue($data['ws']).'</strong>' : _compTableValue($data['ws']);

          echo '<div class="table-row">
          <div class="ws-column ws-lftcolumn">
          <p>'.$lstPricing.'</p>
          </div>
          <div class="ws-column">'.$colOne.$postFix.'</div>
          <div class="ws-column">'.$colTwo.$postFix.'</div>
          <div class="ws-column">'.$colThr.$postFix.'</div>
          <div class="ws-column">'.$colFor.$postFix.'</div>
          <div class="ws-column">'.$colWs.$postFix.'</div>
          </div>';
        }
      }
      ?>
    </div>
      <div class="view-more margin-t-50 text-center">
        <a href="javascript:void(0);" onclick="_morecompTable();" class="">
        <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/images/scroll-img.svg" 
        alt="Workstatus" width="34" height="34">
        </a>
      </div>
    </div>    
    <!--<div class="mt40 btnSc"><?php echo wsDemoCtaCP(); ?></div>-->
  </div>
</section>
<?php endif; ?>

<?php 
$wsFeatures = get_field('more-fetures');
if( isset($wsFeatures['is_enabled']) && ($wsFeatures['is_enabled'] == "yes") ) :
?>
<section class="advanced-feature">
  <div class="container">
    <div class="top-section"><?php echo $wsFeatures['content']; ?></div>
    <?php 
    if( $wsFeatures['cards'] ){
      echo '<div class="flex_row">';
      foreach( $wsFeatures['cards'] as $row ){
        echo '<div class="column-two">'.pxlGetPtag($row['icon']).''.$row['content'].'</div>';
      }
      echo '</div>';  
    }
    ?>
  </div>
</section>
<?php endif; ?>


<?php 
$mcBLocks = get_field('mc-block');
if( isset($mcBLocks['required']) && ($mcBLocks['required'] == "yes") ){
  if( isset( $mcBLocks['block'] ) && is_array( $mcBLocks['block'] ) && (count($mcBLocks['block']) > 0) ){
    echo '<section class="trackEm-container">';
      foreach( $mcBLocks['block'] as $row ){
      $pxlImage = ( $row['image'] ) ? pxlGetPtag($row['image']) : '';
      echo '<section class="trackEm"><div class="container">';
      echo '<div class="top-section">'.$row['content'].'</div>';
      echo '<div class="trackRow"><div class="trackImg">'.$pxlImage.'</div>';
      if( $row['ls-blocks'] ){
        echo '<div class="trackContent">';
        foreach( $row['ls-blocks'] as $block ){
          echo '<div class="row">'.$block['cont'].'</div>';
        }
        echo '</div>';
      }
      echo '</div>';
      echo '</div></section>';    
      }
    echo '</section>';
  }
}
?>

<?php  
$user_guide_section = get_field('user_guide_section');
if( $user_guide_section ) :
$isEnable = $user_guide_section['is_enabled'];
if( $isEnable == "yes" ){ 
?>
<section class="userguide">
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
            if( $user_guide_section['qna'] ){  $i = 1;
            foreach( $user_guide_section['qna'] as $row ) {
            $active = ($i==1) ? "active" : "";
            ?>
            <li><a href="#ans_<?php echo $i; ?>" class="<?php echo $active; ?>"><?php echo $row['question']; ?></a>
            </li>
            <?php $i++; } } ?>
          </ul>
        </div>
        <div class="buyers-guide-answer-part" id="buyers-guide-answer-part">
        <?php 
        if( $user_guide_section['qna'] ){  $i = 1;
        foreach( $user_guide_section['qna'] as $row ) {
        $active = ($i==1) ? "active" : "";
        ?>
        <div class="buyers-guide-answer ans_<?php echo $i; ?>" id="ans_<?php echo $i; ?>">
        <h3 class="guide-question"><?php echo $row['question']; ?></h3>
        <div class="guide-answer"><?php echo $row['answer']; ?></dsiv>
        </div>
        <?php $i++; } } ?>                  
        </div>
      </div>
    </div>
  </div>
</section>
<?php } endif; ?>

<?php 
$useCases = get_field('use-cases');
if( isset($useCases['required']) && ($useCases['required'] == "yes") ) :
?>
<section class="section-numbers">
<div class="container">
  <div class="top-section"><?php echo $useCases['content']; ?></div>
  <?php 
  if( $useCases['cards'] ){
    echo '<div class="number-row">';
    foreach( $useCases['cards'] as $card ){
    echo '<div class="number-col">
      <div class="card-image">'.pxlGetPtag($card['image']).'</div>
      <h2>'.$card['percentage'].'</h2>
      <div class="is-grey">'.$card['title'].'</div>
      <p>'.$card['text'].'</p>
      <a href="'.$card['link'].'" class="btn">'.$card['link-txt'].'</a>
    </div>';
    }
    echo '</div>';
  }
  ?>
  <div class="ctasec mt100"><?php echo wsDemoCtaCP(); ?></div>
</div>
</section>
<?php endif; ?>



<?php 
$ws_services = get_field('why-ws');
if( isset( $ws_services['required'] ) && ( $ws_services['required'] == "yes" ) ) :
?>
<section class="middle-section feature-section">
  <div class="item" id="ws-silent_tracking_section">
    <div class="container">
      <div class="top-section"><?php echo $ws_services['content']; ?></div>
      <?php 
      $services = $ws_services['fetures'];
      if( $services ){
      ?>
      <div id="active_Current_Tabs_ws_services">
        <div class="flex_row">
          <div class="column-right">
            <?php 
              $iRow = 777;
              foreach( $services as $row ){ 
              $active = ( $iRow == 777 ) ? "active" : "";
              if( $row['image'] ){
              echo pxlGetPtag( $row['image'], $row['image']['title'], "page ".$active, "p".$iRow );              
              }
              $iRow++;
              } 
              ?>
          </div>
          <div class="column-left">
            <?php 
              $iRow = 777;
              foreach( $services as $row ){
              $active = ( $iRow == 777 ) ? "active" : "";  
              $image = $row['image'];
              ?>
            <div class="all-content">
              <div class="text-column <?php echo $active; ?>" id="t<?php echo $iRow; ?>" data-section="active_Current_Tabs_ws_services">
              <?php echo $row['content']; ?>
              </div>
              <div class="mob-image">
                <?php 
                if( $image ){
                  echo pxlGetPtag( $image );
                } 
                ?>
              </div>
            </div>
            <?php $iRow++; } ?>
          </div>
        </div>
      </div>
      <?php } ?>        
      <div class="ctasec mt100"><?php echo wsDemoCtaCP(); ?></div>        
    </div>
  </div>
</section>
<?php endif; ?>


<?php  
$faq = get_field('faq');
if( isset($faq['is_enabled']) && ($faq['is_enabled'] == "yes") ) :
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
<?php get_template_part('common/home', 'testimonials', ['bg' => 'none']); ?>
<?php require_once get_template_directory() .'/common/all-brands.php';?>
<?php require_once get_template_directory() .'/common/workstatus-journey-straight.php';?>
</main>
<?php get_footer(); ?>
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

<section class="ws-table">
  <div class="container">
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

          if( isset($compCol['t1-logom']) && !empty($compCol['t1-logom']) ){
          echo '<picture><img class="mobile" loading="lazy" src="'.$compCol['t1-logom']['url'].'" 
          alt="'.$compCol['t1-logom']['alt'].'" 
          width="25" height="25"></picture>';
          }

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

          if( isset($compCol['t2-logom']) && !empty($compCol['t2-logom']) ){
          echo '<picture><img class="mobile" loading="lazy" src="'.$compCol['t2-logom']['url'].'" 
          alt="'.$compCol['t2-logom']['alt'].'" 
          width="25" height="25"></picture>';
          }
          echo '<div class="price">'.$compCol['t2-pricing'].'</div>';
          ?>
        </div>
        <div class="logo-tb logovs">
          <picture>
            <img class="desktop" loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/images/tablelogo-03.svg" 
            alt="WorkStatus" width="160" height="20">
          </picture>
          <picture>
            <img class="mobile" loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/images/tablm-03.svg" 
            alt="WorkStatus" width="25" height="25">
          </picture>
          <?php echo '<div class="price">'.$compCol['ws-pricing'].'</div>'; ?>
        </div>
      </div>
      <?php 
      if( $tbl ){
        foreach( $tbl as $data ){
          $colOne = _compTableValue( $data['tl-1'] );
          $colTwo = _compTableValue( $data['tl-2'] );
          $colWs  = _compTableValue( $data['ws'] );
          echo '<div class="table-row">
          <div class="ws-column ws-lftcolumn">
          <p>'.$data['name'].'</p>
          </div>
          <div class="ws-column">'.$colOne.'</div>
          <div class="ws-column">'.$colTwo.'</div>
          <div class="ws-column">'.$colWs.'</div>
          </div>';
        }
      }
      ?>
    </div>
    <div class="mt40 btnSc"><?php echo wsDemoCtaCP(); ?></div>
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

<section class="wsMobile whitetxt">
<?php require_once get_template_directory() .'/common/workstatus-device.php';?>
</section>
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
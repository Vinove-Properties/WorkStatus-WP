<?php 
/*
Template Name: Home Page - V4.0 Template

*/ 
get_header();
global $ws_ctas, $RegLink, $LogLink;	
?>
<main class="site__content">
<section class="banner-section">
<div class="home-section">
  <div class="container">
    <div class="flex_row">
      <div class="column column-content">
        <h1>One Platform <span class="highlight">Endless Efficiency</span></h1>
        <p>Simplify project management, time tracking, and attendance management.</p>
      </div>
      <div class="column videoSc" id="has-yt-video">
        <div class="inner">
          <button id="myBtn">Open Modal<div class="playsc"><span class="playicon"></span></div></button>
          <div class="topVideo srp-1">
            <div id="myDIV" class="contbox2">
              <div class="videoWrapper js-videoWrapper">
                <div class="videoPopup">
                  <div id="contentPopup" class="popup-wrapper">
                    <div class="popWrap">
                      <div class="popup-content">
                        <span class="close"></span>
                        <iframe id="video" class="videoIframe js-videoIframe" allowfullscreen
                          data-src="https://www.youtube.com/embed/zMtAs7s3CmU?enablejsapi=1&html5=1&mute=1">
                        </iframe>
                      </div>
                    </div>
                  </div>
                </div>
                <button style="background-image: url(<?php bloginfo('template_url'); ?>/version-2.0/assests/images/homepage-poster.svg)" class="videoPoster lazy-background nb-bg" id="play-button">Play video</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>  
<section class="trusted-by padding-t-70 padding-b-70">
  <div class="container">
    <div class="logo-heading">
      <h4><span>Trusted by startups and Fortune <strong>500</strong>    companies</span></h4>
    </div>
    <div class="trusted-flex">
      <div class="trusted-card">
        <picture>
          <img  loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/startup-01.svg" alt="trusted" width="178" height="41"> 
        </picture>
      </div>
      <div class="trusted-card">
        <picture>
          <img  loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/startup-02.svg" alt="trusted" width="34" height="34">
        </picture>
      </div>
      <div class="trusted-card">
        <picture>
          <img  loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/startup-03.svg" alt="trusted" width="127" height="34">
        </picture>
      </div>
      <div class="trusted-card">
        <picture>
          <img  loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/startup-04.svg" alt="trusted" width="157" height="44">
        </picture>
      </div>
      <div class="trusted-card">
        <picture>
          <img  loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/startup-05.svg" alt="trusted" width="187" height="29">
        </picture>
      </div>
      <div class="trusted-card">
        <picture>
          <img  loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/startup-06.svg" alt="trusted" width="149" height="22">
        </picture>
      </div>
    </div>
    <div class="actionBtn"><?php echo cmnBannerCta(); ?></div>
  </div>
  </section>
  <section class="business-tab bg-light padding-t-120 padding-b-120">
<div class="container">
<div class="top-section">
<h6><span class="bg-purple">Data Driving Results</span></h6>
<h2>Strategic Decisions with Data-Driven Insights</h2>
<p>Unlock valuable insights with detailed dashboards, productivity reports, and location analytics</p>
</div>
<div class="feature-tabs">
<div class="tab-row">
<nav id="tabs" class="tab-nav">
<ul>
  <li class="active"><a href="#tab01">
    <span class="icon"><img class="show"  loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/tb01.svg" alt="Icon" width="16" height="18"><img class="hide"  loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/tb01-hover.svg" alt="Icon" width="16" height="18">
    </span>
    Time Tracking</a>
  </li>
  <li><a href="#tab02">  <span class="icon"><img class="show"  loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/tb01.svg" alt="Icon" width="16" height="18"><img class="hide"  loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/tb01-hover.svg" alt="Icon" width="16" height="18">
    </span>
    Productivity Management</a>
  </li>
  <li><a href="#tab03"><span class="icon"><img class="show"  loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/tb01.svg" alt="Icon" width="16" height="18"><img class="hide"  loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/tb01-hover.svg" alt="Icon" width="16" height="18">
    </span>
    Project & Task Management</a>
  </li>
  <li><a href="#tab04"> <span class="icon"><img class="show"  loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/tb01.svg" alt="Icon" width="16" height="18"><img class="hide"  loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/tb01-hover.svg" alt="Icon" width="16" height="18">
    </span>
    Attendance Tracking</a>
  </li>
</ul>
</nav>
<div id="tab-contents" class="bcontents">
<div id="tab01" class="tab-contents active">
  <div class="dis-flex">
    <div class="content-box">
      <picture>
        <source type="image/webp" srcset="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/data-driven.png">
        <source type="image/png" srcset="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/data-driven.png">
        <img loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/data-driven.png" alt="Tab Image" width="724" height="646">
      </picture>
    </div>
  </div>
</div>
<div id="tab02" class="tab-contents">
  <div class="dis-flex">
    <div class="content-box">
      <picture>
        <source type="image/webp" srcset="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/data-driven.png">
        <source type="image/png" srcset="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/data-driven.png">
        <img loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/data-driven.png" alt="Tab Image" width="724" height="646">
      </picture>
    </div>
  </div>
</div>
<div id="tab03" class="tab-contents">
  <div class="dis-flex">
    <div class="content-box">
      <picture>
        <source type="image/webp" srcset="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/data-driven.png">
        <source type="image/png" srcset="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/data-driven.png">
        <img loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/data-driven.png" alt="Tab Image" width="724" height="646">
      </picture>
    </div>
  </div>
</div>
<div id="tab04" class="tab-contents">
  <div class="dis-flex">
    <div class="content-box">
      <picture>
        <source type="image/webp" srcset="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/data-driven.png">
        <source type="image/png" srcset="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/data-driven.png">
        <img loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/data-driven.png" alt="Tab Image" width="724" height="646">
      </picture>
    </div>
  </div>
</div>
</div>
</div>
</div>
</div>
</section>
<?php 
/*
$mServices = get_field('wsc-block');
if( isset( $mServices['is_enabled'] ) && ($mServices['is_enabled'] == "yes") ) :
$mServicesRows = $mServices['services'];
if( $mServicesRows ){
?>  
<section class="business-tab bglight post-animation">
<div class="container">
  <div class="feature-tabs">
    <div class="tab-row">
      <nav id="tabs-mc" class="tab-nav">
        <ul>
          <?php 
          $nv = 0;
          foreach( $mServicesRows as $row ){ $nv++;
          $isActive = ( $nv === 1 )  ? 'active' : '';
          echo '<li class="'.$isActive.'" data-tab="#tab0'.$nv.'"><a href="#tab0'.$nv.'"><span class="icon">
          <img class="show" loading="lazy" src="'.$row['icon']['url'].'" alt="Icon" width="25" height="25">
          </span>'.$row['title'].'</a>
          </li>';
          }
          
          ?>
        </ul>
      </nav>      
      <div class="bcontents">
        <?php 
        $vn = 0;
        foreach( $mServicesRows as $row ){ $vn++;
        $isActive = ( $vn === 1 )  ? 'active' : '';
        $secImage = ( $row['image'] ) ? pxlGetPtag($row['image']) : '';
        echo '<div id="tab0'.$vn.'" class="tab-contents '.$isActive.'">
          <div class="dis-flex">
            <div class="content-box">'.$row['content'].$secImage.'</div>
          </div>
        </div>'; 
        } 
        ?>      
      </div>
    </div>
  </div>
</div>
</section>
<section class="business-mobile">
<div class="container">
  <div class="column">
    <?php 
    $vn = 0;
    foreach( $mServicesRows as $row ){ $vn++;
    $isActive = ( $vn === 1 )  ? 'open' : '';
    $secImage = ( $row['image'] ) ? pxlGetPtag($row['image']) : '';
    ?>
    <div class="b-accordion <?php echo $isActive; ?>">
      <div class="head-row">
        <img class="show" loading="lazy" src="<?php echo $row['icon']['url']; ?>" alt="Icon" width="25" height="25">
        <span><?php echo $row['title']; ?></span>
     </div>
      <div class="baccordion-content">
        <div class="dis-flex">
          <div class="content-box">
            <?php 
            echo $row['content'];
            echo $secImage; 
            ?>
          </div>
        </div>
      </div>
    </div>
    <?php } ?>
  </div>
</div>
</section>
<?php 
}
endif; 
*/
?>

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
                <img loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/awrd-01.svg" alt="Workstatus" width="27" height="28">
              </picture>
            </span>
            <span class="star"></span>
          </li>
          <li>
            <span class="aw-icon">
              <picture>
                <img loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/awrd-02.svg" alt="Workstatus" width="78" height="18">
              </picture>
            </span>
            <span class="star"></span>
          </li>
          <li>
            <span class="aw-icon">
              <picture>
              <img loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/awrd-03.svg" alt="Workstatus" width="40" height="34">
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
  <?php get_template_part('common/cmn', 'workplaces', ['elm-class' => 'workplace-section bg-blue padding-t-120 padding-b-120' ]); ?>
  <?php 
  /*
    $ws_services = get_field('ws-offers');
    if( isset( $ws_services['is_enabled'] ) && ( $ws_services['is_enabled'] == "yes" ) ) :
    ?>
  <section class="middle-section bglight">
    <div class="item">
      <div class="container">
        <div class="top-section">
          <h6><span class="bg-purple"><?php echo $ws_services['top-heading']; ?></span></h6>
          <?php echo $ws_services['content']; ?>
        </div>
        <?php 
          $services = $ws_services['services'];
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
                $image = $row['image'];
                echo pxlGetPtag( $image, $image['title'], "page ".$active, "p".$iRow );                
                }
                $iRow++;
                } 
                ?>
            </div>
            <div class="column-left">
              <?php 
                $iRow = 777;
                foreach( $services as $row ){
                $image = $row['image'];
                $icon = '<i><img loading="lazy" src="'.get_bloginfo('template_url').'/assests/images/hd-01.svg" alt="icon" width="" height=""></i>';
                if( $row['icon'] ){
                $icon = '<i><img loading="lazy" src="'.$row['icon']['url'].'" alt="icon" width="'.$row['icon']['width'].'" height="'.$row['icon']['height'].'"></i>';
                }
                ?>
              <div class="all-content">
                <div class="text-column active" id="t<?php echo $iRow; ?>" data-section="active_Current_Tabs_ws_services">
                  <h3><?php echo $icon.$row['heading']; ?></h3>
                  <?php echo $row['content']; ?>
                </div>
                <div class="mob-image">
                  <?php 
                  if( $image ){
                  echo pxlGetPtag( $image );                    
                  } ?>
                </div>
              </div>
              <?php $iRow++; } ?>
            </div>
          </div>
        </div>
        <?php } ?>
        <?php if( geoCTAcheck() === true ) : ?>
        <div class="ctasec mt100">
          <div>
            <a href="javascript:void(0)" class="ctbtn" onclick="call_demows();" target="_self">Book A Demo</a>
          </div>
          <span class="devide">OR</span>
          <div>  
            <a data-href="<?php echo $RegLink; ?>" href="javascript:void(0);" class="ctbtn nobg"  onclick="return get_ws_signupform(this);">Start Free Trial</a>
            <span class="nccr">No credit card required</span>
          </div>
        </div>
        <?php endif; ?>
      </div>
    </div>
  </section>
  <?php endif; */ ?>
  
  <?php 
  get_template_part('common/cmn', 'usps', ['cta' => _getDemoCTA('button-common margin-t-80', false)]);
  $ws_results = get_field('ws-results');
  if( isset( $ws_results['is_enabled'] ) && ( $ws_results['is_enabled'] == "yes" ) ) :
  ?>
  <section class="data-drive">
    <div class="item">
      <div class="container">
        <div class="top-section">
          <h6><span class="bg-purple"><?php echo $ws_results['top-heading']; ?></span></h6>
          <?php echo $ws_results['content']; ?>
        </div>
        <div class="data-flow">
          <div class="playsc" onclick="return callinVideo(this);">
          <span class="playicon">Play</span>
          </div>
          <iframe id="dflow-iframe" class="dflow-iframe" data-src="https://www.youtube.com/watch?v=KoU_OvfX4As" style="display:none;"></iframe>
          <picture id="dflow-picture">
          <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/images/dflow-image.svg" 
          alt="Data Flow" width="1380" height="754">
          </picture>
        </div>
      </div>
    </div>
  </section>
  <?php 
  endif;  
  ?>
  
  <?php 
    $whyWS = get_field('why-ws');
    if( isset( $whyWS['is_enabled'] ) && ( $whyWS['is_enabled'] == "yes" ) ) :
    $options = 	$whyWS['services'];
    ?>
  <section class="why-workstatus bglight">
    <div class="container">
      <div class="top-section">
        <h6><span class="bg-purple"><?php echo $whyWS['top-heading']; ?></span></h6>
        <?php echo $whyWS['content']; ?>
      </div>
      <div class="feature-tabs">
        <?php if( $options ) : ?>
        <div class="tab-row">
          <nav id="tabs">
            <ul>
              <?php 
                $wy = 0;
                foreach( $options as $row ){ $wy++;
                $icon = ( $row['icon'] ) ? '<img class="icon" loading="lazy" src="'.$row['icon']['url'].'" alt="Icon" 
                width="'.$row['icon']['width'].'" height="'.$row['icon']['height'].'">' : '';	
                $isActive = ( $wy === 1 ) ? 'active' : '';
                echo '<li class="'.$isActive.'"><a href="#tab'.$wy.'">'.$icon.$row['title'].'</a></li>';
                }
                ?>    
            </ul>
            <a href="<?php echo site_url('/use-cases'); ?>" class="is-arrow">Explore all Use Cases</a>
          </nav>
          <div id="tab-contents">
            <?php 
              $wy = 0;
              foreach( $options as $row ){ 
              $wy++;
              $isActive = ( $wy === 1 ) ? 'active' : '';
              ?>	
            <div id="tab<?php echo $wy; ?>" class="tab-contents <?php echo $isActive; ?>">
              <div class="dis-flex">
                <div class="content-box">
                  <?php 
                    echo $row['content']; 
                    if( isset( $row['link'] ) && !empty($row['link']) ){
                    	echo '<a href="'.vc_siteurl($row['link']).'" class="is-arrow">Know More</a>';
                    }
                    if( $row['image'] ){
                    	echo pxlGetPtag($row['image']);
                    }
                    ?>
                </div>
              </div>
            </div>
            <?php } ?>  
          </div>
        </div>
        <?php endif; ?>
        <?php if( geoCTAcheck() === true ) : ?>
        <div class="ctasec mt100">
          <div>
            <a href="javascript:void(0)" class="ctbtn" onclick="call_demows();" target="_self">Book A Demo</a>
          </div>
          <span class="devide">OR</span>
          <div>  
            <a data-href="<?php echo $RegLink; ?>" href="javascript:void(0);" class="ctbtn nobg"  onclick="return get_ws_signupform(this);">Start Free Trial</a>
            <span class="nccr">No credit card required</span>
          </div>
        </div>
        <?php endif; ?>
      </div>
    </div>
  </section>
  <?php endif; ?>
  <?php 
    $features = get_field('features-col');
    if( isset( $features['is_enabled'] ) &&  $features['is_enabled'] == "yes" ) :
    ?>
  <section class="middle-section">
    <?php 
      $ftSections = $features['ft-sections'];
      if( $ftSections ) {
      $randIndx = [0,20,40,60,80,90];
      $ft = 0;
      //echo '<pre>'; print_r($ftSections); die;
      foreach( $ftSections as $section ) :
      $ft++;
      ?>	
    <div class="item">
      <div class="container">
        <div class="top-section">
          <h6><span class="bg-purple"><?php echo $section['top-heading']; ?></span></h6>
          <?php echo $section['top-content']; ?>
        </div>
        <div class="feature-section-col">
          <div class="<?php //echo ($ft > 1) ? 'mt80' : ''; ?>" id="active_Current_Tabs<?php echo $ft ?>">
            <div class="flex_row">
              <div class="column-left">
                <?php 
                  $iRow = $randIndx[$ft];
                  foreach( $section['in-feature'] as $row ){
                    $image    	= $row['image'];
                    $active 	= ( $iRow == $randIndx[$ft] ) ? "active" : "";
                    $icon 		= '';
                    if( $row['icon'] ){
                  $icon = '<i><img loading="lazy" src="'.$row['icon']['url'].'" alt="icon" width="'.$row['icon']['width'].'" height="'.$row['icon']['height'].'"></i>';
                  }
                    ?>
                <div class="all-content">
                  <div class="text-column <?php echo $active; ?> <?php echo (strpos($row['content'], '<ul') !== false) ? ' listing ' : ''; ?>" 
                    id="t<?php echo $iRow; ?>" data-section="active_Current_Tabs<?php echo $ft ?>">
                    <h3><?php echo $icon.$row['title'];  ?></h3>
                    <?php echo $row['content'];?>
                  </div>
                  <div class="mob-image">
                    <?php 
                      if( $image ){
                      echo pxlGetPtag( $image );                      
                      } ?>
                  </div>
                </div>
                <?php 
                  $iRow++;
                  } 
                  ?>
              </div>
              <?php 
                if( $section['in-feature'] ){
                  echo '<div class="column-right">';
                  $iRow = $randIndx[$ft];
                  foreach( $section['in-feature'] as $row ){ 
                    $active = ( $iRow == $randIndx[$ft] ) ? "active" : "";
                    if( $row['image'] ){
                    $image  = $row['image'];
                    echo pxlGetPtag( $image, $image['title'], "page ".$active, "p".$iRow );                    
                    }
                    $iRow++;
                  }
                  echo '</div>';  
                } 
                ?>
            </div>
          </div>
        </div>
        <?php if( geoCTAcheck() === true ) : ?>
        <div class="ctasec mt100"><?php echo wsDemoCta(); ?></div>
        <?php endif; ?>
      </div>
    </div>
    <?php 
      endforeach; 
      }
      ?>
  </section>
  <?php endif; ?>
  <?php 
    $wsChoise = get_field('ws-choice');
    if( isset( $wsChoise['is_enabled'] ) && $wsChoise['is_enabled'] == "yes" ) :
    ?>
  <section class="management-software bglight">
    <div class="container">
      <div class="top-section">
        <h6><span class="bg-purple"><?php echo $wsChoise['top-heading']; ?></span></h6>
        <?php echo $wsChoise['content']; ?>
      </div>
      <div class="flex_row align-center">
        <div class="column-left">
          <?php 
            if( $wsChoise['choises'] ){
            	echo '<ul>';
            	foreach( $wsChoise['choises'] as $row ){
            	$icon = ($row['icon']) ? '<picture><img loading="lazy" src="'.$row['icon']['url'].'" alt="'.$row['title'].'" width="'.$row['icon']['width'].'" height="'.$row['icon']['height'].'"></picture>' : '';
            		echo '<li><a href="'.vc_siteurl($row['link']).'">'.$icon.$row['title'].'</a></li>';
            	}
            	echo '</ul>';
            }
            ?>
        </div>
        <div class="column-right">
          <?php 
            if( $wsChoise['image'] ){
            echo pxlGetPtag($wsChoise['image']);
            }
            ?>        
        </div>
      </div>
      <?php if( geoCTAcheck() === true ) : ?>
      <div class="ctasec mt100"><?php echo wsDemoCta(); ?></div>
      <?php endif; ?>
    </div>
  </section>
  <?php endif; ?>
  <?php 
    $wsSolutions = get_field('ws-solutions');
    if( isset( $wsSolutions['is_enabled'] ) && $wsSolutions['is_enabled'] == "yes" ) :
    ?>
  <section class="trackEm">
    <div class="container">
      <div class="top-section">
        <h6><span class="bg-purple"><?php echo $wsSolutions['top-heading']; ?></span></h6>
        <?php echo $wsSolutions['content']; ?>
      </div>
      <div class="trackRow align-center">
        <div class="trackImg">
          <?php 
            if( $wsSolutions['image'] ){
            echo pxlGetPtag($wsSolutions['image']);
            }
            ?>        
        </div>
        <div class="trackContent">
          <?php 
            if( $wsSolutions['solutions'] ){
            foreach( $wsSolutions['solutions'] as $row ){
            	$link = ($row['link']) ? '<a class="is-arrow" href="'.vc_siteurl($row['link']).'">Know More</a>' : '';
            	echo '<div class="row">'.$row['content'].$link.'</div>';
            }
            }
            ?>
        </div>
      </div>
    </div>
  </section>
  <?php endif; ?>

  <?php  
  //get_template_part('common/ws', 'pricing');  
  get_template_part('common/pricing', 'v4.0', ['elm-class' => "padding-t-120 bg-light padding-b-120"]);
  ?>
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
              $active = ($i<=3) ? "open" : "";
              ?>
            <div class="faq-accordion-item-outer <?php echo $active; ?>" itemscope itemprop="mainEntity"
              itemtype="https://schema.org/Question">
              <h3 itemprop="name"><?php echo $row['question'];?>
              </h3>
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
  <?php //require_once get_template_directory() .'/common/blog.php'; ?>
  <?php get_template_part('common/cmn', 'testimonial'); ?>
  <?php get_template_part('common/cmn', 'globalrating'); ?>
  <?php get_template_part('common/cmn', 'journey'); ?>
</main>
<?php get_footer(); ?>
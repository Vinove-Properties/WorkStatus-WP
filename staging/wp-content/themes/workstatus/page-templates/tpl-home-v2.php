<?php 
  /*
  Template Name: Home Page - V2 Template
  */ 
  get_header();
  global $ws_ctas, $RegLink, $LogLink;	
  ?>
<main class="site__content">
  <?php  
    $top_section = get_field('top_section');
    if( $top_section ) :
    $isEnable = $top_section['is_enabled'];
    if( $isEnable == "yes" ){ 
    ?>
  <section class="banner-section">
    <div class="home-section">
      <div class="container">
        <div class="flex_row">
          <div class="column column-content">
            <h6><span class="bg-purple"><?php echo $top_section['top-heading']; ?></span></h6>
            <h1>
            <strong>Maximize Team 
Productivity: </strong>From 
Remote to In-Office
                              <!--
                              <div class="bold-head">
                              
                                 <div class="hdtitle">
                                    <div class="word workforce">
                                    <span>S</span>
                                    <span>m</span>
                                    <span>a</span>
                                    <span>r</span>
                                    <span class="spc">t</span>
                                       <span>W</span>
                                       <span>o</span>
                                       <span>r</span>
                                       <span>k</span>
                                       <span>f</span>
                                       <span>o</span>
                                       <span>r</span>
                                       <span>c</span>
                                       <span>e</span>
                                    </div>
                                    <div class="word solutions">
                                       <span>T</span>
                                       <span>i</span>
                                       <span>m</span>
                                       <span class="spc">e</span>
                                       <span>M</span>
                                       <span>a</span>
                                       <span>n</span>
                                       <span>a</span>
                                       <span>g</span>
                                       <span>e</span>
                                       <span>m</span>
                                       <span>e</span>
                                       <span>n</span>
                                       <span>t</span>
                                    </div>
                                    <div class="word analytics">
                                       <span>R</span>
                                       <span>e</span>
                                       <span>p</span>
                                       <span>o</span>
                                       <span>r</span>
                                       <span>t</span>
                                       <span>i</span>
                                       <span>n</span>
                                       <span class="spc">g</span>
                                       <span class="spc">&</span>
                                       <span>A</span>
                                       <span>n</span>
                                       <span>a</span>
                                       <span>l</span>
                                       <span>y</span>
                                       <span>t</span>
                                       <span>i</span>
                                       <span>c</span>
                                       <span>s</span>
                                    </div>

                                    
                                 </div>
                              </div>-->
                           </h1>
                           <p>Elevate your business with our integrated time tracking and workforce management solutions, designed to boost efficiency and unlock peak productivity.</p>
            <div class="cont-wrap">
              <div class="actionBtn">
                <?php if( geoCTAcheck() === true ) : ?>
                <div><a data-href="<?php echo $RegLink; ?>" href="javascript:void(0);" class="primary_btn1" onclick="return get_ws_signupform(this);"><?php echo $ws_ctas['cta_text']; ?></a>
                  <small><?php echo $top_section['trial_button_bottom_text']; ?></small>
                </div>
                <?php endif; ?>
                <div><a href="javascript:void(0)" onclick="call_demows();" class="primary_btn2 formbtn">Book A Demo</a>
                  <small><?php echo $top_section['demo_button_bottom_text']; ?></small>
                </div>
              </div>
              <div class="partwrap">
                <div class="part-col">
                  <i class="part-logo part-logo1"></i>
                  <p>4.5/5</p>
                  <i class="star-icon"><img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/images/home-star01.svg"
                    alt="star" width="57" height="8"></i>
                </div>
                <div class="part-col">
                  <i class="part-logo part-logo2"></i>
                  <p>5/5</p>
                  <i class="star-icon"><img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/images/home-star02.svg"
                    alt="star" width="56" height="8"></i>
                </div>
                <div class="part-col">
                  <i class="part-logo part-logo3"></i>
                  <p>4.8/5</p>
                  <i class="star-icon"><img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/images/home-star03.svg"
                    alt="star" width="54" height="8"></i>
                </div>
                <div class="part-col">
                  <i class="part-logo part-logo4"></i>
                  <p>4.9/5</p>
                  <i class="star-icon"><img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/images/home-star04.svg"
                    alt="star" width="54" height="8"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="column videoSc" id="has-yt-video">
        <div class="inner">
          <button id="myBtn">
            Open Modal  
            <div class="playsc"><span class="playicon"></span></div>
          </button>
          <div class="topVideo srp-1">
            <div id="myDIV" class="contbox2">
              <div class="videoWrapper js-videoWrapper">
                <div class="videoPopup">
                  <div id="contentPopup" class="popup-wrapper">
                    <div class="popWrap">
                      <div class="popup-content">
                        <span class="close"></span>
                        <iframe id="video" class="videoIframe js-videoIframe" allowfullscreen data-src="<?php echo $top_section['video_embed_url']; ?>">
                        </iframe>
                      </div>
                    </div>
                  </div>
                </div>
               <button style="background-image: url(<?php bloginfo('template_url'); ?>/dev-images/home-bannerthumb.svg" alt="banner-image" class="videoPoster lazy-background wslazy nb-bg" id="play-button">
                Play video
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php } endif; ?>
  <?php 
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
                echo '<picture class="page '.$active.'" id="p'.$iRow.'" >
                '.getPxlWebpURL($row['image']['ID']).'
                <source type="'.$row['image']['mime_type'].'" srcset="'.$row['image']['url'].'">
                <img loading="lazy" src="'.$row['image']['url'].'" alt="'.$row['image']['title'].'" 
                width="'.$row['image']['width'].'" height="'.$row['image']['height'].'"> 
                </picture>';
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
                    echo '<picture>
                    '.getPxlWebpURL($image['ID']).'
                    <source type="'.$image['mime_type'].'" srcset="'.$image['url'].'">
                    <img loading="lazy" src="'.$image['url'].'" alt="'.$image['title'].'" width="'.$image['width'].'" 
                    height="'.$image['height'].'"> 
                    </picture>';
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
            <a data-href="<?php echo $RegLink; ?>" href="javascript:void(0);" class="ctbtn"  onclick="return get_ws_signupform(this);">Start Free Trial</a>
            <span class="nccr">No credit card required</span>
          </div>
          <span class="devide">OR</span>
          <div>
            <a href="javascript:void(0)" class="ctbtn nobg" href="#contactus" onclick="call_demows();" target="_self">Book A Demo</a>
          </div>
        </div>
        <?php endif; ?>
      </div>
    </div>
  </section>
  <?php endif; ?>
  <?php 
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
          <picture>
            <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/images/dflow-image.svg" alt="Data Flow"
              width="1380" height="754">
          </picture>
        </div>
      </div>
    </div>
  </section>
  <?php endif; ?>
  <section class="section-numbers">
    <div class="container">
      <div class="number-row">
        <div class="number-col is-first">
          <div class="card-wrapper">
            <div class="card-content">
              <h3>Achieve More: Optimize Time Tracking & Workforce Coordination</h3>
              <div class="card-image">
                <picture>
                  <source type="image/webp" srcset="<?php bloginfo('template_url'); ?>/assests/images/number-01.png">
                  <source type="image/png" srcset="<?php bloginfo('template_url'); ?>/assests/images/number-01.png">
                  <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/images/number-01.png" alt="Discover"
                    width="303" height="192">
                </picture>
              </div>
            </div>
            <div class="button-group">
              <a href="<?php echo site_url('/use-cases'); ?>" class="btn">Explore all Use Cases</a>
            </div>
          </div>
        </div>
        <div class="number-col">
          <div class="card-image">
            <picture>
              <source type="image/webp" srcset="<?php bloginfo('template_url'); ?>/assests/images/number-02.png">
              <source type="image/png" srcset="<?php bloginfo('template_url'); ?>/assests/images/number-02.png">
              <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/images/number-02.png" alt="Discover"
                width="320" height="155">
            </picture>
          </div>
          <h2>70%</h2>
          <div class="is-grey">INCREASED EFFICIENCY</div>
          <p>A multi-national marketing firm, boosted overall efficiency.</p>
          <a href="<?php echo site_url('/workforce-management/employee-productivity-monitoring'); ?>" class="btn">Increase Your Team Productivity</a>
        </div>
        <div class="number-col">
          <div class="card-image">
            <picture>
              <source type="image/webp" srcset="<?php bloginfo('template_url'); ?>/assests/images/number-03.png">
              <source type="image/png" srcset="<?php bloginfo('template_url'); ?>/assests/images/number-03.png">
              <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/images/number-03.png" alt="Discover"
                width="320" height="155">
            </picture>
          </div>
          <h2>35%</h2>
          <div class="is-grey">INCREASED ROI</div>
          <p>A Delhi-based startup achieved 30%+ increased ROI with Workstatus.</p>
          <a href="<?php echo site_url('/reporting-analytics/insights-for-business'); ?>" class="btn">Enhance Your ROI</a>
        </div>
      </div>
      <?php if( geoCTAcheck() === true ) : ?>
      <div class="ctasec mt100">
        <div>  
          <a data-href="<?php echo $RegLink; ?>" href="javascript:void(0);" class="ctbtn"  onclick="return get_ws_signupform(this);">Start Free Trial</a>
          <span class="nccr">No credit card required</span>
        </div>
        <span class="devide">OR</span>
        <div>
          <a href="javascript:void(0)" class="ctbtn nobg" href="#contactus" onclick="call_demows();" target="_self">Book A Demo</a>
        </div>
      </div>
      <?php endif; ?>
    </div>
  </section>
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
            <a data-href="<?php echo $RegLink; ?>" href="javascript:void(0);" class="ctbtn"  onclick="return get_ws_signupform(this);">Start Free Trial</a>
            <span class="nccr">No credit card required</span>
          </div>
          <span class="devide">OR</span>
          <div>
            <a href="javascript:void(0)" class="ctbtn nobg" href="#contactus" onclick="call_demows();" target="_self">Book A Demo</a>
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
                  $icon = '<i><img loading="lazy" src="'.$row['icon']['url'].'" alt="icon" width="" height=""></i>';
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
                if( $section['in-feature'] ){
                  echo '<div class="column-right">';
                  $iRow = $randIndx[$ft];
                  foreach( $section['in-feature'] as $row ){ 
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
  <?php //getWsCmnFeatures(); ?>
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
  <?php require_once get_template_directory() .'/common/blog.php'; ?>
  <?php 
    $wstestimonial = get_field('ws-testimonials');
    if( isset( $wstestimonial['is_enabled'] ) && $wstestimonial['is_enabled'] == "yes" ) :
    ?>
  <section class="testimonial-section bglight">
    <div class="container">
      <div class="top-section">
        <h6><span class="bg-purple"><?php echo $wstestimonial['heading']; ?></span></h6>
        <h2><?php echo $wstestimonial['sub_headings']; ?></h2>
      </div>
      <?php
        if( $wstestimonial['testimonail'] ){
        ?>
      <div class="glider-contain testimonial-slider">
        <div class="glider" id="glider">
          <?php 
            $vd = 0;
            foreach( $wstestimonial['testimonail'] as $row ) : $vd++; 
            //print_r($row);	
            ?>
          <div class="slide-item">
            <div class="test-row">
              <?php 
                $hasVideo = ( isset($row['yt-video']) && !empty( $row['yt-video'] ) ) ? $row['yt-video'] : false;
                if( $hasVideo !== false ){
                ?>
              <div class="client-videos" id="cvbox-<?php echo $vd; ?>">
                <div class="client-video-box">
                  <iframe class="yt-player"  id="ytiframe-<?php echo $vd; ?>" style="display:none;"></iframe>
                  <a class="frame-mask" href="javascript:void(0);" onclick="playTetiVideo(<?php echo $vd; ?>, '<?php echo $hasVideo; ?>', this)">
                    <picture>
                      <source type="image/png" srcset="<?php echo $row['image']['url']; ?>">
                      <img loading="lazy" src="<?php echo $row['image']['url']; ?>" alt="Workstatus" 
                        width="<?php echo $row['image']['width']; ?>" height="<?php echo $row['image']['height']; ?>">
                      <div class="playBtn">
                        <div class="playsc"><span class="playicon"></span></div>
                      </div>
                    </picture>
                  </a>
                </div>
              </div>
              <?php }else{ ?>
              <div class="cust-img-box">
                <?php 
                  if( $row['image'] ){
                  	echo pxlGetPtag( $row['image'] );
                  } 
                  ?>	
              </div>
              <?php } ?>	
              <div class="content-box">
                <?php echo $row['content']; ?>
                <?php 
                  if( $row['name'] ){
                  	echo '<h5>'.$row['name'].'</h5>';
                  }
                  if( $row['designation'] ){
                  	echo '<span class="designtn">'.$row['designation'].'</span>';
                  }
                  
                  if( $row['website'] ){
                  	echo '<span class="web">'.$row['website'].'</span>';
                  }
                  ?>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
        <div role="tablist" class="dots"></div>
      </div>
      <?php } ?>
    </div>
  </section>
  <?php endif; ?>
  <?php require_once get_template_directory() .'/common/all-brands.php';?>
  <?php require_once get_template_directory() .'/common/workstatus-journey-straight.php';?>
</main>
<?php get_footer(); ?>
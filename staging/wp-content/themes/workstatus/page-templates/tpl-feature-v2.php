<?php 
  /* 
  Template Name: Feature v2.0 Template
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
            <h1>
              Level Up Team Productivity 
            </h1>
            <p>Automate time tracking to ensure employees work efficiently. Track hours worked by employeeson each project.</p>
            <div class="cont-wrap">
              <div class="actionBtn">
                <div><a href="javascript:void(0)" onclick="call_demows();" class="primary_btn1 formbtn">Book A Demo</a>
                  <small><?php echo $top_section['demo_button_bottom_text']; ?></small>
                </div>
                <?php if( geoCTAcheck() === true ) : ?>
                <div><a data-href="<?php echo $RegLink; ?>" href="javascript:void(0);" class="primary_btn2" 
                  onclick="return get_ws_signupform(this);"><?php echo $ws_ctas['cta_text']; ?></a>
                  <small><?php echo $top_section['trial_button_bottom_text']; ?></small>
                </div>
                <?php endif; ?>
              </div>
              <div class="av-device"><span>Available for:</span>
                <i class="icon1"></i>
                <i class="icon2"></i>
                <i class="icon3"></i>
                <i class="icon4"></i>
                <i class="icon5"></i>
              </div>
              <div class="partwrap">
                <div class="part-col">
                  <i class="part-logo part-logo1"></i>
                  <i class="star-icon"><img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/images/ftstar.svg"
                    alt="star" width="60" height="9"></i>
                </div>
                <div class="part-col">
                  <i class="part-logo part-logo2"></i>
                  <i class="star-icon"><img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/images/ftstar.svg"
                    alt="star" width="60" height="9"></i>
                </div>
                <div class="part-col">
                  <i class="part-logo part-logo3"></i>
                  <i class="star-icon"><img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/images/ftstar.svg"
                    alt="star" width="60" height="9"></i>
                </div>
                <div class="part-col">
                  <i class="part-logo part-logo4"></i>
                  <i class="star-icon"><img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/images/ftstar.svg"
                    alt="star" width="60" height="9"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="column videoSc" id="has-yt-video">
        <div class="inner">
          <div id="myBtn" class="vbtn">
            Open Modal  
            <div class="playsc"><span class="playicon"></span></div>
            </div>
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
                <button style="background-image: url(<?php bloginfo('template_url'); ?>/assests/images/ftmain-banner.png)" class="videoPoster lazy-background nb-bg" id="play-button">
                Play video
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php 
    $dataDriv = get_field('dd-resul');
    if( isset($dataDriv['is_enabled']) && ($dataDriv['is_enabled'] == "yes") ){
      echo '<section class="datadrive-section"><div class="container">';
      echo '<div class="top-section">
      <h6><span class="bg-purple">'.$dataDriv['heading'].'</span></h6>'.$dataDriv['sub_heading'].'
      </div>';
      echo '<div class="data-row">';
      echo '<div class="flex-2"><div class="box">'.$dataDriv['con-left'].'</div></div>';
      echo '<div class="flex-2"><div class="box cross">'.$dataDriv['con-right'].'</div></div>';
      echo '</div>';
      echo '</div></section>';
    }  
    ?>
  <?php 
    $whyUs = get_field('why-ws');
    if( isset($whyUs['is_enabled']) && ($whyUs['is_enabled'] == "yes") ):
    ?>
  <section class="client-img-section padding-t0">
    <div class="container">
      <div class="dis-flex why-ws">
        <div class="flex-2 left-box">
          <?php 
            echo $whyUs['content']; 
            echo getCTAblock('button-common margin-t-40');
            ?>
        </div>
        <div class="flex-2 right-box">
          <div class="client-section">
            <div class="client-row">
              <div class="client-stack award-animate-slide-to-left hover:pause">
                <ul>
                  <li>
                    <picture class="awimg">
                      <img src="<?php bloginfo('template_url'); ?>/assests/images/awlogo-01.svg" alt="" width="130" height="29">
                    </picture>
                    <div class="star-rt">4.6 Excellent <img src="<?php bloginfo('template_url'); ?>/assests/images/4.6rate.svg" alt="Award" width="100" height="17"></div>
                    <p>Invoicera is a lifesaver! I always know who's paid and who owes me. It keeps my finances organized, saving me time and stress, especially at tax time.</p>
                  </li>
                  <li>
                    <picture class="awimg">
                      <img src="<?php bloginfo('template_url'); ?>/assests/images/awlogo-01.svg" alt="" width="130" height="29">
                    </picture>
                    <div class="star-rt">4.6 Excellent <img src="<?php bloginfo('template_url'); ?>/assests/images/4.6rate.svg" alt="Award" width="100" height="17"></div>
                    <p>Invoicera is a lifesaver! I always know who's paid and who owes me. It keeps my finances organized, saving me time and stress, especially at tax time.</p>
                  </li>
                  <li>
                    <picture class="awimg">
                      <img src="<?php bloginfo('template_url'); ?>/assests/images/awlogo-01.svg" alt="" width="130" height="29">
                    </picture>
                    <div class="star-rt">4.6 Excellent <img src="<?php bloginfo('template_url'); ?>/assests/images/4.6rate.svg" alt="Award" width="100" height="17"></div>
                    <p>Invoicera is a lifesaver! I always know who's paid and who owes me. It keeps my finances organized, saving me time and stress, especially at tax time.</p>
                  </li>
                  <li>
                    <picture class="awimg">
                      <img src="<?php bloginfo('template_url'); ?>/assests/images/awlogo-01.svg" alt="" width="130" height="29">
                    </picture>
                    <div class="star-rt">4.6 Excellent <img src="<?php bloginfo('template_url'); ?>/assests/images/4.6rate.svg" alt="Award" width="100" height="17"></div>
                    <p>Invoicera is a lifesaver! I always know who's paid and who owes me. It keeps my finances organized, saving me time and stress, especially at tax time.</p>
                  </li>
                  <li>
                    <picture class="awimg">
                      <img src="<?php bloginfo('template_url'); ?>/assests/images/awlogo-01.svg" alt="" width="130" height="29">
                    </picture>
                    <div class="star-rt">4.6 Excellent <img src="<?php bloginfo('template_url'); ?>/assests/images/4.6rate.svg" alt="Award" width="100" height="17"></div>
                    <p>Invoicera is a lifesaver! I always know who's paid and who owes me. It keeps my finances organized, saving me time and stress, especially at tax time.</p>
                  </li>
                  <li>
                    <picture class="awimg">
                      <img src="<?php bloginfo('template_url'); ?>/assests/images/awlogo-01.svg" alt="" width="130" height="29">
                    </picture>
                    <div class="star-rt">4.6 Excellent <img src="<?php bloginfo('template_url'); ?>/assests/images/4.6rate.svg" alt="Award" width="100" height="17"></div>
                    <p>Invoicera is a lifesaver! I always know who's paid and who owes me. It keeps my finances organized, saving me time and stress, especially at tax time.</p>
                  </li>
                  <li>
                    <picture class="awimg">
                      <img src="<?php bloginfo('template_url'); ?>/assests/images/awlogo-01.svg" alt="" width="130" height="29">
                    </picture>
                    <div class="star-rt">4.6 Excellent <img src="<?php bloginfo('template_url'); ?>/assests/images/4.6rate.svg" alt="Award" width="100" height="17"></div>
                    <p>Invoicera is a lifesaver! I always know who's paid and who owes me. It keeps my finances organized, saving me time and stress, especially at tax time.</p>
                  </li>
                  <li>
                    <picture class="awimg">
                      <img src="<?php bloginfo('template_url'); ?>/assests/images/awlogo-01.svg" alt="" width="130" height="29">
                    </picture>
                    <div class="star-rt">4.6 Excellent <img src="<?php bloginfo('template_url'); ?>/assests/images/4.6rate.svg" alt="Award" width="100" height="17"></div>
                    <p>Invoicera is a lifesaver! I always know who's paid and who owes me. It keeps my finances organized, saving me time and stress, especially at tax time.</p>
                  </li>
                  <li>
                    <picture class="awimg">
                      <img src="<?php bloginfo('template_url'); ?>/assests/images/awlogo-01.svg" alt="" width="130" height="29">
                    </picture>
                    <div class="star-rt">4.6 Excellent <img src="<?php bloginfo('template_url'); ?>/assests/images/4.6rate.svg" alt="Award" width="100" height="17"></div>
                    <p>Invoicera is a lifesaver! I always know who's paid and who owes me. It keeps my finances organized, saving me time and stress, especially at tax time.</p>
                  </li>
                  <li>
                    <picture class="awimg">
                      <img src="<?php bloginfo('template_url'); ?>/assests/images/awlogo-01.svg" alt="" width="130" height="29">
                    </picture>
                    <div class="star-rt">4.6 Excellent <img src="<?php bloginfo('template_url'); ?>/assests/images/4.6rate.svg" alt="Award" width="100" height="17"></div>
                    <p>Invoicera is a lifesaver! I always know who's paid and who owes me. It keeps my finances organized, saving me time and stress, especially at tax time.</p>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="award-sc margin-t-50">
            <ul>
              <li>
                <span class="aw-icon">
                  <picture>
                    <img  loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/images/aw-01.svg" alt="Workstatus" width="111" height="70">
                  </picture>
                </span>
                <span class="star"></span>
              </li>
              <li>
                <span class="aw-icon">
                  <picture>
                    <img  loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/images/aw-02.svg" alt="Workstatus" width="20" height="20">
                  </picture>
                </span>
                <span class="star"></span>
              </li>
              <li>
                <span class="aw-icon">
                  <picture>
                    <img  loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/images/aw-03.svg" alt="Workstatus" width="92" height="32">
                  </picture>
                </span>
                <span class="star"></span>
              </li>
              <li>
                <span class="aw-icon">
                  <picture>
                    <img  loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/images/aw-04.svg" alt="Workstatus" width="111" height="70">
                  </picture>
                </span>
                <span class="star"></span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php endif; ?>
  <?php 
    $fBlocks = get_field('ftblocks');
    if( isset( $fBlocks['is_enabled'] ) && ($fBlocks['is_enabled'] == "yes") ){
      echo '<section class="feature-wrapper">';
      $pos = $fBlocks['usp-pos'];
      if( $fBlocks['blocks'] ){
        $i = 0;
        foreach ( $fBlocks['blocks'] as $block ){ $i++;
        echo ' <div class="item">
                  <div class="container">
                    <div class="top-section">
                      <h6><span class="bg-purple">'.$block['title'].'</span></h6>
                      '.$block['top-content'].'
                    </div>
                    <div class="feature-row">
                      <div class="column-left">
                        <div class="text-column listing">'.$block['con'].'</div>
                      </div>
                      <div class="column-right">'.pxlGetPtag($block['image']).'</div>
                    </div>
                    '.getCTAblock().'
                  </div>
                </div>';
        if( $i == $pos ){
          get_template_part('common/cmn', 'usps');
        }        
        }  
      }
      echo '</section>';  
    }
    
    //Industries Section Starts Here
    $indsCmn = get_field('inds');
    if( isset($indsCmn['is_enabled']) && ($indsCmn['is_enabled'] == "yes") ){
    echo '<section class="stay-control bg-light"><div class="container">';
    echo '<div class="top-section">
    <h6><span class="bg-purple">'.$indsCmn['heading'].'</span></h6>'.$indsCmn['top-content'].'
    </div>';
    echo '<div class="cards-container"><div class="card-content">';
    if( $indsCmn['listing'] ){
      foreach( $indsCmn['listing'] as $row ){
        echo '<div class="card"><a class="card-wrap" href="'.ws_siteurl($row['link']).'">';
        if( $row['icon']){
          echo '<div class="icon">'.pxlGetPtag($row['icon']).'</div>
          <div class="title">'.$row['title'].'</div>';
        }else{
          echo '<div class="title">'.$row['title'].'</div>';
          echo '<div class="icon"></div>';
          
        }
        echo '</a></div>';
      }
    }
    echo '</div><div class="card-image">'.pxlGetPtag($indsCmn['image']).'</div>';
    echo '</div></section>';
    }
    
    $allOne = get_field('allone');
    if( isset($allOne['is_enabled']) && ($allOne['is_enabled'] == "yes") ){
    echo '<section class="trackEm post-animation"><div class="container">';
    echo '<div class="top-section"><h6><span class="bg-purple">'.$allOne['heading'].'</span></h6>'.$allOne['sub_heading'].'</div>';
    echo '<div class="trackRow align-center"><div class="trackImg">'.pxlGetPtag($allOne['left_image']).'</div>';
    if( $allOne['cblock'] ){
        echo '<div class="trackContent">';
        foreach( $allOne['cblock'] as $row ){
          echo '<div class="row">'.$row['content'].'</div>';
        }
        echo '</div>';
      }
    echo '</div></div></section>';
    }
    
    $workPlace = get_field('ws-workp');
    if( isset($workPlace['is_enabled']) && ($workPlace['is_enabled'] == "yes") ){
    echo '<section class="column-section bg-light post-animation"><div class="container">';
    echo '<div class="top-section">
    <h6><span class="bg-purple">'.$workPlace['heading'].'</span></h6>'.$workPlace['sub_heading'].'</div>';
    if( $workPlace['blocks'] ){
    echo '<div class="ws-row">';
    foreach( $workPlace['blocks'] as $row ){
      $more = ($row['link']) ? '<a href="'.ws_siteurl($row['link']).'" class="is-arrow">Explore More</a>' : '';
      echo '<div class="flex-4">
          <div class="box">
            '.pxlGetPtag($row['icon']).'
            <div class="content-area">'.$row['content'].'</div>'.$more.'
          </div>
        </div>';
    }
    echo '</div>';  
    }
    echo '</div></div></section>';
    }
    ?>
  <section class="compare-projects post-animation">
    <div class="container">
      <div class="top-section">
        <h6><span class="bg-purple">STAY IN CONTROL</span></h6>
        <h2>Compare Projects</h2>
        <p>Say goodbye to scattered tasks and documents. With Projecto, you'll be able to focus on what matters most - getting things done.</p>
      </div>
      <div class="compare-tabs">
        <div class="tbbtn">Hubstaff</div>
        <div class="tbbtn">Desktime</div>
        <div class="tbbtn">Time Doctor</div>
        <div class="tbbtn">Insightful</div>
        <div class="tbbtn">we360</div>
        <div class="tbbtn">Activ Trak</div>
        <div class="tbbtn">Teramind</div>
        <div class="tbbtn">Monitask</div>
        <div class="tbbtn">TimeChamp</div>
        <div class="tbbtn">Everhour</div>
        <div class="tbbtn">Clockify</div>
        <div class="tbbtn">Toggl</div>
        <div class="tbbtn">Truein</div>
        <div class="tbbtn">Zoho People</div>
        <div class="tbbtn">Apploye</div>
        <div class="tbbtn">Harvest</div>
        <div class="tbbtn">Trackolap</div>
        <div class="tbbtn">Myhours</div>
        <div class="tbbtn">Handdy</div>
        <div class="tbbtn">Empmonitor</div>
      </div>
      <div class="features-container">
        <div class="compare-column">
          <div class="tool-col comp-logo comphead">Compare features</div>
          <div class="tool-col">Task Management</div>
          <div class="tool-col">Issue / Bug Management</div>
          <div class="tool-col">Selfie validation with geofence</div>
          <div class="tool-col">Live Location Tracking</div>
          <div class="tool-col">Shift Scheduling</div>
          <div class="tool-col">Leave Management</div>
          <div class="tool-col">Set Office Locations</div>
          <div class="tool-col">Time Tracking</div>
          <div class="tool-col">Productivity Monitoring</div>
          <div class="tool-col">Team Screenshots</div>
          <div class="tool-col comprice">Pricing</div>
        </div>
        <div class="compare-column">
          <div class="tool-col comp-logo">
            <picture><img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/images/complogo-01.svg" alt="" width="125" height="17"></picture>
            <span class="price active">$13 </span>
          </div>
          <div class="tool-col"><i class="check-icon"></i></div>
          <div class="tool-col"><i class="check-icon"></i></div>
          <div class="tool-col"><i class="check-icon"></i></div>
          <div class="tool-col"><i class="check-icon"></i></div>
          <div class="tool-col"><i class="check-icon"></i></div>
          <div class="tool-col"><i class="check-icon"></i></div>
          <div class="tool-col"><i class="check-icon"></i></div>
          <div class="tool-col"><i class="check-icon"></i></div>
          <div class="tool-col"><i class="check-icon"></i></div>
          <div class="tool-col"><i class="check-icon"></i></div>
          <div class="tool-col comprice"><span class="btn active">$15</span><span class="small-font">(Per user / Month)</span>
            <a href="#" class="knowmre">Know More</a>
          </div>
        </div>
        <div class="compare-column">
          <div class="tool-col comp-logo">
            <picture><img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/images/complogo-02.svg" alt="" width="68" height="22"></picture>
            <span class="price">$13 </span>
          </div>
          <div class="tool-col"><i class="check-icon"></i></div>
          <div class="tool-col"><i class="check-icon"></i></div>
          <div class="tool-col"><i class="check-icon"></i></div>
          <div class="tool-col"><i class="cross-icon"></i></div>
          <div class="tool-col"><i class="check-icon"></i></div>
          <div class="tool-col"><i class="check-icon"></i></div>
          <div class="tool-col"><i class="check-icon"></i></div>
          <div class="tool-col"><i class="cross-icon"></i></div>
          <div class="tool-col"><i class="check-icon"></i></div>
          <div class="tool-col"><i class="check-icon"></i></div>
          <div class="tool-col comprice"><span class="btn">$15</span><span class="small-font">(Per user / Month)</span>
            <a href="#" class="knowmre">Know More</a>
          </div>
        </div>
        <div class="compare-column">
          <div class="tool-col comp-logo">
            <picture><img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/images/complogo-03.svg" alt="" width="50" height="22"></picture>
            <span class="price">$13 </span>
          </div>
          <div class="tool-col"><i class="check-icon"></i></div>
          <div class="tool-col"><i class="check-icon"></i></div>
          <div class="tool-col"><i class="check-icon"></i></div>
          <div class="tool-col"><i class="cross-icon"></i></div>
          <div class="tool-col"><i class="check-icon"></i></div>
          <div class="tool-col"><i class="check-icon"></i></div>
          <div class="tool-col"><i class="check-icon"></i></div>
          <div class="tool-col"><i class="cross-icon"></i></div>
          <div class="tool-col"><i class="check-icon"></i></div>
          <div class="tool-col"><i class="check-icon"></i></div>
          <div class="tool-col comprice"><span class="btn">$15</span><span class="small-font">(Per user / Month)</span>
            <a href="#" class="knowmre">Know More</a>
          </div>
        </div>
        <div class="compare-column">
          <div class="tool-col comp-logo">
            <picture><img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/images/complogo-04.svg" alt="" width="96" height="22"></picture>
            <span class="price">$13 </span>
          </div>
          <div class="tool-col"><i class="check-icon"></i></div>
          <div class="tool-col"><i class="check-icon"></i></div>
          <div class="tool-col"><i class="check-icon"></i></div>
          <div class="tool-col"><i class="cross-icon"></i></div>
          <div class="tool-col"><i class="check-icon"></i></div>
          <div class="tool-col"><i class="check-icon"></i></div>
          <div class="tool-col"><i class="check-icon"></i></div>
          <div class="tool-col"><i class="cross-icon"></i></div>
          <div class="tool-col"><i class="check-icon"></i></div>
          <div class="tool-col"><i class="check-icon"></i></div>
          <div class="tool-col comprice"><span class="btn">$15</span><span class="small-font">(Per user / Month)</span>
            <a href="#" class="knowmre">Know More</a>
          </div>
        </div>
        <div class="compare-column">
          <div class="tool-col comp-logo">
            <picture><img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/images/complogo-06.svg" alt="" width="77" height="22"></picture>
            <span class="price">$13 </span>
          </div>
          <div class="tool-col"><i class="check-icon"></i></div>
          <div class="tool-col"><i class="check-icon"></i></div>
          <div class="tool-col"><i class="check-icon"></i></div>
          <div class="tool-col"><i class="cross-icon"></i></div>
          <div class="tool-col"><i class="check-icon"></i></div>
          <div class="tool-col"><i class="check-icon"></i></div>
          <div class="tool-col"><i class="check-icon"></i></div>
          <div class="tool-col"><i class="cross-icon"></i></div>
          <div class="tool-col"><i class="check-icon"></i></div>
          <div class="tool-col"><i class="check-icon"></i></div>
          <div class="tool-col comprice"><span class="btn">$15</span><span class="small-font">(Per user / Month)</span>
            <a href="#" class="knowmre">Know More</a>
          </div>
        </div>
        <div class="compare-column">
          <div class="tool-col comp-logo">
            <picture><img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/images/complogo-07.svg" alt="" width="77" height="22"></picture>
            <span class="price">$13 </span>
          </div>
          <div class="tool-col"><i class="check-icon"></i></div>
          <div class="tool-col"><i class="check-icon"></i></div>
          <div class="tool-col"><i class="check-icon"></i></div>
          <div class="tool-col"><i class="cross-icon"></i></div>
          <div class="tool-col"><i class="check-icon"></i></div>
          <div class="tool-col"><i class="check-icon"></i></div>
          <div class="tool-col"><i class="check-icon"></i></div>
          <div class="tool-col"><i class="cross-icon"></i></div>
          <div class="tool-col"><i class="check-icon"></i></div>
          <div class="tool-col"><i class="check-icon"></i></div>
          <div class="tool-col comprice"><span class="btn">$15</span><span class="small-font">(Per user / Month)</span>
            <a href="#" class="knowmre">Know More</a>
          </div>
        </div>
        <div class="compare-column">
          <div class="tool-col comp-logo">
            <picture><img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/images/complogo-08.svg" alt="" width="77" height="22"></picture>
            <span class="price">$13 </span>
          </div>
          <div class="tool-col"><i class="check-icon"></i></div>
          <div class="tool-col"><i class="check-icon"></i></div>
          <div class="tool-col"><i class="check-icon"></i></div>
          <div class="tool-col"><i class="cross-icon"></i></div>
          <div class="tool-col"><i class="check-icon"></i></div>
          <div class="tool-col"><i class="check-icon"></i></div>
          <div class="tool-col"><i class="check-icon"></i></div>
          <div class="tool-col"><i class="cross-icon"></i></div>
          <div class="tool-col"><i class="check-icon"></i></div>
          <div class="tool-col"><i class="check-icon"></i></div>
          <div class="tool-col comprice"><span class="btn">$15</span><span class="small-font">(Per user / Month)</span>
            <a href="#" class="knowmre">Know More</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php  
    //get_template_part('common/ws', 'pricing');
    $planCategory = get_post_meta( $post->ID, 'ws-pcat', true );
    get_template_part('common/pricing', 'v4.0', ['plan' => $planCategory]);
    $use_cases_section = get_field('use_cases_section');
    
    if( $use_cases_section ) :
    $isEnable = $use_cases_section['is_enabled'];
    if( $isEnable == "yes" ){ 
    ?>
  <section class="case-section">
    <div class="container">
      <div class="top-section">
        <h6><span class="bg-white"><?php echo $use_cases_section['heading']; ?></span></h6>
        <h2><?php echo $use_cases_section['sub_heading']; ?></h2>
      </div>
      <div class="flex_row justify-center">
        <?php 
          if( $use_cases_section['content_repeater'] ){  $i = 7;
          foreach( $use_cases_section['content_repeater'] as $row ) {
          $image      = $row['image'];
          $active = ($i==7) ? "active" : "";
          ?> 
        <div class="column-three">
          <div class="thumb">
            <?php if( $image ){
              echo '<picture>
              '.getPxlWebpURL($image['ID']).'
              <source type="'.$image['mime_type'].'" srcset="'.$image['url'].'">
              <img loading="lazy" src="'.$image['url'].'" alt="'.$image['title'].'" width="'.$image['width'].'" 
              height="'.$image['height'].'"> 
              </picture>';
              } ?>
          </div>
          <div class="blog-title">
            <?php 
              if(isset($row['link']) && !empty($row['link'])){
                echo '<h3><a href="'.$row['link'].'">'.$row['heading'].'</a></h3>';
              }else{
                echo '<h3>'.$row['heading'].'</h3>';
              }
              ?>  
            <?php echo $row['content'];?>            
          </div>
        </div>
        <?php $i++; } } ?>			
      </div>
      <?php if( geoCTAcheck() === true ) : ?>
      <div class="mt70 text_center for-link-blue link-text">
        <div class="mt70 text_center btnSc">
          <!-- <p>Check How Workstatus™ Can Help<br> Your Business</p>
            <a href="<?php echo $RegLink; ?>"
              class="primary_btn1 btnbg2"><?php echo $ws_ctas['cta_text']; ?></a>
            <small>No credit card required</small> -->
          <?php echo wsDemoCtaCP(); ?>
        </div>
      </div>
      <?php endif; ?>
    </div>
  </section>
  <?php } endif; ?>
  <section class="wsMobile whitetxt">
    <?php require_once get_template_directory() .'/common/workstatus-device.php';?>
  </section>
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
  <?php } endif; ?>
  <?php if( !isMobile() ) : ?>
  <?php  
    $testimonials = get_field('testimonials', 'option');
    //echo '<pre>';
    //print_r($testimonials);
    if( $testimonials ) :
    $isEnable = $testimonials['is_enabled'];
    if( $isEnable == "yes" ){ 
    ?>	
  <section class="testimonial testmHome ">
    <div class="container">
      <div class="top-section">
        <h6><span class="bg-white"><?php echo $testimonials['heading']; ?></span></h6>
        <h2><?php echo $testimonials['sub_headings']; ?></h2>
      </div>
      <div class="glider-testimonial">
        <div class="glider-contain">
          <div class="glider2">
            <?php 
              if( $testimonials['content_repeaters'] ){  $i = 7;
              foreach( $testimonials['content_repeaters'] as $row ) {
              	$image      = $row['image'];
              	$active = ($i==7) ? "active" : "";
              ?>
            <div>
              <?php echo $row['content'];?>
              <div class="border">
                <div class="triangle"> </div>
              </div>
              <div class="author-box">
                <?php if( $image ){
                  echo '<picture>
                  '.getPxlWebpURL($image['ID']).'
                  <source type="'.$image['mime_type'].'" srcset="'.$image['url'].'">
                  <img loading="lazy" src="'.$image['url'].'" alt="'.$image['title'].'" width="'.$image['width'].'" 
                  height="'.$image['height'].'"> 
                  </picture>';
                  } ?>
                <div class="author-content">
                  <p class="para_extrasmall white"><?php echo $row['name'];?></p>
                </div>
              </div>
            </div>
            <?php $i++; } } ?>
          </div>
          <div role="tablist" class="dots2"></div>
        </div>
      </div>
    </div>
  </section>
  <?php } endif; ?>
  <?php endif; ?>
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
              	$image      = (isset($row['image_'])) ? $row['image_'] : false;
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
  <?php require_once get_template_directory() .'/common/blog.php'; ?>
  <?php get_template_part('common/home', 'testimonials'); ?>
  <?php require_once get_template_directory() .'/common/workstatus-journey.php';?>
</main>
<?php get_footer(); ?>
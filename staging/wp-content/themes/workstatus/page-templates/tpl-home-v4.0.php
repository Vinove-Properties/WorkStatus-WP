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
              <button id="myBtn">
                Open Modal
                <span class="playsc"><span class="playicon"></span></span>
              </button>
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
                    <button style="background-image: url(<?php bloginfo('template_url'); ?>/version-2.0/assests/images/home-poster-new.png)" class="videoPoster lazy-background nb-bg" id="play-button">Play video</button>
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
        <h4><span>Trusted by startups and Fortune <strong>500</strong> companies</span></h4>
      </div>
      <div class="trusted-flex">
        <div class="trusted-card">
          <picture>
            <img loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/startup-01.svg" alt="trusted" width="178" height="41"> 
          </picture>
        </div>
        <div class="trusted-card">
          <picture>
            <img loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/startup-02.svg" alt="trusted" width="34" height="34">
          </picture>
        </div>
        <div class="trusted-card">
          <picture>
            <img loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/startup-03.svg" alt="trusted" width="127" height="34">
          </picture>
        </div>
        <div class="trusted-card">
          <picture>
            <img loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/startup-04.svg" alt="trusted" width="157" height="44">
          </picture>
        </div>
        <div class="trusted-card">
          <picture>
            <img loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/startup-05.svg" alt="trusted" width="187" height="29">
          </picture>
        </div>
        <div class="trusted-card">
          <picture>
            <img loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/startup-06.svg" alt="trusted" width="149" height="22">
          </picture>
        </div>
      </div>
      <div class="actionBtn"><?php echo cmnBannerCta(); ?></div>
    </div>
  </section>
  <?php 
    $dataDrive = get_field('dd-resul');
    if( isset( $dataDrive['is_enabled'] ) && ($dataDrive['is_enabled'] == "yes") ) :
    ?>
  <section class="business-tab bg-light padding-t-120 padding-b-120">
    <div class="container">
      <div class="top-section">
        <?php 
          echo (isset($dataDrive['heading']) && !empty($dataDrive['heading'])) ? '<h6><span class="bg-purple">'.$dataDrive['heading'].'</span></h6>' : '';
          echo $dataDrive['sub_heading'];
          ?>
      </div>
      <div class="feature-tabs">
        <div class="tab-row">
          <nav id="tabs-mc" class="tab-nav">
            <ul>
              <li class="active">
                <a href="#tabmc01">
                <span class="icon">
                <img class="show" loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/tb01.svg" alt="Icon" width="16" height="18">
                <img class="hide" loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/tb01-hover.svg" alt="Icon" width="16" height="18">
                </span>Time Tracking</a>
              </li>
              <li>
                <a href="#tabmc02">
                <span class="icon">
                <img class="show" loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/tb02.svg" alt="Icon" 
                  width="16" height="18">
                <img class="hide" loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/tb02-hover.svg" alt="Icon" width="16" height="18">
                </span>Productivity Management</a>
              </li>
              <li><a href="#tabmc03"> <span class="icon"><img class="show"  loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/tb03.svg" alt="Icon" width="16" height="18"><img class="hide"  loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/tb03-hover.svg" alt="Icon" width="16" height="18">
                </span>
                Attendance Tracking</a>
              </li>
              <li><a href="#tabmc04"><span class="icon"><img class="show"  loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/tb04.svg" alt="Icon" width="16" height="18"><img class="hide"  loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/tb04-hover.svg" alt="Icon" width="16" height="18">
                </span>
                Project & Task Management</a>
              </li>
              <li>
                <a href="#tabmc05">
                <span class="icon">
                <img class="show" loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/tb05.svg" alt="Icon" 
                  width="16" height="18">
                <img class="hide" loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/tb05-hover.svg" alt="Icon" width="16" height="18">
                </span>Reporting & Analytics</a>
              </li>
            </ul>
          </nav>
          <div id="mctab-contents" class="bcontents">
            <div id="tabmc01" class="tab-contents active">
              <div class="dis-flex">
                <div class="content-box">
                  <picture>
                    <source type="image/webp" srcset="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/tabcontentim-01.webp">
                    <source type="image/png" srcset="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/tabcontentim-01.png">
                    <img loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/tabcontentim-01.png" alt="Tab Image" width="724" height="646">
                  </picture>
                </div>
              </div>
            </div>
            <div id="tabmc02" class="tab-contents">
              <div class="dis-flex">
                <div class="content-box">
                  <picture>
                    <source type="image/webp" srcset="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/tabcontentim-02.webp">
                    <source type="image/png" srcset="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/tabcontentim-02.png">
                    <img loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/tabcontentim-02.png" alt="Tab Image" width="724" height="646">
                  </picture>
                </div>
              </div>
            </div>
            <div id="tabmc03" class="tab-contents">
              <div class="dis-flex">
                <div class="content-box">
                  <picture>
                    <source type="image/webp" srcset="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/tabcontentim-03.webp">
                    <source type="image/png" srcset="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/tabcontentim-03.png">
                    <img loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/tabcontentim-03.png" alt="Tab Image" width="724" height="646">
                  </picture>
                </div>
              </div>
            </div>
            <div id="tabmc04" class="tab-contents">
              <div class="dis-flex">
                <div class="content-box">
                  <picture>
                    <source type="image/webp" srcset="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/tabcontentim-04.webp">
                    <source type="image/png" srcset="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/tabcontentim-04.png">
                    <img loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/tabcontentim-04.png" alt="Tab Image" width="724" height="646">
                  </picture>
                </div>
              </div>
            </div>
            <div id="tabmc05" class="tab-contents">
              <div class="dis-flex">
                <div class="content-box">
                  <picture>
                    <source type="image/webp" srcset="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/tabcontentim-05.webp">
                    <source type="image/png" srcset="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/tabcontentim-05.png">
                    <img loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/tabcontentim-05.png" alt="Tab Image" width="724" height="646">
                  </picture>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php endif; ?>
  <?php 
    $whyUs = get_field('why-ws');
    if( isset($whyUs['is_enabled']) && ($whyUs['is_enabled'] == "yes") ):  
    ?>
  <section class="client-img-section padding-t-120 padding-b-120">
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
                        <img loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/awrd-01.svg" alt="Workstatus" 
                          width="27" height="28">
                      </picture>
                    </span>
                    <span class="star"></span>
                  </li>
                  <li>
                    <span class="aw-icon">
                      <picture>
                        <img loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/awrd-02.svg" alt="Workstatus" 
                          width="78" height="18">
                      </picture>
                    </span>
                    <span class="star"></span>
                  </li>
                  <li>
                    <span class="aw-icon">
                      <picture>
                        <img loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/awrd-03.svg" alt="Workstatus" 
                          width="40" height="34">
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
                  <div class="client-stack">
                    <ul class="award-animate-slide-to-left hover:pause">
                      <li>
                        <picture class="awimg">
                          <img src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/Goodfirms.svg" alt="" width="130" height="29">
                        </picture>
                        <a class="move" href="https://www.goodfirms.co/"></a>
                        <div class="star-rt">4.8 Excellent <img src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/start-4.8.svg" alt="Award" width="100" height="17"></div>
                        <p>I am so glad I found Workstatus. It has helped me become more productive, track my time.</p>
                      </li>
                      <li>
                        <picture class="awimg">
                          <img src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/Product-Hunt.svg" alt="" width="130" height="29">
                        </picture>
                        <a class="move" href="https://www.producthunt.com/"></a>
                        <div class="star-rt">4.6 Excellent <img src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/start-4.6.svg" alt="Award" width="100" height="17"></div>
                        <p>WorkStatus has been a game-changer for our team's productivity. Its real-time tracking features have brought transparency.</p>
                      </li>
                      <li>
                        <picture class="awimg">
                          <img src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/SaasHub.svg" alt="" width="130" height="29">
                        </picture>
                        <a class="move" href="https://www.saashub.com/"></a>
                        <div class="star-rt">4.5 Excellent <img src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/start-4.5.svg" alt="Award" width="100" height="17"></div>
                        <p>We are able to time track all our team members with screenshots and activity URLs, Task management as well as Project reports.</p>
                      </li>
                      <li>
                        <picture class="awimg">
                          <img src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/sitejabber.svg" alt="" width="130" height="29">
                        </picture>
                        <a class="move" href="https://www.sitejabber.com/"></a>
                        <div class="star-rt">4.8 Excellent <img src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/start-4.8.svg" alt="Award" width="100" height="17"></div>
                        <p>Workstatus is an amazing tool to help me keep track of what my team is doing. It's very easy, gives powerful insights  on projects.</p>
                      </li>
                      <li>
                        <picture class="awimg">
                          <img src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/g2img.svg" alt="" width="130" height="29">
                        </picture>
                        <a class="move" href="https://www.g2.com/"></a>
                        <div class="star-rt">4.6 Excellent <img src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/start-4.6.svg" alt="Award" width="100" height="17"></div>
                        <p>The best thing about Workstatus is how easy it is to use. The app makes it simple for me to track the time I spend on  tasks and projects.</p>
                      </li>
                      <li>
                        <picture class="awimg">
                          <img src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/Goodfirms.svg" alt="" width="130" height="29">
                        </picture>
                        <a class="move" href="https://www.goodfirms.co/"></a>
                        <div class="star-rt">4.8 Excellent <img src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/start-4.8.svg" alt="Award" width="100" height="17"></div>
                        <p>I am so glad I found Workstatus. It has helped me become more productive, track my time.</p>
                      </li>
                      <li>
                        <picture class="awimg">
                          <img src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/Product-Hunt.svg" alt="" width="130" height="29">
                        </picture>
                        <a class="move" href="https://www.producthunt.com/"></a>
                        <div class="star-rt">4.6 Excellent <img src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/start-4.6.svg" alt="Award" width="100" height="17"></div>
                        <p>WorkStatus has been a game-changer for our team's productivity. Its real-time tracking features have brought transparency.</p>
                      </li>
                      <li>
                        <picture class="awimg">
                          <img src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/SaasHub.svg" alt="" width="130" height="29">
                        </picture>
                        <a class="move" href="https://www.saashub.com/"></a>
                        <div class="star-rt">4.5 Excellent <img src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/start-4.5.svg" alt="Award" width="100" height="17"></div>
                        <p>We are able to time track all our team members with screenshots and activity URLs, Task management as well as Project reports.</p>
                      </li>
                      <li>
                        <picture class="awimg">
                          <img src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/sitejabber.svg" alt="" width="130" height="29">
                        </picture>
                        <a class="move" href="https://www.sitejabber.com/"></a>
                        <div class="star-rt">4.8 Excellent <img src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/start-4.8.svg" alt="Award" width="100" height="17"></div>
                        <p>Workstatus is an amazing tool to help me keep track of what my team is doing. It's very easy, gives powerful insights  on projects.</p>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="counter">
                <div class="count-col">
                  <h3>500K+</h3>
                  <p>Active users</p>
                </div>
                <div class="count-col">
                  <h3>21M+</h3>
                  <p>Hours Tracked</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php endif; ?>
  <?php get_template_part('common/cmn', 'workplaces', ['elm-class' => 'workplace-section bg-blue padding-t-120 padding-b-120' ]); ?>
  <?php get_template_part('common/cmn', 'usps', ['cta' => _getDemoCTA('button-common margin-t-80', false)]); ?>
  <?php 
    $featureSlide = get_field('feature-slide');
    if( isset($featureSlide['is_enabled']) && ($featureSlide['is_enabled'] == "yes") ) :
    ?>
  <section class="feature-slide-section bg-light padding-t-120 padding-b-120">
    <div class="container">
      <div class="top-section text-center">
        <?php 
          echo (isset($featureSlide['heading']) && !empty($featureSlide['heading'])) ? '<h6><span class="bg-purple">'.$featureSlide['heading'].'</span></h6>' : '';
          echo $featureSlide['sub_heading'];
          ?>
      </div>
      <?php if($featureSlide['cards']) : ?>
      <div class="dis-flex featured-out">
        <div class="dis-flex featured-slider" id="featured-slide">
          <div class="glider" id="glider">
            <?php 
              foreach($featureSlide['cards'] as $row){
                $thumb = get_bloginfo('template_url').'/version-2.0/assests/images/featureslide-01.png';  
                if( $row['thumb'] ){
                $thumb = $row['thumb']['url'];
                }
                echo '<div class="flex-3">
                <div class="box-3" style="background-image:url('.$thumb.');">
                <h3>'.$row['title'].'</h3>
                <div class="overlay-text">'.$row['content'].'<a href="'.$row['link'].'" class="no-more">Know More</a></div>
                </div>
                </div>';
              } 
              ?>
          </div>
          <!-- Progress Bar -->
          <div class="progress-container">
            <div class="progress-bar"></div>
          </div>
          <div role="tablist" class="dots"></div>
          <div class="prev-next-btn">
            <button class="glider-prev tail-prev" aria-disabled="false"></button>
            <button class="glider-next tail-next" aria-disabled="false"></button>
          </div>
        </div>
        <div class="right-section">
          <h4>Optimize Time Tracking & Workforce Coordination</h4>
          <picture>
            <source type="image/webp" srcset="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/but-image.svg">
            <source type="image/png" srcset="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/but-image.svg">
            <img loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/but-image.svg" alt="persona"
              width="205" height="155">
          </picture>
          <a href="#" class="is-arrow">Explore all Use Cases</a>
        </div>
      </div>
      <?php endif; ?>
      <?php echo _getDemoCTA('button-common margin-t-80', false); ?>  
    </div>
  </section>
  <?php endif; ?>
  <?php 
    $userPros = get_field('user_per'); 
    if( isset($userPros['required']) && ($userPros['required'] == "yes") ) :
    ?>
  <section class="user-persona bg-blue padding-t-120 padding-b-120">
    <div class="container">
      <div class="user-persona__content">
        <div class="user-persona__image">
          <?php 
            if( isset($userPros['thumb']) && !empty( $userPros['thumb'] ) ){
              echo pxlGetPtag($userPros['thumb']);
            }else{
              echo '<picture>
              <source type="image/webp" srcset="'.get_bloginfo('template_url').'/version-2.0/assests/images/persona-img.png">
              <source type="image/png" srcset="'.get_bloginfo('template_url').'/version-2.0/assests/images/persona-img.png">
              <img loading="lazy" src="'.get_bloginfo('template_url').'/version-2.0/assests/images/persona-img.png" alt="persona"
              width="539" height="572">
              </picture>';
            }
            ?>        
        </div>
        <div class="top-section text-center">
          <?php 
            echo (isset($userPros['heading']) && !empty($userPros['heading'])) ? '<h6><span class="bg-purple">'.$userPros['heading'].'</span></h6>' : '';
            echo $userPros['sub_heading'];
            ?>
        </div>
      </div>
      <?php 
        if( $userPros['cards'] ){
        echo '<div class="user-persona__grid">';
        foreach( $userPros['cards'] as $row ){
        $link = (isset($row['link']) && !empty($row['link'])) ? '<a href="'.ws_siteurl($row['link']).'" class="is-arrow">Learn More</a>' : 
        '';
        echo '<div class="persona-card">
        '.pxlGetPtag( $row['icon'], $row['title'], 'normal'  ).'
        '.pxlGetPtag( $row['icon-hover'], $row['title'], 'hover'  ).'
        <h3>'.$row['title'].'</h3>
        <p>'.$row['text'].'</p>
        '.$link.'
        </div>';
        }    
        echo '</div>';  
        }
        ?>
    </div>
  </section>
  <?php endif; ?>
  <?php 
    $ewBlocks = get_field('ew-block'); 
    if( isset($ewBlocks['required']) && ($ewBlocks['required'] == "yes") ) :
    ?>    
  <section class="grade-solution bg-light padding-t-120 padding-b-120">
    <div class="container">
      <div class="top-section text-center">
        <?php 
          echo (isset($ewBlocks['heading']) && !empty($ewBlocks['heading'])) ? '<h6><span class="bg-purple">'.$ewBlocks['heading'].'</span></h6>' : '';
          echo $ewBlocks['sub_heading'];
          ?>    
      </div>
      <?php 
        if( $ewBlocks['sub_heading'] ){
          echo '<div class="solution-grid">';
          foreach( $ewBlocks['cards'] as $row ){
          echo '<div class="solution-card"><h3>'.$row['title'].'</h3>'.pxlGetPtag($row['thumb']).$row['text'].'</div>';
          }
          echo '</div>';  
        }
        ?>  
      <?php echo _getDemoCTA('button-common margin-t-80', false); ?>    
    </div>
  </section>
  <?php endif; ?>
  <?php 
    $profBlock = get_field('ws-profibility'); 
    if( isset($profBlock['required']) && ($profBlock['required'] == "yes") ) :
    ?>
  <section class="work-culture padding-t-120 padding-b-120">
    <div class="container">
      <div class="top-section text-center">
        <?php 
          echo (isset($profBlock['heading']) && !empty($profBlock['heading'])) ? '<h6><span class="bg-purple">'.$profBlock['heading'].'</span></h6>' : '';
          echo $profBlock['sub_heading'];
          ?>
      </div>
    </div>
    <div class="feature-loop">
      <div class="container">
        <div class="feature-row">
          <div class="column-left"><?php echo _wraplsContent($profBlock['content']) ?></div>
          <div class="column-right">
            <?php 
              if( $profBlock['thumb'] ){
                echo pxlGetPtag( $profBlock['thumb'] );
              }else{
                echo '<picture>
                <img loading="lazy" src="'.get_blogin('template_url').'/version-2.0/assests/images/feature-home.png" alt="Workstatus" width="612" height="505">
              </picture>';
              }
              ?>        
          </div>
        </div>
        <?php echo _getDemoCTA("button-common margin-t-50", false); ?>
      </div>
    </div>
  </section>
  <?php endif; 
    $sicBlock = get_field('sic-block');
    if( isset( $sicBlock['required'] ) && ($sicBlock['required'] == "yes") ) :
    
    $topHeading = '';
    if( isset( $sicBlock['heading'] ) && !empty($sicBlock['heading']) ){
    $topHeading = '<h6><span class="bg-purple">'.$sicBlock['heading'].'</span></h6>';
    }
    echo '<section class="feature-scroller margin-t-120"><div class="container"><div class="feature-wrap bg-light padding-t-120 padding-b-120">';
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
        <div class="img-sec">'.pxlGetPtag($row['image']).'</div>
        <div class="text-box">'.$row['content'].'</div>
        </div>';
      }  
    }
    echo '</div><!--//.right-panel-->';
    echo '</div></div></section>';  
    endif; 
    ?> 
  <?php 
    $wsIndustry = get_field("ws-industries");
    if( isset( $wsIndustry['required'] ) && ($wsIndustry['required'] == "yes") ){
      $sec_content = $wsIndustry['content'];
      $sec_content .= '<a href="'.$wsIndustry['cta-link'].'" class="is-arrow">'.$wsIndustry['cta-title'].'</a>';
      $elmImage = '<picture class="card-img">
      <source type="image/webp" srcset="'.get_bloginfo('template_url').'/version-2.0/assests/images/dashboard-img.png">
      <source type="image/png" srcset="'.get_bloginfo('template_url').'/version-2.0/assests/images/dashboard-img.png">
      <img loading="lazy" src="'.get_bloginfo('template_url').'/version-2.0/assests/images/dashboard-img.png" 
      alt="Workstatus" width="404" height="217">
      </picture>';
      if( isset($wsIndustry['image']) && !empty( $wsIndustry['image']) ){
      $elmImage = pxlGetPtag( $wsIndustry['image'], "WS Industries", "card-img" );
      }
      get_template_part('common/cmn', 'industries', ['elm-image' => $elmImage, 'elm-content' => $sec_content ]);  
    }
    
    //get_template_part('common/ws', 'pricing');  
    get_template_part('common/pricing', 'v4.0', ['elm-class' => "bg-light padding-b-120"]);
    ?>
  <?php  
    $faq = get_field('faq');    
    if( isset($faq['is_enabled']) && ($faq['is_enabled'] === "yes") ) : 
    ?>
  <section class="faqsRow wfull for-heading-center padding-t-120 padding-b-120">
    <div class="container">
      <div class="top-section text-center">
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
  <?php //get_template_part('common/blog', '', ['elm-class' => 'margin-b-120 margin-t-120']); ?>
  <?php get_template_part('common/cmn', 'testimonial'); ?>
  <?php get_template_part('common/cmn', 'globalrating'); ?>
  <?php get_template_part('common/cmn', 'journey'); ?>
</main>
<?php get_footer(); ?>
<?php
  /**
  * Template Name: Template Version2
  */
  get_header();
  ?>
<main class="main-content">
  <section class="banner-section banner-v2" style="padding-top:160px;">
    <div class="container">
      <div class="bnrRow">
        <div class="colLeft animate animate-y">
          <div class="content-sec">
            <?php the_content();?>
            <?php  
              $feature = get_field( 'key_feature' );
              if( $feature ) :
              ?>
            <h3><?php echo $feature['title']; ?></h3>
            <ul class="half-list">
              <?php 
                if( $feature['key_feature_listing'] ) : 
                foreach( $feature['key_feature_listing'] as $row ){
                ?>
              <li>
                <i class="feature-icon">
                  <picture>
                    <source type="<?php echo $row['img_webp']['mime_type']; ?>"
                      srcset="<?php echo $row['img_webp']['url']; ?>">
                    <source type="<?php echo $row['img']['mime_type']; ?>"
                      srcset="<?php echo $row['img']['url']; ?>">
                    <img loading="lazy" src="<?php echo $row['img']['url']; ?>" alt="Productivity"
                      width="<?php echo $row['img']['width']; ?>"
                      height="<?php echo $row['img']['height']; ?>">
                  </picture>
                </i>
                <?php echo $row['text']; ?>
              </li>
              <?php 
                }
                endif; ?>
            </ul>
            <?php endif; ?>
            <?php if( issglFldForm() ){ ?>
            <div class="sigupform newsignupform">
              <form action="/" method="GET" onsubmit="return wslpSignup(this);" class="wssgl-form1" data-wform="1">
                <div class="signwrap">
                  <div class="form-group">
                    <input type="email" name="ws-email" id="sgemail1" class="emailfld"  placeholder="Enter your email address">
                    <span class="error"></span>
                  </div>
                  <div class="form-group sg-pcode" id="sg-wrap">
                    <div class="user-input">
                      <input id="sg-pcode" type="tel" name="cprefix" maxlength="5" class="pcode-prefix"
                        onkeydown="javascript:if(event.keyCode != 9) return false;" tabindex="-1" onmousedown="return false;">
                      <input id="sg-contphpne" type="tel" name="phone" maxlength="12" class="input-field" placeholder="Phone Number*" data-errelm="phone-errorelm">
                      <span class="error" id="phone-errorelm"></span>
                    </div>
                  </div>
                </div>
                <div class="signwrap pdding-l-r">
                  <input type="hidden" name="pageurl" value="<?php the_permalink(); ?>">
                  <input type="hidden" name="tracking_ip" value="<?php echo wpgetUserIP();?>">
                  <input type="hidden" name="referalurl" value="">
                  <input type="hidden" name="utm_source" 
                    value="<?php echo isset( $ws_utm['utm_source'] ) ? $ws_utm['utm_source'] : ''; ?>">
                  <input type="hidden" name="utm_medium" 
                    value="<?php echo isset( $ws_utm['utm_medium'] ) ? $ws_utm['utm_medium'] : ''; ?>">
                  <input type="hidden" name="utm_campaign" 
                    value="<?php echo isset( $ws_utm['utm_campaign'] ) ? $ws_utm['utm_campaign'] : ''; ?>">
                  <button type="submit" class="signupbtn">Start free trial</button>
                  <span class="credcard">No credit card required</span>
                </div>
              </form>
            </div>
            <?php }else{ ?>
            <a href="javascript:void(0)" class="btn btn-big" onclick="popup('<?php the_field('form_submit_text', get_the_ID());?>');" class="primary_btn2 formbtn"> <?php the_field('schedule_demo_cta', get_the_ID());?></a>
            <?php } ?>
            <!--
              <a href="#features" class="btn btn-big btn-primary ">See All Features</a>
              -->
          </div>
          <div class="badges">
            <div class="col">
              <div class="leftbar">
                <picture>
                  <source type="image/webp" srcset="<?php bloginfo('template_url'); ?>/img/badge-logo-1.webp">
                  <source type="image/png" srcset="<?php bloginfo('template_url'); ?>/img/badge-logo-1.png">
                  <img loading="lazy" src="<?php bloginfo('template_url'); ?>/img/badge-logo-1.png" alt="capterra" width="82" height="21">
                </picture>
                <i class="icon1"></i>
              </div>
              <div class="ritbar">
                4.9
              </div>
            </div>
            <div class="col">
              <div class="leftbar">
                <picture>
                  <source type="image/webp" srcset="<?php bloginfo('template_url'); ?>/img/badge-logo-2.webp">
                  <source type="image/png" srcset="<?php bloginfo('template_url'); ?>/img/badge-logo-2.png">
                  <img loading="lazy" src="<?php bloginfo('template_url'); ?>/img/badge-logo-2.png" alt="trustpilot" width="86" height="20">
                </picture>
                <i class="icon2"></i>
              </div>
              <div class="ritbar">
                5.0
              </div>
            </div>
            <div class="col">
              <div class="leftbar">
                <picture>
                  <source type="image/webp" srcset="<?php bloginfo('template_url'); ?>/img/badge-logo-3.webp">
                  <source type="image/png" srcset="<?php bloginfo('template_url'); ?>/img/badge-logo-3.png">
                  <img loading="lazy" src="<?php bloginfo('template_url'); ?>/img/badge-logo-3.png" alt="getapp" width="88" height="18">
                </picture>
                <i class="icon3"></i>
              </div>
              <div class="ritbar">
                4.8
              </div>
            </div>
            <div class="col">
              <div class="leftbar">
                <picture>
                  <source type="image/webp" srcset="<?php bloginfo('template_url'); ?>/img/badge-logo-4.webp">
                  <source type="image/png" srcset="<?php bloginfo('template_url'); ?>/img/badge-logo-4.png">
                  <img loading="lazy" src="<?php bloginfo('template_url'); ?>/img/badge-logo-4.png" alt="g2" width="20" height="20">
                </picture>
                <i class="icon4"></i>
              </div>
              <div class="ritbar">
                4.9
              </div>
            </div>
          </div>
        </div>
        <div class="colRight">
          <?php 
            $bannerImage    = get_field( 'top-banner' ); 
            $bannerWebp     = get_field( 'top-banner-webp' ); 
            ?>
          <picture class="dashboard-img animate">
            <source srcset="<?php echo $bannerWebp['url']; ?>" type="<?php echo $bannerWebp['mime_type']; ?>" />
            <source srcset="<?php echo $bannerImage['url']; ?>" type="<?php echo $bannerImage['mime_type']; ?>" />
            <img srcset="<?php echo $bannerImage['url']; ?>" src="<?php echo $bannerImage['url']; ?>" width="787" height="532" alt="dashboard image" />
          </picture>
        </div>
      </div>
      <div class="badges bdge-mobile">
        <div class="col">
          <div class="leftbar">
            <picture>
              <source type="image/webp" srcset="<?php bloginfo('template_url'); ?>/img/badge-logo-1.webp">
              <source type="image/png" srcset="<?php bloginfo('template_url'); ?>/img/badge-logo-1.png">
              <img loading="lazy" src="<?php bloginfo('template_url'); ?>/img/badge-logo-1.png" alt="avatar image" width="82" height="21">
            </picture>
            <i class="icon1"></i>
          </div>
          <div class="ritbar">
            4.9
          </div>
        </div>
        <div class="col">
          <div class="leftbar">
            <picture>
              <source type="image/webp" srcset="<?php bloginfo('template_url'); ?>/img/badge-logo-2.webp">
              <source type="image/png" srcset="<?php bloginfo('template_url'); ?>/img/badge-logo-2.png">
              <img loading="lazy" src="<?php bloginfo('template_url'); ?>/img/badge-logo-2.png" alt="trustpilot" width="86" height="20">
            </picture>
            <i class="icon2"></i>
          </div>
          <div class="ritbar">
            5.0
          </div>
        </div>
        <div class="col">
          <div class="leftbar">
            <picture>
              <source type="image/webp" srcset="<?php bloginfo('template_url'); ?>/img/badge-logo-3.webp">
              <source type="image/png" srcset="<?php bloginfo('template_url'); ?>/img/badge-logo-3.png">
              <img loading="lazy" src="<?php bloginfo('template_url'); ?>/img/badge-logo-3.png" alt="getapp" width="88" height="18">
            </picture>
            <i class="icon3"></i>
          </div>
          <div class="ritbar">
            4.8
          </div>
        </div>
        <div class="col">
          <div class="leftbar">
            <picture>
              <source type="image/webp" srcset="<?php bloginfo('template_url'); ?>/img/badge-logo-4.webp">
              <source type="image/png" srcset="<?php bloginfo('template_url'); ?>/img/badge-logo-4.png">
              <img loading="lazy" src="<?php bloginfo('template_url'); ?>/img/badge-logo-4.png" alt="g2" width="20" height="20">
            </picture>
            <i class="icon4"></i>
          </div>
          <div class="ritbar">
            4.9
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>
  <?php 
    if( issglFldForm() === false ){
      dynamic_sidebar('we-belive');   
    }  
    ?>
  <?php
    $emp = get_field('employees_monitoring_data');
    if( isset($emp['is_enabled']) && ($emp['is_enabled'] == "yes") ) :
    ?>
  <section class="gt-data">
    <div class="container">
      <?php  
        $employees_monitoring = get_field( 'employees_monitoring_data' );
        if( $employees_monitoring ) :
        ?>
      <div class="topTxt">
        <h2><?php echo $employees_monitoring['title']; ?>
        </h2>
      </div>
      <div class="imgsec">
        <picture class="mb-upto-lg animate">
          <source type="image/webp" srcset="<?php echo $employees_monitoring['img_webp']['url']; ?>">
          <source type="image/png"
            srcset="<?php echo $employees_monitoring['img']; ?>">
          <img loading="lazy" src="<?php echo $employees_monitoring['img']; ?>" alt="Employee Monitoring" width="999" height="594">
        </picture>
      </div>
      <?php endif; ?>
    </div>
  </section>
  <?php endif; ?>
  <?php if( issglFldForm() ){ ?>
  <section class="cta cta-trial ctanew ctaspace animate animate-y">
    <div class="leftbar">
      <h3 class="cta-heading"><?php the_field('manage-cta-text', get_the_ID());?></h3>
    </div>
    <div class="rightbar">
      <div class="sigupform newsignupform">
        <form action="/" onsubmit="return wslpSignup(this);" method="GET" class="wssgl-form2" data-wform="2">
          <div class="form-group signwrap">
            <input type="email" name="ws-email" class="emailfld" id="sgemail2" placeholder=" Enter your email address">
            <span class="error"></span>
          </div>
          <div class="form-group sg-pcode" id="sg-wrap2">
            <div class="user-input">
              <input id="sg-pcode2" type="tel" name="cprefix" maxlength="5" class="pcode-prefix"
                onkeydown="javascript:if(event.keyCode != 9) return false;" tabindex="-1" onmousedown="return false;">
              <input id="sg-contphpne2" type="tel" name="phone" maxlength="12" class="input-field" placeholder="Phone Number*" 
                data-errelm="phone-errorelm2"><span class="error" id="phone-errorelm2"></span>
            </div>
          </div>
          <div class="signwrap pdding-l-r">
            <input type="hidden" name="pageurl" value="<?php the_permalink(); ?>">
            <input type="hidden" name="tracking_ip" value="<?php echo wpgetUserIP();?>">
            <input type="hidden" name="referalurl" value="">
            <input type="hidden" name="utm_source" 
              value="<?php echo isset( $ws_utm['utm_source'] ) ? $ws_utm['utm_source'] : ''; ?>">
            <input type="hidden" name="utm_medium" 
              value="<?php echo isset( $ws_utm['utm_medium'] ) ? $ws_utm['utm_medium'] : ''; ?>">
            <input type="hidden" name="utm_campaign" 
              value="<?php echo isset( $ws_utm['utm_campaign'] ) ? $ws_utm['utm_campaign'] : ''; ?>">
            <button type="submit" class="signupbtn">Start free trial</button>
          </div>
        </form>
      </div>
    </div>
  </section>
  <?php }else{ ?> 
  <section class="container cta cta-trial ctaspace animate animate-y">
    <h3 class="cta-heading"><?php the_field('manage-cta-text', get_the_ID());?></h3>
    <a href="javascript:void(0)" class="btn btn-big btn-secondary" onclick="popup('<?php the_field('form_submit_text', get_the_ID());?>');"><?php the_field('schedule_demo_cta', get_the_ID());?></a>
  </section>
  <?php } ?>
  <?php
    $weHelp = get_field('learn_everything');
    if( isset($weHelp['is_enabled']) && ($weHelp['is_enabled'] == "yes") ) :
    ?>
  <section class="<?php echo ( issglFldForm() === false ) ? 'container ' : ''; ?>middle-section">
    <?php 
      $wshelp = get_field( 'learn_everything' );
      if( $wshelp ) :
      ?>
    <div class="topTxt animate  animate-y">
      <?php echo ( issglFldForm() ) ? '<div class="container">' : ''; ?>
      <?php echo $wshelp['top_text']; ?>
      <?php echo ( issglFldForm() ) ? '</div' : ''; ?>
    </div>
    <div class="content-sec <?php echo ( issglFldForm() ) ? "emp-ver4" : "empcomtent" ?>">
      <?php 
        if( $wshelp['workstatus_listing'] ) : 
        foreach( $wshelp['workstatus_listing'] as $row ){
        ?>
      <div class="flex-row">
        <?php echo ( issglFldForm() ) ? '<div class="container">' : ''; ?>
        <div class="column-left mb-upto-lg">
          <picture class="mb-upto-lg animate">
            <source type="<?php echo $row['img_webp']['mime_type']; ?>"
              srcset="<?php echo $row['img_webp']['url']; ?>">
            <source type="<?php echo $row['img']['mime_type']; ?>"
              srcset="<?php echo $row['img']['url']; ?>">
            <img loading="lazy" src="<?php echo $row['img']['url']; ?>" alt="Attendance"
              width="<?php echo $row['img']['width']; ?>" height="<?php echo $row['img']['height']; ?>">
          </picture>
        </div>
        <div class="column-right animate">
          <?php 
            if( isset( $row['mobimg_webp'] ) && !empty( $row['mobimg_webp'] ) ) : ?>  
          <picture class="mb-upto-lg mobile-icon animate">
            <source type="<?php echo $row['mobimg_webp']['mime_type']; ?>"
              srcset="<?php echo $row['mobimg_webp']['url']; ?>">
            <?php if( isset( $row['mobileimg'] ) && !empty( $row['mobileimg'] ) ) : ?>  
            <source type="<?php echo $row['mobileimg']['mime_type']; ?>"
              srcset="<?php echo $row['mobileimg']['url']; ?>">
            <img loading="lazy" src="<?php echo $row['mobileimg']['url']; ?>" alt="Attendance"
              width="<?php echo $row['mobileimg']['width']; ?>" height="<?php echo $row['mobileimg']['height']; ?>">
            <?php endif; ?>  
          </picture>
          <?php 
            endif;
            echo $row['content']; ?>
        </div>
        <?php echo ( issglFldForm() ) ? '</div>' : ''; ?>
      </div>
      <?php 
        }
        endif; ?>
      <?php endif; ?>
    </div>
  </section>
  <?php endif; ?>
  <section class="container review-sec" id="reviewbar">
    <?php 
    $wsreview = get_field( 'review_section' );
    if( $wsreview ) :
    ?>
    <div class="topTxt animate animate-y">
    <?php echo $wsreview['review_top_content']; ?>
    </div>
    <div class="rev-flex">
      <div class="revleft">
        <?php echo $wsreview['review_heading']; ?>
        <picture class="mb-upto-lg animate">
          <source srcset="<?php bloginfo('template_url'); ?>/img/review-star.webp" type="image/webp">
          <source srcset="<?php bloginfo('template_url'); ?>/img/review-star.png" type="image/png">
          <img srcset="<?php bloginfo('template_url'); ?>/img/review-star.png" src="img/attendance-05.png" width="184" height="27" alt="Attendance">
        </picture>
        <?php echo $wsreview['review_subheading']; ?>
      </div>
      <div class="revrit">
        <div class="progress">
          <?php 
            if( $wsreview['review_listing'] ) : 
            foreach( $wsreview['review_listing'] as $row ){
            ?>
          <div class="procol">
            <div class="deta-text">
              <picture class="mb-upto-lg animate">
                <source type="<?php echo $row['img_webp']['mime_type']; ?>"
                  srcset="<?php echo $row['img_webp']['url']; ?>">
                <source type="<?php echo $row['img']['mime_type']; ?>"
                  srcset="<?php echo $row['img']['url']; ?>">
                <img loading="lazy" src="<?php echo $row['img']['url']; ?>" alt="Attendance"
                  width="<?php echo $row['img']['width']; ?>" height="<?php echo $row['img']['height']; ?>">
              </picture>
              <strong><?php echo $row['review_title']; ?></strong>
            </div>
            <div  data-progress="<?php echo $row['review_percentage']; ?>"></div>
          </div>
          <?php 
            }
            endif; ?>
        </div>
      </div>
    </div>
    <div class="rvrow" id="testid">
      <?php $wor = get_field('author_review',$post->ID);
        foreach( $wor as  $key=>$worinfo)
        {
        ?>
      <?php
        if($key<=2){
        ?>
      <div class="rvcol">
        <address>
          <div class="author-img">
            <picture class="mb-upto-lg animate">
              <source type="<?php echo $worinfo['img_webp']['mime_type']; ?>"
                srcset="<?php echo $worinfo['img_webp']['url']; ?>">
              <source type="<?php echo $worinfo['img']['mime_type']; ?>"
                srcset="<?php echo $worinfo['img']['url']; ?>">
              <img loading="lazy" src="<?php echo $row['img']['url']; ?>" alt="Attendance"
                width="<?php echo $worinfo['img']['width']; ?>" height="<?php echo $worinfo['img']['height']; ?>">
            </picture>
          </div>
          <div class="author-info">
            <div class="auinfo">
              <p><?php echo   $worinfo['author_name'];?></p>
              <small> <?php echo   $worinfo['time'];?></small>
            </div>
            <div>
              <picture>
                <source type="image/webp" srcset="<?php bloginfo('template_url'); ?>/img/aut-rating.webp">
                <source type="image/png" srcset="<?php bloginfo('template_url'); ?>/img/aut-rating.png">
                <img loading="lazy" src="<?php bloginfo('template_url'); ?>/img/aut-rating.png" alt="Author" width="91" height="13">
              </picture>
            </div>
          </div>
        </address>
        <?php echo   $worinfo['review_content'];?>
      </div>
      <?php
        }
        if($key>2){
        ?>
      <div class="rvcol hcol">
        <address>
          <div class="author-img">
            <picture class="mb-upto-lg animate">
              <source type="<?php echo $worinfo['img_webp']['mime_type']; ?>"
                srcset="<?php echo $worinfo['img_webp']['url']; ?>">
              <source type="<?php echo $worinfo['img']['mime_type']; ?>"
                srcset="<?php echo $worinfo['img']['url']; ?>">
              <img loading="lazy" src="<?php echo $row['img']['url']; ?>" alt="Attendance"
                width="<?php echo $worinfo['img']['width']; ?>" height="<?php echo $worinfo['img']['height']; ?>">
            </picture>
          </div>
          <div class="author-info">
            <div class="auinfo">
              <p><?php echo   $worinfo['author_name'];?></p>
              <small> <?php echo   $worinfo['time'];?></small>
            </div>
            <div>
              <picture>
                <source type="image/webp" srcset="<?php bloginfo('template_url'); ?>/img/aut-rating.webp">
                <source type="image/png" srcset="<?php bloginfo('template_url'); ?>/img/aut-rating.png">
                <img loading="lazy" src="<?php bloginfo('template_url'); ?>/img/aut-rating.png" alt="Author" width="91" height="13">
              </picture>
            </div>
          </div>
        </address>
        <?php echo   $worinfo['review_content'];?>
      </div>
      <?php
        }
        ?>
      <?php } ?>
    </div>
    <div class="rvBtn" id="hidebtn"><a href="javascript:void(0)" class="btn btn-big btn-primary btn-padding-x" onclick="removeclass()">show more reviews</a></div>
    <?php endif; ?>
  </section>
  <div class="glider testimonials" style="display:none">
  </div>
  <?php if( issglFldForm() ){ ?>
  <section class="start-ws animate no-lform" id="starttrail">
    <div class="container text-center">
      <div class="dis-flex">
      <div class="start-left"><?php the_field('workstatus_journey', get_the_ID());?></div>
      <div class="start-rit">
        <div class="sigupform newsignupform">
          <form action="/" onsubmit="return wslpSignup(this);" method="GET" class="wssgl-form3" data-wform="3">
            <div class="form-group signwrap">
              <input type="email" name="ws-email" id="sgemail3" class="emailfld"  placeholder=" Enter your email address">
              <span class="error"></span>
            </div>
            <div class="form-group sg-pcode" id="sg-wrap3">
              <div class="user-input">
                <input id="sg-pcode3" type="tel" name="cprefix" maxlength="5" class="pcode-prefix"
                  onkeydown="javascript:if(event.keyCode != 9) return false;" tabindex="-1" onmousedown="return false;">
                <input id="sg-contphpne3" type="tel" name="phone" maxlength="12" class="input-field" placeholder="Phone Number*" data-errelm="phone-errorelm3">
                <span class="error" id="phone-errorelm3"></span>
              </div>
            </div>
            <div class="signwrap">
              <input type="hidden" name="pageurl" value="<?php the_permalink(); ?>">
              <input type="hidden" name="tracking_ip" value="<?php echo wpgetUserIP();?>">
              <input type="hidden" name="referalurl" value="">
              <input type="hidden" name="utm_source" 
                value="<?php echo isset( $ws_utm['utm_source'] ) ? $ws_utm['utm_source'] : ''; ?>">
              <input type="hidden" name="utm_medium" 
                value="<?php echo isset( $ws_utm['utm_medium'] ) ? $ws_utm['utm_medium'] : ''; ?>">
              <input type="hidden" name="utm_campaign" 
                value="<?php echo isset( $ws_utm['utm_campaign'] ) ? $ws_utm['utm_campaign'] : ''; ?>">
              <button type="submit" class="signupbtn">Start free trial</button>
              <span class="credcard">No credit card Required</span>
            </div>
          </form>
        </div>
      </div>
  </div>
    </div>
  </section>
  <?php }else{ ?>
  <section class="start-ws animate">
    <div class="container text-center">
      <?php the_field('workstatus_journey', get_the_ID());?>
      <a href="javascript:void(0)" onclick="popup('<?php the_field('form_submit_text', get_the_ID());?>');" class="btn btn-big btn-secondary btn-padding-x ">
      <?php the_field('ws_journey_cta', get_the_ID());?></a>
    </div>
  </section>
  <?php } ?>  
</main>
<?php //if( issglFldForm() === false ){ ?>
<div class="banner-form popup-form free-demopop">
  <div id="formPopup" class="popup-wrapper" style="display:none">
    <div class="popWrap">
      <div class="popup-content p-0">
        <span class="closeicon"></span>
        <div class="left-section">
              <picture>
                <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/images/logo-white.svg" alt="Logo" width="179" height="24">
              </picture>
              <div class="content">
                <h2><span class="lt-blue">Schedule A Free Demo</span> <br>At 
                  Your Convenience
                </h2>
                <p>Get answers to all your queries. Learn about all features in Workstatus 
                  that can <span class="lt-blue">make your team 34% more productive.</span>
                </p>
              </div>
              <div class="performer-box">
                <div class="list-box">
                  <ul>
                    <li>Top Rated Solution</li>
                    <li>Best-in-Class Support</li>
                    <li>Enterprise Grade Security</li>
                  </ul>
                </div>
                <div class="second_box">
                  <img src="<?php bloginfo('template_url'); ?>/assets/images/g2-main-image.svg" alt="">
                </div>
              </div>
              <div class="badges">
                <div class="col">
                  <div class="leftbar">
                    <picture>
                      <source type="image/webp" srcset="<?php bloginfo('template_url'); ?>/assets/images/badge-logo1.webp">
                      <source type="image/png" srcset="<?php bloginfo('template_url'); ?>/assets/images/badge-logo1.png">
                      <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/images/badge-logo1.png" alt="Partner Logo" width="67" height="17">
                    </picture>
                    <i class="icon1"></i>
                  </div>
                  <div class="ritbar">
                    4.9
                  </div>
                </div>
                <div class="col">
                  <div class="leftbar">
                    <picture>
                      <source type="image/webp" srcset="<?php bloginfo('template_url'); ?>/assets/images/badge-logo2.webp">
                      <source type="image/png" srcset="<?php bloginfo('template_url'); ?>/assets/images/badge-logo2.png">
                      <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/images/badge-logo2.png" alt="Partner Logo" width="70" height="17">
                    </picture>
                    <i class="icon2"></i>
                  </div>
                  <div class="ritbar">
                    5.0
                  </div>
                </div>
                <div class="col">
                  <div class="leftbar">
                    <picture>
                      <source type="image/webp" srcset="<?php bloginfo('template_url'); ?>/assets/images/badge-logo3.webp">
                      <source type="image/png" srcset="<?php bloginfo('template_url'); ?>/assets/images/badge-logo3.png">
                      <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/images/badge-logo3.png" alt="Partner Logo" width="72" height="15">
                    </picture>
                    <i class="icon3"></i>
                  </div>
                  <div class="ritbar">
                    4.8
                  </div>
                </div>
                <div class="col">
                  <div class="leftbar">
                    <picture>
                      <source type="image/webp" srcset="<?php bloginfo('template_url'); ?>/assets/images/badge-logo4.webp">
                      <source type="image/png" srcset="<?php bloginfo('template_url'); ?>/assets/images/badge-logo4.png">
                      <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/images/badge-logo4.png" alt="Partner Logo" width="20" height="20">
                    </picture>
                    <i class="icon4"></i>
                  </div>
                  <div class="ritbar">
                    4.9
                  </div>
                </div>
              </div>
            </div>
            <div class="right-section">
            <div class="col">
              <div class="top-section">
                <h2><?php 
                echo 'Request A Demo';
                //the_field('form_heading', get_the_ID());
                ?></h2>
              </div>
              <?php get_template_part('inc/form', 'version1'); ?>
            </div><!-- .col -->
            </div>
      </div>
    </div>
  </div>
</div>
<input type="hidden" value="0" id="myhiddenid">
<?php //} ?>
<?php get_footer();?>
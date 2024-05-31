<?php
  /**
   * Template Name: Template Version3
   */
get_header(); ?>
<main class="main-content">
  <section class="banner-section" style="padding-top:160px;">
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
          <div class="col">
            <h3><?php the_field('form_heading', get_the_ID());?></h3>
            <div class="banner-form form-div">
                <?php get_template_part('inc/form', 'version1'); ?>
            </div>
          </div>
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
  </section>
  <?php dynamic_sidebar('we-belive'); ?>

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
          <img class="deskmobile" loading="lazy" src="<?php echo $employees_monitoring['img']; ?>" alt="Employee Monitoring" width="999" height="594">
        </picture>
      </div>
      <?php endif; ?>
    </div>
  </section>
  <?php endif; ?>
  <section class="container cta cta-trial ctaspace animate animate-y">
    <h3 class="cta-heading"><?php the_field('manage-cta-text', get_the_ID());?></h3>
    <a href="<?php echo wpgetDemoLink(); ?>" onclick="topFunction()" class="btn btn-big btn-secondary btn-padding-x "><?php the_field('schedule_demo_cta', get_the_ID());?></a>
  </section>
  <?php
    $weHelp = get_field('learn_everything');
    if( isset($weHelp['is_enabled']) && ($weHelp['is_enabled'] == "yes") ) :
    ?>
  <section class="container middle-section">
    <?php 
      $wshelp = get_field( 'learn_everything' );
      if( $wshelp ) :
      ?>
    <div class="topTxt animate  animate-y">
      <?php echo $wshelp['top_text']; ?>
    </div>
    <div class="content-sec empcomtent">
      <?php 
        if( $wshelp['workstatus_listing'] ) : 
        foreach( $wshelp['workstatus_listing'] as $row ){
        ?>
      <div class="flex-row">
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
          <?php echo $row['content']; ?>
        </div>
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
    <div class="rvBtn" id="hidebtn"> <a href="javascript:void(0)" onclick="removeclass()" class="btn btn-big btn-primary btn-padding-x">show more reviews</a></div>
    <?php endif; ?>
  </section>
  <div class="glider testimonials" style="display:none">
  </div>
  <section class=" start-ws animate">
    <div class="container text-center">
      <?php the_field('workstatus_journey', get_the_ID());?>
      <a href="<?php echo wpgetDemoLink(); ?>" onclick="topFunction()" class="btn btn-big btn-secondary btn-padding-x ">
      <?php the_field('ws_journey_cta', get_the_ID());?></a>
    </div>
  </section>
</main>
<?php get_footer();?>
<?php
  /**
   * Template Name: Template Version1
   */
get_header(); ?>
<main class="main-content">
  <section class="banner-section">
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
            <h3>Request a Demo</h3>
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
        <picture>
          <source type="image/webp" srcset="<?php echo $employees_monitoring['img_webp']; ?>">
          <source type="image/png" srcset="<?php echo $employees_monitoring['img']['url']; ?>">
          <img loading="lazy" src="<?php echo $employees_monitoring['img']['url']; ?>" alt="Employee Monitoring" width="999" height="594">
        </picture>
      </div>
      <?php endif; ?>
    </div>
  </section>

  <?php endif; ?>

  <?php 
  $hasProductivity = get_field('productivity');
  if( isset($hasProductivity['is_enabled']) && ($hasProductivity['is_enabled'] == "yes") ) :
  ?>
  <section class="prod-sec animate animate-y">
    <div class="container">
      <?php 
        $product = get_field( 'productivity' );
        if( $product ) :
        ?>
      <div class="topTxt">
        <h2><?php echo $product['title']; ?></h2>
      </div>
      <div class="prodRow">
        <?php 
          if( $product['productivity_listing'] ) : 
          foreach( $product['productivity_listing'] as $row ){
          ?>
        <div class="prodCol">
          <picture>
            <source type="<?php echo $row['img_webp']['mime_type']; ?>"
              srcset="<?php echo $row['img_webp']['url']; ?>">
            <source type="<?php echo $row['img']['mime_type']; ?>"
              srcset="<?php echo $row['img']['url']; ?>">
            <img loading="lazy" src="<?php echo $row['img']['url']; ?>" alt="Productivity"
              width="<?php echo $row['img']['width']; ?>" height="<?php echo $row['img']['height']; ?>">
          </picture>
          <h4><?php echo $row['heading']; ?></h4>
        </div>
        <?php 
          }
          endif; ?>
      </div>
      <?php endif; ?>
    </div>
  </section>
  <?php endif; 

  $hasAppSec = get_field('about_the_app');
  if( isset($hasAppSec['is_enabled']) && ($hasAppSec['is_enabled'] == "yes") ) :
  ?>
<section class="app-sec">
    <div class="container">
      <?php 
        $aboutapp = get_field( 'about_the_app' );
        if( $aboutapp) :
        ?>
      <div class="topTxt">
        <?php echo $aboutapp['title']; ?>
      </div>
      <div class="prodRow">
        <?php 
          if( $aboutapp['app_listing'] ) : 
          foreach( $aboutapp['app_listing'] as $row ){
          ?>
        <div class="prodCol">
          <div class="prodtop">
            <div class="img">
            <picture>
            <source type="<?php echo $row['img_webp']['mime_type']; ?>"
              srcset="<?php echo $row['img_webp']['url']; ?>">
            <source type="<?php echo $row['image']['mime_type']; ?>"
              srcset="<?php echo $row['image']['url']; ?>">
            <img loading="lazy" src="<?php echo $row['image']['url']; ?>" alt="App"
              width="<?php echo $row['image']['width']; ?>" height="<?php echo $row['image']['height']; ?>">
            </picture>
            </div>
            <div class="heading">
              <h4><?php echo $row['title']; ?></h4>
            </div>
          </div>
          <?php echo $row['content']; ?>
        </div>
        <?php 
          }
          endif; ?>
      </div>
      <?php endif; ?>
    </div>
  </section>
  <?php endif; ?>
  <section class="container cta cta-trial ctaspace animate animate-y">
    <h3 class="cta-heading"><?php the_field('manage-cta-text', get_the_ID());?></h3>
    <a href="<?php echo wpgetDemoLink(); ?>"  onclick="topFunction()" class="btn btn-big btn-secondary ">Schedule a Demo</a>
  </section>
  <?php
  $weHelp = get_field('workstatus_help');
  if( isset($weHelp['is_enabled']) && ($weHelp['is_enabled'] == "yes") ) :
  ?>
  <section class="container middle-section">
    <?php 
      $wshelp = get_field( 'workstatus_help' );
      if( $wshelp ) :
      ?>
    <div class="topTxt animate  animate-y">
      <?php echo $wshelp['top_text']; ?>
    </div>
    <div class="content-sec">
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
  <section class="container  testimonials-wrap animate">
    <?php 
      $wstestimonial = get_field( 'testimonial' );
      if( $wstestimonial ) :
      ?>
    <div class="topTxt">
      <?php echo $wstestimonial['testimonial_top_text']; ?>
    </div>
    <div class="glider-contain">
      <div class="glider testimonials">
        <?php 
          if( $wstestimonial['testimonials'] ) : 
          foreach( $wstestimonial['testimonials'] as $row ){
          ?>
        <div>
          <div class="testimonial">
            <?php echo $row['content']; ?>
            <address>
              <div class="author-img">
                <picture>
                  <source type="<?php echo $row['img_webp']['mime_type']; ?>"
                    srcset="<?php echo $row['img_webp']['url']; ?>">
                  <source type="<?php echo $row['img']['mime_type']; ?>"
                    srcset="<?php echo $row['img']['url']; ?>">
                  <img loading="lazy" src="<?php echo $row['img']['url']; ?>" alt="Author"
                    width="<?php echo $row['img']['width']; ?>"
                    height="<?php echo $row['img']['height']; ?>">
                </picture>
              </div>
              <div class="author-info">
                <p><?php echo $row['author_name']; ?></p>
                <p><?php echo $row['country']; ?> </p>
              </div>
            </address>
          </div>
        </div>
        <?php 
          }
          endif; ?>
      </div>
      <div role="tablist" class="dots"></div>
    </div>
    <?php endif; ?>
  </section>
  <section class=" start-ws animate">
    <div class="container text-center">
      <?php the_field('workstatus_journey', get_the_ID());?>
      <a href="<?php echo wpgetDemoLink(); ?>" onclick="topFunction()"
        class="btn btn-big btn-secondary btn-padding-x ">Request a
      Demo</a>
    </div>
  </section>
</main>
<?php get_footer();?>
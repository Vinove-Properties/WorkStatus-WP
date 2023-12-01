<?php 
  //session_start();
  $referl = '';
  if(isset($_SERVER['HTTP_REFERER'])){
  $referalurl = $_SERVER['HTTP_REFERER'];
  $_SESSION['referer'] = $referalurl;
  $referl   = $_SESSION['referer'];
  }
  global $ws_utm;
  get_header(); ?>
<main class="main-content">
  <div class="hero-wrap section-padding">
    <div class="container">
      <div class="hero d-grid-lg">
        <div class="dashboard lg-order-1 mb-upto-lg">
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
        <?php 
          while( have_posts() ) : the_post(); 
          ?>
        <section class="hero-text animate">
          <?php the_content(); ?>
          <div class="banner-form">
            <form name="theForm" method="post" id="ws-lead-form" action="<?php echo site_url('/thanks'); ?>" 
              onsubmit="return vcCmnFormValidation();">
              <div class="form-wrap">
                <div class="form-group">
                  <label>First Name*</label>
                  <input type="text"  id="first_name" placeholder="Enter your first name" name="fname" maxlength="30" />
                  <span class="error"></span>
                </div>
                <div class="form-group">
                  <label>Last Name*</label>
                  <input  type="text"  id="last_name" placeholder="Enter your last name" name="lname" maxlength="30" />
                  <span class="error"></span>
                </div>
                <div class="form-group">
                  <label>Email address*</label>
                  <input  type="text"  id="cont_email" placeholder="Enter your email address" name="email" maxlength="50" />
                  <span class="error"></span>
                </div>
                <div class="form-group">
                  <label>Phone no*</label>
                  <div class="user-input">
                    <input id="pcode" type="tel" name="cprefix" maxlength="5" class="pcode-prefix"
                      onkeydown="return false;" onmousedown="return false;">
                    <input id="cont_phpne" type="tel" name="phone" maxlength="12" class="input-field">
                    <span class="errors" id="phone-error"></span>
                  </div>
                </div>
                <div class="form-group companygroup">
                  <label>Company Name*</label>
                  <input type="text" name="company"  maxlength="100" class="form-control" id="company_name" placeholder="Enter company name" />
                  <span class="error"></span>
                </div>
                <div class="form-group">
                  <div id="help-ul" class="form-text-cont width-full">
                    <label>Select company headcount*</label>
                    <div class="select-box active input-field" onclick="apnSelect('help-ul');">
                      <input type="hidden" id="team-size" name="team-size" value="">
                      <span class="error"></span>
                      <a href="javascript:void(0);" class="select-first" id="label-wehelp">Select company headcount</a> 
                      <span class="arrow-btn"></span>
                    </div>
                    <div class="select-list">
                      <ul class="in-options">
                        <li onclick="setoptValue('Self-employed', 'label-wehelp', 'team-size', 'help-ul');">Self-employed</li>
                        <li onclick="setoptValue('1-10', 'label-wehelp', 'team-size', 'help-ul');">1-10</li>
                        <li onclick="setoptValue('11-50', 'label-wehelp', 'team-size', 'help-ul');">11-50</li>
                        <li onclick="setoptValue('51-200', 'label-wehelp', 'team-size', 'help-ul');">51-200</li>
                        <li onclick="setoptValue('201-500', 'label-wehelp', 'team-size', 'help-ul');">201-500</li>
                        <li onclick="setoptValue('501-1000', 'label-wehelp', 'team-size', 'help-ul');">501-1000</li>
                        <li onclick="setoptValue('1001-5000', 'label-wehelp', 'team-size', 'help-ul');">1001-5000</li>
                        <li onclick="setoptValue('5001-10000', 'label-wehelp', 'team-size', 'help-ul');">5001-10000</li>
                        <li onclick="setoptValue('10000+', 'label-wehelp', 'team-size', 'help-ul');">10000+</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="padd">
                  <p><input class="mcheck" id="checkId" name="checkbox" type="checkbox" value="1" checked="">By filling this form, you agree to our&nbsp;<a href="https://www.workstatus.io/privacy-policy" rel=" noopener">Privacy Policy</a></p>
                  <span class="error" id="checkerror"></span>
                </div>
                <div class="captForm">
                  <div class="form-group">
                    <div class="quizQ">
                      <span id="j-quiz">94 + 73</span>
                      <a href="javascript:void(0)" ;="" class="refreshbtn" onclick="generateWsQuiz();"></a>
                    </div>
                    <div class="quizAns">
                      <input type="text" name="captcha" placeholder="??" id="j-quiz-ans" onkeypress="ws_numcheck(event,this);">
                      <span class="error" id="captchaerror"></span>
                    </div>
                  </div>
                  <div class="form-group">   
                    <input type="hidden" name="pageurl" value="<?php the_permalink(); ?>">
                    <input type="hidden" name="tracking_ip" value="<?php echo wpgetUserIP();?>">
                    <input type="hidden" name="referalurl" value="<?php echo $referl;?>">
                    <input type="hidden" name="is-submitted" value="true">
                    <input type="hidden" name="utm_source" 
                      value="<?php echo isset( $ws_utm['utm_source'] ) ? $ws_utm['utm_source'] : ''; ?>">
                    <input type="hidden" name="utm_medium" 
                      value="<?php echo isset( $ws_utm['utm_medium'] ) ? $ws_utm['utm_medium'] : ''; ?>">
                    <input type="hidden" name="utm_campaign" 
                      value="<?php echo isset( $ws_utm['utm_campaign'] ) ? $ws_utm['utm_campaign'] : ''; ?>">
                    <button type="submit" class="btn btn-big btn-primary btn-padding-x" 
                      name="ws-form-sub"  id="submitButton" value="ws-landing">Book A Demo</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </section>
        <?php endwhile; ?>
      </div>
    </div>
  </div>
  <?php dynamic_sidebar('we-belive'); ?>
  <?php
    /*
           $pricingLine = get_field( 'our_pricing' );
           if( $pricingLine ) :
           ?>
  <section class="container cta pricing animate">
    <header>
      <h3 class="cta-heading">Manage your employee with Workstatus and enjoy profit in business.</h3>
      <h3 class="cta-heading"><?php echo $pricingLine['pricing_link']; ?> <span class="blue"><?php echo $pricingLine['price']; ?></span> </h3>
      <p><?php //echo $pricingLine['pricing_tag_line']; ?></p>
    </header>
    <a href="<?php echo wpgetDemoLink(); ?>" target="_blank" class="btn btn-big btn-primary ">Request a Demo Now</a>
  </section>
  <?php endif; */ ?>
  <?php 
    $manageCta = ( get_field('manage-cta-text') ) ? get_field('manage-cta-text') : "Manage your employee with Workstatus and enjoy profit in business."; ?>
  <section class="container cta pricing animate">
    <header>
      <h3 class="cta-heading"><?php echo $manageCta; ?></h3>
    </header>
    <a href="<?php echo wpgetDemoLink(); ?>" class="btn btn-big btn-primary" onclick="topFunction()">Request a Demo Now</a>
  </section>
  <?php 
    $features_cards = get_field( 'features_cards' );
    if( $features_cards ) :
    ?>
  <div class="box-section">
    <div class="container">
      <header class="animate text-center animate-y"><?php echo $features_cards['content']; ?></header>
      <?php 
        $fboxws = $features_cards['cards'];
        if( $fboxws ){
        ?>
      <div class="box-row">
        <?php 
          $i = 0;
          foreach( $fboxws as $row){ $i++;
              echo '<div class="col">
              <i class="icon'.$i.'"></i>
              <h3>'.$row['title'].'</h3>
              <p>'.$row['text'].'</p>
              </div>';
          } 
          ?>                    
      </div>
      <?php } ?>
    </div>
  </div>
  <?php endif; ?>
  <?php 
    $features = get_field( 'features_listing' );
    if( $features ) :
    ?>
  <article class="container time-tracking">
    <header class="animate text-center">
      <h2 class="blue"><?php echo $features['title']; ?></h2>
      <p><?php echo $features['content']; ?></p>
    </header>
    <?php 
      if( $features['features'] ) : 
      foreach( $features['features'] as $row ){
      	//echo '<pre>'; print_r($row); die;
      ?>
    <article>
      <picture class="time-tracking-img mb-upto-lg">
        <source type="<?php echo $row['img_webp']['mime_type']; ?>" srcset="<?php echo $row['img_webp']['url']; ?>" class="animate">
        <source type="<?php echo $row['img']['mime_type']; ?>" srcset="<?php echo $row['img']['url']; ?>" class="animate">
        <img loading="lazy" src="<?php echo $row['img']['url']; ?>" alt="time-tracking image" width="<?php echo $row['img']['width']; ?>" height="<?php echo $row['img']['height']; ?>" class="animate">
      </picture>
      <header class="animate">
        <?php echo $row['feature_content']; ?>
      </header>
    </article>
    <?php 
      }
      endif; ?>
  </article>
  <?php endif; ?>
  <section class="container cta cta-trial animate">
    <h3 class="cta-heading">All-in-one time tracking app.</h3>
    <a href="<?php echo wpgetDemoLink(); ?>" onclick="topFunction()" class="btn btn-big btn-secondary ">Schedule a Demo</a>
  </section>
  <?php 
    $hasVideo = get_field('page_video');
    if( $hasVideo ) :
    ?>
  <section class="container ws-video animate text-center">
    <h3>Watch the video below to see Workstatus app in action!</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolo sed do eiusmore magna aliqua.</p>
    <picture class="ws-video-thumbnail ">
      <source type="image/webp" srcset="<?php bloginfo('template_url'); ?>/img/ws-video-thumbnail.webp" class="animate">
      <source type="image/png" srcset="<?php bloginfo('template_url'); ?>/img/ws-video-thumbnail.png" class="animate">
      <img loading="lazy" src="<?php bloginfo('template_url'); ?>/img/ws-video-thumbnail.png" alt="workstatus video thumbnail image" width="2366" height="1302" class="animate">
    </picture>
  </section>
  <?php endif; ?>
  <?php 
    $hWork = get_field('how-works');
    if( isset($hWork['is-enable']) && ( $hWork['is-enable'] == "yes" ) ) :
    ?>
  <section class="time-tracker animate">
    <div class="container">
      <header class="text-center">
        <?php echo $hWork['top-content']; ?>
      </header>
      <div class="time-row">
        <div class="item">
          <div id="active_Current_Tabs1">
            <div class="flex_row">
              <div class="column-right">
                <picture class="page active" id="p1">
                  <source type="image/webp" srcset="<?php bloginfo('template_url'); ?>/img/track-01.webp">
                  <source type="image/png" srcset="<?php bloginfo('template_url'); ?>/img/track-01.png">
                  <img loading="lazy" src="<?php bloginfo('template_url'); ?>/img/track-01.png" alt="Time Tracking" width="661" height="537">
                </picture>
                <picture class="page" id="p2">
                  <source type="image/webp" srcset="<?php bloginfo('template_url'); ?>/img/track-02.webp">
                  <source type="image/png" srcset="<?php bloginfo('template_url'); ?>/img/track-02.png">
                  <img loading="lazy" src="<?php bloginfo('template_url'); ?>/img/track-02.png" alt="Time Tracking" width="661" height="537">
                </picture>
                <picture class="page" id="p3">
                  <source type="image/webp" srcset="<?php bloginfo('template_url'); ?>/img/track-03.webp">
                  <source type="image/png" srcset="<?php bloginfo('template_url'); ?>/img/track-03.png">
                  <img loading="lazy" src="<?php bloginfo('template_url'); ?>/img/track-03.png" alt="Time Tracking" width="661" height="537">
                </picture>
                <picture class="page" id="p4">
                  <source type="image/webp" srcset="<?php bloginfo('template_url'); ?>/img/track-04.webp">
                  <source type="image/png" srcset="<?php bloginfo('template_url'); ?>/img/track-04.png">
                  <img loading="lazy" src="<?php bloginfo('template_url'); ?>/img/track-04.png" alt="Time Tracking" width="661" height="537">
                </picture>
              </div>
              <div class="column-left">
                <div class="all-content">
                  <div class="text-column active" id="t1" data-section="active_Current_Tabs1">
                    <h3>Attendance through computer application</h3>
                    <p>We provide a simple Computer application to record attendance using different
                      variables such as login time, break time, long off time and much more.
                    </p>
                  </div>
                  <div class="mob-image">
                    <picture>
                      <source type="image/webp" srcset="<?php bloginfo('template_url'); ?>/img/track-01.webp">
                      <source type="image/png" srcset="<?php bloginfo('template_url'); ?>/img/track-01.png">
                      <img loading="lazy" src="<?php bloginfo('template_url'); ?>/img/track-01.png" alt="Time Tracking" width="661" height="537">
                    </picture>
                  </div>
                </div>
                <div class="all-content">
                  <div class="text-column" id="t2" data-section="active_Current_Tabs1">
                    <h3>Check the analytical dashboard</h3>
                    <p>Using a graphic rich analytical dashboard, managers can analyse time spend by
                      individual employees on a task and make effective decisions on the spot.
                    </p>
                  </div>
                  <div class="mob-image">
                    <picture>
                      <source type="image/webp" srcset="<?php bloginfo('template_url'); ?>/img/track-02.webp">
                      <source type="image/png" srcset="<?php bloginfo('template_url'); ?>/img/track-02.png">
                      <img loading="lazy" src="<?php bloginfo('template_url'); ?>/img/track-02.png" alt="Time Tracking" width="661" height="537">
                    </picture>
                  </div>
                </div>
                <div class="all-content">
                  <div class="text-column" id="t3" data-section="active_Current_Tabs1">
                    <h3>Alerts on being idle</h3>
                    <p>Whenever your employees are not working up to the standards, this software will
                      automatically send idle alerts to your email or dashboard so you can immediately
                      stop ideal timing in your organisation.
                    </p>
                  </div>
                  <div class="mob-image">
                    <picture>
                      <source type="image/webp" srcset="<?php bloginfo('template_url'); ?>/img/track-03.webp">
                      <source type="image/png" srcset="<?php bloginfo('template_url'); ?>/img/track-03.png">
                      <img loading="lazy" src="<?php bloginfo('template_url'); ?>/img/track-03.png" alt="Time Tracking" width="661" height="537">
                    </picture>
                  </div>
                </div>
                <div class="all-content">
                  <div class="text-column" id="t4" data-section="active_Current_Tabs1">
                    <h3>Check reports for all applications and productivity</h3>
                    <p>There is no need to sit in front of your computer to monitor or track your team's
                      performance. Simply get instant tasks related notifications via a Workstatus task
                      management mobile app.
                    </p>
                  </div>
                  <div class="mob-image">
                    <picture>
                      <source type="image/webp" srcset="<?php bloginfo('template_url'); ?>/img/track-04.webp">
                      <source type="image/png" srcset="<?php bloginfo('template_url'); ?>/img/track-04.png">
                      <img loading="lazy" src="<?php bloginfo('template_url'); ?>/img/track-04.png" alt="Time Tracking" width="661" height="537"> 
                    </picture>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php /* ?>
  <section class="time-tracker animate">
    <div class="container">
      <header class="text-center">
        <?php $hWork['top-content']; ?>
      </header>
      <?php if( $hWork['blocks'] ) : ?>
      <div class="time-row">
        <div class="item">
          <div id="active_Current_Tabs1">
            <div class="flex_row">
              <div class="column-right">
                <?php 
                  $p = 0;
                  foreach( $hWork['blocks'] as $iblock ){ $p++;
                      $isActive   = ( $p == 1 ) ? ' active' : '';
                      $thumb      = $iblock['image'];
                      $thumbWebp  = $iblock['image-webp'];
                      if( $thumb && $thumbWebp ){
                      echo '<picture class="page '.$isActive.'" id="p'.$p.'">
                      <source type="image/webp" srcset="'.$thumbWebp['url'].'">
                      <source type="'.$thumb['mime_type'].'" srcset="'.$thumb['url'].'">
                      <img loading="lazy" src="'.$thumb['url'].'" alt="'.$thumb['title'].'" width="'.$thumb['width'].'" height="'.$thumb['height'].'"> 
                      </picture>';  
                      }
                      
                  } 
                  ?>
              </div>
              <div class="column-left">
                <?php 
                  $c = 0;
                  foreach( $hWork['blocks'] as $cblock ){ $c++;
                      $isActive   = ( $c == 1 ) ? ' active' : '';
                      echo '<div class="all-content">
                    <div class="text-column '.$isActive.'" id="t'.$c.'" data-section="active_Current_Tabs1">
                       '.$cblock['content'].'
                    </div>';
                      $thumb      = $iblock['image'];
                      $thumbWebp  = $iblock['image-webp'];
                      if( $thumb && $thumbWebp ){
                      echo '<div class="mob-image"><picture>
                      <source type="image/webp" srcset="'.$thumbWebp['url'].'">
                      <source type="'.$thumb['mime_type'].'" srcset="'.$thumb['url'].'">
                      <img loading="lazy" src="'.$thumb['url'].'" alt="'.$thumb['title'].'" width="'.$thumb['width'].'" height="'.$thumb['height'].'"> 
                      </picture></div>';  
                      }
                  echo '</div>';
                  }
                  ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php endif; ?>
    </div>
  </section>
  <?php */ ?>
  <?php endif; ?>
  <?php 
    $testimonails = get_field( 'testimonials-list', 'option' );
    if( $testimonails ) : 
    //echo '<pre>'; print_r( $testimonails );
    ?>
  <section class="container  testimonials-wrap animate" style="margin-top:100px;">
    <header class="text-center">
      <h3><?php the_field('section_heading', 'option'); ?></h3>
      <p><?php the_field('section_content', 'option'); ?></p>
    </header>
    <div class="glider-contain">
      <div class="glider testimonials">
        <?php foreach( $testimonails as $testimonail ) : ?>
        <div>
          <div class="testimonial">
            <p><?php echo $testimonail['comment']; ?></p>
            <address>
              <div class="author-img">
                <picture>
                  <source type="<?php echo $testimonail['image-webp']['mime_type']; ?>" srcset="<?php echo $testimonail['image-webp']['url']; ?>">
                  <source type="<?php echo $testimonail['image']['mime_type']; ?>" srcset="<?php echo $testimonail['image']['url']; ?>">
                  <img loading="lazy" src="<?php echo $testimonail['image']['url']; ?>" alt="time-tracking image" width="<?php echo $testimonail['image']['width']; ?>" height="<?php echo $testimonail['image']['height']; ?>">
                </picture>
              </div>
              <div class="author-info">
                <p><?php echo $testimonail['client_name']; ?></p>
                <p><?php echo $testimonail['client_organisation']; ?></p>
                <div class="ratingStars">
                  <div class="rating-star">
                    <picture>
                      <source type="<?php echo $testimonail['star_rating_image']['mime_type']; ?>" srcset="<?php echo $testimonail['star_rating_image']['url']; ?>">
                      <source type="<?php echo $testimonail['star_image']['mime_type']; ?>" srcset="<?php echo $testimonail['star_image']['url']; ?>">
                      <img loading="lazy" src="<?php echo $testimonail['star_image']['url']; ?>" alt="Star Rating" width="<?php echo $testimonail['star_image']['width']; ?>" height="<?php echo $testimonail['image']['height']; ?>">
                    </picture>
                  </div>
                  <span class="count"><?php echo $testimonail['star_rating']; ?></span>
                </div>
              </div>
            </address>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
      <div role="tablist" class="dots"></div>
    </div>
  </section>
  <?php endif; ?>
  <section class=" start-ws animate">
    <div class="container text-center">
      <h3>Start your WorkStatus journey today!</h3>
      <p>Get detailed and clean activity reports of your team. Track time efficiently.</p>
      <a href="<?php echo wpgetDemoLink(); ?>"  onclick="topFunction()" class="btn btn-big btn-secondary btn-padding-x ">Request a Demo</a>
    </div>
  </section>
  <?php 
    $faq = get_field('landing-faq');
    if( isset($faq['is-enable']) && ( $faq['is-enable'] == "yes" ) ) :
    ?>
  <section class="faqsRow animate">
    <div class="container">
      <header class="text-center">
        <h2>Frequently asked questions</h2>
      </header>
      <div class="flex_row">
        <div itemscope itemtype="https://schema.org/FAQPage">
          <div class="column">
            <div class="faq-accordion-item-outer" itemscope itemprop="mainEntity"
              itemtype="https://schema.org/Question">
              <h3 itemprop="name">How much does it cost?
              </h3>
              <div class="faq-accordion-content">
                <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                  <div itemprop="text">
                    <p>The initial set up will take around 10 minutes for the admin and 3-5 minutes for the users of the software plus a few minutes to watch training videos. After that it takes very little time each day (a few minutes)
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="faq-accordion-item-outer open" itemscope itemprop="mainEntity"
              itemtype="https://schema.org/Question">
              <h3 itemprop="name">How much time will it take to use workstatus?
              </h3>
              <div class="faq-accordion-content">
                <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                  <div itemprop="text">
                    <p>The initial set up will take around 10 minutes for the admin and 3-5 minutes for the users of the software plus a few minutes to watch training videos. After that it takes very little time each day (a few minutes)
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="faq-accordion-item-outer" itemscope itemprop="mainEntity"
              itemtype="https://schema.org/Question">
              <h3 itemprop="name">Can workstatus monitor the websites that I or my team visit?
              </h3>
              <div class="faq-accordion-content">
                <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                  <div itemprop="text">
                    <p>The initial set up will take around 10 minutes for the admin and 3-5 minutes for the users of the software plus a few minutes to watch training videos. After that it takes very little time each day (a few minutes)
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="faq-accordion-item-outer" itemscope itemprop="mainEntity"
              itemtype="https://schema.org/Question">
              <h3 itemprop="name">Is my data stored in a secure environment?
              </h3>
              <div class="faq-accordion-content">
                <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                  <div itemprop="text">
                    <p>The initial set up will take around 10 minutes for the admin and 3-5 minutes for the users of the software plus a few minutes to watch training videos. After that it takes very little time each day (a few minutes)
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="faq-accordion-item-outer" itemscope itemprop="mainEntity"
              itemtype="https://schema.org/Question">
              <h3 itemprop="name">What are the hardware and software requirements?
              </h3>
              <div class="faq-accordion-content">
                <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                  <div itemprop="text">
                    <p>The initial set up will take around 10 minutes for the admin and 3-5 minutes for the users of the software plus a few minutes to watch training videos. After that it takes very little time each day (a few minutes)
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="faq-accordion-item-outer" itemscope itemprop="mainEntity"
              itemtype="https://schema.org/Question">
              <h3 itemprop="name">Can users record time when offline?
              </h3>
              <div class="faq-accordion-content">
                <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                  <div itemprop="text">
                    <p>The initial set up will take around 10 minutes for the admin and 3-5 minutes for the users of the software plus a few minutes to watch training videos. After that it takes very little time each day (a few minutes)
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="faq-accordion-item-outer" itemscope itemprop="mainEntity"
              itemtype="https://schema.org/Question">
              <h3 itemprop="name">Are there any privacy concerns?
              </h3>
              <div class="faq-accordion-content">
                <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                  <div itemprop="text">
                    <p>The initial set up will take around 10 minutes for the admin and 3-5 minutes for the users of the software plus a few minutes to watch training videos. After that it takes very little time each day (a few minutes)
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="faq-accordion-item-outer" itemscope itemprop="mainEntity"
              itemtype="https://schema.org/Question">
              <h3 itemprop="name">How can I use We360.ai to ensure that my team is working productively?
              </h3>
              <div class="faq-accordion-content">
                <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                  <div itemprop="text">
                    <p>The initial set up will take around 10 minutes for the admin and 3-5 minutes for the users of the software plus a few minutes to watch training videos. After that it takes very little time each day (a few minutes)
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="faq-accordion-item-outer" itemscope itemprop="mainEntity"
              itemtype="https://schema.org/Question">
              <h3 itemprop="name">I don't need to ``monitor`` my team. Is there any benefit to this software?
              </h3>
              <div class="faq-accordion-content">
                <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                  <div itemprop="text">
                    <p>I don't need to ``monitor`` my team. Is there any benefit to this software?
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="faq-accordion-item-outer" itemscope itemprop="mainEntity"
              itemtype="https://schema.org/Question">
              <h3 itemprop="name">Does this software work for individuals?
              </h3>
              <div class="faq-accordion-content">
                <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                  <div itemprop="text">
                    <p>I don't need to ``monitor`` my team. Is there any benefit to this software?
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="faq-accordion-item-outer" itemscope itemprop="mainEntity"
              itemtype="https://schema.org/Question">
              <h3 itemprop="name">Will I get resistance in my organization in implementing this software?
              </h3>
              <div class="faq-accordion-content">
                <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                  <div itemprop="text">
                    <p>I don't need to ``monitor`` my team. Is there any benefit to this software?
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="faq-accordion-item-outer" itemscope itemprop="mainEntity"
              itemtype="https://schema.org/Question">
              <h3 itemprop="name">Does this software work for individuals?
              </h3>
              <div class="faq-accordion-content">
                <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                  <div itemprop="text">
                    <p>The initial set up will take around 10 minutes for the admin and 3-5 minutes for the users of the software plus a few minutes to watch training videos. After that it takes very little time each day (a few minutes)
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php 
        /*
        if( $faq['blocks'] ){
            echo '<div class="flex_row"><div itemscope itemtype="https://schema.org/FAQPage"><div class="column">';
            $f = 0;
            foreach( $faq['blocks'] as $row ){ $f++;
                $isOpen = ( $f === 2 ) ? ' open' : '';
                echo '<div class="faq-accordion-item-outer '.$isOpen.'" itemscope itemprop="mainEntity"
                    itemtype="https://schema.org/Question">
                    <h3 itemprop="name">'.$row['question'].'</h3>
                    <div class="faq-accordion-content">
                       <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                          <div itemprop="text">'.$row['answer'].'</div>
                       </div>
                    </div>
                 </div>';
            }
            echo '</div></div></div>';
        } 
        */
        ?>
    </div>
  </section>
  <?php endif; ?>
</main>
<?php
//get_sidebar();
get_footer();
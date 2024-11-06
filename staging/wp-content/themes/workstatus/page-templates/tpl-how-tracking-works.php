<?php
  /* 
  Template Name: How Tracking Works Template 
  Author : Gaurav K.
  */
  get_header();
  global $ws_ctas, $RegLink, $LogLink;
  ?>
<main class="site__content">
  <?php
    $banner_section = get_field('banner_section');
    $bsEnabled         = $banner_section['is_enabled'];
    if ($bsEnabled == 'yes') :
    ?>
  <section class="inner-banner">
    <div class="container">
      <div class="inner-wrap">
        <h1><?php echo $banner_section['heading']; ?></h1>
        <?php echo $banner_section['content']; ?>
        <div class="actionBtn">
          <div>
            <a href="javascript:void(0)" onclick="call_demows();" class="primary_btn2">Talk To Sales</a>
          </div>
        </div>
        <?php 
          $vdScreenshot = '';
          if(
          isset( $banner_section['video_background_image'] ) && 
          !empty( $banner_section['video_background_image'] ) 
          ){
          $vdScreenshot = ' style="background: url('.wsGetWebpSrcUrl($banner_section['video_background_image']['id']).'); background-size: contain; background-repeat: no-repeat; background-position: center;"';
          }
          ?>
        <?php //require_once get_template_directory().'/common/available-device.php'; ?>
        <?php //require_once get_template_directory(). '/common/partners.php'; ?>
        <div class="video-wrap">
          <div class="videoSc" id="has-yt-video">
            <div class="inner">
              <div class="topVideo srp-2">
                <div id="myDIV" class="contbox2">
                  <div class="videoWrapper">
                    <button class="videoPoster lazy-background wslazy" id="play-button" <?php echo $vdScreenshot; ?>>Play video</button>
                  </div>
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
    $smart_approach = get_field('smart_approach');
    
    if( $smart_approach ) :
    $isEnable = $smart_approach['is_enabled'];
    if( $isEnable == "yes" ){ 
    ?>
  <section class="benifits-section">
    <div class="container">
      <div class="top-section">
        <h6><span class="bg-purple"><?php echo $smart_approach['heading']; ?></span></h6>
        <h2><?php echo $smart_approach['sub_heading']; ?></h2>
      </div>
      <div class="flex_row">
        <?php 
          if( $smart_approach['content_repeater'] ){  $i = 1;
          	foreach( $smart_approach['content_repeater'] as $row ) { 
               $icon = $row['image'];
                 ?>	
        <div class="column-three">
          <?php
            if ($icon) {
                echo pxlGetPtag($icon);
            } else {
                echo '<i class="icon' . $i . '"></i>';
            }
            ?>
          <h3><?php echo $row['heading'];?></h3>
          <?php echo $row['content'];?>
        </div>
        <?php $i++; } } ?>
      </div>
    </div>
  </section>
  <?php } endif; ?>
  <?php
    $how_track = get_field('how_track');
    $bsEnabled         = $how_track['is_enabled'];
    if ($bsEnabled == 'yes') :
    ?>
  <section class="howtrack">
    <div class="container">
      <div class="flex_row align-center">
        <div class="column-left">
          <?php
            if ($how_track['content_repeater']) {
                foreach ($how_track['content_repeater'] as $row) {
            ?>
          <div class="row">
            <h3><?php echo $row['heading'] ?></h3>
            <?php echo $row['content'] ?>
          </div>
          <?php
            }
            } ?>
          <!-- <div class="row">
            <h3>You Have Direct Access To All Of Your Own Data</h3>
            <p>Workstatus is the best time and project management tool that can help you track your time and projects. With it, you can easily manage your work schedule, tasks, and deadlines. It's a great way to increase your productivity and stay organized.
            </p>
            </div>
            <div class="row">
            <h3>Innovative Solutions Dissolve Today's Workplace Difficulties</h3>
            <p>We feel that today's workplace problems are more severe than in the past. The present international scenario has resulted in a fast yet abrupt adjustment to new norms. As a result, we've developed eight fantastic ideas for keeping your company wholly safe and secure.</p>
            </div> -->
        </div>
        <div class="column-right">
          <?php
            $image = $how_track['image'];
            if ($image) {
                echo '<picture>
                ' . getPxlWebpURL($image['ID']) . '
                <source type="' . $image['mime_type'] . '" srcset="' . $image['url'] . '">
                <img loading="lazy" src="' . $image['url'] . '" alt="' . $image['title'] . '" width="' . $image['width'] . '" 
                height="' . $image['height'] . '"> 
                </picture>';
            } ?>
          <!-- <picture>
            <source type="image/webp" srcset="./assests/images/screenshots.webp">
            <source type="image/png" srcset="./assests/images/screenshots.png">
            <img loading="lazy" src="./assests/images/screenshots.png" alt="Websites &amp; Apps Usage Tracking" width="546" height="578">
            </picture> -->
        </div>
      </div>
    </div>
  </section>
  <?php endif; ?>
  <?php
    $features = get_field('features');
    $bsEnabled         = $features['is_enabled'];
    if ($bsEnabled == 'yes') :
    ?>
  <section class="table-section">
    <div class="container">
      <div class="top-section">
        <h6><span class="bg-purple"><?php echo $features['heading']; ?></span></h6>
        <?php 
          if( isset($features['sub_heading']) && !empty($features['sub_heading']) ){
              echo '<h2>'.$features['sub_heading'].'</h2>';
          } 
          ?>
        <?php echo $features['content']; ?>
      </div>
      <div class="table-container">
        <table class="track-table">
          <thead>
            <tr>
              <?php
                if ($features['tbl_header_repeater']) {
                    $i = 1;
                    foreach ($features['tbl_header_repeater'] as $row) {
                        $active = ($i == 1) ? 'class="first"' : "";
                        $span = ($i == 1) ? '<span class="appclient">' : "";
                        $spanclose = ($i == 1) ? '</span>' : "";
                ?>
              <th <?php echo $active; ?>><?php echo $span; ?><?php echo $row['heading']; ?><?php echo $spanclose; ?></th>
              <?php $i++;
                }
                } ?>
            </tr>
          </thead>
          <tbody>
            <?php
              if ($features['features_repeater']) {
                  foreach ($features['features_repeater'] as $row) {
                      $image = $row['icon'];
              ?>
            <tr>
              <td class="first">
                <div class="td-data">
                  <i><img src="<?php echo $image['url'] ?>" alt="howtrack"></i>
                  <h6><?php echo $row['title']; ?></h6>
                </div>
              </td>
              <td>
                <?php 
                  if($row['check1']){
                      echo '<svg aria-hidden="true"><use xlink:href="'.get_bloginfo('template_url').'/assests/images/icons/featuresicon.svg#check"></use></svg>';
                  }                                                
                  ?>
              </td>
              <td>
                <?php 
                  if($row['check2']){
                      echo '<svg aria-hidden="true"><use xlink:href="'.get_bloginfo('template_url').'/assests/images/icons/featuresicon.svg#check"></use></svg>';
                  }                                                
                  ?>
              </td>
              <td>
                <?php 
                  if($row['check3']){
                      echo '<svg aria-hidden="true"><use xlink:href="'.get_bloginfo('template_url').'/assests/images/icons/featuresicon.svg#check"></use></svg>';
                  }                                                
                  ?>
              </td>
              <td>
                <?php 
                  if($row['check4']){
                      echo '<svg aria-hidden="true"><use xlink:href="'.get_bloginfo('template_url').'/assests/images/icons/featuresicon.svg#check"></use></svg>';
                  }                                                
                  ?>
              </td>
              <td>
                <?php 
                  if($row['check5']){
                      echo '<svg aria-hidden="true"><use xlink:href="'.get_bloginfo('template_url').'/assests/images/icons/featuresicon.svg#check"></use></svg>';
                  }                                                
                  ?>
              </td>
              <td>
                <?php 
                  if($row['check6']){
                      echo '<svg aria-hidden="true"><use xlink:href="'.get_bloginfo('template_url').'/assests/images/icons/featuresicon.svg#check"></use></svg>';
                  }                                                
                  ?>
              </td>
              <td><?php 
                if($row['check7']){
                    echo '<svg aria-hidden="true"><use xlink:href="'.get_bloginfo('template_url').'/assests/images/icons/featuresicon.svg#check"></use></svg>';
                }                                                
                ?></td>
            </tr>
            <?php  }
              } ?>
          </tbody>
        </table>
      </div>
      <div class="customizable">
        <h3><i></i><?php echo $features['bottom_heading']; ?></h3>
        <?php echo $features['bottom_content']; ?>
      </div>
    </div>
  </section>
  <?php endif; ?>
  <section class="how-step-sec post-animation">
    <div class="container">
      <div class="top-section">
        <h6><span class="bg-purple">Smarter. Better. Transparent</span></h6>
        <h2>Advanced Technology To Keep You Ahead</h2>
        <p>Stay Ahead with Workstatus Powerkit, helping you work smarter and achieve more.</p>
      </div>
      <div class="step-section">
        <div class="step-row flex_row">
          <div class="content-col">
            <div class="top-section">
              <h3>Smart Decisions With Real-Time Insights</h3>
              <p>Get real-time insights into how your teams are working. It helps you make better decisions by showing you how you are spending your time, your busiest days, and where your time is most productive.</p>
              <ul>
                <li>Productivity Trends</li>
                <li>Apps &amp; Websites Activity</li>
                <li>Track Idle Time</li>
              </ul>
              <a href="#" class="read-more">Learn More</a>
            </div>
          </div>
          <div class="image-col">
            <picture>
              <source type="image/webp" srcset="<?php bloginfo("template_url"); ?>/assests/images/how-01.png">
              <source type="image/png" srcset="<?php bloginfo("template_url"); ?>/assests/images/how-01.png">
              <img loading="lazy" src="<?php bloginfo("template_url"); ?>/assests/images/how-01.png" alt="ra-01" width="601" height="440">
            </picture>
          </div>
        </div>
        <div class="step-row flex_row">
          <div class="content-col">
            <div class="top-section">
              <h3>Automate Attendance With Geofencing</h3>
              <p>Employees can check in and out of work sites based on defined virtual locations. It eliminates the need for employees to check in and out manually or for employers to track employee hours.</p>
              <ul>
                <li>No Buddy Punching</li>
                <li>Online Timesheets</li>
                <li>Attendance Reports</li>
              </ul>
              <a href="#" class="read-more">Learn More</a>
            </div>
          </div>
          <div class="image-col">
            <picture>
              <source type="image/webp" srcset="<?php bloginfo("template_url"); ?>/assests/images/how-02.png">
              <source type="image/png" srcset="<?php bloginfo("template_url"); ?>/assests/images/how-02.png">
              <img loading="lazy" src="<?php bloginfo("template_url"); ?>/assests/images/how-02.png" alt="ra-01" width="601" height="440">
            </picture>
          </div>
        </div>
        <div class="step-row flex_row">
          <div class="content-col">
            <div class="top-section">
              <h3>Automate Invoice Management</h3>
              <p>Create, manage, and send invoices automatically. With our software, you can rest assured that your invoices will be professional and accurate.</p>
              <ul>
                <li>Timely Payments</li>
                <li>Apps &amp; Websites Activity</li>
                <li>Alerts & Reminders</li>
              </ul>
              <a href="#" class="read-more">Learn More</a>
            </div>
          </div>
          <div class="image-col">
            <picture>
              <source type="image/webp" srcset="<?php bloginfo("template_url"); ?>/assests/images/how-03.png">
              <source type="image/png" srcset="<?php bloginfo("template_url"); ?>/assests/images/how-03.png">
              <img loading="lazy" src="<?php bloginfo("template_url"); ?>/assests/images/how-03.png" alt="ra-01" width="601" height="440">
            </picture>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php
    $timeline = get_field('timeline');
    $bsEnabled         = $timeline['is_enabled'];
    if ($bsEnabled == 'yes') :
    ?>
  <section class="timeline">
    <div class="container">
      <div class="top-section">
        <h6><span class="bg-purple"><?php echo $timeline['heading']; ?>How It Works </span></h6>
        <?php 
          if( isset($timeline['sub_heading']) && !empty($timeline['sub_heading']) ){
          echo '<h2>'.$timeline['sub_heading'].'</h2>';
          } 
          ?>
      </div>
      <div class="trackRow">
        <div class="trackImg">
          <?php
            $image = $timeline['left_image'];
            if ($image) {
                echo '<picture>
                ' . getPxlWebpURL($image['ID']) . '
                <source type="' . $image['mime_type'] . '" srcset="' . $image['url'] . '">
                <img loading="lazy" src="' . $image['url'] . '" alt="' . $image['title'] . '" width="' . $image['width'] . '" 
                height="' . $image['height'] . '"> 
                </picture>';
            } ?>
        </div>
        <div class="trackContent">
          <?php
            if ($timeline['content_repeater']) {
                foreach ($timeline['content_repeater'] as $row) {
            ?>
          <div class="row">
            <h3><?php echo $row['heading'] ?></h3>
            <?php echo $row['content'] ?>
          </div>
          <?php
            }
            } ?>
        </div>
      </div>
    </div>
  </section>
  <?php endif; ?>
  <section class="wsMobile whitetxt">
    <?php require_once get_template_directory() . '/common/workstatus-device.php'; ?>
  </section>
  <?php
    $faqs = get_field('faqs');
    $bsEnabled         = $faqs['is_enabled'];
    if ($bsEnabled == 'yes') :
    ?>
  <section class="faqsRow wfull for-heading-center">
    <div class="container">
      <div class="top-section">
        <h6><span class="bg-purple"><?php echo $faqs['heading']; ?></span></h6>
        <?php 
          if( isset($faqs['sub_heading']) && !empty($faqs['sub_heading']) ){
              echo '<h2>'.$faqs['sub_heading'].'</h2>';
          } 
          ?>
      </div>
      <div class="flex_row">
        <div itemscope itemtype="https://schema.org/FAQPage">
          <div class="column">
            <?php
              if ($faqs['faq_repeater']) {
                  $i = 1;
                  foreach ($faqs['faq_repeater'] as $row) {
                      //$active = ($i == 1) ? "open" : "";
                      $active = ($i <= 3) ? "open" : "";
              ?>
            <div class="faq-accordion-item-outer <?php echo $active; ?>" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
              <h3 itemprop="name"><?php echo $row['heading']; ?>
              </h3>
              <div class="faq-accordion-content">
                <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                  <div itemprop="text">
                    <?php echo $row['content']; ?>
                  </div>
                </div>
              </div>
            </div>
            <?php $i++;
              }
              } ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php endif; ?>
  <?php require_once get_template_directory() . '/common/workstatus-journey.php'; ?>
</main>
<?php get_footer(); ?>
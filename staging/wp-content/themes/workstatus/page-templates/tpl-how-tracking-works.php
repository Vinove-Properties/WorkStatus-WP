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
    $top_platforms = get_field('top_platforms');
    $bsEnabled         = $top_platforms['is_enabled'];
    if ($bsEnabled == 'yes') :
    ?>
  <section class="howtrack mt0">
    <div class="container">
      <div class="top-section">
        <h6><span class="bg-purple"><?php echo $banner_section['heading']; ?></span></h6>
        <?php 
          if( isset($banner_section['sub_heading']) && !empty($banner_section['sub_heading']) ){
          echo '<h2>'.$banner_section['sub_heading'].'</h2>';
          } 
          ?>
      </div>
      <div class="flex_row">
        <div class="column-left">
          <?php
            if ($top_platforms['content_repeater']) {
                $i = 1;
                foreach ($top_platforms['content_repeater'] as $row) {
            ?>
          <div class="row">
            <h3><?php echo $row['heading'] ?></h3>
            <?php echo $row['content'] ?>
          </div>
          <?php $i++;
            }
            } ?>
          <!-- <div class="row">
            <h3>Have A Complete Control</h3>
            <p>Workstatus give teams complete control over their workflows and processes. Workstatus ensures that everyone is always on the same page and provides all the information needed to get the job done efficiently. Workstatus is heavily customizable, so you can tailor it to fit your specific needs.</p>
            </div>
            <div class="row">
            <h3>Ensure Better Performance </h3>
            <p>Workstatus helps ensure better performance in the workplace. Managers can identify areas where employees may need assistance or improvement by tracking employee activities and providing feedback. Also, employees can use Workstatus to assess their own performance and track their progress over time.</p>
            </div> -->
        </div>
        <div class="column-right">
          <?php
            $image = $top_platforms['image'];
            if ($image) {
                echo '<picture>
                ' . getPxlWebpURL($image['ID']) . '
                <source type="' . $image['mime_type'] . '" srcset="' . $image['url'] . '">
                <img loading="lazy" src="' . $image['url'] . '" alt="' . $image['title'] . '" width="' . $image['width'] . '" 
                height="' . $image['height'] . '"> 
                </picture>';
            } ?>
          <!-- <picture>
            <source type="image/webp" srcset="./assests/images/buit-track.webp">
            <source type="image/png" srcset="./assests/images/buit-track.png">
            <img loading="lazy" src="./assests/images/buit-track.png" alt="Websites &amp; Apps Usage Tracking" width="582" height="495">
            </picture> -->
        </div>
      </div>
    </div>
  </section>
  <?php endif; ?>
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
          <!-- <div class="row">
            <h3>Download & Install WorkStatus™</h3>
            <p>Simply download and install WorkStatus on any computer or mobile and sign up for an account. It's as easy as that. Once you have installed WorkStatus, your system is ready to generate reports and track productivity right away.</p>
            </div>
            <div class="row">
            <h3>Start Monitoring productivity</h3>
            <p>By tracking employee engagement, workstatus helps managers identify issues early on and take corrective action. The insights provided by Workstatus also help businesses improve their strategies for better results. </p>
            </div>
            <div class="row">
            <h3>Auto-Generate Reports</h3>
            <p>Workstatus delivers automatic reports on the status of your projects. With Workstatus, you'll always know where your project stands and can easily share that information with your team.</p>
            </div> -->
        </div>
      </div>
    </div>
  </section>
  <?php endif; ?>
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
  <?php
    $time_tracking = get_field('time_tracking');
    $bsEnabled         = $time_tracking['is_enabled'];
    if ($bsEnabled == 'yes') :
    ?>
  <section class="middle-section feature-section">
    <div class="item">
      <div class="container">
        <div class="top-section">
          <h6><span class="bg-purple"><?php echo $time_tracking['heading']; ?></span></h6>
          <?php 
            if( isset($time_tracking['sub_heading']) && !empty($time_tracking['sub_heading']) ){
                echo '<h2>'.$time_tracking['sub_heading'].'</h2>';
            } 
            if(isset($time_tracking['content']) && !empty($time_tracking['content'])){
                echo '<p>'.$time_tracking['content'].'</p>';
            }
            ?>
        </div>
        <div id="active_Current_Tabs1">
          <div class="flex_row">
            <div class="column-right">
              <?php
                if ($time_tracking['tracking_repeater']) {
                    $i = 1;
                    foreach ($time_tracking['tracking_repeater'] as $row) {
                        $image      = $row['image'];
                        $active = ($i == 1) ? "active" : "";
                ?>
              <?php if ($image) {
                echo '<picture class="page ' . $active . '" id="p' . $i . '" >
                ' . getPxlWebpURL($image['ID']) . '
                <source type="' . $image['mime_type'] . '" srcset="' . $image['url'] . '">
                <img loading="lazy" src="' . $image['url'] . '" alt="' . $image['title'] . '" width="' . $image['width'] . '" 
                height="' . $image['height'] . '"> 
                </picture>';
                } ?>
              <?php $i++;
                }
                } ?>
            </div>
            <div class="column-left">
              <?php
                if ($time_tracking['tracking_repeater']) {
                    $i = 1;
                    foreach ($time_tracking['tracking_repeater'] as $row) {
                        $image      = $row['image'];
                        $active = ($i == 1) ? "active" : "";
                ?>
              <div class="all-content">
                <div class="text-column <?php echo $active; ?>" id="t<?php echo $i; ?>" data-section="active_Current_Tabs1">
                  <h3><?php echo $row['heading']; ?></h3>
                  <?php echo $row['content']; ?>
                </div>
                <div class="mob-image">
                  <?php if ($image) {
                    echo '<picture>
                    ' . getPxlWebpURL($image['ID']) . '
                    <source type="' . $image['mime_type'] . '" srcset="' . $image['url'] . '">
                    <img loading="lazy" src="' . $image['url'] . '" alt="' . $image['title'] . '" width="' . $image['width'] . '" 
                    height="' . $image['height'] . '"> 
                    </picture>';
                    } ?>
                </div>
              </div>
              <?php $i++;
                }
                } ?>
            </div>
          </div>
        </div>
        <div class="mt40 btnSc">
          <!-- <p><?php echo $time_tracking['top_button_text']; ?></p>
            <a href="javascript:void(0)" onclick="call_demows();" class="primary_btn1"><?php echo $time_tracking['button_text']; ?></a>
            <small><?php echo $time_tracking['bottom_button_text']; ?></small> -->
          <?php echo wsDemoCta(); ?>
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
<?php 
/*
Template Name: Geofence Page Template
Author : Neeraj Rai
*/ 
get_header();
global $ws_ctas, $RegLink, $LogLink, $post;

$thisPostID = $post->ID;
?>
<main class="site__content">
		<?php  
		$top_section = get_field('top_section');		
		if( $top_section ) :
		$isEnable = $top_section['is_enabled'];
		if( $isEnable == "yes" ){ 
		?>
        <section class="inner-banner"  >
          <div class="container">
            <div class="inner-wrap">
              <h1><?php echo $top_section['heading']; ?></h1>
              <p><?php echo $top_section['sub_heading']; ?></p>              
              
              <div class="actionBtn">
                <?php if( geoCTAcheck() === true ) : ?>
                <div><a data-href="<?php echo $RegLink; ?>" href="javascript:void(0);" class="primary_btn1" onclick="return get_ws_signupform(this);"><?php echo $ws_ctas['cta_text']; ?></a>
                  <?php $buttontexttrial = ($top_section['trial_button_bottom_text']) ? $top_section['trial_button_bottom_text'] : 'No credit card required'; ?>
                  <small>
                    No credit card required
                    <?php //echo $buttontexttrial;?>                      
                  </small>
                </div>
                <?php endif; ?>
                <div><a href="javascript:void(0)" onclick="call_demows();" class="primary_btn2">Book A Demo</a>
                <?php $buttontextdemo = ($top_section['trial_button_bottom_text']) ? $top_section['demo_button_bottom_text'] : 'Get queries answered from experts'; ?>
                  <small><?php echo $buttontextdemo; ?></small>
                </div>
              </div>

              <!--
              // Global Btn Req.  
              <div class="actionBtn">
                <?php if( geoCTAcheck() === true ) : ?>
                <div><a href="<?php echo $RegLink; ?>"
                  class="primary_btn1"><?php  echo $ws_ctas['cta_text']; ?></a>
                  <small><?php echo $top_section['trial_button_bottom_text']; ?></small>
                </div>
                <?php endif; ?>
                <div><a href="javascript:void(0)" onclick="call_demows();" class="primary_btn2 formbtn">Book A Demo</a>
                  <small><?php echo $top_section['demo_button_bottom_text']; ?></small>
                </div>
              </div> 
              -->
              <?php require_once get_template_directory(). '/common/available-device.php';?>
              <?php require_once get_template_directory(). '/common/partners.php'; ?>

              <?php 
              $vdScreenshot = '';
              if(
                isset( $top_section['video_background_image'] ) && 
                !empty( $top_section['video_background_image'] ) 
              ){
              $cScreenSrc   = wsGetWebpSrcUrl($top_section['video_background_image']['id']);  
              $vdScreenshot = ' style="background: url('.wsGetWebpSrcUrl($top_section['video_background_image']['id']).'); background-size: contain; background-repeat: no-repeat; background-position: center;"';
              }
              ?>
              <div class="video-wrap">
                <div class="videoSc" id="has-yt-video">
                  <div class="inner">
                    <div class="topVideo srp-30">
                      <div id="myDIV" class="contbox2">
                        <div class="videoWrapper">
                          <?php 
                          if( isset( $top_section['video_embed_url'] ) && !empty( $top_section['video_embed_url'] ) ){
                          ?>
                          <iframe id="video" class="videoIframe" allowfullscreen
                            data-src="<?php echo $top_section['video_embed_url']; ?>">
                          </iframe>
                          <button class="videoPoster lazy-background wsbg-cover wsbg-img" data-src="<?php echo $cScreenSrc; ?>" 
                          id="play-button">Play video
                          <span class="playicon"></span></button>
                          <?php 
                          }else{
                            echo '<button class="videoPoster lazy-background wsbg-cover wsbg-img" data-src="'.$cScreenSrc.'" id="play-button"></button>';
                          } 
                          ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
		<?php } endif; ?>
		<?php  
		$automate_tracking_section = get_field('automate_tracking_section');
		
		if( $automate_tracking_section ) :
		$isEnable = $automate_tracking_section['is_enabled'];
		if( $isEnable == "yes" ){ 
		?>
        <section class="benifits-section">
          <div class="container">
            <div class="top-section">
              <h6><span class="bg-purple"><?php echo $automate_tracking_section['heading']; ?></span></h6>
              <h2><?php echo $automate_tracking_section['sub_heading']; ?></h2>
            </div>
            <div class="flex_row">
			<?php 
			if( $automate_tracking_section['content_repeater'] ){  $i = 19;
				foreach( $automate_tracking_section['content_repeater'] as $row ) { 
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
		
    <section class="middle-section feature-section">

		<?php  
    if( !is_page( 5439 ) ) {
		$silent_tracking_section = get_field('silent_tracking_section');
		if( $silent_tracking_section ) :
		$isEnable = $silent_tracking_section['is_enabled'];
		if( $isEnable == "yes" ){ 
		?>
          <div class="item" id="ws-silent_tracking_section">
            <div class="container">
              <div class="top-section">
                <h6><span class="bg-purple"><?php echo $silent_tracking_section['heading']; ?></span></h6>
                <h2><?php echo $silent_tracking_section['sub_heading']; ?></h2>
                <p><?php echo $silent_tracking_section['content']; ?></p>
              </div>
              <div id="active_Current_Tabs1">
                <div class="flex_row">
                  <div class="column-right">
				  
				  <?php 
					if( $silent_tracking_section['silent_tracking_content'] ){  $i = 114;
					foreach( $silent_tracking_section['silent_tracking_content'] as $row ) {
						$image      = $row['image'];
						
						//$link       = $row['link'];
						//$wintitle   = $row['title'];
						//$wincontent = $row['content']; 
						$active = ($i==114) ? "active" : "";
					
					?>
						<?php if( $image ){
                            echo '<picture class="page '.$active.'" id="p'.$i.'" >
                            '.getPxlWebpURL($image['ID']).'
                            <source type="'.$image['mime_type'].'" srcset="'.$image['url'].'">
                            <img loading="lazy" src="'.$image['url'].'" alt="'.$image['title'].'" width="'.$image['width'].'" 
                            height="'.$image['height'].'"> 
                            </picture>';
                            } ?>

					<?php $i++; } } ?>
				</div>
                  <div class="column-left">
				  <?php 
					if( $silent_tracking_section['silent_tracking_content'] ){  $i = 114;
					foreach( $silent_tracking_section['silent_tracking_content'] as $row ) {
						$image      = $row['image'];
            $active = ($i==114) ? "active" : "";
					?>
                    <div class="all-content">
                      <div class="text-column <?php echo $active; ?> <?php echo $active; ?> <?php echo (strpos($row['content'], '<ul') !== false) ? ' listing ' : ''; ?>" id="t<?php echo $i; ?>" data-section="active_Current_Tabs1">
                        <!--<h3><i></i><?php echo $row['heading'];?></h3>
                        <p><?php echo $row['content'];?>
                        </p> -->
                       <?php echo $row['content'];?>
                      </div>


                      <div class="mob-image">
					  <?php if( $image ){
                            echo '<picture>
                            '.getPxlWebpURL($image['ID']).'
                            <source type="'.$image['mime_type'].'" srcset="'.$image['url'].'">
                            <img loading="lazy" src="'.$image['url'].'" alt="'.$image['title'].'" width="'.$image['width'].'" 
                            height="'.$image['height'].'"> 
                            </picture>';
                            } ?>
                      </div>
                    </div>
                    <?php $i++; } } ?>
                  </div>
                </div>
              </div>
              <?php if( geoCTAcheck() === true ) : ?>
              <div class="mt40 btnSc">
                <?php echo wsDemoCta(); ?>
              </div>
              <?php endif; ?>
            </div>
          </div>
		  <?php } endif; 
      }
      ?>
    <?php leadMgtBlock( get_the_ID() ); ?>
		<?php  
		$boost_profitability = get_field('boost_profitability');
		
		if( $boost_profitability ) :
		$isEnable = $boost_profitability['is_enabled'];
		if( $isEnable == "yes" ){ 
		?>
          <div class="item" id="ws-boost_profitability">
            <div class="container">
              <div class="top-section">
                <h6><span class="bg-purple"><?php echo $boost_profitability['heading']; ?></span></h6>
                <h2><?php echo $boost_profitability['sub_heading']; ?></h2>
                <?php 
                if( $boost_profitability['content'] ){
                  echo '<p>'.$boost_profitability['content'].'<p>';
                } 
                ?>
              </div>
              <div id="active_Current_Tabs2">
                <div class="flex_row">
                  <div class="column-right">

				  <?php 
					if( $boost_profitability['content_repeater'] ){  $i = 5;
					foreach( $boost_profitability['content_repeater'] as $row ) {
						$image      = $row['image_'];
						$active = ($i==5) ? "active" : "";
					?>

						<?php if( $image ){
                            echo '<picture class="page '.$active.'" id="p'.$i.'" >
                            '.getPxlWebpURL($image['ID']).'
                            <source type="'.$image['mime_type'].'" srcset="'.$image['url'].'">
                            <img loading="lazy" src="'.$image['url'].'" alt="'.$image['title'].'" width="'.$image['width'].'" 
                            height="'.$image['height'].'"> 
                            </picture>';
                            } ?>

					<?php $i++; } } ?>
                  </div>
                  <div class="column-left">
				  <?php 
					if( $boost_profitability['content_repeater'] ){  $i = 5;
					foreach( $boost_profitability['content_repeater'] as $row ) {
						$image      = $row['image_'];
						$active = ($i==5) ? "active" : "";
					?>	
                    <div class="all-content">
                      <div class="text-column <?php echo $active; ?> <?php echo $active; ?> <?php echo (strpos($row['content'], '<ul') !== false) ? ' listing ' : ''; ?>" id="t<?php echo $i; ?>" data-section="active_Current_Tabs2">
                        <!-- 
                        <h3><i></i><?php echo $row['heading'];?></h3>
                        <p><?php echo $row['sub_heading'];?>
                        </p>
                        <ul class="checkList">
						            <?php echo $row['content'];?>
                        </ul> 
                        -->
                        <?php echo $row['content'];?>
                      </div>
                      <div class="mob-image">
					  <?php if( $image ){
                            echo '<picture>
                            '.getPxlWebpURL($image['ID']).'
                            <source type="'.$image['mime_type'].'" srcset="'.$image['url'].'">
                            <img loading="lazy" src="'.$image['url'].'" alt="'.$image['title'].'" width="'.$image['width'].'" 
                            height="'.$image['height'].'"> 
                            </picture>';
                            } ?>
                      </div>
                    </div>
					<?php $i++; } } ?>

                  </div>
                </div>
              </div>
              <div class="mt40 btnSc">
              <!-- <?php $buttontbottop = ($boost_profitability['demo_button_top_text']) ? $boost_profitability['demo_button_top_text'] : "Don't Wait! Start Today"; ?>       
                <p><?php echo $buttontbottop; ?></p>
                <a href="javascript:void(0)" onclick="call_demows();" class="primary_btn1">Book A Demo</a>
                <?php $buttontbott = ($boost_profitability['demo_button_bottom_text']) ? $boost_profitability['demo_button_bottom_text'] : "Get queries answered by experts"; ?>   
                <small><?php echo $buttontbott; ?></small> -->
                <?php echo wsDemoCta(); ?>
              </div>
            </div>
          </div>
		  <?php } endif; ?>


      <?php getCommonSolutions($thisPostID); ?>

		  <?php  
		$stay_in_control_section = get_field('stay_in_control_section');
		
		if( $stay_in_control_section ) :
		$isEnable = $stay_in_control_section['is_enabled'];
		if( $isEnable == "yes" ){ 
		?>
          <div class="item" id="ws-stay_in_control_section">
            <div class="container">
              <div class="top-section">
                <h6><span class="bg-purple"><?php echo $stay_in_control_section['heading']; ?></span></h6>
                <h2><?php echo $stay_in_control_section['sub_heading']; ?></h2>
                <p><?php echo $stay_in_control_section['content']; ?></p>
              </div>
              <div id="active_Current_Tabs3">
                <div class="flex_row">
                  <div class="column-right">

				  <?php 
					if( $stay_in_control_section['content_repeater'] ){  $i = 71;
					foreach( $stay_in_control_section['content_repeater'] as $row ) {
						$image      = $row['image_'];
						$active = ($i==71) ? "active" : "";
					?>
                   
					<?php if( $image ){
                            echo '<picture class="page '.$active.'" id="p'.$i.'" >
                            '.getPxlWebpURL($image['ID']).'
                            <source type="'.$image['mime_type'].'" srcset="'.$image['url'].'">
                            <img loading="lazy" src="'.$image['url'].'" alt="'.$image['title'].'" width="'.$image['width'].'" 
                            height="'.$image['height'].'"> 
                            </picture>';
                            } ?>
					
                    <?php $i++; } } ?>
                  </div>
                  <div class="column-left">
				  <?php 
					if( $stay_in_control_section['content_repeater'] ){  $i = 71;
					foreach( $stay_in_control_section['content_repeater'] as $row ) {
						$image      = $row['image_'];
						$active = ($i==71) ? "active" : "";
						
					?>	
                    <div class="all-content">
                      <div class="text-column <?php echo $active; ?> <?php echo $active; ?> <?php echo (strpos($row['content'], '<ul') !== false) ? ' listing ' : ''; ?>" id="t<?php echo $i; ?>" data-section="active_Current_Tabs3">
                        <!-- 
                        <h3><i></i><?php echo $row['heading'];?></h3>
                        <p><?php echo $row['sub_heading'];?>
                        </p>
                        <ul class="checkList">
						            <?php echo $row['content'];?>
                        </ul> 
                        -->
                        <?php echo $row['content'];?>
                      </div>
                      <div class="mob-image">
					  <?php if( $image ){
                            echo '<picture>
                            '.getPxlWebpURL($image['ID']).'
                            <source type="'.$image['mime_type'].'" srcset="'.$image['url'].'">
                            <img loading="lazy" src="'.$image['url'].'" alt="'.$image['title'].'" width="'.$image['width'].'" 
                            height="'.$image['height'].'"> 
                            </picture>';
                            } ?>
                      </div>
                    </div>
					<?php $i++; } } ?>
                    
                  </div>
                </div>
              </div>
              <div class="mt40 btnSc">
              <!-- <?php $buttontbottop = ($stay_in_control_section['demo_button_top_text']) ? $stay_in_control_section['demo_button_top_text'] : "To explore all features & functionalities!"; ?> 
                <p><?php echo $buttontbottop; ?></p>
                <a href="javascript:void(0)" onclick="call_demows();" rel="nofollow"
                  class="primary_btn1">Book A Demo</a>
                  <?php $buttontbott = ($stay_in_control_section['demo_button_bottom_text']) ? $stay_in_control_section['demo_button_bottom_text'] : "Get queries answered by experts"; ?> 
                <small><?php echo $buttontbott; ?></small> -->
                <?php echo wsDemoCta(); ?>
              </div>
            </div>
          </div>
		  <?php } endif;

      if( is_page( 5439 ) ) {
    $silent_tracking_section = get_field('silent_tracking_section');
    if( $silent_tracking_section ) :
    $isEnable = $silent_tracking_section['is_enabled'];
    if( $isEnable == "yes" ){ 
    ?>
          <div class="item" id="ws-silent_tracking_section">
            <div class="container">
              <div class="top-section">
                <h6><span class="bg-purple"><?php echo $silent_tracking_section['heading']; ?></span></h6>
                <h2><?php echo $silent_tracking_section['sub_heading']; ?></h2>
                <p><?php echo $silent_tracking_section['content']; ?></p>
              </div>
              <div id="active_Current_Tabs1">
                <div class="flex_row">
                  <div class="column-right">
          
          <?php 
          if( $silent_tracking_section['silent_tracking_content'] ){  $i = 114;
          foreach( $silent_tracking_section['silent_tracking_content'] as $row ) {
            $image      = $row['image'];
            
            //$link       = $row['link'];
            //$wintitle   = $row['title'];
            //$wincontent = $row['content']; 
            $active = ($i==114) ? "active" : "";
          
          ?>
            <?php if( $image ){
                            echo '<picture class="page '.$active.'" id="p'.$i.'" >
                            '.getPxlWebpURL($image['ID']).'
                            <source type="'.$image['mime_type'].'" srcset="'.$image['url'].'">
                            <img loading="lazy" src="'.$image['url'].'" alt="'.$image['title'].'" width="'.$image['width'].'" 
                            height="'.$image['height'].'"> 
                            </picture>';
                            } ?>

          <?php $i++; } } ?>
        </div>
                  <div class="column-left">
          <?php 
          if( $silent_tracking_section['silent_tracking_content'] ){  $i = 114;
          foreach( $silent_tracking_section['silent_tracking_content'] as $row ) {
            $image      = $row['image'];
            $active = ($i==114) ? "active" : "";
          ?>
                    <div class="all-content">
                      <div class="text-column <?php echo $active; ?> <?php echo $active; ?> <?php echo (strpos($row['content'], '<ul') !== false) ? ' listing ' : ''; ?>" id="t<?php echo $i; ?>" data-section="active_Current_Tabs1">
                        <!--<h3><i></i><?php echo $row['heading'];?></h3>
                        <p><?php echo $row['content'];?>
                        </p> -->
                       <?php echo $row['content'];?>
                      </div>


                      <div class="mob-image">
            <?php if( $image ){
                            echo '<picture>
                            '.getPxlWebpURL($image['ID']).'
                            <source type="'.$image['mime_type'].'" srcset="'.$image['url'].'">
                            <img loading="lazy" src="'.$image['url'].'" alt="'.$image['title'].'" width="'.$image['width'].'" 
                            height="'.$image['height'].'"> 
                            </picture>';
                            } ?>
                      </div>
                    </div>
                    <?php $i++; } } ?>
                  </div>
                </div>
              </div>
              <?php if( geoCTAcheck() === true ) : ?>
              <div class="mt40 btnSc">
                <?php echo wsDemoCta(); ?>
              </div>
              <?php endif; ?>
            </div>
          </div>
      <?php } endif; 
      }
      ?>

		  <?php  
		$comprehensive_dashboard_section = get_field('comprehensive_dashboard_section');
		
		if( $comprehensive_dashboard_section ) :
		$isEnable = $comprehensive_dashboard_section['is_enabled'];
		if( $isEnable == "yes" ){ 
		?>
          <div class="item" id="ws-comprehensive_dashboard_section">
            <div class="container">
              <div class="top-section">
                <h6><span class="bg-purple"><?php echo $comprehensive_dashboard_section['heading']; ?></span></h6>
                <h2><?php echo $comprehensive_dashboard_section['sub_heading']; ?></h2>
                <p><?php echo $comprehensive_dashboard_section['content']; ?>
                </p>
              </div>
              <div id="active_Current_Tabs4">
                <div class="flex_row">
                  <div class="column-right">

				  <?php 
					if( $comprehensive_dashboard_section['content_repeater'] ){  $i = 10;
					foreach( $comprehensive_dashboard_section['content_repeater'] as $row ) {
						$image      = $row['image_'];
						$active = ($i==10) ? "active" : "";
					?>
                    <?php if( $image ){
                            echo '<picture class="page '.$active.'" id="p'.$i.'" >
                            '.getPxlWebpURL($image['ID']).'
                            <source type="'.$image['mime_type'].'" srcset="'.$image['url'].'">
                            <img loading="lazy" src="'.$image['url'].'" alt="'.$image['title'].'" width="'.$image['width'].'" 
                            height="'.$image['height'].'"> 
                            </picture>';
                            } ?>
					
                    <?php $i++; } } ?>
                   
                  </div>
                  <div class="column-left">
				  <?php 
					if( $comprehensive_dashboard_section['content_repeater'] ){  $i = 10;
					foreach( $comprehensive_dashboard_section['content_repeater'] as $row ) {
						$image      = $row['image_'];
						$active = ($i==10) ? "active" : "";
						
					?>	
                    <div class="all-content">
                      <div class="text-column <?php echo $active; ?> <?php echo $active; ?> <?php echo (strpos($row['content'], '<ul') !== false) ? ' listing ' : ''; ?>" id="t<?php echo $i; ?>" data-section="active_Current_Tabs4">
                        <!-- 
                        <h3><i></i><?php echo $row['heading'];?></h3>
                        <p><?php echo $row['sub_heading'];?></p>
                        <ul class="checkList">
						            <?php echo $row['content']; ?>
                        </ul> 
                        -->
                        <?php echo $row['content']; ?>
                      </div>
                      <div class="mob-image">
					  <?php if( $image ){
                            echo '<picture>
                            '.getPxlWebpURL($image['ID']).'
                            <source type="'.$image['mime_type'].'" srcset="'.$image['url'].'">
                            <img loading="lazy" src="'.$image['url'].'" alt="'.$image['title'].'" width="'.$image['width'].'" 
                            height="'.$image['height'].'"> 
                            </picture>';
                            } ?>
                      </div>
                    </div>
					<?php $i++; } } ?>
                  </div>
                </div>
              </div>
              <?php if( geoCTAcheck() === true ) : ?>
              <div class="mt40 btnSc">
              <!-- <?php $buttontbottop = ($comprehensive_dashboard_section['demo_button_top_text']) ? $comprehensive_dashboard_section['demo_button_top_text'] : "Start Tracking Now: Boost Your Business Growth"; ?> 
                <p><?php echo $buttontbottop; ?></p>
                <a href="<?php echo $RegLink; ?>"
                  class="primary_btn1"><?php echo $ws_ctas['cta_text']; ?></a>
                  <?php $buttontbott = ($comprehensive_dashboard_section['demo_button_bottom_text']) ? $comprehensive_dashboard_section['demo_button_bottom_text'] : "No credit card required"; ?> 
                <small><?php echo $buttontbott; ?></small> -->
                <?php echo wsDemoCta(); ?>
              </div>
              <?php endif; ?>
            </div>
          </div>
		  <?php } endif; ?>

    

    <?php  
		$recognize = get_field('recognize');
		
		if( $recognize ) :
		$isEnable = $recognize['is_enabled'];
		if( $isEnable == "yes" ){ 
		?>
      <div class="item" id="ws-recognize">
            <div class="container">
              <div class="top-section">
                <h6><span class="bg-purple"><?php echo $recognize['heading']; ?></span></h6>
                <h2><?php echo $recognize['sub_heading']; ?></h2>
                <p><?php echo $recognize['content']; ?></p>
              </div>
              <div id="active_Current_Tabs5">
                <div class="flex_row">
                  <div class="column-right">
                    
                    
                    <?php 
					if( $recognize['content_repeater'] ){  $i = 1141;
					foreach( $recognize['content_repeater'] as $row ) {
						$image      = $row['image_'];
						$active = ($i==1141) ? "active" : "";
					?>
                    <?php if( $image ){
                            echo '<picture class="page '.$active.'" id="p'.$i.'" >
                            '.getPxlWebpURL($image['ID']).'
                            <source type="'.$image['mime_type'].'" srcset="'.$image['url'].'">
                            <img loading="lazy" src="'.$image['url'].'" alt="'.$image['title'].'" width="'.$image['width'].'" 
                            height="'.$image['height'].'"> 
                            </picture>';
                            } ?>
					
                    <?php $i++; } } ?>
                  </div>
                  <div class="column-left">
                  <?php 
                  if( $recognize['content_repeater'] ){
                  $i = 1141;
                    foreach( $recognize['content_repeater'] as $row ){
                    $image      = $row['image_'];
                    $active = ($i==1141) ? "active" : "";                    
                    ?>	
                      <div class="all-content">
                        <div class="text-column <?php echo $active; ?> <?php echo $active; ?> <?php echo (strpos($row['content'], '<ul') !== false) ? ' listing ' : ''; ?>" id="t<?php echo $i; ?>" data-section="active_Current_Tabs5">
                          <!-- 
                          <h3><i></i><?php echo $row['heading'];?></h3>
                          <p><?php echo $row['sub_heading'];?></p>
                          <ul class="checkList">
  						            <?php echo $row['content']; ?>
                          </ul> 
                          -->
                          <?php echo $row['content']; ?>
                        <div class="mob-image">
                        <?php if( $image ){
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
                      $i++; 
                      }
                    } 
                    ?>                    
                  </div>
                </div>
              </div>
            </div>
            <div class="mt40 btnSc">
            <?php echo wsDemoCta(); ?>
            </div>
          </div>
          </div>
          <?php } endif; ?>
  </section>
  
  <?php 
  if( !is_page( 4504 ) ){
    getEmpLeadership( $thisPostID );  
  }  
  ?>

  <?php  
		$motivated_employees_section = get_field('motivated_employees_section');
		
		if( $motivated_employees_section ) :
		$isEnable = $motivated_employees_section['is_enabled'];
		if( $isEnable == "yes" ){ 
		?>
  <section class="trackEm">
          <div class="container">
            <div class="top-section">
              <h6><span class="bg-purple"><?php echo $motivated_employees_section['heading']; ?></span></h6>
              <h2><?php echo $motivated_employees_section['sub_heading']; ?></h2>
            </div>
            <div class="trackRow">
              <div class="trackImg">
              <?php 
              if( $motivated_employees_section['simage'] ){
                echo pxlGetPtag( $motivated_employees_section['simage'] );
              }
              ?>
              </div>
              <div class="trackContent">
              <?php 
					if( $motivated_employees_section['content_repeater'] ){  $i = 13;
					foreach( $motivated_employees_section['content_repeater'] as $row ) {
						$image      = $row['image_'];
						$active = ($i==13) ? "active" : "";
						
					?>
                <div class="row">
                  <?php echo $row['content']; ?>
                </div>
                <?php $i++; } } ?>     
              </div>
            </div>
          </div>
        </section>
        <?php } endif; ?>
		<?php  
		$time_tracker = get_field('time_tracker');
		
		if( $time_tracker ) :
		$isEnable = $time_tracker['is_enabled'];
		if( $isEnable == "yes" ){ 
		?>
        <section class="timeline">
          <div class="container">
            <div class="top-section">
              <h6><span class="bg-purple"><?php echo $time_tracker['heading']; ?></span></h6>
              <h2><?php echo $time_tracker['sub_heading']; ?></h2>
            </div>
            <div class="trackRow align-center">
              <div class="trackImg">
              <?php 
              if( $time_tracker['simage'] ){
              echo pxlGetPtag( $time_tracker['simage'] );
              }
              ?>
              </div>
              <div class="trackContent">
			  <?php 
					if( $time_tracker['content_repeater'] ){  $i = 7;
					foreach( $time_tracker['content_repeater'] as $row ) {
						$image      = $row['image_'];
						$active = ($i==7) ? "active" : "";
			   ?>
                <div class="row">
                <?php echo $row['content'];?>
                </div>
                <?php $i++; } } ?>
              </div>
            </div>
          </div>
        </section>
		<?php } endif; ?>

    <?php if( is_page(1166) ) : ?>
    <section class="stealth-mode post-animation">
    <div class="container">
    <div class="top-section">
      <h6><span class="bg-purple">Choose App Visibility</span></h6>
      <h2>Choose How Workstatus Functions In Different Devices</h2>
      <p>Easily customize Workstatus app visibility and tracking preferences for enhanced user-experience.</p>
    </div>
    <div class="stealthRow">
      <div class="col">
        <picture>
          <source type="image/webp" srcset="<?php bloginfo('template_url'); ?>/assests/images/steath-01.webp">
          <source type="image/png" srcset="<?php bloginfo('template_url'); ?>/assests/images/steath-01.png">
          <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/images/steath-01.png" alt="Time Report software" width="72" height="70">
        </picture>
        <h3>Stealth Mode</h3>
        <p>In this setting, the Workstatus app is not visible to users. The tracking starts as the user starts the system and stops when the user switches off the system.</p>
      </div>
      <div class="col">
        <picture>
          <source type="image/webp" srcset="<?php bloginfo('template_url'); ?>/assests/images/steath-02.webp">
          <source type="image/png" srcset="<?php bloginfo('template_url'); ?>/assests/images/steath-02.png">
          <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/images/steath-02.png" alt="Time Report software" width="72" height="70">
        </picture>
        <h3>Visible Mode</h3>
        <p>In this setting, the Workstatus app is visible to users. They can start, stop or take a break as per their preferences.</p>
      </div>
    </div>
    <div class="mt80  btnSc">
    <?php echo wsDemoCta(); ?>
    </div>
    </div>
    </section>  
    <?php endif; ?>

		<?php  
		$as_easy_as_section = get_field('as_easy_as_section');		
		if( $as_easy_as_section ) :
		$isEnable = $as_easy_as_section['is_enabled'];
		if( $isEnable == "yes" ){ 
		?>
        <section class="timeline" id="acf-as_easy_as_section">
          <div class="container">
            <div class="top-section">
              <h6><span class="bg-purple"><?php echo $as_easy_as_section['heading']; ?></span></h6>
              <h2><?php echo $as_easy_as_section['sub_heading']; ?></h2>
            </div>
            <div class="trackRow">
              <div class="trackImg">
			  <?php 
					if( $as_easy_as_section['content_repeater'] ){  $i = 7;
					foreach( $as_easy_as_section['content_repeater'] as $row ) {
						$image      = $row['image_'];
						$active = ($i==7) ? "active" : "";
					?>
                <?php if( $image ){
                            echo '<picture>
                            '.getPxlWebpURL($image['ID']).'
                            <source type="'.$image['mime_type'].'" srcset="'.$image['url'].'">
                            <img loading="lazy" src="'.$image['url'].'" alt="'.$image['title'].'" width="'.$image['width'].'" 
                            height="'.$image['height'].'"> 
                            </picture>';
                            } ?>
					
                    <?php $i++; } } ?>
              </div>
              <div class="trackContent">
			  <?php 
					if( $as_easy_as_section['content_repeater'] ){  $i = 7;
					foreach( $as_easy_as_section['content_repeater'] as $row ) {
						$image      = $row['image_'];
						$active = ($i==7) ? "active" : "";
					?>			
			  <div class="row">
                  <h3><?php echo $row['heading'];?></h3>
                  <p><?php echo $row['content'];?></p>
                </div>
                <?php $i++; } } ?>
              </div>
            </div>
          </div>
        </section>
		<?php } endif; ?>

    <?php 
    if( $thisPostID != 7476 ){
      getWsCmnFeatures();   
    } 

    if( $thisPostID === 7476 ) :
    ?>
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
            $image      = $row['image_'];
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
            $image      = $row['image_'];
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
    <?php endif; ?>
		<?php  
		$scalable = get_field('scalable');
		//echo '<pre>';
		//print_r($scalable);
		if( $scalable ) :
		$isEnable = $scalable['is_enabled'];
		if( $isEnable == "yes" ){ 
		?>
        <section class="time-data"> 
          <div class="container">
            <div class="top-section">
              <h6><span class="bg-purple"><?php echo $scalable['heading']; ?></span></h6>
              <h2><?php echo $scalable['sub_heading']; ?></h2>
            </div>
            <div class="flex_row">
			<?php 
					if( $scalable['scalable_content_repeater'] ){  $i = 4;
					foreach( $scalable['scalable_content_repeater'] as $row ) {
						$icon      = $row['scalable_image'];
						$active = ($i==7) ? "active" : "";
					?>	
              <div class="column-three">
                
                <?php
                if ($icon) {
                    echo pxlGetPtag($icon);
                } else {
                    echo '<i class="icon' . $i . '"></i>';
                }
                ?>
                <h3><?php echo $row['scalable_heading'];?></h3>
                <?php echo $row['scalable_content'];?>
              </div>

              <?php $i++; } } ?>

            </div>
          </div>
        </section>
		<?php } endif; ?>

		<?php  
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
                  echo '<h3>'.$row['heading'];.'</h3>';
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
                <?php echo wsDemoCta(); ?>
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
    if( $thisPostID == 7476 ){
      getWsCmnFeatures();   
    } 
    if( $thisPostID != 7476 ) :      
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
						$image      = $row['image_'];
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
						$image      = $row['image_'];
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
		  <?php } endif; 
      endif;
      ?>

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
						$image      = $row['image_'];
						//$active = ($i==1) ? "open" : "";
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
        <?php require_once get_template_directory() .'/common/workstatus-journey.php';?>
      </main>


<?php get_footer(); ?>
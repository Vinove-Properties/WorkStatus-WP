<?php 
/* 
Template Name: Best employee Template
Author : Neeraj Rai
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
        <section class="inner-banner"  >
          <div class="container">
            <div class="inner-wrap">
              <h1><?php echo $top_section['heading']; ?></h1>
              <p><?php echo $top_section['sub_heading']; ?></p>
              
              <div class="actionBtn">
                <?php 
                if( is_page(7306) ){
                echo '<div><a href="https://calendly.com/workstatus/sales" class="primary_btn2">Talk to Sales</a>
                <small>Let\'s connect for a quick call</small>
                </div>';
                }else{
                if( geoCTAcheck() === true ) : ?>
                <div>
                  <a data-href="<?php echo $RegLink; ?>" href="javascript:void(0);" class="primary_btn1" onclick="return get_ws_signupform(this);"><?php echo $ws_ctas['cta_text']; ?></a>
                  <small>No credit card required</small>
                </div>
                <?php endif; ?>
                <div><a href="javascript:void(0)" onclick="call_demows();" class="primary_btn2">Book A Demo</a>
                  <small>Get queries answered from experts</small>
                </div>
                <?php } ?>
              </div>

              <?php require_once get_template_directory().'/common/available-device.php'; ?>
              <?php require_once get_template_directory(). '/common/partners.php'; ?>
              <?php 
              $vdScreenshot = '';
              if( isset( $top_section['video_background_image'] ) && !empty( $top_section['video_background_image'] ) 
              ){
              $cScreenSrc   = wsGetWebpSrcUrl($top_section['video_background_image']['id']);
              $vdScreenshot = ' style="background: url('.wsGetWebpSrcUrl($top_section['video_background_image']['id']).'); background-size: contain; background-repeat: no-repeat; background-position: center;"';
              }
              ?>
              <div class="video-wrap">
                <div class="videoSc" id="has-yt-video">
                  <div class="inner">
                    <div class="topVideo srp-1">
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
			if( $automate_tracking_section['content_repeater'] ){  $i = 1;
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
                <p><?php echo $row['content'];?></p>
              </div>
			<?php $i++; } } ?>
              
              
            </div>
          </div>
        </section>
		<?php } endif; ?>
            <section class="middle-section feature-section">


            <?php  
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
                <p><?php echo $silent_tracking_section['content']; ?>
                </p>
              </div>
              <div id="active_Current_Tabs1">
                <div class="flex_row">
                  <div class="column-right">
				  
				  <?php 
					if( $silent_tracking_section['silent_tracking_content'] ){  $i = 111;
					foreach( $silent_tracking_section['silent_tracking_content'] as $row ) {
						$image      = $row['image'];
						
						//$link       = $row['link'];
						//$wintitle   = $row['title'];
						//$wincontent = $row['content']; 
						$active = ($i==111) ? "active" : "";
					
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
					if( $silent_tracking_section['silent_tracking_content'] ){  $i = 111;
					foreach( $silent_tracking_section['silent_tracking_content'] as $row ) {
						$image      = $row['image'];
            $active = ($i==111) ? "active" : "";
					?>
                    <div class="all-content">
                      <div class="text-column <?php echo $active; ?> <?php echo (strpos($row['content'], '<ul') !== false) ? ' listing ' : ''; ?>" id="t<?php echo $i; ?>" data-section="active_Current_Tabs1">
                        <!-- 
                        <h3><i></i><?php //echo $row['heading'];?></h3> 
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
              <?php if( geoCTAcheck() === true ) : ?>
              <div class="mt40 btnSc">
                <!-- <p>Grow Your Business</p>
                <a href="<?php echo $RegLink; ?>"
                  class="primary_btn1"><?php echo $ws_ctas['cta_text']; ?></a>
                <small>Quickly get your team on board!</small> -->
                <?php echo wsDemoCtaCP(); ?>
              </div>
              <?php endif; ?>
            </div>
          </div>

		  <?php } endif; ?>

                
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
                <p><?php echo $boost_profitability['content']; ?>
                </p>
              </div>
              <div id="active_Current_Tabs2">
                <div class="flex_row">
                  <div class="column-right">

				  <?php 
					if( $boost_profitability['content_repeater'] ){  $i = 115;
					foreach( $boost_profitability['content_repeater'] as $row ) {
						$image      = $row['image_'];
						$active = ($i==115) ? "active" : "";
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
					if( $boost_profitability['content_repeater'] ){  $i = 115;
					foreach( $boost_profitability['content_repeater'] as $row ) {
					$image      = $row['image_'];
					$active = ($i==115) ? "active" : "";
					?>	
                    <div class="all-content">
                      <div class="text-column <?php echo $active; ?> <?php echo (strpos($row['content'], '<ul') !== false) ? ' listing ' : ''; ?>" id="t<?php echo $i; ?>" data-section="active_Current_Tabs2">
                        <!-- 
                        <h3><?php echo $row['heading'];?></h3>
                        <p><?php echo $row['sub_heading'];?>
                        </p>
                        <ul class="checkList">
						            <?php //echo $row['content'];?>
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
              <div class="mt40 btnSc">
                <!-- <p>Don't Wait! Start Today</p>
                <a href="javascript:void(0)" onclick="call_demows();" class="primary_btn1">Book A Demo</a>
                <small>Get queries answered by experts</small> -->
                <?php echo wsDemoCtaCP(); ?>
              </div>
            </div>
          </div>
		  <?php } endif; ?>

      <?php 
      get_template_part('common/cmn', 'usps');
      leadMgtBlock( get_the_ID() ); 
      ?>
      
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
                <p><?php echo $stay_in_control_section['content']; ?>
                </p>
              </div>
              <div id="active_Current_Tabs3">
                <div class="flex_row">
                  <div class="column-right">

				  <?php 
					if( $stay_in_control_section['content_repeater'] ){  $i = 7;
					foreach( $stay_in_control_section['content_repeater'] as $row ) {
						$image      = $row['image_'];
						$active = ($i==7) ? "active" : "";
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
					if( $stay_in_control_section['content_repeater'] ){  $i = 7;
					foreach( $stay_in_control_section['content_repeater'] as $row ) {
						$image      = $row['image_'];
						$active = ($i==7) ? "active" : "";
						
					?>	
                    <div class="all-content">
                      <div class="text-column <?php echo $active; ?> <?php echo (strpos($row['content'], '<ul') !== false) ? ' listing ' : ''; ?>" id="t<?php echo $i; ?>" data-section="active_Current_Tabs3">
                        <!-- <h3><?php echo $row['heading'];?></h3>
                        <p><?php echo $row['sub_heading'];?>
                        </p>
                        <ul class="checkList">
						<?php echo $row['content'];?>
                        </ul> -->
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
                <!-- <p>To explore all features & functionalities!</p>
                <a href="javascript:void(0)" onclick="call_demows();" rel="nofollow"
                  class="primary_btn1">Book A Demo</a>
                <small>Get queries answered by experts</small> -->
                <?php echo wsDemoCtaCP(); ?>
              </div>
            </div>
          </div>
		  <?php } endif; ?>

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
                      <div class="text-column <?php echo $active; ?> <?php echo (strpos($row['content'], '<ul') !== false) ? ' listing ' : ''; ?>" id="t<?php echo $i; ?>" data-section="active_Current_Tabs4">
                        <!-- 
                        <h3><?php echo $row['heading'];?></h3>
                        <p><?php echo $row['sub_heading'];?></p>
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
              <?php if( geoCTAcheck() === true ) : ?>
              <div class="mt40 btnSc">
                <!-- <p>Start Tracking Now: Boost Your Business Growth</p>
                <a href="<?php echo $RegLink; ?>"
                  class="primary_btn1"><?php echo $ws_ctas['cta_text']; ?></a>
                <small>No credit card required</small> -->
                <?php echo wsDemoCtaCP(); ?>
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
            if( $recognize['content_repeater'] ){  $i = 1141;
            foreach( $recognize['content_repeater'] as $row ) {
            $image      = $row['image_'];
            $active = ($i==1141) ? "active" : "";

            ?>	
                        <div class="all-content">
                            <div class="text-column <?php echo $active; ?> <?php echo (strpos($row['content'], '<ul') !== false) ? ' listing ' : ''; ?>" id="t<?php echo $i; ?>" data-section="active_Current_Tabs5">
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
            <div class="mt40 btnSc">
                <!-- <p>Interested to know more!</p>
                <a href="javascript:void(0)" onclick="call_demows();" rel="nofollow"
                    class="primary_btn1">Book A Demo</a>
                <small>Get all your queries answered from our experts<br> on a secure online meeting
                </small> -->
                <?php echo wsDemoCtaCP(); ?>
            </div>
            </div>
            </div>
            <?php 
            } 
            endif; 
            ?>




            <?php  
            $blockLoop = get_field('block-loop');
            if( isset( $blockLoop['is_enabled'] ) && ($blockLoop['is_enabled'] == "yes") ) :
            $z = 0;  
            if( $blockLoop['block'] && (count($blockLoop['block']) > 0) ){
            foreach( $blockLoop['block'] as $row ){ 
            $z++;
            echo '<div class="item" id="ws-bllop-'.$z.'"><div class="container">';
            
            echo '<div class="top-section"><h6><span class="bg-purple">'.$row['heading'].'</span></h6>'.$row['content'].'</div>';

            echo '<div id="active_Current_Tabs99-'.$z.'"><div class="flex_row">';
            
            
            if( $row['in-row'] ){
              echo '<div class="column-right">';
              $iConst = 21+($z*6);
              $iTemp  = 21+($z*6);
              foreach( $row['in-row'] as $inrow){
                if( $inrow['image'] ){
                  $image = $inrow['image'];
                  $active = ( $iTemp == $iConst ) ? "active" : "";
                  echo '<picture class="page '.$active.'" id="p'.$iTemp.'" >
                  '.getPxlWebpURL($image['ID']).'
                  <source type="'.$image['mime_type'].'" srcset="'.$image['url'].'">
                  <img loading="lazy" src="'.$image['url'].'" alt="'.$image['title'].'" width="'.$image['width'].'" 
                  height="'.$image['height'].'"> 
                  </picture>';
                  }  
                $iTemp++;
              }
              echo '</div>';//column-right
              }            
            
            
              if( $row['in-row'] ){
              echo '<div class="column-left"><div class="all-content">';
              $iConst = 21+($z*6);
              $iTemp  = 21+($z*6);
              foreach( $row['in-row'] as $inrow){                
              $image = $inrow['image'];
              $active = ( $iTemp == $iConst ) ? "active" : "";
              $lsClass = (strpos($inrow['content'], '<ul') !== false) ? ' listing ' : '';
              echo '<div class="text-column '.$active.$lsClass.'" id="t'.$iTemp.'" data-section="active_Current_Tabs99-'.$z.'">';
              echo $inrow['content'];              
              echo '</div>';//text-column

              if( $image ){
                echo '<div class="mob-image">';
                echo '<picture>
                '.getPxlWebpURL($image['ID']).'
                <source type="'.$image['mime_type'].'" srcset="'.$image['url'].'">
                <img loading="lazy" src="'.$image['url'].'" alt="'.$image['title'].'" width="'.$image['width'].'" 
                height="'.$image['height'].'"> 
                </picture>';
                }
                echo '</div>';                
              $iTemp++;  
              }
              echo '</div></div>';//column-left & all-content
              }
              echo '<div class="mt40 btnSc">'.wsDemoCtaCP().'</div>';
              echo '</div></div>'; //active_Current_Tabs99

              echo '</div></div>'; //item & Container
            }  
            
            }
            endif; 
            ?>

            <?php  
            /*
            $proBooster = get_field('pro-booster');
            if( isset($proBooster['is_enabled']) && ($proBooster['is_enabled'] == "yes") ) :
            ?>
            <div class="item" id="ws-pro-booster">
            <div class="container">
            <div class="top-section">
                <h6><span class="bg-purple"><?php echo $proBooster['heading']; ?></span></h6>
                <h2><?php echo $proBooster['sub_heading']; ?></h2>
                <p><?php echo $proBooster['content']; ?></p>
            </div>
            <div id="active_Current_Tabs6">
                <div class="flex_row">
                  <div class="column-right">
                  <?php 
                  if( $proBooster['tabs'] ){  
                  $i = 786;
                    foreach( $proBooster['tabs'] as $row ){
                    $image      = $row['image'];
                    $active = ($i==786) ? "active" : "";
                    if( $image ){
                      echo '<picture class="page '.$active.'" id="p'.$i.'" >
                      '.getPxlWebpURL($image['ID']).'
                      <source type="'.$image['mime_type'].'" srcset="'.$image['url'].'">
                      <img loading="lazy" src="'.$image['url'].'" alt="'.$image['title'].'" width="'.$image['width'].'" 
                      height="'.$image['height'].'"> 
                      </picture>';
                    } 
                    $i++; 
                    } 
                  } 
                  ?>
                  </div>
                  <div class="column-left">
                  <?php 
                  if( $proBooster['tabs'] ){  $i = 786;
                  foreach( $proBooster['tabs'] as $row ) {
                  $image      = $row['image'];
                  $active = ($i==786) ? "active" : "";

                  ?>  
                  <div class="all-content">
                  <div class="text-column <?php echo $active; ?> <?php echo (strpos($row['content'], '<ul') !== false) ? ' listing ' : ''; ?>" id="t<?php echo $i; ?>" data-section="active_Current_Tabs6">
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
            <div class="mt40 btnSc"><?php echo wsDemoCtaCP(); ?></div>
            </div>
            </div>
            <?php 
            endif;
            */         
            ?>
            </section>

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

    <?php getWsCmnFeatures(); ?>

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
                <p><?php echo $row['scalable_content'];?></p>
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
              echo '<h3>'.$row['heading'].'</h3>';
            }
            ?>  
            <p class="font18"><?php echo $row['content'];?>
            </p>
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
    
    <?php if( !is_page(6785) ) : ?>
    <section class="wsMobile whitetxt">
      <?php require_once get_template_directory() .'/common/workstatus-device.php';?>
    </section>
    <?php endif; ?>
            
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
                    <p class="white"><?php echo $row['content'];?></p>
                    
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
<?php 
/* Template Name: Home Page Template */ 
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
        <section class="banner-section">
          <div class="home-section">
            <div class="container">
              <div class="flex_row">
                <div class="column column-content">
                  <h6><span class="bg-purple"><?php echo $top_section['heading']; ?></span></h6>
                  <!--<h1><?php echo $top_section['sub_heading']; ?></strong>
                  </h1>
                  <p>Own a modern workplace with healthy productivity oriented work culture and optimized processes! Workstatus™, an intuitive workforce management software.
                  </p>-->
                  <?php echo $top_section['sub_heading']; ?>
                  <ul>
                  <?php echo $top_section['content']; ?>
                  </ul>
                  <div class="actionBtn">
                    <?php if( geoCTAcheck() === true ) : ?>
                    <div><a data-href="<?php echo $RegLink; ?>" href="javascript:void(0);" class="primary_btn1" onclick="return get_ws_signupform(this);"><?php echo $ws_ctas['cta_text']; ?></a>
                      <small><?php echo $top_section['trial_button_bottom_text']; ?></small>
                    </div>
                    <?php endif; ?>
                    <div><a href="javascript:void(0)" onclick="call_demows();" class="primary_btn2 formbtn">Book A Demo</a>
                      <small><?php echo $top_section['demo_button_bottom_text']; ?></small>
                    </div>
                  </div>
                </div>
                <div class="column videoSc" id="has-yt-video">
                  <div class="award-badges">
                    <!-- 
                    <picture>
                      <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assests/images/award-01.svg" alt="award" width="72" height="94">
                    </picture> 
                    -->
                    <picture>
                      <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assests/images/award-02.svg" alt="award" width="72" height="94">
                    </picture>
                    <picture>
                      <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assests/images/award-03.svg" alt="award" width="72" height="94">
                    </picture>
                    <picture>
                      <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assests/images/award-04.svg" alt="award" width="72" height="94">
                    </picture>
                    <picture>
                      <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assests/images/award-05.svg" alt="award" width="72" height="94">
                    </picture>
                    <picture>
                      <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assests/images/award-06.svg" alt="award" width="72" height="94">
                    </picture>
                  </div>
                  <div class="inner">
                    <button id="myBtn">
                      Open Modal  
                      <div class="playsc"><span class="playicon"></span></div>
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
                                    data-src="<?php echo $top_section['video_embed_url']; ?>">
                                  </iframe>
                                </div>
                              </div>
                            </div>
                          </div>
                          <button style="background-image: url(<?php echo ($top_section['video_background_image']) ?  wsGetWebpSrcUrl($top_section['video_background_image']['id']) : ''; ?>)" class="videoPoster lazy-background nb-bg vlazy" 
                            id="play-button">
                          Play video
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="trustedpartner">
                <!--
                <h6>Trusted by 40,000+ businesses</h6>
                <div class="brands_row">
                <picture>
                <source type="image/webp" srcset="<?php echo get_template_directory_uri(); ?>/assests/images/trustedpartner-image.webp">
                <source type="image/png" srcset="<?php echo get_template_directory_uri(); ?>/assests/images/trustedpartner-image.png">
                <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assests/images/trustedpartner-image.png" width="1238"
                  height="43" alt="businesses">
                </picture>
                </div> 
                -->
                </div>
              </div>
            </div>
          </div>
        </section>
        <?php } endif; ?>
        <div class="partwrap">
          <div class="container">
            <div class="partner-div">
              <div class="part-col">
                <i class="part-logo part-logo1"></i>
                <p><strong>5</strong>/5</p>
                <i class="star-icon"><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assests/images/star-icon1.svg"
                  alt="star" width="112" height="17"></i>
              </div>
              <div class="part-col">
                <i class="part-logo part-logo2"></i>
                <p><strong>4.3</strong>/5</p>
                <i class="star-icon"><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assests/images/star-icon2.svg"
                  alt="star" width="112" height="17"></i>
              </div>
              <div class="part-col">
                <i class="part-logo part-logo3"></i>
                <p><strong>4.5</strong>/5</p>
                <i class="star-icon"><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assests/images/star-icon3.svg"
                  alt="star" width="112" height="17"></i>
              </div>
              <div class="part-col">
                <i class="part-logo part-logo4"></i>
                <p><strong>4.7</strong>/5</p>
                <i class="star-icon"><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assests/images/star-icon4.svg"
                  alt="star" width="112" height="17"></i>
              </div>
              <div class="part-col">
                <i class="part-logo part-logo5"></i>
                <p><strong>4.5</strong>/5</p>
                <i class="star-icon"><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assests/images/star-icon3.svg"
                  alt="star" width="112" height="17"></i>
              </div>
            </div>
          </div>
        </div>

        <?php  
		$enhance_productivity = get_field('enhance_productivity');
		
		if( $enhance_productivity ) :
		$isEnable = $enhance_productivity['is_enabled'];
		if( $isEnable == "yes" ){ 
		?>
        <section class="workplace-section">
          <div class="container">
            <div class="top-section">
              <h6><span class="bg-purple"><?php echo $enhance_productivity['heading']; ?></span></h6>
              <h2><?php echo $enhance_productivity['sub_heading']; ?></h2>
              <p><?php echo $enhance_productivity['content']; ?>
              </p>
            </div>
            <div class="flex_row">
            <?php 
			if( $enhance_productivity['content_repeaters'] ){  $i = 1;
				foreach( $enhance_productivity['content_repeaters'] as $row ) { ?>	
              <div class="column-three">
                <h3><?php echo $row['heading'];?></h3>
                <?php echo $row['content'];?>
              </div>
              <?php $i++; } } ?>  

            </div>
          </div>
        </section>
        <?php } endif; ?>

      
        <section class="middle-section">
        <?php  
        $automate_tracking_section = get_field('automate_tracking_section');
        if( $automate_tracking_section ) :
        $isEnable = $automate_tracking_section['is_enabled'];
        if( $isEnable == "yes" ){ 
        ?>
          <div class="item" id="ws-automate_tracking_section">
            <div class="container">
              <div class="top-section">
                <h6><span class="bg-purple"><?php echo $automate_tracking_section['heading']; ?></span></h6>
                <h2><?php echo $automate_tracking_section['sub_heading']; ?></h2>
                <p><?php echo $automate_tracking_section['content']; ?> 
                </p>
              </div>
              <div id="active_Current_Tabs1">
                <div class="flex_row">
                  <div class="column-left">

                  <?php 
                      if( $automate_tracking_section['content_repeater'] ){  $i = 1; $j = 11;
                      foreach( $automate_tracking_section['content_repeater'] as $row ) {
                        $image      = $row['image'];
                        $active = ($i==1) ? "active" : "";
                      ?>
                    <div class="all-content">
                      <div class="text-column <?php echo $active; ?>" id="t<?php echo $j; ?>" data-section="active_Current_Tabs1">
                        <h3><i class="icon<?php echo $i ?>"></i><?php echo $row['heading']; ?></h3>
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
                    <?php $i++; $j++; } } ?>
                    
                    
                   
                  </div>
                  <div class="column-right">
                  <?php 
                      if( $automate_tracking_section['content_repeater'] ){  $i = 1; $j = 11;
                      foreach( $automate_tracking_section['content_repeater'] as $row ) {
                        $image      = $row['image'];
                        $active = ($i==1) ? "active" : "";
                      ?>
                    

                    <?php if( $image ){
                            echo '<picture class="page '.$active.'" id="p'.$j.'" >
                            '.getPxlWebpURL($image['ID']).'
                            <source type="'.$image['mime_type'].'" srcset="'.$image['url'].'">
                            <img loading="lazy" src="'.$image['url'].'" alt="'.$image['title'].'" width="'.$image['width'].'" 
                            height="'.$image['height'].'"> 
                            </picture>';
                            } ?>


                    <?php $i++; $j++; } } ?>
                    
                  </div>
                </div>
              </div>
              <?php if( geoCTAcheck() === true ) : ?>
                <div class="ctasec mt80">
                <div>  
                <a href="<?php echo $RegLink; ?>" class="ctbtn"  onclick="return get_ws_signupform(this);">Start Free Trial</a>
                <span class="nccr">No credit card required</span>
                </div>
                <span class="devide">OR</span>
                <div>
                <a href="javascript:void(0)" class="ctbtn nobg" href="#contactus" onclick="call_demows();" target="_self">Book A Demo</a>
                </div>
              </div>
              <?php endif; ?>
              </div>
              </div>
              <?php }               
            endif; ?>

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
              <div id="active_Current_Tabs2">
                <div class="flex_row">
                  <div class="column-left">

                  <?php 
                      if( $silent_tracking_section['silent_tracking_content'] ){  $i = 5; $j = 11;
                      foreach( $silent_tracking_section['silent_tracking_content'] as $row ) {
                        $image      = $row['image'];
                        $active = ($i==5) ? "active" : "";
                      ?>
                    <div class="all-content">
                      <div class="text-column <?php echo $active; ?>" id="t<?php echo $i; ?>" data-section="active_Current_Tabs2">
                        <h3><i class="icon<?php echo $i; ?>"></i><?php echo $row['heading'];?></h3>
                        <p><?php echo $row['content'];?>
                        </p>
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
                    <?php $i++; $j++; } } ?>

                  </div>
                  <div class="column-right">
                  <?php 
                      if( $silent_tracking_section['silent_tracking_content'] ){  $i = 5; $j = 11;
                      foreach( $silent_tracking_section['silent_tracking_content'] as $row ) {
                        $image      = $row['image'];
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

                    <?php $i++; $j++; } } ?>
                    
                    
                  </div>
                </div>
              </div>
              <div class="mt40 btnSc">
                <!-- 
                <p>Run More Profitably!</p>
                <a href="javascript:void(0)" onclick="call_demows();" class="primary_btn1">Book A Demo</a>
                <small>Get queries answered from experts</small> 
                -->
                <?php echo wsDemoCta(); ?>
              </div>
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
              <div id="active_Current_Tabs3">
                <div class="flex_row">
                  <div class="column-left">
                  <?php 
                      if( $boost_profitability['content_repeater'] ){  $i = 19; $j = 1;
                      foreach( $boost_profitability['content_repeater'] as $row ) {
                        $image      = $row['image_'];
                        $active = ($i==19) ? "active" : "";
                      ?>
                    <div class="all-content">
                      <div class="text-column <?php echo $active; ?>" id="t<?php echo $i; ?>" data-section="active_Current_Tabs3">
                        <h3><i class="icon<?php echo $j; ?>"></i><?php echo $row['heading'];?></h3>
                        <p><?php echo $row['content'];?>
                        </p>
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
                    <?php $i++; $j++; } } ?>
                  </div>
                  <div class="column-right">
                  <?php 
                      if( $boost_profitability['content_repeater'] ){  $i = 19; $j = 11;
                      foreach( $boost_profitability['content_repeater'] as $row ) {
                        $image      = $row['image_'];
                        $active = ($i==19) ? "active" : "";
                      ?>
                    <?php if( $image ){
                            echo '<picture class="page '.$active.'" id="p'.$i.'" >
                            '.getPxlWebpURL($image['ID']).'
                            <source type="'.$image['mime_type'].'" srcset="'.$image['url'].'">
                            <img loading="lazy" src="'.$image['url'].'" alt="'.$image['title'].'" width="'.$image['width'].'" 
                            height="'.$image['height'].'"> 
                            </picture>';
                            } ?>
                    <?php $i++; $j++; } } ?>

                    
                  </div>
                </div>
              </div>
              <?php if( geoCTAcheck() === true ) : ?>
              <div class="mt40 btnSc">
                <!-- 
                <p>Sooner the Better!</p>
                <a href="<?php echo $RegLink; ?>" class="primary_btn1"><?php echo $ws_ctas['cta_text']; ?></a>
                <small>Quickly get your team on-board!</small> 
                -->
                <?php echo wsDemoCta(); ?>
              </div>
              <?php endif; ?>
            </div>
          </div>

          <?php } endif; ?>

         
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
              <div id="active_Current_Tabs4">
                <div class="flex_row">

                  <div class="column-left">

                  <?php 
                      if( $stay_in_control_section['content_repeater'] ){  $i = 12; $j = 31; $k = 1;
                      foreach( $stay_in_control_section['content_repeater'] as $row ) {
                        $image      = $row['image_'];
                        $active = ($j==31) ? "active" : "";
                        $div = ($k>=2) ? "</div>" : '';
                      ?>
                    <div class="all-content">
                      <div class="text-column <?php echo $active; ?>" id="t<?php echo $j; ?>" data-section="active_Current_Tabs4">
                        <h3><i class="icon<?php echo $i; ?>"></i><?php echo $row['heading'];?></h3>
                        <p><?php echo $row['content'];?>
                        </p>
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
                      <?php echo $div; ?>
                      <?php $i++; $j++; $k++; } } ?>

                      
                    </div>
                  </div>
                  <div class="column-right">
                  <?php 
                      if( $stay_in_control_section['content_repeater'] ){  $i = 12; $j = 31;
                      foreach( $stay_in_control_section['content_repeater'] as $row ) {
                        $image      = $row['image_'];
                        $active = ($j==31) ? "active" : "";
                      ?>
                    <?php if( $image ){
                            echo '<picture class="page '.$active.'" id="p'.$j.'" >
                            '.getPxlWebpURL($image['ID']).'
                            <source type="'.$image['mime_type'].'" srcset="'.$image['url'].'">
                            <img loading="lazy" src="'.$image['url'].'" alt="'.$image['title'].'" width="'.$image['width'].'" 
                            height="'.$image['height'].'"> 
                            </picture>';
                            } ?>
                    <?php $i++; $j++; } } ?>

                    
                  </div>
                </div>
              </div>
              <?php if( geoCTAcheck() === true ) : ?>
              <div class="mt40 btnSc">
                <!-- 
                <p>Whatever size, whatever type your workforce<br> is, Workstatus™ manages it for you</p>
                <a href="<?php echo $RegLink; ?>" class="primary_btn1"><?php echo $ws_ctas['cta_text']; ?></a>
                <small>No credit card required</small> 
                -->
                <?php echo wsDemoCta(); ?>
              </div>
              <?php endif; ?>
            </div>
          </div>
          <?php } endif; ?>
          
        </section>

        <?php  
		$comprehensive_dashboard_section = get_field('comprehensive_dashboard_section');
		
		if( $comprehensive_dashboard_section ) :
		$isEnable = $comprehensive_dashboard_section['is_enabled'];
		if( $isEnable == "yes" ){ 
		?> 
        <section class="number-speak-section text_center">
          <div class="container">
            <div class="top-section">
              <h6><span class="bg-purple"><?php echo  $comprehensive_dashboard_section['heading']; ?></span></h6>
              <h2><?php echo  $comprehensive_dashboard_section['sub_heading']; ?></h2>
            </div>
            <div class="flex_row">
            <?php 
                      if( $comprehensive_dashboard_section['content_repeater'] ){  $i = 1; $j = 21;
                      foreach( $comprehensive_dashboard_section['content_repeater'] as $row ) {
                        $image      = $row['image_'];
                        $active = ($i==1) ? "active" : "";
                      ?>
              <div class="column-three">
                <i class="icon<?php echo $i; ?>"></i>
                <div class="number-content">
                  <h3><?php echo $row['heading'];?></h3>
                  <p><?php echo $row['sub_heading'];?></p>
                </div>
              </div>
              <?php $i++; $j++; } } ?>

              
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
        <section class="management-software bglight">
          <div class="container">
            <div class="top-section">
              <h6><span class="bg-purple"><?php echo $time_tracker['heading']; ?></span></h6>
              <h2><?php echo $time_tracker['slug']; ?></h2>
              <p><?php echo $time_tracker['content']; ?>
              </p>
            </div>
            <div class="flex_row align-center">
              <div class="column-left">
                <ul>
                <?php 
                      if( $time_tracker['content_repeater'] ){  $i = 1; $j = 21;
                      foreach( $time_tracker['content_repeater'] as $row ) {
                        $image      = $row['image_'];
                        $active = ($j==21) ? "active" : "";
                      ?>
                  <li><a href="<?php echo site_url(); ?>/industry<?php echo $row['slug']?>"><i class="icon<?php echo $i; ?>"></i><?php echo $row['heading']?></a>
                  </li>
                  <?php $i++; $j++; } } ?>
                </ul>
              </div>
              <div class="column-right">
              <?php 
                      if( $time_tracker['content_repeater'] ){  $i = 1; $j = 21;
                      foreach( $time_tracker['content_repeater'] as $row ) {
                        $image      = $row['image_'];
                        $active = ($j==21) ? "active" : "";
                      ?>
                <?php if( $image ){
                            echo '<picture>
                            '.getPxlWebpURL($image['ID']).'
                            <source type="'.$image['mime_type'].'" srcset="'.$image['url'].'">
                            <img loading="lazy" src="'.$image['url'].'" alt="'.$image['title'].'" width="'.$image['width'].'" 
                            height="'.$image['height'].'"> 
                            </picture>';
                            } ?>
                <?php $i++; $j++; } } ?>
              </div>
            </div>
            <div class="mt40 btnSc text_center">
              <!-- 
              <a href="javascript:void(0)" onclick="call_demows();" class="primary_btn1">Book A Demo</a>
              <small>Get queries answered from experts</small> 
              -->
              <?php echo wsDemoCta(); ?>
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
        <section class="productivity">
          <div class="container">
            <div class="top-section">
              <h6><span class="bg-white"><?php echo $use_cases_section['heading']; ?></span></h6>
              <h2><?php echo $use_cases_section['sub_heading']; ?></h2>
              <p><?php echo $use_cases_section['content']; ?></p>
            </div>
            <div class="ws_products">

            <?php 
                      if( $use_cases_section['content_repeater'] ){  $i = 12; $j = 21;
                      foreach( $use_cases_section['content_repeater'] as $row ) {
                        $image      = $row['image'];
                        $active = ($j==21) ? "active" : "";
                      ?>  
            <div class="ws_product">
                <a href="<?php echo site_url($row['slug']); ?>">
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
                  <div class="product_title"><?php echo $row['heading']; ?></div>
                </a>
              </div>
              <?php $i++; $j++; } } ?>

              
            </div>
          </div>
        </section>

        <?php } endif; ?>

        <section class="one-solution list-icon post-animation">
          <div class="container">
            <?php 
            $whyUs = get_field('why-ws');
            if( isset($whyUs['is_enabled']) && ($whyUs['is_enabled'] == "yes") ) :
            ?>
            <div class="top-section">
              <h6><span class="bg-purple"><?php echo $whyUs['heading']; ?></span></h6>
              <h2><?php echo $whyUs['sub_heading']; ?></h2>
            </div>
            <?php 
            $cards = $whyUs['cards'];
            if($cards){
            echo '<div class="flex_row">';
            foreach( $cards as $card ){
              echo '<div class="column-three"><div class="box">';
              echo '<div class="bx-content">';
              if( $card['icon'] ){
                echo pxlGetPtag( $card['icon'] );
              }              
              echo $card['content'];
              echo '</div>';
              if( $card['link'] ){
                echo '<a href="'.$card['link'].'" class="view-more">Explore</a>';
              }              
              echo '</div></div>';
            }
            echo '</div>';  
            }
            ?>
            
            <?php if( geoCTAcheck() === true ) : ?>
            <div class="text_center mt80  link-text">
            <a href="<?php echo site_url('/use-cases'); ?>" class="small_anchor">Explore all Use Cases</a>
            </div>  
            <div class="mt40 btnSc">
              <?php echo wsDemoCta(); ?>
            </div>
            <?php endif; ?>
            <?php endif; ?>
            <div class="reviews-logo-section">
              <div class="flex_row justify-center">
                <div class="column">
                  <div class="flex_row align-center justify-center">
                    <a href="https://www.sitejabber.com/reviews/workstatus.io" rel="nofollow">
                    <span class="logo-icon">
                    <i class="reviews-logo review-logo1"></i>
                    <i class="star-icon"></i>
                    </span>
                    </a>
                  </div>
                </div>
                <div class="column">
                  <div class="flex_row align-center justify-center">
                    <a href="https://sourceforge.net/software/product/Workstatus/" rel="nofollow">
                    <span class="logo-icon">
                    <i class="reviews-logo review-logo2"></i>
                    <i class="star-icon"></i>
                    </span>
                    </a>
                  </div>
                </div>
                <div class="column">
                  <div class="flex_row align-center justify-center">
                    <a href="https://www.goodfirms.co/software/workstatus" rel="nofollow">
                    <span class="logo-icon">
                    <i class="reviews-logo review-logo3"></i>
                    <i class="star-icon"></i>
                    </span>
                    </a>
                  </div>
                </div>
                <div class="column">
                  <div class="flex_row align-center justify-center">
                    <a href="https://www.g2.com/products/valuecoders-workstatus/reviews" rel="nofollow">
                    <span class="logo-icon">
                    <i class="reviews-logo review-logo4"></i>
                    <i class="star-icon"></i>
                    </span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

    <?php getWsCmnFeatures(); ?>
    
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
                  //$image      = $row['image_'];
                  $active = ($i<=3) ? "open" : "";
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
    
    <?php if( !isMobile() ) : ?>
        <?php  
		$testimonials = get_field('testimonials');
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
        <?php // require_once 'common/workstatus-journey-straight.php';?>
        <?php require_once get_template_directory() .'/common/workstatus-journey.php';?>
      </main>
      <?php get_footer(); ?>
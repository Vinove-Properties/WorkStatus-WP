<?php 
	/* Template Name: Service Management Page Template */ 
	get_header();
	
?>

      <main class="site__content">
      <?php  
		$top_section = get_field('top_section');
		
		if( $top_section ) :
		$isEnable = $top_section['is_enabled'];
		if( $isEnable == "yes" ){ 
		?>
        <section class="inner-banner">
          <div class="container">
            <div class="inner-wrap">
              <h1><?php echo $top_section['heading']; ?></h1>
              <p><?php echo $top_section['sub_heading']; ?>
              </p>
              <!-- <ul class="list">
                <li>Minimize Expensive Downtime</li>
                <li>Improve Customer Satisfaction</li>
                <li>Track Service Operations & Performance</li>
              </ul> -->
              <div class="actionBtn">
                <?php if( geoCTAcheck() === true ) : ?>
                <div><a data-href="<?php echo $RegLink; ?>" href="javascript:void(0);" class="primary_btn1" onclick="return get_ws_signupform(this);"><?php echo $ws_ctas['cta_text']; ?></a>
                  <small><?php echo $top_section['trial_button_bottom_text']; ?></small>
                </div>
                <?php endif; ?>
                <div><a href="javascript:void(0)" onclick="call_demows();" class="primary_btn2">Book A Demo
                  </a>
                  <small><?php echo $top_section['demo_button_bottom_text']; ?></small>
                </div>
              </div>
              <?php require_once get_template_directory() .'/common/available-device.php';?>
              <div class="video-wrap">
                <div class="videoSc" id="has-yt-video">
                  <div class="inner">
                    <div class="topVideo srp-13">
                      <div id="myDIV" class="contbox2">
                        <div class="videoWrapper">
                          <!--<iframe id="video" class="videoIframe" allowfullscreen
                            data-src="https://www.youtube.com/embed/QOE35F45MI8?enablejsapi=1&html5=1&mute=1">
                            </iframe>-->
                          <button class="videoPoster lazy-background wslazy" id="play-button">
                            Play video
                            <!--<span class="playicon"></span>-->
                          </button>
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
        <section class="boxDiv">
          <div class="container">
            <div class="top-section">
              <h2> <?php echo $automate_tracking_section['heading']; ?></h2>
              <p><?php echo $automate_tracking_section['sub_heading']; ?>
              </p>
            </div>
            <div class="boxRow">
            <?php 
			if( $automate_tracking_section['content_repeater'] ){  $i = 1;
				foreach( $automate_tracking_section['content_repeater'] as $row ) {
          $image      = $row['image'];
						
						//$link       = $row['link'];
						//$wintitle   = $row['title'];
						//$wincontent = $row['content']; 
						$active = ($i==1) ? "active" : "";
          ?>	
              <div class="boxCol">
                <i class="icon<?php echo $i; ?>"></i>
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
            $boost_profitability = get_field('boost_profitability');
            
            if( $boost_profitability ) :
            $isEnable = $boost_profitability['is_enabled'];
            if( $isEnable == "yes" ){ 
            ?>   
          <div class="item">
            <div class="container">
              <div class="top-section">
                <h6><span class="bg-purple"><?php echo $boost_profitability['heading']; ?></span></h6>
                <h2><?php echo $boost_profitability['sub_heading']; ?></h2>
                <p><?php echo $boost_profitability['content']; ?>
                </p>
              </div>
              <div id="active_Current_Tabs1">
                <div class="flex_row">
                  <div class="column-right">
                  <?php 
					if( $boost_profitability['content_repeater'] ){  $i = 1;
					foreach( $boost_profitability['content_repeater'] as $row ) {
						$image      = $row['image_'];
						$active = ($i==1) ? "active" : "";
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
					if( $boost_profitability['content_repeater'] ){  $i = 1;
					foreach( $boost_profitability['content_repeater'] as $row ) {
						$image      = $row['image_'];
						$active = ($i==1) ? "active" : "";
					?>
                    <div class="all-content">
                      <div class="text-column <?php echo $active; ?>" id="t<?php echo $i; ?>" data-section="active_Current_Tabs1">
                        <h3><?php echo $row['heading'];?></h3>
                        <p><?php echo $row['sub_heading'];?>
                        </p>
                        <ul class="checkList">
                        <?php echo $row['content'];?>
                        </ul>
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
                <p>With our AI-powered field service time tracking software,<br> you'll never have to worry
                  about timesheets
                </p>
                <a href="<?php echo $RegLink; ?>" class="primary_btn1" onclick="return get_ws_signupform(this);"><?php echo $ws_ctas['cta_text']; ?></a>
                <small>Get started now!</small>
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
          <div class="item">
            <div class="container">
              <div class="top-section">
                <h6><span class="bg-purple"><?php echo $stay_in_control_section['heading']; ?></span></h6>
                <h2><?php echo $stay_in_control_section['sub_heading']; ?></h2>
                <p><?php echo $stay_in_control_section['content']; ?>
                </p>
              </div>
              <div id="active_Current_Tabs2">
                <div class="flex_row">
                  <div class="column-right">
                    
                  <?php 
                    if( $stay_in_control_section['content_repeater'] ){  $i = 4;
                    foreach( $stay_in_control_section['content_repeater'] as $row ) {
                      $image      = $row['image_'];
                      $active = ($i==4) ? "active" : "";
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
					if( $stay_in_control_section['content_repeater'] ){  $i = 4;
					foreach( $stay_in_control_section['content_repeater'] as $row ) {
						$image      = $row['image_'];
						$active = ($i==4) ? "active" : "";
						
					?>	
                    <div class="all-content">
                      <div class="text-column <?php echo $active; ?>" id="t<?php echo $i; ?>" data-section="active_Current_Tabs2">
                        <h3><i></i> <?php echo $row['heading'];?></h3>
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
                    <?php $i++; } } ?>

                    
                    
                  </div>
                </div>
              </div>
              <div class="mt40 btnSc">
                <p>Workstatus™ is the best Field Service Scheduling Software</p>
                <a href="javascript:void(0)" onclick="call_demows();" class="primary_btn1">Book A Demo</a>
                <small>Check out this demo to know more</small>
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
          
          <div class="item">
            <div class="container">
              <div class="top-section">
                <h6><span class="bg-purple"><?php echo $comprehensive_dashboard_section['heading']; ?></span></h6>
                <h2><?php echo $comprehensive_dashboard_section['sub_heading']; ?></h2>
                <p><?php echo $comprehensive_dashboard_section['content']; ?>
                </p>
              </div>
              <div id="active_Current_Tabs3">
                <div class="flex_row">
                  <div class="column-right">
                  <?php 
					if( $comprehensive_dashboard_section['content_repeater'] ){  $i = 7;
					foreach( $comprehensive_dashboard_section['content_repeater'] as $row ) {
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
					if( $comprehensive_dashboard_section['content_repeater'] ){  $i = 7;
					foreach( $comprehensive_dashboard_section['content_repeater'] as $row ) {
						$image      = $row['image_'];
						$active = ($i==7) ? "active" : "";
						
					?>	
                    <div class="all-content">
                      <div class="text-column <?php echo $active; ?>" id="t<?php echo $i; ?>" data-section="active_Current_Tabs3">
                        <h3><i></i><?php echo $row['heading'];?></h3>
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
                    <?php $i++; } } ?> 
                    
                  </div>
                </div>
              </div>
              <div class="mt40 btnSc">
                <p>Start Using Workstatus™ Field Service Management<br> Software Right Away!</p>
                <a href="javascript:void(0)" onclick="call_demows();" rel="nofollow"
                  class="primary_btn1">Book A Demo</a>
                <small> It’s Worth</small>
              </div>
            </div>
          </div>
          <?php } endif; ?>
        </section>
        <section class="wsMobile whitetxt">
        <?php require_once get_template_directory() .'/common/workstatus-device.php';?>
        </section>
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
                    <p class="white"><?php echo $row['content'];?>
                    </p>
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
                          <p><?php echo $row['answer'];?>
                          </p>
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
<?php
function workstatus_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'workstatus_body_classes' );

function workstatus_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'workstatus_pingback_header' );

function vc_siteurl( $url ){
  if( $url == "#" ) return $url;

  if (filter_var($url, FILTER_VALIDATE_URL) === true) {
      return $url;
  }else{
    return site_url( $url );
  }
}

function getCommonSolutions( $post_id, $sec_class = '', $needDefault = true ){
	$solution = get_field('ws-onesolution', $post_id);
	if( isset( $solution['is_enabled'] ) && ($solution['is_enabled'] == "yes") ){ ?>
	<section class="one-solution <?php echo $sec_class; ?>" id="ws-cmn-solution">
      <div class="container">
      <div class="top-section">
      <?php 
      if( $solution['heading'] ){
        echo '<h6><span class="bg-purple">'.$solution['heading'].'</span></h6>';
      } 
      ?>
      <h2><?php echo $solution['sub_heading']; ?></h2>
      <?php 
      if( isset($solution['content-heading']) && !empty($solution['content-heading']) ){
        echo '<p>'.$solution['content-heading'].'</p>';
      }      
      ?>
      </div>
      <?php 
      if( $solution['cols'] ) :
      	echo '<div class="flex_row">';
      	foreach( $solution['cols'] as $row ){
      	echo '<div class="column-three"><div class="box">';
      	if( $row['icon'] ){
      		echo pxlGetPtag( $row['icon'] );
      	}
        echo $row['text'].'</div></div>';
      	}      	
      	echo '</div>';
      	endif; ?>

        <?php 
        $hasCTA = (isset($solution['cta-needed']) && ($solution['cta-needed'] == "yes")) ? true : false;
        if( (geoCTAcheck() === true) && ($hasCTA === true) ) : ?>
        <div class="mt80 btnSc">
        <?php echo wsDemoCta(); ?>
        </div>
        <?php endif; ?>
        </div>
  </section>	
	<?php }elseif( $needDefault === true ){ ?>
	<section class="one-solution <?php echo $sec_class; ?>" id="ws-cmn-solution-default">
      <div class="container">
      <div class="top-section">
      <h6><span class="bg-purple">Meant For Every Business</span></h6>
      <h2>Workstatus is One Solution for All Businesses</h2>
      </div>
      <div class="flex_row">
      <div class="column-three">
        <div class="box">
        <picture>
          <source type="image/webp" srcset="<?php bloginfo('template_url'); ?>/assests/images/one-sol01.webp">
          <source type="image/png" srcset="<?php bloginfo('template_url'); ?>/assests/images/one-sol01.png">
          <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/images/one-sol01.png" alt="One Solution" width="92" height="59">
        </picture>
        <h3>Enterprises</h3>
        <ul>
          <li>Optimize workforce management and resource allocation</li>
          <li>AI-powered insights for strategic decision-making</li>
          <li>Choose Stealth or Visible Mode for tracking employee activity</li>
        </ul>
        </div>
      </div>
      <div class="column-three">
        <div class="box">
        <picture>
          <source type="image/webp" srcset="<?php bloginfo('template_url'); ?>/assests/images/one-sol02.webp">
          <source type="image/png" srcset="<?php bloginfo('template_url'); ?>/assests/images/one-sol02.png">
          <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/images/one-sol02.png" alt="One Solution" width="92" height="59">
        </picture>
        <h3>Start-ups</h3>
        <ul>
          <li>Cost-effective, comprehensive workforce management</li>
          <li>Real-time insights for rapid growth and success</li>
          <li>Ideal for managing remote teams</li>
        </ul>
        </div>
      </div>
      <div class="column-three">
        <div class="box">
        <picture>
          <source type="image/webp" srcset="<?php bloginfo('template_url'); ?>/assests/images/one-sol03.webp">
          <source type="image/png" srcset="<?php bloginfo('template_url'); ?>/assests/images/one-sol03.png">
          <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/images/one-sol03.png" alt="One Solution" width="92" height="59">
        </picture>
        <h3>Freelancers</h3>
        <ul>
          <li>Precise time tracking and invoicing</li>
          <li>Efficient task prioritization and deadline management</li>
          <li>Foster trust and credibility with clients</li>
        </ul>
        </div>
      </div>
      </div>
      </div>
      </section>
	<?php }
}

function getEmpLeadership( $post_id, $bg = 'bglight', $needDefault = true  ){
	$solution = get_field('ws-empleaders', $post_id);
	if( isset( $solution['is_enabled'] ) && ($solution['is_enabled'] == "yes") ){
	?>
	<section class="trackEm <?php echo $bg; ?>">
	  <div class="container">
	    <div class="top-section">
	      <h6><span class="bg-purple"><?php echo $solution['heading']; ?></span></h6>
	      <?php echo $solution['top-content']; ?>
	    </div>
	    <div class="trackRow">
			<div class="trackImg">
			<?php 
			if( $solution['image'] ){
				echo pxlGetPtag( $solution['image'] );
			}
			?>
			</div>
			<?php 
			if( $solution['cols'] ) :
			echo '<div class="trackContent">';
			foreach( $solution['cols'] as $row ){
				echo '<div class="row">'.$row['text'].'</div>';
			}      	
			echo '</div>';
			endif; 
			?>
	    </div>
	  </div>
	</section>
	<?php }elseif( $needDefault == true ){ ?>
	<section class="trackEm <?php echo $bg; ?>">
  	<div class="container">
    <div class="top-section">
      <h6><span class="bg-purple">Empowering Leaders</span></h6>
      <h2>How Can Workstatus Help Managers Optimize Operations</h2>
      <p>Workstatus offers robust features to help managers plan, optimize &amp; track their operations and make data-driven decisions for higher ROI.</p>
    </div>
    <div class="trackRow">
      <div class="trackImg">
        <picture>
          <source type="image/webp" srcset="<?php bloginfo('template_url'); ?>/assests/images/optimize-image.webp">
          <source type="image/png" srcset="<?php bloginfo('template_url'); ?>/assests/images/optimize-image.png">
          <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/images/optimize-image.png" alt="Empowering Leaders" width="741" height="743">
        </picture>
      </div>
      <div class="trackContent">
        <div class="row">
          <h3><a href="<?php echo site_url('/by-role/hr-managers'); ?>">HR Managers</a></h3>
          <ul>
            <li>Real-time insights on attendance and work hours</li>
            <li>Geofencing, GPS tracking, and selfie validation</li>
            <li>Efficient time tracking and reporting for easy payroll</li>
          </ul>
        </div>
        <div class="row">
          <h3><a href="<?php echo site_url('/by-role/business-owners'); ?>">Business Owners</a></h3>
          <ul>
            <li>Gain a clear picture of overall business productivity</li>
            <li>Identify areas for growth and increase profits</li>
            <li>Track project progress, employee performance, and resource utilization to make informed decisions.</li>
          </ul>
        </div>
        <div class="row">
          <h3><a href="<?php echo site_url('/by-role/it-managers'); ?>">IT Managers</a></h3>
          <ul>
            <li>Identify potential data theft threats by capturing screenshots.</li>
            <li>Monitor application usage to detect unauthorized software installations and potential security breaches.</li>
            <li>Analyze metrics for smarter IT operations.</li>
          </ul>
        </div>
        <div class="row">
          <h3><a href="<?php echo site_url('/by-role/project-managers'); ?>">Project Managers</a></h3>
          <ul>
            <li>Centralized platform for monitoring project progress</li>
            <li>Real-time data and analytics for risk identification</li>
            <li>Stay on schedule and within budget with Workstatus!"</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<?php }
}

function getWsCmnFeatures(){
  global $post;
  $cmnFeature = get_field('cmn-features', 1942); // Render Feature from home page
  $psFeature  = get_field('ws-cmnfeature', $post->ID);
  $psLink     = false;
  if( isset( $psFeature['ps-features'] ) && ($psFeature['ps-features'] == "yes") ){
    $cmnFeature = $psFeature;
    $psLink = true;
    $cmnFeature['is_enabled'] = "yes";
  }
  
  if( isset( $cmnFeature['is_enabled'] ) && ($cmnFeature['is_enabled'] == "yes") ) :
  ?>
  <section class="feature_section for-heading-center whitetxt post-animation ws-ctav4">
    <div class="container">
      <div class="top-section">
        <h6><span class="bg-white"><?php echo $cmnFeature['heading']; ?></span></h6>
        <?php echo $cmnFeature['top-content']; ?>
      </div>
      <?php 
      $cards = $cmnFeature['cards'];
      if( $cards ){
        echo '<div class="flex_row">';
        foreach( $cards as $card ){
          $icon = '';
          if( $card['icon'] ){
          $icon = '<img loading="lazy" src="'.$card['icon']['url'].'" alt="feature" width="'.$card['icon']['width'].'" 
          height="'.$card['icon']['height'].'">';
          }
          echo '<div class="column"><div class="content">';
          if( $psLink === false ){
          echo '<a href="'.vc_siteurl( $card['link'] ).'">'.$icon.$card['content'].'<span class="small_anchor">Explore</span></a>';  
          }else{
          echo $icon.$card['content'].'<a href="'.vc_siteurl($card['link']).'"><span class="small_anchor">Explore</span></a>';    
          }
          echo '</div></div>';
        }              
        echo '</div>';  
      }
      ?>
      <div class="text_center mt80 for-link-white link-text"><a href="<?php echo site_url(); ?>/product" class="small_anchor">Explore all Features</a></div>
      <div class="mt40 text_center for-link-white btnSc"><?php echo wsDemoCta(); ?></div>
    </div>
  </section>      
  <?php endif;
}

function getResultsDriveSection( $post_id ){
  $elm = get_field( 'dd-result',$post_id );
  if( isset($elm['required']) && ($elm['required'] == "yes") ){
  return '<section class="data-driving">
   <div class="container">
      <div class="top-section">
         <h6><span class="bg-purple">'.$elm['heading'].'</span></h6>
         '.$elm['heading-content'].'
      </div>
      <div class="data-flex">
         <div class="column challenges">
            <div class="head-data">
               <div class="step-number">1</div>
               <h3>'.$elm['left-title'].'</h3>
            </div>
            '.$elm['left-content'].'
         </div>
         <div class="column analyze">
            <div class="head-data">
               <div class="step-number">2</div>
               <h3>Analyze</h3>
            </div>
            <div class="analyze-button">
               <div class="play-icon"> 
                <img loading="lazy" src="'.get_bloginfo('template_url').'/assests/images/data-circle2.svg" 
                alt="play" width="270" height="270">
               </div>
               <div class="playsc" onclick="return _playYTmedia(\''.$elm['yt-video'].'\');">
               <span class="playicon">Play</span>
               </div>
               <p onclick="return _playYTmedia(\''.$elm['yt-video'].'\');">Play to watch</p>
            </div>
         </div>
         <div class="column solutions">
            <div class="head-data">
               <div class="step-number">3</div>
               <h3>'.$elm['right-title'].'</h3>
            </div>
            '.$elm['rt-content'].'
         </div>
      </div>
   </div>
  </section>
  <div class="video-popup">
   <div id="gen-vpopup" class="popup-wrapper" style="display: none;">
      <div class="popWrap">
         <div class="popup-content">
            <span class="gen-closeicon" onclick="closeGenVideo()">Close</span>
            <iframe id="gen-video" class="videoIframe js-videoIframe" allowfullscreen="#" src="" allow="autoplay"></iframe>
         </div>
      </div>
   </div>
</div>
  ';
  }
}
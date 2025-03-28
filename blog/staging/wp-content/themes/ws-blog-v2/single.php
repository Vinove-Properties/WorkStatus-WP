<?php 
global $post;  
$author_id    = $post->post_author; 
get_header(); 
?>
<main id="single" class="detail-page banner-section">
  <div class="container">
    <div class="social-icon-box">
      <!--<div class="share-head">
        Share Article:
        </div>-->
      <div class="social-icons">
        <a href="https://twitter.com/intent/tweet?text=<?php echo get_the_title(); ?>'&url=<?php echo get_the_permalink(); ?>" class="a2a_button_twitter" target="_blank" rel="noopener noreferrer"></a>
        <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo get_the_permalink(); ?>&title=<?php echo get_the_title(); ?>" class="a2a_button_linkedin" target="_blank" rel="noopener noreferrer"></a>
        <a href="https://www.facebook.com/sharer?u=<?php echo get_the_permalink(); ?>&t=<?php echo get_the_title(); ?>" class="a2a_button_facebook" target="_blank" rel="noopener noreferrer"></a>
      </div>
    </div>
    <?php     
      $topCTA = get_field('wsbp-cta');  
      if( (isset( $topCTA['required'] ) && ($topCTA['required'] != "no"))  || (!isset( $topCTA['required']) ) ) :
      $heading  = ( isset( $topCTA['heading'] ) && !empty( $topCTA['heading'] ) ) ? $topCTA['heading'] : 'Want to Streamline Workforce & Project Management?';    
      $text     = ( isset( $topCTA['text'] ) && !empty( $topCTA['text'] ) ) ? $topCTA['text'] : "Workstatus helps you automate processes, gain actionable insights, and make smarter decisions that impact your bottom line.";
      //$text = ( isset( $topCTA['text'] ) && !empty( $topCTA['text'] ) ) ? $topCTA['text'] : false;
      //if( isset( $topCTA['type'] ) && ($topCTA['type'] == "ppc") ){ 
      ?>
    <div class="cta-section cta-accorpg">
      <div class="top-cta">
        <div class="colLeft">
          <div class="ct-head"><?php echo $heading; ?></div>
          <?php 
            if( $text ){
            echo '<p>'.$text.'</p>';
            }
            ?>          
          <div class="cta-wrap">
            <a href="javascript:void(0)" onclick="call_demows();" class="white-btn  bkd">Book A Demo</a>
            <a href="javascript:void(0);" class="white-btn blue sft" onclick="return get_ws_signupform(42, 'monthly');">Start Free Trial</a>
          </div>
        </div>
        <div class="colMid">
          <?php 
            if( isset( $topCTA['image'] ) && is_array( $topCTA['image'] ) ){
            echo '<picture>
            <img loading="lazy" src="'.$topCTA['image']['url'].'" alt="workstatus" width="'.$topCTA['image']['width'].'" height="'.$topCTA['image']['height'].'">
            </picture>';  
            }else{
            echo '<picture>
            <img loading="lazy" src="'.get_bloginfo('template_url').'/dev-images/ppc-defbanner.svg" alt="workstatus" 
            width="488" height="202">
            </picture>';
            }
            ?>
        </div>
      </div>
    </div>
    <?php 
      /*
      }else{ ?>
    <div class="cta-section">
      <div class="top-cta">
        <div class="colLeft">
          <div class="ct-head"><?php echo $heading; ?></div>
          <p><?php echo $text; ?></p>
        </div>
        <div class="colMid">
          <picture>
            <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/images/cta-image.svg" alt="workstatus" 
              width="400" height="200">
          </picture>
        </div>
        <?php 
          if( isset($topCTA['cs-button']) && !empty($topCTA['cs-button']) ){
          if( isset( $topCTA['cs-link'] ) && !empty($topCTA['cs-link']) ){
          echo '<div class="ctaRit"><a href="'.$topCTA['cs-link'].'" class="white-btn blue">'.$topCTA['cs-button'].'</a></div>';  
          }else{
          echo '<div class="ctaRit">
          <a href="javascript:void(0);" class="white-btn blue" onclick="return get_ws_signupform(42, \'monthly\');">'.$topCTA['cs-button'].'</a>
          </div>';  
          }        
          }else{ 
          echo '<div class="ctaRit">
          <a href="javascript:void(0);" class="white-btn blue" onclick="return get_ws_signupform(42, \'monthly\');">Start Free Trial</a>
          </div>';  
          } 
          ?>
      </div>
    </div>
    <?php 
      }
      */
      endif; ?>    
    <div class="top-header-section">
      <div class="searchdiv">
        <div class="breadcrumbs">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Blog</a>
          <?php
            $categories = get_the_category();
            if ( ! empty( $categories ) ) {
            foreach ( $categories as $category ) {
              echo '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '">' . esc_html( $category->name ) .'</a>';
            }
            }
            if( get_field('bc-title') ){
            the_field('bc-title');
            }else{
            the_title();
            }
            ?>
        </div>
        <div class="btn-section dis-flex">
          <button  class="searchsubmit" value="search" id="myBtn"></button>
          <div id="contentPopup" class="popup-wrapper">
            <div class="popWrap">
              <div class="popup-content">
                <span class="close"></span>
                <?php $site_url = trailingslashit( get_bloginfo('url') ); ?>   
                <form action="<?php echo $site_url; ?>" method="get" class="search_box">
                  <input type="search" placeholder="Type to start your search..." class="search" name="s" id="search" value="<?php the_search_query(); ?>" />
                  <button  class="searchsubmit" value="search"></button>
                </form>
              </div>
              <div></div>
            </div>
          </div>
          <div id="newsletter-col">
            <button class="newsletter" value="search" id="myBtn2"></button>
            <div id="newsletterPopup" class="popup-wrapper">
              <div class="popWrap">
                <div class="popup-content">
                  <span class="closeicon-nw" onclick="closeNewsLetter('newsletterPopup');"></span>
                  <h3>Like What You're Reading?</h3>
                  <?php echo do_shortcode('[email-subscribers-form id="1"]'); ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="single-post-container">
      <div class="top-header-banner">
        <h1><?php echo get_the_title()?></h1>
        <div class="auth-wrap">
          <div class="author-img">
            <img loading="lazy" src="<?php echo getMcAuthorThumb($author_id); ?>" width="24" height="24" 
            alt="<?php echo get_the_author(); ?>">
          </div>
          <div class="entry-meta">
          Written by <?php echo get_the_author_posts_link(); 
          echo '<span class="authpro" style="display: block; text-align: left; color: #646464;">'.get_field('pro-title', 'user_'.$author_id).'     
    <span class="col-authpro-ico">
    <img onclick="this.classList.toggle(\'active\');document.getElementById(\'auth-hd-profile\').classList.toggle(\'active\')" loading="lazy" class="authpro-ico" src="'.get_bloginfo('template_url').'/dev-images/down-icon.png">
    </span>
    </span>';
          ?>
          </div>
        </div>
      </div>
      <?php 
      echo '<div id="auth-hd-profile" style="margin-top:20px; display:none;">'.get_field('auth-excerpt', 'user_'.$author_id).'</div>';
        $keyAway = get_field('col-keyaway');
        if( isset($keyAway['required']) && ($keyAway['required'] == "yes") ){
          if( isset( $keyAway['content'] ) && !empty($keyAway['content']) ){
            echo '<div class="row-key-takeaway">'.$keyAway['content'].'</div>';  
          }  
        } 
        ?>
    </div>
    <!--<div class="detail-thumb"><?php the_post_thumbnail( 'single-post-thumbnail' ); ?></div>-->
    <div class="center content">
      <div class="second-row" id="stickytoc">
        <div class="buyers-guide">
          <div class="vcb-col-left" id="vcb-col-left">
            <div class="table-c active" id="elm-toc">
              <h3>Table of Contents <a class="sw-hd" href="javascript:void(0);" onclick="document.getElementById('elm-toc').classList.toggle('active');">
                <span class="hide">(Hide)</span>
                <span class="show">(Show)</span>
                </a>
              </h3>
              <div class="tocsec">
                <?php dynamic_sidebar('ws-toc'); ?>
              </div>
            </div>
            <?php
            $eBook = get_field('eb-download');
            if( isset($eBook['required']) && ($eBook['required'] == "yes") ){
            echo '<div class="customcta">
              <div class="cus-cont">
                <div class="cushed" style="justify-content:center;">'.$eBook['title'].'</div>
                <div class="btn-container">
                  <a class="white-btn blue pxl-ext" onclick="geteBook_popup(\'http://www.workstatus.io/blog/staging/wp-content/uploads/boost-employees-productivity.pdf\')" href="javascript:void(0);">Download Now</a>
                </div>
              </div>
            </div>';  
            }
            ?>

            <?php 
              $sbCTA = get_field('wssb-cta');  
              if( (isset( $sbCTA['required'] ) && ($sbCTA['required'] != "no"))  || (!isset( $sbCTA['required']) ) ) :
              $ctaTitle = (isset($sbCTA['scta-title']) && !empty($sbCTA['scta-title'])) ? $sbCTA['scta-title'] : 
              'Get Started with Workstatus';
              $ctaBody = (isset($sbCTA['scta-body']) && !empty($sbCTA['scta-body'])) ? $sbCTA['scta-body'] : '<ul><li>Project & Task Management</li><li>Time Tracking & Attendance</li> <li>Workforce/Productivity Analytics</li></ul>';
              ?>
            <div class="customcta">
              <div class="cus-cont">
                <div class="cushed"><?php echo $ctaTitle; ?></div>
                <?php echo $ctaBody; ?>
                <div class="btn-container">
                  <a href="javascript:void(0)" onclick="call_demows();" class="white-btn  bkd">Book A Demo</a>
                  <a href="javascript:void(0);" class="white-btn blue sft" onclick="return get_ws_signupform(42, 'monthly');">Start Free Trial</a>
                </div>
              </div>
              <?php /* ?>
              <div class="cusimg">
                <picture>
                  <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/images/simchoice.png" alt="workstatus" 
                    width="285" height="197">
                </picture>
              </div>
              <?php */ ?>
            </div>
            <?php endif; ?>
            <?php /* ?>
            <div class="detail-subsbox">
              <h3>Subscribe to our blog</h3>
              <?php echo do_shortcode('[email-subscribers-form id="1"]'); ?>
            </div>
            <?php */ ?> 
          </div>
          <div class="vcb-col-right" id="vcb-col-right">
            <section class="post-content">
              <div class="text">
                <?php 
                  while(have_posts()) : the_post();
                    echo '<div class="wp-content-dt">';
                  	the_content();
                    $authThumb  = getMcAuthorThumb($author_id);
                    echo '<section class="author-container">
                    <div class="author-image"><img src="'.$authThumb.'" alt="Author"></div>
                    <div class="author-description">
                    <div style="margin-bottom:15px;">
                    <h4 style="margin:0;">'.get_the_author_posts_link().'</h4>
                    <small>'.get_the_author_meta('pro-title', $author_id).'</small>
                    </div>
                    '.get_field( 'author_description', 'user_'.$author_id ).'</div>
                    </section>';
                    echo '</div>';
                  endwhile;	
                  do_action('ws_sgl_condata');
                  ?>
              </div>
              <div class="clear"></div>
              <?php
                if( function_exists( 'epcl_render_global_ads' ) ){
                epcl_render_global_ads('single_bottom');
                }
                ?>
            </section>
            <?php if( get_the_tags() ): ?>
            <div class="tags section">
              <?php the_tags('<h4 class="tag-title title usmall">'.esc_html__('Tags:', 'reco').'</h4>', ' '); ?>
            </div>
            <?php endif; ?>
            <?php /* ?>
            <section class="upd-cusbanner email-subscribe" style="margin-top:0;">
              <?php echo do_shortcode('[email-subscribers-form id="1"]'); ?>
            </section>
            <?php */ ?>
          </div>
          <!-- .right -->
        </div>
      </div>
    </div>
    <div class="subcribe-bottom">
      <div class="detail-subsbox">
        <h3>Subscribe to our blog</h3>
        <?php echo do_shortcode('[email-subscribers-form id="1"]'); ?>
      </div>
    </div>
  </div>
</main>
<?php get_footer(); ?>
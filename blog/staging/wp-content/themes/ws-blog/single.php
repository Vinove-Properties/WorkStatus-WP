<?php 
get_header(); 
?>
<main id="single" class="detail-page banner-section">
  <div class="container">
    <?php 
    $topCTA = get_field('ptop-cta');  
    if( (isset( $topCTA['required'] ) && ($topCTA['required'] != "no"))  || (!isset( $topCTA['required']) ) ) :
    $heading  = ( isset( $topCTA['heading'] ) && !empty( $topCTA['heading'] ) ) ? $topCTA['heading'] : 'Where Creativity Meets Technology';
    $text     = ( isset( $topCTA['text'] ) && !empty( $topCTA['text'] ) ) ? $topCTA['text'] : "Let's collaborate to create unforgettable digital experiences that drive results.";
    ?>
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
        <div class="ctaRit"><a href="javascript:void(0);" class="white-btn blue" onclick="return get_ws_signupform(42, 'monthly');">Start Free Trial</a></div>
      </div>
    </div>
    <?php endif; ?>
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
                  <h3>Like What You’re Reading?</h3>
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
        <div class="entery-wrap">
          <div class="meta-wrap">
            <div class="author-img">
              <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/images/author.png" width="52" height="52" alt="workstatus">
            </div>
            <ul class="entry-meta">
              <li class="meta author vcard">
                <span class="author-name fn">Written by
                <a href="https://www.workstatus.io/blog/">Varun Bhagat</a></span>
              </li>
              <!-- <li class="posted-on">Published <span class="dt">November 30, 2023</span></li> -->
            </ul>
          </div>
          <div class="social-icon-box">
            <div class="share-head">
              Share Article:
            </div>
            <div class="social-icons">
              <a href="https://www.facebook.com/sharer?u='.get_the_permalink().'&t='.get_the_title().'.." class="a2a_button_facebook" target="_blank" rel="noopener noreferrer"></a>
              <a href="http://www.linkedin.com/shareArticle?mini=true&url='.get_the_permalink().'&title='.get_the_title().'" class="a2a_button_linkedin" target="_blank" rel="noopener noreferrer"></a>
              <a href="http://twitter.com/intent/tweet?text='.get_the_title().'&url='.get_the_permalink().'" class="a2a_button_twitter" target="_blank" rel="noopener noreferrer"></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="detail-thumb"><?php the_post_thumbnail( 'single-post-thumbnail' ); ?></div>
  <div class="center content">
    <div class="second-row" id="stickytoc">
      <div class="buyers-guide">
        <div class="vcb-col-left" id="vcb-col-left">          
          <div class="table-c">
            <h3>Table of Contents</h3>
            <div class="tocsec">
              <?php dynamic_sidebar('ws-toc'); ?>
            </div>
          </div>
          <?php 
          $sbCTA = get_field('sb-cta');  
          if( (isset( $sbCTA['required'] ) && ($sbCTA['required'] != "no"))  || (!isset( $sbCTA['required']) ) ) :
          $sbText  = (isset( $sbCTA['text'] ) && !empty($sbCTA['text'])) ? $sbCTA['text'] : 'Want to Outshine Competitors?';
          ?>
          <div class="customcta">
            <picture>
              <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/images/custom-image.svg" alt="workstatus" 
                width="299" height="129">
            </picture>
            <div class="cushed"><?php echo $sbText; ?></div>
            <div class="btn-container">
            <a href="javascript:void(0);" class="white-btn blue" onclick="return get_ws_signupform(42, 'monthly');">Start Free Trial</a>                     
            </div>
          </div>
          <?php endif; ?>
          <div class="detail-subsbox">
            <h3>Subscribe to our blog</h3>
            <?php echo do_shortcode('[email-subscribers-form id="1"]'); ?>
          </div>
        </div>
        <div class="vcb-col-right" id="vcb-col-right">
          <section class="post-content">
            <div class="text">
              <?php 
                while(have_posts()) : the_post();
                	the_content();
                endwhile;	
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
  </div>
</main>
<?php get_footer(); ?>
<?php 
get_header(); 
/*if( function_exists('get_field') && function_exists('get_fields') ){
    $post_id = get_the_ID();
    $views = absint( get_field('views_counter') );
    
    if(!$views) $views = 0;
    update_post_meta($post_id, 'views_counter', ++$views);
}*/
?>
<main id="single" class="detail-page">
	<div class="container">
  <div class="center content">
    <div class="top-row">
      <div class="entry-header">
        <?php 
        $category = get_the_category();
        //$firstCategory = $category[0]->cat_name;
        if( $category ){
        echo '<div class="cat"><a href="'.get_category_link($category[0]->term_id).'" rel="category tag">'.$category[0]->cat_name.'</a></div>';    
        }
        ?>  
        <h1><?php 
        $month = get_post_meta( get_the_ID(), 'wms-post', true );
        $inMonth = '';
        if( $month && ($month == "yes") ){
        $inMonth = " in ".date("F, Y");
        }
        the_title(); echo $inMonth; ?></h1>
      </div>
      <div class="blog-image">
        <div class="blog-thumb">
          <?php the_post_thumbnail( 'single-post-thumbnail' ); ?>
        </div>
      </div>
    </div>
    <div class="second-row" id="stickytoc">
      <div class="buyers-guide">
  
      <div class="vcb-col-left" id="vcb-col-left">
        <div class="tocsec">
          <h3>Table of Contents</h3>
          <?php dynamic_sidebar('ws-toc'); ?>
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
          <section class="upd-cusbanner email-subscribe" style="margin-top:0;">
            <?php echo do_shortcode('[email-subscribers-form id="1"]'); ?>
          </section>
        </div>
        <!-- .right -->
      </div>
     
    </div>
  </div>
</div>
</main>
<?php get_footer(); ?>
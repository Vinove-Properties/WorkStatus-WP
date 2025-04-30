<?php get_header(); ?>
<main class="site__content">
<?php 
global $post;
$bannerType = get_post_meta( $post->ID, 'pbanner-type', true ); 
if( $bannerType && ($bannerType === "form") ){
?>  
<section class="hero-banner">
    <div class="container">
      <div class="inner-wrap">
        <div class="flex-2">
        <h1><?php the_title(); ?></h1>
      </div>
   <div class="salary-calculator">
      <?php 
      //
      ?>
      <?php 
      $calcType = get_post_meta( $post->ID, 'calc-type', true ); 
      if( $calcType && ($calcType === "roi") ){
        get_template_part('inc/calc/roi', 'calculator');
      }elseif( $calcType && ($calcType === "pc") ){
        get_template_part( 'inc/calc/productivity-calc-v2' );
      }else{
        get_template_part('inc/calc/wagerate', 'calculator');  
      }
      ?>
    </div>
    </div>
  </div>
</section>
<?php }else{ ?>
<div class="banner-option">
  <div class="container">
  <div class="entry-header">
    <div class="cat"><a href="javascript:void(0);" rel="category tag"><?php echo get_field('rpost-type'); ?></a></div>
    <h1><?php the_title(); ?></h1>
  </div>
  <div class="blog-image">
      <div class="blog-thumb">
      <?php 
      $postThumb  = get_post_thumbnail_id( $post->ID );
      if( $postThumb ){
      echo getDOMpictureTag( $postThumb );
      }
      ?>
      </div>
  </div>
  </div>
</div>
<?php } ?>
<div class="resource-wrap">
  <div class="container">
    <div class="second-row" id="stickytoc">
      <div class="buyers-guide">
        <div class="vcb-col-left" id="vcb-col-left">
        	<?php dynamic_sidebar('ws-toc'); ?>
        </div>
        <div class="vcb-col-right" id="vcb-col-right">
          <article class="main-article post-11685 post">
        	<?php 
        	while( have_posts() ) : the_post();
        	the_content();
        	endwhile;   
        	?>                   
          </article>
          <?php 
          global $post;
          $thisPost = $post->ID;
          $cats = wp_get_post_categories( $thisPost );
          if( $cats ){
          $args = array( 'category__in' => $cats, 'post__not_in' => array( $thisPost ), 'posts_per_page' => 3 );
          $loop = new WP_Query($args);
          if( $loop->have_posts() ){
          ?>
          <div class="ws-relpost">
          <h3>Related Posts</h3>
          <?php 
          while($loop->have_posts()) : $loop->the_post(); 
          $pid = get_the_ID();
          $relPostThumb = get_the_post_thumbnail_url($pid);
          if( !$relPostThumb ){
            $relPostThumb = 'https://www.workstatus.io/blog/wp-content/uploads/2023/02/Challenges-vs.-Solutions_-Boost-Your-Agencys-ROI-min.jpg';
          }
          ?>
          <article class="default index-6 grid-33 tablet-grid-50">
          <header>
          <div class="post-format-image post-format-wrapper ">
          <div class="featured-image">
          <a href="<?php echo esc_url(get_permalink($pid)) ?>" class="thumb hover-effect">
          <span class="fullimage cover" role="img" style="background-image: url(<?php echo $relPostThumb; ?>);"></span>
          </a>
          <div class="tags absolute"></div>
          </div>
          </div>
          <h3 class="title gradient-effect">
            <a href="<?php echo esc_url(get_permalink($pid)) ?>"><?php echo get_the_title($pid) ?></a>
          </h3>
          </header>
          </article>
          <?php endwhile; wp_reset_postdata(); ?>
          </div>
          <?php } 
          } ?>
        </div>       
      </div>
    </div>
  </div>
</div>
</main>
<?php get_footer(); ?>
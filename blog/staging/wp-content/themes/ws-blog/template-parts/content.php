<?php 
$views = 0;
if( function_exists('get_fields') ){
    $fields = get_fields();
    //$views = get_field('views_counter');
    if( !empty( $fields['optimized_image'] ) ){
        $thumb_url = $fields['optimized_image']['url'];
    }
}
?>
<article class="grid-3">
 
    <div class="blog-thumb">
      <a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1" data-wpel-link="internal" 
        rel="follow">
        </a>
        <?php 
        $pinThumb = get_field('post-cthumb');
        if( isset( $pinThumb['url'] ) && !empty($pinThumb['url']) ){
            echo '<picture>
            <img loading="lazy" class="lazy" data-src="'.$pinThumb['url'].'" alt="'.get_the_title().'">
            </picture>';
        }else{
          if( has_post_thumbnail() ){
            $postThumbnail = get_the_post_thumbnail_url( get_the_ID(), 'webp_thumb' );
            echo '<picture>
            <img loading="lazy" class="lazy" data-src="'.$postThumbnail.'" alt="'.get_the_title().'">
            </picture>';
          }  
        }
        
        ?>
        <?php //the_post_thumbnail('webp_thumb'); ?>          
        </a>
    </div>

    <div class="blog-outer">

    <div class="blog-content">
      <div class="author-mid-row">
      
      <!--
      <span class="auth-date"><?php the_time( get_option('date_format') ); ?></span>
      <span class="view-comment">
      <a href="#"><i class="postview"></i> <?php echo absint( $views ); ?></a>    
      </span>-->
      </div>
      <?php if( is_archive() ): ?>
      <h2 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <?php else: ?>
      <h1 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
      <?php endif; ?>  

      <div class="post-excerpt">
      <?php 
      $exprt = wp_trim_words(get_the_excerpt(), 20, '...');
      $exprt = str_replace("Introduction", " ", $exprt);
      echo '<p>'.ltrim($exprt).'</p>';
      ?>
      <?php echo getMcAutor(get_the_ID()); ?>
      <a href="<?php the_permalink(); ?>" class="rdmore">Read More</a>
      </div>

      </div>

      <div class="category-row"><?php the_category(' '); ?></div>
    </div>
</article>
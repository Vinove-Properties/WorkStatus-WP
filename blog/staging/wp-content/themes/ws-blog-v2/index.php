<?php 
get_header();
$popularPosts   = get_field('pop-posts', 'option');
$popularPosts   = explode(',', $popularPosts);
$catBlockOne    = get_field('row-c1', 'option');
$catBlockTwo    = get_field('row-c2', 'option');
$catBlockThree  = get_field('row-c2', 'option'); 
?>
<section class="blog-main-page">
  <div class="container">
    <div class="mobile-active"><span class="blogtog" href="javascript:void(0)">Blog Home</span></div>
    <div class="blog-cat hidden" id="blog-cat">
      <ul>
        <li class="active mobhide"><a href="#">Blog Home</a></li>
        <li><a href="#">Guide</a></li>
        <li><a href="#">Product Updates</a></li>
        <li><a href="#">Productivity Management</a></li>
        <li><a href="#">Project Management</a></li>
        <li><a href="#">Reporting & Analytics</a></li>
        <li><a href="#">Time & Attendance</a></li>
      </ul>
    </div>
    <div class="top-content">
      <h1>Secrets to Streamlined Workflows & <br>Empowered Teams</h1>
      <p>Ideas, best practices, innovation insights from thought leadership.</p>
    </div>
    <div class="search-blogs">
      <div class="ser-left"><span class="ftin">Featured In</span> <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/dev-images/featured-logos.svg" alt="workstatus">
      </div>
      <div class="searchBox">
        <form action="" method="get" class="search-form"> 
          <input type="text" name="s" class="search-field" placeholder="Search the blog..." id="search-form" value="" />
          <button type="submit" class="submit" aria-label="Submit">Search</button>
        </form>
      </div>
    </div>
    <?php if( !is_paged() ) : 
    if( $popularPosts ) :
    $popQuery = new WP_Query([
    'post_type'       => 'post',
    'post__in'        => $popularPosts,
    'orderby'         => 'post__in',
    'posts_per_page'  => 5,
    'ignore_sticky_posts' => 1
    ]);
    if( $popQuery->have_posts() ){
    echo '<div class="pc-blog-list popular-post">';
    echo '<div class="main-intro"><h2>Popular Posts</h2></div>';
    echo '<div class="blog-posts-list two-columns">';
    $st = 0;
    while( $popQuery->have_posts()){ 
      $popQuery->the_post();
      $st++;
      $cat = getPostPrimeCategory( get_the_ID() );
      $stkThumb   = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ), 'single-post-thumbnail' );
      if( $st === 1 ){
        echo '<div class="blog-post-col big-size postid-'.get_the_ID().'">
        <div class="blog-image">
          <a href="'.get_permalink().'"><img width="1024" height="462" src="'.$stkThumb.'" alt="workstatus" loading="lazy"></a>
        </div>
        <div class="blog-content">
          <span class="category">'.$cat.'</span>
          <div class="title two-line"><a href="'.get_permalink().'">'.get_the_title().'</a></div>
          <div class="content">'.get_field('pp-cont', 'option').'</div>
          '.getMcAutor(get_the_ID()).'
        </div>
        </div>';
      echo '<div class="blog-post-col small-size">';  
      }else{
        echo '<div class="blog-posts-list postid-'.get_the_ID().'">
          <div class="blog-post-col">
            <div class="blog-image">
              <a href="">
              <img width="1024" height="462" src="'.$stkThumb.'" alt="workstatus" loading="lazy"></a>              
            </div>
            <div class="blog-content">
              <span class="category">'.$cat.'</span>
              <div class="title three-line"><a href="'.get_permalink().'">'.get_the_title().'</a></div>
              '.getMcAutor(get_the_ID()).'
            </div>
          </div>
        </div>';
      }
      if( $st === 5 ) break;
    }
    echo '</div>';
    wp_reset_postdata();
    echo '</div>';
    echo '</div>';  
    }  
    endif;
    ?>
    <div class="cta-flex">
      <div class="custom-left">
        <picture>
          <img loading="lazy"  src="<?php echo get_template_directory_uri(); ?>/dev-images/cta-image.svg" alt="workstatus" width="214" height="176">
        </picture>
        <div class="cus-cont">
          <div class="cushed">Elevate Projects with Top Management Tools</div>
          <div class="btn-container">
            <a target="_blank" class="white-btn blue pxl-ext" href="https://www.workstatus.io/?free-trial">Start Free Trial</a>
          </div>
        </div>
      </div>
      <div class="detail-subsbox subs-box">
        <h3>Subscribe to our blog</h3>
        <p>Be a part of a thriving community of 10000+ tech enthusiasts and learners.</p>
        <?php echo do_shortcode('[email-subscribers-form id="1"]'); ?>
      </div>
    </div>
    <?php 
    $videoBlock  = get_field('px-videos', 'option');
    if( isset( $videoBlock['required'] ) && ($videoBlock['required'] == "yes") ) : ?>
    <div class="pc-blog-list videos-post">
      <div class="main-intro">
        <h2><?php echo $videoBlock['title']; ?></h2>
        <a href="https://www.youtube.com/@Valuecoders" class="view-all-link" target="_blank" rel="noopener">View All</a>
      </div>
      <div class="blog-posts-list three-columns">
        <?php 
        if( $videoBlock['videos'] ){
          foreach( $videoBlock['videos'] as $video ){
          $viidThumb = ( $video['thumb'] ) ? $video['thumb']['url'] : 
          get_bloginfo('template_url').'/dev-images/default-image.jpg';
          echo '<div class="blog-post-col medium-size">
          <div class="blog-image">
            <span class="play-btn" onclick="_playYTmedia(\''.$video['link'].'\')">
            <img alt="play btn" loading="lazy" src="'.get_bloginfo('template_url').'/assets/images/play-btn.png">
            </span>
            <picture>
            <img class="video-thumb" src="'.$viidThumb.'" alt="workstatus" loading="lazy">
            </picture>
          </div>
          <div class="blog-content">
            <div class="title two-line"><a href="javascript:void(0);" onclick="_playYTmedia(\''.$video['link'].'\')">'.$video['title'].'</a></div>
          </div>
          </div>';
          }
        }
        ?>        
      </div>
    </div>
    <div class="blogvideo-popup">
      <div id="gen-vpopup" class="popup-wrapper" style="display:none;">
        <div class="popWrap">
          <div class="popup-content">
            <span class="closeicon" onclick="closeGenVideo('gen-vpopup', false)">Close</span>
            <iframe id="gen-video" class="videoIframe js-videoIframe" allowfullscreen="" src="#" allow='autoplay'></iframe>
          </div>
        </div>
      </div>
    </div>
    <?php endif; ?>    
    <?php endif; //Ignore For Paged ?>

    <div class="pc-blog-list latest">
      <div class="main-intro"><h2>Latest</h2></div>
      <div class="blog-posts-list two-columns list-view">      
      <?php
      if( have_posts() ) : 
      while ( have_posts() ) : the_post(); 
      $post_thumb   = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ), 'single-post-thumbnail' );  
      ?>
      <div class="blog-post-col medium-size">
      <div class="blog-image"><?php pxlCardThumbnail(); ?></div>
      <div class="blog-content">
        <span class="category"><?php echo getPostPrimeCategory( get_the_ID() ); ?></span>
        <div class="title two-line">
          <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </div>
        <?php echo getMcAutor( get_the_ID() ); ?>
      </div>
      </div>
      <?php 
      endwhile;      
      global $wp_query;
      $pagination_args = array(
        'current' => max(1, get_query_var('paged')),
        'total' => $wp_query->max_num_pages,
        'prev_text' => __('Previous', 'pxlblog'),
        'next_text' => __('Next', 'pxlblog')      
      );
      echo '<div class="pagination-section">'.paginate_links( $pagination_args ).'</div>';
      else :
      //get_template_part( 'template-parts/content', 'none' );
      endif;
      ?>      
      </div>
    </div>

<?php if( !is_paged() ) : ?>
<?php 
if( 
  isset($catBlockOne['required']) && 
  ($catBlockOne['required'] == "yes") && 
  is_array( $catBlockOne['cat-tab'] ) && 
  (count($catBlockOne['cat-tab']) > 0)  
) :
$getActiveCat = $catBlockOne['cat-tab'][0]['link'];
?>
<div class="pc-blog-list" id="cat-sec-1">
<div class="main-intro">
<h2><?php echo $catBlockOne['title']; ?></h2>
<a href="<?php echo $getActiveCat; ?>" class="view-all-link" target="_blank" rel="noopener">View All</a>
</div>
  <div class="devs-category">
    <?php   
    echo '<ul class="tabing_panel">';
    $tb = 0;
    foreach( $catBlockOne['cat-tab'] as $tab ){
      $tb++;
      $isActive = ( $tb === 1 ) ? 'active' : ''; 
      echo '<li onclick="switchCat(\'cat-sec-1\', \'term_ID-'.$tab['tag-posts']->term_id.'\', this);" 
      data-link="'.$tab['link'].'" class="'.$isActive.'">'.$tab['tag-posts']->name.'</li>';
    }
    echo '</ul>';    
    ?>
  </div> 
  <?php 
  $tc = 0;  
  foreach( $catBlockOne['cat-tab'] as $catBlock ){
    if( $catBlock['tag-posts'] ){ $tc++;
    $isActive = ( $tc === 1 ) ? 'active' : '';   
    $catID      = $catBlock['tag-posts']->term_id;
    $postBlock  = pxlGetTopThreePosts( $catID, 'tag' );
    ?>     
    <div class="blog-posts-list two-columns developsc tabc-elm <?php echo $isActive; ?>" id="term_ID-<?php echo $catID; ?>">
      <div class="blog-post-col big-size">
      <?php
      if( isset($postBlock[0]) ){
        echo bigBlockPost( $postBlock[0] );
      }
      ?>
      </div>
      <div class="blog-post-col medium-size">
      <div class="develop-row wid-75" id="pc1-sp">
        <?php 
        if( isset($postBlock[1] ) ){
          echo smallBlockPost($postBlock[1]);
        }

        if( isset( $postBlock[2] ) ){
          echo smallBlockPost($postBlock[2]);
        }
        ?>
      </div>
      
      <div class="develop-row wid-35 bg-yellow">
        <div class="devs-col">
          <div class="blog-image">
            <?php 
            if( $catBlockOne['e-image'] ){
            echo '<picture>
            <img src="'.$catBlockOne['e-image']['url'].'" 
            height="'.$catBlockOne['e-image']['height'].'" 
            width="'.$catBlockOne['e-image']['width'].'" 
            alt="workstatus" loading="lazy">
            </picture>';  
            }
            ?>
          </div>
          <div class="blog-content">
            <div class="title three-line"><?php echo $catBlockOne['e-title']; ?></div>
            <p><?php echo $catBlockOne['e-text']; ?></p>
            <div class="btn-container">
              <a class="white-btn blue pxl-ext" 
              onclick="geteBookpopup('<?php echo $catBlockOne['e-title']; ?>', '<?php echo $catBlockOne['e-link']; ?>')" href="javascript:void(0);">Download Now</a>
            </div>
          </div>
        </div>
      </div>

      </div>
    </div>
    <?php 
    }
  }
  ?>
</div>
<?php endif; ?>

<?php 
if( 
  isset($catBlockTwo['required']) && 
  ($catBlockTwo['required'] == "yes") && 
  is_array( $catBlockTwo['cat-tab'] ) && 
  (count($catBlockTwo['cat-tab']) > 0)  
) :
$getActiveCat = $catBlockTwo['cat-tab'][0]['link'];
?>
<div class="pc-blog-list" id="cat-sec-2">
<div class="main-intro">
<h2><?php echo $catBlockTwo['title']; ?></h2>
<a href="<?php echo $getActiveCat; ?>" class="view-all-link" target="_blank" rel="noopener">View All</a>
</div>
  <div class="devs-category">
    <?php   
    echo '<ul class="tabing_panel">';
    $tb = 0;
    foreach( $catBlockTwo['cat-tab'] as $tab ){
      $tb++;
      $isActive = ( $tb === 1 ) ? 'active' : ''; 
      echo '<li onclick="switchCat(\'cat-sec-2\', \'term_ID-'.$tab['tag-posts']->term_id.'\', this);" 
      data-link="'.$tab['link'].'" class="'.$isActive.'">'.$tab['tag-posts']->name.'</li>';
    }
    echo '</ul>';    
    ?>
  </div> 
  <?php 
  $tc = 0;  
  foreach( $catBlockTwo['cat-tab'] as $catBlock ){
    if( $catBlock['tag-posts'] ){ $tc++;
    $isActive = ( $tc === 1 ) ? 'active' : '';   
    $catID      = $catBlock['tag-posts']->term_id;
    $postBlock  = pxlGetTopThreePosts( $catID, 'tag' );
    ?>     
    <div class="blog-posts-list two-columns developsc tabc-elm <?php echo $isActive; ?>" id="term_ID-<?php echo $catID; ?>">
      <div class="blog-post-col big-size">
      <?php
      if( isset($postBlock[0]) ){
        echo bigBlockPost( $postBlock[0] );
      }
      ?>
      </div>
      <div class="blog-post-col medium-size">
      <div class="develop-row wid-75" id="pc2-sp">
        <?php 
        if( isset($postBlock[1] ) ){
          echo smallBlockPost($postBlock[1]);
        }

        if( isset( $postBlock[2] ) ){
          echo smallBlockPost($postBlock[2]);
        }
        ?>
      </div>
      <div class="develop-row wid-35 bg-blue">
        <div class="devs-col">
          <div class="blog-image">
            <?php 
            if( $catBlockTwo['e-image'] ){
            echo '<picture>
            <img src="'.$catBlockTwo['e-image']['url'].'" 
            height="'.$catBlockTwo['e-image']['height'].'" 
            width="'.$catBlockTwo['e-image']['width'].'" 
            alt="workstatus" loading="lazy">
            </picture>';  
            }
            ?>
          </div>
          <div class="blog-content">
            <div class="title three-line"><?php echo $catBlockTwo['e-title']; ?></div>
            <p><?php echo $catBlockTwo['e-text']; ?></p>
            <div class="btn-container">
              <a class="white-btn blue pxl-ext" 
              onclick="geteBookpopup('<?php echo $catBlockTwo['e-title']; ?>', '<?php echo $catBlockTwo['e-link']; ?>')" 
              href="javascript:void(0);">Download Now</a>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
    <?php 
    }
  }
  ?>
</div>
<?php 
endif; 

if( 
  isset($catBlockThree['required']) && 
  ($catBlockThree['required'] == "yes") && 
  is_array( $catBlockThree['cat-tab'] ) && 
  (count($catBlockThree['cat-tab']) > 0)  
) :
$getActiveCat = $catBlockThree['cat-tab'][0]['link'];
?>
<div class="pc-blog-list" id="cat-sec-3">
<div class="main-intro">
<h2><?php echo $catBlockThree['title']; ?></h2>
<a href="<?php echo $getActiveCat; ?>" class="view-all-link" target="_blank" rel="noopener">View All</a>
</div>
  <div class="devs-category">
    <?php   
    echo '<ul class="tabing_panel">';
    $tb = 0;
    foreach( $catBlockThree['cat-tab'] as $tab ){
      $tb++;
      $isActive = ( $tb === 1 ) ? 'active' : ''; 
      echo '<li onclick="switchCat(\'cat-sec-3\', \'term_ID-'.$tab['tag-posts']->term_id.'\', this);" 
      data-link="'.$tab['link'].'" class="'.$isActive.'">'.$tab['tag-posts']->name.'</li>';
    }
    echo '</ul>';    
    ?>
  </div> 
  <?php 
  $tc = 0;  
  foreach( $catBlockThree['cat-tab'] as $catBlock ){
    if( $catBlock['tag-posts'] ){ $tc++;
    $isActive = ( $tc === 1 ) ? 'active' : '';   
    $catID      = $catBlock['tag-posts']->term_id;
    $postBlock  = pxlGetTopThreePosts( $catID, 'tag' );
    ?>     
    <div class="blog-posts-list two-columns developsc tabc-elm <?php echo $isActive; ?>" id="term_ID-<?php echo $catID; ?>">
      <div class="blog-post-col big-size">
      <?php
      if( isset($postBlock[0]) ){
        echo bigBlockPost( $postBlock[0] );
      }
      ?>
      </div>
      <div class="blog-post-col medium-size">
      <div class="develop-row wid-75" id="pc3-sp">
        <?php 
        if( isset($postBlock[1] ) ){
          echo smallBlockPost($postBlock[1]);
        }

        if( isset( $postBlock[2] ) ){
          echo smallBlockPost($postBlock[2]);
        }
        ?>
      </div>
      <div class="develop-row wid-35 bg-blue">
        <div class="devs-col">
          <div class="blog-image">
            <?php 
            if( $catBlockThree['e-image'] ){
            echo '<picture>
            <img src="'.$catBlockThree['e-image']['url'].'" height="'.$catBlockThree['e-image']['height'].'"  width="'.$catBlockThree['e-image']['width'].'" alt="workstatus" loading="lazy">
            </picture>';  
            }
            ?>
          </div>
          <div class="blog-content">
            <div class="title three-line"><?php echo $catBlockThree['e-title']; ?></div>
            <p><?php echo $catBlockThree['e-text']; ?></p>
            <div class="btn-container">
              <a class="white-btn blue pxl-ext" 
              onclick="geteBookpopup('<?php echo $catBlockThree['e-title']; ?>', '<?php echo $catBlockThree['e-link']; ?>')" 
              href="javascript:void(0);">Download Now</a>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
    <?php 
    }
  }
  ?>
</div>
<?php 
endif;

endif; // Ignore For Paged ?>
<div class="cta-flex subscribe-footer">
  <div class="detail-subsbox subs-box">
    <div class="subs-head">
      <h3>Subscribe to our blog</h3>
      <p>Be a part of a thriving community of 10000+ tech enthusiasts and learners.</p>
    </div>
    <?php echo do_shortcode('[email-subscribers-form id="1"]'); ?>
  </div>
</div>

</div>
</section>
<section class="start-journey bg-blue padding-t-100 padding-b-100 post-animation">
<div class="container">
<div class="ws-flex">
  <div class="jour-col">
    <div class="top-section">
      <h6><span class="bg-purple">DON’T WAIT</span></h6>
      <h2>Start Your <span><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/head-logo.svg" alt="Workstatus" width="263" height="15"></span>
        Journey Today!
      </h2>
      <p>Get detailed and clean activity reports of your team.</p>
    </div>
    <div class="actionBtn">
      <div><a href="javascript:void(0)" onclick="call_demows();" class="primary_btn1">Book A Demo</a>
        <small>Get queries answered from experts</small>
      </div>
      <div><a data-href="https://app.workstatus.io/auth/register/?pid=42&amp;type=monthly" href="javascript:void(0);" class="primary_btn2 formbtn" onclick="return get_ws_signupform(this);">Start Free Trial</a>
        <small>No credit card required</small>
      </div>
    </div>
  </div>
</div>
</div>
</section>
<?php get_footer(); ?>
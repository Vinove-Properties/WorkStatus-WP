<?php get_header(); ?>
<script type="text/javascript">
function ws_calculateHourly(e){
  const hourly  = document.getElementById("ws-hourly");  
  //console.log(e.value);
}  

function ws_calculator_cb(value, type){
  const wage    = document.getElementById("ws-wages");
  const monthly = document.getElementById("ws-monthly");
  const weekly  = document.getElementById("ws-weekly");
  const daily   = document.getElementById("ws-daily");
  const hourly  = document.getElementById("ws-hourly");
  if( type == "anual" ){
    let monthlyVal  = ( value / 12 );    
    let weeklyVal   = ( value / 52 );
    let dailyVal    = ( weeklyVal / 5 );
    let hourlyVal   = ( dailyVal / 8 );

    monthly.value   = parseFloat( monthlyVal ).toFixed(2);
    weekly.value    = parseFloat( weeklyVal ).toFixed(2);
    daily.value     = parseFloat( dailyVal ).toFixed(2);
    hourly.value    = parseFloat( hourlyVal ).toFixed(2);    
  }

  if( type == "monthly" ){
    let yearlyVal   = ( value * 12 );
    
    let weeklyVal   = ( yearlyVal / 52 );
    let dailyVal    = ( weeklyVal / 5 );
    let hourlyVal   = ( dailyVal / 8 );
    wage.value      = yearlyVal;
    weekly.value    = parseFloat( weeklyVal ).toFixed(2);
    daily.value     = parseFloat( dailyVal ).toFixed(2);
    hourly.value    = parseFloat( hourlyVal ).toFixed(2);    
  }

  if( type == "weekly" ){
    let yearlyVal   = ( value * 52 );
    let monthlyVal  = ( yearlyVal / 12 );
    let dailyVal    = ( value / 5 );
    let hourlyVal   = ( dailyVal / 8 );

    monthly.value   = parseFloat( monthlyVal ).toFixed(2);
    wage.value      = yearlyVal;
    daily.value     = parseFloat( dailyVal ).toFixed(2);
    hourly.value    = parseFloat( hourlyVal ).toFixed(2);    
  }

  if( type == "daily" ){
    let yearlyVal   = ( (value * 5) * 52 );
    let monthlyVal  = ( yearlyVal / 12 );
    let weeklyVal   = ( yearlyVal / 52 );
    let hourlyVal   = ( value / 8 );

    wage.value      = yearlyVal;
    monthly.value   = parseFloat( monthlyVal ).toFixed(2);    
    weekly.value    = parseFloat( weeklyVal ).toFixed(2);
    hourly.value    = parseFloat( hourlyVal ).toFixed(2);    
  }

  if( type == "hourly" ){
    let yearlyVal   = ( value * 40 * 52 );
    let monthlyVal  = ( yearlyVal / 12 );
    let weeklyVal   = ( yearlyVal / 52 );
    let dailyVal    = ( weeklyVal / 5 );

    wage.value      = yearlyVal;
    monthly.value   = parseFloat( monthlyVal ).toFixed(2);    
    weekly.value    = parseFloat( weeklyVal ).toFixed(2);
    daily.value     = parseFloat( dailyVal ).toFixed(2);    
  }

}

function ws_calculate_wages(e, type, ws_wage_calc){
  ws_wage_calc( e.value, type );  
}  
</script>
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
    <form id="wage-calculator" onsubmit="return false;">
      <fieldset class="calculator">
        <label class="salary">Annual salary</label>
        <input id="ws-wages" type="number" value="0" onkeyup="ws_calculate_wages(this, 'anual', ws_calculator_cb);" class="numberfiled">
        <span class="footnote">$</span>
      </fieldset>

      <fieldset class="calculator">
        <label class="salary">Monthly wage</label>
        <input id="ws-monthly" type="number" value="0" onkeyup="ws_calculate_wages(this, 'monthly', ws_calculator_cb);" class="numberfiled">
        <span class="footnote">$</span>
      </fieldset>

      <fieldset class="calculator">
        <label class="salary">Weekly wage</label>
        <input id="ws-weekly" type="number" value="0" onkeyup="ws_calculate_wages(this, 'weekly', ws_calculator_cb);" class="numberfiled">
        <span class="footnote">$</span>
      </fieldset>

      <fieldset class="calculator">
        <label class="salary">Daily wage</label>
        <input id="ws-daily" type="number" value="0" onkeyup="ws_calculate_wages(this, 'daily', ws_calculator_cb);" class="numberfiled">
        <span class="footnote">$</span>
      </fieldset>

      <fieldset class="calculator">
        <label class="salary">Hourly wage</label>
        <input id="ws-hourly" type="number" value="0" onkeyup="ws_calculate_wages(this, 'hourly', ws_calculator_cb);" class="numberfiled">
        <span class="footnote">$</span>
      </fieldset>

      <fieldset class="calculator">
        <label class="salary">Hours per week</label>
        <input type="number" value="40" onkeyup="ws_calculateHourly(this);" class="numberfiled">
        <span class="footnote">H</span>
      </fieldset>

        <fieldset class="calculator">
        <button type="submit" onclick="document.getElementById('wage-calculator').reset();" class="btn" name="submit">Clear</button>
        </fieldset>
      </form>  
      </div>
    </div>
  </div>
</section>
<?php }else{ ?>
<div class="banner-option">
  <div class="container">
  <div class="entry-header">
    <div class="cat">
      <a href="javascript:void(0);" rel="category tag"><?php echo get_field('rpost-type'); ?></a>
    </div>
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
            $relPostThumb = 'https://www.workstatus.io/betablog/wp-content/uploads/2023/02/Challenges-vs.-Solutions_-Boost-Your-Agencys-ROI-min.jpg';
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
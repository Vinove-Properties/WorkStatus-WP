<?php
/* 
Template Name: Roadmap Page Template
Author : Nitin Baluni
*/
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://superadmin.workstatus.io/api/v1/get-project-roadmap?page=1");
//curl_setopt($ch, CURLOPT_URL, "https://superadmin.staging.workstatus.io/api/v1/get-project-roadmap?page=1");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$server_output  = curl_exec($ch);
$data           = json_decode( $server_output );
curl_close($ch);

$inProgress = $abtLaunch = $recLaunch = [];

if( $data->data->data ){
    //echo '<pre>'; print_r( $data->data->data );
    $planData   = $data->data->data;
    $inProgress = $abtLaunch = $recLaunch = [];
    foreach( $planData as $row  ){
      if( isset( $row->inprogress ) ){
      $inProgress[] = $row->inprogress;
      }

      if( isset( $row->about_to_launch )  ){
      $abtLaunch[] = $row->about_to_launch;
      }

      if( isset( $row->recently_launched ) ){
      $recLaunch[] = $row->recently_launched;
      }
    }
    // echo '<pre>';
    //   print_r($inProgress);
    //   echo '</pre>';
    // die;
    /*Previos API*/
    // $inProgress = ( isset($planData[0]) ) ? $planData[0] : [];
    // $abtLaunch  = ( isset($planData[1]) ) ? $planData[1] : [];
    // $recLaunch  = ( isset($planData[2]) ) ? $planData[2] : [];
}
get_header();
global $ws_ctas, $RegLink, $LogLink, $post;
?>
<main class="site__content">
  <section class="hero-banner">
    <div class="bannerwrap">
      <div class="container">
        <div class="inner-wrap">
          <h1>Project Roadmap</h1>
          <p>We're always improving our services so you can manage your team faster and easier than ever. Take a look at our services. </p>
        </div>
      </div>
    </div>
  </section>
  <section class="roadmap">
    <div class="container">
      <div class="road-top">
        <div class="select">
          <div class="selectBtn" data-type="All Platform">All Platform</div>
          <div class="selectDropdown">
            <div class="option" data-type="sel-all">All Platform</div>
            <div class="option" data-type="sel-web">Web</div>
            <div class="option" data-type="sel-desktop">Desktop</div>
            <div class="option" data-type="sel-mobile">Mobile</div>
          </div>
        </div>
        <div class="gotochange">
          <a class="is-arrow" href="<?php echo site_url('/change-log'); ?>">Go to change log page</a>
        </div>
      </div>
      <div class="road-row" id="elm-maps">
        <div class="road-box">
          <div class="road-col">
            <h3>
              <picture>
                <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/images/road-01.svg" alt="Testimonials" width="24" height="24">
              </picture>In Progress
            </h3>
            <div id="elm-inprogress">
            <?php         
            if( $inProgress ){
              foreach( $inProgress as $row ){
              echo getRmBlock($row->feature_title,$row->feature_description, $row->platform );              
              }
            } 
            ?>
            </div>
          </div>
        </div>
        <div class="road-box">
          <div class="road-col">
            <h3>
              <picture>
                <img loading="lazy" src="<?php bloginfo('template_url'); ?>//assests/images/road-02.svg" alt="Testimonials" width="24" height="24">
              </picture>About to launch
            </h3>
            <div id="elm-aboutlaunch">
            <?php 
            if( $abtLaunch ){
              foreach( $abtLaunch as $row ){
              echo getRmBlock($row->feature_title,$row->feature_description, $row->platform );
              }
            } 
            ?>
            </div>
          </div>
        </div>
        <div class="road-box">
          <div class="road-col">
            <h3>
              <picture>
                <img loading="lazy" src="<?php bloginfo('template_url'); ?>//assests/images/road-03.svg" alt="Testimonials" width="24" height="24">
              </picture>Recently Launched
            </h3>
            <div id="elm-recentlaunch">
            <?php 
            if( $recLaunch ){
              foreach( $recLaunch as $row ){
              echo getRmBlock($row->feature_title,$row->feature_description, $row->platform ); 
              }
            } 
            ?>
            </div>
          </div>
        </div>
      </div>
      <div class="load-more"><a href="javascript:void(0);" data-counter="2" onclick="loadMoreRM(this);">Load More</a></div>
  </section>
</main>
<?php //require_once get_template_directory() . '/common/blog.php'; ?>
<?php //require_once get_template_directory() . '/common/workstatus-journey.php'; ?>
<?php get_footer(); ?>
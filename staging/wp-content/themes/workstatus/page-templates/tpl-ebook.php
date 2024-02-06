<?php
/* 
Template Name: eBook Template 
Author : Nitin Baluni.
*/
get_header();
global $ws_ctas, $RegLink, $LogLink;
?>
<main class="site__content">

<section class="hero-banner inner-banner-bg sd-banner post-animation">
        <div class="bannerwrap">
          <div class="container">
            <div class="inner-wrap">
            <?php 
    while(have_posts()) : the_post(); 
      the_content();
    endwhile;
    ?>
            </div>
          </div>
        </div>
      </section>
<section class="overview">
<div class="container">
  <div class="dis-flex">
    <div class="colleft">
      <?php the_field('overview-text'); ?>
    </div>
    <div class="colRit" id="ebook-pdf" data-edoc="<?php the_field('epdf'); ?>">
        <?php require_once get_template_directory().'/common/ebook-form.php'; ?>
    </div>
  </div>
</section>

<?php 
$plateformSec = get_field('bc-section');
if( isset( $plateformSec['enable'] ) && ($plateformSec['enable'] == "yes") ) :
?>
<section class="top-plateform p50 post-animation ebook">
  <div class="container">
    <div class="flex_row">
      <div class="column-left">
        <?php 
        if( $plateformSec['image'] ){
          echo pxlGetPtag( $plateformSec['image'] );
        }
        ?>
      </div>
      <div class="column-right">
        <?php echo $plateformSec['content']; ?>        
      </div>
    </div>
  </div>
</section>
<?php endif; ?>
<section class="wsMobile whitetxt">
<?php require_once get_template_directory().'/common/workstatus-device.php';?>
</section>
<?php require_once get_template_directory().'/common/workstatus-journey.php';?>
</main>
<?php get_footer(); ?>
<?php
/* 
Template Name: eBook Template 
Author : Nitin Baluni.
*/
get_header();
global $ws_ctas, $RegLink, $LogLink;
?>
<main class="site__content">
<section class="overview">
<div class="container">
  <div class="top-section">
    <?php 
    while(have_posts()) : the_post(); 
      the_content();
    endwhile;
    ?>
  </div>
  <div class="dis-flex">
    <div class="colleft">
      <?php the_field('overview-text'); ?>
    </div>
    <div class="colRit" id="ebook-pdf" data-edoc="<?php the_field('epdf'); ?>">
        <?php require_once get_template_directory().'/common/ebook-form.php'; ?>
    </div>
  </div>
</section>
<section class="wsMobile whitetxt">
<?php require_once get_template_directory().'/common/workstatus-device.php';?>
</section>
<?php require_once get_template_directory().'/common/workstatus-journey.php';?>
</main>
<?php get_footer(); ?>
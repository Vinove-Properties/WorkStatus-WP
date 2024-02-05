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

<section class="top-plateform p50 post-animation ebook">
  <div class="container">
    <div class="flex_row">
      <div class="column-left">
        <picture>
          <source type="image/webp" srcset="<?php bloginfo('template_url'); ?>/assests/images/ebook.png">
          <source type="image/png" srcset="<?php bloginfo('template_url'); ?>/assests/images/ebook.png">
          <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/images/ebook.png"
            alt="Ebook" width="602" height="457">
        </picture>
      </div>
      <div class="column-right">
        <h2>Lorem ipusm sit</h2>
        <ul>
          <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore </li>
          <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore </li>
          <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore </li>
          <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore </li>
        </ul>
      </div>
    </div>
  </div>
</section>
<section class="wsMobile whitetxt">
<?php require_once get_template_directory().'/common/workstatus-device.php';?>
</section>
<?php require_once get_template_directory().'/common/workstatus-journey.php';?>
</main>
<?php get_footer(); ?>
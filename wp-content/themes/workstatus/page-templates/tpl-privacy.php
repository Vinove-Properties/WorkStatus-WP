<?php
/* 
Template Name: Privacy Policy Template 
Author : Nitin Baluni
*/
get_header();
global $ws_ctas, $RegLink, $LogLink, $post;
//print_r($post); die;
?>
<main class="site__content">
        <section class="hero-banner">
          <div class="container">
            <div class="inner-wrap">
              <h1><?php the_title(); ?></h1>
            </div>
          </div>
        </section>
        <section class="legal-section">
          <div class="container">
            <div class="legal_row">
              <div class="tab">
                <h2>Legal Documents</h2>
                <ul>
                  <li class="tablinks <?php echo ( $post->post_name == "terms-of-service" ) ? 'active' : ''; ?>">
                  <a href="<?php echo site_url('/terms-of-service'); ?>">Terms of Service</a>
                  </li>
                  <li class="tablinks <?php echo ( $post->post_name == "privacy-policy" ) ? 'active' : ''; ?>">
                  <a href="<?php echo site_url('/privacy-policy'); ?>">Privacy Policy</a>
                  </li>
                  <li class="tablinks <?php echo ( $post->post_name == "gdpr" ) ? 'active' : ''; ?>">
                  <a href="<?php echo site_url('/gdpr'); ?>">GDPR Compliance</a>
                  </li>
                  <li class="tablinks <?php echo ( $post->post_name == "data-processing-agreement" ) ? 'active' : ''; ?>">
                  <a href="<?php echo site_url('/data-processing-agreement'); ?>">Data Processing Agreement</a>
                  </li>
                  <li class="tablinks <?php echo ( $post->post_name == "privacy-shield-compliance" ) ? 'active' : ''; ?>">
                  <a href="<?php echo site_url('/privacy-shield-compliance'); ?>">Privacy Shield Compliance</a>
                  </li>
                  <li class="tablinks <?php echo ( $post->post_name == "sub-processors" ) ? 'active' : ''; ?>">
                  <a href="<?php echo site_url('/sub-processors'); ?>">Sub-processors</a>
                  </li>
                  <li class="tablinks <?php echo ( $post->post_name == "security-reliability" ) ? 'active' : ''; ?>">
                  <a href="<?php echo site_url('/security-reliability'); ?>">Security & Reliability</a>
                  </li>
                  <!--
                  <li class="tablinks <?php echo ( $post->post_name == "refund-policy" ) ? 'active' : ''; ?>">
                  <a href="<?php echo site_url('/refund-policy'); ?>">Refund Policy</a>
                  </li>
                  -->
                  <li class="tablinks <?php echo ( $post->post_name == "spam-guidelines" ) ? 'active' : ''; ?>">
                  <a href="<?php echo site_url('/spam-guidelines'); ?>">Spam Guidelines</a>
                  </li>
                </ul>
              </div>
              <div id="Privacy-Policy" class="tabcontent">
                <div class="tabcontent-header">
                  <h2><?php the_field('sub-title'); ?></h2>
                  <h6>Last updated: <?php the_field('last-updated'); ?></h6>
                </div>
                <?php while( have_posts() ) : the_post(); ?>
                <div class="tabcontent-content">
                	<?php the_content(); ?>  
                </div>
            	<?php endwhile; ?>
              </div>
            </div>
          </div>
        </section>
        <section class="wsMobile whitetxt">
          <?php require_once get_template_directory() . '/common/workstatus-device.php'; ?>
        </section>
        <?php require_once get_template_directory() . '/common/workstatus-journey-straight.php'; ?>
      </main>
<?php get_footer(); ?>
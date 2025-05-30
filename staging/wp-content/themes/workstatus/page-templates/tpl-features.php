<?php 
  /* 
  Template Name: Main Feature Page Template
  Author : Nitin Baluni
  */ 
  get_header();
  global $ws_ctas, $RegLink, $LogLink;
  ?>
<main class="site__content">
  <section class="inner-banner-bg">
    <div class="bannerwrap wslazy">
      <div class="container">
        <div class="inner-wrap">
          <?php 
            while(have_posts()) : the_post(); 
            the_content();
            endwhile;
            ?>
          <div class="actionBtn">
            <?php echo cmnBannerCta(); ?>
          </div>
          <?php 
            //if( !is_page( 2539 ) ){
            require_once get_template_directory().'/common/available-device.php';
            //require_once get_template_directory(). '/common/partners.php';     
            //}                    
            ?>
            <?php get_template_part('common/banner', 'reviews'); ?>
        </div>
      </div>
    </div>
  </section>
  <?php 
    $ws_results = get_field('ws-results');
    if( isset( $ws_results['is_enabled'] ) && ( $ws_results['is_enabled'] == "yes" ) ) :
    ?>
  <section class="data-drive">
    <div class="item">
      <div class="container">
        <div class="top-section">
          <h6><span class="bg-purple"><?php echo $ws_results['top-heading']; ?></span></h6>
          <?php echo $ws_results['content']; ?>
        </div>
        <div class="data-flow">
          <picture>
            <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/images/product-info.svg" alt="Data Flow"
              width="1355" height="765">
          </picture>
        </div>
      </div>
    </div>
  </section>
  <?php endif; ?>
  <section class="feature">
    <?php 
      $features = get_field('features');
      if($features) :
      foreach( $features as $row ){    
      ?>
    <div class="item">
      <div class="container">
        <div class="flex_row">
          <div class="column-left">
            <?php 
              if( $row['image'] ){
                  echo pxlGetPtag($row['image'], $row['top-title'], 'desk-only');
              }
              ?>                                
          </div>
          <div class="column-right">
            <div class="top-section">
              <?php 
                if( $row['top-title'] ){
                echo '<h6><span class="bg-purple">'.$row['top-title'].'</span></h6>';
                }
                echo $row['content'];
                if( $row['in-features'] ){
                    echo '<div class="ft-list">';
                    foreach( $row['in-features'] as $row ){
                        echo '<div class="ftcol"><a href='.$row['link'].'>';
                        if( $row['icon'] ){
                            echo pxlGetPtag( $row['icon'] );
                        }
                        echo $row['title'];
                        echo '</a></div>';
                    }
                    echo '</div>';
                }
                ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php } endif; ?>
  </section>
  <?php
    //get_template_part('common/ws', 'pricing');
    $planCategory = get_post_meta( $post->ID, 'ws-pcat', true );
    get_template_part('common/pricing', 'v5.0', ['plan' => $planCategory]);    
    
    $productsInt = get_field("pro-int");
    if (
        isset($productsInt["is_enabled"]) &&
        $productsInt["is_enabled"] == "yes"
    ):
    
        $cardCount = $productsInt["cards"]
            ? count($productsInt["cards"])
            : 0;
        $cardColumn = $cardCount === 4 ? "column" : "column-three";
        ?>
  <section class="<?php echo $cardCount === 4
    ? "four-columns bglight"
    : "one-solution list-icon bglight"; ?>" id="acf-pro-feat">
    <div class="container">
      <div class="top-section">
        <?php if (!empty($productsInt["top_heading"])) {
          echo '<h6><span class="bg-purple">' .
              $productsInt["top_heading"] .
              "</span></h6>";
          } ?>      
        <?php echo $productsInt["top_content"]; ?>
      </div>
      <div class="flex_row">
        <?php if ($productsInt["cards"]) {
          foreach ($productsInt["cards"] as $row) {
              echo '<div class="' . $cardColumn . '"><div class="box">';
              echo '<div class="bx-content">';
              if ($row["icon"]) {
                  echo pxlGetPtag($row["icon"]);
              }
              echo $row["content"];
              echo "</div>";
              if ($row["prod-link"]) {
                  echo '<a href="' .
                      vc_siteurl($row["prod-link"]) .
                      '" class="view-more">Explore</a>';
              }
              echo "</div></div>";
          }
          } ?>        
      </div>
    </div>
  </section>
  <?php
    endif;
    ?>
  <?php  
    $faq = get_field('faq');
    if( isset( $faq['is_enabled'] ) && ($faq['is_enabled'] == "yes") ) :
    ?>
  <section class="faqsRow wfull for-heading-center">
    <div class="container">
      <div class="top-section">
        <h6><span class="bg-purple"><?php echo $faq['heading']; ?></span></h6>
        <h2><?php echo $faq['sub_heading']; ?></h2>
      </div>
      <div class="flex_row">
        <div itemscope itemtype="https://schema.org/FAQPage">
          <div class="column">
            <?php 
              if( $faq['qna'] ){  $i = 1;
              foreach( $faq['qna'] as $row ) {
              $active = ($i <= 3) ? "open" : "";
              ?>
            <div class="faq-accordion-item-outer <?php echo $active; ?>" itemscope itemprop="mainEntity"
              itemtype="https://schema.org/Question">
              <h3 itemprop="name"><?php echo $row['question'];?></h3>
              <div class="faq-accordion-content">
                <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                  <div itemprop="text"><?php echo $row['answer'];?></div>
                </div>
              </div>
            </div>
            <?php $i++; } } ?>          
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php endif; ?>
  <?php require_once get_template_directory() .'/common/workstatus-journey.php'; ?>
</main>
<?php get_footer(); ?>
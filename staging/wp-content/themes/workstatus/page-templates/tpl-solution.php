<?php
  /* 
  Template Name: Solution
  Author : Nandani Sinha
  */
  get_header();
  global $ws_ctas, $RegLink, $LogLink;
  ?>
<main class="site__content">
  <section class="hero-banner inner-banner-bg">
    <div class="bannerwrap">
      <div class="container">
        <div class="inner-wrap">
          <?php the_content(); ?>
          <div class="actionBtn">
            <div><a href="https://calendly.com/workstatus/sales" class="primary_btn2">Talk To Sales</a>
            </div>
          </div>
          <?php get_template_part('common/banner', 'reviews'); ?>
        </div>
      </div>
    </div>
  </section>
  <?php
    $smrtMgt = get_field("smart-management");
    $industrySection = get_field("ind-section");
    $teamEmp = get_field("team-emp");
    if (
        (isset($smrtMgt["is_enabled"]) && $smrtMgt["is_enabled"] == "yes") ||
        (isset($industrySection["is_enabled"]) &&
            $industrySection["is_enabled"] == "yes") ||
        (isset($teamEmp["is_enabled"]) && $teamEmp["is_enabled"] == "yes")
    ): ?>
  <section class="step-sec">
    <div class="container">
      <?php if (
        isset($smrtMgt["is_enabled"]) &&
        $smrtMgt["is_enabled"] == "yes"
        ): ?>
      <div class="step-row flex_row" id="acf-smart-management">
        <div class="image-col">
          <?php if ($smrtMgt["image"]) {
            echo pxlGetPtag($smrtMgt["image"]);
            } else {
             ?>
          <picture>
            <source type="image/webp" srcset="<?php bloginfo(
              "template_url"
              ); ?>/assests/images/step-img01.webp">
            <source type="image/png" srcset="<?php bloginfo(
              "template_url"
              ); ?>/assests/images/step-img01.png">
            <img loading="lazy" src="<?php bloginfo(
              "template_url"
              ); ?>/assests/images/step-img01.png" alt="WS" width="549"
              height="523">
          </picture>
          <?php
            } ?>
        </div>
        <div class="content-col">
          <div class="top-section">
            <h6><span class="bg-purple"><?php echo $smrtMgt[
              "top-heading"
              ]; ?></span></h6>
            <?php echo $smrtMgt["content"]; ?>
          </div>
        </div>
      </div>
      <?php endif; ?>
      <?php if (
        isset($industrySection["is_enabled"]) &&
        $industrySection["is_enabled"] == "yes"
        ):
        $hasStepCon = $industrySection["content"];
        if (!empty($hasStepCon)): ?>
      <div class="step-row flex_row" id="acf-ind-section">
        <div class="content-col">
          <div class="top-section">
            <?php if (!empty($industrySection["top-heading"])) {
              echo '<h6><span class="bg-purple">' .
                  $industrySection["top-heading"] .
                  "</span></h6>";
              } ?>
            <?php
              echo $industrySection["content"];
              $linkText =
                  isset($industrySection["link_text"]) &&
                  !empty($industrySection["link_text"])
                      ? $industrySection["link_text"]
                      : false;
              $alink =
                  isset($industrySection["link"]) &&
                  !empty($industrySection["link"])
                      ? $industrySection["link"]
                      : false;
              if ($linkText && $alink) {
                  echo '<p><a class="read-more" href="' .
                      $alink .
                      '">' .
                      $linkText .
                      "</a></p>";
              }
              ?>          
          </div>
        </div>
        <div class="image-col">
          <?php if ($industrySection["image"]) {
            echo pxlGetPtag($industrySection["image"]);
            } ?>
        </div>
      </div>
      <?php endif;
        endif; ?>
      <?php if (
        isset($teamEmp["is_enabled"]) &&
        $teamEmp["is_enabled"] == "yes"
        ): ?>
      <div class="step-row flex_row" id="acf-team-emp">
        <div class="image-col">
          <?php if ($teamEmp["image"]) {
            echo pxlGetPtag($teamEmp["image"]);
            } else {
             ?>
          <picture>
            <source type="image/webp" srcset="<?php bloginfo(
              "template_url"
              ); ?>/assests/images/step-img02.webp">
            <source type="image/png" srcset="<?php bloginfo(
              "template_url"
              ); ?>/assests/images/step-img02.png">
            <img loading="lazy" src="<?php bloginfo(
              "template_url"
              ); ?>/assests/images/step-img02.png" alt="WS" width="550"
              height="478">
          </picture>
          <?php
            } ?>
        </div>
        <div class="content-col">
          <div class="top-section">
            <h6><span class="bg-purple"><?php echo $teamEmp[
              "top-heading"
              ]; ?></span></h6>
            <?php echo $teamEmp["content"]; ?>
          </div>
        </div>
      </div>
      <?php endif; ?>
    </div>
  </section>
  <?php endif;
    ?>
  <?php
    $plApp = get_field("platform-apps");
    if (isset($plApp["is_enabled"]) && $plApp["is_enabled"] == "yes") { ?>
  <section class="trackEm bglight" id="acf-platform-apps">
    <div class="container">
      <div class="top-section">
        <?php
          if ($plApp["heading"]) {
              echo '<h6><span class="bg-purple">' .
                  $plApp["heading"] .
                  "</span></h6>";
          }
          echo $plApp["top-content"];
          ?>
      </div>
      <div class="trackRow align-center">
        <div class="trackImg">
          <?php if ($plApp["image"]) {
            echo pxlGetPtag($plApp["image"]);
            } ?>        
        </div>
        <?php if ($plApp["cols"]):
          echo '<div class="trackContent">';
          foreach ($plApp["cols"] as $row) {
              echo '<div class="row">' . $row["text"] . "</div>";
              
          }
          
          if( $plApp['view_more'] ){
            echo '<a href="'.vc_siteurl($plApp['view_more']).'" class="view-more">View More</a>';
          }
          
          endif; ?>   
      </div>
    </div>
  </section>
  <?php }
    ?>
  <?php
    $msols = get_field("management-solution");
    if (isset($msols["is_enabled"]) && $msols["is_enabled"] == "yes") { ?>
  <section class="trackEm" id="manag-sol">
    <div class="container">
      <div class="top-section">
        <?php
          if ($msols["heading"]) {
              echo '<h6><span class="bg-purple">' .
                  $msols["heading"] .
                  "</span></h6>";
          }
          echo $msols["top-content"];
          ?>
      </div>
      <div class="trackRow align-center">
        
        <?php if ($msols["cols"]):
          echo '<div class="trackContent">';
          foreach ($msols["cols"] as $row) {
              echo '<div class="row">' . $row["text"] . "</div>";
              
          }
          
          if( $msols['view_more'] ){
            echo '<a href="'.vc_siteurl($msols['view_more']).'" class="view-more">View More</a>';
          }
          
          endif; ?>   
      </div>
      <div class="trackImg">
          <?php if ($msols["image"]) {
            echo pxlGetPtag($msols["image"]);
            } ?>        
        </div>
    </div>
  </section>
  <?php }
    ?>



  <?php
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
    : "one-solution list-icon bglight"; ?>" id="acf-pro-int">
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
              if ($row["link"]) {
                  echo '<a href="' .
                      vc_siteurl($row["link"]) .
                      '" class="view-more">Explore</a>';
              }
              echo "</div></div>";
          }
          } ?>        
      </div>
      <?php if (geoCTAcheck() === true): ?>
      <div class="mt80 btnSc">
        <?php echo wsDemoCta(); ?>
      </div>
      <?php endif; ?>
    </div>
  </section>
  <?php
    endif;
    ?>

    
  <?php
    $industrySection = get_field("ind-section");
    if (
        isset($industrySection["is_enabled"]) &&
        $industrySection["is_enabled"] == "yes"
    ):
        $in_industries = $industrySection["serv-industries"];
        $cards = $in_industries["cards"];
        if ($cards && count($cards) > 0): ?>
  <section class="one-solution list-icon p50" id="acf-serv-industries">
    <div class="container">
      <div class="top-section">
        <?php if (!empty($in_industries["top_text"])) {
          echo '<h6><span class="bg-purple">' .
              $in_industries["top_text"] .
              "</span></h6>";
          } ?>      
        <?php echo $in_industries["top-content"]; ?>
      </div>
      <?php if ($cards) {
        echo '<div class="flex_row">';
        foreach ($cards as $row) {
            echo '<div class="column-three"><div class="box">';
            echo '<div class="bx-content">';
            if ($row["icon"]) {
                echo pxlGetPtag($row["icon"]);
            }
            echo $row["text"];
            echo "</div>";
        
            if ($row["link"]) {
                echo '<a href="' .
                    $row["link"] .
                    '" class="view-more">Explore</a>';
            }
            echo "</div></div>";
        }
        echo "</div>";
        } ?>
      <div class="mt80 btnSc"><?php echo wsDemoCta(); ?></div>
    </div>
  </section>
  <?php endif;
    endif;
    ?>
  <?php
    $getStart = get_field("get-started");
    if (
        isset($getStart["is_enabled"]) &&
        $getStart["is_enabled"] == "yes"
    )://print_r($getStart);
         ?>
  <section class="timeline" id="ws-get-started">
    <div class="container">
      <div class="top-section">
        <h6><span class="bg-purple"><?php echo $getStart[
          "heading-top"
          ]; ?></span></h6>
        <h2><?php echo $getStart["heading"]; ?></h2>
        <?php
          $hContent = $getStart["heading-content"];
          if ($hContent) {
              echo "<p>" . $hContent . "</p>";
          }
          ?>
      </div>
      <div class="trackRow">
        <div class="trackImg">
          <?php if ($getStart["image"]) {
            echo pxlGetPtag($getStart["image"]);
            } ?>        
        </div>
        <div class="trackContent">
          <?php
            $steps = $getStart["steps"];
            if ($steps) {
                foreach ($steps as $step) {
                    echo '<div class="row">';
                    echo $step["content"];
                    echo "</div>";
                }
            }
            ?>        
        </div>
      </div>
    </div>
  </section>
  <?php endif;
    ?>
  <?php
  get_template_part('common/ws', 'pricing');
  $wsDevices = get_field("ws-cmn-devices");
  if ($wsDevices === "yes"): ?>
  <section class="wsMobile whitetxt">
    <?php require_once get_template_directory()."/common/workstatus-device.php"; ?>
  </section>
  <?php endif;
    ?>
  <?php
    $faq = get_field("faq");
    if (isset($faq["is_enabled"]) && $faq["is_enabled"] == "yes"): ?>
  <section class="faqsRow wfull for-heading-center">
    <div class="container">
      <div class="top-section">
        <h6><span class="bg-purple"><?php echo $faq["heading"]; ?></span></h6>
        <h2><?php echo $faq["sub_heading"]; ?></h2>
      </div>
      <div class="flex_row">
        <div itemscope itemtype="https://schema.org/FAQPage">
          <div class="column">
            <?php if ($faq["question_answer_repeater"]) {
              $i = 1;
              foreach ($faq["question_answer_repeater"] as $row) {
                  $active = $i <= 3 ? "open" : ""; ?>
            <div class="faq-accordion-item-outer <?php echo $active; ?>" itemscope itemprop="mainEntity"
              itemtype="https://schema.org/Question">
              <h3 itemprop="name"><?php echo $row["question"]; ?></h3>
              <div class="faq-accordion-content">
                <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                  <div itemprop="text"><?php echo $row["answer"]; ?></div>
                </div>
              </div>
            </div>
            <?php $i++;
              }
              } ?>          
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php endif;
    ?>
  <?php require_once get_template_directory() . "/common/blog.php"; ?>
  <?php require_once get_template_directory() .
    "/common/workstatus-journey.php"; ?>
</main>
<?php get_footer(); ?>
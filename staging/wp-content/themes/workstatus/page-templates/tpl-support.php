<?php
/* 
Template Name: Support Template 
Author : Gaurav K.
*/
get_header();
global $ws_ctas, $RegLink, $LogLink;
?>
<main class="site__content">
    <?php
    $banner_section = get_field('banner_section');
    $bsEnabled         = $banner_section['is_enabled'];
    if ($bsEnabled == 'yes') :
    ?>
        <section class="hero-banner">
            <div class="container">
                <div class="inner-wrap">
                    <h1> <?php echo $banner_section['heading']; ?></h1>
                    <p><?php echo $banner_section['content']; ?></p>
                    <div class="mt40"></div>
                    <?php //require_once get_template_directory() . '/common/available-device.php'; ?>
                    <?php //require_once get_template_directory() . '/common/partners.php'; ?>
                </div>
            </div>
        </section>
    <?php endif; ?>
    <?php
    $downloads_section = get_field('downloads_section');
    $dsEnabled         = $downloads_section['is_enabled'];
    if ($dsEnabled == 'yes') :
    ?>
        <section class="downloads">
            <div class="container">
                <div class="top-section">
                    <h6><span class="bg-purple"><?php echo $downloads_section['heading']; ?></span></h6>
                    <h2><?php echo $downloads_section['sub_heading']; ?></h2>
                    <p><?php echo $downloads_section['content']; ?></p>
                </div>
                <div class="flex_row">
                    <?php
                    /*
                    if ($downloads_section['section_repeater']) {$i = 1;
                        $link1 = 'https://app.workstatus.io/downloads/windows/workstatus.exe';
                        $link2 = 'https://app.workstatus.io/downloads/mac/workstatus.dmg';
                        $link3 = 'https://play.google.com/store/apps/details?id=com.vinove.workstatus&pcampaignid=pcampaignidMKT-Other-global-all-co-prtnr-py-PartBadge-Mar2515-1';
                        $link4 = 'https://apps.apple.com/us/app/Workstatus-tm/id1570416295';
                        foreach ($downloads_section['section_repeater'] as $row) {
                            
                            $logo      = $row['logo'];
                            $logo_2      = $row['logo_2'];
                            $image      = $row['image'];
                    ?>
                            <div class="column <?php echo $active = ($i == 1) ? "active" : "";?>">
                                <h3><?php echo $row['heading']; ?></h3>
                                <?php echo $row['content']; ?>
                                <div class="wsdevice">
                                    <a href="<?php echo ( $i == 1 ) ? $link1 : $link3; ?>" download><img loading="lazy" src="<?php echo $logo['url']; ?>" alt="google play" width="200" height="50">
                                        <small><?php echo $row['logo_text']; ?></small>
                                    </a>
                                    <a href="<?php echo ( $i == 1 ) ? $link2 : $link4; ?>" download><img loading="lazy" src="<?php echo $logo_2['url']; ?>" alt="google play" width="200" height="50">
                                        <small><?php echo $row['logo_2_text']; ?></small>
                                    </a>
                                </div>
                                <p><?php echo $row['image_text']; ?></p>
                                <?php
                        if ($image) {
                            echo '<picture>
                            ' . getPxlWebpURL($image['ID']) . '
                            <source type="' . $image['mime_type'] . '" srcset="' . $image['url'] . '">
                            <img loading="lazy" src="' . $image['url'] . '" alt="' . $image['title'] . '" width="' . $image['width'] . '" 
                            height="' . $image['height'] . '"> 
                            </picture>';
                        } ?>
                            </div>
                    <?php  
                    $i++;
                    }
                    }
                    */ 
                    ?>
                      <div class="column active">
    <h3>Workstatus For Desktop</h3>
    <p>Workstatus app for desktop works great on all major browsers, so you shouldn’t have any trouble getting up and running.It’s super easy to set up and use – all you have to do is download the app and start the timer whenever you start working on something. You can stop the timer whenever you end your day or pause it in between if you need to take a break. In ‘Stealth Mode’ for Windows, Workstatus starts automatically.</p>
    <div class="wsdevice">
      <a href="https://app.workstatus.io/downloads/windows/workstatus.exe" download><img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/images/dwindow.svg" alt="window" width="149" height="44"> 
      <small>(Windows 8.x & above)<br>
       Version 2.4(3)</small>
      </a>
      <a href="https://app.workstatus.io/downloads/mac/workstatus.dmg" download><img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/images/dmac.svg" alt="mac" width="149" height="44">
      <small>(Mac OS 10.14.x & above)<br>
      Version 2.3(5)</small>
      </a>
      <a href="https://support.workstatus.io/en/article/install-and-sign-in-into-linux-desktop-124d7k7/?bust=1688729166943"download><img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/images/dlinux.svg" alt="linux" width="149" height="44">
      <small>(Ubuntu 22.04 LTS & above)<br> Version 4.3.5</small>
      </a>
    </div>
    <picture class="dImg">
      <source type="image/webp" srcset="<?php bloginfo('template_url'); ?>/dev-images/dwn-desktop.webp">
      <source type="image/png" srcset="<?php bloginfo('template_url'); ?>/dev-images/dwn-desktop.png">  
      <img loading="lazy" src="<?php bloginfo('template_url'); ?>/dev-images/dwn-desktop.webp"
        alt="Workstatus For Desktop" width="439" height="258">
    </picture>
  </div>
  <div class="column">
    <h3>Workstatus for Mobile</h3>
    <p>Workstatus for mobile allows your remote or mobile workforce to keep track of their time from anywhere. The app runs in the background of the device and maintains accurate timesheets.This can be helpful when billing clients or tracking productivity. With GPS tracking and geofences, anyone can clock in automatically when they enter a job site or get reminders based on location.</p>
    <div class="wsdevice">
      <a href="https://play.google.com/store/apps/details?id=com.vinove.workstatus&pcampaignid=pcampaignidMKT-Other-global-all-co-prtnr-py-PartBadge-Mar2515-1"><img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/images/dgoogleplay.svg" alt="google play" width="149" height="44">
      <small>(Android 8.x & above)<br>Version 6.9.6(118)</small>
      </a> 
      <a href="https://apps.apple.com/us/app/Workstatus-tm/id1570416295"><img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/images/dappstore.svg" alt="apple" width="133" height="44">
      <small>(iOS 12.x & above)<br>Version 6.2.7(26)</small>
      </a> 
    </div>
    <picture class="dImg">
      <source type="image/webp" srcset="<?php bloginfo('template_url'); ?>/dev-images/dwn-tab.webp">
      <source type="image/png" srcset="<?php bloginfo('template_url'); ?>/dev-images/dwn-tab.png">    
      <img loading="lazy" src="<?php bloginfo('template_url'); ?>/dev-images/dwn-tab.webp" alt="Workstatus for Mobile" 
      width="409" height="258">
    </picture>
  </div>
                </div>
            </div>
        </section>
        <section class="extension" style="display:none;">
            <div class="container">
            <div class="flex_row">
            <div class="column-left">
            <h3>Automatic And Simple Time Tracker</h3>
            <p>Explore the full functionality of the time tracking solution for Browsers. Add ‘Workstatus Browser Extension’ to your browser and start tracking. It is compatible with: </p>
            <ul>
            <li>Google Chrome</li>
            <li>Microsoft Edge</li>
            <li>Safari</li>
            </ul>
            <div class="dimage">
            <source type="image/webp" srcset="<?php bloginfo('template_url'); ?>/assests/images/dcromebook.webp">
            <source type="image/png" srcset="<?php bloginfo('template_url'); ?>/assests/images/dcromebook.png">
            <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/images/dcromebook.png" alt="chromebook" width="229" height="44">
          <small>(Google Chrome 110 & above, Microsoft<br> Edge V. 112.0.1722.58, Safari V. 16.1)</small>
            </div>
            </div>
            <div class="column-right">
            <picture class="" id="">
            <source type="image/webp" srcset="<?php bloginfo('template_url'); ?>/assests/images/extension-image.webp">
            <source type="image/png" srcset="<?php bloginfo('template_url'); ?>/assests/images/extension-image.png">
            <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/images/extension-image.png" alt="browser-01" width="439" height="258">
            </picture>
            </div>
            </div>
            </div>
        </section>
    <?php endif; ?>
    <?php require_once get_template_directory() . '/common/workstatus-journey.php'; ?>
</main>
<?php get_footer(); ?>
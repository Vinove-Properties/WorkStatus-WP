<?php
/* 
Template Name: About Template 
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
        <section class="hero-banner banner-image">
            <div class="container">
                <div class="inner-wrap">
                    <h1><?php echo $banner_section['heading']; ?></h1>
                    <?php echo $banner_section['content']; ?>
                    <div class="mt40"></div>
                    <?php require_once get_template_directory() . '/common/available-device.php'; ?>
                    <?php require_once get_template_directory() . '/common/partners.php'; ?>
                    <div class="bnrimg" style="z-index:9;">
                        <?php
                        $image = $banner_section['image'];
                        if ($image) {
                            echo '<picture>
                            ' . getPxlWebpURL($image['ID']) . '
                            <source type="' . $image['mime_type'] . '" srcset="' . $image['url'] . '">
                            <img loading="lazy" src="' . $image['url'] . '" alt="' . $image['title'] . '" width="' . $image['width'] . '" 
                            height="' . $image['height'] . '"> 
                            </picture>';
                        } ?>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>
    <?php
    $commitment = get_field('commitment');
    $ctEnabled         = $commitment['is_enabled'];
    if ($ctEnabled == 'yes') :
    ?>
        <section class="aproach">
            <div class="container">
                <div class="flex_row">
                    <div class="column-left">
                        <?php
                        $image = $commitment['image'];
                        if ($image) {
                            echo '<picture>
                            ' . getPxlWebpURL($image['ID']) . '
                            <source type="' . $image['mime_type'] . '" srcset="' . $image['url'] . '">
                            <img loading="lazy" src="' . $image['url'] . '" alt="' . $image['title'] . '" width="' . $image['width'] . '" 
                            height="' . $image['height'] . '"> 
                            </picture>';
                        } ?>
                    </div>
                    <div class="column-right">
                        <div class="top-section">
                            <h6><span class="bg-purple"><?php echo $commitment['heading']; ?></span></h6>
                            <h2><?php echo $commitment['sub_heading']; ?></h2>
                            <?php echo $commitment['content']; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>
    <?php
    $footprints = get_field('footprints');
    $fEnabled         = $footprints['is_enabled'];
    if ($fEnabled == 'yes') :
    ?>
        <section class="connection">
            <div class="container">
                <div class="top-section">
                    <h6><span class="bg-purple"><?php echo $footprints['heading']; ?></span></h6>
                    <h2><?php echo $footprints['sub_heading']; ?></h2>
                    <?php echo $footprints['content']; ?>
                </div>
                <div class="flex_row">
                    <?php
                    if ($footprints['content_repeater']) {$i = 1;
                        foreach ($footprints['content_repeater'] as $row) {
                    ?>
                            <div class="column">
                                <i class="icon<?php echo $i;?>"></i>
                                <h3><?php echo $row['title']; ?></h3>
                                <p><?php echo $row['content']; ?> </p>
                            </div>
                    <?php  $i++;}
                    } ?>
                </div>
            </div>
        </section>
    <?php endif; ?>
    <?php
    $approach = get_field('approach');
    $aEnabled         = $approach['is_enabled'];
    if ($aEnabled == 'yes') :
    ?>
        <section class="trackEm">
            <div class="container">
                <div class="top-section">
                    <h6><span class="bg-purple"><?php echo $approach['heading']; ?></span></h6>
                    <h2><?php echo $approach['sub_heading']; ?></h2>
                    <?php echo $approach['content']; ?>
                </div>
                <div class="trackRow">
                    <div class="trackImg">
                        <?php
                        $image = $approach['left_image'];
                        if ($image) {
                            echo '<picture>
                            ' . getPxlWebpURL($image['ID']) . '
                            <source type="' . $image['mime_type'] . '" srcset="' . $image['url'] . '">
                            <img loading="lazy" src="' . $image['url'] . '" alt="' . $image['title'] . '" width="' . $image['width'] . '" 
                            height="' . $image['height'] . '"> 
                            </picture>';
                        } ?>
                    </div>
                    <div class="trackContent">
                        <?php
                        if ($approach['content_repeater']) {
                            foreach ($approach['content_repeater'] as $row) {
                        ?>
                                <div class="row">
                                    <h3><i></i><?php echo $row['heading']; ?></h3>
                                    <p><?php echo $row['content']; ?> </p>
                                </div>
                        <?php  }
                        } ?>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <section class="wsMobile whitetxt">
        <?php require_once get_template_directory() . '/common/workstatus-device.php'; ?>
    </section>
    <?php
    $who_we_are = get_field('who_we_are');
    $wEnabled         = $who_we_are['is_enabled'];
    if ($wEnabled == 'yes') :
    ?>
        <section class="trackEm">
            <div class="container">
                <div class="top-section">
                    <h6><span class="bg-purple"><?php echo $who_we_are['heading']; ?></span></h6>
                    <h2><?php echo $who_we_are['sub_heading']; ?></h2>
                    <?php echo $who_we_are['content']; ?><p>
                </div>
                <div class="trackRow">
                    <div class="trackImg">
                        <?php
                        $image = $who_we_are['left_image'];
                        if ($image) {
                            echo '<picture>
                            ' . getPxlWebpURL($image['ID']) . '
                            <source type="' . $image['mime_type'] . '" srcset="' . $image['url'] . '">
                            <img loading="lazy" src="' . $image['url'] . '" alt="' . $image['title'] . '" width="' . $image['width'] . '" 
                            height="' . $image['height'] . '"> 
                            </picture>';
                        } ?>
                    </div>
                    <div class="trackContent">
                        <?php
                        if ($who_we_are['content_repeater']) {
                            foreach ($who_we_are['content_repeater'] as $row) {
                        ?>
                                <div class="row">
                                    <h3><i></i><?php echo $row['heading']; ?></h3>
                                    <p><?php echo $row['content']; ?> </p>
                                </div>
                        <?php  }
                        } ?>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>
    <?php require_once get_template_directory() . '/common/workstatus-journey.php'; ?>
</main>
<?php get_footer(); ?>
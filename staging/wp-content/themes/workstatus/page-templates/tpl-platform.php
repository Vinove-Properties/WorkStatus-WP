<?php
/* 
Template Name: Platforms Template 
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
        <section class="hero-banner inner-banner-bg">
            <div class="bannerwrap mac-banner wslazy">
                <div class="container">
                    <div class="inner-wrap">
                        <h1 <?php echo (is_page(441)) ? 'style="text-transform:inherit;"' : ''; ?>><?php echo $banner_section['heading']; ?></h1>
                        <?php echo $banner_section['content']; ?>
                        
                        <?php 
                        $downloads  = get_field('downloads');
                        $dEnabled   = $downloads['is_enabled'];
                        if( ($dEnabled == 'yes') && !is_page(3489) ){ ?>
                        <div class="actionBtn">
                        <div>
                        <a href="<?php echo ($downloads['button_slug']) ? $downloads['button_slug'] : 'javascript:void(0);'; ?>" 
                        class="primary_btn1" download><?php echo (is_page(3489)) ? "Coming soon" : "Download App"; ?></a>
                        </div>                            
                        </div>
                        <?php }else{ ?>                        
                        <div class="actionBtn">
                        <?php echo cmnBannerCta(); ?>
                        </div>
                        <?php } ?>

                        <?php //require_once get_template_directory() . '/common/available-device.php'; ?>
                        <?php //require_once get_template_directory(). '/common/partners.php'; ?>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>
    <?php
    $top_platforms = get_field('top_platforms');
    $tpEnabled         = $top_platforms['is_enabled'];
    if ($tpEnabled == 'yes') :
    ?>
        <section class="top-plateform p50">
            <div class="container">
                <div class="flex_row">
                    <div class="column-left">
                        <?php
                        $image = $top_platforms['image'];
                        if ($image) {
                            echo pxlGetPtag($image);
                        } ?>
                    </div>
                    <div class="column-right">
                        <h6><span class="bg-purple"><?php echo $top_platforms['heading']; ?></span></h6>
                        <h2><?php echo $top_platforms['sub_heading']; ?></h2>
                        <?php echo $top_platforms['content']; ?>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>
    <?php
    $box_section = get_field('box_section');
    $bsEnabled         = $box_section['is_enabled'];
    if ($bsEnabled == 'yes') :
    ?>
        <section class="boxDiv">
            <div class="container">
                <div class="boxRow">
                    <?php
                    if ($box_section['box_repeater']) {
                        $i = 1;
                        foreach ($box_section['box_repeater'] as $row) {
                            $icon = $row['icon'];
                    ?>
                            <div class="boxCol">
                                <?php
                                if ($icon) {
                                    echo pxlGetPtag($icon);
                                } else {
                                    echo '<i class="icon' . $i . '"></i>';
                                }
                                ?>
                                <h3><?php echo $row['content'] ?></h3>
                            </div>
                    <?php $i++;
                        }
                    } ?>
                </div>
            </div>
        </section>
    <?php endif; ?>
    <?php
    $top_section = get_field('top_section');
    $tsEnabled         = $top_section['is_enabled'];
    if ($tsEnabled == 'yes') :
    ?>
        <section class="trackEm p50 post-animation">
            <div class="container">
                <div class="top-section">
                    <h6 class="inherit"><span class="bg-purple inherit"><?php echo $top_section['heading']; ?></span></h6>
                    <h2 class="inherit"><?php echo $top_section['sub_heading']; ?></h2>
                </div>
                <div class="trackRow align-center">
                    <div class="trackImg">
                        <?php
                        $image = $top_section['left_image'];
                        if ($image) {
                            echo pxlGetPtag($image);
                        } ?>
                    </div>
                    <div class="trackContent">
                        <?php
                        if ($top_section['section_repeater']) {
                            foreach ($top_section['section_repeater'] as $row) {
                        ?>
                                <div class="row">
                                    <h3><i></i><?php echo $row['heading']; ?></h3>
                                    <?php echo $row['content']; ?>
                                </div>
                        <?php  }
                        } ?>
                    </div>
                </div>
                <div class="mt80 btnSc">
                    <?php echo wsDemoCta(); ?>
                </div>
            </div>
        </section>
    <?php endif; ?>
    <?php //getWsCmnFeatures(); ?>        
    <?php
    $timeline = get_field('timeline');
    $tEnabled         = $timeline['is_enabled'];
    if ($tEnabled == 'yes') :
    ?>
        <section class="timeline">
            <div class="container">
                <div class="top-section">
                    <h6><span class="bg-purple"><?php echo $timeline['heading']; ?></span></h6>
                    <h2><?php echo $timeline['sub_heading']; ?></h2>
                    <p><?php echo $timeline['content']; ?></p>
                </div>
                <div class="trackRow align-center">
                    <div class="trackImg">
                        <?php
                        $image = $timeline['left_image'];
                        if ($image) {
                            echo pxlGetPtag($image);
                        } ?>
                    </div>
                    <div class="trackContent">
                        <?php
                        if ($timeline['timeline_repeater']) {
                            foreach ($timeline['timeline_repeater'] as $row) {
                        ?>
                                <div class="row">
                                    <h5><?php echo $row['heading']; ?></h5>
                                    <h3><?php echo $row['sub_heading']; ?></h3>
                                    <p><?php echo $row['content']; ?> </p>
                                </div>
                        <?php  }
                        } ?>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>
    <?php
    $downloads = get_field('downloads');
    $dEnabled         = $downloads['is_enabled'];
    if ($dEnabled == 'yes') :
    ?>
        <section class="how-download">
            <div class="container">
                <div class="top-section">
                    <?php
                    $image = $downloads['icon'];
                    if($image){
                        echo pxlGetPtag($image);
                    } 
                    ?>
                    <h6><span class="bg-white"><?php echo $downloads['heading']; ?></span></h6>
                    <h2><?php echo $downloads['sub_heading']; ?></h2>
                    <p><?php echo $downloads['content']; ?></p>
                    <a href="<?php echo ($downloads['button_slug']) ? $downloads['button_slug'] : 'javascript:void(0);'; ?>" class="primary_btn" download>
                    <?php echo $downloads['btn_text']; ?>
                    </a>
                </div>
            </div>
        </section>
    <?php endif; ?>
    <?php
    $time_tracking = get_field('time_tracking');
    $ttEnabled         = $time_tracking['is_enabled'];
    if ($ttEnabled == 'yes') :
    ?>
        <section class="middle-section feature-section">
            <div class="item">
                <div class="container">
                    <div class="top-section">
                        <h6><span class="bg-purple"><?php echo $time_tracking['heading']; ?></span></h6>
                        <h2><?php echo $time_tracking['sub_heading']; ?></h2>
                        <p><?php echo $time_tracking['content']; ?></p>
                    </div>
                    <div id="active_Current_Tabs1">
                        <div class="flex_row">
                            <div class="column-right">
                                <?php
                                if ($time_tracking['tracking_repeater']) {
                                    $i = 1;
                                    foreach ($time_tracking['tracking_repeater'] as $row) {
                                        $image      = $row['image'];
                                        $active = ($i == 1) ? "active" : "";
                                ?>
                                        <?php
                                        if ($image) {
                                            echo pxlGetPtag($image, '', 'page ' . $active . '', 'p' . $i . '');
                                        }
                                        ?>

                                <?php $i++;
                                    }
                                } ?>
                            </div>
                            <div class="column-left">
                                <?php
                                if ($time_tracking['tracking_repeater']) {
                                    $i = 1;
                                    foreach ($time_tracking['tracking_repeater'] as $row) {
                                        $image      = $row['image'];
                                        $active = ($i == 1) ? "active" : "";
                                ?>
                                        <div class="all-content">
                                            <div class="text-column <?php echo $active; ?>" id="t<?php echo $i; ?>" data-section="active_Current_Tabs1">
                                                <h3><i></i><?php echo $row['heading']; ?></h3>
                                                <p><?php echo $row['content']; ?></p>
                                            </div>
                                            <div class="mob-image">
                                                <?php
                                                if ($image) {
                                                    echo pxlGetPtag($image);
                                                }
                                                ?>
                                            </div>
                                        </div>
                                <?php $i++;
                                    }
                                } ?>
                            </div>
                        </div>
                    </div>
                    <div class="mt40 btnSc">
                        <?php echo wsDemoCta(); ?>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>
    
    <?php
    $faqs = get_field('faqs');
    $faEnabled         = $faqs['is_enabled'];
    if ($faEnabled == 'yes') :
    ?>
        <section class="faqsRow wfull for-heading-center">
            <div class="container">
                <div class="top-section">
                    <h6><span class="bg-purple"><?php echo $faqs['heading']; ?></span></h6>
                    <h2><?php echo $faqs['sub_heading']; ?></h2>
                </div>
                <div class="flex_row">
                    <div itemscope itemtype="https://schema.org/FAQPage">
                        <div class="column">
                            <?php
                            if ($faqs['faq_repeater']) {
                                $i = 1;
                                foreach ($faqs['faq_repeater'] as $row) {
                                    //$active = ($i == 1) ? "open" : "";
                                    $active = ($i <= 3) ? "open" : "";
                            ?>
                                    <div class="faq-accordion-item-outer <?php echo $active; ?>" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                        <h3 itemprop="name"><?php echo $row['heading']; ?>
                                        </h3>
                                        <div class="faq-accordion-content">
                                            <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                                <div itemprop="text">
                                                    <?php echo $row['content']; ?>
                                                </div>
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
    <?php endif; ?>
    <?php require_once get_template_directory() . '/common/workstatus-journey.php'; ?>
</main>
<?php get_footer(); ?>
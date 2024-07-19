<?php
/* 
Template Name: Use Case Template 
Author : Gaurav K.
*/
get_header();
global $ws_ctas, $RegLink, $LogLink;
?>
<main class="site__content">
    <?php
    $inner_banner = get_field('inner_banner');
    $bsEnabled         = $inner_banner['is_enabled'];
    if ($bsEnabled == 'yes') :
    ?>
        <section class="inner-banner">
            <div class="container">
                <div class="inner-wrap">
                    <h1><?php echo $inner_banner['title']; ?></h1>
                    <?php echo $inner_banner['content']; ?>

                    <div class="actionBtn">
                        <?php if( geoCTAcheck() === true ) : ?>
                        <div>
                        <a data-href="<?php echo $RegLink; ?>" href="javascript:void(0);" class="primary_btn1" 
                        onclick="return get_ws_signupform(this);"><?php echo $ws_ctas['cta_text']; ?></a>
                        <small><?php echo $inner_banner['trial_button_bottom_text']; ?></small>
                        </div>
                        <?php endif; ?>
                        <?php if ($inner_banner['demo_button_text']) { ?>
                            <div><a href="javascript:void(0)" onclick="call_demows();" class="primary_btn2 formbtn"><?php echo $inner_banner['demo_button_text']; ?></a>
                                <small><?php echo $inner_banner['demo_button_bottom_text']; ?></small>
                            </div>
                        <?php } ?>
                    </div>

                    <?php require_once get_template_directory() . '/common/available-device.php'; ?>
                        <?php require_once get_template_directory() . '/common/partners.php'; ?>
                        <?php
                        $vdScreenshot = '';
                        if(
                            isset($inner_banner['video_bg_image']) &&
                            !empty($inner_banner['video_bg_image'])
                        ){
                            $cScreenSrc   = wsGetWebpSrcUrl( $inner_banner['video_bg_image']['id'] );
                            $vdScreenshot = ' style="background: url('.wsGetWebpSrcUrl($inner_banner['video_bg_image']['id']).'); background-size: contain; background-repeat: no-repeat; background-position: center;"';
                        }
                        ?>
                    <div class="video-wrap">
                        <div class="videoSc" id="has-yt-video">
                            <div class="inner">
                                <div class="topVideo <?php echo $srpclass; ?>">
                                    <div id="myDIV" class="contbox2">
                                        <div class="videoWrapper">
                                            <!-- <iframe id="video" class="videoIframe" allowfullscreen data-src="<?php echo $inner_banner['video']; ?>">
                                            </iframe> -->
                                            <button class="videoPoster lazy-background wsbg-cover wsbg-img bg-trans" 
                                                data-src="<?php echo $cScreenSrc; ?>" id="play-button">
                                                Play video
                                                <!-- <span class="playicon"></span> -->
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>
    <?php
    $secret_to_success = get_field('secret_to_success');
    $bsEnabled         = $secret_to_success['is_enabled'];
    if ($bsEnabled == 'yes') :
    ?>
        <section class="trackEm">
            <div class="container">
                <div class="top-section">
                    <h6><span class="bg-purple"><?php echo $secret_to_success['heading']; ?></span></h6>
                    <h2><?php echo $secret_to_success['sub_heading']; ?></h2>
                    <?php if ($secret_to_success['content']) : ?>
                       <p> <?php echo $secret_to_success['content']; ?></p>
                    <?php endif; ?>
                </div>
                <div class="trackRow">
                    <div class="trackImg">
                        <?php
                        $image = $secret_to_success['left_image'];
                        if ($image) {
                            echo pxlGetPtag($image);
                        } ?>
                    </div>
                    <div class="trackContent">
                        <?php
                        if ($secret_to_success['content_repeater']) {
                            foreach ($secret_to_success['content_repeater'] as $row) {
                        ?>
                                <div class="row">
                                    <h3><i></i><?php echo $row['heading']; ?></h3>
                                    <?php echo $row['content']; ?>
                                </div>
                        <?php  }
                        } ?>

                    </div>
                </div>
            </div>
        </section>
    <?php
    endif; ?>
    <section class="middle-section feature-section">
        <?php
        $financialmanage = get_field('financial_management');
        $bsEnabled         = $financialmanage['is_enabled'];
        if ($bsEnabled == 'yes') :
        ?>
            <div class="item" id="acf-financial_management">
                <div class="container">
                    <div class="top-section">
                        <h6><span class="bg-purple"><?php echo $financialmanage['heading']; ?></span></h6>
                        <h2><?php echo $financialmanage['sub_heading']; ?></h2>
                        <p><?php echo $financialmanage['content']; ?></p>
                    </div>
                    <div id="active_Current_Tabs1">
                        <div class="flex_row">
                            <div class="column-right">
                                <?php
                                if ($financialmanage['management']) {
                                    $i = 1;
                                    foreach ($financialmanage['management'] as $row) {
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
                                if ($financialmanage['management']) {
                                    $i = 1;
                                    foreach ($financialmanage['management'] as $row) {
                                        $image      = $row['image'];
                                        $active = ($i == 1) ? "active" : " ";
                                ?>
                                        <div class="all-content">
                                            <div class="text-column <?php echo $active; ?> <?php echo (strpos($row['content'], '<ul') !== false) ? ' listing ' : ''; ?>" id="t<?php echo $i; ?>" data-section="active_Current_Tabs1">
                                                <h3><?php echo $row['heading']; ?></h3>
                                                <?php echo $row['content']; ?>
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
                    <?php /*if ($financialmanage['top_button_text']) { ?>
                        <div class="mt40 btnSc">
                            <p><?php echo $financialmanage['top_button_text']; ?></p>
                            <a href="javascript:void(0)" onclick="call_demows();" class="primary_btn1"><?php echo $financialmanage['button_text']; ?></a>
                            <small><?php echo $financialmanage['bottom_button_text']; ?></small>
                        </div>
                    <?php }*/ ?>
                    <div class="mt40 btnSc">
                    <?php echo wsDemoCta(); ?>
                    </div>
                </div>
            </div>
        <?php
        endif; ?>
        <?php
        $expense_management = get_field('expense_management');
        $bsEnabled         = $expense_management['is_enabled'];
        if ($bsEnabled == 'yes') :
        ?>
            <div class="item" id="acf-expense_management">
                <div class="container">
                    <div class="top-section">
                        <h6><span class="bg-purple"><?php echo $expense_management['heading']; ?></span></h6>
                        <h2><?php echo $expense_management['sub_heading']; ?></h2>
                        <p><?php echo $expense_management['content']; ?></p>
                    </div>
                    <div id="active_Current_Tabs2">
                        <div class="flex_row">
                            <div class="column-right">
                                <?php
                                if ($expense_management['management']) {
                                    $i = 4;
                                    foreach ($expense_management['management'] as $row) {
                                        $image      = $row['image'];
                                        $active = ($i == 4) ? "active" : " ";
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
                                if ($expense_management['management']) {
                                    $i = 4;
                                    foreach ($expense_management['management'] as $row) {
                                        $image      = $row['image'];
                                        $active = ($i == 4) ? "active" : " ";
                                ?>
                                        <div class="all-content">
                                            <div class="text-column <?php echo $active; ?> <?php echo (strpos($row['content'], '<ul') !== false) ? ' listing ' : ''; ?>" id="t<?php echo $i; ?>" data-section="active_Current_Tabs2">
                                                <h3><?php echo $row['heading']; ?></h3>
                                                <?php echo $row['content']; ?>
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
                    <?php /*if ($expense_management['top_button_text']) { ?>
                        <div class="mt40 btnSc">
                            <p><?php echo $expense_management['top_button_text']; ?></p>
                            <a href="javascript:void(0)" onclick="call_demows();" class="primary_btn1"><?php echo $expense_management['button_text']; ?></a>
                            <small><?php echo $expense_management['bottom_button_text']; ?></small>
                        </div>
                    <?php }*/ ?>
                    <div class="mt40 btnSc">
                    <?php echo wsDemoCta(); ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        
        <?php 
        $dwnloadSection = get_field('download_section');
        if( isset($dwnloadSection['is_enabled']) && ($dwnloadSection['is_enabled'] == "yes") ) : 
        ?>
        <section class="dwnload post-animation">
        <div class="container">
        <div class="dis-flex">
        <div class="dwnleft"><?php echo $dwnloadSection['content']; ?></div>
        <div class="dwnright">
        <a href="<?php echo site_url( $dwnloadSection['link'] ); ?>" class="primary_btn1">Download eBook</a>
        </div>
        </div>
        </div>
        </section>
        <?php endif; ?>

        <?php
        $attendance_management = get_field('attendance_management');
        $bsEnabled         = $attendance_management['is_enabled'];
        if ($bsEnabled == 'yes') :
        ?>

            <div class="item" id="acf-attendance_management">
                <div class="container">
                    <div class="top-section">
                        <h6><span class="bg-purple"><?php echo $attendance_management['heading']; ?></span></h6>
                        <h2><?php echo $attendance_management['sub_heading']; ?></h2>
                        <p><?php echo $attendance_management['content']; ?></p>
                    </div>
                    <div id="active_Current_Tabs3">
                        <div class="flex_row">
                            <div class="column-right">
                                <?php
                                if ($attendance_management['management']) {
                                    $i = 7;
                                    foreach ($attendance_management['management'] as $row) {
                                        $image      = $row['image'];
                                        $active = ($i == 7) ? "active" : "";
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
                                if ($attendance_management['management']) {
                                    $i = 7;
                                    foreach ($attendance_management['management'] as $row) {
                                        $image      = $row['image'];
                                        $active = ($i == 7) ? "active" : " ";
                                ?>
                                        <div class="all-content">
                                            <div class="text-column <?php echo $active; ?> <?php echo (strpos($row['content'], '<ul') !== false) ? ' listing ' : ''; ?>" id="t<?php echo $i; ?>" data-section="active_Current_Tabs3">
                                                <h3><?php echo $row['heading']; ?></h3>
                                                <?php echo $row['content']; ?>
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
                    <?php /*if ($attendance_management['top_button_text']) { ?>
                        <div class="mt40 btnSc">
                            <p><?php echo $attendance_management['top_button_text']; ?></p>
                            <a href="javascript:void(0)" onclick="call_demows();" class="primary_btn1"><?php echo $attendance_management['button_text']; ?></a>
                            <small><?php echo $attendance_management['bottom_button_text']; ?></small>
                        </div>
                    <?php }*/ ?>
                    <div class="mt40 btnSc">
                    <?php echo wsDemoCta(); ?>
                    </div>
                </div>
            </div>
        <?php
        endif; ?>
        <?php
        $focus_management = get_field('focus_management');
        $bsEnabled         = $focus_management['is_enabled'];
        if ($bsEnabled == 'yes') :
        ?>
            <div class="item" id="acf-focus_management">
                <div class="container">
                    <div class="top-section">
                        <h6><span class="bg-purple"><?php echo $focus_management['heading']; ?></span></h6>
                        <h2><?php echo $focus_management['sub_heading']; ?></h2>
                        <p><?php echo $focus_management['content']; ?></p>
                    </div>
                    <div id="active_Current_Tabs4">
                        <div class="flex_row">
                            <div class="column-right">
                                <?php
                                if ($focus_management['management']) {
                                    $i = 10;
                                    foreach ($focus_management['management'] as $row) {
                                        $image      = $row['image'];
                                        $active = ($i == 10) ? "active" : "";
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
                                if ($focus_management['management']) {
                                    $i = 10;
                                    foreach ($focus_management['management'] as $row) {
                                        $image      = $row['image'];
                                        $active = ($i == 10) ? "active" : " ";
                                ?>
                                        <div class="all-content">
                                            <div class="text-column <?php echo $active; ?> <?php echo (strpos($row['content'], '<ul') !== false) ? ' listing ' : ''; ?>" id="t<?php echo $i; ?>" data-section="active_Current_Tabs4">
                                                <h3><?php echo $row['heading']; ?></h3>
                                                <?php echo $row['content']; ?>
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
                    <?php /*if ($focus_management['top_button_text']) { ?>
                        <div class="mt40 btnSc">
                            <p><?php echo $focus_management['top_button_text']; ?></p>
                            <a href="javascript:void(0)" onclick="call_demows();" class="primary_btn1"><?php echo $focus_management['button_text']; ?></a>
                            <small><?php echo $focus_management['bottom_button_text']; ?></small>
                        </div>
                    <?php }*/ ?>
                    <div class="mt40 btnSc">
                    <?php echo wsDemoCta(); ?>
                    </div>
                </div>
            </div>
        <?php
        endif; ?>
    </section>
    <?php get_template_part('common/ws', 'pricing'); ?>
    <section class="wsMobile whitetxt">
        <?php require_once get_template_directory() . '/common/workstatus-device.php'; ?>
    </section>

    <?php
    $testimonials = get_field('testimonials');
    $tmEnabled         = $testimonials['is_enabled'];
    if ($tmEnabled == 'yes') :
    ?>
        <section class="testimonial testmHome">
            <div class="container">
                <div class="top-section">
                    <h6><span class="bg-white"><?php echo $testimonials['heading']; ?></span></h6>
                    <h2><?php echo $testimonials['sub_heading']; ?></h2>
                </div>
                <div class="glider-testimonial">
                    <div class="glider-contain">
                        <div class="glider2">
                            <?php
                            if ($testimonials['content_repeater']) {
                                $i = 1;
                                foreach ($testimonials['content_repeater'] as $row) {
                                    $image      = $row['icon'];
                                    $active = ($i == 1) ? "active" : "";
                            ?>
                                    <div>
                                        <p class="white">
                                            <?php echo $row['content']; ?>
                                        </p>
                                        <div class="border">
                                            <div class="triangle"></div>
                                        </div>
                                        <div class="author-box">
                                            <?php
                                            if ($image) {
                                                echo pxlGetPtag($image);
                                            }
                                            ?>
                                            <div class="author-content">
                                                <p class="para_extrasmall white"><?php echo $row['name']; ?></p>
                                            </div>
                                        </div>
                                    </div>

                            <?php $i++;
                                }
                            } ?>
                        </div>
                        <div role="tablist" class="dots2"></div>
                    </div>
                </div>
            </div>
        </section>
    <?php
    endif; ?>

    <?php
    $faqs = get_field('faqs');
    $tmEnabled         = $faqs['is_enabled'];
    if ($tmEnabled == 'yes') :
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
    <?php
    endif; ?>
    <?php require_once get_template_directory() . '/common/blog.php'; ?>
    <?php require_once get_template_directory() . '/common/workstatus-journey.php'; ?>
</main>
<?php get_footer(); ?>
<?php
/* 
Template Name: Industries Template 
Author : Gaurav K.
*/
get_header();
global $ws_ctas, $RegLink, $LogLink;
?>

<main class="site__content">
    <?php
    $bannersec = get_field('inner_banner');
    if ($bannersec) :
        $isEnable = $bannersec['is_enabled'];
        if ($isEnable == "yes") {
    ?>
            <section class="inner-banner">
                <div class="container">
                    <div class="inner-wrap">
                        <h1><?php echo $bannersec['title']; ?></h1>
                        <?php echo $bannersec['content']; ?>

                        <div class="actionBtn">
                            <?php 
                            /*
                            if ($bannersec['demo_button_text']) { ?>
                                <div><a href="javascript:void(0)" onclick="call_demows();" class="primary_btn2 formbtn"><?php echo $bannersec['demo_button_text']; ?></a>
                                    <small><?php echo $bannersec['demo_button_bottom_text']; ?></small>
                                </div>
                            <?php } 
                            */
                            ?>
                            <?php echo wsDemoCta(); ?>
                        </div>

                        <?php require_once get_template_directory() . '/common/available-device.php'; ?>
                        <?php require_once get_template_directory() . '/common/partners.php'; ?>
                        <?php
                        $vdScreenshot = '';
                        if (
                            isset($bannersec['video_bg_image']) &&
                            !empty($bannersec['video_bg_image'])
                        ) {
                            $cScreenSrc   = wsGetWebpSrcUrl( $bannersec['video_bg_image']['id'] );
                            $vdScreenshot = ' style="background: url('.wsGetWebpSrcUrl($bannersec['video_bg_image']['id']).'); background-size: contain; background-repeat: no-repeat; background-position: center;"';
                        }
                        ?>
                        <div class="video-wrap">
                            <div class="videoSc" id="has-yt-video">
                                <div class="inner">
                                    <div class="topVideo">
                                        <div id="myDIV" class="contbox2">
                                            <div class="videoWrapper">
                                                <iframe id="video" class="videoIframe" allowfullscreen data-src="<?php echo $bannersec['video']; ?>">
                                                </iframe>
                                                <button class="videoPoster lazy-background wsbg-cover wsbg-img bg-trans" 
                                                data-src="<?php echo $cScreenSrc; ?>" id="play-button">
                                                    Play video
                                                <?php 
                                                if( $bannersec['video'] ){
                                                    echo '<span class="playicon"></span>';
                                                } 
                                                ?>                                                    
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
    <?php
        }
    endif; ?>


    <?php 
    $wsBenifits = get_field('ws-benefits');
    if( isset( $wsBenifits['is_enabled'] ) && ($wsBenifits['is_enabled'] == "yes") ){ 
    ?>
    <section class="benifits-section">
    <div class="container">
    <div class="top-section">
      <h6><span class="bg-purple"><?php echo $wsBenifits['heading']; ?></span></h6>
      <h2><?php echo $wsBenifits['sub_heading']; ?></h2>
    </div>
    <div class="flex_row">
    <?php 
    if( $wsBenifits['blocks'] ){  
    $i = 19;
    foreach( $wsBenifits['blocks'] as $row ) { 
    ?>    
      <div class="column-three">
        <?php
        if($row['icon']){
            echo pxlGetPtag($row['icon']);
        }else{
            echo '<i class="icon' . $i . '"></i>';
        }        
        echo $row['content'];
        ?>
      </div>
    <?php $i++; } } ?>
    </div>
    </div>
    </section>
    <?php 
    }
    ?>

    <section class="middle-section feature-section">
        <?php
        $financialmanage = get_field('financial_management');
        if ($financialmanage) :
            $isEnable = $financialmanage['is_enabled'];
            if ($isEnable == "yes") {
        ?>
                <div class="item" id="ws-financial_management">
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
                                            <?php if ($image) {
                                                echo '<picture class="page ' . $active . '" id="p' . $i . '" >
                            ' . getPxlWebpURL($image['ID']) . '
                            <source type="' . $image['mime_type'] . '" srcset="' . $image['url'] . '">
                            <img loading="lazy" src="' . $image['url'] . '" alt="' . $image['title'] . '" width="' . $image['width'] . '" 
                            height="' . $image['height'] . '"> 
                            </picture>';
                                            } ?>

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
                                            $active = ($i == 1) ? "active" : "";
                                    ?>
                                            <div class="all-content">
                                                <div class="text-column <?php echo $active; ?> <?php echo (strpos($row['content'], '<ul') !== false) ? ' listing ' : ''; ?>" id="t<?php echo $i; ?>" data-section="active_Current_Tabs1">
                                                    <h3><?php echo $row['heading']; ?></h3>
                                                    <?php echo $row['content']; ?>
                                                    <!-- 
                                                    <ul class="checkList">
                                                    <?php echo $row['checklist']; ?>
                                                    </ul>
                                                    -->
                                                </div>
                                                <div class="mob-image">
                                                    <?php if ($image) {
                                                        echo '<picture>
                            ' . getPxlWebpURL($image['ID']) . '
                            <source type="' . $image['mime_type'] . '" srcset="' . $image['url'] . '">
                            <img loading="lazy" src="' . $image['url'] . '" alt="' . $image['title'] . '" width="' . $image['width'] . '" 
                            height="' . $image['height'] . '"> 
                            </picture>';
                                                    } ?>
                                                </div>
                                            </div>
                                    <?php $i++;
                                        }
                                    } ?>
                                </div>
                            </div>
                        </div>
                        <?php 
                        /*
                        if ($financialmanage['top_button_text']) { ?>
                            <div class="mt40 btnSc">
                                <p><?php echo $financialmanage['top_button_text']; ?></p>
                                <a href="javascript:void(0)" onclick="call_demows();" class="primary_btn1"><?php echo $financialmanage['button_text']; ?></a>
                                <small><?php echo $financialmanage['bottom_button_text']; ?></small>
                            </div>
                        <?php } 
                        */
                        ?>
                        <div class="mt40 btnSc">
                        <?php echo wsDemoCta(); ?>
                        </div>
                    </div>
                </div>
        <?php
            }
        endif; ?>
        
        <?php
        $expense_management = get_field('expense_management');
        if ($expense_management) :
            $isEnable = $expense_management['is_enabled'];
            if ($isEnable == "yes") {
        ?>
                <div class="item" id="ws-expense_management">
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
                                        $i = 876;
                                        foreach ($expense_management['management'] as $row) {
                                            $image      = $row['image'];
                                            $active = ($i == 876) ? "active" : "";
                                    ?>
                                            <?php if ($image) {
                                                echo '<picture class="page ' . $active . '" id="p' . $i . '" >
                            ' . getPxlWebpURL($image['ID']) . '
                            <source type="' . $image['mime_type'] . '" srcset="' . $image['url'] . '">
                            <img loading="lazy" src="' . $image['url'] . '" alt="' . $image['title'] . '" width="' . $image['width'] . '" 
                            height="' . $image['height'] . '"> 
                            </picture>';
                                            } ?>

                                    <?php $i++;
                                        }
                                    } ?>
                                </div>
                                <div class="column-left">
                                    <?php
                                    if ($expense_management['management']) {
                                        $i = 876;
                                        foreach ($expense_management['management'] as $row) {
                                            $image      = $row['image'];
                                            $active = ($i == 876) ? "active" : "";
                                    ?>
                                            <div class="all-content">
                                                <div class="text-column <?php echo $active; ?> <?php echo (strpos($row['content'], '<ul') !== false) ? ' listing ' : ''; ?>" id="t<?php echo $i; ?>"  data-section="active_Current_Tabs2">
                                                    <h3><?php echo $row['heading']; ?></h3>
                                                    <?php echo $row['content']; ?>
                                                </div>


                                                <div class="mob-image">
                                                    <?php if ($image) {
                                                        echo '<picture>
                            ' . getPxlWebpURL($image['ID']) . '
                            <source type="' . $image['mime_type'] . '" srcset="' . $image['url'] . '">
                            <img loading="lazy" src="' . $image['url'] . '" alt="' . $image['title'] . '" width="' . $image['width'] . '" 
                            height="' . $image['height'] . '"> 
                            </picture>';
                                                    } ?>
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
        <?php
            }
        endif; ?>

        <?php 
        $dwnloadSection = get_field('download_section');
        if( isset($dwnloadSection['is_enabled']) && ($dwnloadSection['is_enabled'] == "yes") ) : 
        ?>
        <section class="dwnload post-animation">
        <div class="container">
        <div class="dis-flex">
        <div class="dwnleft">
        <h2><?php echo $dwnloadSection['heading']; ?></h2>
        <p><?php echo $dwnloadSection['content']; ?></p>
        </div>
        <div class="dwnright">
        <a href="<?php echo site_url( $dwnloadSection['link'] ); ?>" rel="nofollow" class="primary_btn1">Download eBook</a>
        </div>
        </div>
        </div>
        </section>
        <?php endif; ?>

        <?php
        $attendance_management = get_field('attendance_management');
        if ($attendance_management) :
            $isEnable = $attendance_management['is_enabled'];
            if ($isEnable == "yes") {
        ?>
                <div class="item" id="ws-attendance_management">
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
                                            <?php if ($image) {
                                                echo '<picture class="page ' . $active . '" id="p' . $i . '" >
                            ' . getPxlWebpURL($image['ID']) . '
                            <source type="' . $image['mime_type'] . '" srcset="' . $image['url'] . '">
                            <img loading="lazy" src="' . $image['url'] . '" alt="' . $image['title'] . '" width="' . $image['width'] . '" 
                            height="' . $image['height'] . '"> 
                            </picture>';
                                            } ?>

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
                                            $active = ($i == 7) ? "active" : "";
                                    ?>
                                            <div class="all-content">
                                                <div class="text-column <?php echo $active; ?> <?php echo (strpos($row['content'], '<ul') !== false) ? ' listing ' : ''; ?>" id="t<?php echo $i; ?>" data-section="active_Current_Tabs3">
                                                    <h3><?php echo $row['heading']; ?></h3>
                                                    <?php echo $row['content']; ?>
                                                </div>


                                                <div class="mob-image">
                                                    <?php if ($image) {
                                                        echo '<picture>
                            ' . getPxlWebpURL($image['ID']) . '
                            <source type="' . $image['mime_type'] . '" srcset="' . $image['url'] . '">
                            <img loading="lazy" src="' . $image['url'] . '" alt="' . $image['title'] . '" width="' . $image['width'] . '" 
                            height="' . $image['height'] . '"> 
                            </picture>';
                                                    } ?>
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
        }
        
        endif; ?>
        <?php
        $focus_management = get_field('focus_management');
        if ($focus_management) :
            $isEnable = $focus_management['is_enabled'];
            if ($isEnable == "yes") {
        ?>
                <div class="item" id="ws-focus_management">
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
                                            <?php if ($image) {
                                                echo '<picture class="page ' . $active . '" id="p' . $i . '" >
                            ' . getPxlWebpURL($image['ID']) . '
                            <source type="' . $image['mime_type'] . '" srcset="' . $image['url'] . '">
                            <img loading="lazy" src="' . $image['url'] . '" alt="' . $image['title'] . '" width="' . $image['width'] . '" 
                            height="' . $image['height'] . '"> 
                            </picture>';
                                            } ?>

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
                                            $active = ($i == 10) ? "active" : "";
                                    ?>
                                            <div class="all-content">
                                                <div class="text-column <?php echo $active; ?> <?php echo (strpos($row['content'], '<ul') !== false) ? ' listing ' : ''; ?>" id="t<?php echo $i; ?>" data-section="active_Current_Tabs4">
                                                    <h3><?php echo $row['heading']; ?></h3>
                                                    <?php echo $row['content']; ?>
                                                </div>


                                                <div class="mob-image">
                                                    <?php if ($image) {
                                                        echo '<picture>
                            ' . getPxlWebpURL($image['ID']) . '
                            <source type="' . $image['mime_type'] . '" srcset="' . $image['url'] . '">
                            <img loading="lazy" src="' . $image['url'] . '" alt="' . $image['title'] . '" width="' . $image['width'] . '" 
                            height="' . $image['height'] . '"> 
                            </picture>';
                                                    } ?>
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
            }
        endif; ?>

        <?php
        $ws_moreControl = get_field('more-control');
        if ($ws_moreControl) :
            $isEnable = $ws_moreControl['is_enabled'];
            if ($isEnable == "yes") {
        ?>
                <div class="item" id="ws-more-control">
                    <div class="container">
                        <div class="top-section">
                            <h6><span class="bg-purple"><?php echo $ws_moreControl['heading']; ?></span></h6>
                            <h2><?php echo $ws_moreControl['sub_heading']; ?></h2>
                            <p><?php echo $ws_moreControl['content']; ?></p>
                        </div>
                        <div id="active_Current_Tabs421">
                            <div class="flex_row">
                                <div class="column-right">
                                    <?php
                                    if ($ws_moreControl['management']) {
                                        $i = 180;
                                        foreach ($ws_moreControl['management'] as $row) {
                                            $image      = $row['image'];
                                            $active = ($i == 180) ? "active" : "";
                                    ?>
                                            <?php if ($image) {
                                                echo '<picture class="page ' . $active . '" id="p' . $i . '" >
                            ' . getPxlWebpURL($image['ID']) . '
                            <source type="' . $image['mime_type'] . '" srcset="' . $image['url'] . '">
                            <img loading="lazy" src="' . $image['url'] . '" alt="' . $image['title'] . '" width="' . $image['width'] . '" 
                            height="' . $image['height'] . '"> 
                            </picture>';
                                            } ?>

                                    <?php $i++;
                                        }
                                    } ?>
                                </div>
                                <div class="column-left">
                                    <?php
                                    if ($ws_moreControl['management']) {
                                        $i = 180;
                                        foreach ($ws_moreControl['management'] as $row) {
                                            $image      = $row['image'];
                                            $active = ($i == 180) ? "active" : "";
                                    ?>
                                            <div class="all-content">
                                                <div class="text-column <?php echo $active; ?> <?php echo (strpos($row['content'], '<ul') !== false) ? ' listing ' : ''; ?>" id="t<?php echo $i; ?>" data-section="active_Current_Tabs421">
                                                    <h3><?php echo $row['heading']; ?></h3>
                                                    <?php echo $row['content']; ?>
                                                </div>


                                                <div class="mob-image">
                                                    <?php if ($image) {
                                                        echo '<picture>
                            ' . getPxlWebpURL($image['ID']) . '
                            <source type="' . $image['mime_type'] . '" srcset="' . $image['url'] . '">
                            <img loading="lazy" src="' . $image['url'] . '" alt="' . $image['title'] . '" width="' . $image['width'] . '" 
                            height="' . $image['height'] . '"> 
                            </picture>';
                                                    } ?>
                                                </div>
                                            </div>
                                    <?php $i++;
                                        }
                                    } ?>
                                </div>
                            </div>
                        </div>
                        <?php /*if ($ws_moreControl['top_button_text']) { ?>
                            <div class="mt40 btnSc">
                                <p><?php echo $ws_moreControl['top_button_text']; ?></p>
                                <a href="javascript:void(0)" onclick="call_demows();" class="primary_btn1"><?php echo $ws_moreControl['button_text']; ?></a>
                                <small><?php echo $ws_moreControl['bottom_button_text']; ?></small>
                            </div>
                        <?php }*/ ?>
                        <div class="mt40 btnSc">
                        <?php echo wsDemoCta(); ?>
                        </div>
                    </div>
                </div>
        <?php
            }
        endif; ?>
    </section>
    <?php
    $secret_to_success = get_field('secret_to_success');
    if ($secret_to_success) :
        $isEnable = $secret_to_success['is_enabled'];
        if ($isEnable == "yes") {
    ?>
            <section class="trackEm">
                <div class="container">
                    <div class="top-section">
                        <h6><span class="bg-purple"><?php echo $secret_to_success['heading']; ?></span></h6>
                        <h2><?php echo $secret_to_success['sub_heading']; ?></h2>
                    </div>
                    <div class="trackRow">
                        <div class="trackImg">
                            <?php
                            $image = $secret_to_success['left_image'];
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
                            if ($secret_to_success['content_repeater']) {
                                foreach ($secret_to_success['content_repeater'] as $row) {
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
    <?php
        }
    endif; ?>
    <?php
    $accounts_team = get_field('accounts_team');
    if ($accounts_team) :
        $isEnable = $accounts_team['is_enabled'];
        if ($isEnable == "yes") {
    ?>
            <section class="timeline">
                <div class="container">
                    <div class="top-section">
                        <h6><span class="bg-purple"><?php echo $accounts_team['heading']; ?></span></h6>
                        <h2><?php echo $accounts_team['sub_heading']; ?></h2>
                    </div>
                    <div class="trackRow">
                        <div class="trackImg">
                            <?php
                            $image = $accounts_team['left_image'];
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
                            if ($accounts_team['content_repeater']) {
                                foreach ($accounts_team['content_repeater'] as $row) {
                            ?>
                                    <div class="row">
                                        <h3><?php echo $row['heading']; ?></h3>
                                        <p><?php echo $row['content']; ?> </p>
                                    </div>
                            <?php  }
                            } ?>
                        </div>
                    </div>
                </div>
            </section>
    <?php
        }
    endif; 
    get_template_part('common/ws', 'pricing');
    ?>
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
                                            <?php if ($image) {
                                                echo '<picture>
                            ' . getPxlWebpURL($image['ID']) . '
                            <source type="' . $image['mime_type'] . '" srcset="' . $image['url'] . '">
                            <img loading="lazy" src="' . $image['url'] . '" alt="' . $image['title'] . '" width="' . $image['width'] . '" 
                            height="' . $image['height'] . '"> 
                            </picture>';
                                            } ?>
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

    if ($faqs) :
        $isEnable = $faqs['is_enabled'];
        if ($isEnable == "yes") {
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
        }
    endif; ?>
    <?php require_once get_template_directory() . '/common/blog.php'; ?>
    <?php require_once get_template_directory() . '/common/workstatus-journey.php'; ?>
</main>
<?php get_footer(); ?>
<?php
/* 
Template Name: FAQs Template 
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
                    <h1><?php echo $banner_section['heading']; ?></h1>
                    <p><?php echo $banner_section['content']; ?></p>
                </div>
            </div>
        </section>
    <?php endif; ?>
    <?php
    $buyers_guide = get_field('buyers_guide');
    $bgEnabled         = $buyers_guide['is_enabled'];
    if ($bgEnabled == 'yes') :
    ?>
        <section class="userguide">
            <div class="container">
                <div class="buyers-guide-section" id="div-buyer-guide">
                    <div class="buyers-guide">
                        <div class="buyers-guide-question" id="buyers-guide-question">
                            <h2><?php echo $buyers_guide['heading']; ?></h2>
                            <ul class="question-list">
                                <?php
                                if ($buyers_guide['guide_repeater']) {
                                    $i = 1;
                                    foreach ($buyers_guide['guide_repeater'] as $row) {
                                        $active = ($i == 1) ? "active" : "";
                                ?>
                                        <li><a href="#ans_<?php echo $i; ?>" class="<?php echo $active; ?>"><?php echo $i; ?>. <?php echo $row['question']; ?></a>
                                        </li>
                                <?php $i++;
                                    }
                                } ?>
                            </ul>
                        </div>
                        <div class="buyers-guide-answer-part" id="buyers-guide-answer-part">
                            <?php
                            if ($buyers_guide['guide_repeater']) {
                                $i = 1;
                                foreach ($buyers_guide['guide_repeater'] as $row) {
                                    $image      = $row['image_'];
                                    $active = ($i == 1) ? "active" : "";
                            ?>

                                    <div class="buyers-guide-answer ans_<?php echo $i; ?>" id="ans_<?php echo $i; ?>">
                                        <h3 class="guide-question"><?php echo $i; ?>. <?php echo $row['question']; ?>
                                        </h3>
                                        <div class="guide-answer">
                                            <?php echo $row['answer']; ?>
                                        </div>
                                    </div>
                            <?php $i++;
                                }
                            } ?>
                        </div>
                    </div>
        </section>
    <?php endif; ?>
    <section class="wsMobile whitetxt">
        <?php require_once get_template_directory() . '/common/workstatus-device.php'; ?>
    </section>
    <?php require_once get_template_directory() . '/common/workstatus-journey.php'; ?>
</main>
<?php get_footer(); ?>
<?php
/* 
Template Name: Reviews Template 
Author : Gaurav K.
*/
get_header();
global $ws_ctas, $RegLink, $LogLink;
?>
<main class="site__content">
    <?php
    $top_section = get_field('top_section');
    $tsEnabled         = $top_section['is_enabled'];
    if ($tsEnabled == 'yes') :
    ?>
        <section class="hero-banner">
            <div class="container">
                <div class="inner-wrap">
                    <h1><?php echo $top_section['heading']; ?></h1>
                    <?php echo $top_section['content']; ?>
                </div>
            </div>
        </section>
    <?php endif; ?>
    <section class="reviews">
        <div class="container">
            <div class="flex_row justify-center">
                <div class="column">
                    <div class="flex_row align-center justify-center">
                        <a href="https://www.g2.com/products/valuecoders-workstatus/reviews" rel="nofollow">
                            <span class="logo-icon">
                                <i class="reviews-logo review-logo1"></i>
                                <i class="star-icon"></i>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="column">
                    <div class="flex_row align-center justify-center">
                        <a href="https://www.goodfirms.co/software/workstatus" rel="nofollow">
                            <span class="logo-icon">
                                <i class="reviews-logo review-logo2"></i>
                                <i class="star-icon"></i>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="column">
                    <div class="flex_row align-center justify-center">
                        <a href="https://www.sitejabber.com/reviews/workstatus.io" rel="nofollow">
                            <span class="logo-icon">
                                <i class="reviews-logo review-logo3"></i>
                                <i class="star-icon"></i>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="column">
                    <div class="flex_row align-center justify-center">
                        <a href="https://sourceforge.net/software/product/Workstatus/" rel="nofollow">
                            <span class="logo-icon">
                                <i class="reviews-logo review-logo4"></i>
                                <i class="star-icon"></i>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="column">
                    <div class="flex_row align-center justify-center">
                        <a href="https://www.wesuggestsoftware.com/project-management/workstatus/" rel="nofollow">
                            <span class="logo-icon">
                                <i class="reviews-logo review-logo5"></i>
                                <i class="star-icon"></i>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="column">
                    <div class="flex_row align-center justify-center">
                        <a href="https://www.saashub.com/workstatus-io-alternatives" rel="nofollow">
                            <span class="logo-icon">
                                <i class="reviews-logo review-logo6"></i>
                                <i class="star-icon star-icon2"></i>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="column">
                    <div class="flex_row align-center justify-center">
                        <a href="https://www.producthunt.com/posts/workstatus-employee-monitoring" rel="nofollow">
                            <span class="logo-icon">
                                <i class="reviews-logo review-logo7"></i>
                                <i class="star-icon star-icon3"></i>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="column">
                    <div class="flex_row align-center justify-center">
                        <a href="https://alternativeto.net/software/workstatus/" rel="nofollow">
                            <span class="logo-icon">
                                <i class="reviews-logo review-logo8"></i>
                                <i class="star-icon"></i>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
    $achievements = get_field('achievements');
    $aEnabled         = $achievements['is_enabled'];
    if ($aEnabled == 'yes') :
    ?>
        <section class=" review-section">
            <div class="container">
                <div class="top-section">
                    <h6><span class="bg-purple"><?php echo $achievements['heading']; ?></span></h6>
                    <h2><?php echo $achievements['sub_heading']; ?></h2>
                </div>
                <div class="flex_row">
                    <div class="column column-left">
                        <?php
                        if ($achievements['content_left']) {
                            foreach ($achievements['content_left'] as $row) {
                        ?>
                                <div class="box">
                                    <div class="blockquote">
                                        <h3><?php echo $row['heading']; ?></h3>
                                        <?php echo $row['content']; ?>
                                        <?php echo $row['client_info']; ?>
                                    </div>
                                </div>
                        <?php  }
                        } ?>
                    </div>
                    <div class="column column-right">
                        <?php
                        if ($achievements['content_right']) {
                            foreach ($achievements['content_right'] as $row) {
                                $image      = $row['image'];
                        ?>
                                <div class="box">
                                    <?php
                                    if ($image) {
                                        echo '<picture class="author-img">
                            ' . getPxlWebpURL($image['ID']) . '
                            <source type="' . $image['mime_type'] . '" srcset="' . $image['url'] . '">
                            <img loading="lazy" src="' . $image['url'] . '" alt="' . $image['title'] . '" width="' . $image['width'] . '" 
                            height="' . $image['height'] . '"> 
                            </picture>';
                                    } ?>
                                    <div class="blockquote">
                                        <h3><?php echo $row['heading']; ?></h3>
                                        <?php echo $row['content']; ?><p></p>
                                        <?php echo $row['client_info']; ?>
                                    </div>
                                </div>
                        <?php  }
                        } ?>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>
    <?php
    $testimonial = get_field('testimonial');
    $tEnabled         = $testimonial['is_enabled'];
    if ($tEnabled == 'yes') :
    ?>
        <section class="testimonial-section">
            <div class="container">
                <div class="flex_row">
                    <div class="column-img">
                        <?php
                        $image = $testimonial['left_image'];
                        if ($image) {
                            echo '<picture>
                            ' . getPxlWebpURL($image['ID']) . '
                            <source type="' . $image['mime_type'] . '" srcset="' . $image['url'] . '">
                            <img loading="lazy" src="' . $image['url'] . '" alt="' . $image['title'] . '" width="' . $image['width'] . '" 
                            height="' . $image['height'] . '"> 
                            </picture>';
                        } ?>
                    </div>
                    <div class="column-text">
                        <div class="textBox">
                            <?php echo $testimonial['comment']; ?>
                        </div>
                        <div class="authorBox">
                            <?php
                            $icon = $testimonial['icon'];
                            if ($icon) {
                                echo '<picture>
                            ' . getPxlWebpURL($icon['ID']) . '
                            <source type="' . $icon['mime_type'] . '" srcset="' . $icon['url'] . '">
                            <img loading="lazy" src="' . $icon['url'] . '" alt="' . $icon['title'] . '" width="' . $icon['width'] . '" 
                            height="' . $icon['height'] . '"> 
                            </picture>';
                            } ?>
                            <div class="author-content">
                                <h6><?php echo $testimonial['name']; ?></h6>
                                <p><?php echo $testimonial['location']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>
    <?php
    $recognition = get_field('recognition');
    $rEnabled         = $recognition['is_enabled'];
    if ($rEnabled == 'yes') :
    ?>
        <section class=" review-section">
            <div class="container">
                <div class="top-section">
                    <h6><span class="bg-purple"><?php echo $recognition['heading']; ?></span></h6>
                    <h2><?php echo $recognition['sub_heading']; ?></h2>
                </div>
                <div class="flex_row">
                    <div class="column column-left">
                        <?php
                        if ($recognition['column_left']) {
                            foreach ($recognition['column_left'] as $row) {
                                $image      = $row['image'];
                        ?>
                                <div class="box">
                                    <?php
                                    if ($image) {
                                        echo '<picture class="author-img">
                            ' . getPxlWebpURL($image['ID']) . '
                            <source type="' . $image['mime_type'] . '" srcset="' . $image['url'] . '">
                            <img loading="lazy" src="' . $image['url'] . '" alt="' . $image['title'] . '" width="' . $image['width'] . '" 
                            height="' . $image['height'] . '"> 
                            </picture>';
                                    } ?>
                                    <div class="blockquote">
                                        <h3><?php echo $row['heading']; ?></h3>
                                        <?php echo $row['content']; ?>
                                        <?php echo $row['client_info']; ?>
                                    </div>
                                </div>
                        <?php  }
                        } ?>
                    </div>
                    <div class="column column-right">
                        <?php
                        if ($recognition['column_right']) {
                            foreach ($recognition['column_right'] as $row) {
                                $image      = $row['image'];
                        ?>
                                <div class="box">
                                    <?php
                                    if ($image) {
                                        echo '<picture class="author-img">
                            ' . getPxlWebpURL($image['ID']) . '
                            <source type="' . $image['mime_type'] . '" srcset="' . $image['url'] . '">
                            <img loading="lazy" src="' . $image['url'] . '" alt="' . $image['title'] . '" width="' . $image['width'] . '" 
                            height="' . $image['height'] . '"> 
                            </picture>';
                                    } ?>
                                    <?php
                                    if ($row['heading']) { ?>
                                        <div class="blockquote">
                                            <h3><?php echo $row['heading']; ?></h3>
                                            <?php echo $row['content']; ?>
                                            <?php echo $row['client_info']; ?>
                                        </div>
                                    <?php } ?>
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
    <?php require_once get_template_directory() . '/common/workstatus-journey.php'; ?>
</main>
<?php get_footer(); ?>
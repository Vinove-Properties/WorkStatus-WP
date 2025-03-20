<?php
/* 
Template Name: Career Page Template 
Author : Gaurav K.
*/
get_header();
?>
<main class="site__content">
<section class="hero-banner">
    <div class="container">
        <div class="inner-wrap">
            <?php the_content(); ?>
            <div class="mt40"></div>
        </div>
    </div>
</section>
<section class="downloads">
    <div class="container">
        <div class="top-section">
            <h2>Open Positions</h2>
        </div>
        <?php 
        $openings = get_field('openings');
        if( $openings ){
        echo '<div class="career_row">';
        foreach( $openings as $row ){
            echo '<div class="row">
            <div class="job-row">
                <h3>'.$row['title'].'</h3>
                <p>'.$row['experience'].'</p>
            </div>
            <div class="apply-row"><a class="primary_btn1" href="'.$row['link'].'">Apply Now</a></div>
            </div>';
        }
        echo '</div>';
        }
        ?>
    </div>
</section>        
<?php require_once get_template_directory() . '/common/workstatus-journey.php'; ?>
</main>
<?php get_footer(); ?>
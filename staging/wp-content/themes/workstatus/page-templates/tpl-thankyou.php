<?php 
/*
Template Name: Thanks Template
*/
get_header();
?>
<main class="site__content">
<section class="background_blue thank_you <?php echo (!is_page(3407)) ? 'signup-thanks' : ''; ?>">
    <div class="firstbox">
    <?php 
    if( is_page(3407) ){
    echo '<h1 class="text_center white">THANK YOU!</h1>
    <p class="para_big text_center white">Thanks for your query. Our representative will get in touch with you soon</p>';
    }else{
    echo '<h1 class="text_center white">Thank You - Your registration was successful.</h1>
    <p class="para_big text_center white">As a next step, we\'ve sent you an email to confirm your email address. Once confirmed, you will be good to login & use the system.</p>';    
    }
    ?>        
    </div>
    <div class="secondbox">
        <a href="https://www.workstatus.io/" class="white_btn thank_youbtn">Go Back Home</a>
    </div>
</section>
</main>
<?php get_footer(); ?>
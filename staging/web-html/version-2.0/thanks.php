<?php require_once 'common/inc/config.inc.php'; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link type="text/css" href="assests/css/font-awesome.min.css" rel="preload stylesheet" defer />
    <link type="text/css" href="./assests/css/thanks.css" rel="preload stylesheet" defer />
    <link rel="shortcut icon" href="assests/images/favicon.svg" type="image/x-icon">  
    <?php require_once 'common/inc/meta.php'; ?> 
    </head>
    <body>
    <?php require_once 'common/inc/after-body-tag.php'; ?>
        <div class="body_wrapper">
        <div class="feature-header"><?php require_once 'common/header.php';?></div>
            <main class="site__content">
              <section class="background_blue thank_you">
                    <div class="firstbox">
                        <h1 class="text_center white">THANK YOU!</h1>
                        <p class="para_big text_center white">Thanks for your query. Our representative will get in touch with you soon</p>
                    </div>
                    <div class="secondbox">
                        <a href="https://www.workstatus.io/" class="white_btn thank_youbtn">
                            Go Back Home
                        </a>
                    </div>
              </section>
            
            </main>
            <?php require_once 'common/footer.php';?>
         </div>   
        <script type="text/javascript" src="assests/js/glider.min.js"></script>
        <script type="text/javascript" src="assests/js/script.js"></script>           
    </body>
</html>
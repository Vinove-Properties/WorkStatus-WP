<?php require_once 'common/inc/config.inc.php'; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="assests/images/favicon.svg" type="image/x-icon">  
    <link type="text/css" href="assests/css/font-awesome.min.css" rel="preload stylesheet" defer />
    <link type="text/css" href="./assests/css/404.css" rel="preload stylesheet" defer />
    <?php require_once 'common/inc/meta.php'; ?> 
    </head>
    <body>
    <?php require_once 'common/inc/after-body-tag.php'; ?>
        <div class="body_wrapper">
        <?php require_once 'common/header.php';?>
            <main class="site__content background_grey">
                <section class="error404">
                    <div class="not-found section">
                                <i class="fa fa-exclamation-circle"></i>
                                <h1 class="title ularge white"><strong>404</strong><br>Page not found</h1>
                            <div></div></div>
                        <div class="page-content">
                         <h2 class="text_center">Something's wrong here...</h2>
                            <p class="text_center">We can't find the page you're looking.</p>
                            <p class="text_center"><a href="https://www.workstatus.io/" class="primary_btn outline"><i class="fa fa-share fa-flip-horizontal"></i> Go back to home</a></p>
                        </div>
                    </section>
            </main>
            <?php require_once 'common/footer.php';?>
         </div>   
        <script type="text/javascript" src="assests/js/glider.min.js"></script>
        <script type="text/javascript" src="assests/js/script.js"></script>           
    </body>
</html>
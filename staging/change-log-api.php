<?php 
$ch = curl_init();
//curl_setopt($ch, CURLOPT_URL, "https://supiuybew.sqyehui.workstatus.io/api/v1/get-version");
//curl_setopt($ch, CURLOPT_URL, "https://supiuybew.sqyehui.workstatus.io/api/v1/get-version");
//curl_setopt($ch, CURLOPT_URL, "https://superadmin.workstatus.io/api/v1/get-version");
curl_setopt($ch, CURLOPT_URL, "https://superadmin.workstatus.io/api/v1/get-version");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$server_output  = curl_exec($ch);
$data           = json_decode( $server_output );
//echo '<pre>';
//print_r( json_decode($server_output) );
curl_close($ch);
//exit();

require_once 'common/inc/config.inc.php'; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link type="text/css" href="assests/css/font-awesome.min.css" rel="preload stylesheet" defer />
    <link type="text/css" href="./assests/css/changelog.css" rel="preload stylesheet" defer />
    <link rel="shortcut icon" href="assests/images/favicon.svg" type="image/x-icon">  
    <?php require_once 'common/inc/meta.php'; ?> 
    </head>
    <body>
    <?php require_once 'common/inc/after-body-tag.php'; ?>
        <div class="body_wrapper">
        <?php require_once 'common/header.php';?>
            <div class="toptext_section">
                <div class="triangleabout-top"></div>
                <div class="text">
                    <h1 class="text_center">Change-log/Revision History</h1>
                    <?php /* ?>
                    <p class="para_big text_center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <?php */ ?>
                </div>
                <div class="circleabout-right"></div>
                <div class="dots-right"></div>
            </div>
            <?php 
            //print_r( $data );
            if( isset( $data->code ) && ($data->code == 200) ) : ?>
            <div class="table_section">
                <table class="table1">
                    <thead>
                        <tr class="head_row">
                            <th class="border_th1"></th>
                            <th>Web Platform</th>
                            <th>iOS App</th>
                            <th>Android App</th>
                            <th>Mac App</th>
                            <th class="border_th2">Windows App</th>
                            <!-- <th width="110" class="border_th2">Linux</th>  -->
                        </tr>
                    </thead>
                    <tbody>
                    <?php  
                    $index = 0;
                    foreach( $data->data as $row ) : 
                    $index++;    
                    //echo '<pre>'; print_r( $row ); die; ?>    
                        <tr class="row1">
                            <td width="120" class="first"><h5><?php echo $row->phase ?></h5>
                            <i><p>Published on<br><?php echo date('jS M\'Y', strtotime($row->date)); ?></p></i>
                            </td>
                            <td>
                                <?php 
                                if( isset( $row->version_detail ) ){
                                    echo '<ul>';
                                    if( $row->version_detail->{'Web Platform'}->status == 1 ){
                                        echo '<li>'.$row->version_detail->{'Web Platform'}->version.'</li>';
                                        echo '<li>'.$row->version_detail->{'Web Platform'}->description.'</li>';
                                    }
                                    echo '</ul>';
                                }
                                ?>
                            </td>
                            <td>
                                <?php 
                                if( isset( $row->version_detail ) ){
                                    echo '<ul>';
                                    if( $row->version_detail->{'iOS App'}->status == 1 ){
                                        echo '<li>'.$row->version_detail->{'iOS App'}->version.'</li>';
                                        echo '<li>'.$row->version_detail->{'iOS App'}->description.'</li>';
                                    }
                                    echo '</ul>';
                                }
                                ?>
                            </td>
                            <td>
                                <?php 
                                if( isset( $row->version_detail ) ){
                                    echo '<ul>';
                                    if( $row->version_detail->{'Android App'}->status == 1 ){
                                        echo '<li>'.$row->version_detail->{'Android App'}->version.'</li>';
                                        echo '<li>'.$row->version_detail->{'Android App'}->description.'</li>';
                                    }
                                    echo '</ul>';
                                }
                                ?>
                            </td>
                            <td>
                                <?php 
                                if( isset( $row->version_detail ) ){
                                    echo '<ul>';
                                    if( $row->version_detail->{'Mac App'}->status == 1 ){
                                        echo '<li>'.$row->version_detail->{'Mac App'}->version.'</li>';
                                        echo '<li>'.$row->version_detail->{'Mac App'}->description.'</li>';
                                    }
                                    echo '</ul>';
                                }
                                ?>
                            </td>
                            <td>
                                <?php 
                                if( isset( $row->version_detail ) ){
                                    echo '<ul>';
                                    if( $row->version_detail->{'Windows App'}->status == 1 ){
                                        echo '<li>'.$row->version_detail->{'Windows App'}->version.'</li>';
                                        echo '<li>'.$row->version_detail->{'Windows App'}->description.'</li>';
                                    }
                                    echo '</ul>';
                                }
                                ?>
                            </td>
                            
                            <!--
                            <td>
                                <?php 
                                //print_r( $row->version_detail );
                                if( isset( $row->version_detail ) ){
                                    echo '<ul>';
                                    if( $row->version_detail->{'Linux'}->status == 1 ){
                                        echo '<li>'.$row->version_detail->{'Linux'}->version.'</li>';
                                        echo '<li>'.$row->version_detail->{'Linux'}->description.'</li>';
                                    }
                                    echo '</ul>';
                                }
                                ?>
                            </td>
                            -->
                        </tr>
                        
                        <tr id="tr-row-<?php echo $index; ?>" class="border_row">
                            <td class="first"></td>
                            <td class="release-note-row" colspan="5">
                              <div  id="showallnotes" class="allnotes">
                                <div class="full-content" style="display:none">
                                    <?php echo $row->release_note; ?>
                                    <a href="javascript:void(0)" class="note-link hide-fcontent" data-row="<?php echo $index; ?>">Hide Release Notes</a>
                                </div>
                                <div class="full-content-excerpt" style="display:block;">
                                <?php 
                                echo substr($row->release_note, 0, 100).'... <a href="javascript:void(0)" class="note-link hide-excerpt" data-row="'.$index.'">Show Release Notes</a>';
                                ?>                                        
                                </div>
                                </div>
                              <br>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <?php endif; ?>
            <section></section>
            <?php require_once 'common/footer.php';?>
         </div>   
        <script type="text/javascript" src="assests/js/glider.min.js"></script>
        <script type="text/javascript" src="assests/js/script.js"></script>
        <script type="text/javascript">
         document.addEventListener('click', function (event){
            var hider   = event.target;
            if(event.target.matches('a.hide-excerpt')){

                /*var fullContent = document.querySelectorAll(".full-content");
                for( var i = 0; i < fullContent.length; ++i ){
                    fullContent[i].classList.add('hider');
                }*/
                var tfull   = "#tr-row-"+hider.getAttribute('data-row')+" div.full-content";
                var texpr   = "#tr-row-"+hider.getAttribute('data-row')+" div.full-content-excerpt";
                document.querySelector(texpr).style.display="none";
                document.querySelector(tfull).style.display="block";
            }
            if(event.target.matches('a.hide-fcontent')){
                /*var fullContent = document.querySelectorAll(".full-content-excerpt");
                for( var i = 0; i < fullContent.length; ++i ){
                    fullContent[i].classList.add('hider');
                }*/
                var tfull   = "#tr-row-"+hider.getAttribute('data-row')+" div.full-content";
                var texpr   = "#tr-row-"+hider.getAttribute('data-row')+" div.full-content-excerpt";
                document.querySelector(texpr).style.display="block";
                document.querySelector(tfull).style.display="none";
            }
         });
        </script>       
    </body>
</html>
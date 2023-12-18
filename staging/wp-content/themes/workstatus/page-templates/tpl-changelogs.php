<?php
/* 
Template Name: Change Logs Template 
Author : Nitin Baluni
*/
get_header();
global $ws_ctas, $RegLink, $LogLink, $post;
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://superadmin.workstatus.io/api/v1/get-version");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$server_output  = curl_exec($ch);
$data           = json_decode( $server_output );
curl_close($ch);
?>
<!-- 
<div class="toptext_section">
    <div class="triangleabout-top"></div>
    <div class="text">
    <h1 class="text_center">Change-log/Revision History</h1>                    
    </div>
    <div class="circleabout-right"></div>
    <div class="dots-right"></div>
</div> 
-->
<div class="log-header">
        <h1>Change-Log/Revision History</h1>
</div>
<?php 
//print_r( $data ); die;
if( isset( $data->code ) && ($data->code == 200) ) : ?>
<div class="table_section git-update">
    <div class="container">
    <table class="table1">
        <thead>
            <tr class="head_row">
                <th class="border_th1"></th>
                <th>Web Platform</th>
                <th>iOS App</th>
                <th>Android App</th>
                <th>Mac App</th>
                <th >Windows App</th>
                <th class="border_th2">Linux</th>
            </tr>
        </thead>
        <tbody>
        <?php  
        $index = 0;
        foreach( $data->data as $row ) : 
        $index++;
        //echo '<pre>'; print_r( $row ); die; ?>    
            <tr id="tr-row-<?php echo $index; ?>" class="row1">
                <td class="first"><h5><?php echo $row->phase ?></h5>
                <i><p>Published on <br><?php echo date('jS M\'Y', strtotime($row->date)); ?></p></i>
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

                    <div id="showallnotes" class="allnotes" style="margin-top:15px;">
                    <div class="full-content" 
                    id="node-log-<?php echo $index; ?>"
                    data-phase="<?php echo $row->phase ?>"
                    data-platform="<?php echo isset( $row->version_detail ) ? $row->version_detail->{'Web Platform'}->version : ''; ?>"
                    data-publish="<?php echo date('jS M\'Y', strtotime($row->date)); ?>"
                    style="display:none"><?php echo $row->release_note; ?></div>
                    <div class="full-content-excerpt" style="display:block;">
                    <?php 
                    echo substr($row->release_note, 0, 100).'... <a href="javascript:void(0)" onclick="popReleaseNote('.$index.')" class="note-link hide-excerpt" data-row="'.$index.'">Show Release Notes</a>';
                    ?>                                        
                    </div>
                    </div>
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
                
                
                <td>
                    <?php 
                    /*echo '<pre>';
                    print_r( $row->version_detail );
                    echo '</pre>';*/
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
                
            </tr>
            
            
            <?php endforeach; ?>
        </tbody>
    </table>
    </div>
</div>
<?php endif; ?>
<div class="banner-form chlog-popup">
  <div id="chlog-popup" class="popup-wrapper" style="display:none;">
    <div class="popWrap">
      <div class="popup-content">
      <span class="closeicon" id="close-cl-pop"></span>
        <div class="head-top">
          <h3>Release Notes </h3>
          <div class="phase-sec">
            <div class="flex-2">
                <h4 id="cl-phase">Phase #7.3</h4>
                <p id="cl-date">Published on 4th Dec'2023</p>
            </div>
            <div class="flex-2" id="cl-platform">
                <h4 id="cl-platform">Web Platform</h4>
                <p id="cl-version">Version 3.1</p>
            </div>
          </div>
        </div>
        <div class="change-content">
          <div class="content-wrap" id="cl-content"></div>
          <div class="ctasec">
          <a href="javascript:void(0);" class="primary_btn1" onclick="_hideCLpopup();">Hide Release Notes</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
 // document.addEventListener('click', function (event){
 //    var hider   = event.target;
 //    if(event.target.matches('a.hide-excerpt')){

 //        /*var fullContent = document.querySelectorAll(".full-content");
 //        for( var i = 0; i < fullContent.length; ++i ){
 //            fullContent[i].classList.add('hider');
 //        }*/
 //        var tfull   = "#tr-row-"+hider.getAttribute('data-row')+" div.full-content";
 //        var texpr   = "#tr-row-"+hider.getAttribute('data-row')+" div.full-content-excerpt";
 //        document.querySelector(texpr).style.display="none";
 //        document.querySelector(tfull).style.display="block";
 //    }
 //    if(event.target.matches('a.hide-fcontent')){
 //        /*var fullContent = document.querySelectorAll(".full-content-excerpt");
 //        for( var i = 0; i < fullContent.length; ++i ){
 //            fullContent[i].classList.add('hider');
 //        }*/
 //        var tfull   = "#tr-row-"+hider.getAttribute('data-row')+" div.full-content";
 //        var texpr   = "#tr-row-"+hider.getAttribute('data-row')+" div.full-content-excerpt";
 //        document.querySelector(texpr).style.display="block";
 //        document.querySelector(tfull).style.display="none";
 //    }
 // });

function popReleaseNote( indx ){
    var thisDom     = document.getElementById('node-log-'+indx);
    var clContent   = document.getElementById('cl-content');

    let pubDate     = thisDom.getAttribute('data-publish');
    let pubPhase    = thisDom.getAttribute('data-phase');
    let pubVersion  = thisDom.getAttribute('data-platform');

    clContent.innerHTML = thisDom.innerHTML;
    document.getElementById('cl-phase').innerHTML = pubPhase;
    document.getElementById('cl-date').innerHTML = pubDate;
    document.getElementById('cl-version').innerHTML = pubVersion;
    

    document.getElementById('chlog-popup').style.display = 'block';
    //console.log( thisDom );
}

function _hideCLpopup(){
    document.getElementById('chlog-popup').style.display = 'none';
}
const clPopup = document.getElementById('close-cl-pop');
clPopup.addEventListener("click", function(){
    document.getElementById('chlog-popup').style.display = 'none';
});
</script>                   
<?php get_footer(); ?>
<?php 
function wsHasData( $array, $key ){
    return (isset($array[$key]) && !empty($array[$key])) ? $array[$key] : '';
}

function isBetaVersion(){
  return ( isset( $_SERVER['PHP_SELF'] ) && (strpos( $_SERVER['PHP_SELF'], 'w2wp' ) !== false) )  ?  true : false;
}

$dir      = '/home/workforestc/public_html/uploads/';
if( isset( $_SERVER['HTTP_HOST'] ) && ($_SERVER['HTTP_HOST'] == "localhost") ){
  $site_url = 'http://localhost/workstatus-wp/';
  $tpl_url  = 'http://localhost/workstatus-wp/wp-content/themes/workstatus/';
  $dir      = '/var/www/html/workstatus-wp/uploads/';
}else{
  if( isBetaVersion() ){
    $site_url = 'https://www.workstatus.io/w2wp/';
    $tpl_url  = 'https://www.workstatus.io/w2wp/wp-content/themes/workstatus/';  
  }else{
    $site_url = 'https://www.workstatus.io/';
    $tpl_url  = 'https://www.workstatus.io/wp-content/themes/workstatus/';    
  }  
}

define( '_ws_upload_dir', $dir );
define( '_ws_siteurl', $site_url );
define( '_ws_themeurl', $tpl_url );

if( isset( $_POST['is-submitted'] ) && $_POST['is-submitted'] == true ){
  //echo '<pre>'; print_r($_POST); echo '</pre>'; die;

  $attachment = [];
  $postData = array(
    'title'         => wsHasData($_POST, 'title'),
    'description'   => wsHasData($_POST, 'user-req'),    
    'email'         => wsHasData($_POST, 'email'),
    'severity'      => wsHasData($_POST, 'severity'),
    'reproducible'  => wsHasData($_POST, 'reproducible'),
    'platform'      => wsHasData($_POST, 'platform'),
  );
  if( isset( $_POST['Uploadedfilename'] ) && !empty( $_POST['Uploadedfilename'] ) ){
    $inMedia  = rtrim( $_POST['Uploadedfilename'], ',' );
    $media    = explode( ",", $inMedia );
    foreach( $media as $index => $file ){
      $uploadFile = _ws_upload_dir.$file;
      $postData["attachments[{$index}]"] = new CURLFILE( $uploadFile );
    }
  } 
  //echo '<pre>'; print_r( $postData ); die;
  

  $curl = curl_init();
  curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://superadmin.workstatus.io/api/v1/report-bug',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => $postData,
));
$response = curl_exec($curl);
curl_close($curl);
$json = json_decode( $response );
//print_r( $json ); die;
if(property_exists($json, 'errors')){
  foreach( $json->errors as $error ){
    echo '<span style="color:red; display:block;">'.$error[0].'</span>';
  }
die;
}else{
header('location:thanks'); exit();
}
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?php echo _ws_themeurl; ?>assests/images/favicon.png" type="image/x-icon">
    <link type="text/css" href="<?php echo _ws_themeurl; ?>assests/css/report-bug.css?var=<?php echo time(); ?>" rel="preload stylesheet" as="style" />    
    <script>
      (function(w, d, s, l, i) {
          w[l] = w[l] || [];
          w[l].push({
              'gtm.start': new Date().getTime(),
              event: 'gtm.js'
          });
          var f = d.getElementsByTagName(s)[0],
              j = d.createElement(s),
              dl = l != 'dataLayer' ? '&l=' + l : '';
          j.async = true;
          j.src =
              'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
          f.parentNode.insertBefore(j, f);
      })(window, document, 'script', 'dataLayer', 'GTM-NPPMGZH');
    </script>
    <!-- End Google Tag Manager -->
    <style type="text/css">
    #ffile-type-error{font-size: 12px; color: red; margin-bottom: 10px;}
    </style>
  </head>
  <body>
  <div class="report-form">
        <div class="container">
        <div class="form-outer">
        <h2>Submit <span class="purple">Issue</span></h2>
        <form id="contact-form-section" action="<?php echo _ws_siteurl; ?>report-bugs.php"
          enctype="multipart/form-data" method="POST" name="footerform" onsubmit="return bugReportValidation();">
          <div class="form-wrap">
            <div class="form-group width-full">
              <label>Issue Title*</label>
              <input type="text" id="fcont_name" placeholder="" name="title">
              <span class="errors"></span>
            </div>
            <div class="form-group width-full">
              <label>Issue Description</label>
              <div class="user-textarea">
                <textarea class="input-field comment-input" placeholder="Project Brief" id="fuser-req" name="user-req"></textarea>
                <span class="errors"></span>
                <div class="drop-input attachment_brw" id="fuploadcontact"></div>
                <div id="drop-areas" class="drop-area-box">
                  <input type="file" class="browse-hide" name="files[]" id="ffileElem" multiple accept=".jpg, .jpeg, .png , .pdf , .docx , .doc" onchange="fhandleFiles(this.files)">
                  <button class="browse-btn" for="ffileElem" id="footer-browse-btn" type="button" 
                    onclick="document.getElementById('ffileElem').click()">BROWSE | DROP FILES HERE</button>
                  <input type="hidden" name="up-counter" id="fuplcounter" value="0">
                  <progress style="display:none;" id="fprogress-bar" max=100 value=0></progress>
                </div>
              </div>
            </div>
            <div id="fgloader" class="gal-loader">
              <div class="loader"></div>
              <div id="fgallery"></div>
            </div>
            <p id="ffile-type-error"></p>
            <div class="bug-wrap">
                  <div class="form-group">
                    <div class="info-wrap"><label>Email address* <i class="info"><div class="mailinfo">
                    Note: Email ID is used to know the reporter of this bug. Submitting your email ID will not add you as a user or give you access to portal data.
</div></i></label></div>
                    <input  type="text"  id="fcont_email" placeholder="Enter your email address" name="email" maxlength="50">
                    <span class="errors"></span>
                  </div>
                  <div class="form-group w-20">
                    <label>Severity</label>
                    <div class="styled-select">
                      <select name="severity">
                      <option value="">None</option>
                      <option value="Show stopper">Show stopper</option>
                      <option value="Critical">Critical</option>
                      <option value="Major">Major</option>
                      <option value="Minor">Minor</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group w-20">
                    <label>Reproducible</label>
                    <div class="styled-select">
                      <select name="reproducible">
                        <option value="">None</option>
                        <option value="Always">Always</option>
                        <option value="Sometimes">Sometimes</option>
                        <option value="Rarely">Rarely</option>
                        <option value="Unable">Unable</option>
                        <option value="Never tried">Never tried</option>
                        <option value="Not applicable">Not applicable</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group w-20">
                    <label>Platform(s)*</label>
                    <div class="styled-select">
                      <select name="platform" id="error-platform">
                        <option value="">Select</option>
                        <option value="iOS">iOS</option>
                        <option value="Android">Android</option>
                        <option value="Website">Website</option>
                        <option value="Windows">Windows</option>
                        <option value="Linux">Linux</option>
                        <option value="Mac">Mac</option>
                      </select>
                      <span class="errors"></span>
                    </div>
                  </div>
                </div>
            
            <div class="form-group width-full">
                <label>Enter Captcha</label>
                  <div class="captForm">
                  
                   
                    <div class="form-capt">
                      <div class="quizQ">
                        <span id="f-quizz"></span>
                        <a href="javascript:void(0)" class="refreshbtn"
                          onclick="fgenerateWsQuizz()"></a>
                      </div>
                      <div class="quizAns">
                        <input type="text" name="captcha" placeholder="??" id="f-quiz-ans"
                          onkeypress="fcap_limit(this);">
                        <span class="error" id="fcaptchaerror"></span>
                      </div>
                    </div>
                    <div class="form-btn">
                      <input type="hidden" name="Uploadedfilename" id="fUploadedfilename" value="">
                      <input type="hidden" name="is-submitted" value="true">
                      <input type="hidden" name="formname" value="footer-form">
                      <input type="hidden" name="user-country" id="cont_countrys" value="">
                      <button type="submit" class="btn" id="submitButtons" name="submit">Save</button>
                    </div>
                  </div>                  
                </div>            
          </div>
        </form>
      </div>
    </div>
  </div> 
<script data-cfasync="false" src="assests/js/footer-validation.js"></script>
</body>
</html>
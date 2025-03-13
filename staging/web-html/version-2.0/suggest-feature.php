<?php require_once 'common/inc/config.inc.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="alternate" href="<?php echo SITE_URL; ?>/pricing" hreflang="en-us" />
    <link type="text/css" href="assests/css/index.css" rel="preload stylesheet" as="style" />
    <?php require_once 'common/inc/header-files.php';?>
    <!-- Google Tag Manager -->
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
  </head>
  <body class="chat-hide">
  <div class="banner-form feature-form">
  <div id="featurePopup" class="popup-wrapper" style="display:block; background:#ffffff;">
    <div class="popWrap">
      <div class="popup-content">
        <div class="top-section">
          <div class="top-section">
            <h2>Suggest A <span class="purple">Feature</span></h2>
          </div>
        </div>
        <form id="contact-form-section" action="<?php echo SITE_URL; ?>/task-submission.php"
          enctype="multipart/form-data" method="POST" name="footerform" onsubmit="return fvcCmnFormValidation();">
          <div class="form-wrap">
            <div class="form-group width-full">
              <label>Feature Description*</label>
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
            <div class="form-group">
              <label>First Name*</label>
              <input type="text"  id="fcont_name" placeholder="Enter your first name" name="fname" maxlength="30">
              <span class="errors"></span>
            </div>
            <div class="form-group">
              <label>Email address*</label>
              <input  type="text"  id="fcont_email" placeholder="Enter your email address" name="email" maxlength="50">
              <span class="errors"></span>
            </div>
            <div class="form-group">
              <label>Phone no*</label>
              <div class="user-input" id="pflag-id">
                <input id="fpcode" type="text" name="cprefix"
                  class="pcode-prefix"
                  onkeydown="javascript:if(event.keyCode != 9) return false;" onmousedown="return false;">
                <input id="fcont_phpne" type="tel" name="phone" maxlength="12" class="input-field">
                <span class="errors" id="phoneno"></span>
              </div>
            </div>
            <div class="form-group companygroup">
              <label>How important is this to you</label>
                <div class="switch-field">
                  <input type="radio" id="radio-one" class="custom-radio" name="switch-one" value="Good to have" checked>
                  <label for="radio-one">Good to have</label>
                  <input type="radio" id="radio-two" class="custom-radio" name="switch-one" value="Must have">
                  <label for="radio-two">Must have</label>
                </div>
            </div>
            <div class="form-group">
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
              </div>
            </div>
            <div class="form-group justify">
              <input type="hidden" name="Uploadedfilename" id="fUploadedfilename" value="">
              <input type="hidden" name="is-submitted" value="true">
              <input type="hidden" name="formname" value="footer-form">
              <input type="hidden" name="user-country" id="cont_countrys" value="">
              <button type="submit" class="btn" id="submitButtons" name="submit">Submit Request</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>  
<script data-cfasync="false" src="assests/js/intlTelInput.js"></script>
<script data-cfasync="false" src="assests/js/footer-validation.js"></script>
</body>
</html>
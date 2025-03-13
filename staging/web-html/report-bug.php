<?php require_once 'common/inc/config.inc.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="alternate" href="<?php echo SITE_URL; ?>/pricing" hreflang="en-us" />
    <link type="text/css" href="assests/css/report-bug.css" rel="preload stylesheet" as="style" />
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
  <body>
    <div class="report-form">
      <div class="container">
  <div class="form-outer">
                <h2>Submit <span class="purple">Issue</span></h2>
            <form id="contact-form-section" action="<?php echo SITE_URL; ?>/task-submission.php"
              enctype="multipart/form-data" method="POST" name="footerform" onsubmit="return fvcCmnFormValidation();">
              <div class="form-wrap">
                <div class="form-group width-full">
                  <label>Issue Title*</label>
                  <input type="text"  id="fcont_name" placeholder="" name="isuetitle*">
                  <span class="errors"></span>
                </div>
                <div class="form-group width-full">
                  <label>Issue Description</label>
                  <div class="user-textarea">
                    <textarea class="input-field comment-input" placeholder="" id="fuser-req" name="user-req"></textarea>
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
                      <select property="voucherCategoryClass">
                        <option value="Select">Select </option>
                        <option value="steam">steam </option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group w-20">
                    <label>Reproducible</label>
                    <div class="styled-select">
                      <select property="voucherCategoryClass">
                        <option value="Select">Select </option>
                        <option value="steam">steam </option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group w-20">
                    <label>Platform(s)*</label>
                    <div class="styled-select">
                      <select property="voucherCategoryClass">
                        <option value="Select">Select </option>
                        <option value="steam">steam </option>
                      </select>
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
                    <div class="form-btn"><button type="submit" class="btn" id="submitButtons" name="submit">Save</button></div>
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
<?php @session_start(); ?>
<div class="banner-form">
  <div id="formPopup" class="popup-wrapper <?php echo ( isset( $_GET['book-demo'] ) ) ? 'is-active' : ''; ?>">
    <div class="popWrap">
      <div class="popup-content">
        <span class="closeicon"></span>
        <div class="top-section">
          <div class="top-section">
            <h2>Let us take you on a personalized <span class="purple">virtual<br class="linebrk"> tour of Workstatus</span></h2>
          </div>
        </div>
        <form method="post" id="ws-lead-form" action="<?php bloginfo('url'); ?>/thanks-demo-submission.php" onsubmit="return vcCmnFormValidation();">
          <div class="form-wrap">
            <div class="form-group">
              <label>First Name*</label>
              <input type="text"  id="first_name" placeholder="Enter your first name" name="fname" maxlength="30">
              <span class="error"></span>
            </div>
            <div class="form-group">
              <label>Last Name*</label>
              <input  type="text"  id="last_name" placeholder="Enter your last name" name="lname" maxlength="30">
              <span class="error"></span>
            </div>
            <div class="form-group">
              <label>Email address*</label>
              <input  type="text"  id="cont_email" placeholder="Enter your email address" name="email" maxlength="50">
              <span class="error"></span>
            </div>
            <div class="form-group">
              <label>Phone no*</label>
              <div class="user-input">
                <input id="pcode" type="tel" name="cprefix" maxlength="5" class="pcode-prefix"
                  onkeydown="javascript:if(event.keyCode != 9) return false;" onmousedown="return false;">
                <input id="cont_phpne" type="tel" name="phone" maxlength="12" class="input-field">
                <span class="errors" id="phone-error"></span>
              </div>
            </div>
            <div class="form-group companygroup">
              <label>Company Name*</label>
              <input type="text" name="company"  maxlength="100" class="form-control" id="company_name" placeholder="Enter company name">
              <span class="error"></span>
            </div>
            <div class="form-group">
              <div id="help-ul" class="form-text-cont width-full">
                <label>Select company headcount*</label>
                <div class="select-box active input-field" onclick="apnSelect('help-ul');">
                  <input type="hidden" id="team-size" name="team-size" value="">
                  <span class="error"></span>
                  <a href="javascript:void(0);" class="select-first" id="label-wehelp">Select company headcount</a> 
                  <span class="arrow-btn"></span>
                </div>
                <div class="select-list">
                  <ul class="in-options">
                    <li onclick="setoptValue('Self-employed', 'label-wehelp', 'team-size', 'help-ul');">Self-employed</li>
                    <li onclick="setoptValue('1-10', 'label-wehelp', 'team-size', 'help-ul');">1-10</li>
                    <li onclick="setoptValue('11-50', 'label-wehelp', 'team-size', 'help-ul');">11-50</li>
                    <li onclick="setoptValue('51-200', 'label-wehelp', 'team-size', 'help-ul');">51-200</li>
                    <li onclick="setoptValue('201-500', 'label-wehelp', 'team-size', 'help-ul');">201-500</li>
                    <li onclick="setoptValue('501-1000', 'label-wehelp', 'team-size', 'help-ul');">501-1000</li>
                    <li onclick="setoptValue('1001-5000', 'label-wehelp', 'team-size', 'help-ul');">1001-5000</li>
                    <li onclick="setoptValue('5001-10000', 'label-wehelp', 'team-size', 'help-ul');">5001-10000</li>
                    <li onclick="setoptValue('10000+', 'label-wehelp', 'team-size', 'help-ul');">10000+</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="form-group width-full">
              <label>Please tell us about your requirements*</label>
              <textarea class="input-field" name="requirement" id="ws-requirement" 
                placeholder="Enter your requirement"></textarea>
              <span class="error"></span>
            </div>
            <div class="padd">
              <p><input class="mcheck" name="checkbox" type="checkbox" value="1" checked="">By filling this form, you agree to our&nbsp;<a href="https://www.workstatus.io/privacy-policy" rel=" noopener">Privacy Policy</a></p>
            </div>
            <div class="captForm">
              <div class="form-group">
                <div class="quizQ">
                  <span id="j-quiz">7 + 7</span>
                  <a href="javascript:void(0)" class="refreshbtn" onclick="generateWsQuiz()"></a>
                </div>
                <div class="quizAns">
                  <input type="text" name="captcha" placeholder="??" id="j-quiz-ans" onkeypress="ws_numcheck(event,this);">
                  <span class="error" id="captchaerror"></span>
                </div>
              </div>
              <div class="form-group justify">
                <input type="hidden" name="pageurl" 
                value="<?php 
                if( isset( $_GET['book-demo']) ){
                  echo add_query_arg( array('book-demo' => ''), get_permalink() );
                }else{
                  echo get_permalink();
                }                
                ?>">
                <input type="hidden" name="tracking_ip" value="<?php echo getUserIP();?>">
                <input type="hidden" name="referalurl" value="<?php echo (isset($_SESSION['referer']) && !empty($_SESSION['referer'])) ? $_SESSION['referer'] : ''; ?>">
                <input type="hidden" name="utm_source" value="<?php echo isset( $_SESSION['_utmsource'] ) ? $_SESSION['_utmsource'] : ''; ?>">
                <input type="hidden" name="utm_medium" value="<?php echo isset( $_SESSION['_utmmedium'] ) ? $_SESSION['_utmmedium'] : ''; ?>">
                <input type="hidden" name="utm_campaign" value="<?php echo isset( $_SESSION['_utmcampaign'] ) ? $_SESSION['_utmcampaign'] : ''; ?>">
                <input type="hidden" name="is-submitted" value="true">
                <input type="hidden" name="user-country" id="cont_country" value="">
                <button type="submit" class="btn" id="submitButton" name="submit">Book My Demo Now</button>
              </div>
            </div>
            <span class="note">Note : We Respect Your Privacy! Your details will never be shared with anyone for marketing purposes.</span>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
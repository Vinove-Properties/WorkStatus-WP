<div class="popup-form free-demopop">
<div id="cmnLeadForm" class="popup-wrapper nanovar5" style="display:none">
<div class="popWrap">
  <div class="popup-content">
    <span class="closeicon-sg" onclick="getCmnLeadForm(false);"></span>
    <div class="col">
      <div class="top-section"><h2>Contact Us</h2></div>
      <div class="sigupform">
        <form id="cmn-lead-form" method="POST" action="<?php echo site_url('/sendmail.php'); ?>" 
          onsubmit="return cmnFormHandler();">
          <div class="signwrap d-flex">
            <div class="form-group">
              <input type="text" id="cmn-name" name="fname" class="" placeholder="Full Name">
              <span class="error"></span>
            </div>

            <div class="form-group">
              <input type="email" name="ws-email" id="cmn-email" class="emailfld" placeholder="Email">
              <span class="error"></span>
            </div>

            <div class="form-group">
            <div class="user-input" id="incmn-pcode">
            <input id="cmn-pcode" type="tel" name="cprefix" maxlength="5" class="pcode-prefix" onkeydown="javascript:if(event.keyCode != 9) return false;" tabindex="-1" onmousedown="return false;">
            <input id="cmn-phone" type="tel" name="phone" maxlength="12" class="input-field" placeholder="Phone Number*">
            <span class="errors" id="cmn-phone-error"></span>
            </div>
            </div>

            <div class="form-group">
              <textarea class="textarea-input" id="cmn-req" placeholder="Project Brief" name="requirement"></textarea>
              <span class="error"></span>
            </div>            
          </div>

          <div class="signwrap">
            <div class="formcheck">
              <p><input class="mcheck" name="checkbox" type="checkbox" value="1" checked="">By filling this form, you agree to our&nbsp;<a href="https://www.workstatus.io/privacy-policy" rel=" noopener">Privacy Policy</a></p>
            </div>
          </div>
          <div class="signwrap">
            <input type="hidden" name="pageurl" value="<?php the_permalink(); ?>">
            <input type="hidden" name="is-submitted" value="1">
            <button type="submit" id="cmn-frm-btn" class="signupbtn">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
</div>
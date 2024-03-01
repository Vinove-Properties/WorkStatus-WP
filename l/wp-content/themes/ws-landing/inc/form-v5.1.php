<?php global $ws_utm; ?>
<form name="theForm" method="post" id="ws-lead-form" action="<?php echo site_url('/thanks'); ?>" onsubmit="return vcCmnFormValidation();">
<div class="form-wrap">
    <div class="form-group">
      <input type="text" id="first_name" placeholder="Full Name*" name="fname"
        maxlength="30" />
      <span class="error"></span>
    </div>
    <div class="form-group">
      <input type="text" id="cont_email" placeholder="E-Mail*" name="email"
        maxlength="50" />
      <span class="error"></span>
    </div>
    <div class="form-group">
      <div class="user-input">
        <input id="pcode" type="tel" name="cprefix" maxlength="5" class="pcode-prefix" onkeydown="javascript:if(event.keyCode != 9) return false;" tabindex="-1" onmousedown="return false;">
        <input id="cont_phpne" type="tel" name="phone" maxlength="12" class="input-field" placeholder="Phone Number*">
        <span class="errors" id="phone-error"></span>
      </div>
    </div>
    <div class="form-group companygroup">
      <input type="text" name="company" maxlength="100" class="form-control" id="company_name"
        placeholder="Company Name*" />
      <span class="error"></span>
    </div>
    <div class="form-group">
   <div id="help-ul" class="form-text-cont width-full">
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
   <textarea class="input-field" name="requirement" id="ws-requirement" placeholder="Please tell us about your requirements*"></textarea>
     <span class="error"></span>
 </div>

    <div class="form-group popfull">
      <div class="padd">
        <p><input class="mcheck" id="checkId" name="checkbox" type="checkbox" value="1" checked="">By filling this form, you agree to our&nbsp;<a href="https://www.workstatus.io/privacy-policy" rel=" noopener">Privacy Policy</a></p>
        <span class="error" id="checkerror"></span>
      </div>
    </div>
    <div class="form-group popfull">
      <div class="captForm">
        <div class="quizQ">
          <span id="j-quiz">9 + 7</span>
          <a href="javascript:void(0)" ;="" class="refreshbtn" onclick="generateWsQuiz();"></a>
        </div>
        <div class="quizAns">
          <input type="text" name="captcha" placeholder="??" id="j-quiz-ans" onkeypress="ws_numcheck(event,this);">
          <span class="error" id="captchaerror"></span>
        </div>
      </div>
      <div class="form-group popfull">   
        <input type="hidden" name="pageurl" value="<?php ws_current_page_url(); ?>">
        <input type="hidden" name="tracking_ip" value="<?php echo wpgetUserIP();?>">
        <input type="hidden" name="referalurl" value="<?php echo $referl;?>">
        <input type="hidden" name="is-submitted" value="true">
        <input type="hidden" name="utm_source" 
          value="<?php echo isset( $ws_utm['utm_source'] ) ? $ws_utm['utm_source'] : ''; ?>">
        <input type="hidden" name="utm_medium" 
          value="<?php echo isset( $ws_utm['utm_medium'] ) ? $ws_utm['utm_medium'] : ''; ?>">
        <input type="hidden" name="utm_campaign" 
          value="<?php echo isset( $ws_utm['utm_campaign'] ) ? $ws_utm['utm_campaign'] : ''; ?>">
        <button type="submit" class="btn btn-big btn-primary btn-padding-x test-1" 
          name="ws-form-sub" id="submitButton" value="ws-landing">
          <?php 
          if( isset($args['cta-text']) && !empty($args['cta-text'])){
            $btnTxt = ( isset( $args['cta-text'] ) && !empty( $args['cta-text'] ) ) ? $args['cta-text'] : "Book A Demo";
          }else{
            $btnTxt = get_field('form_submit_text');
            $btnTxt = ( $btnTxt ) ? $btnTxt : "Book A Demo";  
          }
          echo $btnTxt;
          ?></button>
      </div>
    </div>
</div>    
</form>
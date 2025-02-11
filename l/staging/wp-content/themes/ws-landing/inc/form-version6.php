<?php 
global $ws_utm; 
$cta_txt = ( isset( $args['cta-text'] ) && !empty( $args['cta-text'] ) ) ? $args['cta-text'] : "Book A Demo";
?>
<form name="ws-theForm" method="post" id="wsleadform" action="<?php echo site_url('/thanks'); ?>" 
onsubmit="return wsCmnFormValidation(<?php echo ( sixTwoTpl() ) ? 'true' : '';  ?>);">
<div class="form-wrap">
    <div class="form-group">
      <input type="text" id="vs_first_name" placeholder="Full Name*" name="fname"
        maxlength="30" />
      <span class="error"></span>
    </div>
    <div class="form-group">
      <input type="text" id="vs_cont_email" placeholder="E-Mail*" name="email"
        maxlength="50" />
      <span class="error"></span>
    </div>
    <div class="form-group">
      <div class="user-input" id="vcode-id">        
        <input id="vs_pcode" type="tel" name="cprefix" maxlength="5" class="pcode-prefix" 
        onkeydown="javascript:if(event.keyCode != 9) return false;" tabindex="-1" onmousedown="return false;">
        <input id="vs_cont_phpne" type="tel" name="phone" maxlength="12" class="input-field" placeholder="Phone Number*" 
        data-errelm="phone-error-vs">
        <span class="errors" id="phone-error-vs"></span>
      </div>
    </div>
    <div class="form-group companygroup">
      <input type="text" name="company" maxlength="100" class="form-control" id="vs_company_name"
        placeholder="Company Name*" />
      <span class="error"></span>
    </div>
    
    <?php if( sixTwoTpl() ) : ?>
    <div class="form-group companygroup company-headcount">
    <div id="hcount" class="form-text-cont width-full">
    <div class="select-box active input-field" onclick="apnSelect('hcount');">
    <input type="hidden" id="team-size" name="team-size" value="">
    <span class="error"></span>
    <a href="javascript:void(0);" class="select-first" id="label-wehelp">Select company headcount</a>
    <span class="arrow-btn"></span>
    </div>
    <div class="select-list">
      <ul class="in-options">
        <li onclick="setoptValue('Self-employed', 'label-wehelp', 'team-size', 'hcount');">Self-employed</li>
        <li onclick="setoptValue('1-10', 'label-wehelp', 'team-size', 'hcount');">1-10</li>
        <li onclick="setoptValue('11-50', 'label-wehelp', 'team-size', 'hcount');">11-50</li>
        <li onclick="setoptValue('51-200', 'label-wehelp', 'team-size', 'hcount');">51-200</li>
        <li onclick="setoptValue('201-500', 'label-wehelp', 'team-size', 'hcount');">201-500</li>
        <li onclick="setoptValue('501-1000', 'label-wehelp', 'team-size', 'hcount');">501-1000</li>
        <li onclick="setoptValue('1001-5000', 'label-wehelp', 'team-size', 'hcount');">1001-5000</li>
        <li onclick="setoptValue('5001-10000', 'label-wehelp', 'team-size', 'hcount');">5001-10000</li>
        <li onclick="setoptValue('10000+', 'label-wehelp', 'team-size', 'hcount');">10000+</li>
      </ul>
    </div>
    </div>
    </div>

    <div class="form-group companygroup company-headcount">
    <textarea class="form-control" name="requirement" id="ws-requirement" placeholder="Please tell us about your requirements"></textarea>
    <span class="error"></span>
    </div>
    <?php endif; ?>

    <div class="form-group popfull">
      <div class="padd">
        <p><input class="mcheck" id="vs_checkId" name="checkbox" type="checkbox" value="1" checked="">By filling this form, you agree to our&nbsp;<a href="https://www.workstatus.io/privacy-policy" rel=" noopener">Privacy Policy</a></p>
        <span class="error" id="vs_checkerror"></span>
      </div>
    </div>
    <div class="form-group popfull">
      <div class="captForm">
        <div class="quizQ">
          <span id="vs_j-quiz">9 + 7</span>
          <a href="javascript:void(0)" ;="" class="refreshbtn" onclick="vs_generateWsQuiz();"></a>
        </div>
        <div class="quizAns">
          <input type="text" name="captcha" placeholder="??" id="vs_j-quiz-ans" onkeypress="ws_numcheck(event,this);">
          <span class="error" id="vs_captchaerror"></span>
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
        <button type="submit" class="btn btn-big btn-primary btn-padding-x test-1" name="ws-form-sub" id="vs_submitButton" value="ws-landing"><?php echo $cta_txt; ?></button>
      </div>
    </div>
</div>    
</form>
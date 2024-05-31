<?php 
global $ws_utm;
$slot = ( isset( $args['slot'] ) && !empty( $args['slot'] ) ) ? $args['slot'] : 1;
$cta_txt = (isset($args['cta-text']) && !empty($args['cta-text'])) ? $args['cta-text'] : "Create free trial account";
?>
<form action="/" method="GET" onsubmit="return wslpSignup(this);" class="wssgl-form<?php echo $slot; ?>" 
data-wform="<?php echo $slot; ?>" data-check="<?php echo $cta_txt; ?>">
<div class="signwrap">
  <div class="form-group">
    <input type="email" name="ws-email" id="sgemail<?php echo $slot; ?>" class="emailfld" placeholder="Enter your email address">
    <span class="error"></span>
  </div>

  <div class="form-group sg-pcode" id="sg-wrap">
    <div class="user-input">
      <input id="pcode<?php echo $slot; ?>" type="tel" name="cprefix" maxlength="5" class="pcode-prefix" 
      onkeydown="javascript:if(event.keyCode != 9) return false;" tabindex="-1" onmousedown="return false;">
      <input id="cont_phpne<?php echo $slot; ?>" type="tel" name="phone" maxlength="12" class="input-field phone-field" 
      placeholder="Phone Number*" data-errelm="phone-errorelm<?php echo $slot; ?>">
      <span class="errors" id="phone-errorelm<?php echo $slot; ?>"></span>
    </div>
  </div>
  </div>

  <div class="signwrap">
  <div class="formcheck">
    <p><input class="mcheck" name="checkbox" type="checkbox" value="1" checked="">By filling this form, you agree to our&nbsp;<a href="https://www.workstatus.io/privacy-policy" rel=" noopener">Privacy Policy</a></p>
  </div>
  </div>
  <div class="signwrap">
    <input type="hidden" name="pageurl" value="<?php the_permalink(); ?>">
    <input type="hidden" name="tracking_ip" value="<?php echo wpgetUserIP();?>">
    <input type="hidden" name="referalurl" value="">
    <input type="hidden" name="utm_source" value="<?php echo isset( $ws_utm['utm_source'] ) ? $ws_utm['utm_source'] : ''; ?>">
    <input type="hidden" name="utm_medium" value="<?php echo isset( $ws_utm['utm_medium'] ) ? $ws_utm['utm_medium'] : ''; ?>">
    <input type="hidden" name="utm_campaign" value="<?php echo isset( $ws_utm['utm_campaign'] ) ? $ws_utm['utm_campaign'] : ''; ?>">
    <?php 
    if( $slot === 3 ){
    echo '<input type="hidden" name="plan-type" id="wsplan3" value="">';
    }

    if( $slot === 2 ){
    echo '<input type="hidden" name="plan-type" id="wsplan2" value="">';
    }
    ?>    
    <button type="submit" class="signupbtn VVVVV" id="cft-btn<?php echo $slot; ?>"><?php echo $cta_txt; ?></button>
    <?php 
    if( $slot !== 3 ){
      echo '<div class="credcard">No credit card required</div>';
    }
    ?>    
  </div>
</form>
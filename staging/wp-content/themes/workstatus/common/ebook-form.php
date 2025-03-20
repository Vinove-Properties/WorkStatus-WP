<?php 
$frmHeading = get_field('frm-heading', get_the_ID());
$frmHeading = ( !empty($frmHeading) ) ? $frmHeading : 'Download eBook';
?>
<div class="formbox">
<h3><?php echo $frmHeading; ?></h3>
<form action="" onsubmit="return downloadEbookHandler(this);">
<div class="form-wrap">  
    <div class="form-group"> 
      <input type="text" id="ename" placeholder="Full Name" name="fname" maxlength="30" />
      <span class="error"></span>
    </div>
    
    <div class="form-group">
      <input  type="text" id="eemail" placeholder="Email Address" name="email" maxlength="50" />
      <span class="error"></span>
    </div>
    
    <!-- 
    <div class="form-group"> 
      <input type="tel" id="ephone" class="ephone-cls" placeholder="Enter your Phone Number" name="phone" maxlength="30" />
      <span class="error" id="ephone-error"></span>
    </div> 
    -->
    
    <div class="form-group">
      <div class="padd">
        <p>
        <input class="mcheck" name="checkbox" type="checkbox" value="1">I've read and accept <a href="https://www.workstatus.io/terms-of-service">terms and conditions</a></p>
      </div>
    </div>
    <div class="form-group"><button type="submit" class="btn" id="download" name="download">Download</button></div>
</div>
</form>
</div>
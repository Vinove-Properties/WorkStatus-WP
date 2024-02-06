<div class="formbox">
<h3>Download eBook</h3>
<form action="" onsubmit="return downloadEbookHandler(this);">
<div class="form-wrap">  
    <div class="form-group"> 
      <input type="text" id="ename" placeholder="Enter your first name" name="fname" maxlength="30" />
      <span class="error"></span>
    </div>
    
    <div class="form-group">
      <input  type="text" id="eemail" placeholder="Enter your email address" name="email" maxlength="50" />
      <span class="error"></span>
    </div>
    
    <div class="form-group"> 
      <input type="tel" id="ephone" placeholder="Enter your Phone Number" name="phone" maxlength="30" />
      <span class="error" id="phone-error"></span>
    </div>
    
    <div class="form-group">
      <div class="padd">
        <p>
        <input class="mcheck" name="checkbox" type="checkbox" value="1">Check this box to receive future communications from Workstatus</p>
      </div>
    </div>
    <div class="form-group">
      <button type="submit" class="btn" id="download" name="download">Download</button>
    </div>
</div>
</form>
</div>
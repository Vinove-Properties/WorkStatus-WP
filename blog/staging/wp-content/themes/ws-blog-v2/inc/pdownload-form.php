<div class="modal">
<section class="pop-up-section">
  <span class="close-button">×</span>
  <div class="container" id="formid">
    <h2>Download This Blog As PDF NOW!</h2>
    <p>Discover <?php the_title(); ?> with this FREE PDF!</p>
  <br/>
    <div class="left-right-box">
      <div class="rightnew">
        <div class="right-img">
          <p id="responce" class="pdf_responseto" style="color:#fff;"></p>
          <form method="post" id="vc-lead-form" class="orderform eguide-section">
            <p>Fill out the form below to download this blog as PDF now.</p>
            <div class="">
              <input type="text" maxlength="50" name="firstName" id="first_name" placeholder="Enter your full name" class="input-field" onkeypress="return ValidateName(event,'lblError_firstname','firstName');" value="">
              <small class="error-msg-section"
                id="lblError_firstname"></small>
            </div>
            <div class="">
              <input type="email" placeholder="Enter your Email Address" pattern="^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,10}$"
                maxlength="50" id="txtEmail" class="input-field" value="" name="email">
              <small class="error-msg-section" id="lblError_email"></small>
            </div>
            <div class="country-fld">
              <input type="text" placeholder="Enter your Country" maxlength="25" class="input-field" value="" name="country" id="country" onkeypress="return ValidateName(event,'lblError_country','country');" required>
              <small class="error-msg-section" id="lblError_country"></small>
            </div>
            <div class="">
              <input type="tel" placeholder="Enter your Phone Number" class="input-field" value="" name="phone" id="phone_no"
                maxlength="20">
              <small class="error-msg-section" id="lblError_phone"></small>
            </div>
            <input type="hidden" value="<?php echo $post->ID;?>" name="postid" id="postid">
            <input type="hidden" value="<?php echo $post->post_name;?>" name="posttitle" id="posttitle">
		        <input type="hidden" value="1" name="post_plugin_pdf" id="post_plugin_pdf">
            <input type="button" id="pxldebtn" value="Download This Blog" onclick="ValidationEvent(this.id)">
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
</div>
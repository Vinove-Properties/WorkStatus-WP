<?php 
$conData    = file_get_contents(get_template_directory_uri().'/data-json/getCountryDetails.json', FILE_USE_INCLUDE_PATH);
$conData    = json_decode( $conData );
$conArray   = $conData->response->data;
?>
<div class="banner-form wsf-signup">
<div id="formPopup-su" class="popup-wrapper <?php echo (isset($_GET['free-trial'])) ? 'is-active' : ''; ?>" 
style="display:none;">
      <div class="popWrap">
         <div class="popup-content p-0">
            <span class="cross-icon" onclick="close_suform();" style="z-index: 100;">
            <img src="<?php bloginfo('template_url'); ?>/assests/images/signup/cross.png" alt="">
            </span>
            <div class="left-section">
               <picture>
                  <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/images/logo-white.svg" 
                  alt="Logo" width="179" height="24">
               </picture>
               <div class="content">
                  <h2>Experience the <span class="lt-blue">Power of Productivity </span></h2>
                  <p>Make your team 40% more efficient. Set up your account in just 2 minutes!</p>
                  <h3>Top 3 reasons to trust <span class="lt-blue">Workstatus</span></h3>
               </div>
               <div class="performer-box">
                  <div class="list-box">
                     <ul>
                        <li>AI-powered Insights</li>
                        <li>Stealth or Visible Tracking</li>
                        <li>Automated Timesheet</li>
                     </ul>
                  </div>
                  <div class="second_box">
                     <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/images/g2-main-image.svg" 
                     alt="">
                  </div>
               </div>
               <div class="badges">
                  <div class="col">
                     <div class="leftbar">
                        <picture>
                           <source type="image/webp" srcset="<?php bloginfo('template_url'); ?>/assests/images/badge-logo1.webp">
                           <source type="image/png" srcset="<?php bloginfo('template_url'); ?>/assests/images/badge-logo1.png">
                           <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/images/badge-logo1.png" alt="Partner Logo" width="67" height="17">
                        </picture>
                        <i class="icon1"></i>
                     </div>
                     <div class="ritbar">
                        5.0
                     </div>
                  </div>
                  <div class="col">
                     <div class="leftbar">
                        <picture>
                           <source type="image/webp" srcset="<?php bloginfo('template_url'); ?>/assests/images/badge-logo2.webp">
                           <source type="image/png" srcset="assests/images/badge-logo2.png">
                           <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/images/badge-logo2.png" alt="Partner Logo" width="70" height="17">
                        </picture>
                        <i class="icon2"></i>
                     </div>
                     <div class="ritbar">
                        4.3
                     </div>
                  </div>
                  <div class="col">
                     <div class="leftbar">
                        <picture>
                           <source type="image/webp" srcset="<?php bloginfo('template_url'); ?>/assests/images/badge-logo3.webp">
                           <source type="image/png" srcset="<?php bloginfo('template_url'); ?>/assests/images/badge-logo3.png">
                           <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/images/badge-logo3.png" alt="Partner Logo" width="72" height="15">
                        </picture>
                        <i class="icon3"></i>
                     </div>
                     <div class="ritbar">
                        4.5
                     </div>
                  </div>
                  <div class="col">
                     <div class="leftbar">
                        <picture>
                           <source type="image/webp" srcset="<?php bloginfo('template_url'); ?>/assests/images/badge-logo4.webp">
                           <source type="image/png" srcset="<?php bloginfo('template_url'); ?>/assests/images/badge-logo4.png">
                           <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/images/badge-logo4.png" alt="Partner Logo" width="20" height="20">
                        </picture>
                        <i class="icon4"></i>
                     </div>
                     <div class="ritbar">
                        4.7
                     </div>
                  </div>
               </div>
            </div>
            <div id="xd-form" class="right-section">
               <div class="sucmsg">
                  <h3>THANK YOU!</h3>
                  <p>Your registration was successful. As a next step, we've sent you an email to confirm your email address. Once confirmed, you will be good to login & use the system.</p>
               </div>
               <h2>Start Your 7-Day Free Trial</h2>
               <form id="wsf_signup1405" onsubmit="return signupFrmValidation(this)" method="post">
                  <div class="form-wrap">
                     <div class="form-group">
                        <input type="text" class="infiled"  id="su-name" placeholder="Full Name" name="uname" maxlength="30">
                        <label>Full Name*</label>
                        <span class="error"></span>
                     </div>
                     <div class="form-group" style="margin-bottom:17px;">
                        <input  type="text" class="infiled" id="su-email" placeholder="Email Address" name="uemail" maxlength="50" autocomplete="off">
                        <label>Email Address*</label>
                        <span class="error"></span>
                     </div>
                     <div class="form-group w-45 cnd-phone-na">
                        <select name="pcode" id="su-pcode" class="infiled">
                           <option value="">Select Country Code</option>
                           <?php 
                           foreach( $conArray as $row ){
                           echo '<option data-con="'.$row->code.'" value="'.$row->dial_code.'">'.$row->name.' '.$row->dial_code.'</option>';
                           }
                           ?>                        
                        </select>
                        <label>Country Code*</label>
                        <span class="error"></span>
                     </div>
                     <div class="form-group w-55 cnd-phone-na">
                        <input type="tel" id="su-phone" class="infiled su-phone"  placeholder="Phone No" name="phone" maxlength="50">
                        <label>Phone No*</label>
                        <span class="error" id="su-phone-err"></span>
                     </div>

                     <div class="form-group">
                        <select name="com-mode" class="infiled">
                          <option value="0" selected>Phone or Email</option>
                          <option value="1">Phone</option>
                          <option value="2">Email</option>
                          <option value="3">Please Do Not Contact</option>
                        </select>
                        <label>Mode of communication</label>
                     </div>

                     <div class="form-group">
                        <input type="password" class="infiled" name="password" placeholder="Password*" 
                        autocomplete="current-password" id="su-password">
                        <i onclick="togglewsPassword(this, 'su-password')" style="margin-left: -30px; cursor: pointer;">
                        <img loading="lazy" class="eye-slash" src="<?php bloginfo('template_url'); ?>/assests/images/signup/eye-slash.png"  alt="">
                        <img loading="lazy" class="eye" src="<?php bloginfo('template_url'); ?>/assests/images/signup/eye.png"  alt="">
                        </i>
                        <label class="info-lbl">Password* 
                        <span class="tool-tip-wrap"><img src="<?php bloginfo('template_url'); ?>/assests/images/info_icon.svg" alt="" class="info-img" style="cursor: pointer;">
                        <span class="tolltip">Your Password must contain :<br>
                        1- Minimum 6 characters are required<br>
                        2- At least 1 number<br>
                        3- At least 1 of the following special characters ( !, #, $, %, &, *, -, @ )
                        </span>
                        </span>
                        </label>
                        <span class="error"></span>
                     </div>

                     <div class="form-group">
                        <input type="password" class="infiled"  name="cnf_password"  placeholder="Confirm Password*" autocomplete="current-password" id="su-cpassword">
                        <i onclick="togglewsPassword(this, 'su-cpassword')" style="margin-left: -30px; cursor: pointer;">
                        <img loading="lazy"  class="eye-slash" src="<?php bloginfo('template_url'); ?>/assests/images/signup/eye-slash.png"  alt="">
                        <img loading="lazy" class="eye" src="<?php bloginfo('template_url'); ?>/assests/images/signup/eye.png"  alt="">
                        </i>
                        <label>Confirm Password*</label>
                        <span class="error"></span>
                     </div>
                     <!--
                     <div class="form-group">
                        <select class="infiled" name="team-size" id="ws-emp">
                           <option value="">Team Size</option>
                           <option value="">Self-employed</option>
                           <option value="1-10">1-10</option>
                           <option value="11-50">11-50</option>
                           <option value="51-200">51-200</option>
                        </select>
                        <span class="error"></span>
                     </div>
                     <div class="form-group">
                        <textarea class="infiled comment-input" name="requirement" id="ws-requirement" placeholder="Let us know what sparked our interest"></textarea>
                        <label>Let us know what sparked our interest</label>
                        <span class="error"></span>
                     </div> 
                     -->
                     <div class="form-group">
                        <div class="padd">
                           <p>
                           <input class="mcheck" id="su-accept" name="checkbox" type="checkbox" value="1" checked>
                           I've read and accept <a href="https://www.workstatus.io/terms-of-service" rel="noopener" target="_blank">terms and conditions</a>
                           </p>
                           <span id="supolicy" class="error" style="text-align:left; display: none;">Please tick this box if you want to proceed.</span>
                        </div>
                     </div>
                     <div class="form-group">
                        <input type="hidden" id="ws_pid" name="pid" value="">
                        <input type="hidden" id="ws_stype" name="type" value="">
                        <input type="hidden" name="src_page" value="<?php the_permalink(); ?>">
                        <button type="submit" class="submtbtn btn-disable" id="su-submitButton" name="submit">Create My Account</button>
                        <span id="ws-apimsg"></span>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
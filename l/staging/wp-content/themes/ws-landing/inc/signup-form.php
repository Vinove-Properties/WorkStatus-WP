<?php 
$conData    = file_get_contents(get_template_directory_uri().'/getCountryDetails.json', FILE_USE_INCLUDE_PATH);
$conData    = json_decode( $conData );
$conArray   = $conData->response->data;
?>
<div class="banner-form ws-signupform">
  <div id="formPopup-su" class="popup-wrapper" style="display:none;">
    <div class="popWrap">
      <div class="popup-content p-0">
        <span class="cross-icon" onclick="close_suform();" style="z-index: 100;">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/signup/cross.png" alt="">
        </span>
        <div class="left-section">
          <picture>
            <img loading="lazy" src="<?php  echo get_stylesheet_directory_uri(); ?>/assets/images/logo-white.svg" alt="Logo" width="179" height="24">
          </picture>
          <div class="content">
            <h2>Experience the <span class="lt-blue">Power of Productivity </span></h2>
            <p>Make your team 40% more efficient. Set up your account in just 2 minutes!</p>
            <h3>Top 3 reasons to trust <span class="lt-blue">Workstatus</span></h3>
          </div>
          <div class="performer-box">
            <div class="list-box">
              <ul>
                <li>AI-Powered Insights</li>
                <li>Streamline Operations</li>
                <li>Best-in-class Support</li>
              </ul>
            </div>
            <div class="second_box">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/g2-main-image.svg" alt="">
            </div>
          </div>
          <div class="badges">
            <div class="col">
              <div class="leftbar">
                <picture>
                  <source type="image/webp" srcset="<?php  echo get_stylesheet_directory_uri(); ?>/assets/images/badge-logo1.webp">
                  <source type="image/png" srcset="<?php  echo get_stylesheet_directory_uri(); ?>/assets/images/badge-logo1.png">
                  <img loading="lazy" src="<?php  echo get_stylesheet_directory_uri(); ?>/assets/images/badge-logo1.png" alt="Partner Logo" width="67" height="17">
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
                  <source type="image/webp" srcset="<?php  echo get_stylesheet_directory_uri(); ?>/assets/images/badge-logo2.webp">
                  <source type="image/png" srcset="assets/images/badge-logo2.png">
                  <img loading="lazy" src="<?php  echo get_stylesheet_directory_uri(); ?>/assets/images/badge-logo2.png" alt="Partner Logo" width="70" height="17">
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
                  <source type="image/webp" srcset="<?php  echo get_stylesheet_directory_uri(); ?>/assets/images/badge-logo3.webp">
                  <source type="image/png" srcset="<?php  echo get_stylesheet_directory_uri(); ?>/assets/images/badge-logo3.png">
                  <img loading="lazy" src="<?php  echo get_stylesheet_directory_uri(); ?>/assets/images/badge-logo3.png" alt="Partner Logo" width="72" height="15">
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
                  <source type="image/webp" srcset="<?php  echo get_stylesheet_directory_uri(); ?>/assets/images/badge-logo4.webp">
                  <source type="image/png" srcset="<?php  echo get_stylesheet_directory_uri(); ?>/assets/images/badge-logo4.png">
                  <img loading="lazy" src="<?php  echo get_stylesheet_directory_uri(); ?>/assets/images/badge-logo4.png" alt="Partner Logo" width="20" height="20">
                </picture>
                <i class="icon4"></i>
              </div>
              <div class="ritbar">
                4.7
              </div>
            </div>
          </div>
        </div>
        <div class="right-section">
          <h2>Empower Your Team: Get Started Now
          </h2>
          <form onsubmit="return signupFrmValidation(this)" method="post">
            <div class="form-wrap">
              <div class="form-group">
                <input type="text" class="infiled"  id="su-name" placeholder="Full Name" name="uname" maxlength="30">
                <label>Full Name</label>
                <span class="error"></span>
              </div>
              <div class="form-group">
                <input  type="text" class="infiled" id="su-email" placeholder="Email Address" name="uemail" maxlength="50" autocomplete="off">
                <label>Email Address</label>
                <span class="error"></span>
              </div>
              <div class="form-group w-45">
                <select name="pcode" id="su-pcode" class="infiled">
                  <option value="">Select Country Code</option>
                  <?php 
                    foreach( $conArray as $row ){
                    //$is_selected = ( $defLocation == $row->code ) ? ' selected' : '';
                    //echo '<option value="'.$row->dial_code.'"'.$is_selected.'>'.$row->name.' '.$row->dial_code.'</option>';
                    echo '<option data-code="'.$row->code.'" value="'.$row->dial_code.'">'.$row->name.' '.$row->dial_code.'</option>';
                    }
                    ?>                           
                </select>
                <label>Country Code*</label>
                <span class="error"></span>
              </div>
              <div class="form-group w-55">
                <input  type="tel" id="su-phone" class="infiled su-phone"  placeholder="Phone No" name="phone" maxlength="50">
                <label>Phone No</label>
                <span class="error" id="su-phone-err"></span>
              </div>
              <div class="form-group">
                <input type="password" class="infiled" name="password" placeholder="Password" autocomplete="current-password" id="su-password">
                <i onclick="togglewsPassword(this, 'su-password')" style="margin-left: -30px; cursor: pointer;">
                <img class="eye-slash" src="<?php  echo get_stylesheet_directory_uri(); ?>/assets/images/signup/eye-slash.png"  alt="">
                <img class="eye" src="<?php  echo get_stylesheet_directory_uri(); ?>/assets/images/signup/eye.png"  alt="">
                </i>
                <label>Password</label>
                <span class="error"></span>
              </div>
              <div class="form-group">
                <input type="password" class="infiled"  name="cnf_password"  placeholder="Confirm Password" autocomplete="current-password" id="su-cpassword">
                <i onclick="togglewsPassword(this, 'su-cpassword')" style="margin-left: -30px; cursor: pointer;">
                <img class="eye-slash" src="<?php  echo get_stylesheet_directory_uri(); ?>/assets/images/signup/eye-slash.png"  alt="">
                <img class="eye" src="<?php  echo get_stylesheet_directory_uri(); ?>/assets/images/signup/eye.png"  alt="">
                </i>
                <label>Confirm Password</label>
                <span class="error"></span>
              </div>
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
                <input type="hidden" id="ws_pid" name="pid" value="42">
                <input type="hidden" id="ws_stype" name="type" value="monthly">
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
<?php  
$work_status_journey = get_field('work_status_journey', 'option');
if( $work_status_journey ) :
$isEnable = $work_status_journey['is_enabled'];
if( $isEnable == "yes" ){
global $ws_ctas, $RegLink, $LogLink, $post; 
?>	
<section class="journey-bg background_lightblue text_center slide_shape_section heading-white whitetxt">
  <div class="shape"></div>
  <div class="trianglefeaturedetail-right"></div>
  <div class="container">
    <div class="top-section">
      <h6><span class="bg-white"><?php echo $work_status_journey['heading']; ?></span></h6>
      <?php 
      if( is_page(7306) ){
      echo '<h2>Streamline with Smart Customization</h2>
      <p>Discover how our solutions can seamlessly integrate into your operation</p>';
      }else{ ?>
      <h2><?php echo $work_status_journey['sub_heading']; ?></h2>
      <p><?php echo $work_status_journey['content']; ?></p>
      <?php } ?>
    </div>
    <div class="actionBtn center white ws-journey">
      <div>
        <a href="javascript:void(0)" onclick="call_demows();" class="primary_btn2 btnwhite"><?php echo $work_status_journey['demo_button_text']; ?></a>
        <small class="max-width-250"><?php echo $work_status_journey['demo_bottom_text']; ?></small>
      </div>
      <?php if( ($ws_ctas !== false) && ($ws_ctas['show_this'] === true) ){ ?>
      <div>
      <a data-href="<?php echo $RegLink; ?>" href="javascript:void(0);" class="primary_btn1 btnbg2" 
      onclick="return get_ws_signupform(this);"><?php echo $ws_ctas['cta_text']; ?></a>
      <small class="max-width-184"><?php echo $work_status_journey['trial_button_bottom_text']; ?></small>
      </div>
      <div>
        <a href="https://calendly.com/workstatus/sales" class="primary_btn2 btnwhite"><?php echo $work_status_journey['talk_sales_text']; ?></a>
        <small class="max-width-250"><?php echo $work_status_journey['talk_bottom_text']; ?></small>
      </div>
      <?php } ?>
    </div>
  </div>
</section>
<?php } endif; ?>
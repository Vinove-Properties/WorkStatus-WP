<?php  
$work_status_journey = get_field('work_status_journey', 'option');
if( $work_status_journey ) :
$isEnable = $work_status_journey['is_enabled'];
if( $isEnable == "yes" ){
global $ws_ctas, $RegLink, $LogLink, $post; 
?>	
<section class="works-journey">
  <div class="container">
    <div class="ws-flex">
      <div class="jour-col">
        <div class="top-section">
        <?php 
      if( is_page(7306) ){
      echo '<h6><span class="bg-white">CUSTOMIZE YOUR WORKFLOW</span></h6>';
      echo '<h2>Transform Your Workforce Management</h2>
      <p>Tailored Solutions for Enhanced Productivity</p>';
      }else{ ?>
      <h6><span class="bg-white"><?php echo $work_status_journey['heading']; ?></span></h6>  
      <h2><?php echo $work_status_journey['sub_heading']; ?></h2>
      <p><?php echo $work_status_journey['content']; ?></p>
      <?php } ?>
        </div>
        <div class="actionBtn">
        <?php if( ($ws_ctas !== false) && ($ws_ctas['show_this'] === true) ){ ?>
          <div><a data-href="<?php echo $RegLink; ?>" href="javascript:void(0);" class="primary_btn1"  onclick="return get_ws_signupform(this);">Start Free Trial</a>
            <small><?php echo $work_status_journey['trial_button_bottom_text']; ?></small>
          </div>
          <?php } ?>
          <div><a href="javascript:void(0)" onclick="call_demows();" class="primary_btn2 formbtn">Book A Demo</a>
            <small><?php echo $work_status_journey['demo_bottom_text']; ?></small>
          </div>
          
        </div>
      </div>
      <span class="devide">OR</span>
      <div class="jour-col">
        <div class="top-section">
        <?php 
        if( is_page(7306) ){
        echo '<h6><span class="bg-white">CUSTOMIZE YOUR WORKFLOW</span></h6>';
        echo '<h2>Streamline and Automate Your Workflow</h2>
        <p>Customized Solutions for Maximum Productivity</p>';
        }else{ ?>
        <h6><span class="bg-white">CUSTOMIZE YOUR WORKFLOW</span></h6>
        <h2>Streamline and Automate Your Workflow</h2>
        <p>Customized Solutions for Maximum Productivity</p>
        <?php } ?>    
        </div>
        <div class="actionBtn">
          <div><a href="javascript:void();" onclick="call_demoEnt();" class="primary_btn1">Talk to Sales</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php } endif; ?>
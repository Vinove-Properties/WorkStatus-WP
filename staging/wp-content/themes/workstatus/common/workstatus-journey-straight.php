<?php global $ws_ctas, $RegLink, $LogLink; ?>
<section class="works-journey">
  <div class="container">
    <div class="ws-flex">
      <div class="jour-col">
        <div class="top-section">
          <h6><span class="bg-white">Boost Efficiency</span></h6>
          <h2>Start your Workstatus journey<br> today!</h2>
          <p>Track time and productivity effortlessly.</p>
        </div>
        <div class="actionBtn">
          <div><a href="javascript:void(0)" onclick="call_demows();" class="primary_btn1">Book A Demo</a>
            <small>Get queries answered from experts</small>
          </div>

          <?php if( ($ws_ctas !== false) && ($ws_ctas['show_this'] === true) ){ ?>
          <div><a data-href="<?php echo $RegLink; ?>" href="javascript:void(0);" class="primary_btn2 formbtn"  onclick="return get_ws_signupform(this);">Start Free Trial</a>
            <small>No credit card required</small>
          </div>
          <?php } ?>
          
        </div>
      </div>
      <span class="devide">OR</span>
      <div class="jour-col">
        <div class="top-section">
          <h6><span class="bg-white">CUSTOMIZE YOUR WORKFLOW</span></h6>
          <h2>Streamline and Automate Your Workflow</h2>
        <p>Customized Solutions for Maximum Productivity</p>
        </div>
        <div class="actionBtn">
          <div><a href="javascript:void();" onclick="call_demoEnt();" class="primary_btn1 tts">Talk to Sales</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
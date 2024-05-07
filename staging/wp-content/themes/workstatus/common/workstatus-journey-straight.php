<?php global $ws_ctas, $RegLink, $LogLink; ?>
<section class="works-journey">
  <div class="container">
    <div class="ws-flex">
      <div class="jour-col">
        <div class="top-section">
          <h6><span class="bg-white">Don’t Wait</span></h6>
          <h2>Start your Workstatus journey today!</h2>
          <p>Get detailed and clean activity reports of your team.</p>
        </div>
        <div class="actionBtn">
        <?php if( ($ws_ctas !== false) && ($ws_ctas['show_this'] === true) ){ ?>
          <div><a data-href="<?php echo $RegLink; ?>" href="javascript:void(0);" class="primary_btn1"  onclick="return get_ws_signupform(this);">Start Free Trial</a>
            <small>No credit card required</small>
          </div>
          <?php } ?>
          <div><a href="javascript:void(0)" onclick="call_demows();" class="primary_btn2 formbtn">Book A Demo</a>
            <small>Get queries answered from experts</small>
          </div>
        </div>
      </div>
      <span class="devide">OR</span>
      <div class="jour-col">
        <div class="top-section">
          <h6><span class="bg-white">CUSTOMIZE YOUR WORKFLOW</span></h6>
          <h2>Streamline with Smart Customization</h2>
          <p>Integrating seamlessly with your operations.</p>
        </div>
        <div class="actionBtn">
          <div><a href="https://calendly.com/workstatus/sales" href="javascript:void(0);" class="primary_btn1">Talk to Sales</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
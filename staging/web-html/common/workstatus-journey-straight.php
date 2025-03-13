<section class="start-joureny journey-bg text_center whitetxt" style="margin-bottom:70px;">
  <div class="shape"></div>
  <div class="trianglefeaturedetail-right"></div>
  <div class="container">
    <div class="top-section">
      <h6><span class="bg-white">Don’t Wait</span></h6>
      <h2>Start your Workstatus journey today!</h2>
      <p>Get detailed and clean activity reports of your team.</p>
    </div>
    <div class="actionBtn center white ws-journey">
      <div>
        <a href="javascript:void(0)" onclick="call_demows();" class="primary_btn1 btnbg2">Book A Demo</a>
        <small class="max-width-250">Get queries answered from experts</small>
      </div>
      <?php if( ($ws_ctas !== false) && ($ws_ctas['show_this'] === true) ){ ?>
      <div>
        <a href="<?php echo $RegLink; ?>" class="primary_btn2 btnwhite"><?php echo $ws_ctas['cta_text']; ?></a>
        <small class="max-width-184">No credit card required</small>
      </div>
      <?php } ?>
    </div>
  </div>
</section>
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
          <div><a data-href="https://app.workstatus.io/auth/register/?pid=42&amp;type=monthly" href="javascript:void(0);" class="primary_btn1" onclick="return get_ws_signupform(this);">Start Free Trial</a>
            <small>No credit card required</small>
          </div>
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
          <div><a data-href="https://app.workstatus.io/auth/register/?pid=42&amp;type=monthly" href="javascript:void(0);" class="primary_btn1" onclick="return get_ws_signupform(this);">Talk to Sales</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
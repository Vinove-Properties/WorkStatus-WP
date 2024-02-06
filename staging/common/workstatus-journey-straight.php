<section class="start-joureny journey-bg text_center whitetxt">
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
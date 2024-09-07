<section class="section-numbers">
    <div class="container">
      <div class="number-row">
        <div class="number-col is-first">
          <div class="card-wrapper">
            <div class="card-content">
              <h3>Achieve More: Optimize Time Tracking & Workforce Coordination</h3>
              <div class="card-image">
                <picture>
                  <source type="image/webp" srcset="<?php bloginfo('template_url'); ?>/assests/images/number-01.png">
                  <source type="image/png" srcset="<?php bloginfo('template_url'); ?>/assests/images/number-01.png">
                  <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/images/number-01.png" alt="Discover"
                    width="303" height="192">
                </picture>
              </div>
            </div>
            <div class="button-group">
              <a href="<?php echo site_url('/use-cases'); ?>" class="btn">Explore all Use Cases</a>
            </div>
          </div>
        </div>
        <div class="number-col">
          <div class="card-image">
            <picture>
              <source type="image/webp" srcset="<?php bloginfo('template_url'); ?>/assests/images/number-02.png">
              <source type="image/png" srcset="<?php bloginfo('template_url'); ?>/assests/images/number-02.png">
              <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/images/number-02.png" alt="Discover"
                width="320" height="155">
            </picture>
          </div>
          <h2>70%</h2>
          <div class="is-grey">INCREASED EFFICIENCY</div>
          <p>A multi-national marketing firm, boosted overall efficiency.</p>
          <a href="<?php echo site_url('/workforce-management/employee-productivity-monitoring'); ?>" class="btn">Increase Your Team Productivity</a>
        </div>
        <div class="number-col">
          <div class="card-image">
            <picture>
              <source type="image/webp" srcset="<?php bloginfo('template_url'); ?>/assests/images/number-03.png">
              <source type="image/png" srcset="<?php bloginfo('template_url'); ?>/assests/images/number-03.png">
              <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/images/number-03.png" alt="Discover"
                width="320" height="155">
            </picture>
          </div>
          <h2>35%</h2>
          <div class="is-grey">INCREASED ROI</div>
          <p>A Delhi-based startup achieved 30%+ increased ROI with Workstatus.</p>
          <a href="<?php echo site_url('/reporting-analytics/insights-for-business'); ?>" class="btn">Enhance Your Business ROI</a>
        </div>
      </div>
      <?php if( geoCTAcheck() === true ) : ?>
      <div class="ctasec mt100">
        
        <div>
          <a href="javascript:void(0)" class="ctbtn" onclick="call_demows();" target="_self">Book A Demo</a>
        </div>
        <span class="devide">OR</span>
        <div>  
          <a data-href="<?php echo $RegLink; ?>" href="javascript:void(0);" class="ctbtn nobg"  onclick="return get_ws_signupform(this);">Start Free Trial</a>
          <span class="nccr">No credit card required</span>
        </div>
      </div>
      <?php endif; ?>
    </div>
</section>
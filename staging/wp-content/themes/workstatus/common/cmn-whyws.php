<?php
$title  = (isset($args['title']) && !empty($args['title'])) ? $args['title'] : 'Why us';
$body   = (isset($args['body']) && !empty($args['body'])) ? $args['body'] : '<h2>Work Smarter with Workstatus</h2> <p>Stay one step ahead always, manage & track your workforce &amp; workload, analyze data and ensure business growth.</p>';
$pointers   = (isset($args['pointers']) && !empty($args['pointers'])) ? $args['pointers'] : '<h3>One Platform, Endless Efficiency </h3> <ul> <li>Detailed insights</li> <li>Streamlined projects</li> <li>Streamlined projects</li> <li>Transparent reporting</li> </ul>';
?>
<section class="client-img-section padding-t-120 padding-b-120">
<div class="container">
<div class="dis-flex why-ws">
  <div class="flex-2 left-box">
    <div class="top-section">
      <h6><span class="bg-purple"><?php echo $title; ?></span></h6>
      <?php echo $body; ?>    
    </div>
    <?php echo _getDemoCTA("button-common margin-t-40", false); ?>  
  </div>
  <div class="flex-2 right-box">
    <div class="dis-flex">
      <div class="flex-2 why-left">
        <div class="award-sc">
          <ul>
            <li>
              <span class="aw-icon">
                <picture>
                  <img loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/awrd-01.svg" alt="Workstatus" 
                    width="27" height="28">
                </picture>
              </span>
              <span class="star"></span>
            </li>
            <li>
              <span class="aw-icon">
                <picture>
                  <img loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/awrd-02.svg" alt="Workstatus" 
                    width="78" height="18">
                </picture>
              </span>
              <span class="star"></span>
            </li>
            <li>
              <span class="aw-icon">
                <picture>
                  <img loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/awrd-03.svg" alt="Workstatus" 
                    width="40" height="34">
                </picture>
              </span>
              <span class="star"></span>
            </li>
          </ul>
        </div>
        <div class="plateform"><?php echo $pointers; ?></div>
      </div>
      <div class="flex-2 why-right">
        <div class="client-section">
          <div class="client-row">
            <div class="client-stack">
              <ul class="award-animate-slide-to-left hover:pause">
                <li>
                  <picture class="awimg">
                    <img src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/Goodfirms.svg" alt="" width="130" height="29">
                  </picture>
                  <a class="move" href="https://www.goodfirms.co/"></a>
                  <div class="star-rt">4.8 Excellent <img src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/start-4.8.svg" alt="Award" width="100" height="17"></div>
                  <p>I am so glad I found Workstatus. It has helped me become more productive, track my time.</p>
                </li>
                <li>
                  <picture class="awimg">
                    <img src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/Product-Hunt.svg" alt="" width="130" height="29">
                  </picture>
                  <a class="move" href="https://www.producthunt.com/"></a>
                  <div class="star-rt">4.6 Excellent <img src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/start-4.6.svg" alt="Award" width="100" height="17"></div>
                  <p>WorkStatus has been a game-changer for our team's productivity. Its real-time tracking features have brought transparency.</p>
                </li>
                <li>
                  <picture class="awimg">
                    <img src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/SaasHub.svg" alt="" width="130" height="29">
                  </picture>
                  <a class="move" href="https://www.saashub.com/"></a>
                  <div class="star-rt">4.5 Excellent <img src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/start-4.5.svg" alt="Award" width="100" height="17"></div>
                  <p>We are able to time track all our team members with screenshots and activity URLs, Task management as well as Project reports.</p>
                </li>
                <li>
                  <picture class="awimg">
                    <img src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/sitejabber.svg" alt="" width="130" height="29">
                  </picture>
                  <a class="move" href="https://www.sitejabber.com/"></a>
                  <div class="star-rt">4.8 Excellent <img src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/start-4.8.svg" alt="Award" width="100" height="17"></div>
                  <p>Workstatus is an amazing tool to help me keep track of what my team is doing. It's very easy, gives powerful insights  on projects.</p>
                </li>
                <li>
                  <picture class="awimg">
                    <img src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/g2img.svg" alt="" width="130" height="29">
                  </picture>
                  <a class="move" href="https://www.g2.com/"></a>
                  <div class="star-rt">4.6 Excellent <img src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/start-4.6.svg" alt="Award" width="100" height="17"></div>
                  <p>The best thing about Workstatus is how easy it is to use. The app makes it simple for me to track the time I spend on  tasks and projects.</p>
                </li>
                <li>
                  <picture class="awimg">
                    <img src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/Goodfirms.svg" alt="" width="130" height="29">
                  </picture>
                  <a class="move" href="https://www.goodfirms.co/"></a>
                  <div class="star-rt">4.8 Excellent <img src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/start-4.8.svg" alt="Award" width="100" height="17"></div>
                  <p>I am so glad I found Workstatus. It has helped me become more productive, track my time.</p>
                </li>
                <li>
                  <picture class="awimg">
                    <img src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/Product-Hunt.svg" alt="" width="130" height="29">
                  </picture>
                  <a class="move" href="https://www.producthunt.com/"></a>
                  <div class="star-rt">4.6 Excellent <img src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/start-4.6.svg" alt="Award" width="100" height="17"></div>
                  <p>WorkStatus has been a game-changer for our team's productivity. Its real-time tracking features have brought transparency.</p>
                </li>
                <li>
                  <picture class="awimg">
                    <img src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/SaasHub.svg" alt="" width="130" height="29">
                  </picture>
                  <a class="move" href="https://www.saashub.com/"></a>
                  <div class="star-rt">4.5 Excellent <img src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/start-4.5.svg" alt="Award" width="100" height="17"></div>
                  <p>We are able to time track all our team members with screenshots and activity URLs, Task management as well as Project reports.</p>
                </li>
                <li>
                  <picture class="awimg">
                    <img src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/sitejabber.svg" alt="" width="130" height="29">
                  </picture>
                  <a class="move" href="https://www.sitejabber.com/"></a>
                  <div class="star-rt">4.8 Excellent <img src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/start-4.8.svg" alt="Award" width="100" height="17"></div>
                  <p>Workstatus is an amazing tool to help me keep track of what my team is doing. It's very easy, gives powerful insights  on projects.</p>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="counter">
          <div class="count-col"><h3>500K+</h3><p>Active users</p></div>
          <div class="count-col"><h3>21M+</h3><p>Hours Tracked</p></div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</section>
<?php 
$elmClass = (isset($args['elm-class']) && !empty($args['elm-class'])) ? $args['elm-class'] : 'workplace-section bg-light padding-t-120 padding-b-120';
?>
<section class="<?php echo $elmClass; ?>">
<div class="container">

<div class="top-section text-center">
<h6><span class="bg-purple">For All Workplaces</span></h6>
<h2>Collaborate Seamlessly Wherever You Work</h2>
<p>Work together effortlessly, no matter where your team is located, with tools that keep communication and collaboration smooth.</p>
</div>

<div class="workplace-row justify-sb dis-flex">
  <div class="workplace-card">
    <div class="flip-card-inner">
      <div class="flip-card-front">
        <div>
          <picture class="card-img">
            <source type="image/webp" srcset="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/workplace-01.png">
            <source type="image/png" srcset="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/workplace-01.png">
            <img loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/workplace-01.png" 
            alt="Workstatus" width="44" height="44">
          </picture>
          <h3>Remote Work</h3><p>Stay connected and accountable</p>
        </div>
        <div class="card-bottom">
          <h4>Achieve <strong>30%</strong></h4><span class="prod">Higher Accountability</span>
        </div>
      </div>
      <div class="flip-card-back">
        <h3>Remote Work</h3>
        <ul>
          <li>Monitor employee activity & ensure accountability</li>
          <li>Foster a connected team culture regardless of location</li>
        </ul>
        <div class="card-bottom">
          <a href="<?php echo site_url('/workplace-mode/remote-work-management'); ?>" class="is-arrow">Explore More</a>
        </div>
      </div>
    </div>
  </div>
  <div class="workplace-card">
    <div class="flip-card-inner">
      <div class="flip-card-front">
        <div>
          <picture class="card-img">
            <source type="image/webp" srcset="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/workplace-02.png">
            <source type="image/png" srcset="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/workplace-02.png">
            <img loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/workplace-02.png" alt="Workstatus" width="44" height="44">
          </picture>
          <h3>Hybrid Work</h3><p>Balance productivity everywhere</p>
        </div>
        <div class="card-bottom">
          <h4>Get <strong>40%</strong></h4>
          <span class="prod">Productivity Increase</span>
        </div>
      </div>
      <div class="flip-card-back">
        <h3>Hybrid Work</h3>
        <ul>
          <li>Track resource availability & monitor employee productivity across locations</li>
          <li>Optimize resource allocation</li>
        </ul>
        <div class="card-bottom">
          <a href="<?php echo site_url('/workplace-mode/hybrid-work-management'); ?>" class="is-arrow">Explore More</a>
        </div>
      </div>
    </div>
  </div>
  <div class="workplace-card">
    <div class="flip-card-inner">
      <div class="flip-card-front">
        <div>
          <picture class="card-img">
            <source type="image/webp" srcset="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/workplace-03.png">
            <source type="image/png" srcset="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/workplace-03.png">
            <img loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/workplace-03.png" alt="Workstatus" width="44" height="44">
          </picture>
          <h3>Field Work</h3><p>Empower field team efficiency</p>
        </div>
        <div class="card-bottom">
          <h4>Experience <strong>35%</strong></h4><span class="prod">Task Efficiency</span>
        </div>
      </div>
      <div class="flip-card-back">
        <h3>Field Work</h3>
        <ul>
          <li>Keep field teams connected and productive</li>
          <li>Streamline communication and optimize field operations</li>
        </ul>
        <div class="card-bottom">
          <a href="<?php echo site_url('/workforce-management/field-service-management'); ?>" class="is-arrow">Explore More</a>
        </div>
      </div>
    </div>
  </div>
  <div class="workplace-card">
    <div class="flip-card-inner">
      <div class="flip-card-front">
        <div>
          <picture class="card-img">
            <source type="image/webp" srcset="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/workplace-04.png">
            <source type="image/png" srcset="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/workplace-04.png">
            <img loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/workplace-04.png" alt="Workstatus" width="44" height="44">
          </picture>
          <h3>Office Work</h3><p>Optimize office productivity</p>
        </div>
        <div class="card-bottom">
          <h4>See <strong>35%</strong></h4><span class="prod">Enhanced Productivity</span>
        </div>
      </div>
      <div class="flip-card-back">
        <h3>Office Work</h3>
        <ul>
          <li>Refine office operations by tracking employee attendance</li>
          <li>Get real-time insights into productivity</li>
        </ul>
        <div class="card-bottom">
          <a href="<?php echo site_url('/workplace-mode/office-work'); ?>" class="is-arrow">Explore More</a>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</section>
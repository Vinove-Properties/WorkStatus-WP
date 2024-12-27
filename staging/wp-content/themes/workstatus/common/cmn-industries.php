<?php 
$elmImage   = (isset($args['elm-image']) && !empty($args['elm-image']) ) ? $args['elm-image'] : '';
$elmContent = (isset($args['elm-content']) && !empty($args['elm-content']) ) ? $args['elm-content'] : '';
?>
<section class="allindustry-section padding-t-120 padding-b-120 post-animation">
<div class="container">
  <div class="top-section text-center">
    <h6><span class="bg-purple">Empowering Businesses</span></h6>
    <h2>Where Versatility Meets Efficiency - For Every Industry</h2>
    <p>From IT to healthcare, retail to manufacturing, Workstatus adapts to meet your industry’s unique needs.</p>
  </div>
  <div class="dis-flex indstry-row">
    <div class="ind-left">
      <div class="flex-3 ind-column">
        <div class="ind-image">
          <picture>
            <source type="image/webp" srcset="<?php bloginfo('template_url'); ?>/version-2.0/dev-images/ind-accounting.webp">
            <img loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/dev-images/ind-accounting.webp" alt="Workstatus" width="242" height="267">
          </picture>
          <div class="ind-title">
            <h3>Accounting</h3>
          </div>
        </div>
        <div class="ind-content">
          <a href="<?php bloginfo('url'); ?>/industry/accounting">
          <h3>Accounting</h3>
          <p>Boost productivity and ensure smooth billing with Workstatus - your partner for sustainable success.</p>
          </a>
        </div>
      </div>
      <div class="flex-3 ind-column">
        <div class="ind-image">
          <picture>
            <source type="image/webp" srcset="<?php bloginfo('template_url'); ?>/version-2.0/dev-images/ind-manufacturing.webp">
            <img loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/dev-images/ind-manufacturing.webp" alt="Workstatus" width="242" height="267">
          </picture>
          <div class="ind-title">
            <h3>Manufacturing</h3>
          </div>
        </div>
        <div class="ind-content">
          <a href="<?php bloginfo('url'); ?>/industry/manufacturing">
          <h3>Manufacturing</h3>
          <p>Track productivity, manage schedules, view accurate timesheets, and optimize operations - all on one platform.</p>
        </div>
      </div>

      <div class="flex-3 ind-column">
        <div class="ind-image">
          <picture>
            <source type="image/webp" srcset="<?php bloginfo('template_url'); ?>/version-2.0/dev-images/ind-janitorial.webp">
            <img loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/dev-images/ind-janitorial.webp" alt="Workstatus" width="242" height="267">
          </picture>
          <div class="ind-title">
            <h3>Janitorial Services</h3>
          </div>
        </div>
        <div class="ind-content">
          <a href="<?php bloginfo('url'); ?>/industry/time-tracking-app-for-janitorial-services">
          <h3>Janitorial Services</h3>
          <p>Simplify workforce planning, monitor attendance, and elevate service standards effortlessly.</p>
        </div>
      </div>
      <div class="flex-3 ind-column">
        <div class="ind-image">
          <picture>
            <source type="image/webp" srcset="<?php bloginfo('template_url'); ?>/version-2.0/dev-images/ind-construction.webp">
            <img loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/dev-images/ind-construction.webp" alt="Workstatus" width="242" height="267">
          </picture>
          <div class="ind-title">
            <h3>Construction</h3>
          </div>
        </div>
        <div class="ind-content">
          <a href="<?php bloginfo('url'); ?>/industry/construction">
          <h3>Construction</h3>
          <p>Easily assign projects, track site hours, and manage payroll - all through a single, intuitive platform.</p>
          </a>
        </div>
      </div>
      <div class="flex-3 ind-column">
        <div class="ind-image">
          <picture>
            <source type="image/webp" srcset="<?php bloginfo('template_url'); ?>/version-2.0/dev-images/ind-real-estate.webp">
            <img loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/dev-images/ind-real-estate.webp " alt="Workstatus" width="242" height="267">
          </picture>
          <div class="ind-title">
            <h3>Real Estate</h3>
          </div>
        </div>
        <div class="ind-content">
          <a href="<?php bloginfo('url'); ?>/industry/real-estate">
          <h3>Real Estate</h3>
          <p>Track timesheets, monitor employee locations, calculate work hours, and simplify client billing with ease.</p>
          </a>
        </div>
      </div>
      
      
      <div class="flex-3 ind-column">
        <div class="ind-image">
          <picture>
            <source type="image/webp" srcset="<?php bloginfo('template_url'); ?>/version-2.0/dev-images/ind-ecom.webp">
            <img loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/dev-images/ind-ecom.webp" alt="Workstatus" width="242" height="267">
          </picture>
          <div class="ind-title">
            <h3>E-Commerce</h3>
          </div>
        </div>
        <div class="ind-content">
          <a href="<?php bloginfo('url'); ?>/industry/e-commerce">
          <h3>E-Commerce</h3>
          <p>Enhance field operations, improve customer service, and optimize workforce management with Workstatus.</p>
          </a>
        </div>
      </div>
    </div>
    <div class="ind-right">
      <?php echo $elmImage; ?>
      <div class="indr-content">
        <?php echo $elmContent; ?>        
      </div>
    </div>
  </div>
</div>
</section>
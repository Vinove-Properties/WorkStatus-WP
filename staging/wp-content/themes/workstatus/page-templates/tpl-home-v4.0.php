<?php 
/*
Template Name: Home Page - V4.0 Template
*/ 
get_header();
global $ws_ctas, $RegLink, $LogLink;	
?>
<main class="site__content">
<section class="banner-section">
<div class="home-section">
  <div class="container">
    <div class="flex_row">
      <div class="column column-content">
        <h1>One Platform <span class="highlight">Endless Efficiency</span></h1>
        <p>Simplify project management, time tracking, and attendance management.</p>
      </div>
      <div class="column videoSc" id="has-yt-video">
        <div class="inner">
          <button id="myBtn">Open Modal<div class="playsc"><span class="playicon"></span></div></button>
          <div class="topVideo srp-1">
            <div id="myDIV" class="contbox2">
              <div class="videoWrapper js-videoWrapper">
                <div class="videoPopup">
                  <div id="contentPopup" class="popup-wrapper">
                    <div class="popWrap">
                      <div class="popup-content">
                        <span class="close"></span>
                        <iframe id="video" class="videoIframe js-videoIframe" allowfullscreen
                          data-src="https://www.youtube.com/embed/zMtAs7s3CmU?enablejsapi=1&html5=1&mute=1">
                        </iframe>
                      </div>
                    </div>
                  </div>
                </div>
                <button style="background-image: url(<?php bloginfo('template_url'); ?>/version-2.0/assests/images/homepage-poster.svg)" class="videoPoster lazy-background nb-bg" id="play-button">Play video</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>  
<section class="trusted-by padding-t-70 padding-b-70">
  <div class="container">
    <div class="logo-heading">
      <h4><span>Trusted by startups and Fortune <strong>500</strong> companies</span></h4>
    </div>
    <div class="trusted-flex">
      <div class="trusted-card">
        <picture>
          <img loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/startup-01.svg" alt="trusted" width="178" height="41"> 
        </picture>
      </div>
      <div class="trusted-card">
        <picture>
          <img loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/startup-02.svg" alt="trusted" width="34" height="34">
        </picture>
      </div>
      <div class="trusted-card">
        <picture>
          <img loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/startup-03.svg" alt="trusted" width="127" height="34">
        </picture>
      </div>
      <div class="trusted-card">
        <picture>
          <img loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/startup-04.svg" alt="trusted" width="157" height="44">
        </picture>
      </div>
      <div class="trusted-card">
        <picture>
          <img loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/startup-05.svg" alt="trusted" width="187" height="29">
        </picture>
      </div>
      <div class="trusted-card">
        <picture>
          <img loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/startup-06.svg" alt="trusted" width="149" height="22">
        </picture>
      </div>
    </div>
    <div class="actionBtn"><?php echo cmnBannerCta(); ?></div>
  </div>
</section>
<?php 
$dataDrive = get_field('dd-resul');
if( isset( $dataDrive['is_enabled'] ) && ($dataDrive['is_enabled'] == "yes") ) :
?>
<section class="business-tab bg-light padding-t-120 padding-b-120">
  <div class="container">
    <div class="top-section">
    <?php 
    echo (isset($dataDrive['heading']) && !empty($dataDrive['heading'])) ? '<h6><span class="bg-purple">'.$dataDrive['heading'].'</span></h6>' : '';
    echo $dataDrive['sub_heading'];
    ?>
    </div>
  <div class="feature-tabs">
  <div class="tab-row">
  <nav id="tabs" class="tab-nav">
  <ul>
    <li class="active">
      <a href="#tab01">
      <span class="icon">
        <img class="show" loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/tb01.svg" alt="Icon" width="16" height="18">
        <img class="hide" loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/tb01-hover.svg" alt="Icon" width="16" height="18">
      </span>Time Tracking</a>
    </li>
    <li>
      <a href="#tab02">
      <span class="icon">
        <img class="show" loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/tb01.svg" alt="Icon" 
        width="16" height="18">
        <img class="hide" loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/tb01-hover.svg" alt="Icon" width="16" height="18">
      </span>Productivity Management</a>
    </li>
    <li><a href="#tab03"><span class="icon"><img class="show"  loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/tb01.svg" alt="Icon" width="16" height="18"><img class="hide"  loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/tb01-hover.svg" alt="Icon" width="16" height="18">
      </span>
      Project & Task Management</a>
    </li>
    <li><a href="#tab04"> <span class="icon"><img class="show"  loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/tb01.svg" alt="Icon" width="16" height="18"><img class="hide"  loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/tb01-hover.svg" alt="Icon" width="16" height="18">
      </span>
      Attendance Tracking</a>
    </li>
  </ul>
  </nav>
  <div id="tab-contents" class="bcontents">
  <div id="tab01" class="tab-contents active">
    <div class="dis-flex">
      <div class="content-box">
        <picture>
          <source type="image/webp" srcset="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/data-driven.png">
          <source type="image/png" srcset="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/data-driven.png">
          <img loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/data-driven.png" alt="Tab Image" width="724" height="646">
        </picture>
      </div>
    </div>
  </div>
  <div id="tab02" class="tab-contents">
    <div class="dis-flex">
      <div class="content-box">
        <picture>
          <source type="image/webp" srcset="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/data-driven.png">
          <source type="image/png" srcset="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/data-driven.png">
          <img loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/data-driven.png" alt="Tab Image" width="724" height="646">
        </picture>
      </div>
    </div>
  </div>
  <div id="tab03" class="tab-contents">
    <div class="dis-flex">
      <div class="content-box">
        <picture>
          <source type="image/webp" srcset="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/data-driven.png">
          <source type="image/png" srcset="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/data-driven.png">
          <img loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/data-driven.png" alt="Tab Image" width="724" height="646">
        </picture>
      </div>
    </div>
  </div>
  <div id="tab04" class="tab-contents">
    <div class="dis-flex">
      <div class="content-box">
        <picture>
          <source type="image/webp" srcset="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/data-driven.png">
          <source type="image/png" srcset="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/data-driven.png">
          <img loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/data-driven.png" alt="Tab Image" width="724" height="646">
        </picture>
      </div>
    </div>
  </div>
  </div>
  </div>
  </div>
  </div>
</section>
<?php endif; ?>

  <?php 
  $whyUs = get_field('why-ws');
  if( isset($whyUs['is_enabled']) && ($whyUs['is_enabled'] == "yes") ):
  ?>
  <section class="client-img-section padding-t-120 padding-b-120">
  <div class="container">
  <div class="dis-flex why-ws">
  <div class="flex-2 left-box">
  <div class="top-section">
  <h6><span class="bg-purple"><?php echo $whyUs['heading']; ?></span></h6>
  <?php echo $whyUs['content']; ?>    
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
          <img loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/awrd-01.svg" alt="Workstatus" width="27" height="28">
        </picture>
      </span>
      <span class="star"></span>
    </li>
    <li>
      <span class="aw-icon">
        <picture>
          <img loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/awrd-02.svg" alt="Workstatus" width="78" height="18">
        </picture>
      </span>
      <span class="star"></span>
    </li>
    <li>
      <span class="aw-icon">
        <picture>
        <img loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/awrd-03.svg" alt="Workstatus" width="40" height="34">
        </picture>
      </span>
      <span class="star"></span>
    </li>
  </ul>
  </div>
  <div class="plateform"><?php echo $whyUs['ls-content']; ?></div>
  </div>
  <div class="flex-2 why-right">
  <div class="client-section">
  <div class="client-row">
    <div class="client-stack award-animate-slide-to-left hover:pause">
      <ul>
        <li>
          <picture class="awimg">
            <img src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/ex-01.svg" alt="" width="130" height="29">
          </picture>
          <a class="move" href="#"></a>
          <div class="star-rt">4.6 Excellent <img src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/4.6rate.svg" alt="Award" width="100" height="17"></div>
          <p>Invoicera is a lifesaver! I always know who's paid and who owes me. It keeps my finances organized, saving me time and stress, especially at tax time.</p>
        </li>
        <li>
          <picture class="awimg">
            <img src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/ex-01.svg" alt="" width="130" height="29">
          </picture>
          <a class="move" href="#"></a>
          <div class="star-rt">4.6 Excellent <img src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/4.6rate.svg" alt="Award" width="100" height="17"></div>
          <p>Invoicera is a lifesaver! I always know who's paid and who owes me. It keeps my finances organized, saving me time and stress, especially at tax time.</p>
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
  <?php endif; ?>
  
  <?php get_template_part('common/cmn', 'workplaces', ['elm-class' => 'workplace-section bg-blue padding-t-120 padding-b-120' ]); ?>
  <?php get_template_part('common/cmn', 'usps', ['cta' => _getDemoCTA('button-common margin-t-80', false)]); ?>

  <?php 
  $featureSlide = get_field('feature-slide');
  if( isset($featureSlide['is_enabled']) && ($featureSlide['is_enabled'] == "yes") ) :
  ?>
  <section class="feature-slide-section bg-light padding-t-120 padding-b-120">
  <div class="container">
  <div class="top-section text-center">
    <?php 
    echo (isset($featureSlide['heading']) && !empty($featureSlide['heading'])) ? '<h6><span class="bg-purple">'.$featureSlide['heading'].'</span></h6>' : '';
    echo $featureSlide['sub_heading'];
    ?>
  </div>
  <?php if($featureSlide['cards']) : ?>
  <div class="dis-flex featured-out">
    <div class="dis-flex featured-slider" id="featured-slide">
      <div class="glider" id="glider">
        <?php 
        foreach($featureSlide['cards'] as $row){
          $thumb = get_bloginfo('template_url').'/version-2.0/assests/images/featureslide-01.png';  
          if( $row['thumb'] ){
          $thumb = $row['thumb']['url'];
          }
          echo '<div class="flex-3">
          <div class="box-3" style="background-image:url('.$thumb.');">
          <h3>'.$row['title'].'</h3>
          <div class="overlay-text">'.$row['content'].'<a href="'.$row['link'].'" class="no-more">Know More</a></div>
          </div>
          </div>';
        } 
        ?>
      </div>
      <!-- Progress Bar -->
      <div class="progress-container"><div class="progress-bar"></div></div>
      <div role="tablist" class="dots"></div>
      <div class="prev-next-btn">
        <button class="glider-prev tail-prev" aria-disabled="false"></button>
        <button class="glider-next tail-next" aria-disabled="false"></button>
      </div>
    </div>
    <div class="right-section">
      <h4>Optimize Time Tracking & Workforce Coordination</h4>
      <picture>
        <source type="image/webp" srcset="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/button-image.png">
        <source type="image/png" srcset="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/button-image.png">
        <img loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/button-image.png" alt="persona"
          width="205" height="155">
      </picture>
      <a href="#" class="is-arrow">Explore all Use Cases</a>
    </div>
  </div>
  <?php endif; ?>
  <?php echo _getDemoCTA('button-common margin-t-80', false); ?>  
  </div>
  </section>
  <?php endif; ?>

  <section class="user-persona bg-blue padding-t-120 padding-b-120">
  <div class="container">
    <div class="user-persona__content">
      <div class="user-persona__image">
        <picture>
          <source type="image/webp" srcset="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/persona-img.png">
          <source type="image/png" srcset="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/persona-img.png">
          <img loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/persona-img.png" alt="persona"
            width="539" height="572">
        </picture>
      </div>
      <div class="top-section text-center">
        <h6><span class="bg-purple">LOREM IPSUM</span></h6>
        <h2>User Persona</h2>
        <p>Set the stage for proactive problem-solving and self-guided development with the right and timely insights.</p>
      </div>
    </div>
    <div class="user-persona__grid">
      <div class="persona-card">
        <picture>
          <img class="normal" loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/perso-01.svg" alt="persona"
            width="44" height="44">
          <img class="hover" loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/perso-02.svg" alt="persona"
            width="44" height="44">
        </picture>
        <h3>Business Owners</h3>
        <p>Empower teams, boost productivity</p>
        <a href="#" class="is-arrow">Learn More</a>
      </div>
      <div class="persona-card">
        <picture>
          <img class="normal" loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/perso-01.svg" alt="persona"
            width="44" height="44">
          <img class="hover" loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/perso-02.svg" alt="persona"
            width="44" height="44">
        </picture>
        <h3>Business Owners</h3>
        <p>Empower teams, boost productivity</p>
        <a href="#" class="is-arrow">Learn More</a>
      </div>
      <div class="persona-card">
        <picture>
          <img class="normal" loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/perso-01.svg" alt="persona"
            width="44" height="44">
          <img class="hover" loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/perso-02.svg" alt="persona"
            width="44" height="44">
        </picture>
        <h3>Business Owners</h3>
        <p>Empower teams, boost productivity</p>
        <a href="#" class="is-arrow">Learn More</a>
      </div>
      <div class="persona-card">
        <picture>
          <img class="normal" loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/perso-01.svg" alt="persona"
            width="44" height="44">
          <img class="hover" loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/perso-02.svg" alt="persona"
            width="44" height="44">
        </picture>
        <h3>Business Owners</h3>
        <p>Empower teams, boost productivity</p>
        <a href="#" class="is-arrow">Learn More</a>
      </div>
    </div>
  </div>
</section>
<section class="grade-solution bg-light padding-t-120 padding-b-120">
<div class="container">
  <div class="top-section text-center">
    <h6><span class="bg-purple">EMPOWERING WORKFLOW & WORKFORCE</span></h6>
    <h2>Enterprise-Grade Solutions</h2>
    <p>Secure infrastructure built to grow with your team.</p>
  </div>
  <div class="solution-grid">
    <div class="solution-card">
      <h3>Secure access, complete control
      </h3>
      <picture>
        <source type="image/webp" srcset="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/solution-01.png">
        <source type="image/png" srcset="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/solution-01.png">
        <img loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/solution-01.png"
          alt="Workstatus" width="263" height="140">
      </picture>
      <ul>
        <li>Single sign-on</li>
        <li>Custom roles & permissions</li>
      </ul>
    </div>
    <div class="solution-card">
      <h3>Effortless <br>onboarding
      </h3>
      <picture>
        <source type="image/webp" srcset="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/solution-02.png">
        <source type="image/png" srcset="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/solution-02.png">
        <img loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/solution-02.png"
          alt="Workstatus" width="263" height="140">
      </picture>
      <ul>
        <li>Concierge setup</li>
        <li>Account provisioning</li>
      </ul>
    </div>
    <div class="solution-card">
      <h3>Elevate your<br> workflow
      </h3>
      <picture>
        <source type="image/webp" srcset="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/solution-03.png">
        <source type="image/png" srcset="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/solution-03.png">
        <img loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/solution-03.png"
          alt="Workstatus" width="263" height="140">
      </picture>
      <ul>
        <li>Advanced reporting
        </li>
        <li>Background timer
        </li>
      </ul>
    </div>
  </div>
  <div class="button-common margin-t-80">
    <div class="cmn-democta">
      <div><a href="javascript:void(0)" class="ctbtn" onclick="call_demows();" target="_self">Book A Demo</a>
        <span class="nccr">No credit card required</span>
      </div>
      <span class="devide">OR</span>
      <div><a data-href="https://app.workstatus.io/auth/register/?pid=42&amp;type=monthly" href="javascript:void(0);" class="ctbtn bgtrans" onclick="return get_ws_signupform(this);">Start Free Trial</a>
      </div>
    </div>
  </div>
</div>
</section>

 <section class="work-culture padding-t-120 padding-b-120">
<div class="container">
  <div class="top-section text-center">
    <h6><span class="bg-purple">BOOST PROFITABILITY</span></h6>
    <h2>Gain Complete Transparency With Real-Time Data</h2>
    <p>Monitor and manage each employee’s time on tasks and projects efficiently to improve overall team performance and ROI-</p>
  </div>
</div>
<div class="feature-loop">
  <div class="container">
    <div class="feature-row">
      <div class="column-left">
        <div class="text-column">
          <h3>Performance Driven Workforce</h3>
          <p>Empower employees with transparent tracking systems. Understand work patterns, enhance productivity, quickly identify burnout.</p>
        </div>
        <div class="text-column">
          <h3>Technology Driven Workplace</h3>
          <p>Empower employees with transparent tracking systems. Understand work patterns, enhance productivity, quickly identify burnout.</p>
        </div>
        <div class="text-column">
          <h3>Optimized Processes-Maximized Profits</h3>
          <p>Empower employees with transparent tracking systems. Understand work patterns, enhance productivity, quickly identify burnout.</p>
        </div>
      </div>
      <div class="column-right">
        <picture>
          <img loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/feature-home.png" alt="Workstatus" width="612" height="505">
        </picture>
      </div>
    </div>
    <?php echo _getDemoCTA("button-common margin-t-50", false); ?>     
  </div>
</div>
</section> 
<section class="feature-scroller">
<div class="container">
  <div class="feature-wrap bg-light padding-t-120 padding-b-120">
    <div class="left-panel">
      <div class="top-section">
        <h6><span class="bg-purple">GET MORE OUT OF YOUR PROJECTS</span></h6>
        <h2>Leaks & Distractions, 
          Not Productivity
        </h2>
        <p>Get access to smart insights to streamline your workflow, enhance employees’ performance, manage budgets, and ensure on-time deliveries.</p>
        <div class="button-common margin-t-50">
          <div class="cmn-democta">
            <div><a href="javascript:void(0)" class="ctbtn" onclick="call_demows();" target="_self">Book A Demo</a></div>
            <span class="devide">OR</span>
            <div><a data-href="https://app.workstatus.io/auth/register/?pid=42&amp;type=monthly" href="javascript:void(0);" class="ctbtn bgtrans" onclick="return get_ws_signupform(this);">Start Free Trial</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="right-panel">
      <div class="content-box">
        <div class="img-sec">
          <picture>
            <img loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/scroll-image01.png" alt="Workstatus" width="418" height="223">
          </picture>
        </div>
        <div class="text-box">
          <h3>Actionable Time Data</h3>
          <p>Track time spent by your employees down to the minute and get real-time data.</p>
          <ul>
            <li>Precise time records without error</li>
            <li>Dispute-free and timely billing</li>
            <li>Precise time records </li>
          </ul>
        </div>
      </div>
      <div class="content-box">
        <div class="img-sec">
          <picture>
            <img loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/scroll-image01.png" alt="Workstatus" width="418" height="223">
          </picture>
        </div>
        <div class="text-box">
          <h3>Actionable Time Data</h3>
          <p>Track time spent by your employees down to the minute and get real-time data.</p>
          <ul>
            <li>Precise time records without error</li>
            <li>Dispute-free and timely billing</li>
            <li>Precise time records </li>
          </ul>
        </div>
      </div>
      <div class="content-box">
        <div class="img-sec">
          <picture>
            <img loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/scroll-image01.png" alt="Workstatus" width="418" height="223">
          </picture>
        </div>
        <div class="text-box">
          <h3>Actionable Time Data</h3>
          <p>Track time spent by your employees down to the minute and get real-time data.</p>
          <ul>
            <li>Precise time records without error</li>
            <li>Dispute-free and timely billing</li>
            <li>Precise time records </li>
          </ul>
        </div>
      </div>
      <div class="content-box">
        <div class="img-sec">
          <picture>
            <img loading="lazy" src="<?php bloginfo('template_url'); ?>/version-2.0/assests/images/scroll-image01.png" alt="Workstatus" width="418" height="223">
          </picture>
        </div>
        <div class="text-box">
          <h3>Actionable Time Data</h3>
          <p>Track time spent by your employees down to the minute and get real-time data.</p>
          <ul>
            <li>Precise time records without error</li>
            <li>Dispute-free and timely billing</li>
            <li>Precise time records </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
<?php 
$wsIndustry = get_field("ws-industries");
if( isset( $wsIndustry['required'] ) && ($wsIndustry['required'] == "yes") ){
  $sec_content = $wsIndustry['content'];
  $sec_content .= '<a href="'.$wsIndustry['cta-link'].'" class="is-arrow">'.$wsIndustry['cta-title'].'</a>';
  $elmImage = '<picture class="card-img">
  <source type="image/webp" srcset="'.get_bloginfo('template_url').'/version-2.0/assests/images/dashboard-img.png">
  <source type="image/png" srcset="'.get_bloginfo('template_url').'/version-2.0/assests/images/dashboard-img.png">
  <img loading="lazy" src="'.get_bloginfo('template_url').'/version-2.0/assests/images/dashboard-img.png" 
  alt="Workstatus" width="404" height="217">
  </picture>';
  if( isset($wsIndustry['image']) && !empty( $wsIndustry['image']) ){
  $elmImage = pxlGetPtag( $wsIndustry['image'], "WS Industries", "card-img" );
  }
  get_template_part('common/cmn', 'industries', ['elm-image' => $elmImage, 'elm-content' => $sec_content ]);  
}

//get_template_part('common/ws', 'pricing');  
get_template_part('common/pricing', 'v4.0', ['elm-class' => "padding-t-120 bg-light padding-b-120"]);
?>
<?php  
$faq = get_field('faq');    
if( isset($faq['is_enabled']) && ($faq['is_enabled'] === "yes") ) : 
?>
<section class="faqsRow wfull for-heading-center">
  <div class="container">
    <div class="top-section">
      <h6><span class="bg-purple"><?php echo $faq['heading']; ?></span></h6>
      <h2><?php echo $faq['sub_heading']; ?></h2>
    </div>
    <div class="flex_row">
      <div itemscope itemtype="https://schema.org/FAQPage">
        <div class="column">
          <?php 
            if( $faq['question_answer_repeater'] ){  $i = 1;
            foreach( $faq['question_answer_repeater'] as $row ) {
            $active = ($i<=3) ? "open" : "";
            ?>
          <div class="faq-accordion-item-outer <?php echo $active; ?>" itemscope itemprop="mainEntity"
            itemtype="https://schema.org/Question">
            <h3 itemprop="name"><?php echo $row['question'];?>
            </h3>
            <div class="faq-accordion-content">
              <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                <div itemprop="text"><?php echo $row['answer'];?></div>
              </div>
            </div>
          </div>
          <?php $i++; } } ?>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>
<?php //get_template_part('common/blog', '', ['elm-class' => 'margin-b-120 margin-t-120']); ?>
<?php get_template_part('common/cmn', 'testimonial'); ?>
<?php get_template_part('common/cmn', 'globalrating'); ?>
<?php get_template_part('common/cmn', 'journey'); ?>
</main>
<?php get_footer(); ?>
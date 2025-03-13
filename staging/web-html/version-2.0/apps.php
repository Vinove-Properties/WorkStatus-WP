<?php require_once 'common/inc/config.inc.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="alternate" href="<?php echo SITE_URL; ?>/android" hreflang="en-us" />
    <link type="text/css" href="./assests/css/platform.css" rel="preload stylesheet" as="style" />
    <?php require_once 'common/inc/header-files.php';?>
  </head>
  <body>
    <?php require_once 'common/inc/after-body-tag.php'; ?>
    <div class="body__wrapper">
      <div class="feature-header">
        <?php require_once 'common/header.php';?>
      </div>
      <main class="site__content">
        <section class="hero-banner inner-banner-bg">
          <div class="bannerwrap">
            <div class="container">
              <div class="inner-wrap">
                <h1>Workstatus App for Every Device</h1>
                <p>Get user-friendly and feature-rich apps for seamless integration and synchronization. Experience a unified and efficient <br>
                 experience across all your devices.
                </p>
                <div class="actionBtn">
                  <?php if( geoCTAcheck() === true ) : ?>
                  <div><a href="<?php echo $RegLink; ?>"
                    class="primary_btn1"><?php echo $ws_ctas['cta_text']; ?></a>
                    <small>No credit card required</small>
                  </div>
                  <?php endif; ?>
                  <div><a href="javascript:void(0)" onclick="call_demows();" class="primary_btn2">Book A Demo</a>
                    <small>Get queries answered from experts</small>
                  </div>
                </div>
                <?php require_once 'common/available-device.php';?>
                <?php require_once 'common/partners.php';?>
              </div>
            </div>
          </div>
        </section>
        <section class="trackEm padd-0">
          <div class="container">
            <div class="top-section">
              <h6><span class="bg-purple">Enjoy multi-benefits</span></h6>
              <h2>Why Choose Workstatus's Multi-Platform Apps?</h2>
              <p>Discover the convenience of tracking time, monitoring activity, and collaborating with your team from anywhere, anytime.</p>
            </div>
            <div class="trackRow align-center">
              <div class="trackImg">
                <picture>
                  <source type="image/webp" srcset="./assests/images/android-track.webp">
                  <source type="image/png" srcset="./assests/images/android-track.png">
                  <img loading="lazy" src="./assests/images/android-track.png" alt="Tracking" width="541" height="496">
                </picture>
              </div>
              <div class="trackContent">
                <div class="row">
                  <h3><i></i> Flexibility and Convenience </h3>
                  <p>Track time, manage tasks, and collaborate with your team effortlessly, no matter where you are or which device you use.</p>
                </div>
                <div class="row">
                  <h3><i></i> Flexibility and Convenience </h3>
                  <p>Track time, manage tasks, and collaborate with your team effortlessly, no matter where you are or which device you use.</p>
                </div>
                <div class="row">
                  <h3><i></i> Flexibility and Convenience </h3>
                  <p>Track time, manage tasks, and collaborate with your team effortlessly, no matter where you are or which device you use.</p>
                </div>
                <div class="row">
                  <h3><i></i> Flexibility and Convenience </h3>
                  <p>Track time, manage tasks, and collaborate with your team effortlessly, no matter where you are or which device you use.</p>
                </div>
              </div> 
            </div>
          </div>
        </section>

        
        <section class="four-columns p50">
          <div class="container">
            <div class="flex_row">
              <div class="column">
              <div class="bx-content">
                <picture>
                  <source type="image/webp" srcset="./assests/images/wrkicon-01.webp">
                  <source type="image/png" srcset="./assests/images/wrkicon-01.png">
                  <img loading="lazy" src="./assests/images/wrkicon-01.png" alt="Workplace" width="42" height="42">
                </picture>
                <h3>Zoho</h3>
                <p>Integrate Zoho with Workstatus for seamless data flow, no more manual entry. Enjoy unified workflows, saving time and effort with:</p>
                <ul>
                  <li>Automated Data Sync</li>
                  <li>Productivity meters</li>
                  <li>Real-time Analytics</li>
                </ul>
                  </div>
                  </a>
                <a href="/remote-team-management" class="view-more">Explore</a>


              </div>
              <div class="column">
                <picture>
                  <source type="image/webp" srcset="./assests/images/wrkicon-02.webp">
                  <source type="image/png" srcset="./assests/images/wrkicon-02.png">
                  <img loading="lazy" src="./assests/images/wrkicon-02.png" alt="Workplace" width="42" height="42">
                </picture>
                <h3>Trello</h3>
                <p>Integrate Zoho with Workstatus for seamless data flow, no more manual entry. Enjoy unified workflows, saving time and effort with:</p>
                <ul>
                  <li>Automated Data Sync</li>
                  <li>Productivity meters</li>
                  <li>Real-time Analytics</li>
                </ul>
              </div>
              <div class="column">
                <picture>
                  <source type="image/webp" srcset="./assests/images/wrkicon-03.webp">
                  <source type="image/png" srcset="./assests/images/wrkicon-03.png">
                  <img loading="lazy" src="./assests/images/wrkicon-03.png" alt="Workplace" width="42" height="42">
                </picture>
                <h3>AWS</h3>
                <p>Integrate Zoho with Workstatus for seamless data flow, no more manual entry. Enjoy unified workflows, saving time and effort with:</p>
                <ul>
                  <li>Automated Data Sync</li>
                  <li>Productivity meters</li>
                  <li>Real-time Analytics</li>
                </ul>
              </div>
              <div class="column">
                <picture>
                  <source type="image/webp" srcset="./assests/images/wrkicon-04.webp">
                  <source type="image/png" srcset="./assests/images/wrkicon-04.png">
                  <img loading="lazy" src="./assests/images/wrkicon-04.png" alt="Workplace" width="42" height="42">
                </picture>
                <h3>SMTP</h3>
                <p>Integrate Zoho with Workstatus for seamless data flow, no more manual entry. Enjoy unified workflows, saving time and effort with:</p>
                <ul>
                  <li>Automated Data Sync</li>
                  <li>Productivity meters</li>
                  <li>Real-time Analytics</li>
                </ul>
              </div>
            </div>
            <div class="mt80 btnSc">
              <div class="cmn-democta ctasec">
                <div>
                  <a data-href="https://app.workstatus.io/auth/register/?pid=1&amp;type=monthly" href="javascript:void(0);" class="ctbtn" onclick="if (!window.__cfRLUnblockHandlers) return false; return get_ws_signupform(this);">Start Free Trial</a>
                  <span class="nccr">No credit card required</span>
                </div>
                <span class="devide">OR</span>
                <div><a href="javascript:void(0)" class="ctbtn nobg" onclick="if (!window.__cfRLUnblockHandlers) return false; call_demows();" target="_self">Book A Demo</a></div>
              </div>
            </div>
          </div>
        </section>
        <section class="timeline">
          <div class="container">
            <div class="top-section">
              <h6><span class="bg-purple">As simple as 1-2-3</span></h6>
              <h2>A Powerful workforce management app for you</h2>
              <p>Get a better understanding of your large workforce with Workstatus Insights & Analytics. It lets managers, HR professionals, and executives gain valuable insights into working hours, make better staffing decisions, and stay informed about the workforce.</p>
            </div>
            <div class="trackRow align-center">
              <div class="trackImg">
                <picture>
                  <source type="image/webp" srcset="./assests/images/mac-track.webp">
                  <source type="image/png" srcset="./assests/images/mac-track.png">
                  <img loading="lazy" src="./assests/images/mac-track.png" alt="Tracking Software"
                    width="475" height="379">
                </picture>
              </div>
              <div class="trackContent">
                <div class="row">
                  <h3>Sign Up</h3>
                  <p>Visit the Workstatus website, create an account, and complete the registration process.</p>
                </div>
                <div class="row">
                  <h3>Download our android app</h3>
                  <p>Click and start the Workstatus tracker. Sit back and relax as Workstatus silently records their clock-in and out timings, working hours, location, and more.</p>
                </div>
                <div class="row">
                  <h3>Explore Analytics and Insights</h3>
                  <p>Analyze workforce productivity, track project progress, and identify areas for optimization to make data-driven decisions for better workforce management.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="one-solution list-icon">
            <div class="container">
              <div class="top-section">
                <h6><span class="bg-purple">Everyone, Everywhere, Everytime</span></h6>
                <h2>Workforce management app for all</h2>
                <p>Discover Workstatus is a versatile and all-encompassing workforce management suite designed to meet the requirements of enterprises, start-ups, and freelancers' requirements. Here's how:</p>
              </div>
              <div class="flex_row">
                <div class="column-three">
                  <div class="box">
                  <picture>
                    <source type="image/webp" srcset="./assests/images/one-sol01.webp">
                    <source type="image/png" srcset="./assests/images/one-sol01.png">
                    <img loading="lazy" src="./assests/images/one-sol01.png" alt="One Solution" width="92" height="59">
                  </picture>
                  <h3>Enterprises</h3>
                  <p>Workstatus provides enterprises with effective project monitoring and tracking. It delivers AI-powered insights into project progression, task completion, and team performance, enabling strategic decision-making.</p>
              </div>
                </div>
                <div class="column-three">
                <div class="box">
                  <picture>
                    <source type="image/webp" srcset="./assests/images/one-sol02.webp">
                    <source type="image/png" srcset="./assests/images/one-sol02.png">
                    <img loading="lazy" src="./assests/images/one-sol02.png" alt="One Solution" width="92" height="59">
                  </picture>
                  <h3>Start-ups</h3>
                  <p>For start-ups, Workstatus is an invaluable, cost-effective, and comprehensive attendance management tool. It equips founders with real-time insights and data-driven decision-making capabilities.</p>
              </div>
                </div>
                <div class="column-three">
                  <div class="box">
                  <picture>
                    <source type="image/webp" srcset="./assests/images/one-sol03.webp">
                    <source type="image/png" srcset="./assests/images/one-sol03.png">
                    <img loading="lazy" src="./assests/images/one-sol03.png" alt="One Solution" width="92" height="59">
                  </picture>
                  <h3>Freelancers</h3>
                  <p>Workstatus offers precise time tracking and invoicing capabilities, ensuring timely payment for their work. Its transparency and collaboration features foster trust and credibility with clients.</p>
               </div>
                </div>
              </div>
            </div>
          </section>
          <section class="trackEm bglight">
          <div class="container">
            <div class="top-section">
              <h6><span class="bg-purple">dummy text</span></h6>
              <h2>Promoting a culture of trust and accountability</h2>
            </div>
            <div class="trackRow">
              <div class="trackImg">
                <picture>
                  <source type="image/webp" srcset="./assests/images/optimize-image.webp">
                  <source type="image/png" srcset="./assests/images/optimize-image.png">
                  <img loading="lazy" src="./assests/images/optimize-image.png" alt="Empowering Leaders" width="741" height="743">
                </picture>
              </div>
              <div class="trackContent">
                <div class="row">
                <h5>EMPLOYEES</h5>
                  <h3>Create transparency</h3>
                  <p>Precise tracking gives valuable insights into your productivity, projects, and workload. Showcase your worth as a reliable team member and strive to enhance your daily productivity.</p>
                </div>
                <div class="row">
                <h5>MANAGERS</h5>
                  <h3>Measure performance</h3>
                  <p>AI dashboards provide managers with team and project metrics, empowering them to showcase their performance and acknowledge staff achievements effortlessly.</p>
                </div>
                <div class="row">
                <h5>LEADERSHIP & HR</h5>
                  <h3>Smooth HR workflow</h3>
                  <p>Leverage historical data and industry benchmarks to establish a strong company foundation and find valuable growth opportunities. Workstatus lets you prioritize employee development while making informed decisions for your company's progress.</p>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="wsMobile whitetxt">
          <?php require_once 'common/workstatus-device.php';?>
        </section>
        <section class="faqsRow wfull for-heading-center">
          <div class="container">
            <div class="top-section">
              <h6><span class="bg-purple">Get Answers For</span></h6>
              <h2>Frequently Asked Questions</h2>
            </div>
            <div class="flex_row">
              <div itemscope itemtype="https://schema.org/FAQPage">
                <div class="column">
                  <div class="faq-accordion-item-outer open" itemscope itemprop="mainEntity"
                    itemtype="https://schema.org/Question">
                    <h3 itemprop="name">How Much Does Workstatus Time Tracking App Cost?
                    </h3>
                    <div class="faq-accordion-content">
                      <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div itemprop="text">
                          <p>The Workstatus time tracking app for Android costs can be checked on our pricing page. There is a 7-day free trial available, so you can try it out before committing to anything. You can add ten projects together and tasks and get detailed reports on your team's progress.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="faq-accordion-item-outer" itemscope itemprop="mainEntity"
                    itemtype="https://schema.org/Question">
                    <h3 itemprop="name"> Is Workstatus Time Tracking App Safe For My Android Phone?</h3>
                    <div class="faq-accordion-content">
                      <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div itemprop="text">
                          <p>Workstatus is completely safe to use on Android devices. The app does not require any permissions that would put your device at risk, and it does not collect or store any personal information.
                          </p>
                          <p> It is simple to use and can be customized to meet the specific needs of your business. The app runs in the background of your device, so you can continue working while it tracks your time.
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="useful-resources-blog-section bglight for-heading-center">
          <div class="container">
            <div class="top-section">
              <h6><span class="bg-purple">Blog</span></h6>
              <h2>Useful Resources</h2>
            </div>
            <div class="for-link-blue flex_row justify-center">
              <div class="blog-box column-three">
                <a href="https://www.workstatus.io/blog/how-to-manage-remote-work-schedules/" class="blog-link">
                  <div class="thumb">
                    <picture>
                      <source type="image/webp" srcset="./assests/images/useful-resources-blog-1.jpg">
                      <source type="image/png" srcset="./assests/images/useful-resources-blog-1.jpg">
                      <img loading="lazy" src="./assests/images/useful-resources-blog-1.jpg" alt="Workstatus Time" width="400" height="242"> 
                    </picture>
                  </div>
                  <div class="blog-title">
                    <h3>How to Manage Remote Work Schedules</h3>
                    <span class="small_anchor">Read more</span>
                  </div>
                </a>
              </div>
              <div class="blog-box column-three">
                <a href="https://www.workstatus.io/blog/how-to-deal-with-your-anxiety-to-become-more-productive/" class="blog-link">
                  <div class="thumb">
                    <picture>
                      <source type="image/webp" srcset="./assests/images/useful-resources-blog-2.jpg">
                      <source type="image/png" srcset="./assests/images/useful-resources-blog-2.jpg">
                      <img loading="lazy" src="./assests/images/useful-resources-blog-2.jpg" alt="Workstatus Time" width="400" height="242"> 
                    </picture>
                  </div>
                  <div class="blog-title">
                    <h3>How to Deal With Your Anxiety to Become More Productive?</h3>
                    <span class="small_anchor">Read more</span>
                  </div>
                </a>
              </div>
              <div class="blog-box column-three">
                <a href="https://www.workstatus.io/blog/useful-strategies-for-avoiding-toxic-productivity/" class="blog-link">
                  <div class="thumb">
                    <picture>
                      <source type="image/webp" srcset="./assests/images/useful-resources-blog-3.jpg">
                      <source type="image/png" srcset="./assests/images/useful-resources-blog-3.jpg">
                      <img loading="lazy" src="./assests/images/useful-resources-blog-3.jpg" alt="Workstatus Time" width="400" height="242"> 
                    </picture>
                  </div>
                  <div class="blog-title">
                    <h3>10 Useful & Tested Strategies for Avoiding Toxic Productivity</h3>
                    <span class="small_anchor">Read more</span>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </section>
        <?php require_once 'common/workstatus-journey.php';?>
      </main>
      <?php require_once 'common/footer.php';?>
    </div>
    <?php if( !isMobile() ) : ?>
    <script src="./assests/js/glider.min.js"></script>
    <?php endif; ?>
    <script src="./assests/js/script.js"></script>
  </body>
</html>
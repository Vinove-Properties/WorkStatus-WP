<?php require_once 'common/inc/config.inc.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="alternate" href="https://www.workstatus.io/" hreflang="en-us" />
    <link rel="preload stylesheet" type="text/css"  href="assests/css/index-min.css" defer  />
    <link rel="preload stylesheet" as="style" id="ws-pricing-fltr-css" href="https://www.workstatus.io/wp-content/themes/workstatus/pricing-filter.css?ver=1.45.45" media="all" />
    <?php require_once 'common/inc/header-files.php';?>
  </head>
  <body>
    <?php require_once 'common/inc/after-body-tag.php'; ?>
    <div class="feature-header"><?php require_once 'common/menu-v4.php';?></div>
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
                  <button id="myBtn">
                    Open Modal  
                    <div class="playsc"><span class="playicon"></span></div>
                  </button>
                  <div class="topVideo srp-1">
                    <div id="myDIV" class="contbox2">
                      <div class="videoWrapper js-videoWrapper">
                        <button style="background-image: url(./assests/images/homepage-poster.svg)" class="videoPoster lazy-background nb-bg" id="play-button">
                        Play video
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
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
      <section class="trusted-by padding-t-70 padding-b-70">
        <div class="container">
          <div class="logo-heading">
            <h4><span>Trusted by startups and Fortune <strong>500</strong>    companies</span></h4>
          </div>
          <div class="trusted-flex">
            <div class="trusted-card">
              <picture>
                <img  loading="lazy" src="./assests/images/startup-01.svg" alt="trusted" width="178" height="41"> 
              </picture>
            </div>
            <div class="trusted-card">
              <picture>
                <img  loading="lazy" src="./assests/images/startup-02.svg" alt="trusted" width="34" height="34">
              </picture>
            </div>
            <div class="trusted-card">
              <picture>
                <img  loading="lazy" src="./assests/images/startup-03.svg" alt="trusted" width="127" height="34">
              </picture>
            </div>
            <div class="trusted-card">
              <picture>
                <img  loading="lazy" src="./assests/images/startup-04.svg" alt="trusted" width="157" height="44">
              </picture>
            </div>
            <div class="trusted-card">
              <picture>
                <img  loading="lazy" src="./assests/images/startup-05.svg" alt="trusted" width="187" height="29">
              </picture>
            </div>
            <div class="trusted-card">
              <picture>
                <img  loading="lazy" src="./assests/images/startup-06.svg" alt="trusted" width="149" height="22">
              </picture>
            </div>
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
      </section>
      <section class="business-tab bg-light padding-t-120 padding-b-120">
        <div class="container">
          <div class="top-section">
            <h6><span class="bg-purple">Data Driving Results</span></h6>
            <h2>Strategic Decisions with Data-Driven Insights</h2>
            <p>Unlock valuable insights with detailed dashboards, productivity reports, and location analytics</p>
          </div>
          <div class="feature-tabs">
            <div class="tab-row">
              <nav id="tabs" class="tab-nav">
                <ul>
                  <li class="active"><a href="#tab01">
                  <span class="background-fill"></span>
                    <span class="icon"><img class="show"  loading="lazy" src="./assests/images/tb01.svg" alt="Icon" width="16" height="18"><img class="hide"  loading="lazy" src="./assests/images/tb01-hover.svg" alt="Icon" width="16" height="18">
                    </span>
                    Time Tracking
                    <span class="progress-bar"></span>
                  </a>
                  </li>
                  <li><a href="#tab02">  <span class="background-fill"></span> <span class="icon"><img class="show"  loading="lazy" src="./assests/images/tb01.svg" alt="Icon" width="16" height="18"><img class="hide"  loading="lazy" src="./assests/images/tb01-hover.svg" alt="Icon" width="16" height="18">
                    </span>
                    Productivity Management
                    <span class="progress-bar"></span>
                  </a>
                  </li>
                  <li><a href="#tab03"> <span class="background-fill"></span><span class="icon"><img class="show"  loading="lazy" src="./assests/images/tb01.svg" alt="Icon" width="16" height="18"><img class="hide"  loading="lazy" src="./assests/images/tb01-hover.svg" alt="Icon" width="16" height="18">
                    </span>
                    Project & Task Management
                    <span class="progress-bar"></span>
                  </a>
                  </li>
                  <li><a href="#tab04"> <span class="background-fill"></span><span class="icon"><img class="show"  loading="lazy" src="./assests/images/tb01.svg" alt="Icon" width="16" height="18"><img class="hide"  loading="lazy" src="./assests/images/tb01-hover.svg" alt="Icon" width="16" height="18">
                    </span>
                    Attendance Tracking
                    <span class="progress-bar"></span>
                  </a>
                  </li>
                  <li><a href="#tab05"><span class="background-fill"></span> <span class="icon"><img class="show"  loading="lazy" src="./assests/images/tb01.svg" alt="Icon" width="16" height="18"><img class="hide"  loading="lazy" src="./assests/images/tb01-hover.svg" alt="Icon" width="16" height="18">
                    </span>
                    Attendance Tracking
                    <span class="progress-bar"></span>
                  </a>
                  </li>
                </ul>
              </nav>
              <div id="tab-contents" class="bcontents">
                <div id="tab01" class="tab-contents active">
                  <div class="dis-flex">
                    <div class="content-box">
                      <picture>
                        <source type="image/webp" srcset="./assests/images/data-driven.png">
                        <source type="image/png" srcset="./assests/images/data-driven.png">
                        <img loading="lazy" src="./assests/images/data-driven.png" alt="Tab Image" width="724" height="646">
                      </picture>
                    </div>
                  </div>
                </div>
                <div id="tab02" class="tab-contents">
                  <div class="dis-flex">
                    <div class="content-box">
                      <picture>
                        <source type="image/webp" srcset="./assests/images/data-driven.png">
                        <source type="image/png" srcset="./assests/images/data-driven.png">
                        <img loading="lazy" src="./assests/images/data-driven.png" alt="Tab Image" width="724" height="646">
                      </picture>
                    </div>
                  </div>
                </div>
                <div id="tab03" class="tab-contents">
                  <div class="dis-flex">
                    <div class="content-box">
                      <picture>
                        <source type="image/webp" srcset="./assests/images/data-driven.png">
                        <source type="image/png" srcset="./assests/images/data-driven.png">
                        <img loading="lazy" src="./assests/images/data-driven.png" alt="Tab Image" width="724" height="646">
                      </picture>
                    </div>
                  </div>
                </div>
                <div id="tab04" class="tab-contents">
                  <div class="dis-flex">
                    <div class="content-box">
                      <picture>
                        <source type="image/webp" srcset="./assests/images/data-driven.png">
                        <source type="image/png" srcset="./assests/images/data-driven.png">
                        <img loading="lazy" src="./assests/images/data-driven.png" alt="Tab Image" width="724" height="646">
                      </picture>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="client-img-section padding-t-120 padding-b-120">
        <div class="container">
          <div class="dis-flex why-ws">
            <div class="flex-2 left-box">
              <div class="top-section">
                <h6><span class="bg-purple">Why us</span></h6>
                <h2>Work Smarter with Workstatus</h2>
                <p>Stay one step ahead always, manage & track your workforce & workload, analyze data and ensure business growth.</p>
              </div>
              <div class="button-common margin-t-40">
                <div class="cmn-democta">
                  <div><a data-href="https://app.workstatus.io/auth/register/?pid=42&amp;type=monthly" href="javascript:void(0);" class="ctbtn" onclick="return get_ws_signupform(this);" target="_self">Start Free Trial</a></div>
                  <span class="devide">OR</span>
                  <div><a href="javascript:void(0)" class="ctbtn bgtrans" onclick="call_demows();" target="_self">Book A Demo</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="flex-2 right-box">
              <div class="dis-flex">
                <div class="flex-2 why-left">
                  <div class="award-sc">
                    <ul>
                      <li>
                        <span class="aw-icon">
                          <picture>
                            <img  loading="lazy" src="./assests/images/awrd-01.svg" alt="Workstatus" width="27" height="28">
                          </picture>
                        </span>
                        <span class="star"></span>
                      </li>
                      <li>
                        <span class="aw-icon">
                          <picture>
                            <img  loading="lazy" src="./assests/images/awrd-02.svg" alt="Workstatus" width="78" height="18">
                          </picture>
                        </span>
                        <span class="star"></span>
                      </li>
                      <li>
                        <span class="aw-icon">
                          <picture>
                            <img  loading="lazy" src="./assests/images/awrd-03.svg" alt="Workstatus" width="40" height="34">
                          </picture>
                        </span>
                        <span class="star"></span>
                      </li>
                    </ul>
                  </div>
                  <div class="plateform">
                    <h3>One Platform,
                      Endless Efficiency
                    </h3>
                    <ul>
                      <li>Detailed insights</li>
                      <li>Streamlined projects</li>
                      <li>Streamlined projects</li>
                      <li>Transparent reporting</li>
                    </ul>
                  </div>
                </div>
                <div class="flex-2 why-right">
                  <div class="client-section">
                    <div class="client-row">
                      <div class="client-stack">
                        <ul class="award-animate-slide-to-left hover:pause">
                          <li>
                            <picture class="awimg">
                              <img src="./assests/images/ex-01.svg" alt="" width="130" height="29">
                            </picture>
                            <a class="move" href="#"></a>
                            <div class="star-rt">4.6 Excellent <img src="./assests/images/4.6rate.svg" alt="Award" width="100" height="17"></div>
                            <p>Invoicera is a lifesaver! I always know who's paid and who owes me. It keeps my finances organized, saving me time and stress, especially at tax time.</p>
                          </li>
                          </li>
                          <li>
                            <picture class="awimg">
                              <img src="./assests/images/ex-01.svg" alt="" width="130" height="29">
                            </picture>
                            <a class="move" href="#"></a>
                            <div class="star-rt">4.6 Excellent <img src="./assests/images/4.6rate.svg" alt="Award" width="100" height="17"></div>
                            <p>Invoicera is a lifesaver! I always know who's paid and who owes me. It keeps my finances organized, saving me time and stress, especially at tax time.</p>
                          </li>
                          <li>
                            <picture class="awimg">
                              <img src="./assests/images/ex-01.svg" alt="" width="130" height="29">
                            </picture>
                            <a class="move" href="#"></a>
                            <div class="star-rt">4.6 Excellent <img src="./assests/images/4.6rate.svg" alt="Award" width="100" height="17"></div>
                            <p>Invoicera is a lifesaver! I always know who's paid and who owes me. It keeps my finances organized, saving me time and stress, especially at tax time.</p>
                          </li>
                          <li>
                            <picture class="awimg">
                              <a class="move" href="#"></a>
                              <img src="./assests/images/ex-01.svg" alt="" width="130" height="29">
                            </picture>
                            <div class="star-rt">4.6 Excellent <img src="./assests/images/4.6rate.svg" alt="Award" width="100" height="17"></div>
                            <p>Invoicera is a lifesaver! I always know who's paid and who owes me. It keeps my finances organized, saving me time and stress, especially at tax time.</p>
                          </li>
                          <li>
                            <picture class="awimg">
                              <a class="move" href="#"></a>
                              <img src="./assests/images/ex-01.svg" alt="" width="130" height="29">
                            </picture>
                            <div class="star-rt">4.6 Excellent <img src="./assests/images/4.6rate.svg" alt="Award" width="100" height="17"></div>
                            <p>Invoicera is a lifesaver! I always know who's paid and who owes me. It keeps my finances organized, saving me time and stress, especially at tax time.</p>
                          </li>
                          <li>
                            <picture class="awimg">
                              <img src="./assests/images/ex-01.svg" alt="" width="130" height="29">
                            </picture>
                            <a class="move" href="#"></a>
                            <div class="star-rt">4.6 Excellent <img src="./assests/images/4.6rate.svg" alt="Award" width="100" height="17"></div>
                            <p>Invoicera is a lifesaver! I always know who's paid and who owes me. It keeps my finances organized, saving me time and stress, especially at tax time.</p>
                          </li>
                          <li>
                            <picture class="awimg">
                              <img src="./assests/images/ex-01.svg" alt="" width="130" height="29">
                            </picture>
                            <a class="move" href="#"></a>
                            <div class="star-rt">4.6 Excellent <img src="./assests/images/4.6rate.svg" alt="Award" width="100" height="17"></div>
                            <p>Invoicera is a lifesaver! I always know who's paid and who owes me. It keeps my finances organized, saving me time and stress, especially at tax time.</p>
                          </li>
                          <li>
                            <picture class="awimg">
                              <img src="./assests/images/ex-01.svg" alt="" width="130" height="29">
                            </picture>
                            <a class="move" href="#"></a>
                            <div class="star-rt">4.6 Excellent <img src="./assests/images/4.6rate.svg" alt="Award" width="100" height="17"></div>
                            <p>Invoicera is a lifesaver! I always know who's paid and who owes me. It keeps my finances organized, saving me time and stress, especially at tax time.</p>
                          </li>
                          <li>
                            <picture class="awimg">
                              <img src="./assests/images/ex-01.svg" alt="" width="130" height="29">
                            </picture>
                            <a class="move" href="#"></a>
                            <div class="star-rt">4.6 Excellent <img src="./assests/images/4.6rate.svg" alt="Award" width="100" height="17"></div>
                            <p>Invoicera is a lifesaver! I always know who's paid and who owes me. It keeps my finances organized, saving me time and stress, especially at tax time.</p>
                          </li>
                          <li>
                            <picture class="awimg">
                              <img src="./assests/images/ex-01.svg" alt="" width="130" height="29">
                            </picture>
                            <a class="move" href="#"></a>
                            <div class="star-rt">4.6 Excellent <img src="./assests/images/4.6rate.svg" alt="Award" width="100" height="17"></div>
                            <p>Invoicera is a lifesaver! I always know who's paid and who owes me. It keeps my finances organized, saving me time and stress, especially at tax time.</p>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="counter">
                    <div class="count-col">
                      <h3>500K+</h3>
                      <p>Active users</p>
                    </div>
                    <div class="count-col">
                      <h3>21M+</h3>
                      <p>Hours Tracked</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="workplace-section bg-blue  padding-t-120 padding-b-120">
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
                      <source type="image/webp" srcset="./assests/images/workplace-01.png">
                      <source type="image/png" srcset="./assests/images/workplace-01.png">
                      <img loading="lazy" src="./assests/images/workplace-01.png"
                        alt="Workstatus" width="44" height="44">
                    </picture>
                    <h3>Remote Work</h3>
                    <p>Balance productivity everywhere.
                    </p>
                  </div>
                  <div class="card-bottom">
                    <h4>Achieve <strong>30%</strong></h4>
                    <span class="prod">higher accountability</span>
                  </div>
                </div>
                <div class="flip-card-back">
                  <h3>Remote Work</h3>
                  <ul>
                    <li>Monitor employee activity & ensure accountability
                    </li>
                    <li>Foster a connected team culture regardless of location</li>
                  </ul>
                  <div class="card-bottom">
                    <a href="#" class="is-arrow">Explore More</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="workplace-card">
              <div class="flip-card-inner">
                <div class="flip-card-front">
                  <div>
                    <picture class="card-img">
                      <source type="image/webp" srcset="./assests/images/workplace-02.png">
                      <source type="image/png" srcset="./assests/images/workplace-02.png">
                      <img loading="lazy" src="./assests/images/workplace-02.png"
                        alt="Workstatus" width="44" height="44">
                    </picture>
                    <h3>Hybrid Work</h3>
                    <p>Balance productivity everywhere.
                    </p>
                  </div>
                  <div class="card-bottom">
                    <h4>Get <strong>30%</strong></h4>
                    <span class="prod">more productive workforce</span>
                  </div>
                </div>
                <div class="flip-card-back">
                  <h3>Hybrid Work</h3>
                  <ul>
                    <li>Monitor employee activity & ensure accountability
                    </li>
                    <li>Foster a connected team culture regardless of location</li>
                  </ul>
                  <div class="card-bottom">
                    <a href="#" class="is-arrow">Explore More</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="workplace-card">
              <div class="flip-card-inner">
                <div class="flip-card-front">
                  <div>
                    <picture class="card-img">
                      <source type="image/webp" srcset="./assests/images/workplace-03.png">
                      <source type="image/png" srcset="./assests/images/workplace-03.png">
                      <img loading="lazy" src="./assests/images/workplace-03.png"
                        alt="Workstatus" width="44" height="44">
                    </picture>
                    <h3>Field Work</h3>
                    <p>Balance productivity everywhere.
                    </p>
                  </div>
                  <div class="card-bottom">
                    <h4>Witness <strong>40%</strong></h4>
                    <span class="prod">higher accountability</span>
                  </div>
                </div>
                <div class="flip-card-back">
                  <h3>Field Work</h3>
                  <ul>
                    <li>Monitor employee activity & ensure accountability
                    </li>
                    <li>Foster a connected team culture regardless of location</li>
                  </ul>
                  <div class="card-bottom">
                    <a href="#" class="is-arrow">Explore More</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="workplace-card">
              <div class="flip-card-inner">
                <div class="flip-card-front">
                  <div>
                    <picture class="card-img">
                      <source type="image/webp" srcset="./assests/images/workplace-04.png">
                      <source type="image/png" srcset="./assests/images/workplace-04.png">
                      <img loading="lazy" src="./assests/images/workplace-04.png"
                        alt="Workstatus" width="44" height="44">
                    </picture>
                    <h3>Office Work</h3>
                    <p>Balance productivity everywhere.
                    </p>
                  </div>
                  <div class="card-bottom">
                    <h4>See <strong>35%</strong> growth</h4>
                    <span class="prod">higher accountability</span>
                  </div>
                </div>
                <div class="flip-card-back">
                  <h3>Office Work</h3>
                  <ul>
                    <li>Monitor employee activity & ensure accountability
                    </li>
                    <li>Foster a connected team culture regardless of location</li>
                  </ul>
                  <div class="card-bottom">
                    <a href="#" class="is-arrow">Explore More</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="button-common white-btn margin-t-80">
            <div class="cmn-democta">
              <div><a data-href="https://app.workstatus.io/auth/register/?pid=42&amp;type=monthly" href="javascript:void(0);" class="ctbtn" onclick="return get_ws_signupform(this);" target="_self">Start Free Trial</a></div>
              <span class="devide">OR</span>
              <div><a href="javascript:void(0)" class="ctbtn bgtrans" onclick="call_demows();" target="_self">Book A Demo</a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section-numbers padding-t-120 padding-b-120">
        <div class="container">
          <div class="number-row">
            <div class="number-col is-first">
              <div class="card-wrapper">
                <div class="card-content">
                  <h3>Discover How <a href="#">Workstatus</a> Can Drive Your Business Success</h3>
                  <div class="card-image">
                    <picture>
                      <source type="image/webp" srcset="https://www.workstatus.io/wp-content/themes/workstatus/assests/images/number-01.png">
                      <source type="image/png" srcset="https://www.workstatus.io/wp-content/themes/workstatus/assests/images/number-01.png">
                      <img loading="lazy" src="https://www.workstatus.io/wp-content/themes/workstatus/assests/images/number-01.png" alt="Discover" width="303" height="192">
                    </picture>
                  </div>
                </div>
                <div class="button-group">
                  <a href="https://www.workstatus.io/use-cases" class="btn">Explore all Use Cases</a>
                </div>
              </div>
            </div>
            <div class="number-col">
              <div class="card-image">
                <picture>
                  <source type="image/webp" srcset="https://www.workstatus.io/wp-content/themes/workstatus/assests/images/number-02.png">
                  <source type="image/png" srcset="https://www.workstatus.io/wp-content/themes/workstatus/assests/images/number-02.png">
                  <img loading="lazy" src="https://www.workstatus.io/wp-content/themes/workstatus/assests/images/number-02.png" alt="Discover" width="320" height="155">
                </picture>
              </div>
              <h2>70%</h2>
              <div class="is-grey">INCREASED EFFICIENCY</div>
              <p>A multi-national marketing firm, boosted overall efficiency.</p>
              <a href="https://www.workstatus.io/workforce-management/employee-productivity-monitoring" class="btn">Increase Your Team Productivity</a>
            </div>
            <div class="number-col">
              <div class="card-image">
                <picture>
                  <source type="image/webp" srcset="https://www.workstatus.io/wp-content/themes/workstatus/assests/images/number-03.png">
                  <source type="image/png" srcset="https://www.workstatus.io/wp-content/themes/workstatus/assests/images/number-03.png">
                  <img loading="lazy" src="https://www.workstatus.io/wp-content/themes/workstatus/assests/images/number-03.png" alt="Discover" width="320" height="155">
                </picture>
              </div>
              <h2>35%</h2>
              <div class="is-grey">INCREASED ROI</div>
              <p>A Delhi-based startup achieved 30%+ increased ROI with Workstatus.</p>
              <a href="https://www.workstatus.io/reporting-analytics/insights-for-business" class="btn">Enhance Your Business ROI</a>
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
      <section class="feature-slide-section bg-light padding-t-120 padding-b-120">
        <div class="container">
          <div class="top-section text-center">
            <h6><span class="bg-purple">WHY WORKSTATUS™?</span></h6>
            <h2>Workstatus Is A Class Apart</h2>
            <p>Managing your workforce, projects, and reports gets simple & effective.</p>
          </div>
          <div class="dis-flex featured-out">
            <div class="dis-flex featured-slider" id="featured-slide">
              <!-- Slider Content -->
              <div class="glider" id="glider">
                <div class="flex-3">
                  <div class="box-3" style="background-image:url(./assests/images/featureslide-01.png);">
                    <h3>WFH <br>
                      Monitoring
                    </h3>
                    <div class="overlay-text">
                      <h3>WFH 
                        Monitoring
                      </h3>
                      <p>Workstatus offers a comprehensive solution for monitoring.</p>
                      <a href="#" class="no-more">Know More</a>
                    </div>
                  </div>
                </div>
                <div class="flex-3">
                  <div class="box-3" style="background-image:url(./assests/images/featureslide-01.png);">
                    <h3>WFH <br>
                      Monitoring
                    </h3>
                    <div class="overlay-text">
                      <h3>WFH 
                        Monitoring
                      </h3>
                      <p>Workstatus offers a comprehensive solution for monitoring.</p>
                      <a href="#" class="no-more">Know More</a>
                    </div>
                  </div>
                </div>
                <div class="flex-3">
                  <div class="box-3" style="background-image:url(./assests/images/featureslide-01.png);">
                    <h3>WFH <br>
                      Monitoring
                    </h3>
                    <div class="overlay-text">
                      <h3>WFH 
                        Monitoring
                      </h3>
                      <p>Workstatus offers a comprehensive solution for monitoring.</p>
                      <a href="#" class="no-more">Know More</a>
                    </div>
                  </div>
                </div>
                <div class="flex-3">
                  <div class="box-3" style="background-image:url(./assests/images/featureslide-01.png);">
                    <h3>WFH <br>
                      Monitoring
                    </h3>
                    <div class="overlay-text">
                      <h3>WFH 
                        Monitoring
                      </h3>
                      <p>Workstatus offers a comprehensive solution for monitoring.</p>
                      <a href="#" class="no-more">Know More</a>
                    </div>
                  </div>
                </div>
                <div class="flex-3">
                  <div class="box-3" style="background-image:url(./assests/images/featureslide-01.png);">
                    <h3>WFH <br>
                      Monitoring
                    </h3>
                    <div class="overlay-text">
                      <h3>WFH 
                        Monitoring
                      </h3>
                      <p>Workstatus offers a comprehensive solution for monitoring.</p>
                      <a href="#" class="no-more">Know More</a>
                    </div>
                  </div>
                </div>
                <div class="flex-3">
                  <div class="box-3" style="background-image:url(./assests/images/featureslide-01.png);">
                    <h3>WFH <br>
                      Monitoring
                    </h3>
                    <div class="overlay-text">
                      <h3>WFH 
                        Monitoring
                      </h3>
                      <p>Workstatus offers a comprehensive solution for monitoring.</p>
                      <a href="#" class="no-more">Know More</a>
                    </div>
                  </div>
                </div>
                <div class="flex-3">
                  <div class="box-3" style="background-image:url(./assests/images/featureslide-01.png);">
                    <h3>WFH <br>
                      Monitoring
                    </h3>
                    <div class="overlay-text">
                      <h3>WFH 
                        Monitoring
                      </h3>
                      <p>Workstatus offers a comprehensive solution for monitoring.</p>
                      <a href="#" class="no-more">Know More</a>
                    </div>
                  </div>
                </div>
                <div class="flex-3">
                  <div class="box-3" style="background-image:url(./assests/images/featureslide-01.png);">
                    <h3>WFH <br>
                      Monitoring
                    </h3>
                    <div class="overlay-text">
                      <h3>WFH 
                        Monitoring
                      </h3>
                      <p>Workstatus offers a comprehensive solution for monitoring.</p>
                      <a href="#" class="no-more">Know More</a>
                    </div>
                  </div>
                </div>
                <div class="flex-3">
                  <div class="box-3" style="background-image:url(./assests/images/featureslide-01.png);">
                    <h3>WFH <br>
                      Monitoring
                    </h3>
                    <div class="overlay-text">
                      <h3>WFH 
                        Monitoring
                      </h3>
                      <p>Workstatus offers a comprehensive solution for monitoring.</p>
                      <a href="#" class="no-more">Know More</a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Progress Bar -->
              <div class="progress-container">
                <div class="progress-bar"></div>
              </div>
              <!-- Dots (Pagination) -->
              <div role="tablist" class="dots"></div>
              <!-- Arrows -->
              <div class="prev-next-btn">
                <button class="glider-prev tail-prev" aria-disabled="false"></button>
                <button class="glider-next tail-next" aria-disabled="false"></button>
              </div>
            </div>
            <div class="right-section">
              <h4>Optimize Time 
                Tracking & Workforce Coordination
              </h4>
              <picture>
                <source type="image/webp" srcset="./assests/images/button-image.png">
                <source type="image/png" srcset="./assests/images/button-image.png">
                <img loading="lazy" src="./assests/images/button-image.png" alt="persona"
                  width="205" height="155">
              </picture>
              <a href="#" class="is-arrow">Explore all Use Cases</a>
            </div>
          </div>
          <div class="button-common margin-t-80">
            <div class="cmn-democta">
              <div><a href="javascript:void(0)" class="ctbtn" onclick="call_demows();" target="_self">Book A Demo</a><span class="nccr">No credit card required</span></div>
              <span class="devide">OR</span>
              <div><a data-href="https://app.workstatus.io/auth/register/?pid=42&amp;type=monthly" href="javascript:void(0);" class="ctbtn bgtrans" onclick="return get_ws_signupform(this);">Start Free Trial</a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="user-persona bg-blue padding-t-120 padding-b-120">
        <div class="container">
          <div class="user-persona__content">
            <div class="user-persona__image">
              <picture>
                <source type="image/webp" srcset="./assests/images/persona-img.png">
                <source type="image/png" srcset="./assests/images/persona-img.png">
                <img loading="lazy" src="./assests/images/persona-img.png" alt="persona"
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
                <img class="normal" loading="lazy" src="./assests/images/perso-01.svg" alt="persona"
                  width="44" height="44">
                <img class="hover" loading="lazy" src="./assests/images/perso-02.svg" alt="persona"
                  width="44" height="44">
              </picture>
              <h3>Business Owners</h3>
              <p>Empower teams, boost productivity</p>
              <a href="#" class="is-arrow">Learn More</a>
            </div>
            <div class="persona-card">
              <picture>
                <img class="normal" loading="lazy" src="./assests/images/perso-01.svg" alt="persona"
                  width="44" height="44">
                <img class="hover" loading="lazy" src="./assests/images/perso-02.svg" alt="persona"
                  width="44" height="44">
              </picture>
              <h3>Business Owners</h3>
              <p>Empower teams, boost productivity</p>
              <a href="#" class="is-arrow">Learn More</a>
            </div>
            <div class="persona-card">
              <picture>
                <img class="normal" loading="lazy" src="./assests/images/perso-01.svg" alt="persona"
                  width="44" height="44">
                <img class="hover" loading="lazy" src="./assests/images/perso-02.svg" alt="persona"
                  width="44" height="44">
              </picture>
              <h3>Business Owners</h3>
              <p>Empower teams, boost productivity</p>
              <a href="#" class="is-arrow">Learn More</a>
            </div>
            <div class="persona-card">
              <picture>
                <img class="normal" loading="lazy" src="./assests/images/perso-01.svg" alt="persona"
                  width="44" height="44">
                <img class="hover" loading="lazy" src="./assests/images/perso-02.svg" alt="persona"
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
                <source type="image/webp" srcset="./assests/images/solution-01.png">
                <source type="image/png" srcset="./assests/images/solution-01.png">
                <img loading="lazy" src="./assests/images/solution-01.png"
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
                <source type="image/webp" srcset="./assests/images/solution-02.png">
                <source type="image/png" srcset="./assests/images/solution-02.png">
                <img loading="lazy" src="./assests/images/solution-02.png"
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
                <source type="image/webp" srcset="./assests/images/solution-03.png">
                <source type="image/png" srcset="./assests/images/solution-03.png">
                <img loading="lazy" src="./assests/images/solution-03.png"
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
                  <img loading="lazy" src="./assests/images/feature-home.png" alt="Workstatus" width="612" height="505">
                </picture>
              </div>
            </div>
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
                    <img loading="lazy" src="./assests/images/scroll-image01.png" alt="Workstatus" width="418" height="223">
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
                    <img loading="lazy" src="./assests/images/scroll-image01.png" alt="Workstatus" width="418" height="223">
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
                    <img loading="lazy" src="./assests/images/scroll-image01.png" alt="Workstatus" width="418" height="223">
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
                    <img loading="lazy" src="./assests/images/scroll-image01.png" alt="Workstatus" width="418" height="223">
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
      <section class="allindustry-section  padding-t-120 padding-b-120">
        <div class="container">
          <div class="top-section text-center">
            <h6><span class="bg-purple">STAY IN CONTROL</span></h6>
            <h2>Who uses Workstatus time tracking software?</h2>
            <p>Effectively oversee the time and contributions of remote and hybrid teams, ensuring balanced workloads, seamless collaboration, and enhanced coordination across various locations.</p>
          </div>
          <div class="dis-flex indstry-row">
            <div class="ind-left">
              <div class="flex-3 ind-column">
                <div class="ind-image">
                  <picture>
                    <source type="image/webp" srcset="./assests/images/in-01.png">
                    <source type="image/png" srcset="./assests/images/in-01.png">
                    <img loading="lazy" src="./assests/images/in-01.png"
                      alt="Workstatus" width="242" height="267">
                  </picture>
                  <div class="ind-title">
                    <h3>Healthcare</h3>
                  </div>
                </div>
                <div class="ind-content">
                  <h3>Travel &amp; Tourism</h3>
                  <p>Managers can review and approve timesheets of employees. Better team management leads to better outputs.</p>
                </div>
              </div>
              <div class="flex-3 ind-column">
                <div class="ind-image">
                  <picture>
                    <source type="image/webp" srcset="./assests/images/in-01.png">
                    <source type="image/png" srcset="./assests/images/in-01.png">
                    <img loading="lazy" src="./assests/images/in-01.png"
                      alt="Workstatus" width="242" height="267">
                  </picture>
                  <div class="ind-title">
                    <h3>Healthcare</h3>
                  </div>
                </div>
                <div class="ind-content">
                  <h3>Travel &amp; Tourism</h3>
                  <p>Managers can review and approve timesheets of employees. Better team management leads to better outputs.</p>
                </div>
              </div>
              <div class="flex-3 ind-column">
                <div class="ind-image">
                  <picture>
                    <source type="image/webp" srcset="./assests/images/in-01.png">
                    <source type="image/png" srcset="./assests/images/in-01.png">
                    <img loading="lazy" src="./assests/images/in-01.png"
                      alt="Workstatus" width="242" height="267">
                  </picture>
                  <div class="ind-title">
                    <h3>Healthcare</h3>
                  </div>
                </div>
                <div class="ind-content">
                  <h3>Travel &amp; Tourism</h3>
                  <p>Managers can review and approve timesheets of employees. Better team management leads to better outputs.</p>
                </div>
              </div>
              <div class="flex-3 ind-column">
                <div class="ind-image">
                  <picture>
                    <source type="image/webp" srcset="./assests/images/in-01.png">
                    <source type="image/png" srcset="./assests/images/in-01.png">
                    <img loading="lazy" src="./assests/images/in-01.png"
                      alt="Workstatus" width="242" height="267">
                  </picture>
                  <div class="ind-title">
                    <h3>Healthcare</h3>
                  </div>
                </div>
                <div class="ind-content">
                  <h3>Travel &amp; Tourism</h3>
                  <p>Managers can review and approve timesheets of employees. Better team management leads to better outputs.</p>
                </div>
              </div>
              <div class="flex-3 ind-column">
                <div class="ind-image">
                  <picture>
                    <source type="image/webp" srcset="./assests/images/in-01.png">
                    <source type="image/png" srcset="./assests/images/in-01.png">
                    <img loading="lazy" src="./assests/images/in-01.png"
                      alt="Workstatus" width="242" height="267">
                  </picture>
                  <div class="ind-title">
                    <h3>Healthcare</h3>
                  </div>
                </div>
                <div class="ind-content">
                  <h3>Travel &amp; Tourism</h3>
                  <p>Managers can review and approve timesheets of employees. Better team management leads to better outputs.</p>
                </div>
              </div>
              <div class="flex-3 ind-column">
                <div class="ind-image">
                  <picture>
                    <source type="image/webp" srcset="./assests/images/in-01.png">
                    <source type="image/png" srcset="./assests/images/in-01.png">
                    <img loading="lazy" src="./assests/images/in-01.png"
                      alt="Workstatus" width="242" height="267">
                  </picture>
                  <div class="ind-title">
                    <h3>Healthcare</h3>
                  </div>
                </div>
                <div class="ind-content">
                  <h3>Travel &amp; Tourism</h3>
                  <p>Managers can review and approve timesheets of employees. Better team management leads to better outputs.</p>
                </div>
              </div>
            </div>
            <div class="ind-right">
              <picture class="card-img">
                <source type="image/webp" srcset="./assests/images/dashboard-img.png">
                <source type="image/png" srcset="./assests/images/ dashboard-img.png">
                <img loading="lazy" src="./assests/images/ dashboard-img.png"
                  alt="Workstatus" width="404" height="217">
              </picture>
              <div class="indr-content">
                <h3>One central dashboard</h3>
                <p>We provides clarity, no matter the industry, by showing you:</p>
                <ul>
                  <li>Detailed insights</li>
                  <li>Streamlined projects</li>
                  <li>Streamlined projects</li>
                </ul>
                <a href="#" class="is-arrow">Explore solutions for your industries</a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <div class="pricing-wrap bg-light">
        <div id="wsio-preloader" style="margin-top: 100px; display: none;">
          <div class="container" id="pre-loader">Please wait, while we load the pricing plans for you.</div>
        </div>
        <div id="wsio-pricing" class="pricing-wrapper style="display: block;">
          <section class="cmn-pricing no-af-bg post-animation">
            <div class="container">
              <div class="inner-wrap">
                <div class="left" style="text-align:center;">
                  <h1>Simple, Flexible Pricing for Every Business</h1>
                  <p><span class="no-hidden">No hidden fees</span>—just simple, affordable pricing for teams of all sizes.</p>
                  <p> Can't find what you are looking for?  <span class="conbtn" onclick="getCalendlyiFrame();"><span>Setup a consulting call</span></span></p>
                </div>
              </div>
            </div>
          </section>
          <section class="ws-pricing padding-b-120">
            <div class="container">
              <nav id="pricing-Tabs" class="tab-nav">
                <ul>
                  <li class="active" data-tab="#tab01">
                    <a data-plan="wsp-productivity" href="#tab01">Productivity Management</a>
                  </li>
                  <li class="" data-tab="#tab02">
                    <a data-plan="wsp-project" href="#tab02">Project Management</a>
                  </li>
                  <li class="" data-tab="#tab03">
                    <a data-plan="wsp-time" href="#tab03">Time Tracking</a>
                  </li>
                  <li class="" data-tab="#tab04">
                    <a data-plan="wsp-attendance" href="#tab04">Attendance Management</a>
                  </li>
                </ul>
              </nav>
              <div id="inv-price-fltr" class="plan-section post-animation">
                <div class="switcher-sec">
                  <div class="switch-btn-box">
                    <span class="monthly">Monthly</span>
                    <label class="switch">
                    <input id="current-geo" value="IN" type="hidden">
                    <input id="ps-switcher" type="checkbox">
                    <span class="slider"></span>
                    </label>
                    <span class="annualy">Annual </span>
                  </div>
                  <div class="country-select">
                    <span class="chose int-only"></span>
                    <div class="select-list int-only">
                      <div id="elm-selectBtn" class="pcselectBtn">
                        <img class="flgicon" loading="lazy" id="pflag-icon" src="https://www.workstatus.io/staging/wp-content/themes/workstatus/dev-images/flags/eur.svg" alt="Workstatus" width="13" height="13"><span id="pc-country">EUR (Europe)<br></span>
                      </div>
                      <div class="selectDropdown" style="z-index: 2;">
                        <div class="pc-option" data-cod="AU" data-country="AUD (Aus &amp; NZ)">
                          <img class="flgicon" loading="lazy" src="https://www.workstatus.io/staging/wp-content/themes/workstatus/dev-images/flags/au.svg" alt="Workstatus" width="13" height="13">AUD (Aus &amp; NZ)
                        </div>
                        <div class="pc-option" data-cod="AE" data-country="AED (United Arab Emirates)">
                          <img class="flgicon" loading="lazy" src="https://www.workstatus.io/staging/wp-content/themes/workstatus/dev-images/flags/aed.svg" alt="Workstatus" width="13" height="13">AED (United Arab Emirates)
                        </div>
                        <div class="pc-option" data-cod="CA" data-country="CAD (Canada)">
                          <img class="flgicon" loading="lazy" src="https://www.workstatus.io/staging/wp-content/themes/workstatus/dev-images/flags/cad.svg" alt="Workstatus" width="13" height="13">CAD (Canada)
                        </div>
                        <div class="pc-option" data-cod="EUR" data-country="EUR (Europe)">
                          <img class="flgicon" loading="lazy" src="https://www.workstatus.io/staging/wp-content/themes/workstatus/dev-images/flags/eur.svg" alt="Workstatus" width="13" height="13">EUR (Europe)
                        </div>
                        <div class="pc-option" data-cod="GB" data-country="GBP (United Kingdom)">
                          <img class="flgicon" loading="lazy" src="https://www.workstatus.io/staging/wp-content/themes/workstatus/dev-images/flags/gbp.svg" alt="Workstatus" width="13" height="13">GBP (United Kingdom)
                        </div>
                        <div class="pc-option" data-cod="US" data-country="USD (United States)">
                          <img loading="lazy" class="flgicon" src="https://www.workstatus.io/staging/wp-content/themes/workstatus/dev-images/flags/usa.svg" alt="Workstatus" width="13" height="13">USD (United States)
                        </div>
                        <div class="pc-option" data-cod="LA" data-country="USD (Latin America)">
                          <img loading="lazy" class="flgicon" src="https://www.workstatus.io/staging/wp-content/themes/workstatus/dev-images/flags/usa.svg" alt="Workstatus" width="13" height="13">USD (Latin America)
                        </div>
                        <div class="pc-option" data-cod="ZA" data-country="ZAR (African Region)">
                          <img loading="lazy" class="flgicon" src="https://www.workstatus.io/staging/wp-content/themes/workstatus/dev-images/flags/zar.svg" alt="Workstatus" width="13" height="13">ZAR (African Region)
                        </div>
                        <div class="pc-option" data-cod="SA" data-country="SAR (Saudi Arab)">
                          <img loading="lazy" class="flgicon" src="https://www.workstatus.io/staging/wp-content/themes/workstatus/dev-images/flags/sar.svg" alt="Workstatus" width="13" height="13">SAR (Saudi Arab)
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="price-contents">
                <div id="tab01" class="tab-contents active">
                  <div class="price-flex">
                    <div class="price-column flex-3">
                      <div class="price-box">
                        <div class="pr-plan">
                          <h3>Productivity Management</h3>
                          <div class="total">2 USER MINIMUM</div>
                          <p>Maximize team output with time tracking, app usage analysis &amp; productivity reports.</p>
                        </div>
                        <div class="card-plan">
                          <span class="wph" id="pl-productivity-basic">₹199<small class="max-price">299</small></span>
                          <span class="prio">/ user / month</span>
                        </div>
                        <a class="price_btn" id="cta-productivity-basic" href="https://app.staging.workstatus.io/auth/register?pid=5109&amp;type=annual">Buy Now</a>
                        <span class="tryit">or <a href="https://app.workstatus.io/auth/register">Try It Free</a></span>
                        <div class="price-wrapper">
                          <div class="price-options">
                            <h4>Includes:</h4>
                            <div class="option-list">
                              <div class="option">Time Tracking</div>
                              <div class="option">Timesheets</div>
                              <div class="option">Unlimited screenshots</div>
                              <div class="option">Activity Levels</div>
                              <div class="option">Auto discard idle time</div>
                              <div class="option">Teams</div>
                              <div class="option">Time off &amp; holidays</div>
                              <div class="option">Scheduling &amp; attendance</div>
                              <div class="option">Timesheet approvals</div>
                              <div class="option">Daily &amp; weekly limits</div>
                              <div class="option">Reports</div>
                              <div class="option">Quiet (Stealth) Mode</div>
                              <div class="option">Client Portal</div>
                              <div class="option">Gamification</div>
                              <div class="option">HRIS Integrations</div>
                              <div class="option">Free on-boarding support</div>
                              <div class="support-options">
                                <h4>Support:</h4>
                                <p>Email / Chat / Phone / Whatsapp Support</p>
                                <p>SLA: 8 Business Hours</p>
                              </div>
                            </div>
                          </div>
                          <button onclick="togglePrice()" class="price-accordion" type="button" aria-expanded="false">Features</button>
                        </div>
                      </div>
                    </div>
                    <div class="price-column flex-3">
                      <div class="price-box">
                        <div class="pr-plan">
                          <h3>Productivity + Project <br>Management</h3>
                          <div class="total">2 USER MINIMUM</div>
                          <p>Stay on top of projects with seamless time tracking, task management, and budgeting.
                          </p>
                        </div>
                        <div class="card-plan">
                          <span class="wph" id="pl-productivity-pro">₹299<small class="max-price">399</small></span>
                          <span class="prio">/ user / month</span>
                        </div>
                        <a class="price_btn" id="cta-productivity-pro" href="https://app.staging.workstatus.io/auth/register?pid=5110&amp;type=annual">Buy Now</a>
                        <span class="tryit">or <a href="https://app.workstatus.io/auth/register">Try It Free</a></span>
                        <div class="price-wrapper">
                          <div class="price-options">
                            <h4>Everything <span class="perp">in</span> Productivity  +</h4>
                            <div class="option-list">
                              <div class="option">Project Management</div>
                              <div class="option">Project &amp; Task Time Tracking</div>
                              <div class="option">Milestones</div>
                              <div class="option">Budgeting</div>
                              <div class="option">Invoicing</div>
                              <div class="option">Gantt Charts</div>
                              <div class="option">Kanban</div>
                              <div class="option">Project Management Integrations</div>
                              <div class="option">Customer Service Integrations</div>
                              <div class="option">Invoicing Integrations</div>
                              <div class="option">1:1 on boarding tour with our team</div>
                              <div class="option"><strong>PLUS</strong> First in-line 24x5 priority support</div>
                              <div class="support-options">
                                <h4>Support:</h4>
                                <p>Email / Chat / Phone / Whatsapp Support</p>
                                <p>SLA: 4 Business Hours</p>
                              </div>
                            </div>
                          </div>
                          <button onclick="togglePrice()" class="price-accordion" type="button" aria-expanded="false">Features</button>
                        </div>
                      </div>
                    </div>
                    <div class="price-column flex-3">
                      <div class="price-box">
                        <div class="pr-plan">
                          <h3>Enterprise Solution</h3>
                          <div class="total">100 USERS Minimum</div>
                          <p>Customize workforce solutions with advanced integrations, reporting &amp; dedicated support.
                          </p>
                        </div>
                        <div class="card-plan">
                          <span class="wph" id="pl-basic">Custom</span>
                          <span class="prio smtext">Tailor-made offer</span>
                        </div>
                        <a class="price_btn green-btn" onclick="call_demoEnt('<h2>Get a Tailored Quote for Enterprise Solutions</h2>');" id="ws-plan-ent" href="javascript:void(0);">Request a Quote</a>
                        <span class="tryit op0">or <a href="https://app.workstatus.io/auth/register">Try It Free</a></span>
                        <div class="price-wrapper">
                          <div class="price-options">
                            <h4>Everything <span class="perp">in</span> Project  +</h4>
                            <div class="option-list">
                              <div class="option">
                                Custom Integration &amp; Development
                                <div class="tooltipp">
                                  <span class="info-box"></span>
                                  <span class="tooltiptext tooltip-right">With our Custom Integration &amp; Development Services, we extend beyond our standard API capabilities to meet your specific business needs. Whether it's a seamless integration with third-party or legacy systems for enhanced workforce automation, or the development of particular features to facilitate data import and other operational efficiencies, our dedicated team is here to tailor solutions precisely to your requirements. Opt for our expertise to ensure a smooth, hassle-free integration, or leverage our comprehensive API if you prefer to handle the integration in-house. Whatever your choice, we're here to ensure that Workstatus adapts perfectly to your business ecosystem.</span>
                                </div>
                              </div>
                              <div class="option">License Management</div>
                              <div class="option">Capacity Analysis</div>
                              <div class="option">Insider Threat Detection</div>
                              <div class="option">Advanced Reporting</div>
                              <div class="option">Data Warehouse Integrations</div>
                              <div class="option">Limited payments</div>
                              <div class="option">SSO</div>
                              <div class="option">Audit Logs</div>
                              <div class="option">Customized Onboarding &amp; Support</div>
                              <div class="option">On-Premise Deployment</div>
                              <div class="option">2FA</div>
                              <div class="option">Dedicated Account Manager</div>
                              <div class="support-options">
                                <h4>Support:</h4>
                                <p>Email / Chat / Phone / Whatsapp Support</p>
                                <p>SLA: 2 Business Hours</p>
                              </div>
                            </div>
                          </div>
                          <button onclick="togglePrice()" class="price-accordion" type="button" aria-expanded="false">Features</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="tab02" class="tab-contents ">
                  <div class="price-flex">
                    <div class="price-column flex-3">
                      <div class="price-box">
                        <div class="pr-plan">
                          <h3>Project Management</h3>
                          <div class="total">2 USER MINIMUM</div>
                          <p>Ideal for small teams, pay only for the users you need and scale effortlessly.</p>
                        </div>
                        <div class="card-plan">
                          <span class="wph" id="pl-project-basic">₹90<small class="max-price">110</small></span>
                          <span class="prio">/ user / month</span>
                        </div>
                        <a class="price_btn" id="cta-project-basic" href="https://app.staging.workstatus.io/auth/register?pid=5111&amp;type=annual">Buy Now</a>
                        <span class="tryit">or <a href="https://app.workstatus.io/auth/register">Try It Free</a></span>
                      </div>
                    </div>
                    <div class="price-column flex-2">
                      <div class="price-box">
                        <div class="pr-plan">
                          <h3><span class="op0">Pro Unlimited</span>Pro Unlimited</h3>
                          <div class="total">unlimited Users &amp; Projects</div>
                          <p>Manage unlimited users and projects with no restrictions, perfect for small to mid-sized enterprises.
                          </p>
                        </div>
                        <div class="card-plan">
                          <span class="wph" id="pl-project-pro">₹4600<small class="max-price">5400</small></span>
                          <span class="prio">/ month</span>
                        </div>
                        <a class="price_btn" id="cta-project-pro" href="https://app.staging.workstatus.io/auth/register?pid=5112&amp;type=annual">Buy Now</a>
                        <span class="tryit">or <a href="https://app.workstatus.io/auth/register">Try It Free</a></span>
                      </div>
                    </div>
                  </div>
                  <div class="plan-include">
                    <h3>Included in Every Plan:</h3>
                    <ul>
                      <li>Unlimited Projects &amp; Tasks</li>
                      <li>Gantt Chart</li>
                      <li>Budgeting</li>
                      <li>Kanban Board</li>
                      <li>Invoicing</li>
                      <li>Invoicing Integrations</li>
                      <li>Project &amp; Task Time Tracking</li>
                      <li>Customer Service Integrations</li>
                      <li>Project Management Integrations</li>
                      <li>1:1 onboarding tour with our team</li>
                      <li>Multiple Filters &amp; Custom Views </li>
                      <li>First-in-line 24x5 priority support</li>
                    </ul>
                  </div>
                </div>
                <div id="tab03" class="tab-contents ">
                  <div class="price-flex">
                    <div class="price-column flex-3">
                      <div class="price-box">
                        <div class="pr-plan ini-height">
                          <h3>Time Tracking</h3>
                          <div class="total">2 USER MINIMUM</div>
                          <p>Track time per user, perfect for small teams with flexible scaling.</p>
                        </div>
                        <div class="card-plan">
                          <span class="wph" id="pl-time-basic">₹48<small class="max-price">60</small></span>
                          <span class="prio">/ user / month</span>
                        </div>
                        <a class="price_btn" id="cta-time-basic" href="https://app.staging.workstatus.io/auth/register?pid=5113&amp;type=annual">Buy Now</a>
                        <span class="tryit">or <a href="https://app.workstatus.io/auth/register">Try It Free</a></span>
                      </div>
                    </div>
                    <div class="price-column flex-2">
                      <div class="price-box">
                        <div class="pr-plan ini-height">
                          <h3><span class="op0">Pro Unlimited</span>Pro Unlimited<br></h3>
                          <div class="total">Unlimited Users</div>
                          <p>Unlimited time tracking for all teams, suitable for businesses of any size.
                          </p>
                        </div>
                        <div class="card-plan">
                          <span class="wph" id="pl-time-pro">₹2400<small class="max-price">3000</small></span>
                          <span class="prio">/ month</span>
                        </div>
                        <a class="price_btn" id="cta-time-pro" href="https://app.staging.workstatus.io/auth/register?pid=5114&amp;type=annual">Buy Now</a>
                        <span class="tryit">or <a href="https://app.workstatus.io/auth/register">Try It Free</a></span>
                      </div>
                    </div>
                  </div>
                  <div class="plan-include">
                    <h3>Included in Every Plan:</h3>
                    <ul>
                      <li>Unlimited tracking</li>
                      <li>Breaks</li>
                      <li>Time tracker</li>
                      <li>Web Tracker App</li>
                      <li>Timesheet</li>
                      <li>Mobile &amp; desktop App</li>
                      <li>Auto tracker</li>
                      <li>Idle detection &amp; reminders</li>
                      <li>Manual Timesheet</li>
                      <li>Reports</li>
                      <li>Bulk Timesheet</li>
                      <li>Export &amp; share data</li>
                      <li>Team activity</li>
                      <li>1:1 onboarding tour with our team</li>
                      <li>Timesheet Approval</li>
                      <li><strong>PLUS</strong> First-in-line 24x5 priority support</li>
                    </ul>
                  </div>
                </div>
                <div id="tab04" class="tab-contents ">
                  <div class="price-flex">
                    <div class="price-column flex-3">
                      <div class="price-box">
                        <div class="pr-plan ini-height">
                          <h3>Attendance Management</h3>
                          <div class="total">2 USER MINIMUM</div>
                          <p>Track attendance on a per-user basis, perfect for small teams with scalability.</p>
                        </div>
                        <div class="card-plan">
                          <span class="wph" id="pl-attendance-basic">₹48<small class="max-price">60</small></span>
                          <span class="prio">/ user / month</span>
                        </div>
                        <a class="price_btn" id="cta-attendance-basic" href="https://app.staging.workstatus.io/auth/register?pid=5115&amp;type=annual">Buy Now</a>
                        <span class="tryit">or <a href="https://app.workstatus.io/auth/register">Try It Free</a></span>
                      </div>
                    </div>
                    <div class="price-column flex-2">
                      <div class="price-box">
                        <div class="pr-plan ini-height">
                          <h3><span class="op0">Pro Unlimited</span>Pro Unlimited</h3>
                          <div class="total">Unlimited users</div>
                          <p>Unlimited attendance tracking for all employees, perfect for businesses of any size.
                          </p>
                        </div>
                        <div class="card-plan">
                          <span class="wph" id="pl-attendance-pro">₹2400<small class="max-price">3000</small></span>
                          <span class="prio">/ month</span>
                        </div>
                        <a class="price_btn" id="cta-attendance-pro" href="https://app.staging.workstatus.io/auth/register?pid=5116&amp;type=annual">Buy Now</a>
                        <span class="tryit">or <a href="https://app.workstatus.io/auth/register">Try It Free</a></span>
                      </div>
                    </div>
                  </div>
                  <div class="plan-include">
                    <h3>Included in Every Plan:</h3>
                    <ul>
                      <li>Mobile Check-in/Check-out</li>
                      <li>Shift Management &amp; Scheduling</li>
                      <li>GPS-based Attendance Tracking</li>
                      <li>Late Coming Management &amp; Alerts</li>
                      <li>Selfie Based Attendance</li>
                      <li>Leave &amp; Overtime Management</li>
                      <li>Geo-fenced Jobsites</li>
                      <li>1:1 onboarding tour with our team</li>
                      <li>Attendance Reports &amp; Analytics</li>
                      <li><strong>PLUS</strong> First-in-line 24x5 priority support</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
      </div>
      <section class="faqsRow wfull for-heading-center padding-t-120 padding-b-120">
        <div class="container">
          <div class="top-section text-center">
            <h6><span class="bg-purple">Get Answers For</span></h6>
            <h2>Frequently Asked Questions</h2>
            <p>Managing your workforce, projects, and reports gets simple & effective.</p>
          </div>
          <div class="flex_row">
            <div itemscope itemtype="https://schema.org/FAQPage">
              <div class="column">
                <div class="faq-accordion-item-outer open" itemscope itemprop="mainEntity"
                  itemtype="https://schema.org/Question">
                  <h3 itemprop="name"> What Makes Workstatus™ The Best Online Invoice Software?
                  </h3>
                  <div class="faq-accordion-content">
                    <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                      <div itemprop="text">
                        <p>Workstatus online time tracking & invoicing is a simple yet powerful tool that provides you with everything you need to run your own business, without any additional feature overload. </p>
                        <p>As your business grows, so does Workstatus. We provide full accounting integration through our open API allowing you to sync your projects and tasks anytime. </p>
                        <p>With Workstatus <strong>invoice and estimate software</strong>, it’s easier than ever before to manage all of your operations in one central location while automating repetitive tasks such as sending estimates, accepting payments, and following up on outstanding balances.
                        </p>
                        <p>It works great for creating individual or recurring invoices including estimated projects, recurring clients, or worker's compensation information. Workstatus keeps track of time spent on each task, allows you to add costs, and create automatic invoices from completed tasks. You can also export data directly. </p>
                        <p>Best of all, we're available around the clock to help answer questions and solve your problems.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="faq-accordion-item-outer" itemscope itemprop="mainEntity"
                  itemtype="https://schema.org/Question">
                  <h3 itemprop="name">Can I Manage Timesheets And Bills Together At Workstatus™?</h3>
                  <div class="faq-accordion-content">
                    <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                      <div itemprop="text">
                        <p>Yes, Absolutely! You can manage timesheets and bills together with Workstatus.  This is what most of our customers are doing. </p>
                        <p>For example- Instead of billing by the hour or day, you will be able to bill your customer based on time spent on tasks or milestones which happen during a specific period (monthly, weekly or daily). Time management reporting in combination with billing is a very common model that many of our customers use at their businesses. </p>
                        <p>In addition, Workstatus is built specifically to combine both features since there were no affordable solutions out there providing these features combined. No matter how you set up your business, whether it’s based on hourly/daily billing or milestone /project-based pricing. We recommend using Workstatus to manage timesheets and invoicing to get insights into how much time was spent on different projects while tracking each activity online. </p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="faq-accordion-item-outer" itemscope itemprop="mainEntity"
                  itemtype="https://schema.org/Question">
                  <h3 itemprop="name">Will My Confidential Data Remain Safe While Using The Online Invoice Maker At Workstatus™?</h3>
                  <div class="faq-accordion-content">
                    <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                      <div itemprop="text">
                        <p>Your confidential data is safe while using our <strong>online billing software.</strong> This means none of your financial information stored within Workstatus will ever reach an unsecured page, no matter how many levels deep it goes into our system.</p>
                        <p>In addition, all pages that allow for a credit card or payment entry are protected by double encryption to ensure all sensitive account data remains private between your company and us. </p>
                        <p>Furthermore,  we won’t access any of your financial information either. The only time we would touch a client’s bank details would be if you specifically asked us to make a change on behalf of you, such as making a deposit in an escrow account, adding/removing another bank account as part of a wire transfer, or filing fraudulent charge-backs on a customer who refuses to pay its outstanding balance on time. </p>
                        <p>Otherwise, at no point in time during our relationship with your business will anyone from Workstatus have access to or see any of your company’s financial data. We have strict security policies that prohibit anyone from viewing customer bank accounts without express permission given by specific people within each account administrator hierarchy. </p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="faq-accordion-item-outer" itemscope itemprop="mainEntity"
                  itemtype="https://schema.org/Question">
                  <h3 itemprop="name">Is It Possible To Create Online Invoices In Different Languages And Currencies?</h3>
                  <div class="faq-accordion-content">
                    <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                      <div itemprop="text">
                        <p>Yes, it is possible to create an invoice in different languages. The language of your invoices will be based on your settings in Workstatus. </p>
                        <p>To change your settings please go to Settings > Languages and select which ones you want available or add a new one if needed. Additionally, it is also possible to have different currencies on invoices based on the client. To change it, just navigate to Settings > Billing and there you can customise some default options for billing clients like currency, VAT, etc. From there you can manage all your transactions as well as modify clients (add/remove), get reports & much more! </p>
                        <p>It's all very simple but powerful to manage projects from start till end. If still having any problems with implementation, feel free to contact us!</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="faq-accordion-item-outer" itemscope itemprop="mainEntity"
                  itemtype="https://schema.org/Question">
                  <h3 itemprop="name">Can The Invoice Number Be Changed?</h3>
                  <div class="faq-accordion-content">
                    <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                      <div itemprop="text">
                        <p>Yes, you can change your invoice number before you submit an invoice but not after it has been submitted.</p>
                        <p>To change the invoice number edit a previously submitted invoice number go to My Activities>View Invoices>Select Invoice>View Details>Edit Billing Address/Invoice Number/Shipping Method>Update Details. And it will be updated</p>
                        <p>Workstatus also helps your business owner track and manage projects in every stage of development from proposal through completion with our unique time-tracking system, contract management capabilities, and invoicing tools. Plus our integrated functionality allows you to combine deadlines related to multiple projects, so you don’t miss any deadlines on those all important bids.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="faq-accordion-item-outer" itemscope itemprop="mainEntity"
                  itemtype="https://schema.org/Question">
                  <h3 itemprop="name">Can I Manage Account Receivables And Account Payables Together With Workstatus™?
                  </h3>
                  <div class="faq-accordion-content">
                    <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                      <div itemprop="text">
                        <p>Yes, you can manage Account Receivables and Account Payables together with Workstatus.</p>
                        <p>The best part of both is you don’t need to buy two different pieces of software for each of them, just purchase Workstatus and all your business needs will be met under one umbrella. You would be able to generate professional invoices and estimates, track payment due dates, keep an eye on open projects, and more! </p>
                        <p>Workstatus helps your business by managing your account receivables and account payables details in an easy-to-use online system. It provides automation software that is easy to set up, install and maintain.</p>
                        <p>With its auto categorization feature, it creates a detailed report of each invoice and estimate within a few clicks while keeping track of all credits and advances made towards projects. With Workstatus software, your company will be able to create professional invoices/estimates in just minutes.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="testimonial-section bg-light padding-t-120 padding-b-120">
        <div class="container">
          <div class="top-section text-center">
            <h6><span class="bg-purple">TESTIMONIALS</span></h6>
            <h2>We Love To Hear From Our Users</h2>
            <p>Managing your workforce, projects, and reports gets simple & effective.</p>
          </div>
          <div class="dis-flex glider-contain testimonial-slider" id="testimonial-glider">
            <div class="glider">
              <div class="content-box">
                <div class="inner-box">
                  <p> “Workstatus simplified our workforce management and HR operations. Workstatus allowed us to track attendance seamlessly and accurately.”</p>
                  <picture>
                    <source type="image/webp" srcset="./assests/images/test-slide01.png">
                    <source type="image/png" srcset="./assests/images/test-slide01.png">
                    <img loading="lazy" src="./assests/images/test-slide01.png"
                      alt="Workstatus" width="77" height="77">
                  </picture>
                  <h5>Ripple Nagpal</h5>
                  <span class="designtn">CEO of Execube Digital</span>
                </div>
              </div>
              <div class="content-box">
                <div class="inner-box">
                  <p> “Workstatus simplified our workforce management and HR operations. Workstatus allowed us to track attendance seamlessly and accurately.”</p>
                  <picture>
                    <source type="image/webp" srcset="./assests/images/test-slide01.png">
                    <source type="image/png" srcset="./assests/images/test-slide01.png">
                    <img loading="lazy" src="./assests/images/test-slide01.png"
                      alt="Workstatus" width="77" height="77">
                  </picture>
                  <h5>Ripple Nagpal</h5>
                  <span class="designtn">CEO of Execube Digital</span>
                </div>
              </div>
              <div class="content-box">
                <div class="inner-box">
                  <p> “Workstatus simplified our workforce management and HR operations. Workstatus allowed us to track attendance seamlessly and accurately.”</p>
                  <picture>
                    <source type="image/webp" srcset="./assests/images/test-slide01.png">
                    <source type="image/png" srcset="./assests/images/test-slide01.png">
                    <img loading="lazy" src="./assests/images/test-slide01.png"
                      alt="Workstatus" width="77" height="77">
                  </picture>
                  <h5>Ripple Nagpal</h5>
                  <span class="designtn">CEO of Execube Digital</span>
                </div>
              </div>
            </div>
            <div class="test-button">
              <button aria-label="Previous" class="test-prev">«</button>
              <button aria-label="Next" class="test-next">»</button>
              <div role="tablist" class="dots"></div>
            </div>
          </div>
        </div>
      </section>
      <section class="top-rated padding-t-120 padding-b-120">
        <div class="container">
          <div class="top-section text-center">
            <h6><span class="bg-purple">TOP RATED GLOBALLY</span></h6>
            <h2>The <strong>#1</strong> Productivity Software</h2>
            <p>Managing your workforce, projects, and reports gets simple & effective.</p>
          </div>
          <div class="award-grid">
            <div class="award-column">
              <div class="rate-desp">
                <div class="rate-box">
                  <picture>
                    <img loading="lazy" src="./assests/images/sitebaz.svg" alt="Workstatus" width="155" height="36">
                  </picture>
                  <p>Workstatus is a Leader in the 2024 Gartner® Magic Quadrant™ for DevOps Platforms</p>
                  <a href="#" class="is-arrow">Explore More</a>
                </div>
                <div class="rate-box">
                  <picture>
                    <img loading="lazy" src="./assests/images/trustpiolet.svg" alt="Workstatus" width="127" height="31">
                  </picture>
                  <p>Workstatus is a Leader in the 2024 Gartner® Magic Quadrant™ for DevOps Platforms</p>
                  <a href="#" class="is-arrow">Explore More</a>
                </div>
              </div>
            </div>
            <div class="award-column">
              <div class="award-logo">
                <h3><strong>Workstatus</strong> ranks as a G2 Leader across DevSecOps categories</h3>
                <div class="award-row">
                  <div class="award-col">
                    <div class="img-wrap">
                      <picture>
                        <img loading="lazy" src="./assests/images/award-logo01.svg" alt="Award" width="119" height="19">
                      </picture>
                    </div>
                    <i class="star"></i>
                  </div>
                  <div class="award-col">
                    <div class="img-wrap">
                      <picture>
                        <img loading="lazy" src="./assests/images/award-logo02.svg" alt="Award" width="113" height="17">
                      </picture>
                    </div>
                    <i class="star"></i>
                  </div>
                  <div class="award-col">
                    <div class="img-wrap">
                      <picture>
                        <img loading="lazy" src="./assests/images/award-logo03.svg" alt="Award" width="26" height="26">
                      </picture>
                    </div>
                    <i class="star"></i>
                  </div>
                  <div class="award-col">
                    <div class="img-wrap">
                      <picture>
                        <img loading="lazy" src="./assests/images/award-logo04.svg" alt="Award" width="117" height="41">
                      </picture>
                    </div>
                    <i class="star"></i>
                  </div>
                  <div class="award-col">
                    <div class="img-wrap">
                      <picture>
                        <img loading="lazy" src="./assests/images/award-logo05.svg" alt="Award" width="117" height="41">
                      </picture>
                    </div>
                    <i class="star"></i>
                  </div>
                  <div class="award-col">
                    <div class="img-wrap">
                      <picture>
                        <img loading="lazy" src="./assests/images/award-logo06.svg" alt="Award" width="136" height="21">
                      </picture>
                    </div>
                    <i class="star"></i>
                  </div>
                  <div class="award-col">
                    <div class="img-wrap">
                      <picture>
                        <img loading="lazy" src="./assests/images/award-logo07.svg" alt="Award" width="124" height="23">
                      </picture>
                    </div>
                    <i class="star"></i>
                  </div>
                  <div class="award-col">
                    <div class="img-wrap">
                      <picture>
                        <img loading="lazy" src="./assests/images/award-logo08.svg" alt="Award" width="134" height="21">
                      </picture>
                    </div>
                    <i class="star"></i>
                  </div>
                </div>
                <a href="https://www.trustpilot.com/review/www.workstatus.io" class="is-arrow" style="opacity:0;">What industry analysts are saying </a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="start-journey bg-blue padding-t-100 padding-b-100">
        <div class="container">
          <div class="ws-flex">
            <div class="jour-col">
              <div class="top-section">
                <h6><span class="bg-purple">DON’T WAIT</span></h6>
                <h2>Start Your <span><img loading="lazy" src="./assests/images/head-logo.svg" alt="Workstatus" width="263" height="15"></span>
                  Journey Today!
                </h2>
                <p>Get detailed and clean activity reports of your team.</p>
              </div>
              <div class="actionBtn">
                <div><a href="javascript:void(0)" onclick="call_demows();" class="primary_btn1">Book A Demo</a>
                  <small>Get queries answered from experts</small>
                </div>
                <div><a data-href="https://app.workstatus.io/auth/register/?pid=42&amp;type=monthly" href="javascript:void(0);" class="primary_btn2 formbtn" onclick="return get_ws_signupform(this);">Start Free Trial</a>
                  <small>No credit card required</small>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <?php require_once 'common/footer.php';?>
    </main>
    <script src="assests/js/glider.min.js"></script>
    <script src="assests/js/script.js?var=<?php echo time(); ?>"></script>
    <script>
      document.addEventListener('DOMContentLoaded', () => {
        const section = document.querySelector('.feature-scroller');
        window.addEventListener('scroll', () => {
          const rect = section.getBoundingClientRect();
          const inViewport = rect.top >= 0 && rect.bottom <= window.innerHeight;
        });
      });
      
      
      if (document.getElementById("testimonial-glider")) {
      window.addEventListener("load", function() {
      var gliderElement = document.querySelector(".testimonial-slider .glider");
      if (gliderElement) {      
      new Glider(gliderElement, {
      slidesToShow: 1, 
      slidesToScroll: 4,
      draggable: true,
      scrollLock: false,
      duration: 2.25,
      dots: ".testimonial-slider .dots",
      dragDistance: true,
      arrows: { prev: '#testimonial-glider .test-prev', next: '#testimonial-glider .test-next' },      
      responsive: [
      {breakpoint: 320, settings: {slidesToShow:1,slidesToScroll:1,duration: 0.25}},
      {breakpoint: 767, settings: {slidesToShow: 1, slidesToScroll: 1, itemWidth: 150, duration: 0.25}},
      {breakpoint: 1024, settings: {slidesToShow: 1, slidesToScroll: 1, itemWidth: 150, duration: 0.25}},
      {breakpoint: 1400, settings: {slidesToShow: 1, slidesToScroll: 1, itemWidth: 150, duration: 0.25}}          
      ]
      });
      }
      });
      }
      
      if (document.getElementById("featured-slide")) {
      window.addEventListener("load", function () {
      const gliderElement = document.querySelector(".featured-slider .glider"); // Use your custom class
      const progressBar = document.querySelector(".progress-bar");
      
      if (gliderElement && progressBar) {
      const slides = gliderElement.children;
      const totalSlides = slides.length;
      
      const glider = new Glider(gliderElement, {
        slidesToShow: 4, // Default to 4 slides for desktop
        slidesToScroll: 1,
        draggable: true,
        scrollLock: false, // Prevent scrolling past bounds
        duration: 2.25,
        dots: ".dots",
        arrows: {
          prev: ".tail-prev", // Update to match your custom class if necessary
          next: ".tail-next", // Update to match your custom class if necessary
        },
        responsive: [
          {
            // Desktop (screen width > 1024px)
            breakpoint: 1024,
            settings: {
              slidesToShow: 4,
              slidesToScroll: 1,
            },
          },
          {
            // Tablet (screen width > 767px and <= 1024px)
            breakpoint: 768,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2,
            },
          },
          {
            // Mobile (screen width <= 767px)
            breakpoint: 0, // Default breakpoint for mobile devices
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
            },
          },
        ],
      });
      
      // Update progress bar on slide change
      function updateProgress(currentSlide) {
        let totalVisibleSlides;
        if (window.innerWidth <= 767) {
          totalVisibleSlides = 1;
        } else if (window.innerWidth <= 1024) {
          totalVisibleSlides = 1;
        } else {
          totalVisibleSlides = 1;
        }
        const progressPercentage =
          ((currentSlide + totalVisibleSlides) / totalSlides) * 100;
        progressBar.style.width = `${progressPercentage}%`;
      }
      
      // Initialize progress bar
      updateProgress(0);
      
      gliderElement.addEventListener("glider-slide-visible", function (event) {
        updateProgress(event.detail.slide);
      });
      }
      });
      }
      
      
      
      
const tabs = document.querySelectorAll('#tabs ul li');
const tabContents = document.querySelectorAll('.tab-contents');
let currentTab = 0;
let tabTimer;
const intervalTime = 2000; // 2 seconds

// Function to activate the tab by index
function activateTab(index) {
  // Remove active class from all tabs and tab contents
  tabs.forEach(tab => tab.classList.remove('active'));
  tabContents.forEach(content => content.classList.remove('active'));

  // Add active class to the current tab and tab content
  tabs[index].classList.add('active');
  tabContents[index].classList.add('active');

  // Reset animations (if applicable)
  resetAnimations();
}

// Start the auto-tab switching after the specified interval
function startAutoTabs() {
  // Set an interval to auto-change tabs every 5 seconds
  tabTimer = setInterval(() => {
    currentTab = (currentTab + 1) % tabs.length; // Loop back to the first tab after the last one
    activateTab(currentTab);
  }, intervalTime);
}

// Reset any animations on tabs
function resetAnimations() {
  tabs.forEach(tab => {
    const progress = tab.querySelector('.progress-bar');
    const background = tab.querySelector('.background-fill');

    if (progress) {
      progress.style.animation = 'none'; // Remove animation
      progress.offsetHeight; // Force reflow
      progress.style.animation = ''; // Reset animation
    }

    if (background) {
      background.style.animation = 'none'; // Remove animation
      background.offsetHeight; // Force reflow
      background.style.animation = ''; // Reset animation
    }
  });
}

// Add event listener for click to change tabs manually
tabs.forEach((tab, index) => {
  tab.addEventListener('click', (e) => {
    e.preventDefault();  // Prevent default behavior (useful for links)

    // Stop the auto-tab switching when user manually clicks a tab
    clearInterval(tabTimer);

    // Activate the clicked tab
    activateTab(index);

    // Update the current tab index
    currentTab = index;

    // Restart the auto-tab switching
    startAutoTabs();
  });
});

// Initial activation of the first tab
activateTab(currentTab);

// Start auto tabs on page load
startAutoTabs();  // This starts the auto-change every 5 seconds




      
      
      
      
    </script>
</html>
<?php require_once 'common/inc/config.inc.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="alternate" href="<?php echo SITE_URL; ?>/hubstaff-alternative" hreflang="en-us" />
    <link type="text/css" href="./assests/css/alternative-page.css" rel="preload stylesheet" as="style" />
  </head>
  <body>
    <?php require_once 'common/inc/after-body-tag.php'; ?>
    <div class="body__wrapper">
      <div class="feature-header"><?php require_once 'common/menu-v4.php';?></div>
      <main class="site__content">
        <section class="hero-banner">
          <div class="container">
            <div class="inner-wrap">
              <h1>The Hubstaff Alternative-Smarter, 
                3X Cost Savings, Customizable
              </h1>
              <p>Boost productivity and manage office, hybrid and remote teams effortlessly with Workstatus - the feature-rich, easy-to-use alternative to Hubstaff.
              </p>
              <div class="alter-image">
                <picture>
                  <img loading="lazy" src="./assests/images/alternative-01.svg"
                    alt="Alternative" width="1120" height="164">
                </picture>
              </div>
            </div>
          </div>
        </section>
        <section class="table-tab  padding-b-120">
          <div class="container">
            <div class="top-section">
              <h2>Comparison Table</h2>
              <p>Achieve valuable insights with AI dashboards, productivity reports, and location analytics.</p>
            </div>
            <div class="tab-wrap">
              <div class="tab-row">
                <nav id="tabs" class="tab-nav">
                  <ul>
                    <li class="active"><a href="#tab01">
                      <span class="icon"><img class="show"  loading="lazy" src="./assests/images/tb01.svg" alt="Icon" width="16" height="18"><img class="hide"  loading="lazy" src="./assests/images/tb01-hover.svg" alt="Icon" width="16" height="18">
                      </span>
                      Time Tracking</a>
                    </li>
                    <li><a href="#tab02">  <span class="icon"><img class="show"  loading="lazy" src="./assests/images/tb02.svg" alt="Icon" width="16" height="18"><img class="hide"  loading="lazy" src="./assests/images/tb02-hover.svg" alt="Icon" width="16" height="18">
                      </span>
                      Productivity Management</a>
                    </li>
                    <li><a href="#tab03"><span class="icon"><img class="show"  loading="lazy" src="./assests/images/tb05.svg" alt="Icon" width="16" height="18"><img class="hide"  loading="lazy" src="./assests/images/tb05-hover.svg" alt="Icon" width="16" height="18">
                      </span>
                      Project  Management</a>
                    </li>
                    <li><a href="#tab04"> <span class="icon"><img class="show"  loading="lazy" src="./assests/images/tb04.svg" alt="Icon" width="16" height="18"><img class="hide"  loading="lazy" src="./assests/images/tb04-hover.svg" alt="Icon" width="16" height="18">
                      </span>
                      Attendance Management</a>
                    </li>
                  </ul>
                </nav>
                <div id="tab-contents" class="tcontents">
                  <div id="tab01" class="tab-contents active">
                    <div class="numeric-table show-all" id="compare-table">
                      <div class="scroll-compare">
                        <div class="table-block">
                          <div class="div-block-top">
                            <div class="logo-ws logovs" >
                              <h2>Productivity Features</h2>
                            </div>
                            <div class="logo-tb logovs">
                              <picture>
                                <img class="desktop" loading="lazy" src="./assests/images/numlogo-01.svg"
                                  alt="logo" width="200" height="35">
                              </picture>
                            </div>
                            <div class="logo-tb  logovs">
                              <picture>
                                <img class="desktop" loading="lazy" src="./assests/images/numlogo-02.svg"
                                  alt="logo" width="117" height="35">
                              </picture>
                            </div>
                            <div class="logo-tb  logovs">
                              <picture>
                                <img class="desktop" loading="lazy" src="./assests/images/numlogo-03.svg"
                                  alt="logo" width="122" height="35">
                              </picture>
                            </div>
                            <div class="logo-tb  logovs">
                              <picture>
                                <img class="desktop" loading="lazy" src="./assests/images/numlogo-04.svg"
                                  alt="logo" width="116" height="35">
                              </picture>
                            </div>
                            <div class="logo-tb  logovs">
                              <picture>
                                <img class="desktop" loading="lazy" src="./assests/images/numlogo-05.svg"
                                  alt="logo" width="116" height="35">
                              </picture>
                            </div>
                          </div>
                          <div class="table-row">
                            <div class="ws-column ws-lftcolumn">
                              <p>Screenshot Capturing (Individual)</p>
                            </div>
                            <div class="ws-column"><i class="check-icon"></i></div>
                            <div class="ws-column"><i class="cross-icon"></i></div>
                            <div class="ws-column"><i class="check-icon"></i></div>
                            <div class="ws-column"><i class="check-icon"></i></div>
                            <div class="ws-column"><i class="check-icon"></i></div>
                          </div>
                          <div class="table-row">
                            <div class="ws-column ws-lftcolumn">
                              <p>Apps & URL Tracking</p>
                            </div>
                            <div class="ws-column"><i class="check-icon"></i></div>
                            <div class="ws-column"><i class="check-icon"></i></div>
                            <div class="ws-column"><i class="check-icon"></i></div>
                            <div class="ws-column"><i class="cross-icon"></i></div>
                            <div class="ws-column">Limited</div>
                          </div>
                          <div class="table-row">
                            <div class="ws-column ws-lftcolumn">
                              <p>Productive & Unproductive</p>
                            </div>
                            <div class="ws-column"><i class="check-icon"></i></div>
                            <div class="ws-column"><i class="cross-icon"></i></div>
                            <div class="ws-column"><i class="check-icon"></i></div>
                            <div class="ws-column"><i class="check-icon"></i></div>
                            <div class="ws-column"><i class="check-icon"></i></div>
                          </div>
                          <div class="table-row">
                            <div class="ws-column ws-lftcolumn">
                              <p>Stealth Mode</p>
                            </div>
                            <div class="ws-column"><i class="check-icon"></i></div>
                            <div class="ws-column">Limited</div>
                            <div class="ws-column"><i class="check-icon"></i></div>
                            <div class="ws-column"><i class="check-icon"></i></div>
                            <div class="ws-column"><i class="check-icon"></i></div>
                          </div>
                          <div class="table-row">
                            <div class="ws-column ws-lftcolumn">
                              <p>Screenshot delete</p>
                            </div>
                            <div class="ws-column"><i class="cross-icon"></i></div>
                            <div class="ws-column"><i class="cross-icon"></i></div>
                            <div class="ws-column"><i class="check-icon"></i></div>
                            <div class="ws-column"><i class="check-icon"></i></div>
                            <div class="ws-column"><i class="check-icon"></i></div>
                          </div>
                          <div class="table-row">
                            <div class="ws-column ws-lftcolumn">
                              <p>Task Management</p>
                            </div>
                            <div class="ws-column"><i class="cross-icon"></i></div>
                            <div class="ws-column"><i class="cross-icon"></i></div>
                            <div class="ws-column"><i class="check-icon"></i></div>
                            <div class="ws-column"><i class="check-icon"></i></div>
                            <div class="ws-column"><i class="check-icon"></i></div>
                          </div>
                          <div class="table-row">
                            <div class="ws-column ws-lftcolumn">
                              <p>Task Management</p>
                            </div>
                            <div class="ws-column"><i class="cross-icon"></i></div>
                            <div class="ws-column"><i class="cross-icon"></i></div>
                            <div class="ws-column"><i class="check-icon"></i></div>
                            <div class="ws-column"><i class="check-icon"></i></div>
                            <div class="ws-column"><i class="check-icon"></i></div>
                          </div>
                          <div class="table-row">
                            <div class="ws-column ws-lftcolumn">
                              <p>Task Management</p>
                            </div>
                            <div class="ws-column"><i class="cross-icon"></i></div>
                            <div class="ws-column"><i class="cross-icon"></i></div>
                            <div class="ws-column"><i class="check-icon"></i></div>
                            <div class="ws-column"><i class="check-icon"></i></div>
                            <div class="ws-column"><i class="check-icon"></i></div>
                          </div>
                          <div class="table-row">
                            <div class="ws-column ws-lftcolumn">
                              <p>Task Management</p>
                            </div>
                            <div class="ws-column"><i class="cross-icon"></i></div>
                            <div class="ws-column"><i class="cross-icon"></i></div>
                            <div class="ws-column"><i class="check-icon"></i></div>
                            <div class="ws-column"><i class="check-icon"></i></div>
                            <div class="ws-column"><i class="check-icon"></i></div>
                          </div>
                          <div class="table-row">
                            <div class="ws-column ws-lftcolumn">
                              <p>Task Management</p>
                            </div>
                            <div class="ws-column"><i class="cross-icon"></i></div>
                            <div class="ws-column"><i class="cross-icon"></i></div>
                            <div class="ws-column"><i class="check-icon"></i></div>
                            <div class="ws-column"><i class="check-icon"></i></div>
                            <div class="ws-column"><i class="check-icon"></i></div>
                          </div>
                          <div class="table-row">
                            <div class="ws-column ws-lftcolumn">
                              <p>Task Management</p>
                            </div>
                            <div class="ws-column"><i class="cross-icon"></i></div>
                            <div class="ws-column"><i class="cross-icon"></i></div>
                            <div class="ws-column"><i class="check-icon"></i></div>
                            <div class="ws-column"><i class="check-icon"></i></div>
                            <div class="ws-column"><i class="check-icon"></i></div>
                          </div>
                          <div class="table-row">
                            <div class="ws-column ws-lftcolumn">
                              <p>Task Management</p>
                            </div>
                            <div class="ws-column"><i class="cross-icon"></i></div>
                            <div class="ws-column"><i class="cross-icon"></i></div>
                            <div class="ws-column"><i class="check-icon"></i></div>
                            <div class="ws-column"><i class="check-icon"></i></div>
                            <div class="ws-column"><i class="check-icon"></i></div>
                          </div>
                          <div class="table-row price-table-row">
                            <div class="ws-column ws-lftcolumn">
                              <p><strong>Pricing</strong></p>
                            </div>
                            <div class="ws-column"><strong>$345</strong>
                              <span class="small-font">(Per user)</span>
                            </div>
                            <div class="ws-column"><strong>$345</strong>
                            <span class="small-font">(Per user)</span>
                            </div>
                            <div class="ws-column"><strong>$345</strong>
                            <span class="small-font">(Per user)</span>
                            </div>
                            <div class="ws-column"><strong>$345</strong><span class="small-font">(Per user)</span></div>
                            <div class="ws-column"><strong>$345</strong><span class="small-font">(Per user)</span></div>
                          </div>
                          <div class="table-row numeric-row">
                            <div class="ws-column ws-lftcolumn">
                              <p><strong>Calculative Comparison</strong></p>
                              <div class="custom-input">
                                <input type="number" id="quantity" value="10" min="1">
                                <div class="custom-buttons">
                                  <button class="up" onclick="increaseValue()"><img loading="lazy" src="./assests/images/ar01.svg" alt="Workstatus" width="13" height="8"></button>
                                  <button class="down" onclick="decreaseValue()"><img loading="lazy" src="./assests/images/ar02.svg" alt="Workstatus" width="13" height="8"></button>
                                </div>
                              </div>
                            </div>
                            <div class="ws-column active"><strong>$55</strong>
                              <span class="small-font">(Per user)</span>
                            </div>
                            <div class="ws-column"><strong>$55</strong>
                              <span class="small-font">(Per user)</span>
                            </div>
                            <div class="ws-column"><strong>$55</strong>
                              <span class="small-font">(Per user)</span>
                            </div>
                            <div class="ws-column"><strong>$55</strong>    <span class="small-font">(Per user)</span></div>
                            <div class="ws-column"><strong>$55</strong>    <span class="small-font">(Per user)</span></div>
                          </div>
                        </div>
                        <div class="view-more margin-t-50 text-center">
                          <a href="javascript:void(0);" onclick="_morecompTable();" class="active">
                          <img loading="lazy" src="./assests/images/scroll-img2.svg" alt="Workstatus" width="50" height="50">
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div id="tab02" class="tab-contents">
                    <div class="numeric-table show-all" id="compare-table">
                      <div class="scroll-compare">
                        <div class="table-block">
                          <div class="div-block-top">
                            <div class="logo-ws logovs" >
                              <h2>Test</h2>
                            </div>
                            <div class="logo-tb logovs">
                              <picture>
                                <img class="desktop" loading="lazy" src="./assests/images/numlogo-01.svg"
                                  alt="logo" width="200" height="35">
                              </picture>
                            </div>
                            <div class="logo-tb  logovs">
                              <picture>
                                <img class="desktop" loading="lazy" src="./assests/images/numlogo-02.svg"
                                  alt="logo" width="117" height="35">
                              </picture>
                            </div>
                            <div class="logo-tb  logovs">
                              <picture>
                                <img class="desktop" loading="lazy" src="./assests/images/numlogo-03.svg"
                                  alt="logo" width="122" height="35">
                              </picture>
                            </div>
                            <div class="logo-tb  logovs">
                              <picture>
                                <img class="desktop" loading="lazy" src="./assests/images/numlogo-04.svg"
                                  alt="logo" width="116" height="35">
                              </picture>
                            </div>
                            <div class="logo-tb  logovs">
                              <picture>
                                <img class="desktop" loading="lazy" src="./assests/images/numlogo-05.svg"
                                  alt="logo" width="116" height="35">
                              </picture>
                            </div>
                          </div>
                          <div class="table-row">
                            <div class="ws-column ws-lftcolumn">
                              <p>Screenshot Capturing (Individual)</p>
                            </div>
                            <div class="ws-column"><i class="check-icon"></i></div>
                            <div class="ws-column"><i class="cross-icon"></i></div>
                            <div class="ws-column"><i class="check-icon"></i></div>
                            <div class="ws-column"><i class="check-icon"></i></div>
                            <div class="ws-column"><i class="check-icon"></i></div>
                          </div>
                          <div class="table-row">
                            <div class="ws-column ws-lftcolumn">
                              <p>Apps & URL Tracking</p>
                            </div>
                            <div class="ws-column"><i class="check-icon"></i></div>
                            <div class="ws-column"><i class="check-icon"></i></div>
                            <div class="ws-column"><i class="check-icon"></i></div>
                            <div class="ws-column"><i class="cross-icon"></i></div>
                            <div class="ws-column">Limited</div>
                          </div>
                          <div class="table-row">
                            <div class="ws-column ws-lftcolumn">
                              <p>Productive & Unproductive</p>
                            </div>
                            <div class="ws-column"><i class="check-icon"></i></div>
                            <div class="ws-column"><i class="cross-icon"></i></div>
                            <div class="ws-column"><i class="check-icon"></i></div>
                            <div class="ws-column"><i class="check-icon"></i></div>
                            <div class="ws-column"><i class="check-icon"></i></div>
                          </div>
                          <div class="table-row">
                            <div class="ws-column ws-lftcolumn">
                              <p>Stealth Mode</p>
                            </div>
                            <div class="ws-column"><i class="check-icon"></i></div>
                            <div class="ws-column">Limited</div>
                            <div class="ws-column"><i class="check-icon"></i></div>
                            <div class="ws-column"><i class="check-icon"></i></div>
                            <div class="ws-column"><i class="check-icon"></i></div>
                          </div>
                          <div class="table-row">
                            <div class="ws-column ws-lftcolumn">
                              <p>Screenshot delete</p>
                            </div>
                            <div class="ws-column"><i class="cross-icon"></i></div>
                            <div class="ws-column"><i class="cross-icon"></i></div>
                            <div class="ws-column"><i class="check-icon"></i></div>
                            <div class="ws-column"><i class="check-icon"></i></div>
                            <div class="ws-column"><i class="check-icon"></i></div>
                          </div>
                          <div class="table-row">
                            <div class="ws-column ws-lftcolumn">
                              <p>Task Management</p>
                            </div>
                            <div class="ws-column"><i class="cross-icon"></i></div>
                            <div class="ws-column"><i class="cross-icon"></i></div>
                            <div class="ws-column"><i class="check-icon"></i></div>
                            <div class="ws-column"><i class="check-icon"></i></div>
                            <div class="ws-column"><i class="check-icon"></i></div>
                          </div>
                          <div class="table-row">
                            <div class="ws-column ws-lftcolumn">
                              <p>Task Management</p>
                            </div>
                            <div class="ws-column"><i class="cross-icon"></i></div>
                            <div class="ws-column"><i class="cross-icon"></i></div>
                            <div class="ws-column"><i class="check-icon"></i></div>
                            <div class="ws-column"><i class="check-icon"></i></div>
                            <div class="ws-column"><i class="check-icon"></i></div>
                          </div>
                          <div class="table-row">
                            <div class="ws-column ws-lftcolumn">
                              <p>Task Management</p>
                            </div>
                            <div class="ws-column"><i class="cross-icon"></i></div>
                            <div class="ws-column"><i class="cross-icon"></i></div>
                            <div class="ws-column"><i class="check-icon"></i></div>
                            <div class="ws-column"><i class="check-icon"></i></div>
                            <div class="ws-column"><i class="check-icon"></i></div>
                          </div>
                          <div class="table-row">
                            <div class="ws-column ws-lftcolumn">
                              <p>Task Management</p>
                            </div>
                            <div class="ws-column"><i class="cross-icon"></i></div>
                            <div class="ws-column"><i class="cross-icon"></i></div>
                            <div class="ws-column"><i class="check-icon"></i></div>
                            <div class="ws-column"><i class="check-icon"></i></div>
                            <div class="ws-column"><i class="check-icon"></i></div>
                          </div>
                          <div class="table-row">
                            <div class="ws-column ws-lftcolumn">
                              <p>Task Management</p>
                            </div>
                            <div class="ws-column"><i class="cross-icon"></i></div>
                            <div class="ws-column"><i class="cross-icon"></i></div>
                            <div class="ws-column"><i class="check-icon"></i></div>
                            <div class="ws-column"><i class="check-icon"></i></div>
                            <div class="ws-column"><i class="check-icon"></i></div>
                          </div>
                          <div class="table-row">
                            <div class="ws-column ws-lftcolumn">
                              <p>Task Management</p>
                            </div>
                            <div class="ws-column"><i class="cross-icon"></i></div>
                            <div class="ws-column"><i class="cross-icon"></i></div>
                            <div class="ws-column"><i class="check-icon"></i></div>
                            <div class="ws-column"><i class="check-icon"></i></div>
                            <div class="ws-column"><i class="check-icon"></i></div>
                          </div>
                          <div class="table-row">
                            <div class="ws-column ws-lftcolumn">
                              <p>Task Management</p>
                            </div>
                            <div class="ws-column"><i class="cross-icon"></i></div>
                            <div class="ws-column"><i class="cross-icon"></i></div>
                            <div class="ws-column"><i class="check-icon"></i></div>
                            <div class="ws-column"><i class="check-icon"></i></div>
                            <div class="ws-column"><i class="check-icon"></i></div>
                          </div>
                          <div class="table-row price-table-row">
                            <div class="ws-column ws-lftcolumn">
                              <p><strong>Pricing</strong></p>
                            </div>
                            <div class="ws-column"><strong>$345</strong>
                                  <span class="small-font">(Per user)</span>
                            </div>
                            <div class="ws-column"><strong>$345</strong>
                                  <span class="small-font">(Per user)</span>
                            </div>
                            <div class="ws-column"><strong>$345</strong>
                                  <span class="small-font">(Per user)</span>
                            </div>
                            <div class="ws-column"><strong>$345</strong>    <span class="small-font">(Per user)</span></div>
                            <div class="ws-column"><strong>$345</strong>    <span class="small-font">(Per user)</span></div>
                          </div>
                          <div class="table-row numeric-row">
                            <div class="ws-column ws-lftcolumn">
                              <p><strong>Calculative Comparison</strong></p>
                              <div class="custom-input">
                                <input type="number" id="quantity" value="10" min="1">
                                <div class="custom-buttons">
                                  <button class="up" onclick="increaseValue()"><img loading="lazy" src="./assests/images/ar01.svg" alt="Workstatus" width="13" height="8"></button>
                                  <button class="down" onclick="decreaseValue()"><img loading="lazy" src="./assests/images/ar02.svg" alt="Workstatus" width="13" height="8"></button>
                                </div>
                              </div>
                            </div>
                            <div class="ws-column active"><strong>$55</strong>
                              <span class="small-font">(Per user)</span>
                            </div>
                            <div class="ws-column"><strong>$55</strong>
                              <span class="small-font">(Per user)</span>
                            </div>
                            <div class="ws-column"><strong>$55</strong>
                              <span class="small-font">(Per user)</span>
                            </div>
                            <div class="ws-column"><strong>$55</strong>    <span class="small-font">(Per user)</span></div>
                            <div class="ws-column"><strong>$55</strong>    <span class="small-font">(Per user)</span></div>
                          </div>
                        </div>
                        <div class="view-more margin-t-50 text-center">
                          <a href="javascript:void(0);" onclick="_morecompTable();" class="active">
                          <img loading="lazy" src="./assests/images/scroll-img2.svg" alt="Workstatus" width="50" height="50">
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
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
        <section class="alter-section padding-0">
          <div class="container">
            <div class="top-section">
              <h6><span class="bg-purple">Data Driving Results</span></h6>
              <h2>Why Switch from Hubstaff?</h2>
              <p>Switch from Hubstaff to Workstatus for smarter time tracking, better automation, and a hassle-free<br> experience. Get more control with less effort.
              </p>
            </div>
            <div class="data-flow">
              <picture>
                <img loading="lazy" src="./assests/images/allft-01.svg" alt="Data Driving"
                  width="1354" height="698">
              </picture>
            </div>
          </div>
        </section>
        <section class="alternative-section">
          <div class="alternative-wrapper  padding-t-120 padding-b-120">
            <div class="container">
              <div class="top-section text-center">
                <h6><span class="bg-purple">HABIT OPTIMIZATION</span></h6>
                <h2>Workstatus</h2>
                <p>A workforce management tool with GPS tracking, productivity monitoring, and automated<br> reports, making it ideal for remote and field teams.</p>
              </div>
              <div class="feature-loop">
                <div class="feature-row">
                  <div class="column-left">
                    <picture>
                      <img loading="lazy" src="./assests/images/compws-01.png" title="Get detal"  width="662" height="667">
                    </picture>
                  </div>
                  <div class="column-right">
                    <div class="text-column listing">
                      <h3>Pros:</h3>
                      <ul>
                        <li>Automatic tracking with no manual input</li>
                        <li>Detailed reports on productivity trends</li>
                        <li>Good personal productivity improvement</li>
                      </ul>
                    </div>
                    <div class="text-column listing">
                      <h3>Cons</h3>
                      <ul>
                        <li>Expensive compared to other tools</li>
                        <li>Not ideal for payroll management</li>
                        <li>Limited manual time entry options</li>
                      </ul>
                    </div>
                    <div class="text-column">
                      <a href="#" class="prplan">Pricing plans start from $5.38/month.</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="alternative-wrapper  padding-t-120 padding-b-120">
            <div class="container">
              <div class="top-section text-center">
                <h6><span class="bg-purple">EFFICIENCY ENHANCED</span></h6>
                <h2>RescueTime</h2>
                <p>A workforce management tool with GPS tracking, productivity monitoring, and automated<br> reports, making it ideal for remote and field teams.</p>
              </div>
              <div class="feature-loop">
                <div class="feature-row">
                  <div class="column-left">
                    <picture>
                      <img loading="lazy" src="./assests/images/compws-02.png" title="Get detal"  width="662" height="667">
                    </picture>
                  </div>
                  <div class="column-right">
                    <div class="text-column listing">
                      <h3>Pros:</h3>
                      <ul>
                        <li>Automatic tracking with no manual input</li>
                        <li>Detailed reports on productivity trends</li>
                        <li>Good personal productivity improvement</li>
                      </ul>
                    </div>
                    <div class="text-column listing">
                      <h3>Cons</h3>
                      <ul>
                        <li>Expensive compared to other tools</li>
                        <li>Not ideal for payroll management</li>
                        <li>Limited manual time entry options</li>
                      </ul>
                    </div>
                    <div class="text-column">
                      <a href="#" class="prplan">Pricing plans start from $5.38/month.</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="alternative-wrapper  padding-t-120 padding-b-120">
            <div class="container">
              <div class="top-section text-center">
                <h6><span class="bg-purple">EFFICIENCY ENHANCED</span></h6>
                <h2>Toggl Track</h2>
                <p>A workforce management tool with GPS tracking, productivity monitoring, and automated<br> reports, making it ideal for remote and field teams.</p>
              </div>
              <div class="feature-loop">
                <div class="feature-row">
                  <div class="column-left">
                    <picture>
                      <img loading="lazy" src="./assests/images/compws-03.png" title="Get detal"  width="662" height="667">
                    </picture>
                  </div>
                  <div class="column-right">
                    <div class="text-column listing">
                      <h3>Pros:</h3>
                      <ul>
                        <li>Automatic tracking with no manual input</li>
                        <li>Detailed reports on productivity trends</li>
                        <li>Good personal productivity improvement</li>
                      </ul>
                    </div>
                    <div class="text-column listing">
                      <h3>Cons</h3>
                      <ul>
                        <li>Expensive compared to other tools</li>
                        <li>Not ideal for payroll management</li>
                        <li>Limited manual time entry options</li>
                      </ul>
                    </div>
                    <div class="text-column">
                      <a href="#" class="prplan">Pricing plans start from $5.38/month.</a>
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
      <?php require_once 'common/footer.php';?>
    </div>
    <script src="assests/js/glider.min.js"></script>
    <script src="assests/js/script.js?var=<?php echo time(); ?>"></script>
    <script>
      function _morecompTable() {
      var elm = document.getElementById("compare-table");
      if (elm) {
        elm.classList.toggle("active");
      }
      }
      
      tabLabels.forEach(function(label, index){
      label.addEventListener("click", activateTab);
      });
      
      if(document.getElementById("mctab-contents")){
      var tabMC       = document.querySelectorAll("#tabs li");
      var tabPanesMc  = document.getElementById("mctab-contents").getElementsByClassName("tab-contents");
      function activateTabFx(e){
        e.preventDefault();  
        tabMC.forEach(function(label, index){
            label.classList.remove("active");
        });
      
        [].forEach.call(tabPanesMc, function(pane, index){
            pane.classList.remove("active");
        }); 
      
        e.target.parentNode.classList.add("active");
        var clickedTab = e.target.getAttribute("href");
        document.querySelector(clickedTab).classList.add("active");
      }
      tabMC.forEach(function(label, index){
      label.addEventListener("click", activateTabFx);
      });
      }
      
      
      
      function increaseValue() {
            let input = document.getElementById('quantity');
            input.stepUp();
        }
      
        function decreaseValue() {
            let input = document.getElementById('quantity');
            input.stepDown();
        }
      
      
      
      
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
      
      
      
    </script>
  </body>
</html>
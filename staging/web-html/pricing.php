<?php require_once 'common/inc/config.inc.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="alternate" href="<?php echo SITE_URL; ?>/pricing" hreflang="en-us" />
    <link type="text/css" href="./assests/css/pricing-new.css" rel="preload stylesheet" as="style" />
    <link type="text/css" href="./assests/css/pricing.css" rel="preload stylesheet" as="style" />
    <?php require_once 'common/inc/header-files.php'; ?>
  </head>
  <body>
    <?php require_once 'common/inc/after-body-tag.php'; ?>
    <div class="body__wrapper">
      <div class="feature-header">
        <?php require_once 'common/header.php';?>
      </div>
      <div id="dummytest">
        <div v-if="loading" id="pre-loader">Please wait, while we load
          the pricing plans for you.
        </div>
        <div v-else>
          <div v-if="plans.design_mode == 0">
            <section class="pricehead">
              <div class="container">
                <div class="inner-wrap">
                  <h1>Choose the plan that's right for your team</h1>
                  <p>Free 7-day trial. Get two months free when you pay annually.
                  </p>
                </div>
              </div>
            </section>
            <section class="price_section price-column-section">
              <div class="container">
                <div id="tabs12" class="dis-flex tab-contents no-js">
                  <div class="tab-link-outer">
                    <div class="tab-nav">
                      <div class="tab-link" v-for="(plan,index) in plans.values" v-bind:id="plan.id"
                        v-on:click="changeTab(plan.id,plan.product_name)"
                        :class="plan.id==2 ? 'is-active' : ''">
                        <h3><i class="icon"></i>{{plan.product_name}}</h3>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="package-outer">
                  <div>
                    <div class="tab-content" v-for="(plan,index) in plans.values"
                      v-bind:id="plan.product_name" :class="plan.id==2 ? 'is-active' : ''">
                      <div class="priceRow">
                        <div class="tab">
                          <button :class="'tablinks' + plan.id + ' active'"
                            v-on:click="legalDocuments(event,plan.id == 1 ? 'Annual' : 'Annual' + plan.id,plan.product_name,plan.id,'Annual')"
                            v-bind:id="plan.id + 'Annual'">Annual</button>
                          <button :class="'tablinks' + plan.id"
                            v-on:click="legalDocuments(event,plan.id == 1 ? 'Monthly' : 'Monthly' + plan.id,plan.product_name,plan.id,'Monthly')"
                            v-bind:id="plan.id + 'Monthly'">Monthly</button>
                        </div>
                        <div v-bind:id="plan.id == 1 ? 'Monthly' : 'Monthly' + plan.id"
                          class="tabcontent" :class="'tabcontent' + plan.id" style="display:none">
                          <div class="priceCard">
                            <div class="column" v-for="(plandata,index1) in plan.plans"
                              :class="'col-'+plan.plans.length + (plandata.recommended_plan == 1 ? ' recomended-style' : '')">
                              <div class="card">
                                <h3>
                                  {{plandata.name}}
                                </h3>
                                <div class="card-body">
                                  <div class="card-body-header">
                                    <p class="price-p">{{plandata.description}}</p>
                                    <div class="price">
                                      <div v-if="plandata.price_type == 'USD Pricing'"
                                        class="card-plan">
                                        ${{plandata.price}}<span>{{plandata.price > 0 ? " / user / mo" : " forever"}}</span>
                                      </div>
                                      <div v-else class="card-plan">
                                        ₹{{plandata.price}}<span>{{plandata.price > 0 ? " / user / mo" : " forever"}}</span>
                                      </div>
                                      <p class="user_text">Starts at
                                        {{plandata.price_type == 'USD Pricing' ? '$' : '₹'}}{{plandata.subscription_plan_limitation ? plandata.subscription_plan_limitation.user_number*plandata.price : 1*plandata.price }}
                                        <br v-if="index1 >= 0 ">{{index1 ? " (includes"
                                        : "(includes"}} {{plandata.subscription_plan_limitation ? plandata.subscription_plan_limitation.user_number : 1 }}
                                        {{ (plandata.subscription_plan_limitation  && (plandata.subscription_plan_limitation.user_number > 1)) ? "users)" : "user)"}}
                                      </p>
                                    </div>
                                    <a :href="baseurlfrontend + '/auth/register?pid='+ plandata.id+'&type=monthly'"
                                      class="price_btn">{{(plandata.price > 0) ? "Start Free Trial" : " Signup Now"}}</a>
                                    <p class="text_small">No card required, cancel
                                      anytime
                                    </p>
                                  </div>
                                  <ul class="list-unstyled">
                                    <li v-for="item in plandata.webshow"
                                      :class="item.status ? '' : 'itemDisabled'"
                                      v-if="item.showstatus != 0">
                                      {{item.name}}
                                    </li>
                                  </ul>
                                  <div class="priceCard-footer">
                                    <a :href="baseurlfrontend + '/auth/register?pid='+ plandata.id+'&type=monthly'"
                                      class="price_btn">{{(plandata.price > 0) ? "Start Free Trial" : " Signup Now"}}</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div v-bind:id="plan.id == 1 ? 'Annual' : 'Annual' + plan.id"
                          class="tabcontent" :class="'tabcontent' + plan.id"
                          style="display:block">
                          <div class="priceCard">
                            <div class="column" v-for="(plandata,index1) in plan.plans"
                              :class="'col-'+plan.plans.length + (plandata.recommended_plan ? ' recomended-style' : '')">
                              <div class="card">
                                <h3>
                                  {{plandata.name}}
                                </h3>
                                <div class="card-body">
                                  <div class="card-body-header">
                                    <p class="price-p">{{plandata.description}}</p>
                                    <div class="price">
                                      <div v-if="plandata.price == 0">
                                        <br />
                                        <br />
                                      </div>
                                      <div v-if="plandata.price > 0">
                                        <p style="text-decoration: line-through;"
                                          v-if="plandata.price_type == 'USD Pricing'"
                                          class="card-plan nortext">
                                          ${{plandata.price}}<span>{{plandata.price > 0 ? " / user / mo" : " forever"}}</span>
                                        </p>
                                        <p style="text-decoration: line-through;"
                                          v-else class="card-plan nortext">
                                          ₹{{plandata.price}}<span>{{plandata.price > 0 ? " / user / mo" : " forever"}}</span>
                                        </p>
                                      </div>
                                      <div v-if="plandata.price_type == 'USD Pricing'"
                                        class="card-plan">
                                        ${{plandata.annual_price > 0 ? parseFloat((plandata.annual_price/12)).toFixed(0) : 0}}<span>{{plandata.annual_price > 0 ? " / user / mo" : " forever"}}</span>
                                      </div>
                                      <div v-else class="card-plan">
                                        ₹{{plandata.annual_price > 0 ? parseFloat((plandata.annual_price/12)).toFixed(0) : 0}}<span>{{plandata.annual_price > 0 ? " / user / mo" : " forever"}}</span>
                                      </div>
                                      <p class="user_text">Starts at
                                        {{plandata.price_type == 'USD Pricing' ? '$' : '₹'}}{{ plandata.subscription_plan_limitation ? parseFloat(plandata.subscription_plan_limitation.user_number*(parseFloat(((plandata.annual_price/12))).toFixed(0))).toFixed(0) : 1*parseFloat((plandata.annual_price/12)).toFixed(0) }}
                                        <br v-if="index1 >= 0 ">{{index1 ? " (includes"
                                        : "(includes"}} {{plandata.subscription_plan_limitation ? plandata.subscription_plan_limitation.user_number : 1 }}
                                        {{ (plandata.subscription_plan_limitation  && (plandata.subscription_plan_limitation.user_number > 1)) ? "users)" : "user)"}}
                                      </p>
                                    </div>
                                    <a :href="baseurlfrontend + '/auth/register?pid='+ plandata.id+'&type=annual'"
                                      class="price_btn">{{(plandata.annual_price > 0) ? "Start Free Trial" : " Signup Now"}}</a>
                                    <p class="text_small">No card required, cancel
                                      anytime
                                    </p>
                                  </div>
                                  <ul class="list-unstyled">
                                    <li v-for="item in plandata.webshow"
                                      :class="item.status ? '' : 'itemDisabled'"
                                      v-if="item.showstatus != 0">
                                      {{item.name}}
                                    </li>
                                  </ul>
                                  <div class="priceCard-footer">
                                    <a :href="baseurlfrontend + '/auth/register?pid='+ plandata.id+'&type=annual'"
                                      class="price_btn">{{(plandata.annual_price > 0) ? "Start Free Trial" : " Signup Now"}}</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </section>
            </div>
            <div v-else>
              <main class="site__content">
                <section class="pricing-sec">
                  <div class="container">
                    <nav id="pricetabs">
                      <h1>Choose the plan that's right for your team</h1>
                      <ul>
                        <li class="active" @click="changeAnnual()" id="annualtab"
                          style="cursor: pointer;"><a>Annual</a></li>
                        <li @click="changeMonthly()" id="monthlytab" style="cursor: pointer;">
                          <a>Monthly</a>
                        </li>
                      </ul>
                      <!-- <h6><strong>Get two months free</strong> when you pay annually.</h6> -->
                    </nav>
                    <div id="pricecontent">
                      <div id="tab1" class="tab-contents active">
                        <div class="price-cards">
                          <div class="column 0_pidx" v-for="(plan,index) in plans.values">
                            <h3>{{plan.name}} <span class="s-user" v-if="plan.name == 'FREE FOREVER'">(For single user only)</span></h3>
                            <p>
                              {{plan.description}}
                            </p>
                            <div v-if="plan.is_custom_support == 0">
                              <p class="line-though"
                                v-if="plan.price > 0 && plan.price_type == 'USD Pricing'">
                                ${{plan.price}} / user / month
                              </p>
                              <p class="line-though" v-else>₹{{plan.price}} / user / month</p>
                              <div class="amount" v-if="plan.price > 0">
                                <strong
                                  v-if="plan.price_type == 'USD Pricing'">${{parseFloat((plan.annual_price/12)).toFixed(0)}}</strong>
                                <strong v-else>₹{{parseFloat((plan.annual_price/12)).toFixed(0)}}
                                </strong>
                                <sub>/ user / month</sub>
                              </div>
                              <div class="amount" v-else>
                                <strong v-if="plan.price_type == 'USD Pricing'">$0</strong>
                                <strong v-else>₹0
                                </strong>
                                <sub>forever</sub>
                              </div>
                            </div>
                            <div v-else>
                              <div class="amount hidden" style="text-align: center;">
                                <strong>₹0</strong> <sub>forever</sub>
                              </div>
                            </div>
                            <div  v-if="plan.price == 0 && plan.is_custom_support==0">
                              <a :href="baseurlfrontend + '/auth/register?pid='+ plan.id+'&type=annual'" class="price_btn">Signup Now</a>
                            </div>
                            <div  v-if="plan.price > 0 && plan.is_custom_support==0">
                              <a :href="baseurlfrontend + '/auth/register?pid='+ plan.id+'&type=annual'" class="price_btn">Signup Now</a>
                            </div>
                            <div  v-if="plan.price == 0 && plan.is_custom_support==1">
                              <a href="javascript:void(0)" onclick="call_demows();" class="price_btn" style="text-transform:inherit;">Schedule a Demo</a>
                            </div>
                            <div  v-if="plan.price == 0 && plan.is_custom_support==0">
                              <p class="text_small">No card required, cancel anytime</p>
                            </div>
                            <button class="mobBtn" @click="mobileTable($event,index+1)">See all
                            features</button>
                            <div class="mob-table mobtable" :id="index+1">
                              <ul>
                                <li v-for="(features in plan.new_plan_feature_value">
                                  <span>{{features.feature_name}}</span>
                                  <span v-if="features.values == 'tick'"><i
                                    class="chkicon"></i></span>
                                  <span
                                    v-if="features.values != 'tick'">{{features.values}}</i></span>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="have-query">
                          <div class="dis-flex">
                            <div class="col-left">
                              <h3>Confused? We are here to help!</h3>
                              <p>Our sales team has helped countless teams get to the next level of productivity.</p>
                            </div>
                            <div class="col-right"><a href="javascript:void(0);" onclick="call_demows();" class="primary_btn1">Talk to sales</a></div>
                          </div>
                        </div>
                        <div class="price-table">
                          <div class="price-row">
                            <div class="columns">
                              <ul class="price aln-left">
                                <li class="price-header">
                                  <h2>Plan Features</h2>
                                  <p>Find the subscription that makes the most sense for you
                                    or your team.
                                  </p>
                                </li>
                                <li v-for="planfeature in plans.features">
                                  {{planfeature.feature_name}}
                                </li>
                              </ul>
                            </div>
                            <div class="columns" v-for="(plan_single,index1) in plans.values">
                              <ul class="price">
                                <li class="price-header">
                                  <h3>{{plan_single.name}} <span class="s-user" v-if="plan_single.name == 'FREE FOREVER'">(For single user only)</span></h3>
                                  <div v-if="plan_single.is_custom_support == 0">
                                    <div v-if="plan_single.price > 0">
                                      <div class="card-plan"
                                        v-if="plan_single.price_type == 'USD Pricing'">
                                        ${{parseFloat((plan_single.annual_price/12)).toFixed(0)}}
                                        <span>/ user / month</span>
                                      </div>
                                      <div div class="card-plan" v-else>
                                        ₹{{parseFloat((plan_single.annual_price/12)).toFixed(0)}}
                                        <span>/ user / month</span>
                                      </div>
                                    </div>
                                    <div v-else>
                                      <div class="card-plan"
                                        v-if="plan_single.price_type == 'USD Pricing'">
                                        $0 <span>forever </span>
                                      </div>
                                      <div v-else>
                                        <div class="card-plan">₹0 <span>forever</span>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div v-else>
                                    <span class="minus">-</span>
                                    <!-- <a href="javascript:void(0)" onclick="call_demows();"
                                      class="primary_btn1">Let's Discuss</a> -->
                                  </div>
                                </li>
                                <li
                                  v-for="features_single in plan_single.new_plan_feature_value">
                                  <span v-if="features_single.values == 'tick'"><i
                                    class="chkicon"></i></span>
                                  <span
                                    v-if="features_single.values != 'tick'">{{features_single.values}}</i></span>
                                </li>
                                <li>
                                  <div  v-if="plan_single.price == 0 && plan_single.is_custom_support==0">
                                    <a :href="baseurlfrontend + '/auth/register?pid='+ plan_single.id+'&type=annual'" class="price_btn">Signup Now</a>
                                  </div>
                                  <div  v-if="plan_single.price > 0 && plan_single.is_custom_support==0">
                                    <a :href="baseurlfrontend + '/auth/register?pid='+ plan_single.id+'&type=annual'" class="price_btn">Signup Now</a>
                                  </div>
                                  <div  v-if="plan_single.price == 0 && plan_single.is_custom_support==1">
                                    <a href="javascript:void(0)" onclick="call_demows();" class="price_btn"style="text-transform:inherit;">Schedule a Demo</a>
                                  </div>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div id="tab2" class="tab-contents">
                        <div class="price-cards">
                          <div class="column" v-for="(plan_monthly,index_monthly) in plans.values">
                            <h3>{{plan_monthly.name}}<span class="s-user" v-if="plan_monthly.name == 'FREE FOREVER'">(For single user only)</span></h3>
                            <p>{{plan_monthly.description}}
                            </p>
                            <div v-if="plan_monthly.is_custom_support == 0">
                              <p class="line-though hidden">₹240 / user / month</p>
                              <div class="amount" v-if="plan_monthly.price > 0">
                                <strong
                                  v-if="plan_monthly.price_type == 'USD Pricing'">${{plan_monthly.price}}</strong>
                                <strong v-else>₹{{plan_monthly.price}}
                                </strong>
                                <sub>/ user / month</sub>
                              </div>
                              <div class="amount" v-else>
                                <strong
                                  v-if="plan_monthly.price_type == 'USD Pricing'">$0</strong>
                                <strong v-else>₹0
                                </strong>
                                <sub>forever</sub>
                              </div>
                            </div>
                            <div v-else>
                              <div class="amount hidden" style="text-align: center;">
                                <strong>-</strong>
                              </div>
                            </div>
                            <div  v-if="plan_monthly.price == 0 && plan_monthly.is_custom_support==0">
                              <a :href="baseurlfrontend + '/auth/register?pid='+ plan_monthly.id+'&type=monthly'" class="price_btn">Signup Now</a>
                            </div>
                            <div  v-if="plan_monthly.price > 0 && plan_monthly.is_custom_support==0">
                              <a :href="baseurlfrontend + '/auth/register?pid='+ plan_monthly.id+'&type=monthly'" class="price_btn">Signup Now</a>
                            </div>
                            <div  v-if="plan_monthly.price == 0 && plan_monthly.is_custom_support==1">
                              <a href="javascript:void(0)" onclick="call_demows();" class="price_btn" style="text-transform:inherit;">Schedule a Demo</a>
                            </div>
                            <div  v-if="plan_monthly.price == 0 && plan_monthly.is_custom_support==0">
                              <p class="text_small">No card required, cancel anytime</p>
                            </div>
                            <button class="mobBtn" @click="mobileTable($event,index_monthly+4)">See
                            all features</button>
                            <div class="mob-table mobtable" :id="index_monthly+4">
                              <ul>
                                <li
                                  v-for="(features_monthly in plan_monthly.new_plan_feature_value">
                                  <span>{{features_monthly.feature_name}}</span>
                                  <span v-if="features_monthly.values == 'tick'"><i
                                    class="chkicon"></i></span>
                                  <span v-if="features_monthly.values != 'tick'">{{features_monthly.values}}</i></span>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="have-query">
                          <div class="dis-flex">
                            <div class="col-left">
                              <h3>Confused? We are here to help!</h3>
                              <p>Our sales team has helped countless teams get to the next level of productivity.</p>
                            </div>
                            <div class="col-right"><a href="#" class="primary_btn1">Talk to sales</a></div>
                          </div>
                        </div>
                        <div class="price-table">
                          <div class="price-row">
                            <div class="columns">
                              <ul class="price aln-left">
                                <li class="price-header">
                                  <h2>Plan Features</h2>
                                  <p>Find the subscription that makes the most sense for you
                                    or your team.
                                  </p>
                                </li>
                                <li v-for="planfeature_monthly in plans.features">
                                  {{planfeature_monthly.feature_name}}
                                </li>
                              </ul>
                            </div>
                            <div class="columns"
                              v-for="(plan_monthly_single,index2) in plans.values">
                              <ul class="price">
                                <li class="price-header">
                                  <h3>{{plan_monthly_single.name}} <span class="s-user" v-if="plan_monthly_single.name == 'FREE FOREVER'">(For single user only)</span></h3>
                                  <div v-if="plan_monthly_single.is_custom_support == 0">
                                    <div v-if="plan_monthly_single.price > 0">
                                      <div class="card-plan"
                                        v-if="plan_monthly_single.price_type == 'USD Pricing'">
                                        ${{plan_monthly_single.price}} <span>/ user /
                                        month</span>
                                      </div>
                                      <div div class="card-plan" v-else>
                                        ₹{{plan_monthly_single.price}} <span>/ user /
                                        month</span>
                                      </div>
                                    </div>
                                    <div v-else>
                                      <div class="card-plan"
                                        v-if="plan_monthly_single.price_type == 'USD Pricing'">
                                        $0 <span>forever </span>
                                      </div>
                                      <div v-else>
                                        <div class="card-plan">₹0 <span>forever</span>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div v-else>
                                    <span class="minus">-</span>
                                    <!-- <a href="javascript:void(0)" onclick="call_demows();"
                                      class="primary_btn1">Let's Discuss</a> -->
                                  </div>
                                </li>
                                <li
                                  v-for="features_monthly_single in plan_monthly_single.new_plan_feature_value">
                                  <span v-if="features_monthly_single.values == 'tick'"><i
                                    class="chkicon"></i></span>
                                  <span
                                    v-if="features_monthly_single.values != 'tick'">{{features_monthly_single.values}}</i></span>
                                </li>
                                <li>
                                  <div  v-if="plan_monthly_single.price == 0 && plan_monthly_single.is_custom_support==0">
                                    <a :href="baseurlfrontend + '/auth/register?pid='+ plan_monthly_single.id+'&type=monthly'" class="price_btn">Signup Now</a>
                                  </div>
                                  <div  v-if="plan_monthly_single.price > 0 && plan_monthly_single.is_custom_support==0">
                                    <a :href="baseurlfrontend + '/auth/register?pid='+ plan_monthly_single.id+'&type=monthly'" class="price_btn">Signup Now</a>
                                  </div>
                                  <div  v-if="plan_monthly_single.price == 0 && plan_monthly_single.is_custom_support==1">
                                    <a href="javascript:void(0)" onclick="call_demows();" class="price_btn" 
                                      style="text-transform:inherit;">Schedule a Demo</a>
                                  </div>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
            </div>
          </div>
        </div>
      </div>

      <section class="start-joureny tryws text_center whitetxt post-animation">

<div class="container">
<div class="top-section">

<h2>Try Workstatus for free</h2>
<p>No credit card required. Cancel anytime.</p>

</div>
            <div class="mt40 btnSc">
              <a href="<?php echo $RegLink; ?>" class="primary_btn1">Start Free Trial</a>
            </div>
         

</div>
</div>
</div>
</section>

  <!-- <section class="partner-sec">
    <div class="container">
      <div class="flex_row">
      <div class="colmTxt">
      <div class="top-section">
      <h6><span class="bg-purple">Pricing Guide</span></h6>
      <h2>Choose the right plan for your team at the right price </h2>
      </div>
      <div class="partner-logo">
      <div class="logoImg">
      <picture>
      <source type="image/webp" srcset="./assests/images/partner-logo1.webp">
      <source type="image/png" srcset="./assests/images/partner-logo1.png">
      <img loading="lazy" src="./assests/images/partner-logo1.png" alt="partner" width="141"
        height="135">
      </picture>
      </div>
      <div class="logoImg">
      <picture>
      <source type="image/webp" srcset="./assests/images/partner-logo2.webp">
      <source type="image/png" srcset="./assests/images/partner-logo2.png">
      <img loading="lazy" src="./assests/images/partner-logo2.png" alt="partner" width="133"
        height="133">
      </picture>
      </div>
      </div>
      </div>
      <div class="productivity">
      <h3>Users report an average
      22% increase in productivity
      </h3>
      <ul class="company-logo">
      <li><i class="icon1"></i></li>
      <li><i class="icon2"></i></li>
      <li><i class="icon3"></i></li>
      <li><i class="icon4"></i></li>
      <li><i class="icon5"></i></li>
      <li><i class="icon6"></i></li>
      </ul>
      </div>
      </div>
      </div>
      </section> -->
      
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
      <h3 itemprop="name">Can I cancel at any time?
      </h3>
      <div class="faq-accordion-content">
      <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
      <div itemprop="text">
      <p>Yes, you can cancel and upgrade or downgrade your plan at any time.
      </p>
      </div>
      </div>
      </div>
      </div>
      <div class="faq-accordion-item-outer" itemscope itemprop="mainEntity"
        itemtype="https://schema.org/Question">
      <h3 itemprop="name">Are there larger plans?</h3>
      <div class="faq-accordion-content">
      <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
      <div itemprop="text">
      <p>Yes there are. We can serve any size team. We have plans for up to 350 users.
      If that's not big enough please contact us and we will set up a plan that is
      right for you.</p>
      </div>
      </div>
      </div>
      </div>
      <div class="faq-accordion-item-outer" itemscope itemprop="mainEntity"
        itemtype="https://schema.org/Question">
      <h3 itemprop="name">How are users counted?</h3>
      <div class="faq-accordion-content">
      <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
      <div itemprop="text">
      <p>Users, managers, and organization owners are considered members and count
      toward the
      total price of your subscription. Client viewers do not count as members.
      </p>
      </div>
      </div>
      </div>
      </div>
      <div class="faq-accordion-item-outer" itemscope itemprop="mainEntity"
        itemtype="https://schema.org/Question">
      <h3 itemprop="name">Can I export my data?</h3>
      <div class="faq-accordion-content">
      <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
      <div itemprop="text">
      <p>Yes. Your data is just that, yours. We provide several export options.
      We make it easy for you to get your data.</p>
      </div>
      </div>
      </div>
      </div>
      <div class="faq-accordion-item-outer" itemscope itemprop="mainEntity"
        itemtype="https://schema.org/Question">
      <h3 itemprop="name"> Can I invite clients?</h3>
      <div class="faq-accordion-content">
      <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
      <div itemprop="text">
      <p>Yes, you can invite as many clients as you want, and you will not be charged
      for them.
      </p>
      </div>
      </div>
      </div>
      </div>
      <div class="faq-accordion-item-outer" itemscope itemprop="mainEntity"
        itemtype="https://schema.org/Question">
      <h3 itemprop="name">Do you track keystrokes?
      </h3>
      <div class="faq-accordion-content">
      <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
      <div itemprop="text">
      <p>We only assign true and false values to record activity. We do not track the
      keys
      being hit.</p>
      </div>
      </div>
      </div>
      </div>
      <div class="faq-accordion-item-outer" itemscope itemprop="mainEntity"
        itemtype="https://schema.org/Question">
      <h3 itemprop="name">How can I contact Workstatus support?
      </h3>
      <div class="faq-accordion-content">
      <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
      <div itemprop="text">
      <p>Please email us at support@Workstatus.com and we will get back to you as soon
      as possible.
      </p>
      </div>
      </div>
      </div>
      </div>
      
      <!-- <div class="faq-accordion-item-outer" itemscope itemprop="mainEntity"
        itemtype="https://schema.org/Question">
      <h3 itemprop="name">Do you have a money back guarantee?
      </h3>
      <div class="faq-accordion-content">
      <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
      <div itemprop="text">
      <p>If you aren't satisfied with your Workstatus account, just let us know within
      the first 60 days and we will be happy to refund your money. We don't offer
      refunds
      (full or partial) after 60 days.</p>
      </div>
      </div>
      </div>
      </div> -->

      <div class="faq-accordion-item-outer" itemscope itemprop="mainEntity"
        itemtype="https://schema.org/Question">
      <h3 itemprop="name">Can I watch a demo?
      </h3>
      <div class="faq-accordion-content">
      <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
      <div itemprop="text">
      <p>Sure! Check out our demo page right here.
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
      <?php require_once 'common/workstatus-journey.php';?>
      </main>
      <?php require_once 'common/footer.php';?>
    </div>
    <script data-cfasync="false" type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/3.2.0-beta.3/vue.cjs.js" defer></script>
    <script data-cfasync="false" type="text/javascript" src="https://unpkg.com/axios/dist/axios.min.js" defer></script>
    <script data-cfasync="false" type="text/javascript" src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js" defer></script>
    <script data-cfasync="false" src="assests/js/intlTelInput.js"></script>
    <script data-cfasync="false" src="assests/js/script.js?version=<?php echo time(); ?>"></script>
    <!-- <script>
      // Define variables
      var tabLabels = document.querySelectorAll("#pricetabs li");
      var tabPanes = document.getElementsByClassName("tab-contents");
      console.log(tabLabels);
      console.log(tabPanes);
      function activateTab(e) {
        console.log('checking code here');
          // e.preventDefault();
      
          // Deactivate all tabs
          tabLabels.forEach(function(label, index) {
              label.classList.remove("active");
          });
          [].forEach.call(tabPanes, function(pane, index) {
              pane.classList.remove("active");
          });
      
          // Activate current tab
          e.target.parentNode.classList.add("active");
          var clickedTab = e.target.getAttribute("href");
          document.querySelector(clickedTab).classList.add("active");
      }
      
      // Apply event listeners
      tabLabels.forEach(function(label, index) {
          label.addEventListener("click", activateTab);
      });
      </script> -->
    <script data-cfasync="false">
      window.addEventListener('DOMContentLoaded', function() {
          var vm = new Vue({
              el: '#dummytest',
              data() {
                  return {
                      loading: true,
                      plans: [],
                      params: [],
                      baseurl: 'https://superadmin.workstatus.io/',
                      baseurlfrontend: 'https://app.workstatus.io'
                  }
              },
              mounted() {
                  getData: {
                      // console.log('inside2');
                      const article = {};
      
                      //console.log(this.params[1]);
                      const response = axios.post(this.baseurl + "api/v1/sa/getplan/list", article)
                          .then(response => {
                              this.loading = false;
                              this.plans = response.data.response.data;
                              console.log(this.plans);
                          });
                  }
      
              },
              methods: {
                  changeTab: function(id, product_name) {
                      var i, tabcontent, tablinks, elements;
                      tabcontent = document.getElementsByClassName("tab-content");
                      for (i = 0; i < tabcontent.length; i++) {
                          tabcontent[i].className = tabcontent[i].className.replace(" is-active", "");
                      }
                      tablinks = document.getElementsByClassName("tab-link");
                      for (i = 0; i < tablinks.length; i++) {
                          tablinks[i].className = tablinks[i].className.replace(" is-active", "");
                      }
                      elements = document.getElementById(product_name).className += " is-active";
                      elements = document.getElementById(id).className += " is-active";
      
                  },
                  legalDocuments: function(evt, documentName, product_name, id, binding_type) {
                      var i, tabcontent, tablinks;
                      tabcontent = document.getElementsByClassName("tabcontent" + id);
                      console.log(tabcontent.length);
                      for (i = 0; i < tabcontent.length; i++) {
                          tabcontent[i].style.display = "none";
                          console.log(tabcontent[i]);
                      }
                      tablinks = document.getElementsByClassName("tablinks" + id);
                      for (i = 0; i < tablinks.length; i++) {
                          tablinks[i].className = tablinks[i].className.replace(" active", "");
                      }
                      document.getElementById(documentName).style.display = "block";
                      console.log(document.getElementById(documentName).style.display);
                      document.getElementById(id + binding_type).className += " active";
                  },
                  changeAnnual: function() {
                      document.getElementById('annualtab').className = "active";
                      document.getElementById('monthlytab').className = '';
                      document.getElementById('tab1').className += ' active';
                      document.getElementById('tab2').classList.remove('active');
                  },
                  changeMonthly: function() {
                      document.getElementById('monthlytab').className = "active";
                      document.getElementById('annualtab').className = '';
                      document.getElementById('tab2').className += ' active';
                      document.getElementById('tab1').classList.remove('active');
                  },
                  mobileTable: function(data, id) {
                      console.log(data.target);
                      console.log(id);
                      data = data.target;
                      data.classList.toggle("active");
                      var element = document.getElementById(id);
                      element.classList.toggle("open");
                  }
              }
          })
      });
    </script>
  </body>
</html>
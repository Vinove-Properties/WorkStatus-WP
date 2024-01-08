<?php
/* 
Template Name: Pricing Template 
Author : Nitin Baluni.
*/
get_header();
global $ws_ctas, $RegLink, $LogLink;
?>
<?php //require_once 'common/inc/config.inc.php'; ?>
      <div id="dummytest">
        <div v-if="loading" id="pre-loader">
        Please wait, while we load the pricing plans for you.
        <span id="pricing-loading-issue" style="display:none; margin-top: 10px;">
          Not able to see pricing, <a href="https://www.workstatus.io/pricing-noapi">Click here</a>
        </span>
        </div>
        <div v-else id="pt-data" style="display:none;">
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
                          <div :class="'column pidx_'+index" v-for="(plan,index) in plans.values">
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
                            <?php if( !is_page('pricing-i') ) : ?>  
                            <div v-if="plan.price == 0 && plan.is_custom_support==0">                            
                            <a :href="baseurlfrontend + '/auth/register?pid='+ plan.id+'&type=annual'" class="price_btn">Signup Now</a>
                            </div>
                            
                            <div  v-if="plan.price > 0 && plan.is_custom_support==0">
                            <a :href="baseurlfrontend + '/auth/register?pid='+ plan.id+'&type=annual'" class="price_btn">Signup Now</a>
                            </div>
                            
                            <div  v-if="plan.price == 0 && plan.is_custom_support==1">
                            <a href="javascript:void(0)" onclick="call_demows();" class="price_btn" style="text-transform:inherit;">Schedule a Demo</a>
                            <span class="tryfree">Try For Free</span>
                            </div>
                            
                            <div  v-if="plan.price == 0 && plan.is_custom_support==0">
                              <p class="text_small">No card required, cancel anytime</p>
                            </div>
                            <?php endif; ?>

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
                            <div :class="'columns pidx_'+index1" v-for="(plan_single,index1) in plans.values">
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
                                <li class="cta-li">
                                  <div  v-if="plan_single.price == 0 && plan_single.is_custom_support==0">
                                    <a :href="baseurlfrontend + '/auth/register?pid='+ plan_single.id+'&type=annual'" class="price_btn">Signup Now</a>
                                  </div>
                                  <div  v-if="plan_single.price > 0 && plan_single.is_custom_support==0">
                                    <a :href="baseurlfrontend + '/auth/register?pid='+ plan_single.id+'&type=annual'" class="price_btn">Signup Now</a>
                                    <span class="tryfree">Try For Free</span>
                                  </div>
                                  <div  v-if="plan_single.price == 0 && plan_single.is_custom_support==1">
                                    <a href="javascript:void(0)" onclick="call_demows();" class="price_btn"style="text-transform:inherit;">Schedule a Demo</a>
                                     <span class="tryfree">Try For Free</span>
                                  </div>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div id="tab2" class="tab-contents">
                        <div class="price-cards">
                          <div :class="'column pidx_'+index_monthly" v-for="(plan_monthly,index_monthly) in plans.values">
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

                            <?php if( !is_page('pricing-i') ) : ?>
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
                            <?php endif; ?>

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
                            <div :class="'columns pidx_'+index2" v-for="(plan_monthly_single,index2) in plans.values">
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
                                <li class="cta-li">
                                  <div v-if="plan_monthly_single.price == 0 && plan_monthly_single.is_custom_support==0">
                                    <a :href="baseurlfrontend + '/auth/register?pid='+ plan_monthly_single.id+'&type=monthly'" class="price_btn">Signup Now</a>
                                  </div>
                                  <div  v-if="plan_monthly_single.price > 0 && plan_monthly_single.is_custom_support==0">
                                    <a :href="baseurlfrontend + '/auth/register?pid='+ plan_monthly_single.id+'&type=monthly'" class="price_btn">Signup Now</a>
                                    <span class="tryfree">Try For Free</span>
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

  <!-- 
  <section class="start-joureny tryws text_center whitetxt post-animation">
    <div class="container">
      <div class="top-section">
      <h2>Try Workstatus for free</h2>
      <p>No credit card required. Cancel anytime.</p>
      </div>
      <div class="mt40 btnSc">
      <?php echo wsDemoCta(); ?>
      </div>
    </div>
  </section> 
  -->

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
      
      <section class="faqsRow wfull for-heading-center" style="padding-top:0;">
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
                    right for you.
                  </p>
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
                    We make it easy for you to get your data.
                  </p>
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
                    being hit.
                  </p>
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
                  <p>Please email us at <a href="mailto:hello@workstatus.io">hello@workstatus.io</a> and we will get back to you as soon
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
                  <p class="dmo-lnk">Sure! Check out our <a href="https://www.workstatus.io/demo">demo</a> right here.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="faq-accordion-item-outer" itemscope itemprop="mainEntity"
            itemtype="https://schema.org/Question">
            <h3 itemprop="name">How Workstatus ensures data security?</h3>
            <div class="faq-accordion-content">
              <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                <div itemprop="text">
                  <p>These certifications assure clients that Workstatus has the expertise to handle their data center needs effectively and securely.</p>
                  <p>Some common data center certifications of Workstatus include:</p>
                  <ul>
                    <li>ISO 9001 Quality management</li>
                    <li>ISO 14001 Environmental management</li>
                    <li>ISO 22301 Security and resilience</li>
                    <li>ISO 27001 Information security management</li>
                    <li>ISO 50001 Energy management</li>
                    <li>SOC 2 Type II Data Security and Privacy</li>
                    <li>PCI-DSS Information security</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="faq-accordion-item-outer" itemscope itemprop="mainEntity"
            itemtype="https://schema.org/Question">
            <h3 itemprop="name">What are the company certifications of Workstatus?</h3>
            <div class="faq-accordion-content">
              <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                <div itemprop="text">
                  <p>The company certifications of Workstatus include:</p>
                  <ul>
                    <li>ISO 27001 Information security management</li>
                    <li>ISO 9001:2015 Quality Management System</li>
                  </ul>
                  <p>These certifications demonstrate our commitment to data security and delivering high-quality services to our clients.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="faq-accordion-item-outer" itemscope itemprop="mainEntity"
            itemtype="https://schema.org/Question">
            <h3 itemprop="name">How does Workstatus address privacy concerns?</h3>
            <div class="faq-accordion-content">
              <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                <div itemprop="text">
                  <p>Protecting employee privacy is one of Workstatus’ core principles. Employees have complete control over when they want to track time, and they receive notifications when time tracking starts and when Workstatus takes screenshots.</p>
                  <p>Furthermore, employees have full access to their tracked data. If there is any accidental tracking of non-work-related tasks, employees can delete the data, including screenshots, directly from their activity dashboard without requiring admin permissions.</p>
                  <p>Transparency, access, and control over personal data are fundamental values at Workstatus. To learn more about how tracking works with Workstatus, we invite you to explore our detailed documentation.</p>
                  <p><strong>Employee monitoring laws in India:</strong></p>
                  <p>In India, employee monitoring is generally allowed, but it is important to comply with applicable laws and regulations. Employers should ensure they have a clear monitoring policy in place and obtain consent from employees. Employees should have access to their collected data, and monitoring should be done for appropriate purposes.</p>
                  <p><strong>Employee monitoring laws in the Middle East:</strong></p>
                  <p>Employee monitoring laws in the Middle East can vary by country. It is important for employers to familiarize themselves with local labor laws and regulations. Generally, employers should establish clear monitoring policies, obtain employee consent, and ensure that monitoring is done for appropriate purposes. Employees should have access to their collected data.</p>
                  <p><strong>Employee monitoring laws in the United States</strong></p>
                  <p>Employee monitoring is generally legal in the United States, but it requires employee consent. The Electronic Communications Privacy Act of 1986 cover monitoring in the workplace under 18 U.S. Code § 2511:</p>
                  <p>“(iv) such use or endeavor to use (A) takes place on the premises of any business or other commercial establishment, the operations of which affect interstate or foreign commerce; or (B) obtains or is for the purpose of obtaining information relating to the operations of any business or other commercial establishment the operations of which affect interstate or foreign commerce.”</p>
                  <p>While federal laws do not require businesses to obtain permission to monitor employees, the specific regulations depend on the state in which you operate.</p>
                  <p>For example, in New York, businesses are required to provide written notice to employees upon hiring and annually stating that monitoring will take place (NY A1920A). The method of monitoring should also be clearly specified.</p>
                  <p>Workstatus does not violate any laws in this scenario or in other states with similar guidelines to New York. Only team members have control over when they track their work, and they must provide consent and grant permissions when downloading the app.</p>
                  <p>However, we advise consulting with legal counsel for any specific questions or concerns you may have.</p>
                  <p><strong>Monitoring laws in the European Union (EU)</strong></p>
                  <p>Monitoring laws in the EU are primarily governed by the General Data Protection Regulation (GDPR). Monitoring is permitted as long as employee consent is obtained and users have full access to their data. Workstatus never tracks activity without your knowledge, and you have complete control over your data. To learn more, please refer to our GDPR compliance details.</p>
                  <p><strong>Monitoring laws in Canada</strong></p>
                  <p>In Canada, businesses are allowed to record their employees’ work as long as they establish a clear monitoring policy and obtain consent. Employees have the right to refuse to monitor and should have full access to their collected data, including tracked time, screenshots, and activity reports. According to section 5(3) of the Personal Information Protection and Electronic Documents Act (PIPEDA):</p>
                  <p>“An organization may collect, use or disclose personal information only for purposes that a reasonable person would consider appropriate in the circumstances.”</p>
                  <p>Workstatus complies with all applicable laws and guidelines in this regard.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
      <?php require_once get_template_directory() . '/common/workstatus-journey.php'; ?>
      </main>
    </div>
    <script data-cfasync="false" type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/3.2.0-beta.3/vue.cjs.js" defer></script>
    <script data-cfasync="false" type="text/javascript" src="https://unpkg.com/axios/dist/axios.min.js" defer></script>
    <script data-cfasync="false" type="text/javascript" src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js" defer></script>
    <script data-cfasync="false">
      if(document.readyState !== 'loading') {
        console.log('document is already ready, just execute code here');
        initWS_pricing();
        pricingIssueCTA();
      } else {
      document.addEventListener('DOMContentLoaded', function () {
          console.log('document was not ready, place code here');
          initWS_pricing();
          pricingIssueCTA();
      });
      }
      // window.addEventListener('DOMContentLoaded', function() {                  
      // });
      function pricingIssueCTA(){
        setTimeout(function(){
          document.getElementById("pricing-loading-issue").style.display = "block";
        }, 4000);
      }
      function initWS_pricing(){

        var vm = new Vue({
              el: '#dummytest',
              data() {
                  return {
                  loading: true,
                  plans: [],
                  params: [],
                  baseurl: 'https://superadmin.workstatus.io/',
                  baseurlfrontend: '<?php echo (isBetaVersion()) ? 'app.staging.workstatus.io' : 'https://app.workstatus.io'; ?>'
                      //baseurl: 'https://superadmin.newstaging.workstatus.io/',
                      //baseurlfrontend: 'https://app.newstaging.workstatus.io'
                  }
              },
              mounted() {
                  getData: {
                      // console.log('inside2');
                      //const article = {};
                      <?php 
                      if( is_page('pricing-i') ){ ?>
                      const article = {glocation :'us'};  
                      <?php }else{ ?>
                      const article = {};
                      <?php } 

                      if( isset($_SERVER['REQUEST_URI']) && (stripos($_SERVER['REQUEST_URI'], "pricing-noapi") !== false) ){
                      ?>
                      const wsBaseUrl = "https://www.workstatus.io/ws-pricing.json";
                      <?php }else{ ?>
                      const wsBaseUrl = this.baseurl + "api/v1/sa/getplan/list";
                      <?php } ?>
      
                      //console.log(this.params[1]);
                      //const response = axios.post(this.baseurl + "api/v1/sa/getplan/list", article)
                      
                      const response = axios.post(wsBaseUrl, article)
                          .then(response => {
                              this.loading = false;
                              this.plans = response.data.response.data;
                              console.log(this.plans);
                              console.log("Test 123");
                              setTimeout(function(){
                                document.getElementById("pt-data").style.display = "block";
                              }, 10);
                              
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
      }
    </script>
    <style type="text/css">
      p.dmo-lnk a{color:#4461d7;}
      p.dmo-lnk a:hover{color: #2D2D2D;}
    </style>
<?php get_footer(); ?>
<?php
/* 
Template Name: Data Retention Template 
Author : Nitin Baluni
*/
get_header();
global $ws_ctas, $RegLink, $LogLink, $post;
?>
<main class="site__content">
<section class="hero-banner post-animation">
<div class="bannerwrap">
<div class="container">
<div class="inner-wrap">
<h1>Data Retention Comparison</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
<div class="mt40"></div>
<div class="actionBtn">
<div>
  <a href="javascript:void(0)" onclick="call_demows();" class="primary_btn2">Talk To Sales</a>
</div>
</div>
</div>
</div>
</div>
</section>
<section class="userguide">
<div class="container">
<div class="buyers-guide-section" id="div-buyer-guide">
<div class="buyers-guide">
<div class="buyers-guide-question" id="buyers-guide-question">
<h3>Table of Content</h3>
<ul class="question-list">
<li><a href="#ans_1" class="active">Data Retention Comparison</a>
</li>
<li><a href="#ans_2" class="">Workstatus Data Retention Add-on</a>
</li>
<li><a href="#ans_3" class="">Add-ons Pricing Table</a>
</li>
<li><a href="#ans_4" class="">What Will Happen After Your Current Plan Has Expired?</a></li>
<li><a href="#ans_5" class="">FAQs</a>
</li>
</ul>
</div>
<div class="buyers-guide-answer-part" id="buyers-guide-answer-part">
<div class="buyers-guide-answer ans_1" id="ans_1">
<h3 class="guide-question">Data Retention Comparison
</h3>
<div class="guide-answer">
   <p>Workstatus has different data retention policies for its free and paid plans. The time ranges mentioned below refer to the full history of data, not a rolling data window. For example, if you're on a free plan, your timesheet logs from July will be available until the end of August (1 full month of data retention).
   </p>
   <p>This approach of retaining full historical data is beneficial because it lets you view the complete time range (e.g., an entire month from start to end) rather than periods that change every day. With a rolling monthly period, on July 10th, you could only access data from June 10th onwards.</p>
</div>
</div>
<div class="buyers-guide-answer ans_2" id="ans_2">
<h3 class="guide-question">Workstatus Data Retention Add-on
</h3>
<div class="guide-answer">
   <p>You can choose to keep your data for a longer period by purchasing the Workstatus Data Retention add-on.
   </p>
   <p>The following table shows how long different types of data are retained for free plans, paid plans, and when you have the Data Retention add-on:</p>
   <table class="data-table">
      <tr>
         <th>Module</th>
         <th>Free Forever <br>Plan</th>
         <th>Premium Plan <br>(Active)</th>
         <th>Add-on<br><small>(Will be effective only until Plan<br> is in Active state)</small></th>
      </tr>
      <tr>
         <td>Timesheet Logs</td>
         <td>1 Month</td>
         <td>6 Month</td>
         <td>3 Years</td>
      </tr>
      <tr>
         <td>Timesheet Logs</td>
         <td>1 Month</td>
         <td>6 Month</td>
         <td>3 Years</td>
      </tr>
      <tr>
         <td>Screenshots (will be deleted from Workstatus bucket only)</td>
         <td>2 Weeks</td>
         <td>1 Month Unlimited (Private Bucket)</td>
         <td>1 Year Unlimited (Private Bucket)</td>
      </tr>
      <tr>
         <td>Timesheet Logs</td>
         <td>1 Month</td>
         <td>6 Month</td>
         <td>3 Years</td>
      </tr>
   </table>
   <blockquote>
      *If any data gets deleted due to policy, then getting the AddOn active will have no effect on deleted data. Data can't be restored once deleted.
   </blockquote>
</div>
</div>
<div class="buyers-guide-answer ans_3" id="ans_3">
<h3 class="guide-question">Add-ons Pricing Table
</h3>
<div class="guide-answer">
   <p>Get additional features and services through paid add-ons to enhance the core time tracking capabilities. These optional add-ons provide extra functionality to meet specific business needs. 
   </p>
   <p>The pricing for these add-ons is simple and listed in an easy-to-understand table format.</p>
   <table class="data-table">
      <tr>
         <th>Plans</th>
         <th>Pricing (in INR)</th>
         <th>Pricing (in USD)</th>
      </tr>
      <tr>
         <td>Monthly</td>
         <td><strong>100 INR </strong/>User/ Month</td>
         <td><strong>2.0 USD</strong> User/Month</td>
      </tr>
      <tr>
         <td>Yearly</td>
         <td><strong>80 INR </strong/>User/ Month</td>
         <td><strong>1.5 USD </strong>User/Month</td>
      </tr>
   </table>
</div>
</div>
<div class="buyers-guide-answer ans_4" id="ans_4">
<h3 class="guide-question">What Will Happen After Your Current Plan Has Expired?
</h3>
<div class="guide-answer">
   <p>When your current Workstatus subscription plan expires, keep a few things in mind. Your account and data won't be deleted right away, but some features and access may be limited or restricted. 
   </p>
   <p>It's important to understand the steps involved to ensure a smooth transition.</p>
   <div class="process-step">
      <div class="step-sec dis-flex">
         <div class="step-num">
            01
         </div>
         <div class="step-desc">
            <h4>Expired PREMIUM and Free Trial plans</h4>
            <p>All the data will be deleted after 2 months of expiry, including screenshots and database.</p>
         </div>
      </div>
      <div class="step-sec dis-flex">
         <div class="step-num">
            02
         </div>
         <div class="step-desc">
            <h4>There should be the following email notifications for info regarding data that will be deleted - should be sent to the Owner & Org manager(s)</h4>
            <ul>
               <li>When the account is expired</li>
               <li>After 7 days of expiry</li>
               <li>After <strong>30 </strong> days of expiry</li>
               <li>After 59 days of expiry <a href="">(this will be the last email)</a></li>
            </ul>
         </div>
      </div>
   </div>
</div>
</div>
<div class="buyers-guide-answer ans_5" id="ans_5">
<h3 class="guide-question">FAQs
</h3>
<div class="guide-answer">
   <p>When your current Workstatus subscription plan expires, keep a few things in mind. Your account and data won't be deleted right away, but some features and access may be limited or restricted.
   </p>
   <p>It's important to understand the steps involved to ensure a smooth transition.</p>
   <div class="faqsRow wfull for-heading-center">


<div class="flex_row">
<div>
<div class="column">
<div class="faq-accordion-item-outer open">
<h3 itemprop="name">What will happen to Custom Plans?
</h3>
<div class="faq-accordion-content">
<div>
<div>
<p>If you have a custom plan tailored to your specific needs, the same premium plan guidelines will apply when it comes to data retention and feature access after expiration. Workstatus makes no exceptions based on whether you're on a standard or customized plan. 
</p>
<p>The retention periods and feature availability will follow the same policies outlined for premium paid plans. This ensures consistency and fairness across all Workstatus customers, regardless of their chosen plan type.</p>
</div>
</div>
</div>
</div>
<div class="faq-accordion-item-outer">
<h3 itemprop="name">What will happen to Custom Plans?
</h3>
<div class="faq-accordion-content">
<div>
<div>
<p>If you have a custom plan tailored to your specific needs, the same premium plan guidelines will apply when it comes to data retention and feature access after expiration. Workstatus makes no exceptions based on whether you're on a standard or customized plan. 
</p>
<p></p>
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
</div>
</div>
</div>
</div>
</section>

<section class="wsMobile whitetxt">
<?php require_once get_template_directory() . '/common/workstatus-device.php'; ?>
</section>
<?php require_once get_template_directory() . '/common/workstatus-journey-straight.php'; ?>
</main>
<?php get_footer(); ?>
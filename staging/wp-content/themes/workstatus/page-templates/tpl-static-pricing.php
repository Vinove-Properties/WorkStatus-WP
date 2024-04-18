<?php
/* 
Template Name: Pricing - Static Template 
Author : Nitin Baluni.
*/
get_header();
global $ws_ctas, $RegLink, $LogLink;
?>
<div id="dummytest">
<div v-if="loading" id="pre-loader">
Please wait, while we load the pricing plans for you.
<span id="pricing-loading-issue" style="display:none; margin-top: 10px;">
  Not able to see pricing, <a href="https://www.workstatus.io/pricing-noapi">Click here</a>
</span>
</div>
</div>      
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
<script data-cfasync="false">
  window.addEventListener("load", function (){
    const pricingData = {
    "IN": {
    "basic":{"amount":4, "total":4, "link":"#", "insight":2, "screenshot":3, "tasks":3, "data":2, "location":4, "app":3, "cloud": 3},
    "pro":{"amount":4, "total":4, "link":"#", "insight":2, "screenshot":3, "tasks":3, "data":2, "location":4, "app":3, "cloud": 3},
    "buss":{"amount":4, "total":4, "link":"#", "insight":2, "screenshot":3, "tasks":3, "data":2, "location":4, "app":3, "cloud": 3},
    "ent":{"amount":4, "total":4, "link":"#", "insight":2, "screenshot":3, "tasks":3, "data":2, "location":4, "app":3, "cloud": 3}
    },
    "default":{
    "basic":{"amount":4, "total":4, "link":"#", "insight":2, "screenshot":3, "tasks":3, "data":2, "location":4, "app":3, "cloud": 3},
    "pro":{"amount":4, "total":4, "link":"#", "insight":2, "screenshot":3, "tasks":3, "data":2, "location":4, "app":3, "cloud": 3},
    "buss":{"amount":4, "total":4, "link":"#", "insight":2, "screenshot":3, "tasks":3, "data":2, "location":4, "app":3, "cloud": 3},
    "ent":{"amount":4, "total":4, "link":"#", "insight":2, "screenshot":3, "tasks":3, "data":2, "location":4, "app":3, "cloud": 3}
    }
    };
    var xhttp = new XMLHttpRequest();
    xhttp.open("GET", wsObj.ipinfo, true); 
    xhttp.setRequestHeader("Content-Type", "application/json");
    xhttp.onreadystatechange = function() {
        /*if (this.readyState === XMLHttpRequest.LOADING) {
          console.log("Request is in progress...");
        }else */
        if( (this.readyState == 4) && (this.status == 200) ){
          let response = JSON.parse(this.responseText);
          if( pricingData.hasOwnProperty( response.country ) ){
            console.log( pricingData[response.country] );
          }
        }
    }
    xhttp.send();
  });

  /*
  if(document.readyState !== 'loading') {
      console.log('document is already ready, just execute code here');
  }else{
    document.addEventListener('DOMContentLoaded', function () {
      console.log('document was not ready, place code here');
    });
  }
  */
  /*function pricingIssueCTA(){
    setTimeout(function(){
      document.getElementById("pricing-loading-issue").style.display = "block";
    }, 4000);
  }*/
</script>    
<?php get_footer(); ?>
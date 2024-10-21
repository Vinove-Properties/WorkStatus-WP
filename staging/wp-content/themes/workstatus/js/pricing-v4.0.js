const pricingTabs = document.querySelectorAll("#pricing-Tabs li");
const tabPanesPc = document.getElementsByClassName("tab-contents");
function pricingActiveTaber(e) {
    e.preventDefault();
    pricingTabs.forEach(function(label) {
        label.classList.remove("active");
    });

    Array.prototype.forEach.call(tabPanesPc, function(pane) {
        pane.classList.remove("active");
    });

    if (e.target === this || this.contains(e.target)) {
        var clickedTab = this.getAttribute("data-tab");
        this.classList.add("active");
        var activePane = document.querySelector(clickedTab);
        
        if (activePane) {
            activePane.classList.add("active");
        } else {
            console.error("No element found for the selector: " + clickedTab);
        }
    }
}

pricingTabs.forEach(function(tab){
  tab.addEventListener("click", pricingActiveTaber);
});

const laCountries   = [ "AR", "BO", "BR", "CL", "CO", "CR", "CU", "DO", "EC", "SV", "GT", "HN", "MX", "NI", "PA", "PY", "PE", "UY", "VE" ];
const eurCountries  = [ "AT", "BE", "BG", "HR", "CY", "CZ", "DK", "EE", "FI", "FR", "DE", "GR", "HU", "IE", "IT", "LV", "LT", "LU", "MT", "NL", "PL", "PT", "RO", "SK", "SI", "ES", "SE" ];
const afCountries   = [ "DZ", "AO", "BJ", "BW", "BF", "BI", "CV", "CM", "CF", "TD", "KM", "CD", "CG", "DJ", "EG", "GQ", "ER", "SZ", "ET", "GA", "GM", "GH", "GN", "GW", "CI", "KE", "LS", "LR", "LY", "MG", "MW", "ML", "MR", "MU", "MA", "MZ", "NA", "NE", "NG", "RW", "ST", "SN", "SC", "SL", "SO", "ZA", "SS", "SD", "TZ", "TG", "TN", "UG", "ZM", "ZW" ];

function getwsPlanurl(plan_id = 0, type = "annual"){
  return 'https://'+wsObj.app_url+'/auth/register?pid='+plan_id+'&type='+type;
}

const WS_PLAN_ID_BKP = {
  "local" : {"attendance":5001, "product" : 466, "project" : 460, "ent" : 461, "free" : 137},
  "international" : {"attendance":5002, "product" : 467, "project" : 463, "ent" : 464, "free" : 138}
}

const WS_PLAN_ID = {
  "local" : {"attendance":5001, "product" : 466, "project" : 460, "ent" : 461, "free" : 137},
  "international" : {"attendance":5002, "product" : 467, "project" : 463, "ent" : 464, "free" : 138}
}

const pricingData = {
"IN": {
  "productivity":{
    'basic':{'yearly':{"amount":199}, 'monthly':{"amount":299}},
    'pro':{'yearly':{"amount":299}, 'monthly':{"amount":399}}  
  },
  "project":{
    'basic':{'yearly':{"amount":90}, 'monthly':{"amount":110}},
    'pro':{'yearly':{"amount":4600}, 'monthly':{"amount":5400}}
  },
  "time":{
    'basic':{'yearly':{"amount":48}, 'monthly':{"amount":60}},
    'pro':{'yearly':{"amount":2400}, 'monthly':{"amount":3000}}
  },
  "attendance":{
    'basic':{'yearly':{"amount":48}, 'monthly':{"amount":60}},
    'pro':{'yearly':{"amount":2400}, 'monthly':{"amount":3000}}
  },
  'meta':{"currency":'₹', "location":69, "pm":99, "insights":99}
},
"INTR": {
  "productivity":{
    'basic':{'yearly':{"amount":2.99}, 'monthly':{"amount":3.99}},
    'pro':{'yearly':{"amount":3.99}, 'monthly':{"amount":4.99}}  
  },
  "project":{
    'basic':{'yearly':{"amount":2.40}, 'monthly':{"amount":3}},
    'pro':{'yearly':{"amount":120}, 'monthly':{"amount":150}}
  },
  "time":{
    'basic':{'yearly':{"amount":1.6}, 'monthly':{"amount":2}},
    'pro':{'yearly':{"amount":80}, 'monthly':{"amount":100}}
  },
  "attendance":{
    'basic':{'yearly':{"amount":1.6}, 'monthly':{"amount":2}},
    'pro':{'yearly':{"amount":80}, 'monthly':{"amount":100}}
  },
  'meta':{"currency":'$', "location":1, "pm":2, "insights":2}
}

/*
,
"LA": {
  "attendance":{'yearly':{"amount":1}, 'monthly':{"amount":1.50}},
  "product":{'yearly':{"amount":2.99}, 'monthly':{"amount":3.99}},
  "project":{'yearly':{"amount":3.99}, 'monthly':{"amount":4.99}},  
  'meta':{"currency":'$', "location":0.69, "pm":1.49, "insights":1.49}  
},
"GB": {
  "attendance":{'yearly':{"amount":0.80}, 'monthly':{"amount":1.20}},
  "product":{'yearly':{"amount":2.49}, 'monthly':{"amount":3.49}},
  "project":{'yearly':{"amount":3.99}, 'monthly':{"amount":5.49}},  
  'meta':{"currency":'£', "location":0.9, "pm":1.9, "insights":1.9}
},
"US": {
  "attendance":{'yearly':{"amount":1}, 'monthly':{"amount":1.50}},
  "product":{'yearly':{"amount":4}, 'monthly':{"amount":5}},
  "project":{'yearly':{"amount":5.5}, 'monthly':{"amount":7}},  
  'meta':{"currency":'$', "location":1, "pm":2, "insights":2}
},
"AU": {
  "attendance":{'yearly':{"amount":1.50}, 'monthly':{"amount":2.25}},
  "product":{'yearly':{"amount":5.99}, 'monthly':{"amount":7.49}},
  "project":{'yearly':{"amount":7.99}, 'monthly':{"amount":10.49}},
  'meta':{"currency":'AU$', "location":1.49, "pm":3.09, "insights":3.09}
},
"SA": {
  "attendance":{'yearly':{"amount":3.75}, 'monthly':{"amount":5.63}},
  "product":{'yearly':{"amount":14.49}, 'monthly':{"amount":18.49}},
  "project":{'yearly':{"amount":19.99}, 'monthly':{"amount":25.99}},  
  'meta':{"currency":'SAR', "location":3.79, "pm":7.49, "insights":7.49}
},
"AE": {
  "attendance":{'yearly':{"amount":3.67}, 'monthly':{"amount":5.50}},
  "product":{'yearly':{"amount":13.99}, 'monthly':{"amount":17.99}},
  "project":{'yearly':{"amount":19.99}, 'monthly':{"amount":24.99}},  
  'meta':{"currency":'AE', "location":3.69, "pm":7.29, "insights":7.29}
},
"CA": {
  "attendance":{'yearly':{"amount":1.36}, 'monthly':{"amount":2.00}},
  "product":{'yearly':{"amount":4.99}, 'monthly':{"amount":6.49}},
  "project":{'yearly':{"amount":7.49}, 'monthly':{"amount":9.49}},  
  'meta':{"currency":'CA$', "location":1.39, "pm":2.69, "insights":2.69}
},
"ZA": {
  "attendance":{'yearly':{"amount":17.98}, 'monthly':{"amount":26.98}},
  "product":{'yearly':{"amount":59.00}, 'monthly':{"amount":79.00}},
  "project":{'yearly':{"amount":89.00}, 'monthly':{"amount":119.00}},  
  'meta':{"currency":'ZAR', "location":11.39, "pm":22.89, "insights":22.89}
},
"EUR": {
  "attendance":{'yearly':{"amount":0.90}, 'monthly':{"amount":1.36}},
  "product":{'yearly':{"amount":3.49}, 'monthly':{"amount":4.49}},
  "project":{'yearly':{"amount":4.99}, 'monthly':{"amount":6.49}},  
  'meta':{"currency":'€', "location":0.99, "pm":1.89, "insights":1.89}
}
*/
};

function setPlanPricing( conCode, type = 'yearly', isAjax = false ){
    conCode = "IN"
    const locInput = document.getElementById("current-geo");
    if( laCountries.includes( conCode ) ){
      conCode = "LA";
    }else if( eurCountries.includes( conCode ) ){
      conCode = "EUR";
    }else if( afCountries.includes( conCode ) ){
      conCode = "ZA";
    }

    if( conCode === "IN" ){
      document.body.classList.add("geo-india");
    }

    if( !pricingData.hasOwnProperty(conCode) ){
      conCode = "US";      
    }

    locInput.value = conCode;

    if(  isAjax === true){
      [...document.querySelectorAll('.pc-option')].forEach(function(elm) {
      
      if( elm.getAttribute( 'data-cod' ) === conCode ){
        let iSrc        = elm.querySelectorAll("img")[0].getAttribute('src');
        let pcCountry   = document.getElementById("pc-country");
        document.getElementById("pflag-icon").setAttribute('src', iSrc);
        pcCountry.innerText = elm.getAttribute('data-country');      
        elm.classList.add("active");
      }
      });  
    }
    

    let plans   = (!pricingData.hasOwnProperty(conCode)) ? pricingData['US'] : pricingData[conCode];
    //plans.free   = '';
    var currency    = plans['meta']['currency'];

    let elmLocation = document.getElementById("pl-location");
    let elmPm       = document.getElementById("pl-pm");
    let elmInsights = document.getElementById("pl-insights");

    elmLocation.innerHTML    = currency + plans['meta']['location'];
    elmPm.innerHTML         = currency + plans['meta']['pm'];    
    elmInsights.innerHTML   = currency + plans['meta']['insights'];
    
    
    var isLocal           = ( conCode === "IN" ) ? "local" : "international";
    var plan_meta         =  WS_PLAN_ID[isLocal];


    [...document.querySelectorAll('.free-zero')].forEach(function(elm){
      elm.innerHTML = currency+"0";
    });

    for (const key in plans){
    if( plans.hasOwnProperty(key) ){      
      if( key !== "currency" ){
        const value     = plans[key];
        let elmBasic    = document.getElementById("pl-"+key+"-basic");
        if( elmBasic ){
          elmBasic.innerHTML = currency + value['basic'][type].amount +'<small class="max-price">'+value['basic']['monthly'].amount+'</small>';
        }
        let elmPro      = document.getElementById("pl-"+key+"-pro");
        if( elmPro ){
          elmPro.innerHTML = currency + value['pro'][type].amount +'<small class="max-price">'+value['pro']['monthly'].amount+'</small>';
        }        
        
        // const value     = plans[key];
        // let elmPricing  = document.getElementById("pl-"+key);
        // let elmTotal    = document.getElementById("pl-"+key+"-total");
        // let planBtn     = document.getElementById("ws-plan-"+key);
        // if( planBtn ){
        //   let pType = ( type == "yearly" ) ? "annual" : "monthly";
        //   planBtn.setAttribute("href", getwsPlanurl( plan_meta[key], pType ) );  
        //   let coPlanBtn     = document.getElementById("ws-coplan-"+key);
        //   if( coPlanBtn ){
        //     coPlanBtn.setAttribute("href", getwsPlanurl( plan_meta[key], pType ) );    
        //   }
        // }
        

        // if( elmPricing ){
        //   elmPricing.innerHTML = currency + value[type].amount;  
        // }
        // if( elmTotal ){
        //   let totalAmt = (Math.round(((value.yearly.amount * 12) + Number.EPSILON) * 100) / 100);
        //   elmTotal.innerHTML = currency + totalAmt;  
        // }
      }                  
    }
  }
}

if( document.body.classList.contains('page-template-tpl-static-pricing')  || document.body.classList.contains('page-template-tpl-pricing-v4-0') ){
  let planBtn = document.querySelector('.comparison-outer .plan-btn');
  let columnBox = document.querySelector('.comparison-panel');
  planBtn.addEventListener('click', (elm)=>{
      planBtn.classList.toggle('rotate');
      columnBox.classList.toggle('toggle');

      if( elm.target.classList.contains("rotate") ){
        document.getElementById("comp-table-sticky").classList.remove("sticky");
      }
  });

}

var $window = window,
compTable = document.getElementById("div-comparison");
if (compTable) {
var stickytable = document.getElementById("comp-table-sticky"),
    tableRow = document.getElementById("comp-row");
window.addEventListener("scroll", function () {
    if (screen.width > 991) {
        var e = tableRow.getBoundingClientRect().top + window.scrollY;
        document.documentElement.scrollTop > e - 10 ? stickytable.classList.add("sticky") : stickytable.classList.remove("sticky");
        var t = tableRow.offsetHeight;
        t += parseInt(window.getComputedStyle(tableRow).getPropertyValue("margin-top"));
        var n = e + (t += parseInt(window.getComputedStyle(tableRow).getPropertyValue("margin-bottom")));
        document.documentElement.scrollTop + (stickytable.offsetHeight + 200) > n ? stickytable.classList.add("btomfixed") : stickytable.classList.remove("btomfixed");
    } else stickytable.classList.remove("sticky"), stickytable.classList.remove("btomfixed");
});
}
    
const showDivButtons = document.querySelectorAll('.price-accordion');
const hiddenDivs = document.querySelectorAll('.price-wrapper');

showDivButtons.forEach((button, index) => {
  button.addEventListener('click', () => {  
      hiddenDivs[index].classList.toggle('is-visible');
  });
});


const pricingFltrt = document.getElementById("inv-price-fltr");
if( pricingFltrt ){
    let index = 1;
    const fltrOn = (listener, query, fn) => {
        document.querySelectorAll(query).forEach(item => {
        item.addEventListener(listener, el => {
            fn(el);
        })
        })
    }

    fltrOn('click', '.select-list .pc-option', item => {
      
      [...document.querySelectorAll('.pc-option')].forEach(function(elm){
      elm.classList.remove("active");
      });      
      item.target.classList.add("active");

      let prSlider = document.getElementById('ps-switcher');
      let planType = prSlider.checked ? "monthly" : "yearly";
      setPlanPricing( item.target.getAttribute('data-cod'), planType );

      let iSrc        = item.target.querySelectorAll("img")[0].getAttribute('src');
      let pcCountry   = document.getElementById("pc-country");
      document.getElementById("pflag-icon").setAttribute('src', iSrc);
      pcCountry.innerText = item.target.innerText;
      item.target.parentElement.classList.remove('toggle');

      let parent = item.target.closest('.select-list').children[0];
      parent.classList.remove("active");
      
    })
}

var prSlider = document.getElementById('ps-switcher');
  if( prSlider ){
    prSlider.addEventListener('change', (event) => {
    var inputLoc = document.getElementById("current-geo");
    if(event.currentTarget.checked){
      document.body.classList.add("ps-monthly");
      setPlanPricing( inputLoc.value, "monthly" );
    }else{
      document.body.classList.remove("ps-monthly");
      setPlanPricing( inputLoc.value, "yearly" );
    }
  });
}



const ws_SelectOn = (listener, query, fn) => {
  document.querySelectorAll(query).forEach(item => {
    item.addEventListener(listener, el => {
      fn(el);
    })
  });
}

let pcSelectIndex = 1;
const clickOutsideHandler = (event) => {
  // Check if the clicked element is not part of the popup or the button
  const popups = document.querySelectorAll('.pcselectBtn + .toggle');
  const buttons = document.querySelectorAll('.pcselectBtn');
  
  let clickedInsidePopup = false;
  popups.forEach(popup => {
    if (popup.contains(event.target)) {
      clickedInsidePopup = true;
    }
  });

  let clickedOnButton = false;
  buttons.forEach(button => {
    if (button.contains(event.target)) {
      clickedOnButton = true;
    }
  });

  // If clicked outside popup and not on the button, close the popup
  if (!clickedInsidePopup && !clickedOnButton) {
    document.querySelectorAll('.toggle').forEach(popup => {
      popup.classList.remove('toggle');
    });
    document.querySelectorAll('.pcselectBtn.active').forEach(button => {
      button.classList.remove('active');
    });
    document.body.removeEventListener("click", clickOutsideHandler);
  }
};

ws_SelectOn('click', '.pcselectBtn', item => {
  const next = item.target.nextElementSibling;
  next.classList.toggle('toggle');
  next.style.zIndex = pcSelectIndex++;
  item.target.classList.toggle('active');
  document.body.addEventListener("click", clickOutsideHandler);
});

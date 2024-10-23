const pricingTabs = document.querySelectorAll("#pricing-Tabs li");
const tabPanesPc = document.getElementsByClassName("tab-contents");
function pricingActiveTaber(e){        
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
    if( !e.target.classList.contains("pm-clm") ){
      document.getElementById("comp-plan-cont").style.display = "none";
      document.getElementById("ws-pr-addon").style.display = "none";
    }else{
      document.getElementById("comp-plan-cont").style.display = "block";
      document.getElementById("ws-pr-addon").style.display = "block";
    }

    // if( !e.target.classList.contains("pro-clm") ){
    //   document.getElementById("ws-pr-addon").style.display = "none";
    // }else{
    //   document.getElementById("ws-pr-addon").style.display = "block";
    // }

    
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
  "local" : {
    "productivity":{'basic':5109,'pro':5110},
    "project":{'basic':5111,'pro':5112},
    "time":{'basic':5113,'pro':5114},
    "attendance":{'basic':5115,'pro':5116}
  },
  "international" : {
     "productivity":{'basic':5101,'pro':5102},
     "project":{'basic':5103,'pro':5104},
     "time":{'basic':5105,'pro':5106},
     "attendance":{'basic':5107,'pro':5108}
  }
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
"US": {
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
},
"LA": {
  "productivity":{
    'basic':{'yearly':{"amount":2.99}, 'monthly':{"amount":56.19}},
    'pro':{'yearly':{"amount":56.19}, 'monthly':{"amount":79}}  
  },
  "project":{
    'basic':{'yearly':{"amount":44.99}, 'monthly':{"amount":56.19}},
    'pro':{'yearly':{"amount":2249}, 'monthly':{"amount":2809}}
  },
  "time":{
    'basic':{'yearly':{"amount":29}, 'monthly':{"amount":39}},
    'pro':{'yearly':{"amount":1499}, 'monthly':{"amount":1874.89}}
  },
  "attendance":{
    'basic':{'yearly':{"amount":29}, 'monthly':{"amount":39}},
    'pro':{'yearly':{"amount":1499}, 'monthly':{"amount":1874.89}}
  },
  'meta':{"currency":'$', "location":0.69, "pm":1.49, "insights":1.49}
},
"GB": {
  "productivity":{
    'basic':{'yearly':{"amount":2.99}, 'monthly':{"amount":3.19}},
    'pro':{'yearly':{"amount":3.19}, 'monthly':{"amount":4.99}}  
  },
  "project":{
    'basic':{'yearly':{"amount":1.99}, 'monthly':{"amount":2.49}},
    'pro':{'yearly':{"amount":98.39}, 'monthly':{"amount":122.99}}
  },
  "time":{
    'basic':{'yearly':{"amount":1.29}, 'monthly':{"amount":1.59}},
    'pro':{'yearly':{"amount":65.59}, 'monthly':{"amount":81.99}}
  },
  "attendance":{
    'basic':{'yearly':{"amount":1.29}, 'monthly':{"amount":1.59}},
    'pro':{'yearly':{"amount":65.59}, 'monthly':{"amount":81.99}}
  },
  'meta':{"currency":'£', "location":0.9, "pm":1.9, "insights":1.9}
},
"AU": {
  "productivity":{
    'basic':{'yearly':{"amount":4.69}, 'monthly':{"amount":6.19}},
    'pro':{'yearly':{"amount":6.19}, 'monthly':{"amount":4.99}}  
  },
  "project":{
    'basic':{'yearly':{"amount":3.69}, 'monthly':{"amount":4.69}},
    'pro':{'yearly':{"amount":187.19}, 'monthly':{"amount":233.99}}
  },
  "time":{
    'basic':{'yearly':{"amount":3.69}, 'monthly':{"amount":4.69}},
    'pro':{'yearly':{"amount":124.79}, 'monthly':{"amount":155.99}}
  },
  "attendance":{
    'basic':{'yearly':{"amount":3.69}, 'monthly':{"amount":4.69}},
    'pro':{'yearly':{"amount":124.79}, 'monthly':{"amount":155.99}}
  },
  'meta':{"currency":'AU$', "location":1.49, "pm":3.09, "insights":3.09}
},
"SA": {
  "productivity":{
    'basic':{'yearly':{"amount":10.99}, 'monthly':{"amount":14.99}},
    'pro':{'yearly':{"amount":10.99}, 'monthly':{"amount":4.99}}  
  },
  "project":{
    'basic':{'yearly':{"amount":8.99}, 'monthly':{"amount":14.99}},
    'pro':{'yearly':{"amount":439.99}, 'monthly':{"amount":549.99}}
  },
  "time":{
    'basic':{'yearly':{"amount":5.99}, 'monthly':{"amount":7.49}},
    'pro':{'yearly':{"amount":299.99}, 'monthly':{"amount":374.99}}
  },
  "attendance":{
    'basic':{'yearly':{"amount":5.99}, 'monthly':{"amount":7.49}},
    'pro':{'yearly':{"amount":299.99}, 'monthly':{"amount":374.99}}
  },
  'meta':{"currency":'SAR', "location":3.79, "pm":7.49, "insights":7.49}
},
"AE": {
  "productivity":{
  'basic':{'yearly':{"amount":10.99}, 'monthly':{"amount":14.59}},
  'pro':{'yearly':{"amount":10.99}, 'monthly':{"amount":19.99}}  
  },
  "project":{
    'basic':{'yearly':{"amount":8.79}, 'monthly':{"amount":10.99}},
    'pro':{'yearly':{"amount":439.99}, 'monthly':{"amount":549.99}}
  },
  "time":{
    'basic':{'yearly':{"amount":5.79}, 'monthly':{"amount":7.29}},
    'pro':{'yearly':{"amount":293.59}, 'monthly':{"amount":366.99}}
  },
  "attendance":{
    'basic':{'yearly':{"amount":5.79}, 'monthly':{"amount":7.29}},
    'pro':{'yearly':{"amount":293.59}, 'monthly':{"amount":366.99}}
  },
  'meta':{"currency":'AE', "location":3.69, "pm":7.29, "insights":7.29}
},
"CA": {
  "productivity":{
    'basic':{'yearly':{"amount":4.09}, 'monthly':{"amount":5.39}},
    'pro':{'yearly':{"amount":5.39}, 'monthly':{"amount":7.39}}  
  },
  "project":{
    'basic':{'yearly':{"amount":3.19}, 'monthly':{"amount":4.09}},
    'pro':{'yearly':{"amount":163.19}, 'monthly':{"amount":203.99}}
  },
  "time":{
    'basic':{'yearly':{"amount":2.19}, 'monthly':{"amount":2.69}},
    'pro':{'yearly':{"amount":108.79}, 'monthly':{"amount":135.99}}
  },
  "attendance":{
    'basic':{'yearly':{"amount":2.19}, 'monthly':{"amount":2.69}},
    'pro':{'yearly':{"amount":108.79}, 'monthly':{"amount":135.99}}
  },
  'meta':{"currency":'CA$', "location":1.39, "pm":2.69, "insights":2.69}
},
"ZA": {
  "productivity":{
    'basic':{'yearly':{"amount":34.89}, 'monthly':{"amount":46.49}},
    'pro':{'yearly':{"amount":46.49}, 'monthly':{"amount":63.89}}  
  },
  "project":{
    'basic':{'yearly':{"amount":27.89}, 'monthly':{"amount":34.89}},
    'pro':{'yearly':{"amount":1393.89}, 'monthly':{"amount":1742.39}}
  },
  "time":{
    'basic':{'yearly':{"amount":18.59}, 'monthly':{"amount":23.19}},
    'pro':{'yearly':{"amount":929.19}, 'monthly':{"amount":1161.59}}
  },
  "attendance":{
    'basic':{'yearly':{"amount":18.59}, 'monthly':{"amount":23.19}},
    'pro':{'yearly':{"amount":929.19}, 'monthly':{"amount":1161.59}}
  },
  'meta':{"currency":'ZAR', "location":11.39, "pm":22.89, "insights":22.89}
},
"EUR": {
  "productivity":{
    'basic':{'yearly':{"amount":2.69}, 'monthly':{"amount":3.59}},
    'pro':{'yearly':{"amount":3.59}, 'monthly':{"amount":4.99}}  
  },
  "project":{
    'basic':{'yearly':{"amount":2.19}, 'monthly':{"amount":2.69}},
    'pro':{'yearly':{"amount":110.39}, 'monthly':{"amount":137.99}}
  },
  "time":{
    'basic':{'yearly':{"amount":1.39}, 'monthly':{"amount":1.79}},
    'pro':{'yearly':{"amount":73.59}, 'monthly':{"amount":91.99}}
  },
  "attendance":{
    'basic':{'yearly':{"amount":1.39}, 'monthly':{"amount":1.79}},
    'pro':{'yearly':{"amount":73.59}, 'monthly':{"amount":91.99}}
  },
  'meta':{"currency":'€', "location":0.99, "pm":1.89, "insights":1.89}
}
};

function setPlanPricing( conCode, type = 'yearly', isAjax = false ){
    //conCode = "INTR"
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

        let basicBtn     = document.getElementById("cta-"+key+"-basic");
        let pType = ( type == "yearly" ) ? "annual" : "monthly";
        if( basicBtn ){
          basicBtn.setAttribute("href", getwsPlanurl(plan_meta[key]['basic'], pType));
        }

        let proBtn     = document.getElementById("cta-"+key+"-pro");
        if( proBtn ){          
          proBtn.setAttribute("href", getwsPlanurl(plan_meta[key]['pro'], pType));          
        }

        //console.log( key );
        // let coPlanBtn     = document.getElementById("ws-coplan-"+key);
        // if( coPlanBtn ){
        //   coPlanBtn.setAttribute("href", getwsPlanurl( plan_meta[key], pType ) );    
        // }

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



function getCalendlyiFrame(){  
  let ipopup = document.getElementById("calendly-popup");
  let iframe = document.getElementById("calendly-iframe");
  iframe.setAttribute('src', "https://calendly.com/workstatus/demo");
  setTimeout(function(){        
      ipopup.style.display = "block";    
  }, 200);
}

function closeCalendlyiFrame(){
  let ipopup = document.getElementById("calendly-popup");
  ipopup.style.display = "none";
}

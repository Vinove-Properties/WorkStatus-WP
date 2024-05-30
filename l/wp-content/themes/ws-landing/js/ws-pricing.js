const laCountries   = [ "AR", "BO", "BR", "CL", "CO", "CR", "CU", "DO", "EC", "SV", "GT", "HN", "MX", "NI", "PA", "PY", "PE", "UY", "VE" ];
const eurCountries  = [ "AT", "BE", "BG", "HR", "CY", "CZ", "DK", "EE", "FI", "FR", "DE", "GR", "HU", "IE", "IT", "LV", "LT", "LU", "MT", "NL", "PL", "PT", "RO", "SK", "SI", "ES", "SE" ];
const afCountries   = [ "DZ", "AO", "BJ", "BW", "BF", "BI", "CV", "CM", "CF", "TD", "KM", "CD", "CG", "DJ", "EG", "GQ", "ER", "SZ", "ET", "GA", "GM", "GH", "GN", "GW", "CI", "KE", "LS", "LR", "LY", "MG", "MW", "ML", "MR", "MU", "MA", "MZ", "NA", "NE", "NG", "RW", "ST", "SN", "SC", "SL", "SO", "ZA", "SS", "SD", "TZ", "TG", "TN", "UG", "ZM", "ZW" ];

function getwsPlanurl(plan_id = 0, type = "annual"){
  return 'https://'+prObj.app_url+'/auth/register?pid='+plan_id+'&type='+type;
}

/*
const WS_PLAN_ID = {
  "local" : {"basic" : 459, "pro" : 466, "buss" : 460, "ent" : 461},
  "international" : {"basic" : 462, "pro" : 467, "buss" : 463, "ent" : 464}
}
*/

const WS_PLAN_ID = {
  "local" : {"product" : 466, "project" : 460, "ent" : 461, "free" : 137},
  "international" : {"product" : 467, "project" : 463, "ent" : 464, "free" : 138}
}

const pricingData = {
"IN": {
  "product":{'yearly':{"amount":199.00}, 'monthly':{"amount":299}},
  "project":{'yearly':{"amount":299.00}, 'monthly':{"amount":399}},  
  'meta':{"currency":'₹', "location":69, "pm":99, "insights":99}
},
"LA": {
  "product":{'yearly':{"amount":2.99}, 'monthly':{"amount":3.99}},
  "project":{'yearly':{"amount":3.99}, 'monthly':{"amount":4.99}},  
  'meta':{"currency":'$', "location":0.69, "pm":1.49, "insights":1.49}  
},
"GB": {
  "product":{'yearly':{"amount":2.49}, 'monthly':{"amount":3.49}},
  "project":{'yearly':{"amount":3.99}, 'monthly':{"amount":5.49}},  
  'meta':{"currency":'£', "location":0.9, "pm":1.9, "insights":1.9}
},
"US": {
  "product":{'yearly':{"amount":4}, 'monthly':{"amount":5}},
  "project":{'yearly':{"amount":5.5}, 'monthly':{"amount":7}},  
  'meta':{"currency":'$', "location":1, "pm":2, "insights":2}
},
"AU": {
  "product":{'yearly':{"amount":5.99}, 'monthly':{"amount":7.49}},
  "project":{'yearly':{"amount":7.99}, 'monthly':{"amount":10.49}},
  'meta':{"currency":'AU$', "location":1.49, "pm":3.09, "insights":3.09}
},
"SA": {
  "product":{'yearly':{"amount":14.49}, 'monthly':{"amount":18.49}},
  "project":{'yearly':{"amount":19.99}, 'monthly':{"amount":25.99}},  
  'meta':{"currency":'SAR', "location":3.79, "pm":7.49, "insights":7.49}
},
"AE": {
  "product":{'yearly':{"amount":13.99}, 'monthly':{"amount":17.99}},
  "project":{'yearly':{"amount":19.99}, 'monthly':{"amount":24.99}},  
  'meta':{"currency":'AE', "location":3.69, "pm":7.29, "insights":7.29}
},
"CA": {
  "product":{'yearly':{"amount":4.99}, 'monthly':{"amount":6.49}},
  "project":{'yearly':{"amount":7.49}, 'monthly':{"amount":9.49}},  
  'meta':{"currency":'CA$', "location":1.39, "pm":2.69, "insights":2.69}
},
"ZA": {
  "product":{'yearly':{"amount":59.00}, 'monthly':{"amount":79.00}},
  "project":{'yearly':{"amount":89.00}, 'monthly':{"amount":119.00}},  
  'meta':{"currency":'ZAR', "location":11.39, "pm":22.89, "insights":22.89}
},
"EUR": {
  "product":{'yearly':{"amount":3.49}, 'monthly':{"amount":4.49}},
  "project":{'yearly':{"amount":4.99}, 'monthly':{"amount":6.49}},  
  'meta':{"currency":'€', "location":0.99, "pm":1.89, "insights":1.89}
}
};

function setPlanPricing( conCode, type = 'yearly', isAjax = false ){
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
    plans.free   = '';
    var currency    = plans['meta']['currency'];
    

    let elmLocation = document.getElementById("pl-location");
    let elmPm       = document.getElementById("pl-pm");
    let elmInsights = document.getElementById("pl-insights");    
    
    var isLocal           = ( conCode === "IN" ) ? "local" : "international";
    var plan_meta         =  WS_PLAN_ID[isLocal];


    [...document.querySelectorAll('.free-zero')].forEach(function(elm){
      elm.innerHTML = currency+"0";
    });

    for (const key in plans){
    if( plans.hasOwnProperty(key) ){
      
      if( key !== "currency" ){
        console.log( key );

        const value     = plans[key];
        let elmPricing  = document.getElementById("pl-"+key);
        let elmTotal    = document.getElementById("pl-"+key+"-total");
        let planBtn     = document.getElementById("ws-plan-"+key);
        if( planBtn ){
          let pType = ( type == "yearly" ) ? "annual" : "monthly";
          planBtn.setAttribute("href", getwsPlanurl( plan_meta[key], pType ) );  
          let coPlanBtn     = document.getElementById("ws-coplan-"+key);
          if( coPlanBtn ){
            coPlanBtn.setAttribute("href", getwsPlanurl( plan_meta[key], pType ) );    
          }
        }
        

        if( elmPricing ){
          elmPricing.innerHTML = currency + value[type].amount;  
        }
        if( elmTotal ){
          let totalAmt = (Math.round(((value.yearly.amount * 12) + Number.EPSILON) * 100) / 100);
          elmTotal.innerHTML = currency + totalAmt;  
        }
      }                  
    }
  }
}

window.addEventListener("load", function (){

    var xhttp = new XMLHttpRequest();
    //xhttp.open("GET", prObj.ipinfo, true); 
    xhttp.open("GET", 'http://localhost/workstatus-wp/website/staging/wp-json/ws-api/v1/ipinfo', true);     
    xhttp.setRequestHeader("Content-Type", "application/json");
    xhttp.onreadystatechange = function(){
        if( (this.readyState == 4) && (this.status == 200) ){
          let response = JSON.parse(this.responseText);
            //document.getElementById("wsio-pricing").style.display   = "block";
            //document.getElementById("wsio-preloader").style.display = "none";
            console.log( response );
            var conCode = response.country;
            setPlanPricing( conCode, "yearly", true );
        }
    }
    xhttp.send();  
});

//if( document.body.classList.contains('page-template-tpl-static-pricing') ){
  let planBtn = document.querySelector('.comparison-outer .plan-btn');
  let columnBox = document.querySelector('.comparison-panel');
  planBtn.addEventListener('click', (elm)=>{
      planBtn.classList.toggle('rotate');
      columnBox.classList.toggle('toggle');

      if( elm.target.classList.contains("rotate") ){
        document.getElementById("comp-table-sticky").classList.remove("sticky");
      }
  });
//}

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


const pricingFltrt = document.getElementById("pricing");
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

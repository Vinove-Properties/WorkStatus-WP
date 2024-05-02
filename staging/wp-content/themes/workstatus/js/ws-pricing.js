const laCountries   = [ "AR", "BO", "BR", "CL", "CO", "CR", "CU", "DO", "EC", "SV", "GT", "HN", "MX", "NI", "PA", "PY", "PE", "UY", "VE" ];
const eurCountries  = [ "AT", "BE", "BG", "HR", "CY", "CZ", "DK", "EE", "FI", "FR", "DE", "GR", "HU", "IE", "IT", "LV", "LT", "LU", "MT", "NL", "PL", "PT", "RO", "SK", "SI", "ES", "SE" ];
const afCountries   = [ "DZ", "AO", "BJ", "BW", "BF", "BI", "CV", "CM", "CF", "TD", "KM", "CD", "CG", "DJ", "EG", "GQ", "ER", "SZ", "ET", "GA", "GM", "GH", "GN", "GW", "CI", "KE", "LS", "LR", "LY", "MG", "MW", "ML", "MR", "MU", "MA", "MZ", "NA", "NE", "NG", "RW", "ST", "SN", "SC", "SL", "SO", "ZA", "SS", "SD", "TZ", "TG", "TN", "UG", "ZM", "ZW" ];

function getwsPlanurl(plan_id = 0, type = "annual"){
  return 'https://app.staging.workstatus.io/auth/register?pid='+plan_id+'&type='+type;
}

const WS_PLAN_ID = {
  "local" : {"basic" : 459, "pro" : 466, "buss" : 460, "ent" : 461},
  "international" : {"basic" : 462, "pro" : 467, "buss" : 463, "ent" : 464}
}

const pricingData = {
"IN": {
  "basic":{
  'monthly':{"amount":99, "total":3588},
  'yearly':{"amount":69, "total":2388}    
  },
  "pro":{
  'monthly':{"amount":249, "total":4788},
  'yearly':{"amount":169, "total":3588}    
  },
  "buss":{
  'monthly':{"amount":349, "total":7188},
  'yearly':{"amount":199, "total":5988}    
  },
  "ent":{
  'monthly':{"amount":649, "total":4},
  'yearly':{"amount":499, "total":4}    
  },
  'meta':{"currency":'₹', "pm":169, "app":69, "data":99, "screenshot":49, "cloud":79}
},
"LA": {
  "basic":{
  'monthly':{"amount":1.89, "total":3588},
  'yearly':{"amount":1.49, "total":2388}    
  },
  "pro":{
  'monthly':{"amount":3.39, "total":4788},
  'yearly':{"amount":2.69, "total":3588}    
  },
  "buss":{
  'monthly':{"amount":4.09, "total":7188},
  'yearly':{"amount":3.29, "total":5988}    
  },
  "ent":{
  'monthly':{"amount":8.59, "total":4},
  'yearly':{"amount":6.89, "total":4}    
  },
  'meta':{"currency":'$', "pm":1.49, "app":0.69, "data":0.69, "screenshot":0.69, "cloud":0.69}
},
"GB": {
  "basic":{
  'monthly':{"amount":1.79, "total":3588},
  'yearly':{"amount":1.59, "total":2388}    
  },
  "pro":{
  'monthly':{"amount":3.59, "total":4788},
  'yearly':{"amount":2.89, "total":3588}    
  },
  "buss":{
  'monthly':{"amount":4.39, "total":7188},
  'yearly':{"amount":3.49, "total":5988}    
  },
  "ent":{
  'monthly':{"amount":9.19, "total":4},
  'yearly':{"amount":7.39, "total":4}    
  },
  'meta':{"currency":'£', "pm":1.9, "app":0.9, "data":0.9, "screenshot":0.9, "cloud":0.9}
},
"US": {
  "basic":{
  'monthly':{"amount":2.49, "total":3588},
  'yearly':{"amount":1.99, "total":2388}    
  },
  "pro":{
  'monthly':{"amount":4.49, "total":4788},
  'yearly':{"amount":3.59, "total":3588}    
  },
  "buss":{
  'monthly':{"amount":5.49, "total":7188},
  'yearly':{"amount":4.39, "total":5988}    
  },
  "ent":{
  'monthly':{"amount":11.49, "total":4},
  'yearly':{"amount":9.19, "total":4}    
  },
  'meta':{"currency":'$', "pm":2, "app":1, "data":1, "screenshot":1, "cloud":1}
},
"AU": {
  "basic":{
  'monthly':{"amount":3.79, "total":3588},
  'yearly':{"amount":2.09, "total":2388}    
  },
  "pro":{
  'monthly':{"amount":6.89, "total":4788},
  'yearly':{"amount":5.49, "total":3588}    
  },
  "buss":{
  'monthly':{"amount":8.49, "total":7188},
  'yearly':{"amount":6.69, "total":5988}    
  },
  "ent":{
  'monthly':{"amount":17.69, "total":4},
  'yearly':{"amount":14.09, "total":4}    
  },
  'meta':{"currency":'AU$', "pm":3.09, "app":1.49, "data":1.49, "screenshot":1.49, "cloud":1.49}
},
"SA": {
  "basic":{
  'monthly':{"amount":9.29, "total":3588},
  'yearly':{"amount":7.49, "total":2388}    
  },
  "pro":{
  'monthly':{"amount":16.79, "total":4788},
  'yearly':{"amount":13.49, "total":3588}    
  },
  "buss":{
  'monthly':{"amount":20.59, "total":7188},
  'yearly':{"amount":16.49, "total":5988}    
  },
  "ent":{
  'monthly':{"amount":43.09, "total":4},
  'yearly':{"amount":34.49, "total":4}    
  },
  'meta':{"currency":'SAR', "pm":7.49, "app":3.79, "data":3.79, "screenshot":3.79, "cloud":3.79}
},
"AE": {
  "basic":{
  'monthly':{"amount":9.09, "total":3588},
  'yearly':{"amount":7.29, "total":2388}    
  },
  "pro":{
  'monthly':{"amount":16.49, "total":4788},
  'yearly':{"amount":13.19, "total":3588}    
  },
  "buss":{
  'monthly':{"amount":20.19, "total":7188},
  'yearly':{"amount":16.09, "total":5988}    
  },
  "ent":{
  'monthly':{"amount":42.19, "total":4},
  'yearly':{"amount":33.69, "total":4}    
  },
  'meta':{"currency":'AE', "pm":7.29, "app":3.69, "data":3.69, "screenshot":3.69, "cloud":3.69}
},
"CA": {
  "basic":{
  'monthly':{"amount":3.39, "total":3588},
  'yearly':{"amount":2.69, "total":2388}    
  },
  "pro":{
  'monthly':{"amount":6.19, "total":4788},
  'yearly':{"amount":4.89, "total":3588}    
  },
  "buss":{
  'monthly':{"amount":7.49, "total":7188},
  'yearly':{"amount":5.99, "total":5988}    
  },
  "ent":{
  'monthly':{"amount":15.69, "total":4},
  'yearly':{"amount":12.59, "total":4}    
  },
  'meta':{"currency":'CA$', "pm":2.69, "app":1.39, "data":1.39, "screenshot":1.39, "cloud":1.39}
},
"ZA": {
  "basic":{
  'monthly':{"amount":28.39, "total":3588},
  'yearly':{"amount":22.69, "total":2388}    
  },
  "pro":{
  'monthly':{"amount":47.79, "total":4788},
  'yearly':{"amount":40.99, "total":3588}    
  },
  "buss":{
  'monthly':{"amount":62.59, "total":7188},
  'yearly':{"amount":50.09, "total":5988}    
  },
  "ent":{
  'monthly':{"amount":131.09, "total":4},
  'yearly':{"amount":104.89, "total":4}    
  },
  'meta':{"currency":'ZAR', "pm":22.89, "app":11.39, "data":11.39, "screenshot":11.39, "cloud":11.39}
},
"EUR": {
  "basic":{
  'monthly':{"amount":1.99, "total":3588},
  'yearly':{"amount":1.79, "total":2388}    
  },
  "pro":{
  'monthly':{"amount":4.19, "total":4788},
  'yearly':{"amount":3.29, "total":3588}    
  },
  "buss":{
  'monthly':{"amount":5.09, "total":7188},
  'yearly':{"amount":4.09, "total":5988}    
  },
  "ent":{
  'monthly':{"amount":10.69, "total":4},
  'yearly':{"amount":8.59, "total":4}    
  },
  'meta':{"currency":'€', "pm":1.89, "app":0.99, "data":0.99, "screenshot":0.99, "cloud":0.99}
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

    if( pricingData.hasOwnProperty(conCode) ){
      locInput.value = conCode;
    }
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
    

    let plans = (!pricingData.hasOwnProperty(conCode)) ? pricingData['US'] : pricingData[conCode];
    
    var currency    = plans['meta']['currency'];
    //let elmInsight  = document.getElementById("pl-insight");
    let elmScreen   = document.getElementById("pl-screenshot");
    let elmTask     = document.getElementById("pl-pm");
    let elmData     = document.getElementById("pl-data");
    //let elmLocation = document.getElementById("pl-location");
    let elmCorapp   = document.getElementById("pl-corapp");
    let elmCloud    = document.getElementById("pl-cloud");
    
    //elmInsight.innerHTML  = currency + plans['meta']['insight'];
    elmScreen.innerHTML   = currency + plans['meta']['screenshot'];
    elmTask.innerHTML     = currency + plans['meta']['pm'];
    elmData.innerHTML     = currency + plans['meta']['data'];
    //elmLocation.innerHTML = currency + plans['meta']['location'];
    elmCorapp.innerHTML   = currency + plans['meta']['app'];
    elmCloud.innerHTML    = currency + plans['meta']['cloud'];
    
    var isLocal           = ( conCode === "IN" ) ? "local" : "international";
    var plan_meta         =  WS_PLAN_ID[isLocal];

    [...document.querySelectorAll('.free-zero')].forEach(function(elm){
      elm.innerHTML = currency+"0";
    });

    for (const key in plans){
    if( plans.hasOwnProperty(key) ){
      
      if( key !== "currency" ){
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
  if( !document.body.classList.contains('page-id-3484') ){
    var xhttp = new XMLHttpRequest();
    xhttp.open("GET", wsObj.ipinfo, true); 
    xhttp.setRequestHeader("Content-Type", "application/json");
    xhttp.onreadystatechange = function(){
        if( (this.readyState == 4) && (this.status == 200) ){
          let response = JSON.parse(this.responseText);
            document.getElementById("wsio-pricing").style.display   = "block";
            document.getElementById("wsio-preloader").style.display = "none";
            console.log( response );
            var conCode = response.country;
            setPlanPricing( conCode, "yearly", true );
        }
    }
    xhttp.send();  
  }else{
    document.getElementById("wsio-pricing").style.display   = "block";
    document.getElementById("wsio-preloader").style.display = "none";
    setPlanPricing( "US", "yearly", true );
  }
  
});

if( document.body.classList.contains('page-template-tpl-static-pricing') ){
  let planBtn = document.querySelector('.comparison-outer .plan-btn');
  let columnBox = document.querySelector('.comparison-panel');
  planBtn.addEventListener('click', ()=>{
      planBtn.classList.toggle('rotate');
      columnBox.classList.toggle('toggle');
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
const hiddenDivs = document.querySelectorAll('.price-options');

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

const laCountries   = [ "AR", "BO", "BR", "CL", "CO", "CR", "CU", "DO", "EC", "SV", "GT", "HN", "MX", "NI", "PA", "PY", "PE", "UY", "VE" ];
const eurCountries  = [ "AT", "BE", "BG", "HR", "CY", "CZ", "DK", "EE", "FI", "FR", "DE", "GR", "HU", "IE", "IT", "LV", "LT", "LU", "MT", "NL", "PL", "PT", "RO", "SK", "SI", "ES", "SE" ];

function getwsPlanurl(plan_id = 0, type = "annual"){
  return 'https://app.staging.workstatus.io/auth/register?pid='+plan_id+'&type='+type;
}

const WS_PLAN_ID = {
  "local" : {"basic" : 459, "pro" : 139, "buss" : 460, "ent" : 461},
  "international" : {"basic" : 462, "pro" : 140, "buss" : 463, "ent" : 464}
}

const pricingData = {
"IN": {
  "basic":{
  'monthly':{"amount":199, "total":3588},
  'yearly':{"amount":99, "total":2388}    
  },
  "pro":{
  'monthly':{"amount":299, "total":4788},
  'yearly':{"amount":199, "total":3588}    
  },
  "buss":{
  'monthly':{"amount":399, "total":7188},
  'yearly':{"amount":299, "total":5988}    
  },
  "ent":{
  'monthly':{"amount":999, "total":4},
  'yearly':{"amount":899, "total":4}    
  },
  'meta':{"currency":'₹', "insight":100, "screenshot":140, "tasks":140, "data":100, "location":180, "app":140, "cloud":140}
},
"LA": {
  "basic":{
  'monthly':{"amount":2.29, "total":3588},
  'yearly':{"amount":1.69, "total":2388}    
  },
  "pro":{
  'monthly':{"amount":3.09, "total":4788},
  'yearly':{"amount":2.29, "total":3588}    
  },
  "buss":{
  'monthly':{"amount":4.99, "total":7188},
  'yearly':{"amount":4.19, "total":5988}    
  },
  "ent":{
  'monthly':{"amount":12.99, "total":4},
  'yearly':{"amount":10.99, "total":4}    
  },
  'meta':{"currency":'$', "insight":1.49, "screenshot":2.49, "tasks":2.49, "data":1.49, "location":3.09, "app":2.49, "cloud":2.49}
},
"GB": {
  "basic":{
  'monthly':{"amount":2.39, "total":3588},
  'yearly':{"amount":1.59, "total":2388}    
  },
  "pro":{
  'monthly':{"amount":3.19, "total":4788},
  'yearly':{"amount":2.39, "total":3588}    
  },
  "buss":{
  'monthly':{"amount":4.79, "total":7188},
  'yearly':{"amount":3.99, "total":5988}    
  },
  "ent":{
  'monthly':{"amount":12.09, "total":4},
  'yearly':{"amount":10.49, "total":4}    
  },
  'meta':{"currency":'£', "insight":1.59, "screenshot":2.39, "tasks":2.39, "data":1.59, "location":3.19, "app":2.39, "cloud":2.39}
},
"US": {
  "basic":{
  'monthly':{"amount":2.99, "total":3588},
  'yearly':{"amount":1.99, "total":2388}    
  },
  "pro":{
  'monthly':{"amount":3.99, "total":4788},
  'yearly':{"amount":2.99, "total":3588}    
  },
  "buss":{
  'monthly':{"amount":5.99, "total":7188},
  'yearly':{"amount":4.99, "total":5988}    
  },
  "ent":{
  'monthly':{"amount":14.99, "total":4},
  'yearly':{"amount":12.99, "total":4}    
  },
  'meta':{"currency":'$', "insight":2, "screenshot":3, "tasks":3, "data":2, "location":4, "app":3, "cloud":3}
},
"AU": {
  "basic":{
  'monthly':{"amount":4.69, "total":3588},
  'yearly':{"amount":2.09, "total":2388}    
  },
  "pro":{
  'monthly':{"amount":6.19, "total":4788},
  'yearly':{"amount":4.69, "total":3588}    
  },
  "buss":{
  'monthly':{"amount":9.29, "total":7188},
  'yearly':{"amount":7.79, "total":5988}    
  },
  "ent":{
  'monthly':{"amount":23.39, "total":4},
  'yearly':{"amount":20.29, "total":4}    
  },
  'meta':{"currency":'AU$', "insight":3.09, "screenshot":4.69, "tasks":4.69, "data":3.09, "location":6.19, "app":4.69, "cloud":4.69}
},
"SA": {
  "basic":{
  'monthly':{"amount":11.19, "total":3588},
  'yearly':{"amount":7.49, "total":2388}    
  },
  "pro":{
  'monthly':{"amount":14.99, "total":4788},
  'yearly':{"amount":11.19, "total":3588}    
  },
  "buss":{
  'monthly':{"amount":22.49, "total":7188},
  'yearly':{"amount":18.69, "total":5988}    
  },
  "ent":{
  'monthly':{"amount":56.19, "total":4},
  'yearly':{"amount":48.69, "total":4}    
  },
  'meta':{"currency":'SAR', "insight":7.49, "screenshot":11.19, "tasks":11.19, "data":7.49, "location":14.99, "app":11.19, "cloud":11.19}
},
"AE": {
  "basic":{
  'monthly':{"amount":10.99, "total":3588},
  'yearly':{"amount":7.29, "total":2388}    
  },
  "pro":{
  'monthly':{"amount":14.59, "total":4788},
  'yearly':{"amount":10.99, "total":3588}    
  },
  "buss":{
  'monthly':{"amount":21.99, "total":7188},
  'yearly':{"amount":18.29, "total":5988}    
  },
  "ent":{
  'monthly':{"amount":55.49, "total":4},
  'yearly':{"amount":47.69, "total":4}    
  },
  'meta':{"currency":'AE', "insight":7.29, "screenshot":10.99, "tasks":10.99, "data":7.29, "location":14.69, "app":10.99, "cloud":10.99}
},
"CA": {
  "basic":{
  'monthly':{"amount":4.09, "total":3588},
  'yearly':{"amount":2.69, "total":2388}    
  },
  "pro":{
  'monthly':{"amount":5.49, "total":4788},
  'yearly':{"amount":4.09, "total":3588}    
  },
  "buss":{
  'monthly':{"amount":8.19, "total":7188},
  'yearly':{"amount":6.79, "total":5988}    
  },
  "ent":{
  'monthly':{"amount":20.59, "total":4},
  'yearly':{"amount":17.89, "total":4}    
  },
  'meta':{"currency":'CA$', "insight":2.69, "screenshot":4.09, "tasks":4.09, "data":2.69, "location":5.49, "app":4.09, "cloud":4.09}
},
"ZA": {
  "basic":{
  'monthly':{"amount":57.49, "total":3588},
  'yearly':{"amount":38.29, "total":2388}    
  },
  "pro":{
  'monthly':{"amount":76.69, "total":4788},
  'yearly':{"amount":57.49, "total":3588}    
  },
  "buss":{
  'monthly':{"amount":115.19, "total":7188},
  'yearly':{"amount":95.99, "total":5988}    
  },
  "ent":{
  'monthly':{"amount":288.39, "total":4},
  'yearly':{"amount":249.99, "total":4}    
  },
  'meta':{"currency":'ZAR', "insight":38.39, "screenshot":57.59, "tasks":57.59, "data":38.39, "location":75.99, "app":57.59, "cloud":57.59}
},
"EUR": {
  "basic":{
  'monthly':{"amount":2.79, "total":3588},
  'yearly':{"amount":1.79, "total":2388}    
  },
  "pro":{
  'monthly':{"amount":3.69, "total":4788},
  'yearly':{"amount":2.79, "total":3588}    
  },
  "buss":{
  'monthly':{"amount":5.59, "total":7188},
  'yearly':{"amount":4.69, "total":5988}    
  },
  "ent":{
  'monthly':{"amount":14.09, "total":4},
  'yearly':{"amount":12.19, "total":4}    
  },
  'meta':{"currency":'€', "insight":1.89, "screenshot":2.79, "tasks":2.79, "data":1.89, "location":3.79, "app":2.79, "cloud":2.79}
}
};

function setPlanPricing( conCode, type = 'yearly', isAjax = false ){
    const locInput = document.getElementById("current-geo");
    if( laCountries.includes( conCode ) ){
      conCode = "LA";
    }else if( eurCountries.includes( conCode ) ){
      conCode = "EUR";
    }

    if( pricingData.hasOwnProperty(conCode) ){
      locInput.value = conCode;
    }
    if(  isAjax === true){
      [...document.querySelectorAll('.pc-option')].forEach(function(elm) {
      
      if( elm.getAttribute( 'data-cod' ) === conCode ){
      //console.log(elm.getAttribute('data-country'));
      let iSrc        = elm.querySelectorAll("img")[0].getAttribute('src');
      let pcCountry   = document.getElementById("pc-country");
      document.getElementById("pflag-icon").setAttribute('src', iSrc);
      pcCountry.innerText = elm.getAttribute('data-country');      
      }
      });  
    }
    

    let plans = (!pricingData.hasOwnProperty(conCode)) ? pricingData['US'] : pricingData[conCode];
    
    var currency    = plans['meta']['currency'];
    let elmInsight  = document.getElementById("pl-insight");
    let elmScreen   = document.getElementById("pl-screenshot");
    let elmTask     = document.getElementById("pl-task");
    let elmData     = document.getElementById("pl-data");
    let elmLocation = document.getElementById("pl-location");
    let elmCorapp   = document.getElementById("pl-corapp");
    let elmCloud    = document.getElementById("pl-cloud");
    
    elmInsight.innerHTML  = currency + plans['meta']['insight'];
    elmScreen.innerHTML   = currency + plans['meta']['screenshot'];
    elmTask.innerHTML     = currency + plans['meta']['tasks'];
    elmData.innerHTML     = currency + plans['meta']['data'];
    elmLocation.innerHTML = currency + plans['meta']['location'];
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
        //console.log(key);
        const value     = plans[key];
        let elmPricing  = document.getElementById("pl-"+key);
        let elmTotal    = document.getElementById("pl-"+key+"-total");
        let planBtn     = document.getElementById("ws-plan-"+key);
        if( planBtn ){
          let pType = ( type == "yearly" ) ? "annual" : "monthly";
          //planBtn.setAttribute("href", getwsPlanurl( value[type].plan_id, pType ) );
          planBtn.setAttribute("href", getwsPlanurl( plan_meta[key], pType ) );  
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
  xhttp.open("GET", wsObj.ipinfo, true); 
  xhttp.setRequestHeader("Content-Type", "application/json");
  xhttp.onreadystatechange = function(){
      if( (this.readyState == 4) && (this.status == 200) ){
        let response = JSON.parse(this.responseText);
          document.getElementById("wsio-pricing").style.display = "block";
          document.getElementById("wsio-preloader").style.display = "none";
          console.log( response );
          var conCode = response.country;
          setPlanPricing( conCode, "yearly", true );

      }
  }
  xhttp.send();
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
ws_SelectOn('click', '.pcselectBtn', item => {
  console.log( item.target );
  const next = item.target.nextElementSibling;
  next.classList.toggle('toggle');
  next.style.zIndex = pcSelectIndex++;
  item.target.classList.toggle('active');
});
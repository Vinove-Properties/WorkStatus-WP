const pricingTabs   = document.querySelectorAll("#pricing-Tabs li");
const pc_container  = document.querySelector('.price-contents');
const tabPanesPc    = pc_container.getElementsByClassName("tab-contents");
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
        
        if(activePane){
          activePane.classList.add("active");
        }else{
          console.error("No element found for the selector: " + clickedTab);
        }
    }
    const plans = ['wsp-productivity', 'wsp-project', 'wsp-time', 'wsp-attendance'];
    plans.forEach((elm) => {
      document.body.classList.remove(elm);
    });
    document.body.classList.add(e.target.getAttribute('data-plan'));
}

pricingTabs.forEach(function(tab){
  tab.addEventListener("click", pricingActiveTaber);
});

const laCountries   = [ "AR", "BO", "BR", "CL", "CO", "CR", "CU", "DO", "EC", "SV", "GT", "HN", "MX", "NI", "PA", "PY", "PE", "UY", "VE" ];
const eurCountries  = [ "AT", "BE", "BG", "HR", "CY", "CZ", "DK", "EE", "FI", "FR", "DE", "GR", "HU", "IE", "IT", "LV", "LT", "LU", "MT", "NL", "PL", "PT", "RO", "SK", "SI", "ES", "SE" ];
const afCountries   = [ "DZ", "AO", "BJ", "BW", "BF", "BI", "CV", "CM", "CF", "TD", "KM", "CD", "CG", "DJ", "EG", "GQ", "ER", "SZ", "ET", "GA", "GM", "GH", "GN", "GW", "CI", "KE", "LS", "LR", "LY", "MG", "MW", "ML", "MR", "MU", "MA", "MZ", "NA", "NE", "NG", "RW", "ST", "SN", "SC", "SL", "SO", "ZA", "SS", "SD", "TZ", "TG", "TN", "UG", "ZM", "ZW" ];
const usRegion = ["BG", "NZ", "AU", "CA", "SG", "US", "AT", "BE", "HR", "CY", "EE", "FI", "FR", "DE", "GR", "IE", "IT", "LV", "LT", "LU", "MT", "NL", "PT", "SK", "SI", "ES", "LI", 
"CH", "GI", "GB"];

function wsGetCookieVal(cookieName){
    const cookies = document.cookie.split(";").map(cookie => cookie.trim());
    for (let cookie of cookies) {
        if (cookie.startsWith(`${cookieName}=`)) {
            return cookie.split("=")[1]; // Return the value of the cookie
        }
    }
    return false; // Return null if the cookie doesn't exist
}
function getMonthlyCost(totalAmount) {
  const monthlyCost = totalAmount / 12;
  return Number(monthlyCost.toFixed(2));
}

function getwsPlanurl(plan_id = 0, type = "annual"){
  if( wsGetCookieVal( 'ws_reftoken' ) ){
    let refToken = wsGetCookieVal( 'ws_reftoken' );
    return 'https://'+wsObj.app_url+'/auth/register?pid='+plan_id+'&type='+type+'&r_id='+refToken;
  }else{
    return 'https://'+wsObj.app_url+'/auth/register?pid='+plan_id+'&type='+type;  
  }  
}

const pricingData = {
  "IN":{
    "productivity":{'monthly':299, 'yearly':2388,id:7001},
    "project":{
      'basic':{'monthly':110, 'yearly':1080, id:7002},
      'pro':{'monthly':5400, 'yearly':55200, id:7003}
    },
    "everything":{'monthly':399, 'yearly':3588, id:7004},
    "time":{
      '50':{'monthly':3000, 'yearly':28800, id:7005},
      '100':{'monthly':5000, 'yearly':48000, id:7006},
      '250':{'monthly':10000, 'yearly':96000, id:7007},
      '500':{'monthly':15000, 'yearly':144000, id:7008},
      '1000':{'monthly':20000, 'yearly':192000, id:7009}
    },
    "attendance":{
      '50':{'monthly':3000, 'yearly':28800, id:7010},
      '100':{'monthly':5000, 'yearly':48000, id:7011},
      '250':{'monthly':10000, 'yearly':96000, id:7012},
      '500':{'monthly':15000, 'yearly':144000, id:7013},
      '1000':{'monthly':20000, 'yearly':192000, id:7014}
    },
    'meta':{"currency":'₹', "location":69, "pm":99, "insights":99}
  },
  "UR":{
    "productivity":{'monthly':5, 'yearly':48,id:7015},
    "project":{
      'basic':{'monthly':3, 'yearly':28.8, id:7017},
      'pro':{'monthly':150, 'yearly':1440, id:7019}
    },
    "everything":{'monthly':7, 'yearly':66, id:7021},
    "time":{
      '50':{'monthly':50, 'yearly':480, id:7023},
      '100':{'monthly':90, 'yearly':864, id:7025},
      '250':{'monthly':175, 'yearly':1680, id:7027},
      '500':{'monthly':300, 'yearly':2880, id:7029},
      '1000':{'monthly':500, 'yearly':4800, id:7031}
    },
    "attendance":{
      '50':{'monthly':50, 'yearly':480, id:7033},
      '100':{'monthly':90, 'yearly':864, id:7035},
      '250':{'monthly':175, 'yearly':1680, id:7037},
      '500':{'monthly':300, 'yearly':2880, id:7039},
      '1000':{'monthly':500, 'yearly':4800, id:7041}
    },
    'meta':{"currency":'$', "location":69, "pm":99, "insights":99}
  },
  "OT":{
    "productivity":{'monthly':3.5, 'yearly':33.6,id:7016},
    "project":{
      'basic':{'monthly':2.1, 'yearly':20.16, id:7018},
      'pro':{'monthly':105, 'yearly':1008, id:7020}
    },
    "everything":{'monthly':4.9, 'yearly':46.20, id:7022},
    "time":{
      '50':{'monthly':35, 'yearly':336, id:7024},
      '100':{'monthly':65, 'yearly':600, id:7028},
      '250':{'monthly':125, 'yearly':1176, id:7028},
      '500':{'monthly':210, 'yearly':2040, id:7030},
      '1000':{'monthly':350, 'yearly':3360, id:7032}
    },
    "attendance":{
      '50':{'monthly':35, 'yearly':336, id:7034},
      '100':{'monthly':65, 'yearly':600, id:7036},
      '250':{'monthly':125, 'yearly':1176, id:7038},
      '500':{'monthly':210, 'yearly':2040, id:7040},
      '1000':{'monthly':350, 'yearly':3360, id:7042}
    },
    'meta':{"currency":'$', "location":69, "pm":99, "insights":99}
  }
};

function setPlanPricing( conCode, type = 'yearly', isAjax = false ){
    const locInput = document.getElementById("current-geo");
    if(usRegion.includes(conCode)){
    conCode = "UR";  
    }else if( !pricingData.hasOwnProperty(conCode) ){
    conCode = "OT";  
    }

    if( conCode === "IN" ){
    document.body.classList.add("geo-india");
    }

    if( !pricingData.hasOwnProperty(conCode) ){
      conCode = "US";      
    }
    //conCode = "OT";

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

    var currency    = plans['meta']['currency'];

    // let elmLocation = document.getElementById("pl-location");
    // let elmPm       = document.getElementById("pl-pm");
    // let elmInsights = document.getElementById("pl-insights");

    // if( elmLocation ){
    // elmLocation.innerHTML    = currency + plans['meta']['location'];  
    // }
    // if( elmPm ){
    // elmPm.innerHTML         = currency + plans['meta']['pm'];  
    // }
    // if( elmInsights ){
    // elmInsights.innerHTML   = currency + plans['meta']['insights'];  
    // }
    
    // var plan_meta =  WS_PLAN_ID[conCode];
    // console.log(plans);

    for (const key in plans){
    if( plans.hasOwnProperty(key)){      
      if( key !== "currency" ){
        const value     = plans[key];
        let elmBasic    = document.getElementById("cst-"+key+"-one");
        if( elmBasic ){
          elmBasic.innerHTML = (type == "yearly") ? currency+getMonthlyCost(value['yearly'])+'<small class="max-price">'+value['monthly']+'</small>' : currency+value[type];
          let byNow = document.getElementById("bn-"+key+"-one");
          if( byNow ){
            byNow.setAttribute("href", getwsPlanurl(value.id, type));
          }
        }

        let elmPmBasic    = document.getElementById("cst-"+key+"-basic");
        if( elmPmBasic ){
          elmPmBasic.innerHTML = (type == "yearly") ? currency+getMonthlyCost(value['basic']['yearly'])+'<small class="max-price">'+value['basic']['monthly']+'</small>' : currency+value['basic'][type];
          let byNow = document.getElementById("bn-"+key+"-basic");
          if( byNow ){
            byNow.setAttribute("href", getwsPlanurl(value['basic'].id, type));
          }
        }

        let elmPmPro    = document.getElementById("cst-"+key+"-pro");
        if( elmPmPro ){
          elmPmPro.innerHTML = (type == "yearly") ? currency+getMonthlyCost(value['pro']['yearly'])+'<small class="max-price">'+value['pro']['monthly']+'</small>' : currency+value['pro'][type];

          let byNow = document.getElementById("bn-"+key+"-pro");
          if( byNow ){
            byNow.setAttribute("href", getwsPlanurl(value['pro'].id, type));
          }
        }

        let elmTime    = document.getElementById("cst-"+key+"-three");
        if( elmTime ){
          const curTabElm = document.getElementById("tab03");
          let elmInput = document.getElementById("elm-time-hd");
          if( elmInput.value !== "custom" ){
            curTabElm.classList.remove("custom-pln");
            elmTime.innerHTML = (type == "yearly") ? currency+getMonthlyCost(value[elmInput.value]['yearly'])+'<small class="max-price">'+value[elmInput.value]['monthly']+'</small>' : currency+value[elmInput.value][type];
            elmTime.innerHTML += '<span class="prio">/'+type+'</span>';
            let byNow = document.getElementById("bn-"+key+"-three");
            if( byNow ){
              byNow.innerText = "Buy Now";
              byNow.setAttribute("href", getwsPlanurl(value[elmInput.value].id, type));
              byNow.removeAttribute("onclick");
            }  
          }else{
            curTabElm.classList.add("custom-pln");
            elmTime.innerHTML = "";
            let byNow = document.getElementById("bn-"+key+"-three");
            if( byNow ){
              byNow.innerText = "Request Quote";
              byNow.setAttribute("href", "javascript:void(0);", type);
              byNow.setAttribute("onclick", "call_demoEnt()");              
            }
          }
          
        }

        let elmAttendance    = document.getElementById("cst-"+key+"-four");
        if( elmAttendance ){
          const curTabElm = document.getElementById("tab04");
          let elmInput = document.getElementById("elm-attendance-hd");

          if( elmInput.value !== "custom" ){
            curTabElm.classList.remove("custom-pln");
            elmAttendance.innerHTML = (type == "yearly") ? currency+getMonthlyCost(value[elmInput.value]['yearly'])+'<small class="max-price">'+value[elmInput.value]['monthly']+'</small>' : currency+value[elmInput.value][type];
            elmAttendance.innerHTML += '<span class="prio">/'+type+'</span>';
            let byNow = document.getElementById("bn-"+key+"-four");
            if( byNow ){
              byNow.innerText = "Buy Now";
              byNow.setAttribute("href", getwsPlanurl(value[elmInput.value].id, type));
              byNow.removeAttribute("onclick");
            }
          }else{
            curTabElm.classList.add("custom-pln");
            elmAttendance.innerHTML = "";
            let byNow = document.getElementById("bn-"+key+"-four");
            if( byNow ){
              byNow.innerText = "Request Quote";
              byNow.setAttribute("href", "javascript:void(0);", type);
              byNow.setAttribute("onclick", "call_demoEnt()");
            }
          }  
          
        }

        let elmEverything    = document.getElementById("cst-"+key+"-five");
        if( elmEverything ){
          elmEverything.innerHTML = (type == "yearly") ? currency+getMonthlyCost(value['yearly'])+'<small class="max-price">'+value['monthly']+'</small>' : currency+value[type];
          elmEverything.innerHTML += '<span class="prio">/'+type+'</span>';

          let byNow = document.getElementById("bn-"+key+"-five");
          if( byNow ){
            byNow.setAttribute("href", getwsPlanurl(value.id, type));
          }
        }

      }                  
    }
  }
}

if( 
  document.body.classList.contains('page-template-tpl-static-pricing')  || 
  document.body.classList.contains('page-template-tpl-pricing-v4-0') ||
  document.body.classList.contains('page-template-tpl-pricing-v5-0')
  ){
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


document.addEventListener("DOMContentLoaded", function () {
  function updateSlider(tabContent){
    const rangeInput = tabContent.querySelector(".pricingRange");
    const userCountDisplay = tabContent.querySelector(".userCount");
    const sliderLabels = tabContent.querySelectorAll(".slider-labels .label");

    if (!rangeInput || !userCountDisplay || !sliderLabels.length) return;

    const userValues = Array.from(sliderLabels).map(label =>
      label.dataset.users
    );
    const crPlan = tabContent.getAttribute("data-plan");
    function setUserCount(index) {
      const value = userValues[index];
      userCountDisplay.textContent = value;
      
      const userCount = [50, 100, 250, 500, 1000, "custom"];
      const inputLoc  = document.getElementById("current-geo");
      const elmInput  = document.getElementById("elm-"+crPlan+"-hd");
      elmInput.value  = userCount[index];
      const plnIn     = (document.body.classList.contains('ps-monthly')) ? "monthly" : "yearly";
      setPlanPricing( inputLoc.value, plnIn );
    }

    // Initial load
    setUserCount(parseInt(rangeInput.value, 10));

    // Range input update
    rangeInput.addEventListener("input", function () {
    setUserCount(parseInt(this.value, 10));
    });

    // Label click update
    sliderLabels.forEach((label, index) => {
    label.addEventListener("click", function(){
      rangeInput.value = index;
      setUserCount(index);
    });
    });
  }

  function initAllVisibleSliders(){
    const activeTabs = document.querySelectorAll(".tab-contents.active");
    activeTabs.forEach(tab => updateSlider(tab));
  }
  initAllVisibleSliders();

  // Re-initialize on tab switch
  const tabs = document.querySelectorAll("#pricing-Tabs li");
  tabs.forEach(tab => {
  tab.addEventListener("click", function (e) {
  e.preventDefault();
  tabs.forEach(t => t.classList.remove("active"));
  document.querySelectorAll(".tab-contents").forEach(c => c.classList.remove("active"));
  this.classList.add("active");
  const tabId = this.dataset.tab;
  const activeContent = document.querySelector(tabId);
  if (activeContent) {
    activeContent.classList.add("active");
    initAllVisibleSliders(); // reinitialize
  }
  });
  });
});
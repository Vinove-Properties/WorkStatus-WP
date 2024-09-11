/* Menu Functions */
function navFunction() {
  var e = document.getElementById("topnav");
  "top_nav" === e.className ? (e.className += " responsive") : (e.className = "top_nav");

  var f = document.getElementById("ws-cmn-filter");
  "cmn-filter" === f.className ? (f.className += " mob-show") : (f.className = "cmn-filter");  
}

function showProductItem() {
  var e = document.getElementById("productsitem");
  "dropdown" === e.className ? (e.className += " open") : (e.className = "dropdown");
}
function showFeatureItem() {
  var e = document.getElementById("featuresitem");
  "dropdown" === e.className ? (e.className += " open") : (e.className = "dropdown");
}
function showHowitworkItem() {
  var e = document.getElementById("howitworksitem");
  "dropdown how-works" === e.className ? (e.className += " open") : (e.className = "dropdown how-works");
}
function showAppsItem() {
  var e = document.getElementById("apps");
  "dropdown" === e.className ? (e.className += " open") : (e.className = "dropdown");
}
function showWorkstatusItem() {
  var e = document.getElementById("whyWorkstatus");
  "dropdown dropdown-2" === e.className ? (e.className += " open") : (e.className = "dropdown dropdown-2");
}
function showProductItem() {
  var e = document.getElementById("productsitem");
  "dropdown dropdown-2" === e.className ? (e.className += " open") : (e.className = "dropdown dropdown-2");
}

// for header sticky
window.addEventListener("scroll", () => {
  if (window.scrollY > 10) {
    document.getElementById("masthead").classList.add("shady");
    if( document.getElementById("ws-cmn-filter") ){
    document.getElementById("ws-cmn-filter").classList.add("shady");  
    }     
  }else{
    document.getElementById("masthead").classList.remove("shady");
    if( document.getElementById("ws-cmn-filter") ){
      document.getElementById("ws-cmn-filter").classList.remove("shady");
    }
  }
});


// Sticky side Bar options

var $window = window,
    buyerGiude = document.getElementById("single");
if (buyerGiude) {
    var stickybuyers = document.getElementById("stickyImg"),
    buyersAns = document.getElementById("left-content");
    if( buyersAns ){
    window.addEventListener("scroll", function () {
        if (screen.width > 991) {
            var e = buyersAns.getBoundingClientRect().top + window.scrollY;
            if(document.documentElement.scrollTop>1300){
              stickybuyers.classList.add("sticky");
            }
            else{
              stickybuyers.classList.remove("sticky");
            }
            //document.documentElement.scrollTop > e - 100 ? stickybuyers.classList.add("sticky") : stickybuyers.classList.remove("sticky");
            var t = buyersAns.offsetHeight;
            t += parseInt(window.getComputedStyle(buyersAns).getPropertyValue("margin-top"));
            var n = e + (t += parseInt(window.getComputedStyle(buyersAns).getPropertyValue("margin-bottom")));
            document.documentElement.scrollTop + (stickybuyers.offsetHeight + 20) > n ? stickybuyers.classList.add("btomfixed") : stickybuyers.classList.remove("btomfixed");
        } else stickybuyers.classList.remove("sticky"), stickybuyers.classList.remove("btomfixed");
    });
    }
}



function setoptValue( val, label, input, parent_col, url){
	window.location.href = url;
}
function apnSelect(target){
let divTarget   = document.getElementById( target );
let arrow       = divTarget.getElementsByClassName('arrow-btn');
let select      = divTarget.getElementsByClassName('in-options');   
arrow[0].classList.toggle('rotate');
select[0].classList.toggle('open-close');
}

/*Nitin Baluni : Script*/
function tax_filter( term_id, taxonomy, taxName ){
  document.body.classList.add('ajx-loader');
  var containerDiv = document.getElementsByClassName('blog-wrap');
  var divElm = containerDiv[0];
  divElm.innerHTML = "";
  apnSelect("tg-"+taxonomy);
  let lblFld      = document.getElementById("lbl-"+taxonomy);
  let wsPaginate  = document.getElementById("ws-paginate");
  if( taxonomy == "feature" ){
    let inFeture    = document.getElementById("hd-feature-input");
    inFeture.value = term_id;
    //document.getElementById("lbl-industrie").innerHTML = "Industry";
  }else{
    let inIndustry  = document.getElementById("hd-industry-input");  
    inIndustry.value = term_id;
    //document.getElementById("lbl-feature").innerHTML = "Feature";
  }
  lblFld.innerHTML = taxName;
  var xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function () {
  //document.body.classList.remove('ajx-loader');  
  if (this.readyState != 4) return;
  if (this.status == 200) {  
  divElm.innerHTML = this.responseText;
  wsPaginate.style.display = "none";
  }
  };
  let fetureID      = document.getElementById("hd-feature-input").value;
  let industryID    = document.getElementById("hd-industry-input").value;
  xhr.open('GET', wsObj.admin_ajax+"?action=ws_tax_filter&feature="+fetureID+"&industry="+industryID, true);
  xhr.send();
}

document.addEventListener('click', function(event) {
  if(!event.target.matches('div.select-box, a.select-first, span.arrow-btn')) {
    [].forEach.call(document.querySelectorAll('ul.in-options.open-close'), function (el) {
      if( el.classList.contains("open-close")){
        el.classList.remove("open-close");  
      }
    });
    [].forEach.call(document.querySelectorAll('span.arrow-btn'), function (el) {
      if( el.classList.contains("rotate")){
        el.classList.remove("rotate");  
      }
    });
  }
}, false);

const showWsearch = document.getElementById("show-sbar");
if( showWsearch ){
  showWsearch.addEventListener("click", function(){
    document.getElementById("fltr-rw").style.display = 'none';
    document.getElementById("search-rw").style.display = 'block';

    document.getElementById("show-sbar").style.display = 'none';
    document.getElementById("search-close").style.display = 'block';
    
  });
}
const hideWsearch = document.getElementById("hide-sbar");
if( hideWsearch ){
  hideWsearch.addEventListener("click", function(){
    document.getElementById("fltr-rw").style.display = 'block';
    document.getElementById("search-rw").style.display = 'none';

    document.getElementById("show-sbar").style.display = 'block';
    document.getElementById("search-close").style.display = 'none';
  });
}

//Scroll function 

window.addEventListener("scroll", function () {
  document.querySelectorAll(".vcb-col-right").forEach(function (e) {
      if (document.documentElement.scrollTop >= e.getBoundingClientRect().top + window.scrollY - 100) {
          let t = e.getAttribute("id");
          let qla = document.querySelectorAll(".question-list li a");
          if (qla !== null) {
              qla.forEach(function (e) {
                  e.classList.remove("active");
              });
              //document.querySelector('.question-list li a[href="#' + t + '"]').classList.add("active");
          }
      }
  });
});

var $window = window,
  buyerGiude = document.getElementById("stickytoc");
if (buyerGiude) {
  var stickybuyers = document.getElementById("vcb-col-left"),
      buyersAns = document.getElementById("vcb-col-right");
  window.addEventListener("scroll", function () {
      if (screen.width > 991) {
          var e = buyersAns.getBoundingClientRect().top + window.scrollY;
          document.documentElement.scrollTop > e - 10 ? stickybuyers.classList.add("sticky") : stickybuyers.classList.remove("sticky");
          var t = buyersAns.offsetHeight;
          t += parseInt(window.getComputedStyle(buyersAns).getPropertyValue("margin-top"));
          var n = e + (t += parseInt(window.getComputedStyle(buyersAns).getPropertyValue("margin-bottom")));
          document.documentElement.scrollTop + (stickybuyers.offsetHeight + 20) > n ? stickybuyers.classList.add("btomfixed") : stickybuyers.classList.remove("btomfixed");
      } else stickybuyers.classList.remove("sticky"), stickybuyers.classList.remove("btomfixed");
  });
}



/*Exit Entent Popup Code Starts here*/
const CookieService = {
    setCookie(name, value, days) {
        let expires = '';
        if (days) {
            const date = new Date();
            date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
            expires = '; expires=' + date.toUTCString();
        }
        document.cookie = name + '=' + (value || '')  + expires + ';';
    },

    getCookie(name) {
        const cookies = document.cookie.split(';');

        for (const cookie of cookies) {
            if (cookie.indexOf(name + '=') > -1) {
                return cookie.split('=')[1];
            }
        }

        return null;
    }
};

const exit = e => {
    const shouldExit =
        [...e.target.classList].includes('exit-intent-popup') || // user clicks on mask
        e.target.className === 'close' || // user clicks on the close icon
        e.keyCode === 27; // user hits escape

    if (shouldExit) {
        document.querySelector('.exit-intent-popup').classList.remove('visible');
    }
};

const mouseEvent = e => {
    const shouldShowExitIntent = 
        !e.toElement && 
        !e.relatedTarget &&
        e.clientY < 10;

    if (shouldShowExitIntent) {
        document.removeEventListener('mouseout', mouseEvent);
        document.querySelector('.exit-intent-popup').classList.add('visible');

        CookieService.setCookie('exitIntentShown', true, 30);
    }
};

if (!CookieService.getCookie('exitIntentShown')) {
    setTimeout(() => {
        document.addEventListener('mouseout', mouseEvent);
        document.addEventListener('keydown', exit);
        document.querySelector('.exit-intent-popup').addEventListener('click', exit);
    }, 0);
}

function close_intform(){
  let divTarget   = document.getElementById("ws-intent-popup");
  divTarget.classList.remove('visible');
}

/*
document.addEventListener("DOMContentLoaded", function() {
  var lazyloadImages = document.querySelectorAll("img.lazy");    
  var lazyloadThrottleTimeout;
  
  function lazyload () {
    if(lazyloadThrottleTimeout) {
      clearTimeout(lazyloadThrottleTimeout);
    }    
    
    lazyloadThrottleTimeout = setTimeout(function() {
        var scrollTop = window.pageYOffset;
        lazyloadImages.forEach(function(img) {
            if(img.offsetTop < (window.innerHeight + scrollTop)) {
              img.src = img.dataset.src;
              img.classList.remove('lazy');
            }
        });
        if(lazyloadImages.length == 0) { 
          document.removeEventListener("scroll", lazyload);
          window.removeEventListener("resize", lazyload);
          window.removeEventListener("orientationChange", lazyload);
        }
    }, 20);
  }
  
  document.addEventListener("scroll", lazyload);
  window.addEventListener("resize", lazyload);
  window.addEventListener("orientationChange", lazyload);
  window.addEventListener("load", lazyload);
  window.addEventListener("load", function(){
    console.log("window loaded");
  });
});
*/

document.addEventListener("DOMContentLoaded", function() {
  var lazyloadImages;    

  if ("IntersectionObserver" in window) {
    lazyloadImages = document.querySelectorAll(".lazy");
    var imageObserver = new IntersectionObserver(function(entries, observer) {
      entries.forEach(function(entry) {
        if (entry.isIntersecting) {
          var image = entry.target;
          image.src = image.dataset.src;
          image.classList.remove("lazy");
          imageObserver.unobserve(image);
        }
      });
    });

    lazyloadImages.forEach(function(image) {
      imageObserver.observe(image);
    });
  } else {  
    var lazyloadThrottleTimeout;
    lazyloadImages = document.querySelectorAll(".lazy");
    
    function lazyload () {
      if(lazyloadThrottleTimeout) {
        clearTimeout(lazyloadThrottleTimeout);
      }    

      lazyloadThrottleTimeout = setTimeout(function() {
        var scrollTop = window.pageYOffset;
        lazyloadImages.forEach(function(img) {
            if(img.offsetTop < (window.innerHeight + scrollTop)) {
              img.src = img.dataset.src;
              img.classList.remove('lazy');
            }
        });
        if(lazyloadImages.length == 0) { 
          document.removeEventListener("scroll", lazyload);
          window.removeEventListener("resize", lazyload);
          window.removeEventListener("orientationChange", lazyload);
        }
      }, 20);
    }

    document.addEventListener("scroll", lazyload);
    window.addEventListener("resize", lazyload);
    window.addEventListener("orientationChange", lazyload);
  }
})



//popup script//
var contentPopup = document.getElementById('contentPopup');
var btn = document.getElementById("myBtn");
var span = document.getElementsByClassName("close")[0];
if (btn) {
	btn.onclick = function() {
		contentPopup.style.display = "block";
	}
}
if (span) {
	span.onclick = function() {
		contentPopup.style.display = "none";
	}
}


window.onclick = function(event) {
	if (event.target == contentPopup) {
		contentPopup.style.display = "none";
	}
}


var newsletterPopup = document.getElementById('newsletterPopup');
let btn2 = document.getElementById("myBtn2");

if (btn2) {
	btn2.onclick = function() {
		newsletterPopup.style.display = "block";
	}
}


function closeNewsLetter(elm) {
  //alert("Bingoo");
	let clelm = document.getElementById(elm);
	clelm.style.display = "none";
}


window.onclick = function(event) {
	if (event.target == newsletterPopup) {
		newsletterPopup.style.display = "none";
	}
}

function showIntoVideo(){
  var elm = document.getElementById("sgl-vpop");
  if( elm ){
    elm.style.display = "block";    
    let e = document.getElementById("sgl-video").getAttribute("data-src");
    document.getElementById("sgl-video").setAttribute("src", e);
  }
}

function gblClosePopup(elm){
  var elmClose = document.getElementById(elm);
  if( elmClose ){
    document.getElementById("sgl-video").setAttribute("src", "");
    elmClose.style.display = "none";
  }
}


/*UTM Tracking*/
function utm_getQueryParams() {
    const params = {};
    const queryString = window.location.search.substring(1);
    const queryArray = queryString.split("&");
    queryArray.forEach(function(item) {
        const [key, value] = item.split("=");
        params[key] = decodeURIComponent(value);
    });
    return params;
}

function utm_setCookie(name, value, days) {
    const date = new Date();
    date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
    const expires = "expires=" + date.toUTCString();
    document.cookie = name + "=" + value + ";" + expires + ";path=/";
}

const params    = utm_getQueryParams();
const utmParams = ['utm_source', 'utm_medium', 'utm_campaign', 'utm_content', 'utm_term', 'r_id' ];
const utmValues = {};

utmParams.forEach(param => {
if (params[param]) {
    if( param === "r_id" ){
    utm_setCookie("ws_reftoken", params[param], 1);    
    }else{
    utm_setCookie(param, params[param], 1);    
    }
    
}
});

function utm_getCookie(name) {
    const value = `; ${document.cookie}`;
    const parts = value.split(`; ${name}=`);
    if (parts.length === 2) return parts.pop().split(';').shift();
}

utmParams.forEach(param => {
    const value = utm_getCookie(param);
    if (value) {
        utmValues[param] = value;
    }
});
utmValues['utm_term'] = document.body.getAttribute('data-url');
function generateUtmLink(baseUrl, utmParams) {
    const url = new URL(baseUrl);
    Object.keys(utmParams).forEach(param => {
        if( utmValues[utmParams[param]] ){
            url.searchParams.append(utmParams[param], utmValues[utmParams[param]]);    
        }        
    });
    return url.toString();
}
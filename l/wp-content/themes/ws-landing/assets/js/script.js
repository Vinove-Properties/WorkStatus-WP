function gliderDoAutoPlay(glider, selector, delay = 2000, repeat = true) {
  let autoplay        = null;
  const slidesCount   = glider.track.childElementCount;
  let nextIndex       = 1;
  let pause           = true;
  function slide() {
  autoplay = setInterval(() => {
      if (nextIndex >= slidesCount) {
          if (!repeat) {
              clearInterval(autoplay);
          } else {
              nextIndex = 0;
          }
      }
      glider.scrollItem(nextIndex++);
  }, delay);
  }
  slide();
  var element = document.querySelector(selector);
  var videoPlayed = false;
  element.addEventListener('click', (event) => { 
      clearInterval(autoplay);
      pause = false;
      videoPlayed = true;
  }, 300);

  element.addEventListener('mouseover', (event) => {
  if(pause && ( videoPlayed === false) ) {
      clearInterval(autoplay);
      pause = false;
  }
  }, 300);

  element.addEventListener('mouseout', (event) => {
  if (!pause && ( videoPlayed === false)) {
      slide();
      pause = true;
  }
  }, 300);
}


//  sticky header
document.addEventListener("scroll", () => {
    // console.log("scroll called")
    if (window.scrollY > 10) {
        mainHeader.classList.add("bg");
    } else {
        mainHeader.classList.remove("bg");
    }
  });

// glider testimonial Section
  window.addEventListener("load", function() {
    /*
    document.querySelector(".customer-testimonial-slider .glider").addEventListener("glider-slide-visible",
    function(event) {
    var glider = Glider(this);
    });
    */
    
    var glider = new Glider(document.querySelector(".customer-testimonial-slider .glider"), {
      slidesToShow: 4,
      slidesToScroll: 1,
      draggable: true,
      scrollLock: false,
      dots: ".customer-testimonial-slider .dots",
      dragDistance: false,
      responsive: [{
              breakpoint: 320,
              settings: {
                  slidesToShow: 1,
                  slidesToScroll: 1,
                  duration: 0.25
              }
          },
          {
              breakpoint: 767,
              settings: {
                  slidesToShow: 2,
                  slidesToScroll: 1,
                  itemWidth: 150,
                  duration: 0.25
              }
          },
          {
              breakpoint: 1024,
              settings: {
                  slidesToShow: 3,
                  slidesToScroll: 1,
                  itemWidth: 150,
                  duration: 0.25
              }
          },
          {
              breakpoint: 1400,
              settings: {
                  slidesToShow: 3,
                  slidesToScroll: 1,
                  itemWidth: 150,
                  duration: 0.25
              }
          },
      ]
    });
    gliderDoAutoPlay(glider,'.customer-testimonial-slider .glider', 5000 );      
    });
    



//Popup Script

var formPopup   = document.getElementById('formPopup');
var spanClose   = document.getElementsByClassName("closeicon")[1];
function popup( bClass = 'rq-demo' ){
    document.body.classList.remove("rq-demo");
    document.body.classList.remove("rq-call");

    document.getElementById('myhiddenid').value='1';
    document.body.classList.add(bClass);
    formPopup.style.display = "block";    
}

function six_popup( bClass = 'rq-demo' ){
    let form   = document.getElementById('bookdemo');
    document.body.classList.remove("rq-demo");
    document.body.classList.remove("rq-call");    
    form.classList.remove("demo-footer-form");
    formPopup.style.display = "block";
    document.getElementById('myhiddenid').value='1';
    document.body.classList.add(bClass);
    
}

if( spanClose ){
  spanClose.onclick = function(){
  document.getElementById('myhiddenid').value='1';
    formPopup.style.display = "none";
    formPopup.classList.remove("is-active");
  }
}
    

window.onclick = function(event) {
    if (event.target == formPopup) {
        formPopup.style.display = "none";
    }
    
}


//Learn Everything Tab Script start from here//

// Define variables
var tabLabels = document.querySelectorAll("#tabs li");
var tabPanes = document.getElementsByClassName("tab-contents");

function activateTab(e) {
  e.preventDefault();
  
  // Deactivate all tabs
  tabLabels.forEach(function(label, index){
    label.classList.remove("active");
  });
  [].forEach.call(tabPanes, function(pane, index){
    pane.classList.remove("active");
  });
  
  // Activate current tab
  e.target.parentNode.classList.add("active");
  var clickedTab = e.target.getAttribute("href");
  document.querySelector(clickedTab).classList.add("active");
}

// Apply event listeners
tabLabels.forEach(function(label, index){
  label.addEventListener("click", activateTab);
});


//pricing Tab Script

var pricetabLabels = document.querySelectorAll("#pricetabs li");
var pricetabPanes = document.getElementsByClassName("pricing-contents");

function activatepricingTab(e) {
  e.preventDefault();
  
  // Deactivate all tabs
  pricetabLabels.forEach(function(label, index){
    label.classList.remove("active");
  });
  [].forEach.call(pricetabPanes, function(pane, index){
    pane.classList.remove("active");
  });
  
  // Activate current tab
  e.target.parentNode.classList.add("active");
  var priceclickedTab = e.target.getAttribute("href");
  document.querySelector(priceclickedTab).classList.add("active");
}

// Apply event listeners
pricetabLabels.forEach(function(label, index){
  label.addEventListener("click", activatepricingTab);
});



//Signup Form Popup


var signupformPopup   = document.getElementById('signupformPopup');
var spanClosef   = document.getElementsByClassName("closeicon-sg")[0];
function signup(){
  signupformPopup.style.display = "block";    
}

if( spanClosef ){
    spanClosef.onclick = function() {
      signupformPopup.style.display = "none";
      signupformPopup.classList.remove("is-active");
    }
}



const hasHwUseIN = document.getElementById("has-ws-timetrack");
if( hasHwUseIN ){
  var faqItem = document.getElementsByClassName("track-accordion-item-outer");
  var faqHD   = document.getElementsByClassName("track-accordion-toggle");
  for (i = 0; i < faqHD.length; i++) {
      faqHD[i].addEventListener("click", hwToggleFaqItem, false);
  }
  function hwToggleFaqItem(){
      if( this.parentNode.classList.contains('active') ){
          this.parentNode.className = "track-accordion-item-outer";
          return;
      }
      //let itemClass = this.parentNode.className;
      for (i = 0; i < faqItem.length; i++) {
          faqItem[i].className = "track-accordion-item-outer";
      }    
      if (this.parentNode.className == "track-accordion-item-outer") {        
          this.parentNode.className = "track-accordion-item-outer active";
      }
  }
}
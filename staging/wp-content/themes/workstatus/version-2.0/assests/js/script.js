
//Menu Script Start//
function vmRestDefault(){
    let allArrow = document.querySelectorAll(".arrow-btn");
    if( allArrow ){
        [].forEach.call(allArrow, function(el) {
            el.classList.remove("rot");
        });    
    }
    
    let allMM = document.querySelectorAll(".menu-mega");
    if( allMM ){
        [].forEach.call(allMM, function(el) {
            el.classList.remove("m-active");
        });    
    }
}

function vmRestSerDefault(){
    let allArrow = document.querySelectorAll(".ser-arrow-btn");
    if( allArrow ){
        [].forEach.call(allArrow, function(el) {
            el.classList.remove("rot");
        });
    }
    
    let allMM = document.querySelectorAll(".sub-service");
    if( allMM ){
        [].forEach.call(allMM, function(el){
            el.classList.remove("m-active");
        });
    }
}

function vmRestTechDefault(){
    let allArrow = document.querySelectorAll(".ind-arrow-btn");
    if( allArrow ){
        [].forEach.call(allArrow, function(el) {
            el.classList.remove("rot");
        });
    }
    
    let allMM = document.querySelectorAll(".sub-ind");
    if( allMM ){
        [].forEach.call(allMM, function(el){
            el.classList.remove("m-active");
        });
    }
}

function vmRestHireDefault(){
    let allArrow = document.querySelectorAll(".hr-arrow-btn");
    if( allArrow ){
        [].forEach.call(allArrow, function(el) {
            el.classList.remove("rot");
        });
    }
    
    let allMM = document.querySelectorAll(".hr-submenu");
    if( allMM ){
        [].forEach.call(allMM, function(el){
            el.classList.remove("m-active");
        });
    }
}

function vmRestSubDefault(){
    let allArrow = document.querySelectorAll(".list-item .arrow-btn");
    if( allArrow ){
        [].forEach.call(allArrow, function(el) {
            el.classList.remove("rot");
        });    
    }

    let allsevenfive = document.querySelectorAll(".width-75");
    if( allsevenfive ){
        [].forEach.call(allsevenfive, function(el) {
            el.style.display = "none";
        });    
    }    
}

(function(){
    if( isMobileDevice() ){
        let deskOnly = document.querySelectorAll(".od-row");
        deskOnly.forEach(function(elm){
            elm.innerHTML = "";
        });
        document.body.classList.add('vc-is-mobile');    
        document.addEventListener('click', event => {
            const hMenu = document.getElementsByClassName("hamberger-menu")[0];
            if(event.target.classList.contains('arrow-btn')){
                if( event.target.nextElementSibling ){
                    if( event.target.classList.contains('rot') ){
                        event.target.classList.remove("rot");
                        event.target.nextElementSibling.classList.remove("m-active");
                    }else{
                        vmRestDefault();
                        event.target.classList.add("rot");
                        event.target.nextElementSibling.classList.add("m-active");    
                    }                    
                }else{
                    let inArrow = event.target.dataset.tget;
                    if( (inArrow !== "") && document.getElementById(inArrow) ){
                        if( event.target.classList.contains('rot') ){
                            event.target.classList.remove("rot");
                            document.getElementById(inArrow).style.display = "none";
                        }else{
                            vmRestSubDefault();
                            event.target.classList.add("rot");
                            document.getElementById(inArrow).style.display = "block";
                            //hMenu.style.zIndex = "0";
                        }
                    }                    
                }
            }

            if(event.target.classList.contains('hr-arrow-btn')){
                let hrLinkRow = event.target.parentElement.nextElementSibling;
                if( hrLinkRow ){
                    if( event.target.classList.contains('rot') ){
                        event.target.classList.remove("rot");
                        hrLinkRow.classList.remove("m-active");
                    }else{
                        vmRestHireDefault();
                        event.target.classList.add("rot");
                        hrLinkRow.classList.add("m-active");    
                    }
                }                
            }

            if(event.target.classList.contains('ser-arrow-btn')){
                let serLinkRow = event.target.parentElement.nextElementSibling;
                if( serLinkRow ){
                    if( event.target.classList.contains('rot') ){
                        event.target.classList.remove("rot");
                        serLinkRow.classList.remove("m-active");
                    }else{
                        vmRestSerDefault();
                        event.target.classList.add("rot");
                        serLinkRow.classList.add("m-active");    
                    }
                }                
            }



            if(event.target.classList.contains('ind-arrow-btn')){
                let techLinkRow = event.target.parentElement.nextElementSibling;
                if( techLinkRow ){
                    if( event.target.classList.contains('rot') ){
                        event.target.classList.remove("rot");
                        techLinkRow.classList.remove("m-active");
                    }else{
                        vmRestTechDefault();
                        event.target.classList.add("rot");
                        techLinkRow.classList.add("m-active");    
                    }
                }                
            }

            if(event.target.classList.contains('mback')){
                vmRestSubDefault();                
                //hMenu.style.zIndex = "999";
            }
        });
    }else{
        let tabs = document.getElementsByClassName("text-column");
        for (j = 0; j < tabs.length; j++) {
        tabs[j].addEventListener("mouseover", clickTab);
        }

        function clickTab(e) {
        var tabID = e.currentTarget.id;
        var inSection = e.currentTarget.getAttribute("data-section");
        var pageID = tabID.replace("a", "b");
        var pages = document.getElementById(inSection).getElementsByClassName("header-menu");
        var intabs = document.getElementById(inSection).getElementsByClassName("text-column");
        for (i = 0; i < pages.length; i++) {
        intabs[i].classList.remove("active");
        pages[i].classList.remove("active");
        }
        e.currentTarget.classList.add("active");
        let pActive = "mrow mrow-" + e.currentTarget.getAttribute("data-mrow");
        let masCol = document.getElementsByClassName(pActive).item(0);
        if (masCol) {
        masCol.classList.add("active");
        }
        var currentPage = document.querySelector("#" + pageID);
        currentPage.classList.add("active");
        }
    }
})();

// header




document.addEventListener("DOMContentLoaded", function () {
    if(document.querySelector(".header-two")) {
    let faqContainers   = document.getElementsByClassName("hamberger-menu");
    let faqToggle       = document.getElementsByClassName("mob-nav")[0];
    for (var i = 0; i < faqContainers.length; i++) {
        faqContainers[i].addEventListener("click", function (){            
            faqToggle.classList.toggle("active");
        });
    }
    }
});


function submenu(){
    var x = document.getElementById("dropdownmwrap");
    var y = document.getElementById("dropdownmwrap1");
    if( x.style.display === "block" ){
        x.style.display = "none";
        y.style.display = "block";
    }else{
        x.style.display = "block";
        y.style.display = "none";
    }
}
function submenuback() {
    var x = document.getElementById("dropdownmwrap");
    var y = document.getElementById("dropdownmwrap1");
    x.style.display = "none";
    y.style.display = "block";
}

function innermenu(e, id){
	var sm = document.getElementById(id);
	e.classList.toggle('active');
	if (sm.style.display === "block") {
	  sm.style.display = "none";
	} else {
	  sm.style.display = "block";
  }
}
if(document.querySelector(".hamberger-menu")){
    document.querySelector('.hamberger-menu').onclick = function (e) {
    	var nav = document.querySelector('.hamberger-menu');
    	nav.classList.toggle('open-close');
        vmRestDefault();
        vmRestHireDefault();
        vmRestSerDefault();
        vmRestSubDefault();
    	e.preventDefault();
    }
}


function isMobileDevice(){ 
    const userAgent = navigator.userAgent || navigator.vendor || window.opera;
    const regex = /Mobi|Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i;
    if (/iPad|Macintosh/i.test(userAgent) && 'ontouchend' in document) { 
        console.log("iPad");
        return true;
    }
    return regex.test(navigator.userAgent);
}

function vmRestDefault(){
    let allArrow = document.querySelectorAll(".arrow-btn");
    if( allArrow ){
        [].forEach.call(allArrow, function(el) {
            el.classList.remove("rot");
        });    
    }
    
    let allMM = document.querySelectorAll(".menu-mega");
    if( allMM ){
        [].forEach.call(allMM, function(el) {
            el.classList.remove("m-active");
        });    
    }
}

(function() {
    "use strict";

    // Tabs component function
    var tabsComponent = function(options) {
        var container = document.querySelector(options.el), // Select the main container
            tabLinks = container.querySelectorAll(options.tabNavigationLinks), // Select all tab navigation links
            tabContents = container.querySelectorAll(options.tabContentContainers), // Select all tab content containers
            currentIndex = 0, // Initialize to the first tab
            initialized = false, // Flag to check if the component has been initialized

            // Function to handle mouseover event on tabs
            addHoverEvent = function(tabLink, index) {
                if (!isMobileDevice()) { // If not a mobile device, add the hover event
                    tabLink.addEventListener("mouseover", function(event) {
                        event.preventDefault(); // Prevent default behavior
                        switchTab(index); // Switch to the tab on hover
                    });
                }
            },

            // Function to switch to a different tab
            switchTab = function(index) {
                if (index !== currentIndex && index >= 0 && index < tabLinks.length) {
                    // Remove the active class from the current tab and its content
                    tabLinks[currentIndex].classList.remove("is-active");
                    tabContents[currentIndex].classList.remove("is-active");

                    // Add the active class to the new tab and its content
                    tabLinks[index].classList.add("is-active");
                    tabContents[index].classList.add("is-active");

                    // Update the currentIndex to the new tab
                    currentIndex = index;
                }
            };

        // Return an object with init and goToTab methods
        return {
            init: function() {
                if (!initialized) { // If not already initialized
                    initialized = true; // Set the initialized flag
                    container.classList.remove("no-js"); // Remove the no-js class from the container

                    // Find the initially active tab and set currentIndex
                    for (var i = 0; i < tabLinks.length; i++) {
                        if (tabLinks[i].classList.contains("is-active")) {
                            currentIndex = i; // Set the current index to the active tab
                        }
                        addHoverEvent(tabLinks[i], i); // Add hover events to all tab links
                    }
                }
            },
            goToTab: switchTab, // Public method to switch tabs
        };
    };

    // Attach the tabs component to the global window object
    window.tabs = tabsComponent;
})();


const menuElm = ["menu-serv", "mnu-sol", "menu-inds", "mnu-tech", "mnu-hire"];
menuElm.forEach(function(elm){
  if(document.getElementById(elm)){
    var e = tabs({el:"#"+elm, tabNavigationLinks:".tab-link",tabContentContainers:".tab-content"});
    e.init();
  }
});



/*Menu Active COde */
const menuItemElm   = document.querySelectorAll('.menu-item-has-children');
const anchorsLnk    = document.querySelectorAll('a.mst-link');
function addClass() {
    anchorsLnk.forEach(anchor => anchor.classList.remove('active'));
    this.classList.add('active');
}

function removeActiveClass() {
    setTimeout(() => {
    if(!document.querySelector('.menu-item-has-children:hover')){
        anchorsLnk.forEach(anchor => anchor.classList.remove('active'));
    }
    }, 100);
}
if( anchorsLnk ){
    anchorsLnk.forEach(anchor => {
        anchor.addEventListener('mouseover', addClass);    
    });    
}

if( menuItemElm ){
    menuItemElm.forEach(item => {
        item.addEventListener('mouseleave', removeActiveClass);
    });
}


//Menu Script Ends//






function playTetiVideo( iframeID, vsource, e){
    let allArrow = document.querySelectorAll(".yt-player");
    if( allArrow ){
        [].forEach.call(allArrow, function(el) {
            el.style.display = "none";
            el.setAttribute("src", "");
        });    
    }

    let cVideo = document.querySelectorAll(".client-videos");
    if( cVideo ){
        [].forEach.call(cVideo, function(el) {
            el.classList.remove = "active";
        });    
    }
    let thisCol = document.getElementById("cvbox-"+iframeID);
    thisCol.classList.add = "active";
    
    let thisFrame = document.getElementById("ytiframe-"+iframeID);
    thisFrame.style.display = "block";
    thisFrame.setAttribute("src", vsource);   
}


// client slider
window.addEventListener("load", function (){
    if(document.querySelector(".testimonial-slider")){
    document.querySelector(".testimonial-slider .glider").addEventListener("glider-slide-visible", 
    function (event) {
    Glider(this);
    });
    var clGlider = new Glider(document.querySelector(".testimonial-slider .glider"), {
        slidesToShow: 1,
        slidesToScroll: 1,
        draggable: true,
        scrollLock: false,
        dots: ".testimonial-slider .dots",
        dragDistance: false,
        responsive: [
            { breakpoint: 1024, settings: { slidesToShow: 1, slidesToScroll: 1, itemWidth: 150, duration: 0.25 } },
        ],
    });
    
    }
    
});



    
        

  

// pricing table on Mobile show//
function mobileTable(data,id) {
    data.classList.toggle("active");
	var element = document.getElementById(id);
	element.classList.toggle("open");
 } 

// Banner Contact Button//
function myChat() {
	var element = document.getElementById("myContacts");
	element.classList.toggle("open");
 } 
 
// tabs//
var tabLabels   = document.querySelectorAll("#tabs li");
var tabPanes    = document.getElementsByClassName("tab-contents");

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

// tabs end//


//var faqItem = document.getElementsByClassName("faq-accordion-item-outer"),
    //faqHD = document.getElementsByTagName("h3");
//for (i = 0; i < faqHD.length; i++) faqHD[i].addEventListener("click", toggleFaqItem, !1);
//function toggleFaqItem() {
    //var e = this.parentNode.className;
    //for (i = 0; i < faqItem.length; i++) faqItem[i].className = "faq-accordion-item-outer";
    //"faq-accordion-item-outer" == e && (this.parentNode.className = "faq-accordion-item-outer open");
//}


// faq
var faqItem = document.getElementsByClassName("faq-accordion-item-outer");
var faqHD   = document.getElementsByTagName("h3");
for (i = 0; i < faqHD.length; i++) {
    faqHD[i].addEventListener("click", toggleFaqItem, false);
}
function toggleFaqItem() {
    //let itemClass = this.parentNode.className;    
    for (i = 0; i < faqItem.length; i++) {
        faqItem[i].className = "faq-accordion-item-outer";
    }
    if (this.parentNode.className == "faq-accordion-item-outer") {
        this.parentNode.className = "faq-accordion-item-outer open";
    }
}


window.addEventListener("scroll", function () {
    document.querySelectorAll(".buyers-guide-answer").forEach(function (e) {
        if (document.documentElement.scrollTop >= e.getBoundingClientRect().top + window.scrollY - 100) {
            let t = e.getAttribute("id");
            document.querySelectorAll(".question-list li a").forEach(function (e) {
                e.classList.remove("active");
            }),
                document.querySelector('.question-list li a[href="#' + t + '"]').classList.add("active");
        }
    });
});
var scrolly =
        window.requestAnimationFrame ||
        function (e) {
            window.setTimeout(e, 1e3 / 60);
        },
    elementsToShow = document.querySelectorAll("section, .img-box, .h1, .h2, .glider-contain");
function loop() {
    Array.prototype.forEach.call(elementsToShow, function (e) {
        isElementInViewport(e) && e.classList.add("post-animation");
    }),
        scrolly(loop);
}
function isElementInViewport(e) {
    "function" == typeof jQuery && e instanceof jQuery && (e = e[0]);
    var t = e.getBoundingClientRect();
    return (
        (t.top <= 0 && t.bottom >= 0) ||
        (t.bottom >= (window.innerHeight || document.documentElement.clientHeight) && t.top <= (window.innerHeight || document.documentElement.clientHeight)) ||
        (t.top >= 0 && t.bottom <= (window.innerHeight || document.documentElement.clientHeight))
    );
}
loop();
var gliderOne = document.getElementsByClassName("glider");
gliderOne &&
window.addEventListener("load", function () {
    new Glider(document.querySelector(".glider"), { slidesToShow: 1, dots: ".dots", draggable: !1, itemWidth: 100, duration: 1, arrows: { prev: ".glider-prev", next: ".glider-next" } });
});

var gliderTwo = document.getElementsByClassName("glider2");
function hideTopBar() {
    document.getElementById("offter-top").remove(), (document.body.className += "barremoved");
}

if (screen && screen.width > 768) {
    var gliderPress = document.getElementsByClassName("press-glider");
    gliderPress &&
        window.addEventListener("load", function () {
            new Glider(document.querySelector(".press-glider"), { slidesToShow: 3, dots: ".dots", draggable: !3, itemWidth: 100, duration: 1, arrows: { prev: ".glider-prev", next: ".glider-next" } });
        });
      
}

if (screen && screen.width < 768) {
    var gliderPress = document.getElementsByClassName("press-glider");
    gliderPress &&
        window.addEventListener("load", function () {
            new Glider(document.querySelector(".press-glider"), { slidesToShow: 1, dots: ".dots", draggable: !1, itemWidth: 100, duration: 1, arrows: { prev: ".glider-prev", next: ".glider-next" } });
        });
      
}
  

function navFunction() {
    var e = document.getElementById("topnav");
    "top_nav" === e.className ? (e.className += " responsive") : (e.className = "top_nav");
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
function showReleaseNotes() {
    var e = document.getElementById("showallnotes");
    "allnotes" === e.className ? (e.className += " open") : (e.className = "allnotes");
    var t = document.getElementById("notebutton");
    "Show Release Notes..." == t.innerHTML ? (t.innerHTML = "Hide Release Notes...") : (t.innerHTML = "Show Release Notes...");
}
function legalDocuments(e, t) {
    var n, o, s;
    for (o = document.getElementsByClassName("tabcontent"), n = 0; n < o.length; n++) o[n].style.display = "none";
    for (s = document.getElementsByClassName("tablinks"), n = 0; n < s.length; n++) s[n].className = s[n].className.replace(" active", "");
    (document.getElementById(t).style.display = "block"), (e.currentTarget.className += " active");
}
gliderTwo &&
    window.addEventListener("load", function () {
        new Glider(document.querySelector(".glider2"), { slidesToShow: 1, dots: ".dots2", draggable: !1, itemWidth: 100, duration: 1, arrows: { prev: ".glider-prev", next: ".glider-next" } });
    }),
    window.addEventListener("scroll", () => {
        window.scrollY > 10 ? document.getElementById("masthead").classList.add("shady") : document.getElementById("masthead").classList.remove("shady");
    }),
    (function () {
        "use strict";
        window.tabs = function (e) {
            var t = document.querySelector(e.el),
                n = t.querySelectorAll(e.tabNavigationLinks),
                o = t.querySelectorAll(e.tabContentContainers),
                s = 0,
                a = !1,
                i = function (e, t) {
                    e.addEventListener("click", function (e) {
                        e.preventDefault(), r(t);
                    });
                },
                r = function (e) {
                    e !== s && e >= 0 && e <= n.length && (n[s].classList.remove("is-active"), n[e].classList.add("is-active"), o[s].classList.remove("is-active"), o[e].classList.add("is-active"), (s = e));
                };
            return {
                init: function () {
                    if (!a) {
                        (a = !0), t.classList.remove("no-js");
                        for (var e = 0; e < n.length; e++) {
                            var o = n[e];
                            i(o, e);
                        }
                    }
                },
                goToTab: r,
            };
        };
    })();
var tabExists = document.getElementById("tabs1");
if (tabExists) {
    var myTabs1 = tabs({ el: "#tabs1", tabNavigationLinks: ".tab-link", tabContentContainers: ".tab-content" });
    myTabs1.init();
}
var tabs = document.getElementsByClassName("text-column");
for (j = 0; j < tabs.length; j++) tabs[j].addEventListener("mouseover", clickTab);
function clickTab(e) {
    var t = e.currentTarget.id,
        n = e.currentTarget.getAttribute("data-section"),
        o = t.replace("t", "p"),
        s = document.getElementById(n).getElementsByClassName("page"),
        a = document.getElementById(n).getElementsByClassName("text-column");
    for (i = 0; i < s.length; i++) a[i].classList.remove("active"), s[i].classList.remove("active");
    e.currentTarget.classList.add("active"), document.querySelector("#" + o).classList.add("active");
}


var $window = window,
    buyerGiude = document.getElementById("div-buyer-guide");
if (buyerGiude) {
    var stickybuyers = document.getElementById("buyers-guide-question"),
        buyersAns = document.getElementById("buyers-guide-answer-part");
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


//Video Script
var hasYTvideo = document.getElementById("has-yt-video");
if( hasYTvideo ){
    var tag = document.createElement("script");
    tag.src = "//www.youtube.com/player_api";
    var player,
    firstScriptTag = document.getElementsByTagName("script")[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
    var ytPlayButton = document.getElementById("play-button");
    function onPlayerReady(e){ 
        let osHomePage = document.getElementsByClassName("page__home")[0];
        if( !osHomePage ){
            document.getElementById("myDIV").classList.remove("contbox2");       
        }
        //document.getElementById("myDIV").classList.remove("contbox2"),
        player.playVideo();
    }
    ytPlayButton.addEventListener("click", function () {
        let e = document.getElementById("video").getAttribute("data-src");
        document.getElementById("video").setAttribute("src", e), (player = new YT.Player("video", { events: { onReady: onPlayerReady } }));
    });

    var contentPopup    = document.getElementById('contentPopup');
    var btn             = document.getElementById("myBtn");
    var span            = document.getElementsByClassName("close")[0];
    if( contentPopup ){
    btn.onclick = function() {        
        contentPopup.style.display = "block";
        let e = 'https://www.youtube.com/embed/TcRTredWxRs?enablejsapi=1&html5=1&mute=1';
        document.getElementById("video").setAttribute("src", e), (player = new YT.Player("video", { events: { onReady: onPlayerReady } }));
    }
    span.onclick = function(){
        contentPopup.style.display = "none";
    }
    window.onclick = function(event) {
        if (event.target == contentPopup) {
            contentPopup.style.display = "none";
        }
    }    
    }
    
} 

//Feature Popup Script//

var featurePopup   = document.getElementById('featurePopup');
var spanClosef   = document.getElementsByClassName("closeicon")[1];
function feature_demows(){
    featurePopup.style.display = "block";    
}

if( spanClosef ){
    spanClosef.onclick = function() {
        featurePopup.style.display = "none";
        featurePopup.classList.remove("is-active");
    }
}


//Feature Popup Script End//

var formPopup   = document.getElementById('formPopup');
var formbtn     = document.getElementById("myBtn2");
var spanClose   = document.getElementsByClassName("closeicon")[0];
function call_demows(){
    formPopup.style.display = "block";    
}

if( spanClose ){
    spanClose.onclick = function() {
        formPopup.style.display = "none";
        formPopup.classList.remove("is-active");
    }
}
    

window.onclick = function(event) {
    if (event.target == formPopup) {
        formPopup.style.display = "none";
    }
}

//Form validation
function validation(){ 
    var fname = document.forms["myForm"]["fname"].value;
    var lname = document.forms["myForm"]["lname"].value;
    var email = document.forms["myForm"]["email"].value;
    var phone = document.forms["myForm"]["phone"].value;
       
      if (fname == "") {
        document.getElementById('errorf').innerHTML="Please enter a firstname";
        return false;
      }
      if (lname == "") {
        document.getElementById('errorl').innerHTML="Please enter a lastname";
        return false;
      }
      if (email == "") {
        document.getElementById('errore').innerHTML="Please enter a email";
        return false;
      }
      if (phone == "") {
        document.getElementById('errorp').innerHTML="Please enter a phone number";
        return false;
      }
    }
    
    
    function getAllElementsWithAttribute(attribute) {
      var matchingElements = [];
      var allElements = document.getElementsByTagName('*');
      for (var i = 0, n = allElements.length; i < n; i++) {
        if (allElements[i].getAttribute(attribute) !== null) {
          // Element exists with attribute. Add to array.
          matchingElements.push(allElements[i]);
        }
      }
      return matchingElements;
    }

/*Form Validation Code Starts*/
const form      = document.getElementById('ws-lead-form');
const fname     = document.getElementById('first_name');
const lname     = document.getElementById('last_name');
const email     = document.getElementById('cont_email');
const phone     = document.getElementById('cont_phpne');
const company   = document.getElementById('company_name');
const tsize     = document.getElementById('team-size');
const ureq      = document.getElementById('ws-requirement');
const captcha   = document.getElementById('j-quiz-ans');

function vcSpaceChecker( input ){
    if( !/^[A-Za-z0-9!@#$%^&*()".,;:{}<>?\[\]\-+=' ]{1,}/.test( input ) ){
        return false;
    }else{
        return true;
    }
}

//Show input error messages
function showError(input, message, spDiv = false ) {
    //console.log(input);
    let formControl = input.parentElement;    
    let small = formControl.querySelector('span.error');    
    if( spDiv !== false ){
    small = document.getElementById(spDiv);
    }    
    formControl.classList.add('ws-error');
    small.innerText = message;
    //console.log( small );
}

function doNotingonFocus(input) {
    const formControl = input.parentElement;
    //formControl.className = 'form-group';
}

//show success colour
function showSucces(input, spDiv = false){
    let formControl = input.parentElement;
    let small       = formControl.querySelector('span.error');    
    if( spDiv !== false ){
    small = document.getElementById(spDiv);
    }
    formControl.classList.remove('ws-error');
    small.innerText = '';
}

//check email is valid
function checkEmail(input){ 
    //console.log(input);
    const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if(re.test(input.value.trim())) {
        showSucces(input)
    }else {
        if( input.value == '' ){
            showError(input,'Please Fill Email');
        }else{
            showError(input,'Email is not valid');  
        }
    }
}

function phonenumber(inputtxt){
    if( (/^[A-Za-z0123456789()\s.+-]+$/.test(inputtxt.value.trim()) && inputtxt.value.length >= 10) ){   
        showSucces( inputtxt, "phone-error" )
    }else{
        if( inputtxt.value == '' ){
            showError(inputtxt,'Please Fill Phone', "phone-error");
        }else{
            showError( inputtxt, 'Phone Number is not valid', "phone-error" );
        }
        
    }
}

fname.addEventListener("keyup", checkUseName);
fname.addEventListener("keypress", checkUseName);
fname.addEventListener("keydown", ws_validateStr);
fname.addEventListener("focusout", checkUseName);

lname.addEventListener("keyup", checkCont);
lname.addEventListener("keypress", checkCont);
lname.addEventListener("keydown", ws_validateStr);
lname.addEventListener("focusout", checkCont);

company.addEventListener("keyup", checkCompany);
company.addEventListener("keypress", checkCompany);
company.addEventListener("keydown", checkCompany);
company.addEventListener("focusout", checkCompany);

phone.addEventListener("keyup", checkPhone);
phone.addEventListener("keypress", checkPhone);
phone.addEventListener("keydown", ws_checkphonenumber);
phone.addEventListener("focusout", checkPhone);

email.addEventListener("focusout", checkEmailEvent);
captcha.addEventListener("focusout", validateMquiz);
email.addEventListener("focusin", function(){
    doNotingonFocus(email);
});

ureq.addEventListener("keyup", checkURequirement);
ureq.addEventListener("keypress", checkURequirement);
ureq.addEventListener("keydown", checkURequirement);
ureq.addEventListener("focusout", checkURequirement);
ureq.addEventListener("focusin", checkURequirement);

function checkEmailEvent(event){
    checkEmail(email);
}
function checkUseName(event){
  checkLength(fname,1,15);
}

function checkCont(event){
  checkLength(lname,1,255);
}

function checkCompany(event){
    checkLength(company,2,255);
}

function checkPhone(event){
    checkLength(phone,8,20);
    phonenumber(phone);
}

function checkURequirement(event){
    checkLength(ureq,3,1500);
}

//checkRequired fields
function checkRequired(inputArr){
    inputArr.forEach(function(input){ 
        //console.log( input.name );
        let e = input.value.trim();
        if( !/^[A-Za-z0-9!@#$%^&*()".,;:{}<>?\[\]\-+=' ]{2,}/.test(e) ){

            if( input.name == "fname" ){
                showError(input, `Please Fill First Name`);
            }else if( input.name == "phone" ){
                showError(input, `Please Fill Phone`, 'phone-error');
            }else if( input.name == "email" ){
                showError(input, `Please Fill Email`);
            }else if( input.name == "lname" ){
                showError(input, `Please Fill Last Name`);    
            }else if( input.name == "company" ){
                showError(input, `Please Fill Company Name`);    
            }else if( input.name == "team-size" ){
                showError(input, `Please select team size`);    
            }else if( input.name == "captcha" ){
                validateMquiz();
            }else{
                if( input.name == "phone" ){
                    showError(input,`This Field is required`, 'phone-error');
                }else{
                    showError(input,`This Field is required`);
                }                
            }
        }else{
            //checkLength(fname,2,15); 
            checkEmail(email);
            //checkLength(lname,1,50);
            checkLength(phone,8,20);
            if( input.name != "captcha" ){
                //showSucces(input);
            }
            validateMquiz();
        }
    });
}


//check input Length
function checkLength(input, min, max){
    //console.log(input.name);
    if(input.value.length < min){
        if( input.name == "fname"  ){            
            showError(input, `Please Fill First Name`);
        }else if( input.name == "phone" ){
            showError(input, `Please Fill Phone`, "phone-error");
        }else if( input.name == "email"  ){
            showError(input, `Please Fill Email`);
        }else if( input.name == "lname" ){
            showError(input, `Please Fill Last Name`);    
        }else{
            showError(input,`This Field is required`)   
        } 
        return false;
    }else {
        if( input.name == "phone" ){
            showSucces(input, "phone-error");
        }else{
            showSucces(input);
        }
        return true;
    }
}

function validateMquiz(){
    let que     = document.getElementById("j-quiz").textContent;
    let ans     = document.getElementById("j-quiz-ans").value;
    let qerror  = document.getElementById("captchaerror");
    if( eval(que) == ans ){
        qerror.textContent = "";
        return true;
    }else{
        qerror.textContent = "Invalid Answer";
        return false;
    }
}

//get FieldName
function vcCmnFormValidation(){
    checkRequired([email,fname, phone,lname,captcha,company,tsize,ureq]);
    if(
        ( vcSpaceChecker(email.value.trim()) === true ) &&
        ( vcSpaceChecker(fname.value.trim()) === true ) &&
        ( vcSpaceChecker(phone.value.trim()) === true ) &&
        ( vcSpaceChecker(lname.value.trim()) === true ) &&
        ( vcSpaceChecker(company.value.trim()) === true ) &&
        ( vcSpaceChecker(tsize.value.trim()) === true ) &&
        ( vcSpaceChecker(captcha.value.trim()) === true ) 
    ){
        const sre = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        if( !sre.test(email.value.trim()) ){
            return false;
        }

        if( validateMquiz() === false){
            return false;
        }

        if( checkLength(phone,8,20) === false ){
            return false;
        }

        var form    = document.getElementById("ws-lead-form");
        var formBtn = document.getElementById("submitButton");
        form.classList.add('in-process');
        formBtn.innerText = "Please wait...";
        formBtn.disabled = true;
        formBtn.classList.add('hold-on');
        //alert("doSubmit"); return false;
        form.submit(); 
    }else{
        return false;   
    }
    
}

var jQuizExists = document.getElementById("j-quiz");
if( jQuizExists ){
    generateWsQuiz();
}

function generateWsQuiz(){
    let n1 = Math.floor(Math.random() * 9) + 1;
    let n2 = Math.floor(Math.random() * 9) + 1;
    document.getElementById("j-quiz").textContent = n1 + " + " + n2;    
}

function ws_numcheck(evt, val){
    var theEvent = evt || window.event;
    if (theEvent.type === 'paste') {
      key = event.clipboardData.getData('text/plain');
    }else{
      var key = theEvent.keyCode || theEvent.which;
      key = String.fromCharCode(key);
    }

    var regex = /[0-9]|\./;
    if( !regex.test(key) || (val.value.length > 1) ){ 
        theEvent.returnValue = false;
        if(theEvent.preventDefault) theEvent.preventDefault();        
    }
}

function setoptValue( val, label, input, parent_col){
    //console.log( parent_col );
    let prDiv       = document.getElementById( parent_col );
    let arrow       = prDiv.getElementsByClassName('arrow-btn');
    let select      = prDiv.getElementsByClassName('in-options');   
    let labelSpan   = document.getElementById( label );
    let inputSpan   = document.getElementById( input );
    let erroSpan    = prDiv.getElementsByClassName('error');
    let selBox      = prDiv.getElementsByClassName('select-box');
    
    arrow[0].classList.toggle('rotate');
    select[0].classList.toggle('open-close');
    erroSpan[0].innerHTML = "";
    selBox[0].classList.remove('ws-error');
    labelSpan.innerHTML = val;
    inputSpan.value = val;
  }
  
  function apnSelect(target){
    let divTarget   = document.getElementById( target );
    let arrow       = divTarget.getElementsByClassName('arrow-btn');
    let select      = divTarget.getElementsByClassName('in-options');   
    arrow[0].classList.toggle('rotate');
    select[0].classList.toggle('open-close');
  }

    function ws_getdialCode( code ){
    let dialCode = "";
    let intlCountries = [["af","93"],["al","355"],["dz","213"],["as","1"],["ad","376"],["ao","244"],["ai","1"],["ag","1"],["ar","54"],["am","374"],["aw","297"],["au","61"],["at","43"],["az","994"],["bs","1"],["bh","973"],["bd","880"],["bb","1"],["by","375"],["be","32"],["bz","501"],["bj","229"],["bm","1"],["bt","975"],["bo","591"],["ba","387"],["bw","267"],["br","55"],["io","246"],["vg","1"],["bn","673"],["bg","359"],["bf","226"],["bi","257"],["kh","855"],["cm","237"],["ca","1"],["cv","238"],["bq","599"],["ky","1"],["cf","236"],["td","235"],["cl","56"],["cn","86"],["cx","61"],["cc","61"],["co","57"],["km","269"],["cd","243"],["cg","242"],["ck","682"],["cr","506"],["ci","225"],["hr","385"],["cu","53"],["cw","599"],["cy","357"],["cz","420"],["dk","45"],["dj","253"],["dm","1"],["do","1"],["ec","593"],["eg","20"],["sv","503"],["gq","240"],["er","291"],["ee","372"],["et","251"],["fk","500"],["fo","298"],["fj","679"],["fi","358"],["fr","33"],["gf","594"],["pf","689"],["ga","241"],["gm","220"],["ge","995"],["de","49"],["gh","233"],["gi","350"],["gr","30"],["gl","299"],["gd","1"],["gp","590"],["gu","1"],["gt","502"],["gg","44"],["gn","224"],["gw","245"],["gy","592"],["ht","509"],["hn","504"],["hk","852"],["hu","36"],["is","354"],["in","91"],["id","62"],["ir","98"],["iq","964"],["ie","353"],["im","44"],["il","972"],["it","39"],["jm","1"],["jp","81"],["je","44"],["jo","962"],["kz","7"],["ke","254"],["ki","686"],["xk","383"],["kw","965"],["kg","996"],["la","856"],["lv","371"],["lb","961"],["ls","266"],["lr","231"],["ly","218"],["li","423"],["lt","370"],["lu","352"],["mo","853"],["mk","389"],["mg","261"],["mw","265"],["my","60"],["mv","960"],["ml","223"],["mt","356"],["mh","692"],["mq","596"],["mr","222"],["mu","230"],["yt","262"],["mx","52"],["fm","691"],["md","373"],["mc","377"],["mn","976"],["me","382"],["ms","1"],["ma","212"],["mz","258"],["mm","95"],["na","264"],["nr","674"],["np","977"],["nl","31"],["nc","687"],["nz","64"],["ni","505"],["ne","227"],["ng","234"],["nu","683"],["nf","672"],["kp","850"],["mp","1"],["no","47"],["om","968"],["pk","92"],["pw","680"],["ps","970"],["pa","507"],["pg","675"],["py","595"],["pe","51"],["ph","63"],["pl","48"],["pt","351"],["pr","1"],["qa","974"],["re","262"],["ro","40"],["ru","7"],["rw","250"],["bl","590"],["sh","290"],["kn","1"],["lc","1"],["mf","590"],["pm","508"],["vc","1"],["ws","685"],["sm","378"],["st","239"],["sa","966"],["sn","221"],["rs","381"],["sc","248"],["sl","232"],["sg","65"],["sx","1"],["sk","421"],["si","386"],["sb","677"],["so","252"],["za","27"],["kr","82"],["ss","211"],["es","34"],["lk","94"],["sd","249"],["sr","597"],["sj","47"],["sz","268"],["se","46"],["ch","41"],["sy","963"],["tw","886"],["tj","992"],["tz","255"],["th","66"],["tl","670"],["tg","228"],["tk","690"],["to","676"],["tt","1"],["tn","216"],["tr","90"],["tm","993"],["tc","1"],["tv","688"],["vi","1"],["ug","256"],["ua","380"],["ae","971"],["gb","44"],["us","1"],["uy","598"],["uz","998"],["vu","678"],["va","39"],["ve","58"],["vn","84"],["wf","681"],["eh","212"],["ye","967"],["zm","260"],["zw","263"],["ax","358"]];
    intlCountries.forEach(function(data){
        let inCode = data[0];
        if( inCode == code ){
            dialCode = data[1];
        }
    });
    return dialCode;
    }

const phoneInputField   = document.querySelector("#pcode");
//const phoneInputFields  = document.querySelector("#fpcode");
intlTelInput(
phoneInputField, {
initialCountry: "auto",
geoIpLookup: function(cb){
let inCountry   = "";
let countryInp  = document.getElementById('cont_country');
fetch('https://ipinfo.io/json')
.then( res => res.json() )
.then(
    data => {
    inCountry = (data && data.country) ? data.country : "gb";
    let conCode = inCountry.toLowerCase();        
    cb(conCode);
    setTimeout( 
        function(){
        let iDialCode = ws_getdialCode( conCode );
        let phoneInp  = document.getElementById('pcode');
        phoneInp.value = '+'+iDialCode;
        countryInp.value = conCode;
        //intlTelInput(phoneInputFields,{initialCountry: conCode});
        //let ftPhoneInp      = document.getElementById('fpcode');
        //let countryInps     = document.getElementById('cont_countrys');
        //ftPhoneInp.value    = '+'+iDialCode;
        //countryInps.value = conCode;
    }, 10 );    
    }
)
},
});

document.addEventListener("DOMContentLoaded", function() {
    setTimeout( function(){
        let title       = document.getElementsByClassName('iti__selected-flag');
        let phoneInp    = document.getElementById('pcode');
        //let fphoneInp   = document.getElementById('fpcode');
        title           = title[0].getAttribute('title');
        let res       = title.replace(/\D/g, "");
        phoneInp.value = '+'+res + ' ';
        //fphoneInp.value = '+'+res + ' ';
    }, 1000 );
});

function ws_checkphonenumber(e) {
    let keyArray = [46, 8, 9, 27, 13, 187, 189, 16, 17];
    
    -1 !== keyArray.indexOf(e.keyCode) || 65 == e.keyCode && !0 === e.ctrlKey || 86 == e.keyCode && !0 === e.ctrlKey || 67 == e.keyCode && !0 === e.ctrlKey || 88 == e.keyCode && !0 === e.ctrlKey || e.keyCode >= 35 && e.keyCode <= 39 || (e.shiftKey || e.keyCode < 48 || e.keyCode > 57) && (e.keyCode < 96 || e.keyCode > 105) && e.preventDefault()
}

function ws_validateStr( e ) {
    if ( e.keyCode > 64 && e.keyCode < 91 || 8 == e.keyCode || 9 == e.keyCode || 32 == e.keyCode )
        return !0;
    e.preventDefault()
}

/*window.addEventListener("load", function(){
    let stickysec   = document.getElementsByClassName('stickysec'); 
    let cwsBtn      = document.getElementById('cws-button'); 
    cwsBtn.style.display = "none";
    if( stickysec[0] ){
        setTimeout(function(){
            stickysec[0].classList.add("active");
            cwsBtn.style.display = "block";
        }, 7000);
    }
});*/

//Download Popup Script//

function loadFrame(){
    var downloadPopup   = document.getElementById('downloadPopup');
    var spanClosed      = document.getElementsByClassName("closeicon")[2];
    if( spanClosed ){
        console.log('downlaodform');
        downloadPopup.style.display = "block";
        downloadPopup.classList.remove("is-active");    
    }

    if( spanClosed ){
        spanClosed.onclick = function() {
        downloadPopup.style.display = "none";}
    }
}
window.onload = setTimeout(loadFrame, 10000);
//Download Popup Script End//


/*
var link = document.createElement('a');
link.href = "https://www.valuecoders.com/wp-content/themes/valuecoders/images/contact-client-logo.png";
link.download = 'file.pdf';
link.dispatchEvent(new MouseEvent('click'));
*/


var wsSerializeForm = function (form) {
    var obj = {};
    var formData = new FormData(form);
    for (var key of formData.keys()) {
        obj[key] = formData.get(key);
    }
    return obj;
};


let eName = document.getElementById("ename");
if( eName ){
    eName.addEventListener("keyup", function(event){
        checkLength(eName,1,15);
    });
    eName.addEventListener("focusout", function(event){
        checkLength(eName,1,15);
    });
    eName.addEventListener("keydown", function(event){
        checkLength(eName,1,15);
    });
    eName.addEventListener("keypress", function(event){
        checkLength(eName,1,15);
    });
}

let eEmail = document.getElementById("eemail");
if( eEmail ){    
    eEmail.addEventListener("focusout", function(event){
        checkEmail(eEmail);
    });
}

let ePhone = document.getElementById("ephone");
if( ePhone ){
    //console.log( ePhone ); 
    ePhone.addEventListener("focusout", function(){
        checkLength(ePhone,8,20);
        phonenumber(ePhone);
    });
    ePhone.addEventListener("keyup", function(){
        checkLength(ePhone,8,20);
        phonenumber(ePhone);
    });
    ePhone.addEventListener("keypress", function(){
        checkLength(ePhone,8,20);
        phonenumber(ePhone);
    });
    ePhone.addEventListener("keydown", ws_checkphonenumber);
}

function downloadEbookHandler(e){
    let eName   = document.getElementById("ename");
    let eEmail  = document.getElementById("eemail");
    let ePhone  = document.getElementById("ephone");
    var formBtn = document.getElementById("download");        
    
    checkRequired([eName, eEmail, ePhone]);
    if(
        ( vcSpaceChecker(eName.value.trim()) === true ) &&
        ( vcSpaceChecker(eEmail.value.trim()) === true ) &&
        ( vcSpaceChecker(ePhone.value.trim()) === true )
    ){
    const vEmail = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if( !vEmail.test(eEmail.value.trim()) ){
        return false;
    }
    if( checkLength(ePhone, 8, 20) === false ){
        return false;
    }
            
        formBtn.innerText       = "Please Wait...";
        formBtn.disabled    = true;
        var formData    = JSON.stringify( wsSerializeForm(e) );
        var xhttp       = new XMLHttpRequest();
        xhttp.open("POST", ws_site_url+'/common/inc/ajax-handler.php', true); 
        xhttp.setRequestHeader("Content-Type", "application/json");
        xhttp.onreadystatechange = function() {
           if (this.readyState == 4 && this.status == 200) {
                let response = JSON.parse(this.responseText);
                if( response.success == true ){
                    let ebookElm    = document.getElementById('ebook-pdf').dataset.edoc;
                    let ePdfUrl     = ws_site_url+'ebook-docs/'+ebookElm;

                    let elink = document.createElement('a');
                    elink.href = ePdfUrl;
                    elink.download = ebookElm;
                    elink.dispatchEvent(new MouseEvent('click'));
                    formBtn.innerText       = "Download";
                    formBtn.disabled        = false;
                    e.reset();
                    return false;
                }else{
                    alert("Something Went Wrong. Please try again");
                    return false;
                }
           }
        };
        xhttp.send(formData);
    }else{
        return false;
    }    
    return false;
}


//Tab Effect js for home page


const tabs = document.querySelectorAll('#tabs-mc ul li');
const tabContents = document.querySelectorAll('.tab-contents');
let currentTab = 0;
let tabTimer;
const intervalTime = 5000; // 5 seconds

// Function to activate the tab and corresponding content by index
function activateTab(index) {
  // Remove active class from all tabs and tab contents
  tabs.forEach(tab => tab.classList.remove('active'));
  tabContents.forEach(content => content.classList.remove('active'));

  // Add active class to the current tab and tab content
  tabs[index].classList.add('active');
  tabContents[index].classList.add('active');

  // Reset animations (if applicable)
  resetAnimations();
}

// Start the auto-tab switching after the specified interval
function startAutoTabs() {
  tabTimer = setInterval(() => {
    currentTab = (currentTab + 1) % tabs.length; // Loop back to the first tab after the last one
    activateTab(currentTab);
  }, intervalTime);
}

// Reset any animations on tabs
function resetAnimations() {
  tabs.forEach(tab => {
    const progress = tab.querySelector('.progress-bar');
    const background = tab.querySelector('.background-fill');

    if (progress) {
      progress.style.animation = 'none'; // Remove animation
      progress.offsetHeight; // Force reflow
      progress.style.animation = ''; // Reset animation
    }

    if (background) {
      background.style.animation = 'none'; // Remove animation
      background.offsetHeight; // Force reflow
      background.style.animation = ''; // Reset animation
    }
  });
}

// Add event listener for click to change tabs manually
tabs.forEach((tab, index) => {
  tab.addEventListener('click', (e) => {
    e.preventDefault();  // Prevent default behavior (useful for links)

    // Stop the auto-tab switching when user manually clicks a tab
    clearInterval(tabTimer);

    // Activate the clicked tab
    activateTab(index);

    // Update the current tab index
    currentTab = index;

    // Restart the auto-tab switching
    startAutoTabs();
  });
});

// Initial activation of the first tab
activateTab(currentTab);

// Start auto tabs on page load
startAutoTabs();  // This starts the auto-change every 5 seconds





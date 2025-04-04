
if(document.querySelector(".header-two")) {
    var lastScrollTop = 0;    
    window.addEventListener("scroll", function () {
        window.pageYOffset > 10 ? 
        document.querySelector(".header-two").classList.add("header-bg") : 
        document.querySelector(".header-two").classList.remove("header-bg");
        let scrollST = window.pageYOffset || document.documentElement.scrollTop;
    
        if( scrollST > lastScrollTop ){
            document.querySelector(".header-two").classList.remove("sc-up");
            document.querySelector(".header-two").classList.add("sc-down");        
        }else{
            document.querySelector(".header-two").classList.remove("sc-down");
            document.querySelector(".header-two").classList.add("sc-up");
        }
        lastScrollTop = scrollST <= 0 ? 0 : scrollST; // For Mobile or negative scrolling
    });
    }


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
            //console.log(tabs[j]);
            if( !tabs[j].classList.contains("no-evt") ){
            tabs[j].addEventListener("mouseover", clickTab);    
            }
            
        }

        function clickTab(e){
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
if( document.getElementById("uc-tb-content") ){
var tabPanes    = document.getElementById("uc-tb-content").getElementsByClassName("tab-contents");
}else{
var tabPanes    = document.getElementsByClassName("tab-contents");
}

function activateTab(e){
  e.preventDefault();  
  var elmTitle =  e.target.getAttribute("title");
  if( elmTitle && document.getElementById("comp-cat-title") ){
    document.getElementById("comp-cat-title").innerHTML = elmTitle;
  }
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

tabLabels.forEach(function(label, index){
  label.addEventListener("click", activateTab);
});

if(document.getElementById("mctab-contents")){
    var tabMC       = document.querySelectorAll("#tabs-mc li");
    var tabPanesMc  = document.getElementById("mctab-contents").getElementsByClassName("tab-contents");
    function activateTabFx(e){
        e.preventDefault();  
        tabMC.forEach(function(label, index){
            label.classList.remove("active");
        });

        [].forEach.call(tabPanesMc, function(pane, index){
            pane.classList.remove("active");
        }); 

        e.target.parentNode.classList.add("active");
        var clickedTab = e.target.getAttribute("href");
        document.querySelector(clickedTab).classList.add("active");
    }
    tabMC.forEach(function(label, index){
      label.addEventListener("click", activateTabFx);
    });
}

var buiItem = document.getElementsByClassName("b-accordion");
var bHD   = document.getElementsByClassName("head-row");
for (i = 0; i < bHD.length; i++) {
  bHD[i].addEventListener("click", togglebuiItem, false);
}
function togglebuiItem() {
  for (i = 0; i < buiItem.length; i++) {
      buiItem[i].className = "b-accordion";
  }
  if (this.parentNode.className == "b-accordion") {
      this.parentNode.className = "b-accordion open";
  }
}


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

// var gliderOne = document.getElementsByClassName("glider");
// if( gliderOne.length > 0 ){
//     gliderOne &&
//     window.addEventListener("load", function () {
//         new Glider(document.querySelector(".glider"), { slidesToShow: 1, dots: ".dots", draggable: true, itemWidth: 100, duration: 1, arrows: { prev: ".glider-prev", next: ".glider-next" } });
//     });    
// }

window.addEventListener('load', function(){
  if( document.getElementById('cmn-glider') ){
      setTimeout(function (){
        new Glider(document.getElementById('cmn-glider'), {
          slidesToShow: 1,
          draggable: true,
          //slidesToScroll: 1,
          dots: '.dots',
          arrows: {
            prev: '.glider-prev',
            next: '.glider-next'
          }
        });
      }, 1000);
  }  
  
});


var gliderTwo = document.getElementsByClassName("glider2");

function hideTopBar() {
    document.getElementById("offter-top").remove(), (document.body.className += "barremoved");
}

if (screen && screen.width > 768) {
    var gliderPress = document.getElementsByClassName("press-glider");
    if( gliderPress.length > 0 ){
        gliderPress &&
        window.addEventListener("load", function () {
            new Glider(document.querySelector(".press-glider"), { slidesToShow: 3, dots: ".dots", draggable: !3, itemWidth: 100, duration: 1, arrows: { prev: ".glider-prev", next: ".glider-next" } });
        });    
    }
}

if (screen && screen.width < 768) {
    var gliderPress = document.getElementsByClassName("press-glider");
    if( gliderPress.length > 0 ){
    gliderPress &&
        window.addEventListener("load", function () {
            new Glider(document.querySelector(".press-glider"), { slidesToShow: 1, dots: ".dots", draggable: !1, itemWidth: 100, duration: 1, arrows: { prev: ".glider-prev", next: ".glider-next" } });
        });    
    }
    
      
}
  

function navFunction() {
    var e = document.getElementById("topnav");
    var b = document.body;
    if (e.className === "top_nav") {
        e.className += " responsive";
        b.classList.add("elm-fixed");
    } else {
        e.className = "top_nav";
        b.classList.remove("elm-fixed");
    }
    //"top_nav" === e.className ? (e.className += " responsive") : (e.className = "top_nav");
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

function showindustryItem() {
    var e = document.getElementById("industryitem");
    "dropdown" === e.className ? (e.className += " open") : (e.className = "dropdown");
}
function showAppsItem() {
    var e = document.getElementById("apps");
    "dropdown" === e.className ? (e.className += " open") : (e.className = "dropdown");
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
        if( gliderTwo.length > 0 ){
            new Glider(document.querySelector(".glider2"), { slidesToShow: 1, dots: ".dots2", draggable: !1, itemWidth: 100, duration: 1, arrows: { prev: ".glider-prev", next: ".glider-next" } });    
        }        
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

const Elmtabs   = document.getElementsByClassName("text-column");
for( j = 0; j < Elmtabs.length; j++ ){
    if( !Elmtabs[j].classList.contains("no-evt") ){
        Elmtabs[j].addEventListener("mouseover", elmClickTab);    
    }
}
function elmClickTab(e) {
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
        var ytPlayButton = document.getElementById("play-button");
        ytPlayButton.addEventListener("click", function(){
            var tag = document.createElement("script");
            tag.src = "//www.youtube.com/player_api";
            var player,
            firstScriptTag = document.getElementsByTagName("script")[0];
            firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
            
            function onPlayerReady(e){
                let osHomePage = document.getElementsByClassName("page__home")[0];
                if( !osHomePage ){
                    document.getElementById("myDIV").classList.remove("contbox2");
                }
                player.playVideo();
            }
            
            setTimeout(function(){
            let e = document.getElementById("video").getAttribute("data-src");
            document.getElementById("video").setAttribute("src", e), (player = new YT.Player("video",{
                events: { onReady: onPlayerReady } 
            }));
            }, 500);
        });

        var contentPopup    = document.getElementById('contentPopup');
        var btn             = document.getElementById("myBtn");
        var span            = document.getElementsByClassName("close")[0];
        if( contentPopup ){
            btn.onclick = function(){
                                
                contentPopup.style.display = "block";
                let vAttr = btn.getAttribute("data-isrc");                
                let e = 'https://www.youtube.com/embed/UId2lnLDJ20?enablejsapi=1&html5=1&mute=0&autoplay=1';    
                if( vAttr ){
                e = vAttr;
                }                
                document.getElementById("video").setAttribute("src", e), (player = new YT.Player("video", { events: { onReady: onPlayerReady } }));
            }
            span.onclick = function(){
                document.getElementById("video").setAttribute("src", "");
                contentPopup.style.display = "none";

            }
            window.onclick = function(event){
                if (event.target == contentPopup) {
                    contentPopup.style.display = "none";
                }
            }    
        }    
} 

function callinVideo(el){
    let elm     = document.getElementById("dflow-iframe");
    let pcElm   = document.getElementById("dflow-picture");    
    let e       = elm.getAttribute("data-src");
    elm.setAttribute("src", "https://www.youtube.com/embed/KoU_OvfX4As?enablejsapi=1&html5=1&mute=0&autoplay=1");
    el.style.display = "none";
    elm.style.display   = "block";
    pcElm.style.display = "none";

    // if(typeof YT === 'undefined' && typeof YT.Player !== 'undefined'){
    //     var tag = document.createElement("script");
    //     tag.src = "//www.youtube.com/player_api";
    //     var player,
    //     firstScriptTag = document.getElementsByTagName("script")[0];
    //     firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
    //     function onPlayerReady(e){
    //         player.playVideo();
    //     }
    // }
}
//callinVideo();
//Feature Popup Script//

var featurePopup    = document.getElementById('featurePopup');
var spanClosef      = document.getElementsByClassName("closeicon")[1];
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
const utmParams = ['utm_source', 'utm_medium', 'utm_campaign', 'utm_content', 'utm_term', 'r_id', 'ws_reftoken' ];
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
    param = ( param === "r_id" ) ? "ws_reftoken" : param;
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
            let parmKey = ( utmParams[param] === "ws_reftoken" ) ? "r_id" : utmParams[param];
            url.searchParams.append(parmKey, utmValues[utmParams[param]]);    
        }        
    });
    return url.toString();
}
//console.log( generateUtmLink( 'https://calendly.com/workstatus/demo',utmParams ) );

var formPopup   = document.getElementById('formPopup');
var formbtn     = document.getElementById("myBtn2");
var spanClose   = document.getElementsByClassName("closeicon")[0];
function call_demows( 
    cont = '<h2>Let us take you on a personalized <span class="purple">virtual<br class="linebrk"> tour of Workstatus</span></h2>' ){
    //window.location.href = generateUtmLink( 'https://calendly.com/workstatus/demo', utmParams );
    window.open( generateUtmLink( 'https://calendly.com/workstatus/demo', utmParams ), '_blank' );
    
    /*
    var refUrl  = document.body.getAttribute('data-url');
    var utmParm = document.body.getAttribute('data-utm');

    if( utmParm ){
    window.location.href = "https://calendly.com/workstatus/demo?"+utmParm+'&utm_term='+refUrl;
    }else{
    window.location.href = "https://calendly.com/workstatus/demo?utm_term="+refUrl;
    }
    */

    //window.location.href = "https://calendly.com/workstatus/demo";

    // let wsIntentForm    = document.getElementById("ws-intent-popup");
    // let popHeader       = document.getElementById("demo-popup");
    // let demoBtn         = document.getElementById("submitButton");

    // if( wsIntentForm ){
    //     if( wsIntentForm.classList.contains('visible') ){
    //         wsIntentForm.classList.remove('visible');
    //     }
    // }
    // popHeader.innerHTML     = cont;
    // demoBtn.innerText       = "Book My Demo Now";
    // formPopup.style.display = "block";    
}

function call_demoEnt( cont = '<h2>Let us take you on a personalized <span class="purple">virtual<br class="linebrk"> tour of Workstatus</span></h2>' ){
    //window.location.href = generateUtmLink( 'https://calendly.com/workstatus/sales', utmParams );
    window.open( generateUtmLink( 'https://calendly.com/workstatus/sales', utmParams ), '_blank' );
    // var refUrl  = document.body.getAttribute('data-url');
    // var utmParm = document.body.getAttribute('data-utm');
    // if( utmParm ){
    // window.location.href = "https://calendly.com/workstatus/demo?"+utmParm+'&utm_term='+refUrl;
    // }else{
    // window.location.href = "https://calendly.com/workstatus/demo?utm_term="+refUrl;
    // }
    
    //window.location.href = "https://calendly.com/workstatus/demo";
    
    // let wsIntentForm    = document.getElementById("ws-intent-popup");
    // let popHeader       = document.getElementById("demo-popup");
    // let entQuery        = document.getElementById("is-ent-query");
    // let demoBtn         = document.getElementById("submitButton");
    
    // if( wsIntentForm ){
    //     if( wsIntentForm.classList.contains('visible') ){
    //         wsIntentForm.classList.remove('visible');
    //     }
    // }
    // entQuery.value = 1;
    // popHeader.innerHTML = cont;
    // demoBtn.innerText = "Request a Quote";
    // formPopup.style.display = "block";    
}

if( spanClose ){
    spanClose.onclick = function() {
        formPopup.style.display = "none";
        formPopup.classList.remove("is-active");
    }
}

function _getAppLoginUrl(){
    let appLink = 'https://'+wsObj.app_url+'/auth/login';
    // let refToken = wsGetCookieVal( 'ws_reftoken' );
    // if( refToken )
    window.open( generateUtmLink( appLink, utmParams ), '_blank' );   
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
    if( (/^[A-Za-z0123456789()\s.+-]+$/.test(inputtxt.value.trim()) && inputtxt.value.length >= 8) ){   
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
                if( input.classList.contains('tc-name') ){
                    showError(input, `Please Fill Name`);
                }else{
                    showError(input, `Please Fill First Name`);
                }
                
            }
            else if( input.name == "uname" ){
                showError(input, `Please Fill Name`);                
            }else if( input.name == "phone" ){
                let inpID = input.classList.contains('ephone-cls') ? 'ephone-error' : 'phone-error';
                if( input.classList.contains('su-phone') ){
                    inpID = 'su-phone-err';
                }
                showError(input, `Please Fill Phone`, inpID);
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
                    let inpID = input.classList.contains('ephone-cls') ? 'ephone-error' : 'phone-error';
                    if( input.classList.contains('su-phone') ){
                    inpID = 'su-phone-err';
                    }
                    showError(input, `Please Fill Phone`, inpID);
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
        if( input.name == "fname" ){
            //showError(input, `Please Fill First Name`);
            if( input.classList.contains('tc-name') ){
                showError(input, `Please Fill Name`);
            }else{
                showError(input, `Please Fill First Name`);
            }
        }else if( input.name == "phone" ){
            let inpID = input.classList.contains('ephone-cls') ? 'ephone-error' : 'phone-error';
            if( input.classList.contains('su-phone') ){
                inpID = 'su-phone-err';
            }
            showError(input, `Please Fill Phone`, inpID);
            //showError(input, `Please Fill Phone`, "phone-error");
        }else if( input.name == "email" ){
            showError(input, `Please Fill Email`);
        }else if( input.name == "lname" ){
            showError(input, `Please Fill Last Name`);    
        }else if( (input.name == "password") || (input.name == "cnf_password") ){
            showError(input, `Password must be at least ${min} characters`);
        }else{
            showError(input,`This Field is required`)   
        } 
        return false;
    }else {
        if( input.name == "phone" ){
            let inpID = input.classList.contains('ephone-cls') ? 'ephone-error' : 'phone-error';
            if( input.classList.contains('su-phone') ){
                inpID = 'su-phone-err';
            }
            showSucces(input, inpID);
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

/*
document.addEventListener("DOMContentLoaded", function(){
const phoneInputField   = document.querySelector("#pcode");
//const phoneInputFields  = document.querySelector("#fpcode");
//const wsBuyNow          = document.getElementById("nv-buynow");
if( phoneInputField ){
    setTimeout( function(){
    intlTelInput(
    phoneInputField, {
    initialCountry: "auto",
    geoIpLookup: function(cb){
    let inCountry   = "";
    let countryInp  = document.getElementById('cont_country');
    fetch(wsObj.ipinfo)
    .then( res => res.json() )
    .then(
        data => {
        inCountry = (data && data.country) ? data.country : "gb";
        let conCode = inCountry.toLowerCase();      
        if( conCode == "in"){
            //wsBuyNow.href = "https://app.workstatus.io/auth/register?pid=460&type=annual";
            let sgFrm = document.getElementById("formPopup-su");
            if( sgFrm ){
                sgFrm.classList.add('locate-in')
            }
        }
        cb(conCode);
        setTimeout( 
            function(){
            let iDialCode = ws_getdialCode( conCode );
            let phoneInp  = document.getElementById('pcode');
            phoneInp.value = '+'+iDialCode;
            countryInp.value = conCode;

            let su_con_coe = document.getElementById('su-pcode');
            if( su_con_coe ){
                su_con_coe.value = "+"+iDialCode;
            }
            //console.log( iDialCode );
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
    setTimeout( function(){
        let title       = document.getElementsByClassName('iti__selected-flag');
        let phoneInp    = document.getElementById('pcode');
        //let fphoneInp   = document.getElementById('fpcode');
        title           = title[0].getAttribute('title');
        let res       = title.replace(/\D/g, "");
        phoneInp.value = '+'+res + ' ';
        //fphoneInp.value = '+'+res + ' ';
    }, 1000 );
    }, 1000 );
}
});
*/

function selectOptionByDataCode(code, selInput) {
    const select = document.getElementById(selInput);   
    for (let i = 0; i < select.options.length; i++) {
        const option = select.options[i];
        if(option.getAttribute('data-con') == code){
          option.selected = true;
        }
    }
}
window.addEventListener("load", function (){
    var xhttp = new XMLHttpRequest();
    xhttp.open("GET", wsObj.ipinfo, true); 
    xhttp.setRequestHeader("Content-Type", "application/json");
    xhttp.onreadystatechange = function(){
        if( (this.readyState == 4) && (this.status == 200) ){
            let response    = JSON.parse(this.responseText);
            let conCode     = response.country;

            if( !document.body.classList.contains('page-id-3484') ){
                if( document.getElementById("wsio-pricing") && document.getElementById("wsio-preloader") ){
                    document.getElementById("wsio-pricing").style.display   = "block";
                    document.getElementById("wsio-preloader").style.display = "none";
                    setPlanPricing( conCode, "yearly", true );    
                }    
            }else{
                if( document.getElementById("wsio-pricing") && document.getElementById("wsio-preloader") ){
                    document.getElementById("wsio-pricing").style.display   = "block";
                    document.getElementById("wsio-preloader").style.display = "none";
                    setPlanPricing( "US", "yearly", true );
                }
            }
            selectOptionByDataCode( conCode, "su-pcode");
            if( conCode !== "IN" ){
                document.body.classList.add('locate-int');
            }else{
                document.body.classList.add('locate-ind');
            }
        }
    }
    xhttp.send();
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

/*
window.addEventListener("load", function(){
    let stickysec   = document.getElementsByClassName('stickysec'); 
    let cwsBtn      = document.getElementById('cws-button'); 
    cwsBtn.style.display = "none";
    if( stickysec[0] ){
        setTimeout(function(){
            stickysec[0].classList.add("active");
            cwsBtn.style.display = "block";
        }, 7000);
    }
});
*/

window.addEventListener("load", function(){
    if( document.body.classList.contains("page-template-tpl-data-retention") ){
        setTimeout(function(){
            document.body.classList.add("crisp-loaded");
        }, 7000);
    }
    // let cwsBtn  = document.getElementById('ip-crisp-cta'); 
    // if( cwsBtn ){
    //     setTimeout(function(){
    //         cwsBtn.style.display = "block";
    //     }, 7000);
    // }
});

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

function vcGetName(name) {
    name = name.trim();
    let lastName = name.includes(' ') ? name.replace(/.*\s([\w-]*)$/, '$1') : '';
    let firstName = name.replace(new RegExp(lastName + '$'), '').trim();
    return [firstName, lastName];
}

function downloadEbookHandler(e){
    let eName   = document.getElementById("ename");
    let eEmail  = document.getElementById("eemail");
    let ePhone  = document.getElementById("ephone");
    var formBtn = document.getElementById("download");        
    
    //checkRequired([eName, eEmail, ePhone]);
    checkRequired([eName, eEmail]);
    if( ( vcSpaceChecker(eName.value.trim()) === true ) && ( vcSpaceChecker(eEmail.value.trim()) === true ) ){
    const vEmail = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if( !vEmail.test(eEmail.value.trim()) ){
        return false;
    }    
    //if(checkLength(ePhone, 8, 20) === false ){return false;}

    let namePart    = vcGetName( eName.value );
    let firstName   = namePart[0];
    let lastName    = (namePart[1] && (namePart[1] != "")) ? namePart[1] : '';
    formBtn.innerText = "Please Wait...";
    formBtn.disabled  = true;
    const url = 'https://www.workstatus.io/blog/wp-json/es_apicb/v1/addsubs';
    //const url = 'http://localhost/workstatus-wp/website/blog/staging/wp-json/es_apicb/v1/addsubs';    
    const data = { first_name: firstName, last_name: lastName, email: eEmail.value };
    fetch(url, {
        method: 'POST',
        headers: {'Content-Type': 'application/json'},
        body: JSON.stringify(data)
    })
    .then(response => response.json()) // Parse the JSON from the response
    .then(data => {
        console.log('Success:', data);
        let ebookElm    = document.getElementById('ebook-pdf').dataset.edoc;
        let ePdfUrl     = ws_site_url+'ebook-docs/'+ebookElm;

        let elink = document.createElement('a');
        elink.href = ePdfUrl;
        elink.download = ebookElm;
        elink.dispatchEvent(new MouseEvent('click'));
        formBtn.innerText       = "Download";
        formBtn.disabled        = false;
        e.reset();
    })
    .catch((error) => {
        formBtn.innerText       = "Download";
        formBtn.disabled        = false;
        e.reset();
    });
    // var formData    = JSON.stringify( wsSerializeForm(e) );
    // var xhttp       = new XMLHttpRequest();
    // xhttp.open("POST", wsObj.admin_ajax, true); 
    // xhttp.setRequestHeader("Content-Type", "application/json");
    // xhttp.onreadystatechange = function() {
    //    if (this.readyState == 4 && this.status == 200){
    //         let response = JSON.parse(this.responseText);
    //         if( response.success == true ){
    //             let ebookElm    = document.getElementById('ebook-pdf').dataset.edoc;
    //             let ePdfUrl     = ws_site_url+'ebook-docs/'+ebookElm;

    //             let elink = document.createElement('a');
    //             elink.href = ePdfUrl;
    //             elink.download = ebookElm;
    //             elink.dispatchEvent(new MouseEvent('click'));
    //             formBtn.innerText       = "Download";
    //             formBtn.disabled        = false;
    //             e.reset();
    //             return false;
    //         }else{
    //             alert("Something Went Wrong. Please try again");
    //             return false;
    //         }
    //    }
    // };
    // xhttp.send(formData);
    // }else{
    //     return false;
    }    
    return false;
}

const su_name       = document.getElementById("su-name");
const su_email      = document.getElementById("su-email");
const su_pcode      = document.getElementById("su-pcode");
const su_phone      = document.getElementById("su-phone");
const su_pass       = document.getElementById("su-password");
const su_cpass      = document.getElementById("su-cpassword");
const wrap_suform   = document.getElementById("formPopup-su");

function nameCheck_su(event){
  checkLength(su_name,1,15);
}

function emailCheck_su(event){
    checkEmail(su_email);
}

if( su_pcode ){
su_pcode.addEventListener('change', function(){
    if( this.value !== "" ){
        showSucces( su_pcode );
    }else{
        showError( su_pcode, "Pleasee select country code." )
    }  
});    
}


function phoneCheck_su(event){
    checkLength(su_phone,7,20);
    //phonenumber(su_phone);
}

function wscheckPassword(str){
    var re = /^(?=.*[A-Za-z])(?=.*\d)(?=.*[!#\$%&\*\-@])[A-Za-z\d!#\$%&\*\-@]{6,}$/;
    return re.test(str);
}

function passCheck_su(event){
    if( wscheckPassword(su_pass.value.trim()) === false ){
        showError( su_pass, 'Use 6 or more characters with a mix of letters, numbers & symbols(!,#,$,%,&,*,-,@)');        
    }else{
        if( (wscheckPassword(su_cpass.value.trim()) !== false) && (su_pass.value.trim() === su_cpass.value.trim()) ){
            showSucces( su_cpass );
        }else{
            showError( su_cpass, 'Both passwords must match');    
        }
        showSucces( su_pass );
    }    
}

function passCheckc_su(event){
    if( wscheckPassword(su_cpass.value.trim()) === false ){
        //showError( su_cpass, 'Use 6 or more characters with a mix of letters, numbers & symbols (!,@,#,$,%,&,*,?)');        
    }else{
        showSucces( su_cpass );        
    }
}

function passCheckc_sufu(event){
    if( su_pass.value.trim() !== su_cpass.value.trim() ){
        showError( su_cpass, 'Both passwords must match');
    }else{
        showSucces( su_cpass );        
    }
}

su_name.addEventListener("keyup", nameCheck_su);
su_name.addEventListener("keypress", nameCheck_su);
su_name.addEventListener("keydown", ws_validateStr);
su_name.addEventListener("focusout", nameCheck_su);

su_email.addEventListener("keyup", emailCheck_su);
su_email.addEventListener("focusout", emailCheck_su);
su_email.addEventListener("focusin", function(){
    doNotingonFocus( su_email );
});

if( su_phone ){
    su_phone.addEventListener("keyup", phoneCheck_su);
    su_phone.addEventListener("keypress", phoneCheck_su);
    su_phone.addEventListener("keydown", ws_checkphonenumber);
    su_phone.addEventListener("focusout", phoneCheck_su);    
}


su_pass.addEventListener("keyup", passCheck_su);
su_pass.addEventListener("keypress", passCheck_su);
su_pass.addEventListener("focusout", passCheck_su);

su_cpass.addEventListener("keyup", passCheckc_sufu);
su_cpass.addEventListener("keypress", passCheckc_sufu);
su_cpass.addEventListener("focusout", passCheckc_sufu);



const suchkPolicy = document.getElementById('su-accept');
suchkPolicy.addEventListener('change', (event) => {
  let supolicyElm = document.getElementById("supolicy");  
  if( !event.currentTarget.checked ){
    supolicyElm.style.display = "block";
  }else{
    supolicyElm.style.display = "none";
  }  
  var suformBtn     = document.getElementById("su-submitButton");
  let errCheck      = document.querySelectorAll('#formPopup-su .form-group');
  let errCount      = true;
  errCheck.forEach((elm) => {
    if( elm.classList.contains('ws-error') ) errCount =  false;
  });    


  if(event.currentTarget.checked && (errCount === true) ){
    //if( wrap_suform.classList.contains('locate-in') ){
    if(
    ( vcSpaceChecker(su_email.value.trim()) === true ) &&
    ( vcSpaceChecker(su_name.value.trim()) === true ) &&    
    ( vcSpaceChecker(su_pcode.value.trim()) === true ) &&
    ( vcSpaceChecker(su_phone.value.trim()) === true ) &&
    ( vcSpaceChecker(su_pass.value.trim()) === true ) &&
    ( vcSpaceChecker(su_cpass.value.trim()) === true )
    ){
        suformBtn.disabled = false;
    }
    // }else{
    //     if(
    //     ( vcSpaceChecker(su_email.value.trim()) === true ) &&
    //     ( vcSpaceChecker(su_name.value.trim()) === true ) &&
    //     ( vcSpaceChecker(su_pass.value.trim()) === true ) &&
    //     ( vcSpaceChecker(su_cpass.value.trim()) === true )
    //     ){
    //         suformBtn.disabled = false;
    //     }
        
    // }
 }else{
        //suformBtn.disabled = true;
    }
})

let sup_inputs  = document.querySelectorAll('#formPopup-su .form-group input');

// let inputValidator = { "uname":false, "uemail": false, "password":false, "cnf_password":false}
// if( wrap_suform.classList.contains('locate-in') ){
// }

let inputValidator = { "uname":false, "uemail": false, "phone":false, "password":false, "cnf_password":false}    
//console.log( inputValidator );
let buttonSend = document.getElementById('su-submitButton');
sup_inputs.forEach((input) => {
    //console.log( input );
    input.addEventListener('focusout', () => { 
        let name = event.target.getAttribute('name');
        if( input.parentElement.classList.contains('ws-error') ){
            inputValidator[name] = false;
        }else{
            inputValidator[name] = true;            
        }
        //console.log( "Echo "+ inputValidator );
        let allTrue = Object.keys(inputValidator).every((item) => {
            return inputValidator[item] === true
        });

        if(allTrue){
            if( suchkPolicy.checked ){
                //buttonSend.disabled = false;
            }else{
                //buttonSend.disabled = true;
            }
        }else{
            //buttonSend.disabled = true;
        }
    });
});

/*
document.addEventListener("DOMContentLoaded", () => {
    var xhttp           = new XMLHttpRequest();
    xhttp.open( "GET", ws_site_url+'wp-admin/admin-ajax.php?action=wsget_ugeolocaton', true ); 
    xhttp.setRequestHeader("Content-Type", "application/json");
    xhttp.onreadystatechange = function(){
        if( (this.readyState == 4) && (this.status == 200) ){
            let response = JSON.parse( this.responseText );
            console.log( response.resp );
        }else{
            console.log( response.resp );
        }
    };
    xhttp.send({"IP":"9090.9090.878"});
});
*/


function signupFrmValidation(e){
    let geocheck = true;
    //if( wrap_suform.classList.contains('locate-in') ){
        //checkRequired([su_name, su_email, su_phone, su_pass, su_cpass, su_pcode]);
        // if( 
        // ( vcSpaceChecker(su_pcode.value.trim()) === false ) || 
        // ( vcSpaceChecker(su_phone.value.trim()) === false ) 
        // ){
        // geocheck = false;
        // }
    // }else{
    //     checkRequired([su_name, su_email, su_pass, su_cpass]);
    // }
    checkRequired([su_name, su_email, su_phone, su_pass, su_cpass, su_pcode]);
    if( !suchkPolicy.checked ){
        return false;
    }
    if(
        ( vcSpaceChecker(su_email.value.trim()) === true ) &&
        ( vcSpaceChecker(su_name.value.trim()) === true ) &&
        //( geocheck === true ) &&
        ( vcSpaceChecker(su_pcode.value.trim()) === true ) &&
        ( vcSpaceChecker(su_phone.value.trim()) === true ) &&        
        ( vcSpaceChecker(su_pass.value.trim()) === true ) &&
        ( vcSpaceChecker(su_cpass.value.trim()) === true )
    ){
        const sre = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        if( !sre.test(su_email.value.trim()) ){
            return false;
        }

        if( (wscheckPassword(su_pass.value.trim()) === false) ){
            return false;
        }

        if( su_pass.value.trim() !== su_cpass.value.trim() ){
            return false;
            passCheckc_sufu();
        }
        var spnMsg          = document.getElementById("ws-apimsg");
        var formBtn         = document.getElementById("su-submitButton");
        formBtn.innerText   = "Please Wait...";
        formBtn.disabled    = true;
        spnMsg.className    = "";
        spnMsg.innerHTML    = "";

        var formData        = JSON.stringify( wsSerializeForm(e) );
        var xhttp           = new XMLHttpRequest();
        xhttp.open("POST", ws_site_url+'wp-admin/admin-ajax.php?action=ws_signup_api', true); 
        xhttp.setRequestHeader("Content-Type", "application/json");
        xhttp.onreadystatechange = function(){
            if( (this.readyState == 4) && (this.status == 200) ){
                let response = JSON.parse( this.responseText );
                //console.log( response.resp );
                if( response.response.code == "200" ){
                    const xdForm = document.getElementById("xd-form");
                    // xdForm.classList.add('signup-success');
                    // spnMsg.classList.add('success');                    
                    e.reset();
                    window.location.href = ws_site_url+'/signup-thanks?email='+response.response.email;
                }else{
                    spnMsg.classList.add('error');
                    spnMsg.innerHTML    = response.response.message;
                    setTimeout( () => {
                        spnMsg.innerHTML = "";
                    }, 5000 );
                    formBtn.innerText   = "Create My Account";
                    formBtn.disabled    = false;    
                }
            }
        }
        xhttp.send(formData);
        return false;        
    }else{
        return false;
    }
    return false;  
}

function togglewsPassword( e, elm ){
    let password = document.getElementById(elm);
    let type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    e.classList.toggle('fa-eye-slash'); 
}


function close_suform(){
    let suForm = document.getElementById("formPopup-su");
    suForm.classList.remove('is-active');
    suForm.style.display = "none";
}

function showSuPopup(){
    let suForm = document.getElementById("formPopup-su");
    suForm.style.display = "block";
}


function getQueryParams(url) {
    const paramArr = url.slice(url.indexOf('?') + 1).split('&');
    const params = {};
    paramArr.map(param => {
        const [key, val] = param.split('=');
        params[key] = decodeURIComponent(val);
    })
    return params;
}

function get_ws_signupform(e){    
    let url         = e.getAttribute("data-href");
    const newurl    = getQueryParams( url );
    if( newurl.pid ){
        document.getElementById("ws_pid").value = newurl.pid;
    }
    if( newurl.type ){
        document.getElementById("ws_stype").value = newurl.type;
    } 
    
    let wsIntentForm = document.getElementById("ws-intent-popup");
    if( wsIntentForm ){
        if( wsIntentForm.classList.contains('visible') ){
            wsIntentForm.classList.remove('visible');
        }
    }

    let suForm = document.getElementById("formPopup-su");
    suForm.style.display = "block";
    return false;
}

/*
document.addEventListener("DOMContentLoaded", function(){
    var tempImageokay = document.querySelectorAll(".xd-dump-img");
    if( tempImageokay ){
        setTimeout(function(){
            tempImageokay[0].classList.remove("xd-dump-img");
        }, 2000);
    }
});
document.addEventListener("DOMContentLoaded", function() {
    var lazyBackgrounds = [].slice.call(document.querySelectorAll(".wsbg-img"));

    if ("IntersectionObserver" in window) {
        let lazyBackgroundObserver = new IntersectionObserver(function(entries, observer) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    entry.target.style.backgroundImage = "url(" + entry.target.dataset.src + ")";
                    lazyBackgroundObserver.unobserve(entry.target);
                }
            });
        });

        lazyBackgrounds.forEach(function(lazyBackground) {
            lazyBackgroundObserver.observe(lazyBackground);
        });
    }
});*/

document.addEventListener("DOMContentLoaded", function() {
    function wsLazyLoadImages() {
      var images = document.querySelectorAll('.wsbg-img');
      if( images ){
        images.forEach(function(image){
            if( !image.getAttribute('data-loaded') ){
              image.style.backgroundImage = 'url(' + image.getAttribute('data-src') + ')';
              image.setAttribute('data-loaded', 'true');
            }
        });  
      }      
    }

    setTimeout(function(){
        wsLazyLoadImages();
    }, 5000);

    window.addEventListener('scroll', wsLazyLoadImages);
    window.addEventListener('touchmove', wsLazyLoadImages);
    document.addEventListener("click", wsLazyLoadImages);
});


/*Lazy Loading BG Image*/
document.addEventListener("DOMContentLoaded", 
function(){
    var lazyloadImages;
    if("IntersectionObserver" in window){
    lazyloadImages = document.querySelectorAll(".wslazy");
    var imageObserver = new IntersectionObserver(function(entries, observer) {
      entries.forEach(function(entry) {
        if (entry.isIntersecting) {
          var image = entry.target;
          image.classList.remove("wslazy");
          imageObserver.unobserve(image);
        }
      });
    });

    lazyloadImages.forEach(function(image) {
      imageObserver.observe(image);
    });
    }else{
    var lazyloadThrottleTimeout;
    lazyloadImages = document.querySelectorAll(".wslazy");
    function lazyload(){
        if(lazyloadThrottleTimeout) {
            clearTimeout(lazyloadThrottleTimeout);
        }    

        lazyloadThrottleTimeout = setTimeout(function() {
        var scrollTop = window.pageYOffset;
        lazyloadImages.forEach(function(img) {
            if(img.offsetTop < (window.innerHeight + scrollTop)) {
              img.src = img.dataset.src;
              img.classList.remove('wslazy');
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

var $window = window,
buyerGiude = document.getElementById("stickytoc");
if(buyerGiude) {
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
        if(days){
            const date = new Date();
            date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
            expires = '; expires=' + date.toUTCString();
        }
        document.cookie = name + '=' + (value || '')  + expires + ';';
    },

    getCookie(name){
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

    if (shouldShowExitIntent){
        document.removeEventListener('mouseout', mouseEvent);
        document.querySelector('.exit-intent-popup').classList.add('visible');
        CookieService.setCookie('exitIntentShown', true, 30);
    }
};

var intPopupElm = document.getElementById("ws-intent-popup");
if( intPopupElm && intPopupElm.classList.contains('in-resource') ){
    if (!CookieService.getCookie('exitIntentShown')) {
        setTimeout(() => {
            document.addEventListener('mouseout', mouseEvent);
            document.addEventListener('keydown', exit);
            document.querySelector('.exit-intent-popup').addEventListener('click', exit);
        }, 0);
    }    
}

/* Feature pages Intent Popup */
const mouseEventFt = e => {
    const shouldShowExitIntent = 
        !e.toElement && 
        !e.relatedTarget &&
        e.clientY < 10;

    if (shouldShowExitIntent){
        document.removeEventListener('mouseout', mouseEventFt);
        document.querySelector('.exit-intent-popup').classList.add('visible');
        CookieService.setCookie('exitIntentShownFt', true, 30);
    }
};
if( intPopupElm && intPopupElm.classList.contains('in-feature') ){
    if (!CookieService.getCookie('exitIntentShownFt')) {
        setTimeout(() => {
            document.addEventListener('mouseout', mouseEventFt);
            document.addEventListener('keydown', exit);
            document.querySelector('.exit-intent-popup').addEventListener('click', exit);
        }, 0);
    }
}
function close_intform(){
  let divTarget   = document.getElementById("ws-intent-popup");
  divTarget.classList.remove('visible');
}

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


const SelectOn = (listener, query, fn) => {
document.querySelectorAll(query).forEach(item => {
  item.addEventListener(listener, el => {
    fn(el);
  })
})
}
let SelectIndex = 1;
SelectOn('click', '.selectBtn', item => {
const next = item.target.nextElementSibling;
next.classList.toggle('toggle');
next.style.zIndex = SelectIndex++;
item.target.classList.toggle('active');
});

SelectOn('click', '.option', item => {
item.target.parentElement.classList.remove('toggle');
const parent = item.target.closest('.select').children[0];
parent.setAttribute('data-type', item.target.getAttribute('data-type'));
parent.innerText = item.target.innerText;

let elm = ['sel-all', 'sel-mobile', 'sel-web', 'sel-desktop'];
const slElm = document.getElementById('elm-maps');
let opt     = item.target.getAttribute('data-type'); 
slElm.classList.add( opt );
elm.map(function(el){
    if( opt != el ){
        slElm.classList.remove(el);
    }
})
slElm.classList.add();
});

function loadMoreRM(e){
        
    if( e.classList.contains("active") ){
        return false;
    }
    e.innerText = "Loading...";
    e.classList.add("active");
    var xhttp           = new XMLHttpRequest();
    var page = e.dataset.counter;
    e.dataset.counter = parseInt(page) +1;
    xhttp.open("POST", ws_site_url+'wp-admin/admin-ajax.php?action=loadmore_rm&page='+page, true); 
    xhttp.setRequestHeader("Content-Type", "application/json");
    xhttp.onreadystatechange = function(){
        if( (this.readyState == 4) && (this.status == 200) ){
            let response = JSON.parse( this.responseText );            
            if( response.success == true ){
                if( response.inprogress !== null ){
                document.getElementById("elm-inprogress").insertAdjacentHTML('afterend', response.inprogress);    
                }
                if(response.about !== null){
                document.getElementById("elm-aboutlaunch").insertAdjacentHTML('afterend', response.about);
                }
                if(response.recent !== null){
                document.getElementById("elm-recentlaunch").insertAdjacentHTML('afterend', response.recent);
                }
                
                e.innerText = "Load More";
                e.classList.remove("active");
            }else{
                e.innerText = "No More Data";
                e.classList.add("active");
            }
        }
    }
    xhttp.send();
}


function _playYTmedia(video){
    let iframe = document.getElementById("gen-video");
    let ipopup = document.getElementById("gen-vpopup");
    iframe.setAttribute('src', video+"?autoplay=1");
    setTimeout(function(){        
        ipopup.style.display = "block";    
    }, 200);
    
}


function closeGenVideo(){
    let iframe = document.getElementById("gen-video");
    let ipopup = document.getElementById("gen-vpopup");
    iframe.setAttribute('src', "");    
    ipopup.style.display = "none";
}

function _morecompTable(){
    var elm = document.getElementById("compare-table");
    elm.classList.toggle("active");
}

document.addEventListener("DOMContentLoaded", function(){
    if( document.getElementById('ws-compititors-tbl') ){
        const tabButtons        = document.querySelectorAll(".tbbtn");
        const compareColumns    = document.querySelectorAll(".compare-column");
        const maxVisibleColumns = 6;
        const activeTabs        = [];
        function updateVisibility(){
            compareColumns.forEach(column => {
                if (!column.classList.contains("elemnt")) {
                    column.style.display = "none";
                }
            });

            activeTabs.forEach(tab => {
                const productId = tab.dataset.prod;
                const column = document.querySelector(`#cmp-${productId}`);
                if (column) column.style.display = "block";
            });
        }

        function handleTabClick(tab) {
            if (tab.classList.contains("active")) {
                tab.classList.remove("active");
                const index = activeTabs.indexOf(tab);
                if (index > -1) activeTabs.splice(index, 1);
            } else {
                if(activeTabs.length >= maxVisibleColumns){
                    const currentIndex = Array.from(tabButtons).indexOf(tab);
                    let closestIndex = -1;
                    let closestTab = null;                
                    activeTabs.forEach(activeTab => {
                        const index = Array.from(tabButtons).indexOf(activeTab);
                        if (index < currentIndex && index > closestIndex) {
                            closestIndex = index;
                            closestTab = activeTab;
                        }
                    });
                    const tabToRemove = closestTab || activeTabs[0];
                    tabToRemove.classList.remove("active");
                    activeTabs.splice(activeTabs.indexOf(tabToRemove), 1);
                }            
                tab.classList.add("active");
                activeTabs.push(tab);
            }
            updateVisibility();
        }

        tabButtons.forEach(tab => {
            tab.addEventListener("click", () => handleTabClick(tab));
        });
        tabButtons.forEach(tab => {
            if (tab.classList.contains("active")) {
                if(activeTabs.length < maxVisibleColumns){
                    activeTabs.push(tab);
                }else{
                    tab.classList.remove("active");
                }
            }
        });
        updateVisibility();
    }
});

if( document.getElementById("cmn-v2-testimonials") ){
    window.addEventListener("load", function() {
        var gliderElement = document.querySelector(".testimonial-slider .glider");
        if (gliderElement) {
            new Glider(gliderElement, {
                slidesToShow: 1, 
                slidesToScroll: 1,
                draggable: true,
                scrollLock: false,
                dots: ".testimonial-slider .dots",
                dragDistance: true,
                arrows: { prev: '#cmn-v2-testimonials .test-prev', next: '#cmn-v2-testimonials .test-next' },      
                responsive: [
                {breakpoint: 320, settings: {slidesToShow:1,slidesToScroll:1,duration: 0.25}},
                {breakpoint: 767, settings: {slidesToShow: 1, slidesToScroll: 1, itemWidth: 150, duration: 0.25}},
                {breakpoint: 1024, settings: {slidesToShow: 1, slidesToScroll: 1, itemWidth: 150, duration: 0.25}},
                {breakpoint: 1400, settings: {slidesToShow: 1, slidesToScroll: 1, itemWidth: 150, duration: 0.25}}          
                ]
            });
        }
    });
}

if (document.getElementById("testimonial-glider")) {
    window.addEventListener("load", function() {
    var gliderElement = document.querySelector(".testimonial-slider .glider");
    if (gliderElement) {      
    new Glider(gliderElement, {
    slidesToShow: 1, 
    slidesToScroll: 4,
    draggable: true,
    scrollLock: false,
    duration: 2.25,
    dots: ".testimonial-slider .dots",
    dragDistance: true,
    arrows: { prev: '#testimonial-glider .test-prev', next: '#testimonial-glider .test-next' },      
    responsive: [
    {breakpoint: 320, settings: {slidesToShow:1,slidesToScroll:1,duration: 0.25}},
    {breakpoint: 767, settings: {slidesToShow: 1, slidesToScroll: 1, itemWidth: 150, duration: 0.25}},
    {breakpoint: 1024, settings: {slidesToShow: 1, slidesToScroll: 1, itemWidth: 150, duration: 0.25}},
    {breakpoint: 1400, settings: {slidesToShow: 1, slidesToScroll: 1, itemWidth: 150, duration: 0.25}}          
    ]
    });
    }
    });
    }
    
    if (document.getElementById("testimonial-glider")) {
        window.addEventListener("load", function() {
        var gliderElement = document.querySelector(".testimonial-slider .glider");
        if (gliderElement) {      
        new Glider(gliderElement, {
        slidesToShow: 1, 
        slidesToScroll: 4,
        draggable: true,
        scrollLock: false,
        duration: 2.25,
        dots: ".testimonial-slider .dots",
        dragDistance: true,
        arrows: { prev: '#testimonial-glider .test-prev', next: '#testimonial-glider .test-next' },      
        responsive: [
        {breakpoint: 320, settings: {slidesToShow:1,slidesToScroll:1,duration: 0.25}},
        {breakpoint: 767, settings: {slidesToShow: 1, slidesToScroll: 1, itemWidth: 150, duration: 0.25}},
        {breakpoint: 1024, settings: {slidesToShow: 1, slidesToScroll: 1, itemWidth: 150, duration: 0.25}},
        {breakpoint: 1400, settings: {slidesToShow: 1, slidesToScroll: 1, itemWidth: 150, duration: 0.25}}          
        ]
        });
        }
        });
        }
        
if (document.getElementById("featured-slide")){
window.addEventListener("load", function (){
const gliderElement = document.querySelector(".featured-slider .glider"); // Use your custom class
const progressBar = document.querySelector(".progress-bar");
if( gliderElement && progressBar ){
const ftGlider  = document.getElementById("ft-glider");    
const ftGloader = document.getElementById("ft-glider-loader");    

const slides    = gliderElement.children;
const totalSlides = slides.length;
const glider = new Glider(gliderElement, {
  slidesToShow: 4, // Default to 4 slides for desktop
  slidesToScroll: 1,
  draggable: true,
  scrollLock: false, // Prevent scrolling past bounds
  duration: 2.25,
  dots: ".dots",
  arrows: {
    prev: ".tail-prev", // Update to match your custom class if necessary
    next: ".tail-next", // Update to match your custom class if necessary
  },
  responsive: [
    {
      // Desktop (screen width > 1024px)
      breakpoint: 1024,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 1,
      },
    },
    {
      // Tablet (screen width > 767px and <= 1024px)
      breakpoint: 768,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
      },
    },
    {
      // Mobile (screen width <= 767px)
      breakpoint: 0, // Default breakpoint for mobile devices
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      },
    },
  ],
});
ftGloader.style.display = 'none';
ftGlider.style.visibility = 'visible';
ftGlider.style.position = 'relative';  // Reset position

// Update progress bar on slide change
function updateProgress(currentSlide){
  let totalVisibleSlides;
  if (window.innerWidth <= 767) {
    totalVisibleSlides = 1;
  } else if (window.innerWidth <= 1024) {
    totalVisibleSlides = 1;
  } else {
    totalVisibleSlides = 1;
  }
  const progressPercentage =
    ((currentSlide + totalVisibleSlides) / totalSlides) * 100;
  progressBar.style.width = `${progressPercentage}%`;
}

// Initialize progress bar
updateProgress(0);

gliderElement.addEventListener("glider-slide-visible", function (event) {
  updateProgress(event.detail.slide);
});
}
});
}

function updateCalcEvt(userNumber){
    const columns       = document.querySelectorAll("#ws-pricing-row .ws-column");
    const colSetters    = document.querySelectorAll(".price-setter");
    
    columns.forEach((column, index) => {
    if (!column.classList.contains("ws-lftcolumn")) {

    const amt = column.getAttribute("data-amt");
    if (amt) {
        const prices = amt.split("|");
        const elmPrice = document.body.classList.contains("locate-int") ? prices[0].trim() : prices[1]?.trim();
        const currency = document.body.classList.contains("locate-int") ? "$" : "₹";
        const userPricing = parseFloat(elmPrice*userNumber).toFixed(2);
        if(colSetters[index-1]) {
            colSetters[index-1].innerHTML = currency+userPricing;
        }
    }
    }
    });
}

const altQty = document.getElementById("alt-qty");
if (altQty) {
    altQty.addEventListener("change", function () {
        updateCalcEvt(this.value);
    });

    altQty.addEventListener("keydown", function (event) {
        if (event.key === "e" || event.key === "E" || event.key === "-") {
            event.preventDefault();
        }else{
            updateCalcEvt(altQty.value);
        }
    });
    altQty.addEventListener("keyup", function(){
        updateCalcEvt(altQty.value);
    });
}
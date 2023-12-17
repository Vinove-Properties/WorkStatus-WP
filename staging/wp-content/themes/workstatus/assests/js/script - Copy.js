var faqItem = document.getElementsByClassName("faq-accordion-item-outer"),
    faqHD = document.getElementsByTagName("h3");
for (i = 0; i < faqHD.length; i++) faqHD[i].addEventListener("click", toggleFaqItem, !1);
function toggleFaqItem() {
    var e = this.parentNode.className;
    for (i = 0; i < faqItem.length; i++) faqItem[i].className = "faq-accordion-item-outer";
    "faq-accordion-item-outer" == e && (this.parentNode.className = "faq-accordion-item-outer open");
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
    "dropdown mega-menu" === e.className ? (e.className += " open") : (e.className = "dropdown mega-menu");
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
        window.scrollY > 100 ? document.getElementById("masthead").classList.add("shady") : document.getElementById("masthead").classList.remove("shady");
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

//Video Script
var hasYTvideo = document.getElementById("has-yt-video");
if( hasYTvideo ){
  var tag = document.createElement("script");
  tag.src = "//www.youtube.com/player_api";
  var player,
    firstScriptTag = document.getElementsByTagName("script")[0];
  firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
  var ytPlayButton = document.getElementById("play-button");
  function onPlayerReady(e) {
    document.getElementById("myDIV").classList.remove("contbox2"), player.playVideo();
  }
  ytPlayButton.addEventListener("click", function () {
    let e = document.getElementById("video").getAttribute("data-src");
    document.getElementById("video").setAttribute("src", e), (player = new YT.Player("video", { events: { onReady: onPlayerReady } }));
  });
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

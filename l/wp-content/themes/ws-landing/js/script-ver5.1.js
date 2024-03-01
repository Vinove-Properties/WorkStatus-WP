var myTabs1,
    formPopup = document.getElementById("formPopup"),
    spanClose = document.getElementsByClassName("closeicon")[0];

function popup(e = "Book A Demo" ){
    document.getElementById("myhiddenid").value = "1";
    let t = document.getElementById("submitButton");    
    if( !document.body.classList.contains('free-tiral-ctemplate') ){
    "" != e ? (t.innerHTML = e) : (t.innerHTML = "Book A Demo")     
    }    
    formPopup.style.display = "block";
}

spanClose &&
    (spanClose.onclick = function(){
        (document.getElementById("myhiddenid").value = "0"), formPopup.classList.remove("on-sidebar"), (formPopup.style.display = "none"), formPopup.classList.remove("is-active");
    }),
    (window.onclick = function (e) {
        e.target == formPopup && (formPopup.style.display = "none");
    });
var sidebarform = document.getElementById("sidebarform"),
    spanClose = document.getElementsByClassName("closeicon")[1];
spanClose &&
    (spanClose.onclick = function () {
        (sidebarform.style.display = "none"), sidebarform.classList.remove("is-active");
    }),
    (window.onclick = function (e) {
        e.target == sidebarform && (sidebarform.style.display = "none");
    });
var $window = window,
buyersAns = document.getElementById("reviewbar");
function removeclass() {
    var e = document.querySelectorAll(".rvcol");
    for (i = 0; i < e.length; i++) e[i].classList.remove("hcol");
    document.getElementById("hidebtn").style.display = "none";
}
if( buyersAns ){
window.addEventListener("scroll", function () {
    if (screen.width <= 1291 && (buyersAns.getBoundingClientRect().top, window.scrollY, document.documentElement.scrollTop > 2400)) {
        document.querySelectorAll(".progress").length > 0 && document.querySelectorAll(".progress [data-progress]").length > 0 && document.querySelectorAll(".progress [data-progress]").forEach((t) => e(t));
        function e(e) {
            (e.className = "animate-progress"), e.setAttribute("style", `--animate-progress:${e.getAttribute("data-progress")}%;`);
        }
    }
    if (screen.width > 1291 && (buyersAns.getBoundingClientRect().top, window.scrollY, document.documentElement.scrollTop > 3600)) {
        document.querySelectorAll(".progress").length > 0 && document.querySelectorAll(".progress [data-progress]").length > 0 && document.querySelectorAll(".progress [data-progress]").forEach((t) => e(t));
        function e(e) {
            (e.className = "animate-progress"), e.setAttribute("style", `--animate-progress:${e.getAttribute("data-progress")}%;`);
        }
    }
});
}
var tabExists = document.getElementById("tabs1");
tabExists && tabs({ el: "#tabs1", tabNavigationLinks: ".tab-link", tabContentContainers: ".tab-content" }).init();
var tabs = document.getElementsByClassName("text-column");
for (j = 0; j < tabs.length; j++) tabs[j].addEventListener("mouseover", clickTab);
function clickTab(e) {
    var t = e.currentTarget.id,
        n = e.currentTarget.getAttribute("data-section"),
        o = t.replace("t", "p"),
        a = document.getElementById(n).getElementsByClassName("page"),
        s = document.getElementById(n).getElementsByClassName("text-column");
    for (i = 0; i < a.length; i++) s[i].classList.remove("active"), a[i].classList.remove("active");
    e.currentTarget.classList.add("active"), document.querySelector("#" + o).classList.add("active");
}
const hasHwUse = document.getElementById("has-ws-timetrack");
if( !hasHwUse ){
    var faqItem = document.getElementsByClassName("faq-accordion-item-outer"),
    faqHD = document.getElementsByTagName("h3");
    for (i = 0; i < faqHD.length; i++) faqHD[i].addEventListener("click", toggleFaqItem, !1);
    function toggleFaqItem(){
    var e = this.parentNode.className;
    for (i = 0; i < faqItem.length; i++) faqItem[i].className = "faq-accordion-item-outer";
    "faq-accordion-item-outer" == e && (this.parentNode.className = "faq-accordion-item-outer open");
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
const scrolly =
        window.requestAnimationFrame ||
        function (e) {
            window.setTimeout(e, 1e3 / 60);
        },
    elementsToShow = document.querySelectorAll(".animate");
function loop() {
    Array.prototype.forEach.call(elementsToShow, function (e) {
        isElementInViewport(e) && e.classList.add("animate-y");
    }),
        scrolly(loop);
}
function isElementInViewport(e) {
    "function" == typeof jQuery && e instanceof jQuery && (e = e[0]);
    let t = e.getBoundingClientRect();
    return (
        (t.top <= 0 && t.bottom >= 0) ||
        (t.bottom >= (window.innerHeight || document.documentElement.clientHeight) && t.top <= (window.innerHeight || document.documentElement.clientHeight)) ||
        (t.top >= 0 && t.bottom <= (window.innerHeight || document.documentElement.clientHeight))
    );
}
const mainHeader = document.getElementById("mainHeader");
function navFunction() {
    let e = document.getElementById("topnav");
    "top_nav" === e.className ? ((e.className += " open"), mainHeader.classList.add("bg-sm")) : ((e.className = "top_nav"), mainHeader.classList.remove("bg-sm"));
}
let hasnavbtn = document.getElementById("has-navbtn");
if( hasnavbtn ){
document.querySelector(".nav_btn").addEventListener("click", navFunction);    
}

document.addEventListener("scroll", () => {
window.scrollY > 10 ? mainHeader.classList.add("bg") : mainHeader.classList.remove("bg");
});

if( document.querySelector(".glider") ){
    new Glider(document.querySelector(".glider"), {
    dots: ".dots",
    slidesToScroll: 1,
    responsive: [
        { breakpoint: 768, settings: { slidesToShow: 2, slidesToScroll: 1 } },
        { breakpoint: 1200, settings: { slidesToShow: 3 } },
    ],
    });    
}


const mediaQuery = window.matchMedia("(min-width: 768px)");
function handleTabletChange(e) {
    e.matches && (document.body.classList.remove("mobile"), document.body.classList.add("desktop"), loop());
}
mediaQuery.addEventListener("change", handleTabletChange), handleTabletChange(mediaQuery);
const form = document.getElementById("ws-lead-form"),
fname   = document.getElementById("first_name"),
email   = document.getElementById("cont_email"),
phone   = document.getElementById("cont_phpne"),
company = document.getElementById("company_name"),
headCount = document.getElementById("team-size"),
wsRequirement  = document.getElementById("ws-requirement"),
captcha = document.getElementById("j-quiz-ans");

captcha.addEventListener("focusout", validateMquiz);

function vcSpaceChecker(e) {
    return !!/^[A-Za-z0-9!@#$%^&*()".,;:{}<>?\[\]\-+=' ]{1,}/.test(e);
}
function showError(e, t, n = !1){
    let o = e.parentElement,
        a = o.querySelector("span.error");
    !1 !== n && (a = document.getElementById(n)), o.classList.add("ws-error"), (a.innerText = t);
}
function doNotingonFocus(e) {
    e.parentElement;
}
function showSucces(e, t = !1) {
    let n = e.parentElement,
        o = n.querySelector("span.error");
    !1 !== t && (o = document.getElementById(t)), n.classList.remove("ws-error"), (o.innerText = "");
}
function checkEmail(e) {
    let t = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    t.test(e.value.trim()) ? showSucces(e) : "" == e.value ? showError(e, "Please Fill Email") : showError(e, "Email is not valid");
}
function phonenumber(e, errorelm = "phone-error") {
    /^[A-Za-z0123456789()\s.+-]+$/.test(e.value.trim()) && e.value.length >= 6 ? showSucces(e, errorelm) : "" == e.value ? showError(e, "Please Fill Phone", errorelm) : showError(e, "Phone Number is not valid", errorelm);
}
function checkEmailEvent(e){
    checkEmail(email);
}
function checkUseName(e) {
    checkLength(fname, 1, 15);
}
function checkCompany(e) {
    checkLength(company, 2, 255);
}

function checkwsRequirement(e) {
    checkLength(wsRequirement, 2, 2550);
}

function checkPhone(e) {
    checkLength(phone, 6, 20), 
    phonenumber(phone);
}

function fixed_checkPhone( sgphone, errorelm ){
    if( !document.body.classList.contains('nr-phone') ){
        phonenumber(sgphone, errorelm);
    }
}

function checkRequired(inputArr){
    inputArr.forEach(function(input){ 
        //console.log( input.name );
        let e = input.value.trim();
        if( !/^[A-Za-z0-9!@#$%^&*()".,;:{}<>?\[\]\-+=' ]{2,}/.test(e) ){

            if( input.name == "fname" ){
                showError(input, `Please Fill Name`);
            }else if( input.name == "phone" ){
                if( input.hasAttribute('data-errelm') ){
                    showError(input, `Please Fill Phone`, input.dataset.errelm);
                }else{
                    showError(input, `Please Fill Phone`, 'phone-error');    
                }                
            }else if( input.name == "email" ){
                showError(input, `Please Fill Email`);
            }else if( input.name == "company" ){
                showError(input, `Please Fill Company Name`);    
            }else if( input.name == "team-size" ){
                showError(input, `Please select team size`);    
            }else{
                if( input.name == "phone" ){
                    showError(input,`This Field is required`, 'phone-error');
                }else{
                    showError(input,`This Field is required`);
                }                
            }
        }else{
            checkEmail(email);
            checkLength(phone,6,20);
            validateMquiz();
        }
    });
}
function checkLength(e, t, n) {
    return e.value.length < t
        ? ("fname" == e.name ? showError(e, "Please Fill Name") : "phone" == e.name ? showError(e, "Please Fill Phone", "phone-error") : "email" == e.name ? showError(e, "Please Fill Email") : showError(e, "This Field is required..."),
          !1)
        : ("phone" == e.name ? showSucces(e, "phone-error") : showSucces(e), !0);
}
function validateMquiz() {
    let que = document.getElementById("j-quiz").textContent,
        ans = document.getElementById("j-quiz-ans").value,
        qerror = document.getElementById("captchaerror");
    return eval(que) == ans ? ((qerror.textContent = ""), !0) : ((qerror.textContent = "Invalid Answer"), !1);
}

let chkPolicy = document.getElementById('checkId');
chkPolicy.addEventListener('change', (event) => {
  if(event.currentTarget.checked) {
    document.getElementById("checkerror").innerHTML = "";
  }
})

function vcCmnFormValidation(){
    if(
    (checkRequired([email, fname, phone, company, captcha, headCount, wsRequirement]), 
    !0 != document.getElementById("checkId").checked)) 
    return (document.getElementById("checkerror").innerHTML = "Please complete this required field."),
    (document.getElementById("checkerror").style.display ="block"),
    !1;
    if (
        ((document.getElementById("checkerror").innerHTML = ""),
        !0 !== vcSpaceChecker(email.value.trim()) || 
        !0 !== vcSpaceChecker(fname.value.trim()) || 
        !0 !== vcSpaceChecker(phone.value.trim()) || 
        !0 !== vcSpaceChecker(company.value.trim()) || 
        !0 !== vcSpaceChecker(wsRequirement.value.trim()) || 
        !0 !== vcSpaceChecker(captcha.value.trim()))
    )
        return !1;
    {
        let e = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        if (!e.test(email.value.trim()) || !1 === validateMquiz() || !1 === checkLength(phone, 6, 20)) return !1;
        var t = document.getElementById("ws-lead-form"),
            n = document.getElementById("submitButton");
        t.classList.add("in-process"), (n.innerText = "Please wait..."), (n.disabled = !0), n.classList.add("hold-on"), t.submit();
    }
}
fname.addEventListener("keyup", checkUseName),
fname.addEventListener("keypress", checkUseName),
fname.addEventListener("keydown", ws_validateStr),
fname.addEventListener("focusout", checkUseName),

company.addEventListener("keyup", checkCompany),
company.addEventListener("keypress", checkCompany),
company.addEventListener("keydown", checkCompany),
company.addEventListener("focusout", checkCompany),

phone.addEventListener("keyup", checkPhone),
phone.addEventListener("keypress", checkPhone),
phone.addEventListener("keydown", ws_checkphonenumber),
phone.addEventListener("focusout", checkPhone),
email.addEventListener("focusout", checkEmailEvent),
email.addEventListener("focusin", function () {
    doNotingonFocus(email);
});

wsRequirement.addEventListener("keyup", checkwsRequirement);
wsRequirement.addEventListener("keypress", checkwsRequirement);
wsRequirement.addEventListener("keydown", checkwsRequirement);
wsRequirement.addEventListener("focusout", checkwsRequirement);

var jQuizExists = document.getElementById("j-quiz");
function generateWsQuiz() {
    let e = Math.floor(9 * Math.random()) + 1,
        t = Math.floor(9 * Math.random()) + 1;
    document.getElementById("j-quiz").textContent = e + " + " + t;
}
function ws_numcheck(e, t) {
    var n = e || window.event;
    if ("paste" === n.type) o = event.clipboardData.getData("text/plain");
    else {
        var o = n.keyCode || n.which;
        o = String.fromCharCode(o);
    }
    (!/[0-9]|\./.test(o) || t.value.length > 1) && ((n.returnValue = !1), n.preventDefault && n.preventDefault());
}
function setoptValue(e, t, n, o) {
    let a = document.getElementById(o),
        s = a.getElementsByClassName("arrow-btn"),
        r = a.getElementsByClassName("in-options"),
        l = document.getElementById(t),
        c = document.getElementById(n),
        m = a.getElementsByClassName("error"),
        d = a.getElementsByClassName("select-box");
    s[0].classList.toggle("rotate"), r[0].classList.toggle("open-close"), (m[0].innerHTML = ""), d[0].classList.remove("ws-error"), (l.innerHTML = e), (c.value = e);
}
function apnSelect(e) {
    let t = document.getElementById(e),
        n = t.getElementsByClassName("arrow-btn"),
        o = t.getElementsByClassName("in-options");
    n[0].classList.toggle("rotate"), o[0].classList.toggle("open-close");
}
function ws_getdialCode(e) {
    let t = "";
    return (
        [
            ["af", "93"],
            ["al", "355"],
            ["dz", "213"],
            ["as", "1"],
            ["ad", "376"],
            ["ao", "244"],
            ["ai", "1"],
            ["ag", "1"],
            ["ar", "54"],
            ["am", "374"],
            ["aw", "297"],
            ["au", "61"],
            ["at", "43"],
            ["az", "994"],
            ["bs", "1"],
            ["bh", "973"],
            ["bd", "880"],
            ["bb", "1"],
            ["by", "375"],
            ["be", "32"],
            ["bz", "501"],
            ["bj", "229"],
            ["bm", "1"],
            ["bt", "975"],
            ["bo", "591"],
            ["ba", "387"],
            ["bw", "267"],
            ["br", "55"],
            ["io", "246"],
            ["vg", "1"],
            ["bn", "673"],
            ["bg", "359"],
            ["bf", "226"],
            ["bi", "257"],
            ["kh", "855"],
            ["cm", "237"],
            ["ca", "1"],
            ["cv", "238"],
            ["bq", "599"],
            ["ky", "1"],
            ["cf", "236"],
            ["td", "235"],
            ["cl", "56"],
            ["cn", "86"],
            ["cx", "61"],
            ["cc", "61"],
            ["co", "57"],
            ["km", "269"],
            ["cd", "243"],
            ["cg", "242"],
            ["ck", "682"],
            ["cr", "506"],
            ["ci", "225"],
            ["hr", "385"],
            ["cu", "53"],
            ["cw", "599"],
            ["cy", "357"],
            ["cz", "420"],
            ["dk", "45"],
            ["dj", "253"],
            ["dm", "1"],
            ["do", "1"],
            ["ec", "593"],
            ["eg", "20"],
            ["sv", "503"],
            ["gq", "240"],
            ["er", "291"],
            ["ee", "372"],
            ["et", "251"],
            ["fk", "500"],
            ["fo", "298"],
            ["fj", "679"],
            ["fi", "358"],
            ["fr", "33"],
            ["gf", "594"],
            ["pf", "689"],
            ["ga", "241"],
            ["gm", "220"],
            ["ge", "995"],
            ["de", "49"],
            ["gh", "233"],
            ["gi", "350"],
            ["gr", "30"],
            ["gl", "299"],
            ["gd", "1"],
            ["gp", "590"],
            ["gu", "1"],
            ["gt", "502"],
            ["gg", "44"],
            ["gn", "224"],
            ["gw", "245"],
            ["gy", "592"],
            ["ht", "509"],
            ["hn", "504"],
            ["hk", "852"],
            ["hu", "36"],
            ["is", "354"],
            ["in", "91"],
            ["id", "62"],
            ["ir", "98"],
            ["iq", "964"],
            ["ie", "353"],
            ["im", "44"],
            ["il", "972"],
            ["it", "39"],
            ["jm", "1"],
            ["jp", "81"],
            ["je", "44"],
            ["jo", "962"],
            ["kz", "7"],
            ["ke", "254"],
            ["ki", "686"],
            ["xk", "383"],
            ["kw", "965"],
            ["kg", "996"],
            ["la", "856"],
            ["lv", "371"],
            ["lb", "961"],
            ["ls", "266"],
            ["lr", "231"],
            ["ly", "218"],
            ["li", "423"],
            ["lt", "370"],
            ["lu", "352"],
            ["mo", "853"],
            ["mk", "389"],
            ["mg", "261"],
            ["mw", "265"],
            ["my", "60"],
            ["mv", "960"],
            ["ml", "223"],
            ["mt", "356"],
            ["mh", "692"],
            ["mq", "596"],
            ["mr", "222"],
            ["mu", "230"],
            ["yt", "262"],
            ["mx", "52"],
            ["fm", "691"],
            ["md", "373"],
            ["mc", "377"],
            ["mn", "976"],
            ["me", "382"],
            ["ms", "1"],
            ["ma", "212"],
            ["mz", "258"],
            ["mm", "95"],
            ["na", "264"],
            ["nr", "674"],
            ["np", "977"],
            ["nl", "31"],
            ["nc", "687"],
            ["nz", "64"],
            ["ni", "505"],
            ["ne", "227"],
            ["ng", "234"],
            ["nu", "683"],
            ["nf", "672"],
            ["kp", "850"],
            ["mp", "1"],
            ["no", "47"],
            ["om", "968"],
            ["pk", "92"],
            ["pw", "680"],
            ["ps", "970"],
            ["pa", "507"],
            ["pg", "675"],
            ["py", "595"],
            ["pe", "51"],
            ["ph", "63"],
            ["pl", "48"],
            ["pt", "351"],
            ["pr", "1"],
            ["qa", "974"],
            ["re", "262"],
            ["ro", "40"],
            ["ru", "7"],
            ["rw", "250"],
            ["bl", "590"],
            ["sh", "290"],
            ["kn", "1"],
            ["lc", "1"],
            ["mf", "590"],
            ["pm", "508"],
            ["vc", "1"],
            ["ws", "685"],
            ["sm", "378"],
            ["st", "239"],
            ["sa", "966"],
            ["sn", "221"],
            ["rs", "381"],
            ["sc", "248"],
            ["sl", "232"],
            ["sg", "65"],
            ["sx", "1"],
            ["sk", "421"],
            ["si", "386"],
            ["sb", "677"],
            ["so", "252"],
            ["za", "27"],
            ["kr", "82"],
            ["ss", "211"],
            ["es", "34"],
            ["lk", "94"],
            ["sd", "249"],
            ["sr", "597"],
            ["sj", "47"],
            ["sz", "268"],
            ["se", "46"],
            ["ch", "41"],
            ["sy", "963"],
            ["tw", "886"],
            ["tj", "992"],
            ["tz", "255"],
            ["th", "66"],
            ["tl", "670"],
            ["tg", "228"],
            ["tk", "690"],
            ["to", "676"],
            ["tt", "1"],
            ["tn", "216"],
            ["tr", "90"],
            ["tm", "993"],
            ["tc", "1"],
            ["tv", "688"],
            ["vi", "1"],
            ["ug", "256"],
            ["ua", "380"],
            ["ae", "971"],
            ["gb", "44"],
            ["us", "1"],
            ["uy", "598"],
            ["uz", "998"],
            ["vu", "678"],
            ["va", "39"],
            ["ve", "58"],
            ["vn", "84"],
            ["wf", "681"],
            ["eh", "212"],
            ["ye", "967"],
            ["zm", "260"],
            ["zw", "263"],
            ["ax", "358"],
        ].forEach(function (n) {
            n[0] == e && (t = n[1]);
        }),
        t
    );
}
jQuizExists && generateWsQuiz();
const phoneInputField = document.querySelector("#pcode");
function ws_checkphonenumber(e) {
    -1 !== [46, 8, 9, 27, 13, 187, 189, 16, 17].indexOf(e.keyCode) ||
        (65 == e.keyCode && !0 === e.ctrlKey) ||
        (86 == e.keyCode && !0 === e.ctrlKey) ||
        (67 == e.keyCode && !0 === e.ctrlKey) ||
        (88 == e.keyCode && !0 === e.ctrlKey) ||
        (e.keyCode >= 35 && e.keyCode <= 39) ||
        ((e.shiftKey || e.keyCode < 48 || e.keyCode > 57) && (e.keyCode < 96 || e.keyCode > 105) && e.preventDefault());
}
function ws_validateStr(e) {
    if ((e.keyCode > 64 && e.keyCode < 91) || 8 == e.keyCode || 9 == e.keyCode || 32 == e.keyCode) return !0;
    e.preventDefault();
}
if (
    (intlTelInput(phoneInputField, {
        initialCountry: "auto",
        geoIpLookup: function (e) {
            let t = "";
            fetch("https://www.workstatus.io/wp-json/ws-api/v1/ipinfo")
                .then((e) => e.json())
                .then((n) => {
                    let o = (t = n && n.country ? n.country : "in").toLowerCase();
                    e(o),
                        setTimeout(function () {
                            let e = ws_getdialCode(o);
                            document.getElementById("pcode").value = "+" + e;                            
                            if( document.getElementById("sg-pcode") ){
                                document.getElementById("sg-pcode").value = "+" + e;    
                            }

                            if( document.getElementById("sg-pcode2") ){
                                document.getElementById("sg-pcode2").value = "+" + e;    
                            }
                            if( document.getElementById("sg-pcode3") ){
                                document.getElementById("sg-pcode3").value = "+" + e;    
                            }

                            /*Template v5.0 Requirement*/
                            if( document.getElementById('pcode1') ){
                                document.getElementById('pcode1').value = "+" + e;    
                            }
                            if( document.getElementById('pcode2') ){
                                document.getElementById('pcode2').value = "+" + e;    
                            }
                            if( document.getElementById('pcode3') ){
                                document.getElementById('pcode3').value = "+" + e;    
                            }
                            
                            /*Template v6.1 Requirement*/
                            if( document.getElementById("vs_pcode") ){
                                document.getElementById("vs_pcode").value = "+" + e;    
                            }
                        }, 10);
                });
        },
    }),
    /*
    document.addEventListener("DOMContentLoaded", function () {
        let e = document.getElementsByClassName("iti__selected-flag"),
            t = document.getElementById("pcode"),
            n = (e = e[0].getAttribute("title")).replace(/\D/g, "");
        t.value = "+" + n + " ";
    }),
    */
    document.addEventListener( "click", function(e){
            let t = document.getElementById("pcode");
            if (e.target.matches("#in-pcode .iti__country")) {
                let n = document.getElementById("in-pcode").getElementsByClassName("iti__selected-flag"),
                    o = (n = n[0].getAttribute("title")).replace(/\D/g, "");
                console.log(n);    
                (t.value = "+" + o + " "), document.getElementById("cont_phpne").focus(), e.preventDefault();
            }
        },
        !1
    ),
    screen && screen.width > 768)
)
    function topFunction() {
        (document.body.scrollTop = 0), (document.documentElement.scrollTop = 0);
    }
if (screen && screen.width < 768)
    function topFunction() {
        (document.body.scrollTop = 400), (document.documentElement.scrollTop = 400);
    }
if( !document.body.classList.contains('free-tiral-ctemplate') ){
	setTimeout(function () {
	    let e = document.getElementById("formPopup");
	    "none" === e.style.display && (e.classList.add("on-sidebar"), (e.style.display = "block"));
	}, 6e4);	
}    


document.addEventListener("DOMContentLoaded", function() {
  var elements = document.querySelectorAll(".scroll-counter")
  elements.forEach(function(item) {
    item.counterAlreadyFired = false
    item.counterSpeed = item.getAttribute("data-counter-time") / 45
    item.counterTarget = +item.innerText
    item.counterCount = 0
    item.counterStep = item.counterTarget / item.counterSpeed

    item.updateCounter = function() {
      item.counterCount = item.counterCount + item.counterStep
      item.innerText = Math.ceil(item.counterCount)

      if (item.counterCount < item.counterTarget) {
        setTimeout(item.updateCounter, item.counterSpeed)
      } else {
        item.innerText = item.counterTarget
      }
    }
  })

  var isElementVisible = function isElementVisible(el) {
    var scroll = window.scrollY || window.pageYOffset
    var boundsTop = el.getBoundingClientRect().top + scroll
    var viewport = {
      top: scroll,
      bottom: scroll + window.innerHeight,
    }
    var bounds = {
      top: boundsTop,
      bottom: boundsTop + el.clientHeight,
    }
    return (
      (bounds.bottom >= viewport.top && bounds.bottom <= viewport.bottom) ||
      (bounds.top <= viewport.bottom && bounds.top >= viewport.top)
    )
  }

  // Funciton that will get fired uppon scrolling
  var handleScroll = function handleScroll() {
    elements.forEach(function(item, id) {
      if (true === item.counterAlreadyFired) return
      if (!isElementVisible(item)) return
      item.updateCounter()
      item.counterAlreadyFired = true
    })
  }

  // Fire the function on scroll
  window.addEventListener("scroll", handleScroll)
})
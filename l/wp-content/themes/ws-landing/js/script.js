//tabs script//

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

//tab script end//


//faq script start//

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

//faq script end //




// Animation frame
const scrolly = window.requestAnimationFrame ||
    function (callback) { window.setTimeout(callback, 1000 / 60) };
const elementsToShow = document.querySelectorAll('.animate');
function loop() {
    Array.prototype.forEach.call(elementsToShow, function (element) {
        if (isElementInViewport(element)) {
            element.classList.add('animate-y');
        }
    });
    scrolly(loop);
}
// loop();

function isElementInViewport(el) {
    if (typeof jQuery === "function" && el instanceof jQuery) {
        el = el[0];
    }
    const rect = el.getBoundingClientRect();
    return (
        (rect.top <= 0
            && rect.bottom >= 0)
        ||
        (rect.bottom >= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.top <= (window.innerHeight || document.documentElement.clientHeight))
        ||
        (rect.top >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight))
    );
}

// mobile nav toggle
const mainHeader = document.getElementById("mainHeader")
document.querySelector(".nav_btn").addEventListener('click', navFunction)
function navFunction() {
    const x = document.getElementById("topnav");
    if (x.className === "top_nav") {
        x.className += " open";
        mainHeader.classList.add("bg-sm");
    } else {
        x.className = "top_nav";
        mainHeader.classList.remove("bg-sm");
    }
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



//testimonails glider slider

new Glider(document.querySelector('.glider'), {
    dots: '.dots',
    slidesToScroll: 1,
    responsive: [
        {
            breakpoint: 768,
            settings: {
                // Set to `auto` and provide item width to adjust to viewport
                slidesToShow: 2,
                slidesToScroll: 1
            }
        }, {
            breakpoint: 1200,
            settings: {
                slidesToShow: 3
            }
        }
    ]
});


//to add desktop class to body
// Create a condition that targets viewports at least 768px wide
const mediaQuery = window.matchMedia('(min-width: 768px)')

function handleTabletChange(e) {
    // Check if the media query is true
    if (e.matches) {

        document.body.classList.remove("mobile")
        document.body.classList.add("desktop")
        //for html elements fadein y animation
        loop()
    }
}

// Register event listener
// mediaQuery.addListener(handleTabletChange) //depricated
mediaQuery.addEventListener('change', handleTabletChange)

// Initial check
handleTabletChange(mediaQuery)


//*Form Validation Code Starts*/
const form      = document.getElementById('ws-lead-form');
const fname     = document.getElementById('first_name');
const lname     = document.getElementById('last_name');
const email     = document.getElementById('cont_email');
const phone     = document.getElementById('cont_phpne');
const company   = document.getElementById('company_name');
const tsize     = document.getElementById('team-size');
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
    let formControl = input.parentElement;
    let small = formControl.querySelector('span.error');    
    if( spDiv !== false ){
    small = document.getElementById(spDiv);
    }
    formControl.classList.add('ws-error');
    small.innerText = message;
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
function checkEmail(input) {
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
function checkLength(input, min ,max) {
    if(input.value.length < min) {
        if( input.name == "fname"  ){            
            showError(input, `Please Fill First Name`);
        }else if( input.name == "phone"  ){
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
    checkRequired([email,fname, phone,lname,captcha,company,tsize]);
    if(document.getElementById('checkId').checked == true){ 
        document.getElementById("checkerror").innerHTML="";  
     }
     else{
        document.getElementById("checkerror").innerHTML="Please complete this required field";
        return false;
     }
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
    const phoneInputField = document.querySelector("#pcode");
    
    intlTelInput(phoneInputField, {
    initialCountry: "auto",
    geoIpLookup: function(cb){
    let inCountry = "";    
    fetch('https://www.workstatus.io/?ws-action=ipinfo')
    .then( res => res.json() )
    .then(
        data => {
        inCountry = (data && data.country) ? data.country : "gb";
        let conCode = inCountry.toLowerCase();        
        cb(conCode);
        setTimeout( function(){
            let iDialCode = ws_getdialCode( conCode );
            let phoneInp  = document.getElementById('pcode');                  
            phoneInp.value = '+'+iDialCode;
        }, 10 );
        
        }
    )
    },
    //utilsScript: "https://www.valuecoders.com/v2wp/wp-content/themes/valuecoders/js/utils.js?flush=1212"
    });
    
    


  document.addEventListener("DOMContentLoaded", function() {
  let title     = document.getElementsByClassName('iti__selected-flag');
  let phoneInp  = document.getElementById('pcode');
  title         = title[0].getAttribute('title');
  let res       = title.replace(/\D/g, "");
  phoneInp.value = '+'+res + ' ';
  });
  
  document.addEventListener('click', function (event) {
  let phoneInp  = document.getElementById('pcode');    
  if(event.target.matches('.iti__country')){
      let title         = document.getElementsByClassName('iti__selected-flag');    
      title             = title[0].getAttribute('title');
      let res       = title.replace(/\D/g, "");
      phoneInp.value = '+'+res + ' ';
      document.getElementById("cont_phpne").focus();
      event.preventDefault();
      
  }  
  }, false);

  function ws_checkphonenumber(e) {
    let keyArray = [46, 8, 9, 27, 13, 187, 189, 16, 17];
    
    -1 !== keyArray.indexOf(e.keyCode) || 65 == e.keyCode && !0 === e.ctrlKey || 86 == e.keyCode && !0 === e.ctrlKey || 67 == e.keyCode && !0 === e.ctrlKey || 88 == e.keyCode && !0 === e.ctrlKey || e.keyCode >= 35 && e.keyCode <= 39 || (e.shiftKey || e.keyCode < 48 || e.keyCode > 57) && (e.keyCode < 96 || e.keyCode > 105) && e.preventDefault()
}

function ws_validateStr( e ) {
    if ( e.keyCode > 64 && e.keyCode < 91 || 8 == e.keyCode || 9 == e.keyCode || 32 == e.keyCode )
        return !0;
    e.preventDefault()
}
if (screen && screen.width > 768) {
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
}

if (screen && screen.width < 768) {
function topFunction() {
    document.body.scrollTop = 400;
    document.documentElement.scrollTop = 400;
  }
}
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
    
    /*
    document.forms["theForm"].onsubmit = function(e) {
      var allInput = getAllElementsWithAttribute('required');
      for (key in allInput) {
        if (!allInput[key].value) {
          e.preventDefault();
          allInput[key].className += allInput[key].className.indexOf('invalid') > -1 ? '' : 'invalid';
        } else {
          console.log(key)
          allInput[key].className = allInput[key].className.replace(/\binvalid\b/, '');
        }
      }
    }
    */
    
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

function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

const form      = document.getElementById('ws-lead-form');
const fname     = document.getElementById('first_name');
const lname     = document.getElementById('last_name');
const email     = document.getElementById('cont_email');
const phone     = document.getElementById('cont_phpne');
const company   = document.getElementById('company_name');
const tsize     = document.getElementById('team-size');
const captcha   = document.getElementById('j-quiz-ans');


//Show input error messages
function showError(input, message) {
    const formControl = input.parentElement;
    formControl.className = 'form-group';
    const small = formControl.querySelector('span');
    formControl.className = 'form-group ws-error';
    small.innerText = message;
}

function doNotingonFocus(input) {
    const formControl = input.parentElement;
    formControl.className = 'form-group';
}

//show success colour
function showSucces(input){
    const formControl = input.parentElement;
    const small = formControl.querySelector('span');
    formControl.className = 'form-group';
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
        showSucces( inputtxt )
    }else{
        if( inputtxt.value == '' ){
            showError(inputtxt,'Please Fill Phone');
        }else{
            showError( inputtxt, 'Phone Number is not valid' );
        }
        
    }
}

fname.addEventListener("keyup", checkUseName);
fname.addEventListener("keypress", checkUseName);
fname.addEventListener("keydown", checkUseName);

lname.addEventListener("keyup", checkCont);
lname.addEventListener("keypress", checkCont);
lname.addEventListener("keydown", checkCont);
lname.addEventListener("focusout", checkCont);

company.addEventListener("keyup", checkCompany);
company.addEventListener("keypress", checkCompany);
company.addEventListener("keydown", checkCompany);
company.addEventListener("focusout", checkCompany);

tsize.addEventListener("change", function(){
    checkLength(tsize,1,20);
});

phone.addEventListener("keyup", checkPhone);
phone.addEventListener("keypress", checkPhone);
phone.addEventListener("keydown", checkPhone);
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
    checkLength(company,1,255);
}

function checkPhone(event){
  checkLength(phone,10,10);
  phonenumber(phone);
}

//checkRequired fields
function checkRequired(inputArr){
    //console.log( inputArr );
    inputArr.forEach(function(input){ 
        console.log( input.value );
        let e = input.value.trim();
        if( !/^[A-Za-z0-9!@#$%^&*()".,;:{}<>?\[\]\-+=' ]{1,}/.test(e) ){
            if( input.name == "fname"  ){
                showError(input, `Please Fill First Name`);
            }else if( input.name == "phone"  ){
                showError(input, `Please Fill Phone`);
            }else if( input.name == "email"  ){
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
                showError(input,`This Field is required`)   
            }
        }else {
            checkLength(fname,1,15); 
            checkEmail(email);
            checkLength(lname,1,255);
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
            showError(input, `Please Fill Phone`);
        }else if( input.name == "email"  ){
            showError(input, `Please Fill Email`);
        }else if( input.name == "lname" ){
            showError(input, `Please Fill Last Name`);    
        }else{
            showError(input,`This Field is required`)   
        } 
    }else {
        showSucces(input);
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

function vcSpaceChecker( input ){
    if( !/^[A-Za-z0-9!@#$%^&*()".,;:{}<>?\[\]\-+=' ]{1,}/.test( input ) ){
        return false;
    }else{
        return true;
    }
}

//get FieldName
function vcCmnFormValidation(){
    checkRequired([fname,email,phone,lname,captcha,company,tsize]);
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

        var form    = document.getElementById("ws-lead-form");
        var formBtn = document.getElementById("submitButton");
        form.classList.add('in-process');
        formBtn.innerText = "Please wait...";
        formBtn.disabled = true;
        formBtn.classList.add('hold-on');
        //alert("doSubmit");
        //return false;
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
/*Cmn Functions*/
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
      let response = JSON.parse(this.responseText);
      console.log( response );
      var conCode = response.country;
      selectOptionByDataCode( conCode, "su-pcode");
  }else{
    selectOptionByDataCode( "IN", "su-pcode");
  }
}
xhttp.send();
});

function showError(input, message, spDiv = false ) {
    //console.log(input);
    let formControl = input.parentElement;    
    let small       = formControl.querySelector('span.error');    
    if( spDiv !== false ){
    small = document.getElementById(spDiv);
    }    
    formControl.classList.add('ws-error');
    small.innerText = message;
    //console.log( small );
}

function doNotingonFocus(input) {
    const formControl = input.parentElement;
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

function checkEmail(input){
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

//checkRequired fields
function checkRequired(inputArr){
    inputArr.forEach(function(input){ 
        let e = input.value.trim();
        if( !/^[A-Za-z0-9!@#$%^&*()".,;:{}<>?\[\]\-+=' ]{2,}/.test(e) ){
            if( input.name == "uname" ){
                showError(input, `Please Fill Name`);                
            }else if( input.name == "phone" ){
            let inpID = input.classList.contains('ephone-cls') ? 'ephone-error' : 'phone-error';
            if( input.classList.contains('su-phone') ){
                inpID = 'su-phone-err';
            }
            showError(input, `Please Fill Phone`, inpID);
            }else if( input.name == "uemail" ){
                showError(input, `Please Fill Email`);
            }else{
                showError(input,`This Field is required`);
            }
        }
    });
}

function vcSpaceChecker( input ){
    if( !/^[A-Za-z0-9!@#$%^&*()".,;:{}<>?\[\]\-+=' ]{1,}/.test( input ) ){
        return false;
    }else{
        return true;
    }
}

//check input Length
function checkLength(input, min, max){
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
var wsSerializeForm = function(form){
    var obj = {};
    var formData = new FormData(form);
    for (var key of formData.keys()) {
        obj[key] = formData.get(key);
    }
    return obj;
}

function get_ws_signupform(pid, ptype){
    document.getElementById("ws_pid").value = pid;
    document.getElementById("ws_stype").value = ptype;

    let suForm = document.getElementById("formPopup-su");
    
    suForm.style.display = "block";

    let wsIntentForm = document.getElementById("ws-intent-popup");
    if( wsIntentForm ){
        if( wsIntentForm.classList.contains('visible') ){
            wsIntentForm.classList.remove('visible');
        }
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
    suForm.style.display = "none";
}

function showSuPopup(){
    let suForm = document.getElementById("formPopup-su");
    suForm.style.display = "block";
}


function getQueryParams(url){
    const paramArr = url.slice(url.indexOf('?') + 1).split('&');
    const params = {};
    paramArr.map( param => {
        const [key, val] = param.split('=');
        params[key] = decodeURIComponent(val);
    })
    return params;
}

function ws_checkphonenumber(e) {
    let keyArray = [46, 8, 9, 27, 13, 187, 189, 16, 17];
    -1 !== keyArray.indexOf(e.keyCode) || 65 == e.keyCode && !0 === e.ctrlKey || 86 == e.keyCode && !0 === e.ctrlKey || 67 == e.keyCode && !0 === e.ctrlKey || 88 == e.keyCode && !0 === e.ctrlKey || e.keyCode >= 35 && e.keyCode <= 39 || (e.shiftKey || e.keyCode < 48 || e.keyCode > 57) && (e.keyCode < 96 || e.keyCode > 105) && e.preventDefault()
}

function ws_validateStr( e ) {
    if ( e.keyCode > 64 && e.keyCode < 91 || 8 == e.keyCode || 9 == e.keyCode || 32 == e.keyCode )
        return !0;
    e.preventDefault()
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
su_name.addEventListener("keydown", nameCheck_su);
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
})

let sup_inputs  = document.querySelectorAll('#formPopup-su .form-group input');
let inputValidator = {
    "uname": false,
    "uemail": false,
    "phone": false,
    "password": false,
    "cnf_password": false
}

function signupFrmValidation(e){
    checkRequired([su_name, su_email, su_phone, su_pass, su_cpass, su_pcode]);
    if( !suchkPolicy.checked ){
        return false;
    }        

    if(
        ( vcSpaceChecker(su_email.value.trim()) === true ) &&
        ( vcSpaceChecker(su_name.value.trim()) === true ) &&
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
        }

        var spnMsg          = document.getElementById("ws-apimsg");
        var formBtn         = document.getElementById("su-submitButton");
        formBtn.innerText   = "Please Wait...";
        formBtn.disabled    = true;
        spnMsg.className    = "";
        spnMsg.innerHTML    = "";

        var formData        = JSON.stringify( wsSerializeForm(e) );
        var xhttp           = new XMLHttpRequest();
        xhttp.open("POST", wsObj.admin_ajax+'?action=ws_signup_api', true); 
        xhttp.setRequestHeader("Content-Type", "application/json");
        xhttp.onreadystatechange = function(){
            if( (this.readyState == 4) && (this.status == 200) ){
                let response = JSON.parse( this.responseText );
                console.log( response );
                if( response.response.code == "200" ){
                    const xdForm = document.getElementById("xd-form");
                    e.reset();
                    window.location.href = 'https://www.workstatus.io/signup-thanks?email='+response.response.email;
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
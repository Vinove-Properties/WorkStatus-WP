var wsSerializeForm = function(form){
    var obj = {};
    var formData = new FormData(form);
    for (var key of formData.keys()) {
        obj[key] = formData.get(key);
    }
    return obj;
}

function strSpaceChecker(e) {
    return !!/^[A-Za-z0-9!@#$%^&*()".,;:{}<>?\[\]\-+=' ]{1,}/.test(e);
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

const su_name   = document.getElementById("su-name");
const su_email  = document.getElementById("su-email");
const su_pcode  = document.getElementById("su-pcode");
const su_phone  = document.getElementById("su-phone");
const su_pass   = document.getElementById("su-password");
const su_cpass  = document.getElementById("su-cpassword");

function nameCheck_su(event){
  checkLength(su_name,1,15);
}

function emailCheck_su(event){
    checkEmail(su_email);
}

su_pcode.addEventListener('change', function(){
    if( this.value !== "" ){
        showSucces( su_pcode );
    }else{
        showError( su_pcode, "Pleasee select country code." )
    }
  
});
function phoneCheck_su(event){
    checkLength(su_phone,7,20);
    //phonenumber(su_phone);
}

function wscheckPassword(str){
    var re = /^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{6,}$/;
    return re.test(str);
}

function passCheck_su(event){
    if( wscheckPassword(su_pass.value.trim()) === false ){
        showError( su_pass, 'Use 6 or more characters with a mix of letters, numbers & symbols');        
    }else{
        showSucces( su_pass );
    }    
}

function passCheckc_su(event){
    if( wscheckPassword(su_cpass.value.trim()) === false ){
        showError( su_cpass, 'Use 6 or more characters with a mix of letters, numbers & symbols');        
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

su_email.addEventListener("focusout", emailCheck_su);
su_email.addEventListener("focusin", function(){
    doNotingonFocus( su_email );
});

su_phone.addEventListener("keyup", phoneCheck_su);
su_phone.addEventListener("keypress", phoneCheck_su);
su_phone.addEventListener("keydown", ws_checkphonenumber);
su_phone.addEventListener("focusout", phoneCheck_su);

su_pass.addEventListener("keyup", passCheck_su);
su_pass.addEventListener("keypress", passCheck_su);
su_pass.addEventListener("focusout", passCheck_su);

su_cpass.addEventListener("keyup", passCheckc_su);
su_cpass.addEventListener("keypress", passCheckc_su);
su_cpass.addEventListener("focusout", passCheckc_sufu);


const suchkPolicy = document.getElementById('su-accept');
suchkPolicy.addEventListener('change', (event) => {
  var suformBtn     = document.getElementById("su-submitButton");
  let errCheck      = document.querySelectorAll('#formPopup-su .form-group');
  let errCount      = true;
  errCheck.forEach((elm) => {
    if( elm.classList.contains('ws-error') ) errCount =  false;
  });    

  if(event.currentTarget.checked && (errCount === true) ){
    if( 
    ( strSpaceChecker(su_email.value.trim()) === true ) &&
    ( strSpaceChecker(su_name.value.trim()) === true ) &&
    ( strSpaceChecker(su_pcode.value.trim()) === true ) &&
    ( strSpaceChecker(su_phone.value.trim()) === true ) &&
    ( strSpaceChecker(su_pass.value.trim()) === true ) &&
    ( strSpaceChecker(su_cpass.value.trim()) === true )
    ){
        suformBtn.disabled = false;
    }    
  }else{
    suformBtn.disabled = true;
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
let buttonSend = document.getElementById('su-submitButton');
sup_inputs.forEach((input) => {
    input.addEventListener('focusout', () => {
        console.log("Working...UIUIUI");
        let name = event.target.getAttribute('name');
        if( input.parentElement.classList.contains('ws-error') ){
            inputValidator[name] = false;
        }else{
            inputValidator[name] = true;            
        }
        
        let allTrue = Object.keys(inputValidator).every((item) => {
            return inputValidator[item] === true
        });

        if(allTrue){
            if( suchkPolicy.checked ){
                buttonSend.disabled = false;
            }else{
                buttonSend.disabled = true;
            }            
        }else{
            buttonSend.disabled = true;
        }
    });
});


function signupFrmValidation(e){
    checkRequired([su_name, su_email, su_phone, su_pass, su_cpass, su_pcode]);
    if(
        ( strSpaceChecker(su_email.value.trim()) === true ) &&
        ( strSpaceChecker(su_name.value.trim()) === true ) &&
        ( strSpaceChecker(su_pcode.value.trim()) === true ) &&
        ( strSpaceChecker(su_phone.value.trim()) === true ) &&
        ( strSpaceChecker(su_pass.value.trim()) === true ) &&
        ( strSpaceChecker(su_cpass.value.trim()) === true )
    ){
        const sre = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        if( !sre.test(su_email.value.trim()) ){
            return false;
        }

        if( checkLength(su_phone,7,20) === false ){
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
        xhttp.open("POST", suObj.ajaxurl+'?action=ws_signup_api', true); 
        xhttp.setRequestHeader("Content-Type", "application/json");
        xhttp.onreadystatechange = function(){
            if( (this.readyState == 4) && (this.status == 200) ){
                let response = JSON.parse( this.responseText );
                //console.log( response.resp );
                if( response.response.code == "200" ){
                    const xdForm = document.getElementById("xd-form");
                    e.reset();
                    window.location.href = suObj.siteurl+'/signup-thanks';
                    //window.location.href = 'https://www.workstatus.io/l/staging/?page_id=2680';
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
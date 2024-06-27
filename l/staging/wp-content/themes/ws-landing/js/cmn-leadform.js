/* Form validation : common function rendered from script-ver5.1.js */
function getCmnLeadForm( tgr = true ){
	let elm = document.getElementById("cmnLeadForm");
	if( tgr == false ){
		elm.style.display = "none";
	}else{
		elm.style.display = "block";
	}
	
}

document.addEventListener("DOMContentLoaded", function(){
const phoneInputField   = document.querySelector("#cmn-pcode");
//const phoneInputFields  = document.querySelector("#fpcode");
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
        cb(conCode);
        setTimeout( 
            function(){
            let iDialCode = ws_getdialCode( conCode );
            let phoneInp  = document.getElementById('cmn-pcode');
            phoneInp.value = '+'+iDialCode;
            countryInp.value = conCode;
        }, 10 );    
        }
    )
    },
    });
    setTimeout( function(){
        let title       = document.getElementsByClassName('iti__selected-flag');
        let phoneInp    = document.getElementById('cmn-pcode');
        title           = title[0].getAttribute('title');
        let res       	= title.replace(/\D/g, "");
        phoneInp.value = '+'+res + ' ';
    }, 1000 );
    }, 1000 );
}
});
/*
document.addEventListener("DOMContentLoaded", function(){
	const cmnPhnCode = document.querySelector("#cmn-pcode");
	if( cmnPhnCode ){
		intlTelInput(cmnPhnCode, {
		initialCountry: "auto",
		geoIpLookup:function (e){ alert("OK");
		let t = "";
		fetch("https://www.workstatus.io/wp-json/ws-api/v1/ipinfo")
		.then((e) => e.json())
		.then((n) => {
		    let o = (t = n && n.country ? n.country : "in").toLowerCase();
		    e(o),
	        setTimeout(function(){
	        let e = ws_getdialCode(o);
	        document.getElementById("cmn-pcode").value = "+" + e;
	        }, 10);
		});
		}
		});
		document.addEventListener( "click", function(e){
	    let t = document.getElementById("cmn-pcode");
	    if (e.target.matches("#incmn-pcode .iti__country")){
	        let n = document.getElementById("incmn-pcode").getElementsByClassName("iti__selected-flag"),
	        o = (n = n[0].getAttribute("title")).replace(/\D/g, "");
	        (t.value = "+" + o + " "), 
	        document.getElementById("cmn-phone").focus(), 
	        e.preventDefault();
	    }
	    });
	}
});
*/

const 
cmnForm 	= document.getElementById("cmn-lead-form"),
cmnName   	= document.getElementById("cmn-name"),
cnmEmail   	= document.getElementById("cmn-email"),
cmnPhone   	= document.getElementById("cmn-phone"),
cmnReq  	= document.getElementById("cmn-req");

function cmnNameCheck(e) {
    checkLength(cmnName, 1, 15);
}

function cmnEmailCheck(e){
    checkEmail(cnmEmail);
}

function cmnPhoneCheck(e) {
    checkLength(cmnPhone, 6, 20), 
    phonenumber(cmnPhone, "cmn-phone-error");
}

function cmnReqCheck(e) {
    checkLength(cmnReq, 2, 2550);
}

cmnName.addEventListener("keyup", cmnNameCheck),
cmnName.addEventListener("keypress", cmnNameCheck),
cmnName.addEventListener("keydown", ws_validateStr),
cmnName.addEventListener("focusout", cmnNameCheck),

cnmEmail.addEventListener("focusout", cmnEmailCheck),
cnmEmail.addEventListener("focusin", function () {
    doNotingonFocus(cnmEmail);
});

cmnPhone.addEventListener("keyup", cmnPhoneCheck),
cmnPhone.addEventListener("keypress", cmnPhoneCheck),
cmnPhone.addEventListener("keydown", ws_checkphonenumber),
cmnPhone.addEventListener("focusout", cmnPhoneCheck);

cmnReq.addEventListener("keyup", cmnReqCheck);
cmnReq.addEventListener("keypress", cmnReqCheck);
cmnReq.addEventListener("keydown", cmnReqCheck);
cmnReq.addEventListener("focusout", cmnReqCheck);



function cmnFormHandler(){
	checkRequired([cmnName, cnmEmail, cmnPhone, cmnReq]);
	if( 
		( vcSpaceChecker(cmnName.value.trim()) === true ) && 
		( vcSpaceChecker(cnmEmail.value.trim()) === true ) && 
		( vcSpaceChecker(cmnPhone.value.trim()) === true ) && 
		( vcSpaceChecker(cmnReq.value.trim()) === true )
    ){
	let sre = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	if( !sre.test(cnmEmail.value.trim()) ){
		return false;
	}
	var t = document.getElementById("cmn-lead-form"),
    n = document.getElementById("cmn-frm-btn");
    t.classList.add("in-process"), 
    (n.innerText = "Please wait..."), 
    (n.disabled = !0), 
    n.classList.add("hold-on");
    t.submit();
    }
	return false
}
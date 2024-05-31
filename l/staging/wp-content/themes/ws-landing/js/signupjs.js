var serializeForm = function (form) {
	var obj = {};
	var formData = new FormData(form);
	for (var key of formData.keys()) {
		obj[key] = formData.get(key);
	}
	return obj;
};

const sgphone1 = document.getElementById("sg-contphpne"),
sgemail1 = document.getElementById("sgemail1"),

sgphone2 = document.getElementById("sg-contphpne2"),
sgemail2 = document.getElementById("sgemail2"),

sgphone3 = document.getElementById("sg-contphpne3"),
sgemail3 = document.getElementById("sgemail3");

// 1.
sgemail1.addEventListener("focusout", function(){
	checkEmail(sgemail1);
}),
sgemail1.addEventListener("focusin", function(){
    doNotingonFocus(sgemail1);
});

"keyup,keypress,focusout".split(",").forEach(function(e){
	sgphone1.addEventListener(e,function(){
		fixed_checkPhone(sgphone1, "phone-errorelm");
	});
});
sgphone1.addEventListener("keydown", ws_checkphonenumber);

// 2.
sgemail2.addEventListener("focusout", function(){
	checkEmail(sgemail2);
}),
sgemail2.addEventListener("focusin", function(){
    doNotingonFocus(sgemail2);
});

"keyup,keypress,focusout".split(",").forEach(function(e){
	sgphone2.addEventListener(e,function(){
		fixed_checkPhone(sgphone2, "phone-errorelm2");
	});
});
sgphone2.addEventListener("keydown", ws_checkphonenumber);

// 3.
sgemail3.addEventListener("focusout", function(){
	checkEmail(sgemail3);
}),
sgemail3.addEventListener("focusin", function(){
    doNotingonFocus(sgemail3);
});

"keyup,keypress,focusout".split(",").forEach(function(e){
	sgphone3.addEventListener(e,function(){
		fixed_checkPhone(sgphone3, "phone-errorelm3");
	});
});
sgphone3.addEventListener("keydown", ws_checkphonenumber);


function wslpSignup(e){
	let varElm = e.dataset.wform;
	if( varElm == 1 ){
		checkRequired([sgemail1, sgphone1]);	
	}else if( varElm == 2 ){
		checkRequired([sgemail2, sgphone2]);
	}else if( varElm == 3 ){
		checkRequired([sgemail3, sgphone3]);
	}
	
	let fldElm 		= document.querySelectorAll(".wssgl-form"+varElm+" .form-group");
	let fldPhone 	= document.querySelectorAll(".wssgl-form"+varElm+" .user-input");
	
	/*
	console.log( fldElm.classList );
	console.log( fldPhone );
	*/

	if( fldElm[0].classList.contains('ws-error') ){
		return false;
	}
	
	if( fldPhone[0].classList.contains('ws-error') ){
		return false;
	}
	
	
	/*
	var elmCheck = 0;
	fldElm.forEach(function(elm){
		if(elm.classList.contains('ws-error')) 
			elmCheck++
	});
	if( elmCheck > 0 ){ 
		return false;
	}
	*/
	
	e.classList.add("doing-ajax");
	e.querySelector('button').disabled = true;
	e.querySelector('button').innerText = "Please wait...";
	var formData 	= JSON.stringify( serializeForm(e) );
	var xhttp 		= new XMLHttpRequest();
	xhttp.open("POST", wsObj.ajaxurl+'?action=ws-dosignup', true);
	xhttp.setRequestHeader("Content-Type", "application/json");
	xhttp.onreadystatechange = function() {
	   if (this.readyState == 4 && this.status == 200) {
	     	let response = this.responseText;
	     	window.location.replace( response );
	   }else{
	   		e.reset();
	   		e.classList.remove("doing-ajax");
			e.querySelector('button').disabled = false;
			e.querySelector('button').innerText = "Start free trial";
	   }
	};	
	xhttp.send(formData);
	return false;
}

const sgphoneInputField = document.querySelector("#sg-pcode");
intlTelInput(sgphoneInputField,{initialCountry: "auto"});

const sgphoneInputField2 = document.querySelector("#sg-pcode2");
intlTelInput(sgphoneInputField2,{initialCountry: "auto"});

const sgphoneInputField3 = document.querySelector("#sg-pcode3");
intlTelInput(sgphoneInputField3,{initialCountry: "auto"});

document.addEventListener("click",function (e) {		
	//1. 
	if( e.target.matches("#sg-wrap .iti__country") ){
		let t = document.getElementById("sg-pcode");
		let n = document.getElementById("sg-wrap").getElementsByClassName("iti__selected-flag"),
		    o = (n = n[0].getAttribute("title")).replace(/\D/g, "");
		console.log( n );    
		(t.value = "+" + o + " "), document.getElementById("sg-contphpne").focus(), e.preventDefault();
	}

	//2. 
	if( e.target.matches("#sg-wrap2 .iti__country") ){
		let t = document.getElementById("sg-pcode2");
		let n = document.getElementById("sg-wrap2").getElementsByClassName("iti__selected-flag"),
		    o = (n = n[0].getAttribute("title")).replace(/\D/g, "");
		(t.value = "+" + o + " "), document.getElementById("sg-contphpne2").focus(), e.preventDefault();
	}

	//3. 
	if( e.target.matches("#sg-wrap3 .iti__country") ){
		let t = document.getElementById("sg-pcode3");
		let n = document.getElementById("sg-wrap3").getElementsByClassName("iti__selected-flag"),
		    o = (n = n[0].getAttribute("title")).replace(/\D/g, "");
		(t.value = "+" + o + " "), document.getElementById("sg-contphpne3").focus(), e.preventDefault();
	}
});
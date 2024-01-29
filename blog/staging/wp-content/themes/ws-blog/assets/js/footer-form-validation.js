const footerform 			= document.getElementById('contact-form-section');
const footerusername 		= document.getElementById('fcont_name');
const footeremail 		= document.getElementById('fcont_email');
const footerphone 		= document.getElementById('cont_phpne');
const footeruRequirement 	= document.getElementById('fuser-req');
const fcountriesData = document.getElementById('fcont_country');
const fcaptcha   = document.getElementById('f-quiz-ans');

//Show input error messages
function fshowError(input, message) {
    if(input.name == "requirement"){
    const formControl = input.closest('div.form-text-cont');
    formControl.classList.add("verror") ;
    } 
    const formControl = input.closest('div.user-input');
    formControl.classList.add("verror") ;
    const small = formControl.querySelector('small');
    small.innerText = message;
}

function fdoNotingonFocus(input) {
    const formControl = input.parentElement;
    formControl.className = 'user-input form-control';
}

function fcheckLettersSpacesDots(str) {
	return /^[a-zA-Z\s.,]+$/.test(str);
}
//show success colour
function fshowSucces(input){
    if(input.name == "requirement"){
    const formControl = input.closest('div.form-text-cont');
    formControl.classList.add("success") ;
    formControl.classList.remove("verror") ;
    }
	//const formControl = input.parentElement;
	const formControl = input.closest('div.user-input');
	formControl.classList.add("success") ;
    formControl.classList.remove("verror") ;
	const small = formControl.querySelector('small');
	//formControl.className = 'user-input form-control success';
	small.innerText = 'success';
}

//check email is valid
function fcheckEmail(input) {
    const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if(re.test(input.value.trim())) {
        fshowSucces(input)
    }else {
    	if( input.value == '' ){
    		fshowError(input,'Please Fill Email');
    	}else{
    		fshowError(input,'Please fill valid email address');	
    	}
    }
}

function fphonenumber(inputtxt){
	if( (/^[0-9]*$/.test(inputtxt.value.trim()) && inputtxt.value.length >= 6) ){	
		fshowSucces( inputtxt )
	}else{
		if( inputtxt.value == '' ){
            fshowError(inputtxt,'Please Fill Phone', "phone-error");
        }else{
            fshowError( inputtxt, 'Please Fill Valid Phone Number', "phone-error" );
        } 
		
	}
}


footerusername.addEventListener("keyup", fcheckUseName);
footerusername.addEventListener("keypress", fcheckUseName);
footerusername.addEventListener("keydown", fws_validateStr);
footerusername.addEventListener("focusout", fcheckUseName);

//footerusername.addEventListener("focusin", function(){
//	fdoNotingonFocus(footerusername);
//});

//fcaptcha.addEventListener("keydown", fcaptcha_checkphonenumber);

fcountriesData.addEventListener("keyup", fcheckCont);
fcountriesData.addEventListener("keypress", fcheckCont);
fcountriesData.addEventListener("keydown", fws_validateStr);
fcountriesData.addEventListener("focusout", fcheckCont);

footerphone.addEventListener("keyup", fcheckPhone);
footerphone.addEventListener("keypress", fcheckPhone);
footerphone.addEventListener("keydown", fws_checkphonenumber);
footerphone.addEventListener("focusout", fcheckPhone);


footeremail.addEventListener("keyup", fcheckEmailEvent);
footeremail.addEventListener("keypress", fcheckEmailEvent);
footeremail.addEventListener("keydown", fcheckEmailEvent);
footeremail.addEventListener("focusout", fcheckEmailEvent);
//footeremail.addEventListener("focusin", function(){
//	fdoNotingonFocus(footeremail);
//});

footeruRequirement.addEventListener("keyup", fcheckURequirement);
footeruRequirement.addEventListener("keypress", fcheckURequirement);
footeruRequirement.addEventListener("keydown", fcheckURequirement);
footeruRequirement.addEventListener("focusout", fcheckURequirement);
footeruRequirement.addEventListener("focusin", fcheckURequirement);

fcaptcha.addEventListener("focusout", fvalidateMquiz);



function fcheckCont(event){
  fcheckLength(fcountriesData,1,60);
}
function fws_checkphonenumber(e) {
  let keyArray = [46, 8, 9, 27, 13,
        187, 189, 16, 17
    ]; - 1 !== keyArray.indexOf(e
            .keyCode) || 65 == e
        .keyCode && !0 === e.ctrlKey ||
        86 == e.keyCode && !0 === e
        .ctrlKey || 67 == e.keyCode && !
        0 === e.ctrlKey || 88 == e
        .keyCode && !0 === e.ctrlKey ||
        e.keyCode >= 35 && e.keyCode <=
        39 || (e.shiftKey || e.keyCode <
            48 || e.keyCode > 57) && (e
            .keyCode < 96 || e.keyCode >
            105) && e.preventDefault()
}


function fcheckEmailEvent(event){
	fcheckEmail(footeremail);
}
function fcheckUseName(event){
  fcheckLength(footerusername,2,49);
	if( fcheckLettersSpacesDots( footerusername.value.trim() ) === false ){
       fshowError(footerusername, "Please Fill Name");
    }
}

function fcheckPhone(event){
  fcheckLength(footerphone,6,30);
  fphonenumber(footerphone);
}
function fcheckfoucsoutPhone(event){
    fphonenumber(footerphone);
}
function fcheckURequirement(event){
  fcheckLength(footeruRequirement,3,1500);
}


//fcheckRequired fields
function fcheckRequired(inputArr) {

    inputArr.forEach(function(input){
    	let e = input.value.trim();
        if( !/^[A-Za-z0-9!@#$%^&*()".,;:{}<>?\[\]\-+=' ]{2,}/.test(e) ){
			if( input.name == "fullname"  ){
				fshowError(input, `Please Fill Name`);
			}else if( input.name == "requirement"  ){
				fshowError(input, `Please Fill Requirement`);
			}else if( input.name == "phone"  ){
				fshowError(input, `Please Fill Phone`);
			}else if( input.name == "user-country"  ){
			    fshowError(input, `Please Fill Country`);
			}else if( input.name == "email"  ){
				fshowError(input, `Please Fill Email`);
			}else if( input.name == "captcha" ){
                fvalidateMquiz();
            }else{
				fshowError(input,`This Field is required`)	
			}
        }else {
        //	fcheckLength(footerusername,3,15);	
		    fcheckEmail(footeremail);
		    fcheckLength(footerphone,6,18);
		    //fcheckLength(countriesData,3,255);
           // if( input.name != "captcha" ){
             //   fshowSucces(input);
            //}
            fvalidateMquiz();
        }
    });
}


//check input Length
function fcheckLength(input, min ,max) {
	//console.log(input.name);
	let e = input.value.trim();
    if( (input.value.length < min) || (!/^[A-Za-z0-9!@#$%^&*()".,;:{}<>?\[\]\-+=' ]{2,}/.test(e)) ) {
    	if( input.name == "fullname"  ){
			fshowError(input, `Please Fill Name`);	
		}else if( input.name == "requirement"  ){
			fshowError(input, `Please Fill Requirement`);	
		}else if( input.name == "phone"  ){
			fshowError(input, `Please Fill Phone`);	
		}else if( input.name == "user-country"  ){
			    fshowError(input, `Please Fill Country`);	
		}else if( input.name == "email"  ){
			fshowError(input, `Please Fill Email`);	
		}    
    }else {
       	if( input.value.length > max ){
    		if( input.name == "fullname" ){
    			fshowError(input, `Name not be more then ${max} characters`);
    		}    		
    	}else{
	    	fshowSucces(input);
    	}
    }
}

function fvalidateMquiz(){
    let fque     = document.getElementById("f-quizz").textContent;
    let fans     = document.getElementById("f-quiz-ans").value;
    let fqerror  = document.getElementById("fcaptchaerror");
    if( eval(fque) == fans ){
        fqerror.textContent = "";
        return true;
    }else{
        fqerror.textContent = "Invalid Answer";
        return false;
    }
}

//get FieldName
function fgetFieldName(input) {
    return input.id.charAt(0).toUpperCase() + input.id.slice(1);
}

function fvcSpaceChecker( input ){
	if( !/^[A-Za-z0-9!@#$%^&*()".,;:{}<>?\[\]\-+=' ]{2,}/.test( input ) ){
		return false;
	}else{
		return true;
	}
}


function fvcCmnFormValidation(){
	//alert("hello");
	fcheckRequired( [footerusername, footeremail, fcountriesData, footerphone, footeruRequirement, fcaptcha] );
	if(
		( fvcSpaceChecker(footeremail.value.trim()) === true ) && 
		( fvcSpaceChecker(footerusername.value.trim()) === true ) && 
		( fvcSpaceChecker(fcountriesData.value.trim()) ===true ) && 
		( fvcSpaceChecker(footerphone.value.trim()) === true ) && 
		( fvcSpaceChecker(footeruRequirement.value.trim()) === true ) 
	){
		const sre = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		if( !sre.test(footeremail.value.trim()) ){
			return false;
		}
		//const phreg = /^[0-9]*$/;
        if(footerphone.value.length < 6){
			fshowError(footerphone, 'Phone Number is not valid');
            return false;
        }

		
       /* if( !phreg.test(fcaptcha.value.trim())){
			fshowError(fcaptcha, 'Captcha is not valid');
            return false;
        } */
		
		if( fvalidateMquiz() === false){
            return false;
        }

		var form 	= document.getElementById("contact-form-section");
		var formBtn = document.getElementById("submitButton");
		form.classList.add('in-process');
		formBtn.value = "Please wait...";
		/*
		alert("Do Submit");
		return false;
		*/
		formBtn.disabled = true;
		form.submit(); 
	}else{
		return false;	
	}
}

function fws_validateStr( e ) {
	let backSpace = e.keyCode || e.charCode;
	//alert( backSpace );
	const passKeys = [8, 46, 37, 39];
	if( (footerusername.value.length >= 50) && !passKeys.includes(backSpace) ){
		e.preventDefault();
		return false;
	}

	var theEvent = e || window.event;
	if (theEvent.type === "paste") {
		key = event.clipboardData.getData("text/plain");
	}else{
		var key = theEvent.keyCode || theEvent.which;
	}

    if ( key > 64 && key < 91 || 8 == key || 46 == key || 9 == key || 32 == key || 37 == key || 39 == key || 38 == key || 40 == key)
        return !0;
    e.preventDefault()
}



function fcheckPhonenumber(e) {
	let inkeys = [46, 8, 9, 27, 13, 187, 189, 16, 17]
    inkeys.includes(e.keyCode, inkeys) || 65 == e.keyCode && !0 === e.ctrlKey || 86 == e.keyCode && !0 === e.ctrlKey || 67 == e.keyCode && !0 === e.ctrlKey || 88 == e.keyCode && !0 === e.ctrlKey || e.keyCode >= 35 && e.keyCode <= 39 || (e.shiftKey || e.keyCode < 48 || e.keyCode > 57) && (e.keyCode < 96 || e.keyCode > 105) && e.preventDefault()
}
document.addEventListener('click', function(event) {
	//console.log( event.target );
	if(!event.target.matches('div.select-box, a.select-first')) {
		[].forEach.call(document.querySelectorAll('ul.in-options.open-close'), function (el) {
			if( el.classList.contains("open-close")){
				el.classList.remove("open-close");	
			}
		});
		[].forEach.call(document.querySelectorAll('span.arrow-btn'), function (el) {
			if( el.classList.contains("rotate")){
				el.classList.remove("rotate");	
			}
		});
	}
}, false);


var jQuizExists = document.getElementById("f-quizz");


if (jQuizExists) {
	fgenerateWsQuizz();
}
function fgenerateWsQuizz() {
	let n1 = Math.floor(Math.random() * 9) + 1;
	let n2 = Math.floor(Math.random() * 9) + 1;
	document.getElementById("f-quizz").textContent = n1 + " + " + n2;
}

function fcap_limit( evt, val ){
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

function fws_numcheck(evt, val) {
	var theEvent = evt || window.event;
	if (theEvent.type === "paste") {
		key = event.clipboardData.getData("text/plain");
	}else{
		var key = theEvent.keyCode || theEvent.which;
		key = String.fromCharCode(key);
	}
	//var regex = /[0-9]|\./;
	var regex = /^\d+$/;
	/*if(!regex.test(key) || (val.value.length > 2) ){*/
	if(!regex.test(key) || (val.value.length > 2) ){
		theEvent.returnValue = false;
		if (theEvent.preventDefault) theEvent.preventDefault();
	}
}

/* Image Upload Function */
function fupload_file(e) {
    e.preventDefault();
    fajax_file_upload(e.dataTransfer.files);
}
  
function ffile_explorer() {
    document.getElementById('selectfile').click();
    document.getElementById('selectfile').onchange = function() {
        files = document.getElementById('selectfile').files;
        fajax_file_upload(files);
    };
}
  
function fajax_file_upload(files_obj) {
	let gloader = document.getElementById('fgloader');
	gloader.classList.add("active");
    if(files_obj != undefined) {
        var form_data = new FormData();
        for(i=0; i<files_obj.length; i++) {
            form_data.append('file[]', files_obj[i]);
        }
        var xhttp = new XMLHttpRequest();
        xhttp.open("POST", "ajax.php", true);
        xhttp.onload = function(event) {
            if (xhttp.status == 200) {
                //alert(this.responseText);
            } else {
                alert("Error " + xhttp.status + " occurred when trying to upload your file.");
            }
            gloader.classList.add("active");
        }
 
        xhttp.send(form_data);
    }
}

// ************************ Drag and drop ***************** //
let fdropArea = document.getElementById("drop-areas")

// Prevent default drag behaviors
;['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
  fdropArea.addEventListener(eventName, fpreventDefaults, false)   
  document.body.addEventListener(eventName, fpreventDefaults, false)
})

// Highlight drop area when item is dragged over it
;['dragenter', 'dragover'].forEach(eventName => {
  fdropArea.addEventListener(eventName, fhighlight, false)
})

;['dragleave', 'drop'].forEach(eventName => {
	//console.log(eventName);
  	fdropArea.addEventListener(eventName, funhighlight, false)
})

// Handle dropped files
fdropArea.addEventListener('drop', fhandleDrop, false)

function fpreventDefaults (e) {
  e.preventDefault()
  e.stopPropagation()
}

function fhighlight(e) {
  fdropArea.classList.add('highlight')
}

function funhighlight(e) {
  fdropArea.classList.remove('active')
}

function fhandleDrop(e) {
  var dt = e.dataTransfer
  var files = dt.files

  fhandleFiles(files)
}

let fuploadProgress = []
let fprogressBar = document.getElementById('fprogress-bar')

function finitializeProgress(numFiles) {
  fprogressBar.value = 0
  fuploadProgress = []

  for(let i = numFiles; i > 0; i--) {
    fuploadProgress.push(0)
  }
}

function fsetFileError( msg ){
   // alert(msg);
//	let fcontainer = document.getElementById('ffile-type-error');
//	fcontainer.innerHTML = msg;
//	setTimeout(function(){
//		fcontainer.innerHTML = "";
	//}, 3000);
}

function fupdateProgress(fileNumber, percent) {
  fuploadProgress[fileNumber] = percent
  let total = fuploadProgress.reduce((tot, curr) => tot + curr, 0) / fuploadProgress.length
  fprogressBar.value = total
}

function fhandleFiles(files){
	//alert( files);
	
	fsetFileError("");
	let uldCounter 	= document.getElementById("fuplcounter");
	if( parseInt(uldCounter.value) >= 10 ){
		fsetFileError( "You can not upload more then 10 media files." );
		return;
	}
	let allFcount = (files.length + parseInt(uldCounter.value))
	if( parseInt(allFcount) > 10 ){
		fsetFileError( "You can not upload more then 10 media files." );
		return;
	}

	let preuploaded = document.getElementById('fUploadedfilename').value;
	if( preuploaded ){
		let prefiles = preuploaded.split(",");
		if( prefiles.length > 10 ){
			fsetFileError( "You can not upload more then 10 media files." );
			return;	
		}
	}	
	if( files.length > 10 ){
		fsetFileError( "You can not upload more then 10 media files." );
		return;
	}

	files = [...files]

	finitializeProgress(files.length)
	//console.log('g'+files);
	files.forEach(fuploadFile)
	//console.log(fuploadFile);
	//files.forEach(previewFile)
}
//Remove Fle
function fremoveMe(e,imageName){
	let uldCounter = document.getElementById("fuplcounter");
	fsetFileError("");
	const xhttp = new XMLHttpRequest(); 
	xhttp.open("GET", "https://pixelcrayons.com/p2wp/footer_delete_file.php?delete=1&imageName="+imageName, true);
	xhttp.onreadystatechange = function () {
	        if (this.readyState == 4 && this.status == 200) {
	        	let counterValue = parseInt(uldCounter.value);
        		counterValue--;
        		uldCounter.value = counterValue;

	        	var fileName=document.getElementById('fUploadedfilename').value;
	        	newStr = fileName.replace(imageName, '');
	        	document.getElementById('fUploadedfilename').value=newStr;
	            console.log(this.responseText);
	            e.parentNode.remove();
	        }
	    }
	xhttp.send();
 
}
//End Remove Fle

function fuploadFile(file, i) {
	//console.log(file);
		fsetFileError("");
		let uldCounter 	= document.getElementById("fuplcounter");
		if( parseInt(uldCounter.value) >= 10 ){
			fsetFileError( "You can not upload more then 10 media files." );
			return;
		}

		let gloader 	= document.getElementById('fgloader');
		gloader.classList.add("show-me");
		gloader.classList.add("active");
		
		const fileSize = file.size / 1024 / 1024;
		if( fileSize > 20 ){
			fsetFileError("ERROR Uploaded document exceeds the maximum size limit of 20 MB");
			gloader.classList.remove("active");
			return;
		}
        //console.log(file);
  		// if(files_obj != undefined) {
	    var form_data = new FormData();
	    form_data.append('ffile', file)
	    //console.log(form_data);
	    var xhttp = new XMLHttpRequest();
	    xhttp.open("POST", "https://pixelcrayons.com/p2wp/footer-file-uploader.php", true);
	    //xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
	    xhttp.onload = function(event) {
	        if (xhttp.status == 200) {
	        	//alert(xhttp.responseText);
	        	let response =  JSON.parse(xhttp.responseText);	        	
	        	console.log( response );
	        	if( response.status == true ){
	        		let counterValue = parseInt(uldCounter.value);
	        		counterValue++;
	        		uldCounter.value = counterValue;
	        		let existingVal = document.getElementById('fUploadedfilename').value;
					if( existingVal == '' ){
						document.getElementById('fUploadedfilename').value = response.file;						
					}else{
						document.getElementById('fUploadedfilename').value = existingVal + response.file;
					}

				let reader = new FileReader()
				  reader.readAsDataURL(file)
				  reader.onloadend = function() {
				  	let indiv 	= document.createElement('div');
				  	let icon 	= '';
				  	console.log( file.type );
				  	switch (file.type) {
						case 'application/pdf':
						    icon = "https://pixelcrayons.com/p2wp/wp-content/themes/pixelcrayons/dev-img/pdf_gy.png";     
						    break;
						case 'application/vnd.openxmlformats-officedocument.wordprocessingml.document':
						    icon = "https://pixelcrayons.com/p2wp/wp-content/themes/pixelcrayons/dev-img/doc_gy.png"; 
						    break;
						case 'text/plain':
						    icon = "https://pixelcrayons.com/p2wp/wp-content/themes/pixelcrayons/dev-img/doc_gy.png"; 
						    break;    
						case 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet':
						    icon =  "https://pixelcrayons.com/p2wp/wp-content/themes/pixelcrayons/dev-img/xls_gy.png"; 
						    break;
						case 'application/vnd.ms-excel':
						    icon =  "https://pixelcrayons.com/p2wp/wp-content/themes/pixelcrayons/dev-img/xls_gy.png"; 
						    break;    
						case 'image/vnd.adobe.photoshop':
						    icon = "https://pixelcrayons.com/p2wp/wp-content/themes/pixelcrayons/dev-img/psd_gy.png";
						    break;
						case 'application/x-zip-compressed':
						    icon = "https://pixelcrayons.com/p2wp/wp-content/themes/pixelcrayons/dev-img/zip_gy.png";
						    break;
						case 'application/zip':
						    icon = "https://pixelcrayons.com/p2wp/wp-content/themes/pixelcrayons/dev-img/zip_gy.png";
						    break;						    
						default:
							icon = "https://pixelcrayons.com/p2wp/wp-content/themes/pixelcrayons/dev-img/def-thumb.png";
							break;
					}
					//if size exceed than 10 MB
				        if(file.size > 10000000 && file.type == 'image/jpeg') {
				           	icon = "https://pixelcrayons.com/p2wp/wp-content/themes/pixelcrayons/dev-img/jpg_gy.png" ;
				        } else if(file.size > 10000000 && file.type == 'image/png') {
				           	icon = "https://pixelcrayons.com/p2wp/wp-content/themes/pixelcrayons/dev-img/png_gy.png";
				        }
				        indiv.innerHTML = '<img src="'+icon+'" height="55" width="55"><button type="button" onclick="return fremoveMe(this,this.value);" value="'+response.file+'">X</button></span>';
						document.getElementById('fgallery').appendChild(indiv);
					}

// End Preview File
	        	}else{
	        		fsetFileError( response.message );
	        	}
	        }else{
	            console.log("error");
	        }
	        gloader.classList.remove("active");
	    }
	   // alert(form_data);
	    xhttp.send(form_data);
	// }
}

var countries = ["Afghanistan","Albania","Algeria","Andorra","Angola","Anguilla","Antigua & Barbuda","Argentina","Armenia","Aruba","Australia","Austria","Azerbaijan","Bahamas","Bahrain","Bangladesh","Barbados","Belarus","Belgium","Belize","Benin","Bermuda","Bhutan","Bolivia","Bosnia & Herzegovina","Botswana","Brazil","British Virgin Islands","Brunei","Bulgaria","Burkina Faso","Burundi","Cambodia","Cameroon","Canada","Cape Verde","Cayman Islands","Central Arfrican Republic","Chad","Chile","China","Colombia","Congo","Cook Islands","Costa Rica","Cote D Ivoire","Croatia","Cuba","Curacao","Cyprus","Czech Republic","Denmark","Djibouti","Dominica","Dominican Republic","Ecuador","Egypt","El Salvador","Equatorial Guinea","Eritrea","Estonia","Ethiopia","Falkland Islands","Faroe Islands","Fiji","Finland","France","French Polynesia","French West Indies","Gabon","Gambia","Georgia","Germany","Ghana","Gibraltar","Greece","Greenland","Grenada","Guam","Guatemala","Guernsey","Guinea","Guinea Bissau","Guyana","Haiti","Honduras","Hong Kong","Hungary","Iceland","India","Indonesia","Iran","Iraq","Ireland","Isle of Man","Israel","Italy","Jamaica","Japan","Jersey","Jordan","Kazakhstan","Kenya","Kiribati","Kosovo","Kuwait","Kyrgyzstan","Laos","Latvia","Lebanon","Lesotho","Liberia","Libya","Liechtenstein","Lithuania","Luxembourg","Macau","Macedonia","Madagascar","Malawi","Malaysia","Maldives","Mali","Malta","Marshall Islands","Mauritania","Mauritius","Mexico","Micronesia","Moldova","zMonaco","Mongolia","Montenegro","Montserrat","Morocco","Mozambique","Myanmar","Namibia","Nauro","Nepal","Netherlands","Netherlands Antilles","New Caledonia","New Zealand","Nicaragua","Niger","Nigeria","North Korea","Norway","Oman","Pakistan","Palau","Palestine","Panama","Papua New Guinea","Paraguay","Peru","Philippines","Poland","Portugal","Puerto Rico","Qatar","Reunion","Romania","Russia","Rwanda","Saint Pierre & Miquelon","Samoa","San Marino","Sao Tome and Principe","Saudi Arabia","Senegal","Serbia","Seychelles","Sierra Leone","Singapore","Slovakia","Slovenia","Solomon Islands","Somalia","South Africa","South Korea","South Sudan","Spain","Sri Lanka","St Kitts & Nevis","St Lucia","St Vincent","Sudan","Suriname","Swaziland","Sweden","Switzerland","Syria","Taiwan","Tajikistan","Tanzania","Thailand","Timor L'Este","Togo","Tonga","Trinidad & Tobago","Tunisia","Turkey","Turkmenistan","Turks & Caicos","Tuvalu","Uganda","Ukraine","United Arab Emirates","United Kingdom","United States of America","Uruguay","Uzbekistan","Vanuatu","Vatican City","Venezuela","Vietnam","Virgin Islands (US)","Yemen","Zambia","Zimbabwe"];
function autocomplete(inp, arr) {
  var currentFocus;
  inp.addEventListener("input", function(e) {
      //alert(this.value);
      var a, b, i, val = this.value;
      closeAllLists();
      if (!val) { return false;}
      currentFocus = -1;
      //cont_countryautocomplete-list
      a = document.createElement("DIV");
      a.setAttribute("id", this.id + "autocomplete-list");
      a.setAttribute("class", "autocomplete-items");
      this.parentNode.appendChild(a);
      var sCounter = 0;
      for (i = 0; i < arr.length; i++){
        var re = new RegExp(val, 'i');
        if (arr[i].match(re)){
            //alert("he");
 		 sCounter++;	
          b = document.createElement("DIV");
          b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
          b.innerHTML += arr[i].substr(val.length);
          b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
          b.addEventListener("click", function(e) {
              inp.value = this.getElementsByTagName("input")[0].value;
              closeAllLists();
          });
          a.appendChild(b);
          //a.setAttribute("class", "autocomplete-items has-item");
        }else{
          //a.setAttribute("class", "autocomplete-items has-noitm");
        }
      }
      if( sCounter > 0 ){
      	a.setAttribute("class", "autocomplete-items has-data");
      }else{
      	a.setAttribute("class", "autocomplete-items");
      }
  });
  inp.addEventListener("keydown", function(e) {
      var x = document.getElementById(this.id + "autocomplete-list");
      if (x) x = x.getElementsByTagName("div");
      if (e.keyCode == 40) {
        currentFocus++;
        addActive(x);
      } else if (e.keyCode == 38) { //up
        currentFocus--;
        addActive(x);
      } else if (e.keyCode == 13) {
        e.preventDefault();
        if (currentFocus > -1) {
          if (x) x[currentFocus].click();
        }
      }
  });
  
  

  function addActive(x) {
    if (!x) return false;
    removeActive(x);
    if (currentFocus >= x.length) currentFocus = 0;
    if (currentFocus < 0) currentFocus = (x.length - 1);
    x[currentFocus].classList.add("autocomplete-active");
  }
  function removeActive(x) {
    for (var i = 0; i < x.length; i++) {
      x[i].classList.remove("autocomplete-active");
    }
  }
  function closeAllLists(elmnt) {
    var x = document.getElementsByClassName("autocomplete-items");
    for (var i = 0; i < x.length; i++) {
      if (elmnt != x[i] && elmnt != inp) {
        x[i].parentNode.removeChild(x[i]);
      }
    }
  }
  document.addEventListener("click", function (e) {
      closeAllLists(e.target);
  });
}
autocomplete(document.getElementById("fcont_country"), countries);
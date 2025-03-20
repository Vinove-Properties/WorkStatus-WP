const footerform 			= document.getElementById('contact-form-section');
const footerusername 		= document.getElementById('fcont_name');
const footeremail 			= document.getElementById('fcont_email');
const footerphone 			= document.getElementById('fcont_phpne');
const footeruRequirement 	= document.getElementById('fuser-req');
const fcaptcha   			= document.getElementById('f-quiz-ans');
const wSiteUrl  			= 'https://www.workstatus.io/';
//Show input error messages
function fshowError(input, message) {
    const formControl = input.closest('div.form-group');
    formControl.classList.add("ws-error") ;
    const smalls = formControl.querySelector('span');
    //console.log(message);
    if(input.name == "phone"){
        var pstenid = document.getElementById('phoneno');	
        pstenid.innerText = message;
    } 
    smalls.innerText = message;
}

function fdoNotingonFocus(input) {
    const formControl = input.closest('div.form-group');
    formControl.classList.add("form-group") ;
}

function fcheckLettersSpacesDots(str){
	return /^[a-zA-Z\s.,]+$/.test(str);
}
//show success colour
function fshowSucces(input){
	const formControl = input.closest('div.form-group');
	formControl.classList.add("success") ;
	formControl.classList.remove("ws-error") ;
	const small = formControl.querySelector('span');
	if(input.name == "phone"){
        var pstenid = document.getElementById('phoneno');	
        pstenid.innerText = '';
    } 
	small.innerText = '';
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
	if( (/^[A-Za-z0123456789()\s.+-]+$/.test(inputtxt.value.trim()) && inputtxt.value.length >= 6) ){   
        fshowSucces( inputtxt, "phone-error" )
    }else{
        if( inputtxt.value == '' ){
            fshowError(inputtxt,'Please Fill Phone', "phone-error");
        }else{
            fshowError( inputtxt, 'Please Fill Valid Phone Number', "phone-error" );
        }        
    }
}



footerusername.addEventListener("keypress", fcheckUseName);
footerusername.addEventListener("focusout", fcheckUseName);
footerusername.addEventListener("keydown", fws_validateStr);
footerusername.addEventListener("focusin", function(){
	fdoNotingonFocus(footerusername);
});

fcaptcha.addEventListener("keydown", fcaptcha_checkphonenumber);

footerphone.addEventListener("keyup", fcheckPhone);
footerphone.addEventListener("keydown", fws_checkphonenumber);
footerphone.addEventListener("keypress", fcheckPhone);
footerphone.addEventListener("focusout", fcheckfoucsoutPhone);

footeremail.addEventListener("keyup", fcheckEmailEvent);
footeremail.addEventListener("keydown", fcheckEmailEvent);
footeremail.addEventListener("keypress", fcheckEmailEvent);
footeremail.addEventListener("focusout", fcheckEmailEvent);
footeremail.addEventListener("focusin", function(){
	fdoNotingonFocus(footeremail);
});

footeruRequirement.addEventListener("keyup", fcheckURequirement);
footeruRequirement.addEventListener("keypress", fcheckURequirement);
footeruRequirement.addEventListener("keydown", fcheckURequirement);
footeruRequirement.addEventListener("focusout", fcheckURequirement);
footeruRequirement.addEventListener("focusin", fcheckURequirement);

fcaptcha.addEventListener("focusout", fvalidateMquiz);


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

function fcaptcha_checkphonenumber(e) {
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
       fshowError(footerusername, "Please input valid name.");
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
			if( input.name == "fname"  ){
				fshowError(input, `Please Fill Name`);
			}else if( input.name == "requirement"  ){
				fshowError(input, `Please Fill Requirement`);
			}else if( input.name == "email"  ){
				fshowError(input, `Please Fill Email`);
			}else if( input.name == "phone"  ){
				fshowError(input, `Please Fill Phone`);
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
            if( input.name != "captcha" ){
                fshowSucces(input);
            }
            fvalidateMquiz();
        }
    });
}


//check input Length
function fcheckLength(input, min ,max) {
	//console.log(input.name);
	let e = input.value.trim();
    if( (input.value.length < min) || (!/^[A-Za-z0-9!@#$%^&*()".,;:{}<>?\[\]\-+=' ]{2,}/.test(e)) ) {
    	if( input.name == "fname"  ){
			fshowError(input, `Please Fill Name`);	
		}else if( input.name == "requirement"  ){
			fshowError(input, `Please Fill Requirement`);	
		}else if( input.name == "phone"  ){
			fshowError(input, `Please Fill Phone`);	
		}else if( input.name == "email"  ){
			fshowError(input, `Please Fill Email`);	
		}else{
			fshowError(input, `Value must be at least ${min} characters`);
		}    
    }else {
       	if( input.value.length > max ){
    		if( input.name == "fname" ){
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
	fcheckRequired( [footerusername, footeremail, footerphone, footeruRequirement, fcaptcha] );
	if(
		( fvcSpaceChecker(footeremail.value.trim()) === true ) && 
		( fvcSpaceChecker(footerusername.value.trim()) === true ) && 
		( fvcSpaceChecker(footerphone.value.trim()) === true ) && 
		( fvcSpaceChecker(footeruRequirement.value.trim()) === true ) 
	){
		const sre = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		if( !sre.test(footeremail.value.trim()) ){
			return false;
		}
		const phreg = /^[0-9]*$/;
        if( !phreg.test(footerphone.value.trim()) && footerphone.value.length < 6){
			fshowError(footerphone, 'Phone Number is not valid');
            return false;
        }

		
        if( !phreg.test(fcaptcha.value.trim())){
			fshowError(fcaptcha, 'Captcha is not valid');
            return false;
        }
		
		if( fvalidateMquiz() === false){
            return false;
        }

		var formid 	= document.getElementById("contact-form-section");
		var formBtn = document.getElementById("submitButtons");
		formid.classList.add('in-process');
		formBtn.innerText = "Please wait...";
		formBtn.disabled = true;
        formBtn.classList.add('hold-on');
		//alert("Do Submit");
		//return false;
		
		formBtn.disabled = true;
		formid.submit(); 
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

function fcap_limit( element ){
  var max_chars = 2;
  if(element.value.length > max_chars) {
    element.value = element.value.substr(0, max_chars);
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
	let fcontainer = document.getElementById('ffile-type-error');
	fcontainer.innerHTML = msg;
	setTimeout(function(){
		fcontainer.innerHTML = "";
	}, 3000);
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
	xhttp.open("GET", "footer_delete_file.php?delete=1&imageName="+imageName, true);
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
	    xhttp.open("POST", "footer-file-uploader.php", true);
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
				  	//console.log( file.type );
				  	switch (file.type) {
						case 'application/pdf':
						    icon = wSiteUrl+"dev-img/pdf_gy.png";     
						    break;
						case 'application/vnd.openxmlformats-officedocument.wordprocessingml.document':
						    icon = wSiteUrl+"dev-img/doc_gy.png"; 
						    break;
						case 'text/plain':
						    icon = wSiteUrl+"dev-img/doc_gy.png"; 
						    break;    
						case 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet':
						    icon =  wSiteUrl+"dev-img/xls_gy.png"; 
						    break;
						case 'application/vnd.ms-excel':
						    icon =  wSiteUrl+"dev-img/xls_gy.png"; 
						    break;    
						case 'image/vnd.adobe.photoshop':
						    icon = wSiteUrl+"dev-img/psd_gy.png";
						    break;
						case 'application/x-zip-compressed':
						    icon = wSiteUrl+"dev-img/zip_gy.png";
						    break;
						case 'application/zip':
						    icon = wSiteUrl+"dev-img/zip_gy.png";
						    break;						    
						default:
							icon = wSiteUrl+"dev-img/def-thumb.png";
							break;
					}
					//if size exceed than 10 MB
				        if(file.size > 10000000 && file.type == 'image/jpeg') {
				           	icon = "dev-img/jpg_gy.png" ;
				        } else if(file.size > 10000000 && file.type == 'image/png') {
				           	icon = "dev-img/png_gy.png";
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

/*
intlTelInput(phoneInputFields, {
initialCountry: "auto",
geoIpLookup: function(cb){
let inCountrys   = "";
let countryInps  = document.getElementById('cont_countrys');
fetch('https://ipinfo.io/json')
.then( res => res.json() )
.then(
    data => {
    inCountrys = (data && data.country) ? data.country : "gb";
    let conCodes = inCountrys.toLowerCase();        
    cb(conCodes);
    setTimeout( function(){
    	
        let iDialCodes = ws_getdialCodeFT( conCodes );
        let phoneInps  = document.getElementById('fpcode');
        phoneInps.value = '+'+iDialCodes;
        alert( iDialCodes );
        countryInps.value = conCodes;

    }, 10 );
    
    }
)
},
});
*/

/*
document.addEventListener("DOMContentLoaded", function() {
	setTimeout( function(){  
	let titles     = document.getElementById("pflag-id").getElementsByClassName('iti__selected-flag');
	let phoneInps  = document.getElementById('fpcode');
	titles         = titles[0].getAttribute('title');
	let ress       = titles.replace(/\D/g, "");
	phoneInps.value = '+'+ress + ' ';
	}, 1000 );
});*/
  
/*
document.addEventListener('click', function (event) {
let phoneInps      = document.getElementById('fpcode');
let countryInps    = document.getElementById('cont_countrys');
if(event.target.matches('#pflag-id .iti__country')){ 
//setTimeout( function(){
  let titles    = document.getElementById("contact-form-section").getElementsByClassName('iti__selected-flag');
  //console.log(titles);
  titles        = titles[1].getAttribute('title');
  let ress      = titles.replace(/\D/g, "");
  phoneInps.value = '+'+ress + ' ';
  //phoneInps.value = '+'+999 + ' ';
  document.getElementById("fcont_phpne").focus();
  countryInps.value = event.target.getAttribute("data-country-code");
  event.preventDefault();
//}, 10 );
}  
}, false);
*/

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
//const phoneInputField   = document.querySelector("#pcode");
const phoneInputFields  = document.querySelector("#fpcode");
intlTelInput(
phoneInputFields, {
initialCountry: "auto",
geoIpLookup: function(cb){
let inCountry   = "";
let countryInp  = document.getElementById('cont_countrys');
fetch('https://ipinfo.io/json')
.then( res => res.json() )
.then(
    data => {
    inCountry = (data && data.country) ? data.country : "gb";
    let conCode = inCountry.toLowerCase();        
    cb(conCode);
    setTimeout( 
        function(){
        let iDialCode = ws_getdialCode( conCode );
        let phoneInp  = document.getElementById('fpcode');
        phoneInp.value = '+'+iDialCode;
        countryInp.value 	= conCode;
        let ftPhoneInp      = document.getElementById('fpcode');
        let countryInps     = document.getElementById('cont_countrys');
        ftPhoneInp.value    = '+'+iDialCode;
        countryInps.value = conCode;
    }, 10 );
    }
)
},
});

document.addEventListener("DOMContentLoaded", function() {
    setTimeout( function(){
        let title       = document.getElementsByClassName('iti__selected-flag');
        let fphoneInp   = document.getElementById('fpcode');
        title           = title[0].getAttribute('title');
        let res       = title.replace(/\D/g, "");
        fphoneInp.value = '+'+res + ' ';
    }, 1000 );
});
var modal = document.querySelector(".modal");
var pluginPdfTrigger = document.querySelector(".pluginPdfTrigger");
var imgtrigger = document.querySelector(".imgtrigger");
var imgtrigger1 = document.querySelector(".imgtrigger1");
var closeButton = document.querySelector(".close-button");


function toggleModal() {
    modal.classList.toggle("show-modal");
	document.getElementById('post_plugin_pdf').value = 1;
//     document.getElementById('vc-lead-form').style.display = 'block';
//     document.getElementById('responce').style.display = 'none';
}

function modalPluginPdf(){
	 modal.classList.toggle("show-modal");
	 document.getElementById('post_plugin_pdf').value = 0;
	//  document.getElementById('vc-lead-form').style.display = 'block';
	//  document.getElementById('responce').style.display = 'none';

}

function windowOnClick(event) {
    if (event.target === modal) {
        toggleModal();
    }
}
closeButton.addEventListener("click", toggleModal);
pluginPdfTrigger.addEventListener("click", modalPluginPdf);
window.addEventListener("click", windowOnClick);


const vcform    = document.getElementById('vc-lead-form');
const fname     = document.getElementById('first_name');
const emailPD   = document.getElementById('txtEmail');
const phonePD   = document.getElementById('phone_no');
const country   = document.getElementById('country');
function ValidationEvent(e){
   
    checkRequiredPD([fname, emailPD, phonePD, country]);
    if (
        (vcSpaceCheckerPD(fname.value.trim()) === true) &&
        (vcSpaceCheckerPD(emailPD.value.trim()) === true) &&
        (vcSpaceCheckerPD(phonePD.value.trim()) === true) &&
        (vcSpaceCheckerPD(country.value.trim()) === true)

    ) {
        const sre =
            /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        if (!sre.test(emailPD.value.trim())) {
            return false;
        }
        if (checkLengthPD(phonePD, 8, 20) === false) {
            return false;
        }
        let name = document.getElementById('first_name').value;
        let emailid = document.getElementById('txtEmail').value;
        let phoneno = document.getElementById('phone_no').value;
        let countryname = document.getElementById('country').value;
        let postid = document.getElementById('postid').value;
        let thisBtn = document.getElementById('pxldebtn');
        thisBtn.value = "Please wait...";
        thisBtn.disabled = true;
        let posttitle = document.getElementById('posttitle').value;
		let post_plugin_pdf = document.getElementById('post_plugin_pdf').value;
		
		var form = document.querySelector('.orderform');
        var data = new FormData(form);
        var object = {};
        data.forEach((value, key) => object[key] = value);
        var json = JSON.stringify(object);
        xhr = new XMLHttpRequest();
        xhr.open('POST', pxlObj.web_url+'/verify/', true);
        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhr.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById('vc-lead-form').style.display = 'none';
                var response = this.responseText;
                document.getElementById("responce").innerHTML = response;

            }
        };

        xhr.send("fname=" + name + "&email=" + emailid + "&phoneno=" + phoneno + "&country=" + countryname +
            "&postid=" + postid + "&posttitle=" + posttitle + "&post_plugin_pdf=" + post_plugin_pdf );
    } else {
        return false;
    }
}

function vcSpaceCheckerPD(input) {
    if (!/^[A-Za-z0-9!@#$%^&*()".,;:{}<>?\[\]\-+=' ]{1,}/.test(input)) {
        return false;
    } else {
        return true;
    }
}

//checkRequiredPD fields
function checkRequiredPD(inputArr) {
    //alert(inputArr);
    inputArr.forEach(function(input) {
        console.log(input.name);
        let e = input.value.trim();
        if (!/^[A-Za-z0-9!@#$%^&*()".,;:{}<>?\[\]\-+=' ]{2,}/.test(e)) {

            if (input.name == "firstName") {
                showErrorPD(input, `Please Fill Full Name`);
            } else if (input.name == "phone") {
                showErrorPD(input, `Please Fill Phone`);
            } else if (input.name == "email") {
                showErrorPD(input, `Please Fill Email`);
            } else if (input.name == "country") {
                showErrorPD(input, `Please Fill Country Name`);
            }
        } else {
            checkEmailPD(emailPD);
            checkLengthPD(phonePD, 8, 20);
        }
    });
}

//Show input error messages
function showErrorPD(input, message, spDiv = false) {
    let formControl = input.parentElement;
    let small = formControl.querySelector('small.error-msg-section');
    if (spDiv !== false) {
        small = document.getElementById(spDiv);
    }
    formControl.classList.add('ws-error');
    small.innerText = message;
}

//show success colour
function showSuccesPD(input, spDiv = false) {
    let formControl = input.parentElement;
    let small = formControl.querySelector('small.error-msg-section');
    if (spDiv !== false) {
        small = document.getElementById(spDiv);
    }
    formControl.classList.remove('ws-error');
    small.innerText = '';
}

//check email is valid
function checkEmailPD(input) {
    const re =
        /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if (re.test(input.value.trim())) {
        showSuccesPD(input)
    } else {
        if (input.value == '') {
            showErrorPD(input, 'Please Fill Email');
        } else {
            showErrorPD(input, 'Email is not valid');
        }
    }
}

function phonenumberPD(inputtxt) {
    if( (/^[A-Za-z0123456789()\s.+-]+$/.test(inputtxt.value.trim()) && inputtxt.value.length >= 8) ){       
        showSuccesPD(inputtxt)
    } else {
        if (inputtxt.value == '') {
            showErrorPD(inputtxt, 'Please Fill Phone', 'lblError_phone');
        } else {
            showErrorPD(inputtxt, 'Phone Number is not valid', 'lblError_phone');
        }

    }
}
fname.addEventListener("keyup", checkUseNamePD);
fname.addEventListener("keypress", checkUseNamePD);
fname.addEventListener("focusout", checkUseNamePD);

country.addEventListener("keyup", checkcountry);
country.addEventListener("keypress", checkcountry);
country.addEventListener("keydown", checkcountry);
country.addEventListener("focusout", checkcountry);

phonePD.addEventListener("keyup", checkPhonePD);
phonePD.addEventListener("keypress", checkPhonePD);
phonePD.addEventListener("keydown", ws_checkPhonePDnumber);
phonePD.addEventListener("focusout", checkPhonePD);

emailPD.addEventListener("focusout", checkEmailPDEvent);


function checkcountry(event) {
    checkLengthPD(country, 1, 100);
}


function ws_validateStr(e) {
    if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123) || charCode != 32) {
        return true;
    } else {
        return false;
    }

}

function checkEmailPDEvent(event) {
    checkEmailPD(emailPD);
}

function checkUseNamePD(event) {
    checkLengthPD(fname, 3, 255);
}

function checkPhonePD(event) {
    checkLengthPD(phonePD, 8, 20);
    phonenumberPD(phonePD);
}

//check input Length
function checkLengthPD(input, min, max) {
    if (input.value.length < min) {
        if (input.name == "firstName") {
            showErrorPD(input, `Please Fill Full  Name`);
        } else if (input.name == "phone") {
            showErrorPD(input, `Please Fill Phone`, "lblError_phone");
        } else if (input.name == "email") {
            showErrorPD(input, `Please Fill Email`);
        } else if (input.name == "country") {
            showErrorPD(input, `Please Fill Country`);
        } else {
            showErrorPD(input, `This Field is required`)
        }
        return false;
    } else {
        if (input.name == "phone") {
            showSuccesPD(input);
        }
        if (input.name == "email") {
            showSuccesPD(input);
        } else {
            showSuccesPD(input);
        }
        return true;
    }
}

function ws_checkPhonePDnumber(e) {
    let keyArray = [46, 8, 9, 27, 13, 187, 189, 16, 17];

    -
    1 !== keyArray.indexOf(e.keyCode) || 65 == e.keyCode && !0 === e.ctrlKey || 86 == e.keyCode && !0 === e.ctrlKey ||
        67 == e.keyCode && !0 === e.ctrlKey || 88 == e.keyCode && !0 === e.ctrlKey || e.keyCode >= 35 && e.keyCode <=
        39 || (e.shiftKey || e.keyCode < 48 || e.keyCode > 57) && (e.keyCode < 96 || e.keyCode > 105) && e
        .preventDefault()
}

// validation starts 

function numbersonly(e) {
    var unicode = e.charCode ? e.charCode : e.keyCode
    var lblError = document.getElementById("lblError_phone");
    document.querySelector('input[name=phone]').classList.remove("error-field");
    lblError.innerHTML = "";
    if (unicode != 8) { //if the key isn't the backspace key (which we should allow)
        if (document.querySelector('input[name=phone]').value.length > 9) {
            document.querySelector('input[name=phone]').classList.add("error-field");
            lblError.innerHTML = "Limit Reached.";
            return false //disable key press
        }
        if (unicode < 48 || unicode > 57) {
            document.querySelector('input[name=phone]').classList.add("error-field");
            lblError.innerHTML = "Only Numbers allowed.";
            return false //disable key press
        } //if not a number

    }
}

function ValidateName(e, errorId, fieldname) {
    var keyCode = e.keyCode || e.which;

    var lblError = document.getElementById(errorId);
    lblError.innerHTML = "";

    //Regex for Valid Characters i.e. Alphabets.
    var regex = /^[a-zA-Z ]+$/;

    //Validate TextBox value against the Regex.
    var isValid = regex.test(String.fromCharCode(keyCode));
    document.querySelector('input[name=' + fieldname + ']').classList.remove("error-field");
    if (!isValid) {
        document.querySelector('input[name=' + fieldname + ']').classList.add("error-field");
        lblError.innerHTML = "Only Alphabets allowed.";
    }

    return isValid;
}

function ValidateEmail() {
    var email = document.getElementById("txtEmail").value;
    var lblError = document.getElementById("lblError_email");
    lblError.innerHTML = "";
    if (emailPD == '') {
        lblError.innerHTML = "";
        return true
    }
    var expr = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
    if (!expr.test(emailPD)) {
        lblError.innerHTML = "Invalid email address.";
        document.getElementById("txtEmail").classList.add("error-field");
    } else {
        document.getElementById("txtEmail").classList.remove("error-field");
    }
}

function blockSpecialCountry() {
    var fieldname = 'country';
    var k = event.keyCode;
    var lblError = document.getElementById('lblError_country');
    var _validCheckCountry = (k > 64 && k < 91) || (k > 96 && k < 123) || k == 8 || k == 32 || (k < 48 && k > 57);


    lblError.innerHTML = '';
    document.querySelector('input[name=' + fieldname + ']').classList.remove("error-field");

    if (!_validCheckCountry) {
        lblError.innerHTML = "Special Char and Numbers are not allowed.";
        document.querySelector('input[name=' + fieldname + ']').classList.add("error-field");
        return false;
    }
    // return ((k > 64 && k < 91) || (k > 96 && k < 123) || k == 8  || (k < 48 && k > 57));
}

function spaceTrimFunction() {
    document.querySelector('input[name=country]').value = document.querySelector('input[name=country]').value.trim();
    console.log("FFFFF");
}

 function DownloadFile(fileName, filepathd) {
	 console.log(filepathd);
    var url = fileName;
    document.getElementById('pdf_load').innerHTML  = "Please Wait...";

    //Create XMLHTTP Request.
    var req = new XMLHttpRequest();
    req.open("GET", url, true);
    req.responseType = "blob";
    req.onload = function () {
        //Convert the Byte Data to BLOB object.
        var blob = new Blob([req.response], { type: "application/octetstream" });

        //Check the Browser type and download the File.
        var isIE = false || !!document.documentMode;
        if (isIE) {
            window.navigator.msSaveBlob(blob, filepathd);
        } else {
            var url = window.URL || window.webkitURL;
            link = url.createObjectURL(blob);
            var a = document.createElement("a");
            a.setAttribute("download", filepathd);
            a.setAttribute("href", link);
            document.body.appendChild(a);
            a.click();
			
            document.body.removeChild(a);
			document.getElementById('pdf_load').innerHTML  = "Download Now";

        }
    };
    req.send();
};

var countries = ["Afghanistan","Albania","Algeria","Andorra","Angola","Anguilla","Antigua & Barbuda","Argentina","Armenia","Aruba","Australia","Austria","Azerbaijan","Bahamas","Bahrain","Bangladesh","Barbados","Belarus","Belgium","Belize","Benin","Bermuda","Bhutan","Bolivia","Bosnia & Herzegovina","Botswana","Brazil","British Virgin Islands","Brunei","Bulgaria","Burkina Faso","Burundi","Cambodia","Cameroon","Canada","Cape Verde","Cayman Islands","Central Arfrican Republic","Chad","Chile","China","Colombia","Congo","Cook Islands","Costa Rica","Cote D Ivoire","Croatia","Cuba","Curacao","Cyprus","Czech Republic","Denmark","Djibouti","Dominica","Dominican Republic","Ecuador","Egypt","El Salvador","Equatorial Guinea","Eritrea","Estonia","Ethiopia","Falkland Islands","Faroe Islands","Fiji","Finland","France","French Polynesia","French West Indies","Gabon","Gambia","Georgia","Germany","Ghana","Gibraltar","Greece","Greenland","Grenada","Guam","Guatemala","Guernsey","Guinea","Guinea Bissau","Guyana","Haiti","Honduras","Hong Kong","Hungary","Iceland","India","Indonesia","Iran","Iraq","Ireland","Isle of Man","Israel","Italy","Jamaica","Japan","Jersey","Jordan","Kazakhstan","Kenya","Kiribati","Kosovo","Kuwait","Kyrgyzstan","Laos","Latvia","Lebanon","Lesotho","Liberia","Libya","Liechtenstein","Lithuania","Luxembourg","Macau","Macedonia","Madagascar","Malawi","Malaysia","Maldives","Mali","Malta","Marshall Islands","Mauritania","Mauritius","Mexico","Micronesia","Moldova","zMonaco","Mongolia","Montenegro","Montserrat","Morocco","Mozambique","Myanmar","Namibia","Nauro","Nepal","Netherlands","Netherlands Antilles","New Caledonia","New Zealand","Nicaragua","Niger","Nigeria","North Korea","Norway","Oman","Pakistan","Palau","Palestine","Panama","Papua New Guinea","Paraguay","Peru","Philippines","Poland","Portugal","Puerto Rico","Qatar","Reunion","Romania","Russia","Rwanda","Saint Pierre & Miquelon","Samoa","San Marino","Sao Tome and Principe","Saudi Arabia","Senegal","Serbia","Seychelles","Sierra Leone","Singapore","Slovakia","Slovenia","Solomon Islands","Somalia","South Africa","South Korea","South Sudan","Spain","Sri Lanka","St Kitts & Nevis","St Lucia","St Vincent","Sudan","Suriname","Swaziland","Sweden","Switzerland","Syria","Taiwan","Tajikistan","Tanzania","Thailand","Timor L'Este","Togo","Tonga","Trinidad & Tobago","Tunisia","Turkey","Turkmenistan","Turks & Caicos","Tuvalu","Uganda","Ukraine","United Arab Emirates","United Kingdom","United States of America","Uruguay","Uzbekistan","Vanuatu","Vatican City","Venezuela","Vietnam","Virgin Islands (US)","Yemen","Zambia","Zimbabwe"];
function autocomplete(inp, arr) {  
var currentFocus;

inp.addEventListener("input", function(e) {

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
autocomplete(document.getElementById("country"), countries);
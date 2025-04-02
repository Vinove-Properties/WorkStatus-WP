const ebPopu    = document.getElementById('cmnebook-popup');
const fname     = document.getElementById('eb-name');
const emailPD   = document.getElementById('eb-email');
const phonePD   = document.getElementById('eb-phone');

function geteBook_popup( pdfLnk = "" ){
    let pdfInput   = document.getElementById('elm_eb_pdf');
    ebPopu.style.display = "block";
    document.getElementById("_ebresponse").style.display = "none";
    document.getElementById("ebookFormElm").style.display = "block";
    if( pdfInput ){
        pdfInput.value = pdfLnk;
    }  
}

function vcGetName(name) {
    name = name.trim();
    let lastName = name.includes(' ') ? name.replace(/.*\s([\w-]*)$/, '$1') : '';
    let firstName = name.replace(new RegExp(lastName + '$'), '').trim();
    return [firstName, lastName];
}

function _close_ebook_model(){
    ebPopu.style.display = "none"
}


function checkUseName(event) {
    checkLengthEB(fname, 3, 255);
}

function phonenumber(inputtxt) {
    if( (/^[A-Za-z0123456789()\s.+-]+$/.test(inputtxt.value.trim()) && inputtxt.value.length >= 6) ){       
        showSuccesEB(inputtxt)
    } else {
        if (inputtxt.value == '') {
            showErrorEB(inputtxt, 'Please enter phone number', 'lblError_phone');
        } else {
            showErrorEB(inputtxt, 'Phone number is not valid', 'lblError_phone');
        }

    }
}

function checkPhone(event) {
    checkLengthEB(phonePD, 6, 20);
    phonenumber(phonePD);
}
function checkEmailEB(input) {
    const re =
        /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if (re.test(input.value.trim())) {
        showSuccesEB(input)
    } else {
        if (input.value == '') {
            showErrorEB(input, 'Please fill email');
        } else {
            showErrorEB(input, 'Email is not valid');
        }
    }
}

function checkEmailEvent(event) {
    checkEmailEB(emailPD);
}

function showErrorEB(input, message, spDiv = false){
    //if( !input.classList.contains('downbtn') ){
    let formControl = input.parentElement;
    let small = formControl.querySelector('small.error-msg-section');
    formControl.classList.add('verror');
    if( small ){
        small.innerText = message;    
    }    
    //}
}

function showSuccesEB(input, spDiv = false){
    let formControl = input.parentElement;
    let small = formControl.querySelector('small.error-msg-section');
    formControl.classList.remove('verror');
    small.innerText = '';
}

function checkLengthEB(input, min, max) {
    if (input.value.length < min) {
        if(input.name == "name"){
            showErrorEB(input, `Please fill name`);
        }else if(input.name == "phone"){
            showErrorEB(input, `Please enter phone number`);
        }else if(input.name == "email"){
            showErrorEB(input, `Please fill email`);
        }else{
            //showErrorEB(input, `This Field is required`);
        }
        return false;
    }else{
        showSuccesEB(input);        
        return true;
    }
}

fname.addEventListener("keyup", checkUseName);
fname.addEventListener("keypress", checkUseName);
fname.addEventListener("focusout", checkUseName);

phonePD.addEventListener("keyup", checkPhone);
phonePD.addEventListener("keypress", checkPhone);
phonePD.addEventListener("keydown", ws_checkphonenumber);
phonePD.addEventListener("focusout", checkPhone);

emailPD.addEventListener("focusout", checkEmailEvent);

function elmErrorMsg(elm, msg, err = true){
    if( err === true ){
        elm.nextElementSibling.textContent = msg;
        elm.parentElement.classList.add("verror");
    }else{
        elm.nextElementSibling.textContent = '';
        elm.parentElement.classList.remove("verror");
    }
}

function _handleEbookSubmission(e){    
    const nameField     = document.getElementById('eb-name');
    const emailField    = document.getElementById('eb-email');
    const phoneField    = document.getElementById('eb-phone');
    let isValid         = true;
    
    if (nameField.value.trim() === '') {
        elmErrorMsg( nameField, "Please fill name." );
        isValid = false;
    }else{
        elmErrorMsg( nameField, "", false );
    }
    
    const emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
    if( (emailField.value.trim() === '') || !emailPattern.test(emailField.value.trim()) ){
        elmErrorMsg( emailField, "Please enter a valid email" );
        isValid = false;
    }else{
        elmErrorMsg( emailField, "", false );
    }

    if( phoneField.value.trim() == '' ){
        elmErrorMsg( phoneField, "Please enter phone number" );        
        isValid = false;
    }else{
        phoneField.nextElementSibling.textContent = '';
    }

    if(isValid){
        const formBtn   = document.getElementById("post_ebook");
        let namePart    = vcGetName( nameField.value );
        let firstName   = namePart[0];
        let lastName    = (namePart[1] && (namePart[1] != "")) ? namePart[1] : '';
        formBtn.value   = "Please Wait...";
        formBtn.disabled = true;
        const url   = wsObj.es_api_url;
        const data  = { first_name: firstName, last_name: lastName, email: emailField.value };
        fetch( url, {
            method: 'POST',
            headers: {'Content-Type': 'application/json'},
            body: JSON.stringify(data)
        })
        .then( response => response.json() )
        .then( data => {
            console.log( 'Success:', data );
            let pdfInput    = document.getElementById('elm_eb_pdf');
            let pdfLink     = pdfInput.value;            
            const link      = document.createElement('a');
            link.href       = pdfLink;
            link.target     = '_blank';
            link.download   = pdfLink.split('/').pop();
            document.body.appendChild(link);
            link.click();
            link.remove();
            e.reset();
            e.style.display     = "none";
            formBtn.value       = "Download Free Ebook";
            formBtn.disabled    = false;
            document.getElementById("_ebresponse").style.display = "block";
        })
        .catch((error) => {
            formBtn.value       = "Download Free Ebook";
            formBtn.disabled    = false;
            e.reset();
        });
    }
    return false;
}

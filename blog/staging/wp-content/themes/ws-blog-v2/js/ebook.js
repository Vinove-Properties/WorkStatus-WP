const vcform    = document.getElementById('vc-lead-form');
const fname     = document.getElementById('eb-name');
const emailPD   = document.getElementById('eb-email');
const phonePD   = document.getElementById('eb-phone');
const country   = document.getElementById('country');

function elmErrorMsg(elm, msg, err = true){
    if( err === true ){
    elm.nextElementSibling.textContent = msg;
    elm.nextElementSibling.classList.add = "err";
    }else{
    elm.nextElementSibling.textContent = '';
    elm.nextElementSibling.classList.remove = "err";
    }    
}

function _handleEbookSubmission(){
    const nameField     = document.getElementById('eb-name');
    const emailField    = document.getElementById('eb-email');
    const phoneField    = document.getElementById('eb-phone');
    let isValid         = true;
    // Validate Name
    if (nameField.value.trim() === '') {
        elmErrorMsg( nameField, "Please Fill Name." );
        isValid = false;
    }else{
        elmErrorMsg( nameField, "", false );
    }

    // Validate Email
    const emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
    if (emailField.value.trim() === '' || !emailPattern.test(emailField.value.trim())) {
        elmErrorMsg( emailField, "Please enter a valid email" );
        isValid = false;
    }else{
        elmErrorMsg( emailField, "", false );
    }

    // Validate Phone (optional)
    //const phonePattern = /^\d{10}$/;
    if( phoneField.value.trim() == '' ){
        elmErrorMsg( phoneField, "Please enter phone number" );        
        isValid = false;
    } else {
        phoneField.nextElementSibling.textContent = '';
    }

    if (isValid) {
        // Submit form if valid
        alert('Form submitted successfully');
        // You can add form submission logic here
    }
    return false;
}

//document.querySelector('form').addEventListener('submit', _handleEbookSubmission);
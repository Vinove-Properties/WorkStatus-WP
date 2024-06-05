function utm_getQueryParams(){
    const params = {};
    const queryString = window.location.search.substring(1);
    const queryArray = queryString.split("&");
    queryArray.forEach(function(item) {
        const [key, value] = item.split("=");
        params[key] = decodeURIComponent(value);
    });
    return params;
}

function utm_setCookie(name, value, days) {
    const date = new Date();
    date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
    const expires = "expires=" + date.toUTCString();
    document.cookie = name + "=" + value + ";" + expires + ";path=/";
}

const params    = utm_getQueryParams();
const utmParams = ['utm_source', 'utm_medium', 'utm_campaign', 'utm_content', 'utm_term'];
const utmValues = {};

utmParams.forEach(param => {
if (params[param]) {
    utm_setCookie(param, params[param], 1);
}
});

function utm_getCookie(name) {
    const value = `; ${document.cookie}`;
    const parts = value.split(`; ${name}=`);
    if (parts.length === 2) return parts.pop().split(';').shift();
}

utmParams.forEach(param => {
    const value = utm_getCookie(param);
    if (value) {
        utmValues[param] = value;
    }
});
utmValues['utm_term'] = document.body.getAttribute('data-url');
function generateUtmLink(baseUrl, utmParams) {
    const url = new URL(baseUrl);
    Object.keys(utmParams).forEach(param => {
        if( utmValues[utmParams[param]] ){
            url.searchParams.append(utmParams[param], utmValues[utmParams[param]]);    
        }        
    });
    return url.toString();
}

function calendlyCTA( link = 'https://calendly.com/workstatus/demo' ){
    window.location.href = generateUtmLink( link, utmParams );
}

function getAllQueryParams(url) {
    const urlObj = new URL(url);
    const params = new URLSearchParams(urlObj.search);
    const paramObj = {};    
    params.forEach((value, key) => {
        paramObj[key] = value;
    });
    
    return paramObj;
}

function glob_signup(e = this ){
    if( e.getAttribute('data-href') ){
        let str         = e.getAttribute('data-href');
        let allParams   = getAllQueryParams( str );
        console.log(allParams);
        if( "pid" in allParams ) {
            document.getElementById("ws_pid").value = allParams.pid;
        }
        if( "type" in allParams ) {
            document.getElementById("ws_stype").value = allParams.type;
        }
    }    
    let suForm = document.getElementById("formPopup-su");
    suForm.style.display = "block";
    return false;
}
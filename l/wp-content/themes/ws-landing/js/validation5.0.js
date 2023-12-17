	var serializeForm = function (form) {
	var obj = {};
	var formData = new FormData(form);
	for (var key of formData.keys()) {
		obj[key] = formData.get(key);
	}
	return obj;
};

const sgemail1 	= document.getElementById("sgemail1"),
sgphone1 		= document.getElementById("cont_phpne1"),

sgemail2 		= document.getElementById("sgemail2"),
sgphone2 		= document.getElementById("cont_phpne2"),

sgemail3 		= document.getElementById("sgemail3"),
sgphone3 		= document.getElementById("cont_phpne3"),


pCodeInput 		= document.querySelector("#pcode1"),
pCodeInput2 	= document.querySelector("#pcode2"),
pCodeInput3 	= document.querySelector("#pcode3");

/* Modified Functions script-version1 */
function checkRequiredTF(inputArr){
    inputArr.forEach(function(input){
        //console.log( input.name );
        let e = input.value.trim();
        if( !/^[A-Za-z0-9!@#$%^&*()".,;:{}<>?\[\]\-+=' ]{2,}/.test(e) ){
            if( input.name == "phone" ){
	            if( input.hasAttribute('data-errelm') ){
					showError(input, `Please Fill Phone`, input.dataset.errelm);
	            }else{
					showError(input, `Please Fill Phone`, 'phone-error');
	            }
            }else if( input.name == "email" ){
                showError(input, `Please Fill Email`);
            }else{
                if( input.name == "phone" ){
                    showError(input,`This Field is required`, 'phone-error');
                }else{
                    showError(input,`This Field is required`);
                }                
            }
        }
    });
}

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

intlTelInput(pCodeInput,{initialCountry: "auto"});
intlTelInput(pCodeInput2,{initialCountry: "auto"});
intlTelInput(pCodeInput3,{initialCountry: "auto"});


// 1.
sgemail1.addEventListener("focusout", function(){
	checkEmail( sgemail1 );
}),
sgemail1.addEventListener("focusin", function(){
    doNotingonFocus( sgemail1 );
});

"keyup,keypress,focusout".split(",").forEach(function(e){
	sgphone1.addEventListener(e,function(){
		fixed_checkPhone(sgphone1, "phone-errorelm1");
	});
});
sgphone1.addEventListener( "keydown", ws_checkphonenumber );

// 2.
sgemail2.addEventListener("focusout", function(){
	checkEmail( sgemail2 );
}),
sgemail2.addEventListener("focusin", function(){
    doNotingonFocus( sgemail2 );
});

"keyup,keypress,focusout".split(",").forEach(function(e){
	sgphone2.addEventListener(e,function(){
		fixed_checkPhone(sgphone2, "phone-errorelm2");
	});
});
sgphone2.addEventListener( "keydown", ws_checkphonenumber );

// 3.
sgemail3.addEventListener("focusout", function(){
	checkEmail( sgemail3 );
}),
sgemail3.addEventListener("focusin", function(){
    doNotingonFocus( sgemail3 );
});

"keyup,keypress,focusout".split(",").forEach(function(e){
	sgphone3.addEventListener(e,function(){
		fixed_checkPhone(sgphone3, "phone-errorelm3");
	});
});
sgphone3.addEventListener( "keydown", ws_checkphonenumber );


function wslpSignup(e){
	let varElm = e.dataset.wform;
	if( varElm == 1 ){
		checkRequiredTF( [sgemail1, sgphone1] );
	}
	else if( varElm == 2 ){
		checkRequiredTF([sgemail2, sgphone2]);
	}

	else if( varElm == 3 ){
		checkRequiredTF([sgemail3, sgphone3]);
	}
	
	let fldElm 		= document.querySelectorAll( ".wssgl-form"+varElm+" .form-group" );
	let fldPhone	= document.querySelectorAll( ".wssgl-form"+varElm+" .user-input" );

	
	if( fldElm[0].classList.contains( 'ws-error' ) ){
		return false;
	}

	if( fldPhone[0].classList.contains( 'ws-error' ) ){
		return false;
	}

	e.classList.add("doing-ajax");
	e.querySelector('button').disabled = true;
	e.querySelector('button').innerText = "Please wait...";
	//return false;

	var formData 	= JSON.stringify( serializeForm(e) );
	var xhttp 		= new XMLHttpRequest();
	xhttp.open("POST", wsObj.ajaxurl+'?action=ws-dosignup', true); 
	xhttp.setRequestHeader("Content-Type", "application/json");
	xhttp.onreadystatechange = function() {
	   if (this.readyState == 4 && this.status == 200) {	   		
	     	let response = this.responseText;
	     	//console.log( response );
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
// 9601301937
function planpopup(planType){
	let formPopup 	= document.getElementById("signupformPopup");
	let hplan 		= document.getElementById("wsplan3");
	let cftBtn 		= document.getElementById("cft-btn3");
	cftBtn.innerText = "Signup";
	hplan.value		= planType;
	formPopup.style.display = "block";
}

function setFreePlan(planType){
	let hplan 		= document.getElementById("wsplan2");
	hplan.value		= planType;
	let element 	= document.getElementById("btm-form");
	sgemail2.focus();
 	element.scrollIntoView();
}
let spanCloseSG = document.getElementsByClassName("closeicon-sg")[0];
spanCloseSG &&(spanCloseSG.onclick = function () {
	let formPopup = document.getElementById("signupformPopup");
    formPopup.style.display = "none";

    let cftBtn 		= document.getElementById("cft-btn3");
	cftBtn.innerText = "Create free trial account";
})

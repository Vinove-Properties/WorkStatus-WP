	const wsHost = ( location.hostname == "localhost" ) ? "http://localhost/workstatus/" : "https://www.workstatus.io/";
    function myFunction(id) {
	  var elems = document.querySelectorAll(".select-sec:not(#"+id+")");
      [].forEach.call(elems, function(el) {
      el.classList.remove("open");
      });	
      var element = document.getElementById(id);	 
      element.classList.toggle("open");
      }
	  
	  function startsetzoneValue(id,inputid,count){
      data = document.getElementById(id).value;
      document.getElementById(inputid).value = data;
	  var starttimezone = document.getElementById('startzone-'+count).value;
	  var stoptimezone = document.getElementById('stopzone-'+count).value;
	  

      var startmm = document.getElementById('changevalue2'+count).innerHTML;
      var stopmm = document.getElementById('changevalue4'+count).innerHTML;
	  
	  if(starttimezone == "PM") {
		  var starthh = document.getElementById('changevalue1'+count).innerHTML;
		  startAmPm = parseInt(starthh, 10) + 12;
	  }else if(starttimezone == "AM") {
		  var starthh = document.getElementById('changevalue1'+count).innerHTML;
		  startAmPm = starthh;
	  }
	  if(stoptimezone == "PM") {
		  var stophh = document.getElementById('changevalue3'+count).innerHTML;
		  stopAmPm = parseInt(stophh, 10) + 12;
	  }else if(stoptimezone == "AM") {
		  var stophh = document.getElementById('changevalue3'+count).innerHTML;
		  stopAmPm = stophh;
	  }
	
	 // alert(stopAmPm);
	  var start11 = startAmPm+':'+startmm+':00';
	  var end11 = stopAmPm+':'+stopmm+':00';
	  var start = startAmPm+':'+startmm;
	  var end = stopAmPm+':'+stopmm;
	  start = start.split(":");
		end = end.split(":");
		var startDate = new Date(0, 0, 0, start[0], start[1], 0);
		var endDate = new Date(0, 0, 0, end[0], end[1], 0);
		var starttime1 = startDate.getTime();
		var stoptime2 = endDate.getTime();
		var diff = endDate.getTime() - startDate.getTime();
		var hours = Math.floor(diff / 1000 / 60 / 60);
		diff -= hours * 1000 * 60 * 60;
		var minutes = Math.floor(diff / 1000 / 60);
      if(end11 == '00:00:00'){
		  
	  }else if(start11 == end11){
		   
	  }else if (start11 < end11) {
       
      document.getElementById('total'+count).innerHTML = (hours < 9 ? "0" : "") + hours + ":" + (minutes < 9 ? "0" : "") + minutes;
	  document.getElementById('totalval'+count).value = (hours < 9 ? "0" : "") + hours + ":" + (minutes < 9 ? "0" : "") + minutes;
	  
      }else if(start11 > end11){
	  document.getElementById('total'+count).innerHTML = '00:00';
	  document.getElementById('totalval'+count).value = '00:00';
      alert('Stop time must be higher than Start time.'); 
	  }
      setTotalValue();
	  }
	  
	  function getTechData(btn_id) {
		if(btn_id == 'print-btn'){
		// alert("j");
		var printContents = document.getElementById('printid').innerHTML;
		var originalContents = document.body.innerHTML;
		document.body.innerHTML = printContents;
		window.print();
		document.body.innerHTML = originalContents;
		}

		var inputstarthh = document.getElementsByName('starthh[]');
	  var inputstartmm = document.getElementsByName('startmm[]');
	  var inputstophh = document.getElementsByName('stophh[]');
	  var inputstopmm = document.getElementsByName('stopmm[]');
	  var inputbreakhh = document.getElementsByName('breakhh[]');
	  var inputbreakmm = document.getElementsByName('breakmm[]');
	  var inputtotalval = document.getElementsByName('totalval[]');
	  var startzone = document.getElementsByName('startzone[]');
	  var stopzone = document.getElementsByName('stopzone[]');
	  var inputtotvaltime = document.getElementById("totvaltime").value;
	  var inputuniqval = document.getElementById("uniqval").value;
    var starthh 		= [];
	  var startmm 		= [];
	  var stophh 			= [];
	  var stopmm 			= [];
	  var breakhh 		= [];
	  var breakmm 		= [];
	  var totalval 		= [];
	  var startzones 	= [];
	  var stopzones 	= [];
	  for (var i = 0; i < inputstarthh.length; i++) {
                var a = inputstarthh[i];
                starthh.push(a.value);
               // a.value = "";
            }	
			var startitemhh = JSON.stringify(starthh);
			//alert(startitemhh);
	  for (var i = 0; i < inputstartmm.length; i++) {
                var b = inputstartmm[i];
                                  startmm.push(b.value);
                                //   b.value = "";
            }	
			var startitemmm = JSON.stringify(startmm);
			
      for (var i = 0; i < inputstophh.length; i++) {
                var c = inputstophh[i];
                stophh.push(c.value);
               // c.value = "";
            }	
			var stoptitemhh = JSON.stringify(stophh);
      
      for (var i = 0; i < inputstopmm.length; i++) {
                var d = inputstopmm[i];
                stopmm.push(d.value);
               // d.value = "";
            }	
			var stoptitemmm = JSON.stringify(stopmm);
      
	  for (var i = 0; i < inputbreakhh.length; i++) {
                var e = inputbreakhh[i];
                breakhh.push(e.value);
                //e.value = "";
            }	
			var breaktitemhh = JSON.stringify(breakhh);
	  
      for (var i = 0; i < inputbreakmm.length; i++) {
                var f = inputbreakmm[i];
                breakmm.push(f.value);
              //  f.value = "";
            }	
			var breaktitemmm = JSON.stringify(breakmm);	  
      
	  for (var i = 0; i < inputtotalval.length; i++) {
                var g = inputtotalval[i];
                totalval.push(g.value);
             //   g.value = "";
            }	
			var totltitem = JSON.stringify(totalval);	  
	  for (var i = 0; i < startzone.length; i++) {
                var h = startzone[i];
                startzones.push(h.value);
            //    h.value = "";
            }	
			var startampm = JSON.stringify(startzones);
      for (var i = 0; i < stopzone.length; i++) {
                var m = stopzone[i];
                stopzones.push(m.value);
            //    m.value = "";
            }	
			var stopampm = JSON.stringify(stopzones);			
			//alert('1'+startitemhh+'2'+startitemmm+'3'+stoptitemhh+'4'+stoptitemmm+'5'+breaktitemhh+'6'+breaktitemmm+'7'+totltitem+'8'+inputtotvaltime);
			if(btn_id == 'export-btn'){		
				xhr = new XMLHttpRequest();
				xhr.open( 'POST', wsHost+'calculate-time.php', true );
				xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
				xhr.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {
				// Response
				var response = this.responseText;  
				//alert(response);
				var file_path = response;
				var a = document.createElement('A');
				a.href = file_path;
				a.download = file_path.substr(file_path.lastIndexOf('/') + 1);
				document.body.appendChild(a);
				a.click();
				document.body.removeChild(a);

				//alert(response);
				//window.location = 'http://localhost/workstatus.io/free-timecard-calculator.php/timesheet_600484757.csv';
				}
				};	
				var params = 'startitemhh='+startitemhh+'&startitemmm='+startitemmm+'&stoptitemhh='+stoptitemhh+'&stoptitemmm='+stoptitemmm+'&breaktitemhh='+breaktitemhh+'&breaktitemmm='+breaktitemmm+'&totltitem='+totltitem+'&inputuniqval='+inputuniqval+'&inputtotvaltime='+inputtotvaltime+'&startampm='+startampm+'&stopampm='+stopampm;
				xhr.send(params);
			}	
	   }

	  function getTechDataemail(btn_id){
	  var inputstarthh 	= document.getElementsByName('starthh[]');
	  var inputstartmm 	= document.getElementsByName('startmm[]');
	  var inputstophh 	= document.getElementsByName('stophh[]');
	  var inputstopmm 	= document.getElementsByName('stopmm[]');
	  var inputbreakhh 	= document.getElementsByName('breakhh[]');
	  var inputbreakmm 	= document.getElementsByName('breakmm[]');
	  var inputtotalval = document.getElementsByName('totalval[]');
	  var startzone 		= document.getElementsByName('startzone[]');
	  var stopzone 			= document.getElementsByName('stopzone[]');
	  var inputtotvaltime = document.getElementById("totvaltime").value;
	  var inputuniqval 	= document.getElementById("uniqval").value;
    var starthh 			= [];
	  var startmm 			= [];
	  var stophh 				= [];
	  var stopmm 				= [];
	  var breakhh 			= [];
	  var breakmm = [];
	  var totalval = [];
	  var startzones = [];
	  var stopzones = [];
	  for (var i = 0; i < inputstarthh.length; i++) {
                var a = inputstarthh[i];
                starthh.push(a.value);
               // a.value = "";
            }	
			var startitemhh = JSON.stringify(starthh);
			//alert(startitemhh);
	  for (var i = 0; i < inputstartmm.length; i++) {
                var b = inputstartmm[i];
                                  startmm.push(b.value);
                                //   b.value = "";
            }	
			var startitemmm = JSON.stringify(startmm);
			
      for (var i = 0; i < inputstophh.length; i++) {
                var c = inputstophh[i];
                stophh.push(c.value);
               // c.value = "";
            }	
			var stoptitemhh = JSON.stringify(stophh);
      
      for (var i = 0; i < inputstopmm.length; i++) {
                var d = inputstopmm[i];
                stopmm.push(d.value);
               // d.value = "";
            }	
			var stoptitemmm = JSON.stringify(stopmm);
      
	  for (var i = 0; i < inputbreakhh.length; i++) {
                var e = inputbreakhh[i];
                breakhh.push(e.value);
                //e.value = "";
            }	
			var breaktitemhh = JSON.stringify(breakhh);
	  
      for (var i = 0; i < inputbreakmm.length; i++) {
                var f = inputbreakmm[i];
                breakmm.push(f.value);
              //  f.value = "";
            }	
			var breaktitemmm = JSON.stringify(breakmm);	  
      
	  for (var i = 0; i < inputtotalval.length; i++) {
                var g = inputtotalval[i];
                totalval.push(g.value);
             //   g.value = "";
            }	
			var totltitem = JSON.stringify(totalval);	  
	  for (var i = 0; i < startzone.length; i++) {
                var h = startzone[i];
                startzones.push(h.value);
            //    h.value = "";
            }	
			var startampm = JSON.stringify(startzones);
      for (var i = 0; i < stopzone.length; i++) {
                var m = stopzone[i];
                stopzones.push(m.value);
            //    m.value = "";
            }	
			var stopampm = JSON.stringify(stopzones);			
//alert('1'+startitemhh+'2'+startitemmm+'3'+stoptitemhh+'4'+stoptitemmm+'5'+breaktitemhh+'6'+breaktitemmm+'7'+totltitem+'8'+inputtotvaltime);  
   
   
   
  
		
    xhr = new XMLHttpRequest();
    xhr.open( 'POST', wsHost+'email-calculate-time.php', true );
	xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
	xhr.onreadystatechange = function() {
	   if (this.readyState == 4 && this.status == 200) {
		  // Response
		  var response = this.responseText;  
		  words = response.replace(/(\r\n|\r|\n)/g, '<br>');
		  //alert(words);
		  var link = "mailto:"
             
             + "?subject=" + encodeURIComponent("Workstatus generated time card")
             + "&body=" + words;
    
    window.location.href = link;
		  
	   }
	};	
    var params = 'startitemhh='+startitemhh+'&startitemmm='+startitemmm+'&stoptitemhh='+stoptitemhh+'&stoptitemmm='+stoptitemmm+'&breaktitemhh='+breaktitemhh+'&breaktitemmm='+breaktitemmm+'&totltitem='+totltitem+'&inputuniqval='+inputuniqval+'&inputtotvaltime='+inputtotvaltime+'&startampm='+startampm+'&stopampm='+stopampm;
		xhr.send(params);
	
	   } 
      function startsetValue(data,id,inputid,count){
		  
	  if(data.toString().length > 1){
	  document.getElementById(id).innerHTML = data;
      document.getElementById(inputid).value = data;
	  }else{
      document.getElementById(id).innerHTML = '0'+data;
      document.getElementById(inputid).value = '0'+data;      
	  } 
	  var starttimezone = document.getElementById('startzone-'+count).value;
	  var stoptimezone = document.getElementById('stopzone-'+count).value;
	  

      var startmm = document.getElementById('changevalue2'+count).innerHTML;
      var stopmm = document.getElementById('changevalue4'+count).innerHTML;
	  
	  if(starttimezone == "PM") {
		  var starthh = document.getElementById('changevalue1'+count).innerHTML;
		  startAmPm = parseInt(starthh, 10) + 12;
	  }else if(starttimezone == "AM") {
		  var starthh = document.getElementById('changevalue1'+count).innerHTML;
		  startAmPm = starthh;
	  }
	  if(stoptimezone == "PM") {
		  var stophh = document.getElementById('changevalue3'+count).innerHTML;
		  stopAmPm = parseInt(stophh, 10) + 12;
	  }else if(stoptimezone == "AM") {
		  var stophh = document.getElementById('changevalue3'+count).innerHTML;
		  stopAmPm = stophh;
	  }
	
	 	// alert(stopAmPm);
	  var start11 = startAmPm+':'+startmm+':00';
	  var end11 = stopAmPm+':'+stopmm+':00';
	  var start = startAmPm+':'+startmm;
	  var end = stopAmPm+':'+stopmm;
	  start = start.split(":");
		end = end.split(":");
		var startDate = new Date(0, 0, 0, start[0], start[1], 0);
		var endDate = new Date(0, 0, 0, end[0], end[1], 0);
		var starttime1 = startDate.getTime();
		var stoptime2 = endDate.getTime();
		var diff = endDate.getTime() - startDate.getTime();
		var hours = Math.floor(diff / 1000 / 60 / 60);
		diff -= hours * 1000 * 60 * 60;
		var minutes = Math.floor(diff / 1000 / 60);
      if(end11 == '00:00:00'){
		  
	  }else if(start11 == end11){
		   
	  }else if (start11 < end11) {
       
      document.getElementById('total'+count).innerHTML = (hours < 9 ? "0" : "") + hours + ":" + (minutes < 9 ? "0" : "") + minutes;
	  document.getElementById('totalval'+count).value = (hours < 9 ? "0" : "") + hours + ":" + (minutes < 9 ? "0" : "") + minutes;
	  
      }else if(start11 > end11){
	  document.getElementById('total'+count).innerHTML = '00:00';
	  document.getElementById('totalval'+count).value = '00:00';
      alert('Stop time must be higher than Start time.'); 
	  }
      setTotalValue();
      }
	  
	  function stopsetValue(data,id,inputid,count){
     // console.log(data);
      
	  if(data.toString().length > 1){
	  document.getElementById(id).innerHTML = data;
      document.getElementById(inputid).value = data;
	  }else{
      document.getElementById(id).innerHTML = '0'+data;
      document.getElementById(inputid).value = '0'+data;      
	  }
	  
	  var starttimezone = document.getElementById('startzone-'+count).value;
	  var stoptimezone = document.getElementById('stopzone-'+count).value;
	  
	  
      var startmm = document.getElementById('changevalue2'+count).innerHTML;
      var stopmm = document.getElementById('changevalue4'+count).innerHTML;
	  
	  var brkhh = document.getElementById('changevalue5'+count).innerHTML;
      var brkmm = document.getElementById('changevalue6'+count).innerHTML;
	  
	  if(starttimezone == "PM") {
		  var starthh = document.getElementById('changevalue1'+count).innerHTML;
		  startAmPm = parseInt(starthh, 10) + 12;
	  }else if(starttimezone == "AM") {
		  var starthh = document.getElementById('changevalue1'+count).innerHTML;
		  startAmPm = starthh;
	  }
	  if(stoptimezone == "PM") {
		  var stophh = document.getElementById('changevalue3'+count).innerHTML;
		  stopAmPm = parseInt(stophh, 10) + 12;
	  }else if(stoptimezone == "AM") {
		  var stophh = document.getElementById('changevalue3'+count).innerHTML;
		  stopAmPm = stophh;
	  }
	  
	  var start = startAmPm+':'+startmm;
	  var end = stopAmPm+':'+stopmm;
	  var breakTime = brkhh+':'+ brkmm;
	  //alert(breakTime);
	    starttm = start.split(":");
		endtm = end.split(":");
	   	var startDate = new Date(0, 0, 0, starttm[0], starttm[1], 0);
		var endDate = new Date(0, 0, 0, endtm[0], endtm[1], 0);
		var starttime1 = startDate.getTime();
		var stoptime2 = endDate.getTime();	
	   if(stoptime2 > starttime1){
	   var diff = getSeconds(end) -  getSeconds(start) - getSeconds(breakTime);
	   var diffn = getTime(diff);
	   tottimes = diffn.split(":");
	   if(tottimes[0] < 0){
		document.getElementById('total'+count).innerHTML = '00:00';   
		document.getElementById('totalval'+count).value = '00:00';
	   }else{
	    document.getElementById('total'+count).innerHTML = getTime(diff);
		document.getElementById('totalval'+count).value = getTime(diff);
	   }
	   }else {
		document.getElementById('total'+count).innerHTML = '00:00';
		document.getElementById('totalval'+count).value = '00:00';
			alert('Stop time must be higher than Start time.');
		}   
		// var startDate = new Date(0, 0, 0, start[0], start[1], 0);
		// var endDate = new Date(0, 0, 0, end[0], end[1], 0);
		// var breakDate = new Date(0, 0, 0, brtime[0], brtime[1], 0);
		// var starttime1 = startDate.getTime();
		// var stoptime2 = endDate.getTime();
		// var diff = endDate.getTime() - startDate.getTime() - breakDate.getTime();
		// var hours = Math.floor(diff / 1000 / 60 / 60);
		// diff -= hours * 1000 * 60 * 60;
		// var minutes = Math.floor(diff / 1000 / 60);
		// if(stoptime2 > starttime1){
			// document.getElementById('total'+count).innerHTML = (hours < 9 ? "0" : "") + hours + ":" + (minutes < 9 ? "0" : "") + minutes;
		// }else {
			// document.getElementById('total'+count).innerHTML = '00:00';
			// alert('Stop time must be higher than Start time.');
		// } 
	
       setTotalValue();
      }
	  
	  function getTime(seconds) {

  //an hour contains 60 * 60 = 3600 seconds
  //a minut contains 60 seconds
  //the amount of seconds we have left
  var leftover = seconds;

  //how many full hours fits in the amount of leftover seconds
  var hours = Math.floor(leftover / 3600);
  
  //how many seconds are left
  leftover = leftover - (hours * 3600);

  //how many minutes fits in the amount of leftover seconds
  var minutes = Math.floor(leftover / 60);

  //how many seconds are left
  leftover = leftover - (minutes * 60);
     if(minutes.toString().length > 1){
	 var min = minutes;
	  }else{
      var min = '0'+minutes;
           
	  }
  return ('0' + hours).slice(-2) + ':' + min;
}
function getSeconds(timestamp) {
  var hms = timestamp + ':00';   // your input string
  var a = hms.split(':'); // split it at the colons

  // minutes are worth 60 seconds. Hours are worth 60 minutes.
  var seconds = (+a[0]) * 60 * 60 + (+a[1]) * 60 + (+a[2]); 
  return seconds;
}
	  
	  function breaksetValue(data,id,inputid,count){
		 // alert(data);
	  if(data.toString().length > 1){
	  document.getElementById(id).innerHTML = data;
      document.getElementById(inputid).value = data;
	  }else{
      document.getElementById(id).innerHTML = '0'+data;
      document.getElementById(inputid).value = '0'+data;      
	  }
	  
	  var starttimezone = document.getElementById('startzone-'+count).value;
	  var stoptimezone = document.getElementById('stopzone-'+count).value;
	  
	  
      var startmm = document.getElementById('changevalue2'+count).innerHTML;
      var stopmm = document.getElementById('changevalue4'+count).innerHTML;
	  
	  var brkhh = document.getElementById('changevalue5'+count).innerHTML;
      var brkmm = document.getElementById('changevalue6'+count).innerHTML;	  
	  
	  if(starttimezone == "PM") {
		  var starthh = document.getElementById('changevalue1'+count).innerHTML;
		  startAmPm = parseInt(starthh, 10) + 12;
	  }else if(starttimezone == "AM") {
		  var starthh = document.getElementById('changevalue1'+count).innerHTML;
		  startAmPm = starthh;
	  }
	  if(stoptimezone == "PM") {
		  var stophh = document.getElementById('changevalue3'+count).innerHTML;
		  stopAmPm = parseInt(stophh, 10) + 12;
	  }else if(stoptimezone == "AM") {
		  var stophh = document.getElementById('changevalue3'+count).innerHTML;
		  stopAmPm = stophh;
	  }
	  
	  var start = startAmPm+':'+startmm;
	  var end = stopAmPm+':'+stopmm;
	  var breakTime = brkhh+':'+ brkmm;
	   var diff = getSeconds(end) -  getSeconds(start) - getSeconds(breakTime);
	   var diffn = getTime(diff);
	   tottimes = diffn.split(":");
	   if(tottimes[0] < 0){
		document.getElementById('total'+count).innerHTML = '00:00';   
		document.getElementById('totalval'+count).value = '00:00';
	   }else{
	    document.getElementById('total'+count).innerHTML = getTime(diff);
		document.getElementById('totalval'+count).value = getTime(diff);
	   }
		 setTotalValue();
	  }
	  
	  function setTotalValue(){
		  
		  
		   var tot = hour = minute = 0;
           for(var j = 0; j<7; j++){
           tot = document.getElementById('total'+j).innerHTML;
           tottime = tot.split(":");
		   hour += parseInt(tottime[0]);
		   minute += parseInt(tottime[1]);
		   var totalminutes = minute % 60;
           var diffhours = Math.floor(minute / 60);
		   var totlhr = hour + diffhours;
		   //console.log(totalminutes);
		   //console.log(diffhours);
		   document.getElementById('totalvalue').innerHTML = (totlhr < 9 ? "0" : "") + totlhr + ":" + (totalminutes < 9 ? "0" : "") + totalminutes;
		   document.getElementById('totvaltime').value = (totlhr < 9 ? "0" : "") + totlhr + ":" + (totalminutes < 9 ? "0" : "") + totalminutes;
		   var tott = document.getElementById('totvaltime').value; 
			var tolstart = tott+':00';
			if(tolstart > '00:00:00'){
		   var elements = document.getElementById("export-btn");
		   var elementsemail = document.getElementById("email-btn");
		   var elementsprint = document.getElementById("print-btn");
            elements.classList.remove("disabl");
            elementsemail.classList.remove("disabl");
             elementsprint.classList.remove("disabl");
            document.getElementById('export-btn').disabled = false;
            document.getElementById('email-btn').disabled = false;
            document.getElementById('print-btn').disabled = false;
			}
             }
      
     // document.getElementById('totalvalue').innerHTML = Math.floor(diffmh1)+":"+Math.floor(diffmhminute1);
	  
	  }
      // function setTotalValue(data,totid){
        // var lastChar = totid.substr(totid.length - 1); 
     // // console.log(lastChar);
     // var fid = "total"+lastChar;
    // var f1 = document.getElementById('changevalue1'+lastChar).innerHTML;
    // var f2 = document.getElementById('changevalue2'+lastChar).innerHTML;
    // var f3 = document.getElementById('changevalue3'+lastChar).innerHTML;
    // var f4 = document.getElementById('changevalue4'+lastChar).innerHTML;

    // var f5 = document.getElementById('changevalue5'+lastChar).innerHTML;
    // var f6 = document.getElementById('changevalue6'+lastChar).innerHTML;
     // console.log(f2);
// var totalbreaks = f5+":"+f6+":00";
     // var valuestart = f1+":"+f2+":00";
// var valuestop = f3+":"+f4+":00";
// ///////////////////////////////////////
// var hminute = parseInt(f1 * 60) + parseInt(f2);
// var hminuteend = parseInt(f3 * 60) + parseInt(f4);
// var breakhminute = parseInt(f5 * 60) + parseInt(f6);

// // alert(hminuteend);
// var hmdiff = (hminuteend - hminute) - breakhminute; 
// var diffmh = hmdiff/60;
// var diffmhminute = hmdiff%60;
// // alert(Math.floor(diffmh));
// //alert(diffmhminute);
// if(hmdiff<0){
// return false;
// }
// if(hmdiff<0 && hminuteend>0){
  // alert('End Time should be greater than start date');
// return false;
// }
// document.getElementById('totalval'+lastChar).value = hmdiff;
// ///////////////////////////////////
// //create date format          
// var timeStart = new Date("01/01/2007 " + valuestart).getHours();
// var timeEnd = new Date("01/01/2007 " + valuestop).getHours();
// var mStart = new Date("01/01/2007 " + valuestart).getMinutes();
// var mEnd = new Date("01/01/2007 " + valuestop).getMinutes();
// var bm = new Date("01/01/2007 " + totalbreaks).getMinutes();
// var bh = new Date("01/01/2007 " + totalbreaks).getHours();

// var minutes = mEnd - mStart; 
// var hourDiff = timeEnd - timeStart;
// var fh = hourDiff - bh;
// var fm = minutes - bm;
// //var diff = hourDiff+":"+minutes;
// ////////
 
// ///////////////////////////////////
// // var diff = fh+":"+fm;
// var diff = Math.floor(diffmh)+":"+Math.floor(diffmhminute);

// //console.log(hourDiff);

      // document.getElementById(fid).innerHTML = diff;
      // var tot = 0;
      // for(var j = 0; j<7; j++){
       
        // tot = tot + parseInt(document.getElementById('totalval'+j).value);
        // //alert(tot);
      // }
      // var diffmh1 = tot/60;
// var diffmhminute1 = tot%60;
      // document.getElementById('totalvalue').innerHTML = Math.floor(diffmh1)+":"+Math.floor(diffmhminute1);
      
      // }
    
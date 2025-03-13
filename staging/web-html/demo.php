<?php require_once 'common/inc/config.inc.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link  type="text/css" href="./assests/css/animation.css" rel="preload stylesheet" defer />
<link  type="text/css" href="assests/css/modal.css" rel="preload stylesheet" defer />
<link  type="text/css" href="assests/css/index.css" rel="preload stylesheet" defer />
<link  type="text/css" href="assests/css/font-awesome.min.css" rel="preload stylesheet" defer />
<link  type="text/css" href="./assests/css/glider.css" rel="preload stylesheet" defer />
<link rel="shortcut icon" href="assests/images/favicon.png" type="image/x-icon">
<?php require_once 'common/inc/meta.php'; ?>
</head>
<body>
  <?php require_once 'common/inc/after-body-tag.php'; ?>
<div class="body__wrapper">
  <?php require_once 'common/header.php';?>
  <main class="site__content">
    <section class="two-column-text-image hero-section">
      <div class="container">
        <div class="flex_row">
          <div class="column column-img mdscreen-hide">
            <div class="img-box">
              <picture>
                <source type="image/webp" srcset="./assests/images/demo-1-1x.webp, ./assests/images/demo-1.webp 2x" width="584" height="403">
                <source type="image/png" srcset="./assests/images/demo-1-1x.png, ./assests/images/demo-1.png 2x" width="584" height="403">
                <img srcset="./assests/images/demo-1-1x.png, ./assests/images/demo-1.png 2x" width="584" height="403" alt="home tracker" loading="lazy"> 
              </picture>
            </div>
          </div>
          <div class="column column-content">
            <h1>Take a Quick Tour of Workstatus</h1>
            <p class="para_big">Witness how we make it possible for your teams to work faster, collaboration easier, and tracking smoother.</p>
            <div class="actionBtn"> 
             <a href="#" id="myBtn" class="primary_btn1">Request a demo</a> <a href="<?php echo $RegLink; ?>" class="primary_btn2">Sign Up</a> </div>
            
            </div>
        </div>
        <div class="partner_row">
          <div><i class="microsoft"></i></div>
          <div><i class="cisco"></i></div>
          <div><i class="ibm"></i></div>
          <div><i class="sap"></i></div>
          <div><i class="hp"></i></div>
          <div><i class="at"></i></div>
        </div>
      </div>
    </section>
    <section class="testimonial">
      <?php require_once 'common/testimonials2.php';?>
    </section>
    
    
    <section class="wsMobile">
      <?php require_once 'common/workstatus-device.php';?>
    </section>
    
    <section class="two-column-text-image">
      <div class="container">
        <div class="flex_row">
          <div class="column">
            <h3>Become a player of Aced Up Work Cultures</h3>
            <ul>
              <li><i class="fa fa-check" aria-hidden="true"></i>Unquestionable Time Tracking & Reporting</li>
              <li><i class="fa fa-check" aria-hidden="true"></i>Zero-stress monitoring</li>
              <li><i class="fa fa-check" aria-hidden="true"></i>GPS tracking </li>
              <li><i class="fa fa-check" aria-hidden="true"></i>Geofenced Jobsites</li>
            </ul>
          </div>
          <div class="column">
            <picture>
              <source type="image/webp" srcset="./assests/images/demo-2.webp" width="619" height="436">
              <source type="image/png" srcset="./assests/images/demo-2.png" width="619" height="436">
              <img src="./assests/images/demo-2.png" alt="notifications-attendence" width="619" height="436"> </picture>
          </div>
        </div>
      </div>
    </section>
    <?php require_once 'common/workstatus-journey.php';?>
    
    
    
  </main>
  <?php require_once 'common/footer.php';?>
  <!-- modal box html starts -->
  
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true" style="display:block;">
    <div class="modal-content text_center">
      <div id="modalClose">Close</div>
      <h3>Request a live demo of Workstatus</h3>
      <p>Get a full tour that's tailored to your business. From a 100% real human.</p>
      <!-- Form Wrapper -->
      <form name="request-form" id="requestForm" class="requestform" method="POST" action="" role="form">
        <div class="form-group">
          <input type="text" name="firstName" class="form-control" id="firstName" placeholder="First Name" />
        </div>
        <div class="form-group">
          <input type="text" name="lastName" class="form-control" id="lastName" placeholder="Last Name" />
        </div>
        <div class="form-group">
          <input type="tel" name="tel" class="form-control" id="tel" placeholder="Telephone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"/>
        </div>
        <div class="form-group">
          <input type="email" name="emailAddress" class="form-control" id="emailAddress" placeholder="Email Address" />
        </div>
        <div class="form-group">
          <input type="text" name="companyName" class="form-control" id="companyName" placeholder="Company Name" />
        </div>
        <div class="form-group">
          <label for="team-size">Team Size*</label>
          <select id="team-size" name="team-size">
            <option value="" disabled selected hidden>Select team size</option>
            <option value="1 - 10">1 - 10</option>
            <option value="10 - 30">10 - 30</option>
            <option value="30 - 100">30 - 100</option>
            <option value="100+">100+</option>
          </select>
        </div>
        <div class="form-group flex">
          <div class="col50">
            <label for="team-size">Demo Date*</label>
            <input type="text" name="date" placeholder="Date for Demo" onfocus="(this.type='date')" />
          </div>
          <div class="col50">
            <div class="dual2">
              <label for="team-size">Demo Time*</label>
              <input type="text" id="time" name="time"  min="09:00" max="18:00" placeholder="Select Time for Demo" onfocus="(this.type='time')"/>
              
            </div>
          </div>
        </div>
        <div class="form-group">
          <label for="time-zone">Time Zone</label>
          <select id="time-zone" name="time-zone">
            <option value="(GMT -12:00) Eniwetok, Kwajalein">(GMT -12:00) Eniwetok, Kwajalein</option>
            <option value="(GMT -11:00) Midway Island, Samoa">(GMT -11:00) Midway Island, Samoa</option>
            <option value="(GMT -10:00) Hawaii">(GMT -10:00) Hawaii</option>
            <option value="(GMT -9:30) Taiohae">(GMT -9:30) Taiohae</option>
            <option value="(GMT -9:00) Alaska">(GMT -9:00) Alaska</option>
            <option value="(GMT -8:00) Pacific Time (US & Canada)">(GMT -8:00) Pacific Time (US & Canada)</option>
            <option value="(GMT -7:00) Mountain Time (US & Canada)">(GMT -7:00) Mountain Time (US & Canada)</option>
            <option value="(GMT -6:00) Central Time (US & Canada), Mexico City">(GMT -6:00) Central Time (US & Canada), Mexico City</option>
            <option value="(GMT -5:00) Eastern Time (US & Canada), Bogota, Lima">(GMT -5:00) Eastern Time (US & Canada), Bogota, Lima</option>
            <option value="(GMT -4:30) Caracas">(GMT -4:30) Caracas</option>
            <option value="(GMT -4:00) Atlantic Time (Canada), Caracas, La Paz">(GMT -4:00) Atlantic Time (Canada), Caracas, La Paz</option>
            <option value="(GMT -3:30) Newfoundland">(GMT -3:30) Newfoundland</option>
            <option value="(GMT -3:00) Brazil, Buenos Aires, Georgetown">(GMT -3:00) Brazil, Buenos Aires, Georgetown</option>
            <option value="(GMT -2:00) Mid-Atlantic">(GMT -2:00) Mid-Atlantic</option>
            <option value="(GMT -1:00) Azores, Cape Verde Islands">(GMT -1:00) Azores, Cape Verde Islands</option>
            <option value="(GMT) Western Europe Time, London, Lisbon, Casablanca">(GMT) Western Europe Time, London, Lisbon, Casablanca</option>
            <option value="(GMT +1:00) Brussels, Copenhagen, Madrid, Paris">(GMT +1:00) Brussels, Copenhagen, Madrid, Paris</option>
            <option value="(GMT +2:00) Kaliningrad, South Africa">(GMT +2:00) Kaliningrad, South Africa</option>
            <option value="(GMT +3:00) Baghdad, Riyadh, Moscow, St. Petersburg">(GMT +3:00) Baghdad, Riyadh, Moscow, St. Petersburg</option>
            <option value="(GMT +3:30) Tehran">(GMT +3:30) Tehran</option>
            <option value="(GMT +4:00) Abu Dhabi, Muscat, Baku, Tbilisi">(GMT +4:00) Abu Dhabi, Muscat, Baku, Tbilisi</option>
            <option value="(GMT +4:30) Kabul">(GMT +4:30) Kabul</option>
            <option value="(GMT +5:00) Ekaterinburg, Islamabad, Karachi, Tashkent">(GMT +5:00) Ekaterinburg, Islamabad, Karachi, Tashkent</option>
            <option value="(GMT +5:30) Bombay, Calcutta, Madras, New Delhi" selected="selected">(GMT +5:30) Bombay, Calcutta, Madras, New Delhi</option>
            <option value="(GMT +5:45) Kathmandu, Pokhara">(GMT +5:45) Kathmandu, Pokhara</option>
            <option value="(GMT +6:00) Almaty, Dhaka, Colombo">(GMT +6:00) Almaty, Dhaka, Colombo</option>
            <option value="(GMT +6:30) Yangon, Mandalay">(GMT +6:30) Yangon, Mandalay</option>
            <option value="(GMT +7:00) Bangkok, Hanoi, Jakarta">(GMT +7:00) Bangkok, Hanoi, Jakarta</option>
            <option value="(GMT +8:00) Beijing, Perth, Singapore, Hong Kong">(GMT +8:00) Beijing, Perth, Singapore, Hong Kong</option>
            <option value="(GMT +8:45) Eucla">(GMT +8:45) Eucla</option>
            <option value="(GMT +9:00) Tokyo, Seoul, Osaka, Sapporo, Yakutsk">(GMT +9:00) Tokyo, Seoul, Osaka, Sapporo, Yakutsk</option>
            <option value="(GMT +9:30) Adelaide, Darwin">(GMT +9:30) Adelaide, Darwin</option>
            <option value="(GMT +10:00) Eastern Australia, Guam, Vladivostok">(GMT +10:00) Eastern Australia, Guam, Vladivostok</option>
            <option value="(GMT +10:30) Lord Howe Island">(GMT +10:30) Lord Howe Island</option>
            <option value="(GMT +11:00) Magadan, Solomon Islands, New Caledonia">(GMT +11:00) Magadan, Solomon Islands, New Caledonia</option>
            <option value="(GMT +11:30) Norfolk Island">(GMT +11:30) Norfolk Island</option>
            <option value="(GMT +12:00) Auckland, Wellington, Fiji, Kamchatka">(GMT +12:00) Auckland, Wellington, Fiji, Kamchatka</option>
            <option value="(GMT +12:45) Chatham Islands">(GMT +12:45) Chatham Islands</option>
            <option value="(GMT +13:00) Apia, Nukualofa">(GMT +13:00) Apia, Nukualofa</option>
            <option value="(GMT +14:00) Line Islands, Tokelau">(GMT +14:00) Line Islands, Tokelau</option>
          </select>
        </div>
        <div class="form-button-set">
          <button type="submit" class="primary_btn" name="send_request">Request Demo Now</button>
        </div>
      </form>
      <!-- Form Wrapper --> 
    </div>
  </div>
  <!-- modal box html ends --> 
</div>
<script src="assests/js/glider.min.js"></script> 
<script type="text/javascript" src="assests/js/script.js"></script> 
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script> 
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script> 
<script>
  var modal   = document.getElementById("myModal");
  var btn     = document.getElementById("myBtn");
  var btnClose     = document.getElementById("modalClose");
  btn.onclick = function(){
	  modal.style.display = "block";
  }
  window.onclick = function(event) {
	  if (event.target == modal) {
		  modal.style.display = "none";
	  }
  }
  btnClose.onclick = function(){
	  modal.style.display = "none";
  }
  
  $.validator.addMethod("maxDate", function(value, element) {
  var curDate = new Date("<?php echo date( 'm/d/Y', strtotime("+90 day") ) ?>");
  var inputDate = new Date(value);
  if (inputDate < curDate)
  return true;
  return false;
  }, "Date must be less then or equalt to <?php echo date( 'd/m/Y', strtotime("+90 day") ) ?>");

  $.validator.addMethod("minDate", function(value, element) {
  var curDate = new Date("<?php echo date( 'm/d/Y', strtotime("+1 day") ); ?>");
  var inputDate = new Date(value);
  if(inputDate >= curDate)
  return true;
  return false;
  }, "Date must be greater then or equalt to <?php echo date( 'd/m/Y', strtotime("+1 day") ); ?>");

  $(function(){
  $('form[name="request-form"]').validate({
    rules: {
    firstName: 'required',
    lastName: 'required',
    'team-size': 'required',
    'time-zone': 'required',
    emailAddress: {
      required: true,
      email: true
    },
    companyName: {
      required: true,
      minlength: 6
    },
    tel: {
      required: true,
      minlength: 10
    },
    date: {
      required: true,
      maxDate:true,
      minDate:true
    },
    time: {
      required: true
    }
    },
    messages: {
    firstName: 'Please enter your Name',
    emailAddress: 'Please enter a valid Email Address',
    companyName: {
      required: 'Please enter a Company Name',
      minlength: 'Your company Name must consist of at least 6 characters'
    },
    tel: {
      required: 'Please provide a tel',
      minlength: 'Your tel must be at least 10 characters long'
    },
    date: {
      required: 'Please provide a date'
    },
    time: {
      required: 'Please provide a time'
    },
    'team-size': {
      required: 'Please provide Team size'
    },
    'team-zone': {
      required: 'Please provide Team Zone'
    }
    },
    submitHandler: function(form) {
      demoFormHandler( form );                    
      return false;
    },
    errorElement: 'em',
    errorPlacement: function (error, element) {
    error.addClass('invalid-feedback');

    if (element.prop('type') === 'checkbox') {
      error.insertAfter( element.next('label'));
    } else {
      error.insertAfter(element);
    }
    },
    highlight: function (element, errorClass, validClass) {
    $(element).addClass('is-invalid').removeClass('is-valid');
    },
    unhighlight: function (element, errorClass, validClass) {
    $(element).addClass('is-valid').removeClass('is-invalid');
    }
  });
  });

  function demoFormHandler( form ){
	  $.ajax({
		  type:"POST",
		  url:"<?php echo SITE_URL; ?>sendmail.php",
		  data: $(form).serialize(),
		  success:function(response){
			  if( response == "true" ){
				  window.location.replace("<?php echo SITE_URL; ?>thanks");
			  }else{
				  alert("Error. Please try again");
			  }
		  }
	  });
  }
</script>

</body>
</html>
<?php 
//echo '<pre>'; print_r($_POST); die;
require_once 'common/inc/config.inc.php';
if( !isset( $_POST['is-submitted'] ) ){
   header('Location: https://www.workstatus.io/');
   exit;
}

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

function wsGetCountryByCode( $code ){
    $countries_list = array( "AF" => "Afghanistan", "AX" => "Aland Islands", "AL" => "Albania", "DZ" => "Algeria", "AS" => "American Samoa", "AD" => "Andorra", "AO" => "Angola", "AI" => "Anguilla", "AQ" => "Antarctica", "AG" => "Antigua and Barbuda", "AR" => "Argentina", "AM" => "Armenia", "AW" => "Aruba", "AU" => "Australia", "AT" => "Austria", "AZ" => "Azerbaijan", "BS" => "Bahamas", "BH" => "Bahrain", "BD" => "Bangladesh", "BB" => "Barbados", "BY" => "Belarus", "BE" => "Belgium", "BZ" => "Belize", "BJ" => "Benin", "BM" => "Bermuda", "BT" => "Bhutan", "BO" => "Bolivia", "BQ" => "Bonaire, Sint Eustatius and Saba", "BA" => "Bosnia and Herzegovina", "BW" => "Botswana", "BV" => "Bouvet Island", "BR" => "Brazil", "IO" => "British Indian Ocean Territory", "BN" => "Brunei Darussalam", "BG" => "Bulgaria", "BF" => "Burkina Faso", "BI" => "Burundi", "KH" => "Cambodia", "CM" => "Cameroon", "CA" => "Canada", "CV" => "Cape Verde", "KY" => "Cayman Islands", "CF" => "Central African Republic", "TD" => "Chad", "CL" => "Chile", "CN" => "China", "CX" => "Christmas Island", "CC" => "Cocos (Keeling) Islands", "CO" => "Colombia", "KM" => "Comoros", "CG" => "Congo", "CD" => "Congo, the Democratic Republic of the", "CK" => "Cook Islands", "CR" => "Costa Rica", "CI" => "Cote D'Ivoire", "HR" => "Croatia", "CU" => "Cuba", "CW" => "Curacao", "CY" => "Cyprus", "CZ" => "Czech Republic", "DK" => "Denmark", "DJ" => "Djibouti", "DM" => "Dominica", "DO" => "Dominican Republic", "EC" => "Ecuador", "EG" => "Egypt", "SV" => "El Salvador", "GQ" => "Equatorial Guinea", "ER" => "Eritrea", "EE" => "Estonia", "ET" => "Ethiopia", "FK" => "Falkland Islands (Malvinas)", "FO" => "Faroe Islands", "FJ" => "Fiji", "FI" => "Finland", "FR" => "France", "GF" => "French Guiana", "PF" => "French Polynesia", "TF" => "French Southern Territories", "GA" => "Gabon", "GM" => "Gambia", "GE" => "Georgia", "DE" => "Germany", "GH" => "Ghana", "GI" => "Gibraltar", "GR" => "Greece", "GL" => "Greenland", "GD" => "Grenada", "GP" => "Guadeloupe", "GU" => "Guam", "GT" => "Guatemala", "GG" => "Guernsey", "GN" => "Guinea", "GW" => "Guinea-Bissau", "GY" => "Guyana", "HT" => "Haiti", "HM" => "Heard Island and Mcdonald Islands", "VA" => "Holy See (Vatican City State)", "HN" => "Honduras", "HK" => "Hong Kong", "HU" => "Hungary", "IS" => "Iceland", "IN" => "India", "ID" => "Indonesia", "IR" => "Iran, Islamic Republic of", "IQ" => "Iraq", "IE" => "Ireland", "IM" => "Isle of Man", "IL" => "Israel", "IT" => "Italy", "JM" => "Jamaica", "JP" => "Japan", "JE" => "Jersey", "JO" => "Jordan", "KZ" => "Kazakhstan", "KE" => "Kenya", "KI" => "Kiribati", "KP" => "Korea, Democratic People's Republic of", "KR" => "Korea, Republic of", "XK" => "Kosovo", "KW" => "Kuwait", "KG" => "Kyrgyzstan", "LA" => "Lao People's Democratic Republic", "LV" => "Latvia", "LB" => "Lebanon", "LS" => "Lesotho", "LR" => "Liberia", "LY" => "Libyan Arab Jamahiriya", "LI" => "Liechtenstein", "LT" => "Lithuania", "LU" => "Luxembourg", "MO" => "Macao", "MK" => "Macedonia, the Former Yugoslav Republic of", "MG" => "Madagascar", "MW" => "Malawi", "MY" => "Malaysia", "MV" => "Maldives", "ML" => "Mali", "MT" => "Malta", "MH" => "Marshall Islands", "MQ" => "Martinique", "MR" => "Mauritania", "MU" => "Mauritius", "YT" => "Mayotte", "MX" => "Mexico", "FM" => "Micronesia, Federated States of", "MD" => "Moldova, Republic of", "MC" => "Monaco", "MN" => "Mongolia", "ME" => "Montenegro", "MS" => "Montserrat", "MA" => "Morocco", "MZ" => "Mozambique", "MM" => "Myanmar", "NA" => "Namibia", "NR" => "Nauru", "NP" => "Nepal", "NL" => "Netherlands", "AN" => "Netherlands Antilles", "NC" => "New Caledonia", "NZ" => "New Zealand", "NI" => "Nicaragua", "NE" => "Niger", "NG" => "Nigeria", "NU" => "Niue", "NF" => "Norfolk Island", "MP" => "Northern Mariana Islands", "NO" => "Norway", "OM" => "Oman", "PK" => "Pakistan", "PW" => "Palau", "PS" => "Palestinian Territory, Occupied", "PA" => "Panama", "PG" => "Papua New Guinea", "PY" => "Paraguay", "PE" => "Peru", "PH" => "Philippines", "PN" => "Pitcairn", "PL" => "Poland", "PT" => "Portugal", "PR" => "Puerto Rico", "QA" => "Qatar", "RE" => "Reunion", "RO" => "Romania", "RU" => "Russian Federation", "RW" => "Rwanda", "BL" => "Saint Barthelemy", "SH" => "Saint Helena", "KN" => "Saint Kitts and Nevis", "LC" => "Saint Lucia", "MF" => "Saint Martin", "PM" => "Saint Pierre and Miquelon", "VC" => "Saint Vincent and the Grenadines", "WS" => "Samoa", "SM" => "San Marino", "ST" => "Sao Tome and Principe", "SA" => "Saudi Arabia", "SN" => "Senegal", "RS" => "Serbia", "CS" => "Serbia and Montenegro", "SC" => "Seychelles", "SL" => "Sierra Leone", "SG" => "Singapore", "SX" => "Sint Maarten", "SK" => "Slovakia", "SI" => "Slovenia", "SB" => "Solomon Islands", "SO" => "Somalia", "ZA" => "South Africa", "GS" => "South Georgia and the South Sandwich Islands", "SS" => "South Sudan", "ES" => "Spain", "LK" => "Sri Lanka", "SD" => "Sudan", "SR" => "Suriname", "SJ" => "Svalbard and Jan Mayen", "SZ" => "Swaziland", "SE" => "Sweden", "CH" => "Switzerland", "SY" => "Syrian Arab Republic", "TW" => "Taiwan, Province of China", "TJ" => "Tajikistan", "TZ" => "Tanzania, United Republic of", "TH" => "Thailand", "TL" => "Timor-Leste", "TG" => "Togo", "TK" => "Tokelau", "TO" => "Tonga", "TT" => "Trinidad and Tobago", "TN" => "Tunisia", "TR" => "Turkey", "TM" => "Turkmenistan", "TC" => "Turks and Caicos Islands", "TV" => "Tuvalu", "UG" => "Uganda", "UA" => "Ukraine", "AE" => "United Arab Emirates", "GB" => "United Kingdom", "US" => "United States", "UM" => "United States Minor Outlying Islands", "UY" => "Uruguay", "UZ" => "Uzbekistan", "VU" => "Vanuatu", "VE" => "Venezuela", "VN" => "Viet Nam", "VG" => "Virgin Islands, British", "VI" => "Virgin Islands, U.s.", "WF" => "Wallis and Futuna", "EH" => "Western Sahara", "YE" => "Yemen", "ZM" => "Zambia", "ZW" => "Zimbabwe" );
    $code = strtoupper($code);
    return ($countries_list[$code]) ? $countries_list[$code] : "N/A";
}

function smtpEmailFunction( $emailTo, $subject, $body, $type, $userEmail, $emailCC = [], $emailBCC = [], $attachments = [], 
    $cname = null ){
   $mail = new PHPMailer(true);
   $smtp = new SMTP;
    try{
        if (!$smtp->connect('smtp.gmail.com', 587)) {
            print_r($smtp->getError());
            throw new Exception('Connect failed!');
        }
        
        $mail->isSMTP();
        $mail->Host         = "smtp.gmail.com"; // SMTP server
        $mail->SMTPSecure   = 'ssl';
        $mail->Port         = 465;
        $mail->SMTPAuth     = true;
        $mail->Username     = 'do-not-reply@workstatus.io';
        $mail->Password     = 'avchvvlnqmtihxbp'; //zskxyarbhduvicwf

        if( $type == "lead" ){
            $mail->setFrom( $userEmail, $cname );
        }else{
            $mail->setFrom( "donotreply@workstatus.io", 'Workstatus');
        }
        $mail->addAddress($emailTo);
        if( $emailCC ){
            foreach( $emailCC as $emailC ){
                $mail->addCC( $emailC );
            }
        }
        if( $emailBCC ){
            foreach( $emailBCC as $emailBC ){
                $mail->addBCC( $emailBC );        
            }
        }
        if( $type == "lead" ){
            $mail->addReplyTo( $userEmail );
        }else{
            $mail->addReplyTo( 'donotreply@workstatus.io' );
        }
        
        if( $attachments ){
            foreach( $attachments as $attachment ){
                $mail->addAttachment( $attachment );
            }
        }

        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body    = $body;    
        $mail->send();
        return true;
    }catch(Exception $e){
        return false;
    }
}
$fname          = ( isset( $_POST['fname'] ) && !empty( $_POST['fname'] ) ) ? $_POST['fname'] : '';
$lname          = ( isset( $_POST['lname'] ) && !empty( $_POST['lname'] ) ) ? $_POST['lname'] : '';
$name           = $fname." ".$lname;
$email          = ( isset( $_POST['email'] ) && !empty( $_POST['email'] ) ) ? $_POST['email'] : '';
$pcode          = ( isset( $_POST['cprefix'] ) && !empty( $_POST['cprefix'] ) ) ? $_POST['cprefix'] : '';

$phone          = ( isset( $_POST['phone'] ) && !empty( $_POST['phone'] ) ) ? $_POST['phone'] : '';
$company        = ( isset( $_POST['company'] ) && !empty( $_POST['company'] ) ) ? $_POST['company'] : '';
$temSize        = ( isset( $_POST['team-size'] ) && !empty( $_POST['team-size'] ) ) ? $_POST['team-size'] : '';
$pageurl        = ( isset( $_POST['pageurl'] ) && !empty( $_POST['pageurl'] ) ) ? $_POST['pageurl'] : '';
$tracking_ip    = getUserIP();
$referalurl     = ( isset( $_POST['referalurl'] ) && !empty( $_POST['referalurl'] ) ) ? $_POST['referalurl'] : '';

$phoneNo        = $pcode.$phone;
//$phoneNo        = str_replace("+","",$phoneNo);
$requirement    = ( isset( $_POST['requirement'] ) && !empty( $_POST['requirement'] ) ) ? $_POST['requirement'] : '';

$country        = (isset($_POST['user-country']) && !empty($_POST['user-country'])) ? wsGetCountryByCode($_POST['user-country']) : '';

$utm_src = ( isset( $_POST['utm_source'] ) && !empty( $_POST['utm_source'] ) ) ? $_POST['utm_source'] : '';
$utm_mdm = ( isset( $_POST['utm_medium'] ) && !empty( $_POST['utm_medium'] ) ) ? $_POST['utm_medium'] : '';
$utm_cmp = ( isset( $_POST['utm_campaign'] ) && !empty( $_POST['utm_campaign'] ) ) ? $_POST['utm_campaign'] : '';

$varLeadSource = 'Website';
$date       = strtotime($_POST['date']);
$callDate   = date('F j, Y', $date);
$apiDate    = date('Y-m-d', $date);
$body = "";
$varDeliminator = "<br>";
$body = "";
$body .= "Name : ".$fname." ".$lname.$varDeliminator;
$body .= "Email : ".$email.$varDeliminator;
$body .= "Contact No. : ".$phoneNo.$varDeliminator;
$body .= "Country : ".$country.$varDeliminator;
$body .= "Company Name. : ".$company.$varDeliminator;
$body .= "Team size : ".$temSize.$varDeliminator;
$body .= "Requirement : ".$requirement.$varDeliminator;

$body .= "IP Address : ".$tracking_ip.$varDeliminator;
$body .= "Page Url : ".$pageurl.$varDeliminator;
$body .= "Lead Source : ".$varLeadSource.$varDeliminator;
$body .= "Referer Url : ".$referalurl.$varDeliminator;

$body .= "UTM Source : ".$utm_src.$varDeliminator;
$body .= "UTM Medium : ".$utm_mdm.$varDeliminator;
$body .= "UTM Campaign : ".$utm_cmp.$varDeliminator;

$uname     = $fname." ".$lastName;
$bccEmails = ['nitin.baluni@mail.vinove.com'];
//$bccEmails = [];

/*Spam check here : Starts*/
if( strlen($phoneNo) > 20 ){
/*
smtpEmailFunction("nitin.baluni@mail.vinove.com", "Demo request - Workstatus[SPAM - Phone]", $body, "lead", $email, [],[],[], 
$uname);
*/
header('location:thanks');
die;
}

if( $temSize == "" ){
/*
smtpEmailFunction("nitin.baluni@mail.vinove.com", "Demo request - Workstatus[SPAM - TeamSize]", $body, "lead", $email, [],[],[], 
$uname);
*/
header('location:thanks');
die;
}
    /*Spam check here : END*/
    $leadStatus     = "Not Contacted";
    $autoEmailBody  = "Dear ".$name.",<br><br>
    Greetings for the day!<br><br>
    Thank you for showing your interest in Workstatus! Our workforce management platform is designed to simplify and streamline the way you manage your team.<br><br>
    Whether you are a freelancer, small business owner, or large enterprise, Workstatus is designed to provide you with the flexibility and functionality you need to run your operations more efficiently.<br><br>
    If not done yet - <a href='https://calendly.com/workstatus/product-demo/'>Schedule a Demo</a> at your convenience!<br><br>
    Explore more with our <a href='https://support.workstatus.io/en/'>Product Guide</a>.<br><br>
    If you have any questions about how to get started or how to make the most of our platform, please don't hesitate to reach out to our support team. Please find the contact details below:<br><br>
    Name: Prachi Kala<br>
    Email: prachi@workstatus.io<br>
    Contact: +918595620285<br><br>

    We look forward to helping you achieve your goals and grow your business.<br><br>    
    Best Regards,<br>
    Team Workstatus";
    if(
    smtpEmailFunction( $email, "Workstatus - We've received your request", $autoEmailBody, "auto", $email, [], [], [] )
    ){
    $leadStatus = "Attempted to Contact";
    }

    smtpEmailFunction("hello@workstatus.io", "Demo request - Workstatus", $body, "lead",$email, [], $bccEmails,[], 
    $uname);

    $_POST['user-country'] = $country;
    getzoholeads( $_POST, $leadStatus );
    /* Send Email End */
   $dataID = 0;
   $iLink = 'https://calendly.com/workstatus/product-demo';

   $apiRequest = array(
    "first_name"     => $fname,
    "email"          => $email,
    "contact_no"     => $phoneNo,
    "company_name"   => $company,
    "team_size"      => $temSize,
    "demo_date"      => "",
    "demo_time"      => "",
    "time_zone"      => "",
    "ip_address"     => $tracking_ip,
    "source"         => $pageurl,
    "utm_source"     => $utm_src,
    "utm_campaign"   => $utm_cmp,
    "utm_medium"     => $utm_mdm,
    "referrer_url"   => $referalurl
   );
   if( $lname ){
   $apiRequest['last_name'] = $lname;
   }

   $ch = curl_init();
   curl_setopt($ch, CURLOPT_URL, "https://superadmin.workstatus.io/api/v1/getDemoRequest");
   curl_setopt($ch, CURLOPT_POST, 1);
   curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query( $apiRequest ));
   curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
   $server_output = curl_exec($ch);
   $output        = json_decode($server_output);
   if( isset( $output->code ) && ($output->code == 200) ){
      $dataID = ( isset( $output->id ) && !empty( $output->id ) ) ?  $output->id : 0;
   }
   curl_close($ch);
   
   $varinput = 1;
    if( $temSize == "Self-employed" ){
        $varinput = 1; 
    }elseif($temSize == "1-10"){
        $varinput = 2;    
    }elseif($temSize == "11-50"){
        $varinput = 3;    
    }elseif($temSize == "51-200"){
        $varinput = 4;    
    }elseif($temSize == "201-500"){
        $varinput = 5;    
    }elseif($temSize == "501-1000"){
        $varinput = 6;    
    }elseif($temSize == "1001-5000"){
        $varinput = 7;    
    }elseif($temSize == "5001-10000"){
        $varinput = 8;    
    }elseif($temSize == "10000+"){
        $varinput = 9;    
    }

   $phoneNo        = str_replace("+","",$phoneNo);
   $iLink = $iLink."?name=".$name."&email=".$email."&a1=".$phoneNo."&a2=".$company."&a3=".$varinput."&a4=".$requirement."&utm_source=".$pageurl."!!".$tracking_ip;
    if( $dataID !== 0 ){
      $iLink = $iLink."!!".$dataID;
    }
    if( isset( $_SESSION['referer'] ) ){
    unset( $_SESSION['referer'] );
    }

    if( isset( $_SESSION['_utmsource'] ) ){
    unset( $_SESSION['_utmsource'] );
    }

    if( isset( $_SESSION['_utmmedium'] ) ){
    unset( $_SESSION['_utmmedium'] );
    }
    
    if( isset( $_SESSION['_utmcampaign'] ) ){
    unset( $_SESSION['_utmcampaign'] );
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex, nofollow">
    <link rel="alternate" href="https://www.workstatus.io/" hreflang="en-us" />
    <link rel="shortcut icon" href="https://www.workstatus.io/wp-content/themes/workstatus/assests/images/favicon.png" type="image/x-icon">
    <link type="text/css" href="assests/css/index.css" rel="preload stylesheet" as="style" />
  </head>
  <body>
<section class="thank-section">
<div class="container">
<h1>Choose a Date & Time</h1>
<p>Please schedule the demo as per your availability.</p>
</div>
</section>
<div class="calendly-inline-widget" data-url="<?php echo $iLink; ?>" style="min-width:320px;height:630px;"></div>
<script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>
</body>
</html>

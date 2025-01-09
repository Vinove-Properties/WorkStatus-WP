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

function smtpEmailFunction( $emailTo, $subject, $body, $type, $userEmail, $emailCC = [], $emailBCC = [], $attachments = [], $cname = null ){
   $mail = new PHPMailer(true);
   $smtp = new SMTP;
    try{
        if (!$smtp->connect('smtp.gmail.com', 587)) {
            print_r($smtp->getError());
            throw new Exception('Connect failed!');
        }  
        $mail->isSMTP();
        $mail->Host         = "legolas.vinove.com"; // SMTP server
        $mail->SMTPSecure   = 'tls';
        $mail->Port         = 25;
        $mail->SMTPAuth     = true;
        $mail->Username     = 'hello@workstatus.io';
        $mail->Password     = 'FR0#smE3Xt5~';

        if( $type == "lead" ){
            $mail->setFrom( $userEmail, $cname );
        }else{
            $mail->setFrom( "hello@workstatus.io", 'Workstatus');
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
            $mail->addReplyTo( 'hello@workstatus.io' );
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
    }catch(Exception $e) {
        return false;
    }
}
$fname          = ( isset( $_POST['fname'] ) && !empty( $_POST['fname'] ) ) ? $_POST['fname'] : '';
$lname          = ( isset( $_POST['lname'] ) && !empty( $_POST['lname'] ) ) ? $_POST['lname'] : '';
$name           = $fname." ".$lname;
$email          = ( isset( $_POST['email'] ) && !empty( $_POST['email'] ) ) ? $_POST['email'] : '';
$pcode          = ( isset( $_POST['countrycode'] ) && !empty( $_POST['countrycode'] ) ) ? $_POST['countrycode'] : '';
$phone          = ( isset( $_POST['phone'] ) && !empty( $_POST['phone'] ) ) ? $_POST['phone'] : '';
$company        = ( isset( $_POST['company'] ) && !empty( $_POST['company'] ) ) ? $_POST['company'] : '';
$temSize        = ( isset( $_POST['team-size'] ) && !empty( $_POST['team-size'] ) ) ? $_POST['team-size'] : '';
$pageurl        = ( isset( $_POST['pageurl'] ) && !empty( $_POST['pageurl'] ) ) ? $_POST['pageurl'] : '';
$tracking_ip    = getUserIP();
$referalurl     = ( isset( $_POST['referalurl'] ) && !empty( $_POST['referalurl'] ) ) ? $_POST['referalurl'] : '';
$phoneNo        = $pcode.$phone;
$phoneNo        = str_replace("+","",$phoneNo);
$requirement    = ( isset( $_POST['requirement'] ) && !empty( $_POST['requirement'] ) ) ? $_POST['requirement'] : '';


$utm_src = ( isset( $_POST['utm_source'] ) && !empty( $_POST['utm_source'] ) ) ? $_POST['utm_source'] : '';
$utm_mdm = ( isset( $_POST['utm_medium'] ) && !empty( $_POST['utm_medium'] ) ) ? $_POST['utm_medium'] : '';
$utm_cmp = ( isset( $_POST['utm_campaign'] ) && !empty( $_POST['utm_campaign'] ) ) ? $_POST['utm_campaign'] : '';

$varLeadSource = 'Website';
/* Send Email Start */
$date       = strtotime($_POST['date']);
$callDate   = date('F j, Y', $date);
$apiDate    = date('Y-m-d', $date);
$body = "";
$varDeliminator = "<br>";
$body = "";
$body .= "Name : ".$fname." ".$lname.$varDeliminator;
$body .= "Email : ".$email.$varDeliminator;
$body .= "Contact No. : ".$phoneNo.$varDeliminator;
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
//echo $body; die;

smtpEmailFunction( "hello@workstatus.io", "Demo request - Workstatus", $body, "lead",$email, [],$bccEmails,[], 
$uname );

getzoholeads( $_POST ); 
/* Send Email End */
   $dataID = 0;
   $iLink = 'https://calendly.com/workstatus/product-demo';

   $apiRequest = array(
   "first_name"     => $fname,
   "email"          => $email,
   "contact_no"     => $phoneNo,
   "company_name"   => "",
   "team_size"      => "",
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


   $iLink = $iLink."?name=".$name."&email=".$email."&a1=".$phoneNo."&a2=".$company."&a3=".$varinput."&utm_source=".$pageurl."!!".$tracking_ip;
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
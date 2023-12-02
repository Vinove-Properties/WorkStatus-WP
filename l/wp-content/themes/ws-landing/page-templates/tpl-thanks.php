<?php 
/*
Template Name: Thank You Template
*/
if( !isset( $_POST['is-submitted'] ) ){
   wp_redirect( 'https://www.workstatus.io/', 301 ); 
   exit;
} 

if( isset( $_POST['email'] ) && ($_POST['email'] == "sample@email.tst" ) ){
    wp_redirect( 'https://www.workstatus.io/thanks', 301 ); 
    exit;
}

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$rootDir = (isset( $_SERVER['DOCUMENT_ROOT'] ) && !empty( $_SERVER['DOCUMENT_ROOT'] )) ? $_SERVER['DOCUMENT_ROOT'] : '/home/workstatus-io/public_html';

if( isset( $_SERVER['HTTP_HOST'] ) && ($_SERVER['HTTP_HOST'] == "localhost") ){
$rootDir = "/var/www/html/workstatus-wp";    
}

require $rootDir.'/common/inc/config.inc.php';

function smtpEmailFunction( $emailTo, $subject, $body, $type, $userEmail, $emailCC = [], $emailBCC = [], $attachments = [], $cname = null ){
   $mail = new PHPMailer(true);
   $smtp = new SMTP;

    try{
        if( !$smtp->connect('smtp.gmail.com', 587) ) {
            print_r($smtp->getError());
            throw new Exception('Connect failed!');
        }  

        $mail->isSMTP();
        $mail->Host         = "mail.workstatus.io"; // SMTP server
        $mail->SMTPSecure   = 'SSL';
        $mail->Port         = 587;
        $mail->SMTPAuth     = true;
        $mail->Username     = 'donotreply@workstatus.io';
        $mail->Password     = 'bbmMBq5RMQ3-';

        if( $type == "lead" ){
            $mail->setFrom( $userEmail, $cname );
        }else{
            $mail->setFrom( "no-reply@workstatus.io", 'Workstatus');
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
            $mail->addReplyTo( 'no-reply@workstatus.io' );
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
        //echo '<pre>'; print_r($e); die;
        return false;
    }
}

$nameField      = ( isset( $_POST['fname'] ) && !empty( $_POST['fname'] ) ) ? $_POST['fname'] : '';

$fname          = ( isset( $_POST['fname'] ) && !empty( $_POST['fname'] ) ) ? $_POST['fname'] : '';
$lname          = ( isset( $_POST['lname'] ) && !empty( $_POST['lname'] ) ) ? $_POST['lname'] : '';
if( !isset( $_POST['lname'] ) ){
    $expName    = explode(' ',$fname, 2);
    $fname      = ( isset($expName[0]) && !empty($expName[0]) ) ? $expName[0] : "NA";
    $lname      = ( isset($expName[1]) && !empty($expName[1]) ) ? $expName[1] : "NA";
    $_POST['lname'] = ( isset($expName[1]) && !empty($expName[1]) ) ? $expName[1] : "NA";
}
$name           = $fname." ".$lname;
$email          = ( isset( $_POST['email'] ) && !empty( $_POST['email'] ) ) ? $_POST['email'] : '';
$pcode          = ( isset( $_POST['cprefix'] ) && !empty( $_POST['cprefix'] ) ) ? $_POST['cprefix'] : '';

$phone          = ( isset( $_POST['phone'] ) && !empty( $_POST['phone'] ) ) ? $_POST['phone'] : '';
$company        = ( isset( $_POST['company'] ) && !empty( $_POST['company'] ) ) ? $_POST['company'] : '';
$temSize        = ( isset( $_POST['team-size'] ) && !empty( $_POST['team-size'] ) ) ? $_POST['team-size'] : '';
$pageurl        = ( isset( $_POST['pageurl'] ) && !empty( $_POST['pageurl'] ) ) ? $_POST['pageurl'] : '';
$tracking_ip    = getUserIP();
$referalurl     = ( isset( $_POST['referalurl'] ) && !empty( $_POST['referalurl'] ) ) ? $_POST['referalurl'] : '';
$MailphoneNo    = $pcode." ".$phone;
$phoneNo        = $pcode.$phone;

$utm_src = ( isset( $_POST['utm_source'] ) && !empty( $_POST['utm_source'] ) ) ? $_POST['utm_source'] : '';
$utm_mdm = ( isset( $_POST['utm_medium'] ) && !empty( $_POST['utm_medium'] ) ) ? $_POST['utm_medium'] : '';
$utm_cmp = ( isset( $_POST['utm_campaign'] ) && !empty( $_POST['utm_campaign'] ) ) ? $_POST['utm_campaign'] : '';



$varLeadSource = 'Landing Page';

/* Send Email Start */
$date       = strtotime($_POST['date']);
$callDate   = date('F j, Y', $date);
$apiDate    = date('Y-m-d', $date);
$body = "";
$varDeliminator = "<br>";
$body = "";
$body .= "Name : ".$fname." ".$lname.$varDeliminator;
$body .= "Email : ".$email.$varDeliminator;
$body .= "Contact No. : ".$MailphoneNo.$varDeliminator;

$body .= "Company Name. : ".$company.$varDeliminator;
if( $temSize ){
$body .= "Team size : ".$temSize.$varDeliminator;    
}

$body .= "IP Address : ".$tracking_ip.$varDeliminator;
$body .= "Page Url : ".$pageurl.$varDeliminator;
$body .= "Lead Source : ".$varLeadSource.$varDeliminator;
if( $referalurl ){
$body .= "Referer Url : ".$referalurl.$varDeliminator;    
}

$body .= "UTM Source : ".$utm_src.$varDeliminator;
$body .= "UTM Medium : ".$utm_mdm.$varDeliminator;
$body .= "UTM Campaign : ".$utm_cmp.$varDeliminator;

$uname      = $fname." ".$lname;
$bccEmails  = ['nitin.baluni@mail.vinove.com'];

//echo $body; echo '<pre>'; print_r( $_POST ); die;

$leadStatus     = "Not Contacted";
$autoEmailBody  = "Dear ".$nameField.",<br><br>
Greetings for the day!<br><br>
We're thrilled to have caught your interest in our workforce management tool! - our workforce management platform designed to simplify and streamline the way you manage your team.<br><br>
As a new user, you now have access to an array of tools and features that can help you better track time, monitor projects, and manage your team's workflow - all in one centralized location.<br><br>
Whether you are a freelancer, small business owner, or large enterprise, Workstatus.io is designed to provide you with the flexibility and functionality you need to run your operations more efficiently.<br><br>
If you have any questions about how to get started or how to make the most of our platform, please don't hesitate to reach out to our support team. Please find the contact details as below;<br><br>
Name: Prachi Kala<br>
Email: prachi@workstatus.io<br>
Contact: +918595620285<br><br>

Product Guide - https://support.workstatus.io/en/<br><br>
We look forward to helping you achieve your goals and grow your business.<br><br>
Best Regards,<br>
Team Workstatus";
//echo $autoEmailBody; die;
if(
smtpEmailFunction( $email, "Workstatus - We've received your request", $autoEmailBody, "auto", $email, [], [], [] )
){
$leadStatus = "Attempted to Contact";
}

smtpEmailFunction( "hello@workstatus.io", "Demo request - Workstatus", $body, "lead",$email, [],$bccEmails,[],
$nameField );

getzoholeads( $_POST, $leadStatus );
if( isset( $_SESSION['referer'] ) ){
    @session_start();
    unset( $_SESSION['referer'] );
}
/* Send Email End */
   $dataID = 0;
   $iLink = 'https://calendly.com/workstatus/product-demo';

   $apiRequest = array(
   "first_name"    => $fname,
   "email"         => $email,
   "contact_no"    => $MailphoneNo,
   "company_name"  => "",
   "team_size"     => "",
   "demo_date"     => "",
   "demo_time"     => "",
   "time_zone"     => "",
   "ip_address"    => $tracking_ip,
   "source"        => $pageurl,
   "utm_source"    => $utm_src,
   "utm_campaign"  => $utm_cmp,
   "utm_medium"    => $utm_mdm,
   "referrer_url" => $referalurl
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
   $iLink = $iLink."?name=".$name."&email=".$email."&a1=".$phoneNo."&a2=".$company."&a3=".$varinput."&utm_source=".$pageurl."!!".$tracking_ip;
   if( $dataID !== 0 ){
      $iLink = $iLink."!!".$dataID;
   }
get_header(); ?>
<section class="thank-section">
  <div class="container">
      <h1>Please Schedule a Demo as Per Your Availability</h1>
</div>
</section>
<div class="calendly-inline-widget" data-url="<?php echo $iLink; ?>" style="min-width:320px;height:630px;"></div>
<script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>
<?php get_footer(); ?>
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

function getClientIP(){
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
       $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}

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
        $mail->Password     = 'VTM76GEe+OTC';

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
        //echo 'Message has been sent'; die();
    }catch(Exception $e) {
        return false;
       //echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}"; die();
    }
}
 
if( isset( $_POST['send_request'] ) ){ 
    //print_r( $_POST ); die("OKAY");
    $date       = strtotime($_POST['date']);
    $callDate   = date('F j, Y', $date);
    $apiDate    = date('Y-m-d', $date);
    
    $amPm       = " PM";
    $time       = explode(":",$_POST['time']);
    if( isset($time[0]) && ($time[0] < 12) ){
    $amPm       = " AM";
    }
	$body = "";
    $varDeliminator = "<br>";
    $ipAddress  = getClientIP();
    $lastName   = isset( $_POST['lastName'] ) ? $_POST['lastName'] : '';
    $body = "";
    $body .= "Name : ".$_POST['firstName']." ".$lastName.$varDeliminator;
    $body .= "Email : ".$_POST['emailAddress'].$varDeliminator;
    $body .= "Contact No. : ".$_POST['tel'].$varDeliminator;
    $body .= "Company Name : ".$_POST['companyName'].$varDeliminator;
    $body .= "Date : ".$callDate.$varDeliminator;
    $body .= "Time : ".$_POST['time'].$amPm.$varDeliminator;
    $body .= "Time Zone: ".$_POST['time-zone'].$varDeliminator;
    $body .= "Team size : ".$_POST['team-size'].$varDeliminator;
    $body .= "IP Address : ".$ipAddress.$varDeliminator;
    
    
    $uname      = $_POST['firstName']." ".$lastName;
    $bccEmails = ['nitin.baluni@mail.vinove.com'];
    
    if( smtpEmailFunction("hello@workstatus.io", "Demo request - Workstatus", $body, "lead", $_POST['emailAddress'], [],$bccEmails,[], 
    $uname) ){
        $esubject   = "Demo request confirmation for ".$callDate." at ".$_POST['time'].$amPm." ".$_POST['time-zone'];
        $rBody      = "Hello ".$uname.",<br><br>
        Thank you for showing interest in Workstatus.<br><br>
        This auto-reply is just to let you know that we have received your demo request and will get back to you with a (human) response as soon as possible.<br><br>
        If you have any additional information that you think will help us to assist you, please feel free to reply to this email.<br><br>
        We look forward to connect with you.<br><br>
        Best Regards,<br>
        Workstatus Team";
        smtpEmailFunction($_POST['emailAddress'], $esubject, $rBody, "contact", "hello@workstatus.io", [],[],[], "Workstatus");    
        if( !isset( $_POST['lastName'] ) ){
            $nameArray = explode( " ", $_POST['firstName'] );
            $firtName = $nameArray[0];
            $lastName = $nameArray[1];
        }else{
            $firtName = $_POST['firstName'];
            $lastName = $_POST['lastName'];
        }
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://superadmin.workstatus.io/api/v1/getDemoRequest");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt(
        $ch, CURLOPT_POSTFIELDS, http_build_query(
        array(
            "first_name"    => $firtName,
            "last_name"     => $lastName,
            "email"         => $_POST['emailAddress'],
            "contact_no"    => $_POST['tel'],
            "company_name"  => $_POST['companyName'],
            "team_size"     => $_POST['team-size'],
            "demo_date"     => $apiDate,
            "demo_time"     => $_POST['time'],
            "time_zone"     => $_POST['time-zone'],
            "ip_address"    => $ipAddress

        )) 
        );
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $server_output = curl_exec($ch);
        curl_close($ch);
        
        echo "true";
    }else{
    	echo "false";
    }
}else{
    //print_r( $_POST ); die();
	die("Are You kidding me.");
}
?>
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
function smtpEmailFunction( $emailTo, $subject, $body, $type, $userEmail, $emailCC = [], $emailBCC = [], 
    $attachments = [], $cname = null ){
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
        $mail->Password     = 'qqmwjodicsevwikm';

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

if( 
    ( isset( $_POST['name'] ) && !empty($_POST['name']) ) &&
    ( isset( $_POST['email'] ) && !empty($_POST['email']) ) &&
    ( isset( $_POST['phone'] ) && !empty($_POST['phone']) )
){
    //@mail( 'nitin.baluni@mail.vinove.com', 'GetSiteControl - POST Data', print_r($_POST, 1) );    
    $firtName = $lastName = "";
    if( isset( $_POST['name'] ) ){
        $name = $_POST['name'];
        $nameArray  = explode( " ", $name );
        $firtName   = $nameArray[0];
        $lastName   = $nameArray[1];
    }
    
    $utm_src = (isset($_POST['utmSource']) && !empty($_POST['utmSource'])) ? $_POST['utmSource'] : '';
    if(strstr($utm_src,"adwords"))  {
        $lead_source = "Advertisement: Adwords";
    }else if(strstr($utm_src,"googleads"))  {
        $lead_source = "Advertisement: Google";
    }else if(strstr($utm_src,"gglads"))  {
        $lead_source = "Advertisement: Google";
    }else if(strstr($utm_src,"fbads"))  {
        $lead_source = "Advertisement: Facebook";
    }else if(strstr($utm_src,"Bngads"))  {
        $lead_source = "Advertisement: Bing";
    }else if(strstr($utm_src,"bngads"))  {
        $lead_source = "Advertisement: Bing";
    }else if(strstr($utm_src,"Bingads"))  {
        $lead_source = "Advertisement: Bing ";
    }else if(strstr($utm_src,"sendinblue"))  {
        $lead_source = "Email Marketing: Targeted";
    }else if(strstr($utm_src,"email"))  {
        $lead_source = "Email Marketing: Targeted";
    }else if(strstr($utm_src,"social"))  {
        $lead_source = "Social Media: Organic";
    }else{
        $lead_source = "website";
    }

    $leadStatus     = "Not Contacted";
    $uEmail         = (isset($_POST['email']) && !empty($_POST['email'])) ? $_POST['email'] : '';
    $autoEmailBody  = "Dear ".$name.",<br><br>
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
    if(
    smtpEmailFunction( $uEmail, "Workstatus - We've received your request", $autoEmailBody, "auto", $uEmail, [], [], [] )
    ){
    $leadStatus = "Attempted to Contact";
    }

    /*Zoho CRM Code Starts Here*/
    $CLIENT_ID      = '1000.ED227T6HEN6WAZRH1O48BU5VI96MVR';
    $CLIENT_SECRET  = 'c0fe2e3c254b4d2d7851267acf6b62bce66deead0d';
    $REFRESH_TOKEN  = '1000.4a964cbd2983c2dd57da83472dd0e96d.c0c7a5b9cb27092b71e2d6687c140dda';
    $owner_id       = 681646179; //809367812
    $postData       = 'refresh_token='.$REFRESH_TOKEN.'&client_id='.$CLIENT_ID.'&client_secret='.$CLIENT_SECRET.'&grant_type='.'refresh_token';
    $curl = curl_init();
    curl_setopt_array( $curl, array(
        CURLOPT_URL => "https://accounts.zoho.com/oauth/v2/token",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => $postData
    ) );
    $response = curl_exec($curl);
    $arrRefreshTokResponse =json_decode($response,true);
    $varAccessToken = $arrRefreshTokResponse['access_token'];
    $err = curl_error($curl);
    curl_close( $curl );
    if( !$err ){
    $curl = curl_init();
    $sJSON = json_encode(array(
    'First_Name'    => $firtName,
    'Last_Name'     => (!empty($lastName)) ? $lastName : "NA",
    'Email'         => (isset($_POST['email']) && !empty($_POST['email'])) ? $_POST['email'] : '',
    'Company'       => (isset($_POST['text']) && !empty($_POST['text'])) ? $_POST['text'] : '',
    'Country_1'     => (isset($_POST['country']) && !empty($_POST['country'])) ? $_POST['country'] : '',
    'Phone'         => (isset($_POST['phone']) && !empty($_POST['phone'])) ? $_POST['phone'] : '',
    'Lead_Source'   => $lead_source,
    'Lead_Status'   => $leadStatus,
    'Owner'         => $owner_id,
    'SQL'           => "Yes",
    'Description'   => (isset($_POST['textarea']) && !empty($_POST['textarea'])) ? $_POST['textarea'] : '',
    'UTM_Source'    => $utm_src,
    'Description'   => (isset($_POST['textarea']) && !empty($_POST['textarea'])) ? $_POST['textarea'] : '',
    'UTM_Medium'    => (isset($_POST['utm_medium']) && !empty($_POST['utm_medium'])) ? $_POST['utm_medium'] : '',
    'UTM_Campaign'  => (isset($_POST['utm_campaign']) && !empty($_POST['utm_campaign'])) ? $_POST['utm_campaign'] : '',
    'Company_Headcount' => (isset($_POST['dropdown']) && !empty($_POST['dropdown'])) ? $_POST['dropdown'] : '',
    'Calendly_Booked'   => "No"
    ));

    $sJSON          = str_replace('{','[{',$sJSON);
    $sJSON          = str_replace('}','}]',$sJSON);
    $postLeadData   = '{"data":' . $sJSON . '}';
    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://www.zohoapis.com/crm/v2/Leads",//US DC .com, IN DC .in
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => $postLeadData,
        CURLOPT_HTTPHEADER => array(
            "authorization: Zoho-oauthtoken $varAccessToken",
            "cache-control: no-cache",
            "content-type: application/json"
        ),
    ));
    $response   = curl_exec($curl);
    $err        = curl_error($curl);
    if( !$err ){
        $response   = json_decode( $response );
        if( isset( $response->data[0] ) &&  ($response->data[0]->code == "DUPLICATE_DATA") ) :
            $lead_id = ( isset( $response->data[0] ) ) ? $response->data[0]->details->id : 0;
            if( $lead_id !== 0 ){
                $zoho_data = array(
                'id'                => $lead_id,
                //'Lead_Status'       => "Not Contacted",
                'Calendly_Booked'   => "Yes"
                );

                $curl   = curl_init();        
                $sJSON  = json_encode( $zoho_data );
                $sJSON  = str_replace('{','[{',$sJSON);
                $sJSON  = str_replace('}','}]',$sJSON);
                $postLeadData = '{"data":' . $sJSON . '}';
                curl_setopt_array($curl, array(
                CURLOPT_URL => "https://www.zohoapis.com/crm/v2/Leads",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_HTTP_VERSION    => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST   => "PUT",
                CURLOPT_POSTFIELDS      => $postLeadData,
                CURLOPT_HTTPHEADER      => array(
                "authorization: Zoho-oauthtoken $varAccessToken",
                "cache-control: no-cache",
                "content-type: application/json"
                ),
                ));

                $response  = curl_exec($curl);
                curl_close( $curl );
                $response   = json_decode( $response );
                $file       = fopen("/home/workforestc/calendly-log/zoho-clupdates.txt","a");
                $zlead      = PHP_EOL.$email.":".print_r($response,1);
                fwrite( $file, $zlead );
                fclose( $file );
            }
        endif;         
        //@mail( 'nitin.baluni@mail.vinove.com', 'Calandly ZOHO CRM - Update', $response );    
    }
    curl_close($curl);
    }
    $file = fopen("/home/workforestc/calendly-log/getsitecontrol-logs.txt","a");
    fwrite( $file, print_r( $_POST, true ) );
    fclose( $file );
}
die;
?>
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

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
        $mail->Host         = "mail.workstatus.io"; // SMTP server
        $mail->SMTPSecure   = 'ssl';
        $mail->Port         = 465;
        $mail->SMTPAuth     = true;
        $mail->Username     = 'donotreply@workstatus.io';
        $mail->Password     = 'bbmMBq5RMQ3-';

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

function postZohoLead( $argArrData ){
//print_r($argArrData); die;
$CLIENT_ID = '1000.ED227T6HEN6WAZRH1O48BU5VI96MVR';
$CLIENT_SECRET = 'c0fe2e3c254b4d2d7851267acf6b62bce66deead0d';
$REFRESH_TOKEN = '1000.d0bd9fe070839300bb1566bd37f3ea90.d14a985c871ea3f7d92be08b2bcebec5';

$fname = ( isset( $argArrData['fname'] ) && !empty( $argArrData['fname'] ) ) ? $argArrData['fname'] : '';
$lname = ( isset( $argArrData['lname'] ) && !empty( $argArrData['lname'] ) ) ? $argArrData['lname'] : '';
$name  = $fname." ".$lname;
$email = ( isset( $argArrData['email'] ) && !empty( $argArrData['email'] ) ) ? $argArrData['email'] : '';
$company = ( isset( $argArrData['company'] ) && !empty( $argArrData['company'] ) ) ? $argArrData['company'] : '';
$pcode = ( isset( $argArrData['countrycode'] ) && !empty( $argArrData['countrycode'] ) ) ? $argArrData['countrycode'] : '';
$phone = ( isset( $argArrData['phone'] ) && !empty( $argArrData['phone'] ) ) ? $argArrData['phone'] : '';
$teamSize = ( isset( $argArrData['team-size'] ) && !empty( $argArrData['team-size'] ) ) ? $argArrData['team-size'] : '';
$requirement    = ( isset( $_POST['requirement'] ) && !empty( $_POST['requirement'] ) ) ? $_POST['requirement'] : '';

$user_country   = (isset($_POST['user-country']) && !empty($_POST['user-country'])) ? $_POST['user-country'] : '';

$pageurl = ( isset( $argArrData['pageurl'] ) && !empty( $argArrData['pageurl'] ) ) ? $argArrData['pageurl'] : '';
$tracking_ip = ( isset( $argArrData['tracking_ip'] ) && !empty( $argArrData['tracking_ip'] ) ) ? $argArrData['tracking_ip'] : '';
$referalurl = ( isset( $argArrData['referalurl'] ) && !empty( $argArrData['referalurl'] ) ) ? $argArrData['referalurl'] : '';
$phoneNo = '+'.$pcode.$phone;
$phoneNo = str_replace("+","",$phoneNo);
$varLeadSource = 'Website';

$utm_src = (isset( $argArrData['utm_source']) && !empty( $argArrData['utm_source'] ) ) ? $argArrData['utm_source'] : '';
$utm_mdm = (isset( $argArrData['utm_medium']) && !empty( $argArrData['utm_medium'] ) ) ? $argArrData['utm_medium'] : '';
$utm_cmp = (isset( $argArrData['utm_campaign']) && !empty( $argArrData['utm_campaign'] ) ) ? $argArrData['utm_campaign'] : '';

$zohoDesc = "";
if( $pageurl ){
$zohoDesc .= "Url: ".$pageurl;
}
if( $utm_src ){
$zohoDesc .= "utm_source: ".$utm_src;
}
if( $utm_mdm ){
$zohoDesc .= "utm_medium: ".$utm_mdm;  
}
if( $utm_cmp ){
$zohoDesc .= "utm_campaign: ".$utm_cmp;   
}


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

if( !empty( $referalurl ) && empty( $utm_src ) ){
    if( strstr($referalurl,"google") ){
    $lead_source = "SEO: Organic";    
    }
}

//$owner_id = 777733498;
$owner_id = 658520861; // Sahashi
$postData = 'refresh_token='.$REFRESH_TOKEN.'&client_id='.$CLIENT_ID.'&client_secret='.$CLIENT_SECRET.'&grant_type='.'refresh_token';
    $curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://accounts.zoho.com/oauth/v2/token",//US DC .com, IN DC .in
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => $postData
    ));
    $response = curl_exec($curl);
    $arrRefreshTokResponse =json_decode($response,true);
    //print_r( $arrRefreshTokResponse ); die;
    $varAccessToken = $arrRefreshTokResponse['access_token'];
    $err = curl_error($curl);
    curl_close( $curl );
    if ($err) {
    } else {
        $curl = curl_init();
        $sJSON = json_encode(array(
        'First_Name'    => $fname,
        'Last_Name'     => $lname,
        'Email'         => $email,
        'Company'       => $company,
        'Country_1'     => $user_country,
        'Phone'         => $phoneNo,
        'Lead_Source'   => $lead_source,
        'Lead_Status'   => "Not Contacted",
        'Owner'         => $owner_id,
        'Description'   => $zohoDesc,
        'IP_Address1'   => $tracking_ip,
        'IP_Address'    => $tracking_ip,
        'UTM_Source'    => $utm_src,
        'Description'   => $requirement,
        'UTM_Medium'    => $utm_mdm,
        'UTM_Campaign'  => $utm_cmp,
        'Website_URL'   => $pageurl,
        'Ref_Url'       => $referalurl,
        'Company_Headcount' => $teamSize
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
        $response = curl_exec($curl);        
        $err = curl_error($curl);
        curl_close($curl);
        if ($err) {
        echo "cURL Error #:" . $err;
        }else{
            //print_r($response);
        }
    }
}
function getUserIP(){
    if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
        $_SERVER['REMOTE_ADDR']       = $_SERVER["HTTP_CF_CONNECTING_IP"];
        $_SERVER['HTTP_CLIENT_IP']    = $_SERVER["HTTP_CF_CONNECTING_IP"];
    }
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];

    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }
    return $ip;
}

function get_ws_ipdata( $ip ){ 
    if( isset( $_SERVER['HTTP_HOST'] ) && ($_SERVER['HTTP_HOST'] == "localhost") ){
        global $wpdb;
        $ipdb = $wpdb;
    }else{
        $ipdb = new wpdb( 'workforestc_ipinfo', 'wsIPinfo@2023#', 'workforestc_ipinfo', 'localhost' );    
    }
    $hasIP  = $ipdb->get_row( "SELECT * FROM ipinfo_logs WHERE ip = '".$ip."' ", OBJECT );
    if( $hasIP ){
        $ipData = json_decode( $hasIP->data );
        return $ipData;
    }else{
        return false;
    }
}

function getCTAstatus(){
    return array( 'show_this' => true, 'country' => 'default', 'cta_text' => "Start Free Trial", 'pid' => 42, 'type' => 'monthly' );

    if( isset( $_SERVER['HTTP_HOST'] ) && ($_SERVER['HTTP_HOST'] == "localhost") ){
        global $wpdb;
        $ipdb = $wpdb;
    }else{
        $ipdb = new wpdb( 'workstatus-io-crm-prod-db-user', '7DsEMIA5ppFAAyK', 'workstatus-io-crm-prod-db', 'localhost' ); 
    }

    $ipAddr     = getUserIP();
    $hasIP      = get_ws_ipdata( $ipAddr );

    if( $hasIP === false ){ 
        $isLocation     = file_get_contents( 'https://ipinfo.io/'.$ipAddr.'?token=58f4668796ee68' );
        $ws_userip      = json_decode( $isLocation ); 
        if( $ws_userip ){            
            $ipdb->insert( 'ipinfo_logs', array( 'ip' => $ipAddr, 'data' => $isLocation, 'created_at' => date('Y-m-d H:i:s')));
        }
    }
    $liveDir = "/home/workstatus-io/public_html/data-json/results.json";
    if( isset( $_SERVER['HTTP_HOST'] ) && ($_SERVER['HTTP_HOST'] == "localhost") ){
        $jsonDir = "/var/www/html/workstatus/data-json/results.json"; 
    }
    elseif( isset( $_SERVER['HTTP_HOST'] ) && ($_SERVER['HTTP_HOST'] == "https://beta.vinove.com/workstatus.io") ){
        $jsonDir = "/home/betavinc/public_html/workstatus.io/data-json/results.json";
    }
    elseif( isset( $_SERVER['HTTP_HOST'] ) && ($_SERVER['HTTP_HOST'] == "beta.vinove.com") ){
        $jsonDir = "/home/betavinc/public_html/workstatus.io/data-json/results.json";
    }
    elseif( isset( $_SERVER['HTTP_HOST'] ) && ($_SERVER['HTTP_HOST'] == "www.workstatus.io") ){
        $jsonDir = $liveDir;
    }
    elseif( isset( $_SERVER['HTTP_HOST'] ) && ($_SERVER['HTTP_HOST'] == "workstatus.io") ){
        $jsonDir = $liveDir;
    }
    elseif( isset( $_SERVER['HTTP_HOST'] ) && ($_SERVER['HTTP_HOST'] == "https://www.workstatus.io/") ){
        $jsonDir = $liveDir;
    }

    $isLocation = get_ws_ipdata( $ipAddr );
    //if( $isLocation ){
        /*
        0 - free 14 days trial
        1 - free signup
        2 - Hide this Button
        */
        $conCode    = (isset($isLocation->country) && !empty($isLocation->country)) ? $isLocation->country : 'DEFAULT';
        $jsonData   = file_get_contents( $jsonDir );
        $jsonData   = json_decode( $jsonData );
        //echo '<pre>'; print_r( $jsonData ); die;

        if( isset( $_GET['con-code'] ) && !empty( $_GET['con-code'] ) ){
            $conCode = $_GET['con-code'];
        }

        foreach( $jsonData as $data ){
        if( $data->country_code == $conCode ){
            //$data->button_type = 1; //Please change value here.
            if( $data->button_type == 0 ){
            return array( 'show_this' => true, 'country' => $conCode, 'cta_text' => "Start Free Trial", 'pid' => $data->plan_id, 
            'type' => $data->type );
            }elseif( $data->button_type == 1 ){
            return array( 'show_this' => true, 'country' => $conCode, 'cta_text' => "Free Signup", 'pid' => $data->plan_id, 
            'type' => $data->type );
            }elseif( $data->button_type == 2 ){
            return array( 'show_this' => false, 'country' => $conCode, 'cta_text' => "" );
            }
        }    
        }
    return false;
}

add_action( 'init', function(){
    if( is_admin() ) return;

	@session_start();
	global $ws_ctas, $RegLink, $LogLink;
	$ws_ctas = getCTAstatus();
    
	//?utm_source=googleads&utm_medium=search&utm_campaign=WS-Employee_Monitoring-India
    
	if( isset($_GET['utm_source']) && !empty( $_GET['utm_source'] ) ){
	    $utmSource      = (isset($_GET['utm_source']) && !empty( $_GET['utm_source'] )) ? $_GET['utm_source'] : '';
	    $utmMedium      = (isset($_GET['utm_medium']) && !empty( $_GET['utm_medium'] )) ? $_GET['utm_medium'] : '';
	    $utmCampaign    = (isset($_GET['utm_campaign']) && !empty( $_GET['utm_campaign'] )) ? $_GET['utm_campaign'] : '';
	    $_SESSION['_utmsource'] = $utmSource;
	    $_SESSION['_utmmedium'] = $utmMedium;
	    $_SESSION['_utmcampaign'] = $utmCampaign;
	}
	$RegLink     = "https://app.workstatus.io/auth/register/";
	$LogLink     = "https://app.Workstatus.io/auth/login/";
	if( isset($_SESSION['_utmsource']) ){
	$RegLink = $RegLink."?utm_source=".$_SESSION['_utmsource']."&utm_medium=".$_SESSION['_utmmedium']."&utm_campaign=".$_SESSION['_utmcampaign'];
	$LogLink = $LogLink."?utm_source=".$_SESSION['_utmsource']."&utm_medium=".$_SESSION['_utmmedium']."&utm_campaign=".$_SESSION['_utmcampaign'];
	}

	if( isset( $_SERVER['HTTP_REFERER'] ) && !empty( $_SERVER['HTTP_REFERER'] ) ){
    $ref        = $_SERVER['HTTP_REFERER'];
    $refData    = parse_url($ref);
	    if( (strpos($refData['host'], "workstatus.io") === false) ){
	        $_SESSION['referer']  = $_SERVER['HTTP_REFERER']; 
	    }
	}

	$regURL = parse_url($RegLink, PHP_URL_QUERY);
	if( $regURL ){
	    if( isset( $ws_ctas['pid'] ) && isset( $ws_ctas['type'] ) ){
	    $RegLink .= "&pid=".$ws_ctas['pid']."&type=".$ws_ctas['type'];
	    }    
	}else{
	    if( isset( $ws_ctas['pid'] ) && isset( $ws_ctas['type'] ) ){
	    $RegLink .= "?pid=".$ws_ctas['pid']."&type=".$ws_ctas['type'];
	    }
	    
	}

	if( isset($_SESSION['referer']) && !empty($_SESSION['referer']) ){
	    $RegLink .= (parse_url($RegLink, PHP_URL_QUERY)) ? "&ref=".$_SESSION['referer'] : "?ref=".$_SESSION['referer'];
	    $LogLink .= (parse_url($LogLink, PHP_URL_QUERY)) ? "&ref=".$_SESSION['referer'] : "?ref=".$_SESSION['referer'];
	}
});

function geoCTAcheck(){
    return true;
    
    /*
    global $ws_ctas;
    if(($ws_ctas !== false) && ($ws_ctas['show_this'] === true))
    return true;    
    else
    return false;
    */
}

function isMobile(){
    $useragent = $_SERVER['HTTP_USER_AGENT'];
    if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4))){
        return 1;
    }else{
        return 0;
    }
}

/*
add_action('init', function(){ 
    if( is_admin() ) 
    return;

    if( isset( $_SERVER['HTTP_HOST'] ) && ($_SERVER['HTTP_HOST'] == "localhost") ){
        global $wpdb;
        $ipdb = $wpdb;
    }else{
        $ipdb = new wpdb( 'workforestc_ipinfo', 'wsIPinfo@2023#', 'workforestc_ipinfo', 'localhost' ); 
    }
    //$ipAddr     = getUserIP();
    $ipAddr     = "101.188.67.134";
    $hasIP      = get_ws_ipdata( $ipAddr );
    print_r( $hasIP );
    die;
    if( $hasIP === false ){ die;
        $isLocation     = file_get_contents( 'https://ipinfo.io/'.getUserIP().'?token=58f4668796ee68' );
        $ws_userip      = json_decode( $isLocation ); 
        if( $ws_userip ){
            $wpdb->insert( 'ipinfo_logs', array( 'ip' => $ipAddr, 'data' => $isLocation, 'created_at' => date('Y-m-d H:i:s')));
        }
    }
});
*/

add_action( 'init', function(){
    if( isset($_GET['ws-action']) && ($_GET['ws-action'] == "ipinfo") ){
        $ipinfo = get_ws_ipdata( getUserIP() );
        echo json_encode( $ipinfo );
        die;
    }
});

function getWSipinfo( $ipAddr ){ 
    global $wpdb;
    $ipdb = $wpdb;
    if( isset( $_SERVER['HTTP_HOST'] ) && ($_SERVER['HTTP_HOST'] != "localhost") ){
    $ipdb = new wpdb( 'workstatus-io-crm-prod-db-user', '7DsEMIA5ppFAAyK', 'workstatus-io-crm-prod-db', 'localhost' );
    }
    $hasIP  = $ipdb->get_row( "SELECT * FROM ipinfo_logs WHERE ip = '".$ipAddr."' ", OBJECT );    
    if( $hasIP ){
        return json_decode($hasIP->data);
    }else{
        $isLocation     = file_get_contents( 'https://ipinfo.io/'.$ipAddr.'?token=58f4668796ee68' );
        $ws_userip      = json_decode( $isLocation ); 
        if( $ws_userip ){
            $ipdb->insert( 'ipinfo_logs', array( 'ip' => $ipAddr, 'data' => $isLocation, 'created_at' => date('Y-m-d H:i:s')));
            return $isLocation;
        }else{
            return false;
        }       
    }
}

add_action( 'rest_api_init', function (){
    register_rest_route( 'ws-api/v1', '/ipinfo', array(
        'methods' => 'GET',
        'callback' => function(){
        $ipaddr = (isset( $_SERVER['HTTP_HOST'] ) && ($_SERVER['HTTP_HOST'] != "localhost")) ? getUserIP() : '84.17.47.122';
        $ipinfo = getWSipinfo( $ipaddr );
        wp_send_json( $ipinfo );
        }
    ));
});
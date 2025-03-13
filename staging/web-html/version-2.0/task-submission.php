<?php
/*
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
*/
if( ($_SERVER['REQUEST_METHOD'] == 'GET') && realpath(__FILE__) == realpath( $_SERVER['SCRIPT_FILENAME'] ) ){
header( 'HTTP/1.0 403 Forbidden', TRUE, 403 );
die("HEY BOAT.. Go Away");
}
/*
ZohoProjects.portals.CREATE,ZohoProjects.tasks.ALL, WorkDrive.workspace.ALL, WorkDrive.files.ALL
*/
function ws_dd( $array ){
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}

function wsgetUserIP(){
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
function wsGetCountryByCode( $code ){
    $countries_list = array( "AF" => "Afghanistan", "AX" => "Aland Islands", "AL" => "Albania", "DZ" => "Algeria", "AS" => "American Samoa", "AD" => "Andorra", "AO" => "Angola", "AI" => "Anguilla", "AQ" => "Antarctica", "AG" => "Antigua and Barbuda", "AR" => "Argentina", "AM" => "Armenia", "AW" => "Aruba", "AU" => "Australia", "AT" => "Austria", "AZ" => "Azerbaijan", "BS" => "Bahamas", "BH" => "Bahrain", "BD" => "Bangladesh", "BB" => "Barbados", "BY" => "Belarus", "BE" => "Belgium", "BZ" => "Belize", "BJ" => "Benin", "BM" => "Bermuda", "BT" => "Bhutan", "BO" => "Bolivia", "BQ" => "Bonaire, Sint Eustatius and Saba", "BA" => "Bosnia and Herzegovina", "BW" => "Botswana", "BV" => "Bouvet Island", "BR" => "Brazil", "IO" => "British Indian Ocean Territory", "BN" => "Brunei Darussalam", "BG" => "Bulgaria", "BF" => "Burkina Faso", "BI" => "Burundi", "KH" => "Cambodia", "CM" => "Cameroon", "CA" => "Canada", "CV" => "Cape Verde", "KY" => "Cayman Islands", "CF" => "Central African Republic", "TD" => "Chad", "CL" => "Chile", "CN" => "China", "CX" => "Christmas Island", "CC" => "Cocos (Keeling) Islands", "CO" => "Colombia", "KM" => "Comoros", "CG" => "Congo", "CD" => "Congo, the Democratic Republic of the", "CK" => "Cook Islands", "CR" => "Costa Rica", "CI" => "Cote D'Ivoire", "HR" => "Croatia", "CU" => "Cuba", "CW" => "Curacao", "CY" => "Cyprus", "CZ" => "Czech Republic", "DK" => "Denmark", "DJ" => "Djibouti", "DM" => "Dominica", "DO" => "Dominican Republic", "EC" => "Ecuador", "EG" => "Egypt", "SV" => "El Salvador", "GQ" => "Equatorial Guinea", "ER" => "Eritrea", "EE" => "Estonia", "ET" => "Ethiopia", "FK" => "Falkland Islands (Malvinas)", "FO" => "Faroe Islands", "FJ" => "Fiji", "FI" => "Finland", "FR" => "France", "GF" => "French Guiana", "PF" => "French Polynesia", "TF" => "French Southern Territories", "GA" => "Gabon", "GM" => "Gambia", "GE" => "Georgia", "DE" => "Germany", "GH" => "Ghana", "GI" => "Gibraltar", "GR" => "Greece", "GL" => "Greenland", "GD" => "Grenada", "GP" => "Guadeloupe", "GU" => "Guam", "GT" => "Guatemala", "GG" => "Guernsey", "GN" => "Guinea", "GW" => "Guinea-Bissau", "GY" => "Guyana", "HT" => "Haiti", "HM" => "Heard Island and Mcdonald Islands", "VA" => "Holy See (Vatican City State)", "HN" => "Honduras", "HK" => "Hong Kong", "HU" => "Hungary", "IS" => "Iceland", "IN" => "India", "ID" => "Indonesia", "IR" => "Iran, Islamic Republic of", "IQ" => "Iraq", "IE" => "Ireland", "IM" => "Isle of Man", "IL" => "Israel", "IT" => "Italy", "JM" => "Jamaica", "JP" => "Japan", "JE" => "Jersey", "JO" => "Jordan", "KZ" => "Kazakhstan", "KE" => "Kenya", "KI" => "Kiribati", "KP" => "Korea, Democratic People's Republic of", "KR" => "Korea, Republic of", "XK" => "Kosovo", "KW" => "Kuwait", "KG" => "Kyrgyzstan", "LA" => "Lao People's Democratic Republic", "LV" => "Latvia", "LB" => "Lebanon", "LS" => "Lesotho", "LR" => "Liberia", "LY" => "Libyan Arab Jamahiriya", "LI" => "Liechtenstein", "LT" => "Lithuania", "LU" => "Luxembourg", "MO" => "Macao", "MK" => "Macedonia, the Former Yugoslav Republic of", "MG" => "Madagascar", "MW" => "Malawi", "MY" => "Malaysia", "MV" => "Maldives", "ML" => "Mali", "MT" => "Malta", "MH" => "Marshall Islands", "MQ" => "Martinique", "MR" => "Mauritania", "MU" => "Mauritius", "YT" => "Mayotte", "MX" => "Mexico", "FM" => "Micronesia, Federated States of", "MD" => "Moldova, Republic of", "MC" => "Monaco", "MN" => "Mongolia", "ME" => "Montenegro", "MS" => "Montserrat", "MA" => "Morocco", "MZ" => "Mozambique", "MM" => "Myanmar", "NA" => "Namibia", "NR" => "Nauru", "NP" => "Nepal", "NL" => "Netherlands", "AN" => "Netherlands Antilles", "NC" => "New Caledonia", "NZ" => "New Zealand", "NI" => "Nicaragua", "NE" => "Niger", "NG" => "Nigeria", "NU" => "Niue", "NF" => "Norfolk Island", "MP" => "Northern Mariana Islands", "NO" => "Norway", "OM" => "Oman", "PK" => "Pakistan", "PW" => "Palau", "PS" => "Palestinian Territory, Occupied", "PA" => "Panama", "PG" => "Papua New Guinea", "PY" => "Paraguay", "PE" => "Peru", "PH" => "Philippines", "PN" => "Pitcairn", "PL" => "Poland", "PT" => "Portugal", "PR" => "Puerto Rico", "QA" => "Qatar", "RE" => "Reunion", "RO" => "Romania", "RU" => "Russian Federation", "RW" => "Rwanda", "BL" => "Saint Barthelemy", "SH" => "Saint Helena", "KN" => "Saint Kitts and Nevis", "LC" => "Saint Lucia", "MF" => "Saint Martin", "PM" => "Saint Pierre and Miquelon", "VC" => "Saint Vincent and the Grenadines", "WS" => "Samoa", "SM" => "San Marino", "ST" => "Sao Tome and Principe", "SA" => "Saudi Arabia", "SN" => "Senegal", "RS" => "Serbia", "CS" => "Serbia and Montenegro", "SC" => "Seychelles", "SL" => "Sierra Leone", "SG" => "Singapore", "SX" => "Sint Maarten", "SK" => "Slovakia", "SI" => "Slovenia", "SB" => "Solomon Islands", "SO" => "Somalia", "ZA" => "South Africa", "GS" => "South Georgia and the South Sandwich Islands", "SS" => "South Sudan", "ES" => "Spain", "LK" => "Sri Lanka", "SD" => "Sudan", "SR" => "Suriname", "SJ" => "Svalbard and Jan Mayen", "SZ" => "Swaziland", "SE" => "Sweden", "CH" => "Switzerland", "SY" => "Syrian Arab Republic", "TW" => "Taiwan, Province of China", "TJ" => "Tajikistan", "TZ" => "Tanzania, United Republic of", "TH" => "Thailand", "TL" => "Timor-Leste", "TG" => "Togo", "TK" => "Tokelau", "TO" => "Tonga", "TT" => "Trinidad and Tobago", "TN" => "Tunisia", "TR" => "Turkey", "TM" => "Turkmenistan", "TC" => "Turks and Caicos Islands", "TV" => "Tuvalu", "UG" => "Uganda", "UA" => "Ukraine", "AE" => "United Arab Emirates", "GB" => "United Kingdom", "US" => "United States", "UM" => "United States Minor Outlying Islands", "UY" => "Uruguay", "UZ" => "Uzbekistan", "VU" => "Vanuatu", "VE" => "Venezuela", "VN" => "Viet Nam", "VG" => "Virgin Islands, British", "VI" => "Virgin Islands, U.s.", "WF" => "Wallis and Futuna", "EH" => "Western Sahara", "YE" => "Yemen", "ZM" => "Zambia", "ZW" => "Zimbabwe");
    $codes = strtoupper($code);
    return ($countries_list[$codes]) ? $countries_list[$codes] : "N/A";
}

$objArray['site_url'] = "https://www.workstatus.io";
$objArray['ws_upload_dir'] = "/home/workforestc/public_html/";
if( isset( $_SERVER['HTTP_HOST'] ) && ($_SERVER['HTTP_HOST'] == "localhost") ){
    $objArray['site_url'] = "http://localhost/workstatus";
    $objArray['ws_upload_dir'] = "/var/www/html/workstatus/uploads/"; 
}elseif( isset( $_SERVER['HTTP_HOST'] ) && ($_SERVER['HTTP_HOST'] == "https://beta.vinove.com/workstatus.io") ){
    $objArray['site_url'] = "https://beta.vinove.com/workstatus.io";
    $objArray['ws_upload_dir'] = "/home/betavinc/public_html/workstatus.io/uploads/";
}elseif( isset( $_SERVER['HTTP_HOST'] ) && ($_SERVER['HTTP_HOST'] == "beta.vinove.com") ){
    $objArray['site_url'] = "https://beta.vinove.com/workstatus.io";
    $objArray['ws_upload_dir'] = "/home/betavinc/public_html/workstatus.io/uploads/"; 
}else{
    $objArray['site_url'] = "https://www.workstatus.io";
    $objArray['ws_upload_dir'] = "/home/workforestc/public_html/uploads/"; 
}
define( 'WS_SITE_URL', $objArray['site_url'] );
define( 'WS_UPLOAD_DIR', $objArray['ws_upload_dir'] );

define( 'TASKCLIENT_ID','1000.ED227T6HEN6WAZRH1O48BU5VI96MVR' );
define( 'TASKCLIENT_SECRET','c0fe2e3c254b4d2d7851267acf6b62bce66deead0d' );
define( 'TASKREFRESH_TOKEN','1000.4a964cbd2983c2dd57da83472dd0e96d.c0c7a5b9cb27092b71e2d6687c140dda' );

function logZohoTask( $args ){
$postData = 'refresh_token='.TASKREFRESH_TOKEN.'&client_id='.TASKCLIENT_ID.'&client_secret='.TASKCLIENT_SECRET.'&grant_type='.'refresh_token';
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
    $taskarrRefreshTokResponse =json_decode($response,true);
    $taskAccessToken = $taskarrRefreshTokResponse['access_token'];
    $err = curl_error($curl);
    curl_close( $curl );
    if($err){
        die( "Something Went Wrong. Please try again " );
    }else{
        $userName       = (isset($args['fname'] ) && !empty($args['fname'])) ? $args['fname'] : '';
        $requirement    = (isset($args['user-req'] ) && !empty($args['user-req'])) ? $args['user-req'] : '';
        // Must Have : 135565000000042003
        // Good To have : 135565000000041001
        $imps           = ( isset( $args['switch-one'] ) && ( !empty($args['switch-one'] ) ) ) ? $args['switch-one'] : '';
        $tagID          = ( $imps == "Good to have" ) ? 135565000000041001 : 135565000000042003;
        $zoho_data      = array(
            'name'          => "$userName", 
            'description'   => $requirement,
            'tasklist_id'   => '1056743000017856606',
            //'tagIds'        => '['.$tagID.']'
            'tagIds'        => '[1056743000020466371]'
            
        );
        $curl = curl_init();
        curl_setopt_array(
            $curl, 
            array(
            CURLOPT_URL => "https://projectsapi.zoho.com/restapi/portal/iworklab/projects/1056743000009503019/tasks/",
            CURLOPT_RETURNTRANSFER  => true,
            CURLOPT_ENCODING        => "",
            CURLOPT_MAXREDIRS       => 10,
            CURLOPT_TIMEOUT         => 30,
            CURLOPT_HTTP_VERSION    => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST   => "POST",
            CURLOPT_POSTFIELDS      => http_build_query($zoho_data),
            CURLOPT_HTTPHEADER => array(
                "authorization: Zoho-oauthtoken $taskAccessToken",
                "cache-control: no-cache"
            )
        )
        );
        $response   = curl_exec($curl);
        $err        = curl_error($curl);
        curl_close($curl);
        if(!$err) {

            $response       = json_decode($response);
            //ws_dd($response); 
            $task_ID        = $response->tasks[0]->id;
            $attachment_id  = [];
            if( isset( $args['Uploadedfilename'] ) && !empty( $args['Uploadedfilename'] ) ){
            $inMedia    = rtrim( $args['Uploadedfilename'], ',' );
            $media      = explode( ",", $inMedia );
            if( $media ){
                foreach( $media as $key => $doc ){
                    $docArray = new CURLFILE( WS_UPLOAD_DIR.$doc );
                    $curl = curl_init();
                    curl_setopt_array($curl, 
                    array(
                    CURLOPT_URL => 'https://projectsapi.zoho.com/api/v3/portal/641760089/attachments',
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => '',
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 0,
                    CURLOPT_FOLLOWLOCATION => true,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => 'POST',
                    CURLOPT_POSTFIELDS => array( 'upload_file' => $docArray ),
                    CURLOPT_HTTPHEADER => array('Authorization: Bearer '.$taskAccessToken)
                    )
                    );
                    $response = curl_exec($curl);
                    $err        = curl_error($curl);
                    curl_close($curl);
                    if(!$err) {
                        $response = json_decode($response);
                        //ws_dd($response);
                        //@mail( 'nitin.baluni@mail.vinove.com', 'Zoho Projects - add attachment', print_r($response, 1) );
                        $attachment_id[] = $response->attachment[0]->attachment_id;    
                    }
                }
                if( count($attachment_id) > 0 ){
                    $curl = curl_init();
                    curl_setopt_array($curl, array(
                      CURLOPT_URL => 'https://projectsapi.zoho.com/api/v3/portal/641760089/projects/1056743000009503019/tasks/'.$task_ID.'/attachments',
                      CURLOPT_RETURNTRANSFER => true,
                      CURLOPT_ENCODING => '',
                      CURLOPT_MAXREDIRS => 10,
                      CURLOPT_TIMEOUT => 0,
                      CURLOPT_FOLLOWLOCATION => true,
                      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                      CURLOPT_CUSTOMREQUEST => 'POST',
                      CURLOPT_POSTFIELDS => array('attachment_ids' => '['.implode(', ', $attachment_id).']'),
                      CURLOPT_HTTPHEADER => array('Authorization: Bearer '.$taskAccessToken)
                    ));
                    $response = curl_exec($curl);
                    $response = json_decode($response);
                    //ws_dd($response);
                    //@mail( 'nitin.baluni@mail.vinove.com', 'Zoho Projects - Assign attachment', print_r($response, 1) );
                    curl_close($curl);
                }
            }
            }
        }else{
            echo "cURL Error #:" . $err; die;
        }
}
}
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
$email          = ( isset( $_POST['email'] ) && !empty( $_POST['email'] ) ) ? $_POST['email'] : '';
$phone          = ( isset( $_POST['phone'] ) && !empty( $_POST['phone'] ) ) ? $_POST['phone'] : '';
$tracking_ip    = wsgetUserIP();
$requirement    = ( isset( $_POST['user-req'] ) && !empty( $_POST['user-req'] ) ) ? $_POST['user-req'] : '';
$country        = (isset($_POST['user-country']) && !empty($_POST['user-country'])) ? wsGetCountryByCode($_POST['user-country']) : '';
$pcodes          = ( isset( $_POST['cprefix'] ) && !empty( $_POST['cprefix'] ) ) ? $_POST['cprefix'] : '';
$switchPlan          = ( isset( $_POST['switch-one'] ) && !empty( $_POST['switch-one'] ) ) ? $_POST['switch-one'] : '';
$uploaded_files_names = $_POST['Uploadedfilename'];
    $contactNo        = $pcodes.$phone;
    $body = "";
    $varDeliminator = "<br>";
    $body = "";
    $body .= "=================================".$varDeliminator;    
    $body .= "Name : ".$fname.$varDeliminator;
    $body .= "Email : ".$email.$varDeliminator;
    $body .= "Contact No. : ".$contactNo.$varDeliminator;
    $body .= "Country: ".$country.$varDeliminator;
    $body .= "How important is this to you: ".$switchPlan.$varDeliminator;
    $body .= "Feature Description: ".$requirement.$varDeliminator;
    $body .= "IP Address: ".$tracking_ip.$varDeliminator;


    $Mailbody = "";
    $bodyBr = "<br>";
    $Mailbody .= "=================================".$bodyBr;
    $Mailbody .= "Name : ".$fname.$bodyBr;
    $Mailbody .= "Email : ".$email.$bodyBr;
    $Mailbody .= "Contact No. : ".$contactNo.$bodyBr;
    $Mailbody .= "Country : ".$country.$bodyBr;
    $Mailbody .= "How important is this to you: ".$switchPlan.$bodyBr;
    $Mailbody .= "Feature Description: ".$requirement.$bodyBr;
    $Mailbody .= "IP Address. : ".$tracking_ip.$bodyBr;

    
    
    if ($uploaded_files_names != "") {
        $arrFileNameArr = explode(',', $uploaded_files_names,-1);

    } else {
        $arrFileNameArr = array();
    }

    if (count($arrFileNameArr) > 0) {
        $uploaded_file_path = "";
        foreach ($arrFileNameArr as $fileKey => $fileValue) {            
            $body .= 'Uploaded File : ' . WS_SITE_URL . '/uploads/' . $fileValue . $varDeliminator;
            $uploaded_file_path .= WS_SITE_URL . '/uploads/' . $fileValue.'    ';

            $Mailbody .= 'Uploaded File : ' . WS_SITE_URL . '/uploads/' . $fileValue . $bodyBr;
            $uploaded_file_path .= WS_SITE_URL . '/uploads/' . $fileValue.'    ';
        }
    }

$body       .= "=================================".$varDeliminator;
$Mailbody   .= "=================================".$bodyBr;
$bccEmails = ['nitin.baluni@mail.vinove.com'];
smtpEmailFunction( "hello@workstatus.io", "Suggest a Feature - Workstatus", $body, "lead", $email, [],$bccEmails,[], 
$uname );
logZohoTask($_POST);
header('location:thanks.php');    
?>
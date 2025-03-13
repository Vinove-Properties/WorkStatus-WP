<?php
function getCTAstatus(){
    if( isset( $_SERVER['HTTP_HOST'] ) && ($_SERVER['HTTP_HOST'] == "localhost") ){
        $jsonDir = "http://localhost/workstatus/data-json/results.json"; 
    }elseif( isset( $_SERVER['HTTP_HOST'] ) && ($_SERVER['HTTP_HOST'] == "https://beta.vinove.com/workstatus.io") ){
        $jsonDir = "/home/betavinc/public_html/workstatus.io/data-json/results.json";
    }elseif( isset( $_SERVER['HTTP_HOST'] ) && ($_SERVER['HTTP_HOST'] == "beta.vinove.com") ){
        $jsonDir = "/home/betavinc/public_html/workstatus.io/data-json/results.json";
    }
    $isLocation = file_get_contents('https://ipinfo.io/json');
    $isLocation = json_decode($isLocation);
    if( $isLocation ){
        /*
        0 - free 14 days trial
        1 - free signup
        2 - Hide this Button
        */
        $conCode = (isset($isLocation->country) && !empty($isLocation->country)) ? $isLocation->country : 'DEFAULT';
        //if( isset( $isLocation->country ) && !empty( $isLocation->country ) ){
        //$jsonData   = file_get_contents( $jsonDir );
        //$jsonData   = json_decode( $jsonData );
        //print_r($jsonData); die;
       // foreach( $jsonData as $data ){
            //if( $data->country_code == $conCode ){
                //$data->button_type = 0; //Please change value here.
                //if( $data->button_type == 0 ){
               // return array( 'show_this' => true, 'country' => $isLocation->country, 'cta_text' => "Free 14 Days Trial", 
                  //  'pid' => $data->plan_id, 'type' => $data->type );
               // }elseif( $data->button_type == 1 ){
               // return array( 'show_this' => true, 'country' => $isLocation->country, 'cta_text' => "Free Signup", 'pid' => $data->plan_id, 'type' => $data->type );
               // }elseif( $data->button_type == 2 ){
                //return array( 'show_this' => false, 'country' => $isLocation->country, 'cta_text' => "" );
               // }
            //}    
        //}
        //}
    }
    return false;
}
$GLOBALS['ws_ctas'] = getCTAstatus();

function geoCTAcheck(){
    global $ws_ctas;
    if(($ws_ctas !== false) && ($ws_ctas['show_this'] === true))
        return true;    
    else
        return false;
}


@session_start();
$objArray['site_url'] = "https://www.workstatus.io";
if( isset( $_SERVER['HTTP_HOST'] ) && ($_SERVER['HTTP_HOST'] == "localhost") ){
    $objArray['site_url'] = "http://localhost/workstatus"; 
}elseif( isset( $_SERVER['HTTP_HOST'] ) && ($_SERVER['HTTP_HOST'] == "https://beta.vinove.com/workstatus.io") ){
    $objArray['site_url'] = "https://beta.vinove.com/workstatus.io";
}elseif( isset( $_SERVER['HTTP_HOST'] ) && ($_SERVER['HTTP_HOST'] == "beta.vinove.com") ){
    $objArray['site_url'] = "https://beta.vinove.com/workstatus.io";
}
define( 'SITE_URL', $objArray['site_url']);

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

global $ws_ctas;
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


$varFileName = basename($_SERVER['PHP_SELF']);

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

function getDemoLink(){
    $formLink   = "https://calendly.com/workstatus/product-demo?utm_source=";
    //$pageURL  = basename( $_SERVER['PHP_SELF'] );
    $pageURL    = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $pageURL    = str_replace(".php", "", $pageURL);
    return $formLink.$pageURL.'!!'.getUserIP();
}

function ws_permalink(){
    $pageURL    = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $pageURL    = str_replace(".php", "", $pageURL);
    return $pageURL;
}

function isMobile() {
    $useragent=$_SERVER['HTTP_USER_AGENT'];
    if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4))) {
        return 1;
        } else {
            return 0;
        }
}

/* Zoho Api Leads Insert API Start */
define('CLIENT_ID','1000.T83TEYWHZDWOQRL8JUXBD4XT8UWI5U');
define('CLIENT_SECRET','74d994015f78e8efbebe00f3ce5bb00fe3f35a0c97');
define('ACCESS_TOKEN','');
define('REFRESH_TOKEN','1000.a9b9e2c14490efa501b74a5bd12c8867.d029cc4c0e9f00477074b4c0963adefa');

function getzoholeads($argArrData){ 
//echo '<pre>'; print_r($argArrData); die;
$fname = ( isset( $argArrData['fname'] ) && !empty( $argArrData['fname'] ) ) ? $argArrData['fname'] : '';
$lname = ( isset( $argArrData['lname'] ) && !empty( $argArrData['lname'] ) ) ? $argArrData['lname'] : '';
$name  = $fname." ".$lname;
$email = ( isset( $argArrData['email'] ) && !empty( $argArrData['email'] ) ) ? $argArrData['email'] : '';
$company = ( isset( $argArrData['company'] ) && !empty( $argArrData['company'] ) ) ? $argArrData['company'] : '';
$pcode = ( isset( $argArrData['countrycode'] ) && !empty( $argArrData['countrycode'] ) ) ? $argArrData['countrycode'] : '';
$phone = ( isset( $argArrData['phone'] ) && !empty( $argArrData['phone'] ) ) ? $argArrData['phone'] : '';
$teamSize = ( isset( $argArrData['team-size'] ) && !empty( $argArrData['team-size'] ) ) ? $argArrData['team-size'] : '';
$requirement    = ( isset( $_POST['requirement'] ) && !empty( $_POST['requirement'] ) ) ? $_POST['requirement'] : '';

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

$owner_id = 767861418;
$postData = 'refresh_token='.REFRESH_TOKEN.'&client_id='.CLIENT_ID.'&client_secret='.CLIENT_SECRET.'&grant_type='.'refresh_token';
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
        'Phone'         => $phoneNo,
        'Lead_Source'   => $lead_source,
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
        
        $sJSON = str_replace('{','[{',$sJSON);
        $sJSON = str_replace('}','}]',$sJSON);
        $postLeadData = '{"data":' . $sJSON . '}';
        //echo $postLeadData; die;
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
        
        /*print_r($response); 
        die;*/
        
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
           
        }

    }
}

function getCountryPcode(){
  $pcodes = [
    '44' => 'UK (+44)',
    '1' => 'USA (+1)',
    '213' => 'Algeria (+213)',
    '376' => 'Andorra (+376)',
    '244' => 'Angola (+244)',
    '1264' => 'Anguilla (+1264)',
    '1268' => 'Antigua & Barbuda (+1268)',
    '54' => 'Argentina (+54)',
    '374' => 'Armenia (+374)',
    '297' => 'Aruba (+297)',
    '61' => 'Australia (+61)',
    '43' => 'Austria (+43)',
    '994' => 'Azerbaijan (+994)',
    '1242' => 'Bahamas (+1242)',
    '973' => 'Bahrain (+973)',
    '880' => 'Bangladesh (+880)',
    '1246' => 'Barbados (+1246)',
    '375' => 'Belarus (+375)',
    '32' => 'Belgium (+32)',
    '501' => 'Belize (+501)',
    '229' => 'Benin (+229)',
    '1441' => 'Bermuda (+1441)',
    '975' => 'Bhutan (+975)',
    '591' => 'Bolivia (+591)',
    '387' => 'Bosnia Herzegovina (+387)',
    '267' => 'Botswana (+267)',
    '55' => 'Brazil (+55)',
    '673' => 'Brunei (+673)',
    '359' => 'Bulgaria (+359)',
    '226' => 'Burkina Faso (+226)',
    '257' => 'Burundi (+257)',
    '855' => 'Cambodia (+855)',
    '237' => 'Cameroon (+237)',
    '1' => 'Canada (+1)',
    '238' => 'Cape Verde Islands (+238)',
    '1345' => 'Cayman Islands (+1345)',
    '236' => 'Central African Republic (+236)',
    '56' => 'Chile (+56)',
    '86' => 'China (+86)',
    '57' => 'Colombia (+57)',
    '269' => 'Comoros (+269)',
    '242' => 'Congo (+242)',
    '682' => 'Cook Islands (+682)',
    '506' => 'Costa Rica (+506)',
    '385' => 'Croatia (+385)',
    '53' => 'Cuba (+53)',
    '90392' => 'Cyprus North (+90392)',
    '357' => 'Cyprus South (+357)',
    '42' => 'Czech Republic (+42)',
    '45' => 'Denmark (+45)',
    '253' => 'Djibouti (+253)',
    '1809' => 'Dominica (+1809)',
    '1809' => 'Dominican Republic (+1809)',
    '593' => 'Ecuador (+593)',
    '20' => 'Egypt (+20)',
    '503' => 'El Salvador (+503)',
    '240' => 'Equatorial Guinea (+240)',
    '291' => 'Eritrea (+291)',
    '372' => 'Estonia (+372)',
    '251' => 'Ethiopia (+251)',
    '500' => 'Falkland Islands (+500)',
    '298' => 'Faroe Islands (+298)',
    '679' => 'Fiji (+679)',
    '358' => 'Finland (+358)',
    '33' => 'France (+33)',
    '594' => 'French Guiana (+594)',
    '689' => 'French Polynesia (+689)',
    '241' => 'Gabon (+241)',
    '220' => 'Gambia (+220)',
    '7880' => 'Georgia (+7880)',
    '49' => 'Germany (+49)',
    '233' => 'Ghana (+233)',
    '350' => 'Gibraltar (+350)',
    '30' => 'Greece (+30)',
    '299' => 'Greenland (+299)',
    '1473' => 'Grenada (+1473)',
    '590' => 'Guadeloupe (+590)',
    '671' => 'Guam (+671)',
    '502' => 'Guatemala (+502)',
    '224' => 'Guinea (+224)',
    '245' => 'Guinea - Bissau (+245)',
    '592' => 'Guyana (+592)',
    '509' => 'Haiti (+509)',
    '504' => 'Honduras (+504)',
    '852' => 'Hong Kong (+852)',
    '36' => 'Hungary (+36)',
    '354' => 'Iceland (+354)',
    '91' => 'India (+91)',
    '62' => 'Indonesia (+62)',
    '98' => 'Iran (+98)',
    '964' => 'Iraq (+964)',
    '353' => 'Ireland (+353)',
    '972' => 'Israel (+972)',
    '39' => 'Italy (+39)',
    '1876' => 'Jamaica (+1876)',
    '81' => 'Japan (+81)',
    '962' => 'Jordan (+962)',
    '7' => 'Kazakhstan (+7)',
    '254' => 'Kenya (+254)',
    '686' => 'Kiribati (+686)',
    '850' => 'Korea North (+850)',
    '82' => 'Korea South (+82)',
    '965' => 'Kuwait (+965)',
    '996' => 'Kyrgyzstan (+996)',
    '856' => 'Laos (+856)',
    '371' => 'Latvia (+371)',
    '961' => 'Lebanon (+961)',
    '266' => 'Lesotho (+266)',
    '231' => 'Liberia (+231)',
    '218' => 'Libya (+218)',
    '417' => 'Liechtenstein (+417)',
    '370' => 'Lithuania (+370)',
    '352' => 'Luxembourg (+352)',
    '853' => 'Macao (+853)',
    '389' => 'Macedonia (+389)',
    '261' => 'Madagascar (+261)',
    '265' => 'Malawi (+265)',
    '60' => 'Malaysia (+60)',
    '960' => 'Maldives (+960)',
    '223' => 'Mali (+223)',
    '356' => 'Malta (+356)',
    '692' => 'Marshall Islands (+692)',
    '596' => 'Martinique (+596)',
    '222' => 'Mauritania (+222)',
    '269' => 'Mayotte (+269)',
    '52' => 'Mexico (+52)',
    '691' => 'Micronesia (+691)',
    '373' => 'Moldova (+373)',
    '377' => 'Monaco (+377)',
    '976' => 'Mongolia (+976)',
    '1664' => 'Montserrat (+1664)',
    '212' => 'Morocco (+212)',
    '258' => 'Mozambique (+258)',
    '95' => 'Myanmar (+95)',
    '264' => 'Namibia (+264)',
    '674' => 'Nauru (+674)',
    '977' => 'Nepal (+977)',
    '31' => 'Netherlands (+31)',
    '687' => 'New Caledonia (+687)',
    '64' => 'New Zealand (+64)',
    '505' => 'Nicaragua (+505)',
    '227' => 'Niger (+227)',
    '234' => 'Nigeria (+234)',
    '683' => 'Niue (+683)',
    '672' => 'Norfolk Islands (+672)',
    '670' => 'Northern Marianas (+670)',
    '47' => 'Norway (+47)',
    '968' => 'Oman (+968)',
    '680' => 'Palau (+680)',
    '507' => 'Panama (+507)',
    '675' => 'Papua New Guinea (+675)',
    '595' => 'Paraguay (+595)',
    '51' => 'Peru (+51)',
    '63' => 'Philippines (+63)',
    '48' => 'Poland (+48)',
    '351' => 'Portugal (+351)',
    '1787' => 'Puerto Rico (+1787)',
    '974' => 'Qatar (+974)',
    '262' => 'Reunion (+262)',
    '40' => 'Romania (+40)',
    '7' => 'Russia (+7)',
    '250' => 'Rwanda (+250)',
    '378' => 'San Marino (+378)',
    '239' => 'Sao Tome & Principe (+239)',
    '966' => 'Saudi Arabia (+966)',
    '221' => 'Senegal (+221)',
    '381' => 'Serbia (+381)',
    '248' => 'Seychelles (+248)',
    '232' => 'Sierra Leone (+232)',
    '65' => 'Singapore (+65)',
    '421' => 'Slovak Republic (+421)',
    '386' => 'Slovenia (+386)',
    '677' => 'Solomon Islands (+677)',
    '252' => 'Somalia (+252)',
    '27' => 'South Africa (+27)',
    '34' => 'Spain (+34)',
    '94' => 'Sri Lanka (+94)',
    '290' => 'St. Helena (+290)',
    '1869' => 'St. Kitts (+1869)',
    '1758' => 'St. Lucia (+1758)',
    '249' => 'Sudan (+249)',
    '597' => 'Suriname (+597)',
    '268' => 'Swaziland (+268)',
    '46' => 'Sweden (+46)',
    '41' => 'Switzerland (+41)',
    '963' => 'Syria (+963)',
    '886' => 'Taiwan (+886)',
    '7' => 'Tajikstan (+7)',
    '66' => 'Thailand (+66)',
    '228' => 'Togo (+228)',
    '676' => 'Tonga (+676)',
    '1868' => 'Trinidad & Tobago (+1868)',
    '216' => 'Tunisia (+216)',
    '90' => 'Turkey (+90)',
    '7' => 'Turkmenistan (+7)',
    '993' => 'Turkmenistan (+993)',
    '1649' => 'Turks & Caicos Islands (+1649)',
    '688' => 'Tuvalu (+688)',
    '256' => 'Uganda (+256)',
    '380' => 'Ukraine (+380)',
    '971' => 'United Arab Emirates (+971)',
    '598' => 'Uruguay (+598)',
    '7' => 'Uzbekistan (+7)',
    '678' => 'Vanuatu (+678)',
    '379' => 'Vatican City (+379)',
    '58' => 'Venezuela (+58)',
    '84' => 'Vietnam (+84)',
    '84' => 'Virgin Islands - British (+1284)',
    '84' => 'Virgin Islands - US (+1340)',
    '681' => 'Wallis & Futuna (+681)',
    '969' => 'Yemen (North)(+969)',
    '967' => 'Yemen (South)(+967)',
    '260' => 'Zambia (+260)',
    '263' => 'Zimbabwe (+263)',
  ];
  return $pcodes;
  }


if(
    isset( $_SERVER['HTTP_REFERER'] ) && 
    !empty( $_SERVER['HTTP_REFERER'] )
){
    $ref        = $_SERVER['HTTP_REFERER'];
    $refData    = parse_url($ref);
    if( (strpos($refData['host'], "workstatus.io") === false) ){
        $_SESSION['referer']  = $_SERVER['HTTP_REFERER']; 
    }
}
?>
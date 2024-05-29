<?php
@session_start();
function globalCountryListAry( $dcode ){
    $country_list = array(
        array("name" => "Afghanistan","code" => "AF","phone" => 93),
        array("name" => "Aland Islands","code" => "AX","phone" => 358),
        array("name" => "Albania","code" => "AL","phone" => 355),
        array("name" => "Algeria","code" => "DZ","phone" => 213),
        array("name" => "American Samoa","code" => "AS","phone" => 1684),
        array("name" => "Andorra","code" => "AD","phone" => 376),
        array("name" => "Angola","code" => "AO","phone" => 244),
        array("name" => "Anguilla","code" => "AI","phone" => 1264),
        array("name" => "Antarctica","code" => "AQ","phone" => 672),
        array("name" => "Antigua and Barbuda","code" => "AG","phone" => 1268),
        array("name" => "Argentina","code" => "AR","phone" => 54),
        array("name" => "Armenia","code" => "AM","phone" => 374),
        array("name" => "Aruba","code" => "AW","phone" => 297),
        array("name" => "Australia","code" => "AU","phone" => 61),
        array("name" => "Austria","code" => "AT","phone" => 43),
        array("name" => "Azerbaijan","code" => "AZ","phone" => 994),
        array("name" => "Bahamas","code" => "BS","phone" => 1242),
        array("name" => "Bahrain","code" => "BH","phone" => 973),
        array("name" => "Bangladesh","code" => "BD","phone" => 880),
        array("name" => "Barbados","code" => "BB","phone" => 1246),
        array("name" => "Belarus","code" => "BY","phone" => 375),
        array("name" => "Belgium","code" => "BE","phone" => 32),
        array("name" => "Belize","code" => "BZ","phone" => 501),
        array("name" => "Benin","code" => "BJ","phone" => 229),
        array("name" => "Bermuda","code" => "BM","phone" => 1441),
        array("name" => "Bhutan","code" => "BT","phone" => 975),
        array("name" => "Bolivia","code" => "BO","phone" => 591),
        array("name" => "Bonaire, Sint Eustatius and Saba","code" => "BQ","phone" => 599),
        array("name" => "Bosnia and Herzegovina","code" => "BA","phone" => 387),
        array("name" => "Botswana","code" => "BW","phone" => 267),
        array("name" => "Bouvet Island","code" => "BV","phone" => 55),
        array("name" => "Brazil","code" => "BR","phone" => 55),
        array("name" => "British Indian Ocean Territory","code" => "IO","phone" => 246),
        array("name" => "Brunei Darussalam","code" => "BN","phone" => 673),
        array("name" => "Bulgaria","code" => "BG","phone" => 359),
        array("name" => "Burkina Faso","code" => "BF","phone" => 226),
        array("name" => "Burundi","code" => "BI","phone" => 257),
        array("name" => "Cambodia","code" => "KH","phone" => 855),
        array("name" => "Cameroon","code" => "CM","phone" => 237),
        array("name" => "Canada","code" => "CA","phone" => 1),
        array("name" => "Cape Verde","code" => "CV","phone" => 238),
        array("name" => "Cayman Islands","code" => "KY","phone" => 1345),
        array("name" => "Central African Republic","code" => "CF","phone" => 236),
        array("name" => "Chad","code" => "TD","phone" => 235),
        array("name" => "Chile","code" => "CL","phone" => 56),
        array("name" => "China","code" => "CN","phone" => 86),
        array("name" => "Christmas Island","code" => "CX","phone" => 61),
        array("name" => "Cocos (Keeling) Islands","code" => "CC","phone" => 672),
        array("name" => "Colombia","code" => "CO","phone" => 57),
        array("name" => "Comoros","code" => "KM","phone" => 269),
        array("name" => "Congo","code" => "CG","phone" => 242),
        array("name" => "Congo, Democratic Republic of the Congo","code" => "CD","phone" => 242),
        array("name" => "Cook Islands","code" => "CK","phone" => 682),
        array("name" => "Costa Rica","code" => "CR","phone" => 506),
        array("name" => "Cote D'Ivoire","code" => "CI","phone" => 225),
        array("name" => "Croatia","code" => "HR","phone" => 385),
        array("name" => "Cuba","code" => "CU","phone" => 53),
        array("name" => "Curacao","code" => "CW","phone" => 599),
        array("name" => "Cyprus","code" => "CY","phone" => 357),
        array("name" => "Czech Republic","code" => "CZ","phone" => 420),
        array("name" => "Denmark","code" => "DK","phone" => 45),
        array("name" => "Djibouti","code" => "DJ","phone" => 253),
        array("name" => "Dominica","code" => "DM","phone" => 1767),
        array("name" => "Dominican Republic","code" => "DO","phone" => 1809),
        array("name" => "Ecuador","code" => "EC","phone" => 593),
        array("name" => "Egypt","code" => "EG","phone" => 20),
        array("name" => "El Salvador","code" => "SV","phone" => 503),
        array("name" => "Equatorial Guinea","code" => "GQ","phone" => 240),
        array("name" => "Eritrea","code" => "ER","phone" => 291),
        array("name" => "Estonia","code" => "EE","phone" => 372),
        array("name" => "Ethiopia","code" => "ET","phone" => 251),
        array("name" => "Falkland Islands (Malvinas)","code" => "FK","phone" => 500),
        array("name" => "Faroe Islands","code" => "FO","phone" => 298),
        array("name" => "Fiji","code" => "FJ","phone" => 679),
        array("name" => "Finland","code" => "FI","phone" => 358),
        array("name" => "France","code" => "FR","phone" => 33),
        array("name" => "French Guiana","code" => "GF","phone" => 594),
        array("name" => "French Polynesia","code" => "PF","phone" => 689),
        array("name" => "French Southern Territories","code" => "TF","phone" => 262),
        array("name" => "Gabon","code" => "GA","phone" => 241),
        array("name" => "Gambia","code" => "GM","phone" => 220),
        array("name" => "Georgia","code" => "GE","phone" => 995),
        array("name" => "Germany","code" => "DE","phone" => 49),
        array("name" => "Ghana","code" => "GH","phone" => 233),
        array("name" => "Gibraltar","code" => "GI","phone" => 350),
        array("name" => "Greece","code" => "GR","phone" => 30),
        array("name" => "Greenland","code" => "GL","phone" => 299),
        array("name" => "Grenada","code" => "GD","phone" => 1473),
        array("name" => "Guadeloupe","code" => "GP","phone" => 590),
        array("name" => "Guam","code" => "GU","phone" => 1671),
        array("name" => "Guatemala","code" => "GT","phone" => 502),
        array("name" => "Guernsey","code" => "GG","phone" => 44),
        array("name" => "Guinea","code" => "GN","phone" => 224),
        array("name" => "Guinea-Bissau","code" => "GW","phone" => 245),
        array("name" => "Guyana","code" => "GY","phone" => 592),
        array("name" => "Haiti","code" => "HT","phone" => 509),
        array("name" => "Heard Island and McDonald Islands","code" => "HM","phone" => 0),
        array("name" => "Holy See (Vatican City State)","code" => "VA","phone" => 39),
        array("name" => "Honduras","code" => "HN","phone" => 504),
        array("name" => "Hong Kong","code" => "HK","phone" => 852),
        array("name" => "Hungary","code" => "HU","phone" => 36),
        array("name" => "Iceland","code" => "IS","phone" => 354),
        array("name" => "India","code" => "IN","phone" => 91),
        array("name" => "Indonesia","code" => "ID","phone" => 62),
        array("name" => "Iran, Islamic Republic of","code" => "IR","phone" => 98),
        array("name" => "Iraq","code" => "IQ","phone" => 964),
        array("name" => "Ireland","code" => "IE","phone" => 353),
        array("name" => "Isle of Man","code" => "IM","phone" => 44),
        array("name" => "Israel","code" => "IL","phone" => 972),
        array("name" => "Italy","code" => "IT","phone" => 39),
        array("name" => "Jamaica","code" => "JM","phone" => 1876),
        array("name" => "Japan","code" => "JP","phone" => 81),
        array("name" => "Jersey","code" => "JE","phone" => 44),
        array("name" => "Jordan","code" => "JO","phone" => 962),
        array("name" => "Kazakhstan","code" => "KZ","phone" => 7),
        array("name" => "Kenya","code" => "KE","phone" => 254),
        array("name" => "Kiribati","code" => "KI","phone" => 686),
        array("name" => "Korea, Democratic People's Republic of","code" => "KP","phone" => 850),
        array("name" => "Korea, Republic of","code" => "KR","phone" => 82),
        array("name" => "Kosovo","code" => "XK","phone" => 383),
        array("name" => "Kuwait","code" => "KW","phone" => 965),
        array("name" => "Kyrgyzstan","code" => "KG","phone" => 996),
        array("name" => "Lao People's Democratic Republic","code" => "LA","phone" => 856),
        array("name" => "Latvia","code" => "LV","phone" => 371),
        array("name" => "Lebanon","code" => "LB","phone" => 961),
        array("name" => "Lesotho","code" => "LS","phone" => 266),
        array("name" => "Liberia","code" => "LR","phone" => 231),
        array("name" => "Libyan Arab Jamahiriya","code" => "LY","phone" => 218),
        array("name" => "Liechtenstein","code" => "LI","phone" => 423),
        array("name" => "Lithuania","code" => "LT","phone" => 370),
        array("name" => "Luxembourg","code" => "LU","phone" => 352),
        array("name" => "Macao","code" => "MO","phone" => 853),
        array("name" => "Macedonia, the Former Yugoslav Republic of","code" => "MK","phone" => 389),
        array("name" => "Madagascar","code" => "MG","phone" => 261),
        array("name" => "Malawi","code" => "MW","phone" => 265),
        array("name" => "Malaysia","code" => "MY","phone" => 60),
        array("name" => "Maldives","code" => "MV","phone" => 960),
        array("name" => "Mali","code" => "ML","phone" => 223),
        array("name" => "Malta","code" => "MT","phone" => 356),
        array("name" => "Marshall Islands","code" => "MH","phone" => 692),
        array("name" => "Martinique","code" => "MQ","phone" => 596),
        array("name" => "Mauritania","code" => "MR","phone" => 222),
        array("name" => "Mauritius","code" => "MU","phone" => 230),
        array("name" => "Mayotte","code" => "YT","phone" => 262),
        array("name" => "Mexico","code" => "MX","phone" => 52),
        array("name" => "Micronesia, Federated States of","code" => "FM","phone" => 691),
        array("name" => "Moldova, Republic of","code" => "MD","phone" => 373),
        array("name" => "Monaco","code" => "MC","phone" => 377),
        array("name" => "Mongolia","code" => "MN","phone" => 976),
        array("name" => "Montenegro","code" => "ME","phone" => 382),
        array("name" => "Montserrat","code" => "MS","phone" => 1664),
        array("name" => "Morocco","code" => "MA","phone" => 212),
        array("name" => "Mozambique","code" => "MZ","phone" => 258),
        array("name" => "Myanmar","code" => "MM","phone" => 95),
        array("name" => "Namibia","code" => "NA","phone" => 264),
        array("name" => "Nauru","code" => "NR","phone" => 674),
        array("name" => "Nepal","code" => "NP","phone" => 977),
        array("name" => "Netherlands","code" => "NL","phone" => 31),
        array("name" => "Netherlands Antilles","code" => "AN","phone" => 599),
        array("name" => "New Caledonia","code" => "NC","phone" => 687),
        array("name" => "New Zealand","code" => "NZ","phone" => 64),
        array("name" => "Nicaragua","code" => "NI","phone" => 505),
        array("name" => "Niger","code" => "NE","phone" => 227),
        array("name" => "Nigeria","code" => "NG","phone" => 234),
        array("name" => "Niue","code" => "NU","phone" => 683),
        array("name" => "Norfolk Island","code" => "NF","phone" => 672),
        array("name" => "Northern Mariana Islands","code" => "MP","phone" => 1670),
        array("name" => "Norway","code" => "NO","phone" => 47),
        array("name" => "Oman","code" => "OM","phone" => 968),
        array("name" => "Pakistan","code" => "PK","phone" => 92),
        array("name" => "Palau","code" => "PW","phone" => 680),
        array("name" => "Palestinian Territory, Occupied","code" => "PS","phone" => 970),
        array("name" => "Panama","code" => "PA","phone" => 507),
        array("name" => "Papua New Guinea","code" => "PG","phone" => 675),
        array("name" => "Paraguay","code" => "PY","phone" => 595),
        array("name" => "Peru","code" => "PE","phone" => 51),
        array("name" => "Philippines","code" => "PH","phone" => 63),
        array("name" => "Pitcairn","code" => "PN","phone" => 64),
        array("name" => "Poland","code" => "PL","phone" => 48),
        array("name" => "Portugal","code" => "PT","phone" => 351),
        array("name" => "Puerto Rico","code" => "PR","phone" => 1787),
        array("name" => "Qatar","code" => "QA","phone" => 974),
        array("name" => "Reunion","code" => "RE","phone" => 262),
        array("name" => "Romania","code" => "RO","phone" => 40),
        array("name" => "Russian Federation","code" => "RU","phone" => 7),
        array("name" => "Rwanda","code" => "RW","phone" => 250),
        array("name" => "Saint Barthelemy","code" => "BL","phone" => 590),
        array("name" => "Saint Helena","code" => "SH","phone" => 290),
        array("name" => "Saint Kitts and Nevis","code" => "KN","phone" => 1869),
        array("name" => "Saint Lucia","code" => "LC","phone" => 1758),
        array("name" => "Saint Martin","code" => "MF","phone" => 590),
        array("name" => "Saint Pierre and Miquelon","code" => "PM","phone" => 508),
        array("name" => "Saint Vincent and the Grenadines","code" => "VC","phone" => 1784),
        array("name" => "Samoa","code" => "WS","phone" => 684),
        array("name" => "San Marino","code" => "SM","phone" => 378),
        array("name" => "Sao Tome and Principe","code" => "ST","phone" => 239),
        array("name" => "Saudi Arabia","code" => "SA","phone" => 966),
        array("name" => "Senegal","code" => "SN","phone" => 221),
        array("name" => "Serbia","code" => "RS","phone" => 381),
        array("name" => "Serbia and Montenegro","code" => "CS","phone" => 381),
        array("name" => "Seychelles","code" => "SC","phone" => 248),
        array("name" => "Sierra Leone","code" => "SL","phone" => 232),
        array("name" => "Singapore","code" => "SG","phone" => 65),
        array("name" => "St Martin","code" => "SX","phone" => 721),
        array("name" => "Slovakia","code" => "SK","phone" => 421),
        array("name" => "Slovenia","code" => "SI","phone" => 386),
        array("name" => "Solomon Islands","code" => "SB","phone" => 677),
        array("name" => "Somalia","code" => "SO","phone" => 252),
        array("name" => "South Africa","code" => "ZA","phone" => 27),
        array("name" => "South Georgia and the South Sandwich Islands","code" => "GS","phone" => 500),
        array("name" => "South Sudan","code" => "SS","phone" => 211),
        array("name" => "Spain","code" => "ES","phone" => 34),
        array("name" => "Sri Lanka","code" => "LK","phone" => 94),
        array("name" => "Sudan","code" => "SD","phone" => 249),
        array("name" => "Suriname","code" => "SR","phone" => 597),
        array("name" => "Svalbard and Jan Mayen","code" => "SJ","phone" => 47),
        array("name" => "Swaziland","code" => "SZ","phone" => 268),
        array("name" => "Sweden","code" => "SE","phone" => 46),
        array("name" => "Switzerland","code" => "CH","phone" => 41),
        array("name" => "Syrian Arab Republic","code" => "SY","phone" => 963),
        array("name" => "Taiwan, Province of China","code" => "TW","phone" => 886),
        array("name" => "Tajikistan","code" => "TJ","phone" => 992),
        array("name" => "Tanzania, United Republic of","code" => "TZ","phone" => 255),
        array("name" => "Thailand","code" => "TH","phone" => 66),
        array("name" => "Timor-Leste","code" => "TL","phone" => 670),
        array("name" => "Togo","code" => "TG","phone" => 228),
        array("name" => "Tokelau","code" => "TK","phone" => 690),
        array("name" => "Tonga","code" => "TO","phone" => 676),
        array("name" => "Trinidad and Tobago","code" => "TT","phone" => 1868),
        array("name" => "Tunisia","code" => "TN","phone" => 216),
        array("name" => "Turkey","code" => "TR","phone" => 90),
        array("name" => "Turkmenistan","code" => "TM","phone" => 7370),
        array("name" => "Turks and Caicos Islands","code" => "TC","phone" => 1649),
        array("name" => "Tuvalu","code" => "TV","phone" => 688),
        array("name" => "Uganda","code" => "UG","phone" => 256),
        array("name" => "Ukraine","code" => "UA","phone" => 380),
        array("name" => "United Arab Emirates","code" => "AE","phone" => 971),
        array("name" => "United Kingdom","code" => "GB","phone" => 44),
        array("name" => "United States","code" => "US","phone" => 1),
        array("name" => "United States Minor Outlying Islands","code" => "UM","phone" => 1),
        array("name" => "Uruguay","code" => "UY","phone" => 598),
        array("name" => "Uzbekistan","code" => "UZ","phone" => 998),
        array("name" => "Vanuatu","code" => "VU","phone" => 678),
        array("name" => "Venezuela","code" => "VE","phone" => 58),
        array("name" => "Viet Nam","code" => "VN","phone" => 84),
        array("name" => "Virgin Islands, British","code" => "VG","phone" => 1284),
        array("name" => "Virgin Islands, U.s.","code" => "VI","phone" => 1340),
        array("name" => "Wallis and Futuna","code" => "WF","phone" => 681),
        array("name" => "Western Sahara","code" => "EH","phone" => 212),
        array("name" => "Yemen","code" => "YE","phone" => 967),
        array("name" => "Zambia","code" => "ZM","phone" => 260),
        array("name" => "Zimbabwe","code" => "ZW","phone" => 263)
    );
    $dialCode = str_replace("+", "", $dcode);
    $key = array_search( $dialCode, array_column($country_list, 'phone') );    
    if( $key ){
        return $country_list[$key]['name'];
    }else{
        return false;
    }    
}

function getConfigUserIP(){
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

function getCTAstatus(){
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
    
    $isLocation = file_get_contents('https://ipinfo.io/'.getUserIP().'?token=58f4668796ee68');
    $isLocation = json_decode($isLocation);
    if( $isLocation ){
        /*
        0 - free 14 days trial
        1 - free signup
        2 - Hide this Button        
        */
        $conCode = (isset($isLocation->country) && !empty($isLocation->country)) ? $isLocation->country : 'DEFAULT';
        //if( isset( $isLocation->country ) && !empty( $isLocation->country ) ){
        $jsonData   = file_get_contents( $jsonDir );
        $jsonData   = json_decode( $jsonData );
        /*        
        echo '<pre>';
        print_r($jsonData); die;
        */
        if( isset( $_GET['con-code'] ) && !empty( $_GET['con-code'] ) ){
            $conCode = $_GET['con-code'];
        }
        foreach( $jsonData as $data ){
            if( $data->country_code == $conCode ){
                //$data->button_type = 1; //Please change value here.
                if( $data->button_type == 0 ){
                return array( 'show_this' => true, 'country' => $isLocation->country, 'cta_text' => "Start Free Trial", 
                    'pid' => $data->plan_id, 'type' => $data->type );
                }elseif( $data->button_type == 1 ){
                return array( 'show_this' => true, 'country' => $isLocation->country, 'cta_text' => "Free Signup", 'pid' => $data->plan_id, 'type' => $data->type );
                }elseif( $data->button_type == 2 ){
                return array( 'show_this' => false, 'country' => $isLocation->country, 'cta_text' => "" );
                }
            }    
        }
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

$objArray['site_url'] = "https://www.workstatus.io";
if( isset( $_SERVER['HTTP_HOST'] ) && ($_SERVER['HTTP_HOST'] == "localhost") ){
    $objArray['site_url'] = "http://localhost/workstatus"; 
}elseif( isset( $_SERVER['HTTP_HOST'] ) && ($_SERVER['HTTP_HOST'] == "https://beta.vinove.com/workstatus.io") ){
    $objArray['site_url'] = "https://beta.vinove.com/workstatus.io";
}elseif( isset( $_SERVER['HTTP_HOST'] ) && ($_SERVER['HTTP_HOST'] == "beta.vinove.com") ){
    $objArray['site_url'] = "https://beta.vinove.com/workstatus.io";
}
define( 'SITE_URL', $objArray['site_url'] );

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

if( isset($_SESSION['referer']) && !empty($_SESSION['referer']) ){
    $RegLink .= (parse_url($RegLink, PHP_URL_QUERY)) ? "&ref=".$_SESSION['referer'] : "?ref=".$_SESSION['referer'];
    $LogLink .= (parse_url($LogLink, PHP_URL_QUERY)) ? "&ref=".$_SESSION['referer'] : "?ref=".$_SESSION['referer'];
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
define('CLIENT_ID','1000.ED227T6HEN6WAZRH1O48BU5VI96MVR');
define('CLIENT_SECRET','c0fe2e3c254b4d2d7851267acf6b62bce66deead0d');
define('ACCESS_TOKEN','');
define('REFRESH_TOKEN','1000.4a964cbd2983c2dd57da83472dd0e96d.c0c7a5b9cb27092b71e2d6687c140dda');

define('CL_LOGFILE', '/home/workstatus-io/public_html/log/crm.log');
function dupLeadNote( $varAccessToken, $lead_id, $requirement ){
    date_default_timezone_set('Asia/Kolkata'); // Set the timezone to IST
    $currentDateTime = new DateTime();
    $formattedDate = $currentDateTime->format('jS F Y \a\t g:i A');
    $notesRequest = 'https://www.zohoapis.com/crm/v2/Leads/'.$lead_id.'/Notes';
    $notes_data = [
    'Note_Content'  => 'New Inquiry Received from Workstatus on '.$formattedDate.'. Content below:'."\n ".$requirement,
    'se_module'     => 'Leads'
    ];
    $nJSON  = json_encode( $notes_data );
    $nJSON  = str_replace('{','[{',$nJSON);
    $nJSON  = str_replace('}','}]',$nJSON);
    $postNotesData = '{"data":' . $nJSON . '}';

    $curl   = curl_init();
    curl_setopt_array($curl, array(
    CURLOPT_URL => $notesRequest,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION    => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST   => "POST",
    CURLOPT_POSTFIELDS      => $postNotesData,
    CURLOPT_HTTPHEADER      => array( "authorization: Zoho-oauthtoken $varAccessToken", "cache-control: no-cache",
    "content-type: application/json"),
    ));

    $response   = curl_exec($curl);
    $err        = curl_error($curl);
    if( !$err ){
        $response   = json_decode( $response );
        $file       = fopen(CL_LOGFILE,"a");
        fwrite( $file, PHP_EOL."Duplicate Lead Notes : ".print_r($response,1) );
        fclose( $file );
    }else{
        $file       = fopen(CL_LOGFILE,"a");
        fwrite( $file, "Error Notes : ".$err );
        fclose( $file );    
    }
    curl_close( $curl );
}

function getzoholeads($argArrData, $lead_status = "Not Contacted"){ 
//echo '<pre>'; print_r($argArrData); die;    
$fname = ( isset( $argArrData['fname'] ) && !empty( $argArrData['fname'] ) ) ? $argArrData['fname'] : '';
$lname = ( isset( $argArrData['lname'] ) && !empty( $argArrData['lname'] ) ) ? $argArrData['lname'] : '';
$name  = $fname." ".$lname;
$email = ( isset( $argArrData['email'] ) && !empty( $argArrData['email'] ) ) ? $argArrData['email'] : '';
$company = ( isset( $argArrData['company'] ) && !empty( $argArrData['company'] ) ) ? $argArrData['company'] : '';
$pcode = ( isset( $argArrData['countrycode'] ) && !empty( $argArrData['countrycode'] ) ) ? $argArrData['countrycode'] : '';
$phone = ( isset( $argArrData['phone'] ) && !empty( $argArrData['phone'] ) ) ? $argArrData['phone'] : '';
$teamSize = ( isset( $argArrData['team-size'] ) && !empty( $argArrData['team-size'] ) ) ? $argArrData['team-size'] : '';
$requirement    = ( isset( $argArrData['requirement'] ) && !empty( $argArrData['requirement'] ) ) ? $argArrData['requirement'] : '';
$user_country   = (isset($argArrData['cprefix']) && !empty($argArrData['cprefix'])) ? globalCountryListAry($argArrData['cprefix']) : '';

$pageurl = ( isset( $argArrData['pageurl'] ) && !empty( $argArrData['pageurl'] ) ) ? $argArrData['pageurl'] : '';
$tracking_ip = ( isset( $argArrData['tracking_ip'] ) && !empty( $argArrData['tracking_ip'] ) ) ? $argArrData['tracking_ip'] : '';
$referalurl = ( isset( $argArrData['referalurl'] ) && !empty( $argArrData['referalurl'] ) ) ? $argArrData['referalurl'] : '';

$ppCode   = (isset($argArrData['cprefix']) && !empty($argArrData['cprefix'])) ? $argArrData['cprefix'] : '';

//$phoneNo = '+'.$pcode.$phone;
$phoneNo = '+'.$ppCode.$phone;
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
    $lead_source = (isset($argArrData['is-blog']) && ($argArrData['is-blog'] == "1")) ? "Website Blog" : "website";
}

if( !empty( $referalurl ) && empty( $utm_src ) ){
    if( strstr($referalurl,"google") ){
    $lead_source = "SEO: Organic";    
    }
}
//$owner_id = 767861418; OLD
//$owner_id = 809367812; // Sahashi
$owner_id = 681646179; // Mohit
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
    $varAccessToken = $arrRefreshTokResponse['access_token'];
    $err = curl_error($curl);
    curl_close( $curl );
    if( !$err ){
        $curl = curl_init();
        $sJSON = json_encode(array(
        'First_Name'    => $fname,
        'Last_Name'     => $lname,
        'Email'         => $email,
        'Company'       => $company,
        'Country_1'     => $user_country,
        'Phone'         => $phoneNo,
        'Lead_Source'   => $lead_source, //$varLeadSource,
        'Lead_Status'   => $lead_status,
        'Is_Duplicate'  => "No",
        'SQL'           => "Yes",
        'Owner'         => $owner_id,
        'Description'   => $requirement, //$zohoDesc
        'IP_Address1'   => getConfigUserIP(),
        'IP_Address'    => getConfigUserIP(),
        'UTM_Source'    => $utm_src,
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
        $response   = curl_exec( $curl );
        $response   = json_decode( $response );

        $file       = fopen(CL_LOGFILE,"a");
        fwrite( $file, PHP_EOL."ZOHO CRM #".$email.print_r($response,1) );
        fclose( $file );
        
        if( isset( $response->data[0] ) &&  ($response->data[0]->code == "DUPLICATE_DATA") ) :
            $lead_id = ( isset( $response->data[0] ) ) ? $response->data[0]->details->id : 0;
            if( $lead_id !== 0 ){
                $zoho_data = array(
                'id'                    => $lead_id,
                'Lead_Status'           => $lead_status,
                'Is_Duplicate'          => "Yes"
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
                dupLeadNote( $varAccessToken, $lead_id, $requirement );
                /*
                $file       = fopen("/home/workforestc/calendly-log/zoho-logs.txt","a");
                $zlead      = PHP_EOL.$email.":".print_r($response,1);
                fwrite( $file, $zlead );
                fclose( $file );
                */
            }           
        endif;
        $err = curl_error( $curl );
        curl_close($curl);
        if( !$err ){
            /*$file       = fopen("/home/workforestc/calendly-log/zoho-logs.txt","a");
            $zlead      = PHP_EOL.$email.":".print_r($response,1);
            fwrite( $file, $zlead );
            fclose( $file );*/
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

?>
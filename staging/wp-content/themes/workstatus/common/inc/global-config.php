<?php
/*
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
*/


function tempWsPhoneCode( $pcode ){ 
$pcode = str_replace(" ","", $pcode);
$array = [
  [
    "id"=> 1,
    "name"=> "Afghanistan",
    "dial_code"=> "+93",
    "code"=> "AF"
  ],
  [
    "id"=> 2,
    "name"=> "Albania",
    "dial_code"=> "+355",
    "code"=> "AL"
  ],
  [
    "id"=> 3,
    "name"=> "Algeria",
    "dial_code"=> "+213",
    "code"=> "DZ"
  ],
  [
    "id"=> 4,
    "name"=> "AmericanSamoa",
    "dial_code"=> "+1684",
    "code"=> "AS"
  ],
  [
    "id"=> 5,
    "name"=> "Andorra",
    "dial_code"=> "+376",
    "code"=> "AD"
  ],
  [
    "id"=> 6,
    "name"=> "Angola",
    "dial_code"=> "+244",
    "code"=> "AO"
  ],
  [
    "id"=> 7,
    "name"=> "Anguilla",
    "dial_code"=> "+1264",
    "code"=> "AI"
  ],
  [
    "id"=> 8,
    "name"=> "Antarctica",
    "dial_code"=> "+672",
    "code"=> "AQ"
  ],
  [
    "id"=> 9,
    "name"=> "Antigua and Barbuda",
    "dial_code"=> "+1268",
    "code"=> "AG"
  ],
  [
    "id"=> 10,
    "name"=> "Argentina",
    "dial_code"=> "+54",
    "code"=> "AR"
  ],
  [
    "id"=> 11,
    "name"=> "Armenia",
    "dial_code"=> "+374",
    "code"=> "AM"
  ],
  [
    "id"=> 12,
    "name"=> "Aruba",
    "dial_code"=> "+297",
    "code"=> "AW"
  ],
  [
    "id"=> 13,
    "name"=> "Australia",
    "dial_code"=> "+61",
    "code"=> "AU"
  ],
  [
    "id"=> 14,
    "name"=> "Austria",
    "dial_code"=> "+43",
    "code"=> "AT"
  ],
  [
    "id"=> 15,
    "name"=> "Azerbaijan",
    "dial_code"=> "+994",
    "code"=> "AZ"
  ],
  [
    "id"=> 16,
    "name"=> "Bahamas",
    "dial_code"=> "+1242",
    "code"=> "BS"
  ],
  [
    "id"=> 17,
    "name"=> "Bahrain",
    "dial_code"=> "+973",
    "code"=> "BH"
  ],
  [
    "id"=> 18,
    "name"=> "Bangladesh",
    "dial_code"=> "+880",
    "code"=> "BD"
  ],
  [
    "id"=> 19,
    "name"=> "Barbados",
    "dial_code"=> "+1246",
    "code"=> "BB"
  ],
  [
    "id"=> 20,
    "name"=> "Belarus",
    "dial_code"=> "+375",
    "code"=> "BY"
  ],
  [
    "id"=> 21,
    "name"=> "Belgium",
    "dial_code"=> "+32",
    "code"=> "BE"
  ],
  [
    "id"=> 22,
    "name"=> "Belize",
    "dial_code"=> "+501",
    "code"=> "BZ"
  ],
  [
    "id"=> 23,
    "name"=> "Benin",
    "dial_code"=> "+229",
    "code"=> "BJ"
  ],
  [
    "id"=> 24,
    "name"=> "Bermuda",
    "dial_code"=> "+1441",
    "code"=> "BM"
  ],
  [
    "id"=> 25,
    "name"=> "Bhutan",
    "dial_code"=> "+975",
    "code"=> "BT"
  ],
  [
    "id"=> 26,
    "name"=> "Bolivia, Plurinational State of",
    "dial_code"=> "+591",
    "code"=> "BO"
  ],
  [
    "id"=> 27,
    "name"=> "Bosnia and Herzegovina",
    "dial_code"=> "+387",
    "code"=> "BA"
  ],
  [
    "id"=> 28,
    "name"=> "Botswana",
    "dial_code"=> "+267",
    "code"=> "BW"
  ],
  [
    "id"=> 29,
    "name"=> "Brazil",
    "dial_code"=> "+55",
    "code"=> "BR"
  ],
  [
    "id"=> 30,
    "name"=> "British Indian Ocean Territory",
    "dial_code"=> "+246",
    "code"=> "IO"
  ],
  [
    "id"=> 31,
    "name"=> "Brunei Darussalam",
    "dial_code"=> "+673",
    "code"=> "BN"
  ],
  [
    "id"=> 32,
    "name"=> "Bulgaria",
    "dial_code"=> "+359",
    "code"=> "BG"
  ],
  [
    "id"=> 33,
    "name"=> "Burkina Faso",
    "dial_code"=> "+226",
    "code"=> "BF"
  ],
  [
    "id"=> 34,
    "name"=> "Burundi",
    "dial_code"=> "+257",
    "code"=> "BI"
  ],
  [
    "id"=> 35,
    "name"=> "Cambodia",
    "dial_code"=> "+855",
    "code"=> "KH"
  ],
  [
    "id"=> 36,
    "name"=> "Cameroon",
    "dial_code"=> "+237",
    "code"=> "CM"
  ],
  [
    "id"=> 37,
    "name"=> "Canada",
    "dial_code"=> "+1",
    "code"=> "CA"
  ],
  [
    "id"=> 38,
    "name"=> "Cape Verde",
    "dial_code"=> "+238",
    "code"=> "CV"
  ],
  [
    "id"=> 39,
    "name"=> "Cayman Islands",
    "dial_code"=> "+ 345",
    "code"=> "KY"
  ],
  [
    "id"=> 40,
    "name"=> "Central African Republic",
    "dial_code"=> "+236",
    "code"=> "CF"
  ],
  [
    "id"=> 41,
    "name"=> "Chad",
    "dial_code"=> "+235",
    "code"=> "TD"
  ],
  [
    "id"=> 42,
    "name"=> "Chile",
    "dial_code"=> "+56",
    "code"=> "CL"
  ],
  [
    "id"=> 43,
    "name"=> "China",
    "dial_code"=> "+86",
    "code"=> "CN"
  ],
  [
    "id"=> 44,
    "name"=> "Christmas Island",
    "dial_code"=> "+61",
    "code"=> "CX"
  ],
  [
    "id"=> 45,
    "name"=> "Cocos (Keeling) Islands",
    "dial_code"=> "+61",
    "code"=> "CC"
  ],
  [
    "id"=> 46,
    "name"=> "Colombia",
    "dial_code"=> "+57",
    "code"=> "CO"
  ],
  [
    "id"=> 47,
    "name"=> "Comoros",
    "dial_code"=> "+269",
    "code"=> "KM"
  ],
  [
    "id"=> 48,
    "name"=> "Congo",
    "dial_code"=> "+242",
    "code"=> "CG"
  ],
  [
    "id"=> 49,
    "name"=> "Congo, The Democratic Republic of the Congo",
    "dial_code"=> "+243",
    "code"=> "CD"
  ],
  [
    "id"=> 50,
    "name"=> "Cook Islands",
    "dial_code"=> "+682",
    "code"=> "CK"
  ],
  [
    "id"=> 51,
    "name"=> "Costa Rica",
    "dial_code"=> "+506",
    "code"=> "CR"
  ],
  [
    "id"=> 52,
    "name"=> "Croatia",
    "dial_code"=> "+385",
    "code"=> "HR"
  ],
  [
    "id"=> 53,
    "name"=> "Cuba",
    "dial_code"=> "+53",
    "code"=> "CU"
  ],
  [
    "id"=> 54,
    "name"=> "Cyprus",
    "dial_code"=> "+357",
    "code"=> "CY"
  ],
  [
    "id"=> 55,
    "name"=> "Czech Republic",
    "dial_code"=> "+420",
    "code"=> "CZ"
  ],
  [
    "id"=> 56,
    "name"=> "Denmark",
    "dial_code"=> "+45",
    "code"=> "DK"
  ],
  [
    "id"=> 57,
    "name"=> "Djibouti",
    "dial_code"=> "+253",
    "code"=> "DJ"
  ],
  [
    "id"=> 58,
    "name"=> "Dominica",
    "dial_code"=> "+1767",
    "code"=> "DM"
  ],
  [
    "id"=> 59,
    "name"=> "Dominican Republic",
    "dial_code"=> "+1849",
    "code"=> "DO"
  ],
  [
    "id"=> 60,
    "name"=> "Ecuador",
    "dial_code"=> "+593",
    "code"=> "EC"
  ],
  [
    "id"=> 61,
    "name"=> "Egypt",
    "dial_code"=> "+20",
    "code"=> "EG"
  ],
  [
    "id"=> 62,
    "name"=> "El Salvador",
    "dial_code"=> "+503",
    "code"=> "SV"
  ],
  [
    "id"=> 63,
    "name"=> "Equatorial Guinea",
    "dial_code"=> "+240",
    "code"=> "GQ"
  ],
  [
    "id"=> 64,
    "name"=> "Eritrea",
    "dial_code"=> "+291",
    "code"=> "ER"
  ],
  [
    "id"=> 65,
    "name"=> "Estonia",
    "dial_code"=> "+372",
    "code"=> "EE"
  ],
  [
    "id"=> 66,
    "name"=> "Ethiopia",
    "dial_code"=> "+251",
    "code"=> "ET"
  ],
  [
    "id"=> 67,
    "name"=> "Falkland Islands (Malvinas)",
    "dial_code"=> "+500",
    "code"=> "FK"
  ],
  [
    "id"=> 68,
    "name"=> "Faroe Islands",
    "dial_code"=> "+298",
    "code"=> "FO"
  ],
  [
    "id"=> 69,
    "name"=> "Fiji",
    "dial_code"=> "+679",
    "code"=> "FJ"
  ],
  [
    "id"=> 70,
    "name"=> "Finland",
    "dial_code"=> "+358",
    "code"=> "FI"
  ],
  [
    "id"=> 71,
    "name"=> "France",
    "dial_code"=> "+33",
    "code"=> "FR"
  ],
  [
    "id"=> 72,
    "name"=> "French Guiana",
    "dial_code"=> "+594",
    "code"=> "GF"
  ],
  [
    "id"=> 73,
    "name"=> "French Polynesia",
    "dial_code"=> "+689",
    "code"=> "PF"
  ],
  [
    "id"=> 74,
    "name"=> "Gabon",
    "dial_code"=> "+241",
    "code"=> "GA"
  ],
  [
    "id"=> 75,
    "name"=> "Gambia",
    "dial_code"=> "+220",
    "code"=> "GM"
  ],
  [
    "id"=> 76,
    "name"=> "Georgia",
    "dial_code"=> "+995",
    "code"=> "GE"
  ],
  [
    "id"=> 77,
    "name"=> "Germany",
    "dial_code"=> "+49",
    "code"=> "DE"
  ],
  [
    "id"=> 78,
    "name"=> "Ghana",
    "dial_code"=> "+233",
    "code"=> "GH"
  ],
  [
    "id"=> 79,
    "name"=> "Gibraltar",
    "dial_code"=> "+350",
    "code"=> "GI"
  ],
  [
    "id"=> 80,
    "name"=> "Greece",
    "dial_code"=> "+30",
    "code"=> "GR"
  ],
  [
    "id"=> 81,
    "name"=> "Greenland",
    "dial_code"=> "+299",
    "code"=> "GL"
  ],
  [
    "id"=> 82,
    "name"=> "Grenada",
    "dial_code"=> "+1473",
    "code"=> "GD"
  ],
  [
    "id"=> 83,
    "name"=> "Guadeloupe",
    "dial_code"=> "+590",
    "code"=> "GP"
  ],
  [
    "id"=> 84,
    "name"=> "Guam",
    "dial_code"=> "+1671",
    "code"=> "GU"
  ],
  [
    "id"=> 85,
    "name"=> "Guatemala",
    "dial_code"=> "+502",
    "code"=> "GT"
  ],
  [
    "id"=> 86,
    "name"=> "Guernsey",
    "dial_code"=> "+44",
    "code"=> "GG"
  ],
  [
    "id"=> 87,
    "name"=> "Guinea",
    "dial_code"=> "+224",
    "code"=> "GN"
  ],
  [
    "id"=> 88,
    "name"=> "Guinea-Bissau",
    "dial_code"=> "+245",
    "code"=> "GW"
  ],
  [
    "id"=> 89,
    "name"=> "Guyana",
    "dial_code"=> "+595",
    "code"=> "GY"
  ],
  [
    "id"=> 90,
    "name"=> "Haiti",
    "dial_code"=> "+509",
    "code"=> "HT"
  ],
  [
    "id"=> 91,
    "name"=> "Holy See (Vatican City State)",
    "dial_code"=> "+379",
    "code"=> "VA"
  ],
  [
    "id"=> 92,
    "name"=> "Honduras",
    "dial_code"=> "+504",
    "code"=> "HN"
  ],
  [
    "id"=> 93,
    "name"=> "Hong Kong",
    "dial_code"=> "+852",
    "code"=> "HK"
  ],
  [
    "id"=> 94,
    "name"=> "Hungary",
    "dial_code"=> "+36",
    "code"=> "HU"
  ],
  [
    "id"=> 95,
    "name"=> "Iceland",
    "dial_code"=> "+354",
    "code"=> "IS"
  ],
  [
    "id"=> 96,
    "name"=> "India",
    "dial_code"=> "+91",
    "code"=> "IN"
  ],
  [
    "id"=> 97,
    "name"=> "Indonesia",
    "dial_code"=> "+62",
    "code"=> "ID"
  ],
  [
    "id"=> 98,
    "name"=> "Iran, Islamic Republic of Persian Gulf",
    "dial_code"=> "+98",
    "code"=> "IR"
  ],
  [
    "id"=> 99,
    "name"=> "Iraq",
    "dial_code"=> "+964",
    "code"=> "IQ"
  ],
  [
    "id"=> 100,
    "name"=> "Ireland",
    "dial_code"=> "+353",
    "code"=> "IE"
  ],
  [
    "id"=> 101,
    "name"=> "Isle of Man",
    "dial_code"=> "+44",
    "code"=> "IM"
  ],
  [
    "id"=> 102,
    "name"=> "Israel",
    "dial_code"=> "+972",
    "code"=> "IL"
  ],
  [
    "id"=> 103,
    "name"=> "Italy",
    "dial_code"=> "+39",
    "code"=> "IT"
  ],
  [
    "id"=> 104,
    "name"=> "Jamaica",
    "dial_code"=> "+1876",
    "code"=> "JM"
  ],
  [
    "id"=> 105,
    "name"=> "Japan",
    "dial_code"=> "+81",
    "code"=> "JP"
  ],
  [
    "id"=> 106,
    "name"=> "Jersey",
    "dial_code"=> "+44",
    "code"=> "JE"
  ],
  [
    "id"=> 107,
    "name"=> "Jordan",
    "dial_code"=> "+962",
    "code"=> "JO"
  ],
  [
    "id"=> 108,
    "name"=> "Kazakhstan",
    "dial_code"=> "+77",
    "code"=> "KZ"
  ],
  [
    "id"=> 109,
    "name"=> "Kenya",
    "dial_code"=> "+254",
    "code"=> "KE"
  ],
  [
    "id"=> 110,
    "name"=> "Kiribati",
    "dial_code"=> "+686",
    "code"=> "KI"
  ],
  [
    "id"=> 111,
    "name"=> "Kuwait",
    "dial_code"=> "+965",
    "code"=> "KW"
  ],
  [
    "id"=> 112,
    "name"=> "Kyrgyzstan",
    "dial_code"=> "+996",
    "code"=> "KG"
  ],
  [
    "id"=> 113,
    "name"=> "Laos",
    "dial_code"=> "+856",
    "code"=> "LA"
  ],
  [
    "id"=> 114,
    "name"=> "Latvia",
    "dial_code"=> "+371",
    "code"=> "LV"
  ],
  [
    "id"=> 115,
    "name"=> "Lebanon",
    "dial_code"=> "+961",
    "code"=> "LB"
  ],
  [
    "id"=> 116,
    "name"=> "Lesotho",
    "dial_code"=> "+266",
    "code"=> "LS"
  ],
  [
    "id"=> 117,
    "name"=> "Liberia",
    "dial_code"=> "+231",
    "code"=> "LR"
  ],
  [
    "id"=> 118,
    "name"=> "Libyan Arab Jamahiriya",
    "dial_code"=> "+218",
    "code"=> "LY"
  ],
  [
    "id"=> 119,
    "name"=> "Liechtenstein",
    "dial_code"=> "+423",
    "code"=> "LI"
  ],
  [
    "id"=> 120,
    "name"=> "Lithuania",
    "dial_code"=> "+370",
    "code"=> "LT"
  ],
  [
    "id"=> 121,
    "name"=> "Luxembourg",
    "dial_code"=> "+352",
    "code"=> "LU"
  ],
  [
    "id"=> 122,
    "name"=> "Macao",
    "dial_code"=> "+853",
    "code"=> "MO"
  ],
  [
    "id"=> 123,
    "name"=> "Macedonia",
    "dial_code"=> "+389",
    "code"=> "MK"
  ],
  [
    "id"=> 124,
    "name"=> "Madagascar",
    "dial_code"=> "+261",
    "code"=> "MG"
  ],
  [
    "id"=> 125,
    "name"=> "Malawi",
    "dial_code"=> "+265",
    "code"=> "MW"
  ],
  [
    "id"=> 126,
    "name"=> "Malaysia",
    "dial_code"=> "+60",
    "code"=> "MY"
  ],
  [
    "id"=> 127,
    "name"=> "Maldives",
    "dial_code"=> "+960",
    "code"=> "MV"
  ],
  [
    "id"=> 128,
    "name"=> "Mali",
    "dial_code"=> "+223",
    "code"=> "ML"
  ],
  [
    "id"=> 129,
    "name"=> "Malta",
    "dial_code"=> "+356",
    "code"=> "MT"
  ],
  [
    "id"=> 130,
    "name"=> "Marshall Islands",
    "dial_code"=> "+692",
    "code"=> "MH"
  ],
  [
    "id"=> 131,
    "name"=> "Martinique",
    "dial_code"=> "+596",
    "code"=> "MQ"
  ],
  [
    "id"=> 132,
    "name"=> "Mauritania",
    "dial_code"=> "+222",
    "code"=> "MR"
  ],
  [
    "id"=> 133,
    "name"=> "Mauritius",
    "dial_code"=> "+230",
    "code"=> "MU"
  ],
  [
    "id"=> 134,
    "name"=> "Mayotte",
    "dial_code"=> "+262",
    "code"=> "YT"
  ],
  [
    "id"=> 135,
    "name"=> "Mexico",
    "dial_code"=> "+52",
    "code"=> "MX"
  ],
  [
    "id"=> 136,
    "name"=> "Micronesia, Federated States of Micronesia",
    "dial_code"=> "+691",
    "code"=> "FM"
  ],
  [
    "id"=> 137,
    "name"=> "Moldova",
    "dial_code"=> "+373",
    "code"=> "MD"
  ],
  [
    "id"=> 138,
    "name"=> "Monaco",
    "dial_code"=> "+377",
    "code"=> "MC"
  ],
  [
    "id"=> 139,
    "name"=> "Mongolia",
    "dial_code"=> "+976",
    "code"=> "MN"
  ],
  [
    "id"=> 140,
    "name"=> "Montenegro",
    "dial_code"=> "+382",
    "code"=> "ME"
  ],
  [
    "id"=> 141,
    "name"=> "Montserrat",
    "dial_code"=> "+1664",
    "code"=> "MS"
  ],
  [
    "id"=> 142,
    "name"=> "Morocco",
    "dial_code"=> "+212",
    "code"=> "MA"
  ],
  [
    "id"=> 143,
    "name"=> "Mozambique",
    "dial_code"=> "+258",
    "code"=> "MZ"
  ],
  [
    "id"=> 144,
    "name"=> "Myanmar",
    "dial_code"=> "+95",
    "code"=> "MM"
  ],
  [
    "id"=> 145,
    "name"=> "Namibia",
    "dial_code"=> "+264",
    "code"=> "NA"
  ],
  [
    "id"=> 146,
    "name"=> "Nauru",
    "dial_code"=> "+674",
    "code"=> "NR"
  ],
  [
    "id"=> 147,
    "name"=> "Nepal",
    "dial_code"=> "+977",
    "code"=> "NP"
  ],
  [
    "id"=> 148,
    "name"=> "Netherlands",
    "dial_code"=> "+31",
    "code"=> "NL"
  ],
  [
    "id"=> 149,
    "name"=> "Netherlands Antilles",
    "dial_code"=> "+599",
    "code"=> "AN"
  ],
  [
    "id"=> 150,
    "name"=> "New Caledonia",
    "dial_code"=> "+687",
    "code"=> "NC"
  ],
  [
    "id"=> 151,
    "name"=> "New Zealand",
    "dial_code"=> "+64",
    "code"=> "NZ"
  ],
  [
    "id"=> 152,
    "name"=> "Nicaragua",
    "dial_code"=> "+505",
    "code"=> "NI"
  ],
  [
    "id"=> 153,
    "name"=> "Niger",
    "dial_code"=> "+227",
    "code"=> "NE"
  ],
  [
    "id"=> 154,
    "name"=> "Nigeria",
    "dial_code"=> "+234",
    "code"=> "NG"
  ],
  [
    "id"=> 155,
    "name"=> "Niue",
    "dial_code"=> "+683",
    "code"=> "NU"
  ],
  [
    "id"=> 156,
    "name"=> "Norfolk Island",
    "dial_code"=> "+672",
    "code"=> "NF"
  ],
  [
    "id"=> 157,
    "name"=> "Northern Mariana Islands",
    "dial_code"=> "+1670",
    "code"=> "MP"
  ],
  [
    "id"=> 158,
    "name"=> "Norway",
    "dial_code"=> "+47",
    "code"=> "NO"
  ],
  [
    "id"=> 159,
    "name"=> "Oman",
    "dial_code"=> "+968",
    "code"=> "OM"
  ],
  [
    "id"=> 160,
    "name"=> "Pakistan",
    "dial_code"=> "+92",
    "code"=> "PK"
  ],
  [
    "id"=> 161,
    "name"=> "Palau",
    "dial_code"=> "+680",
    "code"=> "PW"
  ],
  [
    "id"=> 162,
    "name"=> "Palestinian Territory, Occupied",
    "dial_code"=> "+970",
    "code"=> "PS"
  ],
  [
    "id"=> 163,
    "name"=> "Panama",
    "dial_code"=> "+507",
    "code"=> "PA"
  ],
  [
    "id"=> 164,
    "name"=> "Papua New Guinea",
    "dial_code"=> "+675",
    "code"=> "PG"
  ],
  [
    "id"=> 165,
    "name"=> "Paraguay",
    "dial_code"=> "+595",
    "code"=> "PY"
  ],
  [
    "id"=> 166,
    "name"=> "Peru",
    "dial_code"=> "+51",
    "code"=> "PE"
  ],
  [
    "id"=> 167,
    "name"=> "Philippines",
    "dial_code"=> "+63",
    "code"=> "PH"
  ],
  [
    "id"=> 168,
    "name"=> "Pitcairn",
    "dial_code"=> "+872",
    "code"=> "PN"
  ],
  [
    "id"=> 169,
    "name"=> "Poland",
    "dial_code"=> "+48",
    "code"=> "PL"
  ],
  [
    "id"=> 170,
    "name"=> "Portugal",
    "dial_code"=> "+351",
    "code"=> "PT"
  ],
  [
    "id"=> 171,
    "name"=> "Puerto Rico",
    "dial_code"=> "+1939",
    "code"=> "PR"
  ],
  [
    "id"=> 172,
    "name"=> "Qatar",
    "dial_code"=> "+974",
    "code"=> "QA"
  ],
  [
    "id"=> 173,
    "name"=> "Romania",
    "dial_code"=> "+40",
    "code"=> "RO"
  ],
  [
    "id"=> 174,
    "name"=> "Russia",
    "dial_code"=> "+7",
    "code"=> "RU"
  ],
  [
    "id"=> 175,
    "name"=> "Rwanda",
    "dial_code"=> "+250",
    "code"=> "RW"
  ],
  [
    "id"=> 176,
    "name"=> "Reunion",
    "dial_code"=> "+262",
    "code"=> "RE"
  ],
  [
    "id"=> 177,
    "name"=> "Saint Barthelemy",
    "dial_code"=> "+590",
    "code"=> "BL"
  ],
  [
    "id"=> 178,
    "name"=> "Saint Helena, Ascension and Tristan Da Cunha",
    "dial_code"=> "+290",
    "code"=> "SH"
  ],
  [
    "id"=> 179,
    "name"=> "Saint Kitts and Nevis",
    "dial_code"=> "+1869",
    "code"=> "KN"
  ],
  [
    "id"=> 180,
    "name"=> "Saint Lucia",
    "dial_code"=> "+1758",
    "code"=> "LC"
  ],
  [
    "id"=> 181,
    "name"=> "Saint Martin",
    "dial_code"=> "+590",
    "code"=> "MF"
  ],
  [
    "id"=> 182,
    "name"=> "Saint Pierre and Miquelon",
    "dial_code"=> "+508",
    "code"=> "PM"
  ],
  [
    "id"=> 183,
    "name"=> "Saint Vincent and the Grenadines",
    "dial_code"=> "+1784",
    "code"=> "VC"
  ],
  [
    "id"=> 184,
    "name"=> "Samoa",
    "dial_code"=> "+685",
    "code"=> "WS"
  ],
  [
    "id"=> 185,
    "name"=> "San Marino",
    "dial_code"=> "+378",
    "code"=> "SM"
  ],
  [
    "id"=> 186,
    "name"=> "Sao Tome and Principe",
    "dial_code"=> "+239",
    "code"=> "ST"
  ],
  [
    "id"=> 187,
    "name"=> "Saudi Arabia",
    "dial_code"=> "+966",
    "code"=> "SA"
  ],
  [
    "id"=> 188,
    "name"=> "Senegal",
    "dial_code"=> "+221",
    "code"=> "SN"
  ],
  [
    "id"=> 189,
    "name"=> "Serbia",
    "dial_code"=> "+381",
    "code"=> "RS"
  ],
  [
    "id"=> 190,
    "name"=> "Seychelles",
    "dial_code"=> "+248",
    "code"=> "SC"
  ],
  [
    "id"=> 191,
    "name"=> "Sierra Leone",
    "dial_code"=> "+232",
    "code"=> "SL"
  ],
  [
    "id"=> 192,
    "name"=> "Singapore",
    "dial_code"=> "+65",
    "code"=> "SG"
  ],
  [
    "id"=> 193,
    "name"=> "Slovakia",
    "dial_code"=> "+421",
    "code"=> "SK"
  ],
  [
    "id"=> 194,
    "name"=> "Solomon Islands",
    "dial_code"=> "+677",
    "code"=> "SB"
  ],
  [
    "id"=> 195,
    "name"=> "South Africa",
    "dial_code"=> "+27",
    "code"=> "ZA"
  ],
  [
    "id"=> 196,
    "name"=> "Sri Lanka",
    "dial_code"=> "+94",
    "code"=> "LK"
  ],
  [
    "id"=> 197,
    "name"=> "Switzerland",
    "dial_code"=> "+41",
    "code"=> "CH"
  ],
  [
    "id"=> 198,
    "name"=> "United Kingdom",
    "dial_code"=> "+44",
    "code"=> "GB"
  ],
  [
    "id"=> 199,
    "name"=> "United States",
    "dial_code"=> "+1",
    "code"=> "US"
  ]
];
    $key = array_search( $pcode, array_column( $array, 'dial_code' ) ); 
    return ( $key ) ? $array[$key]['id'] : false;
}

function smtpEmailFunction($emailTo, $subject, $body, $type, $userEmail, $emailCC = [], $emailBCC = [], $attachments = [], $cname = null ){
 return true;
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
        $ipdb = new wpdb( 'workstatus-io-crm-prod-db-user', '7DsEMIA5ppFAAyK', 'workstatus-io-crm-prod-db', 'localhost' );    
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
	    if( isset( $refData['host'] ) && (strpos($refData['host'], "workstatus.io") === false) ){
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
        return json_decode( $hasIP->data );
    }else{
        $isLocation     = file_get_contents( 'https://ipinfo.io/'.$ipAddr.'?token=6e9a3b50b603c1' );
        $ws_userip      = json_decode( $isLocation ); 
        if( $ws_userip ){
            $ipdb->insert( 'ipinfo_logs', array( 'ip' => $ipAddr, 'data' => $isLocation, 'created_at' => date('Y-m-d H:i:s')));
            return $ws_userip;
        }else{
            return false;
        }       
    }
}

add_action( 'rest_api_init', function (){
    register_rest_route( 'ws-api/v1', '/ipinfo', array(
        'methods' => 'GET',
        'callback' => function(){
        $globIP = (isset($_GET['ip']) && !empty($_GET['ip'])) ? $_GET['ip'] : false;

        if( $globIP !== false ){
        $ipaddr = $globIP;
        }else{
        $ipaddr = (isset( $_SERVER['HTTP_HOST'] ) && ($_SERVER['HTTP_HOST'] != "localhost")) ? getUserIP() : 
        '1.44.255.255';    
        }
        $ipinfo = getWSipinfo( $ipaddr );
        wp_send_json( $ipinfo );
        }
    ));
});

add_action( 'rest_api_init', function (){
    register_rest_route( 'ws-api/v1', '/getipinfo/', array(
        'methods' => 'GET',
        'callback' => function( $request ){
            $ip = $request->get_param( 'ip' );
            if (filter_var($ip, FILTER_VALIDATE_IP) !== false) {
                $ipinfo = getWSipinfo( $ip );
                wp_send_json( $ipinfo );
            }else{
                wp_send_json( ['message' => 'Invalid Ip Address.' ] );
            }
        },
        'args' => array(
            'ip' => array( 'required' => true, 'validate_callback' => 'rest_validate_request_arg' )
        )
    ));
});
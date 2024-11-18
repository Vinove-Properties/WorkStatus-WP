<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
$data = file_get_contents('php://input');
$json = json_decode($data, true);
define('CL_LOGFILE', '/home/workstatus-io/public_html/log/crm.log');

$file       = fopen(CL_LOGFILE,"a");
fwrite( $file, PHP_EOL."Webhook V2 - Response : " .time().print_r($json,true) );
fclose( $file );

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

function tempWsPhoneCode( $pcode ){ 
//$pcode = str_replace(" ","", $pcode);
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
    $key = array_search( "+".$pcode, array_column( $array, 'dial_code' ) ); 
    return ($key) ? $array[$key]['name'] : false;
}

function clSendMail( $emailTo, $subject, $body, $type, $userEmail, $emailCC = [], 
    $emailBCC = [], $attachments = [], $cname = null ){
   $mail = new PHPMailer(true);
   $smtp = new SMTP;
    try{
        if (!$smtp->connect('smtp.gmail.com', 587)) {
            print_r($smtp->getError());
            throw new Exception('Connect failed!');
        }
        
        $mail->isSMTP();
        $mail->Host         = "smtp.gmail.com";
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

function get_visitor_ip(){
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

if( isset( $json['event'] ) && $json['event'] == "invitee.created" ){
    $event_url  = $json['payload']['event'];
    $ecurl      = curl_init();
    curl_setopt_array($ecurl, [
      CURLOPT_URL => $event_url,
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "GET",
      CURLOPT_HTTPHEADER => [
        "Authorization: Bearer eyJraWQiOiIxY2UxZTEzNjE3ZGNmNzY2YjNjZWJjY2Y4ZGM1YmFmYThhNjVlNjg0MDIzZjdjMzJiZTgzNDliMjM4MDEzNWI0IiwidHlwIjoiUEFUIiwiYWxnIjoiRVMyNTYifQ.eyJpc3MiOiJodHRwczovL2F1dGguY2FsZW5kbHkuY29tIiwiaWF0IjoxNzI5MjM4MDU3LCJqdGkiOiI5MDZmMDVkYS00NmI4LTQzYWYtYWQ5Yi0yMjZkMmM3NzJkN2UiLCJ1c2VyX3V1aWQiOiJmZjI0ZTE3MC1lODMwLTQ2ODUtOTkwZS1iNzVjZDVlMTEzZGMifQ.v1V31k766DZQR48MKJAtadRSHf2KpKRlKEHPi9Sf6DiiBspbBfW9uMxQbWG_Osd-LnTojIZJzTZiQcYEoSSs9w",
        "Content-Type: application/json"
      ],
    ]);
    $eventResp  = curl_exec( $ecurl );
    $err        = curl_error( $ecurl );
    
    $eDate = "000-00-00";
    $eTime = "00:00:00";
    $file       = fopen(CL_LOGFILE,"a");
    fwrite( $file, PHP_EOL."Debugger : #1"  );
    fwrite( $file, PHP_EOL."Internal - Response : " .time().print_r(json_decode($eventResp, true),true) );
    fclose( $file );

    if(!$err){
        $eventJson    = json_decode( $eventResp, true );
        if( 
          isset( $eventJson['payload']['scheduled_event']['start_time'] ) && 
          !empty( $eventJson['payload']['scheduled_event']['start_time'] ) 
        ){
          $eventdate    = $eventJson['payload']['scheduled_event']['start_time'];
          // $datetime   = new DateTime( $eventdate );
          // $eDate      = $datetime->format('Y-m-d');
          // $la_time    = new DateTimeZone('Asia/Kolkata');
          // $datetime->setTimezone($la_time);
          // $eTime      = $datetime->format('H:i:s');

          $datetime = new DateTime( $eventdate );
          $datetime->setTimezone(new DateTimeZone('Asia/Kolkata'));
          
          $eDate = $datetime->format('Y-m-d');
          $eTime = $datetime->format('H:i:s');
            
        }        
    }
    curl_close( $ecurl );

    $firtName = $lastName = "";
    if( isset( $json['payload']['name'] ) ){
        $name = $json['payload']['name'];
        $nameArray  = explode( " ", $name );
        $firtName   = $nameArray[0];
        $lastName   = $nameArray[1];
    }
    $utm_source = $utm_medium = $utm_campaign = $pageUrl = $ipAddress = '';
    $hasDataID = 0;    

    if( isset($json['payload']['tracking']['utm_source']) && !empty($json['payload']['tracking']['utm_source']) ){
        $getUTM_source = $json['payload']['tracking']['utm_source'];
        if( $getUTM_source == "gglads" ){
            $utm_source = "Advertisement: Google";
        }elseif( $getUTM_source == "bngads" ){
            $utm_source = "Advertisement: Bing";
        }elseif( $getUTM_source == "fbads" ){
            $utm_source = "Advertisement: FaceBook";
        }elseif( $getUTM_source == "quorapaid" ){
            $utm_source = "Advertisement: Quora";
        }elseif( $getUTM_source == "linkedinads" ){
            $utm_source = "Advertisement: LinkedIN";
        }elseif( $getUTM_source == "adroll" ){
            $utm_source = "Advertisement: Adroll";
        }else{
            $utm_source = "Calendly Webhook";
        }
    }

    if( isset( $json['payload']['tracking']['utm_campaign'] ) ){
        $utm_campaign = $json['payload']['tracking']['utm_campaign'];
    }

    if( isset( $json['payload']['tracking']['utm_medium'] ) ){
        $utm_medium = $json['payload']['tracking']['utm_medium'];
    }

    if( isset( $json['payload']['tracking']['utm_term'] ) && !empty( $json['payload']['tracking']['utm_term'] ) ){
        $pageUrl        = $json['payload']['tracking']['utm_term'];
    }

    $defLeadSrc = (empty($pageUrl)) ? 'Calendly Direct' : 'Website: Direct';

    $leadSource = (empty($utm_source)) ? $defLeadSrc : $utm_source;


    $flds       = $json['payload']['questions_and_answers'];
    $phone      = $flds[0]['answer'];
    $company    = $flds[1]['answer'];
    $teamSize   = $flds[2]['answer'];
    $comment    = $flds[3]['answer'];
    $email      = $json['payload']['email'];

    $phoneFld   = preg_match('/^\+(\d+)/', $phone, $matches);
    $pcode      = (isset($matches[1])&& !empty($matches[1]) ) ? $matches[1] : false;
    $country    = "";
    if( $pcode !== false ){
    $country    = (tempWsPhoneCode( $pcode ) !== false ) ? tempWsPhoneCode( $pcode ) : ""; 
    }  

    $varDeliminator = "<br>";
    $body = "";
    $body .= "Name : ".$json['payload']['name'].$varDeliminator;
    $body .= "Email : ".$email.$varDeliminator;
    $body .= "Contact No. : ".$phone.$varDeliminator;
    $body .= "Country : ".$country.$varDeliminator;

    $body .= "Company Name. : ".$company.$varDeliminator;
    $body .= "Team size : ".$teamSize.$varDeliminator;
    $body .= "Requirement : ".$comment.$varDeliminator;

    $body .= "IP Address : ".get_visitor_ip().$varDeliminator;
    $body .= "Page Url : ".$pageUrl.$varDeliminator;
    $body .= "Lead Source : ".$leadSource.$varDeliminator;
    $body .= "Referer Url : ".$referalurl.$varDeliminator;

    $body .= "UTM Source : ".$utm_source.$varDeliminator;
    $body .= "UTM Medium : ".$utm_medium.$varDeliminator;
    $body .= "UTM Campaign : ".$utm_campaign.$varDeliminator;

    clSendMail( "hello@workstatus.io", "Demo request - Workstatus", $body, "lead", $email, 
    [], ['nitin.baluni@mail.vinove.com'], [], $json['payload']['name'] );

    $file       = fopen(CL_LOGFILE,"a");
    fwrite( $file, PHP_EOL."Debugger : #1"  );
    fclose( $file );

    $tempLog = fopen(CL_LOGFILE,"a");
    fwrite($tempLog, $email.print_r($json, true)."\n");
    fclose($tempLog);

    $apiRequest = array(
        "first_name"    => $firtName,
        "email"         => $json['payload']['email'],
        "contact_no"    => $phone,
        "company_name"  => $company,
        "team_size"     => $teamSize,
        "demo_date"     => $eDate,
        "demo_time"     => $eTime,
        "time_zone"     => $json['payload']['timezone'],
        "ip_address"    => $ipAddress,
        "source"        => $pageUrl,
        "utm_campaign"  => $utm_campaign,
        "utm_medium"    => $utm_medium
    );
    if( $lastName ){
        $apiRequest['last_name'] = $lastName;
    }
    
    clSendMail("nitin.baluni@mail.vinove.com", "Demo Workstatus - Admin Leads", print_r($apiRequest, true), "lead", $email, 
    [], [], [], $json['payload']['name'] );
    
    
    $ch = curl_init();
    if( $hasDataID !== 0 ){
        $apiRequest['id'] = $hasDataID;
        curl_setopt($ch, CURLOPT_URL, "https://superadmin.workstatus.io/api/v1/updatedemorequest");
    }else{
        curl_setopt($ch, CURLOPT_URL, "https://superadmin.workstatus.io/api/v1/getDemoRequest");        
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
    'Email'         => $json['payload']['email'],
    'Company'       => $company,
    'Country_1'     => $country,
    'Phone'         => $phone,
    //'Lead_Source'   => "Calendly Direct",
    'Lead_Source'   => $leadSource,
    'Lead_Status'   => "Demo Scheduled",
    //'Lead_Status'   => "Demo Scheduled";  
    'Owner'         => $owner_id,
    'SQL'               => "Yes",
    'Sales_Qualified_Lead' => "Yes",
    'IP_Address1'   => get_visitor_ip(),
    'IP_Address'    => get_visitor_ip(),
    'UTM_Source'    => $utm_source,
    'Description'   => $comment,
    'UTM_Medium'    => $utm_medium,
    'UTM_Campaign'  => $utm_campaign,
    'Website_URL'   => $pageUrl,
    'Ref_Url'       => $pageUrl,
    'Company_Headcount' => $teamSize,
    'Calendly_Booked'   => "Yes"
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
    
    $responseLL   = json_decode( $response );
    $file       = fopen(CL_LOGFILE,"a");
    fwrite( $file, PHP_EOL.$email."_:_".print_r($responseLL,1) );
    fclose( $file ); 
                    
    $err        = curl_error($curl);
    if( !$err ){
        $response   = json_decode( $response );
        if( isset($response->data[0]) && ($response->data[0]->code == "DUPLICATE_DATA") ) :
            $lead_id = ( isset( $response->data[0] ) ) ? $response->data[0]->details->id : 0;
            if( $lead_id !== 0 ){
                $zoho_data = array(
                'id'                => $lead_id,
                'First_Name'        => $firtName,
                'Last_Name'         => (!empty($lastName)) ? $lastName : "NA",
                'Company'           => $company,
                'Lead_Status'       => "Demo Scheduled",
                //'Lead_Source'       => "",
                'Is_Duplicate'      => "Yes",
                'Calendly_Booked'   => "Yes",
                'SQL'               => "Yes",
                'Sales_Qualified_Lead' => "Yes",
                'Phone'             => $phone,
                'Company_Headcount' => $teamSize,
                'Description'       => $comment
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

                $response   = curl_exec($curl);
                $err        = curl_error($curl);
                if( !$err ){
                    $response   = json_decode( $response );
                    $file       = fopen(CL_LOGFILE,"a");
                    fwrite( $file, PHP_EOL.$email.":".print_r($response,1) );
                    fclose( $file );
                    dupLeadNote( $varAccessToken, $lead_id, $comment );
                }else{
                    $file       = fopen(CL_LOGFILE,"a");
                    fwrite( $file, "Error in Zoho Entry :".$err );
                    fclose( $file );    
                }
                curl_close( $curl );
                
            }
        endif;
    }else{
        
    }
    curl_close($curl);
    }
    $file       = fopen(CL_LOGFILE,"a");
    fwrite( $file, PHP_EOL."ADMIN API REQ : ".print_r($apiRequest,1) );
    fclose( $file );

    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query( $apiRequest ));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $server_output = curl_exec($ch);
    curl_close($ch);
}
?>
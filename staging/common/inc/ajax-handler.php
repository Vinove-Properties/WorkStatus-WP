<?php 
function wsVarCheck( $array, $key ){
	return ( isset($array[$key]) && !empty($array[$key]) ) ? $array[$key] : '';
}

function wsGetName($name) {
    $name = trim($name);
    $last_name = (strpos($name, ' ') === false) ? '' : preg_replace('#.*\s([\w-]*)$#', '$1', $name);
    $first_name = trim( preg_replace('#'.preg_quote($last_name,'#').'#', '', $name ) );
    return array($first_name, $last_name);
}

function getWS_IPAddr(){
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

$data = (array) json_decode(file_get_contents("php://input"));
if( !isset( $data['email'] ) ) die("Go Boat");

$params = '';
$idx 	= 0;
foreach( $data as $key => $value ){
	if( $idx === 0 ){
		$params .= '?'.$key.'='.$value;
	}else{
		$params .= '&'.$key.'='.$value;
	}	
	$idx++;
}

define('lpCLIENT_ID','1000.ED227T6HEN6WAZRH1O48BU5VI96MVR');
define('lpCLIENT_SECRET','c0fe2e3c254b4d2d7851267acf6b62bce66deead0d');
define('lpREFRESH_TOKEN','1000.4a964cbd2983c2dd57da83472dd0e96d.c0c7a5b9cb27092b71e2d6687c140dda');

$name           = $data['fname'];
$partName       = wsGetName( $ajxData['name'] );
$fname          = $partName[0];
$lname          = ( !empty($partName[1]) ) ? $partName[1] : 'N/A';

$email 			= wsVarCheck($data, 'email');
$company 		= '';
$teamSize 		= '';
$requirement    = 'Download Case Study Page Only Name & Email Data';
$user_country   = '';

$pageurl 		= wsVarCheck($data, 'pageurl');
$tracking_ip 	= getWS_IPAddr();
$referalurl 	= wsVarCheck($data, 'referalurl');
$phoneNo 		= wsVarCheck($data, 'phone');
$varLeadSource 	= 'Website';

$utm_src 		= wsVarCheck($data, 'utm_source');
$utm_mdm 		= wsVarCheck($data, 'utm_medium');
$utm_cmp 		= wsVarCheck($data, 'utm_campaign');

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
    $lead_source = "website";
}

if( !empty( $referalurl ) && empty( $utm_src ) ){
    if( strstr($referalurl,"google") ){
    $lead_source = "SEO: Organic";    
    }
}
$lead_id 	= 0;
$owner_id 	= 681646179;
$postData 	= 'refresh_token='.lpREFRESH_TOKEN.'&client_id='.lpCLIENT_ID.'&client_secret='.lpCLIENT_SECRET.'&grant_type='.'refresh_token';
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
        $curl 	= curl_init();        
        $sJSON 	= json_encode( array(
			'First_Name'    => $fname,
			'Last_Name'     => $lname,
			'Email'         => $email,
			'Company'       => $company,
			'Country_1'     => $user_country,
			'Phone'         => $phoneNo,
			'Lead_Source'   => $lead_source,
			'Lead_Status'   => "Not Contacted",
			'Owner'         => $owner_id,
			'Description'   => $requirement,
			'IP_Address1'   => $tracking_ip,
			'IP_Address'    => $tracking_ip,
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
        if(!$err){
	        $response = json_decode( $response );
	        $lead_id = ( isset( $response->data[0] ) ) ? $response->data[0]->details->id : 0;
            echo json_encode(['success' => true ]);
        }else{
            echo json_encode(['success' => false ]);
        }
    }    
die;
?>
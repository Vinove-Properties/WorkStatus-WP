<?php

$data = file_get_contents('php://input');
$json = json_decode($data, true);

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

define('CL_LOGFILE', '/home/workstatus-io/public_html/log/crm.log');
$file       = fopen(CL_LOGFILE,"a");
fwrite( $file, PHP_EOL."ADMIN API REQ - updated : ".time().print_r($json,true) );
fclose( $file );

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
        "Authorization: Bearer eyJraWQiOiIxY2UxZTEzNjE3ZGNmNzY2YjNjZWJjY2Y4ZGM1YmFmYThhNjVlNjg0MDIzZjdjMzJiZTgzNDliMjM4MDEzNWI0IiwidHlwIjoiUEFUIiwiYWxnIjoiRVMyNTYifQ.eyJpc3MiOiJodHRwczovL2F1dGguY2FsZW5kbHkuY29tIiwiaWF0IjoxNzAwNzI3MDE1LCJqdGkiOiIwNTczNzVmZC1mMjVmLTQ4MTItODE0Ny03MmRiMmJiZjM1MjUiLCJ1c2VyX3V1aWQiOiJmZjI0ZTE3MC1lODMwLTQ2ODUtOTkwZS1iNzVjZDVlMTEzZGMifQ.1YjzaNm8rRhrviDKZZrA5KC_4YY7N9KqOn2ef2pTR9TdporoRXjyzMrgjkyQges-Tai6ZdjR8NvZfKYW1lZ26A",
        "Content-Type: application/json"
      ],
    ]);
    $eventResp  = curl_exec( $ecurl );
    $err        = curl_error( $ecurl );
    
    $eDate = "000-00-00";
    $eTime = "00:00:00";
    
    if(!$err){
        $eventJson    = json_decode( $eventResp, true );
        $eventdate    = $eventJson['resource']['start_time'];

        $datetime   = new DateTime( $eventdate );
        $eDate      = $datetime->format('Y-m-d');
        $la_time    = new DateTimeZone('Asia/Calcutta');
        $datetime->setTimezone($la_time);
        $eTime      = $datetime->format('H:i:s');
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
    if( isset( $json['payload']['tracking']['utm_source'] ) ){
        $utm_source = $json['payload']['tracking']['utm_source'];
        $utmsrc     = explode( "!!", $utm_source );
        $pageUrl    = $utmsrc[0];
        $ipAddress  = $utmsrc[1];
        $hasDataID  = ( isset( $utmsrc[2] ) ) ? $utmsrc[2] : 0;
    }

    if( isset( $json['payload']['tracking']['utm_campaign'] ) ){
        $utm_campaign = $json['payload']['tracking']['utm_campaign'];
    }

    if( isset( $json['payload']['tracking']['utm_medium'] ) ){
        $utm_medium = $json['payload']['tracking']['utm_medium'];
    }

    /*
    https://calendly.com/workstatus?utm_medium=social&utm_source=facebook&utm_campaign=track-promotion
    https://calendly.com/workstatus/product-demo?utm_source=https://www.workstatus.io/best-facial-recognition-software!!61.247.235.93
    */
    $flds       = $json['payload']['questions_and_answers'];
    $phone      = $flds[0]['answer'];
    $company    = $flds[1]['answer'];
    $teamSize   = $flds[2]['answer'];
    $comment    = $flds[3]['answer'];
    $email      = $json['payload']['email'];
    
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
    'Country_1'     => "",
    'Phone'         => $phone,
    'Lead_Source'   => "Calendly Direct",
    'Lead_Status'   => "Not Contacted",
    'Owner'         => $owner_id,
    'SQL'               => "Yes",
    'IP_Address1'   => get_visitor_ip(),
    'IP_Address'    => get_visitor_ip(),
    'UTM_Source'    => $utm_source,
    'Description'   => $comment,
    'UTM_Medium'    => $utm_medium,
    'UTM_Campaign'  => $utm_campaign,
    //'Website_URL'   => $pageurl,
    //'Ref_Url'       => $referalurl,
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
                'Lead_Status'       => "Not Contacted",
                //'Lead_Source'       => "",
                'Is_Duplicate'      => "Yes",
                'Calendly_Booked'   => "Yes",
                'SQL'               => "Yes",
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
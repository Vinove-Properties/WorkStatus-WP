<?php
$data = file_get_contents('php://input');
$json = json_decode($data, true);

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
        "Authorization: Bearer eyJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwczovL2F1dGguY2FsZW5kbHkuY29tIiwiaWF0IjoxNjQyMDcxMTcxLCJqdGkiOiIyZjhmMDRkOS0zNTYyLTQ1ZDAtYmZhZS1jODIwNjEyYzgzNmEiLCJ1c2VyX3V1aWQiOiJmZjI0ZTE3MC1lODMwLTQ2ODUtOTkwZS1iNzVjZDVlMTEzZGMifQ.lwWhQ2VZA7iwhIeLKR-IvJawL2n411qEgH1idk7J3oc",
        "Content-Type: application/json"
      ],
    ]);
    $eventResp  = curl_exec( $ecurl );
    $err        = curl_error( $ceurl );
    curl_close($ceurl);
    $eDate = "000-00-00";
    $eTime = "00:00:00";
    if( $err ){
        //echo "cURL Error #:" . $err;
    }else{
        $eventJson    = json_decode($eventResp, true);
        $eventdate    = $eventJson['resource']['start_time'];

        $datetime   = new DateTime( $eventdate );
        $eDate      = $datetime->format('Y-m-d');
        $la_time    = new DateTimeZone('Asia/Calcutta');
        $datetime->setTimezone($la_time);
        $eTime      = $datetime->format('H:i:s');
    }


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
    
    //@mail('nitin.valuecoders@gmail.com','WS Post Requests : Data',print_r($apiRequest,1));
    
    $ch = curl_init();
    if( $hasDataID !== 0 ){
        $apiRequest['id'] = $hasDataID;
        curl_setopt($ch, CURLOPT_URL, "https://superadmin.workstatus.io/api/v1/updatedemorequest");         
    }else{
        curl_setopt($ch, CURLOPT_URL, "https://superadmin.workstatus.io/api/v1/getDemoRequest");
    
    /*Zoho CRM Code Starts Here*/    
    $CLIENT_ID      = '1000.ED227T6HEN6WAZRH1O48BU5VI96MVR';
    $CLIENT_SECRET  = 'c0fe2e3c254b4d2d7851267acf6b62bce66deead0d';
    $REFRESH_TOKEN  = '1000.d0bd9fe070839300bb1566bd37f3ea90.d14a985c871ea3f7d92be08b2bcebec5';
    $owner_id       = 658520861;
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
    if ($err) {

    }else{
        $curl = curl_init();
        $sJSON = json_encode(array(
        'First_Name'    => $firtName,
        'Last_Name'     => (!empty($lastName)) ? $lastName : "NA",
        'Email'         => $json['payload']['email'],
        'Company'       => $company,
        'Country_1'     => "",
        'Phone'         => $phone,
        'Lead_Source'   => "",
        'Lead_Status'   => "Not Contacted",
        'Owner'         => $owner_id,
        'Description'   => $comment,
        //'IP_Address1'   => $tracking_ip,
        //'IP_Address'    => $tracking_ip,
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
        $err        = curl_error($curl);
        if( !$err ){
            @mail( 'nitin.baluni@mail.vinove.com', 'Calandly ZOHO CRM - Update', $response );    
        }
        curl_close($curl);
        }
    }    
    
    $file = fopen("/home/workforestc/calendly-log/logs.txt","a");
    fwrite($file, print_r($apiRequest, true) );
    fclose($file);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query( $apiRequest ));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $server_output = curl_exec($ch);
    curl_close($ch);
    
    /*
    $file = fopen("/home/workforestc/calendly-log/logs.txt","a");
    fwrite($file,'\n'.$json);
    fclose($file);
    */
}
//@mail( 'nitin.baluni@mail.vinove.com', 'Calandly Post Data', print_r($json,1) );
?>
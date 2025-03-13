<?php 
@session_start();
$objArray['site_url'] = "https://www.workstatus.io/";
if( isset( $_SERVER['HTTP_HOST'] ) && ($_SERVER['HTTP_HOST'] == "localhost") ){
    $objArray['site_url'] = "http://localhost/workstatus/"; 
}elseif( isset( $_SERVER['HTTP_HOST'] ) && ($_SERVER['HTTP_HOST'] == "workstatusweb.n1.iworklab.com") ){
    $objArray['site_url'] = "https://workstatusweb.n1.iworklab.com/";
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

$varFileName = basename($_SERVER['PHP_SELF']);

function getUserIP(){
    if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
              $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
              $_SERVER['HTTP_CLIENT_IP'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
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
function isMobile() {
    $useragent=$_SERVER['HTTP_USER_AGENT'];
    if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4))) {
        return 1;
        } else {
            return 0;
        }
}
?>
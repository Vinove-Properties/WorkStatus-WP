<?php 
$siteUrl = "https://www.workstatus.io/";
$siteDir = '/home/workforestc/public_html/timesheet/';
if( isset( $_SERVER['HTTP_HOST'] ) && ($_SERVER['HTTP_HOST'] == "localhost") ){
    $siteUrl = "http://localhost/workstatus/";
    $siteDir = '/var/www/html/workstatus/timesheet/';
}elseif( isset( $_SERVER['HTTP_HOST'] ) && ($_SERVER['HTTP_HOST'] == "https://beta.vinove.com/workstatus.io") ){
    $siteUrl = "https://beta.vinove.com/workstatus.io/";
    $siteDir = '/home/betavinc/public_html/workstatus.io/timesheet/';
}elseif( isset( $_SERVER['HTTP_HOST'] ) && ($_SERVER['HTTP_HOST'] == "beta.vinove.com") ){
    $siteUrl = "https://beta.vinove.com/workstatus.io/";
    $siteDir = '/home/betavinc/public_html/workstatus.io/timesheet/';
}

if(isset($_POST['startitemhh'], $_POST['startitemmm'], $_POST['stoptitemhh'], $_POST['stoptitemmm'] )){
$startitemhh = $_POST['startitemhh'];
$startitemmm = $_POST['startitemmm'];
$stoptitemhh = $_POST['stoptitemhh'];
$stoptitemmm = $_POST['stoptitemmm'];
$breaktitemhh = $_POST['breaktitemhh'];
$breaktitemmm = $_POST['breaktitemmm'];
$totltitem = $_POST['totltitem'];
$startampm = $_POST['startampm'];
$stopampm = $_POST['stopampm'];
$inputtotvaltime = $_POST['inputtotvaltime']; 
$inputunique = $_POST['inputuniqval'];
$arr_vc1 = json_decode($startitemhh, true);
$arr_vc2 = json_decode($startitemmm, true);
$arr_vc3 = json_decode($stoptitemhh, true);
$arr_vc4 = json_decode($stoptitemmm, true);
$arr_vc5 = json_decode($breaktitemhh, true);
$arr_vc6 = json_decode($breaktitemmm, true);
$arr_vc7 = json_decode($totltitem, true);
$arr_vc8 = $inputtotvaltime;
$arr_vc9 = array('Monday','Tuesday','Wednesday','Thrusday','Friday','Saturday','Sunday');
$arr_vc10 = json_decode($startampm, true);
$arr_vc11 = json_decode($stopampm, true);
 // print_r($arr_vc1); 
 // print_r($arr_vc2);
 // print_r($arr_vc3);
 // print_r($arr_vc4);
 // print_r($arr_vc5);
 // print_r($arr_vc6);
 // print_r($arr_vc7);
 // echo $arr_vc8;

$starthh_array = $arr_vc1;
$startmm_array = $arr_vc2;
$stophh_array = $arr_vc3;
$stopmm_array = $arr_vc4;
$brekhh_array = $arr_vc5;
$brekmm_array = $arr_vc6;
$totltitem_array = $arr_vc7;
$days_array = $arr_vc9;
$startampm_array = $arr_vc10;
$stopampm_array = $arr_vc11;
$result = array();
foreach($starthh_array as $key=>$val){ // Loop though one array
	$time_val1 = $startmm_array[$key]; // Get the values from the other array
	$time_val2 = $stophh_array[$key]; // Get the values from the other array
	$time_val3 = $stopmm_array[$key]; // Get the values from the other array
	$time_val4 = $brekhh_array[$key]; // Get the values from the other array
	$time_val5 = $brekmm_array[$key]; // Get the values from the other array
	$time_val6 = $totltitem_array[$key]; // Get the values from the other array
	$time_val7 = $days_array[$key]; // Get the values from the other array
	$time_val8 = $startampm_array[$key];
	$time_val9 = $stopampm_array[$key];
	$result[$key] = array( 
	    'strtampm_item' => $time_val8,
	    'stopampm_item' => $time_val9,
	    'day_item' => $time_val7,
		'starthh_item' => $val,
		'startmm_item' => $time_val1,
		'stophh_item' => $time_val2,
		'stopmm_item' => $time_val3,
		'brkhh_item' => $time_val4,
		'brkmm_item' => $time_val5,
		'tol_item' => $time_val6
		
		
	);
} 
$filename = $siteDir."timesheet_".$inputunique.".csv";
header("Content-Description: File Transfer");
header('Content-type: text/csv');
header('Content-Disposition: attachment; filename="' . $filename . '";');

$f = fopen($filename, 'w');
$fields = array('Day','Start Time HH:MM','Start Time AM/PM','Stop Time HH:MM','Stop Time AM/PM','Breaks Time HH:MM','Total Hours');
fputcsv($f, $fields);
//fputcsv($fp, $header);

foreach($result as $rowfilteritems){
	if(empty($rowfilteritems['starthh_item'])){ $starthh = "00"; } else { $starthh = $rowfilteritems['starthh_item'];}
	if(empty($rowfilteritems['startmm_item'])){ $startmm = "00"; } else { $startmm = $rowfilteritems['startmm_item'];}
	if(empty($rowfilteritems['stophh_item'])){ $stophh = "00"; } else { $stophh = $rowfilteritems['stophh_item'];}
	if(empty($rowfilteritems['stopmm_item'])){ $stopmm = "00"; } else { $stopmm = $rowfilteritems['stopmm_item'];}
	if(empty($rowfilteritems['brkhh_item'])){ $brkhh = "00"; } else { $brkhh = $rowfilteritems['brkhh_item'];}
	if(empty($rowfilteritems['brkmm_item'])){ $brkmm = "00"; } else { $brkmm = $rowfilteritems['brkmm_item'];}
	if(empty($rowfilteritems['tol_item'])){ $totlhhmm = "00"; } else { $totlhhmm = $rowfilteritems['tol_item'];}
	$totalstarttime = $starthh.':'.$startmm;
	$totalstoptime =  $stophh.':'.$stopmm;
	$totalbrkttime = $brkhh.':'.$brkmm;
	$totalhm = $totlhhmm;
	$lineData = array(
		$rowfilteritems['day_item'],
		$totalstarttime,
		$rowfilteritems['strtampm_item'],
		$totalstoptime,
		$rowfilteritems['stopampm_item'],
		$totalbrkttime,
		$totalhm
    );	
	$fput = fputcsv($f, $lineData); 
	fpassthru($f); 
}
$fields = array('Total Hours Worked','','','','','',$arr_vc8); 
fputcsv($f, $fields);
echo $siteUrl."timesheet/timesheet_".$inputunique.".csv";
exit();
}
?>
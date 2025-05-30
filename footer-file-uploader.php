<?php
header("Access-Control-Allow-Origin: *");
if (!file_exists('uploads')) {
    mkdir('uploads', 0777);
}
//print_r($_FILES);
/*
$filename = uniqid().'_'.$_FILES['ffile']['name'];
move_uploaded_file($_FILES['file']['tmp_name'], 'uploads/'.$filename);
*/
$arrFileExtension = array( 'png', 'txt', 'jpg', 'xls','xlsx', 'jpeg', 'gif','zip','psd','PSD','PNG','JPG','JPEG','GIF','AI',
'ai', 'ZIP','RAR', 'rar', 'pdf','PDF', 'doc','DOC','docx','DOCX' );
//$filecount = count($_FILES['file']['name']);
$datastr = '';
//print_r($_FILES['ffile']); die;
foreach( $_FILES['ffile'] as $key => $value ){
    $file_name  = $_FILES['ffile']['name'];
    $ext        = pathinfo($file_name, PATHINFO_EXTENSION);
    
    if( in_array($ext, $arrFileExtension) ){
        $fileSize = $_FILES['ffile']['size'] / 1024 / 1024;
        if( $fileSize > 20 ){
            echo json_encode( array( 'status' => false, 
            'message' => "ERROR Uploaded document exceeds the maximum size limit of 20 MB" ) ); 
            die;
        }
        $name_of_file = substr($file_name, 0, strrpos($file_name, '.'));
        $name_of_file = str_replace(' ', '-', $name_of_file);
        $name_of_file = preg_replace('/[^A-Za-z0-9\-]/', '', $name_of_file);
        $name_of_file = preg_replace('/-+/', '-', $name_of_file);

        $updated_name = time().'_'.$name_of_file.".".$ext;
        /*
        if($value == 'name'){
            $datastr = $datastr . $updated_name.',';
        }
        */
        $datastr = $datastr.$updated_name.',';
        if( move_uploaded_file( $_FILES['ffile']['tmp_name'], '/home/workstatus-io/public_html/uploads/'.$updated_name ) ){
            echo json_encode( array( 'status' => true, 'file' => $datastr ) ); die;
        }else{
            echo json_encode( array( 'status' => false, 'message' => "Error in file uploading." ) ); die;
        }
    }else{
        echo json_encode( array( 'status' => false, 'message' => "Invalid File type." ) ); die;
    }
}
<?php
if ( $_SERVER['REQUEST_METHOD']=='GET' && realpath(__FILE__) == realpath( $_SERVER['SCRIPT_FILENAME'] ) ) {
header( 'HTTP/1.0 403 Forbidden', TRUE, 403 );
die( "Invalid access" );
}

//header("Access-Control-Allow-Origin: *");
if (!file_exists('uploads')) {
    mkdir('uploads', 0777);
}

/*
$arrFileExtension = array( 'png', 'txt', 'jpg', 'xls','xlsx', 'jpeg', 'gif','zip','psd','PSD','PNG','JPG','JPEG','GIF','AI',
'ai', 'ZIP','RAR', 'rar', 'pdf','PDF', 'doc','DOC','docx','DOCX' );
*/

$arrFileExtension = ['bmp', 'jpg', 'jpeg', 'png', 'gif', 'tiff', 'pdf', 'doc', 'docx', 'BMP', 'JPG', 'JPEG', 'PNG', 'GIF', 'TIFF', 'PDF', 'DOC', 'DOCX'];
$datastr = '';
foreach( $_FILES['ffile'] as $key => $value ){
    $file_name  = $_FILES['ffile']['name'];
    $ext        = pathinfo($file_name, PATHINFO_EXTENSION);
    
    if( in_array($ext, $arrFileExtension) ){
        $fileSize = $_FILES['ffile']['size'] / 1024 / 1024;
        if( $fileSize > 1 ){
            echo json_encode( array( 'status' => false, 
            'message' => "ERROR Uploaded document exceeds the maximum size limit of 1 MB" ) ); 
            die;
        }
        $name_of_file = substr($file_name, 0, strrpos($file_name, '.'));
        $name_of_file = str_replace(' ', '-', $name_of_file);
        $name_of_file = preg_replace('/[^A-Za-z0-9\-]/', '', $name_of_file);
        $name_of_file = preg_replace('/-+/', '-', $name_of_file);

        $updated_name = time().'_'.$name_of_file.".".$ext;
        $datastr = $datastr.$updated_name.',';
        
        $dir = '/home/workstatus-io/public_html/uploads/';
        if( isset( $_SERVER['HTTP_HOST'] ) && ($_SERVER['HTTP_HOST'] == "localhost") ){
        $dir = '/var/www/html/workstatus-wp/uploads/';    
        }
        
        if( move_uploaded_file( $_FILES['ffile']['tmp_name'], $dir.$updated_name ) ){
            echo json_encode( array( 'status' => true, 'file' => $datastr ) ); die;
        }else{
            echo json_encode( array( 'status' => false, 'message' => "Error in file uploading." ) ); die;
        }
    }else{
        echo json_encode( array( 'status' => false, 'message' => "Invalid File type." ) ); die;
    }
}
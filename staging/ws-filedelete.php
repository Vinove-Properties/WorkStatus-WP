<?php 
if ( $_SERVER['REQUEST_METHOD']=='GET' && realpath(__FILE__) == realpath( $_SERVER['SCRIPT_FILENAME'] ) ) {
//header( 'HTTP/1.0 403 Forbidden', TRUE, 403 );
//die( "Invalid access" );
}
if(isset($_GET['delete']) && $_GET['delete']==1){
    $str=rtrim($_GET['imageName'],',');
    $imagPath='./uploads/'.$str;
    if(unlink($imagPath)){
        return true;
    }else{
        false;
    }
}
?>
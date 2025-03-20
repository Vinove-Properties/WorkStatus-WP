<link rel="shortcut icon" href="assests/images/favicon.png" type="image/x-icon">
<?php 
$ws_site_url = "https://www.workstatus.io/";
if( isset( $_SERVER['HTTP_HOST'] ) && ($_SERVER['HTTP_HOST'] == "localhost") ){
    $ws_site_url = "http://localhost/workstatus/";
}elseif( isset( $_SERVER['HTTP_HOST'] ) && ($_SERVER['HTTP_HOST'] == "https://beta.vinove.com/workstatus.io") ){
    $ws_site_url = "https://beta.vinove.com/workstatus.io/";
}elseif( isset( $_SERVER['HTTP_HOST'] ) && ($_SERVER['HTTP_HOST'] == "beta.vinove.com") ){
    $ws_site_url = "https://beta.vinove.com/workstatus.io/";
}
?>
<script type="text/javascript">
var ws_site_url = "<?php echo $ws_site_url; ?>";
</script>
<?php if( !isMobile() ) : ?>
<link type="text/css" href="assests/css/glider.css" rel="preload stylesheet" as="style" />
<?php endif; ?>
<style>
.banner-form .popup-wrapper.is-active{display:block !important;}
</style>
<?php require_once 'common/inc/meta.php'; ?>
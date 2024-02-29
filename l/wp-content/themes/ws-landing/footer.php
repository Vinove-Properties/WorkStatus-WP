<?php 
if(!is_page_template([
	'page-templates/tpl-version5.0.php',
	'page-templates/tpl-version5.1.php',
	'page-templates/tpl-version6.0.php'
	] ) ){ 
	dynamic_sidebar('footer-widget'); 
}
?>
<!-- 
<?php //if( wp_is_mobile() ) : ?>
<div class="stickysec"><a href="https://app.workstatus.io/auth/register/" class="btn">Free 14 Days Trial </a></div>
<?php //endif; ?> 
-->
<?php wp_footer(); ?>
</body>
</html>

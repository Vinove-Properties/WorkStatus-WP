<?php
global $wp;
//echo '<pre>'; print_r( $wp ); echo '</pre>'; die;
//$fslug = ( isset($wp->query_vars['category_name']) && ( $wp->query_vars['category_name'] === "404" ) ) ? true : false;

$fslug = ( isset($wp->request) && ( $wp->request === "404" ) ) ? true : false;
if( $fslug === false ){
	header("HTTP/1.1 301 Moved Permanently");
	if( $wp->query_vars['name'] == "suggest-feature" ){
		header("Location: https://www.workstatus.io/suggest-feature.php");
		die;
	}elseif( $wp->query_vars['name'] == "report-bugs" ){
		header("Location: https://www.workstatus.io/report-bugs.php");
		die;
	}
	header("Location: ".site_url('/404'));
	exit();
}
get_header();
?>
<main class="site__content background_grey">
	<section class="error404">
	<div class="not-found section">
		<i class="fa fa-exclamation-circle"></i>
		<h1 class="title ularge white"><strong>404</strong><br>Page not found</h1>
		<div></div>
	</div>
	<div class="page-content">
		<h2 class="text_center">Something's wrong here...</h2>
		<p class="text_center">We can't find the page you're looking.</p>
		<p class="text_center">
			<a href="<?php bloginfo('url'); ?>" class="primary_btn outline"><i class="fa fa-share fa-flip-horizontal"></i> Go back to home</a>
		</p>
	</div>
	</section>
</main>
<?php get_footer(); ?>
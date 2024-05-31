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
<script type="text/javascript">
function startCountdown(duration, min, sec) {
    var timer = duration, minutes, seconds;
    setInterval(function () {
        minutes = parseInt(timer / 60, 10);
        seconds = parseInt(timer % 60, 10);

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;
        
        min.textContent = minutes;
        sec.textContent = seconds;
        if (--timer < 0) {
            timer = duration;
        }
    }, 1000);
}

window.onload = function () {
	if( document.body.classList.contains('clock-stripe') ){
		var cnMin = document.getElementById("of-min");
	    var cnSec = document.getElementById("of-sec");
	    var duration = 45 * 60; // 45 minutes in seconds
	    startCountdown(duration, cnMin, cnSec);
	}
    
};	
</script>
</body>
</html>

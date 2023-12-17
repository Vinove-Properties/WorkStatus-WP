<?php  
		$workstatus_for_all_devices = get_field('workstatus_for_all_devices', 'option');
		//echo '<pre>';
		//print_r($testimonials);
		if( $workstatus_for_all_devices ) :
		$isEnable = $workstatus_for_all_devices['is_enabled'];
		if( $isEnable == "yes" ){ 
		?>	
<div class="container">
   <div class="top-section">
      <h6><span class="bg-white"><?php echo $workstatus_for_all_devices['heading']; ?></span></h6>
      <h2><?php echo $workstatus_for_all_devices['sub_heading']; ?></h2>
      <?php echo $workstatus_for_all_devices['content']; ?>
   </div>
   <div class="wsmApp"> 

   <?php 
					if( $workstatus_for_all_devices['device_icons_upload'] ){  $i = 7;
					foreach( $workstatus_for_all_devices['device_icons_upload'] as $row ) { 
						$image      = $row['image'];
						$active = ($i==7) ? "active" : "";
					?>
      <a href="<?php echo $row['url']; ?>" download><img loading="lazy" src="<?php echo $row['icons_upload']['url'] ?>" alt="google play" width="200" height="50"></a> 
     <!-- <a href="https://app.Workstatus.io/downloads/mac/workstatus.dmg" download><img loading="lazy" src="https://www.workstatus.io/assests/images/formac.png" alt="google play" width="200" height="50"></a> 
      <a href="https://play.google.com/store/apps/details?id=com.vinove.workstatus&pcampaignid=pcampaignidMKT-Other-global-all-co-prtnr-py-PartBadge-Mar2515-1" rel="nofollow"><img loading="lazy" src="https://www.workstatus.io/assests/images/googleplay2.png" alt="google play" width="200" height="50"></a> 
      <a href="https://apps.apple.com/us/app/Workstatus-tm/id1570416295" rel="nofollow"><img loading="lazy" src="https://www.workstatus.io/assests/images/apple2.png" alt="apple" width="200" height="50"></a>  -->

      <?php $i++; } } ?>
   </div>
   <p><?php echo $workstatus_for_all_devices['bottom_text']; ?></p>
</div>
<?php } endif; ?>
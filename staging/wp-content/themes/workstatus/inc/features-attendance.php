<?php 
$title = ( isset($args['title']) && !empty($args['title']) ) ? $args['title'] : "STAY IN CONTROL";
$body = ( isset($args['body']) && !empty($args['body']) ) ? $args['body'] : "<h2>Compare Projects</h2><p>Say goodbye to scattered tasks and documents. With Projecto, you'll be able to focus on what matters most - getting things done.</p>";
?>

<div class="container">
  <div class="top-section">
  <?php 
  if( !empty( $title ) ){
    echo '<h6><span class="bg-purple">'.$title.'</span></h6>';  
  }
  echo $body;
  ?>    
  </div>
  <div class="compare-tabs">
    <div class="tbbtn active" data-prod="hubstaff">Hubstaff</div>
    <div class="tbbtn" data-prod="desktime">Desktime</div>
    <div class="tbbtn active" data-prod="timedoctor">Time Doctor</div>
    <div class="tbbtn" data-prod="insightful">Insightful</div>
    <div class="tbbtn" data-prod="we360">we360</div>
    <div class="tbbtn active" data-prod="activtrak">Activ Trak</div>
    <div class="tbbtn active" data-prod="teramind">Teramind</div>
    <div class="tbbtn active" data-prod="monitask">Monitask</div>
    <div class="tbbtn" data-prod="timechamp">TimeChamp</div>
    <div class="tbbtn" data-prod="everhour">Everhour</div>
    <div class="tbbtn" data-prod="clockify">Clockify</div>
    <div class="tbbtn" data-prod="toggl">Toggl</div>
    <div class="tbbtn active" data-prod="truein">Truein</div>
    <div class="tbbtn" data-prod="zoho">Zoho People</div>
    <div class="tbbtn" data-prod="apploye">Apploye</div>
    <div class="tbbtn" data-prod="harvest">Harvest</div>
    <div class="tbbtn" data-prod="trackolap">Trackolap</div>
    <div class="tbbtn" data-prod="myhours">Myhours</div>
    <div class="tbbtn" data-prod="handdy">Handdy</div>
    <div class="tbbtn" data-prod="empmonitor">Empmonitor</div>
  </div>
  <div class="features-container">
    <div class="compare-column elemnt fst-elemnt">
      <div class="tool-col comp-logo comphead">Compare features</div>
      <div class="tool-col">Attendance Management</div>
      <div class="tool-col">Shift Scheduling</div>
      <div class="tool-col">Leave Management</div>
      <div class="tool-col">Calendar Time</div>
      <div class="tool-col">Selfie validation with geofence</div>
      <div class="tool-col">Time Tracking</div>
      <div class="tool-col">Productivity Monitoring</div>      
      <div class="tool-col comprice">Pricing</div>
    </div>
    <div class="compare-column elemnt" id="cmp-workstatus">
      <div class="tool-col comp-logo">
        <picture><img loading="lazy" src="<?php bloginfo('template_url'); ?>/assests/images/complogo-01.svg" alt="" width="125" height="17"></picture>
        <span class="price active"><?php echo _getComparePricing(1.6, 135, true); ?></span>
      </div>
      <div class="tool-col"><i class="check-icon"></i></div>
      <div class="tool-col"><i class="check-icon"></i></div>
      <div class="tool-col"><i class="check-icon"></i></div>
      <div class="tool-col"><i class="check-icon"></i></div>
      <div class="tool-col"><i class="check-icon"></i></div>
      <div class="tool-col"><i class="check-icon"></i></div>
      <div class="tool-col"><i class="check-icon"></i></div>
      <div class="tool-col comprice"><?php echo _getComparePricing(1.6, 135, false, "#"); ?></div>
    </div>
    <div class="compare-column" id="cmp-hubstaff">
      <div class="tool-col comp-logo">
        <strong>Hubstaff</strong>
        <span class="price"><?php echo _getComparePricing(7, 593, true); ?></span>
      </div>
      <div class="tool-col"><i class="check-icon"></i></div>
      <div class="tool-col"><i class="check-icon"></i></div>
      <div class="tool-col"><i class="check-icon"></i></div>
      <div class="tool-col"><i class="check-icon"></i></div>
      <div class="tool-col"><i class="check-icon"></i></div>
      <div class="tool-col"><i class="check-icon"></i></div>
      <div class="tool-col"><i class="check-icon"></i></div>
      <div class="tool-col comprice"><?php echo _getComparePricing(7, 593, false, "#"); ?></div>
    </div>
    <div class="compare-column" id="cmp-truein">
      <div class="tool-col comp-logo">
        <strong>Truein</strong>
        <span class="price"><?php echo _getComparePricing(5, 423, true); ?></span>
      </div>
      <div class="tool-col"><i class="check-icon"></i></div>
      <div class="tool-col"><i class="check-icon"></i></div>
      <div class="tool-col"><i class="check-icon"></i></div>
      <div class="tool-col"><i class="cross-icon"></i></div>
      <div class="tool-col"><i class="check-icon"></i></div>
      <div class="tool-col"><i class="check-icon"></i></div>
      <div class="tool-col"><i class="check-icon"></i></div>
      <div class="tool-col comprice"><?php echo _getComparePricing(5, 423, false, "#"); ?></div>
    </div>
    <div class="compare-column" id="cmp-timedoctor">
      <div class="tool-col comp-logo">
        <strong>Time Doctor</strong>
        <span class="price"><?php echo _getComparePricing(11, 931, true); ?></span>
      </div>
      <div class="tool-col"><i class="check-icon"></i></div>
      <div class="tool-col"><i class="check-icon"></i></div>
      <div class="tool-col"><i class="check-icon"></i></div>
      <div class="tool-col"><i class="cross-icon"></i></div>
      <div class="tool-col"><i class="cross-icon"></i></div>
      <div class="tool-col"><i class="check-icon"></i></div>
      <div class="tool-col"><i class="check-icon"></i></div>
      <div class="tool-col comprice"><?php echo _getComparePricing(11, 931, false, "#"); ?></div>
    </div>
    <div class="compare-column" id="cmp-activtrak">
      <div class="tool-col comp-logo">
        <strong>Activ Trak</strong>
        <span class="price"><?php echo _getComparePricing(7, 593, true); ?></span>
      </div>
      <div class="tool-col"><i class="cross-icon"></i></div>
      <div class="tool-col"><i class="cross-icon"></i></div>
      <div class="tool-col"><i class="cross-icon"></i></div>
      <div class="tool-col"><i class="check-icon"></i></div>
      <div class="tool-col"><i class="cross-icon"></i></div>      
      <div class="tool-col"><i class="check-icon"></i></div>
      <div class="tool-col"><i class="check-icon"></i></div>
      <div class="tool-col comprice"><?php echo _getComparePricing(7, 593, false, "#"); ?></div>
    </div>
    <div class="compare-column" id="cmp-teramind">
      <div class="tool-col comp-logo">
        <strong>Teramind</strong>
        <span class="price"><?php echo _getComparePricing(13, 1100, true); ?></span>
      </div>
      <div class="tool-col"><i class="check-icon"></i></div>
      <div class="tool-col"><i class="check-icon"></i></div>
      <div class="tool-col"><i class="check-icon"></i></div>
      <div class="tool-col"><i class="cross-icon"></i></div>
      <div class="tool-col"><i class="cross-icon"></i></div>      
      <div class="tool-col"><i class="check-icon"></i></div>
      <div class="tool-col"><i class="check-icon"></i></div>
      <div class="tool-col comprice"><?php echo _getComparePricing(13, 1100, false, "#"); ?></div>
    </div>
    <div class="compare-column" id="cmp-monitask">
      <div class="tool-col comp-logo">
        <strong>Monitask</strong>
        <span class="price"><?php echo _getComparePricing(5, 423, true); ?></span>
      </div>
      <div class="tool-col"><i class="check-icon"></i></div>
      <div class="tool-col"><i class="check-icon"></i></div>
      <div class="tool-col"><i class="check-icon"></i></div>
      <div class="tool-col"><i class="cross-icon"></i></div>
      <div class="tool-col"><i class="cross-icon"></i></div>
      <div class="tool-col"><i class="check-icon"></i></div>
      <div class="tool-col"><i class="check-icon"></i></div>
      <div class="tool-col comprice"><?php echo _getComparePricing(5, 423, false, "#"); ?></div>
    </div>
    <div class="compare-column" id="cmp-desktime" style="display:none;">
      <div class="tool-col comp-logo">
        <strong>Desktime</strong>
        <span class="price"><?php echo _getComparePricing(6, 508, true); ?></span>
      </div>
      <div class="tool-col"><i class="check-icon"></i></div>
      <div class="tool-col"><i class="check-icon"></i></div>
      <div class="tool-col"><i class="check-icon"></i></div>
      <div class="tool-col"><i class="check-icon"></i></div>
      <div class="tool-col"><i class="cross-icon"></i></div>
      <div class="tool-col"><i class="check-icon"></i></div>
      <div class="tool-col"><i class="check-icon"></i></div>
      <div class="tool-col comprice"><?php echo _getComparePricing(6, 508, false, "#"); ?></div>
    </div>
    <div class="compare-column" id="cmp-insightful" style="display:none;">
      <div class="tool-col comp-logo">
        <strong>Insightful</strong>
        <span class="price"><?php echo _getComparePricing(8, 677, true, "#"); ?></span>
      </div>
      <div class="tool-col"><i class="check-icon"></i></div>
      <div class="tool-col"><i class="check-icon"></i></div>
      <div class="tool-col"><i class="check-icon"></i></div>
      <div class="tool-col"><i class="check-icon"></i></div>
      <div class="tool-col"><i class="cross-icon"></i></div>
      <div class="tool-col"><i class="check-icon"></i></div>
      <div class="tool-col"><i class="check-icon"></i></div>
      <div class="tool-col comprice"><?php echo _getComparePricing(8, 677, false, "#"); ?></div>
    </div>
    <div class="compare-column" id="cmp-we360" style="display:none;">
      <div class="tool-col comp-logo">
        <strong>we360</strong>
        <span class="price"><?php echo _getComparePricing(5.50, 465, true, "#"); ?></span>
      </div>
      <div class="tool-col"><i class="check-icon"></i></div>
      <div class="tool-col"><i class="check-icon"></i></div>
      <div class="tool-col"><i class="check-icon"></i></div>
      <div class="tool-col"><i class="cross-icon"></i></div>
      <div class="tool-col"><i class="cross-icon"></i></div>
      <div class="tool-col"><i class="check-icon"></i></div>
      <div class="tool-col"><i class="check-icon"></i></div>
      <div class="tool-col comprice"><?php echo _getComparePricing(5.50, 465, false, "#"); ?></div>
    </div>
    <div class="compare-column" id="cmp-activtrak" style="display:none;">
      <div class="tool-col comp-logo">
        <strong>Activtrak</strong>
        <span class="price"><?php echo _getComparePricing(7, 593, true); ?></span>
      </div>
      <div class="tool-col"><i class="cross-icon"></i></div>
      <div class="tool-col"><i class="cross-icon"></i></div>      
      <div class="tool-col"><i class="cross-icon"></i></div>
      <div class="tool-col"><i class="check-icon"></i></div>
      <div class="tool-col"><i class="cross-icon"></i></div>
      <div class="tool-col"><i class="check-icon"></i></div>
      <div class="tool-col"><i class="check-icon"></i></div>
      <div class="tool-col comprice"><?php echo _getComparePricing(7, 593, false, "#"); ?></div>
    </div>
    <div class="compare-column" id="cmp-timechamp" style="display:none;">
      <div class="tool-col comp-logo">
        <strong>TimeChamp</strong>
        <span class="price"><?php echo _getComparePricing(6, 508, true, "#"); ?></span>
      </div>
      <div class="tool-col"><i class="check-icon"></i></div>
      <div class="tool-col"><i class="cross-icon"></i></div>      
      <div class="tool-col"><i class="check-icon"></i></div>
      <div class="tool-col"><i class="cross-icon"></i></div>
      <div class="tool-col"><i class="cross-icon"></i></div>
      <div class="tool-col"><i class="check-icon"></i></div>
      <div class="tool-col"><i class="check-icon"></i></div>
      <div class="tool-col comprice"><?php echo _getComparePricing(6, 508, false, "#"); ?></div>
    </div>
    <div class="compare-column" id="cmp-everhour" style="display:none;">
      <div class="tool-col comp-logo">
        <strong>Everhour</strong>
        <span class="price">NA</span>
      </div>
      <div class="tool-col"><i class="check-icon"></i></div>
      <div class="tool-col"><i class="check-icon"></i></div>      
      <div class="tool-col"><i class="check-icon"></i></div>
      <div class="tool-col"><i class="cross-icon"></i></div>
      <div class="tool-col"><i class="cross-icon"></i></div>
      <div class="tool-col"><i class="check-icon"></i></div>
      <div class="tool-col"><i class="check-icon"></i></div>
      <div class="tool-col comprice"><span class="btn">$15</span><span class="small-font">(Per user / Month)</span>
        <a href="#" class="knowmre">Know More</a>
      </div>
    </div>
    <div class="compare-column" id="cmp-clockify" style="display:none;">
      <div class="tool-col comp-logo">
        <strong>Clockify</strong>
        <span class="price"><?php echo _getComparePricing(7, 593, true); ?></span>
      </div>
      <div class="tool-col"><i class="check-icon"></i></div>
      <div class="tool-col"><i class="check-icon"></i></div>      
      <div class="tool-col"><i class="check-icon"></i></div>
      <div class="tool-col"><i class="check-icon"></i></div>
      <div class="tool-col"><i class="cross-icon"></i></div>
      <div class="tool-col"><i class="check-icon"></i></div>
      <div class="tool-col"><i class="check-icon"></i></div>
      <div class="tool-col comprice"><?php echo _getComparePricing(7, 593, false, "#"); ?></div>
    </div>
    <div class="compare-column" id="cmp-toggl" style="display:none;">
      <div class="tool-col comp-logo">
        <strong>Toggl</strong>
        <span class="price"><?php echo _getComparePricing(9, 762, true); ?></span>
      </div>
      <div class="tool-col"><i class="cross-icon"></i></div>
      <div class="tool-col"><i class="cross-icon"></i></div>
      <div class="tool-col"><i class="cross-icon"></i></div>
      <div class="tool-col"><i class="check-icon"></i></div>
      <div class="tool-col"><i class="cross-icon"></i></div>
      <div class="tool-col"><i class="check-icon"></i></div>
      <div class="tool-col"><i class="check-icon"></i></div>
      <div class="tool-col comprice"><?php echo _getComparePricing(9, 762, false, "#"); ?></div>
    </div>
    <div class="compare-column" id="cmp-zoho" style="display:none;">
      <div class="tool-col comp-logo">
        <strong>Zoho People</strong>
        <span class="price">NA</span>
      </div>
      <div class="tool-col"><i class="check-icon"></i></div>
      <div class="tool-col"><i class="check-icon"></i></div>
      <div class="tool-col"><i class="check-icon"></i></div>
      <div class="tool-col"><i class="check-icon"></i></div>
      <div class="tool-col"><i class="check-icon"></i></div>
      <div class="tool-col"><i class="check-icon"></i></div>
      <div class="tool-col"><i class="check-icon"></i></div>
      <div class="tool-col comprice"><span class="btn">$15</span><span class="small-font">(Per user / Month)</span>
        <a href="#" class="knowmre">Know More</a>
      </div>
    </div>
    <div class="compare-column" id="cmp-apploye" style="display:none;">
      <div class="tool-col comp-logo">
        <strong>Apploye</strong>
        <span class="price">NA</span>
      </div>
      <div class="tool-col"><i class="check-icon"></i></div>
      <div class="tool-col"><i class="cross-icon"></i></div>
      <div class="tool-col"><i class="check-icon"></i></div>
      <div class="tool-col"><i class="cross-icon"></i></div>
      <div class="tool-col"><i class="cross-icon"></i></div>
      <div class="tool-col"><i class="check-icon"></i></div>
      <div class="tool-col"><i class="check-icon"></i></div>
      <div class="tool-col comprice"><span class="btn">$15</span><span class="small-font">(Per user / Month)</span>
        <a href="#" class="knowmre">Know More</a>
      </div>
    </div>
    <div class="compare-column" id="cmp-harvest" style="display:none;">
      <div class="tool-col comp-logo">
        <strong>Harvest</strong>
        <span class="price"><?php echo _getComparePricing(10, 847, true); ?></span>
      </div>
      <div class="tool-col"><i class="cross-icon"></i></div>
      <div class="tool-col"><i class="cross-icon"></i></div>      
      <div class="tool-col"><i class="cross-icon"></i></div>      
      <div class="tool-col"><i class="cross-icon"></i></div>
      <div class="tool-col"><i class="cross-icon"></i></div>
      <div class="tool-col"><i class="check-icon"></i></div>
      <div class="tool-col"><i class="check-icon"></i></div>
      <div class="tool-col comprice"><?php echo _getComparePricing(10, 847, false, "#"); ?></div>
    </div>
    <div class="compare-column" id="cmp-trackolap" style="display:none;">
      <div class="tool-col comp-logo">
        <strong>Trackolap</strong>
        <span class="price"><?php echo _getComparePricing(10, 847, true); ?></span>
      </div>
      <div class="tool-col"><i class="check-icon"></i></div>
      <div class="tool-col"><i class="cross-icon"></i></div>
      <div class="tool-col"><i class="check-icon"></i></div>
      <div class="tool-col"><i class="cross-icon"></i></div>
      <div class="tool-col"><i class="cross-icon"></i></div>
      <div class="tool-col"><i class="check-icon"></i></div>
      <div class="tool-col"><i class="check-icon"></i></div>
      <div class="tool-col comprice"><?php echo _getComparePricing(10, 847, false, "#"); ?></div>
    </div>
    <div class="compare-column" id="cmp-myhours" style="display:none;">
      <div class="tool-col comp-logo">
        <strong>Myhours</strong>
        <span class="price"><?php echo _getComparePricing(8, 677, true); ?></span>
      </div>
      <div class="tool-col"><i class="check-icon"></i></div>
      <div class="tool-col"><i class="cross-icon"></i></div>
      <div class="tool-col"><i class="cross-icon"></i></div>
      <div class="tool-col"><i class="cross-icon"></i></div>
      <div class="tool-col"><i class="cross-icon"></i></div>
      <div class="tool-col"><i class="check-icon"></i></div>
      <div class="tool-col"><i class="cross-icon"></i></div>
      <div class="tool-col comprice"><?php echo _getComparePricing(8, 677, false, "#"); ?></div>
    </div>
    <div class="compare-column" id="cmp-handdy" style="display:none;">
      <div class="tool-col comp-logo">
        <strong>Handdy</strong>
        <span class="price">NA</span>
      </div>
      <div class="tool-col"><i class="check-icon"></i></div>
      <div class="tool-col"><i class="check-icon"></i></div>
      <div class="tool-col"><i class="cross-icon"></i></div>
      <div class="tool-col"><i class="cross-icon"></i></div>
      <div class="tool-col"><i class="cross-icon"></i></div>
      <div class="tool-col"><i class="check-icon"></i></div>
      <div class="tool-col"><i class="check-icon"></i></div>
      <div class="tool-col comprice"><span class="btn">$15</span><span class="small-font">(Per user / Month)</span>
        <a href="#" class="knowmre">Know More</a>
      </div>
    </div>
    <div class="compare-column" id="cmp-empmonitor" style="display:none;">
      <div class="tool-col comp-logo">
        <strong>Empmonitor</strong>
        <span class="price"><?php echo _getComparePricing(4.70, 398, true); ?></span>
      </div>
      <div class="tool-col"><i class="check-icon"></i></div>
      <div class="tool-col"><i class="check-icon"></i></div>
      <div class="tool-col"><i class="check-icon"></i></div>
      <div class="tool-col"><i class="cross-icon"></i></div>
      <div class="tool-col"><i class="cross-icon"></i></div>
      <div class="tool-col"><i class="check-icon"></i></div>
      <div class="tool-col"><i class="check-icon"></i></div>
      <div class="tool-col comprice"><?php echo _getComparePricing(4.70, 398, false, "#"); ?></div>
    </div>
  </div>
</div>
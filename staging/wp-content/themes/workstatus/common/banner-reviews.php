<div class="banner-award">
<div class="award-box">
  <div class="client-section">
    <div class="client-row">
      <div class="client-stack award-animate-slide-to-left hover:pause">
        <ul>
          <?php 
          $reviewOpt = get_field('inv-breview', 'option');
          for ($i=0; $i < 3; $i++){
            if( $reviewOpt ){
              foreach( $reviewOpt as $row ){
              echo '<li>
              <div class="star-rt">'.$row['rating'].' <img loading="lazy" 
              src="'.get_bloginfo('template_url').'/assests/images/4.6star.svg" alt="Award" width="100" height="17">
              </div>
              <p>'.$row['text'].'</p>';
              if( $row['logo'] ){
                echo '<picture class="awimg">
                <img loading="lazy" src="'.$row['logo']['url'].'" alt="'.$row['logo']['alt'].'" width="'.$row['logo']['width'].'"
                height="'.$row['logo']['height'].'">
                </picture>';
              }
              echo '</li>';
              }
            }  
          } ?>
        </ul>
      </div>
    </div>
  </div>
</div>
</div>
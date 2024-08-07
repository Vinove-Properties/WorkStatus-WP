<div class="banner-award">
<div class="award-box">
  <div class="client-section">
    <div class="client-row">
      <div class="client-stack award-animate-slide-to-left hover:pause">
        <ul>
          <?php 
          $reviewOpt = get_field('inv-breview', 'option');
          for ($i=0; $i < 6; $i++){
            if( $reviewOpt ){
              foreach( $reviewOpt as $row ){
              $rating = 'start-4.5.svg';
              if( $row['rating'] == "4.6 Excellent" ){
                $rating = 'start-4.6.svg';
              }elseif( $row['rating'] == "4.8 Excellent" ){
                $rating = 'start-4.8.svg';                
              }
              echo '<li>
              <div class="star-rt">'.$row['rating'].' <img 
              src="'.get_bloginfo('template_url').'/dev-images/'.$rating.'" alt="Award" width="100" height="17">
              </div>
              <p>'.$row['text'].'</p>';
              if( $row['logo'] ){
                echo '<picture class="awimg">
                <img src="'.$row['logo']['url'].'" alt="'.$row['logo']['alt'].'" width="'.$row['logo']['width'].'"
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
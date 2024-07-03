  <?php 
  $front_page_id = get_option('page_on_front');
  $wstestimonial = get_field('ws-testimonials', $front_page_id);
  if( isset( $wstestimonial['is_enabled'] ) && $wstestimonial['is_enabled'] == "yes" ) :
  ?>
  <section class="testimonial-section bglight">
    <div class="container">
      <div class="top-section">
        <h6><span class="bg-purple"><?php echo $wstestimonial['heading']; ?></span></h6>
        <h2><?php echo $wstestimonial['sub_headings']; ?></h2>
      </div>
      <?php
        if( $wstestimonial['testimonail'] ){
        ?>
      <div class="glider-contain testimonial-slider">
        <div class="glider" id="glider">
          <?php 
            $vd = 0;
            foreach( $wstestimonial['testimonail'] as $row ) : $vd++; 
            //print_r($row);	
            ?>
          <div class="slide-item">
            <div class="test-row">
              <?php 
                $hasVideo = ( isset($row['yt-video']) && !empty( $row['yt-video'] ) ) ? $row['yt-video'] : false;
                if( $hasVideo !== false ){
                ?>
              <div class="client-videos" id="cvbox-<?php echo $vd; ?>">
                <div class="client-video-box">
                  <iframe class="yt-player"  id="ytiframe-<?php echo $vd; ?>" style="display:none;"></iframe>
                  <a class="frame-mask" href="javascript:void(0);" onclick="playTetiVideo(<?php echo $vd; ?>, '<?php echo $hasVideo; ?>', this)">
                    <picture>
                      <source type="image/png" srcset="<?php echo $row['image']['url']; ?>">
                      <img loading="lazy" src="<?php echo $row['image']['url']; ?>" alt="Workstatus" 
                        width="<?php echo $row['image']['width']; ?>" height="<?php echo $row['image']['height']; ?>">
                      <div class="playBtn">
                        <div class="playsc"><span class="playicon"></span></div>
                      </div>
                    </picture>
                  </a>
                </div>
              </div>
              <?php }else{ ?>
              <div class="cust-img-box">
                <?php 
                  if( $row['image'] ){
                  	echo pxlGetPtag( $row['image'] );
                  } 
                  ?>	
              </div>
              <?php } ?>	
              <div class="content-box">
                <?php echo $row['content']; ?>
                <?php 
                  if( $row['name'] ){
                  	echo '<h5>'.$row['name'].'</h5>';
                  }
                  if( $row['designation'] ){
                  	echo '<span class="designtn">'.$row['designation'].'</span>';
                  }
                  
                  if( $row['website'] ){
                  	echo '<span class="web">'.$row['website'].'</span>';
                  }
                  ?>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
        <div role="tablist" class="dots"></div>
      </div>
      <?php } ?>
    </div>
  </section>
  <?php endif; ?>
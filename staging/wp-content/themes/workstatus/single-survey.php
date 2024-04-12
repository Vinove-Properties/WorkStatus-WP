<?php 
$postRequest = _hanldeSurveyRequest( $_POST );
//echo decryptEmailData($_GET['uid']); die;
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
   <style type="text/css">
   span.error{color: red; display: none;}   
   .question.err span.error{display: block;}   
   </style>
  </head>
  <body>   
   <?php if( $postRequest === true ) : ?>
    <div id="survey-thank" class="survey-thank">
      <div id="surveypop" class="popup-wrapper " style="display: block;">
        <div class="popWrap">
          <div class="popup-content">
            <span class="closeicon" onclick="_closeThanks('survey-thank');"></span>
            <picture>
            <img loading="lazy" src="<?php bloginfo('template_url'); ?>/dev-images/thank-img.svg" width="127" height="136" alt="Workstatus">
            </picture>
            <h2>Thank You</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has</p>
          </div>
        </div>
      </div>
    </div>
   <?php endif; ?>

    <section class="survey-sec">
      <div class="container">
        <div class="logo">
          <a href="<?php echo site_url(); ?>" title="Workstatus">
            <picture>
              <img src="<?php echo get_template_directory_uri(); ?>/assests/images/logo.svg" alt="Workstatus" width="186" height="25">
            </picture>
          </a>
        </div>
        <?php 
          $ws_survey = get_field('ws-survery');
          ?>
        <div class="survey-box">
          <h1><?php echo get_field('sy-title'); ?></h1>
          <form action="<?php echo get_permalink(); ?>" class="surform" method="POST" onsubmit="return _handle_survey(this);">
            <?php 

              if( $ws_survey ){
                 //echo '<pre>'; print_r($ws_survey); die;
                 $q = 0;
                 foreach( $ws_survey as $que ){ $q++;
                    $qu   = 'que-'.$q;
                    $ans  = 'ans-'.$q;
                    echo '<div id="ans-'.$q.'" class="question"><h3>'.$que['question'].'</h3>';
                    echo '<input type="hidden" name="'.$qu.'" value="'.$que['question'].'">';
                    if( $que['answears'] ){
                       $op = 0;
                       foreach( $que['answears'] as $opt){ $op++;
                          echo '<div class="form-field">
                          <input type="radio" id="'.$qu.'-'.$op.'" name="'.$ans.'" value="'.$opt['options'].'">
                          <label for="'.$qu.'-'.$op.'">'.$opt['options'].'</label>
                          </div>';
                       }
                    }
                 echo '<span class="error">Please answer this question.</span>';
                 echo '</div>';
                 }
              }
              ?>
            <div class="conclusion">
            <?php echo get_field('ws-offers'); ?>
            </div>
            <input type="hidden" name="post_id" value="<?php echo get_the_ID(); ?>">
            <?php 
            $csrfNonce = wp_create_nonce( 'post_survey-'.get_the_ID() ); 
            echo '<input type="hidden" name="su-nonce" value="'.$csrfNonce.'">';
            ?>
            <input type="hidden" name="email_addr" 
            value="<?php echo (isset($_GET['uid']) && !empty($_GET['uid'])) ? $_GET['uid'] : ''; ?>">
            <button type="submit">Submit My Feedback</button>
            </form>
        </div>
      </div>
    </section>
    <script type="text/javascript">
      const radioButtons = document.querySelectorAll('input[type="radio"]');
      radioButtons.forEach(function(radioButton) {
      radioButton.addEventListener('change', function(){
         document.getElementById(this.name).classList.remove('err');
      });
      });
      function _handle_survey(e){
      var questions  = document.querySelectorAll('div > input[type="radio"]');      
      var elList = document.querySelectorAll('.question');
      elList.forEach(el => el.classList.remove('err'));   
      
      var allChecked = true;
      var opts = [];
      questions.forEach(function(question){
      var isChecked = false;
      var radios = document.querySelectorAll('input[name="' + question.name + '"]');
      
      for (var i = 0; i < radios.length; i++) {
      if (radios[i].checked) {
          isChecked = true;
          break;
      }
      }
      if(!isChecked){
      allChecked = false;
      if( !opts.includes( question.name ) ){
         opts.push( question.name );   
      }
      }
      });
      
      if( allChecked !== false ){
         var formData = new FormData(e);
         var jsonData = {};
         formData.forEach(function(value, key) {
         jsonData[key] = value;            
         });
         console.log( jsonData );
         return true;
      }else{
      opts.forEach(function(elm){
         document.getElementById(elm).classList.add('err');
      });
      }
      return false;
      }
      function _closeThanks( elm ){
         document.getElementById(elm).remove();
      }   
    </script>
  </body>
</html>
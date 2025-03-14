<?php 
$curauth = (get_query_var('author_name')) ? get_user_by('slug', get_query_var('author_name')) : 
get_userdata(get_query_var('author'));
$author_id = $curauth->ID;

$profileImage = get_bloginfo('template_url').'/dev-images/author-profile.jpg';
$user_avtar   = get_user_meta( $author_id, 'auth-thumb', true );
if( $user_avtar ){
  $profileImage      = wp_get_attachment_image_url( $user_avtar, 'full' );
}
?>

<section class="author-section">
<div class="container">
  <div class="auth-row">
    <div class="auth-left">
      <div class="aut-top">
        <div class="author-page-head">
          <div class="auth-image">
            <img src="<?php echo $profileImage; ?>" alt="wsprofile" width="97" height="94" border="0">
          </div>
          <div class="auth-info">
            <h1 class="aut-name"><?php echo get_the_author_meta('display_name', $author_id); ?></h1>
            <p><?php echo get_field('pro-title', 'user_'.$author_id); ?></p>
            <div class="auth-social"><strong>Follow:</strong>
              <?php 
              if( get_user_meta($author_id, 'facebook', true) ){
                echo '<a href="'.get_user_meta($author_id, 'facebook', true).'" target="_blank">Facebook</a>';
              }

              if( get_user_meta($author_id, 'pinterest', true) ){
                echo '<a href="'.get_user_meta($author_id, 'pinterest', true).'" target="_blank">Pinterest</a>';
              }

              if( get_user_meta($author_id, 'instagram', true) ){
                echo '<a href="'.get_user_meta($author_id, 'instagram', true).'" target="_blank">Instagram</a>';
              }

              if( get_user_meta($author_id, 'linkedin', true) ){
                echo '<a href="'.get_user_meta($author_id, 'linkedin', true).'" target="_blank">Linkedin</a>';
              }

              if( get_user_meta($author_id, 'twitter', true) ){
                echo '<a href="'.get_user_meta($author_id, 'twitter', true).'" target="_blank">Twitter</a>';
              }

              if( get_user_meta($author_id, 'youtube', true) ){
                echo '<a href="'.get_user_meta($author_id, 'youtube', true).'" target="_blank">youtube</a>';
              }

              if( get_user_meta($author_id, 'wikipedia', true) ){
                echo '<a href="'.get_user_meta($author_id, 'wikipedia', true).'" target="_blank">Wikipedia</a>';
              }

              if( get_user_meta($author_id, 'tumblr', true) ){
                echo '<a href="'.get_user_meta($author_id, 'tumblr', true).'" target="_blank">Tumblr</a>';
              }
              ?>
            </div>
          </div>
        </div>
      </div>
      <div class="aut-bottom">
        <div class="cat-head">Topics written by <?php echo get_the_author_meta('display_name', $author_id); ?></div>
        <div class="cat-list"><?php echo getAuthorBlogCategories( $author_id ); ?></div>
      </div>
    </div>
    <div class="auth-right">
      <div class="top-heading">Professional Summary</div>
      <div class="author-page-bio">
      <?php 
      echo get_field( 'author_description', 'user_'.$author_id );
      //echo nl2br( get_user_meta($author_id, 'description', true) ); 
      ?>
      </div>
    </div>
  </div>
</div>
</section>
<?php get_header(); ?>
<div class="container archive-container author-articles">
	<div class="blog-div ">
	    <?php 
	    $curauth = (get_query_var('author_name')) ? get_user_by('slug', get_query_var('author_name')) : get_userdata(get_query_var('author'));
	    echo '<h2 class="top-title">Blog Posts Written by '.get_the_author_meta('display_name', $curauth->ID).'</h2>';    
	    ?>   
		<?php
		if ( have_posts() ){
			echo '<div class="blog-wrap" id="auth-posts">';
			while ( have_posts() ) : the_post();
			get_template_part( 'template-parts/content', get_post_type() );
			endwhile;
			echo '</div>';
		}else{
			echo "<h3>No Post found</h3>";
		}
		?>	    	    
	</div>
</div>
<?php get_footer(); ?>
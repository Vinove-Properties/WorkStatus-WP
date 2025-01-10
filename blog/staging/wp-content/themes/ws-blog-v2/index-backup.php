<?php get_header(); ?>
<section class="hero-banner mb-30 in-banner" style="padding-top:200px;">
<div class="container">
<div class="inner-wrap">
<h1>Secrets to Streamlined Workflows & Empowered Teams</h1>
<p>Ideas, best practices, innovation insights from thought leadership.</p>
</div>
</div>
</section>
<div class="content-wrapper">
<main id="primary" class="site-main article">
	<div class="container">
	<div class="blog-wrap">
	<?php
	if ( have_posts() ) : 
		/* Start the Loop */
		while ( have_posts() ) :
			the_post();
			get_template_part( 'template-parts/content', get_post_type() );
		endwhile;
		the_posts_navigation();
	else :
		get_template_part( 'template-parts/content', 'none' );

	endif;
	?>
	</div>
</div>
</main><!-- #main -->
</div>
<?php get_footer(); ?>
<?php get_header(); ?>
<?php get_template_part('inc/cmn', 'filter'); ?>
<section class="hero-banner in-banner">
<div class="container">
<div class="inner-wrap">
<?php 
the_archive_title( '<h1 class="page-title">', '</h1>' );
the_archive_description( '<p>', '</p>' ); 
?>
<!-- 
<h1>Roadmap to Build Competitive Advantage</h1>
<p>Ideas, best practices, innovation insights from thought leadership.</p> 
-->
<?php //get_template_part('inc/ws', 'filters'); ?>
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
	</main><!-- #main -->
	</div>
	</div>
</div>
<?php get_footer(); ?>

<?php get_header(); ?>
<?php get_template_part('inc/cmn', 'filter'); ?>
<section class="hero-banner in-banner">
    <div class="container">
        <div class="inner-wrap">
        <h1><?php
        printf( esc_html__( 'Search Results for: %s', 'ws-blog' ), '<span>' . get_search_query() . '</span>' );
        ?></h1>
        <?php //get_template_part('inc/ws', 'filters'); ?>
        </div>
    </div>
</section>
<main id="primary" class="site-main article">
		<div class="container">
		<div class="blog-wrap">
		<?php if ( have_posts() ) : ?>
			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();
				get_template_part( 'template-parts/content', 'content' );
			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
</div>
	</div>
	</main><!-- #main -->
	

<?php get_footer(); ?>

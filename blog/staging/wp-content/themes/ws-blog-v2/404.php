<?php get_header(); ?>
<main id="page-404">
  <section class="error-404">
    <div class="container">
      <header class="page-header">
        <h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'ws-blog' ); ?></h1>
      </header>
      <div class="page-content">
        <p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'ws-blog' ); ?></p>
        <div class="buttons">
          <a href="<?php echo home_url('/'); ?>" class="button outline"><?php esc_html_e("Go back to home", "reco"); ?></a>
        </div>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>
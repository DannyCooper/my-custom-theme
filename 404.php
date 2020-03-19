<?php get_header(); ?>
  <div class="site-content">
	  <article class="no-results">

	    <header class="entry-header">
	      <h1 class="page-title"><?php esc_html_e( 'Nothing Found Here', 'my-custom-theme' ); ?></h1>
	    </header><!-- .entry-header -->

	    <div class="entry-content">
	      <?php the_content( esc_html__( 'Continue reading &rarr;', 'my-custom-theme' ) ); ?>
	    </div><!-- .entry-content -->

	  </article><!-- .no-results -->
	</div><!-- .site-content -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>

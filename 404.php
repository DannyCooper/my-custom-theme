<?php
/**
 * The template for displaying 404 page.
 *
 * @copyright  Copyright (c) 2020, Danny Cooper
 * @license    http://opensource.org/licenses/gpl-2.0.php GNU Public License
 */

get_header(); ?>
  <div class="site-content">
	  <article class="no-results">

	    <header class="entry-header">
	      <h1 class="page-title"><?php esc_html_e( 'Nothing Found Here', 'my-custom-theme' ); ?></h1>
	    </header><!-- .entry-header -->

	    <div class="entry-content">
			<p><?php esc_html_e( 'It looks like nothing was found at this location.', 'my-custom-theme' ); ?></p>
	    </div><!-- .entry-content -->

	  </article><!-- .no-results -->
	</div><!-- .site-content -->
<?php
get_sidebar();
get_footer();

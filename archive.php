<?php
/**
 * The template for displaying archive pages.
 *
 * @copyright  Copyright (c) 2020, Danny Cooper
 * @license    http://opensource.org/licenses/gpl-2.0.php GNU Public License
 */

get_header(); ?>
  <div class="site-content">
	  <header class="page-header">
		  <?php
		  the_archive_title( '<h1 class="page-title">', '</h1>' );
		  the_archive_description( '<div class="archive-description">', '</div>' );
		  ?>
	  </header><!-- .page-header -->
    <?php
    if ( have_posts() ) :

      while ( have_posts() ) :

        the_post();
        ?>

        <article <?php post_class(); ?>>

		  <?php the_post_thumbnail( 'my-custom-image-size' ); ?>

          <header class="entry-header">
			<?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '">', '</a></h2>' ); ?>
          </header><!-- .entry-header -->

          <div class="entry-content">
            <?php the_content( esc_html__( 'Continue reading &rarr;', 'my-custom-theme' ) ); ?>
          </div><!-- .entry-content -->

        </article><!-- #post-## -->

        <?php
        // If comments are open or we have at least one comment, load up the comment template.
        if ( comments_open() || get_comments_number() ) :
          comments_template();
        endif;

      endwhile;

	  the_posts_navigation();

    else :
      get_template_part( 'content-none' );
    endif;
	?>
	</div><!-- .site-content -->
<?php
get_sidebar();
get_footer();

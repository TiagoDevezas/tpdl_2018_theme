<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package TPDL2018
 */

get_header(); ?>

  <div id="primary" class="content-area mw9 center ph3 bg-tdpl-light-beige">
    <main id="main" class="site-main">
      <div class="cover-image relative">
        <img src="<?php echo get_template_directory_uri() . '/images/bg.png'; ?>" alt="">
        <div class="cover-text absolute top-1 right-1 top-2-ns right-2-ns">
          <p class="bg-white tdpl-blue f-subheadline-l f2-m f4 measure tc ph2 mb0 lh-cover pt1 fw3">Digital Libraries for</p>
          <p class="bg-white tdpl-blue f-subheadline-l f2-m f4 measure tc ph2 ma0 mt3-l mt1 lh-cover pt1 fw3">Open Knowledge</p>
        </div>
      </div>

    </main><!-- #main -->
  </div><!-- #primary -->

<?php
get_sidebar();
get_footer();

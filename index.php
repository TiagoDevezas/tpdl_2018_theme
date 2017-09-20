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
        <img src="<?php echo get_template_directory_uri() . '/images/bg2.jpg'; ?>" alt="">
        <div class="cover-text absolute top-1 right-1 top-2-ns right-2-ns">
          <p class="bg-white tdpl-blue f-subheadline-l f2-m f4 measure tc ph2 mb0 lh-cover pt1 fw3">Digital Libraries for</p>
          <p class="bg-white tdpl-blue f-subheadline-l f2-m f4 measure tc ph2 ma0 mt3-l mt1 lh-cover pt1 fw3">Open Knowledge</p>
        </div>
        <div class="photo-credit absolute bottom-0 right-0">
          <p class="bg-black white tc ph2 ma0 mb2 fw4 f6 lh-copy"><a href="https://www.flickr.com/photos/_ruben/2316594722/in/photolist-4wH9Uj-7m4Q6e-7VNDtb-8SQ54p-dBqug-dBqLj-dEBmY-fsw59-dBqNc-dEBiM-dBqQD-dBqAd-dBqVB-dEBgS-dBqK5-ovJac-dEBiB-dEBi5-dEBky-dBqJL-dEBkC-dEBkL-dLA4y-dBqRP-ovHQ1-dBqza-dBqP9-dEBmE-dEBhk-8Qh3k1-dBqF7-fsw9X-ovHLD-dBqC7-ovJ9V-dBqTo-dLAdc-dEBis-ovHHJ-NQunt-dEBhe-dBqDP-dLA3H-dBqJ1-ovHWB-dEBjA-dLAbm-ovHSa-dEBkX-dBqVJ" class="link underline-hover white hover-white">Photo</a> by ruben_farao/<a href="https://creativecommons.org/licenses/by-sa/2.0/" class="link underline-hover white hover-white">CC BY-SA 2.0</a></p>
        </div>
      </div>

    </main><!-- #main -->
  </div><!-- #primary -->

<?php
get_sidebar();
get_footer();

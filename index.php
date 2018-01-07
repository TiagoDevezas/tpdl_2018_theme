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

  <div id="primary" class="content-area center">
    <main id="main" class="site-main">
      <div id="main-header" class="center pb4">
        <div class="headline-logo flex items-baseline-ns flex-wrap flex-column flex-row-ns items-center justify-center pt3">      
          <h1 class="f-headline-ns f2 lh-solid white mb0 tc">TPDL <span class="fw4">2018</span></h1>
          <img src="<?php echo get_template_directory_uri() . '/images/logo_v1.svg'; ?>" alt="TPDL 2018" title="TPDL 2018" class="ml4-ns" width="80px"/>
        </div>
        <div class="date center mw8 flex justify-center">
          <p class="f2-l f3-m f6 ml2 mr2 tr white fw2 lh-solid mb0">
            porto <br>
            portugal <br>
            sep. 10-13 2018
          </p>
          <p class="f2-l f3-m f6 fw8 white ml1 lh-solid mb0">
            22<sup>nd</sup> international conference <br>
            on theory and practice <br>
            of digital libraries
          </p>
        </div>
        <h2 class="tc white ttu f2-l f3-m f5 fw3 mb0">Faculty of Engineering, University of Porto</h2>
      </div>
      <div class="introduction bg-white pv2 center">
        <div class="intro-wrapper mw8 center">
          <h2 class="tc tdpl-blue f1-l f3-m f5 fw5 pv6">Digital Libraries for Open Knowledge</h2>
        </div>
       
        
      </div>
<!--       <div class="cover-image relative">
        <div class="cover-text absolute top-1 right-1 top-2-ns right-2-ns">
          <p class="bg-white tdpl-blue f-subheadline-l f2-m f4 measure tc ph2 mb0 lh-cover pt1 fw3">Digital Libraries for</p>
          <p class="bg-white tdpl-blue f-subheadline-l f2-m f4 measure tc ph2 ma0 mt3-l mt1 lh-cover pt1 fw3">Open Knowledge</p>
        </div>
        <div class="photo-credit absolute bottom-0 right-0">
          <p class="bg-black white tc ph2 ma0 mb2 fw4 f6 lh-copy"><a href="https://www.flickr.com/photos/_ruben/2316594722/in/photolist-4wH9Uj-7m4Q6e-7VNDtb-8SQ54p-dBqug-dBqLj-dEBmY-fsw59-dBqNc-dEBiM-dBqQD-dBqAd-dBqVB-dEBgS-dBqK5-ovJac-dEBiB-dEBi5-dEBky-dBqJL-dEBkC-dEBkL-dLA4y-dBqRP-ovHQ1-dBqza-dBqP9-dEBmE-dEBhk-8Qh3k1-dBqF7-fsw9X-ovHLD-dBqC7-ovJ9V-dBqTo-dLAdc-dEBis-ovHHJ-NQunt-dEBhe-dBqDP-dLA3H-dBqJ1-ovHWB-dEBjA-dLAbm-ovHSa-dEBkX-dBqVJ" class="link underline-hover white hover-white">Photo</a> by ruben_farao/<a href="https://creativecommons.org/licenses/by-sa/2.0/" class="link underline-hover white hover-white">CC BY-SA 2.0</a></p>
        </div>
      </div> -->

    </main><!-- #main -->
  </div><!-- #primary -->

<?php
get_sidebar();
get_footer();

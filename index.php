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
            Porto <br>
            Portugal <br>
            Sep. 10-13 2018
          </p>
          <p class="f2-l f3-m f6 fw8 white ml1 lh-solid mb0">
            22<sup>nd</sup> International Conference <br>
            on Theory and Practice <br>
            of Digital Libraries
          </p>
        </div>
        <h2 class="tc white ttu f2-l f3-m f5 fw3 mb0">Faculty of Engineering, University of Porto</h2>
      </div>
      <div class="introduction bg-near-white pv2 center">
        <div class="intro-wrapper mw8 center">
          <h2 class="tc tdpl-blue f1-l f3-m f5 fw5 mv0">Digital Libraries for Open Knowledge</h2>
        </div>
      </div>
      <div class="info bg-near-white cf pb3">
        <div class="mw9 center flex flex-wrap">
          <div class="w-100 w-50-m w-25-l pa2 flex info-card">
            <article class="center bg-white br3 pa3 pa4-ns ba b--black-10">
              <div class="tc">
                <i data-feather="calendar" class="h3 w3 dib"></i>
                <h1 class="f4 mt0">When</h1>
                <hr class="mw3 bb bw1 b--black-10">
              </div>
              <p class="lh-copy measure center f6 black-70">
                The TPDL 2018 Conference will take place from Monday, September 10 through Thurday, September 13, 2018. Please check the link below for the important dates.
              </p>
              <a class="w-100 tc f6 link dim br2 ph3 pv2 mb2 dib white bg-dark-blue fw5" href="http://www.tpdl.eu/tpdl2018/important-dates/">Important Dates</a>
            </article>
          </div>
          <div class="w-100 w-50-m w-25-l pa2 flex info-card">
            <article class="center bg-white br3 pa3 pa4-ns ba b--black-10">
              <div class="tc">
                <i data-feather="help-circle" class="h3 w3 dib"></i>
                <h1 class="f4 mt0">How</h1>
                <hr class="mw3 bb bw1 b--black-10">
              </div>
              <p class="lh-copy measure center f6 black-70">
                Interested in participating in the TPDL 2018 Conference? Please check the links below for registration and submission details.
              </p>
              <a class="w-100 tc f6 link dim br2 ph3 pv2 mb2 dib white bg-dark-green fw5" href="http://www.tpdl.eu/tpdl2018/call-for-contributions/">Call for Contributions</a>
              <!-- <a class="w-100 tc f6 link dim br2 ph3 pv2 mb2 dib white bg-dark-blue" href="#0">Registration</a> -->
            </article>
          </div>
          <div class="w-100 w-50-m w-25-l pa2 flex info-card">
            <article class="center bg-white br3 pa3 pa4-ns ba b--black-10">
              <div class="tc">
                <i data-feather="users" class="h3 w3 dib"></i>
                <h1 class="f4 mt0">Who</h1>
                <hr class="mw3 bb bw1 b--black-10">
              </div>
              <p class="lh-copy measure center f6 black-70">
                Want to know more about the people behind the TPDL 2018 Conference? Do you need to contact us? Please check the links below for details.
              </p>
              <a class="w-100 tc f6 link dim br2 ph3 pv2 mb2 dib white bg-dark-blue fw5" href="http://www.tpdl.eu/tpdl2018/organizing-committee/">Organizing Committee</a>
              <a class="w-100 tc f6 link dim br2 ph3 pv2 mb2 dib white bg-dark-blue fw5" href="http://www.tpdl.eu/tpdl2018/program-committee/">Program Committee</a>
              <a class="w-100 tc f6 link dim br2 ph3 pv2 mb2 dib white bg-dark-blue fw5" href="http://www.tpdl.eu/tpdl2018/contact/">Contact</a>
            </article>
          </div>
          <div class="w-100 w-50-m w-25-l pa2 flex info-card">
            <article class="center bg-white br3 pa3 pa4-ns ba b--black-10">
              <div class="tc">
                <i data-feather="map" class="h3 w3 dib"></i>
                <h1 class="f4 mt0">Where</h1>
                <hr class="mw3 bb bw1 b--black-10">
              </div>
              <p class="lh-copy measure center f6 black-70">
                The TPDL 2018 Conference will be held at the Faculty of Engineering from the University of Porto, in the city of Porto, Portugal. Please check the links below for details about the venue and travel information.
              </p>
              <a class="w-100 tc f6 link dim br2 ph3 pv2 mb2 dib white bg-dark-blue fw5" href="http://www.tpdl.eu/tpdl2018/venue/">Venue</a>
              <a class="w-100 tc f6 link dim br2 ph3 pv2 mb2 dib white bg-dark-blue fw5" href="http://www.tpdl.eu/tpdl2018/how-to-arrive/">How to Arrive</a>
              <a class="w-100 tc f6 link dim br2 ph3 pv2 mb2 dib white bg-dark-blue fw5" href="http://www.tpdl.eu/tpdl2018/about-porto/">About Porto</a>
            </article>
          </div>
        </div>

      </div>

    </main><!-- #main -->
  </div><!-- #primary -->

<?php
get_sidebar();
get_footer();

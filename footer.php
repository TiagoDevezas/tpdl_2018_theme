<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package TPDL2018
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer bg-tdpl-light-beige mt0 tpdl-blue flex justify-center">
		<div class="site-info mw9">
			<div id="patron" class="ph3 pv1 mt3 mb3 br3">
				<h1 class="mt0">Conference Patron</h1>
				<hr class="mw3 bb bw1 b--black-10">
				<a href="conference-patron/">
					<article class="mw5 center pb3 pb4-ns mb3">
					  <div class="tc">
					    <img src="http://localhost/wordpress/wp-content/uploads/2018/01/patron.jpg" class="br-100 h4 w4 dib" title="Maria Fernanda Rollo">
					    <h1 class="f4">Maria Fernanda Rollo</h1>
					  </div>
					  <p class="lh-copy measure center f6 black-70">
					    Dr. Maria Fernanda Rollo, State Secretary of Science, Technology and Higher Education, kindly accepted the Organizing Committee's invitation to be the Patron of TPDL 2018.
					  </p>
					</article>
				</a>
			</div>

			<!-- <h1>Hello</h1> -->
<!-- 			<img src="http://via.placeholder.com/100x100">
			<img src="http://via.placeholder.com/100x100">
			<img src="http://via.placeholder.com/100x100">
			<img src="http://via.placeholder.com/100x100"> -->
			



<!-- 			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'tpdl2018' ) ); ?>"><?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'tpdl2018' ), 'WordPress' );
			?></a>
			<span class="sep"> | </span>
			<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'tpdl2018' ), 'tpdl2018', '<a href="http://underscores.me/">Underscores.me</a>' );
			?> -->
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

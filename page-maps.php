<?php
/**
 * Template Name: Google Maps
 *
 * @package PolymerPlayground
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

		

			<?php endwhile; // End of the loop. ?>

<script src="<?php bloginfo('stylesheet_directory'); ?>/bower_components/webcomponentsjs/webcomponents-lite.min.js"></script>
<link rel="import" href="<?php bloginfo('stylesheet_directory'); ?>/bower_components/polymer/polymer.html">
<link rel="import" href="<?php bloginfo('stylesheet_directory'); ?>/bower_components/google-apis/google-maps-api.html">
<link rel="import" href="<?php bloginfo('stylesheet_directory'); ?>/bower_components/google-map/google-map-marker.html">


			<b>Example</b>:

<google-map latitude="37.779" longitude="-122.3892" min-zoom="9" max-zoom="11" language="en">
  <google-map-marker latitude="37.779" longitude="-122.3892"
                     title="Go Giants!" draggable="true">
    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/49/San_Francisco_Giants_Cap_Insignia.svg/200px-San_Francisco_Giants_Cap_Insignia.svg.png" />
  </google-map-marker>
</google-map>

<google-map-directions start-address="Oakland" end-address="Mountain View" language=
"en"></google-map-directions>

<button id="controlsToggle" onclick="toggleControls()">Toggle controls</button>


    <script>
  var gmap = document.querySelector('google-map');
  gmap.addEventListener('api-load', function(e) {
    document.querySelector('google-map-directions').map = this.map;
  });
  function toggleControls() {
    gmap.disableDefaultUi = !gmap.disableDefaultUi;
  }
</script>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

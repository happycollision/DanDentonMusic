  <footer>
	<nav id="footer_nav" class="clearfix">
		<?php wp_nav_menu( array( 'theme_location' => 'Main Nav' ) ); ?>
	</nav>
  </footer>


  <!-- JavaScript should be at the bottom for fast page loading -->


  <!-- scripts concatenated and minified via build script -->
  <!--<script src="js/plugins.js"></script>
  <script src="js/script.js"></script>-->
  <!-- end scripts -->

  <!-- Asynchronous Google Analytics snippet. Change UA-XXXXX-X to be your site's ID.
       mathiasbynens.be/notes/async-analytics-snippet -->
  <script>
    var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
  </script>
<?php wp_footer(); ?>
</body>
</html>
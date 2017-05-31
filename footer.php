		</div> <!-- end of #content-innerWrap -->
  </div> <!-- end of #content-outerWrap -->

  <footer class="clearfix">
  	<div id="footer-innerWrap">
		<div id="fcontacts" >
			<a id="logo-footer" href="<?php echo get_option('home'); ?>"><img src="<?php bloginfo('template_directory'); ?>/img/logo-footer-white.png"/></a>
			<div id="map-footer">
				<div class="tooltip-top map-pin edmonton" data-content="#tooltipedmonton">Edmonton</div>
				<div class="tooltip-top map-pin mississauga" data-content="#tooltipmississauga">Mississauga</div>
				<div class="tooltip-top map-pin montreal" data-content="#tooltipmontreal">Montreal</div>
				<div class="tooltip-content" id="tooltipedmonton">
				<div class="close-btn">x</div>
					<h5><span class="white">Edmonton, Alberta</span></h5>
					<br>
					<p class="address">
						Unirope Limited<br>
						5613 70th Street<br>
						Edmonton, AB&nbsp;&nbsp;T6B 3P6<br>
						Canada<br><br>
						Tel: 780 644 9000<br>
						Fax: 780 644 9100<br><br>
						E-mail: <a href="mailto:alberta@unirope.com">alberta@unirope.com</a>
					</p>
				</div>
				<div class="tooltip-content" id="tooltipmississauga">
				<div class="close-btn">x</div>
					<h5>Head Office<br><span class="white">Mississauga, Ontario</span></h5>
					<br>
					<p class="address">
						Unirope Limited<br>
						3070 Universal Drive<br>
						Mississauga, ON&nbsp;&nbsp;L4X 2C8<br>
						Canada<br><br>
						Tel: 905 624 5131<br>
						1 800 457 9997<br>
						Fax: 905 624 9265<br><br>
						E-mail: <a href="mailto:info@unirope.com">info@unirope.com</a>
					</p>
				</div>
				<div class="tooltip-content" id="tooltipmontreal">
				<div class="close-btn">x</div>
					<h5><span class="white">Montreal, Quebec</span></h5>
					<br>
					<p class="address">
						Unirope Limited<br>
						555 Rue Gougeon<br>
						St. Laurent, QC&nbsp;&nbsp;H4T 2B4<br>
						Canada<br><br>
						Tel: 514 339 5444<br>
						Fax: 514 339 5556<br><br>
						E-mail: <a href="mailto:quebec@unirope.com">quebec@unirope.com</a>
					</p>
				</div>
			</div> <!-- end of map-footer -->
			<!--
<div id="subscribe-footer">
				<a href="#newsletter-popup-form"><img src="<?php bloginfo('template_directory'); ?>/img/mail-icon.png" width="30" height="33"/><span>SIGN UP FOR OUR<br>EMAIL NEWSLETTER</span></a>
			</div>
-->
		</div> <!-- end of fcontacts -->
		<div id="fsitemap">
		<ul>
			<?php if(ICL_LANGUAGE_CODE =='fr') {  ?>
				<li><a href="<?php echo get_option('home'); ?>">Accueuil</a></li>
				<li><a href="/fr/a-propos-de-nous/">&Agrave; propos de nous</a></li>
				<li><a href="/fr/a-propos-de-nous/contact/">Contact</a></li>
				<li><a href="/fr/formations-et-seminaires/">Formations Et Séminaires</a></li>
				<li><a href="/fr/services-et-test/">Services Et Test</a></li>
				<li><a href="/fr/questions-reponses/">Questions / Réponses</a></li>
				<li><a href="/fr/produits-en-service/">Produits En Service</a>
			<?php } else { ?>
				<li><a href="<?php echo get_option('home'); ?>">Home</a></li>
				<li><a href="/about-us/">About Us</a></li>
				<li><a href="/about-us/contact/">Contact</a></li>
				<li><a href="/training-seminars/">Training<br>&amp; Seminars</a></li>
				<li><a href="/inspection-testing/">Testing<br>&amp; Services</a></li>
				<li><a href="/faqs/">FAQ's</a></li>
				<li><a href="/products-in-use/">Products In Use</a>
			<?php } ?>


		</ul>
		<ul>
		<?php if(ICL_LANGUAGE_CODE =='fr') {  ?>
			<li><a href="/fr/produits">Produits</a>
			<?php } else { ?>
			<li><a href="/products/">Products</a>
			<?php } ?>
				<ul>
					<?php if(ICL_LANGUAGE_CODE =='fr') {  ?>
						<li><a href="/fr/produits/cables/" class="sub-cat">Câbles</a></li>
						<?php
						$args = array(
						  'sort_column'  => 'date',
						  'sort_order'   => 'ASC',
						  'title_li'     => '',
						  'child_of'     => 5404,
						  'depth'        => 1
						);
						?>
						<?php wp_list_pages( $args ); ?>
						<?php wp_reset_query(); ?>
					<?php } else { ?>
						<li><a href="/products/ropes/" class="sub-cat">Ropes</a></li>
						<?php
						$args = array(
						  'sort_column'  => 'date',
						  'sort_order'   => 'ASC',
						  'title_li'     => '',
						  'child_of'     => 94,
						  'depth'        => 1
						);
						?>
						<?php wp_list_pages( $args ); ?>
						<?php wp_reset_query(); ?>
					<?php } ?>



					<?php if(ICL_LANGUAGE_CODE =='fr') {  ?>
						<li><a href="/fr/produits/elingues/" class="sub-cat">&Eacute;lingues</a></li>
						<?php
						$args = array(
						  'title_li'     => '',
						  'child_of'     => 7028,
						  'depth'        => 1
						);
						?>
						<?php wp_list_pages( $args ); ?>
						<?php wp_reset_query(); ?>
					<?php } else { ?>
						<li><a href="/products/slings/" class="sub-cat">Slings</a></li>
						<?php
						$args = array(
						  'sort_column'  => 'post_date',
						  'sort_order'   => 'ASC',
						  'title_li'     => '',
						  'child_of'     => 96,
						  'depth'        => 1
						);
						?>
						<?php wp_list_pages( $args ); ?>
						<?php wp_reset_query(); ?>
					<?php } ?>

				</ul>
			</li>
		</ul>
		<ul>
			<li><br>
				<ul>
					<?php if(ICL_LANGUAGE_CODE =='fr') {  ?>
						<li><a href="/fr/produits/rigging-hardware/" class="sub-cat">Accessoires de gréement</a></li>
						<?php
							$args = array(
							  'sort_column'  => 'post_date',
							  'sort_order'   => 'ASC',
							  'title_li'     => '',
							  'child_of'     => 7266,
							  'depth'        => 1
							);
						?>
						<?php wp_list_pages( $args ); ?>
						<?php wp_reset_query(); ?>
					<?php } else { ?>
						<li><a href="/products/rigging-hardware/" class="sub-cat">Rigging Hardware</a></li>
						<?php
							$args = array(
							  'sort_column'  => 'post_date',
							  'sort_order'   => 'ASC',
							  'title_li'     => '',
							  'child_of'     => 98,
							  'depth'        => 1
							);
						?>
						<?php wp_list_pages( $args ); ?>
						<?php wp_reset_query(); ?>
					<?php } ?>
				</ul> <!-- New Addition -->
			</li>
		</ul>
		<ul>
			<li><br>
				<ul>
					<?php if(ICL_LANGUAGE_CODE =='fr') {  ?>
						<li><a href="/fr/produits/below-the-hook/" class="sub-cat">Below the Hook</a></li>
						<?php
							$args = array(
							  'sort_column'  => 'post_date',
							  'sort_order'   => 'ASC',
							  'title_li'     => '',
							  'child_of'     => 10204,
							  'depth'        => 1
							);
						?>
						<?php wp_list_pages( $args ); ?>
						<?php wp_reset_query(); ?>
						<li><a href="http://www.atlascopco.ca/caus/" target="_blank" class="sub-cat" style="width:165px;">Outils D'assemblage Atlas Copco</a></li>
						<li><a href="http://www.atlascopco.ca/caus/products/assembly-tools/1401261/" target="_blank">Outils d'assemblage électrique</a></li>
						<li><a href="http://www.atlascopco.ca/caus/products/assembly-tools/1401257/" target="_blank">Outils d'assemblage pneumatique</a></li>
						<li><a href="http://www.atlascopco.ca/caus/products/assembly-tools/1401259/" target="_blank">Systèmes d'assemblage de fixations</a></li>
						<li><a href="http://www.atlascopco.ca/caus/products/assembly-tools/1469053/" target="_blank">Solutions d'épreuve d'erreur</a></li>
						<li><a href="http://www.atlascopco.ca/caus/products/assembly-tools/1401236/" target="_blank">Assurance de la qualité dans le serrage</a></li>
						<li><a href="http://www.atlascopco.ca/caus/products/assembly-tools/1401207/" target="_blank">Douilles et embouts</a></li>
						<li><a href="http://www.atlascopco.ca/caus/products/assembly-tools/1401231/" target="_blank">Solutions et automatisation sur le lieu de travail</a></li>
						<li><a href="http://www.atlascopco.ca/caus/products/assembly-tools/1401238/" target="_blank">Embouts</a></li>						
					<?php } else { ?>
						<li><a href="/products/below-the-hook/" class="sub-cat">Below the Hook</a></li>
						<?php
							$args = array(
							  'sort_column'  => 'post_date',
							  'sort_order'   => 'ASC',
							  'title_li'     => '',
							  'child_of'     => 8082,
							  'depth'        => 1
							);
						?>
						<?php wp_list_pages( $args ); ?>
						<?php wp_reset_query(); ?>
						<li><a href="http://www.atlascopco.ca/caus/" target="_blank" class="sub-cat" style="width:165px;">Atlas Copco Assembly Tools</a></li>
						<li><a href="http://www.atlascopco.ca/caus/products/assembly-tools/1401261/" target="_blank">Electric Assembly Tools</a></li>
						<li><a href="http://www.atlascopco.ca/caus/products/assembly-tools/1401257/" target="_blank">Pneumatic Assembly Tools</a></li>
						<li><a href="http://www.atlascopco.ca/caus/products/assembly-tools/1401259/" target="_blank">Fixtured Assembly Systems</a></li>
						<li><a href="http://www.atlascopco.ca/caus/products/assembly-tools/1469053/" target="_blank">Error Proofing Solutions</a></li>
						<li><a href="http://www.atlascopco.ca/caus/products/assembly-tools/1401236/" target="_blank">Quality Assurance in Tightening</a></li>
						<li><a href="http://www.atlascopco.ca/caus/products/assembly-tools/1401207/" target="_blank">Socket and Bits</a></li>
						<li><a href="http://www.atlascopco.ca/caus/products/assembly-tools/1401231/" target="_blank">Workplace Solutions and Automation</a></li>
						<li><a href="http://www.atlascopco.ca/caus/products/assembly-tools/1401238/" target="_blank">Bits</a></li>
					<?php } ?>
				</ul>
			</li>
		</ul>
		</div> <!-- end of fsitemap -->
	</div> <!-- end of #footer-innerWrap -->
	<div id="credit-wrap">
		<div id="fcredits">			
			<?php if(ICL_LANGUAGE_CODE =='fr') {  ?>
			<span id="copyright-section" class="source-org vcard copyright">Droits d’auteur &copy; <?php echo date("Y"); echo " "; bloginfo('name'); ?></span>
			<span id="credit">Conçu par: <strong><a href="http://www.baustein.ca/" target="_blank">Baustein Strategic Design Group Inc.</a></strong></span>
			<?php } else { ?>
			<span id="copyright-section" class="source-org vcard copyright">Copyright: &copy; <?php echo date("Y"); echo " "; bloginfo('name'); ?></span>
			<span id="credit">Designed By: <strong><a href="http://www.baustein.ca/" target="_blank">Baustein Strategic Design Group Inc.</a></strong></span>
			<?php } ?>
		</div>
	</div>
  </footer>

	<?php wp_footer(); ?>


<!-- here comes the javascript -->

<!-- jQuery is called via the Wordpress-friendly way via functions.php -->
  <script src="<?php bloginfo('template_directory'); ?>/_/js/libs/slides.jquery.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/_/js/libs/jquery.PrintArea.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/_/js/jquery.placeholder.min.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/_/js/libs/fancybox/jquery.easing-1.3.pack.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/_/js/libs/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/_/js/libs/fancybox/jquery.fancybox-1.3.4.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/_/js/libs/dimensions.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/_/js/libs/tiptip.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/_/js/plugins.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/_/js/hoverIntent.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/_/js/superfish.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/_/js/jquery.elevateZoom.min.js"></script>
  <script type="text/javascript">
	// initialise sf-menu plugin plugins
	jQuery(document).ready(function(){
		jQuery('ul.main-nav').superfish();
	});
  </script>

<!-- this is where we put our custom functions -->
<script src="<?php bloginfo('template_directory'); ?>/_/js/functions.js"></script>

<script src="<?php bloginfo('template_directory'); ?>/_/js/libs/tabber/tabber.js"></script>
  <script>
  // tabberAutomatic(tabberOptions);
  </script>

<!-- Asynchronous google analytics; this is the official snippet.
	 Replace UA-XXXXXX-XX with your site's ID and uncomment to enable.

<script>

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-XXXXXX-XX']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
-->

</body>

</html>

<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]>    <html class="ie no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]>    <html class="ie no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" <?php language_attributes(); ?>><!--<![endif]-->
<!-- the "no-js" class is for Modernizr. -->
<head>

	<meta charset="<?php bloginfo('charset'); ?>">
	<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<?php if (is_search()) { ?>
	<meta name="robots" content="noindex, nofollow" />
	<?php } ?>

	<title><?php wp_title(''); ?></title>

	<meta name="title" content="<?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>">


	<meta name="google-site-verification" content="">
	<!-- Speaking of Google, don't forget to set your site up: http://google.com/webmasters -->

	<meta name="author" content="Unirope Ltd">
	<meta name="Copyright" content="Copyright Unirope Ltd. All Rights Reserved.">

	<!--  Mobile Viewport meta tag
	j.mp/mobileviewport & davidbcalhoun.com/2010/viewport-metatag
	device-width : Occupy full width of the screen in its current orientation
	initial-scale = 1.0 retains dimensions instead of zooming out if page height > device height
	maximum-scale = 1.0 retains dimensions instead of zooming in if page width < device width -->
	<!-- Uncomment to use; use thoughtfully!
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	-->

	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/img/favicon.ico">
	<!-- This is the traditional favicon.
		 - size: 16x16 or 32x32
		 - transparency is OK
		 - see wikipedia for info on browser support: http://mky.be/favicon/ -->

	<link rel="apple-touch-icon" href="<?php bloginfo('template_directory'); ?>/img/apple-touch-icon.png">
	<!-- The is the icon for iOS's Web Clip.
		 - size: 57x57 for older iPhones, 72x72 for iPads, 114x114 for iPhone4's retina display (IMHO, just go ahead and use the biggest one)
		 - To prevent iOS from applying its styles to the icon name it thusly: apple-touch-icon-precomposed.png
		 - Transparency is not recommended (iOS will put a black BG behind the icon) -->
	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

	<!-- CSS: screen, mobile & print are all in the same file -->

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/_/js/libs/fancybox/jquery.fancybox-1.3.4.css">

	<!-- Fonts: Ubuntu Condensed and Open Sans -->
	<link href='http://fonts.googleapis.com/css?family=Ubuntu+Condensed|Open+Sans:300italic,400italic,600italic,400,300,600,700' rel='stylesheet' type='text/css'>
	<!--
	<script type="text/javascript">
		document.write('<style type="text/css">.tabber{display:none;}<\/style>');
		var tabberOptions = {
		  'manualStartup':true
		};
    </script>
	-->
	<!-- all our JS is at the bottom of the page, except for Modernizr. -->
	<script src="<?php bloginfo('template_directory'); ?>/_/js/libs/modernizr-2.5.0.min.js"></script>

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

		<div class="npf-wrapper" style="display:none">
  <div id="newsletter-popup-form">
			<form action="" id="subscribeform" method="get">
				<div>
	    			<input type="text" id="sub" name="sub" value="" placeholder="your@emailaddress.com" />
	    			<input type="button" value="Subscribe To Newsletter" id="subsubmit"/>
				</div>
			</form>
  </div> <!-- end of #newsletter-popup-form -->
  </div> <!-- end of .npf-wrapper -->


		<div id="header-wrap">

  <header>
<div class="wdi-logo" style="position:absolute;top:55px;right:0;">
<span><a href="http://leeaint.com/uk" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img/leea_logo_small.gif" width="55"/></a></span>&nbsp;&nbsp;&nbsp;<span><a href="http://pythonrope.com/" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img/wdi_logo_topythonrope.gif" width="55"/></a></span>
</div>
  		<div id="logo">
			<?php if (ICL_LANGUAGE_CODE == 'fr') {  ?>
			<a href="<?php echo get_option('home'); ?>/"><img src="<?php bloginfo('template_directory'); ?>/img/unirope-logo-banner.png"/></a>
			<?php } else { ?>
  			<a href="<?php echo get_option('home'); ?>/"><img src="<?php bloginfo('template_directory'); ?>/img/unirope-logo-banner.png"/></a>
			<?php } ?>
  		</div>
  		<div id="navwrap">
			<div id="toolbar">
				<div id="tb-phone">
					<span>1 800 457 9997</span> <i class="fa fa-phone" id="locations-icon"></i>
				</div> <!-- end of #tb-phone -->
				<?php if (ICL_LANGUAGE_CODE == 'fr') {  ?>				
				<div id="tb-linker">
					<a href="/fr/a-propos-de-nous/contact/">Emplacement</a><i id="locations-icon" class="fa fa-map-marker"></i>
				</div>
				<div id="tb-career">
					<a href="/fr/a-propos-de-nous/carrieres/">Carrières</a><i class="fa fa-sun-o" id="locations-icon"></i>
				</div>
				<?php } else {  ?>
				<div id="tb-linker">
					<a href="/contact/">Locations</a><i id="locations-icon" class="fa fa-map-marker"></i>
				</div>
				<div id="tb-career">
					<a href="/about-us/careers/">Careers</a><i class="fa fa-sun-o" id="locations-icon"></i>
				</div>
				<?php } ?>
				<div id="tb-search">
				<?php include (TEMPLATEPATH . '/searchform.php' ); ?>
				</div> <!-- end of #tb-search -->
				<div id="tb-language">
<!-- 					<div id="lang-label">Change Langauge</div>
 -->					<div id="lang-links">

						<?php echo icl_post_languages(); ?>

						<!-- <a class="current" href="#">EN</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="http://fr.unirope.com/about-us/">FR</a> -->
					</div>
				</div> <!-- end of #tb-language -->
			</div> <!-- end of #toolbar -->

			<nav class="main-menu">

				<?php wp_nav_menu( array('menu' => 'Primary Menu','menu_class' => 'main-nav', )); ?>
			</nav>
		</div> <!-- end of #navwrap -->
  </header>

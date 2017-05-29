<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<?php 
	$mainapp = (types_render_field("main-application", array('show_name' => 'false')));
	$mainappimg = (types_render_field("main-app-image", array('show_name' => 'false'))); 
	$ropechar = (types_render_field("rope-characteristics", array('show_name' => 'false')));
	$std = (types_render_field("standard", array('show_name' => 'false')));
	$bstr = (types_render_field("breaking-strengths", array('show_name' => 'false')));
	$table = (types_render_field("tables", array('show_name' => 'false'))); 
	$importantwarning = (types_render_field("important", array('show_name' => 'false')));
	$caution = (types_render_field("caution", array('show_name' => 'false')));
	$right_sidebar = (types_render_field("right-sidebar", array('show_name' => 'false')));
	$figure = (types_render_field("figure", array('show_name' => 'false')));
	$figurecaption = (types_render_field("figure-caption", array('show_name' => 'false')));
	$figure2 = (types_render_field("figure-2", array('show_name' => 'false')));
	$figurecaption2 = (types_render_field("figure-caption-2", array('show_name' => 'false')));
	$additional_text = (types_render_field("additional-text", array('show_name' => 'false')));
	$invisible_link = (types_render_field("invisible-image-link", array('show_name' => 'false')));
	$imageorcontent = (types_render_field("image-or-content", array('show_name' => 'false')));

?>

<div id="breadcrumbs-nav">
  	<div id="primary-cat"><a href="/fr/produits/">Produits</a></div> 
  	<div id="secondary-cat">
  		<ul>
  			<li><a href="/fr/produits/cables/">Câbles</a></li>
  			<li><a href="/fr/produits/cables/centres-de-cable-de-grues/">Centres de câble de grues</a></li>
  			<?php if ( has_term('crane-ropes-fr', 'rope-type')) { ?><li><a href="/fr/ropes/metric-overhead-crane-wire-ropes-fr/">Metric Overhead Crane Ropes</a></li><?php } ?>
  			<li><?php the_title(); ?></li>
  		</ul>
	</div>
  	</div>
  </div>

</div> <!-- end of #header-wrap -->
	
   <div id="content-outerWrap" class="clearfix">
  	<div id="content-innerWrap" class="clearfix">
  	
  	<?php get_sidebar(); ?>
  	
  	<section id="content">
	<div id="page-nav" class="clearfix">
  				<!-- <a href="#">← Return to previous page</a> -->
  				<ul class="details-nav">
  					<?php if ( has_term('crane-ropes-fr', 'rope-type')) { ?><li><a style="color:#960000;" href="/fr/ropes/metric-overhead-crane-wire-ropes-fr/">&larr; Back to Metric Overhead Crane Ropes</a></li><?php } ?>
  					<?php if ($mainapp != "") { ?><li><a href="#main-applications">Main Applications</a></li><?php } ?>
  					<?php if ($ropechar != "") { ?><li><a href="#rope-characteristics">Rope Characteristics</a></li><?php } ?>
  					<?php if ($std != "") { ?><li><a href="#standard">Standard</a></li><?php } ?>
  					<?php if ($bstr != "") { ?><li><a href="#breaking-strengths">Breaking Strengths</a></li><?php } ?>
  				</ul>
  			</div> 
	
  			<div id="featured-image">
  			<?php if ($invisible_link != "") { ?>
  				<a class="invisible-btn" href="<?php echo $invisible_link; ?>">(click here for more info)</a>
  			<?php } ?>
  				<h1><?php the_title(); ?></h1>
  				<?php if ( has_post_thumbnail() ) {
					the_post_thumbnail('full');
				} ?>
				<?php the_content(); ?>
  			</div>
  			<div id="details" class="page-shadow">
  				<section class="details-left">
  				
  					
  				
  					<?php if ($mainapp != "") { ?>
  					<h2 id="main-applications">Main Applications</h2>
  					<div class="clearfix" style="margin-bottom:10px;"><?php echo $mainapp; ?></div>
  					<?php } ?>
  					
  					<?php if ($ropechar != "") { ?>
  					<h2 id="rope-characteristics">Rope Characteristics</h2>
  					<div class="clearfix" style="margin-bottom:10px;"><?php echo $ropechar; ?></div>
  					<?php } ?>
  					
  					<?php if ($std != "") { ?>
  					<h2 id="standard">Standard</h2>
  					<div class="clearfix" style="margin-bottom:10px;"><?php echo $std; ?></div>
  					<?php } ?>
  					
					<?php if ($importantwarning != "") { ?>
  					<div class="important clearfix" style="margin-bottom:10px;"><?php echo $importantwarning; ?></div>
  					<?php } ?>
  					
  					<?php if ($imageorcontent != "" ) { ?>
  					<div id="image-content" style="margin-bottom:10px;"><?php echo $imageorcontent; ?></div>
  					<?php } ?>
  					
  					<?php if ($figure != "") { ?>
  					<figure>
  						<?php echo $figure; ?>
  						<figcaption><?php echo $figurecaption; ?></figcaption>
  					</figure>
  					<?php } ?>
  					
  					<?php if ($figure2 != "") { ?>
  					<figure>
  						<?php echo $figure2; ?>
  						<figcaption><?php echo $figurecaption2; ?></figcaption>
  					</figure>
  					<?php } ?>
  					
  				</section>
  				
  				<aside class="details-right">
  				
  					<?php if ($mainappimg != "") { ?>
  					<span class="frame"><?php echo $mainappimg; ?></span>
  					<?php } ?>
  					
  					<?php if ($caution != "") { ?>
  					<div class="caution-section clearfix">
  					<span class="caution-btn clearfix"><img src="<?php bloginfo('template_directory'); ?>/img/caution-sign.png" class="c-icon"/>Caution</span><br>
  					<?php echo $caution; ?>
  					</div>
  					<?php } ?>
  					
  					<?php if ($right_sidebar != "") { ?>
  					<div class="right-sidebar clearfix">
  					<?php echo $right_sidebar; ?>
  					</div>
  					<?php } ?>
  					
  				</aside>
  				
  					<section class="details-full">
  					<hr>
  				  	<?php if ($bstr != "") { ?>
  					<h2 id="breaking-strengths">Breaking Strengths</h2>
  					<p><?php echo $bstr; ?></p>
  					<?php } ?>
  					
  					<?php if ($table != "") { ?>
  				   	<?php include(TEMPLATEPATH . $table); ?>
  					<?php } ?>
  					
  					<?php if ($additional_text != "") { ?>
  					<div class="box-half">
  					<?php echo $additional_text; ?>
  					</div>
  					<?php } ?>
  					
  					</section>
  				
  			</div>
  			
  			<?php endwhile; endif; ?>
	
</section>

<?php get_footer(); ?>
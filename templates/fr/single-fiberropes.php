<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<?php 
	$main_img = (types_render_field("main-image", array('show_name' => 'false'))); 
	$ropechar = (types_render_field("rope-characteristics", array('show_name' => 'false')));
	$table = (types_render_field("tables", array('show_name' => 'false')));
	$table2 = (types_render_field("tables-2", array('show_name' => 'false'))); 
	$shock_loads = (types_render_field("shock-loads", array('show_name' => 'false')));
	$elastic_elongation = (types_render_field("elastic-elongation", array('show_name' => 'false')));
	$dielectric_strength = (types_render_field("dielectric-strength", array('show_name' => 'false')));
	$graph_small = (types_render_field("graph-small", array('show_name' => 'false')));
	$graph_large = (types_render_field("graph-large", array('show_name' => 'false')));
?>

<div id="breadcrumbs-nav">
  	<div id="primary-cat"><a href="/fr/produits/">Produits</a></div> 
  	<div id="secondary-cat">
  		<ul>
  			<li><a href="/fr/produits/cables/">Câbles</a></li>
  			<li><a href="/fr/produits/cables/cable-dacier/">Câble d’acier</a></li>
  			<li><?php the_title(); ?></li>
  		</ul>
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
  					<?php if ($ropechar != "") { ?><li><a href="#rope-characteristics">Rope Characteristics</a></li><?php } ?>
  					<?php if ($shock_loads != "") { ?><li><a href="#shock-loads">Shock Loads</a></li><?php } ?>
  					<?php if ($elastic_elongation != "") { ?><li><a href="#elastic-elongation">Elastic Elongation</a></li><?php } ?>
  					<?php if ($dielectric_strength != "") { ?><li><a href="#dielectric-strength">Dielectric Strength</a></li><?php } ?>
  				</ul>
  			</div>
	
  			<div id="featured-image">
  				<h1><?php the_title(); ?></h1>
  			</div>
  			
  			<div id="details" class="page-shadow">
  			
  					<section class="details-left">
		  				<?php if ($ropechar != "") { ?>
		  					<h2 id="rope-characteristics">Rope Characteristics</h2>
		  					<p><?php echo $ropechar; ?></p>
		  				<?php } ?>
  					</section>
  					<aside class="details-right">
  					<?php if ($main_img != "") { ?>
  					<span class="frame"><?php echo $main_img; ?></span>
  					<?php } ?>
  					</aside>
  					
					
					<section class="details-full clearfix">
					<br>

  					<?php if ($table != "") { ?>
  				   	<?php include(TEMPLATEPATH . $table); ?>
  					<?php } ?>
  					
  					<?php if ($table2 != "") { ?>
  				   	<?php include(TEMPLATEPATH . $table2); ?>
  					<?php } ?>
  					
  					<?php if ($shock_loads != "") { ?>
  						<h2 id="shock-loads">Shock Loads</h2>
  						<p><?php echo $shock_loads; ?></p>
  						<?php } ?>
  						
  					<?php if ($elastic_elongation != "") { ?>
  					<table class="generic-table" width="99%" border="0" cellpadding="0" cellspacing="0">
  						<tr>
  							<td style="padding:0 20px 10px 0;border-top:none;">
		  						<h2 id="elastic-elongation">Elastic Elongation</h2>
		  						<?php echo $elastic_elongation; ?>
  							</td>
  							<?php if ($graph_small != "") { ?>
  							<td rowspan="2" style="padding:0;border-top:none;">
  								 <?php echo $graph_small; ?>
  								
  							</td>
  							<?php } ?>
  						</tr>
  						<?php if ($graph_large != "") { ?>
  						<tr>
  							<td style="padding:0 0 10px 0;border-top:none;">
  								<?php echo $graph_large; ?>
  							</td>
  						</tr>
  						<?php } ?>
  						<?php if ($dielectric_strength != "") { ?>
  						<tr>
  							<td style="padding:0 20px 10px 0;border-top:none;">
  								<h2 id="dielectric-strength">Dielectric Strength</h2>
  								<p><?php echo $dielectric_strength; ?></p>
  							</td>
  						</tr>
  						<?php } ?>
  					</table>
  					<?php } ?>
  					
  					
  						
  					
  					</section>
  					  				
  			</div>
  			
  			<?php endwhile; endif; ?>
	
</section>

<?php get_footer(); ?>
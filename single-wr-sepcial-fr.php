<?php
/*
Single Post Template: Wire Rope Special French
*/
?>
<?php get_header(); ?>

<?php 
	if (have_posts()) : while (have_posts()) : the_post(); 
?>	

<?php 
	$left_content = (types_render_field("left-content", array('show_name' => 'false')));
	$right_sidebar = (types_render_field("right-sidebar", array('show_name' => 'false')));
	$additional_text = (types_render_field("additional-text", array('show_name' => 'false')));
	$table = (types_render_field("tables", array('show_name' => 'false'))); 
?>

<div id="breadcrumbs-nav">
  	<div id="primary-cat"><a href="/fr/produits/">Produits</a></div> 
  	<div id="secondary-cat">
  		<ul>
  			<li><a href="/fr/produits/cables/">Câbles</a></li>
  			<li><a href="/fr/produits/cables/cable-dacier/">Câble D’acier</a></li>
  			<li><a href="/fr/produits/cables/cable-dacier/information-technique/">Information Technique</a></li>
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
	<div id="page-nav" class="clearfix"></div> 
	
  			<div id="featured-image">
  				<h1><?php the_title(); ?></h1>
  				<?php if ( has_post_thumbnail() ) {
					the_post_thumbnail('full');
				} ?>
				
  			</div>
  			<div id="details" class="page-shadow">
 					
  					<section class="details-full">
  					<div class="entry">
  					<?php the_content(); ?>
  					</div>
					</section>
					
					<?php if ($left_content != "") { ?>
					<section class="details-left">
  						<?php echo $left_content; ?>
					</section>
					<?php } ?>
					
					<?php if ($right_sidebar != "") { ?>
					<aside class="details-right clearfix">
  						<?php echo $right_sidebar; ?>
					</aside>
					<?php } ?>
					
					<?php if ($additional_text != "") { ?>
					<section class="details-full">
  						<?php echo $additional_text; ?>
					</section>
					<?php } ?>
					
					<?php if ($table != "") { ?>
					<section class="details-full">
  						<?php include(TEMPLATEPATH . $table); ?>
					</section>
					<?php } ?>
  				
  			</div>
  			
  			<?php endwhile; endif; ?>
	
</section>

<?php get_footer(); ?>
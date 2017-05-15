<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<?php
	$table_half = (types_render_field("table-half", array('show_name' => 'false')));
	$table_full = (types_render_field("table-full", array('show_name' => 'false')));
	$additional_text = (types_render_field("additional-text", array('show_name' => 'false')));
	$additional_text_2 = (types_render_field("additional-text-2", array('show_name' => 'false')));
?>

<div id="breadcrumbs-nav">
  	<div id="primary-cat"><a href="/fr/produits/">Produits</a></div> 
  	<div id="secondary-cat">
  		<ul>
  			<li><a href="/fr/produits/cables/">Câbles</a></li>
  			<li><a href="/fr/produits/cables/wire-rope-end-attachments/">Accessoires câble métallique fin</a></li>
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
  					<?php if ($mainapp != "") { ?><li><a href="#main-applications">Main Applications</a></li><?php } ?>
  					<?php if ($ropechar != "") { ?><li><a href="#rope-characteristics">Rope Characteristics</a></li><?php } ?>
  					<?php if ($std != "") { ?><li><a href="#standard">Standard</a></li><?php } ?>
  					<?php if ($bstr != "") { ?><li><a href="#breaking-strengths">Breaking Strengths</a></li><?php } ?>
  				</ul>
  			</div>
	
  			<div id="featured-image">
  				<h1><?php the_title(); ?></h1>
  				<?php if ( has_post_thumbnail() ) {
					the_post_thumbnail('full');
				} ?>
  			</div>
  			<div id="details" class="page-shadow">
  			
  			
  				<section class="details-full">
  				
  				<div class="content-half">
  				<?php the_content(); ?>
  				</div>  					
  				
  				<div class="content-half">
  				<?php if ($additional_text != "") { ?>
  				<?php echo $additional_text; ?>
  				<?php } ?>				
				<?php if ($table_half != "") { ?>
			   	<?php include(TEMPLATEPATH . $table_half); ?>
				<?php } ?>
				</div>
				
				</section>
				
				<section class="details-full">
				
				<?php if ($table_full != "") { ?>
			   	<?php include(TEMPLATEPATH . $table_full); ?>
				<?php } ?>
				
				</section>
				
				<section class="details-full">
				
				<?php if ($additional_text_2 != "") { ?>
  				<?php echo $additional_text_2; ?>
  				<?php } ?>	
				
				</section>
				
  			</div>
  			<?php endwhile; endif; ?>
	</section>
<?php get_footer(); ?>
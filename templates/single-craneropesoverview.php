<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<?php 
	$table = (types_render_field("tables", array('show_name' => 'false'))); 
?>

<div id="breadcrumbs-nav">
  	<div id="primary-cat"><a href="/products/">Products</a></div> 
  	<div id="secondary-cat">
  		<ul>
  			<li><a href="/products/ropes/">Ropes</a></li>
  			<li><a href="/products/ropes/wire-ropes/">Wire Ropes</a></li>
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
				<?php the_content(); ?>
  			</div>
  			<div id="details" class="page-shadow">
 
  				
  					<section class="details-full">
  					
  					<?php if ($table != "") { ?>
  				   	<?php include(TEMPLATEPATH . $table); ?>
  					<?php } ?>
  					
  					</section>
  				
  			</div>
  			
  			<?php endwhile; endif; ?>
	
</section>

<?php get_footer(); ?>
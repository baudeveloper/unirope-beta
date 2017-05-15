<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<?php 
$left_content = (types_render_field("left-content", array('show_name' => 'false')));
	$right_sidebar = (types_render_field("right-sidebar", array('show_name' => 'false')));
	$additional_text = (types_render_field("additional-text", array('show_name' => 'false')));
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
  				
  					<section class="details-full">
  					
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
  					<div class="box-full">
  					<?php echo $additional_text; ?>
  					</div>
  					<?php } ?>
  					
  					</section>
  				
  			</div>
  			
  			<?php endwhile; endif; ?>
	
</section>

<?php get_footer(); ?>
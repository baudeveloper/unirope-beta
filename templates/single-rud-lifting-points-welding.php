<?php get_header();

  if (have_posts()) : while (have_posts()) : the_post();
  
  $table = (types_render_field("tables", array('show_name' => 'false'))); 
  $anchorlinks = (types_render_field("anchor-links", array('show_name' => 'false'))); 
?>

<div id="breadcrumbs-nav">
<div id="primary-cat"><a href="/products/">Products</a></div>
<div id="secondary-cat">
  <ul>
	<li><a href="/products/rigging-hardware/">Rigging Hardware</a></li>
	<li><a href="/products/rigging-hardware/rud/">RUD</a></li>
	<li><a href="/products/rigging-hardware/rud/lifting-points-for-welding/">Lifting Points For Welding</a></li>
	<li>
	  <?php 
		  $terms = get_the_terms($wp_query->post->ID, 'rigging-hardware-type');
		  //die(print_r($terms));
		  $props = array();
		  foreach ($terms as $term) {
			  $hasChildrenTest = get_term_children($term->ID, 'rigging-hardware-type');
			  if ($term->parent==32) {
				  if (empty($hasChildrenTest) && !is_wp_error($hasChildrenTest)) {
					  $props[] = $term->name;
				  }
			  }
		  }
		  echo $props[0];
	  ?>
	</li>
  </ul>
</div>
<!-- end of #secondary-cat --> 
</div>
<!-- end of #breadcrumbs-nav -->
</div>
<!-- end of #header-wrap -->

<div id="content-outerWrap" class="clearfix">
<div id="content-innerWrap" class="clearfix">
<?php get_sidebar(); ?>
<section id="content">
<?php if ($anchorlinks != "") { echo $anchorlinks; } ?>
<div id="featured-image">
  <h1>
	<?php the_title(); ?>
  </h1>
  <?php the_content(); ?>
</div>
<div id="details" class="page-shadow">
  <section class="details-full">
	<?php 
		  if ($table != "") { 
			  include(TEMPLATEPATH . $table);
		  } 
	 ?>
	</section>
</div>
<?php endwhile; endif; ?>
</section>
<?php get_footer(); ?>

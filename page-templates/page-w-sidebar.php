<?php
	/* 
		Template Name: Page with Right Sidebar
	*/
?>
<?php get_header();
 	if (have_posts()) : while (have_posts()) : the_post(); 
	$category = get_the_category();
	$anchorlinks = (types_render_field("anchor-links", array('show_name' => 'false')));
	$additional_text = (types_render_field("additional-text", array('show_name' => 'false')));
?>

  <div id="breadcrumbs-nav">
  	<div id="primary-cat">
  		<?php
			global $post;
			$page_id = $post->ID;
			//Here is the Root Parent page
			$root_parent_id = get_root_parent_id($page_id);
			$root_parent_page = get_post($root_parent_id);
			//Here is the page title
			$root_parent_title = $root_parent_page->post_title;
			//Here is the page link
			$root_parent_link = get_permalink($root_parent_id);
		?>
		<a href="<?php echo $root_parent_link;?>" title="<?php echo $root_parent_title;?>"><?php echo $root_parent_title;?></a>
  	</div> 
  	<div id="secondary-cat">
  	<div class="breadcrumbs">
	<?php
    if(function_exists('bcn_display')) {
    	bcn_display();
    }
	?>
	</div>
  	</div>
  	
  </div> <!-- end of #breadcrumbs-nav -->

</div> <!-- end of #header-wrap -->
	
   <div id="content-outerWrap" class="clearfix">
  	<div id="content-innerWrap" class="clearfix">
  	
  	<?php get_sidebar(); ?>
  	<article class="post" id="post-<?php the_ID(); ?>">
  	
  	<section id="content">
  	<?php if ($anchorlinks != "") { ?>
  	  	 <?php echo $anchorlinks; ?> 
  	 <?php } ?>
  	 <div id="featured-image" class="clearfix">
  		<h1><?php the_title(); ?></h1>
  	</div>
  	<div id="details" class="page-shadow">
  	<section class="details-left">
			
			<div class="entry">

				<?php the_content(); ?>

			</div>

	</section>
		
	<aside class="details-right">
				<?php if ($additional_text != "") { ?>
  				<?php echo $additional_text; ?>
  				<?php } ?>
	</aside>
	</div>
		<?php endwhile; endif; ?>

</section>
</article>

<?php get_footer(); ?>

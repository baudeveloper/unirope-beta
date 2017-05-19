<?php
	/* 
		Template Name: News FR
	*/
?>

<?php get_header();
 	if (have_posts()) : while (have_posts()) : the_post(); 
	$category = get_the_category();
	$anchorlinks = (types_render_field("anchor-links", array('show_name' => 'false')));
	$additional_text = (types_render_field("additional-text", array('show_name' => 'false')));
	$left_content = (types_render_field("left-content", array('show_name' => 'false')));
	$right_sidebar = (types_render_field("right-sidebar", array('show_name' => 'false')));
	$table = (types_render_field("tables", array('show_name' => 'false'))); 
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
  		<h1>Actualités</h1>
  	</div>
  	<div id="details" class="page-shadow">
  	<section class="details-full clearfix">
			
			<div class="entry clearfix">

				<?php $args = array(
					'posts_per_page'  => 10,
					'post_type'=> 'article',
					'orderby' => 'post_date',
					'order' => 'DESC',
					'post_status' => 'publish',
					'suppress_filters' => false					
				);
				$postslist = get_posts( $args );
				foreach ($postslist as $post) :  setup_postdata($post); ?> 
					<div class="clearfix news-block ">
						<div style="float:left;width:25%" class="news-thumb clearfix">
						<?php if ( has_post_thumbnail() ) { ?>
							  <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail');?></a>
						<?php }  ?>
						</div>
						<div style="float:left;width:75%" class="news-content clearfix">
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<em>Publié le: <?php the_date(); ?></em>
						<br/><br/>
						<?php print_excerpt(320); ?>
						<a class="news-more" href="<?php the_permalink(); ?>">Read More...</a>
						</div>
					</div>
					<hr/>
				<?php endforeach; ?>
				<?php wp_pagenavi(); ?>

			</div>

	</section>
	</div>
	<?php endwhile; endif; ?>

</section>
</article>

<?php get_footer(); ?>

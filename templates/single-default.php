<?php get_header();
 	if (have_posts()) : while (have_posts()) : the_post(); 
	$category = get_the_category(); 
?>

<div id="breadcrumbs-nav">
  	<div id="primary-cat"><?php echo '<a href="'.get_category_link($category[0]->term_id ).'">'.$category[0]->cat_name.'</a>'; ?></div> 
  	<div id="secondary-cat"><a href="#"></a></div>
  </div>

</div> <!-- end of #header-wrap -->
	
   <div id="content-outerWrap" class="clearfix">
  	<div id="content-innerWrap" class="clearfix">
  	
  	<?php get_sidebar(); ?>
  	
  	<section id="content">
  	<div id="details">
  	<section class="details-full">  	

		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			
			<h1 class="entry-title"><?php the_title(); ?></h1>
				
			<div class="entry-content">
				<?php the_content(); ?>
			</div>
			
		</article>

	<?php endwhile; endif; ?>
	</section>
	</div>

</section>

<?php get_footer(); ?>
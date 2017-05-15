<?php get_header(); ?>
	
	<div id="breadcrumbs-nav">
  	<div id="primary-cat"><a href="#"></a></div> 
  	<div id="secondary-cat"><a href="#"></a></div>
  </div>

</div> <!-- end of #header-wrap -->
	
   <div id="content-outerWrap" class="clearfix">
  	<div id="content-innerWrap" class="clearfix">
  	
  	<?php get_sidebar(); ?>
  	
  	<section id="content">
  	<div id="details">
  	<section class="details-full">
	<?php if (have_posts()) : ?>

		<h2>Search Results for "<?php the_search_query(); ?>"</h2>

		<?php include (TEMPLATEPATH . '/_/inc/nav.php' ); ?>
		<hr/>

		<?php while (have_posts()) : the_post(); ?>

			<article <?php post_class() ?> id="post-<?php the_ID(); ?>">

				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2><br />

			</article>

		<?php endwhile; ?>
		<hr/>
		<?php include (TEMPLATEPATH . '/_/inc/nav.php' ); ?>

	<?php else : ?>

		<h2>No posts found.</h2>

	<?php endif; ?>
	</section>
		</div>
	
	</section>

<?php get_footer(); ?>

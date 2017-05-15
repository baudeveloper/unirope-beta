<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
get_header();

$s = bsearch_clean_terms(apply_filters('the_search_query', get_search_query()));
?>
	
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
	<?php $form = get_bsearch_form($s);	?>
			<article class="page-header">
				<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'twentyeleven' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</article>

			<?php echo get_bsearch_results($s,$limit); ?>
	</section>
		</div>
	
	</section>

<?php get_footer(); ?>

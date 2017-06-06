<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<?php
	$additional_text = (types_render_field("additional-text", array('show_name' => 'false')));
	$anchorlinks = (types_render_field("anchor-links", array('show_name' => 'false')));
?>

<div id="breadcrumbs-nav">
  	<div id="primary-cat"><a href="/fr/produits/">Produits</a></div>
  	<div id="secondary-cat">
  		<ul>
  			<li><a href="/fr/produits/quincaillerie-de-greage/">Quincaillerie de Gréage</a></li>
  			<li><a href="/fr/produits/quincaillerie-de-greage/emerillons-de-positionnement-de-charge-et-oeil-de-levage/">Émerillons de positionnement de charge et œil de levage</a></li>
  		  	<li><?php the_title(); ?></li>
  		</ul>
	</div>
  	</div>
  </div>

</div> <!-- end of #header-wrap -->

   <div id="content-outerWrap" class="clearfix">
  	<div id="content-innerWrap" class="clearfix">

  	<!--<?php get_sidebar(); ?>-->
  	<aside id="sidebar" class="equalize clearfix">
  	<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Load Positioning Swivels Submenu Sidebar')) : else : ?><?php endif; ?>
  	</aside>

  	<section id="content">
  	<?php if ($anchorlinks != "") { echo $anchorlinks; } ?>

  			<div id="featured-image">
  				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>
  			</div>
  			<div id="details" class="page-shadow">

  					<section class="details-full">

  					<?php if ($additional_text != "") { ?>
  					<?php echo $additional_text; ?>
  					<?php } ?>

  					</section>

  			</div>

  			<?php endwhile; endif; ?>

</section>

<?php get_footer(); ?>

<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


<div id="breadcrumbs-nav">
  	<div id="primary-cat"><a href="/fr/actualites/">Actualités</a></div> 
  	<div id="secondary-cat">
  		<!--
<ul>
  		  	<li><?php the_title(); ?></li>
  		</ul>
-->
	</div>
  	</div>
  </div>

</div> <!-- end of #header-wrap -->
	
   <div id="content-outerWrap" class="clearfix">
  	<div id="content-innerWrap" class="clearfix">
  	
  	<?php get_sidebar(); ?>
  	
  	<section id="content">
    <div id="page-nav" class="clearfix">
      <ul class="details-nav">
        <li>
          <a style="color: #960000;" href="/fr/actualites/">← Retourner à Actualités</a>
        </li>
      </ul>
    </div>
  	<?php if ($anchorlinks != "") { echo $anchorlinks; } ?>
	
  			<div id="featured-image">
  				<h1><?php the_title(); ?></h1>
  				<div class="meta"><p>Publié le: <b><?php the_time('F j, Y') ?></b></p></div>
				
  			</div>
  			<div id="details" class="page-shadow">
  				  				
  					<section class="details-full">
  							<?php 
								if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
								  the_post_thumbnail(array(690,300));
								} 
							?>
  		  					<?php the_content(); ?>
   					</section>
  				
  			</div>
  			
  			<?php endwhile; endif; ?>
	
</section>

<?php get_footer(); ?>
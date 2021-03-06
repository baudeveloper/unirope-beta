<?php
	/* 
		Template Name: Home Page French
	*/
?>
<?php //wp_redirect( '/fr/a-propos-de-nous/' ); exit; ?>
<?php get_header(); ?>

	<div id="main-slider">
			<div class="slides_container">
			
			<?php
			$args = array(
				'post_type' => 'post',
				'category__in'=> 2,
				'posts_per_page' => -1,
				'order' => 'ASC',
				'orderby' => 'title'
			); 
			$the_query = new WP_Query($args);
			if ( $the_query->have_posts() ) :
  			while ($the_query->have_posts()) : $the_query->the_post(); 
  			?>
  			<div class="slide">
					<?php if ( has_post_thumbnail() ) { the_post_thumbnail('full'); } ?>
					<div class="caption-bg clearfix">
					<div class="main-caption">
					<?php the_content();  ?>
					</div>
					</div>
				</div>
			<?php endwhile; wp_reset_postdata(); endif;?>
		</div> <!-- end of .slide-container -->
		</div> <!-- end of #main-slider -->
		<!-- Cran Rope Centres Banner Bottom -->
		<div id="crane-rope-centres">
			<a href="/fr/produits/cables/centres-de-cable-de-grues/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Banner-french.jpg"></a>
		</div>
		<!-- end of Cran Rope Centres Banner Bottom -->	
						
	</div> <!-- end of #header-wrap -->
	
  <div id="content-home-outerWrap" class="clearfix">
  	<div id="content-home-innerWrap" class="clearfix">
  	
  		<section id="home-content">
  		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>  			
			<div class="entry">
				<?php the_content(); ?>
			</div>

		<?php endwhile; endif; wp_reset_postdata();?>
		<!-- Product Line Logos -->
		<?php
			if (is_page(array('home-fr'))) {
				include(TEMPLATEPATH . '/sidebar-templates/fr/sidebar-productlines.php');
			}
		?>
		<!-- Quick Links Here -->
		<?php
			if (is_page(array('home-fr'))) {
				include(TEMPLATEPATH . '/sidebar-templates/fr/sidebar-quicklinks.php');
			}
		?>	
  		</section><!-- end of #home-content -->
  		
  		<aside id="home-sidebar">
  		
  		<div id="news">
  		<h2>Actualités<a class="title-btn btn" href="/fr/actualites/">Plus<br>D'actualités</a></h2>
  		<?php $args = array(
			'posts_per_page'  => 1,
			'post_type'=> 'article',
			'orderby' => 'post_date',
			'order' => 'DESC',
			'post_status' => 'publish',
			'suppress_filters' => false	
		);
		$postslist = get_posts( $args );
		foreach ($postslist as $post) :  setup_postdata($post); ?> 
				<?php $smalllogo = (types_render_field("logo", array('show_name' => 'false'))); ?>
				<?php include (TEMPLATEPATH . '/_/inc/meta.php' ); ?>
				<h3><a style="color:inherit" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				<?php if ($smalllogo != "") { ?>
					<div class="smalllogo" style="float:left;display:inline-block;">
  						<?php echo $smalllogo; ?>
					</div>
				<?php } ?>
				<?php print_excerpt(600); ?><a class="more" href="<?php the_permalink(); ?>">Lire La Suite &rsaquo;</a>
				
		<?php endforeach;  wp_reset_postdata(); ?> 
		
  		</div><!-- end of .news -->
  		
  		<div id="industry-links">
		<a href="/fr/liens-industriels/" class="btn medium yellow"><span class="ql2">Liens Industriels</span><span class="click-here">cliquez ici</span></a>
		<a href="/fr/a-propos-de-nous/carrieres/" class="btn medium yellow additionalHeight"><span class="ql2">Carrières / Ouvertures</span><span class="click-here">appliquer maintenant</span></a>
		</div>

  		
  		<div id="products-in-use">
  			<h2>Produits En Service<a class="title-btn btn" href="/fr/produits-en-service/">Cliquez<br/>Ici</a></h2>
  			<div id="product-slider">
  				<div class="slides_container">
  				<?php 
					$my_query_3 = new WP_Query('cat=4&posts_per_page=3&order=ASC');
  					while ($my_query_3->have_posts()) : $my_query_3->the_post(); ?>
  					<div class="slide">
  						<?php if ( has_post_thumbnail() ) { ?>
  						<?php echo the_post_thumbnail('full');?>
  						<?php } ?>
  						<div class="caption">
  						<?php the_content(); ?>
  						</div>
  					</div>
  					<?php endwhile; wp_reset_postdata(); ?>
  				</div> <!-- end of .slide-container -->
  			</div> <!-- end of #product-slider -->
  			
  		</div><!-- end of #products-in-use -->
  		
  		</aside><!-- end of #home-sidebar -->

<?php get_footer(); ?>

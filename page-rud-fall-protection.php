<?php
	/* 
		Template Name: RUD Fall Protection
	*/
?>
<?php get_header();
 	if (have_posts()) : while (have_posts()) : the_post(); 
	$category = get_the_category();
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
    <a href="<?php echo $root_parent_link;?>" title="<?php echo $root_parent_title;?>"><?php echo $root_parent_title;?></a> </div>
  <div id="secondary-cat">
    <div class="breadcrumbs">
      <?php
    if(function_exists('bcn_display')) {
    	bcn_display();
    }
	?>
    </div>
  </div>
</div>
<!-- end of #breadcrumbs-nav -->

</div>
<!-- end of #header-wrap -->

<div id="content-outerWrap" class="clearfix">
<div id="content-innerWrap" class="clearfix">
<?php get_sidebar(); ?>
<article class="post" id="post-<?php the_ID(); ?>">
  <section id="content">
    <div id="page-nav" class="clearfix">&nbsp;</div>
    <div id="featured-image" class="clearfix">
      <h1>
        <?php the_title(); ?>
      </h1>
    </div>
    <div id="details" class="page-shadow">
      <section class="details-full">
        <div class="entry">
         <p>The PSA-Fall Protection Anchorage Points PSA-VRS (STAR-POINT) and PSA-INOX-STAR are not lifting <br />
points of the traditional type. According to the assembly, they are used as fixing points. That means that <br />
they can be used for personnel protection equipments (PSA).</p>
    <p>These fixing points can also be fixed permanently on a structure to lift personnel protection equipment. <br />
The PSA-Fall Protection Anchorage Points have been certified successfully by the Employers Liability <br />
Insurance Association and the Building Industry (BG Bau).</p>
    <p>The components correspond to the European Directive for &ldquo;personnel protection equipment&rdquo; (89/686/EWG) <br />
and are marked with the CE-Stamp as well as with the number of persons (1 or 2 persons) which can be carried.</p>
         
          
          <!-- PSA INOX-STAR -->
          <div class="table-2">
            <table id="psa_inox_star" class="category-thumbs" style="width: 100%;" cellspacing="0" cellpadding="0">
              <thead>
                <tr>
                  <th>PSA INOX-STAR</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><a href="/rigging-hardware/psa-inox-star/"><img src="/wp-content/themes/unirope/img/product-images/rud/products/psa-inox-star.gif" alt="" /><br />
                    PSA INOX-STAR</a></td>
                </tr>
              </tbody>
            </table>
          </div>
          
          <!-- PSA STARPOINT -->
          <div class="table-2">
            <table id="psa_starpoint" class="category-thumbs" style="width: 100%;" cellspacing="0" cellpadding="0">
              <thead>
                <tr>
                  <th colspan="2">PSA STARPOINT</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><a href="/rigging-hardware/psa-starpoint-metric-thread/"><img src="/wp-content/themes/unirope/img/product-images/rud/products/psa-starpoint-metric.gif" alt="" /><br />
                    PSA STARPOINT<br>Metric Thread</a></td>
                  <td><a href="/rigging-hardware/psa-starpoint-unc-thread/"><img src="/wp-content/themes/unirope/img/product-images/rud/products/psa-starpoint-metric.gif" alt="" /><br />
                    PSA STARPOINT<br>UNC Thread</a></td>
                </tr>
              </tbody>
            </table>
          </div>
        
          
        </div>
      </section>
    </div>
    <?php endwhile; endif; ?>
  </section>
</article>
<?php get_footer(); ?>

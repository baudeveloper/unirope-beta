 <?php get_header(); ?>
   <div id="breadcrumbs-nav">
      <div id="primary-cat"><a href="/fr/produits/">Produits</a></div>
        <div id="secondary-cat">
          <ul>
            <li><a href="/fr/produits/elingues/">Élingues</a></li>
            <li><a href="/fr/produits/elingues/elingues-de-chaine/">Élingues de chaîne et métalliques</a></li>
            <li><a href="/fr/sling/types-de-elingues/">Types de Élingues</a></li>
            <li>Adjustable 4-Leg Grade 80</li>
          </ul>
        </div>
      </div>
    </div>

  </div> <!-- end of #header-wrap -->

  <div id="content-outerWrap" class="clearfix">
  <div id="content-innerWrap" class="clearfix">

  <?php get_sidebar(); ?>

  <section id="content">
 <?php

    while (have_posts() ) : the_post();

    $additional_text = (types_render_field("additional-text", array('show_name' => 'false')));
    $anchorlinks = (types_render_field("anchor-links", array('show_name' => 'false')));

    if ($anchorlinks != "") { echo $anchorlinks; }
  ?>

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

  <?php endwhile; ?>

  <!-- pagination here -->
  <div class="post-navigation clearfix">
    <div class="alignLeft" style="float: left;display:inline-block;"> <?php previous_post_link( '%link', '<i class="fa fa-angle-left"></i> Previous', TRUE, ' ', 'sling-type' ); ?> </div>
    <div class="alignRight" style="float: right;display:inline-block;"><?php next_post_link( '%link', 'Next <i class="fa fa-angle-right"></i>', TRUE, ' ', 'sling-type' ); ?></div>
  </div>

  <?php wp_reset_query(); ?>

</section>

<?php get_footer(); ?>
<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<?php
  $hookapp = (types_render_field("hook-application", array('show_name' => 'false')));
  $hookappimg = (types_render_field("hook-app-image", array('show_name' => 'false')));
  $hookproperties = (types_render_field("hook-properties", array('show_name' => 'false')));
  $std = (types_render_field("hook-standard", array('show_name' => 'false')));
  $bstr = (types_render_field("hooks-strengths", array('show_name' => 'false')));
  $table = (types_render_field("hook-tables", array('show_name' => 'false')));
  $importantwarning = (types_render_field("hook-important", array('show_name' => 'false')));
  $caution = (types_render_field("hook-caution", array('show_name' => 'false')));
  $right_sidebar = (types_render_field("hook-sidebar", array('show_name' => 'false')));
  $figure = (types_render_field("hook-figure", array('show_name' => 'false')));
  $figurecaption = (types_render_field("hook-figure-caption", array('show_name' => 'false')));
  $figure2 = (types_render_field("hook-figure-2", array('show_name' => 'false')));
  $figurecaption2 = (types_render_field("hook-figure-caption-2", array('show_name' => 'false')));
  $additional_text = (types_render_field("hook-text", array('show_name' => 'false')));
  $invisible_link = (types_render_field("invisible-image-link", array('show_name' => 'false')));
  $imageorcontent = (types_render_field("hook-image-or-content", array('show_name' => 'false')));
?>

<div id="breadcrumbs-nav">
  <div id="primary-cat"><a href="/fr/produits/">Produits</a></div>
    <div id="secondary-cat">
      <ul>
        <!-- Main section - Grand Parent -->
        <li><a href="/fr/produits/sous-le-crochet/">Sous le Crochet</a></li>

        <!-- Below the Hook section - Parent -->
        <?php if ( has_term('strong-bac-fr', 'below-the-hook-type')) { ?>
        <li><a href="/fr/produits/sous-le-crochet/strong-bac/">Strong-Bac</a></li><?php } ?>
        <?php if ( has_term('mill-duty-fr', 'below-the-hook-type')) { ?>
        <li><a href="/fr/produits/sous-le-crochet/mill-duty/">Mill-Duty</a></li><?php } ?>
        <?php if ( has_term('rig-master-fr', 'below-the-hook-type')) { ?>
        <li><a href="/fr/produits/sous-le-crochet/rig-master/">Rig-Master</a></li><?php } ?>

        <!-- Load Release Systems section - Sub Pages -->
        <?php if ( has_term('load-release-systems-fr', 'below-the-hook-type')) { ?>
        <li><a href="/fr/produits/sous-le-crochet/automatic-remote-controlled-load-release-systems/">Load Release Systems</a></li><?php } ?>

        <!-- Mill Duty section - Sub Pages -->
        <?php if ( has_term('coil-handling-fr', 'below-the-hook-type')) { ?>
        <li><a href="/fr/produits/sous-le-crochet/mill-duty/coil-handling/">Coil Handling</a></li><?php } ?>
        <?php if ( has_term('ingot-and-slab-handling-fr', 'below-the-hook-type')) { ?>
        <li><a href="/fr/produits/sous-le-crochet/mill-duty/ingot-and-slab-handling/">Ingot and Slab Handling</a></li><?php } ?>
        <?php if ( has_term('sheet-and-plate-handling-fr', 'below-the-hook-type')) { ?>
        <li><a href="/fr/produits/sous-le-crochet/mill-duty/sheet-and-plate-handling/">Sheet and Plate Handling</a></li><?php } ?>
        <?php if ( has_term('lifting-beams-mill-duty-fr', 'below-the-hook-type')) { ?>
        <li><a href="/fr/produits/sous-le-crochet/mill-duty/lifting-beams/">Lifting Beams</a></li><?php } ?>

        <!-- Strong Bac section - Sub Pages -->
        <?php if ( has_term('dura-lite-composite-products-fr', 'below-the-hook-type')) { ?>
        <li><a href="/fr/produits/sous-le-crochet/strong-bac/dura-lite-composite-products/">Dura-Lite™ Composite Products</a></li><?php } ?>
        <?php if ( has_term('lifting-beams-strong-bac-fr', 'below-the-hook-type')) { ?>
        <li><a href="/fr/produits/sous-le-crochet/strong-bac/lifting-beams/">Lifting Beams</a></li><?php } ?>
        <?php if ( has_term('spreader-beams-fr', 'below-the-hook-type')) { ?>
        <li><a href="/fr/produits/sous-le-crochet/strong-bac/spreader-beams/">Spreader Beams</a></li><?php } ?>
        <?php if ( has_term('roll-lifters-fr', 'below-the-hook-type')) { ?>
        <li><a href="/fr/produits/sous-le-crochet/strong-bac/roll-lifters/">Roll Lifters</a></li><?php } ?>
        <?php if ( has_term('coil-lifters-fr', 'below-the-hook-type')) { ?>
        <li><a href="/fr/produits/sous-le-crochet/strong-bac/coil-lifters/">Coil Lifters</a></li><?php } ?>
        <?php if ( has_term('sheet-lifters-fr', 'below-the-hook-type')) { ?>
        <li><a href="/fr/produits/sous-le-crochet/strong-bac/sheet-lifters/">Sheet Lifters</a></li><?php } ?>
        <?php if ( has_term('pallet-lifters-fr', 'below-the-hook-type')) { ?>
        <li><a href="/fr/produits/sous-le-crochet/strong-bac/pallet-lifters/">Pallet Lifters</a></li><?php } ?>
        <?php if ( has_term('lifting-tongs-fr', 'below-the-hook-type')) { ?>
        <li><a href="/fr/produits/sous-le-crochet/strong-bac/lifting-tongs/">Lifting Tongs</a></li><?php } ?>
        <?php if ( has_term('material-handling-fr', 'below-the-hook-type')) { ?>
        <li><a href="/fr/produits/sous-le-crochet/strong-bac/material-handling/">Material Handling</a></li><?php } ?>

        <!-- Rig Master section - Sub Pages -->
        <?php if ( has_term('concrete-grabs-tongs-fr', 'below-the-hook-type')) { ?>
        <li><a href="/fr/produits/sous-le-crochet/rig-master/concrete-grabs-tongs/">Concrete Grabs and Tongs</a></li><?php } ?>
        <?php if ( has_term('beam-girder-and-rail-grabs-fr', 'below-the-hook-type')) { ?>
        <li><a href="/fr/produits/sous-le-crochet/rig-master/beam-girder-rail-grabs/">Beam, Girder and Rail Grabs</a></li><?php } ?>
        <?php if ( has_term('pipe-and-manhole-handling-fr', 'below-the-hook-type')) { ?>
        <li><a href="/fr/produits/sous-le-crochet/rig-master/pipe-manhole-handling/">Pipe and Manhole Handling</a></li><?php } ?>
        <?php if ( has_term('load-leveling-slings-fr', 'below-the-hook-type')) { ?>
        <li><a href="/fr/produits/sous-le-crochet/rig-master/load-leveling-slings/">Load Leveling Slings</a></li><?php } ?>
        <?php if ( has_term('lifting-and-spreader-beams-fr', 'below-the-hook-type')) { ?>
        <li><a href="/fr/produits/sous-le-crochet/rig-master/lifting-spreader-beams/">Lifting and Spreader Beams</a></li><?php } ?>
        <?php if ( has_term('beam-end-fittings-fr', 'below-the-hook-type')) { ?>
        <li><a href="/fr/produits/sous-le-crochet/rig-master/beam-end-fittings/">Beam End Fittings</a></li><?php } ?>
        <?php if ( has_term('specialty-grabs-fr', 'below-the-hook-type')) { ?>
        <li><a href="/fr/produits/sous-le-crochet/rig-master/specialty-grabs/">Specialty Grabs</a></li><?php } ?>
        <?php if ( has_term('synthetic-sling-end-fittings-fr', 'below-the-hook-type')) { ?>
        <li><a href="/fr/produits/sous-le-crochet/rig-master/synthetic-sling-end-fittings/">Synthetic Sling End Fittings</a></li><?php } ?>

        <li><?php the_title(); ?></li>
      </ul>
    </div>
  </div>
</div>

</div> <!-- end of #header-wrap -->

<div id="content-outerWrap" class="clearfix">

  <div id="content-innerWrap" class="clearfix">

    <?php get_sidebar(); ?>

    <section id="content">

      <div id="page-nav" class="clearfix">
        <!-- <a href="#">← Return to previous page</a> -->
        <ul class="details-nav">
        </ul>
      </div>

      <div id="featured-image">
        <?php if ($invisible_link != "") { ?>
        <a class="invisible-btn" href="<?php echo $invisible_link; ?>">(click here for more info)</a>
        <?php } ?>
        <h1><?php the_title(); ?></h1>
        <?php if ( has_post_thumbnail() ) {
        the_post_thumbnail('full');
        } ?>
        <?php the_content(); ?>
      </div>

      <div id="details" class="page-shadow">

        <section class="details-left">

          <?php if ($hookapp != "") { ?>
          <h2 id="hook-applications">Main Applications</h2>
          <div class="clearfix" style="margin-bottom:10px;"><?php echo $hookapp; ?></div>
          <?php } ?>

          <?php if ($hookproperties != "") { ?>
          <h2 id="hook-characteristics">Rope Characteristics</h2>
          <div class="clearfix" style="margin-bottom:10px;"><?php echo $hookproperties; ?></div>
          <?php } ?>

          <?php if ($std != "") { ?>
          <h2 id="standard">Standard</h2>
          <div class="clearfix" style="margin-bottom:10px;"><?php echo $std; ?></div>
          <?php } ?>

          <?php if ($importantwarning != "") { ?>
          <div class="important clearfix" style="margin-bottom:10px;"><?php echo $importantwarning; ?></div>
          <?php } ?>

          <?php if ($imageorcontent != "" ) { ?>
          <div id="image-content" style="margin-bottom:10px;"><?php echo $imageorcontent; ?></div>
          <?php } ?>

          <?php if ($figure != "") { ?>
          <figure>
          <?php echo $figure; ?>
          <figcaption><?php echo $figurecaption; ?></figcaption>
          </figure>
          <?php } ?>

          <?php if ($figure2 != "") { ?>
          <figure>
          <?php echo $figure2; ?>
          <figcaption><?php echo $figurecaption2; ?></figcaption>
          </figure>
          <?php } ?>

        </section>

        <aside class="details-right">

          <?php if ($hookappimg != "") { ?>
          <span class="frame"><?php echo $hookappimg; ?></span>
          <?php } ?>

          <?php if ($caution != "") { ?>
          <div class="caution-section clearfix">
          <span class="caution-btn clearfix"><img src="<?php bloginfo('template_directory'); ?>/img/caution-sign.png" class="c-icon"/>Caution</span><br>
          <?php echo $caution; ?>
          </div>
          <?php } ?>

          <?php if ($right_sidebar != "") { ?>
          <div class="right-sidebar clearfix">
          <?php echo $right_sidebar; ?>
          </div>
          <?php } ?>

        </aside>

        <section class="details-full">

          <hr>
          <?php if ($bstr != "") { ?>
          <h2 id="hook-strengths">Breaking Strengths</h2>
          <p><?php echo $bstr; ?></p>
          <?php } ?>

          <?php if ($table != "") { ?>
          <?php include(TEMPLATEPATH . $table); ?>
          <?php } ?>

          <?php if ($additional_text != "") { ?>
          <div class="box-half">
          <?php echo $additional_text; ?>
          </div>
          <?php } ?>

        </section>

      </div>

      <?php endwhile; endif; ?>

    </section>

<?php get_footer(); ?>

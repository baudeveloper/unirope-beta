<?php
	/*
		Template Name: Products French Page
	*/
?>
<?php get_header();
 	if (have_posts()) : while (have_posts()) : the_post();
	$category = get_the_category();
?>

<div id="breadcrumbs-nav">
  <div id="primary-cat">
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
</div>
<!-- end of #breadcrumbs-nav -->

</div>
<!-- end of #header-wrap -->

<div id="content-outerWrap" class="clearfix">
<div id="content-innerWrap" class="clearfix">
<?php get_sidebar(); ?>
<article class="post" id="post-<?php the_ID(); ?>">
  <section id="content">
    <div id="page-nav" class="clearfix">
<ul class="details-nav">
<li><a href="#cables">Câbles</a></li>
<li><a href="#slings">Élingues</a></li>
<li><a href="#rigging_hardware">Accessoires de gréement</a></li>
<li><a href="#below_the_hook">Below the Hook</a></li>
<!-- <li><a href="#slings">Slings</a></li> -->
</ul>
</div>
    <div id="featured-image" class="clearfix">
      <h1>
        <?php the_title(); ?>
      </h1>
    </div>
    <div id="details" class="page-shadow">
      <section class="details-full">
        <div class="entry">
          <p>This page gives you an overview of our extensive and always growing product palette. If you cannot find what you are looking for, please call us and talk to one of our experienced sales support staff. Make sure you check out our "<a href="#">Products in Use</a>" section to read up on and view images of some of our products in action.</p>


          <!-- Ropes -->
          <div class="table-2">
            <table id="cordes" class="category-thumbs" style="width: 100%;" cellspacing="0" cellpadding="0">
              <thead>
                <tr>
                  <th colspan="1">Câbles</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><a href="/fr/produits/cables/cable-dacier/"><img src="/wp-content/themes/unirope/img/wire_rope_main_thumb.jpg" alt="" /><br />
                   Câble D’acier</a></td>
                   <td><a href="/fr/produits/cables/wire-rope-end-attachments/"><img src="/wp-content/themes/unirope/img/wire_rope_endattachments_main_thumb.jpg" alt="" /><br />
                    Accessoires câble <br/>métallique fin</a></td>
                </tr>
              </tbody>
            </table>
          </div>


          <!-- Slings -->
          <div class="table-3">
            <table id="slings" class="category-thumbs" style="width: 100%;" cellspacing="0" cellpadding="0">
              <thead>
                <tr>
                  <th colspan="3">Élingues</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><a href="/fr/produits/elingues/elingues-en-cable-metallique/"><img src="/wp-content/themes/unirope/img/wire_rope_sling_main_thumb.jpg" alt="" /><br />
                    Élingues en <br/>câble métallique</a></td>
                  <td><a href="/fr/produits/elingues/elingues-de-chaine/"><img src="/wp-content/themes/unirope/img/chain_wire_mesh_slings_main_thumb.jpg" alt="" /><br />
                    Élingues de chaîne <br/>et métalliques</a></td>
                  <td><a href="/fr/produits/elingues/elingues-de-levage-twin-path-et-elingues-de-levage-synthetiques/"><img src="/wp-content/themes/unirope/img/twin_path_slings_main_thumb.jpg" alt="" /><br />
                    Élingues de levage <br/>TWIN PATHᴹᴰ et élingues <br/>de levage synthétiques</a></td>
                </tr>
              </tbody>
            </table>
          </div>


          <!-- Rigging Hardware -->
          <div class="table-4">
            <table id="rigging_hardware" class="category-thumbs" style="width: 100%;" cellspacing="0" cellpadding="0">
              <thead>
                <tr>
                  <th colspan="4">Accessoires de gréement</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><a href="/fr/produits/rigging-hardware/shackles-hooks/"><img src="/wp-content/themes/unirope/img/shackles_hooks_main_thumb.jpg" alt="" /><br />
                    Manilles & Crochets</a></td>
                  <td><a href="/fr/produits/rigging-hardware/cable-clips/"><img src="/wp-content/themes/unirope/img/cable_clips_main_thumb.jpg" alt="" /><br />
                    Serre-câbles</a></td>

                  <td><a href="/fr/produits/rigging-hardware/load-positioning-swivels-and-lifting-eyes/"><img src="/wp-content/themes/unirope/img/load_positioning_swivels_main_thumb.jpg" alt="" /><br />
                    Émerillons de <br/>positionnement de charge and Lifting Eyes</a></td>
										<!--<td><a href="/fr/produits/rigging-hardware/rigging-turnbuckles/"><img src="/wp-content/uploads/2012/05/rigging-turnbuckles-main-thumb.jpg" alt="Rigging Turnbuckles" /><br />
	                    Tendeur de<br />gréement</a></td>-->
                </tr>
								<tr>
									<td><a href="/fr/produits/rigging-hardware/eye-bolts-hoist-rings/"><img src="/wp-content/themes/unirope/img/eye_bolts_hoist_rings_main_thumb.jpg" alt="" /><br />
	                    Pitons à œil & Anneaux <br/>de levage articulés</a></td>
								</tr>
              </tbody>
            </table>
          </div>


          <!-- More Hardware -->

         <!--  <div class="table-3">
            <table id="slings" class="category-thumbs" style="width: 100%;" cellspacing="0" cellpadding="0">
              <thead>
                <tr>
                  <th colspan="3">Slings</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><a href="/fr/produits/slings/wire-rope-slings/"><img src="/wp-content/themes/unirope/img/wire_rope_sling_main_thumb.jpg" alt="" /><br />
                    Wire Rope<br />
                    Slings</a></td>
                  <td><a href="/fr/produits/slings/chain-wire-mesh-slings/"><img src="/wp-content/themes/unirope/img/chain_wire_mesh_slings_main_thumb.jpg" alt="" /><br />
                    Chain and Wire Mesh<br />
                    Slings</a></td>
                  <td><a href="/fr/produits/slings/twin-path-and-synthetic-lifting-slings/"><img src="/wp-content/themes/unirope/img/twin_path_slings_main_thumb.jpg" alt="" /><br />
                    Twin-Path® and Synthetic<br />
                    Lifting Slings</a></td>
                </tr>
              </tbody>
            </table>
          </div> -->

          <!-- Below the Hooks -->
          <div class="table-4">
            <table id="below_the_hook" class="category-thumbs" style="width: 100%;" cellspacing="0" cellpadding="0">
              <thead>
                <tr>
                  <th colspan="4">Below the Hook</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="padding-top:5px;"><a href="/fr/produits/below-the-hook/strong-bac"><img src="/wp-content/uploads/2015/09/Lifting_Beams_New_Bail_Style_Triangle_Beam.png" alt="" /><br />
                    Strong-Bac</a></td>
                  <td style="padding-top:5px;"><a href="/fr/produits/below-the-hook/mill-duty"><img src="/wp-content/uploads/2015/09/Coil_Handling.png" alt="" /><br />
                    Mill-Duty</a></td>
                  <td style="padding-top:5px;"><a href="/fr/produits/below-the-hook/rig-master"><img src="/wp-content/uploads/2015/09/Concrete_Grabs_Tongs.png" alt="" /><br />
                  Rig-Master</a></td>
                  <td><a href="/fr/produits/below-the-hook/clamps-overview/"><img src="/wp-content/themes/unirope/img/clamps_magnets_main_theme.jpg" alt="" /><br />
                    Lifting and Beam Clamps</a></td>
                </tr>
                <tr>
									<td><a href="/fr/produits/below-the-hook/magnets-overview/"><img src="/wp-content/themes/unirope/img/product-images/clamps-magnets/clamps-thumb-65.jpg" alt="" /><br />
                    Magnets</a></td>
                  <td style="padding-top:5px;"><a href="/fr/produits/below-the-hook/load-monitoring-systems/"><img src="/wp-content/themes/unirope/img/crane_scales_main_thumb.jpg" alt="" /><br />
                    Load Monitoring Systems</a></td>
                  <td style="padding-top: 5px;"><a href="/fr/produits/below-the-hook/automatic-remote-controlled-load-release-systems/"><img src="/wp-content/themes/unirope/img/elebia-remote-controlled-autohook-thumb-1.png" alt=""><br>
                    Automatic &amp; Remote Controlled Load Release Systems</a></td>
                  <td class="empty"></td>
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

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
<li><a href="#rigging_hardware">Quincaillerie de Gréage</a></li>
<li><a href="#below_the_hook">Sous le Crochet</a></li>
<li><a href="#atlas-copco">Outils D'assemblage Atlas Copco</a></li>
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
          <div class="table-3">
            <table id="cordes" class="category-thumbs" style="width: 100%;" cellspacing="0" cellpadding="0">
              <thead>
                <tr>
                  <th colspan="1">Câbles</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><a href="/fr/produits/cables/centres-de-cable-de-grues/"><img src="/wp-content/themes/unirope/img/wire_rope_main_thumb.jpg" alt="" /><br />
                   Centres de câble de grues</a></td>
                   <td><a href="/fr/produits/cables/embouts-de-cable-dacier/"><img src="/wp-content/themes/unirope/img/wire_rope_endattachments_main_thumb.jpg" alt="" /><br />
                    Embouts de câble d’acier</a></td>
                    <td><a href="/fr/produits/cables/cable-dacier/"><img src="/wp-content/uploads/2012/07/fiberrope-category-pic.gif" height="100" alt="" /><br />
                    Câble d’acier</a></td>
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
                  <th colspan="4">Quincaillerie de Gréage</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><a href="/fr/produits/quincaillerie-de-greage/rud/"><img src="/wp-content/themes/unirope/img/product-images/rud/products/starpoint-vrs-metric-thread.gif" alt="" /><br />
                    RUD point<br>d’ancrage de<br>levage et d’arrimage</a></td>
                  <td><a href="/fr/produits/quincaillerie-de-greage/manilles-et-crochet/"><img src="/wp-content/themes/unirope/img/shackles_hooks_main_thumb.jpg" alt="" /><br />
                    Manilles & Crochets</a></td>
                  <td><a href="/fr/produits/quincaillerie-de-greage/cosses-protecteur-de-coin/"><img src="/wp-content/themes/unirope/img/thimble_corner_protector_main_thumb.jpg" alt="" /><br />
                    Cosses &<br>Protecteur de coin</a></td>                  
                  <td><a href="/fr/produits/quincaillerie-de-greage/serre-cables/"><img src="/wp-content/themes/unirope/img/cable_clips_main_thumb.jpg" alt="" /><br />
                    Serre-câbles</a></td>                  
                </tr>
                <tr>
                  <td><a href="/fr/produits/quincaillerie-de-greage/emerillons-de-positionnement-de-charge-et-oeil-de-levage/"><img src="/wp-content/themes/unirope/img/load_positioning_swivels_main_thumb.jpg" alt="" /><br />
                    Émerillons de<br>positionnement de charge<br>et œil de levage</a></td>
                  <td><a href="/fr/produits/quincaillerie-de-greage/tendeurs/"><img src="/wp-content/uploads/2012/05/rigging-turnbuckles-main-thumb.jpg" alt="Tendeurs" /><br />Tendeurs</a></td>
                  <td><a href="/fr/produits/quincaillerie-de-greage/pitons-a-oeil-et-anneaux-de-levage-articule/"><img src="/wp-content/themes/unirope/img/eye_bolts_hoist_rings_main_thumb.jpg" alt="" /><br />
                    Pitons à œil et<br>Anneaux de<br>levage articulé</a></td>
                  <td><a href="/fr/produits/quincaillerie-de-greage/coupe-cable-et-pinces-a-sertir/"><img src="/wp-content/themes/unirope/img/rope_cutters_hand_swagers_main_thumb.jpg" alt="" /><br />
                    Coupe-câble et<br>pinces à sertir</a></td>
                </tr>
								<tr>					
                  <td><a href="/fr/produits/quincaillerie-de-greage/securisation-de-charge/"><img src="/wp-content/themes/unirope/img/load_securement_main_thumb.jpg" alt="" /><br />
                    Sécurisation de charge</a></td>				
                  <td><a href="/fr/produits/quincaillerie-de-greage/produits-specifiques-a-lutilite/"><img src="/wp-content/themes/unirope/img/utility_specific_products_main_thumb.jpg" alt="" /><br />
                    Produits spécifiques<br />à l’utilité</a></td>
                  <td><a href="/fr/produits/quincaillerie-de-greage/blocs-mckissick-137k-pdf/"><img src="/wp-content/themes/unirope/img/mckissick_blocks_main_thumb.jpg" alt="" /><br />
                Blocs McKissick <br />(137k pdf)</a></td>
								</tr>                
              </tbody>
            </table>
          </div>

          <!-- Below the Hooks -->
          <div class="table-4">
            <table id="below_the_hook" class="category-thumbs" style="width: 100%;" cellspacing="0" cellpadding="0">
              <thead>
                <tr>
                  <th colspan="4">Sous le Crochet</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="padding-top:5px;"><a href="/fr/produits/sous-le-crochet/strong-bac"><img src="/wp-content/uploads/2015/09/Lifting_Beams_New_Bail_Style_Triangle_Beam.png" alt="" /><br />
                    Strong-Bac</a></td>
                  <td style="padding-top:5px;"><a href="/fr/produits/sous-le-crochet/mill-duty"><img src="/wp-content/uploads/2015/09/Coil_Handling.png" alt="" /><br />
                    Mill-Duty</a></td>
                  <td style="padding-top:5px;"><a href="/fr/produits/sous-le-crochet/rig-master"><img src="/wp-content/uploads/2015/09/Concrete_Grabs_Tongs.png" alt="" /><br />
                  Rig-Master</a></td>
                  <td><a href="/fr/produits/sous-le-crochet/pinces-de-levage-et-de-poutre/"><img src="/wp-content/themes/unirope/img/clamps_magnets_main_theme.jpg" alt="" /><br />
                    Pinces de levage et de poutre</a></td>
                </tr>
                <tr>
									<td><a href="/fr/produits/sous-le-crochet/aimants/"><img src="/wp-content/themes/unirope/img/product-images/clamps-magnets/clamps-thumb-65.jpg" alt="" /><br />
                    Aimants</a></td>
                  <td style="padding-top: 5px;"><a href="/fr/produits/sous-le-crochet/pinces-a-poutres-et-treuils/"><img src="/wp-content/themes/unirope/img/thumbs/girder-thumb.jpg" alt=""><br>Pinces à poutres et treuils</a></td>
                  <td style="padding-top: 5px;"><a href="/fr/produits/sous-le-crochet/palans-et-tireurs/"><img src="/wp-content/themes/unirope/img/hoists_pullers_main_thumb.jpg" alt=""><br>Palans et tireurs</a></td>
                  <td style="padding-top:5px;"><a href="/fr/produits/sous-le-crochet/systemes-de-surveillance-de-charge/"><img src="/wp-content/themes/unirope/img/crane_scales_main_thumb.jpg" alt="" /><br />
                    Systèmes de surveillance de charge</a></td>                                    
                </tr>
                <tr>
									<td style="padding-top: 5px;"><a href="/fr/produits/sous-le-crochet/systemes-automatiques-et-a-distance-de-controle-de-charge-controlee/"><img src="/wp-content/themes/unirope/img/elebia-remote-controlled-autohook-thumb-1.png" alt=""><br>
                    Systèmes automatiques et à distance de contrôle de charge contrôlée</a></td>
									<td class="empty"></td>
									<td class="empty"></td>
									<td class="empty"></td>
                </tr>
              </tbody>
            </table>
          </div>
          
          <!-- Atlas -->
          <div class="table-4">
            <table id="atlas-copco" class="category-thumbs" style="width: 100%;" cellspacing="0" cellpadding="0">
              <thead>
                <tr>
                  <th colspan="4">Outils D'assemblage Atlas Copco</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="padding-top:5px;"><a href="http://www.atlascopco.ca/en-ca/itba/products/Assembly-tools/electric-assembly-tools" target="_blank"><img src="/wp-content/themes/unirope/img/atlas-thumbs/electric-assembly-tools-thumb.jpg" alt="Outils d'assemblage électrique" /><br />
                    Outils d'assemblage électrique</a></td>
                  <td style="padding-top:5px;"><a href="http://www.atlascopco.ca/en-ca/itba/products/Assembly-tools/Pneumatic-assembly-tools" target="_blank"><img src="/wp-content/themes/unirope/img/atlas-thumbs/pneumatic-assembly-tools-thumb.jpg" alt="Outils d'assemblage pneumatique" /><br />
                    Outils d'assemblage pneumatique</a></td>
                  <td style="padding-top:5px;"><a href="http://www.atlascopco.ca/en-ca/itba/products/assembly-solutions/Fixtured-assembly-solutions" target="_blank"><img src="/wp-content/themes/unirope/img/atlas-thumbs/fixtured-assembly-systems-thumb.jpg" alt="Systèmes d'assemblage de fixations" /><br />
										Systèmes d'assemblage de fixations</a></td>
                  <td><a href="http://www.atlascopco.ca/en-ca/itba/products/assembly-solutions/Error-proofing-solutions" target="_blank"><img src="/wp-content/themes/unirope/img/atlas-thumbs/error-proofing-solutions-thumb.jpg" alt="Solutions d'épreuve d'erreur" /><br />
										Solutions d'épreuve d'erreur</a></td>
                </tr>
                <tr>
									<td style="padding-top:5px;"><a href="http://www.atlascopco.ca/en-ca/itba/products/Assembly-tools/Quality-assurance-in-tightening-and-fastening" target="_blank"><img src="/wp-content/themes/unirope/img/atlas-thumbs/quality-assurance-in-tightening-thumb.jpg" alt="Assurance de la qualité dans le serrage" /><br />
                    Assurance de la qualité dans le serrage</a></td>
                  <td style="padding-top:5px;"><a href="http://www.atlascopco.ca/en-ca/itba/products/assembly-solutions/Error-proofing-solutions/Socket-and-bit-selector" target="_blank"><img src="/wp-content/themes/unirope/img/atlas-thumbs/sockets-bits-thumb.jpg" alt="Douilles et embouts" /><br />
                    Douilles et embouts</a></td>
                  <td style="padding-top:5px;"><a href="http://www.atlascopco.ca/en-ca/itba/products/Assembly-tools/Workplace-solutions-automation" target="_blank"><img src="/wp-content/themes/unirope/img/atlas-thumbs/workplace-solutions-and-automation-thumb.jpg" alt="Solutions et automatisation sur le lieu de travail" /><br />
										Solutions et automatisation sur le lieu de travail</a></td>
                  <td><a href="http://www.atlascopco.ca/en-ca/itba/products/Sockets-bits/bit-holder-and-bits" target="_blank"><img src="/wp-content/themes/unirope/img/atlas-thumbs/bits-thumb.jpg" alt="Embouts" /><br />
										Embouts</a></td>
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

<?php
	/*
		Template Name: Products Main Page
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
<li><a href="#ropes">Ropes</a></li>
<li><a href="#slings">Slings</a></li>
<li><a href="#rigging_hardware">Rigging Hardware</a></li>
<li><a href="#below-the-hook">Below the Hook</a></li>
<li><a href="#atlas-copco">Atlas Copco Assembly Tools</a></li>
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
            <table id="ropes" class="category-thumbs" style="width: 100%;" cellspacing="0" cellpadding="0">
              <thead>
                <tr>
                  <th colspan="3">Ropes</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><a href="/products/ropes/wire-ropes/"><img src="/wp-content/themes/unirope/img/wire_rope_main_thumb.jpg" alt="" /><br />
                   Wire Ropes</a></td>
                  <td><a href="/products/ropes/wire-rope-end-attachments/"><img src="/wp-content/themes/unirope/img/wire_rope_endattachments_main_thumb.jpg" alt="" /><br />
                    Wire Rope<br />
                    End-Attachments</a></td>
                  <td><a href="/products/ropes/fiber-ropes/"><img src="/wp-content/themes/unirope/img/fibre_rope_main_thumb.jpg" alt="" /><br />
                    Fiber Ropes</a></td>
                </tr>
              </tbody>
            </table>
          </div>

          <!-- Slings -->
          <div class="table-3">
            <table id="slings" class="category-thumbs" style="width: 100%;" cellspacing="0" cellpadding="0">
              <thead>
                <tr>
                  <th colspan="3">Slings</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><a href="/products/slings/wire-rope-slings/"><img src="/wp-content/themes/unirope/img/wire_rope_sling_main_thumb.jpg" alt="" /><br />
                    Wire Rope<br />
                    Slings</a></td>
                  <td><a href="/products/slings/chain-wire-mesh-slings/"><img src="/wp-content/themes/unirope/img/chain_wire_mesh_slings_main_thumb.jpg" alt="" /><br />
                    Chain and Wire Mesh<br />
                    Slings</a></td>
                  <td><a href="/products/slings/twin-path-and-synthetic-lifting-slings/"><img src="/wp-content/themes/unirope/img/twin_path_slings_main_thumb.jpg" alt="" /><br />
                    Twin-Path® and Synthetic<br />
                    Lifting Slings</a></td>
                </tr>
              </tbody>
            </table>
          </div>

          <!-- Rigging Hardware -->
          <div class="table-4">
            <table id="rigging_hardware" class="category-thumbs" style="width: 100%;" cellspacing="0" cellpadding="0">
              <thead>
                <tr>
                  <th colspan="4">Rigging Hardware</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><a href="/products/rigging-hardware/rud/"><img src="/wp-content/themes/unirope/img/product-images/rud/products/starpoint-vrs-metric-thread.gif" alt="" /><br />
                    RUD Lifting<br />and Fall Protection<br />
                    Anchorage Points</a></td>
                  <td><a href="/products/rigging-hardware/shackles-hooks/"><img src="/wp-content/themes/unirope/img/shackles_hooks_main_thumb.jpg" alt="" /><br />
                    Shackles<br />and Hooks</a></td>
                  <td><a href="/products/rigging-hardware/thimbles-corner-protectors/"><img src="/wp-content/themes/unirope/img/thimble_corner_protector_main_thumb.jpg" alt="" /><br />
                    Thimbles<br />and Corner Protectors</a></td>
                  <td><a href="/products/rigging-hardware/cable-clips/"><img src="/wp-content/themes/unirope/img/cable_clips_main_thumb.jpg" alt="" /><br />
                    Cable Clips</a></td>
                </tr>
                <tr>
                  <td><a href="/products/rigging-hardware/load-positioning-swivels-and-lifting-eyes/"><img src="/wp-content/themes/unirope/img/load_positioning_swivels_main_thumb.jpg" alt="" /><br />
                    Load Positionig Swivels and Lifting Eyes</a></td>
										<td><a href="/products/rigging-hardware/rigging-turnbuckles/"><img src="/wp-content/uploads/2012/05/rigging-turnbuckles-main-thumb.jpg" alt="Rigging Turnbuckles" /><br />Rigging<br />Turnbuckles </a></td>
                  <td><a href="/products/rigging-hardware/eye-bolts-hoist-rings/"><img src="/wp-content/themes/unirope/img/eye_bolts_hoist_rings_main_thumb.jpg" alt="" /><br />
                    Eye Bolts<br />and Hoist Rings</a></td>
                  <td><a href="/products/rigging-hardware/rope-cutters-hand-sawgers/"><img src="/wp-content/themes/unirope/img/rope_cutters_hand_swagers_main_thumb.jpg" alt="" /><br />
                    Rope Cutters<br />and Hand Swagers</a></td>
                </tr>
                <tr>
									<td><a href="/products/rigging-hardware/load-securement/"><img src="/wp-content/themes/unirope/img/load_securement_main_thumb.jpg" alt="" /><br />
                    Load Securement</a></td>
                    <td><a href="/products/rigging-hardware/utility-specific-products/"><img src="/wp-content/themes/unirope/img/utility_specific_products_main_thumb.jpg" alt="" /><br />
                    Utility Specific<br />Products</a></td>
                   <td><a href="/products/rigging-hardware/mckissick-blocks-137k-pdf-file/"><img src="/wp-content/themes/unirope/img/mckissick_blocks_main_thumb.jpg" alt="" /><br />
                    McKissick Blocks<br />(137k pdf file)</a></td>
                   <td class="empty"></td>
                </tr>
              </tbody>
            </table>
          </div>

          <!-- Below the Hooks -->
          <div class="table-4">
            <table id="below-the-hook" class="category-thumbs" style="width: 100%;" cellspacing="0" cellpadding="0">
              <thead>
                <tr>
                  <th colspan="4">Below the Hook</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="padding-top:5px;"><a href="/products/below-the-hook/strong-bac"><img src="/wp-content/uploads/2015/09/Lifting_Beams_New_Bail_Style_Triangle_Beam.png" alt="" /><br />
                    Strong-Bac</a></td>
                  <td style="padding-top:5px;"><a href="/products/below-the-hook/mill-duty"><img src="/wp-content/uploads/2015/09/Coil_Handling.png" alt="" /><br />
                    Mill-Duty</a></td>
                  <td style="padding-top:5px;"><a href="/products/below-the-hook/rig-master"><img src="/wp-content/uploads/2015/09/Concrete_Grabs_Tongs.png" alt="" /><br />
                  Rig-Master</a></td>
									<td style="padding-top:5px;"><a href="/products/below-the-hook/clamps-overview/"><img src="/wp-content/themes/unirope/img/clamps_magnets_main_theme.jpg" alt="" /><br />
                    Lifting and Beam Clamps</a></td>
                </tr>
                <tr>
									<td style="padding-top: 5px;"><a href="/products/below-the-hook/magnets-overview/"><img src="/wp-content/themes/unirope/img/product-images/clamps-magnets/clamps-thumb-65.jpg" alt="" /><br />
                    Magnets</a></td>
									<td style="padding-top: 5px;"><a href="/products/below-the-hook/girder-clamps-and-trolleys/"><img src="/wp-content/themes/unirope/img/thumbs/girder-thumb.jpg" alt=""><br>Girder Clamps and Trolleys</a></td>
									<td style="padding-top: 5px;"><a href="/products/below-the-hook/hoists-pullers/"><img src="/wp-content/themes/unirope/img/hoists_pullers_main_thumb.jpg" alt=""><br>Hoists & Pullers</a></td>
	                <td style="padding-top:5px;"><a href="/products/below-the-hook/load-monitoring-systems/"><img src="/wp-content/themes/unirope/img/crane_scales_main_thumb.jpg" alt="" /><br />
                    Load Monitoring Systems</a></td>
                </tr>
								<tr>
									<td style="padding-top: 5px;"><a href="/products/below-the-hook/auto-remote-load-release/"><img src="/wp-content/themes/unirope/img/elebia-remote-controlled-autohook-thumb-1.png" alt=""><br>
                    Automatic &amp; Remote Controlled Load Release Systems</a></td>
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
                  <th colspan="4">Atlas Copco Assembly Tools</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="padding-top:5px;"><a href="http://www.atlascopco.ca/en-ca/itba/products/Assembly-tools/electric-assembly-tools" target="_blank"><img src="/wp-content/themes/unirope/img/atlas-thumbs/electric-assembly-tools-thumb.jpg" alt="Electric Assembly Tools" /><br />
                    Electric Assembly Tools</a></td>
                  <td style="padding-top:5px;"><a href="http://www.atlascopco.ca/en-ca/itba/products/Assembly-tools/Pneumatic-assembly-tools" target="_blank"><img src="/wp-content/themes/unirope/img/atlas-thumbs/pneumatic-assembly-tools-thumb.jpg" alt="Pneumatic Assembly Tools" /><br />
                    Pneumatic Assembly Tools</a></td>
                  <td style="padding-top:5px;"><a href="http://www.atlascopco.ca/en-ca/itba/products/assembly-solutions/Fixtured-assembly-solutions" target="_blank"><img src="/wp-content/themes/unirope/img/atlas-thumbs/fixtured-assembly-systems-thumb.jpg" alt="Fixtured Assembly Systems" /><br />
										Fixtured Assembly Systems</a></td>
                  <td><a href="http://www.atlascopco.ca/en-ca/itba/products/assembly-solutions/Error-proofing-solutions" target="_blank"><img src="/wp-content/themes/unirope/img/atlas-thumbs/error-proofing-solutions-thumb.jpg" alt="Error Proofing Solutions" /><br />
										Error Proofing Solutions</a></td>
                </tr>
                <tr>
									<td style="padding-top:5px;"><a href="http://www.atlascopco.ca/en-ca/itba/products/Assembly-tools/Quality-assurance-in-tightening-and-fastening" target="_blank"><img src="/wp-content/themes/unirope/img/atlas-thumbs/quality-assurance-in-tightening-thumb.jpg" alt="Quality Assurance in Tightening" /><br />
                    Quality Assurance in Tightening</a></td>
                  <td style="padding-top:5px;"><a href="http://www.atlascopco.ca/en-ca/itba/products/assembly-solutions/Error-proofing-solutions/Socket-and-bit-selector" target="_blank"><img src="/wp-content/themes/unirope/img/atlas-thumbs/sockets-bits-thumb.jpg" alt="Socket and Bits" /><br />
                    Socket and Bits</a></td>
                  <td style="padding-top:5px;"><a href="http://www.atlascopco.ca/en-ca/itba/products/Assembly-tools/Workplace-solutions-automation" target="_blank"><img src="/wp-content/themes/unirope/img/atlas-thumbs/workplace-solutions-and-automation-thumb.jpg" alt="Workplace Solutions and Automation" /><br />
										Workplace Solutions and Automation</a></td>
                  <td><a href="http://www.atlascopco.ca/en-ca/itba/products/Sockets-bits/bit-holder-and-bits" target="_blank"><img src="/wp-content/themes/unirope/img/atlas-thumbs/bits-thumb.jpg" alt="Bits" /><br />
										Bits</a></td>
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

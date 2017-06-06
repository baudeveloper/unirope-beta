<?php
	/* 
		Template Name: RUD Lifting Points for Bolting
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
    <div id="page-nav" class="clearfix">
      <ul class="details-nav">
        <?php if(ICL_LANGUAGE_CODE =='fr') {  ?>
          <li><a href="#powerpoint_pp">PowerPoint® PP</a></li>
          <li><a href="#starpoint_vrs">Starpoint VRS</a></li>
          <li><a href="#load_ring_vlbg">Load Ring VLBG</a></li>
          <li><a href="#load_ring_vwbg">Load Ring VWBG-V/VWBG</a></li>
          <li><a href="#starpoint_eye_nut_vrm">Starpoint-Eye Nut VRM</a></li>
          <li><a href="#bolt_on_hooks">Bolt on Hooks VABH-B/VCGH-G</a></li>
          <li><a href="#eye_bolt_rs">Eye Bolt RS</a></li>
          <li><a href="#eye_nut_rm">Eye Nut RM</a></li>
          <li><a href="#load_ring_vrbg">Load Ring VRBG</a></li>
          <li><a href="#accessories">Accessories</a></li>
          <li><a href="#inox_star">INOX-STAR</a></li>
          <li><a href="#load_ring_lbg_rs">Load Ring LBG-RS - Stainless Steel</a></li>
        <?php } else {  ?>
          <li><a href="#powerpoint_pp">PowerPoint® PP</a></li>
          <li><a href="#starpoint_vrs">Starpoint VRS</a></li>
          <li><a href="#load_ring_vlbg">Load Ring VLBG</a></li>
          <li><a href="#load_ring_vwbg">Load Ring VWBG-V/VWBG</a></li>
          <li><a href="#starpoint_eye_nut_vrm">Starpoint-Eye Nut VRM</a></li>
          <li><a href="#bolt_on_hooks">Bolt on Hooks VABH-B/VCGH-G</a></li>
          <li><a href="#eye_bolt_rs">Eye Bolt RS</a></li>
          <li><a href="#eye_nut_rm">Eye Nut RM</a></li>
          <li><a href="#load_ring_vrbg">Load Ring VRBG</a></li>
          <li><a href="#accessories">Accessories</a></li>
          <li><a href="#inox_star">INOX-STAR</a></li>
          <li><a href="#load_ring_lbg_rs">Load Ring LBG-RS - Stainless Steel</a></li>
        <?php } ?>
      </ul>
    </div>
    <div id="featured-image" class="clearfix">
      <h1>
        <?php the_title(); ?>
      </h1>
    </div>
    <div id="details" class="page-shadow">
      <section class="details-full">
        <?php if(ICL_LANGUAGE_CODE =='fr') {  ?>
        <div class="entry">
          <p>Tested lifting points: the complete range of boltable elements from M6 to M150, and from <sup>1</sup>⁄<sub>4</sub>" to 5" in different constructions.</p>
          <!-- PowerPoint® PP -->
          <div class="table-full">
            <table id="powerpoint_pp" class="category-thumbs" style="width: 100%;" cellspacing="0" cellpadding="0">
              <thead>
                <tr>
                  <th colspan="5">PowerPoint® PP</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><a href="/fr/quincaillerie-de-greage/powerpoint-pp-s-universal-connection-metric-thread/"><img src="/wp-content/themes/unirope/img/product-images/rud/products/powerpoint-pp-s-universal-connection-metric-thread.gif" alt="" /><br />
                    PowerPoint PP-S<br />
                    Universal Connection,<br />
                    Metric Thread</a></td>
                  <td><a href="/fr/quincaillerie-de-greage/powerpoint-pp-b-ring-connection-metric-thread/"><img src="/wp-content/themes/unirope/img/product-images/rud/products/powerpoint-pp-b-ring-connection-metric-thread.gif" alt="" /><br />
                    PowerPoint PP-B<br />
                    Ring Connection,<br />
                    Metric Thread</a></td>
                  <td><a href="/fr/quincaillerie-de-greage/powerpoint-pp-vip-direct-vip-chain-connection-metric-thread/"><img src="/wp-content/themes/unirope/img/product-images/rud/products/powerpoint-pp-vip-direct_vip-connection-metric-thread.gif" alt="" /><br />
                    PowerPoint PP-VIP<br />
                    Direct VIP<br />
                    Chain Connection,<br />
                    Metric Thread</a></td>
                  <td><a href="/fr/quincaillerie-de-greage/powerpoint-pp-vip-direct-vip-chain-connection-metric-fine-thread/"><img src="/wp-content/themes/unirope/img/product-images/rud/products/powerpoint-pp-vip-direct_vip-connection-metric-fine-thread.gif" alt="" /><br />
                    PowerPoint PP-VIP<br />
                    Direct VIP<br />
                    Chain Connection,<br />
                    Metric Fine-Thread</a></td>
                  <td><a href="/fr/quincaillerie-de-greage/vip-oval-link-pp/"><img src="/wp-content/themes/unirope/img/product-images/rud/products/powerpoint-vip-oval-link-pp.gif" alt="" /><br />
                    VIP-Oval-Link PP</a></td>
                </tr>
                <tr>
                  <td><a href="/fr/quincaillerie-de-greage/powerpoint-pp-s-universal-connection-unc-thread/"><img src="/wp-content/themes/unirope/img/product-images/rud/products/powerpoint-pp-s-universal-connection-unc-thread.gif" alt="" /><br />
                    PowerPoint PP-S<br />
                    Universal Connection,<br />
                    UNC Thread</a></td>
                  <td><a href="/fr/quincaillerie-de-greage/powerpoint-pp-b-ring-connection-unc-thread/"><img src="/wp-content/themes/unirope/img/product-images/rud/products/powerpoint-pp-b-ring-connection-unc-thread.gif" alt="" /><br />
                    PowerPoint PP-B<br />
                    Ring Connection,<br />
                    UNC Thread</a></td>
                  <td><a href="/fr/quincaillerie-de-greage/powerpoint-pp-vip-direct-vip-chain-connection-unc-thread/"><img src="/wp-content/themes/unirope/img/product-images/rud/products/powerpoint-pp-vip-direct_vip-connection-unc-thread.gif" alt="" /><br />
                    PowerPoint PP-VIP<br />
                    Direct VIP<br />
                    Chain Connection<br />
                    UNC Thread</a></td>
                  <td><a href="/fr/quincaillerie-de-greage/vip-cobra-eye-sling-hook/"><img src="/wp-content/themes/unirope/img/product-images/rud/products/powerpoint-vip-cobra-eye-sling-hook.gif" alt="" /><br />
                    VIP-Cobra Eye<br />
                    Sling Hook</a></td>
                  <td class="empty"></td>
                </tr>
              </tbody>
            </table>
          </div>          
          <!-- Starpoint VRS -->
          <div class="table-3">
            <table id="starpoint_vrs" class="category-thumbs" style="width: 100%;" cellspacing="0" cellpadding="0">
              <thead>
                <tr>
                  <th colspan="3">Starpoint VRS</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><a href="/fr/quincaillerie-de-greage/starpoint-vrs-metric-thread/"><img src="/wp-content/themes/unirope/img/product-images/rud/products/starpoint-vrs-metric-thread.gif" alt="" /><br />
                    Starpoint VRS<br />
                    Metric Thread</a></td>
                  <td><a href="/fr/quincaillerie-de-greage/starpoint-vrs-metric-fine-thread/"><img src="/wp-content/themes/unirope/img/product-images/rud/products/starpoint-vrs-metric-fine-thread.gif" alt="" /><br />
                    Starpoint VRS<br />
                    Metric Fine Thread</a></td>
                  <td><a href="/fr/quincaillerie-de-greage/starpoint-vrs-unc-thread/"><img src="/wp-content/themes/unirope/img/product-images/rud/products/starpoint-vrs-unc-thread.gif" alt="" /><br />
                    Starpoint VRS<br />
                    UNC Thread</a></td>
                </tr>
              </tbody>
            </table>
          </div>          
          <!-- Load Ring VLBG -->
          <div class="table-3">
            <table id="load_ring_vlbg" class="category-thumbs" style="width: 100%;" cellspacing="0" cellpadding="0">
              <thead>
                <tr>
                  <th colspan="3">Load Ring VLBG</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><a href="/fr/quincaillerie-de-greage/load-ring-vlbg-metric-thread/"><img src="/wp-content/themes/unirope/img/product-images/rud/products/load-ring-vlbg-metric-thread.gif" alt="" /><br />
                    Load Ring VLBG<br />
                    Metric Thread</a></td>
                  <td><a href="/fr/quincaillerie-de-greage/load-ring-vlbg-metric-fine-thread/"><img src="/wp-content/themes/unirope/img/product-images/rud/products/ring-bolt-vlbg-metric-fine-thread.gif" alt="" /><br />
                    Ring Bolt VLBG<br />
                    Metric Fine Thread</a></td>
                  <td><a href="/fr/quincaillerie-de-greage/load-ring-vlbg-unc-thread/"><img src="/wp-content/themes/unirope/img/product-images/rud/products/load-ring-vlbg-unc-thread.gif" alt="" /><br />
                    Load Ring VLBG<br />
                    UNC Thread</a></td>
                </tr>
              </tbody>
            </table>
          </div>          
          <!-- Load Ring VWBG-V/VWBG -->
          <div class="table-3">
            <table id="load_ring_vwbg" class="category-thumbs" style="width: 100%;" cellspacing="0" cellpadding="0">
              <thead>
                <tr>
                  <th colspan="3">Load Ring VWBG-V/VWBG</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><a href="/fr/quincaillerie-de-greage/load-ring-vwbg-vvwbg-metric-thread/"><img src="/wp-content/themes/unirope/img/product-images/rud/products/load-ring-vwbg-v-vwbg-metric-thread2.gif" alt="" /><br />
                    Load Ring VWBG-V/VWBG<br>
                    Metric Thread</a></td>
                  <td><a href="/fr/quincaillerie-de-greage/load-ring-vwbg-vvwbg-metric-fine-thread/"><img src="/wp-content/themes/unirope/img/product-images/rud/products/load-ring-wbg-v-wbg-metric-fine-thread.gif" alt="" /><br />
                    Load Ring VWBG-V/VWBG<br>
                    Metric Fine Thread</a></td>
                  <td><a href="/fr/quincaillerie-de-greage/load-ring-vwbg-vvwbg-unc-thread/"><img src="/wp-content/themes/unirope/img/product-images/rud/products/load-ring-vwbg-v-vwbg-unc-thread.gif" alt="" /><br />
                    Load Ring VWBG-V/VWBG<br>
                    UNC Thread</a></td>
                </tr>
              </tbody>
            </table>
          </div>          
          <!-- Starpoint-Eye Nut VRM -->
          <div class="table-2">
            <table id="starpoint_eye_nut_vrm" class="category-thumbs" style="width: 100%;" cellspacing="0" cellpadding="0">
              <thead>
                <tr>
                  <th>Starpoint-Eye Nut VRM</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><a href="/fr/quincaillerie-de-greage/starpoint-eye-nut-vrm/"><img src="/wp-content/themes/unirope/img/product-images/rud/products/starpoint-eye-nut-vrm.gif" alt="" /><br />
                    Starpoint-Eye Nut VRM</a></td>
                </tr>
              </tbody>
            </table>
          </div>          
          <!-- Bolt On Hooks VABH-B/VCGH-G -->
          <div class="table-2">
            <table id="bolt_on_hooks" class="category-thumbs" style="width: 100%;" cellspacing="0" cellpadding="0">
              <thead>
                <tr>
                  <th colspan="2">Bolt-On Hooks VABH-B/VCGH-G</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><a href="/fr/quincaillerie-de-greage/excavator-hooks-vabh-b/"><img src="/wp-content/themes/unirope/img/product-images/rud/products/excavator-hook-vabh-b.gif" alt="" /><br />
                    Excavator Hooks VABH-B</a></td>
                  <td><a href="/fr/quincaillerie-de-greage/bolt-on-hooks-vcgh-g/"><img src="/wp-content/themes/unirope/img/product-images/rud/products/excavator-hook-vcgh-g.gif" alt="" /><br />
                    Bolt-On Hooks VCGH-G</a></td>
                </tr>
              </tbody>
            </table>
          </div>          
          <!-- Eye Bolt RS -->
          <div class="table-4">
            <table id="eye_bolt_rs" class="category-thumbs" style="width: 100%;" cellspacing="0" cellpadding="0">
              <thead>
                <tr>
                  <th colspan="4">Eye Bolt RS</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><a href="/fr/quincaillerie-de-greage/eye-bolt-rs-metric-thread/"><img src="/wp-content/themes/unirope/img/product-images/rud/products/eye-bolt-rs.gif" alt="" /><br />
                    Eye Bolt RS<br>
                    Metric Thread</a></td>
                  <td><a href="/fr/quincaillerie-de-greage/eye-bolt-rs-metric-fine-thread/"><img src="/wp-content/themes/unirope/img/product-images/rud/products/eye-bolt-rs.gif" alt="" /><br />
                    Eye Bolt RS<br>
                    Metric Fine-Thread</a></td>
                  <td><a href="/fr/quincaillerie-de-greage/eye-bolt-rs-unc-thread/"><img src="/wp-content/themes/unirope/img/product-images/rud/products/eye-bolt-rs.gif" alt="" /><br />
                    Eye Bolt RS<br>
                    UNC Thread</a></td>
                  <td><a href="/fr/quincaillerie-de-greage/eye-bolt-rs-whitworth-thread/"><img src="/wp-content/themes/unirope/img/product-images/rud/products/eye-bolt-rs.gif" alt="" /><br />
                    Eye Bolt RS<br>
                    Whitworth Thread</a></td>
                </tr>
              </tbody>
            </table>
          </div>          
          <!-- Eye Nut RM -->
          <div class="table-2">
            <table id="eye_nut_rm" class="category-thumbs" style="width: 100%;" cellspacing="0" cellpadding="0">
              <thead>
                <tr>
                  <th colspan="2">Eye Nut RM</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><a href="/fr/quincaillerie-de-greage/eye-nut-rm-metric-thread/"><img src="/wp-content/themes/unirope/img/product-images/rud/products/eye-nut-rm.gif" alt="" /><br />
                    Eye Nut RM<br>
                    Metric Thread</a></td>
                  <td><a href="/fr/quincaillerie-de-greage/eye-nut-rm-unc-thread/"><img src="/wp-content/themes/unirope/img/product-images/rud/products/eye-nut-rm.gif" alt="" /><br />
                    Eye Nut RM<br>
                    UNC Thread</a></td>
                </tr>
              </tbody>
            </table>
          </div>          
          <!-- Load Ring VRBG -->
          <div class="table-3">
            <table id="load_ring_vrbg" class="category-thumbs" style="width: 100%;" cellspacing="0" cellpadding="0">
              <thead>
                <tr>
                  <th colspan="3">Load Ring VRBG</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><a href="/fr/quincaillerie-de-greage/load-ring-thread-rbg-3/"><img src="/wp-content/themes/unirope/img/product-images/rud/products/load-ring-thread-rbg-3.gif" alt="" /><br />
                    Load Ring Thread<br>
                    RBG 3</a></td>
                  <td><a href="/fr/quincaillerie-de-greage/load-ring-thread-rbg-8vrbg-10-u-16/"><img src="/wp-content/themes/unirope/img/product-images/rud/products/load-ring-thread-rbg-8.gif" alt="" /><br />
                    Load Ring Thread<br>
                    RBG 8/VRBG 10 u. 16</a></td>
                  <td><a href="/fr/quincaillerie-de-greage/load-ring-on-boltable-plate-vrbg-30-u-50/"><img src="/wp-content/themes/unirope/img/product-images/rud/products/load-ring-boltable-plate-vrbg.gif" alt="" /><br />
                    Load Ring on<br>
                    Boltable Plate<br>
                    VRBG 30 u. 50</a></td>
                </tr>
              </tbody>
            </table>
          </div>          
          <!-- Accessories -->
          <div class="table-3">
            <table id="accessories" class="category-thumbs" style="width: 100%;" cellspacing="0" cellpadding="0">
              <thead>
                <tr>
                  <th colspan="3">Accessories</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><a href="/fr/quincaillerie-de-greage/adaptor-aspa/"><img src="/wp-content/themes/unirope/img/product-images/rud/products/adaptor-aspa.gif" alt="" /><br />
                    Adaptor ASPA</a></td>
                  <td><a href="/fr/quincaillerie-de-greage/bolts-for-vlbg/"><img src="/wp-content/themes/unirope/img/product-images/rud/products/bolts-for-vlbg.gif" alt="" /><br />
                    Bolts for VLBG</a></td>
                  <td><a href="/fr/quincaillerie-de-greage/6kt-socket-wrench-for-starpoint-vrs/"><img src="/wp-content/themes/unirope/img/product-images/rud/products/6kt-socket-wrench-for-starpoint-vrs.gif" alt="" /><br />
                    6kt Socket Wrench<br>
                    for Starpoint VRS</a></td>
                </tr>
              </tbody>
            </table>
          </div>          
          <!-- INOX-STAR -->
          <div class="table-2">
            <table id="inox_star" class="category-thumbs" style="width: 100%;" cellspacing="0" cellpadding="0">
              <thead>
                <tr>
                  <th>INOX-STAR</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><a href="/fr/quincaillerie-de-greage/inox-star-metric/"><img src="/wp-content/themes/unirope/img/product-images/rud/products/inox-star-metric.gif" alt="" /><br />
                    INOX-STAR Metric</a></td>
                </tr>
              </tbody>
            </table>
          </div>          
          <!-- Load Ring LBG-RS Stainless Steel -->
          <div class="table-2">
            <table id="load_ring_lbg_rs" class="category-thumbs" style="width: 100%;" cellspacing="0" cellpadding="0">
              <thead>
                <tr>
                  <th>Load Ring LBG-RS Stainless Steel</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><a href="/fr/quincaillerie-de-greage/load-ring-thread-lbg-rs-metric/"><img src="/wp-content/themes/unirope/img/product-images/rud/products/load-ring-thread-lbg-rs-metric.gif" alt="" /><br />
                    Load Ring Thread LBG-RS Metric</a></td>
                </tr>
              </tbody>
            </table>
          </div>   
        </div>
        <?php } else { ?>
        <div class="entry">
          <p>Tested lifting points: the complete range of boltable elements from M6 to M150, and from <sup>1</sup>⁄<sub>4</sub>" to 5" in different constructions.</p>
          <!-- PowerPoint® PP -->
          <div class="table-full">
            <table id="powerpoint_pp" class="category-thumbs" style="width: 100%;" cellspacing="0" cellpadding="0">
              <thead>
                <tr>
                  <th colspan="5">PowerPoint® PP</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><a href="/rigging-hardware/powerpoint-pp-s-universal-connection-metric-thread/"><img src="/wp-content/themes/unirope/img/product-images/rud/products/powerpoint-pp-s-universal-connection-metric-thread.gif" alt="" /><br />
                    PowerPoint PP-S<br />
                    Universal Connection,<br />
                    Metric Thread</a></td>
                  <td><a href="/rigging-hardware/powerpoint-pp-b-ring-connection-metric-thread/"><img src="/wp-content/themes/unirope/img/product-images/rud/products/powerpoint-pp-b-ring-connection-metric-thread.gif" alt="" /><br />
                    PowerPoint PP-B<br />
                    Ring Connection,<br />
                    Metric Thread</a></td>
                  <td><a href="/rigging-hardware/powerpoint-pp-vip-direct-vip-chain-connection-metric-thread/"><img src="/wp-content/themes/unirope/img/product-images/rud/products/powerpoint-pp-vip-direct_vip-connection-metric-thread.gif" alt="" /><br />
                    PowerPoint PP-VIP<br />
                    Direct VIP<br />
                    Chain Connection,<br />
                    Metric Thread</a></td>
                  <td><a href="/rigging-hardware/powerpoint-pp-vip-direct-vip-chain-connection-metric-fine-thread/"><img src="/wp-content/themes/unirope/img/product-images/rud/products/powerpoint-pp-vip-direct_vip-connection-metric-fine-thread.gif" alt="" /><br />
                    PowerPoint PP-VIP<br />
                    Direct VIP<br />
                    Chain Connection,<br />
                    Metric Fine-Thread</a></td>
                  <td><a href="/rigging-hardware/vip-oval-link-pp/"><img src="/wp-content/themes/unirope/img/product-images/rud/products/powerpoint-vip-oval-link-pp.gif" alt="" /><br />
                    VIP-Oval-Link PP</a></td>
                </tr>
                <tr>
                  <td><a href="/rigging-hardware/powerpoint-pp-s-universal-connection-unc-thread/"><img src="/wp-content/themes/unirope/img/product-images/rud/products/powerpoint-pp-s-universal-connection-unc-thread.gif" alt="" /><br />
                    PowerPoint PP-S<br />
                    Universal Connection,<br />
                    UNC Thread</a></td>
                  <td><a href="/rigging-hardware/powerpoint-pp-b-ring-connection-unc-thread/"><img src="/wp-content/themes/unirope/img/product-images/rud/products/powerpoint-pp-b-ring-connection-unc-thread.gif" alt="" /><br />
                    PowerPoint PP-B<br />
                    Ring Connection,<br />
                    UNC Thread</a></td>
                  <td><a href="/rigging-hardware/powerpoint-pp-vip-direct-vip-chain-connection-unc-thread/"><img src="/wp-content/themes/unirope/img/product-images/rud/products/powerpoint-pp-vip-direct_vip-connection-unc-thread.gif" alt="" /><br />
                    PowerPoint PP-VIP<br />
                    Direct VIP<br />
                    Chain Connection<br />
                    UNC Thread</a></td>
                  <td><a href="/rigging-hardware/vip-cobra-eye-sling-hook/"><img src="/wp-content/themes/unirope/img/product-images/rud/products/powerpoint-vip-cobra-eye-sling-hook.gif" alt="" /><br />
                    VIP-Cobra Eye<br />
                    Sling Hook</a></td>
                  <td class="empty"></td>
                </tr>
              </tbody>
            </table>
          </div>          
          <!-- Starpoint VRS -->
          <div class="table-3">
            <table id="starpoint_vrs" class="category-thumbs" style="width: 100%;" cellspacing="0" cellpadding="0">
              <thead>
                <tr>
                  <th colspan="3">Starpoint VRS</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><a href="/rigging-hardware/starpoint-vrs-metric-thread/"><img src="/wp-content/themes/unirope/img/product-images/rud/products/starpoint-vrs-metric-thread.gif" alt="" /><br />
                    Starpoint VRS<br />
                    Metric Thread</a></td>
                  <td><a href="/rigging-hardware/starpoint-vrs-metric-fine-thread/"><img src="/wp-content/themes/unirope/img/product-images/rud/products/starpoint-vrs-metric-fine-thread.gif" alt="" /><br />
                    Starpoint VRS<br />
                    Metric Fine Thread</a></td>
                  <td><a href="/rigging-hardware/starpoint-vrs-unc-thread/"><img src="/wp-content/themes/unirope/img/product-images/rud/products/starpoint-vrs-unc-thread.gif" alt="" /><br />
                    Starpoint VRS<br />
                    UNC Thread</a></td>
                </tr>
              </tbody>
            </table>
          </div>          
          <!-- Load Ring VLBG -->
          <div class="table-3">
            <table id="load_ring_vlbg" class="category-thumbs" style="width: 100%;" cellspacing="0" cellpadding="0">
              <thead>
                <tr>
                  <th colspan="3">Load Ring VLBG</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><a href="/rigging-hardware/load-ring-vlbg-metric-thread/"><img src="/wp-content/themes/unirope/img/product-images/rud/products/load-ring-vlbg-metric-thread.gif" alt="" /><br />
                    Load Ring VLBG<br />
                    Metric Thread</a></td>
                  <td><a href="/rigging-hardware/load-ring-vlbg-metric-fine-thread/"><img src="/wp-content/themes/unirope/img/product-images/rud/products/ring-bolt-vlbg-metric-fine-thread.gif" alt="" /><br />
                    Ring Bolt VLBG<br />
                    Metric Fine Thread</a></td>
                  <td><a href="/rigging-hardware/load-ring-vlbg-unc-thread/"><img src="/wp-content/themes/unirope/img/product-images/rud/products/load-ring-vlbg-unc-thread.gif" alt="" /><br />
                    Load Ring VLBG<br />
                    UNC Thread</a></td>
                </tr>
              </tbody>
            </table>
          </div>          
          <!-- Load Ring VWBG-V/VWBG -->
          <div class="table-3">
            <table id="load_ring_vwbg" class="category-thumbs" style="width: 100%;" cellspacing="0" cellpadding="0">
              <thead>
                <tr>
                  <th colspan="3">Load Ring VWBG-V/VWBG</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><a href="/rigging-hardware/load-ring-vwbg-vvwbg-metric-thread/"><img src="/wp-content/themes/unirope/img/product-images/rud/products/load-ring-vwbg-v-vwbg-metric-thread2.gif" alt="" /><br />
                    Load Ring VWBG-V/VWBG<br>
                    Metric Thread</a></td>
                  <td><a href="/rigging-hardware/load-ring-vwbg-vvwbg-metric-fine-thread/"><img src="/wp-content/themes/unirope/img/product-images/rud/products/load-ring-wbg-v-wbg-metric-fine-thread.gif" alt="" /><br />
                    Load Ring VWBG-V/VWBG<br>
                    Metric Fine Thread</a></td>
                  <td><a href="/rigging-hardware/load-ring-vwbg-vvwbg-unc-thread/"><img src="/wp-content/themes/unirope/img/product-images/rud/products/load-ring-vwbg-v-vwbg-unc-thread.gif" alt="" /><br />
                    Load Ring VWBG-V/VWBG<br>
                    UNC Thread</a></td>
                </tr>
              </tbody>
            </table>
          </div>          
          <!-- Starpoint-Eye Nut VRM -->
          <div class="table-2">
            <table id="starpoint_eye_nut_vrm" class="category-thumbs" style="width: 100%;" cellspacing="0" cellpadding="0">
              <thead>
                <tr>
                  <th>Starpoint-Eye Nut VRM</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><a href="/rigging-hardware/starpoint-eye-nut-vrm/"><img src="/wp-content/themes/unirope/img/product-images/rud/products/starpoint-eye-nut-vrm.gif" alt="" /><br />
                    Starpoint-Eye Nut VRM</a></td>
                </tr>
              </tbody>
            </table>
          </div>          
          <!-- Bolt On Hooks VABH-B/VCGH-G -->
          <div class="table-2">
            <table id="bolt_on_hooks" class="category-thumbs" style="width: 100%;" cellspacing="0" cellpadding="0">
              <thead>
                <tr>
                  <th colspan="2">Bolt-On Hooks VABH-B/VCGH-G</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><a href="/rigging-hardware/excavator-hooks-vabh-b/"><img src="/wp-content/themes/unirope/img/product-images/rud/products/excavator-hook-vabh-b.gif" alt="" /><br />
                    Excavator Hooks VABH-B</a></td>
                  <td><a href="/rigging-hardware/bolt-on-hooks-vcgh-g/"><img src="/wp-content/themes/unirope/img/product-images/rud/products/excavator-hook-vcgh-g.gif" alt="" /><br />
                    Bolt-On Hooks VCGH-G</a></td>
                </tr>
              </tbody>
            </table>
          </div>          
          <!-- Eye Bolt RS -->
          <div class="table-4">
            <table id="eye_bolt_rs" class="category-thumbs" style="width: 100%;" cellspacing="0" cellpadding="0">
              <thead>
                <tr>
                  <th colspan="4">Eye Bolt RS</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><a href="/rigging-hardware/eye-bolt-rs-metric-thread/"><img src="/wp-content/themes/unirope/img/product-images/rud/products/eye-bolt-rs.gif" alt="" /><br />
                    Eye Bolt RS<br>
                    Metric Thread</a></td>
                  <td><a href="/rigging-hardware/eye-bolt-rs-metric-fine-thread/"><img src="/wp-content/themes/unirope/img/product-images/rud/products/eye-bolt-rs.gif" alt="" /><br />
                    Eye Bolt RS<br>
                    Metric Fine-Thread</a></td>
                  <td><a href="/rigging-hardware/eye-bolt-rs-unc-thread/"><img src="/wp-content/themes/unirope/img/product-images/rud/products/eye-bolt-rs.gif" alt="" /><br />
                    Eye Bolt RS<br>
                    UNC Thread</a></td>
                  <td><a href="/rigging-hardware/eye-bolt-rs-whitworth-thread/"><img src="/wp-content/themes/unirope/img/product-images/rud/products/eye-bolt-rs.gif" alt="" /><br />
                    Eye Bolt RS<br>
                    Whitworth Thread</a></td>
                </tr>
              </tbody>
            </table>
          </div>          
          <!-- Eye Nut RM -->
          <div class="table-2">
            <table id="eye_nut_rm" class="category-thumbs" style="width: 100%;" cellspacing="0" cellpadding="0">
              <thead>
                <tr>
                  <th colspan="2">Eye Nut RM</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><a href="/rigging-hardware/eye-nut-rm-metric-thread/"><img src="/wp-content/themes/unirope/img/product-images/rud/products/eye-nut-rm.gif" alt="" /><br />
                    Eye Nut RM<br>
                    Metric Thread</a></td>
                  <td><a href="/rigging-hardware/eye-nut-rm-unc-thread/"><img src="/wp-content/themes/unirope/img/product-images/rud/products/eye-nut-rm.gif" alt="" /><br />
                    Eye Nut RM<br>
                    UNC Thread</a></td>
                </tr>
              </tbody>
            </table>
          </div>          
          <!-- Load Ring VRBG -->
          <div class="table-3">
            <table id="load_ring_vrbg" class="category-thumbs" style="width: 100%;" cellspacing="0" cellpadding="0">
              <thead>
                <tr>
                  <th colspan="3">Load Ring VRBG</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><a href="/rigging-hardware/load-ring-thread-rbg-3/"><img src="/wp-content/themes/unirope/img/product-images/rud/products/load-ring-thread-rbg-3.gif" alt="" /><br />
                    Load Ring Thread<br>
                    RBG 3</a></td>
                  <td><a href="/rigging-hardware/load-ring-thread-rbg-8vrbg-10-u-16/"><img src="/wp-content/themes/unirope/img/product-images/rud/products/load-ring-thread-rbg-8.gif" alt="" /><br />
                    Load Ring Thread<br>
                    RBG 8/VRBG 10 u. 16</a></td>
                  <td><a href="/rigging-hardware/load-ring-on-boltable-plate-vrbg-30-u-50/"><img src="/wp-content/themes/unirope/img/product-images/rud/products/load-ring-boltable-plate-vrbg.gif" alt="" /><br />
                    Load Ring on<br>
                    Boltable Plate<br>
                    VRBG 30 u. 50</a></td>
                </tr>
              </tbody>
            </table>
          </div>          
          <!-- Accessories -->
          <div class="table-3">
            <table id="accessories" class="category-thumbs" style="width: 100%;" cellspacing="0" cellpadding="0">
              <thead>
                <tr>
                  <th colspan="3">Accessories</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><a href="/rigging-hardware/adaptor-aspa/"><img src="/wp-content/themes/unirope/img/product-images/rud/products/adaptor-aspa.gif" alt="" /><br />
                    Adaptor ASPA</a></td>
                  <td><a href="/rigging-hardware/bolts-for-vlbg/"><img src="/wp-content/themes/unirope/img/product-images/rud/products/bolts-for-vlbg.gif" alt="" /><br />
                    Bolts for VLBG</a></td>
                  <td><a href="/rigging-hardware/6kt-socket-wrench-for-starpoint-vrs/"><img src="/wp-content/themes/unirope/img/product-images/rud/products/6kt-socket-wrench-for-starpoint-vrs.gif" alt="" /><br />
                    6kt Socket Wrench<br>
                    for Starpoint VRS</a></td>
                </tr>
              </tbody>
            </table>
          </div>          
          <!-- INOX-STAR -->
          <div class="table-2">
            <table id="inox_star" class="category-thumbs" style="width: 100%;" cellspacing="0" cellpadding="0">
              <thead>
                <tr>
                  <th>INOX-STAR</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><a href="/rigging-hardware/inox-star-metric/"><img src="/wp-content/themes/unirope/img/product-images/rud/products/inox-star-metric.gif" alt="" /><br />
                    INOX-STAR Metric</a></td>
                </tr>
              </tbody>
            </table>
          </div>          
          <!-- Load Ring LBG-RS Stainless Steel -->
          <div class="table-2">
            <table id="load_ring_lbg_rs" class="category-thumbs" style="width: 100%;" cellspacing="0" cellpadding="0">
              <thead>
                <tr>
                  <th>Load Ring LBG-RS Stainless Steel</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><a href="/rigging-hardware/load-ring-thread-lbg-rs-metric/"><img src="/wp-content/themes/unirope/img/product-images/rud/products/load-ring-thread-lbg-rs-metric.gif" alt="" /><br />
                    Load Ring Thread LBG-RS Metric</a></td>
                </tr>
              </tbody>
            </table>
          </div>   
        </div>
        <?php } ?>
      </section>
    </div>
    <?php endwhile; endif; ?>
  </section>
</article>
<?php get_footer(); ?>

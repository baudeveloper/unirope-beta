<?php
	/* 
		Template Name: RUD Lifting Points for Welding
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
<li><a href="#powerpoint_wpp">PowerPoint&reg; WPP</a></li>
<li><a href="#powerpoint_wpph">PowerPoint&reg; WPPH</a></li>
<li><a href="#load_ring_vlbs">Load Ring VLBS</a></li>
<li><a href="#load_ring_vrbs">Load Ring VRBS-FIX / VRBS</a></li>
<li><a href="#load_ring_vrbk">Load Ring VRBK</a></li>
<li><a href="#mounting_hooks">Mounting Hooks VABH-W / VCGH-S</a></li>
<li><a href="#aba_weldable">ABA Weldable Lifting Point</a></li>
<li><a href="#lbs_rs">LBS-RS Load Ring Welded Stainless Steel</a></li>
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
          <p>Tested lifting points: the complete range of weldable elements.</p>
          <!-- PowerPoint® WPP -->
          <div class="table-3">
            <table id="powerpoint_wpp" class="category-thumbs" style="width: 100%;" cellspacing="0" cellpadding="0">
              <thead>
                <tr>
                  <th colspan="3">PowerPoint&reg; WPP</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><a href="/rigging-hardware/powerpoint-wpp-s-universal-connection/"><img src="/wp-content/themes/unirope/img/product-images/rud/products/powerpoint-wpp-s-universal-connection.gif" alt="" /><br />
                    PowerPoint&reg; WPP-S<br>Universal Connection</a></td>
                  <td><a href="/rigging-hardware/powerpoint-wpp-b-ring-connection/"><img src="/wp-content/themes/unirope/img/product-images/rud/products/powerpoint-wpp-b-ring-connection.gif" alt="" /><br />
                    PowerPoint&reg; WPP-B<br>Ring Connection</a></td>
                  <td><a href="/rigging-hardware/powerpoint-wpp-vip-direct-vip-chain-connection/"><img src="/wp-content/themes/unirope/img/product-images/rud/products/powerpoint-wpp-vip-chain-connection.gif" alt="" /><br />
                    PowerPoint&reg; WPP-VIP<br>Direct VIP<br>Chain Connection</a></td>
                </tr>
              </tbody>
            </table>
          </div>
          
          <!-- PowerPoint® WPPH -->
          <div class="table-3">
            <table id="powerpoint_wpph" class="category-thumbs" style="width: 100%;" cellspacing="0" cellpadding="0">
              <thead>
                <tr>
                  <th colspan="3">PowerPoint&reg; WPPH</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><a href="/rigging-hardware/powerpoint-wpph-s-universal-connection/"><img src="/wp-content/themes/unirope/img/product-images/rud/products/powerpoint-wpph-s-universal-connection.gif" alt="" /><br />
                    PowerPoint&reg; WPPH-S<br>Universal Connection</a></td>
                  <td><a href="/rigging-hardware/powerpoint-wpph-b-ring-connection/"><img src="/wp-content/themes/unirope/img/product-images/rud/products/powerpoint-wpph-b-ring-connection.gif" alt="" /><br />
                    PowerPoint&reg; WPPH-B<br>Ring Connection</a></td>
                  <td><a href="/rigging-hardware/powerpoint-wpph-vip-direct-vip-chain-connection/"><img src="/wp-content/themes/unirope/img/product-images/rud/products/powerpoint-wpph-vip-chain-connection.gif" alt="" /><br />
                    PowerPoint&reg; WPPH-VIP<br>Direct VIP<br>Chain Connection</a></td>
                </tr>
              </tbody>
            </table>
          </div>
          
          <!-- Load Ring VLBS -->
          <div class="table-3">
            <table id="load_ring_vlbs" class="category-thumbs" style="width: 100%;" cellspacing="0" cellpadding="0">
              <thead>
                <tr>
                  <th colspan="3">Load Ring VLBS</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><a href="/rigging-hardware/vlbs-load-ring-welded/"><img src="/wp-content/themes/unirope/img/product-images/rud/products/vlbs-load-ring-welded.gif" alt="" /><br />
                    VLBS<br>Load Ring Welded</a></td>
                  <td><a href="/rigging-hardware/vlbs-ring/"><img src="/wp-content/themes/unirope/img/product-images/rud/products/vlbs-ring.gif" alt="" /><br />
                    VLBS<br>Ring</a></td>
                  <td><a href="/rigging-hardware/vlbs-welding-block/"><img src="/wp-content/themes/unirope/img/product-images/rud/products/vlbs-welding-block.gif" alt="" /><br />
                    VLBS<br>Welding Block</a></td>
                </tr>
              </tbody>
            </table>
          </div>
          
          <!-- Load Ring VRBS-FIX / VRBS -->
          <div class="table-4">
            <table id="load_ring_vrbs" class="category-thumbs" style="width: 100%;" cellspacing="0" cellpadding="0">
              <thead>
                <tr>
                  <th colspan="3">Load Ring VRBS-FIX / VRBS</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><a href="/rigging-hardware/vrbs-fix-load-ring-welded/"><img src="/wp-content/themes/unirope/img/product-images/rud/products/vrbs-fix-load-ring-welded.gif" alt="" /><br />
                    VRBS-FIX<br>Load Ring Welded</a></td>
                  <td><a href="/rigging-hardware/vrbs-load-ring-welded/"><img src="/wp-content/themes/unirope/img/product-images/rud/products/load-ring-wbg-v-wbg-metric-fine-thread.gif" alt="" /><br />
                    VRBS<br>Load Ring Welded</a></td>
                  <td><a href="/rigging-hardware/vrbs-ring/"><img src="/wp-content/themes/unirope/img/product-images/rud/products/vrbs-load-ring-welded.gif" alt="" /><br />
                    VRBS<br>Ring</a></td>
                    <td><a href="/rigging-hardware/vrbs-welding-block/"><img src="/wp-content/themes/unirope/img/product-images/rud/products/vrbs-welding-block.gif" alt="" /><br />
                    VRBS<br>Welding Block</a></td>
                </tr>
              </tbody>
            </table>
          </div>
          
          <!-- Load Ring VRBK -->
          <div class="table-2">
            <table id="load_ring_vrbk" class="category-thumbs" style="width: 100%;" cellspacing="0" cellpadding="0">
              <thead>
                <tr>
                  <th>Load Ring VRBK</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><a href="/rigging-hardware/vrbk-load-ring-welded-for-90-corners/"><img src="/wp-content/themes/unirope/img/product-images/rud/products/vrbk-load-ring-welded.gif" alt="" /><br />
                    VRBK<br>Load Ring Welded<br>for 90°-Corners</a></td>
                </tr>
              </tbody>
            </table>
          </div>
          
          <!-- Mounting Hooks VABH-W / VCGH-S -->
          <div class="table-2">
            <table id="mounting_hooks" class="category-thumbs" style="width: 100%;" cellspacing="0" cellpadding="0">
              <thead>
                <tr>
                  <th colspan="2">Mounting Hooks VABH-W / VCGH-S</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><a href="/rigging-hardware/vcgh-s-mounting-hook-ready-for-welding/"><img src="/wp-content/themes/unirope/img/product-images/rud/products/vcgh-s-mounting-hooks.gif" alt="" /><br />
                    VCGH-S<br>Mounting Hook,<br>Ready for Welding</a></td>
                  <td><a href="/rigging-hardware/vabh-w-mounting-hook-ready-for-welding/"><img src="/wp-content/themes/unirope/img/product-images/rud/products/vabh-w-mounting-hook2.gif" alt="" /><br />
                    VABH-W<br>Mounting Hook,<br>Ready for Welding</a></td>
                </tr>
              </tbody>
            </table>
          </div>
          
          <!-- ABA Weldable Lifting Point -->
          <div class="table-2">
            <table id="aba_weldable" class="category-thumbs" style="width: 100%;" cellspacing="0" cellpadding="0">
              <thead>
                <tr>
                  <th>ABA Weldable Lifting Point</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><a href="/rigging-hardware/aba-weldable-lifting-point/"><img src="/wp-content/themes/unirope/img/product-images/rud/products/aba-weldable-lifting-point.gif" alt="" /><br />
                    ABA Weldable Lifting Point</a></td>
                </tr>
              </tbody>
            </table>
          </div>
          
          <!-- LBS-RS Load Ring Welded Stainless Steel -->
          <div class="table-2">
            <table id="lbs_rs" class="category-thumbs" style="width: 100%;" cellspacing="0" cellpadding="0">
              <thead>
                <tr>
                  <th>LBS-RS Load Ring Welded Stainless Steel</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><a href="/rigging-hardware/lbs-rs-load-ring-welded-stainless-steel/"><img src="/wp-content/themes/unirope/img/product-images/rud/products/lbs-rs-load-ring-welded.gif" alt="" /><br />
                    LBS-RS Load Ring Welded Stainless Steel</a></td>
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

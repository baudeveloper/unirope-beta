<?php
/*
Single Post Template: Rud Products
*/
?>
<?php if (have_posts()) : while (have_posts()) : the_post();
	
	$pdfLink = (types_render_field("pdf-link", array('show_name' => 'false'))); 
	$productImage = (types_render_field("product-image", array('show_name' => 'false', 'class' => 'frame')));
	$productSchematic = (types_render_field("product-schematic", array('show_name' => 'false', 'class' => 'frame')));
	
?>

<div class="fancy-printable">
<h1 style="margin:20px 20px 0 20px;"><?php the_title(); ?></h1>
<div class="product-page">
<table class="rud" cellpadding="0" cellspacing="0" width="100%">
		<tbody>
			<!-- Product Description -->
			<tr>
				<td rowspan="3">
					<h4>Description</h4>
				  	<?php the_content(); ?>
				</td>
				<td>
					<?php if ($pdfLink != "") { ?>
  					<a class="btn small-icon" href="<?php echo $pdfLink ?>"><img src="/wp-content/themes/unirope/img/pdf-icon.png" width="28" height="28" alt="thumb"/> Product Information Sheet (PDF)</a>
  					<?php } ?>
				</td>
			</tr>
			<!-- Product Image with Drawing -->
			<tr>
				<td>
					<?php if ($productSchematic != "") { ?>
					<?php echo $productSchematic ?>
					<!-- <img src="/wp-content/themes/unirope/img/product-images/rud/products/powepoint_pp_s_metric_generic_image_drawing_lg.gif" /> -->
					<?php } ?>
				</td>
			</tr>
			<!-- Product Image in Use -->
			<tr>
				<td>
					<?php if ($productImage != "") { ?>
					<?php echo $productImage ?>
					<!-- <img src="/wp-content/themes/unirope/img/product-images/rud/products/powepoint_pp_s_metric_generic_example.jpg" /> -->
					<?php } ?>
				</td>
			</tr>
		</tbody>
	</table>
</div>
</div>
<?php endwhile; endif; ?>

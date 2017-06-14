<?php

	if (has_term('Wire Ropes', 'rope-type', $post->ID)) {
		if ($post->ID == 1744)  {
			include(TEMPLATEPATH . '/templates/en/single-craneropesoverview.php');
		} elseif ($post->ID == 4165) {
			include(TEMPLATEPATH . '/templates/en/single-craneropesoverview.php');
		} else {
			include(TEMPLATEPATH . '/templates/en/single-wireropes.php');
		}
	}
	elseif ('article' == get_post_type()) {
		include(TEMPLATEPATH . '/templates/en/single-news.php');
	}
	elseif (has_term( 'Python Ropes', 'rope-type', $post->ID )) {
		include(TEMPLATEPATH . '/templates/en/single-python-ropes.php');
	} elseif (has_term( 'Wire Rope End Attachments', 'rope-type', $post->ID )) {
		include(TEMPLATEPATH . '/templates/en/single-wireropeendattachments.php');
	} elseif (has_term( 'Fiber Ropes', 'rope-type', $post->ID)) {
		include(TEMPLATEPATH . '/templates/en/single-fiberropes.php');
	} elseif (has_term( 'Wire Rope Slings', 'sling-type', $post->ID)) {
		include(TEMPLATEPATH . '/templates/en/single-wireropeslings.php');
	} elseif (has_term( 'single-leg-grade-100', 'sling-type', $post->ID)) {
		include(TEMPLATEPATH . '/templates/en/single-singleleggrade100.php');
	} elseif (has_term( 'single-leg-grade-80', 'sling-type', $post->ID)) {
		include(TEMPLATEPATH . '/templates/en/single-singleleggrade80.php');
	} elseif (has_term( 'adjustable-single-leg-grade-100', 'sling-type', $post->ID)) {
		include(TEMPLATEPATH . '/templates/en/single-adjustablesingleleggrade100.php');
	} elseif (has_term( 'adjustable-single-leg-grade-80', 'sling-type', $post->ID)) {
		include(TEMPLATEPATH . '/templates/en/single-adjustablesingleleggrade80.php');
	} elseif (has_term( 'two-leg-grade-100', 'sling-type', $post->ID)) {
		include(TEMPLATEPATH . '/templates/en/single-twoleggrade100.php');
	} elseif (has_term( 'two-leg-grade-80', 'sling-type', $post->ID)) {
		include(TEMPLATEPATH . '/templates/en/single-twoleggrade80.php');
	} elseif (has_term( 'adjustable-two-leg-grade-100', 'sling-type', $post->ID)) {
		include(TEMPLATEPATH . '/templates/en/single-adjustabletwoleggrade100.php');
	} elseif (has_term( 'adjustable-two-leg-grade-80', 'sling-type', $post->ID)) {
		include(TEMPLATEPATH . '/templates/en/single-adjustabletwoleggrade80.php');
	} elseif (has_term( 'three-leg-grade-100', 'sling-type', $post->ID)) {
		include(TEMPLATEPATH . '/templates/en/single-threeleggrade100.php');
	} elseif (has_term( 'three-leg-grade-80', 'sling-type', $post->ID)) {
		include(TEMPLATEPATH . '/templates/en/single-threeleggrade80.php');
	} elseif (has_term( 'adjustable-three-leg-grade-100', 'sling-type', $post->ID)) {
		include(TEMPLATEPATH . '/templates/en/single-adjustablethreeleggrade100.php');
	} elseif (has_term( 'adjustable-three-leg-grade-80', 'sling-type', $post->ID)) {
		include(TEMPLATEPATH . '/templates/en/single-adjustablethreeleggrade80.php');
	} elseif (has_term( 'four-leg-grade-100', 'sling-type', $post->ID)) {
		include(TEMPLATEPATH . '/templates/en/single-fourleggrade100.php');
	} elseif (has_term( 'four-leg-grade-80', 'sling-type', $post->ID)) {
		include(TEMPLATEPATH . '/templates/en/single-fourleggrade80.php');
	} elseif (has_term( 'adjustable-four-leg-grade-100', 'sling-type', $post->ID)) {
		include(TEMPLATEPATH . '/templates/en/single-adjustablefourleggrade100.php');
	} elseif (has_term( 'adjustable-four-leg-grade-80', 'sling-type', $post->ID)) {
		include(TEMPLATEPATH . '/templates/en/single-adjustablefourleggrade80.php');
	} elseif (has_term( 'chain-wire-mesh-slings', 'sling-type', $post->ID)) {
		include(TEMPLATEPATH . '/templates/en/single-chainwiremeshslings.php');
	} elseif (has_term( 'grade-80-chain-sling-types', 'sling-type', $post->ID)) {
		include(TEMPLATEPATH . '/templates/en/single-grade-80-chain-sling-types.php');
	} elseif (has_term( 'rings-and-links', 'sling-type', $post->ID)) {
		include(TEMPLATEPATH . '/templates/en/single-rings-and-links.php');
	} elseif (has_term( 'couplers-threaded-shanks-and-tie-down-rings', 'sling-type', $post->ID)) {
		include(TEMPLATEPATH . '/templates/en/single-couplers-threaded-shanks-and-tie-down-rings.php');
	} elseif (has_term( 'hooks', 'sling-type', $post->ID)) {
		include(TEMPLATEPATH . '/templates/en/single-hooks.php');
	} elseif (has_term( 'spare-parts-for-hooks', 'sling-type', $post->ID)) {
		include(TEMPLATEPATH . '/templates/en/single-spare-parts-for-hooks.php');
	} elseif (has_term( 'chain-shorteners', 'sling-type', $post->ID)) {
		include(TEMPLATEPATH . '/templates/en/single-chain-shorteners.php');
	} elseif (has_term( 'twin-path-and-synthetic-lifting-slings', 'sling-type', $post->ID)) {
		include(TEMPLATEPATH . '/templates/en/single-syntheticslings.php');
	} elseif (has_term( 'Technical Information', 'category', $post->ID )) {
		include(TEMPLATEPATH . '/templates/en/single-wr-special.php');
	} elseif (has_term( 'inspection-criteria-and-sling-properties', 'sling-type', $post->ID)) {
		include(TEMPLATEPATH . '/templates/en/single-inspection-criteria-and-sling-properties.php');
	} elseif (has_term( 'wear-pads-inspection-criteria-and-sling-properties', 'sling-type', $post->ID)) {
		include(TEMPLATEPATH . '/templates/en/single-wearpads-inspection.php');
	} elseif (has_term( 'twin-path-lifting-slings', 'sling-type', $post->ID)) {
		include(TEMPLATEPATH . '/templates/en/single-twin-path-lifting-slings.php');
	} elseif (has_term( 'uni-path-round-slings', 'sling-type', $post->ID)) {
		include(TEMPLATEPATH . '/templates/en/single-uni-path-round-slings.php');
	} elseif (has_term( 'uni-web-nylon-slings', 'sling-type', $post->ID)) {
		include(TEMPLATEPATH . '/templates/en/single-uni-web-nylon-slings.php');
	} elseif (has_term( 'uni-web-polyester-slings', 'sling-type', $post->ID)) {
		include(TEMPLATEPATH . '/templates/en/single-uni-web-polyester-slings.php');
	} elseif (has_term( 'boat-lifting-slings', 'sling-type', $post->ID)) {
		include(TEMPLATEPATH . '/templates/en/single-boat-lifting-slings.php');
	} elseif (has_term( 'wear-pads', 'sling-type', $post->ID)) {
		include(TEMPLATEPATH . '/templates/en/single-wear-pads.php');
	} elseif (has_term( 'synthetic-sling-hardware', 'sling-type', $post->ID)) {
		include(TEMPLATEPATH . '/templates/en/single-syntheticsling-hardware.php');
	} elseif (has_term( 'Lifting Points for Bolting', 'rigging-hardware-type', $post->ID)) {
		include(TEMPLATEPATH . '/templates/en/single-rud-lifting-points-bolting.php');
	} elseif (has_term( 'Lifting Points for Welding', 'rigging-hardware-type', $post->ID)) {
		include(TEMPLATEPATH . '/templates/en/single-rud-lifting-points-welding.php');
	} elseif (has_term( 'fall-protection-anchorage-points', 'rigging-hardware-type', $post->ID)) {
		include(TEMPLATEPATH . '/templates/en/single-rud-fall-protection.php');
	} elseif (has_term( 'shackles-hooks', 'rigging-hardware-type', $post->ID)) {
		include(TEMPLATEPATH . '/templates/en/single-shackles-hooks.php');
	} elseif (has_term( 'alloy-high-capacity-shackles', 'rigging-hardware-type', $post->ID)) {
		include(TEMPLATEPATH . '/templates/en/single-alloy-high-capacity-shackles.php');
	} elseif (has_term( 'alloy-wide-body-shackles', 'rigging-hardware-type', $post->ID)) {
		include(TEMPLATEPATH . '/templates/en/single-alloy-wide-body-shackles.php');
	} elseif (has_term( 'rigging-turnbuckles', 'rigging-hardware-type', $post->ID)) {
		include(TEMPLATEPATH . '/templates/en/single-rigging-turnbuckles.php');
	} elseif (has_term( 'thimbles-corner-protectors', 'rigging-hardware-type', $post->ID)) {
		include(TEMPLATEPATH . '/templates/en/single-thimbles-corner-protectors.php');
	} elseif (has_term( 'cable-clips', 'rigging-hardware-type', $post->ID)) {
		include(TEMPLATEPATH . '/templates/en/single-cable-clips.php');
	} elseif (has_term( 'load-positioning-swivels', 'rigging-hardware-type', $post->ID)) {
		include(TEMPLATEPATH . '/templates/en/single-load-positioning-swivels.php');
	} elseif (has_term( 'eye-bolts-and-hoist-rings', 'rigging-hardware-type', $post->ID)) {
		include(TEMPLATEPATH . '/templates/en/single-eye-bolts-and-hoist-rings.php');
	} elseif (has_term( 'rope-cutters-and-hand-swagers', 'rigging-hardware-type', $post->ID)) {
		include(TEMPLATEPATH . '/templates/en/single-rope-cutters-and-hand-swagers.php');
	} elseif (has_term( 'load-securement', 'rigging-hardware-type', $post->ID)) {
		include(TEMPLATEPATH . '/templates/en/single-load-securement.php');
	} elseif (has_term( 'girder-clamps-and-trolleys', 'below-the-hook-type', $post->ID)) {
		include(TEMPLATEPATH . '/templates/en/single-girder-clamps.php');
	} elseif (has_term( 'hoist-and-pullers', 'below-the-hook-type', $post->ID)) {
		include(TEMPLATEPATH . '/templates/en/single-hoist-and-pullers.php');
	} elseif (has_term( 'lever-hoists', 'below-the-hook-type', $post->ID)) {
		include(TEMPLATEPATH . '/templates/en/single-lever-hoists.php');
	} elseif (has_term( 'chain-hoists', 'below-the-hook-type', $post->ID)) {
		include(TEMPLATEPATH . '/templates/en/single-chain-hoists.php');
	} elseif (has_term( 'utility-specific-products', 'rigging-hardware-type', $post->ID)) {
		include(TEMPLATEPATH . '/templates/en/single-utility-specific-products.php');
	} elseif (has_term( 'load-release-systems', 'below-the-hook-type', $post->ID)) {
		include(TEMPLATEPATH . '/templates/single-load-release-systems.php');
	} elseif (has_term( 'beam-clamps', 'below-the-hook-type', $post->ID)) {
		include(TEMPLATEPATH . '/templates/en/single-beam-clamps.php');
	} elseif (has_term( 'beam-trolleys', 'below-the-hook-type', $post->ID)) {
		include(TEMPLATEPATH . '/templates/en/single-beam-trolleys.php');
	} elseif (has_term( 'clamps-and-magnets', 'below-the-hook-type', $post->ID)) {
		include(TEMPLATEPATH . '/templates/single-clamps-magnets.php');
	} elseif (has_term( 'clamps', 'below-the-hook-type', $post->ID)) {
		include(TEMPLATEPATH . '/templates/en/single-clamps.php');
	} elseif (has_term( 'magnets', 'below-the-hook-type', $post->ID)) {
		include(TEMPLATEPATH . '/templates/en/single-magnets.php');
	} elseif (has_term( 'magnets-for-lifting-moving-and-transferring', 'below-the-hook-type', $post->ID)) {
		include(TEMPLATEPATH . '/templates/en/single-magnets-for-lifting-moving-and-transferring.php');
	} elseif (has_term( 'clamps-overview', 'below-the-hook-type', $post->ID)) {
		include(TEMPLATEPATH . '/templates/en/single-clamps-overview.php');
	} elseif (has_term( 'magnets-overview', 'below-the-hook-type', $post->ID)) {
		include(TEMPLATEPATH . '/templates/en/single-magnets-overview.php');
	} elseif (has_term( 'load-monitoring-systems', 'below-the-hook-type', $post->ID)) {
		include(TEMPLATEPATH . '/templates/single-load-monitoring-systems.php');
	}  elseif (has_term( 'below-the-hook', 'below-the-hook-type', $post->ID)
		    || has_term( 'strong-bac', 'below-the-hook-type', $post->ID)
		    || has_term( 'mill-duty', 'below-the-hook-type', $post->ID)
		    || has_term( 'rig-master', 'below-the-hook-type', $post->ID)) {
		include(TEMPLATEPATH . '/templates/single-below-the-hook.php');
	} else {
		include(TEMPLATEPATH . '/templates/en/single-default.php');
	}
?>

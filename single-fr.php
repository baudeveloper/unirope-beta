<?php

	if (has_term( 'wire-rope-fr', 'rope-type', $post->ID)) {
		include(TEMPLATEPATH . '/templates/fr/single-wireropes-fr.php');
	} elseif ('article' == get_post_type()) {
		include(TEMPLATEPATH . '/templates/fr/single-news.php');
	} elseif (has_term( 'python-ropes-fr', 'rope-type', $post->ID )) {
		include(TEMPLATEPATH . '/templates/fr/single-python-ropes.php');
	} elseif (has_term( 'wire-rope-slings-fr', 'sling-type', $post->ID)) {
		include(TEMPLATEPATH . '/templates/fr/slings/single-wireropeslings.php');
	} elseif (has_term( 'wire-rope-end-attachments-fr', 'rope-type', $post->ID )) {
		include(TEMPLATEPATH . '/templates/fr/single-wireropeendattachments.php');
	} elseif (has_term( 'Technical Information', 'category', $post->ID )) {
		include(TEMPLATEPATH . '/templates/fr/single-wr-special.php');
	} elseif (has_term( 'Fiber Ropes', 'rope-type', $post->ID)) {
		include(TEMPLATEPATH . '/templates/fr/single-fiberropes.php');

	// French Grade 100/80 Products Starts here.
	} elseif (has_term( 'single-leg-grade-100-fr', 'sling-type', $post->ID)) {
		include(TEMPLATEPATH . '/templates/fr/single-singleleggrade100.php');
	} elseif (has_term( 'single-leg-grade-80-fr', 'sling-type', $post->ID)) {
		include(TEMPLATEPATH . '/templates/fr/single-singleleggrade80.php');
	} elseif (has_term( 'adjustable-single-leg-grade-100-fr', 'sling-type', $post->ID)) {
		include(TEMPLATEPATH . '/templates/fr/single-adjustablesingleleggrade100.php');
	} elseif (has_term( 'adjustable-single-leg-grade-80-fr', 'sling-type', $post->ID)) {
		include(TEMPLATEPATH . '/templates/fr/single-adjustablesingleleggrade80.php');
	} elseif (has_term( 'two-leg-grade-100-fr', 'sling-type', $post->ID)) {
		include(TEMPLATEPATH . '/templates/fr/single-twoleggrade100.php');
	} elseif (has_term( 'two-leg-grade-80-fr', 'sling-type', $post->ID)) {
		include(TEMPLATEPATH . '/templates/fr/single-twoleggrade80.php');
	} elseif (has_term( 'adjustable-two-leg-grade-100-fr', 'sling-type', $post->ID)) {
		include(TEMPLATEPATH . '/templates/fr/single-adjustabletwoleggrade100.php');
	} elseif (has_term( 'adjustable-two-leg-grade-80-fr', 'sling-type', $post->ID)) {
		include(TEMPLATEPATH . '/templates/fr/single-adjustabletwoleggrade80.php');
	} elseif (has_term( 'three-leg-grade-100-fr', 'sling-type', $post->ID)) {
		include(TEMPLATEPATH . '/templates/fr/single-threeleggrade100.php');
	} elseif (has_term( 'three-leg-grade-80-fr', 'sling-type', $post->ID)) {
		include(TEMPLATEPATH . '/templates/fr/single-threeleggrade80.php');
	} elseif (has_term( 'adjustable-three-leg-grade-100-fr', 'sling-type', $post->ID)) {
		include(TEMPLATEPATH . '/templates/fr/single-adjustablethreeleggrade100.php');
	} elseif (has_term( 'adjustable-three-leg-grade-80-fr', 'sling-type', $post->ID)) {
		include(TEMPLATEPATH . '/templates/fr/single-adjustablethreeleggrade80.php');
	} elseif (has_term( 'four-leg-grade-100-fr', 'sling-type', $post->ID)) {
		include(TEMPLATEPATH . '/templates/fr/single-fourleggrade100.php');
	} elseif (has_term( 'four-leg-grade-80-fr', 'sling-type', $post->ID)) {
		include(TEMPLATEPATH . '/templates/fr/single-fourleggrade80.php');
	} elseif (has_term( 'adjustable-four-leg-grade-100-fr', 'sling-type', $post->ID)) {
		include(TEMPLATEPATH . '/templates/fr/single-adjustablefourleggrade100.php');
	} elseif (has_term( 'adjustable-four-leg-grade-80-fr', 'sling-type', $post->ID)) {
		include(TEMPLATEPATH . '/templates/fr/single-adjustablefourleggrade80.php');
	// French Grade 100/80 Products Ends here.

	} elseif (has_term( 'chain-wire-mesh-slings-fr', 'sling-type', $post->ID)) {
		include(TEMPLATEPATH . '/templates/fr/slings/single-chainwiremeshslings.php');
	} elseif (has_term( 'grade-80-chain-sling-types-fr', 'sling-type', $post->ID)) {
		include(TEMPLATEPATH . '/templates/fr/slings/single-grade-80-chain-sling-types.php');
	} elseif (has_term( 'rings-and-links-fr', 'sling-type', $post->ID)) {
		include(TEMPLATEPATH . '/templates/fr/slings/single-rings-and-links.php');
	} elseif (has_term( 'couplers-threaded-shanks-and-tie-down-rings-fr', 'sling-type', $post->ID)) {
		include(TEMPLATEPATH . '/templates/fr/slings/single-couplers-threaded-shanks-and-tie-down-rings.php');
	} elseif (has_term( 'hooks-fr', 'sling-type', $post->ID)) {
		include(TEMPLATEPATH . '/templates/fr/slings/single-hooks.php');
	} elseif (has_term( 'spare-parts-for-hooks-fr', 'sling-type', $post->ID)) {
		include(TEMPLATEPATH . '/templates/fr/slings/single-spare-parts-for-hooks.php');
	} elseif (has_term( 'chain-shorteners-fr', 'sling-type', $post->ID)) {
		include(TEMPLATEPATH . '/templates/fr/slings/single-chain-shorteners.php');
	} elseif (has_term( 'twin-path-and-synthetic-lifting-slings-fr', 'sling-type', $post->ID)) {
		include(TEMPLATEPATH . '/templates/fr/slings/single-syntheticslings.php');
	} elseif (has_term( 'inspection-criteria-and-sling-properties-fr', 'sling-type', $post->ID)) {
		include(TEMPLATEPATH . '/templates/fr/slings/single-inspection-criteria-and-sling-properties.php');
	} elseif (has_term( 'wear-pads-inspection-criteria-and-sling-properties-fr', 'sling-type', $post->ID)) {
		include(TEMPLATEPATH . '/templates/fr/slings/single-wearpads-inspection.php');
	} elseif (has_term( 'twin-path-lifting-slings-fr', 'sling-type', $post->ID)) {
		include(TEMPLATEPATH . '/templates/fr/slings/single-twin-path-lifting-slings.php');
	} elseif (has_term( 'uni-path-round-slings-fr', 'sling-type', $post->ID)) {
		include(TEMPLATEPATH . '/templates/fr/slings/single-uni-path-round-slings.php');
	} elseif (has_term( 'uni-web-nylon-slings-fr', 'sling-type', $post->ID)) {
		include(TEMPLATEPATH . '/templates/fr/slings/single-uni-web-nylon-slings.php');
	} elseif (has_term( 'uni-web-polyester-slings-fr2', 'sling-type', $post->ID)) {
		include(TEMPLATEPATH . '/templates/fr/slings/single-uni-web-polyester-slings.php');
	} elseif (has_term( 'boat-lifting-slings-fr', 'sling-type', $post->ID)) {
		include(TEMPLATEPATH . '/templates/fr/slings/single-boat-lifting-slings.php');
	} elseif (has_term( 'wear-pads-fr', 'sling-type', $post->ID)) {
		include(TEMPLATEPATH . '/templates/fr/slings/single-wear-pads.php');
	} elseif (has_term( 'synthetic-sling-hardware-fr', 'sling-type', $post->ID)) {
		include(TEMPLATEPATH . '/templates/fr/slings/single-syntheticsling-hardware.php');
	} elseif (has_term( 'shackles-hooks-fr', 'rigging-hardware-type', $post->ID)) {
		include(TEMPLATEPATH . '/templates/fr/shackles-hooks/single-shackles-hooks.php');
	} elseif (has_term( 'alloy-high-capacity-shackles-fr', 'rigging-hardware-type', $post->ID)) {
		include(TEMPLATEPATH . '/templates/fr/single-alloy-high-capacity-shackles.php');
	} elseif (has_term( 'alloy-wide-body-shackles-fr', 'rigging-hardware-type', $post->ID)) {
		include(TEMPLATEPATH . '/templates/fr/single-alloy-wide-body-shackles.php');
	} elseif (has_term( 'girder-clamps-and-trolleys-fr', 'below-the-hook-type', $post->ID)) {
		include(TEMPLATEPATH . '/templates/fr/single-girder-clamps.php');
	} elseif (has_term( 'hoist-and-pullers-fr', 'below-the-hook-type', $post->ID)) {
		include(TEMPLATEPATH . '/templates/fr/single-hoist-and-pullers.php');
	} elseif (has_term( 'lever-hoists-fr', 'below-the-hook-type', $post->ID)) {
		include(TEMPLATEPATH . '/templates/fr/single-lever-hoists.php');
	} elseif (has_term( 'chain-hoists-fr', 'below-the-hook-type', $post->ID)) {
		include(TEMPLATEPATH . '/templates/fr/single-chain-hoists.php');
	} elseif (has_term( 'rigging-turnbuckles-fr', 'rigging-hardware-type', $post->ID)) {
		include(TEMPLATEPATH . '/templates/fr/single-rigging-turnbuckles.php');
	} elseif (has_term( 'cable-clips-fr', 'rigging-hardware-type', $post->ID)) {
		include(TEMPLATEPATH . '/templates/fr/single-cable-clips-fr.php');
	} elseif (has_term( 'load-positioning-swivels-fr', 'rigging-hardware-type', $post->ID)) {
		include(TEMPLATEPATH . '/templates/fr/single-load-positioning-swivels-fr.php');
	} elseif (has_term( 'eye-bolts-hoist-rings-fr', 'rigging-hardware-type', $post->ID)) {
		include(TEMPLATEPATH . '/templates/fr/single-eye-bolts-and-hoist-rings-fr.php');
	} elseif (has_term( 'beam-clamps-fr', 'below-the-hook-type', $post->ID)) {
		include(TEMPLATEPATH . '/templates/fr/single-beam-clamps.php');
	} elseif (has_term( 'beam-trolleys-fr', 'below-the-hook-type', $post->ID)) {
		include(TEMPLATEPATH . '/templates/fr/single-beam-trolleys.php');
	} elseif (has_term( 'load-securement-fr', 'rigging-hardware-type', $post->ID)) {
		include(TEMPLATEPATH . '/templates/fr/single-load-securement.php');
	} elseif (has_term( 'utility-specific-products-fr', 'rigging-hardware-type', $post->ID)) {
		include(TEMPLATEPATH . '/templates/fr/single-utility-specific-products.php');
	} elseif (has_term( 'thimbles-corner-protectors-fr', 'rigging-hardware-type', $post->ID)) {
		include(TEMPLATEPATH . '/templates/fr/single-thimbles-corner-protectors.php');
	} elseif (has_term( 'rope-cutters-and-hand-swagers-fr', 'rigging-hardware-type', $post->ID)) {
		include(TEMPLATEPATH . '/templates/fr/single-rope-cutters-and-hand-swagers.php');
	} elseif (has_term( 'fall-protection-anchorage-points-fr', 'rigging-hardware-type', $post->ID)) {
		include(TEMPLATEPATH . '/templates/fr/single-rud-fall-protection.php');
	} elseif (has_term( 'Lifting Points for Welding', 'rigging-hardware-type', $post->ID)) {
		include(TEMPLATEPATH . '/templates/fr/single-rud-lifting-points-welding.php');
	} elseif (has_term( 'Lifting Points for Bolting', 'rigging-hardware-type', $post->ID)) {
		include(TEMPLATEPATH . '/templates/fr/single-rud-lifting-points-bolting.php');
	} elseif (has_term( 'manilles-et-crochet', 'rigging-hardware-type', $post->ID)) {
		include(TEMPLATEPATH . '/templates/fr/single-shackles-hooks.php');
	} elseif (has_term( 'clamps-and-magnets-fr', 'below-the-hook-type', $post->ID)) {
		include(TEMPLATEPATH . '/templates/fr/single-clamps-magnets.php');
	} elseif (has_term( 'clamps-fr', 'below-the-hook-type', $post->ID)) {
		include(TEMPLATEPATH . '/templates/fr/single-clamps.php');
	} elseif (has_term( 'magnets-fr', 'below-the-hook-type', $post->ID)) {
		include(TEMPLATEPATH . '/templates/fr/single-magnets.php');
	} elseif (has_term( 'magnets-for-lifting-moving-and-transferring-fr', 'below-the-hook-type', $post->ID)) {
		include(TEMPLATEPATH . '/templates/fr/single-magnets-for-lifting-moving-and-transferring.php');
	} elseif (has_term( 'clamps-overview-fr', 'below-the-hook-type', $post->ID)) {
		include(TEMPLATEPATH . '/templates/fr/single-clamps-overview.php');
	} elseif (has_term( 'magnets-overview-fr', 'below-the-hook-type', $post->ID)) {
		include(TEMPLATEPATH . '/templates/fr/single-magnets-overview.php');
	} elseif (has_term( 'load-monitoring-systems-fr', 'below-the-hook-type', $post->ID)) {
		include(TEMPLATEPATH . '/templates/fr/single-load-monitoring-systems.php');
	} elseif (has_term( 'load-release-systems-fr', 'below-the-hook-type', $post->ID)) {
		include(TEMPLATEPATH . '/templates/fr/single-load-release-systems.php');
	}  elseif (has_term( 'below-the-hook-fr', 'below-the-hook-type', $post->ID)
		    || has_term( 'strong-bac-fr', 'below-the-hook-type', $post->ID)
		    || has_term( 'mill-duty-fr', 'below-the-hook-type', $post->ID)
		    || has_term( 'rig-master-fr', 'below-the-hook-type', $post->ID)) {
		include(TEMPLATEPATH . '/templates/fr/single-below-the-hook.php');
	} else {
		include(TEMPLATEPATH . '/templates/en/single-default.php');
	}

?>

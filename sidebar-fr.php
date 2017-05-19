<?php

    /* About Us Sidebar */
    if (is_page(array('a-propos-de-nous')) || is_child('a-propos-de-nous', $post->ID)) {
      	include(TEMPLATEPATH . '/sidebar-templates/fr/sidebar-about-us.php');

    /* Test Beds Sidebar */
 	} elseif (is_page(array('banc-dessai')) || is_child('banc-dessai', $post->ID)) {
      	include(TEMPLATEPATH . '/sidebar-templates/fr/sidebar-test-beds.php');

    /* Inspection Testing Sidebar */
 	} elseif (is_page(array('services-et-test')) || is_child('services-et-test', $post->ID)) {
      	include(TEMPLATEPATH . '/sidebar-templates/fr/sidebar-inspection-testing.php');

    /* Products in Use Lifting Solutions Sidebar */
 	} elseif (is_page(array('lifting-solutions-sorted-by-industries')) || is_child('lifting-solutions-sorted-by-industries', $post->ID)) {
      	include(TEMPLATEPATH . '/sidebar-templates/fr/sidebar-pui-lifting-solutions.php');

    /* Products in Use Lifting Stories Sidebar */
 	} elseif (is_page(array('lifting-stories-and-background-information')) || is_child('lifting-stories-and-background-information', $post->ID)) {
      	include(TEMPLATEPATH . '/sidebar-templates/fr/sidebar-pui-lifting-stories.php');

	/* Wire Rope French Sidebar */
 	} elseif (is_page(array('cable-dacier','information-technique','selection-de-cables-dacier')) || has_term(array('wire-rope-fr'), 'rope-type', $post->ID)) {
      	include(TEMPLATEPATH . '/sidebar-templates/sidebar-wire-ropes.php');

    /* Technical Literature */
    } elseif (is_page(array('litterature-technique','bulletin-technique','videos','certificats'))) {
      	include(TEMPLATEPATH . '/sidebar-templates/fr/sidebar-technical-literature.php');

    /* Technical Information French Sidebar */
    } elseif (has_term( 'technical-information', 'category', $post->ID )) {
      	include(TEMPLATEPATH . '/sidebar-templates/sidebar-wr-tech-info.php');

      	/* Pyhton Ropes Sidebar */
	} elseif (has_term( 'python-ropes-fr', 'rope-type', $post->ID)) {
      	include(TEMPLATEPATH . '/sidebar-templates/sidebar-python-ropes.php');

    /* Wire Rope Slings Sidebar */
	} elseif (is_page(array('elingues-en-cable-metallique','rigging-guidelines','sling-removal-criteria','the-flexibility-of-slings',7050,7051,7061,7052, 7053,7054,7055,7056,7057,7058,7059,7060,7062,11246,11323)) || has_term( 'wire-rope-slings-fr', 'sling-type', $post->ID)) {
        include(TEMPLATEPATH . '/sidebar-templates/sidebar-wire-rope-slings.php');

		/* Alloy High Capacity Shackles Sub Menu Sidebar */
	} elseif (has_term('alloy-high-capacity-shackles-fr', 'rigging-hardware-type', $post->ID)) {
				include(TEMPLATEPATH . '/sidebar-templates/fr/sidebar-alloy-high-capacity-shackles-submenu.php');

		/* Alloy Wide Body Shackles Sub Menu Sidebar */
	} elseif (has_term('alloy-wide-body-shackles-fr', 'rigging-hardware-type', $post->ID)) {
				include(TEMPLATEPATH . '/sidebar-templates/fr/sidebar-alloy-wide-body-shackles-submenu.php');

		/* Links and Rings Sidebar */
	} elseif (is_page(array(11355,11358,11361,11364,11366,11368,11370))) {
					include(TEMPLATEPATH . '/sidebar-templates/fr/sidebar-links-and-rings-submenu.php');

		/* Hoists & Pullers Sidebar */
	} elseif (is_page(array(11816))) {
					include(TEMPLATEPATH . '/sidebar-templates/sidebar-hoists-pullers.php');

			/* Lever Hoists Sidebar */
		} elseif (is_page(array(11816))) {
						include(TEMPLATEPATH . '/sidebar-templates/sidebar-lever-hoists.php');
					
		/* Wire Rope Slings Sidebar */	
		} elseif (is_page(array(11916))) {
			include(TEMPLATEPATH . '/sidebar-templates/sidebar-wire-rope-slings.php');

			/* Chain Hoists Sidebar */
		} elseif (is_page(array(11816))) {
						include(TEMPLATEPATH . '/sidebar-templates/sidebar-chain-hoists.php');

    /* Chain & Wire Mesh Slings Sidebar */
    } elseif (is_page(array('elingues-de-chaine',7100)) || has_term( array('chain-wire-mesh-slings-fr', 'single-leg-grade-100-fr','single-leg-grade-80-fr','adjustable-single-leg-grade-100-fr','adjustable-single-leg-grade-80-fr', 'two-leg-grade-100-fr','two-leg-grade-80-fr','adjustable-two-leg-grade-100-fr','adjustable-two-leg-grade-80-fr', 'three-leg-grade-100-fr','three-leg-grade-80-fr','adjustable-three-leg-grade-100-fr','adjustable-three-leg-grade-80-fr', 'four-leg-grade-100-fr','four-leg-grade-80-fr','adjustable-four-leg-grade-100-fr','adjustable-four-leg-grade-80-fr','grade-80-chain-sling-types-fr','rings-and-links-fr','couplers-threaded-shanks-and-tie-down-rings-fr','hooks-fr','spare-parts-for-hooks-fr','chain-shorteners-fr'), 'sling-type', $post->ID)) {
        include(TEMPLATEPATH . '/sidebar-templates/sidebar-chain-wire-mesh-slings.php');

    /* Twin-Path® And Synthetic Lifting Slings Sidebar */
    } elseif (is_page(array('elingues-de-levage-twin-path-et-elingues-de-levage-synthetiques',7148)) || (is_single('3507')) || has_term( array('twin-path-and-synthetic-lifting-slings-fr','uni-path-round-slings-fr','uni-web-nylon-slings-fr','uni-web-polyester-slings-fr','boat-lifting-slings-fr','wear-pads-fr','synthetic-sling-hardware-fr','twin-path-lifting-slings-fr'), 'sling-type', $post->ID)) {
        include(TEMPLATEPATH . '/sidebar-templates/sidebar-syntheticslings.php');

    /* Sling Inspection */
    } elseif (has_term('inspection-criteria-and-sling-properties-fr', 'sling-type', $post->ID)) {
        include(TEMPLATEPATH . '/sidebar-templates/sidebar-sling-inspection.php');

     /* Wire Rope End-Attachments Sidebar */
	} elseif (is_page(array('wire-rope-end-attachments', 2048, 2050, 2052, 2054, 2056  )) || has_term( 'wire-rope-end-attachments-fr', 'rope-type', $post->ID )) {
      	include(TEMPLATEPATH . '/sidebar-templates/sidebar-wire-rope-end-attachments.php');

      /* Below the Hooks Page Sidebar */
    } elseif (is_page('below-the-hook') || has_term( 'Below the Hook', 'below-the-hook-type', $post->ID )) {
        include(TEMPLATEPATH . '/sidebar-templates/fr/sidebar-below-the-hook.php');

		/* 0. Girder Clamps and Trolleys Page Sidebar */
	} elseif (
			is_page('girder-clamps-and-trolleys') ||
			is_child('girder-clamps-and-trolleys', $post->ID) ||
			(has_term( 'Girder Clamps and Trolleys', 'below-the-hook-type', $post->ID ) &&
			!has_term(array('Beam Trolleys', 'Beam Clamps'), 'below-the-hook-type', $post->ID))
		) {
			include(TEMPLATEPATH . '/sidebar-templates/sidebar-girder-clamps.php');

			/* Girder Clamps and Trolleys - Beam Clamps Sidebar */
      } elseif (has_term('Beam Clamps', 'below-the-hook-type', $post->ID)) {
          include(TEMPLATEPATH . '/sidebar-templates/sidebar-beam-clamps.php');

			/* Girder Clamps and Trolleys - Beam Trolleys Sidebar */
      } elseif (has_term('Beam Trolleys', 'below-the-hook-type', $post->ID)) {
          include(TEMPLATEPATH . '/sidebar-templates/sidebar-beam-trolleys.php');

    /* 1. Strong Bac Page Sidebar */
    } elseif (is_page('strong-bac') || is_child('strong-bac', $post->ID) || ( has_term( 'Strong Bac', 'below-the-hook-type', $post->ID ) && !has_term(array('Coil Lifters', 'Dura-Lite™ Composite Products', 'Lifting Beams (Strong Bac)', 'Lifting Tongs', 'Material Handling', 'Pallet Lifters', 'Roll Lifters', 'Sheet Lifters', 'Spreader Beams'), 'below-the-hook-type', $post->ID)) ) {
        include(TEMPLATEPATH . '/sidebar-templates/fr/sidebar-strong-bac.php');

      /* Strong Bac - Coil Lifters Sidebar */
      } elseif (has_term('Coil Lifters', 'below-the-hook-type', $post->ID)) {
          include(TEMPLATEPATH . '/sidebar-templates/fr/sidebar-coil-lifters.php');

      /* Strong Bac - Dura-Lite™ Composite Products Sidebar */
      } elseif (has_term('Dura-Lite™ Composite Products', 'below-the-hook-type', $post->ID)) {
          include(TEMPLATEPATH . '/sidebar-templates/fr/sidebar-duralite-composite-products.php');

      /* Strong Bac - Lifting Beams (Strong Bac) Sidebar */
      } elseif (has_term('Lifting Beams (Strong Bac)', 'below-the-hook-type', $post->ID)) {
          include(TEMPLATEPATH . '/sidebar-templates/fr/sidebar-lifting-beams-strong-bac.php');

      /* Strong Bac - Lifting Tongs Sidebar */
      } elseif (has_term('Lifting Tongs', 'below-the-hook-type', $post->ID)) {
          include(TEMPLATEPATH . '/sidebar-templates/fr/sidebar-lifting-tongs.php');

      /* Strong Bac - Material Handling Sidebar */
      } elseif (has_term('Material Handling', 'below-the-hook-type', $post->ID)) {
          include(TEMPLATEPATH . '/sidebar-templates/fr/sidebar-material-handling.php');

      /* Strong Bac - Pallet Lifters Sidebar */
      } elseif (has_term('Pallet Lifters', 'below-the-hook-type', $post->ID)) {
          include(TEMPLATEPATH . '/sidebar-templates/fr/sidebar-pallet-lifters.php');

      /* Strong Bac - Roll Lifters Sidebar */
      } elseif (has_term('Roll Lifters', 'below-the-hook-type', $post->ID)) {
          include(TEMPLATEPATH . '/sidebar-templates/fr/sidebar-roll-lifters.php');

      /* Strong Bac - Sheet Lifters Sidebar */
      } elseif (has_term('Sheet Lifters', 'below-the-hook-type', $post->ID)) {
          include(TEMPLATEPATH . '/sidebar-templates/fr/sidebar-sheet-lifters.php');

      /* Strong Bac - Spreader Beams Sidebar */
      } elseif (has_term('Spreader Beams', 'below-the-hook-type', $post->ID)) {
          include(TEMPLATEPATH . '/sidebar-templates/fr/sidebar-spreader-beams.php');

    /* 2. Mill Duty Page Sidebar */
    } elseif (is_page('mill-duty') || is_child('mill-duty', $post->ID) || ( has_term( 'Mill Duty', 'below-the-hook-type', $post->ID ) && !has_term(array('Coil Handling', 'Ingot and Slab Handling', 'Lifting Beams (Mill Duty)', 'Sheet and Plate Handling'), 'below-the-hook-type', $post->ID)) ) {
        include(TEMPLATEPATH . '/sidebar-templates/fr/sidebar-mill-duty.php');

      /* Mill Duty - Coil Handling Sidebar */
      } elseif (has_term('Coil Handling', 'below-the-hook-type', $post->ID)) {
          include(TEMPLATEPATH . '/sidebar-templates/fr/sidebar-coil-handling.php');

      /* Mill Duty - Ingot and Slab Handling Sidebar */
      } elseif (has_term('Ingot and Slab Handling', 'below-the-hook-type', $post->ID)) {
          include(TEMPLATEPATH . '/sidebar-templates/fr/sidebar-ingot-slab-handling.php');

      /* Mill Duty - Lifting Beams Sidebar */
      } elseif (has_term('Lifting Beams (Mill Duty)', 'below-the-hook-type', $post->ID)) {
          include(TEMPLATEPATH . '/sidebar-templates/fr/sidebar-lifting-beams-mill-duty.php');

      /* Mill Duty - Sheet and Plate Handling Sidebar */
      } elseif (has_term('Sheet and Plate Handling', 'below-the-hook-type', $post->ID)) {
          include(TEMPLATEPATH . '/sidebar-templates/fr/sidebar-sheet-plate-handling.php');

    /* 3. Rig Master Page Sidebar */
    } elseif (is_page('rig-master') || is_child('rig-master', $post->ID) || ( has_term( 'Rig Master', 'below-the-hook-type', $post->ID ) && !has_term(array('Concrete Grabs and Tongs', 'Beam, Girder and Rail Grabs', 'Pipe and Manhole Handling', 'Load Leveling Slings', 'Lifting and Spreader Beams', 'Beam End Fittings', 'Specialty Grabs', 'Synthetic Sling End Fittings'), 'below-the-hook-type', $post->ID)) ) {
        include(TEMPLATEPATH . '/sidebar-templates/fr/sidebar-rig-master.php');

      /* Rig Master - Concrete Grabs & Tongs Sidebar */
      } elseif (has_term('Concrete Grabs and Tongs', 'below-the-hook-type', $post->ID)) {
          include(TEMPLATEPATH . '/sidebar-templates/fr/sidebar-concrete-grabs-tongs.php');

      /* Rig Master - Beam Girder Rail Grabs Sidebar */
      } elseif (has_term('Beam, Girder and Rail Grabs', 'below-the-hook-type', $post->ID)) {
          include(TEMPLATEPATH . '/sidebar-templates/fr/sidebar-beam-girder-and-rail-grabs.php');

      /* Rig Master - Pipe & Manhole Handling Sidebar */
      } elseif (has_term('Pipe and Manhole Handling', 'below-the-hook-type', $post->ID)) {
          include(TEMPLATEPATH . '/sidebar-templates/fr/sidebar-pipe-manhole-handling.php');

      /* Rig Master - Load Leveling Slings Sidebar */
      } elseif (has_term('Load Leveling Slings', 'below-the-hook-type', $post->ID)) {
          include(TEMPLATEPATH . '/sidebar-templates/fr/sidebar-load-leveling-slings.php');

       /* Rig Master - Lifting and Spreader Beams Sidebar */
      } elseif (has_term('Lifting and Spreader Beams', 'below-the-hook-type', $post->ID)) {
          include(TEMPLATEPATH . '/sidebar-templates/fr/sidebar-lifting-and-spreader-beams.php');

       /* Rig Master - Beam End Fittings Sidebar */
      } elseif (has_term('Beam End Fittings', 'below-the-hook-type', $post->ID)) {
          include(TEMPLATEPATH . '/sidebar-templates/fr/sidebar-beam-end-fittings.php');

      /* Rig Master - Specialty Grabs Sidebar */
      } elseif (has_term('Specialty Grabs', 'below-the-hook-type', $post->ID)) {
          include(TEMPLATEPATH . '/sidebar-templates/fr/sidebar-specialty-grabs.php');

      /* Rig Master - Synthetic Sling End Fittings Sidebar */
      } elseif (has_term('Synthetic Sling End Fittings', 'below-the-hook-type', $post->ID)) {
          include(TEMPLATEPATH . '/sidebar-templates/fr/sidebar-synthetic-sling-end-fittings.php');

  /* 4. Load Release Systems Page Sidebar */
  } elseif (is_page('automatic-remote-controlled-load-release-systems') || has_term( 'Load Release Systems FR', 'below-the-hook-type', $post->ID )) {
      include(TEMPLATEPATH . '/sidebar-templates/fr/sidebar-load-release-systems.php');

  /* 5. Load Monitoring Systems Page Sidebar */
  } elseif (is_page('load-monitoring-systems') || has_term( 'Load Monitoring Systems', 'below-the-hook-type', $post->ID )) {
      include(TEMPLATEPATH . '/sidebar-templates/fr/sidebar-load-monitoring-systems-submenu-sidebar.php');

  /* 6. Clamps and Magnets Page Sidebar */
  } elseif (is_page('clamps-magnets') || has_term( 'Clamps and Magnets', 'below-the-hook-type', $post->ID )) {
      include(TEMPLATEPATH . '/sidebar-templates/fr/sidebar-clamps-magnets-submenu-sidebar.php');

	/* 7. Clamps Page Sidebar */
  } elseif (is_page('clamps-overview')) {
      include(TEMPLATEPATH . '/sidebar-templates/fr/sidebar-clamps-submenu.php');

  /* 8. Magnets Page Sidebar */
  } elseif (is_page('magnets-overview')) {
      include(TEMPLATEPATH . '/sidebar-templates/fr/sidebar-magnets-submenu.php');

  /* Product FR Sidebar */
	} elseif (is_page('Produits')) {
    	include(TEMPLATEPATH . '/sidebar-templates/fr/sidebar-product.php');

    /* Default Sidebar */
	} else {
      	include(TEMPLATEPATH . '/sidebar-templates/fr/sidebar-default.php');
	}
?>

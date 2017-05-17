<?php    

    /* About Us Sidebar */
 	if (is_page(array('about-us')) || is_child('about-us', $post->ID)) {
      	include(TEMPLATEPATH . '/sidebar-templates/sidebar-about-us.php');

    /* Test Beds Sidebar */
 	} elseif (is_page(array('test-beds')) || is_child('test-beds', $post->ID)) {
      	include(TEMPLATEPATH . '/sidebar-templates/sidebar-test-beds.php');

    /* Products in Use Lifting Solutions Sidebar */
 	} elseif (is_page(array('lifting-solutions-sorted-by-industries')) || is_child('lifting-solutions-sorted-by-industries', $post->ID)) {
      	include(TEMPLATEPATH . '/sidebar-templates/sidebar-pui-lifting-solutions.php');

    /* Products in Use Lifting Stories Sidebar */
 	} elseif (is_page(array('lifting-stories-and-background-information')) || is_child('lifting-stories-and-background-information', $post->ID)) {
      	include(TEMPLATEPATH . '/sidebar-templates/sidebar-pui-lifting-stories.php');

	/* Wire Rope Sidebar */
 	} elseif (is_page(array('wire-ropes','python-rope','wire-rope-selection')) || has_term(array('wire-rope'), 'rope-type', $post->ID)) {
      	include(TEMPLATEPATH . '/sidebar-templates/sidebar-wire-ropes.php');

    /* Technical Literature */
    } elseif (is_page(array('technical-literature','technical-bulletins','videos','certificates'))) {
      	include(TEMPLATEPATH . '/sidebar-templates/sidebar-technical-literature.php');

    /* Technical Information Sidebar */
    } elseif (has_term( 'Technical Information', 'category', $post->ID )) {
      	include(TEMPLATEPATH . '/sidebar-templates/sidebar-wr-tech-info.php');

    /* Wire Rope End-Attachments Sidebar */
	} elseif (is_page(array('wire-rope-end-attachments', 2048, 2050, 2052, 2054, 2056  )) || has_term( 'Wire Rope End Attachments', 'rope-type', $post->ID )) {
      	include(TEMPLATEPATH . '/sidebar-templates/sidebar-wire-rope-end-attachments.php');

    /* Fiber Ropes Sidebar */
	} elseif (is_page(array('fiber-ropes','coatings','engineering-usage-care-inspection')) || has_term( 'Fiber Ropes', 'rope-type', $post->ID)) {
      	include(TEMPLATEPATH . '/sidebar-templates/sidebar-fiber-ropes.php');

	/* Links and Rings Sidebar */
	} elseif (is_page(array(11354,11357,11360,11363,11365,11367,11369))) {
				include(TEMPLATEPATH . '/sidebar-templates/sidebar-links-and-rings-submenu.php');

	/* Hoists & Pullers Sidebar */
	} elseif (is_page(array(11815))) {
				include(TEMPLATEPATH . '/sidebar-templates/sidebar-hoists-pullers.php');

	/* Lever Hoists Sidebar */
	} elseif (is_page(array(11816))) {
				include(TEMPLATEPATH . '/sidebar-templates/sidebar-lever-hoists.php');

	/* Chain Hoists Sidebar */
	} elseif (is_page(array(11816))) {
				include(TEMPLATEPATH . '/sidebar-templates/sidebar-chain-hoists.php');

  /* Pyhton Ropes Sidebar */
	} elseif (has_term( 'Python Ropes', 'rope-type', $post->ID)) {
      	include(TEMPLATEPATH . '/sidebar-templates/sidebar-python-ropes.php');

  /* Wire Rope Slings Sidebar */
	} elseif (is_page(array('wire-rope-slings','rigging-guidelines','sling-removal-criteria','the-flexibility-of-slings',2250,3229,3247,3250, 3288,3262,3299,3322,3333,3337,3339,3341,3343,11221,11322)) || has_term( 'Wire Rope Slings', 'sling-type', $post->ID)) {
      	include(TEMPLATEPATH . '/sidebar-templates/sidebar-wire-rope-slings.php');

    /* Chain & Wire Mesh Slings Sidebar */
    } elseif (is_page(array('chain-wire-mesh-slings',4772)) || has_term( array('chain-wire-mesh-slings', 'single-leg-grade-100','single-leg-grade-80','adjustable-single-leg-grade-100','adjustable-single-leg-grade-80', 'two-leg-grade-100','two-leg-grade-80','adjustable-two-leg-grade-100','adjustable-two-leg-grade-80', 'three-leg-grade-100','three-leg-grade-80','adjustable-three-leg-grade-100','adjustable-three-leg-grade-80', 'four-leg-grade-100','four-leg-grade-80','adjustable-four-leg-grade-100','adjustable-four-leg-grade-80', 'grade-80-chain-sling-types','rings-and-links','couplers-threaded-shanks-and-tie-down-rings','hooks','spare-parts-for-hooks','chain-shorteners'), 'sling-type', $post->ID)) {
      	include(TEMPLATEPATH . '/sidebar-templates/sidebar-chain-wire-mesh-slings.php');

    /* Twin-Path® And Synthetic Lifting Slings Sidebar */
    } elseif (is_page(array('twin-path-and-synthetic-lifting-slings',4776)) || (is_single('3507')) || has_term( array('twin-path-and-synthetic-lifting-slings','uni-path-round-slings','uni-web-nylon-slings','uni-web-polyester-slings','boat-lifting-slings','wear-pads','synthetic-sling-hardware','twin-path-lifting-slings'), 'sling-type', $post->ID)) {
      	include(TEMPLATEPATH . '/sidebar-templates/sidebar-syntheticslings.php');

		/* Twin-Path® Lifting Slings Sidebar */
  	/*
			} elseif (has_term( array('twin-path-lifting-slings'), 'sling-type', $post->ID)) {
    	include(TEMPLATEPATH . '/sidebar-templates/sidebar-twin-path-lifting-slings.php');
		*/

    /* Sling Inspection */
    } elseif (has_term('inspection-criteria-and-sling-properties', 'sling-type', $post->ID)) {
      	include(TEMPLATEPATH . '/sidebar-templates/sidebar-sling-inspection.php');

    /* RUD Main Menu Sidebar */
    } elseif (is_page('lifting-points-for-bolting') || is_page('lifting-points-for-welding') || is_page('fall-protection-anchorage-points-psa')) {
      	include(TEMPLATEPATH . '/sidebar-templates/sidebar-rud.php');

    /* RUD Sub Menu Sidebar */
    } elseif (has_term('rud', 'rigging-hardware-type', $post->ID)) {
      	include(TEMPLATEPATH . '/sidebar-templates/sidebar-rud-submenu.php');

		/* Alloy High Capacity Shackles Sub Menu Sidebar */
	} elseif (has_term('alloy-high-capacity-shackles', 'rigging-hardware-type', $post->ID)) {
      	include(TEMPLATEPATH . '/sidebar-templates/sidebar-alloy-high-capacity-shackles-submenu.php');

		/* Alloy Wide Body Shackles Sub Menu Sidebar */
	} elseif (has_term('alloy-wide-body-shackles', 'rigging-hardware-type', $post->ID)) {
      	include(TEMPLATEPATH . '/sidebar-templates/sidebar-alloy-wide-body-shackles-submenu.php');

    /* Below the Hooks Page Sidebar */
    } elseif (is_page('below-the-hook') || has_term( 'Below the Hook', 'below-the-hook-type', $post->ID )) {
        include(TEMPLATEPATH . '/sidebar-templates/sidebar-below-the-hook.php');

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
        include(TEMPLATEPATH . '/sidebar-templates/sidebar-strong-bac.php');

      /* Strong Bac - Coil Lifters Sidebar */
      } elseif (has_term('Coil Lifters', 'below-the-hook-type', $post->ID)) {
          include(TEMPLATEPATH . '/sidebar-templates/sidebar-coil-lifters.php');

      /* Strong Bac - Dura-Lite™ Composite Products Sidebar */
      } elseif (has_term('Dura-Lite™ Composite Products', 'below-the-hook-type', $post->ID)) {
          include(TEMPLATEPATH . '/sidebar-templates/sidebar-duralite-composite-products.php');

      /* Strong Bac - Lifting Beams (Strong Bac) Sidebar */
      } elseif (has_term('Lifting Beams (Strong Bac)', 'below-the-hook-type', $post->ID)) {
          include(TEMPLATEPATH . '/sidebar-templates/sidebar-lifting-beams-strong-bac.php');

      /* Strong Bac - Lifting Tongs Sidebar */
      } elseif (has_term('Lifting Tongs', 'below-the-hook-type', $post->ID)) {
          include(TEMPLATEPATH . '/sidebar-templates/sidebar-lifting-tongs.php');

      /* Strong Bac - Material Handling Sidebar */
      } elseif (has_term('Material Handling', 'below-the-hook-type', $post->ID)) {
          include(TEMPLATEPATH . '/sidebar-templates/sidebar-material-handling.php');

      /* Strong Bac - Pallet Lifters Sidebar */
      } elseif (has_term('Pallet Lifters', 'below-the-hook-type', $post->ID)) {
          include(TEMPLATEPATH . '/sidebar-templates/sidebar-pallet-lifters.php');

      /* Strong Bac - Roll Lifters Sidebar */
      } elseif (has_term('Roll Lifters', 'below-the-hook-type', $post->ID)) {
          include(TEMPLATEPATH . '/sidebar-templates/sidebar-roll-lifters.php');

      /* Strong Bac - Sheet Lifters Sidebar */
      } elseif (has_term('Sheet Lifters', 'below-the-hook-type', $post->ID)) {
          include(TEMPLATEPATH . '/sidebar-templates/sidebar-sheet-lifters.php');

      /* Strong Bac - Spreader Beams Sidebar */
      } elseif (has_term('Spreader Beams', 'below-the-hook-type', $post->ID)) {
          include(TEMPLATEPATH . '/sidebar-templates/sidebar-spreader-beams.php');

    /* 2. Mill Duty Page Sidebar */
    } elseif (is_page('mill-duty') || is_child('mill-duty', $post->ID) || ( has_term( 'Mill Duty', 'below-the-hook-type', $post->ID ) && !has_term(array('Coil Handling', 'Ingot and Slab Handling', 'Lifting Beams (Mill Duty)', 'Sheet and Plate Handling'), 'below-the-hook-type', $post->ID)) ) {
        include(TEMPLATEPATH . '/sidebar-templates/sidebar-mill-duty.php');

      /* Mill Duty - Coil Handling Sidebar */
      } elseif (has_term('Coil Handling', 'below-the-hook-type', $post->ID)) {
          include(TEMPLATEPATH . '/sidebar-templates/sidebar-coil-handling.php');

      /* Mill Duty - Ingot and Slab Handling Sidebar */
      } elseif (has_term('Ingot and Slab Handling', 'below-the-hook-type', $post->ID)) {
          include(TEMPLATEPATH . '/sidebar-templates/sidebar-ingot-slab-handling.php');

      /* Mill Duty - Lifting Beams Sidebar */
      } elseif (has_term('Lifting Beams (Mill Duty)', 'below-the-hook-type', $post->ID)) {
          include(TEMPLATEPATH . '/sidebar-templates/sidebar-lifting-beams-mill-duty.php');

      /* Mill Duty - Sheet and Plate Handling Sidebar */
      } elseif (has_term('Sheet and Plate Handling', 'below-the-hook-type', $post->ID)) {
          include(TEMPLATEPATH . '/sidebar-templates/sidebar-sheet-plate-handling.php');

    /* 3. Rig Master Page Sidebar */
    } elseif (is_page('rig-master') || is_child('rig-master', $post->ID) || ( has_term( 'Rig Master', 'below-the-hook-type', $post->ID ) && !has_term(array('Concrete Grabs and Tongs', 'Beam, Girder and Rail Grabs', 'Pipe and Manhole Handling', 'Load Leveling Slings', 'Lifting and Spreader Beams', 'Beam End Fittings', 'Specialty Grabs', 'Synthetic Sling End Fittings'), 'below-the-hook-type', $post->ID)) ) {
        include(TEMPLATEPATH . '/sidebar-templates/sidebar-rig-master.php');

      /* Rig Master - Concrete Grabs & Tongs Sidebar */
      } elseif (has_term('Concrete Grabs and Tongs', 'below-the-hook-type', $post->ID)) {
          include(TEMPLATEPATH . '/sidebar-templates/sidebar-concrete-grabs-tongs.php');

      /* Rig Master - Beam Girder Rail Grabs Sidebar */
      } elseif (has_term('Beam, Girder and Rail Grabs', 'below-the-hook-type', $post->ID)) {
          include(TEMPLATEPATH . '/sidebar-templates/sidebar-beam-girder-and-rail-grabs.php');

      /* Rig Master - Pipe & Manhole Handling Sidebar */
      } elseif (has_term('Pipe and Manhole Handling', 'below-the-hook-type', $post->ID)) {
          include(TEMPLATEPATH . '/sidebar-templates/sidebar-pipe-manhole-handling.php');

      /* Rig Master - Load Leveling Slings Sidebar */
      } elseif (has_term('Load Leveling Slings', 'below-the-hook-type', $post->ID)) {
          include(TEMPLATEPATH . '/sidebar-templates/sidebar-load-leveling-slings.php');

       /* Rig Master - Lifting and Spreader Beams Sidebar */
      } elseif (has_term('Lifting and Spreader Beams', 'below-the-hook-type', $post->ID)) {
          include(TEMPLATEPATH . '/sidebar-templates/sidebar-lifting-and-spreader-beams.php');

       /* Rig Master - Beam End Fittings Sidebar */
      } elseif (has_term('Beam End Fittings', 'below-the-hook-type', $post->ID)) {
          include(TEMPLATEPATH . '/sidebar-templates/sidebar-beam-end-fittings.php');

      /* Rig Master - Specialty Grabs Sidebar */
      } elseif (has_term('Specialty Grabs', 'below-the-hook-type', $post->ID)) {
          include(TEMPLATEPATH . '/sidebar-templates/sidebar-specialty-grabs.php');

      /* Rig Master - Synthetic Sling End Fittings Sidebar */
      } elseif (has_term('Synthetic Sling End Fittings', 'below-the-hook-type', $post->ID)) {
          include(TEMPLATEPATH . '/sidebar-templates/sidebar-synthetic-sling-end-fittings.php');

      /* Products English Sidebar */
	  } elseif (is_page('Products')) {
          include(TEMPLATEPATH . '/sidebar-templates/sidebar-product-en.php');

  /* 4. Load Release Systems Page Sidebar */
  } elseif (is_page('auto-remote-load-release') || has_term( 'Load Release Systems', 'below-the-hook-type', $post->ID )) {
      include(TEMPLATEPATH . '/sidebar-templates/sidebar-load-release-systems.php');

  /* 5. Load Monitoring Systems Page Sidebar */
  } elseif (is_page('load-monitoring-systems') || has_term( 'Load Monitoring Systems', 'below-the-hook-type', $post->ID )) {
      include(TEMPLATEPATH . '/sidebar-templates/sidebar-load-monitoring-systems-submenu-sidebar.php');

  /* 6. Clamps and Magnets Page Sidebar */
  } elseif (is_page('clamps-magnets') || has_term( 'Clamps and Magnets', 'below-the-hook-type', $post->ID )) {
      include(TEMPLATEPATH . '/sidebar-templates/sidebar-clamps-magnets-submenu-sidebar.php');

	/* 7. Clamps Page Sidebar */
  } elseif (is_page('clamps-overview')) {
      include(TEMPLATEPATH . '/sidebar-templates/sidebar-clamps-submenu.php');

  /* 8. Magnets Page Sidebar */
  } elseif (is_page('magnets-overview')) {
      include(TEMPLATEPATH . '/sidebar-templates/sidebar-magnets-submenu.php');

	/* 9. Magnets for Lifting, Moving and Transferring Page Sidebar */
  } elseif (has_term('magnets-for-lifting-moving-and-transferring')) {
      include(TEMPLATEPATH . '/sidebar-templates/sidebar-magnets-for-lifting-moving-and-transferring.php');

  /* Default Sidebar */
	} else {
    	include(TEMPLATEPATH . '/sidebar-templates/sidebar-default.php');
	}

?>

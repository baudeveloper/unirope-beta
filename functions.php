<?php

//add_action( 'init', 'stop_heartbeat', 1 );

function stop_heartbeat() {
        wp_deregister_script('heartbeat');
}
        // Translations can be filed in the /languages/ directory
        load_theme_textdomain( 'unirope', TEMPLATEPATH . '/languages' );

        $locale = get_locale();
        $locale_file = TEMPLATEPATH . "/languages/$locale.php";
        if ( is_readable($locale_file) )
            require_once($locale_file);

    // Add RSS links to <head> section
    automatic_feed_links();


    // Add specific CSS class by filter
    add_filter('body_class','my_class_names');
    function my_class_names($classes) {
        if(is_front_page() ) {
            // add 'class-name' to the $classes array
            $classes[] = 'home';
        } else {
            $classes[] = 'page';
        }
        // return the $classes array
        return $classes;
    }



if (!function_exists('load_my_scripts')) {
function load_my_scripts() {
    $JscriptURL = get_template_directory_uri().'_/js/'; //Sets Javascript directory URL
    //Loads for all pages
    wp_deregister_script('jquery');
    wp_register_script('jquery', ("https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"), '1.7.1', true);
    wp_enqueue_script('jquery');
    }
}
add_action('wp_enqueue_scripts', 'load_my_scripts');


    // Clean up the <head>
    function removeHeadLinks() {
        remove_action('wp_head', 'rsd_link');
        remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');

    // Home Page Quick Links
    if (function_exists('register_sidebar')) {
        register_sidebar(array(
            'name' => __('Quick Links' ),
            'id'   => 'quicklinks-sidebar',
            'description'   => __( 'These are widgets for the sidebar.')
        ));
    }

    // Default Widget Sidebar
    if (function_exists('register_sidebar')) {
        register_sidebar(array(
            'name' => __('Widget Sidebar'),
            'id'   => 'widget-sidebar',
            'description'   => __( 'These are widgets for the sidebar.'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2>',
            'after_title'   => '</h2>'
        ));
    }

    // Default Widget Sidebar French
    if (function_exists('register_sidebar')) {
        register_sidebar(array(
            'name' => __('Widget Sidebar FR'),
            'id'   => 'widget-sidebar-fr',
            'description'   => __( 'These are widgets for the sidebar.'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2>',
            'after_title'   => '</h2>'
        ));
    }

	// Product EN Widget Sidebar
    if (function_exists('register_sidebar')) {
        register_sidebar(array(
            'name' => __('Product EN Sidebar'),
            'id'   => 'product-en-sidebar',
            'description'   => __( 'These are widgets for the sidebar.'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2>',
            'after_title'   => '</h2>'
        ));
    }

    // Product FR Widget Sidebar
    if (function_exists('register_sidebar')) {
        register_sidebar(array(
            'name' => __('Product FR Sidebar'),
            'id'   => 'product-fr-sidebar',
            'description'   => __( 'These are widgets for the sidebar.'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2>',
            'after_title'   => '</h2>'
        ));
    }

   // Wire Ropes Sidebar
    if (function_exists('register_sidebar')) {
        register_sidebar(array(
            'name' => __('Wire Ropes Sidebar'),
            'id'   => 'wire-ropes-sidebar',
            'description'   => __( 'These are widgets for the sidebar.'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2>',
            'after_title'   => '</h2>'
        ));
    }

    // Product Line Logos Sidebar
    if (function_exists('register_sidebar')) {
        register_sidebar(array(
            'name' => __('Product Lines'),
            'id'   => 'productline-sidebar',
            'description'   => __( 'These are widgets for the sidebar.'),
            'before_widget' => '<div class="product-line-icons clearfix">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4>',
            'after_title'   => '</h4>'
        ));
    }

     // Wire Ropes Technical Information Sidebar
    if (function_exists('register_sidebar')) {
        register_sidebar(array(
            'name' => __('WR Tech Info Sidebar'),
            'id'   => 'wr-tech-info-sidebar',
            'description'   => __( 'These are widgets for the sidebar.'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2>',
            'after_title'   => '</h2>'
        ));
    }

     // Wire Ropes Technical Information Sidebar FRENCH
    if (function_exists('register_sidebar')) {
        register_sidebar(array(
            'name' => __('WR Tech Info Sidebar French'),
            'id'   => 'wr-tech-info-sidebar-fr',
            'description'   => __( 'These are widgets for the sidebar.'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2>',
            'after_title'   => '</h2>'
        ));
    }

    // Wire Rope End Attachments Sidebar
    if (function_exists('register_sidebar')) {
        register_sidebar(array(
            'name' => __('Wire Rope End Attachments Sidebar'),
            'id'   => 'wire-rope-end-attachments-sidebar',
            'description'   => __( 'These are widgets for the sidebar.'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2>',
            'after_title'   => '</h2>'
        ));
    }

    // Fiber Ropes Sidebar
    if (function_exists('register_sidebar')) {
        register_sidebar(array(
            'name' => __('Fiber Ropes Sidebar'),
            'id'   => 'fiber-ropes-sidebar',
            'description'   => __( 'These are widgets for the sidebar.'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2>',
            'after_title'   => '</h2>'
        ));
    }

    // Python Ropes Sidebar
    if (function_exists('register_sidebar')) {
        register_sidebar(array(
            'name' => __('Python Ropes Sidebar'),
            'id'   => 'python-ropes-sidebar',
            'description'   => __( 'These are widgets for the sidebar.'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2>',
            'after_title'   => '</h2>'
        ));
    }

    // Wire Rope Slings Sidebar
    if (function_exists('register_sidebar')) {
        register_sidebar(array(
            'name' => __('Wire Rope Slings Sidebar'),
            'id'   => 'wire-rope-slings-sidebar',
            'description'   => __( 'These are widgets for the sidebar.'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2>',
            'after_title'   => '</h2>'
        ));
    }

    // Chain & Wire Mesh Slings Sidebar
    if (function_exists('register_sidebar')) {
        register_sidebar(array(
            'name' => __('Chain & Wire Mesh Slings Sidebar'),
            'id'   => 'chain-wire-mesh-slings-sidebar',
            'description'   => __( 'These are widgets for the sidebar.'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2>',
            'after_title'   => '</h2>'
        ));
    }

    // Twin-Path & Synthetic Lifting Slings Sidebar
    if (function_exists('register_sidebar')) {
        register_sidebar(array(
            'name' => __('Twin-Path & Synthetic Lifting Slings Sidebar'),
            'id'   => 'twin-path-and-synthetic-lifting-slings-sidebar',
            'description'   => __( 'These are widgets for the sidebar.'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2>',
            'after_title'   => '</h2>'
        ));
    }

     // Twin-Path Lifting Slings Sidebar
    if (function_exists('register_sidebar')) {
        register_sidebar(array(
            'name' => __('Twin-Path Lifting Slings Sidebar'),
            'id'   => 'twin-path-lifting-slings-sidebar',
            'description'   => __( 'These are widgets for the sidebar.'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2>',
            'after_title'   => '</h2>'
        ));
    }

    // RUD Main Sidebar
    if (function_exists('register_sidebar')) {
        register_sidebar(array(
            'name' => __('RUD Main Sidebar'),
            'id'   => 'rud-main-sidebar',
            'description'   => __( 'These are widgets for the sidebar.'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2>',
            'after_title'   => '</h2>'
        ));
    }

     // RUD Submenu Sidebar
    if (function_exists('register_sidebar')) {
        register_sidebar(array(
            'name' => __('RUD Submenu Sidebar'),
            'id'   => 'rud-submenu-sidebar',
            'description'   => __( 'These are widgets for the sidebar.'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2>',
            'after_title'   => '</h2>'
        ));
    }

     // Shackles and Hooks Submenu Sidebar
    if (function_exists('register_sidebar')) {
        register_sidebar(array(
            'name' => __('Shackles and Hooks Submenu Sidebar'),
            'id'   => 'shackles-hooks-submenu-sidebar',
            'description'   => __( 'These are widgets for the sidebar.'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2>',
            'after_title'   => '</h2>'
        ));
    }

    // Alloy High Capacity Shackles Submenu Sidebar
   if (function_exists('register_sidebar')) {
       register_sidebar(array(
           'name' => __('Alloy High Capacity Shackles Submenu Sidebar'),
           'id'   => 'alloy-high-capacity-shackles-submenu-sidebar',
           'description'   => __( 'These are widgets for the sidebar.'),
           'before_widget' => '<div id="%1$s" class="widget %2$s">',
           'after_widget'  => '</div>',
           'before_title'  => '<h2>',
           'after_title'   => '</h2>'
       ));
   }

   // Alloy Wide Body Shackles Submenu Sidebar
   if (function_exists('register_sidebar')) {
       register_sidebar(array(
           'name' => __('Alloy Wide Body Shackles Submenu Sidebar'),
           'id'   => 'alloy-wide-body-shackles-submenu-sidebar',
           'description'   => __( 'These are widgets for the sidebar.'),
           'before_widget' => '<div id="%1$s" class="widget %2$s">',
           'after_widget'  => '</div>',
           'before_title'  => '<h2>',
           'after_title'   => '</h2>'
       ));
   }

    // Rigging Turnbuckles Submenu Sidebar
   if (function_exists('register_sidebar')) {
       register_sidebar(array(
           'name' => __('Rigging Turnbuckles Submenu Sidebar'),
           'id'   => 'rigging-turnbuckles-submenu-sidebar',
           'description'   => __( 'These are widgets for the sidebar.'),
           'before_widget' => '<div id="%1$s" class="widget %2$s">',
           'after_widget'  => '</div>',
           'before_title'  => '<h2>',
           'after_title'   => '</h2>'
       ));
   }

   // Rigging Turnbuckles Submenu Sidebar
  if (function_exists('register_sidebar')) {
      register_sidebar(array(
          'name' => __('Links and Rings for Wire Rope Slings Submenu Sidebar'),
          'id'   => 'links-and-rings-submenu-sidebar',
          'description'   => __( 'These are widgets for the sidebar.'),
          'before_widget' => '<div id="%1$s" class="widget %2$s">',
          'after_widget'  => '</div>',
          'before_title'  => '<h2>',
          'after_title'   => '</h2>'
      ));
  }

     // Thimbles and Corner Protectors Submenu Sidebar
    if (function_exists('register_sidebar')) {
        register_sidebar(array(
            'name' => __('Thimbles and Corner Protectors Submenu Sidebar'),
            'id'   => 'thimbles-corner-protectors-submenu-sidebar',
            'description'   => __( 'These are widgets for the sidebar.'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2>',
            'after_title'   => '</h2>'
        ));
    }

     // Cable Clips Submenu Sidebar
    if (function_exists('register_sidebar')) {
        register_sidebar(array(
            'name' => __('Cable Clips Submenu Sidebar'),
            'id'   => 'cable-clips-submenu-sidebar',
            'description'   => __( 'These are widgets for the sidebar.'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2>',
            'after_title'   => '</h2>'
        ));
    }

     // Load Positioning Swivels Submenu Sidebar
    if (function_exists('register_sidebar')) {
        register_sidebar(array(
            'name' => __('Load Positioning Swivels Submenu Sidebar'),
            'id'   => 'load-positioning-swivels-submenu-sidebar',
            'description'   => __( 'These are widgets for the sidebar.'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2>',
            'after_title'   => '</h2>'
        ));
    }

    // Eye Bolts & Hoist Rings Submenu Sidebar
    if (function_exists('register_sidebar')) {
        register_sidebar(array(
            'name' => __('Eye Bolts & Hoist Rings Submenu Sidebar'),
            'id'   => 'eye-bolts-hoist-rings-submenu-sidebar',
            'description'   => __( 'These are widgets for the sidebar.'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2>',
            'after_title'   => '</h2>'
        ));
    }

    // Load Securement Submenu Sidebar
    if (function_exists('register_sidebar')) {
        register_sidebar(array(
            'name' => __('Load Securement Submenu Sidebar'),
            'id'   => 'load-securement-submenu-sidebar',
            'description'   => __( 'These are widgets for the sidebar.'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2>',
            'after_title'   => '</h2>'
        ));
    }

    // Clamps & Magnets Submenu Sidebar
    if (function_exists('register_sidebar')) {
        register_sidebar(array(
            'name' => __('Clamps Magnets Submenu Sidebar'),
            'id'   => 'clamps-magnets-submenu-sidebar',
            'description'   => __( 'These are widgets for the sidebar.'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2>',
            'after_title'   => '</h2>'
        ));
    }

    // Clamps Submenu Sidebar
    if (function_exists('register_sidebar')) {
        register_sidebar(array(
            'name' => __('Clamps Submenu Sidebar'),
            'id'   => 'clamps-submenu-sidebar',
            'description'   => __( 'These are widgets for the sidebar.'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2>',
            'after_title'   => '</h2>'
        ));
    }

    // Clamps FR Submenu Sidebar
    if (function_exists('register_sidebar')) {
        register_sidebar(array(
            'name' => __('Clamps Submenu FR Sidebar'),
            'id'   => 'clamps-fr-submenu-sidebar',
            'description'   => __( 'These are widgets for the sidebar.'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2>',
            'after_title'   => '</h2>'
        ));
    }

    // Magnets for Lifting, Moving and Transferring Submenu Sidebar
    if (function_exists('register_sidebar')) {
        register_sidebar(array(
            'name' => __('Magnets for Lifting Moving and Transferring Submenu Sidebar'),
            'id'   => 'magnets-for-lifting-moving-and-transferring-submenu-sidebar',
            'description'   => __( 'These are widgets for the sidebar.'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2>',
            'after_title'   => '</h2>'
        ));
    }

    // Magnets Submenu Sidebar
    if (function_exists('register_sidebar')) {
        register_sidebar(array(
            'name' => __('Magnets Submenu Sidebar'),
            'id'   => 'magnets-submenu-sidebar',
            'description'   => __( 'These are widgets for the sidebar.'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2>',
            'after_title'   => '</h2>'
        ));
    }

    // Magnets FR Submenu Sidebar
    if (function_exists('register_sidebar')) {
        register_sidebar(array(
            'name' => __('Magnets Submenu FR Sidebar'),
            'id'   => 'magnets-fr-submenu-sidebar',
            'description'   => __( 'These are widgets for the sidebar.'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2>',
            'after_title'   => '</h2>'
        ));
    }

    // Hoists & Pullers Submenu Sidebar
    if (function_exists('register_sidebar')) {
        register_sidebar(array(
            'name' => __('Hoists Pullers Submenu Sidebar'),
            'id'   => 'hoists-pullers-submenu-sidebar',
            'description'   => __( 'These are widgets for the sidebar.'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2>',
            'after_title'   => '</h2>'
        ));
    }

    // Lever Hoists Submenu Sidebar
    if (function_exists('register_sidebar')) {
        register_sidebar(array(
            'name' => __('Lever Hoists Submenu Sidebar'),
            'id'   => 'lever-hoists-submenu-sidebar',
            'description'   => __( 'These are widgets for the sidebar.'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2>',
            'after_title'   => '</h2>'
        ));
    }

    // Chain Hoists Submenu Sidebar
    if (function_exists('register_sidebar')) {
        register_sidebar(array(
            'name' => __('Chain Hoists Submenu Sidebar'),
            'id'   => 'chain-hoists-submenu-sidebar',
            'description'   => __( 'These are widgets for the sidebar.'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2>',
            'after_title'   => '</h2>'
        ));
    }

    // Load Monitoring Systems Submenu Sidebar
    if (function_exists('register_sidebar')) {
        register_sidebar(array(
            'name' => __('Load Monitoring Systems Submenu Sidebar'),
            'id'   => 'load-monitoring-systems-submenu-sidebar',
            'description'   => __( 'These are widgets for the sidebar.'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2>',
            'after_title'   => '</h2>'
        ));
    }

    // Utility Specific Products Submenu Sidebar
    if (function_exists('register_sidebar')) {
        register_sidebar(array(
            'name' => __('Utility Specific Products Submenu Sidebar'),
            'id'   => 'utility-specific-products-submenu-sidebar',
            'description'   => __( 'These are widgets for the sidebar.'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2>',
            'after_title'   => '</h2>'
        ));
    }

    // About Us Submenu Sidebar
    if (function_exists('register_sidebar')) {
        register_sidebar(array(
            'name' => __('About Us Sidebar'),
            'id'   => 'about-us-sidebar',
            'description'   => __( 'These are widgets for the sidebar.'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2>',
            'after_title'   => '</h2>'
        ));
    }

    // About Us Submenu Sidebar
    if (function_exists('register_sidebar')) {
        register_sidebar(array(
            'name' => __('About Us FR Sidebar'),
            'id'   => 'about-us-fr-sidebar',
            'description'   => __( 'These are widgets for the sidebar.'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2>',
            'after_title'   => '</h2>'
        ));
    }

     // Inspection and Testing Submenu Sidebar
    if (function_exists('register_sidebar')) {
        register_sidebar(array(
            'name' => __('Inspection and Testing Sidebar'),
            'id'   => 'inspection-testing-sidebar',
            'description'   => __( 'These are widgets for the sidebar.'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2>',
            'after_title'   => '</h2>'
        ));
    }

     // Products In Use Lifting Stories Submenu Sidebar
    if (function_exists('register_sidebar')) {
        register_sidebar(array(
            'name' => __('Lifting Stories Sidebar'),
            'id'   => 'lifting-stories-sidebar',
            'description'   => __( 'These are widgets for the sidebar.'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2>',
            'after_title'   => '</h2>'
        ));
    }

     // Products In Use Lifting Solutions Submenu Sidebar
    if (function_exists('register_sidebar')) {
        register_sidebar(array(
            'name' => __('Lifting Solutions Sidebar'),
            'id'   => 'lifting-solutions-sidebar',
            'description'   => __( 'These are widgets for the sidebar.'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2>',
            'after_title'   => '</h2>'
        ));
    }

     // Test Beds Submenu Sidebar
    if (function_exists('register_sidebar')) {
        register_sidebar(array(
            'name' => __('Test Beds Sidebar'),
            'id'   => 'test-beds-sidebar',
            'description'   => __( 'These are widgets for the sidebar.'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2>',
            'after_title'   => '</h2>'
        ));
    }

     // Sling Inspection Submenu Sidebar
    if (function_exists('register_sidebar')) {
        register_sidebar(array(
            'name' => __('Sling Inspection Sidebar'),
            'id'   => 'sling-inspection-sidebar',
            'description'   => __( 'These are widgets for the sidebar.'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2>',
            'after_title'   => '</h2>'
        ));
    }

    // Wear Pads Inspection Submenu Sidebar
    if (function_exists('register_sidebar')) {
        register_sidebar(array(
            'name' => __('Wear Pads Inspection Sidebar'),
            'id'   => 'wearpads-inspection-sidebar',
            'description'   => __( 'These are widgets for the sidebar.'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2>',
            'after_title'   => '</h2>'
        ));
    }

    // Technical Literature Submenu Sidebar
    if (function_exists('register_sidebar')) {
        register_sidebar(array(
            'name' => __('Technical Literature Sidebar'),
            'id'   => 'technical-literature-sidebar',
            'description'   => __( 'These are widgets for the sidebar.'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2>',
            'after_title'   => '</h2>'
        ));
    }

    // Technical Literature Submenu Sidebar
    if (function_exists('register_sidebar')) {
        register_sidebar(array(
            'name' => __('Technical Literature FR Sidebar'),
            'id'   => 'technical-literature-fr-sidebar',
            'description'   => __( 'These are widgets for the sidebar.'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2>',
            'after_title'   => '</h2>'
        ));
    }
    
    // Load Release Systems Submenu Sidebar
    if (function_exists('register_sidebar')) {
        register_sidebar(array(
            'name' => __('Load Release Systems Sidebar'),
            'id'   => 'load-release-systems-sidebar',
            'description'   => __( 'These are widgets for the sidebar.'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2>',
            'after_title'   => '</h2>'
        ));
    }

    // Below the Hook Submenu Sidebar
    if (function_exists('register_sidebar')) {
        register_sidebar(array(
            'name' => __('Below the Hook Sidebar'),
            'id'   => 'below-the-hook-sidebar',
            'description'   => __( 'These are widgets for the sidebar.'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2>',
            'after_title'   => '</h2>'
        ));
    }

    // Girder Clamps and Trolleys Submenu Sidebar
    if (function_exists('register_sidebar')) {
        register_sidebar(array(
            'name' => __('Girder Clamps and Trolleys Sidebar'),
            'id'   => 'girder-clamps-and-trolleys-sidebar',
            'description'   => __( 'These are widgets for the sidebar.'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2>',
            'after_title'   => '</h2>'
        ));
    }

        // Beam Clamps Submenu Sidebar
        if (function_exists('register_sidebar')) {
            register_sidebar(array(
                'name' => __('Beam Clamps Sidebar'),
                'id'   => 'beam-clamps-sidebar',
                'description'   => __( 'These are widgets for the sidebar.'),
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h2>',
                'after_title'   => '</h2>'
            ));
        }

        // Beam Trolleys Submenu Sidebar
        if (function_exists('register_sidebar')) {
            register_sidebar(array(
                'name' => __('Beam Trolleys Sidebar'),
                'id'   => 'beam-trolleys-sidebar',
                'description'   => __( 'These are widgets for the sidebar.'),
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h2>',
                'after_title'   => '</h2>'
            ));
        }

    // Strong Bac Submenu Sidebar
    if (function_exists('register_sidebar')) {
        register_sidebar(array(
            'name' => __('Strong Bac Sidebar'),
            'id'   => 'strong-bac-sidebar',
            'description'   => __( 'These are widgets for the sidebar.'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2>',
            'after_title'   => '</h2>'
        ));
    }
        // Coil Lifters Sidebar
        if (function_exists('register_sidebar')) {
            register_sidebar(array(
                'name' => __('Coil Lifters Sidebar'),
                'id'   => 'coil-lifters-sidebar',
                'description'   => __( 'These are widgets for the sidebar.'),
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h2>',
                'after_title'   => '</h2>'
            ));
        }
        // Dura-Lite™ Composite Products Sidebar
        if (function_exists('register_sidebar')) {
            register_sidebar(array(
                'name' => __('Dura-Lite™ Composite Products Sidebar'),
                'id'   => 'duralite-composite-products-sidebar',
                'description'   => __( 'These are widgets for the sidebar.'),
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h2>',
                'after_title'   => '</h2>'
            ));
        }
        // Lifting Beams (Strong Bac) Sidebar
        if (function_exists('register_sidebar')) {
            register_sidebar(array(
                'name' => __('Lifting Beams (Strong Bac)'),
                'id'   => 'lifting-beams-strong-bac-sidebar',
                'description'   => __( 'These are widgets for the sidebar.'),
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h2>',
                'after_title'   => '</h2>'
            ));
        }
        // Lifting Tongs Sidebar
        if (function_exists('register_sidebar')) {
            register_sidebar(array(
                'name' => __('Lifting Tongs Sidebar'),
                'id'   => 'lifting-tongs-sidebar',
                'description'   => __( 'These are widgets for the sidebar.'),
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h2>',
                'after_title'   => '</h2>'
            ));
        }
        // Material Handling Sidebar
        if (function_exists('register_sidebar')) {
            register_sidebar(array(
                'name' => __('Material Handling Sidebar'),
                'id'   => 'material-handling-sidebar',
                'description'   => __( 'These are widgets for the sidebar.'),
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h2>',
                'after_title'   => '</h2>'
            ));
        }
        // Pallet Lifters Sidebar
        if (function_exists('register_sidebar')) {
            register_sidebar(array(
                'name' => __('Pallet Lifters Sidebar'),
                'id'   => 'pallet-lifters-sidebar',
                'description'   => __( 'These are widgets for the sidebar.'),
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h2>',
                'after_title'   => '</h2>'
            ));
        }
        // Roll Lifters Sidebar
        if (function_exists('register_sidebar')) {
            register_sidebar(array(
                'name' => __('Roll Lifters Sidebar'),
                'id'   => 'roll-lifters-sidebar',
                'description'   => __( 'These are widgets for the sidebar.'),
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h2>',
                'after_title'   => '</h2>'
            ));
        }
        // Sheet Lifters Sidebar
        if (function_exists('register_sidebar')) {
            register_sidebar(array(
                'name' => __('Sheet Lifters Sidebar'),
                'id'   => 'sheet-lifters-sidebar',
                'description'   => __( 'These are widgets for the sidebar.'),
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h2>',
                'after_title'   => '</h2>'
            ));
        }
        // Spreader Beams Lifter Sidebar
        if (function_exists('register_sidebar')) {
            register_sidebar(array(
                'name' => __('Spreader Beams Sidebar'),
                'id'   => 'spreader-beams-sidebar',
                'description'   => __( 'These are widgets for the sidebar.'),
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h2>',
                'after_title'   => '</h2>'
            ));
        }

    // Mill Duty Submenu Sidebar
    if (function_exists('register_sidebar')) {
        register_sidebar(array(
            'name' => __('Mill Duty Sidebar'),
            'id'   => 'mill-duty-sidebar',
            'description'   => __( 'These are widgets for the sidebar.'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2>',
            'after_title'   => '</h2>'
        ));
    }
        // Coil Handling Sidebar
        if (function_exists('register_sidebar')) {
            register_sidebar(array(
                'name' => __('Coil Handling Sidebar'),
                'id'   => 'coil-handling-sidebar',
                'description'   => __( 'These are widgets for the sidebar.'),
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h2>',
                'after_title'   => '</h2>'
            ));
        }
        // Ingot Slab Handling Sidebar
        if (function_exists('register_sidebar')) {
            register_sidebar(array(
                'name' => __('Ingot Slab Handling Sidebar'),
                'id'   => 'ingot-slab-handling-sidebar',
                'description'   => __( 'These are widgets for the sidebar.'),
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h2>',
                'after_title'   => '</h2>'
            ));
        }
        // Lifting Beams (Mill Duty) Sidebar
        if (function_exists('register_sidebar')) {
            register_sidebar(array(
                'name' => __('Lifting Beams (Mill Duty) Sidebar'),
                'id'   => 'lifting-beams-mill-duty-sidebar',
                'description'   => __( 'These are widgets for the sidebar.'),
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h2>',
                'after_title'   => '</h2>'
            ));
        }
        // Sheet and Plate Handling Sidebar
        if (function_exists('register_sidebar')) {
            register_sidebar(array(
                'name' => __('Sheet and Plate Handling Sidebar'),
                'id'   => 'sheet-plate-handling-sidebar',
                'description'   => __( 'These are widgets for the sidebar.'),
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h2>',
                'after_title'   => '</h2>'
            ));
        }

    // Rig Master Submenu Sidebar
    if (function_exists('register_sidebar')) {
        register_sidebar(array(
            'name' => __('Rig Master Sidebar'),
            'id'   => 'rig-master-sidebar',
            'description'   => __( 'These are widgets for the sidebar.'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2>',
            'after_title'   => '</h2>'
        ));
    }
        // Rig Master Beam, Girder and Rail Grabs Sidebar
        if (function_exists('register_sidebar')) {
            register_sidebar(array(
                'name' => __('Beam, Girder and Rail Grabs Sidebar'),
                'id'   => 'beam-girder-and-rail-grabs-sidebar',
                'description'   => __( 'These are widgets for the sidebar.'),
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h2>',
                'after_title'   => '</h2>'
            ));
        }
        // Rig Master Beam End Fittings Sidebar
        if (function_exists('register_sidebar')) {
            register_sidebar(array(
                'name' => __('Beam End Fittings Sidebar'),
                'id'   => 'beam-end-fittings-sidebar',
                'description'   => __( 'These are widgets for the sidebar.'),
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h2>',
                'after_title'   => '</h2>'
            ));
        }
        // Rig Master Concrete Grabs & Tongs Sidebar
        if (function_exists('register_sidebar')) {
            register_sidebar(array(
                'name' => __('Concrete Grabs & Tongs Sidebar'),
                'id'   => 'concrete-grabs-tongs-sidebar',
                'description'   => __( 'These are widgets for the sidebar.'),
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h2>',
                'after_title'   => '</h2>'
            ));
        }
        // Rig Master Lifting and Spreader Beams Sidebar
        if (function_exists('register_sidebar')) {
            register_sidebar(array(
                'name' => __('Lifting and Spreader Beams Sidebar'),
                'id'   => 'lifting-and-spreader-beams-sidebar',
                'description'   => __( 'These are widgets for the sidebar.'),
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h2>',
                'after_title'   => '</h2>'
            ));
        }
        // Rig Master Load Leveling Slings Sidebar
        if (function_exists('register_sidebar')) {
            register_sidebar(array(
                'name' => __('Load Leveling Slings Sidebar'),
                'id'   => 'load-leveling-slings-sidebar',
                'description'   => __( 'These are widgets for the sidebar.'),
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h2>',
                'after_title'   => '</h2>'
            ));
        }
        // Rig Master Pipe & Manhole Handling Slings Sidebar
        if (function_exists('register_sidebar')) {
            register_sidebar(array(
                'name' => __('Pipe and Manhole Handling Sidebar'),
                'id'   => 'pipe-manhole-handling-sidebar',
                'description'   => __( 'These are widgets for the sidebar.'),
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h2>',
                'after_title'   => '</h2>'
            ));
        }
        // Rig Master Load Leveling Slings Sidebar
        if (function_exists('register_sidebar')) {
            register_sidebar(array(
                'name' => __('Specialty Grabs Sidebar'),
                'id'   => 'specialty-grabs-sidebar',
                'description'   => __( 'These are widgets for the sidebar.'),
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h2>',
                'after_title'   => '</h2>'
            ));
        }
        // Rig Master Synthetic Sling End Fittings Sidebar
        if (function_exists('register_sidebar')) {
            register_sidebar(array(
                'name' => __('Synthetic Sling End Fittings Sidebar'),
                'id'   => 'synthetic-sling-end-fittings-sidebar',
                'description'   => __( 'These are widgets for the sidebar.'),
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h2>',
                'after_title'   => '</h2>'
            ));
        }

    add_theme_support( 'post-thumbnails' );

    register_nav_menu('about-us', 'About Us Menu');
    register_nav_menu('primary', 'Primary Menu');
    register_nav_menu('wire-rope-menu', 'Wire Rope Menu');
    register_nav_menu('wr-tech-info-menu', 'Wire Rope Tech Info Menu');
    register_nav_menu('wr-tech-info-menu-fr', 'Wire Rope Tech Info French Menu');
    register_nav_menu('fiber-rope-menu', 'Fiber Rope Menu');
    register_nav_menu('wire-rope-end-attachments', 'Wire Rope End Attachments Menu');
    register_nav_menu('rud-main-menu', 'RUD Main Menu');
    register_nav_menu('wire-rope-slings', 'Wire Rope Slings Menu');
    register_nav_menu('chain-wire-mesh-slings', 'Chain & Wire Mesh Slings Menu');
    register_nav_menu('twin-path-and-synthetic-lifting-slings', 'Twin-Path & Synthetic Lifting Slings Menu');
    register_nav_menu('shackles-hooks-menu', 'Shackles and Hooks Menu');
    register_nav_menu('thimbles-corner-protectors-menu', 'Thimbles and Corner Protectors Menu');
    register_nav_menu('cable-clips-menu', 'Cable Clips Menu');
    register_nav_menu('load-positioning-swivels-menu', 'Load Positioning Swivels Menu');
    register_nav_menu('eye-bolts-hoist-rings-menu', 'Eye Bolts & Hoist Rings Menu');
    register_nav_menu('load-securement-menu', 'Load Securement Menu');
    register_nav_menu('clamps-magnets-menu', 'Clamps Magnets Menu');
    register_nav_menu('hoists-pullers-menu', 'Hoists Pullers Menu');
    register_nav_menu('load-monitoring-systems-menu', 'Load Monitoring Systems Menu');
    register_nav_menu('utility-specific-products-menu', 'Utility Specific Products Menu');
    register_nav_menu('inspection-testing', 'Inspection and Testing Menu');
    register_nav_menu('lifting-stories', 'PIU Lifting Stories Menu');
    register_nav_menu('lifting-solutions', 'PIU Lifting Solutions Menu');
    register_nav_menu('test-beds', 'Test Beds Menu');
    register_nav_menu('sling-inspection', 'Sling Inspection Menu');
    register_nav_menu('wearpads-inspection', 'Wear Pads Inspection Menu');
    register_nav_menu('load-release-systems', 'Load Release Systems Menu');
    register_nav_menu('below-the-hook-menu', 'Below the Hook Menu');
    register_nav_menu('below-the-hook-menu-fr', 'Below the Hook FR Menu');
    register_nav_menu('load-release-systems-menu', 'Load Release Systems Menu');
    register_nav_menu('strong-bac-menu', 'Strong Bac Menu');
        register_nav_menu('coil-lifters-menu', 'Coil Lifters Menu');
        register_nav_menu('duralite-composite-products-menu', 'Dura-Lite™ Composite Products Menu');
        register_nav_menu('lifting-beams-menu', 'Lifting Beams (Strong Bac) Menu');
        register_nav_menu('lifting-tongs-menu', 'Lifting Tongs Menu');
        register_nav_menu('material-handling-menu', 'Material Handling Menu');
        register_nav_menu('pallet-lifters-menu', 'Pallet Lifters Menu');
        register_nav_menu('roll-lifters-menu', 'Roll Lifters Menu');
        register_nav_menu('sheet-lifters-menu', 'Sheet Lifters Menu');
        register_nav_menu('spreader-beams-menu', 'Spreader Beams Menu');
    register_nav_menu('rig-master-menu', 'Rig Master Menu');
        register_nav_menu('beam-girder-and-rail-grabs-menu', 'Beam, Girder and Rail Grabs Menu');
        register_nav_menu('beam-end-fittings-menu', 'Beam End Fittings Menu');
        register_nav_menu('concrete-grabs-tongs-menu', 'Concrete Grabs & Tongs Menu');
        register_nav_menu('lifting-and-spreader-beams-menu', 'Lifting and Spreader Beams Menu');
        register_nav_menu('load-leveling-slings-menu', 'Load Leveling Slings Menu');
        register_nav_menu('specialty-grabs-menu', 'Specialty Grabs Menu');
        register_nav_menu('synthetic-sling-end-fittings-menu', 'Synthetic Sling End Fittings Menu');
        register_nav_menu('pipe-manhole-handling-menu', 'Pipe & Manhole Handling Menu');
    register_nav_menu('mill-duty-menu', 'Mill Duty Menu');
        register_nav_menu('coil-handling-menu', 'Coil Handling Menu');
        register_nav_menu('ingot-slab-handling-menu', 'Ingot and Slab Handling Menu');
        register_nav_menu('lifting-beams-mill-duty-menu', 'Lifting Beams (Mill Duty) Menu');
        register_nav_menu('sheet-plate-handling-menu', 'Sheet and Plate Handling Menu');

    /*
// Adjust the Excerpt
    function custom_excerpt_length( $length ) {
    return 25;
    }
    add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );


    function new_excerpt_more($more) {
        global $post;
        return '<a class="more" style="display:inline-block" href="'. get_permalink($post->ID) . '"> …MORE</a>';
    }
    add_filter('excerpt_more', 'new_excerpt_more');
*/



  // registers each of the taxonomy filter drop downs
function todo_restrict_manage_posts() {
    global $typenow;
    $args=array( 'public' => true, '_builtin' => false );
    $post_types = get_post_types($args);
    if ( in_array($typenow, $post_types) ) {
    $filters = get_object_taxonomies($typenow);
        foreach ($filters as $tax_slug) {
            $tax_obj = get_taxonomy($tax_slug);
            wp_dropdown_categories(array(
                'show_option_all' => __('Show All '.$tax_obj->label ),
                'taxonomy' => $tax_slug,
                'name' => $tax_obj->name,
                'orderby' => 'term_order',
                'selected' => $_GET[$tax_obj->query_var],
                'hierarchical' => $tax_obj->hierarchical,
                'show_count' => false,
                'hide_empty' => true
            ));
        }
    }
}
function todo_convert_restrict($query) {
    global $pagenow;
    global $typenow;
    if ($pagenow=='edit.php') {
        $filters = get_object_taxonomies($typenow);
        foreach ($filters as $tax_slug) {
            $var = &$query->query_vars[$tax_slug];
            if ( isset($var) ) {
                $term = get_term_by('id',$var,$tax_slug);
                $var = $term->slug;
            }
        }
    }
    return $query;
}
add_action( 'restrict_manage_posts', 'todo_restrict_manage_posts' );
add_filter('parse_query','todo_convert_restrict');

function move_posteditor( $hook ) {
    if ( $hook == 'post.php' OR $hook == 'post-new.php' ) {
        wp_enqueue_script( 'jquery' );
        add_action('admin_print_footer_scripts', 'move_posteditor_scripts');

    }
}
add_action( 'admin_enqueue_scripts', 'move_posteditor', 10, 1 );

function move_posteditor_scripts() {
    ?>
    <script type="text/javascript">
        jQuery('#postdiv, #postdivrich').prependTo('#your_meta_box_id .inside' );
</script>

<?php }

function get_root_parent_id($page_id) {
    global $wpdb;
    $parent = $wpdb->get_var("SELECT post_parent FROM $wpdb->posts WHERE post_type='page' AND post_status='publish' AND ID = '$page_id'");
    if ($parent == 0) return $page_id;
    else return get_root_parent_id($parent);
}

//function to replace invalid ellipsis with text linking to the post
function elpie_excerpt($text)
{
   return str_replace('[...]', '', $text);
}
add_filter('the_excerpt', 'elpie_excerpt');

// Variable & intelligent excerpt length.
function print_excerpt($length) { // Max excerpt length. Length is set in characters
	global $post;
	$text = $post->post_excerpt;
	if ( '' == $text ) {
		$text = get_the_content('');
		$text = apply_filters('the_content', $text);
		$text = str_replace(']]>', ']]>', $text);
	}
	$text = strip_shortcodes($text); // optional, recommended
	$text = strip_tags($text); // use ' $text = strip_tags($text,'<p><a>'); ' if you want to keep some tags

	$text = substr($text,0,$length);
	$excerpt = reverse_strrchr($text, '.', 1);
	if( $excerpt ) {
		echo apply_filters('the_excerpt',$excerpt);
	} else {
		echo apply_filters('the_excerpt',$text);
	}
}

// Returns the portion of haystack which goes until the last occurrence of needle
function reverse_strrchr($haystack, $needle, $trail) {
    return strrpos($haystack, $needle) ? substr($haystack, 0, strrpos($haystack, $needle) + $trail) : false;
}

// Remove Jetpack Carousel Comments
function filter_deshabilitar_comentarios($open, $idpost) {
    $post_actual = get_post($idpost);

    $salida = false;
    if( $post_actual->post_type != 'attachment' ) $salida = $open;

    return $salida;

}
add_filter( 'comments_open', 'filter_deshabilitar_comentarios', 10 , 2 );


function icl_post_languages(){
  $languages = icl_get_languages('skip_missing=0');
  if(1 < count($languages)){

    foreach($languages as $l){
      if(!$l['active']) $langs[] = '<a href="'.$l['url'].'">'.$l['translated_name'].'</a>';
    }
    echo join($langs);
  }
}

// show_admin_bar(false);

/**
*   Child page conditional
*   @ Accept's page ID, page slug or page title as parameters
*   Resource: http://www.kevinleary.net/wordpress-is_child-for-advanced-navigation/
*/
function is_child( $parent = '' ) {
    global $post;

    $parent_obj = get_page( $post->post_parent, ARRAY_A );
    $parent = (string) $parent;
    $parent_array = (array) $parent;

    if ( in_array( (string) $parent_obj['ID'], $parent_array ) ) {
        return true;
    } elseif ( in_array( (string) $parent_obj['post_title'], $parent_array ) ) {
        return true;
    } elseif ( in_array( (string) $parent_obj['post_name'], $parent_array ) ) {
        return true;
    } else {
        return false;
    }
}

?>

<?php
    global $post;
	$this_post = $post->ID;
	$terms = get_the_terms($post->ID, 'rigging-hardware-type');
	$slugs = array();
	foreach ( $terms as $term )
	if($term->term_id == 434) { 
	$term_slug = 'powerpoint-pp-fr';
	} elseif ($term->term_id ==435) {
	$term_slug = 'starpoint-vrs-fr';
	} elseif ($term->term_id ==431) {
	$term_slug = 'load-ring-vlbg-fr';
	} elseif ($term->term_id == 433) {
	$term_slug = 'load-ring-vwbg-vvwbg-fr';
	} elseif ($term->term_id == 436) {
	$term_slug = 'starpoint-eye-nut-vrm-fr';
	} elseif ($term->term_id == 426) {
	$term_slug = 'bolt-on-hooks-vabh-bvcgh-g-fr';
	} elseif ($term->term_id == 427) {
	$term_slug = 'eye-bolt-rs-fr';
	} elseif ($term->term_id == 428) {
	$term_slug = 'eye-nut-rm-fr';
	} elseif ($term->term_id == 432) {
	$term_slug = 'load-ring-vrbg-fr';
	} elseif ($term->term_id == 425) {
	$term_slug = 'accessories-fr';
	} elseif ($term->term_id == 429) {
	$term_slug = 'inox-star-fr';
	} elseif ($term->term_id == 430) {
	$term_slug = 'load-ring-lbg-rs-stainless-steel-fr';
	} elseif ($term->term_id == 444) {
	$term_slug = 'powerpoint-wpp-fr';
	} elseif ($term->term_id == 445) {
	$term_slug = 'powerpoint-wpph-fr';
	} elseif ($term->term_id == 440) {
	$term_slug = 'load-ring-vlbs-fr';
	} elseif ($term->term_id == 442) {
	$term_slug = 'load-ring-vrbs-fix-vrbs-fr';
	} elseif ($term->term_id == 441) {
	$term_slug = 'load-ring-vrbk-fr';
	} elseif ($term->term_id == 443) {
	$term_slug = 'mounting-hooks-vabh-w-vcgh-s-fr';
	} elseif ($term->term_id == 438) {
	$term_slug = 'aba-weldable-lifting-point-fr';
	} elseif ($term->term_id == 439) {
	$term_slug = 'lbs-rs-load-ring-welded-stainless-steel-fr';
	} elseif ($term->term_id == 422) {
	$term_slug = 'psa-inox-star-fr';
	} elseif ($term->term_id == 423) {
	$term_slug = 'psa-starpoint-fr';
	}
	$other_posts = new WP_Query('post_type=rigging-hardware&rigging-hardware-type='.$term_slug.'&posts_per_page=-1&orderby=id&order=ASC&suppress_filters=false');
	if ($other_posts->have_posts()): ?>
	<ul class="menu">
		<?php while ($other_posts->have_posts()): $other_posts->the_post(); ?>
			<li <?php if( $this_post == $post->ID ) { echo ' class="current-menu-item"'; } ?>>
				<a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
			</li>
		<?php endwhile; ?>
	</ul>
	<?php endif; wp_reset_query(); ?>
	<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('RUD Submenu Sidebar')) : else : ?> 
	<?php endif; ?>
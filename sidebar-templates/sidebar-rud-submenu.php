<?php
    global $post;
$this_post = $post->ID;
$terms = get_the_terms($post->ID, 'rigging-hardware-type');
$slugs = array();
foreach ( $terms as $term )
if($term->term_id == 61) { 
$term_slug = 'powerpoint-pp';
} elseif ($term->term_id ==67) {
$term_slug = 'starpoint-vrs';
} elseif ($term->term_id ==54) {
$term_slug = 'load-ring-vlbg';
} elseif ($term->term_id == 59) {
$term_slug = 'load-ring-vwbg-vvwbg';
} elseif ($term->term_id == 68) {
$term_slug = 'starpoint-eye-nut-vrm';
} elseif ($term->term_id == 74) {
$term_slug = 'bolt-on-hooks-vabh-bvcgh-g';
} elseif ($term->term_id == 75) {
$term_slug = 'eye-bolt-rs';
} elseif ($term->term_id == 76) {
$term_slug = 'eye-nut-rm';
} elseif ($term->term_id == 56) {
$term_slug = 'load-ring-vrbg';
} elseif ($term->term_id == 73) {
$term_slug = 'accessories';
} elseif ($term->term_id == 77) {
$term_slug = 'inox-star';
} elseif ($term->term_id == 53) {
$term_slug = 'load-ring-lbg-rs-stainless-steel';
} elseif ($term->term_id == 62) {
$term_slug = 'powerpoint-wpp';
} elseif ($term->term_id == 63) {
$term_slug = 'powerpoint-wpph';
} elseif ($term->term_id == 55) {
$term_slug = 'load-ring-vlbs';
} elseif ($term->term_id == 58) {
$term_slug = 'load-ring-vrbs-fix-vrbs';
} elseif ($term->term_id == 57) {
$term_slug = 'load-ring-vrbk';
} elseif ($term->term_id == 60) {
$term_slug = 'mounting-hooks-vabh-w-vcgh-s';
} elseif ($term->term_id == 72) {
$term_slug = 'aba-weldable-lifting-point';
} elseif ($term->term_id == 78) {
$term_slug = 'lbs-rs-load-ring-welded-stainless-steel';
} elseif ($term->term_id == 65) {
$term_slug = 'psa-inox-star';
} elseif ($term->term_id == 66) {
$term_slug = 'psa-starpoint';
}
$other_posts = new WP_Query('post_type=rigging-hardware&rigging-hardware-type='.$term_slug.'&posts_per_page=-1&orderby=id&order=ASC');
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
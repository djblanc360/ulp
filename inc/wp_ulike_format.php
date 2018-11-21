<?php
add_filter('wp_ulike_format_number','wp_ulike_new_format_number',10,3);
function wp_ulike_new_format_number($value, $num, $plus){
	if ($num >= 1000 && get_option('wp_ulike_format_number') == '1'):
	$value = round($num/1000, 2) . 'K';
	else:
	$value = $num;
	endif;
	return $value;
}

add_filter('wp_ulike_extra_structured_data', 'wp_ulike_add_extra_structured_data', 10);
function wp_ulike_add_extra_structured_data(){
	$post_meta = '<div style="display: none;" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">';
	$post_meta .= '<meta itemprop="name" content="WordPress" />';
	$post_meta .= '<div itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">';
	$post_meta .= '<meta itemprop="url" content="https://s.w.org/about/images/logos/wordpress-logo-hoz-rgb.png" />';
	$post_meta .= '</div>';
	$post_meta .= '</div>';
	return $post_meta;
}
 ?>

<?php
//remove +
add_filter('wp_ulike_format_number','wp_ulike_new_format_number',10,3);
function wp_ulike_new_format_number($value, $num, $plus){
	if ($num >= 1000 && get_option('wp_ulike_format_number') == '1'):
	$value = round($num/1000, 2) . 'K';
	else:
	$value = $num;
	endif;
	return $value;
}


//add 0 count
add_filter('wp_ulike_count_box_template', 'wp_ulike_change_my_count_box_template', 10, 2);
function wp_ulike_change_my_count_box_template($string, $counter) {
	$num = preg_replace("/[^0-9,.]/", "", $counter);
	if($num == 0) return $string;
}
 ?>

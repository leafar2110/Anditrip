<?php
/*
* Plugin Name: Curt title plugin
* Plugin URI: https://www.github.com/oxisrock
* Description: Titulo y excerpt cortando
* Version: 1.1
* Author: Francisco Aular
* Author URI: https://www.github.com/oxisrock
* License: GPL2
*/
add_filter('the_title', 'frantitle_title');
add_filter( 'the_content', 'frantitle_excerpt');
// modify Titles
function frantitle_title($text, $limit=10, $trailing='...') {
  if (!is_single() && !is_page() && !is_admin() ) {
  $words = explode(' ',$text);
  if ( count($words) > $limit) {
    $text = implode(' ', array_slice($words, 0, $limit)) . $trailing;
    return($text);
  }
  else {
    return($text);
  }
  }
  else {
    return($text);
  }
}
function frantitle_excerpt($excerpt , $limit=10, $trailing='...',$break=”.”) {
  if (!is_single() && !is_page() ) {
  $excerpt = get_the_content();
  $excerpt = strip_tags($excerpt);
  $words = explode(' ',$excerpt);
  if ( count($words) >= $limit) {
    $excerpt = implode(' ', array_slice($words, 0, $limit)). $trailing;
    return($excerpt);
  }
  else {
    return($excerpt);
  }
}
else {
  return($excerpt);
}
}

?>

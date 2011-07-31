<?php
/**
 * @package WordPress
 * @subpackage Manifest
 */

function remove_more_jump_link($link) {
  return preg_replace('/#more-\d+/i','',$link);
}
add_filter('the_content_more_link', 'remove_more_jump_link');

?>

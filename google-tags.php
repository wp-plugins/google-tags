<?php
/*
Plugin Name: Google Tags
Plugin URI: http://www.richardsramblings.com/plugins/wp-google-tags/
Description: Puts Google Ads section targeting tags around your pages, posts, and comments.
Version: 1.00
Author: Richard D. LeCour
Author URI: http://www.richardsramblings.com/
License: GPL
*/

add_filter ('the_content', 'google_tags', 1000);
add_filter ('comment_text', 'google_tags', 1000);

function google_tags ($text) {
   $text = "<!-- google_ad_section_start -->".$text."<!-- google_ad_section_end -->";
   return $text;
}

?>

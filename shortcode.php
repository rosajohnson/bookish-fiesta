<?php
/*
*Plugin Name: Wordpress ShortCode
*Description:Create your Wordpress shortcode.
Version: 1.0
Author: Rosa
*/



//Example 1: WP Shortcode to display form on any page or post.
function form_creation(){
?>	
<form>
	First name: <input type="text" name="firstname"><br>
	Last name: <input type="text" name="lastname"><br>
	Message: <textarea name="message">Enter text here...</textarea>
</form>
<?php
}
add_shortcode('form_creation_sc','form_creation');

//Example 2: WP Shortcode to display text on page or post.
function wp_first_shortcode(){
	echo "Hello,This is your another shortcode!";
}
add_shortcode('first_sc','wp_first_shortcode');

//Example 3: WP shortcode to share post or page on Twitter.
function ink_wp_shortcode($content=null){
	$post_url = get_permalink($post->ID);
	$post_title = get_the_title($post->ID);
	$tweet = '<a style="color:blue; font-size:20px;" href="http://twitter.com/home/?status=Read'. $post_title .'at'. $post_url .'"><b>Share on Twitter</b></a>';
	return $tweet;
}
add_shortcode('twitter_sc','ink_wp_shortcode');
?>




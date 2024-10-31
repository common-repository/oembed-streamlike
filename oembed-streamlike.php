<?php

/**
 * Main plugin file.
 *
 * Plugin Name: 		oEmbed Streamlike
 * Description: 		Declares Streamlike as an oEmbed provider
 * Version: 			1.0.0
 * Requires at least:	5.0
 * Requires PHP:		7.0
 * Author: 				triberswebstudio
 * License:           	GPLv3
 * License URI:       	https://www.gnu.org/licenses/gpl-3.0.html
 */


/**
 * Declares Streamlike as an oEmbed provider
 */
function oembed_streamlike() {
	wp_oembed_add_provider( 'https://cdn.streamlike.com/*', 'https://cdn.streamlike.com/oembed' );
	wp_oembed_add_provider( 'https://recette5.streamlike.com/*', 'https://recette5.streamlike.com/oembed' );
}
add_action( 'init', 'oembed_streamlike' );
<?php

	/* Stop on direct call. */
	defined('ABSPATH') or die("That's all Folks!");
	
	/*
	 * Plugin Name: Trancelantic Playlist
	 * Plugin URI: http://www.trancelantic.com/wordpress/playlist
	 * Description: Trancelantic Playlist shows your currently played song of your media player.
	 * Version: 1.2.1
	 * Author: Wilfried Katschmarz, Enrico Petrarolo
	 * Author URI: http://www.trancelantic.com
	 * License: GPL2
	 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
	 * Text Domain: trancelantic-playlist
 	 * Domain Path: /languages
 	 */

	/* Enjoy our script. */

	/* Define some path constants. */
	define('TLPL_PATH', dirname(__FILE__));
	define('TLPL_LANGUAGES_PATH', basename(dirname(__FILE__)).'/languages/');

	/* Include all needed functions and classes. */
	require_once TLPL_PATH.'/core/functions.php';
	require_once TLPL_PATH.'/channels/last-fm-channel.php';
	require_once TLPL_PATH.'/widgets/playlist.php';

	/* Add languages. */
	add_action('plugins_loaded', 'tlpl_load_languages');

	/* Add widgets. */
	add_action('widgets_init', 'tlpl_init_widgets');

	/* Add CSS files. */
	add_action('wp_head', 'tlpl_show_css_views');
 
?>
<?php

	/* Stop on direct call. */
	defined('ABSPATH') or die("That's all Folks!");
	
	/*
	 * Load custom language files.
	 */
	function tlpl_load_languages() 
	{
		load_plugin_textdomain('trancelantic-playlist', FALSE, TLPL_LANGUAGES_PATH);
	}

	/*
	 * Register and initialize all widgets.
	 */
	function tlpl_init_widgets()
	{
		register_widget('tlpl_playlist_widget');
	}
 
	/*
	 * Shows css views file.
	 */
	function tlpl_show_css_views() 
	{ 
		include TLPL_PATH.'/views/css.php';
	}

?>
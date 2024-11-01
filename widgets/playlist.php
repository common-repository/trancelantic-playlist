<?php

	/* Stop on direct call. */
	defined('ABSPATH') or die("That's all Folks!");

	/*
	 * WWidget class to show recently played tracks from channel.
	 */
	class tlpl_playlist_widget extends WP_Widget 
	{
		private $defaults = array();

		private function get_track_list($tracks, $number_of_tracks) 
		{
			$track_list = array();
			$number_of_track = 1;

			foreach ($tracks as $track) 
			{
				$track_list[] = $track;
				if ($number_of_track >= $number_of_tracks)
				{
					break;
				}
				$number_of_track += 1;
			}
			return $track_list;
		}

		function __construct() 
		{
			parent::__construct
			( 
				'tlpl_playlist_widget',
				/* TRANSLATORS: Name of widget */ __('Trancelantic Playlist', 'trancelantic-playlist'),
				array('description' => __('Shows your current playlist.', 'trancelantic-playlist'), )
			);

			$this->defaults = array (
				'title' => __('My recently songs', 'trancelantic-playlist'),
				'show-title' => true,
				'username' => '',
				'appearance' => 'current',
				'number-of-tracks' => 12,
				'show-current-track-in-list' => false
			);
		}

		public function form($instance) 
		{
			/* Normalizing data */
			$instance = wp_parse_args((array) $instance, $this->defaults);
		
			/* Modeling data */
			$title = $instance['title'];
			$show_title = (bool) $instance['show-title'];
			$username = $instance['username'];
			$appearance = $instance['appearance'];
			$number_of_tracks = (int) $instance['number-of-tracks'];
			$show_current_track_in_list = $instance['show-current-track-in-list'];

			/* Show the views */
			include TLPL_PATH.'/views/admin-title.php';
			include TLPL_PATH.'/views/admin-user.php';
			include TLPL_PATH.'/views/admin-appearance.php';
		}

		public function widget($args, $instance) 
		{
			/* Normalizing data */
			$instance = wp_parse_args((array) $instance, $this->defaults);
		
			/* Modeling data */
			$title = $instance['title'];
			$show_title = (bool) $instance['show-title'];
			$username = $instance['username'];
			$appearance = $instance['appearance'];
			$number_of_tracks = (int) $instance['number-of-tracks'];
			$show_current_track_in_list = $instance['show-current-track-in-list'];

			$channel = tlpl_last_fm_channel::get_instance($username);

			echo $args['before_widget'];			

			if ($show_title && !empty($title))
			{
				echo $args['before_title'] . $title . $args['after_title']; 
			}

			if (empty($channel->current_track))
			{
				include TLPL_PATH.'/views/error.php'; 
			} 
			else 
			{
				$track_list = $this->get_track_list($channel->played_tracks, $number_of_tracks);
				$track = $channel->current_track;

				if ($show_current_track_in_list) {
					/* Remove oldest track and add current at the top */
					array_pop($track_list);
					$track_list[] = $track;
				}

				if ($appearance == 'current') {
					include TLPL_PATH.'/views/current-track.php';
				}
				elseif ($appearance == 'gallery') {
					include TLPL_PATH.'/views/cover-gallery.php';
				}
				elseif ($appearance == 'list') {
					include TLPL_PATH.'/views/track-list.php';
				}
				else {
					include TLPL_PATH.'/views/error.php';
				}				
			}

			echo $args['after_widget'];
		}

		public function update($new_instance, $old_instance) 
		{
			$instance = array();

			$instance['title'] = isset($new_instance['title']) ? $new_instance['title'] : '';
			$instance['show-title'] = isset($new_instance['show-title']) ? true : false;
			$instance['username'] = isset($new_instance['username']) ? $new_instance['username'] : '';
			$instance['appearance'] = isset($new_instance['appearance']) ? $new_instance['appearance'] : '';
			$instance['number-of-tracks'] = isset($new_instance['number-of-tracks']) ? $new_instance['number-of-tracks'] : 0;
			$instance['show-current-track-in-list'] = isset($new_instance['show-current-track-in-list']) ? true : false;

			return $instance;
		}
	}

?>
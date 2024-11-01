<?php

	/* Stop on direct call. */
	defined('ABSPATH') or die("That's all Folks!");

	/*
	 * Get api data from last fm account.
	 */
	class tlpl_last_fm_channel
	{
		private $api_key = '444fa393dba7750214c4c579292c7c44';
		private $api_url = 'http://ws.audioscrobbler.com/2.0/?';

		/*
		 * Singleton instance. 
		 */
		protected static $instance;

		/*
		 * Current track. Empty array on error.
		 */
		public $current_track;

		/*
		 * Played tracks. Empty array on error. 
		 */
		public $played_tracks;

		/*
		 * Modelling track data from api track data.
		 */
		private function create_track_from_api_track($api_track)
		{ 
			$track = array();
			$track['CoverUrl'] = $api_track->image[3];
			$track['Title'] = $api_track->name;
			$track['Artist'] = $api_track->artist;
			$track['Album'] = $api_track->album;
			return $track;
		}

		/*
		 * Load user data from last.fm.
		 */
		private function load_api_user($username)
		{
			$templateUrl = $this->api_url.'method=%s&user=%s&api_key=%s';
			$url = sprintf($templateUrl, 'user.getinfo', $username, $this->api_key);
			return @simplexml_load_file($url);
		}

		/*
		 * Load last tracks from last.fm.
		 */
		private function load_api_tracks($username, $number_of_tracks)
		{
			$templateUrl = $this->api_url.'method=%s&user=%s&api_key=%s&limit=%s';
			$url = sprintf($templateUrl, 'user.getrecenttracks', $username, $this->api_key, $number_of_tracks);

			return @simplexml_load_file($url);
		}

		/*
		 * Load all api data from last.fm.
		 */
		private function load_tracks($username)
		{
			if ($this->current_track == null) 
			{
				$this->current_track = array();
				$this->played_tracks = array();

				/* Read 50 as defualt + 1 as current track */
				$number_of_tracks = 51;

				$api_tracks = $this->load_api_tracks($username, $number_of_tracks);

				if (!empty($api_tracks->recenttracks->track))
				{
					foreach ($api_tracks->recenttracks->track as $api_track) 
					{ 
						$track = $this->create_track_from_api_track($api_track);

						if (empty($this->current_track))
						{
							$this->current_track = $track;
						}
						else
						{
							$this->played_tracks[] = $track;
						} 
					}
				}
			}
		}

		/*
		 * Gets singleton instamce from this channel.
		 */
		public static function get_instance($username)
		{
		    if(is_null(self::$instance))
		    {
		    	$instance = new self();
				$instance->init($username);
		        self::$instance = $instance;
		    }
		    return self::$instance;
		}

		/*
		 * Gets cover url for a track without cover or on errors.
		 */
		public function get_no_cover_url() 
		{
			return 'http://download.trancelantic.com/wordpress/playlist/no_cover.jpg';
		} 

		/*
		 * Initialize last.fm api data.
		 */
		public function init($username)
		{
			$this->load_tracks($username);
		}
	}

?>

	<p>
		<label for="<?php echo $this->get_field_id('appearance'); ?>">
			<?php _e('Appearance:', 'trancelantic-playlist'); ?>
		</label>
		<select 
			id="<?php echo $this->get_field_id('appearance'); ?>" 
			name="<?php echo $this->get_field_name('appearance'); ?>"
		>
			<option value="current" <?php selected($appearance,'current'); ?>><?php _e('Current Track', 'trancelantic-playlist'); ?></option>
			<option value="gallery" <?php selected($appearance,'gallery'); ?>><?php _e('Cover gallery', 'trancelantic-playlist'); ?></option>
			<option value="list" <?php selected($appearance,'list'); ?>><?php _e('Track list', 'trancelantic-playlist'); ?></option>
		</select>
	</p>
	
	<p>
		<label for="<?php echo $this->get_field_id('number-of-tracks'); ?>">
			<?php _e('Number of tracks:', 'trancelantic-playlist'); ?>
		</label>
		<input 
			class="widefat" 
			id="<?php echo $this->get_field_id('number-of-tracks'); ?>" 
			name="<?php echo $this->get_field_name('number-of-tracks'); ?>" 
			type="number" 
			value="<?php echo esc_attr($number_of_tracks); ?>"
			min="1" 
			max="50"
		/>
	</p>

	<p>
		<input
			id="<?php echo $this->get_field_id('show-current-track-in-list'); ?>" 
			name="<?php echo $this->get_field_name('show-current-track-in-list'); ?>" 
			type="checkbox" 
			<?php checked($show_current_track_in_list); ?> 
		/>
		<label for="<?php echo $this->get_field_id('show-current-track-in-list'); ?>">
			<?php _e('Show current track in list or in gallery', 'trancelantic-playlist'); ?>
		</label>
	</p>

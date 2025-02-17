
	<p>
		<label for="<?php echo $this->get_field_id('title'); ?>">
			<?php _e('Title:', 'trancelantic-playlist'); ?>
		</label>
		<input 
			class="widefat" 
			id="<?php echo $this->get_field_id('title'); ?>" 
			name="<?php echo $this->get_field_name('title'); ?>" 
			type="text" 
			value="<?php echo esc_attr($title); ?>" 
		/>
	</p>
	
	<p>
		<input
			id="<?php echo $this->get_field_id('show-title'); ?>" 
			name="<?php echo $this->get_field_name('show-title'); ?>" 
			type="checkbox" 
			<?php checked($show_title); ?> 
		/>
		<label for="<?php echo $this->get_field_id('show-title'); ?>">
			<?php _e('Show Title', 'trancelantic-playlist'); ?>
		</label>
	</p>

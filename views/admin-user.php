
	<p>
		<label for="<?php echo $this->get_field_id('username'); ?>">
			<?php _e('Username:', 'trancelantic-playlist'); ?>
		</label>
		<input 
			class="widefat" 
			id="<?php echo $this->get_field_id('username'); ?>" 
			name="<?php echo $this->get_field_name('username'); ?>" 
			type="text" 
			value="<?php echo esc_attr($username); ?>" 
		/>
	</p>

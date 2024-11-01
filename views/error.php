
	<div class="tlpl-widget">
		<div class="tlpl-current-track">

			<table class="tlpl-single-track">
				<tr> 
					<td class="tlpl-single-track-cover">
						<img class="tlpl-single-track-cover" src="<?php echo $channel->get_no_cover_url(); ?>" />
					</td>
					<td class="tlpl-single-track-content">
						<table class="tlpl-single-track-content">
							<tr>
								<td class="tlpl-single-track-title"> 
									<?php /* TRANSLATORS: Title on error */ _e('Ups, we did it again!', 'trancelantic-playlist'); ?>
								</td>
							</tr>
							<tr>
								<td class="tlpl-single-track-error">
									<?php /* TRANSLATORS: Message on error */ _e('Sorry, but this channel is currently offline.', 'trancelantic-playlist'); ?>
								</td>
							</tr>
						</table>
					</td>
				</tr>
			</table>




		</div>

	</div>
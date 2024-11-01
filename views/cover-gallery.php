
	<div class="tlpl-widget">
		<div class="tlpl-cover-gallery">

<?php foreach ($track_list as $track): ?>

			<div class="tlpl-cover-gallery-item">
				<img class="tlpl-cover-gallery-item" src="<?php echo $track['CoverUrl']; ?>" />
			</div>

<?php endforeach; ?>

		</div>
	</div>

<?php
 
	$debug = false;

	$coverSize = 72;
	$coverContentSpace = $coverSize * 0.18;

	$minSize = $coverSize * 3.0;
	$maxSize = $coverSize * 4.5;

	$fontBig = $coverSize * 0.24;
	$fontSmall = $coverSize * 0.2;

?>

	<style type='text/css'> 

		/*  Widget  */

		div.tlpl-widget 
		{     
		    width: 100%;
		    padding: 0px;
			margin: 0px;
			<?php echo ($debug ? 'border: 1px solid red; padding: 1px; ' : 'border: none; ') ; ?> 
		}
		
		/* Current Track */

		div.tlpl-current-track 
		{   
		    width: 100%;
		    min-width: <?php echo $minSize; ?>px;
		    max-width: <?php echo $maxSize; ?>px;
			margin: 5px;
			<?php echo ($debug ? 'border: 1px solid yellow; padding: 1px; ' : 'border: none; ') ; ?> 
		}

		/*  Cover Gallery  */

		div.tlpl-cover-gallery 
		{   
			display: flex;
  			flex-wrap: wrap;
  			<?php echo ($debug ? 'border: 1px solid yellow; padding: 1px; ' : 'border: none; ') ; ?> 
  		}
		div.tlpl-cover-gallery-item 
		{
			border: 2px solid lightgrey;
			float: left;
			width: 75px;
			margin: 5px;
			<?php echo ($debug ? 'border: 1px solid pink; padding: 1px; ' : 'border: none; ') ; ?> 
		}
		img.tlpl-cover-gallery-item 
		{
			<?php echo ($debug ? 'border: 1px solid yellow; ' : 'border: 2px solid lightgrey; ') ; ?>
		}

		/*  Track List  */

		div.tlpl-track-list
		{
			<?php echo ($debug ? 'border: 1px solid yellow; padding: 1px; ' : 'border: none; ') ; ?> 
		}
		div.tlpl-track-list-item 
		{
			margin: 5px;
			margin-bottom: 8px;
			<?php echo ($debug ? 'border: 1px solid pink; padding: 1px; ' : 'border: none; ') ; ?> 
		}

		/*  Single Track Table */

		table.tlpl-single-track
		{   
		    width: 100%;
 			height: 100%;
			margin: 0px;
			padding: 0px;
			<?php echo ($debug ? 'border: 1px solid blue; padding: 1px; ' : 'border: none; ') ; ?> 
		}
		td.tlpl-single-track-cover
		{   
		  	vertical-align: middle;
			margin: 0px;
			padding: 0px;
			width: <?php echo $coverSize; ?>px;
 			height: <?php echo $coverSize; ?>px;
			<?php echo ($debug ? 'border: 1px solid red; padding: 1px; ' : 'border: none; ') ; ?>
		}
		img.tlpl-single-track-cover
		{   
			object-fit: scale-down;
 			<?php echo ($debug ? 'border: 1px solid yellow; ' : 'border: 2px solid lightgrey; ') ; ?>
		}
		td.tlpl-single-track-content
		{	
			vertical-align: middle;
			margin: 0px;
			padding: 2px;
			padding-left: <?php echo $coverContentSpace; ?>px;
			<?php echo ($debug ? 'border: 1px solid red; padding: 1px; ' : 'border: none; ') ; ?>
		}

		/*  Single Track Content Table  */

		table.tlpl-single-track-content
		{   
			table-layout: fixed;
			width: 100%;
 			height: 100%;
 			margin: 0px;
			padding: 0px;
			<?php echo ($debug ? 'border: 1px solid purple; padding: 1px; ' : 'border: none; ') ; ?> 
		}
		td.tlpl-single-track-title
		{ 
			font-size: <?php echo $fontBig; ?>px;
			line-height: 1.0; text-align: left; vertical-align: top;
			font-weight: 200;
			margin: 0px;
			padding: 0px;
			height: 100%;
			<?php echo ($debug ? 'border: 1px solid red; padding: 1px; ' : 'border: none; ') ; ?>
		}
		td.tlpl-single-track-artist
		{ 
			font-size: <?php echo $fontSmall; ?>px;
			line-height: 1.0; text-align: left; vertical-align: top;
			font-weight: 600;
			margin: 0px;
			padding: 0px;
			overflow: hidden; 
			text-overflow: ellipsis;
			white-space: nowrap;
			<?php echo ($debug ? 'border: 1px solid red; padding: 1px; ' : 'border: none; ') ; ?>
		}
		td.tlpl-single-track-album
		{ 	
			font-size: <?php echo $fontSmall; ?>px;
			line-height: 1.0; text-align: left; vertical-align: bottom;
			overflow: hidden; 
			text-overflow: ellipsis;
			white-space: nowrap;
			margin: 0px;
			padding: 0px;
			<?php echo ($debug ? 'border: 1px solid red; padding: 1px; ' : 'border: none; ') ; ?>
		}
		td.tlpl-single-track-error
		{   
			font-size: <?php echo $fontSmall; ?>px;
			line-height: 1.0; text-align: left; vertical-align: bottom;
			margin: 0px;
			padding: 0px;
			<?php echo ($debug ? 'border: 1px solid red; padding: 1px; ' : 'border: none; ') ; ?>
		}
		
	</style>

	
	<?php
		$dir="./songs/";
		$files=glob($dir.'*.m3u');
		foreach($files as $filename) {
	?>
	
	<li class="mp3item">
		<a href=" <?= '?playlist='.basename($filename) ?> ">
			<?= basename($filename); ?>
		</a>
		( 
		<?php 
		if(is_file($filename)){
			if(filesize($filename)<1024) print filesize($filename).'b';
				elseif(filesize($filename)<1024*1024) print round(filesize($filename)/1024,2).'kb';
					elseif(filesize($filename)<1024*1024*1024) print round(filesize($filename)/(1024*1024),2).'mb';
		
		} ?> 
		)
	</li>

	<?php } ?>
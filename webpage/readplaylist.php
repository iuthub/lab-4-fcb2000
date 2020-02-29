	<?php
		$dir="./songs/";
		$txtfile=file($dir.$playlist);
		foreach ($txtfile as $text) {
		$filename=$dir.$text;
		if($text[0]=='#') continue;	
	?>
		<li class="mp3item">
			<a href=" <?= $dir.$text ?> ">
				<?= $text; ?>			
			</a>
		( 
		<?php
		//print $filename;
		
		$t=$dir.trim($text);
		if(is_file($t)){
			//print '@'.$t.'@';
			if(filesize($t)<1024) print filesize($t).'b';
				elseif(filesize($t)<1024*1024) print round(filesize($t)/1024,2).'kb';
					elseif(filesize($t)<1024*1024*1024) print round(filesize($t)/(1024*1024),2).'mb';
		} 
		?> 
		)
		</li>
	<?php } ?>

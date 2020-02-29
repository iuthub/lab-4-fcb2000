	<?php 
		if(isset($_REQUEST["playlist"]))
			$playlist = $_REQUEST["playlist"];	
 	?>
	

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
 "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Music Viewer</title>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<link href="viewer.css" type="text/css" rel="stylesheet" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

	</head>
	<body>
		<div id="header">
			<?php 
				if(isset($_REQUEST["playlist"])){
				$playlist=$_REQUEST["playlist"];
				include 'backlink.php'; 
				}
			?>
			<h1>190M Music Playlist Viewer</h1>
			<h2>Search Through Your Playlists and Music</h2>
		</div>
		
		<!-- Shuffle -->
		<input id="toggle-demo" type="checkbox" data-toggle="toggle">
		
		<div id="listarea">
			<ul id="musiclist">
	<?php

		if (isset($playlist)) 
	 		include 'readplaylist.php';	
		else
		{ 
			include 'mp3items.php';
			//include 'playlistitems.php';
			include 'm3uitems.php';
		}
	?>
	

			</ul>		

		</div>
	</body>
</html>

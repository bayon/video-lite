<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="cache-control" content="no-cache, must-revalidate, post-check=0, pre-check=0" />
		  <meta http-equiv="cache-control" content="max-age=0" />
		  <meta http-equiv="expires" content="0" />
		  <meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
		  <meta http-equiv="pragma" content="no-cache" />
 		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">   
 

	</head>
	<body>
		<!-- HTML -->
		<h1>Video-Lite
		<!-- data-ajax=false is for jquery mobile -->
		<form action="server.php" method="post" data-ajax="false" enctype="multipart/form-data">
			Upload Video Selfie
			<input type="file" name="fileToUpload" id="fileToUpload" capture accepts="image/*">
			<input type="submit" value="Upload Video" name="submit">
		</form>
		<!--<input type="file" capture accepts="image/*" id= "cam"> -->
		<div id="scrollList" style="width:94%;margin-left:2%;margin-top:30px;height:200px;overflow-y:scroll;border:solid 5px #000;">
		<?php 
		/* RECONFIGURE: your base url appropriately.  */
		$baseurl = "http://" . $_SERVER['SERVER_NAME'] . ":8888".$_SERVER['REQUEST_URI'];  
		$files1 = scandir(dirname(__FILE__)."/uploads");
		foreach($files1 as $file){
			if($file != ".." && $file != "." &&$file != ".DS_Store"){
				echo('<video controls="controls" width="100%" height="auto" name="Video Name" src="'.$baseurl.'uploads/'.$file.'">
				<?php echo($file); ?>
			</video>');
			}
		}
		?>
		</div>
		<script>
			//SCRIPT
			var cam = document.getElementById("fileToUpload");
			cam.onchange = function(event) {
				//An image has been captured.
				if (event.target.files.length == 1 && event.target.files[0].type.indexOf("image/") == 0) {
					// We have an image, most likely from a camera
				}
			};
		</script>

	</body>
</html>


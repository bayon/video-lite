<html>
<?php $servername = $_SERVER["SERVER_NAME"]; ?>
<body onload="redirector()">
<script>

function redirector(){
	// Redirector function might be avoided altogether...
	// just make sure the base url ends with the directory and NOT the file...
	// otherwise in mycase the iphone choked on it.
	var base_url = window.location.origin;
	var location = base_url+'/videoLite/';
 	window.location.assign(location);
}
 
</script>
</body>
</html>
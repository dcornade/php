<?php if(!isset($_SESSION['webcount'])){
	$_SESSION['webcount']=1;
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<link rel="stylesheet" type="text/css" href="assets/effect.css">
<link rel="stylesheet" type="text/css" href="assets/css/all.css">
<body>
	<div class="footer"><hr>
		<marquee>This project is made by Durgesh Tiwari Roll-P05201913C</marquee>
		<?php 
	$_SESSION['webcount']++;
	echo "<center>Website is visited ".$_SESSION['webcount']." Times </center>";
?>
	</div>
	
</body>
</html>

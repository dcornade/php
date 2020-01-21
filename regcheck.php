<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php 
	$q=$_GET['q'];
	$conn=mysqli_connect("localhost","root","","durcollege");
	if(!$conn){
		die("COnnection Error");
	}
	$str45="select * from pdata";
	$result34=mysqli_query($conn,$str45);
	while($rowser=mysqli_fetch_assoc($result34)){
		if($rowser['registration']==$q){
			echo "Register Number Must be Unique";
		}
	}
	echo "XML is working";
	?>
</body>
</html>
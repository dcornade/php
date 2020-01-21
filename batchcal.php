<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
</body>
</html>
<?php 
$conn=mysqli_connect("localhost","root","","durcollege");
if(!$conn){
	die("error Connecting".mysqli_error($conn));
}
$p=$_GET['q'];
$str="SELECT * FROM `batch` WHERE `batch`='$p' ";
	$res=mysqli_query($conn,$str);

echo "Select The Batch: -<select name='s3'><option>select the batch</option>";
	while($rows=mysqli_fetch_assoc($res)){
			echo "<option>".$rows['bname']."</option>";
		}
echo "</select>"

?>
<?php include("logo.php");
include("links.php");
$conn=mysqli_connect("localhost","root","","durcollege");
if(!$conn){
	die("Connection Error".mysqli_errno());
}
$str="select * from mdata";
$result=mysqli_query($conn,$str);
while($rows=mysqli_fetch_assoc($result)){
	if($rows['name']==$_SESSION['user']){
		$n=$rows['name'];
		$r=$rows['sroll'];
		$m1=$rows['mod1'];
		$m2=$rows['mod2'];
		$m3=$rows['mod3'];
		$m4=$rows['mod4'];
		$m5=$rows['mod5'];
		$ttl=$rows['grade'];
		$grd=$rows['grade'];
	}
}
?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<link rel="stylesheet" type="text/css" href="assets/effect.css">
<link rel="stylesheet" type="text/css" hresf="assets/css/all.css">
<body class="prflbody">
	<form method="post">
	<div >
		<fieldset class="lginfo">
		<legend>Your Marks</legend>
			<table>
				<tr>
			<th>Name: -</th>
				<th><input type="text" name="i1" value="<?php echo $n; ?>"</th></tr>
								<tr>
									<th>RollNo:-</th><th><input type="text" name="i2" value="<?php echo $r; ?>"</th></tr>
				<tr><th>Module - I: -</th><th><input type="text" name="i3" value="<?php echo $m1; ?>"</th></tr>
				<tr><th>Module - II: -</th><th><input type="text" name="i4" value="<?php echo $m2; ?>"</th></tr>
				<tr><th>Module - III: -</th><th><input type="text" name="i5" value="<?php echo $m3; ?>"</th></tr>
				<tr><th>Module - IV: -</th><th><input type="text" name="i6" value="<?php echo $m4; ?>"</th></tr>
				<tr><th>Module - V: -</th><th><input type="text" name="i7" value="<?php echo $m5; ?>"</th></tr>
				<tr><th>Total: -</th><th><input type="text" name="i8" value="<?php echo $ttl; ?>"</th></tr>
				<tr><th>Grade: -</th><th><input type="text" name="i9" value="<?php echo $grd; ?>"</th></tr>
			</table>
		</fieldset>
</body>
</html>
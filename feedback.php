<?php include("logo.php");
include("links.php");
$conn=mysqli_connect("localhost","root","","durcollege");
	if(!$conn){
		die("Error in Connecting".mysqli_error());
	}
if(isset($_POST['b1'])){
	$n1=ucwords($_POST['i1']);
	$p1=$_POST['i2'];
	$e1=$_POST['i3'];
	$f1=$_POST['i4'];
	$s1=$_POST['i5'];
	$l1=$_POST['t1'];
	$str="insert into fedback values('$n1','$p1','$e1','$f1','$s1','$l1')";
	mysqli_query($conn,$str);
	
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<link rel="stylesheet" href="assets/effect.css">
<link rel="stylesheet" href="assets/css/all.css">
<body>
	<form method="post" name="frm1">
	<div class="feedback">
	<h1>We want to Improve in all the way we can! help us improve more by some suggestions</h1>	
	<fieldset>
		<legend>Feedback Form</legend>
		<table>
		<tr><th>Name: - </th><th><input type="text" name="i1" value=""></th></tr>
		<tr><th>Phone No: - </th><th><input type="text" name="i2" value=""></th></tr>
		<tr><th>Email Id: - </th><th><input type="text" name="i3" value=""></th></tr>
		<tr><th>Feedback Subject</th><th><input type="text" name="i4" value=""></th></tr>
		<tr><th>Short Discription: -</th><th><input type="text" name="i5" value=""></th></tr>
		<tr><th rowspan="4">Long Discription</th><th  rowspan="4"><textarea name="t1" rows="4" cols="54"></textarea></th></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
		<tr><td><button type="submit" name="b1">Submit</button></td><td><button type="submit" name="b2" style="background-color:red;">Cancel</button></td></tr>
		</table>
	</fieldset>
	</div>
	</form>
</body>
</html>
<?php include("footer.php");?>
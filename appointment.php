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
	$d1=$_POST['d1'];
	$t1=$_POST['s1'];
	$str="insert into apoont value('$n1','$p1','$e1','$d1','$t1')";
	mysqli_query($conn,$str);
	header("location:index.php");
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body class="appontbody">
	<form method="post" name="frm1">
	<div class="feedback">
	<h1>Discover Yourself with Councelling with us and Discover your Passion!</h1>	
	<fieldset>
		<legend>Appointment Form</legend>
		<table>
		<tr><th>Name: - </th><th><input type="text" name="i1"></th></tr>
		<tr><th>Phone No: - </th><th><input type="text" name="i2" value=""></th></tr>
		<tr><th>Email Id: - </th><th><input type="text" name="i3" value=""></th></tr>
		<tr><th>Appointment Date: -</th><th><input type="date" name="d1" value=""></th></tr>
		<tr><th>Appointment Time: -</th><th><select name="s1">
			<option>10:00PM-11.00PM</option>
			<option>11:00PM-12.00PM</option>
			<option>12:00PM-01.00AM</option>
			<option>01:00AM-02.00PM</option>
			<option>02:00AM-03.00PM</option>
			<option>03:00AM-04.00PM</option>
			<option>04:00AM-05.00PM</option></select></th></tr>
		
		<tr><td><button type="submit" name="b1">Submit</button></td><td><button type="submit" name="b2" style="background-color:red;">Cancel</button></td></tr>
		</table>
	</fieldset>
	</div>
	</form>
</body>
</html>
<?php include("footer.php");?>
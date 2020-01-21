<?php include("logo.php");
include("links.php");
$conn=mysqli_connect("localhost","root","","durcollege");
	if(!$conn){
		die("Error in Connecting".mysqli_error());
	}
$str1="select * from fedback";
$result2=mysqli_query($conn,$str1);
while($rows=mysqli_fetch_assoc($result2)){
	if($rows['name']==$_SESSION['fed']){
						$n=$rows['name'];
						$p=$rows['phone'];
						$q=$rows['email'];
						$g=$rows['fs'];
						$h=$rows['sd'];
						$y=$rows['ld'];
					}	
					}

if(isset($_POST['b1'])){
	header("location:notific.php");
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
	<h1>Full view of the Feedback</h1>	
	<fieldset>
		<legend>Feedback Form</legend>
		<table>
		<tr><th>Name: - </th><th><input type="text" name="i1" value="<?php echo $n ?>"></th></tr>
		<tr><th>Phone No: - </th><th><input type="text" name="i2" value="<?php echo $p ?>"></th></tr>
		<tr><th>Email Id: - </th><th><input type="text" name="i3" value="<?php echo $q ?>"></th></tr>
		<tr><th>Feedback Subject</th><th><input type="text" name="i4" value="<?php echo $g ?>"></th></tr>
		<tr><th>Short Discription: -</th><th><input type="text" name="i5" value="<?php echo $h ?>"></th></tr>
		<tr><th rowspan="4">Long Discription</th><th  rowspan="4"><textarea name="t1" rows="4" cols="54"><?php echo $y ?></textarea></th></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
		<tr><td><button type="submit" name="b1">Back</button></td></tr>
		</table>
	</fieldset>
	</div>
	</form>
</body>
</html>
<?php include("footer.php");?>
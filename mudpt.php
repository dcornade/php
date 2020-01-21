<?php include("logo.php");
include("links.php");
$conn=mysqli_connect("localhost","root","","durcollege");
if(!$conn){
	die("Error in Connecting".mysqli_query($conn));
}
$str3="select * from mdata";
$result4=mysqli_query($conn,$str3);
if(isset($_POST['b1'])){
	$n1=$_POST['i1'];
	$r1=$_POST['i2'];
	$m11=$_POST['i3'];
	$m12=$_POST['i4'];
	$m13=$_POST['i5'];
	$m14=$_POST['i6'];
	$m15=$_POST['i7'];
	$t1=$_POST['i8'];
	$g1=$_POST['i9'];
	$str5="UPDATE `mdata` SET `sroll`='$r1',`name`='$n1',`mod1`='$m11',`mod2`='$m12',`mod3`='$m13',`mod4`='$m14',`mod5`='$m15',`total`='$t1',`grade`='$g1' WHERE `name`='$n1'";
	mysqli_query($conn,$str5);
	header("location:class.php");
}
if(isset($_POST['b2'])){
	header("location:class.php");
}

while($rows5=mysqli_fetch_assoc($result4)){
	if($rows5['name']==$_SESSION['upd']){
		$n=$rows5['name'];
		$r=$rows5['sroll'];
		$m1=$rows5['mod1'];
		$m2=$rows5['mod2'];
		$m3=$rows5['mod3'];
		$m4=$rows5['mod4'];
		$m5=$rows5['mod5'];
		$t=$rows5['total'];
		$g=$rows5['grade'];
	}
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<script>function calc(){
		 var a=Number(document.frm1.i3.value);
		var b=Number(document.frm1.i4.value);
		var c=Number(document.frm1.i5.value);
		var d=Number(document.frm1.i6.value);
		var e=Number(document.frm1.i7.value);
		var total=a+b+c+d+e;
		document.frm1.i8.value=total;
	}</script>
<body>
	<form method="post" name="frm1">
<fieldset class="ifeld">
	<legend>Update Given Marks</legend>
	<table>
		<tr><th>Name: -</th><th><input type="text" name="i1" value="<?php echo $n ?>" readonly></th></tr>
		<tr><th>Roll Number -</th><th><input type="text" name="i2" value="<?php echo $r ?>" readonly></th></tr>
		<tr><th>Module-I</th><th><input type="text" name="i3" value="<?php echo $m1 ?>"></th><th>Module-II</th><th><input type="text" name="i4" value="<?php echo $m2 ?>"></th></tr>
		<tr><th>Module-III</th><th><input type="text" name="i5" value="<?php echo $m3 ?>"></th><th>Module-IV</th><th><input type="text" name="i6" value="<?php echo $m4 ?>"></th></tr>
		<tr><th>Module-V</th><th><input type="text" name="i7" value="<?php echo $m5 ?>" onChange="calc()"></th></tr>
		<tr><th>Total: -</th><th><input type="text" name="i8" value="<?php echo $t ?>"></th></tr>
		<tr><th>Grade: -</th><th><input type="text" name="i9" value="<?php echo $g ?>"></th></tr>
		<tr><th><button type="submit" name="b1">Update</button></th><th><button type="submit" name="b2" style="background-color:red">Cancel</button></th></tr>
	</table>
		</fieldset>
</body>
</html>
<?php include("footer.php");
?>
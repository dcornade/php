<?php include("logo.php");
include("links.php");
$conn=mysqli_connect("localhost","root","","durcollege");
if(!$conn){
	die("Error in Connecting".mysqli_query($conn));
}
if(isset($_POST['b1'])){
	$n1=$_POST['i1'];
	$r1=$_POST['i2'];
	$p1=$_POST['s1'];
	$reg1=$_POST['i3'];
	$c1=$_POST['s2'];
	$b1=$_POST['s3'];
	$cty1=$_POST['i4'];
	$db1=$_POST['d1'];
	$jd1=$_POST['d2'];
	$str2="UPDATE `pdata` SET `name`='$n1',`privilage`='$p1',`registration`='$reg1',`batch`='$b1',`course`='$c1',`sroll`='$r1',`address`='$cty1',`bdate`='$jd1',`jdate`='$jd1' WHERE `name`='$n1'";
	mysqli_query($conn,$str2);
	header("location:data.php");
}
$str="select * from pdata";
$str1="select * from batch";
$result=mysqli_query($conn,$str);
$result1=mysqli_query($conn,$str1);
while($rows=mysqli_fetch_assoc($result)){
	if($rows['name']==$_SESSION['upd']){
		$n=$rows['name'];
		$p=$rows['privilage'];
		$r=$rows['registration'];
		$b=$rows['batch'];
		$c=$rows['course'];
		$roll=$rows['sroll'];
		$add=$rows['address'];
		$bd=$rows['bdate'];
		$jd=$rows['jdate'];
	}
}
if(isset($_POST['b2'])){
	header("location:data.php");
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<script>
function sel(str){
    if (str == "") {
        document.getElementById("select").innerHTML = "";
        return;
    } else {
        if (window.XMLHttpRequest) {
            obj = new XMLHttpRequest();
        } 
        obj.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("select").innerHTML = this.responseText;
            }
        };
        obj.open("GET","upcal.php?q="+str,true);
        obj.send();
    }
}
</script>
<body>
	<form method="post">
<fieldset class="ifeld">
	<legend>Update Personal Information</legend>
		<table>
			<tr><th>Name: -</th><th><input type="text" name="i1" value="<?php echo $n; ?>" readonly></th></tr>
			<tr><th>Roll Number: -</th><th><input type="text" name="i2" value="<?php echo $roll; ?>"></th><th>Privilage: -</th>
			<th><select name="s1"><option <?php if($p=="admin"){ echo "selected";}?>>admin</option><option <?php if($p=="user"){ echo "selected";}?>>user</option></select></th></tr>
			<tr><th>Resgistration Number</th><th><input type="text" name="i3" value="<?php echo $r; ?>"</th></tr>
			<tr><th>Course</th><th><select name="s2" onchange="sel(this.value)">
												<option <?php if($c=="N.A"){ echo "selected";}?> >N.A</option>
												<option <?php if($c=="CCA"){ echo "selected";}?>>CCA</option>
												<option <?php if($c=="CCPA"){ echo "selected";}?>>CCPA</option>
												<option <?php if($c=="CACPA"){ echo "selected";}?>>CACPA</option>
												<option <?php if($c=="CSE"){ echo "selected";}?>>CSE</option>
												<option <?php if($c=="CBM"){ echo "selected";}?>>CBM</option>
												<option <?php if($c=="CFA"){ echo "selected";}?>>CFA</option>
												<option <?php if($c=="CET"){ echo "selected";}?>>CET</option>
												<option <?php if($c=="CPM"){ echo "selected";}?>>CPM</option>
												<option <?php if($c=="GDP"){ echo "selected";}?>>GDP</option>
												</select></th>
			<th >Batch: -</th><th id="select" ><select name="s3" ><?php while($rows1=mysqli_fetch_assoc($result1)){
	if($c==$rows1['batch']){
		echo "<option ";
		if($b==$rows1['bname']){
			echo " selected";
		}
		echo ">".$rows1['bname']."</option>";
	}
	}
				?></select></th></tr>
			<tr><th>City: -</th><th><input type="text" name="i4" value="<?php echo $add; ?>"></th></tr>
			<tr><th>Date of Birth: -</th><th><input type="date" name="d1" value="<?php echo $bd;  ?>"></th></tr>
			<tr><th>Date of Joining: -</th><th><input type="date" name="d2" value="<?php echo $jd;  ?>"></th></tr>
			<tr><th><button type="submit" name="b1">Update</button></th><th><button type="submit" name="b2" style="background-color:red">Cancel</button></th></tr>
	</table>
</fieldset>
	</form>
</body>
</html>
<?php include("footer.php")
?>
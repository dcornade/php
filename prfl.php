<?php include("logo.php");
include("links.php");
$conn=mysqli_connect("localhost","root","","durcollege");
	if(!$conn){
		die("Error in Connecting".mysqli_error());
	}
if(!isset($privil)){
	$privil="";
}
$user=$_SESSION['user'];
	if(isset($_POST['b1'])){
	 		if($_SESSION['b']=="Change Your Password"){
			$_SESSION['chnge']="";
			$_SESSION['b']="Save";
			}else{
				echo $user;
				$up=$_POST['i2'];
				$strp="UPDATE `register` SET `pass`='$up' WHERE `name`='$user'";
				if(mysqli_query($conn,$strp)){
					$succs="Record Updated Succesfully";
				}
				$_SESSION['chnge']="readonly";
				$_SESSION['b']="Change Your Password";
			}
		}
 	$str="select * from register where name='$user'";
	$result=mysqli_query($conn,$str);
$rows=mysqli_fetch_assoc($result);
		
$p=$rows['pass'];
$u=$rows['uname'];

if(isset($_POST['b2'])){
	if($_SESSION['oren']=="admin"){
		if($_SESSION['b1']=="&#xf304;  Edit"){
			$_SESSION['chnge1']="";
			$_SESSION['b1']="&#xf304;  Save";
			}else{
			$nm=$_POST['i3'];
			$pr=$_POST['i4'];
			$rgn=$_POST['i5'];
			$btch=$_POST['i6'];
			$crse=$_POST['i7'];
			$rollno=$_POST['i8'];
			$addr=$_POST['i9'];
			$dob=$_POST['i10'];
			$jod=$_POST['i11'];
		$u1="UPDATE `pdata` SET `name`='$nm',`privilage`='$pr',`registration`='$rgn',`batch`='$btch',`course`='$crse',`sroll`='$rollno',`address`='$addr',`bdate`='$dob',`jdate`='$jod' WHERE `name`='$nm'";
		mysqli_query($conn,$u1);	
		$_SESSION['chnge1']="readonly";
		$_SESSION['b1']="&#xf304;  Edit";
			}
}else{
		$privil="User cannot edit data";
}
}
	$str1="select * from pdata where name='$user'";
	$result1=mysqli_query($conn,$str1);
	$rows1=mysqli_fetch_assoc($result1);
	$n=$rows1['name'];
	$pr=$rows1['privilage'];
	$reg=$rows1['registration'];
	$bch=$rows1['batch'];
	$crs=$rows1['course'];
	$roll=$rows1['sroll'];
	$add=$rows1['address'];
	$bd=$rows1['bdate'];
	$jd=$rows1['jdate'];
/*here starts the button mashup*/
if(!isset($_SESSION['chnge'])){
	$_SESSION['chnge']="readonly";
	$_SESSION['chng1']="readonly";
}
if(!isset($_SESSION['b'])){
	$_SESSION['b']="Change Your Password";
}
if(!isset($_SESSION['chnge1'])){
	$_SESSION['chnge1']="readonly";
}
if(!isset($_SESSION['b1'])){
	$_SESSION['b1']="&#xf304;  Edit";
}	
if(!isset($succs)){
	$succs="";
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="assets/effect.css">
<link rel="stylesheet" type="text/css" href="assets/css/all.css">
<title>Untitled Document</title>
<script>
	function show(){
		if(document.getElementById("vsbl").type="password"){
		document.getElementById("vsbl").type="text";	
		}else{
			document.getElementById("vsbl").type="password";
		}
	}
</script>
</head>

<body class="prflbody">
<form method="post">
	<div >
	<fieldset class="lginfo">
	<Legend>Login Information</Legend>
		<table>
			<tr>
				<th>Your Username is: -</th>
				<th><input type="text" name="i1" value="<?php echo $u ?>" readonly></th><td></td>
			</tr>
		<tr>
			<th>Your Password is: -</th>
			<th><input type="password" name="i2" value="<?php echo $p ?>" <?php echo $_SESSION['chnge']; ?> id="vsbl"><span class="fas fa-eye" title="Click to make password Visible" onclick="show();"></span></th>
			<th><input type="submit" name="b1" value="<?php echo $_SESSION['b']; ?>"></th>
		</tr>
		</table>
	</fieldset></div>
	<fieldset class="lginfo">
	<legend>Personal Information</legend>
		<table>
			<tr>
				<th>Name: -</th><th><input type="text" name="i3" value="<?php echo $n ?>"  readonly  ></th><th><input type="submit" class="fas fa-pen"  name="b2" value="<?php echo $_SESSION['b1'] ?>"><span class="error"><?php echo $privil;?></span></th>
			</tr>
			<tr>
				<th>Privilege: -</th><th><input type="text" value="<?php echo $pr ?>" name="i4"  <?php echo $_SESSION['chnge1']; ?>></th>
			</tr>
			<tr>
				<th>Registration Number: -</th><th><input type="text" value="<?php echo $reg ?>" name="i5"  <?php echo $_SESSION['chnge1']; ?>></th>
			</tr>
			<tr>
				<th>Batch: -</th><th><input type="text" name="i6" value="<?php echo $bch ?>"  <?php echo $_SESSION['chnge1']; ?>></th>
			</tr>
			<tr>
				<th>Course: -</th><th><input type="text" name="i7" value="<?php echo $crs ?>"  <?php echo $_SESSION['chnge1']; ?>></th>
			</tr>
			<tr>
				<th>Roll No: -</th><th><input type="text" name="i8" value="<?php echo $roll ?>"  <?php echo $_SESSION['chnge1']; ?>></th>
			</tr>
			<tr>
				<th>Address: -</th><th><input type="text" name="i9"  value="<?php echo $add ?>"  <?php echo $_SESSION['chnge1']; ?>></th>
			</tr>
			<tr>
				<th>Date of Birth: -</th><th><input type="text" name="i10" value="<?php echo $bd ?>"  <?php echo $_SESSION['chnge1']; ?>></th>
			</tr><tr>
			<th>Date of Joining: -</th><th><input type="text" name="i11" value="<?php echo $jd ?>"  <?php echo $_SESSION['chnge1']; ?>>
			</tr><tr><th class="error"><?php echo $succs;?></th></tr>
		</table>
	</fieldset>
</form>
</body>
</html>
<?php include("footer.php");
?>
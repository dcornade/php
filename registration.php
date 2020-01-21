<?php include("logo.php");
	  include("links.php");
if(!isset($_SESSION['userid'])){
	$_SESSION['userid']="";
}
$show="";
$count=0;
$ch=2;
$n1="";
$uerr=$pwerd="";
$w1="";
$user="";
$conn=mysqli_connect("localhost","root","","durcollege");
	if(!$conn){
		die("Error in Connecting".mysqli_error());
	}
if(isset($_POST['b1'])){
	
	$r1=$_POST['i1'];
	$str="select * from pdata";
	$result=mysqli_query($conn,$str);
	while($rows1=mysqli_fetch_assoc($result)){
		if($rows1['registration']==$r1){
			$ch=1;
			$pr1=$rows1['privilage'];
			$n1=$rows1['name'];
			$w1=$rows1['registration'];
			$srol=$rows1['sroll'];
		}
		$count++;
		
	}
	
	if($ch==1){
		$str2="select * from register";
		$result3=mysqli_query($conn,$str2);
		while($rows2=mysqli_fetch_assoc($result3)){
			if($rows2['name']==$n1){
				$show="Already Registered";
				$n1="";
			}else{
				$show="hello Mr. ".$n1;
		 		$user="std".$count;
			}
	}
	}else{
		$show="Registration Not Found";
	}
	
	
}
if(isset($_POST['b2'])){
	$u1=$_POST['i1'];
	$p1=$_POST['i2'];
	$cp=$_POST['i3'];
	if($p1==$cp){
		$str1="insert into register values ('$srol','$u1','$p1','$pr1','$n1')";
		if(mysqli_query($conn,$str1)){
			echo "registered Succesfully";
		}
	}
}
if(isset($_POST['b3'])){
	header("location:index.php");
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body class="login">
<form method="post">
<div class="feedback">
		<fieldset >
	<legend>Registration Form</legend>
			<table>
			<tr><th>Please Enter Registration Id: -  <span class="fas fa-question-circle" title="Registration Number of Your Admission Reciept"></span></th><th><input type="text" name="i1" value="<?php echo $w1?>"></th><td><button type="submit" name="b1">Search</button></td></tr>
				<tr><th><?php echo $show ?></th></tr>
			<tr><th>Your User id is: -</th><th><input type="text" name="i2" readonly value="<?php echo $user ?>"></th></tr>
			<tr><th>Input a Password(case sensitive): -</th><th><input type="text" name="i3" value=""></th>
				<th>Confirm Password: -</th><th><input type="text" name="i3" value=""></th></tr>
				<tr><td><button type="submit" name="b2">Submit</button></td><td><button type="submit" name="b3" style="background-color:red;">Cancel</button></td></tr>
			</table> 
	</fieldset>
	</div>
</form>
</body>	
</html>
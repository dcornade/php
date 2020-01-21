<?php include("logo.php");
	  include("links.php");
$uerr=$pwerd="";
if($_POST){
	$count=1;
	$usr=$_POST['i1'];
	$pswd=$_POST['i2'];
	if(($usr=="")and($pswd=="")){
		$uerr="Please Fill required fields";
	}
	$conn=mysqli_connect("localhost","root","","durcollege");
	if(!$conn){
		die("Error in Connecting".mysqli_error());
	}
	$sql="select * from register";
	$result=mysqli_query($conn,$sql);
	while($rows=mysqli_fetch_assoc($result)){
	if(($rows['uname']==$usr)and($rows['pass']==$pswd)){
		if($rows['privilage']=='admin'){
			$_SESSION['oren']="admin";
			$_SESSION['user']=$rows['name'];
			$_SESSION['log']="in";
			header("location:index.php");
			
		}else{
			$_SESSION['user']=$rows['name'];
			header("location:index.php");
			$_SESSION['log']="in";
			$_SESSION['oren']="user";
		}
	}else{
		$count++;
	}
}if($count==1){
		$uerr="Username or Password is incorrect";
	}
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="assets/effect.css">
<link rel="stylesheet" type="text/css" href="assets/css/all.css">
</head>

<body class="login">
<form method="post">
<div class="instr"><ul>Note:<li><i class="fas fa-arrow-right fa-sm"></i>To login you must have to be a Staff or a Student of the Eshtablisment</li>
	<li><i class="fas fa-arrow-right fa-sm"></i>Please Login using Your Student Id or User Id given to you on The time of Registration</li><br>
	<li style="color: red; background-color: aqua; font-size:1.7vw; border-radius: 12px; padding:10px; text-align: center; ">Haven't registered yet?</li><br><li style="font-size:1.7vw; magrin-left:50%;"><a href="registration.php">Click Here To register</a></li>
	</ul> </div>
	<div class="lgnfrm"><img src="assets/user.jpg" alt="userphoto" class="lgnimg"><div class="lgnfrmtxt">Input Your Username or Student Id<br><input type="text" name="i1"><br><span class="error"><?php echo $uerr; ?></span><br><div class="lgnfrmtxt">Input your Passowrd below<br><input type="password" name="i2"><br><input type="submit" name="b1" value="Login"><input type="reset" name="b2" value="Cancel" href="index.php">
	</div></div></div>
</form>
</body>	
</html>
<?php include("footer.php");
?>
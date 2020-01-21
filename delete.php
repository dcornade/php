<?php include("logo.php");
include("links.php");
$conn=mysqli_connect("localhost","root","","durcollege");
if(!$conn){
	die("Connection Error".mysqli_errno());
}
$n=$_SESSION['del'];
if(isset($_POST['b1'])){
	$str1="delete from `mdata` where `name`='$n'";
	mysqli_query($conn,$str1);
	$str="delete from `pdata` where `name`='$n'";
	if(mysqli_query($conn,$str)){
		header("location:data.php");
	}
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<link rel="stylesheet" type="text/css" href="assets/effect.css">
<link rel="stylesheet" type="text/css" hresf="assets/css/all.css">
<body class="del">
	<form method="post">
	<div class="men">Are you sure you want to delete <?php echo $_SESSION['del']; ?>'s data?<br><br>   
		<button name="b1" type="submit" >Delete</button><br><br>
	<button name="b2" type="submit">Cancel</button></div></form>
</body>
</html>
<?php include("footer.php");
?>
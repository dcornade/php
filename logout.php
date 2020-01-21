<?php include("logo.php");
      include("links.php");
if($_POST){
	$_SESSION['user']="";
	$_SESSION['oren']="";
	$_SESSION['log']="out";
	header("location:index.php");
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link rel="stylesheet" href="assets/effect.css">
<link rel="stylesheet" href="assets/css/all.css">
</head>

<body class="lgbody">
<form method="post">
<div class="lgout">
    <span> <span>Are you sure you want to logout?</span><br>
    <input type="submit" name="b1" value="Logout">
</div>
</form>
</body>
</html>
	<?php include("footer.php");
?>

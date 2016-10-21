<?php 

session_start();
if(!isset($_SESSION['login'])){
	header('Location:index.php');
}




echo "Xoş gəldiniz hörmətli istifadəçi :) "
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<a href="logOut.php">Logout</a>
</body>
</html>
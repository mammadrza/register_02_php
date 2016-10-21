<?php
if(isset($_POST['register'])){

$name = $_POST['name'];
$password = $_POST['password'];
$r_password = $_POST['r_password'];
$phone_number = $_POST['phone_number'];

session_start();
if(!empty($name) && !empty($password) && !empty($r_password) && !empty($phone_number)){
	if(strlen($password)>=6 && $password == $r_password && strlen($phone_number)==10){
		$_SESSION['login']= TRUE;
		header('Location:done.php');
	}
	else{
		if (strlen($password)<=6) {
			$_SESSION['password_sehv']="şifrə minimum 6 rəqəmli olmalıdır";
		}
		
		header('Location:index.php');
	
	
		if (strlen($password) !== strlen($r_password) ) {
			$_SESSION['r_password']="təkrar şifrə düzgün deyil";
		}
		
		header('Location:index.php');
	
	
		if ( empty("name")) {
			$_SESSION['error']="e-poçt doldurulmayıb";
		}
		
		header('Location:index.php');
	


		if (strlen($phone_number)<=10  ) {
			$_SESSION['phone_number']="Minimum 10 rəqəm daxil edin";
		}
		
		header('Location:index.php');
	}
}





else{
	header('Location:index.php');
}
}

?>
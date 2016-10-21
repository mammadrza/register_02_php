<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script   src="https://code.jquery.com/jquery-3.1.1.js"   integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA="   crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body>

<div class="header">


	<div class="col-md-12">
		<div class="row">
			<form class="yoxlamaForm" action="yoxlama.php" method="post">
				<div class="main1">
				E-poct:<br>
					<input class="name" type="text" name="name" placeholder="E-poct">
				
				<?php
					session_start();
					if(isset($_SESSION['error'])){
						?>
					<p class="small text-danger"><?= $_SESSION['error']?></p>
					<?php unset($_SESSION['error']);?>

					<?php } ?>











				Şifrə:<br>

					<input class="password" type="password" name="password" placeholder="Şifrə">
				
				<?php
					
					if(isset($_SESSION['password_sehv'])){
						?>
					<p class="small text-danger"><?= $_SESSION['password_sehv']?></p>
					<?php unset($_SESSION['password_sehv']);?>

					<?php } ?>


				Təkrar şifrə:<br>
					<input class="r_password" type="password" name="r_password" placeholder="Təkrar şifrə">
				
				<?php
				
				if(isset($_SESSION['r_password'])){ 
					?>
				<p class="small text-danger"><?= $_SESSION['r_password']?></p>
				<?php unset($_SESSION['r_password']);?> 
				
				<?php } ?>





				Mobil nömrə:<br>
					<input class="phone_number" type="text" name="phone_number" placeholder="Mobil nömrə">
				

<?php
				
				if(isset($_SESSION['phone_number'])){ 
					?>
				<p class="small text-danger"><?= $_SESSION['phone_number']?></p>
				<?php unset($_SESSION['phone_number']);?> 
				
				<?php } ?>



				</div>
			
		</div>
	</div>

	<div class="col-md-12">
		<div class="row">
			<div class="footer">
				<input class="design3" type="submit" name="register" value="Register">
			</div>
		</div>
	</div>
</form>

</div>


</body>
</html>
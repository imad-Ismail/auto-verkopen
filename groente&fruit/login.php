<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/nieuw.css">
</head>
<body>

	<div class="formDiv">
		<div>
		<form action="loginForm.php" method="post"> 
			<h1>Login</h1>
			<div class="input">
		<input type="text" name="email" autofocus placeholder="E-mail">
					<br>
						<?php 
					if(isset($_GET['errorCode'])){
						echo $_GET['errorCode'];
					}
				 ?>
				<br>
		<input type="password" name="password" placeholder="password">
		<br>
		<button type="submit" class="loginbtn">Login</button>
			</div>
			</form>
		</div>
	</div>		
</body>
</html>
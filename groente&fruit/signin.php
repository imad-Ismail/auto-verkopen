<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/nieuw.css">
</head>
<body>

	<div class="formDiv">
		<form action="signinForm.php" method="post"> 
				<h1>Inschrijven</h1>
			<div class="input">
				<input type="text" name="firstname" autofocus placeholder="Name">
				<br>
				<input type="text" name="lastname" placeholder="Lastname">
				<br>
				<input type="text" name="email" placeholder="E-mail">
				<br>
				<input type="password" name="password" placeholder="Password">
				<br>
				<input type="text" name="phone_number" placeholder="Phone_number">
				<br>
				<input type="text" name="postalcode" placeholder="postalcode">
				<br>
				<input type="text" name="house_number" placeholder="house_number">
				<br>

				<button type="submit" class="loginbtn">Login</button>
			</div>
		</form>
	</div>
</body>
</html>
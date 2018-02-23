<!DOCTYPE html>
<html>
<head>
	<title>LogInPage</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script src="js/jquery.min.js/"></script>
	<script src="js/bootstrap.min.js/"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style type="text/css">
		.loginBox{
			position: absolute;
			top: 50%;
			left:50%;
			transform: translate(-50%,-50%);
			width: 350px;
			height: 400px;
			box-sizing: border-box;
			background-color: #272657;
			padding: 5%;
			padding-top: 0%;


		}
		



	</style>
</head>
<body style="background-image: url(indexes.jpeg);background-size: 100%;background-repeat: no-repeat; margin: 0;padding: 0;font-family: Ani;">
	<div class="container-fluid">
	<div class="loginBox">
			<h2 style="color: #2EFEF7"><b>SHAH HOSPITAL</b></h2>
			<h4 style="color:white ">Log In Here</h4>
			<form method="POST" action="home2.php">
			<span style="color: white">Username:</span>
			<input type="text" name="user" required=""><br>
			<br>
			<span style="color: white">Password:</span>
			<input type="Password" name="pass" required=""><br>
			<br>
			<input type="submit" name="submit" class="btn btn-success"  value="Login">
			<input type="reset" name="reset" class="btn btn-danger" value="reset">
		</form>
		
	</div>  


	</div>


</body>
</html>
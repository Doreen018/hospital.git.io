<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div>
	<form method="GET">
		<input type="Password" name="Password">
		<button>Submit</button>
	</form>
		
	<?php
	$psd= $_GET['Password'];
	if (is_string($psd)) {
		# code...
		echo "please don't use strings";
	}





	 ?>
	<?php 
	$psd= $_GET['Password'];
	if (strlen($psd)<8) {
		# code...
		echo "Please use atleast 8 characters"
	}



	 ?>


</div>
</body>
</html>
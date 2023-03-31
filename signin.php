<?php  include('php_code1.php'); ?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
	<?php if (isset($_SESSION['message'])): ?>
	<div class="msg">
		<?php 
			echo $_SESSION['message']; 
			unset($_SESSION['message']);
		?>
	</div>
<?php endif ?>
	<form method="post" action="php_code1.php">
		<img align="left"src="adregimage.jpg" ><br>
		<center>
			<b align="centre">User Sign In Account</b> <br><br>
			<input type="text" name="uname" placeholder="username"><br><br>
			<input type="password" name="pwd" placeholder="password"><br><br>
			<input type="submit" value="Sign In" name="save1"><br><br>
			Don't have Account? -
			<a href="index.php" name="final"> Sign Up</a> 
		</center>
	</form>
</body>



</html> 

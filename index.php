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
		<br>
		<center>
			<img align="left" src="bgcourt1.jpg" width=1000 height=800>
		    <img src="court.jpg" ><br><br>
			<b align="centre">User Sign UP Account</b> <br><br>
			<input type="text" name="uname" placeholder="username"><br><br>
			<input type="password" name="pwd" placeholder="password"><br><br>
			<input type="submit" value="Sign Up" name="save"><br><br>
			Already have Account?  - 
			<a href="signin.php" name="final" > User Sign In</a> 
			<br>
			<br>
			<a href="adsign.php" name="final" >Admin Sign In </a> 
		</center>
	</form>
</body>



</html> 

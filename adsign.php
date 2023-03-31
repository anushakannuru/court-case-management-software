<?php  include('php_code1.php'); ?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<style>
body {
  background-image: url('adimage1.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;

}
</style>

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
		<center>
			<b align="centre">Admin Sign In Account</b> <br><br>
			<input type="text" name="uname" placeholder="username"><br><br>
			<input type="password" name="pwd" placeholder="password"><br><br>
			<input type="submit" value="Sign In" name="save2"><br><br>
		</center>
	</form>
</body>



</html> 

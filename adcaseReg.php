<?php  include('php_code.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Register Case</title>
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
<!-- <input type="button" value="Log Out" name="fasak" style="position:absolute;top:10px;right:15px;"> -->
<button onclick="location.href='logout.php'" type="button" style="position:absolute;top:10px;right:15px;">
         Log Out</button>
<center>
	<form method="post" action="php_code.php" >

		<img src="court.jpg" ><br>
		<b align="centre">Case Registration</b> <br><br>

		Sitting Date :<br><input type="text" value="" name="sdate" placeholder="mm/dd/yy"><br>
		Suit No:<br><input type="text" name="suitno" value="" placeholder="eg :100034"><br>
		Plaintiff:<br><input type="text" name="plaintiff" value="" placeholder="eg:THE COMPANY"><br>
		Defendant:<br><input type="text" name="defendant" value="" placeholder="Eg:Bobby Fischer"><br>
		Nature of Case:<br><input type="text" name="nature" value="" placeholder="Breach of Rule"><br>
		Stage:<br><input type="text" name="stage" value="" placeholder="F/N"><br>
		<select id="courts" align="right" name="courtlevel" value="">
			<option selected value="court">All Courts</option>
			<option value="high">High Court</option>
			<option value="district">District Court</option>
			<option value="village">Village Court</option>
			<option value="supreme">Supreme Court</option>
		</select><br><br>

		<input type="submit" value="Submit" name="save">
		<input type="submit" value="Reset"name="reset"><br><br>
		<a href="display.php">View all Registrations</a>



	</form>	
</table>
</center>
</body>
</html> 
<?php  include('php_code.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Register Case</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
	<form method="post" action="php_code.php" >
	<?php 
	if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$update = true;

		$record = mysqli_query($db, "SELECT * FROM casestable WHERE id=$id");

			$n = mysqli_fetch_array($record);
			$sdate = $n['sdate'];
			$suitno = $n['suitno'];
			$plaintiff = $n['plaintiff'];
			$defendant = $n['defendant'];
			$nature = $n['nature'];
			$stage = $n['stage'];
			$courtlevel = $n['courtlevel'];
		}?>

			<input type="hidden" name="id" value="<?php echo $id; ?>">
			<button onclick="location.href='logout.php'" type="button" style="position:absolute;top:10px;right:15px;">
         Log Out</button>
			
		<center>

		<img src="court.jpg" ><br>
		<b align="centre">Case Registration</b> <br><br>

		Sitting Date :<br><input type="text" value="<?php echo $sdate; ?>" name="sdate" ><br>
		Suit No:<br><input type="text" name="suitno" value="<?php echo $suitno; ?>" ><br>
		Plaintiff:<br><input type="text" name="plaintiff" value="<?php echo $plaintiff; ?>" ><br>
		Defendant:<br><input type="text" name="defendant" value="<?php echo $defendant; ?>" ><br>
		Nature of Case:<br><input type="text" name="nature" value="<?php echo $nature; ?>" ><br>
		Stage:<br><input type="text" name="stage" value="<?php echo $stage; ?>" ><br>
		<select id="courts" align="right" name="courtlevel" type="text">
			<option selected value="<?php echo $courtlevel; ?>">All Courts</option>
			<option value="high">High Court</option>
			<option value="district">District Court</option>
			<option value="village">Village Court</option>
			<option value="supreme">Supreme Court</option>
		</select><br><br>
	<?php if ($update == true): ?>
				<button type="submit" name="update">Update</button>
			<?php endif ?>
		
</table><br><br>
<a href="display.php">View all Registrations</a>
</center>
</form>
</body>
</html>

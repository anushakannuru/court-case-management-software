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
<button onclick="location.href='logout.php'" type="button" style="position:absolute;top:10px;right:15px;">
         Log Out</button>
<center>
<table>
	<thead>
		<tr>
			<th>Sitting Date</th>
			<th>Suit No</th>
			<th>Plaintiff</th>
			<th>Defendant</th>
			<th>Nature of Case</th>
			<th>Stage</th>
			<th>Court Level</th>
			<th colspan="2">Action</th>
		</tr>
	</thead>
	<?php $results = mysqli_query($db, "SELECT * FROM casestable"); ?>
	<?php while ($row = mysqli_fetch_array($results)) { ?>
		<tr>
			<td><?php echo $row['sdate']; ?></td>
			<td><?php echo $row['suitno']; ?></td>
			<td><?php echo $row['plaintiff']; ?></td>
			<td><?php echo $row['defendant']; ?></td>
			<td><?php echo $row['nature']; ?></td>
			<td><?php echo $row['stage']; ?></td>
			<td><?php echo $row['courtlevel']; ?></td>
			<td>
				<a href="updateval.php?edit=<?php echo $row['id']; ?>" class="edit_btn" >Edit</a>
			</td>
			<td>
				<!-- <a href="php_code.php?del=<?php echo $row['id']; ?>" class="del_btn">With Draw</a> -->
			</td>
		</tr>
	<?php } ?>
	
	
</table>
<div >
	<a href="caseReg.php">Register Case</a>
	&nbsp;&nbsp;
	<a href="usearch.php">Search Case</a>
</div>

</center>
</body>
</html> 

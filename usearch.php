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
	<form method="post" action="#">
		<?php
		if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `casestable` WHERE CONCAT(`sdate`, `suitno`, `plaintiff`, `defendant`, `nature`, `stage`, `courtlevel`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `casestable`";
    $search_result = filterTable($query);
}
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "crud");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}?>

	<input type="text" name="valueToSearch" placeholder="Value To Search"><br><br>
            <input type="submit" name="search" value="Search"><br><br>
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
		</tr>
	</thead>
	<?php while ($row = mysqli_fetch_array($search_result)) { ?>
		<tr>
			<td><?php echo $row['sdate']; ?></td>
			<td><?php echo $row['suitno']; ?></td>
			<td><?php echo $row['plaintiff']; ?></td>
			<td><?php echo $row['defendant']; ?></td>
			<td><?php echo $row['nature']; ?></td>
			<td><?php echo $row['stage']; ?></td>
			<td><?php echo $row['courtlevel']; ?></td>
			
			
		</tr>
	<?php } ?>
	
	
</table>
</form>
<a href="caseReg.php">Register Case</a>
</center>
</body>
</html> 

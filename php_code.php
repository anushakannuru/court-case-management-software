<?php  
	session_start();
	require_once('db.php');

	if(isset($_POST['save'])){
		$sdate = $_POST['sdate'];
		$suitno = $_POST['suitno'];
		$plaintiff = $_POST['plaintiff'];
		$defendant = $_POST['defendant'];
		$nature = $_POST['nature'];
		$stage = $_POST['stage'];
		$courtlevel = $_POST['courtlevel'];
		$sql = "INSERT INTO casestable (sdate, suitno,plaintiff,defendant, nature,stage, courtlevel) VALUES('$sdate', '$suitno', '$plaintiff', '$defendant', '$nature', '$stage', '$courtlevel')";
		if(mysqli_query($db,$sql)){

			$_SESSION['message'] = "Case Registered!"; 
			header('location: caseReg.php');start();}
		
	}
	if (isset($_POST['reset'])){
		header('location: caseReg.php');start();
	}
	
	if (isset($_POST['update'])) {
		$id = $_POST['id'];
		$sdate = $_POST['sdate'];
		$suitno = $_POST['suitno'];
		$plaintiff = $_POST['plaintiff'];
		$defendant = $_POST['defendant'];
		$nature = $_POST['nature'];
		$stage = $_POST['stage'];
		$courtlevel = $_POST['courtlevel'];

		mysqli_query($db, "UPDATE casestable SET sdate='$sdate',suitno='$suitno',plaintiff='$plaintiff',defendant='$defendant',nature='$nature',stage='$stage',courtlevel='$courtlevel' WHERE id=$id");
		$_SESSION['message'] = "Case Updated!"; 
		header('location: display.php');
	}
	if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($db, "DELETE FROM casestable WHERE id=$id");
	$_SESSION['message'] = "Case deleted!"; 
	header('location: display.php');
}
	?>



	
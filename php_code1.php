<?php  
	session_start();
	require_once('db1.php');

	$uname='';
	$pwd='';
	$id=0;
	if (isset($_POST['save'])){

		$uname = ($_POST['uname']);
		$pwd = $_POST['pwd'];

		$s ="SELECT * from login where uname='$uname'";

		$result =mysqli_query($db,$s);

		$num=mysqli_num_rows($result);

		if($num > 0)
		{
			$_SESSION['message'] = "Username Already Taken"; 
			header('location: index.php');
		}else
		{
			$reg="INSERT into login(uname,pwd) VALUES ('$uname','$pwd')";
			mysqli_query($db,$reg);
			// $_SESSION['message'] = "Registration Successful"; 
			// header("Refresh: 5; url= index.php");
			header('location: caseReg.php');
		}

	}
	if (isset($_POST['save1'])){

		$uname = ($_POST['uname']);
		$pwd = $_POST['pwd'];

		$s ="SELECT * from login where uname='$uname' && pwd='$pwd'";

		$result =mysqli_query($db,$s);

		$num=mysqli_num_rows($result);

		if($num > 0)
		{
			// $_SESSION['message'] = "Successfully S"; 
			header('location: caseReg.php');
		}else
		{
			echo "<script type='text/javascript'>alert('Wrong Username or Password');
			window.location='signin.php';
			</script>";


		}
	}
		if (isset($_POST['save2'])){

		$uname = 'anusha123';
		$pwd = '0000';

		$s ="SELECT * from login where uname='$uname' && pwd='$pwd'";

		$result =mysqli_query($db,$s);

		$num=mysqli_num_rows($result);

		if($num > 0)
		{
			// $_SESSION['message'] = "Successfully S"; 
			header('location: adDisplay.php');
		}else
		{
			echo "<script type='text/javascript'>alert('Wrong Username or Password');
			window.location='signin.php';
			</script>";


		}
	}
	?>	

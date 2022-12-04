<?php 
	session_start();
	if($_SESSION['user']){
		$user=$_SESSION['user'];
	}
	else{
		header("location:index.php");
	}
	if($_SERVER['REQUEST_METHOD']=="POST")
	{
		date_default_timezone_set("Asia/Kolkata"); //Africa/Kampala
		$amount=$_POST['amount'];
		$details=$_POST['details'];
		$time = strftime("%T");
		$date = strftime("%B %d, %Y");
		$con=mysqli_connect("localhost","kazungudev","sagwe1","atm");
		$q="INSERT INTO `passbook`(`details`, `amount`, `user`) VALUES('$details',$amount,'$user')";
		$res=$con->query($q);
		Print '<script>alert("Successful Deposit Made.");window.location.assign("balance.php");</script>';
	
	}
	else
	{
		header("location:home.php");
	}


 ?>

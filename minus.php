<?php 
	session_start();
	if($_SESSION['user']){
		$user=$_SESSION['user'];
	}
	else{
		header("location:index.php");
	}
		
	$con=mysqli_connect("localhost", "kazungudev","sagwe1","atm");

	$balance=0.00;
	$query=" SELECT * FROM passbook WHERE user= '$user' ";
	$res=$con->query($query);
	while($row=mysqli_fetch_array($res))
		{
			$balance= $balance + $row['amount'];
		}

	if($_SERVER['REQUEST_METHOD']=="POST")
	{
		date_default_timezone_set("Asia/Kolkata"); //Africa/Kampala
		$amount=$_POST['amount'];

		
		if($amount>$balance)
		{
			
			Print '<script>alert("You do not have sufficient Funds.");;
			window.location.assign("balance.php")</script>';
			exit("You have insufficient funds!");
			//header("location: balance.php");
			
		}
		$amount=(-$amount);
		$details=$_POST['details'];
		$time = strftime("%T");
		$date = strftime("%B %d, %Y");

		$q="INSERT INTO `passbook`(`details`, `amount`, `user`) VALUES ('$details', $amount, '$user')";
		$r=$con->query($q);
		Print '<script>alert("Successful Withdrawal.");window.location.assign("balance.php");</script>';
		
	}
	else
	{
		header("location:home.php");
	}


 ?>

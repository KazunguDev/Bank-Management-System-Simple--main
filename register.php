<html>
	<head>
	<title>Welcome to E-Banking</title>
	  <!-- Bootstrap CSS -->
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<!-- <style>
 .container{
	width: 450px;
	padding: 4% 4% 4%;
	margin : auto;
	box-shadow: 10px 10px 5px #888888;
	background-color: #fff;
	text-align: center;
	position:relative;
	top:50px;
	vertical-align: middle;
	background-color: PaleTurquoise;
}

form{
	align-content: center;
	padding:10px;
	margin-top: 15px;
}
input
{
	margin :5px;
}

a{
	color:#f00f53;
	text-decoration: none;
	align-content: right;
}

.button{
	width :150px;
	margin :10px;
	padding:5px;
	font-weight: bold;
	text-align: center;
	background-color: #a30003;
	position:relative;
	right:-100px;
	color:white;
}


body{
	background-image: url('lg5.jpg');
	background-repeat: no-repeat; 
	background-size: cover;
}
    </style> -->
	</head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script>
		$(document).ready(function(){
  		$(".button").mouseleave(function(){
  			$(this).css('background-color','#a30003');
    	
  			});
  		$(".button").mouseenter(function(){
  			$(this).css('background-color','#ff474a');
  		});
		});
		</script>
	<body>

	<div class="container">
		<h2 >The Registration Page</h2>
		<a href="index.php" >Click Here to Go Back.</a><br/>
		<div style = "text-align:left;">
			<form action="register.php" method="POST">
			Enter Username : <input type="text" name="username" required="required"/><br/>
			Enter Password : <input type="password" name="password" required="required"/><br/>
			Enter Bank-number: <input type="number" name="Bank-number" required="required"/><br/>
			Enter Email:  <input type="text" name="email" required="required"/><br/>
			<input type="submit" value="Register" class="button"/>
			</form></div>	
	</div>
	</body>
	
</html>

<?php
	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		$username = $_POST['username'];
		$password = $_POST['password'];
		// $banknumber=$_POST['Bank-number'];
        // $emailid= $_POST['email'];
		$bool=true;

		$con=mysqli_connect("localhost","kazungudev","sagwe1","atm");

		$query="SELECT * FROM users";	
		$res=$con->query($query);
		while($row=mysqli_fetch_array($query))
		{
			$table_user=$row['username'];
			if($username==$table_user)
			{
				$bool=false;
				Print '<script>alert("Username has already been taken!");</script>';
				Print '<script>window.location.assign("register.php");</script>';
			}
		}
		if($bool)
		{
			$q="INSERT INTO users (username,password) VALUES ('$username','$password')";
			$r=$con->query($q);
			Print '<script>alert("Successfully Registered! ");</script>';
			Print '<script>window.location.assign("index.php");</script>';
		}
	}
?>

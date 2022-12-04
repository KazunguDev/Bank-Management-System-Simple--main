<html>
	<head>
	<title>E-Banking</title>
	  <!-- Bootstrap CSS -->
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<!-- <style>
	 .container{
	width: 620px;
	padding: 4% 4% 4%;
	margin : auto;
	box-shadow: 10px 10px 5px #888888;
	background-color: #fff;
	text-align: center;
	position:relative;
	top:50px;
	vertical-align: middle;
}


h3{
	color:pink;
	font-family: helvetica;
}

a{
	color:#f00f53;
	text-decoration: none;
	align-content: right;
}

button{
	width:380px;
	margin :10px;
	padding:5px;
	font-weight: bold;
	background-color: #a30003;
	text-align: center;
	color:white;
}



body{
	background-color: PaleTurquoise;
}
    </style> -->
<!-- 
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script>
		$(document).ready(function(){
  		$("button").mouseleave(function(){
  			$(this).css('background-color','#a30003');
    	
  			});
  		$("button").mouseenter(function(){
  			$(this).css('background-color','#ff474a');
  		});
		});
		</script> -->
		<style>
		body{
			background-image: linear-gradient(rgba(30,210,250,0.7),rgba(290,400,250,0.5)),url("c1.jpg");
			background-repeat: no-repeat;
			background-attachment: fixed;
			background-size: cover;
		}
	</style>
	</head>
	<?php
		session_start();
		if($_SESSION['user'])
		{}
		else
		{
			header("location:index.php");
		}
		$user=$_SESSION['user'];
		?>
	<body>

	<div class="container">
		<h1>WELCOME</h1>
		<h3><?php Print "$user" ?></h3><br>
		
		<input type="button" onclick="location.href='deposit.php'" value="Deposit Money" class="btn btn-light  m-2"><br>
		
		
		<input type="button" onclick="location.href='withdraw.php'" value="Withdraw Money" class="btn btn-light m-2"><br>
	
	
		<input type="button" onclick="location.href='balance.php'" value="Check Balance" class="btn btn-light m-2"><br>

		<br>
		<p><a href="logout.php" class="bg-light p-1" style="width:200px; margin:auto; margin-top:20px; color:black; border-radius:6px; font-size:25px;">Logout</a></p><br/>

	</div>
	</body>
	
</html>

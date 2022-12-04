<html>
	<head>
	<title>E-Banking</title>
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
	<style>
		body{
			background-image: linear-gradient(rgba(30,210,250,0.7),rgba(290,400,250,0.5)),url("c1.jpg");
			background-repeat: no-repeat;
			background-attachment: fixed;
			background-size: cover;
		}
	</style>
	</head>
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script>
		$(document).ready(function(){
  		$(".button").mouseleave(function(){
  			$(this).css('background-color','#a30003');
    	
  			});
  		$(".button").mouseenter(function(){
  			$(this).css('background-color','#ff474a');
  		});
		});
		</script> -->
	<body>

	<div class="container text-center" style="width: 50%; border: 3px solid black; margin-top: 30px ;">

		<h1 class="bg-dark p-1" style="width:200px; margin:auto; margin-top:20px; color:wheat; border-radius:10px; font-size:50px">LOGIN</h1>
		<p><a href="index.php" style="color:black">HOME</a></p>
		<form action="checklogin.php" method="post" style="width: 50%; margin:auto;">
			<div class="form-group">
				<!-- <label for="username">Enter Username</label> -->
				<input id="username" class="form-control" type="text" placeholder="Username" name="username" required>
			</div>
			<div class="form-group">
				<!-- <label for="password">Enter Password</label> -->
				<input id="password" class="form-control" type="text" placeholder="Password" name="password">
			</div>
			<input type="submit" value="LOGIN" class="btn btn-dark"><br><br> 
		</form>
	</div>

	<!-- <div class="container text-center" style="width: 50%; border: 3px solid black; margin-top: 30px ;">
		<h2 >The Login Page</h2>
		<a href="index.php" >Click Here to Go Back.</a><br/>
		<form action="checklogin.php" method="POST">
			Enter Username : <input type="text" name="username" required="required"/><br/>
			Enter Password : <input type="password" name="password" required="required"/><br/>
			<input type="submit" value="Login" class="btn btn-dark"/>
			</form>	 -->
	</div>
	</body>
	
</html>

<html>
	<head>
	<title>E-banking</title>
	  <!-- Bootstrap CSS -->
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<!-- <style>
    .container{
	width: 360px;
	padding: 4% 4% 4%;
	margin : auto;
	box-shadow: 10px 10px 5px #888888;
	background-color: #fff;
	text-align: center;
	position:relative;
	top:50px;
	vertical-align: middle;
}

p{
	font-family: sans-serif;
	font-weight: bold;
	font-size:  20px;
	color: blue;
}

button{
	width :150px;
	margin :5px;
	padding:2px;
	font-weight: bold;
	background-color: #428BCA;
	text-align: center;
	color: white;
	font-family: verdana;
	text-decoration: none;
}

body{
	background-image: url('lg5.jpg');
	background-repeat: no-repeat; 
	background-size: cover;
}
    </style> -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script>
		$(document).ready(function(){
  		$("button").mouseleave(function(){
  			$(this).css('background-color','#428BCA');
    	
  			});
  		$("button").mouseenter(function(){
  			$(this).css('background-color','#CF4647');
  		});
		});
		</script>
	
	<script type="text/javascript">
    window.onload = setInterval(clock,1000);

    function clock()
    {
	  var d = new Date();
	  
	  var date = d.getDate();
	  
	  var month = d.getMonth();
	  var montharr =["Jan","Feb","Mar","April","May","June","July","Aug","Sep","Oct","Nov","Dec"];
	  month=montharr[month];
	  
	  var year = d.getFullYear();
	  
	  var day = d.getDay();
	  var dayarr =["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
	  day=dayarr[day];
	  
	  var hour =d.getHours();
      var min = d.getMinutes();
	  var sec = d.getSeconds();
	
	  document.getElementById("date").innerHTML=day+" "+date+" "+month+" "+year;
	  document.getElementById("time").innerHTML=hour+":"+min+":"+sec;
    }
   </script>


	<style>
		body{
			background-image: linear-gradient(rgba(30,210,250,0.7),rgba(290,400,250,0.5)),url("c1.jpg");
			background-repeat: no-repeat;
			background-attachment: fixed;
			background-size: cover;
		}
	</style>
	</head>
	<body>


	<div class="container text-center " style="width: 50%; border: 3px solid black; margin-top: 30px ;">
	
		<p class="m-2"><MARQUEE BEHAVIOR=ALTERNATE ><B> WELCOME TO E-BANKING</B> </marquee></p>

		<input type="button" value="LOGIN" class="btn btn-dark m-2" onclick="location.href='login.php'"><br>
		<input type="button" value="REGISTER" class="btn btn-dark m-2" onclick="location.href='register.php'">
		<h1></h1>
   		<p id="date"></p>
    	<p id="time"></p>  
	
	
	
	</div>

	<!-- <div class="container">
		
		<p><MARQUEE BEHAVIOR=ALTERNATE ><B> WELCOME TO E-BANKING</B> </marquee></p>
	
		<button onclick="location.href='login.php'">LOGIN</button><br>
		
		<button onclick="location.href='register.php'">REGISTER</button>
		

   <h1></h1>
   <p id="date"></p>
   <p id="time"></p>  

 


	</div> -->
	</body>

</html>


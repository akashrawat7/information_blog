<?php
	session_start();
	if(isset($_SESSION['uid']))
	{
		header('location:form.php');
	}
	?>
<!DOCTYPE html>
<html lang=en>
	<head>
    
		<title>
		project
		</title>
		<meta charset=utf8>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Latest compiled and minified/compressed CSS -->
		<link rel="shortcut icon" href="pics/favicon.ico" type="image/x-icon">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="a.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel="shortcut icon" href="images/favic.ico">		
	</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top" id="mainnav">
  <div class="container">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand"><font color="yellow">DSVV</font></a>
    </div>
    <div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
		<li><a href="index.php"><font color="white">OUR COLLEGE</font></a></li>
          <li><a href="post.php"><font color="white" style="text-transform:uppercase;">Announcements and Information for students</font></a></li>
          <li><a href="contactus.php"><font color="White">CONTACT</font></a></li>
		  <li><a href="admin.php"><font color="white">ADMIN LOGIN</font></a></li>
        </ul>
      </div>
    </div>
  </div>
</nav><br><br>

<!-- nav ended !-->


	<div  class="container-fluid text-center">
	<div class="row">
			<div id="logo" class="col-sm-4"><br><br><br><br>
				<img src="pics/logo.png" class="img-responsive">
			</div>
				<div id="name"class="col-sm-8">
					<br><br><font color="white"><h1>Welcome To DSVV</h1></font>
					<font color="white"><h2>A Information Blog For Our Students</h2></font>
				</div>
				
	</div><br><br>
	
	
	<h1 style="font-family:arial; color:brown;">This Page Is Only For Admin</h1><hr><br><br><br>
	
			<div class="container" style="background-color:	lightgray; border: 2px solid #008CBA; border-radius: 50px;">
			
  <h2>ADMIN LOGIN</h2><hr><br><br>
  <form action="admin.php" method="post">
    <div class="form-group" >
      <label for="name">ADMIN NAME:</label><br>
      <input type="text" style="border: 2px solid #008CBA;" class="form-control" id="username" placeholder="Enter Name" name="username" autocomplete="off" required>
    </div>
    <div class="form-group"><br>
      <label for="pass">PASSWORD:</label><br>
      <input type="password" style="border: 2px solid #008CBA;" class="form-control" id="pass" placeholder="Enter password" name="pass" required>
    </div>
    <br>
    <button class="button button2" type="submit" name="log" value="submit">Submit</button>
  </form><br><br>

  </div><br><br><br><br>
  		<?php

require('connect.php');




if(isset($_POST['log'])){
 
  $username = $_POST['username'];
  $password = $_POST['pass'];
  $query = "select * from login where adminname = '$username' and password = '$password'";
  $result = mysqli_query($con, $query) or die(mysqli_error($con));				
  $count = mysqli_num_rows($result);
  if($count < 1)
  {	  
	 echo"<script>
	 alert('invalid Login Credentials');
	 </script>";
	header('refresh:1','location:admin.php');
  }
else{
		  $data=mysqli_fetch_assoc($result);
	  
	 $id =$data['id'];
	 session_start();
	 $_SESSION['uid']=$id;
	 header('location:form.php');
    }
}
	?>			
		<div class="row">
		<div class="col-md-12">
				    <div class="social-icons">
					<center><img src="pics/logo.png" style="background-color: #4dffa6; padding:100px;" class="img-responsive"></center><br><br><br>
					<h2 style=" color:black;">Follow Us On</h2>					
						<a target="_#" class="twitter" href=""><i class="fa fa-twitter"></i></a></li> 						
						<a target="_#" class="facebook" href=""><i class="fa fa-facebook"></i></a>
						<a target="_#" class="linkedin" href=""><i class="fa fa-linkedin"></i></a>
						<a target="_#" class="web" href=""><i class="fa fa-globe"></i></a>												
						
				</div><br><br><br>
				  <div class="row">
          <div class="col-md-6">
            <p style="font-size:20px; background-color:white; color:black; height:40px;">&copy; 2020 Himanshu</p>
          </div>
          <div class="col-md-6">
            <p style="font-size:20px; background-color:white; color:black; height:40px;">Designed by Himanshu Naithani</p>
          </div>
        </div>
	</div>

</body>
</html>
<script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>
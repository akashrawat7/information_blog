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

		  <style>
         pre {
            overflow-x: auto;
            white-space: pre-wrap;
            white-space: -moz-pre-wrap;
            white-space: -pre-wrap;
            white-space: -o-pre-wrap;
            word-wrap: break-word;
         }
      </style>	
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
          <li><a href="post.php"><font color="white" style="text-transform:uppercase;">Announcements and Information for students</font></a></li> <li><a href="contactus.php"><font color="White">CONTACT</font></a></li> <li><a href="admin.php"><font color="white">ADMIN LOGIN</font></a></li> </ul> </div>
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
		
		<div class="col-sm-8">
			<br><br>
					<font><h2>Announcements For Students As Per the Departments:-</h2></font>
				</div>
				
	</div><br>
		<?php
	require('connect.php');
	$sql = "select * from posts order by id desc";
	$resl= mysqli_query($con, $sql);
	while($row =  mysqli_fetch_assoc($resl)){
	?>
	
	<div class="container-fluid text-center">
	<div class="col-sm-12" style="background-color:white; float:right;">
	
	<div class="jumbotron" style="background-color:snowwhite;">
	 <div class="topic" style="background-color:#001433">
	 <label for="name"> <h3 style="word-wrap:break-word; color:white"><?php echo $row['topic']; ?></h3></label>
	 </div>
	  <div class="dep" style="background-color:#66b3ff;">
	 <label for="dep" style="text-align: center; padding:5px;">For :
	  <?php $cf = json_decode($row['course_field'],true);
                foreach($cf as $pt){
                  echo $pt." //  "; 
                }  
           ?> 
           	
           </label>
	 </div>
	
	
	<h3 ><pre><?php echo $row['exp']; ?></pre></h3>
	</div>
	</div>
	</div><br><br>
	<?php
	}
   ?>
			<br><br><br><br><div class="row">
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
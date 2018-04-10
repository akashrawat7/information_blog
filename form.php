<?php
	session_start();
	if(isset($_SESSION['uid']))
	{
		echo "";
	
	}
	else{
		header('location:admin.php');
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
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="a.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="files/scroll.js"></script>
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
      <a class="navbar-brand"><font color="yellow">xyz college</font></a>
    </div>
    <div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
		
          <li><a href="post.php" ><font color="yellow">BLOG</font></a></li>
		  <li><a href="delete.php" ><font color="yellow">DELETE INFO</font></a></li>
		  <li><a href="logout.php" style="padding-left:800px;"><font color="yellow">ADMIN LOGOUT</font></a></li>
        </ul>
      </div>
    </div>
  </div>
</nav><br><br>


			<?php
			require('connect.php');

	
	if (isset($_POST['insert_post'])){
		
		$topic = $_POST['topic'];
		$exp = $_POST['exp'];
		
		$ins = "insert into posts (topic,exp)"."values('$topic','$exp')";
		
		$ins_post = mysqli_query($con, $ins);
		
		if($ins_post){
			echo"<script> alert('your information is posted')</script>";
		}
		else
		{
			echo"<script>alert('there is an error')</script>";
		}
	}
	?>

			
	<div  class="container ">
	<div class="col-sm-12">			
  <form action="form.php" method="post">
    <div class="form-group"><br><br><br><Br>
      <label for="title">Enter Post Title:</label>
      <input type="text" class="form-control" id="topic" placeholder="Enter Topic" name="topic" autocomplete="off" required>
    </div>
    <div class="form-group">
      <label for="exp">Explaination:</label>
      <textarea type="text" class="form-control" id="exp" placeholder="Write Explaination" autocomplete="off" name="exp" style="height:300px;" required></textarea>
    </div><br><br>
   
    <button type="submit" id="insert_post" name="insert_post">Submit</button>
	
  </form>
</div>
	</div>
	
	
	</div>

</body>
	

</html>

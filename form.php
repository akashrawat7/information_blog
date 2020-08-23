<?php
	session_start();
	if(isset($_SESSION['uid']))
	{
		echo "";
	
	}
	else{
		header('location:admin.php');
	}
	error_reporting(0);
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
      <a class="navbar-brand"><font color="yellow">DSVV University</font></a>
    </div>
    <div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
		
          <li><a href="post.php" ><font color="yellow">BLOG</font></a></li>
		  <li><a href="delete.php" ><font color="yellow">DELETE INFO</font></a></li>
		   <li><a href="change.php" ><font color="yellow">CHANGE PASSWORD</font></a></li>
		  <li><a href="logout.php" ><font color="yellow">ADMIN LOGOUT</font></a></li>
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
		$courseField = $_POST['c1'];
		$check = json_encode($courseField,true);

           if(isset($courseField)==0){
           $error = "please select the department" ;
                     }
           	else{
		$ins = "insert into posts (topic,exp,course_field)"."values('$topic','$exp','$check')";
		
		$ins_post = mysqli_query($con, $ins);
		
		if($ins_post){
			echo"<script> alert('your information is posted')</script>";
		}
		else
		{
			print"<script>alert('there is an error')</script>";
		}
	}
	
}
	?>

			
	<div  class="container ">
	<div class="col-sm-12">			
  <form action="form.php" method="post">
  
    <div class="form-group"><br><br><br><Br>
      <label for="title">Enter Post Title:</label>
      <input style="border: 2px solid #008CBA;" type="text" class="form-control" id="topic" placeholder="Enter Topic" name="topic" autocomplete="off" required>
    </div> <br>
    		<div class="form-group">
							<label>	<span><?php if(isset($error)){
						echo "<center><h5 style='color:white; background-color:red; line-height: 20px; height:20px;'><b>".$error."</b></h5></center>";  }
						?></span>
								Select Departments:<br><br>
								
								<label class="form-check-label">
									<input type="checkbox" class="form-check-input" name="c1[]"  value="CS/IT Department">&nbsp;CS/IT Department
								</label>&nbsp;&nbsp;&nbsp;&nbsp;
								<label class=">form-check-label">
									<input type="checkbox" class="form-check-input" name="c1[]" value="Buisness Administration Department">&nbsp;Buisness Administration Department
								</label>&nbsp;&nbsp;&nbsp;&nbsp;
								<label class=">form-check-label">
									<input type="checkbox" class="form-check-input" name="c1[]" value="Arts Department">&nbsp;Arts Department
								</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<label class=">form-check-label">
									<input type="checkbox" class="form-check-input" name="c1[]" value="Medical Department">&nbsp;Medical Department
								</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<label class="form-check-label">
									<input type="checkbox" class="form-check-input" name="c1[]" value="Yogic science Department">&nbsp;Yogic science Department
								</label>&nbsp;&nbsp;&nbsp;&nbsp;
								<label class="form-check-label">
									<input type="checkbox" class="form-check-input" name="c1[]" value="All Departments">&nbsp;All Departments
								</label>
							</label>
						</div>

    <div class="form-group">
      <label for="exp">Explaination:</label>
      <textarea type="text" class="form-control" id="exp" placeholder="Write Explaination" autocomplete="off" name="exp" style="height:300px; border: 2px solid #008CBA;" required></textarea>
    </div>
   
    <button type="submit" class="button button2" id="insert_post" name="insert_post">Submit</button> <br><br>


      <div class="col-md-12">
            <p style="font-size:20px; background-color:white; color:black; height:40px;">&copy; 2020 Only for admin</p>
          </div>
	
  </form>
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
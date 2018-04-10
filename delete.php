<?php
require('connect.php');
session_start();
if(isset($_SESSION['uid'])){
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
		  <li><a href="form.php" ><font color="yellow">BACK TO POST</font></a></li>
		  <li><a href="logout.php" style="padding-left:800px;"><font color="yellow">ADMIN LOGOUT</font></a></li>
        </ul>
      </div>
    </div>
  </div>
</nav><br><br>

<div  class="container">
	<div class="col-sm-12">			
  <form action="delete.php" method="post">
    <div class="form-group"><br><br><br><Br>
      <label for="title">Enter Post Title:</label>
      <input type="text" class="form-control" id="top" placeholder="Enter Topic" name="top" autocomplete="off" required>
    </div>
    <button type="submit" id="search" name="search">Submit</button><br><br><br><br>
  </form>
</div>
		<div class="col-sm-12">
					<label class="col-sm-1"><h2>Sno.</h2></label>
					<label class="col-sm-4"><h2>Topic</h2></label>
					<label class="col-sm-6"><h2>Information</h2></label>
					<label class="col-sm-1"><h2>Delete</h2></label>
					</div>
		<?php
		if(isset($_POST['search'])){
			$top = $_POST['top'];
			
			$sqll= "select * from posts where topic = '$top'";
			$quer= mysqli_query($con, $sqll) or die('unable to connect');
			$resu= mysqli_num_rows($quer);
			if($resu == 0){
				
				echo "<center><h1>NO DETAILS AVAILABLE FOR THIS!!</h1></center>";
		}
		
			else{
				
				
				$loop=0;
				while($data=mysqli_fetch_assoc($quer)){
					$loop++;
					?>
					
					<div class="col-sm-12" style="border:1px solid; background-color:teal;" >
					<div class="col-sm-1" style="background-color:lightgreen;"><br>
					<?php echo $loop; ?>
					</div>
					<div class="col-sm-4" style="background-color:yellow; word-wrap:break-word;"><br>
					<?php echo $data['topic']; ?>
					</div>
					<div class="col-sm-6" style="background-color:teal; word-wrap:break-word; color:white;"><br>
					<?php echo $data['exp']; ?>
					</div>
					<div class="col-sm-1" style="background-color:orange;"><a href="del.php?sid=<?php echo $data['id'];?>" style="text-decoration:none;
					color:white;"><h4>delete</h4></a>
					</div><br><br><br><br><br><br>
					</div>
					<?php
			}
			}
			
		}
				
	?>
		
	</div>
	
	</body>
	</html>
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

<style>
body {
  margin: 0;
  padding: 0;
  background-color: #17a2b8;
  height: 100vh;
}
#login .container #login-row #login-column #login-box {
  margin-top: 120px;
  max-width: 650px;
  padding : 20px;
  height: 400px;
  border: 1px solid #9C9C9C;
  background-color: #EAEAEA;
}
#login .container #login-row #login-column #login-box #login-form {
  padding: 20px;
}
#login .container #login-row #login-column #login-box #login-form #register-link {
  margin-top: -85px;
}</style>

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
            <li><a href="form.php" ><font color="yellow">BACK TO POST</font></a></li>
      <li><a href="delete.php" ><font color="yellow">DELETE INFO</font></a></li>
       <li><a href="change.php" ><font color="yellow">CHANGE PASSWORD</font></a></li>
      <li><a href="logout.php" ><font color="yellow">ADMIN LOGOUT</font></a></li>
        </ul>
      </div>
    </div>
  </div>
</nav><br><br>

    <div id="login">

        <h3 class="text-center text-white pt-5"></h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="form" class="form" action="change.php" method="post">
                            <h3 class="text-center text-info">Change Password</h3>
                            <div class="form-group">
                                <label for="username" class="text-info">Current Password:</label><br>
                                <div class="input-group">

                                <input type="password" autocomplete="off" name="pass" id="pass" class="form-control"  required >
                                  <div class="input-group-addon">
                                <img src="pics/icon.png" style="height:20px; width:20px;" onmouseover="mouseoverPass();" onmouseout="mouseoutPass();" />
                              </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">New Password:</label><br>
                                      <div class="input-group">
                                <input type="password" autocomplete="off" name="npass" id="npass" class="form-control"  required>
                                  <div class="input-group-addon">
                                <img src="pics/icon.png" style="height:20px; width:20px;" onmouseover="mouseover1();" onmouseout="mouseout1();" />
                              </div>
                            </div>
                            </div>
                               <div class="form-group">
                                <label for="cur password" class="text-info">Confirm New Password:</label><br>
                                      <div class="input-group">
                                <input type="password" autocomplete="off" name="cnpass" id="cnpass" class="form-control"  required>
                                  <div class="input-group-addon">
                                <img src="pics/icon.png" style="height:20px; width:20px;" onmouseover="mouseover2();" onmouseout="mouseout2();" />
                              </div>
                            </div>
                          </div>
                            <div class="form-group">
                               
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="submit">
                            </div>
                         
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>


<?php
  require('connect.php');
if(isset($_POST['submit'])){
  $cur_pass = $_POST['pass'];
      $cur_newpass = $_POST['npass'];
 $cnf_pass = $_POST['cnpass'];

$sql = "select * from login";
  $resl= mysqli_query($con, $sql);
  $row =  mysqli_fetch_assoc($resl);
            if($cur_pass == $row['password']){
              if($cur_newpass == $cnf_pass){
                    
                    $update = "UPDATE `login` SET `password`='$cur_newpass'";
    $update_data = mysqli_query($con, $update);
    if($update_data == true){
echo"<script>
alert('Password Changed Succesfully');
</script>";
}
else{
echo"<script>
alert('There is Something Wrong');
window.open('change.php');
</script>";
}
              }
              else{
                print"<script>alert('Password do not matched')</script>";
              }
            }
              else{
                 print"<script>alert('Your current password is wrong')</script>";

              }
  }
?>
<script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}

function mouseoverPass(obj) {
  var obj = document.getElementById('pass');
  obj.type = "text";
}
function mouseoutPass(obj) {
  var obj = document.getElementById('pass');
  obj.type = "password";
}
function mouseover1(obje) {
  var obje = document.getElementById('npass');
  obje.type = "text";
}
function mouseout1(obje) {
  var obje = document.getElementById('npass');
  obje.type = "password";
}

function mouseover2(objv) {
  var objv = document.getElementById('cnpass');
  objv.type = "text";
}
function mouseout2(objv) {
  var objv = document.getElementById('cnpass');
  objv.type = "password";
}
</script>
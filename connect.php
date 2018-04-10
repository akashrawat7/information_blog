
<!--connection file -->
<?php 

$con = mysqli_connect("localhost","root","","admin");

if (mysqli_connect_error())
{
	echo "failed to connect to MySQL:" .mysqli_connect_error();	
}


 ?>
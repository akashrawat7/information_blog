<?php
require('connect.php');
			$id= $_REQUEST['sid'];
			$sqll= "delete from posts where id = '$id'";
			$quer= mysqli_query($con, $sqll) or die('unable to connect');
		
			if($quer == true){
				?>
				<script> 
				 alert('post deleted succesfully!! click ok!');
				 window.open('admin.php','_self');
				 </script>
				 <?php
			}

?>
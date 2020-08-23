<html>

<input type="password" name="password" id="myPassword" size="30" />
<img src="pics/icon.png" style="height:20px; width:20px; vertical-align:middle;" onmouseover="mouseoverPass();" onmouseout="mouseoutPass();" />


</html>

<script type="text/javascript">
	function mouseoverPass(obj) {
  var obj = document.getElementById('myPassword');
  obj.type = "text";
}
function mouseoutPass(obj) {
  var obj = document.getElementById('myPassword');
  obj.type = "password";
}

</script>
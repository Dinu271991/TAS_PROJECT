<html>
<body>
<table>
<tr>
<?php
$ans1=$ans2=$ans3=$ans4="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {

$ans1=$_POST['ans1'];
$ans2=$_POST['ans2'];
$ans3=$_POST['ans3'];
$ans4=$_POST['ans4'];
}

?>

<form name="myFrm" method="POST"action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<td> 1. Prgm</td>

<td><input type="radio" name="ans1" id="ans1" value="1" <?php if (isset($ans1) && $ans1=="1") echo "checked";?>>Option1</td>
<td><input type="radio" name="ans1" id="ans1" value="2" <?php if (isset($ans1) && $ans1=="2") echo "checked";?>>Option2</td>
<td><input type="radio" name="ans1" id="ans1" value="3" <?php if (isset($ans1) && $ans1=="3") echo "checked";?>>Option3</td>
<td><input type="radio" name="ans1" id="ans1"  value="4" <?php if (isset($ans1) && $ans1=="4") echo "checked";?>>Option4</td>
</tr>

<tr>
<td> 2. Prgm</td>

<td><input type="radio" name="ans2" value="1" <?php if (isset($ans2) && $ans2=="1") echo "checked";?>>Option1</td>
<td><input type="radio" name="ans2" value="2" <?php if (isset($ans2) && $ans2=="2") echo "checked";?>>Option2</td>
<td><input type="radio" name="ans2" value="3" <?php if (isset($ans2) && $ans2=="3") echo "checked";?>>Option3</td>
<td><input type="radio" name="ans2" value="4" <?php if (isset($ans2) && $ans2=="4") echo "checked";?>>Option4</td>
</tr>


<tr>
<td> 3. Prgm</td>

<td><input type="radio" name="ans3" value="1" <?php if (isset($ans3) && $ans3=="1") echo "checked";?>>Option1</td>
<td><input type="radio" name="ans3" value="2" <?php if (isset($ans3) && $ans3=="2") echo "checked";?>>Option2</td>
<td><input type="radio" name="ans3" value="3" <?php if (isset($ans3) && $ans3=="3") echo "checked";?>>Option3</td>
<td><input type="radio" name="ans3" value="4" <?php if (isset($ans3) && $ans3=="4") echo "checked";?>>Option4</td>
</tr>

<tr><td><input type="submit" value="Check"></td></tr>

<script type="text/javascript">
window.onload=function() {
	if(document.cookie.length!=0)
	{
		var nameValueArray=document.cookie.split("=");
		document.
	}
	
}

function chkCookies()
{
	document.cookie="ans1=" +document.getElementById("ans1").value;
	
}	
	



</script>

</form>

</body>

</html>
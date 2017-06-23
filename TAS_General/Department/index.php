<?php

session_start();

if(isset($_SESSION['user_session'])!="")
{
	header("Location: home.php");
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- disable iPhone inital scale -->
<meta name="viewport" content="width=device-width; initial-scale=1.0">
<link href="style1.css" rel="stylesheet" type="text/css">

<script type="text/javascript" src="jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript" src="validation.min.js"></script>
<script type="text/javascript" src="script.js"></script>
<link href="media-queries.css" rel="stylesheet" type="text/css">
<style>

option 
{
	color:black;
}

.header{
	border-radius:4px;
	margin:0 auto;
	margin-top:-20px;
}
footer {
    position: fixed;
    height: 100px;
    bottom: 0;
    width: 100%;
}
img{
	position:absolute;
	left:40px;
	top:15px;
	
}


</style>
<script type="text/javascript">
window.sessionStorage['countRefresh']=0;
</script>
</head>
<body>
<div class="header">
<br/><h2><b>Talent Acquisition System</b></h2>
<img src="suntechlogo.png" width="110" height="70" alt="">
</div>

<div class="wrapper">
	<div class="container">
		
		<center><h1 class="loginText">Login</h1></center>
		<form class="form"  method="post" id="login-form"><br/>
		
			<select name="role" id="role">
			<option value="noSelect" selected>Select role</option>
<?php

 require_once 'dbconfig.php';
  $stmt1 = $db_con->prepare("SELECT * FROM role");
  $stmt1->execute();
  while($row1=$stmt1->fetch(PDO::FETCH_ASSOC))
  {
	  if($row1['role_name']=='DeptMgr')
	  {
		  echo "<option id=$row1[role_name] value=$row1[role_name]>Department Manager</option>";
	  }
	  else
	  {
		echo "<option id=$row1[role_name] value=$row1[role_name]>$row1[role_name]</option>";
	  } 
  } 


?>
</select><br/>
<input type="email"  placeholder="Email address" name="user_email" id="user_email" /><br/>
<input type="password"  placeholder="Password" name="password" id="password" /><br/>
<button type="submit" name="btn-login" id="btn-login">Login</button><br/>



		</form>
	</div>
	<span id="error"></span>
	<ul class="bg-bubbles">
		<li><span style="position:absolute;top:35%;">Html</span></li>
		<li><span style="position:absolute;top:35%;left:20%;">Essay</span></li>
		<li><span style="position:absolute;top:35%;left:20%;">DS</span></li>
		<li><span></span></li>
		<li><span></span></li>
		<li><span style="position:absolute;top:35%;left:20%;">Algorithm</span></li>
		<li><span style="position:absolute;top:35%;left:20%;">Java</span></li>
		<li><span></span></li>
		<li><span></span></li>
		<li><span style="position:absolute;top:40%;left:20%;">Programming</span></li>
	</ul>
	
</div>    
<br/><br/><br/><span id="error1" style="position:absolute;top:85%;left:50%;"></span>
<br/><br/><br/><span id="error" style="position:absolute;top:85%;left:50%;"></span>
</body>
<footer>
    <div class="navbar navbar-inverse navbar-fixed-bottom">
	<br/>
     <span style="color:black;position:absolute;left:40%;bottom:0%;"> &copy; 2017, Sun Technologies <sup> &reg;</sup> All Rights Reserved</span>
	 </div>
	
</footer>
</html>
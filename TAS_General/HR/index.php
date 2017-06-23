<?php

/*
Author: Pradeep Khodke
URL: http://www.codingcage.com/
*/


session_start();

 if(isset($_SESSION['hr_session'])!="")
{
	header("Location: users/staff/index.php");
} 

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login Form </title>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen"> 
<script type="text/javascript" src="jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript" src="validation.min.js"></script>
<link href="style.css" rel="stylesheet" type="text/css" media="screen">
<script type="text/javascript" src="script.js"></script>

<style>
    { margin: 0; padding: 0; }

    html { 
        background: url('recruit5.jpg') no-repeat center center fixed; 
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }
	
	#loginfrm {
		
		
	}
</style>

</head>

<body>

<div id="loginfrm"">
     <form method="post" id="login-form">
	  
<div class="col-lg-2" style="position:fixed;top:30px;right:100px;">
<h2 style="color:white;"><span>HR Login</span></h2>
<br/>
  <input type="email" class="form-control" placeholder="Email address" name="hr_emailId" id="hr_emailId" />
  
  <br/>

<input type="password" class="form-control" placeholder="Password" name="hr_password" id="hr_password" />
  <br/> <br/> 
 <button type="submit" class="btn btn-primary" name="btn-login" id="btn-login">
    		<span class="glyphicon glyphicon-log-in"></span> &nbsp; Sign In
			</button> 
</div>
</form>
</div>
    
<!-- <div class="signin-form">

	<div class="container">
     
        
       <form class="form-signin" method="post" id="login-form">
      
        <h2 class="form-signin-heading">HR Login.</h2><hr />
        
        <div id="error">
        <!-- error will be shown here ! 
        </div>
        
        <div class="form-group">
        <input type="email" class="form-control" placeholder="Email address" name="hr_emailId" id="hr_emailId" />
        <span id="check-e"></span>
        </div>
        
        <div class="form-group">
        <input type="password" class="form-control" placeholder="Password" name="hr_password" id="hr_password" />
        </div>
       
     	<hr />
        
        <div class="form-group">
            <button type="submit" class="btn btn-primary" name="btn-login" id="btn-login">
    		<span class="glyphicon glyphicon-log-in"></span> &nbsp; Sign In
			</button> 
        </div>  
      
      </form>

    </div>
    
</div> -->
    
<script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>
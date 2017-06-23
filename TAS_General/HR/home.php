<!DOCTYPE html>
<html>
<head>
<title style="background-color:Yellow;" >Login Page</title>

<link rel="stylesheet" type="text/css" href="adminstyle.css">

</head>

<body >
 


<div id="content">
<img src="sunimg.png" alt="SunTechnologies" style="width:304px;height:100px;" align="center" id="content">
</div>
<header  style ="color:	#000000 "; >
<h1 align="center" > Sun Technologies Talent Acquisition</h1>
 </header>
 <br/><br/>

<div class="login" align="center">


 
 <form  action="process.php" method="POST">
 
 
 <div class="bgBox">
<h2>Admin Login</h2>
<div class="inputRow">
<input id="username" name="username" placeholder="Enter your Username" value="" autofocus="" type="text"/>

</div>
<div class="inputRow">
<input id="password" name="password" value="" placeholder="Enter your password" type="password"/>
</div>
<div class="inputRow submit">
<input id="sign_in" class="signIn" value="Sign in" type="submit"/>
</div>
<br>

</div>


 <!-- <label> User Name: </label>
  <input type="text" name="username" placeholder="Username" id="username" style="width: 200px;height:25px;"/><br/><br/>
    <label> Password: </label>
 <input type="password" name="password" placeholder="Password" id="password" style="width: 200px;height:25px;"/><br/><br/>

  <input type="submit" name="login" value="Login"  id="login"/> -->

</form>
</div>
<!--<div id="footer" align="center">
 <footer > @Copyright by SunTechnologies</footer> 
</div> -->
</body>

</html>
<?php
session_start();

if(!isset($_SESSION['user_session']))
{
	header("Location: index.php");
}

include_once 'dbconfig.php';

$stmt = $db_con->prepare("SELECT * FROM tbl_candidates WHERE user_id=:uid");
$stmt->execute(array(":uid"=>$_SESSION['user_session']));
$row=$stmt->fetch(PDO::FETCH_ASSOC);



if(isset($_SESSION['btn-test']))
{	
	header("Location: Demo.php");
}



?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>



<meta http-equiv="Content-Type" content="text/html;" charset="utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Home Page</title>
<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen"> 
<link href="../bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen"> 
<script type="text/javascript" src="../jquery-1.11.3-jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Tangerine">
<link href="../style.css" rel="stylesheet" media="screen">
<link href="../StyleSheet/GenericStyleSheet.css" rel="stylesheet" type="text/css">
<link href="../media-query-test.css" rel="stylesheet" type="text/css">
<style>
nav{
	
	height:83px;
}



 .modal-dialog,
.modal-content,
.modal-body {
    /* 80% of window height */
    height: 70%;
	
}   
 

body {
  background: #50a3a2;

}
 
.instructions{
font-family: "Times New Roman";
font-size:30px;

}
#btn-test 
{
	position:absolute;
	top:20%;
	right: 11%;
	width: 10%;

	
}

#instructions
{
	position:absolute;
	top:14%;
	left:5%;
	
}
li {
font-family: "Times New Roman";
font-size:20px;
padding-top:20px;
color:white;

} 
h1
{
	position:relative;
	right:-10%;
}
  
  form button {
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    outline: 0;
    background-color: black;
    border: 0;
    padding: 10px 15px;
    color: white;
    border-radius: 3px;
    width: 250px;
    cursor: pointer;
    font-size: 18px;
    -webkit-transition-duration: 0.25s;
    transition-duration: 0.25s;
}
  


</style>


<script>
//window.open ("","mywindow","status=1,toolbar=0");



</script>


</head>

<body>

<form name="home" action="Demo.php" method="POST">
<nav class="navbar navbar-default navbar-fixed-top" style="background:#FFFAFA;">
      <div class="container">
        <div class="navbar-header">
		<img src="suntechlogo.png" width="110" height="70" alt="" style="position:absolute;left:1%;">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        <!--  <a class="navbar-brand" href="http://www.codingcage.com">Coding Cage</a>-->
        </div>
        <div id="navbar" class="navbar-collapse collapse">
        <!--  <ul class="nav navbar-nav">
            <li class="active"><a href="http://www.codingcage.com/2015/11/ajax-login-script-with-jquery-php-mysql.html">Back to Article</a></li>
            <li><a href="http://www.codingcage.com/search/label/jQuery">jQuery</a></li>
            <li><a href="http://www.codingcage.com/search/label/PHP">PHP</a></li>
          </ul> -->
		  <h2 id="talent">Talent Acquisition System</h2>
          <ul class="nav navbar-nav navbar-right">
            
            <li class="dropdown" style="position:fixed;top:0px;right:100px;height:100px">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
			  <span class="glyphicon glyphicon-user"></span>&nbsp;<b>Hi' <?php echo $row['user_name']; ?></b>&nbsp;<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#" id="ViewProfile" data-target="#ProfileModal"><span class="glyphicon glyphicon-user"></span>&nbsp;View Profile</a></li>
                <li><a onclick="confirmSignout();"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Sign Out</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    
    


<div class="first">
    <div class='alert alert-info'>
		<button class='close' data-dismiss='alert'>&times;</button>
			<strong>Hello <?php echo $row['user_name'].","; ?></strong>    <b>Welcome to <i>Talent Acquisition System</i> of <i>Sun Technologies Integrator Pvt Ltd.</i></b>
    </div>
</div>

<form class="form">
 <button type="submit" name="btn-test" id="btn-test" style="position:fixed;height:5%;">
    		Start Test</span>
			</button> 
			
</form>

 
<ul id="instructions" style="width:75%;">

<center>
<h1><u class="instructions" style="color:black;">Instructions</u></h1><br/>
</center>

	<li>Time allocated for the test is 2 hours.</li><br/>
	<li>Plan your time such that all the questions are attempted, upon your first click on any sections ( Mutliple Choice or Descriptive) image, the <strong id="info">Time Starts</strong>.</li><br/>
	<li>Give importance for questions having highest weightage.</li><br/>
	<li>Please make appropriate assumptions wherever applicable and proceed.</li><br/>
	<li>Review all of your answers before Submitting the sections test and Click on Final Submit.</li>
	<!--<li>Finally click on <strong id="info">Done</strong> button only  <strong id="warning">Once!</strong> when all the sections have been attempted.</li><br/>-->
	<li>Do not <img src="refresh.gif" height="30px" width="40px"></img>(Refresh) the browser or click on <img src="back.png" height="20px" width="30px"></img> (Back) button of the browser, as this will take you out of the test.  </li><br/>
	<li>If you have read the above instructions, Click on Start Test button which is located at the top right.</li>
</ul>

	
	

	
	


<script type="text/javascript">
window.twttr = (function (d, s, id) {
  var t, js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src= "https://platform.twitter.com/widgets.js";
  fjs.parentNode.insertBefore(js, fjs);
  return window.twttr || (t = { _e: [], ready: function (f) { t._e.push(f) } });
}(document, "script", "twitter-wjs"));
</script>

<!-- Place this tag where you want the widget to render. -->


<!-- Place this tag after the last widget tag. -->
<script type="text/javascript">
    (function() {
        var po = document.createElement('script');
        po.type = 'text/javascript';
        po.async = true;
        po.src = 'https://apis.google.com/js/platform.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(po, s);
    })();
</script>


<div class='modal fade' id="ProfileModal" tabindex='-1' role='dialog' aria-labelledby='myModalLabel'>
	 <div class="modal-dialog" role="document" style="position:absolute;top:15%;left:20%;width:50%;overflow:auto;">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Candidate Details</h4>
        </div>
       
        <div class="modal-footer">
          <!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
         </div>
		 
		  <div class="modal-body">
		  
		  <?php
		  
				echo " <iframe src='ManualCandidate.php' class=demo2 scrolling=yes frameborder=0 style=border:none;top:30%;width:100%;height:100%; allowTransparency=true></iframe>";
			
		 ?>
		  
		  		 
        </div>
      </div>
    </div>
  </div>


<script src="../bootstrap/js/bootstrap.min.js"></script>
<script>

function confirmSignout()
{
	 if (confirm('Do you want to Logout?')) 
		  {
				alert("You clicked on OK");
				window.location.href="../logout.php";
				
		  } 
		  else
		  {
			   alert("You clicked on Cancel");
			    
		  }
	
}

</script>
<script>
$(document).ready(function()
{
	$(".first").fadeIn(2000).fadeOut(6000);
	//alert(screen.width);
	/*if(screen.width==1024 || screen.width==1152)
	{
		 $('body').css("zoom", "90%");
	}
	else if(screen.width==1366)
	{
		 $('body').css("zoom", "85%");
	}
	else if(screen.width==1360)
	{
		 $('body').css("zoom", "92%");
	}	
	else if(screen.width==1440)
	{
		 $('body').css("zoom", "125%");
	}	*/
	

	
	$("#ViewProfile").click(function() {
			$('#ProfileModal').modal({
			backdrop: 'static',
		keyboard: false
	}); 
	});
	
});
</script>
</body>
<footer>
    <div class="navbar navbar-inverse navbar-fixed-bottom">
	<br/>
     <span style="color:white;position:absolute;right:42%;"> © 2017, Sun Technologies <sup> ®</sup> All Rights Reserved</span>
	 <span style="color:white;">Recommended Resolution: 1600x900</span>
    </div>
	
</footer>
</html>









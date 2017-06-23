<?php
session_start();

if(!isset($_SESSION['user_session']))
{
	header("Location: ../index.php");
}

include_once '../dbconfig.php';

$stmt = $db_con->prepare("SELECT * FROM tbl_candidates WHERE user_id=:uid");
$stmt->execute(array(":uid"=>$_SESSION['user_session']));
$row=$stmt->fetch(PDO::FETCH_ASSOC);

if(isset($_SESSION['btn-test']))
{	
	header("Location: Demo1.php");
}



?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Development Home Page</title>
<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen"> 
<link href="../bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen"> 
<script type="text/javascript" src="../jquery-1.11.3-jquery.min.js"></script>

<link href="../style.css" rel="stylesheet" media="screen">

<link href="../StyleSheet/GenericStyleSheet.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Tangerine">
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

body
{
	width:100%;
	height:100%;
}



</style>

<script>
//window.open ("","mywindow","status=1,toolbar=0");

</script>


</head>

<body>

<form name="home" action="Demo.php" method="POST">
<nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
		<img src="suntechlogo.jpg" width="110" height="70" alt="">
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
		   <center><h2 id="talent">Talent Acquisition System</h2></center>
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
    
    
<div class="body-container">

<div class="container">
    <div class='alert alert-info'>
		<button class='close' data-dismiss='alert'>&times;</button>
			<strong>Hello '<?php echo $row['user_name']; ?></strong>  Welcome to Talent Acquisition System in Sun Technologies Integrator Pvt Ltd.
    </div>
</div>

<div class="container">
<h2 align="center">Development</h2>

<table class="table">
<tr>
<td><iframe src="../Instructions.html" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:100%;height:450px;" allowTransparency="true"></iframe>
<div style="height: 20px;">&nbsp;</div></td>



</table>

 
<div class="form-group" align="center">
			
            <button type="submit" class="btn btn-primary" name="btn-test" id="btn-test" style="position:absolute;left:80%;top:25%;height:5%;width:10%">
    		<span class="glyphicon glyphicon-pencil"></span> &nbsp; Start Test
			</button> 
</div>  
	
		
	</form>


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


	
    </div>
</div>

</div>
</div>


</div>

</div>

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
		  
				echo " <iframe src='DevelopmentCandidate.php' class=demo2 scrolling=yes frameborder=0 style=border:none;top:30%;width:100%;height:100%; allowTransparency=true></iframe>";
			
		 ?>
		  
		  		 
        </div>
      </div>
    </div>
  </div>
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script>
$(document).ready(function()
{
	$("#ViewProfile").click(function() {
			$('#ProfileModal').modal({
			backdrop: 'static',
		keyboard: false
	}); 
	});
});

</script>
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

</body>
</html>






















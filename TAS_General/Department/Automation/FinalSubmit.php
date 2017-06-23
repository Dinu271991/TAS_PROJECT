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

$id=$row["user_id"];
if(isset($_SESSION['Done']))
{
	
	$_POST['Done']=$_SESSION['Done'];
	header("Location: FinalSubmit.php");
	
	//$_SESSION['timer']=echo "<span id='timer'></span>";
	
}


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>
 #talent{
	
	font-family: 'Times New Roman', serif;
	<!--text-shadow: 4px 4px 4px #aaa;
	font-weight: bold;-->
	color:#bf4040;
	text-align:center;
	font-size:20px;
}

body{
	 background: #50a3a2;
}

</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sections</title>
<script type="text/javascript" src="jquery-1.11.3-jquery.min.js"></script>
<link href="style.css" rel="stylesheet" media="screen">
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Tangerine">
<link href="StyleSheet/GenericStyleSheet.css" rel="stylesheet" type="text/css">
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen"> 
<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen"> 
 <link rel="stylesheet" href="https://code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css" />
 <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Aladin" />
<link href="media-query-test.css" rel="stylesheet" type="text/css">
<body>

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
          <!-- <a class="navbar-brand" href="http://www.codingcage.com">Coding Cage</a> -->
		    
        </div>
        <!--<div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="http://www.codingcage.com/2015/11/ajax-login-script-with-jquery-php-mysql.html">Back to Article</a></li>
            <li><a href="http://www.codingcage.com/search/label/jQuery">jQuery</a></li>
            <li><a href="http://www.codingcage.com/search/label/PHP">PHP</a></li>
          </ul> -->
		   <center><h2 id="talent">Talent Acquisition System</h2></center>
          <ul class="nav navbar-nav navbar-right">
            
             <li class="dropdown" style="position:fixed;top:0px;right:100px;">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
			   
			  <span class="glyphicon glyphicon-user"></span>&nbsp;<b>Hi' <?php echo $row['user_name']; ?></b>&nbsp;<span class="caret"></span></a>
			
              <ul class="dropdown-menu">
                <!--<li><a href="#"><span class="glyphicon glyphicon-user"></span>&nbsp;View Profile</a></li>-->
                <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Sign Out</a></li>
              </ul> 
			  
            </li> 
			<!--<div align="center">
			<h5 class="text-center text_underline"> Timer : <span id='timer'></span></h3> 
			</div>-->
          </ul>
		 
      </div>
	
    </nav> 
   
  
<div class="body-container">



<br/><br/><br/><br/><br/><br/><br/><br/>
<?php
require_once 'dbconfig.php';
if(isset($_SESSION['abort']))
{?>
<h2 align="center" style="color:white;position:absolute;top:50%;left:30%;font-size:40px;"><b>You have aborted the test!!</b></h1>

<?php

        
 $stmt = $db_con->prepare("update tbl_candidateFinalStatus set status='Aborted' where user_id=$id");
 $stmt->execute();

}
else
{
	
	echo "<center><h2 align=center style=color:white;position:absolute;top:50%;left:30%;font-size:30px;><b>You have submitted the test successfully!!</b></h1></center>";
	$stmt = $db_con->prepare("update tbl_candidateFinalStatus set status='Submitted' where user_id=$id");
	$stmt->execute();
	
}
?>
</div>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript">

$(document).ready(function() {
	
	window.setTimeout(function(){

        // Move to a new location or you can do something else
        window.location.href = "logout.php";

    }, 3000);
});

</script>
</body>
</html>











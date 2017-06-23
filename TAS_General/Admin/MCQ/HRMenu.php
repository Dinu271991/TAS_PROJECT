<?php
session_start();

if(!isset($_SESSION['hr_session']))
{
	header("Location: ../index.php");
}

include_once 'dbconfig.php';

$stmt = $db_con->prepare("SELECT * FROM tbl_hr WHERE hr_id=:uid");
$stmt->execute(array(":uid"=>$_SESSION['hr_session']));
$row=$stmt->fetch(PDO::FETCH_ASSOC);

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>HR </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <style>
  .container-fluid {
    background-color: black;
    border-color: #030033;
	color:white;
}
</style>
  </head>

<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Sun Technology</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Add Questions <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#" id="Aptitude">Aptitude</a></li>
          <li><a href="#" id="Program">Programming</a></li>
          <li><a href="#" id="Essay">Essay</a></li>
		  <li><a href="#" id="Html">Html</a></li>
        </ul>
      </li>
       <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Add Scores <span class="caret"></span></a>
	  <ul class="dropdown-menu">
          <li><a href="#" id="AptitudeResult">Aptitude</a></li>
          <li><a href="#" id="ProgramResult">Programming</a></li>
          <li><a href="#" id="EssayResult">Essay</a></li>
		  <li><a href="#" id="HtmlResult">Html</a></li>
        </ul>
	  
	  </li>
      <li><a href="#" id="ResultPage">Result Page</a></li>
    </ul>
	<ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user">Hi,<?php echo $row['admin_name']; ?></span> </a></li> 
        <li><a href="../logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      </ul>
  </div>
</nav>
  <iframe src="AddApti.php" id="AddApti" scrolling="yes" frameborder="0" style="border:none; overflow:hidden; width:1000px;height:1000px;" allowTransparency="true"></iframe>
  <iframe src="Programs/AddProgram.php" id="AddProgram" scrolling="yes" frameborder="0" style="border:none; overflow:hidden; width:1000px;height:1000px;" allowTransparency="true"></iframe>
  <iframe src="HtmlDemo/AddHtml.php" id="AddHtml" scrolling="yes" frameborder="0" style="border:none; overflow:hidden; width:1000px;height:1000px;" allowTransparency="true"></iframe>
  <iframe src="EssayDemo/AddEssay.php" id="AddEssay" scrolling="yes" frameborder="0" style="border:none; overflow:hidden; width:1000px;height:1000px;" allowTransparency="true"></iframe>

  <iframe id="AptiScore" scrolling="yes" frameborder="0" style="border:none; overflow:hidden; width:1000px;height:1000px;" allowTransparency="true"></iframe>
  <iframe src="Results_Program/index.php" id="ProgScore" scrolling="yes" frameborder="0" style="border:none; overflow:hidden; width:1000px;height:1000px;" allowTransparency="true"></iframe>
  <iframe src="Results_Html/index.php" id="HtmlScore" scrolling="yes" frameborder="0" style="border:none; overflow:hidden; width:1000px;height:1000px;" allowTransparency="true"></iframe>
  <iframe src="Results_Essays/index.php" id="EssayScore" scrolling="yes" frameborder="0" style="border:none; overflow:hidden; width:1000px;height:1000px;" allowTransparency="true"></iframe>

   <iframe src="../Final_Results/index.php" id="Result" scrolling="yes" frameborder="0" style="border:none; overflow:hidden; width:1000px;height:1000px;" allowTransparency="true"></iframe>

    
  
<div class="collapse">
  <h3>Welcome to Admin Page</h3>
  <p>Automation</p>
  	
</div>
<script>
$(document).ready(function(){
	$("iframe").hide();
    $("#Aptitude").click(function(){
        $("iframe").hide();
		$("#AddApti").show();
		
    });	
	$("#Program").click(function(){
        $("iframe").hide();
		$("#AddProgram").show();
		
    });
	$("#Essay").click(function(){
       
		$("iframe").hide();
		$("#AddEssay").show();
		
    });
	$("#Html").click(function(){
        
		$("iframe").hide();
		$("#AddHtml").show();
		
    });
	 $("#AptitudeResult").click(function(){
        $("iframe").hide();
		$("#AptiScore").show();
		
    });	
	$("#ProgramResult").click(function(){
        $("iframe").hide();
		$("#ProgScore").show();
		
    });
	$("#EssayResult").click(function(){
       
		$("iframe").hide();
		$("#EssayScore").show();
		
    });
	$("#HtmlResult").click(function(){
        
		$("iframe").hide();
		$("#HtmlScore").show();
		
    });
	$("#ResultPage").click(function(){
        
		$("iframe").hide();
		$("#Result").show();
		
    });
	
	
});
</script>

</body>
</html>






















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
  <!-- <script src="NotifCount.js"></script> -->
  
 <style>
  .container-fluid {
    background-color: black;
    border-color: #030033;
	color:white;
}

.container1 {
  height: 100%;
  width: 100%;
  display: flex;
  position: fixed;
  align-items: center;
  justify-content: center;

}
</style>
  </head>

<body>

<div class="container1">
  <span style='font-family:arial;color:green;font-size:45px;'>Welcome to HR Page!!</span>
</div>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Sun Technology</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Add Details <span class="caret"></span></a>
       <ul class="dropdown-menu">
          <li><a href="#" id="Candidate">Candidate</a></li>
          <li><a href="#" id="Staff">Staff</a></li>    
		  <li><a href="#" id="Department">Department</a></li>   
        </ul>
      </li>
       <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Openings <span class="caret"></span></a>
	  <ul class="dropdown-menu">
	  <?php
	  
		include_once 'dbconfig.php';
		$stmt = $db_con->prepare("SELECT * FROM department");
		$stmt->execute();
		while($row1=$stmt->fetch(PDO::FETCH_ASSOC))
		{
			echo "<li><a href=# id=$row1[DeptName]>$row1[DeptName]</a></li>";
		}
	  ?>
	  
          <!--<li><a href="#" id="Manual">Manual</a></li>
          <li><a href="#" id="Automation">Automation</a></li>
          <li><a href="#" id="Development">Development</a></li>	-->	   
    </ul> 
	</li> 
	<!-- <li><a href="#" id="Notify">Notification</a></li>-->
	</ul>
	
	<ul class="nav navbar-nav navbar-right">
      <li class="dropdown">
       <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="menu"><span class="label label-pill label-danger count1" style="border-radius:10px;"></span> <span class="glyphicon glyphicon-globe" style="font-size:18px;"></span></a>
       <ul class="dropdown-menu" id="menu1"></ul>
	   <li><a href="#"><span class="glyphicon glyphicon-user">Hi,<?php echo $row['hr_name']; ?></span> </a></li> 
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li> 
      </li>
     </ul>
	
	<!-- <ul class="nav navbar-nav navbar-right">
	    <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="label label-pill label-danger count1" style="border-radius:10px;"></span> <span class="glyphicon glyphicon-envelope" style="font-size:18px;"></span></a></li>
         <ul class="dropdown-menu"></ul>
		<li><a href="#"><span class="glyphicon glyphicon-user">Hi,<?php echo $row['hr_name']; ?></span> </a></li> 
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li> 
      </ul> -->
	
  </div>
 
</nav>
  <iframe src="users/index.php" id="CandidateRecord" scrolling="yes" frameborder="0" style="border:none; overflow:hidden; width:100%;height:1000px;" allowTransparency="true"></iframe>
  <iframe src="users/staff/index.php" id="StaffRecord" scrolling="yes" frameborder="0" style="border:none; overflow:hidden; width:100%;height:1000px;" allowTransparency="true"></iframe>
  <iframe src="Departments/index.php" id="DeptRecords" scrolling="yes" frameborder="0" style="border:none; overflow:hidden; width:100%;height:1000px;" allowTransparency="true"></iframe>
  
  
  <iframe src="JobOpenings/index.php" id="AutomationJobOpening" scrolling="yes" frameborder="0" style="border:none; overflow:hidden; width:1000px;height:1000px;" allowTransparency="true"></iframe>
  <!--<iframe src="Notification/index.php" id="Notification" scrolling="yes" frameborder="0" style="border:none; overflow:hidden; width:1000px;height:1000px;" allowTransparency="true"></iframe>-->
  

<!--  <iframe id="AptiScore" scrolling="yes" frameborder="0" style="border:none; overflow:hidden; width:1000px;height:1000px;" allowTransparency="true"></iframe>
  <iframe src="Results_Program/index.php" id="ProgScore" scrolling="yes" frameborder="0" style="border:none; overflow:hidden; width:1000px;height:1000px;" allowTransparency="true"></iframe>
  <iframe src="Results_Html/index.php" id="HtmlScore" scrolling="yes" frameborder="0" style="border:none; overflow:hidden; width:1000px;height:1000px;" allowTransparency="true"></iframe>
  <iframe src="Results_Essays/index.php" id="EssayScore" scrolling="yes" frameborder="0" style="border:none; overflow:hidden; width:1000px;height:1000px;" allowTransparency="true"></iframe>

   <iframe src="../Final_Results/index.php" id="Result" scrolling="yes" frameborder="0" style="border:none; overflow:hidden; width:1000px;height:1000px;" allowTransparency="true"></iframe> -->

   <!-- <button onClick=display();>Display</button>-->
  
<div class="collapse">
  
  	
</div>

<script>
$(document).ready(function(){

	$("iframe").hide();
    $("#Candidate").click(function(){
        $("iframe").hide();
		$(".container1").hide();
		$("#CandidateRecord").show();
		
    });	
	$("#Staff").click(function(){
        $("iframe").hide();
		$(".container1").hide();
		$("#StaffRecord").show();
		
    });
	
	$("#Automation").click(function(){
        $("iframe").hide();
		$(".container1").hide();
		$("#AutomationJobOpening").show();
		
    }); 
	
	$("#Department").click(function() {
		$("iframe").hide();	
		$(".container1").hide();
		$("#DeptRecords").show();	
	});
	
	$("#Notify").click(function(){
        $("iframe").hide();
		$(".container1").hide();
		$("#Notification").show();
		
		
		
    });
	/*$("#Essay").click(function(){
       
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
		
    }); */
	
	
});
</script>
<script>
  var b;
$(document).ready(function(){
	
	function load_unseen_notification(view = '')
	{
		$.ajax({
			url:"fetch.php",
			method:"POST",
			data:{view:view},
			dataType:"json",
			success:function(data)
			{
				$('#menu1').html(data.notification);
				b=data.unseen_notification;
				
				if(data.unseen_notification > 0)
				{
					$('.count1').html(data.unseen_notification);
					
					
				}
			}
			
		});
	}
	
	
	
	
	load_unseen_notification();
	
	/*$('#comment_form').on('submit', function(event){
		event.preventDefault();
		if($('#subject').val() != '' && $('#comment').val() != '')
		{
			var form_data = $(this).serialize();
			$.ajax({
				url:"insert.php",
				method:"POST",
				data:form_data,
				success:function(data)
				{
					$('#comment_form')[0].reset();
					load_unseen_notification();
				}
			});
		}
		else
		{
			alert("Both Fields are Required");
		}
	});
	*/
	$(document).on('click', '#menu', function(){
		$('.count1').html('');
		load_unseen_notification('yes');
	});
	
	setInterval(function(){ 
		load_unseen_notification();; 
	}, 2000);
	
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






















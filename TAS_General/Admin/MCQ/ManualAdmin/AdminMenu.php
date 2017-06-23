<?php
session_start();

if(!isset($_SESSION['admin_session']))
{
	header("Location: ../index.php");
}

include_once 'dbconfig.php';

$stmt = $db_con->prepare("SELECT * FROM tbl_admin WHERE admin_id=:uid");
$stmt->execute(array(":uid"=>$_SESSION['admin_session']));
$row=$stmt->fetch(PDO::FETCH_ASSOC);
$dept=$row['department'];

if($dept=='Automation')
{
	$_SESSION['categoryDept']=2;
}
else if($dept=='Manual')
{
	$_SESSION['categoryDept']=1;
	
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Manual Admin</title>
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
      <li class="active"><a href="#" id="Home">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Add Questions <span class="caret"></span></a>
        <ul class="dropdown-menu">
		
		<?php
		
		include 'dbconfig.php';

		$stmt = $db_con->prepare("SELECT * FROM tbl_mcq_category WHERE DeptId=:deptId");
		$stmt->execute(array(":deptId"=>$_SESSION['categoryDept']));
		
		while($row1=$stmt->fetch(PDO::FETCH_ASSOC))
		{
			$strReplace=str_replace("_"," ",$row1['category_name']);
			echo " <li><a href=# id=$row1[category_name]>$strReplace</a></li>";
		}

		
		
		?>
		
		<!-- <li><a href="#" id="Aptitude">Aptitude</a></li>
          <li><a href="#" id="Program">Programming</a></li>
          <li><a href="#" id="Essay">Essay</a></li>
		  <li><a href="#" id="Html">Html</a></li> -->
        </ul>
      </li>
       <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Add Scores <span class="caret"></span></a>
	  <ul class="dropdown-menu">
	  <?php
		include 'dbconfig.php';

	    $stmt = $db_con->prepare("SELECT * FROM tbl_mcq_category WHERE DeptId=:deptId");
		$stmt->execute(array(":deptId"=>$_SESSION['categoryDept']));
		while($row1=$stmt->fetch(PDO::FETCH_ASSOC))
		{
			$strReplace=str_replace("_"," ",$row1['category_name']);
			$appendResult='_Result';
			$res=$row1['category_name'].$appendResult;
		   	echo " <li><a href=# id=$res>$strReplace</a></li>";
		}
		
	  ?>
         <!-- <li><a href="#" id="AptitudeResult">Aptitude</a></li>
          <li><a href="#" id="ProgramResult">Programming</a></li>
          <li><a href="#" id="EssayResult">Essay</a></li>
		  <li><a href="#" id="HtmlResult">Html</a></li> -->
        </ul>
	  
	  </li>
	    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Requirement Form <span class="caret"></span></a>
	   <ul class="dropdown-menu">
          <li><a href="#" id="AddReqForm">Add Requirement Form</a></li>
          <li><a href="#" id="UpdateReqForm">Edit/Update Requirement Form</a></li>         
        </ul>	   
	   </li>
      <li><a href="#" id="ResultPage"><b>Result Page</b></a></li>
	   <!--<li><a href="#" id="Notify">Notification</a></li>-->
    </ul>
	<ul class="nav navbar-nav navbar-right">
		<li class="dropdown">
       <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="menu"><span class="label label-pill label-danger count1" style="border-radius:10px;"></span> <span class="glyphicon glyphicon-globe" style="font-size:18px;"></span></a>
       <ul class="dropdown-menu" id="menu1"></ul>
        <li><a href="#"><span class="glyphicon glyphicon-user">Hi,<?php echo $row['admin_name']; ?></span> </a></li> 
        <li><a href="../../logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
		</li>
      </ul>
  </div>
</nav>

  <iframe src="Home/index.php" id="HomeContent" scrolling="yes" frameborder="0" style="border:none; overflow:hidden; width:1000px;height:1000px;" allowTransparency="true"></iframe>

  <iframe src="Aptitude/AddApti.php" id="AddApti" scrolling="yes" frameborder="0" style="border:none; overflow:hidden; width:1000px;height:1000px;" allowTransparency="true"></iframe>
  <iframe src="Programming/AddProgram.php" id="AddProgram" scrolling="yes" frameborder="0" style="border:none; overflow:hidden; width:1000px;height:1000px;" allowTransparency="true"></iframe>
  <iframe src="Data_Structure/AddDS.php" id="AddDS" scrolling="yes" frameborder="0" style="border:none; overflow:hidden; width:1000px;height:1000px;" allowTransparency="true"></iframe>
  <iframe src="Browser_and_Internet/AddBI.php" id="AddBI" scrolling="yes" frameborder="0" style="border:none; overflow:hidden; width:1000px;height:1000px;" allowTransparency="true"></iframe>
  <iframe src="Mobile_Computing/AddMC.php" id="AddMC" scrolling="yes" frameborder="0" style="border:none; overflow:hidden; width:1000px;height:1000px;" allowTransparency="true"></iframe>
  <iframe src="SQL/AddSQL.php" id="AddSQL" scrolling="yes" frameborder="0" style="border:none; overflow:hidden; width:1000px;height:1000px;" allowTransparency="true"></iframe>
  <iframe src="OS/AddOS.php" id="AddOS" scrolling="yes" frameborder="0" style="border:none; overflow:hidden; width:1000px;height:1000px;" allowTransparency="true"></iframe>
  <iframe src="General_Computing/AddGC.php" id="AddGC" scrolling="yes" frameborder="0" style="border:none; overflow:hidden; width:1000px;height:1000px;" allowTransparency="true"></iframe>
 <iframe src="Notes/AddNotes.php" id="AddNotes" scrolling="yes" frameborder="0" style="border:none; overflow:hidden; width:1000px;height:1000px;" allowTransparency="true"></iframe>

  
  
  <iframe id="AptiScore" scrolling="yes" frameborder="0" style="border:none; overflow:hidden; width:1000px;height:1000px;" allowTransparency="true"></iframe>
  <iframe src="Data_Structure_Score/index.php" id="DSScore" scrolling="yes" frameborder="0" style="border:none; overflow:hidden; width:1000px;height:1000px;" allowTransparency="true"></iframe>
  <iframe src="Programming_Score/index.php" id="ProgScore" scrolling="yes" frameborder="0" style="border:none; overflow:hidden; width:1000px;height:1000px;" allowTransparency="true"></iframe>
  <iframe src="Browser_and_Internet_Score/index.php" id="BrowsIntScore" scrolling="yes" frameborder="0" style="border:none; overflow:hidden; width:1000px;height:1000px;" allowTransparency="true"></iframe>
  <iframe src="SQL_Score/index.php" id="SQLScore" scrolling="yes" frameborder="0" style="border:none; overflow:hidden; width:1000px;height:1000px;" allowTransparency="true"></iframe>
  <iframe src="OS_Score/index.php" id="OSScore" scrolling="yes" frameborder="0" style="border:none; overflow:hidden; width:1000px;height:1000px;" allowTransparency="true"></iframe>
  <iframe src="Mobile_Computing_Score/index.php" id="MCScore" scrolling="yes" frameborder="0" style="border:none; overflow:hidden; width:1000px;height:1000px;" allowTransparency="true"></iframe>
  <iframe src="General_Computing_Score/index.php" id="GCScore" scrolling="yes" frameborder="0" style="border:none; overflow:hidden; width:1000px;height:1000px;" allowTransparency="true"></iframe>
  <iframe src="Notes_Score/index.php" id="NotesScore" scrolling="yes" frameborder="0" style="border:none; overflow:hidden; width:1000px;height:1000px;" allowTransparency="true"></iframe>

  
  
  
   <iframe src="Results_Manual/index.php" id="Result" scrolling="yes" frameborder="0" style="border:none; overflow:hidden; width:100%;height:1000px;" allowTransparency="true"></iframe>

    <iframe src="../JobPosition/index.php" id="JobPost" scrolling="yes" frameborder="0" style="border:none; overflow:hidden; width:1000px;height:720px;" allowTransparency="true"></iframe>
	
	<!--<iframe src="../Notification/index.php" id="Notification" scrolling="yes" frameborder="0" style="border:none; overflow:hidden; width:1000px;height:1000px;" allowTransparency="true"></iframe>-->
  
   <iframe src="../JobPosition/editJobDetails.php" id="editJobPost" scrolling="yes" frameborder="0" style="border:none; overflow:hidden; width:1000px;height:1000px;" allowTransparency="true"></iframe>
	
    
  
<div class="collapse">
  <h3>Welcome to Admin Page</h3>
  <p>Automation</p>
  	
</div>
<script>
$(document).ready(function(){
	$("iframe").hide();
	
	$("#Home").click(function(){
        $("iframe").hide();
		$("#HomeContent").show();
		
    });	
	
	
    $("#Aptitude").click(function(){
        $("iframe").hide();
		$("#AddApti").show();
		
    });	
	$("#Programming").click(function(){
        $("iframe").hide();
		$("#AddProgram").show();
		
    });
	$("#Data_Structure").click(function(){
       
		$("iframe").hide();
		$("#AddDS").show();
		
    });
	$("#Browser_and_Internet").click(function(){
        
		$("iframe").hide();
		$("#AddBI").show();
		
    });
	 $("#Mobile_Computing").click(function(){
        $("iframe").hide();
		$("#AddMC").show();
		
    });	
	$("#SQL").click(function(){
        $("iframe").hide();
		$("#AddSQL").show();
		
    });
	$("#Operating_System").click(function(){
       
		$("iframe").hide();
		$("#AddOS").show();
		
    });
	$("#General_Computing").click(function(){
        
		$("iframe").hide();
		$("#AddGC").show();
		
    });
	$("#Notes").click(function(){
        
		$("iframe").hide();
		$("#AddNotes").show();
		
    });
	$("#Data_Structure_Result").click(function(){
        
		$("iframe").hide();
		$("#DSScore").show();
		
    });
	$("#Programming_Result").click(function(){
        
		$("iframe").hide();
		$("#ProgScore").show();
		
    });
	$("#Browser_and_Internet_Result").click(function(){
        
		$("iframe").hide();
		$("#BrowsIntScore").show();
		
    });
	$("#SQL_Result").click(function(){
        
		$("iframe").hide();
		$("#SQLScore").show();
		
    });
	
	$("#Operating_System_Result").click(function(){
        
		$("iframe").hide();
		$("#OSScore").show();
		
    });
	
	$("#Mobile_Computing_Result").click(function(){
        
		$("iframe").hide();
		$("#MCScore").show();
		
    });
	
	$("#General_Computing_Result").click(function(){
        
		$("iframe").hide();
		$("#GCScore").show();
		
    });
	
	$("#Notes_Result").click(function(){
        
		$("iframe").hide();
		$("#NotesScore").show();
		
    });
	
	$("#ResultPage").click(function(){
        
		$("iframe").hide();
		$("#Result").show();
		
    });
	
	
	
	
	
	$("#UpdateReqForm").click(function(){
        $("iframe").hide();
		$("#editJobPost").show();
		
		
		
    });
	
	
});
</script>

<script>
  var b;
$(document).ready(function(){
	
	function load_unseen_notification(view = '')
	{
		$.ajax({
			url:"../Notification/fetch.php",
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
	}); */
	
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
</html>






















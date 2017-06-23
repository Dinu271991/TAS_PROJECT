
<html>
<head>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen"> 
<link href="assets/datatables.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="mynewstyle.css">
<script type="text/javascript" src="assets/jquery-1.11.3-jquery.min.js"></script>


<script>

$(document).ready(function() {
	
	$('.category').hide();
	$('#categoryContent').hide();
	
$("#SaveProgram").click(function(){
		$.post("tempPrgmScore.php",$("#myFrm").serialize(),function(response,status){ // Required Callback Function

	alert("Your answers has been saved successfully!!");

});
}); 

$("#SaveHtml").click(function(){
		$.post("tempHtmlScore.php",$("#myFrm2").serialize(),function(response,status){ // Required Callback Function

	alert("Your answers has been saved successfully!!");

});
}); 


$("#SaveEssay").click(function(){
		$.post("tempEssayScore.php",$("#myFrm3").serialize(),function(response,status){ // Required Callback Function

	alert("Your answers has been saved successfully!!");

});
}); 


  $("#Programming").click(function(){
		$("#contentEmpty").hide();
		$('#categoryContent').show();
		$(".category").hide();
		$("#ProgScoreDiv").show();
  });
  $("#Html").click(function(){
	    $("#contentEmpty").hide();
		$('#categoryContent').show();
	    $(".category").hide();
        $("#HtmlScoreDiv").show();
  });
  $("#Essay").click(function() {
	  $("#contentEmpty").hide();
	  $('#categoryContent').show();
	  $(".category").hide();
	   $("#EssayScoreDiv").show();
  });	
	
	

	
});
    

</script>
<style>

div #categoryContent{
    background-color: white;
	color:white
    width: 100%;
    border: 25px solid gray;
    padding: 25px;
    margin: 25px;
	
	
}

</style>
</head>
<body>


<?php
include_once 'dbconfig.php';

if($_GET['edit_id'] && $_GET['prog_id'])
{
	$id = $_GET['edit_id'];	
	$esid=$_GET['prog_id'];	
	$stmt=$db_con->prepare("SELECT c.user_id,c.user_name,c.department,tr.test_date from tbl_candidates c,tbl_result tr where c.user_id=tr.user_id and c.user_id=:id ORDER BY c.user_id DESC");
	$stmt->bindParam(":id", $id);
	$stmt->execute();	
	
	$row=$stmt->fetch(PDO::FETCH_ASSOC);
}

?>
<style type="text/css">
#dis{
	display:none;
}
</style>

	 <!--<form method='post' id='emp-UpdateForm' action='#'>-->
	 
 
    <table class='table table-bordered'>
 		<!-- <input type='hidden' name='id' value='' /> -->
		<tr>
            <td>Candidate Id</td>
            <td><input type='text' name='id' class='form-control' value='<?php echo $row['user_id']; ?>' required readonly></td>
        </tr>
		<tr>
            <td>Candidate Name</td>
            <td><input type='text' name='name' class='form-control' value='<?php echo $row['user_name']; ?>' required readonly></td>
        </tr>
		<tr>
            <td>Test Date</td>
            <td><input type='text' name='testDate' class='form-control' value='<?php echo $row['test_date']; ?>' required readonly></td>
        </tr>
		<tr>
            		
        <tr>
            <td>Department</td>
            <td><input type='text' name='dept' class='form-control' value='<?php echo $row['department']; ?>' required readonly></td>
        </tr>
		
		 <tr>
            <td colspan="2">
            <button type="submit" class="btn btn-primary" name="btn-update" id="btn-update">
    		<span class="glyphicon glyphicon-plus"></span> Save Updates
			</button>
            </td>
        </tr>
 
    </table>
	<br/><br/>
	
	
	<table>
	
	<tr><td><b><span style="font-size:25px;">Categories</span></b></td></tr>
	<tr style="height:20px;"></tr>
		<?php
		
			$stmt=$db_con->prepare("SELECT category_name from tbl_mcq_category where DeptId=2 and category_type='Descriptive'");
			$stmt->execute();	
			
			echo "<tr style='position:absolute;left:10%;'>";
			while($row1=$stmt->fetch(PDO::FETCH_ASSOC))
			{
				
				echo "<td><b><button type='button' class='btn btn-primary glyphicon glyphicon-plus' id='$row1[category_name]' style='margin-left:5em;'>$row1[category_name]</button></b></td>";
				
			}
			echo "</tr>";
			echo "</table>";
			
			
			$stmt = $db_con->prepare("SELECT program_id,prog_desc,prgm_score from tbl_userprogram where uid=:id");
			$stmt->bindParam(":id", $id);
			$stmt->execute(); 

			echo "<br/><br/>";
			echo "<div id='categoryContent' style='position:relative;left:-1.5%;'>";
			
			echo "<center><p id='contentEmpty' style='font-size:25px'>Edit or Update Score</p></center>";
			
			echo "<form method='post' id='myFrm'>";
			echo "<div id='ProgScoreDiv' class='category'>";
			echo "<center><h2 class='form-signin-heading' style='font-family:italic'><b>Programming Section</b></h2></center><br/>";
			echo "<input type='text' name='editId' id='editId' value='$id' hidden />";
			while($row=$stmt->fetch(PDO::FETCH_ASSOC))
			{
				
				echo "<table class='table table-bordered'>";			
				echo "<tr><td>Programming Id :</td><td><input type=text  class='form-control' value=$row[program_id] readonly/></td></tr>"; 
				echo "<tr><td>Program Description:</td><td> <textarea autocomplete='off' autocorrect='off' autocapitalize='off' spellcheck='false' rows='10' cols='50' style='resize:none;' name='$row[program_id]' class='form-control' required readonly>$row[prog_desc]</textarea></td></tr>";
				echo "<tr><td>Programming Score:</td><td><input type=text name='Program$row[program_id]' id='Program$row[program_id]' class='form-control' value='$row[prgm_score]'/></td></tr>";
				echo "</table>";
				echo "<br/>";
			}
			echo "<center><button type='button' name='SaveProgram' id='SaveProgram' class='btn btn-success'>Save Programming Score</button></center>";
			echo "</div>";
			echo "</form>";
		
			
			
			$stmt = $db_con->prepare("SELECT html_id,html_desc,html_score from tbl_userhtml where uid=:id");
			$stmt->bindParam(":id", $id);
			$stmt->execute();   
   
		
			echo "<form method='post' id='myFrm2'>";
			echo "<div id='HtmlScoreDiv' class='category'>";
			echo "<center><h2 class='form-signin-heading' style='font-family:italic'><b>Html Section</b></h2></center><br/>";
			echo "<input type='text' name='editId' id='editId' value='$id' hidden />";
			while($row=$stmt->fetch(PDO::FETCH_ASSOC))
			{
				echo "<table class='table table-bordered'>";				
				echo "<tr><td>Html Id :</td><td><input type=text value=$row[html_id] class='form-control' readonly/></td></tr>"; 
				echo "<tr><td>Html Description:</td><td> <textarea autocomplete='off' autocorrect='off' autocapitalize='off' spellcheck='false' rows='10' cols='50' name='$row[html_id]' class='form-control' style='resize:none;' required readonly>$row[html_desc]</textarea></td></tr>";
				echo "<tr><td>Html Score: </td><td><input type=text  name='Html$row[html_id]' id='Html$row[html_id]' class='form-control' value='$row[html_score]'/></td></tr>";
				echo "</table>";
				echo "<br/>";
			}
			echo "<center><button type='button' name='SaveHtml' id='SaveHtml' class='btn btn-success'>Save Html Score</button></center>";
			echo "</div>";
			echo "</form>";
			
			
			
			$stmt = $db_con->prepare("SELECT essay_id,essay_desc,essay_score from tbl_useressays where uid=:id");
			$stmt->bindParam(":id", $id);
			$stmt->execute();   
   
			echo "<form method='post' id='myFrm3'>";
			echo "<div id='EssayScoreDiv' class='category'>";
			echo "<center><h2 class='form-signin-heading' style='font-family:italic'><b>Essay Section</b></h2></center><br/>";
			echo "<input type='text' name='editId' id='editId' value='$id' hidden />";
			while($row=$stmt->fetch(PDO::FETCH_ASSOC))
			{
				echo "<table class='table table-bordered'>";				
				echo "<tr><td>Essay Id :</td><td><input type=text value=$row[essay_id] class='form-control' readonly/></td></tr>"; 
				echo "<tr><td>Essay Description:</td><td> <textarea autocomplete='off' autocorrect='off' autocapitalize='off' spellcheck='false' rows='10' cols='50' name='$row[essay_id]' class='form-control' style='resize:none;' required readonly>$row[essay_desc]</textarea></td></tr>";
				echo "<tr><td>Essay Score: </td><td><input type=text  name='Essay$row[essay_id]' id='Essay$row[essay_id]' class='form-control' value='$row[essay_score]'/></td></tr>";
				echo "</table>";
				echo "<br/>";
			}
			echo "<center><button type='button' name='SaveEssay' id='SaveEssay' class='btn btn-success'>Save Html Score</button></center>";
			echo "</div>";
			echo "</form>";
			echo "<br/>";
			echo "</div>";
				
			
			
			
		?>
		
		
</form>
     
</body>
</html>
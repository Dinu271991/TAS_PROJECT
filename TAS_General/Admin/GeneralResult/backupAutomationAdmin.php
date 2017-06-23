
<html>
<head>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen"> 
<link href="assets/datatables.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="mynewstyle.css">
<script type="text/javascript" src="assets/jquery-1.11.3-jquery.min.js"></script>


<script>

$(document).ready(function() {
	alert("JQuery wrkng fine!!");
	$('.category').hide();

		$("#Save").click(function(){
		$.post("tempProg.php",$("#myFrm").serialize(),function(response,status){ // Required Callback Function

	alert("Your answers has been saved successfully!!");

});

});

  $("#Programming").click(function(){
        $("#ProgScoreDiv").toggle();
  });
  $("#Html").click(function(){
        $("#HtmlScoreDiv").toggle();
  });
  $("#Essay").click(function() {
	   $("#EssayScoreDiv").toggle();
  });
	
	
	
	$.alert({
        title: 'Alert!',
        content: 'Simple alert!',
    });
	
});
    

</script>
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

	 <form method='post' id='emp-UpdateForm' action='#'>
 
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
	
	
	<table class='table table-bordered'>
	
	<tr style='border:solid;'><td style='border:solid;'><b>Categories</b></td></tr>
		
		<?php
		
			$stmt=$db_con->prepare("SELECT category_name from tbl_mcq_category where DeptId=2 and category_type='Descriptive'");
			$stmt->execute();	
			
			echo "<tr style='border:solid;'>";
			while($row1=$stmt->fetch(PDO::FETCH_ASSOC))
			{
				
				echo "<td style='border:none;align:center;'><button type='button' class='btn btn-primary glyphicon glyphicon-plus' id='$row1[category_name]' '>$row1[category_name]</button></td>";
				
			}
			echo "</tr>";
			echo "</table>";
			
			$stmt = $db_con->prepare("SELECT program_id,prog_desc,prgm_score from tbl_userprogram where uid=:id");
			$stmt->bindParam(":id", $id);
			$stmt->execute();   
   
			echo "<div id='ProgScoreDiv' class='category'>";
			while($row=$stmt->fetch(PDO::FETCH_ASSOC))
			{
				echo "<table>";			
				echo "<tr><td>Programming Id :</td><td><input type=text value=$row[program_id] readonly/></td></tr>"; 
				echo "<tr><td>Program Description:</td><td> <textarea autocomplete='off' autocorrect='off' autocapitalize='off' spellcheck='false' rows='10' cols='50' name='$row[program_id]' required readonly>$row[prog_desc]</textarea></td></tr>";
				echo "<tr><td>Programming Score:</td><td><input type=text value=$row[prgm_score] name='Program$row[program_id]' id='Program$row[program_id]'/></td></tr>";
				echo "</table>";
			}
			echo "</div>";
			
			$stmt = $db_con->prepare("SELECT html_id,html_desc,html_score from tbl_userhtml where uid=:id");
			$stmt->bindParam(":id", $id);
			$stmt->execute();   
   
			echo "<div id='HtmlScoreDiv' class='category'>";
			while($row=$stmt->fetch(PDO::FETCH_ASSOC))
			{
				echo "<table>";				
				echo "<tr><td>Html Id :</td><td><input type=text value=$row[html_id] readonly/></td></tr>"; 
				echo "<tr><td>Html Description:</td><td> <textarea autocomplete='off' autocorrect='off' autocapitalize='off' spellcheck='false' rows='10' cols='50' name='$row[html_id]' required readonly>$row[html_desc]</textarea></td></tr>";
				echo "<tr><td>Html Score: </td><td><input type=text value=$row[html_score] name='Html$row[html_id]' id='Html$row[html_id]'/></td></tr>";
				echo "</table>";
			}
			echo "</div>";
			
			
			
			$stmt = $db_con->prepare("SELECT essay_id,essay_desc,essay_score from tbl_useressays where uid=:id");
			$stmt->bindParam(":id", $id);
			$stmt->execute();   
   
			echo "<div id='EssayScoreDiv' class='category'>";
			while($row=$stmt->fetch(PDO::FETCH_ASSOC))
			{
				echo "<table>";				
				echo "<tr><td>Essay Id :</td><td><input type=text value=$row[essay_id] readonly/></td></tr>"; 
				echo "<tr><td>Essay Description:</td><td> <textarea autocomplete='off' autocorrect='off' autocapitalize='off' spellcheck='false' rows='10' cols='50' name='$row[essay_id]' required readonly>$row[essay_desc]</textarea></td></tr>";
				echo "<tr><td>Essay Score: </td><td><input type=text value=$row[essay_score] name='Essay$row[essay_id]' id='Essay$row[essay_id]'/></td></tr>";
				echo "</table>";
			}
			echo "</div>";
				
			echo "</table>";
			
			
		?>
		
		
       
</form>
     
</body>
</html>
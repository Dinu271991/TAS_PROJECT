<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin- MCQ Functionality</title>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen"> 
<link href="assets/datatables.min.css" rel="stylesheet" type="text/css">

<script type="text/javascript" src="assets/jquery-1.11.3-jquery.min.js"></script>

<script type="text/javascript">
$(document).ready(function(){
	
	$("#btn-view").hide();
	
	$("#btn-add").click(function(){
		$(".content-loader").fadeOut('slow', function()
		{
			$(".content-loader").fadeIn('slow');
			$(".content-loader").load('add_form.php');
			$("#btn-add").hide();
			$("#btn-view").show();
		});
	});
	
	$("#btn-view").click(function(){
		
		$("body").fadeOut('slow', function()
		{
			$("body").load('index.php');
			$("body").fadeIn('slow');
			window.location.href="index.php";
		});
	});
	
});
</script>

</head>

<body>
    


	<div class="container">
      
        <h2 class="form-signin-heading">MCQ List</h2><hr />
        <button class="btn btn-info" type="button" id="btn-add"> <span class="glyphicon glyphicon-pencil"></span> &nbsp; Add MCQs</button>
        <button class="btn btn-info" type="button" id="btn-view"> <span class="glyphicon glyphicon-eye-open"></span> &nbsp; View MCQs</button>
        <hr />
        
        <div class="content-loader">
        
        <table cellspacing="0" width="100%" id="example" class="table table-striped table-hover table-responsive">
        <thead>
        <tr>
        <th>Question ID</th>
        <th>Question Description</th>
        <th>Option 1</th>
      	<th>Option 2</th>
		<th>Option 3</th>
		<th>Option 4</th>
		<th>Answer</th>
        <th>edit</th>
        <th>delete</th>
        </tr>
        </thead>
        <tbody>
        <?php
        require_once 'dbconfig.php';
        $i=1;
        $stmt = $db_con->prepare("SELECT * FROM mcq ORDER BY qid DESC");
        $stmt->execute();
		while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		{
			
			?>
			<tr>
			
				<?php 
					$rs =mysql_query("SELECT * FROM mcq");

					//$row= mysql_fetch_row($rs);
					$i=1;
					//echo "<table>";
					while($row=mysql_fetch_array($rs)) {
						
					//$true_ans=$row["ans1"];
					$que_des=$row["qdesc"]; 
					$option1=$row["option1"];
					$option2=$row["option2"]; 
					$option3=$row["option3"]; 
					$option4=$row["option4"]; 
					$num=mysql_num_rows($rs)or die(mysql_error());

					//for($i=1;$i<=$num; $i++){

					echo "<form name=myfm method=post action=ViewMCQs.php>"; 
					echo "<tr> <td >$i.$que_des </td> </tr> ";

					echo "<di<tr><td class=style8><input type=radio name=ans$i value=1>$option1";
					echo "<tr><td class=style8> <input type=radio name=ans$i value=2>$option2";
					echo "<tr><td class=style8><input type=radio name=ans$i value=3>$option3";
					echo "<tr><td class=style8><input type=radio name=ans$i value=4>$option4";

					//mysql_query("INSERT INTO `mst_question` (`act_answer') VALUES ('ans$i');");

					//if($true_ans==$option1)
					//mysql_query("INSERT INTO `mst_question`( `que_desc`, `ans1`, `ans2`, `ans3`, `ans4`, `true_ans`, `act_answer`) VALUES ('$que_des','$option1','$option2','$option3','$option4','$true_ans','$option1')");
					//else if($true_ans==option1
					//echo "</table>";


					$i++;


			}

				?>
			</tr>
			<?php
			$i++;
		}
		?>
        </tbody>
        </table>
        
        </div>

    </div>
    
    <br />
    
    <div class="container">
      
        <div class="alert alert-info">
      <a href="http://www.suntechnologies.com/" target="_blank">About Us</a>
        </div>

    </div>
    

    
<script src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/datatables.min.js"></script>
<script type="text/javascript" src="crud.js"></script>

<script type="text/javascript" charset="utf-8">
$(document).ready(function() {
	$('#example').DataTable();

	$('#example')
	.removeClass( 'display' )
	.addClass('table table-bordered');
});
</script>
</body>
</html>
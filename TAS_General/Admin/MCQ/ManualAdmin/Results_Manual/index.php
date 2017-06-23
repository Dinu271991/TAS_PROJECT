<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>HR View - Staff Functionality</title>
<link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="../../bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen"> 
<link href="../../assets/datatables.min.css" rel="stylesheet" type="text/css">

<script type="text/javascript" src="../../assets/jquery-1.11.3-jquery.min.js"></script>

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

<body style="position:absolute;width:300px;">
    


	<div class="container">
      
        <h2 class="form-signin-heading">Manual Results</h2><hr />
       <!-- <button class="btn btn-info" type="button" id="btn-add"> <span class="glyphicon glyphicon-pencil"></span> &nbsp; Add Essay Scores</button>-->
        <button class="btn btn-info" type="button" id="btn-view"> <span class="glyphicon glyphicon-eye-open"></span> &nbsp; View Manual Results</button>
        <hr />
        
        <div class="content-loader">
        
        <table cellspacing="0" width="100%" id="example" class="table table-striped table-hover table-responsive">
        <thead>
        <tr>
		<?php
		
		include 'dbconfig.php';
		$_SESSION['categoryDept']=1;
		$stmt = $db_con->prepare("SELECT * FROM tbl_mcq_category WHERE DeptId=:deptId");
		$stmt->execute(array(":deptId"=>$_SESSION['categoryDept']));
		echo "<th>User Id</th>";
		while($row1=$stmt->fetch(PDO::FETCH_ASSOC))
		{
			$strReplace=str_replace("_"," ",$row1['category_name']);
			$categName=$strReplace." Score";
			echo "<th style=width: 100%;>$categName</th>";
		}
		echo "<th style=font-weight: bold;>Grand Total</b></th>";
		
		
		?>
        <!--<th>User Id</th>
        <th>Aptitude Score</th>
        <th>Programming Score</th>
		<th>Essay Score</th>
		<th>HTML Score</th> -->
		
		<!-- <th>View and Update Score</th> -->
        <!-- <th>delete</th> -->
        </tr>
        </thead>
        <tbody>
        <?php
        require_once 'dbconfig.php';
		
		$stmt6 = $db_con->prepare("select t.user_id,t.score,ds.final_ds_score,p.final_prog_score,b.finalBrowsIntScore,m.final_mc_score,s.finalsqlscore,o.finalosscore,g.finalgcscore,n.final_notes_score from tbl_result t,tbl_manual_finaldsscore ds,tbl_manual_progfinalscore p,tbl_manual_finalbrowsintscore b,tbl_manual_finalmcscore m,tbl_manual_finalsqlscore s,tbl_manual_finalosscore o,tbl_manual_finalgcscore g,tbl_manual_finalnotesscore n where t.user_id=ds.uid and ds.uid=p.uid and p.uid=b.uid and b.uid=m.uid and m.uid=s.uid and s.uid=o.uid and o.uid=g.uid and g.uid=n.uid;");
        $stmt6->execute();
		
		$stmtCutOff=$db_con->prepare("Select * from tbl_dept_cutoff where DeptId=1");
		$stmtCutOff->execute();
		$rowCutOff=$stmtCutOff->fetch(PDO::FETCH_ASSOC);
		$manualCutOff=$rowCutOff["CutOff"];
		
        
        /*$stmt = $db_con->prepare("SELECT * FROM finalscores");
        $stmt->execute(); */
		while($row=$stmt6->fetch(PDO::FETCH_ASSOC))
		{
			$id=$row['user_id'];
			?>
			<tr id=<?php echo $id; ?> >
			<td><?php echo $row['user_id']; ?></td>
			<td><?php echo $row['score']; ?></td>
			<td><?php echo $row['final_ds_score']; ?></td>
			<td><?php echo $row['final_prog_score']; ?></td>
			<td><?php echo $row['finalBrowsIntScore']; ?></td>
			<td><?php echo $row['final_mc_score']; ?></td>
			<td><?php echo $row['finalsqlscore']; ?></td>
			<td><?php echo $row['finalosscore']; ?></td>
			<td><?php echo $row['finalgcscore']; ?></td>
			<td><?php echo $row['final_notes_score']; ?></td>
			<?php  ?>
			<td ><?php 
			$finalScore=$row['score']+$row['final_ds_score']+$row['final_prog_score']+$row['finalBrowsIntScore']+$row['final_mc_score']+$row['finalsqlscore']+$row['finalosscore']+$row['finalgcscore']+$row['final_notes_score'];
			if($finalScore>$manualCutOff)
			{
				
				echo '<script type="text/javascript" charset="utf-8">';
				?>
				var simple = '<?php echo $id; ?>';
				<?php 
				echo '$("#"+simple).css("background-color","#BFEE90");';
				echo '</script>';
				echo "<b>".$finalScore."</b>"; 
			}
			else
			{
				
				echo '<script type="text/javascript" charset="utf-8">';
				?>
				var simple = '<?php echo $id; ?>';
				<?php 
				echo '$("#"+simple).css("background-color","#ff4d4d");';
				echo '</script>';
				echo "<b>".$finalScore."</b>"; 
			
			}
			
			?>
			
			</td>
			
		
			</tr>
			<?php
			
			
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
    

    
<script src="../../bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../../assets/datatables.min.js"></script>
<script type="text/javascript" src="crud.js"></script>

<script type="text/javascript" charset="utf-8">
function highlight() 
{
	alert("Hello");
	
}


</script>

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
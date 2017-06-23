<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>HR View - Staff Functionality</title>
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
      
        <h2 class="form-signin-heading">Result Page</h2><hr />
       <!-- <button class="btn btn-info" type="button" id="btn-add"> <span class="glyphicon glyphicon-pencil"></span> &nbsp; Add Essay Scores</button>-->
        <button class="btn btn-info" type="button" id="btn-view"> <span class="glyphicon glyphicon-eye-open"></span> &nbsp; View Result Page</button>
        <hr />
        
        <div class="content-loader">
        
        <table cellspacing="0" width="100%" id="example" class="table table-striped table-hover table-responsive">
        <thead>
        <tr>
        <th>User Id</th>
		<th>Candidate Name</th>
        <th>Aptitude Score</th>
        <th>Programming Score</th>
		<th>Essay Score</th>
		<th>HTML Score</th>
		<th>Grand Score</th>
		<th>Status</th>
		<!-- <th>View and Update Score</th> -->
        <!-- <th>delete</th> -->
        </tr>
        </thead>
        <tbody>
        <?php
        require_once 'dbconfig.php';
		
		$stmt6 = $db_con->prepare("select t.user_id,c.user_name,t.score,p.final_prog_score,e.final_essay_score,h.final_html_score from tbl_result t,tbl_candidates c,tbl_finalprogscore p,tbl_finalessayscore e,tbl_finalhtmlscore h where c.user_id=t.user_id and t.user_id=p.uid and p.uid=e.uid and e.uid=h.uid;");
        $stmt6->execute();
		$flag="";
		
        
        /*$stmt = $db_con->prepare("SELECT * FROM finalscores");
        $stmt->execute(); */
		while($row=$stmt6->fetch(PDO::FETCH_ASSOC))
		{
			$id=$row['user_id'];
			?>
			<tr id=<?php echo $id; ?> style="color:white;">
			<td><?php echo $row['user_id']; ?></td>
			<td><?php echo $row['user_name']; ?></td>
			<td><?php echo $row['score']; ?></td>
			<td><?php echo $row['final_prog_score']; ?></td>
			<td><?php echo $row['final_essay_score']; ?></td>
			<td><?php echo $row['final_html_score']; ?></td>
			<?php  ?>
			<td><?php 
			$finalScore=$row['score']+$row['final_prog_score']+$row['final_essay_score']+$row['final_html_score'];
			
			if($finalScore>28)
			{
				
				echo '<script type="text/javascript" charset="utf-8">';
				?>
				var simple = '<?php echo $id; ?>';
				<?php 
				echo '$("#"+simple).css("background-color","#1caf9a");';
				echo '</script>';
				echo "<b>".$finalScore."</b>"; 
				$flag="Selected";
				
				
			}
			else
			{
				
				echo '<script type="text/javascript" charset="utf-8">';
				?>
				var simple = '<?php echo $id; ?>';
				<?php 
				echo '$("#"+simple).css("background-color","#000");';
				echo '</script>';
				echo "<b>".$finalScore."</b>"; 
				$flag="Rejected";
				
			
			}
			
			//echo $finalScore; ?></td>
			
			<td style="color:white;"><?php echo $flag; ?></td>
		
			</tr>
			<?php
			
			
		}
		?>
        </tbody>
        </table>
        
        </div>

    </div>
    
    <br />
    
  
    

    
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
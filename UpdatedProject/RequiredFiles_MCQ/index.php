<?php $upOne = basename(__DIR__ ); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Programming-Questions</title>
<link href="../RequiredFiles_MCQ/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="../RequiredFiles_MCQ/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen"> 
<link href="../RequiredFiles_MCQ/assets/datatables.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="../RequiredFiles_MCQ/mynewstyle.css">
<script type="text/javascript" src="../RequiredFiles_MCQ/assets/jquery-1.11.3-jquery.min.js"></script>


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
      
        <h2 class="form-signin-heading"><?php echo $upOne;?> Records.</h2><hr />
        <button class="btn btn-info" type="button" id="btn-add"> <span class="glyphicon glyphicon-pencil"></span> &nbsp; Add <?php echo $upOne;?></button>
        <button class="btn btn-info" type="button" id="btn-view"> <span class="glyphicon glyphicon-eye-open"></span> &nbsp; View <?php echo $upOne;?></button>
        <hr />
        
        <div class="content-loader">
        
        <table cellspacing="0" width="100%" id="example" class="table table-striped table-hover table-responsive">
        <thead>
        <tr>
        <th><?php echo $upOne;?> ID</th>
        <th><?php echo $upOne;?> Description</th>
		<th>option 1</th>
		<th>option 2</th>
		<th>option 3</th>
		<th>option 4</th>
		<th>answer</th>
        <th>edit</th>
        <th>delete</th>
		
        </tr>
        </thead>
        <tbody>
        <?php
        require_once '../RequiredFiles_MCQ/dbconfig.php';
		$dept="Automation";
		
        
        $stmt = $db_con->prepare("SELECT * FROM tbl_".$dept."_".$upOne." ORDER BY ".$upOne."_id DESC");
        $stmt->execute();
		while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		{
			?>
			<tr>
			<td><?php echo $row[$upOne.'_id']; ?></td>
			<td><?php echo $row[$upOne.'_desc']; ?></td>
			<td><?php echo $row['option1']; ?></td>
			<td><?php echo $row['option2']; ?></td>
			<td><?php echo $row['option3']; ?></td>
			<td><?php echo $row['option4']; ?></td>
			<td><?php echo $row['answer']; ?></td>
			<td align="center">
			<a id="<?php echo $row[$upOne.'_id']; ?>" class="edit-link" href="#" title="Edit">
			<img src="../RequiredFiles_MCQ/edit.png" width="20px" />
            </a></td>
			<td align="center"><a id="<?php echo $row[$upOne.'_id']; ?>" class="delete-link" href="#" title="Delete">
			<img src="../RequiredFiles_MCQ/delete.png" width="20px" />
            </a></td>
			</tr>
			<?php
		}
		?>
        </tbody>
        </table>
        
        </div>

    </div>
    
    <br />
  
    

    
<script src="../RequiredFiles_MCQ/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../RequiredFiles_MCQ/assets/datatables.min.js"></script>
<script type="text/javascript" src="../RequiredFiles_MCQ/crud.js"></script>

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
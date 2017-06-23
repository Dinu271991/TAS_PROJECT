<?php
session_start();


include_once 'dbconfig.php';

$stmt = $db_con->prepare("SELECT * FROM tbl_admin WHERE admin_id=:uid");
$stmt->execute(array(":uid"=>$_SESSION['admin_session']));
$row=$stmt->fetch(PDO::FETCH_ASSOC);


if(!isset($_SESSION['admin_session']))
{
	header("Location: ../index.php");
} 


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>HR View - Staff Functionality</title>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen"> 
<link href="assets/datatables.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="mynewstyle.css">
<script type="text/javascript" src="assets/jquery-1.11.3-jquery.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

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
<style>
.limitTd{
  width : 150px;
  overflow:hidden;
  display:inline-block;
  text-overflow: ellipsis;
  white-space: nowrap;
}

</style>
</head>

<body>


    


	<div class="container"> 
	
	
	
	
	     
        <h2 class="form-signin-heading">Job Openings</h2><hr />
         <hr />
        
        <div class="content-loader">
        
        <table cellspacing="0" width="100%" id="example" class="table table-striped table-hover table-responsive">
        <thead>
        <tr>
        <th>Job Id</th>
        <th>Admin Id</th>
        <th>Department</th>
      	<th>Designation</th>
		<th>No of Position</th>
        <th>Year of Exp</th>
        <th>Job Description</th>
		<th>Job Status</th>
		<th>View</th>
        </tr>
        </thead>
        <tbody>
       <?php
       require_once 'dbconfig.php';
        
        $stmt = $db_con->prepare("SELECT * FROM JobRequirement");
        $stmt->execute(); 
		while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		{
			//$id=$row['user_id'];
			?>
			<tr>
			<td><?php echo $row['JobId']; ?></td>
			<td><?php echo $row['AdminId']; ?></td>
			<td><?php echo $row['Department']; ?></td>
			<td><?php echo $row['PostName']; ?></td>
			<td><?php echo $row['NoOfPosition']; ?></td>
			<td><?php echo $row['YearOfExp']; ?></td>
			<td class="limitTd"><?php echo $row['JobDesc']; ?></td>
			<td><?php echo $row['JobStatus']; ?></td>
			<td align="center">
			<a id="<?php echo $row['JobId']; ?>" class="edit-link" href="#" title="Edit">
			<img src="edit.png" width="20px" />
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



<?php
session_start();

if(!isset($_SESSION['admin_session']))
{
	header("Location: ../../../index.php");
}

include_once '../dbconfig.php';

$stmt = $db_con->prepare("SELECT * FROM tbl_admin WHERE admin_id=:uid");
$stmt->execute(array(":uid"=>$_SESSION['admin_session']));
$row=$stmt->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Data Structure Score Updates</title>
<link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="../../bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen"> 
<link href="../../assets/datatables.min.css" rel="stylesheet" type="text/css">

<script type="text/javascript" src="../../assets/jquery-1.11.3-jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="mynewstyle.css">

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
      
        <h2 class="form-signin-heading">User Browser and Internet Records.</h2><hr />
        <!-- <button class="btn btn-info" type="button" id="btn-add"> <span class="glyphicon glyphicon-pencil"></span> &nbsp; Add Programming Scores</button> -->
        <button class="btn btn-info" type="button" id="btn-view"> <span class="glyphicon glyphicon-eye-open"></span> &nbsp; View User Browser and Internet Scores</button>

        
        <div class="content-loader">
        
        <table cellspacing="0" width="100%" id="example" class="table table-striped table-hover table-responsive">
        <thead>
        <tr>
        <th>User Id</th>
        <th>Browser and Internet Id</th>
        <th>Browser and Internet Description</th>
        <th>Score</th>
		<th>View and Update Score</th>
        </tr>
        </thead>
        <tbody>
        <?php
        require_once '../dbconfig.php';
        
        $stmt = $db_con->prepare("SELECT * FROM tbl_user_browserinternet ORDER BY uid DESC");
        $stmt->execute();
		while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		{
			?>
			<tr>
			<td><?php echo $row['uid']; ?></td>
			<td><?php echo $row['browser_internet_id']; ?></td>
			<td><?php echo $row['browser_internet_desc']; ?></td>
			<td><?php echo $row['browser_internet_score']; ?></td>

			<td align="center">
			<a id="<?php echo $row['uid'];?>"  class="edit-link" href="#" title="<?php echo $row['browser_internet_id'];?>">
			<img src="edit.png" width="20px" />
			</a></td>
			<!-- <td align="center"><a id="<?php echo $row['uid']; ?>" class="delete-link" href="#" title="Delete">
			<img src="delete.png" width="20px" />
            </a></td> -->
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
$(document).ready(function() {
	$('#example').DataTable();

	$('#example')
	.removeClass( 'display' )
	.addClass('table table-bordered');
});
</script>
</body>
</html>
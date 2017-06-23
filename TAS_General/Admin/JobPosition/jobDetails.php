<html>
<body>

 <?php
 
 session_start();

if(!isset($_SESSION['admin_session']))
{
	header("Location: ../index.php");
}

include_once '../dbconfig.php';

$stmt = $db_con->prepare("SELECT * FROM tbl_admin WHERE admin_id=:uid");
$stmt->execute(array(":uid"=>$_SESSION['admin_session']));
$row=$stmt->fetch(PDO::FETCH_ASSOC);
 
 

 
 
        require_once '../dbconfig.php';
		
		if($_POST)
		{
			$jobId=$_POST['jobId'];
			$positionName=$_POST['positionName'];
			$yearOfExp=$_POST['yearOfExp'];
			$positionNo=$_POST['positionNo'];
			$jobDesc=$_POST['jobDesc'];
			$status=$_POST['status'];
			$date = date('Y-m-d H:i:s');
			try
			{
				$stmt2 = $db_con->prepare("insert into jobrequirement(JobId,AdminId,Department,PostName,NoOfPosition,YearOfExp,JobDesc,PostedDate,JobStatus) values($jobId,$row[admin_id],'$row[department]','$positionName',$positionNo,'$yearOfExp','$jobDesc','$date','$status')");
				//echo "Query Prepared!!";
				$stmt2->execute(); 
				echo "Inserted Successfully!!";
			}
			catch(Exception $e)
			{
				echo "Rows Not Inserted!!!";
			}
		
		}
		
		
     
		?>

Job Requirement Posted Successfully!!

<script>


</script>

</body>

</html>










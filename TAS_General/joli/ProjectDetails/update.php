<?php
require_once 'dbconfig.php';

	
	if($_POST)
	{
		$id = $_POST['id'];
		$projectName=$_POST['projectName'];
		$projectDesc = $_POST['projectDesc'];
		$projectStatus = $_POST['projectStatus'];
			
			
		$stmt = $db_con->prepare("UPDATE tbl_qaprojects SET Project_Name=:pn,Project_Desc=:pd,Project_Status=:ps WHERE Project_Id=:id");
		$stmt->bindParam(":pn", $projectName);
		$stmt->bindParam(":pd", $projectDesc);
		$stmt->bindParam(":ps", $projectStatus);
		$stmt->bindParam(":id", $id);
		
		if($stmt->execute())
		{
			echo "Successfully updated";
		}
		else{
			echo "Query Problem";
		}
	}

?>
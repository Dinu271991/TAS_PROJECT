<?php

include_once 'dbconfig.php';

$id=$_POST["id"];
$jobTitle=$_POST["jobTitle"];
$projectName=$_POST["projectName"];
$designation=$_POST["designation"];

$noOfVacancy=$_POST["noOfVacancy"];
$skills=$_POST["skills"];
$yearOfExp=$_POST["yearOfExp"];
$jobDesc=$_POST["jobDesc"];

$projectStatus=$_POST["projectStatus"];
$postedDate=$_POST["postedDate"];
$closingDate=$_POST["closingDate"];
$postedBy=$_POST["postedBy"];


	$stmt2 = $db_con->prepare("Update tbl_qajobs SET Job_Title=:jobTitle,Project_Name=:projectName,Designation=:designation,No_Of_Vacancy=:noOfVacancy,Skills=:skills,Year_Of_Exp=:yearOfExp,Job_Desc=:jobDesc,Project_Status=:projectStatus,Closing_On=:closingDate where Jobs_Id=:id");
	$stmt2->bindParam(":id", $id);
	$stmt2->bindParam(":jobTitle", $jobTitle);
	$stmt2->bindParam(":projectName", $projectName);
	$stmt2->bindParam(":designation", $designation);
	
	$stmt2->bindParam(":noOfVacancy", $noOfVacancy);
	$stmt2->bindParam(":skills", $skills);
	$stmt2->bindParam(":yearOfExp", $yearOfExp);
	$stmt2->bindParam(":jobDesc", $jobDesc);
	
	$stmt2->bindParam(":projectStatus", $projectStatus);
	$stmt2->bindParam(":closingDate", $closingDate);
	

	if($stmt2->execute())
	{
		echo "Successfully updated job details";
	}
	else
	{
		echo "Failed to update job details";
	}

?>
























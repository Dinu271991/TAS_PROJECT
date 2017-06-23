<?php

include_once 'dbconfig.php';

$id=$_POST["jobId"];
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


	$stmt2 = $db_con->prepare("insert into tbl_qajobs(Jobs_Id,Job_Title,Project_Name,Designation,No_Of_Vacancy,Skills,Year_Of_Exp,Job_Desc,Project_Status,Opened_On,Closing_On,PostedBy) values($id,'$jobTitle','$projectName','$designation',$noOfVacancy,'$skills','$yearOfExp','$jobDesc',$projectStatus,'$postedDate','$closingDate','$postedBy')");
	$stmt2->execute();

?>
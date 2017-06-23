<?php

include_once 'dbconfig.php';

$id=$_POST["projectId"];
$name=$_POST["projectName"];
$desc=$_POST["projectDesc"];
$status=$_POST["projectStatus"];

$stmt = $db_con->prepare("SELECT * from tbl_qaprojects");
$stmt->execute();
$CountOfProg=$stmt->rowCount();

		$stmt2 = $db_con->prepare("insert into tbl_qaprojects(Project_Id,Project_Name,Project_Desc,Project_Status) values($id,'$name','$desc',$status)");
		$stmt2->execute();



?>
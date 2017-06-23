<?php

include_once 'dbconfig.php';

$id=$_POST["editId"];

$stmt = $db_con->prepare("SELECT prgm_score from tbl_userprogram WHERE uid=:id");
$stmt->bindParam(":id", $id);
$stmt->execute();
$CountOfProg=$stmt->rowCount();

$i=1;
while($i<=$CountOfProg)
{	
		$score=$_POST["Program".$i];
		$stmt2 = $db_con->prepare("UPDATE tbl_userprogram SET prgm_score=:pscore WHERE uid=:id and program_id=:pid");
		$stmt2->execute(array(':pscore'=>$score,':id'=>$id,':pid'=>$i));
		$i++;
}	

?>
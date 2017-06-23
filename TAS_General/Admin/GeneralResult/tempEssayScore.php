<?php

include_once 'dbconfig.php';

$id=$_POST["editId"];

$stmt = $db_con->prepare("SELECT essay_score from tbl_useressays WHERE uid=:id");
$stmt->bindParam(":id", $id);
$stmt->execute();
$CountOfProg=$stmt->rowCount();

$i=1;
while($i<=$CountOfProg)
{	
		$score=$_POST["Essay".$i];
		$stmt2 = $db_con->prepare("UPDATE tbl_useressays SET essay_score=:pscore WHERE uid=:id and essay_id=:pid");
		$stmt2->execute(array(':pscore'=>$score,':id'=>$id,':pid'=>$i));
		$i++;
}	

?>
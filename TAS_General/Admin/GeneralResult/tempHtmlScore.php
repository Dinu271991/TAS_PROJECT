<?php

include_once 'dbconfig.php';

$id=$_POST["editId"];

$stmt = $db_con->prepare("SELECT html_score from tbl_userhtml WHERE uid=:id");
$stmt->bindParam(":id", $id);
$stmt->execute();
$CountOfProg=$stmt->rowCount();

$i=1;
while($i<=$CountOfProg)
{	
		$score=$_POST["Html".$i];
		$stmt2 = $db_con->prepare("UPDATE tbl_userhtml SET html_score=:pscore WHERE uid=:id and html_id=:pid");
		$stmt2->execute(array(':pscore'=>$score,':id'=>$id,':pid'=>$i));
		$i++;
}	

?>
<?php
include_once '../dbconfig.php';

if($_POST['del_id'])
{
	$id = $_POST['del_id'];	
	$stmt->bindParam(":pid", $program_id);
	$stmt=$db_con->prepare("DELETE FROM tbl_user_ds WHERE uid=:id");
	$stmt->execute(array(':id'=>$id));	
}
?>
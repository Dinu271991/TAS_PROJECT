<?php
include_once 'dbconfig.php';

if($_POST['del_id'])
{
	$id = $_POST['del_id'];	
	$html_id=$_POST['prog_id'];
	$stmt=$db_con->prepare("DELETE FROM tbl_userhtml WHERE uid=:id and html_id=:hid");
	$stmt->execute(array(':id'=>$id,'hid'=>$html_id));	
}
?>
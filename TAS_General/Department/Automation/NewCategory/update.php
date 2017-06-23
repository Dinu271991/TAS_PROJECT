<?php
require_once '../RequiredFiles/dbconfig.php';
$upOne = basename(__DIR__ ); 
$dept="Automation";

	
	if($_POST)
	{
		$id = $_POST['id'];
		$prog_desc = $_POST[$upOne.'_desc'];
				
		$stmt = $db_con->prepare("UPDATE tbl_".$dept."_".$upOne." SET ".$upOne."_desc=:pd WHERE ".$upOne."_id=:id");
		$stmt->bindParam(":pd", $prog_desc);
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